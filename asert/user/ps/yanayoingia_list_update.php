<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php'); ?>
<?php
require_once('../../update_zimebaki_siku.php');
include('status.php');
include('aina_ya_kibali.php');

$colname_rsselectedKibali = "-1";
if (isset($_GET['id'])) {
  $colname_rsselectedKibali = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
}

$query_rsselectedKibali = sprintf("SELECT * FROM vibali WHERE id = %s", $colname_rsselectedKibali);
$rsselectedKibali = mysqli_query($conntscpME, $query_rsselectedKibali) or die(mysqli_error());
$row_rsselectedKibali = mysqli_fetch_assoc($rsselectedKibali);
$totalRows_rsselectedKibali = mysqli_num_rows($rsselectedKibali);

//chagua unakokwenda..mkoani au halmashauri

$querCat=mysqli_query($conntscpME, "SELECT * FROM orglevels");
//$catID=$_GET['catID']; OLD
$_GET['catID'] = "lga";
$catID=$_GET['catID'];

//The second..mikoa.. list inategemea chaguo la kwanza...unakokwenda
//Andaa list ya mikoa anyway

if(isset($catID) and strlen($catID) > 0){ //kuepuka wakati value=''
$query_rsRegion = sprintf("SELECT * FROM regions order by regID");
$quer = mysqli_query($conntscpME, $query_rsRegion) or die(mysqli_error());
}//else{ Display nothing when commented

//The third list..halmashauri...inategemea first list na second list. Chagua mkoa halafu halmashauri
$colname_rslga = "-1";
if (isset($_GET['regID'])) {
 $colname_rslga = (get_magic_quotes_gpc()) ? $_GET['regID'] : addslashes($_GET['regID']);
}

$regID=$_GET['regID']; // This line is added to take care if your global variable is off
if(isset($regID) and strlen($regID) > 0){
$query_rslga = sprintf("SELECT * FROM lgas WHERE regID = '%s'", $colname_rslga);
$quer3b = mysqli_query($conntscpME, $query_rslga) or die(mysqli_error());
}//else{$quer3=mysqli_query($conntscpME, "SELECT * FROM tbl_lgas order by lgaID"); }
$lgaID=$_GET['lgaID'];


$querusafiri=mysqli_query($conntscpME, "SELECT * FROM usafiri");
$usafiriID=$_GET['usafiriID'];


$quermadhumuni=mysqli_query($conntscpME, "SELECT * FROM madhumuni");
$madhumuniID=$_GET['madhumuniID'];


$quermlipaji=mysqli_query($conntscpME, "SELECT * FROM mlipaji");
$mlipajiID=$_GET['mlipajiID'];

//UNGWANISHA SAFARI

$querruti=mysqli_query($conntscpME, "SELECT * FROM ruti_ya_safari");
$ruti_ID=$_GET['ruti_ID'];

//$colname_rsTitle = "-1";
//if (isset($_GET['catID'])) {
 //$colname_rsTitle = (get_magic_quotes_gpc()) ? $_GET['catID'] : addslashes($_GET['catID']);
//}
//
//$catID=$_GET['catID']; // This line is added to take care if your global variable is off
//if(isset($catID) and strlen($catID) > 0){//kuepuka wakati value=''
//$query_rsTitle = sprintf("SELECT * FROM titles WHERE level = '%s' ORDER BY titleID ASC", $colname_rsTitle);
//$quer4 = mysqli_query($conntscpME, $query_rsTitle) or die(mysqli_error());
//}
//$titleCode=$_GET['titleCode'];

?>

<!DOCTYPE html>
<html style="height: 100%;" lang="en-US" class="restade"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Local Traveling Permit - MNRT</title>
<meta charset="utf-8">
<link rel="icon" href="http://localhost/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/w3.css">
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/resp_form.css">
<!--link rel="stylesheet" type="text/css" href="/css/pandisha_faili.css"-->
<link rel="stylesheet" type="text/css" href="/css/toggle.css">

<!--nice-select -->
<link rel="stylesheet" type="text/css" href="/css/nice_select.css">

<!--script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script-->

<?php 
require('../datepicker/demos/datepicker/date-range.php');
?>

<!-- NICE SELECT -->

  <script src="http://localhost/js/jquery.nice-select.min.js"></script>
  <script src="http://localhost/js/fastclick.js"></script>
  <script src="http://localhost/js/prism.js"></script>
  
  <script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();
      FastClick.attach(document.body);
    });    
  </script>

