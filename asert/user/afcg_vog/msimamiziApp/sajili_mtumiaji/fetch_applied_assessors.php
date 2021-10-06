<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
//session_start();
$data = array();
//$query = "SELECT * FROM afcg_assessors WHERE assessor_created_by = '' ORDER BY reg_assessor_id ASC";
$query = "SELECT * FROM afcg_assessors WHERE ((assessor_created_by = '') || (assessor_created_by is NULL)) ORDER BY ticket_id ASC";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>