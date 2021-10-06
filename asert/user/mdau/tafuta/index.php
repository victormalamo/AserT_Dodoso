<?php
require_once('../../../Connections/connmnrtsafari.php'); 
if(isset($_GET['q']) && $_GET['q']!="") :
    $data = mysqli_real_escape_string($conntscpME,$_GET['q']);
    $keyword =  trim(preg_replace('/\s+/',' ',$data));
    $sql=$conntscpME->query("SELECT distinct * FROM `demo_web_information` WHERE meta_title LIKE '%$keyword%' OR meta_description LIKE '%$keyword%' OR site_url LIKE '%$keyword%'");
?>
<?php endif; ?>
<?php
if(isset($_GET['id']) && $_GET['id']!="") :
    $id = $_GET['id'];
    $sql_details=$conntscpME->query("SELECT * FROM `demo_web_information` WHERE `id` = '$id'");
?>
<?php endif; ?>

<?php
function trimtext($data, $limit) {
    $arr = explode(" ", $data);
    $new_arr = array_slice($arr, 0, $limit);
    return implode(" ", $new_arr);
}

//$test = 'This is a very very very...';
//echo trimtext($test, 5);
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tafuta</title>
<link rel="icon" href="../../../images/favicon.ico" type="image/x-icon">
<link href="../../../css/font-awesome.css" rel="stylesheet">
<link href="../../../css/coreui-docs.css" rel="stylesheet">
<link href="../../../css/coreui-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../../css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="../../../css/letter_head.css">
<link rel="stylesheet" type="text/css" href="../../../css/w3.css">
<link rel="stylesheet" href="../../../bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../../css/font_merriweather.css" type="text/css" media="all">
<link rel="stylesheet" href="../../../css/font_source_sans_pro.css" type="text/css" media="all">
<link rel="stylesheet" href="../../../css/menu_dawati_la_mteja.css" type="text/css" media="all">
</head>
<body>
<div class="" style="width:100%; padding:15px 15px 12px 15px; border-bottom:1px solid #f1f1f1">
		<span>
		<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" onClick="window.location='../index.php'">
		<span class="rstdnavbar-toggler-icon_hamburger"></span>
		</button>
		</span>		
		<span class="pull-right">
		<!--button id="search_button" class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_search()">		
		<span class="rstdnavbar-toggler-icon_search"></span>
		</button>
		</span>
		<span class="pull-right search_dawati_text">
		<button class="rstdnavbar-toggler rstdsidebar-toggler" style="padding-right:0px" type="button" ng-click="show_search()">
		<span class="header__search">Tafuta</span>
		</button-->
		<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" onClick="window.location='../index.php'">
		<span class="rstdnavbar-toggler-icon_close"></span>
		</button>
		</span>
</div>
<div class="modal-body wrap_center_outer_search_2">
	<div class="wrap_center_inner_search_2">
	<div class="" style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-left:auto; margin-right:auto">
	<center>
		<div class="page-header__subtitle w3-text-black">JAMHURI YA MUUNGANO WA TANZANIA</div>
		<div class="page-header__subtitle w3-text-gray" style="margin:0px 0px 28px 0px;">Wizara 
		  ya Maliasili na Utalii</div>
		<div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div>
		<!--h1 class="page-header__subtitle w3-text-gray">Fomu ya Usajili</h1-->
		<span class="divider" style="margin-bottom:30px"> 
		<hr>
		<hr>
		</span> 
	</center>
	</div>
		  <div class="grid-wrapper">
		   
			<div class="search-bar legal"> 
				  <form id="search_form" action="index.php" method="GET">
					
					<input id="list_search" name="q" class="input" ng-model="tafuta_kwenye_dawati" autocomplete="off" required value="<?=@$keyword;?>" placeholder="Andika Unachotafuta" type="search">
					<button type="submit" class="search-bar__submit"><span class="search-bar__submit-ico"></span></button>
				  </form>
			  </div>
			  <div class="search_results">
			  <?php if(!isset($_GET['id']) && $_GET['id']=="") :?>
					<?php if(isset($sql) && count($sql) && ($sql->num_rows)) : ?>
						<div class="reslt_bar">                
						<?php foreach ($sql as $key => $search_data) : ?>
						<div class="search_title"><a target="_top" href='index.php?q=<?=@$keyword;?>&id=<?=$search_data['id'] ?>'><?=$search_data['meta_title'] ?></a></div>
						<!--?=$conntscpMEContent = str_ireplace($keyword,'<b>'.$keyword.'</b>',$search_data['site_url']); ?></br-->                       
						<div class="search_maelezo w3-justify"><?=$conntscpMEContent = str_ireplace($keyword,'<b>'.$keyword.'</b>',trimtext($search_data['meta_description'],50)); ?></div>
						<?php endforeach; ?>                
						</div>
					<?php else :?>						
						<p>Unachotafuta - <b><?=@$keyword;?></b> - hakipo!</p>						     
					<?php endif; ?>
				<?php endif; ?>
				</div>
				<?php if(isset($_GET['id']) && $_GET['id']!="") :?>
				<div class="search_results_details">
						<div class="reslt_bar">                
						<?php foreach ($sql_details as $key => $search_data) : ?>
						<div class="search_results_title"><?=$search_data['meta_title'] ?></div>
						<!--?=$search_data['site_url']; ?></br-->                       
						<div class="search_results_maelezo w3-justify"><?=$search_data['meta_description']; ?></div>
						<?php endforeach; ?>                
						</div>
				</div>
				<?php endif; ?>
				
			</div>			
	</div>
</div>

</body>
</html>



<script src="../../../js/jquery-1.11.1.min.js"></script>
<!--script src="jquery-1.10.2.min.js"></script-->
<script src="jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="st.css" />
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('keyup','#list_search',function(){   
        var value = $(this).val();
        $.getJSON('tafuta.php?q='+value, function (data) {
            var availableTags = data;
            $( "#list_search" ).autocomplete({
                source: availableTags,
                select: function(event, ui) {
                $(event.target).val(ui.item.value);
                $('#search_form').submit();
                return false;
            },
             });
        });
        
    });
});
</script>