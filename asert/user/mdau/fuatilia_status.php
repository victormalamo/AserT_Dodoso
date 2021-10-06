<?php
require_once('../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$status_error = '';
$general_status = '';
//$ticket_id = '';

$output = array();
	
		$ticket_id = $form_data->ticket_id;
		$simu_iliyosajiliwa = $form_data->simu_iliyosajiliwa;
		$query = "SELECT * FROM dawati_la_wateja WHERE ((ticket_id = '".$ticket_id."') AND (simu = '".$simu_iliyosajiliwa."'))";
		$result = mysqli_query($conntscpME, $query);
		$row = mysqli_fetch_assoc($result);
		$total_rows = mysqli_num_rows($result);
		if ($total_rows > 0) {
			$general_status = $row['general_status'];
			//$ticket_id = $ticket_id;
		}else{
			$status_error = $ticket_id.' '.$simu_iliyosajiliwa.' Namba ya tiketi au simu haipo!';
		}

	$output = array(
	'status_error'  => $status_error,
	'general_status' => $general_status
	//'ticket_id' => $ticket_id
	);
	
echo json_encode($output);
?>