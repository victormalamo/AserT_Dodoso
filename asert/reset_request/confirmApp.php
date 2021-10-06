<?php require_once('../Connections/connmnrtsafari.php'); ?>
<?php 

session_start();



$form_data = json_decode(file_get_contents("php://input"));

$error_namba_ya_uhakiki_imekosewa = '';
$error_muda_wa_kusubiri = '';
$message = '';

$output = [];

//////////////////////////////////////////

if($form_data->action == 'confirm_namba_ya_uhakiki')
{

$muda_wa_kusubiri = 25;
if((time() - $_SESSION['muda_namba_ilipotumwa']) > $muda_wa_kusubiri) {
unset($_SESSION['muda_namba_ilipotumwa']);
$error_muda_wa_kusubiri = 'Samahani, muda wakusubiri umekwisha!';
}else{


	$userspns_namba_ya_uhakiki = $form_data->userspns_namba_ya_uhakiki;
	if($userspns_namba_ya_uhakiki == $_SESSION['namba_ya_uhakiki']){
	$namba_ya_simu = $_SESSION['namba_ya_simu'];
	
			$username = $_SESSION['username'];
			$generate_password = md5(time());
			$password_row = substr("$generate_password", 2, 6);
			$password = md5($password_row);
			$password_mabadiliko = "tmp_".time();
			$query = "UPDATE wafanyakazi SET password = '$password', password_mabadiliko = '$password_mabadiliko' WHERE username = '$username'";
			if (mysqli_query($conntscpME, $query)) {
				$message = ' Nywila mpya ('.$password_row.') imetumwa kwenda '.substr("$namba_ya_simu",0,4).'****'.substr("$namba_ya_simu",7,2);;
				unset($_SESSION['username']);
				unset($_SESSION['muda_namba_ilipotumwa']);
				unset($_SESSION['namba_ya_simu']);
				unset($_SESSION['namba_ya_uhakiki']);
				//****TUMA SMS HAPA****//					
			} else {
				$message = 'Imeshindikana kubadili nywila';					
			}			
	}else{
	$error_namba_ya_uhakiki_imekosewa = 'Namba ya uhakiki '.$userspns_namba_ya_uhakiki.' imekosewa! ('.$_SESSION['namba_ya_uhakiki'].')';
	}
	
}

}
	$output = array(
		'error_namba_ya_uhakiki_imekosewa'  => $error_namba_ya_uhakiki_imekosewa,
		'error_muda_wa_kusubiri'  => $error_muda_wa_kusubiri,
		'message' => $message
	);

echo json_encode($output);

?>