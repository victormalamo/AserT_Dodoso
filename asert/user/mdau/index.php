<!DOCTYPE html>
<html class="restade" lang="en">
<head>
<title>Dawati la Mteja</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
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
		<link rel="stylesheet" href="../../css/menu_dawati_la_mteja.css" type="text/css" media="all">
		
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
</head>
<body ng-app="tuma_fuatilia_app" ng-controller="tuma_fuatilia_controller" class="ng-scope">
<?php include('mdau_home.php');?>
<?php include('modal_mteja_menu.php');?>
<?php include('modal_search.php');?>
<?php include('mdau_tuma_fuatilia.php');?>
<?php include('modal_ticketDetails.php');?>
<?php include('modal_maelekezo.php');?>

<script>
var app = angular.module('tuma_fuatilia_app', ['ngSanitize', 'ui.select',]);

app.factory('focus', function($timeout, $window) {
    return function(id) {
      $timeout(function() {
        var element = $window.document.getElementById(id);
        if(element)
          element.focus();
      });
    };
});
app.directive('eventFocus', function(focus) {
    return function(scope, elem, attr) {
      elem.on(attr.eventFocus, function() {
        focus(attr.eventFocusId);
      });

      scope.$on('$destroy', function() {
        elem.off(attr.eventFocus);
      });
    };
});

app.filter('propsFilter', function() {
  return function(items, props) {
	var out = [];

	if (angular.isArray(items)) {
	  items.forEach(function(item) {
		var itemMatches = false;

		var keys = Object.keys(props);
		for (var i = 0; i < keys.length; i++) {
		  var prop = keys[i];
		  var text = props[prop].toLowerCase();
		  if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
			itemMatches = true;
			break;
		  }
		}

		if (itemMatches) {
		  out.push(item);
		}
	  });
	} else {
	  // Let the output be the input untouched
	  out = items;
	}

	return out;
  }
});

