<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = array(); 
	 $form_data = json_decode(file_get_contents("php://input"));
	 $assessor_username_for_checkup = $form_data->assessor_username_for_checkup;
	 $query = "SELECT * FROM afcg_assessors WHERE (username = '".$assessor_username_for_checkup."')"; 
	 $result = mysqli_query($conntscpME, $query);
	 $row = mysqli_fetch_array($result);
	 if (mysqli_num_rows($result) > 0)	 
		{
			//while ($row = mysqli_fetch_array($result))
			//{
			//$output[] = $row;
			//}
			$output['id'] = $row['id'];
			$output['assessor_username_ipo'] = 'ndio';			
		}
		else
		{
			$output['assessor_username_ipo'] = 'hapana';
		}
		
echo json_encode($output); 
?>  

