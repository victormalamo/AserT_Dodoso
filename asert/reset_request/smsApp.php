<?php require_once('../Connections/connmnrtsafari.php'); ?>
<?php 

session_start();



$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';

$output = [];

//////////////////////////////////////////

if($form_data->action == 'tuma_sms')
{
	$namba_ya_simu = $_SESSION['namba_ya_simu'];
	$namba_ya_uhakiki = $_SESSION['namba_ya_uhakiki'];
	
	//****TUMA SMS HAPA***//
	$query = "SELECT * FROM wafanyakazi WHERE (mob = '".$namba_ya_simu."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
		  $jina = $row['f_name'];		  
		 }
	 $message = $jina.', Namba ya uhakiki ('.$namba_ya_uhakiki.') imetumwa kwenda '.substr("$namba_ya_simu",0,4).'****'.substr("$namba_ya_simu",7,2);
	 $_SESSION['muda_namba_ilipotumwa'] = time();
	 }else{
	 unset($_SESSION['namba_ya_uhakiki']);
	 unset($_SESSION['username']);
	 unset($_SESSION['namba_ya_simu']);
	 //unset($_SESSION['barua_pepe']);
	 unset($_SESSION['muda_namba_ilipotumwa']);
	 $error = 'Tatizo kwenye kutuma ujumbe!';
	 }
}
	$output = array(
		'error'  => $error,
		'message' => $message
	);

echo json_encode($output);

?>