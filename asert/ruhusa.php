<?php require_once('Connections/connmnrtsafari.php'); ?>
<?php
ob_start();
session_start();
if (!$_SESSION['MM_Username'] || !$_SESSION['MM_Password']) {
header('Location: ../../login.php');
die();
} else {
$username_check = $_SESSION['MM_Username'];
$password_check = $_SESSION['MM_Password'];
if($_SESSION['mtumiaji_tbl'] == "afcg_assessors"){
$query_rstersuser = sprintf("SELECT count(reg_assessor_id) FROM ".$_SESSION['mtumiaji_tbl']." WHERE ((password='%s') AND (username='%s'))",$password_check,$username_check);
}else{
$query_rstersuser = sprintf("SELECT count(id) FROM ".$_SESSION['mtumiaji_tbl']." WHERE ((password='%s') AND (username='%s'))",$password_check,$username_check);
}
//$query_rstersuser = sprintf("SELECT count(id) FROM ".$_SESSION['mtumiaji_tbl']." WHERE ((password='%s') AND (username='%s'))",$password_check,$username_check);
$rstersuser = mysqli_query($conntscpME, $query_rstersuser) or die(mysqli_error());
$num = mysqli_num_rows($rstersuser);
if (!$num) {
header('Location: ../../login.php');
die();
}
}
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_Password']);
  unset($_SESSION['username']);
  unset($_SESSION['active']);
  unset($_SESSION['muda_wa_mwisho']);
  unset($_SESSION['levelID']);
  unset($_SESSION['levelID_isobadilika']);
  unset($_SESSION['mkuu']);
  unset($_SESSION['mkuu_2']);
  unset($_SESSION['mkuu_3']);
  unset($_SESSION['ra_to_pmu_driver']);
  unset($_SESSION['cheo_alichokaimishwa']);
  unset($_SESSION['aliyekaimisha_username']);
  unset($_SESSION['cheo_alichokaimishwa_nu']);
  unset($_SESSION['aliyekaimisha_username_nu']);
  unset($_SESSION['cheo_alichokaimishwa_hos']);
  unset($_SESSION['aliyekaimisha_username_hos']);
  unset($_SESSION['kibali_id']);
  unset($_SESSION['ukaimu']);
  unset($_SESSION['cheo']);
  unset($_SESSION['levelID_link_nu']);
  unset($_SESSION['levelID_link_hos']);
  unset($_SESSION['namba_ya_gari']);
  unset($_SESSION['assessor_mobile_number']);
  unset($_SESSION['ticket_id']);
  //unset($_SESSION['mtumiaji_tbl']);
  //unset($_SESSION['home']);
  /*if($_SESSION['mtumiaji_tbl']=='afcg_registered_facilities')
  { 
  $logoutGoTo = "../accommodation_facilities/index.php";
  }
  elseif($_SESSION['mtumiaji_tbl']=='afcg_assessors')
  {
  $logoutGoTo = "../accommodation_facilities/index.php";
  }
  else
  {*/
  $logoutGoTo = "../../";
  /*}*/  
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    die();
  }
}
// Ukiwa iddle tunakutoa
$timeout = 15000;
  if ((($timeout != 0) && isset($_SESSION['muda_wa_mwisho'])) && ((time() - $_SESSION['muda_wa_mwisho']) > $timeout)) {
    header("Location: $logoutAction");	
	exit;
  }else{  
  $_SESSION['muda_wa_mwisho'] = time(); 
}

?> 