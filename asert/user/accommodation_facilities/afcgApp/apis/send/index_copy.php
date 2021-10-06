<!--?php 
 $output = array();
 $id = 8;
 $username = "0715115300"; 
		$output['id'] = $id;
		$output['username'] = $username;
		$output['password'] = 12345;
		$output['mobile'] = array('n1' => 255121121, 'n2' => 255133233);		
echo json_encode($output); 
?--> 

<?php


//API URL
$url="http://localhost/user/accommodation_facilities/afcgApp/apis/receive/";
$url="http://login.smsmtandao.com/smsmtandaoapi/send";
//$url="https://api.rezdy.com/v1/products?limit=2&offset=0";
$username = "0715115300"; 
$password = "123456";
$token = "XXXXXXXXXXXXXXXXXXXXXXX";
$sender = "AserT";
$message = "Username: ".$username." Password:".$password;
$push = "http://localhost/user/accommodation_facilities/afcgApp/apis/send/delivery_report/";
$message_id1 = 255715115300;
	$data = array(
	'token' => $token,
	'sender' => $sender,
	'message' => $message,
	'push' => $push,	
	'recipient' => array('message_id1' => $message_id1)
	);

$ch = curl_init($url);
# Setup request to send json via POST.
$payload = json_encode($data); 
curl_setopt($ch,CURLOPT_POSTFIELDS,$payload );
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-Type:application/json'));
	//$headers = array();
	//$headers[] = "Accept: application/json";
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	//curl_setopt($ch, CURLOPT_HEADER, 0);
# Return response instead of printing.
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true );
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
# Send request.
$sent_feedback = curl_exec($ch);
//echo curl_getinfo();

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
else
{ 
echo "No Error"; 
}
echo "<br>";
curl_close($ch);


echo $sent_feedback;

//DEMO
//$page_dataTTTT = json_encode($data);
/*
$data1 = array(
	'name' => 'Rosalia',
	'age' => 82
);
$data2 = array(
	'religion' => 'Christian'
);

//$sent_feedbackTTTT = json_encode($data1);
$page_data = json_encode($data);
echo $sent_feedback;
echo "<br>";
echo $page_data;
echo "<br>";
$a = json_decode($sent_feedback,true);
$b = json_decode($page_data,true);
$ab = (array_merge($a,$b));
echo "Responce: ".$a;
echo "<br>";
echo "From Page: ".$b;
echo "<br>";
echo "Merged: ".json_encode($ab);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
*/

/*
$json1 = '{
	"id": "#001",
    "username": "Tom",
    "type": "admin",
    "status": "active"   
}';
$json2 =  '{
    "id": "#002",
    "username": "Jerry",
    "type": "user",
    "status": "Inactive"
}';
*/
/*
$json1 = $page_data;
//$json2 = preg_replace("!\r?\n!", "", $sent_feedback);
$json2 =  $sent_feedback;
$user[] = json_decode($json1);
$user[] = $json2;
$json_merge = json_encode($user);
echo $json_merge;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
*/
//WORKING
/*
$data1 = array(
	'ticket_number' => 'Rosalia',
	'age' => 82
);
$data2 = array(
	'username' => 'Christian'
);
echo json_encode($data1);
echo "<br>";
echo json_encode($data2);
echo "<br>";
$d1 = json_encode($data1);
$d2 = json_encode($data2);
$aa = json_decode($d1,true);
$bb = json_decode($d2,true);
$aabb = (array_merge($aa,$bb));
echo json_encode($aabb);
echo "<br>";
echo $aa;
echo "<br>";
echo $bb;
*/
/*********************************
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.rezdy.com/v1/products?limit=2&offset=0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$headers = array();
$headers[] = "Accept: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
**********************************/


/*************************************************/
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/user/accommodation_facilities/afcgApp/apis/receive/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$headers = array();
$headers[] = "Accept: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result[] = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
else
{ 
echo $result; 
echo json_encode($result);
}
curl_close ($ch);
*/
/***************************************************************/

?>