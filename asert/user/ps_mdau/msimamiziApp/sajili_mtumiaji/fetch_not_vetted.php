<?php
require_once('../../../../Connections/connmnrtsafari.php'); 
$data = array();
$query = "SELECT * FROM dawati_la_wateja WHERE (ps_status = 'not_vetted')";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>