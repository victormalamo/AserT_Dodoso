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

//Maombi ya masurufu
$colname_masurufu_maombi_mapya = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_maombi_mapya = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_maombi_mapya = sprintf("SELECT * FROM masurufu WHERE masurufu_id = %s", $colname_masurufu_maombi_mapya);
$masurufu_maombi_mapya = mysqli_query($conntscpME, $query_masurufu_maombi_mapya) or die(mysqli_error());
$row_masurufu_maombi_mapya = mysqli_fetch_assoc($masurufu_maombi_mapya);
$totalRows_masurufu_maombi_mapya = mysqli_num_rows($masurufu_maombi_mapya);

//Tazama Gharama nyingine zenye data halafu pelekea kwenye java kuangaliwa

//$idadi_ya_nyingine = 0;
//for ($n = 1; $n <=10; $n++ ){
//if ($row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; }; 
//};

//Kupitisha kwenya badili link
	//$maamuzi_ID = $row_rsselectedKibali['hos_status'];
	//$sababu = $row_rsselectedKibali['hos_rsn_chg'];

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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Maombi ya Masurufu | Maliasili</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--link rel="stylesheet" type="text/css" href="/css/w3.css"-->
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/resp_form.css">
<!--link rel="stylesheet" type="text/css" href="/css/pandisha_faili.css"-->
<link rel="stylesheet" type="text/css" href="/css/toggle.css">
<link rel="stylesheet" type="text/css" href="/css/tazama_kibali.css">
<!--link rel="stylesheet" type="text/css" href="/css/nice_select.css"-->
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />

<script src="https:http://localhost/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- NICE SELECT -->


  <script src="http://localhost/js/jquery-3.3.1.min.js"></script>
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
	
        });''
		
        if(!allvalid)
        {
            //alert('Jaza maeneo yote ya fomu ..');
			return false;
        }
    });

</script>

<script src="http://localhost/js/toggle.js"></script>

<!-- Namba -->

<script src="http://localhost/js/autoNumeric-1.9.17.js"></script>
<script> 
$(document).ready(function() { 
    $(".namba").autoNumeric('init', {aSign: 'TZS ', lZero: 'deny', aSep: ',', mDec: 2});
	//$(".namba").autoNumeric('init', {  lZero: 'deny', aSep: ',', mDec: 2 });
	
	//$('form').delay(200).fadeIn();
	//setTimeout(function(){
	//$('#posho_ya_kujikimu').focus();
	//},2000);
	
});
</script>  

<!-- End Nambe -->

<!--  Jumlisha Gharama -->

<script>
$(document).on("keyup", ".masurufu", function() {
    var sum = 0;
	$(".masurufu").each(function(){
        //sum += +$(this).val().replace(/,/g,''); /[^\d.]/g, ''; /[^0-9.-]+/g, ''
		sum += +$(this).val().replace(/\TZS|,/g, ''); ///\TZS|,/g, ''
		$(".jumla").val(sum);		
		//$("#masurufu_ya_sh").focus();   		 
	});

});
</script>

<!-- End Jumlisha Gharama  -->

<!-- Anadaiwa Sidaiwi -->
<script> 
$(document).ready(function() { 

	if ($('input[name="napendekeza_sipendekezi"]:checked').val() == "napendekeza") {   
	$('.napendekeza').show("fast");
	}else{ 
	$("#napendekeza_apewe_sh").val('');
	//$("#namba_ya_masurufu_yanayodaiwa").val('');
	$('.napendekeza').hide("fast");
	}
		
	  $('input:radio').change(function() {
	  if ($('input[name="napendekeza_sipendekezi"]:checked').val() == "napendekeza") {   
	  $('.napendekeza').show("fast");
	  }else{ 
	  $("#napendekeza_apewe_sh").val('');
	  //$("#namba_ya_masurufu_yanayodaiwa").val('');
	  $('.napendekeza').hide("fast");
	  }
	  });
	  
	  <!--Sipendekezi-->
	if ($('input[name="napendekeza_sipendekezi"]:checked').val() == "sipendekezi") {   
	$('.sipendekezi').show("fast");
	}else{ 
	$("#napendekeza_asipewe").val('');
	//$("#namba_ya_masurufu_yanayodaiwa").val('');
	$('.sipendekezi').hide("fast");
	}
		
	  $('input:radio').change(function() {
	  if ($('input[name="napendekeza_sipendekezi"]:checked').val() == "sipendekezi") {   
	  $('.sipendekezi').show("fast");
	  }else{ 
	  $("#napendekeza_asipewe").val('');
	  //$("#namba_ya_masurufu_yanayodaiwa").val('');
	  $('.sipendekezi').hide("fast");
	  }
	  });

});
</script>
<!-- End anadaiwa Sidaiwi -->

