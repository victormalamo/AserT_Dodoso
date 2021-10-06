<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

$output = [];

$query_w = "SELECT * FROM wafanyakazi WHERE levelID = 'w'";
$results_w = mysqli_query($conntscpME, $query_w);
if (mysqli_num_rows($results_w) > 0) { $w_amesajiliwa = "true"; }else{ $w_amesajiliwa = "false"; }

$query_nw = "SELECT * FROM wafanyakazi WHERE levelID = 'nw'";
$results_nw = mysqli_query($conntscpME, $query_nw);
if (mysqli_num_rows($results_nw) > 0) { $nw_amesajiliwa = "true"; }else{ $nw_amesajiliwa = "false"; }

$query_ps = "SELECT * FROM wafanyakazi WHERE levelID = 'ps'";
$results_ps = mysqli_query($conntscpME, $query_ps);
if (mysqli_num_rows($results_ps) > 0) { $ps_amesajiliwa = "true"; }else{ $ps_amesajiliwa = "false"; }

$query_dps = "SELECT * FROM wafanyakazi WHERE levelID = 'dps'";
$results_dps = mysqli_query($conntscpME, $query_dps);
if (mysqli_num_rows($results_dps) > 0) { $dps_amesajiliwa = "true"; }else{ $dps_amesajiliwa = "false"; }

$query_dahrm = "SELECT * FROM wafanyakazi WHERE levelID = 'dahrm'";
$results_dahrm = mysqli_query($conntscpME, $query_dahrm);
if (mysqli_num_rows($results_dahrm) > 0) { $dahrm_amesajiliwa = "true"; }else{ $dahrm_amesajiliwa = "false"; }

$query_ca = "SELECT * FROM wafanyakazi WHERE levelID = 'ca'";
$results_ca = mysqli_query($conntscpME, $query_ca);
if (mysqli_num_rows($results_ca) > 0) { $ca_amesajiliwa = "true"; }else{ $ca_amesajiliwa = "false"; }

$query_to = "SELECT * FROM wafanyakazi WHERE levelID = 'to'";
$results_to = mysqli_query($conntscpME, $query_to);
if (mysqli_num_rows($results_to) > 0) { $to_amesajiliwa = "true"; }else{ $to_amesajiliwa = "false"; }

$query_ra = "SELECT * FROM wafanyakazi WHERE levelID = 'ra'";
$results_ra = mysqli_query($conntscpME, $query_ra);
if (mysqli_num_rows($results_ra) > 0) { $ra_amesajiliwa = "true"; }else{ $ra_amesajiliwa = "false"; }

$query_tae = "SELECT * FROM wafanyakazi WHERE levelID = 'tae'";
$results_tae = mysqli_query($conntscpME, $query_tae);
if (mysqli_num_rows($results_tae) > 0) { $tae_amesajiliwa = "true"; }else{ $tae_amesajiliwa = "false"; }

$query_pmu = "SELECT * FROM wafanyakazi WHERE levelID = 'pmu'";
$results_pmu = mysqli_query($conntscpME, $query_pmu);
if (mysqli_num_rows($results_pmu) > 0) { $pmu_amesajiliwa = "true"; }else{ $pmu_amesajiliwa= "false"; }

$query_masijala = "SELECT * FROM wafanyakazi WHERE levelID = 'masijala'";
$results_masijala = mysqli_query($conntscpME, $query_masijala);
if (mysqli_num_rows($results_masijala) > 0) { $masijala_amesajiliwa = "true"; }else{ $masijala_amesajiliwa = "false"; }

//KAMA HOD wote wamesajiliwa
$query_hod_wote = "SELECT * FROM wafanyakazi WHERE ((levelID = 'hod') AND (div_au_unit = 'div'))";
$results_hod_wote = mysqli_query($conntscpME, $query_hod_wote);
if (mysqli_num_rows($results_hod_wote) == 5) { $hod_wote_wamesajiliwa = "true"; }else{ $hod_wote_wamesajiliwa = "false"; }
//KAMA HU wote wamesajiliwa
$query_hu_wote = "SELECT * FROM wafanyakazi WHERE ((levelID = 'hod') AND (div_au_unit = 'unit'))";
$results_hu_wote = mysqli_query($conntscpME, $query_hu_wote);
if (mysqli_num_rows($results_hu_wote) == 5) { $hu_wote_wamesajiliwa = "true"; }else{ $hu_wote_wamesajiliwa = "false"; }
//KAMA HOS wote wamesajiliwa
$query_hos_wote = "SELECT * FROM wafanyakazi WHERE levelID = 'hos'";
$results_hos_wote = mysqli_query($conntscpME, $query_hos_wote);
if (mysqli_num_rows($results_hos_wote) == 13) { $hos_wote_wamesajiliwa = "true"; }else{ $hos_wote_wamesajiliwa = "false"; }

$output = array (
'w_amesajiliwa' => $w_amesajiliwa,
'nw_amesajiliwa' => $nw_amesajiliwa,
'ps_amesajiliwa' => $ps_amesajiliwa,
'dps_amesajiliwa' => $dps_amesajiliwa,
'dahrm_amesajiliwa' => $dahrm_amesajiliwa,
'ca_amesajiliwa' => $ca_amesajiliwa,
'ra_amesajiliwa' => $ra_amesajiliwa,
'tae_amesajiliwa' => $tae_amesajiliwa,
'to_amesajiliwa' => $to_amesajiliwa,
'pmu_amesajiliwa' => $pmu_amesajiliwa,
'masijala_amesajiliwa' => $masijala_amesajiliwa,
'hod_wote_wamesajiliwa' => $hod_wote_wamesajiliwa,
'hu_wote_wamesajiliwa' => $hu_wote_wamesajiliwa,
'hos_wote_wamesajiliwa' => $hos_wote_wamesajiliwa
);

echo json_encode($output);

?>  