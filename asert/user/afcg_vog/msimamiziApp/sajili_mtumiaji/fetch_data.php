<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
//session_start();
$data = array();
$query = "SELECT * FROM afcg_registered_facilities WHERE general_status = 'sent_for_approval' ORDER BY ticket_id ASC";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>