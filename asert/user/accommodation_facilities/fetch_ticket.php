<?php
require_once('../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$connection_error = '';

$ticket_id = '';

$output = array();

//$kutoka_tarehe_separated = substr($kutoka_tarehe_combined,0,11);
//$kutoka_tarehe = DateTime::createFromFormat('d M Y', $kutoka_tarehe_separated) -> format('d-m-Y');
	
	$ticket_id = $form_data->ticket_id;
	$query = "SELECT * FROM dawati_la_wateja WHERE ticket_id = '$ticket_id'"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  //$output['tarehe_kutoka_kwa_mteja'] = $row['tarehe_kutoka_kwa_mteja'];
		  //$output['majina_kamili'] = $row['majina_kamili'];
		  $output['jinsia'] = $row['jinsia'];
		  //$output['barua_pepe'] = $row['barua_pepe'];
		  //$output['simu'] = $row['simu'];
		  //$output['nchi'] = $row['nchi'];
		  //$output['mkoa'] = $row['mkoa'];
		  //$output['halmashauri'] = $row['halmashauri'];
		  //$output['taasisi'] = $row['taasisi'];
		  $output['kichwa_cha_maelezo'] = strtoupper($row['kichwa_cha_maelezo']);
		  $output['maelezo'] = $row['maelezo'];
		  $output['kiambata'] = $row['kiambata'];
		  //$output['div_unit_ID'] = $row['div_unit_ID'];
		  ///$output['div_unit'] = $row['div_unit'];
		  $output['category'] = $row['category'];
		  $output['majibu_title'] = strtoupper($row['majibu_title']);
		  $output['majibu_maelezo'] = $row['majibu_maelezo'];
		  $output['majibu_kiambata'] = $row['majibu_kiambata'];
		  $output['general_status'] = $row['general_status'];
		  $output['private_public'] = $row['private_public'];
		  $output['tarehe_kutoka_kwa_mteja'] = substr($row['tarehe_kutoka_kwa_mteja'],0,10).", ".substr($row['tarehe_kutoka_kwa_mteja'],11,8); 
		  $output['tarehe_ps'] = substr($row['tarehe_ps'],0,10).", ".substr($row['tarehe_ps'],11,8); 
		  //$output['mtumaji_mrejesho'] = $row['mtumaji_mrejesho'];
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