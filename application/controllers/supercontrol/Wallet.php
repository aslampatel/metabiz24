<?php
ob_start();
class Wallet extends CI_Controller {
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
		function rank(){
			$DebitsTotal = $this->Generalmodel->get_total_2('amount', 'rank_fund', '', '', 'type', 'Debit');
			// echo $this->db->last_query(); exit;
			$CreditsTotal = $this->Generalmodel->get_total_2('amount', 'rank_fund', '', '', 'type', 'Credit');
			$wallet_bal = ($CreditsTotal[0]->amount - $DebitsTotal[0]->amount);
			$data['bal'] = $wallet_bal;
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('rank_fund');
				$crud->set_subject('Rank Fund');
                $crud->columns('amount', 'type','date');
                $crud->order_by('id','DESC');
				$crud->unset_add();
				$crud->unset_delete();
                $crud->unset_clone();
                $crud->unset_read();
				$crud->unset_edit();
				$output = $crud->render();
				$data['title'] = 'Rank Fund';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud_wallet');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}

        function club(){
			$DebitsTotal = $this->Generalmodel->get_total_2('amount', 'club_fund', '', '', 'type', 'Debit');
			// echo $this->db->last_query(); exit;
			$CreditsTotal = $this->Generalmodel->get_total_2('amount', 'club_fund', '', '', 'type', 'Credit');
			$wallet_bal = ($CreditsTotal[0]->amount - $DebitsTotal[0]->amount);
			$data['bal'] = $wallet_bal;
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('club_fund');
				$crud->set_subject('Club Fund');
                $crud->columns('amount', 'type','date');
                $crud->order_by('id','DESC');
				$crud->unset_add();
				$crud->unset_delete();
                $crud->unset_clone();
                $crud->unset_read();
				$crud->unset_edit();
				$output = $crud->render();
				$data['title'] = 'Club Fund';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud_wallet');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}
		function admin_wallet(){
			$DebitsTotal = $this->Generalmodel->get_total_2('amount', 'admin_wallet', '', '', 'type', 'Debit');
			// echo $this->db->last_query(); exit;
			$CreditsTotal = $this->Generalmodel->get_total_2('amount', 'admin_wallet', '', '', 'type', 'Credit');
			
			$wallet_bal = ($CreditsTotal[0]->amount - $DebitsTotal[0]->amount);
			$data['bal'] = $wallet_bal;
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('admin_wallet');
				$crud->set_subject('Admin Wallet');
                $crud->columns('amount', 'type','date');
                $crud->order_by('id','DESC');
				$crud->unset_add();
				$crud->unset_delete();
                $crud->unset_clone();
                $crud->unset_read();
				$crud->unset_edit();
				$output = $crud->render();
				$data['title'] = 'Club Fund';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud_wallet');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}

}


