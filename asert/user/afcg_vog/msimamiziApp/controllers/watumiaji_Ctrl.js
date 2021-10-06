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
	app.filter('titleCase', function() {
    return function(input) {
      input = input || '';
      return input.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    };
  	})


app.controller('watumiajiController', function($timeout, $scope, $http, focus){

	 
	//$scope.this_facility_username = js_glob_username; //From php session vars on index page
	$scope.open_subiri_box = function(){
		var modal_popup = angular.element('#subiri_box');
		modal_popup.modal('show');
	};
	$scope.close_subiri_box= function(){
		var modal_popup = angular.element('#subiri_box');
		modal_popup.modal('hide');
	};
	
	$scope.fetchStatus = function(){
		$http.get('status.php').success(function(data){
			$scope.idadi_new_facilities = data.idadi_new_facilities;
			$scope.idadi_approved_facilities = data.idadi_approved_facilities;
			$scope.idadi_new_assessors = data.idadi_new_assessors;
			$scope.idadi_approved_assessors = data.idadi_approved_assessors;
		});
	};
	
	$scope.success = false;
	$scope.connection_error = false;
	

	$scope.show_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('show');
		$scope.fetchData();
	};
	
	$scope.close_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('hide');
	};
	
	$scope.show_applied_assessors_list = function(){
		var modal_popup = angular.element('#applied_assessors_list_panel');
		modal_popup.modal('show');
		$scope.fetch_applied_assessors();
	};
	
	$scope.close_applied_assessors_list = function(){
		var modal_popup = angular.element('#applied_assessors_list_panel');
		modal_popup.modal('hide');
	};
	$scope.fetch_applied_assessors = function(){
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_applied_assessors.php').success(function(data){
			$scope.applied_assessors_data = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	$scope.fetch_applied_assessors_after_changes = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_applied_assessors.php').success(function(data){
			$scope.applied_assessors_data = data;			
		});		
	};
	$scope.view_applied_assessor_details = function(reg_assessor_id){
	$scope.hidden_reg_assessor_id = reg_assessor_id;
	$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/fetch_update_single_assessor.php",
		data:{'reg_assessor_id':reg_assessor_id, 'action':'fetch_single_assessor'}
	}).success(function(data){
		$scope.mkoa = data.mkoa;
		$scope.halmashauri = data.halmashauri;			
		$scope.assessor_qualification_name = data.assessor_qualification_name;
		//$scope.on_edit_load_assessor_qualification_name();
		$scope.qualification_others = data.qualification_others;
		
		$scope.assessor_full_name = data.assessor_full_name;
		$scope.assessor_profession = data.assessor_profession;
		$scope.simu_mobile = data.assessor_simu_mobile;
		$scope.assessor_barua_pepe = data.assessor_barua_pepe;		
		$scope.kiambata = data.kiambata;
		//$scope.action = 'edit_single_assessor';
		$scope.open_assessor_details_panel();
	});
	};
	$scope.form_data = {};
	$scope.hajarudi_wateja_request_form = false;
	$scope.approve_applied_assessor = function(){
		$scope.show_submit_confirmation_box();
		//$scope.more_info = function(){
			//$scope.show_submitting_window = false;
		//};
		$scope.show_submitting_window = true;
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.submitted_unsuccessfully = false;
		$scope.hajarudi_wateja_request_form = true;
		$scope.approval = 'certified';							
					$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/fetch_update_single_assessor.php",
					data:{
					'approval':$scope.approval,
					'action':'edit_single_assessor', 'reg_assessor_id':$scope.hidden_reg_assessor_id
					}
				}).success(function(data){
					$scope.fetchStatus();
					$scope.hajarudi_wateja_request_form = false;
					if(data.insert_or_edit == 'edit'){ $scope.from_editing = true;  $scope.from_insert = false; }else{ $scope.from_editing = false;  $scope.from_insert = true; }
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						$scope.close_assessor_details_panel();
						$scope.fetch_applied_assessors_after_changes();						
						$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
					};
				});
						
		};
	$scope.open_assessor_details_panel = function(){
		var modal_popup = angular.element('#assessor_details_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessor_details_panel = function(){
		var modal_popup = angular.element('#assessor_details_panel');
		modal_popup.modal('hide');
	};
	
	$scope.show_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('show');
	};
	$scope.close_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('hide');
	};
	$scope.show_funika_kurasa_with_status = function(){
		var modal_popup = angular.element('#funika_kurasa_with_status_panel');
		modal_popup.modal('show');
	};
	$scope.close_funika_kurasa_with_status = function(){
		var modal_popup = angular.element('#funika_kurasa_with_status_panel');
		modal_popup.modal('hide');
	};
	
	$scope.fetchData = function(){
	//$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	$scope.fetchData_after_changes = function(){
	//$scope.fetch_trading_name();
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
		});		
	};
