<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
	 
	 $output = [];	 
	 $form_data = json_decode(file_get_contents("php://input"));
	 $assessor_group_id = $form_data->assessor_group_id;
	 //1 - Own Assessors
	 //2 - Certified Assessors
	 //3 - All Assessors
	 if($assessor_group_id == 1)
	 {
	 	$query = "SELECT * FROM afcg_assessors WHERE assessor_created_by = '".$_SESSION['username']."' ORDER BY assessor_full_name ASC"; 
	 	$result = mysqli_query($conntscpME, $query);	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			$output[] = $row;  
		 }
	 }
	 elseif($assessor_group_id == 2)
	 {
	 	$query = "SELECT * FROM afcg_assessors WHERE assessor_created_by = 'certified' ORDER BY assessor_full_name ASC"; 
	 	$result = mysqli_query($conntscpME, $query);	 
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	 }
	 elseif($assessor_group_id == 3)
	 {
	 	$query = "SELECT * FROM afcg_assessors WHERE ((assessor_created_by = '".$_SESSION['username']."') || (assessor_created_by = 'certified')) ORDER BY assessor_full_name ASC"; 
	 	$result = mysqli_query($conntscpME, $query);	 
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	 }
	 
			
echo json_encode($output);  

?>  