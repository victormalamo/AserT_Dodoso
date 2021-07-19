<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
//session_start();
//$group_admin_username = $_SESSION['username'];
$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();
$new_assessor_full_name = $form_data->new_assessor_full_name;
$new_assessor_qualification = $form_data->new_assessor_qualification;
$new_assessor_firm = $form_data->new_assessor_firm;
$new_assessor_mobile_number = $form_data->new_assessor_mobile_number;
$assessor_created_by = $_SESSION['username'];

//INSERT

if($form_data->action_new_assessor == 'insert_new_assessors')
{

$insert_or_edit = 'insert';

	$insert_query = "INSERT INTO afcg_assessors (assessor_full_name, assessor_qualification_name, assessor_firm, username, assessor_created_by, active) VALUES ('$new_assessor_full_name', '$new_assessor_qualification', '$new_assessor_firm', '$new_assessor_mobile_number', '$assessor_created_by', 'yes')";
	if(mysqli_query($conntscpME, $insert_query)) {
	$message = 'imefanikiwa';
	}else{
	$connection_error = 'tatizo';
	}

//EDIT 

}elseif($form_data->action_new_assessor == 'edit_assessors'){

$insert_or_edit = 'edit';
$reg_assessor_id = $form_data->reg_assessor_id;

	$update_query = "UPDATE afcg_assessors SET assessor_full_name = '$assessor_full_name', assessor_qualification_name = '$assessor_qualification', assessor_firm = '$assessor_firm', username = '$new_assessor_mobile_number' WHERE reg_assessor_id = '".$reg_assessor_id."'";
	if(mysqli_query($conntscpME, $update_query)) {
	$message = 'imefanikiwa';			
	}
	else
	{
	$connection_error = 'tatizo';
	}	
	
}

$output = array(
	'connection_error' => $connection_error,
	'insert_or_edit' => $insert_or_edit,		
	'message' => $message
);

echo json_encode($output);
?>