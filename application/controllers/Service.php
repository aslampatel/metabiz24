<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Service extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('Generalmodel');
	$this->load->model('Profile_model');
	$this->load->library("pagination");
	$this->load->helper('url');
	$this->load->helper('string');
	$this->load->library('grocery_CRUD');
	$this->load->library('cart');
	 if(!$this->session->userdata('logged_in')){
			redirect('signup', 'refresh');
        }
	$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
	$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
	$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
	$this->output->set_header('Pragma: no-cache');


//=========================Vendor Section================================	
 }
 function add_service(){
	 	$uid = $this->session->userdata('is_userlogged_id'); 
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
	    $data['title']="Dashboard";
	    $this->load->view('common/header',$data);
		$this->load->view('add_service',$data);
		$this->load->view('common/footer',$data);
}

function editprofile(){
		 
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
	    $data['title']="User Dashboard";
	    $this->load->view('common/header',$data);
		$this->load->view('profile_edit',$data);
		$this->load->view('common/footer',$data);
}

function changepassword(){
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
	 	  
	     $data['title']="Change Password";
	     $this->load->view('common/header',$data);
		 $this->load->view('change_pass',$data);
		 $this->load->view('common/footer',$data);
   }

function reset_pass(){
			$uid = $this->session->userdata('is_userlogged_id');
			$tablename='user';
			$data = array(			
				'password' => md5($this->input->post('new_pass'))
				);
		     $action='update';
			$id = $uid;
			$fieldname = 'user_id';
			$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
			$data['pass'] = $query;
			$this->session->set_flashdata('success', 'Password Changed Successfully !!!!');
			redirect('profile/changepassword');
		   }

function edit_profile(){
			 $uid = $this->session->userdata('is_userlogged_id');
			 //$ip_address = $this->input->ip_address(); 
			 //============================================
		 	 $image = $this->input->post('image');
			 $config = array(
				'upload_path' => "uploads/member/",
				'upload_url' => base_url() . "uploads/member/",
				'allowed_types' => "gif|jpg|png|jpeg"
			);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("userfile")) {
				@unlink("uploads/member/".$image);
				$data['img'] = $this->upload->data();
				 $data = array(
							
							'image' => $data['img']['file_name'],
							'full_name' => $this->input->post('name'),
							'phone' => $this->input->post('phone'),
							'address' => $this->input->post('address'),
							'description' => $this->input->post('description'),
							'company_name' => $this->input->post('company_name'),
							'industry' => $this->input->post('industry'),
							'facebook' => $this->input->post('facebook'),
							'instagram' => $this->input->post('instagram'),
							'twitter' => $this->input->post('twitter')
						);
				
			//echo "<pre/>";	print_r ($data); exit();
				
			}else{
				$data = array(
							'full_name' => $this->input->post('name'),
							'phone' => $this->input->post('phone'),
							'address' => $this->input->post('address'),
							'description' => $this->input->post('description'),
							'company_name' => $this->input->post('company_name'),
							'industry' => $this->input->post('industry'),
							'facebook' => $this->input->post('facebook'),
							'instagram' => $this->input->post('instagram'),
							'twitter' => $this->input->post('twitter')
						);
					//echo "<pre/>";	print_r ($data); exit();	
					}
				$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','update',$data);
				//echo $this->db->last_query(); exit();
				$data['title'] = "User Edit";
				$this->session->set_flashdata('success', 'User Data Updated Successfully !!!!');			
				redirect('profile/editprofile');
		}

//========================= Deal Management========================
function merchant_deals_management(){
		$query6 = $this->Generalmodel->show_data_id('settings','1','id','get','');
		$data['settings'] = $query6;
		//====Admin Mail====
		$query7 = $this->Generalmodel->show_data_id('admin_mail','1','MailId','get','');
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		//==================================
		$order_key='product_id';
		$order_data='ASC';
		$table_name='product';
		$primary_key='uid';
		$wheredata= $uid;
		$config = array();
		$config["base_url"] = base_url() . "profile/merchant_deals_management";
		$config["total_rows"] = $this->Generalmodel->record_count($table_name,$primary_key,$wheredata);
		//echo $this->db->last_query();
		$config["per_page"] =5;
		$config["uri_segment"] = 3;
		//============Pagination Configuration=================\
		$config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="current"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$config['first_link'] = '&lt;&lt;';
		$config['last_link'] = '&gt;&gt;';
		//============Pagination Configuration==================
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$query = $this->Generalmodel->getAllData($table_name,$primary_key,$wheredata,$config["per_page"],$page,$order_key,$order_data);
		$data['product'] = $query;
		$data["links"] = $this->pagination->create_links();
		//========================================================
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('merchant_deals_management');
		$this->load->view('footer');
}	

function deal_add_merchant(){
		$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$querycat = $this->Generalmodel->show_data_id('master_category','0','parent_id!=','get','');
		//echo $this->db->last_query(); exit();
		$data['category'] = $querycat;
		
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('add_deal');
		$this->load->view('footer');
}

