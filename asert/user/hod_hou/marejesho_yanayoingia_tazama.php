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
	$masurufu = $_GET['masurufu'];
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

//Maombi ya masurufu

//ya dereva
if($_GET['masurufu'] == "ya_dereva") {

$colname_masurufu_maombi_mapya = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_maombi_mapya = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_maombi_mapya = sprintf("SELECT * FROM masurufu WHERE driver_masurufu_id = %s", $colname_masurufu_maombi_mapya);
$masurufu_maombi_mapya = mysqli_query($conntscpME, $query_masurufu_maombi_mapya) or die(mysqli_error());
$row_masurufu_maombi_mapya = mysqli_fetch_assoc($masurufu_maombi_mapya);
$totalRows_masurufu_maombi_mapya = mysqli_num_rows($masurufu_maombi_mapya);

}else{

$colname_masurufu_maombi_mapya = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_maombi_mapya = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_maombi_mapya = sprintf("SELECT * FROM masurufu WHERE masurufu_id = %s", $colname_masurufu_maombi_mapya);
$masurufu_maombi_mapya = mysqli_query($conntscpME, $query_masurufu_maombi_mapya) or die(mysqli_error());
$row_masurufu_maombi_mapya = mysqli_fetch_assoc($masurufu_maombi_mapya);
$totalRows_masurufu_maombi_mapya = mysqli_num_rows($masurufu_maombi_mapya);

}

//Marejesho

//ya dereva
if($_GET['masurufu'] == "ya_dereva") {

$colname_masurufu_marejesho = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_marejesho = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_marejesho = sprintf("SELECT * FROM marejesho WHERE driver_masurufu_id = %s", $colname_masurufu_marejesho);
$masurufu_marejesho = mysqli_query($conntscpME, $query_masurufu_marejesho) or die(mysqli_error());
$row_masurufu_marejesho = mysqli_fetch_assoc($masurufu_marejesho);
$totalRows_masurufu_marejesho = mysqli_num_rows($masurufu_marejesho);

}else{

$colname_masurufu_marejesho = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_masurufu_marejesho = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_masurufu_marejesho = sprintf("SELECT * FROM marejesho WHERE masurufu_id = %s", $colname_masurufu_marejesho);
$masurufu_marejesho = mysqli_query($conntscpME, $query_masurufu_marejesho) or die(mysqli_error());
$row_masurufu_marejesho = mysqli_fetch_assoc($masurufu_marejesho);
$totalRows_masurufu_marejesho = mysqli_num_rows($masurufu_marejesho);

}

//Tazama Gharama nyingine zenye data halafu pelekea kwenye java kuangaliwa

//$idadi_ya_nyingine = 0;
//for ($n = 1; $n <=10; $n++ ){
//if ($row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; }; 
//};

//Kupitisha kwenya badili link
	//$maamuzi_ID = $row_rsselectedKibali['hos_status'];
	//$sababu = $row_rsselectedKibali['hos_rsn_chg'];
	
	
/////////////////////Taarifa za Dereva

if($_GET['masurufu'] == "ya_dereva") {

$colname_rsdereva = $row_rsselectedKibali ['driver_username'];

$query_rsdereva = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname_rsdereva);
$rsdereva = mysqli_query($conntscpME, $query_rsdereva) or die(mysqli_error());
$row_rsdereva = mysqli_fetch_assoc($rsdereva);
$totalRows_rsdereva = mysqli_num_rows($rsdereva);

//Jina la Idara/Kitengo
$div_unit_ID_dereva = $row_rsdereva['div_unit_ID'];

$query_rsdiv_unit_name_dereva = sprintf("SELECT * FROM divisions_units WHERE div_unit_ID = '%s'", $div_unit_ID_dereva);
$rsdiv_unit_name_dereva = mysqli_query($conntscpME, $query_rsdiv_unit_name_dereva) or die(mysqli_error());
$row_rsdiv_unit_name_dereva = mysqli_fetch_assoc($rsdiv_unit_name_dereva);
$totalRows_rsdiv_unit_name_dereva = mysqli_num_rows($rsdiv_unit_name_dereva);

//Jina la Seksheni
$section_ID_dereva = $row_rsdereva['section_ID'];

$query_rssection_name_dereva = sprintf("SELECT * FROM sections WHERE section_ID = '%s'", $section_ID_dereva);
$rssection_name_dereva = mysqli_query($conntscpME, $query_rssection_name_dereva) or die(mysqli_error());
$row_rssection_name_dereva = mysqli_fetch_assoc($rssection_name_dereva);
$totalRows_rssection_name_dereva = mysqli_num_rows($rssection_name_dereva);

//Jina la cheo
$cheo_ID_dereva = $row_rsdereva['cheo_ID'];

$query_rscheo_name_dereva = sprintf("SELECT * FROM vyeo WHERE cheo_ID = '%s'", $cheo_ID_dereva);
$rscheo_name_dereva = mysqli_query($conntscpME, $query_rscheo_name_dereva) or die(mysqli_error());
$row_rscheo_name_dereva = mysqli_fetch_assoc($rscheo_name_dereva);
$totalRows_rscheo_name_dereva = mysqli_num_rows($rscheo_name_dereva);

//End taarifa za dereva

}

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

//////////////////////////////// TAZAMA MADENI YALIYOPITA ////////////////////////////////////

if($_GET['masurufu'] == "ya_dereva") {

//Masurufu ambayo hayajarejeshwa kabisa na yamepitishwa na CA?

$colname1_rs_hayajarejeshwa = $row_rsselectedKibali ['driver_username'];

$query_rs_hayajarejeshwa = sprintf("SELECT * FROM masurufu WHERE ((`username` = '%s' ) AND (`naidhinisha_siidhinishi_ca` = 'naidhinisha') AND ((`marejesho_id` IS NULL) || (`marejesho_id` = ''))) ORDER BY kibali_id DESC", $colname1_rs_hayajarejeshwa);
$rs_hayajarejeshwa = mysqli_query($conntscpME, $query_rs_hayajarejeshwa) or die(mysqli_error());
$row_rs_hayajarejeshwa = mysqli_fetch_assoc($rs_hayajarejeshwa);
$totalRows_rs_hayajarejeshwa = mysqli_num_rows($rs_hayajarejeshwa);

//Masurufu yamerejeshwa lakini CA hajaridhia

$colname1_rs_yamerejeshwa_hayajapitishwa = $row_rsselectedKibali ['driver_username'];

$query_rs_yamerejeshwa_hayajapitishwa = sprintf("SELECT marejesho.*, masurufu.* FROM marejesho, masurufu WHERE ((masurufu.username = '%s' ) AND (masurufu.marejesho_id = marejesho.marejesho_id) AND (marejesho.nathibitisha_sithibitishi_ca != 'nathibitisha')) ORDER BY masurufu.kibali_id DESC", $colname1_rs_yamerejeshwa_hayajapitishwa);
$rs_yamerejeshwa_hayajapitishwa = mysqli_query($conntscpME, $query_rs_yamerejeshwa_hayajapitishwa) or die(mysqli_error());
$row_rs_yamerejeshwa_hayajapitishwa = mysqli_fetch_assoc($rs_yamerejeshwa_hayajapitishwa);
$totalRows_rs_yamerejeshwa_hayajapitishwa = mysqli_num_rows($rs_yamerejeshwa_hayajapitishwa);

}else{

//Masurufu ambayo hayajarejeshwa kabisa na yamepitishwa na CA?

$colname1_rs_hayajarejeshwa = $row_rsselectedKibali ['username'];

$query_rs_hayajarejeshwa = sprintf("SELECT * FROM masurufu WHERE ((`username` = '%s' ) AND (`naidhinisha_siidhinishi_ca` = 'naidhinisha') AND ((`marejesho_id` IS NULL) || (`marejesho_id` = ''))) ORDER BY kibali_id DESC", $colname1_rs_hayajarejeshwa);
$rs_hayajarejeshwa = mysqli_query($conntscpME, $query_rs_hayajarejeshwa) or die(mysqli_error());
$row_rs_hayajarejeshwa = mysqli_fetch_assoc($rs_hayajarejeshwa);
$totalRows_rs_hayajarejeshwa = mysqli_num_rows($rs_hayajarejeshwa);

//Masurufu yamerejeshwa lakini CA hajaridhia

$colname1_rs_yamerejeshwa_hayajapitishwa = $row_rsselectedKibali ['username'];

$query_rs_yamerejeshwa_hayajapitishwa = sprintf("SELECT marejesho.*, masurufu.* FROM marejesho, masurufu WHERE ((masurufu.username = '%s' ) AND (masurufu.marejesho_id = marejesho.marejesho_id) AND ((marejesho.nathibitisha_sithibitishi_ca != 'nathibitisha') || (marejesho.nathibitisha_sithibitishi_ca IS NULL))) ORDER BY masurufu.kibali_id DESC", $colname1_rs_yamerejeshwa_hayajapitishwa);
$rs_yamerejeshwa_hayajapitishwa = mysqli_query($conntscpME, $query_rs_yamerejeshwa_hayajapitishwa) or die(mysqli_error());
$row_rs_yamerejeshwa_hayajapitishwa = mysqli_fetch_assoc($rs_yamerejeshwa_hayajapitishwa);
$totalRows_rs_yamerejeshwa_hayajapitishwa = mysqli_num_rows($rs_yamerejeshwa_hayajapitishwa);

}

