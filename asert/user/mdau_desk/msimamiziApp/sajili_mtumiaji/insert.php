<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$connection_error = '';
$validation_error = '';

//$ticket_id = '';
//$category = '';
//$div_unit_ID = '';
//$div_unit = '';

$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_kupokelewa = date('d-m-Y H:i:s');
	
	$ticket_id = $form_data->ticket_id;
	$category = $form_data->category;
	$div_unit_ID = $form_data->div_unit_ID;
	$div_unit = $form_data->div_unit;
	$mpokeaji_username = $_SESSION['username'];
	$mpokeaji_title = $_SESSION['jina_la_cheo'];
	$general_status = "yamepokelewa_mapokezi";		
			  
			///UPDATE
				$query = "UPDATE dawati_la_wateja SET general_status = '$general_status', tarehe_kupokelewa = '$tarehe_kupokelewa', mpokeaji_username = '$mpokeaji_username', mpokeaji_title = '$mpokeaji_title', category = '$category', div_unit_ID = '$div_unit_ID', div_unit = '$div_unit' WHERE ticket_id = '$ticket_id'";
				//$query = "UPDATE dawati_la_wateja SET general_status = '$general_status' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'Imetumwa '.$div_unit;
					$category_name = $category;					
				} else {
				$connection_error = 'tatizo';					
				}								

	$output = array(
		//'kiambata_error' => $kiambata_error,
		//'error'  => $validation_error,
		'connection_error' => $connection_error,
		'message' => $message,
		'category' => $category_name
	);


echo json_encode($output);

?>