<?php 

//$div_unit_ID = $_SESSION['div_unit_ID'];

//Idadi ya maombi (yaliyondani ya muda) yanayoingia toka kwa HOD_U

$query_rs_yanayoingia_ya_hod_u = sprintf("SELECT * FROM vibali WHERE (((`levelID`='dahrm') || (`levelID`='hod') || (`levelID`='hou')) AND (`general_status`='kipya') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC");
$rs_yanayoingia_ya_hod_u = mysqli_query($conntscpME, $query_rs_yanayoingia_ya_hod_u) or die(mysqli_error());
$row_rs_yanayoingia_ya_hod_u = mysqli_fetch_assoc($rs_yanayoingia_ya_hod_u);
$idadi_yanayoingia_ya_hod_u = mysqli_num_rows($rs_yanayoingia_ya_hod_u);

//Idadi ya maombi (yaliyondani ya muda) yanayoingia toka kwa HOS yamepita kwa hod_u

$query_rs_yanayoingia_ya_hos = sprintf("SELECT * FROM vibali WHERE ((`levelID` = 'hos') AND (`general_status` = 'kimepitishwa_hod_u') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC");
$rs_yanayoingia_ya_hos = mysqli_query($conntscpME, $query_rs_yanayoingia_ya_hos) or die(mysqli_error());
$row_rs_yanayoingia_ya_hos = mysqli_fetch_assoc($rs_yanayoingia_ya_hos);
$idadi_yanayoingia_ya_hos = mysqli_num_rows($rs_yanayoingia_ya_hos);

/*
//Idadi ya maombi (yaliyondani ya muda) yanayoingia toka kwa NU yamepita kwa hod_u

$query_rs_yanayoingia_ya_nu = sprintf("SELECT * FROM vibali WHERE ((`levelID` = 'nu') AND (`general_status` = 'kimepitishwa_hod_u') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC");
$rs_yanayoingia_ya_nu = mysqli_query($conntscpME, $query_rs_yanayoingia_ya_nu) or die(mysqli_error());
$row_rs_yanayoingia_ya_nu = mysqli_fetch_assoc($rs_yanayoingia_ya_nu);
$idadi_yanayoingia_ya_nu = mysqli_num_rows($rs_yanayoingia_ya_nu);
*/

$idadi_yanayoingia_ps = ($idadi_yanayoingia_ya_hod_u + $idadi_yanayoingia_ya_hos);

//Idadi ya maombi (yaliyondani ya muda) yaliyopitishwa na ps

$query_rs_yaliyopitishwa_ps = sprintf("SELECT * FROM vibali WHERE ((`general_status` = 'kimepitishwa_ps') AND (`zimebaki_siku` >= 0 ))");
$rs_yaliyopitishwa_ps = mysqli_query($conntscpME, $query_rs_yaliyopitishwa_ps) or die(mysqli_error());
$row_rs_yaliyopitishwa_ps = mysqli_fetch_assoc($rs_yaliyopitishwa_ps);
$idadi_yaliyopitishwa_ps = mysqli_num_rows($rs_yaliyopitishwa_ps);

//Idadi ya maombi (yaliyondani ya muda) yaliyokataliwa na ps

$query_rs_yaliyokataliwa_ps = sprintf("SELECT * FROM vibali WHERE ((`general_status` = 'kimekataliwa_ps') AND (`zimebaki_siku` >= 0 ))");
$rs_yaliyokataliwa_ps = mysqli_query($conntscpME, $query_rs_yaliyokataliwa_ps) or die(mysqli_error());
$row_rs_yaliyokataliwa_ps = mysqli_fetch_assoc($rs_yaliyokataliwa_ps);
$idadi_yaliyokataliwa_ps = mysqli_num_rows($rs_yaliyokataliwa_ps);

//Idadi ya maombi (yaliyondani ya muda) yenye maelekezo ya ps

$query_rs_maelekezo_ps = sprintf("SELECT * FROM vibali WHERE ((`general_status` = 'maelekezo_ps') AND (`zimebaki_siku` >= 0 ))");
$rs_maelekezo_ps = mysqli_query($conntscpME, $query_rs_maelekezo_ps) or die(mysqli_error());
$row_rs_maelekezo_ps = mysqli_fetch_assoc($rs_maelekezo_ps);
$idadi_maelekezo_ps = mysqli_num_rows($rs_maelekezo_ps);

//MASURUFU YANAYOINGIA KWA PS KWA AJILI YA UTHIBITISHO WA >=5m

