<?php include('ruhusa.php');
include('/user/'.$_SESSION['levelID'].'/status.php');
include('/user/'.$_SESSION['levelID'].'/aina_ya_kibali.php');
?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>
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
<script>
function passwordcheckCS() {
var pwd1 = document.changepwd.password.value;
var pwd2 = document.changepwd.password2.value;

if(pwd1.length > 5 ){
if(pwd1 == pwd2) { return true; }
alert("Nywila mpya hazifanani!");
return false;
}else{
alert("Nywila isiwe tupu na idadi ya herufi isiwe chini ya sita!");
return false;
}
}
</script>
<?php
//$from=$_GET['from'];
if($_GET['wrongoldpwd']=="yes"){ $_GET['wrongoldpwd']==""?> <script>alert("Nywila ya sasa imekosewa!"); </script>
<?php };?>
<?php if($_GET['mafanikio']=="yes"){ $_GET['mafanikio']==""?> <script>alert("Umefanikiwa kubadili nywila yako!"); </script>
<?php };?>

<?php
if(isset($_GET['mafanikio'])){
print "<meta http-equiv='refresh' content='0; url=user/".$_SESSION['levelID']."/index.php?doLogout=true'>";
//header("Location: user/".$from."/index.php?doLogout=true"); Header inagairi alert!
};
?>

