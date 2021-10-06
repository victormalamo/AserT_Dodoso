<?php
//require('MsdgApi_ega_tech.php');
//$msdg = new Msdgapi();
include('../../../../../apis/sms/send/tuma_ujumbe_if_inc.php');
$n1 = '1';
$n2 = '2';
$assessor_1_mobile_number = '0768725203';
$assessor_2_mobile_number = '0715115300';
//$message_ids = array();
//$message_ids[] = '255768725203'.',';
//$message_ids[]  = '255715115300';
//$message_id1 = implode('',$message_ids);
if($n1 == '1'){
$message = "Assessment Service Request.\nPlease login to your AserT account for more info";					
$message_id1 = "255".substr("$assessor_1_mobile_number",1,9);
include('../../../../../apis/sms/send/tuma_ujumbe_if.php');
/*$datetime = date('Y-m-d H:i:s');
$data = array('message' => $message,'datetime' => $datetime, 'sender_id'=>'MALIASILI', 'mobile_service_id'=>'545', 'recipients' => $message_id1);
$json_data = json_encode($data);
$msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime));*/
/*
$message_id1  = '255715115300';
$datetime = date('Y-m-d H:i:s');
$data  = array('message' => 'Testing','datetime'=>$datetime, 'sender_id'=>'MALIASILI','mobile_service_id'=>'545', 'recipients'=>$message_id1);
$json_data = json_encode($data);
$msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime));
$assessor_1_mobile_number = "current";
//var_dump($msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime)));
*/

}

//require('MsdgApi_ega_tech.php');
//$msdg = new Msdgapi();
//$message_ids = array();
//$message_ids[] = '255768725203'.',';
//$message_ids[]  = '255715115300';
//$message_id1 = implode('',$message_ids);
if($n2 == '2'){
$message = "Assessment Service Request.\nPlease login to your AserT account for more info";					
$message_id1 = "255".substr("$assessor_2_mobile_number",1,9);
include('../../../../../apis/sms/send/tuma_ujumbe_if.php');
/*$datetime = date('Y-m-d H:i:s');
$data = array('message' => $message,'datetime' => $datetime, 'sender_id'=>'MALIASILI', 'mobile_service_id'=>'545', 'recipients' => $message_id1);
$json_data = json_encode($data);
$msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime));*/
/*
$message_id1  = '255768725203';
$datetime = date('Y-m-d H:i:s');
$data  = array('message' => 'Testing','datetime'=>$datetime, 'sender_id'=>'MALIASILI','mobile_service_id'=>'545', 'recipients'=>$message_id1);
$json_data = json_encode($data);
$msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime));
$assessor_1_mobile_number = "current";
//var_dump($msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime)));
*/

}
echo 'IMEFIKA';

?>