function add_product_vendor(){
			$uid = $this->session->userdata('is_userlogged_id');
			$data = array(
				'uid' => $uid,
				'cat_id' => $this->input->post('cat_id'),
				'product_title' => $this->input->post('product_title'),
				'address' => $this->input->post('address'),
				'old_price' => $this->input->post('old_price'),
				'add_date' => date('Y-m-d :H:i:s'),
				'price' => $this->input->post('price'),
				'short_details' => $this->input->post('short_details'),
				'quantity' => $this->input->post('quantity'),
				'description' => $this->input->post('description'),
				'status' => 1
			);
			$this->Generalmodel->do_action('product','','','insert',$data,'');
			$lastid = $this->db->insert_id(); 
			$data = array();
			$filesCount = count($_FILES['userFiles']['name']);
			if($filesCount>0){
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
				$uploadPath = 'uploads/product/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['file_name']= random_string('alnum', 8);  
				$config['overwrite'] = false;
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$record = array(
								'prod_id' => $lastid,
								'add_date' => date('Y-m-d :H:i:s'),
								'image' => $fileData['file_name']
							);
			if(!empty($record)){
				$insert = $this->Generalmodel->do_action('product_images','','','insert',$record,'');
				}
			}
		}
			}
			$this->session->set_flashdata('success', '<div class="success">Deal added successfully</div>');
			redirect($_SERVER['HTTP_REFERER']);
	}	


function view_deal(){
		$sid = $this->uri->segment(3);
	 	
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$queryprod = $this->Generalmodel->show_data_id('product',$sid,'product_id','get','');
		$data['product'] = $queryprod;
		//echo $this->db->last_query(); exit();
	    $data['title']="Vendor Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('view_deal',$data);
		$this->load->view('footer',$data);
}

function edit_deal(){
		$sid = $this->uri->segment(3);
	 	//====About Page Content====
		$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$queryprod = $this->Generalmodel->show_data_id('product',$sid,'product_id','get','');
		$data['product'] = $queryprod;
		//echo $this->db->last_query(); exit();
		
		$querycat = $this->Generalmodel->show_data_id('master_category','0','parent_id','get','');
		//echo $this->db->last_query(); exit();
		$data['querycat'] = $querycat;
		
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('edit_deal',$data);
		$this->load->view('footer',$data);
}			

function product_edit(){
			$user_id = $this->session->userdata('is_userlogged_id');
			$pid = $this->input->post('product_id');
			$datalist = array(
				'uid' =>$user_id,
				'product_title' => $this->input->post('product_title'),
				'old_price' => $this->input->post('old_price'),
				'address' => $this->input->post('address'),
				'short_details' => $this->input->post('short_details'),
				'cat_id' => $this->input->post('cat_id'),
				'price' => $this->input->post('price'),
				'quantity' => $this->input->post('quantity'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				'add_date' => date('Y-m-d H:i:s')
			);
			//echo "<pre>"; print_r($datalist); exit();
			$queryupdate = $this->Generalmodel->show_data_id('product',$pid,'product_id','update',$datalist);	
			//echo $this->db->last_query(); exit();
			$postid=$pid;
			
			//=====================Multiple Image Upload=====================
			$data = array();
			echo $filesCount = count($_FILES['userFiles']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

				$uploadPath = 'uploads/product/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name']= random_string('alnum', 8);  
				$config['overwrite'] = false;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData[$i]['image'] = $fileData['file_name'];
                    $uploadData[$i]['prod_id']= $postid;
				}
			}
			//echo "<pre>";
			//print_r($uploadData);
			//exit();
			if(!empty($uploadData)){
				$insert = $this->Generalmodel->insertdata($uploadData);
			}
			$this->session->set_flashdata('success', 'Deal Updated Successfully !!!!');
			redirect($_SERVER['HTTP_REFERER']);
			//=====================Multiple Image Upload=====================
		}	

function delete_deal() {
			$pid = $this->uri->segment(3);
			@$result=$this->Generalmodel->show_data_id('product_images',$pid,'prod_id','get','');
			@$product_image = $result[0]->image; 
			$query = $this->Generalmodel->show_data_id('product',$pid,'product_id','delete','');
			$data['product'] = $query;
			$data['title'] = "Product List";
			$this->session->set_flashdata('success', 'Deal Deleted Successfully !!!!');			
			redirect($_SERVER['HTTP_REFERER']);
		}
		
function delete_product_img($id){
			$id = $this->uri->segment(3);
			$result=$this->Generalmodel->show_data_id('product_images',$id,'product_img_id','get','');
			@$product_image = $result[0]->image;
			$query = $this->Generalmodel->show_data_id('product_images',$id,'product_img_id','delete','');
			//echo $this->db->last_query(); exit();
			redirect($_SERVER['HTTP_REFERER']);
		}	
		
