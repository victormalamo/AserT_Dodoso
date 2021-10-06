<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php

//$kutoka = $_GET['kutoka'];
$verif_box = $_POST["verif_box"];
$id=$_POST['id'];
$maamuzi_ID=$_POST['maamuzi_ID'];
$sababu=$_POST['sababu'];
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
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "yanayoingia_update")) {
  $updateSQL = sprintf("UPDATE vibali SET general_status=%s, ps_status=%s, ps_rsn_chg=%s, ps_submitDate=%s, uthibitisho=%s, sababu_za_uthibitisho=%s, ps_username=%s, ps_levelID=%s WHERE id=%s",
                       GetSQLValueString($_POST['maamuzi_ID'], "text"),
                       GetSQLValueString($_POST['maamuzi_ID'], "text"),
                       GetSQLValueString($_POST['sababu'], "text"),
					   GetSQLValueString($_POST['ps_submitDate'], "text"),
					   GetSQLValueString($_POST['uthibitisho'], "text"),
					   GetSQLValueString($_POST['sababu_za_uthibitisho'], "text"),
					   GetSQLValueString($_SESSION['username'], "text"),
					   GetSQLValueString($_SESSION['levelID_isobadilika'], "text"),
                       GetSQLValueString($_POST['id'], "int"));
  
  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
}
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Maoni yako yametumwa kikamilifu!');";
	if ($_POST['kutoka'] == "yanayoingia"){
	echo "window.location.href='yanayoingia_tazama.php?id=$id&maamuzi_ID=$maamuzi_ID&sababu=$sababu';";
	}elseif($_POST['kutoka'] == "yaliyopitishwa"){
	echo "window.location.href='yaliyopitishwa_tazama.php?id=$id&maamuzi_ID=$maamuzi_ID&sababu=$sababu';";
	}elseif($_POST['kutoka'] == "yaliyokataliwa"){
	echo "window.location.href='yaliyokataliwa_tazama.php?id=$id&maamuzi_ID=$maamuzi_ID&sababu=$sababu';";
	}elseif($_POST['kutoka'] == "yaliyoelekezwa"){
	echo "window.location.href='yaliyoelekezwa_tazama.php?id=$id&maamuzi_ID=$maamuzi_ID&sababu=$sababu';";
	}
	echo "</script>";
	//header("Location: yanayoingia_tazama.php?id=$id");
	//exit;
//} else if(isset($trainer) and $trainer!=""){
	// if verification code was incorrect then return to contact page and show error
	//header("Location: courseForm.php?div_unit=$trlocdiv_unit&lgaID=$trlocLGAID&wardID=$trlocWardID&vilMtaID=$trlocVilMtaID&hlID=$trlochlID&cID=$cID&duration=$duration&sDate=$sDate&eDate=$eDate&tVenue=$tVenue&cCoord=$cCoord&cCode=$cCode&nMales=$nMales&nFemales=$nFemales&expend=$expend&ctID=$ctID&pgID=$pgID&sfID=$sfID&tspID=$tspID&trainer=".urlencode($trainer)."&wrong_code=true");
	//$_SESSION['done']="wrong_code";
	//exit;
	
	
	
} else { ///verification code imekataa
if ($_POST['kutoka'] == "yanayoingia"){
	header("Location: yanayoingia_tazama.php?badilisha=$badilisha&maamuzi_ID=$maamuzi_ID&sababu=$sababu&id=$id&wrong_code=true");
	}elseif($_POST['kutoka'] == "yaliyopitishwa"){
	header("Location: yaliyopitishwa_tazama.php?badilisha=$badilisha&maamuzi_ID=$maamuzi_ID&sababu=$sababu&id=$id&wrong_code=true");
	}elseif($_POST['kutoka'] == "yaliyokataliwa"){
	header("Location: yaliyokataliwa_tazama.php?badilisha=$badilisha&maamuzi_ID=$maamuzi_ID&sababu=$sababu&id=$id&wrong_code=true");
	}elseif($_POST['kutoka'] == "yaliyoelekezwa"){
	header("Location: yaliyoelekezwa_tazama.php?badilisha=$badilisha&maamuzi_ID=$maamuzi_ID&sababu=$sababu&id=$id&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
	}
?>
