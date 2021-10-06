<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$group_admin_username = $_SESSION['username'];

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';
//$facility_id = '';
//$assessor_1_mobile_number = '';
//$assessor_2_mobile_number = '';
//$assessor_3_mobile_number = '';
//$action = '';

$output = array();

///////////INSERT

if($form_data->action == 'insert_assigned_assessors')
{

	$insert_or_edit = 'insert';
	
	$facility_id = $form_data->facility_id;
	$assessor_group_id = $form_data->assessor_group_id;	
	$assessor_1_mobile_number = $form_data->assessor_1_mobile_number;
	$assessor_2_mobile_number = $form_data->assessor_2_mobile_number;
	$assessor_3_mobile_number = $form_data->assessor_3_mobile_number;
	
	//Detect assessor category
	if($assessor_2_mobile_number == '')
	{
		//ONE Assessor
		$assessor_1_category = 'self_self';
			$query_assessor_1 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_1_mobile_number', '$assessor_1_category', '$assessor_group_id')";
			if(mysqli_query($conntscpME, $query_assessor_1)) {
			$message = 'imefanikiwa';
			}else{
			$connection_error = 'tatizo';
			}
	}else{
		//THREE Assessors
		$assessor_1_category = 'self_assessor_1';
		$assessor_2_category = 'self_assessor_2';
		$assessor_3_category = 'self_assessor_3';
			//insert assessor 1
			$query_assessor_1 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_1_mobile_number', '$assessor_1_category', '$assessor_group_id')";
			if(mysqli_query($conntscpME, $query_assessor_1)) {
			$message = 'imefanikiwa';
				//insert assessor 2
				$query_assessor_2 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_2_mobile_number', '$assessor_2_category', '$assessor_group_id')";
				if(mysqli_query($conntscpME, $query_assessor_2)) {
				$message = 'imefanikiwa';
					//insert assessor 3
					$query_assessor_3 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_3_mobile_number', '$assessor_3_category', '$assessor_group_id')";
					if(mysqli_query($conntscpME, $query_assessor_3)) {
					$message = 'imefanikiwa';
					}else{
					$connection_error = 'tatizo';
					}
				}else{
				$connection_error = 'tatizo';
				}
			}else{
			$connection_error = 'tatizo';
			}
	}

}