//Taarifa za Gari/Makadirio ya mafuta

$namba_ya_gari = $row_rsselectedKibali['namba_ya_gari'];

$query_gari = sprintf("SELECT * FROM magari WHERE namba_ya_gari = '%s'", $namba_ya_gari);
$gari = mysqli_query($conntscpME, $query_gari) or die(mysqli_error());
$row_gari = mysqli_fetch_assoc($gari);
$totalRows_gari = mysqli_num_rows($gari);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Marejesho | Maliasili</title>
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

	//Nathibitisha
var madai_ya_sh = <?php echo $row_masurufu_marejesho['madai_ya_sh'];?>;
$('.nathibitisha').hide();
if (madai_ya_sh != 0) {
	if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "nathibitisha") {   
	$('.nathibitisha').show("fast");
	}else{ 
	$("#madai_kifungu").val('');
	//$("#namba_ya_masurufu_yanayodaiwa").val('');
	$('.nathibitisha').hide("fast");
	}
		
	  $('input:radio').change(function() {
	  if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "nathibitisha") {   
	  $('.nathibitisha').show("fast");
	  }else{ 
	  $("#madai_kifungu").val('');
	  //$("#namba_ya_masurufu_yanayodaiwa").val('');
	  $('.nathibitisha').hide("fast");
	  }
	  });
}; 

	 <!--Sithibitishi-->
	if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "sithibitishi") {   
	$('.sithibitishi').show("fast");
	}else{ 
	$("#sithibitishi_sababu").val('');
	//$("#namba_ya_masurufu_yanayodaiwa").val('');
	$('.sithibitishi').hide("fast");
	}
		
	  $('input:radio').change(function() {
	  if ($('input[name="nathibitisha_sithibitishi"]:checked').val() == "sithibitishi") {   
	  $('.sithibitishi').show("fast");
	  }else{ 
	  $("#sithibitishi_sababu").val('');
	  //$("#namba_ya_masurufu_yanayodaiwa").val('');
	  $('.sithibitishi').hide("fast");
	  }
	  });


/*
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
*/

});
</script>
<!-- End anadaiwa Sidaiwi -->

</head>

<body style="background-color:#333333">
<div class="container_form" style="background-color:#ffffff">
<div class="container_form_inner">

<form action="marejesho_insert_updatequery.php" method="POST" name="masurufu_insert_update" id="masurufu_insert_update" >

<div class="row_form tanua_kibali"> 
<div class="col-form-75 title_100stb ruti_tanua_title show_ruti content_ruti mkono"> 
Tazama Kibali cha Safari                   
 </div>
</div>
<div class="menu_ruti" style="display: none; border-bottom:1px solid #ccc"> 
<div class="row_form"> 
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

<!--  DEREVA -->

