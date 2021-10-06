<?php
header("Content-Type:application/json");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);
$output = array('username' => 'success');
//$output['delivered'] = "yes";
echo json_encode($output);
?>
