<?php 
class Login_model extends CI_Model{
	function __construct() {
        parent::__construct();
		$this->load->database();
   }
   
public function insert_contact($data)
	{ 	$this->load->database();
	    $this->db->insert('user_contact',$data); 
		if ($this->db->affected_rows() > 1) {
			return true;
		} else {
			return false;
		}
	}
	
function select_map()
	{   
		$this->db->select('*');
		$this->db->from('settings');
		$this->db->where('id',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
function user_login($email, $password) {
    if ($email != 'kskmenon2@gmail.com') {
        $this->db->select('*');
        $this->db->from('user_register');
        // Properly escape and quote the email variable
        $email_escaped = $this->db->escape($email);
        // Use single quotes around $email_escaped in the query
        $this->db->where("(email = $email_escaped OR user_id = $email_escaped)");
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
}
// function user_login($email,$password){
// 		$this -> db -> select('*');
// 		$this -> db -> from('user_register');
// 		$this -> db -> where('email', $email);
// 		$this -> db -> where('password',$password);
// 		// $this -> db -> where('status',$user_type);
// 		$this -> db -> limit(1);
// 		$query = $this -> db -> get();
// 			return $query->result();

// 	}
function show_sesname($sesid){
		$this -> db -> select('*');
		$this -> db -> from('user_register');
		$this -> db -> where('uid', $sesid);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		return $query->result();
	}	
}
?>
