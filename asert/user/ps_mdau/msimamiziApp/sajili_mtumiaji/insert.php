<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';
$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_ps = date('d-m-Y H:i:s');

	//$category = $form_data->category;
	//$div_unit_ID = $form_data->div_unit_ID;
	//$div_unit = $form_data->div_unit;
	
	//$majibu_title = $form_data->majibu_title;	
	$ticket_id = $form_data->ticket_id;
	$ps_input = $form_data->ps_input;	
	$ps_action = $form_data->ps_action;
	$ps_action_name = $form_data->ps_action_name;
	if($ps_action == 'vetted'){
	$ps_status = "vetted";
	$ps_status_name = $ps_action_name;
	}elseif($ps_action == 'not_vetted'){
	$ps_status = "not_vetted";
	$ps_status_name = $ps_action_name;
	}else{
	$ps_status = "yanafanyiwa_kazi_ps";
	}
	$ps_username = $_SESSION['username'];
	$ps_cheo = $_SESSION['jina_la_cheo'];


	$query = "UPDATE dawati_la_wateja SET ps_status = '$ps_status', ps_status_name = '$ps_status_name', ps_input = '$ps_input', ps_username = '$ps_username', ps_cheo = '$ps_cheo', tarehe_ps = '$tarehe_ps' WHERE ticket_id = '$ticket_id'";
		if(mysqli_query($conntscpME, $query)) {
		if($ps_action != ''){
		$message = 'imetumwa';
		}else{
		$message = 'imehifadhiwa';
		}
		//$message = 'Success!';
		$ticket_id = $ticket_id;
		//$category_name = $category;
		}else{
		$connection_error = 'tatizo';
		}
	$output = array(
		//'category' => $category_name
		'connection_error' => $connection_error,
		'message' => $message,
		'ticket_id'  => $ticket_id
		
	);

echo json_encode($output);

?>