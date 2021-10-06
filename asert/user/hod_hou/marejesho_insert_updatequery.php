<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php

//$kutoka = $_GET['kutoka'];
$verif_box = $_POST["verif_box"];
$kibali_id=$_POST['kibali_id'];
$masurufu=$_POST['masurufu'];
//$masurufu_id=$_POST['masurufu_id'];

$nathibitisha_sithibitishi_hod_u = $_POST['nathibitisha_sithibitishi'];
$sithibitishi_sababu = $_POST['sithibitishi_sababu'];

$madai_ya_sh_hod_u = $_POST['madai_ya_sh_hod_u'];
$madai_kifungu = $_POST['madai_kifungu'];
//$napendekeza_apewe_sh = filter_var($_POST['napendekeza_apewe_sh'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
//$namba_ya_masurufu_yanayodaiwa = $_POST['namba_ya_masurufu_yanayodaiwa'];


///////////////$maamuzi_ID=$_POST['maamuzi_ID'];
///////////////////////$sababu=$_POST['sababu'];
$badilisha=$_POST['badilisha']; //kuruhusu kuficha iliyojazwa kuleta editing
//$hos_submitDate=$_POST['hos_submitDate'];
//$general_status=$_POST['maamuzi_ID'];

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){ //Kama verification code zimefanana
	

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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "masurufu_maombi_mapya_update")) {

	  //Kutoka kwa dereva
	  if($_POST['masurufu'] == "ya_dereva") {
	  $updateSQL = sprintf("UPDATE marejesho SET masurufu_marejesho_general_status=%s, nathibitisha_sithibitishi_hod_u=%s, madai_ya_sh_hod_u=%s, madai_kifungu=%s, sithibitishi_sababu=%s, submitDate_hod_u=%s WHERE driver_masurufu_id=%s",
						   GetSQLValueString($_POST['masurufu_marejesho_general_status'], "text"),
						   GetSQLValueString($nathibitisha_sithibitishi_hod_u, "text"),
						   GetSQLValueString($madai_ya_sh_hod_u, "text"),
						   GetSQLValueString($madai_kifungu, "text"),
						   GetSQLValueString($sithibitishi_sababu, "text"),
						   GetSQLValueString($_POST['submitDate_hod_u'], "text"),
						   GetSQLValueString($_POST['kibali_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  }else{
	  $updateSQL = sprintf("UPDATE marejesho SET masurufu_marejesho_general_status=%s, nathibitisha_sithibitishi_hod_u=%s, madai_ya_sh_hod_u=%s, madai_kifungu=%s, sithibitishi_sababu=%s, submitDate_hod_u=%s WHERE masurufu_id=%s",
						   GetSQLValueString($_POST['masurufu_marejesho_general_status'], "text"),
						   GetSQLValueString($nathibitisha_sithibitishi_hod_u, "text"),
						   GetSQLValueString($madai_ya_sh_hod_u, "text"),
						   GetSQLValueString($madai_kifungu, "text"),
						   GetSQLValueString($sithibitishi_sababu, "text"),
						   GetSQLValueString($_POST['submitDate_hod_u'], "text"),
						   GetSQLValueString($_POST['kibali_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  }
	  
  	}
	
 
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Uthibitisho umetumwa kikamilifu!');";
	if ($_POST['kutoka'] == "marejesho_yanayoingia_tazama"){
	echo "window.location.href='marejesho_yanayoingia_tazama.php?kibali_id=$kibali_id&masurufu=$masurufu';";
	}
	echo "</script>";
	
	
} else { ///verification code imekataa
    if ($_POST['kutoka'] == "marejesho_yanayoingia_tazama"){
	header("Location: marejesho_yanayoingia_tazama.php?badilisha=$badilisha&kibali_id=$kibali_id&masurufu=$masurufu&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
