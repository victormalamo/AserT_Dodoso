<?php 

//KIBALI MAALUMU AU KAWAIDA 
//Jumla ya idadi ya siku zilizoombwa kwa vibali vilivyokwisha pitishwa na DAHRM (Tazama kama safari imekamilika na idadi ya siku???)
$financial_year_c = "FY_2018_2019"; //Mwaka husika
$general_status_c = "kimepitishwa_dahrm"; //idadi ya siku kwa vibali vilivyokwisha pitishwa
$mtumishi_ID = $_POST['mtumishi_ID'];

$query_rs_siku_za_mwaka = sprintf("SELECT SUM(duration) AS siku_za_mwaka FROM vibali WHERE (((`username` = '%s' ) AND (`financial_year` = '%s')) AND (`general_status` = '%s'))", $mtumishi_ID, $financial_year_c, $general_status_c );
$rs_siku_za_mwaka = mysqli_query($conntscpME, $query_rs_siku_za_mwaka) or die(mysqli_error());
$row_rs_siku_za_mwaka = mysqli_fetch_assoc($rs_siku_za_mwaka);
$idadi_safari_mwaka = mysqli_num_rows($rs_siku_za_mwaka);

//Wakati wa kufanya update ya kibali kipya tusijumlishe idadi ya siku zilizoombwa na kibali hichohicho awali ili kutoa aina sahihi ya kibali kulingana na siku zilizobaki kwa mwaka
if(($_POST['id'] != "") && ($_POST['last_edited'] != "")){ //??????
//Jumla ya idadi ya siku zilizoombwa kwa vibali vipya vilivyo tayari kwenye database...isipokuwa hiki kinachofanyiwa editing
$id = $_POST['id'];
$general_status_c = "kipya"; //********* Vipi kuhusu vibali vilivyopita muda, vilivyopitishwa kwenye ngazi tofauti isipokuwa DAHRM ????
$financial_year_c = "FY_2018_2019";
$mtumishi_ID = $_POST['mtumishi_ID'];

$query_rs_siku_vibali_vipya = sprintf("SELECT SUM(duration) AS siku_vibali_vipya FROM vibali WHERE ((`id` != '%s') AND (`username` = '%s' ) AND (`financial_year` = '%s') AND (`general_status` = '%s'))", $id, $mtumishi_ID, $financial_year_c, $general_status_c );
$rs_siku_vibali_vipya = mysqli_query($conntscpME, $query_rs_siku_vibali_vipya) or die(mysqli_error());
$row_rs_siku_vibali_vipya = mysqli_fetch_assoc($rs_siku_vibali_vipya);
$idadi_maombi_mapya_mwaka = mysqli_num_rows($rs_siku_vibali_vipya);
}
//else{
//Jumla ya idadi ya siku zilizoombwa kwa vibali vipya vilivyo tayari kwenye database...kwa kibali kipya
//$general_status_c = "kipya";
//$financial_year_c = "FY_2018_2019";
//$colname1_rs_siku_vibali_vipya = "1";
//if (isset($_SESSION['username'])) {
//  $colname1_rs_siku_vibali_vipya = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
//}
//
//$query_rs_siku_vibali_vipya = sprintf("SELECT SUM(duration) AS siku_vibali_vipya FROM vibali WHERE (((`username` = '%s' ) AND (`financial_year` = '%s')) AND (`general_status` = '%s'))", $colname1_rs_siku_vibali_vipya, $financial_year_c, $general_status_c );
//$rs_siku_vibali_vipya = mysqli_query($conntscpME, $query_rs_siku_vibali_vipya) or die(mysqli_error());
//$row_rs_siku_vibali_vipya = mysqli_fetch_assoc($rs_siku_vibali_vipya);
//$idadi_maombi_mapya_mwaka = mysqli_num_rows($rs_siku_vibali_vipya);
//}

//Tengeneza ujumbe peleka kwenye database (aina ya kibali na sababu ya kuwa hivyo)
$siku_kibali_kipya = $_POST['duration'];
$siku_za_mwaka = $row_rs_siku_za_mwaka['siku_za_mwaka'];
$siku_vibali_vipya = $row_rs_siku_vibali_vipya['siku_vibali_vipya'];
if($siku_za_mwaka <= 90){
	if(($siku_za_mwaka + $siku_vibali_vipya + $siku_kibali_kipya) <= 90){
		if($siku_kibali_kipya <= 14){ $aina_ya_kibali = "Kibali cha Kawaida";}else{ $aina_ya_kibali = "Kibali Maalumu"; $sababu_ya_aina = "Siku zilizoombwa zimezidi 14";}
	}else{ $aina_ya_kibali = "Kibali Maalumu"; $sababu_ya_aina = "Idadi ya siku za kusafiri FY 2018-2019 kwa vibali vipya na vilivyopita zimezidi 90";}
}else{ $aina_ya_kibali = "Kibali Maalumu"; $sababu_ya_aina = "Siku za kusafiri FY 2018-2019 zimezidi kwa siku ".($siku_za_mwaka - 90);}

//menu, form, print titles
if(($siku_za_mwaka + $siku_vibali_vipya) <= 90){
$menu_title_tuma_maombi = "Tuma Maombi";
$dataentryform_title_tuma_maombi= "Tuma Maombi Mapya";
$dataentryform_title_badili_maombi= "Badili Maombi Mapya";
}else{
$menu_title_tuma_maombi = "Maombi Maalumu";
$dataentryform_title_tuma_maombi = "Tuma Maombi Maalumu";
$dataentryform_title_badili_maombi = "Badili Maombi Maalumu";
}

///KIBALI CHA DHARURA
///Tofauti ya siku tarehe ya kuanza safari sDate na tarehe maombi yalipotumwa iwe ndogo zaidi ya 14 (0-6, 7-10, 11-13)
if (($_POST['sDate'] !="") AND ($_POST['submitDate'] !="")){
$sDate_c = $_POST['sDate'];
$submitDate_c = $_POST['submitDate'];
$t2 = strtotime($sDate_c);
$t1 = strtotime($submitDate_c);
$tofauti = (($t2 - $t1)/86400);
if(($tofauti) < 14){
	if(($tofauti) < 11){
		if(($tofauti) < 7){ $udharura = "Extremely Urgent"; $sababu_ya_udharura = "Safari in less than 7 days"; }else{ $udharura = "Very Ugent"; $sababu_ya_udharura = "Safari in less than 11 days";}
    }else{ $udharura = "Urgent";  $sababu_ya_udharura = "(Safari in less than 14 days";}
}else{ $udharura = ""; $sababu_ya_udharura = "";}
}
?>