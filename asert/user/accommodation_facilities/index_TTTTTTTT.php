
<!DOCTYPE html>
<html class="restade" lang="en">
<head>
<title>AserT</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
		<link href="../../css/spinner_full_page.css" rel="stylesheet">
		<link href="../../css/font-awesome.css" rel="stylesheet">
		<link href="../../css/coreui-docs.css" rel="stylesheet">
		<link href="../../css/coreui-icons.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../css/mnrt-resp-main.css">
		<link rel="stylesheet" type="text/css" href="../../css/w3.css">
		<link rel="stylesheet" type="text/css" href="../../css/resp_form.css">
		<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../../css/pandisha_faili_wateja.css">
		<link rel="stylesheet" type="text/css" href="../../css/letter_head.css">
		<link rel="stylesheet" href="../../css/font_merriweather.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/font_source_sans_pro.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/font_sansation.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/menu_dawati_la_mteja.css" type="text/css" media="all">
		<link href="../../css/font_mdi.css" rel="stylesheet" type="text/css" media="all"/>
		
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>
	
<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../js/angular_1_3_15.js"></script>

<link rel="stylesheet" href="../../css/ng_form_validation_style.css">

<script src="../../js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="../../js/select.js"></script>
<link rel="stylesheet" href="../../css/select.css">
<style type="text/css" media="print">
.hideMeInPrint { display: none; }

.modal-content {
  border: 0px!important;
  border-radius: 0px!important;

}
</style>

<style>
.modal.modal_full_page_spinner .modal-dialog {
		position: fixed;
		margin: auto;
		width: 100%;
		height: 100%;
		border-radius:8px!important;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
}
.modal.modal_full_page_spinner .modal-content {
		height: 100%;
		overflow-y: hidden;

}

	/*#success_message{ display: none;}*/
	
	.modal.left .modal-dialog {
		position: fixed;
		margin: auto;
		width: 100%;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.left .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	/*.modal.left.fade .modal-dialog{
		left: 0%;
		-webkit-transition: opacity 0.0s linear, left 0.0s ease-out;
		   -moz-transition: opacity 0.0s linear, left 0.0s ease-out;
		     -o-transition: opacity 0.0s linear, left 0.0s ease-out;
		        transition: opacity 0.0s linear, left 0.0s ease-out;
	}*/
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}
	
/* ----- v CAN BE DELETED v ----- */

.has-error
		{
			border-color:#cc0000;
			background-color:#ffff99;
		}
		
.dawati-bg {
/*height:100vh; width:calc(100vw - 200px); margin-left:200px; z-index:-1; */
  background: url(tembo.jpg) no-repeat center center fixed;
  /*opacity:0.50;*/
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; /*font-family: 'Open Sans', sans-serif;*/
}

.form-control {
  background-color: #fff;
  background-image: none;
  border: 1px solid #fff;
  height: 45px;
  padding: 6px 12px;
  font-size:1rem;
  line-height: 1.5;
}
@media (min-width:700px){.form-control{font-size:1.125rem}}
@media (min-width:1000px){.form-control{font-size:1.25rem}}
.btn_add_on{
  border-color: #fff;
  border-left-color: #ccc;
  height: 45px;
  background-color: #fff;
  color: #333;
}
.btn_add_on:hover {
  color: #fff;
  background-color: #f0ad4e;
  border-left-color: #fff;
}

.w3_light_green{color:#fff!important;background-color:#8bc34a!important}
.inafanyiwa_kazi{animation:fading 2s infinite}@keyframes fading{0%{opacity:0.4}50%{opacity:0.7}100%{opacity:0.4}}
.bado{opacity:0.4}
</style>
<!--script src="search_tools/jquery-1.10.2.min.js"></script-->

<link rel="stylesheet" href="tafuta/st.css" />
<script src="tafuta/jquery-ui.js"></script>
<link rel="stylesheet" href="tafuta/jquery-ui.css">
<script>

$(document).ready(function(){
	$("#mteja_menu_panel").on('shown.bs.modal', function(){
		$('#search_panel').modal('hide');
		$('#maelekezo_panel').modal('hide');
		$('#tuma_panel').modal('hide');
    });
    $("#search_panel").on('shown.bs.modal', function(){
        $(this).find('#list_search').focus();
		$('#mteja_menu_panel').modal('hide');
			
			$("#list_search").keyup(function(){ 
			var value = $(this).val();
			$.getJSON('tafuta/tafuta.php?q='+value, function (data) {
				var availableTags = data;
				$("#list_search" ).autocomplete({
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
	$("#maelekezo_panel").on('shown.bs.modal', function(){
		$('#mteja_menu_panel').modal('hide');
    });
	$("#tuma_panel").on('shown.bs.modal', function(){
		$('#mteja_menu_panel').modal('hide');
    });

	//$('#mteja_menu').click(function() {		
		//$('#search_panel').modal('hide');
		//$('#mteja_menu_panel').modal('show');
   // });
});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!--Slideshow-->
<script type="text/javascript" src="afcg_animation/js/animation_settings.js"></script>
<script type="text/javascript" src="afcg_animation/js/background.cycle.js"></script>
</head>
<body ng-app="tuma_fuatilia_app" ng-controller="tuma_fuatilia_controller" class="ng-scope" style="background-color:#f5f5f5">
<!--php include('../../full_page_spinner.php');?>
<script>
     	document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
				$('#full_page_spinner_panel').modal('show');
               // document.querySelector("body").style.visibility = "hidden"; 
            } else { 
			$('#full_page_spinner_panel').modal('hide');
               // document.querySelector("body").style.visibility = "visible"; 
            } 
        };
</script-->
<?php include('afcgApp/mdau_home.php');?>
<?php include('afcgApp/modal_mteja_menu.php');?>
<?php include('afcgApp/modal_search.php');?>
<?php include('afcgApp/mdau_tuma_fuatilia.php');?>
<?php include('afcgApp/modal_ticketDetails.php');?>
<?php include('afcgApp/modal_maelekezo.php');?>
<?php include('afcgApp/modal_contacts.php');?>
<?php include('afcgApp/modal_submit_confirmation_box.php');?>
<?php include('../../funika_kurasa.php');?>

<script src="../../js/baka_pandisha_faili.js"></script>
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
<script>
<!--Dawati Mobile Menu-->
$(function() {
	var menu_dawati_mobile = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		
		var links = this.el.find('.link');
		
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	menu_dawati_mobile.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var menu_dawati_mobile = new menu_dawati_mobile($('#menu_dawati_mobile'), false);
});
</script>
<!--app-->
<script src="afcgApp/afcgApp.js"></script>
<!--controllers-->
<script src="afcgApp/controllers/afcg_Ctrl.js"></script>

</body>
</html>
