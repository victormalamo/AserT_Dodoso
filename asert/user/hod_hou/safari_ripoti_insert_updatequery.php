<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php

//$kutoka = $_GET['kutoka'];
$verif_box = $_POST["verif_box"];
$kibali_id=$_POST['kibali_id'];
//$masurufu=$_POST['masurufu'];
$safari_ripoti_id=$_POST['safari_ripoti_id'];

$nathibitisha_sithibitishi_hod_u = $_POST['nathibitisha_sithibitishi'];
$sithibitishi_hod_u = $_POST['sithibitishi_sababu'];

$badilisha=$_POST['badilisha']; //kuruhusu kuficha iliyojazwa kuleta editing

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

	   $updateSQL = sprintf("UPDATE safari_ripoti SET nathibitisha_sithibitishi_hod_u=%s, sithibitishi_hod_u=%s, safari_ripoti_general_status=%s, submitDate_hod_u=%s WHERE safari_ripoti_id=%s",
						   GetSQLValueString($_POST['nathibitisha_sithibitishi'], "text"),
						   GetSQLValueString($_POST['sithibitishi_sababu'], "text"),
						   GetSQLValueString($_POST['safari_ripoti_general_status'], "text"),
						   GetSQLValueString($_POST['submitDate_hod_u'], "text"),
						   GetSQLValueString($_POST['safari_ripoti_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	 	  
}
	
 
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Uthibitisho umetumwa kikamilifu!');";
	if ($_POST['kutoka'] == "safari_ripoti_tazama"){
	echo "window.location.href='safari_ripoti_tazama.php?kibali_id=$kibali_id';";
	}
	echo "</script>";
	
	
} else { ///verification code imekataa
    if ($_POST['kutoka'] == "safari_ripoti_tazama"){
	header("Location: safari_ripoti_tazama.php?badilisha=$badilisha&kibali_id=$kibali_idu&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
