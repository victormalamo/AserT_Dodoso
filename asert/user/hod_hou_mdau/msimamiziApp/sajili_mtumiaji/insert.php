<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';
$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_hod_hou_to_ps = date('d-m-Y H:i:s');

	//$category = $form_data->category;
	//$div_unit_ID = $form_data->div_unit_ID;
	//$div_unit = $form_data->div_unit;
	
	$majibu_title = strtoupper($form_data->majibu_title);
	$majibu_maelezo = $form_data->majibu_maelezo;
	$ticket_id = $form_data->ticket_id;
	$ps_status = $form_data->ps_status;
	$send_to = $form_data->send_to;
	if($ps_status == ''){			
		if($send_to == 'ps'){
		$general_status = "yamefanyiwa_kazi_idarani"; $hod_hou_status = "yamefanyiwa_kazi_idarani";
		}else{
		$general_status = "yamepokelewa_mapokezi"; $hod_hou_status = "yanafanyiwa_kazi_idarani";
		}
	}elseif($ps_status == 'not_vetted'){
		if($send_to == 'ps'){
		$general_status = "yamefanyiwa_kazi_idarani"; $hod_hou_status = "yamefanyiwa_kazi_idarani"; $ps_status_change = "reply_to_not_vetted";
		}else{
		$general_status = "yamefanyiwa_kazi_idarani"; $hod_hou_status = "yamefanyiwa_kazi_idarani"; $ps_status_change = 'not_vetted';
		}
	}elseif($ps_status == 'vetted'){
		if($send_to == 'z_msimamizi_dawati'){
		$general_status = "yamefanyiwa_kazi_km"; $hod_hou_status = "yamefanyiwa_kazi_idarani"; $ps_status_change = "vetted";
		}else{
		$general_status = "yamefanyiwa_kazi_idarani"; $hod_hou_status = "yamefanyiwa_kazi_idarani"; $ps_status_change = 'vetted';
		}	
	}	
	$hod_hou_username = $_SESSION['username'];
	$hod_hou_title = $_SESSION['jina_la_cheo'];

if($form_data->kuna_file == 'ndio') {
							  
	$query = "UPDATE dawati_la_wateja SET general_status = '$general_status', hod_hou_status = '$hod_hou_status', ps_status = '$ps_status_change', majibu_title = '$majibu_title', majibu_maelezo = '$majibu_maelezo', hod_hou_username = '$hod_hou_username', hod_hou_title = '$hod_hou_title', tarehe_hod_hou_to_ps = '$tarehe_hod_hou_to_ps' WHERE ticket_id = '$ticket_id'";
		if(mysqli_query($conntscpME, $query)) {
		if($send_to != ''){
		$message = 'imetumwa';
		}else{
		$message = 'imehifadhiwa';
		}
		$_SESSION['ticket_id'] = $ticket_id;
		}else{
		unset($_SESSION['ticket_id']);
		$connection_error = 'tatizo';
		}
	$output = array(
		'connection_error' => $connection_error,
		'message' => $message,
		'tarehe_hod_hou_to_ps' => $tarehe_hod_hou_to_ps
	);
echo json_encode($output);

}else{

	$query = "UPDATE dawati_la_wateja SET general_status = '$general_status', hod_hou_status = '$hod_hou_status', ps_status = '$ps_status_change', majibu_title = '$majibu_title', majibu_maelezo = '$majibu_maelezo', hod_hou_username = '$hod_hou_username', hod_hou_title = '$hod_hou_title', tarehe_hod_hou_to_ps = '$tarehe_hod_hou_to_ps' WHERE ticket_id = '$ticket_id'";
		if(mysqli_query($conntscpME, $query)) {
		if($send_to != ''){
		$message = 'imetumwa';
		}else{
		$message = 'imehifadhiwa';
		}
		//$message = 'Success!';
		$ticket_id = $ticket_id;
		//$category_name = $category;
		}else{
		unset($_SESSION['ticket_id']);
		$connection_error = 'tatizo';
		}
	$output = array(
		//'category' => $category_name
		'connection_error' => $connection_error,
		'message' => $message,
		'ticket_id'  => $ticket_id,
		'tarehe_hod_hou_to_ps' => $tarehe_hod_hou_to_ps
		
	);

echo json_encode($output);

}

?>