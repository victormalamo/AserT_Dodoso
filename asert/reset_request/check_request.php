<?php require_once('../Connections/connmnrtsafari.php'); ?>
<?php 


session_start();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';

$output = [];

//////////////////////////////////////////

if($form_data->action == 'check_existance')
{
	$request_input = $form_data->request_input;
	$query = "SELECT * FROM wafanyakazi WHERE (username = '".$request_input."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  $_SESSION['username'] = $row['username'];
		  $_SESSION['namba_ya_simu'] = $row['mob'];
		  //$_SESSION['barua_pepe'] = $row['e_add'];		  
		 }
	 $namba_ya_uhakiki_row = md5(rand(1000,9999));
	 $_SESSION['namba_ya_uhakiki'] = substr("$namba_ya_uhakiki_row", 2, 4);
	 }else{
	 $error = 'Namba ya hundi '.$request_input.' haijasajiliwa!';
	 unset($_SESSION['username']); 
	 unset($_SESSION['namba_ya_uhakiki']);
	 unset($_SESSION['namba_ya_simu']);
	 //unset($_SESSION['barua_pepe']);
	 }
}
	$output = array(
		'error'  => $error
	);

echo json_encode($output);

?>