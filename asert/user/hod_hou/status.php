<?php 

$div_unit_ID = $_SESSION['div_unit_ID'];

//Idadi ya maombi (yaliyondani ya muda) yanayoingia toka kwa HOS

$query_rs_yanayoingia_ya_hos = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND (`levelID`='hos') AND (`general_status`='kipya') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $div_unit_ID);
$rs_yanayoingia_ya_hos = mysqli_query($conntscpME, $query_rs_yanayoingia_ya_hos) or die(mysqli_error());
$row_rs_yanayoingia_ya_hos = mysqli_fetch_assoc($rs_yanayoingia_ya_hos);
$idadi_yanayoingia_ya_hos = mysqli_num_rows($rs_yanayoingia_ya_hos);

//Idadi ya maombi (yaliyondani ya muda) yanayoingia toka kwa NU na/au kupitia kwa hos

$query_rs_yanayoingia_ya_nu = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND (`levelID` = 'nu') AND (`general_status` = 'kipya') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $div_unit_ID);
$rs_yanayoingia_ya_nu = mysqli_query($conntscpME, $query_rs_yanayoingia_ya_nu) or die(mysqli_error());
$row_rs_yanayoingia_ya_nu = mysqli_fetch_assoc($rs_yanayoingia_ya_nu);
$idadi_yanayoingia_ya_nu = mysqli_num_rows($rs_yanayoingia_ya_nu);

$idadi_yanayoingia_hod_u = ($idadi_yanayoingia_ya_hos + $idadi_yanayoingia_ya_nu);

//Idadi ya maombi (yaliyondani ya muda) yaliyopitishwa na HOD_U

$query_rs_yaliyopitishwa_hod_u = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND ((`general_status` = 'kimepitishwa_hod_u') || (`general_status` = 'kimepitishwa_dahrm')) AND (`zimebaki_siku` >= 0 ))", $div_unit_ID);
$rs_yaliyopitishwa_hod_u = mysqli_query($conntscpME, $query_rs_yaliyopitishwa_hod_u) or die(mysqli_error());
$row_rs_yaliyopitishwa_hod_u = mysqli_fetch_assoc($rs_yaliyopitishwa_hod_u);
$idadi_yaliyopitishwa_hod_u = mysqli_num_rows($rs_yaliyopitishwa_hod_u);

//Idadi ya maombi (yaliyondani ya muda) yaliyokataliwa na HOD_U

$query_rs_yaliyokataliwa_hod_u = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND ((`general_status` = 'kimekataliwa_hod_u') || (`general_status` = 'kimekataliwa_dahrm')) AND (`zimebaki_siku` >= 0 ))", $div_unit_ID);
$rs_yaliyokataliwa_hod_u = mysqli_query($conntscpME, $query_rs_yaliyokataliwa_hod_u) or die(mysqli_error());
$row_rs_yaliyokataliwa_hod_u = mysqli_fetch_assoc($rs_yaliyokataliwa_hod_u);
$idadi_yaliyokataliwa_hod_u = mysqli_num_rows($rs_yaliyokataliwa_hod_u);

//Idadi ya maombi (yaliyondani ya muda) yenye maelekezo ya HOD_U

$query_rs_maelekezo_hod_u = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND ((`general_status` = 'maelekezo_hod_u') || (`general_status` = 'maelekezo_dahrm')) AND (`zimebaki_siku` >= 0 ))", $div_unit_ID);
$rs_maelekezo_hod_u = mysqli_query($conntscpME, $query_rs_maelekezo_hod_u) or die(mysqli_error());
$row_rs_maelekezo_hod_u = mysqli_fetch_assoc($rs_maelekezo_hod_u);
$idadi_maelekezo_hod_u = mysqli_num_rows($rs_maelekezo_hod_u);

//MASURUFU MAPYA

//KUTOKA KWA NU KUPITIA KWA RA

$query_rs_masurufu_yanayoingia_ra_nu = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'mapya')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_yanayoingia_ra_nu = mysqli_query($conntscpME, $query_rs_masurufu_yanayoingia_ra_nu) or die(mysqli_error());
$row_rs_masurufu_yanayoingia_ra_nu = mysqli_fetch_assoc($rs_masurufu_yanayoingia_ra_nu);
$totalRows_rs_masurufu_yanayoingia_ra_nu = mysqli_num_rows($rs_masurufu_yanayoingia_ra_nu);

