<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$location_id = '';
$location = '';
$acc_facility_id = '';
$type_of_accomodation_facilities = '';
$approval = '';

$output = array();
if($form_data->action == 'fetch_single_data')
{
	$id = $form_data->id;
	$query = "SELECT * FROM afcg_registered_facilities WHERE (id = '".$id."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  $output['id'] = $row['id'];
		  $output['regID'] = $row['regID'];
		  $output['regNam'] = $row['mkoa'];
		  $output['lgaID'] = $row['lgaID'];
		  $output['lgaNam'] = $row['halmashauri'];
		  $output['location_id'] = $row['location_id'];
		  $output['location_name'] = $row['location'];
		  $output['acc_facility_id'] = $row['acc_facility_id'];
		  $output['acc_facility_type'] = $row['type_of_accomodation_facilities'];
		  $output['trading_name'] = $row['trading_name'];
		  $output['tin'] = $row['tin'];
		  $output['facility_name'] = $row['facility_name'];
		  $output['physical_address'] = $row['physical_address'];
		  $output['postal_address'] = $row['postal_address'];
		  $output['simu_mobile'] = $row['simu_mobile'];
		  $output['simu_landline'] = $row['simu_landline'];
		  $output['barua_pepe'] = $row['barua_pepe'];
		  $output['username'] = $row['username'];		  
		  $output['group_admin_username'] = $row['group_admin_username'];
		  
		  //$output['essential_items_id'] = $row['essential_items_id'];
		  //$output['essential_item_score'] = $row['essential_item_score'];
		  
		  //$output['assessment_id'] = $row['assessment_id'];
		  //if($row["$assessor_score_column"] == ''){  $output['assessment_score'] = 'empty'; }else{  $output['assessment_score'] = $row["$assessor_score_column"]; }		  
		 }
		// if($_SESSION['username'] == $row['username']){ $output['facility_mama'] = 'ndio'; }else{ $output['facility_mama'] = 'hapana'; }
	 }
}
else
{

	
	$location_id = $form_data->location_id;
	$location = $form_data->location;
	$acc_facility_id = $form_data->acc_facility_id;
	$type_of_accomodation_facilities = $form_data->type_of_accomodation_facilities;
	$approval = $form_data->approval;
		
			//Update
			if($form_data->action == 'edit_request')
			{
				$id = $form_data->id;
				$insert_or_edit = 'edit';
					$query = "UPDATE afcg_registered_facilities SET location_id = '$location_id', location = '$location', acc_facility_id = '$acc_facility_id', type_of_accomodation_facilities = '$type_of_accomodation_facilities', general_status = '$approval' WHERE (id = '".$id."')";
					if(mysqli_query($conntscpME, $query))
					{
					$message = 'imefanikiwa';																
					}
					else
					{
					$connection_error = 'tatizo';					
					}		
											
			}
			
	$output = array(
		'connection_error' => $connection_error,
		'message' => $message,
		'imefika' => $imefika,
		'insert_or_edit' => $insert_or_edit
	);
	
}

echo json_encode($output);


?>