<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = [];
	 $country_code = 255;
	 $data = json_decode(file_get_contents("php://input"));
	 $query = "SELECT * FROM regions WHERE country_code = '".$country_code."' ORDER BY regNam ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
			
	  echo json_encode($output);  

?>  