//KUTOKA KWA HOS KUPITIA KWA RA

$query_rs_masurufu_yanayoingia_ra_hos = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'mapya')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_yanayoingia_ra_hos = mysqli_query($conntscpME, $query_rs_masurufu_yanayoingia_ra_hos) or die(mysqli_error());
$row_rs_masurufu_yanayoingia_ra_hos = mysqli_fetch_assoc($rs_masurufu_yanayoingia_ra_hos);
$totalRows_rs_masurufu_yanayoingia_ra_hos = mysqli_num_rows($rs_masurufu_yanayoingia_ra_hos);

//KUTOKA KWA HOD_U KUPITIA KWA RA

$query_rs_masurufu_yanayoingia_ra_hod_u = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' ) || (vibali.levelID = 'dahrm' )) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'mapya')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_yanayoingia_ra_hod_u = mysqli_query($conntscpME, $query_rs_masurufu_yanayoingia_ra_hod_u) or die(mysqli_error());
$row_rs_masurufu_yanayoingia_ra_hod_u = mysqli_fetch_assoc($rs_masurufu_yanayoingia_ra_hod_u);
$totalRows_rs_masurufu_yanayoingia_ra_hod_u = mysqli_num_rows($rs_masurufu_yanayoingia_ra_hod_u);

$idadi_masurufu_yanayoingia_ra = ($totalRows_rs_masurufu_yanayoingia_ra_nu + $totalRows_rs_masurufu_yanayoingia_ra_hos + $totalRows_rs_masurufu_yanayoingia_ra_hod_u);

//ULIYOPENDEKEZA

//KUTOKA KWA NU KUPITIA KWA RA

$query_rs_masurufu_napendekeza_ra_nu = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'napendekeza')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_napendekeza_ra_nu = mysqli_query($conntscpME, $query_rs_masurufu_napendekeza_ra_nu) or die(mysqli_error());
$row_rs_masurufu_napendekeza_ra_nu = mysqli_fetch_assoc($rs_masurufu_napendekeza_ra_nu);
$totalRows_rs_masurufu_napendekeza_ra_nu = mysqli_num_rows($rs_masurufu_napendekeza_ra_nu);

//KUTOKA KWA HOS KUPITIA KWA RA

$query_rs_masurufu_napendekeza_ra_hos = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'napendekeza')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_napendekeza_ra_hos = mysqli_query($conntscpME, $query_rs_masurufu_napendekeza_ra_hos) or die(mysqli_error());
$row_rs_masurufu_napendekeza_ra_hos = mysqli_fetch_assoc($rs_masurufu_napendekeza_ra_hos);
$totalRows_rs_masurufu_napendekeza_ra_hos = mysqli_num_rows($rs_masurufu_napendekeza_ra_hos);

//KUTOKA KWA HOD_U KUPITIA KWA RA

$query_rs_masurufu_napendekeza_ra_hod_u = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'napendekeza')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_napendekeza_ra_hod_u = mysqli_query($conntscpME, $query_rs_masurufu_napendekeza_ra_hod_u) or die(mysqli_error());
$row_rs_masurufu_napendekeza_ra_hod_u = mysqli_fetch_assoc($rs_masurufu_napendekeza_ra_hod_u);
$totalRows_rs_masurufu_napendekeza_ra_hod_u = mysqli_num_rows($rs_masurufu_napendekeza_ra_hod_u);

$idadi_masurufu_napendekeza_ra = ($totalRows_rs_masurufu_napendekeza_ra_nu + $totalRows_rs_masurufu_napendekeza_ra_hos + $totalRows_rs_masurufu_napendekeza_ra_hod_u);

//USIYOPENDEKEZA

//KUTOKA KWA NU KUPITIA KWA RA

$query_rs_masurufu_sipendekezi_ra_nu = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'sipendekezi')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_sipendekezi_ra_nu = mysqli_query($conntscpME, $query_rs_masurufu_sipendekezi_ra_nu) or die(mysqli_error());
$row_rs_masurufu_sipendekezi_ra_nu = mysqli_fetch_assoc($rs_masurufu_sipendekezi_ra_nu);
$totalRows_rs_masurufu_sipendekezi_ra_nu = mysqli_num_rows($rs_masurufu_sipendekezi_ra_nu);

//KUTOKA KWA HOS KUPITIA KWA RA

