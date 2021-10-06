<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<?php 

//Soma kutoka kwenye kibali cha safari kilichopitishwa na KM

$colname_rsselectedKibali = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_rsselectedKibali = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_rsselectedKibali = sprintf("SELECT * FROM vibali WHERE id = %s", $colname_rsselectedKibali);
$rsselectedKibali = mysqli_query($conntscpME, $query_rsselectedKibali) or die(mysqli_error());
$row_rsselectedKibali = mysqli_fetch_assoc($rsselectedKibali);
$totalRows_rsselectedKibali = mysqli_num_rows($rsselectedKibali);

$tarehe_ya_kuanzia = $row_rsselectedKibali['sDate']; //sDate

$safari_n = $row_rsselectedKibali['safari_n'];
	if($row_rsselectedKibali['ruti_ID'] == "ruti_moja"){
	$tarehe_ya_kukabidhi = $row_rsselectedKibali['eDate'];
	}elseif($row_rsselectedKibali['ruti_ID'] == "ruti_zaidi_ya_moja"){
	$tarehe_ya_kukabidhi = $row_rsselectedKibali['eDate_'.$safari_n.''];
	}
$muda_wa_ukaimisho = $row_rsselectedKibali['duration_safarini'];

/////////////////////Kibali kilichochaguliwa
	//Kwa ajili ya kuedit taarifa za HOS toka updatequery to "BADILI" link
	$kibali_id = $_GET['kibali_id']; //$_GET['kibali_id'];
	$ukaimisho_id = $_GET['ukaimisho_id'];
	$badilisha = $_GET['badilisha'];
	//$maamuzi_ID = $_GET[['maamuzi_ID'];
	//$sababu = $_GET[['sababu'];
	//end

$colname_rsselectedUkaimisho = "-1";
if (isset($_GET['kibali_id'])) {
  $colname_rsselectedUkaimisho = (get_magic_quotes_gpc()) ? $_GET['kibali_id'] : addslashes($_GET['kibali_id']);
}

$query_rsselectedUkaimisho = sprintf("SELECT * FROM ukaimisho WHERE ukaimisho_id = %s", $colname_rsselectedUkaimisho);
$rsselectedUkaimisho = mysqli_query($conntscpME, $query_rsselectedUkaimisho) or die(mysqli_error());
$row_rsselectedUkaimisho = mysqli_fetch_assoc($rsselectedUkaimisho);
$totalRows_rsselectedUkaimisho = mysqli_num_rows($rsselectedUkaimisho);


//Kupitisha kwenya badili link na select dropdown
	$username = $row_rsselectedUkaimisho['aliyekaimishwa_username'];
	$kazi_zilizokaimishwa = $row_rsselectedUkaimisho['kazi_zilizokaimishwa'];

$div_unit_ID = $_SESSION['div_unit_ID'];

$querwakaimishwaji_hold = sprintf("SELECT wafanyakazi.*, vyeo.* FROM wafanyakazi, vyeo WHERE ((wafanyakazi.div_unit_ID = '%s') AND (wafanyakazi.deligatable = 'yes') AND (wafanyakazi.cheo_ID = vyeo.cheo_ID)) ORDER BY vyeo.id ASC",$div_unit_ID);
$querwakaimishwaji = mysqli_query($conntscpME, $querwakaimishwaji_hold) or die(mysqli_error());

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
<link rel="stylesheet" type="text/css" href="/css/w3.css">
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
<div class="container_form_nopad" style="background-color:#ffffff">
<div class="row_form">
    <div class="title_after_cf mnrt-center" style="border-bottom: 1px solid #cccccc; line-height:60px;">
	KAIMISHA 
    </div> 
    <div class="">
    </div>
</div>
<div class="container_form_inner">

<form action="kaimisha_insert_updatequery.php" method="POST" name="yanayoingia_update" id="yanayoingia_update" enctype="multipart/form-data">

<div class="row_form">
    <div class="title_100S mnrt-left-align">
	KAIMISHA MADARAKA KWA AFISA MWINGINE
	<?php 
	if(($row_rsselectedUkaimisho['ukaimisho_id'] !="") && ($_GET['badilisha'] !="ndio") && ($row_rsuthibitisho['uthibitisho'] !="nimekubali")){ echo "&nbsp;&nbsp;[&nbsp;<a href='kaimisha.php?ukaimisho_id=$ukaimisho_id&kibali_id=$kibali_id&username=$username&kazi_zilizokaimishwa=$kazi_zilizokaimishwa&badilisha=ndio'>BADILI</a>&nbsp;]";};?>
    </div> 
    <div class="">
    </div>
