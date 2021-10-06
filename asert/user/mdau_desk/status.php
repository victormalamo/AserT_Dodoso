<?php 
require_once('../../Connections/connmnrtsafari.php'); 
//$form_data = json_decode(file_get_contents("php://input"));

//$error = '';
//$message = '';
//$connection_error = '';

$output = array();
	$query_yanayoingia = "SELECT * FROM dawati_la_wateja WHERE (general_status = 'mapya')"; 
	$rs_yanayoingia = mysqli_query($conntscpME, $query_yanayoingia);
	$idadi_yanayoingia = mysqli_num_rows($rs_yanayoingia);
	
	$query_idarani = "SELECT * FROM dawati_la_wateja WHERE (general_status = 'yamepokelewa_mapokezi')"; 
	$rs_idarani = mysqli_query($conntscpME, $query_idarani);
	$idadi_idarani = mysqli_num_rows($rs_idarani);
	
	$query_km = "SELECT * FROM dawati_la_wateja WHERE (general_status = 'yamefanyiwa_kazi_idarani')"; 
	$rs_km = mysqli_query($conntscpME, $query_km);
	$idadi_km = mysqli_num_rows($rs_km);
	
	$query_tayari_kujibiwa = "SELECT * FROM dawati_la_wateja WHERE (general_status = 'yamefanyiwa_kazi_km')"; 
	$rs_tayari_kujibiwa = mysqli_query($conntscpME, $query_tayari_kujibiwa);
	$idadi_tayari_kujibiwa = mysqli_num_rows($rs_tayari_kujibiwa);
	
	$query_yaliyojibiwa = "SELECT * FROM dawati_la_wateja WHERE ((general_status = 'yamejibiwa_mapokezi') || (general_status = 'mrejesho_mdau'))"; 
	$rs_yaliyojibiwa = mysqli_query($conntscpME, $query_yaliyojibiwa);
	$idadi_yaliyojibiwa = mysqli_num_rows($rs_yaliyojibiwa);
	
	$query_mrejesho = "SELECT * FROM dawati_la_wateja WHERE (general_status = 'mrejesho_mdau')"; 
	$rs_mrejesho = mysqli_query($conntscpME, $query_mrejesho);
	$idadi_mrejesho = mysqli_num_rows($rs_mrejesho);
	
	$output = array(
		'idadi_yanayoingia' => $idadi_yanayoingia,
		'idadi_idarani' => $idadi_idarani,
		'idadi_km' => $idadi_km,
		'idadi_tayari_kujibiwa' => $idadi_tayari_kujibiwa,
		'idadi_yaliyojibiwa' => $idadi_yaliyojibiwa,
		'idadi_mrejesho' => $idadi_mrejesho
	);
echo json_encode($output);
?>