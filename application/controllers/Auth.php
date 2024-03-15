<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ob_start();
class Auth extends CI_Controller{ 
 function __construct() {
	parent::__construct();
		$this->load->database();
		$this->load->model('signup_model');
		$this->load->model('Generalmodel');
		$this->load->model('login_model');
		 $this->load->library('email');
		$this->load->helper('string');
		$this->load->library('paypal_lib');
		$this->load->library('cart');
	}
	public function index(){
		$data['title'] = "Signup";
	    $this->load->view('headerlogin',$data);
		$this->load->view('signup',$data);
		$this->load->view('footerlogin',$data);
	}
	
	public function signup(){
		$data['title'] = "Signup";
	    $this->load->view('common/header',$data);
		$this->load->view('signup',$data);
		$this->load->view('common/footer',$data);
	}
	

	public function registration(){
	 
		$date1 = date('d-m-Y g:i:s a');
		// $url_segment = $this->uri->segment(1);
		// print_r($url_segment); exit();
		$user_id = mt_rand(100000000, 999999999);
		// $ip_address = $this->input->ip_address();   
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email_id]');
		if($this->form_validation->run()==FALSE){
		$this->session->set_flashdata("error", "<b>Email is already exists. Please try signing up with another email.!!!</b>");
		redirect('login');
		}else{
			
			$data = array(
				// 'user_type' => $this->input->post('user_type'),
				'full_name' => $this->input->post('name'),
				'email_id' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company_name' => $this->input->post('company_name'),
				'industry' => $this->input->post('industry'),
				'user_id' => $user_id,
				'ip_address' => $ip_address,
				'password' => md5($this->input->post('password')),
				'created_at'=> date('Y-m-d H:i:s'),
				'status' => '1'
			);	
			$query = $this->Generalmodel->show_data_id('user','','','insert',$data);
			 
			$user_id=$this->db->insert_id();

			$getuser = $this->Generalmodel->show_data_id('user',$user_id,'id','get','');

			$ref_code = $this->input->post('ref_code');
			if($ref_code!=''){
				$refuser = $this->Generalmodel->show_data_id('user',$ref_code,'user_id','get','');
				if(!empty($refuser)){
					$refdata = array(
						'member_id' => $getuser[0]->user_id,
						'parent_id' => $refuser[0]->user_id
					);
					$insertref = $this->Generalmodel->show_data_id('mlm_data','','','insert',$refdata);
				}
			}


			$sub_url=base_url().'Auth'.'/'.'account_activation'.'/'.base64_encode($user_id);
	 
			 
			$from_email = "shilpiwithyou00@gmail.com";
			$to_email = $this->input->post('email');
			$data1 = array(
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'reg_date'=> date('Y-m-d H:i:s'),
						'sub_url'=>$sub_url
				   );
			
			$msg = $this->load->view('requesttemplate',$data1,TRUE);
		  //  $config['mailtype'] = 'html';
		  //  $this->load->library('email');
		  //  $this->email->initialize($config);
		  //  $msg = $msg;
		  //  $subject = 'Registration Success Message From B2B Network Sollutions.';   
    //         $this->email->from($from_email); 
		  //  $this->email->to($to_email);
    //         $this->email->subject($subject); 
    //         $this->email->message($msg);
    
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'smtp.mailgun.org';
                $config['smtp_user'] = 'postmaster@senddata.co.in';
                $config['smtp_pass'] = 'ca2067c3c6236b8f0ac1ae19d0aef6fe-f0e50a42-1dc7bdb8';
                $config['smtp_port'] = 587; // or the appropriate port for your SMTP server
                $config['smtp_crypto'] = 'tls'; // or 'ssl' if required by your SMTP server
                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['newline'] = "\r\n";
                $this->load->library('email');
                $this->email->initialize($config);
                $this->email->to($this->input->post('email'));
                $this->email->from($from_email);
                // $from = $this->input->post('email');
                // $this->email->to($from);
                // $this->email->cc('codegalaxycs@gmail.com');
                $this->email->subject("Registration Success Message From B2B Network Sollutions.");
                $this->email->message($msg);
                
                if($this->email->send()){
    				//  echo 1;
    				$this->session->set_flashdata("success", "<b>You Have Registered Successfully.</b>");
    			    redirect('auth/signup');
    		        }else{   
    		          //  echo $this->email->print_debugger();
    // 			echo 0;
    				$this->session->set_flashdata("success", "<b>You Have Registered Successfully.</b>");
    			     redirect('auth/signup');
    	          }
	     }
	   //  exit;
	 }
	 
	 function account_activation(){
	    $data = array(
					'status' =>1
					);
		$id = $this->uri->segment(3);
		$uid = base64_decode($id);
		$query = $this->Generalmodel->show_data_id('user',$uid,'id','update',$data);
	    $this->session->set_flashdata('success', ' Successfully Verified Your Account.');
		redirect('login');
	}

	 
	//==================================Form validation============================================
	public function login_validation(){
		// print_r($_POST);
		//  exit;
		$this->load->library('session');
		$query = $this->login_model->user_login($this->input->post('email'),md5($this->input->post('password')));
		// print_r($this->db->last_query()); exit;
		if(@$query[0]->email!=''){
    		$user_status = $query[0]->status;
    		$email = $query[0]->email;
    		$uid = $query[0]->id;
    		// $type = $query[0]->user_type;
    		if($query==true && $user_status=='Active'){
    			$this->session->set_userdata('logged',$session_data);
    			$session_data = array(
    				'email'=>$email,
    				'uid'=>$uid,
    				'is_userlogged_in' => 1,
    				
    			);
				// print_r($session_data);
    		// Add user data in session
    		$this->session->set_userdata('user_id', $query[0]->id);
    		$this->session->set_userdata('logged_in', $session_data);
    		$this->session->set_userdata('is_userlogged_email',$email);
    		$this->session->set_userdata('is_userlogged_id',$uid);
    		// $this->session->set_userdata('is_userlogged_type',$type);
    		// echo "d"; exit;
    		redirect('profile/dashboard',$session_data);
    		// redirect('home',$session_data);
    		}else{
				// echo "ss"; exit;
				$this->session->set_flashdata('logerror', 'Contact admin for issue resolution!!!');
    			redirect('login','refresh');
    		}
		}else{
			// echo "kk"; exit;
			$this->session->set_flashdata('logerror', 'Invalid Username or Password !!!');
			redirect('login','refresh');
		}
	}
	//================================Form Validation==========================================
	 
	
	function forgot_password(){
 		$data['title']='Forgot Password';
       	    $this->load->view('common/header',$data);
		$this->load->view('forgot_password',$data);
		$this->load->view('common/footer',$data);
    } 
	 	
	
	
	function send_forgot_pass(){
		$useremail=$this->input->post('email');
		$query = $this->Generalmodel->show_data_id('user_register',$useremail,'email','get','');
		if(count($query)>0){
		$userid = $query[0]->user_id;
		$uid=base64_encode($userid);
		//===========================------------------=========================
		$from_email = "shilpiwithyou00@gmail.com"; 
		$to_email = $this->input->post('email'); 
		$url = base_url()."auth/createnewpassword/".$uid;
		//***********************================******************  
		$data1 = array(
		'name' =>$query[0]->name,
		'email' => $this->input->post('email'),
		'url' => $url
		);
		//***********************================******************
		$msg = $this->load->view('forgotmailtemplate',$data1,TRUE);
		$config['mailtype'] = 'html';
		$this->load->library('email');
		$this->email->initialize($config);
		$msg = $msg;
		$subject = 'Change Password For Your MLM User Account.';   
		$this->email->from($from_email, 'MLM ADMINISTRATOR'); 
		$this->email->to($to_email);
		$this->email->subject($subject); 
		$this->email->message($msg);
		//===========================------------------=========================
		if($this->email->send()){ 
		
		$this->session->set_flashdata("sent","Email sent successfully.Check your Email !!!"); 
		redirect('forgot_password');
		
		
		}else{ 
		
		$this->session->set_flashdata("sent","Error in sending Email."); 
		redirect('forgot_password');
		
		}
		
		}else{
		$this->session->set_flashdata("ferror","Email can not match!!!");    
		redirect('forgot_password');
		}
 
  }

	function createnewpassword(){
		$data['title']='Change Password';
		$this->load->view('common/header',$data);
		$this->load->view('new_password');
		$this->load->view('common/footer');
  }
  
  	function getnewpassword(){
    @$uid=base64_decode($this->input->post('uid'));
    $data = array(
     'password' =>md5($this->input->post('password'))
    );
    $query = $this->Generalmodel->show_data_id('user_register',$uid,'user_id','update',$data);
    $this->session->set_flashdata("sent","Password change successfully.Login now!!!");    
       redirect('auth/createnewpassword');
   
  }
	
	
    public function checkrefCode(){
    	$ref = $this->input->post('ref_code');
		if($this->input->post('action') == 0):
// 			$chk = $this->Generalmodel->show_data_with_multiple_condition2('referal',$ref,'reference_code','Active','status','get','');
// 			if(count($chk) == 1){
// 				echo "1";
// 			}else{
// 				echo "0";
// 			}
            $chk1 = $this->Generalmodel->show_data_with_multiple_condition2('referal',$ref,'reference_code','Active','status','get','');
			// prx($chk1);
			if(count($chk1) == 1){
				$arr = array('error'=> 1);
			}else{
				$arr = array('error'=> 0);;
			}
			$chk = $this->Generalmodel->show_data_with_multiple_condition2('user_register',$chk1[0]->user,'ref_user','Active','status','get','');
			// echo count($chk);
			$arr['count'] = count($chk);
			echo json_encode($arr);
		else:
			$chk1 = $this->Generalmodel->show_data_with_multiple_condition2('referal',$ref,'reference_code','Active','status','get','');
			// prx($chk1);
			if(count($chk1) == 1){
				$arr = array('error'=> 1);
			}else{
				$arr = array('error'=> 0);;
			}
			$chk = $this->Generalmodel->show_data_with_multiple_condition2('user_register',$chk1[0]->user,'ref_user','Active','status','get','');
			// echo count($chk);
			$arr['count'] = count($chk);
			echo json_encode($arr);
		endif;
    }

	
 
	public function logout(){
			$this->session->sess_destroy();
			redirect('login', 'refresh');
		}   

}
?>