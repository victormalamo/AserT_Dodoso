<?php
require_once('../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_mdau_mrejesho = date('d-m-Y H:i:s');
	
	$ticket_id = $form_data->ticket_id;
	$mtumaji_mrejesho = $form_data->mdau_mrejesho;
	$mtumaji_comments = $form_data->mdau_mrejesho_maoni;
	$general_status = 'mrejesho_mdau';		

				$query = "UPDATE dawati_la_wateja SET general_status = '$general_status', tarehe_mdau_mrejesho = '$tarehe_mdau_mrejesho', mtumaji_mrejesho = '$mtumaji_mrejesho', mtumaji_comments = '$mtumaji_comments' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'Imetumwa';					
				} else {
				$connection_error = 'tatizo';					
				}								

	$output = array(
		'connection_error' => $connection_error,
		'message' => $message
	);


echo json_encode($output);

?>