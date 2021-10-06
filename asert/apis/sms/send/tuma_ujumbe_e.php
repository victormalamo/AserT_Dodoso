<!--?php
require('MsdgApi.php');
$msdg = new Msdgapi();
$datetime = date('Y-m-d H:i:s');
$data  = array('message' => $message,'datetime'=>$datetime, 'sender_id'=>'MALIASILI', 	
	'mobile_service_id'=>'545', 'recipients'=>$message_id1);
$json_data = json_encode($data);
var_dump($msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime)));
?-->

<?php

$url="http://login.smsmtandao.com/smsmtandaoapi/send";
$push = "";
$token = "aca814185d380364f4cc0a214c86ee5d";
$sender = "AserT";
//$message = "Asert SMS";
//$message_id1 = "255715115300";
//$message_id2 = "255768725203";
$data = array(
'token' => $token,
'sender' => $sender,
'message' => $message,
'push' => $push,	
'recipient' => array('message_id1' => $message_id1,'message_id2' => $message_id2)
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

//echo $sent_sms_responce;




/***
//$username_hide_some_chars = substr("$username",0,4).'****'.substr("$username",8,2);
$username_hide_some_chars = "9899";
$page_data = array(
'username_hide_some_chars'  => $username_hide_some_chars
);
$responce_from_smsapi = json_decode($sent_sms_responce,true);
$this_page_data = json_decode(json_encode($page_data),true);
$merged_responce_from_apis_this_page_data = (array_merge($responce_from_smsapi,$this_page_data));
echo json_encode($merged_responce_from_apis_this_page_data)
***/

?>