<?php 
class Auth_model extends CI_Model{
	function __construct() {
        parent::__construct();
		$this->load->database();
   }
   
// ================================================For Show Contact section**********Start here=====================================   
 function show_contact()
	{   $this->db->select('*');
		$this->db->from('settings');
		$this->db->where('id',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
  function showcountry(){
	  	$this->db->select('*');
		$this->db->from('countries');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		}
		
  function showcms_19(){
	  	$this->db->select('*');
		$this->db->from('cms');
		$this->db->where('id',19);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		}	
			
  function showcms_20(){
	  	$this->db->select('*');
		$this->db->from('cms');
		$this->db->where('id',20);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		}	
//===========================================For Show Contact section*******End here==========================================	
//===========================================For Insert Contact section*******Start here==========================================		
  function register($data) {
	    $this->db->insert('users',$data);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	 }
	 
function online_status($uid,$record){
	 	$this->db->where('id', $uid);
		$this->db->update('user',$record);
	 }
function ofline_status($uid,$record){
	 	$this->db->where('id', $uid);
		$this->db->update('user',$record);
	 }	 	 
//===========================================For Insert Contact section*******End here==========================================	

// ================================================For Show Admin Mail section**********Start here=====================================   
 function show_admin_mail()
	{   $this->db->select('*');
		$this->db->from('admin_mail');
		$this->db->where('MailId',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
//===========================================For Show Admin Mail section*******End here==========================================
 function userverification($allias,$data){
	 	$this->db->where('id', $allias);
		$this->db->update('users',$data);
	 }
  function userverificationupdt(){
	  	$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	  }	 
//====================Login Section===================
public function insert_contact($data){ 	$this->load->database();
	    $this->db->insert('user_contact',$data); 
		if ($this->db->affected_rows() > 1) {
			return true;
		} else {
			return false;
		}
	}
	
	function select_map(){
		   
		$this->db->select('*');
		$this->db->from('settings');
		$this->db->where('id',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	
	}
	
	function user_login($email,$password,$user_type){
		$this -> db -> select('*');
		$this -> db -> from('user');
		$this -> db -> where('email_id', $email);
		$this -> db -> where('password',$password);
		$this -> db -> where('user_type',$user_type);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		return $query->result();
	
	}
	
	function exco_login($email,$password){
		
		$this -> db -> select('*');
		$this -> db -> from('user_registration');
		$this -> db -> where('email', $email);
		$this -> db -> where('password',$password);
		//$this -> db -> where('user_type',$user_type);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
			return $query->result();

	
	}
	
	function show_sesname($sesid){
		
		$this -> db -> select('*');
		$this -> db -> from('user');
		$this -> db -> where('uid', $sesid);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		return $query->result();
	
	}	
//====================Login Section===================	  

//================Get User Details====================
	function get_user_details($emailid){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$emailid);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
//================Get User Details====================
//================Create New Password=================
 function update_password($id,$data){
	 	$this->db->where('id', $id);
		$this->db->update('users',$data);
	 }
//================Create New Password=================

//==============================================================

function get_user_details_forgot($useremail){
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$useremail);
  $query = $this->db->get();
  $result = $query->result();
  return $result;
 }
 function update_password_forgot($uid,$data){
   $this->db->where('id', $uid);
  $this->db->update('user',$data);
  }

//=================================================================

}
?>
