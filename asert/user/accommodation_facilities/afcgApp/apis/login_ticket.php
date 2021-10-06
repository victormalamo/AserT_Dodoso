<?php  
session_start();
$data = json_decode(file_get_contents("php://input"));
$login_category = $data->login_category;
$output = array();
	if($login_category == 'facility')
	{
		$_SESSION['mtumiaji_tbl'] = "afcg_registered_facilities"; $_SESSION['home'] = "/";
	}
	elseif($login_category == 'assessor')
	{
		$_SESSION['mtumiaji_tbl'] = "afcg_assessors"; $_SESSION['home'] = "/";
	}
	else
	{
		unset($_SESSION['mtumiaji_tbl']);
		unset($_SESSION['home']);
	}
$output = array(
	'login_category'=>$login_category
);	
echo json_encode($output); 
?>  