<!-- END NICE SELECT -->

<!-- MAP -->

<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />
<!--link rel="stylesheet" href="/css/jquery-ui.min.css"-->
<link rel="stylesheet" href="/css/custom.css">
<!--script src="http://localhost/js/jquery-3.3.1.min.js"></script-->
<!--script src="http://localhost/js/jquery-ui.min.js"></script-->
<script src="http://localhost/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://localhost/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm0DstE57TX5C92SaoYEMLJfuRNJ18Fxk&callback=initMap&language=sw" async defer></script>
	
<!-- END MAP -->

<!-- SELECT 2 >

<!--script src='jquery-3.2.1.min.js' type='text/javascript'></script>
<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
<link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
<script>
//select2..searchable
        $(document).ready(function(){     
            // Initialize select2
			//$("#ruti_ID").select2();
			//$("#jina_la_halmashauri").select2();
            //$("#usafiriID").select2();
			//$("#mlipajiID").select2();
			//$("#madhumuniID").select2();
        });       
</script>

<!-- END SELECT 2 -->

<script>
//Onesha field ya wengine ukichagua Mlipaji Mwingine na ramani_btn ukichagua usafiri kwa barabara...
$(document).ready(function(){

//wakati wa kuedit au reload
if ($("#distance").val() != ""){
$('#kwenda_div').html($('#jina_la_halmashauri').val()+'&nbsp;(Km&nbsp;'+$('#distance').val()+',&nbsp;Masaa&nbsp;'+$('#duration').val()+')');
}else{
$('#kwenda_div').html($('#jina_la_halmashauri').val());
}
//end

	if ($('#wengine').val() != "") {   
	$(".wengine").show();
	}else{ $(".wengine").hide();}
	
	$("#mlipajiID").change(function(){
		if ($('#mlipajiID').val() == "wengine") {   
		$(".wengine").show("fast");
		} 
		else {
		$('#wengine').val('');		
		$(".wengine").hide("fast");
		}
	 });
	 
	 //ramani_btn
	 if (($('#usafiriID').val() == "gls") || ($('#usafiriID').val() == "uwub")) {
	 $(".ramani_btn").show();
	 }else{
	 $("#distance").val('');
	 $("#duration").val('');
	 $(".ramani_btn").hide();
	 }
	 $("#usafiriID").change(function(){
		if (($('#usafiriID').val() == "gls") || ($('#usafiriID').val() == "uwub")) {  
		$('#kwenda_div').html($('#jina_la_halmashauri').val()); 
		$(".ramani_btn").show("fast");
		} 
		else {
		//$("#kwenda_div").hide("fast")
		$('#kwenda_div').html($('#jina_la_halmashauri').val());
		$("#distance").val('');
	 	$("#duration").val('');
		$(".ramani_btn").hide("fast");
		}
	 });
	 
	 //jina la halmashauri
	 $("#jina_la_halmashauri").change(function(){
		//if (($('#usafiriID').val() == "gls") || ($('#usafiriID').val() == "uwub")) {   
		//$(".ramani_btn").show("fast");
		//} 
		//else {
		//$("#kwenda_div").hide("fast")
		$('#kwenda_div').html($('#jina_la_halmashauri').val());
		$("#distance").val('');
	 	$("#duration").val('');
		//$(".ramani_btn").hide("fast");
		//}
	 });	 
	 
	 //Safari ya siku 
	 $(".siku").hide();
	 $("#eDate").change(function(){
	 	//$("#eDate").val('');
		//if (($('#sDate').val() != "") && ($('#eDate').val() != "")) {  
		//$('#kwenda_div').html($('#jina_la_halmashauri').val()); 
		$(".siku").show("fast");
		//} 
		//else {
		//$(".siku").hide("fast");
		//}
	 });
	 
});
</script>

