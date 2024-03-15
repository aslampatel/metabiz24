<?php
class Cost_management extends CI_Controller {
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
				$crud->set_table('cost_management');
				$crud->set_subject('Cost_management');
				// $crud->set_field_upload('image','uploads/partner');

				$output = $crud->render();
				$data['title'] = 'Manage Cost';
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
