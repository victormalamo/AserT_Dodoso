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
	//Check login_user
	$scope.other_accounts = false;
	$scope.fetch_login_user = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_login_user.php').success(function(data){
			$scope.login_user_data = data;
			$scope.display_trading_name = data[0].trading_name;
			if($scope.login_user_data[0].username == $scope.login_user_data[0].group_admin_username)
			{
			$scope.other_accounts = false;
			}
			else
			{			
			$scope.other_accounts = true;
			}			
		});		
	};
	
	$scope.fetchStatus = function(){
		$http.get('status.php').success(function(data){
			$scope.idadi_incomplete = data.idadi_incomplete;
			$scope.idadi_approved = data.idadi_approved;
			$scope.idadi_eligible_for_assessment = data.idadi_eligible_for_assessment;
		});
	};
	
	$scope.success = false;
	$scope.connection_error = false;
	

	$scope.show_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('show');
		$scope.fetchData();
	};
	/*
	$scope.show_sajili_from_menu = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('show');
		$scope.fetchData_from_menu();
	};
	$scope.fetchData_from_menu = function(){
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; $scope.addData(); }, 3000);			
		});
	};
	*/
	$scope.close_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
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
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	$scope.fetchData_after_changes = function(){
	$scope.fetch_trading_name();
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
		});		
	};

	$scope.fetch_trading_name = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_trading_name.php').success(function(data){
			$scope.trading_name = data.trading_name;
			$scope.tin = data.tin;			
		});		
	};
				
	$scope.openModal = function(){
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('show');
	};
	$scope.closeModal = function(){
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('hide');
	};
	
	$scope.addData = function(){
		$scope.futa_requestForm();
		$scope.hidden_id = '';
		$scope.update_facility_mama = '';
		$scope.success = false;
		$scope.connection_error = false;
		$scope.connection_errorMessage = '';
		$scope.facility_mama = false;
		$scope.facility_child = false;
		$scope.submit_button = 'Register';
		$scope.save_button = false;
		$scope.action = 'insert_new_request';
		$scope.group_admin_username = js_glob_username; //From php session vars on index page
		$scope.openModal();		
	 };
		
	$scope.editMtumiaji = function(id){
		$scope.checking_dup_username = false;
		$scope.username_already_taken = false;
		$scope.username_not_taken = false;
		$scope.username_used_by_this_facility = false;	
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
			$scope.submit_button = 'Send';			
			$scope.save_button = true;
			$scope.action = 'edit_request';
			if(data.facility_mama == 'ndio'){ $scope.facility_mama = true; $scope.update_facility_mama = 'ndio'; }else{ $scope.facility_mama = false; $scope.update_facility_mama = 'hapana'; };
			if($scope.username.substr($scope.username.length - 5) == 'child'){ $scope.facility_child = true; $scope.simu_mobile = data.group_admin_username; }else{ $scope.facility_child = false; $scope.simu_mobile = data.simu_mobile; };
			if(($scope.facility_mama) || ($scope.facility_child)){ $scope.facility_management_options.selected.management_option = 'By me'; $scope.facility_management_options.selected.id_management_option = 'me'; }else{ $scope.facility_management_options.selected.management_option = 'By another person'; $scope.facility_management_options.selected.id_management_option = 'another_person'; }			
			$scope.openModal();
		});
		};
		
		<!-- FACILITY INVENTORY  -->
		
		$scope.openModal_inventory = function(){
			var modal_popup = angular.element('#tuma_panel_inventory');
			modal_popup.modal('show');
		};
		$scope.closeModal_inventory = function(){
			var modal_popup = angular.element('#tuma_panel_inventory');
			modal_popup.modal('hide');
		};
		$scope.facility_management_type = {};
		$scope.load_facility_management_type = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_management_type.php').success(function(data){ 
			$scope.facility_management_type_data = data;		
		   });
		};		
		$scope.safisha_facility_management_type = function() {
			$scope.facility_management_type.selected = undefined;
		};
		$scope.facility_nationality_type = {};
		$scope.load_facility_nationality_type = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_nationality_type.php').success(function(data){ 
			$scope.facility_nationality_type_data = data;		
		   });
		};		
		$scope.safisha_facility_nationality_type = function() {
			$scope.facility_nationality_type.selected = undefined;
		};
		
		$scope.facility_ownership_type = {};
		$scope.load_facility_ownership_type = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_ownership_type.php').success(function(data){ 
			$scope.facility_ownership_type_data = data;		
		   });
		};		
		$scope.safisha_facility_ownership_type = function() {
			$scope.facility_ownership_type.selected = undefined;
		};
		
		$scope.facility_staff_occupation_type = {};
		$scope.load_facility_staff_occupation_type = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_staff_occupation_type.php').success(function(data){ 
			$scope.facility_staff_occupation_type_data = data;		
		   });
		};		
		$scope.safisha_facility_staff_occupation_type = function() {
			$scope.facility_staff_occupation_type.selected = undefined;
		};
		
		$scope.facility_staff_education_level = {};
		$scope.load_facility_staff_education_level = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_staff_education_level.php').success(function(data){ 
			$scope.facility_staff_education_level_data = data;		
		   });
		};		
		$scope.safisha_facility_staff_education_level = function() {
			$scope.facility_staff_education_level.selected = undefined;
		};
		
		$scope.facility_staff_nationality = {};
		$scope.load_facility_staff_nationality = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/facility_staff_nationality.php').success(function(data){ 
			$scope.facility_staff_nationality_data = data;		
		   });
		};		
		$scope.safisha_facility_staff_nationality = function() {
			$scope.facility_staff_nationality.selected = undefined;
		};
		$scope.facility_staff_gender = {};
		$scope.load_facility_staff_gender = function(){		  
		  $http.get('msimamiziApp/sajili_mtumiaji/fetch_gender.php').success(function(data){ 
			$scope.facility_staff_gender_data = data;		
		   });
		};		
		$scope.safisha_facility_staff_gender = function() {
			$scope.facility_staff_gender.selected = undefined;
		};
		
		$scope.load_facility_owners_names = function(facility_id){
		$scope.show_owners_list = false;
		$scope.facility_id = facility_id;
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_facility_owners_names.php",
				data:{'facility_id':facility_id}
				}).success(function(data){ 
				if(data.length > 0){ $scope.show_owners_list = true; $scope.facility_owners_names_data = data; } else { $scope.show_owners_list = false; }
			});
		};
		$scope.load_facility_owner_name = function(index, facility_id, facility_owner_id, facility_owner_full_name,facility_owner_shares, facility_owner_nida_passport_id){
		//$scope.show_owners_list = false;
		//$scope.facility_id = facility_id;
		//$scope.index = index;
		$scope.index = index;
		$scope.show_edit_delete_facility_owner = true;
		$scope.futa_facility_owners_fields();
		$scope.facility_id = facility_id;
		$scope.facility_owner_id = facility_owner_id;
		$scope.facility_owner_full_name = facility_owner_full_name;
		$scope.facility_owner_shares = facility_owner_shares;
		$scope.facility_owner_nida_passport_id = facility_owner_nida_passport_id;
		//array.splice(index, 1);
			/*$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_facility_owner_name.php",
				data:{'facility_id':facility_id,'facility_owner_id':facility_owner_id}
				}).success(function(data){ 
				//$scope.show_owners_list = true;
				$scope.facility_owner_name_data = data;
			});*/
		};
		
		$scope.edit_facility_owner = function(){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/facility_owner_name.php",
				data:{
				'facility_id':$scope.facility_id,
				'facility_owner_id':$scope.facility_owner_id,
				'facility_owner_full_name':$scope.facility_owner_full_name,
				'facility_owner_shares':$scope.facility_owner_shares,
				'facility_owner_nida_passport_id':$scope.facility_owner_nida_passport_id,
				'action':'edit_owner'
				}
				}).success(function(data){ 
				$scope.facility_owners_names_data[$scope.index] = {
					'owner_id':data.owner_id,
					'facility_id':data.facility_id,
					'full_name':$scope.facility_owner_full_name,
					'shares':$scope.facility_owner_shares,
					'nida_passport_id':$scope.facility_owner_nida_passport_id
				}
				$scope.futa_facility_owners_fields();
				$scope.show_edit_delete_facility_owner = false;
				//$scope.load_facility_owners_names($scope.facility_id);
			});
		};
		
		$scope.delete_facility_owner = function(){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/facility_owner_name.php",
				data:{
				'facility_id':$scope.facility_id,
				'facility_owner_id':$scope.facility_owner_id,
				'action':'delete_owner'
				}
				}).success(function(data){ 
				$scope.futa_facility_owners_fields();
				$scope.facility_owners_names_data.splice($scope.index,1);
				$scope.show_edit_delete_facility_owner = false;
				//$scope.load_facility_owners_names($scope.facility_id);
			});
		};
		
		//$scope.form_data = {};
		//$scope.hajarudi_wateja_request_form = false;
		$scope.add_facility_owner_name = function(){
			
			//$facility_id = $scope.facility_id;
			//$scope.show_submit_confirmation_box();
			//$scope.more_info = function(){
				//$scope.show_submitting_window = false;
			//};
			//$scope.show_submitting_window = true;
			//$scope.submitting_in_progress = true;
			//$scope.submitted_successfully = false;
			//$scope.show_checkmark = false;
			//$scope.show_animated_exclamation_icon = false;
			//$scope.submitted_unsuccessfully = false;
			//$scope.hajarudi_wateja_request_form = true;						
					$http({
						method:"POST",
						url:"msimamiziApp/sajili_mtumiaji/insert_facility_owner_name.php",
						data:{					
						'facility_owner_full_name':$scope.facility_owner_full_name,
						'facility_owner_shares':$scope.facility_owner_shares,
						'facility_owner_nida_passport_id':$scope.facility_owner_nida_passport_id,						
						'facility_id':$scope.facility_id
						}
					}).success(function(data){
						if(data.message == 'imefanikiwa')
						{
							$scope.facility_owners_names_data.push({
								owner_id:data.owner_id,
								facility_id:data.facility_id,
								full_name:$scope.facility_owner_full_name,
								shares:$scope.facility_owner_shares,
								nida_passport_id:$scope.facility_owner_nida_passport_id
							});
							$scope.futa_facility_owners_fields();
						}
						else
						{
						}
						
						//$scope.futa_facility_owners_fields();
						////$scope.load_facility_owners_names($scope.facility_id);
					});
							
		};
			$scope.futa_facility_owners_fields = function(){
				//$scope.facility_id = '';
				$scope.facility_owner_id = '';
				$scope.facility_owner_full_name = '';
				$scope.facility_owner_shares = '';
				$scope.facility_owner_nida_passport_id = '';
				$scope.inventory_form_owners.$setUntouched();
			};
			$scope.reset_facility_owner = function(){
				$scope.futa_facility_owners_fields();
				$scope.show_edit_delete_facility_owner = false;
				$scope.index = '';
				//$scope.facility_id = '';
				$scope.facility_owner_id = '';
			};
		
		$scope.load_facility_staffs_names = function(facility_id){
		$scope.show_staffs_list = false;
		$scope.facility_id = facility_id;
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_facility_staffs_names.php",
				data:{'facility_id':facility_id}
				}).success(function(data){ 
				if(data.length > 0){ $scope.show_staffs_list = true; $scope.facility_staffs_names_data = data; } else { $scope.show_staffs_list = false; }
			});
		};
		
		$scope.add_facility_staff_name = function(){						
					$http({
						method:"POST",
						url:"msimamiziApp/sajili_mtumiaji/insert_facility_staff_name.php",
						data:{					
						'facility_id':$scope.facility_id,
						'facility_staff_full_name':$scope.facility_staff_full_name,
						'facility_staff_gender':$scope.facility_staff_gender.selected.gender,
						'facility_staff_nida_passport_id':$scope.facility_staff_nida_passport_id,						
						'facility_staff_mobile_number':$scope.facility_staff_mobile_number,
						'facility_staff_email_address':$scope.facility_staff_email_address,
						'facility_staff_occupation':$scope.facility_staff_occupation_type.selected.occupation_type_name,
						'facility_staff_education':$scope.facility_staff_education_level.selected.education_level_name,
						'facility_staff_nationality':$scope.facility_staff_nationality.selected.facility_staff_nationality
						}
					}).success(function(data){
						if(data.message == 'imefanikiwa')
						{
							$scope.facility_staffs_names_data.push({
								staff_id:data.staff_id,
								facility_id:data.facility_id,
								nida_passport_id:$scope.facility_staff_nida_passport_id,
								full_name:$scope.facility_staff_full_name,
								gender:$scope.facility_staff_gender.selected.gender,
								mobile_number:$scope.facility_staff_mobile_number,
								email_address:$scope.facility_staff_email_address,
								occupation:$scope.facility_staff_occupation_type.selected.occupation_type_name,
								education:$scope.facility_staff_education_level.selected.education_level_name,
								nationality:$scope.facility_staff_nationality.selected.facility_staff_nationality
							});
							$scope.futa_facility_staffs_fields();
						}
						else
						{
						}
						
						//$scope.futa_facility_staffs_fields();
						////$scope.load_facility_staffs_names($scope.facility_id);
					});
							
		};
			$scope.futa_facility_staffs_fields = function(){
				//$scope.facility_id = '';
				$scope.facility_staff_id = '';
				$scope.facility_staff_full_name = ''
				$scope.facility_staff_gender.selected = undefined;
				$scope.facility_staff_nida_passport_id = ''						
				$scope.facility_staff_mobile_number = ''
				$scope.facility_staff_email_address = ''
				$scope.facility_staff_occupation_type.selected = undefined;
				$scope.facility_staff_education_level.selected = undefined;
				$scope.facility_staff_nationality.selected = undefined;
				$scope.inventory_form_staff_names.$setUntouched();
			};
			$scope.reset_facility_staff = function(){
				$scope.futa_facility_staffs_fields();
				$scope.show_edit_delete_facility_staff = false;
				$scope.index = '';
				//$scope.facility_id = '';
				$scope.facility_staff_id = '';
			};
		/*$scope.load_facility_staff_details = function(staff_id){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_facility_staff_name.php",
				data:{'staff_id':staff_id}
				}).success(function(data){ 
				 $scope.facility_staff_gender = data;
			});
		};
		*/
		$scope.load_facility_staff_name = function(index, facility_staff_id, facility_staff_full_name, facility_staff_gender, facility_staff_nida_passport_id, facility_staff_mobile_number, facility_staff_email_address, facility_staff_occupation_type_name, facility_staff_education_level_name, facility_staff_facility_staff_nationality){
			$scope.show_edit_delete_facility_staff = true;
			$scope.futa_facility_staffs_fields();
			$scope.index = index;		
			//$scope.facility_id = facility_id;
			$scope.facility_staff_id = facility_staff_id;			
			$scope.facility_staff_full_name = facility_staff_full_name;
			//$scope.load_facility_staff_details(facility_staff_id);
			$scope.facility_staff_gender.selected = {'gender':facility_staff_gender};
			$scope.facility_staff_nida_passport_id = facility_staff_nida_passport_id;						
			$scope.facility_staff_mobile_number = facility_staff_mobile_number;
			$scope.facility_staff_email_address = facility_staff_email_address;
			$scope.facility_staff_occupation_type.selected = {'occupation_type_name':facility_staff_occupation_type_name};
			$scope.facility_staff_education_level.selected = {'education_level_name':facility_staff_education_level_name};
			$scope.facility_staff_nationality.selected = {'facility_staff_nationality':facility_staff_facility_staff_nationality};
		};
		
		$scope.edit_facility_staff = function(){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/facility_staff_name.php",
				data:{
				'facility_id':$scope.facility_id,
				'facility_staff_id':$scope.facility_staff_id,				
				'facility_staff_full_name':$scope.facility_staff_full_name,
				'facility_staff_gender':$scope.facility_staff_gender.selected.gender,
				'facility_staff_nida_passport_id':$scope.facility_staff_nida_passport_id,						
				'facility_staff_mobile_number':$scope.facility_staff_mobile_number,
				'facility_staff_email_address':$scope.facility_staff_email_address,
				'facility_staff_occupation_type':$scope.facility_staff_occupation_type.selected.occupation_type_name,
				'facility_staff_education_level':$scope.facility_staff_education_level.selected.education_level_name,
				'facility_staff_nationality':$scope.facility_staff_nationality.selected.facility_staff_nationality,
				'action':'edit_staff'
				}
				}).success(function(data){ 
				$scope.facility_staffs_names_data[$scope.index] = {
					'staff_id':data.staff_id,
					'facility_id':data.facility_id,
					'nida_passport_id':$scope.facility_staff_nida_passport_id,
					'full_name':$scope.facility_staff_full_name,
					'gender':$scope.facility_staff_gender.selected.gender,
					'mobile_number':$scope.facility_staff_mobile_number,
					'email_address':$scope.facility_staff_email_address,
					'occupation':$scope.facility_staff_occupation_type.selected.occupation_type_name,
					'education':$scope.facility_staff_education_level.selected.education_level_name,
					'nationality':$scope.facility_staff_nationality.selected.facility_staff_nationality
				}
				$scope.futa_facility_staffs_fields();
				$scope.show_edit_delete_facility_staff = false;
				//$scope.load_facility_staffs_names($scope.facility_id);
			});
		};
		$scope.delete_facility_staff = function(){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/facility_staff_name.php",
				data:{
				'facility_id':$scope.facility_id,
				'facility_staff_id':$scope.facility_staff_id,
				'action':'delete_staff'
				}
				}).success(function(data){ 
				$scope.futa_facility_staffs_fields();
				$scope.facility_staffs_names_data.splice($scope.index,1);
				$scope.show_edit_delete_facility_staff = false;
				//$scope.load_facility_owners_names($scope.facility_id);
			});
		};		
		
			$scope.editMtumiaji_inventory = function(id){
			$scope.load_facility_owners_names(id);
			$scope.show_edit_delete_facility_owner = false;
			$scope.load_facility_staffs_names(id);
			$scope.show_edit_delete_facility_staff = false;
			//$scope.checking_dup_username = false;
			//$scope.username_already_taken = false;
			//$scope.username_not_taken = false;
			//$scope.username_used_by_this_facility = false;	
			$http({
				method:"POST",
				url:"msimamiziApp/sajili_mtumiaji/insert.php",
				data:{'id':id, 'action':'fetch_single_data'}
			}).success(function(data){	  			
				$scope.mikoa = data.regNam;
				$scope.halmashauri = data.lgaNam;
				//$scope.on_edit_loadHalmashauri();
				//$scope.location_group.selected = data;
				//$scope.check_location_group_id = data.location_id;
				//if((data.location_id == '') || (data.location_id == null)){ $scope.safisha_location_group(); }			
				$scope.acc_facility_type = data.acc_facility_type;
				//$scope.on_edit_load_type_of_accomodation_facilities();
				$scope.trading_name = data.trading_name;
				//$scope.trading_name_for_comparison = data.trading_name;
				$scope.tin = data.tin;
				//$scope.tin_for_comparison = data.tin;			
				$scope.facility_name = data.facility_name;
				$scope.physical_address = data.physical_address;
				$scope.postal_address = data.postal_address;
				$scope.simu_mobile = data.simu_mobile;
				$scope.simu_landline = data.simu_landline;
				$scope.barua_pepe = data.barua_pepe;
				//$scope.username = data.username;
				//$scope.group_admin_username = data.group_admin_username;
				$scope.hidden_id = data.id;
				//$scope.submit_button = 'Send';			
				//$scope.save_button = true;
				$scope.action = 'edit_request';
				//if(data.facility_mama == 'ndio'){ $scope.facility_mama = true; $scope.update_facility_mama = 'ndio'; }else{ $scope.facility_mama = false; $scope.update_facility_mama = 'hapana'; };
				//if($scope.username.substr($scope.username.length - 5) == 'child'){ $scope.facility_child = true; $scope.simu_mobile = data.group_admin_username; }else{ $scope.facility_child = false; $scope.simu_mobile = data.simu_mobile; };
				//if(($scope.facility_mama) || ($scope.facility_child)){ $scope.facility_management_options.selected.management_option = 'By me'; $scope.facility_management_options.selected.id_management_option = 'me'; }else{ $scope.facility_management_options.selected.management_option = 'By another person'; $scope.facility_management_options.selected.id_management_option = 'another_person'; }			
				
				$scope.openModal_inventory();
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
		$scope.on_change_facility_management_options = function() {
		if( $scope.facility_management_options.selected.id_management_option == 'me' ){ $scope.simu_mobile = $scope.group_admin_username;  }else{ $scope.simu_mobile = ''; $scope.facility_child = false; };
		};
		
		//Check duplicate trading_name
		$scope.disable_other_actions = false;
		$scope.clear_trading_name_availability_message = function() {
		///$scope.trading_name_already_taken = false;
		///$scope.trading_name_not_taken = false;
		///$scope.disable_other_actions = true;
			if($scope.trading_name_used_by_this_facility){ $scope.trading_name_used_by_this_facility = false; }
			else if($scope.trading_name_already_taken){ $scope.trading_name = ''; $scope.trading_name_already_taken = false; }
			else { $scope.trading_name_not_taken = false; }
		}
		$scope.checking_dup_trading_name = false;
		//$scope.trading_name_already_taken = false;
		//$scope.trading_name_not_taken = false;
		$scope.check_dup_trading_name = function(){
		$scope.trading_name_already_taken = false;
		$scope.trading_name_not_taken = false;
		$scope.trading_name_used_by_this_facility = false;
		$scope.checking_dup_trading_name = true;
		//$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('msimamiziApp/sajili_mtumiaji/check_dup_trading_name.php', {'trading_name_for_checkup':$scope.trading_name }).success(function(data){ 
			$scope.checking_dup_trading_name = false;
			//$scope.close_funika_kurasa();			
			if(data.trading_name_ipo == 'ndio')
			{
				if($scope.trading_name_for_comparison != ''){ //from editing function
					if($scope.trading_name_for_comparison == data.trading_name){ 
					$scope.trading_name_already_taken = false;
					$scope.trading_name_not_taken = false;
					$scope.trading_name_used_by_this_facility = true;
					focus('trading_name');
					}else{
					$scope.trading_name_already_taken = true;
					$scope.trading_name_not_taken = false;
					$scope.trading_name_used_by_this_facility = false;
					//$scope.simu_mobile = '';
					focus('trading_name');
					}
				}else{ //From insert new record
				$scope.trading_name_already_taken = true;
				$scope.trading_name_not_taken = false;
				$scope.trading_name_used_by_this_facility = false;
				//$scope.simu_mobile = '';
				focus('trading_name');				
				}					
			}else{
				$scope.trading_name_not_taken = true;
				$scope.trading_name_already_taken = false;
				//$timeout(function(){ $scope.trading_name_not_taken = false; }, 3000);
				focus('trading_name');
			}		
		   });
		};
		
		//Check duplicate tin
		$scope.disable_other_actions = false;
		$scope.clear_tin_availability_message = function() {
		//$scope.tin_already_taken = false;
		//$scope.tin_not_taken = false;
		//$scope.disable_other_actions = true;
			if($scope.tin_used_by_this_facility){ $scope.tin_used_by_this_facility = false; }
			else if($scope.tin_already_taken){ $scope.tin = ''; $scope.tin_already_taken = false; }
			else { $scope.tin_not_taken = false; }
		}
		$scope.checking_dup_tin = false;
		//$scope.tin_already_taken = false;
		//$scope.tin_not_taken = false;
		$scope.check_dup_tin = function(){
		$scope.tin_already_taken = false;
		$scope.tin_not_taken = false;
		$scope.tin_used_by_this_facility = false;
		$scope.checking_dup_tin = true;
		//$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('msimamiziApp/sajili_mtumiaji/check_dup_tin.php', {'tin_for_checkup':$scope.tin }).success(function(data){ 
			$scope.checking_dup_tin = false;
			//$scope.close_funika_kurasa();
			if(data.tin_ipo == 'ndio')
			{
				if($scope.tin_for_comparison != ''){ //from editing function
					if($scope.tin_for_comparison == data.tin){ 
					$scope.tin_already_taken = false;
					$scope.tin_not_taken = false;
					$scope.tin_used_by_this_facility = true;
					focus('tin');
					}else{
					$scope.tin_already_taken = true;
					$scope.tin_not_taken = false;
					$scope.tin_used_by_this_facility = false;
					focus('tin');
					}
				}else{ //From insert new record
				$scope.tin_already_taken = true;
				$scope.tin_not_taken = false;
				$scope.tin_used_by_this_facility = false;
				focus('tin');				
				};					
			}else{
				$scope.tin_not_taken = true;
				$scope.tin_already_taken = false;				
				//$timeout(function(){ $scope.tin_not_taken = false; }, 3000);
				focus('tin');
			}		
		   });
		};
		
		//Check duplicate username
		$scope.disable_other_actions = false;
		$scope.clear_username_availability_message = function() {
		//$scope.username_already_taken = false;
		//$scope.username_not_taken = false;
		//$scope.username_used_by_this_facility = false;
		//$scope.disable_other_actions = true;
			if($scope.username_used_by_this_facility){ $scope.username_used_by_this_facility = false; }
			else if($scope.username_already_taken){ $scope.simu_mobile = ''; $scope.username_already_taken = false; }
			else { $scope.username_not_taken = false; }
		}
		$scope.checking_dup_username = false;
		//$scope.username_already_taken = false;
		//$scope.username_not_taken = false;
		$scope.check_dup_username = function(){
		$scope.checking_dup_username = true;
		$scope.username_already_taken = false;
		$scope.username_not_taken = false;
		$scope.username_used_by_this_facility = false;
		//$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('msimamiziApp/sajili_mtumiaji/check_dup_username.php', {'username_for_checkup':$scope.simu_mobile }).success(function(data){ 
			$scope.checking_dup_username = false;
			//$scope.close_funika_kurasa();
			if(data.username_ipo == 'ndio')
			{
				if($scope.hidden_id > 0){ //from editing function
					if($scope.hidden_id == data.id){ 
					$scope.username_already_taken = false;
					$scope.username_not_taken = false;
					$scope.username_used_by_this_facility = true;
					focus('simu_mobile');
					}else{
					$scope.username_already_taken = true;
					$scope.username_not_taken = false;
					$scope.username_used_by_this_facility = false;
					//$scope.simu_mobile = '';
					focus('simu_mobile');
					}
				}else{ //From insert new record
				$scope.username_already_taken = true;
				$scope.username_not_taken = false;
				$scope.username_used_by_this_facility = false;
				//$scope.simu_mobile = '';
				focus('simu_mobile');				
				}					
			}else{
			$scope.username_not_taken = true;
			$scope.username_already_taken = false;
			$scope.username_used_by_this_facility = false;
			//$timeout(function(){ $scope.username_not_taken = false; }, 3000);
			focus('simu_mobile');
			}		
		   });
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
	

	  $scope.tazamaMtumiaji = function(){	  	 
		  $scope.idara.selected = undefined;
		  $scope.section.selected = undefined;
		  if(($scope.levelID.selected.levelID == 'w') || ($scope.levelID.selected.levelID == 'nw') || ($scope.levelID.selected.levelID == 'ps') || ($scope.levelID.selected.levelID == 'dps')  || ($scope.levelID.selected.levelID == 'dahrm') || ($scope.levelID.selected.levelID == 'ca') || ($scope.levelID.selected.levelID == 'ra') || ($scope.levelID.selected.levelID == 'tae') || ($scope.levelID.selected.levelID == 'to') || ($scope.levelID.selected.levelID == 'pmu') || ($scope.levelID.selected.levelID == 'masijala') || ($scope.levelID.selected.levelID == 'driver'))
		  { 
		  $scope.disable_idara = true;
		  //$scope.levelID_disable_section = true;
		  $scope.section_disabled = true;
		  $scope.idara_yake();		  		  
		  } else { 
		  $scope.disable_idara = false; 
		  };
		  $scope.loadIdara();
		  if(($scope.levelID.selected.levelID == 'hod') || ($scope.levelID.selected.levelID == 'hu')) { $scope.load_hodu_waliosajiliwa(); $scope.levelID_disable_section = true; } else { $scope.reset_load_idara(); $scope.levelID_disable_section = false; };
		  if($scope.levelID.selected.levelID == 'hod') { $scope.hod_level_selected = true; } else { $scope.hod_level_selected = false; };
		  if($scope.levelID.selected.levelID == 'hu') { $scope.hu_level_selected = true; } else { $scope.hu_level_selected = false; };
		  if($scope.levelID.selected.levelID == 'hos') { $scope.hos_level_selected = true; $scope.load_hos_waliosajiliwa(); } else { $scope.hos_level_selected = false; $scope.reset_load_sections(); };
		  if($scope.levelID.selected.levelID == 'driver' ) { $scope.enable_leseni(); } else { $scope.disable_leseni(); $scope.leseni = ''; };		  
		  
		  $scope.loadVyeo();
		  //Idara_Kitengo_Label
		  if(($scope.levelID.selected.levelID == 'ca' ) || ($scope.levelID.selected.levelID == 'tae' ) || ($scope.levelID.selected.levelID == 'ra' ) || ($scope.levelID.selected.levelID == 'hu' ) || ($scope.levelID.selected.levelID == 'pmu' )){ $scope.idara_kitengo_label = 'Kitengo'; }else{ $scope.idara_kitengo_label = 'Idara'; };
		  
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
					
					$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
					data:{					
					'regID':$scope.mikoa.selected.regID,
					'mkoa':$scope.mikoa.selected.regNam,
					'lgaID':$scope.halmashauri.selected.lgaID,
					'halmashauri':$scope.halmashauri.selected.lgaNam,
					'location_id':$scope.location_group.selected.location_id,
					'location':$scope.location_group.selected.location_name,
					'acc_facility_id':$scope.type_of_accomodation_facilities.selected.acc_facility_id,
					'type_of_accomodation_facilities':$scope.type_of_accomodation_facilities.selected.acc_facility_type,
					'trading_name':$scope.trading_name,
					'tin':$scope.tin,
					'facility_name':$scope.facility_name,
					'physical_address':$scope.physical_address,
					'postal_address':$scope.postal_address,
					'id_management_option':$scope.facility_management_options.selected.id_management_option,
					'group_admin_username':$scope.group_admin_username,
					'simu_mobile':$scope.simu_mobile, 
					'simu_landline':$scope.simu_landline,
					'barua_pepe':$scope.barua_pepe,
					'action':$scope.action, 'id':$scope.hidden_id, 'update_facility_mama':$scope.update_facility_mama
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
						$scope.ticket_number= data.ticket_number;
						$scope.username = data.username;
						$scope.tmp_password = data.tmp_password;
						if(data.id_management_option == 'another_person'){ $scope.onesha_username_password = true; }else{ $scope.onesha_username_password = false;  }
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
	
	$scope.facility_default_replace = {};
	$scope.other_facilities_not_default = function(){
		$scope.facility_default_replace.selected = undefined;
		$http.get('msimamiziApp/sajili_mtumiaji/facilities_not_default.php').success(function(data){
		$scope.facilities_not_default_data = data;
			if(data.length > 0){ 
				$scope.kuna_facility_nyingine = true;
				$scope.kuna_facility_nyingine_zaidi = 'ndio';
				if(data.length == 1){ $scope.facility_default_replace.selected = $scope.facilities_not_default_data[0]; };			 
			}else{
				$scope.kuna_facility_nyingine = false;
				$scope.kuna_facility_nyingine_zaidi = 'hapana';
			};						
		});	
	};
	$scope.safisha_facility_default_replace = function() {
		$scope.facility_default_replace.selected = undefined;
	};
		
	$scope.facility_delete_reason = {};
	$scope.load_facility_delete_reason = function(){
				$scope.facility_delete_reason.selected = undefined;		  
				$http.get('msimamiziApp/sajili_mtumiaji/facility_delete_reason_API.php').success(function(data){
				$scope.facility_delete_reason_data = data;
				});
	 };	  	  	
	$scope.safisha_facility_delete_reason = function() {
		$scope.facility_delete_reason.selected = undefined;
	};
	
	$scope.deleteMtumiaji = function(id){
		$scope.show_deleting_window = false;
		$scope.show_deleting_reason = false;
		$scope.show_default_selection = false;
		$scope.facility_details(id);
		$scope.other_facilities_not_default();		
		$scope.load_facility_delete_reason();
		$scope.show_delete_confirmation_box();
		$scope.delete_denied = function(){
			$scope.close_delete_confirmation_box();
		};
		$scope.delete_reason = function(){
			$scope.show_deleting_reason = true;			
		};
		$scope.default_selection = function(){
			$scope.show_default_selection = true;
		};			
			$scope.delete_confirmed = function(hidden_id){
				$scope.show_deleting_window = true;
				$scope.deleting_in_progress = true;
				$scope.loaded_successfully = false;
				$scope.show_checkmark = false;
				$scope.show_animated_exclamation_icon = false;
				$scope.submitted_unsuccessfully = false;
				if(($scope.facility_default_replace.selected == undefined ) || ( $scope.facility_default_replace.selected == null)){ $scope.facility_default_replace.selected = []; };
				$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
					data:{'is_facility_mama_selected':$scope.is_facility_mama_selected, 'kuna_facility_nyingine_zaidi':$scope.kuna_facility_nyingine_zaidi, 'facility_replacing_id':$scope.facility_default_replace.selected.id,'facility_delete_reason_details':$scope.facility_delete_reason.selected.facility_delete_reason_details,'id':hidden_id, 'action':'Delete'}
				}).success(function(data){
					$scope.fetchStatus();
					if(data.message == 'Deleted'){
						$scope.fetchData_after_changes();
						if(data.fanya_replacement == 'no'){
						$timeout(function(){ $scope.loaded_successfully = true; $scope.deleting_in_progress = false; $scope.show_checkmark = true; }, 2000);
						}else if(data.fanya_replacement == 'delete_and_replace_and_logout'){
						$timeout(function(){ $scope.loaded_successfully = true; $scope.deleting_in_progress = false; $scope.show_checkmark = true; }, 2000);
						$timeout(function(){ window.location.href='../../index.php'; }, 3000); 						
						}else if(data.fanya_replacement == 'delete_and_logout'){
						$timeout(function(){ $scope.loaded_successfully = true; $scope.deleting_in_progress = false; $scope.show_checkmark = true; }, 2000);
						$timeout(function(){ window.location.href='../accommodation_facilities/index.php'; }, 3000);						
						}						
					}else{					
					$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.deleting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					};
				});
			};
	};
	
	$scope.show_delete_confirmation_box = function(){
		var modal_popup = angular.element('#delete_confirmation_box');
		modal_popup.modal('show');
	};
	$scope.close_delete_confirmation_box = function(){
		var modal_popup = angular.element('#delete_confirmation_box');
		modal_popup.modal('hide');
	};
	
	

