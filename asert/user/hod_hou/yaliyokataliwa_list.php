<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php
require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
//if($_GET['imetoka'] == "ingiza_maoni"){   
 // echo "<script>";
 // echo "alert('Maoni yako yametumwa kikamilifu!');";
 // echo "window.location.href='yaliyokataliwa_list.php';";
  //echo "<script>";
  //send sms
//}
?>
<?php 
include('status.php');
include('aina_ya_kibali.php'); //???????????????????????

$div_unit_ID = $_SESSION['div_unit_ID'];
//$section_ID = $_SESSION['section_ID'];
//$levelID = "nu";
$general_status = "kimekataliwa_hod_u";
//$zimebaki_siku >=0;

//Maombi ya HOS yaliyokataliwa

$query_rs_yaliyokataliwa_ya_hos = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND (`levelID`='hos')  AND (`general_status`='%s') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $div_unit_ID,$general_status);
$rs_yaliyokataliwa_ya_hos = mysqli_query($conntscpME, $query_rs_yaliyokataliwa_ya_hos) or die(mysqli_error());
$row_rs_yaliyokataliwa_ya_hos = mysqli_fetch_assoc($rs_yaliyokataliwa_ya_hos);
$totalRows_rs_yaliyokataliwa_ya_hos = mysqli_num_rows($rs_yaliyokataliwa_ya_hos);

//Maombi ya NU yaliyokataliwa

$query_rs_yaliyokataliwa_ya_nu = sprintf("SELECT * FROM vibali WHERE ((`div_unit_ID` = '%s' ) AND (`levelID`='nu')  AND (`general_status`='%s') AND (`zimebaki_siku` >= 0 )) ORDER BY id DESC", $div_unit_ID,$general_status);
$rs_yaliyokataliwa_ya_nu = mysqli_query($conntscpME, $query_rs_yaliyokataliwa_ya_nu) or die(mysqli_error());
$row_rs_yaliyokataliwa_ya_nu = mysqli_fetch_assoc($rs_yaliyokataliwa_ya_nu);
$totalRows_rs_yaliyokataliwa_ya_nu = mysqli_num_rows($rs_yaliyokataliwa_ya_nu);

$totalRows_rs_yaliyokataliwa = ($totalRows_rs_yaliyokataliwa_ya_hos + $totalRows_rs_yaliyokataliwa_ya_nu);

?>

<!DOCTYPE html>
<html style="height: 100%;" lang="en-US" class="restade"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Local Traveling Permit - MNRT</title>
<meta charset="utf-8">
<link rel="icon" href="http://localhost/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/w3.css">
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/resp_form.css">
<link rel="stylesheet" type="text/css" href="/css/toggle.css">

