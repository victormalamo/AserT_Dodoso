<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
	 $output = []; 
	 /* $query = "SELECT * FROM user_level WHERE levelID NOT IN ( SELECT DISTINCT levelID FROM wafanyakazi WHERE ((levelID != 'driver') AND (levelID != 'nu') AND (levelID != 'hos') AND (levelID != 'hod'))  )"; */
	 $query = "SELECT * FROM user_level ORDER BY id ASC";
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }	
	echo json_encode($output); 

?>  