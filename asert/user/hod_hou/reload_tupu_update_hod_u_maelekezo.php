<?php if ($mlipajiID!="wengine"){?>
<SCRIPT language=JavaScript>
function reloadCat(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
//var val1=form.regID.options[form.regID.options.selectedIndex].value; 
//var val2=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
//var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&id=' + val_id;//+ '&wengine=' + val8 + '&kiambata=' + val9;
}

function reload(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
//var val2=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
//var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&id=' + val_id;// + '&wengine=' + val8 + '&kiambata=' + val9;
}

</script>
<?php if ($catID=="rs"){?>
<script>
function reloadusafiri(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
//var valLga=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
//var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&id=' + val_id;// + '&wengine=' + val8 + '&kiambata=' + val9;
}
</script>
<?php }elseif($catID=="lga"){?>
<script>
function reloadusafiri(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
var valLga=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
//var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&lgaID=' + valLga + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&id=' + val_id;// + '&wengine=' + val8 + '&kiambata=' + val9;
}
</script>
<?php };
}else{?>
<SCRIPT language=JavaScript>
function reloadCat(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
//var val1=form.regID.options[form.regID.options.selectedIndex].value; 
//var val2=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7+ '&wengine=' + val8 + '&id=' + val_id;// + '&kiambata=' + val9;
}

function reload(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
//var val2=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&wengine=' + val8 + '&id=' + val_id;// + '&kiambata=' + val9;
}

</script>
<?php if ($catID=="rs"){?>
<script>
function reloadusafiri(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
//var valLga=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&wengine=' + val8 + '&id=' + val_id;// + '&kiambata=' + val9;
}
</script>
<?php }elseif($catID=="lga"){?>
<script>
function reloadusafiri(form){
var valCat=form.catID.options[form.catID.options.selectedIndex].value;
var valReg=form.regID.options[form.regID.options.selectedIndex].value; 
var valLga=form.lgaID.options[form.lgaID.options.selectedIndex].value;
var val1=form.sDate.value;
var val2=form.eDate.value;
var val3=form.duration.value;
var val4=form.usafiriID.options[form.usafiriID.options.selectedIndex].value;
var val5=form.madhumuniID.options[form.madhumuniID.options.selectedIndex].value;
var val6=form.muhtasari.value;
var val7=form.mlipajiID.options[form.mlipajiID.options.selectedIndex].value;
var val8=form.wengine.value;
//var val9=form.kiambata.value;
var ipo="ipo";
var val_id=form.id.value;
self.location='maelekezo_list_update.php?tupu=' + ipo + '&catID=' + valCat + '&regID=' + valReg + '&lgaID=' + valLga + '&sDate=' + val1 + '&eDate=' + val2 + '&duration=' + val3 + '&usafiriID=' + val4 + '&madhumuniID=' + val5 + '&muhtasari=' + val6 + '&mlipajiID=' + val7 + '&wengine=' + val8 + '&id=' + val_id;// + '&kiambata=' + val9;
}
</script>
<?php };
};?>
