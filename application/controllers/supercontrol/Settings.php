<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}
	
	public function _example_output($output = null){
		$this->load->view('supercontrol/common/header',(array)$output);
		$this->load->view('supercontrol/crud',(array)$output);
		$this->load->view('supercontrol/common/footer',(array)$output);

	}


	public function changePasswordSubmit()
	{
		$get=	$this->Mymodel->customQuery('select UserPassword from admin_detail');		
		if ($get[0]->UserPassword==md5($this->input->post('old_Password'))) {
			$data['UserPassword']=md5($this->input->post('new_password'));
			$result = $this->Mymodel->do_action('admin_detail','1','AdminId','update',$data,'','');
			if ($result) {
				echo "Passwrod changed successfully!";
			}else {
				echo "Some thing went wrong!";
			}
		}else{
			echo "Old password wrong!";
		}

	}
	public function index()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('settings');
			$crud->set_subject('Settings');
			$crud->unset_back_to_list();
			$crud->unset_add();
			$crud->unset_delete();
			$crud->display_as('gst','Room GST (%)');
			$crud->display_as('food_gst','Food GST (%)');
			$crud->set_field_upload('logo','uploads');
			$crud->set_field_upload('footer_logo','uploads/');
			$crud->set_field_upload('property_plan','uploads/');

			$crud->set_field_upload('favicon','uploads');
		/*	$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');
*/
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


	public function adminProfile()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('admin_detail');
			$crud->set_subject('Admin profile');
			$crud->unset_back_to_list();
			$crud->unset_add();
			$crud->unset_delete();
			$crud->field_type('UserPassword','hidden');
			$crud->field_type('UserStatus','hidden');
			$crud->field_type('UserName','hidden');
			// $crud->columns(array('UserName','image'));
			$crud->set_field_upload('image','uploads');

			// $crud->set_field_upload('favicon','uploads');
		/*	$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');
*/
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}

/* End of file Settings.php */
/* Location: ./application/controllers/supercontrol/Settings.php */