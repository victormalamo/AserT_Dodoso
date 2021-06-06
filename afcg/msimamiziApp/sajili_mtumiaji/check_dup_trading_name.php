<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = array(); 
	 $form_data = json_decode(file_get_contents("php://input"));
	 $trading_name_for_checkup = strtoupper($form_data->trading_name_for_checkup);
	 $query = "SELECT * FROM afcg_registered_facilities WHERE (trading_name = '".$trading_name_for_checkup."')"; 
	 $result = mysqli_query($conntscpME, $query);
	 $row = mysqli_fetch_array($result);
	 if (mysqli_num_rows($result) > 0)	 
		{
			$output['trading_name'] = $row['trading_name'];
			$output['trading_name_ipo'] = 'ndio';			
		}
		else
		{
			$output['trading_name_ipo'] = 'hapana';
		}
		
echo json_encode($output); 
?>  