<?php if($_GET['masurufu'] == "ya_dereva") { ?>

<div class="row_form tanua_kibali"> 
<div class="col-form-75 title_100stb ruti_tanua_title show_dereva content_dereva mkono"> 
Tazama Taarifa za Dereva                 
 </div>
</div>
<div class="menu_dereva" style="display: none; border-bottom:1px solid #ccc"> 
<div class="row_form "> 
<div class="ruti_tanua">

<!--  YOTE CHINI IMEFICHWA  -->

<div class="umbo mnrt-left">

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Taarifa za Dereva
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Jina:&nbsp;<?php echo $row_rsdereva['f_name']."&nbsp;".$row_rsdereva['m_name']."&nbsp;".$row_rsdereva['l_name'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Namba ya cheki:&nbsp;<?php echo $row_rsdereva['username'];?>
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Namba ya simu:&nbsp;<?php echo $row_rsdereva['mob']." Barua pepe: ".$row_rsdereva['e_add'];?>
    </div> 
</div>

<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php if($row_rsdiv_unit_name_dereva['div_au_unit'] == "div"){ echo "Idara:&nbsp;";}else{ echo "Kitengo:&nbsp;";};?>
	<?php echo $row_rsdiv_unit_name_dereva['div_unit_kirefu'];?>
    </div> 
</div>
<?php if (isset($row_rssection_name_dereva['section_name'])){ ?>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php echo "Seksheni:&nbsp;".$row_rssection_name_dereva['section_name_kirefu'];?>
    </div> 
</div>
<?php };?>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Cheo:&nbsp;<?php echo $row_rscheo_name_dereva['jina_la_cheo'];?>
    </div> 
</div>
<?php if ($row_rsselectedKibali['namba_ya_gari'] != "") {?>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	Gari:&nbsp;<?php echo $row_gari['gari'];?>
    </div> 
</div>
<?php };?>
</div>
</div>
</div>
</div>


<?php };?>

<!-- END DEREVA -->

<!--------------------------------------------------------------- MAOMBI YA MASURUFU -------------------------------------------------------------->



<!-- MASURUFU YA SAFARI -->

<div class="row_form" style="padding-bottom:10px; border-bottom: 1px solid #cccccc"> 
<div class="col-form-75 title_100stb ruti_tanua_title show_masurufu content_masurufu mkono"> 
Tazama Masurufu                   
 </div>
</div>
<div class="menu_masurufu" style="display: none; border-bottom:1px solid #ccc"> 
<div class="row_form "> 
<div class=" masurufu_tanua">

<!--  YOTE CHINI IMEFICHWA  -->

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { ?>


<div class="row_form">
    <div class="title_100S mnrt-left-align" style="padding: 0px 0px 10px 0px; border-bottom: 1px dotted #cccccc">
	<div class="title_50_L_2">
	MAOMBI YA MASURUFU YA SAFARI
	</div> 
    <div class="title_50_R_2 mnrt-right-align w3-opacity">
	<?php 
	if($row_masurufu_maombi_mapya['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_masurufu_maombi_mapya['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}
	echo "&nbsp;&nbsp;";
	if($row_masurufu_maombi_mapya['masurufu_ref_number'] != "") { echo "Masurufu Na.&nbsp;".$row_masurufu_maombi_mapya['masurufu_ref_number']."/".$row_masurufu_maombi_mapya['masurufu_ref_number_date'];}else{ echo "Masurufu Na. Haijawekwa";}
	?>
    </div>
	</div> 
</div>

<!----------------------------------- DOKEZO ----------------------------------------------->

<div class="row_form">
<div class="dokezo_title" style="padding: 16px 0px 16px 0px">
DOKEZO
</div>
</div>
<div class="row_form"> 
<div class="col-form-75"  style="padding: 0px 0px 16px 0px" data-tip="Andika dokezo"> 
<?php echo $row_masurufu_maombi_mapya['dokezo'];?>
</div>
</div>

<!----------------------------------- END DOKEZO ----------------------------------------------->

<div class="row_form">

<table class="table table-fixed table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Item Description</th>
	  <th>Units</th>
	  <th>Cost per Unit</th>
	  <th>&nbsp;</th>
      <th>Total Cost (TZS)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>Posho ya kujikimu</td>
	  <td><?php echo "<span style='font-style:italic'>Siku&nbsp;</span>".$row_rsselectedKibali['duration_safarini'];?></td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['rate_posho_ya_kujikimu'],2)."/=";	?></td>
	  <td>&nbsp;</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['posho_ya_kujikimu'],2)."/=";	?></td>
    </tr>
	<?php if($row_masurufu_maombi_mapya['posho_ya_njiani'] != "") { ?>
    <tr>
      <th scope="row">2.</th>
      <td>Posho ya njiani</td>
	  <td>-</td>
	  <td>-</td>
	  <td>&nbsp;</td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['posho_ya_njiani'],2)."/=";	?></td>
    </tr>
	<?php } ?>
	<?php if($row_rsselectedKibali['usafiriID'] != "gls") { ?>
    <tr>
      <th scope="row">3.</th>
      <td>Nauli</td>
	  <td>-</td>
	  <td>-</td>
	  <td>&nbsp;</td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['nauli'],2)."/=";	?></td>
    </tr>
    <tr>
      <th scope="row">4.</th>
      <td>Taxi</td>
	  <td>-</td>
	  <td>-</td>
	  <td>&nbsp;</td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['taxi'],2)."/=";	?></td>
    </tr>
	<?php }?>
    <!--tr>
      <th scope="row">5.</th>
      <td>Mafuta</td>
	  <td>-</td>
	  <td>-</td
      ><td><php echo number_format($row_masurufu_maombi_mapya['mafuta'],2)."/=";	?></td>
    </tr-->
	  <tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="4">Jumla Ndogo</td>	  
      <td>
	  <?php $jumla_a = ($row_masurufu_maombi_mapya['posho_ya_kujikimu'] + $row_masurufu_maombi_mapya['posho_ya_njiani'] + $row_masurufu_maombi_mapya['nauli'] + $row_masurufu_maombi_mapya['taxi'] + $row_masurufu_maombi_mapya['mafuta']);
	   echo number_format($jumla_a,2)."/=";	?>
	   </td>
    </tr>
	<tr  style="font-weight:bold">   
	<th scope="row"></th>
	  <td colspan="5">Gharama Nyingine</td>
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
      <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$count.'']; ?></td>
	  <td><?php echo "<span style='font-style:italic'>".$row_masurufu_maombi_mapya['unitmeasure_'.$count.'']."</span>&nbsp;".$row_masurufu_maombi_mapya['gharama_nyingine_units_'.$count.'']; ?></td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
	  <td>
	  <?php 
	  if($row_masurufu_maombi_mapya['second_unitmeasure_'.$count.''] != ""){
	  echo "<span style='font-style:italic'>".$row_masurufu_maombi_mapya['second_unitmeasure_'.$count.'']."</span>&nbsp;".$row_masurufu_maombi_mapya['gharama_nyingine_second_units_'.$count.''];
	  }else{ echo "-";}?>
	  </td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_amount_'.$count.''],2)."/="; ?></td>
    </tr>
<?php };?>
    </tr>
	  <tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="4">Jumla Ndogo</td>	  
      <td>
	  <?php $jumla_b = ($row_masurufu_maombi_mapya['masurufu_ya_sh'] - ($row_masurufu_maombi_mapya['posho_ya_kujikimu'] + $row_masurufu_maombi_mapya['posho_ya_njiani'] + $row_masurufu_maombi_mapya['nauli'] + $row_masurufu_maombi_mapya['taxi'] + $row_masurufu_maombi_mapya['mafuta']));
	   echo number_format($jumla_b,2)."/=";	?>
	   </td>
    </tr>
	<tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="4">Jumla Kuu</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

</div>

<?php if($totalRows_rs_hayajarejeshwa > 0){ ?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" style="padding: 0px 0px 12px 0px;">
	Masurufu Ambayo Hayajarejeshwa
    </div> 
</div>

<div class="row_form">

<table class="table  table-fixed table-bordered">
  <thead>
    <tr>
	  <th>Na</th>
      <th>Kiasi Unachodaiwa (TZS)</th>
      <th>Namba ya Masurufu</th>
	  <th>Masurufu ya Tarehe</th>
	</tr>
  </thead>
  <tbody>
<?php $sn=0; do {  $sn++; $jumla_1_hayajareshwa = $jumla_1_hayajareshwa + $row_rs_hayajarejeshwa['naidhinisha_sh']; ?>
	<tr>
	  <th width="20px"><?php echo $sn.".";?></th>
      <td><?php echo number_format($row_rs_hayajarejeshwa['naidhinisha_sh'],2)."/="; ?></td>
	  <td><?php echo $row_rs_hayajarejeshwa['masurufu_ref_number']."/".$row_rs_hayajarejeshwa['masurufu_ref_number_date']; ?></td>
	  <td><?php echo $row_rs_hayajarejeshwa['masurufu_ref_number_date']; ?></td>
    </tr>
	
<?php } while ($row_rs_hayajarejeshwa = mysqli_fetch_assoc($rs_hayajarejeshwa));?>
	<tr>
	<td></td>
	<td colspan="3"><?php echo "<span style='font-weight:bold'>".number_format($jumla_1_hayajareshwa,2)."/=</span>&nbsp;&nbsp;(Jumla)"; ?></td>
	</tr>
  </tbody>
</table>

</div>

<?php } ?>

<?php if($totalRows_rs_yamerejeshwa_hayajapitishwa > 0){?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" style="padding: 0px 0px 12px 0px;">
	Marejesho Ambayo Hayajathibitishwa
    </div> 
</div>

<div class="row_form">

<table class="table  table-fixed table-bordered">
  <thead>
    <tr>
	  <th>Na</th>
      <th>Kiasi Unachodaiwa (TZS)</th>
      <th>Namba ya Masurufu</th>
	  <th>Masurufu ya Tarehe</th>
	</tr>
  </thead>
  <tbody>
<?php $sn=0; do {  $sn++;  $jumla_2_hayajareshwa = $jumla_2_hayajareshwa + $row_rs_yamerejeshwa_hayajapitishwa['naidhinisha_sh']; ?>
	<tr>
	  <th width="20px"><?php echo $sn.".";?></th>
      <td><?php echo number_format($row_rs_yamerejeshwa_hayajapitishwa['naidhinisha_sh'],2)."/="; ?></td>
	  <td><?php echo $row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number']."/".$row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number_date']; ?></td>
	  <td><?php echo $row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number_date']; ?></td>
    </tr>
<?php } while ($row_rs_yamerejeshwa_hayajapitishwa = mysqli_fetch_assoc($rs_yamerejeshwa_hayajapitishwa));?>
	<tr>
	<td></td>
	<td colspan="3"><?php echo "<span style='font-weight:bold'>".number_format($jumla_2_hayajareshwa,2)."/=</span>&nbsp;&nbsp;(Jumla)"; ?></td>
	</tr>
  </tbody>
