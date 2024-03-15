<?php
ob_start();
class Cms extends CI_Controller {
		//============Constructor to call Model====================
		function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('string');
			$this->load->library('grocery_CRUD');
			//$this->load->library('gc_dependent_select');
			//$this->load->library('ajax_grocery_CRUD');
			$this->load->model('Generalmodel');
			// $this->load->library(array('form_validation','session'));
			// if($this->session->userdata('is_logged_in')!=1){
			// redirect('supercontrol/home', 'refresh');
			// }
			//$this->load->model('supercontrol/banner_model');
			$this->load->library('image_lib');
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
            $this->output->set_header('Pragma: no-cache');
			
			//****************************backtrace prevent*** END HERE*************************
		}
		//============Constructor to call Model====================
		function index(){
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('cms');
				$crud->set_subject('Page Content');
				$crud->columns('cms_page','page_section','cms_heading','description');
				$crud->set_field_upload('image','uploads/cms');
		
				// $crud->unset_add();
				// $crud->unset_delete();
				// $crud->unset_clone();
				// $crud->field_type('status','dropdown',
				// array('1' => 'Active', '0' => 'Inactive'));
				$output = $crud->render();
				$data['title'] = 'Manage Page Content';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}
		
		public function manage_cms(){
		
	  }
	  
		// function set_date($post_array) {
		// 	$post_array['modify_date'] = date('Y-m-d');
		// 	return $post_array;
		// }
		
}

?>

