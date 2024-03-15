<?php
ob_start();
if (!defined('BASEPATH')) exit('No direct script access allowed');
//include_once (dirname(__FILE__) . "/my_controller.php");
class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Generalmodel');
		$this->load->helper('text');
		$this->load->library("pagination");
		$this->load->helper('string');
		$this->load->library('cart');
	}
	// function rankUpdate(){
	// 	$users = $this->Generalmodel->show_data_id('user_register','', '', 'get', '');
	// 	foreach($users as $user){
	// 		$totalLeft = $this->Generalmodel->show_data_id('user_register', $user->ref_code, 'registered_ref_code', 'get', '');
	// 		$dr = count($user);
	// 	}
	// }
	public function about()
	{

		$data['about']  = $this->Generalmodel->show_data_id('about', 'Active', 'status', 'get', 'id');
		$data['cms5']  = $this->Generalmodel->show_data_id('cms', '5', 'id', 'get', '');
		$data['cms6']  = $this->Generalmodel->show_data_id('cms', '6', 'id', 'get', '');
		$data['testimonial']  = $this->Generalmodel->show_data_id_order('testimonial', 'Active', 'status', 'desc', 'id ', 'get', '');
		$this->load->view('common/header', $data);
		$this->load->view('about');
		$this->load->view('common/footer');
	}
	public function register()
	{
		$data['url'] = $this->uri->segment(2);
		$data['title'] = "Register";
		$this->load->view('common/header', $data);
		$this->load->view('register');
		$this->load->view('common/footer');
	}
	public function login() 
	{
		$data['title'] = "Login";
		$this->load->view('common/header', $data);
		$this->load->view('login');
		$this->load->view('common/footer');
	}

	public function Contact()
	{
		$data['setings'] = $this->Generalmodel->show_data_id('settings', '1', 'id', 'get', '');
		$data['title'] = "Contact Us";
		$this->load->view('common/header', $data);
		$this->load->view('contact');
		$this->load->view('common/footer');
	}


	function Send_contact()
	{

		$data = $this->input->post();
		$ContactDate = $data['ContactDate'] = date('Y-m-d h:i:s');
		$querysettings = $this->Generalmodel->show_data_id('settings', '', '', 'get', '');
		$data['settings'] = $querysettings;
		$from_email = $this->input->post('email');
		$to_email = $querysettings[0]->email;
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message'),
			'date' => $ContactDate
		);

		$query = $this->Generalmodel->show_data_id('contact_details', '', '', 'insert', $data);
		$data['logo']  = $querysettings[0]->logo;
		$msg = $this->load->view('contacttemplate', $data, TRUE);
		$config['mailtype'] = 'html';
		$this->load->library('email');
		$this->email->initialize($config);
		$msg = $msg;
		// echo $msg; exit();
		$subject = 'Enquery From ' . $this->input->post('name');
		$this->email->from($from_email, $this->input->post('email'));
		$this->email->to($to_email);
		$this->email->bcc($from_email);
		$this->email->subject($subject);
		$this->email->message($msg);
		if ($this->email->send()) {
			// $this->session->set_flashdata('successmss', 'Thankyou for contacting with us, we will get back to you soon!!');
			echo "success";// exit();
			// redirect('contact', 'refresh');
		} else {
			// $this->session->set_flashdata('successmss', 'Thankyou for contacting with us, we will get back to you soon!!');
			// echo "error";// exit;
			echo "success";
			// redirect('contact', 'refresh');
		}
	}

	public function user_registration()
	{
		$sponUserId = 0;
		$refUserId = 0;
		//
		if ($this->input->post('ref_code')) {
			$ref = $this->input->post('ref_code');
			$chk = $this->Generalmodel->show_data_with_multiple_condition2('referal', $ref, 'reference_code', 'Active', 'status', 'get', '');
			$refUserId = $chk[0]->user;
		}
		
		if ($this->input->post('spon_code')) {
			$sponchk = $this->Generalmodel->show_data_with_multiple_condition2('referal', $this->input->post('spon_code'), 'reference_code', 'Active', 'status', 'get', '');
			// echo "<pre>"; print_r($sponchk); exit;
			if($sponchk){
			$refUserId= $sponUserId = $sponchk[0]->user;
			}
		}

		$characters = '0123456789123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

		// Initialize the OTP variable
		$otp = '';
		$spon_code = '';

		// Generate a random OTP of the specified length
		for ($i = 0; $i < 6; $i++) {
			$otp .= $characters[rand(0, strlen($characters) - 1)];
		}
		// for ($i = 0; $i < 6; $i++) {
		// 	$spon_code .= $characters[rand(0, strlen($characters) - 1)];
		// }
        $uniqueId = $this->Generalmodel->show_data_id('user_id', '', '', 'get', '');
        $uniqueUserId = $uniqueId[0]->user_id +1;
		$data = array(
			'user_id' =>"MB".$uniqueUserId,
			"name" => $this->input->post('name'),
			"phone" => $this->input->post('phone'),
			"email" => $this->input->post('email'),
			"password" => md5($this->input->post('password')),
			"upliner" => $sponUserId ? $sponUserId : $refUserId,
			"ref_user" => $refUserId,
			"registered_ref_code" => $this->input->post('ref_code'),
			"ref_code" => $otp,
			// "spon_code" => $spon_code,
			"sponsored_user" => $sponUserId,
			"registered_spon_code" => $this->input->post('spon_code'),
			"date" => date('Y-m-d h:i:s'),
			"status" => 'active',
		);
		// echo "<pre>"; print_r($data); exit;
		// 
		$query = $this->Generalmodel->show_data_id('user_register', '', '', 'insert', $data);
		$uid = $this->db->insert_id();
		$startCost = 500;
		if ($query) {
		    $i = $this->Generalmodel->show_data_id('user_id', 1, 'id', 'update', ['user_id' => $uniqueUserId]);
			$referal = array(
				"user" => $uid,
				"reference_code" => $otp,
				"status" => 'active',
			); 
			// $referal_count = $this->Generalmodel->count_referals('referal', $uid);

			// print_r($referal_count); exit();
			$referal = $this->Generalmodel->show_data_id('referal', '', '', 'insert', $referal);
			$sponsored_code = array(
				"user" => $uid,
				"code" => $spon_code,
				"status" => 'active',
			);
			$referal = $this->Generalmodel->show_data_id('sponsored_code', '', '', 'insert', $sponsored_code);
			if($this->input->post('ref_code')){
				$star = 0;
				$super_star = 0;
				$mega_star = 0;
				$ultimate_star = 0;
				$royal_star = 0;
				$noRank = 0;
				$totalLeft = $this->Generalmodel->show_data_id('user_register', $refUserId, 'ref_user', 'get', '');
				foreach($totalLeft as $key => $value){
					if ($value->rank == 0) {
						$noRank++;
					}
					if ($value->rank == 1) {
						$star++;
					}
					if ($value->rank == 2) {
						$super_star++;
					}
					if ($value->rank == 3) {
						$mega_star++; 
					}
					if ($value->rank == 4) {
						$ultimate_star++;
					}
					if ($value->rank == 5) {
						$royal_star++;
					}
				}
				
				$refUserData = $this->Generalmodel->show_data_id('user_register', $refUserId, 'id', 'get','');
				$rank_income_management = $this->Generalmodel->show_data_id('rank_income_management', '', 'id', 'get', '' );
				// $rank = 0;
				// echo $rank_income_management[0]->number; exit;
				if($noRank >= 10){$rank = 1;}
				if($star == $rank_income_management[0]->number){$rank = 2;}
				if($super_star == $rank_income_management[1]->number){$rank = 3;}
				if($mega_star == $rank_income_management[2]->number){$rank = 4;}
				if($ultimate_star == $rank_income_management[3]->number){$rank = 5;}
				if($royal_star == $rank_income_management[4]->number){$rank = 6;}
				
				$dataUpdate = array('rank' => $rank);
				// pr($noRank);
				// 		pr($star);
				// 	pr($super_star);
				// 			pr($mega_star);
				// 				pr($ultimate_star);
				// 					pr($royal_star);
				// 					pr($dataUpdate);
				$ru = $this->Generalmodel->show_data_id('user_register', $refUserId, 'id', 'update', $dataUpdate);
				// prx($totalLeft);
						

			}

			$team_income_management = $this->Generalmodel->show_data_id('team_income_management', 1, 'id', 'get', '' );
			if($refUserId != 0){
				$data = array(
					'user_id' => $refUserData[0]->id,
					'amount' => $team_income_management[0]->amount,
					'type'=> 'Credit',
					'note' => 'Direct Referral Point',
					'transaction_type' => 'Direct',
					'date' => date('Y-m-d h:i:s')
				);
				// echo "<pre>"; print_r($registration); exit;
				$Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
				$startCost = $startCost - 100;
				$startCost = $this->lavelPointDivsion($uid, 1, $startCost);
			}
			
			// Insert To Club Fund Data
			$clubData = array(
				'register_user' => $uid,
				'referral_user' => $refUserData[0]->id,
				'amount' => 50,
				'type'=> 'Credit',
				// 'note' => 'DIRECT REFERRAL POINT',
				'date' => date('Y-m-d h:i:s')
			);
			$Ins = $this->Generalmodel->show_data_id('club_fund', '', '', 'insert', $clubData);
			$startCost -= 50;
			// Insert To Rank Fund Data
			$clubData = array(
				'register_user' => $uid,
				'referral_user' => $refUserData[0]->id,
				'amount' => 50,
				'type'=> 'Credit',
				// 'note' => 'DIRECT REFERRAL POINT',
				'date' => date('Y-m-d h:i:s')
			);
			$startCost -= 50;
			// prx($startCost);
			$Ins = $this->Generalmodel->show_data_id('rank_fund', '', '', 'insert', $clubData);
			$admin_wallet = array(
				'user_id' => $uid,
				'amount' => $startCost,
				'type'=> 'Credit',
				
				// 'note' => 'Direct Referral Point',
				'date' => date('Y-m-d h:i:s')
			);
			// prx($admin_wallet);
			$Ins = $this->Generalmodel->show_data_id('admin_wallet', '', '', 'insert', $admin_wallet);
			// if($sponUserId){
			// 	$reward = $this->Generalmodel->show_data_id('cost_breakup_management', 2, 'id', 'get', '');
			// 	$data = array(
			// 		'user_id' => $sponUserId,
			// 		'amount' => $reward[0]->ammount,
			// 		'type'=> 'Credit',
			// 		'note' => 'Reward Points',
			// 		'date' => date('Y-m-d h:i:s')
			// 	);
			// 	$Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
			// }

			// if($refUserId){
			// 	$reward = $this->Generalmodel->show_data_id('cost_breakup_management', 2, 'id', 'get', '');
			// 	$data = array(
			// 		'user_id' => $sponUserId,
			// 		'amount' => $reward[0]->ammount,
			// 		'type'=> 'Credit',
			// 		'note' => 'Reward Cashback',
			// 		'date' => date('Y-m-d h:i:s')
			// 	);
			// 	$Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
			// }
		}
		$this->session->set_flashdata('successmss', 'Register Successfully!!');
		redirect('register', 'refresh');
	}
	function lavelPointDivsion($uid, $lavel_no, $startCost){
		$user = $this->Generalmodel->show_data_id('user_register', $uid, 'id', 'get','');
		if($user[0]->ref_user != 0 && $lavel_no <= 30){
			$point = 0;
			$note = "";
			if($lavel_no >= 1 && $lavel_no <= 5){
				$point = 10;
			}elseif($lavel_no >= 6&& $lavel_no <= 10){
				$point = 5;
			}elseif($lavel_no >= 11 && $lavel_no <= 20){
				$point = 2;
			}elseif($lavel_no >= 21&& $lavel_no <= 30){
				$point = 0.5;
			}
			$startCost -= $point;
			$data = array(
				'user_id' => $user[0]->ref_user,
				'amount' => $point,
				'type'=> 'Credit',
				'transaction_type' => 'Lavel',
				'note' => 'Lavel '.$lavel_no.' Point',
				'date' => date('Y-m-d h:i:s')
			);
			// echo "<pre>"; print_r($registration); exit;
			$Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
			$lavel_no++;
			$startCost = $this->lavelPointDivsion($user[0]->ref_user, $lavel_no, $startCost);
		}
		return $startCost;
	}
	
	public function user_register_login()
	{

		$this->load->library('session');
		$query = $this->login_model->user_login($this->input->post('email'), md5($this->input->post('password')));
		print_r($this->db->last_query());
		print_r($query);
		exit;
		if (@$query[0]->email_id != '') {
			$user_status = $query[0]->status;
			$email = $query[0]->email_id;
			$uid = $query[0]->user_id;
			// $type = $query[0]->user_type;
			if ($query == true && $user_status == 1) {
				$this->session->set_userdata('logged', $session_data);
				$session_data = array(
					'email' => $email,
					'uid' => $uid,
					'is_userlogged_in' => 1,

				);
				// Add user data in session
				$this->session->set_userdata('user_id', $query[0]->id);
				$this->session->set_userdata('logged_in', $session_data);
				$this->session->set_userdata('is_userlogged_email', $email);
				$this->session->set_userdata('is_userlogged_id', $uid);
				$this->session->set_userdata('is_userlogged_type', $type);
				if ($this->input->post('business-listing') == 'business-listing') {
					// redirect('page/business_listing',$session_data);
				} else {
					// redirect('profile/dashboard',$session_data);
					redirect('become_a_member', $session_data);
				}
				// redirect('profile/dashboard',$session_data);
				// redirect('home',$session_data);
			} else {
				$this->session->set_flashdata('logerror', 'Invalid Username or Password 1 !!!');
				redirect('login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('logerror', 'Invalid Username or Password 2 !!!');
			redirect('login', 'refresh');
		}
	}
	public function login_validate()
	{
		// print_r($_POST); exit;
		$this->load->library('session');
		$query = $this->login_model->user_login($this->input->post('email'), md5($this->input->post('password')));
		print_r($this->db->last_query()); exit;
		if (@$query[0]->email != '') {
			$user_status = $query[0]->status;
			$email = $query[0]->email;
			$uid = $query[0]->id;
			// $type = $query[0]->user_type;
			if ($query == true && $user_status == 'Active') {
				$this->session->set_userdata('logged', $session_data);
				$session_data = array(
					'email' => $email,
					'uid' => $uid,
					'is_userlogged_in' => 1,

				);
				// Add user data in session
				$this->session->set_userdata('user_id', $query[0]->id);
				$this->session->set_userdata('logged_in', $session_data);
				$this->session->set_userdata('is_userlogged_email', $email);
				$this->session->set_userdata('is_userlogged_id', $uid);
				$this->session->set_userdata('is_userlogged_type', $type);
				redirect('profile/dashboard', $session_data);
				// redirect('home',$session_data);
			} else {
				$this->session->set_flashdata('logerror', 'Contact admin for issue resolution!!!');
				redirect('login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('logerror', 'Invalid Username or Password  !!!');
			redirect('login', 'refresh');
		}
	}
}
