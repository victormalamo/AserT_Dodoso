<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
session_start();
$data = array();
$query = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamepokelewa_mapokezi') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND (hod_hou_status = 'yanafanyiwa_kazi_idarani'))";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>