////////////////////////////// ASSESSORS ////////////////////////////////////

//Create new assessor
	
	$scope.reset_create_new_assessor = function() {
		$scope.new_assessor_full_name = '';
		$scope.new_assessor_qualification = '';
		$scope.new_assessor_firm = '';
		$scope.new_assessor_mobile_number = '';
		$scope.create_new_assessor_form.$setUntouched();
	};
	
	$scope.form_data = {};
	////$scope.hajarudi_wateja_request_form = false;
	$scope.submit_new_created_assessors_form = function(){
	$scope.safisha_assessors_filter();
	$scope.from_new_created_assessor = false;
		$scope.action_new_assessor = 'insert_new_assessors';
		$scope.show_assessors_confirmation_box();	
		$scope.show_submitting_window = true;
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.submitted_unsuccessfully = false;
		////$scope.hajarudi_wateja_request_form = true;					
				$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert_new_assessor.php",
					data:{					
					//'facility_id':$scope.facility_id,
					'new_assessor_full_name':$scope.new_assessor_full_name,
					'new_assessor_qualification':$scope.new_assessor_qualification,
					'new_assessor_firm':$scope.new_assessor_firm,
					'new_assessor_mobile_number':$scope.new_assessor_mobile_number,						
					'action_new_assessor':$scope.action_new_assessor
					}
				}).success(function(data){
					//$scope.close_assessors_registration_selection_panel();
					////$scope.hajarudi_wateja_request_form = false;
					//var facility_id = data.facility_id;
					//if(data.insert_or_edit == 'edit'){ $scope.from_editing = true;  $scope.from_insert = false; }else{ $scope.from_editing = false;  $scope.from_insert = true; }
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						//Run Syncronously??
						//if( == ){ $scope.load_assessors(); }
						//$scope.load_assessors();
						//$scope.assessor_group_id = data.assessor_group_id;						
						$scope.reset_create_new_assessor();						
						$scope.show_create_new_assessor_form = false;						
						$timeout(function(){ $scope.submitted_successfully = true; $scope.from_new_created_assessor = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
					};
				});
						
		};
	

