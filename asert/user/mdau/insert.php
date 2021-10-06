<?php
require_once('../../Connections/connmnrtsafari.php'); 
session_start();
$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$connection_error = '';
$validation_error = '';
$majina_kamili = '';
$jinsia = '';
$barua_pepe = '';
$simu = '';
$nchi = '';
$mkoa = '';
$halmashauri = '';
$taasisi = '';
$kichwa_cha_maelezo = '';
$maelezo = '';
$kiambata_c = '';
$output = array();

date_default_timezone_set('Africa/Nairobi');	
$tarehe_kutoka_kwa_mteja = date('d-m-Y H:i:s');

if($form_data->kuna_file == 'ndio') {

//Ingiza data

	if(empty($form_data->majina_kamili)){ $error[] = 'Jina..'; }else{ $majina_kamili = $form_data->majina_kamili; }	
	if(empty($form_data->jinsia)){ $error[] = 'Jinsia..'; }else{ $jinsia = $form_data->jinsia; }
	
	$barua_pepe = $form_data->barua_pepe;
	$simu = $form_data->simu;
	$nchi = $form_data->nchi;
	$mkoa = $form_data->mkoa;
	$halmashauri = $form_data->halmashauri;
	$taasisi = $form_data->taasisi;
	$kichwa_cha_maelezo = $form_data->kichwa_cha_maelezo;
	$maelezo = $form_data->maelezo;		
	
	if(empty($error))
	{
			 ///Insert
			 if($form_data->action == 'insert_new_request')
			 {	
				$query_max_id = "SELECT MAX(id) AS id FROM dawati_la_wateja";
				$result_max_id = mysqli_query($conntscpME, $query_max_id);
				$row_max_id = mysqli_fetch_array($result_max_id);
				if(mysqli_query($conntscpME, $query_max_id)) {
				$max_id = $row_max_id['id'];
				$ticket_id = (1000000 + ($max_id + 1));						  
					$query = "INSERT INTO dawati_la_wateja (ticket_id, majina_kamili, jinsia, barua_pepe, simu, nchi, mkoa, halmashauri, taasisi, kichwa_cha_maelezo, maelezo, tarehe_kutoka_kwa_mteja, general_status) VALUES ('$ticket_id', '$majina_kamili', '$jinsia', '$barua_pepe', '$simu', '$nchi', '$mkoa', '$halmashauri', '$taasisi', '$kichwa_cha_maelezo', '$maelezo', '$tarehe_kutoka_kwa_mteja', 'mapya')";
					if(mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';
					$_SESSION['ticket_id'] = $ticket_id;
					}else{
					unset($_SESSION['ticket_id']);
					$connection_error = 'tatizo';
					}					
				}else{
				$connection_error = 'tatizo';
				}
				
			  }
			  
			///Edit
			if($form_data->action == 'edit_request')
			{
				$ticket_id = $form_data->ticket_id;
				$query = "UPDATE dawati_la_wateja SET f_name = '$f_name', majina_kamili = '$majina_kamili', jinsia = '$jinsia' , barua_pepe = '$barua_pepe', simu = '$simu', nchi = '$nchi', mkoa = '$mkoa', halmashauri = '$halmashauri', taasisi = '$taasisi', kichwa_cha_maelezo = '$kichwa_cha_maelezo', maelezo = '$maelezo' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';					
				} else {
				$connection_error = 'tatizo';					
				}								
			}
			  
			
	}
	 else
	{
		  $validation_error = implode(", ", $error);		 
	}


	$output = array(
		//'kiambata_error' => $kiambata_error,
		'error'  => $validation_error,
		'connection_error' => $connection_error,
		'message' => $message
	);


