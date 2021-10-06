<?php
require_once('../../../../Connections/connmnrtsafari.php');
session_start();

$form_data = json_decode(file_get_contents("php://input"));

$kiambata_error = '';
$connection_error = '';

	if($_FILES['kiambata']['error'] > 0){
        $kiambata_error = 'kuna_tatizo';
    }else 
    {
		$kiambata = $_SESSION['assessor_mobile_number']."_certificates_".$_FILES['kiambata']['name'];
		$kiambata_tmp = $_FILES['kiambata']['tmp_name'];
		//$kiambata_size = $_FILES['kiambata']['size'];
		//$new_size = $kiambata_size/1024; 
		//$kiambata_type = $_FILES['kiambata']['type']; 
		$new_kiambata_name = strtolower($kiambata);
		$final_kiambata = preg_replace('/\s+/ ','_', $new_kiambata_name);		
		$folder = "viambatanisho/";    
        if(move_uploaded_file($kiambata_tmp, $folder.$final_kiambata)) {
				$query = "UPDATE afcg_assessors SET kiambata = '$final_kiambata' WHERE username = '".$_SESSION['assessor_mobile_number']."'";
				if (mysqli_query($conntscpME, $query)) {					
					//$ticket_number = $_SESSION['assessor_mobile_number'];
					unset($_SESSION['assessor_mobile_number']);				
				}
				else
				{
				$kiambata_connection_error = 'tatizo_update_file';					
				}
        }
		else
        {
          $kiambata_error = 'kuna_tatizo';
        }
    }



	$output = array(
		'kiambata_connection_error' => $connection_error,
		'kiambata_error'  => $kiambata_error
		//'ticket_number'  => $ticket_number
	);
echo json_encode($output);

?>