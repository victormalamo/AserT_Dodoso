<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<?php 

/////////////////////Kibali kilichochaguliwa
	//Kwa ajili ya kuedit taarifa za HOS toka updatequery to "BADILI" link
	$id = $_GET['id'];
	$badilisha = $_GET['badilisha'];
	//$maamuzi_ID = $_GET[['maamuzi_ID'];
	//$sababu = $_GET[['sababu'];
	//end
$colname_rsselectedKibali = "-1";
if (isset($_GET['id'])) {
  $colname_rsselectedKibali = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
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

//Kupitisha kwenye badili link
	$maamuzi_ID = $row_rsselectedKibali['ps_status'];
	$sababu = $row_rsselectedKibali['ps_rsn_chg'];
	

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

$quermaamuzi=mysqli_query($conntscpME, "SELECT * FROM maamuzi_ps ORDER BY id ASC");
//$maamuzi_ID=$_GET['maamuzi_ID'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Kibali cha Kusafiri</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="/css/tazama_kibali.css">
<link rel="stylesheet" type="text/css" href="/css/nice_select.css">
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />

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

<script>
function kaguaMaamuzi() {
	var maamuzi_ID = document.yanayoingia_update.maamuzi_ID.value;
	var sababu = document.yanayoingia_update.sababu.value;
	var verif_box_value = document.yanayoingia_update.verif_box.value;
	if(maamuzi_ID.length > 0 ) {
		if(sababu.length > 0) { return true; }
		alert("Andika sababu za maoni yako!");
		return false;
	}else{
		alert("Chagua maoni!");
		return false;
		}

}
function nenda() {
window.location.href="yanayoingia_list.php";
}
</script>
</head>

<body style="background-color:#333333">
<div class="container_form" style="background-color:#ffffff">
<div class="container_form_inner">

<form action="maamuzi_updatequery.php" method="POST" name="yanayoingia_update" id="yanayoingia_update" >
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

<!-- YALIYOJAZWA NA HOD_U -->

<?php  if($row_rsselectedKibali['hodu_status'] != "") {?>

<div class="row_form">
    <div class="title_100stb mnrt-left-align kibali_title">
	Maoni ya Mkuu wa Idara
    </div> 
</div>
<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php
	if($row_rsselectedKibali['hodu_status'] == "kimekataliwa_hod_u") { echo "Siidhinishi ombi lake."; };
    if($row_rsselectedKibali['hodu_status'] == "kimepitishwa_hod_u") { echo "Naidhinisha ombi lake."; };
	if($row_rsselectedKibali['hodu_status'] == "maelekezo_hod_u") { echo "Naelekeza:"; };	
	 ?> 
    <?php echo "&nbsp;".$row_rsselectedKibali['hodu_rsn_chg'];?>
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

<?php }?>

<!-- End HOD_U -->

<div class="row_form" style="border-bottom:1px solid #cccccc; padding: 50px 0px 0px 0px">
    <div class="title_100stb mnrt-left-align">
	</div> 
</div>

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	IDHINI YA KATIBU MKUU
	<?php 
	if(($row_rsselectedKibali['ps_status'] !="") && ($_GET['badilisha'] !="ndio")){ echo "&nbsp;&nbsp;[&nbsp;<a href='yaliyoelekezwa_tazama.php?id=$id&maamuzi_ID=$maamuzi_ID&sababu=$sababu&badilisha=ndio'>BADILI</a>&nbsp;]";};?>
    </div> 
    <div class="">
    </div>
</div>

<?php if(($row_rsselectedKibali['ps_status'] !="") && ($_GET['badilisha'] !="ndio")){?>

<div class="row_form">
    <div class="kibali_details mnrt-left-align">
	<?php
	if($row_rsselectedKibali['ps_status'] == "kimekataliwa_ps") { echo "Siidhinishi ombi lake."; };
    if($row_rsselectedKibali['ps_status'] == "kimepitishwa_ps") { echo "Naidhinisha ombi lake."; };
	if($row_rsselectedKibali['ps_status'] == "maelekezo_ps") { echo "Naelekeza:"; };	
	 ?> 
    <?php echo $row_rsselectedKibali['ps_rsn_chg'];?>
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
<div class="row_form">
    <div class="delete_col mnrt-left">
	<span><input  class="btn btn-primary" type="button" value="Sawa" onclick="window.location.href='yaliyoelekezwa_list.php'"></span>
    </div> 
</div>

<?php }else{ ?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" data-tip="Maoni">
	  	<?php
		echo "<select name='maamuzi_ID' id='maamuzi_ID' class='mandatory form-control maamuzi_select wide' width='100%' style='width: 100%'><option selected disabled value=''>Chagua maoni..</option>";
		while($noticiamaamuzi = mysqli_fetch_array($quermaamuzi)) {
		if($noticiamaamuzi['maamuzi_ID']==@$maamuzi_ID){echo "<option selected value='$noticiamaamuzi[maamuzi_ID]'>$noticiamaamuzi[maamuzi]</option>"."<BR>";}
		else{echo "<option  value='$noticiamaamuzi[maamuzi_ID]'>$noticiamaamuzi[maamuzi]</option>";}
		}
		echo "</select>";
		?>
    </div> 
</div>
  <div class="row_form">
    <div class="col-form-75" data-tip="Sababu za maoni hapo juu">
      <textarea id="sababu" class="form-control maamuzi_textarea mandatory" name="sababu" placeholder="Andika sababu.." style="height:100px"><?php echo $_GET['sababu'];?></textarea>
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
	<span><input  class="btn btn-primary" type="button" value="Rudi Nyuma" onclick="window.location.href='yaliyoelekezwa_list.php'";></span>
	<span><input  class="btn btn-primary submitallplayerbtn" type="submit" value="Tuma" onclick="return kaguaMaamuzi();"></span>
    </div> 
</div>
<input name="badilisha" id="badilisha" type="hidden" value="<?php echo $badilisha;?>">
<input name="kutoka" id="kutoka" type="hidden" value="<?php echo "yaliyoelekezwa";?>">
<input name="id" id="id" type="hidden" value="<?php echo $row_rsselectedKibali['id'];?>">
<input name="ps_submitDate" type="hidden" id="ps_submitDate" value="<?php echo date("d-m-Y");?>">
<input type="hidden" name="MM_update" value="yanayoingia_update">

<?php };?>

 </form>
</div>
</div>
</body>
</html>