//========================= Deal Management========================	

//========================= Coupon Management========================
function merchant_coupon_management(){
		$query6 = $this->Generalmodel->show_data_id('settings','1','id','get','');
		$data['settings'] = $query6;
		//====Admin Mail====
		$query7 = $this->Generalmodel->show_data_id('admin_mail','1','MailId','get','');
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		//==================================
		$order_key='id';
		$order_data='ASC';
		$table_name='coupon';
		$primary_key='uid';
		$wheredata= $uid;
		$config = array();
		$config["base_url"] = base_url() . "profile/merchant_coupon_management";
		$config["total_rows"] = $this->Generalmodel->record_count($table_name,$primary_key,$wheredata);
		//echo $this->db->last_query();
		$config["per_page"] =5;
		$config["uri_segment"] = 3;
		//============Pagination Configuration=================\
		$config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="current"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$config['first_link'] = '&lt;&lt;';
		$config['last_link'] = '&gt;&gt;';
		//============Pagination Configuration==================
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$query = $this->Generalmodel->getAllData($table_name,$primary_key,$wheredata,$config["per_page"],$page,$order_key,$order_data);
		//echo $this->db->last_query(); exit();
		$data['coupon'] = $query;
		$data["links"] = $this->pagination->create_links();
		//========================================================
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('merchant_coupon_management');
		$this->load->view('footer');
}	

function coupon_add_merchant(){
		$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$querycat = $this->Generalmodel->show_data_id('master_category','0','parent_id!=','get','');
		//echo $this->db->last_query(); exit();
		$data['category'] = $querycat;
		$getcnt = $this->Generalmodel->show_data_id('countries','','','get','');
		$data['country'] = $getcnt;
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('add_coupon');
		$this->load->view('footer');
}

function add_coupon_vendor(){
			 $data = array(
				'deal_id' => $this->input->post('deal_id'),
				'uid' => $this->session->userdata('is_userlogged_id'),
				'coupon_title' => $this->input->post('coupon_title'),
				'coupon_discount' => $this->input->post('coupon_discount'),
				'coupon_start_date' => date('Y-m-d',strtotime($this->input->post('coupon_start_date'))),
				'coupon_expire_date' => date('Y-m-d',strtotime($this->input->post('coupon_expire_date'))),
				'coupon_code' => $this->input->post('coupon_code'),
				'coupon_country' => $this->input->post('coupon_country'),
				'coupon_status' => 1
			);
			$this->Generalmodel->show_data_id('coupon','','','insert',$data);
			$this->session->set_flashdata('success', 'Coupon added Successfully !!!!');			
			redirect($_SERVER['HTTP_REFERER']);
		}	

function view_coupon(){
		$sid = $this->uri->segment(3);
	 	
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$queryprod = $this->Generalmodel->show_data_id('coupon',$sid,'id','get','');
		$data['viewcoupon'] = $queryprod;
		//echo $this->db->last_query(); exit();
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('view_coupon',$data);
		$this->load->view('footer',$data);
}

function edit_coupon(){
		$sid = $this->uri->segment(3);
	 	//====About Page Content====
		$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		$queryprod = $this->Generalmodel->show_data_id('coupon',$sid,'id','get','');
		$data['ecms'] = $queryprod;
		//echo $this->db->last_query(); exit();
		$getdeal = $this->Generalmodel->show_data_id('product','','','get','');
		$data['deal'] = $getdeal;
		$getcountry = $this->Generalmodel->show_data_id('countries','','','get','');
		$data['country'] = $getcountry;
		$querycat = $this->Generalmodel->show_data_id('master_category','0','parent_id','get','');
		//echo $this->db->last_query(); exit();
		$data['querycat'] = $querycat;
		
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('edit_coupon',$data);
		$this->load->view('footer',$data);
}			

function coupon_edit(){
			$user_id = $this->session->userdata('is_userlogged_id');
			$datalist = array(			
					'deal_id' => $this->input->post('deal_id'),
					'coupon_title' => $this->input->post('coupon_title'),
					'coupon_discount' => $this->input->post('coupon_discount'),
					'coupon_start_date' => date('Y-m-d',strtotime($this->input->post('coupon_start_date'))),
					'coupon_expire_date' => date('Y-m-d',strtotime($this->input->post('coupon_expire_date'))),
					'coupon_code' => $this->input->post('coupon_code'),
					'coupon_country' => $this->input->post('coupon_country')
				);
				$id = $this->input->post('coupon_id');
				$query = $this->Generalmodel->show_data_id('coupon',$id,'id','update',$datalist);
				$this->session->set_flashdata('success', 'Coupon Updated Successfully !!!!');
				redirect($_SERVER['HTTP_REFERER']);
		}	

function delete_coupon() {
			$pid = $this->uri->segment(3);
			$query = $this->Generalmodel->show_data_id('coupon',$pid,'id','delete','');
			$this->session->set_flashdata('success', 'Coupon Deleted Successfully !!!!');			
			redirect($_SERVER['HTTP_REFERER']);
		}
		
