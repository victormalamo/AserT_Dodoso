app.restaurant_ctrl = function($timeout, $scope, $http, focus){

	$scope.fetch_restaurant_items = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_restaurant_items.php",
			data:{'assessment_id':assessment_id, 'assessor_category':assessor_category }
			}).success(function(data){
			
				$scope.location_1_1_1_text = data.location_1_1_1_text;
				if(data.location_1_1_1_A == 0){ $scope.location_1_1_1_A = data.location_1_1_1_A; $scope.location_1_1_1_A = true; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A_c = false; $scope.location_1_1_1_A_cm = ''; } else if(data.location_1_1_1_A  == 2){ $scope.location_1_1_1_A = data.location_1_1_1_A; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = true; $scope.location_1_1_1_A_c = false; $scope.location_1_1_1_A_cm = ''; } else if(data.location_1_1_1_A  == ){ $scope.location_1_1_1_A = data.location_1_1_1_A; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A_c = true; $scope.location_1_1_1_A_cm = ''; }else if( ((data.location_1_1_1_A  > 0 ) && (data.location_1_1_1_A  < 2)) || ((data.location_1_1_1_A  > 2 ) && (data.location_1_1_1_A  < )) )
				{ $scope.location_1_1_1_A_cm = data.location_1_1_1_A; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = false;  $scope.location_1_1_1_A_c = false; $scope.location_1_1_1_A = ''; }else{ $scope.location_1_1_1_A = ''; $scope.location_1_1_1_A_cm = ''; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A_c = false; }
				$scope.location_1_1_2_text = data.location_1_1_2_text;
				if(data.location_1_1_2_A  == 1){ $scope.location_1_1_2_A  = data.location_1_1_2_A ; $scope.location_1_1_2_A = true; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_cm = ''; } else if(data.location_1_1_2_A  == 2){ $scope.location_1_1_2_A  = data.location_1_1_2_A ; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = true; $scope.location_1_1_2_A_cm = ''; }else if( ((data.location_1_1_2_A  > 0 ) && (data.location_1_1_2_A  < 1)) || ((data.location_1_1_2_A  > 1 ) && (data.location_1_1_2_A  < 2)))
				{ $scope.location_1_1_2_A_cm = data.location_1_1_2_A ; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A  = ''; }else{ $scope.location_1_1_2_A  = ''; $scope.location_1_1_2_A_cm = ''; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = false; }
				$scope.location_1_1_3_text = data.location_1_1_3_text;
				if(data.location_1_1_3_A  == 1){ $scope.location_1_1_3_A  = data.location_1_1_3_A ; $scope.location_1_1_3_A = true; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A_cm = ''; } else if(data.location_1_1_3_A  == 2){ $scope.location_1_1_3_A  = data.location_1_1_3_A ; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = true; $scope.location_1_1_3_A_cm = ''; }else if( ((data.location_1_1_3_A  > 0 ) && (data.location_1_1_3_A  < 1)) || ((data.location_1_1_3_A  > 1 ) && (data.location_1_1_3_A  < 2)))
				{ $scope.location_1_1_3_A_cm = data.location_1_1_3_A ; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A  = ''; }else{ $scope.location_1_1_3_A  = ''; $scope.location_1_1_3_A_cm = ''; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = false; }
				if(data.location_1_1_3_B == 0){ $scope.location_1_1_3_B = data.location_1_1_3_B; $scope.location_1_1_3_B = true; $scope.location_1_1_3_B_b = false; $scope.location_1_1_3_B_c = false; $scope.location_1_1_3_B_cm = ''; } else if(data.location_1_1_3_B  == 2){ $scope.location_1_1_3_B = data.location_1_1_3_B; $scope.location_1_1_3_B = false; $scope.location_1_1_3_B_b = true; $scope.location_1_1_3_B_c = false; $scope.location_1_1_3_B_cm = ''; } else if(data.location_1_1_3_B  == ){ $scope.location_1_1_3_B = data.location_1_1_3_B; $scope.location_1_1_3_B = false; $scope.location_1_1_3_B_b = false; $scope.location_1_1_3_B_c = true; $scope.location_1_1_3_B_cm = ''; }else if( ((data.location_1_1_3_B  > 0 ) && (data.location_1_1_3_B  < 2)) || ((data.location_1_1_3_B  > 2 ) && (data.location_1_1_3_B  < )) )
				{ $scope.location_1_1_3_B_cm = data.location_1_1_3_B; $scope.location_1_1_3_B = false; $scope.location_1_1_3_B_b = false;  $scope.location_1_1_3_B_c = false; $scope.location_1_1_3_B = ''; }else{ $scope.location_1_1_3_B = ''; $scope.location_1_1_3_B_cm = ''; $scope.location_1_1_3_B = false; $scope.location_1_1_3_B_b = false; $scope.location_1_1_3_B_c = false; }
				if(data.location_1_1_3_C == 1){ $scope.location_1_1_3_C = data.location_1_1_3_C; $scope.location_1_1_3_C = true; $scope.location_1_1_3_C_b = false; $scope.location_1_1_3_C_c = false; $scope.location_1_1_3_C_cm = ''; } else if(data.location_1_1_3_C  == 2){ $scope.location_1_1_3_C = data.location_1_1_3_C; $scope.location_1_1_3_C = false; $scope.location_1_1_3_C_b = true; $scope.location_1_1_3_C_c = false; $scope.location_1_1_3_C_cm = ''; } else if(data.location_1_1_3_C  == 3){ 
				$scope.location_1_1_3_C = data.location_1_1_3_C; $scope.location_1_1_3_C = false; $scope.location_1_1_3_C_b = false; $scope.location_1_1_3_C_c = true; $scope.location_1_1_3_C_cm = ''; } else if( ((data.location_1_1_3_C  >= 0 ) && (data.location_1_1_3_C  < 1)) || ((data.location_1_1_3_C  > 1 ) && (data.location_1_1_3_C  < 2)) || ((data.location_1_1_3_C  > 2 ) && (data.location_1_1_3_C  < 3)) ){ $scope.location_1_1_3_C_cm = data.location_1_1_3_C; $scope.location_1_1_3_C = false; $scope.location_1_1_3_C_b = false; $scope.location_1_1_3_C_c = false; $scope.location_1_1_3_C = ''; }else{ $scope.location_1_1_3_C = ''; $scope.location_1_1_3_C_cm = ''; $scope.location_1_1_3_C = false; $scope.location_1_1_3_C_b = false; $scope.location_1_1_3_C_c = false;}
				$scope.location_1_1_4_text = data.location_1_1_4_text;
				if(data.location_1_1_4_A == 0){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = true; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == 3){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = true; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == ){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = true; $scope.location_1_1_4_A_cm = ''; }else if( ((data.location_1_1_4_A  > 0 ) && (data.location_1_1_4_A  < 3)) || ((data.location_1_1_4_A  > 3 ) && (data.location_1_1_4_A  < )) )
				{ $scope.location_1_1_4_A_cm = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false;  $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A = ''; }else{ $scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_cm = ''; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; }
				$scope.location_1_1_5_text = data.location_1_1_5_text;
				if(data.location_1_1_5_A == 0){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = true; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A_cm = ''; } else if(data.location_1_1_5_A  == 2){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = true; $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A_cm = ''; } else if(data.location_1_1_5_A  == ){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = true; $scope.location_1_1_5_A_cm = ''; }else if( ((data.location_1_1_5_A  > 0 ) && (data.location_1_1_5_A  < 2)) || ((data.location_1_1_5_A  > 2 ) && (data.location_1_1_5_A  < )) )
				{ $scope.location_1_1_5_A_cm = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false;  $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A = ''; }else{ $scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_cm = ''; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = false; }
				$scope.location_1_1_6_text = data.location_1_1_6_text;
				if(data.location_1_1_6_A == 0){ $scope.location_1_1_6_A = data.location_1_1_6_A; $scope.location_1_1_6_A = true; $scope.location_1_1_6_A_b = false; $scope.location_1_1_6_A_c = false; $scope.location_1_1_6_A_cm = ''; } else if(data.location_1_1_6_A  == 4){ $scope.location_1_1_6_A = data.location_1_1_6_A; $scope.location_1_1_6_A = false; $scope.location_1_1_6_A_b = true; $scope.location_1_1_6_A_c = false; $scope.location_1_1_6_A_cm = ''; } else if(data.location_1_1_6_A  == ){ $scope.location_1_1_6_A = data.location_1_1_6_A; $scope.location_1_1_6_A = false; $scope.location_1_1_6_A_b = false; $scope.location_1_1_6_A_c = true; $scope.location_1_1_6_A_cm = ''; }else if( ((data.location_1_1_6_A  > 0 ) && (data.location_1_1_6_A  < 4)) || ((data.location_1_1_6_A  > 4 ) && (data.location_1_1_6_A  < )) )
				{ $scope.location_1_1_6_A_cm = data.location_1_1_6_A; $scope.location_1_1_6_A = false; $scope.location_1_1_6_A_b = false;  $scope.location_1_1_6_A_c = false; $scope.location_1_1_6_A = ''; }else{ $scope.location_1_1_6_A = ''; $scope.location_1_1_6_A_cm = ''; $scope.location_1_1_6_A = false; $scope.location_1_1_6_A_b = false; $scope.location_1_1_6_A_c = false; }
				$scope.building_2_1_1_text = data.building_2_1_1_text;
				if(data.building_2_1_1_A == 10){ $scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = true; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A_cm = ''; } else if(data.building_2_1_1_A  == 20){ $scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = true; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A_cm = ''; } else if(data.building_2_1_1_A  == 30){ 
				$scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = true; $scope.building_2_1_1_A_cm = ''; } else if( ((data.building_2_1_1_A  >= 0 ) && (data.building_2_1_1_A  < 10)) || ((data.building_2_1_1_A  > 10 ) && (data.building_2_1_1_A  < 20)) || ((data.building_2_1_1_A  > 20 ) && (data.building_2_1_1_A  < 30)) ){ $scope.building_2_1_1_A_cm = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A = ''; }else{ $scope.building_2_1_1_A = ''; $scope.building_2_1_1_A_cm = ''; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false;}
				$scope.building_2_1_2_text = data.building_2_1_2_text;
				if(data.building_2_1_2_A == 0){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = true; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A_cm = ''; } else if(data.building_2_1_2_A  == 10){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = true; $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A_cm = ''; } else if(data.building_2_1_2_A  == ){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = true; $scope.building_2_1_2_A_cm = ''; }else if( ((data.building_2_1_2_A  > 0 ) && (data.building_2_1_2_A  < 10)) || ((data.building_2_1_2_A  > 10 ) && (data.building_2_1_2_A  < )) )
				{ $scope.building_2_1_2_A_cm = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false;  $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A = ''; }else{ $scope.building_2_1_2_A = ''; $scope.building_2_1_2_A_cm = ''; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = false; }
				$scope.building_2_2_1_text = data.building_2_2_1_text;
				if(data.building_2_2_1_A == 0){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = true; $scope.building_2_2_1_A_b = false; $scope.building_2_2_1_A_c = false; $scope.building_2_2_1_A_cm = ''; } else if(data.building_2_2_1_A  == 3){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = true; $scope.building_2_2_1_A_c = false; $scope.building_2_2_1_A_cm = ''; } else if(data.building_2_2_1_A  == ){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = false; $scope.building_2_2_1_A_c = true; $scope.building_2_2_1_A_cm = ''; }else if( ((data.building_2_2_1_A  > 0 ) && (data.building_2_2_1_A  < 3)) || ((data.building_2_2_1_A  > 3 ) && (data.building_2_2_1_A  < )) )
				{ $scope.building_2_2_1_A_cm = data.building_2_2_1_A; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = false;  $scope.building_2_2_1_A_c = false; $scope.building_2_2_1_A = ''; }else{ $scope.building_2_2_1_A = ''; $scope.building_2_2_1_A_cm = ''; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = false; $scope.building_2_2_1_A_c = false; }
				if(data.building_2_2_1_B == 0){ $scope.building_2_2_1_B = data.building_2_2_1_B; $scope.building_2_2_1_B = true; $scope.building_2_2_1_B_b = false; $scope.building_2_2_1_B_c = false; $scope.building_2_2_1_B_cm = ''; } else if(data.building_2_2_1_B  == 3){ $scope.building_2_2_1_B = data.building_2_2_1_B; $scope.building_2_2_1_B = false; $scope.building_2_2_1_B_b = true; $scope.building_2_2_1_B_c = false; $scope.building_2_2_1_B_cm = ''; } else if(data.building_2_2_1_B  == ){ $scope.building_2_2_1_B = data.building_2_2_1_B; $scope.building_2_2_1_B = false; $scope.building_2_2_1_B_b = false; $scope.building_2_2_1_B_c = true; $scope.building_2_2_1_B_cm = ''; }else if( ((data.building_2_2_1_B  > 0 ) && (data.building_2_2_1_B  < 3)) || ((data.building_2_2_1_B  > 3 ) && (data.building_2_2_1_B  < )) )
				{ $scope.building_2_2_1_B_cm = data.building_2_2_1_B; $scope.building_2_2_1_B = false; $scope.building_2_2_1_B_b = false;  $scope.building_2_2_1_B_c = false; $scope.building_2_2_1_B = ''; }else{ $scope.building_2_2_1_B = ''; $scope.building_2_2_1_B_cm = ''; $scope.building_2_2_1_B = false; $scope.building_2_2_1_B_b = false; $scope.building_2_2_1_B_c = false; }
				$scope.building_2_2_2_text = data.building_2_2_2_text;
				if(data.building_2_2_2_A == 0){ $scope.building_2_2_2_A = data.building_2_2_2_A; $scope.building_2_2_2_A = true; $scope.building_2_2_2_A_b = false; $scope.building_2_2_2_A_c = false; $scope.building_2_2_2_A_cm = ''; } else if(data.building_2_2_2_A  == 5){ $scope.building_2_2_2_A = data.building_2_2_2_A; $scope.building_2_2_2_A = false; $scope.building_2_2_2_A_b = true; $scope.building_2_2_2_A_c = false; $scope.building_2_2_2_A_cm = ''; } else if(data.building_2_2_2_A  == ){ $scope.building_2_2_2_A = data.building_2_2_2_A; $scope.building_2_2_2_A = false; $scope.building_2_2_2_A_b = false; $scope.building_2_2_2_A_c = true; $scope.building_2_2_2_A_cm = ''; }else if( ((data.building_2_2_2_A  > 0 ) && (data.building_2_2_2_A  < 5)) || ((data.building_2_2_2_A  > 5 ) && (data.building_2_2_2_A  < )) )
				{ $scope.building_2_2_2_A_cm = data.building_2_2_2_A; $scope.building_2_2_2_A = false; $scope.building_2_2_2_A_b = false;  $scope.building_2_2_2_A_c = false; $scope.building_2_2_2_A = ''; }else{ $scope.building_2_2_2_A = ''; $scope.building_2_2_2_A_cm = ''; $scope.building_2_2_2_A = false; $scope.building_2_2_2_A_b = false; $scope.building_2_2_2_A_c = false; }
				if(data.building_2_2_2_B == 1){ $scope.building_2_2_2_B = data.building_2_2_2_B; $scope.building_2_2_2_B = true; $scope.building_2_2_2_B_b = false; $scope.building_2_2_2_B_c = false; $scope.building_2_2_2_B_cm = ''; } else if(data.building_2_2_2_B  == 3){ $scope.building_2_2_2_B = data.building_2_2_2_B; $scope.building_2_2_2_B = false; $scope.building_2_2_2_B_b = true; $scope.building_2_2_2_B_c = false; $scope.building_2_2_2_B_cm = ''; } else if(data.building_2_2_2_B  == 5){ 
				$scope.building_2_2_2_B = data.building_2_2_2_B; $scope.building_2_2_2_B = false; $scope.building_2_2_2_B_b = false; $scope.building_2_2_2_B_c = true; $scope.building_2_2_2_B_cm = ''; } else if( ((data.building_2_2_2_B  >= 0 ) && (data.building_2_2_2_B  < 1)) || ((data.building_2_2_2_B  > 1 ) && (data.building_2_2_2_B  < 3)) || ((data.building_2_2_2_B  > 3 ) && (data.building_2_2_2_B  < 5)) ){ $scope.building_2_2_2_B_cm = data.building_2_2_2_B; $scope.building_2_2_2_B = false; $scope.building_2_2_2_B_b = false; $scope.building_2_2_2_B_c = false; $scope.building_2_2_2_B = ''; }else{ $scope.building_2_2_2_B = ''; $scope.building_2_2_2_B_cm = ''; $scope.building_2_2_2_B = false; $scope.building_2_2_2_B_b = false; $scope.building_2_2_2_B_c = false;}
				if(data.building_2_2_2_C == 0){ $scope.building_2_2_2_C = data.building_2_2_2_C; $scope.building_2_2_2_C = true; $scope.building_2_2_2_C_b = false; $scope.building_2_2_2_C_c = false; $scope.building_2_2_2_C_cm = ''; } else if(data.building_2_2_2_C  == 5){ $scope.building_2_2_2_C = data.building_2_2_2_C; $scope.building_2_2_2_C = false; $scope.building_2_2_2_C_b = true; $scope.building_2_2_2_C_c = false; $scope.building_2_2_2_C_cm = ''; } else if(data.building_2_2_2_C  == ){ $scope.building_2_2_2_C = data.building_2_2_2_C; $scope.building_2_2_2_C = false; $scope.building_2_2_2_C_b = false; $scope.building_2_2_2_C_c = true; $scope.building_2_2_2_C_cm = ''; }else if( ((data.building_2_2_2_C  > 0 ) && (data.building_2_2_2_C  < 5)) || ((data.building_2_2_2_C  > 5 ) && (data.building_2_2_2_C  < )) )
				{ $scope.building_2_2_2_C_cm = data.building_2_2_2_C; $scope.building_2_2_2_C = false; $scope.building_2_2_2_C_b = false;  $scope.building_2_2_2_C_c = false; $scope.building_2_2_2_C = ''; }else{ $scope.building_2_2_2_C = ''; $scope.building_2_2_2_C_cm = ''; $scope.building_2_2_2_C = false; $scope.building_2_2_2_C_b = false; $scope.building_2_2_2_C_c = false; }
				if(data.building_2_2_2_D == 0){ $scope.building_2_2_2_D = data.building_2_2_2_D; $scope.building_2_2_2_D = true; $scope.building_2_2_2_D_b = false; $scope.building_2_2_2_D_c = false; $scope.building_2_2_2_D_cm = ''; } else if(data.building_2_2_2_D  == 5){ $scope.building_2_2_2_D = data.building_2_2_2_D; $scope.building_2_2_2_D = false; $scope.building_2_2_2_D_b = true; $scope.building_2_2_2_D_c = false; $scope.building_2_2_2_D_cm = ''; } else if(data.building_2_2_2_D  == ){ $scope.building_2_2_2_D = data.building_2_2_2_D; $scope.building_2_2_2_D = false; $scope.building_2_2_2_D_b = false; $scope.building_2_2_2_D_c = true; $scope.building_2_2_2_D_cm = ''; }else if( ((data.building_2_2_2_D  > 0 ) && (data.building_2_2_2_D  < 5)) || ((data.building_2_2_2_D  > 5 ) && (data.building_2_2_2_D  < )) )
				{ $scope.building_2_2_2_D_cm = data.building_2_2_2_D; $scope.building_2_2_2_D = false; $scope.building_2_2_2_D_b = false;  $scope.building_2_2_2_D_c = false; $scope.building_2_2_2_D = ''; }else{ $scope.building_2_2_2_D = ''; $scope.building_2_2_2_D_cm = ''; $scope.building_2_2_2_D = false; $scope.building_2_2_2_D_b = false; $scope.building_2_2_2_D_c = false; }
				if(data.building_2_2_2_E == 0){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = true; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E_cm = ''; } else if(data.building_2_2_2_E  == 5){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = true; $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E_cm = ''; } else if(data.building_2_2_2_E  == 7){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = true; $scope.building_2_2_2_E_cm = ''; }else if( ((data.building_2_2_2_E  > 0 ) && (data.building_2_2_2_E  < 5)) || ((data.building_2_2_2_E  > 5 ) && (data.building_2_2_2_E  < 7)) )
				{ $scope.building_2_2_2_E_cm = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false;  $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E = ''; }else{ $scope.building_2_2_2_E = ''; $scope.building_2_2_2_E_cm = ''; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = false; }
				if(data.building_2_2_2_F == 0){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = true; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F_cm = ''; } else if(data.building_2_2_2_F  == 5){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = true; $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F_cm = ''; } else if(data.building_2_2_2_F  == 7){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = true; $scope.building_2_2_2_F_cm = ''; }else if( ((data.building_2_2_2_F  > 0 ) && (data.building_2_2_2_F  < 5)) || ((data.building_2_2_2_F  > 5 ) && (data.building_2_2_2_F  < 7)) )
				{ $scope.building_2_2_2_F_cm = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false;  $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F = ''; }else{ $scope.building_2_2_2_F = ''; $scope.building_2_2_2_F_cm = ''; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; }
				$scope.building_2_3_1_text = data.building_2_3_1_text;
				if(data.building_2_3_1_A == 30){ $scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = true; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A_cm = ''; } else if(data.building_2_3_1_A  == 50){ $scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = true; $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A_cm = ''; } else if(data.building_2_3_1_A  == 60){ 
				$scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = true; $scope.building_2_3_1_A_cm = ''; } else if( ((data.building_2_3_1_A  >= 0 ) && (data.building_2_3_1_A  < 30)) || ((data.building_2_3_1_A  > 30 ) && (data.building_2_3_1_A  < 50)) || ((data.building_2_3_1_A  > 50 ) && (data.building_2_3_1_A  < 60)) ){ $scope.building_2_3_1_A_cm = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A = ''; }else{ $scope.building_2_3_1_A = ''; $scope.building_2_3_1_A_cm = ''; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false;}
				$scope.reception_3_1_1_text = data.reception_3_1_1_text;
				if(data.reception_3_1_1_A == 0){ $scope.reception_3_1_1_A = data.reception_3_1_1_A; $scope.reception_3_1_1_A = true; $scope.reception_3_1_1_A_b = false; $scope.reception_3_1_1_A_c = false; $scope.reception_3_1_1_A_cm = ''; } else if(data.reception_3_1_1_A  == 5){ $scope.reception_3_1_1_A = data.reception_3_1_1_A; $scope.reception_3_1_1_A = false; $scope.reception_3_1_1_A_b = true; $scope.reception_3_1_1_A_c = false; $scope.reception_3_1_1_A_cm = ''; } else if(data.reception_3_1_1_A  == ){ $scope.reception_3_1_1_A = data.reception_3_1_1_A; $scope.reception_3_1_1_A = false; $scope.reception_3_1_1_A_b = false; $scope.reception_3_1_1_A_c = true; $scope.reception_3_1_1_A_cm = ''; }else if( ((data.reception_3_1_1_A  > 0 ) && (data.reception_3_1_1_A  < 5)) || ((data.reception_3_1_1_A  > 5 ) && (data.reception_3_1_1_A  < )) )
				{ $scope.reception_3_1_1_A_cm = data.reception_3_1_1_A; $scope.reception_3_1_1_A = false; $scope.reception_3_1_1_A_b = false;  $scope.reception_3_1_1_A_c = false; $scope.reception_3_1_1_A = ''; }else{ $scope.reception_3_1_1_A = ''; $scope.reception_3_1_1_A_cm = ''; $scope.reception_3_1_1_A = false; $scope.reception_3_1_1_A_b = false; $scope.reception_3_1_1_A_c = false; }
				if(data.reception_3_1_1_B == 3){ $scope.reception_3_1_1_B = data.reception_3_1_1_B; $scope.reception_3_1_1_B = true; $scope.reception_3_1_1_B_b = false; $scope.reception_3_1_1_B_c = false; $scope.reception_3_1_1_B_cm = ''; } else if(data.reception_3_1_1_B  == 5){ $scope.reception_3_1_1_B = data.reception_3_1_1_B; $scope.reception_3_1_1_B = false; $scope.reception_3_1_1_B_b = true; $scope.reception_3_1_1_B_c = false; $scope.reception_3_1_1_B_cm = ''; } else if(data.reception_3_1_1_B  == 10){ 
				$scope.reception_3_1_1_B = data.reception_3_1_1_B; $scope.reception_3_1_1_B = false; $scope.reception_3_1_1_B_b = false; $scope.reception_3_1_1_B_c = true; $scope.reception_3_1_1_B_cm = ''; } else if( ((data.reception_3_1_1_B  >= 0 ) && (data.reception_3_1_1_B  < 3)) || ((data.reception_3_1_1_B  > 3 ) && (data.reception_3_1_1_B  < 5)) || ((data.reception_3_1_1_B  > 5 ) && (data.reception_3_1_1_B  < 10)) ){ $scope.reception_3_1_1_B_cm = data.reception_3_1_1_B; $scope.reception_3_1_1_B = false; $scope.reception_3_1_1_B_b = false; $scope.reception_3_1_1_B_c = false; $scope.reception_3_1_1_B = ''; }else{ $scope.reception_3_1_1_B = ''; $scope.reception_3_1_1_B_cm = ''; $scope.reception_3_1_1_B = false; $scope.reception_3_1_1_B_b = false; $scope.reception_3_1_1_B_c = false;}
				if(data.reception_3_1_1_C == 0){ $scope.reception_3_1_1_C = data.reception_3_1_1_C; $scope.reception_3_1_1_C = true; $scope.reception_3_1_1_C_b = false; $scope.reception_3_1_1_C_c = false; $scope.reception_3_1_1_C_cm = ''; } else if(data.reception_3_1_1_C  == 5){ $scope.reception_3_1_1_C = data.reception_3_1_1_C; $scope.reception_3_1_1_C = false; $scope.reception_3_1_1_C_b = true; $scope.reception_3_1_1_C_c = false; $scope.reception_3_1_1_C_cm = ''; } else if(data.reception_3_1_1_C  == ){ $scope.reception_3_1_1_C = data.reception_3_1_1_C; $scope.reception_3_1_1_C = false; $scope.reception_3_1_1_C_b = false; $scope.reception_3_1_1_C_c = true; $scope.reception_3_1_1_C_cm = ''; }else if( ((data.reception_3_1_1_C  > 0 ) && (data.reception_3_1_1_C  < 5)) || ((data.reception_3_1_1_C  > 5 ) && (data.reception_3_1_1_C  < )) )
				{ $scope.reception_3_1_1_C_cm = data.reception_3_1_1_C; $scope.reception_3_1_1_C = false; $scope.reception_3_1_1_C_b = false;  $scope.reception_3_1_1_C_c = false; $scope.reception_3_1_1_C = ''; }else{ $scope.reception_3_1_1_C = ''; $scope.reception_3_1_1_C_cm = ''; $scope.reception_3_1_1_C = false; $scope.reception_3_1_1_C_b = false; $scope.reception_3_1_1_C_c = false; }
				if(data.reception_3_1_1_D  == 5){ $scope.reception_3_1_1_D  = data.reception_3_1_1_D ; $scope.reception_3_1_1_D = true; $scope.reception_3_1_1_D_b = false; $scope.reception_3_1_1_D_cm = ''; } else if(data.reception_3_1_1_D  == 10){ $scope.reception_3_1_1_D  = data.reception_3_1_1_D ; $scope.reception_3_1_1_D = false; $scope.reception_3_1_1_D_b = true; $scope.reception_3_1_1_D_cm = ''; }else if( ((data.reception_3_1_1_D  > 0 ) && (data.reception_3_1_1_D  < 5)) || ((data.reception_3_1_1_D  > 5 ) && (data.reception_3_1_1_D  < 10)))
				{ $scope.reception_3_1_1_D_cm = data.reception_3_1_1_D ; $scope.reception_3_1_1_D = false; $scope.reception_3_1_1_D_b = false; $scope.reception_3_1_1_D  = ''; }else{ $scope.reception_3_1_1_D  = ''; $scope.reception_3_1_1_D_cm = ''; $scope.reception_3_1_1_D = false; $scope.reception_3_1_1_D_b = false; }
				if(data.reception_3_1_1_E == 2){ $scope.reception_3_1_1_E = data.reception_3_1_1_E; $scope.reception_3_1_1_E = true; $scope.reception_3_1_1_E_b = false; $scope.reception_3_1_1_E_c = false; $scope.reception_3_1_1_E_cm = ''; } else if(data.reception_3_1_1_E  == 5){ $scope.reception_3_1_1_E = data.reception_3_1_1_E; $scope.reception_3_1_1_E = false; $scope.reception_3_1_1_E_b = true; $scope.reception_3_1_1_E_c = false; $scope.reception_3_1_1_E_cm = ''; } else if(data.reception_3_1_1_E  == 10){ 
				$scope.reception_3_1_1_E = data.reception_3_1_1_E; $scope.reception_3_1_1_E = false; $scope.reception_3_1_1_E_b = false; $scope.reception_3_1_1_E_c = true; $scope.reception_3_1_1_E_cm = ''; } else if( ((data.reception_3_1_1_E  >= 0 ) && (data.reception_3_1_1_E  < 2)) || ((data.reception_3_1_1_E  > 2 ) && (data.reception_3_1_1_E  < 5)) || ((data.reception_3_1_1_E  > 5 ) && (data.reception_3_1_1_E  < 10)) ){ $scope.reception_3_1_1_E_cm = data.reception_3_1_1_E; $scope.reception_3_1_1_E = false; $scope.reception_3_1_1_E_b = false; $scope.reception_3_1_1_E_c = false; $scope.reception_3_1_1_E = ''; }else{ $scope.reception_3_1_1_E = ''; $scope.reception_3_1_1_E_cm = ''; $scope.reception_3_1_1_E = false; $scope.reception_3_1_1_E_b = false; $scope.reception_3_1_1_E_c = false;}
				$scope.dining_area_4_1_1_text = data.dining_area_4_1_1_text;
				if(data.dining_area_4_1_1_A == 2){ $scope.dining_area_4_1_1_A = data.dining_area_4_1_1_A; $scope.dining_area_4_1_1_A = true; $scope.dining_area_4_1_1_A_b = false; $scope.dining_area_4_1_1_A_c = false; $scope.dining_area_4_1_1_A_cm = ''; } else if(data.dining_area_4_1_1_A  == 3){ $scope.dining_area_4_1_1_A = data.dining_area_4_1_1_A; $scope.dining_area_4_1_1_A = false; $scope.dining_area_4_1_1_A_b = true; $scope.dining_area_4_1_1_A_c = false; $scope.dining_area_4_1_1_A_cm = ''; } else if(data.dining_area_4_1_1_A  == 5){ 
				$scope.dining_area_4_1_1_A = data.dining_area_4_1_1_A; $scope.dining_area_4_1_1_A = false; $scope.dining_area_4_1_1_A_b = false; $scope.dining_area_4_1_1_A_c = true; $scope.dining_area_4_1_1_A_cm = ''; } else if( ((data.dining_area_4_1_1_A  >= 0 ) && (data.dining_area_4_1_1_A  < 2)) || ((data.dining_area_4_1_1_A  > 2 ) && (data.dining_area_4_1_1_A  < 3)) || ((data.dining_area_4_1_1_A  > 3 ) && (data.dining_area_4_1_1_A  < 5)) ){ $scope.dining_area_4_1_1_A_cm = data.dining_area_4_1_1_A; $scope.dining_area_4_1_1_A = false; $scope.dining_area_4_1_1_A_b = false; $scope.dining_area_4_1_1_A_c = false; $scope.dining_area_4_1_1_A = ''; }else{ $scope.dining_area_4_1_1_A = ''; $scope.dining_area_4_1_1_A_cm = ''; $scope.dining_area_4_1_1_A = false; $scope.dining_area_4_1_1_A_b = false; $scope.dining_area_4_1_1_A_c = false;}
				if(data.dining_area_4_1_1_B == 2){ $scope.dining_area_4_1_1_B = data.dining_area_4_1_1_B; $scope.dining_area_4_1_1_B = true; $scope.dining_area_4_1_1_B_b = false; $scope.dining_area_4_1_1_B_c = false; $scope.dining_area_4_1_1_B_cm = ''; } else if(data.dining_area_4_1_1_B  == 3){ $scope.dining_area_4_1_1_B = data.dining_area_4_1_1_B; $scope.dining_area_4_1_1_B = false; $scope.dining_area_4_1_1_B_b = true; $scope.dining_area_4_1_1_B_c = false; $scope.dining_area_4_1_1_B_cm = ''; } else if(data.dining_area_4_1_1_B  == 5){ 
				$scope.dining_area_4_1_1_B = data.dining_area_4_1_1_B; $scope.dining_area_4_1_1_B = false; $scope.dining_area_4_1_1_B_b = false; $scope.dining_area_4_1_1_B_c = true; $scope.dining_area_4_1_1_B_cm = ''; } else if( ((data.dining_area_4_1_1_B  >= 0 ) && (data.dining_area_4_1_1_B  < 2)) || ((data.dining_area_4_1_1_B  > 2 ) && (data.dining_area_4_1_1_B  < 3)) || ((data.dining_area_4_1_1_B  > 3 ) && (data.dining_area_4_1_1_B  < 5)) ){ $scope.dining_area_4_1_1_B_cm = data.dining_area_4_1_1_B; $scope.dining_area_4_1_1_B = false; $scope.dining_area_4_1_1_B_b = false; $scope.dining_area_4_1_1_B_c = false; $scope.dining_area_4_1_1_B = ''; }else{ $scope.dining_area_4_1_1_B = ''; $scope.dining_area_4_1_1_B_cm = ''; $scope.dining_area_4_1_1_B = false; $scope.dining_area_4_1_1_B_b = false; $scope.dining_area_4_1_1_B_c = false;}
				if(data.dining_area_4_1_1_C == 1){ $scope.dining_area_4_1_1_C = data.dining_area_4_1_1_C; $scope.dining_area_4_1_1_C = true; $scope.dining_area_4_1_1_C_b = false; $scope.dining_area_4_1_1_C_c = false; $scope.dining_area_4_1_1_C_cm = ''; } else if(data.dining_area_4_1_1_C  == 2){ $scope.dining_area_4_1_1_C = data.dining_area_4_1_1_C; $scope.dining_area_4_1_1_C = false; $scope.dining_area_4_1_1_C_b = true; $scope.dining_area_4_1_1_C_c = false; $scope.dining_area_4_1_1_C_cm = ''; } else if(data.dining_area_4_1_1_C  == 3){ 
				$scope.dining_area_4_1_1_C = data.dining_area_4_1_1_C; $scope.dining_area_4_1_1_C = false; $scope.dining_area_4_1_1_C_b = false; $scope.dining_area_4_1_1_C_c = true; $scope.dining_area_4_1_1_C_cm = ''; } else if( ((data.dining_area_4_1_1_C  >= 0 ) && (data.dining_area_4_1_1_C  < 1)) || ((data.dining_area_4_1_1_C  > 1 ) && (data.dining_area_4_1_1_C  < 2)) || ((data.dining_area_4_1_1_C  > 2 ) && (data.dining_area_4_1_1_C  < 3)) ){ $scope.dining_area_4_1_1_C_cm = data.dining_area_4_1_1_C; $scope.dining_area_4_1_1_C = false; $scope.dining_area_4_1_1_C_b = false; $scope.dining_area_4_1_1_C_c = false; $scope.dining_area_4_1_1_C = ''; }else{ $scope.dining_area_4_1_1_C = ''; $scope.dining_area_4_1_1_C_cm = ''; $scope.dining_area_4_1_1_C = false; $scope.dining_area_4_1_1_C_b = false; $scope.dining_area_4_1_1_C_c = false;}
				if(data.dining_area_4_1_1_D == 1){ $scope.dining_area_4_1_1_D = data.dining_area_4_1_1_D; $scope.dining_area_4_1_1_D = true; $scope.dining_area_4_1_1_D_b = false; $scope.dining_area_4_1_1_D_c = false; $scope.dining_area_4_1_1_D_cm = ''; } else if(data.dining_area_4_1_1_D  == 2){ $scope.dining_area_4_1_1_D = data.dining_area_4_1_1_D; $scope.dining_area_4_1_1_D = false; $scope.dining_area_4_1_1_D_b = true; $scope.dining_area_4_1_1_D_c = false; $scope.dining_area_4_1_1_D_cm = ''; } else if(data.dining_area_4_1_1_D  == 3){ 
				$scope.dining_area_4_1_1_D = data.dining_area_4_1_1_D; $scope.dining_area_4_1_1_D = false; $scope.dining_area_4_1_1_D_b = false; $scope.dining_area_4_1_1_D_c = true; $scope.dining_area_4_1_1_D_cm = ''; } else if( ((data.dining_area_4_1_1_D  >= 0 ) && (data.dining_area_4_1_1_D  < 1)) || ((data.dining_area_4_1_1_D  > 1 ) && (data.dining_area_4_1_1_D  < 2)) || ((data.dining_area_4_1_1_D  > 2 ) && (data.dining_area_4_1_1_D  < 3)) ){ $scope.dining_area_4_1_1_D_cm = data.dining_area_4_1_1_D; $scope.dining_area_4_1_1_D = false; $scope.dining_area_4_1_1_D_b = false; $scope.dining_area_4_1_1_D_c = false; $scope.dining_area_4_1_1_D = ''; }else{ $scope.dining_area_4_1_1_D = ''; $scope.dining_area_4_1_1_D_cm = ''; $scope.dining_area_4_1_1_D = false; $scope.dining_area_4_1_1_D_b = false; $scope.dining_area_4_1_1_D_c = false;}
				if(data.dining_area_4_1_1_E == 1){ $scope.dining_area_4_1_1_E = data.dining_area_4_1_1_E; $scope.dining_area_4_1_1_E = true; $scope.dining_area_4_1_1_E_b = false; $scope.dining_area_4_1_1_E_c = false; $scope.dining_area_4_1_1_E_cm = ''; } else if(data.dining_area_4_1_1_E  == 2){ $scope.dining_area_4_1_1_E = data.dining_area_4_1_1_E; $scope.dining_area_4_1_1_E = false; $scope.dining_area_4_1_1_E_b = true; $scope.dining_area_4_1_1_E_c = false; $scope.dining_area_4_1_1_E_cm = ''; } else if(data.dining_area_4_1_1_E  == 3){ 
				$scope.dining_area_4_1_1_E = data.dining_area_4_1_1_E; $scope.dining_area_4_1_1_E = false; $scope.dining_area_4_1_1_E_b = false; $scope.dining_area_4_1_1_E_c = true; $scope.dining_area_4_1_1_E_cm = ''; } else if( ((data.dining_area_4_1_1_E  >= 0 ) && (data.dining_area_4_1_1_E  < 1)) || ((data.dining_area_4_1_1_E  > 1 ) && (data.dining_area_4_1_1_E  < 2)) || ((data.dining_area_4_1_1_E  > 2 ) && (data.dining_area_4_1_1_E  < 3)) ){ $scope.dining_area_4_1_1_E_cm = data.dining_area_4_1_1_E; $scope.dining_area_4_1_1_E = false; $scope.dining_area_4_1_1_E_b = false; $scope.dining_area_4_1_1_E_c = false; $scope.dining_area_4_1_1_E = ''; }else{ $scope.dining_area_4_1_1_E = ''; $scope.dining_area_4_1_1_E_cm = ''; $scope.dining_area_4_1_1_E = false; $scope.dining_area_4_1_1_E_b = false; $scope.dining_area_4_1_1_E_c = false;}
				if(data.dining_area_4_1_1_F == 1){ $scope.dining_area_4_1_1_F = data.dining_area_4_1_1_F; $scope.dining_area_4_1_1_F = true; $scope.dining_area_4_1_1_F_b = false; $scope.dining_area_4_1_1_F_c = false; $scope.dining_area_4_1_1_F_cm = ''; } else if(data.dining_area_4_1_1_F  == 2){ $scope.dining_area_4_1_1_F = data.dining_area_4_1_1_F; $scope.dining_area_4_1_1_F = false; $scope.dining_area_4_1_1_F_b = true; $scope.dining_area_4_1_1_F_c = false; $scope.dining_area_4_1_1_F_cm = ''; } else if(data.dining_area_4_1_1_F  == 3){ 
				$scope.dining_area_4_1_1_F = data.dining_area_4_1_1_F; $scope.dining_area_4_1_1_F = false; $scope.dining_area_4_1_1_F_b = false; $scope.dining_area_4_1_1_F_c = true; $scope.dining_area_4_1_1_F_cm = ''; } else if( ((data.dining_area_4_1_1_F  >= 0 ) && (data.dining_area_4_1_1_F  < 1)) || ((data.dining_area_4_1_1_F  > 1 ) && (data.dining_area_4_1_1_F  < 2)) || ((data.dining_area_4_1_1_F  > 2 ) && (data.dining_area_4_1_1_F  < 3)) ){ $scope.dining_area_4_1_1_F_cm = data.dining_area_4_1_1_F; $scope.dining_area_4_1_1_F = false; $scope.dining_area_4_1_1_F_b = false; $scope.dining_area_4_1_1_F_c = false; $scope.dining_area_4_1_1_F = ''; }else{ $scope.dining_area_4_1_1_F = ''; $scope.dining_area_4_1_1_F_cm = ''; $scope.dining_area_4_1_1_F = false; $scope.dining_area_4_1_1_F_b = false; $scope.dining_area_4_1_1_F_c = false;}
				if(data.dining_area_4_1_1_G == 1){ $scope.dining_area_4_1_1_G = data.dining_area_4_1_1_G; $scope.dining_area_4_1_1_G = true; $scope.dining_area_4_1_1_G_b = false; $scope.dining_area_4_1_1_G_c = false; $scope.dining_area_4_1_1_G_cm = ''; } else if(data.dining_area_4_1_1_G  == 2){ $scope.dining_area_4_1_1_G = data.dining_area_4_1_1_G; $scope.dining_area_4_1_1_G = false; $scope.dining_area_4_1_1_G_b = true; $scope.dining_area_4_1_1_G_c = false; $scope.dining_area_4_1_1_G_cm = ''; } else if(data.dining_area_4_1_1_G  == 3){ 
				$scope.dining_area_4_1_1_G = data.dining_area_4_1_1_G; $scope.dining_area_4_1_1_G = false; $scope.dining_area_4_1_1_G_b = false; $scope.dining_area_4_1_1_G_c = true; $scope.dining_area_4_1_1_G_cm = ''; } else if( ((data.dining_area_4_1_1_G  >= 0 ) && (data.dining_area_4_1_1_G  < 1)) || ((data.dining_area_4_1_1_G  > 1 ) && (data.dining_area_4_1_1_G  < 2)) || ((data.dining_area_4_1_1_G  > 2 ) && (data.dining_area_4_1_1_G  < 3)) ){ $scope.dining_area_4_1_1_G_cm = data.dining_area_4_1_1_G; $scope.dining_area_4_1_1_G = false; $scope.dining_area_4_1_1_G_b = false; $scope.dining_area_4_1_1_G_c = false; $scope.dining_area_4_1_1_G = ''; }else{ $scope.dining_area_4_1_1_G = ''; $scope.dining_area_4_1_1_G_cm = ''; $scope.dining_area_4_1_1_G = false; $scope.dining_area_4_1_1_G_b = false; $scope.dining_area_4_1_1_G_c = false;}
				if(data.dining_area_4_1_1_H == 1){ $scope.dining_area_4_1_1_H = data.dining_area_4_1_1_H; $scope.dining_area_4_1_1_H = true; $scope.dining_area_4_1_1_H_b = false; $scope.dining_area_4_1_1_H_c = false; $scope.dining_area_4_1_1_H_cm = ''; } else if(data.dining_area_4_1_1_H  == 2){ $scope.dining_area_4_1_1_H = data.dining_area_4_1_1_H; $scope.dining_area_4_1_1_H = false; $scope.dining_area_4_1_1_H_b = true; $scope.dining_area_4_1_1_H_c = false; $scope.dining_area_4_1_1_H_cm = ''; } else if(data.dining_area_4_1_1_H  == 3){ 
				$scope.dining_area_4_1_1_H = data.dining_area_4_1_1_H; $scope.dining_area_4_1_1_H = false; $scope.dining_area_4_1_1_H_b = false; $scope.dining_area_4_1_1_H_c = true; $scope.dining_area_4_1_1_H_cm = ''; } else if( ((data.dining_area_4_1_1_H  >= 0 ) && (data.dining_area_4_1_1_H  < 1)) || ((data.dining_area_4_1_1_H  > 1 ) && (data.dining_area_4_1_1_H  < 2)) || ((data.dining_area_4_1_1_H  > 2 ) && (data.dining_area_4_1_1_H  < 3)) ){ $scope.dining_area_4_1_1_H_cm = data.dining_area_4_1_1_H; $scope.dining_area_4_1_1_H = false; $scope.dining_area_4_1_1_H_b = false; $scope.dining_area_4_1_1_H_c = false; $scope.dining_area_4_1_1_H = ''; }else{ $scope.dining_area_4_1_1_H = ''; $scope.dining_area_4_1_1_H_cm = ''; $scope.dining_area_4_1_1_H = false; $scope.dining_area_4_1_1_H_b = false; $scope.dining_area_4_1_1_H_c = false;}
				if(data.dining_area_4_1_1_I == 1){ $scope.dining_area_4_1_1_I = data.dining_area_4_1_1_I; $scope.dining_area_4_1_1_I = true; $scope.dining_area_4_1_1_I_b = false; $scope.dining_area_4_1_1_I_c = false; $scope.dining_area_4_1_1_I_cm = ''; } else if(data.dining_area_4_1_1_I  == 3){ $scope.dining_area_4_1_1_I = data.dining_area_4_1_1_I; $scope.dining_area_4_1_1_I = false; $scope.dining_area_4_1_1_I_b = true; $scope.dining_area_4_1_1_I_c = false; $scope.dining_area_4_1_1_I_cm = ''; } else if(data.dining_area_4_1_1_I  == 5){ 
				$scope.dining_area_4_1_1_I = data.dining_area_4_1_1_I; $scope.dining_area_4_1_1_I = false; $scope.dining_area_4_1_1_I_b = false; $scope.dining_area_4_1_1_I_c = true; $scope.dining_area_4_1_1_I_cm = ''; } else if( ((data.dining_area_4_1_1_I  >= 0 ) && (data.dining_area_4_1_1_I  < 1)) || ((data.dining_area_4_1_1_I  > 1 ) && (data.dining_area_4_1_1_I  < 3)) || ((data.dining_area_4_1_1_I  > 3 ) && (data.dining_area_4_1_1_I  < 5)) ){ $scope.dining_area_4_1_1_I_cm = data.dining_area_4_1_1_I; $scope.dining_area_4_1_1_I = false; $scope.dining_area_4_1_1_I_b = false; $scope.dining_area_4_1_1_I_c = false; $scope.dining_area_4_1_1_I = ''; }else{ $scope.dining_area_4_1_1_I = ''; $scope.dining_area_4_1_1_I_cm = ''; $scope.dining_area_4_1_1_I = false; $scope.dining_area_4_1_1_I_b = false; $scope.dining_area_4_1_1_I_c = false;}
				if(data.dining_area_4_1_1_J == 0){ $scope.dining_area_4_1_1_J = data.dining_area_4_1_1_J; $scope.dining_area_4_1_1_J = true; $scope.dining_area_4_1_1_J_b = false; $scope.dining_area_4_1_1_J_c = false; $scope.dining_area_4_1_1_J_cm = ''; } else if(data.dining_area_4_1_1_J  == 3){ $scope.dining_area_4_1_1_J = data.dining_area_4_1_1_J; $scope.dining_area_4_1_1_J = false; $scope.dining_area_4_1_1_J_b = true; $scope.dining_area_4_1_1_J_c = false; $scope.dining_area_4_1_1_J_cm = ''; } else if(data.dining_area_4_1_1_J  == 5){ $scope.dining_area_4_1_1_J = data.dining_area_4_1_1_J; $scope.dining_area_4_1_1_J = false; $scope.dining_area_4_1_1_J_b = false; $scope.dining_area_4_1_1_J_c = true; $scope.dining_area_4_1_1_J_cm = ''; }else if( ((data.dining_area_4_1_1_J  > 0 ) && (data.dining_area_4_1_1_J  < 3)) || ((data.dining_area_4_1_1_J  > 3 ) && (data.dining_area_4_1_1_J  < 5)) )
				{ $scope.dining_area_4_1_1_J_cm = data.dining_area_4_1_1_J; $scope.dining_area_4_1_1_J = false; $scope.dining_area_4_1_1_J_b = false;  $scope.dining_area_4_1_1_J_c = false; $scope.dining_area_4_1_1_J = ''; }else{ $scope.dining_area_4_1_1_J = ''; $scope.dining_area_4_1_1_J_cm = ''; $scope.dining_area_4_1_1_J = false; $scope.dining_area_4_1_1_J_b = false; $scope.dining_area_4_1_1_J_c = false; }
				if(data.dining_area_4_1_1_K == 0){ $scope.dining_area_4_1_1_K = data.dining_area_4_1_1_K; $scope.dining_area_4_1_1_K = true; $scope.dining_area_4_1_1_K_b = false; $scope.dining_area_4_1_1_K_c = false; $scope.dining_area_4_1_1_K_cm = ''; } else if(data.dining_area_4_1_1_K  == 3){ $scope.dining_area_4_1_1_K = data.dining_area_4_1_1_K; $scope.dining_area_4_1_1_K = false; $scope.dining_area_4_1_1_K_b = true; $scope.dining_area_4_1_1_K_c = false; $scope.dining_area_4_1_1_K_cm = ''; } else if(data.dining_area_4_1_1_K  == 5){ $scope.dining_area_4_1_1_K = data.dining_area_4_1_1_K; $scope.dining_area_4_1_1_K = false; $scope.dining_area_4_1_1_K_b = false; $scope.dining_area_4_1_1_K_c = true; $scope.dining_area_4_1_1_K_cm = ''; }else if( ((data.dining_area_4_1_1_K  > 0 ) && (data.dining_area_4_1_1_K  < 3)) || ((data.dining_area_4_1_1_K  > 3 ) && (data.dining_area_4_1_1_K  < 5)) )
				{ $scope.dining_area_4_1_1_K_cm = data.dining_area_4_1_1_K; $scope.dining_area_4_1_1_K = false; $scope.dining_area_4_1_1_K_b = false;  $scope.dining_area_4_1_1_K_c = false; $scope.dining_area_4_1_1_K = ''; }else{ $scope.dining_area_4_1_1_K = ''; $scope.dining_area_4_1_1_K_cm = ''; $scope.dining_area_4_1_1_K = false; $scope.dining_area_4_1_1_K_b = false; $scope.dining_area_4_1_1_K_c = false; }
				if(data.dining_area_4_1_1_L == 0){ $scope.dining_area_4_1_1_L = data.dining_area_4_1_1_L; $scope.dining_area_4_1_1_L = true; $scope.dining_area_4_1_1_L_b = false; $scope.dining_area_4_1_1_L_c = false; $scope.dining_area_4_1_1_L_cm = ''; } else if(data.dining_area_4_1_1_L  == 3){ $scope.dining_area_4_1_1_L = data.dining_area_4_1_1_L; $scope.dining_area_4_1_1_L = false; $scope.dining_area_4_1_1_L_b = true; $scope.dining_area_4_1_1_L_c = false; $scope.dining_area_4_1_1_L_cm = ''; } else if(data.dining_area_4_1_1_L  == 5){ $scope.dining_area_4_1_1_L = data.dining_area_4_1_1_L; $scope.dining_area_4_1_1_L = false; $scope.dining_area_4_1_1_L_b = false; $scope.dining_area_4_1_1_L_c = true; $scope.dining_area_4_1_1_L_cm = ''; }else if( ((data.dining_area_4_1_1_L  > 0 ) && (data.dining_area_4_1_1_L  < 3)) || ((data.dining_area_4_1_1_L  > 3 ) && (data.dining_area_4_1_1_L  < 5)) )
				{ $scope.dining_area_4_1_1_L_cm = data.dining_area_4_1_1_L; $scope.dining_area_4_1_1_L = false; $scope.dining_area_4_1_1_L_b = false;  $scope.dining_area_4_1_1_L_c = false; $scope.dining_area_4_1_1_L = ''; }else{ $scope.dining_area_4_1_1_L = ''; $scope.dining_area_4_1_1_L_cm = ''; $scope.dining_area_4_1_1_L = false; $scope.dining_area_4_1_1_L_b = false; $scope.dining_area_4_1_1_L_c = false; }
				$scope.dining_area_4_2_1_text = data.dining_area_4_2_1_text;
				if(data.dining_area_4_2_1_A == 0){ $scope.dining_area_4_2_1_A = data.dining_area_4_2_1_A; $scope.dining_area_4_2_1_A = true; $scope.dining_area_4_2_1_A_b = false; $scope.dining_area_4_2_1_A_c = false; $scope.dining_area_4_2_1_A_cm = ''; } else if(data.dining_area_4_2_1_A  == 5){ $scope.dining_area_4_2_1_A = data.dining_area_4_2_1_A; $scope.dining_area_4_2_1_A = false; $scope.dining_area_4_2_1_A_b = true; $scope.dining_area_4_2_1_A_c = false; $scope.dining_area_4_2_1_A_cm = ''; } else if(data.dining_area_4_2_1_A  == ){ $scope.dining_area_4_2_1_A = data.dining_area_4_2_1_A; $scope.dining_area_4_2_1_A = false; $scope.dining_area_4_2_1_A_b = false; $scope.dining_area_4_2_1_A_c = true; $scope.dining_area_4_2_1_A_cm = ''; }else if( ((data.dining_area_4_2_1_A  > 0 ) && (data.dining_area_4_2_1_A  < 5)) || ((data.dining_area_4_2_1_A  > 5 ) && (data.dining_area_4_2_1_A  < )) )
				{ $scope.dining_area_4_2_1_A_cm = data.dining_area_4_2_1_A; $scope.dining_area_4_2_1_A = false; $scope.dining_area_4_2_1_A_b = false;  $scope.dining_area_4_2_1_A_c = false; $scope.dining_area_4_2_1_A = ''; }else{ $scope.dining_area_4_2_1_A = ''; $scope.dining_area_4_2_1_A_cm = ''; $scope.dining_area_4_2_1_A = false; $scope.dining_area_4_2_1_A_b = false; $scope.dining_area_4_2_1_A_c = false; }
				if(data.dining_area_4_2_1_B == 0){ $scope.dining_area_4_2_1_B = data.dining_area_4_2_1_B; $scope.dining_area_4_2_1_B = true; $scope.dining_area_4_2_1_B_b = false; $scope.dining_area_4_2_1_B_c = false; $scope.dining_area_4_2_1_B_cm = ''; } else if(data.dining_area_4_2_1_B  == 5){ $scope.dining_area_4_2_1_B = data.dining_area_4_2_1_B; $scope.dining_area_4_2_1_B = false; $scope.dining_area_4_2_1_B_b = true; $scope.dining_area_4_2_1_B_c = false; $scope.dining_area_4_2_1_B_cm = ''; } else if(data.dining_area_4_2_1_B  == ){ $scope.dining_area_4_2_1_B = data.dining_area_4_2_1_B; $scope.dining_area_4_2_1_B = false; $scope.dining_area_4_2_1_B_b = false; $scope.dining_area_4_2_1_B_c = true; $scope.dining_area_4_2_1_B_cm = ''; }else if( ((data.dining_area_4_2_1_B  > 0 ) && (data.dining_area_4_2_1_B  < 5)) || ((data.dining_area_4_2_1_B  > 5 ) && (data.dining_area_4_2_1_B  < )) )
				{ $scope.dining_area_4_2_1_B_cm = data.dining_area_4_2_1_B; $scope.dining_area_4_2_1_B = false; $scope.dining_area_4_2_1_B_b = false;  $scope.dining_area_4_2_1_B_c = false; $scope.dining_area_4_2_1_B = ''; }else{ $scope.dining_area_4_2_1_B = ''; $scope.dining_area_4_2_1_B_cm = ''; $scope.dining_area_4_2_1_B = false; $scope.dining_area_4_2_1_B_b = false; $scope.dining_area_4_2_1_B_c = false; }
				if(data.dining_area_4_2_1_C == 1){ $scope.dining_area_4_2_1_C = data.dining_area_4_2_1_C; $scope.dining_area_4_2_1_C = true; $scope.dining_area_4_2_1_C_b = false; $scope.dining_area_4_2_1_C_c = false; $scope.dining_area_4_2_1_C_cm = ''; } else if(data.dining_area_4_2_1_C  == 3){ $scope.dining_area_4_2_1_C = data.dining_area_4_2_1_C; $scope.dining_area_4_2_1_C = false; $scope.dining_area_4_2_1_C_b = true; $scope.dining_area_4_2_1_C_c = false; $scope.dining_area_4_2_1_C_cm = ''; } else if(data.dining_area_4_2_1_C  == 5){ 
				$scope.dining_area_4_2_1_C = data.dining_area_4_2_1_C; $scope.dining_area_4_2_1_C = false; $scope.dining_area_4_2_1_C_b = false; $scope.dining_area_4_2_1_C_c = true; $scope.dining_area_4_2_1_C_cm = ''; } else if( ((data.dining_area_4_2_1_C  >= 0 ) && (data.dining_area_4_2_1_C  < 1)) || ((data.dining_area_4_2_1_C  > 1 ) && (data.dining_area_4_2_1_C  < 3)) || ((data.dining_area_4_2_1_C  > 3 ) && (data.dining_area_4_2_1_C  < 5)) ){ $scope.dining_area_4_2_1_C_cm = data.dining_area_4_2_1_C; $scope.dining_area_4_2_1_C = false; $scope.dining_area_4_2_1_C_b = false; $scope.dining_area_4_2_1_C_c = false; $scope.dining_area_4_2_1_C = ''; }else{ $scope.dining_area_4_2_1_C = ''; $scope.dining_area_4_2_1_C_cm = ''; $scope.dining_area_4_2_1_C = false; $scope.dining_area_4_2_1_C_b = false; $scope.dining_area_4_2_1_C_c = false;}
				if(data.dining_area_4_2_1_D == 0){ $scope.dining_area_4_2_1_D = data.dining_area_4_2_1_D; $scope.dining_area_4_2_1_D = true; $scope.dining_area_4_2_1_D_b = false; $scope.dining_area_4_2_1_D_c = false; $scope.dining_area_4_2_1_D_cm = ''; } else if(data.dining_area_4_2_1_D  == 3){ $scope.dining_area_4_2_1_D = data.dining_area_4_2_1_D; $scope.dining_area_4_2_1_D = false; $scope.dining_area_4_2_1_D_b = true; $scope.dining_area_4_2_1_D_c = false; $scope.dining_area_4_2_1_D_cm = ''; } else if(data.dining_area_4_2_1_D  == 5){ $scope.dining_area_4_2_1_D = data.dining_area_4_2_1_D; $scope.dining_area_4_2_1_D = false; $scope.dining_area_4_2_1_D_b = false; $scope.dining_area_4_2_1_D_c = true; $scope.dining_area_4_2_1_D_cm = ''; }else if( ((data.dining_area_4_2_1_D  > 0 ) && (data.dining_area_4_2_1_D  < 3)) || ((data.dining_area_4_2_1_D  > 3 ) && (data.dining_area_4_2_1_D  < 5)) )
				{ $scope.dining_area_4_2_1_D_cm = data.dining_area_4_2_1_D; $scope.dining_area_4_2_1_D = false; $scope.dining_area_4_2_1_D_b = false;  $scope.dining_area_4_2_1_D_c = false; $scope.dining_area_4_2_1_D = ''; }else{ $scope.dining_area_4_2_1_D = ''; $scope.dining_area_4_2_1_D_cm = ''; $scope.dining_area_4_2_1_D = false; $scope.dining_area_4_2_1_D_b = false; $scope.dining_area_4_2_1_D_c = false; }
				$scope.dining_area_4_3_1_text = data.dining_area_4_3_1_text;
				if(data.dining_area_4_3_1_A == 0){ $scope.dining_area_4_3_1_A = data.dining_area_4_3_1_A; $scope.dining_area_4_3_1_A = true; $scope.dining_area_4_3_1_A_b = false; $scope.dining_area_4_3_1_A_c = false; $scope.dining_area_4_3_1_A_cm = ''; } else if(data.dining_area_4_3_1_A  == 15){ $scope.dining_area_4_3_1_A = data.dining_area_4_3_1_A; $scope.dining_area_4_3_1_A = false; $scope.dining_area_4_3_1_A_b = true; $scope.dining_area_4_3_1_A_c = false; $scope.dining_area_4_3_1_A_cm = ''; } else if(data.dining_area_4_3_1_A  == 20){ $scope.dining_area_4_3_1_A = data.dining_area_4_3_1_A; $scope.dining_area_4_3_1_A = false; $scope.dining_area_4_3_1_A_b = false; $scope.dining_area_4_3_1_A_c = true; $scope.dining_area_4_3_1_A_cm = ''; }else if( ((data.dining_area_4_3_1_A  > 0 ) && (data.dining_area_4_3_1_A  < 15)) || ((data.dining_area_4_3_1_A  > 15 ) && (data.dining_area_4_3_1_A  < 20)) )
				{ $scope.dining_area_4_3_1_A_cm = data.dining_area_4_3_1_A; $scope.dining_area_4_3_1_A = false; $scope.dining_area_4_3_1_A_b = false;  $scope.dining_area_4_3_1_A_c = false; $scope.dining_area_4_3_1_A = ''; }else{ $scope.dining_area_4_3_1_A = ''; $scope.dining_area_4_3_1_A_cm = ''; $scope.dining_area_4_3_1_A = false; $scope.dining_area_4_3_1_A_b = false; $scope.dining_area_4_3_1_A_c = false; }
				if(data.dining_area_4_3_1_B == 5){ $scope.dining_area_4_3_1_B = data.dining_area_4_3_1_B; $scope.dining_area_4_3_1_B = true; $scope.dining_area_4_3_1_B_b = false; $scope.dining_area_4_3_1_B_c = false; $scope.dining_area_4_3_1_B_cm = ''; } else if(data.dining_area_4_3_1_B  == 15){ $scope.dining_area_4_3_1_B = data.dining_area_4_3_1_B; $scope.dining_area_4_3_1_B = false; $scope.dining_area_4_3_1_B_b = true; $scope.dining_area_4_3_1_B_c = false; $scope.dining_area_4_3_1_B_cm = ''; } else if(data.dining_area_4_3_1_B  == 20){ 
				$scope.dining_area_4_3_1_B = data.dining_area_4_3_1_B; $scope.dining_area_4_3_1_B = false; $scope.dining_area_4_3_1_B_b = false; $scope.dining_area_4_3_1_B_c = true; $scope.dining_area_4_3_1_B_cm = ''; } else if( ((data.dining_area_4_3_1_B  >= 0 ) && (data.dining_area_4_3_1_B  < 5)) || ((data.dining_area_4_3_1_B  > 5 ) && (data.dining_area_4_3_1_B  < 15)) || ((data.dining_area_4_3_1_B  > 15 ) && (data.dining_area_4_3_1_B  < 20)) ){ $scope.dining_area_4_3_1_B_cm = data.dining_area_4_3_1_B; $scope.dining_area_4_3_1_B = false; $scope.dining_area_4_3_1_B_b = false; $scope.dining_area_4_3_1_B_c = false; $scope.dining_area_4_3_1_B = ''; }else{ $scope.dining_area_4_3_1_B = ''; $scope.dining_area_4_3_1_B_cm = ''; $scope.dining_area_4_3_1_B = false; $scope.dining_area_4_3_1_B_b = false; $scope.dining_area_4_3_1_B_c = false;}
				if(data.dining_area_4_3_1_C == 0){ $scope.dining_area_4_3_1_C = data.dining_area_4_3_1_C; $scope.dining_area_4_3_1_C = true; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = false; $scope.dining_area_4_3_1_C_cm = ''; } else if(data.dining_area_4_3_1_C  == 2){ $scope.dining_area_4_3_1_C = data.dining_area_4_3_1_C; $scope.dining_area_4_3_1_C = false; $scope.dining_area_4_3_1_C_b = true; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = false; $scope.dining_area_4_3_1_C_cm = ''; } else if(data.dining_area_4_3_1_C  == 5){ $scope.dining_area_4_3_1_C = data.dining_area_4_3_1_C; $scope.dining_area_4_3_1_C = false; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = true; $scope.dining_area_4_3_1_C_d = false; $scope.dining_area_4_3_1_C_cm = ''; }else if(data.dining_area_4_3_1_C  == 10){ $scope.dining_area_4_3_1_C = data.dining_area_4_3_1_C; $scope.dining_area_4_3_1_C = false; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = true; $scope.dining_area_4_3_1_C_cm = ''; } else if( ((data.dining_area_4_3_1_C  > 0 ) && (data.dining_area_4_3_1_C  < 2)) || ((data.dining_area_4_3_1_C  > 2 ) && (data.dining_area_4_3_1_C  < 5)) || ((data.dining_area_4_3_1_C  > 5 ) && (data.dining_area_4_3_1_C  < 10)) )
				{ $scope.dining_area_4_3_1_C_cm = data.dining_area_4_3_1_C; $scope.dining_area_4_3_1_C = false; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = false; $scope.dining_area_4_3_1_C = ''; }else{ $scope.dining_area_4_3_1_C = ''; $scope.dining_area_4_3_1_C_cm = ''; $scope.dining_area_4_3_1_C = false; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = false;}
				$scope.dining_area_4_4_1_text = data.dining_area_4_4_1_text;
				if(data.dining_area_4_4_1_A == 3){ $scope.dining_area_4_4_1_A = data.dining_area_4_4_1_A; $scope.dining_area_4_4_1_A = true; $scope.dining_area_4_4_1_A_b = false; $scope.dining_area_4_4_1_A_c = false; $scope.dining_area_4_4_1_A_cm = ''; } else if(data.dining_area_4_4_1_A  == 7){ $scope.dining_area_4_4_1_A = data.dining_area_4_4_1_A; $scope.dining_area_4_4_1_A = false; $scope.dining_area_4_4_1_A_b = true; $scope.dining_area_4_4_1_A_c = false; $scope.dining_area_4_4_1_A_cm = ''; } else if(data.dining_area_4_4_1_A  == 10){ 
				$scope.dining_area_4_4_1_A = data.dining_area_4_4_1_A; $scope.dining_area_4_4_1_A = false; $scope.dining_area_4_4_1_A_b = false; $scope.dining_area_4_4_1_A_c = true; $scope.dining_area_4_4_1_A_cm = ''; } else if( ((data.dining_area_4_4_1_A  >= 0 ) && (data.dining_area_4_4_1_A  < 3)) || ((data.dining_area_4_4_1_A  > 3 ) && (data.dining_area_4_4_1_A  < 7)) || ((data.dining_area_4_4_1_A  > 7 ) && (data.dining_area_4_4_1_A  < 10)) ){ $scope.dining_area_4_4_1_A_cm = data.dining_area_4_4_1_A; $scope.dining_area_4_4_1_A = false; $scope.dining_area_4_4_1_A_b = false; $scope.dining_area_4_4_1_A_c = false; $scope.dining_area_4_4_1_A = ''; }else{ $scope.dining_area_4_4_1_A = ''; $scope.dining_area_4_4_1_A_cm = ''; $scope.dining_area_4_4_1_A = false; $scope.dining_area_4_4_1_A_b = false; $scope.dining_area_4_4_1_A_c = false;}
				if(data.dining_area_4_4_1_B == 3){ $scope.dining_area_4_4_1_B = data.dining_area_4_4_1_B; $scope.dining_area_4_4_1_B = true; $scope.dining_area_4_4_1_B_b = false; $scope.dining_area_4_4_1_B_c = false; $scope.dining_area_4_4_1_B_cm = ''; } else if(data.dining_area_4_4_1_B  == 7){ $scope.dining_area_4_4_1_B = data.dining_area_4_4_1_B; $scope.dining_area_4_4_1_B = false; $scope.dining_area_4_4_1_B_b = true; $scope.dining_area_4_4_1_B_c = false; $scope.dining_area_4_4_1_B_cm = ''; } else if(data.dining_area_4_4_1_B  == 10){ 
				$scope.dining_area_4_4_1_B = data.dining_area_4_4_1_B; $scope.dining_area_4_4_1_B = false; $scope.dining_area_4_4_1_B_b = false; $scope.dining_area_4_4_1_B_c = true; $scope.dining_area_4_4_1_B_cm = ''; } else if( ((data.dining_area_4_4_1_B  >= 0 ) && (data.dining_area_4_4_1_B  < 3)) || ((data.dining_area_4_4_1_B  > 3 ) && (data.dining_area_4_4_1_B  < 7)) || ((data.dining_area_4_4_1_B  > 7 ) && (data.dining_area_4_4_1_B  < 10)) ){ $scope.dining_area_4_4_1_B_cm = data.dining_area_4_4_1_B; $scope.dining_area_4_4_1_B = false; $scope.dining_area_4_4_1_B_b = false; $scope.dining_area_4_4_1_B_c = false; $scope.dining_area_4_4_1_B = ''; }else{ $scope.dining_area_4_4_1_B = ''; $scope.dining_area_4_4_1_B_cm = ''; $scope.dining_area_4_4_1_B = false; $scope.dining_area_4_4_1_B_b = false; $scope.dining_area_4_4_1_B_c = false;}
				if(data.dining_area_4_4_1_C == 0){ $scope.dining_area_4_4_1_C = data.dining_area_4_4_1_C; $scope.dining_area_4_4_1_C = true; $scope.dining_area_4_4_1_C_b = false; $scope.dining_area_4_4_1_C_c = false; $scope.dining_area_4_4_1_C_cm = ''; } else if(data.dining_area_4_4_1_C  == 5){ $scope.dining_area_4_4_1_C = data.dining_area_4_4_1_C; $scope.dining_area_4_4_1_C = false; $scope.dining_area_4_4_1_C_b = true; $scope.dining_area_4_4_1_C_c = false; $scope.dining_area_4_4_1_C_cm = ''; } else if(data.dining_area_4_4_1_C  == ){ $scope.dining_area_4_4_1_C = data.dining_area_4_4_1_C; $scope.dining_area_4_4_1_C = false; $scope.dining_area_4_4_1_C_b = false; $scope.dining_area_4_4_1_C_c = true; $scope.dining_area_4_4_1_C_cm = ''; }else if( ((data.dining_area_4_4_1_C  > 0 ) && (data.dining_area_4_4_1_C  < 5)) || ((data.dining_area_4_4_1_C  > 5 ) && (data.dining_area_4_4_1_C  < )) )
				{ $scope.dining_area_4_4_1_C_cm = data.dining_area_4_4_1_C; $scope.dining_area_4_4_1_C = false; $scope.dining_area_4_4_1_C_b = false;  $scope.dining_area_4_4_1_C_c = false; $scope.dining_area_4_4_1_C = ''; }else{ $scope.dining_area_4_4_1_C = ''; $scope.dining_area_4_4_1_C_cm = ''; $scope.dining_area_4_4_1_C = false; $scope.dining_area_4_4_1_C_b = false; $scope.dining_area_4_4_1_C_c = false; }
				if(data.dining_area_4_4_1_D == 3){ $scope.dining_area_4_4_1_D = data.dining_area_4_4_1_D; $scope.dining_area_4_4_1_D = true; $scope.dining_area_4_4_1_D_b = false; $scope.dining_area_4_4_1_D_c = false; $scope.dining_area_4_4_1_D_cm = ''; } else if(data.dining_area_4_4_1_D  == 5){ $scope.dining_area_4_4_1_D = data.dining_area_4_4_1_D; $scope.dining_area_4_4_1_D = false; $scope.dining_area_4_4_1_D_b = true; $scope.dining_area_4_4_1_D_c = false; $scope.dining_area_4_4_1_D_cm = ''; } else if(data.dining_area_4_4_1_D  == 8){ 
				$scope.dining_area_4_4_1_D = data.dining_area_4_4_1_D; $scope.dining_area_4_4_1_D = false; $scope.dining_area_4_4_1_D_b = false; $scope.dining_area_4_4_1_D_c = true; $scope.dining_area_4_4_1_D_cm = ''; } else if( ((data.dining_area_4_4_1_D  >= 0 ) && (data.dining_area_4_4_1_D  < 3)) || ((data.dining_area_4_4_1_D  > 3 ) && (data.dining_area_4_4_1_D  < 5)) || ((data.dining_area_4_4_1_D  > 5 ) && (data.dining_area_4_4_1_D  < 8)) ){ $scope.dining_area_4_4_1_D_cm = data.dining_area_4_4_1_D; $scope.dining_area_4_4_1_D = false; $scope.dining_area_4_4_1_D_b = false; $scope.dining_area_4_4_1_D_c = false; $scope.dining_area_4_4_1_D = ''; }else{ $scope.dining_area_4_4_1_D = ''; $scope.dining_area_4_4_1_D_cm = ''; $scope.dining_area_4_4_1_D = false; $scope.dining_area_4_4_1_D_b = false; $scope.dining_area_4_4_1_D_c = false;}
				if(data.dining_area_4_4_1_E == 0){ $scope.dining_area_4_4_1_E = data.dining_area_4_4_1_E; $scope.dining_area_4_4_1_E = true; $scope.dining_area_4_4_1_E_b = false; $scope.dining_area_4_4_1_E_c = false; $scope.dining_area_4_4_1_E_cm = ''; } else if(data.dining_area_4_4_1_E  == 4){ $scope.dining_area_4_4_1_E = data.dining_area_4_4_1_E; $scope.dining_area_4_4_1_E = false; $scope.dining_area_4_4_1_E_b = true; $scope.dining_area_4_4_1_E_c = false; $scope.dining_area_4_4_1_E_cm = ''; } else if(data.dining_area_4_4_1_E  == 7){ $scope.dining_area_4_4_1_E = data.dining_area_4_4_1_E; $scope.dining_area_4_4_1_E = false; $scope.dining_area_4_4_1_E_b = false; $scope.dining_area_4_4_1_E_c = true; $scope.dining_area_4_4_1_E_cm = ''; }else if( ((data.dining_area_4_4_1_E  > 0 ) && (data.dining_area_4_4_1_E  < 4)) || ((data.dining_area_4_4_1_E  > 4 ) && (data.dining_area_4_4_1_E  < 7)) )
				{ $scope.dining_area_4_4_1_E_cm = data.dining_area_4_4_1_E; $scope.dining_area_4_4_1_E = false; $scope.dining_area_4_4_1_E_b = false;  $scope.dining_area_4_4_1_E_c = false; $scope.dining_area_4_4_1_E = ''; }else{ $scope.dining_area_4_4_1_E = ''; $scope.dining_area_4_4_1_E_cm = ''; $scope.dining_area_4_4_1_E = false; $scope.dining_area_4_4_1_E_b = false; $scope.dining_area_4_4_1_E_c = false; }
				if(data.dining_area_4_4_1_F == 0){ $scope.dining_area_4_4_1_F = data.dining_area_4_4_1_F; $scope.dining_area_4_4_1_F = true; $scope.dining_area_4_4_1_F_b = false; $scope.dining_area_4_4_1_F_c = false; $scope.dining_area_4_4_1_F_cm = ''; } else if(data.dining_area_4_4_1_F  == 4){ $scope.dining_area_4_4_1_F = data.dining_area_4_4_1_F; $scope.dining_area_4_4_1_F = false; $scope.dining_area_4_4_1_F_b = true; $scope.dining_area_4_4_1_F_c = false; $scope.dining_area_4_4_1_F_cm = ''; } else if(data.dining_area_4_4_1_F  == 6){ $scope.dining_area_4_4_1_F = data.dining_area_4_4_1_F; $scope.dining_area_4_4_1_F = false; $scope.dining_area_4_4_1_F_b = false; $scope.dining_area_4_4_1_F_c = true; $scope.dining_area_4_4_1_F_cm = ''; }else if( ((data.dining_area_4_4_1_F  > 0 ) && (data.dining_area_4_4_1_F  < 4)) || ((data.dining_area_4_4_1_F  > 4 ) && (data.dining_area_4_4_1_F  < 6)) )
				{ $scope.dining_area_4_4_1_F_cm = data.dining_area_4_4_1_F; $scope.dining_area_4_4_1_F = false; $scope.dining_area_4_4_1_F_b = false;  $scope.dining_area_4_4_1_F_c = false; $scope.dining_area_4_4_1_F = ''; }else{ $scope.dining_area_4_4_1_F = ''; $scope.dining_area_4_4_1_F_cm = ''; $scope.dining_area_4_4_1_F = false; $scope.dining_area_4_4_1_F_b = false; $scope.dining_area_4_4_1_F_c = false; }
				$scope.service_5_1_1_text = data.service_5_1_1_text;
				if(data.service_5_1_1_A  == 2){ $scope.service_5_1_1_A  = data.service_5_1_1_A ; $scope.service_5_1_1_A = true; $scope.service_5_1_1_A_b = false; $scope.service_5_1_1_A_cm = ''; } else if(data.service_5_1_1_A  == 5){ $scope.service_5_1_1_A  = data.service_5_1_1_A ; $scope.service_5_1_1_A = false; $scope.service_5_1_1_A_b = true; $scope.service_5_1_1_A_cm = ''; }else if( ((data.service_5_1_1_A  > 0 ) && (data.service_5_1_1_A  < 2)) || ((data.service_5_1_1_A  > 2 ) && (data.service_5_1_1_A  < 5)))
				{ $scope.service_5_1_1_A_cm = data.service_5_1_1_A ; $scope.service_5_1_1_A = false; $scope.service_5_1_1_A_b = false; $scope.service_5_1_1_A  = ''; }else{ $scope.service_5_1_1_A  = ''; $scope.service_5_1_1_A_cm = ''; $scope.service_5_1_1_A = false; $scope.service_5_1_1_A_b = false; }
				if(data.service_5_1_1_B == 3){ $scope.service_5_1_1_B = data.service_5_1_1_B; $scope.service_5_1_1_B = true; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = false; $scope.service_5_1_1_B_cm = ''; } else if(data.service_5_1_1_B  == 5){ $scope.service_5_1_1_B = data.service_5_1_1_B; $scope.service_5_1_1_B = false; $scope.service_5_1_1_B_b = true; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = false; $scope.service_5_1_1_B_cm = ''; } else if(data.service_5_1_1_B  == 8){ $scope.service_5_1_1_B = data.service_5_1_1_B; $scope.service_5_1_1_B = false; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = true; $scope.service_5_1_1_B_d = false; $scope.service_5_1_1_B_cm = ''; }else if(data.service_5_1_1_B  == 10){ $scope.service_5_1_1_B = data.service_5_1_1_B; $scope.service_5_1_1_B = false; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = true; $scope.service_5_1_1_B_cm = ''; } else if( ((data.service_5_1_1_B  >= 0 ) && (data.service_5_1_1_B  < 3)) || ((data.service_5_1_1_B  > 3 ) && (data.service_5_1_1_B  < 5)) || ((data.service_5_1_1_B  > 5 ) && (data.service_5_1_1_B  < 8)) || ((data.service_5_1_1_B  > 8 ) && (data.service_5_1_1_B  < 10)) )
				{ $scope.service_5_1_1_B_cm = data.service_5_1_1_B; $scope.service_5_1_1_B = false; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = false; $scope.service_5_1_1_B = ''; }else{ $scope.service_5_1_1_B = ''; $scope.service_5_1_1_B_cm = ''; $scope.service_5_1_1_B = false; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = false;}
				if(data.service_5_1_1_C == 3){ $scope.service_5_1_1_C = data.service_5_1_1_C; $scope.service_5_1_1_C = true; $scope.service_5_1_1_C_b = false; $scope.service_5_1_1_C_c = false; $scope.service_5_1_1_C_cm = ''; } else if(data.service_5_1_1_C  == 7){ $scope.service_5_1_1_C = data.service_5_1_1_C; $scope.service_5_1_1_C = false; $scope.service_5_1_1_C_b = true; $scope.service_5_1_1_C_c = false; $scope.service_5_1_1_C_cm = ''; } else if(data.service_5_1_1_C  == 10){ 
				$scope.service_5_1_1_C = data.service_5_1_1_C; $scope.service_5_1_1_C = false; $scope.service_5_1_1_C_b = false; $scope.service_5_1_1_C_c = true; $scope.service_5_1_1_C_cm = ''; } else if( ((data.service_5_1_1_C  >= 0 ) && (data.service_5_1_1_C  < 3)) || ((data.service_5_1_1_C  > 3 ) && (data.service_5_1_1_C  < 7)) || ((data.service_5_1_1_C  > 7 ) && (data.service_5_1_1_C  < 10)) ){ $scope.service_5_1_1_C_cm = data.service_5_1_1_C; $scope.service_5_1_1_C = false; $scope.service_5_1_1_C_b = false; $scope.service_5_1_1_C_c = false; $scope.service_5_1_1_C = ''; }else{ $scope.service_5_1_1_C = ''; $scope.service_5_1_1_C_cm = ''; $scope.service_5_1_1_C = false; $scope.service_5_1_1_C_b = false; $scope.service_5_1_1_C_c = false;}
				if(data.service_5_1_1_D == 1){ $scope.service_5_1_1_D = data.service_5_1_1_D; $scope.service_5_1_1_D = true; $scope.service_5_1_1_D_b = false; $scope.service_5_1_1_D_c = false; $scope.service_5_1_1_D_cm = ''; } else if(data.service_5_1_1_D  == 3){ $scope.service_5_1_1_D = data.service_5_1_1_D; $scope.service_5_1_1_D = false; $scope.service_5_1_1_D_b = true; $scope.service_5_1_1_D_c = false; $scope.service_5_1_1_D_cm = ''; } else if(data.service_5_1_1_D  == 5){ 
				$scope.service_5_1_1_D = data.service_5_1_1_D; $scope.service_5_1_1_D = false; $scope.service_5_1_1_D_b = false; $scope.service_5_1_1_D_c = true; $scope.service_5_1_1_D_cm = ''; } else if( ((data.service_5_1_1_D  >= 0 ) && (data.service_5_1_1_D  < 1)) || ((data.service_5_1_1_D  > 1 ) && (data.service_5_1_1_D  < 3)) || ((data.service_5_1_1_D  > 3 ) && (data.service_5_1_1_D  < 5)) ){ $scope.service_5_1_1_D_cm = data.service_5_1_1_D; $scope.service_5_1_1_D = false; $scope.service_5_1_1_D_b = false; $scope.service_5_1_1_D_c = false; $scope.service_5_1_1_D = ''; }else{ $scope.service_5_1_1_D = ''; $scope.service_5_1_1_D_cm = ''; $scope.service_5_1_1_D = false; $scope.service_5_1_1_D_b = false; $scope.service_5_1_1_D_c = false;}
				if(data.service_5_1_1_E == 0){ $scope.service_5_1_1_E = data.service_5_1_1_E; $scope.service_5_1_1_E = true; $scope.service_5_1_1_E_b = false; $scope.service_5_1_1_E_c = false; $scope.service_5_1_1_E_cm = ''; } else if(data.service_5_1_1_E  == 5){ $scope.service_5_1_1_E = data.service_5_1_1_E; $scope.service_5_1_1_E = false; $scope.service_5_1_1_E_b = true; $scope.service_5_1_1_E_c = false; $scope.service_5_1_1_E_cm = ''; } else if(data.service_5_1_1_E  == ){ $scope.service_5_1_1_E = data.service_5_1_1_E; $scope.service_5_1_1_E = false; $scope.service_5_1_1_E_b = false; $scope.service_5_1_1_E_c = true; $scope.service_5_1_1_E_cm = ''; }else if( ((data.service_5_1_1_E  > 0 ) && (data.service_5_1_1_E  < 5)) || ((data.service_5_1_1_E  > 5 ) && (data.service_5_1_1_E  < )) )
				{ $scope.service_5_1_1_E_cm = data.service_5_1_1_E; $scope.service_5_1_1_E = false; $scope.service_5_1_1_E_b = false;  $scope.service_5_1_1_E_c = false; $scope.service_5_1_1_E = ''; }else{ $scope.service_5_1_1_E = ''; $scope.service_5_1_1_E_cm = ''; $scope.service_5_1_1_E = false; $scope.service_5_1_1_E_b = false; $scope.service_5_1_1_E_c = false; }
				if(data.service_5_1_1_F == 1){ $scope.service_5_1_1_F = data.service_5_1_1_F; $scope.service_5_1_1_F = true; $scope.service_5_1_1_F_b = false; $scope.service_5_1_1_F_c = false; $scope.service_5_1_1_F_cm = ''; } else if(data.service_5_1_1_F  == 3){ $scope.service_5_1_1_F = data.service_5_1_1_F; $scope.service_5_1_1_F = false; $scope.service_5_1_1_F_b = true; $scope.service_5_1_1_F_c = false; $scope.service_5_1_1_F_cm = ''; } else if(data.service_5_1_1_F  == 5){ 
				$scope.service_5_1_1_F = data.service_5_1_1_F; $scope.service_5_1_1_F = false; $scope.service_5_1_1_F_b = false; $scope.service_5_1_1_F_c = true; $scope.service_5_1_1_F_cm = ''; } else if( ((data.service_5_1_1_F  >= 0 ) && (data.service_5_1_1_F  < 1)) || ((data.service_5_1_1_F  > 1 ) && (data.service_5_1_1_F  < 3)) || ((data.service_5_1_1_F  > 3 ) && (data.service_5_1_1_F  < 5)) ){ $scope.service_5_1_1_F_cm = data.service_5_1_1_F; $scope.service_5_1_1_F = false; $scope.service_5_1_1_F_b = false; $scope.service_5_1_1_F_c = false; $scope.service_5_1_1_F = ''; }else{ $scope.service_5_1_1_F = ''; $scope.service_5_1_1_F_cm = ''; $scope.service_5_1_1_F = false; $scope.service_5_1_1_F_b = false; $scope.service_5_1_1_F_c = false;}
				if(data.service_5_1_1_G == 0){ $scope.service_5_1_1_G = data.service_5_1_1_G; $scope.service_5_1_1_G = true; $scope.service_5_1_1_G_b = false; $scope.service_5_1_1_G_c = false; $scope.service_5_1_1_G_cm = ''; } else if(data.service_5_1_1_G  == 5){ $scope.service_5_1_1_G = data.service_5_1_1_G; $scope.service_5_1_1_G = false; $scope.service_5_1_1_G_b = true; $scope.service_5_1_1_G_c = false; $scope.service_5_1_1_G_cm = ''; } else if(data.service_5_1_1_G  == ){ $scope.service_5_1_1_G = data.service_5_1_1_G; $scope.service_5_1_1_G = false; $scope.service_5_1_1_G_b = false; $scope.service_5_1_1_G_c = true; $scope.service_5_1_1_G_cm = ''; }else if( ((data.service_5_1_1_G  > 0 ) && (data.service_5_1_1_G  < 5)) || ((data.service_5_1_1_G  > 5 ) && (data.service_5_1_1_G  < )) )
				{ $scope.service_5_1_1_G_cm = data.service_5_1_1_G; $scope.service_5_1_1_G = false; $scope.service_5_1_1_G_b = false;  $scope.service_5_1_1_G_c = false; $scope.service_5_1_1_G = ''; }else{ $scope.service_5_1_1_G = ''; $scope.service_5_1_1_G_cm = ''; $scope.service_5_1_1_G = false; $scope.service_5_1_1_G_b = false; $scope.service_5_1_1_G_c = false; }
				if(data.service_5_1_1_H == 1){ $scope.service_5_1_1_H = data.service_5_1_1_H; $scope.service_5_1_1_H = true; $scope.service_5_1_1_H_b = false; $scope.service_5_1_1_H_c = false; $scope.service_5_1_1_H_cm = ''; } else if(data.service_5_1_1_H  == 2){ $scope.service_5_1_1_H = data.service_5_1_1_H; $scope.service_5_1_1_H = false; $scope.service_5_1_1_H_b = true; $scope.service_5_1_1_H_c = false; $scope.service_5_1_1_H_cm = ''; } else if(data.service_5_1_1_H  == 3){ 
				$scope.service_5_1_1_H = data.service_5_1_1_H; $scope.service_5_1_1_H = false; $scope.service_5_1_1_H_b = false; $scope.service_5_1_1_H_c = true; $scope.service_5_1_1_H_cm = ''; } else if( ((data.service_5_1_1_H  >= 0 ) && (data.service_5_1_1_H  < 1)) || ((data.service_5_1_1_H  > 1 ) && (data.service_5_1_1_H  < 2)) || ((data.service_5_1_1_H  > 2 ) && (data.service_5_1_1_H  < 3)) ){ $scope.service_5_1_1_H_cm = data.service_5_1_1_H; $scope.service_5_1_1_H = false; $scope.service_5_1_1_H_b = false; $scope.service_5_1_1_H_c = false; $scope.service_5_1_1_H = ''; }else{ $scope.service_5_1_1_H = ''; $scope.service_5_1_1_H_cm = ''; $scope.service_5_1_1_H = false; $scope.service_5_1_1_H_b = false; $scope.service_5_1_1_H_c = false;}
				if(data.service_5_1_1_I == 2){ $scope.service_5_1_1_I = data.service_5_1_1_I; $scope.service_5_1_1_I = true; $scope.service_5_1_1_I_b = false; $scope.service_5_1_1_I_c = false; $scope.service_5_1_1_I_cm = ''; } else if(data.service_5_1_1_I  == 3){ $scope.service_5_1_1_I = data.service_5_1_1_I; $scope.service_5_1_1_I = false; $scope.service_5_1_1_I_b = true; $scope.service_5_1_1_I_c = false; $scope.service_5_1_1_I_cm = ''; } else if(data.service_5_1_1_I  == 5){ 
				$scope.service_5_1_1_I = data.service_5_1_1_I; $scope.service_5_1_1_I = false; $scope.service_5_1_1_I_b = false; $scope.service_5_1_1_I_c = true; $scope.service_5_1_1_I_cm = ''; } else if( ((data.service_5_1_1_I  >= 0 ) && (data.service_5_1_1_I  < 2)) || ((data.service_5_1_1_I  > 2 ) && (data.service_5_1_1_I  < 3)) || ((data.service_5_1_1_I  > 3 ) && (data.service_5_1_1_I  < 5)) ){ $scope.service_5_1_1_I_cm = data.service_5_1_1_I; $scope.service_5_1_1_I = false; $scope.service_5_1_1_I_b = false; $scope.service_5_1_1_I_c = false; $scope.service_5_1_1_I = ''; }else{ $scope.service_5_1_1_I = ''; $scope.service_5_1_1_I_cm = ''; $scope.service_5_1_1_I = false; $scope.service_5_1_1_I_b = false; $scope.service_5_1_1_I_c = false;}
				if(data.service_5_1_1_J == 0){ $scope.service_5_1_1_J = data.service_5_1_1_J; $scope.service_5_1_1_J = true; $scope.service_5_1_1_J_b = false; $scope.service_5_1_1_J_c = false; $scope.service_5_1_1_J_cm = ''; } else if(data.service_5_1_1_J  == 2){ $scope.service_5_1_1_J = data.service_5_1_1_J; $scope.service_5_1_1_J = false; $scope.service_5_1_1_J_b = true; $scope.service_5_1_1_J_c = false; $scope.service_5_1_1_J_cm = ''; } else if(data.service_5_1_1_J  == ){ $scope.service_5_1_1_J = data.service_5_1_1_J; $scope.service_5_1_1_J = false; $scope.service_5_1_1_J_b = false; $scope.service_5_1_1_J_c = true; $scope.service_5_1_1_J_cm = ''; }else if( ((data.service_5_1_1_J  > 0 ) && (data.service_5_1_1_J  < 2)) || ((data.service_5_1_1_J  > 2 ) && (data.service_5_1_1_J  < )) )
				{ $scope.service_5_1_1_J_cm = data.service_5_1_1_J; $scope.service_5_1_1_J = false; $scope.service_5_1_1_J_b = false;  $scope.service_5_1_1_J_c = false; $scope.service_5_1_1_J = ''; }else{ $scope.service_5_1_1_J = ''; $scope.service_5_1_1_J_cm = ''; $scope.service_5_1_1_J = false; $scope.service_5_1_1_J_b = false; $scope.service_5_1_1_J_c = false; }
				if(data.service_5_1_1_K_a == 2){ $scope.service_5_1_1_K_a = data.service_5_1_1_K_a; $scope.service_5_1_1_K_a= true; $scope.service_5_1_1_K_a_cm = ''; } else if((data.service_5_1_1_K_a > 0 ) && (data.service_5_1_1_K_a < 2)){ $scope.service_5_1_1_K_a_cm = data.service_5_1_1_K_a; $scope.service_5_1_1_K_a= false; $scope.service_5_1_1_K_a= ''; }else{ $scope.service_5_1_1_K_a= ''; $scope.service_5_1_1_K_a_cm = ''; $scope.service_5_1_1_K_a= false; }
				if(data.service_5_1_1_K_b == 2){ $scope.service_5_1_1_K_b = data.service_5_1_1_K_b; $scope.service_5_1_1_K_b= true; $scope.service_5_1_1_K_b_cm = ''; } else if((data.service_5_1_1_K_b > 0 ) && (data.service_5_1_1_K_b < 2)){ $scope.service_5_1_1_K_b_cm = data.service_5_1_1_K_b; $scope.service_5_1_1_K_b= false; $scope.service_5_1_1_K_b= ''; }else{ $scope.service_5_1_1_K_b= ''; $scope.service_5_1_1_K_b_cm = ''; $scope.service_5_1_1_K_b= false; }
				if(data.service_5_1_1_K_c == 2){ $scope.service_5_1_1_K_c = data.service_5_1_1_K_c; $scope.service_5_1_1_K_c= true; $scope.service_5_1_1_K_c_cm = ''; } else if((data.service_5_1_1_K_c > 0 ) && (data.service_5_1_1_K_c < 2)){ $scope.service_5_1_1_K_c_cm = data.service_5_1_1_K_c; $scope.service_5_1_1_K_c= false; $scope.service_5_1_1_K_c= ''; }else{ $scope.service_5_1_1_K_c= ''; $scope.service_5_1_1_K_c_cm = ''; $scope.service_5_1_1_K_c= false; }
				$scope.service_5_2_1_text = data.service_5_2_1_text;
				if(data.service_5_2_1_A == 0){ $scope.service_5_2_1_A = data.service_5_2_1_A; $scope.service_5_2_1_A = true; $scope.service_5_2_1_A_b = false; $scope.service_5_2_1_A_c = false; $scope.service_5_2_1_A_cm = ''; } else if(data.service_5_2_1_A  == 4){ $scope.service_5_2_1_A = data.service_5_2_1_A; $scope.service_5_2_1_A = false; $scope.service_5_2_1_A_b = true; $scope.service_5_2_1_A_c = false; $scope.service_5_2_1_A_cm = ''; } else if(data.service_5_2_1_A  == ){ $scope.service_5_2_1_A = data.service_5_2_1_A; $scope.service_5_2_1_A = false; $scope.service_5_2_1_A_b = false; $scope.service_5_2_1_A_c = true; $scope.service_5_2_1_A_cm = ''; }else if( ((data.service_5_2_1_A  > 0 ) && (data.service_5_2_1_A  < 4)) || ((data.service_5_2_1_A  > 4 ) && (data.service_5_2_1_A  < )) )
				{ $scope.service_5_2_1_A_cm = data.service_5_2_1_A; $scope.service_5_2_1_A = false; $scope.service_5_2_1_A_b = false;  $scope.service_5_2_1_A_c = false; $scope.service_5_2_1_A = ''; }else{ $scope.service_5_2_1_A = ''; $scope.service_5_2_1_A_cm = ''; $scope.service_5_2_1_A = false; $scope.service_5_2_1_A_b = false; $scope.service_5_2_1_A_c = false; }
				if(data.service_5_2_1_B == 1){ $scope.service_5_2_1_B = data.service_5_2_1_B; $scope.service_5_2_1_B = true; $scope.service_5_2_1_B_b = false; $scope.service_5_2_1_B_c = false; $scope.service_5_2_1_B_cm = ''; } else if(data.service_5_2_1_B  == 2){ $scope.service_5_2_1_B = data.service_5_2_1_B; $scope.service_5_2_1_B = false; $scope.service_5_2_1_B_b = true; $scope.service_5_2_1_B_c = false; $scope.service_5_2_1_B_cm = ''; } else if(data.service_5_2_1_B  == 4){ 
				$scope.service_5_2_1_B = data.service_5_2_1_B; $scope.service_5_2_1_B = false; $scope.service_5_2_1_B_b = false; $scope.service_5_2_1_B_c = true; $scope.service_5_2_1_B_cm = ''; } else if( ((data.service_5_2_1_B  >= 0 ) && (data.service_5_2_1_B  < 1)) || ((data.service_5_2_1_B  > 1 ) && (data.service_5_2_1_B  < 2)) || ((data.service_5_2_1_B  > 2 ) && (data.service_5_2_1_B  < 4)) ){ $scope.service_5_2_1_B_cm = data.service_5_2_1_B; $scope.service_5_2_1_B = false; $scope.service_5_2_1_B_b = false; $scope.service_5_2_1_B_c = false; $scope.service_5_2_1_B = ''; }else{ $scope.service_5_2_1_B = ''; $scope.service_5_2_1_B_cm = ''; $scope.service_5_2_1_B = false; $scope.service_5_2_1_B_b = false; $scope.service_5_2_1_B_c = false;}
				if(data.service_5_2_1_C == 1){ $scope.service_5_2_1_C = data.service_5_2_1_C; $scope.service_5_2_1_C = true; $scope.service_5_2_1_C_b = false; $scope.service_5_2_1_C_c = false; $scope.service_5_2_1_C_cm = ''; } else if(data.service_5_2_1_C  == 2){ $scope.service_5_2_1_C = data.service_5_2_1_C; $scope.service_5_2_1_C = false; $scope.service_5_2_1_C_b = true; $scope.service_5_2_1_C_c = false; $scope.service_5_2_1_C_cm = ''; } else if(data.service_5_2_1_C  == 4){ 
				$scope.service_5_2_1_C = data.service_5_2_1_C; $scope.service_5_2_1_C = false; $scope.service_5_2_1_C_b = false; $scope.service_5_2_1_C_c = true; $scope.service_5_2_1_C_cm = ''; } else if( ((data.service_5_2_1_C  >= 0 ) && (data.service_5_2_1_C  < 1)) || ((data.service_5_2_1_C  > 1 ) && (data.service_5_2_1_C  < 2)) || ((data.service_5_2_1_C  > 2 ) && (data.service_5_2_1_C  < 4)) ){ $scope.service_5_2_1_C_cm = data.service_5_2_1_C; $scope.service_5_2_1_C = false; $scope.service_5_2_1_C_b = false; $scope.service_5_2_1_C_c = false; $scope.service_5_2_1_C = ''; }else{ $scope.service_5_2_1_C = ''; $scope.service_5_2_1_C_cm = ''; $scope.service_5_2_1_C = false; $scope.service_5_2_1_C_b = false; $scope.service_5_2_1_C_c = false;}
				if(data.service_5_2_1_D == 2){ $scope.service_5_2_1_D = data.service_5_2_1_D; $scope.service_5_2_1_D = true; $scope.service_5_2_1_D_b = false; $scope.service_5_2_1_D_c = false; $scope.service_5_2_1_D_cm = ''; } else if(data.service_5_2_1_D  == 3){ $scope.service_5_2_1_D = data.service_5_2_1_D; $scope.service_5_2_1_D = false; $scope.service_5_2_1_D_b = true; $scope.service_5_2_1_D_c = false; $scope.service_5_2_1_D_cm = ''; } else if(data.service_5_2_1_D  == 5){ 
				$scope.service_5_2_1_D = data.service_5_2_1_D; $scope.service_5_2_1_D = false; $scope.service_5_2_1_D_b = false; $scope.service_5_2_1_D_c = true; $scope.service_5_2_1_D_cm = ''; } else if( ((data.service_5_2_1_D  >= 0 ) && (data.service_5_2_1_D  < 2)) || ((data.service_5_2_1_D  > 2 ) && (data.service_5_2_1_D  < 3)) || ((data.service_5_2_1_D  > 3 ) && (data.service_5_2_1_D  < 5)) ){ $scope.service_5_2_1_D_cm = data.service_5_2_1_D; $scope.service_5_2_1_D = false; $scope.service_5_2_1_D_b = false; $scope.service_5_2_1_D_c = false; $scope.service_5_2_1_D = ''; }else{ $scope.service_5_2_1_D = ''; $scope.service_5_2_1_D_cm = ''; $scope.service_5_2_1_D = false; $scope.service_5_2_1_D_b = false; $scope.service_5_2_1_D_c = false;}
				if(data.service_5_2_1_E_a == 2){ $scope.service_5_2_1_E_a = data.service_5_2_1_E_a; $scope.service_5_2_1_E_a= true; $scope.service_5_2_1_E_a_cm = ''; } else if((data.service_5_2_1_E_a > 0 ) && (data.service_5_2_1_E_a < 2)){ $scope.service_5_2_1_E_a_cm = data.service_5_2_1_E_a; $scope.service_5_2_1_E_a= false; $scope.service_5_2_1_E_a= ''; }else{ $scope.service_5_2_1_E_a= ''; $scope.service_5_2_1_E_a_cm = ''; $scope.service_5_2_1_E_a= false; }
				if(data.service_5_2_1_E_b == 2){ $scope.service_5_2_1_E_b = data.service_5_2_1_E_b; $scope.service_5_2_1_E_b= true; $scope.service_5_2_1_E_b_cm = ''; } else if((data.service_5_2_1_E_b > 0 ) && (data.service_5_2_1_E_b < 2)){ $scope.service_5_2_1_E_b_cm = data.service_5_2_1_E_b; $scope.service_5_2_1_E_b= false; $scope.service_5_2_1_E_b= ''; }else{ $scope.service_5_2_1_E_b= ''; $scope.service_5_2_1_E_b_cm = ''; $scope.service_5_2_1_E_b= false; }
				if(data.service_5_2_1_E_c == 2){ $scope.service_5_2_1_E_c = data.service_5_2_1_E_c; $scope.service_5_2_1_E_c= true; $scope.service_5_2_1_E_c_cm = ''; } else if((data.service_5_2_1_E_c > 0 ) && (data.service_5_2_1_E_c < 2)){ $scope.service_5_2_1_E_c_cm = data.service_5_2_1_E_c; $scope.service_5_2_1_E_c= false; $scope.service_5_2_1_E_c= ''; }else{ $scope.service_5_2_1_E_c= ''; $scope.service_5_2_1_E_c_cm = ''; $scope.service_5_2_1_E_c= false; }
				if(data.service_5_2_1_E_d == 1){ $scope.service_5_2_1_E_d = data.service_5_2_1_E_d; $scope.service_5_2_1_E_d= true; $scope.service_5_2_1_E_d_cm = ''; } else if((data.service_5_2_1_E_d > 0 ) && (data.service_5_2_1_E_d < 1)){ $scope.service_5_2_1_E_d_cm = data.service_5_2_1_E_d; $scope.service_5_2_1_E_d= false; $scope.service_5_2_1_E_d= ''; }else{ $scope.service_5_2_1_E_d= ''; $scope.service_5_2_1_E_d_cm = ''; $scope.service_5_2_1_E_d= false; }
				if(data.service_5_2_1_F == 2){ $scope.service_5_2_1_F = data.service_5_2_1_F; $scope.service_5_2_1_F = true; $scope.service_5_2_1_F_b = false; $scope.service_5_2_1_F_c = false; $scope.service_5_2_1_F_cm = ''; } else if(data.service_5_2_1_F  == 3){ $scope.service_5_2_1_F = data.service_5_2_1_F; $scope.service_5_2_1_F = false; $scope.service_5_2_1_F_b = true; $scope.service_5_2_1_F_c = false; $scope.service_5_2_1_F_cm = ''; } else if(data.service_5_2_1_F  == 5){ 
				$scope.service_5_2_1_F = data.service_5_2_1_F; $scope.service_5_2_1_F = false; $scope.service_5_2_1_F_b = false; $scope.service_5_2_1_F_c = true; $scope.service_5_2_1_F_cm = ''; } else if( ((data.service_5_2_1_F  >= 0 ) && (data.service_5_2_1_F  < 2)) || ((data.service_5_2_1_F  > 2 ) && (data.service_5_2_1_F  < 3)) || ((data.service_5_2_1_F  > 3 ) && (data.service_5_2_1_F  < 5)) ){ $scope.service_5_2_1_F_cm = data.service_5_2_1_F; $scope.service_5_2_1_F = false; $scope.service_5_2_1_F_b = false; $scope.service_5_2_1_F_c = false; $scope.service_5_2_1_F = ''; }else{ $scope.service_5_2_1_F = ''; $scope.service_5_2_1_F_cm = ''; $scope.service_5_2_1_F = false; $scope.service_5_2_1_F_b = false; $scope.service_5_2_1_F_c = false;}
				if(data.service_5_2_1_G_a == 2){ $scope.service_5_2_1_G_a = data.service_5_2_1_G_a; $scope.service_5_2_1_G_a= true; $scope.service_5_2_1_G_a_cm = ''; } else if((data.service_5_2_1_G_a > 0 ) && (data.service_5_2_1_G_a < 2)){ $scope.service_5_2_1_G_a_cm = data.service_5_2_1_G_a; $scope.service_5_2_1_G_a= false; $scope.service_5_2_1_G_a= ''; }else{ $scope.service_5_2_1_G_a= ''; $scope.service_5_2_1_G_a_cm = ''; $scope.service_5_2_1_G_a= false; }
				if(data.service_5_2_1_G_b == 3){ $scope.service_5_2_1_G_b = data.service_5_2_1_G_b; $scope.service_5_2_1_G_b= true; $scope.service_5_2_1_G_b_cm = ''; } else if((data.service_5_2_1_G_b > 0 ) && (data.service_5_2_1_G_b < 3)){ $scope.service_5_2_1_G_b_cm = data.service_5_2_1_G_b; $scope.service_5_2_1_G_b= false; $scope.service_5_2_1_G_b= ''; }else{ $scope.service_5_2_1_G_b= ''; $scope.service_5_2_1_G_b_cm = ''; $scope.service_5_2_1_G_b= false; }
				if(data.service_5_2_1_G_c == 4){ $scope.service_5_2_1_G_c = data.service_5_2_1_G_c; $scope.service_5_2_1_G_c= true; $scope.service_5_2_1_G_c_cm = ''; } else if((data.service_5_2_1_G_c > 0 ) && (data.service_5_2_1_G_c < 4)){ $scope.service_5_2_1_G_c_cm = data.service_5_2_1_G_c; $scope.service_5_2_1_G_c= false; $scope.service_5_2_1_G_c= ''; }else{ $scope.service_5_2_1_G_c= ''; $scope.service_5_2_1_G_c_cm = ''; $scope.service_5_2_1_G_c= false; }
				if(data.service_5_2_1_H  == 2){ $scope.service_5_2_1_H  = data.service_5_2_1_H ; $scope.service_5_2_1_H = true; $scope.service_5_2_1_H_b = false; $scope.service_5_2_1_H_cm = ''; } else if(data.service_5_2_1_H  == 3){ $scope.service_5_2_1_H  = data.service_5_2_1_H ; $scope.service_5_2_1_H = false; $scope.service_5_2_1_H_b = true; $scope.service_5_2_1_H_cm = ''; }else if( ((data.service_5_2_1_H  > 0 ) && (data.service_5_2_1_H  < 2)) || ((data.service_5_2_1_H  > 2 ) && (data.service_5_2_1_H  < 3)))
				{ $scope.service_5_2_1_H_cm = data.service_5_2_1_H ; $scope.service_5_2_1_H = false; $scope.service_5_2_1_H_b = false; $scope.service_5_2_1_H  = ''; }else{ $scope.service_5_2_1_H  = ''; $scope.service_5_2_1_H_cm = ''; $scope.service_5_2_1_H = false; $scope.service_5_2_1_H_b = false; }
				if(data.service_5_2_1_I == 0){ $scope.service_5_2_1_I = data.service_5_2_1_I; $scope.service_5_2_1_I = true; $scope.service_5_2_1_I_b = false; $scope.service_5_2_1_I_c = false; $scope.service_5_2_1_I_cm = ''; } else if(data.service_5_2_1_I  == 2){ $scope.service_5_2_1_I = data.service_5_2_1_I; $scope.service_5_2_1_I = false; $scope.service_5_2_1_I_b = true; $scope.service_5_2_1_I_c = false; $scope.service_5_2_1_I_cm = ''; } else if(data.service_5_2_1_I  == ){ $scope.service_5_2_1_I = data.service_5_2_1_I; $scope.service_5_2_1_I = false; $scope.service_5_2_1_I_b = false; $scope.service_5_2_1_I_c = true; $scope.service_5_2_1_I_cm = ''; }else if( ((data.service_5_2_1_I  > 0 ) && (data.service_5_2_1_I  < 2)) || ((data.service_5_2_1_I  > 2 ) && (data.service_5_2_1_I  < )) )
				{ $scope.service_5_2_1_I_cm = data.service_5_2_1_I; $scope.service_5_2_1_I = false; $scope.service_5_2_1_I_b = false;  $scope.service_5_2_1_I_c = false; $scope.service_5_2_1_I = ''; }else{ $scope.service_5_2_1_I = ''; $scope.service_5_2_1_I_cm = ''; $scope.service_5_2_1_I = false; $scope.service_5_2_1_I_b = false; $scope.service_5_2_1_I_c = false; }
				if(data.service_5_2_1_J == 2){ $scope.service_5_2_1_J = data.service_5_2_1_J; $scope.service_5_2_1_J = true; $scope.service_5_2_1_J_b = false; $scope.service_5_2_1_J_c = false; $scope.service_5_2_1_J_cm = ''; } else if(data.service_5_2_1_J  == 3){ $scope.service_5_2_1_J = data.service_5_2_1_J; $scope.service_5_2_1_J = false; $scope.service_5_2_1_J_b = true; $scope.service_5_2_1_J_c = false; $scope.service_5_2_1_J_cm = ''; } else if(data.service_5_2_1_J  == 5){ 
				$scope.service_5_2_1_J = data.service_5_2_1_J; $scope.service_5_2_1_J = false; $scope.service_5_2_1_J_b = false; $scope.service_5_2_1_J_c = true; $scope.service_5_2_1_J_cm = ''; } else if( ((data.service_5_2_1_J  >= 0 ) && (data.service_5_2_1_J  < 2)) || ((data.service_5_2_1_J  > 2 ) && (data.service_5_2_1_J  < 3)) || ((data.service_5_2_1_J  > 3 ) && (data.service_5_2_1_J  < 5)) ){ $scope.service_5_2_1_J_cm = data.service_5_2_1_J; $scope.service_5_2_1_J = false; $scope.service_5_2_1_J_b = false; $scope.service_5_2_1_J_c = false; $scope.service_5_2_1_J = ''; }else{ $scope.service_5_2_1_J = ''; $scope.service_5_2_1_J_cm = ''; $scope.service_5_2_1_J = false; $scope.service_5_2_1_J_b = false; $scope.service_5_2_1_J_c = false;}
				$scope.service_5_3_1_text = data.service_5_3_1_text;
				if(data.service_5_3_1_A == 1){ $scope.service_5_3_1_A = data.service_5_3_1_A; $scope.service_5_3_1_A = true; $scope.service_5_3_1_A_b = false; $scope.service_5_3_1_A_c = false; $scope.service_5_3_1_A_cm = ''; } else if(data.service_5_3_1_A  == 3){ $scope.service_5_3_1_A = data.service_5_3_1_A; $scope.service_5_3_1_A = false; $scope.service_5_3_1_A_b = true; $scope.service_5_3_1_A_c = false; $scope.service_5_3_1_A_cm = ''; } else if(data.service_5_3_1_A  == 5){ 
				$scope.service_5_3_1_A = data.service_5_3_1_A; $scope.service_5_3_1_A = false; $scope.service_5_3_1_A_b = false; $scope.service_5_3_1_A_c = true; $scope.service_5_3_1_A_cm = ''; } else if( ((data.service_5_3_1_A  >= 0 ) && (data.service_5_3_1_A  < 1)) || ((data.service_5_3_1_A  > 1 ) && (data.service_5_3_1_A  < 3)) || ((data.service_5_3_1_A  > 3 ) && (data.service_5_3_1_A  < 5)) ){ $scope.service_5_3_1_A_cm = data.service_5_3_1_A; $scope.service_5_3_1_A = false; $scope.service_5_3_1_A_b = false; $scope.service_5_3_1_A_c = false; $scope.service_5_3_1_A = ''; }else{ $scope.service_5_3_1_A = ''; $scope.service_5_3_1_A_cm = ''; $scope.service_5_3_1_A = false; $scope.service_5_3_1_A_b = false; $scope.service_5_3_1_A_c = false;}
				if(data.service_5_3_1_B  == 3){ $scope.service_5_3_1_B  = data.service_5_3_1_B ; $scope.service_5_3_1_B = true; $scope.service_5_3_1_B_b = false; $scope.service_5_3_1_B_cm = ''; } else if(data.service_5_3_1_B  == 5){ $scope.service_5_3_1_B  = data.service_5_3_1_B ; $scope.service_5_3_1_B = false; $scope.service_5_3_1_B_b = true; $scope.service_5_3_1_B_cm = ''; }else if( ((data.service_5_3_1_B  > 0 ) && (data.service_5_3_1_B  < 3)) || ((data.service_5_3_1_B  > 3 ) && (data.service_5_3_1_B  < 5)))
				{ $scope.service_5_3_1_B_cm = data.service_5_3_1_B ; $scope.service_5_3_1_B = false; $scope.service_5_3_1_B_b = false; $scope.service_5_3_1_B  = ''; }else{ $scope.service_5_3_1_B  = ''; $scope.service_5_3_1_B_cm = ''; $scope.service_5_3_1_B = false; $scope.service_5_3_1_B_b = false; }
				$scope.entertainment_6_1_1_text = data.entertainment_6_1_1_text;
				if(data.entertainment_6_1_1_A == 0){ $scope.entertainment_6_1_1_A = data.entertainment_6_1_1_A; $scope.entertainment_6_1_1_A = true; $scope.entertainment_6_1_1_A_b = false; $scope.entertainment_6_1_1_A_c = false; $scope.entertainment_6_1_1_A_cm = ''; } else if(data.entertainment_6_1_1_A  == 5){ $scope.entertainment_6_1_1_A = data.entertainment_6_1_1_A; $scope.entertainment_6_1_1_A = false; $scope.entertainment_6_1_1_A_b = true; $scope.entertainment_6_1_1_A_c = false; $scope.entertainment_6_1_1_A_cm = ''; } else if(data.entertainment_6_1_1_A  == ){ $scope.entertainment_6_1_1_A = data.entertainment_6_1_1_A; $scope.entertainment_6_1_1_A = false; $scope.entertainment_6_1_1_A_b = false; $scope.entertainment_6_1_1_A_c = true; $scope.entertainment_6_1_1_A_cm = ''; }else if( ((data.entertainment_6_1_1_A  > 0 ) && (data.entertainment_6_1_1_A  < 5)) || ((data.entertainment_6_1_1_A  > 5 ) && (data.entertainment_6_1_1_A  < )) )
				{ $scope.entertainment_6_1_1_A_cm = data.entertainment_6_1_1_A; $scope.entertainment_6_1_1_A = false; $scope.entertainment_6_1_1_A_b = false;  $scope.entertainment_6_1_1_A_c = false; $scope.entertainment_6_1_1_A = ''; }else{ $scope.entertainment_6_1_1_A = ''; $scope.entertainment_6_1_1_A_cm = ''; $scope.entertainment_6_1_1_A = false; $scope.entertainment_6_1_1_A_b = false; $scope.entertainment_6_1_1_A_c = false; }
				if(data.entertainment_6_1_1_B == 3){ $scope.entertainment_6_1_1_B = data.entertainment_6_1_1_B; $scope.entertainment_6_1_1_B = true; $scope.entertainment_6_1_1_B_b = false; $scope.entertainment_6_1_1_B_c = false; $scope.entertainment_6_1_1_B_cm = ''; } else if(data.entertainment_6_1_1_B  == 5){ $scope.entertainment_6_1_1_B = data.entertainment_6_1_1_B; $scope.entertainment_6_1_1_B = false; $scope.entertainment_6_1_1_B_b = true; $scope.entertainment_6_1_1_B_c = false; $scope.entertainment_6_1_1_B_cm = ''; } else if(data.entertainment_6_1_1_B  == 8){ 
				$scope.entertainment_6_1_1_B = data.entertainment_6_1_1_B; $scope.entertainment_6_1_1_B = false; $scope.entertainment_6_1_1_B_b = false; $scope.entertainment_6_1_1_B_c = true; $scope.entertainment_6_1_1_B_cm = ''; } else if( ((data.entertainment_6_1_1_B  >= 0 ) && (data.entertainment_6_1_1_B  < 3)) || ((data.entertainment_6_1_1_B  > 3 ) && (data.entertainment_6_1_1_B  < 5)) || ((data.entertainment_6_1_1_B  > 5 ) && (data.entertainment_6_1_1_B  < 8)) ){ $scope.entertainment_6_1_1_B_cm = data.entertainment_6_1_1_B; $scope.entertainment_6_1_1_B = false; $scope.entertainment_6_1_1_B_b = false; $scope.entertainment_6_1_1_B_c = false; $scope.entertainment_6_1_1_B = ''; }else{ $scope.entertainment_6_1_1_B = ''; $scope.entertainment_6_1_1_B_cm = ''; $scope.entertainment_6_1_1_B = false; $scope.entertainment_6_1_1_B_b = false; $scope.entertainment_6_1_1_B_c = false;}
				if(data.entertainment_6_1_1_C == 0){ $scope.entertainment_6_1_1_C = data.entertainment_6_1_1_C; $scope.entertainment_6_1_1_C = true; $scope.entertainment_6_1_1_C_b = false; $scope.entertainment_6_1_1_C_c = false; $scope.entertainment_6_1_1_C_cm = ''; } else if(data.entertainment_6_1_1_C  == 7){ $scope.entertainment_6_1_1_C = data.entertainment_6_1_1_C; $scope.entertainment_6_1_1_C = false; $scope.entertainment_6_1_1_C_b = true; $scope.entertainment_6_1_1_C_c = false; $scope.entertainment_6_1_1_C_cm = ''; } else if(data.entertainment_6_1_1_C  == ){ $scope.entertainment_6_1_1_C = data.entertainment_6_1_1_C; $scope.entertainment_6_1_1_C = false; $scope.entertainment_6_1_1_C_b = false; $scope.entertainment_6_1_1_C_c = true; $scope.entertainment_6_1_1_C_cm = ''; }else if( ((data.entertainment_6_1_1_C  > 0 ) && (data.entertainment_6_1_1_C  < 7)) || ((data.entertainment_6_1_1_C  > 7 ) && (data.entertainment_6_1_1_C  < )) )
				{ $scope.entertainment_6_1_1_C_cm = data.entertainment_6_1_1_C; $scope.entertainment_6_1_1_C = false; $scope.entertainment_6_1_1_C_b = false;  $scope.entertainment_6_1_1_C_c = false; $scope.entertainment_6_1_1_C = ''; }else{ $scope.entertainment_6_1_1_C = ''; $scope.entertainment_6_1_1_C_cm = ''; $scope.entertainment_6_1_1_C = false; $scope.entertainment_6_1_1_C_b = false; $scope.entertainment_6_1_1_C_c = false; }
				$scope.bar_7_1_1_text = data.bar_7_1_1_text;
				if(data.bar_7_1_1_A  == 3){ $scope.bar_7_1_1_A  = data.bar_7_1_1_A ; $scope.bar_7_1_1_A = true; $scope.bar_7_1_1_A_b = false; $scope.bar_7_1_1_A_cm = ''; } else if(data.bar_7_1_1_A  == 5){ $scope.bar_7_1_1_A  = data.bar_7_1_1_A ; $scope.bar_7_1_1_A = false; $scope.bar_7_1_1_A_b = true; $scope.bar_7_1_1_A_cm = ''; }else if( ((data.bar_7_1_1_A  > 0 ) && (data.bar_7_1_1_A  < 3)) || ((data.bar_7_1_1_A  > 3 ) && (data.bar_7_1_1_A  < 5)))
				{ $scope.bar_7_1_1_A_cm = data.bar_7_1_1_A ; $scope.bar_7_1_1_A = false; $scope.bar_7_1_1_A_b = false; $scope.bar_7_1_1_A  = ''; }else{ $scope.bar_7_1_1_A  = ''; $scope.bar_7_1_1_A_cm = ''; $scope.bar_7_1_1_A = false; $scope.bar_7_1_1_A_b = false; }
				if(data.bar_7_1_1_B_a == 3){ $scope.bar_7_1_1_B_a = data.bar_7_1_1_B_a; $scope.bar_7_1_1_B_a= true; $scope.bar_7_1_1_B_a_cm = ''; } else if((data.bar_7_1_1_B_a > 0 ) && (data.bar_7_1_1_B_a < 3)){ $scope.bar_7_1_1_B_a_cm = data.bar_7_1_1_B_a; $scope.bar_7_1_1_B_a= false; $scope.bar_7_1_1_B_a= ''; }else{ $scope.bar_7_1_1_B_a= ''; $scope.bar_7_1_1_B_a_cm = ''; $scope.bar_7_1_1_B_a= false; }
				if(data.bar_7_1_1_B_b == 3){ $scope.bar_7_1_1_B_b = data.bar_7_1_1_B_b; $scope.bar_7_1_1_B_b= true; $scope.bar_7_1_1_B_b_cm = ''; } else if((data.bar_7_1_1_B_b > 0 ) && (data.bar_7_1_1_B_b < 3)){ $scope.bar_7_1_1_B_b_cm = data.bar_7_1_1_B_b; $scope.bar_7_1_1_B_b= false; $scope.bar_7_1_1_B_b= ''; }else{ $scope.bar_7_1_1_B_b= ''; $scope.bar_7_1_1_B_b_cm = ''; $scope.bar_7_1_1_B_b= false; }
				if(data.bar_7_1_1_B_c == 4){ $scope.bar_7_1_1_B_c = data.bar_7_1_1_B_c; $scope.bar_7_1_1_B_c= true; $scope.bar_7_1_1_B_c_cm = ''; } else if((data.bar_7_1_1_B_c > 0 ) && (data.bar_7_1_1_B_c < 4)){ $scope.bar_7_1_1_B_c_cm = data.bar_7_1_1_B_c; $scope.bar_7_1_1_B_c= false; $scope.bar_7_1_1_B_c= ''; }else{ $scope.bar_7_1_1_B_c= ''; $scope.bar_7_1_1_B_c_cm = ''; $scope.bar_7_1_1_B_c= false; }
				if(data.bar_7_1_1_C == 3){ $scope.bar_7_1_1_C = data.bar_7_1_1_C; $scope.bar_7_1_1_C = true; $scope.bar_7_1_1_C_b = false; $scope.bar_7_1_1_C_c = false; $scope.bar_7_1_1_C_cm = ''; } else if(data.bar_7_1_1_C  == 5){ $scope.bar_7_1_1_C = data.bar_7_1_1_C; $scope.bar_7_1_1_C = false; $scope.bar_7_1_1_C_b = true; $scope.bar_7_1_1_C_c = false; $scope.bar_7_1_1_C_cm = ''; } else if(data.bar_7_1_1_C  == 10){ 
				$scope.bar_7_1_1_C = data.bar_7_1_1_C; $scope.bar_7_1_1_C = false; $scope.bar_7_1_1_C_b = false; $scope.bar_7_1_1_C_c = true; $scope.bar_7_1_1_C_cm = ''; } else if( ((data.bar_7_1_1_C  >= 0 ) && (data.bar_7_1_1_C  < 3)) || ((data.bar_7_1_1_C  > 3 ) && (data.bar_7_1_1_C  < 5)) || ((data.bar_7_1_1_C  > 5 ) && (data.bar_7_1_1_C  < 10)) ){ $scope.bar_7_1_1_C_cm = data.bar_7_1_1_C; $scope.bar_7_1_1_C = false; $scope.bar_7_1_1_C_b = false; $scope.bar_7_1_1_C_c = false; $scope.bar_7_1_1_C = ''; }else{ $scope.bar_7_1_1_C = ''; $scope.bar_7_1_1_C_cm = ''; $scope.bar_7_1_1_C = false; $scope.bar_7_1_1_C_b = false; $scope.bar_7_1_1_C_c = false;}
				if(data.bar_7_1_1_D == 2){ $scope.bar_7_1_1_D = data.bar_7_1_1_D; $scope.bar_7_1_1_D = true; $scope.bar_7_1_1_D_b = false; $scope.bar_7_1_1_D_c = false; $scope.bar_7_1_1_D_cm = ''; } else if(data.bar_7_1_1_D  == 5){ $scope.bar_7_1_1_D = data.bar_7_1_1_D; $scope.bar_7_1_1_D = false; $scope.bar_7_1_1_D_b = true; $scope.bar_7_1_1_D_c = false; $scope.bar_7_1_1_D_cm = ''; } else if(data.bar_7_1_1_D  == 10){ 
				$scope.bar_7_1_1_D = data.bar_7_1_1_D; $scope.bar_7_1_1_D = false; $scope.bar_7_1_1_D_b = false; $scope.bar_7_1_1_D_c = true; $scope.bar_7_1_1_D_cm = ''; } else if( ((data.bar_7_1_1_D  >= 0 ) && (data.bar_7_1_1_D  < 2)) || ((data.bar_7_1_1_D  > 2 ) && (data.bar_7_1_1_D  < 5)) || ((data.bar_7_1_1_D  > 5 ) && (data.bar_7_1_1_D  < 10)) ){ $scope.bar_7_1_1_D_cm = data.bar_7_1_1_D; $scope.bar_7_1_1_D = false; $scope.bar_7_1_1_D_b = false; $scope.bar_7_1_1_D_c = false; $scope.bar_7_1_1_D = ''; }else{ $scope.bar_7_1_1_D = ''; $scope.bar_7_1_1_D_cm = ''; $scope.bar_7_1_1_D = false; $scope.bar_7_1_1_D_b = false; $scope.bar_7_1_1_D_c = false;}
				if(data.bar_7_1_1_E == 2){ $scope.bar_7_1_1_E = data.bar_7_1_1_E; $scope.bar_7_1_1_E = true; $scope.bar_7_1_1_E_b = false; $scope.bar_7_1_1_E_c = false; $scope.bar_7_1_1_E_cm = ''; } else if(data.bar_7_1_1_E  == 5){ $scope.bar_7_1_1_E = data.bar_7_1_1_E; $scope.bar_7_1_1_E = false; $scope.bar_7_1_1_E_b = true; $scope.bar_7_1_1_E_c = false; $scope.bar_7_1_1_E_cm = ''; } else if(data.bar_7_1_1_E  == 10){ 
				$scope.bar_7_1_1_E = data.bar_7_1_1_E; $scope.bar_7_1_1_E = false; $scope.bar_7_1_1_E_b = false; $scope.bar_7_1_1_E_c = true; $scope.bar_7_1_1_E_cm = ''; } else if( ((data.bar_7_1_1_E  >= 0 ) && (data.bar_7_1_1_E  < 2)) || ((data.bar_7_1_1_E  > 2 ) && (data.bar_7_1_1_E  < 5)) || ((data.bar_7_1_1_E  > 5 ) && (data.bar_7_1_1_E  < 10)) ){ $scope.bar_7_1_1_E_cm = data.bar_7_1_1_E; $scope.bar_7_1_1_E = false; $scope.bar_7_1_1_E_b = false; $scope.bar_7_1_1_E_c = false; $scope.bar_7_1_1_E = ''; }else{ $scope.bar_7_1_1_E = ''; $scope.bar_7_1_1_E_cm = ''; $scope.bar_7_1_1_E = false; $scope.bar_7_1_1_E_b = false; $scope.bar_7_1_1_E_c = false;}
				$scope.bar_7_2_1_text = data.bar_7_2_1_text;
				if(data.bar_7_2_1_A == 2){ $scope.bar_7_2_1_A = data.bar_7_2_1_A; $scope.bar_7_2_1_A = true; $scope.bar_7_2_1_A_b = false; $scope.bar_7_2_1_A_c = false; $scope.bar_7_2_1_A_cm = ''; } else if(data.bar_7_2_1_A  == 5){ $scope.bar_7_2_1_A = data.bar_7_2_1_A; $scope.bar_7_2_1_A = false; $scope.bar_7_2_1_A_b = true; $scope.bar_7_2_1_A_c = false; $scope.bar_7_2_1_A_cm = ''; } else if(data.bar_7_2_1_A  == 8){ 
				$scope.bar_7_2_1_A = data.bar_7_2_1_A; $scope.bar_7_2_1_A = false; $scope.bar_7_2_1_A_b = false; $scope.bar_7_2_1_A_c = true; $scope.bar_7_2_1_A_cm = ''; } else if( ((data.bar_7_2_1_A  >= 0 ) && (data.bar_7_2_1_A  < 2)) || ((data.bar_7_2_1_A  > 2 ) && (data.bar_7_2_1_A  < 5)) || ((data.bar_7_2_1_A  > 5 ) && (data.bar_7_2_1_A  < 8)) ){ $scope.bar_7_2_1_A_cm = data.bar_7_2_1_A; $scope.bar_7_2_1_A = false; $scope.bar_7_2_1_A_b = false; $scope.bar_7_2_1_A_c = false; $scope.bar_7_2_1_A = ''; }else{ $scope.bar_7_2_1_A = ''; $scope.bar_7_2_1_A_cm = ''; $scope.bar_7_2_1_A = false; $scope.bar_7_2_1_A_b = false; $scope.bar_7_2_1_A_c = false;}
				if(data.bar_7_2_1_B  == 3){ $scope.bar_7_2_1_B  = data.bar_7_2_1_B ; $scope.bar_7_2_1_B = true; $scope.bar_7_2_1_B_b = false; $scope.bar_7_2_1_B_cm = ''; } else if(data.bar_7_2_1_B  == 5){ $scope.bar_7_2_1_B  = data.bar_7_2_1_B ; $scope.bar_7_2_1_B = false; $scope.bar_7_2_1_B_b = true; $scope.bar_7_2_1_B_cm = ''; }else if( ((data.bar_7_2_1_B  > 0 ) && (data.bar_7_2_1_B  < 3)) || ((data.bar_7_2_1_B  > 3 ) && (data.bar_7_2_1_B  < 5)))
				{ $scope.bar_7_2_1_B_cm = data.bar_7_2_1_B ; $scope.bar_7_2_1_B = false; $scope.bar_7_2_1_B_b = false; $scope.bar_7_2_1_B  = ''; }else{ $scope.bar_7_2_1_B  = ''; $scope.bar_7_2_1_B_cm = ''; $scope.bar_7_2_1_B = false; $scope.bar_7_2_1_B_b = false; }
				if(data.bar_7_2_1_C == 2){ $scope.bar_7_2_1_C = data.bar_7_2_1_C; $scope.bar_7_2_1_C = true; $scope.bar_7_2_1_C_b = false; $scope.bar_7_2_1_C_c = false; $scope.bar_7_2_1_C_cm = ''; } else if(data.bar_7_2_1_C  == 5){ $scope.bar_7_2_1_C = data.bar_7_2_1_C; $scope.bar_7_2_1_C = false; $scope.bar_7_2_1_C_b = true; $scope.bar_7_2_1_C_c = false; $scope.bar_7_2_1_C_cm = ''; } else if(data.bar_7_2_1_C  == 7){ 
				$scope.bar_7_2_1_C = data.bar_7_2_1_C; $scope.bar_7_2_1_C = false; $scope.bar_7_2_1_C_b = false; $scope.bar_7_2_1_C_c = true; $scope.bar_7_2_1_C_cm = ''; } else if( ((data.bar_7_2_1_C  >= 0 ) && (data.bar_7_2_1_C  < 2)) || ((data.bar_7_2_1_C  > 2 ) && (data.bar_7_2_1_C  < 5)) || ((data.bar_7_2_1_C  > 5 ) && (data.bar_7_2_1_C  < 7)) ){ $scope.bar_7_2_1_C_cm = data.bar_7_2_1_C; $scope.bar_7_2_1_C = false; $scope.bar_7_2_1_C_b = false; $scope.bar_7_2_1_C_c = false; $scope.bar_7_2_1_C = ''; }else{ $scope.bar_7_2_1_C = ''; $scope.bar_7_2_1_C_cm = ''; $scope.bar_7_2_1_C = false; $scope.bar_7_2_1_C_b = false; $scope.bar_7_2_1_C_c = false;}
				if(data.bar_7_2_1_D == 2){ $scope.bar_7_2_1_D = data.bar_7_2_1_D; $scope.bar_7_2_1_D = true; $scope.bar_7_2_1_D_b = false; $scope.bar_7_2_1_D_c = false; $scope.bar_7_2_1_D_cm = ''; } else if(data.bar_7_2_1_D  == 5){ $scope.bar_7_2_1_D = data.bar_7_2_1_D; $scope.bar_7_2_1_D = false; $scope.bar_7_2_1_D_b = true; $scope.bar_7_2_1_D_c = false; $scope.bar_7_2_1_D_cm = ''; } else if(data.bar_7_2_1_D  == 7){ 
				$scope.bar_7_2_1_D = data.bar_7_2_1_D; $scope.bar_7_2_1_D = false; $scope.bar_7_2_1_D_b = false; $scope.bar_7_2_1_D_c = true; $scope.bar_7_2_1_D_cm = ''; } else if( ((data.bar_7_2_1_D  >= 0 ) && (data.bar_7_2_1_D  < 2)) || ((data.bar_7_2_1_D  > 2 ) && (data.bar_7_2_1_D  < 5)) || ((data.bar_7_2_1_D  > 5 ) && (data.bar_7_2_1_D  < 7)) ){ $scope.bar_7_2_1_D_cm = data.bar_7_2_1_D; $scope.bar_7_2_1_D = false; $scope.bar_7_2_1_D_b = false; $scope.bar_7_2_1_D_c = false; $scope.bar_7_2_1_D = ''; }else{ $scope.bar_7_2_1_D = ''; $scope.bar_7_2_1_D_cm = ''; $scope.bar_7_2_1_D = false; $scope.bar_7_2_1_D_b = false; $scope.bar_7_2_1_D_c = false;}
				$scope.bar_7_2_2_text = data.bar_7_2_2_text;
				if(data.bar_7_2_2_A == 3){ $scope.bar_7_2_2_A = data.bar_7_2_2_A; $scope.bar_7_2_2_A = true; $scope.bar_7_2_2_A_b = false; $scope.bar_7_2_2_A_c = false; $scope.bar_7_2_2_A_cm = ''; } else if(data.bar_7_2_2_A  == 7){ $scope.bar_7_2_2_A = data.bar_7_2_2_A; $scope.bar_7_2_2_A = false; $scope.bar_7_2_2_A_b = true; $scope.bar_7_2_2_A_c = false; $scope.bar_7_2_2_A_cm = ''; } else if(data.bar_7_2_2_A  == 10){ 
				$scope.bar_7_2_2_A = data.bar_7_2_2_A; $scope.bar_7_2_2_A = false; $scope.bar_7_2_2_A_b = false; $scope.bar_7_2_2_A_c = true; $scope.bar_7_2_2_A_cm = ''; } else if( ((data.bar_7_2_2_A  >= 0 ) && (data.bar_7_2_2_A  < 3)) || ((data.bar_7_2_2_A  > 3 ) && (data.bar_7_2_2_A  < 7)) || ((data.bar_7_2_2_A  > 7 ) && (data.bar_7_2_2_A  < 10)) ){ $scope.bar_7_2_2_A_cm = data.bar_7_2_2_A; $scope.bar_7_2_2_A = false; $scope.bar_7_2_2_A_b = false; $scope.bar_7_2_2_A_c = false; $scope.bar_7_2_2_A = ''; }else{ $scope.bar_7_2_2_A = ''; $scope.bar_7_2_2_A_cm = ''; $scope.bar_7_2_2_A = false; $scope.bar_7_2_2_A_b = false; $scope.bar_7_2_2_A_c = false;}
				if(data.bar_7_2_2_B == 5){ $scope.bar_7_2_2_B = data.bar_7_2_2_B; $scope.bar_7_2_2_B = true; $scope.bar_7_2_2_B_b = false; $scope.bar_7_2_2_B_c = false; $scope.bar_7_2_2_B_cm = ''; } else if(data.bar_7_2_2_B  == 7){ $scope.bar_7_2_2_B = data.bar_7_2_2_B; $scope.bar_7_2_2_B = false; $scope.bar_7_2_2_B_b = true; $scope.bar_7_2_2_B_c = false; $scope.bar_7_2_2_B_cm = ''; } else if(data.bar_7_2_2_B  == 10){ 
				$scope.bar_7_2_2_B = data.bar_7_2_2_B; $scope.bar_7_2_2_B = false; $scope.bar_7_2_2_B_b = false; $scope.bar_7_2_2_B_c = true; $scope.bar_7_2_2_B_cm = ''; } else if( ((data.bar_7_2_2_B  >= 0 ) && (data.bar_7_2_2_B  < 5)) || ((data.bar_7_2_2_B  > 5 ) && (data.bar_7_2_2_B  < 7)) || ((data.bar_7_2_2_B  > 7 ) && (data.bar_7_2_2_B  < 10)) ){ $scope.bar_7_2_2_B_cm = data.bar_7_2_2_B; $scope.bar_7_2_2_B = false; $scope.bar_7_2_2_B_b = false; $scope.bar_7_2_2_B_c = false; $scope.bar_7_2_2_B = ''; }else{ $scope.bar_7_2_2_B = ''; $scope.bar_7_2_2_B_cm = ''; $scope.bar_7_2_2_B = false; $scope.bar_7_2_2_B_b = false; $scope.bar_7_2_2_B_c = false;}
				if(data.bar_7_2_2_C == 0){ $scope.bar_7_2_2_C = data.bar_7_2_2_C; $scope.bar_7_2_2_C = true; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = false; $scope.bar_7_2_2_C_cm = ''; } else if(data.bar_7_2_2_C  == 2){ $scope.bar_7_2_2_C = data.bar_7_2_2_C; $scope.bar_7_2_2_C = false; $scope.bar_7_2_2_C_b = true; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = false; $scope.bar_7_2_2_C_cm = ''; } else if(data.bar_7_2_2_C  == 5){ $scope.bar_7_2_2_C = data.bar_7_2_2_C; $scope.bar_7_2_2_C = false; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = true; $scope.bar_7_2_2_C_d = false; $scope.bar_7_2_2_C_cm = ''; }else if(data.bar_7_2_2_C  == 8){ $scope.bar_7_2_2_C = data.bar_7_2_2_C; $scope.bar_7_2_2_C = false; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = true; $scope.bar_7_2_2_C_cm = ''; } else if( ((data.bar_7_2_2_C  > 0 ) && (data.bar_7_2_2_C  < 2)) || ((data.bar_7_2_2_C  > 2 ) && (data.bar_7_2_2_C  < 5)) || ((data.bar_7_2_2_C  > 5 ) && (data.bar_7_2_2_C  < 8)) )
				{ $scope.bar_7_2_2_C_cm = data.bar_7_2_2_C; $scope.bar_7_2_2_C = false; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = false; $scope.bar_7_2_2_C = ''; }else{ $scope.bar_7_2_2_C = ''; $scope.bar_7_2_2_C_cm = ''; $scope.bar_7_2_2_C = false; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = false;}
				if(data.bar_7_2_2_D == 5){ $scope.bar_7_2_2_D = data.bar_7_2_2_D; $scope.bar_7_2_2_D = true; $scope.bar_7_2_2_D_b = false; $scope.bar_7_2_2_D_c = false; $scope.bar_7_2_2_D_cm = ''; } else if(data.bar_7_2_2_D  == 7){ $scope.bar_7_2_2_D = data.bar_7_2_2_D; $scope.bar_7_2_2_D = false; $scope.bar_7_2_2_D_b = true; $scope.bar_7_2_2_D_c = false; $scope.bar_7_2_2_D_cm = ''; } else if(data.bar_7_2_2_D  == 10){ 
				$scope.bar_7_2_2_D = data.bar_7_2_2_D; $scope.bar_7_2_2_D = false; $scope.bar_7_2_2_D_b = false; $scope.bar_7_2_2_D_c = true; $scope.bar_7_2_2_D_cm = ''; } else if( ((data.bar_7_2_2_D  >= 0 ) && (data.bar_7_2_2_D  < 5)) || ((data.bar_7_2_2_D  > 5 ) && (data.bar_7_2_2_D  < 7)) || ((data.bar_7_2_2_D  > 7 ) && (data.bar_7_2_2_D  < 10)) ){ $scope.bar_7_2_2_D_cm = data.bar_7_2_2_D; $scope.bar_7_2_2_D = false; $scope.bar_7_2_2_D_b = false; $scope.bar_7_2_2_D_c = false; $scope.bar_7_2_2_D = ''; }else{ $scope.bar_7_2_2_D = ''; $scope.bar_7_2_2_D_cm = ''; $scope.bar_7_2_2_D = false; $scope.bar_7_2_2_D_b = false; $scope.bar_7_2_2_D_c = false;}
				if(data.bar_7_2_2_E == 0){ $scope.bar_7_2_2_E = data.bar_7_2_2_E; $scope.bar_7_2_2_E = true; $scope.bar_7_2_2_E_b = false; $scope.bar_7_2_2_E_c = false; $scope.bar_7_2_2_E_cm = ''; } else if(data.bar_7_2_2_E  == 5){ $scope.bar_7_2_2_E = data.bar_7_2_2_E; $scope.bar_7_2_2_E = false; $scope.bar_7_2_2_E_b = true; $scope.bar_7_2_2_E_c = false; $scope.bar_7_2_2_E_cm = ''; } else if(data.bar_7_2_2_E  == 7){ $scope.bar_7_2_2_E = data.bar_7_2_2_E; $scope.bar_7_2_2_E = false; $scope.bar_7_2_2_E_b = false; $scope.bar_7_2_2_E_c = true; $scope.bar_7_2_2_E_cm = ''; }else if( ((data.bar_7_2_2_E  > 0 ) && (data.bar_7_2_2_E  < 5)) || ((data.bar_7_2_2_E  > 5 ) && (data.bar_7_2_2_E  < 7)) )
				{ $scope.bar_7_2_2_E_cm = data.bar_7_2_2_E; $scope.bar_7_2_2_E = false; $scope.bar_7_2_2_E_b = false;  $scope.bar_7_2_2_E_c = false; $scope.bar_7_2_2_E = ''; }else{ $scope.bar_7_2_2_E = ''; $scope.bar_7_2_2_E_cm = ''; $scope.bar_7_2_2_E = false; $scope.bar_7_2_2_E_b = false; $scope.bar_7_2_2_E_c = false; }
				if(data.bar_7_2_2_F == 0){ $scope.bar_7_2_2_F = data.bar_7_2_2_F; $scope.bar_7_2_2_F = true; $scope.bar_7_2_2_F_b = false; $scope.bar_7_2_2_F_c = false; $scope.bar_7_2_2_F_cm = ''; } else if(data.bar_7_2_2_F  == 5){ $scope.bar_7_2_2_F = data.bar_7_2_2_F; $scope.bar_7_2_2_F = false; $scope.bar_7_2_2_F_b = true; $scope.bar_7_2_2_F_c = false; $scope.bar_7_2_2_F_cm = ''; } else if(data.bar_7_2_2_F  == 8){ $scope.bar_7_2_2_F = data.bar_7_2_2_F; $scope.bar_7_2_2_F = false; $scope.bar_7_2_2_F_b = false; $scope.bar_7_2_2_F_c = true; $scope.bar_7_2_2_F_cm = ''; }else if( ((data.bar_7_2_2_F  > 0 ) && (data.bar_7_2_2_F  < 5)) || ((data.bar_7_2_2_F  > 5 ) && (data.bar_7_2_2_F  < 8)) )
				{ $scope.bar_7_2_2_F_cm = data.bar_7_2_2_F; $scope.bar_7_2_2_F = false; $scope.bar_7_2_2_F_b = false;  $scope.bar_7_2_2_F_c = false; $scope.bar_7_2_2_F = ''; }else{ $scope.bar_7_2_2_F = ''; $scope.bar_7_2_2_F_cm = ''; $scope.bar_7_2_2_F = false; $scope.bar_7_2_2_F_b = false; $scope.bar_7_2_2_F_c = false; }
				$scope.bar_7_3_1_text = data.bar_7_3_1_text;
				if(data.bar_7_3_1_A == 0){ $scope.bar_7_3_1_A = data.bar_7_3_1_A; $scope.bar_7_3_1_A = true; $scope.bar_7_3_1_A_b = false; $scope.bar_7_3_1_A_c = false; $scope.bar_7_3_1_A_cm = ''; } else if(data.bar_7_3_1_A  == 5){ $scope.bar_7_3_1_A = data.bar_7_3_1_A; $scope.bar_7_3_1_A = false; $scope.bar_7_3_1_A_b = true; $scope.bar_7_3_1_A_c = false; $scope.bar_7_3_1_A_cm = ''; } else if(data.bar_7_3_1_A  == ){ $scope.bar_7_3_1_A = data.bar_7_3_1_A; $scope.bar_7_3_1_A = false; $scope.bar_7_3_1_A_b = false; $scope.bar_7_3_1_A_c = true; $scope.bar_7_3_1_A_cm = ''; }else if( ((data.bar_7_3_1_A  > 0 ) && (data.bar_7_3_1_A  < 5)) || ((data.bar_7_3_1_A  > 5 ) && (data.bar_7_3_1_A  < )) )
				{ $scope.bar_7_3_1_A_cm = data.bar_7_3_1_A; $scope.bar_7_3_1_A = false; $scope.bar_7_3_1_A_b = false;  $scope.bar_7_3_1_A_c = false; $scope.bar_7_3_1_A = ''; }else{ $scope.bar_7_3_1_A = ''; $scope.bar_7_3_1_A_cm = ''; $scope.bar_7_3_1_A = false; $scope.bar_7_3_1_A_b = false; $scope.bar_7_3_1_A_c = false; }
				if(data.bar_7_3_1_B  == 3){ $scope.bar_7_3_1_B  = data.bar_7_3_1_B ; $scope.bar_7_3_1_B = true; $scope.bar_7_3_1_B_b = false; $scope.bar_7_3_1_B_cm = ''; } else if(data.bar_7_3_1_B  == 5){ $scope.bar_7_3_1_B  = data.bar_7_3_1_B ; $scope.bar_7_3_1_B = false; $scope.bar_7_3_1_B_b = true; $scope.bar_7_3_1_B_cm = ''; }else if( ((data.bar_7_3_1_B  > 0 ) && (data.bar_7_3_1_B  < 3)) || ((data.bar_7_3_1_B  > 3 ) && (data.bar_7_3_1_B  < 5)))
				{ $scope.bar_7_3_1_B_cm = data.bar_7_3_1_B ; $scope.bar_7_3_1_B = false; $scope.bar_7_3_1_B_b = false; $scope.bar_7_3_1_B  = ''; }else{ $scope.bar_7_3_1_B  = ''; $scope.bar_7_3_1_B_cm = ''; $scope.bar_7_3_1_B = false; $scope.bar_7_3_1_B_b = false; }
				if(data.bar_7_3_1_C == 10){ $scope.bar_7_3_1_C = data.bar_7_3_1_C; $scope.bar_7_3_1_C = true; $scope.bar_7_3_1_C_b = false; $scope.bar_7_3_1_C_c = false; $scope.bar_7_3_1_C_cm = ''; } else if(data.bar_7_3_1_C  == 15){ $scope.bar_7_3_1_C = data.bar_7_3_1_C; $scope.bar_7_3_1_C = false; $scope.bar_7_3_1_C_b = true; $scope.bar_7_3_1_C_c = false; $scope.bar_7_3_1_C_cm = ''; } else if(data.bar_7_3_1_C  == 20){ 
				$scope.bar_7_3_1_C = data.bar_7_3_1_C; $scope.bar_7_3_1_C = false; $scope.bar_7_3_1_C_b = false; $scope.bar_7_3_1_C_c = true; $scope.bar_7_3_1_C_cm = ''; } else if( ((data.bar_7_3_1_C  >= 0 ) && (data.bar_7_3_1_C  < 10)) || ((data.bar_7_3_1_C  > 10 ) && (data.bar_7_3_1_C  < 15)) || ((data.bar_7_3_1_C  > 15 ) && (data.bar_7_3_1_C  < 20)) ){ $scope.bar_7_3_1_C_cm = data.bar_7_3_1_C; $scope.bar_7_3_1_C = false; $scope.bar_7_3_1_C_b = false; $scope.bar_7_3_1_C_c = false; $scope.bar_7_3_1_C = ''; }else{ $scope.bar_7_3_1_C = ''; $scope.bar_7_3_1_C_cm = ''; $scope.bar_7_3_1_C = false; $scope.bar_7_3_1_C_b = false; $scope.bar_7_3_1_C_c = false;}
				if(data.bar_7_3_1_D == 0){ $scope.bar_7_3_1_D = data.bar_7_3_1_D; $scope.bar_7_3_1_D = true; $scope.bar_7_3_1_D_b = false; $scope.bar_7_3_1_D_c = false; $scope.bar_7_3_1_D_cm = ''; } else if(data.bar_7_3_1_D  == 5){ $scope.bar_7_3_1_D = data.bar_7_3_1_D; $scope.bar_7_3_1_D = false; $scope.bar_7_3_1_D_b = true; $scope.bar_7_3_1_D_c = false; $scope.bar_7_3_1_D_cm = ''; } else if(data.bar_7_3_1_D  == ){ $scope.bar_7_3_1_D = data.bar_7_3_1_D; $scope.bar_7_3_1_D = false; $scope.bar_7_3_1_D_b = false; $scope.bar_7_3_1_D_c = true; $scope.bar_7_3_1_D_cm = ''; }else if( ((data.bar_7_3_1_D  > 0 ) && (data.bar_7_3_1_D  < 5)) || ((data.bar_7_3_1_D  > 5 ) && (data.bar_7_3_1_D  < )) )
				{ $scope.bar_7_3_1_D_cm = data.bar_7_3_1_D; $scope.bar_7_3_1_D = false; $scope.bar_7_3_1_D_b = false;  $scope.bar_7_3_1_D_c = false; $scope.bar_7_3_1_D = ''; }else{ $scope.bar_7_3_1_D = ''; $scope.bar_7_3_1_D_cm = ''; $scope.bar_7_3_1_D = false; $scope.bar_7_3_1_D_b = false; $scope.bar_7_3_1_D_c = false; }
				if(data.bar_7_3_1_E  == 3){ $scope.bar_7_3_1_E  = data.bar_7_3_1_E ; $scope.bar_7_3_1_E = true; $scope.bar_7_3_1_E_b = false; $scope.bar_7_3_1_E_cm = ''; } else if(data.bar_7_3_1_E  == 5){ $scope.bar_7_3_1_E  = data.bar_7_3_1_E ; $scope.bar_7_3_1_E = false; $scope.bar_7_3_1_E_b = true; $scope.bar_7_3_1_E_cm = ''; }else if( ((data.bar_7_3_1_E  > 0 ) && (data.bar_7_3_1_E  < 3)) || ((data.bar_7_3_1_E  > 3 ) && (data.bar_7_3_1_E  < 5)))
				{ $scope.bar_7_3_1_E_cm = data.bar_7_3_1_E ; $scope.bar_7_3_1_E = false; $scope.bar_7_3_1_E_b = false; $scope.bar_7_3_1_E  = ''; }else{ $scope.bar_7_3_1_E  = ''; $scope.bar_7_3_1_E_cm = ''; $scope.bar_7_3_1_E = false; $scope.bar_7_3_1_E_b = false; }
				if(data.bar_7_3_1_F == 5){ $scope.bar_7_3_1_F = data.bar_7_3_1_F; $scope.bar_7_3_1_F = true; $scope.bar_7_3_1_F_b = false; $scope.bar_7_3_1_F_c = false; $scope.bar_7_3_1_F_cm = ''; } else if(data.bar_7_3_1_F  == 7){ $scope.bar_7_3_1_F = data.bar_7_3_1_F; $scope.bar_7_3_1_F = false; $scope.bar_7_3_1_F_b = true; $scope.bar_7_3_1_F_c = false; $scope.bar_7_3_1_F_cm = ''; } else if(data.bar_7_3_1_F  == 10){ 
				$scope.bar_7_3_1_F = data.bar_7_3_1_F; $scope.bar_7_3_1_F = false; $scope.bar_7_3_1_F_b = false; $scope.bar_7_3_1_F_c = true; $scope.bar_7_3_1_F_cm = ''; } else if( ((data.bar_7_3_1_F  >= 0 ) && (data.bar_7_3_1_F  < 5)) || ((data.bar_7_3_1_F  > 5 ) && (data.bar_7_3_1_F  < 7)) || ((data.bar_7_3_1_F  > 7 ) && (data.bar_7_3_1_F  < 10)) ){ $scope.bar_7_3_1_F_cm = data.bar_7_3_1_F; $scope.bar_7_3_1_F = false; $scope.bar_7_3_1_F_b = false; $scope.bar_7_3_1_F_c = false; $scope.bar_7_3_1_F = ''; }else{ $scope.bar_7_3_1_F = ''; $scope.bar_7_3_1_F_cm = ''; $scope.bar_7_3_1_F = false; $scope.bar_7_3_1_F_b = false; $scope.bar_7_3_1_F_c = false;}
				$scope.bar_7_4_1_text = data.bar_7_4_1_text;
				if(data.bar_7_4_1_A  == 3){ $scope.bar_7_4_1_A  = data.bar_7_4_1_A ; $scope.bar_7_4_1_A = true; $scope.bar_7_4_1_A_b = false; $scope.bar_7_4_1_A_cm = ''; } else if(data.bar_7_4_1_A  == 5){ $scope.bar_7_4_1_A  = data.bar_7_4_1_A ; $scope.bar_7_4_1_A = false; $scope.bar_7_4_1_A_b = true; $scope.bar_7_4_1_A_cm = ''; }else if( ((data.bar_7_4_1_A  > 0 ) && (data.bar_7_4_1_A  < 3)) || ((data.bar_7_4_1_A  > 3 ) && (data.bar_7_4_1_A  < 5)))
				{ $scope.bar_7_4_1_A_cm = data.bar_7_4_1_A ; $scope.bar_7_4_1_A = false; $scope.bar_7_4_1_A_b = false; $scope.bar_7_4_1_A  = ''; }else{ $scope.bar_7_4_1_A  = ''; $scope.bar_7_4_1_A_cm = ''; $scope.bar_7_4_1_A = false; $scope.bar_7_4_1_A_b = false; }
				if(data.bar_7_4_1_B == 5){ $scope.bar_7_4_1_B = data.bar_7_4_1_B; $scope.bar_7_4_1_B = true; $scope.bar_7_4_1_B_b = false; $scope.bar_7_4_1_B_c = false; $scope.bar_7_4_1_B_cm = ''; } else if(data.bar_7_4_1_B  == 7){ $scope.bar_7_4_1_B = data.bar_7_4_1_B; $scope.bar_7_4_1_B = false; $scope.bar_7_4_1_B_b = true; $scope.bar_7_4_1_B_c = false; $scope.bar_7_4_1_B_cm = ''; } else if(data.bar_7_4_1_B  == 10){ 
				$scope.bar_7_4_1_B = data.bar_7_4_1_B; $scope.bar_7_4_1_B = false; $scope.bar_7_4_1_B_b = false; $scope.bar_7_4_1_B_c = true; $scope.bar_7_4_1_B_cm = ''; } else if( ((data.bar_7_4_1_B  >= 0 ) && (data.bar_7_4_1_B  < 5)) || ((data.bar_7_4_1_B  > 5 ) && (data.bar_7_4_1_B  < 7)) || ((data.bar_7_4_1_B  > 7 ) && (data.bar_7_4_1_B  < 10)) ){ $scope.bar_7_4_1_B_cm = data.bar_7_4_1_B; $scope.bar_7_4_1_B = false; $scope.bar_7_4_1_B_b = false; $scope.bar_7_4_1_B_c = false; $scope.bar_7_4_1_B = ''; }else{ $scope.bar_7_4_1_B = ''; $scope.bar_7_4_1_B_cm = ''; $scope.bar_7_4_1_B = false; $scope.bar_7_4_1_B_b = false; $scope.bar_7_4_1_B_c = false;}
				if(data.bar_7_4_1_C == 5){ $scope.bar_7_4_1_C = data.bar_7_4_1_C; $scope.bar_7_4_1_C = true; $scope.bar_7_4_1_C_b = false; $scope.bar_7_4_1_C_c = false; $scope.bar_7_4_1_C_cm = ''; } else if(data.bar_7_4_1_C  == 7){ $scope.bar_7_4_1_C = data.bar_7_4_1_C; $scope.bar_7_4_1_C = false; $scope.bar_7_4_1_C_b = true; $scope.bar_7_4_1_C_c = false; $scope.bar_7_4_1_C_cm = ''; } else if(data.bar_7_4_1_C  == 10){ 
				$scope.bar_7_4_1_C = data.bar_7_4_1_C; $scope.bar_7_4_1_C = false; $scope.bar_7_4_1_C_b = false; $scope.bar_7_4_1_C_c = true; $scope.bar_7_4_1_C_cm = ''; } else if( ((data.bar_7_4_1_C  >= 0 ) && (data.bar_7_4_1_C  < 5)) || ((data.bar_7_4_1_C  > 5 ) && (data.bar_7_4_1_C  < 7)) || ((data.bar_7_4_1_C  > 7 ) && (data.bar_7_4_1_C  < 10)) ){ $scope.bar_7_4_1_C_cm = data.bar_7_4_1_C; $scope.bar_7_4_1_C = false; $scope.bar_7_4_1_C_b = false; $scope.bar_7_4_1_C_c = false; $scope.bar_7_4_1_C = ''; }else{ $scope.bar_7_4_1_C = ''; $scope.bar_7_4_1_C_cm = ''; $scope.bar_7_4_1_C = false; $scope.bar_7_4_1_C_b = false; $scope.bar_7_4_1_C_c = false;}
				if(data.bar_7_4_1_D == 5){ $scope.bar_7_4_1_D = data.bar_7_4_1_D; $scope.bar_7_4_1_D = true; $scope.bar_7_4_1_D_b = false; $scope.bar_7_4_1_D_c = false; $scope.bar_7_4_1_D_cm = ''; } else if(data.bar_7_4_1_D  == 7){ $scope.bar_7_4_1_D = data.bar_7_4_1_D; $scope.bar_7_4_1_D = false; $scope.bar_7_4_1_D_b = true; $scope.bar_7_4_1_D_c = false; $scope.bar_7_4_1_D_cm = ''; } else if(data.bar_7_4_1_D  == 10){ 
				$scope.bar_7_4_1_D = data.bar_7_4_1_D; $scope.bar_7_4_1_D = false; $scope.bar_7_4_1_D_b = false; $scope.bar_7_4_1_D_c = true; $scope.bar_7_4_1_D_cm = ''; } else if( ((data.bar_7_4_1_D  >= 0 ) && (data.bar_7_4_1_D  < 5)) || ((data.bar_7_4_1_D  > 5 ) && (data.bar_7_4_1_D  < 7)) || ((data.bar_7_4_1_D  > 7 ) && (data.bar_7_4_1_D  < 10)) ){ $scope.bar_7_4_1_D_cm = data.bar_7_4_1_D; $scope.bar_7_4_1_D = false; $scope.bar_7_4_1_D_b = false; $scope.bar_7_4_1_D_c = false; $scope.bar_7_4_1_D = ''; }else{ $scope.bar_7_4_1_D = ''; $scope.bar_7_4_1_D_cm = ''; $scope.bar_7_4_1_D = false; $scope.bar_7_4_1_D_b = false; $scope.bar_7_4_1_D_c = false;}
				if(data.bar_7_4_1_E_a == 1){ $scope.bar_7_4_1_E_a = data.bar_7_4_1_E_a; $scope.bar_7_4_1_E_a= true; $scope.bar_7_4_1_E_a_cm = ''; } else if((data.bar_7_4_1_E_a > 0 ) && (data.bar_7_4_1_E_a < 1)){ $scope.bar_7_4_1_E_a_cm = data.bar_7_4_1_E_a; $scope.bar_7_4_1_E_a= false; $scope.bar_7_4_1_E_a= ''; }else{ $scope.bar_7_4_1_E_a= ''; $scope.bar_7_4_1_E_a_cm = ''; $scope.bar_7_4_1_E_a= false; }
				if(data.bar_7_4_1_E_b == 1){ $scope.bar_7_4_1_E_b = data.bar_7_4_1_E_b; $scope.bar_7_4_1_E_b= true; $scope.bar_7_4_1_E_b_cm = ''; } else if((data.bar_7_4_1_E_b > 0 ) && (data.bar_7_4_1_E_b < 1)){ $scope.bar_7_4_1_E_b_cm = data.bar_7_4_1_E_b; $scope.bar_7_4_1_E_b= false; $scope.bar_7_4_1_E_b= ''; }else{ $scope.bar_7_4_1_E_b= ''; $scope.bar_7_4_1_E_b_cm = ''; $scope.bar_7_4_1_E_b= false; }
				if(data.bar_7_4_1_E_c == 2){ $scope.bar_7_4_1_E_c = data.bar_7_4_1_E_c; $scope.bar_7_4_1_E_c= true; $scope.bar_7_4_1_E_c_cm = ''; } else if((data.bar_7_4_1_E_c > 0 ) && (data.bar_7_4_1_E_c < 2)){ $scope.bar_7_4_1_E_c_cm = data.bar_7_4_1_E_c; $scope.bar_7_4_1_E_c= false; $scope.bar_7_4_1_E_c= ''; }else{ $scope.bar_7_4_1_E_c= ''; $scope.bar_7_4_1_E_c_cm = ''; $scope.bar_7_4_1_E_c= false; }
				if(data.bar_7_4_1_E_d == 1){ $scope.bar_7_4_1_E_d = data.bar_7_4_1_E_d; $scope.bar_7_4_1_E_d= true; $scope.bar_7_4_1_E_d_cm = ''; } else if((data.bar_7_4_1_E_d > 0 ) && (data.bar_7_4_1_E_d < 1)){ $scope.bar_7_4_1_E_d_cm = data.bar_7_4_1_E_d; $scope.bar_7_4_1_E_d= false; $scope.bar_7_4_1_E_d= ''; }else{ $scope.bar_7_4_1_E_d= ''; $scope.bar_7_4_1_E_d_cm = ''; $scope.bar_7_4_1_E_d= false; }
				if(data.bar_7_4_1_E_e == 2){ $scope.bar_7_4_1_E_e = data.bar_7_4_1_E_e; $scope.bar_7_4_1_E_e= true; $scope.bar_7_4_1_E_e_cm = ''; } else if((data.bar_7_4_1_E_e > 0 ) && (data.bar_7_4_1_E_e < 2)){ $scope.bar_7_4_1_E_e_cm = data.bar_7_4_1_E_e; $scope.bar_7_4_1_E_e= false; $scope.bar_7_4_1_E_e= ''; }else{ $scope.bar_7_4_1_E_e= ''; $scope.bar_7_4_1_E_e_cm = ''; $scope.bar_7_4_1_E_e= false; }
				if(data.bar_7_4_1_E_f == 1){ $scope.bar_7_4_1_E_f = data.bar_7_4_1_E_f; $scope.bar_7_4_1_E_f= true; $scope.bar_7_4_1_E_f_cm = ''; } else if((data.bar_7_4_1_E_f > 0 ) && (data.bar_7_4_1_E_f < 1)){ $scope.bar_7_4_1_E_f_cm = data.bar_7_4_1_E_f; $scope.bar_7_4_1_E_f= false; $scope.bar_7_4_1_E_f= ''; }else{ $scope.bar_7_4_1_E_f= ''; $scope.bar_7_4_1_E_f_cm = ''; $scope.bar_7_4_1_E_f= false; }
				if(data.bar_7_4_1_E_g == 1){ $scope.bar_7_4_1_E_g = data.bar_7_4_1_E_g; $scope.bar_7_4_1_E_g= true; $scope.bar_7_4_1_E_g_cm = ''; } else if((data.bar_7_4_1_E_g > 0 ) && (data.bar_7_4_1_E_g < 1)){ $scope.bar_7_4_1_E_g_cm = data.bar_7_4_1_E_g; $scope.bar_7_4_1_E_g= false; $scope.bar_7_4_1_E_g= ''; }else{ $scope.bar_7_4_1_E_g= ''; $scope.bar_7_4_1_E_g_cm = ''; $scope.bar_7_4_1_E_g= false; }
				if(data.bar_7_4_1_E_h == 1){ $scope.bar_7_4_1_E_h = data.bar_7_4_1_E_h; $scope.bar_7_4_1_E_h= true; $scope.bar_7_4_1_E_h_cm = ''; } else if((data.bar_7_4_1_E_h > 0 ) && (data.bar_7_4_1_E_h < 1)){ $scope.bar_7_4_1_E_h_cm = data.bar_7_4_1_E_h; $scope.bar_7_4_1_E_h= false; $scope.bar_7_4_1_E_h= ''; }else{ $scope.bar_7_4_1_E_h= ''; $scope.bar_7_4_1_E_h_cm = ''; $scope.bar_7_4_1_E_h= false; }
				if(data.bar_7_4_1_F == 5){ $scope.bar_7_4_1_F = data.bar_7_4_1_F; $scope.bar_7_4_1_F = true; $scope.bar_7_4_1_F_b = false; $scope.bar_7_4_1_F_c = false; $scope.bar_7_4_1_F_cm = ''; } else if(data.bar_7_4_1_F  == 7){ $scope.bar_7_4_1_F = data.bar_7_4_1_F; $scope.bar_7_4_1_F = false; $scope.bar_7_4_1_F_b = true; $scope.bar_7_4_1_F_c = false; $scope.bar_7_4_1_F_cm = ''; } else if(data.bar_7_4_1_F  == 10){ 
				$scope.bar_7_4_1_F = data.bar_7_4_1_F; $scope.bar_7_4_1_F = false; $scope.bar_7_4_1_F_b = false; $scope.bar_7_4_1_F_c = true; $scope.bar_7_4_1_F_cm = ''; } else if( ((data.bar_7_4_1_F  >= 0 ) && (data.bar_7_4_1_F  < 5)) || ((data.bar_7_4_1_F  > 5 ) && (data.bar_7_4_1_F  < 7)) || ((data.bar_7_4_1_F  > 7 ) && (data.bar_7_4_1_F  < 10)) ){ $scope.bar_7_4_1_F_cm = data.bar_7_4_1_F; $scope.bar_7_4_1_F = false; $scope.bar_7_4_1_F_b = false; $scope.bar_7_4_1_F_c = false; $scope.bar_7_4_1_F = ''; }else{ $scope.bar_7_4_1_F = ''; $scope.bar_7_4_1_F_cm = ''; $scope.bar_7_4_1_F = false; $scope.bar_7_4_1_F_b = false; $scope.bar_7_4_1_F_c = false;}
				if(data.bar_7_4_1_G == 0){ $scope.bar_7_4_1_G = data.bar_7_4_1_G; $scope.bar_7_4_1_G = true; $scope.bar_7_4_1_G_b = false; $scope.bar_7_4_1_G_c = false; $scope.bar_7_4_1_G_cm = ''; } else if(data.bar_7_4_1_G  == 5){ $scope.bar_7_4_1_G = data.bar_7_4_1_G; $scope.bar_7_4_1_G = false; $scope.bar_7_4_1_G_b = true; $scope.bar_7_4_1_G_c = false; $scope.bar_7_4_1_G_cm = ''; } else if(data.bar_7_4_1_G  == ){ $scope.bar_7_4_1_G = data.bar_7_4_1_G; $scope.bar_7_4_1_G = false; $scope.bar_7_4_1_G_b = false; $scope.bar_7_4_1_G_c = true; $scope.bar_7_4_1_G_cm = ''; }else if( ((data.bar_7_4_1_G  > 0 ) && (data.bar_7_4_1_G  < 5)) || ((data.bar_7_4_1_G  > 5 ) && (data.bar_7_4_1_G  < )) )
				{ $scope.bar_7_4_1_G_cm = data.bar_7_4_1_G; $scope.bar_7_4_1_G = false; $scope.bar_7_4_1_G_b = false;  $scope.bar_7_4_1_G_c = false; $scope.bar_7_4_1_G = ''; }else{ $scope.bar_7_4_1_G = ''; $scope.bar_7_4_1_G_cm = ''; $scope.bar_7_4_1_G = false; $scope.bar_7_4_1_G_b = false; $scope.bar_7_4_1_G_c = false; }
				if(data.bar_7_4_1_H == 0){ $scope.bar_7_4_1_H = data.bar_7_4_1_H; $scope.bar_7_4_1_H = true; $scope.bar_7_4_1_H_b = false; $scope.bar_7_4_1_H_c = false; $scope.bar_7_4_1_H_cm = ''; } else if(data.bar_7_4_1_H  == 3){ $scope.bar_7_4_1_H = data.bar_7_4_1_H; $scope.bar_7_4_1_H = false; $scope.bar_7_4_1_H_b = true; $scope.bar_7_4_1_H_c = false; $scope.bar_7_4_1_H_cm = ''; } else if(data.bar_7_4_1_H  == 5){ $scope.bar_7_4_1_H = data.bar_7_4_1_H; $scope.bar_7_4_1_H = false; $scope.bar_7_4_1_H_b = false; $scope.bar_7_4_1_H_c = true; $scope.bar_7_4_1_H_cm = ''; }else if( ((data.bar_7_4_1_H  > 0 ) && (data.bar_7_4_1_H  < 3)) || ((data.bar_7_4_1_H  > 3 ) && (data.bar_7_4_1_H  < 5)) )
				{ $scope.bar_7_4_1_H_cm = data.bar_7_4_1_H; $scope.bar_7_4_1_H = false; $scope.bar_7_4_1_H_b = false;  $scope.bar_7_4_1_H_c = false; $scope.bar_7_4_1_H = ''; }else{ $scope.bar_7_4_1_H = ''; $scope.bar_7_4_1_H_cm = ''; $scope.bar_7_4_1_H = false; $scope.bar_7_4_1_H_b = false; $scope.bar_7_4_1_H_c = false; }
				if(data.bar_7_4_1_I == 0){ $scope.bar_7_4_1_I = data.bar_7_4_1_I; $scope.bar_7_4_1_I = true; $scope.bar_7_4_1_I_b = false; $scope.bar_7_4_1_I_c = false; $scope.bar_7_4_1_I_cm = ''; } else if(data.bar_7_4_1_I  == 3){ $scope.bar_7_4_1_I = data.bar_7_4_1_I; $scope.bar_7_4_1_I = false; $scope.bar_7_4_1_I_b = true; $scope.bar_7_4_1_I_c = false; $scope.bar_7_4_1_I_cm = ''; } else if(data.bar_7_4_1_I  == 5){ $scope.bar_7_4_1_I = data.bar_7_4_1_I; $scope.bar_7_4_1_I = false; $scope.bar_7_4_1_I_b = false; $scope.bar_7_4_1_I_c = true; $scope.bar_7_4_1_I_cm = ''; }else if( ((data.bar_7_4_1_I  > 0 ) && (data.bar_7_4_1_I  < 3)) || ((data.bar_7_4_1_I  > 3 ) && (data.bar_7_4_1_I  < 5)) )
				{ $scope.bar_7_4_1_I_cm = data.bar_7_4_1_I; $scope.bar_7_4_1_I = false; $scope.bar_7_4_1_I_b = false;  $scope.bar_7_4_1_I_c = false; $scope.bar_7_4_1_I = ''; }else{ $scope.bar_7_4_1_I = ''; $scope.bar_7_4_1_I_cm = ''; $scope.bar_7_4_1_I = false; $scope.bar_7_4_1_I_b = false; $scope.bar_7_4_1_I_c = false; }
				$scope.bar_7_5_1_text = data.bar_7_5_1_text;
				if(data.bar_7_5_1_A == 3){ $scope.bar_7_5_1_A = data.bar_7_5_1_A; $scope.bar_7_5_1_A = true; $scope.bar_7_5_1_A_b = false; $scope.bar_7_5_1_A_c = false; $scope.bar_7_5_1_A_cm = ''; } else if(data.bar_7_5_1_A  == 7){ $scope.bar_7_5_1_A = data.bar_7_5_1_A; $scope.bar_7_5_1_A = false; $scope.bar_7_5_1_A_b = true; $scope.bar_7_5_1_A_c = false; $scope.bar_7_5_1_A_cm = ''; } else if(data.bar_7_5_1_A  == 10){ 
				$scope.bar_7_5_1_A = data.bar_7_5_1_A; $scope.bar_7_5_1_A = false; $scope.bar_7_5_1_A_b = false; $scope.bar_7_5_1_A_c = true; $scope.bar_7_5_1_A_cm = ''; } else if( ((data.bar_7_5_1_A  >= 0 ) && (data.bar_7_5_1_A  < 3)) || ((data.bar_7_5_1_A  > 3 ) && (data.bar_7_5_1_A  < 7)) || ((data.bar_7_5_1_A  > 7 ) && (data.bar_7_5_1_A  < 10)) ){ $scope.bar_7_5_1_A_cm = data.bar_7_5_1_A; $scope.bar_7_5_1_A = false; $scope.bar_7_5_1_A_b = false; $scope.bar_7_5_1_A_c = false; $scope.bar_7_5_1_A = ''; }else{ $scope.bar_7_5_1_A = ''; $scope.bar_7_5_1_A_cm = ''; $scope.bar_7_5_1_A = false; $scope.bar_7_5_1_A_b = false; $scope.bar_7_5_1_A_c = false;}
				if(data.bar_7_5_1_B == 0){ $scope.bar_7_5_1_B = data.bar_7_5_1_B; $scope.bar_7_5_1_B = true; $scope.bar_7_5_1_B_b = false; $scope.bar_7_5_1_B_c = false; $scope.bar_7_5_1_B_cm = ''; } else if(data.bar_7_5_1_B  == 10){ $scope.bar_7_5_1_B = data.bar_7_5_1_B; $scope.bar_7_5_1_B = false; $scope.bar_7_5_1_B_b = true; $scope.bar_7_5_1_B_c = false; $scope.bar_7_5_1_B_cm = ''; } else if(data.bar_7_5_1_B  == ){ $scope.bar_7_5_1_B = data.bar_7_5_1_B; $scope.bar_7_5_1_B = false; $scope.bar_7_5_1_B_b = false; $scope.bar_7_5_1_B_c = true; $scope.bar_7_5_1_B_cm = ''; }else if( ((data.bar_7_5_1_B  > 0 ) && (data.bar_7_5_1_B  < 10)) || ((data.bar_7_5_1_B  > 10 ) && (data.bar_7_5_1_B  < )) )
				{ $scope.bar_7_5_1_B_cm = data.bar_7_5_1_B; $scope.bar_7_5_1_B = false; $scope.bar_7_5_1_B_b = false;  $scope.bar_7_5_1_B_c = false; $scope.bar_7_5_1_B = ''; }else{ $scope.bar_7_5_1_B = ''; $scope.bar_7_5_1_B_cm = ''; $scope.bar_7_5_1_B = false; $scope.bar_7_5_1_B_b = false; $scope.bar_7_5_1_B_c = false; }
				if(data.bar_7_5_1_C == 0){ $scope.bar_7_5_1_C = data.bar_7_5_1_C; $scope.bar_7_5_1_C = true; $scope.bar_7_5_1_C_b = false; $scope.bar_7_5_1_C_c = false; $scope.bar_7_5_1_C_cm = ''; } else if(data.bar_7_5_1_C  == 10){ $scope.bar_7_5_1_C = data.bar_7_5_1_C; $scope.bar_7_5_1_C = false; $scope.bar_7_5_1_C_b = true; $scope.bar_7_5_1_C_c = false; $scope.bar_7_5_1_C_cm = ''; } else if(data.bar_7_5_1_C  == ){ $scope.bar_7_5_1_C = data.bar_7_5_1_C; $scope.bar_7_5_1_C = false; $scope.bar_7_5_1_C_b = false; $scope.bar_7_5_1_C_c = true; $scope.bar_7_5_1_C_cm = ''; }else if( ((data.bar_7_5_1_C  > 0 ) && (data.bar_7_5_1_C  < 10)) || ((data.bar_7_5_1_C  > 10 ) && (data.bar_7_5_1_C  < )) )
				{ $scope.bar_7_5_1_C_cm = data.bar_7_5_1_C; $scope.bar_7_5_1_C = false; $scope.bar_7_5_1_C_b = false;  $scope.bar_7_5_1_C_c = false; $scope.bar_7_5_1_C = ''; }else{ $scope.bar_7_5_1_C = ''; $scope.bar_7_5_1_C_cm = ''; $scope.bar_7_5_1_C = false; $scope.bar_7_5_1_C_b = false; $scope.bar_7_5_1_C_c = false; }
				$scope.bar_7_6_1_text = data.bar_7_6_1_text;
				if(data.bar_7_6_1_A == 4){ $scope.bar_7_6_1_A = data.bar_7_6_1_A; $scope.bar_7_6_1_A = true; $scope.bar_7_6_1_A_b = false; $scope.bar_7_6_1_A_c = false; $scope.bar_7_6_1_A_cm = ''; } else if(data.bar_7_6_1_A  == 8){ $scope.bar_7_6_1_A = data.bar_7_6_1_A; $scope.bar_7_6_1_A = false; $scope.bar_7_6_1_A_b = true; $scope.bar_7_6_1_A_c = false; $scope.bar_7_6_1_A_cm = ''; } else if(data.bar_7_6_1_A  == 15){ 
				$scope.bar_7_6_1_A = data.bar_7_6_1_A; $scope.bar_7_6_1_A = false; $scope.bar_7_6_1_A_b = false; $scope.bar_7_6_1_A_c = true; $scope.bar_7_6_1_A_cm = ''; } else if( ((data.bar_7_6_1_A  >= 0 ) && (data.bar_7_6_1_A  < 4)) || ((data.bar_7_6_1_A  > 4 ) && (data.bar_7_6_1_A  < 8)) || ((data.bar_7_6_1_A  > 8 ) && (data.bar_7_6_1_A  < 15)) ){ $scope.bar_7_6_1_A_cm = data.bar_7_6_1_A; $scope.bar_7_6_1_A = false; $scope.bar_7_6_1_A_b = false; $scope.bar_7_6_1_A_c = false; $scope.bar_7_6_1_A = ''; }else{ $scope.bar_7_6_1_A = ''; $scope.bar_7_6_1_A_cm = ''; $scope.bar_7_6_1_A = false; $scope.bar_7_6_1_A_b = false; $scope.bar_7_6_1_A_c = false;}
				if(data.bar_7_6_1_B == 0){ $scope.bar_7_6_1_B = data.bar_7_6_1_B; $scope.bar_7_6_1_B = true; $scope.bar_7_6_1_B_b = false; $scope.bar_7_6_1_B_c = false; $scope.bar_7_6_1_B_cm = ''; } else if(data.bar_7_6_1_B  == 8){ $scope.bar_7_6_1_B = data.bar_7_6_1_B; $scope.bar_7_6_1_B = false; $scope.bar_7_6_1_B_b = true; $scope.bar_7_6_1_B_c = false; $scope.bar_7_6_1_B_cm = ''; } else if(data.bar_7_6_1_B  == 15){ $scope.bar_7_6_1_B = data.bar_7_6_1_B; $scope.bar_7_6_1_B = false; $scope.bar_7_6_1_B_b = false; $scope.bar_7_6_1_B_c = true; $scope.bar_7_6_1_B_cm = ''; }else if( ((data.bar_7_6_1_B  > 0 ) && (data.bar_7_6_1_B  < 8)) || ((data.bar_7_6_1_B  > 8 ) && (data.bar_7_6_1_B  < 15)) )
				{ $scope.bar_7_6_1_B_cm = data.bar_7_6_1_B; $scope.bar_7_6_1_B = false; $scope.bar_7_6_1_B_b = false;  $scope.bar_7_6_1_B_c = false; $scope.bar_7_6_1_B = ''; }else{ $scope.bar_7_6_1_B = ''; $scope.bar_7_6_1_B_cm = ''; $scope.bar_7_6_1_B = false; $scope.bar_7_6_1_B_b = false; $scope.bar_7_6_1_B_c = false; }
				if(data.bar_7_6_1_C == 3){ $scope.bar_7_6_1_C = data.bar_7_6_1_C; $scope.bar_7_6_1_C = true; $scope.bar_7_6_1_C_b = false; $scope.bar_7_6_1_C_c = false; $scope.bar_7_6_1_C_cm = ''; } else if(data.bar_7_6_1_C  == 7){ $scope.bar_7_6_1_C = data.bar_7_6_1_C; $scope.bar_7_6_1_C = false; $scope.bar_7_6_1_C_b = true; $scope.bar_7_6_1_C_c = false; $scope.bar_7_6_1_C_cm = ''; } else if(data.bar_7_6_1_C  == 10){ 
				$scope.bar_7_6_1_C = data.bar_7_6_1_C; $scope.bar_7_6_1_C = false; $scope.bar_7_6_1_C_b = false; $scope.bar_7_6_1_C_c = true; $scope.bar_7_6_1_C_cm = ''; } else if( ((data.bar_7_6_1_C  >= 0 ) && (data.bar_7_6_1_C  < 3)) || ((data.bar_7_6_1_C  > 3 ) && (data.bar_7_6_1_C  < 7)) || ((data.bar_7_6_1_C  > 7 ) && (data.bar_7_6_1_C  < 10)) ){ $scope.bar_7_6_1_C_cm = data.bar_7_6_1_C; $scope.bar_7_6_1_C = false; $scope.bar_7_6_1_C_b = false; $scope.bar_7_6_1_C_c = false; $scope.bar_7_6_1_C = ''; }else{ $scope.bar_7_6_1_C = ''; $scope.bar_7_6_1_C_cm = ''; $scope.bar_7_6_1_C = false; $scope.bar_7_6_1_C_b = false; $scope.bar_7_6_1_C_c = false;}
				$scope.bar_7_7_1_text = data.bar_7_7_1_text;
				if(data.bar_7_7_1_A == 10){ $scope.bar_7_7_1_A = data.bar_7_7_1_A; $scope.bar_7_7_1_A = true; $scope.bar_7_7_1_A_b = false; $scope.bar_7_7_1_A_c = false; $scope.bar_7_7_1_A_cm = ''; } else if(data.bar_7_7_1_A  == 15){ $scope.bar_7_7_1_A = data.bar_7_7_1_A; $scope.bar_7_7_1_A = false; $scope.bar_7_7_1_A_b = true; $scope.bar_7_7_1_A_c = false; $scope.bar_7_7_1_A_cm = ''; } else if(data.bar_7_7_1_A  == 25){ 
				$scope.bar_7_7_1_A = data.bar_7_7_1_A; $scope.bar_7_7_1_A = false; $scope.bar_7_7_1_A_b = false; $scope.bar_7_7_1_A_c = true; $scope.bar_7_7_1_A_cm = ''; } else if( ((data.bar_7_7_1_A  >= 0 ) && (data.bar_7_7_1_A  < 10)) || ((data.bar_7_7_1_A  > 10 ) && (data.bar_7_7_1_A  < 15)) || ((data.bar_7_7_1_A  > 15 ) && (data.bar_7_7_1_A  < 25)) ){ $scope.bar_7_7_1_A_cm = data.bar_7_7_1_A; $scope.bar_7_7_1_A = false; $scope.bar_7_7_1_A_b = false; $scope.bar_7_7_1_A_c = false; $scope.bar_7_7_1_A = ''; }else{ $scope.bar_7_7_1_A = ''; $scope.bar_7_7_1_A_cm = ''; $scope.bar_7_7_1_A = false; $scope.bar_7_7_1_A_b = false; $scope.bar_7_7_1_A_c = false;}
				if(data.bar_7_7_1_B == 0){ $scope.bar_7_7_1_B = data.bar_7_7_1_B; $scope.bar_7_7_1_B = true; $scope.bar_7_7_1_B_b = false; $scope.bar_7_7_1_B_c = false; $scope.bar_7_7_1_B_cm = ''; } else if(data.bar_7_7_1_B  == 5){ $scope.bar_7_7_1_B = data.bar_7_7_1_B; $scope.bar_7_7_1_B = false; $scope.bar_7_7_1_B_b = true; $scope.bar_7_7_1_B_c = false; $scope.bar_7_7_1_B_cm = ''; } else if(data.bar_7_7_1_B  == ){ $scope.bar_7_7_1_B = data.bar_7_7_1_B; $scope.bar_7_7_1_B = false; $scope.bar_7_7_1_B_b = false; $scope.bar_7_7_1_B_c = true; $scope.bar_7_7_1_B_cm = ''; }else if( ((data.bar_7_7_1_B  > 0 ) && (data.bar_7_7_1_B  < 5)) || ((data.bar_7_7_1_B  > 5 ) && (data.bar_7_7_1_B  < )) )
				{ $scope.bar_7_7_1_B_cm = data.bar_7_7_1_B; $scope.bar_7_7_1_B = false; $scope.bar_7_7_1_B_b = false;  $scope.bar_7_7_1_B_c = false; $scope.bar_7_7_1_B = ''; }else{ $scope.bar_7_7_1_B = ''; $scope.bar_7_7_1_B_cm = ''; $scope.bar_7_7_1_B = false; $scope.bar_7_7_1_B_b = false; $scope.bar_7_7_1_B_c = false; }
				if(data.bar_7_7_1_C == 7){ $scope.bar_7_7_1_C = data.bar_7_7_1_C; $scope.bar_7_7_1_C = true; $scope.bar_7_7_1_C_b = false; $scope.bar_7_7_1_C_c = false; $scope.bar_7_7_1_C_cm = ''; } else if(data.bar_7_7_1_C  == 15){ $scope.bar_7_7_1_C = data.bar_7_7_1_C; $scope.bar_7_7_1_C = false; $scope.bar_7_7_1_C_b = true; $scope.bar_7_7_1_C_c = false; $scope.bar_7_7_1_C_cm = ''; } else if(data.bar_7_7_1_C  == 20){ 
				$scope.bar_7_7_1_C = data.bar_7_7_1_C; $scope.bar_7_7_1_C = false; $scope.bar_7_7_1_C_b = false; $scope.bar_7_7_1_C_c = true; $scope.bar_7_7_1_C_cm = ''; } else if( ((data.bar_7_7_1_C  >= 0 ) && (data.bar_7_7_1_C  < 7)) || ((data.bar_7_7_1_C  > 7 ) && (data.bar_7_7_1_C  < 15)) || ((data.bar_7_7_1_C  > 15 ) && (data.bar_7_7_1_C  < 20)) ){ $scope.bar_7_7_1_C_cm = data.bar_7_7_1_C; $scope.bar_7_7_1_C = false; $scope.bar_7_7_1_C_b = false; $scope.bar_7_7_1_C_c = false; $scope.bar_7_7_1_C = ''; }else{ $scope.bar_7_7_1_C = ''; $scope.bar_7_7_1_C_cm = ''; $scope.bar_7_7_1_C = false; $scope.bar_7_7_1_C_b = false; $scope.bar_7_7_1_C_c = false;}
				$scope.kitchen_8_1_1_text = data.kitchen_8_1_1_text;
				if(data.kitchen_8_1_1_A == 40){ $scope.kitchen_8_1_1_A = data.kitchen_8_1_1_A; $scope.kitchen_8_1_1_A = true; $scope.kitchen_8_1_1_A_b = false; $scope.kitchen_8_1_1_A_c = false; $scope.kitchen_8_1_1_A_cm = ''; } else if(data.kitchen_8_1_1_A  == 50){ $scope.kitchen_8_1_1_A = data.kitchen_8_1_1_A; $scope.kitchen_8_1_1_A = false; $scope.kitchen_8_1_1_A_b = true; $scope.kitchen_8_1_1_A_c = false; $scope.kitchen_8_1_1_A_cm = ''; } else if(data.kitchen_8_1_1_A  == 60){ 
				$scope.kitchen_8_1_1_A = data.kitchen_8_1_1_A; $scope.kitchen_8_1_1_A = false; $scope.kitchen_8_1_1_A_b = false; $scope.kitchen_8_1_1_A_c = true; $scope.kitchen_8_1_1_A_cm = ''; } else if( ((data.kitchen_8_1_1_A  >= 0 ) && (data.kitchen_8_1_1_A  < 40)) || ((data.kitchen_8_1_1_A  > 40 ) && (data.kitchen_8_1_1_A  < 50)) || ((data.kitchen_8_1_1_A  > 50 ) && (data.kitchen_8_1_1_A  < 60)) ){ $scope.kitchen_8_1_1_A_cm = data.kitchen_8_1_1_A; $scope.kitchen_8_1_1_A = false; $scope.kitchen_8_1_1_A_b = false; $scope.kitchen_8_1_1_A_c = false; $scope.kitchen_8_1_1_A = ''; }else{ $scope.kitchen_8_1_1_A = ''; $scope.kitchen_8_1_1_A_cm = ''; $scope.kitchen_8_1_1_A = false; $scope.kitchen_8_1_1_A_b = false; $scope.kitchen_8_1_1_A_c = false;}
				$scope.kitchen_8_2_1_text = data.kitchen_8_2_1_text;
				if(data.kitchen_8_2_1_A  == 10){ $scope.kitchen_8_2_1_A  = data.kitchen_8_2_1_A ; $scope.kitchen_8_2_1_A = true; $scope.kitchen_8_2_1_A_b = false; $scope.kitchen_8_2_1_A_cm = ''; } else if(data.kitchen_8_2_1_A  == 15){ $scope.kitchen_8_2_1_A  = data.kitchen_8_2_1_A ; $scope.kitchen_8_2_1_A = false; $scope.kitchen_8_2_1_A_b = true; $scope.kitchen_8_2_1_A_cm = ''; }else if( ((data.kitchen_8_2_1_A  > 0 ) && (data.kitchen_8_2_1_A  < 10)) || ((data.kitchen_8_2_1_A  > 10 ) && (data.kitchen_8_2_1_A  < 15)))
				{ $scope.kitchen_8_2_1_A_cm = data.kitchen_8_2_1_A ; $scope.kitchen_8_2_1_A = false; $scope.kitchen_8_2_1_A_b = false; $scope.kitchen_8_2_1_A  = ''; }else{ $scope.kitchen_8_2_1_A  = ''; $scope.kitchen_8_2_1_A_cm = ''; $scope.kitchen_8_2_1_A = false; $scope.kitchen_8_2_1_A_b = false; }
				if(data.kitchen_8_2_1_B == 3){ $scope.kitchen_8_2_1_B = data.kitchen_8_2_1_B; $scope.kitchen_8_2_1_B = true; $scope.kitchen_8_2_1_B_b = false; $scope.kitchen_8_2_1_B_c = false; $scope.kitchen_8_2_1_B_cm = ''; } else if(data.kitchen_8_2_1_B  == 5){ $scope.kitchen_8_2_1_B = data.kitchen_8_2_1_B; $scope.kitchen_8_2_1_B = false; $scope.kitchen_8_2_1_B_b = true; $scope.kitchen_8_2_1_B_c = false; $scope.kitchen_8_2_1_B_cm = ''; } else if(data.kitchen_8_2_1_B  == 10){ 
				$scope.kitchen_8_2_1_B = data.kitchen_8_2_1_B; $scope.kitchen_8_2_1_B = false; $scope.kitchen_8_2_1_B_b = false; $scope.kitchen_8_2_1_B_c = true; $scope.kitchen_8_2_1_B_cm = ''; } else if( ((data.kitchen_8_2_1_B  >= 0 ) && (data.kitchen_8_2_1_B  < 3)) || ((data.kitchen_8_2_1_B  > 3 ) && (data.kitchen_8_2_1_B  < 5)) || ((data.kitchen_8_2_1_B  > 5 ) && (data.kitchen_8_2_1_B  < 10)) ){ $scope.kitchen_8_2_1_B_cm = data.kitchen_8_2_1_B; $scope.kitchen_8_2_1_B = false; $scope.kitchen_8_2_1_B_b = false; $scope.kitchen_8_2_1_B_c = false; $scope.kitchen_8_2_1_B = ''; }else{ $scope.kitchen_8_2_1_B = ''; $scope.kitchen_8_2_1_B_cm = ''; $scope.kitchen_8_2_1_B = false; $scope.kitchen_8_2_1_B_b = false; $scope.kitchen_8_2_1_B_c = false;}
				if(data.kitchen_8_2_1_C == 5){ $scope.kitchen_8_2_1_C = data.kitchen_8_2_1_C; $scope.kitchen_8_2_1_C = true; $scope.kitchen_8_2_1_C_b = false; $scope.kitchen_8_2_1_C_c = false; $scope.kitchen_8_2_1_C_cm = ''; } else if(data.kitchen_8_2_1_C  == 10){ $scope.kitchen_8_2_1_C = data.kitchen_8_2_1_C; $scope.kitchen_8_2_1_C = false; $scope.kitchen_8_2_1_C_b = true; $scope.kitchen_8_2_1_C_c = false; $scope.kitchen_8_2_1_C_cm = ''; } else if(data.kitchen_8_2_1_C  == 15){ 
				$scope.kitchen_8_2_1_C = data.kitchen_8_2_1_C; $scope.kitchen_8_2_1_C = false; $scope.kitchen_8_2_1_C_b = false; $scope.kitchen_8_2_1_C_c = true; $scope.kitchen_8_2_1_C_cm = ''; } else if( ((data.kitchen_8_2_1_C  >= 0 ) && (data.kitchen_8_2_1_C  < 5)) || ((data.kitchen_8_2_1_C  > 5 ) && (data.kitchen_8_2_1_C  < 10)) || ((data.kitchen_8_2_1_C  > 10 ) && (data.kitchen_8_2_1_C  < 15)) ){ $scope.kitchen_8_2_1_C_cm = data.kitchen_8_2_1_C; $scope.kitchen_8_2_1_C = false; $scope.kitchen_8_2_1_C_b = false; $scope.kitchen_8_2_1_C_c = false; $scope.kitchen_8_2_1_C = ''; }else{ $scope.kitchen_8_2_1_C = ''; $scope.kitchen_8_2_1_C_cm = ''; $scope.kitchen_8_2_1_C = false; $scope.kitchen_8_2_1_C_b = false; $scope.kitchen_8_2_1_C_c = false;}
				$scope.kitchen_8_3_1_text = data.kitchen_8_3_1_text;
				if(data.kitchen_8_3_1_A == 0){ $scope.kitchen_8_3_1_A = data.kitchen_8_3_1_A; $scope.kitchen_8_3_1_A = true; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = false; $scope.kitchen_8_3_1_A_cm = ''; } else if(data.kitchen_8_3_1_A  == 5){ $scope.kitchen_8_3_1_A = data.kitchen_8_3_1_A; $scope.kitchen_8_3_1_A = false; $scope.kitchen_8_3_1_A_b = true; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = false; $scope.kitchen_8_3_1_A_cm = ''; } else if(data.kitchen_8_3_1_A  == 10){ $scope.kitchen_8_3_1_A = data.kitchen_8_3_1_A; $scope.kitchen_8_3_1_A = false; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = true; $scope.kitchen_8_3_1_A_d = false; $scope.kitchen_8_3_1_A_cm = ''; }else if(data.kitchen_8_3_1_A  == 15){ $scope.kitchen_8_3_1_A = data.kitchen_8_3_1_A; $scope.kitchen_8_3_1_A = false; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = true; $scope.kitchen_8_3_1_A_cm = ''; } else if( ((data.kitchen_8_3_1_A  > 0 ) && (data.kitchen_8_3_1_A  < 5)) || ((data.kitchen_8_3_1_A  > 5 ) && (data.kitchen_8_3_1_A  < 10)) || ((data.kitchen_8_3_1_A  > 10 ) && (data.kitchen_8_3_1_A  < 15)) )
				{ $scope.kitchen_8_3_1_A_cm = data.kitchen_8_3_1_A; $scope.kitchen_8_3_1_A = false; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = false; $scope.kitchen_8_3_1_A = ''; }else{ $scope.kitchen_8_3_1_A = ''; $scope.kitchen_8_3_1_A_cm = ''; $scope.kitchen_8_3_1_A = false; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = false;}
				if(data.kitchen_8_3_1_B == 0){ $scope.kitchen_8_3_1_B = data.kitchen_8_3_1_B; $scope.kitchen_8_3_1_B = true; $scope.kitchen_8_3_1_B_b = false; $scope.kitchen_8_3_1_B_c = false; $scope.kitchen_8_3_1_B_cm = ''; } else if(data.kitchen_8_3_1_B  == 8){ $scope.kitchen_8_3_1_B = data.kitchen_8_3_1_B; $scope.kitchen_8_3_1_B = false; $scope.kitchen_8_3_1_B_b = true; $scope.kitchen_8_3_1_B_c = false; $scope.kitchen_8_3_1_B_cm = ''; } else if(data.kitchen_8_3_1_B  == ){ $scope.kitchen_8_3_1_B = data.kitchen_8_3_1_B; $scope.kitchen_8_3_1_B = false; $scope.kitchen_8_3_1_B_b = false; $scope.kitchen_8_3_1_B_c = true; $scope.kitchen_8_3_1_B_cm = ''; }else if( ((data.kitchen_8_3_1_B  > 0 ) && (data.kitchen_8_3_1_B  < 8)) || ((data.kitchen_8_3_1_B  > 8 ) && (data.kitchen_8_3_1_B  < )) )
				{ $scope.kitchen_8_3_1_B_cm = data.kitchen_8_3_1_B; $scope.kitchen_8_3_1_B = false; $scope.kitchen_8_3_1_B_b = false;  $scope.kitchen_8_3_1_B_c = false; $scope.kitchen_8_3_1_B = ''; }else{ $scope.kitchen_8_3_1_B = ''; $scope.kitchen_8_3_1_B_cm = ''; $scope.kitchen_8_3_1_B = false; $scope.kitchen_8_3_1_B_b = false; $scope.kitchen_8_3_1_B_c = false; }
				if(data.kitchen_8_3_1_C == 0){ $scope.kitchen_8_3_1_C = data.kitchen_8_3_1_C; $scope.kitchen_8_3_1_C = true; $scope.kitchen_8_3_1_C_b = false; $scope.kitchen_8_3_1_C_c = false; $scope.kitchen_8_3_1_C_cm = ''; } else if(data.kitchen_8_3_1_C  == 7){ $scope.kitchen_8_3_1_C = data.kitchen_8_3_1_C; $scope.kitchen_8_3_1_C = false; $scope.kitchen_8_3_1_C_b = true; $scope.kitchen_8_3_1_C_c = false; $scope.kitchen_8_3_1_C_cm = ''; } else if(data.kitchen_8_3_1_C  == ){ $scope.kitchen_8_3_1_C = data.kitchen_8_3_1_C; $scope.kitchen_8_3_1_C = false; $scope.kitchen_8_3_1_C_b = false; $scope.kitchen_8_3_1_C_c = true; $scope.kitchen_8_3_1_C_cm = ''; }else if( ((data.kitchen_8_3_1_C  > 0 ) && (data.kitchen_8_3_1_C  < 7)) || ((data.kitchen_8_3_1_C  > 7 ) && (data.kitchen_8_3_1_C  < )) )
				{ $scope.kitchen_8_3_1_C_cm = data.kitchen_8_3_1_C; $scope.kitchen_8_3_1_C = false; $scope.kitchen_8_3_1_C_b = false;  $scope.kitchen_8_3_1_C_c = false; $scope.kitchen_8_3_1_C = ''; }else{ $scope.kitchen_8_3_1_C = ''; $scope.kitchen_8_3_1_C_cm = ''; $scope.kitchen_8_3_1_C = false; $scope.kitchen_8_3_1_C_b = false; $scope.kitchen_8_3_1_C_c = false; }
				$scope.kitchen_8_4_1_text = data.kitchen_8_4_1_text;
				if(data.kitchen_8_4_1_A == 2){ $scope.kitchen_8_4_1_A = data.kitchen_8_4_1_A; $scope.kitchen_8_4_1_A = true; $scope.kitchen_8_4_1_A_b = false; $scope.kitchen_8_4_1_A_c = false; $scope.kitchen_8_4_1_A_cm = ''; } else if(data.kitchen_8_4_1_A  == 5){ $scope.kitchen_8_4_1_A = data.kitchen_8_4_1_A; $scope.kitchen_8_4_1_A = false; $scope.kitchen_8_4_1_A_b = true; $scope.kitchen_8_4_1_A_c = false; $scope.kitchen_8_4_1_A_cm = ''; } else if(data.kitchen_8_4_1_A  == 8){ 
				$scope.kitchen_8_4_1_A = data.kitchen_8_4_1_A; $scope.kitchen_8_4_1_A = false; $scope.kitchen_8_4_1_A_b = false; $scope.kitchen_8_4_1_A_c = true; $scope.kitchen_8_4_1_A_cm = ''; } else if( ((data.kitchen_8_4_1_A  >= 0 ) && (data.kitchen_8_4_1_A  < 2)) || ((data.kitchen_8_4_1_A  > 2 ) && (data.kitchen_8_4_1_A  < 5)) || ((data.kitchen_8_4_1_A  > 5 ) && (data.kitchen_8_4_1_A  < 8)) ){ $scope.kitchen_8_4_1_A_cm = data.kitchen_8_4_1_A; $scope.kitchen_8_4_1_A = false; $scope.kitchen_8_4_1_A_b = false; $scope.kitchen_8_4_1_A_c = false; $scope.kitchen_8_4_1_A = ''; }else{ $scope.kitchen_8_4_1_A = ''; $scope.kitchen_8_4_1_A_cm = ''; $scope.kitchen_8_4_1_A = false; $scope.kitchen_8_4_1_A_b = false; $scope.kitchen_8_4_1_A_c = false;}
				$scope.kitchen_8_4_2_text = data.kitchen_8_4_2_text;
				if(data.kitchen_8_4_2_A == 1){ $scope.kitchen_8_4_2_A = data.kitchen_8_4_2_A; $scope.kitchen_8_4_2_A = true; $scope.kitchen_8_4_2_A_b = false; $scope.kitchen_8_4_2_A_c = false; $scope.kitchen_8_4_2_A_cm = ''; } else if(data.kitchen_8_4_2_A  == 3){ $scope.kitchen_8_4_2_A = data.kitchen_8_4_2_A; $scope.kitchen_8_4_2_A = false; $scope.kitchen_8_4_2_A_b = true; $scope.kitchen_8_4_2_A_c = false; $scope.kitchen_8_4_2_A_cm = ''; } else if(data.kitchen_8_4_2_A  == 7){ 
				$scope.kitchen_8_4_2_A = data.kitchen_8_4_2_A; $scope.kitchen_8_4_2_A = false; $scope.kitchen_8_4_2_A_b = false; $scope.kitchen_8_4_2_A_c = true; $scope.kitchen_8_4_2_A_cm = ''; } else if( ((data.kitchen_8_4_2_A  >= 0 ) && (data.kitchen_8_4_2_A  < 1)) || ((data.kitchen_8_4_2_A  > 1 ) && (data.kitchen_8_4_2_A  < 3)) || ((data.kitchen_8_4_2_A  > 3 ) && (data.kitchen_8_4_2_A  < 7)) ){ $scope.kitchen_8_4_2_A_cm = data.kitchen_8_4_2_A; $scope.kitchen_8_4_2_A = false; $scope.kitchen_8_4_2_A_b = false; $scope.kitchen_8_4_2_A_c = false; $scope.kitchen_8_4_2_A = ''; }else{ $scope.kitchen_8_4_2_A = ''; $scope.kitchen_8_4_2_A_cm = ''; $scope.kitchen_8_4_2_A = false; $scope.kitchen_8_4_2_A_b = false; $scope.kitchen_8_4_2_A_c = false;}
				if(data.kitchen_8_4_2_B == 2){ $scope.kitchen_8_4_2_B = data.kitchen_8_4_2_B; $scope.kitchen_8_4_2_B = true; $scope.kitchen_8_4_2_B_b = false; $scope.kitchen_8_4_2_B_c = false; $scope.kitchen_8_4_2_B_cm = ''; } else if(data.kitchen_8_4_2_B  == 4){ $scope.kitchen_8_4_2_B = data.kitchen_8_4_2_B; $scope.kitchen_8_4_2_B = false; $scope.kitchen_8_4_2_B_b = true; $scope.kitchen_8_4_2_B_c = false; $scope.kitchen_8_4_2_B_cm = ''; } else if(data.kitchen_8_4_2_B  == 7){ 
				$scope.kitchen_8_4_2_B = data.kitchen_8_4_2_B; $scope.kitchen_8_4_2_B = false; $scope.kitchen_8_4_2_B_b = false; $scope.kitchen_8_4_2_B_c = true; $scope.kitchen_8_4_2_B_cm = ''; } else if( ((data.kitchen_8_4_2_B  >= 0 ) && (data.kitchen_8_4_2_B  < 2)) || ((data.kitchen_8_4_2_B  > 2 ) && (data.kitchen_8_4_2_B  < 4)) || ((data.kitchen_8_4_2_B  > 4 ) && (data.kitchen_8_4_2_B  < 7)) ){ $scope.kitchen_8_4_2_B_cm = data.kitchen_8_4_2_B; $scope.kitchen_8_4_2_B = false; $scope.kitchen_8_4_2_B_b = false; $scope.kitchen_8_4_2_B_c = false; $scope.kitchen_8_4_2_B = ''; }else{ $scope.kitchen_8_4_2_B = ''; $scope.kitchen_8_4_2_B_cm = ''; $scope.kitchen_8_4_2_B = false; $scope.kitchen_8_4_2_B_b = false; $scope.kitchen_8_4_2_B_c = false;}
				if(data.kitchen_8_4_2_C == 2){ $scope.kitchen_8_4_2_C = data.kitchen_8_4_2_C; $scope.kitchen_8_4_2_C = true; $scope.kitchen_8_4_2_C_b = false; $scope.kitchen_8_4_2_C_c = false; $scope.kitchen_8_4_2_C_cm = ''; } else if(data.kitchen_8_4_2_C  == 5){ $scope.kitchen_8_4_2_C = data.kitchen_8_4_2_C; $scope.kitchen_8_4_2_C = false; $scope.kitchen_8_4_2_C_b = true; $scope.kitchen_8_4_2_C_c = false; $scope.kitchen_8_4_2_C_cm = ''; } else if(data.kitchen_8_4_2_C  == 8){ 
				$scope.kitchen_8_4_2_C = data.kitchen_8_4_2_C; $scope.kitchen_8_4_2_C = false; $scope.kitchen_8_4_2_C_b = false; $scope.kitchen_8_4_2_C_c = true; $scope.kitchen_8_4_2_C_cm = ''; } else if( ((data.kitchen_8_4_2_C  >= 0 ) && (data.kitchen_8_4_2_C  < 2)) || ((data.kitchen_8_4_2_C  > 2 ) && (data.kitchen_8_4_2_C  < 5)) || ((data.kitchen_8_4_2_C  > 5 ) && (data.kitchen_8_4_2_C  < 8)) ){ $scope.kitchen_8_4_2_C_cm = data.kitchen_8_4_2_C; $scope.kitchen_8_4_2_C = false; $scope.kitchen_8_4_2_C_b = false; $scope.kitchen_8_4_2_C_c = false; $scope.kitchen_8_4_2_C = ''; }else{ $scope.kitchen_8_4_2_C = ''; $scope.kitchen_8_4_2_C_cm = ''; $scope.kitchen_8_4_2_C = false; $scope.kitchen_8_4_2_C_b = false; $scope.kitchen_8_4_2_C_c = false;}
				$scope.kitchen_8_5_1_text = data.kitchen_8_5_1_text;
				if(data.kitchen_8_5_1_A == 6){ $scope.kitchen_8_5_1_A = data.kitchen_8_5_1_A; $scope.kitchen_8_5_1_A = true; $scope.kitchen_8_5_1_A_b = false; $scope.kitchen_8_5_1_A_c = false; $scope.kitchen_8_5_1_A_cm = ''; } else if(data.kitchen_8_5_1_A  == 10){ $scope.kitchen_8_5_1_A = data.kitchen_8_5_1_A; $scope.kitchen_8_5_1_A = false; $scope.kitchen_8_5_1_A_b = true; $scope.kitchen_8_5_1_A_c = false; $scope.kitchen_8_5_1_A_cm = ''; } else if(data.kitchen_8_5_1_A  == 15){ 
				$scope.kitchen_8_5_1_A = data.kitchen_8_5_1_A; $scope.kitchen_8_5_1_A = false; $scope.kitchen_8_5_1_A_b = false; $scope.kitchen_8_5_1_A_c = true; $scope.kitchen_8_5_1_A_cm = ''; } else if( ((data.kitchen_8_5_1_A  >= 0 ) && (data.kitchen_8_5_1_A  < 6)) || ((data.kitchen_8_5_1_A  > 6 ) && (data.kitchen_8_5_1_A  < 10)) || ((data.kitchen_8_5_1_A  > 10 ) && (data.kitchen_8_5_1_A  < 15)) ){ $scope.kitchen_8_5_1_A_cm = data.kitchen_8_5_1_A; $scope.kitchen_8_5_1_A = false; $scope.kitchen_8_5_1_A_b = false; $scope.kitchen_8_5_1_A_c = false; $scope.kitchen_8_5_1_A = ''; }else{ $scope.kitchen_8_5_1_A = ''; $scope.kitchen_8_5_1_A_cm = ''; $scope.kitchen_8_5_1_A = false; $scope.kitchen_8_5_1_A_b = false; $scope.kitchen_8_5_1_A_c = false;}
				if(data.kitchen_8_5_1_B == 4){ $scope.kitchen_8_5_1_B = data.kitchen_8_5_1_B; $scope.kitchen_8_5_1_B = true; $scope.kitchen_8_5_1_B_b = false; $scope.kitchen_8_5_1_B_c = false; $scope.kitchen_8_5_1_B_cm = ''; } else if(data.kitchen_8_5_1_B  == 7){ $scope.kitchen_8_5_1_B = data.kitchen_8_5_1_B; $scope.kitchen_8_5_1_B = false; $scope.kitchen_8_5_1_B_b = true; $scope.kitchen_8_5_1_B_c = false; $scope.kitchen_8_5_1_B_cm = ''; } else if(data.kitchen_8_5_1_B  == 10){ 
				$scope.kitchen_8_5_1_B = data.kitchen_8_5_1_B; $scope.kitchen_8_5_1_B = false; $scope.kitchen_8_5_1_B_b = false; $scope.kitchen_8_5_1_B_c = true; $scope.kitchen_8_5_1_B_cm = ''; } else if( ((data.kitchen_8_5_1_B  >= 0 ) && (data.kitchen_8_5_1_B  < 4)) || ((data.kitchen_8_5_1_B  > 4 ) && (data.kitchen_8_5_1_B  < 7)) || ((data.kitchen_8_5_1_B  > 7 ) && (data.kitchen_8_5_1_B  < 10)) ){ $scope.kitchen_8_5_1_B_cm = data.kitchen_8_5_1_B; $scope.kitchen_8_5_1_B = false; $scope.kitchen_8_5_1_B_b = false; $scope.kitchen_8_5_1_B_c = false; $scope.kitchen_8_5_1_B = ''; }else{ $scope.kitchen_8_5_1_B = ''; $scope.kitchen_8_5_1_B_cm = ''; $scope.kitchen_8_5_1_B = false; $scope.kitchen_8_5_1_B_b = false; $scope.kitchen_8_5_1_B_c = false;}
				if(data.kitchen_8_5_1_C == 4){ $scope.kitchen_8_5_1_C = data.kitchen_8_5_1_C; $scope.kitchen_8_5_1_C = true; $scope.kitchen_8_5_1_C_b = false; $scope.kitchen_8_5_1_C_c = false; $scope.kitchen_8_5_1_C_cm = ''; } else if(data.kitchen_8_5_1_C  == 7){ $scope.kitchen_8_5_1_C = data.kitchen_8_5_1_C; $scope.kitchen_8_5_1_C = false; $scope.kitchen_8_5_1_C_b = true; $scope.kitchen_8_5_1_C_c = false; $scope.kitchen_8_5_1_C_cm = ''; } else if(data.kitchen_8_5_1_C  == 10){ 
				$scope.kitchen_8_5_1_C = data.kitchen_8_5_1_C; $scope.kitchen_8_5_1_C = false; $scope.kitchen_8_5_1_C_b = false; $scope.kitchen_8_5_1_C_c = true; $scope.kitchen_8_5_1_C_cm = ''; } else if( ((data.kitchen_8_5_1_C  >= 0 ) && (data.kitchen_8_5_1_C  < 4)) || ((data.kitchen_8_5_1_C  > 4 ) && (data.kitchen_8_5_1_C  < 7)) || ((data.kitchen_8_5_1_C  > 7 ) && (data.kitchen_8_5_1_C  < 10)) ){ $scope.kitchen_8_5_1_C_cm = data.kitchen_8_5_1_C; $scope.kitchen_8_5_1_C = false; $scope.kitchen_8_5_1_C_b = false; $scope.kitchen_8_5_1_C_c = false; $scope.kitchen_8_5_1_C = ''; }else{ $scope.kitchen_8_5_1_C = ''; $scope.kitchen_8_5_1_C_cm = ''; $scope.kitchen_8_5_1_C = false; $scope.kitchen_8_5_1_C_b = false; $scope.kitchen_8_5_1_C_c = false;}
				if(data.kitchen_8_5_1_D == 5){ $scope.kitchen_8_5_1_D = data.kitchen_8_5_1_D; $scope.kitchen_8_5_1_D = true; $scope.kitchen_8_5_1_D_b = false; $scope.kitchen_8_5_1_D_c = false; $scope.kitchen_8_5_1_D_cm = ''; } else if(data.kitchen_8_5_1_D  == 10){ $scope.kitchen_8_5_1_D = data.kitchen_8_5_1_D; $scope.kitchen_8_5_1_D = false; $scope.kitchen_8_5_1_D_b = true; $scope.kitchen_8_5_1_D_c = false; $scope.kitchen_8_5_1_D_cm = ''; } else if(data.kitchen_8_5_1_D  == 15){ 
				$scope.kitchen_8_5_1_D = data.kitchen_8_5_1_D; $scope.kitchen_8_5_1_D = false; $scope.kitchen_8_5_1_D_b = false; $scope.kitchen_8_5_1_D_c = true; $scope.kitchen_8_5_1_D_cm = ''; } else if( ((data.kitchen_8_5_1_D  >= 0 ) && (data.kitchen_8_5_1_D  < 5)) || ((data.kitchen_8_5_1_D  > 5 ) && (data.kitchen_8_5_1_D  < 10)) || ((data.kitchen_8_5_1_D  > 10 ) && (data.kitchen_8_5_1_D  < 15)) ){ $scope.kitchen_8_5_1_D_cm = data.kitchen_8_5_1_D; $scope.kitchen_8_5_1_D = false; $scope.kitchen_8_5_1_D_b = false; $scope.kitchen_8_5_1_D_c = false; $scope.kitchen_8_5_1_D = ''; }else{ $scope.kitchen_8_5_1_D = ''; $scope.kitchen_8_5_1_D_cm = ''; $scope.kitchen_8_5_1_D = false; $scope.kitchen_8_5_1_D_b = false; $scope.kitchen_8_5_1_D_c = false;}
				if(data.kitchen_8_5_1_E == 2){ $scope.kitchen_8_5_1_E = data.kitchen_8_5_1_E; $scope.kitchen_8_5_1_E = true; $scope.kitchen_8_5_1_E_b = false; $scope.kitchen_8_5_1_E_c = false; $scope.kitchen_8_5_1_E_cm = ''; } else if(data.kitchen_8_5_1_E  == 4){ $scope.kitchen_8_5_1_E = data.kitchen_8_5_1_E; $scope.kitchen_8_5_1_E = false; $scope.kitchen_8_5_1_E_b = true; $scope.kitchen_8_5_1_E_c = false; $scope.kitchen_8_5_1_E_cm = ''; } else if(data.kitchen_8_5_1_E  == 5){ 
				$scope.kitchen_8_5_1_E = data.kitchen_8_5_1_E; $scope.kitchen_8_5_1_E = false; $scope.kitchen_8_5_1_E_b = false; $scope.kitchen_8_5_1_E_c = true; $scope.kitchen_8_5_1_E_cm = ''; } else if( ((data.kitchen_8_5_1_E  >= 0 ) && (data.kitchen_8_5_1_E  < 2)) || ((data.kitchen_8_5_1_E  > 2 ) && (data.kitchen_8_5_1_E  < 4)) || ((data.kitchen_8_5_1_E  > 4 ) && (data.kitchen_8_5_1_E  < 5)) ){ $scope.kitchen_8_5_1_E_cm = data.kitchen_8_5_1_E; $scope.kitchen_8_5_1_E = false; $scope.kitchen_8_5_1_E_b = false; $scope.kitchen_8_5_1_E_c = false; $scope.kitchen_8_5_1_E = ''; }else{ $scope.kitchen_8_5_1_E = ''; $scope.kitchen_8_5_1_E_cm = ''; $scope.kitchen_8_5_1_E = false; $scope.kitchen_8_5_1_E_b = false; $scope.kitchen_8_5_1_E_c = false;}
				if(data.kitchen_8_5_1_F == 0){ $scope.kitchen_8_5_1_F = data.kitchen_8_5_1_F; $scope.kitchen_8_5_1_F = true; $scope.kitchen_8_5_1_F_b = false; $scope.kitchen_8_5_1_F_c = false; $scope.kitchen_8_5_1_F_cm = ''; } else if(data.kitchen_8_5_1_F  == 5){ $scope.kitchen_8_5_1_F = data.kitchen_8_5_1_F; $scope.kitchen_8_5_1_F = false; $scope.kitchen_8_5_1_F_b = true; $scope.kitchen_8_5_1_F_c = false; $scope.kitchen_8_5_1_F_cm = ''; } else if(data.kitchen_8_5_1_F  == ){ $scope.kitchen_8_5_1_F = data.kitchen_8_5_1_F; $scope.kitchen_8_5_1_F = false; $scope.kitchen_8_5_1_F_b = false; $scope.kitchen_8_5_1_F_c = true; $scope.kitchen_8_5_1_F_cm = ''; }else if( ((data.kitchen_8_5_1_F  > 0 ) && (data.kitchen_8_5_1_F  < 5)) || ((data.kitchen_8_5_1_F  > 5 ) && (data.kitchen_8_5_1_F  < )) )
				{ $scope.kitchen_8_5_1_F_cm = data.kitchen_8_5_1_F; $scope.kitchen_8_5_1_F = false; $scope.kitchen_8_5_1_F_b = false;  $scope.kitchen_8_5_1_F_c = false; $scope.kitchen_8_5_1_F = ''; }else{ $scope.kitchen_8_5_1_F = ''; $scope.kitchen_8_5_1_F_cm = ''; $scope.kitchen_8_5_1_F = false; $scope.kitchen_8_5_1_F_b = false; $scope.kitchen_8_5_1_F_c = false; }
				if(data.kitchen_8_5_1_G == 1){ $scope.kitchen_8_5_1_G = data.kitchen_8_5_1_G; $scope.kitchen_8_5_1_G = true; $scope.kitchen_8_5_1_G_b = false; $scope.kitchen_8_5_1_G_c = false; $scope.kitchen_8_5_1_G_cm = ''; } else if(data.kitchen_8_5_1_G  == 3){ $scope.kitchen_8_5_1_G = data.kitchen_8_5_1_G; $scope.kitchen_8_5_1_G = false; $scope.kitchen_8_5_1_G_b = true; $scope.kitchen_8_5_1_G_c = false; $scope.kitchen_8_5_1_G_cm = ''; } else if(data.kitchen_8_5_1_G  == 5){ 
				$scope.kitchen_8_5_1_G = data.kitchen_8_5_1_G; $scope.kitchen_8_5_1_G = false; $scope.kitchen_8_5_1_G_b = false; $scope.kitchen_8_5_1_G_c = true; $scope.kitchen_8_5_1_G_cm = ''; } else if( ((data.kitchen_8_5_1_G  >= 0 ) && (data.kitchen_8_5_1_G  < 1)) || ((data.kitchen_8_5_1_G  > 1 ) && (data.kitchen_8_5_1_G  < 3)) || ((data.kitchen_8_5_1_G  > 3 ) && (data.kitchen_8_5_1_G  < 5)) ){ $scope.kitchen_8_5_1_G_cm = data.kitchen_8_5_1_G; $scope.kitchen_8_5_1_G = false; $scope.kitchen_8_5_1_G_b = false; $scope.kitchen_8_5_1_G_c = false; $scope.kitchen_8_5_1_G = ''; }else{ $scope.kitchen_8_5_1_G = ''; $scope.kitchen_8_5_1_G_cm = ''; $scope.kitchen_8_5_1_G = false; $scope.kitchen_8_5_1_G_b = false; $scope.kitchen_8_5_1_G_c = false;}
				if(data.kitchen_8_5_1_H == 0){ $scope.kitchen_8_5_1_H = data.kitchen_8_5_1_H; $scope.kitchen_8_5_1_H = true; $scope.kitchen_8_5_1_H_b = false; $scope.kitchen_8_5_1_H_c = false; $scope.kitchen_8_5_1_H_cm = ''; } else if(data.kitchen_8_5_1_H  == 5){ $scope.kitchen_8_5_1_H = data.kitchen_8_5_1_H; $scope.kitchen_8_5_1_H = false; $scope.kitchen_8_5_1_H_b = true; $scope.kitchen_8_5_1_H_c = false; $scope.kitchen_8_5_1_H_cm = ''; } else if(data.kitchen_8_5_1_H  == 7){ $scope.kitchen_8_5_1_H = data.kitchen_8_5_1_H; $scope.kitchen_8_5_1_H = false; $scope.kitchen_8_5_1_H_b = false; $scope.kitchen_8_5_1_H_c = true; $scope.kitchen_8_5_1_H_cm = ''; }else if( ((data.kitchen_8_5_1_H  > 0 ) && (data.kitchen_8_5_1_H  < 5)) || ((data.kitchen_8_5_1_H  > 5 ) && (data.kitchen_8_5_1_H  < 7)) )
				{ $scope.kitchen_8_5_1_H_cm = data.kitchen_8_5_1_H; $scope.kitchen_8_5_1_H = false; $scope.kitchen_8_5_1_H_b = false;  $scope.kitchen_8_5_1_H_c = false; $scope.kitchen_8_5_1_H = ''; }else{ $scope.kitchen_8_5_1_H = ''; $scope.kitchen_8_5_1_H_cm = ''; $scope.kitchen_8_5_1_H = false; $scope.kitchen_8_5_1_H_b = false; $scope.kitchen_8_5_1_H_c = false; }
				if(data.kitchen_8_5_1_I == 0){ $scope.kitchen_8_5_1_I = data.kitchen_8_5_1_I; $scope.kitchen_8_5_1_I = true; $scope.kitchen_8_5_1_I_b = false; $scope.kitchen_8_5_1_I_c = false; $scope.kitchen_8_5_1_I_cm = ''; } else if(data.kitchen_8_5_1_I  == 5){ $scope.kitchen_8_5_1_I = data.kitchen_8_5_1_I; $scope.kitchen_8_5_1_I = false; $scope.kitchen_8_5_1_I_b = true; $scope.kitchen_8_5_1_I_c = false; $scope.kitchen_8_5_1_I_cm = ''; } else if(data.kitchen_8_5_1_I  == 8){ $scope.kitchen_8_5_1_I = data.kitchen_8_5_1_I; $scope.kitchen_8_5_1_I = false; $scope.kitchen_8_5_1_I_b = false; $scope.kitchen_8_5_1_I_c = true; $scope.kitchen_8_5_1_I_cm = ''; }else if( ((data.kitchen_8_5_1_I  > 0 ) && (data.kitchen_8_5_1_I  < 5)) || ((data.kitchen_8_5_1_I  > 5 ) && (data.kitchen_8_5_1_I  < 8)) )
				{ $scope.kitchen_8_5_1_I_cm = data.kitchen_8_5_1_I; $scope.kitchen_8_5_1_I = false; $scope.kitchen_8_5_1_I_b = false;  $scope.kitchen_8_5_1_I_c = false; $scope.kitchen_8_5_1_I = ''; }else{ $scope.kitchen_8_5_1_I = ''; $scope.kitchen_8_5_1_I_cm = ''; $scope.kitchen_8_5_1_I = false; $scope.kitchen_8_5_1_I_b = false; $scope.kitchen_8_5_1_I_c = false; }
				$scope.kitchen_8_6_1_text = data.kitchen_8_6_1_text;
				if(data.kitchen_8_6_1_A == 0){ $scope.kitchen_8_6_1_A = data.kitchen_8_6_1_A; $scope.kitchen_8_6_1_A = true; $scope.kitchen_8_6_1_A_b = false; $scope.kitchen_8_6_1_A_c = false; $scope.kitchen_8_6_1_A_cm = ''; } else if(data.kitchen_8_6_1_A  == 3){ $scope.kitchen_8_6_1_A = data.kitchen_8_6_1_A; $scope.kitchen_8_6_1_A = false; $scope.kitchen_8_6_1_A_b = true; $scope.kitchen_8_6_1_A_c = false; $scope.kitchen_8_6_1_A_cm = ''; } else if(data.kitchen_8_6_1_A  == ){ $scope.kitchen_8_6_1_A = data.kitchen_8_6_1_A; $scope.kitchen_8_6_1_A = false; $scope.kitchen_8_6_1_A_b = false; $scope.kitchen_8_6_1_A_c = true; $scope.kitchen_8_6_1_A_cm = ''; }else if( ((data.kitchen_8_6_1_A  > 0 ) && (data.kitchen_8_6_1_A  < 3)) || ((data.kitchen_8_6_1_A  > 3 ) && (data.kitchen_8_6_1_A  < )) )
				{ $scope.kitchen_8_6_1_A_cm = data.kitchen_8_6_1_A; $scope.kitchen_8_6_1_A = false; $scope.kitchen_8_6_1_A_b = false;  $scope.kitchen_8_6_1_A_c = false; $scope.kitchen_8_6_1_A = ''; }else{ $scope.kitchen_8_6_1_A = ''; $scope.kitchen_8_6_1_A_cm = ''; $scope.kitchen_8_6_1_A = false; $scope.kitchen_8_6_1_A_b = false; $scope.kitchen_8_6_1_A_c = false; }
				if(data.kitchen_8_6_1_B == 0){ $scope.kitchen_8_6_1_B = data.kitchen_8_6_1_B; $scope.kitchen_8_6_1_B = true; $scope.kitchen_8_6_1_B_b = false; $scope.kitchen_8_6_1_B_c = false; $scope.kitchen_8_6_1_B_cm = ''; } else if(data.kitchen_8_6_1_B  == 3){ $scope.kitchen_8_6_1_B = data.kitchen_8_6_1_B; $scope.kitchen_8_6_1_B = false; $scope.kitchen_8_6_1_B_b = true; $scope.kitchen_8_6_1_B_c = false; $scope.kitchen_8_6_1_B_cm = ''; } else if(data.kitchen_8_6_1_B  == ){ $scope.kitchen_8_6_1_B = data.kitchen_8_6_1_B; $scope.kitchen_8_6_1_B = false; $scope.kitchen_8_6_1_B_b = false; $scope.kitchen_8_6_1_B_c = true; $scope.kitchen_8_6_1_B_cm = ''; }else if( ((data.kitchen_8_6_1_B  > 0 ) && (data.kitchen_8_6_1_B  < 3)) || ((data.kitchen_8_6_1_B  > 3 ) && (data.kitchen_8_6_1_B  < )) )
				{ $scope.kitchen_8_6_1_B_cm = data.kitchen_8_6_1_B; $scope.kitchen_8_6_1_B = false; $scope.kitchen_8_6_1_B_b = false;  $scope.kitchen_8_6_1_B_c = false; $scope.kitchen_8_6_1_B = ''; }else{ $scope.kitchen_8_6_1_B = ''; $scope.kitchen_8_6_1_B_cm = ''; $scope.kitchen_8_6_1_B = false; $scope.kitchen_8_6_1_B_b = false; $scope.kitchen_8_6_1_B_c = false; }
				if(data.kitchen_8_6_1_C == 0){ $scope.kitchen_8_6_1_C = data.kitchen_8_6_1_C; $scope.kitchen_8_6_1_C = true; $scope.kitchen_8_6_1_C_b = false; $scope.kitchen_8_6_1_C_c = false; $scope.kitchen_8_6_1_C_cm = ''; } else if(data.kitchen_8_6_1_C  == 3){ $scope.kitchen_8_6_1_C = data.kitchen_8_6_1_C; $scope.kitchen_8_6_1_C = false; $scope.kitchen_8_6_1_C_b = true; $scope.kitchen_8_6_1_C_c = false; $scope.kitchen_8_6_1_C_cm = ''; } else if(data.kitchen_8_6_1_C  == ){ $scope.kitchen_8_6_1_C = data.kitchen_8_6_1_C; $scope.kitchen_8_6_1_C = false; $scope.kitchen_8_6_1_C_b = false; $scope.kitchen_8_6_1_C_c = true; $scope.kitchen_8_6_1_C_cm = ''; }else if( ((data.kitchen_8_6_1_C  > 0 ) && (data.kitchen_8_6_1_C  < 3)) || ((data.kitchen_8_6_1_C  > 3 ) && (data.kitchen_8_6_1_C  < )) )
				{ $scope.kitchen_8_6_1_C_cm = data.kitchen_8_6_1_C; $scope.kitchen_8_6_1_C = false; $scope.kitchen_8_6_1_C_b = false;  $scope.kitchen_8_6_1_C_c = false; $scope.kitchen_8_6_1_C = ''; }else{ $scope.kitchen_8_6_1_C = ''; $scope.kitchen_8_6_1_C_cm = ''; $scope.kitchen_8_6_1_C = false; $scope.kitchen_8_6_1_C_b = false; $scope.kitchen_8_6_1_C_c = false; }
				if(data.kitchen_8_6_1_D == 0){ $scope.kitchen_8_6_1_D = data.kitchen_8_6_1_D; $scope.kitchen_8_6_1_D = true; $scope.kitchen_8_6_1_D_b = false; $scope.kitchen_8_6_1_D_c = false; $scope.kitchen_8_6_1_D_cm = ''; } else if(data.kitchen_8_6_1_D  == 3){ $scope.kitchen_8_6_1_D = data.kitchen_8_6_1_D; $scope.kitchen_8_6_1_D = false; $scope.kitchen_8_6_1_D_b = true; $scope.kitchen_8_6_1_D_c = false; $scope.kitchen_8_6_1_D_cm = ''; } else if(data.kitchen_8_6_1_D  == ){ $scope.kitchen_8_6_1_D = data.kitchen_8_6_1_D; $scope.kitchen_8_6_1_D = false; $scope.kitchen_8_6_1_D_b = false; $scope.kitchen_8_6_1_D_c = true; $scope.kitchen_8_6_1_D_cm = ''; }else if( ((data.kitchen_8_6_1_D  > 0 ) && (data.kitchen_8_6_1_D  < 3)) || ((data.kitchen_8_6_1_D  > 3 ) && (data.kitchen_8_6_1_D  < )) )
				{ $scope.kitchen_8_6_1_D_cm = data.kitchen_8_6_1_D; $scope.kitchen_8_6_1_D = false; $scope.kitchen_8_6_1_D_b = false;  $scope.kitchen_8_6_1_D_c = false; $scope.kitchen_8_6_1_D = ''; }else{ $scope.kitchen_8_6_1_D = ''; $scope.kitchen_8_6_1_D_cm = ''; $scope.kitchen_8_6_1_D = false; $scope.kitchen_8_6_1_D_b = false; $scope.kitchen_8_6_1_D_c = false; }
				if(data.kitchen_8_6_1_E == 0){ $scope.kitchen_8_6_1_E = data.kitchen_8_6_1_E; $scope.kitchen_8_6_1_E = true; $scope.kitchen_8_6_1_E_b = false; $scope.kitchen_8_6_1_E_c = false; $scope.kitchen_8_6_1_E_cm = ''; } else if(data.kitchen_8_6_1_E  == 3){ $scope.kitchen_8_6_1_E = data.kitchen_8_6_1_E; $scope.kitchen_8_6_1_E = false; $scope.kitchen_8_6_1_E_b = true; $scope.kitchen_8_6_1_E_c = false; $scope.kitchen_8_6_1_E_cm = ''; } else if(data.kitchen_8_6_1_E  == ){ $scope.kitchen_8_6_1_E = data.kitchen_8_6_1_E; $scope.kitchen_8_6_1_E = false; $scope.kitchen_8_6_1_E_b = false; $scope.kitchen_8_6_1_E_c = true; $scope.kitchen_8_6_1_E_cm = ''; }else if( ((data.kitchen_8_6_1_E  > 0 ) && (data.kitchen_8_6_1_E  < 3)) || ((data.kitchen_8_6_1_E  > 3 ) && (data.kitchen_8_6_1_E  < )) )
				{ $scope.kitchen_8_6_1_E_cm = data.kitchen_8_6_1_E; $scope.kitchen_8_6_1_E = false; $scope.kitchen_8_6_1_E_b = false;  $scope.kitchen_8_6_1_E_c = false; $scope.kitchen_8_6_1_E = ''; }else{ $scope.kitchen_8_6_1_E = ''; $scope.kitchen_8_6_1_E_cm = ''; $scope.kitchen_8_6_1_E = false; $scope.kitchen_8_6_1_E_b = false; $scope.kitchen_8_6_1_E_c = false; }
				if(data.kitchen_8_6_1_F == 0){ $scope.kitchen_8_6_1_F = data.kitchen_8_6_1_F; $scope.kitchen_8_6_1_F = true; $scope.kitchen_8_6_1_F_b = false; $scope.kitchen_8_6_1_F_c = false; $scope.kitchen_8_6_1_F_cm = ''; } else if(data.kitchen_8_6_1_F  == 3){ $scope.kitchen_8_6_1_F = data.kitchen_8_6_1_F; $scope.kitchen_8_6_1_F = false; $scope.kitchen_8_6_1_F_b = true; $scope.kitchen_8_6_1_F_c = false; $scope.kitchen_8_6_1_F_cm = ''; } else if(data.kitchen_8_6_1_F  == ){ $scope.kitchen_8_6_1_F = data.kitchen_8_6_1_F; $scope.kitchen_8_6_1_F = false; $scope.kitchen_8_6_1_F_b = false; $scope.kitchen_8_6_1_F_c = true; $scope.kitchen_8_6_1_F_cm = ''; }else if( ((data.kitchen_8_6_1_F  > 0 ) && (data.kitchen_8_6_1_F  < 3)) || ((data.kitchen_8_6_1_F  > 3 ) && (data.kitchen_8_6_1_F  < )) )
				{ $scope.kitchen_8_6_1_F_cm = data.kitchen_8_6_1_F; $scope.kitchen_8_6_1_F = false; $scope.kitchen_8_6_1_F_b = false;  $scope.kitchen_8_6_1_F_c = false; $scope.kitchen_8_6_1_F = ''; }else{ $scope.kitchen_8_6_1_F = ''; $scope.kitchen_8_6_1_F_cm = ''; $scope.kitchen_8_6_1_F = false; $scope.kitchen_8_6_1_F_b = false; $scope.kitchen_8_6_1_F_c = false; }
				if(data.kitchen_8_6_1_G == 0){ $scope.kitchen_8_6_1_G = data.kitchen_8_6_1_G; $scope.kitchen_8_6_1_G = true; $scope.kitchen_8_6_1_G_b = false; $scope.kitchen_8_6_1_G_c = false; $scope.kitchen_8_6_1_G_cm = ''; } else if(data.kitchen_8_6_1_G  == 2){ $scope.kitchen_8_6_1_G = data.kitchen_8_6_1_G; $scope.kitchen_8_6_1_G = false; $scope.kitchen_8_6_1_G_b = true; $scope.kitchen_8_6_1_G_c = false; $scope.kitchen_8_6_1_G_cm = ''; } else if(data.kitchen_8_6_1_G  == ){ $scope.kitchen_8_6_1_G = data.kitchen_8_6_1_G; $scope.kitchen_8_6_1_G = false; $scope.kitchen_8_6_1_G_b = false; $scope.kitchen_8_6_1_G_c = true; $scope.kitchen_8_6_1_G_cm = ''; }else if( ((data.kitchen_8_6_1_G  > 0 ) && (data.kitchen_8_6_1_G  < 2)) || ((data.kitchen_8_6_1_G  > 2 ) && (data.kitchen_8_6_1_G  < )) )
				{ $scope.kitchen_8_6_1_G_cm = data.kitchen_8_6_1_G; $scope.kitchen_8_6_1_G = false; $scope.kitchen_8_6_1_G_b = false;  $scope.kitchen_8_6_1_G_c = false; $scope.kitchen_8_6_1_G = ''; }else{ $scope.kitchen_8_6_1_G = ''; $scope.kitchen_8_6_1_G_cm = ''; $scope.kitchen_8_6_1_G = false; $scope.kitchen_8_6_1_G_b = false; $scope.kitchen_8_6_1_G_c = false; }
				$scope.kitchen_8_7_1_text = data.kitchen_8_7_1_text;
				if(data.kitchen_8_7_1_A == 0){ $scope.kitchen_8_7_1_A = data.kitchen_8_7_1_A; $scope.kitchen_8_7_1_A = true; $scope.kitchen_8_7_1_A_b = false; $scope.kitchen_8_7_1_A_c = false; $scope.kitchen_8_7_1_A_cm = ''; } else if(data.kitchen_8_7_1_A  == 10){ $scope.kitchen_8_7_1_A = data.kitchen_8_7_1_A; $scope.kitchen_8_7_1_A = false; $scope.kitchen_8_7_1_A_b = true; $scope.kitchen_8_7_1_A_c = false; $scope.kitchen_8_7_1_A_cm = ''; } else if(data.kitchen_8_7_1_A  == ){ $scope.kitchen_8_7_1_A = data.kitchen_8_7_1_A; $scope.kitchen_8_7_1_A = false; $scope.kitchen_8_7_1_A_b = false; $scope.kitchen_8_7_1_A_c = true; $scope.kitchen_8_7_1_A_cm = ''; }else if( ((data.kitchen_8_7_1_A  > 0 ) && (data.kitchen_8_7_1_A  < 10)) || ((data.kitchen_8_7_1_A  > 10 ) && (data.kitchen_8_7_1_A  < )) )
				{ $scope.kitchen_8_7_1_A_cm = data.kitchen_8_7_1_A; $scope.kitchen_8_7_1_A = false; $scope.kitchen_8_7_1_A_b = false;  $scope.kitchen_8_7_1_A_c = false; $scope.kitchen_8_7_1_A = ''; }else{ $scope.kitchen_8_7_1_A = ''; $scope.kitchen_8_7_1_A_cm = ''; $scope.kitchen_8_7_1_A = false; $scope.kitchen_8_7_1_A_b = false; $scope.kitchen_8_7_1_A_c = false; }
				if(data.kitchen_8_7_1_B == 0){ $scope.kitchen_8_7_1_B = data.kitchen_8_7_1_B; $scope.kitchen_8_7_1_B = true; $scope.kitchen_8_7_1_B_b = false; $scope.kitchen_8_7_1_B_c = false; $scope.kitchen_8_7_1_B_cm = ''; } else if(data.kitchen_8_7_1_B  == 10){ $scope.kitchen_8_7_1_B = data.kitchen_8_7_1_B; $scope.kitchen_8_7_1_B = false; $scope.kitchen_8_7_1_B_b = true; $scope.kitchen_8_7_1_B_c = false; $scope.kitchen_8_7_1_B_cm = ''; } else if(data.kitchen_8_7_1_B  == ){ $scope.kitchen_8_7_1_B = data.kitchen_8_7_1_B; $scope.kitchen_8_7_1_B = false; $scope.kitchen_8_7_1_B_b = false; $scope.kitchen_8_7_1_B_c = true; $scope.kitchen_8_7_1_B_cm = ''; }else if( ((data.kitchen_8_7_1_B  > 0 ) && (data.kitchen_8_7_1_B  < 10)) || ((data.kitchen_8_7_1_B  > 10 ) && (data.kitchen_8_7_1_B  < )) )
				{ $scope.kitchen_8_7_1_B_cm = data.kitchen_8_7_1_B; $scope.kitchen_8_7_1_B = false; $scope.kitchen_8_7_1_B_b = false;  $scope.kitchen_8_7_1_B_c = false; $scope.kitchen_8_7_1_B = ''; }else{ $scope.kitchen_8_7_1_B = ''; $scope.kitchen_8_7_1_B_cm = ''; $scope.kitchen_8_7_1_B = false; $scope.kitchen_8_7_1_B_b = false; $scope.kitchen_8_7_1_B_c = false; }
				if(data.kitchen_8_7_1_C == 2){ $scope.kitchen_8_7_1_C = data.kitchen_8_7_1_C; $scope.kitchen_8_7_1_C = true; $scope.kitchen_8_7_1_C_b = false; $scope.kitchen_8_7_1_C_c = false; $scope.kitchen_8_7_1_C_cm = ''; } else if(data.kitchen_8_7_1_C  == 3){ $scope.kitchen_8_7_1_C = data.kitchen_8_7_1_C; $scope.kitchen_8_7_1_C = false; $scope.kitchen_8_7_1_C_b = true; $scope.kitchen_8_7_1_C_c = false; $scope.kitchen_8_7_1_C_cm = ''; } else if(data.kitchen_8_7_1_C  == 5){ 
				$scope.kitchen_8_7_1_C = data.kitchen_8_7_1_C; $scope.kitchen_8_7_1_C = false; $scope.kitchen_8_7_1_C_b = false; $scope.kitchen_8_7_1_C_c = true; $scope.kitchen_8_7_1_C_cm = ''; } else if( ((data.kitchen_8_7_1_C  >= 0 ) && (data.kitchen_8_7_1_C  < 2)) || ((data.kitchen_8_7_1_C  > 2 ) && (data.kitchen_8_7_1_C  < 3)) || ((data.kitchen_8_7_1_C  > 3 ) && (data.kitchen_8_7_1_C  < 5)) ){ $scope.kitchen_8_7_1_C_cm = data.kitchen_8_7_1_C; $scope.kitchen_8_7_1_C = false; $scope.kitchen_8_7_1_C_b = false; $scope.kitchen_8_7_1_C_c = false; $scope.kitchen_8_7_1_C = ''; }else{ $scope.kitchen_8_7_1_C = ''; $scope.kitchen_8_7_1_C_cm = ''; $scope.kitchen_8_7_1_C = false; $scope.kitchen_8_7_1_C_b = false; $scope.kitchen_8_7_1_C_c = false;}
				if(data.kitchen_8_7_1_D == 0){ $scope.kitchen_8_7_1_D = data.kitchen_8_7_1_D; $scope.kitchen_8_7_1_D = true; $scope.kitchen_8_7_1_D_b = false; $scope.kitchen_8_7_1_D_c = false; $scope.kitchen_8_7_1_D_cm = ''; } else if(data.kitchen_8_7_1_D  == 3){ $scope.kitchen_8_7_1_D = data.kitchen_8_7_1_D; $scope.kitchen_8_7_1_D = false; $scope.kitchen_8_7_1_D_b = true; $scope.kitchen_8_7_1_D_c = false; $scope.kitchen_8_7_1_D_cm = ''; } else if(data.kitchen_8_7_1_D  == 5){ $scope.kitchen_8_7_1_D = data.kitchen_8_7_1_D; $scope.kitchen_8_7_1_D = false; $scope.kitchen_8_7_1_D_b = false; $scope.kitchen_8_7_1_D_c = true; $scope.kitchen_8_7_1_D_cm = ''; }else if( ((data.kitchen_8_7_1_D  > 0 ) && (data.kitchen_8_7_1_D  < 3)) || ((data.kitchen_8_7_1_D  > 3 ) && (data.kitchen_8_7_1_D  < 5)) )
				{ $scope.kitchen_8_7_1_D_cm = data.kitchen_8_7_1_D; $scope.kitchen_8_7_1_D = false; $scope.kitchen_8_7_1_D_b = false;  $scope.kitchen_8_7_1_D_c = false; $scope.kitchen_8_7_1_D = ''; }else{ $scope.kitchen_8_7_1_D = ''; $scope.kitchen_8_7_1_D_cm = ''; $scope.kitchen_8_7_1_D = false; $scope.kitchen_8_7_1_D_b = false; $scope.kitchen_8_7_1_D_c = false; }
				if(data.kitchen_8_7_1_E == 0){ $scope.kitchen_8_7_1_E = data.kitchen_8_7_1_E; $scope.kitchen_8_7_1_E = true; $scope.kitchen_8_7_1_E_b = false; $scope.kitchen_8_7_1_E_c = false; $scope.kitchen_8_7_1_E_cm = ''; } else if(data.kitchen_8_7_1_E  == 5){ $scope.kitchen_8_7_1_E = data.kitchen_8_7_1_E; $scope.kitchen_8_7_1_E = false; $scope.kitchen_8_7_1_E_b = true; $scope.kitchen_8_7_1_E_c = false; $scope.kitchen_8_7_1_E_cm = ''; } else if(data.kitchen_8_7_1_E  == 10){ $scope.kitchen_8_7_1_E = data.kitchen_8_7_1_E; $scope.kitchen_8_7_1_E = false; $scope.kitchen_8_7_1_E_b = false; $scope.kitchen_8_7_1_E_c = true; $scope.kitchen_8_7_1_E_cm = ''; }else if( ((data.kitchen_8_7_1_E  > 0 ) && (data.kitchen_8_7_1_E  < 5)) || ((data.kitchen_8_7_1_E  > 5 ) && (data.kitchen_8_7_1_E  < 10)) )
				{ $scope.kitchen_8_7_1_E_cm = data.kitchen_8_7_1_E; $scope.kitchen_8_7_1_E = false; $scope.kitchen_8_7_1_E_b = false;  $scope.kitchen_8_7_1_E_c = false; $scope.kitchen_8_7_1_E = ''; }else{ $scope.kitchen_8_7_1_E = ''; $scope.kitchen_8_7_1_E_cm = ''; $scope.kitchen_8_7_1_E = false; $scope.kitchen_8_7_1_E_b = false; $scope.kitchen_8_7_1_E_c = false; }
				$scope.kitchen_8_8_1_text = data.kitchen_8_8_1_text;
				if(data.kitchen_8_8_1_A == 3){ $scope.kitchen_8_8_1_A = data.kitchen_8_8_1_A; $scope.kitchen_8_8_1_A = true; $scope.kitchen_8_8_1_A_b = false; $scope.kitchen_8_8_1_A_c = false; $scope.kitchen_8_8_1_A_cm = ''; } else if(data.kitchen_8_8_1_A  == 5){ $scope.kitchen_8_8_1_A = data.kitchen_8_8_1_A; $scope.kitchen_8_8_1_A = false; $scope.kitchen_8_8_1_A_b = true; $scope.kitchen_8_8_1_A_c = false; $scope.kitchen_8_8_1_A_cm = ''; } else if(data.kitchen_8_8_1_A  == 10){ 
				$scope.kitchen_8_8_1_A = data.kitchen_8_8_1_A; $scope.kitchen_8_8_1_A = false; $scope.kitchen_8_8_1_A_b = false; $scope.kitchen_8_8_1_A_c = true; $scope.kitchen_8_8_1_A_cm = ''; } else if( ((data.kitchen_8_8_1_A  >= 0 ) && (data.kitchen_8_8_1_A  < 3)) || ((data.kitchen_8_8_1_A  > 3 ) && (data.kitchen_8_8_1_A  < 5)) || ((data.kitchen_8_8_1_A  > 5 ) && (data.kitchen_8_8_1_A  < 10)) ){ $scope.kitchen_8_8_1_A_cm = data.kitchen_8_8_1_A; $scope.kitchen_8_8_1_A = false; $scope.kitchen_8_8_1_A_b = false; $scope.kitchen_8_8_1_A_c = false; $scope.kitchen_8_8_1_A = ''; }else{ $scope.kitchen_8_8_1_A = ''; $scope.kitchen_8_8_1_A_cm = ''; $scope.kitchen_8_8_1_A = false; $scope.kitchen_8_8_1_A_b = false; $scope.kitchen_8_8_1_A_c = false;}
				if(data.kitchen_8_8_1_B == 5){ $scope.kitchen_8_8_1_B = data.kitchen_8_8_1_B; $scope.kitchen_8_8_1_B = true; $scope.kitchen_8_8_1_B_b = false; $scope.kitchen_8_8_1_B_c = false; $scope.kitchen_8_8_1_B_cm = ''; } else if(data.kitchen_8_8_1_B  == 8){ $scope.kitchen_8_8_1_B = data.kitchen_8_8_1_B; $scope.kitchen_8_8_1_B = false; $scope.kitchen_8_8_1_B_b = true; $scope.kitchen_8_8_1_B_c = false; $scope.kitchen_8_8_1_B_cm = ''; } else if(data.kitchen_8_8_1_B  == 10){ 
				$scope.kitchen_8_8_1_B = data.kitchen_8_8_1_B; $scope.kitchen_8_8_1_B = false; $scope.kitchen_8_8_1_B_b = false; $scope.kitchen_8_8_1_B_c = true; $scope.kitchen_8_8_1_B_cm = ''; } else if( ((data.kitchen_8_8_1_B  >= 0 ) && (data.kitchen_8_8_1_B  < 5)) || ((data.kitchen_8_8_1_B  > 5 ) && (data.kitchen_8_8_1_B  < 8)) || ((data.kitchen_8_8_1_B  > 8 ) && (data.kitchen_8_8_1_B  < 10)) ){ $scope.kitchen_8_8_1_B_cm = data.kitchen_8_8_1_B; $scope.kitchen_8_8_1_B = false; $scope.kitchen_8_8_1_B_b = false; $scope.kitchen_8_8_1_B_c = false; $scope.kitchen_8_8_1_B = ''; }else{ $scope.kitchen_8_8_1_B = ''; $scope.kitchen_8_8_1_B_cm = ''; $scope.kitchen_8_8_1_B = false; $scope.kitchen_8_8_1_B_b = false; $scope.kitchen_8_8_1_B_c = false;}
				$scope.kitchen_8_9_1_text = data.kitchen_8_9_1_text;
				if(data.kitchen_8_9_1_A == 0){ $scope.kitchen_8_9_1_A = data.kitchen_8_9_1_A; $scope.kitchen_8_9_1_A = true; $scope.kitchen_8_9_1_A_b = false; $scope.kitchen_8_9_1_A_c = false; $scope.kitchen_8_9_1_A_cm = ''; } else if(data.kitchen_8_9_1_A  == 4){ $scope.kitchen_8_9_1_A = data.kitchen_8_9_1_A; $scope.kitchen_8_9_1_A = false; $scope.kitchen_8_9_1_A_b = true; $scope.kitchen_8_9_1_A_c = false; $scope.kitchen_8_9_1_A_cm = ''; } else if(data.kitchen_8_9_1_A  == ){ $scope.kitchen_8_9_1_A = data.kitchen_8_9_1_A; $scope.kitchen_8_9_1_A = false; $scope.kitchen_8_9_1_A_b = false; $scope.kitchen_8_9_1_A_c = true; $scope.kitchen_8_9_1_A_cm = ''; }else if( ((data.kitchen_8_9_1_A  > 0 ) && (data.kitchen_8_9_1_A  < 4)) || ((data.kitchen_8_9_1_A  > 4 ) && (data.kitchen_8_9_1_A  < )) )
				{ $scope.kitchen_8_9_1_A_cm = data.kitchen_8_9_1_A; $scope.kitchen_8_9_1_A = false; $scope.kitchen_8_9_1_A_b = false;  $scope.kitchen_8_9_1_A_c = false; $scope.kitchen_8_9_1_A = ''; }else{ $scope.kitchen_8_9_1_A = ''; $scope.kitchen_8_9_1_A_cm = ''; $scope.kitchen_8_9_1_A = false; $scope.kitchen_8_9_1_A_b = false; $scope.kitchen_8_9_1_A_c = false; }
				if(data.kitchen_8_9_1_B == 0){ $scope.kitchen_8_9_1_B = data.kitchen_8_9_1_B; $scope.kitchen_8_9_1_B = true; $scope.kitchen_8_9_1_B_b = false; $scope.kitchen_8_9_1_B_c = false; $scope.kitchen_8_9_1_B_cm = ''; } else if(data.kitchen_8_9_1_B  == 4){ $scope.kitchen_8_9_1_B = data.kitchen_8_9_1_B; $scope.kitchen_8_9_1_B = false; $scope.kitchen_8_9_1_B_b = true; $scope.kitchen_8_9_1_B_c = false; $scope.kitchen_8_9_1_B_cm = ''; } else if(data.kitchen_8_9_1_B  == ){ $scope.kitchen_8_9_1_B = data.kitchen_8_9_1_B; $scope.kitchen_8_9_1_B = false; $scope.kitchen_8_9_1_B_b = false; $scope.kitchen_8_9_1_B_c = true; $scope.kitchen_8_9_1_B_cm = ''; }else if( ((data.kitchen_8_9_1_B  > 0 ) && (data.kitchen_8_9_1_B  < 4)) || ((data.kitchen_8_9_1_B  > 4 ) && (data.kitchen_8_9_1_B  < )) )
				{ $scope.kitchen_8_9_1_B_cm = data.kitchen_8_9_1_B; $scope.kitchen_8_9_1_B = false; $scope.kitchen_8_9_1_B_b = false;  $scope.kitchen_8_9_1_B_c = false; $scope.kitchen_8_9_1_B = ''; }else{ $scope.kitchen_8_9_1_B = ''; $scope.kitchen_8_9_1_B_cm = ''; $scope.kitchen_8_9_1_B = false; $scope.kitchen_8_9_1_B_b = false; $scope.kitchen_8_9_1_B_c = false; }
				if(data.kitchen_8_9_1_C_a == 3){ $scope.kitchen_8_9_1_C_a = data.kitchen_8_9_1_C_a; $scope.kitchen_8_9_1_C_a= true; $scope.kitchen_8_9_1_C_a_cm = ''; } else if((data.kitchen_8_9_1_C_a > 0 ) && (data.kitchen_8_9_1_C_a < 3)){ $scope.kitchen_8_9_1_C_a_cm = data.kitchen_8_9_1_C_a; $scope.kitchen_8_9_1_C_a= false; $scope.kitchen_8_9_1_C_a= ''; }else{ $scope.kitchen_8_9_1_C_a= ''; $scope.kitchen_8_9_1_C_a_cm = ''; $scope.kitchen_8_9_1_C_a= false; }
				if(data.kitchen_8_9_1_C_b == 3){ $scope.kitchen_8_9_1_C_b = data.kitchen_8_9_1_C_b; $scope.kitchen_8_9_1_C_b= true; $scope.kitchen_8_9_1_C_b_cm = ''; } else if((data.kitchen_8_9_1_C_b > 0 ) && (data.kitchen_8_9_1_C_b < 3)){ $scope.kitchen_8_9_1_C_b_cm = data.kitchen_8_9_1_C_b; $scope.kitchen_8_9_1_C_b= false; $scope.kitchen_8_9_1_C_b= ''; }else{ $scope.kitchen_8_9_1_C_b= ''; $scope.kitchen_8_9_1_C_b_cm = ''; $scope.kitchen_8_9_1_C_b= false; }
				if(data.kitchen_8_9_1_D == 0){ $scope.kitchen_8_9_1_D = data.kitchen_8_9_1_D; $scope.kitchen_8_9_1_D = true; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = false; $scope.kitchen_8_9_1_D_cm = ''; } else if(data.kitchen_8_9_1_D  == 2){ $scope.kitchen_8_9_1_D = data.kitchen_8_9_1_D; $scope.kitchen_8_9_1_D = false; $scope.kitchen_8_9_1_D_b = true; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = false; $scope.kitchen_8_9_1_D_cm = ''; } else if(data.kitchen_8_9_1_D  == 3){ $scope.kitchen_8_9_1_D = data.kitchen_8_9_1_D; $scope.kitchen_8_9_1_D = false; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = true; $scope.kitchen_8_9_1_D_d = false; $scope.kitchen_8_9_1_D_cm = ''; }else if(data.kitchen_8_9_1_D  == 5){ $scope.kitchen_8_9_1_D = data.kitchen_8_9_1_D; $scope.kitchen_8_9_1_D = false; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = true; $scope.kitchen_8_9_1_D_cm = ''; } else if( ((data.kitchen_8_9_1_D  > 0 ) && (data.kitchen_8_9_1_D  < 2)) || ((data.kitchen_8_9_1_D  > 2 ) && (data.kitchen_8_9_1_D  < 3)) || ((data.kitchen_8_9_1_D  > 3 ) && (data.kitchen_8_9_1_D  < 5)) )
				{ $scope.kitchen_8_9_1_D_cm = data.kitchen_8_9_1_D; $scope.kitchen_8_9_1_D = false; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = false; $scope.kitchen_8_9_1_D = ''; }else{ $scope.kitchen_8_9_1_D = ''; $scope.kitchen_8_9_1_D_cm = ''; $scope.kitchen_8_9_1_D = false; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = false;}
				if(data.kitchen_8_9_1_E  == 2){ $scope.kitchen_8_9_1_E  = data.kitchen_8_9_1_E ; $scope.kitchen_8_9_1_E = true; $scope.kitchen_8_9_1_E_b = false; $scope.kitchen_8_9_1_E_cm = ''; } else if(data.kitchen_8_9_1_E  == 4){ $scope.kitchen_8_9_1_E  = data.kitchen_8_9_1_E ; $scope.kitchen_8_9_1_E = false; $scope.kitchen_8_9_1_E_b = true; $scope.kitchen_8_9_1_E_cm = ''; }else if( ((data.kitchen_8_9_1_E  > 0 ) && (data.kitchen_8_9_1_E  < 2)) || ((data.kitchen_8_9_1_E  > 2 ) && (data.kitchen_8_9_1_E  < 4)))
				{ $scope.kitchen_8_9_1_E_cm = data.kitchen_8_9_1_E ; $scope.kitchen_8_9_1_E = false; $scope.kitchen_8_9_1_E_b = false; $scope.kitchen_8_9_1_E  = ''; }else{ $scope.kitchen_8_9_1_E  = ''; $scope.kitchen_8_9_1_E_cm = ''; $scope.kitchen_8_9_1_E = false; $scope.kitchen_8_9_1_E_b = false; }
				if(data.kitchen_8_9_1_F == 0){ $scope.kitchen_8_9_1_F = data.kitchen_8_9_1_F; $scope.kitchen_8_9_1_F = true; $scope.kitchen_8_9_1_F_b = false; $scope.kitchen_8_9_1_F_c = false; $scope.kitchen_8_9_1_F_cm = ''; } else if(data.kitchen_8_9_1_F  == 4){ $scope.kitchen_8_9_1_F = data.kitchen_8_9_1_F; $scope.kitchen_8_9_1_F = false; $scope.kitchen_8_9_1_F_b = true; $scope.kitchen_8_9_1_F_c = false; $scope.kitchen_8_9_1_F_cm = ''; } else if(data.kitchen_8_9_1_F  == ){ $scope.kitchen_8_9_1_F = data.kitchen_8_9_1_F; $scope.kitchen_8_9_1_F = false; $scope.kitchen_8_9_1_F_b = false; $scope.kitchen_8_9_1_F_c = true; $scope.kitchen_8_9_1_F_cm = ''; }else if( ((data.kitchen_8_9_1_F  > 0 ) && (data.kitchen_8_9_1_F  < 4)) || ((data.kitchen_8_9_1_F  > 4 ) && (data.kitchen_8_9_1_F  < )) )
				{ $scope.kitchen_8_9_1_F_cm = data.kitchen_8_9_1_F; $scope.kitchen_8_9_1_F = false; $scope.kitchen_8_9_1_F_b = false;  $scope.kitchen_8_9_1_F_c = false; $scope.kitchen_8_9_1_F = ''; }else{ $scope.kitchen_8_9_1_F = ''; $scope.kitchen_8_9_1_F_cm = ''; $scope.kitchen_8_9_1_F = false; $scope.kitchen_8_9_1_F_b = false; $scope.kitchen_8_9_1_F_c = false; }
				if(data.kitchen_8_9_1_G == 1){ $scope.kitchen_8_9_1_G = data.kitchen_8_9_1_G; $scope.kitchen_8_9_1_G = true; $scope.kitchen_8_9_1_G_b = false; $scope.kitchen_8_9_1_G_c = false; $scope.kitchen_8_9_1_G_cm = ''; } else if(data.kitchen_8_9_1_G  == 2){ $scope.kitchen_8_9_1_G = data.kitchen_8_9_1_G; $scope.kitchen_8_9_1_G = false; $scope.kitchen_8_9_1_G_b = true; $scope.kitchen_8_9_1_G_c = false; $scope.kitchen_8_9_1_G_cm = ''; } else if(data.kitchen_8_9_1_G  == 3){ 
				$scope.kitchen_8_9_1_G = data.kitchen_8_9_1_G; $scope.kitchen_8_9_1_G = false; $scope.kitchen_8_9_1_G_b = false; $scope.kitchen_8_9_1_G_c = true; $scope.kitchen_8_9_1_G_cm = ''; } else if( ((data.kitchen_8_9_1_G  >= 0 ) && (data.kitchen_8_9_1_G  < 1)) || ((data.kitchen_8_9_1_G  > 1 ) && (data.kitchen_8_9_1_G  < 2)) || ((data.kitchen_8_9_1_G  > 2 ) && (data.kitchen_8_9_1_G  < 3)) ){ $scope.kitchen_8_9_1_G_cm = data.kitchen_8_9_1_G; $scope.kitchen_8_9_1_G = false; $scope.kitchen_8_9_1_G_b = false; $scope.kitchen_8_9_1_G_c = false; $scope.kitchen_8_9_1_G = ''; }else{ $scope.kitchen_8_9_1_G = ''; $scope.kitchen_8_9_1_G_cm = ''; $scope.kitchen_8_9_1_G = false; $scope.kitchen_8_9_1_G_b = false; $scope.kitchen_8_9_1_G_c = false;}
				$scope.kitchen_8_10_1_text = data.kitchen_8_10_1_text;
				if(data.kitchen_8_10_1_A == 0){ $scope.kitchen_8_10_1_A = data.kitchen_8_10_1_A; $scope.kitchen_8_10_1_A = true; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = false; $scope.kitchen_8_10_1_A_cm = ''; } else if(data.kitchen_8_10_1_A  == 4){ $scope.kitchen_8_10_1_A = data.kitchen_8_10_1_A; $scope.kitchen_8_10_1_A = false; $scope.kitchen_8_10_1_A_b = true; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = false; $scope.kitchen_8_10_1_A_cm = ''; } else if(data.kitchen_8_10_1_A  == 6){ $scope.kitchen_8_10_1_A = data.kitchen_8_10_1_A; $scope.kitchen_8_10_1_A = false; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = true; $scope.kitchen_8_10_1_A_d = false; $scope.kitchen_8_10_1_A_cm = ''; }else if(data.kitchen_8_10_1_A  == 8){ $scope.kitchen_8_10_1_A = data.kitchen_8_10_1_A; $scope.kitchen_8_10_1_A = false; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = true; $scope.kitchen_8_10_1_A_cm = ''; } else if( ((data.kitchen_8_10_1_A  > 0 ) && (data.kitchen_8_10_1_A  < 4)) || ((data.kitchen_8_10_1_A  > 4 ) && (data.kitchen_8_10_1_A  < 6)) || ((data.kitchen_8_10_1_A  > 6 ) && (data.kitchen_8_10_1_A  < 8)) )
				{ $scope.kitchen_8_10_1_A_cm = data.kitchen_8_10_1_A; $scope.kitchen_8_10_1_A = false; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = false; $scope.kitchen_8_10_1_A = ''; }else{ $scope.kitchen_8_10_1_A = ''; $scope.kitchen_8_10_1_A_cm = ''; $scope.kitchen_8_10_1_A = false; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = false;}
				if(data.kitchen_8_10_1_B == 0){ $scope.kitchen_8_10_1_B = data.kitchen_8_10_1_B; $scope.kitchen_8_10_1_B = true; $scope.kitchen_8_10_1_B_b = false; $scope.kitchen_8_10_1_B_c = false; $scope.kitchen_8_10_1_B_cm = ''; } else if(data.kitchen_8_10_1_B  == 4){ $scope.kitchen_8_10_1_B = data.kitchen_8_10_1_B; $scope.kitchen_8_10_1_B = false; $scope.kitchen_8_10_1_B_b = true; $scope.kitchen_8_10_1_B_c = false; $scope.kitchen_8_10_1_B_cm = ''; } else if(data.kitchen_8_10_1_B  == ){ $scope.kitchen_8_10_1_B = data.kitchen_8_10_1_B; $scope.kitchen_8_10_1_B = false; $scope.kitchen_8_10_1_B_b = false; $scope.kitchen_8_10_1_B_c = true; $scope.kitchen_8_10_1_B_cm = ''; }else if( ((data.kitchen_8_10_1_B  > 0 ) && (data.kitchen_8_10_1_B  < 4)) || ((data.kitchen_8_10_1_B  > 4 ) && (data.kitchen_8_10_1_B  < )) )
				{ $scope.kitchen_8_10_1_B_cm = data.kitchen_8_10_1_B; $scope.kitchen_8_10_1_B = false; $scope.kitchen_8_10_1_B_b = false;  $scope.kitchen_8_10_1_B_c = false; $scope.kitchen_8_10_1_B = ''; }else{ $scope.kitchen_8_10_1_B = ''; $scope.kitchen_8_10_1_B_cm = ''; $scope.kitchen_8_10_1_B = false; $scope.kitchen_8_10_1_B_b = false; $scope.kitchen_8_10_1_B_c = false; }
				if(data.kitchen_8_10_1_C == 0){ $scope.kitchen_8_10_1_C = data.kitchen_8_10_1_C; $scope.kitchen_8_10_1_C = true; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = false; $scope.kitchen_8_10_1_C_cm = ''; } else if(data.kitchen_8_10_1_C  == 4){ $scope.kitchen_8_10_1_C = data.kitchen_8_10_1_C; $scope.kitchen_8_10_1_C = false; $scope.kitchen_8_10_1_C_b = true; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = false; $scope.kitchen_8_10_1_C_cm = ''; } else if(data.kitchen_8_10_1_C  == 6){ $scope.kitchen_8_10_1_C = data.kitchen_8_10_1_C; $scope.kitchen_8_10_1_C = false; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = true; $scope.kitchen_8_10_1_C_d = false; $scope.kitchen_8_10_1_C_cm = ''; }else if(data.kitchen_8_10_1_C  == 8){ $scope.kitchen_8_10_1_C = data.kitchen_8_10_1_C; $scope.kitchen_8_10_1_C = false; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = true; $scope.kitchen_8_10_1_C_cm = ''; } else if( ((data.kitchen_8_10_1_C  > 0 ) && (data.kitchen_8_10_1_C  < 4)) || ((data.kitchen_8_10_1_C  > 4 ) && (data.kitchen_8_10_1_C  < 6)) || ((data.kitchen_8_10_1_C  > 6 ) && (data.kitchen_8_10_1_C  < 8)) )
				{ $scope.kitchen_8_10_1_C_cm = data.kitchen_8_10_1_C; $scope.kitchen_8_10_1_C = false; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = false; $scope.kitchen_8_10_1_C = ''; }else{ $scope.kitchen_8_10_1_C = ''; $scope.kitchen_8_10_1_C_cm = ''; $scope.kitchen_8_10_1_C = false; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = false;}
				$scope.kitchen_8_11_1_text = data.kitchen_8_11_1_text;
				if(data.kitchen_8_11_1_A == 0){ $scope.kitchen_8_11_1_A = data.kitchen_8_11_1_A; $scope.kitchen_8_11_1_A = true; $scope.kitchen_8_11_1_A_b = false; $scope.kitchen_8_11_1_A_c = false; $scope.kitchen_8_11_1_A_cm = ''; } else if(data.kitchen_8_11_1_A  == 4){ $scope.kitchen_8_11_1_A = data.kitchen_8_11_1_A; $scope.kitchen_8_11_1_A = false; $scope.kitchen_8_11_1_A_b = true; $scope.kitchen_8_11_1_A_c = false; $scope.kitchen_8_11_1_A_cm = ''; } else if(data.kitchen_8_11_1_A  == 8){ $scope.kitchen_8_11_1_A = data.kitchen_8_11_1_A; $scope.kitchen_8_11_1_A = false; $scope.kitchen_8_11_1_A_b = false; $scope.kitchen_8_11_1_A_c = true; $scope.kitchen_8_11_1_A_cm = ''; }else if( ((data.kitchen_8_11_1_A  > 0 ) && (data.kitchen_8_11_1_A  < 4)) || ((data.kitchen_8_11_1_A  > 4 ) && (data.kitchen_8_11_1_A  < 8)) )
				{ $scope.kitchen_8_11_1_A_cm = data.kitchen_8_11_1_A; $scope.kitchen_8_11_1_A = false; $scope.kitchen_8_11_1_A_b = false;  $scope.kitchen_8_11_1_A_c = false; $scope.kitchen_8_11_1_A = ''; }else{ $scope.kitchen_8_11_1_A = ''; $scope.kitchen_8_11_1_A_cm = ''; $scope.kitchen_8_11_1_A = false; $scope.kitchen_8_11_1_A_b = false; $scope.kitchen_8_11_1_A_c = false; }
				if(data.kitchen_8_11_1_B == 0){ $scope.kitchen_8_11_1_B = data.kitchen_8_11_1_B; $scope.kitchen_8_11_1_B = true; $scope.kitchen_8_11_1_B_b = false; $scope.kitchen_8_11_1_B_c = false; $scope.kitchen_8_11_1_B_cm = ''; } else if(data.kitchen_8_11_1_B  == 2){ $scope.kitchen_8_11_1_B = data.kitchen_8_11_1_B; $scope.kitchen_8_11_1_B = false; $scope.kitchen_8_11_1_B_b = true; $scope.kitchen_8_11_1_B_c = false; $scope.kitchen_8_11_1_B_cm = ''; } else if(data.kitchen_8_11_1_B  == ){ $scope.kitchen_8_11_1_B = data.kitchen_8_11_1_B; $scope.kitchen_8_11_1_B = false; $scope.kitchen_8_11_1_B_b = false; $scope.kitchen_8_11_1_B_c = true; $scope.kitchen_8_11_1_B_cm = ''; }else if( ((data.kitchen_8_11_1_B  > 0 ) && (data.kitchen_8_11_1_B  < 2)) || ((data.kitchen_8_11_1_B  > 2 ) && (data.kitchen_8_11_1_B  < )) )
				{ $scope.kitchen_8_11_1_B_cm = data.kitchen_8_11_1_B; $scope.kitchen_8_11_1_B = false; $scope.kitchen_8_11_1_B_b = false;  $scope.kitchen_8_11_1_B_c = false; $scope.kitchen_8_11_1_B = ''; }else{ $scope.kitchen_8_11_1_B = ''; $scope.kitchen_8_11_1_B_cm = ''; $scope.kitchen_8_11_1_B = false; $scope.kitchen_8_11_1_B_b = false; $scope.kitchen_8_11_1_B_c = false; }
				if(data.kitchen_8_11_1_C == 0){ $scope.kitchen_8_11_1_C = data.kitchen_8_11_1_C; $scope.kitchen_8_11_1_C = true; $scope.kitchen_8_11_1_C_b = false; $scope.kitchen_8_11_1_C_c = false; $scope.kitchen_8_11_1_C_cm = ''; } else if(data.kitchen_8_11_1_C  == 8){ $scope.kitchen_8_11_1_C = data.kitchen_8_11_1_C; $scope.kitchen_8_11_1_C = false; $scope.kitchen_8_11_1_C_b = true; $scope.kitchen_8_11_1_C_c = false; $scope.kitchen_8_11_1_C_cm = ''; } else if(data.kitchen_8_11_1_C  == ){ $scope.kitchen_8_11_1_C = data.kitchen_8_11_1_C; $scope.kitchen_8_11_1_C = false; $scope.kitchen_8_11_1_C_b = false; $scope.kitchen_8_11_1_C_c = true; $scope.kitchen_8_11_1_C_cm = ''; }else if( ((data.kitchen_8_11_1_C  > 0 ) && (data.kitchen_8_11_1_C  < 8)) || ((data.kitchen_8_11_1_C  > 8 ) && (data.kitchen_8_11_1_C  < )) )
				{ $scope.kitchen_8_11_1_C_cm = data.kitchen_8_11_1_C; $scope.kitchen_8_11_1_C = false; $scope.kitchen_8_11_1_C_b = false;  $scope.kitchen_8_11_1_C_c = false; $scope.kitchen_8_11_1_C = ''; }else{ $scope.kitchen_8_11_1_C = ''; $scope.kitchen_8_11_1_C_cm = ''; $scope.kitchen_8_11_1_C = false; $scope.kitchen_8_11_1_C_b = false; $scope.kitchen_8_11_1_C_c = false; }
				if(data.kitchen_8_11_1_D == 0){ $scope.kitchen_8_11_1_D = data.kitchen_8_11_1_D; $scope.kitchen_8_11_1_D = true; $scope.kitchen_8_11_1_D_b = false; $scope.kitchen_8_11_1_D_c = false; $scope.kitchen_8_11_1_D_cm = ''; } else if(data.kitchen_8_11_1_D  == 2){ $scope.kitchen_8_11_1_D = data.kitchen_8_11_1_D; $scope.kitchen_8_11_1_D = false; $scope.kitchen_8_11_1_D_b = true; $scope.kitchen_8_11_1_D_c = false; $scope.kitchen_8_11_1_D_cm = ''; } else if(data.kitchen_8_11_1_D  == 4){ $scope.kitchen_8_11_1_D = data.kitchen_8_11_1_D; $scope.kitchen_8_11_1_D = false; $scope.kitchen_8_11_1_D_b = false; $scope.kitchen_8_11_1_D_c = true; $scope.kitchen_8_11_1_D_cm = ''; }else if( ((data.kitchen_8_11_1_D  > 0 ) && (data.kitchen_8_11_1_D  < 2)) || ((data.kitchen_8_11_1_D  > 2 ) && (data.kitchen_8_11_1_D  < 4)) )
				{ $scope.kitchen_8_11_1_D_cm = data.kitchen_8_11_1_D; $scope.kitchen_8_11_1_D = false; $scope.kitchen_8_11_1_D_b = false;  $scope.kitchen_8_11_1_D_c = false; $scope.kitchen_8_11_1_D = ''; }else{ $scope.kitchen_8_11_1_D = ''; $scope.kitchen_8_11_1_D_cm = ''; $scope.kitchen_8_11_1_D = false; $scope.kitchen_8_11_1_D_b = false; $scope.kitchen_8_11_1_D_c = false; }
				if(data.kitchen_8_11_1_E == 0){ $scope.kitchen_8_11_1_E = data.kitchen_8_11_1_E; $scope.kitchen_8_11_1_E = true; $scope.kitchen_8_11_1_E_b = false; $scope.kitchen_8_11_1_E_c = false; $scope.kitchen_8_11_1_E_cm = ''; } else if(data.kitchen_8_11_1_E  == 4){ $scope.kitchen_8_11_1_E = data.kitchen_8_11_1_E; $scope.kitchen_8_11_1_E = false; $scope.kitchen_8_11_1_E_b = true; $scope.kitchen_8_11_1_E_c = false; $scope.kitchen_8_11_1_E_cm = ''; } else if(data.kitchen_8_11_1_E  == 8){ $scope.kitchen_8_11_1_E = data.kitchen_8_11_1_E; $scope.kitchen_8_11_1_E = false; $scope.kitchen_8_11_1_E_b = false; $scope.kitchen_8_11_1_E_c = true; $scope.kitchen_8_11_1_E_cm = ''; }else if( ((data.kitchen_8_11_1_E  > 0 ) && (data.kitchen_8_11_1_E  < 4)) || ((data.kitchen_8_11_1_E  > 4 ) && (data.kitchen_8_11_1_E  < 8)) )
				{ $scope.kitchen_8_11_1_E_cm = data.kitchen_8_11_1_E; $scope.kitchen_8_11_1_E = false; $scope.kitchen_8_11_1_E_b = false;  $scope.kitchen_8_11_1_E_c = false; $scope.kitchen_8_11_1_E = ''; }else{ $scope.kitchen_8_11_1_E = ''; $scope.kitchen_8_11_1_E_cm = ''; $scope.kitchen_8_11_1_E = false; $scope.kitchen_8_11_1_E_b = false; $scope.kitchen_8_11_1_E_c = false; }
				$scope.kitchen_8_12_1_text = data.kitchen_8_12_1_text;
				if(data.kitchen_8_12_1_A_a == 3){ $scope.kitchen_8_12_1_A_a = data.kitchen_8_12_1_A_a; $scope.kitchen_8_12_1_A_a= true; $scope.kitchen_8_12_1_A_a_cm = ''; } else if((data.kitchen_8_12_1_A_a > 0 ) && (data.kitchen_8_12_1_A_a < 3)){ $scope.kitchen_8_12_1_A_a_cm = data.kitchen_8_12_1_A_a; $scope.kitchen_8_12_1_A_a= false; $scope.kitchen_8_12_1_A_a= ''; }else{ $scope.kitchen_8_12_1_A_a= ''; $scope.kitchen_8_12_1_A_a_cm = ''; $scope.kitchen_8_12_1_A_a= false; }
				if(data.kitchen_8_12_1_A_b == 3){ $scope.kitchen_8_12_1_A_b = data.kitchen_8_12_1_A_b; $scope.kitchen_8_12_1_A_b= true; $scope.kitchen_8_12_1_A_b_cm = ''; } else if((data.kitchen_8_12_1_A_b > 0 ) && (data.kitchen_8_12_1_A_b < 3)){ $scope.kitchen_8_12_1_A_b_cm = data.kitchen_8_12_1_A_b; $scope.kitchen_8_12_1_A_b= false; $scope.kitchen_8_12_1_A_b= ''; }else{ $scope.kitchen_8_12_1_A_b= ''; $scope.kitchen_8_12_1_A_b_cm = ''; $scope.kitchen_8_12_1_A_b= false; }
				if(data.kitchen_8_12_1_A_c == 2){ $scope.kitchen_8_12_1_A_c = data.kitchen_8_12_1_A_c; $scope.kitchen_8_12_1_A_c= true; $scope.kitchen_8_12_1_A_c_cm = ''; } else if((data.kitchen_8_12_1_A_c > 0 ) && (data.kitchen_8_12_1_A_c < 2)){ $scope.kitchen_8_12_1_A_c_cm = data.kitchen_8_12_1_A_c; $scope.kitchen_8_12_1_A_c= false; $scope.kitchen_8_12_1_A_c= ''; }else{ $scope.kitchen_8_12_1_A_c= ''; $scope.kitchen_8_12_1_A_c_cm = ''; $scope.kitchen_8_12_1_A_c= false; }
				if(data.kitchen_8_12_1_A_d == 2){ $scope.kitchen_8_12_1_A_d = data.kitchen_8_12_1_A_d; $scope.kitchen_8_12_1_A_d= true; $scope.kitchen_8_12_1_A_d_cm = ''; } else if((data.kitchen_8_12_1_A_d > 0 ) && (data.kitchen_8_12_1_A_d < 2)){ $scope.kitchen_8_12_1_A_d_cm = data.kitchen_8_12_1_A_d; $scope.kitchen_8_12_1_A_d= false; $scope.kitchen_8_12_1_A_d= ''; }else{ $scope.kitchen_8_12_1_A_d= ''; $scope.kitchen_8_12_1_A_d_cm = ''; $scope.kitchen_8_12_1_A_d= false; }
				if(data.kitchen_8_12_1_B == 2){ $scope.kitchen_8_12_1_B = data.kitchen_8_12_1_B; $scope.kitchen_8_12_1_B = true; $scope.kitchen_8_12_1_B_b = false; $scope.kitchen_8_12_1_B_c = false; $scope.kitchen_8_12_1_B_cm = ''; } else if(data.kitchen_8_12_1_B  == 3){ $scope.kitchen_8_12_1_B = data.kitchen_8_12_1_B; $scope.kitchen_8_12_1_B = false; $scope.kitchen_8_12_1_B_b = true; $scope.kitchen_8_12_1_B_c = false; $scope.kitchen_8_12_1_B_cm = ''; } else if(data.kitchen_8_12_1_B  == 5){ 
				$scope.kitchen_8_12_1_B = data.kitchen_8_12_1_B; $scope.kitchen_8_12_1_B = false; $scope.kitchen_8_12_1_B_b = false; $scope.kitchen_8_12_1_B_c = true; $scope.kitchen_8_12_1_B_cm = ''; } else if( ((data.kitchen_8_12_1_B  >= 0 ) && (data.kitchen_8_12_1_B  < 2)) || ((data.kitchen_8_12_1_B  > 2 ) && (data.kitchen_8_12_1_B  < 3)) || ((data.kitchen_8_12_1_B  > 3 ) && (data.kitchen_8_12_1_B  < 5)) ){ $scope.kitchen_8_12_1_B_cm = data.kitchen_8_12_1_B; $scope.kitchen_8_12_1_B = false; $scope.kitchen_8_12_1_B_b = false; $scope.kitchen_8_12_1_B_c = false; $scope.kitchen_8_12_1_B = ''; }else{ $scope.kitchen_8_12_1_B = ''; $scope.kitchen_8_12_1_B_cm = ''; $scope.kitchen_8_12_1_B = false; $scope.kitchen_8_12_1_B_b = false; $scope.kitchen_8_12_1_B_c = false;}
				if(data.kitchen_8_12_1_C == 0){ $scope.kitchen_8_12_1_C = data.kitchen_8_12_1_C; $scope.kitchen_8_12_1_C = true; $scope.kitchen_8_12_1_C_b = false; $scope.kitchen_8_12_1_C_c = false; $scope.kitchen_8_12_1_C_cm = ''; } else if(data.kitchen_8_12_1_C  == 5){ $scope.kitchen_8_12_1_C = data.kitchen_8_12_1_C; $scope.kitchen_8_12_1_C = false; $scope.kitchen_8_12_1_C_b = true; $scope.kitchen_8_12_1_C_c = false; $scope.kitchen_8_12_1_C_cm = ''; } else if(data.kitchen_8_12_1_C  == ){ $scope.kitchen_8_12_1_C = data.kitchen_8_12_1_C; $scope.kitchen_8_12_1_C = false; $scope.kitchen_8_12_1_C_b = false; $scope.kitchen_8_12_1_C_c = true; $scope.kitchen_8_12_1_C_cm = ''; }else if( ((data.kitchen_8_12_1_C  > 0 ) && (data.kitchen_8_12_1_C  < 5)) || ((data.kitchen_8_12_1_C  > 5 ) && (data.kitchen_8_12_1_C  < )) )
				{ $scope.kitchen_8_12_1_C_cm = data.kitchen_8_12_1_C; $scope.kitchen_8_12_1_C = false; $scope.kitchen_8_12_1_C_b = false;  $scope.kitchen_8_12_1_C_c = false; $scope.kitchen_8_12_1_C = ''; }else{ $scope.kitchen_8_12_1_C = ''; $scope.kitchen_8_12_1_C_cm = ''; $scope.kitchen_8_12_1_C = false; $scope.kitchen_8_12_1_C_b = false; $scope.kitchen_8_12_1_C_c = false; }
				if(data.kitchen_8_12_1_D == 0){ $scope.kitchen_8_12_1_D = data.kitchen_8_12_1_D; $scope.kitchen_8_12_1_D = true; $scope.kitchen_8_12_1_D_b = false; $scope.kitchen_8_12_1_D_c = false; $scope.kitchen_8_12_1_D_cm = ''; } else if(data.kitchen_8_12_1_D  == 5){ $scope.kitchen_8_12_1_D = data.kitchen_8_12_1_D; $scope.kitchen_8_12_1_D = false; $scope.kitchen_8_12_1_D_b = true; $scope.kitchen_8_12_1_D_c = false; $scope.kitchen_8_12_1_D_cm = ''; } else if(data.kitchen_8_12_1_D  == ){ $scope.kitchen_8_12_1_D = data.kitchen_8_12_1_D; $scope.kitchen_8_12_1_D = false; $scope.kitchen_8_12_1_D_b = false; $scope.kitchen_8_12_1_D_c = true; $scope.kitchen_8_12_1_D_cm = ''; }else if( ((data.kitchen_8_12_1_D  > 0 ) && (data.kitchen_8_12_1_D  < 5)) || ((data.kitchen_8_12_1_D  > 5 ) && (data.kitchen_8_12_1_D  < )) )
				{ $scope.kitchen_8_12_1_D_cm = data.kitchen_8_12_1_D; $scope.kitchen_8_12_1_D = false; $scope.kitchen_8_12_1_D_b = false;  $scope.kitchen_8_12_1_D_c = false; $scope.kitchen_8_12_1_D = ''; }else{ $scope.kitchen_8_12_1_D = ''; $scope.kitchen_8_12_1_D_cm = ''; $scope.kitchen_8_12_1_D = false; $scope.kitchen_8_12_1_D_b = false; $scope.kitchen_8_12_1_D_c = false; }
				if(data.kitchen_8_12_1_E == 0){ $scope.kitchen_8_12_1_E = data.kitchen_8_12_1_E; $scope.kitchen_8_12_1_E = true; $scope.kitchen_8_12_1_E_b = false; $scope.kitchen_8_12_1_E_c = false; $scope.kitchen_8_12_1_E_cm = ''; } else if(data.kitchen_8_12_1_E  == 5){ $scope.kitchen_8_12_1_E = data.kitchen_8_12_1_E; $scope.kitchen_8_12_1_E = false; $scope.kitchen_8_12_1_E_b = true; $scope.kitchen_8_12_1_E_c = false; $scope.kitchen_8_12_1_E_cm = ''; } else if(data.kitchen_8_12_1_E  == ){ $scope.kitchen_8_12_1_E = data.kitchen_8_12_1_E; $scope.kitchen_8_12_1_E = false; $scope.kitchen_8_12_1_E_b = false; $scope.kitchen_8_12_1_E_c = true; $scope.kitchen_8_12_1_E_cm = ''; }else if( ((data.kitchen_8_12_1_E  > 0 ) && (data.kitchen_8_12_1_E  < 5)) || ((data.kitchen_8_12_1_E  > 5 ) && (data.kitchen_8_12_1_E  < )) )
				{ $scope.kitchen_8_12_1_E_cm = data.kitchen_8_12_1_E; $scope.kitchen_8_12_1_E = false; $scope.kitchen_8_12_1_E_b = false;  $scope.kitchen_8_12_1_E_c = false; $scope.kitchen_8_12_1_E = ''; }else{ $scope.kitchen_8_12_1_E = ''; $scope.kitchen_8_12_1_E_cm = ''; $scope.kitchen_8_12_1_E = false; $scope.kitchen_8_12_1_E_b = false; $scope.kitchen_8_12_1_E_c = false; }
				if(data.kitchen_8_12_1_F == 0){ $scope.kitchen_8_12_1_F = data.kitchen_8_12_1_F; $scope.kitchen_8_12_1_F = true; $scope.kitchen_8_12_1_F_b = false; $scope.kitchen_8_12_1_F_c = false; $scope.kitchen_8_12_1_F_cm = ''; } else if(data.kitchen_8_12_1_F  == 3){ $scope.kitchen_8_12_1_F = data.kitchen_8_12_1_F; $scope.kitchen_8_12_1_F = false; $scope.kitchen_8_12_1_F_b = true; $scope.kitchen_8_12_1_F_c = false; $scope.kitchen_8_12_1_F_cm = ''; } else if(data.kitchen_8_12_1_F  == 5){ $scope.kitchen_8_12_1_F = data.kitchen_8_12_1_F; $scope.kitchen_8_12_1_F = false; $scope.kitchen_8_12_1_F_b = false; $scope.kitchen_8_12_1_F_c = true; $scope.kitchen_8_12_1_F_cm = ''; }else if( ((data.kitchen_8_12_1_F  > 0 ) && (data.kitchen_8_12_1_F  < 3)) || ((data.kitchen_8_12_1_F  > 3 ) && (data.kitchen_8_12_1_F  < 5)) )
				{ $scope.kitchen_8_12_1_F_cm = data.kitchen_8_12_1_F; $scope.kitchen_8_12_1_F = false; $scope.kitchen_8_12_1_F_b = false;  $scope.kitchen_8_12_1_F_c = false; $scope.kitchen_8_12_1_F = ''; }else{ $scope.kitchen_8_12_1_F = ''; $scope.kitchen_8_12_1_F_cm = ''; $scope.kitchen_8_12_1_F = false; $scope.kitchen_8_12_1_F_b = false; $scope.kitchen_8_12_1_F_c = false; }
				if(data.kitchen_8_12_1_G == 0){ $scope.kitchen_8_12_1_G = data.kitchen_8_12_1_G; $scope.kitchen_8_12_1_G = true; $scope.kitchen_8_12_1_G_b = false; $scope.kitchen_8_12_1_G_c = false; $scope.kitchen_8_12_1_G_cm = ''; } else if(data.kitchen_8_12_1_G  == 3){ $scope.kitchen_8_12_1_G = data.kitchen_8_12_1_G; $scope.kitchen_8_12_1_G = false; $scope.kitchen_8_12_1_G_b = true; $scope.kitchen_8_12_1_G_c = false; $scope.kitchen_8_12_1_G_cm = ''; } else if(data.kitchen_8_12_1_G  == 5){ $scope.kitchen_8_12_1_G = data.kitchen_8_12_1_G; $scope.kitchen_8_12_1_G = false; $scope.kitchen_8_12_1_G_b = false; $scope.kitchen_8_12_1_G_c = true; $scope.kitchen_8_12_1_G_cm = ''; }else if( ((data.kitchen_8_12_1_G  > 0 ) && (data.kitchen_8_12_1_G  < 3)) || ((data.kitchen_8_12_1_G  > 3 ) && (data.kitchen_8_12_1_G  < 5)) )
				{ $scope.kitchen_8_12_1_G_cm = data.kitchen_8_12_1_G; $scope.kitchen_8_12_1_G = false; $scope.kitchen_8_12_1_G_b = false;  $scope.kitchen_8_12_1_G_c = false; $scope.kitchen_8_12_1_G = ''; }else{ $scope.kitchen_8_12_1_G = ''; $scope.kitchen_8_12_1_G_cm = ''; $scope.kitchen_8_12_1_G = false; $scope.kitchen_8_12_1_G_b = false; $scope.kitchen_8_12_1_G_c = false; }
				$scope.kitchen_8_13_1_text = data.kitchen_8_13_1_text;
				if(data.kitchen_8_13_1_A_a == 2){ $scope.kitchen_8_13_1_A_a = data.kitchen_8_13_1_A_a; $scope.kitchen_8_13_1_A_a= true; $scope.kitchen_8_13_1_A_a_cm = ''; } else if((data.kitchen_8_13_1_A_a > 0 ) && (data.kitchen_8_13_1_A_a < 2)){ $scope.kitchen_8_13_1_A_a_cm = data.kitchen_8_13_1_A_a; $scope.kitchen_8_13_1_A_a= false; $scope.kitchen_8_13_1_A_a= ''; }else{ $scope.kitchen_8_13_1_A_a= ''; $scope.kitchen_8_13_1_A_a_cm = ''; $scope.kitchen_8_13_1_A_a= false; }
				if(data.kitchen_8_13_1_A_b == 3){ $scope.kitchen_8_13_1_A_b = data.kitchen_8_13_1_A_b; $scope.kitchen_8_13_1_A_b= true; $scope.kitchen_8_13_1_A_b_cm = ''; } else if((data.kitchen_8_13_1_A_b > 0 ) && (data.kitchen_8_13_1_A_b < 3)){ $scope.kitchen_8_13_1_A_b_cm = data.kitchen_8_13_1_A_b; $scope.kitchen_8_13_1_A_b= false; $scope.kitchen_8_13_1_A_b= ''; }else{ $scope.kitchen_8_13_1_A_b= ''; $scope.kitchen_8_13_1_A_b_cm = ''; $scope.kitchen_8_13_1_A_b= false; }
				if(data.kitchen_8_13_1_A_c == 4){ $scope.kitchen_8_13_1_A_c = data.kitchen_8_13_1_A_c; $scope.kitchen_8_13_1_A_c= true; $scope.kitchen_8_13_1_A_c_cm = ''; } else if((data.kitchen_8_13_1_A_c > 0 ) && (data.kitchen_8_13_1_A_c < 4)){ $scope.kitchen_8_13_1_A_c_cm = data.kitchen_8_13_1_A_c; $scope.kitchen_8_13_1_A_c= false; $scope.kitchen_8_13_1_A_c= ''; }else{ $scope.kitchen_8_13_1_A_c= ''; $scope.kitchen_8_13_1_A_c_cm = ''; $scope.kitchen_8_13_1_A_c= false; }
				if(data.kitchen_8_13_1_B == 5){ $scope.kitchen_8_13_1_B = data.kitchen_8_13_1_B; $scope.kitchen_8_13_1_B = true; $scope.kitchen_8_13_1_B_b = false; $scope.kitchen_8_13_1_B_c = false; $scope.kitchen_8_13_1_B_cm = ''; } else if(data.kitchen_8_13_1_B  == 8){ $scope.kitchen_8_13_1_B = data.kitchen_8_13_1_B; $scope.kitchen_8_13_1_B = false; $scope.kitchen_8_13_1_B_b = true; $scope.kitchen_8_13_1_B_c = false; $scope.kitchen_8_13_1_B_cm = ''; } else if(data.kitchen_8_13_1_B  == 15){ 
				$scope.kitchen_8_13_1_B = data.kitchen_8_13_1_B; $scope.kitchen_8_13_1_B = false; $scope.kitchen_8_13_1_B_b = false; $scope.kitchen_8_13_1_B_c = true; $scope.kitchen_8_13_1_B_cm = ''; } else if( ((data.kitchen_8_13_1_B  >= 0 ) && (data.kitchen_8_13_1_B  < 5)) || ((data.kitchen_8_13_1_B  > 5 ) && (data.kitchen_8_13_1_B  < 8)) || ((data.kitchen_8_13_1_B  > 8 ) && (data.kitchen_8_13_1_B  < 15)) ){ $scope.kitchen_8_13_1_B_cm = data.kitchen_8_13_1_B; $scope.kitchen_8_13_1_B = false; $scope.kitchen_8_13_1_B_b = false; $scope.kitchen_8_13_1_B_c = false; $scope.kitchen_8_13_1_B = ''; }else{ $scope.kitchen_8_13_1_B = ''; $scope.kitchen_8_13_1_B_cm = ''; $scope.kitchen_8_13_1_B = false; $scope.kitchen_8_13_1_B_b = false; $scope.kitchen_8_13_1_B_c = false;}
				if(data.kitchen_8_13_1_C_a == 4){ $scope.kitchen_8_13_1_C_a = data.kitchen_8_13_1_C_a; $scope.kitchen_8_13_1_C_a= true; $scope.kitchen_8_13_1_C_a_cm = ''; } else if((data.kitchen_8_13_1_C_a > 0 ) && (data.kitchen_8_13_1_C_a < 4)){ $scope.kitchen_8_13_1_C_a_cm = data.kitchen_8_13_1_C_a; $scope.kitchen_8_13_1_C_a= false; $scope.kitchen_8_13_1_C_a= ''; }else{ $scope.kitchen_8_13_1_C_a= ''; $scope.kitchen_8_13_1_C_a_cm = ''; $scope.kitchen_8_13_1_C_a= false; }
				if(data.kitchen_8_13_1_C_b == 3){ $scope.kitchen_8_13_1_C_b = data.kitchen_8_13_1_C_b; $scope.kitchen_8_13_1_C_b= true; $scope.kitchen_8_13_1_C_b_cm = ''; } else if((data.kitchen_8_13_1_C_b > 0 ) && (data.kitchen_8_13_1_C_b < 3)){ $scope.kitchen_8_13_1_C_b_cm = data.kitchen_8_13_1_C_b; $scope.kitchen_8_13_1_C_b= false; $scope.kitchen_8_13_1_C_b= ''; }else{ $scope.kitchen_8_13_1_C_b= ''; $scope.kitchen_8_13_1_C_b_cm = ''; $scope.kitchen_8_13_1_C_b= false; }
				if(data.kitchen_8_13_1_C_c == 3){ $scope.kitchen_8_13_1_C_c = data.kitchen_8_13_1_C_c; $scope.kitchen_8_13_1_C_c= true; $scope.kitchen_8_13_1_C_c_cm = ''; } else if((data.kitchen_8_13_1_C_c > 0 ) && (data.kitchen_8_13_1_C_c < 3)){ $scope.kitchen_8_13_1_C_c_cm = data.kitchen_8_13_1_C_c; $scope.kitchen_8_13_1_C_c= false; $scope.kitchen_8_13_1_C_c= ''; }else{ $scope.kitchen_8_13_1_C_c= ''; $scope.kitchen_8_13_1_C_c_cm = ''; $scope.kitchen_8_13_1_C_c= false; }
				if(data.kitchen_8_13_1_C_d == 3){ $scope.kitchen_8_13_1_C_d = data.kitchen_8_13_1_C_d; $scope.kitchen_8_13_1_C_d= true; $scope.kitchen_8_13_1_C_d_cm = ''; } else if((data.kitchen_8_13_1_C_d > 0 ) && (data.kitchen_8_13_1_C_d < 3)){ $scope.kitchen_8_13_1_C_d_cm = data.kitchen_8_13_1_C_d; $scope.kitchen_8_13_1_C_d= false; $scope.kitchen_8_13_1_C_d= ''; }else{ $scope.kitchen_8_13_1_C_d= ''; $scope.kitchen_8_13_1_C_d_cm = ''; $scope.kitchen_8_13_1_C_d= false; }
				if(data.kitchen_8_13_1_C_e == 3){ $scope.kitchen_8_13_1_C_e = data.kitchen_8_13_1_C_e; $scope.kitchen_8_13_1_C_e= true; $scope.kitchen_8_13_1_C_e_cm = ''; } else if((data.kitchen_8_13_1_C_e > 0 ) && (data.kitchen_8_13_1_C_e < 3)){ $scope.kitchen_8_13_1_C_e_cm = data.kitchen_8_13_1_C_e; $scope.kitchen_8_13_1_C_e= false; $scope.kitchen_8_13_1_C_e= ''; }else{ $scope.kitchen_8_13_1_C_e= ''; $scope.kitchen_8_13_1_C_e_cm = ''; $scope.kitchen_8_13_1_C_e= false; }
				if(data.kitchen_8_13_1_D_a == 5){ $scope.kitchen_8_13_1_D_a = data.kitchen_8_13_1_D_a; $scope.kitchen_8_13_1_D_a= true; $scope.kitchen_8_13_1_D_a_cm = ''; } else if((data.kitchen_8_13_1_D_a > 0 ) && (data.kitchen_8_13_1_D_a < 5)){ $scope.kitchen_8_13_1_D_a_cm = data.kitchen_8_13_1_D_a; $scope.kitchen_8_13_1_D_a= false; $scope.kitchen_8_13_1_D_a= ''; }else{ $scope.kitchen_8_13_1_D_a= ''; $scope.kitchen_8_13_1_D_a_cm = ''; $scope.kitchen_8_13_1_D_a= false; }
				if(data.kitchen_8_13_1_D_b == 5){ $scope.kitchen_8_13_1_D_b = data.kitchen_8_13_1_D_b; $scope.kitchen_8_13_1_D_b= true; $scope.kitchen_8_13_1_D_b_cm = ''; } else if((data.kitchen_8_13_1_D_b > 0 ) && (data.kitchen_8_13_1_D_b < 5)){ $scope.kitchen_8_13_1_D_b_cm = data.kitchen_8_13_1_D_b; $scope.kitchen_8_13_1_D_b= false; $scope.kitchen_8_13_1_D_b= ''; }else{ $scope.kitchen_8_13_1_D_b= ''; $scope.kitchen_8_13_1_D_b_cm = ''; $scope.kitchen_8_13_1_D_b= false; }
				if(data.kitchen_8_13_1_E == 0){ $scope.kitchen_8_13_1_E = data.kitchen_8_13_1_E; $scope.kitchen_8_13_1_E = true; $scope.kitchen_8_13_1_E_b = false; $scope.kitchen_8_13_1_E_c = false; $scope.kitchen_8_13_1_E_cm = ''; } else if(data.kitchen_8_13_1_E  == 10){ $scope.kitchen_8_13_1_E = data.kitchen_8_13_1_E; $scope.kitchen_8_13_1_E = false; $scope.kitchen_8_13_1_E_b = true; $scope.kitchen_8_13_1_E_c = false; $scope.kitchen_8_13_1_E_cm = ''; } else if(data.kitchen_8_13_1_E  == ){ $scope.kitchen_8_13_1_E = data.kitchen_8_13_1_E; $scope.kitchen_8_13_1_E = false; $scope.kitchen_8_13_1_E_b = false; $scope.kitchen_8_13_1_E_c = true; $scope.kitchen_8_13_1_E_cm = ''; }else if( ((data.kitchen_8_13_1_E  > 0 ) && (data.kitchen_8_13_1_E  < 10)) || ((data.kitchen_8_13_1_E  > 10 ) && (data.kitchen_8_13_1_E  < )) )
				{ $scope.kitchen_8_13_1_E_cm = data.kitchen_8_13_1_E; $scope.kitchen_8_13_1_E = false; $scope.kitchen_8_13_1_E_b = false;  $scope.kitchen_8_13_1_E_c = false; $scope.kitchen_8_13_1_E = ''; }else{ $scope.kitchen_8_13_1_E = ''; $scope.kitchen_8_13_1_E_cm = ''; $scope.kitchen_8_13_1_E = false; $scope.kitchen_8_13_1_E_b = false; $scope.kitchen_8_13_1_E_c = false; }
				if(data.kitchen_8_13_1_F == 0){ $scope.kitchen_8_13_1_F = data.kitchen_8_13_1_F; $scope.kitchen_8_13_1_F = true; $scope.kitchen_8_13_1_F_b = false; $scope.kitchen_8_13_1_F_c = false; $scope.kitchen_8_13_1_F_cm = ''; } else if(data.kitchen_8_13_1_F  == 3){ $scope.kitchen_8_13_1_F = data.kitchen_8_13_1_F; $scope.kitchen_8_13_1_F = false; $scope.kitchen_8_13_1_F_b = true; $scope.kitchen_8_13_1_F_c = false; $scope.kitchen_8_13_1_F_cm = ''; } else if(data.kitchen_8_13_1_F  == 5){ $scope.kitchen_8_13_1_F = data.kitchen_8_13_1_F; $scope.kitchen_8_13_1_F = false; $scope.kitchen_8_13_1_F_b = false; $scope.kitchen_8_13_1_F_c = true; $scope.kitchen_8_13_1_F_cm = ''; }else if( ((data.kitchen_8_13_1_F  > 0 ) && (data.kitchen_8_13_1_F  < 3)) || ((data.kitchen_8_13_1_F  > 3 ) && (data.kitchen_8_13_1_F  < 5)) )
				{ $scope.kitchen_8_13_1_F_cm = data.kitchen_8_13_1_F; $scope.kitchen_8_13_1_F = false; $scope.kitchen_8_13_1_F_b = false;  $scope.kitchen_8_13_1_F_c = false; $scope.kitchen_8_13_1_F = ''; }else{ $scope.kitchen_8_13_1_F = ''; $scope.kitchen_8_13_1_F_cm = ''; $scope.kitchen_8_13_1_F = false; $scope.kitchen_8_13_1_F_b = false; $scope.kitchen_8_13_1_F_c = false; }
				$scope.kitchen_8_14_1_text = data.kitchen_8_14_1_text;
				if(data.kitchen_8_14_1_A  == 2){ $scope.kitchen_8_14_1_A  = data.kitchen_8_14_1_A ; $scope.kitchen_8_14_1_A = true; $scope.kitchen_8_14_1_A_b = false; $scope.kitchen_8_14_1_A_cm = ''; } else if(data.kitchen_8_14_1_A  == 5){ $scope.kitchen_8_14_1_A  = data.kitchen_8_14_1_A ; $scope.kitchen_8_14_1_A = false; $scope.kitchen_8_14_1_A_b = true; $scope.kitchen_8_14_1_A_cm = ''; }else if( ((data.kitchen_8_14_1_A  > 0 ) && (data.kitchen_8_14_1_A  < 2)) || ((data.kitchen_8_14_1_A  > 2 ) && (data.kitchen_8_14_1_A  < 5)))
				{ $scope.kitchen_8_14_1_A_cm = data.kitchen_8_14_1_A ; $scope.kitchen_8_14_1_A = false; $scope.kitchen_8_14_1_A_b = false; $scope.kitchen_8_14_1_A  = ''; }else{ $scope.kitchen_8_14_1_A  = ''; $scope.kitchen_8_14_1_A_cm = ''; $scope.kitchen_8_14_1_A = false; $scope.kitchen_8_14_1_A_b = false; }
				if(data.kitchen_8_14_1_B == 7){ $scope.kitchen_8_14_1_B = data.kitchen_8_14_1_B; $scope.kitchen_8_14_1_B = true; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = false; $scope.kitchen_8_14_1_B_cm = ''; } else if(data.kitchen_8_14_1_B  == 10){ $scope.kitchen_8_14_1_B = data.kitchen_8_14_1_B; $scope.kitchen_8_14_1_B = false; $scope.kitchen_8_14_1_B_b = true; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = false; $scope.kitchen_8_14_1_B_cm = ''; } else if(data.kitchen_8_14_1_B  == 13){ $scope.kitchen_8_14_1_B = data.kitchen_8_14_1_B; $scope.kitchen_8_14_1_B = false; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = true; $scope.kitchen_8_14_1_B_d = false; $scope.kitchen_8_14_1_B_cm = ''; }else if(data.kitchen_8_14_1_B  == 15){ $scope.kitchen_8_14_1_B = data.kitchen_8_14_1_B; $scope.kitchen_8_14_1_B = false; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = true; $scope.kitchen_8_14_1_B_cm = ''; } else if( ((data.kitchen_8_14_1_B  >= 0 ) && (data.kitchen_8_14_1_B  < 7)) || ((data.kitchen_8_14_1_B  > 7 ) && (data.kitchen_8_14_1_B  < 10)) || ((data.kitchen_8_14_1_B  > 10 ) && (data.kitchen_8_14_1_B  < 13)) || ((data.kitchen_8_14_1_B  > 13 ) && (data.kitchen_8_14_1_B  < 15)) )
				{ $scope.kitchen_8_14_1_B_cm = data.kitchen_8_14_1_B; $scope.kitchen_8_14_1_B = false; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = false; $scope.kitchen_8_14_1_B = ''; }else{ $scope.kitchen_8_14_1_B = ''; $scope.kitchen_8_14_1_B_cm = ''; $scope.kitchen_8_14_1_B = false; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = false;}
				if(data.kitchen_8_14_1_C == 8){ $scope.kitchen_8_14_1_C = data.kitchen_8_14_1_C; $scope.kitchen_8_14_1_C = true; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = false; $scope.kitchen_8_14_1_C_cm = ''; } else if(data.kitchen_8_14_1_C  == 12){ $scope.kitchen_8_14_1_C = data.kitchen_8_14_1_C; $scope.kitchen_8_14_1_C = false; $scope.kitchen_8_14_1_C_b = true; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = false; $scope.kitchen_8_14_1_C_cm = ''; } else if(data.kitchen_8_14_1_C  == 16){ $scope.kitchen_8_14_1_C = data.kitchen_8_14_1_C; $scope.kitchen_8_14_1_C = false; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = true; $scope.kitchen_8_14_1_C_d = false; $scope.kitchen_8_14_1_C_cm = ''; }else if(data.kitchen_8_14_1_C  == 20){ $scope.kitchen_8_14_1_C = data.kitchen_8_14_1_C; $scope.kitchen_8_14_1_C = false; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = true; $scope.kitchen_8_14_1_C_cm = ''; } else if( ((data.kitchen_8_14_1_C  >= 0 ) && (data.kitchen_8_14_1_C  < 8)) || ((data.kitchen_8_14_1_C  > 8 ) && (data.kitchen_8_14_1_C  < 12)) || ((data.kitchen_8_14_1_C  > 12 ) && (data.kitchen_8_14_1_C  < 16)) || ((data.kitchen_8_14_1_C  > 16 ) && (data.kitchen_8_14_1_C  < 20)) )
				{ $scope.kitchen_8_14_1_C_cm = data.kitchen_8_14_1_C; $scope.kitchen_8_14_1_C = false; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = false; $scope.kitchen_8_14_1_C = ''; }else{ $scope.kitchen_8_14_1_C = ''; $scope.kitchen_8_14_1_C_cm = ''; $scope.kitchen_8_14_1_C = false; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = false;}
				if(data.kitchen_8_14_1_D == 3){ $scope.kitchen_8_14_1_D = data.kitchen_8_14_1_D; $scope.kitchen_8_14_1_D = true; $scope.kitchen_8_14_1_D_b = false; $scope.kitchen_8_14_1_D_c = false; $scope.kitchen_8_14_1_D_cm = ''; } else if(data.kitchen_8_14_1_D  == 7){ $scope.kitchen_8_14_1_D = data.kitchen_8_14_1_D; $scope.kitchen_8_14_1_D = false; $scope.kitchen_8_14_1_D_b = true; $scope.kitchen_8_14_1_D_c = false; $scope.kitchen_8_14_1_D_cm = ''; } else if(data.kitchen_8_14_1_D  == 10){ 
				$scope.kitchen_8_14_1_D = data.kitchen_8_14_1_D; $scope.kitchen_8_14_1_D = false; $scope.kitchen_8_14_1_D_b = false; $scope.kitchen_8_14_1_D_c = true; $scope.kitchen_8_14_1_D_cm = ''; } else if( ((data.kitchen_8_14_1_D  >= 0 ) && (data.kitchen_8_14_1_D  < 3)) || ((data.kitchen_8_14_1_D  > 3 ) && (data.kitchen_8_14_1_D  < 7)) || ((data.kitchen_8_14_1_D  > 7 ) && (data.kitchen_8_14_1_D  < 10)) ){ $scope.kitchen_8_14_1_D_cm = data.kitchen_8_14_1_D; $scope.kitchen_8_14_1_D = false; $scope.kitchen_8_14_1_D_b = false; $scope.kitchen_8_14_1_D_c = false; $scope.kitchen_8_14_1_D = ''; }else{ $scope.kitchen_8_14_1_D = ''; $scope.kitchen_8_14_1_D_cm = ''; $scope.kitchen_8_14_1_D = false; $scope.kitchen_8_14_1_D_b = false; $scope.kitchen_8_14_1_D_c = false;}
				if(data.kitchen_8_14_1_E == 1){ $scope.kitchen_8_14_1_E = data.kitchen_8_14_1_E; $scope.kitchen_8_14_1_E = true; $scope.kitchen_8_14_1_E_b = false; $scope.kitchen_8_14_1_E_c = false; $scope.kitchen_8_14_1_E_cm = ''; } else if(data.kitchen_8_14_1_E  == 3){ $scope.kitchen_8_14_1_E = data.kitchen_8_14_1_E; $scope.kitchen_8_14_1_E = false; $scope.kitchen_8_14_1_E_b = true; $scope.kitchen_8_14_1_E_c = false; $scope.kitchen_8_14_1_E_cm = ''; } else if(data.kitchen_8_14_1_E  == 5){ 
				$scope.kitchen_8_14_1_E = data.kitchen_8_14_1_E; $scope.kitchen_8_14_1_E = false; $scope.kitchen_8_14_1_E_b = false; $scope.kitchen_8_14_1_E_c = true; $scope.kitchen_8_14_1_E_cm = ''; } else if( ((data.kitchen_8_14_1_E  >= 0 ) && (data.kitchen_8_14_1_E  < 1)) || ((data.kitchen_8_14_1_E  > 1 ) && (data.kitchen_8_14_1_E  < 3)) || ((data.kitchen_8_14_1_E  > 3 ) && (data.kitchen_8_14_1_E  < 5)) ){ $scope.kitchen_8_14_1_E_cm = data.kitchen_8_14_1_E; $scope.kitchen_8_14_1_E = false; $scope.kitchen_8_14_1_E_b = false; $scope.kitchen_8_14_1_E_c = false; $scope.kitchen_8_14_1_E = ''; }else{ $scope.kitchen_8_14_1_E = ''; $scope.kitchen_8_14_1_E_cm = ''; $scope.kitchen_8_14_1_E = false; $scope.kitchen_8_14_1_E_b = false; $scope.kitchen_8_14_1_E_c = false;}
				if(data.kitchen_8_14_1_F == 0){ $scope.kitchen_8_14_1_F = data.kitchen_8_14_1_F; $scope.kitchen_8_14_1_F = true; $scope.kitchen_8_14_1_F_b = false; $scope.kitchen_8_14_1_F_c = false; $scope.kitchen_8_14_1_F_cm = ''; } else if(data.kitchen_8_14_1_F  == 5){ $scope.kitchen_8_14_1_F = data.kitchen_8_14_1_F; $scope.kitchen_8_14_1_F = false; $scope.kitchen_8_14_1_F_b = true; $scope.kitchen_8_14_1_F_c = false; $scope.kitchen_8_14_1_F_cm = ''; } else if(data.kitchen_8_14_1_F  == ){ $scope.kitchen_8_14_1_F = data.kitchen_8_14_1_F; $scope.kitchen_8_14_1_F = false; $scope.kitchen_8_14_1_F_b = false; $scope.kitchen_8_14_1_F_c = true; $scope.kitchen_8_14_1_F_cm = ''; }else if( ((data.kitchen_8_14_1_F  > 0 ) && (data.kitchen_8_14_1_F  < 5)) || ((data.kitchen_8_14_1_F  > 5 ) && (data.kitchen_8_14_1_F  < )) )
				{ $scope.kitchen_8_14_1_F_cm = data.kitchen_8_14_1_F; $scope.kitchen_8_14_1_F = false; $scope.kitchen_8_14_1_F_b = false;  $scope.kitchen_8_14_1_F_c = false; $scope.kitchen_8_14_1_F = ''; }else{ $scope.kitchen_8_14_1_F = ''; $scope.kitchen_8_14_1_F_cm = ''; $scope.kitchen_8_14_1_F = false; $scope.kitchen_8_14_1_F_b = false; $scope.kitchen_8_14_1_F_c = false; }
				if(data.kitchen_8_14_1_G == 1){ $scope.kitchen_8_14_1_G = data.kitchen_8_14_1_G; $scope.kitchen_8_14_1_G = true; $scope.kitchen_8_14_1_G_b = false; $scope.kitchen_8_14_1_G_c = false; $scope.kitchen_8_14_1_G_cm = ''; } else if(data.kitchen_8_14_1_G  == 3){ $scope.kitchen_8_14_1_G = data.kitchen_8_14_1_G; $scope.kitchen_8_14_1_G = false; $scope.kitchen_8_14_1_G_b = true; $scope.kitchen_8_14_1_G_c = false; $scope.kitchen_8_14_1_G_cm = ''; } else if(data.kitchen_8_14_1_G  == 5){ 
				$scope.kitchen_8_14_1_G = data.kitchen_8_14_1_G; $scope.kitchen_8_14_1_G = false; $scope.kitchen_8_14_1_G_b = false; $scope.kitchen_8_14_1_G_c = true; $scope.kitchen_8_14_1_G_cm = ''; } else if( ((data.kitchen_8_14_1_G  >= 0 ) && (data.kitchen_8_14_1_G  < 1)) || ((data.kitchen_8_14_1_G  > 1 ) && (data.kitchen_8_14_1_G  < 3)) || ((data.kitchen_8_14_1_G  > 3 ) && (data.kitchen_8_14_1_G  < 5)) ){ $scope.kitchen_8_14_1_G_cm = data.kitchen_8_14_1_G; $scope.kitchen_8_14_1_G = false; $scope.kitchen_8_14_1_G_b = false; $scope.kitchen_8_14_1_G_c = false; $scope.kitchen_8_14_1_G = ''; }else{ $scope.kitchen_8_14_1_G = ''; $scope.kitchen_8_14_1_G_cm = ''; $scope.kitchen_8_14_1_G = false; $scope.kitchen_8_14_1_G_b = false; $scope.kitchen_8_14_1_G_c = false;}
				if(data.kitchen_8_14_1_H == 0){ $scope.kitchen_8_14_1_H = data.kitchen_8_14_1_H; $scope.kitchen_8_14_1_H = true; $scope.kitchen_8_14_1_H_b = false; $scope.kitchen_8_14_1_H_c = false; $scope.kitchen_8_14_1_H_cm = ''; } else if(data.kitchen_8_14_1_H  == 5){ $scope.kitchen_8_14_1_H = data.kitchen_8_14_1_H; $scope.kitchen_8_14_1_H = false; $scope.kitchen_8_14_1_H_b = true; $scope.kitchen_8_14_1_H_c = false; $scope.kitchen_8_14_1_H_cm = ''; } else if(data.kitchen_8_14_1_H  == ){ $scope.kitchen_8_14_1_H = data.kitchen_8_14_1_H; $scope.kitchen_8_14_1_H = false; $scope.kitchen_8_14_1_H_b = false; $scope.kitchen_8_14_1_H_c = true; $scope.kitchen_8_14_1_H_cm = ''; }else if( ((data.kitchen_8_14_1_H  > 0 ) && (data.kitchen_8_14_1_H  < 5)) || ((data.kitchen_8_14_1_H  > 5 ) && (data.kitchen_8_14_1_H  < )) )
				{ $scope.kitchen_8_14_1_H_cm = data.kitchen_8_14_1_H; $scope.kitchen_8_14_1_H = false; $scope.kitchen_8_14_1_H_b = false;  $scope.kitchen_8_14_1_H_c = false; $scope.kitchen_8_14_1_H = ''; }else{ $scope.kitchen_8_14_1_H = ''; $scope.kitchen_8_14_1_H_cm = ''; $scope.kitchen_8_14_1_H = false; $scope.kitchen_8_14_1_H_b = false; $scope.kitchen_8_14_1_H_c = false; }
				if(data.kitchen_8_14_1_I == 1){ $scope.kitchen_8_14_1_I = data.kitchen_8_14_1_I; $scope.kitchen_8_14_1_I = true; $scope.kitchen_8_14_1_I_b = false; $scope.kitchen_8_14_1_I_c = false; $scope.kitchen_8_14_1_I_cm = ''; } else if(data.kitchen_8_14_1_I  == 2){ $scope.kitchen_8_14_1_I = data.kitchen_8_14_1_I; $scope.kitchen_8_14_1_I = false; $scope.kitchen_8_14_1_I_b = true; $scope.kitchen_8_14_1_I_c = false; $scope.kitchen_8_14_1_I_cm = ''; } else if(data.kitchen_8_14_1_I  == 3){ 
				$scope.kitchen_8_14_1_I = data.kitchen_8_14_1_I; $scope.kitchen_8_14_1_I = false; $scope.kitchen_8_14_1_I_b = false; $scope.kitchen_8_14_1_I_c = true; $scope.kitchen_8_14_1_I_cm = ''; } else if( ((data.kitchen_8_14_1_I  >= 0 ) && (data.kitchen_8_14_1_I  < 1)) || ((data.kitchen_8_14_1_I  > 1 ) && (data.kitchen_8_14_1_I  < 2)) || ((data.kitchen_8_14_1_I  > 2 ) && (data.kitchen_8_14_1_I  < 3)) ){ $scope.kitchen_8_14_1_I_cm = data.kitchen_8_14_1_I; $scope.kitchen_8_14_1_I = false; $scope.kitchen_8_14_1_I_b = false; $scope.kitchen_8_14_1_I_c = false; $scope.kitchen_8_14_1_I = ''; }else{ $scope.kitchen_8_14_1_I = ''; $scope.kitchen_8_14_1_I_cm = ''; $scope.kitchen_8_14_1_I = false; $scope.kitchen_8_14_1_I_b = false; $scope.kitchen_8_14_1_I_c = false;}
				if(data.kitchen_8_14_1_J == 2){ $scope.kitchen_8_14_1_J = data.kitchen_8_14_1_J; $scope.kitchen_8_14_1_J = true; $scope.kitchen_8_14_1_J_b = false; $scope.kitchen_8_14_1_J_c = false; $scope.kitchen_8_14_1_J_cm = ''; } else if(data.kitchen_8_14_1_J  == 3){ $scope.kitchen_8_14_1_J = data.kitchen_8_14_1_J; $scope.kitchen_8_14_1_J = false; $scope.kitchen_8_14_1_J_b = true; $scope.kitchen_8_14_1_J_c = false; $scope.kitchen_8_14_1_J_cm = ''; } else if(data.kitchen_8_14_1_J  == 5){ 
				$scope.kitchen_8_14_1_J = data.kitchen_8_14_1_J; $scope.kitchen_8_14_1_J = false; $scope.kitchen_8_14_1_J_b = false; $scope.kitchen_8_14_1_J_c = true; $scope.kitchen_8_14_1_J_cm = ''; } else if( ((data.kitchen_8_14_1_J  >= 0 ) && (data.kitchen_8_14_1_J  < 2)) || ((data.kitchen_8_14_1_J  > 2 ) && (data.kitchen_8_14_1_J  < 3)) || ((data.kitchen_8_14_1_J  > 3 ) && (data.kitchen_8_14_1_J  < 5)) ){ $scope.kitchen_8_14_1_J_cm = data.kitchen_8_14_1_J; $scope.kitchen_8_14_1_J = false; $scope.kitchen_8_14_1_J_b = false; $scope.kitchen_8_14_1_J_c = false; $scope.kitchen_8_14_1_J = ''; }else{ $scope.kitchen_8_14_1_J = ''; $scope.kitchen_8_14_1_J_cm = ''; $scope.kitchen_8_14_1_J = false; $scope.kitchen_8_14_1_J_b = false; $scope.kitchen_8_14_1_J_c = false;}
				if(data.kitchen_8_14_1_K == 0){ $scope.kitchen_8_14_1_K = data.kitchen_8_14_1_K; $scope.kitchen_8_14_1_K = true; $scope.kitchen_8_14_1_K_b = false; $scope.kitchen_8_14_1_K_c = false; $scope.kitchen_8_14_1_K_cm = ''; } else if(data.kitchen_8_14_1_K  == 2){ $scope.kitchen_8_14_1_K = data.kitchen_8_14_1_K; $scope.kitchen_8_14_1_K = false; $scope.kitchen_8_14_1_K_b = true; $scope.kitchen_8_14_1_K_c = false; $scope.kitchen_8_14_1_K_cm = ''; } else if(data.kitchen_8_14_1_K  == ){ $scope.kitchen_8_14_1_K = data.kitchen_8_14_1_K; $scope.kitchen_8_14_1_K = false; $scope.kitchen_8_14_1_K_b = false; $scope.kitchen_8_14_1_K_c = true; $scope.kitchen_8_14_1_K_cm = ''; }else if( ((data.kitchen_8_14_1_K  > 0 ) && (data.kitchen_8_14_1_K  < 2)) || ((data.kitchen_8_14_1_K  > 2 ) && (data.kitchen_8_14_1_K  < )) )
				{ $scope.kitchen_8_14_1_K_cm = data.kitchen_8_14_1_K; $scope.kitchen_8_14_1_K = false; $scope.kitchen_8_14_1_K_b = false;  $scope.kitchen_8_14_1_K_c = false; $scope.kitchen_8_14_1_K = ''; }else{ $scope.kitchen_8_14_1_K = ''; $scope.kitchen_8_14_1_K_cm = ''; $scope.kitchen_8_14_1_K = false; $scope.kitchen_8_14_1_K_b = false; $scope.kitchen_8_14_1_K_c = false; }
				$scope.hygiene_and_sanitation_9_1_1_text = data.hygiene_and_sanitation_9_1_1_text;
				if(data.hygiene_and_sanitation_9_1_1_A  == 1){ $scope.hygiene_and_sanitation_9_1_1_A  = data.hygiene_and_sanitation_9_1_1_A ; $scope.hygiene_and_sanitation_9_1_1_A = true; $scope.hygiene_and_sanitation_9_1_1_A_b = false; $scope.hygiene_and_sanitation_9_1_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_A  == 2){ $scope.hygiene_and_sanitation_9_1_1_A  = data.hygiene_and_sanitation_9_1_1_A ; $scope.hygiene_and_sanitation_9_1_1_A = false; $scope.hygiene_and_sanitation_9_1_1_A_b = true; $scope.hygiene_and_sanitation_9_1_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_A  > 0 ) && (data.hygiene_and_sanitation_9_1_1_A  < 1)) || ((data.hygiene_and_sanitation_9_1_1_A  > 1 ) && (data.hygiene_and_sanitation_9_1_1_A  < 2)))
				{ $scope.hygiene_and_sanitation_9_1_1_A_cm = data.hygiene_and_sanitation_9_1_1_A ; $scope.hygiene_and_sanitation_9_1_1_A = false; $scope.hygiene_and_sanitation_9_1_1_A_b = false; $scope.hygiene_and_sanitation_9_1_1_A  = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_A  = ''; $scope.hygiene_and_sanitation_9_1_1_A_cm = ''; $scope.hygiene_and_sanitation_9_1_1_A = false; $scope.hygiene_and_sanitation_9_1_1_A_b = false; }
				if(data.hygiene_and_sanitation_9_1_1_B == 1){ $scope.hygiene_and_sanitation_9_1_1_B = data.hygiene_and_sanitation_9_1_1_B; $scope.hygiene_and_sanitation_9_1_1_B = true; $scope.hygiene_and_sanitation_9_1_1_B_b = false; $scope.hygiene_and_sanitation_9_1_1_B_c = false; $scope.hygiene_and_sanitation_9_1_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_B  == 2){ $scope.hygiene_and_sanitation_9_1_1_B = data.hygiene_and_sanitation_9_1_1_B; $scope.hygiene_and_sanitation_9_1_1_B = false; $scope.hygiene_and_sanitation_9_1_1_B_b = true; $scope.hygiene_and_sanitation_9_1_1_B_c = false; $scope.hygiene_and_sanitation_9_1_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_B  == 3){ 
				$scope.hygiene_and_sanitation_9_1_1_B = data.hygiene_and_sanitation_9_1_1_B; $scope.hygiene_and_sanitation_9_1_1_B = false; $scope.hygiene_and_sanitation_9_1_1_B_b = false; $scope.hygiene_and_sanitation_9_1_1_B_c = true; $scope.hygiene_and_sanitation_9_1_1_B_cm = ''; } else if( ((data.hygiene_and_sanitation_9_1_1_B  >= 0 ) && (data.hygiene_and_sanitation_9_1_1_B  < 1)) || ((data.hygiene_and_sanitation_9_1_1_B  > 1 ) && (data.hygiene_and_sanitation_9_1_1_B  < 2)) || ((data.hygiene_and_sanitation_9_1_1_B  > 2 ) && (data.hygiene_and_sanitation_9_1_1_B  < 3)) ){ $scope.hygiene_and_sanitation_9_1_1_B_cm = data.hygiene_and_sanitation_9_1_1_B; $scope.hygiene_and_sanitation_9_1_1_B = false; $scope.hygiene_and_sanitation_9_1_1_B_b = false; $scope.hygiene_and_sanitation_9_1_1_B_c = false; $scope.hygiene_and_sanitation_9_1_1_B = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_B = ''; $scope.hygiene_and_sanitation_9_1_1_B_cm = ''; $scope.hygiene_and_sanitation_9_1_1_B = false; $scope.hygiene_and_sanitation_9_1_1_B_b = false; $scope.hygiene_and_sanitation_9_1_1_B_c = false;}
				if(data.hygiene_and_sanitation_9_1_1_C == 0){ $scope.hygiene_and_sanitation_9_1_1_C = data.hygiene_and_sanitation_9_1_1_C; $scope.hygiene_and_sanitation_9_1_1_C = true; $scope.hygiene_and_sanitation_9_1_1_C_b = false; $scope.hygiene_and_sanitation_9_1_1_C_c = false; $scope.hygiene_and_sanitation_9_1_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_C  == 1){ $scope.hygiene_and_sanitation_9_1_1_C = data.hygiene_and_sanitation_9_1_1_C; $scope.hygiene_and_sanitation_9_1_1_C = false; $scope.hygiene_and_sanitation_9_1_1_C_b = true; $scope.hygiene_and_sanitation_9_1_1_C_c = false; $scope.hygiene_and_sanitation_9_1_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_C  == 2){ $scope.hygiene_and_sanitation_9_1_1_C = data.hygiene_and_sanitation_9_1_1_C; $scope.hygiene_and_sanitation_9_1_1_C = false; $scope.hygiene_and_sanitation_9_1_1_C_b = false; $scope.hygiene_and_sanitation_9_1_1_C_c = true; $scope.hygiene_and_sanitation_9_1_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_C  > 0 ) && (data.hygiene_and_sanitation_9_1_1_C  < 1)) || ((data.hygiene_and_sanitation_9_1_1_C  > 1 ) && (data.hygiene_and_sanitation_9_1_1_C  < 2)) )
				{ $scope.hygiene_and_sanitation_9_1_1_C_cm = data.hygiene_and_sanitation_9_1_1_C; $scope.hygiene_and_sanitation_9_1_1_C = false; $scope.hygiene_and_sanitation_9_1_1_C_b = false;  $scope.hygiene_and_sanitation_9_1_1_C_c = false; $scope.hygiene_and_sanitation_9_1_1_C = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_C = ''; $scope.hygiene_and_sanitation_9_1_1_C_cm = ''; $scope.hygiene_and_sanitation_9_1_1_C = false; $scope.hygiene_and_sanitation_9_1_1_C_b = false; $scope.hygiene_and_sanitation_9_1_1_C_c = false; }
				if(data.hygiene_and_sanitation_9_1_1_D_a == 1){ $scope.hygiene_and_sanitation_9_1_1_D_a = data.hygiene_and_sanitation_9_1_1_D_a; $scope.hygiene_and_sanitation_9_1_1_D_a= true; $scope.hygiene_and_sanitation_9_1_1_D_a_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_a > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_a < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_a_cm = data.hygiene_and_sanitation_9_1_1_D_a; $scope.hygiene_and_sanitation_9_1_1_D_a= false; $scope.hygiene_and_sanitation_9_1_1_D_a= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_a= ''; $scope.hygiene_and_sanitation_9_1_1_D_a_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_a= false; }
				if(data.hygiene_and_sanitation_9_1_1_D_b == 1){ $scope.hygiene_and_sanitation_9_1_1_D_b = data.hygiene_and_sanitation_9_1_1_D_b; $scope.hygiene_and_sanitation_9_1_1_D_b= true; $scope.hygiene_and_sanitation_9_1_1_D_b_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_b > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_b < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_b_cm = data.hygiene_and_sanitation_9_1_1_D_b; $scope.hygiene_and_sanitation_9_1_1_D_b= false; $scope.hygiene_and_sanitation_9_1_1_D_b= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_b= ''; $scope.hygiene_and_sanitation_9_1_1_D_b_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_b= false; }
				if(data.hygiene_and_sanitation_9_1_1_D_c == 1){ $scope.hygiene_and_sanitation_9_1_1_D_c = data.hygiene_and_sanitation_9_1_1_D_c; $scope.hygiene_and_sanitation_9_1_1_D_c= true; $scope.hygiene_and_sanitation_9_1_1_D_c_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_c > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_c < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_c_cm = data.hygiene_and_sanitation_9_1_1_D_c; $scope.hygiene_and_sanitation_9_1_1_D_c= false; $scope.hygiene_and_sanitation_9_1_1_D_c= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_c= ''; $scope.hygiene_and_sanitation_9_1_1_D_c_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_c= false; }
				if(data.hygiene_and_sanitation_9_1_1_D_d == 1){ $scope.hygiene_and_sanitation_9_1_1_D_d = data.hygiene_and_sanitation_9_1_1_D_d; $scope.hygiene_and_sanitation_9_1_1_D_d= true; $scope.hygiene_and_sanitation_9_1_1_D_d_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_d > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_d < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_d_cm = data.hygiene_and_sanitation_9_1_1_D_d; $scope.hygiene_and_sanitation_9_1_1_D_d= false; $scope.hygiene_and_sanitation_9_1_1_D_d= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_d= ''; $scope.hygiene_and_sanitation_9_1_1_D_d_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_d= false; }
				if(data.hygiene_and_sanitation_9_1_1_D_e == 1){ $scope.hygiene_and_sanitation_9_1_1_D_e = data.hygiene_and_sanitation_9_1_1_D_e; $scope.hygiene_and_sanitation_9_1_1_D_e= true; $scope.hygiene_and_sanitation_9_1_1_D_e_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_e > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_e < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_e_cm = data.hygiene_and_sanitation_9_1_1_D_e; $scope.hygiene_and_sanitation_9_1_1_D_e= false; $scope.hygiene_and_sanitation_9_1_1_D_e= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_e= ''; $scope.hygiene_and_sanitation_9_1_1_D_e_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_e= false; }
				if(data.hygiene_and_sanitation_9_1_1_D_f == 1){ $scope.hygiene_and_sanitation_9_1_1_D_f = data.hygiene_and_sanitation_9_1_1_D_f; $scope.hygiene_and_sanitation_9_1_1_D_f= true; $scope.hygiene_and_sanitation_9_1_1_D_f_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_D_f > 0 ) && (data.hygiene_and_sanitation_9_1_1_D_f < 1)){ $scope.hygiene_and_sanitation_9_1_1_D_f_cm = data.hygiene_and_sanitation_9_1_1_D_f; $scope.hygiene_and_sanitation_9_1_1_D_f= false; $scope.hygiene_and_sanitation_9_1_1_D_f= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_D_f= ''; $scope.hygiene_and_sanitation_9_1_1_D_f_cm = ''; $scope.hygiene_and_sanitation_9_1_1_D_f= false; }
				if(data.hygiene_and_sanitation_9_1_1_E == 1){ $scope.hygiene_and_sanitation_9_1_1_E = data.hygiene_and_sanitation_9_1_1_E; $scope.hygiene_and_sanitation_9_1_1_E = true; $scope.hygiene_and_sanitation_9_1_1_E_b = false; $scope.hygiene_and_sanitation_9_1_1_E_c = false; $scope.hygiene_and_sanitation_9_1_1_E_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_E  == 2){ $scope.hygiene_and_sanitation_9_1_1_E = data.hygiene_and_sanitation_9_1_1_E; $scope.hygiene_and_sanitation_9_1_1_E = false; $scope.hygiene_and_sanitation_9_1_1_E_b = true; $scope.hygiene_and_sanitation_9_1_1_E_c = false; $scope.hygiene_and_sanitation_9_1_1_E_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_E  == 3){ 
				$scope.hygiene_and_sanitation_9_1_1_E = data.hygiene_and_sanitation_9_1_1_E; $scope.hygiene_and_sanitation_9_1_1_E = false; $scope.hygiene_and_sanitation_9_1_1_E_b = false; $scope.hygiene_and_sanitation_9_1_1_E_c = true; $scope.hygiene_and_sanitation_9_1_1_E_cm = ''; } else if( ((data.hygiene_and_sanitation_9_1_1_E  >= 0 ) && (data.hygiene_and_sanitation_9_1_1_E  < 1)) || ((data.hygiene_and_sanitation_9_1_1_E  > 1 ) && (data.hygiene_and_sanitation_9_1_1_E  < 2)) || ((data.hygiene_and_sanitation_9_1_1_E  > 2 ) && (data.hygiene_and_sanitation_9_1_1_E  < 3)) ){ $scope.hygiene_and_sanitation_9_1_1_E_cm = data.hygiene_and_sanitation_9_1_1_E; $scope.hygiene_and_sanitation_9_1_1_E = false; $scope.hygiene_and_sanitation_9_1_1_E_b = false; $scope.hygiene_and_sanitation_9_1_1_E_c = false; $scope.hygiene_and_sanitation_9_1_1_E = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_E = ''; $scope.hygiene_and_sanitation_9_1_1_E_cm = ''; $scope.hygiene_and_sanitation_9_1_1_E = false; $scope.hygiene_and_sanitation_9_1_1_E_b = false; $scope.hygiene_and_sanitation_9_1_1_E_c = false;}
				if(data.hygiene_and_sanitation_9_1_1_F == 1){ $scope.hygiene_and_sanitation_9_1_1_F = data.hygiene_and_sanitation_9_1_1_F; $scope.hygiene_and_sanitation_9_1_1_F = true; $scope.hygiene_and_sanitation_9_1_1_F_b = false; $scope.hygiene_and_sanitation_9_1_1_F_c = false; $scope.hygiene_and_sanitation_9_1_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_F  == 2){ $scope.hygiene_and_sanitation_9_1_1_F = data.hygiene_and_sanitation_9_1_1_F; $scope.hygiene_and_sanitation_9_1_1_F = false; $scope.hygiene_and_sanitation_9_1_1_F_b = true; $scope.hygiene_and_sanitation_9_1_1_F_c = false; $scope.hygiene_and_sanitation_9_1_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_F  == 3){ 
				$scope.hygiene_and_sanitation_9_1_1_F = data.hygiene_and_sanitation_9_1_1_F; $scope.hygiene_and_sanitation_9_1_1_F = false; $scope.hygiene_and_sanitation_9_1_1_F_b = false; $scope.hygiene_and_sanitation_9_1_1_F_c = true; $scope.hygiene_and_sanitation_9_1_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_9_1_1_F  >= 0 ) && (data.hygiene_and_sanitation_9_1_1_F  < 1)) || ((data.hygiene_and_sanitation_9_1_1_F  > 1 ) && (data.hygiene_and_sanitation_9_1_1_F  < 2)) || ((data.hygiene_and_sanitation_9_1_1_F  > 2 ) && (data.hygiene_and_sanitation_9_1_1_F  < 3)) ){ $scope.hygiene_and_sanitation_9_1_1_F_cm = data.hygiene_and_sanitation_9_1_1_F; $scope.hygiene_and_sanitation_9_1_1_F = false; $scope.hygiene_and_sanitation_9_1_1_F_b = false; $scope.hygiene_and_sanitation_9_1_1_F_c = false; $scope.hygiene_and_sanitation_9_1_1_F = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_F = ''; $scope.hygiene_and_sanitation_9_1_1_F_cm = ''; $scope.hygiene_and_sanitation_9_1_1_F = false; $scope.hygiene_and_sanitation_9_1_1_F_b = false; $scope.hygiene_and_sanitation_9_1_1_F_c = false;}
				if(data.hygiene_and_sanitation_9_1_1_G == 0){ $scope.hygiene_and_sanitation_9_1_1_G = data.hygiene_and_sanitation_9_1_1_G; $scope.hygiene_and_sanitation_9_1_1_G = true; $scope.hygiene_and_sanitation_9_1_1_G_b = false; $scope.hygiene_and_sanitation_9_1_1_G_c = false; $scope.hygiene_and_sanitation_9_1_1_G_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_G  == 1){ $scope.hygiene_and_sanitation_9_1_1_G = data.hygiene_and_sanitation_9_1_1_G; $scope.hygiene_and_sanitation_9_1_1_G = false; $scope.hygiene_and_sanitation_9_1_1_G_b = true; $scope.hygiene_and_sanitation_9_1_1_G_c = false; $scope.hygiene_and_sanitation_9_1_1_G_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_G  == ){ $scope.hygiene_and_sanitation_9_1_1_G = data.hygiene_and_sanitation_9_1_1_G; $scope.hygiene_and_sanitation_9_1_1_G = false; $scope.hygiene_and_sanitation_9_1_1_G_b = false; $scope.hygiene_and_sanitation_9_1_1_G_c = true; $scope.hygiene_and_sanitation_9_1_1_G_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_G  > 0 ) && (data.hygiene_and_sanitation_9_1_1_G  < 1)) || ((data.hygiene_and_sanitation_9_1_1_G  > 1 ) && (data.hygiene_and_sanitation_9_1_1_G  < )) )
				{ $scope.hygiene_and_sanitation_9_1_1_G_cm = data.hygiene_and_sanitation_9_1_1_G; $scope.hygiene_and_sanitation_9_1_1_G = false; $scope.hygiene_and_sanitation_9_1_1_G_b = false;  $scope.hygiene_and_sanitation_9_1_1_G_c = false; $scope.hygiene_and_sanitation_9_1_1_G = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_G = ''; $scope.hygiene_and_sanitation_9_1_1_G_cm = ''; $scope.hygiene_and_sanitation_9_1_1_G = false; $scope.hygiene_and_sanitation_9_1_1_G_b = false; $scope.hygiene_and_sanitation_9_1_1_G_c = false; }
				if(data.hygiene_and_sanitation_9_1_1_H == 0){ $scope.hygiene_and_sanitation_9_1_1_H = data.hygiene_and_sanitation_9_1_1_H; $scope.hygiene_and_sanitation_9_1_1_H = true; $scope.hygiene_and_sanitation_9_1_1_H_b = false; $scope.hygiene_and_sanitation_9_1_1_H_c = false; $scope.hygiene_and_sanitation_9_1_1_H_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_H  == 1){ $scope.hygiene_and_sanitation_9_1_1_H = data.hygiene_and_sanitation_9_1_1_H; $scope.hygiene_and_sanitation_9_1_1_H = false; $scope.hygiene_and_sanitation_9_1_1_H_b = true; $scope.hygiene_and_sanitation_9_1_1_H_c = false; $scope.hygiene_and_sanitation_9_1_1_H_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_H  == ){ $scope.hygiene_and_sanitation_9_1_1_H = data.hygiene_and_sanitation_9_1_1_H; $scope.hygiene_and_sanitation_9_1_1_H = false; $scope.hygiene_and_sanitation_9_1_1_H_b = false; $scope.hygiene_and_sanitation_9_1_1_H_c = true; $scope.hygiene_and_sanitation_9_1_1_H_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_H  > 0 ) && (data.hygiene_and_sanitation_9_1_1_H  < 1)) || ((data.hygiene_and_sanitation_9_1_1_H  > 1 ) && (data.hygiene_and_sanitation_9_1_1_H  < )) )
				{ $scope.hygiene_and_sanitation_9_1_1_H_cm = data.hygiene_and_sanitation_9_1_1_H; $scope.hygiene_and_sanitation_9_1_1_H = false; $scope.hygiene_and_sanitation_9_1_1_H_b = false;  $scope.hygiene_and_sanitation_9_1_1_H_c = false; $scope.hygiene_and_sanitation_9_1_1_H = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_H = ''; $scope.hygiene_and_sanitation_9_1_1_H_cm = ''; $scope.hygiene_and_sanitation_9_1_1_H = false; $scope.hygiene_and_sanitation_9_1_1_H_b = false; $scope.hygiene_and_sanitation_9_1_1_H_c = false; }
				if(data.hygiene_and_sanitation_9_1_1_I_a == 1){ $scope.hygiene_and_sanitation_9_1_1_I_a = data.hygiene_and_sanitation_9_1_1_I_a; $scope.hygiene_and_sanitation_9_1_1_I_a= true; $scope.hygiene_and_sanitation_9_1_1_I_a_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_I_a > 0 ) && (data.hygiene_and_sanitation_9_1_1_I_a < 1)){ $scope.hygiene_and_sanitation_9_1_1_I_a_cm = data.hygiene_and_sanitation_9_1_1_I_a; $scope.hygiene_and_sanitation_9_1_1_I_a= false; $scope.hygiene_and_sanitation_9_1_1_I_a= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_I_a= ''; $scope.hygiene_and_sanitation_9_1_1_I_a_cm = ''; $scope.hygiene_and_sanitation_9_1_1_I_a= false; }
				if(data.hygiene_and_sanitation_9_1_1_I_b == 1){ $scope.hygiene_and_sanitation_9_1_1_I_b = data.hygiene_and_sanitation_9_1_1_I_b; $scope.hygiene_and_sanitation_9_1_1_I_b= true; $scope.hygiene_and_sanitation_9_1_1_I_b_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_I_b > 0 ) && (data.hygiene_and_sanitation_9_1_1_I_b < 1)){ $scope.hygiene_and_sanitation_9_1_1_I_b_cm = data.hygiene_and_sanitation_9_1_1_I_b; $scope.hygiene_and_sanitation_9_1_1_I_b= false; $scope.hygiene_and_sanitation_9_1_1_I_b= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_I_b= ''; $scope.hygiene_and_sanitation_9_1_1_I_b_cm = ''; $scope.hygiene_and_sanitation_9_1_1_I_b= false; }
				if(data.hygiene_and_sanitation_9_1_1_I_c == 1){ $scope.hygiene_and_sanitation_9_1_1_I_c = data.hygiene_and_sanitation_9_1_1_I_c; $scope.hygiene_and_sanitation_9_1_1_I_c= true; $scope.hygiene_and_sanitation_9_1_1_I_c_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_I_c > 0 ) && (data.hygiene_and_sanitation_9_1_1_I_c < 1)){ $scope.hygiene_and_sanitation_9_1_1_I_c_cm = data.hygiene_and_sanitation_9_1_1_I_c; $scope.hygiene_and_sanitation_9_1_1_I_c= false; $scope.hygiene_and_sanitation_9_1_1_I_c= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_I_c= ''; $scope.hygiene_and_sanitation_9_1_1_I_c_cm = ''; $scope.hygiene_and_sanitation_9_1_1_I_c= false; }
				if(data.hygiene_and_sanitation_9_1_1_I_d == 1){ $scope.hygiene_and_sanitation_9_1_1_I_d = data.hygiene_and_sanitation_9_1_1_I_d; $scope.hygiene_and_sanitation_9_1_1_I_d= true; $scope.hygiene_and_sanitation_9_1_1_I_d_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_I_d > 0 ) && (data.hygiene_and_sanitation_9_1_1_I_d < 1)){ $scope.hygiene_and_sanitation_9_1_1_I_d_cm = data.hygiene_and_sanitation_9_1_1_I_d; $scope.hygiene_and_sanitation_9_1_1_I_d= false; $scope.hygiene_and_sanitation_9_1_1_I_d= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_I_d= ''; $scope.hygiene_and_sanitation_9_1_1_I_d_cm = ''; $scope.hygiene_and_sanitation_9_1_1_I_d= false; }
				if(data.hygiene_and_sanitation_9_1_1_I_e == 1){ $scope.hygiene_and_sanitation_9_1_1_I_e = data.hygiene_and_sanitation_9_1_1_I_e; $scope.hygiene_and_sanitation_9_1_1_I_e= true; $scope.hygiene_and_sanitation_9_1_1_I_e_cm = ''; } else if((data.hygiene_and_sanitation_9_1_1_I_e > 0 ) && (data.hygiene_and_sanitation_9_1_1_I_e < 1)){ $scope.hygiene_and_sanitation_9_1_1_I_e_cm = data.hygiene_and_sanitation_9_1_1_I_e; $scope.hygiene_and_sanitation_9_1_1_I_e= false; $scope.hygiene_and_sanitation_9_1_1_I_e= ''; }else{ $scope.hygiene_and_sanitation_9_1_1_I_e= ''; $scope.hygiene_and_sanitation_9_1_1_I_e_cm = ''; $scope.hygiene_and_sanitation_9_1_1_I_e= false; }
				if(data.hygiene_and_sanitation_9_1_1_J == 0){ $scope.hygiene_and_sanitation_9_1_1_J = data.hygiene_and_sanitation_9_1_1_J; $scope.hygiene_and_sanitation_9_1_1_J = true; $scope.hygiene_and_sanitation_9_1_1_J_b = false; $scope.hygiene_and_sanitation_9_1_1_J_c = false; $scope.hygiene_and_sanitation_9_1_1_J_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_J  == 1){ $scope.hygiene_and_sanitation_9_1_1_J = data.hygiene_and_sanitation_9_1_1_J; $scope.hygiene_and_sanitation_9_1_1_J = false; $scope.hygiene_and_sanitation_9_1_1_J_b = true; $scope.hygiene_and_sanitation_9_1_1_J_c = false; $scope.hygiene_and_sanitation_9_1_1_J_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_J  == 2){ $scope.hygiene_and_sanitation_9_1_1_J = data.hygiene_and_sanitation_9_1_1_J; $scope.hygiene_and_sanitation_9_1_1_J = false; $scope.hygiene_and_sanitation_9_1_1_J_b = false; $scope.hygiene_and_sanitation_9_1_1_J_c = true; $scope.hygiene_and_sanitation_9_1_1_J_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_J  > 0 ) && (data.hygiene_and_sanitation_9_1_1_J  < 1)) || ((data.hygiene_and_sanitation_9_1_1_J  > 1 ) && (data.hygiene_and_sanitation_9_1_1_J  < 2)) )
				{ $scope.hygiene_and_sanitation_9_1_1_J_cm = data.hygiene_and_sanitation_9_1_1_J; $scope.hygiene_and_sanitation_9_1_1_J = false; $scope.hygiene_and_sanitation_9_1_1_J_b = false;  $scope.hygiene_and_sanitation_9_1_1_J_c = false; $scope.hygiene_and_sanitation_9_1_1_J = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_J = ''; $scope.hygiene_and_sanitation_9_1_1_J_cm = ''; $scope.hygiene_and_sanitation_9_1_1_J = false; $scope.hygiene_and_sanitation_9_1_1_J_b = false; $scope.hygiene_and_sanitation_9_1_1_J_c = false; }
				if(data.hygiene_and_sanitation_9_1_1_K == 0){ $scope.hygiene_and_sanitation_9_1_1_K = data.hygiene_and_sanitation_9_1_1_K; $scope.hygiene_and_sanitation_9_1_1_K = true; $scope.hygiene_and_sanitation_9_1_1_K_b = false; $scope.hygiene_and_sanitation_9_1_1_K_c = false; $scope.hygiene_and_sanitation_9_1_1_K_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_K  == 1){ $scope.hygiene_and_sanitation_9_1_1_K = data.hygiene_and_sanitation_9_1_1_K; $scope.hygiene_and_sanitation_9_1_1_K = false; $scope.hygiene_and_sanitation_9_1_1_K_b = true; $scope.hygiene_and_sanitation_9_1_1_K_c = false; $scope.hygiene_and_sanitation_9_1_1_K_cm = ''; } else if(data.hygiene_and_sanitation_9_1_1_K  == 2){ $scope.hygiene_and_sanitation_9_1_1_K = data.hygiene_and_sanitation_9_1_1_K; $scope.hygiene_and_sanitation_9_1_1_K = false; $scope.hygiene_and_sanitation_9_1_1_K_b = false; $scope.hygiene_and_sanitation_9_1_1_K_c = true; $scope.hygiene_and_sanitation_9_1_1_K_cm = ''; }else if( ((data.hygiene_and_sanitation_9_1_1_K  > 0 ) && (data.hygiene_and_sanitation_9_1_1_K  < 1)) || ((data.hygiene_and_sanitation_9_1_1_K  > 1 ) && (data.hygiene_and_sanitation_9_1_1_K  < 2)) )
				{ $scope.hygiene_and_sanitation_9_1_1_K_cm = data.hygiene_and_sanitation_9_1_1_K; $scope.hygiene_and_sanitation_9_1_1_K = false; $scope.hygiene_and_sanitation_9_1_1_K_b = false;  $scope.hygiene_and_sanitation_9_1_1_K_c = false; $scope.hygiene_and_sanitation_9_1_1_K = ''; }else{ $scope.hygiene_and_sanitation_9_1_1_K = ''; $scope.hygiene_and_sanitation_9_1_1_K_cm = ''; $scope.hygiene_and_sanitation_9_1_1_K = false; $scope.hygiene_and_sanitation_9_1_1_K_b = false; $scope.hygiene_and_sanitation_9_1_1_K_c = false; }
				$scope.hygiene_and_sanitation_9_2_1_text = data.hygiene_and_sanitation_9_2_1_text;
				if(data.hygiene_and_sanitation_9_2_1_A  == 1){ $scope.hygiene_and_sanitation_9_2_1_A  = data.hygiene_and_sanitation_9_2_1_A ; $scope.hygiene_and_sanitation_9_2_1_A = true; $scope.hygiene_and_sanitation_9_2_1_A_b = false; $scope.hygiene_and_sanitation_9_2_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_A  == 2){ $scope.hygiene_and_sanitation_9_2_1_A  = data.hygiene_and_sanitation_9_2_1_A ; $scope.hygiene_and_sanitation_9_2_1_A = false; $scope.hygiene_and_sanitation_9_2_1_A_b = true; $scope.hygiene_and_sanitation_9_2_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_A  > 0 ) && (data.hygiene_and_sanitation_9_2_1_A  < 1)) || ((data.hygiene_and_sanitation_9_2_1_A  > 1 ) && (data.hygiene_and_sanitation_9_2_1_A  < 2)))
				{ $scope.hygiene_and_sanitation_9_2_1_A_cm = data.hygiene_and_sanitation_9_2_1_A ; $scope.hygiene_and_sanitation_9_2_1_A = false; $scope.hygiene_and_sanitation_9_2_1_A_b = false; $scope.hygiene_and_sanitation_9_2_1_A  = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_A  = ''; $scope.hygiene_and_sanitation_9_2_1_A_cm = ''; $scope.hygiene_and_sanitation_9_2_1_A = false; $scope.hygiene_and_sanitation_9_2_1_A_b = false; }
				if(data.hygiene_and_sanitation_9_2_1_B == 0){ $scope.hygiene_and_sanitation_9_2_1_B = data.hygiene_and_sanitation_9_2_1_B; $scope.hygiene_and_sanitation_9_2_1_B = true; $scope.hygiene_and_sanitation_9_2_1_B_b = false; $scope.hygiene_and_sanitation_9_2_1_B_c = false; $scope.hygiene_and_sanitation_9_2_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_B  == 1){ $scope.hygiene_and_sanitation_9_2_1_B = data.hygiene_and_sanitation_9_2_1_B; $scope.hygiene_and_sanitation_9_2_1_B = false; $scope.hygiene_and_sanitation_9_2_1_B_b = true; $scope.hygiene_and_sanitation_9_2_1_B_c = false; $scope.hygiene_and_sanitation_9_2_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_B  == ){ $scope.hygiene_and_sanitation_9_2_1_B = data.hygiene_and_sanitation_9_2_1_B; $scope.hygiene_and_sanitation_9_2_1_B = false; $scope.hygiene_and_sanitation_9_2_1_B_b = false; $scope.hygiene_and_sanitation_9_2_1_B_c = true; $scope.hygiene_and_sanitation_9_2_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_B  > 0 ) && (data.hygiene_and_sanitation_9_2_1_B  < 1)) || ((data.hygiene_and_sanitation_9_2_1_B  > 1 ) && (data.hygiene_and_sanitation_9_2_1_B  < )) )
				{ $scope.hygiene_and_sanitation_9_2_1_B_cm = data.hygiene_and_sanitation_9_2_1_B; $scope.hygiene_and_sanitation_9_2_1_B = false; $scope.hygiene_and_sanitation_9_2_1_B_b = false;  $scope.hygiene_and_sanitation_9_2_1_B_c = false; $scope.hygiene_and_sanitation_9_2_1_B = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_B = ''; $scope.hygiene_and_sanitation_9_2_1_B_cm = ''; $scope.hygiene_and_sanitation_9_2_1_B = false; $scope.hygiene_and_sanitation_9_2_1_B_b = false; $scope.hygiene_and_sanitation_9_2_1_B_c = false; }
				if(data.hygiene_and_sanitation_9_2_1_C == 1){ $scope.hygiene_and_sanitation_9_2_1_C = data.hygiene_and_sanitation_9_2_1_C; $scope.hygiene_and_sanitation_9_2_1_C = true; $scope.hygiene_and_sanitation_9_2_1_C_b = false; $scope.hygiene_and_sanitation_9_2_1_C_c = false; $scope.hygiene_and_sanitation_9_2_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_C  == 2){ $scope.hygiene_and_sanitation_9_2_1_C = data.hygiene_and_sanitation_9_2_1_C; $scope.hygiene_and_sanitation_9_2_1_C = false; $scope.hygiene_and_sanitation_9_2_1_C_b = true; $scope.hygiene_and_sanitation_9_2_1_C_c = false; $scope.hygiene_and_sanitation_9_2_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_C  == 3){ 
				$scope.hygiene_and_sanitation_9_2_1_C = data.hygiene_and_sanitation_9_2_1_C; $scope.hygiene_and_sanitation_9_2_1_C = false; $scope.hygiene_and_sanitation_9_2_1_C_b = false; $scope.hygiene_and_sanitation_9_2_1_C_c = true; $scope.hygiene_and_sanitation_9_2_1_C_cm = ''; } else if( ((data.hygiene_and_sanitation_9_2_1_C  >= 0 ) && (data.hygiene_and_sanitation_9_2_1_C  < 1)) || ((data.hygiene_and_sanitation_9_2_1_C  > 1 ) && (data.hygiene_and_sanitation_9_2_1_C  < 2)) || ((data.hygiene_and_sanitation_9_2_1_C  > 2 ) && (data.hygiene_and_sanitation_9_2_1_C  < 3)) ){ $scope.hygiene_and_sanitation_9_2_1_C_cm = data.hygiene_and_sanitation_9_2_1_C; $scope.hygiene_and_sanitation_9_2_1_C = false; $scope.hygiene_and_sanitation_9_2_1_C_b = false; $scope.hygiene_and_sanitation_9_2_1_C_c = false; $scope.hygiene_and_sanitation_9_2_1_C = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_C = ''; $scope.hygiene_and_sanitation_9_2_1_C_cm = ''; $scope.hygiene_and_sanitation_9_2_1_C = false; $scope.hygiene_and_sanitation_9_2_1_C_b = false; $scope.hygiene_and_sanitation_9_2_1_C_c = false;}
				if(data.hygiene_and_sanitation_9_2_1_D == 0){ $scope.hygiene_and_sanitation_9_2_1_D = data.hygiene_and_sanitation_9_2_1_D; $scope.hygiene_and_sanitation_9_2_1_D = true; $scope.hygiene_and_sanitation_9_2_1_D_b = false; $scope.hygiene_and_sanitation_9_2_1_D_c = false; $scope.hygiene_and_sanitation_9_2_1_D_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_D  == 1){ $scope.hygiene_and_sanitation_9_2_1_D = data.hygiene_and_sanitation_9_2_1_D; $scope.hygiene_and_sanitation_9_2_1_D = false; $scope.hygiene_and_sanitation_9_2_1_D_b = true; $scope.hygiene_and_sanitation_9_2_1_D_c = false; $scope.hygiene_and_sanitation_9_2_1_D_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_D  == 2){ $scope.hygiene_and_sanitation_9_2_1_D = data.hygiene_and_sanitation_9_2_1_D; $scope.hygiene_and_sanitation_9_2_1_D = false; $scope.hygiene_and_sanitation_9_2_1_D_b = false; $scope.hygiene_and_sanitation_9_2_1_D_c = true; $scope.hygiene_and_sanitation_9_2_1_D_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_D  > 0 ) && (data.hygiene_and_sanitation_9_2_1_D  < 1)) || ((data.hygiene_and_sanitation_9_2_1_D  > 1 ) && (data.hygiene_and_sanitation_9_2_1_D  < 2)) )
				{ $scope.hygiene_and_sanitation_9_2_1_D_cm = data.hygiene_and_sanitation_9_2_1_D; $scope.hygiene_and_sanitation_9_2_1_D = false; $scope.hygiene_and_sanitation_9_2_1_D_b = false;  $scope.hygiene_and_sanitation_9_2_1_D_c = false; $scope.hygiene_and_sanitation_9_2_1_D = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_D = ''; $scope.hygiene_and_sanitation_9_2_1_D_cm = ''; $scope.hygiene_and_sanitation_9_2_1_D = false; $scope.hygiene_and_sanitation_9_2_1_D_b = false; $scope.hygiene_and_sanitation_9_2_1_D_c = false; }
				if(data.hygiene_and_sanitation_9_2_1_E_a == 2){ $scope.hygiene_and_sanitation_9_2_1_E_a = data.hygiene_and_sanitation_9_2_1_E_a; $scope.hygiene_and_sanitation_9_2_1_E_a= true; $scope.hygiene_and_sanitation_9_2_1_E_a_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_a > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_a < 2)){ $scope.hygiene_and_sanitation_9_2_1_E_a_cm = data.hygiene_and_sanitation_9_2_1_E_a; $scope.hygiene_and_sanitation_9_2_1_E_a= false; $scope.hygiene_and_sanitation_9_2_1_E_a= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_a= ''; $scope.hygiene_and_sanitation_9_2_1_E_a_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_a= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_b == 1){ $scope.hygiene_and_sanitation_9_2_1_E_b = data.hygiene_and_sanitation_9_2_1_E_b; $scope.hygiene_and_sanitation_9_2_1_E_b= true; $scope.hygiene_and_sanitation_9_2_1_E_b_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_b > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_b < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_b_cm = data.hygiene_and_sanitation_9_2_1_E_b; $scope.hygiene_and_sanitation_9_2_1_E_b= false; $scope.hygiene_and_sanitation_9_2_1_E_b= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_b= ''; $scope.hygiene_and_sanitation_9_2_1_E_b_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_b= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_c == 1){ $scope.hygiene_and_sanitation_9_2_1_E_c = data.hygiene_and_sanitation_9_2_1_E_c; $scope.hygiene_and_sanitation_9_2_1_E_c= true; $scope.hygiene_and_sanitation_9_2_1_E_c_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_c > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_c < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_c_cm = data.hygiene_and_sanitation_9_2_1_E_c; $scope.hygiene_and_sanitation_9_2_1_E_c= false; $scope.hygiene_and_sanitation_9_2_1_E_c= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_c= ''; $scope.hygiene_and_sanitation_9_2_1_E_c_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_c= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_d == 1){ $scope.hygiene_and_sanitation_9_2_1_E_d = data.hygiene_and_sanitation_9_2_1_E_d; $scope.hygiene_and_sanitation_9_2_1_E_d= true; $scope.hygiene_and_sanitation_9_2_1_E_d_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_d > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_d < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_d_cm = data.hygiene_and_sanitation_9_2_1_E_d; $scope.hygiene_and_sanitation_9_2_1_E_d= false; $scope.hygiene_and_sanitation_9_2_1_E_d= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_d= ''; $scope.hygiene_and_sanitation_9_2_1_E_d_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_d= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_e == 1){ $scope.hygiene_and_sanitation_9_2_1_E_e = data.hygiene_and_sanitation_9_2_1_E_e; $scope.hygiene_and_sanitation_9_2_1_E_e= true; $scope.hygiene_and_sanitation_9_2_1_E_e_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_e > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_e < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_e_cm = data.hygiene_and_sanitation_9_2_1_E_e; $scope.hygiene_and_sanitation_9_2_1_E_e= false; $scope.hygiene_and_sanitation_9_2_1_E_e= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_e= ''; $scope.hygiene_and_sanitation_9_2_1_E_e_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_e= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_f == 1){ $scope.hygiene_and_sanitation_9_2_1_E_f = data.hygiene_and_sanitation_9_2_1_E_f; $scope.hygiene_and_sanitation_9_2_1_E_f= true; $scope.hygiene_and_sanitation_9_2_1_E_f_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_f > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_f < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_f_cm = data.hygiene_and_sanitation_9_2_1_E_f; $scope.hygiene_and_sanitation_9_2_1_E_f= false; $scope.hygiene_and_sanitation_9_2_1_E_f= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_f= ''; $scope.hygiene_and_sanitation_9_2_1_E_f_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_f= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_g == 1){ $scope.hygiene_and_sanitation_9_2_1_E_g = data.hygiene_and_sanitation_9_2_1_E_g; $scope.hygiene_and_sanitation_9_2_1_E_g= true; $scope.hygiene_and_sanitation_9_2_1_E_g_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_g > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_g < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_g_cm = data.hygiene_and_sanitation_9_2_1_E_g; $scope.hygiene_and_sanitation_9_2_1_E_g= false; $scope.hygiene_and_sanitation_9_2_1_E_g= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_g= ''; $scope.hygiene_and_sanitation_9_2_1_E_g_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_g= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_h == 1){ $scope.hygiene_and_sanitation_9_2_1_E_h = data.hygiene_and_sanitation_9_2_1_E_h; $scope.hygiene_and_sanitation_9_2_1_E_h= true; $scope.hygiene_and_sanitation_9_2_1_E_h_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_h > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_h < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_h_cm = data.hygiene_and_sanitation_9_2_1_E_h; $scope.hygiene_and_sanitation_9_2_1_E_h= false; $scope.hygiene_and_sanitation_9_2_1_E_h= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_h= ''; $scope.hygiene_and_sanitation_9_2_1_E_h_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_h= false; }
				if(data.hygiene_and_sanitation_9_2_1_E_i == 1){ $scope.hygiene_and_sanitation_9_2_1_E_i = data.hygiene_and_sanitation_9_2_1_E_i; $scope.hygiene_and_sanitation_9_2_1_E_i= true; $scope.hygiene_and_sanitation_9_2_1_E_i_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_E_i > 0 ) && (data.hygiene_and_sanitation_9_2_1_E_i < 1)){ $scope.hygiene_and_sanitation_9_2_1_E_i_cm = data.hygiene_and_sanitation_9_2_1_E_i; $scope.hygiene_and_sanitation_9_2_1_E_i= false; $scope.hygiene_and_sanitation_9_2_1_E_i= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_E_i= ''; $scope.hygiene_and_sanitation_9_2_1_E_i_cm = ''; $scope.hygiene_and_sanitation_9_2_1_E_i= false; }
				if(data.hygiene_and_sanitation_9_2_1_F == 1){ $scope.hygiene_and_sanitation_9_2_1_F = data.hygiene_and_sanitation_9_2_1_F; $scope.hygiene_and_sanitation_9_2_1_F = true; $scope.hygiene_and_sanitation_9_2_1_F_b = false; $scope.hygiene_and_sanitation_9_2_1_F_c = false; $scope.hygiene_and_sanitation_9_2_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_F  == 2){ $scope.hygiene_and_sanitation_9_2_1_F = data.hygiene_and_sanitation_9_2_1_F; $scope.hygiene_and_sanitation_9_2_1_F = false; $scope.hygiene_and_sanitation_9_2_1_F_b = true; $scope.hygiene_and_sanitation_9_2_1_F_c = false; $scope.hygiene_and_sanitation_9_2_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_F  == 3){ 
				$scope.hygiene_and_sanitation_9_2_1_F = data.hygiene_and_sanitation_9_2_1_F; $scope.hygiene_and_sanitation_9_2_1_F = false; $scope.hygiene_and_sanitation_9_2_1_F_b = false; $scope.hygiene_and_sanitation_9_2_1_F_c = true; $scope.hygiene_and_sanitation_9_2_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_9_2_1_F  >= 0 ) && (data.hygiene_and_sanitation_9_2_1_F  < 1)) || ((data.hygiene_and_sanitation_9_2_1_F  > 1 ) && (data.hygiene_and_sanitation_9_2_1_F  < 2)) || ((data.hygiene_and_sanitation_9_2_1_F  > 2 ) && (data.hygiene_and_sanitation_9_2_1_F  < 3)) ){ $scope.hygiene_and_sanitation_9_2_1_F_cm = data.hygiene_and_sanitation_9_2_1_F; $scope.hygiene_and_sanitation_9_2_1_F = false; $scope.hygiene_and_sanitation_9_2_1_F_b = false; $scope.hygiene_and_sanitation_9_2_1_F_c = false; $scope.hygiene_and_sanitation_9_2_1_F = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_F = ''; $scope.hygiene_and_sanitation_9_2_1_F_cm = ''; $scope.hygiene_and_sanitation_9_2_1_F = false; $scope.hygiene_and_sanitation_9_2_1_F_b = false; $scope.hygiene_and_sanitation_9_2_1_F_c = false;}
				if(data.hygiene_and_sanitation_9_2_1_G == 0){ $scope.hygiene_and_sanitation_9_2_1_G = data.hygiene_and_sanitation_9_2_1_G; $scope.hygiene_and_sanitation_9_2_1_G = true; $scope.hygiene_and_sanitation_9_2_1_G_b = false; $scope.hygiene_and_sanitation_9_2_1_G_c = false; $scope.hygiene_and_sanitation_9_2_1_G_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_G  == 1){ $scope.hygiene_and_sanitation_9_2_1_G = data.hygiene_and_sanitation_9_2_1_G; $scope.hygiene_and_sanitation_9_2_1_G = false; $scope.hygiene_and_sanitation_9_2_1_G_b = true; $scope.hygiene_and_sanitation_9_2_1_G_c = false; $scope.hygiene_and_sanitation_9_2_1_G_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_G  == ){ $scope.hygiene_and_sanitation_9_2_1_G = data.hygiene_and_sanitation_9_2_1_G; $scope.hygiene_and_sanitation_9_2_1_G = false; $scope.hygiene_and_sanitation_9_2_1_G_b = false; $scope.hygiene_and_sanitation_9_2_1_G_c = true; $scope.hygiene_and_sanitation_9_2_1_G_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_G  > 0 ) && (data.hygiene_and_sanitation_9_2_1_G  < 1)) || ((data.hygiene_and_sanitation_9_2_1_G  > 1 ) && (data.hygiene_and_sanitation_9_2_1_G  < )) )
				{ $scope.hygiene_and_sanitation_9_2_1_G_cm = data.hygiene_and_sanitation_9_2_1_G; $scope.hygiene_and_sanitation_9_2_1_G = false; $scope.hygiene_and_sanitation_9_2_1_G_b = false;  $scope.hygiene_and_sanitation_9_2_1_G_c = false; $scope.hygiene_and_sanitation_9_2_1_G = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_G = ''; $scope.hygiene_and_sanitation_9_2_1_G_cm = ''; $scope.hygiene_and_sanitation_9_2_1_G = false; $scope.hygiene_and_sanitation_9_2_1_G_b = false; $scope.hygiene_and_sanitation_9_2_1_G_c = false; }
				if(data.hygiene_and_sanitation_9_2_1_H_a == 1){ $scope.hygiene_and_sanitation_9_2_1_H_a = data.hygiene_and_sanitation_9_2_1_H_a; $scope.hygiene_and_sanitation_9_2_1_H_a= true; $scope.hygiene_and_sanitation_9_2_1_H_a_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_H_a > 0 ) && (data.hygiene_and_sanitation_9_2_1_H_a < 1)){ $scope.hygiene_and_sanitation_9_2_1_H_a_cm = data.hygiene_and_sanitation_9_2_1_H_a; $scope.hygiene_and_sanitation_9_2_1_H_a= false; $scope.hygiene_and_sanitation_9_2_1_H_a= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_H_a= ''; $scope.hygiene_and_sanitation_9_2_1_H_a_cm = ''; $scope.hygiene_and_sanitation_9_2_1_H_a= false; }
				if(data.hygiene_and_sanitation_9_2_1_H_b == 1){ $scope.hygiene_and_sanitation_9_2_1_H_b = data.hygiene_and_sanitation_9_2_1_H_b; $scope.hygiene_and_sanitation_9_2_1_H_b= true; $scope.hygiene_and_sanitation_9_2_1_H_b_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_H_b > 0 ) && (data.hygiene_and_sanitation_9_2_1_H_b < 1)){ $scope.hygiene_and_sanitation_9_2_1_H_b_cm = data.hygiene_and_sanitation_9_2_1_H_b; $scope.hygiene_and_sanitation_9_2_1_H_b= false; $scope.hygiene_and_sanitation_9_2_1_H_b= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_H_b= ''; $scope.hygiene_and_sanitation_9_2_1_H_b_cm = ''; $scope.hygiene_and_sanitation_9_2_1_H_b= false; }
				if(data.hygiene_and_sanitation_9_2_1_H_c == 1){ $scope.hygiene_and_sanitation_9_2_1_H_c = data.hygiene_and_sanitation_9_2_1_H_c; $scope.hygiene_and_sanitation_9_2_1_H_c= true; $scope.hygiene_and_sanitation_9_2_1_H_c_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_H_c > 0 ) && (data.hygiene_and_sanitation_9_2_1_H_c < 1)){ $scope.hygiene_and_sanitation_9_2_1_H_c_cm = data.hygiene_and_sanitation_9_2_1_H_c; $scope.hygiene_and_sanitation_9_2_1_H_c= false; $scope.hygiene_and_sanitation_9_2_1_H_c= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_H_c= ''; $scope.hygiene_and_sanitation_9_2_1_H_c_cm = ''; $scope.hygiene_and_sanitation_9_2_1_H_c= false; }
				if(data.hygiene_and_sanitation_9_2_1_H_d == 1){ $scope.hygiene_and_sanitation_9_2_1_H_d = data.hygiene_and_sanitation_9_2_1_H_d; $scope.hygiene_and_sanitation_9_2_1_H_d= true; $scope.hygiene_and_sanitation_9_2_1_H_d_cm = ''; } else if((data.hygiene_and_sanitation_9_2_1_H_d > 0 ) && (data.hygiene_and_sanitation_9_2_1_H_d < 1)){ $scope.hygiene_and_sanitation_9_2_1_H_d_cm = data.hygiene_and_sanitation_9_2_1_H_d; $scope.hygiene_and_sanitation_9_2_1_H_d= false; $scope.hygiene_and_sanitation_9_2_1_H_d= ''; }else{ $scope.hygiene_and_sanitation_9_2_1_H_d= ''; $scope.hygiene_and_sanitation_9_2_1_H_d_cm = ''; $scope.hygiene_and_sanitation_9_2_1_H_d= false; }
				if(data.hygiene_and_sanitation_9_2_1_I == 0){ $scope.hygiene_and_sanitation_9_2_1_I = data.hygiene_and_sanitation_9_2_1_I; $scope.hygiene_and_sanitation_9_2_1_I = true; $scope.hygiene_and_sanitation_9_2_1_I_b = false; $scope.hygiene_and_sanitation_9_2_1_I_c = false; $scope.hygiene_and_sanitation_9_2_1_I_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_I  == 1){ $scope.hygiene_and_sanitation_9_2_1_I = data.hygiene_and_sanitation_9_2_1_I; $scope.hygiene_and_sanitation_9_2_1_I = false; $scope.hygiene_and_sanitation_9_2_1_I_b = true; $scope.hygiene_and_sanitation_9_2_1_I_c = false; $scope.hygiene_and_sanitation_9_2_1_I_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_I  == 2){ $scope.hygiene_and_sanitation_9_2_1_I = data.hygiene_and_sanitation_9_2_1_I; $scope.hygiene_and_sanitation_9_2_1_I = false; $scope.hygiene_and_sanitation_9_2_1_I_b = false; $scope.hygiene_and_sanitation_9_2_1_I_c = true; $scope.hygiene_and_sanitation_9_2_1_I_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_I  > 0 ) && (data.hygiene_and_sanitation_9_2_1_I  < 1)) || ((data.hygiene_and_sanitation_9_2_1_I  > 1 ) && (data.hygiene_and_sanitation_9_2_1_I  < 2)) )
				{ $scope.hygiene_and_sanitation_9_2_1_I_cm = data.hygiene_and_sanitation_9_2_1_I; $scope.hygiene_and_sanitation_9_2_1_I = false; $scope.hygiene_and_sanitation_9_2_1_I_b = false;  $scope.hygiene_and_sanitation_9_2_1_I_c = false; $scope.hygiene_and_sanitation_9_2_1_I = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_I = ''; $scope.hygiene_and_sanitation_9_2_1_I_cm = ''; $scope.hygiene_and_sanitation_9_2_1_I = false; $scope.hygiene_and_sanitation_9_2_1_I_b = false; $scope.hygiene_and_sanitation_9_2_1_I_c = false; }
				if(data.hygiene_and_sanitation_9_2_1_J == 0){ $scope.hygiene_and_sanitation_9_2_1_J = data.hygiene_and_sanitation_9_2_1_J; $scope.hygiene_and_sanitation_9_2_1_J = true; $scope.hygiene_and_sanitation_9_2_1_J_b = false; $scope.hygiene_and_sanitation_9_2_1_J_c = false; $scope.hygiene_and_sanitation_9_2_1_J_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_J  == 1){ $scope.hygiene_and_sanitation_9_2_1_J = data.hygiene_and_sanitation_9_2_1_J; $scope.hygiene_and_sanitation_9_2_1_J = false; $scope.hygiene_and_sanitation_9_2_1_J_b = true; $scope.hygiene_and_sanitation_9_2_1_J_c = false; $scope.hygiene_and_sanitation_9_2_1_J_cm = ''; } else if(data.hygiene_and_sanitation_9_2_1_J  == 2){ $scope.hygiene_and_sanitation_9_2_1_J = data.hygiene_and_sanitation_9_2_1_J; $scope.hygiene_and_sanitation_9_2_1_J = false; $scope.hygiene_and_sanitation_9_2_1_J_b = false; $scope.hygiene_and_sanitation_9_2_1_J_c = true; $scope.hygiene_and_sanitation_9_2_1_J_cm = ''; }else if( ((data.hygiene_and_sanitation_9_2_1_J  > 0 ) && (data.hygiene_and_sanitation_9_2_1_J  < 1)) || ((data.hygiene_and_sanitation_9_2_1_J  > 1 ) && (data.hygiene_and_sanitation_9_2_1_J  < 2)) )
				{ $scope.hygiene_and_sanitation_9_2_1_J_cm = data.hygiene_and_sanitation_9_2_1_J; $scope.hygiene_and_sanitation_9_2_1_J = false; $scope.hygiene_and_sanitation_9_2_1_J_b = false;  $scope.hygiene_and_sanitation_9_2_1_J_c = false; $scope.hygiene_and_sanitation_9_2_1_J = ''; }else{ $scope.hygiene_and_sanitation_9_2_1_J = ''; $scope.hygiene_and_sanitation_9_2_1_J_cm = ''; $scope.hygiene_and_sanitation_9_2_1_J = false; $scope.hygiene_and_sanitation_9_2_1_J_b = false; $scope.hygiene_and_sanitation_9_2_1_J_c = false; }
				$scope.hygiene_and_sanitation_9_3_1_text = data.hygiene_and_sanitation_9_3_1_text;
				if(data.hygiene_and_sanitation_9_3_1_A == 0){ $scope.hygiene_and_sanitation_9_3_1_A = data.hygiene_and_sanitation_9_3_1_A; $scope.hygiene_and_sanitation_9_3_1_A = true; $scope.hygiene_and_sanitation_9_3_1_A_b = false; $scope.hygiene_and_sanitation_9_3_1_A_c = false; $scope.hygiene_and_sanitation_9_3_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_A  == 5){ $scope.hygiene_and_sanitation_9_3_1_A = data.hygiene_and_sanitation_9_3_1_A; $scope.hygiene_and_sanitation_9_3_1_A = false; $scope.hygiene_and_sanitation_9_3_1_A_b = true; $scope.hygiene_and_sanitation_9_3_1_A_c = false; $scope.hygiene_and_sanitation_9_3_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_A  == ){ $scope.hygiene_and_sanitation_9_3_1_A = data.hygiene_and_sanitation_9_3_1_A; $scope.hygiene_and_sanitation_9_3_1_A = false; $scope.hygiene_and_sanitation_9_3_1_A_b = false; $scope.hygiene_and_sanitation_9_3_1_A_c = true; $scope.hygiene_and_sanitation_9_3_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_9_3_1_A  > 0 ) && (data.hygiene_and_sanitation_9_3_1_A  < 5)) || ((data.hygiene_and_sanitation_9_3_1_A  > 5 ) && (data.hygiene_and_sanitation_9_3_1_A  < )) )
				{ $scope.hygiene_and_sanitation_9_3_1_A_cm = data.hygiene_and_sanitation_9_3_1_A; $scope.hygiene_and_sanitation_9_3_1_A = false; $scope.hygiene_and_sanitation_9_3_1_A_b = false;  $scope.hygiene_and_sanitation_9_3_1_A_c = false; $scope.hygiene_and_sanitation_9_3_1_A = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_A = ''; $scope.hygiene_and_sanitation_9_3_1_A_cm = ''; $scope.hygiene_and_sanitation_9_3_1_A = false; $scope.hygiene_and_sanitation_9_3_1_A_b = false; $scope.hygiene_and_sanitation_9_3_1_A_c = false; }
				if(data.hygiene_and_sanitation_9_3_1_B == 0){ $scope.hygiene_and_sanitation_9_3_1_B = data.hygiene_and_sanitation_9_3_1_B; $scope.hygiene_and_sanitation_9_3_1_B = true; $scope.hygiene_and_sanitation_9_3_1_B_b = false; $scope.hygiene_and_sanitation_9_3_1_B_c = false; $scope.hygiene_and_sanitation_9_3_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_B  == 5){ $scope.hygiene_and_sanitation_9_3_1_B = data.hygiene_and_sanitation_9_3_1_B; $scope.hygiene_and_sanitation_9_3_1_B = false; $scope.hygiene_and_sanitation_9_3_1_B_b = true; $scope.hygiene_and_sanitation_9_3_1_B_c = false; $scope.hygiene_and_sanitation_9_3_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_B  == ){ $scope.hygiene_and_sanitation_9_3_1_B = data.hygiene_and_sanitation_9_3_1_B; $scope.hygiene_and_sanitation_9_3_1_B = false; $scope.hygiene_and_sanitation_9_3_1_B_b = false; $scope.hygiene_and_sanitation_9_3_1_B_c = true; $scope.hygiene_and_sanitation_9_3_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_9_3_1_B  > 0 ) && (data.hygiene_and_sanitation_9_3_1_B  < 5)) || ((data.hygiene_and_sanitation_9_3_1_B  > 5 ) && (data.hygiene_and_sanitation_9_3_1_B  < )) )
				{ $scope.hygiene_and_sanitation_9_3_1_B_cm = data.hygiene_and_sanitation_9_3_1_B; $scope.hygiene_and_sanitation_9_3_1_B = false; $scope.hygiene_and_sanitation_9_3_1_B_b = false;  $scope.hygiene_and_sanitation_9_3_1_B_c = false; $scope.hygiene_and_sanitation_9_3_1_B = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_B = ''; $scope.hygiene_and_sanitation_9_3_1_B_cm = ''; $scope.hygiene_and_sanitation_9_3_1_B = false; $scope.hygiene_and_sanitation_9_3_1_B_b = false; $scope.hygiene_and_sanitation_9_3_1_B_c = false; }
				if(data.hygiene_and_sanitation_9_3_1_C == 0){ $scope.hygiene_and_sanitation_9_3_1_C = data.hygiene_and_sanitation_9_3_1_C; $scope.hygiene_and_sanitation_9_3_1_C = true; $scope.hygiene_and_sanitation_9_3_1_C_b = false; $scope.hygiene_and_sanitation_9_3_1_C_c = false; $scope.hygiene_and_sanitation_9_3_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_C  == 5){ $scope.hygiene_and_sanitation_9_3_1_C = data.hygiene_and_sanitation_9_3_1_C; $scope.hygiene_and_sanitation_9_3_1_C = false; $scope.hygiene_and_sanitation_9_3_1_C_b = true; $scope.hygiene_and_sanitation_9_3_1_C_c = false; $scope.hygiene_and_sanitation_9_3_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_C  == ){ $scope.hygiene_and_sanitation_9_3_1_C = data.hygiene_and_sanitation_9_3_1_C; $scope.hygiene_and_sanitation_9_3_1_C = false; $scope.hygiene_and_sanitation_9_3_1_C_b = false; $scope.hygiene_and_sanitation_9_3_1_C_c = true; $scope.hygiene_and_sanitation_9_3_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_9_3_1_C  > 0 ) && (data.hygiene_and_sanitation_9_3_1_C  < 5)) || ((data.hygiene_and_sanitation_9_3_1_C  > 5 ) && (data.hygiene_and_sanitation_9_3_1_C  < )) )
				{ $scope.hygiene_and_sanitation_9_3_1_C_cm = data.hygiene_and_sanitation_9_3_1_C; $scope.hygiene_and_sanitation_9_3_1_C = false; $scope.hygiene_and_sanitation_9_3_1_C_b = false;  $scope.hygiene_and_sanitation_9_3_1_C_c = false; $scope.hygiene_and_sanitation_9_3_1_C = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_C = ''; $scope.hygiene_and_sanitation_9_3_1_C_cm = ''; $scope.hygiene_and_sanitation_9_3_1_C = false; $scope.hygiene_and_sanitation_9_3_1_C_b = false; $scope.hygiene_and_sanitation_9_3_1_C_c = false; }
				if(data.hygiene_and_sanitation_9_3_1_D == 0){ $scope.hygiene_and_sanitation_9_3_1_D = data.hygiene_and_sanitation_9_3_1_D; $scope.hygiene_and_sanitation_9_3_1_D = true; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = false; $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_D  == 2){ $scope.hygiene_and_sanitation_9_3_1_D = data.hygiene_and_sanitation_9_3_1_D; $scope.hygiene_and_sanitation_9_3_1_D = false; $scope.hygiene_and_sanitation_9_3_1_D_b = true; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = false; $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_D  == 3){ $scope.hygiene_and_sanitation_9_3_1_D = data.hygiene_and_sanitation_9_3_1_D; $scope.hygiene_and_sanitation_9_3_1_D = false; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = true; $scope.hygiene_and_sanitation_9_3_1_D_d = false; $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; }else if(data.hygiene_and_sanitation_9_3_1_D  == 5){ $scope.hygiene_and_sanitation_9_3_1_D = data.hygiene_and_sanitation_9_3_1_D; $scope.hygiene_and_sanitation_9_3_1_D = false; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = true; $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; } else if( ((data.hygiene_and_sanitation_9_3_1_D  > 0 ) && (data.hygiene_and_sanitation_9_3_1_D  < 2)) || ((data.hygiene_and_sanitation_9_3_1_D  > 2 ) && (data.hygiene_and_sanitation_9_3_1_D  < 3)) || ((data.hygiene_and_sanitation_9_3_1_D  > 3 ) && (data.hygiene_and_sanitation_9_3_1_D  < 5)) )
				{ $scope.hygiene_and_sanitation_9_3_1_D_cm = data.hygiene_and_sanitation_9_3_1_D; $scope.hygiene_and_sanitation_9_3_1_D = false; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = false; $scope.hygiene_and_sanitation_9_3_1_D = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_D = ''; $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; $scope.hygiene_and_sanitation_9_3_1_D = false; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = false;}
				if(data.hygiene_and_sanitation_9_3_1_E == 0){ $scope.hygiene_and_sanitation_9_3_1_E = data.hygiene_and_sanitation_9_3_1_E; $scope.hygiene_and_sanitation_9_3_1_E = true; $scope.hygiene_and_sanitation_9_3_1_E_b = false; $scope.hygiene_and_sanitation_9_3_1_E_c = false; $scope.hygiene_and_sanitation_9_3_1_E_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_E  == 5){ $scope.hygiene_and_sanitation_9_3_1_E = data.hygiene_and_sanitation_9_3_1_E; $scope.hygiene_and_sanitation_9_3_1_E = false; $scope.hygiene_and_sanitation_9_3_1_E_b = true; $scope.hygiene_and_sanitation_9_3_1_E_c = false; $scope.hygiene_and_sanitation_9_3_1_E_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_E  == ){ $scope.hygiene_and_sanitation_9_3_1_E = data.hygiene_and_sanitation_9_3_1_E; $scope.hygiene_and_sanitation_9_3_1_E = false; $scope.hygiene_and_sanitation_9_3_1_E_b = false; $scope.hygiene_and_sanitation_9_3_1_E_c = true; $scope.hygiene_and_sanitation_9_3_1_E_cm = ''; }else if( ((data.hygiene_and_sanitation_9_3_1_E  > 0 ) && (data.hygiene_and_sanitation_9_3_1_E  < 5)) || ((data.hygiene_and_sanitation_9_3_1_E  > 5 ) && (data.hygiene_and_sanitation_9_3_1_E  < )) )
				{ $scope.hygiene_and_sanitation_9_3_1_E_cm = data.hygiene_and_sanitation_9_3_1_E; $scope.hygiene_and_sanitation_9_3_1_E = false; $scope.hygiene_and_sanitation_9_3_1_E_b = false;  $scope.hygiene_and_sanitation_9_3_1_E_c = false; $scope.hygiene_and_sanitation_9_3_1_E = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_E = ''; $scope.hygiene_and_sanitation_9_3_1_E_cm = ''; $scope.hygiene_and_sanitation_9_3_1_E = false; $scope.hygiene_and_sanitation_9_3_1_E_b = false; $scope.hygiene_and_sanitation_9_3_1_E_c = false; }
				if(data.hygiene_and_sanitation_9_3_1_F == 1){ $scope.hygiene_and_sanitation_9_3_1_F = data.hygiene_and_sanitation_9_3_1_F; $scope.hygiene_and_sanitation_9_3_1_F = true; $scope.hygiene_and_sanitation_9_3_1_F_b = false; $scope.hygiene_and_sanitation_9_3_1_F_c = false; $scope.hygiene_and_sanitation_9_3_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_F  == 2){ $scope.hygiene_and_sanitation_9_3_1_F = data.hygiene_and_sanitation_9_3_1_F; $scope.hygiene_and_sanitation_9_3_1_F = false; $scope.hygiene_and_sanitation_9_3_1_F_b = true; $scope.hygiene_and_sanitation_9_3_1_F_c = false; $scope.hygiene_and_sanitation_9_3_1_F_cm = ''; } else if(data.hygiene_and_sanitation_9_3_1_F  == 5){ 
				$scope.hygiene_and_sanitation_9_3_1_F = data.hygiene_and_sanitation_9_3_1_F; $scope.hygiene_and_sanitation_9_3_1_F = false; $scope.hygiene_and_sanitation_9_3_1_F_b = false; $scope.hygiene_and_sanitation_9_3_1_F_c = true; $scope.hygiene_and_sanitation_9_3_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_9_3_1_F  >= 0 ) && (data.hygiene_and_sanitation_9_3_1_F  < 1)) || ((data.hygiene_and_sanitation_9_3_1_F  > 1 ) && (data.hygiene_and_sanitation_9_3_1_F  < 2)) || ((data.hygiene_and_sanitation_9_3_1_F  > 2 ) && (data.hygiene_and_sanitation_9_3_1_F  < 5)) ){ $scope.hygiene_and_sanitation_9_3_1_F_cm = data.hygiene_and_sanitation_9_3_1_F; $scope.hygiene_and_sanitation_9_3_1_F = false; $scope.hygiene_and_sanitation_9_3_1_F_b = false; $scope.hygiene_and_sanitation_9_3_1_F_c = false; $scope.hygiene_and_sanitation_9_3_1_F = ''; }else{ $scope.hygiene_and_sanitation_9_3_1_F = ''; $scope.hygiene_and_sanitation_9_3_1_F_cm = ''; $scope.hygiene_and_sanitation_9_3_1_F = false; $scope.hygiene_and_sanitation_9_3_1_F_b = false; $scope.hygiene_and_sanitation_9_3_1_F_c = false;}
				$scope.hygiene_and_sanitation_9_4_1_text = data.hygiene_and_sanitation_9_4_1_text;
				if(data.hygiene_and_sanitation_9_4_1_A == 5){ $scope.hygiene_and_sanitation_9_4_1_A = data.hygiene_and_sanitation_9_4_1_A; $scope.hygiene_and_sanitation_9_4_1_A = true; $scope.hygiene_and_sanitation_9_4_1_A_b = false; $scope.hygiene_and_sanitation_9_4_1_A_c = false; $scope.hygiene_and_sanitation_9_4_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_4_1_A  == 7){ $scope.hygiene_and_sanitation_9_4_1_A = data.hygiene_and_sanitation_9_4_1_A; $scope.hygiene_and_sanitation_9_4_1_A = false; $scope.hygiene_and_sanitation_9_4_1_A_b = true; $scope.hygiene_and_sanitation_9_4_1_A_c = false; $scope.hygiene_and_sanitation_9_4_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_4_1_A  == 10){ 
				$scope.hygiene_and_sanitation_9_4_1_A = data.hygiene_and_sanitation_9_4_1_A; $scope.hygiene_and_sanitation_9_4_1_A = false; $scope.hygiene_and_sanitation_9_4_1_A_b = false; $scope.hygiene_and_sanitation_9_4_1_A_c = true; $scope.hygiene_and_sanitation_9_4_1_A_cm = ''; } else if( ((data.hygiene_and_sanitation_9_4_1_A  >= 0 ) && (data.hygiene_and_sanitation_9_4_1_A  < 5)) || ((data.hygiene_and_sanitation_9_4_1_A  > 5 ) && (data.hygiene_and_sanitation_9_4_1_A  < 7)) || ((data.hygiene_and_sanitation_9_4_1_A  > 7 ) && (data.hygiene_and_sanitation_9_4_1_A  < 10)) ){ $scope.hygiene_and_sanitation_9_4_1_A_cm = data.hygiene_and_sanitation_9_4_1_A; $scope.hygiene_and_sanitation_9_4_1_A = false; $scope.hygiene_and_sanitation_9_4_1_A_b = false; $scope.hygiene_and_sanitation_9_4_1_A_c = false; $scope.hygiene_and_sanitation_9_4_1_A = ''; }else{ $scope.hygiene_and_sanitation_9_4_1_A = ''; $scope.hygiene_and_sanitation_9_4_1_A_cm = ''; $scope.hygiene_and_sanitation_9_4_1_A = false; $scope.hygiene_and_sanitation_9_4_1_A_b = false; $scope.hygiene_and_sanitation_9_4_1_A_c = false;}
				if(data.hygiene_and_sanitation_12_4_1_B == 0){ $scope.hygiene_and_sanitation_12_4_1_B = data.hygiene_and_sanitation_12_4_1_B; $scope.hygiene_and_sanitation_12_4_1_B = true; $scope.hygiene_and_sanitation_12_4_1_B_b = false; $scope.hygiene_and_sanitation_12_4_1_B_c = false; $scope.hygiene_and_sanitation_12_4_1_B_cm = ''; } else if(data.hygiene_and_sanitation_12_4_1_B  == 10){ $scope.hygiene_and_sanitation_12_4_1_B = data.hygiene_and_sanitation_12_4_1_B; $scope.hygiene_and_sanitation_12_4_1_B = false; $scope.hygiene_and_sanitation_12_4_1_B_b = true; $scope.hygiene_and_sanitation_12_4_1_B_c = false; $scope.hygiene_and_sanitation_12_4_1_B_cm = ''; } else if(data.hygiene_and_sanitation_12_4_1_B  == ){ $scope.hygiene_and_sanitation_12_4_1_B = data.hygiene_and_sanitation_12_4_1_B; $scope.hygiene_and_sanitation_12_4_1_B = false; $scope.hygiene_and_sanitation_12_4_1_B_b = false; $scope.hygiene_and_sanitation_12_4_1_B_c = true; $scope.hygiene_and_sanitation_12_4_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_12_4_1_B  > 0 ) && (data.hygiene_and_sanitation_12_4_1_B  < 10)) || ((data.hygiene_and_sanitation_12_4_1_B  > 10 ) && (data.hygiene_and_sanitation_12_4_1_B  < )) )
				{ $scope.hygiene_and_sanitation_12_4_1_B_cm = data.hygiene_and_sanitation_12_4_1_B; $scope.hygiene_and_sanitation_12_4_1_B = false; $scope.hygiene_and_sanitation_12_4_1_B_b = false;  $scope.hygiene_and_sanitation_12_4_1_B_c = false; $scope.hygiene_and_sanitation_12_4_1_B = ''; }else{ $scope.hygiene_and_sanitation_12_4_1_B = ''; $scope.hygiene_and_sanitation_12_4_1_B_cm = ''; $scope.hygiene_and_sanitation_12_4_1_B = false; $scope.hygiene_and_sanitation_12_4_1_B_b = false; $scope.hygiene_and_sanitation_12_4_1_B_c = false; }
				if(data.hygiene_and_sanitation_9_4_1_C == 0){ $scope.hygiene_and_sanitation_9_4_1_C = data.hygiene_and_sanitation_9_4_1_C; $scope.hygiene_and_sanitation_9_4_1_C = true; $scope.hygiene_and_sanitation_9_4_1_C_b = false; $scope.hygiene_and_sanitation_9_4_1_C_c = false; $scope.hygiene_and_sanitation_9_4_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_4_1_C  == 5){ $scope.hygiene_and_sanitation_9_4_1_C = data.hygiene_and_sanitation_9_4_1_C; $scope.hygiene_and_sanitation_9_4_1_C = false; $scope.hygiene_and_sanitation_9_4_1_C_b = true; $scope.hygiene_and_sanitation_9_4_1_C_c = false; $scope.hygiene_and_sanitation_9_4_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_4_1_C  == 10){ $scope.hygiene_and_sanitation_9_4_1_C = data.hygiene_and_sanitation_9_4_1_C; $scope.hygiene_and_sanitation_9_4_1_C = false; $scope.hygiene_and_sanitation_9_4_1_C_b = false; $scope.hygiene_and_sanitation_9_4_1_C_c = true; $scope.hygiene_and_sanitation_9_4_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_9_4_1_C  > 0 ) && (data.hygiene_and_sanitation_9_4_1_C  < 5)) || ((data.hygiene_and_sanitation_9_4_1_C  > 5 ) && (data.hygiene_and_sanitation_9_4_1_C  < 10)) )
				{ $scope.hygiene_and_sanitation_9_4_1_C_cm = data.hygiene_and_sanitation_9_4_1_C; $scope.hygiene_and_sanitation_9_4_1_C = false; $scope.hygiene_and_sanitation_9_4_1_C_b = false;  $scope.hygiene_and_sanitation_9_4_1_C_c = false; $scope.hygiene_and_sanitation_9_4_1_C = ''; }else{ $scope.hygiene_and_sanitation_9_4_1_C = ''; $scope.hygiene_and_sanitation_9_4_1_C_cm = ''; $scope.hygiene_and_sanitation_9_4_1_C = false; $scope.hygiene_and_sanitation_9_4_1_C_b = false; $scope.hygiene_and_sanitation_9_4_1_C_c = false; }
				$scope.hygiene_and_sanitation_9_5_1_text = data.hygiene_and_sanitation_9_5_1_text;
				if(data.hygiene_and_sanitation_9_5_1_A == 0){ $scope.hygiene_and_sanitation_9_5_1_A = data.hygiene_and_sanitation_9_5_1_A; $scope.hygiene_and_sanitation_9_5_1_A = true; $scope.hygiene_and_sanitation_9_5_1_A_b = false; $scope.hygiene_and_sanitation_9_5_1_A_c = false; $scope.hygiene_and_sanitation_9_5_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_5_1_A  == 5){ $scope.hygiene_and_sanitation_9_5_1_A = data.hygiene_and_sanitation_9_5_1_A; $scope.hygiene_and_sanitation_9_5_1_A = false; $scope.hygiene_and_sanitation_9_5_1_A_b = true; $scope.hygiene_and_sanitation_9_5_1_A_c = false; $scope.hygiene_and_sanitation_9_5_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_5_1_A  == ){ $scope.hygiene_and_sanitation_9_5_1_A = data.hygiene_and_sanitation_9_5_1_A; $scope.hygiene_and_sanitation_9_5_1_A = false; $scope.hygiene_and_sanitation_9_5_1_A_b = false; $scope.hygiene_and_sanitation_9_5_1_A_c = true; $scope.hygiene_and_sanitation_9_5_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_9_5_1_A  > 0 ) && (data.hygiene_and_sanitation_9_5_1_A  < 5)) || ((data.hygiene_and_sanitation_9_5_1_A  > 5 ) && (data.hygiene_and_sanitation_9_5_1_A  < )) )
				{ $scope.hygiene_and_sanitation_9_5_1_A_cm = data.hygiene_and_sanitation_9_5_1_A; $scope.hygiene_and_sanitation_9_5_1_A = false; $scope.hygiene_and_sanitation_9_5_1_A_b = false;  $scope.hygiene_and_sanitation_9_5_1_A_c = false; $scope.hygiene_and_sanitation_9_5_1_A = ''; }else{ $scope.hygiene_and_sanitation_9_5_1_A = ''; $scope.hygiene_and_sanitation_9_5_1_A_cm = ''; $scope.hygiene_and_sanitation_9_5_1_A = false; $scope.hygiene_and_sanitation_9_5_1_A_b = false; $scope.hygiene_and_sanitation_9_5_1_A_c = false; }
				if(data.hygiene_and_sanitation_9_5_1_B == 5){ $scope.hygiene_and_sanitation_9_5_1_B = data.hygiene_and_sanitation_9_5_1_B; $scope.hygiene_and_sanitation_9_5_1_B = true; $scope.hygiene_and_sanitation_9_5_1_B_b = false; $scope.hygiene_and_sanitation_9_5_1_B_c = false; $scope.hygiene_and_sanitation_9_5_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_5_1_B  == 10){ $scope.hygiene_and_sanitation_9_5_1_B = data.hygiene_and_sanitation_9_5_1_B; $scope.hygiene_and_sanitation_9_5_1_B = false; $scope.hygiene_and_sanitation_9_5_1_B_b = true; $scope.hygiene_and_sanitation_9_5_1_B_c = false; $scope.hygiene_and_sanitation_9_5_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_5_1_B  == 15){ 
				$scope.hygiene_and_sanitation_9_5_1_B = data.hygiene_and_sanitation_9_5_1_B; $scope.hygiene_and_sanitation_9_5_1_B = false; $scope.hygiene_and_sanitation_9_5_1_B_b = false; $scope.hygiene_and_sanitation_9_5_1_B_c = true; $scope.hygiene_and_sanitation_9_5_1_B_cm = ''; } else if( ((data.hygiene_and_sanitation_9_5_1_B  >= 0 ) && (data.hygiene_and_sanitation_9_5_1_B  < 5)) || ((data.hygiene_and_sanitation_9_5_1_B  > 5 ) && (data.hygiene_and_sanitation_9_5_1_B  < 10)) || ((data.hygiene_and_sanitation_9_5_1_B  > 10 ) && (data.hygiene_and_sanitation_9_5_1_B  < 15)) ){ $scope.hygiene_and_sanitation_9_5_1_B_cm = data.hygiene_and_sanitation_9_5_1_B; $scope.hygiene_and_sanitation_9_5_1_B = false; $scope.hygiene_and_sanitation_9_5_1_B_b = false; $scope.hygiene_and_sanitation_9_5_1_B_c = false; $scope.hygiene_and_sanitation_9_5_1_B = ''; }else{ $scope.hygiene_and_sanitation_9_5_1_B = ''; $scope.hygiene_and_sanitation_9_5_1_B_cm = ''; $scope.hygiene_and_sanitation_9_5_1_B = false; $scope.hygiene_and_sanitation_9_5_1_B_b = false; $scope.hygiene_and_sanitation_9_5_1_B_c = false;}
				$scope.hygiene_and_sanitation_9_6_1_text = data.hygiene_and_sanitation_9_6_1_text;
				if(data.hygiene_and_sanitation_9_6_1_A == 0){ $scope.hygiene_and_sanitation_9_6_1_A = data.hygiene_and_sanitation_9_6_1_A; $scope.hygiene_and_sanitation_9_6_1_A = true; $scope.hygiene_and_sanitation_9_6_1_A_b = false; $scope.hygiene_and_sanitation_9_6_1_A_c = false; $scope.hygiene_and_sanitation_9_6_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_6_1_A  == 8){ $scope.hygiene_and_sanitation_9_6_1_A = data.hygiene_and_sanitation_9_6_1_A; $scope.hygiene_and_sanitation_9_6_1_A = false; $scope.hygiene_and_sanitation_9_6_1_A_b = true; $scope.hygiene_and_sanitation_9_6_1_A_c = false; $scope.hygiene_and_sanitation_9_6_1_A_cm = ''; } else if(data.hygiene_and_sanitation_9_6_1_A  == ){ $scope.hygiene_and_sanitation_9_6_1_A = data.hygiene_and_sanitation_9_6_1_A; $scope.hygiene_and_sanitation_9_6_1_A = false; $scope.hygiene_and_sanitation_9_6_1_A_b = false; $scope.hygiene_and_sanitation_9_6_1_A_c = true; $scope.hygiene_and_sanitation_9_6_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_9_6_1_A  > 0 ) && (data.hygiene_and_sanitation_9_6_1_A  < 8)) || ((data.hygiene_and_sanitation_9_6_1_A  > 8 ) && (data.hygiene_and_sanitation_9_6_1_A  < )) )
				{ $scope.hygiene_and_sanitation_9_6_1_A_cm = data.hygiene_and_sanitation_9_6_1_A; $scope.hygiene_and_sanitation_9_6_1_A = false; $scope.hygiene_and_sanitation_9_6_1_A_b = false;  $scope.hygiene_and_sanitation_9_6_1_A_c = false; $scope.hygiene_and_sanitation_9_6_1_A = ''; }else{ $scope.hygiene_and_sanitation_9_6_1_A = ''; $scope.hygiene_and_sanitation_9_6_1_A_cm = ''; $scope.hygiene_and_sanitation_9_6_1_A = false; $scope.hygiene_and_sanitation_9_6_1_A_b = false; $scope.hygiene_and_sanitation_9_6_1_A_c = false; }
				if(data.hygiene_and_sanitation_9_6_1_B  == 3){ $scope.hygiene_and_sanitation_9_6_1_B  = data.hygiene_and_sanitation_9_6_1_B ; $scope.hygiene_and_sanitation_9_6_1_B = true; $scope.hygiene_and_sanitation_9_6_1_B_b = false; $scope.hygiene_and_sanitation_9_6_1_B_cm = ''; } else if(data.hygiene_and_sanitation_9_6_1_B  == 5){ $scope.hygiene_and_sanitation_9_6_1_B  = data.hygiene_and_sanitation_9_6_1_B ; $scope.hygiene_and_sanitation_9_6_1_B = false; $scope.hygiene_and_sanitation_9_6_1_B_b = true; $scope.hygiene_and_sanitation_9_6_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_9_6_1_B  > 0 ) && (data.hygiene_and_sanitation_9_6_1_B  < 3)) || ((data.hygiene_and_sanitation_9_6_1_B  > 3 ) && (data.hygiene_and_sanitation_9_6_1_B  < 5)))
				{ $scope.hygiene_and_sanitation_9_6_1_B_cm = data.hygiene_and_sanitation_9_6_1_B ; $scope.hygiene_and_sanitation_9_6_1_B = false; $scope.hygiene_and_sanitation_9_6_1_B_b = false; $scope.hygiene_and_sanitation_9_6_1_B  = ''; }else{ $scope.hygiene_and_sanitation_9_6_1_B  = ''; $scope.hygiene_and_sanitation_9_6_1_B_cm = ''; $scope.hygiene_and_sanitation_9_6_1_B = false; $scope.hygiene_and_sanitation_9_6_1_B_b = false; }
				if(data.hygiene_and_sanitation_9_6_1_C == 0){ $scope.hygiene_and_sanitation_9_6_1_C = data.hygiene_and_sanitation_9_6_1_C; $scope.hygiene_and_sanitation_9_6_1_C = true; $scope.hygiene_and_sanitation_9_6_1_C_b = false; $scope.hygiene_and_sanitation_9_6_1_C_c = false; $scope.hygiene_and_sanitation_9_6_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_6_1_C  == 4){ $scope.hygiene_and_sanitation_9_6_1_C = data.hygiene_and_sanitation_9_6_1_C; $scope.hygiene_and_sanitation_9_6_1_C = false; $scope.hygiene_and_sanitation_9_6_1_C_b = true; $scope.hygiene_and_sanitation_9_6_1_C_c = false; $scope.hygiene_and_sanitation_9_6_1_C_cm = ''; } else if(data.hygiene_and_sanitation_9_6_1_C  == ){ $scope.hygiene_and_sanitation_9_6_1_C = data.hygiene_and_sanitation_9_6_1_C; $scope.hygiene_and_sanitation_9_6_1_C = false; $scope.hygiene_and_sanitation_9_6_1_C_b = false; $scope.hygiene_and_sanitation_9_6_1_C_c = true; $scope.hygiene_and_sanitation_9_6_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_9_6_1_C  > 0 ) && (data.hygiene_and_sanitation_9_6_1_C  < 4)) || ((data.hygiene_and_sanitation_9_6_1_C  > 4 ) && (data.hygiene_and_sanitation_9_6_1_C  < )) )
				{ $scope.hygiene_and_sanitation_9_6_1_C_cm = data.hygiene_and_sanitation_9_6_1_C; $scope.hygiene_and_sanitation_9_6_1_C = false; $scope.hygiene_and_sanitation_9_6_1_C_b = false;  $scope.hygiene_and_sanitation_9_6_1_C_c = false; $scope.hygiene_and_sanitation_9_6_1_C = ''; }else{ $scope.hygiene_and_sanitation_9_6_1_C = ''; $scope.hygiene_and_sanitation_9_6_1_C_cm = ''; $scope.hygiene_and_sanitation_9_6_1_C = false; $scope.hygiene_and_sanitation_9_6_1_C_b = false; $scope.hygiene_and_sanitation_9_6_1_C_c = false; }
				$scope.safety_and_security_10_1_1_text = data.safety_and_security_10_1_1_text;
				if(data.safety_and_security_10_1_1_A == 0){ $scope.safety_and_security_10_1_1_A = data.safety_and_security_10_1_1_A; $scope.safety_and_security_10_1_1_A = true; $scope.safety_and_security_10_1_1_A_b = false; $scope.safety_and_security_10_1_1_A_c = false; $scope.safety_and_security_10_1_1_A_cm = ''; } else if(data.safety_and_security_10_1_1_A  == 1){ $scope.safety_and_security_10_1_1_A = data.safety_and_security_10_1_1_A; $scope.safety_and_security_10_1_1_A = false; $scope.safety_and_security_10_1_1_A_b = true; $scope.safety_and_security_10_1_1_A_c = false; $scope.safety_and_security_10_1_1_A_cm = ''; } else if(data.safety_and_security_10_1_1_A  == ){ $scope.safety_and_security_10_1_1_A = data.safety_and_security_10_1_1_A; $scope.safety_and_security_10_1_1_A = false; $scope.safety_and_security_10_1_1_A_b = false; $scope.safety_and_security_10_1_1_A_c = true; $scope.safety_and_security_10_1_1_A_cm = ''; }else if( ((data.safety_and_security_10_1_1_A  > 0 ) && (data.safety_and_security_10_1_1_A  < 1)) || ((data.safety_and_security_10_1_1_A  > 1 ) && (data.safety_and_security_10_1_1_A  < )) )
				{ $scope.safety_and_security_10_1_1_A_cm = data.safety_and_security_10_1_1_A; $scope.safety_and_security_10_1_1_A = false; $scope.safety_and_security_10_1_1_A_b = false;  $scope.safety_and_security_10_1_1_A_c = false; $scope.safety_and_security_10_1_1_A = ''; }else{ $scope.safety_and_security_10_1_1_A = ''; $scope.safety_and_security_10_1_1_A_cm = ''; $scope.safety_and_security_10_1_1_A = false; $scope.safety_and_security_10_1_1_A_b = false; $scope.safety_and_security_10_1_1_A_c = false; }
				if(data.safety_and_security_10_1_1_B == 0){ $scope.safety_and_security_10_1_1_B = data.safety_and_security_10_1_1_B; $scope.safety_and_security_10_1_1_B = true; $scope.safety_and_security_10_1_1_B_b = false; $scope.safety_and_security_10_1_1_B_c = false; $scope.safety_and_security_10_1_1_B_cm = ''; } else if(data.safety_and_security_10_1_1_B  == 1){ $scope.safety_and_security_10_1_1_B = data.safety_and_security_10_1_1_B; $scope.safety_and_security_10_1_1_B = false; $scope.safety_and_security_10_1_1_B_b = true; $scope.safety_and_security_10_1_1_B_c = false; $scope.safety_and_security_10_1_1_B_cm = ''; } else if(data.safety_and_security_10_1_1_B  == ){ $scope.safety_and_security_10_1_1_B = data.safety_and_security_10_1_1_B; $scope.safety_and_security_10_1_1_B = false; $scope.safety_and_security_10_1_1_B_b = false; $scope.safety_and_security_10_1_1_B_c = true; $scope.safety_and_security_10_1_1_B_cm = ''; }else if( ((data.safety_and_security_10_1_1_B  > 0 ) && (data.safety_and_security_10_1_1_B  < 1)) || ((data.safety_and_security_10_1_1_B  > 1 ) && (data.safety_and_security_10_1_1_B  < )) )
				{ $scope.safety_and_security_10_1_1_B_cm = data.safety_and_security_10_1_1_B; $scope.safety_and_security_10_1_1_B = false; $scope.safety_and_security_10_1_1_B_b = false;  $scope.safety_and_security_10_1_1_B_c = false; $scope.safety_and_security_10_1_1_B = ''; }else{ $scope.safety_and_security_10_1_1_B = ''; $scope.safety_and_security_10_1_1_B_cm = ''; $scope.safety_and_security_10_1_1_B = false; $scope.safety_and_security_10_1_1_B_b = false; $scope.safety_and_security_10_1_1_B_c = false; }
				if(data.safety_and_security_10_1_1_C == 0){ $scope.safety_and_security_10_1_1_C = data.safety_and_security_10_1_1_C; $scope.safety_and_security_10_1_1_C = true; $scope.safety_and_security_10_1_1_C_b = false; $scope.safety_and_security_10_1_1_C_c = false; $scope.safety_and_security_10_1_1_C_cm = ''; } else if(data.safety_and_security_10_1_1_C  == 1){ $scope.safety_and_security_10_1_1_C = data.safety_and_security_10_1_1_C; $scope.safety_and_security_10_1_1_C = false; $scope.safety_and_security_10_1_1_C_b = true; $scope.safety_and_security_10_1_1_C_c = false; $scope.safety_and_security_10_1_1_C_cm = ''; } else if(data.safety_and_security_10_1_1_C  == ){ $scope.safety_and_security_10_1_1_C = data.safety_and_security_10_1_1_C; $scope.safety_and_security_10_1_1_C = false; $scope.safety_and_security_10_1_1_C_b = false; $scope.safety_and_security_10_1_1_C_c = true; $scope.safety_and_security_10_1_1_C_cm = ''; }else if( ((data.safety_and_security_10_1_1_C  > 0 ) && (data.safety_and_security_10_1_1_C  < 1)) || ((data.safety_and_security_10_1_1_C  > 1 ) && (data.safety_and_security_10_1_1_C  < )) )
				{ $scope.safety_and_security_10_1_1_C_cm = data.safety_and_security_10_1_1_C; $scope.safety_and_security_10_1_1_C = false; $scope.safety_and_security_10_1_1_C_b = false;  $scope.safety_and_security_10_1_1_C_c = false; $scope.safety_and_security_10_1_1_C = ''; }else{ $scope.safety_and_security_10_1_1_C = ''; $scope.safety_and_security_10_1_1_C_cm = ''; $scope.safety_and_security_10_1_1_C = false; $scope.safety_and_security_10_1_1_C_b = false; $scope.safety_and_security_10_1_1_C_c = false; }
				if(data.safety_and_security_10_1_1_D == 0){ $scope.safety_and_security_10_1_1_D = data.safety_and_security_10_1_1_D; $scope.safety_and_security_10_1_1_D = true; $scope.safety_and_security_10_1_1_D_b = false; $scope.safety_and_security_10_1_1_D_c = false; $scope.safety_and_security_10_1_1_D_cm = ''; } else if(data.safety_and_security_10_1_1_D  == 1){ $scope.safety_and_security_10_1_1_D = data.safety_and_security_10_1_1_D; $scope.safety_and_security_10_1_1_D = false; $scope.safety_and_security_10_1_1_D_b = true; $scope.safety_and_security_10_1_1_D_c = false; $scope.safety_and_security_10_1_1_D_cm = ''; } else if(data.safety_and_security_10_1_1_D  == ){ $scope.safety_and_security_10_1_1_D = data.safety_and_security_10_1_1_D; $scope.safety_and_security_10_1_1_D = false; $scope.safety_and_security_10_1_1_D_b = false; $scope.safety_and_security_10_1_1_D_c = true; $scope.safety_and_security_10_1_1_D_cm = ''; }else if( ((data.safety_and_security_10_1_1_D  > 0 ) && (data.safety_and_security_10_1_1_D  < 1)) || ((data.safety_and_security_10_1_1_D  > 1 ) && (data.safety_and_security_10_1_1_D  < )) )
				{ $scope.safety_and_security_10_1_1_D_cm = data.safety_and_security_10_1_1_D; $scope.safety_and_security_10_1_1_D = false; $scope.safety_and_security_10_1_1_D_b = false;  $scope.safety_and_security_10_1_1_D_c = false; $scope.safety_and_security_10_1_1_D = ''; }else{ $scope.safety_and_security_10_1_1_D = ''; $scope.safety_and_security_10_1_1_D_cm = ''; $scope.safety_and_security_10_1_1_D = false; $scope.safety_and_security_10_1_1_D_b = false; $scope.safety_and_security_10_1_1_D_c = false; }
				if(data.safety_and_security_10_1_1_E_a == 1){ $scope.safety_and_security_10_1_1_E_a = data.safety_and_security_10_1_1_E_a; $scope.safety_and_security_10_1_1_E_a= true; $scope.safety_and_security_10_1_1_E_a_cm = ''; } else if((data.safety_and_security_10_1_1_E_a > 0 ) && (data.safety_and_security_10_1_1_E_a < 1)){ $scope.safety_and_security_10_1_1_E_a_cm = data.safety_and_security_10_1_1_E_a; $scope.safety_and_security_10_1_1_E_a= false; $scope.safety_and_security_10_1_1_E_a= ''; }else{ $scope.safety_and_security_10_1_1_E_a= ''; $scope.safety_and_security_10_1_1_E_a_cm = ''; $scope.safety_and_security_10_1_1_E_a= false; }
				if(data.safety_and_security_10_1_1_E_b == 1){ $scope.safety_and_security_10_1_1_E_b = data.safety_and_security_10_1_1_E_b; $scope.safety_and_security_10_1_1_E_b= true; $scope.safety_and_security_10_1_1_E_b_cm = ''; } else if((data.safety_and_security_10_1_1_E_b > 0 ) && (data.safety_and_security_10_1_1_E_b < 1)){ $scope.safety_and_security_10_1_1_E_b_cm = data.safety_and_security_10_1_1_E_b; $scope.safety_and_security_10_1_1_E_b= false; $scope.safety_and_security_10_1_1_E_b= ''; }else{ $scope.safety_and_security_10_1_1_E_b= ''; $scope.safety_and_security_10_1_1_E_b_cm = ''; $scope.safety_and_security_10_1_1_E_b= false; }
				if(data.safety_and_security_10_1_1_E_c == 1){ $scope.safety_and_security_10_1_1_E_c = data.safety_and_security_10_1_1_E_c; $scope.safety_and_security_10_1_1_E_c= true; $scope.safety_and_security_10_1_1_E_c_cm = ''; } else if((data.safety_and_security_10_1_1_E_c > 0 ) && (data.safety_and_security_10_1_1_E_c < 1)){ $scope.safety_and_security_10_1_1_E_c_cm = data.safety_and_security_10_1_1_E_c; $scope.safety_and_security_10_1_1_E_c= false; $scope.safety_and_security_10_1_1_E_c= ''; }else{ $scope.safety_and_security_10_1_1_E_c= ''; $scope.safety_and_security_10_1_1_E_c_cm = ''; $scope.safety_and_security_10_1_1_E_c= false; }
				if(data.safety_and_security_10_1_1_E_d == 1){ $scope.safety_and_security_10_1_1_E_d = data.safety_and_security_10_1_1_E_d; $scope.safety_and_security_10_1_1_E_d= true; $scope.safety_and_security_10_1_1_E_d_cm = ''; } else if((data.safety_and_security_10_1_1_E_d > 0 ) && (data.safety_and_security_10_1_1_E_d < 1)){ $scope.safety_and_security_10_1_1_E_d_cm = data.safety_and_security_10_1_1_E_d; $scope.safety_and_security_10_1_1_E_d= false; $scope.safety_and_security_10_1_1_E_d= ''; }else{ $scope.safety_and_security_10_1_1_E_d= ''; $scope.safety_and_security_10_1_1_E_d_cm = ''; $scope.safety_and_security_10_1_1_E_d= false; }
				if(data.safety_and_security_10_1_1_E_e == 1){ $scope.safety_and_security_10_1_1_E_e = data.safety_and_security_10_1_1_E_e; $scope.safety_and_security_10_1_1_E_e= true; $scope.safety_and_security_10_1_1_E_e_cm = ''; } else if((data.safety_and_security_10_1_1_E_e > 0 ) && (data.safety_and_security_10_1_1_E_e < 1)){ $scope.safety_and_security_10_1_1_E_e_cm = data.safety_and_security_10_1_1_E_e; $scope.safety_and_security_10_1_1_E_e= false; $scope.safety_and_security_10_1_1_E_e= ''; }else{ $scope.safety_and_security_10_1_1_E_e= ''; $scope.safety_and_security_10_1_1_E_e_cm = ''; $scope.safety_and_security_10_1_1_E_e= false; }
				if(data.safety_and_security_10_1_1_E_f == 1){ $scope.safety_and_security_10_1_1_E_f = data.safety_and_security_10_1_1_E_f; $scope.safety_and_security_10_1_1_E_f= true; $scope.safety_and_security_10_1_1_E_f_cm = ''; } else if((data.safety_and_security_10_1_1_E_f > 0 ) && (data.safety_and_security_10_1_1_E_f < 1)){ $scope.safety_and_security_10_1_1_E_f_cm = data.safety_and_security_10_1_1_E_f; $scope.safety_and_security_10_1_1_E_f= false; $scope.safety_and_security_10_1_1_E_f= ''; }else{ $scope.safety_and_security_10_1_1_E_f= ''; $scope.safety_and_security_10_1_1_E_f_cm = ''; $scope.safety_and_security_10_1_1_E_f= false; }
				if(data.safety_and_security_10_1_1_E_g == 1){ $scope.safety_and_security_10_1_1_E_g = data.safety_and_security_10_1_1_E_g; $scope.safety_and_security_10_1_1_E_g= true; $scope.safety_and_security_10_1_1_E_g_cm = ''; } else if((data.safety_and_security_10_1_1_E_g > 0 ) && (data.safety_and_security_10_1_1_E_g < 1)){ $scope.safety_and_security_10_1_1_E_g_cm = data.safety_and_security_10_1_1_E_g; $scope.safety_and_security_10_1_1_E_g= false; $scope.safety_and_security_10_1_1_E_g= ''; }else{ $scope.safety_and_security_10_1_1_E_g= ''; $scope.safety_and_security_10_1_1_E_g_cm = ''; $scope.safety_and_security_10_1_1_E_g= false; }
				if(data.safety_and_security_10_1_1_F == 0){ $scope.safety_and_security_10_1_1_F = data.safety_and_security_10_1_1_F; $scope.safety_and_security_10_1_1_F = true; $scope.safety_and_security_10_1_1_F_b = false; $scope.safety_and_security_10_1_1_F_c = false; $scope.safety_and_security_10_1_1_F_cm = ''; } else if(data.safety_and_security_10_1_1_F  == 1){ $scope.safety_and_security_10_1_1_F = data.safety_and_security_10_1_1_F; $scope.safety_and_security_10_1_1_F = false; $scope.safety_and_security_10_1_1_F_b = true; $scope.safety_and_security_10_1_1_F_c = false; $scope.safety_and_security_10_1_1_F_cm = ''; } else if(data.safety_and_security_10_1_1_F  == ){ $scope.safety_and_security_10_1_1_F = data.safety_and_security_10_1_1_F; $scope.safety_and_security_10_1_1_F = false; $scope.safety_and_security_10_1_1_F_b = false; $scope.safety_and_security_10_1_1_F_c = true; $scope.safety_and_security_10_1_1_F_cm = ''; }else if( ((data.safety_and_security_10_1_1_F  > 0 ) && (data.safety_and_security_10_1_1_F  < 1)) || ((data.safety_and_security_10_1_1_F  > 1 ) && (data.safety_and_security_10_1_1_F  < )) )
				{ $scope.safety_and_security_10_1_1_F_cm = data.safety_and_security_10_1_1_F; $scope.safety_and_security_10_1_1_F = false; $scope.safety_and_security_10_1_1_F_b = false;  $scope.safety_and_security_10_1_1_F_c = false; $scope.safety_and_security_10_1_1_F = ''; }else{ $scope.safety_and_security_10_1_1_F = ''; $scope.safety_and_security_10_1_1_F_cm = ''; $scope.safety_and_security_10_1_1_F = false; $scope.safety_and_security_10_1_1_F_b = false; $scope.safety_and_security_10_1_1_F_c = false; }
				if(data.safety_and_security_10_1_1_G == 1){ $scope.safety_and_security_10_1_1_G = data.safety_and_security_10_1_1_G; $scope.safety_and_security_10_1_1_G = true; $scope.safety_and_security_10_1_1_G_b = false; $scope.safety_and_security_10_1_1_G_c = false; $scope.safety_and_security_10_1_1_G_cm = ''; } else if(data.safety_and_security_10_1_1_G  == 2){ $scope.safety_and_security_10_1_1_G = data.safety_and_security_10_1_1_G; $scope.safety_and_security_10_1_1_G = false; $scope.safety_and_security_10_1_1_G_b = true; $scope.safety_and_security_10_1_1_G_c = false; $scope.safety_and_security_10_1_1_G_cm = ''; } else if(data.safety_and_security_10_1_1_G  == 4){ 
				$scope.safety_and_security_10_1_1_G = data.safety_and_security_10_1_1_G; $scope.safety_and_security_10_1_1_G = false; $scope.safety_and_security_10_1_1_G_b = false; $scope.safety_and_security_10_1_1_G_c = true; $scope.safety_and_security_10_1_1_G_cm = ''; } else if( ((data.safety_and_security_10_1_1_G  >= 0 ) && (data.safety_and_security_10_1_1_G  < 1)) || ((data.safety_and_security_10_1_1_G  > 1 ) && (data.safety_and_security_10_1_1_G  < 2)) || ((data.safety_and_security_10_1_1_G  > 2 ) && (data.safety_and_security_10_1_1_G  < 4)) ){ $scope.safety_and_security_10_1_1_G_cm = data.safety_and_security_10_1_1_G; $scope.safety_and_security_10_1_1_G = false; $scope.safety_and_security_10_1_1_G_b = false; $scope.safety_and_security_10_1_1_G_c = false; $scope.safety_and_security_10_1_1_G = ''; }else{ $scope.safety_and_security_10_1_1_G = ''; $scope.safety_and_security_10_1_1_G_cm = ''; $scope.safety_and_security_10_1_1_G = false; $scope.safety_and_security_10_1_1_G_b = false; $scope.safety_and_security_10_1_1_G_c = false;}
				if(data.safety_and_security_10_1_1_H == 0){ $scope.safety_and_security_10_1_1_H = data.safety_and_security_10_1_1_H; $scope.safety_and_security_10_1_1_H = true; $scope.safety_and_security_10_1_1_H_b = false; $scope.safety_and_security_10_1_1_H_c = false; $scope.safety_and_security_10_1_1_H_cm = ''; } else if(data.safety_and_security_10_1_1_H  == 1){ $scope.safety_and_security_10_1_1_H = data.safety_and_security_10_1_1_H; $scope.safety_and_security_10_1_1_H = false; $scope.safety_and_security_10_1_1_H_b = true; $scope.safety_and_security_10_1_1_H_c = false; $scope.safety_and_security_10_1_1_H_cm = ''; } else if(data.safety_and_security_10_1_1_H  == ){ $scope.safety_and_security_10_1_1_H = data.safety_and_security_10_1_1_H; $scope.safety_and_security_10_1_1_H = false; $scope.safety_and_security_10_1_1_H_b = false; $scope.safety_and_security_10_1_1_H_c = true; $scope.safety_and_security_10_1_1_H_cm = ''; }else if( ((data.safety_and_security_10_1_1_H  > 0 ) && (data.safety_and_security_10_1_1_H  < 1)) || ((data.safety_and_security_10_1_1_H  > 1 ) && (data.safety_and_security_10_1_1_H  < )) )
				{ $scope.safety_and_security_10_1_1_H_cm = data.safety_and_security_10_1_1_H; $scope.safety_and_security_10_1_1_H = false; $scope.safety_and_security_10_1_1_H_b = false;  $scope.safety_and_security_10_1_1_H_c = false; $scope.safety_and_security_10_1_1_H = ''; }else{ $scope.safety_and_security_10_1_1_H = ''; $scope.safety_and_security_10_1_1_H_cm = ''; $scope.safety_and_security_10_1_1_H = false; $scope.safety_and_security_10_1_1_H_b = false; $scope.safety_and_security_10_1_1_H_c = false; }
				if(data.safety_and_security_10_1_1_I  == 1){ $scope.safety_and_security_10_1_1_I  = data.safety_and_security_10_1_1_I ; $scope.safety_and_security_10_1_1_I = true; $scope.safety_and_security_10_1_1_I_b = false; $scope.safety_and_security_10_1_1_I_cm = ''; } else if(data.safety_and_security_10_1_1_I  == 2){ $scope.safety_and_security_10_1_1_I  = data.safety_and_security_10_1_1_I ; $scope.safety_and_security_10_1_1_I = false; $scope.safety_and_security_10_1_1_I_b = true; $scope.safety_and_security_10_1_1_I_cm = ''; }else if( ((data.safety_and_security_10_1_1_I  > 0 ) && (data.safety_and_security_10_1_1_I  < 1)) || ((data.safety_and_security_10_1_1_I  > 1 ) && (data.safety_and_security_10_1_1_I  < 2)))
				{ $scope.safety_and_security_10_1_1_I_cm = data.safety_and_security_10_1_1_I ; $scope.safety_and_security_10_1_1_I = false; $scope.safety_and_security_10_1_1_I_b = false; $scope.safety_and_security_10_1_1_I  = ''; }else{ $scope.safety_and_security_10_1_1_I  = ''; $scope.safety_and_security_10_1_1_I_cm = ''; $scope.safety_and_security_10_1_1_I = false; $scope.safety_and_security_10_1_1_I_b = false; }
				$scope.safety_and_security_10_2_1_text = data.safety_and_security_10_2_1_text;
				if(data.safety_and_security_10_2_1_A == 0){ $scope.safety_and_security_10_2_1_A = data.safety_and_security_10_2_1_A; $scope.safety_and_security_10_2_1_A = true; $scope.safety_and_security_10_2_1_A_b = false; $scope.safety_and_security_10_2_1_A_c = false; $scope.safety_and_security_10_2_1_A_cm = ''; } else if(data.safety_and_security_10_2_1_A  == 15){ $scope.safety_and_security_10_2_1_A = data.safety_and_security_10_2_1_A; $scope.safety_and_security_10_2_1_A = false; $scope.safety_and_security_10_2_1_A_b = true; $scope.safety_and_security_10_2_1_A_c = false; $scope.safety_and_security_10_2_1_A_cm = ''; } else if(data.safety_and_security_10_2_1_A  == ){ $scope.safety_and_security_10_2_1_A = data.safety_and_security_10_2_1_A; $scope.safety_and_security_10_2_1_A = false; $scope.safety_and_security_10_2_1_A_b = false; $scope.safety_and_security_10_2_1_A_c = true; $scope.safety_and_security_10_2_1_A_cm = ''; }else if( ((data.safety_and_security_10_2_1_A  > 0 ) && (data.safety_and_security_10_2_1_A  < 15)) || ((data.safety_and_security_10_2_1_A  > 15 ) && (data.safety_and_security_10_2_1_A  < )) )
				{ $scope.safety_and_security_10_2_1_A_cm = data.safety_and_security_10_2_1_A; $scope.safety_and_security_10_2_1_A = false; $scope.safety_and_security_10_2_1_A_b = false;  $scope.safety_and_security_10_2_1_A_c = false; $scope.safety_and_security_10_2_1_A = ''; }else{ $scope.safety_and_security_10_2_1_A = ''; $scope.safety_and_security_10_2_1_A_cm = ''; $scope.safety_and_security_10_2_1_A = false; $scope.safety_and_security_10_2_1_A_b = false; $scope.safety_and_security_10_2_1_A_c = false; }
				if(data.safety_and_security_10_2_1_B == 2){ $scope.safety_and_security_10_2_1_B = data.safety_and_security_10_2_1_B; $scope.safety_and_security_10_2_1_B = true; $scope.safety_and_security_10_2_1_B_b = false; $scope.safety_and_security_10_2_1_B_c = false; $scope.safety_and_security_10_2_1_B_cm = ''; } else if(data.safety_and_security_10_2_1_B  == 3){ $scope.safety_and_security_10_2_1_B = data.safety_and_security_10_2_1_B; $scope.safety_and_security_10_2_1_B = false; $scope.safety_and_security_10_2_1_B_b = true; $scope.safety_and_security_10_2_1_B_c = false; $scope.safety_and_security_10_2_1_B_cm = ''; } else if(data.safety_and_security_10_2_1_B  == 5){ 
				$scope.safety_and_security_10_2_1_B = data.safety_and_security_10_2_1_B; $scope.safety_and_security_10_2_1_B = false; $scope.safety_and_security_10_2_1_B_b = false; $scope.safety_and_security_10_2_1_B_c = true; $scope.safety_and_security_10_2_1_B_cm = ''; } else if( ((data.safety_and_security_10_2_1_B  >= 0 ) && (data.safety_and_security_10_2_1_B  < 2)) || ((data.safety_and_security_10_2_1_B  > 2 ) && (data.safety_and_security_10_2_1_B  < 3)) || ((data.safety_and_security_10_2_1_B  > 3 ) && (data.safety_and_security_10_2_1_B  < 5)) ){ $scope.safety_and_security_10_2_1_B_cm = data.safety_and_security_10_2_1_B; $scope.safety_and_security_10_2_1_B = false; $scope.safety_and_security_10_2_1_B_b = false; $scope.safety_and_security_10_2_1_B_c = false; $scope.safety_and_security_10_2_1_B = ''; }else{ $scope.safety_and_security_10_2_1_B = ''; $scope.safety_and_security_10_2_1_B_cm = ''; $scope.safety_and_security_10_2_1_B = false; $scope.safety_and_security_10_2_1_B_b = false; $scope.safety_and_security_10_2_1_B_c = false;}
				$scope.safety_and_security_10_3_1_text = data.safety_and_security_10_3_1_text;
				if(data.safety_and_security_10_3_1_A == 0){ $scope.safety_and_security_10_3_1_A = data.safety_and_security_10_3_1_A; $scope.safety_and_security_10_3_1_A = true; $scope.safety_and_security_10_3_1_A_b = false; $scope.safety_and_security_10_3_1_A_c = false; $scope.safety_and_security_10_3_1_A_cm = ''; } else if(data.safety_and_security_10_3_1_A  == 3){ $scope.safety_and_security_10_3_1_A = data.safety_and_security_10_3_1_A; $scope.safety_and_security_10_3_1_A = false; $scope.safety_and_security_10_3_1_A_b = true; $scope.safety_and_security_10_3_1_A_c = false; $scope.safety_and_security_10_3_1_A_cm = ''; } else if(data.safety_and_security_10_3_1_A  == ){ $scope.safety_and_security_10_3_1_A = data.safety_and_security_10_3_1_A; $scope.safety_and_security_10_3_1_A = false; $scope.safety_and_security_10_3_1_A_b = false; $scope.safety_and_security_10_3_1_A_c = true; $scope.safety_and_security_10_3_1_A_cm = ''; }else if( ((data.safety_and_security_10_3_1_A  > 0 ) && (data.safety_and_security_10_3_1_A  < 3)) || ((data.safety_and_security_10_3_1_A  > 3 ) && (data.safety_and_security_10_3_1_A  < )) )
				{ $scope.safety_and_security_10_3_1_A_cm = data.safety_and_security_10_3_1_A; $scope.safety_and_security_10_3_1_A = false; $scope.safety_and_security_10_3_1_A_b = false;  $scope.safety_and_security_10_3_1_A_c = false; $scope.safety_and_security_10_3_1_A = ''; }else{ $scope.safety_and_security_10_3_1_A = ''; $scope.safety_and_security_10_3_1_A_cm = ''; $scope.safety_and_security_10_3_1_A = false; $scope.safety_and_security_10_3_1_A_b = false; $scope.safety_and_security_10_3_1_A_c = false; }
				if(data.safety_and_security_10_3_1_B == 1){ $scope.safety_and_security_10_3_1_B = data.safety_and_security_10_3_1_B; $scope.safety_and_security_10_3_1_B = true; $scope.safety_and_security_10_3_1_B_b = false; $scope.safety_and_security_10_3_1_B_c = false; $scope.safety_and_security_10_3_1_B_cm = ''; } else if(data.safety_and_security_10_3_1_B  == 3){ $scope.safety_and_security_10_3_1_B = data.safety_and_security_10_3_1_B; $scope.safety_and_security_10_3_1_B = false; $scope.safety_and_security_10_3_1_B_b = true; $scope.safety_and_security_10_3_1_B_c = false; $scope.safety_and_security_10_3_1_B_cm = ''; } else if(data.safety_and_security_10_3_1_B  == 5){ 
				$scope.safety_and_security_10_3_1_B = data.safety_and_security_10_3_1_B; $scope.safety_and_security_10_3_1_B = false; $scope.safety_and_security_10_3_1_B_b = false; $scope.safety_and_security_10_3_1_B_c = true; $scope.safety_and_security_10_3_1_B_cm = ''; } else if( ((data.safety_and_security_10_3_1_B  >= 0 ) && (data.safety_and_security_10_3_1_B  < 1)) || ((data.safety_and_security_10_3_1_B  > 1 ) && (data.safety_and_security_10_3_1_B  < 3)) || ((data.safety_and_security_10_3_1_B  > 3 ) && (data.safety_and_security_10_3_1_B  < 5)) ){ $scope.safety_and_security_10_3_1_B_cm = data.safety_and_security_10_3_1_B; $scope.safety_and_security_10_3_1_B = false; $scope.safety_and_security_10_3_1_B_b = false; $scope.safety_and_security_10_3_1_B_c = false; $scope.safety_and_security_10_3_1_B = ''; }else{ $scope.safety_and_security_10_3_1_B = ''; $scope.safety_and_security_10_3_1_B_cm = ''; $scope.safety_and_security_10_3_1_B = false; $scope.safety_and_security_10_3_1_B_b = false; $scope.safety_and_security_10_3_1_B_c = false;}
				if(data.safety_and_security_10_3_1_C == 0){ $scope.safety_and_security_10_3_1_C = data.safety_and_security_10_3_1_C; $scope.safety_and_security_10_3_1_C = true; $scope.safety_and_security_10_3_1_C_b = false; $scope.safety_and_security_10_3_1_C_c = false; $scope.safety_and_security_10_3_1_C_cm = ''; } else if(data.safety_and_security_10_3_1_C  == 3){ $scope.safety_and_security_10_3_1_C = data.safety_and_security_10_3_1_C; $scope.safety_and_security_10_3_1_C = false; $scope.safety_and_security_10_3_1_C_b = true; $scope.safety_and_security_10_3_1_C_c = false; $scope.safety_and_security_10_3_1_C_cm = ''; } else if(data.safety_and_security_10_3_1_C  == ){ $scope.safety_and_security_10_3_1_C = data.safety_and_security_10_3_1_C; $scope.safety_and_security_10_3_1_C = false; $scope.safety_and_security_10_3_1_C_b = false; $scope.safety_and_security_10_3_1_C_c = true; $scope.safety_and_security_10_3_1_C_cm = ''; }else if( ((data.safety_and_security_10_3_1_C  > 0 ) && (data.safety_and_security_10_3_1_C  < 3)) || ((data.safety_and_security_10_3_1_C  > 3 ) && (data.safety_and_security_10_3_1_C  < )) )
				{ $scope.safety_and_security_10_3_1_C_cm = data.safety_and_security_10_3_1_C; $scope.safety_and_security_10_3_1_C = false; $scope.safety_and_security_10_3_1_C_b = false;  $scope.safety_and_security_10_3_1_C_c = false; $scope.safety_and_security_10_3_1_C = ''; }else{ $scope.safety_and_security_10_3_1_C = ''; $scope.safety_and_security_10_3_1_C_cm = ''; $scope.safety_and_security_10_3_1_C = false; $scope.safety_and_security_10_3_1_C_b = false; $scope.safety_and_security_10_3_1_C_c = false; }
				if(data.safety_and_security_10_3_1_D == 1){ $scope.safety_and_security_10_3_1_D = data.safety_and_security_10_3_1_D; $scope.safety_and_security_10_3_1_D = true; $scope.safety_and_security_10_3_1_D_b = false; $scope.safety_and_security_10_3_1_D_c = false; $scope.safety_and_security_10_3_1_D_cm = ''; } else if(data.safety_and_security_10_3_1_D  == 3){ $scope.safety_and_security_10_3_1_D = data.safety_and_security_10_3_1_D; $scope.safety_and_security_10_3_1_D = false; $scope.safety_and_security_10_3_1_D_b = true; $scope.safety_and_security_10_3_1_D_c = false; $scope.safety_and_security_10_3_1_D_cm = ''; } else if(data.safety_and_security_10_3_1_D  == 5){ 
				$scope.safety_and_security_10_3_1_D = data.safety_and_security_10_3_1_D; $scope.safety_and_security_10_3_1_D = false; $scope.safety_and_security_10_3_1_D_b = false; $scope.safety_and_security_10_3_1_D_c = true; $scope.safety_and_security_10_3_1_D_cm = ''; } else if( ((data.safety_and_security_10_3_1_D  >= 0 ) && (data.safety_and_security_10_3_1_D  < 1)) || ((data.safety_and_security_10_3_1_D  > 1 ) && (data.safety_and_security_10_3_1_D  < 3)) || ((data.safety_and_security_10_3_1_D  > 3 ) && (data.safety_and_security_10_3_1_D  < 5)) ){ $scope.safety_and_security_10_3_1_D_cm = data.safety_and_security_10_3_1_D; $scope.safety_and_security_10_3_1_D = false; $scope.safety_and_security_10_3_1_D_b = false; $scope.safety_and_security_10_3_1_D_c = false; $scope.safety_and_security_10_3_1_D = ''; }else{ $scope.safety_and_security_10_3_1_D = ''; $scope.safety_and_security_10_3_1_D_cm = ''; $scope.safety_and_security_10_3_1_D = false; $scope.safety_and_security_10_3_1_D_b = false; $scope.safety_and_security_10_3_1_D_c = false;}
				if(data.safety_and_security_10_3_1_E == 0){ $scope.safety_and_security_10_3_1_E = data.safety_and_security_10_3_1_E; $scope.safety_and_security_10_3_1_E = true; $scope.safety_and_security_10_3_1_E_b = false; $scope.safety_and_security_10_3_1_E_c = false; $scope.safety_and_security_10_3_1_E_cm = ''; } else if(data.safety_and_security_10_3_1_E  == 3){ $scope.safety_and_security_10_3_1_E = data.safety_and_security_10_3_1_E; $scope.safety_and_security_10_3_1_E = false; $scope.safety_and_security_10_3_1_E_b = true; $scope.safety_and_security_10_3_1_E_c = false; $scope.safety_and_security_10_3_1_E_cm = ''; } else if(data.safety_and_security_10_3_1_E  == ){ $scope.safety_and_security_10_3_1_E = data.safety_and_security_10_3_1_E; $scope.safety_and_security_10_3_1_E = false; $scope.safety_and_security_10_3_1_E_b = false; $scope.safety_and_security_10_3_1_E_c = true; $scope.safety_and_security_10_3_1_E_cm = ''; }else if( ((data.safety_and_security_10_3_1_E  > 0 ) && (data.safety_and_security_10_3_1_E  < 3)) || ((data.safety_and_security_10_3_1_E  > 3 ) && (data.safety_and_security_10_3_1_E  < )) )
				{ $scope.safety_and_security_10_3_1_E_cm = data.safety_and_security_10_3_1_E; $scope.safety_and_security_10_3_1_E = false; $scope.safety_and_security_10_3_1_E_b = false;  $scope.safety_and_security_10_3_1_E_c = false; $scope.safety_and_security_10_3_1_E = ''; }else{ $scope.safety_and_security_10_3_1_E = ''; $scope.safety_and_security_10_3_1_E_cm = ''; $scope.safety_and_security_10_3_1_E = false; $scope.safety_and_security_10_3_1_E_b = false; $scope.safety_and_security_10_3_1_E_c = false; }
				if(data.safety_and_security_10_3_1_F == 1){ $scope.safety_and_security_10_3_1_F = data.safety_and_security_10_3_1_F; $scope.safety_and_security_10_3_1_F = true; $scope.safety_and_security_10_3_1_F_b = false; $scope.safety_and_security_10_3_1_F_c = false; $scope.safety_and_security_10_3_1_F_cm = ''; } else if(data.safety_and_security_10_3_1_F  == 3){ $scope.safety_and_security_10_3_1_F = data.safety_and_security_10_3_1_F; $scope.safety_and_security_10_3_1_F = false; $scope.safety_and_security_10_3_1_F_b = true; $scope.safety_and_security_10_3_1_F_c = false; $scope.safety_and_security_10_3_1_F_cm = ''; } else if(data.safety_and_security_10_3_1_F  == 5){ 
				$scope.safety_and_security_10_3_1_F = data.safety_and_security_10_3_1_F; $scope.safety_and_security_10_3_1_F = false; $scope.safety_and_security_10_3_1_F_b = false; $scope.safety_and_security_10_3_1_F_c = true; $scope.safety_and_security_10_3_1_F_cm = ''; } else if( ((data.safety_and_security_10_3_1_F  >= 0 ) && (data.safety_and_security_10_3_1_F  < 1)) || ((data.safety_and_security_10_3_1_F  > 1 ) && (data.safety_and_security_10_3_1_F  < 3)) || ((data.safety_and_security_10_3_1_F  > 3 ) && (data.safety_and_security_10_3_1_F  < 5)) ){ $scope.safety_and_security_10_3_1_F_cm = data.safety_and_security_10_3_1_F; $scope.safety_and_security_10_3_1_F = false; $scope.safety_and_security_10_3_1_F_b = false; $scope.safety_and_security_10_3_1_F_c = false; $scope.safety_and_security_10_3_1_F = ''; }else{ $scope.safety_and_security_10_3_1_F = ''; $scope.safety_and_security_10_3_1_F_cm = ''; $scope.safety_and_security_10_3_1_F = false; $scope.safety_and_security_10_3_1_F_b = false; $scope.safety_and_security_10_3_1_F_c = false;}
				if(data.safety_and_security_10_3_1_G == 0){ $scope.safety_and_security_10_3_1_G = data.safety_and_security_10_3_1_G; $scope.safety_and_security_10_3_1_G = true; $scope.safety_and_security_10_3_1_G_b = false; $scope.safety_and_security_10_3_1_G_c = false; $scope.safety_and_security_10_3_1_G_cm = ''; } else if(data.safety_and_security_10_3_1_G  == 3){ $scope.safety_and_security_10_3_1_G = data.safety_and_security_10_3_1_G; $scope.safety_and_security_10_3_1_G = false; $scope.safety_and_security_10_3_1_G_b = true; $scope.safety_and_security_10_3_1_G_c = false; $scope.safety_and_security_10_3_1_G_cm = ''; } else if(data.safety_and_security_10_3_1_G  == ){ $scope.safety_and_security_10_3_1_G = data.safety_and_security_10_3_1_G; $scope.safety_and_security_10_3_1_G = false; $scope.safety_and_security_10_3_1_G_b = false; $scope.safety_and_security_10_3_1_G_c = true; $scope.safety_and_security_10_3_1_G_cm = ''; }else if( ((data.safety_and_security_10_3_1_G  > 0 ) && (data.safety_and_security_10_3_1_G  < 3)) || ((data.safety_and_security_10_3_1_G  > 3 ) && (data.safety_and_security_10_3_1_G  < )) )
				{ $scope.safety_and_security_10_3_1_G_cm = data.safety_and_security_10_3_1_G; $scope.safety_and_security_10_3_1_G = false; $scope.safety_and_security_10_3_1_G_b = false;  $scope.safety_and_security_10_3_1_G_c = false; $scope.safety_and_security_10_3_1_G = ''; }else{ $scope.safety_and_security_10_3_1_G = ''; $scope.safety_and_security_10_3_1_G_cm = ''; $scope.safety_and_security_10_3_1_G = false; $scope.safety_and_security_10_3_1_G_b = false; $scope.safety_and_security_10_3_1_G_c = false; }
				if(data.safety_and_security_10_3_1_H == 0){ $scope.safety_and_security_10_3_1_H = data.safety_and_security_10_3_1_H; $scope.safety_and_security_10_3_1_H = true; $scope.safety_and_security_10_3_1_H_b = false; $scope.safety_and_security_10_3_1_H_c = false; $scope.safety_and_security_10_3_1_H_cm = ''; } else if(data.safety_and_security_10_3_1_H  == 3){ $scope.safety_and_security_10_3_1_H = data.safety_and_security_10_3_1_H; $scope.safety_and_security_10_3_1_H = false; $scope.safety_and_security_10_3_1_H_b = true; $scope.safety_and_security_10_3_1_H_c = false; $scope.safety_and_security_10_3_1_H_cm = ''; } else if(data.safety_and_security_10_3_1_H  == ){ $scope.safety_and_security_10_3_1_H = data.safety_and_security_10_3_1_H; $scope.safety_and_security_10_3_1_H = false; $scope.safety_and_security_10_3_1_H_b = false; $scope.safety_and_security_10_3_1_H_c = true; $scope.safety_and_security_10_3_1_H_cm = ''; }else if( ((data.safety_and_security_10_3_1_H  > 0 ) && (data.safety_and_security_10_3_1_H  < 3)) || ((data.safety_and_security_10_3_1_H  > 3 ) && (data.safety_and_security_10_3_1_H  < )) )
				{ $scope.safety_and_security_10_3_1_H_cm = data.safety_and_security_10_3_1_H; $scope.safety_and_security_10_3_1_H = false; $scope.safety_and_security_10_3_1_H_b = false;  $scope.safety_and_security_10_3_1_H_c = false; $scope.safety_and_security_10_3_1_H = ''; }else{ $scope.safety_and_security_10_3_1_H = ''; $scope.safety_and_security_10_3_1_H_cm = ''; $scope.safety_and_security_10_3_1_H = false; $scope.safety_and_security_10_3_1_H_b = false; $scope.safety_and_security_10_3_1_H_c = false; }
				$scope.safety_and_security_10_4_1_text = data.safety_and_security_10_4_1_text;
				if(data.safety_and_security_10_4_1_A == 0){ $scope.safety_and_security_10_4_1_A = data.safety_and_security_10_4_1_A; $scope.safety_and_security_10_4_1_A = true; $scope.safety_and_security_10_4_1_A_b = false; $scope.safety_and_security_10_4_1_A_c = false; $scope.safety_and_security_10_4_1_A_cm = ''; } else if(data.safety_and_security_10_4_1_A  == 5){ $scope.safety_and_security_10_4_1_A = data.safety_and_security_10_4_1_A; $scope.safety_and_security_10_4_1_A = false; $scope.safety_and_security_10_4_1_A_b = true; $scope.safety_and_security_10_4_1_A_c = false; $scope.safety_and_security_10_4_1_A_cm = ''; } else if(data.safety_and_security_10_4_1_A  == ){ $scope.safety_and_security_10_4_1_A = data.safety_and_security_10_4_1_A; $scope.safety_and_security_10_4_1_A = false; $scope.safety_and_security_10_4_1_A_b = false; $scope.safety_and_security_10_4_1_A_c = true; $scope.safety_and_security_10_4_1_A_cm = ''; }else if( ((data.safety_and_security_10_4_1_A  > 0 ) && (data.safety_and_security_10_4_1_A  < 5)) || ((data.safety_and_security_10_4_1_A  > 5 ) && (data.safety_and_security_10_4_1_A  < )) )
				{ $scope.safety_and_security_10_4_1_A_cm = data.safety_and_security_10_4_1_A; $scope.safety_and_security_10_4_1_A = false; $scope.safety_and_security_10_4_1_A_b = false;  $scope.safety_and_security_10_4_1_A_c = false; $scope.safety_and_security_10_4_1_A = ''; }else{ $scope.safety_and_security_10_4_1_A = ''; $scope.safety_and_security_10_4_1_A_cm = ''; $scope.safety_and_security_10_4_1_A = false; $scope.safety_and_security_10_4_1_A_b = false; $scope.safety_and_security_10_4_1_A_c = false; }
				if(data.safety_and_security_10_4_1_B == 2){ $scope.safety_and_security_10_4_1_B = data.safety_and_security_10_4_1_B; $scope.safety_and_security_10_4_1_B = true; $scope.safety_and_security_10_4_1_B_b = false; $scope.safety_and_security_10_4_1_B_c = false; $scope.safety_and_security_10_4_1_B_cm = ''; } else if(data.safety_and_security_10_4_1_B  == 5){ $scope.safety_and_security_10_4_1_B = data.safety_and_security_10_4_1_B; $scope.safety_and_security_10_4_1_B = false; $scope.safety_and_security_10_4_1_B_b = true; $scope.safety_and_security_10_4_1_B_c = false; $scope.safety_and_security_10_4_1_B_cm = ''; } else if(data.safety_and_security_10_4_1_B  == 8){ 
				$scope.safety_and_security_10_4_1_B = data.safety_and_security_10_4_1_B; $scope.safety_and_security_10_4_1_B = false; $scope.safety_and_security_10_4_1_B_b = false; $scope.safety_and_security_10_4_1_B_c = true; $scope.safety_and_security_10_4_1_B_cm = ''; } else if( ((data.safety_and_security_10_4_1_B  >= 0 ) && (data.safety_and_security_10_4_1_B  < 2)) || ((data.safety_and_security_10_4_1_B  > 2 ) && (data.safety_and_security_10_4_1_B  < 5)) || ((data.safety_and_security_10_4_1_B  > 5 ) && (data.safety_and_security_10_4_1_B  < 8)) ){ $scope.safety_and_security_10_4_1_B_cm = data.safety_and_security_10_4_1_B; $scope.safety_and_security_10_4_1_B = false; $scope.safety_and_security_10_4_1_B_b = false; $scope.safety_and_security_10_4_1_B_c = false; $scope.safety_and_security_10_4_1_B = ''; }else{ $scope.safety_and_security_10_4_1_B = ''; $scope.safety_and_security_10_4_1_B_cm = ''; $scope.safety_and_security_10_4_1_B = false; $scope.safety_and_security_10_4_1_B_b = false; $scope.safety_and_security_10_4_1_B_c = false;}
				if(data.safety_and_security_10_4_1_C == 3){ $scope.safety_and_security_10_4_1_C = data.safety_and_security_10_4_1_C; $scope.safety_and_security_10_4_1_C = true; $scope.safety_and_security_10_4_1_C_b = false; $scope.safety_and_security_10_4_1_C_c = false; $scope.safety_and_security_10_4_1_C_cm = ''; } else if(data.safety_and_security_10_4_1_C  == 5){ $scope.safety_and_security_10_4_1_C = data.safety_and_security_10_4_1_C; $scope.safety_and_security_10_4_1_C = false; $scope.safety_and_security_10_4_1_C_b = true; $scope.safety_and_security_10_4_1_C_c = false; $scope.safety_and_security_10_4_1_C_cm = ''; } else if(data.safety_and_security_10_4_1_C  == 7){ 
				$scope.safety_and_security_10_4_1_C = data.safety_and_security_10_4_1_C; $scope.safety_and_security_10_4_1_C = false; $scope.safety_and_security_10_4_1_C_b = false; $scope.safety_and_security_10_4_1_C_c = true; $scope.safety_and_security_10_4_1_C_cm = ''; } else if( ((data.safety_and_security_10_4_1_C  >= 0 ) && (data.safety_and_security_10_4_1_C  < 3)) || ((data.safety_and_security_10_4_1_C  > 3 ) && (data.safety_and_security_10_4_1_C  < 5)) || ((data.safety_and_security_10_4_1_C  > 5 ) && (data.safety_and_security_10_4_1_C  < 7)) ){ $scope.safety_and_security_10_4_1_C_cm = data.safety_and_security_10_4_1_C; $scope.safety_and_security_10_4_1_C = false; $scope.safety_and_security_10_4_1_C_b = false; $scope.safety_and_security_10_4_1_C_c = false; $scope.safety_and_security_10_4_1_C = ''; }else{ $scope.safety_and_security_10_4_1_C = ''; $scope.safety_and_security_10_4_1_C_cm = ''; $scope.safety_and_security_10_4_1_C = false; $scope.safety_and_security_10_4_1_C_b = false; $scope.safety_and_security_10_4_1_C_c = false;}
				$scope.safety_and_security_10_5_1_text = data.safety_and_security_10_5_1_text;
				if(data.safety_and_security_10_5_1_A == 0){ $scope.safety_and_security_10_5_1_A = data.safety_and_security_10_5_1_A; $scope.safety_and_security_10_5_1_A = true; $scope.safety_and_security_10_5_1_A_b = false; $scope.safety_and_security_10_5_1_A_c = false; $scope.safety_and_security_10_5_1_A_cm = ''; } else if(data.safety_and_security_10_5_1_A  == 2){ $scope.safety_and_security_10_5_1_A = data.safety_and_security_10_5_1_A; $scope.safety_and_security_10_5_1_A = false; $scope.safety_and_security_10_5_1_A_b = true; $scope.safety_and_security_10_5_1_A_c = false; $scope.safety_and_security_10_5_1_A_cm = ''; } else if(data.safety_and_security_10_5_1_A  == 4){ $scope.safety_and_security_10_5_1_A = data.safety_and_security_10_5_1_A; $scope.safety_and_security_10_5_1_A = false; $scope.safety_and_security_10_5_1_A_b = false; $scope.safety_and_security_10_5_1_A_c = true; $scope.safety_and_security_10_5_1_A_cm = ''; }else if( ((data.safety_and_security_10_5_1_A  > 0 ) && (data.safety_and_security_10_5_1_A  < 2)) || ((data.safety_and_security_10_5_1_A  > 2 ) && (data.safety_and_security_10_5_1_A  < 4)) )
				{ $scope.safety_and_security_10_5_1_A_cm = data.safety_and_security_10_5_1_A; $scope.safety_and_security_10_5_1_A = false; $scope.safety_and_security_10_5_1_A_b = false;  $scope.safety_and_security_10_5_1_A_c = false; $scope.safety_and_security_10_5_1_A = ''; }else{ $scope.safety_and_security_10_5_1_A = ''; $scope.safety_and_security_10_5_1_A_cm = ''; $scope.safety_and_security_10_5_1_A = false; $scope.safety_and_security_10_5_1_A_b = false; $scope.safety_and_security_10_5_1_A_c = false; }
				if(data.safety_and_security_10_5_1_B == 0){ $scope.safety_and_security_10_5_1_B = data.safety_and_security_10_5_1_B; $scope.safety_and_security_10_5_1_B = true; $scope.safety_and_security_10_5_1_B_b = false; $scope.safety_and_security_10_5_1_B_c = false; $scope.safety_and_security_10_5_1_B_cm = ''; } else if(data.safety_and_security_10_5_1_B  == 3){ $scope.safety_and_security_10_5_1_B = data.safety_and_security_10_5_1_B; $scope.safety_and_security_10_5_1_B = false; $scope.safety_and_security_10_5_1_B_b = true; $scope.safety_and_security_10_5_1_B_c = false; $scope.safety_and_security_10_5_1_B_cm = ''; } else if(data.safety_and_security_10_5_1_B  == ){ $scope.safety_and_security_10_5_1_B = data.safety_and_security_10_5_1_B; $scope.safety_and_security_10_5_1_B = false; $scope.safety_and_security_10_5_1_B_b = false; $scope.safety_and_security_10_5_1_B_c = true; $scope.safety_and_security_10_5_1_B_cm = ''; }else if( ((data.safety_and_security_10_5_1_B  > 0 ) && (data.safety_and_security_10_5_1_B  < 3)) || ((data.safety_and_security_10_5_1_B  > 3 ) && (data.safety_and_security_10_5_1_B  < )) )
				{ $scope.safety_and_security_10_5_1_B_cm = data.safety_and_security_10_5_1_B; $scope.safety_and_security_10_5_1_B = false; $scope.safety_and_security_10_5_1_B_b = false;  $scope.safety_and_security_10_5_1_B_c = false; $scope.safety_and_security_10_5_1_B = ''; }else{ $scope.safety_and_security_10_5_1_B = ''; $scope.safety_and_security_10_5_1_B_cm = ''; $scope.safety_and_security_10_5_1_B = false; $scope.safety_and_security_10_5_1_B_b = false; $scope.safety_and_security_10_5_1_B_c = false; }
				if(data.safety_and_security_10_5_1_C == 0){ $scope.safety_and_security_10_5_1_C = data.safety_and_security_10_5_1_C; $scope.safety_and_security_10_5_1_C = true; $scope.safety_and_security_10_5_1_C_b = false; $scope.safety_and_security_10_5_1_C_c = false; $scope.safety_and_security_10_5_1_C_cm = ''; } else if(data.safety_and_security_10_5_1_C  == 3){ $scope.safety_and_security_10_5_1_C = data.safety_and_security_10_5_1_C; $scope.safety_and_security_10_5_1_C = false; $scope.safety_and_security_10_5_1_C_b = true; $scope.safety_and_security_10_5_1_C_c = false; $scope.safety_and_security_10_5_1_C_cm = ''; } else if(data.safety_and_security_10_5_1_C  == ){ $scope.safety_and_security_10_5_1_C = data.safety_and_security_10_5_1_C; $scope.safety_and_security_10_5_1_C = false; $scope.safety_and_security_10_5_1_C_b = false; $scope.safety_and_security_10_5_1_C_c = true; $scope.safety_and_security_10_5_1_C_cm = ''; }else if( ((data.safety_and_security_10_5_1_C  > 0 ) && (data.safety_and_security_10_5_1_C  < 3)) || ((data.safety_and_security_10_5_1_C  > 3 ) && (data.safety_and_security_10_5_1_C  < )) )
				{ $scope.safety_and_security_10_5_1_C_cm = data.safety_and_security_10_5_1_C; $scope.safety_and_security_10_5_1_C = false; $scope.safety_and_security_10_5_1_C_b = false;  $scope.safety_and_security_10_5_1_C_c = false; $scope.safety_and_security_10_5_1_C = ''; }else{ $scope.safety_and_security_10_5_1_C = ''; $scope.safety_and_security_10_5_1_C_cm = ''; $scope.safety_and_security_10_5_1_C = false; $scope.safety_and_security_10_5_1_C_b = false; $scope.safety_and_security_10_5_1_C_c = false; }
				if(data.safety_and_security_10_5_1_D == 0){ $scope.safety_and_security_10_5_1_D = data.safety_and_security_10_5_1_D; $scope.safety_and_security_10_5_1_D = true; $scope.safety_and_security_10_5_1_D_b = false; $scope.safety_and_security_10_5_1_D_c = false; $scope.safety_and_security_10_5_1_D_cm = ''; } else if(data.safety_and_security_10_5_1_D  == 5){ $scope.safety_and_security_10_5_1_D = data.safety_and_security_10_5_1_D; $scope.safety_and_security_10_5_1_D = false; $scope.safety_and_security_10_5_1_D_b = true; $scope.safety_and_security_10_5_1_D_c = false; $scope.safety_and_security_10_5_1_D_cm = ''; } else if(data.safety_and_security_10_5_1_D  == ){ $scope.safety_and_security_10_5_1_D = data.safety_and_security_10_5_1_D; $scope.safety_and_security_10_5_1_D = false; $scope.safety_and_security_10_5_1_D_b = false; $scope.safety_and_security_10_5_1_D_c = true; $scope.safety_and_security_10_5_1_D_cm = ''; }else if( ((data.safety_and_security_10_5_1_D  > 0 ) && (data.safety_and_security_10_5_1_D  < 5)) || ((data.safety_and_security_10_5_1_D  > 5 ) && (data.safety_and_security_10_5_1_D  < )) )
				{ $scope.safety_and_security_10_5_1_D_cm = data.safety_and_security_10_5_1_D; $scope.safety_and_security_10_5_1_D = false; $scope.safety_and_security_10_5_1_D_b = false;  $scope.safety_and_security_10_5_1_D_c = false; $scope.safety_and_security_10_5_1_D = ''; }else{ $scope.safety_and_security_10_5_1_D = ''; $scope.safety_and_security_10_5_1_D_cm = ''; $scope.safety_and_security_10_5_1_D = false; $scope.safety_and_security_10_5_1_D_b = false; $scope.safety_and_security_10_5_1_D_c = false; }
				if(data.safety_and_security_10_5_1_E == 0){ $scope.safety_and_security_10_5_1_E = data.safety_and_security_10_5_1_E; $scope.safety_and_security_10_5_1_E = true; $scope.safety_and_security_10_5_1_E_b = false; $scope.safety_and_security_10_5_1_E_c = false; $scope.safety_and_security_10_5_1_E_cm = ''; } else if(data.safety_and_security_10_5_1_E  == 5){ $scope.safety_and_security_10_5_1_E = data.safety_and_security_10_5_1_E; $scope.safety_and_security_10_5_1_E = false; $scope.safety_and_security_10_5_1_E_b = true; $scope.safety_and_security_10_5_1_E_c = false; $scope.safety_and_security_10_5_1_E_cm = ''; } else if(data.safety_and_security_10_5_1_E  == ){ $scope.safety_and_security_10_5_1_E = data.safety_and_security_10_5_1_E; $scope.safety_and_security_10_5_1_E = false; $scope.safety_and_security_10_5_1_E_b = false; $scope.safety_and_security_10_5_1_E_c = true; $scope.safety_and_security_10_5_1_E_cm = ''; }else if( ((data.safety_and_security_10_5_1_E  > 0 ) && (data.safety_and_security_10_5_1_E  < 5)) || ((data.safety_and_security_10_5_1_E  > 5 ) && (data.safety_and_security_10_5_1_E  < )) )
				{ $scope.safety_and_security_10_5_1_E_cm = data.safety_and_security_10_5_1_E; $scope.safety_and_security_10_5_1_E = false; $scope.safety_and_security_10_5_1_E_b = false;  $scope.safety_and_security_10_5_1_E_c = false; $scope.safety_and_security_10_5_1_E = ''; }else{ $scope.safety_and_security_10_5_1_E = ''; $scope.safety_and_security_10_5_1_E_cm = ''; $scope.safety_and_security_10_5_1_E = false; $scope.safety_and_security_10_5_1_E_b = false; $scope.safety_and_security_10_5_1_E_c = false; }
				$scope.safety_and_security_10_6_1_text = data.safety_and_security_10_6_1_text;
				if(data.safety_and_security_10_6_1_A  == 5){ $scope.safety_and_security_10_6_1_A  = data.safety_and_security_10_6_1_A ; $scope.safety_and_security_10_6_1_A = true; $scope.safety_and_security_10_6_1_A_b = false; $scope.safety_and_security_10_6_1_A_cm = ''; } else if(data.safety_and_security_10_6_1_A  == 20){ $scope.safety_and_security_10_6_1_A  = data.safety_and_security_10_6_1_A ; $scope.safety_and_security_10_6_1_A = false; $scope.safety_and_security_10_6_1_A_b = true; $scope.safety_and_security_10_6_1_A_cm = ''; }else if( ((data.safety_and_security_10_6_1_A  > 0 ) && (data.safety_and_security_10_6_1_A  < 5)) || ((data.safety_and_security_10_6_1_A  > 5 ) && (data.safety_and_security_10_6_1_A  < 20)))
				{ $scope.safety_and_security_10_6_1_A_cm = data.safety_and_security_10_6_1_A ; $scope.safety_and_security_10_6_1_A = false; $scope.safety_and_security_10_6_1_A_b = false; $scope.safety_and_security_10_6_1_A  = ''; }else{ $scope.safety_and_security_10_6_1_A  = ''; $scope.safety_and_security_10_6_1_A_cm = ''; $scope.safety_and_security_10_6_1_A = false; $scope.safety_and_security_10_6_1_A_b = false; }
				$scope.sundry_services_11_1_1_text = data.sundry_services_11_1_1_text;
				if(data.sundry_services_11_1_1_A == 4){ $scope.sundry_services_11_1_1_A = data.sundry_services_11_1_1_A; $scope.sundry_services_11_1_1_A = true; $scope.sundry_services_11_1_1_A_b = false; $scope.sundry_services_11_1_1_A_c = false; $scope.sundry_services_11_1_1_A_cm = ''; } else if(data.sundry_services_11_1_1_A  == 8){ $scope.sundry_services_11_1_1_A = data.sundry_services_11_1_1_A; $scope.sundry_services_11_1_1_A = false; $scope.sundry_services_11_1_1_A_b = true; $scope.sundry_services_11_1_1_A_c = false; $scope.sundry_services_11_1_1_A_cm = ''; } else if(data.sundry_services_11_1_1_A  == 10){ 
				$scope.sundry_services_11_1_1_A = data.sundry_services_11_1_1_A; $scope.sundry_services_11_1_1_A = false; $scope.sundry_services_11_1_1_A_b = false; $scope.sundry_services_11_1_1_A_c = true; $scope.sundry_services_11_1_1_A_cm = ''; } else if( ((data.sundry_services_11_1_1_A  >= 0 ) && (data.sundry_services_11_1_1_A  < 4)) || ((data.sundry_services_11_1_1_A  > 4 ) && (data.sundry_services_11_1_1_A  < 8)) || ((data.sundry_services_11_1_1_A  > 8 ) && (data.sundry_services_11_1_1_A  < 10)) ){ $scope.sundry_services_11_1_1_A_cm = data.sundry_services_11_1_1_A; $scope.sundry_services_11_1_1_A = false; $scope.sundry_services_11_1_1_A_b = false; $scope.sundry_services_11_1_1_A_c = false; $scope.sundry_services_11_1_1_A = ''; }else{ $scope.sundry_services_11_1_1_A = ''; $scope.sundry_services_11_1_1_A_cm = ''; $scope.sundry_services_11_1_1_A = false; $scope.sundry_services_11_1_1_A_b = false; $scope.sundry_services_11_1_1_A_c = false;}
				if(data.sundry_services_11_1_1_B == 0){ $scope.sundry_services_11_1_1_B = data.sundry_services_11_1_1_B; $scope.sundry_services_11_1_1_B = true; $scope.sundry_services_11_1_1_B_b = false; $scope.sundry_services_11_1_1_B_c = false; $scope.sundry_services_11_1_1_B_cm = ''; } else if(data.sundry_services_11_1_1_B  == 10){ $scope.sundry_services_11_1_1_B = data.sundry_services_11_1_1_B; $scope.sundry_services_11_1_1_B = false; $scope.sundry_services_11_1_1_B_b = true; $scope.sundry_services_11_1_1_B_c = false; $scope.sundry_services_11_1_1_B_cm = ''; } else if(data.sundry_services_11_1_1_B  == ){ $scope.sundry_services_11_1_1_B = data.sundry_services_11_1_1_B; $scope.sundry_services_11_1_1_B = false; $scope.sundry_services_11_1_1_B_b = false; $scope.sundry_services_11_1_1_B_c = true; $scope.sundry_services_11_1_1_B_cm = ''; }else if( ((data.sundry_services_11_1_1_B  > 0 ) && (data.sundry_services_11_1_1_B  < 10)) || ((data.sundry_services_11_1_1_B  > 10 ) && (data.sundry_services_11_1_1_B  < )) )
				{ $scope.sundry_services_11_1_1_B_cm = data.sundry_services_11_1_1_B; $scope.sundry_services_11_1_1_B = false; $scope.sundry_services_11_1_1_B_b = false;  $scope.sundry_services_11_1_1_B_c = false; $scope.sundry_services_11_1_1_B = ''; }else{ $scope.sundry_services_11_1_1_B = ''; $scope.sundry_services_11_1_1_B_cm = ''; $scope.sundry_services_11_1_1_B = false; $scope.sundry_services_11_1_1_B_b = false; $scope.sundry_services_11_1_1_B_c = false; }
				$scope.sundry_services_11_2_1_text = data.sundry_services_11_2_1_text;
				if(data.sundry_services_11_2_1_A == 5){ $scope.sundry_services_11_2_1_A = data.sundry_services_11_2_1_A; $scope.sundry_services_11_2_1_A = true; $scope.sundry_services_11_2_1_A_b = false; $scope.sundry_services_11_2_1_A_c = false; $scope.sundry_services_11_2_1_A_cm = ''; } else if(data.sundry_services_11_2_1_A  == 7){ $scope.sundry_services_11_2_1_A = data.sundry_services_11_2_1_A; $scope.sundry_services_11_2_1_A = false; $scope.sundry_services_11_2_1_A_b = true; $scope.sundry_services_11_2_1_A_c = false; $scope.sundry_services_11_2_1_A_cm = ''; } else if(data.sundry_services_11_2_1_A  == 10){ 
				$scope.sundry_services_11_2_1_A = data.sundry_services_11_2_1_A; $scope.sundry_services_11_2_1_A = false; $scope.sundry_services_11_2_1_A_b = false; $scope.sundry_services_11_2_1_A_c = true; $scope.sundry_services_11_2_1_A_cm = ''; } else if( ((data.sundry_services_11_2_1_A  >= 0 ) && (data.sundry_services_11_2_1_A  < 5)) || ((data.sundry_services_11_2_1_A  > 5 ) && (data.sundry_services_11_2_1_A  < 7)) || ((data.sundry_services_11_2_1_A  > 7 ) && (data.sundry_services_11_2_1_A  < 10)) ){ $scope.sundry_services_11_2_1_A_cm = data.sundry_services_11_2_1_A; $scope.sundry_services_11_2_1_A = false; $scope.sundry_services_11_2_1_A_b = false; $scope.sundry_services_11_2_1_A_c = false; $scope.sundry_services_11_2_1_A = ''; }else{ $scope.sundry_services_11_2_1_A = ''; $scope.sundry_services_11_2_1_A_cm = ''; $scope.sundry_services_11_2_1_A = false; $scope.sundry_services_11_2_1_A_b = false; $scope.sundry_services_11_2_1_A_c = false;}
				if(data.sundry_services_11_2_1_B == 1){ $scope.sundry_services_11_2_1_B = data.sundry_services_11_2_1_B; $scope.sundry_services_11_2_1_B = true; $scope.sundry_services_11_2_1_B_b = false; $scope.sundry_services_11_2_1_B_c = false; $scope.sundry_services_11_2_1_B_cm = ''; } else if(data.sundry_services_11_2_1_B  == 3){ $scope.sundry_services_11_2_1_B = data.sundry_services_11_2_1_B; $scope.sundry_services_11_2_1_B = false; $scope.sundry_services_11_2_1_B_b = true; $scope.sundry_services_11_2_1_B_c = false; $scope.sundry_services_11_2_1_B_cm = ''; } else if(data.sundry_services_11_2_1_B  == 5){ 
				$scope.sundry_services_11_2_1_B = data.sundry_services_11_2_1_B; $scope.sundry_services_11_2_1_B = false; $scope.sundry_services_11_2_1_B_b = false; $scope.sundry_services_11_2_1_B_c = true; $scope.sundry_services_11_2_1_B_cm = ''; } else if( ((data.sundry_services_11_2_1_B  >= 0 ) && (data.sundry_services_11_2_1_B  < 1)) || ((data.sundry_services_11_2_1_B  > 1 ) && (data.sundry_services_11_2_1_B  < 3)) || ((data.sundry_services_11_2_1_B  > 3 ) && (data.sundry_services_11_2_1_B  < 5)) ){ $scope.sundry_services_11_2_1_B_cm = data.sundry_services_11_2_1_B; $scope.sundry_services_11_2_1_B = false; $scope.sundry_services_11_2_1_B_b = false; $scope.sundry_services_11_2_1_B_c = false; $scope.sundry_services_11_2_1_B = ''; }else{ $scope.sundry_services_11_2_1_B = ''; $scope.sundry_services_11_2_1_B_cm = ''; $scope.sundry_services_11_2_1_B = false; $scope.sundry_services_11_2_1_B_b = false; $scope.sundry_services_11_2_1_B_c = false;}
				if(data.sundry_services_11_2_1_C == 1){ $scope.sundry_services_11_2_1_C = data.sundry_services_11_2_1_C; $scope.sundry_services_11_2_1_C = true; $scope.sundry_services_11_2_1_C_b = false; $scope.sundry_services_11_2_1_C_c = false; $scope.sundry_services_11_2_1_C_cm = ''; } else if(data.sundry_services_11_2_1_C  == 3){ $scope.sundry_services_11_2_1_C = data.sundry_services_11_2_1_C; $scope.sundry_services_11_2_1_C = false; $scope.sundry_services_11_2_1_C_b = true; $scope.sundry_services_11_2_1_C_c = false; $scope.sundry_services_11_2_1_C_cm = ''; } else if(data.sundry_services_11_2_1_C  == 5){ 
				$scope.sundry_services_11_2_1_C = data.sundry_services_11_2_1_C; $scope.sundry_services_11_2_1_C = false; $scope.sundry_services_11_2_1_C_b = false; $scope.sundry_services_11_2_1_C_c = true; $scope.sundry_services_11_2_1_C_cm = ''; } else if( ((data.sundry_services_11_2_1_C  >= 0 ) && (data.sundry_services_11_2_1_C  < 1)) || ((data.sundry_services_11_2_1_C  > 1 ) && (data.sundry_services_11_2_1_C  < 3)) || ((data.sundry_services_11_2_1_C  > 3 ) && (data.sundry_services_11_2_1_C  < 5)) ){ $scope.sundry_services_11_2_1_C_cm = data.sundry_services_11_2_1_C; $scope.sundry_services_11_2_1_C = false; $scope.sundry_services_11_2_1_C_b = false; $scope.sundry_services_11_2_1_C_c = false; $scope.sundry_services_11_2_1_C = ''; }else{ $scope.sundry_services_11_2_1_C = ''; $scope.sundry_services_11_2_1_C_cm = ''; $scope.sundry_services_11_2_1_C = false; $scope.sundry_services_11_2_1_C_b = false; $scope.sundry_services_11_2_1_C_c = false;}
				$scope.sundry_services_11_3_1_text = data.sundry_services_11_3_1_text;
				if(data.sundry_services_11_3_1_A == 0){ $scope.sundry_services_11_3_1_A = data.sundry_services_11_3_1_A; $scope.sundry_services_11_3_1_A = true; $scope.sundry_services_11_3_1_A_b = false; $scope.sundry_services_11_3_1_A_c = false; $scope.sundry_services_11_3_1_A_cm = ''; } else if(data.sundry_services_11_3_1_A  == 30){ $scope.sundry_services_11_3_1_A = data.sundry_services_11_3_1_A; $scope.sundry_services_11_3_1_A = false; $scope.sundry_services_11_3_1_A_b = true; $scope.sundry_services_11_3_1_A_c = false; $scope.sundry_services_11_3_1_A_cm = ''; } else if(data.sundry_services_11_3_1_A  == ){ $scope.sundry_services_11_3_1_A = data.sundry_services_11_3_1_A; $scope.sundry_services_11_3_1_A = false; $scope.sundry_services_11_3_1_A_b = false; $scope.sundry_services_11_3_1_A_c = true; $scope.sundry_services_11_3_1_A_cm = ''; }else if( ((data.sundry_services_11_3_1_A  > 0 ) && (data.sundry_services_11_3_1_A  < 30)) || ((data.sundry_services_11_3_1_A  > 30 ) && (data.sundry_services_11_3_1_A  < )) )
				{ $scope.sundry_services_11_3_1_A_cm = data.sundry_services_11_3_1_A; $scope.sundry_services_11_3_1_A = false; $scope.sundry_services_11_3_1_A_b = false;  $scope.sundry_services_11_3_1_A_c = false; $scope.sundry_services_11_3_1_A = ''; }else{ $scope.sundry_services_11_3_1_A = ''; $scope.sundry_services_11_3_1_A_cm = ''; $scope.sundry_services_11_3_1_A = false; $scope.sundry_services_11_3_1_A_b = false; $scope.sundry_services_11_3_1_A_c = false; }
				$scope.sundry_services_11_4_1_text = data.sundry_services_11_4_1_text;
				if(data.sundry_services_11_4_1_A == 0){ $scope.sundry_services_11_4_1_A = data.sundry_services_11_4_1_A; $scope.sundry_services_11_4_1_A = true; $scope.sundry_services_11_4_1_A_b = false; $scope.sundry_services_11_4_1_A_c = false; $scope.sundry_services_11_4_1_A_cm = ''; } else if(data.sundry_services_11_4_1_A  == 10){ $scope.sundry_services_11_4_1_A = data.sundry_services_11_4_1_A; $scope.sundry_services_11_4_1_A = false; $scope.sundry_services_11_4_1_A_b = true; $scope.sundry_services_11_4_1_A_c = false; $scope.sundry_services_11_4_1_A_cm = ''; } else if(data.sundry_services_11_4_1_A  == ){ $scope.sundry_services_11_4_1_A = data.sundry_services_11_4_1_A; $scope.sundry_services_11_4_1_A = false; $scope.sundry_services_11_4_1_A_b = false; $scope.sundry_services_11_4_1_A_c = true; $scope.sundry_services_11_4_1_A_cm = ''; }else if( ((data.sundry_services_11_4_1_A  > 0 ) && (data.sundry_services_11_4_1_A  < 10)) || ((data.sundry_services_11_4_1_A  > 10 ) && (data.sundry_services_11_4_1_A  < )) )
				{ $scope.sundry_services_11_4_1_A_cm = data.sundry_services_11_4_1_A; $scope.sundry_services_11_4_1_A = false; $scope.sundry_services_11_4_1_A_b = false;  $scope.sundry_services_11_4_1_A_c = false; $scope.sundry_services_11_4_1_A = ''; }else{ $scope.sundry_services_11_4_1_A = ''; $scope.sundry_services_11_4_1_A_cm = ''; $scope.sundry_services_11_4_1_A = false; $scope.sundry_services_11_4_1_A_b = false; $scope.sundry_services_11_4_1_A_c = false; }
				$scope.sundry_services_11_5_1_text = data.sundry_services_11_5_1_text;
				if(data.sundry_services_11_5_1_A == 0){ $scope.sundry_services_11_5_1_A = data.sundry_services_11_5_1_A; $scope.sundry_services_11_5_1_A = true; $scope.sundry_services_11_5_1_A_b = false; $scope.sundry_services_11_5_1_A_c = false; $scope.sundry_services_11_5_1_A_cm = ''; } else if(data.sundry_services_11_5_1_A  == 3){ $scope.sundry_services_11_5_1_A = data.sundry_services_11_5_1_A; $scope.sundry_services_11_5_1_A = false; $scope.sundry_services_11_5_1_A_b = true; $scope.sundry_services_11_5_1_A_c = false; $scope.sundry_services_11_5_1_A_cm = ''; } else if(data.sundry_services_11_5_1_A  == 5){ $scope.sundry_services_11_5_1_A = data.sundry_services_11_5_1_A; $scope.sundry_services_11_5_1_A = false; $scope.sundry_services_11_5_1_A_b = false; $scope.sundry_services_11_5_1_A_c = true; $scope.sundry_services_11_5_1_A_cm = ''; }else if( ((data.sundry_services_11_5_1_A  > 0 ) && (data.sundry_services_11_5_1_A  < 3)) || ((data.sundry_services_11_5_1_A  > 3 ) && (data.sundry_services_11_5_1_A  < 5)) )
				{ $scope.sundry_services_11_5_1_A_cm = data.sundry_services_11_5_1_A; $scope.sundry_services_11_5_1_A = false; $scope.sundry_services_11_5_1_A_b = false;  $scope.sundry_services_11_5_1_A_c = false; $scope.sundry_services_11_5_1_A = ''; }else{ $scope.sundry_services_11_5_1_A = ''; $scope.sundry_services_11_5_1_A_cm = ''; $scope.sundry_services_11_5_1_A = false; $scope.sundry_services_11_5_1_A_b = false; $scope.sundry_services_11_5_1_A_c = false; }
				if(data.sundry_services_11_5_1_B == 1){ $scope.sundry_services_11_5_1_B = data.sundry_services_11_5_1_B; $scope.sundry_services_11_5_1_B = true; $scope.sundry_services_11_5_1_B_b = false; $scope.sundry_services_11_5_1_B_c = false; $scope.sundry_services_11_5_1_B_cm = ''; } else if(data.sundry_services_11_5_1_B  == 3){ $scope.sundry_services_11_5_1_B = data.sundry_services_11_5_1_B; $scope.sundry_services_11_5_1_B = false; $scope.sundry_services_11_5_1_B_b = true; $scope.sundry_services_11_5_1_B_c = false; $scope.sundry_services_11_5_1_B_cm = ''; } else if(data.sundry_services_11_5_1_B  == 5){ 
				$scope.sundry_services_11_5_1_B = data.sundry_services_11_5_1_B; $scope.sundry_services_11_5_1_B = false; $scope.sundry_services_11_5_1_B_b = false; $scope.sundry_services_11_5_1_B_c = true; $scope.sundry_services_11_5_1_B_cm = ''; } else if( ((data.sundry_services_11_5_1_B  >= 0 ) && (data.sundry_services_11_5_1_B  < 1)) || ((data.sundry_services_11_5_1_B  > 1 ) && (data.sundry_services_11_5_1_B  < 3)) || ((data.sundry_services_11_5_1_B  > 3 ) && (data.sundry_services_11_5_1_B  < 5)) ){ $scope.sundry_services_11_5_1_B_cm = data.sundry_services_11_5_1_B; $scope.sundry_services_11_5_1_B = false; $scope.sundry_services_11_5_1_B_b = false; $scope.sundry_services_11_5_1_B_c = false; $scope.sundry_services_11_5_1_B = ''; }else{ $scope.sundry_services_11_5_1_B = ''; $scope.sundry_services_11_5_1_B_cm = ''; $scope.sundry_services_11_5_1_B = false; $scope.sundry_services_11_5_1_B_b = false; $scope.sundry_services_11_5_1_B_c = false;}
				$scope.sundry_services_11_6_1_text = data.sundry_services_11_6_1_text;
				if(data.sundry_services_11_6_1_A == 0){ $scope.sundry_services_11_6_1_A = data.sundry_services_11_6_1_A; $scope.sundry_services_11_6_1_A = true; $scope.sundry_services_11_6_1_A_b = false; $scope.sundry_services_11_6_1_A_c = false; $scope.sundry_services_11_6_1_A_cm = ''; } else if(data.sundry_services_11_6_1_A  == 15){ $scope.sundry_services_11_6_1_A = data.sundry_services_11_6_1_A; $scope.sundry_services_11_6_1_A = false; $scope.sundry_services_11_6_1_A_b = true; $scope.sundry_services_11_6_1_A_c = false; $scope.sundry_services_11_6_1_A_cm = ''; } else if(data.sundry_services_11_6_1_A  == 30){ $scope.sundry_services_11_6_1_A = data.sundry_services_11_6_1_A; $scope.sundry_services_11_6_1_A = false; $scope.sundry_services_11_6_1_A_b = false; $scope.sundry_services_11_6_1_A_c = true; $scope.sundry_services_11_6_1_A_cm = ''; }else if( ((data.sundry_services_11_6_1_A  > 0 ) && (data.sundry_services_11_6_1_A  < 15)) || ((data.sundry_services_11_6_1_A  > 15 ) && (data.sundry_services_11_6_1_A  < 30)) )
				{ $scope.sundry_services_11_6_1_A_cm = data.sundry_services_11_6_1_A; $scope.sundry_services_11_6_1_A = false; $scope.sundry_services_11_6_1_A_b = false;  $scope.sundry_services_11_6_1_A_c = false; $scope.sundry_services_11_6_1_A = ''; }else{ $scope.sundry_services_11_6_1_A = ''; $scope.sundry_services_11_6_1_A_cm = ''; $scope.sundry_services_11_6_1_A = false; $scope.sundry_services_11_6_1_A_b = false; $scope.sundry_services_11_6_1_A_c = false; }
				$scope.human_resources_12_1_1_text = data.human_resources_12_1_1_text;
				if(data.human_resources_12_1_1_A  == 2){ $scope.human_resources_12_1_1_A  = data.human_resources_12_1_1_A ; $scope.human_resources_12_1_1_A = true; $scope.human_resources_12_1_1_A_b = false; $scope.human_resources_12_1_1_A_cm = ''; } else if(data.human_resources_12_1_1_A  == 5){ $scope.human_resources_12_1_1_A  = data.human_resources_12_1_1_A ; $scope.human_resources_12_1_1_A = false; $scope.human_resources_12_1_1_A_b = true; $scope.human_resources_12_1_1_A_cm = ''; }else if( ((data.human_resources_12_1_1_A  > 0 ) && (data.human_resources_12_1_1_A  < 2)) || ((data.human_resources_12_1_1_A  > 2 ) && (data.human_resources_12_1_1_A  < 5)))
				{ $scope.human_resources_12_1_1_A_cm = data.human_resources_12_1_1_A ; $scope.human_resources_12_1_1_A = false; $scope.human_resources_12_1_1_A_b = false; $scope.human_resources_12_1_1_A  = ''; }else{ $scope.human_resources_12_1_1_A  = ''; $scope.human_resources_12_1_1_A_cm = ''; $scope.human_resources_12_1_1_A = false; $scope.human_resources_12_1_1_A_b = false; }
				if(data.human_resources_12_1_1_B  == 2){ $scope.human_resources_12_1_1_B  = data.human_resources_12_1_1_B ; $scope.human_resources_12_1_1_B = true; $scope.human_resources_12_1_1_B_b = false; $scope.human_resources_12_1_1_B_cm = ''; } else if(data.human_resources_12_1_1_B  == 5){ $scope.human_resources_12_1_1_B  = data.human_resources_12_1_1_B ; $scope.human_resources_12_1_1_B = false; $scope.human_resources_12_1_1_B_b = true; $scope.human_resources_12_1_1_B_cm = ''; }else if( ((data.human_resources_12_1_1_B  > 0 ) && (data.human_resources_12_1_1_B  < 2)) || ((data.human_resources_12_1_1_B  > 2 ) && (data.human_resources_12_1_1_B  < 5)))
				{ $scope.human_resources_12_1_1_B_cm = data.human_resources_12_1_1_B ; $scope.human_resources_12_1_1_B = false; $scope.human_resources_12_1_1_B_b = false; $scope.human_resources_12_1_1_B  = ''; }else{ $scope.human_resources_12_1_1_B  = ''; $scope.human_resources_12_1_1_B_cm = ''; $scope.human_resources_12_1_1_B = false; $scope.human_resources_12_1_1_B_b = false; }
				if(data.human_resources_12_1_1_C == 3){ $scope.human_resources_12_1_1_C = data.human_resources_12_1_1_C; $scope.human_resources_12_1_1_C = true; $scope.human_resources_12_1_1_C_b = false; $scope.human_resources_12_1_1_C_c = false; $scope.human_resources_12_1_1_C_cm = ''; } else if(data.human_resources_12_1_1_C  == 6){ $scope.human_resources_12_1_1_C = data.human_resources_12_1_1_C; $scope.human_resources_12_1_1_C = false; $scope.human_resources_12_1_1_C_b = true; $scope.human_resources_12_1_1_C_c = false; $scope.human_resources_12_1_1_C_cm = ''; } else if(data.human_resources_12_1_1_C  == 10){ 
				$scope.human_resources_12_1_1_C = data.human_resources_12_1_1_C; $scope.human_resources_12_1_1_C = false; $scope.human_resources_12_1_1_C_b = false; $scope.human_resources_12_1_1_C_c = true; $scope.human_resources_12_1_1_C_cm = ''; } else if( ((data.human_resources_12_1_1_C  >= 0 ) && (data.human_resources_12_1_1_C  < 3)) || ((data.human_resources_12_1_1_C  > 3 ) && (data.human_resources_12_1_1_C  < 6)) || ((data.human_resources_12_1_1_C  > 6 ) && (data.human_resources_12_1_1_C  < 10)) ){ $scope.human_resources_12_1_1_C_cm = data.human_resources_12_1_1_C; $scope.human_resources_12_1_1_C = false; $scope.human_resources_12_1_1_C_b = false; $scope.human_resources_12_1_1_C_c = false; $scope.human_resources_12_1_1_C = ''; }else{ $scope.human_resources_12_1_1_C = ''; $scope.human_resources_12_1_1_C_cm = ''; $scope.human_resources_12_1_1_C = false; $scope.human_resources_12_1_1_C_b = false; $scope.human_resources_12_1_1_C_c = false;}
				if(data.human_resources_12_1_1_D == 15){ $scope.human_resources_12_1_1_D = data.human_resources_12_1_1_D; $scope.human_resources_12_1_1_D = true; $scope.human_resources_12_1_1_D_b = false; $scope.human_resources_12_1_1_D_c = false; $scope.human_resources_12_1_1_D_cm = ''; } else if(data.human_resources_12_1_1_D  == 20){ $scope.human_resources_12_1_1_D = data.human_resources_12_1_1_D; $scope.human_resources_12_1_1_D = false; $scope.human_resources_12_1_1_D_b = true; $scope.human_resources_12_1_1_D_c = false; $scope.human_resources_12_1_1_D_cm = ''; } else if(data.human_resources_12_1_1_D  == 25){ 
				$scope.human_resources_12_1_1_D = data.human_resources_12_1_1_D; $scope.human_resources_12_1_1_D = false; $scope.human_resources_12_1_1_D_b = false; $scope.human_resources_12_1_1_D_c = true; $scope.human_resources_12_1_1_D_cm = ''; } else if( ((data.human_resources_12_1_1_D  >= 0 ) && (data.human_resources_12_1_1_D  < 15)) || ((data.human_resources_12_1_1_D  > 15 ) && (data.human_resources_12_1_1_D  < 20)) || ((data.human_resources_12_1_1_D  > 20 ) && (data.human_resources_12_1_1_D  < 25)) ){ $scope.human_resources_12_1_1_D_cm = data.human_resources_12_1_1_D; $scope.human_resources_12_1_1_D = false; $scope.human_resources_12_1_1_D_b = false; $scope.human_resources_12_1_1_D_c = false; $scope.human_resources_12_1_1_D = ''; }else{ $scope.human_resources_12_1_1_D = ''; $scope.human_resources_12_1_1_D_cm = ''; $scope.human_resources_12_1_1_D = false; $scope.human_resources_12_1_1_D_b = false; $scope.human_resources_12_1_1_D_c = false;}
				if(data.human_resources_12_1_1_E_a == 3){ $scope.human_resources_12_1_1_E_a = data.human_resources_12_1_1_E_a; $scope.human_resources_12_1_1_E_a= true; $scope.human_resources_12_1_1_E_a_cm = ''; } else if((data.human_resources_12_1_1_E_a > 0 ) && (data.human_resources_12_1_1_E_a < 3)){ $scope.human_resources_12_1_1_E_a_cm = data.human_resources_12_1_1_E_a; $scope.human_resources_12_1_1_E_a= false; $scope.human_resources_12_1_1_E_a= ''; }else{ $scope.human_resources_12_1_1_E_a= ''; $scope.human_resources_12_1_1_E_a_cm = ''; $scope.human_resources_12_1_1_E_a= false; }
				if(data.human_resources_12_1_1_E_b == 3){ $scope.human_resources_12_1_1_E_b = data.human_resources_12_1_1_E_b; $scope.human_resources_12_1_1_E_b= true; $scope.human_resources_12_1_1_E_b_cm = ''; } else if((data.human_resources_12_1_1_E_b > 0 ) && (data.human_resources_12_1_1_E_b < 3)){ $scope.human_resources_12_1_1_E_b_cm = data.human_resources_12_1_1_E_b; $scope.human_resources_12_1_1_E_b= false; $scope.human_resources_12_1_1_E_b= ''; }else{ $scope.human_resources_12_1_1_E_b= ''; $scope.human_resources_12_1_1_E_b_cm = ''; $scope.human_resources_12_1_1_E_b= false; }
				if(data.human_resources_12_1_1_E_c == 3){ $scope.human_resources_12_1_1_E_c = data.human_resources_12_1_1_E_c; $scope.human_resources_12_1_1_E_c= true; $scope.human_resources_12_1_1_E_c_cm = ''; } else if((data.human_resources_12_1_1_E_c > 0 ) && (data.human_resources_12_1_1_E_c < 3)){ $scope.human_resources_12_1_1_E_c_cm = data.human_resources_12_1_1_E_c; $scope.human_resources_12_1_1_E_c= false; $scope.human_resources_12_1_1_E_c= ''; }else{ $scope.human_resources_12_1_1_E_c= ''; $scope.human_resources_12_1_1_E_c_cm = ''; $scope.human_resources_12_1_1_E_c= false; }
				if(data.human_resources_12_1_1_E_d == 3){ $scope.human_resources_12_1_1_E_d = data.human_resources_12_1_1_E_d; $scope.human_resources_12_1_1_E_d= true; $scope.human_resources_12_1_1_E_d_cm = ''; } else if((data.human_resources_12_1_1_E_d > 0 ) && (data.human_resources_12_1_1_E_d < 3)){ $scope.human_resources_12_1_1_E_d_cm = data.human_resources_12_1_1_E_d; $scope.human_resources_12_1_1_E_d= false; $scope.human_resources_12_1_1_E_d= ''; }else{ $scope.human_resources_12_1_1_E_d= ''; $scope.human_resources_12_1_1_E_d_cm = ''; $scope.human_resources_12_1_1_E_d= false; }
				if(data.human_resources_12_1_1_E_e == 3){ $scope.human_resources_12_1_1_E_e = data.human_resources_12_1_1_E_e; $scope.human_resources_12_1_1_E_e= true; $scope.human_resources_12_1_1_E_e_cm = ''; } else if((data.human_resources_12_1_1_E_e > 0 ) && (data.human_resources_12_1_1_E_e < 3)){ $scope.human_resources_12_1_1_E_e_cm = data.human_resources_12_1_1_E_e; $scope.human_resources_12_1_1_E_e= false; $scope.human_resources_12_1_1_E_e= ''; }else{ $scope.human_resources_12_1_1_E_e= ''; $scope.human_resources_12_1_1_E_e_cm = ''; $scope.human_resources_12_1_1_E_e= false; }
				$scope.human_resources_12_2_1_text = data.human_resources_12_2_1_text;
				if(data.human_resources_12_2_1_A_a == 3){ $scope.human_resources_12_2_1_A_a = data.human_resources_12_2_1_A_a; $scope.human_resources_12_2_1_A_a= true; $scope.human_resources_12_2_1_A_a_cm = ''; } else if((data.human_resources_12_2_1_A_a > 0 ) && (data.human_resources_12_2_1_A_a < 3)){ $scope.human_resources_12_2_1_A_a_cm = data.human_resources_12_2_1_A_a; $scope.human_resources_12_2_1_A_a= false; $scope.human_resources_12_2_1_A_a= ''; }else{ $scope.human_resources_12_2_1_A_a= ''; $scope.human_resources_12_2_1_A_a_cm = ''; $scope.human_resources_12_2_1_A_a= false; }
				if(data.human_resources_12_2_1_A_b == 3){ $scope.human_resources_12_2_1_A_b = data.human_resources_12_2_1_A_b; $scope.human_resources_12_2_1_A_b= true; $scope.human_resources_12_2_1_A_b_cm = ''; } else if((data.human_resources_12_2_1_A_b > 0 ) && (data.human_resources_12_2_1_A_b < 3)){ $scope.human_resources_12_2_1_A_b_cm = data.human_resources_12_2_1_A_b; $scope.human_resources_12_2_1_A_b= false; $scope.human_resources_12_2_1_A_b= ''; }else{ $scope.human_resources_12_2_1_A_b= ''; $scope.human_resources_12_2_1_A_b_cm = ''; $scope.human_resources_12_2_1_A_b= false; }
				if(data.human_resources_12_2_1_A_c == 4){ $scope.human_resources_12_2_1_A_c = data.human_resources_12_2_1_A_c; $scope.human_resources_12_2_1_A_c= true; $scope.human_resources_12_2_1_A_c_cm = ''; } else if((data.human_resources_12_2_1_A_c > 0 ) && (data.human_resources_12_2_1_A_c < 4)){ $scope.human_resources_12_2_1_A_c_cm = data.human_resources_12_2_1_A_c; $scope.human_resources_12_2_1_A_c= false; $scope.human_resources_12_2_1_A_c= ''; }else{ $scope.human_resources_12_2_1_A_c= ''; $scope.human_resources_12_2_1_A_c_cm = ''; $scope.human_resources_12_2_1_A_c= false; }
				if(data.human_resources_12_2_1_B_a == 3){ $scope.human_resources_12_2_1_B_a = data.human_resources_12_2_1_B_a; $scope.human_resources_12_2_1_B_a= true; $scope.human_resources_12_2_1_B_a_cm = ''; } else if((data.human_resources_12_2_1_B_a > 0 ) && (data.human_resources_12_2_1_B_a < 3)){ $scope.human_resources_12_2_1_B_a_cm = data.human_resources_12_2_1_B_a; $scope.human_resources_12_2_1_B_a= false; $scope.human_resources_12_2_1_B_a= ''; }else{ $scope.human_resources_12_2_1_B_a= ''; $scope.human_resources_12_2_1_B_a_cm = ''; $scope.human_resources_12_2_1_B_a= false; }
				if(data.human_resources_12_2_1_B_b == 3){ $scope.human_resources_12_2_1_B_b = data.human_resources_12_2_1_B_b; $scope.human_resources_12_2_1_B_b= true; $scope.human_resources_12_2_1_B_b_cm = ''; } else if((data.human_resources_12_2_1_B_b > 0 ) && (data.human_resources_12_2_1_B_b < 3)){ $scope.human_resources_12_2_1_B_b_cm = data.human_resources_12_2_1_B_b; $scope.human_resources_12_2_1_B_b= false; $scope.human_resources_12_2_1_B_b= ''; }else{ $scope.human_resources_12_2_1_B_b= ''; $scope.human_resources_12_2_1_B_b_cm = ''; $scope.human_resources_12_2_1_B_b= false; }
				if(data.human_resources_12_2_1_B_c == 4){ $scope.human_resources_12_2_1_B_c = data.human_resources_12_2_1_B_c; $scope.human_resources_12_2_1_B_c= true; $scope.human_resources_12_2_1_B_c_cm = ''; } else if((data.human_resources_12_2_1_B_c > 0 ) && (data.human_resources_12_2_1_B_c < 4)){ $scope.human_resources_12_2_1_B_c_cm = data.human_resources_12_2_1_B_c; $scope.human_resources_12_2_1_B_c= false; $scope.human_resources_12_2_1_B_c= ''; }else{ $scope.human_resources_12_2_1_B_c= ''; $scope.human_resources_12_2_1_B_c_cm = ''; $scope.human_resources_12_2_1_B_c= false; }
				$scope.human_resources_12_3_1_text = data.human_resources_12_3_1_text;
				if(data.human_resources_12_3_1_A == 0){ $scope.human_resources_12_3_1_A = data.human_resources_12_3_1_A; $scope.human_resources_12_3_1_A = true; $scope.human_resources_12_3_1_A_b = false; $scope.human_resources_12_3_1_A_c = false; $scope.human_resources_12_3_1_A_cm = ''; } else if(data.human_resources_12_3_1_A  == 10){ $scope.human_resources_12_3_1_A = data.human_resources_12_3_1_A; $scope.human_resources_12_3_1_A = false; $scope.human_resources_12_3_1_A_b = true; $scope.human_resources_12_3_1_A_c = false; $scope.human_resources_12_3_1_A_cm = ''; } else if(data.human_resources_12_3_1_A  == ){ $scope.human_resources_12_3_1_A = data.human_resources_12_3_1_A; $scope.human_resources_12_3_1_A = false; $scope.human_resources_12_3_1_A_b = false; $scope.human_resources_12_3_1_A_c = true; $scope.human_resources_12_3_1_A_cm = ''; }else if( ((data.human_resources_12_3_1_A  > 0 ) && (data.human_resources_12_3_1_A  < 10)) || ((data.human_resources_12_3_1_A  > 10 ) && (data.human_resources_12_3_1_A  < )) )
				{ $scope.human_resources_12_3_1_A_cm = data.human_resources_12_3_1_A; $scope.human_resources_12_3_1_A = false; $scope.human_resources_12_3_1_A_b = false;  $scope.human_resources_12_3_1_A_c = false; $scope.human_resources_12_3_1_A = ''; }else{ $scope.human_resources_12_3_1_A = ''; $scope.human_resources_12_3_1_A_cm = ''; $scope.human_resources_12_3_1_A = false; $scope.human_resources_12_3_1_A_b = false; $scope.human_resources_12_3_1_A_c = false; }
				$scope.human_resources_12_4_1_text = data.human_resources_12_4_1_text;
				if(data.human_resources_12_4_1_A == 0){ $scope.human_resources_12_4_1_A = data.human_resources_12_4_1_A; $scope.human_resources_12_4_1_A = true; $scope.human_resources_12_4_1_A_b = false; $scope.human_resources_12_4_1_A_c = false; $scope.human_resources_12_4_1_A_cm = ''; } else if(data.human_resources_12_4_1_A  == 1){ $scope.human_resources_12_4_1_A = data.human_resources_12_4_1_A; $scope.human_resources_12_4_1_A = false; $scope.human_resources_12_4_1_A_b = true; $scope.human_resources_12_4_1_A_c = false; $scope.human_resources_12_4_1_A_cm = ''; } else if(data.human_resources_12_4_1_A  == ){ $scope.human_resources_12_4_1_A = data.human_resources_12_4_1_A; $scope.human_resources_12_4_1_A = false; $scope.human_resources_12_4_1_A_b = false; $scope.human_resources_12_4_1_A_c = true; $scope.human_resources_12_4_1_A_cm = ''; }else if( ((data.human_resources_12_4_1_A  > 0 ) && (data.human_resources_12_4_1_A  < 1)) || ((data.human_resources_12_4_1_A  > 1 ) && (data.human_resources_12_4_1_A  < )) )
				{ $scope.human_resources_12_4_1_A_cm = data.human_resources_12_4_1_A; $scope.human_resources_12_4_1_A = false; $scope.human_resources_12_4_1_A_b = false;  $scope.human_resources_12_4_1_A_c = false; $scope.human_resources_12_4_1_A = ''; }else{ $scope.human_resources_12_4_1_A = ''; $scope.human_resources_12_4_1_A_cm = ''; $scope.human_resources_12_4_1_A = false; $scope.human_resources_12_4_1_A_b = false; $scope.human_resources_12_4_1_A_c = false; }
				if(data.human_resources_12_4_1_B == 1){ $scope.human_resources_12_4_1_B = data.human_resources_12_4_1_B; $scope.human_resources_12_4_1_B = true; $scope.human_resources_12_4_1_B_b = false; $scope.human_resources_12_4_1_B_c = false; $scope.human_resources_12_4_1_B_cm = ''; } else if(data.human_resources_12_4_1_B  == 2){ $scope.human_resources_12_4_1_B = data.human_resources_12_4_1_B; $scope.human_resources_12_4_1_B = false; $scope.human_resources_12_4_1_B_b = true; $scope.human_resources_12_4_1_B_c = false; $scope.human_resources_12_4_1_B_cm = ''; } else if(data.human_resources_12_4_1_B  == 3){ 
				$scope.human_resources_12_4_1_B = data.human_resources_12_4_1_B; $scope.human_resources_12_4_1_B = false; $scope.human_resources_12_4_1_B_b = false; $scope.human_resources_12_4_1_B_c = true; $scope.human_resources_12_4_1_B_cm = ''; } else if( ((data.human_resources_12_4_1_B  >= 0 ) && (data.human_resources_12_4_1_B  < 1)) || ((data.human_resources_12_4_1_B  > 1 ) && (data.human_resources_12_4_1_B  < 2)) || ((data.human_resources_12_4_1_B  > 2 ) && (data.human_resources_12_4_1_B  < 3)) ){ $scope.human_resources_12_4_1_B_cm = data.human_resources_12_4_1_B; $scope.human_resources_12_4_1_B = false; $scope.human_resources_12_4_1_B_b = false; $scope.human_resources_12_4_1_B_c = false; $scope.human_resources_12_4_1_B = ''; }else{ $scope.human_resources_12_4_1_B = ''; $scope.human_resources_12_4_1_B_cm = ''; $scope.human_resources_12_4_1_B = false; $scope.human_resources_12_4_1_B_b = false; $scope.human_resources_12_4_1_B_c = false;}
				if(data.human_resources_12_4_1_C == 1){ $scope.human_resources_12_4_1_C = data.human_resources_12_4_1_C; $scope.human_resources_12_4_1_C = true; $scope.human_resources_12_4_1_C_b = false; $scope.human_resources_12_4_1_C_c = false; $scope.human_resources_12_4_1_C_cm = ''; } else if(data.human_resources_12_4_1_C  == 2){ $scope.human_resources_12_4_1_C = data.human_resources_12_4_1_C; $scope.human_resources_12_4_1_C = false; $scope.human_resources_12_4_1_C_b = true; $scope.human_resources_12_4_1_C_c = false; $scope.human_resources_12_4_1_C_cm = ''; } else if(data.human_resources_12_4_1_C  == 3){ 
				$scope.human_resources_12_4_1_C = data.human_resources_12_4_1_C; $scope.human_resources_12_4_1_C = false; $scope.human_resources_12_4_1_C_b = false; $scope.human_resources_12_4_1_C_c = true; $scope.human_resources_12_4_1_C_cm = ''; } else if( ((data.human_resources_12_4_1_C  >= 0 ) && (data.human_resources_12_4_1_C  < 1)) || ((data.human_resources_12_4_1_C  > 1 ) && (data.human_resources_12_4_1_C  < 2)) || ((data.human_resources_12_4_1_C  > 2 ) && (data.human_resources_12_4_1_C  < 3)) ){ $scope.human_resources_12_4_1_C_cm = data.human_resources_12_4_1_C; $scope.human_resources_12_4_1_C = false; $scope.human_resources_12_4_1_C_b = false; $scope.human_resources_12_4_1_C_c = false; $scope.human_resources_12_4_1_C = ''; }else{ $scope.human_resources_12_4_1_C = ''; $scope.human_resources_12_4_1_C_cm = ''; $scope.human_resources_12_4_1_C = false; $scope.human_resources_12_4_1_C_b = false; $scope.human_resources_12_4_1_C_c = false;}
				if(data.human_resources_12_4_1_D == 1){ $scope.human_resources_12_4_1_D = data.human_resources_12_4_1_D; $scope.human_resources_12_4_1_D = true; $scope.human_resources_12_4_1_D_b = false; $scope.human_resources_12_4_1_D_c = false; $scope.human_resources_12_4_1_D_cm = ''; } else if(data.human_resources_12_4_1_D  == 2){ $scope.human_resources_12_4_1_D = data.human_resources_12_4_1_D; $scope.human_resources_12_4_1_D = false; $scope.human_resources_12_4_1_D_b = true; $scope.human_resources_12_4_1_D_c = false; $scope.human_resources_12_4_1_D_cm = ''; } else if(data.human_resources_12_4_1_D  == 3){ 
				$scope.human_resources_12_4_1_D = data.human_resources_12_4_1_D; $scope.human_resources_12_4_1_D = false; $scope.human_resources_12_4_1_D_b = false; $scope.human_resources_12_4_1_D_c = true; $scope.human_resources_12_4_1_D_cm = ''; } else if( ((data.human_resources_12_4_1_D  >= 0 ) && (data.human_resources_12_4_1_D  < 1)) || ((data.human_resources_12_4_1_D  > 1 ) && (data.human_resources_12_4_1_D  < 2)) || ((data.human_resources_12_4_1_D  > 2 ) && (data.human_resources_12_4_1_D  < 3)) ){ $scope.human_resources_12_4_1_D_cm = data.human_resources_12_4_1_D; $scope.human_resources_12_4_1_D = false; $scope.human_resources_12_4_1_D_b = false; $scope.human_resources_12_4_1_D_c = false; $scope.human_resources_12_4_1_D = ''; }else{ $scope.human_resources_12_4_1_D = ''; $scope.human_resources_12_4_1_D_cm = ''; $scope.human_resources_12_4_1_D = false; $scope.human_resources_12_4_1_D_b = false; $scope.human_resources_12_4_1_D_c = false;}
				$scope.general_13_1_1_text = data.general_13_1_1_text;
				if(data.general_13_1_1_A_a == 0){ $scope.general_13_1_1_A_a = data.general_13_1_1_A_a; $scope.general_13_1_1_A_a = true; $scope.general_13_1_1_A_a_cm = ''; } else { $scope.general_13_1_1_A_a = ''; $scope.general_13_1_1_A_a_cm = ''; $scope.general_13_1_1_A_a = false; }
				if(data.general_13_1_1_A_b == 5){ $scope.general_13_1_1_A_b = data.general_13_1_1_A_b; $scope.general_13_1_1_A_b= true; $scope.general_13_1_1_A_b_cm = ''; } else if((data.general_13_1_1_A_b > 0 ) && (data.general_13_1_1_A_b < 5)){ $scope.general_13_1_1_A_b_cm = data.general_13_1_1_A_b; $scope.general_13_1_1_A_b= false; $scope.general_13_1_1_A_b= ''; }else{ $scope.general_13_1_1_A_b= ''; $scope.general_13_1_1_A_b_cm = ''; $scope.general_13_1_1_A_b= false; }
				if(data.general_13_1_1_A_c == 15){ $scope.general_13_1_1_A_c = data.general_13_1_1_A_c; $scope.general_13_1_1_A_c= true; $scope.general_13_1_1_A_c_cm = ''; } else if((data.general_13_1_1_A_c > 0 ) && (data.general_13_1_1_A_c < 15)){ $scope.general_13_1_1_A_c_cm = data.general_13_1_1_A_c; $scope.general_13_1_1_A_c= false; $scope.general_13_1_1_A_c= ''; }else{ $scope.general_13_1_1_A_c= ''; $scope.general_13_1_1_A_c_cm = ''; $scope.general_13_1_1_A_c= false; }


			

			});
	};
	
	<!--------- Interchanging Selected Marks Custom Marks ----------------->
	
	//LOCATION
	
	$scope.check_location_1_1_1_A = function(){ $scope.location_1_1_1_A = ''; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = false; };
	$scope.check_location_1_1_1_A_cm = function(){ $scope.location_1_1_1_A_cm = ''; };
	$scope.check_location_1_1_2_A = function(){ $scope.location_1_1_2_A = ''; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = false; };
	$scope.check_location_1_1_2_A_cm = function(){ $scope.location_1_1_2_A_cm = ''; };
	$scope.check_location_1_1_3_A = function(){ $scope.location_1_1_3_A = ''; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = false; };
	$scope.check_location_1_1_3_A_cm = function(){ $scope.location_1_1_3_A_cm = ''; };
	$scope.check_location_1_1_3_B = function(){ $scope.location_1_1_3_B = ''; $scope.location_1_1_3_B_a = false; $scope.location_1_1_3_B_b = false; };
	$scope.check_location_1_1_3_B_cm = function(){ $scope.location_1_1_3_B_cm = ''; };
	$scope.check_location_1_1_3_C = function(){ $scope.location_1_1_3_C = ''; $scope.location_1_1_3_C_a = false; $scope.location_1_1_3_C_b = false; $scope.location_1_1_3_C_c = false; };
	$scope.check_location_1_1_3_C_cm = function(){ $scope.location_1_1_3_C_cm = ''; };
	$scope.check_location_1_1_4_A = function(){ $scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; };
	$scope.check_location_1_1_4_A_cm = function(){ $scope.location_1_1_4_A_cm = ''; };
	$scope.check_location_1_1_5_A = function(){ $scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = false; };
	$scope.check_location_1_1_5_A_cm = function(){ $scope.location_1_1_5_A_cm = ''; };
	$scope.check_location_1_1_6_A = function(){ $scope.location_1_1_6_A = ''; $scope.location_1_1_6_A_a = false; $scope.location_1_1_6_A_b = false; };
	$scope.check_location_1_1_6_A_cm = function(){ $scope.location_1_1_6_A_cm = ''; };
	$scope.check_building_2_1_1_A = function(){ $scope.building_2_1_1_A = ''; $scope.building_2_1_1_A_a = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false; };
	$scope.check_building_2_1_1_A_cm = function(){ $scope.building_2_1_1_A_cm = ''; };
	$scope.check_building_2_1_2_A = function(){ $scope.building_2_1_2_A = ''; $scope.building_2_1_2_A_a = false; $scope.building_2_1_2_A_b = false; };
	$scope.check_building_2_1_2_A_cm = function(){ $scope.building_2_1_2_A_cm = ''; };
	$scope.check_building_2_2_1_A = function(){ $scope.building_2_2_1_A = ''; $scope.building_2_2_1_A_a = false; $scope.building_2_2_1_A_b = false; };
	$scope.check_building_2_2_1_A_cm = function(){ $scope.building_2_2_1_A_cm = ''; };
	$scope.check_building_2_2_1_B = function(){ $scope.building_2_2_1_B = ''; $scope.building_2_2_1_B_a = false; $scope.building_2_2_1_B_b = false; };
	$scope.check_building_2_2_1_B_cm = function(){ $scope.building_2_2_1_B_cm = ''; };
	$scope.check_building_2_2_2_A = function(){ $scope.building_2_2_2_A = ''; $scope.building_2_2_2_A_a = false; $scope.building_2_2_2_A_b = false; };
	$scope.check_building_2_2_2_A_cm = function(){ $scope.building_2_2_2_A_cm = ''; };
	$scope.check_building_2_2_2_B = function(){ $scope.building_2_2_2_B = ''; $scope.building_2_2_2_B_a = false; $scope.building_2_2_2_B_b = false; $scope.building_2_2_2_B_c = false; };
	$scope.check_building_2_2_2_B_cm = function(){ $scope.building_2_2_2_B_cm = ''; };
	$scope.check_building_2_2_2_C = function(){ $scope.building_2_2_2_C = ''; $scope.building_2_2_2_C_a = false; $scope.building_2_2_2_C_b = false; };
	$scope.check_building_2_2_2_C_cm = function(){ $scope.building_2_2_2_C_cm = ''; };
	$scope.check_building_2_2_2_D = function(){ $scope.building_2_2_2_D = ''; $scope.building_2_2_2_D_a = false; $scope.building_2_2_2_D_b = false; };
	$scope.check_building_2_2_2_D_cm = function(){ $scope.building_2_2_2_D_cm = ''; };
	$scope.check_building_2_2_2_E = function(){ $scope.building_2_2_2_E = ''; $scope.building_2_2_2_E_a = false; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = false; };
	$scope.check_building_2_2_2_E_cm = function(){ $scope.building_2_2_2_E_cm = ''; };
	$scope.check_building_2_2_2_F = function(){ $scope.building_2_2_2_F = ''; $scope.building_2_2_2_F_a = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; };
	$scope.check_building_2_2_2_F_cm = function(){ $scope.building_2_2_2_F_cm = ''; };
	$scope.check_building_2_3_1_A = function(){ $scope.building_2_3_1_A = ''; $scope.building_2_3_1_A_a = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false; };
	$scope.check_building_2_3_1_A_cm = function(){ $scope.building_2_3_1_A_cm = ''; };
	$scope.check_reception_3_1_1_A = function(){ $scope.reception_3_1_1_A = ''; $scope.reception_3_1_1_A_a = false; $scope.reception_3_1_1_A_b = false; };
	$scope.check_reception_3_1_1_A_cm = function(){ $scope.reception_3_1_1_A_cm = ''; };
	$scope.check_reception_3_1_1_B = function(){ $scope.reception_3_1_1_B = ''; $scope.reception_3_1_1_B_a = false; $scope.reception_3_1_1_B_b = false; $scope.reception_3_1_1_B_c = false; };
	$scope.check_reception_3_1_1_B_cm = function(){ $scope.reception_3_1_1_B_cm = ''; };
	$scope.check_reception_3_1_1_C = function(){ $scope.reception_3_1_1_C = ''; $scope.reception_3_1_1_C_a = false; $scope.reception_3_1_1_C_b = false; };
	$scope.check_reception_3_1_1_C_cm = function(){ $scope.reception_3_1_1_C_cm = ''; };
	$scope.check_reception_3_1_1_D = function(){ $scope.reception_3_1_1_D = ''; $scope.reception_3_1_1_D_a = false; $scope.reception_3_1_1_D_b = false; };
	$scope.check_reception_3_1_1_D_cm = function(){ $scope.reception_3_1_1_D_cm = ''; };
	$scope.check_reception_3_1_1_E = function(){ $scope.reception_3_1_1_E = ''; $scope.reception_3_1_1_E_a = false; $scope.reception_3_1_1_E_b = false; $scope.reception_3_1_1_E_c = false; };
	$scope.check_reception_3_1_1_E_cm = function(){ $scope.reception_3_1_1_E_cm = ''; };
	$scope.check_dining_area_4_1_1_A = function(){ $scope.dining_area_4_1_1_A = ''; $scope.dining_area_4_1_1_A_a = false; $scope.dining_area_4_1_1_A_b = false; $scope.dining_area_4_1_1_A_c = false; };
	$scope.check_dining_area_4_1_1_A_cm = function(){ $scope.dining_area_4_1_1_A_cm = ''; };
	$scope.check_dining_area_4_1_1_B = function(){ $scope.dining_area_4_1_1_B = ''; $scope.dining_area_4_1_1_B_a = false; $scope.dining_area_4_1_1_B_b = false; $scope.dining_area_4_1_1_B_c = false; };
	$scope.check_dining_area_4_1_1_B_cm = function(){ $scope.dining_area_4_1_1_B_cm = ''; };
	$scope.check_dining_area_4_1_1_C = function(){ $scope.dining_area_4_1_1_C = ''; $scope.dining_area_4_1_1_C_a = false; $scope.dining_area_4_1_1_C_b = false; $scope.dining_area_4_1_1_C_c = false; };
	$scope.check_dining_area_4_1_1_C_cm = function(){ $scope.dining_area_4_1_1_C_cm = ''; };
	$scope.check_dining_area_4_1_1_D = function(){ $scope.dining_area_4_1_1_D = ''; $scope.dining_area_4_1_1_D_a = false; $scope.dining_area_4_1_1_D_b = false; $scope.dining_area_4_1_1_D_c = false; };
	$scope.check_dining_area_4_1_1_D_cm = function(){ $scope.dining_area_4_1_1_D_cm = ''; };
	$scope.check_dining_area_4_1_1_E = function(){ $scope.dining_area_4_1_1_E = ''; $scope.dining_area_4_1_1_E_a = false; $scope.dining_area_4_1_1_E_b = false; $scope.dining_area_4_1_1_E_c = false; };
	$scope.check_dining_area_4_1_1_E_cm = function(){ $scope.dining_area_4_1_1_E_cm = ''; };
	$scope.check_dining_area_4_1_1_F = function(){ $scope.dining_area_4_1_1_F = ''; $scope.dining_area_4_1_1_F_a = false; $scope.dining_area_4_1_1_F_b = false; $scope.dining_area_4_1_1_F_c = false; };
	$scope.check_dining_area_4_1_1_F_cm = function(){ $scope.dining_area_4_1_1_F_cm = ''; };
	$scope.check_dining_area_4_1_1_G = function(){ $scope.dining_area_4_1_1_G = ''; $scope.dining_area_4_1_1_G_a = false; $scope.dining_area_4_1_1_G_b = false; $scope.dining_area_4_1_1_G_c = false; };
	$scope.check_dining_area_4_1_1_G_cm = function(){ $scope.dining_area_4_1_1_G_cm = ''; };
	$scope.check_dining_area_4_1_1_H = function(){ $scope.dining_area_4_1_1_H = ''; $scope.dining_area_4_1_1_H_a = false; $scope.dining_area_4_1_1_H_b = false; $scope.dining_area_4_1_1_H_c = false; };
	$scope.check_dining_area_4_1_1_H_cm = function(){ $scope.dining_area_4_1_1_H_cm = ''; };
	$scope.check_dining_area_4_1_1_I = function(){ $scope.dining_area_4_1_1_I = ''; $scope.dining_area_4_1_1_I_a = false; $scope.dining_area_4_1_1_I_b = false; $scope.dining_area_4_1_1_I_c = false; };
	$scope.check_dining_area_4_1_1_I_cm = function(){ $scope.dining_area_4_1_1_I_cm = ''; };
	$scope.check_dining_area_4_1_1_J = function(){ $scope.dining_area_4_1_1_J = ''; $scope.dining_area_4_1_1_J_a = false; $scope.dining_area_4_1_1_J_b = false; $scope.dining_area_4_1_1_J_c = false; };
	$scope.check_dining_area_4_1_1_J_cm = function(){ $scope.dining_area_4_1_1_J_cm = ''; };
	$scope.check_dining_area_4_1_1_K = function(){ $scope.dining_area_4_1_1_K = ''; $scope.dining_area_4_1_1_K_a = false; $scope.dining_area_4_1_1_K_b = false; $scope.dining_area_4_1_1_K_c = false; };
	$scope.check_dining_area_4_1_1_K_cm = function(){ $scope.dining_area_4_1_1_K_cm = ''; };
	$scope.check_dining_area_4_1_1_L = function(){ $scope.dining_area_4_1_1_L = ''; $scope.dining_area_4_1_1_L_a = false; $scope.dining_area_4_1_1_L_b = false; $scope.dining_area_4_1_1_L_c = false; };
	$scope.check_dining_area_4_1_1_L_cm = function(){ $scope.dining_area_4_1_1_L_cm = ''; };
	$scope.check_dining_area_4_2_1_A = function(){ $scope.dining_area_4_2_1_A = ''; $scope.dining_area_4_2_1_A_a = false; $scope.dining_area_4_2_1_A_b = false; };
	$scope.check_dining_area_4_2_1_A_cm = function(){ $scope.dining_area_4_2_1_A_cm = ''; };
	$scope.check_dining_area_4_2_1_B = function(){ $scope.dining_area_4_2_1_B = ''; $scope.dining_area_4_2_1_B_a = false; $scope.dining_area_4_2_1_B_b = false; };
	$scope.check_dining_area_4_2_1_B_cm = function(){ $scope.dining_area_4_2_1_B_cm = ''; };
	$scope.check_dining_area_4_2_1_C = function(){ $scope.dining_area_4_2_1_C = ''; $scope.dining_area_4_2_1_C_a = false; $scope.dining_area_4_2_1_C_b = false; $scope.dining_area_4_2_1_C_c = false; };
	$scope.check_dining_area_4_2_1_C_cm = function(){ $scope.dining_area_4_2_1_C_cm = ''; };
	$scope.check_dining_area_4_2_1_D = function(){ $scope.dining_area_4_2_1_D = ''; $scope.dining_area_4_2_1_D_a = false; $scope.dining_area_4_2_1_D_b = false; $scope.dining_area_4_2_1_D_c = false; };
	$scope.check_dining_area_4_2_1_D_cm = function(){ $scope.dining_area_4_2_1_D_cm = ''; };
	$scope.check_dining_area_4_3_1_A = function(){ $scope.dining_area_4_3_1_A = ''; $scope.dining_area_4_3_1_A_a = false; $scope.dining_area_4_3_1_A_b = false; $scope.dining_area_4_3_1_A_c = false; };
	$scope.check_dining_area_4_3_1_A_cm = function(){ $scope.dining_area_4_3_1_A_cm = ''; };
	$scope.check_dining_area_4_3_1_B = function(){ $scope.dining_area_4_3_1_B = ''; $scope.dining_area_4_3_1_B_a = false; $scope.dining_area_4_3_1_B_b = false; $scope.dining_area_4_3_1_B_c = false; };
	$scope.check_dining_area_4_3_1_B_cm = function(){ $scope.dining_area_4_3_1_B_cm = ''; };
	$scope.check_dining_area_4_3_1_C = function(){ $scope.dining_area_4_3_1_C = ''; $scope.dining_area_4_3_1_C_a = false; $scope.dining_area_4_3_1_C_b = false; $scope.dining_area_4_3_1_C_c = false; $scope.dining_area_4_3_1_C_d = false; };
	$scope.check_dining_area_4_3_1_C_cm = function(){ $scope.dining_area_4_3_1_C_cm = ''; };
	$scope.check_dining_area_4_4_1_A = function(){ $scope.dining_area_4_4_1_A = ''; $scope.dining_area_4_4_1_A_a = false; $scope.dining_area_4_4_1_A_b = false; $scope.dining_area_4_4_1_A_c = false; };
	$scope.check_dining_area_4_4_1_A_cm = function(){ $scope.dining_area_4_4_1_A_cm = ''; };
	$scope.check_dining_area_4_4_1_B = function(){ $scope.dining_area_4_4_1_B = ''; $scope.dining_area_4_4_1_B_a = false; $scope.dining_area_4_4_1_B_b = false; $scope.dining_area_4_4_1_B_c = false; };
	$scope.check_dining_area_4_4_1_B_cm = function(){ $scope.dining_area_4_4_1_B_cm = ''; };
	$scope.check_dining_area_4_4_1_C = function(){ $scope.dining_area_4_4_1_C = ''; $scope.dining_area_4_4_1_C_a = false; $scope.dining_area_4_4_1_C_b = false; };
	$scope.check_dining_area_4_4_1_C_cm = function(){ $scope.dining_area_4_4_1_C_cm = ''; };
	$scope.check_dining_area_4_4_1_D = function(){ $scope.dining_area_4_4_1_D = ''; $scope.dining_area_4_4_1_D_a = false; $scope.dining_area_4_4_1_D_b = false; $scope.dining_area_4_4_1_D_c = false; };
	$scope.check_dining_area_4_4_1_D_cm = function(){ $scope.dining_area_4_4_1_D_cm = ''; };
	$scope.check_dining_area_4_4_1_E = function(){ $scope.dining_area_4_4_1_E = ''; $scope.dining_area_4_4_1_E_a = false; $scope.dining_area_4_4_1_E_b = false; $scope.dining_area_4_4_1_E_c = false; };
	$scope.check_dining_area_4_4_1_E_cm = function(){ $scope.dining_area_4_4_1_E_cm = ''; };
	$scope.check_dining_area_4_4_1_F = function(){ $scope.dining_area_4_4_1_F = ''; $scope.dining_area_4_4_1_F_a = false; $scope.dining_area_4_4_1_F_b = false; $scope.dining_area_4_4_1_F_c = false; };
	$scope.check_dining_area_4_4_1_F_cm = function(){ $scope.dining_area_4_4_1_F_cm = ''; };
	$scope.check_service_5_1_1_A = function(){ $scope.service_5_1_1_A = ''; $scope.service_5_1_1_A_a = false; $scope.service_5_1_1_A_b = false; };
	$scope.check_service_5_1_1_A_cm = function(){ $scope.service_5_1_1_A_cm = ''; };
	$scope.check_service_5_1_1_B = function(){ $scope.service_5_1_1_B = ''; $scope.service_5_1_1_B_a = false; $scope.service_5_1_1_B_b = false; $scope.service_5_1_1_B_c = false; $scope.service_5_1_1_B_d = false; };
	$scope.check_service_5_1_1_B_cm = function(){ $scope.service_5_1_1_B_cm = ''; };
	$scope.check_service_5_1_1_C = function(){ $scope.service_5_1_1_C = ''; $scope.service_5_1_1_C_a = false; $scope.service_5_1_1_C_b = false; $scope.service_5_1_1_C_c = false; };
	$scope.check_service_5_1_1_C_cm = function(){ $scope.service_5_1_1_C_cm = ''; };
	$scope.check_service_5_1_1_D = function(){ $scope.service_5_1_1_D = ''; $scope.service_5_1_1_D_a = false; $scope.service_5_1_1_D_b = false; $scope.service_5_1_1_D_c = false; };
	$scope.check_service_5_1_1_D_cm = function(){ $scope.service_5_1_1_D_cm = ''; };
	$scope.check_service_5_1_1_E = function(){ $scope.service_5_1_1_E = ''; $scope.service_5_1_1_E_a = false; $scope.service_5_1_1_E_b = false; };
	$scope.check_service_5_1_1_E_cm = function(){ $scope.service_5_1_1_E_cm = ''; };
	$scope.check_service_5_1_1_F = function(){ $scope.service_5_1_1_F = ''; $scope.service_5_1_1_F_a = false; $scope.service_5_1_1_F_b = false; $scope.service_5_1_1_F_c = false; };
	$scope.check_service_5_1_1_F_cm = function(){ $scope.service_5_1_1_F_cm = ''; };
	$scope.check_service_5_1_1_G = function(){ $scope.service_5_1_1_G = ''; $scope.service_5_1_1_G_a = false; $scope.service_5_1_1_G_b = false; };
	$scope.check_service_5_1_1_G_cm = function(){ $scope.service_5_1_1_G_cm = ''; };
	$scope.check_service_5_1_1_H = function(){ $scope.service_5_1_1_H = ''; $scope.service_5_1_1_H_a = false; $scope.service_5_1_1_H_b = false; $scope.service_5_1_1_H_c = false; };
	$scope.check_service_5_1_1_H_cm = function(){ $scope.service_5_1_1_H_cm = ''; };
	$scope.check_service_5_1_1_I = function(){ $scope.service_5_1_1_I = ''; $scope.service_5_1_1_I_a = false; $scope.service_5_1_1_I_b = false; $scope.service_5_1_1_I_c = false; };
	$scope.check_service_5_1_1_I_cm = function(){ $scope.service_5_1_1_I_cm = ''; };
	$scope.check_service_5_1_1_J = function(){ $scope.service_5_1_1_J = ''; $scope.service_5_1_1_J_a = false; $scope.service_5_1_1_J_b = false; };
	$scope.check_service_5_1_1_J_cm = function(){ $scope.service_5_1_1_J_cm = ''; };
	$scope.check_service_5_1_1_K_a = function(){ $scope.service_5_1_1_K_a = ''; $scope.service_5_1_1_K_a = false; };
	$scope.check_service_5_1_1_K_a_cm = function(){ $scope.service_5_1_1_K_a_cm = ''; };
	$scope.check_service_5_1_1_K_b = function(){ $scope.service_5_1_1_K_b = ''; $scope.service_5_1_1_K_b = false; };
	$scope.check_service_5_1_1_K_b_cm = function(){ $scope.service_5_1_1_K_b_cm = ''; };
	$scope.check_service_5_1_1_K_c = function(){ $scope.service_5_1_1_K_c = ''; $scope.service_5_1_1_K_c = false; };
	$scope.check_service_5_1_1_K_c_cm = function(){ $scope.service_5_1_1_K_c_cm = ''; };
	$scope.check_service_5_2_1_A = function(){ $scope.service_5_2_1_A = ''; $scope.service_5_2_1_A_a = false; $scope.service_5_2_1_A_b = false; };
	$scope.check_service_5_2_1_A_cm = function(){ $scope.service_5_2_1_A_cm = ''; };
	$scope.check_service_5_2_1_B = function(){ $scope.service_5_2_1_B = ''; $scope.service_5_2_1_B_a = false; $scope.service_5_2_1_B_b = false; $scope.service_5_2_1_B_c = false; };
	$scope.check_service_5_2_1_B_cm = function(){ $scope.service_5_2_1_B_cm = ''; };
	$scope.check_service_5_2_1_C = function(){ $scope.service_5_2_1_C = ''; $scope.service_5_2_1_C_a = false; $scope.service_5_2_1_C_b = false; $scope.service_5_2_1_C_c = false; };
	$scope.check_service_5_2_1_C_cm = function(){ $scope.service_5_2_1_C_cm = ''; };
	$scope.check_service_5_2_1_D = function(){ $scope.service_5_2_1_D = ''; $scope.service_5_2_1_D_a = false; $scope.service_5_2_1_D_b = false; $scope.service_5_2_1_D_c = false; };
	$scope.check_service_5_2_1_D_cm = function(){ $scope.service_5_2_1_D_cm = ''; };
	$scope.check_service_5_2_1_E_a = function(){ $scope.service_5_2_1_E_a = ''; $scope.service_5_2_1_E_a = false; };
	$scope.check_service_5_2_1_E_a_cm = function(){ $scope.service_5_2_1_E_a_cm = ''; };
	$scope.check_service_5_2_1_E_b = function(){ $scope.service_5_2_1_E_b = ''; $scope.service_5_2_1_E_b = false; };
	$scope.check_service_5_2_1_E_b_cm = function(){ $scope.service_5_2_1_E_b_cm = ''; };
	$scope.check_service_5_2_1_E_c = function(){ $scope.service_5_2_1_E_c = ''; $scope.service_5_2_1_E_c = false; };
	$scope.check_service_5_2_1_E_c_cm = function(){ $scope.service_5_2_1_E_c_cm = ''; };
	$scope.check_service_5_2_1_E_d = function(){ $scope.service_5_2_1_E_d = ''; $scope.service_5_2_1_E_d = false; };
	$scope.check_service_5_2_1_E_d_cm = function(){ $scope.service_5_2_1_E_d_cm = ''; };
	$scope.check_service_5_2_1_F = function(){ $scope.service_5_2_1_F = ''; $scope.service_5_2_1_F_a = false; $scope.service_5_2_1_F_b = false; $scope.service_5_2_1_F_c = false; };
	$scope.check_service_5_2_1_F_cm = function(){ $scope.service_5_2_1_F_cm = ''; };
	$scope.check_service_5_2_1_G_a = function(){ $scope.service_5_2_1_G_a = ''; $scope.service_5_2_1_G_a = false; };
	$scope.check_service_5_2_1_G_a_cm = function(){ $scope.service_5_2_1_G_a_cm = ''; };
	$scope.check_service_5_2_1_G_b = function(){ $scope.service_5_2_1_G_b = ''; $scope.service_5_2_1_G_b = false; };
	$scope.check_service_5_2_1_G_b_cm = function(){ $scope.service_5_2_1_G_b_cm = ''; };
	$scope.check_service_5_2_1_G_c = function(){ $scope.service_5_2_1_G_c = ''; $scope.service_5_2_1_G_c = false; };
	$scope.check_service_5_2_1_G_c_cm = function(){ $scope.service_5_2_1_G_c_cm = ''; };
	$scope.check_service_5_2_1_H = function(){ $scope.service_5_2_1_H = ''; $scope.service_5_2_1_H_a = false; $scope.service_5_2_1_H_b = false; };
	$scope.check_service_5_2_1_H_cm = function(){ $scope.service_5_2_1_H_cm = ''; };
	$scope.check_service_5_2_1_I = function(){ $scope.service_5_2_1_I = ''; $scope.service_5_2_1_I_a = false; $scope.service_5_2_1_I_b = false; };
	$scope.check_service_5_2_1_I_cm = function(){ $scope.service_5_2_1_I_cm = ''; };
	$scope.check_service_5_2_1_J = function(){ $scope.service_5_2_1_J = ''; $scope.service_5_2_1_J_a = false; $scope.service_5_2_1_J_b = false; $scope.service_5_2_1_J_c = false; };
	$scope.check_service_5_2_1_J_cm = function(){ $scope.service_5_2_1_J_cm = ''; };
	$scope.check_service_5_3_1_A = function(){ $scope.service_5_3_1_A = ''; $scope.service_5_3_1_A_a = false; $scope.service_5_3_1_A_b = false; $scope.service_5_3_1_A_c = false; };
	$scope.check_service_5_3_1_A_cm = function(){ $scope.service_5_3_1_A_cm = ''; };
	$scope.check_service_5_3_1_B = function(){ $scope.service_5_3_1_B = ''; $scope.service_5_3_1_B_a = false; $scope.service_5_3_1_B_b = false; };
	$scope.check_service_5_3_1_B_cm = function(){ $scope.service_5_3_1_B_cm = ''; };
	$scope.check_entertainment_6_1_1_A = function(){ $scope.entertainment_6_1_1_A = ''; $scope.entertainment_6_1_1_A_a = false; $scope.entertainment_6_1_1_A_b = false; };
	$scope.check_entertainment_6_1_1_A_cm = function(){ $scope.entertainment_6_1_1_A_cm = ''; };
	$scope.check_entertainment_6_1_1_B = function(){ $scope.entertainment_6_1_1_B = ''; $scope.entertainment_6_1_1_B_a = false; $scope.entertainment_6_1_1_B_b = false; $scope.entertainment_6_1_1_B_c = false; };
	$scope.check_entertainment_6_1_1_B_cm = function(){ $scope.entertainment_6_1_1_B_cm = ''; };
	$scope.check_entertainment_6_1_1_C = function(){ $scope.entertainment_6_1_1_C = ''; $scope.entertainment_6_1_1_C_a = false; $scope.entertainment_6_1_1_C_b = false; };
	$scope.check_entertainment_6_1_1_C_cm = function(){ $scope.entertainment_6_1_1_C_cm = ''; };
	$scope.check_bar_7_1_1_A = function(){ $scope.bar_7_1_1_A = ''; $scope.bar_7_1_1_A_a = false; $scope.bar_7_1_1_A_b = false; };
	$scope.check_bar_7_1_1_A_cm = function(){ $scope.bar_7_1_1_A_cm = ''; };
	$scope.check_bar_7_1_1_B_a = function(){ $scope.bar_7_1_1_B_a = ''; $scope.bar_7_1_1_B_a = false; };
	$scope.check_bar_7_1_1_B_a_cm = function(){ $scope.bar_7_1_1_B_a_cm = ''; };
	$scope.check_bar_7_1_1_B_b = function(){ $scope.bar_7_1_1_B_b = ''; $scope.bar_7_1_1_B_b = false; };
	$scope.check_bar_7_1_1_B_b_cm = function(){ $scope.bar_7_1_1_B_b_cm = ''; };
	$scope.check_bar_7_1_1_B_c = function(){ $scope.bar_7_1_1_B_c = ''; $scope.bar_7_1_1_B_c = false; };
	$scope.check_bar_7_1_1_B_c_cm = function(){ $scope.bar_7_1_1_B_c_cm = ''; };
	$scope.check_bar_7_1_1_C = function(){ $scope.bar_7_1_1_C = ''; $scope.bar_7_1_1_C_a = false; $scope.bar_7_1_1_C_b = false; $scope.bar_7_1_1_C_c = false; };
	$scope.check_bar_7_1_1_C_cm = function(){ $scope.bar_7_1_1_C_cm = ''; };
	$scope.check_bar_7_1_1_D = function(){ $scope.bar_7_1_1_D = ''; $scope.bar_7_1_1_D_a = false; $scope.bar_7_1_1_D_b = false; $scope.bar_7_1_1_D_c = false; };
	$scope.check_bar_7_1_1_D_cm = function(){ $scope.bar_7_1_1_D_cm = ''; };
	$scope.check_bar_7_1_1_E = function(){ $scope.bar_7_1_1_E = ''; $scope.bar_7_1_1_E_a = false; $scope.bar_7_1_1_E_b = false; $scope.bar_7_1_1_E_c = false; };
	$scope.check_bar_7_1_1_E_cm = function(){ $scope.bar_7_1_1_E_cm = ''; };
	$scope.check_bar_7_2_1_A = function(){ $scope.bar_7_2_1_A = ''; $scope.bar_7_2_1_A_a = false; $scope.bar_7_2_1_A_b = false; $scope.bar_7_2_1_A_c = false; };
	$scope.check_bar_7_2_1_A_cm = function(){ $scope.bar_7_2_1_A_cm = ''; };
	$scope.check_bar_7_2_1_B = function(){ $scope.bar_7_2_1_B = ''; $scope.bar_7_2_1_B_a = false; $scope.bar_7_2_1_B_b = false; };
	$scope.check_bar_7_2_1_B_cm = function(){ $scope.bar_7_2_1_B_cm = ''; };
	$scope.check_bar_7_2_1_C = function(){ $scope.bar_7_2_1_C = ''; $scope.bar_7_2_1_C_a = false; $scope.bar_7_2_1_C_b = false; $scope.bar_7_2_1_C_c = false; };
	$scope.check_bar_7_2_1_C_cm = function(){ $scope.bar_7_2_1_C_cm = ''; };
	$scope.check_bar_7_2_1_D = function(){ $scope.bar_7_2_1_D = ''; $scope.bar_7_2_1_D_a = false; $scope.bar_7_2_1_D_b = false; $scope.bar_7_2_1_D_c = false; };
	$scope.check_bar_7_2_1_D_cm = function(){ $scope.bar_7_2_1_D_cm = ''; };
	$scope.check_bar_7_2_2_A = function(){ $scope.bar_7_2_2_A = ''; $scope.bar_7_2_2_A_a = false; $scope.bar_7_2_2_A_b = false; $scope.bar_7_2_2_A_c = false; };
	$scope.check_bar_7_2_2_A_cm = function(){ $scope.bar_7_2_2_A_cm = ''; };
	$scope.check_bar_7_2_2_B = function(){ $scope.bar_7_2_2_B = ''; $scope.bar_7_2_2_B_a = false; $scope.bar_7_2_2_B_b = false; $scope.bar_7_2_2_B_c = false; };
	$scope.check_bar_7_2_2_B_cm = function(){ $scope.bar_7_2_2_B_cm = ''; };
	$scope.check_bar_7_2_2_C = function(){ $scope.bar_7_2_2_C = ''; $scope.bar_7_2_2_C_a = false; $scope.bar_7_2_2_C_b = false; $scope.bar_7_2_2_C_c = false; $scope.bar_7_2_2_C_d = false; };
	$scope.check_bar_7_2_2_C_cm = function(){ $scope.bar_7_2_2_C_cm = ''; };
	$scope.check_bar_7_2_2_D = function(){ $scope.bar_7_2_2_D = ''; $scope.bar_7_2_2_D_a = false; $scope.bar_7_2_2_D_b = false; $scope.bar_7_2_2_D_c = false; };
	$scope.check_bar_7_2_2_D_cm = function(){ $scope.bar_7_2_2_D_cm = ''; };
	$scope.check_bar_7_2_2_E = function(){ $scope.bar_7_2_2_E = ''; $scope.bar_7_2_2_E_a = false; $scope.bar_7_2_2_E_b = false; $scope.bar_7_2_2_E_c = false; };
	$scope.check_bar_7_2_2_E_cm = function(){ $scope.bar_7_2_2_E_cm = ''; };
	$scope.check_bar_7_2_2_F = function(){ $scope.bar_7_2_2_F = ''; $scope.bar_7_2_2_F_a = false; $scope.bar_7_2_2_F_b = false; $scope.bar_7_2_2_F_c = false; };
	$scope.check_bar_7_2_2_F_cm = function(){ $scope.bar_7_2_2_F_cm = ''; };
	$scope.check_bar_7_3_1_A = function(){ $scope.bar_7_3_1_A = ''; $scope.bar_7_3_1_A_a = false; $scope.bar_7_3_1_A_b = false; };
	$scope.check_bar_7_3_1_A_cm = function(){ $scope.bar_7_3_1_A_cm = ''; };
	$scope.check_bar_7_3_1_B = function(){ $scope.bar_7_3_1_B = ''; $scope.bar_7_3_1_B_a = false; $scope.bar_7_3_1_B_b = false; };
	$scope.check_bar_7_3_1_B_cm = function(){ $scope.bar_7_3_1_B_cm = ''; };
	$scope.check_bar_7_3_1_C = function(){ $scope.bar_7_3_1_C = ''; $scope.bar_7_3_1_C_a = false; $scope.bar_7_3_1_C_b = false; $scope.bar_7_3_1_C_c = false; };
	$scope.check_bar_7_3_1_C_cm = function(){ $scope.bar_7_3_1_C_cm = ''; };
	$scope.check_bar_7_3_1_D = function(){ $scope.bar_7_3_1_D = ''; $scope.bar_7_3_1_D_a = false; $scope.bar_7_3_1_D_b = false; };
	$scope.check_bar_7_3_1_D_cm = function(){ $scope.bar_7_3_1_D_cm = ''; };
	$scope.check_bar_7_3_1_E = function(){ $scope.bar_7_3_1_E = ''; $scope.bar_7_3_1_E_a = false; $scope.bar_7_3_1_E_b = false; };
	$scope.check_bar_7_3_1_E_cm = function(){ $scope.bar_7_3_1_E_cm = ''; };
	$scope.check_bar_7_3_1_F = function(){ $scope.bar_7_3_1_F = ''; $scope.bar_7_3_1_F_a = false; $scope.bar_7_3_1_F_b = false; $scope.bar_7_3_1_F_c = false; };
	$scope.check_bar_7_3_1_F_cm = function(){ $scope.bar_7_3_1_F_cm = ''; };
	$scope.check_bar_7_4_1_A = function(){ $scope.bar_7_4_1_A = ''; $scope.bar_7_4_1_A_a = false; $scope.bar_7_4_1_A_b = false; };
	$scope.check_bar_7_4_1_A_cm = function(){ $scope.bar_7_4_1_A_cm = ''; };
	$scope.check_bar_7_4_1_B = function(){ $scope.bar_7_4_1_B = ''; $scope.bar_7_4_1_B_a = false; $scope.bar_7_4_1_B_b = false; $scope.bar_7_4_1_B_c = false; };
	$scope.check_bar_7_4_1_B_cm = function(){ $scope.bar_7_4_1_B_cm = ''; };
	$scope.check_bar_7_4_1_C = function(){ $scope.bar_7_4_1_C = ''; $scope.bar_7_4_1_C_a = false; $scope.bar_7_4_1_C_b = false; $scope.bar_7_4_1_C_c = false; };
	$scope.check_bar_7_4_1_C_cm = function(){ $scope.bar_7_4_1_C_cm = ''; };
	$scope.check_bar_7_4_1_D = function(){ $scope.bar_7_4_1_D = ''; $scope.bar_7_4_1_D_a = false; $scope.bar_7_4_1_D_b = false; $scope.bar_7_4_1_D_c = false; };
	$scope.check_bar_7_4_1_D_cm = function(){ $scope.bar_7_4_1_D_cm = ''; };
	$scope.check_bar_7_4_1_E_a = function(){ $scope.bar_7_4_1_E_a = ''; $scope.bar_7_4_1_E_a = false; };
	$scope.check_bar_7_4_1_E_a_cm = function(){ $scope.bar_7_4_1_E_a_cm = ''; };
	$scope.check_bar_7_4_1_E_b = function(){ $scope.bar_7_4_1_E_b = ''; $scope.bar_7_4_1_E_b = false; };
	$scope.check_bar_7_4_1_E_b_cm = function(){ $scope.bar_7_4_1_E_b_cm = ''; };
	$scope.check_bar_7_4_1_E_c = function(){ $scope.bar_7_4_1_E_c = ''; $scope.bar_7_4_1_E_c = false; };
	$scope.check_bar_7_4_1_E_c_cm = function(){ $scope.bar_7_4_1_E_c_cm = ''; };
	$scope.check_bar_7_4_1_E_d = function(){ $scope.bar_7_4_1_E_d = ''; $scope.bar_7_4_1_E_d = false; };
	$scope.check_bar_7_4_1_E_d_cm = function(){ $scope.bar_7_4_1_E_d_cm = ''; };
	$scope.check_bar_7_4_1_E_e = function(){ $scope.bar_7_4_1_E_e = ''; $scope.bar_7_4_1_E_e = false; };
	$scope.check_bar_7_4_1_E_e_cm = function(){ $scope.bar_7_4_1_E_e_cm = ''; };
	$scope.check_bar_7_4_1_E_f = function(){ $scope.bar_7_4_1_E_f = ''; $scope.bar_7_4_1_E_f = false; };
	$scope.check_bar_7_4_1_E_f_cm = function(){ $scope.bar_7_4_1_E_f_cm = ''; };
	$scope.check_bar_7_4_1_E_g = function(){ $scope.bar_7_4_1_E_g = ''; $scope.bar_7_4_1_E_g = false; };
	$scope.check_bar_7_4_1_E_g_cm = function(){ $scope.bar_7_4_1_E_g_cm = ''; };
	$scope.check_bar_7_4_1_E_h = function(){ $scope.bar_7_4_1_E_h = ''; $scope.bar_7_4_1_E_h = false; };
	$scope.check_bar_7_4_1_E_h_cm = function(){ $scope.bar_7_4_1_E_h_cm = ''; };
	$scope.check_bar_7_4_1_F = function(){ $scope.bar_7_4_1_F = ''; $scope.bar_7_4_1_F_a = false; $scope.bar_7_4_1_F_b = false; $scope.bar_7_4_1_F_c = false; };
	$scope.check_bar_7_4_1_F_cm = function(){ $scope.bar_7_4_1_F_cm = ''; };
	$scope.check_bar_7_4_1_G = function(){ $scope.bar_7_4_1_G = ''; $scope.bar_7_4_1_G_a = false; $scope.bar_7_4_1_G_b = false; };
	$scope.check_bar_7_4_1_G_cm = function(){ $scope.bar_7_4_1_G_cm = ''; };
	$scope.check_bar_7_4_1_H = function(){ $scope.bar_7_4_1_H = ''; $scope.bar_7_4_1_H_a = false; $scope.bar_7_4_1_H_b = false; $scope.bar_7_4_1_H_c = false; };
	$scope.check_bar_7_4_1_H_cm = function(){ $scope.bar_7_4_1_H_cm = ''; };
	$scope.check_bar_7_4_1_I = function(){ $scope.bar_7_4_1_I = ''; $scope.bar_7_4_1_I_a = false; $scope.bar_7_4_1_I_b = false; $scope.bar_7_4_1_I_c = false; };
	$scope.check_bar_7_4_1_I_cm = function(){ $scope.bar_7_4_1_I_cm = ''; };
	$scope.check_bar_7_5_1_A = function(){ $scope.bar_7_5_1_A = ''; $scope.bar_7_5_1_A_a = false; $scope.bar_7_5_1_A_b = false; $scope.bar_7_5_1_A_c = false; };
	$scope.check_bar_7_5_1_A_cm = function(){ $scope.bar_7_5_1_A_cm = ''; };
	$scope.check_bar_7_5_1_B = function(){ $scope.bar_7_5_1_B = ''; $scope.bar_7_5_1_B_a = false; $scope.bar_7_5_1_B_b = false; };
	$scope.check_bar_7_5_1_B_cm = function(){ $scope.bar_7_5_1_B_cm = ''; };
	$scope.check_bar_7_5_1_C = function(){ $scope.bar_7_5_1_C = ''; $scope.bar_7_5_1_C_a = false; $scope.bar_7_5_1_C_b = false; };
	$scope.check_bar_7_5_1_C_cm = function(){ $scope.bar_7_5_1_C_cm = ''; };
	$scope.check_bar_7_6_1_A = function(){ $scope.bar_7_6_1_A = ''; $scope.bar_7_6_1_A_a = false; $scope.bar_7_6_1_A_b = false; $scope.bar_7_6_1_A_c = false; };
	$scope.check_bar_7_6_1_A_cm = function(){ $scope.bar_7_6_1_A_cm = ''; };
	$scope.check_bar_7_6_1_B = function(){ $scope.bar_7_6_1_B = ''; $scope.bar_7_6_1_B_a = false; $scope.bar_7_6_1_B_b = false; $scope.bar_7_6_1_B_c = false; };
	$scope.check_bar_7_6_1_B_cm = function(){ $scope.bar_7_6_1_B_cm = ''; };
	$scope.check_bar_7_6_1_C = function(){ $scope.bar_7_6_1_C = ''; $scope.bar_7_6_1_C_a = false; $scope.bar_7_6_1_C_b = false; $scope.bar_7_6_1_C_c = false; };
	$scope.check_bar_7_6_1_C_cm = function(){ $scope.bar_7_6_1_C_cm = ''; };
	$scope.check_bar_7_7_1_A = function(){ $scope.bar_7_7_1_A = ''; $scope.bar_7_7_1_A_a = false; $scope.bar_7_7_1_A_b = false; $scope.bar_7_7_1_A_c = false; };
	$scope.check_bar_7_7_1_A_cm = function(){ $scope.bar_7_7_1_A_cm = ''; };
	$scope.check_bar_7_7_1_B = function(){ $scope.bar_7_7_1_B = ''; $scope.bar_7_7_1_B_a = false; $scope.bar_7_7_1_B_b = false; };
	$scope.check_bar_7_7_1_B_cm = function(){ $scope.bar_7_7_1_B_cm = ''; };
	$scope.check_bar_7_7_1_C = function(){ $scope.bar_7_7_1_C = ''; $scope.bar_7_7_1_C_a = false; $scope.bar_7_7_1_C_b = false; $scope.bar_7_7_1_C_c = false; };
	$scope.check_bar_7_7_1_C_cm = function(){ $scope.bar_7_7_1_C_cm = ''; };
	$scope.check_kitchen_8_1_1_A = function(){ $scope.kitchen_8_1_1_A = ''; $scope.kitchen_8_1_1_A_a = false; $scope.kitchen_8_1_1_A_b = false; $scope.kitchen_8_1_1_A_c = false; };
	$scope.check_kitchen_8_1_1_A_cm = function(){ $scope.kitchen_8_1_1_A_cm = ''; };
	$scope.check_kitchen_8_2_1_A = function(){ $scope.kitchen_8_2_1_A = ''; $scope.kitchen_8_2_1_A_a = false; $scope.kitchen_8_2_1_A_b = false; };
	$scope.check_kitchen_8_2_1_A_cm = function(){ $scope.kitchen_8_2_1_A_cm = ''; };
	$scope.check_kitchen_8_2_1_B = function(){ $scope.kitchen_8_2_1_B = ''; $scope.kitchen_8_2_1_B_a = false; $scope.kitchen_8_2_1_B_b = false; $scope.kitchen_8_2_1_B_c = false; };
	$scope.check_kitchen_8_2_1_B_cm = function(){ $scope.kitchen_8_2_1_B_cm = ''; };
	$scope.check_kitchen_8_2_1_C = function(){ $scope.kitchen_8_2_1_C = ''; $scope.kitchen_8_2_1_C_a = false; $scope.kitchen_8_2_1_C_b = false; $scope.kitchen_8_2_1_C_c = false; };
	$scope.check_kitchen_8_2_1_C_cm = function(){ $scope.kitchen_8_2_1_C_cm = ''; };
	$scope.check_kitchen_8_3_1_A = function(){ $scope.kitchen_8_3_1_A = ''; $scope.kitchen_8_3_1_A_a = false; $scope.kitchen_8_3_1_A_b = false; $scope.kitchen_8_3_1_A_c = false; $scope.kitchen_8_3_1_A_d = false; };
	$scope.check_kitchen_8_3_1_A_cm = function(){ $scope.kitchen_8_3_1_A_cm = ''; };
	$scope.check_kitchen_8_3_1_B = function(){ $scope.kitchen_8_3_1_B = ''; $scope.kitchen_8_3_1_B_a = false; $scope.kitchen_8_3_1_B_b = false; };
	$scope.check_kitchen_8_3_1_B_cm = function(){ $scope.kitchen_8_3_1_B_cm = ''; };
	$scope.check_kitchen_8_3_1_C = function(){ $scope.kitchen_8_3_1_C = ''; $scope.kitchen_8_3_1_C_a = false; $scope.kitchen_8_3_1_C_b = false; };
	$scope.check_kitchen_8_3_1_C_cm = function(){ $scope.kitchen_8_3_1_C_cm = ''; };
	$scope.check_kitchen_8_4_1_A = function(){ $scope.kitchen_8_4_1_A = ''; $scope.kitchen_8_4_1_A_a = false; $scope.kitchen_8_4_1_A_b = false; $scope.kitchen_8_4_1_A_c = false; };
	$scope.check_kitchen_8_4_1_A_cm = function(){ $scope.kitchen_8_4_1_A_cm = ''; };
	$scope.check_kitchen_8_4_2_A = function(){ $scope.kitchen_8_4_2_A = ''; $scope.kitchen_8_4_2_A_a = false; $scope.kitchen_8_4_2_A_b = false; $scope.kitchen_8_4_2_A_c = false; };
	$scope.check_kitchen_8_4_2_A_cm = function(){ $scope.kitchen_8_4_2_A_cm = ''; };
	$scope.check_kitchen_8_4_2_B = function(){ $scope.kitchen_8_4_2_B = ''; $scope.kitchen_8_4_2_B_a = false; $scope.kitchen_8_4_2_B_b = false; $scope.kitchen_8_4_2_B_c = false; };
	$scope.check_kitchen_8_4_2_B_cm = function(){ $scope.kitchen_8_4_2_B_cm = ''; };
	$scope.check_kitchen_8_4_2_C = function(){ $scope.kitchen_8_4_2_C = ''; $scope.kitchen_8_4_2_C_a = false; $scope.kitchen_8_4_2_C_b = false; $scope.kitchen_8_4_2_C_c = false; };
	$scope.check_kitchen_8_4_2_C_cm = function(){ $scope.kitchen_8_4_2_C_cm = ''; };
	$scope.check_kitchen_8_5_1_A = function(){ $scope.kitchen_8_5_1_A = ''; $scope.kitchen_8_5_1_A_a = false; $scope.kitchen_8_5_1_A_b = false; $scope.kitchen_8_5_1_A_c = false; };
	$scope.check_kitchen_8_5_1_A_cm = function(){ $scope.kitchen_8_5_1_A_cm = ''; };
	$scope.check_kitchen_8_5_1_B = function(){ $scope.kitchen_8_5_1_B = ''; $scope.kitchen_8_5_1_B_a = false; $scope.kitchen_8_5_1_B_b = false; $scope.kitchen_8_5_1_B_c = false; };
	$scope.check_kitchen_8_5_1_B_cm = function(){ $scope.kitchen_8_5_1_B_cm = ''; };
	$scope.check_kitchen_8_5_1_C = function(){ $scope.kitchen_8_5_1_C = ''; $scope.kitchen_8_5_1_C_a = false; $scope.kitchen_8_5_1_C_b = false; $scope.kitchen_8_5_1_C_c = false; };
	$scope.check_kitchen_8_5_1_C_cm = function(){ $scope.kitchen_8_5_1_C_cm = ''; };
	$scope.check_kitchen_8_5_1_D = function(){ $scope.kitchen_8_5_1_D = ''; $scope.kitchen_8_5_1_D_a = false; $scope.kitchen_8_5_1_D_b = false; $scope.kitchen_8_5_1_D_c = false; };
	$scope.check_kitchen_8_5_1_D_cm = function(){ $scope.kitchen_8_5_1_D_cm = ''; };
	$scope.check_kitchen_8_5_1_E = function(){ $scope.kitchen_8_5_1_E = ''; $scope.kitchen_8_5_1_E_a = false; $scope.kitchen_8_5_1_E_b = false; $scope.kitchen_8_5_1_E_c = false; };
	$scope.check_kitchen_8_5_1_E_cm = function(){ $scope.kitchen_8_5_1_E_cm = ''; };
	$scope.check_kitchen_8_5_1_F = function(){ $scope.kitchen_8_5_1_F = ''; $scope.kitchen_8_5_1_F_a = false; $scope.kitchen_8_5_1_F_b = false; };
	$scope.check_kitchen_8_5_1_F_cm = function(){ $scope.kitchen_8_5_1_F_cm = ''; };
	$scope.check_kitchen_8_5_1_G = function(){ $scope.kitchen_8_5_1_G = ''; $scope.kitchen_8_5_1_G_a = false; $scope.kitchen_8_5_1_G_b = false; $scope.kitchen_8_5_1_G_c = false; };
	$scope.check_kitchen_8_5_1_G_cm = function(){ $scope.kitchen_8_5_1_G_cm = ''; };
	$scope.check_kitchen_8_5_1_H = function(){ $scope.kitchen_8_5_1_H = ''; $scope.kitchen_8_5_1_H_a = false; $scope.kitchen_8_5_1_H_b = false; $scope.kitchen_8_5_1_H_c = false; };
	$scope.check_kitchen_8_5_1_H_cm = function(){ $scope.kitchen_8_5_1_H_cm = ''; };
	$scope.check_kitchen_8_5_1_I = function(){ $scope.kitchen_8_5_1_I = ''; $scope.kitchen_8_5_1_I_a = false; $scope.kitchen_8_5_1_I_b = false; $scope.kitchen_8_5_1_I_c = false; };
	$scope.check_kitchen_8_5_1_I_cm = function(){ $scope.kitchen_8_5_1_I_cm = ''; };
	$scope.check_kitchen_8_6_1_A = function(){ $scope.kitchen_8_6_1_A = ''; $scope.kitchen_8_6_1_A_a = false; $scope.kitchen_8_6_1_A_b = false; };
	$scope.check_kitchen_8_6_1_A_cm = function(){ $scope.kitchen_8_6_1_A_cm = ''; };
	$scope.check_kitchen_8_6_1_B = function(){ $scope.kitchen_8_6_1_B = ''; $scope.kitchen_8_6_1_B_a = false; $scope.kitchen_8_6_1_B_b = false; };
	$scope.check_kitchen_8_6_1_B_cm = function(){ $scope.kitchen_8_6_1_B_cm = ''; };
	$scope.check_kitchen_8_6_1_C = function(){ $scope.kitchen_8_6_1_C = ''; $scope.kitchen_8_6_1_C_a = false; $scope.kitchen_8_6_1_C_b = false; };
	$scope.check_kitchen_8_6_1_C_cm = function(){ $scope.kitchen_8_6_1_C_cm = ''; };
	$scope.check_kitchen_8_6_1_D = function(){ $scope.kitchen_8_6_1_D = ''; $scope.kitchen_8_6_1_D_a = false; $scope.kitchen_8_6_1_D_b = false; };
	$scope.check_kitchen_8_6_1_D_cm = function(){ $scope.kitchen_8_6_1_D_cm = ''; };
	$scope.check_kitchen_8_6_1_E = function(){ $scope.kitchen_8_6_1_E = ''; $scope.kitchen_8_6_1_E_a = false; $scope.kitchen_8_6_1_E_b = false; };
	$scope.check_kitchen_8_6_1_E_cm = function(){ $scope.kitchen_8_6_1_E_cm = ''; };
	$scope.check_kitchen_8_6_1_F = function(){ $scope.kitchen_8_6_1_F = ''; $scope.kitchen_8_6_1_F_a = false; $scope.kitchen_8_6_1_F_b = false; };
	$scope.check_kitchen_8_6_1_F_cm = function(){ $scope.kitchen_8_6_1_F_cm = ''; };
	$scope.check_kitchen_8_6_1_G = function(){ $scope.kitchen_8_6_1_G = ''; $scope.kitchen_8_6_1_G_a = false; $scope.kitchen_8_6_1_G_b = false; };
	$scope.check_kitchen_8_6_1_G_cm = function(){ $scope.kitchen_8_6_1_G_cm = ''; };
	$scope.check_kitchen_8_7_1_A = function(){ $scope.kitchen_8_7_1_A = ''; $scope.kitchen_8_7_1_A_a = false; $scope.kitchen_8_7_1_A_b = false; };
	$scope.check_kitchen_8_7_1_A_cm = function(){ $scope.kitchen_8_7_1_A_cm = ''; };
	$scope.check_kitchen_8_7_1_B = function(){ $scope.kitchen_8_7_1_B = ''; $scope.kitchen_8_7_1_B_a = false; $scope.kitchen_8_7_1_B_b = false; };
	$scope.check_kitchen_8_7_1_B_cm = function(){ $scope.kitchen_8_7_1_B_cm = ''; };
	$scope.check_kitchen_8_7_1_C = function(){ $scope.kitchen_8_7_1_C = ''; $scope.kitchen_8_7_1_C_a = false; $scope.kitchen_8_7_1_C_b = false; $scope.kitchen_8_7_1_C_c = false; };
	$scope.check_kitchen_8_7_1_C_cm = function(){ $scope.kitchen_8_7_1_C_cm = ''; };
	$scope.check_kitchen_8_7_1_D = function(){ $scope.kitchen_8_7_1_D = ''; $scope.kitchen_8_7_1_D_a = false; $scope.kitchen_8_7_1_D_b = false; $scope.kitchen_8_7_1_D_c = false; };
	$scope.check_kitchen_8_7_1_D_cm = function(){ $scope.kitchen_8_7_1_D_cm = ''; };
	$scope.check_kitchen_8_7_1_E = function(){ $scope.kitchen_8_7_1_E = ''; $scope.kitchen_8_7_1_E_a = false; $scope.kitchen_8_7_1_E_b = false; $scope.kitchen_8_7_1_E_c = false; };
	$scope.check_kitchen_8_7_1_E_cm = function(){ $scope.kitchen_8_7_1_E_cm = ''; };
	$scope.check_kitchen_8_8_1_A = function(){ $scope.kitchen_8_8_1_A = ''; $scope.kitchen_8_8_1_A_a = false; $scope.kitchen_8_8_1_A_b = false; $scope.kitchen_8_8_1_A_c = false; };
	$scope.check_kitchen_8_8_1_A_cm = function(){ $scope.kitchen_8_8_1_A_cm = ''; };
	$scope.check_kitchen_8_8_1_B = function(){ $scope.kitchen_8_8_1_B = ''; $scope.kitchen_8_8_1_B_a = false; $scope.kitchen_8_8_1_B_b = false; $scope.kitchen_8_8_1_B_c = false; };
	$scope.check_kitchen_8_8_1_B_cm = function(){ $scope.kitchen_8_8_1_B_cm = ''; };
	$scope.check_kitchen_8_9_1_A = function(){ $scope.kitchen_8_9_1_A = ''; $scope.kitchen_8_9_1_A_a = false; $scope.kitchen_8_9_1_A_b = false; };
	$scope.check_kitchen_8_9_1_A_cm = function(){ $scope.kitchen_8_9_1_A_cm = ''; };
	$scope.check_kitchen_8_9_1_B = function(){ $scope.kitchen_8_9_1_B = ''; $scope.kitchen_8_9_1_B_a = false; $scope.kitchen_8_9_1_B_b = false; };
	$scope.check_kitchen_8_9_1_B_cm = function(){ $scope.kitchen_8_9_1_B_cm = ''; };
	$scope.check_kitchen_8_9_1_C_a = function(){ $scope.kitchen_8_9_1_C_a = ''; $scope.kitchen_8_9_1_C_a = false; };
	$scope.check_kitchen_8_9_1_C_a_cm = function(){ $scope.kitchen_8_9_1_C_a_cm = ''; };
	$scope.check_kitchen_8_9_1_C_b = function(){ $scope.kitchen_8_9_1_C_b = ''; $scope.kitchen_8_9_1_C_b = false; };
	$scope.check_kitchen_8_9_1_C_b_cm = function(){ $scope.kitchen_8_9_1_C_b_cm = ''; };
	$scope.check_kitchen_8_9_1_D = function(){ $scope.kitchen_8_9_1_D = ''; $scope.kitchen_8_9_1_D_a = false; $scope.kitchen_8_9_1_D_b = false; $scope.kitchen_8_9_1_D_c = false; $scope.kitchen_8_9_1_D_d = false; };
	$scope.check_kitchen_8_9_1_D_cm = function(){ $scope.kitchen_8_9_1_D_cm = ''; };
	$scope.check_kitchen_8_9_1_E = function(){ $scope.kitchen_8_9_1_E = ''; $scope.kitchen_8_9_1_E_a = false; $scope.kitchen_8_9_1_E_b = false; };
	$scope.check_kitchen_8_9_1_E_cm = function(){ $scope.kitchen_8_9_1_E_cm = ''; };
	$scope.check_kitchen_8_9_1_F = function(){ $scope.kitchen_8_9_1_F = ''; $scope.kitchen_8_9_1_F_a = false; $scope.kitchen_8_9_1_F_b = false; };
	$scope.check_kitchen_8_9_1_F_cm = function(){ $scope.kitchen_8_9_1_F_cm = ''; };
	$scope.check_kitchen_8_9_1_G = function(){ $scope.kitchen_8_9_1_G = ''; $scope.kitchen_8_9_1_G_a = false; $scope.kitchen_8_9_1_G_b = false; $scope.kitchen_8_9_1_G_c = false; };
	$scope.check_kitchen_8_9_1_G_cm = function(){ $scope.kitchen_8_9_1_G_cm = ''; };
	$scope.check_kitchen_8_10_1_A = function(){ $scope.kitchen_8_10_1_A = ''; $scope.kitchen_8_10_1_A_a = false; $scope.kitchen_8_10_1_A_b = false; $scope.kitchen_8_10_1_A_c = false; $scope.kitchen_8_10_1_A_d = false; };
	$scope.check_kitchen_8_10_1_A_cm = function(){ $scope.kitchen_8_10_1_A_cm = ''; };
	$scope.check_kitchen_8_10_1_B = function(){ $scope.kitchen_8_10_1_B = ''; $scope.kitchen_8_10_1_B_a = false; $scope.kitchen_8_10_1_B_b = false; };
	$scope.check_kitchen_8_10_1_B_cm = function(){ $scope.kitchen_8_10_1_B_cm = ''; };
	$scope.check_kitchen_8_10_1_C = function(){ $scope.kitchen_8_10_1_C = ''; $scope.kitchen_8_10_1_C_a = false; $scope.kitchen_8_10_1_C_b = false; $scope.kitchen_8_10_1_C_c = false; $scope.kitchen_8_10_1_C_d = false; };
	$scope.check_kitchen_8_10_1_C_cm = function(){ $scope.kitchen_8_10_1_C_cm = ''; };
	$scope.check_kitchen_8_11_1_A = function(){ $scope.kitchen_8_11_1_A = ''; $scope.kitchen_8_11_1_A_a = false; $scope.kitchen_8_11_1_A_b = false; $scope.kitchen_8_11_1_A_c = false; };
	$scope.check_kitchen_8_11_1_A_cm = function(){ $scope.kitchen_8_11_1_A_cm = ''; };
	$scope.check_kitchen_8_11_1_B = function(){ $scope.kitchen_8_11_1_B = ''; $scope.kitchen_8_11_1_B_a = false; $scope.kitchen_8_11_1_B_b = false; };
	$scope.check_kitchen_8_11_1_B_cm = function(){ $scope.kitchen_8_11_1_B_cm = ''; };
	$scope.check_kitchen_8_11_1_C = function(){ $scope.kitchen_8_11_1_C = ''; $scope.kitchen_8_11_1_C_a = false; $scope.kitchen_8_11_1_C_b = false; };
	$scope.check_kitchen_8_11_1_C_cm = function(){ $scope.kitchen_8_11_1_C_cm = ''; };
	$scope.check_kitchen_8_11_1_D = function(){ $scope.kitchen_8_11_1_D = ''; $scope.kitchen_8_11_1_D_a = false; $scope.kitchen_8_11_1_D_b = false; $scope.kitchen_8_11_1_D_c = false; };
	$scope.check_kitchen_8_11_1_D_cm = function(){ $scope.kitchen_8_11_1_D_cm = ''; };
	$scope.check_kitchen_8_11_1_E = function(){ $scope.kitchen_8_11_1_E = ''; $scope.kitchen_8_11_1_E_a = false; $scope.kitchen_8_11_1_E_b = false; $scope.kitchen_8_11_1_E_c = false; };
	$scope.check_kitchen_8_11_1_E_cm = function(){ $scope.kitchen_8_11_1_E_cm = ''; };
	$scope.check_kitchen_8_12_1_A_a = function(){ $scope.kitchen_8_12_1_A_a = ''; $scope.kitchen_8_12_1_A_a = false; };
	$scope.check_kitchen_8_12_1_A_a_cm = function(){ $scope.kitchen_8_12_1_A_a_cm = ''; };
	$scope.check_kitchen_8_12_1_A_b = function(){ $scope.kitchen_8_12_1_A_b = ''; $scope.kitchen_8_12_1_A_b = false; };
	$scope.check_kitchen_8_12_1_A_b_cm = function(){ $scope.kitchen_8_12_1_A_b_cm = ''; };
	$scope.check_kitchen_8_12_1_A_c = function(){ $scope.kitchen_8_12_1_A_c = ''; $scope.kitchen_8_12_1_A_c = false; };
	$scope.check_kitchen_8_12_1_A_c_cm = function(){ $scope.kitchen_8_12_1_A_c_cm = ''; };
	$scope.check_kitchen_8_12_1_A_d = function(){ $scope.kitchen_8_12_1_A_d = ''; $scope.kitchen_8_12_1_A_d = false; };
	$scope.check_kitchen_8_12_1_A_d_cm = function(){ $scope.kitchen_8_12_1_A_d_cm = ''; };
	$scope.check_kitchen_8_12_1_B = function(){ $scope.kitchen_8_12_1_B = ''; $scope.kitchen_8_12_1_B_a = false; $scope.kitchen_8_12_1_B_b = false; $scope.kitchen_8_12_1_B_c = false; };
	$scope.check_kitchen_8_12_1_B_cm = function(){ $scope.kitchen_8_12_1_B_cm = ''; };
	$scope.check_kitchen_8_12_1_C = function(){ $scope.kitchen_8_12_1_C = ''; $scope.kitchen_8_12_1_C_a = false; $scope.kitchen_8_12_1_C_b = false; };
	$scope.check_kitchen_8_12_1_C_cm = function(){ $scope.kitchen_8_12_1_C_cm = ''; };
	$scope.check_kitchen_8_12_1_D = function(){ $scope.kitchen_8_12_1_D = ''; $scope.kitchen_8_12_1_D_a = false; $scope.kitchen_8_12_1_D_b = false; };
	$scope.check_kitchen_8_12_1_D_cm = function(){ $scope.kitchen_8_12_1_D_cm = ''; };
	$scope.check_kitchen_8_12_1_E = function(){ $scope.kitchen_8_12_1_E = ''; $scope.kitchen_8_12_1_E_a = false; $scope.kitchen_8_12_1_E_b = false; };
	$scope.check_kitchen_8_12_1_E_cm = function(){ $scope.kitchen_8_12_1_E_cm = ''; };
	$scope.check_kitchen_8_12_1_F = function(){ $scope.kitchen_8_12_1_F = ''; $scope.kitchen_8_12_1_F_a = false; $scope.kitchen_8_12_1_F_b = false; $scope.kitchen_8_12_1_F_c = false; };
	$scope.check_kitchen_8_12_1_F_cm = function(){ $scope.kitchen_8_12_1_F_cm = ''; };
	$scope.check_kitchen_8_12_1_G = function(){ $scope.kitchen_8_12_1_G = ''; $scope.kitchen_8_12_1_G_a = false; $scope.kitchen_8_12_1_G_b = false; $scope.kitchen_8_12_1_G_c = false; };
	$scope.check_kitchen_8_12_1_G_cm = function(){ $scope.kitchen_8_12_1_G_cm = ''; };
	$scope.check_kitchen_8_13_1_A_a = function(){ $scope.kitchen_8_13_1_A_a = ''; $scope.kitchen_8_13_1_A_a = false; };
	$scope.check_kitchen_8_13_1_A_a_cm = function(){ $scope.kitchen_8_13_1_A_a_cm = ''; };
	$scope.check_kitchen_8_13_1_A_b = function(){ $scope.kitchen_8_13_1_A_b = ''; $scope.kitchen_8_13_1_A_b = false; };
	$scope.check_kitchen_8_13_1_A_b_cm = function(){ $scope.kitchen_8_13_1_A_b_cm = ''; };
	$scope.check_kitchen_8_13_1_A_c = function(){ $scope.kitchen_8_13_1_A_c = ''; $scope.kitchen_8_13_1_A_c = false; };
	$scope.check_kitchen_8_13_1_A_c_cm = function(){ $scope.kitchen_8_13_1_A_c_cm = ''; };
	$scope.check_kitchen_8_13_1_B = function(){ $scope.kitchen_8_13_1_B = ''; $scope.kitchen_8_13_1_B_a = false; $scope.kitchen_8_13_1_B_b = false; $scope.kitchen_8_13_1_B_c = false; };
	$scope.check_kitchen_8_13_1_B_cm = function(){ $scope.kitchen_8_13_1_B_cm = ''; };
	$scope.check_kitchen_8_13_1_C_a = function(){ $scope.kitchen_8_13_1_C_a = ''; $scope.kitchen_8_13_1_C_a = false; };
	$scope.check_kitchen_8_13_1_C_a_cm = function(){ $scope.kitchen_8_13_1_C_a_cm = ''; };
	$scope.check_kitchen_8_13_1_C_b = function(){ $scope.kitchen_8_13_1_C_b = ''; $scope.kitchen_8_13_1_C_b = false; };
	$scope.check_kitchen_8_13_1_C_b_cm = function(){ $scope.kitchen_8_13_1_C_b_cm = ''; };
	$scope.check_kitchen_8_13_1_C_c = function(){ $scope.kitchen_8_13_1_C_c = ''; $scope.kitchen_8_13_1_C_c = false; };
	$scope.check_kitchen_8_13_1_C_c_cm = function(){ $scope.kitchen_8_13_1_C_c_cm = ''; };
	$scope.check_kitchen_8_13_1_C_d = function(){ $scope.kitchen_8_13_1_C_d = ''; $scope.kitchen_8_13_1_C_d = false; };
	$scope.check_kitchen_8_13_1_C_d_cm = function(){ $scope.kitchen_8_13_1_C_d_cm = ''; };
	$scope.check_kitchen_8_13_1_C_e = function(){ $scope.kitchen_8_13_1_C_e = ''; $scope.kitchen_8_13_1_C_e = false; };
	$scope.check_kitchen_8_13_1_C_e_cm = function(){ $scope.kitchen_8_13_1_C_e_cm = ''; };
	$scope.check_kitchen_8_13_1_D_a = function(){ $scope.kitchen_8_13_1_D_a = ''; $scope.kitchen_8_13_1_D_a = false; };
	$scope.check_kitchen_8_13_1_D_a_cm = function(){ $scope.kitchen_8_13_1_D_a_cm = ''; };
	$scope.check_kitchen_8_13_1_D_b = function(){ $scope.kitchen_8_13_1_D_b = ''; $scope.kitchen_8_13_1_D_b = false; };
	$scope.check_kitchen_8_13_1_D_b_cm = function(){ $scope.kitchen_8_13_1_D_b_cm = ''; };
	$scope.check_kitchen_8_13_1_E = function(){ $scope.kitchen_8_13_1_E = ''; $scope.kitchen_8_13_1_E_a = false; $scope.kitchen_8_13_1_E_b = false; };
	$scope.check_kitchen_8_13_1_E_cm = function(){ $scope.kitchen_8_13_1_E_cm = ''; };
	$scope.check_kitchen_8_13_1_F = function(){ $scope.kitchen_8_13_1_F = ''; $scope.kitchen_8_13_1_F_a = false; $scope.kitchen_8_13_1_F_b = false; $scope.kitchen_8_13_1_F_c = false; };
	$scope.check_kitchen_8_13_1_F_cm = function(){ $scope.kitchen_8_13_1_F_cm = ''; };
	$scope.check_kitchen_8_14_1_A = function(){ $scope.kitchen_8_14_1_A = ''; $scope.kitchen_8_14_1_A_a = false; $scope.kitchen_8_14_1_A_b = false; };
	$scope.check_kitchen_8_14_1_A_cm = function(){ $scope.kitchen_8_14_1_A_cm = ''; };
	$scope.check_kitchen_8_14_1_B = function(){ $scope.kitchen_8_14_1_B = ''; $scope.kitchen_8_14_1_B_a = false; $scope.kitchen_8_14_1_B_b = false; $scope.kitchen_8_14_1_B_c = false; $scope.kitchen_8_14_1_B_d = false; };
	$scope.check_kitchen_8_14_1_B_cm = function(){ $scope.kitchen_8_14_1_B_cm = ''; };
	$scope.check_kitchen_8_14_1_C = function(){ $scope.kitchen_8_14_1_C = ''; $scope.kitchen_8_14_1_C_a = false; $scope.kitchen_8_14_1_C_b = false; $scope.kitchen_8_14_1_C_c = false; $scope.kitchen_8_14_1_C_d = false; };
	$scope.check_kitchen_8_14_1_C_cm = function(){ $scope.kitchen_8_14_1_C_cm = ''; };
	$scope.check_kitchen_8_14_1_D = function(){ $scope.kitchen_8_14_1_D = ''; $scope.kitchen_8_14_1_D_a = false; $scope.kitchen_8_14_1_D_b = false; $scope.kitchen_8_14_1_D_c = false; };
	$scope.check_kitchen_8_14_1_D_cm = function(){ $scope.kitchen_8_14_1_D_cm = ''; };
	$scope.check_kitchen_8_14_1_E = function(){ $scope.kitchen_8_14_1_E = ''; $scope.kitchen_8_14_1_E_a = false; $scope.kitchen_8_14_1_E_b = false; $scope.kitchen_8_14_1_E_c = false; };
	$scope.check_kitchen_8_14_1_E_cm = function(){ $scope.kitchen_8_14_1_E_cm = ''; };
	$scope.check_kitchen_8_14_1_F = function(){ $scope.kitchen_8_14_1_F = ''; $scope.kitchen_8_14_1_F_a = false; $scope.kitchen_8_14_1_F_b = false; };
	$scope.check_kitchen_8_14_1_F_cm = function(){ $scope.kitchen_8_14_1_F_cm = ''; };
	$scope.check_kitchen_8_14_1_G = function(){ $scope.kitchen_8_14_1_G = ''; $scope.kitchen_8_14_1_G_a = false; $scope.kitchen_8_14_1_G_b = false; $scope.kitchen_8_14_1_G_c = false; };
	$scope.check_kitchen_8_14_1_G_cm = function(){ $scope.kitchen_8_14_1_G_cm = ''; };
	$scope.check_kitchen_8_14_1_H = function(){ $scope.kitchen_8_14_1_H = ''; $scope.kitchen_8_14_1_H_a = false; $scope.kitchen_8_14_1_H_b = false; };
	$scope.check_kitchen_8_14_1_H_cm = function(){ $scope.kitchen_8_14_1_H_cm = ''; };
	$scope.check_kitchen_8_14_1_I = function(){ $scope.kitchen_8_14_1_I = ''; $scope.kitchen_8_14_1_I_a = false; $scope.kitchen_8_14_1_I_b = false; $scope.kitchen_8_14_1_I_c = false; };
	$scope.check_kitchen_8_14_1_I_cm = function(){ $scope.kitchen_8_14_1_I_cm = ''; };
	$scope.check_kitchen_8_14_1_J = function(){ $scope.kitchen_8_14_1_J = ''; $scope.kitchen_8_14_1_J_a = false; $scope.kitchen_8_14_1_J_b = false; $scope.kitchen_8_14_1_J_c = false; };
	$scope.check_kitchen_8_14_1_J_cm = function(){ $scope.kitchen_8_14_1_J_cm = ''; };
	$scope.check_kitchen_8_14_1_K = function(){ $scope.kitchen_8_14_1_K = ''; $scope.kitchen_8_14_1_K_a = false; $scope.kitchen_8_14_1_K_b = false; };
	$scope.check_kitchen_8_14_1_K_cm = function(){ $scope.kitchen_8_14_1_K_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_A = function(){ $scope.hygiene_and_sanitation_9_1_1_A = ''; $scope.hygiene_and_sanitation_9_1_1_A_a = false; $scope.hygiene_and_sanitation_9_1_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_B = function(){ $scope.hygiene_and_sanitation_9_1_1_B = ''; $scope.hygiene_and_sanitation_9_1_1_B_a = false; $scope.hygiene_and_sanitation_9_1_1_B_b = false; $scope.hygiene_and_sanitation_9_1_1_B_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_B_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_C = function(){ $scope.hygiene_and_sanitation_9_1_1_C = ''; $scope.hygiene_and_sanitation_9_1_1_C_a = false; $scope.hygiene_and_sanitation_9_1_1_C_b = false; $scope.hygiene_and_sanitation_9_1_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_C_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_a = function(){ $scope.hygiene_and_sanitation_9_1_1_D_a = ''; $scope.hygiene_and_sanitation_9_1_1_D_a = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_a_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_b = function(){ $scope.hygiene_and_sanitation_9_1_1_D_b = ''; $scope.hygiene_and_sanitation_9_1_1_D_b = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_b_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_c = function(){ $scope.hygiene_and_sanitation_9_1_1_D_c = ''; $scope.hygiene_and_sanitation_9_1_1_D_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_c_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_d = function(){ $scope.hygiene_and_sanitation_9_1_1_D_d = ''; $scope.hygiene_and_sanitation_9_1_1_D_d = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_d_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_e = function(){ $scope.hygiene_and_sanitation_9_1_1_D_e = ''; $scope.hygiene_and_sanitation_9_1_1_D_e = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_e_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_f = function(){ $scope.hygiene_and_sanitation_9_1_1_D_f = ''; $scope.hygiene_and_sanitation_9_1_1_D_f = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_D_f_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_D_f_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_E = function(){ $scope.hygiene_and_sanitation_9_1_1_E = ''; $scope.hygiene_and_sanitation_9_1_1_E_a = false; $scope.hygiene_and_sanitation_9_1_1_E_b = false; $scope.hygiene_and_sanitation_9_1_1_E_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_E_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_E_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_F = function(){ $scope.hygiene_and_sanitation_9_1_1_F = ''; $scope.hygiene_and_sanitation_9_1_1_F_a = false; $scope.hygiene_and_sanitation_9_1_1_F_b = false; $scope.hygiene_and_sanitation_9_1_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_F_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_G = function(){ $scope.hygiene_and_sanitation_9_1_1_G = ''; $scope.hygiene_and_sanitation_9_1_1_G_a = false; $scope.hygiene_and_sanitation_9_1_1_G_b = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_G_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_G_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_H = function(){ $scope.hygiene_and_sanitation_9_1_1_H = ''; $scope.hygiene_and_sanitation_9_1_1_H_a = false; $scope.hygiene_and_sanitation_9_1_1_H_b = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_H_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_H_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_a = function(){ $scope.hygiene_and_sanitation_9_1_1_I_a = ''; $scope.hygiene_and_sanitation_9_1_1_I_a = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_a_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_I_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_b = function(){ $scope.hygiene_and_sanitation_9_1_1_I_b = ''; $scope.hygiene_and_sanitation_9_1_1_I_b = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_b_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_I_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_c = function(){ $scope.hygiene_and_sanitation_9_1_1_I_c = ''; $scope.hygiene_and_sanitation_9_1_1_I_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_c_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_I_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_d = function(){ $scope.hygiene_and_sanitation_9_1_1_I_d = ''; $scope.hygiene_and_sanitation_9_1_1_I_d = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_d_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_I_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_e = function(){ $scope.hygiene_and_sanitation_9_1_1_I_e = ''; $scope.hygiene_and_sanitation_9_1_1_I_e = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_I_e_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_I_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_J = function(){ $scope.hygiene_and_sanitation_9_1_1_J = ''; $scope.hygiene_and_sanitation_9_1_1_J_a = false; $scope.hygiene_and_sanitation_9_1_1_J_b = false; $scope.hygiene_and_sanitation_9_1_1_J_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_J_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_J_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_1_1_K = function(){ $scope.hygiene_and_sanitation_9_1_1_K = ''; $scope.hygiene_and_sanitation_9_1_1_K_a = false; $scope.hygiene_and_sanitation_9_1_1_K_b = false; $scope.hygiene_and_sanitation_9_1_1_K_c = false; };
	$scope.check_hygiene_and_sanitation_9_1_1_K_cm = function(){ $scope.hygiene_and_sanitation_9_1_1_K_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_A = function(){ $scope.hygiene_and_sanitation_9_2_1_A = ''; $scope.hygiene_and_sanitation_9_2_1_A_a = false; $scope.hygiene_and_sanitation_9_2_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_B = function(){ $scope.hygiene_and_sanitation_9_2_1_B = ''; $scope.hygiene_and_sanitation_9_2_1_B_a = false; $scope.hygiene_and_sanitation_9_2_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_B_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_C = function(){ $scope.hygiene_and_sanitation_9_2_1_C = ''; $scope.hygiene_and_sanitation_9_2_1_C_a = false; $scope.hygiene_and_sanitation_9_2_1_C_b = false; $scope.hygiene_and_sanitation_9_2_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_C_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_D = function(){ $scope.hygiene_and_sanitation_9_2_1_D = ''; $scope.hygiene_and_sanitation_9_2_1_D_a = false; $scope.hygiene_and_sanitation_9_2_1_D_b = false; $scope.hygiene_and_sanitation_9_2_1_D_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_D_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_D_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_a = function(){ $scope.hygiene_and_sanitation_9_2_1_E_a = ''; $scope.hygiene_and_sanitation_9_2_1_E_a = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_a_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_b = function(){ $scope.hygiene_and_sanitation_9_2_1_E_b = ''; $scope.hygiene_and_sanitation_9_2_1_E_b = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_b_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_c = function(){ $scope.hygiene_and_sanitation_9_2_1_E_c = ''; $scope.hygiene_and_sanitation_9_2_1_E_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_c_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_d = function(){ $scope.hygiene_and_sanitation_9_2_1_E_d = ''; $scope.hygiene_and_sanitation_9_2_1_E_d = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_d_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_e = function(){ $scope.hygiene_and_sanitation_9_2_1_E_e = ''; $scope.hygiene_and_sanitation_9_2_1_E_e = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_e_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_f = function(){ $scope.hygiene_and_sanitation_9_2_1_E_f = ''; $scope.hygiene_and_sanitation_9_2_1_E_f = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_f_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_f_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_g = function(){ $scope.hygiene_and_sanitation_9_2_1_E_g = ''; $scope.hygiene_and_sanitation_9_2_1_E_g = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_g_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_g_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_h = function(){ $scope.hygiene_and_sanitation_9_2_1_E_h = ''; $scope.hygiene_and_sanitation_9_2_1_E_h = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_h_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_h_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_i = function(){ $scope.hygiene_and_sanitation_9_2_1_E_i = ''; $scope.hygiene_and_sanitation_9_2_1_E_i = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_E_i_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_E_i_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_F = function(){ $scope.hygiene_and_sanitation_9_2_1_F = ''; $scope.hygiene_and_sanitation_9_2_1_F_a = false; $scope.hygiene_and_sanitation_9_2_1_F_b = false; $scope.hygiene_and_sanitation_9_2_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_F_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_G = function(){ $scope.hygiene_and_sanitation_9_2_1_G = ''; $scope.hygiene_and_sanitation_9_2_1_G_a = false; $scope.hygiene_and_sanitation_9_2_1_G_b = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_G_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_G_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_a = function(){ $scope.hygiene_and_sanitation_9_2_1_H_a = ''; $scope.hygiene_and_sanitation_9_2_1_H_a = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_a_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_H_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_b = function(){ $scope.hygiene_and_sanitation_9_2_1_H_b = ''; $scope.hygiene_and_sanitation_9_2_1_H_b = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_b_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_H_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_c = function(){ $scope.hygiene_and_sanitation_9_2_1_H_c = ''; $scope.hygiene_and_sanitation_9_2_1_H_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_c_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_H_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_d = function(){ $scope.hygiene_and_sanitation_9_2_1_H_d = ''; $scope.hygiene_and_sanitation_9_2_1_H_d = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_H_d_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_H_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_I = function(){ $scope.hygiene_and_sanitation_9_2_1_I = ''; $scope.hygiene_and_sanitation_9_2_1_I_a = false; $scope.hygiene_and_sanitation_9_2_1_I_b = false; $scope.hygiene_and_sanitation_9_2_1_I_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_I_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_I_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_2_1_J = function(){ $scope.hygiene_and_sanitation_9_2_1_J = ''; $scope.hygiene_and_sanitation_9_2_1_J_a = false; $scope.hygiene_and_sanitation_9_2_1_J_b = false; $scope.hygiene_and_sanitation_9_2_1_J_c = false; };
	$scope.check_hygiene_and_sanitation_9_2_1_J_cm = function(){ $scope.hygiene_and_sanitation_9_2_1_J_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_A = function(){ $scope.hygiene_and_sanitation_9_3_1_A = ''; $scope.hygiene_and_sanitation_9_3_1_A_a = false; $scope.hygiene_and_sanitation_9_3_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_B = function(){ $scope.hygiene_and_sanitation_9_3_1_B = ''; $scope.hygiene_and_sanitation_9_3_1_B_a = false; $scope.hygiene_and_sanitation_9_3_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_B_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_C = function(){ $scope.hygiene_and_sanitation_9_3_1_C = ''; $scope.hygiene_and_sanitation_9_3_1_C_a = false; $scope.hygiene_and_sanitation_9_3_1_C_b = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_C_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_D = function(){ $scope.hygiene_and_sanitation_9_3_1_D = ''; $scope.hygiene_and_sanitation_9_3_1_D_a = false; $scope.hygiene_and_sanitation_9_3_1_D_b = false; $scope.hygiene_and_sanitation_9_3_1_D_c = false; $scope.hygiene_and_sanitation_9_3_1_D_d = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_D_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_D_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_E = function(){ $scope.hygiene_and_sanitation_9_3_1_E = ''; $scope.hygiene_and_sanitation_9_3_1_E_a = false; $scope.hygiene_and_sanitation_9_3_1_E_b = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_E_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_E_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_3_1_F = function(){ $scope.hygiene_and_sanitation_9_3_1_F = ''; $scope.hygiene_and_sanitation_9_3_1_F_a = false; $scope.hygiene_and_sanitation_9_3_1_F_b = false; $scope.hygiene_and_sanitation_9_3_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_9_3_1_F_cm = function(){ $scope.hygiene_and_sanitation_9_3_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_4_1_A = function(){ $scope.hygiene_and_sanitation_9_4_1_A = ''; $scope.hygiene_and_sanitation_9_4_1_A_a = false; $scope.hygiene_and_sanitation_9_4_1_A_b = false; $scope.hygiene_and_sanitation_9_4_1_A_c = false; };
	$scope.check_hygiene_and_sanitation_9_4_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_4_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_12_4_1_B = function(){ $scope.hygiene_and_sanitation_12_4_1_B = ''; $scope.hygiene_and_sanitation_12_4_1_B_a = false; $scope.hygiene_and_sanitation_12_4_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_12_4_1_B_cm = function(){ $scope.hygiene_and_sanitation_12_4_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_4_1_C = function(){ $scope.hygiene_and_sanitation_9_4_1_C = ''; $scope.hygiene_and_sanitation_9_4_1_C_a = false; $scope.hygiene_and_sanitation_9_4_1_C_b = false; $scope.hygiene_and_sanitation_9_4_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_9_4_1_C_cm = function(){ $scope.hygiene_and_sanitation_9_4_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_5_1_A = function(){ $scope.hygiene_and_sanitation_9_5_1_A = ''; $scope.hygiene_and_sanitation_9_5_1_A_a = false; $scope.hygiene_and_sanitation_9_5_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_9_5_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_5_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_5_1_B = function(){ $scope.hygiene_and_sanitation_9_5_1_B = ''; $scope.hygiene_and_sanitation_9_5_1_B_a = false; $scope.hygiene_and_sanitation_9_5_1_B_b = false; $scope.hygiene_and_sanitation_9_5_1_B_c = false; };
	$scope.check_hygiene_and_sanitation_9_5_1_B_cm = function(){ $scope.hygiene_and_sanitation_9_5_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_6_1_A = function(){ $scope.hygiene_and_sanitation_9_6_1_A = ''; $scope.hygiene_and_sanitation_9_6_1_A_a = false; $scope.hygiene_and_sanitation_9_6_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_9_6_1_A_cm = function(){ $scope.hygiene_and_sanitation_9_6_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_6_1_B = function(){ $scope.hygiene_and_sanitation_9_6_1_B = ''; $scope.hygiene_and_sanitation_9_6_1_B_a = false; $scope.hygiene_and_sanitation_9_6_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_9_6_1_B_cm = function(){ $scope.hygiene_and_sanitation_9_6_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_9_6_1_C = function(){ $scope.hygiene_and_sanitation_9_6_1_C = ''; $scope.hygiene_and_sanitation_9_6_1_C_a = false; $scope.hygiene_and_sanitation_9_6_1_C_b = false; };
	$scope.check_hygiene_and_sanitation_9_6_1_C_cm = function(){ $scope.hygiene_and_sanitation_9_6_1_C_cm = ''; };
	$scope.check_safety_and_security_10_1_1_A = function(){ $scope.safety_and_security_10_1_1_A = ''; $scope.safety_and_security_10_1_1_A_a = false; $scope.safety_and_security_10_1_1_A_b = false; };
	$scope.check_safety_and_security_10_1_1_A_cm = function(){ $scope.safety_and_security_10_1_1_A_cm = ''; };
	$scope.check_safety_and_security_10_1_1_B = function(){ $scope.safety_and_security_10_1_1_B = ''; $scope.safety_and_security_10_1_1_B_a = false; $scope.safety_and_security_10_1_1_B_b = false; };
	$scope.check_safety_and_security_10_1_1_B_cm = function(){ $scope.safety_and_security_10_1_1_B_cm = ''; };
	$scope.check_safety_and_security_10_1_1_C = function(){ $scope.safety_and_security_10_1_1_C = ''; $scope.safety_and_security_10_1_1_C_a = false; $scope.safety_and_security_10_1_1_C_b = false; };
	$scope.check_safety_and_security_10_1_1_C_cm = function(){ $scope.safety_and_security_10_1_1_C_cm = ''; };
	$scope.check_safety_and_security_10_1_1_D = function(){ $scope.safety_and_security_10_1_1_D = ''; $scope.safety_and_security_10_1_1_D_a = false; $scope.safety_and_security_10_1_1_D_b = false; };
	$scope.check_safety_and_security_10_1_1_D_cm = function(){ $scope.safety_and_security_10_1_1_D_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_a = function(){ $scope.safety_and_security_10_1_1_E_a = ''; $scope.safety_and_security_10_1_1_E_a = false; };
	$scope.check_safety_and_security_10_1_1_E_a_cm = function(){ $scope.safety_and_security_10_1_1_E_a_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_b = function(){ $scope.safety_and_security_10_1_1_E_b = ''; $scope.safety_and_security_10_1_1_E_b = false; };
	$scope.check_safety_and_security_10_1_1_E_b_cm = function(){ $scope.safety_and_security_10_1_1_E_b_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_c = function(){ $scope.safety_and_security_10_1_1_E_c = ''; $scope.safety_and_security_10_1_1_E_c = false; };
	$scope.check_safety_and_security_10_1_1_E_c_cm = function(){ $scope.safety_and_security_10_1_1_E_c_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_d = function(){ $scope.safety_and_security_10_1_1_E_d = ''; $scope.safety_and_security_10_1_1_E_d = false; };
	$scope.check_safety_and_security_10_1_1_E_d_cm = function(){ $scope.safety_and_security_10_1_1_E_d_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_e = function(){ $scope.safety_and_security_10_1_1_E_e = ''; $scope.safety_and_security_10_1_1_E_e = false; };
	$scope.check_safety_and_security_10_1_1_E_e_cm = function(){ $scope.safety_and_security_10_1_1_E_e_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_f = function(){ $scope.safety_and_security_10_1_1_E_f = ''; $scope.safety_and_security_10_1_1_E_f = false; };
	$scope.check_safety_and_security_10_1_1_E_f_cm = function(){ $scope.safety_and_security_10_1_1_E_f_cm = ''; };
	$scope.check_safety_and_security_10_1_1_E_g = function(){ $scope.safety_and_security_10_1_1_E_g = ''; $scope.safety_and_security_10_1_1_E_g = false; };
	$scope.check_safety_and_security_10_1_1_E_g_cm = function(){ $scope.safety_and_security_10_1_1_E_g_cm = ''; };
	$scope.check_safety_and_security_10_1_1_F = function(){ $scope.safety_and_security_10_1_1_F = ''; $scope.safety_and_security_10_1_1_F_a = false; $scope.safety_and_security_10_1_1_F_b = false; };
	$scope.check_safety_and_security_10_1_1_F_cm = function(){ $scope.safety_and_security_10_1_1_F_cm = ''; };
	$scope.check_safety_and_security_10_1_1_G = function(){ $scope.safety_and_security_10_1_1_G = ''; $scope.safety_and_security_10_1_1_G_a = false; $scope.safety_and_security_10_1_1_G_b = false; $scope.safety_and_security_10_1_1_G_c = false; };
	$scope.check_safety_and_security_10_1_1_G_cm = function(){ $scope.safety_and_security_10_1_1_G_cm = ''; };
	$scope.check_safety_and_security_10_1_1_H = function(){ $scope.safety_and_security_10_1_1_H = ''; $scope.safety_and_security_10_1_1_H_a = false; $scope.safety_and_security_10_1_1_H_b = false; };
	$scope.check_safety_and_security_10_1_1_H_cm = function(){ $scope.safety_and_security_10_1_1_H_cm = ''; };
	$scope.check_safety_and_security_10_1_1_I = function(){ $scope.safety_and_security_10_1_1_I = ''; $scope.safety_and_security_10_1_1_I_a = false; $scope.safety_and_security_10_1_1_I_b = false; };
	$scope.check_safety_and_security_10_1_1_I_cm = function(){ $scope.safety_and_security_10_1_1_I_cm = ''; };
	$scope.check_safety_and_security_10_2_1_A = function(){ $scope.safety_and_security_10_2_1_A = ''; $scope.safety_and_security_10_2_1_A_a = false; $scope.safety_and_security_10_2_1_A_b = false; };
	$scope.check_safety_and_security_10_2_1_A_cm = function(){ $scope.safety_and_security_10_2_1_A_cm = ''; };
	$scope.check_safety_and_security_10_2_1_B = function(){ $scope.safety_and_security_10_2_1_B = ''; $scope.safety_and_security_10_2_1_B_a = false; $scope.safety_and_security_10_2_1_B_b = false; $scope.safety_and_security_10_2_1_B_c = false; };
	$scope.check_safety_and_security_10_2_1_B_cm = function(){ $scope.safety_and_security_10_2_1_B_cm = ''; };
	$scope.check_safety_and_security_10_3_1_A = function(){ $scope.safety_and_security_10_3_1_A = ''; $scope.safety_and_security_10_3_1_A_a = false; $scope.safety_and_security_10_3_1_A_b = false; };
	$scope.check_safety_and_security_10_3_1_A_cm = function(){ $scope.safety_and_security_10_3_1_A_cm = ''; };
	$scope.check_safety_and_security_10_3_1_B = function(){ $scope.safety_and_security_10_3_1_B = ''; $scope.safety_and_security_10_3_1_B_a = false; $scope.safety_and_security_10_3_1_B_b = false; $scope.safety_and_security_10_3_1_B_c = false; };
	$scope.check_safety_and_security_10_3_1_B_cm = function(){ $scope.safety_and_security_10_3_1_B_cm = ''; };
	$scope.check_safety_and_security_10_3_1_C = function(){ $scope.safety_and_security_10_3_1_C = ''; $scope.safety_and_security_10_3_1_C_a = false; $scope.safety_and_security_10_3_1_C_b = false; };
	$scope.check_safety_and_security_10_3_1_C_cm = function(){ $scope.safety_and_security_10_3_1_C_cm = ''; };
	$scope.check_safety_and_security_10_3_1_D = function(){ $scope.safety_and_security_10_3_1_D = ''; $scope.safety_and_security_10_3_1_D_a = false; $scope.safety_and_security_10_3_1_D_b = false; $scope.safety_and_security_10_3_1_D_c = false; };
	$scope.check_safety_and_security_10_3_1_D_cm = function(){ $scope.safety_and_security_10_3_1_D_cm = ''; };
	$scope.check_safety_and_security_10_3_1_E = function(){ $scope.safety_and_security_10_3_1_E = ''; $scope.safety_and_security_10_3_1_E_a = false; $scope.safety_and_security_10_3_1_E_b = false; };
	$scope.check_safety_and_security_10_3_1_E_cm = function(){ $scope.safety_and_security_10_3_1_E_cm = ''; };
	$scope.check_safety_and_security_10_3_1_F = function(){ $scope.safety_and_security_10_3_1_F = ''; $scope.safety_and_security_10_3_1_F_a = false; $scope.safety_and_security_10_3_1_F_b = false; $scope.safety_and_security_10_3_1_F_c = false; };
	$scope.check_safety_and_security_10_3_1_F_cm = function(){ $scope.safety_and_security_10_3_1_F_cm = ''; };
	$scope.check_safety_and_security_10_3_1_G = function(){ $scope.safety_and_security_10_3_1_G = ''; $scope.safety_and_security_10_3_1_G_a = false; $scope.safety_and_security_10_3_1_G_b = false; };
	$scope.check_safety_and_security_10_3_1_G_cm = function(){ $scope.safety_and_security_10_3_1_G_cm = ''; };
	$scope.check_safety_and_security_10_3_1_H = function(){ $scope.safety_and_security_10_3_1_H = ''; $scope.safety_and_security_10_3_1_H_a = false; $scope.safety_and_security_10_3_1_H_b = false; };
	$scope.check_safety_and_security_10_3_1_H_cm = function(){ $scope.safety_and_security_10_3_1_H_cm = ''; };
	$scope.check_safety_and_security_10_4_1_A = function(){ $scope.safety_and_security_10_4_1_A = ''; $scope.safety_and_security_10_4_1_A_a = false; $scope.safety_and_security_10_4_1_A_b = false; };
	$scope.check_safety_and_security_10_4_1_A_cm = function(){ $scope.safety_and_security_10_4_1_A_cm = ''; };
	$scope.check_safety_and_security_10_4_1_B = function(){ $scope.safety_and_security_10_4_1_B = ''; $scope.safety_and_security_10_4_1_B_a = false; $scope.safety_and_security_10_4_1_B_b = false; $scope.safety_and_security_10_4_1_B_c = false; };
	$scope.check_safety_and_security_10_4_1_B_cm = function(){ $scope.safety_and_security_10_4_1_B_cm = ''; };
	$scope.check_safety_and_security_10_4_1_C = function(){ $scope.safety_and_security_10_4_1_C = ''; $scope.safety_and_security_10_4_1_C_a = false; $scope.safety_and_security_10_4_1_C_b = false; $scope.safety_and_security_10_4_1_C_c = false; };
	$scope.check_safety_and_security_10_4_1_C_cm = function(){ $scope.safety_and_security_10_4_1_C_cm = ''; };
	$scope.check_safety_and_security_10_5_1_A = function(){ $scope.safety_and_security_10_5_1_A = ''; $scope.safety_and_security_10_5_1_A_a = false; $scope.safety_and_security_10_5_1_A_b = false; $scope.safety_and_security_10_5_1_A_c = false; };
	$scope.check_safety_and_security_10_5_1_A_cm = function(){ $scope.safety_and_security_10_5_1_A_cm = ''; };
	$scope.check_safety_and_security_10_5_1_B = function(){ $scope.safety_and_security_10_5_1_B = ''; $scope.safety_and_security_10_5_1_B_a = false; $scope.safety_and_security_10_5_1_B_b = false; };
	$scope.check_safety_and_security_10_5_1_B_cm = function(){ $scope.safety_and_security_10_5_1_B_cm = ''; };
	$scope.check_safety_and_security_10_5_1_C = function(){ $scope.safety_and_security_10_5_1_C = ''; $scope.safety_and_security_10_5_1_C_a = false; $scope.safety_and_security_10_5_1_C_b = false; };
	$scope.check_safety_and_security_10_5_1_C_cm = function(){ $scope.safety_and_security_10_5_1_C_cm = ''; };
	$scope.check_safety_and_security_10_5_1_D = function(){ $scope.safety_and_security_10_5_1_D = ''; $scope.safety_and_security_10_5_1_D_a = false; $scope.safety_and_security_10_5_1_D_b = false; };
	$scope.check_safety_and_security_10_5_1_D_cm = function(){ $scope.safety_and_security_10_5_1_D_cm = ''; };
	$scope.check_safety_and_security_10_5_1_E = function(){ $scope.safety_and_security_10_5_1_E = ''; $scope.safety_and_security_10_5_1_E_a = false; $scope.safety_and_security_10_5_1_E_b = false; };
	$scope.check_safety_and_security_10_5_1_E_cm = function(){ $scope.safety_and_security_10_5_1_E_cm = ''; };
	$scope.check_safety_and_security_10_6_1_A = function(){ $scope.safety_and_security_10_6_1_A = ''; $scope.safety_and_security_10_6_1_A_a = false; $scope.safety_and_security_10_6_1_A_b = false; };
	$scope.check_safety_and_security_10_6_1_A_cm = function(){ $scope.safety_and_security_10_6_1_A_cm = ''; };
	$scope.check_sundry_services_11_1_1_A = function(){ $scope.sundry_services_11_1_1_A = ''; $scope.sundry_services_11_1_1_A_a = false; $scope.sundry_services_11_1_1_A_b = false; $scope.sundry_services_11_1_1_A_c = false; };
	$scope.check_sundry_services_11_1_1_A_cm = function(){ $scope.sundry_services_11_1_1_A_cm = ''; };
	$scope.check_sundry_services_11_1_1_B = function(){ $scope.sundry_services_11_1_1_B = ''; $scope.sundry_services_11_1_1_B_a = false; $scope.sundry_services_11_1_1_B_b = false; };
	$scope.check_sundry_services_11_1_1_B_cm = function(){ $scope.sundry_services_11_1_1_B_cm = ''; };
	$scope.check_sundry_services_11_2_1_A = function(){ $scope.sundry_services_11_2_1_A = ''; $scope.sundry_services_11_2_1_A_a = false; $scope.sundry_services_11_2_1_A_b = false; $scope.sundry_services_11_2_1_A_c = false; };
	$scope.check_sundry_services_11_2_1_A_cm = function(){ $scope.sundry_services_11_2_1_A_cm = ''; };
	$scope.check_sundry_services_11_2_1_B = function(){ $scope.sundry_services_11_2_1_B = ''; $scope.sundry_services_11_2_1_B_a = false; $scope.sundry_services_11_2_1_B_b = false; $scope.sundry_services_11_2_1_B_c = false; };
	$scope.check_sundry_services_11_2_1_B_cm = function(){ $scope.sundry_services_11_2_1_B_cm = ''; };
	$scope.check_sundry_services_11_2_1_C = function(){ $scope.sundry_services_11_2_1_C = ''; $scope.sundry_services_11_2_1_C_a = false; $scope.sundry_services_11_2_1_C_b = false; $scope.sundry_services_11_2_1_C_c = false; };
	$scope.check_sundry_services_11_2_1_C_cm = function(){ $scope.sundry_services_11_2_1_C_cm = ''; };
	$scope.check_sundry_services_11_3_1_A = function(){ $scope.sundry_services_11_3_1_A = ''; $scope.sundry_services_11_3_1_A_a = false; $scope.sundry_services_11_3_1_A_b = false; };
	$scope.check_sundry_services_11_3_1_A_cm = function(){ $scope.sundry_services_11_3_1_A_cm = ''; };
	$scope.check_sundry_services_11_4_1_A = function(){ $scope.sundry_services_11_4_1_A = ''; $scope.sundry_services_11_4_1_A_a = false; $scope.sundry_services_11_4_1_A_b = false; };
	$scope.check_sundry_services_11_4_1_A_cm = function(){ $scope.sundry_services_11_4_1_A_cm = ''; };
	$scope.check_sundry_services_11_5_1_A = function(){ $scope.sundry_services_11_5_1_A = ''; $scope.sundry_services_11_5_1_A_a = false; $scope.sundry_services_11_5_1_A_b = false; $scope.sundry_services_11_5_1_A_c = false; };
	$scope.check_sundry_services_11_5_1_A_cm = function(){ $scope.sundry_services_11_5_1_A_cm = ''; };
	$scope.check_sundry_services_11_5_1_B = function(){ $scope.sundry_services_11_5_1_B = ''; $scope.sundry_services_11_5_1_B_a = false; $scope.sundry_services_11_5_1_B_b = false; $scope.sundry_services_11_5_1_B_c = false; };
	$scope.check_sundry_services_11_5_1_B_cm = function(){ $scope.sundry_services_11_5_1_B_cm = ''; };
	$scope.check_sundry_services_11_6_1_A = function(){ $scope.sundry_services_11_6_1_A = ''; $scope.sundry_services_11_6_1_A_a = false; $scope.sundry_services_11_6_1_A_b = false; $scope.sundry_services_11_6_1_A_c = false; };
	$scope.check_sundry_services_11_6_1_A_cm = function(){ $scope.sundry_services_11_6_1_A_cm = ''; };
	$scope.check_human_resources_12_1_1_A = function(){ $scope.human_resources_12_1_1_A = ''; $scope.human_resources_12_1_1_A_a = false; $scope.human_resources_12_1_1_A_b = false; };
	$scope.check_human_resources_12_1_1_A_cm = function(){ $scope.human_resources_12_1_1_A_cm = ''; };
	$scope.check_human_resources_12_1_1_B = function(){ $scope.human_resources_12_1_1_B = ''; $scope.human_resources_12_1_1_B_a = false; $scope.human_resources_12_1_1_B_b = false; };
	$scope.check_human_resources_12_1_1_B_cm = function(){ $scope.human_resources_12_1_1_B_cm = ''; };
	$scope.check_human_resources_12_1_1_C = function(){ $scope.human_resources_12_1_1_C = ''; $scope.human_resources_12_1_1_C_a = false; $scope.human_resources_12_1_1_C_b = false; $scope.human_resources_12_1_1_C_c = false; };
	$scope.check_human_resources_12_1_1_C_cm = function(){ $scope.human_resources_12_1_1_C_cm = ''; };
	$scope.check_human_resources_12_1_1_D = function(){ $scope.human_resources_12_1_1_D = ''; $scope.human_resources_12_1_1_D_a = false; $scope.human_resources_12_1_1_D_b = false; $scope.human_resources_12_1_1_D_c = false; };
	$scope.check_human_resources_12_1_1_D_cm = function(){ $scope.human_resources_12_1_1_D_cm = ''; };
	$scope.check_human_resources_12_1_1_E_a = function(){ $scope.human_resources_12_1_1_E_a = ''; $scope.human_resources_12_1_1_E_a = false; };
	$scope.check_human_resources_12_1_1_E_a_cm = function(){ $scope.human_resources_12_1_1_E_a_cm = ''; };
	$scope.check_human_resources_12_1_1_E_b = function(){ $scope.human_resources_12_1_1_E_b = ''; $scope.human_resources_12_1_1_E_b = false; };
	$scope.check_human_resources_12_1_1_E_b_cm = function(){ $scope.human_resources_12_1_1_E_b_cm = ''; };
	$scope.check_human_resources_12_1_1_E_c = function(){ $scope.human_resources_12_1_1_E_c = ''; $scope.human_resources_12_1_1_E_c = false; };
	$scope.check_human_resources_12_1_1_E_c_cm = function(){ $scope.human_resources_12_1_1_E_c_cm = ''; };
	$scope.check_human_resources_12_1_1_E_d = function(){ $scope.human_resources_12_1_1_E_d = ''; $scope.human_resources_12_1_1_E_d = false; };
	$scope.check_human_resources_12_1_1_E_d_cm = function(){ $scope.human_resources_12_1_1_E_d_cm = ''; };
	$scope.check_human_resources_12_1_1_E_e = function(){ $scope.human_resources_12_1_1_E_e = ''; $scope.human_resources_12_1_1_E_e = false; };
	$scope.check_human_resources_12_1_1_E_e_cm = function(){ $scope.human_resources_12_1_1_E_e_cm = ''; };
	$scope.check_human_resources_12_2_1_A_a = function(){ $scope.human_resources_12_2_1_A_a = ''; $scope.human_resources_12_2_1_A_a = false; };
	$scope.check_human_resources_12_2_1_A_a_cm = function(){ $scope.human_resources_12_2_1_A_a_cm = ''; };
	$scope.check_human_resources_12_2_1_A_b = function(){ $scope.human_resources_12_2_1_A_b = ''; $scope.human_resources_12_2_1_A_b = false; };
	$scope.check_human_resources_12_2_1_A_b_cm = function(){ $scope.human_resources_12_2_1_A_b_cm = ''; };
	$scope.check_human_resources_12_2_1_A_c = function(){ $scope.human_resources_12_2_1_A_c = ''; $scope.human_resources_12_2_1_A_c = false; };
	$scope.check_human_resources_12_2_1_A_c_cm = function(){ $scope.human_resources_12_2_1_A_c_cm = ''; };
	$scope.check_human_resources_12_2_1_B_a = function(){ $scope.human_resources_12_2_1_B_a = ''; $scope.human_resources_12_2_1_B_a = false; };
	$scope.check_human_resources_12_2_1_B_a_cm = function(){ $scope.human_resources_12_2_1_B_a_cm = ''; };
	$scope.check_human_resources_12_2_1_B_b = function(){ $scope.human_resources_12_2_1_B_b = ''; $scope.human_resources_12_2_1_B_b = false; };
	$scope.check_human_resources_12_2_1_B_b_cm = function(){ $scope.human_resources_12_2_1_B_b_cm = ''; };
	$scope.check_human_resources_12_2_1_B_c = function(){ $scope.human_resources_12_2_1_B_c = ''; $scope.human_resources_12_2_1_B_c = false; };
	$scope.check_human_resources_12_2_1_B_c_cm = function(){ $scope.human_resources_12_2_1_B_c_cm = ''; };
	$scope.check_human_resources_12_3_1_A = function(){ $scope.human_resources_12_3_1_A = ''; $scope.human_resources_12_3_1_A_a = false; $scope.human_resources_12_3_1_A_b = false; };
	$scope.check_human_resources_12_3_1_A_cm = function(){ $scope.human_resources_12_3_1_A_cm = ''; };
	$scope.check_human_resources_12_4_1_A = function(){ $scope.human_resources_12_4_1_A = ''; $scope.human_resources_12_4_1_A_a = false; $scope.human_resources_12_4_1_A_b = false; };
	$scope.check_human_resources_12_4_1_A_cm = function(){ $scope.human_resources_12_4_1_A_cm = ''; };
	$scope.check_human_resources_12_4_1_B = function(){ $scope.human_resources_12_4_1_B = ''; $scope.human_resources_12_4_1_B_a = false; $scope.human_resources_12_4_1_B_b = false; $scope.human_resources_12_4_1_B_c = false; };
	$scope.check_human_resources_12_4_1_B_cm = function(){ $scope.human_resources_12_4_1_B_cm = ''; };
	$scope.check_human_resources_12_4_1_C = function(){ $scope.human_resources_12_4_1_C = ''; $scope.human_resources_12_4_1_C_a = false; $scope.human_resources_12_4_1_C_b = false; $scope.human_resources_12_4_1_C_c = false; };
	$scope.check_human_resources_12_4_1_C_cm = function(){ $scope.human_resources_12_4_1_C_cm = ''; };
	$scope.check_human_resources_12_4_1_D = function(){ $scope.human_resources_12_4_1_D = ''; $scope.human_resources_12_4_1_D_a = false; $scope.human_resources_12_4_1_D_b = false; $scope.human_resources_12_4_1_D_c = false; };
	$scope.check_human_resources_12_4_1_D_cm = function(){ $scope.human_resources_12_4_1_D_cm = ''; };
	$scope.check_general_13_1_1_A_a = function(){ $scope.general_13_1_1_A_a = ''; $scope.general_13_1_1_A_a = false; };
	$scope.check_general_13_1_1_A_a_cm = function(){ $scope.general_13_1_1_A_a_cm = ''; };
	$scope.check_general_13_1_1_A_b = function(){ $scope.general_13_1_1_A_b = ''; $scope.general_13_1_1_A_b = false; };
	$scope.check_general_13_1_1_A_b_cm = function(){ $scope.general_13_1_1_A_b_cm = ''; };
	$scope.check_general_13_1_1_A_c = function(){ $scope.general_13_1_1_A_c = ''; $scope.general_13_1_1_A_c = false; };
	$scope.check_general_13_1_1_A_c_cm = function(){ $scope.general_13_1_1_A_c_cm = ''; };


	
	

	
	<!---------- End Interchanging Selected Marks Custom Marks ------------>
	
	$scope.open_assessment_sheet_for_restaurant = function(){
		var modal_popup = angular.element('#assessment_sheet_for_restaurant_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessment_sheet_for_restaurant = function(){
		var modal_popup = angular.element('#assessment_sheet_for_restaurant_panel');
		modal_popup.modal('hide');
	};
	$scope.check_for_assessment_form_changes_restaurant = function(){
		if($scope.show_asteric_restaurant == '*'){ $scope.assessment_restaurant_form_changes = true; $scope.open_save_changes(); }else{ $scope.close_assessment_sheet_for_restaurant(); };
	};
	$scope.save_and_exit_restaurant= function(){
	$scope.from_save_restaurant = 'save_and_exit';
	$scope.submit_assessment_restaurant_form();
	};
	$scope.close_without_save_restaurant= function(){
	$scope.close_assessment_sheet_for_restaurant();
	$scope.close_save_changes();
	};
	
	$scope.submit_assessment_restaurant_form = function(){
		if($scope.from_save_restaurant == 'save_and_exit') { $scope.close_save_changes(); }else{ $scope.from_save_restaurant = ''; };		
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.submitted_unsuccessfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.show_funika_kurasa_with_status();
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert_assessment_restaurant.php",
			data:{					
				'facility_id':$scope.facility_id,
				'assessor_category':$scope.assessor_category,
				'assessment_id':$scope.assessment_id,
				'assessment_score_restaurant':$scope.assessment_score_restaurant,
				//LOCATION 1.0
				//1.1
				//1.1.1
				'location_1_1_1_text':$scope.location_1_1_1_text,
				'location_1_1_1_A':$scope.location_1_1_1_A, 
				'location_1_1_1_A_cm':$scope.location_1_1_1_A_cm,
				'location_1_1_2_text':$scope.location_1_1_2_text,
				'location_1_1_2_A':$scope.location_1_1_2_A, 
				'location_1_1_2_A_cm':$scope.location_1_1_2_A_cm,
				'location_1_1_3_text':$scope.location_1_1_3_text,
				'location_1_1_3_A':$scope.location_1_1_3_A, 
				'location_1_1_3_A_cm':$scope.location_1_1_3_A_cm,
				'location_1_1_3_B':$scope.location_1_1_3_B, 
				'location_1_1_3_B_cm':$scope.location_1_1_3_B_cm,
				'location_1_1_3_C':$scope.location_1_1_3_C, 
				'location_1_1_3_C_cm':$scope.location_1_1_3_C_cm,
				'location_1_1_4_text':$scope.location_1_1_4_text,
				'location_1_1_4_A':$scope.location_1_1_4_A, 
				'location_1_1_4_A_cm':$scope.location_1_1_4_A_cm,
				'location_1_1_5_text':$scope.location_1_1_5_text,
				'location_1_1_5_A':$scope.location_1_1_5_A, 
				'location_1_1_5_A_cm':$scope.location_1_1_5_A_cm,
				'location_1_1_6_text':$scope.location_1_1_6_text,
				'location_1_1_6_A':$scope.location_1_1_6_A, 
				'location_1_1_6_A_cm':$scope.location_1_1_6_A_cm,
				'building_2_1_1_text':$scope.building_2_1_1_text,
				'building_2_1_1_A':$scope.building_2_1_1_A, 
				'building_2_1_1_A_cm':$scope.building_2_1_1_A_cm,
				'building_2_1_2_text':$scope.building_2_1_2_text,
				'building_2_1_2_A':$scope.building_2_1_2_A, 
				'building_2_1_2_A_cm':$scope.building_2_1_2_A_cm,
				'building_2_2_1_text':$scope.building_2_2_1_text,
				'building_2_2_1_A':$scope.building_2_2_1_A, 
				'building_2_2_1_A_cm':$scope.building_2_2_1_A_cm,
				'building_2_2_1_B':$scope.building_2_2_1_B, 
				'building_2_2_1_B_cm':$scope.building_2_2_1_B_cm,
				'building_2_2_2_text':$scope.building_2_2_2_text,
				'building_2_2_2_A':$scope.building_2_2_2_A, 
				'building_2_2_2_A_cm':$scope.building_2_2_2_A_cm,
				'building_2_2_2_B':$scope.building_2_2_2_B, 
				'building_2_2_2_B_cm':$scope.building_2_2_2_B_cm,
				'building_2_2_2_C':$scope.building_2_2_2_C, 
				'building_2_2_2_C_cm':$scope.building_2_2_2_C_cm,
				'building_2_2_2_D':$scope.building_2_2_2_D, 
				'building_2_2_2_D_cm':$scope.building_2_2_2_D_cm,
				'building_2_2_2_E':$scope.building_2_2_2_E, 
				'building_2_2_2_E_cm':$scope.building_2_2_2_E_cm,
				'building_2_2_2_F':$scope.building_2_2_2_F, 
				'building_2_2_2_F_cm':$scope.building_2_2_2_F_cm,
				'building_2_3_1_text':$scope.building_2_3_1_text,
				'building_2_3_1_A':$scope.building_2_3_1_A, 
				'building_2_3_1_A_cm':$scope.building_2_3_1_A_cm,
				'reception_3_1_1_text':$scope.reception_3_1_1_text,
				'reception_3_1_1_A':$scope.reception_3_1_1_A, 
				'reception_3_1_1_A_cm':$scope.reception_3_1_1_A_cm,
				'reception_3_1_1_B':$scope.reception_3_1_1_B, 
				'reception_3_1_1_B_cm':$scope.reception_3_1_1_B_cm,
				'reception_3_1_1_C':$scope.reception_3_1_1_C, 
				'reception_3_1_1_C_cm':$scope.reception_3_1_1_C_cm,
				'reception_3_1_1_D':$scope.reception_3_1_1_D, 
				'reception_3_1_1_D_cm':$scope.reception_3_1_1_D_cm,
				'reception_3_1_1_E':$scope.reception_3_1_1_E, 
				'reception_3_1_1_E_cm':$scope.reception_3_1_1_E_cm,
				'dining_area_4_1_1_text':$scope.dining_area_4_1_1_text,
				'dining_area_4_1_1_A':$scope.dining_area_4_1_1_A, 
				'dining_area_4_1_1_A_cm':$scope.dining_area_4_1_1_A_cm,
				'dining_area_4_1_1_B':$scope.dining_area_4_1_1_B, 
				'dining_area_4_1_1_B_cm':$scope.dining_area_4_1_1_B_cm,
				'dining_area_4_1_1_C':$scope.dining_area_4_1_1_C, 
				'dining_area_4_1_1_C_cm':$scope.dining_area_4_1_1_C_cm,
				'dining_area_4_1_1_D':$scope.dining_area_4_1_1_D, 
				'dining_area_4_1_1_D_cm':$scope.dining_area_4_1_1_D_cm,
				'dining_area_4_1_1_E':$scope.dining_area_4_1_1_E, 
				'dining_area_4_1_1_E_cm':$scope.dining_area_4_1_1_E_cm,
				'dining_area_4_1_1_F':$scope.dining_area_4_1_1_F, 
				'dining_area_4_1_1_F_cm':$scope.dining_area_4_1_1_F_cm,
				'dining_area_4_1_1_G':$scope.dining_area_4_1_1_G, 
				'dining_area_4_1_1_G_cm':$scope.dining_area_4_1_1_G_cm,
				'dining_area_4_1_1_H':$scope.dining_area_4_1_1_H, 
				'dining_area_4_1_1_H_cm':$scope.dining_area_4_1_1_H_cm,
				'dining_area_4_1_1_I':$scope.dining_area_4_1_1_I, 
				'dining_area_4_1_1_I_cm':$scope.dining_area_4_1_1_I_cm,
				'dining_area_4_1_1_J':$scope.dining_area_4_1_1_J, 
				'dining_area_4_1_1_J_cm':$scope.dining_area_4_1_1_J_cm,
				'dining_area_4_1_1_K':$scope.dining_area_4_1_1_K, 
				'dining_area_4_1_1_K_cm':$scope.dining_area_4_1_1_K_cm,
				'dining_area_4_1_1_L':$scope.dining_area_4_1_1_L, 
				'dining_area_4_1_1_L_cm':$scope.dining_area_4_1_1_L_cm,
				'dining_area_4_2_1_text':$scope.dining_area_4_2_1_text,
				'dining_area_4_2_1_A':$scope.dining_area_4_2_1_A, 
				'dining_area_4_2_1_A_cm':$scope.dining_area_4_2_1_A_cm,
				'dining_area_4_2_1_B':$scope.dining_area_4_2_1_B, 
				'dining_area_4_2_1_B_cm':$scope.dining_area_4_2_1_B_cm,
				'dining_area_4_2_1_C':$scope.dining_area_4_2_1_C, 
				'dining_area_4_2_1_C_cm':$scope.dining_area_4_2_1_C_cm,
				'dining_area_4_2_1_D':$scope.dining_area_4_2_1_D, 
				'dining_area_4_2_1_D_cm':$scope.dining_area_4_2_1_D_cm,
				'dining_area_4_3_1_text':$scope.dining_area_4_3_1_text,
				'dining_area_4_3_1_A':$scope.dining_area_4_3_1_A, 
				'dining_area_4_3_1_A_cm':$scope.dining_area_4_3_1_A_cm,
				'dining_area_4_3_1_B':$scope.dining_area_4_3_1_B, 
				'dining_area_4_3_1_B_cm':$scope.dining_area_4_3_1_B_cm,
				'dining_area_4_3_1_C':$scope.dining_area_4_3_1_C, 
				'dining_area_4_3_1_C_cm':$scope.dining_area_4_3_1_C_cm,
				'dining_area_4_4_1_text':$scope.dining_area_4_4_1_text,
				'dining_area_4_4_1_A':$scope.dining_area_4_4_1_A, 
				'dining_area_4_4_1_A_cm':$scope.dining_area_4_4_1_A_cm,
				'dining_area_4_4_1_B':$scope.dining_area_4_4_1_B, 
				'dining_area_4_4_1_B_cm':$scope.dining_area_4_4_1_B_cm,
				'dining_area_4_4_1_C':$scope.dining_area_4_4_1_C, 
				'dining_area_4_4_1_C_cm':$scope.dining_area_4_4_1_C_cm,
				'dining_area_4_4_1_D':$scope.dining_area_4_4_1_D, 
				'dining_area_4_4_1_D_cm':$scope.dining_area_4_4_1_D_cm,
				'dining_area_4_4_1_E':$scope.dining_area_4_4_1_E, 
				'dining_area_4_4_1_E_cm':$scope.dining_area_4_4_1_E_cm,
				'dining_area_4_4_1_F':$scope.dining_area_4_4_1_F, 
				'dining_area_4_4_1_F_cm':$scope.dining_area_4_4_1_F_cm,
				'service_5_1_1_text':$scope.service_5_1_1_text,
				'service_5_1_1_A':$scope.service_5_1_1_A, 
				'service_5_1_1_A_cm':$scope.service_5_1_1_A_cm,
				'service_5_1_1_B':$scope.service_5_1_1_B, 
				'service_5_1_1_B_cm':$scope.service_5_1_1_B_cm,
				'service_5_1_1_C':$scope.service_5_1_1_C, 
				'service_5_1_1_C_cm':$scope.service_5_1_1_C_cm,
				'service_5_1_1_D':$scope.service_5_1_1_D, 
				'service_5_1_1_D_cm':$scope.service_5_1_1_D_cm,
				'service_5_1_1_E':$scope.service_5_1_1_E, 
				'service_5_1_1_E_cm':$scope.service_5_1_1_E_cm,
				'service_5_1_1_F':$scope.service_5_1_1_F, 
				'service_5_1_1_F_cm':$scope.service_5_1_1_F_cm,
				'service_5_1_1_G':$scope.service_5_1_1_G, 
				'service_5_1_1_G_cm':$scope.service_5_1_1_G_cm,
				'service_5_1_1_H':$scope.service_5_1_1_H, 
				'service_5_1_1_H_cm':$scope.service_5_1_1_H_cm,
				'service_5_1_1_I':$scope.service_5_1_1_I, 
				'service_5_1_1_I_cm':$scope.service_5_1_1_I_cm,
				'service_5_1_1_J':$scope.service_5_1_1_J, 
				'service_5_1_1_J_cm':$scope.service_5_1_1_J_cm,
				'service_5_1_1_K_a':$scope.service_5_1_1_K_a, 
				'service_5_1_1_K_a_cm':$scope.service_5_1_1_K_a_cm,
				'service_5_1_1_K_b':$scope.service_5_1_1_K_b, 
				'service_5_1_1_K_b_cm':$scope.service_5_1_1_K_b_cm,
				'service_5_1_1_K_c':$scope.service_5_1_1_K_c, 
				'service_5_1_1_K_c_cm':$scope.service_5_1_1_K_c_cm,
				'service_5_2_1_text':$scope.service_5_2_1_text,
				'service_5_2_1_A':$scope.service_5_2_1_A, 
				'service_5_2_1_A_cm':$scope.service_5_2_1_A_cm,
				'service_5_2_1_B':$scope.service_5_2_1_B, 
				'service_5_2_1_B_cm':$scope.service_5_2_1_B_cm,
				'service_5_2_1_C':$scope.service_5_2_1_C, 
				'service_5_2_1_C_cm':$scope.service_5_2_1_C_cm,
				'service_5_2_1_D':$scope.service_5_2_1_D, 
				'service_5_2_1_D_cm':$scope.service_5_2_1_D_cm,
				'service_5_2_1_E_a':$scope.service_5_2_1_E_a, 
				'service_5_2_1_E_a_cm':$scope.service_5_2_1_E_a_cm,
				'service_5_2_1_E_b':$scope.service_5_2_1_E_b, 
				'service_5_2_1_E_b_cm':$scope.service_5_2_1_E_b_cm,
				'service_5_2_1_E_c':$scope.service_5_2_1_E_c, 
				'service_5_2_1_E_c_cm':$scope.service_5_2_1_E_c_cm,
				'service_5_2_1_E_d':$scope.service_5_2_1_E_d, 
				'service_5_2_1_E_d_cm':$scope.service_5_2_1_E_d_cm,
				'service_5_2_1_F':$scope.service_5_2_1_F, 
				'service_5_2_1_F_cm':$scope.service_5_2_1_F_cm,
				'service_5_2_1_G_a':$scope.service_5_2_1_G_a, 
				'service_5_2_1_G_a_cm':$scope.service_5_2_1_G_a_cm,
				'service_5_2_1_G_b':$scope.service_5_2_1_G_b, 
				'service_5_2_1_G_b_cm':$scope.service_5_2_1_G_b_cm,
				'service_5_2_1_G_c':$scope.service_5_2_1_G_c, 
				'service_5_2_1_G_c_cm':$scope.service_5_2_1_G_c_cm,
				'service_5_2_1_H':$scope.service_5_2_1_H, 
				'service_5_2_1_H_cm':$scope.service_5_2_1_H_cm,
				'service_5_2_1_I':$scope.service_5_2_1_I, 
				'service_5_2_1_I_cm':$scope.service_5_2_1_I_cm,
				'service_5_2_1_J':$scope.service_5_2_1_J, 
				'service_5_2_1_J_cm':$scope.service_5_2_1_J_cm,
				'service_5_3_1_text':$scope.service_5_3_1_text,
				'service_5_3_1_A':$scope.service_5_3_1_A, 
				'service_5_3_1_A_cm':$scope.service_5_3_1_A_cm,
				'service_5_3_1_B':$scope.service_5_3_1_B, 
				'service_5_3_1_B_cm':$scope.service_5_3_1_B_cm,
				'entertainment_6_1_1_text':$scope.entertainment_6_1_1_text,
				'entertainment_6_1_1_A':$scope.entertainment_6_1_1_A, 
				'entertainment_6_1_1_A_cm':$scope.entertainment_6_1_1_A_cm,
				'entertainment_6_1_1_B':$scope.entertainment_6_1_1_B, 
				'entertainment_6_1_1_B_cm':$scope.entertainment_6_1_1_B_cm,
				'entertainment_6_1_1_C':$scope.entertainment_6_1_1_C, 
				'entertainment_6_1_1_C_cm':$scope.entertainment_6_1_1_C_cm,
				'bar_7_1_1_text':$scope.bar_7_1_1_text,
				'bar_7_1_1_A':$scope.bar_7_1_1_A, 
				'bar_7_1_1_A_cm':$scope.bar_7_1_1_A_cm,
				'bar_7_1_1_B_a':$scope.bar_7_1_1_B_a, 
				'bar_7_1_1_B_a_cm':$scope.bar_7_1_1_B_a_cm,
				'bar_7_1_1_B_b':$scope.bar_7_1_1_B_b, 
				'bar_7_1_1_B_b_cm':$scope.bar_7_1_1_B_b_cm,
				'bar_7_1_1_B_c':$scope.bar_7_1_1_B_c, 
				'bar_7_1_1_B_c_cm':$scope.bar_7_1_1_B_c_cm,
				'bar_7_1_1_C':$scope.bar_7_1_1_C, 
				'bar_7_1_1_C_cm':$scope.bar_7_1_1_C_cm,
				'bar_7_1_1_D':$scope.bar_7_1_1_D, 
				'bar_7_1_1_D_cm':$scope.bar_7_1_1_D_cm,
				'bar_7_1_1_E':$scope.bar_7_1_1_E, 
				'bar_7_1_1_E_cm':$scope.bar_7_1_1_E_cm,
				'bar_7_2_1_text':$scope.bar_7_2_1_text,
				'bar_7_2_1_A':$scope.bar_7_2_1_A, 
				'bar_7_2_1_A_cm':$scope.bar_7_2_1_A_cm,
				'bar_7_2_1_B':$scope.bar_7_2_1_B, 
				'bar_7_2_1_B_cm':$scope.bar_7_2_1_B_cm,
				'bar_7_2_1_C':$scope.bar_7_2_1_C, 
				'bar_7_2_1_C_cm':$scope.bar_7_2_1_C_cm,
				'bar_7_2_1_D':$scope.bar_7_2_1_D, 
				'bar_7_2_1_D_cm':$scope.bar_7_2_1_D_cm,
				'bar_7_2_2_text':$scope.bar_7_2_2_text,
				'bar_7_2_2_A':$scope.bar_7_2_2_A, 
				'bar_7_2_2_A_cm':$scope.bar_7_2_2_A_cm,
				'bar_7_2_2_B':$scope.bar_7_2_2_B, 
				'bar_7_2_2_B_cm':$scope.bar_7_2_2_B_cm,
				'bar_7_2_2_C':$scope.bar_7_2_2_C, 
				'bar_7_2_2_C_cm':$scope.bar_7_2_2_C_cm,
				'bar_7_2_2_D':$scope.bar_7_2_2_D, 
				'bar_7_2_2_D_cm':$scope.bar_7_2_2_D_cm,
				'bar_7_2_2_E':$scope.bar_7_2_2_E, 
				'bar_7_2_2_E_cm':$scope.bar_7_2_2_E_cm,
				'bar_7_2_2_F':$scope.bar_7_2_2_F, 
				'bar_7_2_2_F_cm':$scope.bar_7_2_2_F_cm,
				'bar_7_3_1_text':$scope.bar_7_3_1_text,
				'bar_7_3_1_A':$scope.bar_7_3_1_A, 
				'bar_7_3_1_A_cm':$scope.bar_7_3_1_A_cm,
				'bar_7_3_1_B':$scope.bar_7_3_1_B, 
				'bar_7_3_1_B_cm':$scope.bar_7_3_1_B_cm,
				'bar_7_3_1_C':$scope.bar_7_3_1_C, 
				'bar_7_3_1_C_cm':$scope.bar_7_3_1_C_cm,
				'bar_7_3_1_D':$scope.bar_7_3_1_D, 
				'bar_7_3_1_D_cm':$scope.bar_7_3_1_D_cm,
				'bar_7_3_1_E':$scope.bar_7_3_1_E, 
				'bar_7_3_1_E_cm':$scope.bar_7_3_1_E_cm,
				'bar_7_3_1_F':$scope.bar_7_3_1_F, 
				'bar_7_3_1_F_cm':$scope.bar_7_3_1_F_cm,
				'bar_7_4_1_text':$scope.bar_7_4_1_text,
				'bar_7_4_1_A':$scope.bar_7_4_1_A, 
				'bar_7_4_1_A_cm':$scope.bar_7_4_1_A_cm,
				'bar_7_4_1_B':$scope.bar_7_4_1_B, 
				'bar_7_4_1_B_cm':$scope.bar_7_4_1_B_cm,
				'bar_7_4_1_C':$scope.bar_7_4_1_C, 
				'bar_7_4_1_C_cm':$scope.bar_7_4_1_C_cm,
				'bar_7_4_1_D':$scope.bar_7_4_1_D, 
				'bar_7_4_1_D_cm':$scope.bar_7_4_1_D_cm,
				'bar_7_4_1_E_a':$scope.bar_7_4_1_E_a, 
				'bar_7_4_1_E_a_cm':$scope.bar_7_4_1_E_a_cm,
				'bar_7_4_1_E_b':$scope.bar_7_4_1_E_b, 
				'bar_7_4_1_E_b_cm':$scope.bar_7_4_1_E_b_cm,
				'bar_7_4_1_E_c':$scope.bar_7_4_1_E_c, 
				'bar_7_4_1_E_c_cm':$scope.bar_7_4_1_E_c_cm,
				'bar_7_4_1_E_d':$scope.bar_7_4_1_E_d, 
				'bar_7_4_1_E_d_cm':$scope.bar_7_4_1_E_d_cm,
				'bar_7_4_1_E_e':$scope.bar_7_4_1_E_e, 
				'bar_7_4_1_E_e_cm':$scope.bar_7_4_1_E_e_cm,
				'bar_7_4_1_E_f':$scope.bar_7_4_1_E_f, 
				'bar_7_4_1_E_f_cm':$scope.bar_7_4_1_E_f_cm,
				'bar_7_4_1_E_g':$scope.bar_7_4_1_E_g, 
				'bar_7_4_1_E_g_cm':$scope.bar_7_4_1_E_g_cm,
				'bar_7_4_1_E_h':$scope.bar_7_4_1_E_h, 
				'bar_7_4_1_E_h_cm':$scope.bar_7_4_1_E_h_cm,
				'bar_7_4_1_F':$scope.bar_7_4_1_F, 
				'bar_7_4_1_F_cm':$scope.bar_7_4_1_F_cm,
				'bar_7_4_1_G':$scope.bar_7_4_1_G, 
				'bar_7_4_1_G_cm':$scope.bar_7_4_1_G_cm,
				'bar_7_4_1_H':$scope.bar_7_4_1_H, 
				'bar_7_4_1_H_cm':$scope.bar_7_4_1_H_cm,
				'bar_7_4_1_I':$scope.bar_7_4_1_I, 
				'bar_7_4_1_I_cm':$scope.bar_7_4_1_I_cm,
				'bar_7_5_1_text':$scope.bar_7_5_1_text,
				'bar_7_5_1_A':$scope.bar_7_5_1_A, 
				'bar_7_5_1_A_cm':$scope.bar_7_5_1_A_cm,
				'bar_7_5_1_B':$scope.bar_7_5_1_B, 
				'bar_7_5_1_B_cm':$scope.bar_7_5_1_B_cm,
				'bar_7_5_1_C':$scope.bar_7_5_1_C, 
				'bar_7_5_1_C_cm':$scope.bar_7_5_1_C_cm,
				'bar_7_6_1_text':$scope.bar_7_6_1_text,
				'bar_7_6_1_A':$scope.bar_7_6_1_A, 
				'bar_7_6_1_A_cm':$scope.bar_7_6_1_A_cm,
				'bar_7_6_1_B':$scope.bar_7_6_1_B, 
				'bar_7_6_1_B_cm':$scope.bar_7_6_1_B_cm,
				'bar_7_6_1_C':$scope.bar_7_6_1_C, 
				'bar_7_6_1_C_cm':$scope.bar_7_6_1_C_cm,
				'bar_7_7_1_text':$scope.bar_7_7_1_text,
				'bar_7_7_1_A':$scope.bar_7_7_1_A, 
				'bar_7_7_1_A_cm':$scope.bar_7_7_1_A_cm,
				'bar_7_7_1_B':$scope.bar_7_7_1_B, 
				'bar_7_7_1_B_cm':$scope.bar_7_7_1_B_cm,
				'bar_7_7_1_C':$scope.bar_7_7_1_C, 
				'bar_7_7_1_C_cm':$scope.bar_7_7_1_C_cm,
				'kitchen_8_1_1_text':$scope.kitchen_8_1_1_text,
				'kitchen_8_1_1_A':$scope.kitchen_8_1_1_A, 
				'kitchen_8_1_1_A_cm':$scope.kitchen_8_1_1_A_cm,
				'kitchen_8_2_1_text':$scope.kitchen_8_2_1_text,
				'kitchen_8_2_1_A':$scope.kitchen_8_2_1_A, 
				'kitchen_8_2_1_A_cm':$scope.kitchen_8_2_1_A_cm,
				'kitchen_8_2_1_B':$scope.kitchen_8_2_1_B, 
				'kitchen_8_2_1_B_cm':$scope.kitchen_8_2_1_B_cm,
				'kitchen_8_2_1_C':$scope.kitchen_8_2_1_C, 
				'kitchen_8_2_1_C_cm':$scope.kitchen_8_2_1_C_cm,
				'kitchen_8_3_1_text':$scope.kitchen_8_3_1_text,
				'kitchen_8_3_1_A':$scope.kitchen_8_3_1_A, 
				'kitchen_8_3_1_A_cm':$scope.kitchen_8_3_1_A_cm,
				'kitchen_8_3_1_B':$scope.kitchen_8_3_1_B, 
				'kitchen_8_3_1_B_cm':$scope.kitchen_8_3_1_B_cm,
				'kitchen_8_3_1_C':$scope.kitchen_8_3_1_C, 
				'kitchen_8_3_1_C_cm':$scope.kitchen_8_3_1_C_cm,
				'kitchen_8_4_1_text':$scope.kitchen_8_4_1_text,
				'kitchen_8_4_1_A':$scope.kitchen_8_4_1_A, 
				'kitchen_8_4_1_A_cm':$scope.kitchen_8_4_1_A_cm,
				'kitchen_8_4_2_text':$scope.kitchen_8_4_2_text,
				'kitchen_8_4_2_A':$scope.kitchen_8_4_2_A, 
				'kitchen_8_4_2_A_cm':$scope.kitchen_8_4_2_A_cm,
				'kitchen_8_4_2_B':$scope.kitchen_8_4_2_B, 
				'kitchen_8_4_2_B_cm':$scope.kitchen_8_4_2_B_cm,
				'kitchen_8_4_2_C':$scope.kitchen_8_4_2_C, 
				'kitchen_8_4_2_C_cm':$scope.kitchen_8_4_2_C_cm,
				'kitchen_8_5_1_text':$scope.kitchen_8_5_1_text,
				'kitchen_8_5_1_A':$scope.kitchen_8_5_1_A, 
				'kitchen_8_5_1_A_cm':$scope.kitchen_8_5_1_A_cm,
				'kitchen_8_5_1_B':$scope.kitchen_8_5_1_B, 
				'kitchen_8_5_1_B_cm':$scope.kitchen_8_5_1_B_cm,
				'kitchen_8_5_1_C':$scope.kitchen_8_5_1_C, 
				'kitchen_8_5_1_C_cm':$scope.kitchen_8_5_1_C_cm,
				'kitchen_8_5_1_D':$scope.kitchen_8_5_1_D, 
				'kitchen_8_5_1_D_cm':$scope.kitchen_8_5_1_D_cm,
				'kitchen_8_5_1_E':$scope.kitchen_8_5_1_E, 
				'kitchen_8_5_1_E_cm':$scope.kitchen_8_5_1_E_cm,
				'kitchen_8_5_1_F':$scope.kitchen_8_5_1_F, 
				'kitchen_8_5_1_F_cm':$scope.kitchen_8_5_1_F_cm,
				'kitchen_8_5_1_G':$scope.kitchen_8_5_1_G, 
				'kitchen_8_5_1_G_cm':$scope.kitchen_8_5_1_G_cm,
				'kitchen_8_5_1_H':$scope.kitchen_8_5_1_H, 
				'kitchen_8_5_1_H_cm':$scope.kitchen_8_5_1_H_cm,
				'kitchen_8_5_1_I':$scope.kitchen_8_5_1_I, 
				'kitchen_8_5_1_I_cm':$scope.kitchen_8_5_1_I_cm,
				'kitchen_8_6_1_text':$scope.kitchen_8_6_1_text,
				'kitchen_8_6_1_A':$scope.kitchen_8_6_1_A, 
				'kitchen_8_6_1_A_cm':$scope.kitchen_8_6_1_A_cm,
				'kitchen_8_6_1_B':$scope.kitchen_8_6_1_B, 
				'kitchen_8_6_1_B_cm':$scope.kitchen_8_6_1_B_cm,
				'kitchen_8_6_1_C':$scope.kitchen_8_6_1_C, 
				'kitchen_8_6_1_C_cm':$scope.kitchen_8_6_1_C_cm,
				'kitchen_8_6_1_D':$scope.kitchen_8_6_1_D, 
				'kitchen_8_6_1_D_cm':$scope.kitchen_8_6_1_D_cm,
				'kitchen_8_6_1_E':$scope.kitchen_8_6_1_E, 
				'kitchen_8_6_1_E_cm':$scope.kitchen_8_6_1_E_cm,
				'kitchen_8_6_1_F':$scope.kitchen_8_6_1_F, 
				'kitchen_8_6_1_F_cm':$scope.kitchen_8_6_1_F_cm,
				'kitchen_8_6_1_G':$scope.kitchen_8_6_1_G, 
				'kitchen_8_6_1_G_cm':$scope.kitchen_8_6_1_G_cm,
				'kitchen_8_7_1_text':$scope.kitchen_8_7_1_text,
				'kitchen_8_7_1_A':$scope.kitchen_8_7_1_A, 
				'kitchen_8_7_1_A_cm':$scope.kitchen_8_7_1_A_cm,
				'kitchen_8_7_1_B':$scope.kitchen_8_7_1_B, 
				'kitchen_8_7_1_B_cm':$scope.kitchen_8_7_1_B_cm,
				'kitchen_8_7_1_C':$scope.kitchen_8_7_1_C, 
				'kitchen_8_7_1_C_cm':$scope.kitchen_8_7_1_C_cm,
				'kitchen_8_7_1_D':$scope.kitchen_8_7_1_D, 
				'kitchen_8_7_1_D_cm':$scope.kitchen_8_7_1_D_cm,
				'kitchen_8_7_1_E':$scope.kitchen_8_7_1_E, 
				'kitchen_8_7_1_E_cm':$scope.kitchen_8_7_1_E_cm,
				'kitchen_8_8_1_text':$scope.kitchen_8_8_1_text,
				'kitchen_8_8_1_A':$scope.kitchen_8_8_1_A, 
				'kitchen_8_8_1_A_cm':$scope.kitchen_8_8_1_A_cm,
				'kitchen_8_8_1_B':$scope.kitchen_8_8_1_B, 
				'kitchen_8_8_1_B_cm':$scope.kitchen_8_8_1_B_cm,
				'kitchen_8_9_1_text':$scope.kitchen_8_9_1_text,
				'kitchen_8_9_1_A':$scope.kitchen_8_9_1_A, 
				'kitchen_8_9_1_A_cm':$scope.kitchen_8_9_1_A_cm,
				'kitchen_8_9_1_B':$scope.kitchen_8_9_1_B, 
				'kitchen_8_9_1_B_cm':$scope.kitchen_8_9_1_B_cm,
				'kitchen_8_9_1_C_a':$scope.kitchen_8_9_1_C_a, 
				'kitchen_8_9_1_C_a_cm':$scope.kitchen_8_9_1_C_a_cm,
				'kitchen_8_9_1_C_b':$scope.kitchen_8_9_1_C_b, 
				'kitchen_8_9_1_C_b_cm':$scope.kitchen_8_9_1_C_b_cm,
				'kitchen_8_9_1_D':$scope.kitchen_8_9_1_D, 
				'kitchen_8_9_1_D_cm':$scope.kitchen_8_9_1_D_cm,
				'kitchen_8_9_1_E':$scope.kitchen_8_9_1_E, 
				'kitchen_8_9_1_E_cm':$scope.kitchen_8_9_1_E_cm,
				'kitchen_8_9_1_F':$scope.kitchen_8_9_1_F, 
				'kitchen_8_9_1_F_cm':$scope.kitchen_8_9_1_F_cm,
				'kitchen_8_9_1_G':$scope.kitchen_8_9_1_G, 
				'kitchen_8_9_1_G_cm':$scope.kitchen_8_9_1_G_cm,
				'kitchen_8_10_1_text':$scope.kitchen_8_10_1_text,
				'kitchen_8_10_1_A':$scope.kitchen_8_10_1_A, 
				'kitchen_8_10_1_A_cm':$scope.kitchen_8_10_1_A_cm,
				'kitchen_8_10_1_B':$scope.kitchen_8_10_1_B, 
				'kitchen_8_10_1_B_cm':$scope.kitchen_8_10_1_B_cm,
				'kitchen_8_10_1_C':$scope.kitchen_8_10_1_C, 
				'kitchen_8_10_1_C_cm':$scope.kitchen_8_10_1_C_cm,
				'kitchen_8_11_1_text':$scope.kitchen_8_11_1_text,
				'kitchen_8_11_1_A':$scope.kitchen_8_11_1_A, 
				'kitchen_8_11_1_A_cm':$scope.kitchen_8_11_1_A_cm,
				'kitchen_8_11_1_B':$scope.kitchen_8_11_1_B, 
				'kitchen_8_11_1_B_cm':$scope.kitchen_8_11_1_B_cm,
				'kitchen_8_11_1_C':$scope.kitchen_8_11_1_C, 
				'kitchen_8_11_1_C_cm':$scope.kitchen_8_11_1_C_cm,
				'kitchen_8_11_1_D':$scope.kitchen_8_11_1_D, 
				'kitchen_8_11_1_D_cm':$scope.kitchen_8_11_1_D_cm,
				'kitchen_8_11_1_E':$scope.kitchen_8_11_1_E, 
				'kitchen_8_11_1_E_cm':$scope.kitchen_8_11_1_E_cm,
				'kitchen_8_12_1_text':$scope.kitchen_8_12_1_text,
				'kitchen_8_12_1_A_a':$scope.kitchen_8_12_1_A_a, 
				'kitchen_8_12_1_A_a_cm':$scope.kitchen_8_12_1_A_a_cm,
				'kitchen_8_12_1_A_b':$scope.kitchen_8_12_1_A_b, 
				'kitchen_8_12_1_A_b_cm':$scope.kitchen_8_12_1_A_b_cm,
				'kitchen_8_12_1_A_c':$scope.kitchen_8_12_1_A_c, 
				'kitchen_8_12_1_A_c_cm':$scope.kitchen_8_12_1_A_c_cm,
				'kitchen_8_12_1_A_d':$scope.kitchen_8_12_1_A_d, 
				'kitchen_8_12_1_A_d_cm':$scope.kitchen_8_12_1_A_d_cm,
				'kitchen_8_12_1_B':$scope.kitchen_8_12_1_B, 
				'kitchen_8_12_1_B_cm':$scope.kitchen_8_12_1_B_cm,
				'kitchen_8_12_1_C':$scope.kitchen_8_12_1_C, 
				'kitchen_8_12_1_C_cm':$scope.kitchen_8_12_1_C_cm,
				'kitchen_8_12_1_D':$scope.kitchen_8_12_1_D, 
				'kitchen_8_12_1_D_cm':$scope.kitchen_8_12_1_D_cm,
				'kitchen_8_12_1_E':$scope.kitchen_8_12_1_E, 
				'kitchen_8_12_1_E_cm':$scope.kitchen_8_12_1_E_cm,
				'kitchen_8_12_1_F':$scope.kitchen_8_12_1_F, 
				'kitchen_8_12_1_F_cm':$scope.kitchen_8_12_1_F_cm,
				'kitchen_8_12_1_G':$scope.kitchen_8_12_1_G, 
				'kitchen_8_12_1_G_cm':$scope.kitchen_8_12_1_G_cm,
				'kitchen_8_13_1_text':$scope.kitchen_8_13_1_text,
				'kitchen_8_13_1_A_a':$scope.kitchen_8_13_1_A_a, 
				'kitchen_8_13_1_A_a_cm':$scope.kitchen_8_13_1_A_a_cm,
				'kitchen_8_13_1_A_b':$scope.kitchen_8_13_1_A_b, 
				'kitchen_8_13_1_A_b_cm':$scope.kitchen_8_13_1_A_b_cm,
				'kitchen_8_13_1_A_c':$scope.kitchen_8_13_1_A_c, 
				'kitchen_8_13_1_A_c_cm':$scope.kitchen_8_13_1_A_c_cm,
				'kitchen_8_13_1_B':$scope.kitchen_8_13_1_B, 
				'kitchen_8_13_1_B_cm':$scope.kitchen_8_13_1_B_cm,
				'kitchen_8_13_1_C_a':$scope.kitchen_8_13_1_C_a, 
				'kitchen_8_13_1_C_a_cm':$scope.kitchen_8_13_1_C_a_cm,
				'kitchen_8_13_1_C_b':$scope.kitchen_8_13_1_C_b, 
				'kitchen_8_13_1_C_b_cm':$scope.kitchen_8_13_1_C_b_cm,
				'kitchen_8_13_1_C_c':$scope.kitchen_8_13_1_C_c, 
				'kitchen_8_13_1_C_c_cm':$scope.kitchen_8_13_1_C_c_cm,
				'kitchen_8_13_1_C_d':$scope.kitchen_8_13_1_C_d, 
				'kitchen_8_13_1_C_d_cm':$scope.kitchen_8_13_1_C_d_cm,
				'kitchen_8_13_1_C_e':$scope.kitchen_8_13_1_C_e, 
				'kitchen_8_13_1_C_e_cm':$scope.kitchen_8_13_1_C_e_cm,
				'kitchen_8_13_1_D_a':$scope.kitchen_8_13_1_D_a, 
				'kitchen_8_13_1_D_a_cm':$scope.kitchen_8_13_1_D_a_cm,
				'kitchen_8_13_1_D_b':$scope.kitchen_8_13_1_D_b, 
				'kitchen_8_13_1_D_b_cm':$scope.kitchen_8_13_1_D_b_cm,
				'kitchen_8_13_1_E':$scope.kitchen_8_13_1_E, 
				'kitchen_8_13_1_E_cm':$scope.kitchen_8_13_1_E_cm,
				'kitchen_8_13_1_F':$scope.kitchen_8_13_1_F, 
				'kitchen_8_13_1_F_cm':$scope.kitchen_8_13_1_F_cm,
				'kitchen_8_14_1_text':$scope.kitchen_8_14_1_text,
				'kitchen_8_14_1_A':$scope.kitchen_8_14_1_A, 
				'kitchen_8_14_1_A_cm':$scope.kitchen_8_14_1_A_cm,
				'kitchen_8_14_1_B':$scope.kitchen_8_14_1_B, 
				'kitchen_8_14_1_B_cm':$scope.kitchen_8_14_1_B_cm,
				'kitchen_8_14_1_C':$scope.kitchen_8_14_1_C, 
				'kitchen_8_14_1_C_cm':$scope.kitchen_8_14_1_C_cm,
				'kitchen_8_14_1_D':$scope.kitchen_8_14_1_D, 
				'kitchen_8_14_1_D_cm':$scope.kitchen_8_14_1_D_cm,
				'kitchen_8_14_1_E':$scope.kitchen_8_14_1_E, 
				'kitchen_8_14_1_E_cm':$scope.kitchen_8_14_1_E_cm,
				'kitchen_8_14_1_F':$scope.kitchen_8_14_1_F, 
				'kitchen_8_14_1_F_cm':$scope.kitchen_8_14_1_F_cm,
				'kitchen_8_14_1_G':$scope.kitchen_8_14_1_G, 
				'kitchen_8_14_1_G_cm':$scope.kitchen_8_14_1_G_cm,
				'kitchen_8_14_1_H':$scope.kitchen_8_14_1_H, 
				'kitchen_8_14_1_H_cm':$scope.kitchen_8_14_1_H_cm,
				'kitchen_8_14_1_I':$scope.kitchen_8_14_1_I, 
				'kitchen_8_14_1_I_cm':$scope.kitchen_8_14_1_I_cm,
				'kitchen_8_14_1_J':$scope.kitchen_8_14_1_J, 
				'kitchen_8_14_1_J_cm':$scope.kitchen_8_14_1_J_cm,
				'kitchen_8_14_1_K':$scope.kitchen_8_14_1_K, 
				'kitchen_8_14_1_K_cm':$scope.kitchen_8_14_1_K_cm,
				'hygiene_and_sanitation_9_1_1_text':$scope.hygiene_and_sanitation_9_1_1_text,
				'hygiene_and_sanitation_9_1_1_A':$scope.hygiene_and_sanitation_9_1_1_A, 
				'hygiene_and_sanitation_9_1_1_A_cm':$scope.hygiene_and_sanitation_9_1_1_A_cm,
				'hygiene_and_sanitation_9_1_1_B':$scope.hygiene_and_sanitation_9_1_1_B, 
				'hygiene_and_sanitation_9_1_1_B_cm':$scope.hygiene_and_sanitation_9_1_1_B_cm,
				'hygiene_and_sanitation_9_1_1_C':$scope.hygiene_and_sanitation_9_1_1_C, 
				'hygiene_and_sanitation_9_1_1_C_cm':$scope.hygiene_and_sanitation_9_1_1_C_cm,
				'hygiene_and_sanitation_9_1_1_D_a':$scope.hygiene_and_sanitation_9_1_1_D_a, 
				'hygiene_and_sanitation_9_1_1_D_a_cm':$scope.hygiene_and_sanitation_9_1_1_D_a_cm,
				'hygiene_and_sanitation_9_1_1_D_b':$scope.hygiene_and_sanitation_9_1_1_D_b, 
				'hygiene_and_sanitation_9_1_1_D_b_cm':$scope.hygiene_and_sanitation_9_1_1_D_b_cm,
				'hygiene_and_sanitation_9_1_1_D_c':$scope.hygiene_and_sanitation_9_1_1_D_c, 
				'hygiene_and_sanitation_9_1_1_D_c_cm':$scope.hygiene_and_sanitation_9_1_1_D_c_cm,
				'hygiene_and_sanitation_9_1_1_D_d':$scope.hygiene_and_sanitation_9_1_1_D_d, 
				'hygiene_and_sanitation_9_1_1_D_d_cm':$scope.hygiene_and_sanitation_9_1_1_D_d_cm,
				'hygiene_and_sanitation_9_1_1_D_e':$scope.hygiene_and_sanitation_9_1_1_D_e, 
				'hygiene_and_sanitation_9_1_1_D_e_cm':$scope.hygiene_and_sanitation_9_1_1_D_e_cm,
				'hygiene_and_sanitation_9_1_1_D_f':$scope.hygiene_and_sanitation_9_1_1_D_f, 
				'hygiene_and_sanitation_9_1_1_D_f_cm':$scope.hygiene_and_sanitation_9_1_1_D_f_cm,
				'hygiene_and_sanitation_9_1_1_E':$scope.hygiene_and_sanitation_9_1_1_E, 
				'hygiene_and_sanitation_9_1_1_E_cm':$scope.hygiene_and_sanitation_9_1_1_E_cm,
				'hygiene_and_sanitation_9_1_1_F':$scope.hygiene_and_sanitation_9_1_1_F, 
				'hygiene_and_sanitation_9_1_1_F_cm':$scope.hygiene_and_sanitation_9_1_1_F_cm,
				'hygiene_and_sanitation_9_1_1_G':$scope.hygiene_and_sanitation_9_1_1_G, 
				'hygiene_and_sanitation_9_1_1_G_cm':$scope.hygiene_and_sanitation_9_1_1_G_cm,
				'hygiene_and_sanitation_9_1_1_H':$scope.hygiene_and_sanitation_9_1_1_H, 
				'hygiene_and_sanitation_9_1_1_H_cm':$scope.hygiene_and_sanitation_9_1_1_H_cm,
				'hygiene_and_sanitation_9_1_1_I_a':$scope.hygiene_and_sanitation_9_1_1_I_a, 
				'hygiene_and_sanitation_9_1_1_I_a_cm':$scope.hygiene_and_sanitation_9_1_1_I_a_cm,
				'hygiene_and_sanitation_9_1_1_I_b':$scope.hygiene_and_sanitation_9_1_1_I_b, 
				'hygiene_and_sanitation_9_1_1_I_b_cm':$scope.hygiene_and_sanitation_9_1_1_I_b_cm,
				'hygiene_and_sanitation_9_1_1_I_c':$scope.hygiene_and_sanitation_9_1_1_I_c, 
				'hygiene_and_sanitation_9_1_1_I_c_cm':$scope.hygiene_and_sanitation_9_1_1_I_c_cm,
				'hygiene_and_sanitation_9_1_1_I_d':$scope.hygiene_and_sanitation_9_1_1_I_d, 
				'hygiene_and_sanitation_9_1_1_I_d_cm':$scope.hygiene_and_sanitation_9_1_1_I_d_cm,
				'hygiene_and_sanitation_9_1_1_I_e':$scope.hygiene_and_sanitation_9_1_1_I_e, 
				'hygiene_and_sanitation_9_1_1_I_e_cm':$scope.hygiene_and_sanitation_9_1_1_I_e_cm,
				'hygiene_and_sanitation_9_1_1_J':$scope.hygiene_and_sanitation_9_1_1_J, 
				'hygiene_and_sanitation_9_1_1_J_cm':$scope.hygiene_and_sanitation_9_1_1_J_cm,
				'hygiene_and_sanitation_9_1_1_K':$scope.hygiene_and_sanitation_9_1_1_K, 
				'hygiene_and_sanitation_9_1_1_K_cm':$scope.hygiene_and_sanitation_9_1_1_K_cm,
				'hygiene_and_sanitation_9_2_1_text':$scope.hygiene_and_sanitation_9_2_1_text,
				'hygiene_and_sanitation_9_2_1_A':$scope.hygiene_and_sanitation_9_2_1_A, 
				'hygiene_and_sanitation_9_2_1_A_cm':$scope.hygiene_and_sanitation_9_2_1_A_cm,
				'hygiene_and_sanitation_9_2_1_B':$scope.hygiene_and_sanitation_9_2_1_B, 
				'hygiene_and_sanitation_9_2_1_B_cm':$scope.hygiene_and_sanitation_9_2_1_B_cm,
				'hygiene_and_sanitation_9_2_1_C':$scope.hygiene_and_sanitation_9_2_1_C, 
				'hygiene_and_sanitation_9_2_1_C_cm':$scope.hygiene_and_sanitation_9_2_1_C_cm,
				'hygiene_and_sanitation_9_2_1_D':$scope.hygiene_and_sanitation_9_2_1_D, 
				'hygiene_and_sanitation_9_2_1_D_cm':$scope.hygiene_and_sanitation_9_2_1_D_cm,
				'hygiene_and_sanitation_9_2_1_E_a':$scope.hygiene_and_sanitation_9_2_1_E_a, 
				'hygiene_and_sanitation_9_2_1_E_a_cm':$scope.hygiene_and_sanitation_9_2_1_E_a_cm,
				'hygiene_and_sanitation_9_2_1_E_b':$scope.hygiene_and_sanitation_9_2_1_E_b, 
				'hygiene_and_sanitation_9_2_1_E_b_cm':$scope.hygiene_and_sanitation_9_2_1_E_b_cm,
				'hygiene_and_sanitation_9_2_1_E_c':$scope.hygiene_and_sanitation_9_2_1_E_c, 
				'hygiene_and_sanitation_9_2_1_E_c_cm':$scope.hygiene_and_sanitation_9_2_1_E_c_cm,
				'hygiene_and_sanitation_9_2_1_E_d':$scope.hygiene_and_sanitation_9_2_1_E_d, 
				'hygiene_and_sanitation_9_2_1_E_d_cm':$scope.hygiene_and_sanitation_9_2_1_E_d_cm,
				'hygiene_and_sanitation_9_2_1_E_e':$scope.hygiene_and_sanitation_9_2_1_E_e, 
				'hygiene_and_sanitation_9_2_1_E_e_cm':$scope.hygiene_and_sanitation_9_2_1_E_e_cm,
				'hygiene_and_sanitation_9_2_1_E_f':$scope.hygiene_and_sanitation_9_2_1_E_f, 
				'hygiene_and_sanitation_9_2_1_E_f_cm':$scope.hygiene_and_sanitation_9_2_1_E_f_cm,
				'hygiene_and_sanitation_9_2_1_E_g':$scope.hygiene_and_sanitation_9_2_1_E_g, 
				'hygiene_and_sanitation_9_2_1_E_g_cm':$scope.hygiene_and_sanitation_9_2_1_E_g_cm,
				'hygiene_and_sanitation_9_2_1_E_h':$scope.hygiene_and_sanitation_9_2_1_E_h, 
				'hygiene_and_sanitation_9_2_1_E_h_cm':$scope.hygiene_and_sanitation_9_2_1_E_h_cm,
				'hygiene_and_sanitation_9_2_1_E_i':$scope.hygiene_and_sanitation_9_2_1_E_i, 
				'hygiene_and_sanitation_9_2_1_E_i_cm':$scope.hygiene_and_sanitation_9_2_1_E_i_cm,
				'hygiene_and_sanitation_9_2_1_F':$scope.hygiene_and_sanitation_9_2_1_F, 
				'hygiene_and_sanitation_9_2_1_F_cm':$scope.hygiene_and_sanitation_9_2_1_F_cm,
				'hygiene_and_sanitation_9_2_1_G':$scope.hygiene_and_sanitation_9_2_1_G, 
				'hygiene_and_sanitation_9_2_1_G_cm':$scope.hygiene_and_sanitation_9_2_1_G_cm,
				'hygiene_and_sanitation_9_2_1_H_a':$scope.hygiene_and_sanitation_9_2_1_H_a, 
				'hygiene_and_sanitation_9_2_1_H_a_cm':$scope.hygiene_and_sanitation_9_2_1_H_a_cm,
				'hygiene_and_sanitation_9_2_1_H_b':$scope.hygiene_and_sanitation_9_2_1_H_b, 
				'hygiene_and_sanitation_9_2_1_H_b_cm':$scope.hygiene_and_sanitation_9_2_1_H_b_cm,
				'hygiene_and_sanitation_9_2_1_H_c':$scope.hygiene_and_sanitation_9_2_1_H_c, 
				'hygiene_and_sanitation_9_2_1_H_c_cm':$scope.hygiene_and_sanitation_9_2_1_H_c_cm,
				'hygiene_and_sanitation_9_2_1_H_d':$scope.hygiene_and_sanitation_9_2_1_H_d, 
				'hygiene_and_sanitation_9_2_1_H_d_cm':$scope.hygiene_and_sanitation_9_2_1_H_d_cm,
				'hygiene_and_sanitation_9_2_1_I':$scope.hygiene_and_sanitation_9_2_1_I, 
				'hygiene_and_sanitation_9_2_1_I_cm':$scope.hygiene_and_sanitation_9_2_1_I_cm,
				'hygiene_and_sanitation_9_2_1_J':$scope.hygiene_and_sanitation_9_2_1_J, 
				'hygiene_and_sanitation_9_2_1_J_cm':$scope.hygiene_and_sanitation_9_2_1_J_cm,
				'hygiene_and_sanitation_9_3_1_text':$scope.hygiene_and_sanitation_9_3_1_text,
				'hygiene_and_sanitation_9_3_1_A':$scope.hygiene_and_sanitation_9_3_1_A, 
				'hygiene_and_sanitation_9_3_1_A_cm':$scope.hygiene_and_sanitation_9_3_1_A_cm,
				'hygiene_and_sanitation_9_3_1_B':$scope.hygiene_and_sanitation_9_3_1_B, 
				'hygiene_and_sanitation_9_3_1_B_cm':$scope.hygiene_and_sanitation_9_3_1_B_cm,
				'hygiene_and_sanitation_9_3_1_C':$scope.hygiene_and_sanitation_9_3_1_C, 
				'hygiene_and_sanitation_9_3_1_C_cm':$scope.hygiene_and_sanitation_9_3_1_C_cm,
				'hygiene_and_sanitation_9_3_1_D':$scope.hygiene_and_sanitation_9_3_1_D, 
				'hygiene_and_sanitation_9_3_1_D_cm':$scope.hygiene_and_sanitation_9_3_1_D_cm,
				'hygiene_and_sanitation_9_3_1_E':$scope.hygiene_and_sanitation_9_3_1_E, 
				'hygiene_and_sanitation_9_3_1_E_cm':$scope.hygiene_and_sanitation_9_3_1_E_cm,
				'hygiene_and_sanitation_9_3_1_F':$scope.hygiene_and_sanitation_9_3_1_F, 
				'hygiene_and_sanitation_9_3_1_F_cm':$scope.hygiene_and_sanitation_9_3_1_F_cm,
				'hygiene_and_sanitation_9_4_1_text':$scope.hygiene_and_sanitation_9_4_1_text,
				'hygiene_and_sanitation_9_4_1_A':$scope.hygiene_and_sanitation_9_4_1_A, 
				'hygiene_and_sanitation_9_4_1_A_cm':$scope.hygiene_and_sanitation_9_4_1_A_cm,
				'hygiene_and_sanitation_12_4_1_B':$scope.hygiene_and_sanitation_12_4_1_B, 
				'hygiene_and_sanitation_12_4_1_B_cm':$scope.hygiene_and_sanitation_12_4_1_B_cm,
				'hygiene_and_sanitation_9_4_1_C':$scope.hygiene_and_sanitation_9_4_1_C, 
				'hygiene_and_sanitation_9_4_1_C_cm':$scope.hygiene_and_sanitation_9_4_1_C_cm,
				'hygiene_and_sanitation_9_5_1_text':$scope.hygiene_and_sanitation_9_5_1_text,
				'hygiene_and_sanitation_9_5_1_A':$scope.hygiene_and_sanitation_9_5_1_A, 
				'hygiene_and_sanitation_9_5_1_A_cm':$scope.hygiene_and_sanitation_9_5_1_A_cm,
				'hygiene_and_sanitation_9_5_1_B':$scope.hygiene_and_sanitation_9_5_1_B, 
				'hygiene_and_sanitation_9_5_1_B_cm':$scope.hygiene_and_sanitation_9_5_1_B_cm,
				'hygiene_and_sanitation_9_6_1_text':$scope.hygiene_and_sanitation_9_6_1_text,
				'hygiene_and_sanitation_9_6_1_A':$scope.hygiene_and_sanitation_9_6_1_A, 
				'hygiene_and_sanitation_9_6_1_A_cm':$scope.hygiene_and_sanitation_9_6_1_A_cm,
				'hygiene_and_sanitation_9_6_1_B':$scope.hygiene_and_sanitation_9_6_1_B, 
				'hygiene_and_sanitation_9_6_1_B_cm':$scope.hygiene_and_sanitation_9_6_1_B_cm,
				'hygiene_and_sanitation_9_6_1_C':$scope.hygiene_and_sanitation_9_6_1_C, 
				'hygiene_and_sanitation_9_6_1_C_cm':$scope.hygiene_and_sanitation_9_6_1_C_cm,
				'safety_and_security_10_1_1_text':$scope.safety_and_security_10_1_1_text,
				'safety_and_security_10_1_1_A':$scope.safety_and_security_10_1_1_A, 
				'safety_and_security_10_1_1_A_cm':$scope.safety_and_security_10_1_1_A_cm,
				'safety_and_security_10_1_1_B':$scope.safety_and_security_10_1_1_B, 
				'safety_and_security_10_1_1_B_cm':$scope.safety_and_security_10_1_1_B_cm,
				'safety_and_security_10_1_1_C':$scope.safety_and_security_10_1_1_C, 
				'safety_and_security_10_1_1_C_cm':$scope.safety_and_security_10_1_1_C_cm,
				'safety_and_security_10_1_1_D':$scope.safety_and_security_10_1_1_D, 
				'safety_and_security_10_1_1_D_cm':$scope.safety_and_security_10_1_1_D_cm,
				'safety_and_security_10_1_1_E_a':$scope.safety_and_security_10_1_1_E_a, 
				'safety_and_security_10_1_1_E_a_cm':$scope.safety_and_security_10_1_1_E_a_cm,
				'safety_and_security_10_1_1_E_b':$scope.safety_and_security_10_1_1_E_b, 
				'safety_and_security_10_1_1_E_b_cm':$scope.safety_and_security_10_1_1_E_b_cm,
				'safety_and_security_10_1_1_E_c':$scope.safety_and_security_10_1_1_E_c, 
				'safety_and_security_10_1_1_E_c_cm':$scope.safety_and_security_10_1_1_E_c_cm,
				'safety_and_security_10_1_1_E_d':$scope.safety_and_security_10_1_1_E_d, 
				'safety_and_security_10_1_1_E_d_cm':$scope.safety_and_security_10_1_1_E_d_cm,
				'safety_and_security_10_1_1_E_e':$scope.safety_and_security_10_1_1_E_e, 
				'safety_and_security_10_1_1_E_e_cm':$scope.safety_and_security_10_1_1_E_e_cm,
				'safety_and_security_10_1_1_E_f':$scope.safety_and_security_10_1_1_E_f, 
				'safety_and_security_10_1_1_E_f_cm':$scope.safety_and_security_10_1_1_E_f_cm,
				'safety_and_security_10_1_1_E_g':$scope.safety_and_security_10_1_1_E_g, 
				'safety_and_security_10_1_1_E_g_cm':$scope.safety_and_security_10_1_1_E_g_cm,
				'safety_and_security_10_1_1_F':$scope.safety_and_security_10_1_1_F, 
				'safety_and_security_10_1_1_F_cm':$scope.safety_and_security_10_1_1_F_cm,
				'safety_and_security_10_1_1_G':$scope.safety_and_security_10_1_1_G, 
				'safety_and_security_10_1_1_G_cm':$scope.safety_and_security_10_1_1_G_cm,
				'safety_and_security_10_1_1_H':$scope.safety_and_security_10_1_1_H, 
				'safety_and_security_10_1_1_H_cm':$scope.safety_and_security_10_1_1_H_cm,
				'safety_and_security_10_1_1_I':$scope.safety_and_security_10_1_1_I, 
				'safety_and_security_10_1_1_I_cm':$scope.safety_and_security_10_1_1_I_cm,
				'safety_and_security_10_2_1_text':$scope.safety_and_security_10_2_1_text,
				'safety_and_security_10_2_1_A':$scope.safety_and_security_10_2_1_A, 
				'safety_and_security_10_2_1_A_cm':$scope.safety_and_security_10_2_1_A_cm,
				'safety_and_security_10_2_1_B':$scope.safety_and_security_10_2_1_B, 
				'safety_and_security_10_2_1_B_cm':$scope.safety_and_security_10_2_1_B_cm,
				'safety_and_security_10_3_1_text':$scope.safety_and_security_10_3_1_text,
				'safety_and_security_10_3_1_A':$scope.safety_and_security_10_3_1_A, 
				'safety_and_security_10_3_1_A_cm':$scope.safety_and_security_10_3_1_A_cm,
				'safety_and_security_10_3_1_B':$scope.safety_and_security_10_3_1_B, 
				'safety_and_security_10_3_1_B_cm':$scope.safety_and_security_10_3_1_B_cm,
				'safety_and_security_10_3_1_C':$scope.safety_and_security_10_3_1_C, 
				'safety_and_security_10_3_1_C_cm':$scope.safety_and_security_10_3_1_C_cm,
				'safety_and_security_10_3_1_D':$scope.safety_and_security_10_3_1_D, 
				'safety_and_security_10_3_1_D_cm':$scope.safety_and_security_10_3_1_D_cm,
				'safety_and_security_10_3_1_E':$scope.safety_and_security_10_3_1_E, 
				'safety_and_security_10_3_1_E_cm':$scope.safety_and_security_10_3_1_E_cm,
				'safety_and_security_10_3_1_F':$scope.safety_and_security_10_3_1_F, 
				'safety_and_security_10_3_1_F_cm':$scope.safety_and_security_10_3_1_F_cm,
				'safety_and_security_10_3_1_G':$scope.safety_and_security_10_3_1_G, 
				'safety_and_security_10_3_1_G_cm':$scope.safety_and_security_10_3_1_G_cm,
				'safety_and_security_10_3_1_H':$scope.safety_and_security_10_3_1_H, 
				'safety_and_security_10_3_1_H_cm':$scope.safety_and_security_10_3_1_H_cm,
				'safety_and_security_10_4_1_text':$scope.safety_and_security_10_4_1_text,
				'safety_and_security_10_4_1_A':$scope.safety_and_security_10_4_1_A, 
				'safety_and_security_10_4_1_A_cm':$scope.safety_and_security_10_4_1_A_cm,
				'safety_and_security_10_4_1_B':$scope.safety_and_security_10_4_1_B, 
				'safety_and_security_10_4_1_B_cm':$scope.safety_and_security_10_4_1_B_cm,
				'safety_and_security_10_4_1_C':$scope.safety_and_security_10_4_1_C, 
				'safety_and_security_10_4_1_C_cm':$scope.safety_and_security_10_4_1_C_cm,
				'safety_and_security_10_5_1_text':$scope.safety_and_security_10_5_1_text,
				'safety_and_security_10_5_1_A':$scope.safety_and_security_10_5_1_A, 
				'safety_and_security_10_5_1_A_cm':$scope.safety_and_security_10_5_1_A_cm,
				'safety_and_security_10_5_1_B':$scope.safety_and_security_10_5_1_B, 
				'safety_and_security_10_5_1_B_cm':$scope.safety_and_security_10_5_1_B_cm,
				'safety_and_security_10_5_1_C':$scope.safety_and_security_10_5_1_C, 
				'safety_and_security_10_5_1_C_cm':$scope.safety_and_security_10_5_1_C_cm,
				'safety_and_security_10_5_1_D':$scope.safety_and_security_10_5_1_D, 
				'safety_and_security_10_5_1_D_cm':$scope.safety_and_security_10_5_1_D_cm,
				'safety_and_security_10_5_1_E':$scope.safety_and_security_10_5_1_E, 
				'safety_and_security_10_5_1_E_cm':$scope.safety_and_security_10_5_1_E_cm,
				'safety_and_security_10_6_1_text':$scope.safety_and_security_10_6_1_text,
				'safety_and_security_10_6_1_A':$scope.safety_and_security_10_6_1_A, 
				'safety_and_security_10_6_1_A_cm':$scope.safety_and_security_10_6_1_A_cm,
				'sundry_services_11_1_1_text':$scope.sundry_services_11_1_1_text,
				'sundry_services_11_1_1_A':$scope.sundry_services_11_1_1_A, 
				'sundry_services_11_1_1_A_cm':$scope.sundry_services_11_1_1_A_cm,
				'sundry_services_11_1_1_B':$scope.sundry_services_11_1_1_B, 
				'sundry_services_11_1_1_B_cm':$scope.sundry_services_11_1_1_B_cm,
				'sundry_services_11_2_1_text':$scope.sundry_services_11_2_1_text,
				'sundry_services_11_2_1_A':$scope.sundry_services_11_2_1_A, 
				'sundry_services_11_2_1_A_cm':$scope.sundry_services_11_2_1_A_cm,
				'sundry_services_11_2_1_B':$scope.sundry_services_11_2_1_B, 
				'sundry_services_11_2_1_B_cm':$scope.sundry_services_11_2_1_B_cm,
				'sundry_services_11_2_1_C':$scope.sundry_services_11_2_1_C, 
				'sundry_services_11_2_1_C_cm':$scope.sundry_services_11_2_1_C_cm,
				'sundry_services_11_3_1_text':$scope.sundry_services_11_3_1_text,
				'sundry_services_11_3_1_A':$scope.sundry_services_11_3_1_A, 
				'sundry_services_11_3_1_A_cm':$scope.sundry_services_11_3_1_A_cm,
				'sundry_services_11_4_1_text':$scope.sundry_services_11_4_1_text,
				'sundry_services_11_4_1_A':$scope.sundry_services_11_4_1_A, 
				'sundry_services_11_4_1_A_cm':$scope.sundry_services_11_4_1_A_cm,
				'sundry_services_11_5_1_text':$scope.sundry_services_11_5_1_text,
				'sundry_services_11_5_1_A':$scope.sundry_services_11_5_1_A, 
				'sundry_services_11_5_1_A_cm':$scope.sundry_services_11_5_1_A_cm,
				'sundry_services_11_5_1_B':$scope.sundry_services_11_5_1_B, 
				'sundry_services_11_5_1_B_cm':$scope.sundry_services_11_5_1_B_cm,
				'sundry_services_11_6_1_text':$scope.sundry_services_11_6_1_text,
				'sundry_services_11_6_1_A':$scope.sundry_services_11_6_1_A, 
				'sundry_services_11_6_1_A_cm':$scope.sundry_services_11_6_1_A_cm,
				'human_resources_12_1_1_text':$scope.human_resources_12_1_1_text,
				'human_resources_12_1_1_A':$scope.human_resources_12_1_1_A, 
				'human_resources_12_1_1_A_cm':$scope.human_resources_12_1_1_A_cm,
				'human_resources_12_1_1_B':$scope.human_resources_12_1_1_B, 
				'human_resources_12_1_1_B_cm':$scope.human_resources_12_1_1_B_cm,
				'human_resources_12_1_1_C':$scope.human_resources_12_1_1_C, 
				'human_resources_12_1_1_C_cm':$scope.human_resources_12_1_1_C_cm,
				'human_resources_12_1_1_D':$scope.human_resources_12_1_1_D, 
				'human_resources_12_1_1_D_cm':$scope.human_resources_12_1_1_D_cm,
				'human_resources_12_1_1_E_a':$scope.human_resources_12_1_1_E_a, 
				'human_resources_12_1_1_E_a_cm':$scope.human_resources_12_1_1_E_a_cm,
				'human_resources_12_1_1_E_b':$scope.human_resources_12_1_1_E_b, 
				'human_resources_12_1_1_E_b_cm':$scope.human_resources_12_1_1_E_b_cm,
				'human_resources_12_1_1_E_c':$scope.human_resources_12_1_1_E_c, 
				'human_resources_12_1_1_E_c_cm':$scope.human_resources_12_1_1_E_c_cm,
				'human_resources_12_1_1_E_d':$scope.human_resources_12_1_1_E_d, 
				'human_resources_12_1_1_E_d_cm':$scope.human_resources_12_1_1_E_d_cm,
				'human_resources_12_1_1_E_e':$scope.human_resources_12_1_1_E_e, 
				'human_resources_12_1_1_E_e_cm':$scope.human_resources_12_1_1_E_e_cm,
				'human_resources_12_2_1_text':$scope.human_resources_12_2_1_text,
				'human_resources_12_2_1_A_a':$scope.human_resources_12_2_1_A_a, 
				'human_resources_12_2_1_A_a_cm':$scope.human_resources_12_2_1_A_a_cm,
				'human_resources_12_2_1_A_b':$scope.human_resources_12_2_1_A_b, 
				'human_resources_12_2_1_A_b_cm':$scope.human_resources_12_2_1_A_b_cm,
				'human_resources_12_2_1_A_c':$scope.human_resources_12_2_1_A_c, 
				'human_resources_12_2_1_A_c_cm':$scope.human_resources_12_2_1_A_c_cm,
				'human_resources_12_2_1_B_a':$scope.human_resources_12_2_1_B_a, 
				'human_resources_12_2_1_B_a_cm':$scope.human_resources_12_2_1_B_a_cm,
				'human_resources_12_2_1_B_b':$scope.human_resources_12_2_1_B_b, 
				'human_resources_12_2_1_B_b_cm':$scope.human_resources_12_2_1_B_b_cm,
				'human_resources_12_2_1_B_c':$scope.human_resources_12_2_1_B_c, 
				'human_resources_12_2_1_B_c_cm':$scope.human_resources_12_2_1_B_c_cm,
				'human_resources_12_3_1_text':$scope.human_resources_12_3_1_text,
				'human_resources_12_3_1_A':$scope.human_resources_12_3_1_A, 
				'human_resources_12_3_1_A_cm':$scope.human_resources_12_3_1_A_cm,
				'human_resources_12_4_1_text':$scope.human_resources_12_4_1_text,
				'human_resources_12_4_1_A':$scope.human_resources_12_4_1_A, 
				'human_resources_12_4_1_A_cm':$scope.human_resources_12_4_1_A_cm,
				'human_resources_12_4_1_B':$scope.human_resources_12_4_1_B, 
				'human_resources_12_4_1_B_cm':$scope.human_resources_12_4_1_B_cm,
				'human_resources_12_4_1_C':$scope.human_resources_12_4_1_C, 
				'human_resources_12_4_1_C_cm':$scope.human_resources_12_4_1_C_cm,
				'human_resources_12_4_1_D':$scope.human_resources_12_4_1_D, 
				'human_resources_12_4_1_D_cm':$scope.human_resources_12_4_1_D_cm,
				'general_13_1_1_text':$scope.general_13_1_1_text,
				'general_13_1_1_A_a':$scope.general_13_1_1_A_a, 
				'general_13_1_1_A_a_cm':$scope.general_13_1_1_A_a_cm,
				'general_13_1_1_A_b':$scope.general_13_1_1_A_b, 
				'general_13_1_1_A_b_cm':$scope.general_13_1_1_A_b_cm,
				'general_13_1_1_A_c':$scope.general_13_1_1_A_c, 
				'general_13_1_1_A_c_cm':$scope.general_13_1_1_A_c_cm,
								
								
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
			$scope.show_asteric_restaurant = ''; 
			$scope.status_success_message = 'Saved!';
			$scope.action = 'edit_record';
			$scope.assessment_id = data.assessment_id;
			$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
			$scope.fetchData_after_changes(); //direct access from assessment panel
			$scope.fetch_assessment_sheets_links();			
			$scope.fetchStatus();
				$timeout(function()
				{ 
					if($scope.from_save_restaurant =='save_and_exit')
					{ 
					$scope.close_assessment_sheet_for_restaurant(); $scope.close_funika_kurasa_with_status(); $scope.from_save_restaurant = ''; 
					}
					else
					{ 
					$scope.close_funika_kurasa_with_status();
					}
				}, 3000);
			}

		});		
	};
	

	$scope.futa_radio_check_values_restaurant = function(){
		//LOCATION 1.0
			//1.1
				//1.1.1
				$scope.location_1_1_1_text = '';
				$scope.location_1_1_1_A='';
				$scope.location_1_1_1_A_cm ='';
				$scope.location_1_1_2_text = '';
				$scope.location_1_1_2_A='';
				$scope.location_1_1_2_A_cm ='';
				$scope.location_1_1_3_text = '';
				$scope.location_1_1_3_A='';
				$scope.location_1_1_3_A_cm ='';
				$scope.location_1_1_3_B='';
				$scope.location_1_1_3_B_cm ='';
				$scope.location_1_1_3_C='';
				$scope.location_1_1_3_C_cm ='';
				$scope.location_1_1_4_text = '';
				$scope.location_1_1_4_A='';
				$scope.location_1_1_4_A_cm ='';
				$scope.location_1_1_5_text = '';
				$scope.location_1_1_5_A='';
				$scope.location_1_1_5_A_cm ='';
				$scope.location_1_1_6_text = '';
				$scope.location_1_1_6_A='';
				$scope.location_1_1_6_A_cm ='';
				$scope.building_2_1_1_text = '';
				$scope.building_2_1_1_A='';
				$scope.building_2_1_1_A_cm ='';
				$scope.building_2_1_2_text = '';
				$scope.building_2_1_2_A='';
				$scope.building_2_1_2_A_cm ='';
				$scope.building_2_2_1_text = '';
				$scope.building_2_2_1_A='';
				$scope.building_2_2_1_A_cm ='';
				$scope.building_2_2_1_B='';
				$scope.building_2_2_1_B_cm ='';
				$scope.building_2_2_2_text = '';
				$scope.building_2_2_2_A='';
				$scope.building_2_2_2_A_cm ='';
				$scope.building_2_2_2_B='';
				$scope.building_2_2_2_B_cm ='';
				$scope.building_2_2_2_C='';
				$scope.building_2_2_2_C_cm ='';
				$scope.building_2_2_2_D='';
				$scope.building_2_2_2_D_cm ='';
				$scope.building_2_2_2_E='';
				$scope.building_2_2_2_E_cm ='';
				$scope.building_2_2_2_F='';
				$scope.building_2_2_2_F_cm ='';
				$scope.building_2_3_1_text = '';
				$scope.building_2_3_1_A='';
				$scope.building_2_3_1_A_cm ='';
				$scope.reception_3_1_1_text = '';
				$scope.reception_3_1_1_A='';
				$scope.reception_3_1_1_A_cm ='';
				$scope.reception_3_1_1_B='';
				$scope.reception_3_1_1_B_cm ='';
				$scope.reception_3_1_1_C='';
				$scope.reception_3_1_1_C_cm ='';
				$scope.reception_3_1_1_D='';
				$scope.reception_3_1_1_D_cm ='';
				$scope.reception_3_1_1_E='';
				$scope.reception_3_1_1_E_cm ='';
				$scope.dining_area_4_1_1_text = '';
				$scope.dining_area_4_1_1_A='';
				$scope.dining_area_4_1_1_A_cm ='';
				$scope.dining_area_4_1_1_B='';
				$scope.dining_area_4_1_1_B_cm ='';
				$scope.dining_area_4_1_1_C='';
				$scope.dining_area_4_1_1_C_cm ='';
				$scope.dining_area_4_1_1_D='';
				$scope.dining_area_4_1_1_D_cm ='';
				$scope.dining_area_4_1_1_E='';
				$scope.dining_area_4_1_1_E_cm ='';
				$scope.dining_area_4_1_1_F='';
				$scope.dining_area_4_1_1_F_cm ='';
				$scope.dining_area_4_1_1_G='';
				$scope.dining_area_4_1_1_G_cm ='';
				$scope.dining_area_4_1_1_H='';
				$scope.dining_area_4_1_1_H_cm ='';
				$scope.dining_area_4_1_1_I='';
				$scope.dining_area_4_1_1_I_cm ='';
				$scope.dining_area_4_1_1_J='';
				$scope.dining_area_4_1_1_J_cm ='';
				$scope.dining_area_4_1_1_K='';
				$scope.dining_area_4_1_1_K_cm ='';
				$scope.dining_area_4_1_1_L='';
				$scope.dining_area_4_1_1_L_cm ='';
				$scope.dining_area_4_2_1_text = '';
				$scope.dining_area_4_2_1_A='';
				$scope.dining_area_4_2_1_A_cm ='';
				$scope.dining_area_4_2_1_B='';
				$scope.dining_area_4_2_1_B_cm ='';
				$scope.dining_area_4_2_1_C='';
				$scope.dining_area_4_2_1_C_cm ='';
				$scope.dining_area_4_2_1_D='';
				$scope.dining_area_4_2_1_D_cm ='';
				$scope.dining_area_4_3_1_text = '';
				$scope.dining_area_4_3_1_A='';
				$scope.dining_area_4_3_1_A_cm ='';
				$scope.dining_area_4_3_1_B='';
				$scope.dining_area_4_3_1_B_cm ='';
				$scope.dining_area_4_3_1_C='';
				$scope.dining_area_4_3_1_C_cm ='';
				$scope.dining_area_4_4_1_text = '';
				$scope.dining_area_4_4_1_A='';
				$scope.dining_area_4_4_1_A_cm ='';
				$scope.dining_area_4_4_1_B='';
				$scope.dining_area_4_4_1_B_cm ='';
				$scope.dining_area_4_4_1_C='';
				$scope.dining_area_4_4_1_C_cm ='';
				$scope.dining_area_4_4_1_D='';
				$scope.dining_area_4_4_1_D_cm ='';
				$scope.dining_area_4_4_1_E='';
				$scope.dining_area_4_4_1_E_cm ='';
				$scope.dining_area_4_4_1_F='';
				$scope.dining_area_4_4_1_F_cm ='';
				$scope.service_5_1_1_text = '';
				$scope.service_5_1_1_A='';
				$scope.service_5_1_1_A_cm ='';
				$scope.service_5_1_1_B='';
				$scope.service_5_1_1_B_cm ='';
				$scope.service_5_1_1_C='';
				$scope.service_5_1_1_C_cm ='';
				$scope.service_5_1_1_D='';
				$scope.service_5_1_1_D_cm ='';
				$scope.service_5_1_1_E='';
				$scope.service_5_1_1_E_cm ='';
				$scope.service_5_1_1_F='';
				$scope.service_5_1_1_F_cm ='';
				$scope.service_5_1_1_G='';
				$scope.service_5_1_1_G_cm ='';
				$scope.service_5_1_1_H='';
				$scope.service_5_1_1_H_cm ='';
				$scope.service_5_1_1_I='';
				$scope.service_5_1_1_I_cm ='';
				$scope.service_5_1_1_J='';
				$scope.service_5_1_1_J_cm ='';
				$scope.service_5_1_1_K_a='';
				$scope.service_5_1_1_K_a_cm ='';
				$scope.service_5_1_1_K_b='';
				$scope.service_5_1_1_K_b_cm ='';
				$scope.service_5_1_1_K_c='';
				$scope.service_5_1_1_K_c_cm ='';
				$scope.service_5_2_1_text = '';
				$scope.service_5_2_1_A='';
				$scope.service_5_2_1_A_cm ='';
				$scope.service_5_2_1_B='';
				$scope.service_5_2_1_B_cm ='';
				$scope.service_5_2_1_C='';
				$scope.service_5_2_1_C_cm ='';
				$scope.service_5_2_1_D='';
				$scope.service_5_2_1_D_cm ='';
				$scope.service_5_2_1_E_a='';
				$scope.service_5_2_1_E_a_cm ='';
				$scope.service_5_2_1_E_b='';
				$scope.service_5_2_1_E_b_cm ='';
				$scope.service_5_2_1_E_c='';
				$scope.service_5_2_1_E_c_cm ='';
				$scope.service_5_2_1_E_d='';
				$scope.service_5_2_1_E_d_cm ='';
				$scope.service_5_2_1_F='';
				$scope.service_5_2_1_F_cm ='';
				$scope.service_5_2_1_G_a='';
				$scope.service_5_2_1_G_a_cm ='';
				$scope.service_5_2_1_G_b='';
				$scope.service_5_2_1_G_b_cm ='';
				$scope.service_5_2_1_G_c='';
				$scope.service_5_2_1_G_c_cm ='';
				$scope.service_5_2_1_H='';
				$scope.service_5_2_1_H_cm ='';
				$scope.service_5_2_1_I='';
				$scope.service_5_2_1_I_cm ='';
				$scope.service_5_2_1_J='';
				$scope.service_5_2_1_J_cm ='';
				$scope.service_5_3_1_text = '';
				$scope.service_5_3_1_A='';
				$scope.service_5_3_1_A_cm ='';
				$scope.service_5_3_1_B='';
				$scope.service_5_3_1_B_cm ='';
				$scope.entertainment_6_1_1_text = '';
				$scope.entertainment_6_1_1_A='';
				$scope.entertainment_6_1_1_A_cm ='';
				$scope.entertainment_6_1_1_B='';
				$scope.entertainment_6_1_1_B_cm ='';
				$scope.entertainment_6_1_1_C='';
				$scope.entertainment_6_1_1_C_cm ='';
				$scope.bar_7_1_1_text = '';
				$scope.bar_7_1_1_A='';
				$scope.bar_7_1_1_A_cm ='';
				$scope.bar_7_1_1_B_a='';
				$scope.bar_7_1_1_B_a_cm ='';
				$scope.bar_7_1_1_B_b='';
				$scope.bar_7_1_1_B_b_cm ='';
				$scope.bar_7_1_1_B_c='';
				$scope.bar_7_1_1_B_c_cm ='';
				$scope.bar_7_1_1_C='';
				$scope.bar_7_1_1_C_cm ='';
				$scope.bar_7_1_1_D='';
				$scope.bar_7_1_1_D_cm ='';
				$scope.bar_7_1_1_E='';
				$scope.bar_7_1_1_E_cm ='';
				$scope.bar_7_2_1_text = '';
				$scope.bar_7_2_1_A='';
				$scope.bar_7_2_1_A_cm ='';
				$scope.bar_7_2_1_B='';
				$scope.bar_7_2_1_B_cm ='';
				$scope.bar_7_2_1_C='';
				$scope.bar_7_2_1_C_cm ='';
				$scope.bar_7_2_1_D='';
				$scope.bar_7_2_1_D_cm ='';
				$scope.bar_7_2_2_text = '';
				$scope.bar_7_2_2_A='';
				$scope.bar_7_2_2_A_cm ='';
				$scope.bar_7_2_2_B='';
				$scope.bar_7_2_2_B_cm ='';
				$scope.bar_7_2_2_C='';
				$scope.bar_7_2_2_C_cm ='';
				$scope.bar_7_2_2_D='';
				$scope.bar_7_2_2_D_cm ='';
				$scope.bar_7_2_2_E='';
				$scope.bar_7_2_2_E_cm ='';
				$scope.bar_7_2_2_F='';
				$scope.bar_7_2_2_F_cm ='';
				$scope.bar_7_3_1_text = '';
				$scope.bar_7_3_1_A='';
				$scope.bar_7_3_1_A_cm ='';
				$scope.bar_7_3_1_B='';
				$scope.bar_7_3_1_B_cm ='';
				$scope.bar_7_3_1_C='';
				$scope.bar_7_3_1_C_cm ='';
				$scope.bar_7_3_1_D='';
				$scope.bar_7_3_1_D_cm ='';
				$scope.bar_7_3_1_E='';
				$scope.bar_7_3_1_E_cm ='';
				$scope.bar_7_3_1_F='';
				$scope.bar_7_3_1_F_cm ='';
				$scope.bar_7_4_1_text = '';
				$scope.bar_7_4_1_A='';
				$scope.bar_7_4_1_A_cm ='';
				$scope.bar_7_4_1_B='';
				$scope.bar_7_4_1_B_cm ='';
				$scope.bar_7_4_1_C='';
				$scope.bar_7_4_1_C_cm ='';
				$scope.bar_7_4_1_D='';
				$scope.bar_7_4_1_D_cm ='';
				$scope.bar_7_4_1_E_a='';
				$scope.bar_7_4_1_E_a_cm ='';
				$scope.bar_7_4_1_E_b='';
				$scope.bar_7_4_1_E_b_cm ='';
				$scope.bar_7_4_1_E_c='';
				$scope.bar_7_4_1_E_c_cm ='';
				$scope.bar_7_4_1_E_d='';
				$scope.bar_7_4_1_E_d_cm ='';
				$scope.bar_7_4_1_E_e='';
				$scope.bar_7_4_1_E_e_cm ='';
				$scope.bar_7_4_1_E_f='';
				$scope.bar_7_4_1_E_f_cm ='';
				$scope.bar_7_4_1_E_g='';
				$scope.bar_7_4_1_E_g_cm ='';
				$scope.bar_7_4_1_E_h='';
				$scope.bar_7_4_1_E_h_cm ='';
				$scope.bar_7_4_1_F='';
				$scope.bar_7_4_1_F_cm ='';
				$scope.bar_7_4_1_G='';
				$scope.bar_7_4_1_G_cm ='';
				$scope.bar_7_4_1_H='';
				$scope.bar_7_4_1_H_cm ='';
				$scope.bar_7_4_1_I='';
				$scope.bar_7_4_1_I_cm ='';
				$scope.bar_7_5_1_text = '';
				$scope.bar_7_5_1_A='';
				$scope.bar_7_5_1_A_cm ='';
				$scope.bar_7_5_1_B='';
				$scope.bar_7_5_1_B_cm ='';
				$scope.bar_7_5_1_C='';
				$scope.bar_7_5_1_C_cm ='';
				$scope.bar_7_6_1_text = '';
				$scope.bar_7_6_1_A='';
				$scope.bar_7_6_1_A_cm ='';
				$scope.bar_7_6_1_B='';
				$scope.bar_7_6_1_B_cm ='';
				$scope.bar_7_6_1_C='';
				$scope.bar_7_6_1_C_cm ='';
				$scope.bar_7_7_1_text = '';
				$scope.bar_7_7_1_A='';
				$scope.bar_7_7_1_A_cm ='';
				$scope.bar_7_7_1_B='';
				$scope.bar_7_7_1_B_cm ='';
				$scope.bar_7_7_1_C='';
				$scope.bar_7_7_1_C_cm ='';
				$scope.kitchen_8_1_1_text = '';
				$scope.kitchen_8_1_1_A='';
				$scope.kitchen_8_1_1_A_cm ='';
				$scope.kitchen_8_2_1_text = '';
				$scope.kitchen_8_2_1_A='';
				$scope.kitchen_8_2_1_A_cm ='';
				$scope.kitchen_8_2_1_B='';
				$scope.kitchen_8_2_1_B_cm ='';
				$scope.kitchen_8_2_1_C='';
				$scope.kitchen_8_2_1_C_cm ='';
				$scope.kitchen_8_3_1_text = '';
				$scope.kitchen_8_3_1_A='';
				$scope.kitchen_8_3_1_A_cm ='';
				$scope.kitchen_8_3_1_B='';
				$scope.kitchen_8_3_1_B_cm ='';
				$scope.kitchen_8_3_1_C='';
				$scope.kitchen_8_3_1_C_cm ='';
				$scope.kitchen_8_4_1_text = '';
				$scope.kitchen_8_4_1_A='';
				$scope.kitchen_8_4_1_A_cm ='';
				$scope.kitchen_8_4_2_text = '';
				$scope.kitchen_8_4_2_A='';
				$scope.kitchen_8_4_2_A_cm ='';
				$scope.kitchen_8_4_2_B='';
				$scope.kitchen_8_4_2_B_cm ='';
				$scope.kitchen_8_4_2_C='';
				$scope.kitchen_8_4_2_C_cm ='';
				$scope.kitchen_8_5_1_text = '';
				$scope.kitchen_8_5_1_A='';
				$scope.kitchen_8_5_1_A_cm ='';
				$scope.kitchen_8_5_1_B='';
				$scope.kitchen_8_5_1_B_cm ='';
				$scope.kitchen_8_5_1_C='';
				$scope.kitchen_8_5_1_C_cm ='';
				$scope.kitchen_8_5_1_D='';
				$scope.kitchen_8_5_1_D_cm ='';
				$scope.kitchen_8_5_1_E='';
				$scope.kitchen_8_5_1_E_cm ='';
				$scope.kitchen_8_5_1_F='';
				$scope.kitchen_8_5_1_F_cm ='';
				$scope.kitchen_8_5_1_G='';
				$scope.kitchen_8_5_1_G_cm ='';
				$scope.kitchen_8_5_1_H='';
				$scope.kitchen_8_5_1_H_cm ='';
				$scope.kitchen_8_5_1_I='';
				$scope.kitchen_8_5_1_I_cm ='';
				$scope.kitchen_8_6_1_text = '';
				$scope.kitchen_8_6_1_A='';
				$scope.kitchen_8_6_1_A_cm ='';
				$scope.kitchen_8_6_1_B='';
				$scope.kitchen_8_6_1_B_cm ='';
				$scope.kitchen_8_6_1_C='';
				$scope.kitchen_8_6_1_C_cm ='';
				$scope.kitchen_8_6_1_D='';
				$scope.kitchen_8_6_1_D_cm ='';
				$scope.kitchen_8_6_1_E='';
				$scope.kitchen_8_6_1_E_cm ='';
				$scope.kitchen_8_6_1_F='';
				$scope.kitchen_8_6_1_F_cm ='';
				$scope.kitchen_8_6_1_G='';
				$scope.kitchen_8_6_1_G_cm ='';
				$scope.kitchen_8_7_1_text = '';
				$scope.kitchen_8_7_1_A='';
				$scope.kitchen_8_7_1_A_cm ='';
				$scope.kitchen_8_7_1_B='';
				$scope.kitchen_8_7_1_B_cm ='';
				$scope.kitchen_8_7_1_C='';
				$scope.kitchen_8_7_1_C_cm ='';
				$scope.kitchen_8_7_1_D='';
				$scope.kitchen_8_7_1_D_cm ='';
				$scope.kitchen_8_7_1_E='';
				$scope.kitchen_8_7_1_E_cm ='';
				$scope.kitchen_8_8_1_text = '';
				$scope.kitchen_8_8_1_A='';
				$scope.kitchen_8_8_1_A_cm ='';
				$scope.kitchen_8_8_1_B='';
				$scope.kitchen_8_8_1_B_cm ='';
				$scope.kitchen_8_9_1_text = '';
				$scope.kitchen_8_9_1_A='';
				$scope.kitchen_8_9_1_A_cm ='';
				$scope.kitchen_8_9_1_B='';
				$scope.kitchen_8_9_1_B_cm ='';
				$scope.kitchen_8_9_1_C_a='';
				$scope.kitchen_8_9_1_C_a_cm ='';
				$scope.kitchen_8_9_1_C_b='';
				$scope.kitchen_8_9_1_C_b_cm ='';
				$scope.kitchen_8_9_1_D='';
				$scope.kitchen_8_9_1_D_cm ='';
				$scope.kitchen_8_9_1_E='';
				$scope.kitchen_8_9_1_E_cm ='';
				$scope.kitchen_8_9_1_F='';
				$scope.kitchen_8_9_1_F_cm ='';
				$scope.kitchen_8_9_1_G='';
				$scope.kitchen_8_9_1_G_cm ='';
				$scope.kitchen_8_10_1_text = '';
				$scope.kitchen_8_10_1_A='';
				$scope.kitchen_8_10_1_A_cm ='';
				$scope.kitchen_8_10_1_B='';
				$scope.kitchen_8_10_1_B_cm ='';
				$scope.kitchen_8_10_1_C='';
				$scope.kitchen_8_10_1_C_cm ='';
				$scope.kitchen_8_11_1_text = '';
				$scope.kitchen_8_11_1_A='';
				$scope.kitchen_8_11_1_A_cm ='';
				$scope.kitchen_8_11_1_B='';
				$scope.kitchen_8_11_1_B_cm ='';
				$scope.kitchen_8_11_1_C='';
				$scope.kitchen_8_11_1_C_cm ='';
				$scope.kitchen_8_11_1_D='';
				$scope.kitchen_8_11_1_D_cm ='';
				$scope.kitchen_8_11_1_E='';
				$scope.kitchen_8_11_1_E_cm ='';
				$scope.kitchen_8_12_1_text = '';
				$scope.kitchen_8_12_1_A_a='';
				$scope.kitchen_8_12_1_A_a_cm ='';
				$scope.kitchen_8_12_1_A_b='';
				$scope.kitchen_8_12_1_A_b_cm ='';
				$scope.kitchen_8_12_1_A_c='';
				$scope.kitchen_8_12_1_A_c_cm ='';
				$scope.kitchen_8_12_1_A_d='';
				$scope.kitchen_8_12_1_A_d_cm ='';
				$scope.kitchen_8_12_1_B='';
				$scope.kitchen_8_12_1_B_cm ='';
				$scope.kitchen_8_12_1_C='';
				$scope.kitchen_8_12_1_C_cm ='';
				$scope.kitchen_8_12_1_D='';
				$scope.kitchen_8_12_1_D_cm ='';
				$scope.kitchen_8_12_1_E='';
				$scope.kitchen_8_12_1_E_cm ='';
				$scope.kitchen_8_12_1_F='';
				$scope.kitchen_8_12_1_F_cm ='';
				$scope.kitchen_8_12_1_G='';
				$scope.kitchen_8_12_1_G_cm ='';
				$scope.kitchen_8_13_1_text = '';
				$scope.kitchen_8_13_1_A_a='';
				$scope.kitchen_8_13_1_A_a_cm ='';
				$scope.kitchen_8_13_1_A_b='';
				$scope.kitchen_8_13_1_A_b_cm ='';
				$scope.kitchen_8_13_1_A_c='';
				$scope.kitchen_8_13_1_A_c_cm ='';
				$scope.kitchen_8_13_1_B='';
				$scope.kitchen_8_13_1_B_cm ='';
				$scope.kitchen_8_13_1_C_a='';
				$scope.kitchen_8_13_1_C_a_cm ='';
				$scope.kitchen_8_13_1_C_b='';
				$scope.kitchen_8_13_1_C_b_cm ='';
				$scope.kitchen_8_13_1_C_c='';
				$scope.kitchen_8_13_1_C_c_cm ='';
				$scope.kitchen_8_13_1_C_d='';
				$scope.kitchen_8_13_1_C_d_cm ='';
				$scope.kitchen_8_13_1_C_e='';
				$scope.kitchen_8_13_1_C_e_cm ='';
				$scope.kitchen_8_13_1_D_a='';
				$scope.kitchen_8_13_1_D_a_cm ='';
				$scope.kitchen_8_13_1_D_b='';
				$scope.kitchen_8_13_1_D_b_cm ='';
				$scope.kitchen_8_13_1_E='';
				$scope.kitchen_8_13_1_E_cm ='';
				$scope.kitchen_8_13_1_F='';
				$scope.kitchen_8_13_1_F_cm ='';
				$scope.kitchen_8_14_1_text = '';
				$scope.kitchen_8_14_1_A='';
				$scope.kitchen_8_14_1_A_cm ='';
				$scope.kitchen_8_14_1_B='';
				$scope.kitchen_8_14_1_B_cm ='';
				$scope.kitchen_8_14_1_C='';
				$scope.kitchen_8_14_1_C_cm ='';
				$scope.kitchen_8_14_1_D='';
				$scope.kitchen_8_14_1_D_cm ='';
				$scope.kitchen_8_14_1_E='';
				$scope.kitchen_8_14_1_E_cm ='';
				$scope.kitchen_8_14_1_F='';
				$scope.kitchen_8_14_1_F_cm ='';
				$scope.kitchen_8_14_1_G='';
				$scope.kitchen_8_14_1_G_cm ='';
				$scope.kitchen_8_14_1_H='';
				$scope.kitchen_8_14_1_H_cm ='';
				$scope.kitchen_8_14_1_I='';
				$scope.kitchen_8_14_1_I_cm ='';
				$scope.kitchen_8_14_1_J='';
				$scope.kitchen_8_14_1_J_cm ='';
				$scope.kitchen_8_14_1_K='';
				$scope.kitchen_8_14_1_K_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_text = '';
				$scope.hygiene_and_sanitation_9_1_1_A='';
				$scope.hygiene_and_sanitation_9_1_1_A_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_B='';
				$scope.hygiene_and_sanitation_9_1_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_C='';
				$scope.hygiene_and_sanitation_9_1_1_C_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_a='';
				$scope.hygiene_and_sanitation_9_1_1_D_a_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_b='';
				$scope.hygiene_and_sanitation_9_1_1_D_b_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_c='';
				$scope.hygiene_and_sanitation_9_1_1_D_c_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_d='';
				$scope.hygiene_and_sanitation_9_1_1_D_d_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_e='';
				$scope.hygiene_and_sanitation_9_1_1_D_e_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_D_f='';
				$scope.hygiene_and_sanitation_9_1_1_D_f_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_E='';
				$scope.hygiene_and_sanitation_9_1_1_E_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_F='';
				$scope.hygiene_and_sanitation_9_1_1_F_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_G='';
				$scope.hygiene_and_sanitation_9_1_1_G_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_H='';
				$scope.hygiene_and_sanitation_9_1_1_H_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_I_a='';
				$scope.hygiene_and_sanitation_9_1_1_I_a_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_I_b='';
				$scope.hygiene_and_sanitation_9_1_1_I_b_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_I_c='';
				$scope.hygiene_and_sanitation_9_1_1_I_c_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_I_d='';
				$scope.hygiene_and_sanitation_9_1_1_I_d_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_I_e='';
				$scope.hygiene_and_sanitation_9_1_1_I_e_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_J='';
				$scope.hygiene_and_sanitation_9_1_1_J_cm ='';
				$scope.hygiene_and_sanitation_9_1_1_K='';
				$scope.hygiene_and_sanitation_9_1_1_K_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_text = '';
				$scope.hygiene_and_sanitation_9_2_1_A='';
				$scope.hygiene_and_sanitation_9_2_1_A_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_B='';
				$scope.hygiene_and_sanitation_9_2_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_C='';
				$scope.hygiene_and_sanitation_9_2_1_C_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_D='';
				$scope.hygiene_and_sanitation_9_2_1_D_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_a='';
				$scope.hygiene_and_sanitation_9_2_1_E_a_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_b='';
				$scope.hygiene_and_sanitation_9_2_1_E_b_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_c='';
				$scope.hygiene_and_sanitation_9_2_1_E_c_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_d='';
				$scope.hygiene_and_sanitation_9_2_1_E_d_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_e='';
				$scope.hygiene_and_sanitation_9_2_1_E_e_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_f='';
				$scope.hygiene_and_sanitation_9_2_1_E_f_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_g='';
				$scope.hygiene_and_sanitation_9_2_1_E_g_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_h='';
				$scope.hygiene_and_sanitation_9_2_1_E_h_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_E_i='';
				$scope.hygiene_and_sanitation_9_2_1_E_i_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_F='';
				$scope.hygiene_and_sanitation_9_2_1_F_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_G='';
				$scope.hygiene_and_sanitation_9_2_1_G_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_H_a='';
				$scope.hygiene_and_sanitation_9_2_1_H_a_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_H_b='';
				$scope.hygiene_and_sanitation_9_2_1_H_b_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_H_c='';
				$scope.hygiene_and_sanitation_9_2_1_H_c_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_H_d='';
				$scope.hygiene_and_sanitation_9_2_1_H_d_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_I='';
				$scope.hygiene_and_sanitation_9_2_1_I_cm ='';
				$scope.hygiene_and_sanitation_9_2_1_J='';
				$scope.hygiene_and_sanitation_9_2_1_J_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_text = '';
				$scope.hygiene_and_sanitation_9_3_1_A='';
				$scope.hygiene_and_sanitation_9_3_1_A_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_B='';
				$scope.hygiene_and_sanitation_9_3_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_C='';
				$scope.hygiene_and_sanitation_9_3_1_C_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_D='';
				$scope.hygiene_and_sanitation_9_3_1_D_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_E='';
				$scope.hygiene_and_sanitation_9_3_1_E_cm ='';
				$scope.hygiene_and_sanitation_9_3_1_F='';
				$scope.hygiene_and_sanitation_9_3_1_F_cm ='';
				$scope.hygiene_and_sanitation_9_4_1_text = '';
				$scope.hygiene_and_sanitation_9_4_1_A='';
				$scope.hygiene_and_sanitation_9_4_1_A_cm ='';
				$scope.hygiene_and_sanitation_12_4_1_B='';
				$scope.hygiene_and_sanitation_12_4_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_4_1_C='';
				$scope.hygiene_and_sanitation_9_4_1_C_cm ='';
				$scope.hygiene_and_sanitation_9_5_1_text = '';
				$scope.hygiene_and_sanitation_9_5_1_A='';
				$scope.hygiene_and_sanitation_9_5_1_A_cm ='';
				$scope.hygiene_and_sanitation_9_5_1_B='';
				$scope.hygiene_and_sanitation_9_5_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_6_1_text = '';
				$scope.hygiene_and_sanitation_9_6_1_A='';
				$scope.hygiene_and_sanitation_9_6_1_A_cm ='';
				$scope.hygiene_and_sanitation_9_6_1_B='';
				$scope.hygiene_and_sanitation_9_6_1_B_cm ='';
				$scope.hygiene_and_sanitation_9_6_1_C='';
				$scope.hygiene_and_sanitation_9_6_1_C_cm ='';
				$scope.safety_and_security_10_1_1_text = '';
				$scope.safety_and_security_10_1_1_A='';
				$scope.safety_and_security_10_1_1_A_cm ='';
				$scope.safety_and_security_10_1_1_B='';
				$scope.safety_and_security_10_1_1_B_cm ='';
				$scope.safety_and_security_10_1_1_C='';
				$scope.safety_and_security_10_1_1_C_cm ='';
				$scope.safety_and_security_10_1_1_D='';
				$scope.safety_and_security_10_1_1_D_cm ='';
				$scope.safety_and_security_10_1_1_E_a='';
				$scope.safety_and_security_10_1_1_E_a_cm ='';
				$scope.safety_and_security_10_1_1_E_b='';
				$scope.safety_and_security_10_1_1_E_b_cm ='';
				$scope.safety_and_security_10_1_1_E_c='';
				$scope.safety_and_security_10_1_1_E_c_cm ='';
				$scope.safety_and_security_10_1_1_E_d='';
				$scope.safety_and_security_10_1_1_E_d_cm ='';
				$scope.safety_and_security_10_1_1_E_e='';
				$scope.safety_and_security_10_1_1_E_e_cm ='';
				$scope.safety_and_security_10_1_1_E_f='';
				$scope.safety_and_security_10_1_1_E_f_cm ='';
				$scope.safety_and_security_10_1_1_E_g='';
				$scope.safety_and_security_10_1_1_E_g_cm ='';
				$scope.safety_and_security_10_1_1_F='';
				$scope.safety_and_security_10_1_1_F_cm ='';
				$scope.safety_and_security_10_1_1_G='';
				$scope.safety_and_security_10_1_1_G_cm ='';
				$scope.safety_and_security_10_1_1_H='';
				$scope.safety_and_security_10_1_1_H_cm ='';
				$scope.safety_and_security_10_1_1_I='';
				$scope.safety_and_security_10_1_1_I_cm ='';
				$scope.safety_and_security_10_2_1_text = '';
				$scope.safety_and_security_10_2_1_A='';
				$scope.safety_and_security_10_2_1_A_cm ='';
				$scope.safety_and_security_10_2_1_B='';
				$scope.safety_and_security_10_2_1_B_cm ='';
				$scope.safety_and_security_10_3_1_text = '';
				$scope.safety_and_security_10_3_1_A='';
				$scope.safety_and_security_10_3_1_A_cm ='';
				$scope.safety_and_security_10_3_1_B='';
				$scope.safety_and_security_10_3_1_B_cm ='';
				$scope.safety_and_security_10_3_1_C='';
				$scope.safety_and_security_10_3_1_C_cm ='';
				$scope.safety_and_security_10_3_1_D='';
				$scope.safety_and_security_10_3_1_D_cm ='';
				$scope.safety_and_security_10_3_1_E='';
				$scope.safety_and_security_10_3_1_E_cm ='';
				$scope.safety_and_security_10_3_1_F='';
				$scope.safety_and_security_10_3_1_F_cm ='';
				$scope.safety_and_security_10_3_1_G='';
				$scope.safety_and_security_10_3_1_G_cm ='';
				$scope.safety_and_security_10_3_1_H='';
				$scope.safety_and_security_10_3_1_H_cm ='';
				$scope.safety_and_security_10_4_1_text = '';
				$scope.safety_and_security_10_4_1_A='';
				$scope.safety_and_security_10_4_1_A_cm ='';
				$scope.safety_and_security_10_4_1_B='';
				$scope.safety_and_security_10_4_1_B_cm ='';
				$scope.safety_and_security_10_4_1_C='';
				$scope.safety_and_security_10_4_1_C_cm ='';
				$scope.safety_and_security_10_5_1_text = '';
				$scope.safety_and_security_10_5_1_A='';
				$scope.safety_and_security_10_5_1_A_cm ='';
				$scope.safety_and_security_10_5_1_B='';
				$scope.safety_and_security_10_5_1_B_cm ='';
				$scope.safety_and_security_10_5_1_C='';
				$scope.safety_and_security_10_5_1_C_cm ='';
				$scope.safety_and_security_10_5_1_D='';
				$scope.safety_and_security_10_5_1_D_cm ='';
				$scope.safety_and_security_10_5_1_E='';
				$scope.safety_and_security_10_5_1_E_cm ='';
				$scope.safety_and_security_10_6_1_text = '';
				$scope.safety_and_security_10_6_1_A='';
				$scope.safety_and_security_10_6_1_A_cm ='';
				$scope.sundry_services_11_1_1_text = '';
				$scope.sundry_services_11_1_1_A='';
				$scope.sundry_services_11_1_1_A_cm ='';
				$scope.sundry_services_11_1_1_B='';
				$scope.sundry_services_11_1_1_B_cm ='';
				$scope.sundry_services_11_2_1_text = '';
				$scope.sundry_services_11_2_1_A='';
				$scope.sundry_services_11_2_1_A_cm ='';
				$scope.sundry_services_11_2_1_B='';
				$scope.sundry_services_11_2_1_B_cm ='';
				$scope.sundry_services_11_2_1_C='';
				$scope.sundry_services_11_2_1_C_cm ='';
				$scope.sundry_services_11_3_1_text = '';
				$scope.sundry_services_11_3_1_A='';
				$scope.sundry_services_11_3_1_A_cm ='';
				$scope.sundry_services_11_4_1_text = '';
				$scope.sundry_services_11_4_1_A='';
				$scope.sundry_services_11_4_1_A_cm ='';
				$scope.sundry_services_11_5_1_text = '';
				$scope.sundry_services_11_5_1_A='';
				$scope.sundry_services_11_5_1_A_cm ='';
				$scope.sundry_services_11_5_1_B='';
				$scope.sundry_services_11_5_1_B_cm ='';
				$scope.sundry_services_11_6_1_text = '';
				$scope.sundry_services_11_6_1_A='';
				$scope.sundry_services_11_6_1_A_cm ='';
				$scope.human_resources_12_1_1_text = '';
				$scope.human_resources_12_1_1_A='';
				$scope.human_resources_12_1_1_A_cm ='';
				$scope.human_resources_12_1_1_B='';
				$scope.human_resources_12_1_1_B_cm ='';
				$scope.human_resources_12_1_1_C='';
				$scope.human_resources_12_1_1_C_cm ='';
				$scope.human_resources_12_1_1_D='';
				$scope.human_resources_12_1_1_D_cm ='';
				$scope.human_resources_12_1_1_E_a='';
				$scope.human_resources_12_1_1_E_a_cm ='';
				$scope.human_resources_12_1_1_E_b='';
				$scope.human_resources_12_1_1_E_b_cm ='';
				$scope.human_resources_12_1_1_E_c='';
				$scope.human_resources_12_1_1_E_c_cm ='';
				$scope.human_resources_12_1_1_E_d='';
				$scope.human_resources_12_1_1_E_d_cm ='';
				$scope.human_resources_12_1_1_E_e='';
				$scope.human_resources_12_1_1_E_e_cm ='';
				$scope.human_resources_12_2_1_text = '';
				$scope.human_resources_12_2_1_A_a='';
				$scope.human_resources_12_2_1_A_a_cm ='';
				$scope.human_resources_12_2_1_A_b='';
				$scope.human_resources_12_2_1_A_b_cm ='';
				$scope.human_resources_12_2_1_A_c='';
				$scope.human_resources_12_2_1_A_c_cm ='';
				$scope.human_resources_12_2_1_B_a='';
				$scope.human_resources_12_2_1_B_a_cm ='';
				$scope.human_resources_12_2_1_B_b='';
				$scope.human_resources_12_2_1_B_b_cm ='';
				$scope.human_resources_12_2_1_B_c='';
				$scope.human_resources_12_2_1_B_c_cm ='';
				$scope.human_resources_12_3_1_text = '';
				$scope.human_resources_12_3_1_A='';
				$scope.human_resources_12_3_1_A_cm ='';
				$scope.human_resources_12_4_1_text = '';
				$scope.human_resources_12_4_1_A='';
				$scope.human_resources_12_4_1_A_cm ='';
				$scope.human_resources_12_4_1_B='';
				$scope.human_resources_12_4_1_B_cm ='';
				$scope.human_resources_12_4_1_C='';
				$scope.human_resources_12_4_1_C_cm ='';
				$scope.human_resources_12_4_1_D='';
				$scope.human_resources_12_4_1_D_cm ='';
				$scope.general_13_1_1_text = '';
				$scope.general_13_1_1_A_a='';
				$scope.general_13_1_1_A_a_cm ='';
				$scope.general_13_1_1_A_b='';
				$scope.general_13_1_1_A_b_cm ='';
				$scope.general_13_1_1_A_c='';
				$scope.general_13_1_1_A_c_cm ='';
				
		

	
	};
	
	

};