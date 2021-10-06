<?php
$url="http://login.smsmtandao.com/smsmtandaoapi/send";
$push = "";
$token = "aca814185d380364f4cc0a214c86ee5d";
$sender = "AserT";
//$message = $string;
//$message_id1 = $mobile_number;
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
$sent_sms_responce = curl_exec($ch);
if (curl_errno($ch)) {
echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>