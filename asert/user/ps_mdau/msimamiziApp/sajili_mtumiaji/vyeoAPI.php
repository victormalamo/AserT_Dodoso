<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = []; 
	 $query = "SELECT * FROM vyeo ORDER BY jina_la_cheo ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
	
	echo json_encode($output);  

?>  