//========================= Coupon Management========================				


function appliedcoupon(){
		$query6 = $this->Generalmodel->show_data_id('settings','1','id','get','');
		$data['settings'] = $query6;
		//====Admin Mail====
		$query7 = $this->Generalmodel->show_data_id('admin_mail','1','MailId','get','');
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		
		$query = $this->Generalmodel->dynamic_join('coupon_user_data','','coupon_id','coupon','id','','join','');
		//echo $this->db->last_query(); exit();
		$data['coupon'] = $query;
		
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('appliedcoupon');
		$this->load->view('footer');
}

function merchantcoupon(){
		$query6 = $this->Generalmodel->show_data_id('settings','1','id','get','');
		$data['settings'] = $query6;
		//====Admin Mail====
		$query7 = $this->Generalmodel->show_data_id('admin_mail','1','MailId','get','');
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		
		$query = $this->Generalmodel->dynamic_join('coupon',$uid,'id','coupon_user_data','coupon_id','uid','join','');
		//echo $this->db->last_query(); exit();
		$data['coupon'] = $query;
		
	    $data['title']="Merchant Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('merchantcoupon');
		$this->load->view('footer');
}	
function statuscoupon (){
		$stat= $this->input->get('stat'); 
		$id= $this->input->get('id'); 
		$data = array(			
			'coupon_status' => $stat
		);  
		$this->Generalmodel->show_data_id('coupon_user_data',$id,'id','update',$data);
	}
		
function service_vendor(){
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_vendor_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="Vendor Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('add_service',$data);
		$this->load->view('footer',$data);
}

function service_list_vendor(){
		$uid = $this->session->userdata('is_vendor_id');
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_vendor_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
		
		//==================================
		$order_key='service_id';
		 $order_data='asc';
		 $table_name='service';
		 $primary_key='u_id';
		 $wheredata= $uid;
		 $config = array();
		 $config["base_url"] = base_url() . "profile/service_list_vendor";
		 $config["total_rows"] = $this->Generalmodel->record_count($table_name,$primary_key,$wheredata);
		 //echo $this->db->last_query();
		 $config["per_page"] =5;
		 $config["uri_segment"] = 3;
		 //============Pagination Configuration=================\
		$config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="current"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$config['first_link'] = '&lt;&lt;';
		$config['last_link'] = '&gt;&gt;';
		 //============Pagination Configuration=================
		 $this->pagination->initialize($config);
		 $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		 $query = $this->Generalmodel->getAllData($table_name,$primary_key,$wheredata,$config["per_page"],$page,$order_key,$order_data);
		 $data['service'] = $query;
		 $data["links"] = $this->pagination->create_links();
		//===================================
	    $data['title']="Vendor Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('service_list_vendor',$data);
		$this->load->view('footer',$data);
}		

function add_service_vendor(){
			$uid = $this->session->userdata('is_vendor_id');
			$my_date = date("Y-m-d", time()); 
			$config = array(
			'upload_path' => "uploads/service/",
			'upload_url' => base_url() . "uploads/service/",
			'allowed_types' => "gif|jpg|png|jpeg"
			);
        	$this->load->library('upload', $config);
					if (!$this->upload->do_upload('userfile')){
            			$data['success_msg'] = '<div class="alert alert-success text-center">You Must Select An Image File!</div>';
						$this->session->set_flashdata('success', 'Please Upload Service image !!!!');			
						redirect('profile/service_vendor');
        			}else{
						 $data['userfile'] = $this->upload->data();
						 $filename=$data['userfile']['file_name'];
						 $data = array(
							'service_title' => $this->input->post('service_title'),
							'price' => $this->input->post('price'),
							'u_id' => $uid,
							'service_image' => $filename,
							'service_desc' => $this->input->post('service_desc'),
							'date' => $my_date,
							'service_status' => 0
						);
						$this->service_model->insert_service($data);
            			$upload_data = $this->upload->data();
						$data['title'] = "Vendor Dashboard";
						$this->session->set_flashdata('success', 'Service Added Successfully !!!!');			
						redirect('profile/service_list_vendor');
					}
				
		}	
		
function view_service_vendor(){
		$sid = $this->uri->segment(3);
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_vendor_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
		$query = $this->service_model->show_service_id($sid);
		$data['service'] = $query;
		//echo $this->db->last_query(); exit();
	    $data['title']="Vendor Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('view_service_vendor',$data);
		$this->load->view('footer',$data);
}			

function edit_service_vendor(){
		$sid = $this->uri->segment(3);
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_vendor_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
		$query = $this->service_model->show_service_id($sid);
		$data['service'] = $query;
		//echo $this->db->last_query(); exit();
	    $data['title']="Vendor Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('edit_service_vendor',$data);
		$this->load->view('footer',$data);
}			

