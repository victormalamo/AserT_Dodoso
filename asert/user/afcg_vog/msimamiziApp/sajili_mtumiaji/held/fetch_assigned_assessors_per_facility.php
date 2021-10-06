<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));
$facility_id = $form_data->facility_id;
$output_0 = array();
$output_1 = array();
$output_2 = array();
$output_3 = array();

	//assessor_0
	
	$query_assigned_assessor_0 = "SELECT * FROM afcg_assessors_vs_facilities WHERE ( (facility_id = '".$facility_id."') AND (assessor_category = 'self_self') )"; 
	$result_assigned_assessor_0 = mysqli_query($conntscpME, $query_assigned_assessor_0);
	$row_assigned_assessor_0 = mysqli_fetch_array($result_assigned_assessor_0);
	if(mysqli_num_rows($result_assigned_assessor_0) > 0) {
		 $assigned_assessor_0_username = $row_assigned_assessor_0['assessor_username'];
			$query_registered_assessor_0 = "SELECT * FROM afcg_assessors WHERE assessor_mobile_number = '$assigned_assessor_0_username'"; 
			$result_registered_assessor_0 = mysqli_query($conntscpME, $query_registered_assessor_0);
				if(mysqli_num_rows($result_registered_assessor_0) > 0) {
					foreach($result_registered_assessor_0 as $row)
					{
						$output_0['reg_assessor_id'] = $row['reg_assessor_id'];
						$output_0['assessor_full_name'] = $row['assessor_full_name'];
						$output_0['assessor_qualification'] = $row['assessor_qualification'];
						$output_0['assessor_firm'] = $row['assessor_firm'];
						$output_0['assessor_mobile_number'] = $row['assessor_mobile_number'];
						$output_0['assessor_created_by'] = $row['assessor_created_by'];						
					}	 
				}
		$output_0['assessor_group_id'] = $row_assigned_assessor_0['assessor_group_id'];
	}else{
	$output_0['connection_error'] = 'connection_error';
	}
	
	
	//assessor_1
	$query_assigned_assessor_1 = "SELECT * FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_1'))"; 
	$result_assigned_assessor_1 = mysqli_query($conntscpME, $query_assigned_assessor_1);
	$row_assigned_assessor_1 = mysqli_fetch_array($result_assigned_assessor_1);
	if(mysqli_num_rows($result_assigned_assessor_1) > 0) {
		 $assigned_assessor_1_username = $row_assigned_assessor_1['assessor_username'];
			$query_registered_assessor_1 = "SELECT * FROM afcg_assessors WHERE assessor_mobile_number = '$assigned_assessor_1_username'"; 
			$result_registered_assessor_1 = mysqli_query($conntscpME, $query_registered_assessor_1);
				if(mysqli_num_rows($result_registered_assessor_1) > 0) {
					foreach($result_registered_assessor_1 as $row)
					{
						$output_1['reg_assessor_id'] = $row['reg_assessor_id'];
						$output_1['assessor_full_name'] = $row['assessor_full_name'];
						$output_1['assessor_qualification'] = $row['assessor_qualification'];
						$output_1['assessor_firm'] = $row['assessor_firm'];
						$output_1['assessor_mobile_number'] = $row['assessor_mobile_number'];
						$output_1['assessor_created_by'] = $row['assessor_created_by'];
					}	 
				}
		$output_1['assessor_group_id'] = $row_assigned_assessor_1['assessor_group_id'];
	}else{
	$output_1['connection_error'] = 'connection_error';
	}
	
	//assessor_2
	$query_assigned_assessor_2 = "SELECT * FROM afcg_assessors_vs_facilities WHERE ( (facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_2') )"; 
	$result_assigned_assessor_2 = mysqli_query($conntscpME, $query_assigned_assessor_2);
	$row_assigned_assessor_2 = mysqli_fetch_array($result_assigned_assessor_2);
	if(mysqli_num_rows($result_assigned_assessor_2) > 0) {
		 $assigned_assessor_2_username = $row_assigned_assessor_2['assessor_username'];
			$query_registered_assessor_2 = "SELECT * FROM afcg_assessors WHERE assessor_mobile_number = '$assigned_assessor_2_username'"; 
			$result_registered_assessor_2 = mysqli_query($conntscpME, $query_registered_assessor_2);
				if(mysqli_num_rows($result_registered_assessor_2) > 0) {
					foreach($result_registered_assessor_2 as $row)
					{
						$output_2['reg_assessor_id'] = $row['reg_assessor_id'];
						$output_2['assessor_full_name'] = $row['assessor_full_name'];
						$output_2['assessor_qualification'] = $row['assessor_qualification'];
						$output_2['assessor_firm'] = $row['assessor_firm'];
						$output_2['assessor_mobile_number'] = $row['assessor_mobile_number'];
						$output_2['assessor_created_by'] = $row['assessor_created_by'];
					}	 
				}
	}else{
	$output_2['connection_error'] = 'connection_error';
	}
	
	//assessor_3
	$query_assigned_assessor_3 = "SELECT * FROM afcg_assessors_vs_facilities WHERE ( (facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_3') )"; 
	$result_assigned_assessor_3 = mysqli_query($conntscpME, $query_assigned_assessor_3);
	$row_assigned_assessor_3 = mysqli_fetch_array($result_assigned_assessor_3);
	if(mysqli_num_rows($result_assigned_assessor_3) > 0) {
		 $assigned_assessor_3_username = $row_assigned_assessor_3['assessor_username'];
			$query_registered_assessor_3 = "SELECT * FROM afcg_assessors WHERE assessor_mobile_number = '$assigned_assessor_3_username'"; 
			$result_registered_assessor_3 = mysqli_query($conntscpME, $query_registered_assessor_3);
				if(mysqli_num_rows($result_registered_assessor_3) > 0) {
					foreach($result_registered_assessor_3 as $row)
					{
						$output_3['reg_assessor_id'] = $row['reg_assessor_id'];
						$output_3['assessor_full_name'] = $row['assessor_full_name'];
						$output_3['assessor_qualification'] = $row['assessor_qualification'];
						$output_3['assessor_firm'] = $row['assessor_firm'];
						$output_3['assessor_mobile_number'] = $row['assessor_mobile_number'];
						$output_3['assessor_created_by'] = $row['assessor_created_by'];
					}	 
				}
	}else{
	$output_3['connection_error'] = 'connection_error';
	}
	
echo json_encode(array($output_0,$output_1,$output_2,$output_3));  
?>