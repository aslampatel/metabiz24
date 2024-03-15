<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		
	}
	
	public function _example_output($output = null)
	{


		$this->load->view('supercontrol/common/header',(array)$output);
		$this->load->view('supercontrol/crud',(array)$output);
		$this->load->view('supercontrol/common/footer',(array)$output);

	}



	public function index()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap');
			$crud->set_table('contact_details');
			$crud->set_subject('Contacts');
			$crud->columns('name','email','message');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_clone();
			$crud->unset_edit();
			$crud->order_by('id','desc');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}

/* End of file Settings.php */
/* Location: ./application/controllers/supercontrol/Settings.php */