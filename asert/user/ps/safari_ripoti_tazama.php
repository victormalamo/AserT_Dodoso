<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<?php 
/////////////////////Kibali kilichochaguliwa
	//Kwa ajili ya kuedit taarifa toka updatequery to "BADILI" link
	$kibali_id = $_GET['kibali_id'];
	//$masurufu_id = $_GET['masurufu_id'];
	$badilisha = $_GET['badilisha'];
	//$maamuzi_ID = $_GET[['maamuzi_ID'];
	//$sababu = $_GET[['sababu'];
	//end

$colname_rsselectedKibali = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_rsselectedKibali = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_rsselectedKibali = sprintf("SELECT * FROM vibali WHERE id = %s", $colname_rsselectedKibali);
$rsselectedKibali = mysqli_query($conntscpME, $query_rsselectedKibali) or die(mysqli_error());
$row_rsselectedKibali = mysqli_fetch_assoc($rsselectedKibali);
$totalRows_rsselectedKibali = mysqli_num_rows($rsselectedKibali);

//Majina ya waliopitisha vibali

$hod_u_username = $row_rsselectedKibali['hodu_username'];
$dahrm_username = $row_rsselectedKibali['dahrm_username'];
$ps_username = $row_rsselectedKibali['ps_username'];
//HOD_U

$query_hod_u_details = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $hod_u_username);
$hod_u_details = mysqli_query($conntscpME, $query_hod_u_details) or die(mysqli_error());
$row_hod_u_details = mysqli_fetch_assoc($hod_u_details);
//DAHRM

$query_dahrm_details = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $dahrm_username);
$dahrm_details = mysqli_query($conntscpME, $query_dahrm_details) or die(mysqli_error());
$row_dahrm_details = mysqli_fetch_assoc($dahrm_details);
//PS

$query_ps_details = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $ps_username);
$ps_details = mysqli_query($conntscpME, $query_ps_details) or die(mysqli_error());
$row_ps_details = mysqli_fetch_assoc($ps_details);

/*
//Maombi ya masurufu
$colname_masurufu_maombi_mapya = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_maombi_mapya = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_maombi_mapya = sprintf("SELECT * FROM masurufu WHERE masurufu_id = %s", $colname_masurufu_maombi_mapya);
$masurufu_maombi_mapya = mysqli_query($conntscpME, $query_masurufu_maombi_mapya) or die(mysqli_error());
$row_masurufu_maombi_mapya = mysqli_fetch_assoc($masurufu_maombi_mapya);
$totalRows_masurufu_maombi_mapya = mysqli_num_rows($masurufu_maombi_mapya);
*/

//Safari Ripoti
$colname_safari_ripoti = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_safari_ripoti = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_safari_ripoti = sprintf("SELECT * FROM safari_ripoti WHERE masurufu_id = %s", $colname_safari_ripoti);
$safari_ripoti = mysqli_query($conntscpME, $query_safari_ripoti) or die(mysqli_error());
$row_safari_ripoti = mysqli_fetch_assoc($safari_ripoti);
$totalRows_safari_ripoti = mysqli_num_rows($safari_ripoti);

/////////////////////Taarifa za Mtumishi

$colname_rstersuser = $row_rsselectedKibali ['username'];

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

//zitakuwa unset baada tu ya kufanya update under yanayoingia_list_updatequery.php
$_SESSION['f_name_mtumishi']=$row_rstersuser['f_name']; $_SESSION['m_name_mtumishi']=$row_rstersuser['m_name']; 
$_SESSION['l_name_mtumishi']=$row_rstersuser['l_name']; $_SESSION['cheo_mtumishi']=$row_rscheo_name['jina_la_cheo'];
$_SESSION['seksheni_mtumishi']=$row_rssection_name['section_name_kirefu'];

//Maamuzi

$quermaamuzi=mysqli_query($conntscpME, "SELECT * FROM maamuzi_hos ORDER BY id ASC");
//$maamuzi_ID=$_GET['maamuzi_ID'];

?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US" class="restade">
<head>
<title>Maombi ya Masurufu | Maliasili</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--link rel="stylesheet" type="text/css" href="/css/w3.css"-->
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/resp_form.css">
<link rel="stylesheet" type="text/css" href="/css/pandisha_faili.css">
<link rel="stylesheet" type="text/css" href="/css/toggle.css">
<link rel="stylesheet" type="text/css" href="/css/tazama_kibali.css">
<!--link rel="stylesheet" type="text/css" href="/css/nice_select.css"-->
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>
<?php 
require('../datepicker/demos/datepicker/date-gen.php');
?>

