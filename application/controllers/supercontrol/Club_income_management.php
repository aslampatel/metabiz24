<?php
class Club_income_management extends CI_Controller {
		//============Constructor to call Model====================
		function __construct() {
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
		function index(){		
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('club_income');
				$crud->set_subject('Club Income Management ');
				// $crud->set_field_upload('tag_1_image','uploads/about');
				// $crud->set_field_upload('tag_2_image','uploads/about');
				// $crud->set_field_upload('tag_3_image','uploads/about');
				// $crud->set_field_upload('image','uploads/testimonial');
				// $crud->unset_back_to_list();
				$crud->unset_add();
				$crud->unset_clone();
				$crud->unset_delete();
				$crud->field_type('status','hidden');
				$output = $crud->render();
				$data['title'] = 'Manage Club Income Management ';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}
		

		
	  
		
		
}

?>
