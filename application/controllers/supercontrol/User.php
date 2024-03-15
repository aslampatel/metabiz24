<?php
class User extends CI_Controller
{
	//============Constructor to call Model====================
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('grocery_CRUD');
		$this->load->model('Generalmodel');
		// $this->load->library(array('form_validation','session'));
		// if($this->session->userdata('is_logged_in')!=1){
		// redirect('supercontrol/home', 'refresh');
		// }
		$this->load->library('image_lib');
	}
	//============Constructor to call Model====================
	function index()
	{
		try {
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap');
			$crud->set_table('user_register');
			$crud->set_subject('User');
			$crud->columns('user_id','name', 'upliner_name', 'email', 'phone', 'registered_ref_code', 'ref_code', 'status','date','action');
			$crud->display_as('registered_ref_code', 'Registered Refference Code');
			// $crud->callback_column('ref_user_label', array($this, 'callback_ref_user_label'));
			$crud->callback_column('upliner_name', array($this, 'callback_ref_user'));
			$crud->callback_column('action', array($this, 'callback_action'));
			$crud->unset_add();
// 			$crud->unset_edit();
			// $crud->unset_clone();
				$crud->field_type('UserName', 'hidden');
			$crud->field_type('country', 'hidden');
			$crud->field_type('state', 'hidden');
			$crud->field_type('city', 'hidden');
			$crud->field_type('zipcode', 'hidden');
			$crud->field_type('address', 'hidden');
			$crud->field_type('created_at', 'hidden');
// 			$crud->field_type('image', 'hidden');
			$crud->field_type('description', 'hidden');
			$crud->field_type('delivery_address', 'hidden');
			$crud->field_type('group_in', 'hidden');
			$crud->field_type('subscription', 'hidden');
			$crud->field_type('admin_password', 'hidden');
			
			
		    $crud->field_type('user_id', 'hidden');
			$crud->field_type('ip_address', 'hidden');
			$crud->field_type('password', 'hidden');
			$crud->field_type('user_type', 'hidden');
			$crud->field_type('paypal_id', 'hidden');
			$crud->field_type('verification', 'hidden');
			$crud->field_type('token', 'hidden');
			$crud->field_type('online_status', 'hidden');
			$crud->field_type('terms_and_conditions', 'hidden');
			$crud->field_type('pan_no', 'hidden');
			$crud->field_type('aadhar_no', 'hidden');
			$crud->field_type('company_pan_number', 'hidden');
			$crud->field_type('gst', 'hidden');
			$crud->field_type('incorporation', 'hidden');
			$crud->field_type('bank_name', 'hidden');
			$crud->field_type('account', 'hidden');
			$crud->field_type('ifsc', 'hidden');
			$crud->field_type('branch', 'hidden');
			$crud->field_type('product_status', 'hidden');
			$crud->field_type('account_active_date', 'hidden');
			$crud->field_type('account_status', 'hidden');
			$crud->field_type('rank', 'hidden');
			$crud->field_type('activate_date', 'hidden');
			$crud->field_type('sponsored_user', 'hidden');
			$crud->field_type('spon_code', 'hidden');
			$crud->field_type('upliner', 'hidden');
			$crud->field_type('ref_url', 'hidden');
			$crud->field_type('ref_code', 'hidden');
			$crud->field_type('registered_ref_code', 'hidden');
			$crud->field_type('ref_user', 'hidden');
			$crud->field_type('registered_spon_code', 'hidden');
			$crud->set_field_upload('image','uploads/');
			$crud->order_by('id','desc');
			$crud->unset_read();
// 			$crud->unset_back_to_list();
			$output = $crud->render();
			$data['title'] = 'Manage Testimonials';
			$this->load->view('supercontrol/empty', (array)$output);
			$this->load->view('supercontrol/common/header', $data);
			$this->load->view('supercontrol/crud');
			$this->load->view('supercontrol/common/footer');
		} catch (Exception $e) {
			show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
		}
	}
	// 		 public function checkRefUser($post_array) {
	//         // Assuming 'ref_user' is the column you want to check
	//         if ($post_array['ref_user'] == 0) {

	//           return ($row->ref_user == 0) ? 'Admin' : $row->ref_user;
	//         }
	//         // return $post_array;
	//     }
	function callback_ref_user($value, $row = null)
	{
		// Check if ref_user is 0, and return 'admin' if true, otherwise return the actual value
		if($row->ref_user == 0){
		    return"Admin";
		}
		else{
		    $query=$this->Generalmodel->show_data_id('user_register',$row->ref_user,'id','get','');
		//    print_r($query);
		  	// echo'pp';
		  return $query[0]->name ;
			// return $this->db->last_query();
		    
		}
		// return $row->ref_user;
	}
    function callback_action($value, $row)
    {
        $btn = "<a href='" . base_url() . "supercontrol/user/login/" . $row->id . "' class='btn'>Login To User</a>";
        return $btn;
    }

	// function callback_upliner_name($value, $row)
	// {
	// 	// Check if ref_user is 0, and return 'admin' for upliner_name if true, otherwise return the actual value
	// 	return ($row->ref_user == 0) ? 'Admin' : $row->upliner_name;
	// }
		function login()
	{
	   $id = $this->uri->segment(4); 
		$user =  $this->Generalmodel->show_data_id('user_register',$id,'id','get','');
		$session_data = array(
			'email' => $user[0]->email,
			'uid' => $user[0]->id,
			'is_userlogged_in' => 1,

		);
		$this->session->set_userdata('logged', $session_data);
		// Add user data in session
		$this->session->set_userdata('user_id', $user[0]->id);
		$this->session->set_userdata('logged_in', $session_data);
		$this->session->set_userdata('is_userlogged_email', $user[0]->email);
		$this->session->set_userdata('is_userlogged_id', $user[0]->id);
		$this->session->set_userdata('is_userlogged_type', 1);
		redirect('profile/dashboard', $session_data);
// 		if($user[0]->user_type == 'User'){
// 			$this->session->set_userdata('user_type_user','1');
// 		}else{
// 			$this->session->set_userdata('user_type_user','0');
// 		}
// 		redirect('profile/dashboard',$session_data);
	}
}