</div>
<div class="row_form">
    <div class="title_100stb mnrt-left-align">
	(Mkuu wa Idara/Kitengo)
    </div> 
    <div class="col-form-75">
    </div>
</div>

<?php if(($row_rsselectedUkaimisho['ukaimisho_id'] !="") && ($_GET['badilisha'] !="ndio")){?>

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
      <td width="25%">Jina Kamili la Afisa</td>
	  <td><?php echo $row_rstersuser['f_name']."&nbsp;".$row_rstersuser['m_name']."&nbsp;".$row_rstersuser['l_name']."&nbsp;(Namba ya Cheki:&nbsp;".$row_rstersuser['username'].")";?>
    </td>	  
    </tr>
	<tr>      
      <td>Mawasiliano</td>
	  <td><?php echo "(i) Namba ya simu: ".$row_rstersuser['mob']."&nbsp;(ii) Barua pepe: ".$row_rstersuser['e_add']; ?></td>	  
    </tr>
	<tr>      
      <td><?php if($row_rsdiv_unit_name['div_au_unit'] == "div"){ echo "Idara:";}else{ echo "Kitengo:";};?></td>
	  <td><?php echo $row_rsdiv_unit_name['div_unit_kirefu']."&nbsp;"; if (isset($row_rssection_name['section_name'])){ echo "&nbsp(Section:&nbsp;".$row_rssection_name['section_name_kirefu'].")";};?></td>	  
    </tr>
	<tr>      
      <td>Cheo</td>
	  <td><?php echo $row_rscheo_name['jina_la_cheo'];?></td>	  
    </tr>		
  </tbody>
</table>

</div>

<?php if($row_rsselectedUkaimisho['kazi_zilizokaimishwa'] !=""){?>

<div class="row_form safari_ripoti_title">
    <div class="col-form-75" style="font-weight: bold; padding: 16px 0px 16px 0px">
	Taarifa ya Kukaimisha
    </div> 
    <div class="">
    </div>
</div>

<div class="row_form safari_ripoti" style="padding: 16px 0px 16px 0px;">
<?php echo $row_rsselectedUkaimisho['kazi_zilizokaimishwa']; ?>
<br>
<?php echo "Muda wa Kukaimu: Tarehe&nbsp;".$tarehe_ya_kuanzia."&nbsp;mpaka tarehe&nbsp;".$tarehe_ya_kukabidhi."&nbsp;(siku&nbsp;".$muda_wa_ukaimisho.")";?>

<!--table class="table table-fixed table-bordered">
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
<?php };?>
<?php if ($row_rsselectedUkaimisho['final_kiambata'] != ""){ ?>
<div class="row_form">
    <!--div class="ambatanisho_title_1 mnrt-left-align">
	Ambatanisho:
    </div--> 
	<div class="ambatanisho_ico mnrt-left-align">
	<img src="/images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho_1 mnrt-left-align">
	<a href="ukaimisho/<?php echo $_SESSION['username']."/".$row_rsselectedUkaimisho['final_kiambata'] ?>" target="_blank"><?php echo "&nbsp;&nbsp;".$row_rsselectedUkaimisho['jina_kiambata'];?></a>
    </div>
</div>
<?php };?>

<div class="row_form">
    <div class="delete_col mnrt-left">
	<span><input  class="btn btn-primary" type="button" value="Sawa" onclick="window.location.href='index.php'"></span>
    </div> 
</div>
<br>
<?php }else{ ?>

<div class="row_form">
    <div class="col-form-75 mnrt-left-align" data-tip="Maoni">
	  	<?php
		echo "<select name='username' id='username' class='mandatory form-control maamuzi_select wide' width='100%' style='width: 100%'><option selected disabled value=''>Chagua afisa..</option>";
		while($noticiawakaimishwaji = mysqli_fetch_array($querwakaimishwaji)) {
		if($noticiawakaimishwaji['username']==@$username){ echo "<option selected value='$noticiawakaimishwaji[username]'>$noticiawakaimishwaji[f_name]&nbsp;$noticiawakaimishwaji[m_name]&nbsp;$noticiawakaimishwaji[l_name]&nbsp;-&nbsp;$noticiawakaimishwaji[jina_la_cheo]</option>"."<BR>";}
		else{echo "<option  value='$noticiawakaimishwaji[username]'>$noticiawakaimishwaji[f_name]&nbsp;$noticiawakaimishwaji[m_name]&nbsp;$noticiawakaimishwaji[l_name]&nbsp;-&nbsp;$noticiawakaimishwaji[jina_la_cheo]</option>";}
		}
		echo "</select>";
		?>
    </div> 
</div>
<div class="row_form">
<div class="col-form-75" style="padding: 16px 0px 0px 0px">
Muhtasari wa Kazi
</div>
</div>
<div class="row_form"> 
<div class="col-form-75" data-tip="Maelezo kwa ufupi"> 
<textarea id="kazi_zilizokaimishwa" class="jqte-test mandatory form-control registrationFormtextarea" name="kazi_zilizokaimishwa" style="height:100px"><?php echo $row_rsselectedUkaimisho['kazi_zilizokaimishwa'];?></textarea>
</div>
</div>

<!-- VIAMBATANISHI -->

<div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Jina la kiambatanishi"> 
                  <input type="text" class="form-control registrationFormtext" id="jina_kiambata" name="jina_kiambata" placeholder="Jina la kiambata.." value="<?php echo $row_rsselectedUkaimisho['jina_kiambata'];?>">
                </div>
              </div>
              <div class="row_form"> 
                <div class="col-form-25"> 
                  <!--label for="cnumber">Namba ya cheki</label-->
                </div>
                <div class="col-form-75" data-tip="Kiambatanishi"> 
                  <!--input type="file" <php if(((isset($_GET['kiambata'])) && ($_GET['kiambata']=="tupu")) || (($_GET['tupu']=="ipo") && ($_GET['kiambata']==''))){ echo "class='registrationFormtext-error'"; $_GET['kiambata']=''; }else{ echo "class='registrationFormtext'";};?> id="kiambata" name="kiambata" value="<php echo $_GET['kiambata'];?>"-->
                  <input type="file" class="registrationFormtext inputfile inputfile-6" id="kiambata" name="kiambata" value="<?php echo $row_rsselectedUkaimisho['final_kiambata'];?>">
                  <label for="kiambata"><span></span> <strong>Ambatanisha..&hellip;</strong></label>
                </div>
              </div>
			  
<!-- END VIAMBATANISHI -->

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
	<span><input  class="btn btn-primary" type="button" value="Rudi Nyuma" onclick="window.location.href='index.php'";></span>
	<span><input  class="btn btn-primary submitallplayerbtn" type="submit" value="Tuma" onclick="return kaguaMaamuzi();"></span>
    </div> 
</div>
<br />
<input name="kibali_id" id="kibali_id" type="hidden" value="<?php echo $kibali_id;?>">
<input name="tarehe_ya_kuanzia" id="tarehe_ya_kuanzia" type="hidden" value="<?php echo $tarehe_ya_kuanzia;?>">
<input name="tarehe_ya_kukabidhi" id="tarehe_ya_kukabidhi" type="hidden" value="<?php echo $tarehe_ya_kukabidhi;?>">
<input name="muda_wa_ukaimisho" id="muda_wa_ukaimisho" type="hidden" value="<?php echo $muda_wa_ukaimisho;?>">
<input name="old_kiambata" type="hidden" id="old_kiambata" value="<?php echo $row_rsselectedUkaimisho['final_kiambata'];?>">
<input name="badilisha" id="badilisha" type="hidden" value="<?php echo $badilisha;?>">
<input name="kutoka" id="kutoka" type="hidden" value="<?php echo "kaimisha";?>">
<input name="ukaimisho_id" id="ukaimisho_id" type="hidden" value="<?php echo $row_rsselectedUkaimisho['ukaimisho_id'];?>">
<input name="submitDate" type="hidden" id="submitDate" value="<?php echo date("d-m-Y");?>">
<input type="hidden" name="MM_update" value="yanayoingia_update">

<?php };?>

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