</table>

</div>

<?php } ?>

<div class="row_form">
<div class="title_100st mnrt-left-align">
Naomba kupewa jumla ya Shilingi<?php echo "&nbsp;".number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/=";	?>
</div> 
</div>
<div class="row_form">
<div class="title_100st mnrt-left-align">
<?php if($_GET['masurufu'] == "ya_dereva") { ?>
Kifungu:<?php echo "&nbsp;".$row_kifungu_dereva['vifungu_ca'];?>
<?php }else{ ?>
Kifungu:<?php echo "&nbsp;".$row_masurufu_maombi_mapya['vifungu_ca'];?>
<?php }?>
</div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate'];?>
    </div> 
</div>

<?php };?>

<!------------------- END MASURUFU YA SAFARI ---------------------------------->

<!-- MASURUFU MAALUMU -->

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { ?>

<div class="row_form">
    <div class="title_100S mnrt-left-align" style="padding: 0px 0px 10px 0px; border-bottom: 1px dotted #cccccc">
	<div class="title_50_L_2">
	MAOMBI YA MASURUFU MAALUMU
	</div> 
    <div class="title_50_R_2 mnrt-right-align w3-opacity">
	<?php 
	if($row_masurufu_maombi_mapya['file_ref_number'] != "") { echo "Faili Na.&nbsp;".$row_masurufu_maombi_mapya['file_ref_number'];}else{ echo "Faili Na. Haijawekwa";}
	echo "&nbsp;&nbsp;";
	if($row_masurufu_maombi_mapya['masurufu_ref_number'] != "") { echo "Masurufu Na.&nbsp;".$row_masurufu_maombi_mapya['masurufu_ref_number']."/".$row_masurufu_maombi_mapya['masurufu_ref_number_date'];}else{ echo "Masurufu Na. Haijawekwa";}
	?>
    </div>
	</div> 
</div>

<!----------------------------------- DOKEZO ----------------------------------------------->

<div class="row_form">
<div class="dokezo_title" style="padding: 16px 0px 16px 0px">
DOKEZO
</div>
</div>
<div class="row_form"> 
<div class="col-form-75"  style="padding: 0px 0px 16px 0px" data-tip="Andika dokezo"> 
<?php echo $row_masurufu_maombi_mapya['dokezo'];?>
</div>
</div>

<!----------------------------------- END DOKEZO ----------------------------------------------->

<div class="row_form">

<table class="table table-fixed table-bordered">
  <thead>
    <tr>
      <th>Na.</th>
      <th>Shughuli</th>
	  <th>Idadi</th>
	  <th>Gharama/Idadi (TZS)</th>
	  <th>&nbsp;</th>
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
      <td><?php echo $row_masurufu_maombi_mapya['gharama_nyingine_jina_'.$count.'']; ?></td>
	  <td><?php echo "<span style='font-style:italic'>".$row_masurufu_maombi_mapya['unitmeasure_'.$count.'']."</span>&nbsp;".$row_masurufu_maombi_mapya['gharama_nyingine_units_'.$count.'']; ?></td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
	  <td>
	  <?php 
	  if($row_masurufu_maombi_mapya['second_unitmeasure_'.$count.''] != ""){
	  echo "<span style='font-style:italic'>".$row_masurufu_maombi_mapya['second_unitmeasure_'.$count.'']."</span>&nbsp;".$row_masurufu_maombi_mapya['gharama_nyingine_second_units_'.$count.''];
	  }else{ echo "-";}?>
	  </td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['gharama_nyingine_amount_'.$count.''],2)."/="; ?></td>
    </tr>
<?php };?>
    </tr>
	<tr style="font-weight:bold">
      <th scope="row"></th>
	  <td colspan="4">Jumla Kuu</td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

</div>

<?php if($totalRows_rs_hayajarejeshwa > 0){ ?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" style="padding: 0px 0px 12px 0px;">
	Masurufu Ambayo Hayajarejeshwa
    </div> 
</div>

<div class="row_form">

<table class="table  table-fixed table-bordered">
  <thead>
    <tr>
	  <th>Na</th>
      <th>Kiasi Unachodaiwa (TZS)</th>
      <th>Namba ya Masurufu</th>
	  <th>Masurufu ya Tarehe</th>
	</tr>
  </thead>
  <tbody>
<?php $sn=0; do {  $sn++; $jumla_1_hayajareshwa = $jumla_1_hayajareshwa + $row_rs_hayajarejeshwa['naidhinisha_sh']; ?>
	<tr>
	  <th width="20px"><?php echo $sn.".";?></th>
      <td><?php echo number_format($row_rs_hayajarejeshwa['naidhinisha_sh'],2)."/="; ?></td>
	  <td><?php echo $row_rs_hayajarejeshwa['masurufu_ref_number']."/".$row_rs_hayajarejeshwa['masurufu_ref_number_date']; ?></td>
	  <td><?php echo $row_rs_hayajarejeshwa['masurufu_ref_number_date']; ?></td>
    </tr>
	
<?php } while ($row_rs_hayajarejeshwa = mysqli_fetch_assoc($rs_hayajarejeshwa));?>
	<tr>
	<td></td>
	<td colspan="3"><?php echo "<span style='font-weight:bold'>".number_format($jumla_1_hayajareshwa,2)."/=</span>&nbsp;&nbsp;(Jumla)"; ?></td>
	</tr>
  </tbody>
</table>

</div>

<?php } ?>

<?php if($totalRows_rs_yamerejeshwa_hayajapitishwa > 0){?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" style="padding: 0px 0px 12px 0px;">
	Marejesho Ambayo Hayajathibitishwa
    </div> 
</div>

<div class="row_form">

<table class="table  table-fixed table-bordered">
  <thead>
    <tr>
	  <th>Na</th>
      <th>Kiasi Unachodaiwa (TZS)</th>
      <th>Namba ya Masurufu</th>
	  <th>Masurufu ya Tarehe</th>
	</tr>
  </thead>
  <tbody>
<?php $sn=0; do {  $sn++;  $jumla_2_hayajareshwa = $jumla_2_hayajareshwa + $row_rs_yamerejeshwa_hayajapitishwa['naidhinisha_sh']; ?>
	<tr>
	  <th width="20px"><?php echo $sn.".";?></th>
      <td><?php echo number_format($row_rs_yamerejeshwa_hayajapitishwa['naidhinisha_sh'],2)."/="; ?></td>
	  <td><?php echo $row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number']."/".$row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number_date']; ?></td>
	  <td><?php echo $row_rs_yamerejeshwa_hayajapitishwa['masurufu_ref_number_date']; ?></td>
    </tr>
<?php } while ($row_rs_yamerejeshwa_hayajapitishwa = mysqli_fetch_assoc($rs_yamerejeshwa_hayajapitishwa));?>
	<tr>
	<td></td>
	<td colspan="3"><?php echo "<span style='font-weight:bold'>".number_format($jumla_2_hayajareshwa,2)."/=</span>&nbsp;&nbsp;(Jumla)"; ?></td>
	</tr>
  </tbody>
</table>

</div>

<?php } ?>

