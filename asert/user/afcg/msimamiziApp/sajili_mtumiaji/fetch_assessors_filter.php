<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = [];
	 
	 $data = json_decode(file_get_contents("php://input"));
	 $query = "SELECT * FROM afcg_assessors_filter ORDER BY assessor_group_id ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			$output[] = $row;  
		 }
			
	  echo json_encode($output);  

?>  