	/*app.filter('propsFilter', function() {
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
*/

app.controller('watumiajiController', function($scope, $http){

	$scope.connection_error = false;
	$scope.kiambata_error = false;
	$scope.update_success = false;
	$scope.onesha_ps_input = false;
	$scope.close_connection_errorMessage = function(){
		$scope.connection_error = false;
	};
	$scope.close_kiambata_errorMessage = function(){
		$scope.kiambata_error = false;
	};
	$scope.close_update_successMessage = function(){
		$scope.update_success = false;
	};
	$scope.fetchStatus = function(){
		$http.get('status.php').success(function(data){
			$scope.idadi_yanayoingia = data.idadi_yanayoingia;
			$scope.idadi_yanafanyiwa_kazi = data.idadi_yanafanyiwa_kazi;
			$scope.idadi_to_ps = data.idadi_to_ps;
			$scope.idadi_not_vetted = data.idadi_not_vetted;
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
	$scope.fetch_not_vetted = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_not_vetted.php').success(function(data){
			$scope.not_vetted_data = data;
		});
	};
	$scope.fetch_vetted = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_vetted.php').success(function(data){
			$scope.vetted_data = data;
		});
	};
	$scope.fetch_yanafanyiwa_kazi = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_yanafanyiwa_kazi.php').success(function(data){
			$scope.yanafanyiwa_kazi_data = data;
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
	$scope.show_yanafanyiwa_kazi = function(){
		var modal_popup = angular.element('#yanafanyiwa_kazi_panel');
		modal_popup.modal('show');
	};
	$scope.close_yanafanyiwa_kazi = function(){
		var modal_popup = angular.element('#yanafanyiwa_kazi_panel');
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
	$scope.safisha_kiambata = function() {
		document.mteja_ticket_form.kiambata.value = '';
		document.getElementById('kiambata_label').innerHTML = '';
	};
	$scope.futa_mteja_ticketForm = function(){
		$scope.close_update_successMessage();
		$scope.close_connection_errorMessage();
		$scope.close_kiambata_errorMessage();
		$scope.majibu_title = '';
		$scope.majibu_maelezo = '';				
		$scope.send_to.selected = undefined;
		$scope.safisha_kiambata();
		//$scope.ondoa_majibu_kiambata();
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
		if((data.category == '') || (data.category == null)){		
		$scope.category.selected = undefined;
		$scope.displayed_category = '-';
		}else{
		$scope.category.selected = data;
		$scope.displayed_category = data.category;
		};
		$scope.idara.selected = data;
		$scope.div_unit = data.div_unit;
		$scope.majibu_title = data.majibu_title;
		$scope.majibu_maelezo = data.majibu_maelezo;
		if((data.majibu_kiambata  == '') || (data.majibu_kiambata  == null)){ $scope.kuna_kiambata_wizara = false; }else{ $scope.kuna_kiambata_wizara = true; };
		$scope.majibu_kiambata = data.majibu_kiambata;
		$scope.tarehe_hod_hou_to_ps = data.tarehe_hod_hou_to_ps;
		if((data.ps_status_name == '') || (data.ps_status_name == null)){		
		$scope.onesha_ps_input = false;
		}else{
		$scope.ps_input= data.ps_input;
		$scope.ps_status_name = data.ps_status_name;
		$scope.ps_status = data.ps_status;
		$scope.tarehe_ps = data.tarehe_ps;
		$scope.onesha_ps_input = true;
		};
		if((data.general_status == 'yamefanyiwa_kazi_km') || (data.general_status == 'yamejibiwa_mapokezi') || (data.general_status == 'mrejesho_mdau')){		
		$scope.onesha_majibu = true;
		}else{
		$scope.onesha_majibu = false;
		};
		if(data.general_status == 'mrejesho_mdau'){		
		$scope.onesha_mrejesho = true;
		$scope.mtumaji_mrejesho = data.mtumaji_mrejesho;
		$scope.mtumaji_comments = data.mtumaji_comments;
		$scope.tarehe_mdau_mrejesho = data.tarehe_mdau_mrejesho;
		}else{
		$scope.onesha_mrejesho = false;
		};
		$scope.loadsendTo(ticket_id);
		$scope.showTicket();
	});
	};
	
		
	$scope.idara = {};
	$scope.loadIdara = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/idaraAPI.php').success(function(data){
			$scope.idaraData = data;
			});
	};
	$scope.category = {};
	$scope.loadCategory = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/categoryAPI.php').success(function(data){
			$scope.categoryData = data;
			});
	};
	
	$scope.send_to = {};
	$scope.loadsendTo = function(ticket_id){
		$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/sendToAPI.php",
		data:{'ticket_id':ticket_id}
		}).success(function(data){
		$scope.sendToData = data;
		});
	};
	$scope.loadGroup = function(item){
		$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/DEMOsendToAPI.php",
		data:{'ticket_id':ticket_id}
		}).success(function(data){
		$scope.sendToData = data;
		});
	};
	
	$scope.safisha_send_to = function(){
		$scope.send_to.selected = undefined;
	};
	

	$scope.form_data = {};	
	$scope.submit_mteja_ticket_form = function(){
		
		if($scope.send_to.selected == undefined ){ $scope.send_to.selected = []; }
		//Wakati wa kuapdate
		if(($scope.majibu_kiambata == '') || ($scope.majibu_kiambata == null)){
		$scope.kuna_kiambata_wizara = false;		
		}
		else
		{
		$scope.kuna_kiambata_wizara = true;
		}
		var kiambata = document.mteja_ticket_form.kiambata.value;
		if(kiambata.length > 0){		
				var fd = new FormData();
				var files = document.getElementById('kiambata').files[0];				
				fd.append('kiambata',files);				

						$http({
							method:"POST",
							url:"msimamiziApp/sajili_mtumiaji/insert.php",
							data:{ 								
							//'category':$scope.category.selected.category,
							//'div_unit_ID':$scope.idara.selected.div_unit_ID,
							//'div_unit':$scope.idara.selected.div_unit,
							
							'ticket_id':$scope.ticket_id,
							'majibu_title':$scope.majibu_title,
							'majibu_maelezo':$scope.majibu_maelezo,
							'send_to':$scope.send_to.selected.levelID,
							'ps_status':$scope.ps_status,
							'kuna_file':'ndio'
							}
						}).success(function(data){
						if(data.connection_error == 'tatizo')
						{
							$scope.success = false;
							$scope.connection_error = true;
							$scope.connection_errorMessage = 'Imeshindikana Kutuma!';
						}
						else
						{
							$scope.message = data.message;
							$scope.tarehe_hod_hou_to_ps = data.tarehe_hod_hou_to_ps;
							//Tuma file
								$http({
								method:"POST",
								url:"msimamiziApp/sajili_mtumiaji/insert_file.php",
								data: fd,
								//transformRequest: angular.identity,
								headers: {'Content-Type': undefined},
								}).success(function(data){
								if(data.kiambata_error != '')
								{
									//$scope.success = false;
									//$scope.connection_error = false;
									//$scope.error = false;
									$scope.kiambata_error = true;
									$scope.kiambata_errorMessage = 'Tatizo kwenye kutuma faili';
								}
								else if(data.connection_error == 'tatizo_update_file')
								{
								//$scope.success = false;
								$scope.connection_error = true;
								//$scope.error = false;
								$scope.connection_errorMessage = 'Tatizo kwenye ku-update kanzidata';
								}else
								{
								$scope.kiambata_error = false;								
								$scope.connection_error = false;
								//$scope.error = false;
								//$scope.form_data = {};
								//$scope.futa_requestForm();
								//$scope.update_success = true;
								//$scope.update_successMessage = $scope.message;//'Success! data na faili';
								$scope.send_to.selected = undefined;					
								//$scope.ticket_number = data.ticket_number;			
								//$scope.closeTuma();
								//$scope.displayed_category = data.category;
								if($scope.message === 'imetumwa'){
								$scope.closeTicket();
								}else{ 
								$scope.update_successMessage = 'Imehifadhiwa!'; 
								$scope.update_success = true;
								$scope.kuna_kiambata_wizara = true;
								$scope.majibu_kiambata = data.majibu_kiambata;
								//$scope.majibu_kiambata_for_update = data.majibu_kiambata;
								$scope.ticket_id = data.ticket_id;
								}
								$scope.fetchStatus();
								$scope.fetch_not_vetted();
								$scope.fetch_vetted();
								$scope.fetch_yanafanyiwa_kazi();
								$scope.fetchYanayoingia();									
								}
								});
							
						}
						});		
				
		
		}else{
		
				$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
							data:{ 								
							//'category':$scope.category.selected.category,
							//'div_unit_ID':$scope.idara.selected.div_unit_ID,
							//'div_unit':$scope.idara.selected.div_unit,
							
							'ticket_id':$scope.ticket_id,
							'majibu_title':$scope.majibu_title,
							'send_to':$scope.send_to.selected.levelID,
							'ps_status':$scope.ps_status,
							'majibu_maelezo':$scope.majibu_maelezo
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
						$scope.send_to.selected = undefined;
						//$scope.displayed_category = data.category;
						if(data.message === 'imetumwa'){
						$scope.closeTicket();
						}else{ 
						$scope.update_successMessage = 'Imehifadhiwa!'; 
						$scope.update_success = true;
						//$scope.kuna_kiambata_wizara = false;
						$scope.tarehe_hod_hou_to_ps = data.tarehe_hod_hou_to_ps;
						}												
						$scope.fetchStatus();
						$scope.fetch_not_vetted();
						$scope.fetch_vetted();
						$scope.fetch_yanafanyiwa_kazi();
						$scope.fetchYanayoingia();
						
					}
				});		
		
		}
	
	};
	
	$scope.form_data = {};
	$scope.ondoa_majibu_kiambata = function(){		
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/ondoa_majibu_kiambata.php",
					data:{ 
					'ticket_id':$scope.ticket_id,
					'majibu_kiambata':$scope.majibu_kiambata
					}
		}).success(function(data){
			//alert("???");
			if(data.connection_error == 'tatizo')
			{
				$scope.connection_error = true;
				$scope.connection_errorMessage = 'Imeshindikana kuondoa faili!';
			}
			else
			{
			$scope.connection_error = false;
			$scope.kuna_kiambata_wizara = false;
			$scope.majibu_kiambata = '';
			$scope.safisha_kiambata();
			$scope.update_successMessage = 'Kiambatisho kimeondolewa!'; 
			$scope.update_success = true;
			}
		});
	};
	
});
