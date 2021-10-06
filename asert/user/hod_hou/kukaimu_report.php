<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<?php 

$colname_rsselectedUkaimisho = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_rsselectedUkaimisho = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_rsselectedUkaimisho = sprintf("SELECT * FROM ukaimisho WHERE ukaimisho_id = %s", $colname_rsselectedUkaimisho);
$rsselectedUkaimisho = mysqli_query($conntscpME, $query_rsselectedUkaimisho) or die(mysqli_error());
$row_rsselectedUkaimisho = mysqli_fetch_assoc($rsselectedUkaimisho);
$totalRows_rsselectedUkaimisho = mysqli_num_rows($rsselectedUkaimisho);

$tarehe_ya_kuanzia = $row_rsselectedUkaimisho['tarehe_ya_kuanzia'];
$tarehe_ya_kukabidhi = $row_rsselectedUkaimisho['tarehe_ya_kukabidhi'];
$muda_wa_ukaimisho = $row_rsselectedUkaimisho['muda_wa_ukaimisho'];

///////////////////// Taarifa za Mtumishi aliyekaimisha

$colname_rs_aliyekaimisha = $row_rsselectedUkaimisho['aliyekaimisha_username'];

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

$colname_rstersuser = $row_rsselectedUkaimisho['aliyekaimishwa_username'];

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

//Uthibitisho Baada ya Ukaimisho
$colname1_rs_anayekaimisha = "1";
if (isset($_SESSION['username'])) {
  $colname1_rs_anayekaimisha = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
}

$query_uthibitisho = sprintf("SELECT * FROM wafanyakazi WHERE username = '%s'", $colname1_rs_anayekaimisha);
$rsuthibitisho = mysqli_query($conntscpME, $query_uthibitisho) or die(mysqli_error());
$row_rsuthibitisho = mysqli_fetch_assoc($rsuthibitisho);
$totalRows_rsuthibitisho = mysqli_num_rows($rsuthibitisho);

?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US" class="restade">
<head>
<title>Kibali cha Kusafiri</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="/css/tazama_kibali.css">
<link rel="stylesheet" type="text/css" href="/css/nice_select.css">
<link rel="stylesheet" type="text/css" href="/css/pandisha_faili.css">
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>

<!-- NICE SELECT -->

  <script src="http://localhost/js/jquery-3.3.1.min.js"></script>
  <script src="http://localhost/js/jquery.nice-select.min.js"></script>
  <script src="http://localhost/js/fastclick.js"></script>
  <script src="http://localhost/js/prism.js"></script>
 
  
<!-- Text Editor -->

<link type="text/css" rel="stylesheet" href="/css/jquery-te-1.4.0.css">
<script type="text/javascript" src="http://localhost/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<!-- End Text Editor -->
  
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
</script>
</head>

<body style="background-color:#333333">
<div class="container_form" style="background-color:#ffffff">
<div class="container_form_inner">

<form action="" method="POST" name="yanayoingia_update" id="yanayoingia_update" enctype="multipart/form-data">

<!--div class="row_form">
    <div class="title_100_alert mnrt-center" style="border: 1px solid; border-color:#cc0000; color:#cc0000">
	KAIMISHA
    </div> 
    <div class="">
    </div>
</div-->
<div class="row_form">
    <div class="title_100S mnrt-left-align">
	TAARIFA ZA KUKAIMISHA
	<!--php 
	if(($row_rsselectedUkaimisho['ukaimisho_id'] !="") && ($_GET['badilisha'] !="ndio") && ($row_rsuthibitisho['uthibitisho'] !="nimekubali")){ echo "&nbsp;&nbsp;[&nbsp;<a href='kaimisha.php?ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id&username=$username&kazi_zilizokaimishwa=$kazi_zilizokaimishwa&badilisha=ndio'>BADILI</a>&nbsp;]";};?-->
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="col-form-75" style="font-weight: bold; padding: 16px 0px 16px 0px">
	Taarifa za Aliyekaimisha
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form safari_ripoti">