<!-- Text Editor -->

<link type="text/css" rel="stylesheet" href="/css/jquery-te-1.4.0.css">
<script type="text/javascript" src="http://localhost/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<!-- End Text Editor -->

<script src="https:http://localhost/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- NICE SELECT -->


  <!--script src="http://localhost/js/jquery-3.3.1.min.js"></script-->
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

<script>
//Zuia kupeleka fields tupu...
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
			
			//Radio
					////if ($('input[name="nathibitisha_sithibitishi"]:radio').unchek)
					///{ 
					///alert('Toa uthibitisho..');
					/////	allvalid=false;
					///}
	
        });''
		
        if(!allvalid)
        {
            //alert('Jaza maeneo yote ya fomu ..');
			return false;
        }
    });

</script>

<script src="http://localhost/js/toggle.js"></script>

<script> 
$(document).ready(function() { 

	 <!--Sithibitishi-->
	if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "sithibitishi") {   
	$('.sithibitishi').show("fast");
	}else{ 
	$("#sithibitishi_sababu").val('');
	$('.sithibitishi').hide("fast");
	}
		
	  $('input:radio').change(function() {
	  if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "sithibitishi") {   
	  $('.sithibitishi').show("fast");
	  }else{ 
	  $("#sithibitishi_sababu").val('');
	  $('.sithibitishi').hide("fast");
	  }
	  });
});
</script>

</head>

<body style="background-color:#333333">
<div class="container_form" style="background-color:#ffffff">
<div class="container_form_inner">

<form action="safari_ripoti_insert_updatequery.php" method="POST" name="masurufu_insert_update" id="masurufu_insert_update">

<div class="row_form tanua_kibali"> 
<div class="col-form-75 title_100stb ruti_tanua_title show_ruti content_ruti mkono"> 
Tazama Kibali cha Safari                   
 </div>
</div>
<div class="menu_ruti" style="display: none; border-bottom:1px solid #ccc"> 
<div class="row_form "> 
<div class="ruti_tanua">

<!--  YOTE CHINI IMEFICHWA  -->

<div class="row_form" style="padding:25px 0px 0px 0px">
    <div class="title_100L mnrt-center">
	JAMHURI YA MUUNGANO WA TANZANIA	
    </div> 
    <div class="col-form-75">
    </div>
  </div>
<div class="row_form">
    <div class="title_100M mnrt-center">
	WIZARA YA MALIASILI NA UTALII	
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form logo_print">    
	<div class="logo_print_left mnrt-left-align">
	Telegram: "MALIASILI"<br>
	Simu: 026-2321514<br>
	Email: ps@maliasili.go.tz
	</div>
	<div class="logo_print_center mnrt-center">
	<img src="/images/logo_print.jpg">
	</div>
	<div class="logo_print_right mnrt-left-align">
	<div style="padding-left:40%">
	Mji wa Serikali,<br>
	Barabara ya Maliasili,<br>
	S.L.P 1351,<br>
	40472 - DODOMA
	</div>
	</div>
	</div>
