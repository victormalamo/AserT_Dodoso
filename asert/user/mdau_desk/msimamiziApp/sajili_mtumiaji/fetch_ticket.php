<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$connection_error = '';

$ticket_id = '';

$output = array();
	
	$ticket_id = $form_data->ticket_id;
	$query = "SELECT * FROM dawati_la_wateja WHERE ticket_id = '$ticket_id'"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  $output['tarehe_kutoka_kwa_mteja'] = $row['tarehe_kutoka_kwa_mteja'];
		  $output['majina_kamili'] = $row['majina_kamili'];
		  $output['jinsia'] = $row['jinsia'];
		  $output['barua_pepe'] = $row['barua_pepe'];
		  $output['simu'] = $row['simu'];
		  $output['nchi'] = $row['nchi'];
		  $output['mkoa'] = $row['mkoa'];
		  $output['halmashauri'] = $row['halmashauri'];
		  $output['taasisi'] = $row['taasisi'];
		  $output['kichwa_cha_maelezo'] = $row['kichwa_cha_maelezo'];
		  $output['maelezo'] = $row['maelezo'];
		  $output['kiambata'] = $row['kiambata'];
		  $output['div_unit_ID'] = $row['div_unit_ID'];
		  $output['div_unit'] = $row['div_unit'];
		  $output['category'] = $row['category'];
		  $output['majibu_title'] = $row['majibu_title'];
		  $output['majibu_maelezo'] = $row['majibu_maelezo'];
		  $output['majibu_kiambata'] = $row['majibu_kiambata'];
		  $output['tarehe_ps'] = $row['tarehe_ps'];
		  $output['general_status'] = $row['general_status'];
		  $output['mtumaji_mrejesho'] = $row['mtumaji_mrejesho'];
		  $output['mtumaji_comments'] = $row['mtumaji_comments'];
		 }
	}
	//$output = array(
		//'kiambata_error' => $kiambata_error,
		//'error'  => $validation_error,
		//'connection_error' => $connection_error,
		//'message' => $message
	//);


echo json_encode($output);

?>