$query_rs_masurufu_yanayoingia_kwa_ps = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.masurufu_id = masurufu.masurufu_id) AND ((masurufu.napendekeza_sipendekezi_hod_u IS NULL) || (masurufu.napendekeza_sipendekezi_hod_u = '')) AND (masurufu.to_km_napendekeza_apewe_sh > 0) AND ((masurufu.napendekeza_sipendekezi_ps IS NULL) || (masurufu.napendekeza_sipendekezi_ps = ''))) ORDER BY id DESC");
$rs_masurufu_yanayoingia_kwa_ps = mysqli_query($conntscpME, $query_rs_masurufu_yanayoingia_kwa_ps) or die(mysqli_error());
$row_rs_masurufu_yanayoingia_kwa_ps = mysqli_fetch_assoc($rs_masurufu_yanayoingia_kwa_ps);
$totalRows_rs_masurufu_yanayoingia_kwa_ps = mysqli_num_rows($rs_masurufu_yanayoingia_kwa_ps);

$idadi_masurufu_yanayoingia_ps = $totalRows_rs_masurufu_yanayoingia_kwa_ps;

//MASURUFU YALIYOKATALIWA

$query_rs_masurufu_yaliyokataliwa_kwa_ps = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.masurufu_id = masurufu.masurufu_id) AND ((masurufu.napendekeza_sipendekezi_hod_u IS NULL) || (masurufu.napendekeza_sipendekezi_hod_u = '')) AND (masurufu.to_km_napendekeza_apewe_sh > 0) AND (masurufu.napendekeza_sipendekezi_ps = 'sipendekezi')) ORDER BY id DESC");
$rs_masurufu_yaliyokataliwa_kwa_ps = mysqli_query($conntscpME, $query_rs_masurufu_yaliyokataliwa_kwa_ps) or die(mysqli_error());
$row_rs_masurufu_yaliyokataliwa_kwa_ps = mysqli_fetch_assoc($rs_masurufu_yaliyokataliwa_kwa_ps);
$totalRows_rs_masurufu_yaliyokataliwa_kwa_ps = mysqli_num_rows($rs_masurufu_yaliyokataliwa_kwa_ps);

$idadi_masurufu_yaliyokataliwa_ps = $totalRows_rs_masurufu_yaliyokataliwa_kwa_ps;

//MASURUFU YALIYOKUBALIWA

$query_rs_masurufu_yaliyopitishwa_kwa_ps = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.masurufu_id = masurufu.masurufu_id) AND ((masurufu.napendekeza_sipendekezi_hod_u IS NULL) || (masurufu.napendekeza_sipendekezi_hod_u = '')) AND (masurufu.to_km_napendekeza_apewe_sh > 0) AND (masurufu.napendekeza_sipendekezi_ps = 'napendekeza')) ORDER BY id DESC");
$rs_masurufu_yaliyopitishwa_kwa_ps = mysqli_query($conntscpME, $query_rs_masurufu_yaliyopitishwa_kwa_ps) or die(mysqli_error());
$row_rs_masurufu_yaliyopitishwa_kwa_ps = mysqli_fetch_assoc($rs_masurufu_yaliyopitishwa_kwa_ps);
$totalRows_rs_masurufu_yaliyopitishwa_kwa_ps = mysqli_num_rows($rs_masurufu_yaliyopitishwa_kwa_ps);

$idadi_masurufu_yaliyopitishwa_ps = $totalRows_rs_masurufu_yaliyopitishwa_kwa_ps;

//MASURUFU MAELEKEZO

$query_rs_masurufu_maelekezo_kwa_ps = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.masurufu_id = masurufu.masurufu_id) AND ((masurufu.napendekeza_sipendekezi_hod_u IS NULL) || (masurufu.napendekeza_sipendekezi_hod_u = '')) AND (masurufu.to_km_napendekeza_apewe_sh > 0) AND (masurufu.napendekeza_sipendekezi_ps = 'maelekezo')) ORDER BY id DESC");
$rs_masurufu_maelekezo_kwa_ps = mysqli_query($conntscpME, $query_rs_masurufu_maelekezo_kwa_ps) or die(mysqli_error());
$row_rs_masurufu_maelekezo_kwa_ps = mysqli_fetch_assoc($rs_masurufu_maelekezo_kwa_ps);
$totalRows_rs_masurufu_maelekezo_kwa_ps = mysqli_num_rows($rs_masurufu_maelekezo_kwa_ps);

$idadi_masurufu_maelekezo_ps = $totalRows_rs_masurufu_maelekezo_kwa_ps;

//Safari Ripoti

//Yanayoingia kutoka kwa HOD

$query_rs_zinazoingia_safari_ripoti_hod_u = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE (((vibali.levelID = 'dahrm') || (vibali.levelID = 'hod') || (vibali.levelID = 'hou')) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'mpya')) ORDER BY id DESC");
$rs_zinazoingia_safari_ripoti_hod_u = mysqli_query($conntscpME, $query_rs_zinazoingia_safari_ripoti_hod_u) or die(mysqli_error());
$row_rs_zinazoingia_safari_ripoti_hod_u = mysqli_fetch_assoc($rs_zinazoingia_safari_ripoti_hod_u);
$totalRows_rs_zinazoingia_safari_ripoti_hod_u = mysqli_num_rows($rs_zinazoingia_safari_ripoti_hod_u);

