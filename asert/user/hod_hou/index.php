<?php require_once('../../ruhusa.php');?>
<?php require_once('../../Connections/connmnrtsafari.php'); 
include('status.php');
include('aina_ya_kibali.php');

//UKAIMISHO

//AMEKAIMISHA KWA HOS/NU

if(isset($_SESSION['cheo_alichokaimishwa_hos'])){ // AMEKAIMISHWA HOS

unset($_SESSION['mkuu']); 
$_SESSION['levelID'] = "hod_hou";

////Kimepitishwa na PS

$general_status_ps = "kimepitishwa_ps";
$kibali_id_kilichokaimisha = $_SESSION['kibali_id'];
$colname1_rs_kimepitishwa_ps = "1";
if (isset($_SESSION['aliyekaimisha_username_hos'])) {
  $colname1_rs_kimepitishwa_ps = (get_magic_quotes_gpc()) ? $_SESSION['aliyekaimisha_username_hos'] : addslashes($_SESSION['aliyekaimisha_username_hos']);
}

$query_rs_kimepitishwa_ps = sprintf("SELECT * FROM vibali WHERE ((`id` = '%s') AND (`username` = '%s' ) AND (`general_status`='%s') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $kibali_id_kilichokaimisha, $colname1_rs_kimepitishwa_ps, $general_status_ps);
$rs_kimepitishwa_ps = mysqli_query($conntscpME, $query_rs_kimepitishwa_ps) or die(mysqli_error());
$row_rs_kimepitishwa_ps = mysqli_fetch_assoc($rs_kimepitishwa_ps);
$totalRows_rs_kimepitishwa_ps = mysqli_num_rows($rs_kimepitishwa_ps);

//Baada ya Ukaimisho

$query_deligated_to = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname1_rs_kimepitishwa_ps);
$rsdeligated_to = mysqli_query($conntscpME, $query_deligated_to) or die(mysqli_error());
$row_rsdeligated_to = mysqli_fetch_assoc($rsdeligated_to);
$totalRows_rsdeligated_to = mysqli_num_rows($rsdeligated_to);

}elseif(isset($_SESSION['cheo_alichokaimishwa_nu'])){ // END HOS, AMEKAIMISHWA NU

unset($_SESSION['mkuu']); 
$_SESSION['levelID'] = "hod_hou";

////Kimepitishwa na PS

$general_status_ps = "kimepitishwa_ps";
$kibali_id_kilichokaimisha = $_SESSION['kibali_id'];
$colname1_rs_kimepitishwa_ps = "1";
if (isset($_SESSION['aliyekaimisha_username_nu'])) {
  $colname1_rs_kimepitishwa_ps = (get_magic_quotes_gpc()) ? $_SESSION['aliyekaimisha_username_nu'] : addslashes($_SESSION['aliyekaimisha_username_nu']);
}

$query_rs_kimepitishwa_ps = sprintf("SELECT * FROM vibali WHERE ((`id` = '%s') AND (`username` = '%s' ) AND (`general_status`='%s') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $kibali_id_kilichokaimisha, $colname1_rs_kimepitishwa_ps, $general_status_ps);
$rs_kimepitishwa_ps = mysqli_query($conntscpME, $query_rs_kimepitishwa_ps) or die(mysqli_error());
$row_rs_kimepitishwa_ps = mysqli_fetch_assoc($rs_kimepitishwa_ps);
$totalRows_rs_kimepitishwa_ps = mysqli_num_rows($rs_kimepitishwa_ps);

//Baada ya Ukaimisho

$query_deligated_to = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname1_rs_kimepitishwa_ps);
$rsdeligated_to = mysqli_query($conntscpME, $query_deligated_to) or die(mysqli_error());
$row_rsdeligated_to = mysqli_fetch_assoc($rsdeligated_to);
$totalRows_rsdeligated_to = mysqli_num_rows($rsdeligated_to);

}else{

//Akiingia DAHRM
if((isset($_SESSION['mkuu_2'])) && ($_SESSION['mkuu_2'] == "dahrm")) {
$_SESSION['levelID'] = "hod";};

//Akiingia CA
if((isset($_SESSION['mkuu_3'])) && ($_SESSION['mkuu_3'] == "ca")) {
$_SESSION['levelID'] = "hou";};

$_SESSION['mkuu'] = "hod_hou"; 

////Kimepitishwa na PS

$general_status_ps = "kimepitishwa_ps";
$colname1_rs_kimepitishwa_ps = "1";
if (isset($_SESSION['username'])) {
  $colname1_rs_kimepitishwa_ps = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
}

$query_rs_kimepitishwa_ps = sprintf("SELECT * FROM vibali WHERE ((`username` = '%s' ) AND (`general_status`='%s') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $colname1_rs_kimepitishwa_ps, $general_status_ps);
$rs_kimepitishwa_ps = mysqli_query($conntscpME, $query_rs_kimepitishwa_ps) or die(mysqli_error());
$row_rs_kimepitishwa_ps = mysqli_fetch_assoc($rs_kimepitishwa_ps);
$totalRows_rs_kimepitishwa_ps = mysqli_num_rows($rs_kimepitishwa_ps);

//Baada ya Ukaimisho

$query_deligated_to = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname1_rs_kimepitishwa_ps);
$rsdeligated_to = mysqli_query($conntscpME, $query_deligated_to) or die(mysqli_error());
$row_rsdeligated_to = mysqli_fetch_assoc($rsdeligated_to);
$totalRows_rsdeligated_to = mysqli_num_rows($rsdeligated_to);
}

 ?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Local Traveling Permit - MNRT</title>
