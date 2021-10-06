<?php
/**
require('MsdgApi_ega_tech.php');
$msdg = new Msdgapi();
$n1 = '255768725203';
$n2 = '255715115300';
$datetime = date('Y-m-d H:i:s');
//$data  = array('message' => 'Asert - eGA','datetime'=>$datetime, 'sender_id'=>'MALIASILI','mobile_service_id'=>'545', 'recipients'=>''.$n1.','.$n2.'');
$data  = array('message' => 'Asert - eGA','datetime'=>$datetime, 'sender_id'=>'MALIASILI','mobile_service_id'=>'545', 'recipients' => array('message_id1' => $n1,'message_id2' => $n2) );
$json_data = json_encode($data);
var_dump($msdg->sendQuickSms(array('data'=>$json_data,'datetime'=>$datetime)));
**/
$n1 = '255768725203';
$n2 = '255715115300';
$n = $n1.','.$n2;
/*
$c=array();
for ($i = 1; $i <= 10; $i++){
	if ($i == 10) { echo $i; }else{ 
	echo $i.',';
	}
}*/
//$data  = array('recipients'=>''.$n1.','.$n2.'');
//$data  = array('recipients'=> $n );
//print_r($data)

   $c=array();
   for($i=1;$i<=3;$i++){
		if($i == 3)
		{
		 $c[]=$i; 
		}else{ 
		 $c[]=$i.',';
		}
   }
   $c2 = implode(' ', $c);
   echo $c2;
   
   //OR
   
   $c=array();
   $c[]='1,';
   $c[]='2,';
   $c[]='3';
   $c2 = implode('', $c);
   echo $c2;
?>
