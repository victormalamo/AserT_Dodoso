<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php

//$kutoka = $_GET['kutoka'];
$verif_box = $_POST["verif_box"];
$kibali_id=$_POST['kibali_id'];
$masurufu=$_POST['masurufu'];
//$masurufu_id=$_POST['masurufu_id'];

if(($_POST['check_masurufu_ya_sh'] <= 5000000) || ($_POST['napendekeza_sipendekezi_ps'] == "napendekeza")) {

$napendekeza_sipendekezi_hod_u = $_POST['napendekeza_sipendekezi'];
$napendekeza_asipewe = $_POST['napendekeza_asipewe'];
$napendekeza_apewe_sh = filter_var($_POST['napendekeza_apewe_sh'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

if($_POST['napendekeza_sipendekezi_ps'] == "napendekeza") {
$to_km_napendekeza_apewe_sh = $_POST['to_km_napendekeza_apewe_sh'];
}

}

if(($_POST['check_masurufu_ya_sh'] > 5000000) && ($_POST['napendekeza_sipendekezi_ps'] != "napendekeza")) {

	if($_POST['napendekeza_sipendekezi'] == "napendekeza") { 
	$napendekeza_sipendekezi_hod_u = "";
	$to_km_napendekeza_apewe_sh = filter_var($_POST['napendekeza_apewe_sh'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$napendekeza_apewe_sh = "";
	}else{
	$napendekeza_sipendekezi_hod_u = $_POST['napendekeza_sipendekezi'];
	$napendekeza_asipewe = $_POST['napendekeza_asipewe'];
	}
	
}

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
	  $updateSQL = sprintf("UPDATE masurufu SET masurufu_general_status=%s, napendekeza_sipendekezi_hod_u=%s, napendekeza_asipewe=%s, napendekeza_apewe_sh=%s, to_km_napendekeza_apewe_sh=%s, submitDate_hod_u=%s WHERE driver_masurufu_id=%s",
						   GetSQLValueString($_POST['masurufu_general_status'], "text"),
						   GetSQLValueString($napendekeza_sipendekezi_hod_u, "text"),
						   GetSQLValueString($napendekeza_asipewe, "text"),
						   GetSQLValueString($napendekeza_apewe_sh, "text"),
						   GetSQLValueString($to_km_napendekeza_apewe_sh, "text"),
						   GetSQLValueString($_POST['submitDate_hod_u'], "text"),
						   GetSQLValueString($_POST['kibali_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  }else{ 
	  $updateSQL = sprintf("UPDATE masurufu SET masurufu_general_status=%s, napendekeza_sipendekezi_hod_u=%s, napendekeza_asipewe=%s, napendekeza_apewe_sh=%s, to_km_napendekeza_apewe_sh=%s, submitDate_hod_u=%s WHERE masurufu_id=%s",
						   GetSQLValueString($_POST['masurufu_general_status'], "text"),
						   GetSQLValueString($napendekeza_sipendekezi_hod_u, "text"),
						   GetSQLValueString($napendekeza_asipewe, "text"),
						   GetSQLValueString($napendekeza_apewe_sh, "text"),
						   GetSQLValueString($to_km_napendekeza_apewe_sh, "text"),
						   GetSQLValueString($_POST['submitDate_hod_u'], "text"),
						   GetSQLValueString($_POST['kibali_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  }	
	  
} 
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Maombi yako yametumwa kikamilifu!');";
	if ($_POST['kutoka'] == "masurufu_yanayoingia_tazama"){
		if (($_POST['aina_ya_usafiri'] == "gls") && ($napendekeza_sipendekezi_hod_u != "")) {
			if ($_POST['masurufu'] == "ya_dereva") {
			echo "window.location.href='masurufu_yanayoingia_tazama.php?kibali_id=$kibali_id';";
			}else{
			echo "window.location.href='masurufu_yanayoingia_tazama.php?kibali_id=$kibali_id&masurufu=ya_dereva';";
			}
		}else{		
		echo "window.location.href='masurufu_yanayoingia_tazama.php?kibali_id=$kibali_id&masurufu=$masurufu';";
		}
	}	
	echo "</script>";
	
	
} else { ///verification code imekataa
    if ($_POST['kutoka'] == "masurufu_yanayoingia_tazama"){
	header("Location: masurufu_yanayoingia_tazama.php?badilisha=$badilisha&kibali_id=$kibali_id&masurufu=$masurufu&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