<table class="table table-fixed table-bordered">
  <tbody>		
	<tr>      
      <td width="25%">Jina Kamili</td>
	  <td><?php echo $row_rs_aliyekaimisha['f_name']."&nbsp;".$row_rs_aliyekaimisha['m_name']."&nbsp;".$row_rs_aliyekaimisha['l_name']."&nbsp;(Namba ya Cheki:&nbsp;".$row_rs_aliyekaimisha['username'].")";?>
    </td>	  
    </tr>
	<tr>      
      <td>Mawasiliano</td>
	  <td><?php echo "Simu: ".$row_rs_aliyekaimisha['mob']."&nbsp;Email: ".$row_rs_aliyekaimisha['e_add']; ?></td>	  
    </tr>
	<tr>      
      <td><?php if($row_rsdiv_unit_name_aliyekaimisha['div_au_unit'] == "div"){ echo "Idara:";}else{ echo "Kitengo:";};?></td>
	  <td><?php echo $row_rsdiv_unit_name_aliyekaimisha['div_unit_kirefu']."&nbsp;"; if (isset($row_rssection_name_aliyekaimisha['section_name'])){ echo "&nbsp;(Section:&nbsp;".$row_rssection_name_aliyekaimisha['section_name_kirefu'].")";};?></td>	  
    </tr>
	<tr>      
      <td>Cheo</td>
	  <td><?php echo $row_rscheo_name_aliyekaimisha['jina_la_cheo'];?></td>	  
    </tr>		
  </tbody>
</table>

</div>

<div class="row_form">
    <div class="col-form-75" style="font-weight: bold; padding: 16px 0px 16px 0px">
	Taarifa za Aliyekaimishwa
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form safari_ripoti">

<table class="table table-fixed table-bordered">
  <tbody>		
	<tr>      
      <td width="25%">Jina Kamili</td>
	  <td><?php echo $row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name']."&nbsp;&nbsp;&nbsp;&nbsp;(Namba ya Cheki:&nbsp;".$row_rstersuser['username'].")";?>
    </td>	  
    </tr>
	<tr>      
      <td>Mawasiliano</td>
	  <td><?php echo "(i) Namba ya simu: ".$row_rstersuser['mob']."&nbsp;(ii) Barua pepe: ".$row_rstersuser['e_add']; ?></td>	  
    </tr>
	<tr>      
      <td><?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "Idara:";}else{ echo "Kitengo:";};?></td>
	  <td><?php echo $row_rsdiv_unit_name['div_unit_kirefu']."&nbsp;"; if (isset($row_rssection_name['section_name'])){ echo "&nbsp&nbsp&nbsp&nbsp(Section:&nbsp;".$row_rssection_name['section_name_kirefu'].")";};?></td>	  
    </tr>
	<tr>      
      <td>Cheo</td>
	  <td><?php echo $row_rscheo_name['jina_la_cheo'];?></td>	  
    </tr>		
  </tbody>
</table>

</div>

<div class="row_form safari_ripoti_title">
    <div class="col-form-75" style="font-weight: bold; padding: 16px 0px 16px 0px">
	Taarifa Aliyokabidhiwa
    </div> 
    <div class="">
    </div>
</div>

<div class="row_form safari_ripoti" style="padding: 16px 0px 16px 0px;">
<?php echo $row_rsselectedUkaimisho['kazi_zilizokaimishwa']; ?>
<br>
<?php echo "Muda wa Kukaimu: Tarehe&nbsp;".$tarehe_ya_kuanzia."&nbsp;mpaka tarehe&nbsp;".$tarehe_ya_kukabidhi."&nbsp;(siku&nbsp;".$muda_wa_ukaimisho.")";?>
<!--table class="table table-fixed table-borderless">
  <tbody>
	<tr>      
    <td colspan="2"><php echo $row_rsselectedUkaimisho['kazi_zilizokaimishwa']; ?></td>
	</tr>
	<tr>
	<td width="25%">Muda wa Kukaimu</td>
	<td><php echo "Tarehe&nbsp;".$tarehe_ya_kuanzia."&nbsp;mpaka tarehe&nbsp;".$tarehe_ya_kukabidhi."&nbsp;(siku&nbsp;".$muda_wa_ukaimisho.")";?></td>
	</tr>
  </tbody>
