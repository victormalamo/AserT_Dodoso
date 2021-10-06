<?php
require('MsdgApi.php');
$msdg = new Msdgapi();
$datetime = date('Y-m-d H:i:s');
$data  = array('message' => $message,'datetime' => $datetime, 'sender_id'=>'MALIASILI', 'mobile_service_id'=>'545', 'recipients' => $message_id1);
$json_data = json_encode($data);
$msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime));
?>