//End create new assesor

	$scope.fetch_facility_assessors_list_panel = function(){
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_assessors_for_list_panel.php').success(function(data){
			$scope.facility_assessors_list_panel_data = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};

	$scope.show_assessors_list_panel = function(){
		var modal_popup = angular.element('#assessors_list_panel');
		modal_popup.modal('show');
		$scope.fetch_facility_assessors_list_panel();
		//$scope.fetch_assigned_assessors();
		//$scope.fetch_assigned_assessors_per_facility();
	};
	$scope.close_assessors_list_panel = function(){
		$scope.fetchStatus();
		var modal_popup = angular.element('#assessors_list_panel');
		modal_popup.modal('hide');
	};
	
	
	$scope.show_assessors_confirmation_box = function(){
		var modal_popup = angular.element('#assessors_confirmation_box');
		modal_popup.modal('show');
	};
	$scope.close_assessors_confirmation_box = function(){
		var modal_popup = angular.element('#assessors_confirmation_box');
		modal_popup.modal('hide');
	};
	/*	
	$scope.fetch_assigned_assessors = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_assigned_assessors.php').success(function(data){
			$scope.assigned_assessors_data = data;			
		});		
	};
	*/
	
	$scope.fetch_assigned_assessors_per_facility = function(id){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_assigned_assessors_per_facility.php",
			data:{'facility_id':id }
		}).success(function(data){
			//for the dropdown
			$scope.assessor_0_name_check = data[0].assessor_full_name;
			$scope.assessor_1_name_check = data[1].assessor_full_name;
			if((($scope.assessor_0_name_check != null) || ($scope.assessor_0_name_check != '')) && (($scope.assessor_1_name_check == null) || ($scope.assessor_1_name_check == '')))
			{ 
			$scope.assessor_1.selected = data[0];
			}
			else
			{
			$scope.assessor_1.selected = data[1];
			};				
			//$scope.assessor_0.selected = data[0];
			//$scope.assessor_1.selected = data[1];
			$scope.assessor_2.selected = data[2];
			$scope.assessor_3.selected = data[3];
			
			
			//for the list
			var facility_id = id.toString();
			
			//reset to select placeholder
			$scope.assessor_0_name_check = data[0].assessor_full_name;
			$scope.assessor_1_name_check = data[1].assessor_full_name;
			if( (($scope.assessor_0_name_check == null) || ($scope.assessor_0_name_check == '')) && (($scope.assessor_1_name_check == null) || ($scope.assessor_1_name_check == ''))  ) {
				$scope.assessor_1.selected = undefined;
				//$scope.assessor_2.selected = undefined;
				//$scope.assessor_3.selected = undefined;
				var assessor_0_name = '_'+facility_id+'_assessor_0_name';
				var assessor_0_qualification = '_'+facility_id+'_assessor_0_qualification';
				var assessor_0_firm = '_'+facility_id+'_assessor_0_firm';
				var assessor_0_mobile_number = '_'+facility_id+'_assessor_0_mobile_number';
				$scope[assessor_0_name] = '';
				$scope[assessor_0_qualification] = '';
				$scope[assessor_0_firm] = '';
				$scope[assessor_0_mobile_number] = '';
				//delete this??
				$scope.assessor_0_name = '';
				$scope.assessor_0_qualification = '';
				$scope.assessor_0_firm = '';
				$scope.assessor_0_mobile_number = '';
				
				var assessor_1_name = '_'+facility_id+'_assessor_1_name';
				var assessor_1_qualification = '_'+facility_id+'_assessor_1_qualification';
				var assessor_1_firm = '_'+facility_id+'_assessor_1_firm';
				var assessor_1_mobile_number = '_'+facility_id+'_assessor_1_mobile_number';
				$scope[assessor_1_name] = '';
				$scope[assessor_1_qualification] = '';
				$scope[assessor_1_firm] = '';
				$scope[assessor_1_mobile_number] = '';
				//delete this??
				//delete this??
				$scope.assessor_1_name = '';
				$scope.assessor_1_qualification = '';
				$scope.assessor_1_firm = '';
				$scope.assessor_1_mobile_number = '';
			}
			else
			{
				var assessor_0_name = '_'+facility_id+'_assessor_0_name';
				var assessor_0_qualification = '_'+facility_id+'_assessor_0_qualification';
				var assessor_0_firm = '_'+facility_id+'_assessor_0_firm';
				var assessor_0_mobile_number = '_'+facility_id+'_assessor_0_mobile_number';
				$scope[assessor_0_name] = data[0].assessor_full_name;
				$scope[assessor_0_qualification] = data[0].assessor_qualification;
				$scope[assessor_0_firm] = data[0].assessor_firm;
				$scope[assessor_0_mobile_number]  = data[0].username;
				//delete this??
				$scope.assessor_0_name = data[0].assessor_full_name;
				$scope.assessor_0_qualification = data[0].assessor_qualification;
				$scope.assessor_0_firm = data[0].assessor_firm;
				$scope.assessor_0_mobile_number  = data[0].username;
				
				var assessor_1_name = '_'+facility_id+'_assessor_1_name';
				var assessor_1_qualification = '_'+facility_id+'_assessor_1_qualification';
				var assessor_1_firm = '_'+facility_id+'_assessor_1_firm';
				var assessor_1_mobile_number = '_'+facility_id+'_assessor_1_mobile_number';
				$scope[assessor_1_name] = data[1].assessor_full_name;
				$scope[assessor_1_qualification] = data[1].assessor_qualification;
				$scope[assessor_1_firm] = data[1].assessor_firm;
				$scope[assessor_1_mobile_number] = data[1].username;
				//delete this??
				$scope.assessor_1_name = data[1].assessor_full_name;
				$scope.assessor_1_qualification = data[1].assessor_qualification;
				$scope.assessor_1_firm = data[1].assessor_firm;
				$scope.assessor_1_mobile_number = data[1].username;
			};
			if(($scope.assessor_0_name_check == null) || ($scope.assessor_0_name_check == ''))
			{ $scope.assessor_self_self_old_name = 'halipo'; }
			else
			{ $scope.assessor_self_self_old_name = 'lipo'; };
			
			$scope.assessor_2_name_check = data[2].assessor_full_name;
			if(($scope.assessor_2_name_check == null) || ($scope.assessor_2_name_check == '')) {
				$scope.assessor_2.selected = undefined;
				$scope.assessor_3.selected = undefined;
				//from 3 to 1 to clear cached names esp after submitting
				var assessor_2_name = '_'+facility_id+'_assessor_2_name';
				var assessor_2_qualification = '_'+facility_id+'_assessor_2_qualification';
				var assessor_2_firm = '_'+facility_id+'_assessor_2_firm ';
				var assessor_2_mobile_number = '_'+facility_id+'_assessor_2_mobile_number';
				$scope[assessor_2_name] = '';
				$scope[assessor_2_qualification] = '';
				$scope[assessor_2_firm] = '';
				$scope[assessor_2_mobile_number] = '';			
				var assessor_3_name = '_'+facility_id+'_assessor_3_name';
				var assessor_3_qualification = '_'+facility_id+'_assessor_3_qualification';
				var assessor_3_firm = '_'+facility_id+'_assessor_3_firm ';
				var assessor_3_mobile_number = '_'+facility_id+'_assessor_3_mobile_number';
				$scope[assessor_3_name] = '';
				$scope[assessor_3_qualification] = '';
				$scope[assessor_3_firm] = '';
				$scope[assessor_3_mobile_number] = '';
				//delete this?
				$scope.assessor_2_name = '';
				$scope.assessor_2_qualification = '';
				$scope.assessor_2_firm = '';
				$scope.assessor_2_mobile_number = '';
				$scope.assessor_3_name = '';
				$scope.assessor_3_qualification = '';
				$scope.assessor_3_firm = '';
				$scope.assessor_3_mobile_number = '';
				//for deletion when shift/edit from 3 assessors to 1 assessor
				$scope.assessor_2_old_name = 'halipo';							
			}
			else
			{
			//for the list
				var assessor_2_name = '_'+facility_id+'_assessor_2_name';
				var assessor_2_qualification = '_'+facility_id+'_assessor_2_qualification';
				var assessor_2_firm = '_'+facility_id+'_assessor_2_firm';
				var assessor_2_mobile_number = '_'+facility_id+'_assessor_2_mobile_number';
				$scope[assessor_2_name] = data[2].assessor_full_name;
				$scope[assessor_2_qualification] = data[2].assessor_qualification;
				$scope[assessor_2_firm] = data[2].assessor_firm;
				$scope[assessor_2_mobile_number]  = data[2].username;						
			//delete this??
			$scope.assessor_2_name = data[2].assessor_full_name; 			
			$scope.assessor_2_qualification = data[2].assessor_qualification;
			$scope.assessor_2_firm = data[2].assessor_firm;
			$scope.assessor_2_mobile_number = data[2].username;
			
				var assessor_3_name = '_'+facility_id+'_assessor_3_name';
				var assessor_3_qualification = '_'+facility_id+'_assessor_3_qualification';
				var assessor_3_firm = '_'+facility_id+'_assessor_3_firm';
				var assessor_3_mobile_number = '_'+facility_id+'_assessor_3_mobile_number';
				$scope[assessor_3_name] = data[3].assessor_full_name;
				$scope[assessor_3_qualification] = data[3].assessor_qualification;
				$scope[assessor_3_firm] = data[3].assessor_firm;
				$scope[assessor_3_mobile_number] = data[3].username;
			//delete this??
			$scope.assessor_3_name = data[3].assessor_full_name;
			$scope.assessor_3_qualification = data[3].assessor_qualification;
			$scope.assessor_3_firm = data[3].assessor_firm;
			$scope.assessor_3_mobile_number = data[3].username;
			
			//for deletion when shift/edit from 3 assessors to 1 assessor
			$scope.assessor_2_old_name = 'lipo';						
			};
			
			//On edit assessors, SET dropdown assessors filter to previosly selected filter
			if((data[0].assessor_group_id >= 1) && ((data[1].assessor_group_id == null) || (data[1].assessor_group_id == '')))
			{ 
				$scope.assessor_group_id_edit = data[0].assessor_group_id;
			}
			else
			{
				$scope.assessor_group_id_edit = data[1].assessor_group_id;
			};	
		});		
	};
	
	
	$scope.fetch_assigned_assessors_per_facility_edit = function(id){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_assigned_assessors_per_facility.php",
			data:{'facility_id':id }
		}).success(function(data){
			//for the dropdown
			$scope.assessor_0_name_check = data[0].assessor_full_name;
			$scope.assessor_1_name_check = data[1].assessor_full_name;
			if((($scope.assessor_0_name_check != null) || ($scope.assessor_0_name_check != '')) && (($scope.assessor_1_name_check == null) || ($scope.assessor_1_name_check == '')))
			{ 
			$scope.assessor_1.selected = data[0];
			}
			else
			{
			$scope.assessor_1.selected = data[1];
			};				
			//$scope.assessor_0.selected = data[0];
			//$scope.assessor_1.selected = data[1];
			$scope.assessor_2.selected = data[2];
			$scope.assessor_3.selected = data[3];
			
			
			//for the list
			var facility_id = id.toString();
			
			//reset to select placeholder
			$scope.assessor_0_name_check = data[0].assessor_full_name;
			$scope.assessor_1_name_check = data[1].assessor_full_name;
			if( (($scope.assessor_0_name_check == null) || ($scope.assessor_0_name_check == '')) && (($scope.assessor_1_name_check == null) || ($scope.assessor_1_name_check == ''))  ) {
				$scope.assessor_1.selected = undefined;
				//$scope.assessor_2.selected = undefined;
				//$scope.assessor_3.selected = undefined;
				var assessor_0_name = '_'+facility_id+'_assessor_0_name';
				var assessor_0_qualification = '_'+facility_id+'_assessor_0_qualification';
				var assessor_0_firm = '_'+facility_id+'_assessor_0_firm';
				var assessor_0_mobile_number = '_'+facility_id+'_assessor_0_mobile_number';
				$scope[assessor_0_name] = '';
				$scope[assessor_0_qualification] = '';
				$scope[assessor_0_firm] = '';
				$scope[assessor_0_mobile_number] = '';
				//delete this??
				$scope.assessor_0_name = '';
				$scope.assessor_0_qualification = '';
				$scope.assessor_0_firm = '';
				$scope.assessor_0_mobile_number = '';
				
				var assessor_1_name = '_'+facility_id+'_assessor_1_name';
				var assessor_1_qualification = '_'+facility_id+'_assessor_1_qualification';
				var assessor_1_firm = '_'+facility_id+'_assessor_1_firm';
				var assessor_1_mobile_number = '_'+facility_id+'_assessor_1_mobile_number';
				$scope[assessor_1_name] = '';
				$scope[assessor_1_qualification] = '';
				$scope[assessor_1_firm] = '';
				$scope[assessor_1_mobile_number] = '';
				//delete this??
				//delete this??
				$scope.assessor_1_name = '';
				$scope.assessor_1_qualification = '';
				$scope.assessor_1_firm = '';
				$scope.assessor_1_mobile_number = '';
			}
			else
			{
				var assessor_0_name = '_'+facility_id+'_assessor_0_name';
				var assessor_0_qualification = '_'+facility_id+'_assessor_0_qualification';
				var assessor_0_firm = '_'+facility_id+'_assessor_0_firm';
				var assessor_0_mobile_number = '_'+facility_id+'_assessor_0_mobile_number';
				$scope[assessor_0_name] = data[0].assessor_full_name;
				$scope[assessor_0_qualification] = data[0].assessor_qualification;
				$scope[assessor_0_firm] = data[0].assessor_firm;
				$scope[assessor_0_mobile_number]  = data[0].username;
				//delete this??
				$scope.assessor_0_name = data[0].assessor_full_name;
				$scope.assessor_0_qualification = data[0].assessor_qualification;
				$scope.assessor_0_firm = data[0].assessor_firm;
				$scope.assessor_0_mobile_number  = data[0].username;
				
				var assessor_1_name = '_'+facility_id+'_assessor_1_name';
				var assessor_1_qualification = '_'+facility_id+'_assessor_1_qualification';
				var assessor_1_firm = '_'+facility_id+'_assessor_1_firm';
				var assessor_1_mobile_number = '_'+facility_id+'_assessor_1_mobile_number';
				$scope[assessor_1_name] = data[1].assessor_full_name;
				$scope[assessor_1_qualification] = data[1].assessor_qualification;
				$scope[assessor_1_firm] = data[1].assessor_firm;
				$scope[assessor_1_mobile_number] = data[1].username;
				//delete this??
				$scope.assessor_1_name = data[1].assessor_full_name;
				$scope.assessor_1_qualification = data[1].assessor_qualification;
				$scope.assessor_1_firm = data[1].assessor_firm;
				$scope.assessor_1_mobile_number = data[1].username;
			};
			if(($scope.assessor_0_name_check == null) || ($scope.assessor_0_name_check == ''))
			{ $scope.assessor_self_self_old_name = 'halipo'; }
			else
			{ $scope.assessor_self_self_old_name = 'lipo'; };
			
			$scope.assessor_2_name_check = data[2].assessor_full_name;
			if(($scope.assessor_2_name_check == null) || ($scope.assessor_2_name_check == '')) {
				$scope.assessor_2.selected = undefined;
				$scope.assessor_3.selected = undefined;
				//from 3 to 1 to clear cached names esp after submitting
				var assessor_2_name = '_'+facility_id+'_assessor_2_name';
				var assessor_2_qualification = '_'+facility_id+'_assessor_2_qualification';
				var assessor_2_firm = '_'+facility_id+'_assessor_2_firm ';
				var assessor_2_mobile_number = '_'+facility_id+'_assessor_2_mobile_number';
				$scope[assessor_2_name] = '';
				$scope[assessor_2_qualification] = '';
				$scope[assessor_2_firm] = '';
				$scope[assessor_2_mobile_number] = '';			
				var assessor_3_name = '_'+facility_id+'_assessor_3_name';
				var assessor_3_qualification = '_'+facility_id+'_assessor_3_qualification';
				var assessor_3_firm = '_'+facility_id+'_assessor_3_firm ';
				var assessor_3_mobile_number = '_'+facility_id+'_assessor_3_mobile_number';
				$scope[assessor_3_name] = '';
				$scope[assessor_3_qualification] = '';
				$scope[assessor_3_firm] = '';
				$scope[assessor_3_mobile_number] = '';
				//delete this?
				$scope.assessor_2_name = '';
				$scope.assessor_2_qualification = '';
				$scope.assessor_2_firm = '';
				$scope.assessor_2_mobile_number = '';
				$scope.assessor_3_name = '';
				$scope.assessor_3_qualification = '';
				$scope.assessor_3_firm = '';
				$scope.assessor_3_mobile_number = '';
				//for deletion when shift/edit from 3 assessors to 1 assessor
				$scope.assessor_2_old_name = 'halipo';							
			}
			else
			{
			//for the list
				var assessor_2_name = '_'+facility_id+'_assessor_2_name';
				var assessor_2_qualification = '_'+facility_id+'_assessor_2_qualification';
				var assessor_2_firm = '_'+facility_id+'_assessor_2_firm';
				var assessor_2_mobile_number = '_'+facility_id+'_assessor_2_mobile_number';
				$scope[assessor_2_name] = data[2].assessor_full_name;
				$scope[assessor_2_qualification] = data[2].assessor_qualification;
				$scope[assessor_2_firm] = data[2].assessor_firm;
				$scope[assessor_2_mobile_number]  = data[2].username;						
			//delete this??
			$scope.assessor_2_name = data[2].assessor_full_name; 			
			$scope.assessor_2_qualification = data[2].assessor_qualification;
			$scope.assessor_2_firm = data[2].assessor_firm;
			$scope.assessor_2_mobile_number = data[2].username;
			
				var assessor_3_name = '_'+facility_id+'_assessor_3_name';
				var assessor_3_qualification = '_'+facility_id+'_assessor_3_qualification';
				var assessor_3_firm = '_'+facility_id+'_assessor_3_firm';
				var assessor_3_mobile_number = '_'+facility_id+'_assessor_3_mobile_number';
				$scope[assessor_3_name] = data[3].assessor_full_name;
				$scope[assessor_3_qualification] = data[3].assessor_qualification;
				$scope[assessor_3_firm] = data[3].assessor_firm;
				$scope[assessor_3_mobile_number] = data[3].username;
			//delete this??
			$scope.assessor_3_name = data[3].assessor_full_name;
			$scope.assessor_3_qualification = data[3].assessor_qualification;
			$scope.assessor_3_firm = data[3].assessor_firm;
			$scope.assessor_3_mobile_number = data[3].username;
			
			//for deletion when shift/edit from 3 assessors to 1 assessor
			$scope.assessor_2_old_name = 'lipo';						
			};
			
			//On edit assessors, SET dropdown assessors filter to previosly selected filter
			if((data[0].assessor_group_id >= 1) && ((data[1].assessor_group_id == null) || (data[1].assessor_group_id == '')))
			{ 
				$scope.assessor_group_id_edit = data[0].assessor_group_id;
				//Fail to retrieve promises so I use this
				$scope.load_assessors_filter_edit();
			}
			else
			{
				$scope.assessor_group_id_edit = data[1].assessor_group_id;
				//Fail to retrieve promises so I use this
				$scope.load_assessors_filter_edit();
			};	
		});		
	};

	$scope.assign_assessors = function(id){
		
		$scope.show_create_new_assessor_form = false;
		$scope.facility_id = id;
		$scope.assessors_filter.selected = undefined;
		$scope.assessors_data = [];
				
		$scope.fetch_assigned_assessors_per_facility(id);		
		$scope.facility_details(id);		
		$scope.load_assessors_filter();		
				
		$scope.action = 'insert_assigned_assessors';
		$scope.open_assessors_registration_selection_panel();		
	 };
	 
	 $scope.edit_assigned_assessors = function(id){
	 $scope.open_subiri_box();
	 	$scope.show_create_new_assessor_form = false;
		$scope.facility_id = id;
		$scope.action = 'edit_assigned_assessors';			
		$scope.fetch_assigned_assessors_per_facility_edit(id);
			//$scope.load_assessors_filter_edit();				
		$scope.facility_details(id);
		//$scope.close_subiri_box();
		$scope.open_assessors_registration_selection_panel();			
	 };
	 
	$scope.open_assessors_registration_selection_panel = function(){
		var modal_popup = angular.element('#assessors_registration_selection_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessors_registration_selection_panel = function(){
		var modal_popup = angular.element('#assessors_registration_selection_panel');
		modal_popup.modal('hide');
	};
	
	$scope.assessor_1 = {};
	$scope.assessor_2 = {};
	$scope.assessor_3 = {};
	$scope.load_assessors = function(){
	$scope.safisha_assessor_1();
	$scope.safisha_assessor_2();
	$http.post("msimamiziApp/sajili_mtumiaji/fetch_assessors_api.php", {'assessor_group_id':$scope.assessors_filter.selected.assessor_group_id }).success(function(data){
		$scope.assessors_data = data;		
	   });
	};
	$scope.load_assessors_edit = function(){
	$http.post("msimamiziApp/sajili_mtumiaji/fetch_assessors_api.php", {'assessor_group_id':$scope.assessors_filter.selected.assessor_group_id }).success(function(data){
		$scope.assessors_data = data;
		$scope.close_subiri_box(); // from edit_assigned_assessors				
	   });
	};
	$scope.assessors_filter = {};
	$scope.load_assessors_filter = function(){		  
	  $http.get('msimamiziApp/sajili_mtumiaji/fetch_assessors_filter.php').success(function(data){ 
		$scope.assessors_filter_data = data;
		$scope.load_assessors_filter_imemaliza = 'ndio';		
	   });
	};
	
	$scope.load_assessors_filter_edit = function(){		  
	  $http.get('msimamiziApp/sajili_mtumiaji/fetch_assessors_filter.php').success(function(data){ 
		$scope.assessors_filter_data = data;
		var array_id = $scope.assessor_group_id_edit;
		$scope.assessors_filter.selected = data[array_id - 1];
		$scope.load_assessors_edit();					
	   });
	};
	
	$scope.safisha_assessors_filter = function() {
		$scope.assessors_filter.selected = undefined;
		$scope.reset_selected_assessors();
	};			
	$scope.safisha_assessor_1 = function() {
		$scope.assessor_1.selected = undefined;
	};
	$scope.safisha_assessor_2 = function() {
		$scope.assessor_2.selected = undefined;
		$scope.assessor_3.selected = undefined;
	};
	$scope.safisha_assessor_3 = function() {
		$scope.assessor_3.selected = undefined;
	};
	$scope.reset_selected_assessors = function() {
		$scope.assessor_1.selected = undefined;
		$scope.assessor_2.selected = undefined;
		$scope.assessor_3.selected = undefined;
	};
	
	$scope.form_data = {};
	$scope.hajarudi_wateja_request_form = false;
	$scope.submit_assigned_assessors_form = function(){
	$scope.from_new_created_assessor = false;
	if($scope.assessor_2.selected == undefined) { $scope.assessor_2.selected = []; $scope.assessor_3.selected = []; };
		$scope.show_assessors_confirmation_box();		
		$scope.assessors_more_info = function(){
			$scope.show_submitting_window = false;
		};
		$scope.show_submitting_window = true;
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.submitted_unsuccessfully = false;
		$scope.hajarudi_wateja_request_form = true;					
					$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert_assigned_assessors.php",
					data:{					
					'facility_id':$scope.facility_id,
					'assessor_group_id':$scope.assessors_filter.selected.assessor_group_id,
					'assessor_1_mobile_number':$scope.assessor_1.selected.username,
					'assessor_2_mobile_number':$scope.assessor_2.selected.username,
					'assessor_3_mobile_number':$scope.assessor_3.selected.username,
					'assessor_2_old_name':$scope.assessor_2_old_name,
					'assessor_self_self_old_name':$scope.assessor_self_self_old_name,						
					'action':$scope.action
					}
				}).success(function(data){
					$scope.close_assessors_registration_selection_panel();
					$scope.hajarudi_wateja_request_form = false;
					var facility_id = data.facility_id;
					if(data.insert_or_edit == 'edit'){ $scope.from_editing = true;  $scope.from_insert = false; }else{ $scope.from_editing = false;  $scope.from_insert = true; }
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						if(data.assessor_1_username == 'current'){ $scope.assessor_1_username_has_account = true; }else{ $scope.assessor_1_username_has_account = false; }
						if(data.assessor_2_username == 'current'){ $scope.assessor_2_username_has_account = true; }else{ $scope.assessor_2_username_has_account = false; }
						if(data.assessor_3_username == 'current'){ $scope.assessor_3_username_has_account = true; }else{ $scope.assessor_3_username_has_account = false; }
						
						$scope.assessor_1_username = data.assessor_1_username;
						$scope.assessor_1_password = data.assessor_1_password;
						if(data.assessor_2_username != '')
						{
						$scope.show_assessor_credentials = true;
						$scope.assessor_2_username = data.assessor_2_username;
						$scope.assessor_2_password = data.assessor_2_password;
						$scope.assessor_3_username = data.assessor_3_username;
						$scope.assessor_3_password = data.assessor_3_password;
						}else{
						$scope.show_assessor_credentials = false;
						}
						//$scope.fetch_facility_assessors_list_panel();
						$scope.fetch_assigned_assessors_per_facility(facility_id);						
						$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
					};
				});
						
		};
		
		
	
	