<div class="row_form">
<div class="title_100st mnrt-left-align">
Naomba kupewa jumla ya Shilingi<?php echo "&nbsp;".number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/=";	?>
</div> 
</div>
<div class="row_form">
<div class="title_100st mnrt-left-align">
<?php if($_GET['masurufu'] == "ya_dereva") { ?>
Kifungu:<?php echo "&nbsp;".$row_kifungu_dereva['vifungu_ca'];?>
<?php }else{ ?>
Kifungu:<?php echo "&nbsp;".$row_masurufu_maombi_mapya['vifungu_ca'];?>
<?php }?>
</div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate'];?>
    </div> 
</div>

<?php };?>

<!------------ END MASURUFU MAALUMU ----------------------->

<div class="row_form">
<div class="col-form-75" style="border-bottom: 1px solid #cccccc; padding:10px 0px 0px 0px">
</div>
</div>

<!------------------- MAOMBI YA HOD_U ---------------------------------->

<!-- HAKUNA HAJA YA IDHINI YA KM AU HAJAIDHINISHA -->

<?php if (($row_masurufu_maombi_mapya['napendekeza_sipendekezi_ps'] == "napendekeza") && ($row_masurufu_maombi_mapya['masurufu_ya_sh'] > 5000000)) {?> 

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maombi ya Mkuu wa Idara/Kitengo kwa KM
    </div> 
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['to_km_napendekeza_apewe_sh'] != "") {
	echo "Naomba kibali cha kufanya matumizi ya Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['to_km_napendekeza_apewe_sh'])."/=&nbsp;kama inavyoonesha kwenye kibali na jedwali hapo juu.
	<br>Shughuli:&nbsp;
	".$row_rsmadhumuni['madhumuni']."&nbsp;-&nbsp;".$row_rsmadhumuni['madhumuni'].".
	<br>Afisa:&nbsp;
	".$row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name']."&nbsp;&nbsp;&nbsp;&nbsp;(Namba ya Cheki:&nbsp;".$row_rstersuser['username'].").
	<br>Cheo:&nbsp;
	".$row_rscheo_name['jina_la_cheo']."";	
	}
	?>
	 </div> 
</div>

<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_hod_u']."";?>
    </div> 
</div>


<!-- UTHIBITISHO WA KATIBU MKUU -->

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Uthibitisho wa Katibu Mkuu
    </div> 
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php
	if($row_masurufu_maombi_mapya['napendekeza_sipendekezi_ps'] == "sipendekezi") { echo "Siidhinishi matumizi hayo.&nbsp;".$row_masurufu_maombi_mapya['napendekeza_asipewe_ps']; };
    if($row_masurufu_maombi_mapya['napendekeza_sipendekezi_ps'] == "napendekeza") { echo "Naidhinisha matumizi ya jumla ya Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['napendekeza_apewe_sh_ps'])."/="; };	
	 ?> 
    </div> 
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php echo "Tarehe:&nbsp;".$row_masurufu_maombi_mapya['submitDate_ps'];?>
    </div> 
</div>

<?php };?>

<!------------------- END UTHIBITISHO WA KATIBU MKUU --------------->

<!------------------- END MAOMBI YA HOD_U ---------------------------------->

<!------------------- MAONI YA HOD_U ---------------------------------->

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya Mkuu wa Idara/Kitengo
    </div> 
</div>
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
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_hod_u'];?>
    </div> 
</div>

<!------------------- MAONI YA CA ---------------------------------->

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya Mhasibu Mkuu
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
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_ca'];?>
    </div> 
</div>

<!----------------------------------- END MAONI YA CA ---------------------------------->

<!----------------------------------- UTHIBITISHO WA RA/IDARA --------------------------------->

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya Mhasibu Masurufu/Idara
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
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_ra'];?>
    </div> 
</div>

<!------------------------ END UTHIBITISHO WA RA/IDARA ------------------------------------------------>

<!------------------------ UTHIBITISHO WA TAE ------------------------------------------------>

<?php if($row_masurufu_maombi_mapya['naidhinisha_siidhinishi_tae'] != "") { ?>

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya TAE
    </div> 
</div>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_maombi_mapya['naidhinisha_siidhinishi_tae'] == "naidhinisha") {
	echo "Kutokana na maelezo hayo hapo juu, naidhinisha malipo ya kiasi cha Shilingi&nbsp;".number_format($row_masurufu_maombi_mapya['naidhinisha_tae_sh'])."/=.&nbsp;Vifungu&nbsp;".$row_masurufu_maombi_mapya['vifungu_ca'].""; 
	}else{
	echo "Kutokana na maelezo hayo hapo juu, siidhinishi malipo hayo.&nbsp;".$row_masurufu_maombi_mapya['siidhinishi_tae'];
	}
	?>
    </div> 
</div>
<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_maombi_mapya['submitDate_tae'];?>
    </div> 
</div>

<?php };?>

</div>
</div>
</div>

<!-- END KUFICHA MASURUFU ------------------------------------------------------------------------------->

<!------------------- MAREJESHO ---------------------------------->

<div class="row_form">
    <div class="title_100S mnrt-left-align" style="padding: 0px 0px 10px 0px; border-bottom: 1px dotted #cccccc;">
	<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { echo "MAREJESHO YA MASURUFU YA SAFARI"; };?>
	<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { echo "MAREJESHO YA MASURUFU MAALUMU"; };?>
    </div> 
</div>

<!----------------------------------- DOKEZO ----------------------------------------------->

<div class="row_form">
<div class="dokezo_title" style="padding: 16px 0px 16px 0px">
DOKEZO
</div>
</div>
<div class="row_form"> 
<div class="col-form-75"  style="padding: 0px 0px 16px 0px" data-tip="Andika dokezo"> 
<?php echo $row_masurufu_marejesho['dokezo'];?>
</div>
</div>

<!----------------------------------- END DOKEZO ----------------------------------------------->

<div class="row_form">
<div class="title_100stb mnrt-left-align">
Masurufu Niliyochukua:	
</div> 
</div>
	<div class="row_form anadaiwa">
    <div class="title_100st mnrt-left-align">
    Nilichukua masurufu ya Jumla ya Shilingi <?php echo number_format($row_masurufu_marejesho['kiasi_nilichochukua'],2)."/=,&nbsp;";?> Tarehe <?php echo $row_masurufu_marejesho['masurufu_ya_tarehe'].",&nbsp;";?> Namba ya masurufu <?php echo $row_masurufu_marejesho['namba_ya_masurufu_niliyochukua'];?>
    </div>
	</div>