function service_edit(){
			 $uid = $this->session->userdata('is_vendor_id');
			 $service_image = $this->input->post('service_image');
			 $config = array(
				'upload_path' => "uploads/service/",
				'upload_url' => base_url() . "uploads/service/",
				'allowed_types' => "gif|jpg|png|jpeg"
			);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("userfile")) {
				@unlink("uploads/service/".$service_image);
				//echo $image_data = $this->upload->data();
				$data['img'] = $this->upload->data();
				//============================================
				$datalist = array(
				'service_title' => $this->input->post('service_title'),
				'price' => $this->input->post('price'),
				'service_desc' => $this->input->post('service_desc'),
				'service_image' => $data['img']['file_name']
				);
				//echo $gallery_name=$_POST['gallery_name'];
				//====================Post Data===================
				//print_r($datalist);
				//exit();
				$id = $this->input->post('service_id');
				$data['title'] = "Service Edit";
				//loading database
				$this->load->database();
				//Calling Model
				$this->load->model('supercontrol/service_model');
				//Transfering data to Model
				$query = $this->service_model->service_edit($id,$datalist);
				// echo $ddd=$this->db->last_query();
				
				$data1['message'] = 'Data Update Successfully';
				$query = $this->service_model->show_servicelist();
				$data['ecms'] = $query;
				$data['title'] = "Service List";
				$this->session->set_flashdata('success', 'Service Updated Successfully !!!!');			
				redirect('profile/service_list_vendor');
				//*********************************
		
			}else{
				$datalist = array(			
					'type_id' => $this->input->post('service_type'),
					'service_title' => $this->input->post('service_title'),
					'price' => $this->input->post('price'),
				    'service_desc' => $this->input->post('service_desc')
				);
				$id = $this->input->post('service_id');
				$data['title'] = "Service Edit";
				//loading database
				$this->load->database();
				//Calling Model
				$this->load->model('supercontrol/service_model');
				//Transfering data to Model
				$query = $this->service_model->service_edit($id,$datalist);
				//echo $ddd=$this->db->last_query();
				//exit();
				$data1['message'] = 'Data Update Successfully';
				$query = $this->service_model->show_servicelist();
				$data['ecms'] = $query;
				$this->session->set_flashdata('edit_message', 'Service Updated Successfully !!!!');
				$data['title'] = "Service Page List";
				$this->load->view('supercontrol/header',$data);
				$this->session->set_flashdata('success', 'Service Updated Successfully !!!!');			
				redirect('profile/service_list_vendor');
			}
			
		}	

function delete_service() {
			$id = $this->uri->segment(3);
			@$result=$this->service_model->show_service_id($id);
			@$service_image = $result[0]->service_image; 
			$query = $this->service_model->delete_service($id,$service_image);
			$data['service'] = $query;
			$data['title'] = "Service List";
			$this->session->set_flashdata('success', 'Service Deleted Successfully !!!!');			
			redirect('profile/service_list_vendor');
		}
		
//===========================Vendor Section=================================

//===========================Client Section==================================
 function dashboard_client(){
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_client_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="client Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('dashboard_client',$data);
		$this->load->view('footer',$data);
}

function editprofile_client(){
		//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_client_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="client Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('editprofile_client',$data);
		$this->load->view('footer',$data);
}

function changepassword_client(){
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_client_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="client Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('changepassword_client',$data);
		$this->load->view('footer',$data);
}

function reset_pass_client(){
			$uid = $this->session->userdata('is_client_id');
			$tablename='user_registration';
			$data = array(			
				'password' => base64_encode($this->input->post('new_pass'))
				);
		    $action='update';
			$id = $uid;
			$fieldname = 'uid';
			$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
			$data['pass'] = $query;
			$this->session->set_flashdata('success', 'Password Changed Successfully !!!!');
			redirect('profile/changepassword_client');
		   }

function edit_client(){
			 $uid = $this->session->userdata('is_client_id');
			 $ip_address = $this->input->ip_address(); 
			 //============================================
		 	 $image = $this->input->post('image');
			 $config = array(
				'upload_path' => "uploads/member/",
				'upload_url' => base_url() . "uploads/member/",
				'allowed_types' => "gif|jpg|png|jpeg"
			);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("userfile")) {
				@unlink("uploads/member/".$image);
				$data['img'] = $this->upload->data();
				 $data = array(
							
							'image' => $data['img']['file_name'],
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							'email' => $this->input->post('email'),
							'ip_address' => $ip_address,
							'phone' => $this->input->post('phone'),
							'address' => $this->input->post('address')
						);
				
			//echo "<pre/>";	print_r ($data); exit();
				
			}else{
				$data = array(
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							'email' => $this->input->post('email'),
							'ip_address' => $ip_address,
							'phone' => $this->input->post('phone'),
							'address' => $this->input->post('address')
						);
					//echo "<pre/>";	print_r ($data); exit();	
					}
				$tablename='user_registration';
				$action='update';
				$id = $uid;
				$fieldname = 'uid';
				$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
				//echo $this->db->last_query(); exit();
				$data['title'] = "client Edit";
				$this->session->set_flashdata('success', 'client Updated Successfully !!!!');			
				redirect('profile/editprofile_client');
		}

