<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$data = array();
/*
$query = "SELECT * FROM afcg_registered_facilities WHERE (((username = '".$_SESSION['username']."') || ((group_admin_username = '".$_SESSION['username']."') AND (username != '".$_SESSION['username']."'))) AND (general_status = 'approved')) ORDER BY ticket_id DESC";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
*/
$query = "SELECT afcg_registered_facilities.*, afcg_assessors_vs_facilities.* FROM afcg_registered_facilities, afcg_assessors_vs_facilities WHERE ((afcg_registered_facilities.id = afcg_assessors_vs_facilities.facility_id) AND (afcg_assessors_vs_facilities.assessor_username = '".$_SESSION['username']."') AND (afcg_registered_facilities.general_status = 'approved')) ORDER BY ticket_id DESC";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>