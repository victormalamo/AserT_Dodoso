<?php include('ruhusa.php'); ?>
<!--?php require_once('Connections/connmnrtsafari.php'); ?-->
<?php

//DEFAULT FY
///////////////////////////////////////////
$query_defaultfy = sprintf("SELECT * FROM defaultyear WHERE year_id = 1");
$defaultfy = mysqli_query($conntscpME, $query_defaultfy) or die(mysqli_error());
$row_defaultfy = mysqli_fetch_assoc($defaultfy);
$_SESSION['financial_year'] = $row_defaultfy['year'];

$colname_rstersuser = "1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rstersuser = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
}
/////////////////////////////////////////////
$query_rstersuser = sprintf("SELECT * FROM ".$_SESSION['mtumiaji_tbl']." WHERE username = '%s'", $colname_rstersuser);
$rstersuser = mysqli_query($conntscpME, $query_rstersuser) or die(mysqli_error());
$row_rstersuser = mysqli_fetch_assoc($rstersuser);
$totalRows_rstersuser = mysqli_num_rows($rstersuser);

//Tazama Ukaimisho
/*
$query_rsukaimisho = sprintf("SELECT * FROM wafanyakazi WHERE deligated_to = '%s'", $colname_rstersuser);
$rsukaimisho = mysqli_query($conntscpME, $query_rsukaimisho) or die(mysqli_error());
$row_rsukaimisho = mysqli_fetch_assoc($rsukaimisho);
$totalRows_rsukaimisho = mysqli_num_rows($rsukaimisho);

if(($row_rsukaimisho['deligated_to'] != "") && ($row_rsukaimisho['uthibitisho'] == "")){ 
$_SESSION['ukaimisho'] = "ndio"; $_SESSION['uthibitisho'] = "bado"; 
}
if(($row_rsukaimisho['deligated_to'] != "") && ($row_rsukaimisho['uthibitisho'] != "")){ 
$_SESSION['ukaimisho'] = "ndio"; $_SESSION['uthibitisho'] = "tayari";
}
*/

//Jina la Idara/Kitengo
$div_unit_ID = $row_rstersuser['div_unit_ID'];
///////////////////////////////////////
$query_rsdiv_unit_name = sprintf("SELECT * FROM divisions_units WHERE div_unit_ID = '%s'", $div_unit_ID);
$rsdiv_unit_name = mysqli_query($conntscpME, $query_rsdiv_unit_name) or die(mysqli_error());
$row_rsdiv_unit_name = mysqli_fetch_assoc($rsdiv_unit_name);
$totalRows_rsdiv_unit_name = mysqli_num_rows($rsdiv_unit_name);

//Jina la Seksheni
$section_ID = $row_rstersuser['section_ID'];
/////////////////////////////////////
$query_rssection_name = sprintf("SELECT * FROM sections WHERE section_ID = '%s'", $section_ID);
$rssection_name = mysqli_query($conntscpME, $query_rssection_name) or die(mysqli_error());
$row_rssection_name = mysqli_fetch_assoc($rssection_name);
$totalRows_rssection_name = mysqli_num_rows($rssection_name);

//Jina la cheo
$cheo_ID = $row_rstersuser['cheo_ID'];
////////////////////////////////////
$query_rscheo_name = sprintf("SELECT * FROM vyeo WHERE cheo_ID = '%s'", $cheo_ID);
$rscheo_name = mysqli_query($conntscpME, $query_rscheo_name) or die(mysqli_error());
$row_rscheo_name = mysqli_fetch_assoc($rscheo_name);
$totalRows_rscheo_name = mysqli_num_rows($rscheo_name);

?>
<?php 

