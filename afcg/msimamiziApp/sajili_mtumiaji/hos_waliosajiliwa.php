<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

$output = [];

$query_ADHRM = "SELECT * FROM wafanyakazi WHERE ((section_ID = '100101') AND (levelID = 'hos'))";
$results_ADHRM = mysqli_query($conntscpME, $query_ADHRM);
if (mysqli_num_rows($results_ADHRM) > 0) { $ADHRM_amesajiliwa = "true"; }else{ $ADHRM_amesajiliwa = "false"; }
	$query_HRM = "SELECT * FROM wafanyakazi WHERE ((section_ID = '100102') AND (levelID = 'hos'))";
	$results_HRM = mysqli_query($conntscpME, $query_HRM);
	if (mysqli_num_rows($results_HRM) > 0) { $HRM_amesajiliwa = "true"; }else{ $HRM_amesajiliwa = "false"; }
		//DAHRM Sections
		$query_DAHRM = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1001') AND (levelID = 'hos'))";
		$results_DAHRM = mysqli_query($conntscpME, $query_DAHRM);
		if (mysqli_num_rows($results_DAHRM) == 2) { $DAHRM_sections_zimesajiliwa_zote = "true"; }else{ $DAHRM_sections_zimesajiliwa_zote = "false"; }

$query_PP = "SELECT * FROM wafanyakazi WHERE ((section_ID = '100301') AND (levelID = 'hos'))";
$results_PP = mysqli_query($conntscpME, $query_PP);
if (mysqli_num_rows($results_PP) > 0) { $PP_amesajiliwa = "true"; }else{ $PP_amesajiliwa = "false"; }
	$query_ME = "SELECT * FROM wafanyakazi WHERE ((section_ID = '100302') AND (levelID = 'hos'))";
	$results_ME = mysqli_query($conntscpME, $query_ME);
	if (mysqli_num_rows($results_ME) > 0) { $ME_amesajiliwa = "true"; }else{ $ME_amesajiliwa = "false"; }
		//DPP Sections
		$query_DPP = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1003') AND (levelID = 'hos'))";
		$results_DPP = mysqli_query($conntscpME, $query_DPP);
		if (mysqli_num_rows($results_DPP) == 2) { $DPP_sections_zimesajiliwa_zote = "true"; }else{ $DPP_sections_zimesajiliwa_zote = "false"; }


$query_WD = "SELECT * FROM wafanyakazi WHERE ((section_ID = '200101') AND (levelID = 'hos'))";
$results_WD = mysqli_query($conntscpME, $query_WD);
if (mysqli_num_rows($results_WD) > 0) { $WD_amesajiliwa = "true"; }else{ $WD_amesajiliwa = "false"; }
	$query_WU = "SELECT * FROM wafanyakazi WHERE ((section_ID = '200102') AND (levelID = 'hos'))";
	$results_WU = mysqli_query($conntscpME, $query_WU);
	if (mysqli_num_rows($results_WU) > 0) { $WU_amesajiliwa = "true"; }else{ $WU_amesajiliwa = "false"; }
		$query_APO = "SELECT * FROM wafanyakazi WHERE ((section_ID = '200103') AND (levelID = 'hos'))";
		$results_APO = mysqli_query($conntscpME, $query_APO);
		if (mysqli_num_rows($results_APO) > 0) { $APO_amesajiliwa = "true"; }else{ $APO_amesajiliwa = "false"; }
			//DW SECTIONS
			$query_DW_sections = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '2001') AND (levelID = 'hos'))";
			$results_DW_sections = mysqli_query($conntscpME, $query_DW_sections);
			if (mysqli_num_rows($results_DW_sections) == 3) { $DW_sections_zimesajiliwa_zote = "true"; }else{ $DW_sections_zimesajiliwa_zote = "false"; }