<div class="row_form">

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { ?>

<div class="row_form">
    <div class="title_100stb" style="padding-bottom:16px">
	Posho
    </div>
</div>
<table class="table  table-fixed table-bordered">
  <thead>
    <tr>
      <th>Tar ya kuondoka</th>
      <th>Mahali</th>
	  <th>Tar ya kufika</th>
      <th>Mahali</th>
	  <th>Siku za kulala</th>
	  <th>Kiwango cha posho</th>
	  <th>Jumla</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$idadi_ya_nyingine = 0;
		$jumla_ndogo_A = 0;
		for ($n = 1; $n <=10; $n++ ){
		if ($row_masurufu_marejesho['mahali_pakuondokea_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; 
		$jumla_ndogo_A = ($jumla_ndogo_A + $row_masurufu_marejesho['gharama_nyingine_amount_'.$n.'']);
		}; 
		};
		?>
	<?php for ($count = 1; $count <= $idadi_ya_nyingine; $count++) { ?>
	<tr>
      <td><?php echo $row_masurufu_marejesho['tarehe_ya_kuondoka_'.$count.'']; ?></td>
      <td><?php echo $row_masurufu_marejesho['mahali_pakuondokea_'.$count.'']; ?></td>
	  <td><?php echo $row_masurufu_marejesho['tarehe_ya_kufika_'.$count.'']; ?></td>
	  <td><?php echo $row_masurufu_marejesho['mahali_pakufikia_'.$count.'']; ?></td>
      <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_units_'.$count.''],2); ?></td>
	  <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
	  <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_amount_'.$count.''],2)."/="; ?></td>
    </tr>
<?php };?>
    </tr>
	<tr style="font-weight:bold">
	<td colspan="5" align="right"></td>
      <td>Jumla Ndogo (A)</td>
      <td><?php echo number_format($jumla_ndogo_A,2)."/=";?></td>
    </tr>
  </tbody>
</table>
<div class="row_form">
    <div class="title_100stb" style="padding-bottom:16px">
	Gharama Nyingine
    </div>
</div>
<table class="table table-fixed table-bordered">
  <thead>
    <tr>
      <th>Gharama</th>
	  <th>Risiti(Na.)</th>
      <th>Risiti(Maelezo)</th>
	  <th>Tarehe</th>
	  <th>Kiasi</th>
	  <th colspan="2">Gharama/Kiasi</th>
	  <th>Jumla</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$idadi_ya_nyingine = 0;
		for ($n = 1; $n <=10; $n++ ){
		if ($row_masurufu_marejesho['gharama_nyingine_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; 
		$jumla_ndogo_B = ($jumla_ndogo_B + $row_masurufu_marejesho['gharama_nyingine_nyingine_amount_'.$n.'']);
		}; 
		};
		?>
	<?php for ($count = 1; $count <= $idadi_ya_nyingine; $count++) { ?>
	<tr>	  
      <td><?php echo $row_masurufu_marejesho['gharama_nyingine_nyingine_jina_'.$count.''] ?></d>
      <td><?php echo $row_masurufu_marejesho['stakabadhi_nyingine_na_'.$count.''] ?></td>
	  <td><?php echo $row_masurufu_marejesho['stakabadhi_mahali_'.$count.'']; ?></td>
	  <td><?php echo $row_masurufu_marejesho['tarehe_nyingine_ya_stakabadhi_'.$count.''] ?></td>
	  <td><?php echo "<span style='font-style:italic'>".$row_masurufu_marejesho['unitmeasure_'.$count.'']."</span>&nbsp;"; echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_units_'.$count.''],2); ?></td>
      <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
	  <td>
	  <?php 
	  if($row_masurufu_marejesho['second_unitmeasure_'.$count.''] != ""){
	  echo "<span style='font-style:italic'>".$row_masurufu_marejesho['second_unitmeasure_'.$count.'']."</span>&nbsp;"; echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_second_units_'.$count.''],2);
	  }else{ echo "-";}?>
	  </td>
	  <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_amount_'.$count.''],2)."/="; ?></td>	  
    </tr>
<?php };?>
    </tr>
	<tr style="font-weight:bold">
	<td colspan="7" align="right">Jumla Ndogo (B)</td>
      <td><?php echo number_format($jumla_ndogo_B,2)."/=";?></td>
    </tr>
	<tr style="font-weight:bold">
	<td colspan="7" align="right">Jumla Kuu</td>
      <td><?php echo number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

<?php };?>
<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { ?>

<div class="row_form">
    <div class="title_100stb" style="padding-bottom:16px">
	Gharama Zilizotumika
    </div>
</div>
<table class="table table-fixed table-bordered">
  <thead>
    <tr>
      <th>Gharama</th>
	  <th>Risiti(Na.)</th>
      <th>Risiti(Maelezo)</th>
	  <th>Tarehe</th>
	  <th>Kiasi</th>
	  <th colspan="2">Gharama/Kiasi</th>
	  <th>Jumla</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$idadi_ya_nyingine = 0;
		for ($n = 1; $n <=10; $n++ ){
		if ($row_masurufu_marejesho['gharama_nyingine_nyingine_jina_'.$n.''] != "") { $idadi_ya_nyingine = $idadi_ya_nyingine + 1; 
		$jumla_ndogo_B = ($jumla_ndogo_B + $row_masurufu_marejesho['gharama_nyingine_nyingine_amount_'.$n.'']);
		}; 
		};
		?>
	<?php for ($count = 1; $count <= $idadi_ya_nyingine; $count++) { ?>
	<tr>	  
      <td><?php echo $row_masurufu_marejesho['gharama_nyingine_nyingine_jina_'.$count.''] ?></d>
      <td><?php echo $row_masurufu_marejesho['stakabadhi_nyingine_na_'.$count.''] ?></td>
	  <td><?php echo $row_masurufu_marejesho['stakabadhi_mahali_'.$count.'']; ?></td>
	  <td><?php echo $row_masurufu_marejesho['tarehe_nyingine_ya_stakabadhi_'.$count.''] ?></td>
	  <td><?php echo "<span style='font-style:italic'>".$row_masurufu_marejesho['unitmeasure_'.$count.'']."</span>&nbsp;"; echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_units_'.$count.''],2); ?></td>
      <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_unitcost_'.$count.''],2)."/="; ?></td>
	  <td>
	  <?php 
	  if($row_masurufu_marejesho['second_unitmeasure_'.$count.''] != ""){
	  echo "<span style='font-style:italic'>".$row_masurufu_marejesho['second_unitmeasure_'.$count.'']."</span>&nbsp;"; echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_second_units_'.$count.''],2);
	  }else{ echo "-";}?>	  
	  </td>
	  <td><?php echo number_format($row_masurufu_marejesho['gharama_nyingine_nyingine_amount_'.$count.''],2)."/="; ?></td>	  
    </tr>
<?php };?>
    </tr>
	<tr style="font-weight:bold">
	<td colspan="7" align="right">Jumla</td>
	<td><?php echo number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/="	?></td>
    </tr>
  </tbody>
</table>

<?php };?>


<div class="row_form">
<div class="title_100stb mnrt-left-align">
Jumla ya Masurufu Niliyorejesha:
</div>
</div>
	<div class="row_form">
    <div class="title_100st mnrt-left-align">
	Nimerejesha mchanganuo wa masurufu niliyochukua ya Jumla ya Shilingi <?php echo "&nbsp;".number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/=,&nbsp;";?><!--br><br>Tarehe <php echo $row_masurufu_marejesho['submitDate'];?-->
    </div>
	</div>

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { ?>
	
<div class="row_form anadaiwa">
    <div class="title_100st mnrt-left-align">
	Nathibitisha nimesafiri kwenda<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda']."&nbsp;";?>ambako nimekaa siku<?php echo "&nbsp;".$row_masurufu_marejesho['nimekaa_siku'].".&nbsp;";?>Ninastahili posho ya Sh<?php echo "&nbsp;".number_format($row_masurufu_marejesho['ninastahili_posho_sh'],2)."/=,&nbsp;";?> pamoja na gharama nyingine za Sh<?php echo "&nbsp;".number_format($row_masurufu_marejesho['ninastahili_gharama_nyingine_sh'],2)."/=,&nbsp;";?>kama ilivyoelezwa.
	 <br><br>Tarehe<?php echo "&nbsp;".$row_masurufu_marejesho['submitDate'];?>
    </div>
	</div>
	
<?php };?>
<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { ?>
	
<div class="row_form anadaiwa">
    <div class="title_100st mnrt-left-align">
	Nathibitisha nimetumia kiasi cha Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['ninastahili_gharama_nyingine_sh'],2)."/=,&nbsp;";?>kwa ajili ya<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda'].".&nbsp;";?>
	 <br><br>Tarehe<?php echo "&nbsp;".$row_masurufu_marejesho['submitDate'];?>
    </div>
	</div>
	
<?php };?>

<div class="row_form">
    <div class="title_100stb" style="padding-bottom:16px">
	Muhtasari
    </div>
</div>
<table class="table table-fixed table-bordered">
  <thead>
    <tr>
      <th>Masurufu Aliyoomba</th>
      <th>Aliyoidhinisha HOD/U</th>
	  <th>Aliyoidhinisha CA</th>
      <th>Aliyochukua</th>
	  <th>Marejesho</th>
	  <th>
	  <?php if($row_masurufu_marejesho['madai_ya_sh'] == 0) { echo "Hakuna Madai";} ;?>
	  <?php if($row_masurufu_marejesho['madai_ya_sh'] > 0) { echo "Anadaiwa";} ;?>
	  <?php if($row_masurufu_marejesho['madai_ya_sh'] < 0) { echo "Anadai";} ;?>
	  </th>	  
    </tr>
  </thead>
  <tbody>
	<tr>
      <td><?php echo number_format($row_masurufu_maombi_mapya['masurufu_ya_sh'],2)."/="; ?></td>
      <td><?php echo number_format($row_masurufu_maombi_mapya['napendekeza_apewe_sh'],2)."/="; ?></td>
	  <td><?php echo number_format($row_masurufu_maombi_mapya['naidhinisha_sh'],2)."/="; ?></td>
	  <td><?php echo number_format($row_masurufu_marejesho['kiasi_nilichochukua'],2)."/="; ?></td>
      <td><?php echo number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/="; ?></td>
	  <td>
	  <?php 
	  $madai = ($row_masurufu_maombi_mapya['naidhinisha_sh'] - $row_masurufu_marejesho['masurufu_ya_sh']);
	  if ($madai < 0) { $madai = -($madai);};
	  echo number_format($madai,2)."/="; 
	  ?>
	  </td>
    </tr>
  </tbody>
</table>

<?php if($row_masurufu_marejesho['madai_ya_sh'] > 0) { ?>

<div class="row_form">
    <div class="title_100stb">
	Maombi ya Kurejesha 
    </div>
</div>
<div class="row_form anadaiwa">
    <div class="title_100st mnrt-left-align">
	Naomba kurejesha kiasi cha Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['madai_ya_sh'],2)."/=&nbsp;";?>kama baki ya masurufu niliyochukua kwa ajili ya<?php echo "&nbsp;".$row_rsmadhumuni['madhumuni']."&nbsp;(".$row_rsselectedKibali['muhtasari'].")";?>
	</div>
	</div>
	
<?php };?>

