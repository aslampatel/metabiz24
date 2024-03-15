<?php
class News extends CI_Controller
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
			$crud->set_table('news');
			$crud->set_subject('News');
// 			$crud->columns('name', 'upliner_name', 'email', 'phone', 'registered_ref_code', 'ref_code', 'date');
// 			$crud->display_as('registered_ref_code', 'Registered Refference Code');
// 			// $crud->callback_column('ref_user_label', array($this, 'callback_ref_user_label'));
// 			$crud->callback_column('upliner_name', array($this, 'callback_ref_user'));
// 			// $crud->callback_column('upliner_name', array($this, 'callback_upliner_name'));
// 			$crud->unset_add();
// 			$crud->unset_edit();
			// $crud->unset_clone();
// 			$crud->unset_read();
// 			$crud->unset_back_to_list();
            $crud->order_by("id",'desc');
			$output = $crud->render();
			$data['title'] = 'News';
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

	// function callback_upliner_name($value, $row)
	// {
	// 	// Check if ref_user is 0, and return 'admin' for upliner_name if true, otherwise return the actual value
	// 	return ($row->ref_user == 0) ? 'Admin' : $row->upliner_name;
	// }
}
