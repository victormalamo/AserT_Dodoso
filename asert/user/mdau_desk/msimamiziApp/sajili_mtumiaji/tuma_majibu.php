<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$majibu_message = '';
$majibu_connection_error = '';

$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_kutuma_majibu_taarifa = date('d-m-Y H:i:s');
	
	$ticket_id = $form_data->ticket_id;
	$private_public = $form_data->private_public;
	$dawati_mtumaji_username = $_SESSION['username'];
	$dawati_mtumaji_title = $_SESSION['jina_la_cheo'];
	$general_status = "yamejibiwa_mapokezi";		

				$query = "UPDATE dawati_la_wateja SET general_status = '$general_status', tarehe_kutuma_majibu_taarifa = '$tarehe_kutuma_majibu_taarifa', dawati_mtumaji_username = '$dawati_mtumaji_username', dawati_mtumaji_title = '$dawati_mtumaji_title', private_public = '$private_public' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					if($private_public == 'private'){ 
					$majibu_message = 'Taarifa imetumwa kikamilifu ('.$private_public.')'; 
					}else{
					$majibu_message = 'Majibu yametumwa kikamilifu ('.$private_public.')';
					}										
				} else {
				$majibu_connection_error = 'tatizo';					
				}								

	$output = array(
		'majibu_connection_error' => $majibu_connection_error,
		'majibu_message' => $majibu_message
	);


echo json_encode($output);

?>