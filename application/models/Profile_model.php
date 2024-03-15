<?php 
class Profile_model extends CI_Model{
	function __construct() {
        parent::__construct();
		$this->load->database();
   }
   
public function profiledetails($uid){ 	
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('uid',$uid);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

function eventdet($eventid){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('event_id',$eventid);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}	
function ticket($uid){
		/*$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('uid',$uid);
		$this->db->where('ticket_gen_status',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;*/
		
		
		$this->db->select ( '*' ); 
		$this->db->from('booking');
		$this->db->join('event', 'booking.event_id = event.event_id');
		$this->db->where('booking.uid', $uid);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}	
	
function show_pdf($ticketid){
		$this->db->select ('booking.*,bookedticket.*'); 
		$this->db->from('booking');
		$this->db->join('bookedticket', 'bookedticket.tckt_id = booking.tkt_id');
		$this->db->where('booking.tkt_id',$ticketid);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}	
	
function user_details($uid)
	{  
		$this->db->select ( '*' ); 
		$this->db->from('user');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}	
function new_pass($datalist,$uid){
		$this->db->where('uid', $uid);
		$this->db->update('user',$datalist);
	}	
function pro_edit($id, $datalist){
		$this->db->where('uid', $id);
		$this->db->update('user',$datalist);
	}


function change_pro_pic($uid,$datalist){
	$this->db->where('uid', $uid);
	$this->db->update('user',$datalist);
	}
}
?>
