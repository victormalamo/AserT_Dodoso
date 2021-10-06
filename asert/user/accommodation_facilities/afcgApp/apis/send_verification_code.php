<?php
require_once('../../../../Connections/connmnrtsafari.php');
session_start();
$output = array(); 
$form_data = json_decode(file_get_contents("php://input"));
$action = $form_data->action;
$simu_mobile_unformatted = $form_data->simu_mobile;

$simu_mobile = "255".substr("$simu_mobile_unformatted",1,9);
$_SESSION['namba_ya_simu'] = $simu_mobile;
$user_blocked = "";

//Check if blacklisted
	 $query_blacklist = "SELECT * FROM afcg_blacklist WHERE (field = '".$simu_mobile."')"; 
	 $query_blacklist_result = mysqli_query($conntscpME, $query_blacklist);
	 $query_blacklist_row = mysqli_fetch_array($query_blacklist_result);
	 if (mysqli_num_rows($query_blacklist_result) > 0)	 
		{
			$number_of_attempts = $query_blacklist_row['number_of_attempts'];
			if($number_of_attempts >= 3)
			{
				$user_blocked = "yes";
			}
			else
			{
				$user_blocked = "no";
				$number_of_attempts = ($number_of_attempts + 1);
				$query_update_blacklist = "UPDATE afcg_blacklist SET number_of_attempts = '$number_of_attempts' WHERE field = '$simu_mobile'";
				if (mysqli_query($conntscpME, $query_update_blacklist))
				{
					$query_connection = 'success';					
				}
				else
				{
					$query_connection = 'error';					
				}				
			}			
		}
		else
		{
			$number_of_attempts = 1;
			$query = "INSERT INTO afcg_blacklist (field, number_of_attempts) VALUES ('$simu_mobile', '$number_of_attempts')";
			if(mysqli_query($conntscpME, $query)) {
				$user_blocked = "no";
				$query_connection = 'success';				
			}else{
				$query_connection = 'error';
			}
		}
//End check if blacklisted
if($user_blocked == "no")
{
	$namba_ya_uhakiki_raw = rand(1000000,9999999);
	$namba_ya_uhakiki = substr("$namba_ya_uhakiki_raw",1,6);
	$_SESSION['namba_ya_uhakiki'] = $namba_ya_uhakiki;	
	//$_SESSION['muda_namba_ya_uhakiki_ilipotumwa'] = time();
	$message = "Verification Code:\n".$namba_ya_uhakiki;
	//$message = $namba_ya_uhakiki;
	$message_id1 = $simu_mobile;
	//SMS
		require_once('../../../../apis/sms/send/tuma_ujumbe.php');
	//End SMS
}
else
{
unset($_SESSION['namba_ya_uhakiki']);
//unset($_SESSION['muda_namba_ya_uhakiki_ilipotumwa']);
}
$output = array(
'is_user_blocked' => $user_blocked
);	
echo json_encode($output); 
?>  