<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php

//$kutoka = $_GET['kutoka'];
$verif_box = $_POST["verif_box"];
$kibali_id=$_POST['kibali_id'];
//$masurufu_id=$_POST['masurufu_id'];



$napendekeza_sipendekezi_ps = $_POST['napendekeza_sipendekezi_ps'];
$napendekeza_asipewe_ps = $_POST['napendekeza_asipewe_ps'];
$napendekeza_apewe_sh_ps = filter_var($_POST['napendekeza_apewe_sh_ps'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

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

	  $updateSQL = sprintf("UPDATE masurufu SET napendekeza_sipendekezi_ps=%s, napendekeza_asipewe_ps=%s, napendekeza_apewe_sh_ps=%s, submitDate_ps=%s WHERE masurufu_id=%s",
						   
						   GetSQLValueString($napendekeza_sipendekezi_ps, "text"),
						   GetSQLValueString($napendekeza_asipewe_ps, "text"),
						   GetSQLValueString($napendekeza_apewe_sh_ps, "text"),
						   GetSQLValueString($_POST['submitDate_ps'], "text"),
						   GetSQLValueString($_POST['kibali_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
  	}
	
 
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Uthibitisho umetumwa kikamilifu!');";
	if ($_POST['kutoka'] == "masurufu_yanayoingia_tazama"){
	echo "window.location.href='masurufu_yanayoingia_tazama.php?kibali_id=$kibali_id';";
	}
	echo "</script>";
	
	
} else { ///verification code imekataa
    if ($_POST['kutoka'] == "masurufu_yanayoingia_tazama"){
	header("Location: masurufu_yanayoingia_tazama.php?badilisha=$badilisha&kibali_id=$kibali_id&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
