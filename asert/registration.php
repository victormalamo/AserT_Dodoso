<?php require_once('Connections/connmnrtsafari.php'); ?>

<?php


$querCat=mysqli_query($conntscpME, "SELECT * FROM orgLevels");
$catID=$_GET['catID'];

//The second list inategemea chaguo la first list i.e land


if(isset($catID) and strlen($catID) > 0){//kuepuka wakati value=''
$query_rsRegion = sprintf("SELECT * FROM regions order by div_unit");
$quer = mysqli_query($conntscpME, $query_rsRegion) or die(mysqli_error());
}//else{ Display nothing when commented


//The third-b list inategemea na chaguo la third list i.e district
$colname_rslga = "-1";
if (isset($_GET['div_unit'])) {
 $colname_rslga = (get_magic_quotes_gpc()) ? $_GET['div_unit'] : addslashes($_GET['div_unit']);
}

$div_unit=$_GET['div_unit']; // This line is added to take care if your global variable is off
if(isset($div_unit) and strlen($div_unit) > 0){
$query_rslga = sprintf("SELECT * FROM lgas WHERE div_unit = '%s'", $colname_rslga);
$quer3b = mysqli_query($conntscpME, $query_rslga) or die(mysqli_error());
}//else{$quer3=mysqli_query($conntscpME, "SELECT * FROM tbl_lgas order by lgaID"); }
$lgaID=$_GET['lgaID'];

$colname_rsTitle = "-1";
if (isset($_GET['catID'])) {
 $colname_rsTitle = (get_magic_quotes_gpc()) ? $_GET['catID'] : addslashes($_GET['catID']);
}