$query_rs_masurufu_sipendekezi_ra_hos = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'sipendekezi')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_sipendekezi_ra_hos = mysqli_query($conntscpME, $query_rs_masurufu_sipendekezi_ra_hos) or die(mysqli_error());
$row_rs_masurufu_sipendekezi_ra_hos = mysqli_fetch_assoc($rs_masurufu_sipendekezi_ra_hos);
$totalRows_rs_masurufu_sipendekezi_ra_hos = mysqli_num_rows($rs_masurufu_sipendekezi_ra_hos);

//KUTOKA KWA HOD_U KUPITIA KWA RA

$query_rs_masurufu_sipendekezi_ra_hod_u = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_hod_u') AND (masurufu.napendekeza_sipendekezi_hod_u = 'sipendekezi')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_sipendekezi_ra_hod_u = mysqli_query($conntscpME, $query_rs_masurufu_sipendekezi_ra_hod_u) or die(mysqli_error());
$row_rs_masurufu_sipendekezi_ra_hod_u = mysqli_fetch_assoc($rs_masurufu_sipendekezi_ra_hod_u);
$totalRows_rs_masurufu_sipendekezi_ra_hod_u = mysqli_num_rows($rs_masurufu_sipendekezi_ra_hod_u);

$idadi_masurufu_sipendekezi_ra = ($totalRows_rs_masurufu_sipendekezi_ra_nu + $totalRows_rs_masurufu_sipendekezi_ra_hos + $totalRows_rs_masurufu_sipendekezi_ra_hod_u);


//UTHIBITISO CA

//YA NU KUTOKA KWA RA

$query_rs_masurufu_uthibitisho_ca_nu = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_tae')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_uthibitisho_ca_nu = mysqli_query($conntscpME, $query_rs_masurufu_uthibitisho_ca_nu) or die(mysqli_error());
$row_rs_masurufu_uthibitisho_ca_nu = mysqli_fetch_assoc($rs_masurufu_uthibitisho_ca_nu);
$totalRows_rs_masurufu_uthibitisho_ca_nu = mysqli_num_rows($rs_masurufu_uthibitisho_ca_nu);

//YA HOS KUTOKA KWA RA

$query_rs_masurufu_uthibitisho_ca_hos = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_tae')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_uthibitisho_ca_hos = mysqli_query($conntscpME, $query_rs_masurufu_uthibitisho_ca_hos) or die(mysqli_error());
$row_rs_masurufu_uthibitisho_ca_hos = mysqli_fetch_assoc($rs_masurufu_uthibitisho_ca_hos);
$totalRows_rs_masurufu_uthibitisho_ca_hos = mysqli_num_rows($rs_masurufu_uthibitisho_ca_hos);

//YA HOD_U KUTOKA KWA RA

$query_rs_masurufu_uthibitisho_ca_hod_u = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = masurufu.masurufu_id) || (vibali.driver_masurufu_id = masurufu.driver_masurufu_id)) AND (masurufu.masurufu_ya_sh > 0) AND (masurufu.masurufu_general_status = 'ameona_tae')) ORDER BY id DESC", $div_unit_ID);
$rs_masurufu_uthibitisho_ca_hod_u = mysqli_query($conntscpME, $query_rs_masurufu_uthibitisho_ca_hod_u) or die(mysqli_error());
$row_rs_masurufu_uthibitisho_ca_hod_u = mysqli_fetch_assoc($rs_masurufu_uthibitisho_ca_hod_u);
$totalRows_rs_masurufu_uthibitisho_ca_hod_u = mysqli_num_rows($rs_masurufu_uthibitisho_ca_hod_u);

$idadi_masurufu_uthibitisho_ca = ($totalRows_rs_masurufu_uthibitisho_ca_nu + $totalRows_rs_masurufu_uthibitisho_ca_hos + $totalRows_rs_masurufu_uthibitisho_ca_hod_u);

//MAREJESHO MAPYA

//KUTOKA KWA NU

$query_rs_marejesho_yanayoingia_nu = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'mapya')  AND ((marejesho.nathibitisha_sithibitishi_ca IS NULL) || (marejesho.nathibitisha_sithibitishi_ca = ''))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yanayoingia_nu = mysqli_query($conntscpME, $query_rs_marejesho_yanayoingia_nu) or die(mysqli_error());
$row_rs_marejesho_yanayoingia_nu = mysqli_fetch_assoc($rs_marejesho_yanayoingia_nu);
$totalRows_rs_marejesho_yanayoingia_nu = mysqli_num_rows($rs_marejesho_yanayoingia_nu);

