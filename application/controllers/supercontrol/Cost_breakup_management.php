<?php
class Cost_breakup_management extends CI_Controller
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
	function index()
	{
		$uri = $this->uri->segment(4);
		if ($uri == 'edit') {
			$data['cbm'] = $this->Generalmodel->show_data_id('cost_breakup_management', '', '', 'get', '');
			$data['cm'] = $this->Generalmodel->show_data_id('cost_management', 1, 'id', 'get', '');
			// print_r($data['cbm'][0]->name); exit;
			// $this->load->view('supercontrol/empty', (array)$output);
			$this->load->view('supercontrol/common/header', $data);
			$this->load->view('supercontrol/edit_cost', $data);
			$this->load->view('supercontrol/common/footer');
		} else {
			try {
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('cost_breakup_management');
				$crud->set_subject('Cost Break Management');
				$crud->unset_add();
				$crud->unset_clone();
				$crud->unset_delete();

				$output = $crud->render();
				$data['title'] = 'Manage Products';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud_service');
				$this->load->view('supercontrol/common/footer');
			} catch (Exception $e) {
				show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
			}
		}
	}
	//============Constructor to call Model====================
	function update()
	{
		$data = array(
			'ammount' => $this->input->post("rPrice"),
		);
		$Ins = $this->Generalmodel->show_data_id('cost_breakup_management', '1', 'id', 'update', $data);
		$data = array(
			'ammount' => $this->input->post("rpPrice"),
		);
		$Ins = $this->Generalmodel->show_data_id('cost_breakup_management', '2', 'id', 'update', $data);
		redirect('supercontrol/Cost_breakup_management/');
	}
}
