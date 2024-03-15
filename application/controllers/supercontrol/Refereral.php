<?php
ob_start();
class Refereral extends CI_Controller {
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
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('referal');
				$crud->set_subject('Refereral');
                $crud->columns('user_name', 'reference_code','url','status','action');
                $crud->where('id',7);
				// $crud->set_field_upload('image','uploads/banner');
                $crud->callback_before_insert(array($this,'setData'));
                // $crud->callback_before_update(array($this,'setData'));
                $crud->callback_column('user_name', array($this, '_callback_user_name'));
                $crud->callback_column('url', array($this, '_callback_url'));
                $crud->callback_column('action', array($this, '_callback_action'));
                // $crud->set_relation('user','user_register','name');
                $crud->field_type('reference_code','hidden');
                $crud->field_type('user','hidden');
				$crud->unset_add();
				$crud->unset_delete();
                $crud->unset_clone();
                $crud->unset_read();
				$output = $crud->render();
				$data['title'] = 'Banner';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}
    function setData($r, $primary_key = null)
	{
        if($r['user']){
		$r['user'] = $r['user'];
        }else{
            $r['user'] = 0;
        }
        // $timestamp = time();
        $randomNumber = rand(11111, 99999);
        $characters = '0123456789123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Initialize the OTP variable
        $otp = '';

        // Generate a random OTP of the specified length
        for ($i = 0; $i < 6; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }
        $r['reference_code'] = $otp;
		return $r;
	}
   
    public function _callback_user_name($value, $row)
	{
        if($row->user == 0){
		    return "Admin";
        }else{
            $user = $this->Generalmodel->show_data_id('user_register', $row->user, 'id', 'get', '');

            return $user[0]->name;
        }
	}
    public function _callback_url($value, $row)
	{

        return base_url().'signup/'. $row->reference_code;
	}
    public function _callback_action($value, $row)
    {
        // Your dynamic content or link to be shared
        
        // Generate HTML and JavaScript code
        $output = '
        <button type="button" class="btn btn-outline-success " style="border: 1px solid green;"  id="copyButton" onclick="copyToClipboard(\'' . $row->reference_code . '\')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
        </svg>
        </button><button type="button" class="btn btn-outline-danger" style="border: 1px solid red;" id="share-button" onclick="share(\'' . $row->reference_code . '\')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
        </svg>
        </button>
        
        ';
    
        return $output;
    }
		

    //============Constructor to call Model====================
		function sponsored(){
			try{
				$crud = new grocery_CRUD();
				$crud->set_theme('bootstrap');
				$crud->set_table('sponsored_code');
				$crud->set_subject('Sponsored');
                $crud->columns('user_name', 'code','url','status','action');
                $crud->where('id',1);
				// $crud->set_field_upload('image','uploads/banner');
                $crud->callback_before_insert(array($this,'setData'));
                // $crud->callback_before_update(array($this,'setData'));
                $crud->callback_column('user_name', array($this, '_callback_user_name2'));
                $crud->callback_column('url', array($this, '_callback_url2'));
                $crud->callback_column('action', array($this, '_callback_action2'));
                // $crud->set_relation('user','user_register','name');
                $crud->field_type('reference_code','hidden');
                $crud->field_type('user','hidden');
				$crud->unset_add();
				$crud->unset_delete();
                $crud->unset_clone();
                $crud->unset_read();
				$output = $crud->render();
				$data['title'] = 'Banner';
				$this->load->view('supercontrol/empty', (array)$output);
				$this->load->view('supercontrol/common/header', $data);
				$this->load->view('supercontrol/crud');
				$this->load->view('supercontrol/common/footer');
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		}
    function setData2($r, $primary_key = null)
	{
        if($r['user']){
		$r['user'] = $r['user'];
        }else{
            $r['user'] = 0;
        }
        // $timestamp = time();
        $randomNumber = rand(11111, 99999);
        $characters = '0123456789123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Initialize the OTP variable
        $otp = '';

        // Generate a random OTP of the specified length
        for ($i = 0; $i < 6; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }
        $r['code'] = $otp;
		return $r;
	}
   
    public function _callback_user_name2($value, $row)
	{
        if($row->user == 0){
		    return "Admin";
        }else{
            $user = $this->Generalmodel->show_data_id('user_register', $row->user, 'id', 'get', '');

            return $user[0]->name;
        }
	}
    public function _callback_url2($value, $row)
	{

        return base_url().'signup/'. $row->code;
	}
    public function _callback_action2($value, $row)
    {
        // Your dynamic content or link to be shared
        
        // Generate HTML and JavaScript code
        $output = '
        <button type="button" class="btn btn-outline-success " style="border: 1px solid green;"  id="copyButton" onclick="copyToClipboard(\'' . $row->code . '\')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
        </svg>
        </button><button type="button" class="btn btn-outline-danger" style="border: 1px solid red;" id="share-button" onclick="share(\'' . $row->code . '\')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
        </svg>
        </button>
        
        ';
    
        return $output;
    }
		
}

?>