<meta charset="utf-8">
<link rel="icon" href="http://localhost/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/w3.css">
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/toggle.css">
<script src="http://localhost/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/js/toggle.js"></script>
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body class="kwa_body_1">
<div id="mainContent"> 
  <!--div class="w3-container top"> 
    <!--a class="w3schools-logo notranslate" href="http://localhost/"><img src="/images/logo-main.png"></a>
    <div class="w3schools-logo notranslate"><img src="/images/logo-main.png"></div>
    <!--div class="w3-right w3-hide-small w3-wide toptext" style="font-family:'Segoe UI',Arial,sans-serif">Wizara ya Maliasili na Utalii</div>
  </div-->
  <!-- TOP!-->
  <div class="w3-card-2 topnav notranslate" id="topnav" style="position: relative; top: 0px;"> 
    <div style="overflow:auto;"> 
      <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px"> 
        <a href="javascript:void(0);" class="topnav-icons w3-hide-large w3-left w3-bar-item w3-button" onclick="open_menu()" title="Menu"><img src="/images/menu.png"></a> 
        <a href="http://localhost" class="topnav-icons w3-left w3-button" title="Home"><img src="/images/home.png"></a>	
        <a href="<?php echo $logoutAction; ?>" class="topnav-icons w3-right w3-button" title="Ondoka"><img src="/images/ondoka.png"></a> 
        <a href="http://localhost/changepwd.php" class="topnav-icons w3-right w3-button" title="Badilisha"><img src="/images/badilisha.png"></a> 
        <div class="topnavtext_lname w3-right w3-opacity"> 
          <?php echo $_SESSION['l_name'];?>
        </div>
        <div class="topnavtext_fname w3-right w3-opacity"> 
          <?php echo $_SESSION['f_name']."&nbsp;"?>
        </div>
        <div class="w3-right topnicons-nolink w3-opacity" title="Mtumiaji"><img src="/images/mtumiaji.png"></div>
      </div>
      <div id='nav_tutorials' class='w3-bar-block w3-card-2' style="display:none;"></div>
      <div id='nav_references' class='w3-bar-block w3-card-2'></div>
      <div id='nav_exercises' class='w3-bar-block w3-card-2'></div>
    </div>
  </div>
  <!-- SIDE BAR !-->
  <div class="w3-sidebar w3-collapse" id="sidenav" style="top: 112px; display: none;"> 
    <div id="leftmenuinner" style="padding-top: 0px;"> 
      <div class="w3-light-greyQ" id="leftmenuinnerinner"> <br class="w3-hide-large">
        <br>
        <br>
        <!--h2>Menus</h2-->
        <!--div id="sidenav-title" class="show-1 content1 mkono">Kibali cha Kusafiri</div>
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/maombi_mapya.php">
          <php echo $menu_title_tuma_maombi; ?>
          </a> <a target="_top" href="http://localhost/user/hod_hou/maombi_mapya_list.php" <php if($idadi_maombi_mapya != ""){echo "class='badge1' data-badge='".$idadi_maombi_mapya."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/yaliyopita_muda.php" <php if($idadi_yaliyopita_muda != ""){echo "class='badge1' data-badge='".$idadi_yaliyopita_muda."'";};?>>Yaliyopita 
          Muda</a> <a target="_top" href="http://localhost">Fuatilia Maombi</a> 
          <a target="_top" href="http://localhost">Yaliyosubirishwa</a> <a target="_top" href="http://localhost">Yaliyoidhinishwa</a> 
          <a target="_top" href="http://localhost">Yaliyokataliwa</a> </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Mrejesho wa Safari</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost">Toa 
          Ripoti</a> <a target="_top" href="http://localhost">Masurufu</a> </div-->
        <?php if( (!isset($_SESSION['cheo_alichokaimishwa_hos'])) && (!isset($_SESSION['cheo_alichokaimishwa_nu'])) ) { //HOD/HOU MWENYEWE ?>
        <?php if($row_rsdeligated_to['deligated_to'] != ""){ //amekaimisha ?>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Shughulikia Maombi</div>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Shughulikia Masurufu</div>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Shughulikia Marejesho</div>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Ripoti za Safari</div>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Ruhusa za Dharura</div>
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] != "hos")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/nu/index.php'" class="no_jumlisha_toa mkono">Omba 
          Kibali</div>
        <?php };?>
        <?php if(($totalRows_rs_kimepitishwa_ps > 0) && ($row_rs_kimepitishwa_ps['handed_back'] == "")) {?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/kaimisha.php?kibali_id=<?php echo $row_rs_kimepitishwa_ps['id'];?>'" class="no_jumlisha_toa mkono"> 
          <?php if($row_rsdeligated_to['deligated_to'] != ""){ echo "Umekaimisha"; }else{ echo "Kaimisha"; }?>
        </div>
        <?php }else{?>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Kaimisha</div>
        <?php }?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/ripoti_za_ukaimisho_list.php'" class="no_jumlisha_toa mkono">Handover Report</div>
		<div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/kukaimu_list.php'" class="no_jumlisha_toa mkono">Taarifa za Kukaimu</div>
        <?php if((isset($_SESSION['mkuu_2'])) && ($_SESSION['mkuu_2'] == "dahrm")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/dahrm/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza DAHRM</div>
        <?php };?>
        <?php if((isset($_SESSION['mkuu_3'])) && ($_SESSION['mkuu_3'] == "ca")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/ca/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza CA</div>
        <?php };?>
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] == "hos")) { // Anapokuja ADHRM kwa niaba ya DAHRM kama mkuu wa idara ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hos/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza HOS</div>
        <?php };?>
        <?php }else{ //Hajakaimisha ?>
        <div id="sidenav-title" class="show-3 content3 mkono">Shughulikia Maombi</div>
        <div class="menu-3" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/yanayoingia_list.php" <?php if($idadi_yanayoingia_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_hod_u."'";};?>>Yanayoingia</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyopitishwa_list.php" <?php if($idadi_yaliyopitishwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyopitishwa_hod_u."'";};?>>Uliyokubali</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyokataliwa_list.php" <?php if($idadi_yaliyokataliwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyokataliwa_hod_u."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyoelekezwa_list.php" <?php if($idadi_maelekezo_hod_u != ""){echo "class='badge1' data-badge='".$idadi_maelekezo_hod_u."'";};?>>Uliyoelekeza</a> 
        </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Shughulikia Masurufu</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/masurufu_yanayoingia_ra_list.php" <?php if($idadi_masurufu_yanayoingia_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_yanayoingia_ra."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_napendekeza_ra_list.php" <?php if($idadi_masurufu_napendekeza_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_napendekeza_ra."'";};?>>Uliyopitisha</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_sipendekezi_ra_list.php" <?php if($idadi_masurufu_sipendekezi_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_sipendekezi_ra."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_uthibitisho_ca_list.php" <?php if($idadi_masurufu_uthibitisho_ca != ""){echo "class='badge1' data-badge='".$idadi_masurufu_uthibitisho_ca."'";};?>>Uthibitisho 
          - CA</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_uthibitisho_5m_list.php" <?php if($idadi_masurufu_uthibitisho_5m != ""){echo "class='badge1' data-badge='".$idadi_masurufu_uthibitisho_5m."'";};?>>Kibali 
          cha KM</a> </div>
        <div id="sidenav-title" class="show-1 content1 mkono">Shughulikia Marejesho</div>
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_yanayoingia_list.php" <?php if($idadi_marejesho_yanayoingia != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yanayoingia."'";};?>>Marejesho 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_uliyothibitisha_list.php" <?php if($idadi_marejesho_yaliyothibitishwa != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yaliyothibitishwa."'";};?>>Uliyopitisha</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_usiyothibitisha_list.php" <?php if($idadi_marejesho_yasiyothibitishwa != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yasiyothibitishwa."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_uthibitisho_ca_list.php" <?php if($idadi_marejesho_yamekubaliwa_ca != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yamekubaliwa_ca."'";};?>>Uthibitisho 
          - CA</a> </div>
        <div id="sidenav-title" class="show-4 content4 mkono">Ripoti za Safari</div>
        <div class="menu-4" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_zinazoingia_list.php" <?php if($idadi_safari_ripoti_zinazoingia_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_zinazoingia_hod_u."'";};?>>Zinazoingia</a> 
          <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_ulizokataa_list.php" <?php if($idadi_safari_ripoti_ulizokataa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizokataa_hod_u."'";};?>>Ulizokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_ulizopitisha_list.php" <?php if($idadi_safari_ripoti_ulizopitisha_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizopitisha_hod_u."'";};?>>Ulizopitisha</a> 
        </div>
        <div id="sidenav-title" class="show-5 content5 mkono">Ruhusa za Dharura</div>
        <div class="menu-5" style="display: none;"> <a target="_top" href="">Zinazoingia</a> 
          <a target="_top" href="">Ulizokataa</a> <a target="_top" href="">Ulizopitisha</a> 
        </div>
        <div id="sidenav-title" class="show-6 content6 mkono">Ratiba ya Likizo</div>
        <div class="menu-6" style="display: none;"> <a target="_top" href="">Zinazoingia</a> 
          <a target="_top" href="">Ulizopitisha</a> </div>
        <div id="sidenav-title" class="show-7 content7 mkono">Maombi ya Likizo</div>
        <div class="menu-7" style="display: none;"> <a target="_top" href="">Yanayoingia</a> 
          <a target="_top" href="">Yaliyokubaliwa</a> <a target="_top" href="">Yaliyokataliwa</a> 
        </div>
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] != "hos")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/nu/index.php'" class="no_jumlisha_toa mkono">Omba 
          Kibali</div>
        <?php };?>
        <?php if(($totalRows_rs_kimepitishwa_ps > 0) && ($row_rs_kimepitishwa_ps['handed_back'] == "")) {?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/kaimisha.php?kibali_id=<?php echo $row_rs_kimepitishwa_ps['id'];?>'" class="no_jumlisha_toa mkono"> 
          <?php if($row_rsdeligated_to['deligated_to'] != ""){ echo "Umekaimisha"; }else{ echo "Kaimisha"; }?>
        </div>
        <?php }else{?>
        <div id="sidenav_hamia_hakuna" class="no_jumlisha_toa">Kaimisha</div>
        <?php }?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/ripoti_za_ukaimisho_list.php'" class="no_jumlisha_toa mkono">Handover Report</div>
		<div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/kukaimu_list.php'" class="no_jumlisha_toa mkono">Taarifa za Kukaimu</div>
        <?php if((isset($_SESSION['mkuu_2'])) && ($_SESSION['mkuu_2'] == "dahrm")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/dahrm/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza DAHRM</div>
        <?php };?>
        <?php if((isset($_SESSION['mkuu_3'])) && ($_SESSION['mkuu_3'] == "ca")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/ca/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza CA</div>
        <?php };?>
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] == "hos")) { // Anapokuja ADHRM kwa niaba ya DAHRM kama mkuu wa idara ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hos/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza HOS</div>
        <?php };?>
        <?php } //End hajakaimisha ?>
        <?php }  //END HOD/HOU MWENYEWE ?>
        <?php if( (isset($_SESSION['cheo_alichokaimishwa_hos'])) || (isset($_SESSION['cheo_alichokaimishwa_nu'])) ) {  //ALIYEKAIMISHWA ?>
        <div id="sidenav-title" class="show-3 content3 mkono">Shughulikia Maombi</div>
        <div class="menu-3" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/yanayoingia_list.php" <?php if($idadi_yanayoingia_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_hod_u."'";};?>>Yanayoingia</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyopitishwa_list.php" <?php if($idadi_yaliyopitishwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyopitishwa_hod_u."'";};?>>Uliyokubali</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyokataliwa_list.php" <?php if($idadi_yaliyokataliwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyokataliwa_hod_u."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyoelekezwa_list.php" <?php if($idadi_maelekezo_hod_u != ""){echo "class='badge1' data-badge='".$idadi_maelekezo_hod_u."'";};?>>Uliyoelekeza</a> 
        </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Shughulikia Masurufu</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/masurufu_yanayoingia_ra_list.php" <?php if($idadi_masurufu_yanayoingia_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_yanayoingia_ra."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_napendekeza_ra_list.php" <?php if($idadi_masurufu_napendekeza_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_napendekeza_ra."'";};?>>Uliyopitisha</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_sipendekezi_ra_list.php" <?php if($idadi_masurufu_sipendekezi_ra != ""){echo "class='badge1' data-badge='".$idadi_masurufu_sipendekezi_ra."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_uthibitisho_ca_list.php" <?php if($idadi_masurufu_uthibitisho_ca != ""){echo "class='badge1' data-badge='".$idadi_masurufu_uthibitisho_ca."'";};?>>Uthibitisho 
          - CA</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_uthibitisho_5m_list.php" <?php if($idadi_masurufu_uthibitisho_5m != ""){echo "class='badge1' data-badge='".$idadi_masurufu_uthibitisho_5m."'";};?>>Kibali 
          cha KM</a> </div>
        <div id="sidenav-title" class="show-1 content1 mkono">Shughulikia Marejesho</div>
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_yanayoingia_list.php" <?php if($idadi_marejesho_yanayoingia != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yanayoingia."'";};?>>Marejesho 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_uliyothibitisha_list.php" <?php if($idadi_marejesho_yaliyothibitishwa != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yaliyothibitishwa."'";};?>>Uliyopitisha</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_usiyothibitisha_list.php" <?php if($idadi_marejesho_yasiyothibitishwa != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yasiyothibitishwa."'";};?>>Uliyokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/masurufu_marejesho_uthibitisho_ca_list.php" <?php if($idadi_marejesho_yamekubaliwa_ca != ""){echo "class='badge1' data-badge='".$idadi_marejesho_yamekubaliwa_ca."'";};?>>Uthibitisho 
          - CA</a> </div>
        <div id="sidenav-title" class="show-4 content4 mkono">Ripoti za Safari</div>
        <div class="menu-4" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_zinazoingia_list.php" <?php if($idadi_safari_ripoti_zinazoingia_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_zinazoingia_hod_u."'";};?>>Zinazoingia</a> 
          <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_ulizokataa_list.php" <?php if($idadi_safari_ripoti_ulizokataa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizokataa_hod_u."'";};?>>Ulizokataa</a> 
          <a target="_top" href="http://localhost/user/hod_hou/safari_ripoti_ulizopitisha_list.php" <?php if($idadi_safari_ripoti_ulizopitisha_hod_u != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizopitisha_hod_u."'";};?>>Ulizopitisha</a> 
        </div>
        <div id="sidenav-title" class="show-5 content5 mkono">Ruhusa za Dharura</div>
        <div class="menu-5" style="display: none;"> <a target="_top" href="">Zinazoingia</a> 
          <a target="_top" href="">Ulizokataa</a> <a target="_top" href="">Ulizopitisha</a> 
        </div>
        <div id="sidenav-title" class="show-6 content6 mkono">Ratiba ya Likizo</div>
        <div class="menu-6" style="display: none;"> <a target="_top" href="">Zinazoingia</a> 
          <a target="_top" href="">Ulizopitisha</a> </div>
        <div id="sidenav-title" class="show-7 content7 mkono">Maombi ya Likizo</div>
        <div class="menu-7" style="display: none;"> <a target="_top" href="">Yanayoingia</a> 
          <a target="_top" href="">Yaliyokubaliwa</a> <a target="_top" href="">Yaliyokataliwa</a> 
        </div>
		<div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/kukaimu_list.php'" class="no_jumlisha_toa mkono">Taarifa za Kukaimu</div>
        <?php if($_SESSION['section_ID'] != 100102) {?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/ripoti_ya_ukaimisho.php?kibali_id=<?php echo $row_rs_kimepitishwa_ps['id'];?>'" class="no_jumlisha_toa mkono">Ripoti 
          ya Kukaimishwa</div>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hod_hou/rejesha_ukaimisho.php?kibali_id=<?php echo $row_rs_kimepitishwa_ps['id'];?>'" class="no_jumlisha_toa mkono">Rejesha 
          Ukaimisho</div>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/<?php echo $_SESSION['levelID_link_nu'].$_SESSION['levelID_link_hos'];?>/index.php?kutoka=ukaimisho'" class="no_jumlisha_toa mkono">Rejea 
          Meza</div>
        <?php }elseif($_SESSION['section_ID'] == 100102){?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hos/index.php?kutoka=ukaimisho'" class="no_jumlisha_toa mkono">Rejea 
          Meza HOS</div>
        <?php }?>
        <?php } ?>
        <!--br>
        <div id="sidenav_hamia"> 
          <input type="button" id="badilishana" class="btn btn-primary" value="Omba Kibali" onclick="window.location.href='http://localhost/user/nu/index.php'" />
        </div-->
        <br>
        <br>
      </div>
    </div>
  </div>
  <!--BELOW  TOPNAV-->
  <div class="w3-main" id="belowtopnav" style="margin-left: 221px; padding-top:0px;"> 
    <div class="w3-row" style="padding: 0px 0px 30px 0px;"> 
      <!--div class="w3-col l10 m12 w3-green muhtasari_karibu" id="main">
			  <div id="mainLeaderboard" class="kichwa_home_1" style="padding: 0px 30px 0px 30px; line-height:100px;">
			  KARIBU!
			  </div>
	 </div-->
      <div class="w3-container top w3-white muhtasari_karibu"> 
        <div class="w3schools-logo notranslate"><img src="/images/logo-main.png"></div>
      </div>
      <!-- footer-->
      <div id="footer" class="footer muhtasari w3-container"> 
        <!--div class="mstari"></div-->
        <div class="w3-row w3-small-medium"> 
          <div class="w3-col l6 m6 s12" style="padding: 0px 4px 0px 0px"> 
            <div class="top10 w3-border muhtasari-ico-bg"> 
              <div class="top10-title">TAARIFA BINAFSI</div>
              <div class="top10-text"> 
                <?php echo "Jina: ".$_SESSION['f_name']."&nbsp;".$_SESSION['m_name']."&nbsp;".$_SESSION['l_name'];?>
                <br>
                <?php echo "Cheki Namba: ".$_SESSION['username'];?>
                <br>
                <?php echo "Simu: ".$_SESSION['mob'];?>
                <br>
                <?php echo "Email: ".$_SESSION['e_add'];?>
                <br>
                <?php if($_SESSION['div_au_unit'] == "div"){ echo "Idara: ".$_SESSION['div_unit_name'];}else{ echo "Kitengo: ".$_SESSION['div_unit_name'];}?>
                <br>
                <?php if($_SESSION['section_ID'] != "999999"){ echo "Section: ".$_SESSION['section_name']."<br>";}?>
                <?php echo "Cheo: ".$_SESSION['jina_la_cheo'];?>
                <br>
              </div>
            </div>
          </div>
          <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
            <div class="top10 w3-border muhtasari-ico-bg"> 
              <div class="top10-title">SAFARI</div>
              <div class="top10-text"> Idadi ya Safari:<br>
                Ripoti za Safari:<br>
                Idadi ya Siku: <br>
                Jumla ya Gharama:<br>
                Marejesho:<br>
              </div>
            </div>
          </div>
          <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
            <div class="top10 w3-border muhtasari-ico-bg"> 
              <div class="top10-title">VIBALI</div>
              <div class="top10-text"> Vibali Vipya: <br>
                Vibali Ulivyoomba: <br>
                Vibali Vilivyokubaliwa: <br>
              </div>
            </div>
          </div>
          <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
            <div class="top10 w3-border muhtasari-ico-bg"> 
              <div class="top10-title">UKAIMISHO</div>
              <div class="top10-text"> Status:<br>
                Idadi uliyokaimisha: <br>
                Idadi uliyokaimishwa: <br>
                Mrejesho wa Haraka<br>
                Matangazo<br>
              </div>
            </div>
          </div>
        </div>
        <!--div class="mstari-chini"></div-->
      </div>
      <div class="w3-left w3-opacity w3-small-medium" style="margin: 15px 15px 15px 30px">Toleo 
        Namba 1.0 &copy; 2019 Maliasili</div>
    </div>
    <script src="http://localhost/js/w3schools_footer.js"></script>
  </div>
</div>
</body>
</html>