<?php if($row_masurufu_marejesho['madai_ya_sh'] < 0) { ?>

<div class="row_form">
    <div class="title_100stb">
	Maombi ya Madai
    </div>
</div>
<div class="row_form anadaiwa">
    <div class="title_100st mnrt-left-align">
	Naomba kulipwa kiasi cha Shilingi<?php echo "&nbsp;".number_format(-($row_masurufu_marejesho['madai_ya_sh']),2)."/=&nbsp;";?>kama ziada iliyojitokeza kwenye masurufu niliyochukua kwa ajili ya<?php echo "&nbsp;".$row_rsmadhumuni['madhumuni']."&nbsp;(".$row_rsselectedKibali['muhtasari'].")";?>
	</div>
	</div>
	
<?php };?>

<?php if ($row_masurufu_marejesho['final_kiambata']!=""){?>
<div class="row_form" style="padding: 0px 0px 16px 0px">
    <!--div class="ambatanisho_title_1 mnrt-left-align">
	Ambatanisho:
    </div--> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="../nu/viambatanisho/<?php echo $row_masurufu_marejesho['username']."/".$row_masurufu_marejesho['final_kiambata'] ?>" target="_blank"><?php echo "&nbsp;".$row_masurufu_marejesho['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>

</div>

<div class="row_form">
<div class="col-form-75" style="border-bottom: 1px dotted #cccccc; padding:10px 0px 0px 0px">
</div>
</div>

<!------------------- UTHIBITISHO WA HOD_U ---------------------------------->

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	UTHIBITISHO WA MKUU WA IDARA/KITENGO
	<?php 
	if(($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] != "") && ($_GET['badilisha'] !="ndio")  && ($row_masurufu_marejesho['masurufu_marejesho_general_status'] != "ameona_ca")){ echo "&nbsp;&nbsp;[&nbsp;<a href='marejesho_yanayoingia_tazama.php?kibali_id=$kibali_id&masurufu=$masurufu&badilisha=ndio'>BADILI</a>&nbsp;]";};
	?>
    </div> 
    <div class="">
    </div>
</div>

<?php if(($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] !="") && ($_GET['badilisha'] !="ndio")){?>

<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "ya_safari") { ?>

<?php if($row_masurufu_marejesho['madai_ya_sh'] == 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>
	Nathibitisha kuwa Afisa huyu alisafiri kwenda <?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda']."&nbsp;";?>ambako alikaa kwa muda wa siku<?php echo "&nbsp;".$row_masurufu_marejesho['nimekaa_siku'].".&nbsp;";?> 
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
    </div> 
</div>
<?php };?>

<!-- MADAI -->
<?php if($row_masurufu_marejesho['madai_ya_sh'] < 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>	
	Nathibitisha kuwa Afisa huyu alisafiri kwenda<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda']."&nbsp;";?>ambako alikaa kwa muda wa siku<?php echo "&nbsp;".$row_masurufu_marejesho['nimekaa_siku'].".&nbsp;";?> 
	Madai yake yalipwe chini ya kifungu<?php echo "&nbsp;".$row_masurufu_marejesho['madai_kifungu'];?>
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
	</div> 
</div>
<?php };?>
<?php if($row_masurufu_marejesho['madai_ya_sh'] > 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>	
	Nathibitisha kuwa Afisa huyu alisafiri kwenda<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda']."&nbsp;";?>ambako alikaa kwa muda wa siku<?php echo "&nbsp;".$row_masurufu_marejesho['nimekaa_siku'].".&nbsp;";?> 
	Marejesho yake yaingizwe kwenye kifungu<?php echo "&nbsp;".$row_masurufu_marejesho['madai_kifungu'];?>
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
	</div> 
</div>
<?php };?>
<!-- END MADAI -->

<?php };?>
<?php if($row_masurufu_maombi_mapya['aina_ya_masurufu'] == "maalumu") { ?>

<?php if($row_masurufu_marejesho['madai_ya_sh'] == 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>
	Nathibitisha kuwa Afisa huyu alitumia kiasi cha Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['ninastahili_gharama_nyingine_sh'],2)."/=,&nbsp;";?>kwa ajili ya<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda'].".&nbsp;";?> 
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
    </div> 
</div>
<?php };?>

<!-- MADAI -->
<?php if($row_masurufu_marejesho['madai_ya_sh'] < 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>	
	Nathibitisha kuwa Afisa huyu alitumia kiasi cha Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/=,&nbsp;";?>kwa ajili ya<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda'].".&nbsp;";?> 
	Madai yake yalipwe chini ya kifungu<?php echo "&nbsp;".$row_masurufu_marejesho['madai_kifungu'];?>
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
	</div> 
</div>
<?php };?>
<?php if($row_masurufu_marejesho['madai_ya_sh'] > 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	<?php if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") {?>	
	Nathibitisha kuwa Afisa huyu alitumia kiasi cha Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['masurufu_ya_sh'],2)."/=,&nbsp;";?>kwa ajili ya<?php echo "&nbsp;".$row_masurufu_marejesho['nimesafiri_kwenda'].".&nbsp;";?> 
	Marejesho yake yaingizwe kwenye kifungu<?php echo "&nbsp;".$row_masurufu_marejesho['madai_kifungu'];?>
	<?php }else{
	echo $row_masurufu_marejesho['sithibitishi_sababu'];
	}
	?>
	</div> 
