<?php require_once('../Connections/connmnrtsafari.php'); ?>
<?php 

session_start();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$posted_username = '';
$output = [];

//////////////////////////////////////////

if($form_data->action == 'kagua_username')
{
	$posted_username = $form_data->posted_username;
	$query = "SELECT * FROM ".$_SESSION['mtumiaji_tbl']." WHERE (username = '".$posted_username."')";
	$result = mysqli_query($conntscpME, $query);
	$row = mysqli_fetch_assoc($result);
	$total_rows = mysqli_num_rows($result);
	if ($total_rows > 0) {
	$username = $row['username'];
	}else{
	$error = $posted_username.' haijasajiliwa!';
	}
	
	$output = array(
		'error'  => $error,
		'confirmed_username' => $username
	);
}


if($form_data->action == 'kagua_password')
{
	$confirmed_username = $form_data->confirmed_username;
	$posted_password = $form_data->posted_password;
	$check_posted_password = md5($posted_password);
	$query = "SELECT * FROM ".$_SESSION['mtumiaji_tbl']." WHERE ((username = '".$confirmed_username."') AND ( password = '".$check_posted_password."'))";
	$result = mysqli_query($conntscpME, $query);
	$row = mysqli_fetch_assoc($result);
	$total_rows = mysqli_num_rows($result);
	if ($total_rows > 0) {
	//$confirmed_password = $posted_password;
	$_SESSION['MM_Username'] = $row['username'];
	$_SESSION['MM_Password'] = $row['password'];
	$_SESSION['muda_wa_mwisho'] = time();
	}else{
	$error = 'Nywila imekosewa!';
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_Password']);
	unset($_SESSION['muda_wa_mwisho']);
	}
	
	$output = array(
		'error'  => $error,
		//'confirmed_password' => $confirmed_password
	);
}


echo json_encode($output);

?>