<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = array(); 
	 $form_data = json_decode(file_get_contents("php://input"));
	 $tin_for_checkup = strtoupper($form_data->tin_for_checkup);
	 $query = "SELECT * FROM afcg_registered_facilities WHERE (tin = '".$tin_for_checkup."')"; 
	 $result = mysqli_query($conntscpME, $query);
	 $row = mysqli_fetch_array($result);
	 if (mysqli_num_rows($result) > 0)	 
		{
			$output['tin'] = $row['tin'];
			$output['tin_ipo'] = 'ndio';			
		}
		else
		{
			$output['tin_ipo'] = 'hapana';
		}
		
echo json_encode($output); 
?>  