</head>

<body>
<div class="container_form">

<form action="masurufu_insert_updatequery.php" method="POST" name="masurufu_insert_update" id="masurufu_insert_update" >

<div class="row_form "> 
<div class="col-form-75 ruti_tanua_title show_ruti content_ruti mkono"> 
Tazama Kibali cha Safari                   
 </div>
</div>
<div class="menu_ruti" style="display: none;"> 
<div class="row_form "> 
<div class=" ruti_tanua">

<!--  YOTE CHINI IMEFICHWA  -->

<div class="row_form">
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
<div class="row_form">
    <div class="title_100M mnrt-center"><img src="/images/logo_print.jpg"></div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <?php 
	if($row_rsselectedKibali['aina_ya_kibali'] == "Kibali cha Kawaida"){
	echo "<div class='title_100M mnrt-center'>KIBALI CHA KAWAIDA KUSAFIRI NJE YA KITUO CHA KAZI</div> ";
	}elseif($row_rsselectedKibali['aina_ya_kibali'] == "Kibali Maalumu"){
	echo "<div class='title_100M mnrt-center' data-tip='".$row_rsselectedKibali['sababu_ya_aina']."'>KIBALI MAALUMU KUSAFIRI NJE YA KITUO CHA KAZI</div> ";
	}
	?>	
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <?php 
	if($row_rsselectedKibali['udharura'] == "Kibali cha Dharura"){
	echo "<div class='title_100M mnrt-center' data-tip='".$row_rsselectedKibali['sababu_ya_udharura']."'>";
	echo "(Kibali cha Dharura)";
	echo "</div>";
	}else{
	echo "<div class='title_100M mnrt-center'>";
	echo "(Hakuna Dharura)";
	echo "</div>";
	}
	?>
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
<?php if($row_rsselectedKibali['zimebaki_siku'] > 24) { $color = "#4CAF50"; }
	  elseif($row_rsselectedKibali['zimebaki_siku'] >= 20) { $color = "#33cc99"; }
	  elseif($row_rsselectedKibali['zimebaki_siku'] >= 14) { $color = "#ff9900"; }
	  elseif($row_rsselectedKibali['zimebaki_siku'] >= 0) { $color = "#cc0000"; }
	  elseif($row_rsselectedKibali['zimebaki_siku'] < 0) { $color = "#cc0000"; }
