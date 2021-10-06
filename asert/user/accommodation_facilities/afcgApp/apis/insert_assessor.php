<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));


//$message = '';
$connection_error = '';

$regID = '';
$mkoa = '';
$lgaID = '';
$halmashauri = '';
$assessor_full_name = '';
$assessor_profession = '';
$assessor_mobile_number = '';
$assessor_barua_pepe = '';					
$assessor_qualification_id = '';
$assessor_qualification_name = '';					
$qualification_others = '';
$action = '';

$page_data = array();
$merged_responce_from_smsapi_page_data = array();

	date_default_timezone_set('Africa/Nairobi');	
	$tarehe_kutoka_kwa_mteja = date('d-m-Y H:i:s');	
	$regID = $form_data->regID;
	$mkoa = $form_data->mkoa;
	$lgaID = $form_data->lgaID;
	$halmashauri = $form_data->halmashauri;
	$assessor_full_name = $form_data->assessor_full_name;
	$assessor_profession = $form_data->assessor_profession;
	$assessor_mobile_number = $form_data->assessor_mobile_number;
	$assessor_barua_pepe = $form_data->assessor_barua_pepe;
	$assessor_qualification_id = $form_data->assessor_qualification_id;
	$assessor_qualification_name = $form_data->assessor_qualification_name;					
	$qualification_others = $form_data->qualification_others;
	//$trading_name = strtoupper($form_data->trading_name);
	
	//$password_row = '123456';
	$password_row = substr(md5(time()),0,6);
	$active = 'yes';
	$password = md5($password_row);	
	
			 ///Insert			 
			 if($form_data->action == 'register_assessor')
			 {
			 
			 	$query_max_id = "SELECT MAX(reg_assessor_id) AS reg_assessor_id FROM afcg_assessors";
				$result_max_id = mysqli_query($conntscpME, $query_max_id);
				$row_max_id = mysqli_fetch_array($result_max_id);
				if(mysqli_query($conntscpME, $query_max_id)) {
				$max_id = $row_max_id['reg_assessor_id'];
				$ticket_id = (10000 + ($max_id + 1));
					$query = "INSERT INTO afcg_assessors (ticket_id, tarehe_kutoka_kwa_mteja, assessor_regID, assessor_mkoa, assessor_lgaID, assessor_halmashauri, assessor_full_name, assessor_profession, assessor_simu_mobile, assessor_barua_pepe, assessor_qualification_id, assessor_qualification_name, qualification_others, username, password, active) VALUES ('$ticket_id', '$tarehe_kutoka_kwa_mteja', '$regID', '$mkoa', '$lgaID', '$halmashauri', '$assessor_full_name', '$assessor_profession', '$assessor_mobile_number', '$assessor_barua_pepe', '$assessor_qualification_id', '$assessor_qualification_name', '$qualification_others', '$assessor_mobile_number', '$password', '$active')";
					if(mysqli_query($conntscpME, $query)) {
					//$message = 'imefanikiwa';
					$ticket_number = $ticket_id;
					$_SESSION['ticket_id'] = $ticket_id;
					$_SESSION['assessor_mobile_number'] = $assessor_mobile_number;
					$username = $assessor_mobile_number;
					$simu_mobile_unformatted = $assessor_mobile_number;
					$simu_mobile_formatted = "255".substr("$simu_mobile_unformatted",1,9);
					$tmp_password = $password_row;					
					//SEND SMS
					$message = "Username: ".$username."\nPassword: ".$tmp_password."\nTicket: ".$ticket_number;					
					$message_id1 = $simu_mobile_formatted;
					require_once('../../../../apis/sms/send/tuma_ujumbe.php');
					$username_hide_some_chars = substr("$username",0,4).'****'.substr("$username",8,2);					
					}else{
					$connection_error = 'tatizo';
					unset($_SESSION['ticket_id']);
					unset($_SESSION['assessor_mobile_number']);
					}
				}else{
				$connection_error = 'tatizo';
				}		
				
			  }
			  
			///Edit
			
			if($form_data->action == 'edit_request')
			{
				$ticket_id = $form_data->ticket_id;
				$query = "UPDATE afcg_registered_facilities SET tarehe_kutoka_kwa_mteja = '$tarehe_kutoka_kwa_mteja', regID = '$regID', mkoa = '$mkoa', lgaID = '$lgaID', acc_facility_id = '$acc_facility_id', halmashauri = '$halmashauri', location_id = '$location_id', type_of_accomodation_facilities = '$type_of_accomodation_facilities' , facility_name = '$facility_name', physical_address = '$physical_address', postal_address = '$postal_address', simu_mobile = '$simu_mobile', simu_landline = '$simu_landline', barua_pepe = '$barua_pepe', username = '$simu_mobile', password = '$password' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					//$message = 'imefanikiwa';
					$ticket_number = $ticket_id;
					$username = $simu_mobile;
					$tmp_password = $password_row;					
				} else {
				$connection_error = 'tatizo';					
				}								
			}
			
			
$page_data = array(
	//'kiambata_error' => $kiambata_error,
	//'error'  => $validation_error,
	'connection_error' => $connection_error,
	//'message' => $message,
	//'ticket_number'  => $ticket_number,
	'username_hide_some_chars'  => $username_hide_some_chars
	//'tmp_password'  => $tmp_password
);
/**MERGE JSONs FROM APIs**/
///$responce_from_smsapi = json_decode($sent_sms_responce,true);
///$this_page_data = json_decode(json_encode($page_data),true);
///$merged_responce_from_apis_this_page_data = (array_merge($responce_from_smsapi,$this_page_data));
///echo json_encode($merged_responce_from_apis_this_page_data);
echo json_encode($page_data);
?>