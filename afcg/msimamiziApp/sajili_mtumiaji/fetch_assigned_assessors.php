<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

session_start();
$output= array();
$query = "SELECT afcg_assessors_vs_facilities.* FROM afcg_assessors_vs_facilities WHERE afcg_assessors_vs_facilities.facility_id in ( SELECT afcg_registered_facilities.id FROM afcg_registered_facilities WHERE (group_admin_username = '".$_SESSION['username']."')  )";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
}
echo json_encode($output);

/*
	 $output = [];
	 
	 $query = "SELECT * FROM afcg_assessors_vs_facilities"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			$output[] = $row;  
		 }
			
	  echo json_encode($output);  
*/
?>