?>
    <div class="title_100_alert mnrt-center" style="border: 1px solid; border-color:<?php echo $color; ?>; color:<?php echo $color; ?>; font-weight: bold; ">
	<?php if($row_rsselectedKibali['zimebaki_siku'] == 1) { echo "IMEBAKI SIKU MOJA(1) TU! KABLA YA SAFARI";}
	elseif($row_rsselectedKibali['zimebaki_siku'] == 0) { echo "SAFARI NI LEO!";}
	elseif($row_rsselectedKibali['zimebaki_siku'] < 0) { echo "MAOMBI YAMEPITA MUDA!";}
	else{ echo "ZIMEBAKI SIKU&nbsp;".$row_rsselectedKibali['zimebaki_siku']."&nbsp;KABLA YA SAFARI";};?>
    </div> 
    <div class="">
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

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	SEHEMU A: IJAZWE NA MTUMISHI ANAYESAFIRI KIKAZI NDANI YA NCHI
   <?php
   if($row_rsselectedKibali['ruti_ID'] == "ruti_moja"){
	echo "&nbsp;&nbsp;[&nbsp;<a href='yanayoingia_list_update.php?id=".$row_rsselectedKibali['id']."&ruti_ID=".$row_rsselectedKibali['ruti_ID']."&jina_la_halmashauri=".$row_rsselectedKibali['jina_la_halmashauri']."&catID=".$row_rsselectedKibali['catID']."&regID=".$row_rsselectedKibali['regID']."&lgaID=".$row_rsselectedKibali['lgaID']."&sDate=".$row_rsselectedKibali['sDate']."&eDate=".$row_rsselectedKibali['eDate']."&distance=".$row_rsselectedKibali['distance']."&duration=".$row_rsselectedKibali['duration']."&duration_safarini=".$row_rsselectedKibali['duration_safarini']."&usafiriID=".$row_rsselectedKibali['usafiriID']."&madhumuniID=".$row_rsselectedKibali['madhumuniID']."&muhtasari=".$row_rsselectedKibali['muhtasari']."&mlipajiID=".$row_rsselectedKibali['mlipajiID']."&wengine=".$row_rsselectedKibali['wengine']."'>BADILI</a>&nbsp;]";
	}; //REKEBISHA EDITING YA RUTI ZAIDI YA MOJA KWANZA ?>
    
	</div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	(Maelezo Binafsi ya Mtumishi Kuhusu Safari)
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="majina_title mnrt-left-align">
	1.&nbsp;Jina Kamili la Mtumishi:
    </div> 
    <div class="majina mnrt-left-align">
	<?php echo $row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name']."&nbsp;&nbsp;&nbsp;&nbsp;(Namba ya Cheki:&nbsp;".$row_rstersuser['username'].")";?>
    </div>
</div>
<div class="row_form">
    <div class="mawasiliano_title mnrt-left-align">
	2.&nbsp;Mawasiliano yako:&nbsp;(i) Namba ya simu:
    </div> 
    <div class="namba_ya_simu mnrt-left-align">
	<?php echo $row_rstersuser['mob'];?>
    </div>
    <div class="barua_pepe_title mnrt-left-align">
	(ii) Barua pepe:
    </div> 
    <div class="barua_pepe mnrt-left-align">
	<?php echo $row_rstersuser['e_add'];?>
    </div>
</div>
<div class="row_form">
    <div class="idara_title mnrt-left-align">
	<?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "3.&nbsp;Idara:";}else{ echo "3.&nbsp;Kitengo:";};?>
    </div> 
    <div class="idara mnrt-left-align">
	<?php echo $row_rsdiv_unit_name['div_unit_kirefu']."&nbsp;";
	if (isset($row_rssection_name['section_name'])){ echo "&nbsp&nbsp&nbsp&nbsp(Section:&nbsp;".$row_rssection_name['section_name_kirefu'].")";};?>
    </div>
</div>
<div class="row_form">
    <div class="cheo_title mnrt-left-align">
	4.&nbsp;Cheo:
    </div> 
    <div class="cheo mnrt-left-align">
	<?php echo $row_rscheo_name['jina_la_cheo'];?>
    </div>
</div>
<div class="row_form">
    <div class="kwenda_title mnrt-left-align">
	5.&nbsp;Naomba kibali cha kusafiri kwenda:
    </div> 
    <div class="kwenda mnrt-left-align">
<?php