//KUTOKA KWA HOS

$query_rs_marejesho_yanayoingia_hos = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'mapya')  AND ((marejesho.nathibitisha_sithibitishi_ca IS NULL) || (marejesho.nathibitisha_sithibitishi_ca = ''))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yanayoingia_hos = mysqli_query($conntscpME, $query_rs_marejesho_yanayoingia_hos) or die(mysqli_error());
$row_rs_marejesho_yanayoingia_hos = mysqli_fetch_assoc($rs_marejesho_yanayoingia_hos);
$totalRows_rs_marejesho_yanayoingia_hos = mysqli_num_rows($rs_marejesho_yanayoingia_hos);

//KUTOKA KWA HOD_U 

$query_rs_marejesho_yanayoingia_hod_u = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'mapya')  AND ((marejesho.nathibitisha_sithibitishi_ca IS NULL) || (marejesho.nathibitisha_sithibitishi_ca = ''))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yanayoingia_hod_u = mysqli_query($conntscpME, $query_rs_marejesho_yanayoingia_hod_u) or die(mysqli_error());
$row_rs_marejesho_yanayoingia_hod_u = mysqli_fetch_assoc($rs_marejesho_yanayoingia_hod_u);
$totalRows_rs_marejesho_yanayoingia_hod_u = mysqli_num_rows($rs_marejesho_yanayoingia_hod_u);

$idadi_marejesho_yanayoingia = ($totalRows_rs_marejesho_yanayoingia_nu + $totalRows_rs_marejesho_yanayoingia_hos + $totalRows_rs_marejesho_yanayoingia_hod_u);


//MAREJESHO YALIYOTHIBITISHWA NA HOD_U

//KUTOKA KWA NU

$query_rs_marejesho_yaliyothibitishwa_nu = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'nathibitisha')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yaliyothibitishwa_nu = mysqli_query($conntscpME, $query_rs_marejesho_yaliyothibitishwa_nu) or die(mysqli_error());
$row_rs_marejesho_yaliyothibitishwa_nu = mysqli_fetch_assoc($rs_marejesho_yaliyothibitishwa_nu);
$totalRows_rs_marejesho_yaliyothibitishwa_nu = mysqli_num_rows($rs_marejesho_yaliyothibitishwa_nu);

//KUTOKA KWA HOS

$query_rs_marejesho_yaliyothibitishwa_hos = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'nathibitisha')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yaliyothibitishwa_hos = mysqli_query($conntscpME, $query_rs_marejesho_yaliyothibitishwa_hos) or die(mysqli_error());
$row_rs_marejesho_yaliyothibitishwa_hos = mysqli_fetch_assoc($rs_marejesho_yaliyothibitishwa_hos);
$totalRows_rs_marejesho_yaliyothibitishwa_hos = mysqli_num_rows($rs_marejesho_yaliyothibitishwa_hos);

//KUTOKA KWA HOD_U 

$query_rs_marejesho_yaliyothibitishwa_hod_u = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'nathibitisha')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yaliyothibitishwa_hod_u = mysqli_query($conntscpME, $query_rs_marejesho_yaliyothibitishwa_hod_u) or die(mysqli_error());
$row_rs_marejesho_yaliyothibitishwa_hod_u = mysqli_fetch_assoc($rs_marejesho_yaliyothibitishwa_hod_u);
$totalRows_rs_marejesho_yaliyothibitishwa_hod_u = mysqli_num_rows($rs_marejesho_yaliyothibitishwa_hod_u);

$idadi_marejesho_yaliyothibitishwa = ($totalRows_rs_marejesho_yaliyothibitishwa_nu + $totalRows_rs_marejesho_yaliyothibitishwa_hos + $totalRows_rs_marejesho_yaliyothibitishwa_hod_u);


//MAREJESHO YASIYOTHIBITISHWA NA HOD_U

//KUTOKA KWA NU

$query_rs_marejesho_yasiyothibitishwa_nu = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'sithibitishi')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yasiyothibitishwa_nu = mysqli_query($conntscpME, $query_rs_marejesho_yasiyothibitishwa_nu) or die(mysqli_error());
$row_rs_marejesho_yasiyothibitishwa_nu = mysqli_fetch_assoc($rs_marejesho_yasiyothibitishwa_nu);
$totalRows_rs_marejesho_yasiyothibitishwa_nu = mysqli_num_rows($rs_marejesho_yasiyothibitishwa_nu);

