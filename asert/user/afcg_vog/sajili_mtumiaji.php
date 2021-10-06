<?php
require_once('../../ruhusa.php');
require_once('../../update_zimebaki_siku.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Msimamizi</title>

<link href="../../css/font-awesome.css" rel="stylesheet">
<link href="../../css/coreui-docs.css" rel="stylesheet">
<link href="../../css/coreui-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/mnrt-resp-main.css">
<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css" />
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="../../css/w3.css">
<script src="../../js/jquery-1.11.1.min.js"></script>




<link rel="stylesheet" type="text/css" href="../../css/resp_form.css">

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

<style>
      .app-body {
        overflow-x: initial;
      }
	  
</style>
</head>
<body class="app header-fixed rstdsidebar-md-show rstdsidebar-fixed rstdbreadcrumb-fixed footer-fixed ng-scope" ng-app="msimamiziApp" ng-controller="watumiajiController" ng-init="fetchData()">

<header class="app-header rstdnavbar">
<button class="rstdnavbar-toggler rstdsidebar-toggler d-lg-noneRSTD mr-auto" type="button" data-toggle="rstdsidebar-show">
<span class="rstdnavbar-toggler-icon"></span>
</button>
<a class="rstdnavbar-brand d-lg-noneRSTD">
<img src="../../images/logo-small.png" height="40" width="40">
</a>
<ul class="rstdnav rstdnavbar-nav mr-auto d-md-down-noneRSTD">
<li class="rstdnav-item px-3">
<a class="rstdnav-link" href="#">Search</a>
</li>
</ul>
<ul class="rstdnav rstdnavbar-nav d-md-down-noneRSTD">
<li class="rstdnav-item px-3">
<a class="rstdnav-link" href="#">Settings</a>
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


<nav aria-label="rstdbreadcrumb">
  <ol class="rstdbreadcrumb">
    <li class="rstdbreadcrumb-item"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Mwanzo</a></li>
	<li class="rstdbreadcrumb-item active">Watumiaji</li>
	<li class="ml-auto">wajibika</li>
  </ol>
</nav>


<div class="container-fluid" style="float:left; margin-top:9px">

<div class="row">
<div class="col-12  col-xl-11">
<div class="card rstdrounded-top-only bg-facebook border-facebook font-sm" style="margin-bottom:-.25rem; z-index:1">
<div class="card-body"> 
		<div align="left" class="sajili">
        <button type="button" name="add_button" ng-click="addData()" class="rstdbtn rstdbtn-outline-light" style="min-width:50px">Sajili</button><span class="w3-text-white">{{successMessage}}</span>
		<button type="button" name="expand_button" class="rstdbtn rstdbtn-outline-light pull-right" style="min-width:50px"><span class="glyphicon glyphicon-resize-full"></span></button>
        </div>
</div>
</div>
<div class="card w3-border-blue w3-blue font-sm"> 
<div class="card-body"> 
	
    
      <div class="table-responsive" style="overflow-x: unset;"> 
        <table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered border-mdblue">
          <thead>
            <tr style="height:35px"> 
              <th style="vertical-align:middle" class="border-mdblue">JINA</th>
              <th style="vertical-align:middle" class="border-mdblue">CHEO</th>
              <th style="vertical-align:middle" class="border-mdblue">IDARA_KITENGO</th>
              <th style="vertical-align:middle" class="border-mdblue">SEHEMU</th>
              <th data-orderable="false" style="vertical-align:middle" class="border-mdblue"></th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="mtumiaji in watumiajiData"> 
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.f_name}} {{mtumiaji.m_name | limitTo: 1}}. {{mtumiaji.l_name}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.jina_la_cheo}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.div_unit}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.section_name}}</td>
              <td style="vertical-align:middle" align="right" class="border-mdblue">
			  <button type="button" ng-click="tazamaMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs w3-border-blue"><span class="glyphicon glyphicon-eye-open"></span></button>
			  <button type="button" ng-click="editMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs w3-border-blue"><span class="glyphicon glyphicon-edit"></span></button>
              <button type="button" ng-click="deleteMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-danger btn-xs w3-border-blue"><span class="glyphicon glyphicon-remove"></span></button>
			  </td>
            </tr>
          </tbody>
        </table>
      </div>  
	
	
	
	
</div>	
</div>	
</div>	
</div>	
    


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

<script src="../../js/perfect-scrollbar.js"></script>
<script src="../../js/coreui.js"></script>
<script src="../../js/w3schools_footer.js"></script>
<script src="../../js/ngscrollbar.js"></script>
<!-- mtumiajimodal() -->
<?php include('msimamiziApp/modal_mtumiaji.php');?>	
<!--msimamiziApp-->
<script src="msimamiziApp/msimamiziApp.js"></script>
<!--controllers-->
<script src="msimamiziApp/controllers/watumiaji_Ctrl.js"></script>
</body></html>