/*Mkoa
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
echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'].",&nbsp;&nbsp;".$row_rslgaNam['lgaNam'];
};*/

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
	echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'].",&nbsp;&nbsp;".$row_rslgaNam['lgaNam'];
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
		echo "Mkoa wa&nbsp;".$row_rsregNam['regNam'].",&nbsp;&nbsp;".$row_rslgaNam['lgaNam'];
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
	for ($sn = 1; $sn < ($safari_n - 1); $sn++ ){
	
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
    <div class="sDate_title mnrt-left-align">
	6.&nbsp;Tarehe ya kuondoka:
    </div> 
    <div class="sDate mnrt-left-align">
	<?php echo $row_rsselectedKibali['sDate'];?>
    </div>
	<div class="eDate_title mnrt-left-align">
	Tarehe ya kurudi:
    </div>
	<div class="eDate mnrt-left-align">
		
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
    <div class="usafiri_title mnrt-left-align">
	7.&nbsp;Njia ya Usafiri:
    </div> 
    <div class="usafiri mnrt-left-align">
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
    <div class="madhumuni_title mnrt-left-align">
	8.&nbsp;Madhumuni ya safari:
    </div> 
    <div class="madhumuni mnrt-left-align">
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
    <div class="dottedline mnrt-left-align">
	<?php echo $row_rsselectedKibali['muhtasari'];?>
    </div>
</div>
<div class="row_form">
    <div class="mlipaji_title mnrt-left-align">
	9.&nbsp;Gharama zitalipwa na:
    </div> 
    <div class="mlipaji mnrt-left-align">
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
<div class="row_form">
    <div class="ambatanisho_title mnrt-left-align">
	Ambatanisho:
    </div> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="../nu/viambatanisho/<?php echo $row_rsselectedKibali ['username']."/".$row_rsselectedKibali['final_kiambata'] ?>" target="_blank"><?php echo $row_rsselectedKibali['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>
<div class="row_form">
    <div class="tarehe_title mnrt-left-align">
	Tarehe:
    </div> 
    <div class="tarehe mnrt-left-align">
	<?php echo $row_rsselectedKibali['submitDate'];?>
    </div>
	<div class="saini_title mnrt-left-align">
	Saini ya Mwombaji:
    </div>
	<div class="saini mnrt-left-align">
    </div>
</div>

<!-- MKUU WA SEKSHENI -->

<?php if($row_rsselectedKibali['hos_status'] != "") { ?>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	SEHEMU B: IJAZWE NA MKUU WA SECTION
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	(Maoni ya Mkuu wa Section)
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="hos_title mnrt-left-align">
	<?php
	if($row_rsselectedKibali['hos_status'] == "kimekataliwa_hos") { echo "1.&nbsp;Sikubali ombi lake kwa sababu:"; };
    if($row_rsselectedKibali['hos_status'] == "kimepitishwa_hos") { echo "1.&nbsp;Nakubali ombi lake kwa sababu:"; };
	if($row_rsselectedKibali['hos_status'] == "maelekezo_hos") { echo "1.&nbsp;Naelekeza:"; };	
	 ?>
    </div> 
    <div class="hos mnrt-left-align">
	<?php echo $row_rsselectedKibali['hos_rsn_chg'];?>
    </div>
</div>
<div class="row_form">
    <div class="tarehe_title_hos mnrt-left-align">
	Tarehe:
    </div> 
    <div class="tarehe_hos mnrt-left-align">
	<?php echo $row_rsselectedKibali['hos_submitDate'];?>
    </div>
	<div class="saini_title_hos mnrt-left-align">
	Saini ya Mkuu wa Section:
    </div>
	<div class="saini_hos mnrt-left-align">
    </div>
</div>

<?php };?>

<!-- MKUU WA IDARA/KITENGO -->

<?php if($row_rsselectedKibali['hodu_status'] != "") { ?>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	<?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "SEHEMU C: IJAZWE NA MKUU WA IDARA";}elseif($row_rsdiv_unit_name['div_au_unit'] == "unit"){ echo "SEHEMU C: IJAZWE NA MKUU WA KITENGO";};?>	
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	<?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "(Maoni ya Mkuu wa Idara)";}elseif($row_rsdiv_unit_name['div_au_unit'] == "unit"){ echo "(Maoni ya Mkuu wa Kitengo)";};?>	
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="hod_u_title mnrt-left-align">
	<?php
	if($row_rsselectedKibali['hodu_status'] == "kimekataliwa_hod_u") { echo "1.&nbsp;Sikubali ombi lake kwa sababu:"; };
    if($row_rsselectedKibali['hodu_status'] == "kimepitishwa_hod_u") { echo "1.&nbsp;Nakubali ombi lake kwa sababu:"; };
	if($row_rsselectedKibali['hodu_status'] == "maelekezo_hod_u") { echo "1.&nbsp;Naelekeza:"; };	
	 ?>
    </div> 
    <div class="hod_u mnrt-left-align">
	<?php echo $row_rsselectedKibali['hodu_rsn_chg'];?>
    </div>
</div>
<div class="row_form">
    <div class="tarehe_title_hod_u mnrt-left-align">
	Tarehe:
    </div> 
    <div class="tarehe_hod_u mnrt-left-align">
	<?php echo $row_rsselectedKibali['hodu_submitDate'];?>
    </div>
	<div class="saini_title_hod_u mnrt-left-align">
	Saini ya Mkuu wa Idara:
    </div>
	<div class="saini_hod_u mnrt-left-align">
    </div>
</div>


<?php };?>