</div>
<?php };?>
<!-- END MADAI -->

<?php };?>

<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_marejesho['submitDate_hod_u'];?>
    </div> 
</div>


<!-- MAONI YA MHASIBU MKUU INAPOTOKA KWA CA-->

<?php if ($row_masurufu_marejesho['nathibitisha_sithibitishi_ca'] == "sithibitishi"){?>
<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maelezo ya Mhasibu Mkuu
    </div> 
</div>
<div class="row_form anadaiwa">
<div class="title_100st mnrt-left-align">
<?php echo $row_masurufu_marejesho['sithibitishi_sababu_ca'];?>
</div>
</div>
<?php };?>

<?php if ($row_masurufu_marejesho['nathibitisha_sithibitishi_ca'] == "nathibitisha"){?>
<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Uthibitisho wa Mhasibu Mkuu
    </div> 
</div>
<?php if($row_masurufu_marejesho['madai_ya_sh_hod_u'] == 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	Kutokana na maelezo hapo juu, nathibitisha Afisa huyu amerejesha masurufu yote aliyochukua kwa shughuli iliyotajwa hapo juu.
    </div> 
</div>
<?php };?>
<?php if($row_masurufu_marejesho['madai_ya_sh_hod_u'] < 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	Kutokana na maelezo hapo juu, nathibitisha Afisa huyu amerejesha masurufu yote aliyochukua kwa shughuli iliyotajwa.
	<br>Naidhinisha malipo ya Shilingi<?php echo "&nbsp;".number_format(-($row_masurufu_marejesho['madai_ya_sh_hod_u']),2)."/=";?>
    </div> 
</div>
<?php };?>
<?php if($row_masurufu_marejesho['madai_ya_sh_hod_u'] > 0) { ?>
<div class="row_form">
    <div class="title_100st mnrt-left-align">
	Kutokana na maelezo hapo juu, nathibitisha Afisa huyu amerejesha masurufu yote aliyochukua kwa shughuli iliyotajwa.
	<br>Nathibitisha kupokea rejesho la Shilingi<?php echo "&nbsp;".number_format($row_masurufu_marejesho['madai_ya_sh_hod_u'],2)."/=,&nbsp;";?>
	na amepatiwa risiti namba<?php echo "&nbsp;".$row_masurufu_marejesho['marejesho_risiti']."&nbsp;";?>
    </div> 
</div>

<?php if ($row_masurufu_marejesho['final_kiambata_ca']!=""){?>
<div class="row_form">
    <div class="ambatanisho_title_1 mnrt-left-align">
	Risiti ya Malipo:
    </div> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho_1 mnrt-left-align">
	<a href="../ca/viambatanisho/risiti/<?php echo $row_masurufu_marejesho['username']."/".$row_masurufu_marejesho['final_kiambata_ca'] ?>" target="_blank"><?php echo $row_masurufu_marejesho['jina_kiambata_ca'];?></a>
    </div>
</div>
<?php };?>

<?php };?>

<div class="row_form">
    <div>
	Tarehe <?php echo $row_masurufu_marejesho['submitDate_ca'];?>
    </div>
</div>
<?php };?>

<!-- END MAONI YA MHASIBU MKUU-->

<div class="row_form">
    <div class="delete_col mnrt-left">
	<span>
	
	<input  class="btn btn-primary" type="button" value="Sawa" onclick="window.location.href=<?php echo "'".$_SESSION['kutoka_link']."'";?>">

	</span>
    </div> 
</div>



<?php }else{ ?>



<!-- UTHIBITISHO WA HOD_U-->



<div class="row_form "> 
<div class="col-form-75" style="padding:16px 0px 16px 0px"> 
<label class="radio-inline">
  <?php 
  if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "nathibitisha") { $nathibitisha = "checked"; }
  if($row_masurufu_marejesho['nathibitisha_sithibitishi_hod_u'] == "sithibitishi") { $sithibitishi = "checked"; };?>
          <input type="radio" name="nathibitisha_sithibitishi" id="nathibitisha_sithibitishi" value="nathibitisha" <?php echo $nathibitisha;?>>
    Nathibitisha
   </label>
   <label class="radio-inline">
          <input type="radio" name="nathibitisha_sithibitishi" id="nathibitisha_sithibitishi" value="sithibitishi" <?php echo $sithibitishi;?>>
    Sithibitishi
    </label>
	</div>
	</div>	
	
	<div class="row_form nathibitisha">
	<div class="title_100st mnrt-left-align" data-tip="Nathibitisha..">	
	<?php if($row_masurufu_marejesho['madai_ya_sh'] < 0) {?>
	Nathibitisha kuwa Afisa huyu anastahili kulipwa kiasi hicho. Alipwe chini ya kifungu:-
	<?php };?>
	<?php if($row_masurufu_marejesho['madai_ya_sh'] > 0) {?>
	Nathibitisha marejesho hayo ni sahihi. Yarejeshwe kwenye kifungu:-
	<?php };?>	
	</div>
    <div class="col-form-75" data-tip="Kifungu..">    
  	<input type="text" class="form-control" id="madai_kifungu" name="madai_kifungu" placeholder="Kifungu.." value="<?php echo $row_masurufu_marejesho['madai_kifungu'];?>">
    </div>
	</div>
	
	<div class="row_form sithibitishi">
    <div class="col-form-75" data-tip="Sababu">
    <input type="text" class="form-control" id="sithibitishi_sababu" name="sithibitishi_sababu" placeholder="Sababu.." value="<?php echo $row_masurufu_marejesho['sithibitishi_sababu'];?>">
    </div>
	</div>
	
	<input type="hidden" id="madai_ya_sh_hod_u" name="madai_ya_sh_hod_u" value="<?php echo $row_masurufu_marejesho['madai_ya_sh'];?>">
	
	<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	
    </div> 
    <div class="col-form-75">
    </div>
</div>

   
<!-- END UTHIBITISHO WA HOD_U-->
   
<div class="row_form">
<div class="col-form-nusu" style="padding: 10px 10px 10px 0px">    
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
	<input  class="btn btn-primary" type="button" value="Rudi Nyuma" onclick="window.location.href=<?php echo "'".$_SESSION['kutoka_link']."'";?>">
	</span>
	<span><input  class="btn btn-primary submitallplayerbtn" type="submit" value="Tuma"></span>
    </div> 
</div>
<br>
<input name="badilisha" id="badilisha" type="hidden" value="<?php echo $badilisha;?>">
<input name="masurufu" id="masurufu" type="hidden" value="<?php echo $masurufu;?>">
<input name="kutoka" id="kutoka" type="hidden" value="<?php echo "marejesho_yanayoingia_tazama";?>">
<input name="masurufu_marejesho_general_status" id="masurufu_marejesho_general_status" type="hidden" value="<?php echo "ameona_hod_u";?>">
<!--input name="masurufu_general_status" id="masurufu_general_status" type="hidden" value="<php echo "mapya";?>"-->
<input name="kibali_id" id="kibali_id" type="hidden" value="<?php echo $row_rsselectedKibali['id'];?>">
<!--input name="masurufu_id" id="masurufu_id" type="hidden" value="<php echo $row_masurufu_marejesho['masurufu_id'];?>"-->
<input name="submitDate_hod_u" type="hidden" id="submitDate_hod_u" value="<?php echo date("d-m-Y");?>">
<input type="hidden" name="MM_update" value="masurufu_maombi_mapya_update">
<!-- END MAONI YA hod_u -->

<?php };?>

 </form>
</div>
</div>
</body>
</html>
