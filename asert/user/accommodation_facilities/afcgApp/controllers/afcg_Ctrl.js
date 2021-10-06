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
/*
app.directive('validFile',function(){
  return {
    require:'ngModel',
    link:function(scope,el,attrs,ngModel){
      el.bind('change',function(){
        scope.$apply(function(){
          ngModel.$setViewValue(el.val());
          ngModel.$render();
        });
      });
    }
  }
});
*/
app.directive("ngUploadChange",function(){
    return{
        scope:{
            ngUploadChange:"&"
        },
        link:function($scope, $element, $attrs){
            $element.on("change",function(event){
                $scope.$apply(function(){
                    $scope.ngUploadChange({$event: event})
                })
            })
            $scope.$on("$destroy",function(){
                $element.off();
            });
        }
    }
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

app.controller('tuma_fuatilia_controller', function($timeout, $scope, $http, focus){

	$scope.success = false;
	$scope.connection_error = false;
	/*
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
	*/
	
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
	$scope.show_contacts = function(){
		var modal_popup = angular.element('#contacts_panel');
		modal_popup.modal('show');
	};
	$scope.close_contacts = function(){
		var modal_popup = angular.element('#contacts_panel');
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
	/*
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
	*/
	$scope.afcg_reg = true;
	$scope.afcg_reg_facility_assessor = false;
	$scope.afcg_login = true;
	$scope.afcg_login_facility_assessor = false;
	$scope.afcg_quick_help = true;
	$scope.afcg_quick_help_1 = false;
	
	$scope.show_afcg_reg = function(){
		$scope.afcg_reg = true;
		$scope.afcg_reg_facility_assessor = false;
	};
	$scope.show_afcg_reg_facility_assessor = function(){
		$scope.afcg_reg = false;
		$scope.afcg_reg_facility_assessor = true;
	};
	$scope.show_afcg_login = function(){
		$scope.afcg_login = true;
		$scope.afcg_login_facility_assessor = false;
	};
	$scope.show_afcg_login_facility_assessor = function(){
		$scope.afcg_login = false;
		$scope.afcg_login_facility_assessor = true;
	};
	
	$scope.show_login = function(login_category){
			$http({
				method:"POST",
				url:"user/accommodation_facilities/afcgApp/apis/login_ticket.php",
				data:{'login_category':login_category }
				}).success(function(data){ 
				//if((data.login_category == 'facilityTT') || (data.login_category == 'assessorTT'))
				//{
				window.location.href = 'login.php';
				//}
				//else
				//{
				//$scope.link_to_fail = 'http://www.google.com';
				//window.location.href = $scope.link_to_fail;
				//window.location.href = 'index.php';
				//}	
			});		
	};
	
	$scope.show_afcg_quick_help = function(){
		$scope.afcg_quick_help = true;
		$scope.afcg_quick_help_1 = false;
	};
	$scope.show_afcg_quick_help_1 = function(){
		$scope.afcg_quick_help = false;
		$scope.afcg_quick_help_1 = true;
	};
	
	$scope.addData = function(){
		$scope.futa_requestForm();
		$scope.hidden_id = '';
		$scope.success = false;
		$scope.connection_error = false;
		$scope.connection_errorMessage = '';
		//$scope.submit_button = 'Register';
		//$scope.save_button = false;
		//$scope.action = 'insert_new_request';
		$scope.showTuma();		
	 };
	$scope.showTuma = function(){
		$scope.success = false;
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('show');
	};
	$scope.closeTuma = function(){
		var modal_popup = angular.element('#tuma_panel');
		modal_popup.modal('hide');
	};
	
	/* ASSESSOR REGISTRATION */
	
	$scope.assessor_registration = function(){
		//$scope.futa_assessor_registration_form();
		$scope.assessor_registration_hidden_id = '';
		$scope.assessor_registration_success = false;
		$scope.assessor_registration_connection_error = false;
		$scope.assessor_registration_connection_errorMessage = '';
		$scope.show_assessor_registration_panel();		
	 };
	$scope.show_assessor_registration_panel = function(){
		//$scope.success = false;
		var modal_popup = angular.element('#assessor_registration_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessor_registration_panel = function(){
		var modal_popup = angular.element('#assessor_registration_panel');
		modal_popup.modal('hide');
	};
	$scope.assessor_qualification = {};
	  		$scope.load_assessor_qualification = function(){		  
				$http.get('user/accommodation_facilities/afcgApp/apis/fetch_assessor_qualification.php').success(function(data){
				$scope.assessor_qualification_data = data;
				});
	};	  	
	$scope.safisha_assessor_qualification = function() {
			$scope.assessor_qualification.selected = undefined;
			$scope.qualification_others = '';
			$scope.assessor_registration_form.qualification_others.$setUntouched();
	};
	$scope.safisha_assessor_kiambata = function() {
			document.assessor_registration_form.kiambata.value = '';
			document.getElementById('kiambata_label').innerHTML = '';
			//$scope.no_attachment = true;
	};
	
	//Check duplicate assessor_username
		$scope.disable_other_actions = false;
		$scope.clear_assessor_username_availability_message = function() {
		if($scope.assessor_username_already_taken){ $scope.simu_mobile = ''; $scope.assessor_username_already_taken = false; }else{ $scope.assessor_username_not_taken = false; }
		}
		$scope.checking_dup_assessor_username = false;
		$scope.check_dup_assessor_username = function(){
		$scope.assessor_username_already_taken = false;
		$scope.assessor_username_not_taken = false;
		$scope.checking_dup_assessor_username = true;
		$scope.disable_other_actions = false;				  
		  $http.post('user/accommodation_facilities/afcgApp/apis/check_dup_assessor_username.php', {'assessor_username_for_checkup':$scope.simu_mobile }).success(function(data){ 
			$scope.checking_dup_assessor_username = false;
			if(data.assessor_username_ipo == 'ndio')
			{
				$scope.assessor_username_already_taken = true;
				$scope.assessor_username_not_taken = false;
				focus('simu_mobile');					
			}else{
			$scope.assessor_username_not_taken = true;
			$scope.assessor_username_already_taken = false;
			focus('simu_mobile');
			}		
		   });
		};
		
				
		$scope.futa_assessor_registration_form = function(){
			$scope.assessor_full_name = '';
			$scope.assessor_profession = '';
			$scope.simu_mobile = '';
			$scope.assessor_barua_pepe = '';
			$scope.mikoa.selected = undefined;
			$scope.halmashauri.selected = undefined;			
			$scope.assessor_qualification.selected = undefined;
			$scope.qualification_others = '';			
			$scope.ticket_id = '';
			$scope.assessor_registration_form.$setUntouched();
			$scope.assessor_success = false;
			$scope.assessor_connection_error = false;
			$scope.assessor_connection_errorMessage = '';			
			$scope.checking_dup_assessor_username = false;
			$scope.assessor_username_already_taken = false;
			$scope.assessor_username_not_taken = false;
			document.assessor_registration_form.kiambata.value = '';
			document.getElementById('kiambata_label').innerHTML = '';
			//$scope.kiambata = [];
			//$scope.kiambata_label = null;
			//$scope.uploadedFile = [];
			//angular.element("input[type='file']").val(null);
			$scope.no_attachment = true;
	    };
		
		$scope.no_attachment = true;
		$scope.check_attachment = function($event){
		var check_kiambata = document.assessor_registration_form.kiambata.value;
		if( check_kiambata.length > 0 ){ $scope.no_attachment = false; }else{ $scope.no_attachment = true; };
		//$scope.no_attachment = false;
		//$scope.no_attachment_message = document.assessor_registration_form.kiambata.value;
		//$scope.no_attachment_message = check_kiambata.length;
		};
	
	
	$scope.form_data = {};
	$scope.hajarudi_wateja_request_form = false;
	$scope.submit_assessor_registration_form = function(){
	var kiambata = document.assessor_registration_form.kiambata.value;
	var fd = new FormData();
	var files = document.getElementById('kiambata').files[0];				
	fd.append('kiambata',files);
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
					url:"user/accommodation_facilities/afcgApp/apis/insert_assessor.php",
					data:{
					'assessor_full_name':$scope.assessor_full_name,
					'assessor_profession':$scope.assessor_profession,
					'assessor_mobile_number':$scope.simu_mobile,
					'assessor_barua_pepe':$scope.assessor_barua_pepe,
					'regID':$scope.mikoa.selected.regID,
					'mkoa':$scope.mikoa.selected.regNam,
					'lgaID':$scope.halmashauri.selected.lgaID,
					'halmashauri':$scope.halmashauri.selected.lgaNam,					
					'assessor_qualification_id':$scope.assessor_qualification.selected.qualification_id,
					'assessor_qualification_name':$scope.assessor_qualification.selected.qualification_name,					
					'qualification_others':$scope.qualification_others,
					'action':'register_assessor'
					}
				}).success(function(data){
					$scope.hajarudi_wateja_request_form = false;
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						//Tuma file
								$http({
								method:"POST",
								url:"user/accommodation_facilities/afcgApp/apis/insert_assessor_file.php",
								data: fd,
								headers: {'Content-Type': undefined},
								}).success(function(data){
									if(data.kiambata_error != '')
									{
										$scope.kiambata_error = true; $scope.kiambata_errorMessage = data.kiambata_error;
									}
									else if(data.kiambata_connection_error == 'tatizo_update_file')
									{
										$scope.kiambata_connection_error = true; $scope.kiambata_connection_errorMessage = 'Kuna tatizo kwenye jina la faili!';								}
									else
									{
										$scope.kiambata_error = false;								
										$scope.kiambata_connection_error = false;
										$scope.form_data = {};									
									}
								});
						$scope.username_hide_some_chars = data.username_hide_some_chars;
						$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
						$scope.futa_assessor_registration_form();						

					};
				});		
		
		};
	
	
	$scope.show_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('show');
	};
	$scope.close_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('hide');
	};

	  
	/* ACCOMMODATION FACILITY */
	  
	  $scope.mikoa = {};
	  $scope.loadMikoa = function(){		  
		 $http.get('user/accommodation_facilities/afcgApp/apis/mikoaAPI.php').success(function(data){ 
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
		  $http.post("user/accommodation_facilities/afcgApp/apis/halmashauriAPI.php", {'regID':$scope.mikoa.selected.regID})
		   .success(function(data){ 
				$scope.halmashauriData = data;		
		   });
		};		
		$scope.safishaHalmashauri = function() {
			$scope.halmashauri.selected = undefined;
		};		

	 $scope.location_group = {};
	  $scope.load_location_group = function(){		  
				$http.get('user/accommodation_facilities/afcgApp/apis/location_group_API.php').success(function(data){
				$scope.location_group_data = data;
				});
	  };	  	
		$scope.safisha_location_group = function() {
			$scope.location_group.selected = undefined;
			$scope.safisha_type_of_accomodation_facilities();
		};		
		/*
		$scope.type_of_accomodation_facilities = {};
		$scope.load_type_of_accomodation_facilities = function(){
		$scope.safisha_type_of_accomodation_facilities();
		  $http.get('user/accommodation_facilities/afcgApp/apis/type_of_accomodation_facilities_API.php').success(function(data){ 
				$scope.type_of_accomodation_facilities_data = data;		
		   });
		};
		*/
		$scope.type_of_accomodation_facilities = {};
		$scope.load_type_of_accomodation_facilities = function(){
		$scope.safisha_type_of_accomodation_facilities();
		  $http.post('user/accommodation_facilities/afcgApp/apis/type_of_accomodation_facilities_API.php', {'location_id':$scope.location_group.selected.location_id}).success(function(data){ 
				$scope.type_of_accomodation_facilities_data = data;		
		   });
		};
		
		$scope.safisha_type_of_accomodation_facilities = function() {
			$scope.type_of_accomodation_facilities.selected = undefined;
		};
		
		/*
		$scope.safisha_kiambata = function() {
			document.wateja_request_form.kiambata.value = '';
			document.getElementById('kiambata_label').innerHTML = '';
		};
		*/
		
		//Check duplicate trading_name
		$scope.disable_other_actions = false;
		$scope.clear_trading_name_availability_message = function() {
		///$scope.trading_name_already_taken = false;
		///$scope.trading_name_not_taken = false;
		///$scope.disable_other_actions = true;
		if($scope.trading_name_already_taken){ $scope.trading_name = ''; $scope.trading_name_already_taken = false; }else{ $scope.trading_name_not_taken = false; }
		}
		$scope.checking_dup_trading_name = false;
		//$scope.trading_name_already_taken = false;
		//$scope.trading_name_not_taken = false;
		$scope.check_dup_trading_name = function(){
		$scope.trading_name_already_taken = false;
		$scope.trading_name_not_taken = false;
		$scope.checking_dup_trading_name = true;
		//$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('user/accommodation_facilities/afcgApp/apis/check_dup_trading_name.php', {'trading_name_for_checkup':$scope.trading_name }).success(function(data){ 
			$scope.checking_dup_trading_name = false;
			//$scope.close_funika_kurasa();			
			if(data.trading_name_ipo == 'ndio')
			{
				$scope.trading_name_already_taken = true;
				$scope.trading_name_not_taken = false;
				focus('trading_name');					
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
		if($scope.tin_already_taken){ $scope.tin = ''; $scope.tin_already_taken = false; }else{ $scope.tin_not_taken = false; }
		}
		$scope.checking_dup_tin = false;
		//$scope.tin_already_taken = false;
		//$scope.tin_not_taken = false;
		$scope.check_dup_tin = function(){
		$scope.tin_already_taken = false;
		$scope.tin_not_taken = false;
		$scope.checking_dup_tin = true;
		//$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('user/accommodation_facilities/afcgApp/apis/check_dup_tin.php', {'tin_for_checkup':$scope.tin }).success(function(data){ 
			$scope.checking_dup_tin = false;
			//$scope.close_funika_kurasa();
			if(data.tin_ipo == 'ndio')
			{
				$scope.tin_already_taken = true;
				$scope.tin_not_taken = false;
				focus('tin');					
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
		//////$scope.username_already_taken = false;
		/////////$scope.username_not_taken = false;
		//////////$scope.username_used_by_this_facility = false;
		//////////$scope.disable_other_actions = true;
		if($scope.username_already_taken){ $scope.simu_mobile = ''; $scope.username_already_taken = false; }else{ $scope.username_not_taken = false; }
		}
		$scope.checking_dup_username = false;
		//$scope.username_already_taken = false;
		//$scope.username_not_taken = false;
		$scope.check_dup_username = function(){
		//$scope.checking_dup_username = false;
		$scope.username_already_taken = false;
		$scope.username_not_taken = false;
		$scope.checking_dup_username = true;
		////////////$scope.show_funika_kurasa();
		$scope.disable_other_actions = false;				  
		  $http.post('user/accommodation_facilities/afcgApp/apis/check_dup_username.php', {'username_for_checkup':$scope.simu_mobile }).success(function(data){ 
			$scope.checking_dup_username = false;
			//////////////$scope.close_funika_kurasa();
			if(data.username_ipo == 'ndio')
			{
				//if($scope.hidden_id > 0){ //from editing function
					//if($scope.hidden_id == data.id){ 
					//$scope.username_already_taken = false;
					//$scope.username_not_taken = false;
					//$scope.username_used_by_this_facility = true;
					//}else{
					//$scope.username_already_taken = true;
					//$scope.username_not_taken = false;
					//$scope.username_used_by_this_facility = false;
					//$scope.simu_mobile = '';
					//}
				//}else{ //From insert new record
				$scope.username_already_taken = true;
				$scope.username_not_taken = false;
				//$scope.username_used_by_this_facility = false;
				//$scope.simu_mobile = '';
				focus('simu_mobile');
				//}					
			}else{
			$scope.username_not_taken = true;
			$scope.username_already_taken = false;
			////$timeout(function(){ $scope.username_not_taken = false; }, 4000);
			focus('simu_mobile');
			//$scope.username_used_by_this_facility = false;
			}		
		   });
		};
	
			
	//VERIFICATION
	//send verification code
	$scope.send_verification_code = function(recipient_category){
	$scope.recipient_category = recipient_category;
	$scope.generating_verification = true;
	$scope.authenticating_verification = false;
	$scope.user_blocked = false;
	$scope.wrong_code = false;
	$scope.show_verification_box();
	$scope.verification_form.$setUntouched();	
		$http({
			method:"POST",
			url:"user/accommodation_facilities/afcgApp/apis/send_verification_code.php",
			data:{					
			'simu_mobile':$scope.simu_mobile,
			'action':'send_code'
			}
		}).success(function(data){
			//if(data.is_user_blocked === 'yes'){ $scope.user_blocked = true; }else{ $scope.user_blocked = false;	}
			$timeout(function(){ 
				if(data.is_user_blocked === 'yes')
				{ 
				$scope.user_blocked = true; $scope.generating_verification = false; $scope.authenticating_verification = false;
				}
				else
				{				
				$scope.user_blocked = false; $scope.generating_verification = false; $scope.authenticating_verification = true; $scope.focus_vn_1();
				}
			
			 }, 2000);
			// $timeout(function(){ $scope.close_verification_box(); }, 58000);
		});
	}
	$scope.resend_button_visibility = false;
	$scope.show_resend_button = function(){		
		$scope.resend_button_visibility = true;
		$scope.wrong_code = false;
	};
	$scope.resend_new_code = function(){
		$scope.verification_form.$setUntouched();
		$scope.resend_button_visibility = false
		$scope.generating_verification = true;
		$scope.authenticating_verification = false;
		$scope.user_blocked = false;
		//$scope.wrong_code = false;
		$http({
			method:"POST",
			url:"user/accommodation_facilities/afcgApp/apis/send_verification_code.php",
			data:{
			'simu_mobile':$scope.simu_mobile,					
			'action':'resend_code'
			}
		}).success(function(data){
			//if(data.is_user_blocked === 'yes'){ $scope.user_blocked = true; }else{ $scope.user_blocked = false;	}
			$timeout(function(){ 
				if(data.is_user_blocked === 'yes')
				{ 
				$scope.user_blocked = true; $scope.generating_verification = false; $scope.authenticating_verification = false;
				}
				else
				{
				$scope.user_blocked = false; $scope.generating_verification = false; $scope.authenticating_verification = true; $scope.focus_vn_1();
				}			
			 }, 2000);
			// $timeout(function(){ $scope.close_verification_box(); }, 58000);
			
		});
	}; 
	$scope.show_code_entry_window = function(){
		$scope.resend_button_visibility = false;
		$scope.verification_form.$setUntouched();		
		$scope.focus_vn_1();
	};
	
	$scope.show_verification_box = function(){
		var modal_popup = angular.element('#verification_box');
		modal_popup.modal('show');
	};
	$scope.close_verification_box = function(){
		var modal_popup = angular.element('#verification_box');
		modal_popup.modal('hide');
	};
	$scope.focus_vn_1 = function() {
		focus('vn_1');
	};

	$scope.checked = 0;
	$scope.verifying_code = false;
	$scope.$watch('verification_form.$valid', function (newValue, oldvalue){
	$scope.checkDirty();		
		if($scope.checked === 1)
		{
			$scope.authenticating_verification = false;			
			$scope.verify_code();
		}
		else
		{
			$scope.verifying_code = false;
		}	
	});
	$scope.checkDirty = function(){		
		if(($scope.vn_1 == '') || ($scope.vn_1 == null) || ($scope.vn_1 == undefined))
		{
			$scope.checked = 0; 
		}
		else
		{
			$scope.checked = 1;
		}
	};
			
	$scope.verify_code = function(){
	$scope.wrong_code = false;
	$scope.verifying_code = true;
		$http({
			method:"POST",
			url:"user/accommodation_facilities/afcgApp/apis/verify_code.php",
			data:{					
			'vn_1':$scope.vn_1,'vn_2':$scope.vn_2,'vn_3':$scope.vn_3,'vn_4':$scope.vn_4,'vn_5':$scope.vn_5,'vn_6':$scope.vn_6,'simu_mobile':$scope.simu_mobile
			}
		}).success(function(data){
			if(data.verification === 'passed')
			{
				if($scope.recipient_category == 'facility'){  $scope.submit_wateja_request_form(); }else{  $scope.submit_assessor_registration_form(); }
				//$scope.submit_wateja_request_form();
				$timeout(function(){ $scope.verifying_code = false; $scope.close_verification_box(); }, 2000);
			}
			else
			{
				$scope.verifying_code = false;
				$scope.authenticating_verification = true;
				$scope.wrong_code = true;
				//$scope.error_verifying = 'Wrong code!';
				$scope.vn_1 = ''; $scope.vn_2 = ''; $scope.vn_3 = ''; $scope.vn_4 = ''; $scope.vn_5 = ''; $scope.vn_6 = '';
				$scope.verification_form.$setUntouched();		
				$scope.focus_vn_1();
				
				//$scope.show_code_entry_window();
			}
		});
	}
	
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
					url:"user/accommodation_facilities/afcgApp/apis/insert.php",
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
					'simu_mobile':$scope.simu_mobile, 
					'simu_landline':$scope.simu_landline,
					'barua_pepe':$scope.barua_pepe,
					'action':'insert_new_request'
					}
				}).success(function(data){
					$scope.hajarudi_wateja_request_form = false;
					if(data.connection_error == 'tatizo')
					{
						$timeout(function(){ $scope.submitted_unsuccessfully = true; $scope.submitting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					}
					else
					{
						//$scope.ticket_number= data.ticket_number;
						$scope.username_hide_some_chars = data.username_hide_some_chars;
						//$scope.tmp_password = data.tmp_password;
						$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
						$scope.futa_requestForm();
						//$scope.closeTuma();
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
			

		
		$scope.futa_requestForm = function(){
			$scope.mikoa.selected = undefined;
			$scope.halmashauri.selected = undefined;
			$scope.location_group.selected = undefined;
			$scope.type_of_accomodation_facilities.selected = undefined;
			$scope.trading_name = '';
			$scope.tin = '';
			$scope.facility_name = '';
			$scope.physical_address = '';
			$scope.postal_address = '';
			$scope.simu_mobile = '';
			$scope.simu_landline = '';
			$scope.barua_pepe = '';
			$scope.ticket_id = '';
			$scope.wateja_request_form.$setUntouched();
			$scope.success = false;
			$scope.connection_error = false;
			$scope.connection_errorMessage = '';
			
			$scope.checking_dup_trading_name = false;
			$scope.trading_name_already_taken = false;
			$scope.trading_name_not_taken = false;
			
			$scope.checking_dup_tin = false;
			$scope.tin_already_taken = false;
			$scope.tin_not_taken = false;
			
			$scope.checking_dup_username = false;
			$scope.username_already_taken = false;
			$scope.username_not_taken = false;
			///$scope.username_used_by_this_facility = false;
	    };
		
	
	/*
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
	*/
	/*
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
	*/
	
	//TAZAMA MAJIBU
	/*
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
	*/
	/*
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
	*/
});