<script>
//Zuia kupeleka fields tupu...Take into consideration the hidden CatID, regID na lgaID distance and time above
    $(document).on('click','.submitallplayerbtn',function(){   
        $forms=$('form');
        var allvalid=true;
        $($forms).each(function(index,$form){
		
            $inputs=$($form).find('input');
			$selects=$($form).find('select');
			$textareas=$($form).find('textarea');

            $($inputs).each(function(index,$input){
				if($($input).hasClass('mandatory')) {
					if($($input).val()=="")
					{
						//alert('Jaza maeneo yote ya fomu ..');
						$($input).css('border','1px solid red');
						allvalid=false;
					}else{ $($input).css('border','1px solid #ccc');}
				}
            });
			
		    $($selects).each(function(index,$select){
				if($($select).hasClass('mandatory')) {
					//TAZAMA SELECT TUPU....
					if( !$($select).val() )
					{
						//alert('Tazama select hapo juu ..');
						$($select).css('border','1px solid red');
						allvalid=false;
					}else{ $($select).css('border','1px solid #ccc');}
				}
            });
			
			$($textareas).each(function(index,$textarea){
				if($($textarea).hasClass('mandatory')) {
					if($($textarea).val()=="")
					{
						//alert('Jaza maeneo yote ya fomu ..');
						$($textarea).css('border','1px solid red');
						allvalid=false;
					}else{ $($textarea).css('border','1px solid #ccc');}
				}
            });
			
			//$($textareas).each(function(index,$textarea){
				//if($($textarea).hasClass('mandatory')) {
				//Field ...wengine... sio mandatory..so natumia trick nyingine
					if( ($('#mlipajiID').val()=="wengine") && ($('#wengine').val()=="") )
					{
						//alert('Jaza maeneo yote ya fomu ..');
						$('#wengine').css('border','1px solid red');
						allvalid=false;
					}else{ $('#wengine').css('border','1px solid #ccc');}
				//}
            //});
			
			//$($textareas).each(function(index,$textarea){
				//if($($textarea).hasClass('mandatory')) {
				//Field ...wengine... sio mandatory..so natumia trick nyingine
					if( ((($('#usafiriID').val()=="gls") || ($('#usafiriID').val()=="uwub")) && ($('#distance').val()=="")) )
					{
						alert('Ingiza Umbali..');
						//$('#wengine').css('border','1px solid red');
						allvalid=false;
					}
				//}
            //});
	
        });''
		
        if(!allvalid)
        {
            //alert('Jaza maeneo yote ya fomu ..');
			return false;
        }
    });

</script>

<!--script>
function kaguaKiambata() {	
	//Kama mlipaji ni mwingine basi ni LAZIMA kujaza wengine na kuambatanisha vielelezo	
	///var mlipajiID = document.maombi_mapya_Form.mlipajiID.value;
	var wengine = document.maombi_mapya_list_updateForm.wengine.value;
	var jina_kiambata = document.maombi_mapya_list_updateForm.jina_kiambata.value;
	var kiambata = document.maombi_mapya_list_updateForm.kiambata.value;
	///if((mlipajiID == "wengine" ) && (wengine == "" )) {
	///alert("Andika jina la mlipaji mwingine..");
	///return false;
	///}
	//Lazima aambatanishe vielelezo na jina la kielelezo
	if((wengine.length > 0 ) || ((jina_kiambata.length > 0 ) && (kiambata == "" )) || ((jina_kiambata == "" ) && (kiambata.length > 0 ))){			
			//var jina_kiambata = document.maombi_mapya_Form.jina_kiambata.value;
			//var kiambata = document.maombi_mapya_Form.kiambata.value;
			if(jina_kiambata.length > 0 ) {
				if(kiambata.length > 0) { return true; }
				alert("Ambatanisha kielelezo ulichoandika jina lake!");
				return false;
			}else{
				alert("Andika jina la kielelezo na ukiambatanishe!");
				return false;
				}
	}
	
}
</script-->

<script src="http://localhost/js/toggle.js"></script>

<?php 
if(($_GET['c_tupu']=="ipo") || ($_GET['tupu'])=="ipo"){ require('reload_tupu_update_ps.php'); }else{ require('reload_update_ps.php'); };
?>

<!-- FOR THE MAP -->

<?php 
$Starting_Address = "Government City, Mtumba, Dodoma, Tanzania"; 
$Travel_Mode = "DRIVING";
?>

<script type="text/javascript">
	var startAddress = "<?php echo $Starting_Address; ?>";
	var selectedMode = "<?php echo $Travel_Mode; ?>";
</script>

