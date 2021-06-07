<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$data = array();
$query = "SELECT * FROM afcg_registered_facilities WHERE username = '".$_SESSION['username']."'";
$result = mysqli_query($conntscpME, $query);
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
   		foreach($result as $row)
		 {
        //$data['trading_name'] = strtoupper($row['trading_name']);
		$data['trading_name'] = $row['trading_name'];
		$data['tin'] = $row['tin'];
		}

}
echo json_encode($data);
?>