</table-->
</div>
<?php if ($row_rsselectedUkaimisho['final_kiambata'] != ""){ ?>
<div class="row_form">
    <!--div class="ambatanisho_title_1 mnrt-left-align">
	Ambatanisho:
    </div--> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho_1 mnrt-left-align">
	<a href="/user/<?php if(($row_rsselectedUkaimisho['cheo_alichokaimishwa'] == "hod") || ($row_rsselectedUkaimisho['cheo_alichokaimishwa'] == "hou")){ echo "hod_hou"; }else{ echo $row_rsselectedUkaimisho['cheo_alichokaimishwa'];}?>/ukaimisho/<?php echo $row_rsselectedUkaimisho['aliyekaimisha_username']."/".$row_rsselectedUkaimisho['final_kiambata'] ?>" target="_blank"><?php echo "&nbsp;&nbsp;".$row_rsselectedUkaimisho['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>

<div class="row_form" style="border-bottom:1px dotted #cccccc">
    <div class="col-form-75" style="font-weight: bold; padding: 16px 0px 16px 0px">
	</div> 
    <div class="">
    </div>
</div>

<?php if($row_rsselectedUkaimisho['ripoti_ya_ukaimisho'] != ""){ ?>

<div class="row_form safari_ripoti_title" style="font-weight: bold; padding: 32px 0px 16px 0px;">
    <div class="col-form-75">
	Ripoti ya Kukabidhi
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form safari_ripoti" style="padding: 32px 0px 16px 0px;">
<?php echo $row_rsselectedUkaimisho['ripoti_ya_ukaimisho']; ?>
<!--table class="table table-fixed table-borderless">
  <tbody>
	<tr>      
    <td colspan="2"><php echo $row_rsselectedUkaimisho['ripoti_ya_ukaimisho']; ?><!--/td>
	</tr>
	<!--tr>
	<td width="25%">Muda wa Kukaimu</td>
	<td><php echo "Tarehe&nbsp;".$tarehe_ya_kuanzia."&nbsp;mpaka tarehe&nbsp;".$tarehe_ya_kukabidhi."&nbsp;(siku&nbsp;".$muda_wa_ukaimisho.")";?></td>
	</tr-->
  <!--/tbody>
</table-->
</div>
<?php if ($row_rsselectedUkaimisho['final_kiambata_2'] != ""){ ?>
<div class="row_form">
    <!--div class="ambatanisho_title_1 mnrt-left-align">
	Ambatanisho:
    </div--> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho_1 mnrt-left-align">
	<a href="/user/<?php if(($row_rsselectedUkaimisho['cheo_alichokaimishwa'] == "hod") || ($row_rsselectedUkaimisho['cheo_alichokaimishwa'] == "hou")){ echo "hod_hou"; }else{ echo $row_rsselectedUkaimisho['cheo_alichokaimishwa'];}?>/ukaimisho/<?php echo $row_rsselectedUkaimisho['aliyekaimisha_username']."/".$row_rsselectedUkaimisho['final_kiambata_2'] ?>" target="_blank"><?php echo "&nbsp;&nbsp;".$row_rsselectedUkaimisho['jina_kiambata_2'];?></a>
    </div>
</div>
<?php };?>

<?php };?>

<div class="row_form">
    <div class="delete_col mnrt-left">
	<span><input  class="btn btn-primary" type="button" value="Sawa" onclick="window.location.href=<?php echo "'".$_SESSION['kutoka_link']."'";?>"></span>
    </div> 
</div>
<br>
</form>
<script src="http://localhost/js/baka_pandisha_faili.js"></script>
<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>
</div>
</div>
</body>
</html>
