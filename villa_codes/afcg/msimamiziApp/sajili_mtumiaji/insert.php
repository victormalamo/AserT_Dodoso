<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));
//Detect assessor category
$assessor_category = $form_data->assessor_category;
//$assessor_category = 'self_self';
//$assessor_category = 'self_assessor_1';
//$assessor_category = 'self_assessor_2';
//$assessor_category = 'self_assessor_3';
//$assessor_category = 'gov_assessor_1';
//$assessor_category = 'gov_assessor_2';
//$assessor_category = 'gov_assessor_3';
$assessor_score_column = 'assessment_score_'.$assessor_category;


$message = '';
$connection_error = '';

$regID = '';
$mkoa = '';
$lgaID = '';
$halmashauri = '';
$location_id = '';
$location = '';
$acc_facility_id = '';
$type_of_accomodation_facilities = '';
$trading_name = '';
$tin = '';
$facility_name = '';
$physical_address = '';
$postal_address = '';
$simu_mobile = '';
$simu_landline = '';
$barua_pepe = '';
$insert_or_edit = '';


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
		  
		  $output['essential_items_id'] = $row['essential_items_id'];
		  $output['essential_item_score'] = $row['essential_item_score'];
		  
		  $output['assessment_id'] = $row['assessment_id'];
		  if($row["$assessor_score_column"] == ''){  $output['assessment_score'] = 'empty'; }else{  $output['assessment_score'] = $row["$assessor_score_column"]; }		  
		 }
		 if($_SESSION['username'] == $row['username']){ $output['facility_mama'] = 'ndio'; }else{ $output['facility_mama'] = 'hapana'; }
	 }
}
elseif($form_data->action == 'Delete')
{
//Pending: Tazama kama ni facility mama inafutwa,toa tahadhari. Iwapo kuna facilities nyingine toa option ya kumreplace mama and relogin upon completion
	date_default_timezone_set('Africa/Nairobi');	
	$facility_delete_date = date('d-m-Y H:i:s');
	//$fanya_replacement = $form_data->fanya_replacement;
	$is_facility_mama_selected = $form_data->is_facility_mama_selected;
	$kuna_facility_nyingine_zaidi = $form_data->kuna_facility_nyingine_zaidi;
		//if(){}elseif(){}else{}
		if(($is_facility_mama_selected == 'ndio') && ($kuna_facility_nyingine_zaidi == 'ndio')){ $fanya_replacement = 'delete_and_replace_and_logout'; }
		elseif(($is_facility_mama_selected == 'ndio') && ($kuna_facility_nyingine_zaidi == 'hapana')){ $fanya_replacement = 'delete_and_logout'; }
		else{$fanya_replacement = 'no'; }
	$facility_replacing_id = $form_data->facility_replacing_id;	
	$facility_delete_reason_details = $form_data->facility_delete_reason_details;
	$id = $form_data->id; // id ya kufuta
	
	$query_update = "UPDATE afcg_registered_facilities SET facility_delete_reason_details = '$facility_delete_reason_details', facility_delete_date = '$facility_delete_date' WHERE id = '$id'";
	if(mysqli_query($conntscpME, $query_update)) {
		$query_transfer = "INSERT INTO afcg_registered_facilities_deleted SELECT * FROM afcg_registered_facilities WHERE id='$id'";
		if(mysqli_query($conntscpME, $query_transfer)) {
			$query_delete = "DELETE FROM afcg_registered_facilities WHERE id='$id'";
			if(mysqli_query($conntscpME, $query_delete)) {
				$output['message'] = 'Deleted';
				$output['fanya_replacement'] = $fanya_replacement;
					if($fanya_replacement == 'delete_and_replace_and_logout'){
						$query_replace_username_and_password = "UPDATE afcg_registered_facilities SET simu_mobile = '".$_SESSION['MM_Username']."', username = '".$_SESSION['MM_Username']."', password = '".$_SESSION['MM_Password']."' WHERE id = '$facility_replacing_id'";
						if(mysqli_query($conntscpME, $query_replace_username_and_password)) {
							unset($_SESSION['MM_Username']);
							unset($_SESSION['MM_Password']);
							unset($_SESSION['muda_wa_mwisho']);
						}else{
							$output['track_error'] = 'replace_error';
						}
					}elseif($fanya_replacement == 'delete_and_logout'){
							unset($_SESSION['MM_Username']);
							unset($_SESSION['MM_Password']);
							unset($_SESSION['muda_wa_mwisho']);
					}				
			}else
			{
				$output['message'] = 'Not_Deleted';
				$output['track_error'] = 'delete_error';
				//Weka alama delete_error kwenye delete_stage field, Onesha button ya retry, Run delete query again, Ipeleke kwenye deleted_items_menu na status yake
			}			
		}else
		{
			$output['message'] = 'Not_Deleted';
			$output['track_error'] = 'transfer_error';
			//Weka alama transfer_error kwenye delete_stage field, Onesha button ya retry, Run transfer query again, Ipeleke kwenye deleted_items_menu na status yake
		}
	}else
	{
		$output['message'] = 'Not_Deleted';
		$output['track_error'] = 'update_error';
		//Weka alama update_error kwenye delete_stage field, Onesha button ya retry, Run update query again, Ipeleke kwenye deleted_items_menu na status yake					
	}
}
else
{

	$regID = $form_data->regID;
	$mkoa = $form_data->mkoa;
	$lgaID = $form_data->lgaID;
	$halmashauri = $form_data->halmashauri;
	$location_id = $form_data->location_id;
	$location = $form_data->location;
	$acc_facility_id = $form_data->acc_facility_id;
	$type_of_accomodation_facilities = $form_data->type_of_accomodation_facilities;
	$facility_name = $form_data->facility_name;
	$physical_address = $form_data->physical_address;
	$postal_address = $form_data->postal_address;	
	//$simu_mobile = $form_data->simu_mobile;
	$group_admin_username = $form_data->group_admin_username;
	$simu_landline = $form_data->simu_landline;
	$barua_pepe = $form_data->barua_pepe;
	//$password_row = '123456';
	//$active = 'yes';
	//$password = md5($password_row);
	
	
			 ///Insert
			 if($form_data->action == 'insert_new_request')
			 {
				$insert_or_edit = 'insert';
				date_default_timezone_set('Africa/Nairobi');	
				$tarehe_kutoka_kwa_mteja = date('d-m-Y H:i:s');	
				//$simu_mobile = $form_data->simu_mobile;
			 	$password_row = '123456';
				$active = 'yes';
				$password = md5($password_row);
				
				$id_management_option = $form_data->id_management_option;
				if($id_management_option == 'me')
				{
				$simu_mobile = $group_admin_username."_child";
				}
				elseif($id_management_option == 'another_person')
				{
				$simu_mobile = $form_data->simu_mobile;
				}
				
				$trading_name = strtoupper($form_data->trading_name);
				$tin = $form_data->tin;
				
			 	$query_max_id = "SELECT MAX(id) AS id FROM afcg_registered_facilities";
				$result_max_id = mysqli_query($conntscpME, $query_max_id);
				$row_max_id = mysqli_fetch_array($result_max_id);
				if(mysqli_query($conntscpME, $query_max_id)) {
				$max_id = $row_max_id['id'];
				$ticket_id = (1000 + ($max_id + 1));
					$query = "INSERT INTO afcg_registered_facilities (ticket_id, tarehe_kutoka_kwa_mteja, regID, mkoa, lgaID, halmashauri, location_id, location, acc_facility_id, type_of_accomodation_facilities, tin, trading_name, facility_name, physical_address, postal_address, simu_mobile, simu_landline, barua_pepe, general_status, group_admin_username, username, password, active) VALUES ('$ticket_id', '$tarehe_kutoka_kwa_mteja', '$regID', '$mkoa', '$lgaID', '$halmashauri',  '$location_id', '$location', '$acc_facility_id', '$type_of_accomodation_facilities', '$tin', '$trading_name', '$facility_name', '$physical_address', '$postal_address', '$simu_mobile', '$simu_landline', '$barua_pepe', 'mapya', '$group_admin_username', '$simu_mobile', '$password', '$active')";
					if(mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';
					$ticket_number = $ticket_id;
					$username = $simu_mobile;
					$tmp_password = $password_row;
					}else{
					$connection_error = 'tatizo';
					}
				}else{
				$connection_error = 'tatizo';
				}		
				
			  }
			 
			///Save
			if($form_data->action == 'edit_request')
			{
				
				$insert_or_edit = 'edit';
				$id = $form_data->id;
				
				
				$id_management_option = $form_data->id_management_option;
				$update_facility_mama = $form_data->update_facility_mama;
				
				if($id_management_option == 'me')
				{
					if($update_facility_mama == 'hapana')
					{
					$simu_mobile = $group_admin_username."_child";
					}
					elseif($update_facility_mama == 'ndio')
					{
					$simu_mobile = $group_admin_username;
					}
				}
				elseif($id_management_option == 'another_person')
				{
				$simu_mobile = $form_data->simu_mobile;
				}
				
				if($update_facility_mama == 'hapana')
				{
					$query = "UPDATE afcg_registered_facilities SET regID = '$regID', mkoa = '$mkoa', lgaID = '$lgaID', halmashauri = '$halmashauri', location_id = '$location_id', location = '$location', acc_facility_id = '$acc_facility_id', type_of_accomodation_facilities = '$type_of_accomodation_facilities', facility_name = '$facility_name', physical_address = '$physical_address', postal_address = '$postal_address', simu_mobile = '$simu_mobile', simu_landline = '$simu_landline', barua_pepe = '$barua_pepe', general_status = 'sent_for_approval', username = '$simu_mobile' WHERE (id = '".$id."')";
					if (mysqli_query($conntscpME, $query)) {
						$message = 'imefanikiwa';										
					} else {
					$connection_error = 'tatizo';					
					}
				}elseif($update_facility_mama == 'ndio')
				{
					$trading_name = $form_data->trading_name;
					$tin = $form_data->tin;
					$query = "UPDATE afcg_registered_facilities SET regID = '$regID', mkoa = '$mkoa', lgaID = '$lgaID', halmashauri = '$halmashauri', location_id = '$location_id', location = '$location', acc_facility_id = '$acc_facility_id', type_of_accomodation_facilities = '$type_of_accomodation_facilities', facility_name = '$facility_name', physical_address = '$physical_address', postal_address = '$postal_address', simu_mobile = '$simu_mobile', simu_landline = '$simu_landline', barua_pepe = '$barua_pepe', general_status = 'sent_for_approval', username = '$simu_mobile' WHERE (id = '".$id."')";
					if(mysqli_query($conntscpME, $query)){
						//update trade name na tin kwa wote
						$query_update_trade_name_tin = "UPDATE afcg_registered_facilities SET trading_name = '$trading_name', tin = '$tin' WHERE (group_admin_username = '".$group_admin_username."')";
						if (mysqli_query($conntscpME, $query_update_trade_name_tin)) {
						$message = 'imefanikiwa';
						}else{
						$connection_error = 'tatizo';
						}																
					}else{
					$connection_error = 'tatizo';					
					}				
				}
											
			}
			
	$output = array(
		//'kiambata_error' => $kiambata_error,
		'connection_error' => $connection_error,
		//'message' => $message,
		//'fanya_replacement_mrejesho' => $fanya_replacement_mrejesho,
		//'fanya_replacement_check' => $fanya_replacement_check,
		//'track_error' => $track_error,
		'insert_or_edit' => $insert_or_edit,
		'ticket_number'  => $ticket_number,
		'username'  => $username,
		'tmp_password'  => $tmp_password,
		'id_management_option' => $id_management_option
	);
	
}

echo json_encode($output);


?>