<div class="row_form">
    <?php 
	if($row_rsselectedKibali['udharura'] == "Kibali cha Dharura"){ $dharura = "&nbsp;(DHARURA)";}
	if($row_rsselectedKibali['aina_ya_kibali'] == "Kibali cha Kawaida"){
	echo "<div class='title_100M_2 mnrt-center'>KIBALI CHA KUSAFIRI NJE YA KITUO CHA KAZI".$dharura."</div> ";
	}elseif($row_rsselectedKibali['aina_ya_kibali'] == "Kibali Maalumu"){
	echo "<div class='title_100M_2 mnrt-center' data-tip='".$row_rsselectedKibali['sababu_ya_aina']."'>KIBALI MAALUMU KUSAFIRI NJE YA KITUO CHA KAZI".$dharura."</div> ";
	}
	?>
	
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="title_50_L mnrt-left-align">
	<?php 
	if($row_rsselectedKibali['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_rsselectedKibali['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}
	if($row_rsselectedKibali['subject_file_number'] != "") { echo "&nbsp;&nbsp;Subject File No.&nbsp;".$row_rsselectedKibali['subject_file_number'];}
	?> 
	</div>
	<div class="title_50_R mnrt-right-align">
	<?php echo "Kumbukumbu Na.&nbsp;".$row_rsselectedKibali['id'];	?> 
	</div>
</div>
<div class="umbo mnrt-left">

<!--div class="row_form">
    <div class="title_100S mnrt-left-align">
	TAARIFA BINAFSI ZA MTUMISHI
    </div> 
    <div class="">
    </div>
</div-->
<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Taarifa za Anayesafiri
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Jina:&nbsp;<?php echo $row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Namba ya cheki:&nbsp;<?php echo $row_rstersuser['username'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Namba ya simu:&nbsp;<?php echo $row_rstersuser['mob']." Barua pepe: ".$row_rstersuser['e_add'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "Idara:&nbsp;";}else{ echo "Kitengo:&nbsp;";};?>
	<?php echo $row_rsdiv_unit_name['div_unit_kirefu'];?>
    </div> 
</div>
<?php if (isset($row_rssection_name['section_name'])){ ?>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php echo "Seksheni:&nbsp;".$row_rssection_name['section_name_kirefu'];?>
    </div> 
</div>
<?php };?>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Cheo:&nbsp;<?php echo $row_rscheo_name['jina_la_cheo'];?>
    </div> 
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Taarifa za Safari
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Mahali anapokwenda:&nbsp;
<?php

//ruti_moja

if($row_rsselectedKibali['ruti_ID'] == "ruti_moja"){

//Mkoa
$regID = $row_rsselectedKibali['regID'];

$query_rsregNam = sprintf("SELECT * FROM regions WHERE regID = '%s'", $regID);
$rsregNam = mysqli_query($conntscpME, $query_rsregNam) or die(mysqli_error());
$row_rsregNam = mysqli_fetch_assoc($rsregNam);
$totalRows_rsregNam = mysqli_num_rows($rsregNam);
//Halmashauri
$lgaID = $row_rsselectedKibali['lgaID'];

$query_rslgaNam = sprintf("SELECT * FROM lgas WHERE lgaID = '%s'", $lgaID);
$rslgaNam = mysqli_query($conntscpME, $query_rslgaNam) or die(mysqli_error());
$row_rslgaNam = mysqli_fetch_assoc($rslgaNam);
$totalRows_rslgaNam = mysqli_num_rows($rslgaNam);

	if($row_rsselectedKibali['lgaID']==""){
	echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'];
	}else{
	echo "Mkoa wa&nbsp;".$row_rsregNam['regNam']."&nbsp;-&nbsp;".$row_rslgaNam['lgaNam'];
	};
}
//end ruti_moja

//ruti_zaidi_ya_moja
if($row_rsselectedKibali['ruti_ID'] == "ruti_zaidi_ya_moja"){

	$safari_n = $row_rsselectedKibali['safari_n'];
	
	//Mkoa
	//Kwenda...Ruti ya mwisho
	$regID = $row_rsselectedKibali['regID_'.$safari_n.''];
	
	$query_rsregNam = sprintf("SELECT * FROM regions WHERE regID = '%s'", $regID);
	$rsregNam = mysqli_query($conntscpME, $query_rsregNam) or die(mysqli_error());
	$row_rsregNam = mysqli_fetch_assoc($rsregNam);
	$totalRows_rsregNam = mysqli_num_rows($rsregNam);
	
	//Halmashauri
	$lgaID = $row_rsselectedKibali['lgaID_'.$safari_n.''];
	
	$query_rslgaNam = sprintf("SELECT * FROM lgas WHERE lgaID = '%s'", $lgaID);
	$rslgaNam = mysqli_query($conntscpME, $query_rslgaNam) or die(mysqli_error());
	$row_rslgaNam = mysqli_fetch_assoc($rslgaNam);
	$totalRows_rslgaNam = mysqli_num_rows($rslgaNam);
	
		if($row_rsselectedKibali['lgaID_'.$safari_n.'']==""){
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'];
		}else{
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam']."&nbsp;-&nbsp;".$row_rslgaNam['lgaNam'];
		};
		echo "&nbsp&nbsp;-&nbsp;Siku&nbsp;".$row_rsselectedKibali['duration_safarini_'.$safari_n.''];
		
		
}
?>
		</div>
	</div>
	
<?php 

if($row_rsselectedKibali['ruti_ID'] == "ruti_zaidi_ya_moja"){

	$safari_n = $row_rsselectedKibali['safari_n'];
	//ruti ya kwanza lazima iwepo
	?>
	<div class="row_form">
		<div>
		</div> 
		<div class="dottedline mnrt-left-align">
	<?php
	//Kupitia
	//Mkoa
	
	$regID = $row_rsselectedKibali['regID'];
	
	$query_rsregNam = sprintf("SELECT * FROM regions WHERE regID = '%s'", $regID);
	$rsregNam = mysqli_query($conntscpME, $query_rsregNam) or die(mysqli_error());
	$row_rsregNam = mysqli_fetch_assoc($rsregNam);
	$totalRows_rsregNam = mysqli_num_rows($rsregNam);
	
	//Halmashauri
	$lgaID = $row_rsselectedKibali['lgaID'];
	
	$query_rslgaNam = sprintf("SELECT * FROM lgas WHERE lgaID = '%s'", $lgaID);
	$rslgaNam = mysqli_query($conntscpME, $query_rslgaNam) or die(mysqli_error());
	$row_rslgaNam = mysqli_fetch_assoc($rslgaNam);
	$totalRows_rslgaNam = mysqli_num_rows($rslgaNam);
	echo "Kupitia:&nbsp;&nbsp;";
		if($row_rsselectedKibali['lgaID']==""){
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'];
		}else{
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'].",&nbsp;&nbsp;".$row_rslgaNam['lgaNam'];
		};
	echo "&nbsp&nbsp;-&nbsp;Siku&nbsp;".$row_rsselectedKibali['duration_safarini_1'];
	?>
		</div>
	</div>
	
	<?php
	//ruti ya pili na kuendelea bila kuonesha ya mwisho..imeshatajwa hapo juu (...n-1)
	for ($sn = 1; $sn < ($safari_n - 1); $sn++ ){ //start at safarin_n == 2 ($sn +1)
	
	?>
	<div class="row_form">
		<div>
		</div> 
		<div class="dottedline mnrt-left-align">
	<?php
	//echo $safari_n; echo "&nbsp;"; echo $sn;
	//Kupitia
	//Mkoa
	$regID = $row_rsselectedKibali['regID_'.($sn+1).''];
	
	$query_rsregNam = sprintf("SELECT * FROM regions WHERE regID = '%s'", $regID);
	$rsregNam = mysqli_query($conntscpME, $query_rsregNam) or die(mysqli_error());
	$row_rsregNam = mysqli_fetch_assoc($rsregNam);
	$totalRows_rsregNam = mysqli_num_rows($rsregNam);
	
	//Halmashauri
	$lgaID = $row_rsselectedKibali['lgaID_'.($sn+1).''];
	
	$query_rslgaNam = sprintf("SELECT * FROM lgas WHERE lgaID = '%s'", $lgaID);
	$rslgaNam = mysqli_query($conntscpME, $query_rslgaNam) or die(mysqli_error());
	$row_rslgaNam = mysqli_fetch_assoc($rslgaNam);
	$totalRows_rslgaNam = mysqli_num_rows($rslgaNam);
	
		if($row_rsselectedKibali['lgaID_'.($sn+1).'']==""){
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'];
		}else{
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'].",&nbsp;&nbsp;".$row_rslgaNam['lgaNam'];
		};
	echo "&nbsp&nbsp;-&nbsp;Siku&nbsp;".$row_rsselectedKibali['duration_safarini_'.($sn+1).''];
	?>
		</div>
	</div>
	<?php };?>

<?php };?>

<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Tarehe ya kuondoka:&nbsp;<?php echo $row_rsselectedKibali['sDate'];?>
	&nbsp;Tarehe ya kurudi:&nbsp;
	<?php
	$safari_n = $row_rsselectedKibali['safari_n'];
	if($row_rsselectedKibali['ruti_ID'] == "ruti_moja"){
	 echo $row_rsselectedKibali['eDate']."&nbsp;&nbsp;&nbsp;&nbsp;(Siku&nbsp;".$row_rsselectedKibali['duration_safarini'].")";
	}elseif($row_rsselectedKibali['ruti_ID'] == "ruti_zaidi_ya_moja"){
	echo $row_rsselectedKibali['eDate_'.$safari_n.'']."&nbsp;&nbsp;&nbsp;&nbsp;(Siku&nbsp;".$row_rsselectedKibali['duration_safarini'].")";
	}	
	?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Njia ya usafiri:&nbsp;
	<?php
	$usafiriID = $row_rsselectedKibali['usafiriID'];
	
	$query_rsusafiri = sprintf("SELECT * FROM usafiri WHERE usafiriID = '%s'", $usafiriID);
	$rsusafiri = mysqli_query($conntscpME, $query_rsusafiri) or die(mysqli_error());
	$row_rsusafiri = mysqli_fetch_assoc($rsusafiri);
	$totalRows_rsusafiri = mysqli_num_rows($rsusafiri);
	echo $row_rsusafiri['usafiri'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Madhumuni ya safari:&nbsp;
	<?php

	$madhumuniID = $row_rsselectedKibali['madhumuniID'];
	
	$query_rsmadhumuni = sprintf("SELECT * FROM madhumuni WHERE madhumuniID = '%s'", $madhumuniID);
	$rsmadhumuni = mysqli_query($conntscpME, $query_rsmadhumuni) or die(mysqli_error());
	$row_rsmadhumuni = mysqli_fetch_assoc($rsmadhumuni);
	$totalRows_rsmadhumuni = mysqli_num_rows($rsmadhumuni);
	echo $row_rsmadhumuni['madhumuni'];?>
    </div> 
</div>
<div class="row_form">
    <div>
    </div> 
    <div class="kibali_ufafanuzi mnrt-left-align">
	<?php echo $row_rsselectedKibali['muhtasari'];?>
    </div>
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Mlipaji:&nbsp;
	<?php
	$mlipajiID = $row_rsselectedKibali['mlipajiID'];
	
	$query_rsmlipaji = sprintf("SELECT * FROM mlipaji WHERE mlipajiID = '%s'", $mlipajiID);
	$rsmlipaji = mysqli_query($conntscpME, $query_rsmlipaji) or die(mysqli_error());
	$row_rsmlipaji = mysqli_fetch_assoc($rsmlipaji);
	$totalRows_rsmlipaji = mysqli_num_rows($rsmlipaji);
	echo $row_rsmlipaji['mlipaji_kirefu'];
	if ($mlipajiID == "wengine") { echo "(".$row_rsselectedKibali['wengine'].")"; }
	?>
    </div> 
</div>
<?php if ($row_rsselectedKibali['final_kiambata']!=""){?>
<div class="row_form hideMeInPrint" style="padding-top:10px">
    <div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="../nu/viambatanisho/<?php echo $row_rsselectedKibali ['username']."/".$row_rsselectedKibali['final_kiambata'] ?>" target="_blank"><?php echo $row_rsselectedKibali['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>
<div class="row_form tarehe_saini">
	<div class="tarehe_left mnrt-left-align">
	Tarehe:&nbsp;<?php echo $row_rsselectedKibali['submitDate'];?>
	</div>
	<div class="sign_center mnrt-right-align">
	Saini:&nbsp;&nbsp;
	</div>
	<div class="sign_right mnrt-left-align">
	</div>
</div>

<!-- MKUU WA IDARA/KITENGO -->

<?php if($row_rsselectedKibali['hodu_status'] != "") { ?>

<!--div class="row_form">
    <div class="title_100S mnrt-left-align">
	<php if($_SESSION['div_au_unit'] == "div"){ echo "SEHEMU C: IJAZWE NA MKUU WA IDARA";}else{ echo "SEHEMU C: IJAZWE NA MKUU WA KITENGO";};?>	
    </div> 
    <div class="">
    </div>
</div-->
<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	<?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "Idhini ya Mkuu wa Idara";}elseif($row_rsdiv_unit_name['div_au_unit'] == "unit"){ echo "Idhini ya Mkuu wa Kitengo";};?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php
	if($row_rsselectedKibali['hodu_status'] == "kimekataliwa_hod_u") { echo "Sikubali ombi lake."; };
    if($row_rsselectedKibali['hodu_status'] == "kimepitishwa_hod_u") { echo "Nakubali ombi lake."; };
	if($row_rsselectedKibali['hodu_status'] == "maelekezo_hod_u") { echo "Naelekeza:"; };	
	 ?>
	 <?php echo "&nbsp;".$row_rsselectedKibali['hodu_rsn_chg'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php echo "Jina:&nbsp;".$row_hod_u_details['f_name']."&nbsp;".$row_hod_u_details['m_name']."&nbsp;".$row_hod_u_details['l_name'];?>
	<?php if(($row_hod_u_details['levelID'] != "hod") || ($row_hod_u_details['levelID'] != "hou")) { 
	if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "(Kny Mkuu wa Idara)";}else{ echo "(Kny Mkuu wa Kitengo)"; }
	}?>
    </div> 
</div>
<div class="row_form tarehe_saini">
	<div class="tarehe_left mnrt-left-align">
	Tarehe:&nbsp;<?php echo $row_rsselectedKibali['hodu_submitDate'];?>
	</div>
	<div class="sign_center mnrt-right-align">
	Saini:&nbsp;&nbsp;
	</div>
	<div class="sign_right mnrt-left-align">
	</div>
</div>
<?php };?>

<!-- DAHRM -->

<?php if($row_rsselectedKibali['dahrm_status'] != "") { ?>

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Idhini ya Mwajiri
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php
	if($row_rsselectedKibali['dahrm_status'] == "kimekataliwa_dahrm") { echo "Maombi ya kusafiri nje ya kituo cha kazi ya aliyetajwa hapo juu YAMEKATALIWA."; };
    if($row_rsselectedKibali['dahrm_status'] == "kimepitishwa_dahrm") { echo "Maombi ya kusafiri nje ya kituo cha kazi ya aliyetajwa hapo juu YAMEKUBALIWA."; };
	if($row_rsselectedKibali['dahrm_status'] == "maelekezo_dahrm") { echo "Maelekezo:"; };	
	 ?>
	 <?php echo "<br>".$row_rsselectedKibali['dahrm_rsn_chg'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php echo "Jina:&nbsp;".$row_dahrm_details['f_name']."&nbsp;".$row_dahrm_details['m_name']."&nbsp;".$row_dahrm_details['l_name'];?>
	<?php if($row_dahrm_details['levelID'] != "dahrm"){ 
	echo "(Kny DAHRM, Kny Katibu Mkuu)";}else{ echo "(Kny Katibu Mkuu)";}?>
    </div> 
</div>
<div class="row_form tarehe_saini">
	<div class="tarehe_left mnrt-left-align">
	Tarehe:&nbsp;<?php echo $row_rsselectedKibali['dahrm_submitDate'];?>
	</div>
	<div class="sign_center mnrt-right-align">
	Saini:&nbsp;&nbsp;
	</div>
	<div class="sign_right mnrt-left-align">
	</div>
</div>


<?php };?>


<!-- PS -->

<?php if($row_rsselectedKibali['ps_status'] != "") { ?>

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Idhini ya Katibu Mkuu
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php
	if($row_rsselectedKibali['ps_status'] == "kimekataliwa_ps") { echo "Maombi ya kusafiri nje ya kituo cha kazi ya aliyetajwa hapo juu YAMEKATALIWA."; };
    if($row_rsselectedKibali['ps_status'] == "kimepitishwa_ps") { echo "Maombi ya kusafiri nje ya kituo cha kazi ya aliyetajwa hapo juu YAMEKUBALIWA."; };
	if($row_rsselectedKibali['ps_status'] == "maelekezo_ps") { echo "Maelekezo:"; };	
	 ?>
	 <?php echo "<br>".$row_rsselectedKibali['ps_rsn_chg'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php echo "Jina:&nbsp;".$row_ps_details['f_name']."&nbsp;".$row_ps_details['m_name']."&nbsp;".$row_ps_details['l_name'];?>
	<?php if($row_ps_details['levelID'] != "ps"){ 
	echo "(Kny Katibu Mkuu)";} ?>
    </div> 
</div>
<div class="row_form tarehe_saini">
	<div class="tarehe_left mnrt-left-align">
	Tarehe:&nbsp;<?php echo $row_rsselectedKibali['ps_submitDate'];?>
	</div>
	<div class="sign_center mnrt-right-align">
	Saini:&nbsp;&nbsp;
	</div>
	<div class="sign_right mnrt-left-align">
	</div>
</div>
<?php };?>

</div>

<!--  END YOTE JUU IMEFICHWA  -->


</div>
</div>
</div>





<!---------------------------------- SAFARI RIPOTI----------------------------------------------->


<div class="row_form">
    <div class="title_100S mnrt-left-align" style="padding: 0px 0px 10px 0px; border-bottom: 1px dotted #cccccc">
	<div class="title_50_L_2">
	RIPOTI YA SAFARI
	</div> 
    <div class="title_50_R_2 mnrt-right-align w3-opacity">
	<!--?php 
	/*if($row_masurufu_maombi_mapya['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_masurufu_maombi_mapya['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}*/
	echo "Faili Na.&nbsp;".$_SESSION['pf_no']."&nbsp;&nbsp;";
	if($row_masurufu_maombi_mapya['masurufu_ref_number'] != "") { echo "Masurufu Na.&nbsp;".$row_masurufu_maombi_mapya['masurufu_ref_number']."/".$row_masurufu_maombi_mapya['masurufu_ref_number_date'];}else{ echo "Masurufu Na. Haijawekwa";}
	?-->
    </div>
	</div> 
</div>

<div class="row_form">
<div class="col-form-75" style="font-weight: bold; padding:10px 0px 10px 0px">
Madhumuni ya Safari
</div>
</div>
<div class="row_form">
<div class="col-form-75" style="padding: 0px 0px 16px 0px">
<?php echo $row_rsmadhumuni['madhumuni'].".&nbsp;".ucfirst($row_rsselectedKibali['muhtasari']);?>
<input type="hidden" id="madhumuni" name="madhumuni" value="<?php echo $row_rsmadhumuni['madhumuni'].".&nbsp;".ucfirst($row_rsselectedKibali['muhtasari']);?>">
</div>
</div>

<div class="row_form safari_ripoti">

<table class="table table-fixed table-bordered">
  <tbody>		
	<tr>      
      <td width="25%">Time</td>
	  <td><?php echo $row_safari_ripoti['muda']; ?></td>	  
    </tr>
	<tr>      
      <td>Summoned by</td>
	  <td><?php echo $row_safari_ripoti['summoned_by']; ?></td>	  
    </tr>
	<tr>      
      <td>Activity Objective</td>
	  <td><?php echo $row_safari_ripoti['activity_objective']; ?></td>	  
    </tr>
	<tr>      
      <td>Organizational level of participants</td>
	  <td><?php echo $row_safari_ripoti['participants']; ?></td>	  
    </tr>
	<tr>      
      <td>Relevance of the activity to your office</td>
	  <td><?php echo $row_safari_ripoti['relevance_to_office']; ?></td>	  
    </tr>
	<tr>      
      <td style="">List the most important outputs for you from the activity</td>
	  <td><?php echo $row_safari_ripoti['outputs']; ?></td>	  
    </tr>
	<tr>      
      <td>Further Action points and timeline</td>
	  <td><?php echo $row_safari_ripoti['further_actions']; ?></td>	  
    </tr>
  </tbody>
</table>

</div>

<?php if ($row_safari_ripoti['final_kiambata']!=""){?>
<div class="row_form">
    <!--div class="ambatanisho_title_1 mnrt-left-align">
	Ambatanisho:
    </div--> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho_1 mnrt-left-align">
	<a href="../nu/viambatanisho/<?php echo $row_safari_ripoti['username']."/".$row_safari_ripoti['final_kiambata'] ?>" target="_blank"><?php echo "&nbsp;&nbsp;".$row_safari_ripoti['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>

<div class="row_form">
    <div style="padding: 16px 0px 0px 0px">
	Tarehe <?php echo $row_safari_ripoti['submitDate'];?>
    </div> 
</div>

<!-- END SAFARI RIPOTI -->

<!-- UTHIBITISHO WA HOD_U -->

<?php if($row_safari_ripoti['nathibitisha_sithibitishi_hod_u'] != ""){?>

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya Mkuu wa Idara/Kitengo
    </div> 
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_safari_ripoti['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>
	Nathibitisha kuwa ripoti ya safari aliyotoa Afisa huyu ni sahihi. 
	<?php }else{
	echo $row_safari_ripoti['sithibitishi_hod_u'];
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_safari_ripoti['submitDate_hod_u'];?>
    </div> 
</div>

<!-- END UTHIBITISHO HOD_U -->

<?php } ?>

<div class="row_form" style="border-bottom:1px solid #cccccc; padding: 25px 0px 0px 0px">
    <div class="title_100stb mnrt-left-align">
	</div> 
</div>

<!-- UTHIBITISHO WA PS -->

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	IDHINI YA KATIBU MKUU
	<?php 
	if(($row_safari_ripoti['nathibitisha_sithibitishi_ps'] !="") && ($_GET['badilisha'] !="ndio")){ echo "&nbsp;&nbsp;[&nbsp;<a href='safari_ripoti_tazama.php?kibali_id=$kibali_id&badilisha=ndio'>BADILI</a>&nbsp;]";};?>
    </div> 
    <div class="">
    </div>
</div>

<?php if(($row_safari_ripoti['nathibitisha_sithibitishi_ps'] !="") && ($_GET['badilisha'] !="ndio")){?>

<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_safari_ripoti['nathibitisha_sithibitishi_ps'] == "nathibitisha") {?>
	Nathibitisha kuwa ripoti ya safari iliyowasilishwa ni sahihi. 
	<?php }else{
	echo $row_safari_ripoti['sithibitishi_ps'];
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_safari_ripoti['submitDate_ps'];?>
    </div> 
</div>

<!-- END MAELEKEZO /UTHIBITISHO -->

<div class="row_form">
    <div class="delete_col mnrt-left">
	<span><input  class="btn btn-primary" type="button" value="Sawa" onclick="window.location.href='<?php echo $_SESSION['kutoka_link'];?>'"></span>
    </div> 
</div>
<br>

<?php }else{ ?>

<div class="row_form "> 
<div class="col-form-75" style="padding:16px 0px 16px 0px"> 
<label class="radio-inline">
  <?php 
  if($row_safari_ripoti['nathibitisha_sithibitishi_ps'] == "nathibitisha") { $nathibitisha = "checked"; }
  if($row_safari_ripoti['nathibitisha_sithibitishi_ps'] == "sithibitishi") { $sithibitishi = "checked"; };?>
        <input type="radio" name="nathibitisha_sithibitishi" id="nathibitisha_sithibitishi" value="nathibitisha" <?php echo $nathibitisha;?>>
    Nathibitisha
   </label>
   <label class="radio-inline">
        <input type="radio" name="nathibitisha_sithibitishi" id="nathibitisha_sithibitishi" value="sithibitishi" <?php echo $sithibitishi;?>>
    Sithibitishi
    </label>
	</div>
	</div>	
	<div class="row_form sithibitishi">
    <div class="col-form-75" data-tip="Sababu">
    <input type="text" class="form-control" id="sithibitishi_sababu" name="sithibitishi_sababu" placeholder="Sababu.." value="<?php echo $row_safari_ripoti['sithibitishi_ps'];?>">
    </div>
	</div>
	<div class="row_form">
    <div class="title_100stb mnrt-left-align">	
    </div> 
    <div class="col-form-75">
    </div>
</div>

<div class="row_form">
    <div class="col-form-25">
      <!--label for="lname">&nbsp;</label-->
    </div>
    <div class="col-form-75" data-tip="Namba ya uhakiki">
    <img src="http://localhost/user/ps/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="87" height="39" align="absbottom" />    
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
    <div class="delete_col mnrt-left">
	<span><input  class="btn btn-primary" type="button" value="Rudi Nyuma" onclick="window.location.href='<?php echo $_SESSION['kutoka_link'];?>'";></span>
	<span><input  class="btn btn-primary submitallplayerbtn" type="submit" value="Tuma" onclick="return kaguaKiambata();"></span>
    </div> 
</div>
<br>
<input name="badilisha" id="badilisha" type="hidden" value="<?php echo $badilisha;?>">
<input name="kutoka" id="kutoka" type="hidden" value="<?php echo "safari_ripoti_tazama";?>">
<input name="safari_ripoti_general_status" id="safari_ripoti_general_status" type="hidden" value="<?php echo "ameona_ps";?>">
<input name="kibali_id" id="kibali_id" type="hidden" value="<?php echo $row_rsselectedKibali['id'];?>">
<input name="safari_ripoti_id" id="safari_ripoti_id" type="hidden" value="<?php echo $row_safari_ripoti['safari_ripoti_id'];?>">
<input name="submitDate_ps" type="hidden" id="submitDate_ps" value="<?php echo date("d-m-Y");?>">
<input type="hidden" name="MM_update" value="masurufu_maombi_mapya_update">

<?php };?>

 </form>

</div>
</div>
</body>
</html>