<script src="http://localhost/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/js/toggle.js"></script>
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
        <!--h2>Menus</h2>
        <div id="sidenav-title" class="show-1 content1 mkono">Kibali cha Kusafiri</div>
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/hod_hou/maombi_mapya.php"> 
          <php echo $menu_title_tuma_maombi;?>
          </a> <a target="_top" href="http://localhost/user/hod_hou/maombi_mapya_list.php" <php if($idadi_maombi_mapya != ""){echo "class='badge1' data-badge='".$idadi_maombi_mapya."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/hod_hou/yaliyopita_muda.php" <php if($idadi_yaliyopita_muda != ""){echo "class='badge1' data-badge='".$idadi_yaliyopita_muda."'";};?>>Yaliyopita 
          Muda</a> <a target="_top" href="http://localhost">Fuatilia Maombi</a> 
          <a target="_top" href="http://localhost">Yaliyosubirishwa</a> <a target="_top" href="http://localhost">Yaliyoidhinishwa</a> 
          <a target="_top" href="http://localhost">yaliyokataliwa</a> </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Mrejesho wa Safari</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost">Toa 
          Ripoti</a> <a target="_top" href="http://localhost">Masurufu</a> </div>
        <div id="sidenav-title" class="no_jumlisha_toa mkono">Ripoti</div-->
        <div id="sidenav-title" class="show_teuzi content_teuzi mkono">Shughulikia 
          Maombi</div>
        <div class="menu_teuzi" style="display: block;"> <a target="_top" href="http://localhost/user/hod_hou/yanayoingia_list.php" <?php if($idadi_yanayoingia_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_hod_u."'";};?>>Yanayoingia</a> 
          <a target="_top" href="http://localhost/user/hod_hou/yaliyopitishwa_list.php" <?php if($idadi_yaliyopitishwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyopitishwa_hod_u."'";};?>>Uliyokubali</a> 
          <div id="sidenav-imechaguliwa_2"<?php if($idadi_yaliyokataliwa_hod_u != ""){echo "class='badge1' data-badge='".$idadi_yaliyokataliwa_hod_u."'";};?>>Uliyokataa</div>
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
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] != "hos")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/nu/index.php'" class="no_jumlisha_toa mkono">Omba 
          Kibali</div>
        <?php };?>
        <?php if((isset($_SESSION['mkuu_2'])) && ($_SESSION['mkuu_2'] == "dahrm")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/dahrm/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza DAHRM</div>
        <?php };?>
        <?php if((isset($_SESSION['mkuu_3'])) && ($_SESSION['mkuu_3'] == "ca")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/ca/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza CA</div>
        <?php };?>
        <?php if((isset($_SESSION['levelID'])) && ($_SESSION['levelID'] == "hos")) { ?>
        <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/hos/index.php'" class="no_jumlisha_toa mkono">Rejea 
          Meza HOS</div>
        <?php };?>
        <br>
        <br>
      </div>
    </div>
  </div>
  <!--BELOW  TOPNAV-->
  <div class="w3-main" id="belowtopnav" style="margin-left: 221px; padding-top:0px;"> 
    <div class="w3-row" style="padding: 0px 0px 0px 0px;"> 
      <div class="w3-container top w3-white muhtasari_karibu"> 
        <div class="w3schools-logo notranslate"><img src="/images/logo-main.png"></div>
      </div>
      <div class="w3-col l10 m12" id="main"> 
        <div id="mainLeaderboard" style="overflow:hidden;"> 
          <div class="container_form_kichwa"> 
            <div class="kichwa_ndogo form_link"><a href="http://localhost/user/hod_hou/index.php">Mwanzo</a>&nbsp;<span class="kichwa_ndogo_sana">/</span>&nbsp;Maombi 
              Yaliyokataliwa</div>
          </div>
          <div class="container_form"> 
            <?php if($totalRows_rs_yaliyokataliwa == 0){
echo "<div class='rekodi_tupu w3-left'>HAKUNA MAOMBI YALIYOKATALIWA!</div>";
}else{?>
            <?php if($totalRows_rs_yaliyokataliwa_ya_hos != 0){
		   
		   echo "<div class='rekodi_tupu w3-left'></div>";
		    ?>
            <!--  *******************  YA HOS yaliyokataliwa **************-->
            <div class="row_form col-view-btm"> 
              <div class="row_form col-view-title w3-white">Maombi Yaliyokataliwa 
                - HOS</div>
              <?php $sn=0; do {  $sn++; ?>
              <div class="row_form col-view w3-blue" title="Safari ya siku 7 ..."> 
                <div class="col-view-namba" data-tip="Nifanyw ni wrap words"> 
                  <?php echo $sn.".";?>
                </div>
                <div class="col-view-kwenda"><span class="w3-left col-view-555 col-view-dot " style="margin: 8px 8px 0px 8px"></span>	
                  <?php  //Jina la Mkoa
	$regID=$row_rs_yaliyokataliwa_ya_hos['regID'];
	
	$query_rsregName = sprintf("SELECT regNam FROM regions WHERE (`regID`='%s')",$regID);
	$rsregName = mysqli_query($conntscpME, $query_rsregName) or die(mysqli_error());
	$row_rsregName = mysqli_fetch_assoc($rsregName);
	$totalRows_rsregName = mysqli_num_rows($rsregName);	
	//Jina la Halmashauri
	$lgaID=$row_rs_yaliyokataliwa_ya_hos['lgaID'];
	
	$query_rslgaName = sprintf("SELECT lgaNam FROM lgas WHERE (`lgaID`='%s')",$lgaID);
	$rslgaName = mysqli_query($conntscpME, $query_rslgaName) or die(mysqli_error());
	$row_rslgaName = mysqli_fetch_assoc($rslgaName);
	$totalRows_rslgaName = mysqli_num_rows($rslgaName);
	//Jina la kuonesha
	if ($row_rs_yaliyokataliwa_ya_hos['lgaID']==""){
	echo "Kwenda&nbsp;".$row_rsregName['regNam'];
	}else{
	echo "Kwenda&nbsp;".$row_rslgaName['lgaNam'];
	};
	?>
                </div>
                <div class="col-view-tarehe"> 
                  <?php echo "Tarehe&nbsp;".$row_rs_yaliyokataliwa_ya_hos['sDate'];?>
                  <span class="w3-right col-view-555"> 
                  <!--a href="maombi_mapya_list_update.php?id=<php echo $row_rs_yaliyokataliwa['id'];?>&catID=<php echo $row_rs_yaliyokataliwa['catID'];?>&regID=<php echo $row_rs_yaliyokataliwa['regID'];?>&lgaID=<php echo $row_rs_yaliyokataliwa['lgaID'];?>&sDate=<php echo $row_rs_yaliyokataliwa['sDate'];?>&eDate=<php echo $row_rs_yaliyokataliwa['eDate'];?>&duration=<php echo $row_rs_yaliyokataliwa['duration'];?>&usafiriID=<php echo $row_rs_yaliyokataliwa['usafiriID'];?>&madhumuniID=<php echo $row_rs_yaliyokataliwa['madhumuniID'];?>&muhtasari=<php echo $row_rs_yaliyokataliwa['muhtasari'];?>&mlipajiID=<php echo $row_rs_yaliyokataliwa['mlipajiID'];?>&wengine=<php echo $row_rs_yaliyokataliwa['wengine'];?>&jina_kiambata=<php echo $row_rs_yaliyokataliwa['jina_kiambata'];?>&kiambata=<php echo $row_rs_yaliyokataliwa['final_kiambata'];?>"><img src="/images/edit.png" width="30" height="13" title="Badili"></a>
	&nbsp;<a href="maombi_mapya_tazama.php?tendo=futa&id=<php echo $row_rs_yaliyokataliwa['id'];?>"><img src="/images/delete.png" width="30" height="13" title="Futa"></a>&nbsp;-->
                  <a href="yaliyokataliwa_tazama.php?id=<?php echo $row_rs_yaliyokataliwa_ya_hos['id'];?>"> 
                  <?php if($row_rs_yaliyokataliwa_ya_hos['ruti_ID'] == "ruti_zaidi_ya_moja") { ?>
                  <img src="/images/view_unganisha.png" width="30" height="13" title="tazama"> 
                  <?php }else{?>
                  <img src="/images/view.png" width="30" height="13" title="tazama"> 
                  <?php };?>
                  </a></span></div>
                <div class="col-view-madhumuni"> 
                  <?php
	//Madhumuni
	$madhumuniID=$row_rs_yaliyokataliwa_ya_hos['madhumuniID'];
	
	$query_rsmadhumuni = sprintf("SELECT madhumuni FROM madhumuni WHERE (`madhumuniID`='%s')",$madhumuniID);
	$rsmadhumuni = mysqli_query($conntscpME, $query_rsmadhumuni) or die(mysqli_error());
	$row_rsmadhumuni = mysqli_fetch_assoc($rsmadhumuni);
	$totalRows_rsmadhumuni = mysqli_num_rows($rsmadhumuni);	
	echo $row_rsmadhumuni['madhumuni'];?>
                </div>
                <div class="col-view-icons"> 
                  <!--span><a href="maombi_mapya_list_update.php?id=<php echo $row_rs_yaliyokataliwa['id'];?>&catID=<php echo $row_rs_yaliyokataliwa['catID'];?>&regID=<php echo $row_rs_yaliyokataliwa['regID'];?>&lgaID=<php echo $row_rs_yaliyokataliwa['lgaID'];?>&sDate=<php echo $row_rs_yaliyokataliwa['sDate'];?>&eDate=<php echo $row_rs_yaliyokataliwa['eDate'];?>&duration=<php echo $row_rs_yaliyokataliwa['duration'];?>&usafiriID=<php echo $row_rs_yaliyokataliwa['usafiriID'];?>&madhumuniID=<php echo $row_rs_yaliyokataliwa['madhumuniID'];?>&muhtasari=<php echo $row_rs_yaliyokataliwa['muhtasari'];?>&mlipajiID=<php echo $row_rs_yaliyokataliwa['mlipajiID'];?>&wengine=<php echo $row_rs_yaliyokataliwa['wengine'];?>&jina_kiambata=<php echo $row_rs_yaliyokataliwa['jina_kiambata'];?>&kiambata=<php echo $row_rs_yaliyokataliwa['final_kiambata'];?>"><img src="/images/edit.png" width="30" height="13" title="Badili"></a>&nbsp;&nbsp;</span>
	<span><a href="maombi_mapya_tazama.php?tendo=futa&id=<php echo $row_rs_yaliyokataliwa['id'];?>"><img src="/images/delete.png" width="30" height="13" title="Futa"></a>&nbsp;&nbsp;</span-->
                  <span><a href="yaliyokataliwa_tazama.php?id=<?php echo $row_rs_yaliyokataliwa_ya_hos['id'];?>"> 
                  <?php if($row_rs_yaliyokataliwa_ya_hos['ruti_ID'] == "ruti_zaidi_ya_moja") { ?>
                  <img src="/images/view_unganisha.png" width="30" height="13" title="tazama"> 
                  <?php }else{?>
                  <img src="/images/view.png" width="30" height="13" title="tazama"> 
                  <?php };?>
                  </a></span></div>
              </div>
              <?php } while ($row_rs_yaliyokataliwa_ya_hos = mysqli_fetch_assoc($rs_yaliyokataliwa_ya_hos));?>
            </div>
            <?php } ?>
            <!--  *******************  END YA HOS yaliyokataliwa **************-->
            <!--  *******************  YA NU yaliyokataliwa **************-->
            <?php if($totalRows_rs_yaliyokataliwa_ya_nu != 0){
		   
		   echo "<div class='rekodi_tupu w3-left'></div>";
		    ?>
            <div class="row_form col-view-btm"> 
              <div class="row_form col-view-title w3-white">Maombi Yaliyokataliwa 
                - Watumishi</div>
              <?php $sn=0; do {  $sn++; ?>
              <div class="row_form col-view w3-blue" title="Safari ya siku 7 ..."> 
                <div class="col-view-namba" data-tip="Nifanyw ni wrap words"> 
                  <?php echo $sn.".";?>
                </div>
                <div class="col-view-kwenda"><span class="w3-left col-view-555 col-view-dot " style="margin: 8px 8px 0px 8px"></span>	
                  <?php  //Jina la Mkoa
	$regID=$row_rs_yaliyokataliwa_ya_nu['regID'];
	
	$query_rsregName = sprintf("SELECT regNam FROM regions WHERE (`regID`='%s')",$regID);
	$rsregName = mysqli_query($conntscpME, $query_rsregName) or die(mysqli_error());
	$row_rsregName = mysqli_fetch_assoc($rsregName);
	$totalRows_rsregName = mysqli_num_rows($rsregName);	
	//Jina la Halmashauri
	$lgaID=$row_rs_yaliyokataliwa_ya_nu['lgaID'];
	
	$query_rslgaName = sprintf("SELECT lgaNam FROM lgas WHERE (`lgaID`='%s')",$lgaID);
	$rslgaName = mysqli_query($conntscpME, $query_rslgaName) or die(mysqli_error());
	$row_rslgaName = mysqli_fetch_assoc($rslgaName);
	$totalRows_rslgaName = mysqli_num_rows($rslgaName);
	//Jina la kuonesha
	if ($row_rs_yaliyokataliwa_ya_nu['lgaID']==""){
	echo "Kwenda&nbsp;".$row_rsregName['regNam'];
	}else{
	echo "Kwenda&nbsp;".$row_rslgaName['lgaNam'];
	};
	?>
                </div>
                <div class="col-view-tarehe"> 
                  <?php echo "Tarehe&nbsp;".$row_rs_yaliyokataliwa_ya_nu['sDate'];?>
                  <span class="w3-right col-view-555"> 
                  <!--a href="maombi_mapya_list_update.php?id=<php echo $row_rs_yaliyokataliwa['id'];?>&catID=<php echo $row_rs_yaliyokataliwa['catID'];?>&regID=<php echo $row_rs_yaliyokataliwa['regID'];?>&lgaID=<php echo $row_rs_yaliyokataliwa['lgaID'];?>&sDate=<php echo $row_rs_yaliyokataliwa['sDate'];?>&eDate=<php echo $row_rs_yaliyokataliwa['eDate'];?>&duration=<php echo $row_rs_yaliyokataliwa['duration'];?>&usafiriID=<php echo $row_rs_yaliyokataliwa['usafiriID'];?>&madhumuniID=<php echo $row_rs_yaliyokataliwa['madhumuniID'];?>&muhtasari=<php echo $row_rs_yaliyokataliwa['muhtasari'];?>&mlipajiID=<php echo $row_rs_yaliyokataliwa['mlipajiID'];?>&wengine=<php echo $row_rs_yaliyokataliwa['wengine'];?>&jina_kiambata=<php echo $row_rs_yaliyokataliwa['jina_kiambata'];?>&kiambata=<php echo $row_rs_yaliyokataliwa['final_kiambata'];?>"><img src="/images/edit.png" width="30" height="13" title="Badili"></a>
	&nbsp;<a href="maombi_mapya_tazama.php?tendo=futa&id=<php echo $row_rs_yaliyokataliwa['id'];?>"><img src="/images/delete.png" width="30" height="13" title="Futa"></a>&nbsp;-->
                  <a href="yaliyokataliwa_tazama.php?id=<?php echo $row_rs_yaliyokataliwa_ya_nu['id'];?>"> 
                  <?php if($row_rs_yaliyokataliwa_ya_nu['ruti_ID'] == "ruti_zaidi_ya_moja") { ?>
                  <img src="/images/view_unganisha.png" width="30" height="13" title="tazama"> 
                  <?php }else{?>
                  <img src="/images/view.png" width="30" height="13" title="tazama"> 
                  <?php };?>
                  </a></span></div>
                <div class="col-view-madhumuni"> 
                  <?php
	//Madhumuni
	$madhumuniID=$row_rs_yaliyokataliwa_ya_nu['madhumuniID'];
	
	$query_rsmadhumuni = sprintf("SELECT madhumuni FROM madhumuni WHERE (`madhumuniID`='%s')",$madhumuniID);
	$rsmadhumuni = mysqli_query($conntscpME, $query_rsmadhumuni) or die(mysqli_error());
	$row_rsmadhumuni = mysqli_fetch_assoc($rsmadhumuni);
	$totalRows_rsmadhumuni = mysqli_num_rows($rsmadhumuni);	
	echo $row_rsmadhumuni['madhumuni'];?>
                </div>
                <div class="col-view-icons"> 
                  <!--span><a href="maombi_mapya_list_update.php?id=<php echo $row_rs_yaliyokataliwa['id'];?>&catID=<php echo $row_rs_yaliyokataliwa['catID'];?>&regID=<php echo $row_rs_yaliyokataliwa['regID'];?>&lgaID=<php echo $row_rs_yaliyokataliwa['lgaID'];?>&sDate=<php echo $row_rs_yaliyokataliwa['sDate'];?>&eDate=<php echo $row_rs_yaliyokataliwa['eDate'];?>&duration=<php echo $row_rs_yaliyokataliwa['duration'];?>&usafiriID=<php echo $row_rs_yaliyokataliwa['usafiriID'];?>&madhumuniID=<php echo $row_rs_yaliyokataliwa['madhumuniID'];?>&muhtasari=<php echo $row_rs_yaliyokataliwa['muhtasari'];?>&mlipajiID=<php echo $row_rs_yaliyokataliwa['mlipajiID'];?>&wengine=<php echo $row_rs_yaliyokataliwa['wengine'];?>&jina_kiambata=<php echo $row_rs_yaliyokataliwa['jina_kiambata'];?>&kiambata=<php echo $row_rs_yaliyokataliwa['final_kiambata'];?>"><img src="/images/edit.png" width="30" height="13" title="Badili"></a>&nbsp;&nbsp;</span>
	<span><a href="maombi_mapya_tazama.php?tendo=futa&id=<php echo $row_rs_yaliyokataliwa['id'];?>"><img src="/images/delete.png" width="30" height="13" title="Futa"></a>&nbsp;&nbsp;</span-->
                  <span><a href="yaliyokataliwa_tazama.php?id=<?php echo $row_rs_yaliyokataliwa_ya_nu['id'];?>"> 
                  <?php if($row_rs_yaliyokataliwa_ya_nu['ruti_ID'] == "ruti_zaidi_ya_moja") { ?>
                  <img src="/images/view_unganisha.png" width="30" height="13" title="tazama"> 
                  <?php }else{?>
                  <img src="/images/view.png" width="30" height="13" title="tazama"> 
                  <?php };?>
                  </a></span></div>
              </div>
              <?php } while ($row_rs_yaliyokataliwa_ya_nu = mysqli_fetch_assoc($rs_yaliyokataliwa_ya_nu));?>
            </div>
            <?php } ?>
            <!--  *******************  END YA NU yaliyokataliwa **************-->
            <?php };?>
          </div>
          <!-- footer-->
        </div>
        <script src="http://localhost/js/w3schools_footer.js"></script>
        <script src="http://localhost/js/baka_pandisha_faili.js"></script>
      </div>
    </div>
  </div>
</div>
</body>
</html>