<!-- END FOR THE MAP -->

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
        <div class="menu-1" style="display: none;"> <a target="_top" href="http://localhost/user瀯⽳maombi_mapya.php"> 
          <php echo $menu_title_tuma_maombi;?>
          </a> <a target="_top" href="http://localhost/user/ps/maombi_mapya_list.php" <php if($idadi_maombi_mapya != ""){echo "class='badge1' data-badge='".$idadi_maombi_mapya."'";};?>>Maombi 
          Mapya</a> <a target="_top" href="http://localhost/user/ps/yaliyopita_muda.php" <php if($idadi_yaliyopita_muda != ""){echo "class='badge1' data-badge='".$idadi_yaliyopita_muda."'";};?>>Yaliyopita 
          Muda</a> <a target="_top" href="http://localhost">Fuatilia Maombi</a> 
          <a target="_top" href="http://localhost">Yaliyosubirishwa</a> <a target="_top" href="http://localhost">Yaliyoidhinishwa</a> 
          <a target="_top" href="http://localhost">Yaliyokataliwa</a> </div>
        <div id="sidenav-title" class="show-2 content2 mkono">Mrejesho wa Safari</div>
        <div class="menu-2" style="display: none;"> <a target="_top" href="http://localhost">Toa 
          Ripoti</a> <a target="_top" href="http://localhost">Masurufu</a> </div>
        <div id="sidenav-title" class="no_jumlisha_toa mkono">Ripoti</div-->
        <div id="sidenav-title" class="show_teuzi content_teuzi mkono">Shughulikia 
          Maombi</div>
        <div class="menu_teuzi" style="display: block;"> 
          <div id="sidenav-imechaguliwa_2"<?php if($idadi_yanayoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_yanayoingia_ps."'";};?>>Yanayoingia</div>
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
		<div id="sidenav-title" class="show-4 content4 mkono">Ripoti za Safari</div>
        <div class="menu-4" style="display: none;"> <a target="_top" href="http://localhost/user/ps/safari_ripoti_zinazoingia_list.php" <?php if($idadi_safari_ripoti_zinazoingia_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_zinazoingia_ps."'";};?>>Zinazoingia</a> 
          <a target="_top" href="http://localhost/user/ps/safari_ripoti_ulizokataa_list.php" <?php if($idadi_safari_ripoti_ulizokataa_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizokataa_ps."'";};?>>Ulizokataa</a> 
          <a target="_top" href="http://localhost/user/ps/safari_ripoti_ulizopitisha_list.php" <?php if($idadi_safari_ripoti_ulizopitisha_ps != ""){echo "class='badge1' data-badge='".$idadi_safari_ripoti_ulizopitisha_ps."'";};?>>Ulizopitisha</a> 
        </div>
		<div id="sidenav_hamia" onClick="window.location.href='http://localhost/user/nu/index.php'" class="no_jumlisha_toa mkono">Omba 
          Kibali</div>
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
            <div class="kichwa_ndogo form_link"><a href="http://localhost/user/ps/index.php">Mwanzo</a>&nbsp;<span class="kichwa_ndogo_sana">/</span>&nbsp;Tuma 
              Maombi</div>
          </div> 
          <!-- Mwanzo wa fomu-->
          <div class="container_form"> 
            <h5> 
              <?php echo "Badili Maombi ya&nbsp;".$_SESSION['f_name_mtumishi']."&nbsp;".$_SESSION['m_name_mtumishi']."&nbsp;".$_SESSION['l_name_mtumishi'];?>
            </h5>
            <div class="w3-small w3-opacity form_link"  style="padding:0px 0px 10px 0px;"><a href="http://localhost/user/ps/yanayoingia_list.php">Yote 
              Yanayoingia</a>&nbsp;&nbsp;<span class="w3-tiny">/</span>&nbsp;&nbsp;<a href="http://localhost/user/ps/yanayoingia_tazama.php?id=<?php echo $_GET['id'];?>">Tazama 
              Maombi Yake</a>&nbsp;&nbsp;<span class="w3-tiny">/</span>&nbsp;&nbsp; 
              <?php echo $_SESSION['f_name_mtumishi']."&nbsp;".$_SESSION['m_name_mtumishi']."&nbsp;".$_SESSION['l_name_mtumishi'].",&nbsp;&nbsp;".$_SESSION['cheo_mtumishi']."&nbsp;-&nbsp;".$_SESSION['seksheni_mtumishi'];?>
            </div>
            <?php if($_GET['ruti_ID'] == "ruti_zaidi_ya_moja"){?><form action="yanayoingia_list_updatequery_unganisha.php" method="POST" name="yanayoingia_list_updateForm" id="yanayoingia_list_updateForm"> 
            <?php }else{?>
            <form action="yanayoingia_list_updatequery.php" method="POST" name="yanayoingia_list_updateForm" id="yanayoingia_list_updateForm">
              <?php };?>
              <!-- FROM DODOMA TO A CERTAIN LGA -->
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="f_name">Jina la Kwanza</label-->
                </div>
                <div class="col-form-75_muungano" data-tip="Safari route.."> 
                  <?php
				echo "<select name='ruti_ID' id='ruti_ID' class='wide' width='100%' style='width: 100%' onchange=\"reloadRoute(this.form)\"><option selected disabled value=''>Chagua ruti..</option>";
				while($noticiaruti = mysqli_fetch_array($querruti)) {
				if($noticiaruti['ruti_ID']==@$ruti_ID){echo "<option selected value='$noticiaruti[ruti_ID]'>$noticiaruti[aina_ya_ruti]</option>"."<BR>";}
				else{echo "<option  value='$noticiaruti[ruti_ID]'>$noticiaruti[aina_ya_ruti]</option>";}
				}
				echo "</select>";
				?>
                </div>
              </div>
              <?php if ($_GET['ruti_ID'] !="") {?>
              <div class="row_form"> 
                <div class="col-form-50 ruti_title"> 
                  <?php if ($_GET['ruti_ID'] == "ruti_zaidi_ya_moja") { echo "Ruti ya Kwanza:&nbsp;Dodoma Kwenda&nbsp;";
				}else{ echo "Kutoka Dodoma Kwenda&nbsp;";};?>
                </div>
                <div id="kwenda_div" class="col-form-50 ruti_title"> </div>
              </div>
              <!-- END FROM DODOMA TO A CERTAIN LGA -->
              <!--  MKOA NA HALMASHAURI regID na lgaID hata catID AUTO SUGGEST -->
              <div class="row_form"> 
                <div class="col-form-75" data-tip="Andika halmashauri uendayo.."> 
                  <input type="text" data-type="jina_la_halmashauri" name="jina_la_halmashauri" id="jina_la_halmashauri" class="mandatory form-control autocomplete_txt registrationFormtext"  placeholder="Andika halmashauri uendayo.." value="<?php echo $_GET['jina_la_halmashauri'];?>">
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-75" data-tip="Usafiri unaotumia"> 
                  <!-- Dropdown -->
                  <?php
					echo "<select name='usafiriID' id='usafiriID' class='mandatory wide'  width='100%' style='width: 100%' onchange=\'reloadusafiriHOLD(this.form)\'><option value='' selected disabled>Chagua usafiri..</option>";
					while($noticiausafiri = mysqli_fetch_array($querusafiri)) {
					if($noticiausafiri['usafiriID']==@$usafiriID){echo "<option selected value='$noticiausafiri[usafiriID]'>$noticiausafiri[usafiri]</option>"."<BR>";}
					else{echo "<option  value='$noticiausafiri[usafiriID]'>$noticiausafiri[usafiri]</option>";}
					}
					echo "</select>";
					?>
                </div>
              </div>
              <!-- NICE SELECT -->
              <!--div class="box">
			  <label>Wide</label>
			  <select class="wide">
				<option data-display="Select">Nothing</option>
				<option value="1">Some option</option>
				<option value="2">Another option</option>
				<option value="3" disabled>A disabled option</option>
				<option value="4">Potato</option>
			  </select>
			  </div-->
              <!-- NICE SELECT -->
              <div class="row_form"> 
                <div class="col-form-75 ramani_btn"> 
                  <!--[&nbsp;<a id="enterDistance" href="#">Ingiza Umbali & Muda</a>&nbsp;]-->
                  <input type="button" id="enterDistance" class="btn btn-primary" value="Ingiza Umbali & Muda" onclick="window.location.href='#'" />
                </div>
              </div>
              <input type="hidden" name="duration" id="duration" class="form-control"  placeholder="Duration" value="<?php echo $_GET['duration']; ?>">
              <input type="hidden" name="distance" id="distance" class="form-control"  placeholder="Distance" value="<?php echo $_GET['distance']; ?>">
              <input type="hidden" data-type="catID" name="catID" id="catID" class="form-control autocomplete_txt" value="<?php echo $_GET['catID'];?>">
              <input type="hidden" data-type="regID" name="regID" id="regID" class="form-control autocomplete_txt" value="<?php echo $_GET['regID'];?>">
              <input type="hidden" data-type="lgaID" name="lgaID" id="lgaID" class="form-control autocomplete_txt" value="<?php echo $_GET['lgaID'];?>">
              <!--  END MKOA NA HALMASHAURI regID na lgaID hata catID AUTO SUGGEST -->
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Anayelipia safari"> 
                  <!--input type="text" class="registrationFormtext" id="mlipaji" name="mlipaji" placeholder="Mlipaji.."-->
                  <?php
					echo "<select name='mlipajiID' id='mlipajiID' class='mandatory wide' width='100%' style='width: 100%' onchange=\'reloadusafiriHOLD(this.form)\'><option value='' selected disabled>Chagua mlipaji..</option>";
					while($noticiamlipaji = mysqli_fetch_array($quermlipaji)) {
					if($noticiamlipaji['mlipajiID']==@$mlipajiID){echo "<option selected value='$noticiamlipaji[mlipajiID]'>$noticiamlipaji[mlipaji]</option>"."<BR>";}
					else{echo "<option  value='$noticiamlipaji[mlipajiID]'>$noticiamlipaji[mlipaji]</option>";}
					}
					echo "</select>";
					?>
                </div>
              </div>
              <!--?php if ($_GET["mlipajiID"]=="wengine") {;?-->
              <div class="row_form wengine"> 
                <div class="col-form-75" data-tip="Jina la mlipaji"> 
                  <input type="text" <?php if(((isset($_GET['wengine'])) && ($_GET['wengine']=="tupu")) || (($_GET['tupu']=="ipo") && ($_GET['wengine']==''))){ echo "class='registrationFormtext-error'"; $_GET['wengine']=''; }else{ echo "class='form-control registrationFormtext'";};?> id="wengine" name="wengine" placeholder="Andika jina la mlipaji.." value="<?php echo $_GET['wengine'];?>">
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Madhumuni ya safari"> 
                  <!--input type="text" class="registrationFormtext" id="madhumuni" name="madhumuni" placeholder="Madhumuni.."-->
                  <?php
					echo "<select name='madhumuniID' id='madhumuniID' class='mandatory wide' width='100%' style='width: 100%' onchange=\'reloadusafiriHOLD(this.form)\'><option value='' selected disabled>Chagua madhumuni ya safari..</option>";
					while($noticiamadhumuni = mysqli_fetch_array($quermadhumuni)) {
					if($noticiamadhumuni['madhumuniID']==@$madhumuniID){echo "<option selected value='$noticiamadhumuni[madhumuniID]'>$noticiamadhumuni[madhumuni]</option>"."<BR>";}
					else{echo "<option  value='$noticiamadhumuni[madhumuniID]'>$noticiamadhumuni[madhumuni]</option>";}
					}
					echo "</select>";
					?>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="subject">Subject</label-->
                </div>
                <div class="col-form-75" data-tip="Maelezo kwa ufupi"> 
                  <textarea id="muhtasari" <?php if(((isset($_GET['muhtasari'])) && ($_GET['muhtasari']=="tupu")) || (($_GET['tupu']=="ipo") && ($_GET['muhtasari']==''))){ echo "class='registrationFormtextarea-error'"; $_GET['muhtasari']=''; }else{ echo "class='mandatory form-control registrationFormtextarea'";};?> name="muhtasari" placeholder="Maelezo kwa ufupi.." style="height:100px"><?php echo $_GET['muhtasari'];?></textarea>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="email">Anuani ya Barua Pepe</label-->
                </div>
                <div class="col-form-75" data-tip="Tarehe ya kuondoka"> 
                  <!--input type="text" id="frm_tarehe" name="frm_tarehe" placeholder="Kuanzia tarehe.."-->
                  <input type="text" <?php if(((isset($_GET["sDate"])) && ($_GET['sDate']=="tupu")) || (($_GET['tupu']=="ipo") && ($_GET['sDate']==''))){ echo "class='registrationFormtext-error'"; $_GET['sDate']=''; }else{ echo "class='mandatory registrationFormtext'";};?> id="sDate" name="sDate" placeholder="Tarehe ya kuondoka.." readonly="true" value="<?php echo $_GET['sDate'];?>"/>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Tarehe ya kurudi"> 
                  <!--input type="text" id="to_tarehe" name="to_tarehe" placeholder="Mpaka tarehe.."-->
                  <input type="text" <?php if(((isset($_GET['eDate'])) && ($_GET['eDate']=="tupu")) || (($_GET['tupu']=="ipo") && ($_GET['eDate']==''))){ echo "class='registrationFormtext-error'"; $_GET['eDate']=''; }else{ echo "class='mandatory registrationFormtext'";};?> id="eDate" name="eDate" readonly="true" placeholder="Tarehe ya kurudi.." value="<?php echo $_GET['eDate'];?>"/>
                </div>
              </div>
              <div class="row_form siku"> 
                <div class="col-form-label_duration"> Safari ya siku </div>
                <div class="col-form-duration"> 
                  <input type="text" class="registrationFormduration" id="duration_safarini" name="duration_safarini" readonly="true" value="<?php echo $_GET['duration_safarini'];?>"/>
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75" data-tip="Namba ya uhakiki"> <img src="http://localhost/user/ps/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="87" height="39" align="absbottom" /> 
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="lname">&nbsp;</label-->
                </div>
                <div class="col-form-75" data-tip="Andika namba ya uhakiki"> 
                  <input name="verif_box" type="text" id="verif_box" class= "mandatory form-control" style="width:87px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:15px;"/>
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
                  <?php if($_GET['ruti_ID'] == "ruti_zaidi_ya_moja"){ ?>
                  <input class="registrationFormsubmit submitallplayerbtn" type="submit" value="Badili">
                  <?php }else{;?>
                  <input class="registrationFormsubmit submitallplayerbtn" type="submit" value="Badili">
                  <?php };?>
                </div>
              </div>
              <input name="kibali_id" type="hidden" id="kibali_id" value="<?php echo $row_rsselectedKibali['id'];?>">
              <input name="mtumishi_ID" type="hidden" id="mtumishi_ID" value="<?php echo $row_rsselectedKibali['username'];?>">
              <!--input name="old_kiambata" type="hidden" id="old_kiambata" value="<php echo $_GET['kiambata'];?>"-->
              <input name="last_edited_ps" type="hidden" id="last_edited_ps" value="<?php echo date("d-m-Y");?>">
              <!--input name="submitDate" type="hidden" id="submitDate" value="<php echo date("d-m-Y");?>"-->
              <input name="page" type="hidden" id="page" value="<?php echo "yanayoingia_list_update";?>">
              <!-- Kwa ajili ya kukagua field-->
              <!--input name="general_status" type="hidden" id="general_status" value="<php echo "kipya";?>"-->
              <input type="hidden" name="MM_update" value="yanayoingia_list_updateForm">
              <?php }; ?>
              <!-- POPUP MAP -->
              <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="header"> 
                <div class="modal-dialog" role="document"> 
                  <div class="modal-content"> 
                    <div class="modal-header custom-modal-header"> 
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="header">Tengeneza Ruti</h4>
                      <p id="origin" class="origin"></p>
                    </div>
                    <div class="modal-body form-inline col-md-12"> 
                      <div class="form-group col-md-12"> <span id="status" class="text-primary col-md-12"></span> 
                        <!--label for="travelMode">Safiri kwa</label-->
                        <select id="travelMode" name="travel_mode" class="wide travel-mode">
                          <option value="DRIVING">Kwa Gari</option>
                          <option value="WALKING">Kwa Kutembea</option>
                          <option value="BICYCLING">Kwa Baiskeli</option>
                        </select>
                      </div>
                      <div id="map"></div>
                    </div>
                    <div class="modal-footer"> 
                      <div class="pull-left route-details"> <span>Umbali: </span> 
                        <span id="popupDistance">Km 0</span> <span>&nbsp;&nbsp;Muda: 
                        </span> <span id="popupDuration">Masaa 0</span> </div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancel();">Futa</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveInFormFields();">Hifadhi</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END POPUP MAP -->
            </form>
          </div>
          <!--Mwisho wa fomu-->
        </div>
      </div>
      <!-- footer-->
      
    </div>
    <script src="http://localhost/js/w3schools_footer.js"></script>
    <script src="http://localhost/js/baka_pandisha_faili.js"></script>
    <script src="http://localhost/js/lgas.js"></script>
    <!--script src="./js/addresses.js"></script-->
  </div>
</div>
</body>
</html>