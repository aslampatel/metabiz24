<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct() {

		parent::__construct();

	}
	public function header()
	{
		$this->load->view('supercontrol/common/header');
	}

	public function footer()
	{
		$this->load->view('supercontrol/common/footer');

	}
	public function index()
	{
		$this->header();
		$sql="select count(id) from cms";
		$data['cms']=$this->Mymodel->customQuery($sql);
		$data['total_user'] = $this->Generalmodel->countData('user_register', '');
        $data['total_active_user'] = $this->Generalmodel->countData('user_register', ['status'=> 'Active']);
        $data['total_inactive_user'] = $this->Generalmodel->countData('user_register', ['status'=> 'Inactive']);
        $data['total_non_renewerd_user'] = $this->Generalmodel->countData('user_register', ['account_status'=> 'Inactive']);
        
		$data['total_star_rank_user'] = $this->Generalmodel->countData('user_register', ['rank'=> '1']);
        $data['total_super_star_rank_user'] = $this->Generalmodel->countData('user_register', ['rank'=> '2']);
        $data['total_mega_star_rank_user'] = $this->Generalmodel->countData('user_register', ['rank'=> '3']);
        $data['total_ultimate_star_rank_user'] = $this->Generalmodel->countData('user_register', ['rank'=> '4']);
        $data['total_royal_star_rank_user'] = $this->Generalmodel->countData('user_register', ['rank'=> '5']);

		$data['total_star_rank_wallets'] = rankWiseWallets(1);
		$data['total_super_star_rank_wallets'] = rankWiseWallets(2);
		$data['total_mega_star_rank_wallets'] = rankWiseWallets(3);
		$data['total_ultimate_star_rank_wallets'] = rankWiseWallets(4);
		$data['total_royal_star_rank_wallets'] = rankWiseWallets(5);
        
       
		
	//    echo $this->db->last_query(); exit;

		// $sql="select count(id) from blog";
		// $data['blog']=$this->Mymodel->customQuery($sql);

		//$sql="select count(id) from article";
		//$data['news']=$this->Mymodel->customQuery($sql);

		$this->load->view('supercontrol/home',$data);
		$this->footer();
	}
	public function logout(){

		$this->session->unset_userdata('sys_logged_in');
		$this->session->unset_userdata('sys_is_logged_in');
		$this->session->set_flashdata('logoutsuccess', 'You have been successfully logged out!');
		redirect('supercontrol/Login');

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/supercontrol/Home.php */