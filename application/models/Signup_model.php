<?php 
class Signup_model extends CI_Model{
	function __construct() {
        parent::__construct();
		$this->load->database();
   }
   
public function register($data)
	{ 	$this->load->database();
	    $this->db->insert('user',$data); 
		if ($this->db->affected_rows() > 1) {
			return true;
		} else {
			return false;
		}
	}
	
public function register_org($data)
	{ 	$this->load->database();
	    $this->db->insert('organizer',$data); 
		if ($this->db->affected_rows() > 1) {
			return true;
		} else {
			return false;
		}
	}	

}
?>
