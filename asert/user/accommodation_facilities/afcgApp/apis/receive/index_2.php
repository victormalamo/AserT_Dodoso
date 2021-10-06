<!--?php 
 $output = array();
 $form_data = json_decode(file_get_contents("php://input"));
$output['name_r'] = $form_data->name;
$output['age_r'] = $form_data->age;
$output['address_r'] = $form_data->address;		
echo json_encode($output); 
?--> 
<!--?php

$output = array();
$form_data = json_decode(file_get_contents("php://input"));

$data = array(
  'imefika'      => 'IMEFIKA',
  'url'    => 'asert.com'
);

$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data ),
    'header'=>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
    )
);
$url = "send/";
$context  = stream_context_create( $options );
$result = file_get_contents( $url, false, $context );
/*$response = json_decode( $result );
echo $response;
echo "Done!";
*/
?-->
<!--?php
$data = json_decode(file_get_contents('php://input'), true);

// API URL
$url = 'send/fb.php';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'majibu' => 'Imerudi!'
);
$payload = json_encode($data);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
?-->

<?php
//header("Content-Type:application/json");
$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
//$output['status'] = 1;
//$output['delivered'] = "Yes";
//echo json_encode($output);
?>