/*
	$scope.fetch_trading_name = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_trading_name.php').success(function(data){
			$scope.trading_name = data.trading_name;
			$scope.tin = data.tin;			
		});		
	};
*/			
	$scope.openModal = function(){
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('show');
	};
	$scope.closeModal = function(){
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('hide');
	};
			
	$scope.editMtumiaji = function(id){
		//$scope.checking_dup_username = false;
		//$scope.username_already_taken = false;
		//$scope.username_not_taken = false;
		//$scope.username_used_by_this_facility = false;	
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'id':id, 'action':'fetch_single_data'}
		}).success(function(data){			
			$scope.mikoa.selected = data;
			$scope.halmashauri.selected = data;
			$scope.on_edit_loadHalmashauri();
			$scope.location_group.selected = data;
			$scope.check_location_group_id = data.location_id;
			//if((data.location_id == '') || (data.location_id == null)){ $scope.safisha_location_group(); }			
			$scope.type_of_accomodation_facilities.selected = data;
			$scope.on_edit_load_type_of_accomodation_facilities();
			$scope.trading_name = data.trading_name;
			$scope.trading_name_for_comparison = data.trading_name;
			$scope.tin = data.tin;
			$scope.tin_for_comparison = data.tin;			
			$scope.facility_name = data.facility_name;
			$scope.physical_address = data.physical_address;
			$scope.postal_address = data.postal_address;
					$scope.facility_management_options.selected = data; //??
		    $scope.simu_landline = data.simu_landline;
		    $scope.barua_pepe = data.barua_pepe;
			$scope.username = data.username;
			$scope.group_admin_username = data.group_admin_username;
			$scope.hidden_id = data.id;
			$scope.submit_button = 'Approve';			
			//$scope.save_button = true;
			$scope.action = 'edit_request';
			//if(data.facility_mama == 'ndio'){ $scope.facility_mama = true; $scope.update_facility_mama = 'ndio'; }else{ $scope.facility_mama = false; $scope.update_facility_mama = 'hapana'; };
			//if($scope.username.substr($scope.username.length - 5) == 'child'){ $scope.facility_child = true; $scope.simu_mobile = data.group_admin_username; }else{ $scope.facility_child = false; $scope.simu_mobile = data.simu_mobile; };
			//if(($scope.facility_mama) || ($scope.facility_child)){ $scope.facility_management_options.selected.management_option = 'By me'; $scope.facility_management_options.selected.id_management_option = 'me'; }else{ $scope.facility_management_options.selected.management_option = 'By another person'; $scope.facility_management_options.selected.id_management_option = 'another_person'; }			
			$scope.openModal();
		});
		};
	
	$scope.mikoa = {};
	$scope.loadMikoa = function(){		  
	  $http.get('msimamiziApp/sajili_mtumiaji/mikoaAPI.php').success(function(data){ 
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
	  $http.post("msimamiziApp/sajili_mtumiaji/halmashauriAPI.php", {'regID':$scope.mikoa.selected.regID})
	   .success(function(data){ 
			$scope.halmashauriData = data;		
	   });
	};
	$scope.on_edit_loadHalmashauri = function(){
	//$scope.safishaHalmashauri();
	  $http.post("msimamiziApp/sajili_mtumiaji/halmashauriAPI.php", {'regID':$scope.mikoa.selected.regID})
	   .success(function(data){ 
			$scope.halmashauriData = data;		
	   });
	};		
	$scope.safishaHalmashauri = function() {
		$scope.halmashauri.selected = undefined;
	};
	
	  $scope.location_group = {};	  
	  $scope.load_location_group = function(){		  
			$http.get('msimamiziApp/sajili_mtumiaji/location_group_API.php').success(function(data){
			$scope.location_group_data = data;
			});
	  }; 	
		$scope.safisha_location_group = function() {
			$scope.location_group.selected = undefined;
			$scope.safisha_type_of_accomodation_facilities();
		};
	  
		$scope.type_of_accomodation_facilities = {};
		$scope.load_type_of_accomodation_facilities = function(){
		$scope.safisha_type_of_accomodation_facilities();
		  $http.post('msimamiziApp/sajili_mtumiaji/type_of_accomodation_facilities_API.php', {'location_id':$scope.location_group.selected.location_id}).success(function(data){ 
				$scope.type_of_accomodation_facilities_data = data;		
		   });
		};
		$scope.on_edit_load_type_of_accomodation_facilities = function(){
		//$scope.safisha_type_of_accomodation_facilities();
		  $http.post('msimamiziApp/sajili_mtumiaji/type_of_accomodation_facilities_API.php', {'location_id':$scope.location_group.selected.location_id}).success(function(data){ 
				$scope.type_of_accomodation_facilities_data = data;		
		   });
		};		
		$scope.safisha_type_of_accomodation_facilities = function() {
			$scope.type_of_accomodation_facilities.selected = undefined;
		};
		
		$scope.facility_management_options = {};
		$scope.load_facility_management_options = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_management_options_API.php').success(function(data){ 
			$scope.facility_management_options_data = data;		
		   });
		};		
		$scope.safisha_facility_management_options = function() {
			$scope.facility_management_options.selected = undefined;
			$scope.simu_mobile = '';
			$scope.checking_dup_username = false;
			$scope.username_already_taken = false;
			$scope.username_not_taken = false;
		};
		
		
		$scope.futa_requestForm = function(){
			$scope.mikoa.selected = undefined;
			$scope.halmashauri.selected = undefined;
			$scope.location_group.selected = undefined;
			$scope.type_of_accomodation_facilities.selected = undefined;
			$scope.facility_name = '';
			$scope.physical_address = '';
			$scope.postal_address = '';
			$scope.facility_management_options.selected = undefined;
			$scope.simu_mobile = '';
			$scope.simu_landline = '';
			$scope.barua_pepe = '';
			$scope.ticket_id = '';			
			$scope.wateja_request_form.$setUntouched();
			$scope.success = false;
			$scope.connection_error = false;
			$scope.connection_errorMessage = '';
			$scope.checking_dup_username = false;
			$scope.username_already_taken = false;
			$scope.username_not_taken = false;
			$scope.username_used_by_this_facility = false;
		};
	


	  
	$scope.form_data = {};
	$scope.hajarudi_wateja_request_form = false;
	$scope.submit_wateja_request_form = function(){
		$scope.show_submit_confirmation_box();
		$scope.more_info = function(){
			$scope.show_submitting_window = false;
		};
		$scope.show_submitting_window = true;
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.submitted_unsuccessfully = false;
		$scope.hajarudi_wateja_request_form = true;
		$scope.approval = 'approved';							
					$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
					data:{					
					//'regID':$scope.mikoa.selected.regID,
					//'mkoa':$scope.mikoa.selected.regNam,
					//'lgaID':$scope.halmashauri.selected.lgaID,
					//'halmashauri':$scope.halmashauri.selected.lgaNam,
					'location_id':$scope.location_group.selected.location_id,
					'location':$scope.location_group.selected.location_name,
					'acc_facility_id':$scope.type_of_accomodation_facilities.selected.acc_facility_id,
					'type_of_accomodation_facilities':$scope.type_of_accomodation_facilities.selected.acc_facility_type,
					//'trading_name':$scope.trading_name,
					//'tin':$scope.tin,
					//'facility_name':$scope.facility_name,
					//'physical_address':$scope.physical_address,
					//'postal_address':$scope.postal_address,
					//'id_management_option':$scope.facility_management_options.selected.id_management_option,
					//'group_admin_username':$scope.group_admin_username,
					//'simu_mobile':$scope.simu_mobile, 
					//'simu_landline':$scope.simu_landline,
					//'barua_pepe':$scope.barua_pepe,
					'approval':$scope.approval,
					'action':$scope.action, 'id':$scope.hidden_id
					}
				}).success(function(data){
					$scope.fetchStatus();
					$scope.hajarudi_wateja_request_form = false;
					if(data.insert_or_edit == 'edit'){ $scope.from_editing = true;  $scope.from_insert = false; }else{ $scope.from_editing = false;  $scope.from_insert = true; }
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						$scope.closeModal();
						$scope.fetchData_after_changes();						
						$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
					};
				});
						
		};
	
	
	$scope.show_submit_confirmation_box = function(){
		var modal_popup = angular.element('#submit_confirmation_box');
		modal_popup.modal('show');
	};
	$scope.close_submit_confirmation_box = function(){
		var modal_popup = angular.element('#submit_confirmation_box');
		modal_popup.modal('hide');
	};
	
	$scope.facility_details = function(id){
	$scope.facility_details_imemaliza = false;
	$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/insert.php",
		data:{'id':id, 'action':'fetch_single_data'}
	}).success(function(data){
		$scope.facility_details_mkoa = data.regNam;
		$scope.facility_details_halmashauri = data.lgaNam;
		$scope.facility_details_type_of_accomodation_facilities = data.type_of_accomodation_facilities;			
		$scope.facility_details_facility_name = data.facility_name;
		$scope.facility_details_physical_address = data.physical_address;
		$scope.facility_details_postal_address = data.postal_address;
		$scope.facility_details_simu_mobile = data.simu_mobile;
		$scope.facility_details_simu_landline = data.simu_landline;
		$scope.facility_details_barua_pepe = data.barua_pepe;
		$scope.hidden_id = id;		
		if(data.facility_mama == 'ndio'){ $scope.default_is_selected = true; $scope.is_facility_mama_selected = 'ndio'; }else{ $scope.default_is_selected = false; $scope.is_facility_mama_selected = 'hapana'; };		
		
		$scope.facility_details_imemaliza = true;
	});
	};
	

	
	

});

