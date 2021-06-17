<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = array(); 
	 $form_data = json_decode(file_get_contents("php://input"));
	 $username_for_checkup = strtoupper($form_data->username_for_checkup);
	 $query = "SELECT * FROM afcg_registered_facilities WHERE (username = '".$username_for_checkup."')"; 
	 $result = mysqli_query($conntscpME, $query);
	 $row = mysqli_fetch_array($result);
	 if (mysqli_num_rows($result) > 0)	 
		{
			//while ($row = mysqli_fetch_array($result))
			//{
			//$output[] = $row;
			//}
			$output['id'] = $row['id'];
			$output['username_ipo'] = 'ndio';			
		}
		else
		{
			$output['username_ipo'] = 'hapana';
		}
		
echo json_encode($output); 
?>  