<!-- DAHRM -->

<?php if($row_rsselectedKibali['dahrm_status'] != "") { ?>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	SEHEMU D: IDHINI YA MWAJIRI
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	(Ikamilishwe na Katibu Mkuu/Mkurugenzi wa Idara ya Utawala na Usimamizi wa Rasilimali Watu)
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form">
    <div class="hod_u_title mnrt-left-align">
	<?php
	if($row_rsselectedKibali['dahrm_status'] == "kimekataliwa_dahrm") { echo "1.&nbsp;Sikubali ombi lake kwa sababu:"; };
    if($row_rsselectedKibali['dahrm_status'] == "kimepitishwa_dahrm") { echo "1.&nbsp;Nakubali ombi lake kwa sababu:"; };
	if($row_rsselectedKibali['dahrm_status'] == "maelekezo_dahrm") { echo "1.&nbsp;Naelekeza:"; };	
	 ?>
    </div> 
    <div class="hod_u mnrt-left-align">
	<?php echo $row_rsselectedKibali['dahrm_rsn_chg'];?>
    </div>
</div>
<div class="row_form">
    <div class="tarehe_title_km mnrt-left-align">
	Tarehe:
    </div> 
    <div class="tarehe_km mnrt-left-align">
	<?php echo $row_rsselectedKibali['dahrm_submitDate'];?>
    </div>
	<div class="saini_title_km mnrt-left-align">
	Saini:
    </div>
	<div class="saini_km mnrt-left-align">
    </div>
</div>
<div class="row_form">
    <div class="km mnrt-center">
	Katibu Mkuu
    </div> 
    <div class="">
    </div>
</div>
<?php };?>
</div>
<!--  END YOTE JUU IMEFICHWA  -->


</div>
</div>
</div>

<!--------------------------------------------------------------- MAOMBI YA MASURUFU -------------------------------------------------------------->


