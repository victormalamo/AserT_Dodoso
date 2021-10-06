<?php
date_default_timezone_set('Africa/Dar_es_Salaam');
$url="http://msdg.ega.go.tz/msdg/public/quick_sms";
$msisdn = "255715115300";
$message = "Majaribio, AserT";
$datetime = date('Y-m-d H:i:s');
$sender_id = "MALIASILI";
$mobile_service_id = "545";
$user_id = "shaaban.saidi@maliasili.go.tz";
$api_key = "5pp5SsfNRCpqvuX48KnGFTh6YpdQ0PAiGhKlqorC";
	$data1 = array(
	'recipients' => $msisdn,
	'message' => $message,
	'datetime' => $datetime,
	'sender_id' => $sender_id,
	'mobile_service_id' => $mobile_service_id
	);
	
$data = json_encode($data1);
$hash = hash_hmac("sha256",$data,$api_key, true);
$base64Value = base64_encode($hash);
//echo $base64Value;

$ch = curl_init($url);
//$payload = $base64Value;  
curl_setopt($ch,CURLOPT_POSTFIELDS,$base64Value);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  //'Content-Type:application/json',
  'X-Auth-Request-Hash:'.$base64Value,
  'X-Auth-Request-Id:'.$user_id,
  'X-Auth-Request-Type:api'
  )
);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$sent_feedback = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $sent_feedback;

//echo "<br><br><br>PHP Script - OK";
?>