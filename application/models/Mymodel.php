<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {


	public 	function customQuery($sql)
	{
		
		$query = $this->db->query($sql);
		return($query->num_rows() > 0) ? $query->result(): NULL;
	}

	public function do_action($table_name,$id,$fieldname,$action,$data,$limit,$select){
		
		if($action=='get'){
			if(($id !='') && ($fieldname!='')&& ($data=='')&& ($limit=='')){
				$this->db->select ($select); 
				$this->db->from($table_name);
				$this->db->where($fieldname,$id);
				$this->db->limit($limit);
			}else{
				$this->db->select ($select); 
				$this->db->from($table_name);
				$this->db->limit($limit);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if($action=='insert'){
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			}else {
				return $return;
			}       
		}
		if($action=='update'){
			$this->db->where($fieldname, $id);
			$return=$this->db->update($table_name, $data);
			return $return;
		}
		if($action=='delete'){
			$this->db->where($fieldname, $id);
			$this->db->delete($table_name);
		}

	}

}

/* End of file Mymodel.php */
/* Location: ./application/models/Mymodel.php */