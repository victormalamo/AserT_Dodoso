<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php


$verif_box = $_POST["verif_box"];
$kibali_id = $_POST['kibali_id'];
$ukaimisho_id = $_POST['ukaimisho_id'];

$old_kiambata = "ukaimisho/".$_SESSION['username']."/".$_POST['old_kiambata'];
unlink($old_kiambata); //Futa faili la zamani
$jina_kiambata = $_POST['jina_kiambata'];
$kiambata_c = $_FILES['kiambata']['name'];

$aliyekaimishwa_username = $_POST['username'];
$kazi_zilizokaimishwa = $_POST['kazi_zilizokaimishwa'];

//levelID ya aliyekaimishwa


$query_rs_aliyekaimishwa = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $aliyekaimishwa_username);
$rs_aliyekaimishwa = mysqli_query($conntscpME, $query_rs_aliyekaimishwa) or die(mysqli_error());
$row_rs_aliyekaimishwa = mysqli_fetch_assoc($rs_aliyekaimishwa);
$aliyekaimishwa_levelID = $row_rs_aliyekaimishwa['levelID'];
//$totalRows_rs_aliyekaimishwa = mysqli_num_rows($rs_aliyekaimishwa);

//End levelID ya aliyekaimishwa

$badilisha = $_POST['badilisha'];

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){ //Kama verification code zimefanana

if(($jina_kiambata != "") && ($kiambata_c != "")){ //kupeleka faili kwenye server lazima liwepo 
//if($jina_kiambata != ""){ //kupeleka faili kwenye server lazima liwepo

 $kiambata = "ukaimisho_".rand(1000,100000)."-".$_FILES['kiambata']['name'];
 $kiambata_loc = $_FILES['kiambata']['tmp_name']; //wakati wa kulifuata
 $kiambata_size = $_FILES['kiambata']['size'];
 $kiambata_type = $_FILES['kiambata']['type'];
 
 $folder="ukaimisho/".$_SESSION["username"]."/"; 
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
	if ($_POST['ukaimisho_id'] == "") {
	//ingiza rekodi mpya kwenye masurufu table
	  $insertSQL = sprintf("INSERT INTO ukaimisho (ukaimisho_id, kibali_id, aliyekaimisha_username, kazi_zilizokaimishwa, aliyekaimishwa_username, cheo_alichokaimishwa, aliyekaimishwa_levelID, div_unit_ID, section_ID, tarehe_ya_kuanzia, tarehe_ya_kukabidhi, muda_wa_ukaimisho, jina_kiambata, final_kiambata, submitDate)
	  VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_SESSION['username'], "text"),
					   GetSQLValueString($_POST['kazi_zilizokaimishwa'], "text"),					   
					   GetSQLValueString($_POST['username'], "text"),					   
					   GetSQLValueString($_SESSION['levelID'], "text"),
					   GetSQLValueString($aliyekaimishwa_levelID, "text"),
					   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
					   GetSQLValueString($_SESSION['section_ID'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kuanzia'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kukabidhi'], "text"),
					   GetSQLValueString($_POST['muda_wa_ukaimisho'], "text"),
					   GetSQLValueString($_POST['jina_kiambata'], "text"),
					   GetSQLValueString($final_kiambata, "text"),
					   GetSQLValueString($_POST['submitDate'], "text"));
      
      $Result1 = mysqli_query($conntscpME, $insertSQL) or die(mysqli_error());
	  
	//Rekodi ya mwisho 
	$colname1_rs_recent_ukaimisho = "1";
	if (isset($_SESSION['username'])) {
	  $colname1_rs_recent_ukaimisho = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
	}
	
	$query_rs_recent_ukaimisho_id = sprintf("SELECT MAX(ukaimisho_id) AS ukaimisho_id FROM ukaimisho WHERE (`aliyekaimisha_username` = '%s' )", $colname1_rs_recent_ukaimisho);
	$rs_recent_ukaimisho_id = mysqli_query($conntscpME, $query_rs_recent_ukaimisho_id) or die(mysqli_error());
	$row_rs_recent_ukaimisho_id = mysqli_fetch_assoc($rs_recent_ukaimisho_id);
	$ukaimisho_id = $row_rs_recent_ukaimisho_id['ukaimisho_id'];
	  
	  //update wafanyakazi table anayedeligetiwa
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID=%s, cur_del_div_unit_ID=%s, cur_del_section_ID=%s, ukaimisho_id=%s WHERE username=%s",
						   GetSQLValueString($_SESSION['levelID'], "text"),
						   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
						   GetSQLValueString($_SESSION['section_ID'], "text"),
						   GetSQLValueString($ukaimisho_id, "text"),
						   GetSQLValueString($_POST['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //update wafanyakazi table anayedeligate
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to=%s WHERE username=%s",
						   GetSQLValueString($_POST['username'], "text"),
						   GetSQLValueString($_SESSION['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //update vibali table
	  $updateSQL = sprintf("UPDATE vibali SET ukaimisho_id=%s WHERE id=%s",
						   GetSQLValueString($ukaimisho_id, "text"),
						   GetSQLValueString($kibali_id, "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	}elseif($_POST['ukaimisho_id'] != "") {
		
	//update rekodi kwenye masurufu table, masurufu_id kwenye vibali table haiwezi kubadilika
	  $updateSQL = sprintf("UPDATE ukaimisho SET kibali_id=%s, aliyekaimisha_username=%s, kazi_zilizokaimishwa=%s, aliyekaimishwa_username=%s, cheo_alichokaimishwa=%s, aliyekaimishwa_levelID=%s, div_unit_ID=%s, section_ID=%s, tarehe_ya_kuanzia=%s, tarehe_ya_kukabidhi=%s, muda_wa_ukaimisho=%s, jina_kiambata=%s, final_kiambata=%s, submitDate=%s
	  WHERE ukaimisho_id=%s",
					   GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_SESSION['username'], "text"),
					   GetSQLValueString($_POST['kazi_zilizokaimishwa'], "text"),					   
					   GetSQLValueString($_POST['username'], "text"),					   
					   GetSQLValueString($_SESSION['levelID'], "text"),
					   GetSQLValueString($aliyekaimishwa_levelID, "text"),
					   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
					   GetSQLValueString($_SESSION['section_ID'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kuanzia'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kukabidhi'], "text"),
					   GetSQLValueString($_POST['muda_wa_ukaimisho'], "text"),
					   GetSQLValueString($_POST['jina_kiambata'], "text"),
					   GetSQLValueString($final_kiambata, "text"),
					   GetSQLValueString($_POST['submitDate'], "text"),
					   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa kwa mfanyakazi aliyetangulia
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID = NULL, cur_del_div_unit_ID = NULL, cur_del_section_ID = NULL, ukaimisho_id = NULL WHERE ukaimisho_id=%s",
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID=%s, cur_del_div_unit_ID=%s, cur_del_section_ID=%s, ukaimisho_id=%s WHERE username=%s",
						   GetSQLValueString($_SESSION['levelID'], "text"),
						   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
						   GetSQLValueString($_SESSION['section_ID'], "text"),
						   GetSQLValueString($_POST['ukaimisho_id'], "text"),
						   GetSQLValueString($_POST['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to=%s WHERE username=%s",
						   GetSQLValueString($_POST['username'], "text"),
						   GetSQLValueString($_SESSION['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
  	}
	
  
}
	
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	$_SESSION['done']="yes";
	echo "<script>";
	echo "alert('Ukaimisho umefanywa kikamilifu!');";
	if ($_POST['kutoka'] == "kaimisha"){
	echo "window.location.href='kaimisha.php?ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id';";
	}
	echo "</script>";

} 
else  ///faili limekataa kwa sababu ya tatizo la mfumo
{
  ?>
  <?php echo "<script>";
  echo "alert('Kuna tatizo kwenye kuambatanisha faili');";
  echo "window.location.href='kaimisha.php?kiambata_fail&badilisha=$badilisha&ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id'";
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


	//Kama ni masurufu mapya yanainginzwa ingiza rekodi mpya kwenye masurufu table and update masurufu_id kwenye vibali table
	if ($_POST['ukaimisho_id'] == "") {
	//ingiza rekodi mpya kwenye masurufu table
	  $insertSQL = sprintf("INSERT INTO ukaimisho (ukaimisho_id, kibali_id, aliyekaimisha_username, kazi_zilizokaimishwa, aliyekaimishwa_username, cheo_alichokaimishwa, aliyekaimishwa_levelID, div_unit_ID, section_ID, tarehe_ya_kuanzia, tarehe_ya_kukabidhi, muda_wa_ukaimisho, submitDate)
	  VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_SESSION['username'], "text"),
					   GetSQLValueString($_POST['kazi_zilizokaimishwa'], "text"),					   
					   GetSQLValueString($_POST['username'], "text"),					   
					   GetSQLValueString($_SESSION['levelID'], "text"),
					   GetSQLValueString($aliyekaimishwa_levelID, "text"),
					   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
					   GetSQLValueString($_SESSION['section_ID'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kuanzia'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kukabidhi'], "text"),
					   GetSQLValueString($_POST['muda_wa_ukaimisho'], "text"),
					   GetSQLValueString($_POST['submitDate'], "text"));
      
      $Result1 = mysqli_query($conntscpME, $insertSQL) or die(mysqli_error());
	  
	   //Rekodi ya mwisho 
	$colname1_rs_recent_ukaimisho = "1";
	if (isset($_SESSION['username'])) {
	  $colname1_rs_recent_ukaimisho = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
	}
	
	$query_rs_recent_ukaimisho_id = sprintf("SELECT MAX(ukaimisho_id) AS ukaimisho_id FROM ukaimisho WHERE (`aliyekaimisha_username` = '%s' )", $colname1_rs_recent_ukaimisho);
	$rs_recent_ukaimisho_id = mysqli_query($conntscpME, $query_rs_recent_ukaimisho_id) or die(mysqli_error());
	$row_rs_recent_ukaimisho_id = mysqli_fetch_assoc($rs_recent_ukaimisho_id);
	$ukaimisho_id = $row_rs_recent_ukaimisho_id['ukaimisho_id'];
	  
	   //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID=%s, cur_del_div_unit_ID=%s, cur_del_section_ID=%s , ukaimisho_id=%s WHERE username=%s",
						   GetSQLValueString($_SESSION['levelID'], "text"),
						   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
						   GetSQLValueString($_SESSION['section_ID'], "text"),
						   GetSQLValueString($ukaimisho_id, "text"),
						   GetSQLValueString($_POST['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to=%s WHERE username=%s",
						   GetSQLValueString($_POST['username'], "text"),
						   GetSQLValueString($_SESSION['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //update vibali table
	  $updateSQL = sprintf("UPDATE vibali SET ukaimisho_id=%s WHERE id=%s",
						   GetSQLValueString($ukaimisho_id, "text"),
						   GetSQLValueString($kibali_id, "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	 }elseif($_POST['ukaimisho_id'] != "") {
		
	//update rekodi kwenye masurufu table, masurufu_id kwenye vibali table haiwezi kubadilika
	  $updateSQL = sprintf("UPDATE ukaimisho SET kibali_id=%s, aliyekaimisha_username=%s, kazi_zilizokaimishwa=%s, aliyekaimishwa_username=%s, cheo_alichokaimishwa=%s, aliyekaimishwa_levelID=%s, div_unit_ID=%s, section_ID=%s, tarehe_ya_kuanzia=%s, tarehe_ya_kukabidhi=%s, muda_wa_ukaimisho=%s, submitDate=%s
	  WHERE ukaimisho_id=%s",
					   GetSQLValueString($_POST['kibali_id'], "text"),
					   GetSQLValueString($_SESSION['username'], "text"),
					   GetSQLValueString($_POST['kazi_zilizokaimishwa'], "text"),					   
					   GetSQLValueString($_POST['username'], "text"),					   
					   GetSQLValueString($_SESSION['levelID'], "text"),
					   GetSQLValueString($aliyekaimishwa_levelID, "text"),
					   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
					   GetSQLValueString($_SESSION['section_ID'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kuanzia'], "text"),
					   GetSQLValueString($_POST['tarehe_ya_kukabidhi'], "text"),
					   GetSQLValueString($_POST['muda_wa_ukaimisho'], "text"),
					   GetSQLValueString($_POST['submitDate'], "text"),
					   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	  //Futa kwa mfanyakazi aliyetangulia
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID = NULL, cur_del_div_unit_ID = NULL, cur_del_section_ID = NULL, ukaimisho_id = NULL WHERE ukaimisho_id=%s",
						   GetSQLValueString($_POST['ukaimisho_id'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  
	   //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET cur_del_levelID=%s, cur_del_div_unit_ID=%s, cur_del_section_ID=%s, ukaimisho_id=%s WHERE username=%s",
						   GetSQLValueString($_SESSION['levelID'], "text"),
						   GetSQLValueString($_SESSION['div_unit_ID'], "text"),
						   GetSQLValueString($_SESSION['section_ID'], "text"),
						   GetSQLValueString($_POST['ukaimisho_id'], "text"),
						   GetSQLValueString($_POST['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
	  //update wafanyakazi table
	  $updateSQL = sprintf("UPDATE wafanyakazi SET deligated_to=%s WHERE username=%s",
						   GetSQLValueString($_POST['username'], "text"),
						   GetSQLValueString($_SESSION['username'], "text"));
	  
	  $Result1 = mysqli_query($conntscpME, $updateSQL) or die(mysqli_error());
  	}
	  
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
    if ($_POST['kutoka'] == "kaimisha"){
	header("Location: kaimisha.php?badilisha=$badilisha&ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id&wrong_code=true");
	}
	$_SESSION['done']="wrong_code";
	exit;
}
?>
