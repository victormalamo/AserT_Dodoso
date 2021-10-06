<?php 
require_once('../../Connections/connmnrtsafari.php'); 
//$form_data = json_decode(file_get_contents("php://input"));
session_start();
//$error = '';
//$message = '';
//$connection_error = '';

$output = array();
	$query_yanayoingia = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamepokelewa_mapokezi') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND ((hod_hou_status = '') || (hod_hou_status IS NULL)))"; 
	$rs_yanayoingia = mysqli_query($conntscpME, $query_yanayoingia);
	$idadi_yanayoingia = mysqli_num_rows($rs_yanayoingia);

	$query_yanafanyiwa_kazi = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamepokelewa_mapokezi') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND (hod_hou_status = 'yanafanyiwa_kazi_idarani'))";
	$rs_yanafanyiwa_kazi = mysqli_query($conntscpME, $query_yanafanyiwa_kazi);
	$idadi_yanafanyiwa_kazi = mysqli_num_rows($rs_yanafanyiwa_kazi);

	$query_to_ps = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamefanyiwa_kazi_idarani') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND (hod_hou_status = 'yamefanyiwa_kazi_idarani') AND ((ps_status = '') || (ps_status IS NULL) || (ps_status = 'yanafanyiwa_kazi_ps') || (ps_status = 'reply_to_not_vetted')))"; 
	$rs_to_ps = mysqli_query($conntscpME, $query_to_ps);
	$idadi_to_ps = mysqli_num_rows($rs_to_ps);
	
	$query_not_vetted = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamefanyiwa_kazi_idarani') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND (hod_hou_status = 'yamefanyiwa_kazi_idarani') AND (ps_status = 'not_vetted'))"; 
	$rs_not_vetted = mysqli_query($conntscpME, $query_not_vetted);
	$idadi_not_vetted = mysqli_num_rows($rs_not_vetted);
	
	$query_vetted = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamefanyiwa_kazi_idarani') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."') AND (hod_hou_status = 'yamefanyiwa_kazi_idarani') AND (ps_status = 'vetted'))"; 
	$rs_vetted = mysqli_query($conntscpME, $query_vetted);
	$idadi_vetted = mysqli_num_rows($rs_vetted);
		
	$query_tayari_kutumwa = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamefanyiwa_kazi_km') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."'))"; 
	$rs_tayari_kutumwa  = mysqli_query($conntscpME, $query_tayari_kutumwa);
	$idadi_tayari_kutumwa = mysqli_num_rows($rs_tayari_kutumwa);
	
	$query_yaliyojibiwa = "SELECT * FROM dawati_la_wateja WHERE (((general_status = 'yamejibiwa_mapokezi') || (general_status = 'mrejesho_mdau')) AND (div_unit_ID = '".$_SESSION['div_unit_ID']."'))"; 
	$rs_yaliyojibiwa = mysqli_query($conntscpME, $query_yaliyojibiwa);
	$idadi_yaliyojibiwa = mysqli_num_rows($rs_yaliyojibiwa);
	
	$query_mrejesho = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'mrejesho_mdau') AND (div_unit_ID = '".$_SESSION['div_unit_ID']."'))";  
	$rs_mrejesho = mysqli_query($conntscpME, $query_mrejesho);
	$idadi_mrejesho = mysqli_num_rows($rs_mrejesho);
	
	$output = array(
		'idadi_yanayoingia' => $idadi_yanayoingia,
		'idadi_yanafanyiwa_kazi' => $idadi_yanafanyiwa_kazi,
		'idadi_to_ps' => $idadi_to_ps,
		'idadi_not_vetted' => $idadi_not_vetted,
		'idadi_vetted' => $idadi_vetted,
		'idadi_tayari_kutumwa' => $idadi_tayari_kutumwa,
		'idadi_yaliyojibiwa' => $idadi_yaliyojibiwa,
		'idadi_mrejesho' => $idadi_mrejesho
	);
echo json_encode($output);
?>