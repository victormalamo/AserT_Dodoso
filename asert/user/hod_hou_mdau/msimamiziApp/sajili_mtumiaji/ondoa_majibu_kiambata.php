<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
$form_data = json_decode(file_get_contents("php://input"));
$ticket_id = $form_data->ticket_id;
$majibu_kiambata = "../../../mdau/viambatanisho/".$form_data->majibu_kiambata;
	$query = "UPDATE dawati_la_wateja SET majibu_kiambata = '' WHERE ticket_id = '$ticket_id'";
		if(mysqli_query($conntscpME, $query)) {
		$message = 'limeondolewa';
		unlink($majibu_kiambata);
		}else{
		$connection_error = 'tatizo';
		}
	$output = array(
		'connection_error' => $connection_error,
		'message' => $message
	);
echo json_encode($output);

?>