<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$data = [];
$query = "SELECT * FROM afcg_registered_facilities WHERE ((username != '".$_SESSION['username']."') AND (group_admin_username = '".$_SESSION['username']."')) ORDER BY ticket_id DESC";
$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result))
		{
		$data[] = $row;
		}
	}
	else
	{
		$data = [];
	}
echo json_encode($data);
?>