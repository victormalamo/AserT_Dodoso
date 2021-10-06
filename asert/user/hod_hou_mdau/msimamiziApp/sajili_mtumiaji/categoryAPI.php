<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = []; 
	 $query = "SELECT * FROM request_categories ORDER BY category ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
	
	echo json_encode($output);  

?>  