$query_FD = "SELECT * FROM wafanyakazi WHERE ((section_ID = '300101') AND (levelID = 'hos'))";
$results_FD = mysqli_query($conntscpME, $query_FD);
if (mysqli_num_rows($results_FD) > 0) { $FD_amesajiliwa = "true"; }else{ $FD_amesajiliwa = "false"; }
	$query_BD = "SELECT * FROM wafanyakazi WHERE ((section_ID = '300102') AND (levelID = 'hos'))";
	$results_BD = mysqli_query($conntscpME, $query_BD);
	if (mysqli_num_rows($results_BD) > 0) { $BD_amesajiliwa = "true"; }else{ $BD_amesajiliwa = "false"; }
		//DFoB Sections
		$query_DFoB = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '3001') AND (levelID = 'hos'))";
		$results_DFoB = mysqli_query($conntscpME, $query_DFoB);
		if (mysqli_num_rows($results_DFoB) == 2) { $DFoB_sections_zimesajiliwa_zote = "true"; }else{ $DFoB_sections_zimesajiliwa_zote = "false"; }

$query_TD = "SELECT * FROM wafanyakazi WHERE ((section_ID = '400101') AND (levelID = 'hos'))";
$results_TD = mysqli_query($conntscpME, $query_TD);
if (mysqli_num_rows($results_TD) > 0) { $TD_amesajiliwa = "true"; }else{ $TD_amesajiliwa = "false"; }
	$query_LC = "SELECT * FROM wafanyakazi WHERE ((section_ID = '400102') AND (levelID = 'hos'))";
	$results_LC = mysqli_query($conntscpME, $query_LC);
	if (mysqli_num_rows($results_LC) > 0) { $LC_amesajiliwa = "true"; }else{ $LC_amesajiliwa = "false"; }
			//DT Sections
			$query_DT = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '4001') AND (levelID = 'hos'))";
			$results_DT = mysqli_query($conntscpME, $query_DT);
			if (mysqli_num_rows($results_DT) == 2) { $DT_sections_zimesajiliwa_zote = "true"; }else{ $DT_sections_zimesajiliwa_zote = "false"; }


$query_CT = "SELECT * FROM wafanyakazi WHERE ((section_ID = '400201') AND (levelID = 'hos'))";
$results_CT = mysqli_query($conntscpME, $query_CT);
if (mysqli_num_rows($results_CT) > 0) { $CT_amesajiliwa = "true"; }else{ $CT_amesajiliwa = "false"; }
	$query_CHDC = "SELECT * FROM wafanyakazi WHERE ((section_ID = '400202') AND (levelID = 'hos'))";
	$results_CHDC = mysqli_query($conntscpME, $query_CHDC);
	if (mysqli_num_rows($results_CHDC) > 0) { $CHDC_amesajiliwa = "true"; }else{ $CHDC_amesajiliwa = "false"; }
				//DOA Sections
				$query_DOA = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '4002') AND (levelID = 'hos'))";
				$results_DOA = mysqli_query($conntscpME, $query_DOA);
				if (mysqli_num_rows($results_DOA) == 2) { $DOA_sections_zimesajiliwa_zote = "true"; }else{ $DOA_sections_zimesajiliwa_zote = "false"; }

$output = array (
'ADHRM_amesajiliwa' => $ADHRM_amesajiliwa,
'HRM_amesajiliwa' => $HRM_amesajiliwa,
'PP_amesajiliwa' => $PP_amesajiliwa,
'ME_amesajiliwa' => $ME_amesajiliwa,
'WD_amesajiliwa' => $WD_amesajiliwa,
'WU_amesajiliwa' => $WU_amesajiliwa,
'FD_amesajiliwa' => $FD_amesajiliwa,
'BD_amesajiliwa' => $BD_amesajiliwa,
'APO_amesajiliwa' => $APO_amesajiliwa,
'TD_amesajiliwa' => $TD_amesajiliwa,
'LC_amesajiliwa' => $LC_amesajiliwa,
'CT_amesajiliwa' => $CT_amesajiliwa,
'CHDC_amesajiliwa' => $CHDC_amesajiliwa,
//Tazama kama zimesajiliwa zote
'DAHRM_sections_zimesajiliwa_zote' => $DAHRM_sections_zimesajiliwa_zote,
'DPP_sections_zimesajiliwa_zote' => $DPP_sections_zimesajiliwa_zote,
'DW_sections_zimesajiliwa_zote' => $DW_sections_zimesajiliwa_zote,
'DFoB_sections_zimesajiliwa_zote' => $DFoB_sections_zimesajiliwa_zote,
'DT_sections_zimesajiliwa_zote' => $DT_sections_zimesajiliwa_zote,
'DOA_sections_zimesajiliwa_zote' => $DOA_sections_zimesajiliwa_zote
);

echo json_encode($output);

?>  