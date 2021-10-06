<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
	 $output = []; 
	 $data = json_decode(file_get_contents("php://input")); 
	 $ngazi_ya_mshahara = $data->ngazi_ya_mshahara;
	 $daraja_la_mshahara = $data->daraja_la_mshahara;
	 
	 if(empty($ngazi_ya_mshahara))
		{
			 $query = "SELECT * FROM posho_za_safari ORDER BY id ASC"; 
			 $result = mysqli_query($conntscpME, $query);	 
			 while($row = mysqli_fetch_array($result))  
			 {  
				  $output[] = $row;  
			 }
		}
		else
		{
			 $query = "SELECT * FROM posho_za_safari WHERE ((ngazi_ya_mshahara = '$ngazi_ya_mshahara') AND (daraja_la_mshahara = '$daraja_la_mshahara'))"; 
			 $result = mysqli_query($conntscpME, $query);	 
			 while($row = mysqli_fetch_array($result))  
			 {  
				  $output[] = $row; 
			 }
		}
	
echo json_encode($output);  
?>  