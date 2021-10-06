<?php  
require_once('../../Connections/connmnrtsafari.php'); 

	 $output = []; 
	 $data = json_decode(file_get_contents("php://input"));
	 $query = "SELECT * FROM lgas WHERE ((country_code = '".$data->country_code."') AND (regID = '".$data->regID."')) ORDER BY lgaNam ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
			
	echo json_encode($output);  

?>  