//KUTOKA KWA HOS

$query_rs_marejesho_yasiyothibitishwa_hos = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'sithibitishi')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yasiyothibitishwa_hos = mysqli_query($conntscpME, $query_rs_marejesho_yasiyothibitishwa_hos) or die(mysqli_error());
$row_rs_marejesho_yasiyothibitishwa_hos = mysqli_fetch_assoc($rs_marejesho_yasiyothibitishwa_hos);
$totalRows_rs_marejesho_yasiyothibitishwa_hos = mysqli_num_rows($rs_marejesho_yasiyothibitishwa_hos);

//KUTOKA KWA HOD_U 

$query_rs_marejesho_yasiyothibitishwa_hod_u = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND ((vibali.masurufu_id = marejesho.masurufu_id) || (vibali.driver_masurufu_id = marejesho.driver_masurufu_id)) AND (marejesho.kiasi_nilichochukua > 0) AND (marejesho.masurufu_marejesho_general_status = 'ameona_hod_u') AND (marejesho.nathibitisha_sithibitishi_hod_u = 'sithibitishi')) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yasiyothibitishwa_hod_u = mysqli_query($conntscpME, $query_rs_marejesho_yasiyothibitishwa_hod_u) or die(mysqli_error());
$row_rs_marejesho_yasiyothibitishwa_hod_u = mysqli_fetch_assoc($rs_marejesho_yasiyothibitishwa_hod_u);
$totalRows_rs_marejesho_yasiyothibitishwa_hod_u = mysqli_num_rows($rs_marejesho_yasiyothibitishwa_hod_u);

$idadi_marejesho_yasiyothibitishwa = ($totalRows_rs_marejesho_yasiyothibitishwa_nu + $totalRows_rs_marejesho_yasiyothibitishwa_hos + $totalRows_rs_marejesho_yasiyothibitishwa_hod_u);

//MAREJESHO YALIYOTHIBITISHWA NA CA

//KUTOKA KWA NU

$query_rs_marejesho_yamekubaliwa_ca_nu = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'nu' ) AND (vibali.masurufu_id = marejesho.masurufu_id) AND (marejesho.kiasi_nilichochukua > 0) AND ((marejesho.masurufu_marejesho_general_status = 'ameona_ca') || (marejesho.masurufu_marejesho_general_status = 'mapya')) AND ((marejesho.nathibitisha_sithibitishi_ca = 'nathibitisha') || (marejesho.nathibitisha_sithibitishi_ca = 'sithibitishi'))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yamekubaliwa_ca_nu = mysqli_query($conntscpME, $query_rs_marejesho_yamekubaliwa_ca_nu) or die(mysqli_error());
$row_rs_marejesho_yamekubaliwa_ca_nu = mysqli_fetch_assoc($rs_marejesho_yamekubaliwa_ca_nu);
$totalRows_rs_marejesho_yamekubaliwa_ca_nu = mysqli_num_rows($rs_marejesho_yamekubaliwa_ca_nu);

//KUTOKA KWA HOS

$query_rs_marejesho_yamekubaliwa_ca_hos = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND (vibali.levelID = 'hos' ) AND (vibali.masurufu_id = marejesho.masurufu_id) AND (marejesho.kiasi_nilichochukua > 0) AND ((marejesho.masurufu_marejesho_general_status = 'ameona_ca') || (marejesho.masurufu_marejesho_general_status = 'mapya')) AND ((marejesho.nathibitisha_sithibitishi_ca = 'nathibitisha') || (marejesho.nathibitisha_sithibitishi_ca = 'sithibitishi'))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yamekubaliwa_ca_hos = mysqli_query($conntscpME, $query_rs_marejesho_yamekubaliwa_ca_hos) or die(mysqli_error());
$row_rs_marejesho_yamekubaliwa_ca_hos = mysqli_fetch_assoc($rs_marejesho_yamekubaliwa_ca_hos);
$totalRows_rs_marejesho_yamekubaliwa_ca_hos = mysqli_num_rows($rs_marejesho_yamekubaliwa_ca_hos);

//KUTOKA KWA HOD_U 

