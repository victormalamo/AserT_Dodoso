	/**app.filter('propsFilter', function() {
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
	});**/


app.controller('watumiajiController', function($scope, $http){

	$scope.show_full_page_spinner = function(){
		var modal_popup = angular.element('#full_page_spinner_panel');
		modal_popup.modal('show');
	};
	$scope.close_full_page_spinner = function(){
		var modal_popup = angular.element('#full_page_spinner_panel');
		modal_popup.modal('hide');
	};
/*
	document.onreadystatechange = function() { 
            if (document.readyState !== 'complete') { 
                document.querySelector('body').style.visibility = 'hidden'; 
            } else { 
                document.querySelector('body').style.visibility = 'hidden'; 
            } 
        };
 */

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
			$scope.idadi_idarani = data.idadi_idarani;
			$scope.idadi_km = data.idadi_km;
			$scope.idadi_tayari_kujibiwa = data.idadi_tayari_kujibiwa;
			$scope.idadi_yaliyojibiwa = data.idadi_yaliyojibiwa;
			$scope.idadi_mrejesho = data.idadi_mrejesho;
		});
	};	
	$scope.fetchYanayoingia = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_yanayoingia.php').success(function(data){
			$scope.watumiajiData = data;
		});
	};
	$scope.fetch_tayari_kujibiwa = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_tayari_kujibiwa.php').success(function(data){
			$scope.tayari_kujibiwa_data = data;
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
	$scope.show_tayari_kujibiwa = function(){
		var modal_popup = angular.element('#tayari_kujibiwa_panel');
		modal_popup.modal('show');
	};
	$scope.close_tayari_kujibiwa = function(){
		var modal_popup = angular.element('#tayari_kujibiwa_panel');
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
		$scope.close_majibu_successMessage();
		$scope.close_majibu_connection_errorMessage();
		$scope.category.selected = undefined;
		$scope.idara.selected = undefined;
		//$scope.mteja_ticket_form.$setUntouched();
		var modal_popup = angular.element('#ticket_panel');
		modal_popup.modal('hide');
	};
	$scope.futa_mteja_ticketForm = function(){
		$scope.close_update_successMessage();
		$scope.close_connection_errorMessage();
		$scope.category.selected = undefined;
		$scope.idara.selected = undefined;
		$scope.mteja_ticket_form.$setUntouched();
	};
	$scope.safisha_category = function(){
		$scope.category.selected = undefined;
	};
	$scope.safisha_idara = function(){
		$scope.idara.selected = undefined;
	};
	
	$scope.ticketDetails = function(ticket_id){
	$http({
		method:"POST",
		url:"msimamiziApp/sajili_mtumiaji/fetch_ticket.php",
		data:{'ticket_id':ticket_id}
	}).success(function(data){
		//$scope.idara.selected = data;
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
		if((data.general_status == 'yamefanyiwa_kazi_km') || (data.general_status == 'yamejibiwa_mapokezi') || (data.general_status == 'mrejesho_mdau')){		
		$scope.onesha_majibu = true;		
		$scope.div_unit = data.div_unit;
		$scope.majibu_title = data.majibu_title;
		$scope.majibu_maelezo = data.majibu_maelezo;
		if((data.majibu_kiambata  == '') || (data.majibu_kiambata  == null)){ $scope.kuna_kiambata_wizara = false; }else{ $scope.kuna_kiambata_wizara = true; };
		$scope.majibu_kiambata = data.majibu_kiambata;
		$scope.tarehe_ps = data.tarehe_ps;
		}else{
		$scope.onesha_majibu = false;
		};
		if(data.general_status == 'mrejesho_mdau'){		
		$scope.onesha_mrejesho = true;
		$scope.mtumaji_mrejesho = data.mtumaji_mrejesho;
		$scope.mtumaji_comments = data.mtumaji_comments;
		}else{
		$scope.onesha_mrejesho = false;
		};
		if((data.category == '') || (data.category == null)){		
		$scope.category.selected = undefined;
		$scope.kundi = false;
		}else{
		$scope.category.selected = data;
		$scope.kundi = true;
		$scope.displayed_category = data.category;
		};		
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
	
	$scope.form_data = {};
	$scope.submit_mteja_ticket_form = function(){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{
			'ticket_id':$scope.ticket_id, 
			'category':$scope.category.selected.category,
			'div_unit_ID':$scope.idara.selected.div_unit_ID,
			'div_unit':$scope.idara.selected.div_unit
			}
		}).success(function(data){
			if(data.connection_error != '')
			{
				$scope.success = false;
				$scope.connection_error = true;
				$scope.connection_errorMessage = 'Imeshindikana Kutuma!';
			}
			else
			{
				$scope.update_success = true;
				$scope.connection_error = false;
				$scope.update_successMessage = data.message;
				$scope.displayed_category = data.category;
				//$scope.idara.selected = data;
				//$scope.category.selected = data;
				$scope.fetchStatus();
				$scope.fetchYanayoingia();
			}
		});
	};
	
	
	//MAJIBU
	
	$scope.majibu_connection_error = false;
	$scope.majibu_success = false;
	$scope.close_majibu_connection_errorMessage = function(){
		$scope.majibu_connection_error = false;
	};
	$scope.close_majibu_successMessage = function(){
		$scope.majibu_success = false;
	};
	
	$scope.private_public = {};
	$scope.load_private_public = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/private_publicAPI.php').success(function(data){
			$scope.private_public_data = data;
			});
	};
	
	$scope.kitufe_name = 'Tuma Majibu';
	$scope.change_kitufe_name = function(){
		if($scope.private_public.selected.private_public_id == 'private'){
		$scope.kitufe_name = 'Mtaarifu Mteja';
		}else{
		$scope.kitufe_name = 'Mtumie Mteja';
		}
	};
	
	$scope.safisha_private_public = function(){
		$scope.private_public.selected = undefined;
		$scope.kitufe_name = 'Tuma Majibu';
	};
	
	$scope.form_data = {};
	$scope.submit_majibu_ticket_form = function(){
	$scope.imebonyezwa = true;
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/tuma_majibu.php",
			data:{
			'ticket_id':$scope.ticket_id, 
			'private_public':$scope.private_public.selected.private_public_id
			}
		}).success(function(data){
			if(data.majibu_connection_error != '')
			{
				$scope.majibu_success = false;
				$scope.majibu_connection_error = true;
				$scope.majibu_connection_errorMessage = 'Imeshindikana kutuma majibu!';
				$scope.imebonyezwa = false;
			}
			else
			{
				$scope.kitufe_name = 'Tuma Majibu';				
				$scope.majibu_success = true;
				$scope.majibu_connection_error = false;
				$scope.majibu_successMessage = data.majibu_message;
				$scope.private_public.selected = undefined;
				$scope.fetch_tayari_kujibiwa();
				$scope.fetchStatus();
				$scope.imebonyezwa = false;				
			}
		});
	};
	
	

});