<!-- MASURUFU YA SAFARI -->

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { ?>


<div class="row_form">
    <div class="title_100S mnrt-left-align">
	MAOMBI YA MASURUFU YA SAFARI
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php 
	if($row_masurufu_maombi_mapya['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_masurufu_maombi_mapya['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}
	echo "<br>";
	if($row_masurufu_maombi_mapya['masurufu_ref_number'] != "") { echo "Masurufu Na.&nbsp;".$row_masurufu_maombi_mapya['masurufu_ref_number']."/".$row_masurufu_maombi_mapya['masurufu_ref_number_date'];}else{ echo "Masurufu Na. Haijawekwa";}
	?>
	</div> 
    <div class="col-form-75">
    </div>
</div>

<div class="row_form">


<table class="table table-hover table-fixed table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Item Description</th>
	  <th>Units</th>
	  <th>Cost per Unit</th>
      <th>Total Cost (TZS)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>Posho ya kujikimu</td>
	  <td>-</td>
	  <td>-</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['posho_ya_kujikimu'],2)."/=";	?></td>
    </tr>
    <tr>
      <th scope="row">2.</th>
      <td>Posho ya njiani</td>
	  <td>-</td>
	  <td>-</td
      ><td><?php echo number_format($row_masurufu_maombi_mapya['posho_ya_njiani'],2)."/=";	?></td>
    </tr>
    <tr>
      <th scope="row">3.</th>
      <td>Nauli</td>
	  <td>-</td>
	  <td>-</td
      ><td><?php echo number_format($row_masurufu_maombi_mapya['nauli'],2)."/=";	?></td>
    </tr>
    <tr>
      <th scope="row">4.</th>
      <td>Taxi</td>
	  <td>-</td>
	  <td>-</td
      ><td><?php echo number_format($row_masurufu_maombi_mapya['taxi'],2)."/=";	?></td>
    </tr>
    <tr>
      <th scope="row">5.</th>
      <td>Mafuta</td>
	  <td>-</td>
	  <td>-</td
      ><td><?php echo number_format($row_masurufu_maombi_mapya['mafuta'],2)."/=";	?></td>
    </tr>
	  <tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="3">Jumla Ndogo</td>	  
      <td>
	  <?php $jumla_a = ($row_masurufu_maombi_mapya['posho_ya_kujikimu'] + $row_masurufu_maombi_mapya['posho_ya_njiani'] + $row_masurufu_maombi_mapya['nauli'] + $row_masurufu_maombi_mapya['taxi'] + $row_masurufu_maombi_mapya['mafuta']);
	   echo number_format($jumla_a,2)."/=";	?>
	   </td>
    </tr>
	<tr  style="font-weight:bold">   
	<th scope="row"></th>
	  <td colspan="4">Gharama Nyingine</td>
	</tr>
		<?php
		$idadi_ya_nyingine = 0;
		for ($n = 1; $n <=10; $n++ ){
		if ($row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; }; 
		};
		?>
	<?php for ($count = 1; $count <= $idadi_ya_nyingine; $count++) { ?>
	<tr>
      <th scope="row"><?php echo ($count + 5)."."; ?></th>
      <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$count.''] ?></td>
	  <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_units_'.$count.''] ?></td>
	  <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_unitcost_'.$count.''] ?></td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_amount_'.$count.''],2)."/="; ?></td>
    </tr>
<?php };?>
    </tr>
	  <tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="3">Jumla Ndogo</td>	  
      <td>
	  <?php $jumla_b = ($row_masurufu_maombi_mapya['masurufu_ya_sh'] - ($row_masurufu_maombi_mapya['posho_ya_kujikimu'] + $row_masurufu_maombi_mapya['posho_ya_njiani'] + $row_masurufu_maombi_mapya['nauli'] + $row_masurufu_maombi_mapya['taxi'] + $row_masurufu_maombi_mapya['mafuta']));
	   echo number_format($jumla_b,2)."/=";	?>
	   </td>
    </tr>
	<tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="3">Jumla Kuu</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

</div>

<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['nadaiwa_sidaiwi'] == "Nadaiwa") {
	echo "Nadaiwa Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['kiasi_unachodaiwa'])."/= za masurufu namba&nbsp;".$row_masurufu_maombi_mapya['namba_ya_masurufu'].""; 
	}elseif($row_masurufu_maombi_mapya['nadaiwa_sidaiwi'] == "Sidaiwi") {
	echo "Sidaiwi marejesho ya masurufu yaliyopita";
	}else{
	echo "Sikumbuki kama nadaiwa au sidaiwi masurufu yaliyopita";
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate']."&nbsp;&nbsp;&nbsp;Saini:...................";?>
    </div> 
</div>

<?php };?>

<!------------------- END MASURUFU YA SAFARI ---------------------------------->

<!-- MASURUFU MAALUMU -->

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { ?>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	MAOMBI YA MASURUFU MAALUMU
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php 
	if($row_masurufu_maombi_mapya['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_masurufu_maombi_mapya['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}
	echo "<br>";
	if($row_masurufu_maombi_mapya['masurufu_ref_number'] != "") { echo "Masurufu Na.&nbsp;".$row_masurufu_maombi_mapya['masurufu_ref_number']."/".$row_masurufu_maombi_mapya['masurufu_ref_number_date'];}else{ echo "Masurufu Na. Haijawekwa";}
	?>
	</div> 
    <div class="col-form-75">
    </div>
</div>

<div class="row_form">


<table class="table table-hover table-fixed table-bordered">
  <thead>
    <tr>
      <th>Na.</th>
      <th>Shughuli</th>
	  <th>Idadi</th>
	  <th>Gharama/Idadi (TZS)</th>
      <th>Jumla(TZS)</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$idadi_ya_nyingine = 0;
		for ($n = 1; $n <=10; $n++ ){
		if ($row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; }; 
		};
		?>
	<?php for ($count = 1; $count <= $idadi_ya_nyingine; $count++) { ?>
	<tr>
      <th scope="row"><?php echo $count."."; ?></th>
      <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$count.''] ?></td>
	  <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_units_'.$count.''] ?></td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_amount_'.$count.''],2)."/="; ?></td>
    </tr>