function member_pricing_client(){
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_client_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="client Dashboard";
	    $this->load->view('header',$data);
		$this->load->view('member_pricing_client',$data);
		$this->load->view('footer',$data);
}
function membership(){
	 	//====About Page Content====
		$action='get';
		$data='';
		$tablename='cms';
		$fieldname = 'id';				
		$id = '1';
		$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
		$data['about'] = $query;
		//====About Page Content====
		//====Settings Elements====
		$action6='get';
		$data6='';
		$tablename6='settings';
		$fieldname6 = '';				
		$id6 = '';
		$query6 = $this->Generalmodel->show_data_id($tablename6,$id6,$fieldname6,$action6,$data6);
		$data['settings'] = $query6;
		//====Settings Elements====
		//====Admin Mail====
		$action7='get';
		$data7='';
		$tablename7='admin_mail';
		$fieldname7 = '';				
		$id7 = '';
		$query7 = $this->Generalmodel->show_data_id($tablename7,$id7,$fieldname7,$action7,$data7);
		$data['mail'] = $query7;
		//====Admin Mail====
	 	$uid = $this->session->userdata('is_client_id');
		$mid = $uid;
		$action3='get';
		$data3='';
		$tablename3='user_registration';
		$fieldname3 = 'uid';				
		$id3 = $mid;
		$query = $this->Generalmodel->show_data_id($tablename3,$id3,$fieldname3,$action3,$data3);
		$data['dashboard'] = $query;
	    $data['title']="client Dashboard";
		
			    $date1 = date('Y-m-d h:i:s');   
			    $from_email = "members@generalrepairs.net";
				$to_email = $this->input->post('Email');
				$id = $this->input->post('uid');
				$subid = $this->input->post('subid');
				$first_name = $this->input->post('first_name');
				$last_name = $this->input->post('last_name');
				$phone = $this->input->post('phone');
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'Email' => $this->input->post('Email'),
					'subscription' => $subid,
					'price' => 'Free',
					'phone' => $this->input->post('phone'),
					'Message' => 'Gold Membership Flat 5% discount',
					'ContactDate' =>$date1
				);
				//$tablename='user_contact';
				//$action='insert';
				//$id='';
				//$fieldname='';		
				//$query = $this->Generalmodel->show_data_id($tablename,$id,$fieldname,$action,$data);
				$msg = $this->load->view('subscriptiontemplate',$data,TRUE);
				$config['mailtype'] = 'html';
				$this->load->library('email');
				$this->email->initialize($config);
				$msg = $msg;
				$subject = 'Subscription Message From General Repairs';   
				$this->email->from($this->input->post('admin_mail'), 'General Repairs Administrator'); 
				$this->email->to($from_email);
				//$this->email->bcc($from_email);
				$this->email->subject($subject); 
				$this->email->message($msg);
				if($this->email->send()){
					$this->session->set_flashdata('success', 'Subscription Request Sent Successfully !!!!');			
					redirect('profile/member_pricing_client');
				}else{  
					$this->session->set_flashdata('success', 'Subscription Request Sent Successfully !!!!');			
					redirect('profile/member_pricing_client');
				}
}		