////////////////////// ESSENTIAL ITEMS ////////////////////////////////////// 

	$scope.show_self_assessment = function(){
		var modal_popup = angular.element('#self_assessment_panel');
		modal_popup.modal('show');
		$scope.fetch_self_assessment();
	};
	$scope.close_self_assessment = function(){
		var modal_popup = angular.element('#self_assessment_panel');
		modal_popup.modal('hide');
	};
	$scope.fetch_self_assessment = function(){
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_self_assessment.php').success(function(data){
			$scope.self_assessment_data = data;
			/////////////////$scope.close_sajili();			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	$scope.on_edit_fetch_self_assessment = function(){
	//$scope.fetch_trading_name();
	//$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_self_assessment.php').success(function(data){
			$scope.self_assessment_data = data;			
			//$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	
	$scope.enter_essential_items = function(id){
	$scope.show_asteric = '';		
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'id':id, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.trading_name = data.trading_name;
			$scope.tin = data.tin;			
			$scope.facility_name = data.facility_name;
			$scope.physical_address = data.physical_address;
			$scope.postal_address = data.postal_address;
		    $scope.simu_landline = data.simu_landline;
		    $scope.barua_pepe = data.barua_pepe;
			$scope.username = data.username;
			$scope.group_admin_username = data.group_admin_username;
			$scope.facility_id = data.id;
			if((data.essential_item_score >= 0) && (data.essential_items_id > 0))
			{ 
			$scope.essential_items_id = data.essential_items_id; 
			$scope.essential_item_score = data.essential_item_score;			
			$scope.action = 'edit_record';
					$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/fetch_essential_items.php",
					data:{'essential_items_id':$scope.essential_items_id}
					}).success(function(data){
						// ITEM 1
						if(data.item_1_a_i > 0){ $scope.item_1_a_i = data.item_1_a_i; $scope.item_1_a_i_yes = true; $scope.item_1_a_i_no = false; } else if(data.item_1_a_i == 0){ $scope.item_1_a_i = data.item_1_a_i; $scope.item_1_a_i_yes = false; $scope.item_1_a_i_no = true; }else{ $scope.item_1_a_i = ''; $scope.item_1_a_i_yes = false; $scope.item_1_a_i_no = false; }
						if(data.item_1_a_ii > 0){ $scope.item_1_a_ii = data.item_1_a_ii; $scope.item_1_a_ii_yes = true; $scope.item_1_a_ii_no = false; } else if(data.item_1_a_ii == 0){ $scope.item_1_a_ii = data.item_1_a_ii; $scope.item_1_a_ii_yes = false; $scope.item_1_a_ii_no = true; }else{ $scope.item_1_a_ii = ''; $scope.item_1_a_ii_yes = false; $scope.item_1_a_ii_no = false; }
						if(data.item_1_b_i > 0){ $scope.item_1_b_i = data.item_1_b_i; $scope.item_1_b_i_yes = true; $scope.item_1_b_i_no = false; } else if(data.item_1_b_i == 0){ $scope.item_1_b_i = data.item_1_b_i; $scope.item_1_b_i_yes = false; $scope.item_1_b_i_no = true; }else{ $scope.item_1_b_i = ''; $scope.item_1_b_i_yes = false; $scope.item_1_b_i_no = false; }
						if(data.item_1_b_ii > 0){ $scope.item_1_b_ii = data.item_1_b_ii; $scope.item_1_b_ii_yes = true; $scope.item_1_b_ii_no = false; } else if(data.item_1_b_ii == 0){ $scope.item_1_b_ii = data.item_1_b_ii; $scope.item_1_b_ii_yes = false; $scope.item_1_b_ii_no = true; }else{ $scope.item_1_b_ii = ''; $scope.item_1_b_ii_yes = false; $scope.item_1_b_ii_no = false; }
						$scope.item_1_text = data.item_1_text;
						//ITEM 2
						if(data.item_2_i > 0){ $scope.item_2_i = data.item_2_i; $scope.item_2_i_yes = true; $scope.item_2_i_no = false; } else if(data.item_2_i == 0){ $scope.item_2_i = data.item_2_i; $scope.item_2_i_yes = false; $scope.item_2_i_no = true; }else{ $scope.item_2_i = ''; $scope.item_2_i_yes = false; $scope.item_2_i_no = false; }
						if(data.item_2_ii > 0){ $scope.item_2_ii = data.item_2_ii; $scope.item_2_ii_yes = true; $scope.item_2_ii_no = false; } else if(data.item_2_ii == 0){ $scope.item_2_ii = data.item_2_ii; $scope.item_2_ii_yes = false; $scope.item_2_ii_no = true; }else{ $scope.item_2_ii = ''; $scope.item_2_ii_yes = false; $scope.item_2_ii_no = false; }
						$scope.item_2_text = data.item_2_text;
						//ITEM 3
						if(data.item_3_i > 0){ $scope.item_3_i = data.item_3_i; $scope.item_3_i_yes = true; $scope.item_3_i_no = false; } else if(data.item_3_i == 0){ $scope.item_3_i = data.item_3_i; $scope.item_3_i_yes = false; $scope.item_3_i_no = true; }else{ $scope.item_3_i = ''; $scope.item_3_i_yes = false; $scope.item_3_i_no = false; }
						if(data.item_3_ii > 0){ $scope.item_3_ii = data.item_3_ii; $scope.item_3_ii_yes = true; $scope.item_3_ii_no = false; } else if(data.item_3_ii == 0){ $scope.item_3_ii = data.item_3_ii; $scope.item_3_ii_yes = false; $scope.item_3_ii_no = true; }else{ $scope.item_3_ii = ''; $scope.item_3_ii_yes = false; $scope.item_3_ii_no = false; }
						$scope.item_3_text = data.item_3_text;
						//ITEM 4
						if(data.item_4_i > 0){ $scope.item_4_i = data.item_4_i; $scope.item_4_i_yes = true; $scope.item_4_i_no = false; } else if(data.item_4_i == 0){ $scope.item_4_i = data.item_4_i; $scope.item_4_i_yes = false; $scope.item_4_i_no = true; }else{ $scope.item_4_i = ''; $scope.item_4_i_yes = false; $scope.item_4_i_no = false; }
						if(data.item_4_ii > 0){ $scope.item_4_ii = data.item_4_ii; $scope.item_4_ii_yes = true; $scope.item_4_ii_no = false; } else if(data.item_4_ii == 0){ $scope.item_4_ii = data.item_4_ii; $scope.item_4_ii_yes = false; $scope.item_4_ii_no = true; }else{ $scope.item_4_ii = ''; $scope.item_4_ii_yes = false; $scope.item_4_ii_no = false; }
						if(data.item_4_iii > 0){ $scope.item_4_iii = data.item_4_iii; $scope.item_4_iii_yes = true; $scope.item_4_iii_no = false; } else if(data.item_4_iii == 0){ $scope.item_4_iii = data.item_4_iii; $scope.item_4_iii_yes = false; $scope.item_4_iii_no = true; }else{ $scope.item_4_iii = ''; $scope.item_4_iii_yes = false; $scope.item_4_iii_no = false; }
						$scope.item_4_text = data.item_4_text;
						//ITEM 5
						if(data.item_5_i > 0){ $scope.item_5_i = data.item_5_i; $scope.item_5_i_yes = true; $scope.item_5_i_no = false; } else if(data.item_5_i == 0){ $scope.item_5_i = data.item_5_i; $scope.item_5_i_yes = false; $scope.item_5_i_no = true; }else{ $scope.item_5_i = ''; $scope.item_5_i_yes = false; $scope.item_5_i_no = false; }
						if(data.item_5_ii > 0){ $scope.item_5_ii = data.item_5_ii; $scope.item_5_ii_yes = true; $scope.item_5_ii_no = false; } else if(data.item_5_ii == 0){ $scope.item_5_ii = data.item_5_ii; $scope.item_5_ii_yes = false; $scope.item_5_ii_no = true; }else{ $scope.item_5_ii = ''; $scope.item_5_ii_yes = false; $scope.item_5_ii_no = false; }
						if(data.item_5_iii > 0){ $scope.item_5_iii = data.item_5_iii; $scope.item_5_iii_yes = true; $scope.item_5_iii_no = false; } else if(data.item_5_iii == 0){ $scope.item_5_iii = data.item_5_iii; $scope.item_5_iii_yes = false; $scope.item_5_iii_no = true; }else{ $scope.item_5_iii = ''; $scope.item_5_iii_yes = false; $scope.item_5_iii_no = false; }
						$scope.item_5_text = data.item_5_text;
						//ITEM 6
						if(data.item_6_i > 0){ $scope.item_6_i = data.item_6_i; $scope.item_6_i_yes = true; $scope.item_6_i_no = false; } else if(data.item_6_i == 0){ $scope.item_6_i = data.item_6_i; $scope.item_6_i_yes = false; $scope.item_6_i_no = true; }else{ $scope.item_6_i = ''; $scope.item_6_i_yes = false; $scope.item_6_i_no = false; }
						if(data.item_6_ii > 0){ $scope.item_6_ii = data.item_6_ii; $scope.item_6_ii_yes = true; $scope.item_6_ii_no = false; } else if(data.item_6_ii == 0){ $scope.item_6_ii = data.item_6_ii; $scope.item_6_ii_yes = false; $scope.item_6_ii_no = true; }else{ $scope.item_6_ii = ''; $scope.item_6_ii_yes = false; $scope.item_6_ii_no = false; }
						if(data.item_6_iii > 0){ $scope.item_6_iii = data.item_6_iii; $scope.item_6_iii_yes = true; $scope.item_6_iii_no = false; } else if(data.item_6_iii == 0){ $scope.item_6_iii = data.item_6_iii; $scope.item_6_iii_yes = false; $scope.item_6_iii_no = true; }else{ $scope.item_6_iii = ''; $scope.item_6_iii_yes = false; $scope.item_6_iii_no = false; }
						$scope.item_6_text = data.item_6_text;
						//ITEM 7
						if(data.item_7_i > 0){ $scope.item_7_i = data.item_7_i; $scope.item_7_i_yes = true; $scope.item_7_i_no = false; } else if(data.item_7_i == 0){ $scope.item_7_i = data.item_7_i; $scope.item_7_i_yes = false; $scope.item_7_i_no = true; }else{ $scope.item_7_i = ''; $scope.item_7_i_yes = false; $scope.item_7_i_no = false; }
						if(data.item_7_ii > 0){ $scope.item_7_ii = data.item_7_ii; $scope.item_7_ii_yes = true; $scope.item_7_ii_no = false; } else if(data.item_7_ii == 0){ $scope.item_7_ii = data.item_7_ii; $scope.item_7_ii_yes = false; $scope.item_7_ii_no = true; }else{ $scope.item_7_ii = ''; $scope.item_7_ii_yes = false; $scope.item_7_ii_no = false; }
						if(data.item_7_iii > 0){ $scope.item_7_iii = data.item_7_iii; $scope.item_7_iii_yes = true; $scope.item_7_iii_no = false; } else if(data.item_7_iii == 0){ $scope.item_7_iii = data.item_7_iii; $scope.item_7_iii_yes = false; $scope.item_7_iii_no = true; }else{ $scope.item_7_iii = ''; $scope.item_7_iii_yes = false; $scope.item_7_iii_no = false; }
						$scope.item_7_text = data.item_7_text;
						//ITEM 8
						if(data.item_8_i > 0){ $scope.item_8_i = data.item_8_i; $scope.item_8_i_yes = true; $scope.item_8_i_no = false; } else if(data.item_8_i == 0){ $scope.item_8_i = data.item_8_i; $scope.item_8_i_yes = false; $scope.item_8_i_no = true; }else{ $scope.item_8_i = ''; $scope.item_8_i_yes = false; $scope.item_8_i_no = false; }
						if(data.item_8_ii > 0){ $scope.item_8_ii = data.item_8_ii; $scope.item_8_ii_yes = true; $scope.item_8_ii_no = false; } else if(data.item_8_ii == 0){ $scope.item_8_ii = data.item_8_ii; $scope.item_8_ii_yes = false; $scope.item_8_ii_no = true; }else{ $scope.item_8_ii = ''; $scope.item_8_ii_yes = false; $scope.item_8_ii_no = false; }
						if(data.item_8_iii > 0){ $scope.item_8_iii = data.item_8_iii; $scope.item_8_iii_yes = true; $scope.item_8_iii_no = false; } else if(data.item_8_iii == 0){ $scope.item_8_iii = data.item_8_iii; $scope.item_8_iii_yes = false; $scope.item_8_iii_no = true; }else{ $scope.item_8_iii = ''; $scope.item_8_iii_yes = false; $scope.item_8_iii_no = false; }
						$scope.item_8_text = data.item_8_text;
						//ITEM 9
						if(data.item_9_i > 0){ $scope.item_9_i = data.item_9_i; $scope.item_9_i_yes = true; $scope.item_9_i_no = false; } else if(data.item_9_i == 0){ $scope.item_9_i = data.item_9_i; $scope.item_9_i_yes = false; $scope.item_9_i_no = true; }else{ $scope.item_9_i = ''; $scope.item_9_i_yes = false; $scope.item_9_i_no = false; }
						if(data.item_9_ii > 0){ $scope.item_9_ii = data.item_9_ii; $scope.item_9_ii_yes = true; $scope.item_9_ii_no = false; } else if(data.item_9_ii == 0){ $scope.item_9_ii = data.item_9_ii; $scope.item_9_ii_yes = false; $scope.item_9_ii_no = true; }else{ $scope.item_9_ii = ''; $scope.item_9_ii_yes = false; $scope.item_9_ii_no = false; }
						if(data.item_9_iii > 0){ $scope.item_9_iii = data.item_9_iii; $scope.item_9_iii_yes = true; $scope.item_9_iii_no = false; } else if(data.item_9_iii == 0){ $scope.item_9_iii = data.item_9_iii; $scope.item_9_iii_yes = false; $scope.item_9_iii_no = true; }else{ $scope.item_9_iii = ''; $scope.item_9_iii_yes = false; $scope.item_9_iii_no = false; }
						$scope.item_9_text = data.item_9_text;
						//ITEM 10
						if(data.item_10_i > 0){ $scope.item_10_i = data.item_10_i; $scope.item_10_i_yes = true; $scope.item_10_i_no = false; } else if(data.item_10_i == 0){ $scope.item_10_i = data.item_10_i; $scope.item_10_i_yes = false; $scope.item_10_i_no = true; }else{ $scope.item_10_i = ''; $scope.item_10_i_yes = false; $scope.item_10_i_no = false; }
						if(data.item_10_ii > 0){ $scope.item_10_ii = data.item_10_ii; $scope.item_10_ii_yes = true; $scope.item_10_ii_no = false; } else if(data.item_10_ii == 0){ $scope.item_10_ii = data.item_10_ii; $scope.item_10_ii_yes = false; $scope.item_10_ii_no = true; }else{ $scope.item_10_ii = ''; $scope.item_10_ii_yes = false; $scope.item_10_ii_no = false; }
						if(data.item_10_iii > 0){ $scope.item_10_iii = data.item_10_iii; $scope.item_10_iii_yes = true; $scope.item_10_iii_no = false; } else if(data.item_10_iii == 0){ $scope.item_10_iii = data.item_10_iii; $scope.item_10_iii_yes = false; $scope.item_10_iii_no = true; }else{ $scope.item_10_iii = ''; $scope.item_10_iii_yes = false; $scope.item_10_iii_no = false; }
						$scope.item_10_text = data.item_10_text;
						//ITEM 11
						if(data.item_11_i > 0){ $scope.item_11_i = data.item_11_i; $scope.item_11_i_yes = true; $scope.item_11_i_no = false; } else if(data.item_11_i == 0){ $scope.item_11_i = data.item_11_i; $scope.item_11_i_yes = false; $scope.item_11_i_no = true; }else{ $scope.item_11_i = ''; $scope.item_11_i_yes = false; $scope.item_11_i_no = false; }
						if(data.item_11_ii > 0){ $scope.item_11_ii = data.item_11_ii; $scope.item_11_ii_yes = true; $scope.item_11_ii_no = false; } else if(data.item_11_ii == 0){ $scope.item_11_ii = data.item_11_ii; $scope.item_11_ii_yes = false; $scope.item_11_ii_no = true; }else{ $scope.item_11_ii = ''; $scope.item_11_ii_yes = false; $scope.item_11_ii_no = false; }
						$scope.item_11_text = data.item_11_text;
						//ITEM 12
						if(data.item_12_i > 0){ $scope.item_12_i = data.item_12_i; $scope.item_12_i_yes = true; $scope.item_12_i_no = false; } else if(data.item_12_i == 0){ $scope.item_12_i = data.item_12_i; $scope.item_12_i_yes = false; $scope.item_12_i_no = true; }else{ $scope.item_12_i = ''; $scope.item_12_i_yes = false; $scope.item_12_i_no = false; }
						if(data.item_12_ii > 0){ $scope.item_12_ii = data.item_12_ii; $scope.item_12_ii_yes = true; $scope.item_12_ii_no = false; } else if(data.item_12_ii == 0){ $scope.item_12_ii = data.item_12_ii; $scope.item_12_ii_yes = false; $scope.item_12_ii_no = true; }else{ $scope.item_12_ii = ''; $scope.item_12_ii_yes = false; $scope.item_12_ii_no = false; }
						if(data.item_12_iii > 0){ $scope.item_12_iii = data.item_12_iii; $scope.item_12_iii_yes = true; $scope.item_12_iii_no = false; } else if(data.item_12_iii == 0){ $scope.item_12_iii = data.item_12_iii; $scope.item_12_iii_yes = false; $scope.item_12_iii_no = true; }else{ $scope.item_12_iii = ''; $scope.item_12_iii_yes = false; $scope.item_12_iii_no = false; }
						$scope.item_12_text = data.item_12_text;
						//ITEM 13
						if(data.item_13_i > 0){ $scope.item_13_i = data.item_13_i; $scope.item_13_i_yes = true; $scope.item_13_i_no = false; } else if(data.item_13_i == 0){ $scope.item_13_i = data.item_13_i; $scope.item_13_i_yes = false; $scope.item_13_i_no = true; }else{ $scope.item_13_i = ''; $scope.item_13_i_yes = false; $scope.item_13_i_no = false; }
						if(data.item_13_ii > 0){ $scope.item_13_ii = data.item_13_ii; $scope.item_13_ii_yes = true; $scope.item_13_ii_no = false; } else if(data.item_13_ii == 0){ $scope.item_13_ii = data.item_13_ii; $scope.item_13_ii_yes = false; $scope.item_13_ii_no = true; }else{ $scope.item_13_ii = ''; $scope.item_13_ii_yes = false; $scope.item_13_ii_no = false; }
						if(data.item_13_iii > 0){ $scope.item_13_iii = data.item_13_iii; $scope.item_13_iii_yes = true; $scope.item_13_iii_no = false; } else if(data.item_13_iii == 0){ $scope.item_13_iii = data.item_13_iii; $scope.item_13_iii_yes = false; $scope.item_13_iii_no = true; }else{ $scope.item_13_iii = ''; $scope.item_13_iii_yes = false; $scope.item_13_iii_no = false; }
						$scope.item_13_text = data.item_13_text;
						//ITEM 14
						if(data.item_14_i > 0){ $scope.item_14_i = data.item_14_i; $scope.item_14_i_yes = true; $scope.item_14_i_no = false; } else if(data.item_14_i == 0){ $scope.item_14_i = data.item_14_i; $scope.item_14_i_yes = false; $scope.item_14_i_no = true; }else{ $scope.item_14_i = ''; $scope.item_14_i_yes = false; $scope.item_14_i_no = false; }
						if(data.item_14_ii > 0){ $scope.item_14_ii = data.item_14_ii; $scope.item_14_ii_yes = true; $scope.item_14_ii_no = false; } else if(data.item_14_ii == 0){ $scope.item_14_ii = data.item_14_ii; $scope.item_14_ii_yes = false; $scope.item_14_ii_no = true; }else{ $scope.item_14_ii = ''; $scope.item_14_ii_yes = false; $scope.item_14_ii_no = false; }
						if(data.item_14_iii > 0){ $scope.item_14_iii = data.item_14_iii; $scope.item_14_iii_yes = true; $scope.item_14_iii_no = false; } else if(data.item_14_iii == 0){ $scope.item_14_iii = data.item_14_iii; $scope.item_14_iii_yes = false; $scope.item_14_iii_no = true; }else{ $scope.item_14_iii = ''; $scope.item_14_iii_yes = false; $scope.item_14_iii_no = false; }
						$scope.item_14_text = data.item_14_text;
						//ITEM 15
						if(data.item_15_i > 0){ $scope.item_15_i = data.item_15_i; $scope.item_15_i_yes = true; $scope.item_15_i_no = false; } else if(data.item_15_i == 0){ $scope.item_15_i = data.item_15_i; $scope.item_15_i_yes = false; $scope.item_15_i_no = true; }else{ $scope.item_15_i = ''; $scope.item_15_i_yes = false; $scope.item_15_i_no = false; }
						if(data.item_15_ii > 0){ $scope.item_15_ii = data.item_15_ii; $scope.item_15_ii_yes = true; $scope.item_15_ii_no = false; } else if(data.item_15_ii == 0){ $scope.item_15_ii = data.item_15_ii; $scope.item_15_ii_yes = false; $scope.item_15_ii_no = true; }else{ $scope.item_15_ii = ''; $scope.item_15_ii_yes = false; $scope.item_15_ii_no = false; }
						if(data.item_15_iii > 0){ $scope.item_15_iii = data.item_15_iii; $scope.item_15_iii_yes = true; $scope.item_15_iii_no = false; } else if(data.item_15_iii == 0){ $scope.item_15_iii = data.item_15_iii; $scope.item_15_iii_yes = false; $scope.item_15_iii_no = true; }else{ $scope.item_15_iii = ''; $scope.item_15_iii_yes = false; $scope.item_15_iii_no = false; }
						$scope.item_15_text = data.item_15_text;
						//ITEM 16
						if(data.item_16_i > 0){ $scope.item_16_i = data.item_16_i; $scope.item_16_i_yes = true; $scope.item_16_i_no = false; } else if(data.item_16_i == 0){ $scope.item_16_i = data.item_16_i; $scope.item_16_i_yes = false; $scope.item_16_i_no = true; }else{ $scope.item_16_i = ''; $scope.item_16_i_yes = false; $scope.item_16_i_no = false; }
						if(data.item_16_ii > 0){ $scope.item_16_ii = data.item_16_ii; $scope.item_16_ii_yes = true; $scope.item_16_ii_no = false; } else if(data.item_16_ii == 0){ $scope.item_16_ii = data.item_16_ii; $scope.item_16_ii_yes = false; $scope.item_16_ii_no = true; }else{ $scope.item_16_ii = ''; $scope.item_16_ii_yes = false; $scope.item_16_ii_no = false; }
						$scope.item_16_text = data.item_16_text;
						//ITEM 17
						if(data.item_17_i > 0){ $scope.item_17_i = data.item_17_i; $scope.item_17_i_yes = true; $scope.item_17_i_no = false; } else if(data.item_17_i == 0){ $scope.item_17_i = data.item_17_i; $scope.item_17_i_yes = false; $scope.item_17_i_no = true; }else{ $scope.item_17_i = ''; $scope.item_17_i_yes = false; $scope.item_17_i_no = false; }
						if(data.item_17_ii > 0){ $scope.item_17_ii = data.item_17_ii; $scope.item_17_ii_yes = true; $scope.item_17_ii_no = false; } else if(data.item_17_ii == 0){ $scope.item_17_ii = data.item_17_ii; $scope.item_17_ii_yes = false; $scope.item_17_ii_no = true; }else{ $scope.item_17_ii = ''; $scope.item_17_ii_yes = false; $scope.item_17_ii_no = false; }
						if(data.item_17_iii > 0){ $scope.item_17_iii = data.item_17_iii; $scope.item_17_iii_yes = true; $scope.item_17_iii_no = false; } else if(data.item_17_iii == 0){ $scope.item_17_iii = data.item_17_iii; $scope.item_17_iii_yes = false; $scope.item_17_iii_no = true; }else{ $scope.item_17_iii = ''; $scope.item_17_iii_yes = false; $scope.item_17_iii_no = false; }
						$scope.item_17_text = data.item_17_text;
						//ITEM 18
						if(data.item_18_i > 0){ $scope.item_18_i = data.item_18_i; $scope.item_18_i_yes = true; $scope.item_18_i_no = false; } else if(data.item_18_i == 0){ $scope.item_18_i = data.item_18_i; $scope.item_18_i_yes = false; $scope.item_18_i_no = true; }else{ $scope.item_18_i = ''; $scope.item_18_i_yes = false; $scope.item_18_i_no = false; }
						if(data.item_18_ii > 0){ $scope.item_18_ii = data.item_18_ii; $scope.item_18_ii_yes = true; $scope.item_18_ii_no = false; } else if(data.item_18_ii == 0){ $scope.item_18_ii = data.item_18_ii; $scope.item_18_ii_yes = false; $scope.item_18_ii_no = true; }else{ $scope.item_18_ii = ''; $scope.item_18_ii_yes = false; $scope.item_18_ii_no = false; }
						if(data.item_18_iii > 0){ $scope.item_18_iii = data.item_18_iii; $scope.item_18_iii_yes = true; $scope.item_18_iii_no = false; } else if(data.item_18_iii == 0){ $scope.item_18_iii = data.item_18_iii; $scope.item_18_iii_yes = false; $scope.item_18_iii_no = true; }else{ $scope.item_18_iii = ''; $scope.item_18_iii_yes = false; $scope.item_18_iii_no = false; }
						$scope.item_18_text = data.item_18_text;
						//ITEM 19
						if(data.item_19_i > 0){ $scope.item_19_i = data.item_19_i; $scope.item_19_i_yes = true; $scope.item_19_i_no = false; } else if(data.item_19_i == 0){ $scope.item_19_i = data.item_19_i; $scope.item_19_i_yes = false; $scope.item_19_i_no = true; }else{ $scope.item_19_i = ''; $scope.item_19_i_yes = false; $scope.item_19_i_no = false; }
						if(data.item_19_ii > 0){ $scope.item_19_ii = data.item_19_ii; $scope.item_19_ii_yes = true; $scope.item_19_ii_no = false; } else if(data.item_19_ii == 0){ $scope.item_19_ii = data.item_19_ii; $scope.item_19_ii_yes = false; $scope.item_19_ii_no = true; }else{ $scope.item_19_ii = ''; $scope.item_19_ii_yes = false; $scope.item_19_ii_no = false; }
						if(data.item_19_iii > 0){ $scope.item_19_iii = data.item_19_iii; $scope.item_19_iii_yes = true; $scope.item_19_iii_no = false; } else if(data.item_19_iii == 0){ $scope.item_19_iii = data.item_19_iii; $scope.item_19_iii_yes = false; $scope.item_19_iii_no = true; }else{ $scope.item_19_iii = ''; $scope.item_19_iii_yes = false; $scope.item_19_iii_no = false; }
						$scope.item_19_text = data.item_19_text;
						//ITEM 20
						if(data.item_20_i > 0){ $scope.item_20_i = data.item_20_i; $scope.item_20_i_yes = true; $scope.item_20_i_no = false; } else if(data.item_20_i == 0){ $scope.item_20_i = data.item_20_i; $scope.item_20_i_yes = false; $scope.item_20_i_no = true; }else{ $scope.item_20_i = ''; $scope.item_20_i_yes = false; $scope.item_20_i_no = false; }
						if(data.item_20_ii > 0){ $scope.item_20_ii = data.item_20_ii; $scope.item_20_ii_yes = true; $scope.item_20_ii_no = false; } else if(data.item_20_ii == 0){ $scope.item_20_ii = data.item_20_ii; $scope.item_20_ii_yes = false; $scope.item_20_ii_no = true; }else{ $scope.item_20_ii = ''; $scope.item_20_ii_yes = false; $scope.item_20_ii_no = false; }
						if(data.item_20_iii > 0){ $scope.item_20_iii = data.item_20_iii; $scope.item_20_iii_yes = true; $scope.item_20_iii_no = false; } else if(data.item_20_iii == 0){ $scope.item_20_iii = data.item_20_iii; $scope.item_20_iii_yes = false; $scope.item_20_iii_no = true; }else{ $scope.item_20_iii = ''; $scope.item_20_iii_yes = false; $scope.item_20_iii_no = false; }
						$scope.item_20_text = data.item_20_text;
						//ITEM 21
						if(data.item_21_i > 0){ $scope.item_21_i = data.item_21_i; $scope.item_21_i_yes = true; $scope.item_21_i_no = false; } else if(data.item_21_i == 0){ $scope.item_21_i = data.item_21_i; $scope.item_21_i_yes = false; $scope.item_21_i_no = true; }else{ $scope.item_21_i = ''; $scope.item_21_i_yes = false; $scope.item_21_i_no = false; }
						if(data.item_21_ii > 0){ $scope.item_21_ii = data.item_21_ii; $scope.item_21_ii_yes = true; $scope.item_21_ii_no = false; } else if(data.item_21_ii == 0){ $scope.item_21_ii = data.item_21_ii; $scope.item_21_ii_yes = false; $scope.item_21_ii_no = true; }else{ $scope.item_21_ii = ''; $scope.item_21_ii_yes = false; $scope.item_21_ii_no = false; }
						$scope.item_21_text = data.item_21_text;
						//ITEM 22
						if(data.item_22_i > 0){ $scope.item_22_i = data.item_22_i; $scope.item_22_i_yes = true; $scope.item_22_i_no = false; } else if(data.item_22_i == 0){ $scope.item_22_i = data.item_22_i; $scope.item_22_i_yes = false; $scope.item_22_i_no = true; }else{ $scope.item_22_i = ''; $scope.item_22_i_yes = false; $scope.item_22_i_no = false; }
						if(data.item_22_ii > 0){ $scope.item_22_ii = data.item_22_ii; $scope.item_22_ii_yes = true; $scope.item_22_ii_no = false; } else if(data.item_22_ii == 0){ $scope.item_22_ii = data.item_22_ii; $scope.item_22_ii_yes = false; $scope.item_22_ii_no = true; }else{ $scope.item_22_ii = ''; $scope.item_22_ii_yes = false; $scope.item_22_ii_no = false; }
						$scope.item_22_text = data.item_22_text;
						
					});			
			}else{
			$scope.essential_item_score = 0; 
			$scope.action = 'insert_record';
			};
			
			$scope.open_essential_items_entry_form();
		});				
	 };
	 
	$scope.open_essential_items_entry_form = function(){
		var modal_popup = angular.element('#essential_items_entry_form');
		modal_popup.modal('show');
	};
	$scope.close_essential_items_entry_form = function(){	
		var modal_popup = angular.element('#essential_items_entry_form');
		modal_popup.modal('hide');
	};		
	$scope.check_for_essential_items_entry_form_changes = function(){
		if($scope.show_asteric == '*'){ $scope.essential_items_form_changes = true; $scope.open_save_changes(); }else{ $scope.close_essential_items_entry_form(); };
	};
	
	$scope.open_save_changes = function(){
		var modal_popup = angular.element('#save_changes');
		modal_popup.modal('show');
	};
	$scope.close_save_changes = function(){
	$scope.essential_items_form_changes = false;
	$scope.show_asteric = '';
	$scope.assessment_town_hotel_form_changes = false;
	$scope.show_asteric_town_hotel = '';
	$scope.assessment_vacation_hotel_form_changes = false;
	$scope.show_asteric_vacation_hotel = '';
	$scope.assessment_lodge_form_changes = false;
	$scope.show_asteric_lodge = '';
	$scope.assessment_apartment_form_changes = false;
	$scope.show_asteric_apartment = '';
	$scope.assessment_motel_form_changes = false;
	$scope.show_asteric_motel = '';
		var modal_popup = angular.element('#save_changes');
		modal_popup.modal('hide');
	};
		
	$scope.save_and_exit= function(){
	$scope.from_save = 'save_and_exit';
	$scope.submit_essential_items_form();
	};
	$scope.close_without_save= function(){
	$scope.close_essential_items_entry_form();
	$scope.close_save_changes();
	};

	
	$scope.submit_essential_items_form = function(){
		if($scope.from_save == 'save_and_exit') { $scope.close_save_changes(); }else{ $scope.from_save = ''; };		
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.submitted_unsuccessfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.show_funika_kurasa_with_status();
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert_essential_items.php",
			data:{					
				'facility_id':$scope.facility_id,
				'essential_items_id':$scope.essential_items_id,
				'essential_item_score':$scope.essential_item_score,
				//ITEM 1
				'item_1_a_i':$scope.item_1_a_i,
				'item_1_a_ii':$scope.item_1_a_ii,
				'item_1_b_i':$scope.item_1_b_i,
				'item_1_b_ii':$scope.item_1_b_ii,
				'item_1_text':$scope.item_1_text,
				//ITEM 2
				'item_2_i':$scope.item_2_i,
				'item_2_ii':$scope.item_2_ii,
				'item_2_text':$scope.item_2_text,
				//ITEM 3
				'item_3_i':$scope.item_3_i,
				'item_3_ii':$scope.item_3_ii,
				'item_3_text':$scope.item_3_text,
				//ITEM 4
				'item_4_i':$scope.item_4_i,
				'item_4_ii':$scope.item_4_ii,
				'item_4_iii':$scope.item_4_iii,
				'item_4_text':$scope.item_4_text,
				//ITEM 5
				'item_5_i':$scope.item_5_i,
				'item_5_ii':$scope.item_5_ii,
				'item_5_iii':$scope.item_5_iii,
				'item_5_text':$scope.item_5_text,
				//ITEM 6
				'item_6_i':$scope.item_6_i,
				'item_6_ii':$scope.item_6_ii,
				'item_6_iii':$scope.item_6_iii,
				'item_6_text':$scope.item_6_text,
				//ITEM 7
				'item_7_i':$scope.item_7_i,
				'item_7_ii':$scope.item_7_ii,
				'item_7_iii':$scope.item_7_iii,
				'item_7_text':$scope.item_7_text,
				//ITEM 8
				'item_8_i':$scope.item_8_i,
				'item_8_ii':$scope.item_8_ii,
				'item_8_iii':$scope.item_8_iii,
				'item_8_text':$scope.item_8_text,
				//ITEM 9
				'item_9_i':$scope.item_9_i,
				'item_9_ii':$scope.item_9_ii,
				'item_9_iii':$scope.item_9_iii,
				'item_9_text':$scope.item_9_text,
				//ITEM 10
				'item_10_i':$scope.item_10_i,
				'item_10_ii':$scope.item_10_ii,
				'item_10_iii':$scope.item_10_iii,
				'item_10_text':$scope.item_10_text,
				//ITEM 11
				'item_11_i':$scope.item_11_i,
				'item_11_ii':$scope.item_11_ii,
				'item_11_text':$scope.item_11_text,
				//ITEM 12
				'item_12_i':$scope.item_12_i,
				'item_12_ii':$scope.item_12_ii,
				'item_12_iii':$scope.item_12_iii,
				'item_12_text':$scope.item_12_text,
				//ITEM 13
				'item_13_i':$scope.item_13_i,
				'item_13_ii':$scope.item_13_ii,
				'item_13_iii':$scope.item_13_iii,
				'item_13_text':$scope.item_13_text,
				//ITEM 14
				'item_14_i':$scope.item_14_i,
				'item_14_ii':$scope.item_14_ii,
				'item_14_iii':$scope.item_14_iii,
				'item_14_text':$scope.item_14_text,
				//ITEM 15
				'item_15_i':$scope.item_15_i,
				'item_15_ii':$scope.item_15_ii,
				'item_15_iii':$scope.item_15_iii,
				'item_15_text':$scope.item_15_text,
				//ITEM 16
				'item_16_i':$scope.item_16_i,
				'item_16_ii':$scope.item_16_ii,
				'item_16_text':$scope.item_16_text,
				//ITEM 17
				'item_17_i':$scope.item_17_i,
				'item_17_ii':$scope.item_17_ii,
				'item_17_iii':$scope.item_17_iii,
				'item_17_text':$scope.item_17_text,
				//ITEM 18
				'item_18_i':$scope.item_18_i,
				'item_18_ii':$scope.item_18_ii,
				'item_18_iii':$scope.item_18_iii,
				'item_18_text':$scope.item_18_text,
				//ITEM 19
				'item_19_i':$scope.item_19_i,
				'item_19_ii':$scope.item_19_ii,
				'item_19_iii':$scope.item_19_iii,
				'item_19_text':$scope.item_19_text,
				//ITEM 20
				'item_20_i':$scope.item_20_i,
				'item_20_ii':$scope.item_20_ii,
				'item_20_iii':$scope.item_20_iii,
				'item_20_text':$scope.item_20_text,
				//ITEM 21
				'item_21_i':$scope.item_21_i,
				'item_21_ii':$scope.item_21_ii,
				'item_21_text':$scope.item_21_text,
				//ITEM 22
				'item_22_i':$scope.item_22_i,
				'item_22_ii':$scope.item_22_ii,
				'item_22_text':$scope.item_22_text,
						
				'action':$scope.action
				}
		}).success(function(data){
			if(data.connection_error == 'tatizo')
			{
			$scope.status_error_message = 'Error!';
			$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
			$timeout(function(){ $scope.close_funika_kurasa_with_status(); }, 4000);
			}
			else
			{
			$scope.show_asteric = ''; 
			$scope.status_success_message = 'Saved!';
			$scope.action = 'edit_record';
			$scope.essential_items_id = data.essential_items_id;
			$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
			$scope.fetchData_after_changes(); //direct access from registration panel
			$scope.fetch_self_assessment();
			$scope.fetchStatus();
				$timeout(function()
				{ 
					if($scope.from_save =='save_and_exit')
					{ 
					$scope.close_essential_items_entry_form(); $scope.close_funika_kurasa_with_status(); $scope.from_save = ''; 
					}
					else
					{ 
					$scope.close_funika_kurasa_with_status();
					}
				}, 3000);
			}

		});		
	};
	
	$scope.futa_radio_values = function(){
				//ITEM 1
				$scope.item_1_a_i = '';
				$scope.item_1_a_ii = '';
				$scope.item_1_b_i = '';
				$scope.item_1_b_ii = '';
				$scope.item_1_text = '';
				//ITEM 2
				$scope.item_2_i = '';
				$scope.item_2_ii = '';
				$scope.item_2_text = '';
				//ITEM 3
				$scope.item_3_i = '';
				$scope.item_3_ii = '';
				$scope.item_3_text = '';
				//ITEM 4
				$scope.item_4_i = '';
				$scope.item_4_ii = '';
				$scope.item_4_iii = '';
				$scope.item_4_text = '';
				//ITEM 5
				$scope.item_5_i = '';
				$scope.item_5_ii = '';
				$scope.item_5_iii = '';
				$scope.item_5_text = '';
				//ITEM 6
				$scope.item_6_i = '';
				$scope.item_6_ii = '';
				$scope.item_6_iii = '';
				$scope.item_6_text = '';
				//ITEM 7
				$scope.item_7_i = '';
				$scope.item_7_ii = '';
				$scope.item_7_iii = '';
				$scope.item_7_text = '';
				//ITEM 8
				$scope.item_8_i = '';
				$scope.item_8_ii = '';
				$scope.item_8_iii = '';
				$scope.item_8_text = '';
				//ITEM 9
				$scope.item_9_i = '';
				$scope.item_9_ii = '';
				$scope.item_9_iii = '';
				$scope.item_9_text = '';
				//ITEM 10
				$scope.item_10_i = '';
				$scope.item_10_ii = '';
				$scope.item_10_iii = '';
				$scope.item_10_text = '';
				//ITEM 11
				$scope.item_11_i = '';
				$scope.item_11_ii = '';
				$scope.item_11_text = '';
				//ITEM 12
				$scope.item_12_i = '';
				$scope.item_12_ii = '';
				$scope.item_12_iii = '';
				$scope.item_12_text = '';
				//ITEM 13
				$scope.item_13_i = '';
				$scope.item_13_ii = '';
				$scope.item_13_iii = '';
				$scope.item_13_text = '';
				//ITEM 14
				$scope.item_14_i = '';
				$scope.item_14_ii = '';
				$scope.item_14_iii = '';
				$scope.item_14_text = '';
				//ITEM 15
				$scope.item_15_i = '';
				$scope.item_15_ii = '';
				$scope.item_15_iii = '';
				$scope.item_15_text = '';
				//ITEM 16
				$scope.item_16_i = '';
				$scope.item_16_ii = '';
				$scope.item_16_text = '';
				//ITEM 17
				$scope.item_17_i = '';
				$scope.item_17_ii = '';
				$scope.item_17_iii = '';
				$scope.item_17_text = '';
				//ITEM 18
				$scope.item_18_i = '';
				$scope.item_18_ii = '';
				$scope.item_18_iii = '';
				$scope.item_18_text = '';
				//ITEM 19
				$scope.item_19_i = '';
				$scope.item_19_ii = '';
				$scope.item_19_iii = '';
				$scope.item_19_text = '';
				//ITEM 20
				$scope.item_20_i = '';
				$scope.item_20_ii = '';
				$scope.item_20_iii = '';
				$scope.item_20_text = '';
				//ITEM 21
				$scope.item_21_i = '';
				$scope.item_21_ii = '';
				$scope.item_21_text = '';
				//ITEM 22
				$scope.item_22_i = '';
				$scope.item_22_ii = '';
				$scope.item_22_text = '';
				
	};
	
	