$_SESSION['id']=$row_rstersuser['id'];
$_SESSION['min_ID']="69";
$_SESSION['levelID']=$row_rstersuser['levelID'];
$_SESSION['levelID_isobadilika']=$row_rstersuser['levelID'];
$_SESSION['cheo_ID']=$row_rstersuser['cheo_ID'];
$_SESSION['jina_la_cheo']=$row_rscheo_name['jina_la_cheo'];
$_SESSION['div_unit_ID']=$row_rstersuser['div_unit_ID'];
$_SESSION['div_unit_name']=$row_rsdiv_unit_name['div_unit_kirefu'];
$_SESSION['div_unit']=$row_rsdiv_unit_name['div_unit'];
$_SESSION['div_au_unit']=$row_rsdiv_unit_name['div_au_unit'];
$_SESSION['section_ID']=$row_rstersuser['section_ID'];
$_SESSION['section_name']=$row_rssection_name['section_name_kirefu'];
$_SESSION['mob']=$row_rstersuser['mob'];
$_SESSION['e_add']=$row_rstersuser['e_add'];
$_SESSION['f_name']=$row_rstersuser['f_name'];
$_SESSION['m_name']=$row_rstersuser['m_name'];
$_SESSION['l_name']=$row_rstersuser['l_name'];
$_SESSION['pf_no']=$row_rstersuser['pf_no'];
$_SESSION['username']=$row_rstersuser['username'];
$_SESSION['ngazi_ya_mshahara']=$row_rstersuser['ngazi_ya_mshahara'];
$_SESSION['daraja_la_mshahara']=$row_rstersuser['daraja_la_mshahara'];
$_SESSION['active']=$row_rstersuser['active'];

if($_SESSION['active']=="yes"){
	if($_SESSION['levelID']=='nu') {
	header('Location: user/nu/index.php');
	die();
	}elseif($_SESSION['levelID']=='driver') {
	 header('Location: user/driver/index.php');
	die();
	}elseif($_SESSION['levelID']=='hos') {
	header('Location: user/hos/index.php');
	die();
	}elseif(($_SESSION['levelID']=='hod') || ($_SESSION['levelID']=='hou')) {
	header('Location: user/hod_hou/index.php');
	////header('Location: user/hod_hou_mdau/index.php');
	die();
	}elseif($_SESSION['levelID']=='dahrm') {
	header('Location: user/dahrm/index.php');
	die();
	}elseif($_SESSION['levelID']=='ca') {
	header('Location: user/ca/index.php');
	die();
	}elseif($_SESSION['levelID']=='ra') {
	header('Location: user/ra/index.php');
	die();
	}elseif($_SESSION['levelID']=='tae') {
	header('Location: user/tae/index.php');
	die();
	}elseif($_SESSION['levelID']=='pmu') {
	header('Location: user/pmu/index.php');
	die();
	}elseif($_SESSION['levelID']=='to') {
	header('Location: user/to/index.php');
	die();
	}elseif($_SESSION['levelID']=='masijala') {
	header('Location: user/masijala/index.php');
	die();
	}elseif($_SESSION['levelID']=='ps') {
	header('Location: user/ps/index.php');
	////header('Location: user/ps_mdau/index.php');
	die();
	}elseif($_SESSION['levelID']=='min') {
	header('Location: user/min/index.php');
	die();
	}elseif($_SESSION['levelID']=='msimamizi') {
	header('Location: user/msimamizi/index.php');
	die();
	}elseif($_SESSION['levelID']=='z_msimamizi_dawati') {
	header('Location: user/mdau_desk/index.php');
	die();
	}elseif($_SESSION['mtumiaji_tbl']=='afcg_registered_facilities') {
	header('Location: user/afcg/index.php');
	die();
	}elseif($_SESSION['mtumiaji_tbl']=='afcg_assessors') {
	header('Location: user/afcg_assessors/index.php');
	die();
	}else{
	////header("Location: $logoutAction");
	header('Location: login.php');	
	exit;
	}
}elseif($_SESSION['active']=="no"){
	header('Location: inactive.php');
	die();
}else{
	header('Location: login.php?cannot_redirect='.$defaultfy_check);
	die();
}
;?>
