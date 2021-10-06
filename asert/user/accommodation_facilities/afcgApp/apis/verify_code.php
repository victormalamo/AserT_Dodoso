<?php
require_once('../../../../Connections/connmnrtsafari.php');
session_start();
$output = array();
$verification = ""; 
$error_muda_wa_kusubiri = "";
$form_data = json_decode(file_get_contents("php://input"));
$vn_1 = $form_data->vn_1;$vn_2 = $form_data->vn_2;$vn_3 = $form_data->vn_3;$vn_4 = $form_data->vn_4;$vn_5 = $form_data->vn_5;$vn_6 = $form_data->vn_6;
$userspns_namba_ya_uhakiki = $vn_1.$vn_2.$vn_3.$vn_4.$vn_5.$vn_6;
$simu_mobile_unformatted = $form_data->simu_mobile;
$simu_mobile = "255".substr("$simu_mobile_unformatted",1,9);
//$muda_wa_kusubiri = 60;
//if((time() - $_SESSION['muda_namba_ya_uhakiki_ilipotumwa']) > $muda_wa_kusubiri)
//{
//	unset($_SESSION['muda_namba_ya_uhakiki_ilipotumwa']);
//	unset($_SESSION['namba_ya_uhakiki']);
//	$error_muda_wa_kusubiri = 'expired';
//}
//else
//{
	if(($userspns_namba_ya_uhakiki == $_SESSION['namba_ya_uhakiki']) && ($simu_mobile == $_SESSION['namba_ya_simu']))
	{
		$verification = "passed";
			//Delete number_of_attempts
			$query_delete = "DELETE FROM afcg_blacklist WHERE field='$simu_mobile'";
			if(mysqli_query($conntscpME, $query_delete))
			{
			 $query_connection = 'success';
			}
			else
			{
			 $query_connection = 'false';
			}		
		//unset($_SESSION['muda_namba_ya_uhakiki_ilipotumwa']);
		unset($_SESSION['namba_ya_uhakiki']);
		unset($_SESSION['namba_ya_simu']);
	}
	else
	{
		$verification = "failed";
	}
	
//}

/*
$_SESSION['namba_ya_simu'] = $simu_mobile;
$namba_ya_uhakiki_raw = rand(1000000,9999999);
$namba_ya_uhakiki = substr("$namba_ya_uhakiki_raw",1,6);
$_SESSION['namba_ya_uhakiki'] = $namba_ya_uhakiki;	 
$message = "Verification code:\n".$namba_ya_uhakiki;
$message_id1 = $simu_mobile;
require_once('../../../../apis/sms/send/tuma_ujumbe.php');
$_SESSION['muda_namba_ya_uhakiki_ilipotumwa'] = time();
//$output = array(
//'verification_code' => $namba_ya_uhakiki
//);
*/
$output = array(
//'error_muda_wa_kusubiri' => $error_muda_wa_kusubiri,
'verification' => $verification,
);
echo json_encode($output); 
?>  