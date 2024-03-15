<?php
defined('BASEPATH') or exit('No direct script access allowed');
$directs = 0;
// Helper For print_r
function prx($var = '')
{
	echo "<pre>";
	print_r($var);
	echo "</pre>";
	die();
}

// Helper For print_r
function pr($var = '')
{
	echo "<pre>";
	print_r($var);
	echo "</pre>";
	// die();	
}

//Helper For base_url()
function bs($value = '')
{
	// public $url = ""
	echo base_url($value);
}

//Helper for $this->load->view()
function view($value = '', $data = array(), $output = false)
{
	$CI = &get_instance();
	$CI->load->view($value, $data, $output);
}

//Helper For thsi->input->post()
function post($value = '')
{
	$CI = &get_instance();
	return $CI->input->post($value);
}

//Helper for encrypt data
//Added by Deep Basak on Febuary 16
function encrypt($value)
{
	$CI = &get_instance();
	return $CI->encryption->encrypt($value);
}

//Helper for decrypt data
//Added by Deep Basak on Febuary 16
function decrypt($value)
{
	$CI = &get_instance();
	return $CI->encryption->decrypt($value);
}

//helper for var_dump
function dd($value = '')
{
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
	die();
}

//Added by DEEP BASAK on Febuary 21, 2023
//For getting the IP
function get_client_ip()
{
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	} else if (isset($_SERVER['HTTP_FORWARDED'])) {
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	} else if (isset($_SERVER['REMOTE_ADDR'])) {
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	} else {
		$ipaddress = 'UNKNOWN';
	}

	return $ipaddress;
}