$catID=$_GET['catID']; // This line is added to take care if your global variable is off
if(isset($catID) and strlen($catID) > 0){//kuepuka wakati value=''
$query_rsTitle = sprintf("SELECT * FROM titles WHERE level = '%s'", $colname_rsTitle);
$quer4 = mysqli_query($conntscpME, $query_rsTitle) or die(mysqli_error());
}
$title=$_GET['title'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<TITLE>Registration | TERS</TITLE>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content=2008-03-10 name=date>
<META 
content="tanzania village register" 
name=description>
<META 
content="village, kijiji, street, mitaa, tanzania, africa, takwimu, wilaya, district" 
name=keywords>


<link rel="shortcut icon" href="/images/favicon.ico"/>

<link href="css/tersLGA.css" rel="stylesheet" type="text/css">
<link href="lga/css/quick-quote.css" rel="stylesheet" type="text/css">

<SCRIPT language=JavaScript>
function reloadCat(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var val4=form.title.options[form.title.options.selectedIndex].value;
var val5=form.f_name.value;
var val6=form.lName.value;
var val7=form.username.value;
self.location='registration.php?catID=' + valCat + '&title=' + val4 + '&f_name=' + val5+ '&lName=' + val6+ '&username=' + val7;
}

function reload(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var val2=form.div_unit.options[form.div_unit.options.selectedIndex].value; 
var val4=form.title.options[form.title.options.selectedIndex].value;
var val5=form.f_name.value;
var val6=form.lName.value;
var val7=form.username.value;
self.location='registration.php?catID=' + valCat + '&div_unit=' + val2 + '&title=' + val4+ '&f_name=' + val5+ '&lName=' + val6+ '&username=' + val7 ;
}
function reload1(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var val2=form.div_unit.options[form.div_unit.options.selectedIndex].value; 
var val3=form.lgaID.options[form.lgaID.options.selectedIndex].value; 
var val4=form.title.options[form.title.options.selectedIndex].value;
var val5=form.f_name.value;
var val6=form.lName.value;
var val7=form.username.value; 
self.location='registration.php?catID=' + valCat + '&div_unit=' + val2 + '&lgaID=' + val3 + '&title=' + val4+ '&f_name=' + val5+ '&lName=' + val6+ '&username=' + val7;
}

</script>
</HEAD>

<BODY>


<DIV id=container> 
  <DIV id=header> 
    <div id=bi_bwa><img src="lga/images/bunner.gif" width="800" height="150"></div>
    <!--end header -->
  </DIV>
  <div id=quotation> 
    <div id=datainput> 
      <form action="http://pmoralg/insertersusers.php" method="POST" name="registrationForm" id="registrationForm">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="fields">
          <tr> 
            <td width="49">&nbsp;</td>
            <td width="105">&nbsp;</td>
            <td width="446">&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="3" class="tavire-t3">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="3" class="tavire-t3">&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Level</td>
            <td> 
              <?php
echo "<select name='catID' id='catID' class='dropmenu' width='250' style='width: 250px' onchange=\"reloadCat(this.form)\"><option value=''>Select Level...</option>";
while($noticiaCat = mysqli_fetch_array($querCat)) {
if($noticiaCat['catID']==@$catID){echo "<option selected value='$noticiaCat[catID]'>$noticiaCat[category]</option>"."<BR>";}
else{echo "<option  value='$noticiaCat[catID]'>$noticiaCat[category]</option>";}
}
echo "</select>";?>
            </td>
          </tr>
          <?php if($catID=="pmoralg"){
////////////////////////// PMORALG//////////////////////////////////?>
          <?php };?>
          <?php if($catID=="rs"){
///////////////////////// REGION/////////////////////////////////////////////?>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr
		  >
          <tr> 
            <td>&nbsp;</td>
            <td>Select Region</td>
            <td> 
              <?php 
				echo "<select name='div_unit' id='div_unit' class='dropmenu' width='250' style='width: 250px' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
                 while($noticia = mysqli_fetch_array($quer)) { 
if($noticia['div_unit']==@$div_unit){echo "<option selected value='$noticia[div_unit]'>$noticia[regNam]</option>"."<BR>";}
else{echo  "<option value='$noticia[div_unit]'>$noticia[regNam]</option>";}
}
echo "</select>";?>
            </td>
          </tr>
          <?php };?>
          <?php if($catID=="lga"){
////////////////////////// LGA///////////////////////////////////////?>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr
		  >
          <tr> 
            <td>&nbsp;</td>
            <td>Select Region</td>
            <td> 
              <?php 
				echo "<select name='div_unit' id='div_unit' class='dropmenu' width='250' style='width: 250px' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
                 while($noticia = mysqli_fetch_array($quer)) { 
if($noticia['div_unit']==@$div_unit){echo "<option selected value='$noticia[div_unit]'>$noticia[regNam]</option>"."<BR>";}
else{echo  "<option value='$noticia[div_unit]'>$noticia[regNam]</option>";}
}
echo "</select>";?>
            </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Select LGA </td>
            <td> 
              <?php 
				echo "<select name='lgaID' id='lgaID' class='dropmenu' width='250' style='width: 250px' onchange=\"reload1(this.form)\"><option value=''>Select one</option>";
                 while($noticia = mysqli_fetch_array($quer3b)) { 
if($noticia['lgaID']==@$lgaID){echo "<option selected value='$noticia[lgaID]'>$noticia[lgaNam]</option>"."<BR>";}
else{echo  "<option value='$noticia[lgaID]'>$noticia[lgaNam]</option>";}
}
echo "</select>";?>
            </td>
          </tr>
          <?php };?>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>First Name </td>
            <td><input name="f_name" type="text" class="input" width="240" style="width: 240px" id="f_name" size="25" value="<?php echo $_GET['f_name'];?>"> 
            </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Last Name </td>
            <td><input name="lName" type="text" class="input" width="240" style="width: 240px" id="lName" size="25" value="<?php echo $_GET['lName'];?>"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Title</td>
            <td> 
              <!--<select name="title" id="title" class="dropmenu" width="250" style="width: 250px">
              <option selected value="">Select here...</option>
              <option value="HOD">Head of Department</option>
              <option value="HRO">Human Resource Officer</option>
              </select>-->
              <?php 
				echo "<select name='title' id='title' class='dropmenu' width='250' style='width: 250px' onchange=\"reload3(this.form)\"><option value=''>Select one</option>";
                 while($noticia = mysqli_fetch_array($quer4)) { 
if($noticia['title']==@$title){echo "<option selected value='$noticia[title]'>$noticia[titleName]</option>"."<BR>";}
else{echo  "<option value='$noticia[title]'>$noticia[titleName]</option>";}
}
echo "</select>";?>
            </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Username</td>
            <td><input name="username" type="text" class="input" width="240" style="width: 240px" id="username" size="25" value="<?php echo $_GET['username'];?>"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Password</td>
            <td><input name="password" class="input" width="240" style="width: 240px" type="password" id="password" size="25"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <!--<input name="hiddencatID" type="hidden" id="hiddencatID" value="<php echo "".$_GET['catID'];?>">
			  <input name="hiddendiv_unit" type="hidden" id="hiddendiv_unit" value="<php echo "".$_GET['div_unit'];?>">
			  <input name="hiddenlgaID" type="hidden" id="hiddenlgaID" value="<php echo "".$_GET['lgaID'];?>">-->
            </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td> <table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr class="fields"> 
                  <td width="208"><img src="http://localhost/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /></td>
                  <td width="68">&nbsp;</td>
                  <td width="164">&nbsp;</td>
                  <td width="68">&nbsp;</td>
                  <td width="192">&nbsp;</td>
                </tr>
                <tr class="fields"> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr class="fields"> 
                  <td><input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:125px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/></td>
                  <td colspan="4"> 
                    <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
                    <?php if(isset($_GET['wrong_code'])){?>
                    <div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:220px;">Wrong 
                      verification code</div>
                    <br/> 
                    <?php ;}?>
                  </td>
                </tr>
                <tr class="fields"> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr class="fields"> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr class="fields"> 
                  <td colspan="5"><table width="400" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td width="129"><input type="submit" name="Save" style="width:100px; height:24px;font-family:Verdana, Arial, sans-serif, Helvetica; font-size:12px;padding-top:0px; padding-bottom:2px; line-height:14px;" value="Save"></td>
                        <td width="136"><input type="button" name="reset" style="width:100px; height:24px;font-family:Verdana, Arial, sans-serif, Helvetica; font-size:12px;padding-top:0px; padding-bottom:2px; line-height:14px;"value="Reset" onClick="window.location='registration.php'"> 
                          <!--<input type="button" name="goback" style="width:130px; height:28px;font-family:Verdana, Arial, sans-serif, Helvetica; font-size:11px;padding-top:0px; padding-bottom:2px; line-height:14px;"value="Go Back" onClick="history.go(-1);return true;">-->
                        </td>
                        <td width="263"><input type="button" name="gohome" style="width:100px; height:24px;font-family:Verdana, Arial, sans-serif, Helvetica; font-size:12px;padding-top:0px; padding-bottom:2px; line-height:14px;"value="Go Home" onClick="window.location='http://localhost'"></td>
                        <td width="35">&nbsp;</td>
                        <td width="37">&nbsp;</td>
                      </tr>
                    </table></td>
                </tr>
                <tr class="fields"> 
                  <td> 
                    <!--<input name="origLGAID" type="hidden" id="origLGAID" value="<php echo "753534";?>">
			<input name="origLGAName" type="hidden" id="origLGAName" value="<php echo "Moshi District";?>">
			<input name="entrPerson" type="hidden" id="entrPerson" value="<php echo "Thadey William Msaki";?>">
			<input name="entyPersonTitle" type="hidden" id="entyPersonTitle" value="<php echo "HRO";?>">
			<input name="entrDate" type="hidden" id="entrDate" value="<php  echo "".date("Ymdhis");?>">
			<input name="stdInt" type="hidden" id="stdInt" value="<php echo"".$stdInt;?>">
              <input name="trlocregName" type="hidden" id="trlocregName" value="<php echo"".$trlocregName;?>">
              <input name="trloclgaName" type="hidden" id="trloclgaName" value="<php echo"".$trloclgaName;?>">
              <input name="trlocwardName" type="hidden" id="trlocwardName" value="<php echo"".$trlocwardName;?>">
              <input name="trlocvilMtaName" type="hidden" id="trlocvilMtaName" value="<php echo "".$trlocvilMtaName;?>">
			  <input name="trlochlName" type="hidden" id="trlochlName" value="<php echo "".$trlochlName;?>">
			   <input name="cName" type="hidden" id="cName" value="<php echo "".$cName;?>">
			   <input name="ctName" type="hidden" id="ctName" value="<php echo "".$ctName;?>">
			   <input name="pgName" type="hidden" id="pgName" value="<php echo "".$pgName;?>">
			   <input name="sf_name" type="hidden" id="sf_name" value="<php echo "".$sFund;?>">
			   <input name="tspName" type="hidden" id="tspName" value="php echo "".$tspName;?>">
			   </td>-->
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr class="fields"> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="registrationForm">
      </form>
      <!--<div id=web-folio-i><img src="images/1-kics.jpg" width="218" height="123"> </div>
	<div id=web-folio-ii><img src="images/2-pmoralgbeta.jpg" width="218" height="123"></div>
	<div id=web-folio-iii><img src="images/3-kilimanjarors.jpg" width="218" height="123"> </div>-->
    </div>
  </div>
  <!--<div id="i-footer">
		<!-- Footer start 
		<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" class="title6">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="small-txt">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="small-txt">&nbsp;</td>
          </tr>
    </table>
		<!-- Footer end 
  </div>
<!-- container end -->
</DIV>
</BODY>
</HTML>