//////////////////////////// ASSESSMENT SHEETS  ////////////////////////////////////////////////////////
	
	$scope.show_assessment_sheets_links = function(){
		var modal_popup = angular.element('#assessment_sheets_panel');
		modal_popup.modal('show');
		$scope.fetch_assessment_sheets_links();
	};
	$scope.close_assessment_sheets_links = function(){
		var modal_popup = angular.element('#assessment_sheets_panel');
		modal_popup.modal('hide');
	};
	$scope.fetch_assessment_sheets_links = function(){
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_assessment_sheets_links.php').success(function(data){
			$scope.assessment_sheets_links_data = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	
	
	$scope.access_assessment_sheet = function(id,assessor_category){	
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'id':id, 'assessor_category':assessor_category, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.trading_name = data.trading_name;
			$scope.tin = data.tin;			
			$scope.facility_name = data.facility_name;
			$scope.physical_address = data.physical_address;
			$scope.postal_address = data.postal_address;
		    $scope.simu_landline = data.simu_landline;
		    $scope.barua_pepe = data.barua_pepe;
			$scope.username = data.username;
			$scope.group_admin_username = data.group_admin_username;
			$scope.facility_id = data.id;
			$scope.essential_items_id = data.essential_items_id; 
			$scope.essential_item_score = data.essential_item_score;
			$scope.assessment_id = data.assessment_id;
			$scope.assessment_score = data.assessment_score;
			$scope.assessor_category = assessor_category;
			$scope.assessment_sheet_link = data.acc_facility_id;
			var assessment_id = $scope.assessment_id;
			if(($scope.assessment_id > 0) && ($scope.assessment_score != 'empty')){
				$scope.action = 'edit_record';					
				if( $scope.assessment_sheet_link == 'TH'){ $scope.fetch_town_hotel_items(assessment_id, assessor_category); $scope.assessment_score_town_hotel = $scope.assessment_score; $scope.open_assessment_sheet_for_town_hotel(); };
					if( $scope.assessment_sheet_link == 'VH'){ $scope.fetch_vacation_hotel_items(assessment_id, assessor_category); $scope.assessment_score_vacation_hotel = $scope.assessment_score; $scope.open_assessment_sheet_for_vacation_hotel(); };
			}else{
			$scope.action = 'insert_record';
				if( $scope.assessment_sheet_link == 'TH'){ $scope.assessment_score_town_hotel = 0; $scope.futa_radio_check_values_town_hotel(); $scope.open_assessment_sheet_for_town_hotel(); };
					if( $scope.assessment_sheet_link == 'VH'){ $scope.assessment_score_vacation_hotel = 0; $scope.futa_radio_check_values_vacation_hotel(); $scope.open_assessment_sheet_for_vacation_hotel(); };			
			};
						
		});				
	 };
	 
	 