//Added b DEEP BASAK on March 15, 2023
//For checking the permission of Group
function hasGroupPrivilege($user_id, $perm = '')
{
	$CI = &get_instance();
	$group_details = $CI->Common_model->getAllData('groups', '', 1, ['group_name' => $perm]);
	$user_details = $CI->LoginModel->get_user_data('user_masters', $user_id);
	$group_permission = $CI->Common_model->getAllData('user_action_permission', '', '', ['user_id' => $user_details->id, 'group_id' => $group_details->id, 'has_perm' => 'Y']);

	if (count($group_permission) > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//Added by DEEP BASAK on April 04, 2023
//For get the action permission
function hasGroupActionPrivilege($user_id = '', $perm = '', $action = '')
{
	$CI = &get_instance();
	$group_details = $CI->Common_model->getAllData('groups', '', 1, ['group_name' => $perm]);
	$user_details = $CI->LoginModel->get_user_data('user_masters', $user_id);
	$group_permission = $CI->Common_model->getAllData(
		'user_action_permission',
		'',
		'',
		[
			'user_id' => $user_details->id,
			'group_id' => $group_details->id,
			'sub_group_id' => 0,
			'has_perm' => 'Y',
			'show_on_menu' => '1'
		]
	);
	if (count($group_permission) > 0) {
		$permission_action = $CI->Common_model->getAllData(
			'user_action_permission_action',
			'',
			'',
			[
				'user_action_permission_id' => $group_permission[0]->id,
				'action_name' => $action
			]
		);
		if (count($permission_action) > 0) {
			if ($permission_action[0]->has_perm == 'Y') {
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	} else {
		return FALSE;
	}
}

//Added b DEEP BASAK on March 15, 2023
//For checking the permission of Sub Group
function hasSubGroupPrivilege($user_id, $perm = '')
{
	$CI = &get_instance();
	$sub_group_details = $CI->Common_model->getAllData('sub_groups', '', 1, ['sub_group_name' => $perm]);
	$group_details = $CI->Common_model->getAllData('groups', '', 1, ['id' => $sub_group_details->group_id]);
	$user_details = $CI->LoginModel->get_user_data('user_masters', $user_id);
	$group_permission = $CI->Common_model->getAllData(
		'user_action_permission',
		'',
		'',
		[
			'user_id' => $user_details->id,
			'group_id' => $group_details->id,
			'sub_group_id' => $sub_group_details->id,
			'has_perm' => 'Y',
			'show_on_menu' => '1'
		]
	);
	if (count($group_permission) > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//Added by DEEP BASAK on MArch 15, 2023
//For get the action permission
function hasSubGroupActionPrivilege($user_id = '', $perm = '', $action = '')
{
	$CI = &get_instance();
	$sub_group_details = $CI->Common_model->getAllData('sub_groups', '', 1, ['sub_group_name' => $perm]);
	$group_details = $CI->Common_model->getAllData('groups', '', 1, ['id' => $sub_group_details->group_id]);
	$user_details = $CI->LoginModel->get_user_data('user_masters', $user_id);
	$group_permission = $CI->Common_model->getAllData(
		'user_action_permission',
		'',
		'',
		[
			'user_id' => $user_details->id,
			'group_id' => $group_details->id,
			'sub_group_id' => $sub_group_details->id,
			'has_perm' => 'Y',
			'show_on_menu' => '1'
		]
	);

	if (count($group_permission) > 0) {
		$permission_action = $CI->Common_model->getAllData(
			'user_action_permission_action',
			'',
			'',
			[
				'user_action_permission_id' => $group_permission[0]->id,
				'action_name' => $action
			]
		);

		if (count($permission_action) > 0) {
			if ($permission_action[0]->has_perm == 'Y') {
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	} else {
		return FALSE;
	}
}

//Added by DEEP BASAK on July 13, 2023
//For get the in between text from a perticular string
function get_string_between($string, $start, $end)
{
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0)
		return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}

//Added by DEEP on September 07, 2023
//For slug the text
function slugify($text)
{
	// Replace non-alphanumeric characters with dashes
	$text = preg_replace('~[^\pL\d]+~u', '_', $text);

	// Transliterate characters to ASCII
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	// Remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);

	// Convert to lowercase
	$text = strtolower($text);

	// Remove leading and trailing dashes
	$text = trim($text, '_');

	return $text;
}


function is_multi_dimensional_array($array)
{
	if (is_array($array)) {
		foreach ($array as $element) {
			if (is_array($element)) {
				return true; // If any element is an array, it's multidimensional
			}
		}
	}
	return false; // If no element is an array, it's not multidimensional
}
function totalTeamsUser($ref_code, $directs = '') {
    $CI = &get_instance();
    $totalLeft = $CI->Generalmodel->show_data_id('user_register', $ref_code, 'ref_user', 'get', '');
    // $directs = array_merge($directs,$totalLeft);
    // pr($totalLeft);
    if(!empty($totalLeft)){
    $directs .= "<ul>";
    foreach ($totalLeft as $key => $value) {
    // prx($value);
        $directs .= "<li>";
        // $directs = array_merge($directs, totalTeamsUser($value->id, $directs));
        $directs .= "<div>".$value->name."</div>";
        $directs =  totalTeamsUser($value->id, $directs);
        $directs .= "</li>";
    }
    $directs .= "</ul>";
    }
    return $directs;
}


function totalTeams($ref_code, $directs = 0)
{
    $CI = &get_instance();
    $totalLeft = $CI->Generalmodel->show_data_id('user_register', $ref_code, 'ref_user', 'get', '');
    $directs += count($totalLeft);
    foreach ($totalLeft as $key => $value) {
        $directs = totalTeams($value->id, $directs);
    }
    return $directs;
}

function totalDirects($ref_code)
{
	$CI = &get_instance();
	$totalLeft = $CI->Generalmodel->show_data_id('user_register', $ref_code, 'ref_user', 'get', '');
	$directs = count($totalLeft);
	return $directs;
}
function getRank($ref_code)
{
	$CI = &get_instance();
	$query = $CI->Generalmodel->show_data_id('user_register', $ref_code, 'id', 'get', '');
// 	prx($query);
	$rank = " _ _ _";
	if ( $query[0]->rank == 1) {
		$rank = "Star";
	}
	if ( $query[0]->rank == 2) {
		$rank = "Super Star";
	}
	if ($query[0]->rank == 3) {
		$rank = "Mega Star";
	}
	if ($query[0]->rank == 4) {
		$rank = "Ultimate Star";
	}
	if ($query[0]->rank >= 5) {
		$rank = "Royal Star";
	}
	return $rank;
	
}

function getClub($ref_code)
{
	$CI = &get_instance();
	$query = $CI->Generalmodel->show_data_id('user_register', $ref_code, 'id', 'get', '');
	$rank = " _ _ _";
	if ( $query[0]->rank == 1) {
		$rank = "Star Club";
	}
	if ( $query[0]->rank == 2) {
		$rank = "Super Star Club";
	}
	if ($query[0]->rank == 3) {
		$rank = "Mega Star Club";
	}
	if ($query[0]->rank == 4) {
		$rank = "Ultimate Star Club";
	}
	if ($query[0]->rank >= 5) {
		$rank = "Royal Star Club";
	}
	return $rank;
	
}

function rankWiseWallets($rank)
{
	$CI = &get_instance();
	$query = $CI->Generalmodel->show_data_id('user_register', $rank, 'rank', 'get', '');
	$total = 0;
	foreach($query as $value){
		$DebitsTotal = $CI->Generalmodel->get_total_3('amount', 'wallet', 'user_id', $value->id, 'type', 'Debit','action','0');
		$CreditsTotal = $CI->Generalmodel->get_total_3('amount', 'wallet', 'user_id', $value->id, 'type', 'Credit','action','0');
		$totalIncome = $CreditsTotal[0]->amount - $DebitsTotal[0]->amount;
		$total += $totalIncome;
	}
	return $total;
	
}
?>