<?php require_once('Connections/connmnrtsafari.php'); ?>
<?php session_start();?>
<?php 
$verif_box = $_POST["verif_box"];
                        $oldpassword=$_POST['oldpassword'];
                        $password=$_POST['password'];	
						//$from=$_POST['from'];				
////check old
//$colname_rsusername = "-1";
//if (isset($_SESSION['MM_Username'])) {
// $colname_rsusername = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
//}
$userID=$_POST['userID'];

$query_rspwd = sprintf("SELECT password FROM wafanyakazi WHERE (`id`='%s')",$userID);
$rspwd = mysqli_query($conntscpME, $query_rspwd) or die(mysqli_error());
$row_rspwd = mysqli_fetch_assoc($rspwd);
$totalRows_rspwd = mysqli_num_rows($rspwd);
if($row_rspwd['password']!=md5($oldpassword)) { header("Location: changepwd.php?from=$from&wrongoldpwd=yes"); die(); }
///end check old						
// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "changepwd")) {
  $updateSQL = sprintf("UPDATE wafanyakazi SET password=%s WHERE id=%s",
                       GetSQLValueString(md5($_POST['password']), "text"),
                       GetSQLValueString($_POST['userID'], "int"));

  
  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
}

	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	
	header("Location: changepwd.php?mafanikio=yes");
	die();
	
	} else {
	header("Location: changepwd.php?wrong_code=true");
	$_SESSION['done']="wrong_code";
	die();
	}
?>