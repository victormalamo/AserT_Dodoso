<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
	 $output = []; 
	 $query = "SELECT * FROM user_level ORDER BY id ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }	
	echo json_encode($output); 

?>  