//EXTENDED CONTROLLERS
//Town Hotel	 
app.town_hotel_ctrl($timeout, $scope, $http, focus);
//Vacation Hotel
app.vacation_hotel_ctrl($timeout, $scope, $http, focus);
//Lodge
app.lodge_ctrl($timeout, $scope, $http, focus);
//apartment
app.apartment_ctrl($timeout, $scope, $http, focus);
//Motel
app.motel_ctrl($timeout, $scope, $http, focus);

//////////////////////////// END ASSESSMENT SHEETS  ////////////////////////////////////////////////////////


//////////////////////////// TALLYING SHEETS  ////////////////////////////////////////////////////////
	
	$scope.show_tallying_sheets_links = function(){
		var modal_popup = angular.element('#tallying_sheets_panel');
		modal_popup.modal('show');
		$scope.fetch_tallying_sheets_links();
	};
	$scope.close_tallying_sheets_links = function(){
		var modal_popup = angular.element('#tallying_sheets_panel');
		modal_popup.modal('hide');
	};
	$scope.fetch_tallying_sheets_links = function(){
	$scope.fetch_trading_name();
	$scope.amerudisha_watumiaji = false;	
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_tallying_sheets_links.php').success(function(data){
			$scope.tallying_sheets_links_data = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	
	$scope.access_tallying_sheet = function(id,assessor_category){	
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'id':id, 'assessor_category':assessor_category, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.trading_name = data.trading_name;
			$scope.tin = data.tin;			
			$scope.facility_name = data.facility_name;
			$scope.physical_address = data.physical_address;
			$scope.postal_address = data.postal_address;
		    $scope.simu_landline = data.simu_landline;
		    $scope.barua_pepe = data.barua_pepe;
			$scope.username = data.username;
			$scope.group_admin_username = data.group_admin_username;
			$scope.facility_id = data.id;
			$scope.essential_items_id = data.essential_items_id; 
			$scope.essential_item_score = data.essential_item_score;
			$scope.assessment_id = data.assessment_id;
			$scope.assessment_score = data.assessment_score;
			$scope.assessor_category = assessor_category;
			$scope.assessment_sheet_link = data.acc_facility_id;
			var assessment_id = $scope.assessment_id;
			//var assessor_category = $scope.assessment_id;
			if(($scope.assessment_id > 0) && ($scope.assessment_score != 'empty')){
				//$scope.action = 'edit_record';					
				if( $scope.assessment_sheet_link == 'TH'){ $scope.fetch_town_hotel_items_for_tallying(assessment_id, assessor_category); };
				if( $scope.assessment_sheet_link == 'VH'){ $scope.fetch_vacation_hotel_items_for_tallying(assessment_id, assessor_category); };
			};
						
		});				
	 };
	 
	 
