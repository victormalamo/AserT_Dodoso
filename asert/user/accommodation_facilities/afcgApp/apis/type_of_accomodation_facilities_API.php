<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = []; 
	 $data = json_decode(file_get_contents("php://input"));
	 $location_id = $data->location_id;
	 $query = "SELECT * FROM afcg_acc_facilities WHERE ((location_id_1 = '$location_id ') || (location_id_2 = '$location_id ') || (location_id_3 = '$location_id ') || (location_id_4 = '$location_id ') || (location_id_5 = '$location_id ')) ORDER BY id ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
			
	echo json_encode($output);  


?>  