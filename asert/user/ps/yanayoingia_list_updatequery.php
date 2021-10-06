<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php');?>
<?php
// load the variables form address bar

$verif_box = $_POST["verif_box"];
$kibali_id=$_POST['kibali_id'];
//$mtumishi_ID=$_POST['mtumishi_ID'];

//$old_kiambata = "viambatanisho/".$_SESSION['username']."/".$_POST['old_kiambata'];
//unlink($old_kiambata); //Futa faili la zamani

//$min_ID=$_SESSION['min_ID'];
//$username=$_SESSION['username']; //Hii itaondolewa iende moja kwa moja kwenye table==namba ya cheki
//$levelID=$_POST['levelID']; //inatoka mafichoni/session
//$titleID=$_POST['titleID']; //inatoka mafichoni/session
//$div_unit=$_POST['div_unit']; //inatoka mafichoni/session
//$section=$_POST['section']; //inatoka mafichoni/session
$ruti_ID=$_POST['ruti_ID'];
$catID=$_POST['catID'];
$regID=$_POST['regID'];
$lgaID=$_POST['lgaID'];
$jina_la_halmashauri=$_POST['jina_la_halmashauri'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$sDate=$_POST['sDate'];
$eDate=$_POST['eDate'];
//$submitDate = $_POST['submitDate'];
$duration_safarini=$_POST['duration_safarini'];
$usafiriID=$_POST['usafiriID'];
$madhumuniID=$_POST['madhumuniID'];
$muhtasari=$_POST['muhtasari'];
$mlipajiID=$_POST['mlipajiID'];
$wengine=$_POST['wengine'];
//$jina_kiambata=$_POST['jina_kiambata'];
//$kiambata_c=$_FILES['kiambata']['name'];

include('kagua_fields_tupu_update_ps.php');
include('aina_ya_kibali_ps.php'); ///// JADILI HILI JUU YA UDHARURA UNAOWEZA KUJITOKEZA TAREHE ZINAPOBADILISHWA
    

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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "yanayoingia_list_updateForm")) {
  $updateSQL = sprintf("UPDATE vibali SET ruti_ID=%s, catID=%s, regID=%s, lgaID=%s, jina_la_halmashauri=%s, distance=%s, duration=%s, sDate=%s, eDate=%s, duration_safarini=%s, usafiriID=%s, madhumuniID=%s, muhtasari=%s, mlipajiID=%s, wengine=%s, last_edited_ps=%s, aina_ya_kibali=%s, sababu_ya_aina=%s  WHERE id=%s",
                       GetSQLValueString($_POST['ruti_ID'], "text"),
					   GetSQLValueString($_POST['catID'], "text"),
                       GetSQLValueString($_POST['regID'], "int"),
                       GetSQLValueString($_POST['lgaID'], "int"),
					   GetSQLValueString($_POST['jina_la_halmashauri'], "text"),
					   GetSQLValueString($_POST['distance'], "text"),
					   GetSQLValueString($_POST['duration'], "text"),
					   GetSQLValueString($_POST['sDate'], "text"),
					   GetSQLValueString($_POST['eDate'], "text"),
					   GetSQLValueString($_POST['duration_safarini'], "int"),
					   GetSQLValueString($_POST['usafiriID'], "text"),
					   GetSQLValueString($_POST['madhumuniID'], "text"),
					   GetSQLValueString($_POST['muhtasari'], "text"),
					   GetSQLValueString($_POST['mlipajiID'], "text"),
					   GetSQLValueString($_POST['wengine'], "text"),
					   GetSQLValueString($_POST['last_edited_ps'], "text"),
					   GetSQLValueString($aina_ya_kibali, "text"),
					   GetSQLValueString($sababu_ya_aina, "text"),
					   //GetSQLValueString($udharura, "text"),
					   //GetSQLValueString($sababu_ya_udharura, "text"),
                       GetSQLValueString($_POST['kibali_id'], "int"));

  
  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
}
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	unset($_SESSION['f_name_mtumishi']);
	unset($_SESSION['m_name_mtumishi']);
	unset($_SESSION['l_name_mtumishi']);
	unset($_SESSION['cheo_mtumishi']);
	unset($_SESSION['seksheni_mtumishi']);
    require_once('../../update_zimebaki_siku.php'); 
	echo "<script>";
	echo "alert('Mabadiliko yamefanyika kikamilifu!');";
	echo "window.location.href='yanayoingia_tazama.php?id=$kibali_id&imetoka=badili_maombi_ps';";
	echo "</script>";
	
} else { ///verification code imekataa
	header("Location: yanayoingia_list_update.php?ruti_ID=$ruti_ID&jina_la_halmashauri=$jina_la_halmashauri&distance=$distance&duration=$duration&catID=$catID&regID=$regID&lgaID=$lgaID&sDate=$sDate&eDate=$eDate&duration_safarini=$duration_safarini&usafiriID=$usafiriID&madhumuniID=$madhumuniID&muhtasari=$muhtasari&mlipajiID=$mlipajiID&wengine=$wengine&id=$kibali_id&wrong_code=true");
	$_SESSION['done']="wrong_code";
	exit;
	}
?>