echo json_encode($output);

}else{ 

// DATA PEKEE

	if(empty($form_data->majina_kamili)){ $error[] = 'Jina..'; }else{ $majina_kamili = $form_data->majina_kamili; }	
	if(empty($form_data->jinsia)){ $error[] = 'Jinsia..'; }else{ $jinsia = $form_data->jinsia; }
	
	$barua_pepe = $form_data->barua_pepe;
	$simu = $form_data->simu;
	$nchi = $form_data->nchi;
	$mkoa = $form_data->mkoa;
	$halmashauri = $form_data->halmashauri;
	$taasisi = $form_data->taasisi;
	$kichwa_cha_maelezo = $form_data->kichwa_cha_maelezo;
	$maelezo = $form_data->maelezo;	
	
	if(empty($error))
	{
			 ///Insert
			 if($form_data->action == 'insert_new_request')
			 {
			 	$query_max_id = "SELECT MAX(id) AS id FROM dawati_la_wateja";
				$result_max_id = mysqli_query($conntscpME, $query_max_id);
				$row_max_id = mysqli_fetch_array($result_max_id);
				if(mysqli_query($conntscpME, $query_max_id)) {
				$max_id = $row_max_id['id'];
				$ticket_id = (1000000 + ($max_id + 1));
					$query = "INSERT INTO dawati_la_wateja (ticket_id, majina_kamili, jinsia, barua_pepe, simu, nchi, mkoa, halmashauri, taasisi, kichwa_cha_maelezo, maelezo, kiambata, tarehe_kutoka_kwa_mteja, general_status) VALUES ('$ticket_id', '$majina_kamili', '$jinsia', '$barua_pepe', '$simu', '$nchi', '$mkoa', '$halmashauri', '$taasisi', '$kichwa_cha_maelezo', '$maelezo', '$kiambata', '$tarehe_kutoka_kwa_mteja', 'mapya')";
					if(mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';
					$ticket_number = $ticket_id;
					}else{
					$connection_error = 'tatizo';
					}
				}else{
				$connection_error = 'tatizo';
				}		
				
			  }
			  
			///Edit
			if($form_data->action == 'edit_request')
			{
				$ticket_id = $form_data->ticket_id;
				$query = "UPDATE dawati_la_wateja SET f_name = '$f_name', majina_kamili = '$majina_kamili', jinsia = '$jinsia' , barua_pepe = '$barua_pepe', simu = '$simu', nchi = '$nchi', mkoa = '$mkoa', halmashauri = '$halmashauri', taasisi = '$taasisi', kichwa_cha_maelezo = '$kichwa_cha_maelezo', maelezo = '$maelezo' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';					
				} else {
				$connection_error = 'tatizo';					
				}								
			}
			  
			
	}
	 else
	{
		  $validation_error = implode(", ", $error);		 
	}


	$output = array(
		//'kiambata_error' => $kiambata_error,
		'error'  => $validation_error,
		'connection_error' => $connection_error,
		'message' => $message,
		'ticket_number'  => $ticket_number
	);

echo json_encode($output);

}

//////////////////////////////////////////
/*	
	if(empty($form_data->majina_kamili)){ $error[] = 'Jina..'; }else{ $majina_kamili = $form_data->majina_kamili; }	
	if(empty($form_data->jinsia)){ $error[] = 'Jinsia..'; }else{ $jinsia = $form_data->jinsia; }
	
	$barua_pepe = $form_data->barua_pepe;
	$simu = $form_data->simu;
	$nchi = $form_data->nchi;
	$mkoa = $form_data->mkoa;
	$halmashauri = $form_data->halmashauri;
	$taasisi = $form_data->taasisi;
	$kichwa_cha_maelezo = $form_data->kichwa_cha_maelezo;
	$maelezo = $form_data->maelezo;	
	$tarehe_kutoka_kwa_mteja = date('d-m-Y');	
	
	if(empty($error))
	{
			 ///Insert
			 if($form_data->action == 'insert_new_request')
			 {					  
				$query = "INSERT INTO dawati_la_wateja (majina_kamili, jinsia, barua_pepe, simu, nchi, mkoa, halmashauri, taasisi, kichwa_cha_maelezo, maelezo, tarehe_kutoka_kwa_mteja, final_kiambata) VALUES ('$majina_kamili', '$jinsia', '$barua_pepe', '$simu', '$nchi', '$mkoa', '$halmashauri', '$taasisi', '$kichwa_cha_maelezo', '$maelezo', '$tarehe_kutoka_kwa_mteja', '$final_kiambata')";
				//$query = "INSERT INTO dawati_la_wateja (majina_kamili, jinsia, barua_pepe, simu, nchi,) VALUES ('$majina_kamili', '$jinsia', '$barua_pepe', '$simu', '$simu', '$nchi, '$mkoa', '$halmashauri')";
				if(mysqli_query($conntscpME, $query)) {
				$message = 'imefanikiwa';
				}else{
				$connection_error = 'tatizo';
				}
			  }
			  
			///Edit
			if($form_data->action == 'edit_request')
			{
				$ticket_id = $form_data->ticket_id;
				$query = "UPDATE dawati_la_wateja SET f_name = '$f_name', majina_kamili = '$majina_kamili', jinsia = '$jinsia' , barua_pepe = '$barua_pepe', simu = '$simu', nchi = '$nchi', mkoa = '$mkoa', halmashauri = '$halmashauri', taasisi = '$taasisi', kichwa_cha_maelezo = '$kichwa_cha_maelezo', maelezo = '$maelezo' WHERE ticket_id = '$ticket_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';					
				} else {
				$connection_error = 'tatizo';					
				}								
			}
			  
			
	}
	 else
	{
		  $validation_error = implode(", ", $error);		 
	}
	
	$output = array(
		'kiambata_error' => $kiambata_error,
		'error'  => $validation_error,
		'connection_error' => $connection_error,
		'message' => $message
	);


echo json_encode($output);
*/

?>