<!--php
if(isset($_GET['mafanikio'])){		                   
$strRedirectUrl = "user/".$from."/index.php?doLogout=true";
echo  "<script type='text/javascript'>";
echo("window.opener.location.href = '" . $strRedirectUrl . "';");
echo "setTimeout('window.close()', 500);";
echo "</script>";};
?-->

	
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
        <div id="sidenav-title" class="show-1 content1 mkono">Kibali cha Kusafiri</div>
        <div class="menu-1" style="display: none;"> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/maombi_mapya.php'>";?>
          <?php echo $menu_title_tuma_maombi; ?></a> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/maombi_mapya_list.php'";?>
          <?php if($idadi_maombi_mapya != ""){echo "class='badge1' data-badge='".$idadi_maombi_mapya."'";};?>
          >Maombi Mapya</a> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/yaliyopita_muda.php'";?>
          <?php if($idadi_yaliyopita_muda != ""){echo "class='badge1' data-badge='".$idadi_yaliyopita_muda."'";};?>
          >Yaliyopita Muda</a> <a target="_top" href="http://localhost">Fuatilia 
          Maombi</a> <a target="_top" href="http://localhost">Yaliyosubirishwa</a> 
          <a target="_top" href="http://localhost">Yaliyoidhinishwa</a> <a target="_top" href="http://localhost">Yaliyokataliwa</a> 
        </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Mrejesho wa Safari</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost">Toa 
          Ripoti</a> <a target="_top" href="http://localhost">Masurufu</a> </div>
        <div id="sidenav-title" class="no_jumlisha_toa mkono">Ripoti</div>
        <?php if ($_SESSION['levelID'] == "hos"){?>
        <div id="sidenav-title" class="show-3 content3 mkono">Shughulikia Maombi</div>
        <div class="menu-3" style="display: none;"> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/yanayoingia_list.php'";?>
          <?php if($idadi_yanayoingia_hos != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_hos."'";};?>
          >Yanayoingia</a> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/yaliyopitishwa_list.php'";?>
          <?php if($idadi_yaliyopitishwa_hos != ""){echo "class='badge1' data-badge='".$idadi_yaliyopitishwa_hos."'";};?>
          >Uliyokubali</a> 
          <?php echo "<a target='_top' href='http://localhost/user/".$_SESSION['levelID']."/yaliyokataliwa_list.php'";?>
          <?php if($idadi_yaliyokataliwa_hos != ""){echo "class='badge1' data-badge='".$idadi_yaliyokataliwa_hos."'";};?>
          >Uliyokataa</a> </div>
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
            <div class="kichwa_ndogo form_link"><a href="http://localhost/user/nu/index.php">Mwanzo</a>&nbsp;<span class="kichwa_ndogo_sana">/</span>&nbsp;Tuma 
              Maombi</div>
          </div>
          <!-- Mwanzo wa fomu-->
          <div class="container_form"> 
            <h5>Badili Nywila</h5>
            <div class="w3-small w3-opacity form_link" style="padding:0px 0px 10px 0px;"> 
              <?php echo"<a href='http://localhost/user/".$_SESSION['levelID']."/index.php'>";?>
              Mwanzo</a>&nbsp;<span class="w3-tiny">/</span>&nbsp;Badili Nywila</div>
            <form action="changepwdquery.php" method="POST" name="changepwd" id="changepwd">
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="email">Anuani ya Barua Pepe</label-->
                </div>
                <div class="col-form-75" data-tip="Nywila ya sasa"> 
                  <!--input type="text" id="frm_tarehe" name="frm_tarehe" placeholder="Kuanzia tarehe.."-->
                  <input type="password"  class="form-control registrationFormtext" id="oldpassword" name="oldpassword" placeholder="Nywila ya sasa.." value=""/>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Nywila mpya"> 
                  <!--input type="text" id="to_tarehe" name="to_tarehe" placeholder="Mpaka tarehe.."-->
                  <input type="password" class="form-control registrationFormtext" id="password" name="password" placeholder="Nywila mpya.." value=""/>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Rudia nywila mpya"> 
                  <input type="password" class="form-control registrationFormtext" id="password2" name="password2" placeholder="Rudia nywila mpya.." value="">
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75" data-tip="Namba ya uhakiki"> <img src="http://localhost/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="87" height="39" align="absbottom" /> 
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75" data-tip="Andika namba ya uhakiki"> 
                  <input name="verif_box" type="text" id="verif_box" class= "form-control" style="width:87px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:15px;"/>
                </div>
              </div>
              <?php if(isset($_GET['wrong_code'])){?>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75"> 
                  <div class="col-makosa-100">Namba za uhakiki hazikufanana!</div>
                </div>
              </div>
              <?php ;}?>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75"> 
                  <input  class="registrationFormsubmit" type="submit" value="Badili" onclick="return passwordcheckCS();">
                </div>
              </div>
              <input name="userID" id="userID" type="hidden" value="<?php echo $_SESSION['id'];?>">
              <input type="hidden" name="MM_update" value="changepwd">
            </form>
          </div>
          <!--Mwisho wa fomu-->
        </div>
      </div>
      <!-- footer-->
      <div id="footer" class="footer w3-container w3-whiteQ"> <br>
        <!--div class="w3-row-padding w3-center w3-small" style="margin:0 -16px">
					<div class="w3-col l3 m3 s12">
					<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" onclick="displayError();return false" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px">KIBALI</a>
					</div>
					<div class="w3-col l3 m3 s12">
					<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" target="_blank" onclick="printPage();return false;" style="text-decoration:none;margin-top:1px;margin-bottom:1px">MAREJESHO</a>
					</div>
					<div class="w3-col l3 m3 s12">
					<a class="w3-button w3-light-grey w3-block" href="http://localhost/forum/default.asp" target="_blank" style="text-decoration:none;margin-top:1px;margin-bottom:1px">RIPOTI</a>
					</div>
					<div class="w3-col l3 m3 s12">
					<a class="w3-button w3-light-grey w3-block" href="http://localhost" target="_top" style="text-decoration:none;margin-top:1px;margin-bottom:1px">KUMBUKUMBU</a>
					</div>
				</div-->
        <!--div class="mstari"></div-->
        <!--div class="w3-row w3-center w3-small">
					<div class="w3-col l3 m6 s12">
						<div class="top10">
						<h4>Tazama kwa Haraka...</h4>
						<a href="http://localhost/html/default.asp">Hatua ya Kibali</a><br>
						<a href="http://localhost/css/default.asp">Fanya Mabadiliko</a><br>
						<a href="http://localhost/js/default.asp">Sitisha Kibali</a><br>
						<a href="http://localhost/howto/default.asp">Mrejesho wa Haraka</a><br>
						<a href="http://localhost/sql/default.asp">Matangazo</a><br>
						</div>
					</div>
					<div class="w3-col l3 m6 s12">
						<div class="top10">
						<h4>Badili Mipangilio</h4>
						<a href="http://localhost/tags/default.asp">Nywila</a><br>
						<a href="http://localhost/cssref/default.asp">Nambari ya Simu</a><br>
						<a href="http://localhost/jsref/default.asp">Ngazi au Daraja</a><br>
						<a href="http://localhost/sql/sql_ref_keywords.asp">Taarifa Zako</a><br>
						<a href="http://localhost/python/python_reference.asp">Mengineyo...</a><br>
						</div>
					</div>
					<div class="w3-col l3 m6 s12">
						<div class="top10">
						<h4>Pakua Fomu</h4>
						<a href="http://localhost/html/html_examples.asp">Kibali cha Kusafiri</a><br>
						<a href="http://localhost/css/css_examples.asp">Masurufu ya Safari</a><br>
						<a href="http://localhost/js/js_examples.asp">Marejesho ya Masurufu</a><br>
						<a href="http://localhost/howto/default.asp">Posho</a><br>
						<a href="http://localhost/sql/sql_examples.asp">Fomu Nyingine</a><br>
						</div>
					</div>
					<div class="w3-col l3 m6 s12">
						<div class="top10">
						<h4>Nyaraka za Msaada</h4>
						<a href="http://localhost/cert/default.asp">Muongozo kwa Mtumiaji</a><br>
						<a href="http://localhost/cert/default.asp">Muongozo wa Safari</a><br>
						<a href="http://localhost/cert/default.asp">Msaada Mwingine</a><br>
						<a href="http://localhost/cert/default.asp">Muongozo Mwingine</a><br>
						<a href="http://localhost/cert/default.asp">Nyaraka ya Msaada</a><br>			
						<!--a href="http://localhost/cert/default.asp" class="w3-button w3-margin-top w3-dark-grey" style="text-decoration:none">Get Certified »</a>			
						</div>
					</div>
				</div-->
        <div class="mstari-chini"></div>
        <div class="w3-center w3-small w3-opacity"> Tumia mfumo huu kuomba kibali 
          cha kusafiri ndani ya nchi. Kuomba kibali cha kusafiri nje ya nchi tafadhali 
          <a href="https://safari.gov.go.tz" target="_blank">bofya hapa</a>.<br>
          <a href="https://www.mnrt.go.tz" target="_blank">Wizara ya Maliasili 
          na Utalii</a>.<br>
          <br>
          <img style="width:100px;height:60px;border:0" src="/images/logo-main-gray.png" alt="W3Schools.com"> 
        </div>
        <br>
        <br>
      </div>
    </div>
    <script src="http://localhost/js/w3schools_footer.js"></script>
  </div>
</div>
</body>
</html>