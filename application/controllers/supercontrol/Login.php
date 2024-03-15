<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {

		parent::__construct();

	}


	public function header()
	{
		$result = $this->Model_users->get_settings();
		$data['settings']=$result[0];
		$this->load->view('supercontrol/common/header');
	}

	public function footer()
	{
		$this->load->view('supercontrol/common/footer');
		
	}
	public function index()
	{
		//$this->header();
		$this->load->view('supercontrol/login');
		//$this->footer();
	}
	public function validate_login()
	{
			//$this->form_validation->set_rules('username', 'Username', 'trim|required|secure');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|secure');
		
		$this->form_validation->set_rules('username','Username', 'required');

		$this->form_validation->set_rules('password','Password', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->session->set_flashdata('loginerror', 'Invalid Username or Password');

			redirect(base_url().'supercontrol/Login');	

		} else {


			$data = array(

				'username' => $this->input->post('username'),

				'password' => $this->input->post('password')

			);

			$result = $this->Model_users->login($data);

			if($result == TRUE) {

				$username = $this->input->post('username');
			
				if($result != false) {

					$session_data = array(

						'username'=>$this->input->post('username'),

						'is_logged_in'=>1

					);

				//print_r($session_data);

			// Add user data in session

					$this->session->set_userdata('sys_logged_in', $session_data);

					$this->session->set_userdata('sys_is_logged_in', '1');

					redirect('supercontrol/Home');

				}

			}else {

				$this->session->set_flashdata('loginerror', 'Invalid Username or Password!!!!');

				redirect('supercontrol/login');	

			}

		}

	}



	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('supercontrol/Login', 'refresh');
	}
}