function order(){
		
		$uid = $this->session->userdata('is_userlogged_id');
		$query = $this->Generalmodel->show_data_id('user',$uid,'uid','get','');
		$data['dashboard'] = $query;
		$query = $this->Generalmodel->show_data_id('book_order',$uid,'uid','get','');
		$data['order'] = $query;
		
		$data['title'] = "Booked Order";
		$this->load->view('header',$data);
		$this->load->view('bookedorder',$data);
		$this->load->view('footer');
	}
		
	//========================Client Section=======================================

	function current_course(){
		$uid = $this->session->userdata('is_userlogged_id');
		$queryuser = $this->Generalmodel->show_data_id('user',$uid,'uid','get','');
		$data['dashboard'] = $queryuser;
		$query = $this->Generalmodel->get_current_course($uid);
		$data['currentcourse'] = $query;
		$data['title'] = "Current Courses";
		$this->load->view('header',$data);
		$this->load->view('current_course',$data);
		$this->load->view('footer');
	}
	
	function past_course(){
		$uid = $this->session->userdata('is_userlogged_id');
		$queryuser = $this->Generalmodel->show_data_id('user',$uid,'uid','get','');
		$data['dashboard'] = $queryuser;
		$query = $this->Generalmodel->get_current_course($uid);
		$data['currentcourse'] = $query;
		$data['title'] = "Past Courses";
		$this->load->view('header',$data);
		$this->load->view('past_course',$data);
		$this->load->view('footer');
	}

	public function course_details(){
		$id=$this->uri->segment(3);
		$uid = $this->session->userdata('is_userlogged_id');
		$queryuser = $this->Generalmodel->show_data_id('user',$uid,'uid','get','');
		$data['dashboard'] = $queryuser;
		$query = $this->Generalmodel->show_data_id('course_schedule',$id,'course_id','get','');
		$data['schedulaval'] = $query[0]->schedule;
		$data['dt'] = $query;
		$data['countrow'] = count($query);
		$query = $this->Generalmodel->show_data_id('course',$id,'id','get','');
		$data['course'] = $query;
        $data['title'] = "Course";
	    $this->load->view('header',$data);
		$this->load->view('course_details_dashboard');
		$this->load->view('footer');
	}


	function orders(){
		 
	 	$uid = $this->session->userdata('is_userlogged_id'); 
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap');
			$crud->set_table('orderdetails');
			$crud->where('UserId',$uid);
			$crud->set_subject('Order Details');
			$crud->columns('OrderNumber','BillEmail','BillFullName','OrderDate','OrderStatus','TotalAmount','view_orders','Invioce','track');
			$crud->unset_add();
			$crud->unset_edit();
			$crud->order_by('OrderID','desc');
			$crud->field_type('OrderStatus','dropdown',
			array('1' => 'Success', '2' => 'Unpaid', '3' => 'Canceled'));
			$crud->callback_column('view_orders',array($this,'_callback_webpage_url'));
			$crud->callback_column('Invioce',array($this,'_callback_invoice_url'));
			$crud->callback_column('track',array($this,'_callback_track'));
			$output = $crud->render();
			$data['title'] = 'Order Details';
			$this->load->view('empty', (array)$output);
			$this->load->view('header', $data);
			$this->load->view('crud');
			$this->load->view('footer');

			}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
}
public function _callback_webpage_url($value, $row){
			return "<a href='".base_url()."profile/orderdetails/".$row->OrderNumber."'>View Orders</a> ";
	}
public function _callback_invoice_url($value, $row){
			return "<a href='".base_url()."profile/invoice/".$row->OrderNumber."'>Generate Invoice</a> ";
	}
public function _callback_track($value, $row){
			return "<a href='".base_url()."profile/track/".$row->OrderNumber."'>Track</a> ";
	}
	function invoice(){
		 $data['orderNumber']= $orderNumber = $this->uri->segment(3);
		//  $data['orderNumber']= $orderNumber = $this->input->post('id');
	 	$uid = $this->session->userdata('is_userlogged_id'); 
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		
		$data['dashboard'] = $query;
		$data['orders']  = $this->Generalmodel->show_data_id('orders',$orderNumber,'OrderNumber','get','');
// 		print_r($data); exit;

		$this->load->view('header',$data);
		$this->load->view('invoice',$data);
		$this->load->view('footer');
		// redirect('profile/orders');
		


	}
	function track(){
		 $data['orderNumber']= $orderNumber = $this->uri->segment(3);
		//  $data['orderNumber']= $orderNumber = $this->input->post('id');
	 	$uid = $this->session->userdata('is_userlogged_id'); 
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		
		$data['dashboard'] = $query;
		$orders = $data['orders']  = $this->Generalmodel->show_data_id('orderdetails',$orderNumber,'OrderNumber','get','');
// 		print_r($data); exit;
// $url = "https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=NBM94763&awb=awb&numbers=81288425831&format=xml&lickey=jlsimgootnhjrpljfbsqgvqshogurnur&verno=1.3f&scan=1";


		$url = "https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=NBM94763&awb=awb&numbers=".$orders[0]->awb."&format=xml&lickey=jlsimgootnhjrpljfbsqgvqshogurnur&verno=1.3f&scan=1";

		// Initialize cURL session
		$curl = curl_init($url);

		// Set cURL options
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Only use this line if you encounter SSL certificate issues.

		// Execute the cURL session
		$response = curl_exec($curl);

		// Check if any cURL error occurred
		if (curl_errno($curl)) {
			echo "cURL Error: " . curl_error($curl);
			// exit;
		}

		// Close cURL session
		curl_close($curl);

		// Parse the XML response into an array
		$xml = simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);
		$json = json_encode($xml);
		$arrayResponse = json_decode($json, true);

		// Check if the XML was successfully parsed and converted to an array
		if ($arrayResponse === null) {
			echo "Error parsing XML response";
		} else {
			// Print the array response
			// echo "<pre>";
			// print_r($arrayResponse['Shipment']['Scans']['ScanDetail']);

		}
		$data['scan'] = $arrayResponse['Shipment']['Scans']['ScanDetail'];

			$data['title'] = 'Order Details';
			$this->load->view('empty', (array)$output);
			$this->load->view('header', $data);
			$this->load->view('crud_track');
			$this->load->view('footer');


		// $this->load->view('header',$data);
		// $this->load->view('invoice',$data);
		// $this->load->view('footer');
		// redirect('profile/orders');
		


	}
