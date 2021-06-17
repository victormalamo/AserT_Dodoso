<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

$output = [];

$query_ddahrm = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1001') AND (levelID = 'dahrm'))";
$results_ddahrm = mysqli_query($conntscpME, $query_ddahrm);
if (mysqli_num_rows($results_ddahrm) > 0) { $ddahrm_amesajiliwa = "true"; }else{ $ddahrm_amesajiliwa = "false"; }

$query_dpp = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1003') AND (levelID = 'hod'))";
$results_dpp = mysqli_query($conntscpME, $query_dpp);
if (mysqli_num_rows($results_dpp) > 0) { $dpp_amesajiliwa = "true"; }else{ $dpp_amesajiliwa = "false"; }

$query_dw = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '2001') AND (levelID = 'hod'))";
$results_dw = mysqli_query($conntscpME, $query_dw);
if (mysqli_num_rows($results_dw) > 0) { $dw_amesajiliwa = "true"; }else{ $dw_amesajiliwa = "false"; }

$query_dfob = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '3001') AND (levelID = 'hod'))";
$results_dfob = mysqli_query($conntscpME, $query_dfob);
if (mysqli_num_rows($results_dfob) > 0) { $dfob_amesajiliwa = "true"; }else{ $dfob_amesajiliwa = "false"; }

$query_dt = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '4001') AND (levelID = 'hod'))";
$results_dt = mysqli_query($conntscpME, $query_dt);
if (mysqli_num_rows($results_dt) > 0) { $dt_amesajiliwa = "true"; }else{ $dt_amesajiliwa = "false"; }

$query_doa = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '4002') AND (levelID = 'hod'))";
$results_doa = mysqli_query($conntscpME, $query_doa);
if (mysqli_num_rows($results_doa) > 0) { $doa_amesajiliwa = "true"; }else{ $doa_amesajiliwa = "false"; }

$query_hgcu = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1004') AND (levelID = 'hod'))";
$results_hgcu = mysqli_query($conntscpME, $query_hgcu);
if (mysqli_num_rows($results_hgcu) > 0) { $hgcu_amesajiliwa = "true"; }else{ $hgcu_amesajiliwa = "false"; }

$query_cia = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1005') AND (levelID = 'hod'))";
$results_cia = mysqli_query($conntscpME, $query_cia);
if (mysqli_num_rows($results_cia) > 0) { $cia_amesajiliwa = "true"; }else{ $cia_amesajiliwa = "false"; }

$query_hpmu = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1006') AND (levelID = 'pmu'))";
$results_hpmu = mysqli_query($conntscpME, $query_hpmu);
if (mysqli_num_rows($results_hpmu) > 0) { $hpmu_amesajiliwa = "true"; }else{ $hpmu_amesajiliwa = "false"; }

$query_hlu = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1007') AND (levelID = 'hod'))";
$results_hlu = mysqli_query($conntscpME, $query_hlu);
if (mysqli_num_rows($results_hlu) > 0) { $hlu_amesajiliwa = "true"; }else{ $hlu_amesajiliwa = "false"; }

$query_hict = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1008') AND (levelID = 'hod'))";
$results_hict = mysqli_query($conntscpME, $query_hict);
if (mysqli_num_rows($results_hict) > 0) { $hict_amesajiliwa = "true"; }else{ $hict_amesajiliwa = "false"; }

$query_hrtu = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1009') AND (levelID = 'hod'))";
$results_hrtu = mysqli_query($conntscpME, $query_hrtu);
if (mysqli_num_rows($results_hrtu) > 0) { $hrtu_amesajiliwa = "true"; }else{ $hrtu_amesajiliwa = "false"; }

$query_cca = "SELECT * FROM wafanyakazi WHERE ((div_unit_ID = '1002') AND (levelID = 'ca'))";
$results_cca = mysqli_query($conntscpME, $query_cca);
if (mysqli_num_rows($results_cca) > 0) { $cca_amesajiliwa = "true"; }else{ $cca_amesajiliwa = "false"; }

$output = array (
'ddahrm_amesajiliwa' => $ddahrm_amesajiliwa,
'dpp_amesajiliwa' => $dpp_amesajiliwa,
'dw_amesajiliwa' => $dw_amesajiliwa,
'dfob_amesajiliwa' => $dfob_amesajiliwa,
'dt_amesajiliwa' => $dt_amesajiliwa,
'doa_amesajiliwa' => $doa_amesajiliwa,
'cia_amesajiliwa' => $cia_amesajiliwa,
'hpmu_amesajiliwa' => $hpmu_amesajiliwa,
'hgcu_amesajiliwa' => $hgcu_amesajiliwa,
'hlu_amesajiliwa' => $hlu_amesajiliwa,
'hict_amesajiliwa' => $hict_amesajiliwa,
'hrtu_amesajiliwa' => $hrtu_amesajiliwa,
'cca_amesajiliwa' => $cca_amesajiliwa
);

echo json_encode($output);

?>  