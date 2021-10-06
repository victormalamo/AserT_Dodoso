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


app.controller('watumiajiController', function($scope, $http){

	 
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
			$scope.amerudisha_watumiaji = true;
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
	
	$scope.levelID = {};
		$scope.loadLevels = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/levelsAPI.php').success(function(data){
			$scope.levelIDData = data;
		});
	};	

	  $scope.showing_leseni = undefined;
	  $scope.show_leseni = function() {
		$scope.showing_leseni = true;
	  };	  
	  $scope.hide_leseni = function() {
	  $scope.showing_leseni = false;
	  };
	  
	  $scope.tazamaMtumiaji = function(){ 	  
	  if($scope.levelID.selected.levelID == 'driver' ) {
		$scope.show_leseni();
		}else{
		$scope.hide_leseni();
		};
	   };		  
		  
	  $scope.ngazi_ya_mshahara = {};
	  $scope.loadNgazi = function(){
				$http.get('msimamiziApp/sajili_mtumiaji/mshahara_posho_ngazi_darajaAPI.php').success(function(data){
				$scope.ngaziData = data;
				});
	  };
	  
	  $scope.cheo_ID = {};
	  $scope.loadVyeo = function(){
				$http.get('msimamiziApp/sajili_mtumiaji/vyeoAPI.php').success(function(data){
				$scope.vyeoData = data;
				});
	  };

	$scope.form_data = {};
	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert.php",
			data:{
			'f_name':$scope.f_name, 
			'l_name':$scope.l_name,
			'm_name':$scope.m_name,
			'pf_no':$scope.pf_no, 
			'mob':$scope.mob,
			'e_add':$scope.e_add, 
			'div_unit_ID':$scope.idara.selected.div_unit_ID,
			'section_ID':$scope.section.selected.section_ID,
			'cheo_ID':$scope.cheo_ID.selected.cheo_ID,
			'ngazi_ya_mshahara':$scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara,
			'daraja_la_mshahara':$scope.ngazi_ya_mshahara.selected.daraja_la_mshahara,
			'levelID':$scope.levelID.selected.levelID, 
			'leseni':$scope.leseni,
			'username':$scope.username,
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
				$scope.fetchData();
			}
		});
	};
	
 	  
	  	$scope.safishaIdara = function() {
			//$scope.idara.selected = undefined;
			//$scope.section.selected = undefined;
			//$scope.idara.placeholder = 'Idara........';
			$scope.idara.selected.div_unit_kirefu = 'Idara..';
			$scope.idara.selected.div_unit_ID = '';
			//$scope.section.placeholder = 'Section..';
			$scope.section.selected.section_name = 'Section..';
			$scope.section.selected.section_ID = '999999';	
		  };
		
		  $scope.idara = {};
		  $scope.loadIdara = function(){
		  			$http.get('msimamiziApp/sajili_mtumiaji/idaraAPI.php').success(function(data){
				    $scope.idaraData = data;
					});
		  };		  
		
		  $scope.section_disabled = undefined;
		  $scope.enable_section = function() {
			$scope.section_disabled = false;
		  };	  
		  $scope.disable_section = function() {
		  	$scope.section_disabled = true;
		  };
		    
		  $scope.section = {};
		  $scope.loadSections = function(){		  
		  //$scope.section.placeholder = 'Section..';
		  $scope.section.selected.section_name = 'Section..';
		  $scope.section.selected.section_ID = '999999';			
		  //$scope.section.selected = undefined;		  
		  if($scope.idara.selected.div_au_unit == 'unit' ) {
		  	$scope.disable_section();
			}else{
			$scope.enable_section();
			};
		  $http.post("msimamiziApp/sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
		   .success(function(data){ 
				$scope.sectionData = data;		
		   });
		   };
		     
		  $scope.oneditloadSections = function(){
		  //$scope.section.placeholder = 'Section..';
		  //$scope.section.selected.section_name = 'Section..';
		 // $scope.section.selected.section_ID = '999999';	
		  if($scope.idara.selected.div_au_unit == 'unit' ) {
		  	$scope.disable_section();
			}else{
			$scope.enable_section();
			};
		   $http.post("msimamiziApp/sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
		   .success(function(data){ 
				$scope.sectionData = data;					
		   });
		   };
		
		
		$scope.addData = function(){
			$http.get('msimamiziApp/sajili_mtumiaji/fetch_data.php').success(function(data){
				$scope.idara.selected = data;
				$scope.section.selected = data;	
				$scope.idara.selected.div_unit_kirefu = 'Idara..';
				$scope.idara.selected.div_unit_ID = '';
				$scope.section.selected.section_name = 'Section..';
		 		$scope.section.selected.section_ID = '999999';
				
				$scope.f_name = '';
				$scope.l_name = '';
				$scope.m_name = '';
				$scope.pf_no = '';
				$scope.mob = '';
				$scope.e_add = '';
				$scope.leseni = '';
				$scope.pf_no = '';
				$scope.username = '';
				
				$scope.levelID.selected = data;
				$scope.ngazi_ya_mshahara.selected = data;
				$scope.cheo_ID.selected = data;
				$scope.levelID.selected.label = 'User level..';
				$scope.levelID.selected.levelID = '';
				$scope.ngazi_ya_mshahara.selected.daraja_la_mshahara = 'Ngazi ya mshahara..';
				$scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara = '';
				$scope.cheo_ID.selected.jina_la_cheo = 'Cheo..';
				$scope.cheo_ID.selected.cheo_ID = '';
				
				$scope.successMessage = '';
				$scope.modalTitle = 'Sajili Mtumiaji';
				$scope.submit_button = 'Insert';
				$scope.openModal();
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
			$scope.idara.selected = data;
			$scope.section.selected = data;
			$scope.levelID.selected = data;
			$scope.ngazi_ya_mshahara.selected = data;
			$scope.cheo_ID.selected = data;
			$scope.oneditloadSections();
			$scope.tazamaMtumiaji();
			$scope.hidden_mfanyakazi_id = mfanyakazi_id;
			$scope.modalTitle = 'Rekebisha Taarifa';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};

	$scope.deleteMtumiaji = function(mfanyakazi_id){
		if(confirm("Unataka kumuondoa mtumiaji?"))
		{
			$http({
				method:"POST",
				url:"msimamiziApp/sajili_mtumiaji/insert.php",
				data:{'mfanyakazi_id':mfanyakazi_id, 'action':'Delete'}
			}).success(function(data){
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.fetchData();
			});
		}
	};
	
	


});