$query_rs_marejesho_yamekubaliwa_ca_hod_u = sprintf("SELECT vibali.*, marejesho.* FROM vibali, marejesho WHERE ((vibali.mlipajiID = '%s' ) AND ((vibali.levelID = 'hod' ) || (vibali.levelID = 'hou' )) AND (vibali.masurufu_id = marejesho.masurufu_id) AND (marejesho.kiasi_nilichochukua > 0) AND ((marejesho.masurufu_marejesho_general_status = 'ameona_ca') || (marejesho.masurufu_marejesho_general_status = 'mapya')) AND ((marejesho.nathibitisha_sithibitishi_ca = 'nathibitisha') || (marejesho.nathibitisha_sithibitishi_ca = 'sithibitishi'))) ORDER BY id DESC", $div_unit_ID);
$rs_marejesho_yamekubaliwa_ca_hod_u = mysqli_query($conntscpME, $query_rs_marejesho_yamekubaliwa_ca_hod_u) or die(mysqli_error());
$row_rs_marejesho_yamekubaliwa_ca_hod_u = mysqli_fetch_assoc($rs_marejesho_yamekubaliwa_ca_hod_u);
$totalRows_rs_marejesho_yamekubaliwa_ca_hod_u = mysqli_num_rows($rs_marejesho_yamekubaliwa_ca_hod_u);

$idadi_marejesho_yamekubaliwa_ca = ($totalRows_rs_marejesho_yamekubaliwa_ca_nu + $totalRows_rs_marejesho_yamekubaliwa_ca_hos + $totalRows_rs_marejesho_yamekubaliwa_ca_hod_u);

//KWENDA KWA PS KWA AJILI YA UTHIBITISHO WA >5m

$query_rs_ya_uthibitisho_5m_hod_u_ps = sprintf("SELECT vibali.*, masurufu.* FROM vibali, masurufu WHERE ((vibali.masurufu_id = masurufu.masurufu_id) AND ((masurufu.napendekeza_sipendekezi_hod_u IS NULL) || (masurufu.napendekeza_sipendekezi_hod_u = '')) AND (masurufu.to_km_napendekeza_apewe_sh > 0)) ORDER BY id DESC");
$rs_ya_uthibitisho_5m_hod_u_ps = mysqli_query($conntscpME, $query_rs_ya_uthibitisho_5m_hod_u_ps) or die(mysqli_error());
$row_rs_ya_uthibitisho_5m_hod_u_ps = mysqli_fetch_assoc($rs_ya_uthibitisho_5m_hod_u_ps);
$totalRows_rs_ya_uthibitisho_5m_hod_u_ps = mysqli_num_rows($rs_ya_uthibitisho_5m_hod_u_ps);

$idadi_masurufu_uthibitisho_5m = $totalRows_rs_ya_uthibitisho_5m_hod_u_ps;

//Safari Ripoti

//Yanayoingia kutoka kwa HOS kwenda kwa PK kupitia kwa HOD

$query_rs_zinazoingia_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'hos' ) AND (safari_ripoti.safari_ripoti_general_status = 'mpya')) ORDER BY id DESC", $div_unit_ID);
$rs_zinazoingia_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_zinazoingia_safari_ripoti_hos) or die(mysqli_error());
$row_rs_zinazoingia_safari_ripoti_hos = mysqli_fetch_assoc($rs_zinazoingia_safari_ripoti_hos);
$totalRows_rs_zinazoingia_safari_ripoti_hos = mysqli_num_rows($rs_zinazoingia_safari_ripoti_hos);

//Yanayoingia kutoka kwa NU

$query_rs_zinazoingia_safari_ripoti_nu = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'nu' ) AND (safari_ripoti.safari_ripoti_general_status = 'mpya') AND (((safari_ripoti.nathibitisha_sithibitishi_hos IS NULL) AND (vibali.section_ID = '999999')) || (safari_ripoti.nathibitisha_sithibitishi_hos = 'nathibitisha')) ) ORDER BY id DESC", $div_unit_ID);
$rs_zinazoingia_safari_ripoti_nu = mysqli_query($conntscpME, $query_rs_zinazoingia_safari_ripoti_nu) or die(mysqli_error());
$row_rs_zinazoingia_safari_ripoti_nu = mysqli_fetch_assoc($rs_zinazoingia_safari_ripoti_nu);
$totalRows_rs_zinazoingia_safari_ripoti_nu = mysqli_num_rows($rs_zinazoingia_safari_ripoti_nu);