elseif($form_data->action == 'edit_assigned_assessors')
{

	/////EDIT and INSERT
	
	$insert_or_edit = 'edit';
	
	$facility_id = $form_data->facility_id;
	$assessor_group_id = $form_data->assessor_group_id;
	$assessor_1_mobile_number = $form_data->assessor_1_mobile_number;
	$assessor_2_mobile_number = $form_data->assessor_2_mobile_number;
	$assessor_3_mobile_number = $form_data->assessor_3_mobile_number;
	
	//check if it's from 1 to 1, or 3 to 1, or 3 to 3, or 1 to 3 assessors
	$assessor_2_old_name = $form_data->assessor_2_old_name;
	//check if self_self(single assessor exist
	$assessor_self_self_old_name = $form_data->assessor_self_self_old_name;
	
	
	//Detect assessor category
	if($assessor_2_mobile_number == '')
	{	
	//TO ONE ASSESSOR (SELF_SELF)
		if($assessor_2_old_name == 'halipo'){
		//from 1 to 1
			$assessor_1_category = 'self_self';
			$query_assessor_1 = "UPDATE afcg_assessors_vs_facilities SET assessor_username = '$assessor_1_mobile_number', assessor_category = '$assessor_1_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_self'))";
			if(mysqli_query($conntscpME, $query_assessor_1)) {
				$message = 'imefanikiwa';				
			}
			else
			{
				$connection_error = 'tatizo';
			}			
		}		
		elseif($assessor_2_old_name == 'lipo')
		{
		//from 3 to 1
		
				if($assessor_self_self_old_name == 'lipo'){
				
					//from 3 to 1 with self_self assessor(single assessor)
					//update self_self with assessor 1 details and delete assessor 1,2,3
					$assessor_1_category = 'self_self';
					$query_assessor_1 = "UPDATE afcg_assessors_vs_facilities SET assessor_username = '$assessor_1_mobile_number', assessor_category = '$assessor_1_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_self'))";
					if(mysqli_query($conntscpME, $query_assessor_1)) {
					$message = 'imefanikiwa';
					//Delete self_assessor 1, 2, 3 abaki self_self
						//Delete self_assessor_1
						$query_delete_assessor_1 = "DELETE FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_1'))";
						if(mysqli_query($conntscpME, $query_delete_assessor_1))
						{
						$message = 'imefanikiwa';
							//Delete self_assessor_2
							$query_delete_assessor_2 = "DELETE FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_2'))";
							if(mysqli_query($conntscpME, $query_delete_assessor_2))
							{
							$message = 'imefanikiwa';
								//Delete self_assessor_3
								$query_delete_assessor_3 = "DELETE FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_3'))";
								if(mysqli_query($conntscpME, $query_delete_assessor_3))
								{
								$message = 'imefanikiwa';
								}
								else
								{
								//delete assessor 3 failed
								$connection_error = 'tatizo';
								}
							}
							else
							{
							//delete assessor 2 failed
							$connection_error = 'tatizo';
							}
						}
						else
						{
						//delete assessor 1 failed
						$connection_error = 'tatizo';
						}			
					}
					else
					{
					//update assessor details 1 to self_self failed
					$connection_error = 'tatizo';
					}
				}
				elseif($assessor_self_self_old_name == 'halipo')
				{
				//from 3 to 1 with no self_self assessor(single assessor)
				//update assessors 1 to be self_self and delete assessors 2,3
					$assessor_1_category = 'self_self';
					$query_assessor_1 = "UPDATE afcg_assessors_vs_facilities SET assessor_username = '$assessor_1_mobile_number', assessor_category = '$assessor_1_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_1'))";
					if(mysqli_query($conntscpME, $query_assessor_1)) {
					$message = 'imefanikiwa';
					//Delete self_assessor 2, 3
						//Delete self_assessor_2
						$query_delete_assessor_2 = "DELETE FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_2'))";
						if(mysqli_query($conntscpME, $query_delete_assessor_2))
						{
						$message = 'imefanikiwa';
							//Delete self_assessor_3
							$query_delete_assessor_3 = "DELETE FROM afcg_assessors_vs_facilities WHERE ((facility_id = '".$facility_id."') AND (assessor_category = 'self_assessor_3'))";
							if(mysqli_query($conntscpME, $query_delete_assessor_3))
							{
							$message = 'imefanikiwa';								
							}
							else
							{
							//delete assessor 3 failed
							$connection_error = 'tatizo';
							}
						}
						else
						{
						//delete assessor 2 failed
						$connection_error = 'tatizo';
						}			
					}
					else
					{
					//update assessor 1 (to be self_self) failed
					$connection_error = 'tatizo';
					}
				}						
		}
		
		
	
	}
	elseif($assessor_2_mobile_number != '')
	{
	
	//TO THREE ASSESSORS
	
	$assessor_1_category = 'self_assessor_1';
	$assessor_2_category = 'self_assessor_2';
	$assessor_3_category = 'self_assessor_3';
		
		if($assessor_2_old_name == 'lipo'){
		//from 3 to 3
		//update assessors 1,2,3 leave self_self if present
			//update assessor 1
			$query_assessor_1 = "UPDATE afcg_assessors_vs_facilities SET facility_id = '$facility_id', assessor_username = '$assessor_1_mobile_number', assessor_category = '$assessor_1_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = '".$assessor_1_category."'))";
			if(mysqli_query($conntscpME, $query_assessor_1)) {
			$message = 'imefanikiwa';				
			}else{
			$connection_error = 'tatizo';
			}
			//update assessor 2
			$query_assessor_2 = "UPDATE afcg_assessors_vs_facilities SET facility_id = '$facility_id', assessor_username = '$assessor_2_mobile_number', assessor_category = '$assessor_2_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = '".$assessor_2_category."'))";
			if(mysqli_query($conntscpME, $query_assessor_2)) {
			$message = 'imefanikiwa';					
			}else{
			$connection_error = 'tatizo';
			}
			//update assessor 3
			$query_assessor_3 = "UPDATE afcg_assessors_vs_facilities SET facility_id = '$facility_id', assessor_username = '$assessor_3_mobile_number', assessor_category = '$assessor_3_category', assessor_group_id = '$assessor_group_id' WHERE ((facility_id = '".$facility_id."') AND (assessor_category = '".$assessor_3_category."'))";
			if(mysqli_query($conntscpME, $query_assessor_3)) {
			$message = 'imefanikiwa';
			}else{
			$connection_error = 'tatizo';
			}
		}		
		elseif($assessor_2_old_name == 'halipo')		
		{
		//from 1 to 3
		//insert assessors 1,2,3 leave self_self
		//insert assessor 1
			$query_assessor_1 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_1_mobile_number', '$assessor_1_category', '$assessor_group_id')";
			if(mysqli_query($conntscpME, $query_assessor_1)) {
			$message = 'imefanikiwa';
				//insert assessor 2
				$query_assessor_2 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_2_mobile_number', '$assessor_2_category', '$assessor_group_id')";
				if(mysqli_query($conntscpME, $query_assessor_2)) {
				$message = 'imefanikiwa';
					//insert assessor 3
					$query_assessor_3 = "INSERT INTO afcg_assessors_vs_facilities (facility_id, assessor_username, assessor_category, assessor_group_id) VALUES ('$facility_id', '$assessor_3_mobile_number', '$assessor_3_category', '$assessor_group_id')";
					if(mysqli_query($conntscpME, $query_assessor_3)) {
					$message = 'imefanikiwa';
					}else{
					$connection_error = 'tatizo';
					}
				}else{
				$connection_error = 'tatizo';
				}
			}else{
			$connection_error = 'tatizo';
			}		
		}
		
	}


}


