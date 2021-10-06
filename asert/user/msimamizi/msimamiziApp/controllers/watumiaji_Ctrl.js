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


app.controller('watumiajiController', function($timeout, $scope, $http){

	 
	$scope.success = false;
	$scope.error = false;
	
	/* SAJILI */
	/* panel */
	$scope.show_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('show');
		$scope.fetchData();
	};
	$scope.close_sajili = function(){
		var modal_popup = angular.element('#sajili_panel');
		modal_popup.modal('hide');
	};
	
	/* end panel */
		
	/* fetch watumiaji */
	
	$scope.fetchData = function(){
	$scope.amerudisha_watumiaji = false;
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
			$timeout(function(){ $scope.amerudisha_watumiaji = true; }, 3000);			
		});
	};
	$scope.fetchData_after_changes = function(){
		$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;			
		});
		
	};
	
	/* end fetch watumiaji */	
	
	$scope.openModal = function(){
		var modal_popup = angular.element('#mtumiajimodal');
		modal_popup.modal('show');
	};
	$scope.closeModal = function(){
		var modal_popup = angular.element('#mtumiajimodal');
		modal_popup.modal('hide');
	};
	$scope.safishaLevelID = function(){
		$scope.levelID.selected = undefined;
		$scope.idara.selected = undefined;
		$scope.section.selected = undefined;
		$scope.safishaCheoID();
		$scope.disable_cheo = true;
		$scope.leseni = '';
		$scope.enabled_leseni = false;
	};
	$scope.levelID = {};
		$scope.loadLevels = function(){				
		$scope.loadLevels_zilizosajiliwa();
			$http.get('msimamiziApp/sajili_mtumiaji/levelsAPI.php').success(function(data){
			$scope.levelIDData = data;			
		});
	};	
	$scope.loadLevels_zilizosajiliwa = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/levelID_zilizosajiliwa.php').success(function(data){
			if(data.w_amesajiliwa == 'true'){ $scope.w_amesajiliwa = true; }else{ $scope.w_amesajiliwa = false; };
			if(data.nw_amesajiliwa == 'true'){ $scope.nw_amesajiliwa = true; }else{ $scope.nw_amesajiliwa = false; };
			if(data.ps_amesajiliwa == 'true'){ $scope.ps_amesajiliwa = true; }else{ $scope.ps_amesajiliwa = false; };
			if(data.dps_amesajiliwa == 'true'){ $scope.dps_amesajiliwa = true; }else{ $scope.dps_amesajiliwa = false; };
			if(data.dahrm_amesajiliwa == 'true'){ $scope.dahrm_amesajiliwa = true; }else{ $scope.dahrm_amesajiliwa = false; };
			if(data.ca_amesajiliwa == 'true'){ $scope.ca_amesajiliwa = true; }else{ $scope.ca_amesajiliwa = false; };
			if(data.ra_amesajiliwa == 'true'){ $scope.ra_amesajiliwa = true; }else{ $scope.ra_amesajiliwa = false; };
			if(data.tae_amesajiliwa == 'true'){ $scope.tae_amesajiliwa = true; }else{ $scope.tae_amesajiliwa = false; };
			if(data.to_amesajiliwa == 'true'){ $scope.to_amesajiliwa = true; }else{ $scope.to_amesajiliwa = false; };
			if(data.pmu_amesajiliwa == 'true'){ $scope.pmu_amesajiliwa = true; }else{ $scope.pmu_amesajiliwa = false; };
			if(data.masijala_amesajiliwa == 'true'){ $scope.masijala_amesajiliwa = true; }else{ $scope.masijala_amesajiliwa = false; };
			if(data.hod_wote_wamesajiliwa == 'true'){ $scope.hod_wote_wamesajiliwa = true; }else{ $scope.hod_wote_wamesajiliwa = false; };
			if(data.hu_wote_wamesajiliwa == 'true'){ $scope.hu_wote_wamesajiliwa = true; }else{ $scope.hu_wote_wamesajiliwa = false; };
			if(data.hos_wote_wamesajiliwa == 'true'){ $scope.hos_wote_wamesajiliwa = true; }else{ $scope.hos_wote_wamesajiliwa = false; };
		});
	};	

	  //$scope.showing_leseni = undefined;
	  $scope.enabled_leseni = false;
	  $scope.enable_leseni = function() {
		$scope.enabled_leseni = true;
	  };	  
	  $scope.disable_leseni = function() {
	  $scope.enabled_leseni = false;
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
	   
	   $scope.idara_yake= function(){
			$http({
				method:"POST",
				url:"msimamiziApp/sajili_mtumiaji/idaraAPI.php",
				data:{'levelID':$scope.levelID.selected.levelID, 'action':'fetch_single_idara'}
			}).success(function(data){
			$scope.idaraYake = data;
				$scope.idara.selected = $scope.idaraYake[0];
			});
		};
	   
	   $scope.tazamaMtumiaji_editing_window = function(){
		  $scope.loadIdara();
		  if(($scope.levelID.selected.levelID == 'w') || ($scope.levelID.selected.levelID == 'nw') || ($scope.levelID.selected.levelID == 'ps') || ($scope.levelID.selected.levelID == 'dps')  || ($scope.levelID.selected.levelID == 'dahrm') || ($scope.levelID.selected.levelID == 'ca') || ($scope.levelID.selected.levelID == 'ra') || ($scope.levelID.selected.levelID == 'tae') || ($scope.levelID.selected.levelID == 'to') || ($scope.levelID.selected.levelID == 'pmu') || ($scope.levelID.selected.levelID == 'masijala') || ($scope.levelID.selected.levelID == 'driver'))
		  { $scope.disable_idara = true; $scope.levelID_disable_section = true; }else{ $scope.disable_idara = false; $scope.levelID_disable_section = false; };
		  
		  if(($scope.levelID.selected.levelID == 'hod') || ($scope.levelID.selected.levelID == 'hu')) { $scope.load_hodu_waliosajiliwa(); $scope.levelID_disable_section = true; } else { $scope.reset_load_idara(); $scope.levelID_disable_section = false; };
		  if($scope.levelID.selected.levelID == 'hos') { $scope.hos_level_selected = true; $scope.load_hos_waliosajiliwa(); } else { $scope.hos_level_selected = false; $scope.reset_load_sections(); };
		  if($scope.levelID.selected.levelID == 'driver') { $scope.enable_leseni(); }else{ $scope.disable_leseni(); $scope.leseni = ''; };
		  
		  $scope.loadVyeo_editing_window();
		  //Idara_Kitengo_Label
		  if(($scope.levelID.selected.levelID == 'ca' ) || ($scope.levelID.selected.levelID == 'tae' ) || ($scope.levelID.selected.levelID == 'ra' ) || ($scope.levelID.selected.levelID == 'hu' ) || ($scope.levelID.selected.levelID == 'pmu' )){ $scope.idara_kitengo_label = 'Kitengo'; }else{ $scope.idara_kitengo_label = 'Idara'; };
		  };
	   
	   $scope.load_hodu_waliosajiliwa = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/hodu_waliosajiliwa.php').success(function(data){
			if(data.ddahrm_amesajiliwa == 'true'){ $scope.ddahrm_amesajiliwa = true; }else{ $scope.ddahrm_amesajiliwa = false; };
			if(data.dpp_amesajiliwa == 'true'){ $scope.dpp_amesajiliwa = true; }else{ $scope.dpp_amesajiliwa = false; };
			if(data.dw_amesajiliwa == 'true'){ $scope.dw_amesajiliwa = true; }else{ $scope.dw_amesajiliwa = false; };
			if(data.dfob_amesajiliwa == 'true'){ $scope.dfob_amesajiliwa = true; }else{ $scope.dfob_amesajiliwa = false; };
			if(data.dt_amesajiliwa == 'true'){ $scope.dt_amesajiliwa = true; }else{ $scope.dt_amesajiliwa = false; };
			if(data.doa_amesajiliwa == 'true'){ $scope.doa_amesajiliwa = true; }else{ $scope.doa_amesajiliwa = false; };
			if(data.hgcu_amesajiliwa == 'true'){ $scope.hgcu_amesajiliwa = true; }else{ $scope.hgcu_amesajiliwa = false; };
			if(data.cia_amesajiliwa == 'true'){ $scope.cia_amesajiliwa = true; }else{ $scope.cia_amesajiliwa = false; };
			if(data.hpmu_amesajiliwa == 'true'){ $scope.hpmu_amesajiliwa = true; }else{ $scope.hpmu_amesajiliwa = false; };
			if(data.hlu_amesajiliwa == 'true'){ $scope.hlu_amesajiliwa = true; }else{ $scope.hlu_amesajiliwa = false; };
			if(data.hict_amesajiliwa == 'true'){ $scope.hict_amesajiliwa = true; }else{ $scope.hict_amesajiliwa = false; };
			if(data.hrtu_amesajiliwa == 'true'){ $scope.hrtu_amesajiliwa = true; }else{ $scope.hrtu_amesajiliwa = false; };
			if(data.cca_amesajiliwa == 'true'){ $scope.cca_amesajiliwa = true; }else{ $scope.cca_amesajiliwa = false; };
			//if( (data.dpp_amesajiliwa == 'true') && (data.dw_amesajiliwa == 'true') && (data.dfob_amesajiliwa == 'true') && (data.dt_amesajiliwa == 'true') && (data.doa_amesajiliwa == 'true') && (data.hgcu_amesajiliwa == 'true') && (data.cia_amesajiliwa == 'true') && (data.hpmu_amesajiliwa == 'true') && (data.hlu_amesajiliwa == 'true') && (data.hict_amesajiliwa == 'true') && (data.hrtu_amesajiliwa == 'true') && (data.cca_amesajiliwa == 'true')) { $scope.hodu_wote_wamesajiliwa = true; }else{ $scope.hodu_wote_wamesajiliwa = false; };
		});
		};
		$scope.reset_load_idara = function(){
			
			$scope.ddahrm_amesajiliwa = false;
			$scope.dpp_amesajiliwa = false;
			$scope.dw_amesajiliwa = false;
			$scope.dfob_amesajiliwa = false;
			$scope.dt_amesajiliwa = false;
			$scope.doa_amesajiliwa = false;
			$scope.hgcu_amesajiliwa = false;
			$scope.cia_amesajiliwa = false;
			$scope.hpmu_amesajiliwa = false;
			$scope.hlu_amesajiliwa = false;
			$scope.hict_amesajiliwa = false;
			$scope.hrtu_amesajiliwa = false;
			$scope.cca_amesajiliwa = false;
		
		};
	  $scope.safishaCheoID = function(){
			$scope.cheo_ID.selected = undefined;
			$scope.ngazi_ya_mshahara.selected = undefined;
			///////////////////////////////////////////////////$scope.ana_salary_scale = true;
		}	  
	  $scope.cheo_ID = {};
	  $scope.disable_cheo = true;
	
	  $scope.loadVyeo = function(){
	    if($scope.levelID.selected.levelID == 'nu'){
				if($scope.idara.selected == undefined){
					$scope.disable_cheo = true;
				}
				else
				{
					$http.post("msimamiziApp/sajili_mtumiaji/vyeoAPI.php", {'levelID':$scope.levelID.selected.levelID, 'div_unit_ID':$scope.idara.selected.div_unit_ID })
					.success(function(data){
						$scope.vyeoData = data;
						$scope.disable_cheo = false; $scope.cheo_ID.selected = undefined;
					});
				}	
		  }
		  else
		  {
				$http.post("msimamiziApp/sajili_mtumiaji/vyeoAPI.php", {'levelID':$scope.levelID.selected.levelID })
				.success(function(data){
				$scope.vyeoData = data;
					if(($scope.levelID.selected.levelID == 'w') || ($scope.levelID.selected.levelID == 'nw') || ($scope.levelID.selected.levelID == 'ps') || ($scope.levelID.selected.levelID == 'dps') || ($scope.levelID.selected.levelID == 'dahrm') || ($scope.levelID.selected.levelID == 'ca') || ($scope.levelID.selected.levelID == 'hod') || ($scope.levelID.selected.levelID == 'hos'))
					{ 
					$scope.disable_cheo = true; $scope.cheo_ID.selected = $scope.vyeoData[0];
					//$scope.loadNgazi();
					}
					else
					{
					$scope.disable_cheo = false; $scope.cheo_ID.selected = undefined; 
					};
					$scope.loadNgazi();
				});
		  }
			
	  };
	  $scope.loadVyeo_editing_window = function(){
				$http.post("msimamiziApp/sajili_mtumiaji/vyeoAPI.php", {'levelID':$scope.levelID.selected.levelID })
				.success(function(data){
				$scope.vyeoData = data;
				$scope.disable_cheo = true;
				$scope.loadNgazi();
				});
	  };
	   
	  $scope.safisha_ngazi_ya_mshahara = function(){
			$scope.ngazi_ya_mshahara.selected = undefined;
		}
	  $scope.ngazi_ya_mshahara = {};
	  $scope.ana_salary_scale = true;
	  $scope.ulazima_wa_salary_scale = false;
	  $scope.loadNgazi = function(){
	  $scope.ngazi_ya_mshahara.selected = undefined;
			$http.post("msimamiziApp/sajili_mtumiaji/mshahara_posho_ngazi_darajaAPI.php", {'ngazi_ya_mshahara':$scope.cheo_ID.selected.ngazi_ya_mshahara, 'daraja_la_mshahara':$scope.cheo_ID.selected.daraja_la_mshahara })
			.success(function(data){
			$scope.ngaziData = data;
			if( ($scope.cheo_ID.selected.ngazi_ya_mshahara == '') || ($scope.cheo_ID.selected.ngazi_ya_mshahara == null) ){ $scope.ana_salary_scale = false; $scope.ngazi_ya_mshahara.selected = undefined; $scope.ulazima_wa_salary_scale = true; }else{ $scope.ana_salary_scale = true; $scope.ngazi_ya_mshahara.selected = $scope.ngaziData[0]; $scope.ulazima_wa_salary_scale = false; }
			});
	  };
	  
	 $scope.addData = function(){
	 		$scope.futa_sajiliForm();
			$scope.modalTitle = 'SAJILI';
			$scope.idara_kitengo_label = 'Idara';
			$scope.submit_button = 'Sajili';
			$scope.openModal();		
	 };
	 
	$scope.form_data = {};
	$scope.submitForm = function(){
	if($scope.idara.selected == undefined ){ $scope.idara.selected = []; }
	if($scope.section.selected == undefined ){ $scope.section.selected = []; }
	//if( ($scope.cheo_ID.selected.ngazi_ya_mshahara == '') || ($scope.cheo_ID.selected.ngazi_ya_mshahara == null) ){ $scope.cheo_ID.selected.ngazi_ya_mshahara = $scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara; $scope.cheo_ID.selected.daraja_la_mshahara = $scope.ngazi_ya_mshahara.selected.daraja_la_mshahara; }
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{
			'levelID':$scope.levelID.selected.levelID,
			'div_unit_ID':$scope.idara.selected.div_unit_ID,
			'div_au_unit':$scope.idara.selected.div_au_unit,
			'section_ID':$scope.section.selected.section_ID,			
			'f_name':$scope.f_name, 
			'l_name':$scope.l_name,
			'm_name':$scope.m_name,
			'username':$scope.username,
			'cheo_ID':$scope.cheo_ID.selected.cheo_ID,
			'ngazi_ya_mshahara':$scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara,
			'daraja_la_mshahara':$scope.ngazi_ya_mshahara.selected.daraja_la_mshahara,
			'mob':$scope.mob,
			'e_add':$scope.e_add, 
			'leseni':$scope.leseni,			
			'pf_no':$scope.pf_no, 
			'action':$scope.submit_button, 'mfanyakazi_id':$scope.hidden_mfanyakazi_id
			}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}
			else
			{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.futa_sajiliForm();
				$scope.loadLevels();
				$scope.fetchData();
			}
		});
	};
	
	$scope.futa_sajiliForm = function(){
			$scope.levelID.selected = undefined;
			$scope.idara.selected = undefined;
			$scope.section.selected = undefined;
			$scope.f_name = '';
			$scope.l_name = '';
			$scope.m_name = '';
			$scope.username = '';
			$scope.cheo_ID.selected = undefined;
			$scope.ngazi_ya_mshahara.selected = undefined;
			$scope.mob = '';
			$scope.e_add = '';
			$scope.leseni = '';
			$scope.pf_no = '';
			$scope.form_data = {};
			/*$scope.sajiliForm.$setPristine();*/
			$scope.sajiliForm.$setUntouched();
	  };
	  
	 $scope.close_sajiliForm = function(){
	 	$scope.futa_sajiliForm();
		$scope.closeModal();
	 };
	
 	  
			$scope.idara = {};
			$scope.loadIdara = function(){			
				$http.get('msimamiziApp/sajili_mtumiaji/idaraAPI.php').success(function(data){
				$scope.idaraData = data;
				});
			};
	  		$scope.safishaIdara = function() {
			$scope.idara.selected = undefined;
			$scope.section.selected = undefined;
			$scope.safishaCheoID();
			$scope.disable_cheo = true;
			//$scope.idara.placeholder = 'Idara........';
			////$scope.idara.selected.div_unit_kirefu = 'Idara..';
			////$scope.idara.selected.div_unit_ID = '';
			//$scope.section.placeholder = 'Section..';
			////$scope.section.selected.section_name = 'Section..';
			////$scope.section.selected.section_ID = '999999';	
		  };		  
		
		  ///////////$scope.section_disabled = undefined;
		  $scope.enable_section = function() {
			$scope.section_disabled = false;
		  };	  
		  $scope.disable_section = function() {
		  	$scope.section_disabled = true;
		  };
		  $scope.safishaSection = function() {
			$scope.section.selected = undefined;	
		  };
		    
		  $scope.section = {};
		  $scope.loadSections = function(){	
			  $scope.safishaCheoID();
			  $scope.loadVyeo(); 
		  //$scope.section.placeholder = 'Section..';
		 ////////// $scope.section.selected.section_name = 'Section..';
		  //////////////$scope.section.selected.section_ID = '999999';			
		  $scope.section.selected = undefined;		  
		  if($scope.idara.selected.div_au_unit == 'unit' ) {
		  	$scope.disable_section();
			}else{
			$scope.enable_section();
			};
		  $http.post("msimamiziApp/sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
		   .success(function(data){ 
				$scope.sectionData = data;		
		   });
		   if($scope.levelID.selected.levelID == 'hos') { $scope.load_hos_waliosajiliwa(); } else { $scope.reset_load_sections(); };
		   };
		     
		  $scope.oneditloadSections = function(){
		  if(($scope.idara.selected.div_au_unit == 'unit' ) || ($scope.levelID.selected.levelID == 'w') || ($scope.levelID.selected.levelID == 'nw') || ($scope.levelID.selected.levelID == 'ps') || ($scope.levelID.selected.levelID == 'dps')  || ($scope.levelID.selected.levelID == 'dahrm') || ($scope.levelID.selected.levelID == 'ca') || ($scope.levelID.selected.levelID == 'ra') || ($scope.levelID.selected.levelID == 'tae') || ($scope.levelID.selected.levelID == 'to') || ($scope.levelID.selected.levelID == 'pmu') || ($scope.levelID.selected.levelID == 'masijala') || ($scope.levelID.selected.levelID == 'driver'))
		  { $scope.disable_section(); } else { $scope.enable_section(); };	
			  /*
			  if($scope.idara.selected.div_au_unit == 'unit' ) {
				$scope.disable_section();
				}else{
				$scope.enable_section();
				};
			  */
			   $http.post("msimamiziApp/sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
			   .success(function(data){ 
					$scope.sectionData = data;					
			   });
		   };
		   $scope.load_hos_waliosajiliwa = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/hos_waliosajiliwa.php').success(function(data){
			if(data.ADHRM_amesajiliwa == 'true'){ $scope.ADHRM_amesajiliwa = true; }else{ $scope.ADHRM_amesajiliwa = false; };
			if(data.HRM_amesajiliwa == 'true'){ $scope.HRM_amesajiliwa = true; }else{ $scope.HRM_amesajiliwa = false; };
			if(data.PP_amesajiliwa == 'true'){ $scope.PP_amesajiliwa = true; }else{ $scope.PP_amesajiliwa = false; };
			if(data.ME_amesajiliwa == 'true'){ $scope.ME_amesajiliwa = true; }else{ $scope.ME_amesajiliwa = false; };
			if(data.WD_amesajiliwa == 'true'){ $scope.WD_amesajiliwa = true; }else{ $scope.WD_amesajiliwa = false; };
			if(data.WU_amesajiliwa == 'true'){ $scope.WU_amesajiliwa = true; }else{ $scope.WU_amesajiliwa = false; };
			if(data.FD_amesajiliwa == 'true'){ $scope.FD_amesajiliwa = true; }else{ $scope.FD_amesajiliwa = false; };
			if(data.BD_amesajiliwa == 'true'){ $scope.BD_amesajiliwa = true; }else{ $scope.BD_amesajiliwa = false; };
			if(data.APO_amesajiliwa == 'true'){ $scope.APO_amesajiliwa = true; }else{ $scope.APO_amesajiliwa = false; };
			if(data.TD_amesajiliwa == 'true'){ $scope.TD_amesajiliwa = true; }else{ $scope.TD_amesajiliwa = false; };
			if(data.LC_amesajiliwa == 'true'){ $scope.LC_amesajiliwa = true; }else{ $scope.LC_amesajiliwa = false; };
			if(data.CT_amesajiliwa == 'true'){ $scope.CT_amesajiliwa = true; }else{ $scope.CT_amesajiliwa = false; };
			if(data.CHDC_amesajiliwa == 'true'){ $scope.CHDC_amesajiliwa = true; }else{ $scope.CHDC_amesajiliwa = false; };
			//Kama zimekamilika
			if(data.DAHRM_sections_zimesajiliwa_zote == 'true'){ $scope.DAHRM_sections_zimesajiliwa_zote = true; }else{ $scope.DAHRM_sections_zimesajiliwa_zote = false; };
			if(data.DPP_sections_zimesajiliwa_zote == 'true'){ $scope.DPP_sections_zimesajiliwa_zote = true; }else{ $scope.DPP_sections_zimesajiliwa_zote = false; };
			if(data.DW_sections_zimesajiliwa_zote == 'true'){ $scope.DW_sections_zimesajiliwa_zote = true; }else{ $scope.DW_sections_zimesajiliwa_zote = false; };
			if(data.DFoB_sections_zimesajiliwa_zote == 'true'){ $scope.DFoB_sections_zimesajiliwa_zote = true; }else{ $scope.DFoB_sections_zimesajiliwa_zote = false; };
			if(data.DT_sections_zimesajiliwa_zote == 'true'){ $scope.DT_sections_zimesajiliwa_zote = true; }else{ $scope.DT_sections_zimesajiliwa_zote = false; };
			if(data.DOA_sections_zimesajiliwa_zote == 'true'){ $scope.DOA_sections_zimesajiliwa_zote = true; }else{ $scope.DOA_sections_zimesajiliwa_zote = false; };
		});
		};
		$scope.reset_load_sections = function(){			
			$scope.ADHRM_amesajiliwa = false;
			$scope.HRM_amesajiliwa = false;
			$scope.PP_amesajiliwa = false;
			$scope.ME_amesajiliwa = false;
			$scope.WD_amesajiliwa = false;
			$scope.WU_amesajiliwa = false;
			$scope.FD_amesajiliwa = false;
			$scope.BD_amesajiliwa = false;
			$scope.APO_amesajiliwa = false;
			$scope.TD_amesajiliwa = false;
			$scope.LC_amesajiliwa = false;
			$scope.CT_amesajiliwa = false;
			$scope.CHDC_amesajiliwa = false;
			//Kama hazijakamilika
			$scope.DAHRM_sections_zimesajiliwa_zote = false;
			$scope.DPP_sections_zimesajiliwa_zote = false;
			$scope.DW_sections_zimesajiliwa_zote = false;
			$scope.DFoB_sections_zimesajiliwa_zote = false; 
			$scope.DT_sections_zimesajiliwa_zote = false;
			$scope.DOA_sections_zimesajiliwa_zote = false;		
		};		

		
		$scope.mfanyakazi_details = function(mfanyakazi_id){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'mfanyakazi_id':mfanyakazi_id, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.mfanyakazi_id = mfanyakazi_id;
			$scope.f_name = data.f_name;
			$scope.m_name = data.m_name;
			$scope.l_name = data.l_name;
		    $scope.mob = data.mob;
		    $scope.e_add = data.e_add;
		    $scope.leseni = data.leseni;
		    $scope.pf_no = data.pf_no;
		    $scope.username = data.username;
			$scope.jina_la_cheo = data.jina_la_cheo;
			$scope.hidden_mfanyakazi_id = mfanyakazi_id;
		});
		};
		
		$scope.editMtumiaji = function(mfanyakazi_id){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{'mfanyakazi_id':mfanyakazi_id, 'action':'fetch_single_data'}
		}).success(function(data){			
			$scope.f_name = data.f_name;
			$scope.m_name = data.m_name;
			$scope.l_name = data.l_name;
		    $scope.mob = data.mob;
		    $scope.e_add = data.e_add;
		    $scope.leseni = data.leseni;
		    $scope.pf_no = data.pf_no;
		    $scope.username = data.username;
			$scope.levelID.selected = data;
			$scope.idara.selected = data;
			$scope.section.selected = data;			
			$scope.cheo_ID.selected = data;
			$scope.ngazi_ya_mshahara.selected = data;
			$scope.oneditloadSections();
			$scope.tazamaMtumiaji_editing_window();
			$scope.hidden_mfanyakazi_id = mfanyakazi_id;
			$scope.modalTitle = 'Rekebisha Taarifa';
			$scope.submit_button = 'Save';
			$scope.openModal();
		});
		};
	
	$scope.show_confirmation_box = function(){
		var modal_popup = angular.element('#confirmation_box');
		modal_popup.modal('show');
	};
	$scope.close_confirmation_box = function(){
		var modal_popup = angular.element('#confirmation_box');
		modal_popup.modal('hide');
	};

	$scope.deleteMtumiaji = function(mfanyakazi_id){
		$scope.show_deleting_window = false;
		$scope.mfanyakazi_details(mfanyakazi_id);
		$scope.show_confirmation_box();
			$scope.delete_denied = function(){
				$scope.close_confirmation_box();
			};			
			$scope.delete_confirmed = function(mfanyakazi_id){
				$scope.show_deleting_window = true;
				$scope.deleting_in_progress = true;
				$scope.loaded_successfully = false;
				$scope.show_checkmark = false;
				$scope.show_animated_exclamation_icon = false;
				$scope.loaded_unsuccessfully = false;
				$http({
					method:"POST",
					url:"msimamiziApp/sajili_mtumiaji/insert.php",
					data:{'mfanyakazi_id':mfanyakazi_id, 'action':'Delete'}
				}).success(function(data){
					if(data.message == 'Deleted'){
						$scope.fetchData_after_changes();
						$timeout(function(){ $scope.loaded_successfully = true; $scope.deleting_in_progress = false; $scope.show_checkmark = true; }, 2000);						
					}else{					
					$timeout(function(){ $scope.loaded_unsuccessfully = true; $scope.deleting_in_progress = false; $scope.show_animated_exclamation_icon = true; }, 2000);
					/*$scope.deleting_in_progress = false;
					$scope.loaded_unsuccessfully = true;
					$scope.loaded_successfully = false;
					*/
					};
				});
			};
	};
	
	


});
/*
$('#toggle').click(function() {
  $('.status_circle_loader').toggleClass('load-complete');
  $('.checkmark').toggle();
});

$('#toggle').click(function() {
  $('.rstd_spinner_medium_div').toggleClass('load_success');
  $('.checkmark').toggle();
  $('.animated_close_icon').toggle();
  $('.animated_exclamation_icon').toggle();
});
*/