//EXTENDED TALLYING CONTROLLERS
//Town Hotel Tallying	 
app.town_hotel_tallying_ctrl($timeout, $scope, $http, focus);
app.vacation_hotel_tallying_ctrl($timeout, $scope, $http, focus);
	


//////////////////////////// END TALLYING SHEETS  ////////////////////////////////////////////////////////	
	

});


// JQUERY

// ESSENTIAL ITEMS

$('.sum').on('click', function(){
    var total = 0;
	var asilimia = 0;
    $('.sum:checked').each(function(){
        total += Number(this.value);
		asilimia = ((total/264) * 100).toFixed(1);
    });
    
    $('#total').text(asilimia);
	$('#essential_item_score').val(asilimia);
	 //pass to ng-model i.e be able to submit the value
	$('#essential_item_score').trigger('input');
	//form changes
	$('#form_save_status').text('*');
	$('#show_asteric').val('*');
	$('#show_asteric').trigger('input');
	
});
$('#reset_btn, #reset_btn_bottom').on('click', function(){
	$('.sum').prop('checked', false);

	var asilimia = 0;
	$('#total').text(asilimia);
	$('#essential_item_score').val(asilimia);
	 //pass to ng-model i.e be able to submit the value after reset
	$('#essential_item_score').trigger('input');
	//form changes
	$('#form_save_status').text('*');
	$('#show_asteric').val('*');
	$('#show_asteric').trigger('input');
});

