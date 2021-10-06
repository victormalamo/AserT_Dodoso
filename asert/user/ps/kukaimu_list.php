<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php
require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<?php 

include('status.php');
include('aina_ya_kibali.php'); //??????????????????

$_SESSION['kutoka_link'] = "kukaimu_list.php";
//$div_unit_ID = $_SESSION['div_unit_ID'];

//UKAIMU

$query_rs_ukaimu = sprintf("SELECT vibali.*, ukaimisho.* FROM vibali, ukaimisho WHERE (vibali.ukaimisho_id=ukaimisho.ukaimisho_id) ORDER BY ukaimisho.ukaimisho_id DESC");
$rs_ukaimu = mysqli_query($conntscpME, $query_rs_ukaimu) or die(mysqli_error());
$row_rs_ukaimu = mysqli_fetch_assoc($rs_ukaimu);
$totalRows_rs_ukaimu = mysqli_num_rows($rs_ukaimu);


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

<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />

<script src="http://localhost/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/js/toggle.js"></script>

</head>
<body class="kwa_body_1"><div id="mainContent">
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
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/ps/maombi_mapya.php">
          <php echo $menu_title_tuma_maombi; ?>
          </a> <a target="_top" href="http://localhost/user/ps/maombi_mapya_list.php" <php if($idadi_maombi_mapya != ""){echo "class='badge1' data-badge='".$idadi_maombi_mapya."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/ps/yaliyopita_muda.php" <php if($idadi_yaliyopita_muda != ""){echo "class='badge1' data-badge='".$idadi_yaliyopita_muda."'";};?>>Yaliyopita 
          Muda</a> <a target="_top" href="http://localhost">Fuatilia Maombi</a> 
          <a target="_top" href="http://localhost">Yaliyosubirishwa</a> <a target="_top" href="http://localhost">Yaliyoidhinishwa</a> 
          <a target="_top" href="http://localhost">Yaliyokataliwa</a> </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Mrejesho wa Safari</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost">Toa 
          Ripoti</a> <a target="_top" href="http://localhost">Masurufu</a> </div-->
      <div id="sidenav-title" class="show-1 content1 mkono">Shughulikia Maombi</div>
      <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user/ps/yanayoingia_list.php" <?php if($idadi_yanayoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_ps."'";};?>>Yanayoingia</a> 
        <a target="_top" href="http://localhost/user/ps/yaliyopitishwa_list.php" <?php if($idadi_yaliyopitishwa_ps != ""){echo "class='badge1' data-badge='".$idadi_yaliyopitishwa_ps."'";};?>>Uliyokubali</a> 
        <a target="_top" href="http://localhost/user/ps/yaliyokataliwa_list.php" <?php if($idadi_yaliyokataliwa_ps != ""){echo "class='badge1' data-badge='".$idadi_yaliyokataliwa_ps."'";};?>>Uliyokataa</a> 
        <a target="_top" href="http://localhost/user/ps/yaliyoelekezwa_list.php" <?php if($idadi_maelekezo_ps != ""){echo "class='badge1' data-badge='".$idadi_maelekezo_ps."'";};?>>Uliyoelekeza</a> 
      </div>
      <div id="sidenav-title" class="show-2 content2 mkono">Shughulikia Masurufu</div>
      <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost/user/ps/masurufu_yanayoingia_list.php" <?php if($idadi_masurufu_yanayoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_masurufu_yanayoingia_ps."'";};?>>Yanayoingia</a> 
        <a target="_top" href="http://localhost/user/ps/masurufu_yaliyopitishwa_list.php" <?php if($idadi_masurufu_yaliyopitishwa_ps != ""){echo "class='badge1' data-badge='".$idadi_masurufu_yaliyopitishwa_ps."'";};?>>Uliyokubali</a> 
        <a target="_top" href="http://localhost/user/ps/masurufu_yaliyokataliwa_list.php" <?php if($idadi_masurufu_yaliyokataliwa_ps != ""){echo "class='badge1' data-badge='".$idadi_masurufu_yaliyokataliwa_ps."'";};?>>Uliyokataa</a> 
        <a target="_top" href="http://localhost/user/ps/masurufu_yaliyoelekezwa_list.php" <?php if($idadi_masurufu_maelekezo_ps != ""){echo "class='badge1' data-badge='".$idadi_masurufu_maelekezo_ps."'";};?>>Uliyoelekeza</a> 
      </div>
      <div id="sidenav-title" class="show-3 content3 mkono">Ripoti za Safari</div>
      <div class="menu-3" style="display: none;"> <a target="_top" href="http://localhost/user/ps/safari_ripoti_zinazoingia_list.php" <?php if($idadi_safari_ripoti_zinazoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_zinazoingia_ps."'";};?>>Zinazoingia</a> 
        <a target="_top" href="http://localhost/user/ps/safari_ripoti_ulizokataa_list.php" <?php if($idadi_safari_ripoti_ulizokataa_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizokataa_ps."'";};?>>Ulizokataa</a> 
        <a target="_top" href="http://localhost/user/ps/safari_ripoti_ulizopitisha_list.php" <?php if($idadi_safari_ripoti_ulizopitisha_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizopitisha_ps."'";};?>>Ulizopitisha</a> 
      </div>
      <!--div id="sidenav-title" class="show-4 content4 mkono">Ripoti ya Kukaimu</div>
        <div class="menu-4" style="display: none;"> <a target="_top" href="http://localhost/user/ps/ripoti_za_ukaimisho_list.php" <php if($idadi_safari_ripoti_zinazoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_zinazoingia_ps."'";};?>>Hali 
          ya Sasa</a> <a target="_top" href="http://localhost/user/ps/ripoti_za_ukaimisho_list.php" <php if($idadi_safari_ripoti_ulizokataa_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizokataa_ps."'";};?>>Zote</a> 
        </div-->
      <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/ps/kukaimu_list.php'" class="no_jumlisha_toa mkono">Taarifa 
        za Kukaimu</div>
      <div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/nu/index.php'" class="no_jumlisha_toa mkono">Omba 
        Kibali</div>
      <!--br>
        <div id="sidenav_hamia"> 
          <input type="button" id="badilishana" class="btn btn-primary" value="Omba Kibali" onclick="window.location.href='http://localhost/user/nu/index.php'" />
        </div-->
      <br>
      <br>
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
          <div class="kichwa_ndogo form_link"><a href="http://localhost/user/ps/index.php">Mwanzo</a>&nbsp;<span class="kichwa_ndogo_sana">/</span>&nbsp;Taarifa 
            za Kukaimu</div>
        </div>
        <div class="container_form"> 
          <?php if($totalRows_rs_ukaimu == 0){
echo "<div class='rekodi_tupu w3-left'>HAKUNA TAARIFA ZA KUKAIMU!</div>";
}else{?>
          <?php if($totalRows_rs_ukaimu != 0){
		   
		   echo "<div class='rekodi_tupu w3-left'></div>";
		    ?>
          <!--  *******************  UKAIMU WA WOTE **************-->
          <div class="row_form"> 
            <!--div class="row_form col-view-title w3-white">Yanayotoka kwa HOS</div-->
            <div class="row_form"> 
              <table class="table table-fixed table-bordered w3-white">
                <thead>
                  <tr> 
                    <th>Na</th>
                    <th>Cheo Kinachokaimiwa</th>
                    <th>Anayekaimu</th>
                    <th>Tarehe za Kukaimu</th>
                  </tr>
                </thead>
                <tbody>
<?php $sn=0; do {  $sn++; 

$tarehe_ya_kuanzia = $row_rs_ukaimu['tarehe_ya_kuanzia'];
$tarehe_ya_kukabidhi = $row_rs_ukaimu['tarehe_ya_kukabidhi'];
$muda_wa_ukaimisho = $row_rs_ukaimu['muda_wa_ukaimisho'];

///////////////////// Taarifa za Mtumishi aliyekaimisha

$colname_rs_aliyekaimisha = $row_rs_ukaimu['aliyekaimisha_username'];

$query_rs_aliyekaimisha = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname_rs_aliyekaimisha);
$rs_aliyekaimisha = mysqli_query($conntscpME, $query_rs_aliyekaimisha) or die(mysqli_error());
$row_rs_aliyekaimisha = mysqli_fetch_assoc($rs_aliyekaimisha);
$totalRows_rs_aliyekaimisha = mysqli_num_rows($rs_aliyekaimisha);

//Jina la Idara/Kitengo
$div_unit_ID_aliyekaimisha = $row_rs_aliyekaimisha['div_unit_ID'];

$query_rsdiv_unit_name_aliyekaimisha = sprintf("SELECT * FROM divisions_units WHERE div_unit_ID = '%s'", $div_unit_ID_aliyekaimisha);
$rsdiv_unit_name_aliyekaimisha = mysqli_query($conntscpME, $query_rsdiv_unit_name_aliyekaimisha) or die(mysqli_error());
$row_rsdiv_unit_name_aliyekaimisha = mysqli_fetch_assoc($rsdiv_unit_name_aliyekaimisha);
$totalRows_rsdiv_unit_name_aliyekaimisha = mysqli_num_rows($rsdiv_unit_name_aliyekaimisha);

//Jina la Seksheni
$section_ID_aliyekaimisha = $row_rs_aliyekaimisha['section_ID'];

$query_rssection_name_aliyekaimisha = sprintf("SELECT * FROM sections WHERE section_ID = '%s'", $section_ID_aliyekaimisha);
$rssection_name_aliyekaimisha = mysqli_query($conntscpME, $query_rssection_name_aliyekaimisha) or die(mysqli_error());
$row_rssection_name_aliyekaimisha = mysqli_fetch_assoc($rssection_name_aliyekaimisha);
$totalRows_rssection_name_aliyekaimisha = mysqli_num_rows($rssection_name_aliyekaimisha);

//Jina la cheo
$cheo_ID_aliyekaimisha = $row_rs_aliyekaimisha['cheo_ID'];

$query_rscheo_name_aliyekaimisha = sprintf("SELECT * FROM vyeo WHERE cheo_ID = '%s'", $cheo_ID_aliyekaimisha);
$rscheo_name_aliyekaimisha = mysqli_query($conntscpME, $query_rscheo_name_aliyekaimisha) or die(mysqli_error());
$row_rscheo_name_aliyekaimisha = mysqli_fetch_assoc($rscheo_name_aliyekaimisha);
$totalRows_rscheo_name_aliyekaimisha = mysqli_num_rows($rscheo_name_aliyekaimisha);

///////////////////// Taarifa za Mtumishi aliyekaimishwa

$colname_rstersuser = $row_rs_ukaimu['aliyekaimishwa_username'];

$query_rstersuser = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname_rstersuser);
$rstersuser = mysqli_query($conntscpME, $query_rstersuser) or die(mysqli_error());
$row_rstersuser = mysqli_fetch_assoc($rstersuser);
$totalRows_rstersuser = mysqli_num_rows($rstersuser);

//Jina la Idara/Kitengo
$div_unit_ID = $row_rstersuser['div_unit_ID'];

$query_rsdiv_unit_name = sprintf("SELECT * FROM divisions_units WHERE div_unit_ID = '%s'", $div_unit_ID);
$rsdiv_unit_name = mysqli_query($conntscpME, $query_rsdiv_unit_name) or die(mysqli_error());
$row_rsdiv_unit_name = mysqli_fetch_assoc($rsdiv_unit_name);
$totalRows_rsdiv_unit_name = mysqli_num_rows($rsdiv_unit_name);

//Jina la Seksheni
$section_ID = $row_rstersuser['section_ID'];

$query_rssection_name = sprintf("SELECT * FROM sections WHERE section_ID = '%s'", $section_ID);
$rssection_name = mysqli_query($conntscpME, $query_rssection_name) or die(mysqli_error());
$row_rssection_name = mysqli_fetch_assoc($rssection_name);
$totalRows_rssection_name = mysqli_num_rows($rssection_name);

//Jina la cheo
$cheo_ID = $row_rstersuser['cheo_ID'];

$query_rscheo_name = sprintf("SELECT * FROM vyeo WHERE cheo_ID = '%s'", $cheo_ID);
$rscheo_name = mysqli_query($conntscpME, $query_rscheo_name) or die(mysqli_error());
$row_rscheo_name = mysqli_fetch_assoc($rscheo_name);
$totalRows_rscheo_name = mysqli_num_rows($rscheo_name);
?>
                  <tr> 
                    <td width="20px"> 
                      <?php echo $sn.".";?>
                    </td>
                    <td> 
                      <?php echo $cheo_ID_aliyekaimisha;?>
                    </td>
                    <td><?php echo $row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name']." (".$cheo_ID.")";?></td>
                    <td> 
                      <?php echo $tarehe_ya_kuanzia." mpaka ".$tarehe_ya_kukabidhi."&nbsp;&nbsp;"; ?>
                      <span><a href="kukaimu_report.php?kibali_id=<?php echo $row_rs_ukaimu['id'];?>"> 
                      <?php if($row_rs_ukaimu['ruti_ID'] == "ruti_zaidi_ya_moja") { ?>
                      <img src="/images/view_unganisha.png" width="30" height="13" title="tazama"> 
                      <?php }else{?>
                      <img src="/images/view.png" width="30" height="13" title="tazama"> 
                      <?php };?>
                      </a></span> </td>
                  </tr>
                  <?php } while ($row_rs_ukaimu= mysqli_fetch_assoc($rs_ukaimu));?>
                </tbody>
              </table>
            </div>
            <div class="row_form" style="padding:0px 0px 16px 0px"> Zaidi.. </div>
            <!--  *******************  END UKAIMU KWA WOTE **************-->
          </div>
          <?php };?>
          <?php };?>
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