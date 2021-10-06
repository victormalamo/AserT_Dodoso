app.controller('watumiajiController', function($scope, $http){

	$scope.connection_error = false;
	$scope.update_success = false;
	$scope.close_connection_errorMessage = function(){
		$scope.connection_error = false;
	};
	$scope.close_update_successMessage = function(){
		$scope.update_success = false;
	};
	$scope.fetchStatus = function(){
		$http.get('status.php').success(function(data){
			$scope.idadi_yanayoingia = data.idadi_yanayoingia;
			$scope.idadi_yanafanyiwa_kazi = data.idadi_yanafanyiwa_kazi;
			$scope.idadi_not_vetted = data.idadi_not_vetted;
			$scope.idadi_not_vetted_reply = data.idadi_not_vetted_reply;			
			$scope.idadi_vetted = data.idadi_vetted;
			$scope.idadi_tayari_kutumwa = data.idadi_tayari_kutumwa;
			$scope.idadi_yaliyojibiwa = data.idadi_yaliyojibiwa;
			$scope.idadi_mrejesho = data.idadi_mrejesho;
		});
	};	
	$scope.fetchYanayoingia = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_yanayoingia.php').success(function(data){
			$scope.watumiajiData = data;
		});
	};
	$scope.fetch_yanafanyiwa_kazi = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_yanafanyiwa_kazi.php').success(function(data){
			$scope.yanafanyiwa_kaziData = data;
		});
	};
	$scope.fetch_not_vetted = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_not_vetted.php').success(function(data){
			$scope.not_vettedData = data;
		});
	};
	$scope.fetch_vetted = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_vetted.php').success(function(data){
			$scope.vettedData = data;
		});
	};
	$scope.fetch_not_vetted_reply = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_not_vetted_reply.php').success(function(data){
			$scope.not_vetted_reply_data = data;
		});
	};
	$scope.fetch_mdau_mrejesho = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_mdau_mrejesho.php').success(function(data){
			$scope.mdau_mrejesho_data = data;
		});
	};
	$scope.showLogin = function(){
		var modal_popup = angular.element('#login_panel');
		modal_popup.modal('show');
	};
	$scope.closeLogin = function(){
		var modal_popup = angular.element('#login_panel');
		modal_popup.modal('hide');
	};
	$scope.showYanafanyiwa_kazi = function(){
		var modal_popup = angular.element('#yanafanyiwa_kazi_panel');
		modal_popup.modal('show');
	};
	$scope.closeYanafanyiwa_kazi = function(){
		var modal_popup = angular.element('#yanafanyiwa_kazi_panel');
		modal_popup.modal('hide');
	};
	$scope.show_not_vetted = function(){
		var modal_popup = angular.element('#not_vetted_panel');
		modal_popup.modal('show');
	};
	$scope.close_not_vetted = function(){
		var modal_popup = angular.element('#not_vetted_panel');
		modal_popup.modal('hide');
	};
	$scope.show_vetted = function(){
		var modal_popup = angular.element('#vetted_panel');
		modal_popup.modal('show');
	};
	$scope.close_vetted = function(){
		var modal_popup = angular.element('#vetted_panel');
		modal_popup.modal('hide');
	};
	$scope.show_not_vetted_reply = function(){
		var modal_popup = angular.element('#not_vetted_reply_panel');
		modal_popup.modal('show');
	};
	$scope.close_not_vetted_reply = function(){
		var modal_popup = angular.element('#not_vetted_reply_panel');
		modal_popup.modal('hide');
	};
	$scope.show_mdau_mrejesho = function(){
		var modal_popup = angular.element('#mdau_mrejesho_panel');
		modal_popup.modal('show');
	};
	$scope.close_mdau_mrejesho = function(){
		var modal_popup = angular.element('#mdau_mrejesho_panel');
		modal_popup.modal('hide');
	};
	$scope.showTicket = function(){
		var modal_popup = angular.element('#ticket_panel');
		modal_popup.modal('show');
	};
	$scope.closeTicket = function(){
		$scope.close_update_successMessage();
		$scope.close_connection_errorMessage();
		//$scope.category.selected = undefined;
		//$scope.idara.selected = undefined;
		//$scope.mteja_ticket_form.$setUntouched();
		var modal_popup = angular.element('#ticket_panel');
		modal_popup.modal('hide');
	};
	$scope.futa_mteja_ticketForm = function(){
		$scope.close_update_successMessage();
		$scope.close_connection_errorMessage();
		$scope.ps_action.selected = undefined;
		$scope.ps_input = '';
		$scope.mteja_ticket_form.$setUntouched();
	};
	
	$scope.ticketDetails = function(ticket_id){
	$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/fetch_ticket.php",
		data:{'ticket_id':ticket_id}
	}).success(function(data){
		$scope.ticket_id = ticket_id;
		$scope.tarehe_kutoka_kwa_mteja = data.tarehe_kutoka_kwa_mteja;
		$scope.majina_kamili = data.majina_kamili;
		$scope.jinsia = data.jinsia;
		$scope.barua_pepe = data.barua_pepe;
		$scope.simu = data.simu;
		$scope.nchi = data.nchi;
		$scope.mkoa = data.mkoa;
		$scope.halmashauri = data.halmashauri;
		$scope.taasisi = data.taasisi;
		$scope.kichwa_cha_maelezo = data.kichwa_cha_maelezo;
		$scope.maelezo = data.maelezo;
		if((data.kiambata == '') || (data.kiambata == null)){ $scope.kuna_kiambata_mteja = false; }else{ $scope.kuna_kiambata_mteja = true; };
		$scope.kiambata = data.kiambata;
		$scope.displayed_category = data.category;
		$scope.div_unit = data.div_unit;
		$scope.majibu_title = data.majibu_title;
		$scope.majibu_maelezo = data.majibu_maelezo;
		$scope.tarehe_hod_hou_to_ps = data.tarehe_hod_hou_to_ps;
		$scope.majibu_maelezo = data.majibu_maelezo;
		if((data.majibu_kiambata  == '') || (data.majibu_kiambata  == null)){ $scope.kuna_kiambata_wizara = false; }else{ $scope.kuna_kiambata_wizara = true; };
		$scope.majibu_kiambata = data.majibu_kiambata;
		$scope.tarehe_hod_hou_to_ps = data.tarehe_hod_hou_to_ps;
		if((data.ps_action_name == '') || (data.ps_action_name == null)){
		$scope.ps_action.selected = undefined;
		}else{
		$scope.ps_action.selected = data;
		};
		if((data.general_status == 'yamefanyiwa_kazi_km') || (data.general_status == 'yamejibiwa_mapokezi') || (data.general_status == 'mrejesho_mdau')){		
		$scope.onesha_ps_input = true;
		$scope.ps_status_name = data.ps_action_name;
		$scope.ps_status = data.ps_action_id;		
		}else{
		$scope.ps_status_name = data.ps_action_name;
		$scope.onesha_ps_input = false;
		};
		if(data.general_status == 'mrejesho_mdau'){		
		$scope.onesha_mrejesho = true;
		$scope.mtumaji_mrejesho = data.mtumaji_mrejesho;
		$scope.mtumaji_comments = data.mtumaji_comments;
		}else{
		$scope.onesha_mrejesho = false;
		};
		$scope.ps_input = data.ps_input;
		$scope.tarehe_ps = data.tarehe_ps;		
		$scope.showTicket();
	});
	};
	
		
	$scope.ps_action = {};
	$scope.loadpsAction = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/ps_actionAPI.php').success(function(data){
			$scope.ps_actionData = data;
			});
	};
	$scope.safisha_ps_action= function(){
		$scope.ps_action.selected = undefined;
	};
	

	$scope.form_data = {};
	$scope.submit_mteja_ticket_form = function(){
		
				if($scope.ps_action.selected == undefined ){ $scope.ps_action.selected = []; }
				//if($scope.halmashauri.selected == undefined ){ $scope.halmashauri.selected = []; }
				$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
							data:{ 								
							//'category':$scope.category.selected.category,
							//'div_unit_ID':$scope.idara.selected.div_unit_ID,
							//'div_unit':$scope.idara.selected.div_unit,
							
							'ticket_id':$scope.ticket_id,
							//'majibu_title':$scope.majibu_title,
							'ps_action':$scope.ps_action.selected.ps_action_id,
							'ps_action_name':$scope.ps_action.selected.ps_action_name,
							'ps_input':$scope.ps_input
							}
				}).success(function(data){
					if(data.connection_error == 'tatizo')
					{
						$scope.update_success = false;
						$scope.connection_error = true;
						$scope.connection_errorMessage = 'Imeshindikana Kutuma!';
					}
					else
					{
						//$scope.kiambata_error = false;								
						//$scope.connection_error = false;
						//$scope.error = false;
						//$scope.form_data = {};
						//$scope.futa_requestForm();
						//$scope.success = true;					
						//$scope.ticket_number = data.ticket_number;			
						//$scope.closeTuma();
						/////////$scope.update_success = true;
						$scope.connection_error = false;
						////////$scope.update_successMessage = data.message;
						$scope.ps_action.selected = undefined;
						//$scope.displayed_category = data.category;
						if(data.message === 'imetumwa'){
						$scope.closeTicket();
						}else{ 
						$scope.update_successMessage = 'Imehifadhiwa!'; 
						$scope.update_success = true;
						}												
						$scope.fetchStatus();
						$scope.fetchYanayoingia();
						$scope.fetch_not_vetted();
						$scope.fetch_vetted();
						$scope.fetch_not_vetted_reply();
						$scope.fetch_yanafanyiwa_kazi();
						
					}
				});		

	
	};
	
});