/////USERNAMES AND TEMPORARY PASSWORDS FOR ASSESSORS//////////////
	
	////Check Facility Managers
	$query_assessor_1_is_manager = "SELECT * FROM afcg_registered_facilities WHERE ((username = '".$assessor_1_mobile_number."') AND ( '".$assessor_1_mobile_number."' != '".$_SESSION['username']."'))"; 
	$result_assessor_1_is_manager = mysqli_query($conntscpME, $query_assessor_1_is_manager);
	if (mysqli_num_rows($result_assessor_1_is_manager) > 0) {
		$assessor_1_is_manager = "true";
	 }else{ $assessor_1_is_manager = "false"; }
	 
	$query_assessor_2_is_manager = "SELECT * FROM afcg_registered_facilities WHERE ((username = '".$assessor_2_mobile_number."') AND ( '".$assessor_2_mobile_number."' != '".$_SESSION['username']."'))"; 
	$result_assessor_2_is_manager = mysqli_query($conntscpME, $query_assessor_2_is_manager);
	if (mysqli_num_rows($result_assessor_2_is_manager) > 0) {
		$assessor_2_is_manager = "true";
	 }else{ $assessor_2_is_manager = "false"; }
	 
	$query_assessor_3_is_manager = "SELECT * FROM afcg_registered_facilities WHERE ((username = '".$assessor_3_mobile_number."') AND ( '".$assessor_3_mobile_number."' != '".$_SESSION['username']."'))"; 
	$result_assessor_3_is_manager = mysqli_query($conntscpME, $query_assessor_3_is_manager);
	if (mysqli_num_rows($result_assessor_3_is_manager) > 0) {
		$assessor_3_is_manager = "true";
	 }else{ $assessor_3_is_manager = "false"; }
	 
	 ////Check if assessor is a certified assessor
	$query_assessor_1_is_a_certified_assessor = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_1_mobile_number."') AND (assessor_created_by = 'certified'))"; 
	$result_assessor_1_is_a_certified_assessor = mysqli_query($conntscpME, $query_assessor_1_is_a_certified_assessor);
	if (mysqli_num_rows($result_assessor_1_is_a_certified_assessor) > 0) {
		$assessor_1_is_a_certified_assessor = "true";
	 }else{ $assessor_1_is_a_certified_assessor = "false"; }
	 
	$query_assessor_2_is_a_certified_assessor = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_2_mobile_number."') AND (assessor_created_by = 'certified'))"; 
	$result_assessor_2_is_a_certified_assessor = mysqli_query($conntscpME, $query_assessor_2_is_a_certified_assessor);
	if (mysqli_num_rows($result_assessor_2_is_a_certified_assessor) > 0) {
		$assessor_2_is_a_certified_assessor = "true";
	 }else{ $assessor_2_is_a_certified_assessor = "false"; }
	 
	$query_assessor_3_is_a_certified_assessor = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_3_mobile_number."') AND (assessor_created_by = 'certified'))"; 
	$result_assessor_3_is_a_certified_assessor = mysqli_query($conntscpME, $query_assessor_3_is_a_certified_assessor);
	if (mysqli_num_rows($result_assessor_3_is_a_certified_assessor) > 0) {
		$assessor_3_is_a_certified_assessor = "true";
	 }else{ $assessor_3_is_a_certified_assessor = "false"; }
	 
	////Check if already assigned and not ME and not Facility Manager and not certified
	$query_assessor_1_is_already_assigned = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_1_mobile_number."') AND (funguo != ''))"; 
	$result_assessor_1_is_already_assigned = mysqli_query($conntscpME, $query_assessor_1_is_already_assigned);
	if (mysqli_num_rows($result_assessor_1_is_already_assigned) > 0) {
		$assessor_1_is_already_assigned = "true";
	 }else{ $assessor_1_is_already_assigned = "false"; }
	 
	$query_assessor_2_is_already_assigned = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_2_mobile_number."') AND (funguo != ''))"; 
	$result_assessor_2_is_already_assigned = mysqli_query($conntscpME, $query_assessor_2_is_already_assigned);
	if (mysqli_num_rows($result_assessor_2_is_already_assigned) > 0) {
		$assessor_2_is_already_assigned = "true";
	 }else{ $assessor_2_is_already_assigned = "false"; }
	 
	$query_assessor_3_is_already_assigned = "SELECT * FROM afcg_assessors WHERE ((assessor_mobile_number = '".$assessor_3_mobile_number."') AND (funguo != ''))"; 
	$result_assessor_3_is_already_assigned = mysqli_query($conntscpME, $query_assessor_3_is_already_assigned);
	if (mysqli_num_rows($result_assessor_3_is_already_assigned) > 0) {
		$assessor_3_is_already_assigned = "true";
	 }else{ $assessor_3_is_already_assigned = "false"; }
	 
		
	if(($assessor_1_mobile_number == $_SESSION['username']) || ( $assessor_1_is_manager == "true") || ($assessor_1_is_a_certified_assessor == "true") || ($assessor_1_is_already_assigned == "true"))
	{
		$assessor_1_mobile_number = "current";	
	}
	
	if(($assessor_2_mobile_number == $_SESSION['username']) || ( $assessor_2_is_manager == "true") || ($assessor_2_is_a_certified_assessor == "true") || ($assessor_2_is_already_assigned == "true"))
	{
		$assessor_2_mobile_number = "current";
	}
	
	if(($assessor_3_mobile_number == $_SESSION['username']) || ( $assessor_3_is_manager == "true") || ($assessor_3_is_a_certified_assessor == "true") || ($assessor_3_is_already_assigned == "true"))
	{
		$assessor_3_mobile_number = "current";		
	}
	
		$assessor_1_username = $assessor_1_mobile_number;
		$assessor_1_generate_password = md5($assessor_1_username);
		$assessor_1_password = substr("$assessor_1_generate_password", 1, 6);
		
		if($assessor_2_mobile_number != ''){
		$assessor_2_username = $assessor_2_mobile_number;
		$assessor_2_generate_password = md5($assessor_2_username);
		$assessor_2_password = substr("$assessor_2_generate_password", 2, 6);
		}else{ $assessor_2_username = ''; $assessor_2_password = ''; }
		
		if($assessor_3_mobile_number != ''){
		$assessor_3_username = $assessor_3_mobile_number;
		$assessor_3_generate_password = md5($assessor_3_username);
		$assessor_3_password = substr("$assessor_3_generate_password", 3, 6);
		}else{ $assessor_3_username = ''; $assessor_3_password = ''; }
		
		///update funguo in table afcg_assessors for other assessors apart from mimi, managers, certified and already assigned assessors
		
		if($assessor_1_mobile_number != "current")
		{
		///update assessor 1
			$query_assessor_1_update_funguo = "UPDATE afcg_assessors SET funguo = '".md5($assessor_1_password)."' WHERE (assessor_mobile_number = '".$assessor_1_username."')";
			if(mysqli_query($conntscpME, $query_assessor_1_update_funguo)) {
			$message = 'imefanikiwa';				
			}else{
			$connection_error = 'tatizo';
			}
		}
		if($assessor_2_mobile_number != "current")
		{
		///update assessor 2
			$query_assessor_2_update_funguo = "UPDATE afcg_assessors SET funguo = '".md5($assessor_2_password)."' WHERE (assessor_mobile_number = '".$assessor_2_username."')";
			if(mysqli_query($conntscpME, $query_assessor_2_update_funguo)) {
			$message = 'imefanikiwa';				
			}else{
			$connection_error = 'tatizo';
			}
		}
		
		if($assessor_3_mobile_number != "current")
		{
		///update assessor 3
			$query_assessor_3_update_funguo = "UPDATE afcg_assessors SET funguo = '".md5($assessor_3_password)."' WHERE (assessor_mobile_number = '".$assessor_3_username."')";
			if(mysqli_query($conntscpME, $query_assessor_3_update_funguo)) {
			$message = 'imefanikiwa';				
			}else{
			$connection_error = 'tatizo';
			}
		}
	


	$output = array(
		'connection_error' => $connection_error,
		'insert_or_edit' => $insert_or_edit,
		'facility_id' => $facility_id,
		'assessor_1_username' => $assessor_1_username,
		'assessor_1_password' => $assessor_1_password,
		'assessor_2_username' => $assessor_2_username,
		'assessor_2_password' => $assessor_2_password,
		'assessor_3_username' => $assessor_3_username,
		'assessor_3_password' => $assessor_3_password,		
		'message' => $message
	);
echo json_encode($output);
?>