<?php 
require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
//include('status.php');
?>
<!DOCTYPE html>
<html ng-app="msimamiziApp" ng-controller="watumiajiController" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Msimamizi - Dawati</title>

<link href="../../css/spinner_full_page.css" rel="stylesheet">
<link href="../../css/font_krona_one.css" rel="stylesheet">
<link href="../../css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/font_merriweather.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/font_source_sans_pro.css" type="text/css" media="all">
<link href="../../css/coreui-docs.css" rel="stylesheet">
<link href="../../css/coreui-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/mnrt-resp-main.css">
<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css" />
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="../../css/w3.css">
<script src="../../js/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/resp_form.css">
<link rel="stylesheet" type="text/css" href="../../css/letter_head.css">

<script src="../../js/angular_1_3_15.js"></script>
<script src="../../js/jquery_002.js"></script>
<script src="../../js/angular-datatables.js"></script>
<script src="../../js/bootstrap.js"></script>
<link rel="stylesheet" href="../../css/datatables.css">
<link rel="stylesheet" href="../../css/ng_form_validation_style.css">

<script src="../../js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="../../js/select.js"></script>
<link rel="stylesheet" href="../../css/select.css">
<style type="text/css" media="print">
 .hideMeInPrint { display: none; }
</style>
<style>
      .app-body {
        overflow-x: initial;
      }
</style>

<style>
.modal-content {
  border: 0px!important;
  border-radius: 0px!important;

}
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
	.modal.left.fade .modal-dialog{
		left: 0%;
		-webkit-transition: opacity 0.2s linear, left 0.2s ease-out;
		   -moz-transition: opacity 0.2s linear, left 0.2s ease-out;
		     -o-transition: opacity 0.2s linear, left 0.2s ease-out;
		        transition: opacity 0.2s linear, left 0.2s ease-out;
	}
	
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
	body.modal-open {
	height: 100vh;
	overflow-y: hidden;
	padding-right: 15px; /*width of the hidden scrollbar*/
	position: fixed; /*for safari*/
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
</head>
<body class="app header-fixed rstdsidebar-md-show rstdsidebar-fixed rstdbreadcrumb-fixed footer-fixed ng-scope">
<?php include('../../full_page_spinner.php');?>
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
</script>
<header class="app-header rstdnavbar">
<button class="rstdnavbar-toggler rstdsidebar-toggler d-lg-noneRSTD mr-auto" type="button" data-toggle="rstdsidebar-show">
<span class="rstdnavbar-toggler-icon"></span>
</button>
<div class="wrap-rstdnavbar-brand">
<a class="rstdnavbar-brand d-lg-noneRSTD">
<img src="../../images/logo-small.png" height="40" width="40">
</a>
</div>
<ul class="rstdnav rstdnavbar-nav d-lg-noneRSTD">
<li class="rstdnav-item px-3">
<a class="rstdnav-link" href="<?php echo $logoutAction; ?>">Logout</a>
</li>
</ul>
<ul class="rstdnav rstdnavbar-nav mr-auto d-md-down-noneRSTD">
<li class="rstdnav-item px-3">
<!--a class="rstdnav-link" href="#">Search</a-->
</li>
</ul>
<ul class="rstdnav rstdnavbar-nav d-md-down-noneRSTD">
<li class="rstdnav-item px-3">
<!--a class="rstdnav-link" href="#">Settings</a-->
</li>
<li class="rstdnav-item px-3">
<a class="rstdnav-link" href="<?php echo $logoutAction; ?>">Logout</a>
</li>
</ul>
</header>


<div class="app-body">

<!--sidebar menu-->
<?php include('msimamiziApp/msimamizi_rstdsidebar_menu.php');?>
<!--end sidebar menu-->

<div class="rstd-home-bg position-absolute position-fixed"></div>

<main class="main">



<!--nav aria-label="rstdbreadcrumb">
  <ol class="rstdbreadcrumb">
    <li class="rstdbreadcrumb-item"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Mwanzo</li>
    <li class="ml-auto">wajibika</li>
  </ol>
</nav-->


<div class="container-fluid" style="float:left; margin-top:9px">

<!--div class="bg-facebook alert d-block d-text-md-center text-white py-3">
<strong><php echo $_SESSION['f_name'];?></strong>&nbsp;|&nbsp;Dawati
<!--span class="float-md-right" ng-show="onesha_password_mabadiliko">
Tafadhali
<span class="rstdbtn btn-sm rstdbtn-danger btn-rounded-x" ng-click="open_badilinywilaModal()">Badili Nywila</span>
</span>
</div-->

<div class="w3-row rstdhome-container"> 
    <div class="w3-col l6 m6 s12" style="padding: 0px 4px 0px 0px"> 
      <div class="top10 muhtasari-ico-bg"> 
        <div class="top10-title">TAARIFA</div>
        <div class="top10-text">
		Report 1
		<!--span class="rstdbtn btn-sm rstdbtn-outline-light btn-rounded-x" ng-click="open_badilinywilaModal()">Badili Nywila</span><br-->
        </div>
      </div>
    </div>
    <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
      <div class="top10 muhtasari-ico-bg"> 
        <div class="top10-title">TAARIFA</div>
        <div class="top10-text">
		Report 2
        </div>
      </div>
    </div>
    <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
      <div class="top10 muhtasari-ico-bg"> 
        <div class="top10-title">TAARIFA</div>
        <div class="top10-text">
		Report 3
        </div>
      </div>
    </div>
    <div class="w3-col l6 m6 s12 top10-col-mipaka"> 
      <div class="top10 muhtasari-ico-bg"> 
        <div class="top10-title">TAARIFA</div>
        <div class="top10-text">
		Report 4
		</div>
      </div>
    </div>
</div>

<?php include('msimamiziApp/modal_mapya.php');?>
<?php include('msimamiziApp/modal_tayari_kujibiwa.php');?>
<?php include('msimamiziApp/modal_mdau_mrejesho.php');?>
<?php include('msimamiziApp/modal_ticketDetails.php');?>

</div>

</main>

</div>

<footer class="app-footer">
<div>
<span class="w3-opacity">© 2020 Maliasili</span>
<!--a href="">Maliasili</a-->
</div>
<div class="ml-auto w3-opacity">
Toleo Namba 1.0
</div>
</footer>
<!--
<script src="../../js/perfect-scrollbar.js"></script>
<script src="../../js/coreui.js"></script>
<script src="../../js/ngscrollbar.js"></script>
<php include('msimamiziApp/modal_yanayoingia.php');?-->
<script src="../../js/perfect-scrollbar.js"></script>
<script src="../../js/coreui.js"></script>
<script src="../../js/ngscrollbar.js"></script>
<!--app-->
<script src="msimamiziApp/msimamiziApp.js"></script>
<!--controllers-->
<script src="msimamiziApp/controllers/watumiaji_Ctrl.js"></script>
<!--php include('msimamiziApp/modal_mtumiaji.php');?>
</body></html-->
</body></html>