<?php
require_once('/connections/connmnrtsafari.php'); 
$data = array();
$query = "SELECT wafanyakazi.*, wafanyakazi.id AS mfanyakazi_id, divisions_units.*, sections.*, vyeo.* FROM wafanyakazi, divisions_units, sections, vyeo WHERE ((wafanyakazi.levelID != 'msimamizi') AND (wafanyakazi.div_unit_ID = divisions_units.div_unit_ID) AND (wafanyakazi.section_ID = sections.section_ID)  AND (wafanyakazi.cheo_ID = vyeo.cheo_ID)) ORDER BY f_name ASC";
$result = mysqli_query($conntscpME, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>