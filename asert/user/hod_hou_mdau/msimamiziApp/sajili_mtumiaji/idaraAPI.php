<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

	 $output = []; 
	 $query = "SELECT * FROM divisions_units ORDER BY div_au_unit ASC, div_unit_kirefu ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
	
	echo json_encode($output);  

?>  