app.controller('tuma_fuatilia_controller', function($scope, $http, focus){

	$scope.success = false;
	$scope.error = false;
	$scope.connection_error = false;
	$scope.status_error = false;
	
	$scope.fuatilia = false;
	$scope.check_status = false;
	$scope.results_status = false;
	
	$scope.inafanyiwa_kazi_mapokezi = false;
	$scope.bado_mapokezi = true;
	$scope.inafanyiwa_kazi_idara = false;
	$scope.bado_idara = true;
	$scope.inafanyiwa_kazi_km = false;
	$scope.bado_km = true;
	$scope.inafanyiwa_kazi_mrejesho = false;
	$scope.bado_mrejesho = true;
	$scope.disable_tazama_majibu = true;
	
	$scope.close_errorMessage = function(){
		$scope.error = false;
	};
	$scope.close_connection_errorMessage = function(){
		$scope.connection_error = false;
	};	
	$scope.close_status_errorMessage = function(){
		$scope.status_error = false;
	};
	$scope.show_maelekezo = function(){
		var modal_popup = angular.element('#maelekezo_panel');
		modal_popup.modal('show');
	};
	$scope.close_maelekezo = function(){
		var modal_popup = angular.element('#maelekezo_panel');
		modal_popup.modal('hide');
	};
	$scope.show_mteja_menu = function(){
		var modal_popup = angular.element('#mteja_menu_panel');
		modal_popup.modal('show');
		//$scope.close_search();
	};
	$scope.close_mteja_menu = function(){
		var modal_popup = angular.element('#mteja_menu_panel');
		modal_popup.modal('hide');
	};
	$scope.show_search = function(){
		var modal_popup = angular.element('#search_panel');
		modal_popup.modal('show');
		//$scope.close_mteja_menu();
	};
	$scope.close_search = function(){
		var modal_popup = angular.element('#search_panel');
		modal_popup.modal('hide');
	};
	$scope.showFuatilia_home = function(){
		$scope.fuatilia = true;
		//$scope.success = false;
		$scope.check_status = true;
		$scope.results_status = false
		//$scope.futa_requestForm();
		$scope.futa_wateja_fuatilia_form();
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('show');		
	};
	$scope.showFuatilia = function(){
		$scope.fuatilia = true;		
		$scope.check_status = true;	
		$scope.results_status = false;
	};
	$scope.showTuma = function(){
		$scope.fuatilia = false;
		$scope.success = false;
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('show');
	};
	$scope.closeTuma = function(){
		//$scope.success = false;
		//////////////$scope.futa_requestForm();
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('hide');
	};
	
	 $scope.futa_requestForm = function(){
	 		$scope.kiambata_error = false;								
			$scope.connection_error = false;
			$scope.error = false;
			$scope.status_error = false;			
			//$scope.check_status = false;
			//$scope.results_status = false;
			/////////$scope.fuatilia = false;
			//$scope.success = false;
			$scope.disable_tazama_majibu = true;
			$scope.majina_kamili = ''; 
			$scope.jinsia.selected = undefined;
			$scope.barua_pepe = '';
			$scope.simu = '';  
			$scope.nchi.selected = undefined;
			$scope.mikoa.selected = undefined;
			$scope.halmashauri.selected = undefined;
			$scope.taasisi = '';
			$scope.kichwa_cha_maelezo = '';
			$scope.maelezo = '';
			$scope.ticket_id = '';
			$scope.simu_iliyosajiliwa = '';
			//$scope.form = {};
			//$scope.wateja_request_form.$setPristine(); 
			$scope.wateja_request_form.$setUntouched();
			$scope.wateja_fuatilia_form.$setUntouched();
			document.wateja_request_form.kiambata.value = '';
			document.getElementById('kiambata_label').innerHTML = '';
	  };
	  
	  $scope.jinsia = {};
	  $scope.loadJinsia = function(){
				$http.get('jinsiaAPI.php').success(function(data){
				$scope.jinsiaData = data;
				});
	  };
	  $scope.safishaJinsia = function() {
			$scope.jinsia.selected = undefined;
			//$scope.section.selected = undefined;
			//$scope.idara.placeholder = 'Idara........';
			//$scope.idara.selected.div_unit_kirefu = 'Idara..';
			//$scope.idara.selected.div_unit_ID = '';
			//$scope.section.placeholder = 'Section..';
			//$scope.section.selected.section_name = 'Section..';
			//$scope.section.selected.section_ID = '999999';	
		};
		
	  $scope.nchi = {};
	  $scope.loadNchi = function(){
				$http.get('nchiAPI.php').success(function(data){
				$scope.nchiData = data;
				});
	  };
	  $scope.safishaNchi = function() {
			$scope.nchi.selected = undefined;	
			$scope.safishaMikoa();
	  };
	  
	  $scope.enable_mikoa = function() {
	  	$scope.mikoa_disabled = false;
	  };	  
	  $scope.disable_mikoa = function() {
	  	$scope.mikoa_disabled = true;
	  };
	  $scope.mikoa = {};
	  $scope.loadMikoa = function(){		  
		  //$scope.section.placeholder = 'Section..';
		  //$scope.section.selected.section_name = 'Section..';
		  //$scope.section.selected.section_ID = '999999';			
		  //$scope.section.selected = undefined;		  
		  if($scope.nchi.selected.country_code == '255' ) {
		  	$scope.enable_mikoa();
			}else{
			$scope.safishaMikoa();
			$scope.disable_mikoa();
			};
		  $http.post("mikoaAPI.php", {'country_code':$scope.nchi.selected.country_code})
		   .success(function(data){ 
				$scope.mikoaData = data;		
		   });
		};		
		$scope.safishaMikoa = function() {
			$scope.mikoa.selected = undefined;
			$scope.safishaHalmashauri();
			
		};		
		$scope.halmashauri = {};
		$scope.loadHalmashauri = function(){
		$scope.safishaHalmashauri();
		  $http.post("halmashauriAPI.php", {'country_code':$scope.mikoa.selected.country_code, 'regID':$scope.mikoa.selected.regID})
		   .success(function(data){ 
				$scope.halmashauriData = data;		
		   });
		};
		
		$scope.safishaHalmashauri = function() {
			$scope.halmashauri.selected = undefined;
		};
		
		$scope.safisha_kiambata = function() {
			document.wateja_request_form.kiambata.value = '';
			document.getElementById('kiambata_label').innerHTML = '';
		};
	
	
	$scope.form_data = {};
	$scope.hajarudi_wateja_request_form = false;
	$scope.submit_wateja_request_form = function(){
		$scope.hajarudi_wateja_request_form = true;
		if($scope.nchi.selected.country_code != '255' ) {
				if($scope.mikoa.selected == undefined ){ $scope.mikoa.selected = []; }
				if($scope.halmashauri.selected == undefined ){ $scope.halmashauri.selected = []; }
		}
		var kiambata = document.wateja_request_form.kiambata.value;
		if(kiambata.length > 0){				
				var fd = new FormData();
				var files = document.getElementById('kiambata').files[0];				
				fd.append('kiambata',files);

						$http({
							method:"POST",
							url:"insert.php",
							data:{ 
							'majina_kamili':$scope.majina_kamili,
							'jinsia':$scope.jinsia.selected.jinsia,
							'barua_pepe':$scope.barua_pepe,
							'simu':$scope.simu,  
							'nchi':$scope.nchi.selected.country_name,
							'mkoa':$scope.mikoa.selected.regNam,
							'halmashauri':$scope.halmashauri.selected.lgaNam, 
							'taasisi':$scope.taasisi,
							'kichwa_cha_maelezo':$scope.kichwa_cha_maelezo,
							'maelezo':$scope.maelezo,
							'action':'insert_new_request', 'kuna_file':'ndio'
							}
						}).success(function(data){
						if(data.error != '')
						{
							$scope.success = false;
							$scope.connection_error = false;
							$scope.error = true;
							$scope.errorMessage = data.error;
							$scope.hajarudi_wateja_request_form = false;
						}
						else if(data.connection_error == 'tatizo')
						{
							$scope.success = false;
							$scope.connection_error = true;
							$scope.error = false;
							$scope.connection_errorMessage = 'Kuna tatizo, tafadhali jaribu tena!';
							$scope.hajarudi_wateja_request_form = false;
						}
						else
						{
							
							//Tuma file
								$http({
								method:"POST",
								url:"insert_file.php",
								data: fd,
								//transformRequest: angular.identity,
								headers: {'Content-Type': undefined},
								}).success(function(data){
								$scope.hajarudi_wateja_request_form = false;
								if(data.kiambata_error != '')
								{
									//$scope.success = false;
									//$scope.connection_error = false;
									//$scope.error = false;
									$scope.kiambata_error = true;
									$scope.kiambata_errorMessage = data.kiambata_error;
								}
								else if(data.connection_error == 'tatizo_update_file')
								{
								//$scope.success = false;
								$scope.connection_error = true;
								//$scope.error = false;
								$scope.connection_errorMessage = 'Kuna tatizo kwenye jina la faili!';
								}else
								{
								$scope.kiambata_error = false;								
								$scope.connection_error = false;
								$scope.error = false;
								$scope.form_data = {};
								$scope.futa_requestForm();
								$scope.success = true;					
								$scope.ticket_number = data.ticket_number;			
								//$scope.closeTuma();									
								}
								});
							
						}
						});		
				
		
		}else{
		
				$http({
					method:"POST",
					url:"insert.php",
					data:{
					'majina_kamili':$scope.majina_kamili,
					'jinsia':$scope.jinsia.selected.jinsia,
					'barua_pepe':$scope.barua_pepe,
					'simu':$scope.simu,  
					'nchi':$scope.nchi.selected.country_name,
					'mkoa':$scope.mikoa.selected.regNam,
					'halmashauri':$scope.halmashauri.selected.lgaNam, 
					'taasisi':$scope.taasisi,
					'kichwa_cha_maelezo':$scope.kichwa_cha_maelezo,
					'maelezo':$scope.maelezo,
					'action':'insert_new_request'
					}
				}).success(function(data){
					$scope.hajarudi_wateja_request_form = false;
					if(data.error != '')
					{
						$scope.success = false;
						$scope.connection_error = false;
						$scope.error = true;
						$scope.errorMessage = data.error;
					}
					else if(data.connection_error == 'tatizo')
					{
						$scope.success = false;
						$scope.connection_error = true;
						$scope.error = false;
						$scope.connection_errorMessage = 'Kuna tatizo, tafadhali jaribu tena!';
					}
					else
					{
						$scope.kiambata_error = false;								
						$scope.connection_error = false;
						$scope.error = false;
						$scope.form_data = {};
						$scope.futa_requestForm();
						$scope.success = true;					
						$scope.ticket_number = data.ticket_number;			
						//$scope.closeTuma();
					}
				});		
		
		}
	
	};

	
	$scope.hajarudi_wateja_fuatilia_form = false;
	$scope.submit_wateja_fuatilia_form = function(){
	$scope.hajarudi_wateja_fuatilia_form = true;
		$http({
				method:"POST",
				url:"fuatilia_status.php",
				data:{ 
				'ticket_id':$scope.ticket_id,
				'simu_iliyosajiliwa':$scope.simu_iliyosajiliwa
				}
			}).success(function(data){			
			$scope.hajarudi_wateja_fuatilia_form = false;
			if(data.status_error != '')
			{
				$scope.status_error = true;
				$scope.status_errorMessage = data.status_error;
			}
			else
			{
				if(data.general_status == 'mrejesho_mdau')
				{				
				//$scope.results_status = false;
				$scope.ticketDetails($scope.ticket_id);
				//$scope.closeTuma();				
				}else
				{
				$scope.status_error = false;
				$scope.check_status = false;
				$scope.results_status = true;
				}
				if(data.general_status == 'mapya')
				{
					$scope.inafanyiwa_kazi_mapokezi = true;
					$scope.bado_mapokezi = false;
					
					$scope.inafanyiwa_kazi_idara = false;
					$scope.bado_idara = true;
					$scope.inafanyiwa_kazi_km = false;
					$scope.bado_km = true;
					$scope.inafanyiwa_kazi_mrejesho = false;
					$scope.bado_mrejesho = true;
				}else if(data.general_status == 'yamepokelewa_mapokezi')
				{
					$scope.inafanyiwa_kazi_mapokezi = false;
					$scope.bado_mapokezi = false;
					$scope.inafanyiwa_kazi_idara = true;
					$scope.bado_idara = false;
					
					$scope.inafanyiwa_kazi_km = false;
					$scope.bado_km = true;
					$scope.inafanyiwa_kazi_mrejesho = false;
					$scope.bado_mrejesho = true;
				}else if(data.general_status == 'yamefanyiwa_kazi_idarani')
				{
				
					$scope.inafanyiwa_kazi_mapokezi = false;
					$scope.bado_mapokezi = false;
					$scope.inafanyiwa_kazi_idara = false;
					$scope.bado_idara = false;					
					$scope.inafanyiwa_kazi_km = true;
					$scope.bado_km = false;
					
					$scope.inafanyiwa_kazi_mrejesho = false;
					$scope.bado_mrejesho = true;
				
				}else if(data.general_status == 'yamefanyiwa_kazi_km')
				{
				
					$scope.inafanyiwa_kazi_mapokezi = false;
					$scope.bado_mapokezi = false;
					$scope.inafanyiwa_kazi_idara = false;
					$scope.bado_idara = false;					
					$scope.inafanyiwa_kazi_km = false;
					$scope.bado_km = false;					
					$scope.inafanyiwa_kazi_mrejesho = true;
					$scope.bado_mrejesho = false;
				
				}else if(data.general_status == 'yamejibiwa_mapokezi')
				{
				
					$scope.inafanyiwa_kazi_mapokezi = false;
					$scope.bado_mapokezi = false;
					$scope.inafanyiwa_kazi_idara = false;
					$scope.bado_idara = false;					
					$scope.inafanyiwa_kazi_km = false;
					$scope.bado_km = false;					
					$scope.inafanyiwa_kazi_mrejesho = false;
					$scope.bado_mrejesho = false;
					$scope.disable_tazama_majibu = false;
				
				}
			}
		});		
	};
	$scope.futa_wateja_fuatilia_form = function(){
	 		$scope.ticket_id = '';
			$scope.simu_iliyosajiliwa = '';
			//$scope.form = {};
			//$scope.wateja_request_form.$setPristine(); 
			$scope.wateja_fuatilia_form.$setUntouched();
			$scope.wateja_fuatilia_form.$setUntouched();
	  };
	$scope.close_status = function(){
		$scope.futa_wateja_fuatilia_form();
		$scope.results_status = false;
		$scope.check_status = true;
	};
	
	//TAZAMA MAJIBU

	$scope.hajarudi_tazama_majibu = false;
	$scope.ticketDetails = function(ticket_id){
	$scope.hajarudi_tazama_majibu = true;
	$http({
		method:"POST",
		url:"fetch_ticket.php",
		data:{'ticket_id':ticket_id}
	}).success(function(data){
		$scope.hajarudi_tazama_majibu = false;
		//$scope.idara.selected = data;
		$scope.ticket_id = ticket_id;
		$scope.tarehe_kutoka_kwa_mteja = data.tarehe_kutoka_kwa_mteja;
		//$scope.majina_kamili = data.majina_kamili;
		//$scope.jinsia = data.jinsia;
		//$scope.barua_pepe = data.barua_pepe;
		//$scope.simu = data.simu;
		//$scope.nchi = data.nchi;
		//$scope.mkoa = data.mkoa;
		//$scope.halmashauri = data.halmashauri;
		//$scope.taasisi = data.taasisi;
		if(data.private_public == 'public')
		{
		$scope.public = true;
		$scope.kichwa_cha_maelezo = data.kichwa_cha_maelezo;
		$scope.maelezo = data.maelezo;
		$scope.kiambata = data.kiambata;
		if((data.kiambata == '') || (data.kiambata == null)){ $scope.kuna_kiambata_mteja = false; }else{ $scope.kuna_kiambata_mteja = true; };
		$scope.displayed_category = data.category;
		$scope.majibu_title = data.majibu_title;
		$scope.majibu_maelezo = data.majibu_maelezo;
		$scope.majibu_kiambata = data.majibu_kiambata;
		if((data.majibu_kiambata  == '') || (data.majibu_kiambata  == null)){ $scope.kuna_kiambata_wizara = false; }else{ $scope.kuna_kiambata_wizara = true; };
		$scope.tarehe_kutoka_kwa_mteja = $scope.tarehe_kutoka_kwa_mteja;
		$scope.tarehe_ps = data.tarehe_ps;
		}else{
		$scope.public = false;
		$scope.displayed_category = data.category;
		$scope.tarehe_ps = data.tarehe_ps;
		};
		if(data.general_status == 'mrejesho_mdau')
		{
		$scope.onesha_maoni = false;
		$scope.onesha_shukrani = false;
		$scope.onesha_funga = true;
		}else{
		$scope.onesha_maoni = true;
		$scope.onesha_shukrani = false;
		$scope.onesha_funga = false;
		};
		$scope.showTicket();
	});
	};
	
	$scope.showTicket = function(){
		var modal_popup = angular.element('#ticket_panel');
		modal_popup.modal('show');
	};
	$scope.closeTicket = function(){
		//$scope.close_update_successMessage();
		//$scope.close_connection_errorMessage();
		//$scope.category.selected = undefined;
		//$scope.idara.selected = undefined;
		//$scope.mteja_ticket_form.$setUntouched();
		var modal_popup = angular.element('#ticket_panel');
		modal_popup.modal('hide');
	};
	
	$scope.mdau_mrejesho = {};
	$scope.load_mdau_mrejesho = function(){
			$http.get('mdau_mrejeshoAPI.php').success(function(data){
			$scope.mdau_mrejesho_data = data;
			});
	};
	
	$scope.safisha_mdau_mrejesho = function() {
		$scope.mdau_mrejesho.selected = undefined;
	};
	$scope.futa_mdau_mrejesho_form = function() {
		$scope.mdau_mrejesho.selected = undefined;
		$scope.mdau_mrejesho_maoni = '';
		$scope.mdau_mrejesho_form.$setUntouched();
	};
	
	$scope.mrejesho_connection_error = false;
	$scope.close_mrejesho_connection_errorMessage = function(){
		$scope.mrejesho_connection_error = false;
	};
	$scope.form_data = {};
	$scope.hajarudi_mdau_mrejesho_form = false;
	$scope.submit_mdau_mrejesho_form = function(){
	$scope.hajarudi_mdau_mrejesho_form = true;
		$http({
			method:"POST",
			url:"insert_mdau_mrejesho.php",
			data:{
			'ticket_id':$scope.ticket_id, 
			'mdau_mrejesho':$scope.mdau_mrejesho.selected.mdau_mrejesho,
			'mdau_mrejesho_maoni':$scope.mdau_mrejesho_maoni
			}
		}).success(function(data){
			$scope.hajarudi_mdau_mrejesho_form = false;
			if(data.connection_error != '')
			{
				$scope.mrejesho_connection_error = true;
				$scope.mrejesho_connection_errorMessage = 'Imeshindikana Kutuma!';
			}
			else
			{
				$scope.mrejesho_connection_error = false;
				$scope.onesha_maoni = false;
				$scope.onesha_shukrani = true;
				$scope.onesha_funga = true;
				$scope.mdau_mrejesho.selected = undefined;
				$scope.mdau_mrejesho_maoni = '';
			}
		});
	};
	
});

</script>

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
</body>
</html>