//Yanayoingia kutoka kwa HOS

$query_rs_zinazoingia_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.levelID = 'hos') AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_hod_u') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'nathibitisha') AND (safari_ripoti.nathibitisha_sithibitishi_ps IS NULL)) ORDER BY id DESC");
$rs_zinazoingia_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_zinazoingia_safari_ripoti_hos) or die(mysqli_error());
$row_rs_zinazoingia_safari_ripoti_hos = mysqli_fetch_assoc($rs_zinazoingia_safari_ripoti_hos);
$totalRows_rs_zinazoingia_safari_ripoti_hos = mysqli_num_rows($rs_zinazoingia_safari_ripoti_hos);

$idadi_safari_ripoti_zinazoingia_ps = ($totalRows_rs_zinazoingia_safari_ripoti_hod_u + $totalRows_rs_zinazoingia_safari_ripoti_hos);

//Uliyokataa kutoka kwa HOD

$query_rs_ulizokataa_safari_ripoti_hod_u = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE (((vibali.levelID = 'dahrm') || (vibali.levelID = 'hod') || (vibali.levelID = 'hou')) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_ps') AND (safari_ripoti.nathibitisha_sithibitishi_ps = 'sithibitishi')) ORDER BY id DESC");
$rs_ulizokataa_safari_ripoti_hod_u = mysqli_query($conntscpME, $query_rs_ulizokataa_safari_ripoti_hod_u) or die(mysqli_error());
$row_rs_ulizokataa_safari_ripoti_hod_u = mysqli_fetch_assoc($rs_ulizokataa_safari_ripoti_hod_u);
$totalRows_rs_ulizokataa_safari_ripoti_hod_u = mysqli_num_rows($rs_ulizokataa_safari_ripoti_hod_u);

//Uliyokataa kutoka kwa HOS

$query_rs_ulizokataa_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.levelID = 'hos') AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_ps') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'nathibitisha') AND (safari_ripoti.nathibitisha_sithibitishi_ps = 'sithibitishi')) ORDER BY id DESC");
$rs_ulizokataa_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_ulizokataa_safari_ripoti_hos) or die(mysqli_error());
$row_rs_ulizokataa_safari_ripoti_hos = mysqli_fetch_assoc($rs_ulizokataa_safari_ripoti_hos);
$totalRows_rs_ulizokataa_safari_ripoti_hos = mysqli_num_rows($rs_ulizokataa_safari_ripoti_hos);

$idadi_safari_ripoti_ulizokataa_ps = ($totalRows_rs_ulizokataa_safari_ripoti_hod_u + $totalRows_rs_ulizokataa_safari_ripoti_hos);

//Uliyokubali kutoka kwa HOD

$query_rs_ulizopitisha_safari_ripoti_hod_u = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE (((vibali.levelID = 'dahrm') || (vibali.levelID = 'hod') || (vibali.levelID = 'hou')) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_ps') AND (safari_ripoti.nathibitisha_sithibitishi_ps = 'nathibitisha')) ORDER BY id DESC");
$rs_ulizopitisha_safari_ripoti_hod_u = mysqli_query($conntscpME, $query_rs_ulizopitisha_safari_ripoti_hod_u) or die(mysqli_error());
$row_rs_ulizopitisha_safari_ripoti_hod_u = mysqli_fetch_assoc($rs_ulizopitisha_safari_ripoti_hod_u);
$totalRows_rs_ulizopitisha_safari_ripoti_hod_u = mysqli_num_rows($rs_ulizopitisha_safari_ripoti_hod_u);

//Uliyokubali kutoka kwa HOS

$query_rs_ulizopitisha_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.levelID = 'hos') AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_ps') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'nathibitisha') AND (safari_ripoti.nathibitisha_sithibitishi_ps = 'nathibitisha')) ORDER BY id DESC");
$rs_ulizopitisha_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_ulizopitisha_safari_ripoti_hos) or die(mysqli_error());
$row_rs_ulizopitisha_safari_ripoti_hos = mysqli_fetch_assoc($rs_ulizopitisha_safari_ripoti_hos);
$totalRows_rs_ulizopitisha_safari_ripoti_hos = mysqli_num_rows($rs_ulizopitisha_safari_ripoti_hos);

$idadi_safari_ripoti_ulizopitisha_ps = ($totalRows_rs_ulizopitisha_safari_ripoti_hod_u + $totalRows_rs_ulizopitisha_safari_ripoti_hos);

?>