<?php };?>
    </tr>
	<tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="3">Jumla Kuu</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

</div>

<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['nadaiwa_sidaiwi'] == "Nadaiwa") {
	echo "Nadaiwa Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['kiasi_unachodaiwa'])."/= za masurufu namba&nbsp;".$row_masurufu_maombi_mapya['namba_ya_masurufu'].""; 
	}elseif($row_masurufu_maombi_mapya['nadaiwa_sidaiwi'] == "Sidaiwi") {
	echo "Sidaiwi marejesho ya masurufu yaliyopita";
	}else{
	echo "Sikumbuki kama nadaiwa au sidaiwi masurufu yaliyopita";
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate']."&nbsp;&nbsp;&nbsp;Saini:...................";?>
    </div> 
</div>

<?php };?>

<!------------ END MASURUFU MAALUMU ----------------------->


<!-- UTHIBITISHO WA RA/IDARA -->

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	MAONI YA MHASIBU MASURUFU/IDARA
    </div> 
    <div class="">
    </div>
</div>

<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['anadaiwa_hadaiwi_ra'] == "Anadaiwa") {
	echo "Nathibitisha kuwa mwombaji anadaiwa masurufu namba&nbsp;".$row_masurufu_maombi_mapya['namba_ya_masurufu_yanayodaiwa']."&nbsp;ya kiasi cha Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['kiasi_anachodaiwa'])."/=&nbsp;ya tarehe&nbsp;".$row_masurufu_maombi_mapya['masurufu_ya_tarehe'].""; 
	}else{
	echo "Nathibitisha kuwa mwombaji hadaiwi";
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_ra']."&nbsp;&nbsp;&nbsp;Saini:...................";?>
    </div> 
</div>

<!------------------- UTHIBITISHO WA HOD_U ---------------------------------->

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	MAONI YA MKUU WA IDARA/KITENGO
	<?php 
	if(($row_masurufu_maombi_mapya['napendekeza_sipendekezi_hod_u'] != "") && ($_GET['badilisha'] !="ndio")  && ($row_masurufu_maombi_mapya['masurufu_general_status'] != "ameona_ca")){ echo "&nbsp;&nbsp;[&nbsp;<a href='masurufu_yanayoingia_tazama.php?kibali_id=$kibali_id&badilisha=ndio'>BADILI</a>&nbsp;]";};
	?>
    </div> 
    <div class="">
    </div>
</div>

<?php if(($row_masurufu_maombi_mapya['napendekeza_sipendekezi_hod_u'] !="") && ($_GET['badilisha'] !="ndio")){?>

<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['napendekeza_sipendekezi_hod_u'] == "napendekeza") {
	echo "Nathibitisha kuwa safari ya Afisa huyu ni muhimu. Napendekeza apewe masurufu ya Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['napendekeza_apewe_sh'])."/=&nbsp;"; 
	}else{
	echo "Napendekeza asipewe masurufu,&nbsp;".$row_masurufu_maombi_mapya['napendekeza_asipewe'];
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_hod_u']."&nbsp;&nbsp;&nbsp;Saini:...................";?>
    </div> 
</div>


<!-- MAONI YA MHASIBU MKUU INAPOTOKA KWA CA-->

<?php if($row_masurufu_maombi_mapya['masurufu_general_status'] == "ameona_ca") {?>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	MAONI YA MHASIBU MKUU
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['naidhinisha_siidhinishi_ca'] == "naidhinisha") {
	echo "Kutokana na maelezo hayo hapo juu, naidhinisha malipo ya kiasi cha Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['naidhinisha_sh'])."/=.&nbsp;Vifungu&nbsp;".$row_masurufu_maombi_mapya['vifungu_ca'].""; 
	}else{
	echo "Kutokana na maelezo hayo hapo juu, siidhinishi malipo hayo.&nbsp;".$row_masurufu_maombi_mapya['siidhinishi'];
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_ca']."&nbsp;&nbsp;&nbsp;Saini:...................";?>
    </div> 
</div>

<?php };?>

<!-- END MAONI YA MHASIBU MKUU-->

<div class="row_form">
    <div class="delete_col mnrt-left">
	<span>
	
	<input  class="deletesubmit" type="button" value="Sawa" onclick="window.location.href=<?php echo "'".$_SESSION['kutoka_link']."'";?>">

	</span>
    </div> 
</div>

<?php }else{ ?>

<div class="row_form "> 
<div class="col-form-75" style="padding:16px 0px 16px 0px"> 
<label class="radio-inline">
  <?php 
  if($row_masurufu_maombi_mapya['napendekeza_sipendekezi_hod_u'] == "napendekeza") { $napendekeza = "checked"; }
  if($row_masurufu_maombi_mapya['napendekeza_sipendekezi_hod_u'] == "sipendekezi") { $sipendekezi = "checked"; };?>
        <input type="radio" name="napendekeza_sipendekezi" id="napendekeza_sipendekezi" value="napendekeza" <?php echo $napendekeza;?>>
    Napendekeza apewe
   </label>
   <label class="radio-inline">
        <input type="radio" name="napendekeza_sipendekezi" id="napendekeza_sipendekezi" value="sipendekezi" <?php echo $sipendekezi;?>>
    Sipendekezi apewe
    </label>
	</div>
	</div>	
	<div class="row_form napendekeza">
    <div class="col-form-kiasi-unachodaiwa" data-tip="Apewe shilingi">
     <input type="text" class="form-control namba" id="napendekeza_apewe_sh" name="napendekeza_apewe_sh" placeholder="Apewe sh.." value="<?php echo $row_masurufu_maombi_mapya['napendekeza_apewe_sh'];?>">
    </div>
	</div>
	<div class="row_form sipendekezi">
    <div class="col-form-namba-ya-masurufu" data-tip="Sababu">
     <input type="text" class="form-control" id="napendekeza_asipewe" name="napendekeza_asipewe" placeholder="Sababu.." value="<?php echo $row_masurufu_maombi_mapya['napendekeza_asipewe'];?>">
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
    <img src="http://localhost/user/hod_hou/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="87" height="39" align="absbottom" />    
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
	<span>
	<input  class="deletesubmit" type="button" value="Rudi Nyuma" onclick="window.location.href=<?php echo "'".$_SESSION['kutoka_link']."'";?>">
	</span>
	<span><input  class="deletesubmit submitallplayerbtn" type="submit" value="Tuma"></span>
    </div> 
</div>
<br>
<input name="badilisha" id="badilisha" type="hidden" value="<?php echo $badilisha;?>">
<input name="kutoka" id="kutoka" type="hidden" value="<?php echo "masurufu_yanayoingia_tazama";?>">
<input name="masurufu_general_status" id="masurufu_general_status" type="hidden" value="<?php echo "ameona_hod_u";?>">
<!--input name="masurufu_general_status" id="masurufu_general_status" type="hidden" value="<php echo "mapya";?>"-->
<input name="kibali_id" id="kibali_id" type="hidden" value="<?php echo $row_rsselectedKibali['id'];?>">
<!--input name="masurufu_id" id="masurufu_id" type="hidden" value="<php echo $row_masurufu_maombi_mapya['masurufu_id'];?>"-->
<input name="submitDate_hod_u" type="hidden" id="submitDate_hod_u" value="<?php echo date("d-m-Y");?>">
<input type="hidden" name="MM_update" value="masurufu_maombi_mapya_update">
<!-- END MAONI YA hod_u -->

<?php };?>

 </form>
</div>
</body>
</html>
