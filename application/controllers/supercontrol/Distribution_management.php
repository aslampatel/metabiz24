<?php
ob_start();
class Distribution_management extends CI_Controller {
		//============Constructor to call Model====================
		function __construct() {
			parent::__construct();
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
			$uri = $this->uri->segment(4);
			if ($uri == 'edit') {
				$data['distribution_management'] = $this->Generalmodel->show_data_id('distribution_management', '', '', 'get', '');
				$data['cost_breakup_management'] = $this->Generalmodel->show_data_id('cost_breakup_management', 2, 'id', 'get', '');
				// print_r($data['cbm'][0]->name); exit;
				// $this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/edit_rp', $data);
				$this->load->view('supercontrol/common/footer'); 
			} else {
				try{
					$crud = new grocery_CRUD();
					$crud->set_theme('bootstrap');
					$crud->set_table('distribution_management');
					$crud->set_subject('Distribution Management');

					// $crud->set_field_upload('image','uploads/quality_policy');
					$crud->unset_add();
					$crud->unset_clone();
					$crud->unset_delete();
					$output = $crud->render();
					$data['title'] = 'Distribution Management';
					$this->load->view('supercontrol/empty', (array)$output);
					$this->load->view('supercontrol/common/header', $data);
					$this->load->view('supercontrol/crud');
					$this->load->view('supercontrol/common/footer');
				}catch(Exception $e){
					show_error($e->getMessage().' --- '.$e->getTraceAsString());
				}
			}
		}

		function update()
		{
			$data = array(
				'amount' => $this->input->post("directref"),
			);
			$Ins = $this->Generalmodel->show_data_id('distribution_management', '1', 'id', 'update', $data);
			$data = array(
				'amount' => $this->input->post("levels"),
			);
			$Ins = $this->Generalmodel->show_data_id('distribution_management', '2', 'id', 'update', $data);
			$data = array(
				'amount' => $this->input->post("rank_fund"),
			);
			$Ins = $this->Generalmodel->show_data_id('distribution_management', '3', 'id', 'update', $data);
			$data = array(
				'amount' => $this->input->post("club_fund"),
			);
			$Ins = $this->Generalmodel->show_data_id('distribution_management', '4', 'id', 'update', $data);
			redirect('supercontrol/distribution_management/');
		}
		
		
}

?>

