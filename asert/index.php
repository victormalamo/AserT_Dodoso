
<!DOCTYPE html>
<html class="restade" lang="en">
<head>
<title>AserT</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/spinner_full_page.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/coreui-docs.css" rel="stylesheet">
		<link href="css/coreui-icons.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/mnrt-resp-main.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" type="text/css" href="css/resp_form.css">
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/pandisha_faili_wateja.css">
		<link rel="stylesheet" type="text/css" href="css/letter_head.css">
		<link rel="stylesheet" href="css/font_merriweather.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/font_source_sans_pro.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/font_sansation.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/menu_dawati_la_mteja.css" type="text/css" media="all">
		<link href="css/font_mdi.css" rel="stylesheet" type="text/css" media="all"/>
		
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>
	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/angular_1_3_15.js"></script>

<link rel="stylesheet" href="css/ng_form_validation_style.css">

<script src="js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="js/select.js"></script>
<link rel="stylesheet" href="css/select.css">
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
		padding: 15px;
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
  background-color: #e6e6e6;
  background-image: none;
  border: 1px solid #fff;
  height: 45px;
  padding: 6px 12px;
  font-size:1rem;
  line-height: 1.5;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #e6e6e6!important;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
    filter: alpha(opacity=100);
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
@media (min-width:700px){.form-control{font-size:1.125rem}}
@media (min-width:1000px){.form-control{font-size:1.25rem}}
.btn_add_on{
  border-color: #fff;
  height: 45px;
  background-color: #d0a92c;
  border-left-color: #ffffff;
  color: #1f1516;
}
.btn_add_on:hover {
  color: #574712;
  background-color: #d0a92c;
  border-left-color: #ffffff;
}
.btn_add_on.disabled,
.btn_add_on[disabled],
fieldset[disabled] .btn_add_on {
  cursor: not-allowed;
  filter: alpha(opacity=100);
  opacity: 1;
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn_add_on.disabled,
fieldset[disabled] a.btn_add_on {
  pointer-events: none;
}
.confirmation_button.disabled,
.confirmation_button:disabled,
.confirmation_button[disabled],
fieldset[disabled] .confirmation_button {

	cursor: not-allowed;
	filter: alpha(opacity=100);
	opacity:1;
	color:#ffffff;
	background-color:transparent
}

.w3_light_green{color:#fff!important;background-color:#8bc34a!important}
.inafanyiwa_kazi{animation:fading 2s infinite}@keyframes fading{0%{opacity:0.4}50%{opacity:0.7}100%{opacity:0.4}}
.bado{opacity:0.4}
</style>
<!--script src="search_tools/jquery-1.10.2.min.js"></script-->

<link rel="stylesheet" href="user/accommodation_facilities/tafuta/st.css" />
<script src="user/accommodation_facilities/tafuta/jquery-ui.js"></script>
<link rel="stylesheet" href="user/accommodation_facilities/tafuta/jquery-ui.css">
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
			$.getJSON('user/accommodation_facilities/tafuta/tafuta.php?q='+value, function (data) {
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
<script type="text/javascript" src="user/accommodation_facilities/afcg_animation/js/animation_settings.js"></script>
<script type="text/javascript" src="user/accommodation_facilities/afcg_animation/js/background.cycle.js"></script>
</head>
<body ng-app="tuma_fuatilia_app" ng-controller="tuma_fuatilia_controller" class="ng-scope" style="background-color:#f5f5f5">
<!--php include('full_page_spinner.php');?>
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
<?php include('user/accommodation_facilities/afcgApp/mdau_home.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_mteja_menu.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_search.php');?>
<?php include('user/accommodation_facilities/afcgApp/mdau_tuma_fuatilia.php');?>
<?php include('user/accommodation_facilities/afcgApp/assessor_registration.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_ticketDetails.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_maelekezo.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_contacts.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_submit_confirmation_box.php');?>
<?php include('user/accommodation_facilities/afcgApp/modal_verification_box.php');?>
<?php include('funika_kurasa.php');?>

<script src="js/baka_pandisha_faili.js"></script>
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
<script src="user/accommodation_facilities/afcgApp/afcgApp.js"></script>
<!--controllers-->
<script src="user/accommodation_facilities/afcgApp/controllers/afcg_Ctrl.js"></script>
<script>
$(document).ready(function() {
	$('.one_char').on('input propertychange', function() {
		CharLimit(this, 1);
	});
});
/*function CharLimit(input, maxChar) {
	var len = $(input).val().length;
	if (len > maxChar) {
		$(input).val($(input).val().substring(0, maxChar));
	}
}*/

</script>
<script>
$(".focus_next_vn").bind("input propertychange", function() {
	var $this = $(this);
	setTimeout(function() {
		if ( $this.val().length >= parseInt($this.attr("maxlength"),10) )
			$this.next("input").focus();
	},0);
});
</script>
</body>
</html>
