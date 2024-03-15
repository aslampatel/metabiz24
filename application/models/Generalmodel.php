<?php
class Generalmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//=============== Select , Select by id , insert , update , delete ====================================================
	public function record_count($tablename, $primary_key, $wheredata)
	{
		if ($wheredata != '') {
			$this->db->where(array($primary_key => $wheredata));
		}
		$result = $this->db->count_all_results($tablename);
		//$result= $this->db->from($tablename);
		return $result;
	}

	public function record_count_new($tablename, $primary_key, $wheredata)
	{
		if ($wheredata != '') {
			$this->db->where(array($primary_key => $wheredata));
			$this->db->where('status', '1');
		}
		$result = $this->db->count_all_results($tablename);
		return $result;
	}

	function getSearchDataWine($table_name, $primary_key1, $primary_key2, $wheredata1, $wheredata2, $limit, $start, $allias)
	{
		//================*********************=====================
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($primary_key1, $wheredata1);
		$this->db->where($primary_key2, $wheredata2);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		//================*********************=====================
	}

	public function record_count_search($tablename, $primary_key, $likefield, $wheredata, $allias)
	{
		if ($primary_key == '') {
			$this->db->like($likefield, $allias, 'after');
			$result = $this->db->count_all_results($tablename);
			return $result;
		} else {
			$this->db->where(array($primary_key => $wheredata));
			$this->db->like($likefield, $allias, 'after');
			$result = $this->db->count_all_results($tablename);
			return $result;
		}
	}






	public function advance_search_property($status, $start_price, $end_price, $start_area, $end_area, $start_bedrooms, $end_bedrooms, $start_bathrooms, $end_bathrooms)
	{
		$where = '';
		$final_where = '';

		$where .= "status = '" . $status . "' ";
		// if($search_type=='customer'){
		if ($start_price != '') {
			$where .= " AND property_price BETWEEN " . $start_price . " AND " . $end_price . " ";
		}
		if ($start_area != '') {
			$where .= " AND property_area BETWEEN " . $start_area . " AND " . $end_area . " ";
		}
		if ($start_bedrooms != '') {
			$where .= " AND property_rooms BETWEEN " . $start_bedrooms . " AND " . $end_bedrooms . " ";
		}
		if ($start_bathrooms != '') {
			$where .= " AND property_bathrooms BETWEEN " . $start_bathrooms . " AND " . $end_bathrooms . " ";
		}
		// }F
		// $where.=" AND status = 'Active'";
		if ($where != '')
			$final_where = 'WHERE ' . $where;
		$Q = $this->db->query("SELECT * FROM property " . $final_where . " order by id desc");
		$result = $Q->result();
		return $result;
	}


	public function show_data_with_multiple_condition2($table_name, $id1, $fieldname1, $id2, $fieldname2, $action, $data)
	{
		if ($action == 'get') {
			if ($id1 != '' && $fieldname1 != '' && $id2 != '' && $fieldname2 != '') {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname1, $id1);
				$this->db->where($fieldname2, $id2);
				// $this->db->limit($limit);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname1, $id1);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname1, $id1);
			$this->db->delete($table_name);
		}
	}

















	public function insertdata($data = array())
	{
		$insert = $this->db->insert_batch('product_images', $data);
		return $insert ? true : false;
	}


	public function record_count_searchnew($tablename, $primary_key1, $primary_key2, $likefield, $wheredata1, $wheredata2, $allias)
	{
		$this->db->where(array($primary_key1 => $wheredata1));
		$this->db->where(array($primary_key2 => $wheredata2));
		if ($likefield != '') {
			$this->db->like($likefield, $allias, 'after');
		}
		$result = $this->db->count_all_results($tablename);
		return $result;
	}

	public function getAllData($table_name, $primary_key, $wheredata, $limit, $start)
	{
		if (@$limit != '' || @$start != '') {
			$this->db->limit($limit, $start);
		}
		$this->db->select('*');
		$this->db->from($table_name);
		if ($primary_key == '' && $wheredata == '') {
			$where = '1=1';
		} else {
			$this->db->where($primary_key, $wheredata);
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getAllDatalists($table_name, $primary_key, $wheredata, $limit, $start)
	{
		if (@$limit != '' || @$start != '') {
			$this->db->limit($limit, $start);
		}
		$this->db->select('*');
		$this->db->from($table_name);
		if ($primary_key == '' && $wheredata == '') {
			$where = '1=1';
		} else {
			$this->db->where($primary_key, $wheredata);
			$this->db->where('status', '1');
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getAllGeneraldata($table_name, $primary_key, $wheredata, $orderdata)
	{
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($primary_key, $wheredata);
		$this->db->order_by($orderdata, 'ASC');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getAllDatadist($table_name, $primary_key, $wheredata, $limit, $start)
	{
		if (@$limit != '' || @$start != '') {
			$this->db->limit($limit, $start);
		}
		$this->db->distinct();
		$this->db->select($primary_key);
		$this->db->from($table_name);

		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


	function getSearchData($table_name, $primary_key, $likefield, $wheredata, $limit, $start, $allias)
	{
		//================*********************=====================
		if (@$limit != '' || @$start != '') {
			$this->db->limit($limit, $start);
		}
		$this->db->select('*');
		$this->db->from($table_name);
		if ($primary_key == '' && $wheredata == '') {
			$where = '1=1';
		} else if ($primary_key == '' || $wheredata == '') {
			$where = '1=1';
		} else {
			$this->db->where($primary_key, $wheredata);
		}
		$this->db->like($likefield, $allias);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		//================*********************=====================
	}

	//function getSearchDataWine1($table_name,$primary_key1,primary_key2,$wheredata1,$wheredata1,$limit,$start){
	function getFeaturedata($table_name, $primary_key1, $primary_key2, $wheredata1, $wheredata2, $limit)
	{
		//================*********************=====================
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($primary_key1, $wheredata1);
		$this->db->where($primary_key2, $wheredata2);
		$this->db->limit($limit);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		//================*********************=====================
	}

	//================= latest post ===================
	//function getSearchDataWine1($table_name,$primary_key1,primary_key2,$wheredata1,$wheredata1,$limit,$start){
	function getLatestdata($table_name, $primary_key1, $wheredata1, $orderfield, $order, $limit)
	{
		//================*********************=====================
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($primary_key1, $wheredata1);
		$this->db->order_by($orderfield, $order);
		$this->db->limit($limit);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		//================*********************=====================
	}
	//================  Latest post ===================

	public function fetch_videos($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("video");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	/*public function fetch_videos($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("video");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }*/

	public function do_action($table_name, $id, $fieldname, $action, $data, $limit)
	{

		if ($action == 'get') {
			if (($id != '') && ($fieldname != '') && ($data == '') && ($limit == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname, $id);
				$this->db->limit($limit);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->limit($limit);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname, $id);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname, $id);
			$this->db->delete($table_name);
		}
	}
	public function show_data_id($table_name, $id, $fieldname, $action, $data)
	{

		if ($action == 'get') {
			if (($id != '') && ($fieldname != '') && ($data == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname, $id);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname, $id);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname, $id);
			$this->db->delete($table_name);
		}
	}
	//=============== Select , Select by id , insert , update , delete ====================================================

	public function show_data_with_multiple_condition($table_name, $id1, $fieldname1, $id2, $fieldname2, $action, $data, $limit)
	{
		if ($action == 'get') {
			if ($id1 != '' && $fieldname1 != '' && $id2 != '' && $fieldname2 != '') {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname1, $id1);
				$this->db->where($fieldname2, $id2);
				$this->db->limit($limit);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname1, $id1);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname1, $id1);
			$this->db->delete($table_name);
		}
	}


	//=============== Select , Select by id By Limit =======================================================================
	public function show_data_id_order($table_name, $id, $fieldname, $order, $orderfield, $action, $data)
	{
		//echo $order.">>>"; exit();
		if ($action == 'get') {
			if (($id != '') && ($fieldname != '') && ($data == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname, $id);
				$this->db->order_by($orderfield, $order);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->order_by($orderfield, $order);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname, $id);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname, $id);
			$this->db->delete($table_name);
		}
	}

	public function user_limit($uid)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id', 'desc');
		$this->db->limit('4,0');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function user_active($uid)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id!=', $uid);
		$this->db->where('online_status', '1');
		$this->db->order_by('id', 'desc');
		$this->db->limit('4,0');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	//=============== Select , Select by id By Limit =======================================================================

	//================ Join of 2 tables ======================================================================================

	public function dynamic_join($table_name, $id, $fieldname, $table_name2, $fieldname2, $fieldname3, $action, $data)
	{
		if ($action == 'join') {
			if (($id != '') && ($fieldname != '') && ($data == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->join($table_name2, $table_name . "." . $fieldname . '=' . $table_name2 . "." . $fieldname2);
				$this->db->where($table_name . "." . $fieldname3, $id);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->join($table_name2, $table_name . "." . $fieldname . '=' . $table_name2 . "." . $fieldname2);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
	}
	//================ Join of 2 tables ======================================================================================
	//================ Join of 2 tables by limit======================================================================================	
	public function dynamic_join_limt($table_name, $id, $fieldname, $table_name2, $fieldname2, $fieldname3, $order, $limit, $action, $data)
	{
		if ($action == 'join') {
			if (($id != '') && ($fieldname != '') && ($data == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->join($table_name2, $table_name . "." . $fieldname . '=' . $table_name2 . "." . $fieldname2);
				$this->db->where($table_name . "." . $fieldname3, $id);
				// $this->db->order_by($table_name . "." . $fieldname3, $order);
				$this->db->limit($limit, 0);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->join($table_name2, $table_name . "." . $fieldname . '=' . $table_name2 . "." . $fieldname2);
				$this->db->group_by($table_name . "." . $fieldname);
				$this->db->order_by($table_name . "." . $fieldname3, $order);
				$this->db->limit($limit, 0);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
	}
	//================ Join of 2 tables by limit======================================================================================	



	public function country_limit()
	{
		$this->db->select('*');
		$this->db->from('countries');
		$this->db->order_by('id', 'RANDOM');
		$this->db->limit('20,0');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	//=================== Debjit  09.10.2017 ==============

	public function show_top_adv()
	{
		$this->db->select('*');
		$this->db->from('advertisement');
		$this->db->where('ad_position', 'top');
		$this->db->where('status', 1);
		$this->db->limit(4);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function show_right_adv()
	{
		$this->db->select('*');
		$this->db->from('advertisement');
		$this->db->where('ad_position', 'right');
		$this->db->where('status', 1);
		$this->db->limit(3);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function show_bottom_adv()
	{
		$this->db->select('*');
		$this->db->from('advertisement');
		$this->db->where('ad_position', 'bottom');
		$this->db->where('status', 1);
		$this->db->limit(2);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	/*function search_prod($uri){
		$sql ="select * from product where status = 1 and cat_id='$uri' OR cat_id in(SELECT master_id FROM master_category WHERE parent_id='$uri') ORDER BY product_id ASC ";
		$query = $this->db->query($sql);
		return($query->num_rows() > 0) ? $query->result(): NULL;
	}*/


	public function administrator_payment_final($us_id, $pd_id, $od_id)
	{
		$this->db->select('*');
		$this->db->from('payment_from_admin');
		$this->db->where('seller_id', $us_id);
		$this->db->where('product_id', $pd_id);
		$this->db->where('ordernumber', $od_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function rating_avg($idd)
	{
		$this->db->select('SUM(rating) as rate');
		$this->db->from('review');
		$this->db->where('pid', $idd);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


	public function shop_price_range($table_name, $primary_key, $wheredata, $limit, $start, $order_key, $order_data, $minprice, $maxprice)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('cat_id', $wheredata);
		$this->db->where('status', 1);
		$this->db->where('price >=', $minprice);
		$this->db->where('price <=', $maxprice);
		if (@$limit != '' || @$start != '') {
			$this->db->limit($limit, $start);
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function product_min_price($wheredata)
	{
		$this->db->select_min('price');
		$this->db->from('product');
		$this->db->where('cat_id', $wheredata);
		$this->db->where('status', 1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function product_max_price($wheredata)
	{
		$this->db->select_max('price');
		$this->db->from('product');
		$this->db->where('cat_id', $wheredata);
		$this->db->where('status', 1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function delete_mul($ids, $table)
	{
		$ids = $ids;
		$count = 0;
		foreach ($ids as $id) {
			$did = intval($id) . '<br>';
			$this->db->where('id', $did);
			$this->db->delete($table);
			$count = $count + 1;
		}
		echo '<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
			' . $count . ' Item deleted successfully
			</div>';
		$count = 0;
	}

	public function product_filter_search($attribute)
	{
		//SET @search = $attribute;
		$sql = "SELECT * FROM product_attribute WHERE attribute_value REGEXP CONCAT('(^|,)(', REPLACE('.$attribute.', ',', '|'), ')(,|$)') group by prod_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
		//'SELECT * FROM product_attribute WHERE interests REGEXP CONCAT('(^|,)(', REPLACE(@search, ',', '|'), ')(,|$)')';
		//$this->db->select('*');
		//$this->db->from('product_attribute');
		//$this->db->where("find_in_set('$attribute','attribute_value') <> 0");
		//$this->db->where_in('attribute_value',$attribute);
		//$this->db->where("FIND_IN_SET('".$attribute."', attribute_value)");
		//$query = $this->db->get();
		//$result = $query->result();
		//return $result;

		//SET @search = '13,15';
	}

	public function product_filter_search_2($attribute)
	{
		$this->db->select('*');
		$this->db->from('product_attribute');
		//$this->db->where("find_in_set('$attribute','attribute_value') <> 0");
		//$this->db->where_in('attribute_value',$attribute);
		$this->db->where("FIND_IN_SET('" . $attribute . "', attribute_value)");
		$query = $this->db->get();
		$result = $query->result();
		return $result;

		//SET @search = '13,15';
	}

	public function join_group_by($url)
	{
		$this->db->select('*');
		$this->db->from('product_attribute as p');
		$this->db->join('attribute_set as a', 'p' . "." . 'attribute_set' . '=' . 'a' . "." . 'id');
		$this->db->where('p' . "." . 'prod_id', $url);
		$this->db->group_by("p. attribute_set");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}




	public function show_data_id_group($table_name, $id, $fieldname, $action, $data, $group)
	{
		if ($action == 'get') {
			if (($id != '') && ($fieldname != '') && ($data == '')) {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->where($fieldname, $id);
				$this->db->group_by($group);
			} else {
				$this->db->select('*');
				$this->db->from($table_name);
				$this->db->group_by($group);
			}
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		if ($action == 'insert') {
			$return = $this->db->insert($table_name, $data);
			if ((bool) $return === TRUE) {
				return $this->db->insert_id();
			} else {
				return $return;
			}
		}
		if ($action == 'update') {
			$this->db->where($fieldname, $id);
			$return = $this->db->update($table_name, $data);
			return $return;
		}
		if ($action == 'delete') {
			$this->db->where($fieldname, $id);
			$this->db->delete($table_name);
		}
	}

	//=================== Debjit  09.10.2017 ==============


	function customQuery($sql)
	{

		$query = $this->db->query($sql);
		return ($query->num_rows() > 0) ? $query->result() : NULL;
	}


	//------------------------dipak---------------------------------->

	function get_school_data()
	{
		$query = $this->db->query('SELECT * FROM school WHERE status=1');
		$result = $query->result_array();
		return $result;
	}

	function get_blogs()
	{
		$query = $this->db->query('SELECT * FROM blog WHERE status=1');
		$result = $query->result_array();
		return $result;
	}

	public function get_search_detail($offset = 0, $searchexist = "0", $userdata = "")
	{
		$this->load->library('pagination');
		$config['base_url'] = SERVER_URL . '/home/get_search_detail';
		$config['per_page'] = 5;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<div class="pagination" align="center">';
		$config['full_tag_close'] = '</div>';
		// $config['total_rows'] = $this->db->get_where('dkb_students', array('is_active' => 1, 'status' => 1, 'payment_status' => 1, 'academic_year' => $this->loggedyear))->num_rows();
		$this->pagination->initialize($config);
		//$query='SELECT a.class_name, b.section_name, c.* FROM dkb_class a, dkb_section b, dkb_students c WHERE a.id=c.class_id AND b.id=c.section_id AND c.is_active=1 AND c.status=1 AND c.academic_year='.$this->loggedyear.'';
		//$query = '';
	}

	public function save_profile($userdata)
	{
		$session_userdata = $this->session->userdata('logged');
		if ($this->facebook->is_authenticated()) {

			$data['userdata'] = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
			//$this->db->set('email', $userdata['email']);
			$this->db->set('contact', $userdata['contact']);
			$this->db->set('user_photo', $userdata['user_photo']);

			$this->db->where('uid', $data['userdata']['id']);
			$this->db->update('users');
			$modeldata['flag'] = 1;
		} else if (!empty($session_userdata)) {
			//$this->db->set('email', $userdata['email']);
			$this->db->set('contact', $userdata['contact']);
			$this->db->set('user_photo', $userdata['user_photo']);

			$this->db->where('uid', $session_userdata['uid']);
			$this->db->update('users');
			$modeldata['flag'] = 1;
		}

		return $modeldata;
	}


	/*public function user_registration($userdata){
		$this->load->library('encryption');
		$this->encrypt->encode
		$this->db->set('', $userdata['']);
		$this->db->set('', $userdata['']);
		$this->db->set('', $userdata['']);
		$this->db->set('', $userdata['']);

	}*/

	public function fetch_rows($tbl, $where)
	{
		$this->db->select('*');
		//$this->db->where('status', 'Yes');
		$this->db->where($where);
		$query = $this->db->get($tbl);
		return $query->result();
	}


	function property_loc($loc)
	{
		$this->db->select('*');
		$this->db->from('property');
		$this->db->like('property_address', "$loc");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function get_checked_room($uid)
	{
		$this->db->select('*');
		$this->db->from('room_allotment');
		// $this->db->where('room_id', $room);
		$this->db->where('uid', $uid);
		$this->db->where('status', 'active');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function check_for_room($adult, $child, $type)
	{
		$this->db->select('*');
		$this->db->from('room');
		$this->db->where('adult_capacity > ', '1');
		$this->db->where('child_capacity > ', '0');
		$this->db->where('room_type', $type);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function search_food($keyword, $cid)
	{
		$this->db->select('*');
		$this->db->from('food_list');
		$this->db->like('food_name', "$keyword");
		if ($cid != 'all') {
			$this->db->where('food_category', $cid);
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


	function checkfooditem($uid, $fid)
	{
		$this->db->select('*');
		$this->db->from('food_allotment');
		$this->db->where('uid', $uid);
		$this->db->where('fid', $fid);
		$this->db->where('status', 'pending');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
public function get_total($subcol, $tab, $where)
	{
		$this->db->select_sum($subcol);
		$this->db->from($tab);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function get_total_2($col, $tab, $col2, $val, $col3, $val2)
	{
		$this->db->select_sum($col);
		$this->db->from($tab);
		if($col2 && $val){
		$this->db->where($col2, $val);
		}
		if($col3 && $val2){
		$this->db->where($col3, $val2);
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function get_total_3($col, $tab, $col2, $val, $col3, $val2, $col4, $val3)
	{
		$this->db->select_sum($col);
		$this->db->from($tab);
		$this->db->where($col2, $val);
		$this->db->where($col3, $val2);
		$this->db->where($col4, $val3);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function check_avl($arrive, $departure, $room)
	{
		$this->db->select('*');
		$this->db->from('checkin');
		$this->db->where('checkin_date <= ', $arrive);
		$this->db->where('checkout_date  >= ', $departure);
		$this->db->where('room_no', $room);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function show_data_id_order_multy_con2($table_name, $id, $fieldname, $id2, $fieldname2, $order, $orderfield)
	{

		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($fieldname, $id);
		$this->db->where($fieldname2, $id2);

		$this->db->order_by($orderfield, $order);

		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function count_referals($table_name, $reference_code)
	{
		$this->db->where('reference_code', $reference_code);
		$query = $this->db->get($table_name);
		return $query->num_rows();
		// echo $this->db->last_query();exit();

	}
	public function get_wallet_data($logged_in_user_id) {
        $this->db->select('wallet.id, wallet.user_id, user_register.name');
        $this->db->from('wallet');
        $this->db->join('user_register', 'user_register.id = wallet.user_id');
        $this->db->where('wallet.user_id !=', $logged_in_user_id);
        $query = $this->db->get();
        return $query->result();
    }
	public function countData($table, $where = array()) {
        // Example query using CI Query Builder
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->count_all_results();
    }
}
