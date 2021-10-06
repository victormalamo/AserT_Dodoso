<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
	 $output = []; 
	 $query = "SELECT * FROM posho_za_safari ORDER BY kiwango_cc_mc DESC"; 
	 	 $result = mysqli_query($conntscpME, $query);	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }	
	echo json_encode($output);  
?>  