$idadi_safari_ripoti_zinazoingia_hod_u = ($totalRows_rs_zinazoingia_safari_ripoti_hos + $totalRows_rs_zinazoingia_safari_ripoti_nu);

//Ulizokataa kutoka kwa HOS kwenda kwa PK kupitia kwa HOD

$query_rs_ulizokataa_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'hos' ) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_hod_u') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'sithibitishi')) ORDER BY id DESC", $div_unit_ID);
$rs_ulizokataa_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_ulizokataa_safari_ripoti_hos) or die(mysqli_error());
$row_rs_ulizokataa_safari_ripoti_hos = mysqli_fetch_assoc($rs_ulizokataa_safari_ripoti_hos);
$totalRows_rs_ulizokataa_safari_ripoti_hos = mysqli_num_rows($rs_ulizokataa_safari_ripoti_hos);

//Ulizokataa kutoka kwa NU

$query_rs_ulizokataa_safari_ripoti_nu = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'nu' ) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_hod_u') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'sithibitishi') AND (((safari_ripoti.nathibitisha_sithibitishi_hos IS NULL) AND (vibali.section_ID = '999999')) || (safari_ripoti.nathibitisha_sithibitishi_hos = 'nathibitisha')) ) ORDER BY id DESC", $div_unit_ID);
$rs_ulizokataa_safari_ripoti_nu = mysqli_query($conntscpME, $query_rs_ulizokataa_safari_ripoti_nu) or die(mysqli_error());
$row_rs_ulizokataa_safari_ripoti_nu = mysqli_fetch_assoc($rs_ulizokataa_safari_ripoti_nu);
$totalRows_rs_ulizokataa_safari_ripoti_nu = mysqli_num_rows($rs_ulizokataa_safari_ripoti_nu);

$idadi_safari_ripoti_ulizokataa_hod_u = ($totalRows_rs_ulizokataa_safari_ripoti_hos + $totalRows_rs_ulizokataa_safari_ripoti_nu);

//Ulizopitisha kutoka kwa HOS kwenda kwa KM kupitia kwa HOD

$query_rs_ulizopitisha_safari_ripoti_hos = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'hos' ) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_hod_u') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'nathibitisha')) ORDER BY id DESC", $div_unit_ID);
$rs_ulizopitisha_safari_ripoti_hos = mysqli_query($conntscpME, $query_rs_ulizopitisha_safari_ripoti_hos) or die(mysqli_error());
$row_rs_ulizopitisha_safari_ripoti_hos = mysqli_fetch_assoc($rs_ulizopitisha_safari_ripoti_hos);
$totalRows_rs_ulizopitisha_safari_ripoti_hos = mysqli_num_rows($rs_ulizopitisha_safari_ripoti_hos);

//Ulizopitisha kutoka kwa NU

$query_rs_ulizopitisha_safari_ripoti_nu = sprintf("SELECT vibali.*, safari_ripoti.* FROM vibali, safari_ripoti WHERE ((vibali.div_unit_ID = '%s' ) AND (vibali.id = safari_ripoti.safari_ripoti_id) AND (vibali.levelID = 'nu' ) AND (safari_ripoti.safari_ripoti_general_status = 'ameona_hod_u') AND (safari_ripoti.nathibitisha_sithibitishi_hod_u = 'nathibitisha') AND (((safari_ripoti.nathibitisha_sithibitishi_hos IS NULL) AND (vibali.section_ID = '999999')) || (safari_ripoti.nathibitisha_sithibitishi_hos = 'nathibitisha')) ) ORDER BY id DESC", $div_unit_ID);
$rs_ulizopitisha_safari_ripoti_nu = mysqli_query($conntscpME, $query_rs_ulizopitisha_safari_ripoti_nu) or die(mysqli_error());
$row_rs_ulizopitisha_safari_ripoti_nu = mysqli_fetch_assoc($rs_ulizopitisha_safari_ripoti_nu);
$totalRows_rs_ulizopitisha_safari_ripoti_nu = mysqli_num_rows($rs_ulizopitisha_safari_ripoti_nu);

$idadi_safari_ripoti_ulizopitisha_hod_u = ($totalRows_rs_ulizopitisha_safari_ripoti_hos + $totalRows_rs_ulizopitisha_safari_ripoti_nu);
?>