<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
	$form_data = json_decode(file_get_contents("php://input"));
	$output = array();
	$ticket_id = $form_data->ticket_id;
	$query_dawati = "SELECT * FROM dawati_la_wateja WHERE ticket_id = '$ticket_id'"; 
	$result_dawati = mysqli_query($conntscpME, $query_dawati);
	if (mysqli_num_rows($result_dawati) > 0) {
		foreach($result_dawati as $row)
		 {
			 /*if(($row['ps_status'] == 'vetted') || (($row['majibu_title'] == '') && ($row['majibu_maelezo'] == ''))){*/
			 if($row['ps_status'] == 'vetted'){
				$query = "SELECT * FROM wafanyakazi WHERE (((levelID != 'hod') AND (levelID != 'ps') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."'))  || (levelID = 'z_msimamizi_mdau')) ORDER BY levelID ASC"; 
				$result = mysqli_query($conntscpME, $query);
				while($row = mysqli_fetch_array($result))  
				{  
					//$output[] = $row; 
				}		  
			  }else{
				$query = "SELECT * FROM wafanyakazi WHERE (((levelID != 'hod') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."')) || (levelID = 'ps')) ORDER BY levelID ASC"; 
				$result = mysqli_query($conntscpME, $query);
				while($row = mysqli_fetch_array($result))  
				{  
					//$output[] = $row; 
					$output['name'] = $row['f_name']; 
					$output['levelID'] = $row['levelID']; 
				}
			  }		 
		  }
	}
	 
	//$output = array(	
		//'kiambata_error' => $kiambata_error
	//);
	 
	 /*$query = "SELECT * FROM send_to_options_idarani ORDER BY id ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			   $output[] = $row; 
		 }*/
	
	echo json_encode($output);  

?>  