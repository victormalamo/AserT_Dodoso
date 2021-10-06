<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();

$form_data = json_decode(file_get_contents("php://input"));

/*$kiambata = rand(1,10)."_".$_FILES['kiambata']['name'];
		$kiambata_tmp = $_FILES['kiambata']['tmp_name'];
		//$kiambata_size = $_FILES['kiambata']['size'];
		//$new_size = $kiambata_size/1024; 
		//$kiambata_type = $_FILES['kiambata']['type']; 
		$new_kiambata_name = strtolower($kiambata);
		$final_kiambata = preg_replace('/\s+/ ','_', $new_kiambata_name);		
		$folder = "viambatanisho/";    
        move_uploaded_file($kiambata_tmp, $folder.$final_kiambata);

*/
$kiambata_error = '';
$connection_error = '';

	if($_FILES['kiambata']['error'] > 0){
        $kiambata_error = 'kuna_tatizo';
    }else 
    {
		$majibu_kiambata = $_SESSION['ticket_id']."_majibu_".$_FILES['kiambata']['name'];
		$majibu_kiambata_tmp = $_FILES['kiambata']['tmp_name'];
		//$kiambata_size = $_FILES['kiambata']['size'];
		//$new_size = $kiambata_size/1024; 
		//$kiambata_type = $_FILES['kiambata']['type']; 
		$new_majibu_kiambata_name = strtolower($majibu_kiambata);
		$final_majibu_kiambata = preg_replace('/\s+/ ','_', $new_majibu_kiambata_name);		
		$folder = "../../../mdau/viambatanisho/";    
        if(move_uploaded_file($majibu_kiambata_tmp, $folder.$final_majibu_kiambata)) {
				$query = "UPDATE dawati_la_wateja SET majibu_kiambata = '$final_majibu_kiambata' WHERE ticket_id = '".$_SESSION['ticket_id']."'";
				if (mysqli_query($conntscpME, $query)) {					
					$ticket_id = $_SESSION['ticket_id'];
					unset($_SESSION['ticket_id']);				
				} else {
				$connection_error = 'tatizo_update_file';					
				}		
          //$kiambata_error = 'hakuna_tatizo';
        }else
        {
          $kiambata_error = 'kuna_tatizo';
        }
    }



	$output = array(
		'connection_error' => $connection_error,
		'kiambata_error'  => $kiambata_error,
		'ticket_id'  => $ticket_id
	);
echo json_encode($output);

?>