function orderdetails(){
		 
	 	$uid = $this->session->userdata('is_userlogged_id'); 
		$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
		$data['dashboard'] = $query;
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap');
			$crud->set_table('orders');
			$crud->where('OrderNumber',$this->uri->segment(3));
			$crud->set_subject('Order Details');
			$crud->columns('OrderNumber','product_name','Quantity','product_price','pay_status');
			$crud->set_relation('design_id','designs','title');
			$crud->display_as('design_id','Design');
			$crud->unset_add();
			$crud->unset_edit();
			$crud->field_type('pay_status','dropdown',
			array('1' => 'Success', '2' => 'Unpaid', '3' => 'Canceled'));
			$crud->callback_column('view_orders',array($this,'_callback_webpage_url'));
			$output = $crud->render();
			$data['title'] = 'Order Details';
			$this->load->view('empty', (array)$output);
			$this->load->view('header', $data);
			$this->load->view('crud');
			$this->load->view('footer');

			}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}

		function order_tracking(){
			$uid = $this->session->userdata('is_userlogged_id'); 
			$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
			$data['dashboard'] = $query;
			$data['title'] = 'Track Order';
			$this->load->view('header',$data);
			$this->load->view('track_order');
			$this->load->view('footer');
		}

		function tracking_status(){
			$data['orderNumber']= $orderNumber = $order_number = $this->input->post('order_number');
			$order = $this->Generalmodel->show_data_id('orders',$order_number,'OrderNumber','get','');
			// $data['orderNumber']= $orderNumber = $this->uri->segment(3);
			$uid = $this->session->userdata('is_userlogged_id'); 
			$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
			
			$data['dashboard'] = $query;
			$orders = $data['orders']  = $this->Generalmodel->show_data_id('orderdetails',$orderNumber,'OrderNumber','get','');
			$url = "https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=NBM94763&awb=awb&numbers=".$orders[0]->awb."&format=xml&lickey=jlsimgootnhjrpljfbsqgvqshogurnur&verno=1.3f&scan=1";

			// Initialize cURL session
			$curl = curl_init($url);

			// Set cURL options
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Only use this line if you encounter SSL certificate issues.

			// Execute the cURL session
			$response = curl_exec($curl);

			// Check if any cURL error occurred
			if (curl_errno($curl)) {
				echo "cURL Error: " . curl_error($curl);
				// exit;
			}

			// Close cURL session
			curl_close($curl);

			// Parse the XML response into an array
			$xml = simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);
			$json = json_encode($xml);
			$arrayResponse = json_decode($json, true);

			if ($arrayResponse === null) {
				echo "Error parsing XML response";
			} else {
			}
			$data['scan'] = $arrayResponse['Shipment']['Scans']['ScanDetail'];

			if(count($order)=='0'){
				$this->session->set_flashdata('error', '<div class="error">Invalid Order Number</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
			$track = $this->Generalmodel->show_data_id('order_tracking',$order_number,'order_number','get','');
			if(count($track)=='0'){
				$this->session->set_flashdata('success', '<div class="success">Order received. Status is not updated yet...</div>');
				$this->session->set_flashdata('scan', $data['scan']);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('success', '<div class="success">'.$track[0]->order_status.'</div>');
				$this->session->set_flashdata('scan', $data['scan']);
				redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}	

		public function members(){
			$uid = $this->session->userdata('is_userlogged_id'); 
			$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
			$data['dashboard'] = $query;


			$idd = $query[0]->id;
			$getusr = $this->Generalmodel->show_data_id('user',$idd,'id','get','');
			$this->load->database();
			//Calling Model
			$this->load->model('supercontrol/buyer_model');
			$result = $this->Generalmodel->show_data_id_group('mlm_data','','','get','','parent_id');

			// echo $this->db->last_query(); exit();
         	$data['categories']= $result;
			//Transfering data to Model
			$buyer = $this->buyer_model->buyer_view($idd);
			$data['viewbuyer'] = $buyer;


			$data['title'] = 'My Members';
			$this->load->view('header',$data);
			$this->load->view('my_members');
			$this->load->view('footer');
		}

		public function wallet(){
			$uid = $this->session->userdata('is_userlogged_id'); 
			$query = $this->Generalmodel->show_data_id('user',$uid,'user_id','get','');
			$data['dashboard'] = $query;
			@$totbal = $this->Generalmodel->get_total_2('amount','user_wallet','user_id',$uid,'pay_status','1');
			@$totded = $this->Generalmodel->get_total('amount','wallet_balance','user_id',$uid);
			@$wallet_bal = (@$totbal[0]->amount - @$totded[0]->amount);
			$data['bal'] = @$wallet_bal;
			$data['title'] = 'My Wallet';
			$this->load->view('header',$data);
			$this->load->view('my_wallet');
			$this->load->view('footer');
		}
}

?>