//ASSESSMENT SHEET - TOWN HOTEL

$('.sum_town_hotel').on('click', function(){
    var sum_total_town_hotel = 0;
	var sum_checked_town_hotel = 0;
    $('.sum_town_hotel:checked').each(function(){
        sum_checked_town_hotel += Number(this.value);
			var sum_cm_town_hotel = 0;
			$('.sum_town_hotel_cm').each(function(){
			sum_cm_town_hotel += +$(this).val();
			});
		sum_total_town_hotel = sum_cm_town_hotel + sum_checked_town_hotel;			
		$('#total_town_hotel').text(sum_total_town_hotel);
		$('#assessment_score_town_hotel').val(sum_total_town_hotel);
		$('#assessment_score_town_hotel').trigger('input');
		//form changes
		$('#form_save_status_town_hotel').text('*');
		$('#show_asteric_town_hotel').val('*');
		$('#show_asteric_town_hotel').trigger('input');
    });	
});
$(document).on("click keyup", ".sum_town_hotel_cm", function() {
    var sum_total_town_hotel = 0;
	var sum_cm_town_hotel = 0;
	$(".sum_town_hotel_cm").each(function(){
		sum_cm_town_hotel += +$(this).val();
			var sum_checked_town_hotel = 0;
			$('.sum_town_hotel:checked').each(function(){
			sum_checked_town_hotel += Number(this.value);
			});			
		sum_total_town_hotel = sum_cm_town_hotel + sum_checked_town_hotel;
		$('#total_town_hotel').text(sum_total_town_hotel);
		$('#assessment_score_town_hotel').val(sum_total_town_hotel);
		$('#assessment_score_town_hotel').trigger('input');	
		//form changes
		$('#form_save_status_town_hotel').text('*');
		$('#show_asteric_town_hotel').val('*');
		$('#show_asteric_town_hotel').trigger('input');
	});	
});

$('#reset_btn_town_hotel, #reset_btn_bottom_town_hotel').on('click', function(){
	$('.sum_town_hotel').prop('checked', false);
	var total_town_hotel = 0;
	$('#total_town_hotel').text(total_town_hotel);
	$('#assessment_score_town_hotel').val(total_town_hotel);
	$('#assessment_score_town_hotel').trigger('input');
	//form changes
	$('#form_save_status_town_hotel').text('*');
	$('#show_asteric_town_hotel').val('*');
	$('#show_asteric_town_hotel').trigger('input');
});

//ASSESSMENT SHEET - VACATION HOTEL

$('.sum_vacation_hotel').on('click', function(){
    var sum_total_vacation_hotel = 0;
	var sum_checked_vacation_hotel = 0;
    $('.sum_vacation_hotel:checked').each(function(){
        sum_checked_vacation_hotel += Number(this.value);
			var sum_cm_vacation_hotel = 0;
			$('.sum_vacation_hotel_cm').each(function(){
			sum_cm_vacation_hotel += +$(this).val();
			});
		sum_total_vacation_hotel = sum_cm_vacation_hotel + sum_checked_vacation_hotel;			
		$('#total_vacation_hotel').text(sum_total_vacation_hotel);
		$('#assessment_score_vacation_hotel').val(sum_total_vacation_hotel);
		$('#assessment_score_vacation_hotel').trigger('input');
		//form changes
		$('#form_save_status_vacation_hotel').text('*');
		$('#show_asteric_vacation_hotel').val('*');
		$('#show_asteric_vacation_hotel').trigger('input');
    });	
});
$(document).on("click keyup", ".sum_vacation_hotel_cm", function() {
    var sum_total_vacation_hotel = 0;
	var sum_cm_vacation_hotel = 0;
	$(".sum_vacation_hotel_cm").each(function(){
		sum_cm_vacation_hotel += +$(this).val();
			var sum_checked_vacation_hotel = 0;
			$('.sum_vacation_hotel:checked').each(function(){
			sum_checked_vacation_hotel += Number(this.value);
			});			
		sum_total_vacation_hotel = sum_cm_vacation_hotel + sum_checked_vacation_hotel;
		$('#total_vacation_hotel').text(sum_total_vacation_hotel);
		$('#assessment_score_vacation_hotel').val(sum_total_vacation_hotel);
		$('#assessment_score_vacation_hotel').trigger('input');	
		//form changes
		$('#form_save_status_vacation_hotel').text('*');
		$('#show_asteric_vacation_hotel').val('*');
		$('#show_asteric_vacation_hotel').trigger('input');
	});	
});

$('#reset_btn_vacation_hotel, #reset_btn_bottom_vacation_hotel').on('click', function(){
	$('.sum_vacation_hotel').prop('checked', false);
	var total_vacation_hotel = 0;
	$('#total_vacation_hotel').text(total_vacation_hotel);
	$('#assessment_score_vacation_hotel').val(total_vacation_hotel);
	$('#assessment_score_vacation_hotel').trigger('input');
	//form changes
	$('#form_save_status_vacation_hotel').text('*');
	$('#show_asteric_vacation_hotel').val('*');
	$('#show_asteric_vacation_hotel').trigger('input');
});

//ASSESSMENT SHEET - LODGE

$('.sum_lodge').on('click', function(){
    var sum_total_lodge = 0;
	var sum_checked_lodge = 0;
    $('.sum_lodge:checked').each(function(){
        sum_checked_lodge += Number(this.value);
			var sum_cm_lodge = 0;
			$('.sum_lodge_cm').each(function(){
			sum_cm_lodge += +$(this).val();
			});
		sum_total_lodge = sum_cm_lodge + sum_checked_lodge;			
		$('#total_lodge').text(sum_total_lodge);
		$('#assessment_score_lodge').val(sum_total_lodge);
		$('#assessment_score_lodge').trigger('input');
		//form changes
		$('#form_save_status_lodge').text('*');
		$('#show_asteric_lodge').val('*');
		$('#show_asteric_lodge').trigger('input');
    });	
});
$(document).on("click keyup", ".sum_lodge_cm", function() {
    var sum_total_lodge = 0;
	var sum_cm_lodge = 0;
	$(".sum_lodge_cm").each(function(){
		sum_cm_lodge += +$(this).val();
			var sum_checked_lodge = 0;
			$('.sum_lodge:checked').each(function(){
			sum_checked_lodge += Number(this.value);
			});			
		sum_total_lodge = sum_cm_lodge + sum_checked_lodge;
		$('#total_lodge').text(sum_total_lodge);
		$('#assessment_score_lodge').val(sum_total_lodge);
		$('#assessment_score_lodge').trigger('input');	
		//form changes
		$('#form_save_status_lodge').text('*');
		$('#show_asteric_lodge').val('*');
		$('#show_asteric_lodge').trigger('input');
	});	
});

$('#reset_btn_lodge, #reset_btn_bottom_lodge').on('click', function(){
	$('.sum_lodge').prop('checked', false);
	var total_lodge = 0;
	$('#total_lodge').text(total_lodge);
	$('#assessment_score_lodge').val(total_lodge);
	$('#assessment_score_lodge').trigger('input');
	//form changes
	$('#form_save_status_lodge').text('*');
	$('#show_asteric_lodge').val('*');
	$('#show_asteric_lodge').trigger('input');
});

//ASSESSMENT SHEET - apartment

$('.sum_apartment').on('click', function(){
    var sum_total_apartment = 0;
	var sum_checked_apartment = 0;
    $('.sum_apartment:checked').each(function(){
        sum_checked_apartment += Number(this.value);
			var sum_cm_apartment = 0;
			$('.sum_apartment_cm').each(function(){
			sum_cm_apartment += +$(this).val();
			});
		sum_total_apartment = sum_cm_apartment + sum_checked_apartment;			
		$('#total_apartment').text(sum_total_apartment);
		$('#assessment_score_apartment').val(sum_total_apartment);
		$('#assessment_score_apartment').trigger('input');
		//form changes
		$('#form_save_status_apartment').text('*');
		$('#show_asteric_apartment').val('*');
		$('#show_asteric_apartment').trigger('input');
    });	
});
$(document).on("click keyup", ".sum_apartment_cm", function() {
    var sum_total_apartment = 0;
	var sum_cm_apartment = 0;
	$(".sum_apartment_cm").each(function(){
		sum_cm_apartment += +$(this).val();
			var sum_checked_apartment = 0;
			$('.sum_apartment:checked').each(function(){
			sum_checked_apartment += Number(this.value);
			});			
		sum_total_apartment = sum_cm_apartment + sum_checked_apartment;
		$('#total_apartment').text(sum_total_apartment);
		$('#assessment_score_apartment').val(sum_total_apartment);
		$('#assessment_score_apartment').trigger('input');	
		//form changes
		$('#form_save_status_apartment').text('*');
		$('#show_asteric_apartment').val('*');
		$('#show_asteric_apartment').trigger('input');
	});	
});

$('#reset_btn_apartment, #reset_btn_bottom_apartment').on('click', function(){
	$('.sum_apartment').prop('checked', false);
	var total_apartment = 0;
	$('#total_apartment').text(total_apartment);
	$('#assessment_score_apartment').val(total_apartment);
	$('#assessment_score_apartment').trigger('input');
	//form changes
	$('#form_save_status_apartment').text('*');
	$('#show_asteric_apartment').val('*');
	$('#show_asteric_apartment').trigger('input');
});

//ASSESSMENT SHEET - MOTEL

$('.sum_motel').on('click', function(){
    var sum_total_motel = 0;
	var sum_checked_motel = 0;
    $('.sum_motel:checked').each(function(){
        sum_checked_motel += Number(this.value);
			var sum_cm_motel = 0;
			$('.sum_motel_cm').each(function(){
			sum_cm_motel += +$(this).val();
			});
		sum_total_motel = sum_cm_motel + sum_checked_motel;			
		$('#total_motel').text(sum_total_motel);
		$('#assessment_score_motel').val(sum_total_motel);
		$('#assessment_score_motel').trigger('input');
		//form changes
		$('#form_save_status_motel').text('*');
		$('#show_asteric_motel').val('*');
		$('#show_asteric_motel').trigger('input');
    });	
});
$(document).on("click keyup", ".sum_motel_cm", function() {
    var sum_total_motel = 0;
	var sum_cm_motel = 0;
	$(".sum_motel_cm").each(function(){
		sum_cm_motel += +$(this).val();
			var sum_checked_motel = 0;
			$('.sum_motel:checked').each(function(){
			sum_checked_motel += Number(this.value);
			});			
		sum_total_motel = sum_cm_motel + sum_checked_motel;
		$('#total_motel').text(sum_total_motel);
		$('#assessment_score_motel').val(sum_total_motel);
		$('#assessment_score_motel').trigger('input');	
		//form changes
		$('#form_save_status_motel').text('*');
		$('#show_asteric_motel').val('*');
		$('#show_asteric_motel').trigger('input');
	});	
});

$('#reset_btn_motel, #reset_btn_bottom_motel').on('click', function(){
	$('.sum_motel').prop('checked', false);
	var total_motel = 0;
	$('#total_motel').text(total_motel);
	$('#assessment_score_motel').val(total_motel);
	$('#assessment_score_motel').trigger('input');
	//form changes
	$('#form_save_status_motel').text('*');
	$('#show_asteric_motel').val('*');
	$('#show_asteric_motel').trigger('input');
});



<!---------------------------------------->
