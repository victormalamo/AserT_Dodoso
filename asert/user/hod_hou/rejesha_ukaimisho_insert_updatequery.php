<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php


$verif_box = $_POST["verif_box"];
$kibali_id = $_POST['kibali_id'];
$ukaimisho_id = $_POST['ukaimisho_id'];

$old_kiambata = "ukaimisho/".$_POST['aliyekaimisha_username']."/".$_POST['old_kiambata'];
unlink($old_kiambata); //Futa faili la zamani
$jina_kiambata = $_POST['jina_kiambata'];
$kiambata_c = $_FILES['kiambata']['name'];

$aliyekaimisha_username = $_POST['aliyekaimisha_username'];
$ripoti_ya_ukaimisho = $_POST['ripoti_ya_ukaimisho'];
$handed_back = "yes";

$badilisha = $_POST['badilisha'];

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){ //Kama verification code zimefanana

if(($jina_kiambata != "") && ($kiambata_c != "")){ //kupeleka faili kwenye server lazima liwepo 
//if($jina_kiambata != ""){ //kupeleka faili kwenye server lazima liwepo

 $kiambata = "ukaimisho_ripoti_".rand(1000,100000)."-".$_FILES['kiambata']['name'];
 $kiambata_loc = $_FILES['kiambata']['tmp_name']; //wakati wa kulifuata
 $kiambata_size = $_FILES['kiambata']['size'];
 $kiambata_type = $_FILES['kiambata']['type'];
 
 $folder="ukaimisho/".$_POST['aliyekaimisha_username']."/"; 
 // new file size in KB
 $new_size = $kiambata_size/1024;  
 // new file size in KB 
 // make file name in lower case
 $new_kiambata_name = strtolower($kiambata);
 // make file name in lower case 
 $final_kiambata=str_replace(' ','_',$new_kiambata_name);

if(move_uploaded_file($kiambata_loc,$folder.$final_kiambata)) /// Kama faili limefanikiwa kupandishwa (liwepo pamoja na jina lake)
{
	
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


	//Kama ni masurufu mapya yanainginzwa ingiza rekodi mpya kwenye masurufu table and update masurufu_id kwenye vibali table
			
	//update rekodi kwenye masurufu table, masurufu_id kwenye vibali table haiwezi kubadilika
	  $updateSQL = sprintf("UPDATE ukaimisho SET ripoti_ya_ukaimisho=%s, jina_kiambata_2=%s, final_kiambata_2=%s, submitDate_ripoti=%s
	  WHERE ukaimisho_id=%s",
					   GetSQLValueString($_POST['ripoti_ya_ukaimisho'], "text"),
					   GetSQLValueString($_POST['jina_kiambata'], "text"),
					   GetSQLValueString($final_kiambata, "text"),
					   GetSQLValueString($_POST['submitDate_ripoti'], "text"),
					   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa taarifa za muda kwa aliyekaimishwa
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID = NULL, cur_del_div_unit_ID = NULL, cur_del_section_ID = NULL, ukaimisho_id = NULL WHERE ukaimisho_id=%s",
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa taarifa za aliyekaimishwa zilizoingizwa kwa aliyekaimisha
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to = NULL, uthibitisho = NULL WHERE username=%s",
						   GetSQLValueString($_POST['aliyekaimisha_username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Update vibali
	  $updateSQL = sprintf("UPDATE vibali SET handed_back=%s WHERE id=%s",
	  					   GetSQLValueString($handed_back, "text"),
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	
  
}
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Ripoti imetumwa kikamilifu!');";
	if ($_POST['kutoka'] == "rejesha_ukaimisho"){
	echo "window.location.href='rejesha_ukaimisho.php?ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id';";
	}
	echo "</script>";

} 
else  ///faili limekataa kwa sababu ya tatizo la mfumo
{
  ?>
  <?php echo "<script>";
  echo "alert('Kuna tatizo kwenye kuambatanisha faili');";
  echo "window.location.href='rejesha_ukaimisho.php?kiambata_fail&badilisha=$badilisha&ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id'";
  echo "</script>";
  ?>
  <?php
 }
 }///end kama jina la file na file vipo
else //peleka data bila faili wala jina lake
 {

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


	
	  $updateSQL = sprintf("UPDATE ukaimisho SET ripoti_ya_ukaimisho=%s submitDate_ripoti=%s
	  WHERE ukaimisho_id=%s",
					   GetSQLValueString($_POST['ripoti_ya_ukaimisho'], "text"),
					   GetSQLValueString($_POST['submitDate_ripoti'], "text"),
					   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa taarifa za muda kwa aliyekaimishwa
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID = NULL, cur_del_div_unit_ID = NULL, cur_del_section_ID = NULL, ukaimisho_id = NULL WHERE ukaimisho_id=%s",
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa taarifa za aliyekaimishwa zilizoingizwa kwa aliyekaimisha
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to = NULL, uthibitisho = NULL WHERE username=%s",
						   GetSQLValueString($_POST['aliyekaimisha_username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Update vibali
	  $updateSQL = sprintf("UPDATE vibali SET handed_back=%s WHERE id=%s",
	  					   GetSQLValueString($handed_back, "text"),
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
  
	  
}
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Ukaimisho umefanyika kikamilifu!');";
	if ($_POST['kutoka'] == "kaimisha"){
	echo "window.location.href='kaimisha.php?ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id';";
	}
	echo "</script>";
 
 }//end kupeleka data bila faili
 
} else { ///verification code imekataa
    if ($_POST['kutoka'] == "rejesha_ukaimisho"){
	header("Location: rejesha_ukaimisho.php?badilisha=$badilisha&ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
