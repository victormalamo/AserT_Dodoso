<?php
$page=$_POST['page'];
if($page=="yanayoingia_list_update")
{
	
	if($catID == ''){ $catID = "tupu";}; if($regID == ''){ $regID="tupu";}; if(($catID == "lga") && ($lgaID=='')){ $lgaID="tupu";}; if($sDate == ''){ $sDate="tupu";}; if($eDate == ''){ $eDate="tupu";}; if($usafiriID == ''){ $usafiriID="tupu";}; if($madhumuniID == ''){ $madhumuniID="tupu";}; if($muhtasari == ''){ $muhtasari="tupu";}; if($mlipajiID == ''){ $mlipajiID="tupu";}; if(($mlipajiID == 'wengine') && ($wengine =='')){ $wengine="tupu";}; 
	
	if (($catID == "tupu") || ($regID == "tupu") || ($lgaID == "tupu") || ($sDate == "tupu") || ($eDate == "tupu") || ($usafiriID == "tupu") || ($madhumuniID == "tupu") || ($muhtasari == "tupu") || ($mlipajiID == "tupu") || ($wengine == "tupu")) 
	{ 
	header("Location: yanayoingia_list_update.php?c_tupu=ipo&id=$id&catID=$catID&regID=$regID&lgaID=$lgaID&sDate=$sDate&eDate=$eDate&duration=$duration&usafiriID=$usafiriID&madhumuniID=$madhumuniID&muhtasari=$muhtasari&mlipajiID=$mlipajiID&wengine=$wengine"); die();
	};

}
;?>