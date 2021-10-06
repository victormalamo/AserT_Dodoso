<?php
//sms data
//$url="http://localhost/user/accommodation_facilities/afcgApp/apis/receive/";
$url="http://login.smsmtandao.com/smsmtandaoapi/send";
$username = "0715115300"; 
$password = "123456";
$token = "aca814185d380364f4cc0a214c86ee5d";
$sender = "AserT";
//$message = "Username:\n".$username."\nPassword:\n".$password;
$message = "Demo sms - eGA SMS API";
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
$payload = json_encode($data); 
curl_setopt($ch,CURLOPT_POSTFIELDS,$payload );
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type:application/json'));
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true );
$sent_feedback = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $sent_feedback;
?>