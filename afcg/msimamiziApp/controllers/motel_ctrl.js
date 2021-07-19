app.motel_ctrl = function($timeout, $scope, $http, focus){

	$scope.fetch_motel_items = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_motel_items.php",
			data:{'assessment_id':assessment_id, 'assessor_category':assessor_category }
			}).success(function(data){
			
				$scope.location_1_0_1_text = data.location_1_0_1_text;
				if(data.location_1_0_1_A  == 5){ $scope.location_1_0_1_A  = data.location_1_0_1_A ; $scope.location_1_0_1_A = true; $scope.location_1_0_1_A_b = false; $scope.location_1_0_1_A_cm = ''; } else if(data.location_1_0_1_A  == 0){ $scope.location_1_0_1_A  = data.location_1_0_1_A ; $scope.location_1_0_1_A = false; $scope.location_1_0_1_A_b = true; $scope.location_1_0_1_A_cm = ''; }else if( ((data.location_1_0_1_A  > 0 ) && (data.location_1_0_1_A  < 5)) || ((data.location_1_0_1_A  > 5 ) && (data.location_1_0_1_A  < 0)))
				{ $scope.location_1_0_1_A_cm = data.location_1_0_1_A ; $scope.location_1_0_1_A = false; $scope.location_1_0_1_A_b = false; $scope.location_1_0_1_A  = ''; }else{ $scope.location_1_0_1_A  = ''; $scope.location_1_0_1_A_cm = ''; $scope.location_1_0_1_A = false; $scope.location_1_0_1_A_b = false; }
				if(data.location_1_0_1_B  == 5){ $scope.location_1_0_1_B  = data.location_1_0_1_B ; $scope.location_1_0_1_B = true; $scope.location_1_0_1_B_b = false; $scope.location_1_0_1_B_cm = ''; } else if(data.location_1_0_1_B  == 0){ $scope.location_1_0_1_B  = data.location_1_0_1_B ; $scope.location_1_0_1_B = false; $scope.location_1_0_1_B_b = true; $scope.location_1_0_1_B_cm = ''; }else if( ((data.location_1_0_1_B  > 0 ) && (data.location_1_0_1_B  < 5)) || ((data.location_1_0_1_B  > 5 ) && (data.location_1_0_1_B  < 0)))
				{ $scope.location_1_0_1_B_cm = data.location_1_0_1_B ; $scope.location_1_0_1_B = false; $scope.location_1_0_1_B_b = false; $scope.location_1_0_1_B  = ''; }else{ $scope.location_1_0_1_B  = ''; $scope.location_1_0_1_B_cm = ''; $scope.location_1_0_1_B = false; $scope.location_1_0_1_B_b = false; }
				$scope.location_1_1_1_text = data.location_1_1_1_text;
				if(data.location_1_1_1_A  == 4){ $scope.location_1_1_1_A  = data.location_1_1_1_A ; $scope.location_1_1_1_A = true; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A_cm = ''; } else if(data.location_1_1_1_A  == 0){ $scope.location_1_1_1_A  = data.location_1_1_1_A ; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = true; $scope.location_1_1_1_A_cm = ''; }else if( ((data.location_1_1_1_A  > 0 ) && (data.location_1_1_1_A  < 4)) || ((data.location_1_1_1_A  > 4 ) && (data.location_1_1_1_A  < 0)))
				{ $scope.location_1_1_1_A_cm = data.location_1_1_1_A ; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A  = ''; }else{ $scope.location_1_1_1_A  = ''; $scope.location_1_1_1_A_cm = ''; $scope.location_1_1_1_A = false; $scope.location_1_1_1_A_b = false; }
				$scope.location_1_1_2_text = data.location_1_1_2_text;
				if(data.location_1_1_2_A == 1){ $scope.location_1_1_2_A = data.location_1_1_2_A; $scope.location_1_1_2_A = true; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_c = false; $scope.location_1_1_2_A_cm = ''; } else if(data.location_1_1_2_A  == 2){ $scope.location_1_1_2_A = data.location_1_1_2_A; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = true; $scope.location_1_1_2_A_c = false; $scope.location_1_1_2_A_cm = ''; } else if(data.location_1_1_2_A  == 3){ 
				$scope.location_1_1_2_A = data.location_1_1_2_A; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_c = true; $scope.location_1_1_2_A_cm = ''; } else if( ((data.location_1_1_2_A  >= 0 ) && (data.location_1_1_2_A  < 1)) || ((data.location_1_1_2_A  > 1 ) && (data.location_1_1_2_A  < 2)) || ((data.location_1_1_2_A  > 2 ) && (data.location_1_1_2_A  < 3)) ){ $scope.location_1_1_2_A_cm = data.location_1_1_2_A; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_c = false; $scope.location_1_1_2_A = ''; }else{ $scope.location_1_1_2_A = ''; $scope.location_1_1_2_A_cm = ''; $scope.location_1_1_2_A = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_c = false;}
				$scope.location_1_1_3_text = data.location_1_1_3_text;
				if(data.location_1_1_3_A == 0){ $scope.location_1_1_3_A = data.location_1_1_3_A; $scope.location_1_1_3_A = true; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A_c = false; $scope.location_1_1_3_A_cm = ''; } else if(data.location_1_1_3_A  == 2){ $scope.location_1_1_3_A = data.location_1_1_3_A; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = true; $scope.location_1_1_3_A_c = false; $scope.location_1_1_3_A_cm = ''; } else if(data.location_1_1_3_A  == ){ $scope.location_1_1_3_A = data.location_1_1_3_A; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A_c = true; $scope.location_1_1_3_A_cm = ''; }else if( ((data.location_1_1_3_A  > 0 ) && (data.location_1_1_3_A  < 2)) || ((data.location_1_1_3_A  > 2 ) && (data.location_1_1_3_A  < )) )
				{ $scope.location_1_1_3_A_cm = data.location_1_1_3_A; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = false;  $scope.location_1_1_3_A_c = false; $scope.location_1_1_3_A = ''; }else{ $scope.location_1_1_3_A = ''; $scope.location_1_1_3_A_cm = ''; $scope.location_1_1_3_A = false; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A_c = false; }
				if(data.location_1_1_3_B_a == 1){ $scope.location_1_1_3_B_a = data.location_1_1_3_B_a; $scope.location_1_1_3_B_a= true; $scope.location_1_1_3_B_a_cm = ''; } else if((data.location_1_1_3_B_a > 0 ) && (data.location_1_1_3_B_a < 1)){ $scope.location_1_1_3_B_a_cm = data.location_1_1_3_B_a; $scope.location_1_1_3_B_a= false; $scope.location_1_1_3_B_a= ''; }else{ $scope.location_1_1_3_B_a= ''; $scope.location_1_1_3_B_a_cm = ''; $scope.location_1_1_3_B_a= false; }
				if(data.location_1_1_3_B_b == 1){ $scope.location_1_1_3_B_b = data.location_1_1_3_B_b; $scope.location_1_1_3_B_b= true; $scope.location_1_1_3_B_b_cm = ''; } else if((data.location_1_1_3_B_b > 0 ) && (data.location_1_1_3_B_b < 1)){ $scope.location_1_1_3_B_b_cm = data.location_1_1_3_B_b; $scope.location_1_1_3_B_b= false; $scope.location_1_1_3_B_b= ''; }else{ $scope.location_1_1_3_B_b= ''; $scope.location_1_1_3_B_b_cm = ''; $scope.location_1_1_3_B_b= false; }
				if(data.location_1_1_3_B_c == 1){ $scope.location_1_1_3_B_c = data.location_1_1_3_B_c; $scope.location_1_1_3_B_c= true; $scope.location_1_1_3_B_c_cm = ''; } else if((data.location_1_1_3_B_c > 0 ) && (data.location_1_1_3_B_c < 1)){ $scope.location_1_1_3_B_c_cm = data.location_1_1_3_B_c; $scope.location_1_1_3_B_c= false; $scope.location_1_1_3_B_c= ''; }else{ $scope.location_1_1_3_B_c= ''; $scope.location_1_1_3_B_c_cm = ''; $scope.location_1_1_3_B_c= false; }
				if(data.location_1_1_3_B_d == 1){ $scope.location_1_1_3_B_d = data.location_1_1_3_B_d; $scope.location_1_1_3_B_d= true; $scope.location_1_1_3_B_d_cm = ''; } else if((data.location_1_1_3_B_d > 0 ) && (data.location_1_1_3_B_d < 1)){ $scope.location_1_1_3_B_d_cm = data.location_1_1_3_B_d; $scope.location_1_1_3_B_d= false; $scope.location_1_1_3_B_d= ''; }else{ $scope.location_1_1_3_B_d= ''; $scope.location_1_1_3_B_d_cm = ''; $scope.location_1_1_3_B_d= false; }
				$scope.location_1_1_4_text = data.location_1_1_4_text;
				if(data.location_1_1_4_A == 0){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = true; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == 1){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = true; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == ){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = true; $scope.location_1_1_4_A_cm = ''; }else if( ((data.location_1_1_4_A  > 0 ) && (data.location_1_1_4_A  < 1)) || ((data.location_1_1_4_A  > 1 ) && (data.location_1_1_4_A  < )) )
				{ $scope.location_1_1_4_A_cm = data.location_1_1_4_A; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false;  $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A = ''; }else{ $scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_cm = ''; $scope.location_1_1_4_A = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; }
				if(data.location_1_1_4_B == 0){ $scope.location_1_1_4_B = data.location_1_1_4_B; $scope.location_1_1_4_B = true; $scope.location_1_1_4_B_b = false; $scope.location_1_1_4_B_c = false; $scope.location_1_1_4_B_cm = ''; } else if(data.location_1_1_4_B  == 1){ $scope.location_1_1_4_B = data.location_1_1_4_B; $scope.location_1_1_4_B = false; $scope.location_1_1_4_B_b = true; $scope.location_1_1_4_B_c = false; $scope.location_1_1_4_B_cm = ''; } else if(data.location_1_1_4_B  == ){ $scope.location_1_1_4_B = data.location_1_1_4_B; $scope.location_1_1_4_B = false; $scope.location_1_1_4_B_b = false; $scope.location_1_1_4_B_c = true; $scope.location_1_1_4_B_cm = ''; }else if( ((data.location_1_1_4_B  > 0 ) && (data.location_1_1_4_B  < 1)) || ((data.location_1_1_4_B  > 1 ) && (data.location_1_1_4_B  < )) )
				{ $scope.location_1_1_4_B_cm = data.location_1_1_4_B; $scope.location_1_1_4_B = false; $scope.location_1_1_4_B_b = false;  $scope.location_1_1_4_B_c = false; $scope.location_1_1_4_B = ''; }else{ $scope.location_1_1_4_B = ''; $scope.location_1_1_4_B_cm = ''; $scope.location_1_1_4_B = false; $scope.location_1_1_4_B_b = false; $scope.location_1_1_4_B_c = false; }
				if(data.location_1_1_4_C == 0){ $scope.location_1_1_4_C = data.location_1_1_4_C; $scope.location_1_1_4_C = true; $scope.location_1_1_4_C_b = false; $scope.location_1_1_4_C_c = false; $scope.location_1_1_4_C_cm = ''; } else if(data.location_1_1_4_C  == 1){ $scope.location_1_1_4_C = data.location_1_1_4_C; $scope.location_1_1_4_C = false; $scope.location_1_1_4_C_b = true; $scope.location_1_1_4_C_c = false; $scope.location_1_1_4_C_cm = ''; } else if(data.location_1_1_4_C  == ){ $scope.location_1_1_4_C = data.location_1_1_4_C; $scope.location_1_1_4_C = false; $scope.location_1_1_4_C_b = false; $scope.location_1_1_4_C_c = true; $scope.location_1_1_4_C_cm = ''; }else if( ((data.location_1_1_4_C  > 0 ) && (data.location_1_1_4_C  < 1)) || ((data.location_1_1_4_C  > 1 ) && (data.location_1_1_4_C  < )) )
				{ $scope.location_1_1_4_C_cm = data.location_1_1_4_C; $scope.location_1_1_4_C = false; $scope.location_1_1_4_C_b = false;  $scope.location_1_1_4_C_c = false; $scope.location_1_1_4_C = ''; }else{ $scope.location_1_1_4_C = ''; $scope.location_1_1_4_C_cm = ''; $scope.location_1_1_4_C = false; $scope.location_1_1_4_C_b = false; $scope.location_1_1_4_C_c = false; }
				$scope.location_1_1_5_text = data.location_1_1_5_text;
				if(data.location_1_1_5_A == 0){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = true; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A_cm = ''; } else if(data.location_1_1_5_A  == 1){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = true; $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A_cm = ''; } else if(data.location_1_1_5_A  == ){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = true; $scope.location_1_1_5_A_cm = ''; }else if( ((data.location_1_1_5_A  > 0 ) && (data.location_1_1_5_A  < 1)) || ((data.location_1_1_5_A  > 1 ) && (data.location_1_1_5_A  < )) )
				{ $scope.location_1_1_5_A_cm = data.location_1_1_5_A; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false;  $scope.location_1_1_5_A_c = false; $scope.location_1_1_5_A = ''; }else{ $scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_cm = ''; $scope.location_1_1_5_A = false; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_c = false; }
				if(data.location_1_1_5_B == 0){ $scope.location_1_1_5_B = data.location_1_1_5_B; $scope.location_1_1_5_B = true; $scope.location_1_1_5_B_b = false; $scope.location_1_1_5_B_c = false; $scope.location_1_1_5_B_cm = ''; } else if(data.location_1_1_5_B  == 1){ $scope.location_1_1_5_B = data.location_1_1_5_B; $scope.location_1_1_5_B = false; $scope.location_1_1_5_B_b = true; $scope.location_1_1_5_B_c = false; $scope.location_1_1_5_B_cm = ''; } else if(data.location_1_1_5_B  == ){ $scope.location_1_1_5_B = data.location_1_1_5_B; $scope.location_1_1_5_B = false; $scope.location_1_1_5_B_b = false; $scope.location_1_1_5_B_c = true; $scope.location_1_1_5_B_cm = ''; }else if( ((data.location_1_1_5_B  > 0 ) && (data.location_1_1_5_B  < 1)) || ((data.location_1_1_5_B  > 1 ) && (data.location_1_1_5_B  < )) )
				{ $scope.location_1_1_5_B_cm = data.location_1_1_5_B; $scope.location_1_1_5_B = false; $scope.location_1_1_5_B_b = false;  $scope.location_1_1_5_B_c = false; $scope.location_1_1_5_B = ''; }else{ $scope.location_1_1_5_B = ''; $scope.location_1_1_5_B_cm = ''; $scope.location_1_1_5_B = false; $scope.location_1_1_5_B_b = false; $scope.location_1_1_5_B_c = false; }
				if(data.location_1_1_5_C == 0){ $scope.location_1_1_5_C = data.location_1_1_5_C; $scope.location_1_1_5_C = true; $scope.location_1_1_5_C_b = false; $scope.location_1_1_5_C_c = false; $scope.location_1_1_5_C_cm = ''; } else if(data.location_1_1_5_C  == 1){ $scope.location_1_1_5_C = data.location_1_1_5_C; $scope.location_1_1_5_C = false; $scope.location_1_1_5_C_b = true; $scope.location_1_1_5_C_c = false; $scope.location_1_1_5_C_cm = ''; } else if(data.location_1_1_5_C  == ){ $scope.location_1_1_5_C = data.location_1_1_5_C; $scope.location_1_1_5_C = false; $scope.location_1_1_5_C_b = false; $scope.location_1_1_5_C_c = true; $scope.location_1_1_5_C_cm = ''; }else if( ((data.location_1_1_5_C  > 0 ) && (data.location_1_1_5_C  < 1)) || ((data.location_1_1_5_C  > 1 ) && (data.location_1_1_5_C  < )) )
				{ $scope.location_1_1_5_C_cm = data.location_1_1_5_C; $scope.location_1_1_5_C = false; $scope.location_1_1_5_C_b = false;  $scope.location_1_1_5_C_c = false; $scope.location_1_1_5_C = ''; }else{ $scope.location_1_1_5_C = ''; $scope.location_1_1_5_C_cm = ''; $scope.location_1_1_5_C = false; $scope.location_1_1_5_C_b = false; $scope.location_1_1_5_C_c = false; }
				if(data.location_1_1_5_D == 0){ $scope.location_1_1_5_D = data.location_1_1_5_D; $scope.location_1_1_5_D = true; $scope.location_1_1_5_D_b = false; $scope.location_1_1_5_D_c = false; $scope.location_1_1_5_D_cm = ''; } else if(data.location_1_1_5_D  == 1){ $scope.location_1_1_5_D = data.location_1_1_5_D; $scope.location_1_1_5_D = false; $scope.location_1_1_5_D_b = true; $scope.location_1_1_5_D_c = false; $scope.location_1_1_5_D_cm = ''; } else if(data.location_1_1_5_D  == ){ $scope.location_1_1_5_D = data.location_1_1_5_D; $scope.location_1_1_5_D = false; $scope.location_1_1_5_D_b = false; $scope.location_1_1_5_D_c = true; $scope.location_1_1_5_D_cm = ''; }else if( ((data.location_1_1_5_D  > 0 ) && (data.location_1_1_5_D  < 1)) || ((data.location_1_1_5_D  > 1 ) && (data.location_1_1_5_D  < )) )
				{ $scope.location_1_1_5_D_cm = data.location_1_1_5_D; $scope.location_1_1_5_D = false; $scope.location_1_1_5_D_b = false;  $scope.location_1_1_5_D_c = false; $scope.location_1_1_5_D = ''; }else{ $scope.location_1_1_5_D = ''; $scope.location_1_1_5_D_cm = ''; $scope.location_1_1_5_D = false; $scope.location_1_1_5_D_b = false; $scope.location_1_1_5_D_c = false; }
				$scope.location_1_2_1_text = data.location_1_2_1_text;
				if(data.location_1_2_1_A  == 20){ $scope.location_1_2_1_A  = data.location_1_2_1_A ; $scope.location_1_2_1_A = true; $scope.location_1_2_1_A_b = false; $scope.location_1_2_1_A_cm = ''; } else if(data.location_1_2_1_A  == 30){ $scope.location_1_2_1_A  = data.location_1_2_1_A ; $scope.location_1_2_1_A = false; $scope.location_1_2_1_A_b = true; $scope.location_1_2_1_A_cm = ''; }else if( ((data.location_1_2_1_A  > 0 ) && (data.location_1_2_1_A  < 20)) || ((data.location_1_2_1_A  > 20 ) && (data.location_1_2_1_A  < 30)))
				{ $scope.location_1_2_1_A_cm = data.location_1_2_1_A ; $scope.location_1_2_1_A = false; $scope.location_1_2_1_A_b = false; $scope.location_1_2_1_A  = ''; }else{ $scope.location_1_2_1_A  = ''; $scope.location_1_2_1_A_cm = ''; $scope.location_1_2_1_A = false; $scope.location_1_2_1_A_b = false; }
				$scope.building_2_1_1_text = data.building_2_1_1_text;
				if(data.building_2_1_1_A == 5){ $scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = true; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A_cm = ''; } else if(data.building_2_1_1_A  == 7){ $scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = true; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A_cm = ''; } else if(data.building_2_1_1_A  == 10){ 
				$scope.building_2_1_1_A = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = true; $scope.building_2_1_1_A_cm = ''; } else if( ((data.building_2_1_1_A  >= 0 ) && (data.building_2_1_1_A  < 5)) || ((data.building_2_1_1_A  > 5 ) && (data.building_2_1_1_A  < 7)) || ((data.building_2_1_1_A  > 7 ) && (data.building_2_1_1_A  < 10)) ){ $scope.building_2_1_1_A_cm = data.building_2_1_1_A; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false; $scope.building_2_1_1_A = ''; }else{ $scope.building_2_1_1_A = ''; $scope.building_2_1_1_A_cm = ''; $scope.building_2_1_1_A = false; $scope.building_2_1_1_A_b = false; $scope.building_2_1_1_A_c = false;}
				$scope.building_2_1_2_text = data.building_2_1_2_text;
				if(data.building_2_1_2_A == 0){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = true; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A_cm = ''; } else if(data.building_2_1_2_A  == 10){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = true; $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A_cm = ''; } else if(data.building_2_1_2_A  == ){ $scope.building_2_1_2_A = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = true; $scope.building_2_1_2_A_cm = ''; }else if( ((data.building_2_1_2_A  > 0 ) && (data.building_2_1_2_A  < 10)) || ((data.building_2_1_2_A  > 10 ) && (data.building_2_1_2_A  < )) )
				{ $scope.building_2_1_2_A_cm = data.building_2_1_2_A; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false;  $scope.building_2_1_2_A_c = false; $scope.building_2_1_2_A = ''; }else{ $scope.building_2_1_2_A = ''; $scope.building_2_1_2_A_cm = ''; $scope.building_2_1_2_A = false; $scope.building_2_1_2_A_b = false; $scope.building_2_1_2_A_c = false; }
				$scope.building_2_2_1_text = data.building_2_2_1_text;
				if(data.building_2_2_1_A == 0){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = true; $scope.building_2_2_1_A_b = false; $scope.building_2_2_1_A_c = false; $scope.building_2_2_1_A_cm = ''; } else if(data.building_2_2_1_A  == 2){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = true; $scope.building_2_2_1_A_c = false; $scope.building_2_2_1_A_cm = ''; } else if(data.building_2_2_1_A  == ){ $scope.building_2_2_1_A = data.building_2_2_1_A; $scope.building_2_2_1_A = false; $scope.building_2_2_1_A_b = false; $scope.building_2_2_1_A_c = true; $scope.building_2_2_1_A_cm = ''; }else if( ((data.building_2_2_1_A  > 0 ) && (data.building_2_2_1_A  < 2)) || ((data.building_2_2_1_A  > 2 ) && (data.building_2_2_1_A  < )) )
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
				if(data.building_2_2_2_E == 0){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = true; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E_cm = ''; } else if(data.building_2_2_2_E  == 5){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = true; $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E_cm = ''; } else if(data.building_2_2_2_E  == ){ $scope.building_2_2_2_E = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = true; $scope.building_2_2_2_E_cm = ''; }else if( ((data.building_2_2_2_E  > 0 ) && (data.building_2_2_2_E  < 5)) || ((data.building_2_2_2_E  > 5 ) && (data.building_2_2_2_E  < )) )
				{ $scope.building_2_2_2_E_cm = data.building_2_2_2_E; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false;  $scope.building_2_2_2_E_c = false; $scope.building_2_2_2_E = ''; }else{ $scope.building_2_2_2_E = ''; $scope.building_2_2_2_E_cm = ''; $scope.building_2_2_2_E = false; $scope.building_2_2_2_E_b = false; $scope.building_2_2_2_E_c = false; }
				if(data.building_2_2_2_F == 0){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = true; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F_cm = ''; } else if(data.building_2_2_2_F  == 3){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = true; $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F_cm = ''; } else if(data.building_2_2_2_F  == 5){ $scope.building_2_2_2_F = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = true; $scope.building_2_2_2_F_cm = ''; }else if( ((data.building_2_2_2_F  > 0 ) && (data.building_2_2_2_F  < 3)) || ((data.building_2_2_2_F  > 3 ) && (data.building_2_2_2_F  < 5)) )
				{ $scope.building_2_2_2_F_cm = data.building_2_2_2_F; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false;  $scope.building_2_2_2_F_c = false; $scope.building_2_2_2_F = ''; }else{ $scope.building_2_2_2_F = ''; $scope.building_2_2_2_F_cm = ''; $scope.building_2_2_2_F = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; }
				if(data.building_2_2_2_G == 0){ $scope.building_2_2_2_G = data.building_2_2_2_G; $scope.building_2_2_2_G = true; $scope.building_2_2_2_G_b = false; $scope.building_2_2_2_G_c = false; $scope.building_2_2_2_G_cm = ''; } else if(data.building_2_2_2_G  == 3){ $scope.building_2_2_2_G = data.building_2_2_2_G; $scope.building_2_2_2_G = false; $scope.building_2_2_2_G_b = true; $scope.building_2_2_2_G_c = false; $scope.building_2_2_2_G_cm = ''; } else if(data.building_2_2_2_G  == 5){ $scope.building_2_2_2_G = data.building_2_2_2_G; $scope.building_2_2_2_G = false; $scope.building_2_2_2_G_b = false; $scope.building_2_2_2_G_c = true; $scope.building_2_2_2_G_cm = ''; }else if( ((data.building_2_2_2_G  > 0 ) && (data.building_2_2_2_G  < 3)) || ((data.building_2_2_2_G  > 3 ) && (data.building_2_2_2_G  < 5)) )
				{ $scope.building_2_2_2_G_cm = data.building_2_2_2_G; $scope.building_2_2_2_G = false; $scope.building_2_2_2_G_b = false;  $scope.building_2_2_2_G_c = false; $scope.building_2_2_2_G = ''; }else{ $scope.building_2_2_2_G = ''; $scope.building_2_2_2_G_cm = ''; $scope.building_2_2_2_G = false; $scope.building_2_2_2_G_b = false; $scope.building_2_2_2_G_c = false; }
				$scope.building_2_3_1_text = data.building_2_3_1_text;
				if(data.building_2_3_1_A == 0){ $scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = true; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A_cm = ''; } else if(data.building_2_3_1_A  == 10){ $scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = true; $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A_cm = ''; } else if(data.building_2_3_1_A  == ){ $scope.building_2_3_1_A = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = true; $scope.building_2_3_1_A_cm = ''; }else if( ((data.building_2_3_1_A  > 0 ) && (data.building_2_3_1_A  < 10)) || ((data.building_2_3_1_A  > 10 ) && (data.building_2_3_1_A  < )) )
				{ $scope.building_2_3_1_A_cm = data.building_2_3_1_A; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false;  $scope.building_2_3_1_A_c = false; $scope.building_2_3_1_A = ''; }else{ $scope.building_2_3_1_A = ''; $scope.building_2_3_1_A_cm = ''; $scope.building_2_3_1_A = false; $scope.building_2_3_1_A_b = false; $scope.building_2_3_1_A_c = false; }
				$scope.building_2_4_1_text = data.building_2_4_1_text;
				if(data.building_2_4_1_A == 0){ $scope.building_2_4_1_A = data.building_2_4_1_A; $scope.building_2_4_1_A = true; $scope.building_2_4_1_A_b = false; $scope.building_2_4_1_A_c = false; $scope.building_2_4_1_A_cm = ''; } else if(data.building_2_4_1_A  == 2){ $scope.building_2_4_1_A = data.building_2_4_1_A; $scope.building_2_4_1_A = false; $scope.building_2_4_1_A_b = true; $scope.building_2_4_1_A_c = false; $scope.building_2_4_1_A_cm = ''; } else if(data.building_2_4_1_A  == ){ $scope.building_2_4_1_A = data.building_2_4_1_A; $scope.building_2_4_1_A = false; $scope.building_2_4_1_A_b = false; $scope.building_2_4_1_A_c = true; $scope.building_2_4_1_A_cm = ''; }else if( ((data.building_2_4_1_A  > 0 ) && (data.building_2_4_1_A  < 2)) || ((data.building_2_4_1_A  > 2 ) && (data.building_2_4_1_A  < )) )
				{ $scope.building_2_4_1_A_cm = data.building_2_4_1_A; $scope.building_2_4_1_A = false; $scope.building_2_4_1_A_b = false;  $scope.building_2_4_1_A_c = false; $scope.building_2_4_1_A = ''; }else{ $scope.building_2_4_1_A = ''; $scope.building_2_4_1_A_cm = ''; $scope.building_2_4_1_A = false; $scope.building_2_4_1_A_b = false; $scope.building_2_4_1_A_c = false; }
				if(data.building_2_4_1_B == 0){ $scope.building_2_4_1_B = data.building_2_4_1_B; $scope.building_2_4_1_B = true; $scope.building_2_4_1_B_b = false; $scope.building_2_4_1_B_c = false; $scope.building_2_4_1_B_cm = ''; } else if(data.building_2_4_1_B  == 2){ $scope.building_2_4_1_B = data.building_2_4_1_B; $scope.building_2_4_1_B = false; $scope.building_2_4_1_B_b = true; $scope.building_2_4_1_B_c = false; $scope.building_2_4_1_B_cm = ''; } else if(data.building_2_4_1_B  == ){ $scope.building_2_4_1_B = data.building_2_4_1_B; $scope.building_2_4_1_B = false; $scope.building_2_4_1_B_b = false; $scope.building_2_4_1_B_c = true; $scope.building_2_4_1_B_cm = ''; }else if( ((data.building_2_4_1_B  > 0 ) && (data.building_2_4_1_B  < 2)) || ((data.building_2_4_1_B  > 2 ) && (data.building_2_4_1_B  < )) )
				{ $scope.building_2_4_1_B_cm = data.building_2_4_1_B; $scope.building_2_4_1_B = false; $scope.building_2_4_1_B_b = false;  $scope.building_2_4_1_B_c = false; $scope.building_2_4_1_B = ''; }else{ $scope.building_2_4_1_B = ''; $scope.building_2_4_1_B_cm = ''; $scope.building_2_4_1_B = false; $scope.building_2_4_1_B_b = false; $scope.building_2_4_1_B_c = false; }
				if(data.building_2_4_1_C == 0){ $scope.building_2_4_1_C = data.building_2_4_1_C; $scope.building_2_4_1_C = true; $scope.building_2_4_1_C_b = false; $scope.building_2_4_1_C_c = false; $scope.building_2_4_1_C_cm = ''; } else if(data.building_2_4_1_C  == 3){ $scope.building_2_4_1_C = data.building_2_4_1_C; $scope.building_2_4_1_C = false; $scope.building_2_4_1_C_b = true; $scope.building_2_4_1_C_c = false; $scope.building_2_4_1_C_cm = ''; } else if(data.building_2_4_1_C  == ){ $scope.building_2_4_1_C = data.building_2_4_1_C; $scope.building_2_4_1_C = false; $scope.building_2_4_1_C_b = false; $scope.building_2_4_1_C_c = true; $scope.building_2_4_1_C_cm = ''; }else if( ((data.building_2_4_1_C  > 0 ) && (data.building_2_4_1_C  < 3)) || ((data.building_2_4_1_C  > 3 ) && (data.building_2_4_1_C  < )) )
				{ $scope.building_2_4_1_C_cm = data.building_2_4_1_C; $scope.building_2_4_1_C = false; $scope.building_2_4_1_C_b = false;  $scope.building_2_4_1_C_c = false; $scope.building_2_4_1_C = ''; }else{ $scope.building_2_4_1_C = ''; $scope.building_2_4_1_C_cm = ''; $scope.building_2_4_1_C = false; $scope.building_2_4_1_C_b = false; $scope.building_2_4_1_C_c = false; }
				if(data.building_2_4_1_D == 0){ $scope.building_2_4_1_D = data.building_2_4_1_D; $scope.building_2_4_1_D = true; $scope.building_2_4_1_D_b = false; $scope.building_2_4_1_D_c = false; $scope.building_2_4_1_D_cm = ''; } else if(data.building_2_4_1_D  == 3){ $scope.building_2_4_1_D = data.building_2_4_1_D; $scope.building_2_4_1_D = false; $scope.building_2_4_1_D_b = true; $scope.building_2_4_1_D_c = false; $scope.building_2_4_1_D_cm = ''; } else if(data.building_2_4_1_D  == ){ $scope.building_2_4_1_D = data.building_2_4_1_D; $scope.building_2_4_1_D = false; $scope.building_2_4_1_D_b = false; $scope.building_2_4_1_D_c = true; $scope.building_2_4_1_D_cm = ''; }else if( ((data.building_2_4_1_D  > 0 ) && (data.building_2_4_1_D  < 3)) || ((data.building_2_4_1_D  > 3 ) && (data.building_2_4_1_D  < )) )
				{ $scope.building_2_4_1_D_cm = data.building_2_4_1_D; $scope.building_2_4_1_D = false; $scope.building_2_4_1_D_b = false;  $scope.building_2_4_1_D_c = false; $scope.building_2_4_1_D = ''; }else{ $scope.building_2_4_1_D = ''; $scope.building_2_4_1_D_cm = ''; $scope.building_2_4_1_D = false; $scope.building_2_4_1_D_b = false; $scope.building_2_4_1_D_c = false; }
				if(data.building_2_4_1_E == 0){ $scope.building_2_4_1_E = data.building_2_4_1_E; $scope.building_2_4_1_E = true; $scope.building_2_4_1_E_b = false; $scope.building_2_4_1_E_c = false; $scope.building_2_4_1_E_cm = ''; } else if(data.building_2_4_1_E  == 3){ $scope.building_2_4_1_E = data.building_2_4_1_E; $scope.building_2_4_1_E = false; $scope.building_2_4_1_E_b = true; $scope.building_2_4_1_E_c = false; $scope.building_2_4_1_E_cm = ''; } else if(data.building_2_4_1_E  == ){ $scope.building_2_4_1_E = data.building_2_4_1_E; $scope.building_2_4_1_E = false; $scope.building_2_4_1_E_b = false; $scope.building_2_4_1_E_c = true; $scope.building_2_4_1_E_cm = ''; }else if( ((data.building_2_4_1_E  > 0 ) && (data.building_2_4_1_E  < 3)) || ((data.building_2_4_1_E  > 3 ) && (data.building_2_4_1_E  < )) )
				{ $scope.building_2_4_1_E_cm = data.building_2_4_1_E; $scope.building_2_4_1_E = false; $scope.building_2_4_1_E_b = false;  $scope.building_2_4_1_E_c = false; $scope.building_2_4_1_E = ''; }else{ $scope.building_2_4_1_E = ''; $scope.building_2_4_1_E_cm = ''; $scope.building_2_4_1_E = false; $scope.building_2_4_1_E_b = false; $scope.building_2_4_1_E_c = false; }
				if(data.building_2_4_1_F == 0){ $scope.building_2_4_1_F = data.building_2_4_1_F; $scope.building_2_4_1_F = true; $scope.building_2_4_1_F_b = false; $scope.building_2_4_1_F_c = false; $scope.building_2_4_1_F_cm = ''; } else if(data.building_2_4_1_F  == 3){ $scope.building_2_4_1_F = data.building_2_4_1_F; $scope.building_2_4_1_F = false; $scope.building_2_4_1_F_b = true; $scope.building_2_4_1_F_c = false; $scope.building_2_4_1_F_cm = ''; } else if(data.building_2_4_1_F  == ){ $scope.building_2_4_1_F = data.building_2_4_1_F; $scope.building_2_4_1_F = false; $scope.building_2_4_1_F_b = false; $scope.building_2_4_1_F_c = true; $scope.building_2_4_1_F_cm = ''; }else if( ((data.building_2_4_1_F  > 0 ) && (data.building_2_4_1_F  < 3)) || ((data.building_2_4_1_F  > 3 ) && (data.building_2_4_1_F  < )) )
				{ $scope.building_2_4_1_F_cm = data.building_2_4_1_F; $scope.building_2_4_1_F = false; $scope.building_2_4_1_F_b = false;  $scope.building_2_4_1_F_c = false; $scope.building_2_4_1_F = ''; }else{ $scope.building_2_4_1_F = ''; $scope.building_2_4_1_F_cm = ''; $scope.building_2_4_1_F = false; $scope.building_2_4_1_F_b = false; $scope.building_2_4_1_F_c = false; }
				if(data.building_2_4_1_G == 1){ $scope.building_2_4_1_G = data.building_2_4_1_G; $scope.building_2_4_1_G = true; $scope.building_2_4_1_G_b = false; $scope.building_2_4_1_G_c = false; $scope.building_2_4_1_G_cm = ''; } else if(data.building_2_4_1_G  == 2){ $scope.building_2_4_1_G = data.building_2_4_1_G; $scope.building_2_4_1_G = false; $scope.building_2_4_1_G_b = true; $scope.building_2_4_1_G_c = false; $scope.building_2_4_1_G_cm = ''; } else if(data.building_2_4_1_G  == 3){ 
				$scope.building_2_4_1_G = data.building_2_4_1_G; $scope.building_2_4_1_G = false; $scope.building_2_4_1_G_b = false; $scope.building_2_4_1_G_c = true; $scope.building_2_4_1_G_cm = ''; } else if( ((data.building_2_4_1_G  >= 0 ) && (data.building_2_4_1_G  < 1)) || ((data.building_2_4_1_G  > 1 ) && (data.building_2_4_1_G  < 2)) || ((data.building_2_4_1_G  > 2 ) && (data.building_2_4_1_G  < 3)) ){ $scope.building_2_4_1_G_cm = data.building_2_4_1_G; $scope.building_2_4_1_G = false; $scope.building_2_4_1_G_b = false; $scope.building_2_4_1_G_c = false; $scope.building_2_4_1_G = ''; }else{ $scope.building_2_4_1_G = ''; $scope.building_2_4_1_G_cm = ''; $scope.building_2_4_1_G = false; $scope.building_2_4_1_G_b = false; $scope.building_2_4_1_G_c = false;}
				if(data.building_2_4_1_H == 1){ $scope.building_2_4_1_H = data.building_2_4_1_H; $scope.building_2_4_1_H = true; $scope.building_2_4_1_H_b = false; $scope.building_2_4_1_H_c = false; $scope.building_2_4_1_H_cm = ''; } else if(data.building_2_4_1_H  == 2){ $scope.building_2_4_1_H = data.building_2_4_1_H; $scope.building_2_4_1_H = false; $scope.building_2_4_1_H_b = true; $scope.building_2_4_1_H_c = false; $scope.building_2_4_1_H_cm = ''; } else if(data.building_2_4_1_H  == 3){ 
				$scope.building_2_4_1_H = data.building_2_4_1_H; $scope.building_2_4_1_H = false; $scope.building_2_4_1_H_b = false; $scope.building_2_4_1_H_c = true; $scope.building_2_4_1_H_cm = ''; } else if( ((data.building_2_4_1_H  >= 0 ) && (data.building_2_4_1_H  < 1)) || ((data.building_2_4_1_H  > 1 ) && (data.building_2_4_1_H  < 2)) || ((data.building_2_4_1_H  > 2 ) && (data.building_2_4_1_H  < 3)) ){ $scope.building_2_4_1_H_cm = data.building_2_4_1_H; $scope.building_2_4_1_H = false; $scope.building_2_4_1_H_b = false; $scope.building_2_4_1_H_c = false; $scope.building_2_4_1_H = ''; }else{ $scope.building_2_4_1_H = ''; $scope.building_2_4_1_H_cm = ''; $scope.building_2_4_1_H = false; $scope.building_2_4_1_H_b = false; $scope.building_2_4_1_H_c = false;}
				if(data.building_2_4_1_I == 0){ $scope.building_2_4_1_I = data.building_2_4_1_I; $scope.building_2_4_1_I = true; $scope.building_2_4_1_I_b = false; $scope.building_2_4_1_I_c = false; $scope.building_2_4_1_I_cm = ''; } else if(data.building_2_4_1_I  == 2){ $scope.building_2_4_1_I = data.building_2_4_1_I; $scope.building_2_4_1_I = false; $scope.building_2_4_1_I_b = true; $scope.building_2_4_1_I_c = false; $scope.building_2_4_1_I_cm = ''; } else if(data.building_2_4_1_I  == 4){ $scope.building_2_4_1_I = data.building_2_4_1_I; $scope.building_2_4_1_I = false; $scope.building_2_4_1_I_b = false; $scope.building_2_4_1_I_c = true; $scope.building_2_4_1_I_cm = ''; }else if( ((data.building_2_4_1_I  > 0 ) && (data.building_2_4_1_I  < 2)) || ((data.building_2_4_1_I  > 2 ) && (data.building_2_4_1_I  < 4)) )
				{ $scope.building_2_4_1_I_cm = data.building_2_4_1_I; $scope.building_2_4_1_I = false; $scope.building_2_4_1_I_b = false;  $scope.building_2_4_1_I_c = false; $scope.building_2_4_1_I = ''; }else{ $scope.building_2_4_1_I = ''; $scope.building_2_4_1_I_cm = ''; $scope.building_2_4_1_I = false; $scope.building_2_4_1_I_b = false; $scope.building_2_4_1_I_c = false; }
				if(data.building_2_4_1_J == 0){ $scope.building_2_4_1_J = data.building_2_4_1_J; $scope.building_2_4_1_J = true; $scope.building_2_4_1_J_b = false; $scope.building_2_4_1_J_c = false; $scope.building_2_4_1_J_cm = ''; } else if(data.building_2_4_1_J  == 2){ $scope.building_2_4_1_J = data.building_2_4_1_J; $scope.building_2_4_1_J = false; $scope.building_2_4_1_J_b = true; $scope.building_2_4_1_J_c = false; $scope.building_2_4_1_J_cm = ''; } else if(data.building_2_4_1_J  == 4){ $scope.building_2_4_1_J = data.building_2_4_1_J; $scope.building_2_4_1_J = false; $scope.building_2_4_1_J_b = false; $scope.building_2_4_1_J_c = true; $scope.building_2_4_1_J_cm = ''; }else if( ((data.building_2_4_1_J  > 0 ) && (data.building_2_4_1_J  < 2)) || ((data.building_2_4_1_J  > 2 ) && (data.building_2_4_1_J  < 4)) )
				{ $scope.building_2_4_1_J_cm = data.building_2_4_1_J; $scope.building_2_4_1_J = false; $scope.building_2_4_1_J_b = false;  $scope.building_2_4_1_J_c = false; $scope.building_2_4_1_J = ''; }else{ $scope.building_2_4_1_J = ''; $scope.building_2_4_1_J_cm = ''; $scope.building_2_4_1_J = false; $scope.building_2_4_1_J_b = false; $scope.building_2_4_1_J_c = false; }
				$scope.front_office_3_1_1_text = data.front_office_3_1_1_text;
				if(data.front_office_3_1_1_A == 0){ $scope.front_office_3_1_1_A = data.front_office_3_1_1_A; $scope.front_office_3_1_1_A = true; $scope.front_office_3_1_1_A_b = false; $scope.front_office_3_1_1_A_c = false; $scope.front_office_3_1_1_A_cm = ''; } else if(data.front_office_3_1_1_A  == 2){ $scope.front_office_3_1_1_A = data.front_office_3_1_1_A; $scope.front_office_3_1_1_A = false; $scope.front_office_3_1_1_A_b = true; $scope.front_office_3_1_1_A_c = false; $scope.front_office_3_1_1_A_cm = ''; } else if(data.front_office_3_1_1_A  == ){ $scope.front_office_3_1_1_A = data.front_office_3_1_1_A; $scope.front_office_3_1_1_A = false; $scope.front_office_3_1_1_A_b = false; $scope.front_office_3_1_1_A_c = true; $scope.front_office_3_1_1_A_cm = ''; }else if( ((data.front_office_3_1_1_A  > 0 ) && (data.front_office_3_1_1_A  < 2)) || ((data.front_office_3_1_1_A  > 2 ) && (data.front_office_3_1_1_A  < )) )
				{ $scope.front_office_3_1_1_A_cm = data.front_office_3_1_1_A; $scope.front_office_3_1_1_A = false; $scope.front_office_3_1_1_A_b = false;  $scope.front_office_3_1_1_A_c = false; $scope.front_office_3_1_1_A = ''; }else{ $scope.front_office_3_1_1_A = ''; $scope.front_office_3_1_1_A_cm = ''; $scope.front_office_3_1_1_A = false; $scope.front_office_3_1_1_A_b = false; $scope.front_office_3_1_1_A_c = false; }
				if(data.front_office_3_1_1_B == 0){ $scope.front_office_3_1_1_B = data.front_office_3_1_1_B; $scope.front_office_3_1_1_B = true; $scope.front_office_3_1_1_B_b = false; $scope.front_office_3_1_1_B_c = false; $scope.front_office_3_1_1_B_cm = ''; } else if(data.front_office_3_1_1_B  == 2){ $scope.front_office_3_1_1_B = data.front_office_3_1_1_B; $scope.front_office_3_1_1_B = false; $scope.front_office_3_1_1_B_b = true; $scope.front_office_3_1_1_B_c = false; $scope.front_office_3_1_1_B_cm = ''; } else if(data.front_office_3_1_1_B  == ){ $scope.front_office_3_1_1_B = data.front_office_3_1_1_B; $scope.front_office_3_1_1_B = false; $scope.front_office_3_1_1_B_b = false; $scope.front_office_3_1_1_B_c = true; $scope.front_office_3_1_1_B_cm = ''; }else if( ((data.front_office_3_1_1_B  > 0 ) && (data.front_office_3_1_1_B  < 2)) || ((data.front_office_3_1_1_B  > 2 ) && (data.front_office_3_1_1_B  < )) )
				{ $scope.front_office_3_1_1_B_cm = data.front_office_3_1_1_B; $scope.front_office_3_1_1_B = false; $scope.front_office_3_1_1_B_b = false;  $scope.front_office_3_1_1_B_c = false; $scope.front_office_3_1_1_B = ''; }else{ $scope.front_office_3_1_1_B = ''; $scope.front_office_3_1_1_B_cm = ''; $scope.front_office_3_1_1_B = false; $scope.front_office_3_1_1_B_b = false; $scope.front_office_3_1_1_B_c = false; }
				if(data.front_office_3_1_1_C == 0){ $scope.front_office_3_1_1_C = data.front_office_3_1_1_C; $scope.front_office_3_1_1_C = true; $scope.front_office_3_1_1_C_b = false; $scope.front_office_3_1_1_C_c = false; $scope.front_office_3_1_1_C_cm = ''; } else if(data.front_office_3_1_1_C  == 2){ $scope.front_office_3_1_1_C = data.front_office_3_1_1_C; $scope.front_office_3_1_1_C = false; $scope.front_office_3_1_1_C_b = true; $scope.front_office_3_1_1_C_c = false; $scope.front_office_3_1_1_C_cm = ''; } else if(data.front_office_3_1_1_C  == ){ $scope.front_office_3_1_1_C = data.front_office_3_1_1_C; $scope.front_office_3_1_1_C = false; $scope.front_office_3_1_1_C_b = false; $scope.front_office_3_1_1_C_c = true; $scope.front_office_3_1_1_C_cm = ''; }else if( ((data.front_office_3_1_1_C  > 0 ) && (data.front_office_3_1_1_C  < 2)) || ((data.front_office_3_1_1_C  > 2 ) && (data.front_office_3_1_1_C  < )) )
				{ $scope.front_office_3_1_1_C_cm = data.front_office_3_1_1_C; $scope.front_office_3_1_1_C = false; $scope.front_office_3_1_1_C_b = false;  $scope.front_office_3_1_1_C_c = false; $scope.front_office_3_1_1_C = ''; }else{ $scope.front_office_3_1_1_C = ''; $scope.front_office_3_1_1_C_cm = ''; $scope.front_office_3_1_1_C = false; $scope.front_office_3_1_1_C_b = false; $scope.front_office_3_1_1_C_c = false; }
				if(data.front_office_3_1_1_D == 0){ $scope.front_office_3_1_1_D = data.front_office_3_1_1_D; $scope.front_office_3_1_1_D = true; $scope.front_office_3_1_1_D_b = false; $scope.front_office_3_1_1_D_c = false; $scope.front_office_3_1_1_D_cm = ''; } else if(data.front_office_3_1_1_D  == 2){ $scope.front_office_3_1_1_D = data.front_office_3_1_1_D; $scope.front_office_3_1_1_D = false; $scope.front_office_3_1_1_D_b = true; $scope.front_office_3_1_1_D_c = false; $scope.front_office_3_1_1_D_cm = ''; } else if(data.front_office_3_1_1_D  == ){ $scope.front_office_3_1_1_D = data.front_office_3_1_1_D; $scope.front_office_3_1_1_D = false; $scope.front_office_3_1_1_D_b = false; $scope.front_office_3_1_1_D_c = true; $scope.front_office_3_1_1_D_cm = ''; }else if( ((data.front_office_3_1_1_D  > 0 ) && (data.front_office_3_1_1_D  < 2)) || ((data.front_office_3_1_1_D  > 2 ) && (data.front_office_3_1_1_D  < )) )
				{ $scope.front_office_3_1_1_D_cm = data.front_office_3_1_1_D; $scope.front_office_3_1_1_D = false; $scope.front_office_3_1_1_D_b = false;  $scope.front_office_3_1_1_D_c = false; $scope.front_office_3_1_1_D = ''; }else{ $scope.front_office_3_1_1_D = ''; $scope.front_office_3_1_1_D_cm = ''; $scope.front_office_3_1_1_D = false; $scope.front_office_3_1_1_D_b = false; $scope.front_office_3_1_1_D_c = false; }
				$scope.front_office_3_1_2_text = data.front_office_3_1_2_text;
				if(data.front_office_3_1_2_A == 1){ $scope.front_office_3_1_2_A = data.front_office_3_1_2_A; $scope.front_office_3_1_2_A = true; $scope.front_office_3_1_2_A_b = false; $scope.front_office_3_1_2_A_c = false; $scope.front_office_3_1_2_A_cm = ''; } else if(data.front_office_3_1_2_A  == 3){ $scope.front_office_3_1_2_A = data.front_office_3_1_2_A; $scope.front_office_3_1_2_A = false; $scope.front_office_3_1_2_A_b = true; $scope.front_office_3_1_2_A_c = false; $scope.front_office_3_1_2_A_cm = ''; } else if(data.front_office_3_1_2_A  == 5){ 
				$scope.front_office_3_1_2_A = data.front_office_3_1_2_A; $scope.front_office_3_1_2_A = false; $scope.front_office_3_1_2_A_b = false; $scope.front_office_3_1_2_A_c = true; $scope.front_office_3_1_2_A_cm = ''; } else if( ((data.front_office_3_1_2_A  >= 0 ) && (data.front_office_3_1_2_A  < 1)) || ((data.front_office_3_1_2_A  > 1 ) && (data.front_office_3_1_2_A  < 3)) || ((data.front_office_3_1_2_A  > 3 ) && (data.front_office_3_1_2_A  < 5)) ){ $scope.front_office_3_1_2_A_cm = data.front_office_3_1_2_A; $scope.front_office_3_1_2_A = false; $scope.front_office_3_1_2_A_b = false; $scope.front_office_3_1_2_A_c = false; $scope.front_office_3_1_2_A = ''; }else{ $scope.front_office_3_1_2_A = ''; $scope.front_office_3_1_2_A_cm = ''; $scope.front_office_3_1_2_A = false; $scope.front_office_3_1_2_A_b = false; $scope.front_office_3_1_2_A_c = false;}
				if(data.front_office_3_1_2_B == 0){ $scope.front_office_3_1_2_B = data.front_office_3_1_2_B; $scope.front_office_3_1_2_B = true; $scope.front_office_3_1_2_B_b = false; $scope.front_office_3_1_2_B_c = false; $scope.front_office_3_1_2_B_cm = ''; } else if(data.front_office_3_1_2_B  == 2){ $scope.front_office_3_1_2_B = data.front_office_3_1_2_B; $scope.front_office_3_1_2_B = false; $scope.front_office_3_1_2_B_b = true; $scope.front_office_3_1_2_B_c = false; $scope.front_office_3_1_2_B_cm = ''; } else if(data.front_office_3_1_2_B  == ){ $scope.front_office_3_1_2_B = data.front_office_3_1_2_B; $scope.front_office_3_1_2_B = false; $scope.front_office_3_1_2_B_b = false; $scope.front_office_3_1_2_B_c = true; $scope.front_office_3_1_2_B_cm = ''; }else if( ((data.front_office_3_1_2_B  > 0 ) && (data.front_office_3_1_2_B  < 2)) || ((data.front_office_3_1_2_B  > 2 ) && (data.front_office_3_1_2_B  < )) )
				{ $scope.front_office_3_1_2_B_cm = data.front_office_3_1_2_B; $scope.front_office_3_1_2_B = false; $scope.front_office_3_1_2_B_b = false;  $scope.front_office_3_1_2_B_c = false; $scope.front_office_3_1_2_B = ''; }else{ $scope.front_office_3_1_2_B = ''; $scope.front_office_3_1_2_B_cm = ''; $scope.front_office_3_1_2_B = false; $scope.front_office_3_1_2_B_b = false; $scope.front_office_3_1_2_B_c = false; }
				if(data.front_office_3_1_2_C == 1){ $scope.front_office_3_1_2_C = data.front_office_3_1_2_C; $scope.front_office_3_1_2_C = true; $scope.front_office_3_1_2_C_b = false; $scope.front_office_3_1_2_C_c = false; $scope.front_office_3_1_2_C_cm = ''; } else if(data.front_office_3_1_2_C  == 3){ $scope.front_office_3_1_2_C = data.front_office_3_1_2_C; $scope.front_office_3_1_2_C = false; $scope.front_office_3_1_2_C_b = true; $scope.front_office_3_1_2_C_c = false; $scope.front_office_3_1_2_C_cm = ''; } else if(data.front_office_3_1_2_C  == 5){ 
				$scope.front_office_3_1_2_C = data.front_office_3_1_2_C; $scope.front_office_3_1_2_C = false; $scope.front_office_3_1_2_C_b = false; $scope.front_office_3_1_2_C_c = true; $scope.front_office_3_1_2_C_cm = ''; } else if( ((data.front_office_3_1_2_C  >= 0 ) && (data.front_office_3_1_2_C  < 1)) || ((data.front_office_3_1_2_C  > 1 ) && (data.front_office_3_1_2_C  < 3)) || ((data.front_office_3_1_2_C  > 3 ) && (data.front_office_3_1_2_C  < 5)) ){ $scope.front_office_3_1_2_C_cm = data.front_office_3_1_2_C; $scope.front_office_3_1_2_C = false; $scope.front_office_3_1_2_C_b = false; $scope.front_office_3_1_2_C_c = false; $scope.front_office_3_1_2_C = ''; }else{ $scope.front_office_3_1_2_C = ''; $scope.front_office_3_1_2_C_cm = ''; $scope.front_office_3_1_2_C = false; $scope.front_office_3_1_2_C_b = false; $scope.front_office_3_1_2_C_c = false;}
				if(data.front_office_3_1_2_D == 0){ $scope.front_office_3_1_2_D = data.front_office_3_1_2_D; $scope.front_office_3_1_2_D = true; $scope.front_office_3_1_2_D_b = false; $scope.front_office_3_1_2_D_c = false; $scope.front_office_3_1_2_D_cm = ''; } else if(data.front_office_3_1_2_D  == 3){ $scope.front_office_3_1_2_D = data.front_office_3_1_2_D; $scope.front_office_3_1_2_D = false; $scope.front_office_3_1_2_D_b = true; $scope.front_office_3_1_2_D_c = false; $scope.front_office_3_1_2_D_cm = ''; } else if(data.front_office_3_1_2_D  == ){ $scope.front_office_3_1_2_D = data.front_office_3_1_2_D; $scope.front_office_3_1_2_D = false; $scope.front_office_3_1_2_D_b = false; $scope.front_office_3_1_2_D_c = true; $scope.front_office_3_1_2_D_cm = ''; }else if( ((data.front_office_3_1_2_D  > 0 ) && (data.front_office_3_1_2_D  < 3)) || ((data.front_office_3_1_2_D  > 3 ) && (data.front_office_3_1_2_D  < )) )
				{ $scope.front_office_3_1_2_D_cm = data.front_office_3_1_2_D; $scope.front_office_3_1_2_D = false; $scope.front_office_3_1_2_D_b = false;  $scope.front_office_3_1_2_D_c = false; $scope.front_office_3_1_2_D = ''; }else{ $scope.front_office_3_1_2_D = ''; $scope.front_office_3_1_2_D_cm = ''; $scope.front_office_3_1_2_D = false; $scope.front_office_3_1_2_D_b = false; $scope.front_office_3_1_2_D_c = false; }
				if(data.front_office_3_1_2_E == 0){ $scope.front_office_3_1_2_E = data.front_office_3_1_2_E; $scope.front_office_3_1_2_E = true; $scope.front_office_3_1_2_E_b = false; $scope.front_office_3_1_2_E_c = false; $scope.front_office_3_1_2_E_cm = ''; } else if(data.front_office_3_1_2_E  == 3){ $scope.front_office_3_1_2_E = data.front_office_3_1_2_E; $scope.front_office_3_1_2_E = false; $scope.front_office_3_1_2_E_b = true; $scope.front_office_3_1_2_E_c = false; $scope.front_office_3_1_2_E_cm = ''; } else if(data.front_office_3_1_2_E  == ){ $scope.front_office_3_1_2_E = data.front_office_3_1_2_E; $scope.front_office_3_1_2_E = false; $scope.front_office_3_1_2_E_b = false; $scope.front_office_3_1_2_E_c = true; $scope.front_office_3_1_2_E_cm = ''; }else if( ((data.front_office_3_1_2_E  > 0 ) && (data.front_office_3_1_2_E  < 3)) || ((data.front_office_3_1_2_E  > 3 ) && (data.front_office_3_1_2_E  < )) )
				{ $scope.front_office_3_1_2_E_cm = data.front_office_3_1_2_E; $scope.front_office_3_1_2_E = false; $scope.front_office_3_1_2_E_b = false;  $scope.front_office_3_1_2_E_c = false; $scope.front_office_3_1_2_E = ''; }else{ $scope.front_office_3_1_2_E = ''; $scope.front_office_3_1_2_E_cm = ''; $scope.front_office_3_1_2_E = false; $scope.front_office_3_1_2_E_b = false; $scope.front_office_3_1_2_E_c = false; }
				if(data.front_office_3_1_2_F  == 3){ $scope.front_office_3_1_2_F  = data.front_office_3_1_2_F ; $scope.front_office_3_1_2_F = true; $scope.front_office_3_1_2_F_b = false; $scope.front_office_3_1_2_F_cm = ''; } else if(data.front_office_3_1_2_F  == 4){ $scope.front_office_3_1_2_F  = data.front_office_3_1_2_F ; $scope.front_office_3_1_2_F = false; $scope.front_office_3_1_2_F_b = true; $scope.front_office_3_1_2_F_cm = ''; }else if( ((data.front_office_3_1_2_F  > 0 ) && (data.front_office_3_1_2_F  < 3)) || ((data.front_office_3_1_2_F  > 3 ) && (data.front_office_3_1_2_F  < 4)))
				{ $scope.front_office_3_1_2_F_cm = data.front_office_3_1_2_F ; $scope.front_office_3_1_2_F = false; $scope.front_office_3_1_2_F_b = false; $scope.front_office_3_1_2_F  = ''; }else{ $scope.front_office_3_1_2_F  = ''; $scope.front_office_3_1_2_F_cm = ''; $scope.front_office_3_1_2_F = false; $scope.front_office_3_1_2_F_b = false; }
				$scope.front_office_3_2_1_text = data.front_office_3_2_1_text;
				if(data.front_office_3_2_1_A == 0){ $scope.front_office_3_2_1_A = data.front_office_3_2_1_A; $scope.front_office_3_2_1_A = true; $scope.front_office_3_2_1_A_b = false; $scope.front_office_3_2_1_A_c = false; $scope.front_office_3_2_1_A_cm = ''; } else if(data.front_office_3_2_1_A  == 3){ $scope.front_office_3_2_1_A = data.front_office_3_2_1_A; $scope.front_office_3_2_1_A = false; $scope.front_office_3_2_1_A_b = true; $scope.front_office_3_2_1_A_c = false; $scope.front_office_3_2_1_A_cm = ''; } else if(data.front_office_3_2_1_A  == ){ $scope.front_office_3_2_1_A = data.front_office_3_2_1_A; $scope.front_office_3_2_1_A = false; $scope.front_office_3_2_1_A_b = false; $scope.front_office_3_2_1_A_c = true; $scope.front_office_3_2_1_A_cm = ''; }else if( ((data.front_office_3_2_1_A  > 0 ) && (data.front_office_3_2_1_A  < 3)) || ((data.front_office_3_2_1_A  > 3 ) && (data.front_office_3_2_1_A  < )) )
				{ $scope.front_office_3_2_1_A_cm = data.front_office_3_2_1_A; $scope.front_office_3_2_1_A = false; $scope.front_office_3_2_1_A_b = false;  $scope.front_office_3_2_1_A_c = false; $scope.front_office_3_2_1_A = ''; }else{ $scope.front_office_3_2_1_A = ''; $scope.front_office_3_2_1_A_cm = ''; $scope.front_office_3_2_1_A = false; $scope.front_office_3_2_1_A_b = false; $scope.front_office_3_2_1_A_c = false; }
				if(data.front_office_3_2_1_B_a == 1){ $scope.front_office_3_2_1_B_a = data.front_office_3_2_1_B_a; $scope.front_office_3_2_1_B_a= true; $scope.front_office_3_2_1_B_a_cm = ''; } else if((data.front_office_3_2_1_B_a > 0 ) && (data.front_office_3_2_1_B_a < 1)){ $scope.front_office_3_2_1_B_a_cm = data.front_office_3_2_1_B_a; $scope.front_office_3_2_1_B_a= false; $scope.front_office_3_2_1_B_a= ''; }else{ $scope.front_office_3_2_1_B_a= ''; $scope.front_office_3_2_1_B_a_cm = ''; $scope.front_office_3_2_1_B_a= false; }
				if(data.front_office_3_2_1_B_b == 2){ $scope.front_office_3_2_1_B_b = data.front_office_3_2_1_B_b; $scope.front_office_3_2_1_B_b= true; $scope.front_office_3_2_1_B_b_cm = ''; } else if((data.front_office_3_2_1_B_b > 0 ) && (data.front_office_3_2_1_B_b < 2)){ $scope.front_office_3_2_1_B_b_cm = data.front_office_3_2_1_B_b; $scope.front_office_3_2_1_B_b= false; $scope.front_office_3_2_1_B_b= ''; }else{ $scope.front_office_3_2_1_B_b= ''; $scope.front_office_3_2_1_B_b_cm = ''; $scope.front_office_3_2_1_B_b= false; }
				if(data.front_office_3_2_1_B_c == 3){ $scope.front_office_3_2_1_B_c = data.front_office_3_2_1_B_c; $scope.front_office_3_2_1_B_c= true; $scope.front_office_3_2_1_B_c_cm = ''; } else if((data.front_office_3_2_1_B_c > 0 ) && (data.front_office_3_2_1_B_c < 3)){ $scope.front_office_3_2_1_B_c_cm = data.front_office_3_2_1_B_c; $scope.front_office_3_2_1_B_c= false; $scope.front_office_3_2_1_B_c= ''; }else{ $scope.front_office_3_2_1_B_c= ''; $scope.front_office_3_2_1_B_c_cm = ''; $scope.front_office_3_2_1_B_c= false; }
				if(data.front_office_3_2_1_C_a == 1){ $scope.front_office_3_2_1_C_a = data.front_office_3_2_1_C_a; $scope.front_office_3_2_1_C_a= true; $scope.front_office_3_2_1_C_a_cm = ''; } else if((data.front_office_3_2_1_C_a > 0 ) && (data.front_office_3_2_1_C_a < 1)){ $scope.front_office_3_2_1_C_a_cm = data.front_office_3_2_1_C_a; $scope.front_office_3_2_1_C_a= false; $scope.front_office_3_2_1_C_a= ''; }else{ $scope.front_office_3_2_1_C_a= ''; $scope.front_office_3_2_1_C_a_cm = ''; $scope.front_office_3_2_1_C_a= false; }
				if(data.front_office_3_2_1_C_b == 1){ $scope.front_office_3_2_1_C_b = data.front_office_3_2_1_C_b; $scope.front_office_3_2_1_C_b= true; $scope.front_office_3_2_1_C_b_cm = ''; } else if((data.front_office_3_2_1_C_b > 0 ) && (data.front_office_3_2_1_C_b < 1)){ $scope.front_office_3_2_1_C_b_cm = data.front_office_3_2_1_C_b; $scope.front_office_3_2_1_C_b= false; $scope.front_office_3_2_1_C_b= ''; }else{ $scope.front_office_3_2_1_C_b= ''; $scope.front_office_3_2_1_C_b_cm = ''; $scope.front_office_3_2_1_C_b= false; }
				if(data.front_office_3_2_1_C_c == 1){ $scope.front_office_3_2_1_C_c = data.front_office_3_2_1_C_c; $scope.front_office_3_2_1_C_c= true; $scope.front_office_3_2_1_C_c_cm = ''; } else if((data.front_office_3_2_1_C_c > 0 ) && (data.front_office_3_2_1_C_c < 1)){ $scope.front_office_3_2_1_C_c_cm = data.front_office_3_2_1_C_c; $scope.front_office_3_2_1_C_c= false; $scope.front_office_3_2_1_C_c= ''; }else{ $scope.front_office_3_2_1_C_c= ''; $scope.front_office_3_2_1_C_c_cm = ''; $scope.front_office_3_2_1_C_c= false; }
				if(data.front_office_3_2_1_D_a == 2){ $scope.front_office_3_2_1_D_a = data.front_office_3_2_1_D_a; $scope.front_office_3_2_1_D_a= true; $scope.front_office_3_2_1_D_a_cm = ''; } else if((data.front_office_3_2_1_D_a > 0 ) && (data.front_office_3_2_1_D_a < 2)){ $scope.front_office_3_2_1_D_a_cm = data.front_office_3_2_1_D_a; $scope.front_office_3_2_1_D_a= false; $scope.front_office_3_2_1_D_a= ''; }else{ $scope.front_office_3_2_1_D_a= ''; $scope.front_office_3_2_1_D_a_cm = ''; $scope.front_office_3_2_1_D_a= false; }
				if(data.front_office_3_2_1_D_b == 2){ $scope.front_office_3_2_1_D_b = data.front_office_3_2_1_D_b; $scope.front_office_3_2_1_D_b= true; $scope.front_office_3_2_1_D_b_cm = ''; } else if((data.front_office_3_2_1_D_b > 0 ) && (data.front_office_3_2_1_D_b < 2)){ $scope.front_office_3_2_1_D_b_cm = data.front_office_3_2_1_D_b; $scope.front_office_3_2_1_D_b= false; $scope.front_office_3_2_1_D_b= ''; }else{ $scope.front_office_3_2_1_D_b= ''; $scope.front_office_3_2_1_D_b_cm = ''; $scope.front_office_3_2_1_D_b= false; }
				if(data.front_office_3_2_1_D_c == 2){ $scope.front_office_3_2_1_D_c = data.front_office_3_2_1_D_c; $scope.front_office_3_2_1_D_c= true; $scope.front_office_3_2_1_D_c_cm = ''; } else if((data.front_office_3_2_1_D_c > 0 ) && (data.front_office_3_2_1_D_c < 2)){ $scope.front_office_3_2_1_D_c_cm = data.front_office_3_2_1_D_c; $scope.front_office_3_2_1_D_c= false; $scope.front_office_3_2_1_D_c= ''; }else{ $scope.front_office_3_2_1_D_c= ''; $scope.front_office_3_2_1_D_c_cm = ''; $scope.front_office_3_2_1_D_c= false; }
				if(data.front_office_3_2_1_D_d == 2){ $scope.front_office_3_2_1_D_d = data.front_office_3_2_1_D_d; $scope.front_office_3_2_1_D_d= true; $scope.front_office_3_2_1_D_d_cm = ''; } else if((data.front_office_3_2_1_D_d > 0 ) && (data.front_office_3_2_1_D_d < 2)){ $scope.front_office_3_2_1_D_d_cm = data.front_office_3_2_1_D_d; $scope.front_office_3_2_1_D_d= false; $scope.front_office_3_2_1_D_d= ''; }else{ $scope.front_office_3_2_1_D_d= ''; $scope.front_office_3_2_1_D_d_cm = ''; $scope.front_office_3_2_1_D_d= false; }
				$scope.front_office_3_3_1_text = data.front_office_3_3_1_text;
				if(data.front_office_3_3_1_A  == 5){ $scope.front_office_3_3_1_A  = data.front_office_3_3_1_A ; $scope.front_office_3_3_1_A = true; $scope.front_office_3_3_1_A_b = false; $scope.front_office_3_3_1_A_cm = ''; } else if(data.front_office_3_3_1_A  == 10){ $scope.front_office_3_3_1_A  = data.front_office_3_3_1_A ; $scope.front_office_3_3_1_A = false; $scope.front_office_3_3_1_A_b = true; $scope.front_office_3_3_1_A_cm = ''; }else if( ((data.front_office_3_3_1_A  > 0 ) && (data.front_office_3_3_1_A  < 5)) || ((data.front_office_3_3_1_A  > 5 ) && (data.front_office_3_3_1_A  < 10)))
				{ $scope.front_office_3_3_1_A_cm = data.front_office_3_3_1_A ; $scope.front_office_3_3_1_A = false; $scope.front_office_3_3_1_A_b = false; $scope.front_office_3_3_1_A  = ''; }else{ $scope.front_office_3_3_1_A  = ''; $scope.front_office_3_3_1_A_cm = ''; $scope.front_office_3_3_1_A = false; $scope.front_office_3_3_1_A_b = false; }
				if(data.front_office_3_3_1_B == 3){ $scope.front_office_3_3_1_B = data.front_office_3_3_1_B; $scope.front_office_3_3_1_B = true; $scope.front_office_3_3_1_B_b = false; $scope.front_office_3_3_1_B_c = false; $scope.front_office_3_3_1_B_cm = ''; } else if(data.front_office_3_3_1_B  == 5){ $scope.front_office_3_3_1_B = data.front_office_3_3_1_B; $scope.front_office_3_3_1_B = false; $scope.front_office_3_3_1_B_b = true; $scope.front_office_3_3_1_B_c = false; $scope.front_office_3_3_1_B_cm = ''; } else if(data.front_office_3_3_1_B  == 10){ 
				$scope.front_office_3_3_1_B = data.front_office_3_3_1_B; $scope.front_office_3_3_1_B = false; $scope.front_office_3_3_1_B_b = false; $scope.front_office_3_3_1_B_c = true; $scope.front_office_3_3_1_B_cm = ''; } else if( ((data.front_office_3_3_1_B  >= 0 ) && (data.front_office_3_3_1_B  < 3)) || ((data.front_office_3_3_1_B  > 3 ) && (data.front_office_3_3_1_B  < 5)) || ((data.front_office_3_3_1_B  > 5 ) && (data.front_office_3_3_1_B  < 10)) ){ $scope.front_office_3_3_1_B_cm = data.front_office_3_3_1_B; $scope.front_office_3_3_1_B = false; $scope.front_office_3_3_1_B_b = false; $scope.front_office_3_3_1_B_c = false; $scope.front_office_3_3_1_B = ''; }else{ $scope.front_office_3_3_1_B = ''; $scope.front_office_3_3_1_B_cm = ''; $scope.front_office_3_3_1_B = false; $scope.front_office_3_3_1_B_b = false; $scope.front_office_3_3_1_B_c = false;}
				$scope.front_office_3_4_1_text = data.front_office_3_4_1_text;
				if(data.front_office_3_4_1_A_a == 0){ $scope.front_office_3_4_1_A_a = data.front_office_3_4_1_A_a; $scope.front_office_3_4_1_A_a = true; $scope.front_office_3_4_1_A_a_cm = ''; } else { $scope.front_office_3_4_1_A_a = ''; $scope.front_office_3_4_1_A_a_cm = ''; $scope.front_office_3_4_1_A_a = false; }
				if(data.front_office_3_4_1_A_b == 2){ $scope.front_office_3_4_1_A_b = data.front_office_3_4_1_A_b; $scope.front_office_3_4_1_A_b= true; $scope.front_office_3_4_1_A_b_cm = ''; } else if((data.front_office_3_4_1_A_b > 0 ) && (data.front_office_3_4_1_A_b < 2)){ $scope.front_office_3_4_1_A_b_cm = data.front_office_3_4_1_A_b; $scope.front_office_3_4_1_A_b= false; $scope.front_office_3_4_1_A_b= ''; }else{ $scope.front_office_3_4_1_A_b= ''; $scope.front_office_3_4_1_A_b_cm = ''; $scope.front_office_3_4_1_A_b= false; }
				if(data.front_office_3_4_1_A_c == 3){ $scope.front_office_3_4_1_A_c = data.front_office_3_4_1_A_c; $scope.front_office_3_4_1_A_c= true; $scope.front_office_3_4_1_A_c_cm = ''; } else if((data.front_office_3_4_1_A_c > 0 ) && (data.front_office_3_4_1_A_c < 3)){ $scope.front_office_3_4_1_A_c_cm = data.front_office_3_4_1_A_c; $scope.front_office_3_4_1_A_c= false; $scope.front_office_3_4_1_A_c= ''; }else{ $scope.front_office_3_4_1_A_c= ''; $scope.front_office_3_4_1_A_c_cm = ''; $scope.front_office_3_4_1_A_c= false; }
				if(data.front_office_3_4_1_A_d == 5){ $scope.front_office_3_4_1_A_d = data.front_office_3_4_1_A_d; $scope.front_office_3_4_1_A_d= true; $scope.front_office_3_4_1_A_d_cm = ''; } else if((data.front_office_3_4_1_A_d > 0 ) && (data.front_office_3_4_1_A_d < 5)){ $scope.front_office_3_4_1_A_d_cm = data.front_office_3_4_1_A_d; $scope.front_office_3_4_1_A_d= false; $scope.front_office_3_4_1_A_d= ''; }else{ $scope.front_office_3_4_1_A_d= ''; $scope.front_office_3_4_1_A_d_cm = ''; $scope.front_office_3_4_1_A_d= false; }
				$scope.front_office_3_5_1_text = data.front_office_3_5_1_text;
				if(data.front_office_3_5_1_A == 0){ $scope.front_office_3_5_1_A = data.front_office_3_5_1_A; $scope.front_office_3_5_1_A = true; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = false; $scope.front_office_3_5_1_A_cm = ''; } else if(data.front_office_3_5_1_A  == 5){ $scope.front_office_3_5_1_A = data.front_office_3_5_1_A; $scope.front_office_3_5_1_A = false; $scope.front_office_3_5_1_A_b = true; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = false; $scope.front_office_3_5_1_A_cm = ''; } else if(data.front_office_3_5_1_A  == 10){ $scope.front_office_3_5_1_A = data.front_office_3_5_1_A; $scope.front_office_3_5_1_A = false; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = true; $scope.front_office_3_5_1_A_d = false; $scope.front_office_3_5_1_A_cm = ''; }else if(data.front_office_3_5_1_A  == 15){ $scope.front_office_3_5_1_A = data.front_office_3_5_1_A; $scope.front_office_3_5_1_A = false; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = true; $scope.front_office_3_5_1_A_cm = ''; } else if( ((data.front_office_3_5_1_A  > 0 ) && (data.front_office_3_5_1_A  < 5)) || ((data.front_office_3_5_1_A  > 5 ) && (data.front_office_3_5_1_A  < 10)) || ((data.front_office_3_5_1_A  > 10 ) && (data.front_office_3_5_1_A  < 15)) )
				{ $scope.front_office_3_5_1_A_cm = data.front_office_3_5_1_A; $scope.front_office_3_5_1_A = false; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = false; $scope.front_office_3_5_1_A = ''; }else{ $scope.front_office_3_5_1_A = ''; $scope.front_office_3_5_1_A_cm = ''; $scope.front_office_3_5_1_A = false; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = false;}
				if(data.front_office_3_5_1_B  == 10){ $scope.front_office_3_5_1_B  = data.front_office_3_5_1_B ; $scope.front_office_3_5_1_B = true; $scope.front_office_3_5_1_B_b = false; $scope.front_office_3_5_1_B_cm = ''; } else if(data.front_office_3_5_1_B  == 15){ $scope.front_office_3_5_1_B  = data.front_office_3_5_1_B ; $scope.front_office_3_5_1_B = false; $scope.front_office_3_5_1_B_b = true; $scope.front_office_3_5_1_B_cm = ''; }else if( ((data.front_office_3_5_1_B  > 0 ) && (data.front_office_3_5_1_B  < 10)) || ((data.front_office_3_5_1_B  > 10 ) && (data.front_office_3_5_1_B  < 15)))
				{ $scope.front_office_3_5_1_B_cm = data.front_office_3_5_1_B ; $scope.front_office_3_5_1_B = false; $scope.front_office_3_5_1_B_b = false; $scope.front_office_3_5_1_B  = ''; }else{ $scope.front_office_3_5_1_B  = ''; $scope.front_office_3_5_1_B_cm = ''; $scope.front_office_3_5_1_B = false; $scope.front_office_3_5_1_B_b = false; }
				if(data.front_office_3_5_1_C == 0){ $scope.front_office_3_5_1_C = data.front_office_3_5_1_C; $scope.front_office_3_5_1_C = true; $scope.front_office_3_5_1_C_b = false; $scope.front_office_3_5_1_C_c = false; $scope.front_office_3_5_1_C_cm = ''; } else if(data.front_office_3_5_1_C  == 10){ $scope.front_office_3_5_1_C = data.front_office_3_5_1_C; $scope.front_office_3_5_1_C = false; $scope.front_office_3_5_1_C_b = true; $scope.front_office_3_5_1_C_c = false; $scope.front_office_3_5_1_C_cm = ''; } else if(data.front_office_3_5_1_C  == ){ $scope.front_office_3_5_1_C = data.front_office_3_5_1_C; $scope.front_office_3_5_1_C = false; $scope.front_office_3_5_1_C_b = false; $scope.front_office_3_5_1_C_c = true; $scope.front_office_3_5_1_C_cm = ''; }else if( ((data.front_office_3_5_1_C  > 0 ) && (data.front_office_3_5_1_C  < 10)) || ((data.front_office_3_5_1_C  > 10 ) && (data.front_office_3_5_1_C  < )) )
				{ $scope.front_office_3_5_1_C_cm = data.front_office_3_5_1_C; $scope.front_office_3_5_1_C = false; $scope.front_office_3_5_1_C_b = false;  $scope.front_office_3_5_1_C_c = false; $scope.front_office_3_5_1_C = ''; }else{ $scope.front_office_3_5_1_C = ''; $scope.front_office_3_5_1_C_cm = ''; $scope.front_office_3_5_1_C = false; $scope.front_office_3_5_1_C_b = false; $scope.front_office_3_5_1_C_c = false; }
				$scope.front_office_3_6_1_text = data.front_office_3_6_1_text;
				if(data.front_office_3_6_1_A == 0){ $scope.front_office_3_6_1_A = data.front_office_3_6_1_A; $scope.front_office_3_6_1_A = true; $scope.front_office_3_6_1_A_b = false; $scope.front_office_3_6_1_A_c = false; $scope.front_office_3_6_1_A_cm = ''; } else if(data.front_office_3_6_1_A  == 5){ $scope.front_office_3_6_1_A = data.front_office_3_6_1_A; $scope.front_office_3_6_1_A = false; $scope.front_office_3_6_1_A_b = true; $scope.front_office_3_6_1_A_c = false; $scope.front_office_3_6_1_A_cm = ''; } else if(data.front_office_3_6_1_A  == ){ $scope.front_office_3_6_1_A = data.front_office_3_6_1_A; $scope.front_office_3_6_1_A = false; $scope.front_office_3_6_1_A_b = false; $scope.front_office_3_6_1_A_c = true; $scope.front_office_3_6_1_A_cm = ''; }else if( ((data.front_office_3_6_1_A  > 0 ) && (data.front_office_3_6_1_A  < 5)) || ((data.front_office_3_6_1_A  > 5 ) && (data.front_office_3_6_1_A  < )) )
				{ $scope.front_office_3_6_1_A_cm = data.front_office_3_6_1_A; $scope.front_office_3_6_1_A = false; $scope.front_office_3_6_1_A_b = false;  $scope.front_office_3_6_1_A_c = false; $scope.front_office_3_6_1_A = ''; }else{ $scope.front_office_3_6_1_A = ''; $scope.front_office_3_6_1_A_cm = ''; $scope.front_office_3_6_1_A = false; $scope.front_office_3_6_1_A_b = false; $scope.front_office_3_6_1_A_c = false; }
				if(data.front_office_3_6_1_B == 0){ $scope.front_office_3_6_1_B = data.front_office_3_6_1_B; $scope.front_office_3_6_1_B = true; $scope.front_office_3_6_1_B_b = false; $scope.front_office_3_6_1_B_c = false; $scope.front_office_3_6_1_B_cm = ''; } else if(data.front_office_3_6_1_B  == 5){ $scope.front_office_3_6_1_B = data.front_office_3_6_1_B; $scope.front_office_3_6_1_B = false; $scope.front_office_3_6_1_B_b = true; $scope.front_office_3_6_1_B_c = false; $scope.front_office_3_6_1_B_cm = ''; } else if(data.front_office_3_6_1_B  == ){ $scope.front_office_3_6_1_B = data.front_office_3_6_1_B; $scope.front_office_3_6_1_B = false; $scope.front_office_3_6_1_B_b = false; $scope.front_office_3_6_1_B_c = true; $scope.front_office_3_6_1_B_cm = ''; }else if( ((data.front_office_3_6_1_B  > 0 ) && (data.front_office_3_6_1_B  < 5)) || ((data.front_office_3_6_1_B  > 5 ) && (data.front_office_3_6_1_B  < )) )
				{ $scope.front_office_3_6_1_B_cm = data.front_office_3_6_1_B; $scope.front_office_3_6_1_B = false; $scope.front_office_3_6_1_B_b = false;  $scope.front_office_3_6_1_B_c = false; $scope.front_office_3_6_1_B = ''; }else{ $scope.front_office_3_6_1_B = ''; $scope.front_office_3_6_1_B_cm = ''; $scope.front_office_3_6_1_B = false; $scope.front_office_3_6_1_B_b = false; $scope.front_office_3_6_1_B_c = false; }
				$scope.front_office_3_7_1_text = data.front_office_3_7_1_text;
				if(data.front_office_3_7_1_A_a == 3){ $scope.front_office_3_7_1_A_a = data.front_office_3_7_1_A_a; $scope.front_office_3_7_1_A_a= true; $scope.front_office_3_7_1_A_a_cm = ''; } else if((data.front_office_3_7_1_A_a > 0 ) && (data.front_office_3_7_1_A_a < 3)){ $scope.front_office_3_7_1_A_a_cm = data.front_office_3_7_1_A_a; $scope.front_office_3_7_1_A_a= false; $scope.front_office_3_7_1_A_a= ''; }else{ $scope.front_office_3_7_1_A_a= ''; $scope.front_office_3_7_1_A_a_cm = ''; $scope.front_office_3_7_1_A_a= false; }
				if(data.front_office_3_7_1_A_b == 3){ $scope.front_office_3_7_1_A_b = data.front_office_3_7_1_A_b; $scope.front_office_3_7_1_A_b= true; $scope.front_office_3_7_1_A_b_cm = ''; } else if((data.front_office_3_7_1_A_b > 0 ) && (data.front_office_3_7_1_A_b < 3)){ $scope.front_office_3_7_1_A_b_cm = data.front_office_3_7_1_A_b; $scope.front_office_3_7_1_A_b= false; $scope.front_office_3_7_1_A_b= ''; }else{ $scope.front_office_3_7_1_A_b= ''; $scope.front_office_3_7_1_A_b_cm = ''; $scope.front_office_3_7_1_A_b= false; }
				if(data.front_office_3_7_1_A_c == 4){ $scope.front_office_3_7_1_A_c = data.front_office_3_7_1_A_c; $scope.front_office_3_7_1_A_c= true; $scope.front_office_3_7_1_A_c_cm = ''; } else if((data.front_office_3_7_1_A_c > 0 ) && (data.front_office_3_7_1_A_c < 4)){ $scope.front_office_3_7_1_A_c_cm = data.front_office_3_7_1_A_c; $scope.front_office_3_7_1_A_c= false; $scope.front_office_3_7_1_A_c= ''; }else{ $scope.front_office_3_7_1_A_c= ''; $scope.front_office_3_7_1_A_c_cm = ''; $scope.front_office_3_7_1_A_c= false; }
				if(data.front_office_3_7_1_B_a == 3){ $scope.front_office_3_7_1_B_a = data.front_office_3_7_1_B_a; $scope.front_office_3_7_1_B_a= true; $scope.front_office_3_7_1_B_a_cm = ''; } else if((data.front_office_3_7_1_B_a > 0 ) && (data.front_office_3_7_1_B_a < 3)){ $scope.front_office_3_7_1_B_a_cm = data.front_office_3_7_1_B_a; $scope.front_office_3_7_1_B_a= false; $scope.front_office_3_7_1_B_a= ''; }else{ $scope.front_office_3_7_1_B_a= ''; $scope.front_office_3_7_1_B_a_cm = ''; $scope.front_office_3_7_1_B_a= false; }
				if(data.front_office_3_7_1_B_b == 3){ $scope.front_office_3_7_1_B_b = data.front_office_3_7_1_B_b; $scope.front_office_3_7_1_B_b= true; $scope.front_office_3_7_1_B_b_cm = ''; } else if((data.front_office_3_7_1_B_b > 0 ) && (data.front_office_3_7_1_B_b < 3)){ $scope.front_office_3_7_1_B_b_cm = data.front_office_3_7_1_B_b; $scope.front_office_3_7_1_B_b= false; $scope.front_office_3_7_1_B_b= ''; }else{ $scope.front_office_3_7_1_B_b= ''; $scope.front_office_3_7_1_B_b_cm = ''; $scope.front_office_3_7_1_B_b= false; }
				if(data.front_office_3_7_1_B_c == 4){ $scope.front_office_3_7_1_B_c = data.front_office_3_7_1_B_c; $scope.front_office_3_7_1_B_c= true; $scope.front_office_3_7_1_B_c_cm = ''; } else if((data.front_office_3_7_1_B_c > 0 ) && (data.front_office_3_7_1_B_c < 4)){ $scope.front_office_3_7_1_B_c_cm = data.front_office_3_7_1_B_c; $scope.front_office_3_7_1_B_c= false; $scope.front_office_3_7_1_B_c= ''; }else{ $scope.front_office_3_7_1_B_c= ''; $scope.front_office_3_7_1_B_c_cm = ''; $scope.front_office_3_7_1_B_c= false; }
				$scope.front_office_3_8_1_text = data.front_office_3_8_1_text;
				if(data.front_office_3_8_1_A == 0){ $scope.front_office_3_8_1_A = data.front_office_3_8_1_A; $scope.front_office_3_8_1_A = true; $scope.front_office_3_8_1_A_b = false; $scope.front_office_3_8_1_A_c = false; $scope.front_office_3_8_1_A_cm = ''; } else if(data.front_office_3_8_1_A  == 5){ $scope.front_office_3_8_1_A = data.front_office_3_8_1_A; $scope.front_office_3_8_1_A = false; $scope.front_office_3_8_1_A_b = true; $scope.front_office_3_8_1_A_c = false; $scope.front_office_3_8_1_A_cm = ''; } else if(data.front_office_3_8_1_A  == ){ $scope.front_office_3_8_1_A = data.front_office_3_8_1_A; $scope.front_office_3_8_1_A = false; $scope.front_office_3_8_1_A_b = false; $scope.front_office_3_8_1_A_c = true; $scope.front_office_3_8_1_A_cm = ''; }else if( ((data.front_office_3_8_1_A  > 0 ) && (data.front_office_3_8_1_A  < 5)) || ((data.front_office_3_8_1_A  > 5 ) && (data.front_office_3_8_1_A  < )) )
				{ $scope.front_office_3_8_1_A_cm = data.front_office_3_8_1_A; $scope.front_office_3_8_1_A = false; $scope.front_office_3_8_1_A_b = false;  $scope.front_office_3_8_1_A_c = false; $scope.front_office_3_8_1_A = ''; }else{ $scope.front_office_3_8_1_A = ''; $scope.front_office_3_8_1_A_cm = ''; $scope.front_office_3_8_1_A = false; $scope.front_office_3_8_1_A_b = false; $scope.front_office_3_8_1_A_c = false; }
				if(data.front_office_3_8_1_B  == 4){ $scope.front_office_3_8_1_B  = data.front_office_3_8_1_B ; $scope.front_office_3_8_1_B = true; $scope.front_office_3_8_1_B_b = false; $scope.front_office_3_8_1_B_cm = ''; } else if(data.front_office_3_8_1_B  == 7){ $scope.front_office_3_8_1_B  = data.front_office_3_8_1_B ; $scope.front_office_3_8_1_B = false; $scope.front_office_3_8_1_B_b = true; $scope.front_office_3_8_1_B_cm = ''; }else if( ((data.front_office_3_8_1_B  > 0 ) && (data.front_office_3_8_1_B  < 4)) || ((data.front_office_3_8_1_B  > 4 ) && (data.front_office_3_8_1_B  < 7)))
				{ $scope.front_office_3_8_1_B_cm = data.front_office_3_8_1_B ; $scope.front_office_3_8_1_B = false; $scope.front_office_3_8_1_B_b = false; $scope.front_office_3_8_1_B  = ''; }else{ $scope.front_office_3_8_1_B  = ''; $scope.front_office_3_8_1_B_cm = ''; $scope.front_office_3_8_1_B = false; $scope.front_office_3_8_1_B_b = false; }
				if(data.front_office_3_8_1_C == 0){ $scope.front_office_3_8_1_C = data.front_office_3_8_1_C; $scope.front_office_3_8_1_C = true; $scope.front_office_3_8_1_C_b = false; $scope.front_office_3_8_1_C_c = false; $scope.front_office_3_8_1_C_cm = ''; } else if(data.front_office_3_8_1_C  == 5){ $scope.front_office_3_8_1_C = data.front_office_3_8_1_C; $scope.front_office_3_8_1_C = false; $scope.front_office_3_8_1_C_b = true; $scope.front_office_3_8_1_C_c = false; $scope.front_office_3_8_1_C_cm = ''; } else if(data.front_office_3_8_1_C  == ){ $scope.front_office_3_8_1_C = data.front_office_3_8_1_C; $scope.front_office_3_8_1_C = false; $scope.front_office_3_8_1_C_b = false; $scope.front_office_3_8_1_C_c = true; $scope.front_office_3_8_1_C_cm = ''; }else if( ((data.front_office_3_8_1_C  > 0 ) && (data.front_office_3_8_1_C  < 5)) || ((data.front_office_3_8_1_C  > 5 ) && (data.front_office_3_8_1_C  < )) )
				{ $scope.front_office_3_8_1_C_cm = data.front_office_3_8_1_C; $scope.front_office_3_8_1_C = false; $scope.front_office_3_8_1_C_b = false;  $scope.front_office_3_8_1_C_c = false; $scope.front_office_3_8_1_C = ''; }else{ $scope.front_office_3_8_1_C = ''; $scope.front_office_3_8_1_C_cm = ''; $scope.front_office_3_8_1_C = false; $scope.front_office_3_8_1_C_b = false; $scope.front_office_3_8_1_C_c = false; }
				if(data.front_office_3_8_1_D == 0){ $scope.front_office_3_8_1_D = data.front_office_3_8_1_D; $scope.front_office_3_8_1_D = true; $scope.front_office_3_8_1_D_b = false; $scope.front_office_3_8_1_D_c = false; $scope.front_office_3_8_1_D_cm = ''; } else if(data.front_office_3_8_1_D  == 5){ $scope.front_office_3_8_1_D = data.front_office_3_8_1_D; $scope.front_office_3_8_1_D = false; $scope.front_office_3_8_1_D_b = true; $scope.front_office_3_8_1_D_c = false; $scope.front_office_3_8_1_D_cm = ''; } else if(data.front_office_3_8_1_D  == ){ $scope.front_office_3_8_1_D = data.front_office_3_8_1_D; $scope.front_office_3_8_1_D = false; $scope.front_office_3_8_1_D_b = false; $scope.front_office_3_8_1_D_c = true; $scope.front_office_3_8_1_D_cm = ''; }else if( ((data.front_office_3_8_1_D  > 0 ) && (data.front_office_3_8_1_D  < 5)) || ((data.front_office_3_8_1_D  > 5 ) && (data.front_office_3_8_1_D  < )) )
				{ $scope.front_office_3_8_1_D_cm = data.front_office_3_8_1_D; $scope.front_office_3_8_1_D = false; $scope.front_office_3_8_1_D_b = false;  $scope.front_office_3_8_1_D_c = false; $scope.front_office_3_8_1_D = ''; }else{ $scope.front_office_3_8_1_D = ''; $scope.front_office_3_8_1_D_cm = ''; $scope.front_office_3_8_1_D = false; $scope.front_office_3_8_1_D_b = false; $scope.front_office_3_8_1_D_c = false; }
				if(data.front_office_3_8_1_E  == 5){ $scope.front_office_3_8_1_E  = data.front_office_3_8_1_E ; $scope.front_office_3_8_1_E = true; $scope.front_office_3_8_1_E_b = false; $scope.front_office_3_8_1_E_cm = ''; } else if(data.front_office_3_8_1_E  == 8){ $scope.front_office_3_8_1_E  = data.front_office_3_8_1_E ; $scope.front_office_3_8_1_E = false; $scope.front_office_3_8_1_E_b = true; $scope.front_office_3_8_1_E_cm = ''; }else if( ((data.front_office_3_8_1_E  > 0 ) && (data.front_office_3_8_1_E  < 5)) || ((data.front_office_3_8_1_E  > 5 ) && (data.front_office_3_8_1_E  < 8)))
				{ $scope.front_office_3_8_1_E_cm = data.front_office_3_8_1_E ; $scope.front_office_3_8_1_E = false; $scope.front_office_3_8_1_E_b = false; $scope.front_office_3_8_1_E  = ''; }else{ $scope.front_office_3_8_1_E  = ''; $scope.front_office_3_8_1_E_cm = ''; $scope.front_office_3_8_1_E = false; $scope.front_office_3_8_1_E_b = false; }
				$scope.lobby_lounge_other_public_areas_4_0_1_text = data.lobby_lounge_other_public_areas_4_0_1_text;
				if(data.lobby_lounge_other_public_areas_4_0_1_A == 0){ $scope.lobby_lounge_other_public_areas_4_0_1_A = data.lobby_lounge_other_public_areas_4_0_1_A; $scope.lobby_lounge_other_public_areas_4_0_1_A = true; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_A  == 5){ $scope.lobby_lounge_other_public_areas_4_0_1_A = data.lobby_lounge_other_public_areas_4_0_1_A; $scope.lobby_lounge_other_public_areas_4_0_1_A = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_A  == 8){ $scope.lobby_lounge_other_public_areas_4_0_1_A = data.lobby_lounge_other_public_areas_4_0_1_A; $scope.lobby_lounge_other_public_areas_4_0_1_A = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_0_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_A  < 5)) || ((data.lobby_lounge_other_public_areas_4_0_1_A  > 5 ) && (data.lobby_lounge_other_public_areas_4_0_1_A  < 8)) )
				{ $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = data.lobby_lounge_other_public_areas_4_0_1_A; $scope.lobby_lounge_other_public_areas_4_0_1_A = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = false;  $scope.lobby_lounge_other_public_areas_4_0_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_A = ''; $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_A = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_c = false; }
				if(data.lobby_lounge_other_public_areas_4_0_1_B == 2){ $scope.lobby_lounge_other_public_areas_4_0_1_B = data.lobby_lounge_other_public_areas_4_0_1_B; $scope.lobby_lounge_other_public_areas_4_0_1_B = true; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_B  == 4){ $scope.lobby_lounge_other_public_areas_4_0_1_B = data.lobby_lounge_other_public_areas_4_0_1_B; $scope.lobby_lounge_other_public_areas_4_0_1_B = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_B  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_0_1_B = data.lobby_lounge_other_public_areas_4_0_1_B; $scope.lobby_lounge_other_public_areas_4_0_1_B = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_0_1_B  >= 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_B  < 2)) || ((data.lobby_lounge_other_public_areas_4_0_1_B  > 2 ) && (data.lobby_lounge_other_public_areas_4_0_1_B  < 4)) || ((data.lobby_lounge_other_public_areas_4_0_1_B  > 4 ) && (data.lobby_lounge_other_public_areas_4_0_1_B  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = data.lobby_lounge_other_public_areas_4_0_1_B; $scope.lobby_lounge_other_public_areas_4_0_1_B = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_B = ''; $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_B = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = false;}
				if(data.lobby_lounge_other_public_areas_4_0_1_C == 0){ $scope.lobby_lounge_other_public_areas_4_0_1_C = data.lobby_lounge_other_public_areas_4_0_1_C; $scope.lobby_lounge_other_public_areas_4_0_1_C = true; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_C  == 5){ $scope.lobby_lounge_other_public_areas_4_0_1_C = data.lobby_lounge_other_public_areas_4_0_1_C; $scope.lobby_lounge_other_public_areas_4_0_1_C = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_C  == ){ $scope.lobby_lounge_other_public_areas_4_0_1_C = data.lobby_lounge_other_public_areas_4_0_1_C; $scope.lobby_lounge_other_public_areas_4_0_1_C = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_0_1_C  > 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_C  < 5)) || ((data.lobby_lounge_other_public_areas_4_0_1_C  > 5 ) && (data.lobby_lounge_other_public_areas_4_0_1_C  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = data.lobby_lounge_other_public_areas_4_0_1_C; $scope.lobby_lounge_other_public_areas_4_0_1_C = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = false;  $scope.lobby_lounge_other_public_areas_4_0_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_C = ''; $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_C = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_c = false; }
				if(data.lobby_lounge_other_public_areas_4_0_1_D == 0){ $scope.lobby_lounge_other_public_areas_4_0_1_D = data.lobby_lounge_other_public_areas_4_0_1_D; $scope.lobby_lounge_other_public_areas_4_0_1_D = true; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_D  == 5){ $scope.lobby_lounge_other_public_areas_4_0_1_D = data.lobby_lounge_other_public_areas_4_0_1_D; $scope.lobby_lounge_other_public_areas_4_0_1_D = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_D  == ){ $scope.lobby_lounge_other_public_areas_4_0_1_D = data.lobby_lounge_other_public_areas_4_0_1_D; $scope.lobby_lounge_other_public_areas_4_0_1_D = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_0_1_D  > 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_D  < 5)) || ((data.lobby_lounge_other_public_areas_4_0_1_D  > 5 ) && (data.lobby_lounge_other_public_areas_4_0_1_D  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = data.lobby_lounge_other_public_areas_4_0_1_D; $scope.lobby_lounge_other_public_areas_4_0_1_D = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = false;  $scope.lobby_lounge_other_public_areas_4_0_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_D = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_D = ''; $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_D = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_c = false; }
				if(data.lobby_lounge_other_public_areas_4_0_1_E == 0){ $scope.lobby_lounge_other_public_areas_4_0_1_E = data.lobby_lounge_other_public_areas_4_0_1_E; $scope.lobby_lounge_other_public_areas_4_0_1_E = true; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_E  == 5){ $scope.lobby_lounge_other_public_areas_4_0_1_E = data.lobby_lounge_other_public_areas_4_0_1_E; $scope.lobby_lounge_other_public_areas_4_0_1_E = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_E  == 7){ $scope.lobby_lounge_other_public_areas_4_0_1_E = data.lobby_lounge_other_public_areas_4_0_1_E; $scope.lobby_lounge_other_public_areas_4_0_1_E = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_0_1_E  > 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_E  < 5)) || ((data.lobby_lounge_other_public_areas_4_0_1_E  > 5 ) && (data.lobby_lounge_other_public_areas_4_0_1_E  < 7)) )
				{ $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = data.lobby_lounge_other_public_areas_4_0_1_E; $scope.lobby_lounge_other_public_areas_4_0_1_E = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = false;  $scope.lobby_lounge_other_public_areas_4_0_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_E = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_E = ''; $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_E = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_c = false; }
				if(data.lobby_lounge_other_public_areas_4_0_1_F == 0){ $scope.lobby_lounge_other_public_areas_4_0_1_F = data.lobby_lounge_other_public_areas_4_0_1_F; $scope.lobby_lounge_other_public_areas_4_0_1_F = true; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_F  == 5){ $scope.lobby_lounge_other_public_areas_4_0_1_F = data.lobby_lounge_other_public_areas_4_0_1_F; $scope.lobby_lounge_other_public_areas_4_0_1_F = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = true; $scope.lobby_lounge_other_public_areas_4_0_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_0_1_F  == 8){ $scope.lobby_lounge_other_public_areas_4_0_1_F = data.lobby_lounge_other_public_areas_4_0_1_F; $scope.lobby_lounge_other_public_areas_4_0_1_F = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_c = true; $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_0_1_F  > 0 ) && (data.lobby_lounge_other_public_areas_4_0_1_F  < 5)) || ((data.lobby_lounge_other_public_areas_4_0_1_F  > 5 ) && (data.lobby_lounge_other_public_areas_4_0_1_F  < 8)) )
				{ $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = data.lobby_lounge_other_public_areas_4_0_1_F; $scope.lobby_lounge_other_public_areas_4_0_1_F = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = false;  $scope.lobby_lounge_other_public_areas_4_0_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_0_1_F = ''; }else{ $scope.lobby_lounge_other_public_areas_4_0_1_F = ''; $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = ''; $scope.lobby_lounge_other_public_areas_4_0_1_F = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_c = false; }
				$scope.lobby_lounge_other_public_areas_4_1_1_text = data.lobby_lounge_other_public_areas_4_1_1_text;
				if(data.lobby_lounge_other_public_areas_4_1_1_A  == 3){ $scope.lobby_lounge_other_public_areas_4_1_1_A  = data.lobby_lounge_other_public_areas_4_1_1_A ; $scope.lobby_lounge_other_public_areas_4_1_1_A = true; $scope.lobby_lounge_other_public_areas_4_1_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_1_1_A  == 5){ $scope.lobby_lounge_other_public_areas_4_1_1_A  = data.lobby_lounge_other_public_areas_4_1_1_A ; $scope.lobby_lounge_other_public_areas_4_1_1_A = false; $scope.lobby_lounge_other_public_areas_4_1_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_1_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_1_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_A  < 3)) || ((data.lobby_lounge_other_public_areas_4_1_1_A  > 3 ) && (data.lobby_lounge_other_public_areas_4_1_1_A  < 5)))
				{ $scope.lobby_lounge_other_public_areas_4_1_1_A_cm = data.lobby_lounge_other_public_areas_4_1_1_A ; $scope.lobby_lounge_other_public_areas_4_1_1_A = false; $scope.lobby_lounge_other_public_areas_4_1_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_A  = ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_A  = ''; $scope.lobby_lounge_other_public_areas_4_1_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_A = false; $scope.lobby_lounge_other_public_areas_4_1_1_A_b = false; }
				if(data.lobby_lounge_other_public_areas_4_1_1_B_a == 5){ $scope.lobby_lounge_other_public_areas_4_1_1_B_a = data.lobby_lounge_other_public_areas_4_1_1_B_a; $scope.lobby_lounge_other_public_areas_4_1_1_B_a= true; $scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_1_1_B_a > 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_B_a < 5)){ $scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm = data.lobby_lounge_other_public_areas_4_1_1_B_a; $scope.lobby_lounge_other_public_areas_4_1_1_B_a= false; $scope.lobby_lounge_other_public_areas_4_1_1_B_a= ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_B_a= ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_a= false; }
				if(data.lobby_lounge_other_public_areas_4_1_1_B_b == 7){ $scope.lobby_lounge_other_public_areas_4_1_1_B_b = data.lobby_lounge_other_public_areas_4_1_1_B_b; $scope.lobby_lounge_other_public_areas_4_1_1_B_b= true; $scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_1_1_B_b > 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_B_b < 7)){ $scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm = data.lobby_lounge_other_public_areas_4_1_1_B_b; $scope.lobby_lounge_other_public_areas_4_1_1_B_b= false; $scope.lobby_lounge_other_public_areas_4_1_1_B_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_B_b= ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_b= false; }
				if(data.lobby_lounge_other_public_areas_4_1_1_B_c == 10){ $scope.lobby_lounge_other_public_areas_4_1_1_B_c = data.lobby_lounge_other_public_areas_4_1_1_B_c; $scope.lobby_lounge_other_public_areas_4_1_1_B_c= true; $scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_1_1_B_c > 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_B_c < 10)){ $scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm = data.lobby_lounge_other_public_areas_4_1_1_B_c; $scope.lobby_lounge_other_public_areas_4_1_1_B_c= false; $scope.lobby_lounge_other_public_areas_4_1_1_B_c= ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_B_c= ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_c= false; }
				if(data.lobby_lounge_other_public_areas_4_1_1_B_d == 13){ $scope.lobby_lounge_other_public_areas_4_1_1_B_d = data.lobby_lounge_other_public_areas_4_1_1_B_d; $scope.lobby_lounge_other_public_areas_4_1_1_B_d= true; $scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_1_1_B_d > 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_B_d < 13)){ $scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm = data.lobby_lounge_other_public_areas_4_1_1_B_d; $scope.lobby_lounge_other_public_areas_4_1_1_B_d= false; $scope.lobby_lounge_other_public_areas_4_1_1_B_d= ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_B_d= ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_d= false; }
				if(data.lobby_lounge_other_public_areas_4_1_1_C == 4){ $scope.lobby_lounge_other_public_areas_4_1_1_C = data.lobby_lounge_other_public_areas_4_1_1_C; $scope.lobby_lounge_other_public_areas_4_1_1_C = true; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_1_1_C  == 7){ $scope.lobby_lounge_other_public_areas_4_1_1_C = data.lobby_lounge_other_public_areas_4_1_1_C; $scope.lobby_lounge_other_public_areas_4_1_1_C = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_1_1_C  == 10){ 
				$scope.lobby_lounge_other_public_areas_4_1_1_C = data.lobby_lounge_other_public_areas_4_1_1_C; $scope.lobby_lounge_other_public_areas_4_1_1_C = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_1_1_C  >= 0 ) && (data.lobby_lounge_other_public_areas_4_1_1_C  < 4)) || ((data.lobby_lounge_other_public_areas_4_1_1_C  > 4 ) && (data.lobby_lounge_other_public_areas_4_1_1_C  < 7)) || ((data.lobby_lounge_other_public_areas_4_1_1_C  > 7 ) && (data.lobby_lounge_other_public_areas_4_1_1_C  < 10)) ){ $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = data.lobby_lounge_other_public_areas_4_1_1_C; $scope.lobby_lounge_other_public_areas_4_1_1_C = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_1_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_1_1_C = ''; $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_1_1_C = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = false;}
				$scope.lobby_lounge_other_public_areas_4_2_1_text = data.lobby_lounge_other_public_areas_4_2_1_text;
				if(data.lobby_lounge_other_public_areas_4_2_1_A == 2){ $scope.lobby_lounge_other_public_areas_4_2_1_A = data.lobby_lounge_other_public_areas_4_2_1_A; $scope.lobby_lounge_other_public_areas_4_2_1_A = true; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_A  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_A = data.lobby_lounge_other_public_areas_4_2_1_A; $scope.lobby_lounge_other_public_areas_4_2_1_A = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_A  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_2_1_A = data.lobby_lounge_other_public_areas_4_2_1_A; $scope.lobby_lounge_other_public_areas_4_2_1_A = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_2_1_A  >= 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_A  < 2)) || ((data.lobby_lounge_other_public_areas_4_2_1_A  > 2 ) && (data.lobby_lounge_other_public_areas_4_2_1_A  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_A  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_A  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = data.lobby_lounge_other_public_areas_4_2_1_A; $scope.lobby_lounge_other_public_areas_4_2_1_A = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_A = ''; $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_A = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = false;}
				if(data.lobby_lounge_other_public_areas_4_2_1_B == 3){ $scope.lobby_lounge_other_public_areas_4_2_1_B = data.lobby_lounge_other_public_areas_4_2_1_B; $scope.lobby_lounge_other_public_areas_4_2_1_B = true; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_B  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_B = data.lobby_lounge_other_public_areas_4_2_1_B; $scope.lobby_lounge_other_public_areas_4_2_1_B = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_B  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_2_1_B = data.lobby_lounge_other_public_areas_4_2_1_B; $scope.lobby_lounge_other_public_areas_4_2_1_B = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_2_1_B  >= 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_B  < 3)) || ((data.lobby_lounge_other_public_areas_4_2_1_B  > 3 ) && (data.lobby_lounge_other_public_areas_4_2_1_B  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_B  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_B  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = data.lobby_lounge_other_public_areas_4_2_1_B; $scope.lobby_lounge_other_public_areas_4_2_1_B = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_B = ''; $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_B = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = false;}
				if(data.lobby_lounge_other_public_areas_4_2_1_C == 3){ $scope.lobby_lounge_other_public_areas_4_2_1_C = data.lobby_lounge_other_public_areas_4_2_1_C; $scope.lobby_lounge_other_public_areas_4_2_1_C = true; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_C  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_C = data.lobby_lounge_other_public_areas_4_2_1_C; $scope.lobby_lounge_other_public_areas_4_2_1_C = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_C  == 9){ 
				$scope.lobby_lounge_other_public_areas_4_2_1_C = data.lobby_lounge_other_public_areas_4_2_1_C; $scope.lobby_lounge_other_public_areas_4_2_1_C = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_2_1_C  >= 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_C  < 3)) || ((data.lobby_lounge_other_public_areas_4_2_1_C  > 3 ) && (data.lobby_lounge_other_public_areas_4_2_1_C  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_C  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_C  < 9)) ){ $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = data.lobby_lounge_other_public_areas_4_2_1_C; $scope.lobby_lounge_other_public_areas_4_2_1_C = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_C = ''; $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_C = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = false;}
				if(data.lobby_lounge_other_public_areas_4_2_1_D_a == 1){ $scope.lobby_lounge_other_public_areas_4_2_1_D_a = data.lobby_lounge_other_public_areas_4_2_1_D_a; $scope.lobby_lounge_other_public_areas_4_2_1_D_a= true; $scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_2_1_D_a > 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_D_a < 1)){ $scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm = data.lobby_lounge_other_public_areas_4_2_1_D_a; $scope.lobby_lounge_other_public_areas_4_2_1_D_a= false; $scope.lobby_lounge_other_public_areas_4_2_1_D_a= ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_D_a= ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_a= false; }
				if(data.lobby_lounge_other_public_areas_4_2_1_D_b == 4){ $scope.lobby_lounge_other_public_areas_4_2_1_D_b = data.lobby_lounge_other_public_areas_4_2_1_D_b; $scope.lobby_lounge_other_public_areas_4_2_1_D_b= true; $scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_2_1_D_b > 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_D_b < 4)){ $scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm = data.lobby_lounge_other_public_areas_4_2_1_D_b; $scope.lobby_lounge_other_public_areas_4_2_1_D_b= false; $scope.lobby_lounge_other_public_areas_4_2_1_D_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_D_b= ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_b= false; }
				if(data.lobby_lounge_other_public_areas_4_2_1_E == 3){ $scope.lobby_lounge_other_public_areas_4_2_1_E = data.lobby_lounge_other_public_areas_4_2_1_E; $scope.lobby_lounge_other_public_areas_4_2_1_E = true; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_E  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_E = data.lobby_lounge_other_public_areas_4_2_1_E; $scope.lobby_lounge_other_public_areas_4_2_1_E = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_E  == 8){ 
				$scope.lobby_lounge_other_public_areas_4_2_1_E = data.lobby_lounge_other_public_areas_4_2_1_E; $scope.lobby_lounge_other_public_areas_4_2_1_E = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_2_1_E  >= 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_E  < 3)) || ((data.lobby_lounge_other_public_areas_4_2_1_E  > 3 ) && (data.lobby_lounge_other_public_areas_4_2_1_E  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_E  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_E  < 8)) ){ $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = data.lobby_lounge_other_public_areas_4_2_1_E; $scope.lobby_lounge_other_public_areas_4_2_1_E = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_E = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_E = ''; $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_E = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = false;}
				if(data.lobby_lounge_other_public_areas_4_2_1_F == 0){ $scope.lobby_lounge_other_public_areas_4_2_1_F = data.lobby_lounge_other_public_areas_4_2_1_F; $scope.lobby_lounge_other_public_areas_4_2_1_F = true; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_F  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_F = data.lobby_lounge_other_public_areas_4_2_1_F; $scope.lobby_lounge_other_public_areas_4_2_1_F = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_F  == 7){ $scope.lobby_lounge_other_public_areas_4_2_1_F = data.lobby_lounge_other_public_areas_4_2_1_F; $scope.lobby_lounge_other_public_areas_4_2_1_F = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_2_1_F  > 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_F  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_F  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_F  < 7)) )
				{ $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = data.lobby_lounge_other_public_areas_4_2_1_F; $scope.lobby_lounge_other_public_areas_4_2_1_F = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = false;  $scope.lobby_lounge_other_public_areas_4_2_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_F = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_F = ''; $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_F = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_c = false; }
				if(data.lobby_lounge_other_public_areas_4_2_1_G == 0){ $scope.lobby_lounge_other_public_areas_4_2_1_G = data.lobby_lounge_other_public_areas_4_2_1_G; $scope.lobby_lounge_other_public_areas_4_2_1_G = true; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_G  == 5){ $scope.lobby_lounge_other_public_areas_4_2_1_G = data.lobby_lounge_other_public_areas_4_2_1_G; $scope.lobby_lounge_other_public_areas_4_2_1_G = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = true; $scope.lobby_lounge_other_public_areas_4_2_1_G_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_2_1_G  == 7){ $scope.lobby_lounge_other_public_areas_4_2_1_G = data.lobby_lounge_other_public_areas_4_2_1_G; $scope.lobby_lounge_other_public_areas_4_2_1_G = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_c = true; $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_2_1_G  > 0 ) && (data.lobby_lounge_other_public_areas_4_2_1_G  < 5)) || ((data.lobby_lounge_other_public_areas_4_2_1_G  > 5 ) && (data.lobby_lounge_other_public_areas_4_2_1_G  < 7)) )
				{ $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = data.lobby_lounge_other_public_areas_4_2_1_G; $scope.lobby_lounge_other_public_areas_4_2_1_G = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = false;  $scope.lobby_lounge_other_public_areas_4_2_1_G_c = false; $scope.lobby_lounge_other_public_areas_4_2_1_G = ''; }else{ $scope.lobby_lounge_other_public_areas_4_2_1_G = ''; $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = ''; $scope.lobby_lounge_other_public_areas_4_2_1_G = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_c = false; }
				$scope.lobby_lounge_other_public_areas_4_3_1_text = data.lobby_lounge_other_public_areas_4_3_1_text;
				if(data.lobby_lounge_other_public_areas_4_3_1_A == 7){ $scope.lobby_lounge_other_public_areas_4_3_1_A = data.lobby_lounge_other_public_areas_4_3_1_A; $scope.lobby_lounge_other_public_areas_4_3_1_A = true; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_3_1_A  == 15){ $scope.lobby_lounge_other_public_areas_4_3_1_A = data.lobby_lounge_other_public_areas_4_3_1_A; $scope.lobby_lounge_other_public_areas_4_3_1_A = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_3_1_A  == 25){ 
				$scope.lobby_lounge_other_public_areas_4_3_1_A = data.lobby_lounge_other_public_areas_4_3_1_A; $scope.lobby_lounge_other_public_areas_4_3_1_A = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_3_1_A  >= 0 ) && (data.lobby_lounge_other_public_areas_4_3_1_A  < 7)) || ((data.lobby_lounge_other_public_areas_4_3_1_A  > 7 ) && (data.lobby_lounge_other_public_areas_4_3_1_A  < 15)) || ((data.lobby_lounge_other_public_areas_4_3_1_A  > 15 ) && (data.lobby_lounge_other_public_areas_4_3_1_A  < 25)) ){ $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = data.lobby_lounge_other_public_areas_4_3_1_A; $scope.lobby_lounge_other_public_areas_4_3_1_A = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_3_1_A = ''; $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_3_1_A = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = false;}
				if(data.lobby_lounge_other_public_areas_4_3_1_B == 5){ $scope.lobby_lounge_other_public_areas_4_3_1_B = data.lobby_lounge_other_public_areas_4_3_1_B; $scope.lobby_lounge_other_public_areas_4_3_1_B = true; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_3_1_B  == 10){ $scope.lobby_lounge_other_public_areas_4_3_1_B = data.lobby_lounge_other_public_areas_4_3_1_B; $scope.lobby_lounge_other_public_areas_4_3_1_B = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_3_1_B  == 15){ 
				$scope.lobby_lounge_other_public_areas_4_3_1_B = data.lobby_lounge_other_public_areas_4_3_1_B; $scope.lobby_lounge_other_public_areas_4_3_1_B = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_3_1_B  >= 0 ) && (data.lobby_lounge_other_public_areas_4_3_1_B  < 5)) || ((data.lobby_lounge_other_public_areas_4_3_1_B  > 5 ) && (data.lobby_lounge_other_public_areas_4_3_1_B  < 10)) || ((data.lobby_lounge_other_public_areas_4_3_1_B  > 10 ) && (data.lobby_lounge_other_public_areas_4_3_1_B  < 15)) ){ $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = data.lobby_lounge_other_public_areas_4_3_1_B; $scope.lobby_lounge_other_public_areas_4_3_1_B = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_3_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_3_1_B = ''; $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_3_1_B = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = false;}
				$scope.lobby_lounge_other_public_areas_4_4_1_text = data.lobby_lounge_other_public_areas_4_4_1_text;
				if(data.lobby_lounge_other_public_areas_4_4_1_A == 3){ $scope.lobby_lounge_other_public_areas_4_4_1_A = data.lobby_lounge_other_public_areas_4_4_1_A; $scope.lobby_lounge_other_public_areas_4_4_1_A = true; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_A  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_A = data.lobby_lounge_other_public_areas_4_4_1_A; $scope.lobby_lounge_other_public_areas_4_4_1_A = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_A  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_4_1_A = data.lobby_lounge_other_public_areas_4_4_1_A; $scope.lobby_lounge_other_public_areas_4_4_1_A = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_4_1_A  >= 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_A  < 3)) || ((data.lobby_lounge_other_public_areas_4_4_1_A  > 3 ) && (data.lobby_lounge_other_public_areas_4_4_1_A  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_A  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_A  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = data.lobby_lounge_other_public_areas_4_4_1_A; $scope.lobby_lounge_other_public_areas_4_4_1_A = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_A = ''; $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_A = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = false;}
				if(data.lobby_lounge_other_public_areas_4_4_1_B == 2){ $scope.lobby_lounge_other_public_areas_4_4_1_B = data.lobby_lounge_other_public_areas_4_4_1_B; $scope.lobby_lounge_other_public_areas_4_4_1_B = true; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_B  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_B = data.lobby_lounge_other_public_areas_4_4_1_B; $scope.lobby_lounge_other_public_areas_4_4_1_B = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_B  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_4_1_B = data.lobby_lounge_other_public_areas_4_4_1_B; $scope.lobby_lounge_other_public_areas_4_4_1_B = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_4_1_B  >= 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_B  < 2)) || ((data.lobby_lounge_other_public_areas_4_4_1_B  > 2 ) && (data.lobby_lounge_other_public_areas_4_4_1_B  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_B  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_B  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = data.lobby_lounge_other_public_areas_4_4_1_B; $scope.lobby_lounge_other_public_areas_4_4_1_B = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_B = ''; $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_B = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = false;}
				if(data.lobby_lounge_other_public_areas_4_4_1_C == 2){ $scope.lobby_lounge_other_public_areas_4_4_1_C = data.lobby_lounge_other_public_areas_4_4_1_C; $scope.lobby_lounge_other_public_areas_4_4_1_C = true; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_C  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_C = data.lobby_lounge_other_public_areas_4_4_1_C; $scope.lobby_lounge_other_public_areas_4_4_1_C = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_C  == 7){ 
				$scope.lobby_lounge_other_public_areas_4_4_1_C = data.lobby_lounge_other_public_areas_4_4_1_C; $scope.lobby_lounge_other_public_areas_4_4_1_C = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_4_1_C  >= 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_C  < 2)) || ((data.lobby_lounge_other_public_areas_4_4_1_C  > 2 ) && (data.lobby_lounge_other_public_areas_4_4_1_C  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_C  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_C  < 7)) ){ $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = data.lobby_lounge_other_public_areas_4_4_1_C; $scope.lobby_lounge_other_public_areas_4_4_1_C = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_C = ''; $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_C = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = false;}
				if(data.lobby_lounge_other_public_areas_4_4_1_D == 0){ $scope.lobby_lounge_other_public_areas_4_4_1_D = data.lobby_lounge_other_public_areas_4_4_1_D; $scope.lobby_lounge_other_public_areas_4_4_1_D = true; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_D  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_D = data.lobby_lounge_other_public_areas_4_4_1_D; $scope.lobby_lounge_other_public_areas_4_4_1_D = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_D  == ){ $scope.lobby_lounge_other_public_areas_4_4_1_D = data.lobby_lounge_other_public_areas_4_4_1_D; $scope.lobby_lounge_other_public_areas_4_4_1_D = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_4_1_D  > 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_D  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_D  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_D  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = data.lobby_lounge_other_public_areas_4_4_1_D; $scope.lobby_lounge_other_public_areas_4_4_1_D = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = false;  $scope.lobby_lounge_other_public_areas_4_4_1_D_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_D = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_D = ''; $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_D = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_c = false; }
				if(data.lobby_lounge_other_public_areas_4_4_1_E == 0){ $scope.lobby_lounge_other_public_areas_4_4_1_E = data.lobby_lounge_other_public_areas_4_4_1_E; $scope.lobby_lounge_other_public_areas_4_4_1_E = true; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_E  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_E = data.lobby_lounge_other_public_areas_4_4_1_E; $scope.lobby_lounge_other_public_areas_4_4_1_E = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_E  == 7){ $scope.lobby_lounge_other_public_areas_4_4_1_E = data.lobby_lounge_other_public_areas_4_4_1_E; $scope.lobby_lounge_other_public_areas_4_4_1_E = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_4_1_E  > 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_E  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_E  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_E  < 7)) )
				{ $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = data.lobby_lounge_other_public_areas_4_4_1_E; $scope.lobby_lounge_other_public_areas_4_4_1_E = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = false;  $scope.lobby_lounge_other_public_areas_4_4_1_E_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_E = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_E = ''; $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_E = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_c = false; }
				if(data.lobby_lounge_other_public_areas_4_4_1_F == 0){ $scope.lobby_lounge_other_public_areas_4_4_1_F = data.lobby_lounge_other_public_areas_4_4_1_F; $scope.lobby_lounge_other_public_areas_4_4_1_F = true; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_F  == 5){ $scope.lobby_lounge_other_public_areas_4_4_1_F = data.lobby_lounge_other_public_areas_4_4_1_F; $scope.lobby_lounge_other_public_areas_4_4_1_F = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = true; $scope.lobby_lounge_other_public_areas_4_4_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_4_1_F  == 7){ $scope.lobby_lounge_other_public_areas_4_4_1_F = data.lobby_lounge_other_public_areas_4_4_1_F; $scope.lobby_lounge_other_public_areas_4_4_1_F = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_c = true; $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_4_1_F  > 0 ) && (data.lobby_lounge_other_public_areas_4_4_1_F  < 5)) || ((data.lobby_lounge_other_public_areas_4_4_1_F  > 5 ) && (data.lobby_lounge_other_public_areas_4_4_1_F  < 7)) )
				{ $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = data.lobby_lounge_other_public_areas_4_4_1_F; $scope.lobby_lounge_other_public_areas_4_4_1_F = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = false;  $scope.lobby_lounge_other_public_areas_4_4_1_F_c = false; $scope.lobby_lounge_other_public_areas_4_4_1_F = ''; }else{ $scope.lobby_lounge_other_public_areas_4_4_1_F = ''; $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = ''; $scope.lobby_lounge_other_public_areas_4_4_1_F = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_c = false; }
				$scope.lobby_lounge_other_public_areas_4_5_1_text = data.lobby_lounge_other_public_areas_4_5_1_text;
				if(data.lobby_lounge_other_public_areas_4_5_1_A == 0){ $scope.lobby_lounge_other_public_areas_4_5_1_A = data.lobby_lounge_other_public_areas_4_5_1_A; $scope.lobby_lounge_other_public_areas_4_5_1_A = true; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_A  == 10){ $scope.lobby_lounge_other_public_areas_4_5_1_A = data.lobby_lounge_other_public_areas_4_5_1_A; $scope.lobby_lounge_other_public_areas_4_5_1_A = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_5_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_A  == ){ $scope.lobby_lounge_other_public_areas_4_5_1_A = data.lobby_lounge_other_public_areas_4_5_1_A; $scope.lobby_lounge_other_public_areas_4_5_1_A = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_5_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_5_1_A  < 10)) || ((data.lobby_lounge_other_public_areas_4_5_1_A  > 10 ) && (data.lobby_lounge_other_public_areas_4_5_1_A  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = data.lobby_lounge_other_public_areas_4_5_1_A; $scope.lobby_lounge_other_public_areas_4_5_1_A = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = false;  $scope.lobby_lounge_other_public_areas_4_5_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_5_1_A = ''; $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_5_1_A = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_c = false; }
				if(data.lobby_lounge_other_public_areas_4_5_1_B == 0){ $scope.lobby_lounge_other_public_areas_4_5_1_B = data.lobby_lounge_other_public_areas_4_5_1_B; $scope.lobby_lounge_other_public_areas_4_5_1_B = true; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_B  == 10){ $scope.lobby_lounge_other_public_areas_4_5_1_B = data.lobby_lounge_other_public_areas_4_5_1_B; $scope.lobby_lounge_other_public_areas_4_5_1_B = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_5_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_B  == ){ $scope.lobby_lounge_other_public_areas_4_5_1_B = data.lobby_lounge_other_public_areas_4_5_1_B; $scope.lobby_lounge_other_public_areas_4_5_1_B = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_5_1_B  > 0 ) && (data.lobby_lounge_other_public_areas_4_5_1_B  < 10)) || ((data.lobby_lounge_other_public_areas_4_5_1_B  > 10 ) && (data.lobby_lounge_other_public_areas_4_5_1_B  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = data.lobby_lounge_other_public_areas_4_5_1_B; $scope.lobby_lounge_other_public_areas_4_5_1_B = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = false;  $scope.lobby_lounge_other_public_areas_4_5_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_5_1_B = ''; $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_5_1_B = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_c = false; }
				if(data.lobby_lounge_other_public_areas_4_5_1_C == 5){ $scope.lobby_lounge_other_public_areas_4_5_1_C = data.lobby_lounge_other_public_areas_4_5_1_C; $scope.lobby_lounge_other_public_areas_4_5_1_C = true; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_C  == 7){ $scope.lobby_lounge_other_public_areas_4_5_1_C = data.lobby_lounge_other_public_areas_4_5_1_C; $scope.lobby_lounge_other_public_areas_4_5_1_C = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_5_1_C  == 10){ 
				$scope.lobby_lounge_other_public_areas_4_5_1_C = data.lobby_lounge_other_public_areas_4_5_1_C; $scope.lobby_lounge_other_public_areas_4_5_1_C = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_5_1_C  >= 0 ) && (data.lobby_lounge_other_public_areas_4_5_1_C  < 5)) || ((data.lobby_lounge_other_public_areas_4_5_1_C  > 5 ) && (data.lobby_lounge_other_public_areas_4_5_1_C  < 7)) || ((data.lobby_lounge_other_public_areas_4_5_1_C  > 7 ) && (data.lobby_lounge_other_public_areas_4_5_1_C  < 10)) ){ $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = data.lobby_lounge_other_public_areas_4_5_1_C; $scope.lobby_lounge_other_public_areas_4_5_1_C = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_5_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_5_1_C = ''; $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_5_1_C = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = false;}
				$scope.lobby_lounge_other_public_areas_4_6_1_text = data.lobby_lounge_other_public_areas_4_6_1_text;
				if(data.lobby_lounge_other_public_areas_4_6_1_A == 0){ $scope.lobby_lounge_other_public_areas_4_6_1_A = data.lobby_lounge_other_public_areas_4_6_1_A; $scope.lobby_lounge_other_public_areas_4_6_1_A = true; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_6_1_A  == 3){ $scope.lobby_lounge_other_public_areas_4_6_1_A = data.lobby_lounge_other_public_areas_4_6_1_A; $scope.lobby_lounge_other_public_areas_4_6_1_A = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_6_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_6_1_A  == ){ $scope.lobby_lounge_other_public_areas_4_6_1_A = data.lobby_lounge_other_public_areas_4_6_1_A; $scope.lobby_lounge_other_public_areas_4_6_1_A = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_6_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_A  < 3)) || ((data.lobby_lounge_other_public_areas_4_6_1_A  > 3 ) && (data.lobby_lounge_other_public_areas_4_6_1_A  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = data.lobby_lounge_other_public_areas_4_6_1_A; $scope.lobby_lounge_other_public_areas_4_6_1_A = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = false;  $scope.lobby_lounge_other_public_areas_4_6_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_A = ''; $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_A = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_c = false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_a == 0){ $scope.lobby_lounge_other_public_areas_4_6_1_B_a = data.lobby_lounge_other_public_areas_4_6_1_B_a; $scope.lobby_lounge_other_public_areas_4_6_1_B_a = true; $scope.lobby_lounge_other_public_areas_4_6_1_B_a_cm = ''; } else { $scope.lobby_lounge_other_public_areas_4_6_1_B_a = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_a = false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_b == 1){ $scope.lobby_lounge_other_public_areas_4_6_1_B_b = data.lobby_lounge_other_public_areas_4_6_1_B_b; $scope.lobby_lounge_other_public_areas_4_6_1_B_b= true; $scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_6_1_B_b > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_B_b < 1)){ $scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm = data.lobby_lounge_other_public_areas_4_6_1_B_b; $scope.lobby_lounge_other_public_areas_4_6_1_B_b= false; $scope.lobby_lounge_other_public_areas_4_6_1_B_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_B_b= ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_b= false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_c == 1){ $scope.lobby_lounge_other_public_areas_4_6_1_B_c = data.lobby_lounge_other_public_areas_4_6_1_B_c; $scope.lobby_lounge_other_public_areas_4_6_1_B_c= true; $scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_6_1_B_c > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_B_c < 1)){ $scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm = data.lobby_lounge_other_public_areas_4_6_1_B_c; $scope.lobby_lounge_other_public_areas_4_6_1_B_c= false; $scope.lobby_lounge_other_public_areas_4_6_1_B_c= ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_B_c= ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_c= false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_d == 1){ $scope.lobby_lounge_other_public_areas_4_6_1_B_d = data.lobby_lounge_other_public_areas_4_6_1_B_d; $scope.lobby_lounge_other_public_areas_4_6_1_B_d= true; $scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_6_1_B_d > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_B_d < 1)){ $scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm = data.lobby_lounge_other_public_areas_4_6_1_B_d; $scope.lobby_lounge_other_public_areas_4_6_1_B_d= false; $scope.lobby_lounge_other_public_areas_4_6_1_B_d= ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_B_d= ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_d= false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_e == 1){ $scope.lobby_lounge_other_public_areas_4_6_1_B_e = data.lobby_lounge_other_public_areas_4_6_1_B_e; $scope.lobby_lounge_other_public_areas_4_6_1_B_e= true; $scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_6_1_B_e > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_B_e < 1)){ $scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm = data.lobby_lounge_other_public_areas_4_6_1_B_e; $scope.lobby_lounge_other_public_areas_4_6_1_B_e= false; $scope.lobby_lounge_other_public_areas_4_6_1_B_e= ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_B_e= ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_e= false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_B_f == 1){ $scope.lobby_lounge_other_public_areas_4_6_1_B_f = data.lobby_lounge_other_public_areas_4_6_1_B_f; $scope.lobby_lounge_other_public_areas_4_6_1_B_f= true; $scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_6_1_B_f > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_B_f < 1)){ $scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm = data.lobby_lounge_other_public_areas_4_6_1_B_f; $scope.lobby_lounge_other_public_areas_4_6_1_B_f= false; $scope.lobby_lounge_other_public_areas_4_6_1_B_f= ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_B_f= ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_f= false; }
				if(data.lobby_lounge_other_public_areas_4_6_1_C == 0){ $scope.lobby_lounge_other_public_areas_4_6_1_C = data.lobby_lounge_other_public_areas_4_6_1_C; $scope.lobby_lounge_other_public_areas_4_6_1_C = true; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_6_1_C  == 2){ $scope.lobby_lounge_other_public_areas_4_6_1_C = data.lobby_lounge_other_public_areas_4_6_1_C; $scope.lobby_lounge_other_public_areas_4_6_1_C = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_6_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_6_1_C  == ){ $scope.lobby_lounge_other_public_areas_4_6_1_C = data.lobby_lounge_other_public_areas_4_6_1_C; $scope.lobby_lounge_other_public_areas_4_6_1_C = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_6_1_C  > 0 ) && (data.lobby_lounge_other_public_areas_4_6_1_C  < 2)) || ((data.lobby_lounge_other_public_areas_4_6_1_C  > 2 ) && (data.lobby_lounge_other_public_areas_4_6_1_C  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = data.lobby_lounge_other_public_areas_4_6_1_C; $scope.lobby_lounge_other_public_areas_4_6_1_C = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = false;  $scope.lobby_lounge_other_public_areas_4_6_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_6_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_6_1_C = ''; $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_6_1_C = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_c = false; }
				$scope.lobby_lounge_other_public_areas_4_7_1_text = data.lobby_lounge_other_public_areas_4_7_1_text;
				if(data.lobby_lounge_other_public_areas_4_7_1_A == 0){ $scope.lobby_lounge_other_public_areas_4_7_1_A = data.lobby_lounge_other_public_areas_4_7_1_A; $scope.lobby_lounge_other_public_areas_4_7_1_A = true; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_7_1_A  == 4){ $scope.lobby_lounge_other_public_areas_4_7_1_A = data.lobby_lounge_other_public_areas_4_7_1_A; $scope.lobby_lounge_other_public_areas_4_7_1_A = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_7_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_7_1_A  == ){ $scope.lobby_lounge_other_public_areas_4_7_1_A = data.lobby_lounge_other_public_areas_4_7_1_A; $scope.lobby_lounge_other_public_areas_4_7_1_A = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_7_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_A  < 4)) || ((data.lobby_lounge_other_public_areas_4_7_1_A  > 4 ) && (data.lobby_lounge_other_public_areas_4_7_1_A  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = data.lobby_lounge_other_public_areas_4_7_1_A; $scope.lobby_lounge_other_public_areas_4_7_1_A = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = false;  $scope.lobby_lounge_other_public_areas_4_7_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_7_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_A = ''; $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_A = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_c = false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_B_a == 1){ $scope.lobby_lounge_other_public_areas_4_7_1_B_a = data.lobby_lounge_other_public_areas_4_7_1_B_a; $scope.lobby_lounge_other_public_areas_4_7_1_B_a= true; $scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_B_a > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_B_a < 1)){ $scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm = data.lobby_lounge_other_public_areas_4_7_1_B_a; $scope.lobby_lounge_other_public_areas_4_7_1_B_a= false; $scope.lobby_lounge_other_public_areas_4_7_1_B_a= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_B_a= ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_a= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_B_b == 2){ $scope.lobby_lounge_other_public_areas_4_7_1_B_b = data.lobby_lounge_other_public_areas_4_7_1_B_b; $scope.lobby_lounge_other_public_areas_4_7_1_B_b= true; $scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_B_b > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_B_b < 2)){ $scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm = data.lobby_lounge_other_public_areas_4_7_1_B_b; $scope.lobby_lounge_other_public_areas_4_7_1_B_b= false; $scope.lobby_lounge_other_public_areas_4_7_1_B_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_B_b= ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_b= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_B_c == 3){ $scope.lobby_lounge_other_public_areas_4_7_1_B_c = data.lobby_lounge_other_public_areas_4_7_1_B_c; $scope.lobby_lounge_other_public_areas_4_7_1_B_c= true; $scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_B_c > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_B_c < 3)){ $scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm = data.lobby_lounge_other_public_areas_4_7_1_B_c; $scope.lobby_lounge_other_public_areas_4_7_1_B_c= false; $scope.lobby_lounge_other_public_areas_4_7_1_B_c= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_B_c= ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_c= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_C_a == 1){ $scope.lobby_lounge_other_public_areas_4_7_1_C_a = data.lobby_lounge_other_public_areas_4_7_1_C_a; $scope.lobby_lounge_other_public_areas_4_7_1_C_a= true; $scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_C_a > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_C_a < 1)){ $scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm = data.lobby_lounge_other_public_areas_4_7_1_C_a; $scope.lobby_lounge_other_public_areas_4_7_1_C_a= false; $scope.lobby_lounge_other_public_areas_4_7_1_C_a= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_C_a= ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_a= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_C_b == 1){ $scope.lobby_lounge_other_public_areas_4_7_1_C_b = data.lobby_lounge_other_public_areas_4_7_1_C_b; $scope.lobby_lounge_other_public_areas_4_7_1_C_b= true; $scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_C_b > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_C_b < 1)){ $scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm = data.lobby_lounge_other_public_areas_4_7_1_C_b; $scope.lobby_lounge_other_public_areas_4_7_1_C_b= false; $scope.lobby_lounge_other_public_areas_4_7_1_C_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_C_b= ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_b= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_C_c == 1){ $scope.lobby_lounge_other_public_areas_4_7_1_C_c = data.lobby_lounge_other_public_areas_4_7_1_C_c; $scope.lobby_lounge_other_public_areas_4_7_1_C_c= true; $scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_C_c > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_C_c < 1)){ $scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm = data.lobby_lounge_other_public_areas_4_7_1_C_c; $scope.lobby_lounge_other_public_areas_4_7_1_C_c= false; $scope.lobby_lounge_other_public_areas_4_7_1_C_c= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_C_c= ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_c= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_D_a == 2){ $scope.lobby_lounge_other_public_areas_4_7_1_D_a = data.lobby_lounge_other_public_areas_4_7_1_D_a; $scope.lobby_lounge_other_public_areas_4_7_1_D_a= true; $scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_D_a > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_D_a < 2)){ $scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm = data.lobby_lounge_other_public_areas_4_7_1_D_a; $scope.lobby_lounge_other_public_areas_4_7_1_D_a= false; $scope.lobby_lounge_other_public_areas_4_7_1_D_a= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_D_a= ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_a= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_D_b == 2){ $scope.lobby_lounge_other_public_areas_4_7_1_D_b = data.lobby_lounge_other_public_areas_4_7_1_D_b; $scope.lobby_lounge_other_public_areas_4_7_1_D_b= true; $scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_D_b > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_D_b < 2)){ $scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm = data.lobby_lounge_other_public_areas_4_7_1_D_b; $scope.lobby_lounge_other_public_areas_4_7_1_D_b= false; $scope.lobby_lounge_other_public_areas_4_7_1_D_b= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_D_b= ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_b= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_D_c == 2){ $scope.lobby_lounge_other_public_areas_4_7_1_D_c = data.lobby_lounge_other_public_areas_4_7_1_D_c; $scope.lobby_lounge_other_public_areas_4_7_1_D_c= true; $scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_D_c > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_D_c < 2)){ $scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm = data.lobby_lounge_other_public_areas_4_7_1_D_c; $scope.lobby_lounge_other_public_areas_4_7_1_D_c= false; $scope.lobby_lounge_other_public_areas_4_7_1_D_c= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_D_c= ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_c= false; }
				if(data.lobby_lounge_other_public_areas_4_7_1_D_d == 1){ $scope.lobby_lounge_other_public_areas_4_7_1_D_d = data.lobby_lounge_other_public_areas_4_7_1_D_d; $scope.lobby_lounge_other_public_areas_4_7_1_D_d= true; $scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm = ''; } else if((data.lobby_lounge_other_public_areas_4_7_1_D_d > 0 ) && (data.lobby_lounge_other_public_areas_4_7_1_D_d < 1)){ $scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm = data.lobby_lounge_other_public_areas_4_7_1_D_d; $scope.lobby_lounge_other_public_areas_4_7_1_D_d= false; $scope.lobby_lounge_other_public_areas_4_7_1_D_d= ''; }else{ $scope.lobby_lounge_other_public_areas_4_7_1_D_d= ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_d= false; }
				$scope.lobby_lounge_other_public_areas_4_8_1_text = data.lobby_lounge_other_public_areas_4_8_1_text;
				if(data.lobby_lounge_other_public_areas_4_8_1_A == 0){ $scope.lobby_lounge_other_public_areas_4_8_1_A = data.lobby_lounge_other_public_areas_4_8_1_A; $scope.lobby_lounge_other_public_areas_4_8_1_A = true; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_A  == 5){ $scope.lobby_lounge_other_public_areas_4_8_1_A = data.lobby_lounge_other_public_areas_4_8_1_A; $scope.lobby_lounge_other_public_areas_4_8_1_A = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_8_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_A  == ){ $scope.lobby_lounge_other_public_areas_4_8_1_A = data.lobby_lounge_other_public_areas_4_8_1_A; $scope.lobby_lounge_other_public_areas_4_8_1_A = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_8_1_A  > 0 ) && (data.lobby_lounge_other_public_areas_4_8_1_A  < 5)) || ((data.lobby_lounge_other_public_areas_4_8_1_A  > 5 ) && (data.lobby_lounge_other_public_areas_4_8_1_A  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = data.lobby_lounge_other_public_areas_4_8_1_A; $scope.lobby_lounge_other_public_areas_4_8_1_A = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = false;  $scope.lobby_lounge_other_public_areas_4_8_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_8_1_A = ''; $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_8_1_A = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_c = false; }
				if(data.lobby_lounge_other_public_areas_4_8_1_B == 0){ $scope.lobby_lounge_other_public_areas_4_8_1_B = data.lobby_lounge_other_public_areas_4_8_1_B; $scope.lobby_lounge_other_public_areas_4_8_1_B = true; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_B  == 5){ $scope.lobby_lounge_other_public_areas_4_8_1_B = data.lobby_lounge_other_public_areas_4_8_1_B; $scope.lobby_lounge_other_public_areas_4_8_1_B = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = true; $scope.lobby_lounge_other_public_areas_4_8_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_B  == ){ $scope.lobby_lounge_other_public_areas_4_8_1_B = data.lobby_lounge_other_public_areas_4_8_1_B; $scope.lobby_lounge_other_public_areas_4_8_1_B = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_c = true; $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_8_1_B  > 0 ) && (data.lobby_lounge_other_public_areas_4_8_1_B  < 5)) || ((data.lobby_lounge_other_public_areas_4_8_1_B  > 5 ) && (data.lobby_lounge_other_public_areas_4_8_1_B  < )) )
				{ $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = data.lobby_lounge_other_public_areas_4_8_1_B; $scope.lobby_lounge_other_public_areas_4_8_1_B = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = false;  $scope.lobby_lounge_other_public_areas_4_8_1_B_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_B = ''; }else{ $scope.lobby_lounge_other_public_areas_4_8_1_B = ''; $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = ''; $scope.lobby_lounge_other_public_areas_4_8_1_B = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_c = false; }
				if(data.lobby_lounge_other_public_areas_4_8_1_C == 1){ $scope.lobby_lounge_other_public_areas_4_8_1_C = data.lobby_lounge_other_public_areas_4_8_1_C; $scope.lobby_lounge_other_public_areas_4_8_1_C = true; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_C  == 3){ $scope.lobby_lounge_other_public_areas_4_8_1_C = data.lobby_lounge_other_public_areas_4_8_1_C; $scope.lobby_lounge_other_public_areas_4_8_1_C = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = true; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_C  == 5){ 
				$scope.lobby_lounge_other_public_areas_4_8_1_C = data.lobby_lounge_other_public_areas_4_8_1_C; $scope.lobby_lounge_other_public_areas_4_8_1_C = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = true; $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_8_1_C  >= 0 ) && (data.lobby_lounge_other_public_areas_4_8_1_C  < 1)) || ((data.lobby_lounge_other_public_areas_4_8_1_C  > 1 ) && (data.lobby_lounge_other_public_areas_4_8_1_C  < 3)) || ((data.lobby_lounge_other_public_areas_4_8_1_C  > 3 ) && (data.lobby_lounge_other_public_areas_4_8_1_C  < 5)) ){ $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = data.lobby_lounge_other_public_areas_4_8_1_C; $scope.lobby_lounge_other_public_areas_4_8_1_C = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = false; $scope.lobby_lounge_other_public_areas_4_8_1_C = ''; }else{ $scope.lobby_lounge_other_public_areas_4_8_1_C = ''; $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = ''; $scope.lobby_lounge_other_public_areas_4_8_1_C = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = false;}
				if(data.lobby_lounge_other_public_areas_4_8_1_D  == 3){ $scope.lobby_lounge_other_public_areas_4_8_1_D  = data.lobby_lounge_other_public_areas_4_8_1_D ; $scope.lobby_lounge_other_public_areas_4_8_1_D = true; $scope.lobby_lounge_other_public_areas_4_8_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_D_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_8_1_D  == 5){ $scope.lobby_lounge_other_public_areas_4_8_1_D  = data.lobby_lounge_other_public_areas_4_8_1_D ; $scope.lobby_lounge_other_public_areas_4_8_1_D = false; $scope.lobby_lounge_other_public_areas_4_8_1_D_b = true; $scope.lobby_lounge_other_public_areas_4_8_1_D_cm = ''; }else if( ((data.lobby_lounge_other_public_areas_4_8_1_D  > 0 ) && (data.lobby_lounge_other_public_areas_4_8_1_D  < 3)) || ((data.lobby_lounge_other_public_areas_4_8_1_D  > 3 ) && (data.lobby_lounge_other_public_areas_4_8_1_D  < 5)))
				{ $scope.lobby_lounge_other_public_areas_4_8_1_D_cm = data.lobby_lounge_other_public_areas_4_8_1_D ; $scope.lobby_lounge_other_public_areas_4_8_1_D = false; $scope.lobby_lounge_other_public_areas_4_8_1_D_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_D  = ''; }else{ $scope.lobby_lounge_other_public_areas_4_8_1_D  = ''; $scope.lobby_lounge_other_public_areas_4_8_1_D_cm = ''; $scope.lobby_lounge_other_public_areas_4_8_1_D = false; $scope.lobby_lounge_other_public_areas_4_8_1_D_b = false; }
				$scope.lobby_lounge_other_public_areas_4_9_1_text = data.lobby_lounge_other_public_areas_4_9_1_text;
				if(data.lobby_lounge_other_public_areas_4_9_1_A == 20){ $scope.lobby_lounge_other_public_areas_4_9_1_A = data.lobby_lounge_other_public_areas_4_9_1_A; $scope.lobby_lounge_other_public_areas_4_9_1_A = true; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_9_1_A  == 30){ $scope.lobby_lounge_other_public_areas_4_9_1_A = data.lobby_lounge_other_public_areas_4_9_1_A; $scope.lobby_lounge_other_public_areas_4_9_1_A = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = true; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = ''; } else if(data.lobby_lounge_other_public_areas_4_9_1_A  == 40){ 
				$scope.lobby_lounge_other_public_areas_4_9_1_A = data.lobby_lounge_other_public_areas_4_9_1_A; $scope.lobby_lounge_other_public_areas_4_9_1_A = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = true; $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = ''; } else if( ((data.lobby_lounge_other_public_areas_4_9_1_A  >= 0 ) && (data.lobby_lounge_other_public_areas_4_9_1_A  < 20)) || ((data.lobby_lounge_other_public_areas_4_9_1_A  > 20 ) && (data.lobby_lounge_other_public_areas_4_9_1_A  < 30)) || ((data.lobby_lounge_other_public_areas_4_9_1_A  > 30 ) && (data.lobby_lounge_other_public_areas_4_9_1_A  < 40)) ){ $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = data.lobby_lounge_other_public_areas_4_9_1_A; $scope.lobby_lounge_other_public_areas_4_9_1_A = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = false; $scope.lobby_lounge_other_public_areas_4_9_1_A = ''; }else{ $scope.lobby_lounge_other_public_areas_4_9_1_A = ''; $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = ''; $scope.lobby_lounge_other_public_areas_4_9_1_A = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = false;}
				$scope.restaurants_5_1_1_text = data.restaurants_5_1_1_text;
				if(data.restaurants_5_1_1_A == 5){ $scope.restaurants_5_1_1_A = data.restaurants_5_1_1_A; $scope.restaurants_5_1_1_A = true; $scope.restaurants_5_1_1_A_b = false; $scope.restaurants_5_1_1_A_c = false; $scope.restaurants_5_1_1_A_cm = ''; } else if(data.restaurants_5_1_1_A  == 7){ $scope.restaurants_5_1_1_A = data.restaurants_5_1_1_A; $scope.restaurants_5_1_1_A = false; $scope.restaurants_5_1_1_A_b = true; $scope.restaurants_5_1_1_A_c = false; $scope.restaurants_5_1_1_A_cm = ''; } else if(data.restaurants_5_1_1_A  == 10){ 
				$scope.restaurants_5_1_1_A = data.restaurants_5_1_1_A; $scope.restaurants_5_1_1_A = false; $scope.restaurants_5_1_1_A_b = false; $scope.restaurants_5_1_1_A_c = true; $scope.restaurants_5_1_1_A_cm = ''; } else if( ((data.restaurants_5_1_1_A  >= 0 ) && (data.restaurants_5_1_1_A  < 5)) || ((data.restaurants_5_1_1_A  > 5 ) && (data.restaurants_5_1_1_A  < 7)) || ((data.restaurants_5_1_1_A  > 7 ) && (data.restaurants_5_1_1_A  < 10)) ){ $scope.restaurants_5_1_1_A_cm = data.restaurants_5_1_1_A; $scope.restaurants_5_1_1_A = false; $scope.restaurants_5_1_1_A_b = false; $scope.restaurants_5_1_1_A_c = false; $scope.restaurants_5_1_1_A = ''; }else{ $scope.restaurants_5_1_1_A = ''; $scope.restaurants_5_1_1_A_cm = ''; $scope.restaurants_5_1_1_A = false; $scope.restaurants_5_1_1_A_b = false; $scope.restaurants_5_1_1_A_c = false;}
				if(data.restaurants_5_1_1_B  == 10){ $scope.restaurants_5_1_1_B  = data.restaurants_5_1_1_B ; $scope.restaurants_5_1_1_B = true; $scope.restaurants_5_1_1_B_b = false; $scope.restaurants_5_1_1_B_cm = ''; } else if(data.restaurants_5_1_1_B  == 13){ $scope.restaurants_5_1_1_B  = data.restaurants_5_1_1_B ; $scope.restaurants_5_1_1_B = false; $scope.restaurants_5_1_1_B_b = true; $scope.restaurants_5_1_1_B_cm = ''; }else if( ((data.restaurants_5_1_1_B  > 0 ) && (data.restaurants_5_1_1_B  < 10)) || ((data.restaurants_5_1_1_B  > 10 ) && (data.restaurants_5_1_1_B  < 13)))
				{ $scope.restaurants_5_1_1_B_cm = data.restaurants_5_1_1_B ; $scope.restaurants_5_1_1_B = false; $scope.restaurants_5_1_1_B_b = false; $scope.restaurants_5_1_1_B  = ''; }else{ $scope.restaurants_5_1_1_B  = ''; $scope.restaurants_5_1_1_B_cm = ''; $scope.restaurants_5_1_1_B = false; $scope.restaurants_5_1_1_B_b = false; }
				if(data.restaurants_5_1_1_C == 2){ $scope.restaurants_5_1_1_C = data.restaurants_5_1_1_C; $scope.restaurants_5_1_1_C = true; $scope.restaurants_5_1_1_C_b = false; $scope.restaurants_5_1_1_C_c = false; $scope.restaurants_5_1_1_C_cm = ''; } else if(data.restaurants_5_1_1_C  == 4){ $scope.restaurants_5_1_1_C = data.restaurants_5_1_1_C; $scope.restaurants_5_1_1_C = false; $scope.restaurants_5_1_1_C_b = true; $scope.restaurants_5_1_1_C_c = false; $scope.restaurants_5_1_1_C_cm = ''; } else if(data.restaurants_5_1_1_C  == 7){ 
				$scope.restaurants_5_1_1_C = data.restaurants_5_1_1_C; $scope.restaurants_5_1_1_C = false; $scope.restaurants_5_1_1_C_b = false; $scope.restaurants_5_1_1_C_c = true; $scope.restaurants_5_1_1_C_cm = ''; } else if( ((data.restaurants_5_1_1_C  >= 0 ) && (data.restaurants_5_1_1_C  < 2)) || ((data.restaurants_5_1_1_C  > 2 ) && (data.restaurants_5_1_1_C  < 4)) || ((data.restaurants_5_1_1_C  > 4 ) && (data.restaurants_5_1_1_C  < 7)) ){ $scope.restaurants_5_1_1_C_cm = data.restaurants_5_1_1_C; $scope.restaurants_5_1_1_C = false; $scope.restaurants_5_1_1_C_b = false; $scope.restaurants_5_1_1_C_c = false; $scope.restaurants_5_1_1_C = ''; }else{ $scope.restaurants_5_1_1_C = ''; $scope.restaurants_5_1_1_C_cm = ''; $scope.restaurants_5_1_1_C = false; $scope.restaurants_5_1_1_C_b = false; $scope.restaurants_5_1_1_C_c = false;}
				$scope.restaurants_5_2_1_text = data.restaurants_5_2_1_text;
				if(data.restaurants_5_2_1_A == 2){ $scope.restaurants_5_2_1_A = data.restaurants_5_2_1_A; $scope.restaurants_5_2_1_A = true; $scope.restaurants_5_2_1_A_b = false; $scope.restaurants_5_2_1_A_c = false; $scope.restaurants_5_2_1_A_cm = ''; } else if(data.restaurants_5_2_1_A  == 5){ $scope.restaurants_5_2_1_A = data.restaurants_5_2_1_A; $scope.restaurants_5_2_1_A = false; $scope.restaurants_5_2_1_A_b = true; $scope.restaurants_5_2_1_A_c = false; $scope.restaurants_5_2_1_A_cm = ''; } else if(data.restaurants_5_2_1_A  == 7){ 
				$scope.restaurants_5_2_1_A = data.restaurants_5_2_1_A; $scope.restaurants_5_2_1_A = false; $scope.restaurants_5_2_1_A_b = false; $scope.restaurants_5_2_1_A_c = true; $scope.restaurants_5_2_1_A_cm = ''; } else if( ((data.restaurants_5_2_1_A  >= 0 ) && (data.restaurants_5_2_1_A  < 2)) || ((data.restaurants_5_2_1_A  > 2 ) && (data.restaurants_5_2_1_A  < 5)) || ((data.restaurants_5_2_1_A  > 5 ) && (data.restaurants_5_2_1_A  < 7)) ){ $scope.restaurants_5_2_1_A_cm = data.restaurants_5_2_1_A; $scope.restaurants_5_2_1_A = false; $scope.restaurants_5_2_1_A_b = false; $scope.restaurants_5_2_1_A_c = false; $scope.restaurants_5_2_1_A = ''; }else{ $scope.restaurants_5_2_1_A = ''; $scope.restaurants_5_2_1_A_cm = ''; $scope.restaurants_5_2_1_A = false; $scope.restaurants_5_2_1_A_b = false; $scope.restaurants_5_2_1_A_c = false;}
				if(data.restaurants_5_2_1_B == 2){ $scope.restaurants_5_2_1_B = data.restaurants_5_2_1_B; $scope.restaurants_5_2_1_B = true; $scope.restaurants_5_2_1_B_b = false; $scope.restaurants_5_2_1_B_c = false; $scope.restaurants_5_2_1_B_cm = ''; } else if(data.restaurants_5_2_1_B  == 5){ $scope.restaurants_5_2_1_B = data.restaurants_5_2_1_B; $scope.restaurants_5_2_1_B = false; $scope.restaurants_5_2_1_B_b = true; $scope.restaurants_5_2_1_B_c = false; $scope.restaurants_5_2_1_B_cm = ''; } else if(data.restaurants_5_2_1_B  == 7){ 
				$scope.restaurants_5_2_1_B = data.restaurants_5_2_1_B; $scope.restaurants_5_2_1_B = false; $scope.restaurants_5_2_1_B_b = false; $scope.restaurants_5_2_1_B_c = true; $scope.restaurants_5_2_1_B_cm = ''; } else if( ((data.restaurants_5_2_1_B  >= 0 ) && (data.restaurants_5_2_1_B  < 2)) || ((data.restaurants_5_2_1_B  > 2 ) && (data.restaurants_5_2_1_B  < 5)) || ((data.restaurants_5_2_1_B  > 5 ) && (data.restaurants_5_2_1_B  < 7)) ){ $scope.restaurants_5_2_1_B_cm = data.restaurants_5_2_1_B; $scope.restaurants_5_2_1_B = false; $scope.restaurants_5_2_1_B_b = false; $scope.restaurants_5_2_1_B_c = false; $scope.restaurants_5_2_1_B = ''; }else{ $scope.restaurants_5_2_1_B = ''; $scope.restaurants_5_2_1_B_cm = ''; $scope.restaurants_5_2_1_B = false; $scope.restaurants_5_2_1_B_b = false; $scope.restaurants_5_2_1_B_c = false;}
				if(data.restaurants_5_2_1_C == 2){ $scope.restaurants_5_2_1_C = data.restaurants_5_2_1_C; $scope.restaurants_5_2_1_C = true; $scope.restaurants_5_2_1_C_b = false; $scope.restaurants_5_2_1_C_c = false; $scope.restaurants_5_2_1_C_cm = ''; } else if(data.restaurants_5_2_1_C  == 5){ $scope.restaurants_5_2_1_C = data.restaurants_5_2_1_C; $scope.restaurants_5_2_1_C = false; $scope.restaurants_5_2_1_C_b = true; $scope.restaurants_5_2_1_C_c = false; $scope.restaurants_5_2_1_C_cm = ''; } else if(data.restaurants_5_2_1_C  == 7){ 
				$scope.restaurants_5_2_1_C = data.restaurants_5_2_1_C; $scope.restaurants_5_2_1_C = false; $scope.restaurants_5_2_1_C_b = false; $scope.restaurants_5_2_1_C_c = true; $scope.restaurants_5_2_1_C_cm = ''; } else if( ((data.restaurants_5_2_1_C  >= 0 ) && (data.restaurants_5_2_1_C  < 2)) || ((data.restaurants_5_2_1_C  > 2 ) && (data.restaurants_5_2_1_C  < 5)) || ((data.restaurants_5_2_1_C  > 5 ) && (data.restaurants_5_2_1_C  < 7)) ){ $scope.restaurants_5_2_1_C_cm = data.restaurants_5_2_1_C; $scope.restaurants_5_2_1_C = false; $scope.restaurants_5_2_1_C_b = false; $scope.restaurants_5_2_1_C_c = false; $scope.restaurants_5_2_1_C = ''; }else{ $scope.restaurants_5_2_1_C = ''; $scope.restaurants_5_2_1_C_cm = ''; $scope.restaurants_5_2_1_C = false; $scope.restaurants_5_2_1_C_b = false; $scope.restaurants_5_2_1_C_c = false;}
				if(data.restaurants_5_2_1_D == 2){ $scope.restaurants_5_2_1_D = data.restaurants_5_2_1_D; $scope.restaurants_5_2_1_D = true; $scope.restaurants_5_2_1_D_b = false; $scope.restaurants_5_2_1_D_c = false; $scope.restaurants_5_2_1_D_cm = ''; } else if(data.restaurants_5_2_1_D  == 5){ $scope.restaurants_5_2_1_D = data.restaurants_5_2_1_D; $scope.restaurants_5_2_1_D = false; $scope.restaurants_5_2_1_D_b = true; $scope.restaurants_5_2_1_D_c = false; $scope.restaurants_5_2_1_D_cm = ''; } else if(data.restaurants_5_2_1_D  == 7){ 
				$scope.restaurants_5_2_1_D = data.restaurants_5_2_1_D; $scope.restaurants_5_2_1_D = false; $scope.restaurants_5_2_1_D_b = false; $scope.restaurants_5_2_1_D_c = true; $scope.restaurants_5_2_1_D_cm = ''; } else if( ((data.restaurants_5_2_1_D  >= 0 ) && (data.restaurants_5_2_1_D  < 2)) || ((data.restaurants_5_2_1_D  > 2 ) && (data.restaurants_5_2_1_D  < 5)) || ((data.restaurants_5_2_1_D  > 5 ) && (data.restaurants_5_2_1_D  < 7)) ){ $scope.restaurants_5_2_1_D_cm = data.restaurants_5_2_1_D; $scope.restaurants_5_2_1_D = false; $scope.restaurants_5_2_1_D_b = false; $scope.restaurants_5_2_1_D_c = false; $scope.restaurants_5_2_1_D = ''; }else{ $scope.restaurants_5_2_1_D = ''; $scope.restaurants_5_2_1_D_cm = ''; $scope.restaurants_5_2_1_D = false; $scope.restaurants_5_2_1_D_b = false; $scope.restaurants_5_2_1_D_c = false;}
				if(data.restaurants_5_2_1_E == 2){ $scope.restaurants_5_2_1_E = data.restaurants_5_2_1_E; $scope.restaurants_5_2_1_E = true; $scope.restaurants_5_2_1_E_b = false; $scope.restaurants_5_2_1_E_c = false; $scope.restaurants_5_2_1_E_cm = ''; } else if(data.restaurants_5_2_1_E  == 5){ $scope.restaurants_5_2_1_E = data.restaurants_5_2_1_E; $scope.restaurants_5_2_1_E = false; $scope.restaurants_5_2_1_E_b = true; $scope.restaurants_5_2_1_E_c = false; $scope.restaurants_5_2_1_E_cm = ''; } else if(data.restaurants_5_2_1_E  == 7){ 
				$scope.restaurants_5_2_1_E = data.restaurants_5_2_1_E; $scope.restaurants_5_2_1_E = false; $scope.restaurants_5_2_1_E_b = false; $scope.restaurants_5_2_1_E_c = true; $scope.restaurants_5_2_1_E_cm = ''; } else if( ((data.restaurants_5_2_1_E  >= 0 ) && (data.restaurants_5_2_1_E  < 2)) || ((data.restaurants_5_2_1_E  > 2 ) && (data.restaurants_5_2_1_E  < 5)) || ((data.restaurants_5_2_1_E  > 5 ) && (data.restaurants_5_2_1_E  < 7)) ){ $scope.restaurants_5_2_1_E_cm = data.restaurants_5_2_1_E; $scope.restaurants_5_2_1_E = false; $scope.restaurants_5_2_1_E_b = false; $scope.restaurants_5_2_1_E_c = false; $scope.restaurants_5_2_1_E = ''; }else{ $scope.restaurants_5_2_1_E = ''; $scope.restaurants_5_2_1_E_cm = ''; $scope.restaurants_5_2_1_E = false; $scope.restaurants_5_2_1_E_b = false; $scope.restaurants_5_2_1_E_c = false;}
				if(data.restaurants_5_2_1_F == 2){ $scope.restaurants_5_2_1_F = data.restaurants_5_2_1_F; $scope.restaurants_5_2_1_F = true; $scope.restaurants_5_2_1_F_b = false; $scope.restaurants_5_2_1_F_c = false; $scope.restaurants_5_2_1_F_cm = ''; } else if(data.restaurants_5_2_1_F  == 5){ $scope.restaurants_5_2_1_F = data.restaurants_5_2_1_F; $scope.restaurants_5_2_1_F = false; $scope.restaurants_5_2_1_F_b = true; $scope.restaurants_5_2_1_F_c = false; $scope.restaurants_5_2_1_F_cm = ''; } else if(data.restaurants_5_2_1_F  == 7){ 
				$scope.restaurants_5_2_1_F = data.restaurants_5_2_1_F; $scope.restaurants_5_2_1_F = false; $scope.restaurants_5_2_1_F_b = false; $scope.restaurants_5_2_1_F_c = true; $scope.restaurants_5_2_1_F_cm = ''; } else if( ((data.restaurants_5_2_1_F  >= 0 ) && (data.restaurants_5_2_1_F  < 2)) || ((data.restaurants_5_2_1_F  > 2 ) && (data.restaurants_5_2_1_F  < 5)) || ((data.restaurants_5_2_1_F  > 5 ) && (data.restaurants_5_2_1_F  < 7)) ){ $scope.restaurants_5_2_1_F_cm = data.restaurants_5_2_1_F; $scope.restaurants_5_2_1_F = false; $scope.restaurants_5_2_1_F_b = false; $scope.restaurants_5_2_1_F_c = false; $scope.restaurants_5_2_1_F = ''; }else{ $scope.restaurants_5_2_1_F = ''; $scope.restaurants_5_2_1_F_cm = ''; $scope.restaurants_5_2_1_F = false; $scope.restaurants_5_2_1_F_b = false; $scope.restaurants_5_2_1_F_c = false;}
				if(data.restaurants_5_2_1_G == 0){ $scope.restaurants_5_2_1_G = data.restaurants_5_2_1_G; $scope.restaurants_5_2_1_G = true; $scope.restaurants_5_2_1_G_b = false; $scope.restaurants_5_2_1_G_c = false; $scope.restaurants_5_2_1_G_cm = ''; } else if(data.restaurants_5_2_1_G  == 2){ $scope.restaurants_5_2_1_G = data.restaurants_5_2_1_G; $scope.restaurants_5_2_1_G = false; $scope.restaurants_5_2_1_G_b = true; $scope.restaurants_5_2_1_G_c = false; $scope.restaurants_5_2_1_G_cm = ''; } else if(data.restaurants_5_2_1_G  == 4){ $scope.restaurants_5_2_1_G = data.restaurants_5_2_1_G; $scope.restaurants_5_2_1_G = false; $scope.restaurants_5_2_1_G_b = false; $scope.restaurants_5_2_1_G_c = true; $scope.restaurants_5_2_1_G_cm = ''; }else if( ((data.restaurants_5_2_1_G  > 0 ) && (data.restaurants_5_2_1_G  < 2)) || ((data.restaurants_5_2_1_G  > 2 ) && (data.restaurants_5_2_1_G  < 4)) )
				{ $scope.restaurants_5_2_1_G_cm = data.restaurants_5_2_1_G; $scope.restaurants_5_2_1_G = false; $scope.restaurants_5_2_1_G_b = false;  $scope.restaurants_5_2_1_G_c = false; $scope.restaurants_5_2_1_G = ''; }else{ $scope.restaurants_5_2_1_G = ''; $scope.restaurants_5_2_1_G_cm = ''; $scope.restaurants_5_2_1_G = false; $scope.restaurants_5_2_1_G_b = false; $scope.restaurants_5_2_1_G_c = false; }
				if(data.restaurants_5_2_1_H == 0){ $scope.restaurants_5_2_1_H = data.restaurants_5_2_1_H; $scope.restaurants_5_2_1_H = true; $scope.restaurants_5_2_1_H_b = false; $scope.restaurants_5_2_1_H_c = false; $scope.restaurants_5_2_1_H_cm = ''; } else if(data.restaurants_5_2_1_H  == 2){ $scope.restaurants_5_2_1_H = data.restaurants_5_2_1_H; $scope.restaurants_5_2_1_H = false; $scope.restaurants_5_2_1_H_b = true; $scope.restaurants_5_2_1_H_c = false; $scope.restaurants_5_2_1_H_cm = ''; } else if(data.restaurants_5_2_1_H  == 4){ $scope.restaurants_5_2_1_H = data.restaurants_5_2_1_H; $scope.restaurants_5_2_1_H = false; $scope.restaurants_5_2_1_H_b = false; $scope.restaurants_5_2_1_H_c = true; $scope.restaurants_5_2_1_H_cm = ''; }else if( ((data.restaurants_5_2_1_H  > 0 ) && (data.restaurants_5_2_1_H  < 2)) || ((data.restaurants_5_2_1_H  > 2 ) && (data.restaurants_5_2_1_H  < 4)) )
				{ $scope.restaurants_5_2_1_H_cm = data.restaurants_5_2_1_H; $scope.restaurants_5_2_1_H = false; $scope.restaurants_5_2_1_H_b = false;  $scope.restaurants_5_2_1_H_c = false; $scope.restaurants_5_2_1_H = ''; }else{ $scope.restaurants_5_2_1_H = ''; $scope.restaurants_5_2_1_H_cm = ''; $scope.restaurants_5_2_1_H = false; $scope.restaurants_5_2_1_H_b = false; $scope.restaurants_5_2_1_H_c = false; }
				$scope.restaurants_5_3_1_text = data.restaurants_5_3_1_text;
				if(data.restaurants_5_3_1_A == 5){ $scope.restaurants_5_3_1_A = data.restaurants_5_3_1_A; $scope.restaurants_5_3_1_A = true; $scope.restaurants_5_3_1_A_b = false; $scope.restaurants_5_3_1_A_c = false; $scope.restaurants_5_3_1_A_cm = ''; } else if(data.restaurants_5_3_1_A  == 7){ $scope.restaurants_5_3_1_A = data.restaurants_5_3_1_A; $scope.restaurants_5_3_1_A = false; $scope.restaurants_5_3_1_A_b = true; $scope.restaurants_5_3_1_A_c = false; $scope.restaurants_5_3_1_A_cm = ''; } else if(data.restaurants_5_3_1_A  == 10){ 
				$scope.restaurants_5_3_1_A = data.restaurants_5_3_1_A; $scope.restaurants_5_3_1_A = false; $scope.restaurants_5_3_1_A_b = false; $scope.restaurants_5_3_1_A_c = true; $scope.restaurants_5_3_1_A_cm = ''; } else if( ((data.restaurants_5_3_1_A  >= 0 ) && (data.restaurants_5_3_1_A  < 5)) || ((data.restaurants_5_3_1_A  > 5 ) && (data.restaurants_5_3_1_A  < 7)) || ((data.restaurants_5_3_1_A  > 7 ) && (data.restaurants_5_3_1_A  < 10)) ){ $scope.restaurants_5_3_1_A_cm = data.restaurants_5_3_1_A; $scope.restaurants_5_3_1_A = false; $scope.restaurants_5_3_1_A_b = false; $scope.restaurants_5_3_1_A_c = false; $scope.restaurants_5_3_1_A = ''; }else{ $scope.restaurants_5_3_1_A = ''; $scope.restaurants_5_3_1_A_cm = ''; $scope.restaurants_5_3_1_A = false; $scope.restaurants_5_3_1_A_b = false; $scope.restaurants_5_3_1_A_c = false;}
				if(data.restaurants_5_3_1_B == 5){ $scope.restaurants_5_3_1_B = data.restaurants_5_3_1_B; $scope.restaurants_5_3_1_B = true; $scope.restaurants_5_3_1_B_b = false; $scope.restaurants_5_3_1_B_c = false; $scope.restaurants_5_3_1_B_cm = ''; } else if(data.restaurants_5_3_1_B  == 7){ $scope.restaurants_5_3_1_B = data.restaurants_5_3_1_B; $scope.restaurants_5_3_1_B = false; $scope.restaurants_5_3_1_B_b = true; $scope.restaurants_5_3_1_B_c = false; $scope.restaurants_5_3_1_B_cm = ''; } else if(data.restaurants_5_3_1_B  == 10){ 
				$scope.restaurants_5_3_1_B = data.restaurants_5_3_1_B; $scope.restaurants_5_3_1_B = false; $scope.restaurants_5_3_1_B_b = false; $scope.restaurants_5_3_1_B_c = true; $scope.restaurants_5_3_1_B_cm = ''; } else if( ((data.restaurants_5_3_1_B  >= 0 ) && (data.restaurants_5_3_1_B  < 5)) || ((data.restaurants_5_3_1_B  > 5 ) && (data.restaurants_5_3_1_B  < 7)) || ((data.restaurants_5_3_1_B  > 7 ) && (data.restaurants_5_3_1_B  < 10)) ){ $scope.restaurants_5_3_1_B_cm = data.restaurants_5_3_1_B; $scope.restaurants_5_3_1_B = false; $scope.restaurants_5_3_1_B_b = false; $scope.restaurants_5_3_1_B_c = false; $scope.restaurants_5_3_1_B = ''; }else{ $scope.restaurants_5_3_1_B = ''; $scope.restaurants_5_3_1_B_cm = ''; $scope.restaurants_5_3_1_B = false; $scope.restaurants_5_3_1_B_b = false; $scope.restaurants_5_3_1_B_c = false;}
				if(data.restaurants_5_3_1_C == 0){ $scope.restaurants_5_3_1_C = data.restaurants_5_3_1_C; $scope.restaurants_5_3_1_C = true; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = false; $scope.restaurants_5_3_1_C_cm = ''; } else if(data.restaurants_5_3_1_C  == 2){ $scope.restaurants_5_3_1_C = data.restaurants_5_3_1_C; $scope.restaurants_5_3_1_C = false; $scope.restaurants_5_3_1_C_b = true; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = false; $scope.restaurants_5_3_1_C_cm = ''; } else if(data.restaurants_5_3_1_C  == 5){ $scope.restaurants_5_3_1_C = data.restaurants_5_3_1_C; $scope.restaurants_5_3_1_C = false; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = true; $scope.restaurants_5_3_1_C_d = false; $scope.restaurants_5_3_1_C_cm = ''; }else if(data.restaurants_5_3_1_C  == 10){ $scope.restaurants_5_3_1_C = data.restaurants_5_3_1_C; $scope.restaurants_5_3_1_C = false; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = true; $scope.restaurants_5_3_1_C_cm = ''; } else if( ((data.restaurants_5_3_1_C  > 0 ) && (data.restaurants_5_3_1_C  < 2)) || ((data.restaurants_5_3_1_C  > 2 ) && (data.restaurants_5_3_1_C  < 5)) || ((data.restaurants_5_3_1_C  > 5 ) && (data.restaurants_5_3_1_C  < 10)) )
				{ $scope.restaurants_5_3_1_C_cm = data.restaurants_5_3_1_C; $scope.restaurants_5_3_1_C = false; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = false; $scope.restaurants_5_3_1_C = ''; }else{ $scope.restaurants_5_3_1_C = ''; $scope.restaurants_5_3_1_C_cm = ''; $scope.restaurants_5_3_1_C = false; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = false;}
				$scope.restaurants_5_4_1_text = data.restaurants_5_4_1_text;
				if(data.restaurants_5_4_1_A == 2){ $scope.restaurants_5_4_1_A = data.restaurants_5_4_1_A; $scope.restaurants_5_4_1_A = true; $scope.restaurants_5_4_1_A_b = false; $scope.restaurants_5_4_1_A_c = false; $scope.restaurants_5_4_1_A_cm = ''; } else if(data.restaurants_5_4_1_A  == 5){ $scope.restaurants_5_4_1_A = data.restaurants_5_4_1_A; $scope.restaurants_5_4_1_A = false; $scope.restaurants_5_4_1_A_b = true; $scope.restaurants_5_4_1_A_c = false; $scope.restaurants_5_4_1_A_cm = ''; } else if(data.restaurants_5_4_1_A  == 8){ 
				$scope.restaurants_5_4_1_A = data.restaurants_5_4_1_A; $scope.restaurants_5_4_1_A = false; $scope.restaurants_5_4_1_A_b = false; $scope.restaurants_5_4_1_A_c = true; $scope.restaurants_5_4_1_A_cm = ''; } else if( ((data.restaurants_5_4_1_A  >= 0 ) && (data.restaurants_5_4_1_A  < 2)) || ((data.restaurants_5_4_1_A  > 2 ) && (data.restaurants_5_4_1_A  < 5)) || ((data.restaurants_5_4_1_A  > 5 ) && (data.restaurants_5_4_1_A  < 8)) ){ $scope.restaurants_5_4_1_A_cm = data.restaurants_5_4_1_A; $scope.restaurants_5_4_1_A = false; $scope.restaurants_5_4_1_A_b = false; $scope.restaurants_5_4_1_A_c = false; $scope.restaurants_5_4_1_A = ''; }else{ $scope.restaurants_5_4_1_A = ''; $scope.restaurants_5_4_1_A_cm = ''; $scope.restaurants_5_4_1_A = false; $scope.restaurants_5_4_1_A_b = false; $scope.restaurants_5_4_1_A_c = false;}
				if(data.restaurants_5_4_1_B  == 2){ $scope.restaurants_5_4_1_B  = data.restaurants_5_4_1_B ; $scope.restaurants_5_4_1_B = true; $scope.restaurants_5_4_1_B_b = false; $scope.restaurants_5_4_1_B_cm = ''; } else if(data.restaurants_5_4_1_B  == 5){ $scope.restaurants_5_4_1_B  = data.restaurants_5_4_1_B ; $scope.restaurants_5_4_1_B = false; $scope.restaurants_5_4_1_B_b = true; $scope.restaurants_5_4_1_B_cm = ''; }else if( ((data.restaurants_5_4_1_B  > 0 ) && (data.restaurants_5_4_1_B  < 2)) || ((data.restaurants_5_4_1_B  > 2 ) && (data.restaurants_5_4_1_B  < 5)))
				{ $scope.restaurants_5_4_1_B_cm = data.restaurants_5_4_1_B ; $scope.restaurants_5_4_1_B = false; $scope.restaurants_5_4_1_B_b = false; $scope.restaurants_5_4_1_B  = ''; }else{ $scope.restaurants_5_4_1_B  = ''; $scope.restaurants_5_4_1_B_cm = ''; $scope.restaurants_5_4_1_B = false; $scope.restaurants_5_4_1_B_b = false; }
				if(data.restaurants_5_4_1_C == 2){ $scope.restaurants_5_4_1_C = data.restaurants_5_4_1_C; $scope.restaurants_5_4_1_C = true; $scope.restaurants_5_4_1_C_b = false; $scope.restaurants_5_4_1_C_c = false; $scope.restaurants_5_4_1_C_cm = ''; } else if(data.restaurants_5_4_1_C  == 5){ $scope.restaurants_5_4_1_C = data.restaurants_5_4_1_C; $scope.restaurants_5_4_1_C = false; $scope.restaurants_5_4_1_C_b = true; $scope.restaurants_5_4_1_C_c = false; $scope.restaurants_5_4_1_C_cm = ''; } else if(data.restaurants_5_4_1_C  == 7){ 
				$scope.restaurants_5_4_1_C = data.restaurants_5_4_1_C; $scope.restaurants_5_4_1_C = false; $scope.restaurants_5_4_1_C_b = false; $scope.restaurants_5_4_1_C_c = true; $scope.restaurants_5_4_1_C_cm = ''; } else if( ((data.restaurants_5_4_1_C  >= 0 ) && (data.restaurants_5_4_1_C  < 2)) || ((data.restaurants_5_4_1_C  > 2 ) && (data.restaurants_5_4_1_C  < 5)) || ((data.restaurants_5_4_1_C  > 5 ) && (data.restaurants_5_4_1_C  < 7)) ){ $scope.restaurants_5_4_1_C_cm = data.restaurants_5_4_1_C; $scope.restaurants_5_4_1_C = false; $scope.restaurants_5_4_1_C_b = false; $scope.restaurants_5_4_1_C_c = false; $scope.restaurants_5_4_1_C = ''; }else{ $scope.restaurants_5_4_1_C = ''; $scope.restaurants_5_4_1_C_cm = ''; $scope.restaurants_5_4_1_C = false; $scope.restaurants_5_4_1_C_b = false; $scope.restaurants_5_4_1_C_c = false;}
				if(data.restaurants_5_4_1_D == 0){ $scope.restaurants_5_4_1_D = data.restaurants_5_4_1_D; $scope.restaurants_5_4_1_D = true; $scope.restaurants_5_4_1_D_b = false; $scope.restaurants_5_4_1_D_c = false; $scope.restaurants_5_4_1_D_cm = ''; } else if(data.restaurants_5_4_1_D  == 2){ $scope.restaurants_5_4_1_D = data.restaurants_5_4_1_D; $scope.restaurants_5_4_1_D = false; $scope.restaurants_5_4_1_D_b = true; $scope.restaurants_5_4_1_D_c = false; $scope.restaurants_5_4_1_D_cm = ''; } else if(data.restaurants_5_4_1_D  == 5){ $scope.restaurants_5_4_1_D = data.restaurants_5_4_1_D; $scope.restaurants_5_4_1_D = false; $scope.restaurants_5_4_1_D_b = false; $scope.restaurants_5_4_1_D_c = true; $scope.restaurants_5_4_1_D_cm = ''; }else if( ((data.restaurants_5_4_1_D  > 0 ) && (data.restaurants_5_4_1_D  < 2)) || ((data.restaurants_5_4_1_D  > 2 ) && (data.restaurants_5_4_1_D  < 5)) )
				{ $scope.restaurants_5_4_1_D_cm = data.restaurants_5_4_1_D; $scope.restaurants_5_4_1_D = false; $scope.restaurants_5_4_1_D_b = false;  $scope.restaurants_5_4_1_D_c = false; $scope.restaurants_5_4_1_D = ''; }else{ $scope.restaurants_5_4_1_D = ''; $scope.restaurants_5_4_1_D_cm = ''; $scope.restaurants_5_4_1_D = false; $scope.restaurants_5_4_1_D_b = false; $scope.restaurants_5_4_1_D_c = false; }
				if(data.restaurants_5_4_1_E == 0){ $scope.restaurants_5_4_1_E = data.restaurants_5_4_1_E; $scope.restaurants_5_4_1_E = true; $scope.restaurants_5_4_1_E_b = false; $scope.restaurants_5_4_1_E_c = false; $scope.restaurants_5_4_1_E_cm = ''; } else if(data.restaurants_5_4_1_E  == 2){ $scope.restaurants_5_4_1_E = data.restaurants_5_4_1_E; $scope.restaurants_5_4_1_E = false; $scope.restaurants_5_4_1_E_b = true; $scope.restaurants_5_4_1_E_c = false; $scope.restaurants_5_4_1_E_cm = ''; } else if(data.restaurants_5_4_1_E  == 5){ $scope.restaurants_5_4_1_E = data.restaurants_5_4_1_E; $scope.restaurants_5_4_1_E = false; $scope.restaurants_5_4_1_E_b = false; $scope.restaurants_5_4_1_E_c = true; $scope.restaurants_5_4_1_E_cm = ''; }else if( ((data.restaurants_5_4_1_E  > 0 ) && (data.restaurants_5_4_1_E  < 2)) || ((data.restaurants_5_4_1_E  > 2 ) && (data.restaurants_5_4_1_E  < 5)) )
				{ $scope.restaurants_5_4_1_E_cm = data.restaurants_5_4_1_E; $scope.restaurants_5_4_1_E = false; $scope.restaurants_5_4_1_E_b = false;  $scope.restaurants_5_4_1_E_c = false; $scope.restaurants_5_4_1_E = ''; }else{ $scope.restaurants_5_4_1_E = ''; $scope.restaurants_5_4_1_E_cm = ''; $scope.restaurants_5_4_1_E = false; $scope.restaurants_5_4_1_E_b = false; $scope.restaurants_5_4_1_E_c = false; }
				$scope.restaurants_5_5_1_text = data.restaurants_5_5_1_text;
				if(data.restaurants_5_5_1_A == 0){ $scope.restaurants_5_5_1_A = data.restaurants_5_5_1_A; $scope.restaurants_5_5_1_A = true; $scope.restaurants_5_5_1_A_b = false; $scope.restaurants_5_5_1_A_c = false; $scope.restaurants_5_5_1_A_cm = ''; } else if(data.restaurants_5_5_1_A  == 2){ $scope.restaurants_5_5_1_A = data.restaurants_5_5_1_A; $scope.restaurants_5_5_1_A = false; $scope.restaurants_5_5_1_A_b = true; $scope.restaurants_5_5_1_A_c = false; $scope.restaurants_5_5_1_A_cm = ''; } else if(data.restaurants_5_5_1_A  == ){ $scope.restaurants_5_5_1_A = data.restaurants_5_5_1_A; $scope.restaurants_5_5_1_A = false; $scope.restaurants_5_5_1_A_b = false; $scope.restaurants_5_5_1_A_c = true; $scope.restaurants_5_5_1_A_cm = ''; }else if( ((data.restaurants_5_5_1_A  > 0 ) && (data.restaurants_5_5_1_A  < 2)) || ((data.restaurants_5_5_1_A  > 2 ) && (data.restaurants_5_5_1_A  < )) )
				{ $scope.restaurants_5_5_1_A_cm = data.restaurants_5_5_1_A; $scope.restaurants_5_5_1_A = false; $scope.restaurants_5_5_1_A_b = false;  $scope.restaurants_5_5_1_A_c = false; $scope.restaurants_5_5_1_A = ''; }else{ $scope.restaurants_5_5_1_A = ''; $scope.restaurants_5_5_1_A_cm = ''; $scope.restaurants_5_5_1_A = false; $scope.restaurants_5_5_1_A_b = false; $scope.restaurants_5_5_1_A_c = false; }
				if(data.restaurants_5_5_1_B == 1){ $scope.restaurants_5_5_1_B = data.restaurants_5_5_1_B; $scope.restaurants_5_5_1_B = true; $scope.restaurants_5_5_1_B_b = false; $scope.restaurants_5_5_1_B_c = false; $scope.restaurants_5_5_1_B_cm = ''; } else if(data.restaurants_5_5_1_B  == 2){ $scope.restaurants_5_5_1_B = data.restaurants_5_5_1_B; $scope.restaurants_5_5_1_B = false; $scope.restaurants_5_5_1_B_b = true; $scope.restaurants_5_5_1_B_c = false; $scope.restaurants_5_5_1_B_cm = ''; } else if(data.restaurants_5_5_1_B  == 3){ 
				$scope.restaurants_5_5_1_B = data.restaurants_5_5_1_B; $scope.restaurants_5_5_1_B = false; $scope.restaurants_5_5_1_B_b = false; $scope.restaurants_5_5_1_B_c = true; $scope.restaurants_5_5_1_B_cm = ''; } else if( ((data.restaurants_5_5_1_B  >= 0 ) && (data.restaurants_5_5_1_B  < 1)) || ((data.restaurants_5_5_1_B  > 1 ) && (data.restaurants_5_5_1_B  < 2)) || ((data.restaurants_5_5_1_B  > 2 ) && (data.restaurants_5_5_1_B  < 3)) ){ $scope.restaurants_5_5_1_B_cm = data.restaurants_5_5_1_B; $scope.restaurants_5_5_1_B = false; $scope.restaurants_5_5_1_B_b = false; $scope.restaurants_5_5_1_B_c = false; $scope.restaurants_5_5_1_B = ''; }else{ $scope.restaurants_5_5_1_B = ''; $scope.restaurants_5_5_1_B_cm = ''; $scope.restaurants_5_5_1_B = false; $scope.restaurants_5_5_1_B_b = false; $scope.restaurants_5_5_1_B_c = false;}
				if(data.restaurants_5_5_1_C == 1){ $scope.restaurants_5_5_1_C = data.restaurants_5_5_1_C; $scope.restaurants_5_5_1_C = true; $scope.restaurants_5_5_1_C_b = false; $scope.restaurants_5_5_1_C_c = false; $scope.restaurants_5_5_1_C_cm = ''; } else if(data.restaurants_5_5_1_C  == 2){ $scope.restaurants_5_5_1_C = data.restaurants_5_5_1_C; $scope.restaurants_5_5_1_C = false; $scope.restaurants_5_5_1_C_b = true; $scope.restaurants_5_5_1_C_c = false; $scope.restaurants_5_5_1_C_cm = ''; } else if(data.restaurants_5_5_1_C  == 3){ 
				$scope.restaurants_5_5_1_C = data.restaurants_5_5_1_C; $scope.restaurants_5_5_1_C = false; $scope.restaurants_5_5_1_C_b = false; $scope.restaurants_5_5_1_C_c = true; $scope.restaurants_5_5_1_C_cm = ''; } else if( ((data.restaurants_5_5_1_C  >= 0 ) && (data.restaurants_5_5_1_C  < 1)) || ((data.restaurants_5_5_1_C  > 1 ) && (data.restaurants_5_5_1_C  < 2)) || ((data.restaurants_5_5_1_C  > 2 ) && (data.restaurants_5_5_1_C  < 3)) ){ $scope.restaurants_5_5_1_C_cm = data.restaurants_5_5_1_C; $scope.restaurants_5_5_1_C = false; $scope.restaurants_5_5_1_C_b = false; $scope.restaurants_5_5_1_C_c = false; $scope.restaurants_5_5_1_C = ''; }else{ $scope.restaurants_5_5_1_C = ''; $scope.restaurants_5_5_1_C_cm = ''; $scope.restaurants_5_5_1_C = false; $scope.restaurants_5_5_1_C_b = false; $scope.restaurants_5_5_1_C_c = false;}
				if(data.restaurants_5_5_1_D == 1){ $scope.restaurants_5_5_1_D = data.restaurants_5_5_1_D; $scope.restaurants_5_5_1_D = true; $scope.restaurants_5_5_1_D_b = false; $scope.restaurants_5_5_1_D_c = false; $scope.restaurants_5_5_1_D_cm = ''; } else if(data.restaurants_5_5_1_D  == 2){ $scope.restaurants_5_5_1_D = data.restaurants_5_5_1_D; $scope.restaurants_5_5_1_D = false; $scope.restaurants_5_5_1_D_b = true; $scope.restaurants_5_5_1_D_c = false; $scope.restaurants_5_5_1_D_cm = ''; } else if(data.restaurants_5_5_1_D  == 3){ 
				$scope.restaurants_5_5_1_D = data.restaurants_5_5_1_D; $scope.restaurants_5_5_1_D = false; $scope.restaurants_5_5_1_D_b = false; $scope.restaurants_5_5_1_D_c = true; $scope.restaurants_5_5_1_D_cm = ''; } else if( ((data.restaurants_5_5_1_D  >= 0 ) && (data.restaurants_5_5_1_D  < 1)) || ((data.restaurants_5_5_1_D  > 1 ) && (data.restaurants_5_5_1_D  < 2)) || ((data.restaurants_5_5_1_D  > 2 ) && (data.restaurants_5_5_1_D  < 3)) ){ $scope.restaurants_5_5_1_D_cm = data.restaurants_5_5_1_D; $scope.restaurants_5_5_1_D = false; $scope.restaurants_5_5_1_D_b = false; $scope.restaurants_5_5_1_D_c = false; $scope.restaurants_5_5_1_D = ''; }else{ $scope.restaurants_5_5_1_D = ''; $scope.restaurants_5_5_1_D_cm = ''; $scope.restaurants_5_5_1_D = false; $scope.restaurants_5_5_1_D_b = false; $scope.restaurants_5_5_1_D_c = false;}
				if(data.restaurants_5_5_1_E_a == 1){ $scope.restaurants_5_5_1_E_a = data.restaurants_5_5_1_E_a; $scope.restaurants_5_5_1_E_a= true; $scope.restaurants_5_5_1_E_a_cm = ''; } else if((data.restaurants_5_5_1_E_a > 0 ) && (data.restaurants_5_5_1_E_a < 1)){ $scope.restaurants_5_5_1_E_a_cm = data.restaurants_5_5_1_E_a; $scope.restaurants_5_5_1_E_a= false; $scope.restaurants_5_5_1_E_a= ''; }else{ $scope.restaurants_5_5_1_E_a= ''; $scope.restaurants_5_5_1_E_a_cm = ''; $scope.restaurants_5_5_1_E_a= false; }
				if(data.restaurants_5_5_1_E_b == 1){ $scope.restaurants_5_5_1_E_b = data.restaurants_5_5_1_E_b; $scope.restaurants_5_5_1_E_b= true; $scope.restaurants_5_5_1_E_b_cm = ''; } else if((data.restaurants_5_5_1_E_b > 0 ) && (data.restaurants_5_5_1_E_b < 1)){ $scope.restaurants_5_5_1_E_b_cm = data.restaurants_5_5_1_E_b; $scope.restaurants_5_5_1_E_b= false; $scope.restaurants_5_5_1_E_b= ''; }else{ $scope.restaurants_5_5_1_E_b= ''; $scope.restaurants_5_5_1_E_b_cm = ''; $scope.restaurants_5_5_1_E_b= false; }
				if(data.restaurants_5_5_1_E_c == 1){ $scope.restaurants_5_5_1_E_c = data.restaurants_5_5_1_E_c; $scope.restaurants_5_5_1_E_c= true; $scope.restaurants_5_5_1_E_c_cm = ''; } else if((data.restaurants_5_5_1_E_c > 0 ) && (data.restaurants_5_5_1_E_c < 1)){ $scope.restaurants_5_5_1_E_c_cm = data.restaurants_5_5_1_E_c; $scope.restaurants_5_5_1_E_c= false; $scope.restaurants_5_5_1_E_c= ''; }else{ $scope.restaurants_5_5_1_E_c= ''; $scope.restaurants_5_5_1_E_c_cm = ''; $scope.restaurants_5_5_1_E_c= false; }
				if(data.restaurants_5_5_1_E_d == 1){ $scope.restaurants_5_5_1_E_d = data.restaurants_5_5_1_E_d; $scope.restaurants_5_5_1_E_d= true; $scope.restaurants_5_5_1_E_d_cm = ''; } else if((data.restaurants_5_5_1_E_d > 0 ) && (data.restaurants_5_5_1_E_d < 1)){ $scope.restaurants_5_5_1_E_d_cm = data.restaurants_5_5_1_E_d; $scope.restaurants_5_5_1_E_d= false; $scope.restaurants_5_5_1_E_d= ''; }else{ $scope.restaurants_5_5_1_E_d= ''; $scope.restaurants_5_5_1_E_d_cm = ''; $scope.restaurants_5_5_1_E_d= false; }
				if(data.restaurants_5_5_1_F == 1){ $scope.restaurants_5_5_1_F = data.restaurants_5_5_1_F; $scope.restaurants_5_5_1_F = true; $scope.restaurants_5_5_1_F_b = false; $scope.restaurants_5_5_1_F_c = false; $scope.restaurants_5_5_1_F_cm = ''; } else if(data.restaurants_5_5_1_F  == 2){ $scope.restaurants_5_5_1_F = data.restaurants_5_5_1_F; $scope.restaurants_5_5_1_F = false; $scope.restaurants_5_5_1_F_b = true; $scope.restaurants_5_5_1_F_c = false; $scope.restaurants_5_5_1_F_cm = ''; } else if(data.restaurants_5_5_1_F  == 3){ 
				$scope.restaurants_5_5_1_F = data.restaurants_5_5_1_F; $scope.restaurants_5_5_1_F = false; $scope.restaurants_5_5_1_F_b = false; $scope.restaurants_5_5_1_F_c = true; $scope.restaurants_5_5_1_F_cm = ''; } else if( ((data.restaurants_5_5_1_F  >= 0 ) && (data.restaurants_5_5_1_F  < 1)) || ((data.restaurants_5_5_1_F  > 1 ) && (data.restaurants_5_5_1_F  < 2)) || ((data.restaurants_5_5_1_F  > 2 ) && (data.restaurants_5_5_1_F  < 3)) ){ $scope.restaurants_5_5_1_F_cm = data.restaurants_5_5_1_F; $scope.restaurants_5_5_1_F = false; $scope.restaurants_5_5_1_F_b = false; $scope.restaurants_5_5_1_F_c = false; $scope.restaurants_5_5_1_F = ''; }else{ $scope.restaurants_5_5_1_F = ''; $scope.restaurants_5_5_1_F_cm = ''; $scope.restaurants_5_5_1_F = false; $scope.restaurants_5_5_1_F_b = false; $scope.restaurants_5_5_1_F_c = false;}
				if(data.restaurants_5_5_1_G_a == 1){ $scope.restaurants_5_5_1_G_a = data.restaurants_5_5_1_G_a; $scope.restaurants_5_5_1_G_a= true; $scope.restaurants_5_5_1_G_a_cm = ''; } else if((data.restaurants_5_5_1_G_a > 0 ) && (data.restaurants_5_5_1_G_a < 1)){ $scope.restaurants_5_5_1_G_a_cm = data.restaurants_5_5_1_G_a; $scope.restaurants_5_5_1_G_a= false; $scope.restaurants_5_5_1_G_a= ''; }else{ $scope.restaurants_5_5_1_G_a= ''; $scope.restaurants_5_5_1_G_a_cm = ''; $scope.restaurants_5_5_1_G_a= false; }
				if(data.restaurants_5_5_1_G_b == 2){ $scope.restaurants_5_5_1_G_b = data.restaurants_5_5_1_G_b; $scope.restaurants_5_5_1_G_b= true; $scope.restaurants_5_5_1_G_b_cm = ''; } else if((data.restaurants_5_5_1_G_b > 0 ) && (data.restaurants_5_5_1_G_b < 2)){ $scope.restaurants_5_5_1_G_b_cm = data.restaurants_5_5_1_G_b; $scope.restaurants_5_5_1_G_b= false; $scope.restaurants_5_5_1_G_b= ''; }else{ $scope.restaurants_5_5_1_G_b= ''; $scope.restaurants_5_5_1_G_b_cm = ''; $scope.restaurants_5_5_1_G_b= false; }
				if(data.restaurants_5_5_1_G_c == 3){ $scope.restaurants_5_5_1_G_c = data.restaurants_5_5_1_G_c; $scope.restaurants_5_5_1_G_c= true; $scope.restaurants_5_5_1_G_c_cm = ''; } else if((data.restaurants_5_5_1_G_c > 0 ) && (data.restaurants_5_5_1_G_c < 3)){ $scope.restaurants_5_5_1_G_c_cm = data.restaurants_5_5_1_G_c; $scope.restaurants_5_5_1_G_c= false; $scope.restaurants_5_5_1_G_c= ''; }else{ $scope.restaurants_5_5_1_G_c= ''; $scope.restaurants_5_5_1_G_c_cm = ''; $scope.restaurants_5_5_1_G_c= false; }
				if(data.restaurants_5_5_1_H == 1){ $scope.restaurants_5_5_1_H = data.restaurants_5_5_1_H; $scope.restaurants_5_5_1_H = true; $scope.restaurants_5_5_1_H_b = false; $scope.restaurants_5_5_1_H_c = false; $scope.restaurants_5_5_1_H_cm = ''; } else if(data.restaurants_5_5_1_H  == 2){ $scope.restaurants_5_5_1_H = data.restaurants_5_5_1_H; $scope.restaurants_5_5_1_H = false; $scope.restaurants_5_5_1_H_b = true; $scope.restaurants_5_5_1_H_c = false; $scope.restaurants_5_5_1_H_cm = ''; } else if(data.restaurants_5_5_1_H  == 3){ 
				$scope.restaurants_5_5_1_H = data.restaurants_5_5_1_H; $scope.restaurants_5_5_1_H = false; $scope.restaurants_5_5_1_H_b = false; $scope.restaurants_5_5_1_H_c = true; $scope.restaurants_5_5_1_H_cm = ''; } else if( ((data.restaurants_5_5_1_H  >= 0 ) && (data.restaurants_5_5_1_H  < 1)) || ((data.restaurants_5_5_1_H  > 1 ) && (data.restaurants_5_5_1_H  < 2)) || ((data.restaurants_5_5_1_H  > 2 ) && (data.restaurants_5_5_1_H  < 3)) ){ $scope.restaurants_5_5_1_H_cm = data.restaurants_5_5_1_H; $scope.restaurants_5_5_1_H = false; $scope.restaurants_5_5_1_H_b = false; $scope.restaurants_5_5_1_H_c = false; $scope.restaurants_5_5_1_H = ''; }else{ $scope.restaurants_5_5_1_H = ''; $scope.restaurants_5_5_1_H_cm = ''; $scope.restaurants_5_5_1_H = false; $scope.restaurants_5_5_1_H_b = false; $scope.restaurants_5_5_1_H_c = false;}
				if(data.restaurants_5_5_1_I == 1){ $scope.restaurants_5_5_1_I = data.restaurants_5_5_1_I; $scope.restaurants_5_5_1_I = true; $scope.restaurants_5_5_1_I_b = false; $scope.restaurants_5_5_1_I_c = false; $scope.restaurants_5_5_1_I_cm = ''; } else if(data.restaurants_5_5_1_I  == 2){ $scope.restaurants_5_5_1_I = data.restaurants_5_5_1_I; $scope.restaurants_5_5_1_I = false; $scope.restaurants_5_5_1_I_b = true; $scope.restaurants_5_5_1_I_c = false; $scope.restaurants_5_5_1_I_cm = ''; } else if(data.restaurants_5_5_1_I  == 3){ 
				$scope.restaurants_5_5_1_I = data.restaurants_5_5_1_I; $scope.restaurants_5_5_1_I = false; $scope.restaurants_5_5_1_I_b = false; $scope.restaurants_5_5_1_I_c = true; $scope.restaurants_5_5_1_I_cm = ''; } else if( ((data.restaurants_5_5_1_I  >= 0 ) && (data.restaurants_5_5_1_I  < 1)) || ((data.restaurants_5_5_1_I  > 1 ) && (data.restaurants_5_5_1_I  < 2)) || ((data.restaurants_5_5_1_I  > 2 ) && (data.restaurants_5_5_1_I  < 3)) ){ $scope.restaurants_5_5_1_I_cm = data.restaurants_5_5_1_I; $scope.restaurants_5_5_1_I = false; $scope.restaurants_5_5_1_I_b = false; $scope.restaurants_5_5_1_I_c = false; $scope.restaurants_5_5_1_I = ''; }else{ $scope.restaurants_5_5_1_I = ''; $scope.restaurants_5_5_1_I_cm = ''; $scope.restaurants_5_5_1_I = false; $scope.restaurants_5_5_1_I_b = false; $scope.restaurants_5_5_1_I_c = false;}
				$scope.restaurants_5_6_1_text = data.restaurants_5_6_1_text;
				if(data.restaurants_5_6_1_A == 0){ $scope.restaurants_5_6_1_A = data.restaurants_5_6_1_A; $scope.restaurants_5_6_1_A = true; $scope.restaurants_5_6_1_A_b = false; $scope.restaurants_5_6_1_A_c = false; $scope.restaurants_5_6_1_A_cm = ''; } else if(data.restaurants_5_6_1_A  == 5){ $scope.restaurants_5_6_1_A = data.restaurants_5_6_1_A; $scope.restaurants_5_6_1_A = false; $scope.restaurants_5_6_1_A_b = true; $scope.restaurants_5_6_1_A_c = false; $scope.restaurants_5_6_1_A_cm = ''; } else if(data.restaurants_5_6_1_A  == ){ $scope.restaurants_5_6_1_A = data.restaurants_5_6_1_A; $scope.restaurants_5_6_1_A = false; $scope.restaurants_5_6_1_A_b = false; $scope.restaurants_5_6_1_A_c = true; $scope.restaurants_5_6_1_A_cm = ''; }else if( ((data.restaurants_5_6_1_A  > 0 ) && (data.restaurants_5_6_1_A  < 5)) || ((data.restaurants_5_6_1_A  > 5 ) && (data.restaurants_5_6_1_A  < )) )
				{ $scope.restaurants_5_6_1_A_cm = data.restaurants_5_6_1_A; $scope.restaurants_5_6_1_A = false; $scope.restaurants_5_6_1_A_b = false;  $scope.restaurants_5_6_1_A_c = false; $scope.restaurants_5_6_1_A = ''; }else{ $scope.restaurants_5_6_1_A = ''; $scope.restaurants_5_6_1_A_cm = ''; $scope.restaurants_5_6_1_A = false; $scope.restaurants_5_6_1_A_b = false; $scope.restaurants_5_6_1_A_c = false; }
				if(data.restaurants_5_6_1_B  == 5){ $scope.restaurants_5_6_1_B  = data.restaurants_5_6_1_B ; $scope.restaurants_5_6_1_B = true; $scope.restaurants_5_6_1_B_b = false; $scope.restaurants_5_6_1_B_cm = ''; } else if(data.restaurants_5_6_1_B  == 10){ $scope.restaurants_5_6_1_B  = data.restaurants_5_6_1_B ; $scope.restaurants_5_6_1_B = false; $scope.restaurants_5_6_1_B_b = true; $scope.restaurants_5_6_1_B_cm = ''; }else if( ((data.restaurants_5_6_1_B  > 0 ) && (data.restaurants_5_6_1_B  < 5)) || ((data.restaurants_5_6_1_B  > 5 ) && (data.restaurants_5_6_1_B  < 10)))
				{ $scope.restaurants_5_6_1_B_cm = data.restaurants_5_6_1_B ; $scope.restaurants_5_6_1_B = false; $scope.restaurants_5_6_1_B_b = false; $scope.restaurants_5_6_1_B  = ''; }else{ $scope.restaurants_5_6_1_B  = ''; $scope.restaurants_5_6_1_B_cm = ''; $scope.restaurants_5_6_1_B = false; $scope.restaurants_5_6_1_B_b = false; }
				if(data.restaurants_5_6_1_C == 5){ $scope.restaurants_5_6_1_C = data.restaurants_5_6_1_C; $scope.restaurants_5_6_1_C = true; $scope.restaurants_5_6_1_C_b = false; $scope.restaurants_5_6_1_C_c = false; $scope.restaurants_5_6_1_C_cm = ''; } else if(data.restaurants_5_6_1_C  == 10){ $scope.restaurants_5_6_1_C = data.restaurants_5_6_1_C; $scope.restaurants_5_6_1_C = false; $scope.restaurants_5_6_1_C_b = true; $scope.restaurants_5_6_1_C_c = false; $scope.restaurants_5_6_1_C_cm = ''; } else if(data.restaurants_5_6_1_C  == 15){ 
				$scope.restaurants_5_6_1_C = data.restaurants_5_6_1_C; $scope.restaurants_5_6_1_C = false; $scope.restaurants_5_6_1_C_b = false; $scope.restaurants_5_6_1_C_c = true; $scope.restaurants_5_6_1_C_cm = ''; } else if( ((data.restaurants_5_6_1_C  >= 0 ) && (data.restaurants_5_6_1_C  < 5)) || ((data.restaurants_5_6_1_C  > 5 ) && (data.restaurants_5_6_1_C  < 10)) || ((data.restaurants_5_6_1_C  > 10 ) && (data.restaurants_5_6_1_C  < 15)) ){ $scope.restaurants_5_6_1_C_cm = data.restaurants_5_6_1_C; $scope.restaurants_5_6_1_C = false; $scope.restaurants_5_6_1_C_b = false; $scope.restaurants_5_6_1_C_c = false; $scope.restaurants_5_6_1_C = ''; }else{ $scope.restaurants_5_6_1_C = ''; $scope.restaurants_5_6_1_C_cm = ''; $scope.restaurants_5_6_1_C = false; $scope.restaurants_5_6_1_C_b = false; $scope.restaurants_5_6_1_C_c = false;}
				if(data.restaurants_5_6_1_D == 5){ $scope.restaurants_5_6_1_D = data.restaurants_5_6_1_D; $scope.restaurants_5_6_1_D = true; $scope.restaurants_5_6_1_D_b = false; $scope.restaurants_5_6_1_D_c = false; $scope.restaurants_5_6_1_D_cm = ''; } else if(data.restaurants_5_6_1_D  == 7){ $scope.restaurants_5_6_1_D = data.restaurants_5_6_1_D; $scope.restaurants_5_6_1_D = false; $scope.restaurants_5_6_1_D_b = true; $scope.restaurants_5_6_1_D_c = false; $scope.restaurants_5_6_1_D_cm = ''; } else if(data.restaurants_5_6_1_D  == 10){ 
				$scope.restaurants_5_6_1_D = data.restaurants_5_6_1_D; $scope.restaurants_5_6_1_D = false; $scope.restaurants_5_6_1_D_b = false; $scope.restaurants_5_6_1_D_c = true; $scope.restaurants_5_6_1_D_cm = ''; } else if( ((data.restaurants_5_6_1_D  >= 0 ) && (data.restaurants_5_6_1_D  < 5)) || ((data.restaurants_5_6_1_D  > 5 ) && (data.restaurants_5_6_1_D  < 7)) || ((data.restaurants_5_6_1_D  > 7 ) && (data.restaurants_5_6_1_D  < 10)) ){ $scope.restaurants_5_6_1_D_cm = data.restaurants_5_6_1_D; $scope.restaurants_5_6_1_D = false; $scope.restaurants_5_6_1_D_b = false; $scope.restaurants_5_6_1_D_c = false; $scope.restaurants_5_6_1_D = ''; }else{ $scope.restaurants_5_6_1_D = ''; $scope.restaurants_5_6_1_D_cm = ''; $scope.restaurants_5_6_1_D = false; $scope.restaurants_5_6_1_D_b = false; $scope.restaurants_5_6_1_D_c = false;}
				$scope.restaurants_5_7_1_text = data.restaurants_5_7_1_text;
				if(data.restaurants_5_7_1_A == 0){ $scope.restaurants_5_7_1_A = data.restaurants_5_7_1_A; $scope.restaurants_5_7_1_A = true; $scope.restaurants_5_7_1_A_b = false; $scope.restaurants_5_7_1_A_c = false; $scope.restaurants_5_7_1_A_cm = ''; } else if(data.restaurants_5_7_1_A  == 5){ $scope.restaurants_5_7_1_A = data.restaurants_5_7_1_A; $scope.restaurants_5_7_1_A = false; $scope.restaurants_5_7_1_A_b = true; $scope.restaurants_5_7_1_A_c = false; $scope.restaurants_5_7_1_A_cm = ''; } else if(data.restaurants_5_7_1_A  == ){ $scope.restaurants_5_7_1_A = data.restaurants_5_7_1_A; $scope.restaurants_5_7_1_A = false; $scope.restaurants_5_7_1_A_b = false; $scope.restaurants_5_7_1_A_c = true; $scope.restaurants_5_7_1_A_cm = ''; }else if( ((data.restaurants_5_7_1_A  > 0 ) && (data.restaurants_5_7_1_A  < 5)) || ((data.restaurants_5_7_1_A  > 5 ) && (data.restaurants_5_7_1_A  < )) )
				{ $scope.restaurants_5_7_1_A_cm = data.restaurants_5_7_1_A; $scope.restaurants_5_7_1_A = false; $scope.restaurants_5_7_1_A_b = false;  $scope.restaurants_5_7_1_A_c = false; $scope.restaurants_5_7_1_A = ''; }else{ $scope.restaurants_5_7_1_A = ''; $scope.restaurants_5_7_1_A_cm = ''; $scope.restaurants_5_7_1_A = false; $scope.restaurants_5_7_1_A_b = false; $scope.restaurants_5_7_1_A_c = false; }
				if(data.restaurants_5_7_1_B == 0){ $scope.restaurants_5_7_1_B = data.restaurants_5_7_1_B; $scope.restaurants_5_7_1_B = true; $scope.restaurants_5_7_1_B_b = false; $scope.restaurants_5_7_1_B_c = false; $scope.restaurants_5_7_1_B_cm = ''; } else if(data.restaurants_5_7_1_B  == 5){ $scope.restaurants_5_7_1_B = data.restaurants_5_7_1_B; $scope.restaurants_5_7_1_B = false; $scope.restaurants_5_7_1_B_b = true; $scope.restaurants_5_7_1_B_c = false; $scope.restaurants_5_7_1_B_cm = ''; } else if(data.restaurants_5_7_1_B  == ){ $scope.restaurants_5_7_1_B = data.restaurants_5_7_1_B; $scope.restaurants_5_7_1_B = false; $scope.restaurants_5_7_1_B_b = false; $scope.restaurants_5_7_1_B_c = true; $scope.restaurants_5_7_1_B_cm = ''; }else if( ((data.restaurants_5_7_1_B  > 0 ) && (data.restaurants_5_7_1_B  < 5)) || ((data.restaurants_5_7_1_B  > 5 ) && (data.restaurants_5_7_1_B  < )) )
				{ $scope.restaurants_5_7_1_B_cm = data.restaurants_5_7_1_B; $scope.restaurants_5_7_1_B = false; $scope.restaurants_5_7_1_B_b = false;  $scope.restaurants_5_7_1_B_c = false; $scope.restaurants_5_7_1_B = ''; }else{ $scope.restaurants_5_7_1_B = ''; $scope.restaurants_5_7_1_B_cm = ''; $scope.restaurants_5_7_1_B = false; $scope.restaurants_5_7_1_B_b = false; $scope.restaurants_5_7_1_B_c = false; }
				if(data.restaurants_5_7_1_C == 2){ $scope.restaurants_5_7_1_C = data.restaurants_5_7_1_C; $scope.restaurants_5_7_1_C = true; $scope.restaurants_5_7_1_C_b = false; $scope.restaurants_5_7_1_C_c = false; $scope.restaurants_5_7_1_C_cm = ''; } else if(data.restaurants_5_7_1_C  == 7){ $scope.restaurants_5_7_1_C = data.restaurants_5_7_1_C; $scope.restaurants_5_7_1_C = false; $scope.restaurants_5_7_1_C_b = true; $scope.restaurants_5_7_1_C_c = false; $scope.restaurants_5_7_1_C_cm = ''; } else if(data.restaurants_5_7_1_C  == 10){ 
				$scope.restaurants_5_7_1_C = data.restaurants_5_7_1_C; $scope.restaurants_5_7_1_C = false; $scope.restaurants_5_7_1_C_b = false; $scope.restaurants_5_7_1_C_c = true; $scope.restaurants_5_7_1_C_cm = ''; } else if( ((data.restaurants_5_7_1_C  >= 0 ) && (data.restaurants_5_7_1_C  < 2)) || ((data.restaurants_5_7_1_C  > 2 ) && (data.restaurants_5_7_1_C  < 7)) || ((data.restaurants_5_7_1_C  > 7 ) && (data.restaurants_5_7_1_C  < 10)) ){ $scope.restaurants_5_7_1_C_cm = data.restaurants_5_7_1_C; $scope.restaurants_5_7_1_C = false; $scope.restaurants_5_7_1_C_b = false; $scope.restaurants_5_7_1_C_c = false; $scope.restaurants_5_7_1_C = ''; }else{ $scope.restaurants_5_7_1_C = ''; $scope.restaurants_5_7_1_C_cm = ''; $scope.restaurants_5_7_1_C = false; $scope.restaurants_5_7_1_C_b = false; $scope.restaurants_5_7_1_C_c = false;}
				$scope.restaurants_5_8_1_text = data.restaurants_5_8_1_text;
				if(data.restaurants_5_8_1_A == 4){ $scope.restaurants_5_8_1_A = data.restaurants_5_8_1_A; $scope.restaurants_5_8_1_A = true; $scope.restaurants_5_8_1_A_b = false; $scope.restaurants_5_8_1_A_c = false; $scope.restaurants_5_8_1_A_cm = ''; } else if(data.restaurants_5_8_1_A  == 7){ $scope.restaurants_5_8_1_A = data.restaurants_5_8_1_A; $scope.restaurants_5_8_1_A = false; $scope.restaurants_5_8_1_A_b = true; $scope.restaurants_5_8_1_A_c = false; $scope.restaurants_5_8_1_A_cm = ''; } else if(data.restaurants_5_8_1_A  == 10){ 
				$scope.restaurants_5_8_1_A = data.restaurants_5_8_1_A; $scope.restaurants_5_8_1_A = false; $scope.restaurants_5_8_1_A_b = false; $scope.restaurants_5_8_1_A_c = true; $scope.restaurants_5_8_1_A_cm = ''; } else if( ((data.restaurants_5_8_1_A  >= 0 ) && (data.restaurants_5_8_1_A  < 4)) || ((data.restaurants_5_8_1_A  > 4 ) && (data.restaurants_5_8_1_A  < 7)) || ((data.restaurants_5_8_1_A  > 7 ) && (data.restaurants_5_8_1_A  < 10)) ){ $scope.restaurants_5_8_1_A_cm = data.restaurants_5_8_1_A; $scope.restaurants_5_8_1_A = false; $scope.restaurants_5_8_1_A_b = false; $scope.restaurants_5_8_1_A_c = false; $scope.restaurants_5_8_1_A = ''; }else{ $scope.restaurants_5_8_1_A = ''; $scope.restaurants_5_8_1_A_cm = ''; $scope.restaurants_5_8_1_A = false; $scope.restaurants_5_8_1_A_b = false; $scope.restaurants_5_8_1_A_c = false;}
				if(data.restaurants_5_8_1_B == 4){ $scope.restaurants_5_8_1_B = data.restaurants_5_8_1_B; $scope.restaurants_5_8_1_B = true; $scope.restaurants_5_8_1_B_b = false; $scope.restaurants_5_8_1_B_c = false; $scope.restaurants_5_8_1_B_cm = ''; } else if(data.restaurants_5_8_1_B  == 7){ $scope.restaurants_5_8_1_B = data.restaurants_5_8_1_B; $scope.restaurants_5_8_1_B = false; $scope.restaurants_5_8_1_B_b = true; $scope.restaurants_5_8_1_B_c = false; $scope.restaurants_5_8_1_B_cm = ''; } else if(data.restaurants_5_8_1_B  == 10){ 
				$scope.restaurants_5_8_1_B = data.restaurants_5_8_1_B; $scope.restaurants_5_8_1_B = false; $scope.restaurants_5_8_1_B_b = false; $scope.restaurants_5_8_1_B_c = true; $scope.restaurants_5_8_1_B_cm = ''; } else if( ((data.restaurants_5_8_1_B  >= 0 ) && (data.restaurants_5_8_1_B  < 4)) || ((data.restaurants_5_8_1_B  > 4 ) && (data.restaurants_5_8_1_B  < 7)) || ((data.restaurants_5_8_1_B  > 7 ) && (data.restaurants_5_8_1_B  < 10)) ){ $scope.restaurants_5_8_1_B_cm = data.restaurants_5_8_1_B; $scope.restaurants_5_8_1_B = false; $scope.restaurants_5_8_1_B_b = false; $scope.restaurants_5_8_1_B_c = false; $scope.restaurants_5_8_1_B = ''; }else{ $scope.restaurants_5_8_1_B = ''; $scope.restaurants_5_8_1_B_cm = ''; $scope.restaurants_5_8_1_B = false; $scope.restaurants_5_8_1_B_b = false; $scope.restaurants_5_8_1_B_c = false;}
				$scope.bar_6_1_1_text = data.bar_6_1_1_text;
				if(data.bar_6_1_1_A == 1){ $scope.bar_6_1_1_A = data.bar_6_1_1_A; $scope.bar_6_1_1_A = true; $scope.bar_6_1_1_A_b = false; $scope.bar_6_1_1_A_c = false; $scope.bar_6_1_1_A_cm = ''; } else if(data.bar_6_1_1_A  == 3){ $scope.bar_6_1_1_A = data.bar_6_1_1_A; $scope.bar_6_1_1_A = false; $scope.bar_6_1_1_A_b = true; $scope.bar_6_1_1_A_c = false; $scope.bar_6_1_1_A_cm = ''; } else if(data.bar_6_1_1_A  == 5){ 
				$scope.bar_6_1_1_A = data.bar_6_1_1_A; $scope.bar_6_1_1_A = false; $scope.bar_6_1_1_A_b = false; $scope.bar_6_1_1_A_c = true; $scope.bar_6_1_1_A_cm = ''; } else if( ((data.bar_6_1_1_A  >= 0 ) && (data.bar_6_1_1_A  < 1)) || ((data.bar_6_1_1_A  > 1 ) && (data.bar_6_1_1_A  < 3)) || ((data.bar_6_1_1_A  > 3 ) && (data.bar_6_1_1_A  < 5)) ){ $scope.bar_6_1_1_A_cm = data.bar_6_1_1_A; $scope.bar_6_1_1_A = false; $scope.bar_6_1_1_A_b = false; $scope.bar_6_1_1_A_c = false; $scope.bar_6_1_1_A = ''; }else{ $scope.bar_6_1_1_A = ''; $scope.bar_6_1_1_A_cm = ''; $scope.bar_6_1_1_A = false; $scope.bar_6_1_1_A_b = false; $scope.bar_6_1_1_A_c = false;}
				if(data.bar_6_1_1_B_a == 1){ $scope.bar_6_1_1_B_a = data.bar_6_1_1_B_a; $scope.bar_6_1_1_B_a= true; $scope.bar_6_1_1_B_a_cm = ''; } else if((data.bar_6_1_1_B_a > 0 ) && (data.bar_6_1_1_B_a < 1)){ $scope.bar_6_1_1_B_a_cm = data.bar_6_1_1_B_a; $scope.bar_6_1_1_B_a= false; $scope.bar_6_1_1_B_a= ''; }else{ $scope.bar_6_1_1_B_a= ''; $scope.bar_6_1_1_B_a_cm = ''; $scope.bar_6_1_1_B_a= false; }
				if(data.bar_6_1_1_B_b == 1){ $scope.bar_6_1_1_B_b = data.bar_6_1_1_B_b; $scope.bar_6_1_1_B_b= true; $scope.bar_6_1_1_B_b_cm = ''; } else if((data.bar_6_1_1_B_b > 0 ) && (data.bar_6_1_1_B_b < 1)){ $scope.bar_6_1_1_B_b_cm = data.bar_6_1_1_B_b; $scope.bar_6_1_1_B_b= false; $scope.bar_6_1_1_B_b= ''; }else{ $scope.bar_6_1_1_B_b= ''; $scope.bar_6_1_1_B_b_cm = ''; $scope.bar_6_1_1_B_b= false; }
				if(data.bar_6_1_1_B_c == 1){ $scope.bar_6_1_1_B_c = data.bar_6_1_1_B_c; $scope.bar_6_1_1_B_c= true; $scope.bar_6_1_1_B_c_cm = ''; } else if((data.bar_6_1_1_B_c > 0 ) && (data.bar_6_1_1_B_c < 1)){ $scope.bar_6_1_1_B_c_cm = data.bar_6_1_1_B_c; $scope.bar_6_1_1_B_c= false; $scope.bar_6_1_1_B_c= ''; }else{ $scope.bar_6_1_1_B_c= ''; $scope.bar_6_1_1_B_c_cm = ''; $scope.bar_6_1_1_B_c= false; }
				if(data.bar_6_1_1_C == 0){ $scope.bar_6_1_1_C = data.bar_6_1_1_C; $scope.bar_6_1_1_C = true; $scope.bar_6_1_1_C_b = false; $scope.bar_6_1_1_C_c = false; $scope.bar_6_1_1_C_cm = ''; } else if(data.bar_6_1_1_C  == 3){ $scope.bar_6_1_1_C = data.bar_6_1_1_C; $scope.bar_6_1_1_C = false; $scope.bar_6_1_1_C_b = true; $scope.bar_6_1_1_C_c = false; $scope.bar_6_1_1_C_cm = ''; } else if(data.bar_6_1_1_C  == ){ $scope.bar_6_1_1_C = data.bar_6_1_1_C; $scope.bar_6_1_1_C = false; $scope.bar_6_1_1_C_b = false; $scope.bar_6_1_1_C_c = true; $scope.bar_6_1_1_C_cm = ''; }else if( ((data.bar_6_1_1_C  > 0 ) && (data.bar_6_1_1_C  < 3)) || ((data.bar_6_1_1_C  > 3 ) && (data.bar_6_1_1_C  < )) )
				{ $scope.bar_6_1_1_C_cm = data.bar_6_1_1_C; $scope.bar_6_1_1_C = false; $scope.bar_6_1_1_C_b = false;  $scope.bar_6_1_1_C_c = false; $scope.bar_6_1_1_C = ''; }else{ $scope.bar_6_1_1_C = ''; $scope.bar_6_1_1_C_cm = ''; $scope.bar_6_1_1_C = false; $scope.bar_6_1_1_C_b = false; $scope.bar_6_1_1_C_c = false; }
				if(data.bar_6_1_1_D_a == 1){ $scope.bar_6_1_1_D_a = data.bar_6_1_1_D_a; $scope.bar_6_1_1_D_a= true; $scope.bar_6_1_1_D_a_cm = ''; } else if((data.bar_6_1_1_D_a > 0 ) && (data.bar_6_1_1_D_a < 1)){ $scope.bar_6_1_1_D_a_cm = data.bar_6_1_1_D_a; $scope.bar_6_1_1_D_a= false; $scope.bar_6_1_1_D_a= ''; }else{ $scope.bar_6_1_1_D_a= ''; $scope.bar_6_1_1_D_a_cm = ''; $scope.bar_6_1_1_D_a= false; }
				if(data.bar_6_1_1_D_b == 1){ $scope.bar_6_1_1_D_b = data.bar_6_1_1_D_b; $scope.bar_6_1_1_D_b= true; $scope.bar_6_1_1_D_b_cm = ''; } else if((data.bar_6_1_1_D_b > 0 ) && (data.bar_6_1_1_D_b < 1)){ $scope.bar_6_1_1_D_b_cm = data.bar_6_1_1_D_b; $scope.bar_6_1_1_D_b= false; $scope.bar_6_1_1_D_b= ''; }else{ $scope.bar_6_1_1_D_b= ''; $scope.bar_6_1_1_D_b_cm = ''; $scope.bar_6_1_1_D_b= false; }
				if(data.bar_6_1_1_D_c == 2){ $scope.bar_6_1_1_D_c = data.bar_6_1_1_D_c; $scope.bar_6_1_1_D_c= true; $scope.bar_6_1_1_D_c_cm = ''; } else if((data.bar_6_1_1_D_c > 0 ) && (data.bar_6_1_1_D_c < 2)){ $scope.bar_6_1_1_D_c_cm = data.bar_6_1_1_D_c; $scope.bar_6_1_1_D_c= false; $scope.bar_6_1_1_D_c= ''; }else{ $scope.bar_6_1_1_D_c= ''; $scope.bar_6_1_1_D_c_cm = ''; $scope.bar_6_1_1_D_c= false; }
				if(data.bar_6_1_1_E == 1){ $scope.bar_6_1_1_E = data.bar_6_1_1_E; $scope.bar_6_1_1_E = true; $scope.bar_6_1_1_E_b = false; $scope.bar_6_1_1_E_c = false; $scope.bar_6_1_1_E_cm = ''; } else if(data.bar_6_1_1_E  == 3){ $scope.bar_6_1_1_E = data.bar_6_1_1_E; $scope.bar_6_1_1_E = false; $scope.bar_6_1_1_E_b = true; $scope.bar_6_1_1_E_c = false; $scope.bar_6_1_1_E_cm = ''; } else if(data.bar_6_1_1_E  == 5){ 
				$scope.bar_6_1_1_E = data.bar_6_1_1_E; $scope.bar_6_1_1_E = false; $scope.bar_6_1_1_E_b = false; $scope.bar_6_1_1_E_c = true; $scope.bar_6_1_1_E_cm = ''; } else if( ((data.bar_6_1_1_E  >= 0 ) && (data.bar_6_1_1_E  < 1)) || ((data.bar_6_1_1_E  > 1 ) && (data.bar_6_1_1_E  < 3)) || ((data.bar_6_1_1_E  > 3 ) && (data.bar_6_1_1_E  < 5)) ){ $scope.bar_6_1_1_E_cm = data.bar_6_1_1_E; $scope.bar_6_1_1_E = false; $scope.bar_6_1_1_E_b = false; $scope.bar_6_1_1_E_c = false; $scope.bar_6_1_1_E = ''; }else{ $scope.bar_6_1_1_E = ''; $scope.bar_6_1_1_E_cm = ''; $scope.bar_6_1_1_E = false; $scope.bar_6_1_1_E_b = false; $scope.bar_6_1_1_E_c = false;}
				if(data.bar_6_1_1_F == 1){ $scope.bar_6_1_1_F = data.bar_6_1_1_F; $scope.bar_6_1_1_F = true; $scope.bar_6_1_1_F_b = false; $scope.bar_6_1_1_F_c = false; $scope.bar_6_1_1_F_cm = ''; } else if(data.bar_6_1_1_F  == 3){ $scope.bar_6_1_1_F = data.bar_6_1_1_F; $scope.bar_6_1_1_F = false; $scope.bar_6_1_1_F_b = true; $scope.bar_6_1_1_F_c = false; $scope.bar_6_1_1_F_cm = ''; } else if(data.bar_6_1_1_F  == 5){ 
				$scope.bar_6_1_1_F = data.bar_6_1_1_F; $scope.bar_6_1_1_F = false; $scope.bar_6_1_1_F_b = false; $scope.bar_6_1_1_F_c = true; $scope.bar_6_1_1_F_cm = ''; } else if( ((data.bar_6_1_1_F  >= 0 ) && (data.bar_6_1_1_F  < 1)) || ((data.bar_6_1_1_F  > 1 ) && (data.bar_6_1_1_F  < 3)) || ((data.bar_6_1_1_F  > 3 ) && (data.bar_6_1_1_F  < 5)) ){ $scope.bar_6_1_1_F_cm = data.bar_6_1_1_F; $scope.bar_6_1_1_F = false; $scope.bar_6_1_1_F_b = false; $scope.bar_6_1_1_F_c = false; $scope.bar_6_1_1_F = ''; }else{ $scope.bar_6_1_1_F = ''; $scope.bar_6_1_1_F_cm = ''; $scope.bar_6_1_1_F = false; $scope.bar_6_1_1_F_b = false; $scope.bar_6_1_1_F_c = false;}
				if(data.bar_6_1_1_G == 1){ $scope.bar_6_1_1_G = data.bar_6_1_1_G; $scope.bar_6_1_1_G = true; $scope.bar_6_1_1_G_b = false; $scope.bar_6_1_1_G_c = false; $scope.bar_6_1_1_G_cm = ''; } else if(data.bar_6_1_1_G  == 3){ $scope.bar_6_1_1_G = data.bar_6_1_1_G; $scope.bar_6_1_1_G = false; $scope.bar_6_1_1_G_b = true; $scope.bar_6_1_1_G_c = false; $scope.bar_6_1_1_G_cm = ''; } else if(data.bar_6_1_1_G  == 5){ 
				$scope.bar_6_1_1_G = data.bar_6_1_1_G; $scope.bar_6_1_1_G = false; $scope.bar_6_1_1_G_b = false; $scope.bar_6_1_1_G_c = true; $scope.bar_6_1_1_G_cm = ''; } else if( ((data.bar_6_1_1_G  >= 0 ) && (data.bar_6_1_1_G  < 1)) || ((data.bar_6_1_1_G  > 1 ) && (data.bar_6_1_1_G  < 3)) || ((data.bar_6_1_1_G  > 3 ) && (data.bar_6_1_1_G  < 5)) ){ $scope.bar_6_1_1_G_cm = data.bar_6_1_1_G; $scope.bar_6_1_1_G = false; $scope.bar_6_1_1_G_b = false; $scope.bar_6_1_1_G_c = false; $scope.bar_6_1_1_G = ''; }else{ $scope.bar_6_1_1_G = ''; $scope.bar_6_1_1_G_cm = ''; $scope.bar_6_1_1_G = false; $scope.bar_6_1_1_G_b = false; $scope.bar_6_1_1_G_c = false;}
				$scope.bar_6_2_1_text = data.bar_6_2_1_text;
				if(data.bar_6_2_1_A == 1){ $scope.bar_6_2_1_A = data.bar_6_2_1_A; $scope.bar_6_2_1_A = true; $scope.bar_6_2_1_A_b = false; $scope.bar_6_2_1_A_c = false; $scope.bar_6_2_1_A_cm = ''; } else if(data.bar_6_2_1_A  == 2){ $scope.bar_6_2_1_A = data.bar_6_2_1_A; $scope.bar_6_2_1_A = false; $scope.bar_6_2_1_A_b = true; $scope.bar_6_2_1_A_c = false; $scope.bar_6_2_1_A_cm = ''; } else if(data.bar_6_2_1_A  == 3){ 
				$scope.bar_6_2_1_A = data.bar_6_2_1_A; $scope.bar_6_2_1_A = false; $scope.bar_6_2_1_A_b = false; $scope.bar_6_2_1_A_c = true; $scope.bar_6_2_1_A_cm = ''; } else if( ((data.bar_6_2_1_A  >= 0 ) && (data.bar_6_2_1_A  < 1)) || ((data.bar_6_2_1_A  > 1 ) && (data.bar_6_2_1_A  < 2)) || ((data.bar_6_2_1_A  > 2 ) && (data.bar_6_2_1_A  < 3)) ){ $scope.bar_6_2_1_A_cm = data.bar_6_2_1_A; $scope.bar_6_2_1_A = false; $scope.bar_6_2_1_A_b = false; $scope.bar_6_2_1_A_c = false; $scope.bar_6_2_1_A = ''; }else{ $scope.bar_6_2_1_A = ''; $scope.bar_6_2_1_A_cm = ''; $scope.bar_6_2_1_A = false; $scope.bar_6_2_1_A_b = false; $scope.bar_6_2_1_A_c = false;}
				if(data.bar_6_2_1_B  == 1){ $scope.bar_6_2_1_B  = data.bar_6_2_1_B ; $scope.bar_6_2_1_B = true; $scope.bar_6_2_1_B_b = false; $scope.bar_6_2_1_B_cm = ''; } else if(data.bar_6_2_1_B  == 2){ $scope.bar_6_2_1_B  = data.bar_6_2_1_B ; $scope.bar_6_2_1_B = false; $scope.bar_6_2_1_B_b = true; $scope.bar_6_2_1_B_cm = ''; }else if( ((data.bar_6_2_1_B  > 0 ) && (data.bar_6_2_1_B  < 1)) || ((data.bar_6_2_1_B  > 1 ) && (data.bar_6_2_1_B  < 2)))
				{ $scope.bar_6_2_1_B_cm = data.bar_6_2_1_B ; $scope.bar_6_2_1_B = false; $scope.bar_6_2_1_B_b = false; $scope.bar_6_2_1_B  = ''; }else{ $scope.bar_6_2_1_B  = ''; $scope.bar_6_2_1_B_cm = ''; $scope.bar_6_2_1_B = false; $scope.bar_6_2_1_B_b = false; }
				if(data.bar_6_2_1_C == 1){ $scope.bar_6_2_1_C = data.bar_6_2_1_C; $scope.bar_6_2_1_C = true; $scope.bar_6_2_1_C_b = false; $scope.bar_6_2_1_C_c = false; $scope.bar_6_2_1_C_cm = ''; } else if(data.bar_6_2_1_C  == 2){ $scope.bar_6_2_1_C = data.bar_6_2_1_C; $scope.bar_6_2_1_C = false; $scope.bar_6_2_1_C_b = true; $scope.bar_6_2_1_C_c = false; $scope.bar_6_2_1_C_cm = ''; } else if(data.bar_6_2_1_C  == 3){ 
				$scope.bar_6_2_1_C = data.bar_6_2_1_C; $scope.bar_6_2_1_C = false; $scope.bar_6_2_1_C_b = false; $scope.bar_6_2_1_C_c = true; $scope.bar_6_2_1_C_cm = ''; } else if( ((data.bar_6_2_1_C  >= 0 ) && (data.bar_6_2_1_C  < 1)) || ((data.bar_6_2_1_C  > 1 ) && (data.bar_6_2_1_C  < 2)) || ((data.bar_6_2_1_C  > 2 ) && (data.bar_6_2_1_C  < 3)) ){ $scope.bar_6_2_1_C_cm = data.bar_6_2_1_C; $scope.bar_6_2_1_C = false; $scope.bar_6_2_1_C_b = false; $scope.bar_6_2_1_C_c = false; $scope.bar_6_2_1_C = ''; }else{ $scope.bar_6_2_1_C = ''; $scope.bar_6_2_1_C_cm = ''; $scope.bar_6_2_1_C = false; $scope.bar_6_2_1_C_b = false; $scope.bar_6_2_1_C_c = false;}
				if(data.bar_6_2_1_D == 1){ $scope.bar_6_2_1_D = data.bar_6_2_1_D; $scope.bar_6_2_1_D = true; $scope.bar_6_2_1_D_b = false; $scope.bar_6_2_1_D_c = false; $scope.bar_6_2_1_D_cm = ''; } else if(data.bar_6_2_1_D  == 2){ $scope.bar_6_2_1_D = data.bar_6_2_1_D; $scope.bar_6_2_1_D = false; $scope.bar_6_2_1_D_b = true; $scope.bar_6_2_1_D_c = false; $scope.bar_6_2_1_D_cm = ''; } else if(data.bar_6_2_1_D  == 3){ 
				$scope.bar_6_2_1_D = data.bar_6_2_1_D; $scope.bar_6_2_1_D = false; $scope.bar_6_2_1_D_b = false; $scope.bar_6_2_1_D_c = true; $scope.bar_6_2_1_D_cm = ''; } else if( ((data.bar_6_2_1_D  >= 0 ) && (data.bar_6_2_1_D  < 1)) || ((data.bar_6_2_1_D  > 1 ) && (data.bar_6_2_1_D  < 2)) || ((data.bar_6_2_1_D  > 2 ) && (data.bar_6_2_1_D  < 3)) ){ $scope.bar_6_2_1_D_cm = data.bar_6_2_1_D; $scope.bar_6_2_1_D = false; $scope.bar_6_2_1_D_b = false; $scope.bar_6_2_1_D_c = false; $scope.bar_6_2_1_D = ''; }else{ $scope.bar_6_2_1_D = ''; $scope.bar_6_2_1_D_cm = ''; $scope.bar_6_2_1_D = false; $scope.bar_6_2_1_D_b = false; $scope.bar_6_2_1_D_c = false;}
				if(data.bar_6_2_1_E == 1){ $scope.bar_6_2_1_E = data.bar_6_2_1_E; $scope.bar_6_2_1_E = true; $scope.bar_6_2_1_E_b = false; $scope.bar_6_2_1_E_c = false; $scope.bar_6_2_1_E_cm = ''; } else if(data.bar_6_2_1_E  == 2){ $scope.bar_6_2_1_E = data.bar_6_2_1_E; $scope.bar_6_2_1_E = false; $scope.bar_6_2_1_E_b = true; $scope.bar_6_2_1_E_c = false; $scope.bar_6_2_1_E_cm = ''; } else if(data.bar_6_2_1_E  == 4){ 
				$scope.bar_6_2_1_E = data.bar_6_2_1_E; $scope.bar_6_2_1_E = false; $scope.bar_6_2_1_E_b = false; $scope.bar_6_2_1_E_c = true; $scope.bar_6_2_1_E_cm = ''; } else if( ((data.bar_6_2_1_E  >= 0 ) && (data.bar_6_2_1_E  < 1)) || ((data.bar_6_2_1_E  > 1 ) && (data.bar_6_2_1_E  < 2)) || ((data.bar_6_2_1_E  > 2 ) && (data.bar_6_2_1_E  < 4)) ){ $scope.bar_6_2_1_E_cm = data.bar_6_2_1_E; $scope.bar_6_2_1_E = false; $scope.bar_6_2_1_E_b = false; $scope.bar_6_2_1_E_c = false; $scope.bar_6_2_1_E = ''; }else{ $scope.bar_6_2_1_E = ''; $scope.bar_6_2_1_E_cm = ''; $scope.bar_6_2_1_E = false; $scope.bar_6_2_1_E_b = false; $scope.bar_6_2_1_E_c = false;}
				if(data.bar_6_2_1_F == 1){ $scope.bar_6_2_1_F = data.bar_6_2_1_F; $scope.bar_6_2_1_F = true; $scope.bar_6_2_1_F_b = false; $scope.bar_6_2_1_F_c = false; $scope.bar_6_2_1_F_cm = ''; } else if(data.bar_6_2_1_F  == 2){ $scope.bar_6_2_1_F = data.bar_6_2_1_F; $scope.bar_6_2_1_F = false; $scope.bar_6_2_1_F_b = true; $scope.bar_6_2_1_F_c = false; $scope.bar_6_2_1_F_cm = ''; } else if(data.bar_6_2_1_F  == 3){ 
				$scope.bar_6_2_1_F = data.bar_6_2_1_F; $scope.bar_6_2_1_F = false; $scope.bar_6_2_1_F_b = false; $scope.bar_6_2_1_F_c = true; $scope.bar_6_2_1_F_cm = ''; } else if( ((data.bar_6_2_1_F  >= 0 ) && (data.bar_6_2_1_F  < 1)) || ((data.bar_6_2_1_F  > 1 ) && (data.bar_6_2_1_F  < 2)) || ((data.bar_6_2_1_F  > 2 ) && (data.bar_6_2_1_F  < 3)) ){ $scope.bar_6_2_1_F_cm = data.bar_6_2_1_F; $scope.bar_6_2_1_F = false; $scope.bar_6_2_1_F_b = false; $scope.bar_6_2_1_F_c = false; $scope.bar_6_2_1_F = ''; }else{ $scope.bar_6_2_1_F = ''; $scope.bar_6_2_1_F_cm = ''; $scope.bar_6_2_1_F = false; $scope.bar_6_2_1_F_b = false; $scope.bar_6_2_1_F_c = false;}
				if(data.bar_6_2_1_G == 0){ $scope.bar_6_2_1_G = data.bar_6_2_1_G; $scope.bar_6_2_1_G = true; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = false; $scope.bar_6_2_1_G_cm = ''; } else if(data.bar_6_2_1_G  == 1){ $scope.bar_6_2_1_G = data.bar_6_2_1_G; $scope.bar_6_2_1_G = false; $scope.bar_6_2_1_G_b = true; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = false; $scope.bar_6_2_1_G_cm = ''; } else if(data.bar_6_2_1_G  == 2){ $scope.bar_6_2_1_G = data.bar_6_2_1_G; $scope.bar_6_2_1_G = false; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = true; $scope.bar_6_2_1_G_d = false; $scope.bar_6_2_1_G_cm = ''; }else if(data.bar_6_2_1_G  == 3){ $scope.bar_6_2_1_G = data.bar_6_2_1_G; $scope.bar_6_2_1_G = false; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = true; $scope.bar_6_2_1_G_cm = ''; } else if( ((data.bar_6_2_1_G  > 0 ) && (data.bar_6_2_1_G  < 1)) || ((data.bar_6_2_1_G  > 1 ) && (data.bar_6_2_1_G  < 2)) || ((data.bar_6_2_1_G  > 2 ) && (data.bar_6_2_1_G  < 3)) )
				{ $scope.bar_6_2_1_G_cm = data.bar_6_2_1_G; $scope.bar_6_2_1_G = false; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = false; $scope.bar_6_2_1_G = ''; }else{ $scope.bar_6_2_1_G = ''; $scope.bar_6_2_1_G_cm = ''; $scope.bar_6_2_1_G = false; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = false;}
				if(data.bar_6_2_1_H == 1){ $scope.bar_6_2_1_H = data.bar_6_2_1_H; $scope.bar_6_2_1_H = true; $scope.bar_6_2_1_H_b = false; $scope.bar_6_2_1_H_c = false; $scope.bar_6_2_1_H_cm = ''; } else if(data.bar_6_2_1_H  == 2){ $scope.bar_6_2_1_H = data.bar_6_2_1_H; $scope.bar_6_2_1_H = false; $scope.bar_6_2_1_H_b = true; $scope.bar_6_2_1_H_c = false; $scope.bar_6_2_1_H_cm = ''; } else if(data.bar_6_2_1_H  == 3){ 
				$scope.bar_6_2_1_H = data.bar_6_2_1_H; $scope.bar_6_2_1_H = false; $scope.bar_6_2_1_H_b = false; $scope.bar_6_2_1_H_c = true; $scope.bar_6_2_1_H_cm = ''; } else if( ((data.bar_6_2_1_H  >= 0 ) && (data.bar_6_2_1_H  < 1)) || ((data.bar_6_2_1_H  > 1 ) && (data.bar_6_2_1_H  < 2)) || ((data.bar_6_2_1_H  > 2 ) && (data.bar_6_2_1_H  < 3)) ){ $scope.bar_6_2_1_H_cm = data.bar_6_2_1_H; $scope.bar_6_2_1_H = false; $scope.bar_6_2_1_H_b = false; $scope.bar_6_2_1_H_c = false; $scope.bar_6_2_1_H = ''; }else{ $scope.bar_6_2_1_H = ''; $scope.bar_6_2_1_H_cm = ''; $scope.bar_6_2_1_H = false; $scope.bar_6_2_1_H_b = false; $scope.bar_6_2_1_H_c = false;}
				if(data.bar_6_2_1_I == 0){ $scope.bar_6_2_1_I = data.bar_6_2_1_I; $scope.bar_6_2_1_I = true; $scope.bar_6_2_1_I_b = false; $scope.bar_6_2_1_I_c = false; $scope.bar_6_2_1_I_cm = ''; } else if(data.bar_6_2_1_I  == 1){ $scope.bar_6_2_1_I = data.bar_6_2_1_I; $scope.bar_6_2_1_I = false; $scope.bar_6_2_1_I_b = true; $scope.bar_6_2_1_I_c = false; $scope.bar_6_2_1_I_cm = ''; } else if(data.bar_6_2_1_I  == 3){ $scope.bar_6_2_1_I = data.bar_6_2_1_I; $scope.bar_6_2_1_I = false; $scope.bar_6_2_1_I_b = false; $scope.bar_6_2_1_I_c = true; $scope.bar_6_2_1_I_cm = ''; }else if( ((data.bar_6_2_1_I  > 0 ) && (data.bar_6_2_1_I  < 1)) || ((data.bar_6_2_1_I  > 1 ) && (data.bar_6_2_1_I  < 3)) )
				{ $scope.bar_6_2_1_I_cm = data.bar_6_2_1_I; $scope.bar_6_2_1_I = false; $scope.bar_6_2_1_I_b = false;  $scope.bar_6_2_1_I_c = false; $scope.bar_6_2_1_I = ''; }else{ $scope.bar_6_2_1_I = ''; $scope.bar_6_2_1_I_cm = ''; $scope.bar_6_2_1_I = false; $scope.bar_6_2_1_I_b = false; $scope.bar_6_2_1_I_c = false; }
				if(data.bar_6_2_1_J == 0){ $scope.bar_6_2_1_J = data.bar_6_2_1_J; $scope.bar_6_2_1_J = true; $scope.bar_6_2_1_J_b = false; $scope.bar_6_2_1_J_c = false; $scope.bar_6_2_1_J_cm = ''; } else if(data.bar_6_2_1_J  == 1){ $scope.bar_6_2_1_J = data.bar_6_2_1_J; $scope.bar_6_2_1_J = false; $scope.bar_6_2_1_J_b = true; $scope.bar_6_2_1_J_c = false; $scope.bar_6_2_1_J_cm = ''; } else if(data.bar_6_2_1_J  == 3){ $scope.bar_6_2_1_J = data.bar_6_2_1_J; $scope.bar_6_2_1_J = false; $scope.bar_6_2_1_J_b = false; $scope.bar_6_2_1_J_c = true; $scope.bar_6_2_1_J_cm = ''; }else if( ((data.bar_6_2_1_J  > 0 ) && (data.bar_6_2_1_J  < 1)) || ((data.bar_6_2_1_J  > 1 ) && (data.bar_6_2_1_J  < 3)) )
				{ $scope.bar_6_2_1_J_cm = data.bar_6_2_1_J; $scope.bar_6_2_1_J = false; $scope.bar_6_2_1_J_b = false;  $scope.bar_6_2_1_J_c = false; $scope.bar_6_2_1_J = ''; }else{ $scope.bar_6_2_1_J = ''; $scope.bar_6_2_1_J_cm = ''; $scope.bar_6_2_1_J = false; $scope.bar_6_2_1_J_b = false; $scope.bar_6_2_1_J_c = false; }
				$scope.bar_6_3_1_text = data.bar_6_3_1_text;
				if(data.bar_6_3_1_A == 0){ $scope.bar_6_3_1_A = data.bar_6_3_1_A; $scope.bar_6_3_1_A = true; $scope.bar_6_3_1_A_b = false; $scope.bar_6_3_1_A_c = false; $scope.bar_6_3_1_A_cm = ''; } else if(data.bar_6_3_1_A  == 5){ $scope.bar_6_3_1_A = data.bar_6_3_1_A; $scope.bar_6_3_1_A = false; $scope.bar_6_3_1_A_b = true; $scope.bar_6_3_1_A_c = false; $scope.bar_6_3_1_A_cm = ''; } else if(data.bar_6_3_1_A  == ){ $scope.bar_6_3_1_A = data.bar_6_3_1_A; $scope.bar_6_3_1_A = false; $scope.bar_6_3_1_A_b = false; $scope.bar_6_3_1_A_c = true; $scope.bar_6_3_1_A_cm = ''; }else if( ((data.bar_6_3_1_A  > 0 ) && (data.bar_6_3_1_A  < 5)) || ((data.bar_6_3_1_A  > 5 ) && (data.bar_6_3_1_A  < )) )
				{ $scope.bar_6_3_1_A_cm = data.bar_6_3_1_A; $scope.bar_6_3_1_A = false; $scope.bar_6_3_1_A_b = false;  $scope.bar_6_3_1_A_c = false; $scope.bar_6_3_1_A = ''; }else{ $scope.bar_6_3_1_A = ''; $scope.bar_6_3_1_A_cm = ''; $scope.bar_6_3_1_A = false; $scope.bar_6_3_1_A_b = false; $scope.bar_6_3_1_A_c = false; }
				if(data.bar_6_3_1_B  == 3){ $scope.bar_6_3_1_B  = data.bar_6_3_1_B ; $scope.bar_6_3_1_B = true; $scope.bar_6_3_1_B_b = false; $scope.bar_6_3_1_B_cm = ''; } else if(data.bar_6_3_1_B  == 5){ $scope.bar_6_3_1_B  = data.bar_6_3_1_B ; $scope.bar_6_3_1_B = false; $scope.bar_6_3_1_B_b = true; $scope.bar_6_3_1_B_cm = ''; }else if( ((data.bar_6_3_1_B  > 0 ) && (data.bar_6_3_1_B  < 3)) || ((data.bar_6_3_1_B  > 3 ) && (data.bar_6_3_1_B  < 5)))
				{ $scope.bar_6_3_1_B_cm = data.bar_6_3_1_B ; $scope.bar_6_3_1_B = false; $scope.bar_6_3_1_B_b = false; $scope.bar_6_3_1_B  = ''; }else{ $scope.bar_6_3_1_B  = ''; $scope.bar_6_3_1_B_cm = ''; $scope.bar_6_3_1_B = false; $scope.bar_6_3_1_B_b = false; }
				if(data.bar_6_3_1_C == 5){ $scope.bar_6_3_1_C = data.bar_6_3_1_C; $scope.bar_6_3_1_C = true; $scope.bar_6_3_1_C_b = false; $scope.bar_6_3_1_C_c = false; $scope.bar_6_3_1_C_cm = ''; } else if(data.bar_6_3_1_C  == 8){ $scope.bar_6_3_1_C = data.bar_6_3_1_C; $scope.bar_6_3_1_C = false; $scope.bar_6_3_1_C_b = true; $scope.bar_6_3_1_C_c = false; $scope.bar_6_3_1_C_cm = ''; } else if(data.bar_6_3_1_C  == 10){ 
				$scope.bar_6_3_1_C = data.bar_6_3_1_C; $scope.bar_6_3_1_C = false; $scope.bar_6_3_1_C_b = false; $scope.bar_6_3_1_C_c = true; $scope.bar_6_3_1_C_cm = ''; } else if( ((data.bar_6_3_1_C  >= 0 ) && (data.bar_6_3_1_C  < 5)) || ((data.bar_6_3_1_C  > 5 ) && (data.bar_6_3_1_C  < 8)) || ((data.bar_6_3_1_C  > 8 ) && (data.bar_6_3_1_C  < 10)) ){ $scope.bar_6_3_1_C_cm = data.bar_6_3_1_C; $scope.bar_6_3_1_C = false; $scope.bar_6_3_1_C_b = false; $scope.bar_6_3_1_C_c = false; $scope.bar_6_3_1_C = ''; }else{ $scope.bar_6_3_1_C = ''; $scope.bar_6_3_1_C_cm = ''; $scope.bar_6_3_1_C = false; $scope.bar_6_3_1_C_b = false; $scope.bar_6_3_1_C_c = false;}
				if(data.bar_6_3_1_D == 5){ $scope.bar_6_3_1_D = data.bar_6_3_1_D; $scope.bar_6_3_1_D = true; $scope.bar_6_3_1_D_b = false; $scope.bar_6_3_1_D_c = false; $scope.bar_6_3_1_D_cm = ''; } else if(data.bar_6_3_1_D  == 7){ $scope.bar_6_3_1_D = data.bar_6_3_1_D; $scope.bar_6_3_1_D = false; $scope.bar_6_3_1_D_b = true; $scope.bar_6_3_1_D_c = false; $scope.bar_6_3_1_D_cm = ''; } else if(data.bar_6_3_1_D  == 10){ 
				$scope.bar_6_3_1_D = data.bar_6_3_1_D; $scope.bar_6_3_1_D = false; $scope.bar_6_3_1_D_b = false; $scope.bar_6_3_1_D_c = true; $scope.bar_6_3_1_D_cm = ''; } else if( ((data.bar_6_3_1_D  >= 0 ) && (data.bar_6_3_1_D  < 5)) || ((data.bar_6_3_1_D  > 5 ) && (data.bar_6_3_1_D  < 7)) || ((data.bar_6_3_1_D  > 7 ) && (data.bar_6_3_1_D  < 10)) ){ $scope.bar_6_3_1_D_cm = data.bar_6_3_1_D; $scope.bar_6_3_1_D = false; $scope.bar_6_3_1_D_b = false; $scope.bar_6_3_1_D_c = false; $scope.bar_6_3_1_D = ''; }else{ $scope.bar_6_3_1_D = ''; $scope.bar_6_3_1_D_cm = ''; $scope.bar_6_3_1_D = false; $scope.bar_6_3_1_D_b = false; $scope.bar_6_3_1_D_c = false;}
				$scope.bar_6_4_1_text = data.bar_6_4_1_text;
				if(data.bar_6_4_1_A  == 1){ $scope.bar_6_4_1_A  = data.bar_6_4_1_A ; $scope.bar_6_4_1_A = true; $scope.bar_6_4_1_A_b = false; $scope.bar_6_4_1_A_cm = ''; } else if(data.bar_6_4_1_A  == 3){ $scope.bar_6_4_1_A  = data.bar_6_4_1_A ; $scope.bar_6_4_1_A = false; $scope.bar_6_4_1_A_b = true; $scope.bar_6_4_1_A_cm = ''; }else if( ((data.bar_6_4_1_A  > 0 ) && (data.bar_6_4_1_A  < 1)) || ((data.bar_6_4_1_A  > 1 ) && (data.bar_6_4_1_A  < 3)))
				{ $scope.bar_6_4_1_A_cm = data.bar_6_4_1_A ; $scope.bar_6_4_1_A = false; $scope.bar_6_4_1_A_b = false; $scope.bar_6_4_1_A  = ''; }else{ $scope.bar_6_4_1_A  = ''; $scope.bar_6_4_1_A_cm = ''; $scope.bar_6_4_1_A = false; $scope.bar_6_4_1_A_b = false; }
				if(data.bar_6_4_1_B == 1){ $scope.bar_6_4_1_B = data.bar_6_4_1_B; $scope.bar_6_4_1_B = true; $scope.bar_6_4_1_B_b = false; $scope.bar_6_4_1_B_c = false; $scope.bar_6_4_1_B_cm = ''; } else if(data.bar_6_4_1_B  == 3){ $scope.bar_6_4_1_B = data.bar_6_4_1_B; $scope.bar_6_4_1_B = false; $scope.bar_6_4_1_B_b = true; $scope.bar_6_4_1_B_c = false; $scope.bar_6_4_1_B_cm = ''; } else if(data.bar_6_4_1_B  == 5){ 
				$scope.bar_6_4_1_B = data.bar_6_4_1_B; $scope.bar_6_4_1_B = false; $scope.bar_6_4_1_B_b = false; $scope.bar_6_4_1_B_c = true; $scope.bar_6_4_1_B_cm = ''; } else if( ((data.bar_6_4_1_B  >= 0 ) && (data.bar_6_4_1_B  < 1)) || ((data.bar_6_4_1_B  > 1 ) && (data.bar_6_4_1_B  < 3)) || ((data.bar_6_4_1_B  > 3 ) && (data.bar_6_4_1_B  < 5)) ){ $scope.bar_6_4_1_B_cm = data.bar_6_4_1_B; $scope.bar_6_4_1_B = false; $scope.bar_6_4_1_B_b = false; $scope.bar_6_4_1_B_c = false; $scope.bar_6_4_1_B = ''; }else{ $scope.bar_6_4_1_B = ''; $scope.bar_6_4_1_B_cm = ''; $scope.bar_6_4_1_B = false; $scope.bar_6_4_1_B_b = false; $scope.bar_6_4_1_B_c = false;}
				if(data.bar_6_4_1_C == 2){ $scope.bar_6_4_1_C = data.bar_6_4_1_C; $scope.bar_6_4_1_C = true; $scope.bar_6_4_1_C_b = false; $scope.bar_6_4_1_C_c = false; $scope.bar_6_4_1_C_cm = ''; } else if(data.bar_6_4_1_C  == 3){ $scope.bar_6_4_1_C = data.bar_6_4_1_C; $scope.bar_6_4_1_C = false; $scope.bar_6_4_1_C_b = true; $scope.bar_6_4_1_C_c = false; $scope.bar_6_4_1_C_cm = ''; } else if(data.bar_6_4_1_C  == 5){ 
				$scope.bar_6_4_1_C = data.bar_6_4_1_C; $scope.bar_6_4_1_C = false; $scope.bar_6_4_1_C_b = false; $scope.bar_6_4_1_C_c = true; $scope.bar_6_4_1_C_cm = ''; } else if( ((data.bar_6_4_1_C  >= 0 ) && (data.bar_6_4_1_C  < 2)) || ((data.bar_6_4_1_C  > 2 ) && (data.bar_6_4_1_C  < 3)) || ((data.bar_6_4_1_C  > 3 ) && (data.bar_6_4_1_C  < 5)) ){ $scope.bar_6_4_1_C_cm = data.bar_6_4_1_C; $scope.bar_6_4_1_C = false; $scope.bar_6_4_1_C_b = false; $scope.bar_6_4_1_C_c = false; $scope.bar_6_4_1_C = ''; }else{ $scope.bar_6_4_1_C = ''; $scope.bar_6_4_1_C_cm = ''; $scope.bar_6_4_1_C = false; $scope.bar_6_4_1_C_b = false; $scope.bar_6_4_1_C_c = false;}
				if(data.bar_6_4_1_D == 2){ $scope.bar_6_4_1_D = data.bar_6_4_1_D; $scope.bar_6_4_1_D = true; $scope.bar_6_4_1_D_b = false; $scope.bar_6_4_1_D_c = false; $scope.bar_6_4_1_D_cm = ''; } else if(data.bar_6_4_1_D  == 3){ $scope.bar_6_4_1_D = data.bar_6_4_1_D; $scope.bar_6_4_1_D = false; $scope.bar_6_4_1_D_b = true; $scope.bar_6_4_1_D_c = false; $scope.bar_6_4_1_D_cm = ''; } else if(data.bar_6_4_1_D  == 5){ 
				$scope.bar_6_4_1_D = data.bar_6_4_1_D; $scope.bar_6_4_1_D = false; $scope.bar_6_4_1_D_b = false; $scope.bar_6_4_1_D_c = true; $scope.bar_6_4_1_D_cm = ''; } else if( ((data.bar_6_4_1_D  >= 0 ) && (data.bar_6_4_1_D  < 2)) || ((data.bar_6_4_1_D  > 2 ) && (data.bar_6_4_1_D  < 3)) || ((data.bar_6_4_1_D  > 3 ) && (data.bar_6_4_1_D  < 5)) ){ $scope.bar_6_4_1_D_cm = data.bar_6_4_1_D; $scope.bar_6_4_1_D = false; $scope.bar_6_4_1_D_b = false; $scope.bar_6_4_1_D_c = false; $scope.bar_6_4_1_D = ''; }else{ $scope.bar_6_4_1_D = ''; $scope.bar_6_4_1_D_cm = ''; $scope.bar_6_4_1_D = false; $scope.bar_6_4_1_D_b = false; $scope.bar_6_4_1_D_c = false;}
				if(data.bar_6_4_1_E_a == 1){ $scope.bar_6_4_1_E_a = data.bar_6_4_1_E_a; $scope.bar_6_4_1_E_a= true; $scope.bar_6_4_1_E_a_cm = ''; } else if((data.bar_6_4_1_E_a > 0 ) && (data.bar_6_4_1_E_a < 1)){ $scope.bar_6_4_1_E_a_cm = data.bar_6_4_1_E_a; $scope.bar_6_4_1_E_a= false; $scope.bar_6_4_1_E_a= ''; }else{ $scope.bar_6_4_1_E_a= ''; $scope.bar_6_4_1_E_a_cm = ''; $scope.bar_6_4_1_E_a= false; }
				if(data.bar_6_4_1_E_b == 1){ $scope.bar_6_4_1_E_b = data.bar_6_4_1_E_b; $scope.bar_6_4_1_E_b= true; $scope.bar_6_4_1_E_b_cm = ''; } else if((data.bar_6_4_1_E_b > 0 ) && (data.bar_6_4_1_E_b < 1)){ $scope.bar_6_4_1_E_b_cm = data.bar_6_4_1_E_b; $scope.bar_6_4_1_E_b= false; $scope.bar_6_4_1_E_b= ''; }else{ $scope.bar_6_4_1_E_b= ''; $scope.bar_6_4_1_E_b_cm = ''; $scope.bar_6_4_1_E_b= false; }
				if(data.bar_6_4_1_E_c == 2){ $scope.bar_6_4_1_E_c = data.bar_6_4_1_E_c; $scope.bar_6_4_1_E_c= true; $scope.bar_6_4_1_E_c_cm = ''; } else if((data.bar_6_4_1_E_c > 0 ) && (data.bar_6_4_1_E_c < 2)){ $scope.bar_6_4_1_E_c_cm = data.bar_6_4_1_E_c; $scope.bar_6_4_1_E_c= false; $scope.bar_6_4_1_E_c= ''; }else{ $scope.bar_6_4_1_E_c= ''; $scope.bar_6_4_1_E_c_cm = ''; $scope.bar_6_4_1_E_c= false; }
				if(data.bar_6_4_1_E_d == 1){ $scope.bar_6_4_1_E_d = data.bar_6_4_1_E_d; $scope.bar_6_4_1_E_d= true; $scope.bar_6_4_1_E_d_cm = ''; } else if((data.bar_6_4_1_E_d > 0 ) && (data.bar_6_4_1_E_d < 1)){ $scope.bar_6_4_1_E_d_cm = data.bar_6_4_1_E_d; $scope.bar_6_4_1_E_d= false; $scope.bar_6_4_1_E_d= ''; }else{ $scope.bar_6_4_1_E_d= ''; $scope.bar_6_4_1_E_d_cm = ''; $scope.bar_6_4_1_E_d= false; }
				if(data.bar_6_4_1_E_e == 1){ $scope.bar_6_4_1_E_e = data.bar_6_4_1_E_e; $scope.bar_6_4_1_E_e= true; $scope.bar_6_4_1_E_e_cm = ''; } else if((data.bar_6_4_1_E_e > 0 ) && (data.bar_6_4_1_E_e < 1)){ $scope.bar_6_4_1_E_e_cm = data.bar_6_4_1_E_e; $scope.bar_6_4_1_E_e= false; $scope.bar_6_4_1_E_e= ''; }else{ $scope.bar_6_4_1_E_e= ''; $scope.bar_6_4_1_E_e_cm = ''; $scope.bar_6_4_1_E_e= false; }
				if(data.bar_6_4_1_E_f == 1){ $scope.bar_6_4_1_E_f = data.bar_6_4_1_E_f; $scope.bar_6_4_1_E_f= true; $scope.bar_6_4_1_E_f_cm = ''; } else if((data.bar_6_4_1_E_f > 0 ) && (data.bar_6_4_1_E_f < 1)){ $scope.bar_6_4_1_E_f_cm = data.bar_6_4_1_E_f; $scope.bar_6_4_1_E_f= false; $scope.bar_6_4_1_E_f= ''; }else{ $scope.bar_6_4_1_E_f= ''; $scope.bar_6_4_1_E_f_cm = ''; $scope.bar_6_4_1_E_f= false; }
				if(data.bar_6_4_1_E_g == 1){ $scope.bar_6_4_1_E_g = data.bar_6_4_1_E_g; $scope.bar_6_4_1_E_g= true; $scope.bar_6_4_1_E_g_cm = ''; } else if((data.bar_6_4_1_E_g > 0 ) && (data.bar_6_4_1_E_g < 1)){ $scope.bar_6_4_1_E_g_cm = data.bar_6_4_1_E_g; $scope.bar_6_4_1_E_g= false; $scope.bar_6_4_1_E_g= ''; }else{ $scope.bar_6_4_1_E_g= ''; $scope.bar_6_4_1_E_g_cm = ''; $scope.bar_6_4_1_E_g= false; }
				if(data.bar_6_4_1_E_h == 1){ $scope.bar_6_4_1_E_h = data.bar_6_4_1_E_h; $scope.bar_6_4_1_E_h= true; $scope.bar_6_4_1_E_h_cm = ''; } else if((data.bar_6_4_1_E_h > 0 ) && (data.bar_6_4_1_E_h < 1)){ $scope.bar_6_4_1_E_h_cm = data.bar_6_4_1_E_h; $scope.bar_6_4_1_E_h= false; $scope.bar_6_4_1_E_h= ''; }else{ $scope.bar_6_4_1_E_h= ''; $scope.bar_6_4_1_E_h_cm = ''; $scope.bar_6_4_1_E_h= false; }
				if(data.bar_6_4_1_F == 1){ $scope.bar_6_4_1_F = data.bar_6_4_1_F; $scope.bar_6_4_1_F = true; $scope.bar_6_4_1_F_b = false; $scope.bar_6_4_1_F_c = false; $scope.bar_6_4_1_F_cm = ''; } else if(data.bar_6_4_1_F  == 3){ $scope.bar_6_4_1_F = data.bar_6_4_1_F; $scope.bar_6_4_1_F = false; $scope.bar_6_4_1_F_b = true; $scope.bar_6_4_1_F_c = false; $scope.bar_6_4_1_F_cm = ''; } else if(data.bar_6_4_1_F  == 5){ 
				$scope.bar_6_4_1_F = data.bar_6_4_1_F; $scope.bar_6_4_1_F = false; $scope.bar_6_4_1_F_b = false; $scope.bar_6_4_1_F_c = true; $scope.bar_6_4_1_F_cm = ''; } else if( ((data.bar_6_4_1_F  >= 0 ) && (data.bar_6_4_1_F  < 1)) || ((data.bar_6_4_1_F  > 1 ) && (data.bar_6_4_1_F  < 3)) || ((data.bar_6_4_1_F  > 3 ) && (data.bar_6_4_1_F  < 5)) ){ $scope.bar_6_4_1_F_cm = data.bar_6_4_1_F; $scope.bar_6_4_1_F = false; $scope.bar_6_4_1_F_b = false; $scope.bar_6_4_1_F_c = false; $scope.bar_6_4_1_F = ''; }else{ $scope.bar_6_4_1_F = ''; $scope.bar_6_4_1_F_cm = ''; $scope.bar_6_4_1_F = false; $scope.bar_6_4_1_F_b = false; $scope.bar_6_4_1_F_c = false;}
				if(data.bar_6_4_1_G == 0){ $scope.bar_6_4_1_G = data.bar_6_4_1_G; $scope.bar_6_4_1_G = true; $scope.bar_6_4_1_G_b = false; $scope.bar_6_4_1_G_c = false; $scope.bar_6_4_1_G_cm = ''; } else if(data.bar_6_4_1_G  == 2){ $scope.bar_6_4_1_G = data.bar_6_4_1_G; $scope.bar_6_4_1_G = false; $scope.bar_6_4_1_G_b = true; $scope.bar_6_4_1_G_c = false; $scope.bar_6_4_1_G_cm = ''; } else if(data.bar_6_4_1_G  == ){ $scope.bar_6_4_1_G = data.bar_6_4_1_G; $scope.bar_6_4_1_G = false; $scope.bar_6_4_1_G_b = false; $scope.bar_6_4_1_G_c = true; $scope.bar_6_4_1_G_cm = ''; }else if( ((data.bar_6_4_1_G  > 0 ) && (data.bar_6_4_1_G  < 2)) || ((data.bar_6_4_1_G  > 2 ) && (data.bar_6_4_1_G  < )) )
				{ $scope.bar_6_4_1_G_cm = data.bar_6_4_1_G; $scope.bar_6_4_1_G = false; $scope.bar_6_4_1_G_b = false;  $scope.bar_6_4_1_G_c = false; $scope.bar_6_4_1_G = ''; }else{ $scope.bar_6_4_1_G = ''; $scope.bar_6_4_1_G_cm = ''; $scope.bar_6_4_1_G = false; $scope.bar_6_4_1_G_b = false; $scope.bar_6_4_1_G_c = false; }
				if(data.bar_6_4_1_H == 0){ $scope.bar_6_4_1_H = data.bar_6_4_1_H; $scope.bar_6_4_1_H = true; $scope.bar_6_4_1_H_b = false; $scope.bar_6_4_1_H_c = false; $scope.bar_6_4_1_H_cm = ''; } else if(data.bar_6_4_1_H  == 1){ $scope.bar_6_4_1_H = data.bar_6_4_1_H; $scope.bar_6_4_1_H = false; $scope.bar_6_4_1_H_b = true; $scope.bar_6_4_1_H_c = false; $scope.bar_6_4_1_H_cm = ''; } else if(data.bar_6_4_1_H  == 3){ $scope.bar_6_4_1_H = data.bar_6_4_1_H; $scope.bar_6_4_1_H = false; $scope.bar_6_4_1_H_b = false; $scope.bar_6_4_1_H_c = true; $scope.bar_6_4_1_H_cm = ''; }else if( ((data.bar_6_4_1_H  > 0 ) && (data.bar_6_4_1_H  < 1)) || ((data.bar_6_4_1_H  > 1 ) && (data.bar_6_4_1_H  < 3)) )
				{ $scope.bar_6_4_1_H_cm = data.bar_6_4_1_H; $scope.bar_6_4_1_H = false; $scope.bar_6_4_1_H_b = false;  $scope.bar_6_4_1_H_c = false; $scope.bar_6_4_1_H = ''; }else{ $scope.bar_6_4_1_H = ''; $scope.bar_6_4_1_H_cm = ''; $scope.bar_6_4_1_H = false; $scope.bar_6_4_1_H_b = false; $scope.bar_6_4_1_H_c = false; }
				if(data.bar_6_4_1_I == 0){ $scope.bar_6_4_1_I = data.bar_6_4_1_I; $scope.bar_6_4_1_I = true; $scope.bar_6_4_1_I_b = false; $scope.bar_6_4_1_I_c = false; $scope.bar_6_4_1_I_cm = ''; } else if(data.bar_6_4_1_I  == 1){ $scope.bar_6_4_1_I = data.bar_6_4_1_I; $scope.bar_6_4_1_I = false; $scope.bar_6_4_1_I_b = true; $scope.bar_6_4_1_I_c = false; $scope.bar_6_4_1_I_cm = ''; } else if(data.bar_6_4_1_I  == 3){ $scope.bar_6_4_1_I = data.bar_6_4_1_I; $scope.bar_6_4_1_I = false; $scope.bar_6_4_1_I_b = false; $scope.bar_6_4_1_I_c = true; $scope.bar_6_4_1_I_cm = ''; }else if( ((data.bar_6_4_1_I  > 0 ) && (data.bar_6_4_1_I  < 1)) || ((data.bar_6_4_1_I  > 1 ) && (data.bar_6_4_1_I  < 3)) )
				{ $scope.bar_6_4_1_I_cm = data.bar_6_4_1_I; $scope.bar_6_4_1_I = false; $scope.bar_6_4_1_I_b = false;  $scope.bar_6_4_1_I_c = false; $scope.bar_6_4_1_I = ''; }else{ $scope.bar_6_4_1_I = ''; $scope.bar_6_4_1_I_cm = ''; $scope.bar_6_4_1_I = false; $scope.bar_6_4_1_I_b = false; $scope.bar_6_4_1_I_c = false; }
				$scope.bar_6_5_1_text = data.bar_6_5_1_text;
				if(data.bar_6_5_1_A == 3){ $scope.bar_6_5_1_A = data.bar_6_5_1_A; $scope.bar_6_5_1_A = true; $scope.bar_6_5_1_A_b = false; $scope.bar_6_5_1_A_c = false; $scope.bar_6_5_1_A_cm = ''; } else if(data.bar_6_5_1_A  == 7){ $scope.bar_6_5_1_A = data.bar_6_5_1_A; $scope.bar_6_5_1_A = false; $scope.bar_6_5_1_A_b = true; $scope.bar_6_5_1_A_c = false; $scope.bar_6_5_1_A_cm = ''; } else if(data.bar_6_5_1_A  == 10){ 
				$scope.bar_6_5_1_A = data.bar_6_5_1_A; $scope.bar_6_5_1_A = false; $scope.bar_6_5_1_A_b = false; $scope.bar_6_5_1_A_c = true; $scope.bar_6_5_1_A_cm = ''; } else if( ((data.bar_6_5_1_A  >= 0 ) && (data.bar_6_5_1_A  < 3)) || ((data.bar_6_5_1_A  > 3 ) && (data.bar_6_5_1_A  < 7)) || ((data.bar_6_5_1_A  > 7 ) && (data.bar_6_5_1_A  < 10)) ){ $scope.bar_6_5_1_A_cm = data.bar_6_5_1_A; $scope.bar_6_5_1_A = false; $scope.bar_6_5_1_A_b = false; $scope.bar_6_5_1_A_c = false; $scope.bar_6_5_1_A = ''; }else{ $scope.bar_6_5_1_A = ''; $scope.bar_6_5_1_A_cm = ''; $scope.bar_6_5_1_A = false; $scope.bar_6_5_1_A_b = false; $scope.bar_6_5_1_A_c = false;}
				if(data.bar_6_5_1_B == 0){ $scope.bar_6_5_1_B = data.bar_6_5_1_B; $scope.bar_6_5_1_B = true; $scope.bar_6_5_1_B_b = false; $scope.bar_6_5_1_B_c = false; $scope.bar_6_5_1_B_cm = ''; } else if(data.bar_6_5_1_B  == 10){ $scope.bar_6_5_1_B = data.bar_6_5_1_B; $scope.bar_6_5_1_B = false; $scope.bar_6_5_1_B_b = true; $scope.bar_6_5_1_B_c = false; $scope.bar_6_5_1_B_cm = ''; } else if(data.bar_6_5_1_B  == ){ $scope.bar_6_5_1_B = data.bar_6_5_1_B; $scope.bar_6_5_1_B = false; $scope.bar_6_5_1_B_b = false; $scope.bar_6_5_1_B_c = true; $scope.bar_6_5_1_B_cm = ''; }else if( ((data.bar_6_5_1_B  > 0 ) && (data.bar_6_5_1_B  < 10)) || ((data.bar_6_5_1_B  > 10 ) && (data.bar_6_5_1_B  < )) )
				{ $scope.bar_6_5_1_B_cm = data.bar_6_5_1_B; $scope.bar_6_5_1_B = false; $scope.bar_6_5_1_B_b = false;  $scope.bar_6_5_1_B_c = false; $scope.bar_6_5_1_B = ''; }else{ $scope.bar_6_5_1_B = ''; $scope.bar_6_5_1_B_cm = ''; $scope.bar_6_5_1_B = false; $scope.bar_6_5_1_B_b = false; $scope.bar_6_5_1_B_c = false; }
				if(data.bar_6_5_1_C == 0){ $scope.bar_6_5_1_C = data.bar_6_5_1_C; $scope.bar_6_5_1_C = true; $scope.bar_6_5_1_C_b = false; $scope.bar_6_5_1_C_c = false; $scope.bar_6_5_1_C_cm = ''; } else if(data.bar_6_5_1_C  == 10){ $scope.bar_6_5_1_C = data.bar_6_5_1_C; $scope.bar_6_5_1_C = false; $scope.bar_6_5_1_C_b = true; $scope.bar_6_5_1_C_c = false; $scope.bar_6_5_1_C_cm = ''; } else if(data.bar_6_5_1_C  == ){ $scope.bar_6_5_1_C = data.bar_6_5_1_C; $scope.bar_6_5_1_C = false; $scope.bar_6_5_1_C_b = false; $scope.bar_6_5_1_C_c = true; $scope.bar_6_5_1_C_cm = ''; }else if( ((data.bar_6_5_1_C  > 0 ) && (data.bar_6_5_1_C  < 10)) || ((data.bar_6_5_1_C  > 10 ) && (data.bar_6_5_1_C  < )) )
				{ $scope.bar_6_5_1_C_cm = data.bar_6_5_1_C; $scope.bar_6_5_1_C = false; $scope.bar_6_5_1_C_b = false;  $scope.bar_6_5_1_C_c = false; $scope.bar_6_5_1_C = ''; }else{ $scope.bar_6_5_1_C = ''; $scope.bar_6_5_1_C_cm = ''; $scope.bar_6_5_1_C = false; $scope.bar_6_5_1_C_b = false; $scope.bar_6_5_1_C_c = false; }
				$scope.bar_6_6_1_text = data.bar_6_6_1_text;
				if(data.bar_6_6_1_A == 4){ $scope.bar_6_6_1_A = data.bar_6_6_1_A; $scope.bar_6_6_1_A = true; $scope.bar_6_6_1_A_b = false; $scope.bar_6_6_1_A_c = false; $scope.bar_6_6_1_A_cm = ''; } else if(data.bar_6_6_1_A  == 7){ $scope.bar_6_6_1_A = data.bar_6_6_1_A; $scope.bar_6_6_1_A = false; $scope.bar_6_6_1_A_b = true; $scope.bar_6_6_1_A_c = false; $scope.bar_6_6_1_A_cm = ''; } else if(data.bar_6_6_1_A  == 10){ 
				$scope.bar_6_6_1_A = data.bar_6_6_1_A; $scope.bar_6_6_1_A = false; $scope.bar_6_6_1_A_b = false; $scope.bar_6_6_1_A_c = true; $scope.bar_6_6_1_A_cm = ''; } else if( ((data.bar_6_6_1_A  >= 0 ) && (data.bar_6_6_1_A  < 4)) || ((data.bar_6_6_1_A  > 4 ) && (data.bar_6_6_1_A  < 7)) || ((data.bar_6_6_1_A  > 7 ) && (data.bar_6_6_1_A  < 10)) ){ $scope.bar_6_6_1_A_cm = data.bar_6_6_1_A; $scope.bar_6_6_1_A = false; $scope.bar_6_6_1_A_b = false; $scope.bar_6_6_1_A_c = false; $scope.bar_6_6_1_A = ''; }else{ $scope.bar_6_6_1_A = ''; $scope.bar_6_6_1_A_cm = ''; $scope.bar_6_6_1_A = false; $scope.bar_6_6_1_A_b = false; $scope.bar_6_6_1_A_c = false;}
				if(data.bar_6_6_1_B == 0){ $scope.bar_6_6_1_B = data.bar_6_6_1_B; $scope.bar_6_6_1_B = true; $scope.bar_6_6_1_B_b = false; $scope.bar_6_6_1_B_c = false; $scope.bar_6_6_1_B_cm = ''; } else if(data.bar_6_6_1_B  == 7){ $scope.bar_6_6_1_B = data.bar_6_6_1_B; $scope.bar_6_6_1_B = false; $scope.bar_6_6_1_B_b = true; $scope.bar_6_6_1_B_c = false; $scope.bar_6_6_1_B_cm = ''; } else if(data.bar_6_6_1_B  == 10){ $scope.bar_6_6_1_B = data.bar_6_6_1_B; $scope.bar_6_6_1_B = false; $scope.bar_6_6_1_B_b = false; $scope.bar_6_6_1_B_c = true; $scope.bar_6_6_1_B_cm = ''; }else if( ((data.bar_6_6_1_B  > 0 ) && (data.bar_6_6_1_B  < 7)) || ((data.bar_6_6_1_B  > 7 ) && (data.bar_6_6_1_B  < 10)) )
				{ $scope.bar_6_6_1_B_cm = data.bar_6_6_1_B; $scope.bar_6_6_1_B = false; $scope.bar_6_6_1_B_b = false;  $scope.bar_6_6_1_B_c = false; $scope.bar_6_6_1_B = ''; }else{ $scope.bar_6_6_1_B = ''; $scope.bar_6_6_1_B_cm = ''; $scope.bar_6_6_1_B = false; $scope.bar_6_6_1_B_b = false; $scope.bar_6_6_1_B_c = false; }
				if(data.bar_6_6_1_C == 3){ $scope.bar_6_6_1_C = data.bar_6_6_1_C; $scope.bar_6_6_1_C = true; $scope.bar_6_6_1_C_b = false; $scope.bar_6_6_1_C_c = false; $scope.bar_6_6_1_C_cm = ''; } else if(data.bar_6_6_1_C  == 7){ $scope.bar_6_6_1_C = data.bar_6_6_1_C; $scope.bar_6_6_1_C = false; $scope.bar_6_6_1_C_b = true; $scope.bar_6_6_1_C_c = false; $scope.bar_6_6_1_C_cm = ''; } else if(data.bar_6_6_1_C  == 10){ 
				$scope.bar_6_6_1_C = data.bar_6_6_1_C; $scope.bar_6_6_1_C = false; $scope.bar_6_6_1_C_b = false; $scope.bar_6_6_1_C_c = true; $scope.bar_6_6_1_C_cm = ''; } else if( ((data.bar_6_6_1_C  >= 0 ) && (data.bar_6_6_1_C  < 3)) || ((data.bar_6_6_1_C  > 3 ) && (data.bar_6_6_1_C  < 7)) || ((data.bar_6_6_1_C  > 7 ) && (data.bar_6_6_1_C  < 10)) ){ $scope.bar_6_6_1_C_cm = data.bar_6_6_1_C; $scope.bar_6_6_1_C = false; $scope.bar_6_6_1_C_b = false; $scope.bar_6_6_1_C_c = false; $scope.bar_6_6_1_C = ''; }else{ $scope.bar_6_6_1_C = ''; $scope.bar_6_6_1_C_cm = ''; $scope.bar_6_6_1_C = false; $scope.bar_6_6_1_C_b = false; $scope.bar_6_6_1_C_c = false;}
				$scope.bar_6_7_1_text = data.bar_6_7_1_text;
				if(data.bar_6_7_1_A == 5){ $scope.bar_6_7_1_A = data.bar_6_7_1_A; $scope.bar_6_7_1_A = true; $scope.bar_6_7_1_A_b = false; $scope.bar_6_7_1_A_c = false; $scope.bar_6_7_1_A_cm = ''; } else if(data.bar_6_7_1_A  == 10){ $scope.bar_6_7_1_A = data.bar_6_7_1_A; $scope.bar_6_7_1_A = false; $scope.bar_6_7_1_A_b = true; $scope.bar_6_7_1_A_c = false; $scope.bar_6_7_1_A_cm = ''; } else if(data.bar_6_7_1_A  == 15){ 
				$scope.bar_6_7_1_A = data.bar_6_7_1_A; $scope.bar_6_7_1_A = false; $scope.bar_6_7_1_A_b = false; $scope.bar_6_7_1_A_c = true; $scope.bar_6_7_1_A_cm = ''; } else if( ((data.bar_6_7_1_A  >= 0 ) && (data.bar_6_7_1_A  < 5)) || ((data.bar_6_7_1_A  > 5 ) && (data.bar_6_7_1_A  < 10)) || ((data.bar_6_7_1_A  > 10 ) && (data.bar_6_7_1_A  < 15)) ){ $scope.bar_6_7_1_A_cm = data.bar_6_7_1_A; $scope.bar_6_7_1_A = false; $scope.bar_6_7_1_A_b = false; $scope.bar_6_7_1_A_c = false; $scope.bar_6_7_1_A = ''; }else{ $scope.bar_6_7_1_A = ''; $scope.bar_6_7_1_A_cm = ''; $scope.bar_6_7_1_A = false; $scope.bar_6_7_1_A_b = false; $scope.bar_6_7_1_A_c = false;}
				if(data.bar_6_7_1_B == 0){ $scope.bar_6_7_1_B = data.bar_6_7_1_B; $scope.bar_6_7_1_B = true; $scope.bar_6_7_1_B_b = false; $scope.bar_6_7_1_B_c = false; $scope.bar_6_7_1_B_cm = ''; } else if(data.bar_6_7_1_B  == 5){ $scope.bar_6_7_1_B = data.bar_6_7_1_B; $scope.bar_6_7_1_B = false; $scope.bar_6_7_1_B_b = true; $scope.bar_6_7_1_B_c = false; $scope.bar_6_7_1_B_cm = ''; } else if(data.bar_6_7_1_B  == ){ $scope.bar_6_7_1_B = data.bar_6_7_1_B; $scope.bar_6_7_1_B = false; $scope.bar_6_7_1_B_b = false; $scope.bar_6_7_1_B_c = true; $scope.bar_6_7_1_B_cm = ''; }else if( ((data.bar_6_7_1_B  > 0 ) && (data.bar_6_7_1_B  < 5)) || ((data.bar_6_7_1_B  > 5 ) && (data.bar_6_7_1_B  < )) )
				{ $scope.bar_6_7_1_B_cm = data.bar_6_7_1_B; $scope.bar_6_7_1_B = false; $scope.bar_6_7_1_B_b = false;  $scope.bar_6_7_1_B_c = false; $scope.bar_6_7_1_B = ''; }else{ $scope.bar_6_7_1_B = ''; $scope.bar_6_7_1_B_cm = ''; $scope.bar_6_7_1_B = false; $scope.bar_6_7_1_B_b = false; $scope.bar_6_7_1_B_c = false; }
				if(data.bar_6_7_1_C == 3){ $scope.bar_6_7_1_C = data.bar_6_7_1_C; $scope.bar_6_7_1_C = true; $scope.bar_6_7_1_C_b = false; $scope.bar_6_7_1_C_c = false; $scope.bar_6_7_1_C_cm = ''; } else if(data.bar_6_7_1_C  == 7){ $scope.bar_6_7_1_C = data.bar_6_7_1_C; $scope.bar_6_7_1_C = false; $scope.bar_6_7_1_C_b = true; $scope.bar_6_7_1_C_c = false; $scope.bar_6_7_1_C_cm = ''; } else if(data.bar_6_7_1_C  == 10){ 
				$scope.bar_6_7_1_C = data.bar_6_7_1_C; $scope.bar_6_7_1_C = false; $scope.bar_6_7_1_C_b = false; $scope.bar_6_7_1_C_c = true; $scope.bar_6_7_1_C_cm = ''; } else if( ((data.bar_6_7_1_C  >= 0 ) && (data.bar_6_7_1_C  < 3)) || ((data.bar_6_7_1_C  > 3 ) && (data.bar_6_7_1_C  < 7)) || ((data.bar_6_7_1_C  > 7 ) && (data.bar_6_7_1_C  < 10)) ){ $scope.bar_6_7_1_C_cm = data.bar_6_7_1_C; $scope.bar_6_7_1_C = false; $scope.bar_6_7_1_C_b = false; $scope.bar_6_7_1_C_c = false; $scope.bar_6_7_1_C = ''; }else{ $scope.bar_6_7_1_C = ''; $scope.bar_6_7_1_C_cm = ''; $scope.bar_6_7_1_C = false; $scope.bar_6_7_1_C_b = false; $scope.bar_6_7_1_C_c = false;}
				$scope.kitchen_7_1_1_text = data.kitchen_7_1_1_text;
				if(data.kitchen_7_1_1_A == 20){ $scope.kitchen_7_1_1_A = data.kitchen_7_1_1_A; $scope.kitchen_7_1_1_A = true; $scope.kitchen_7_1_1_A_b = false; $scope.kitchen_7_1_1_A_c = false; $scope.kitchen_7_1_1_A_cm = ''; } else if(data.kitchen_7_1_1_A  == 30){ $scope.kitchen_7_1_1_A = data.kitchen_7_1_1_A; $scope.kitchen_7_1_1_A = false; $scope.kitchen_7_1_1_A_b = true; $scope.kitchen_7_1_1_A_c = false; $scope.kitchen_7_1_1_A_cm = ''; } else if(data.kitchen_7_1_1_A  == 40){ 
				$scope.kitchen_7_1_1_A = data.kitchen_7_1_1_A; $scope.kitchen_7_1_1_A = false; $scope.kitchen_7_1_1_A_b = false; $scope.kitchen_7_1_1_A_c = true; $scope.kitchen_7_1_1_A_cm = ''; } else if( ((data.kitchen_7_1_1_A  >= 0 ) && (data.kitchen_7_1_1_A  < 20)) || ((data.kitchen_7_1_1_A  > 20 ) && (data.kitchen_7_1_1_A  < 30)) || ((data.kitchen_7_1_1_A  > 30 ) && (data.kitchen_7_1_1_A  < 40)) ){ $scope.kitchen_7_1_1_A_cm = data.kitchen_7_1_1_A; $scope.kitchen_7_1_1_A = false; $scope.kitchen_7_1_1_A_b = false; $scope.kitchen_7_1_1_A_c = false; $scope.kitchen_7_1_1_A = ''; }else{ $scope.kitchen_7_1_1_A = ''; $scope.kitchen_7_1_1_A_cm = ''; $scope.kitchen_7_1_1_A = false; $scope.kitchen_7_1_1_A_b = false; $scope.kitchen_7_1_1_A_c = false;}
				$scope.kitchen_7_2_1_text = data.kitchen_7_2_1_text;
				if(data.kitchen_7_2_1_A  == 5){ $scope.kitchen_7_2_1_A  = data.kitchen_7_2_1_A ; $scope.kitchen_7_2_1_A = true; $scope.kitchen_7_2_1_A_b = false; $scope.kitchen_7_2_1_A_cm = ''; } else if(data.kitchen_7_2_1_A  == 8){ $scope.kitchen_7_2_1_A  = data.kitchen_7_2_1_A ; $scope.kitchen_7_2_1_A = false; $scope.kitchen_7_2_1_A_b = true; $scope.kitchen_7_2_1_A_cm = ''; }else if( ((data.kitchen_7_2_1_A  > 0 ) && (data.kitchen_7_2_1_A  < 5)) || ((data.kitchen_7_2_1_A  > 5 ) && (data.kitchen_7_2_1_A  < 8)))
				{ $scope.kitchen_7_2_1_A_cm = data.kitchen_7_2_1_A ; $scope.kitchen_7_2_1_A = false; $scope.kitchen_7_2_1_A_b = false; $scope.kitchen_7_2_1_A  = ''; }else{ $scope.kitchen_7_2_1_A  = ''; $scope.kitchen_7_2_1_A_cm = ''; $scope.kitchen_7_2_1_A = false; $scope.kitchen_7_2_1_A_b = false; }
				if(data.kitchen_7_2_1_B == 3){ $scope.kitchen_7_2_1_B = data.kitchen_7_2_1_B; $scope.kitchen_7_2_1_B = true; $scope.kitchen_7_2_1_B_b = false; $scope.kitchen_7_2_1_B_c = false; $scope.kitchen_7_2_1_B_cm = ''; } else if(data.kitchen_7_2_1_B  == 5){ $scope.kitchen_7_2_1_B = data.kitchen_7_2_1_B; $scope.kitchen_7_2_1_B = false; $scope.kitchen_7_2_1_B_b = true; $scope.kitchen_7_2_1_B_c = false; $scope.kitchen_7_2_1_B_cm = ''; } else if(data.kitchen_7_2_1_B  == 7){ 
				$scope.kitchen_7_2_1_B = data.kitchen_7_2_1_B; $scope.kitchen_7_2_1_B = false; $scope.kitchen_7_2_1_B_b = false; $scope.kitchen_7_2_1_B_c = true; $scope.kitchen_7_2_1_B_cm = ''; } else if( ((data.kitchen_7_2_1_B  >= 0 ) && (data.kitchen_7_2_1_B  < 3)) || ((data.kitchen_7_2_1_B  > 3 ) && (data.kitchen_7_2_1_B  < 5)) || ((data.kitchen_7_2_1_B  > 5 ) && (data.kitchen_7_2_1_B  < 7)) ){ $scope.kitchen_7_2_1_B_cm = data.kitchen_7_2_1_B; $scope.kitchen_7_2_1_B = false; $scope.kitchen_7_2_1_B_b = false; $scope.kitchen_7_2_1_B_c = false; $scope.kitchen_7_2_1_B = ''; }else{ $scope.kitchen_7_2_1_B = ''; $scope.kitchen_7_2_1_B_cm = ''; $scope.kitchen_7_2_1_B = false; $scope.kitchen_7_2_1_B_b = false; $scope.kitchen_7_2_1_B_c = false;}
				if(data.kitchen_7_2_1_C == 1){ $scope.kitchen_7_2_1_C = data.kitchen_7_2_1_C; $scope.kitchen_7_2_1_C = true; $scope.kitchen_7_2_1_C_b = false; $scope.kitchen_7_2_1_C_c = false; $scope.kitchen_7_2_1_C_cm = ''; } else if(data.kitchen_7_2_1_C  == 3){ $scope.kitchen_7_2_1_C = data.kitchen_7_2_1_C; $scope.kitchen_7_2_1_C = false; $scope.kitchen_7_2_1_C_b = true; $scope.kitchen_7_2_1_C_c = false; $scope.kitchen_7_2_1_C_cm = ''; } else if(data.kitchen_7_2_1_C  == 5){ 
				$scope.kitchen_7_2_1_C = data.kitchen_7_2_1_C; $scope.kitchen_7_2_1_C = false; $scope.kitchen_7_2_1_C_b = false; $scope.kitchen_7_2_1_C_c = true; $scope.kitchen_7_2_1_C_cm = ''; } else if( ((data.kitchen_7_2_1_C  >= 0 ) && (data.kitchen_7_2_1_C  < 1)) || ((data.kitchen_7_2_1_C  > 1 ) && (data.kitchen_7_2_1_C  < 3)) || ((data.kitchen_7_2_1_C  > 3 ) && (data.kitchen_7_2_1_C  < 5)) ){ $scope.kitchen_7_2_1_C_cm = data.kitchen_7_2_1_C; $scope.kitchen_7_2_1_C = false; $scope.kitchen_7_2_1_C_b = false; $scope.kitchen_7_2_1_C_c = false; $scope.kitchen_7_2_1_C = ''; }else{ $scope.kitchen_7_2_1_C = ''; $scope.kitchen_7_2_1_C_cm = ''; $scope.kitchen_7_2_1_C = false; $scope.kitchen_7_2_1_C_b = false; $scope.kitchen_7_2_1_C_c = false;}
				$scope.kitchen_7_3_1_text = data.kitchen_7_3_1_text;
				if(data.kitchen_7_3_1_A == 0){ $scope.kitchen_7_3_1_A = data.kitchen_7_3_1_A; $scope.kitchen_7_3_1_A = true; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = false; $scope.kitchen_7_3_1_A_cm = ''; } else if(data.kitchen_7_3_1_A  == 5){ $scope.kitchen_7_3_1_A = data.kitchen_7_3_1_A; $scope.kitchen_7_3_1_A = false; $scope.kitchen_7_3_1_A_b = true; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = false; $scope.kitchen_7_3_1_A_cm = ''; } else if(data.kitchen_7_3_1_A  == 10){ $scope.kitchen_7_3_1_A = data.kitchen_7_3_1_A; $scope.kitchen_7_3_1_A = false; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = true; $scope.kitchen_7_3_1_A_d = false; $scope.kitchen_7_3_1_A_cm = ''; }else if(data.kitchen_7_3_1_A  == 15){ $scope.kitchen_7_3_1_A = data.kitchen_7_3_1_A; $scope.kitchen_7_3_1_A = false; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = true; $scope.kitchen_7_3_1_A_cm = ''; } else if( ((data.kitchen_7_3_1_A  > 0 ) && (data.kitchen_7_3_1_A  < 5)) || ((data.kitchen_7_3_1_A  > 5 ) && (data.kitchen_7_3_1_A  < 10)) || ((data.kitchen_7_3_1_A  > 10 ) && (data.kitchen_7_3_1_A  < 15)) )
				{ $scope.kitchen_7_3_1_A_cm = data.kitchen_7_3_1_A; $scope.kitchen_7_3_1_A = false; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = false; $scope.kitchen_7_3_1_A = ''; }else{ $scope.kitchen_7_3_1_A = ''; $scope.kitchen_7_3_1_A_cm = ''; $scope.kitchen_7_3_1_A = false; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = false;}
				if(data.kitchen_7_3_1_B == 0){ $scope.kitchen_7_3_1_B = data.kitchen_7_3_1_B; $scope.kitchen_7_3_1_B = true; $scope.kitchen_7_3_1_B_b = false; $scope.kitchen_7_3_1_B_c = false; $scope.kitchen_7_3_1_B_cm = ''; } else if(data.kitchen_7_3_1_B  == 8){ $scope.kitchen_7_3_1_B = data.kitchen_7_3_1_B; $scope.kitchen_7_3_1_B = false; $scope.kitchen_7_3_1_B_b = true; $scope.kitchen_7_3_1_B_c = false; $scope.kitchen_7_3_1_B_cm = ''; } else if(data.kitchen_7_3_1_B  == ){ $scope.kitchen_7_3_1_B = data.kitchen_7_3_1_B; $scope.kitchen_7_3_1_B = false; $scope.kitchen_7_3_1_B_b = false; $scope.kitchen_7_3_1_B_c = true; $scope.kitchen_7_3_1_B_cm = ''; }else if( ((data.kitchen_7_3_1_B  > 0 ) && (data.kitchen_7_3_1_B  < 8)) || ((data.kitchen_7_3_1_B  > 8 ) && (data.kitchen_7_3_1_B  < )) )
				{ $scope.kitchen_7_3_1_B_cm = data.kitchen_7_3_1_B; $scope.kitchen_7_3_1_B = false; $scope.kitchen_7_3_1_B_b = false;  $scope.kitchen_7_3_1_B_c = false; $scope.kitchen_7_3_1_B = ''; }else{ $scope.kitchen_7_3_1_B = ''; $scope.kitchen_7_3_1_B_cm = ''; $scope.kitchen_7_3_1_B = false; $scope.kitchen_7_3_1_B_b = false; $scope.kitchen_7_3_1_B_c = false; }
				if(data.kitchen_7_3_1_C == 0){ $scope.kitchen_7_3_1_C = data.kitchen_7_3_1_C; $scope.kitchen_7_3_1_C = true; $scope.kitchen_7_3_1_C_b = false; $scope.kitchen_7_3_1_C_c = false; $scope.kitchen_7_3_1_C_cm = ''; } else if(data.kitchen_7_3_1_C  == 7){ $scope.kitchen_7_3_1_C = data.kitchen_7_3_1_C; $scope.kitchen_7_3_1_C = false; $scope.kitchen_7_3_1_C_b = true; $scope.kitchen_7_3_1_C_c = false; $scope.kitchen_7_3_1_C_cm = ''; } else if(data.kitchen_7_3_1_C  == ){ $scope.kitchen_7_3_1_C = data.kitchen_7_3_1_C; $scope.kitchen_7_3_1_C = false; $scope.kitchen_7_3_1_C_b = false; $scope.kitchen_7_3_1_C_c = true; $scope.kitchen_7_3_1_C_cm = ''; }else if( ((data.kitchen_7_3_1_C  > 0 ) && (data.kitchen_7_3_1_C  < 7)) || ((data.kitchen_7_3_1_C  > 7 ) && (data.kitchen_7_3_1_C  < )) )
				{ $scope.kitchen_7_3_1_C_cm = data.kitchen_7_3_1_C; $scope.kitchen_7_3_1_C = false; $scope.kitchen_7_3_1_C_b = false;  $scope.kitchen_7_3_1_C_c = false; $scope.kitchen_7_3_1_C = ''; }else{ $scope.kitchen_7_3_1_C = ''; $scope.kitchen_7_3_1_C_cm = ''; $scope.kitchen_7_3_1_C = false; $scope.kitchen_7_3_1_C_b = false; $scope.kitchen_7_3_1_C_c = false; }
				$scope.kitchen_7_4_1_text = data.kitchen_7_4_1_text;
				if(data.kitchen_7_4_1_A == 5){ $scope.kitchen_7_4_1_A = data.kitchen_7_4_1_A; $scope.kitchen_7_4_1_A = true; $scope.kitchen_7_4_1_A_b = false; $scope.kitchen_7_4_1_A_c = false; $scope.kitchen_7_4_1_A_cm = ''; } else if(data.kitchen_7_4_1_A  == 10){ $scope.kitchen_7_4_1_A = data.kitchen_7_4_1_A; $scope.kitchen_7_4_1_A = false; $scope.kitchen_7_4_1_A_b = true; $scope.kitchen_7_4_1_A_c = false; $scope.kitchen_7_4_1_A_cm = ''; } else if(data.kitchen_7_4_1_A  == 15){ 
				$scope.kitchen_7_4_1_A = data.kitchen_7_4_1_A; $scope.kitchen_7_4_1_A = false; $scope.kitchen_7_4_1_A_b = false; $scope.kitchen_7_4_1_A_c = true; $scope.kitchen_7_4_1_A_cm = ''; } else if( ((data.kitchen_7_4_1_A  >= 0 ) && (data.kitchen_7_4_1_A  < 5)) || ((data.kitchen_7_4_1_A  > 5 ) && (data.kitchen_7_4_1_A  < 10)) || ((data.kitchen_7_4_1_A  > 10 ) && (data.kitchen_7_4_1_A  < 15)) ){ $scope.kitchen_7_4_1_A_cm = data.kitchen_7_4_1_A; $scope.kitchen_7_4_1_A = false; $scope.kitchen_7_4_1_A_b = false; $scope.kitchen_7_4_1_A_c = false; $scope.kitchen_7_4_1_A = ''; }else{ $scope.kitchen_7_4_1_A = ''; $scope.kitchen_7_4_1_A_cm = ''; $scope.kitchen_7_4_1_A = false; $scope.kitchen_7_4_1_A_b = false; $scope.kitchen_7_4_1_A_c = false;}
				if(data.kitchen_7_4_1_B == 3){ $scope.kitchen_7_4_1_B = data.kitchen_7_4_1_B; $scope.kitchen_7_4_1_B = true; $scope.kitchen_7_4_1_B_b = false; $scope.kitchen_7_4_1_B_c = false; $scope.kitchen_7_4_1_B_d = false; $scope.kitchen_7_4_1_B_cm = ''; } else if(data.kitchen_7_4_1_B  == 6){ $scope.kitchen_7_4_1_B = data.kitchen_7_4_1_B; $scope.kitchen_7_4_1_B = false; $scope.kitchen_7_4_1_B_b = true; $scope.kitchen_7_4_1_B_c = false; $scope.kitchen_7_4_1_B_d = false; $scope.kitchen_7_4_1_B_cm = ''; } else if(data.kitchen_7_4_1_B  == 10){ $scope.kitchen_7_4_1_B = data.kitchen_7_4_1_B; $scope.kitchen_7_4_1_B = false; $scope.kitchen_7_4_1_B_b = false; $scope.kitchen_7_4_1_B_c = true; $scope.kitchen_7_4_1_B_d = false; $scope.kitchen_7_4_1_B_cm = ''; }else if(data.kitchen_7_4_1_B  == s){ $scope.kitchen_7_4_1_B = data.kitchen_7_4_1_B; $scope.kitchen_7_4_1_B = false; $scope.kitchen_7_4_1_B_b = false; $scope.kitchen_7_4_1_B_c = false; $scope.kitchen_7_4_1_B_d = true; $scope.kitchen_7_4_1_B_cm = ''; } else if( ((data.kitchen_7_4_1_B  >= 0 ) && (data.kitchen_7_4_1_B  < 3)) || ((data.kitchen_7_4_1_B  > 3 ) && (data.kitchen_7_4_1_B  < 6)) || ((data.kitchen_7_4_1_B  > 6 ) && (data.kitchen_7_4_1_B  < 10)) || ((data.kitchen_7_4_1_B  > 10 ) && (data.kitchen_7_4_1_B  < s)) )
				{ $scope.kitchen_7_4_1_B_cm = data.kitchen_7_4_1_B; $scope.kitchen_7_4_1_B = false; $scope.kitchen_7_4_1_B_b = false; $scope.kitchen_7_4_1_B_c = false; $scope.kitchen_7_4_1_B_d = false; $scope.kitchen_7_4_1_B = ''; }else{ $scope.kitchen_7_4_1_B = ''; $scope.kitchen_7_4_1_B_cm = ''; $scope.kitchen_7_4_1_B = false; $scope.kitchen_7_4_1_B_b = false; $scope.kitchen_7_4_1_B_c = false; $scope.kitchen_7_4_1_B_d = false;}
				if(data.kitchen_7_4_1_C == 3){ $scope.kitchen_7_4_1_C = data.kitchen_7_4_1_C; $scope.kitchen_7_4_1_C = true; $scope.kitchen_7_4_1_C_b = false; $scope.kitchen_7_4_1_C_c = false; $scope.kitchen_7_4_1_C_cm = ''; } else if(data.kitchen_7_4_1_C  == 6){ $scope.kitchen_7_4_1_C = data.kitchen_7_4_1_C; $scope.kitchen_7_4_1_C = false; $scope.kitchen_7_4_1_C_b = true; $scope.kitchen_7_4_1_C_c = false; $scope.kitchen_7_4_1_C_cm = ''; } else if(data.kitchen_7_4_1_C  == 10){ 
				$scope.kitchen_7_4_1_C = data.kitchen_7_4_1_C; $scope.kitchen_7_4_1_C = false; $scope.kitchen_7_4_1_C_b = false; $scope.kitchen_7_4_1_C_c = true; $scope.kitchen_7_4_1_C_cm = ''; } else if( ((data.kitchen_7_4_1_C  >= 0 ) && (data.kitchen_7_4_1_C  < 3)) || ((data.kitchen_7_4_1_C  > 3 ) && (data.kitchen_7_4_1_C  < 6)) || ((data.kitchen_7_4_1_C  > 6 ) && (data.kitchen_7_4_1_C  < 10)) ){ $scope.kitchen_7_4_1_C_cm = data.kitchen_7_4_1_C; $scope.kitchen_7_4_1_C = false; $scope.kitchen_7_4_1_C_b = false; $scope.kitchen_7_4_1_C_c = false; $scope.kitchen_7_4_1_C = ''; }else{ $scope.kitchen_7_4_1_C = ''; $scope.kitchen_7_4_1_C_cm = ''; $scope.kitchen_7_4_1_C = false; $scope.kitchen_7_4_1_C_b = false; $scope.kitchen_7_4_1_C_c = false;}
				$scope.kitchen_7_5_1_text = data.kitchen_7_5_1_text;
				if(data.kitchen_7_5_1_A == 2){ $scope.kitchen_7_5_1_A = data.kitchen_7_5_1_A; $scope.kitchen_7_5_1_A = true; $scope.kitchen_7_5_1_A_b = false; $scope.kitchen_7_5_1_A_c = false; $scope.kitchen_7_5_1_A_cm = ''; } else if(data.kitchen_7_5_1_A  == 4){ $scope.kitchen_7_5_1_A = data.kitchen_7_5_1_A; $scope.kitchen_7_5_1_A = false; $scope.kitchen_7_5_1_A_b = true; $scope.kitchen_7_5_1_A_c = false; $scope.kitchen_7_5_1_A_cm = ''; } else if(data.kitchen_7_5_1_A  == 6){ 
				$scope.kitchen_7_5_1_A = data.kitchen_7_5_1_A; $scope.kitchen_7_5_1_A = false; $scope.kitchen_7_5_1_A_b = false; $scope.kitchen_7_5_1_A_c = true; $scope.kitchen_7_5_1_A_cm = ''; } else if( ((data.kitchen_7_5_1_A  >= 0 ) && (data.kitchen_7_5_1_A  < 2)) || ((data.kitchen_7_5_1_A  > 2 ) && (data.kitchen_7_5_1_A  < 4)) || ((data.kitchen_7_5_1_A  > 4 ) && (data.kitchen_7_5_1_A  < 6)) ){ $scope.kitchen_7_5_1_A_cm = data.kitchen_7_5_1_A; $scope.kitchen_7_5_1_A = false; $scope.kitchen_7_5_1_A_b = false; $scope.kitchen_7_5_1_A_c = false; $scope.kitchen_7_5_1_A = ''; }else{ $scope.kitchen_7_5_1_A = ''; $scope.kitchen_7_5_1_A_cm = ''; $scope.kitchen_7_5_1_A = false; $scope.kitchen_7_5_1_A_b = false; $scope.kitchen_7_5_1_A_c = false;}
				if(data.kitchen_7_5_1_B == 2){ $scope.kitchen_7_5_1_B = data.kitchen_7_5_1_B; $scope.kitchen_7_5_1_B = true; $scope.kitchen_7_5_1_B_b = false; $scope.kitchen_7_5_1_B_c = false; $scope.kitchen_7_5_1_B_cm = ''; } else if(data.kitchen_7_5_1_B  == 4){ $scope.kitchen_7_5_1_B = data.kitchen_7_5_1_B; $scope.kitchen_7_5_1_B = false; $scope.kitchen_7_5_1_B_b = true; $scope.kitchen_7_5_1_B_c = false; $scope.kitchen_7_5_1_B_cm = ''; } else if(data.kitchen_7_5_1_B  == 6){ 
				$scope.kitchen_7_5_1_B = data.kitchen_7_5_1_B; $scope.kitchen_7_5_1_B = false; $scope.kitchen_7_5_1_B_b = false; $scope.kitchen_7_5_1_B_c = true; $scope.kitchen_7_5_1_B_cm = ''; } else if( ((data.kitchen_7_5_1_B  >= 0 ) && (data.kitchen_7_5_1_B  < 2)) || ((data.kitchen_7_5_1_B  > 2 ) && (data.kitchen_7_5_1_B  < 4)) || ((data.kitchen_7_5_1_B  > 4 ) && (data.kitchen_7_5_1_B  < 6)) ){ $scope.kitchen_7_5_1_B_cm = data.kitchen_7_5_1_B; $scope.kitchen_7_5_1_B = false; $scope.kitchen_7_5_1_B_b = false; $scope.kitchen_7_5_1_B_c = false; $scope.kitchen_7_5_1_B = ''; }else{ $scope.kitchen_7_5_1_B = ''; $scope.kitchen_7_5_1_B_cm = ''; $scope.kitchen_7_5_1_B = false; $scope.kitchen_7_5_1_B_b = false; $scope.kitchen_7_5_1_B_c = false;}
				if(data.kitchen_7_5_1_C == 2){ $scope.kitchen_7_5_1_C = data.kitchen_7_5_1_C; $scope.kitchen_7_5_1_C = true; $scope.kitchen_7_5_1_C_b = false; $scope.kitchen_7_5_1_C_c = false; $scope.kitchen_7_5_1_C_cm = ''; } else if(data.kitchen_7_5_1_C  == 4){ $scope.kitchen_7_5_1_C = data.kitchen_7_5_1_C; $scope.kitchen_7_5_1_C = false; $scope.kitchen_7_5_1_C_b = true; $scope.kitchen_7_5_1_C_c = false; $scope.kitchen_7_5_1_C_cm = ''; } else if(data.kitchen_7_5_1_C  == 6){ 
				$scope.kitchen_7_5_1_C = data.kitchen_7_5_1_C; $scope.kitchen_7_5_1_C = false; $scope.kitchen_7_5_1_C_b = false; $scope.kitchen_7_5_1_C_c = true; $scope.kitchen_7_5_1_C_cm = ''; } else if( ((data.kitchen_7_5_1_C  >= 0 ) && (data.kitchen_7_5_1_C  < 2)) || ((data.kitchen_7_5_1_C  > 2 ) && (data.kitchen_7_5_1_C  < 4)) || ((data.kitchen_7_5_1_C  > 4 ) && (data.kitchen_7_5_1_C  < 6)) ){ $scope.kitchen_7_5_1_C_cm = data.kitchen_7_5_1_C; $scope.kitchen_7_5_1_C = false; $scope.kitchen_7_5_1_C_b = false; $scope.kitchen_7_5_1_C_c = false; $scope.kitchen_7_5_1_C = ''; }else{ $scope.kitchen_7_5_1_C = ''; $scope.kitchen_7_5_1_C_cm = ''; $scope.kitchen_7_5_1_C = false; $scope.kitchen_7_5_1_C_b = false; $scope.kitchen_7_5_1_C_c = false;}
				if(data.kitchen_7_5_1_D == 2){ $scope.kitchen_7_5_1_D = data.kitchen_7_5_1_D; $scope.kitchen_7_5_1_D = true; $scope.kitchen_7_5_1_D_b = false; $scope.kitchen_7_5_1_D_c = false; $scope.kitchen_7_5_1_D_cm = ''; } else if(data.kitchen_7_5_1_D  == 4){ $scope.kitchen_7_5_1_D = data.kitchen_7_5_1_D; $scope.kitchen_7_5_1_D = false; $scope.kitchen_7_5_1_D_b = true; $scope.kitchen_7_5_1_D_c = false; $scope.kitchen_7_5_1_D_cm = ''; } else if(data.kitchen_7_5_1_D  == 6){ 
				$scope.kitchen_7_5_1_D = data.kitchen_7_5_1_D; $scope.kitchen_7_5_1_D = false; $scope.kitchen_7_5_1_D_b = false; $scope.kitchen_7_5_1_D_c = true; $scope.kitchen_7_5_1_D_cm = ''; } else if( ((data.kitchen_7_5_1_D  >= 0 ) && (data.kitchen_7_5_1_D  < 2)) || ((data.kitchen_7_5_1_D  > 2 ) && (data.kitchen_7_5_1_D  < 4)) || ((data.kitchen_7_5_1_D  > 4 ) && (data.kitchen_7_5_1_D  < 6)) ){ $scope.kitchen_7_5_1_D_cm = data.kitchen_7_5_1_D; $scope.kitchen_7_5_1_D = false; $scope.kitchen_7_5_1_D_b = false; $scope.kitchen_7_5_1_D_c = false; $scope.kitchen_7_5_1_D = ''; }else{ $scope.kitchen_7_5_1_D = ''; $scope.kitchen_7_5_1_D_cm = ''; $scope.kitchen_7_5_1_D = false; $scope.kitchen_7_5_1_D_b = false; $scope.kitchen_7_5_1_D_c = false;}
				if(data.kitchen_7_5_1_E == 1){ $scope.kitchen_7_5_1_E = data.kitchen_7_5_1_E; $scope.kitchen_7_5_1_E = true; $scope.kitchen_7_5_1_E_b = false; $scope.kitchen_7_5_1_E_c = false; $scope.kitchen_7_5_1_E_cm = ''; } else if(data.kitchen_7_5_1_E  == 2){ $scope.kitchen_7_5_1_E = data.kitchen_7_5_1_E; $scope.kitchen_7_5_1_E = false; $scope.kitchen_7_5_1_E_b = true; $scope.kitchen_7_5_1_E_c = false; $scope.kitchen_7_5_1_E_cm = ''; } else if(data.kitchen_7_5_1_E  == 3){ 
				$scope.kitchen_7_5_1_E = data.kitchen_7_5_1_E; $scope.kitchen_7_5_1_E = false; $scope.kitchen_7_5_1_E_b = false; $scope.kitchen_7_5_1_E_c = true; $scope.kitchen_7_5_1_E_cm = ''; } else if( ((data.kitchen_7_5_1_E  >= 0 ) && (data.kitchen_7_5_1_E  < 1)) || ((data.kitchen_7_5_1_E  > 1 ) && (data.kitchen_7_5_1_E  < 2)) || ((data.kitchen_7_5_1_E  > 2 ) && (data.kitchen_7_5_1_E  < 3)) ){ $scope.kitchen_7_5_1_E_cm = data.kitchen_7_5_1_E; $scope.kitchen_7_5_1_E = false; $scope.kitchen_7_5_1_E_b = false; $scope.kitchen_7_5_1_E_c = false; $scope.kitchen_7_5_1_E = ''; }else{ $scope.kitchen_7_5_1_E = ''; $scope.kitchen_7_5_1_E_cm = ''; $scope.kitchen_7_5_1_E = false; $scope.kitchen_7_5_1_E_b = false; $scope.kitchen_7_5_1_E_c = false;}
				if(data.kitchen_7_5_1_F == 0){ $scope.kitchen_7_5_1_F = data.kitchen_7_5_1_F; $scope.kitchen_7_5_1_F = true; $scope.kitchen_7_5_1_F_b = false; $scope.kitchen_7_5_1_F_c = false; $scope.kitchen_7_5_1_F_cm = ''; } else if(data.kitchen_7_5_1_F  == 1){ $scope.kitchen_7_5_1_F = data.kitchen_7_5_1_F; $scope.kitchen_7_5_1_F = false; $scope.kitchen_7_5_1_F_b = true; $scope.kitchen_7_5_1_F_c = false; $scope.kitchen_7_5_1_F_cm = ''; } else if(data.kitchen_7_5_1_F  == ){ $scope.kitchen_7_5_1_F = data.kitchen_7_5_1_F; $scope.kitchen_7_5_1_F = false; $scope.kitchen_7_5_1_F_b = false; $scope.kitchen_7_5_1_F_c = true; $scope.kitchen_7_5_1_F_cm = ''; }else if( ((data.kitchen_7_5_1_F  > 0 ) && (data.kitchen_7_5_1_F  < 1)) || ((data.kitchen_7_5_1_F  > 1 ) && (data.kitchen_7_5_1_F  < )) )
				{ $scope.kitchen_7_5_1_F_cm = data.kitchen_7_5_1_F; $scope.kitchen_7_5_1_F = false; $scope.kitchen_7_5_1_F_b = false;  $scope.kitchen_7_5_1_F_c = false; $scope.kitchen_7_5_1_F = ''; }else{ $scope.kitchen_7_5_1_F = ''; $scope.kitchen_7_5_1_F_cm = ''; $scope.kitchen_7_5_1_F = false; $scope.kitchen_7_5_1_F_b = false; $scope.kitchen_7_5_1_F_c = false; }
				if(data.kitchen_7_5_1_G == 0){ $scope.kitchen_7_5_1_G = data.kitchen_7_5_1_G; $scope.kitchen_7_5_1_G = true; $scope.kitchen_7_5_1_G_b = false; $scope.kitchen_7_5_1_G_c = false; $scope.kitchen_7_5_1_G_cm = ''; } else if(data.kitchen_7_5_1_G  == 2){ $scope.kitchen_7_5_1_G = data.kitchen_7_5_1_G; $scope.kitchen_7_5_1_G = false; $scope.kitchen_7_5_1_G_b = true; $scope.kitchen_7_5_1_G_c = false; $scope.kitchen_7_5_1_G_cm = ''; } else if(data.kitchen_7_5_1_G  == 4){ $scope.kitchen_7_5_1_G = data.kitchen_7_5_1_G; $scope.kitchen_7_5_1_G = false; $scope.kitchen_7_5_1_G_b = false; $scope.kitchen_7_5_1_G_c = true; $scope.kitchen_7_5_1_G_cm = ''; }else if( ((data.kitchen_7_5_1_G  > 0 ) && (data.kitchen_7_5_1_G  < 2)) || ((data.kitchen_7_5_1_G  > 2 ) && (data.kitchen_7_5_1_G  < 4)) )
				{ $scope.kitchen_7_5_1_G_cm = data.kitchen_7_5_1_G; $scope.kitchen_7_5_1_G = false; $scope.kitchen_7_5_1_G_b = false;  $scope.kitchen_7_5_1_G_c = false; $scope.kitchen_7_5_1_G = ''; }else{ $scope.kitchen_7_5_1_G = ''; $scope.kitchen_7_5_1_G_cm = ''; $scope.kitchen_7_5_1_G = false; $scope.kitchen_7_5_1_G_b = false; $scope.kitchen_7_5_1_G_c = false; }
				if(data.kitchen_7_5_1_H == 0){ $scope.kitchen_7_5_1_H = data.kitchen_7_5_1_H; $scope.kitchen_7_5_1_H = true; $scope.kitchen_7_5_1_H_b = false; $scope.kitchen_7_5_1_H_c = false; $scope.kitchen_7_5_1_H_cm = ''; } else if(data.kitchen_7_5_1_H  == 2){ $scope.kitchen_7_5_1_H = data.kitchen_7_5_1_H; $scope.kitchen_7_5_1_H = false; $scope.kitchen_7_5_1_H_b = true; $scope.kitchen_7_5_1_H_c = false; $scope.kitchen_7_5_1_H_cm = ''; } else if(data.kitchen_7_5_1_H  == 4){ $scope.kitchen_7_5_1_H = data.kitchen_7_5_1_H; $scope.kitchen_7_5_1_H = false; $scope.kitchen_7_5_1_H_b = false; $scope.kitchen_7_5_1_H_c = true; $scope.kitchen_7_5_1_H_cm = ''; }else if( ((data.kitchen_7_5_1_H  > 0 ) && (data.kitchen_7_5_1_H  < 2)) || ((data.kitchen_7_5_1_H  > 2 ) && (data.kitchen_7_5_1_H  < 4)) )
				{ $scope.kitchen_7_5_1_H_cm = data.kitchen_7_5_1_H; $scope.kitchen_7_5_1_H = false; $scope.kitchen_7_5_1_H_b = false;  $scope.kitchen_7_5_1_H_c = false; $scope.kitchen_7_5_1_H = ''; }else{ $scope.kitchen_7_5_1_H = ''; $scope.kitchen_7_5_1_H_cm = ''; $scope.kitchen_7_5_1_H = false; $scope.kitchen_7_5_1_H_b = false; $scope.kitchen_7_5_1_H_c = false; }
				if(data.kitchen_7_5_1_I == 1){ $scope.kitchen_7_5_1_I = data.kitchen_7_5_1_I; $scope.kitchen_7_5_1_I = true; $scope.kitchen_7_5_1_I_b = false; $scope.kitchen_7_5_1_I_c = false; $scope.kitchen_7_5_1_I_cm = ''; } else if(data.kitchen_7_5_1_I  == 3){ $scope.kitchen_7_5_1_I = data.kitchen_7_5_1_I; $scope.kitchen_7_5_1_I = false; $scope.kitchen_7_5_1_I_b = true; $scope.kitchen_7_5_1_I_c = false; $scope.kitchen_7_5_1_I_cm = ''; } else if(data.kitchen_7_5_1_I  == 4){ 
				$scope.kitchen_7_5_1_I = data.kitchen_7_5_1_I; $scope.kitchen_7_5_1_I = false; $scope.kitchen_7_5_1_I_b = false; $scope.kitchen_7_5_1_I_c = true; $scope.kitchen_7_5_1_I_cm = ''; } else if( ((data.kitchen_7_5_1_I  >= 0 ) && (data.kitchen_7_5_1_I  < 1)) || ((data.kitchen_7_5_1_I  > 1 ) && (data.kitchen_7_5_1_I  < 3)) || ((data.kitchen_7_5_1_I  > 3 ) && (data.kitchen_7_5_1_I  < 4)) ){ $scope.kitchen_7_5_1_I_cm = data.kitchen_7_5_1_I; $scope.kitchen_7_5_1_I = false; $scope.kitchen_7_5_1_I_b = false; $scope.kitchen_7_5_1_I_c = false; $scope.kitchen_7_5_1_I = ''; }else{ $scope.kitchen_7_5_1_I = ''; $scope.kitchen_7_5_1_I_cm = ''; $scope.kitchen_7_5_1_I = false; $scope.kitchen_7_5_1_I_b = false; $scope.kitchen_7_5_1_I_c = false;}
				$scope.kitchen_7_6_1_text = data.kitchen_7_6_1_text;
				if(data.kitchen_7_6_1_A == 0){ $scope.kitchen_7_6_1_A = data.kitchen_7_6_1_A; $scope.kitchen_7_6_1_A = true; $scope.kitchen_7_6_1_A_b = false; $scope.kitchen_7_6_1_A_c = false; $scope.kitchen_7_6_1_A_cm = ''; } else if(data.kitchen_7_6_1_A  == 3){ $scope.kitchen_7_6_1_A = data.kitchen_7_6_1_A; $scope.kitchen_7_6_1_A = false; $scope.kitchen_7_6_1_A_b = true; $scope.kitchen_7_6_1_A_c = false; $scope.kitchen_7_6_1_A_cm = ''; } else if(data.kitchen_7_6_1_A  == ){ $scope.kitchen_7_6_1_A = data.kitchen_7_6_1_A; $scope.kitchen_7_6_1_A = false; $scope.kitchen_7_6_1_A_b = false; $scope.kitchen_7_6_1_A_c = true; $scope.kitchen_7_6_1_A_cm = ''; }else if( ((data.kitchen_7_6_1_A  > 0 ) && (data.kitchen_7_6_1_A  < 3)) || ((data.kitchen_7_6_1_A  > 3 ) && (data.kitchen_7_6_1_A  < )) )
				{ $scope.kitchen_7_6_1_A_cm = data.kitchen_7_6_1_A; $scope.kitchen_7_6_1_A = false; $scope.kitchen_7_6_1_A_b = false;  $scope.kitchen_7_6_1_A_c = false; $scope.kitchen_7_6_1_A = ''; }else{ $scope.kitchen_7_6_1_A = ''; $scope.kitchen_7_6_1_A_cm = ''; $scope.kitchen_7_6_1_A = false; $scope.kitchen_7_6_1_A_b = false; $scope.kitchen_7_6_1_A_c = false; }
				if(data.kitchen_7_6_1_B == 0){ $scope.kitchen_7_6_1_B = data.kitchen_7_6_1_B; $scope.kitchen_7_6_1_B = true; $scope.kitchen_7_6_1_B_b = false; $scope.kitchen_7_6_1_B_c = false; $scope.kitchen_7_6_1_B_cm = ''; } else if(data.kitchen_7_6_1_B  == 3){ $scope.kitchen_7_6_1_B = data.kitchen_7_6_1_B; $scope.kitchen_7_6_1_B = false; $scope.kitchen_7_6_1_B_b = true; $scope.kitchen_7_6_1_B_c = false; $scope.kitchen_7_6_1_B_cm = ''; } else if(data.kitchen_7_6_1_B  == ){ $scope.kitchen_7_6_1_B = data.kitchen_7_6_1_B; $scope.kitchen_7_6_1_B = false; $scope.kitchen_7_6_1_B_b = false; $scope.kitchen_7_6_1_B_c = true; $scope.kitchen_7_6_1_B_cm = ''; }else if( ((data.kitchen_7_6_1_B  > 0 ) && (data.kitchen_7_6_1_B  < 3)) || ((data.kitchen_7_6_1_B  > 3 ) && (data.kitchen_7_6_1_B  < )) )
				{ $scope.kitchen_7_6_1_B_cm = data.kitchen_7_6_1_B; $scope.kitchen_7_6_1_B = false; $scope.kitchen_7_6_1_B_b = false;  $scope.kitchen_7_6_1_B_c = false; $scope.kitchen_7_6_1_B = ''; }else{ $scope.kitchen_7_6_1_B = ''; $scope.kitchen_7_6_1_B_cm = ''; $scope.kitchen_7_6_1_B = false; $scope.kitchen_7_6_1_B_b = false; $scope.kitchen_7_6_1_B_c = false; }
				if(data.kitchen_7_6_1_C == 0){ $scope.kitchen_7_6_1_C = data.kitchen_7_6_1_C; $scope.kitchen_7_6_1_C = true; $scope.kitchen_7_6_1_C_b = false; $scope.kitchen_7_6_1_C_c = false; $scope.kitchen_7_6_1_C_cm = ''; } else if(data.kitchen_7_6_1_C  == 3){ $scope.kitchen_7_6_1_C = data.kitchen_7_6_1_C; $scope.kitchen_7_6_1_C = false; $scope.kitchen_7_6_1_C_b = true; $scope.kitchen_7_6_1_C_c = false; $scope.kitchen_7_6_1_C_cm = ''; } else if(data.kitchen_7_6_1_C  == ){ $scope.kitchen_7_6_1_C = data.kitchen_7_6_1_C; $scope.kitchen_7_6_1_C = false; $scope.kitchen_7_6_1_C_b = false; $scope.kitchen_7_6_1_C_c = true; $scope.kitchen_7_6_1_C_cm = ''; }else if( ((data.kitchen_7_6_1_C  > 0 ) && (data.kitchen_7_6_1_C  < 3)) || ((data.kitchen_7_6_1_C  > 3 ) && (data.kitchen_7_6_1_C  < )) )
				{ $scope.kitchen_7_6_1_C_cm = data.kitchen_7_6_1_C; $scope.kitchen_7_6_1_C = false; $scope.kitchen_7_6_1_C_b = false;  $scope.kitchen_7_6_1_C_c = false; $scope.kitchen_7_6_1_C = ''; }else{ $scope.kitchen_7_6_1_C = ''; $scope.kitchen_7_6_1_C_cm = ''; $scope.kitchen_7_6_1_C = false; $scope.kitchen_7_6_1_C_b = false; $scope.kitchen_7_6_1_C_c = false; }
				if(data.kitchen_7_6_1_D == 0){ $scope.kitchen_7_6_1_D = data.kitchen_7_6_1_D; $scope.kitchen_7_6_1_D = true; $scope.kitchen_7_6_1_D_b = false; $scope.kitchen_7_6_1_D_c = false; $scope.kitchen_7_6_1_D_cm = ''; } else if(data.kitchen_7_6_1_D  == 3){ $scope.kitchen_7_6_1_D = data.kitchen_7_6_1_D; $scope.kitchen_7_6_1_D = false; $scope.kitchen_7_6_1_D_b = true; $scope.kitchen_7_6_1_D_c = false; $scope.kitchen_7_6_1_D_cm = ''; } else if(data.kitchen_7_6_1_D  == ){ $scope.kitchen_7_6_1_D = data.kitchen_7_6_1_D; $scope.kitchen_7_6_1_D = false; $scope.kitchen_7_6_1_D_b = false; $scope.kitchen_7_6_1_D_c = true; $scope.kitchen_7_6_1_D_cm = ''; }else if( ((data.kitchen_7_6_1_D  > 0 ) && (data.kitchen_7_6_1_D  < 3)) || ((data.kitchen_7_6_1_D  > 3 ) && (data.kitchen_7_6_1_D  < )) )
				{ $scope.kitchen_7_6_1_D_cm = data.kitchen_7_6_1_D; $scope.kitchen_7_6_1_D = false; $scope.kitchen_7_6_1_D_b = false;  $scope.kitchen_7_6_1_D_c = false; $scope.kitchen_7_6_1_D = ''; }else{ $scope.kitchen_7_6_1_D = ''; $scope.kitchen_7_6_1_D_cm = ''; $scope.kitchen_7_6_1_D = false; $scope.kitchen_7_6_1_D_b = false; $scope.kitchen_7_6_1_D_c = false; }
				if(data.kitchen_7_6_1_E == 0){ $scope.kitchen_7_6_1_E = data.kitchen_7_6_1_E; $scope.kitchen_7_6_1_E = true; $scope.kitchen_7_6_1_E_b = false; $scope.kitchen_7_6_1_E_c = false; $scope.kitchen_7_6_1_E_cm = ''; } else if(data.kitchen_7_6_1_E  == 3){ $scope.kitchen_7_6_1_E = data.kitchen_7_6_1_E; $scope.kitchen_7_6_1_E = false; $scope.kitchen_7_6_1_E_b = true; $scope.kitchen_7_6_1_E_c = false; $scope.kitchen_7_6_1_E_cm = ''; } else if(data.kitchen_7_6_1_E  == ){ $scope.kitchen_7_6_1_E = data.kitchen_7_6_1_E; $scope.kitchen_7_6_1_E = false; $scope.kitchen_7_6_1_E_b = false; $scope.kitchen_7_6_1_E_c = true; $scope.kitchen_7_6_1_E_cm = ''; }else if( ((data.kitchen_7_6_1_E  > 0 ) && (data.kitchen_7_6_1_E  < 3)) || ((data.kitchen_7_6_1_E  > 3 ) && (data.kitchen_7_6_1_E  < )) )
				{ $scope.kitchen_7_6_1_E_cm = data.kitchen_7_6_1_E; $scope.kitchen_7_6_1_E = false; $scope.kitchen_7_6_1_E_b = false;  $scope.kitchen_7_6_1_E_c = false; $scope.kitchen_7_6_1_E = ''; }else{ $scope.kitchen_7_6_1_E = ''; $scope.kitchen_7_6_1_E_cm = ''; $scope.kitchen_7_6_1_E = false; $scope.kitchen_7_6_1_E_b = false; $scope.kitchen_7_6_1_E_c = false; }
				if(data.kitchen_7_6_1_F == 0){ $scope.kitchen_7_6_1_F = data.kitchen_7_6_1_F; $scope.kitchen_7_6_1_F = true; $scope.kitchen_7_6_1_F_b = false; $scope.kitchen_7_6_1_F_c = false; $scope.kitchen_7_6_1_F_cm = ''; } else if(data.kitchen_7_6_1_F  == 3){ $scope.kitchen_7_6_1_F = data.kitchen_7_6_1_F; $scope.kitchen_7_6_1_F = false; $scope.kitchen_7_6_1_F_b = true; $scope.kitchen_7_6_1_F_c = false; $scope.kitchen_7_6_1_F_cm = ''; } else if(data.kitchen_7_6_1_F  == ){ $scope.kitchen_7_6_1_F = data.kitchen_7_6_1_F; $scope.kitchen_7_6_1_F = false; $scope.kitchen_7_6_1_F_b = false; $scope.kitchen_7_6_1_F_c = true; $scope.kitchen_7_6_1_F_cm = ''; }else if( ((data.kitchen_7_6_1_F  > 0 ) && (data.kitchen_7_6_1_F  < 3)) || ((data.kitchen_7_6_1_F  > 3 ) && (data.kitchen_7_6_1_F  < )) )
				{ $scope.kitchen_7_6_1_F_cm = data.kitchen_7_6_1_F; $scope.kitchen_7_6_1_F = false; $scope.kitchen_7_6_1_F_b = false;  $scope.kitchen_7_6_1_F_c = false; $scope.kitchen_7_6_1_F = ''; }else{ $scope.kitchen_7_6_1_F = ''; $scope.kitchen_7_6_1_F_cm = ''; $scope.kitchen_7_6_1_F = false; $scope.kitchen_7_6_1_F_b = false; $scope.kitchen_7_6_1_F_c = false; }
				if(data.kitchen_7_6_1_G == 0){ $scope.kitchen_7_6_1_G = data.kitchen_7_6_1_G; $scope.kitchen_7_6_1_G = true; $scope.kitchen_7_6_1_G_b = false; $scope.kitchen_7_6_1_G_c = false; $scope.kitchen_7_6_1_G_cm = ''; } else if(data.kitchen_7_6_1_G  == 2){ $scope.kitchen_7_6_1_G = data.kitchen_7_6_1_G; $scope.kitchen_7_6_1_G = false; $scope.kitchen_7_6_1_G_b = true; $scope.kitchen_7_6_1_G_c = false; $scope.kitchen_7_6_1_G_cm = ''; } else if(data.kitchen_7_6_1_G  == ){ $scope.kitchen_7_6_1_G = data.kitchen_7_6_1_G; $scope.kitchen_7_6_1_G = false; $scope.kitchen_7_6_1_G_b = false; $scope.kitchen_7_6_1_G_c = true; $scope.kitchen_7_6_1_G_cm = ''; }else if( ((data.kitchen_7_6_1_G  > 0 ) && (data.kitchen_7_6_1_G  < 2)) || ((data.kitchen_7_6_1_G  > 2 ) && (data.kitchen_7_6_1_G  < )) )
				{ $scope.kitchen_7_6_1_G_cm = data.kitchen_7_6_1_G; $scope.kitchen_7_6_1_G = false; $scope.kitchen_7_6_1_G_b = false;  $scope.kitchen_7_6_1_G_c = false; $scope.kitchen_7_6_1_G = ''; }else{ $scope.kitchen_7_6_1_G = ''; $scope.kitchen_7_6_1_G_cm = ''; $scope.kitchen_7_6_1_G = false; $scope.kitchen_7_6_1_G_b = false; $scope.kitchen_7_6_1_G_c = false; }
				$scope.kitchen_7_7_1_text = data.kitchen_7_7_1_text;
				if(data.kitchen_7_7_1_A == 0){ $scope.kitchen_7_7_1_A = data.kitchen_7_7_1_A; $scope.kitchen_7_7_1_A = true; $scope.kitchen_7_7_1_A_b = false; $scope.kitchen_7_7_1_A_c = false; $scope.kitchen_7_7_1_A_cm = ''; } else if(data.kitchen_7_7_1_A  == 10){ $scope.kitchen_7_7_1_A = data.kitchen_7_7_1_A; $scope.kitchen_7_7_1_A = false; $scope.kitchen_7_7_1_A_b = true; $scope.kitchen_7_7_1_A_c = false; $scope.kitchen_7_7_1_A_cm = ''; } else if(data.kitchen_7_7_1_A  == ){ $scope.kitchen_7_7_1_A = data.kitchen_7_7_1_A; $scope.kitchen_7_7_1_A = false; $scope.kitchen_7_7_1_A_b = false; $scope.kitchen_7_7_1_A_c = true; $scope.kitchen_7_7_1_A_cm = ''; }else if( ((data.kitchen_7_7_1_A  > 0 ) && (data.kitchen_7_7_1_A  < 10)) || ((data.kitchen_7_7_1_A  > 10 ) && (data.kitchen_7_7_1_A  < )) )
				{ $scope.kitchen_7_7_1_A_cm = data.kitchen_7_7_1_A; $scope.kitchen_7_7_1_A = false; $scope.kitchen_7_7_1_A_b = false;  $scope.kitchen_7_7_1_A_c = false; $scope.kitchen_7_7_1_A = ''; }else{ $scope.kitchen_7_7_1_A = ''; $scope.kitchen_7_7_1_A_cm = ''; $scope.kitchen_7_7_1_A = false; $scope.kitchen_7_7_1_A_b = false; $scope.kitchen_7_7_1_A_c = false; }
				if(data.kitchen_7_7_1_B == 0){ $scope.kitchen_7_7_1_B = data.kitchen_7_7_1_B; $scope.kitchen_7_7_1_B = true; $scope.kitchen_7_7_1_B_b = false; $scope.kitchen_7_7_1_B_c = false; $scope.kitchen_7_7_1_B_cm = ''; } else if(data.kitchen_7_7_1_B  == 10){ $scope.kitchen_7_7_1_B = data.kitchen_7_7_1_B; $scope.kitchen_7_7_1_B = false; $scope.kitchen_7_7_1_B_b = true; $scope.kitchen_7_7_1_B_c = false; $scope.kitchen_7_7_1_B_cm = ''; } else if(data.kitchen_7_7_1_B  == ){ $scope.kitchen_7_7_1_B = data.kitchen_7_7_1_B; $scope.kitchen_7_7_1_B = false; $scope.kitchen_7_7_1_B_b = false; $scope.kitchen_7_7_1_B_c = true; $scope.kitchen_7_7_1_B_cm = ''; }else if( ((data.kitchen_7_7_1_B  > 0 ) && (data.kitchen_7_7_1_B  < 10)) || ((data.kitchen_7_7_1_B  > 10 ) && (data.kitchen_7_7_1_B  < )) )
				{ $scope.kitchen_7_7_1_B_cm = data.kitchen_7_7_1_B; $scope.kitchen_7_7_1_B = false; $scope.kitchen_7_7_1_B_b = false;  $scope.kitchen_7_7_1_B_c = false; $scope.kitchen_7_7_1_B = ''; }else{ $scope.kitchen_7_7_1_B = ''; $scope.kitchen_7_7_1_B_cm = ''; $scope.kitchen_7_7_1_B = false; $scope.kitchen_7_7_1_B_b = false; $scope.kitchen_7_7_1_B_c = false; }
				if(data.kitchen_7_7_1_C == 2){ $scope.kitchen_7_7_1_C = data.kitchen_7_7_1_C; $scope.kitchen_7_7_1_C = true; $scope.kitchen_7_7_1_C_b = false; $scope.kitchen_7_7_1_C_c = false; $scope.kitchen_7_7_1_C_cm = ''; } else if(data.kitchen_7_7_1_C  == 3){ $scope.kitchen_7_7_1_C = data.kitchen_7_7_1_C; $scope.kitchen_7_7_1_C = false; $scope.kitchen_7_7_1_C_b = true; $scope.kitchen_7_7_1_C_c = false; $scope.kitchen_7_7_1_C_cm = ''; } else if(data.kitchen_7_7_1_C  == 5){ 
				$scope.kitchen_7_7_1_C = data.kitchen_7_7_1_C; $scope.kitchen_7_7_1_C = false; $scope.kitchen_7_7_1_C_b = false; $scope.kitchen_7_7_1_C_c = true; $scope.kitchen_7_7_1_C_cm = ''; } else if( ((data.kitchen_7_7_1_C  >= 0 ) && (data.kitchen_7_7_1_C  < 2)) || ((data.kitchen_7_7_1_C  > 2 ) && (data.kitchen_7_7_1_C  < 3)) || ((data.kitchen_7_7_1_C  > 3 ) && (data.kitchen_7_7_1_C  < 5)) ){ $scope.kitchen_7_7_1_C_cm = data.kitchen_7_7_1_C; $scope.kitchen_7_7_1_C = false; $scope.kitchen_7_7_1_C_b = false; $scope.kitchen_7_7_1_C_c = false; $scope.kitchen_7_7_1_C = ''; }else{ $scope.kitchen_7_7_1_C = ''; $scope.kitchen_7_7_1_C_cm = ''; $scope.kitchen_7_7_1_C = false; $scope.kitchen_7_7_1_C_b = false; $scope.kitchen_7_7_1_C_c = false;}
				if(data.kitchen_7_7_1_D == 0){ $scope.kitchen_7_7_1_D = data.kitchen_7_7_1_D; $scope.kitchen_7_7_1_D = true; $scope.kitchen_7_7_1_D_b = false; $scope.kitchen_7_7_1_D_c = false; $scope.kitchen_7_7_1_D_cm = ''; } else if(data.kitchen_7_7_1_D  == 3){ $scope.kitchen_7_7_1_D = data.kitchen_7_7_1_D; $scope.kitchen_7_7_1_D = false; $scope.kitchen_7_7_1_D_b = true; $scope.kitchen_7_7_1_D_c = false; $scope.kitchen_7_7_1_D_cm = ''; } else if(data.kitchen_7_7_1_D  == 5){ $scope.kitchen_7_7_1_D = data.kitchen_7_7_1_D; $scope.kitchen_7_7_1_D = false; $scope.kitchen_7_7_1_D_b = false; $scope.kitchen_7_7_1_D_c = true; $scope.kitchen_7_7_1_D_cm = ''; }else if( ((data.kitchen_7_7_1_D  > 0 ) && (data.kitchen_7_7_1_D  < 3)) || ((data.kitchen_7_7_1_D  > 3 ) && (data.kitchen_7_7_1_D  < 5)) )
				{ $scope.kitchen_7_7_1_D_cm = data.kitchen_7_7_1_D; $scope.kitchen_7_7_1_D = false; $scope.kitchen_7_7_1_D_b = false;  $scope.kitchen_7_7_1_D_c = false; $scope.kitchen_7_7_1_D = ''; }else{ $scope.kitchen_7_7_1_D = ''; $scope.kitchen_7_7_1_D_cm = ''; $scope.kitchen_7_7_1_D = false; $scope.kitchen_7_7_1_D_b = false; $scope.kitchen_7_7_1_D_c = false; }
				if(data.kitchen_7_7_1_E == 0){ $scope.kitchen_7_7_1_E = data.kitchen_7_7_1_E; $scope.kitchen_7_7_1_E = true; $scope.kitchen_7_7_1_E_b = false; $scope.kitchen_7_7_1_E_c = false; $scope.kitchen_7_7_1_E_cm = ''; } else if(data.kitchen_7_7_1_E  == 5){ $scope.kitchen_7_7_1_E = data.kitchen_7_7_1_E; $scope.kitchen_7_7_1_E = false; $scope.kitchen_7_7_1_E_b = true; $scope.kitchen_7_7_1_E_c = false; $scope.kitchen_7_7_1_E_cm = ''; } else if(data.kitchen_7_7_1_E  == 10){ $scope.kitchen_7_7_1_E = data.kitchen_7_7_1_E; $scope.kitchen_7_7_1_E = false; $scope.kitchen_7_7_1_E_b = false; $scope.kitchen_7_7_1_E_c = true; $scope.kitchen_7_7_1_E_cm = ''; }else if( ((data.kitchen_7_7_1_E  > 0 ) && (data.kitchen_7_7_1_E  < 5)) || ((data.kitchen_7_7_1_E  > 5 ) && (data.kitchen_7_7_1_E  < 10)) )
				{ $scope.kitchen_7_7_1_E_cm = data.kitchen_7_7_1_E; $scope.kitchen_7_7_1_E = false; $scope.kitchen_7_7_1_E_b = false;  $scope.kitchen_7_7_1_E_c = false; $scope.kitchen_7_7_1_E = ''; }else{ $scope.kitchen_7_7_1_E = ''; $scope.kitchen_7_7_1_E_cm = ''; $scope.kitchen_7_7_1_E = false; $scope.kitchen_7_7_1_E_b = false; $scope.kitchen_7_7_1_E_c = false; }
				$scope.kitchen_7_8_1_text = data.kitchen_7_8_1_text;
				if(data.kitchen_7_8_1_A == 0){ $scope.kitchen_7_8_1_A = data.kitchen_7_8_1_A; $scope.kitchen_7_8_1_A = true; $scope.kitchen_7_8_1_A_b = false; $scope.kitchen_7_8_1_A_c = false; $scope.kitchen_7_8_1_A_cm = ''; } else if(data.kitchen_7_8_1_A  == 3){ $scope.kitchen_7_8_1_A = data.kitchen_7_8_1_A; $scope.kitchen_7_8_1_A = false; $scope.kitchen_7_8_1_A_b = true; $scope.kitchen_7_8_1_A_c = false; $scope.kitchen_7_8_1_A_cm = ''; } else if(data.kitchen_7_8_1_A  == ){ $scope.kitchen_7_8_1_A = data.kitchen_7_8_1_A; $scope.kitchen_7_8_1_A = false; $scope.kitchen_7_8_1_A_b = false; $scope.kitchen_7_8_1_A_c = true; $scope.kitchen_7_8_1_A_cm = ''; }else if( ((data.kitchen_7_8_1_A  > 0 ) && (data.kitchen_7_8_1_A  < 3)) || ((data.kitchen_7_8_1_A  > 3 ) && (data.kitchen_7_8_1_A  < )) )
				{ $scope.kitchen_7_8_1_A_cm = data.kitchen_7_8_1_A; $scope.kitchen_7_8_1_A = false; $scope.kitchen_7_8_1_A_b = false;  $scope.kitchen_7_8_1_A_c = false; $scope.kitchen_7_8_1_A = ''; }else{ $scope.kitchen_7_8_1_A = ''; $scope.kitchen_7_8_1_A_cm = ''; $scope.kitchen_7_8_1_A = false; $scope.kitchen_7_8_1_A_b = false; $scope.kitchen_7_8_1_A_c = false; }
				if(data.kitchen_7_8_1_B == 0){ $scope.kitchen_7_8_1_B = data.kitchen_7_8_1_B; $scope.kitchen_7_8_1_B = true; $scope.kitchen_7_8_1_B_b = false; $scope.kitchen_7_8_1_B_c = false; $scope.kitchen_7_8_1_B_cm = ''; } else if(data.kitchen_7_8_1_B  == 3){ $scope.kitchen_7_8_1_B = data.kitchen_7_8_1_B; $scope.kitchen_7_8_1_B = false; $scope.kitchen_7_8_1_B_b = true; $scope.kitchen_7_8_1_B_c = false; $scope.kitchen_7_8_1_B_cm = ''; } else if(data.kitchen_7_8_1_B  == ){ $scope.kitchen_7_8_1_B = data.kitchen_7_8_1_B; $scope.kitchen_7_8_1_B = false; $scope.kitchen_7_8_1_B_b = false; $scope.kitchen_7_8_1_B_c = true; $scope.kitchen_7_8_1_B_cm = ''; }else if( ((data.kitchen_7_8_1_B  > 0 ) && (data.kitchen_7_8_1_B  < 3)) || ((data.kitchen_7_8_1_B  > 3 ) && (data.kitchen_7_8_1_B  < )) )
				{ $scope.kitchen_7_8_1_B_cm = data.kitchen_7_8_1_B; $scope.kitchen_7_8_1_B = false; $scope.kitchen_7_8_1_B_b = false;  $scope.kitchen_7_8_1_B_c = false; $scope.kitchen_7_8_1_B = ''; }else{ $scope.kitchen_7_8_1_B = ''; $scope.kitchen_7_8_1_B_cm = ''; $scope.kitchen_7_8_1_B = false; $scope.kitchen_7_8_1_B_b = false; $scope.kitchen_7_8_1_B_c = false; }
				if(data.kitchen_7_8_1_C_a == 3){ $scope.kitchen_7_8_1_C_a = data.kitchen_7_8_1_C_a; $scope.kitchen_7_8_1_C_a= true; $scope.kitchen_7_8_1_C_a_cm = ''; } else if((data.kitchen_7_8_1_C_a > 0 ) && (data.kitchen_7_8_1_C_a < 3)){ $scope.kitchen_7_8_1_C_a_cm = data.kitchen_7_8_1_C_a; $scope.kitchen_7_8_1_C_a= false; $scope.kitchen_7_8_1_C_a= ''; }else{ $scope.kitchen_7_8_1_C_a= ''; $scope.kitchen_7_8_1_C_a_cm = ''; $scope.kitchen_7_8_1_C_a= false; }
				if(data.kitchen_7_8_1_C_b == 3){ $scope.kitchen_7_8_1_C_b = data.kitchen_7_8_1_C_b; $scope.kitchen_7_8_1_C_b= true; $scope.kitchen_7_8_1_C_b_cm = ''; } else if((data.kitchen_7_8_1_C_b > 0 ) && (data.kitchen_7_8_1_C_b < 3)){ $scope.kitchen_7_8_1_C_b_cm = data.kitchen_7_8_1_C_b; $scope.kitchen_7_8_1_C_b= false; $scope.kitchen_7_8_1_C_b= ''; }else{ $scope.kitchen_7_8_1_C_b= ''; $scope.kitchen_7_8_1_C_b_cm = ''; $scope.kitchen_7_8_1_C_b= false; }
				if(data.kitchen_7_8_1_D == 0){ $scope.kitchen_7_8_1_D = data.kitchen_7_8_1_D; $scope.kitchen_7_8_1_D = true; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = false; $scope.kitchen_7_8_1_D_cm = ''; } else if(data.kitchen_7_8_1_D  == 2){ $scope.kitchen_7_8_1_D = data.kitchen_7_8_1_D; $scope.kitchen_7_8_1_D = false; $scope.kitchen_7_8_1_D_b = true; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = false; $scope.kitchen_7_8_1_D_cm = ''; } else if(data.kitchen_7_8_1_D  == 3){ $scope.kitchen_7_8_1_D = data.kitchen_7_8_1_D; $scope.kitchen_7_8_1_D = false; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = true; $scope.kitchen_7_8_1_D_d = false; $scope.kitchen_7_8_1_D_cm = ''; }else if(data.kitchen_7_8_1_D  == 5){ $scope.kitchen_7_8_1_D = data.kitchen_7_8_1_D; $scope.kitchen_7_8_1_D = false; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = true; $scope.kitchen_7_8_1_D_cm = ''; } else if( ((data.kitchen_7_8_1_D  > 0 ) && (data.kitchen_7_8_1_D  < 2)) || ((data.kitchen_7_8_1_D  > 2 ) && (data.kitchen_7_8_1_D  < 3)) || ((data.kitchen_7_8_1_D  > 3 ) && (data.kitchen_7_8_1_D  < 5)) )
				{ $scope.kitchen_7_8_1_D_cm = data.kitchen_7_8_1_D; $scope.kitchen_7_8_1_D = false; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = false; $scope.kitchen_7_8_1_D = ''; }else{ $scope.kitchen_7_8_1_D = ''; $scope.kitchen_7_8_1_D_cm = ''; $scope.kitchen_7_8_1_D = false; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = false;}
				if(data.kitchen_7_8_1_E  == 2){ $scope.kitchen_7_8_1_E  = data.kitchen_7_8_1_E ; $scope.kitchen_7_8_1_E = true; $scope.kitchen_7_8_1_E_b = false; $scope.kitchen_7_8_1_E_cm = ''; } else if(data.kitchen_7_8_1_E  == 4){ $scope.kitchen_7_8_1_E  = data.kitchen_7_8_1_E ; $scope.kitchen_7_8_1_E = false; $scope.kitchen_7_8_1_E_b = true; $scope.kitchen_7_8_1_E_cm = ''; }else if( ((data.kitchen_7_8_1_E  > 0 ) && (data.kitchen_7_8_1_E  < 2)) || ((data.kitchen_7_8_1_E  > 2 ) && (data.kitchen_7_8_1_E  < 4)))
				{ $scope.kitchen_7_8_1_E_cm = data.kitchen_7_8_1_E ; $scope.kitchen_7_8_1_E = false; $scope.kitchen_7_8_1_E_b = false; $scope.kitchen_7_8_1_E  = ''; }else{ $scope.kitchen_7_8_1_E  = ''; $scope.kitchen_7_8_1_E_cm = ''; $scope.kitchen_7_8_1_E = false; $scope.kitchen_7_8_1_E_b = false; }
				if(data.kitchen_7_8_1_F == 0){ $scope.kitchen_7_8_1_F = data.kitchen_7_8_1_F; $scope.kitchen_7_8_1_F = true; $scope.kitchen_7_8_1_F_b = false; $scope.kitchen_7_8_1_F_c = false; $scope.kitchen_7_8_1_F_cm = ''; } else if(data.kitchen_7_8_1_F  == 3){ $scope.kitchen_7_8_1_F = data.kitchen_7_8_1_F; $scope.kitchen_7_8_1_F = false; $scope.kitchen_7_8_1_F_b = true; $scope.kitchen_7_8_1_F_c = false; $scope.kitchen_7_8_1_F_cm = ''; } else if(data.kitchen_7_8_1_F  == ){ $scope.kitchen_7_8_1_F = data.kitchen_7_8_1_F; $scope.kitchen_7_8_1_F = false; $scope.kitchen_7_8_1_F_b = false; $scope.kitchen_7_8_1_F_c = true; $scope.kitchen_7_8_1_F_cm = ''; }else if( ((data.kitchen_7_8_1_F  > 0 ) && (data.kitchen_7_8_1_F  < 3)) || ((data.kitchen_7_8_1_F  > 3 ) && (data.kitchen_7_8_1_F  < )) )
				{ $scope.kitchen_7_8_1_F_cm = data.kitchen_7_8_1_F; $scope.kitchen_7_8_1_F = false; $scope.kitchen_7_8_1_F_b = false;  $scope.kitchen_7_8_1_F_c = false; $scope.kitchen_7_8_1_F = ''; }else{ $scope.kitchen_7_8_1_F = ''; $scope.kitchen_7_8_1_F_cm = ''; $scope.kitchen_7_8_1_F = false; $scope.kitchen_7_8_1_F_b = false; $scope.kitchen_7_8_1_F_c = false; }
				if(data.kitchen_7_8_1_G == 0){ $scope.kitchen_7_8_1_G = data.kitchen_7_8_1_G; $scope.kitchen_7_8_1_G = true; $scope.kitchen_7_8_1_G_b = false; $scope.kitchen_7_8_1_G_c = false; $scope.kitchen_7_8_1_G_cm = ''; } else if(data.kitchen_7_8_1_G  == 3){ $scope.kitchen_7_8_1_G = data.kitchen_7_8_1_G; $scope.kitchen_7_8_1_G = false; $scope.kitchen_7_8_1_G_b = true; $scope.kitchen_7_8_1_G_c = false; $scope.kitchen_7_8_1_G_cm = ''; } else if(data.kitchen_7_8_1_G  == ){ $scope.kitchen_7_8_1_G = data.kitchen_7_8_1_G; $scope.kitchen_7_8_1_G = false; $scope.kitchen_7_8_1_G_b = false; $scope.kitchen_7_8_1_G_c = true; $scope.kitchen_7_8_1_G_cm = ''; }else if( ((data.kitchen_7_8_1_G  > 0 ) && (data.kitchen_7_8_1_G  < 3)) || ((data.kitchen_7_8_1_G  > 3 ) && (data.kitchen_7_8_1_G  < )) )
				{ $scope.kitchen_7_8_1_G_cm = data.kitchen_7_8_1_G; $scope.kitchen_7_8_1_G = false; $scope.kitchen_7_8_1_G_b = false;  $scope.kitchen_7_8_1_G_c = false; $scope.kitchen_7_8_1_G = ''; }else{ $scope.kitchen_7_8_1_G = ''; $scope.kitchen_7_8_1_G_cm = ''; $scope.kitchen_7_8_1_G = false; $scope.kitchen_7_8_1_G_b = false; $scope.kitchen_7_8_1_G_c = false; }
				if(data.kitchen_7_8_1_H == 1){ $scope.kitchen_7_8_1_H = data.kitchen_7_8_1_H; $scope.kitchen_7_8_1_H = true; $scope.kitchen_7_8_1_H_b = false; $scope.kitchen_7_8_1_H_c = false; $scope.kitchen_7_8_1_H_cm = ''; } else if(data.kitchen_7_8_1_H  == 2){ $scope.kitchen_7_8_1_H = data.kitchen_7_8_1_H; $scope.kitchen_7_8_1_H = false; $scope.kitchen_7_8_1_H_b = true; $scope.kitchen_7_8_1_H_c = false; $scope.kitchen_7_8_1_H_cm = ''; } else if(data.kitchen_7_8_1_H  == 3){ 
				$scope.kitchen_7_8_1_H = data.kitchen_7_8_1_H; $scope.kitchen_7_8_1_H = false; $scope.kitchen_7_8_1_H_b = false; $scope.kitchen_7_8_1_H_c = true; $scope.kitchen_7_8_1_H_cm = ''; } else if( ((data.kitchen_7_8_1_H  >= 0 ) && (data.kitchen_7_8_1_H  < 1)) || ((data.kitchen_7_8_1_H  > 1 ) && (data.kitchen_7_8_1_H  < 2)) || ((data.kitchen_7_8_1_H  > 2 ) && (data.kitchen_7_8_1_H  < 3)) ){ $scope.kitchen_7_8_1_H_cm = data.kitchen_7_8_1_H; $scope.kitchen_7_8_1_H = false; $scope.kitchen_7_8_1_H_b = false; $scope.kitchen_7_8_1_H_c = false; $scope.kitchen_7_8_1_H = ''; }else{ $scope.kitchen_7_8_1_H = ''; $scope.kitchen_7_8_1_H_cm = ''; $scope.kitchen_7_8_1_H = false; $scope.kitchen_7_8_1_H_b = false; $scope.kitchen_7_8_1_H_c = false;}
				$scope.kitchen_7_9_1_text = data.kitchen_7_9_1_text;
				if(data.kitchen_7_9_1_A == 0){ $scope.kitchen_7_9_1_A = data.kitchen_7_9_1_A; $scope.kitchen_7_9_1_A = true; $scope.kitchen_7_9_1_A_b = false; $scope.kitchen_7_9_1_A_c = false; $scope.kitchen_7_9_1_A_cm = ''; } else if(data.kitchen_7_9_1_A  == 4){ $scope.kitchen_7_9_1_A = data.kitchen_7_9_1_A; $scope.kitchen_7_9_1_A = false; $scope.kitchen_7_9_1_A_b = true; $scope.kitchen_7_9_1_A_c = false; $scope.kitchen_7_9_1_A_cm = ''; } else if(data.kitchen_7_9_1_A  == 8){ $scope.kitchen_7_9_1_A = data.kitchen_7_9_1_A; $scope.kitchen_7_9_1_A = false; $scope.kitchen_7_9_1_A_b = false; $scope.kitchen_7_9_1_A_c = true; $scope.kitchen_7_9_1_A_cm = ''; }else if( ((data.kitchen_7_9_1_A  > 0 ) && (data.kitchen_7_9_1_A  < 4)) || ((data.kitchen_7_9_1_A  > 4 ) && (data.kitchen_7_9_1_A  < 8)) )
				{ $scope.kitchen_7_9_1_A_cm = data.kitchen_7_9_1_A; $scope.kitchen_7_9_1_A = false; $scope.kitchen_7_9_1_A_b = false;  $scope.kitchen_7_9_1_A_c = false; $scope.kitchen_7_9_1_A = ''; }else{ $scope.kitchen_7_9_1_A = ''; $scope.kitchen_7_9_1_A_cm = ''; $scope.kitchen_7_9_1_A = false; $scope.kitchen_7_9_1_A_b = false; $scope.kitchen_7_9_1_A_c = false; }
				if(data.kitchen_7_9_1_B == 0){ $scope.kitchen_7_9_1_B = data.kitchen_7_9_1_B; $scope.kitchen_7_9_1_B = true; $scope.kitchen_7_9_1_B_b = false; $scope.kitchen_7_9_1_B_c = false; $scope.kitchen_7_9_1_B_cm = ''; } else if(data.kitchen_7_9_1_B  == 2){ $scope.kitchen_7_9_1_B = data.kitchen_7_9_1_B; $scope.kitchen_7_9_1_B = false; $scope.kitchen_7_9_1_B_b = true; $scope.kitchen_7_9_1_B_c = false; $scope.kitchen_7_9_1_B_cm = ''; } else if(data.kitchen_7_9_1_B  == ){ $scope.kitchen_7_9_1_B = data.kitchen_7_9_1_B; $scope.kitchen_7_9_1_B = false; $scope.kitchen_7_9_1_B_b = false; $scope.kitchen_7_9_1_B_c = true; $scope.kitchen_7_9_1_B_cm = ''; }else if( ((data.kitchen_7_9_1_B  > 0 ) && (data.kitchen_7_9_1_B  < 2)) || ((data.kitchen_7_9_1_B  > 2 ) && (data.kitchen_7_9_1_B  < )) )
				{ $scope.kitchen_7_9_1_B_cm = data.kitchen_7_9_1_B; $scope.kitchen_7_9_1_B = false; $scope.kitchen_7_9_1_B_b = false;  $scope.kitchen_7_9_1_B_c = false; $scope.kitchen_7_9_1_B = ''; }else{ $scope.kitchen_7_9_1_B = ''; $scope.kitchen_7_9_1_B_cm = ''; $scope.kitchen_7_9_1_B = false; $scope.kitchen_7_9_1_B_b = false; $scope.kitchen_7_9_1_B_c = false; }
				if(data.kitchen_7_9_1_C == 0){ $scope.kitchen_7_9_1_C = data.kitchen_7_9_1_C; $scope.kitchen_7_9_1_C = true; $scope.kitchen_7_9_1_C_b = false; $scope.kitchen_7_9_1_C_c = false; $scope.kitchen_7_9_1_C_cm = ''; } else if(data.kitchen_7_9_1_C  == 8){ $scope.kitchen_7_9_1_C = data.kitchen_7_9_1_C; $scope.kitchen_7_9_1_C = false; $scope.kitchen_7_9_1_C_b = true; $scope.kitchen_7_9_1_C_c = false; $scope.kitchen_7_9_1_C_cm = ''; } else if(data.kitchen_7_9_1_C  == ){ $scope.kitchen_7_9_1_C = data.kitchen_7_9_1_C; $scope.kitchen_7_9_1_C = false; $scope.kitchen_7_9_1_C_b = false; $scope.kitchen_7_9_1_C_c = true; $scope.kitchen_7_9_1_C_cm = ''; }else if( ((data.kitchen_7_9_1_C  > 0 ) && (data.kitchen_7_9_1_C  < 8)) || ((data.kitchen_7_9_1_C  > 8 ) && (data.kitchen_7_9_1_C  < )) )
				{ $scope.kitchen_7_9_1_C_cm = data.kitchen_7_9_1_C; $scope.kitchen_7_9_1_C = false; $scope.kitchen_7_9_1_C_b = false;  $scope.kitchen_7_9_1_C_c = false; $scope.kitchen_7_9_1_C = ''; }else{ $scope.kitchen_7_9_1_C = ''; $scope.kitchen_7_9_1_C_cm = ''; $scope.kitchen_7_9_1_C = false; $scope.kitchen_7_9_1_C_b = false; $scope.kitchen_7_9_1_C_c = false; }
				if(data.kitchen_7_9_1_D == 0){ $scope.kitchen_7_9_1_D = data.kitchen_7_9_1_D; $scope.kitchen_7_9_1_D = true; $scope.kitchen_7_9_1_D_b = false; $scope.kitchen_7_9_1_D_c = false; $scope.kitchen_7_9_1_D_cm = ''; } else if(data.kitchen_7_9_1_D  == 2){ $scope.kitchen_7_9_1_D = data.kitchen_7_9_1_D; $scope.kitchen_7_9_1_D = false; $scope.kitchen_7_9_1_D_b = true; $scope.kitchen_7_9_1_D_c = false; $scope.kitchen_7_9_1_D_cm = ''; } else if(data.kitchen_7_9_1_D  == 4){ $scope.kitchen_7_9_1_D = data.kitchen_7_9_1_D; $scope.kitchen_7_9_1_D = false; $scope.kitchen_7_9_1_D_b = false; $scope.kitchen_7_9_1_D_c = true; $scope.kitchen_7_9_1_D_cm = ''; }else if( ((data.kitchen_7_9_1_D  > 0 ) && (data.kitchen_7_9_1_D  < 2)) || ((data.kitchen_7_9_1_D  > 2 ) && (data.kitchen_7_9_1_D  < 4)) )
				{ $scope.kitchen_7_9_1_D_cm = data.kitchen_7_9_1_D; $scope.kitchen_7_9_1_D = false; $scope.kitchen_7_9_1_D_b = false;  $scope.kitchen_7_9_1_D_c = false; $scope.kitchen_7_9_1_D = ''; }else{ $scope.kitchen_7_9_1_D = ''; $scope.kitchen_7_9_1_D_cm = ''; $scope.kitchen_7_9_1_D = false; $scope.kitchen_7_9_1_D_b = false; $scope.kitchen_7_9_1_D_c = false; }
				if(data.kitchen_7_9_1_E == 0){ $scope.kitchen_7_9_1_E = data.kitchen_7_9_1_E; $scope.kitchen_7_9_1_E = true; $scope.kitchen_7_9_1_E_b = false; $scope.kitchen_7_9_1_E_c = false; $scope.kitchen_7_9_1_E_cm = ''; } else if(data.kitchen_7_9_1_E  == 4){ $scope.kitchen_7_9_1_E = data.kitchen_7_9_1_E; $scope.kitchen_7_9_1_E = false; $scope.kitchen_7_9_1_E_b = true; $scope.kitchen_7_9_1_E_c = false; $scope.kitchen_7_9_1_E_cm = ''; } else if(data.kitchen_7_9_1_E  == 8){ $scope.kitchen_7_9_1_E = data.kitchen_7_9_1_E; $scope.kitchen_7_9_1_E = false; $scope.kitchen_7_9_1_E_b = false; $scope.kitchen_7_9_1_E_c = true; $scope.kitchen_7_9_1_E_cm = ''; }else if( ((data.kitchen_7_9_1_E  > 0 ) && (data.kitchen_7_9_1_E  < 4)) || ((data.kitchen_7_9_1_E  > 4 ) && (data.kitchen_7_9_1_E  < 8)) )
				{ $scope.kitchen_7_9_1_E_cm = data.kitchen_7_9_1_E; $scope.kitchen_7_9_1_E = false; $scope.kitchen_7_9_1_E_b = false;  $scope.kitchen_7_9_1_E_c = false; $scope.kitchen_7_9_1_E = ''; }else{ $scope.kitchen_7_9_1_E = ''; $scope.kitchen_7_9_1_E_cm = ''; $scope.kitchen_7_9_1_E = false; $scope.kitchen_7_9_1_E_b = false; $scope.kitchen_7_9_1_E_c = false; }
				$scope.kitchen_7_10_1_text = data.kitchen_7_10_1_text;
				if(data.kitchen_7_10_1_A_a == 3){ $scope.kitchen_7_10_1_A_a = data.kitchen_7_10_1_A_a; $scope.kitchen_7_10_1_A_a= true; $scope.kitchen_7_10_1_A_a_cm = ''; } else if((data.kitchen_7_10_1_A_a > 0 ) && (data.kitchen_7_10_1_A_a < 3)){ $scope.kitchen_7_10_1_A_a_cm = data.kitchen_7_10_1_A_a; $scope.kitchen_7_10_1_A_a= false; $scope.kitchen_7_10_1_A_a= ''; }else{ $scope.kitchen_7_10_1_A_a= ''; $scope.kitchen_7_10_1_A_a_cm = ''; $scope.kitchen_7_10_1_A_a= false; }
				if(data.kitchen_7_10_1_A_b == 3){ $scope.kitchen_7_10_1_A_b = data.kitchen_7_10_1_A_b; $scope.kitchen_7_10_1_A_b= true; $scope.kitchen_7_10_1_A_b_cm = ''; } else if((data.kitchen_7_10_1_A_b > 0 ) && (data.kitchen_7_10_1_A_b < 3)){ $scope.kitchen_7_10_1_A_b_cm = data.kitchen_7_10_1_A_b; $scope.kitchen_7_10_1_A_b= false; $scope.kitchen_7_10_1_A_b= ''; }else{ $scope.kitchen_7_10_1_A_b= ''; $scope.kitchen_7_10_1_A_b_cm = ''; $scope.kitchen_7_10_1_A_b= false; }
				if(data.kitchen_7_10_1_A_c == 2){ $scope.kitchen_7_10_1_A_c = data.kitchen_7_10_1_A_c; $scope.kitchen_7_10_1_A_c= true; $scope.kitchen_7_10_1_A_c_cm = ''; } else if((data.kitchen_7_10_1_A_c > 0 ) && (data.kitchen_7_10_1_A_c < 2)){ $scope.kitchen_7_10_1_A_c_cm = data.kitchen_7_10_1_A_c; $scope.kitchen_7_10_1_A_c= false; $scope.kitchen_7_10_1_A_c= ''; }else{ $scope.kitchen_7_10_1_A_c= ''; $scope.kitchen_7_10_1_A_c_cm = ''; $scope.kitchen_7_10_1_A_c= false; }
				if(data.kitchen_7_10_1_A_d == 2){ $scope.kitchen_7_10_1_A_d = data.kitchen_7_10_1_A_d; $scope.kitchen_7_10_1_A_d= true; $scope.kitchen_7_10_1_A_d_cm = ''; } else if((data.kitchen_7_10_1_A_d > 0 ) && (data.kitchen_7_10_1_A_d < 2)){ $scope.kitchen_7_10_1_A_d_cm = data.kitchen_7_10_1_A_d; $scope.kitchen_7_10_1_A_d= false; $scope.kitchen_7_10_1_A_d= ''; }else{ $scope.kitchen_7_10_1_A_d= ''; $scope.kitchen_7_10_1_A_d_cm = ''; $scope.kitchen_7_10_1_A_d= false; }
				if(data.kitchen_7_10_1_B == 2){ $scope.kitchen_7_10_1_B = data.kitchen_7_10_1_B; $scope.kitchen_7_10_1_B = true; $scope.kitchen_7_10_1_B_b = false; $scope.kitchen_7_10_1_B_c = false; $scope.kitchen_7_10_1_B_cm = ''; } else if(data.kitchen_7_10_1_B  == 3){ $scope.kitchen_7_10_1_B = data.kitchen_7_10_1_B; $scope.kitchen_7_10_1_B = false; $scope.kitchen_7_10_1_B_b = true; $scope.kitchen_7_10_1_B_c = false; $scope.kitchen_7_10_1_B_cm = ''; } else if(data.kitchen_7_10_1_B  == 5){ 
				$scope.kitchen_7_10_1_B = data.kitchen_7_10_1_B; $scope.kitchen_7_10_1_B = false; $scope.kitchen_7_10_1_B_b = false; $scope.kitchen_7_10_1_B_c = true; $scope.kitchen_7_10_1_B_cm = ''; } else if( ((data.kitchen_7_10_1_B  >= 0 ) && (data.kitchen_7_10_1_B  < 2)) || ((data.kitchen_7_10_1_B  > 2 ) && (data.kitchen_7_10_1_B  < 3)) || ((data.kitchen_7_10_1_B  > 3 ) && (data.kitchen_7_10_1_B  < 5)) ){ $scope.kitchen_7_10_1_B_cm = data.kitchen_7_10_1_B; $scope.kitchen_7_10_1_B = false; $scope.kitchen_7_10_1_B_b = false; $scope.kitchen_7_10_1_B_c = false; $scope.kitchen_7_10_1_B = ''; }else{ $scope.kitchen_7_10_1_B = ''; $scope.kitchen_7_10_1_B_cm = ''; $scope.kitchen_7_10_1_B = false; $scope.kitchen_7_10_1_B_b = false; $scope.kitchen_7_10_1_B_c = false;}
				if(data.kitchen_7_10_1_C == 0){ $scope.kitchen_7_10_1_C = data.kitchen_7_10_1_C; $scope.kitchen_7_10_1_C = true; $scope.kitchen_7_10_1_C_b = false; $scope.kitchen_7_10_1_C_c = false; $scope.kitchen_7_10_1_C_cm = ''; } else if(data.kitchen_7_10_1_C  == 5){ $scope.kitchen_7_10_1_C = data.kitchen_7_10_1_C; $scope.kitchen_7_10_1_C = false; $scope.kitchen_7_10_1_C_b = true; $scope.kitchen_7_10_1_C_c = false; $scope.kitchen_7_10_1_C_cm = ''; } else if(data.kitchen_7_10_1_C  == ){ $scope.kitchen_7_10_1_C = data.kitchen_7_10_1_C; $scope.kitchen_7_10_1_C = false; $scope.kitchen_7_10_1_C_b = false; $scope.kitchen_7_10_1_C_c = true; $scope.kitchen_7_10_1_C_cm = ''; }else if( ((data.kitchen_7_10_1_C  > 0 ) && (data.kitchen_7_10_1_C  < 5)) || ((data.kitchen_7_10_1_C  > 5 ) && (data.kitchen_7_10_1_C  < )) )
				{ $scope.kitchen_7_10_1_C_cm = data.kitchen_7_10_1_C; $scope.kitchen_7_10_1_C = false; $scope.kitchen_7_10_1_C_b = false;  $scope.kitchen_7_10_1_C_c = false; $scope.kitchen_7_10_1_C = ''; }else{ $scope.kitchen_7_10_1_C = ''; $scope.kitchen_7_10_1_C_cm = ''; $scope.kitchen_7_10_1_C = false; $scope.kitchen_7_10_1_C_b = false; $scope.kitchen_7_10_1_C_c = false; }
				if(data.kitchen_7_10_1_D == 0){ $scope.kitchen_7_10_1_D = data.kitchen_7_10_1_D; $scope.kitchen_7_10_1_D = true; $scope.kitchen_7_10_1_D_b = false; $scope.kitchen_7_10_1_D_c = false; $scope.kitchen_7_10_1_D_cm = ''; } else if(data.kitchen_7_10_1_D  == 5){ $scope.kitchen_7_10_1_D = data.kitchen_7_10_1_D; $scope.kitchen_7_10_1_D = false; $scope.kitchen_7_10_1_D_b = true; $scope.kitchen_7_10_1_D_c = false; $scope.kitchen_7_10_1_D_cm = ''; } else if(data.kitchen_7_10_1_D  == ){ $scope.kitchen_7_10_1_D = data.kitchen_7_10_1_D; $scope.kitchen_7_10_1_D = false; $scope.kitchen_7_10_1_D_b = false; $scope.kitchen_7_10_1_D_c = true; $scope.kitchen_7_10_1_D_cm = ''; }else if( ((data.kitchen_7_10_1_D  > 0 ) && (data.kitchen_7_10_1_D  < 5)) || ((data.kitchen_7_10_1_D  > 5 ) && (data.kitchen_7_10_1_D  < )) )
				{ $scope.kitchen_7_10_1_D_cm = data.kitchen_7_10_1_D; $scope.kitchen_7_10_1_D = false; $scope.kitchen_7_10_1_D_b = false;  $scope.kitchen_7_10_1_D_c = false; $scope.kitchen_7_10_1_D = ''; }else{ $scope.kitchen_7_10_1_D = ''; $scope.kitchen_7_10_1_D_cm = ''; $scope.kitchen_7_10_1_D = false; $scope.kitchen_7_10_1_D_b = false; $scope.kitchen_7_10_1_D_c = false; }
				if(data.kitchen_7_10_1_E == 0){ $scope.kitchen_7_10_1_E = data.kitchen_7_10_1_E; $scope.kitchen_7_10_1_E = true; $scope.kitchen_7_10_1_E_b = false; $scope.kitchen_7_10_1_E_c = false; $scope.kitchen_7_10_1_E_cm = ''; } else if(data.kitchen_7_10_1_E  == 5){ $scope.kitchen_7_10_1_E = data.kitchen_7_10_1_E; $scope.kitchen_7_10_1_E = false; $scope.kitchen_7_10_1_E_b = true; $scope.kitchen_7_10_1_E_c = false; $scope.kitchen_7_10_1_E_cm = ''; } else if(data.kitchen_7_10_1_E  == ){ $scope.kitchen_7_10_1_E = data.kitchen_7_10_1_E; $scope.kitchen_7_10_1_E = false; $scope.kitchen_7_10_1_E_b = false; $scope.kitchen_7_10_1_E_c = true; $scope.kitchen_7_10_1_E_cm = ''; }else if( ((data.kitchen_7_10_1_E  > 0 ) && (data.kitchen_7_10_1_E  < 5)) || ((data.kitchen_7_10_1_E  > 5 ) && (data.kitchen_7_10_1_E  < )) )
				{ $scope.kitchen_7_10_1_E_cm = data.kitchen_7_10_1_E; $scope.kitchen_7_10_1_E = false; $scope.kitchen_7_10_1_E_b = false;  $scope.kitchen_7_10_1_E_c = false; $scope.kitchen_7_10_1_E = ''; }else{ $scope.kitchen_7_10_1_E = ''; $scope.kitchen_7_10_1_E_cm = ''; $scope.kitchen_7_10_1_E = false; $scope.kitchen_7_10_1_E_b = false; $scope.kitchen_7_10_1_E_c = false; }
				if(data.kitchen_7_10_1_F == 0){ $scope.kitchen_7_10_1_F = data.kitchen_7_10_1_F; $scope.kitchen_7_10_1_F = true; $scope.kitchen_7_10_1_F_b = false; $scope.kitchen_7_10_1_F_c = false; $scope.kitchen_7_10_1_F_cm = ''; } else if(data.kitchen_7_10_1_F  == 3){ $scope.kitchen_7_10_1_F = data.kitchen_7_10_1_F; $scope.kitchen_7_10_1_F = false; $scope.kitchen_7_10_1_F_b = true; $scope.kitchen_7_10_1_F_c = false; $scope.kitchen_7_10_1_F_cm = ''; } else if(data.kitchen_7_10_1_F  == 5){ $scope.kitchen_7_10_1_F = data.kitchen_7_10_1_F; $scope.kitchen_7_10_1_F = false; $scope.kitchen_7_10_1_F_b = false; $scope.kitchen_7_10_1_F_c = true; $scope.kitchen_7_10_1_F_cm = ''; }else if( ((data.kitchen_7_10_1_F  > 0 ) && (data.kitchen_7_10_1_F  < 3)) || ((data.kitchen_7_10_1_F  > 3 ) && (data.kitchen_7_10_1_F  < 5)) )
				{ $scope.kitchen_7_10_1_F_cm = data.kitchen_7_10_1_F; $scope.kitchen_7_10_1_F = false; $scope.kitchen_7_10_1_F_b = false;  $scope.kitchen_7_10_1_F_c = false; $scope.kitchen_7_10_1_F = ''; }else{ $scope.kitchen_7_10_1_F = ''; $scope.kitchen_7_10_1_F_cm = ''; $scope.kitchen_7_10_1_F = false; $scope.kitchen_7_10_1_F_b = false; $scope.kitchen_7_10_1_F_c = false; }
				if(data.kitchen_7_10_1_G == 0){ $scope.kitchen_7_10_1_G = data.kitchen_7_10_1_G; $scope.kitchen_7_10_1_G = true; $scope.kitchen_7_10_1_G_b = false; $scope.kitchen_7_10_1_G_c = false; $scope.kitchen_7_10_1_G_cm = ''; } else if(data.kitchen_7_10_1_G  == 3){ $scope.kitchen_7_10_1_G = data.kitchen_7_10_1_G; $scope.kitchen_7_10_1_G = false; $scope.kitchen_7_10_1_G_b = true; $scope.kitchen_7_10_1_G_c = false; $scope.kitchen_7_10_1_G_cm = ''; } else if(data.kitchen_7_10_1_G  == 5){ $scope.kitchen_7_10_1_G = data.kitchen_7_10_1_G; $scope.kitchen_7_10_1_G = false; $scope.kitchen_7_10_1_G_b = false; $scope.kitchen_7_10_1_G_c = true; $scope.kitchen_7_10_1_G_cm = ''; }else if( ((data.kitchen_7_10_1_G  > 0 ) && (data.kitchen_7_10_1_G  < 3)) || ((data.kitchen_7_10_1_G  > 3 ) && (data.kitchen_7_10_1_G  < 5)) )
				{ $scope.kitchen_7_10_1_G_cm = data.kitchen_7_10_1_G; $scope.kitchen_7_10_1_G = false; $scope.kitchen_7_10_1_G_b = false;  $scope.kitchen_7_10_1_G_c = false; $scope.kitchen_7_10_1_G = ''; }else{ $scope.kitchen_7_10_1_G = ''; $scope.kitchen_7_10_1_G_cm = ''; $scope.kitchen_7_10_1_G = false; $scope.kitchen_7_10_1_G_b = false; $scope.kitchen_7_10_1_G_c = false; }
				$scope.kitchen_7_11_1_text = data.kitchen_7_11_1_text;
				if(data.kitchen_7_11_1_A_a == 2){ $scope.kitchen_7_11_1_A_a = data.kitchen_7_11_1_A_a; $scope.kitchen_7_11_1_A_a= true; $scope.kitchen_7_11_1_A_a_cm = ''; } else if((data.kitchen_7_11_1_A_a > 0 ) && (data.kitchen_7_11_1_A_a < 2)){ $scope.kitchen_7_11_1_A_a_cm = data.kitchen_7_11_1_A_a; $scope.kitchen_7_11_1_A_a= false; $scope.kitchen_7_11_1_A_a= ''; }else{ $scope.kitchen_7_11_1_A_a= ''; $scope.kitchen_7_11_1_A_a_cm = ''; $scope.kitchen_7_11_1_A_a= false; }
				if(data.kitchen_7_11_1_A_b == 3){ $scope.kitchen_7_11_1_A_b = data.kitchen_7_11_1_A_b; $scope.kitchen_7_11_1_A_b= true; $scope.kitchen_7_11_1_A_b_cm = ''; } else if((data.kitchen_7_11_1_A_b > 0 ) && (data.kitchen_7_11_1_A_b < 3)){ $scope.kitchen_7_11_1_A_b_cm = data.kitchen_7_11_1_A_b; $scope.kitchen_7_11_1_A_b= false; $scope.kitchen_7_11_1_A_b= ''; }else{ $scope.kitchen_7_11_1_A_b= ''; $scope.kitchen_7_11_1_A_b_cm = ''; $scope.kitchen_7_11_1_A_b= false; }
				if(data.kitchen_7_11_1_A_c == 4){ $scope.kitchen_7_11_1_A_c = data.kitchen_7_11_1_A_c; $scope.kitchen_7_11_1_A_c= true; $scope.kitchen_7_11_1_A_c_cm = ''; } else if((data.kitchen_7_11_1_A_c > 0 ) && (data.kitchen_7_11_1_A_c < 4)){ $scope.kitchen_7_11_1_A_c_cm = data.kitchen_7_11_1_A_c; $scope.kitchen_7_11_1_A_c= false; $scope.kitchen_7_11_1_A_c= ''; }else{ $scope.kitchen_7_11_1_A_c= ''; $scope.kitchen_7_11_1_A_c_cm = ''; $scope.kitchen_7_11_1_A_c= false; }
				if(data.kitchen_7_11_1_B == 2){ $scope.kitchen_7_11_1_B = data.kitchen_7_11_1_B; $scope.kitchen_7_11_1_B = true; $scope.kitchen_7_11_1_B_b = false; $scope.kitchen_7_11_1_B_c = false; $scope.kitchen_7_11_1_B_cm = ''; } else if(data.kitchen_7_11_1_B  == 5){ $scope.kitchen_7_11_1_B = data.kitchen_7_11_1_B; $scope.kitchen_7_11_1_B = false; $scope.kitchen_7_11_1_B_b = true; $scope.kitchen_7_11_1_B_c = false; $scope.kitchen_7_11_1_B_cm = ''; } else if(data.kitchen_7_11_1_B  == 8){ 
				$scope.kitchen_7_11_1_B = data.kitchen_7_11_1_B; $scope.kitchen_7_11_1_B = false; $scope.kitchen_7_11_1_B_b = false; $scope.kitchen_7_11_1_B_c = true; $scope.kitchen_7_11_1_B_cm = ''; } else if( ((data.kitchen_7_11_1_B  >= 0 ) && (data.kitchen_7_11_1_B  < 2)) || ((data.kitchen_7_11_1_B  > 2 ) && (data.kitchen_7_11_1_B  < 5)) || ((data.kitchen_7_11_1_B  > 5 ) && (data.kitchen_7_11_1_B  < 8)) ){ $scope.kitchen_7_11_1_B_cm = data.kitchen_7_11_1_B; $scope.kitchen_7_11_1_B = false; $scope.kitchen_7_11_1_B_b = false; $scope.kitchen_7_11_1_B_c = false; $scope.kitchen_7_11_1_B = ''; }else{ $scope.kitchen_7_11_1_B = ''; $scope.kitchen_7_11_1_B_cm = ''; $scope.kitchen_7_11_1_B = false; $scope.kitchen_7_11_1_B_b = false; $scope.kitchen_7_11_1_B_c = false;}
				if(data.kitchen_7_11_1_C_a == 2){ $scope.kitchen_7_11_1_C_a = data.kitchen_7_11_1_C_a; $scope.kitchen_7_11_1_C_a= true; $scope.kitchen_7_11_1_C_a_cm = ''; } else if((data.kitchen_7_11_1_C_a > 0 ) && (data.kitchen_7_11_1_C_a < 2)){ $scope.kitchen_7_11_1_C_a_cm = data.kitchen_7_11_1_C_a; $scope.kitchen_7_11_1_C_a= false; $scope.kitchen_7_11_1_C_a= ''; }else{ $scope.kitchen_7_11_1_C_a= ''; $scope.kitchen_7_11_1_C_a_cm = ''; $scope.kitchen_7_11_1_C_a= false; }
				if(data.kitchen_7_11_1_C_b == 2){ $scope.kitchen_7_11_1_C_b = data.kitchen_7_11_1_C_b; $scope.kitchen_7_11_1_C_b= true; $scope.kitchen_7_11_1_C_b_cm = ''; } else if((data.kitchen_7_11_1_C_b > 0 ) && (data.kitchen_7_11_1_C_b < 2)){ $scope.kitchen_7_11_1_C_b_cm = data.kitchen_7_11_1_C_b; $scope.kitchen_7_11_1_C_b= false; $scope.kitchen_7_11_1_C_b= ''; }else{ $scope.kitchen_7_11_1_C_b= ''; $scope.kitchen_7_11_1_C_b_cm = ''; $scope.kitchen_7_11_1_C_b= false; }
				if(data.kitchen_7_11_1_C_c == 2){ $scope.kitchen_7_11_1_C_c = data.kitchen_7_11_1_C_c; $scope.kitchen_7_11_1_C_c= true; $scope.kitchen_7_11_1_C_c_cm = ''; } else if((data.kitchen_7_11_1_C_c > 0 ) && (data.kitchen_7_11_1_C_c < 2)){ $scope.kitchen_7_11_1_C_c_cm = data.kitchen_7_11_1_C_c; $scope.kitchen_7_11_1_C_c= false; $scope.kitchen_7_11_1_C_c= ''; }else{ $scope.kitchen_7_11_1_C_c= ''; $scope.kitchen_7_11_1_C_c_cm = ''; $scope.kitchen_7_11_1_C_c= false; }
				if(data.kitchen_7_11_1_C_d == 2){ $scope.kitchen_7_11_1_C_d = data.kitchen_7_11_1_C_d; $scope.kitchen_7_11_1_C_d= true; $scope.kitchen_7_11_1_C_d_cm = ''; } else if((data.kitchen_7_11_1_C_d > 0 ) && (data.kitchen_7_11_1_C_d < 2)){ $scope.kitchen_7_11_1_C_d_cm = data.kitchen_7_11_1_C_d; $scope.kitchen_7_11_1_C_d= false; $scope.kitchen_7_11_1_C_d= ''; }else{ $scope.kitchen_7_11_1_C_d= ''; $scope.kitchen_7_11_1_C_d_cm = ''; $scope.kitchen_7_11_1_C_d= false; }
				if(data.kitchen_7_11_1_C_e == 2){ $scope.kitchen_7_11_1_C_e = data.kitchen_7_11_1_C_e; $scope.kitchen_7_11_1_C_e= true; $scope.kitchen_7_11_1_C_e_cm = ''; } else if((data.kitchen_7_11_1_C_e > 0 ) && (data.kitchen_7_11_1_C_e < 2)){ $scope.kitchen_7_11_1_C_e_cm = data.kitchen_7_11_1_C_e; $scope.kitchen_7_11_1_C_e= false; $scope.kitchen_7_11_1_C_e= ''; }else{ $scope.kitchen_7_11_1_C_e= ''; $scope.kitchen_7_11_1_C_e_cm = ''; $scope.kitchen_7_11_1_C_e= false; }
				if(data.kitchen_7_11_1_D_a == 3){ $scope.kitchen_7_11_1_D_a = data.kitchen_7_11_1_D_a; $scope.kitchen_7_11_1_D_a= true; $scope.kitchen_7_11_1_D_a_cm = ''; } else if((data.kitchen_7_11_1_D_a > 0 ) && (data.kitchen_7_11_1_D_a < 3)){ $scope.kitchen_7_11_1_D_a_cm = data.kitchen_7_11_1_D_a; $scope.kitchen_7_11_1_D_a= false; $scope.kitchen_7_11_1_D_a= ''; }else{ $scope.kitchen_7_11_1_D_a= ''; $scope.kitchen_7_11_1_D_a_cm = ''; $scope.kitchen_7_11_1_D_a= false; }
				if(data.kitchen_7_11_1_D_b == 3){ $scope.kitchen_7_11_1_D_b = data.kitchen_7_11_1_D_b; $scope.kitchen_7_11_1_D_b= true; $scope.kitchen_7_11_1_D_b_cm = ''; } else if((data.kitchen_7_11_1_D_b > 0 ) && (data.kitchen_7_11_1_D_b < 3)){ $scope.kitchen_7_11_1_D_b_cm = data.kitchen_7_11_1_D_b; $scope.kitchen_7_11_1_D_b= false; $scope.kitchen_7_11_1_D_b= ''; }else{ $scope.kitchen_7_11_1_D_b= ''; $scope.kitchen_7_11_1_D_b_cm = ''; $scope.kitchen_7_11_1_D_b= false; }
				if(data.kitchen_7_11_1_E == 0){ $scope.kitchen_7_11_1_E = data.kitchen_7_11_1_E; $scope.kitchen_7_11_1_E = true; $scope.kitchen_7_11_1_E_b = false; $scope.kitchen_7_11_1_E_c = false; $scope.kitchen_7_11_1_E_cm = ''; } else if(data.kitchen_7_11_1_E  == 2){ $scope.kitchen_7_11_1_E = data.kitchen_7_11_1_E; $scope.kitchen_7_11_1_E = false; $scope.kitchen_7_11_1_E_b = true; $scope.kitchen_7_11_1_E_c = false; $scope.kitchen_7_11_1_E_cm = ''; } else if(data.kitchen_7_11_1_E  == ){ $scope.kitchen_7_11_1_E = data.kitchen_7_11_1_E; $scope.kitchen_7_11_1_E = false; $scope.kitchen_7_11_1_E_b = false; $scope.kitchen_7_11_1_E_c = true; $scope.kitchen_7_11_1_E_cm = ''; }else if( ((data.kitchen_7_11_1_E  > 0 ) && (data.kitchen_7_11_1_E  < 2)) || ((data.kitchen_7_11_1_E  > 2 ) && (data.kitchen_7_11_1_E  < )) )
				{ $scope.kitchen_7_11_1_E_cm = data.kitchen_7_11_1_E; $scope.kitchen_7_11_1_E = false; $scope.kitchen_7_11_1_E_b = false;  $scope.kitchen_7_11_1_E_c = false; $scope.kitchen_7_11_1_E = ''; }else{ $scope.kitchen_7_11_1_E = ''; $scope.kitchen_7_11_1_E_cm = ''; $scope.kitchen_7_11_1_E = false; $scope.kitchen_7_11_1_E_b = false; $scope.kitchen_7_11_1_E_c = false; }
				if(data.kitchen_7_11_1_F == 0){ $scope.kitchen_7_11_1_F = data.kitchen_7_11_1_F; $scope.kitchen_7_11_1_F = true; $scope.kitchen_7_11_1_F_b = false; $scope.kitchen_7_11_1_F_c = false; $scope.kitchen_7_11_1_F_cm = ''; } else if(data.kitchen_7_11_1_F  == 3){ $scope.kitchen_7_11_1_F = data.kitchen_7_11_1_F; $scope.kitchen_7_11_1_F = false; $scope.kitchen_7_11_1_F_b = true; $scope.kitchen_7_11_1_F_c = false; $scope.kitchen_7_11_1_F_cm = ''; } else if(data.kitchen_7_11_1_F  == 5){ $scope.kitchen_7_11_1_F = data.kitchen_7_11_1_F; $scope.kitchen_7_11_1_F = false; $scope.kitchen_7_11_1_F_b = false; $scope.kitchen_7_11_1_F_c = true; $scope.kitchen_7_11_1_F_cm = ''; }else if( ((data.kitchen_7_11_1_F  > 0 ) && (data.kitchen_7_11_1_F  < 3)) || ((data.kitchen_7_11_1_F  > 3 ) && (data.kitchen_7_11_1_F  < 5)) )
				{ $scope.kitchen_7_11_1_F_cm = data.kitchen_7_11_1_F; $scope.kitchen_7_11_1_F = false; $scope.kitchen_7_11_1_F_b = false;  $scope.kitchen_7_11_1_F_c = false; $scope.kitchen_7_11_1_F = ''; }else{ $scope.kitchen_7_11_1_F = ''; $scope.kitchen_7_11_1_F_cm = ''; $scope.kitchen_7_11_1_F = false; $scope.kitchen_7_11_1_F_b = false; $scope.kitchen_7_11_1_F_c = false; }
				$scope.guest_rooms_8_1_1_text = data.guest_rooms_8_1_1_text;
				if(data.guest_rooms_8_1_1_A == 15){ $scope.guest_rooms_8_1_1_A = data.guest_rooms_8_1_1_A; $scope.guest_rooms_8_1_1_A = true; $scope.guest_rooms_8_1_1_A_b = false; $scope.guest_rooms_8_1_1_A_c = false; $scope.guest_rooms_8_1_1_A_cm = ''; } else if(data.guest_rooms_8_1_1_A  == 20){ $scope.guest_rooms_8_1_1_A = data.guest_rooms_8_1_1_A; $scope.guest_rooms_8_1_1_A = false; $scope.guest_rooms_8_1_1_A_b = true; $scope.guest_rooms_8_1_1_A_c = false; $scope.guest_rooms_8_1_1_A_cm = ''; } else if(data.guest_rooms_8_1_1_A  == 30){ 
				$scope.guest_rooms_8_1_1_A = data.guest_rooms_8_1_1_A; $scope.guest_rooms_8_1_1_A = false; $scope.guest_rooms_8_1_1_A_b = false; $scope.guest_rooms_8_1_1_A_c = true; $scope.guest_rooms_8_1_1_A_cm = ''; } else if( ((data.guest_rooms_8_1_1_A  >= 0 ) && (data.guest_rooms_8_1_1_A  < 15)) || ((data.guest_rooms_8_1_1_A  > 15 ) && (data.guest_rooms_8_1_1_A  < 20)) || ((data.guest_rooms_8_1_1_A  > 20 ) && (data.guest_rooms_8_1_1_A  < 30)) ){ $scope.guest_rooms_8_1_1_A_cm = data.guest_rooms_8_1_1_A; $scope.guest_rooms_8_1_1_A = false; $scope.guest_rooms_8_1_1_A_b = false; $scope.guest_rooms_8_1_1_A_c = false; $scope.guest_rooms_8_1_1_A = ''; }else{ $scope.guest_rooms_8_1_1_A = ''; $scope.guest_rooms_8_1_1_A_cm = ''; $scope.guest_rooms_8_1_1_A = false; $scope.guest_rooms_8_1_1_A_b = false; $scope.guest_rooms_8_1_1_A_c = false;}
				$scope.guest_rooms_8_2_1_text = data.guest_rooms_8_2_1_text;
				if(data.guest_rooms_8_2_1_A == 3){ $scope.guest_rooms_8_2_1_A = data.guest_rooms_8_2_1_A; $scope.guest_rooms_8_2_1_A = true; $scope.guest_rooms_8_2_1_A_b = false; $scope.guest_rooms_8_2_1_A_c = false; $scope.guest_rooms_8_2_1_A_cm = ''; } else if(data.guest_rooms_8_2_1_A  == 5){ $scope.guest_rooms_8_2_1_A = data.guest_rooms_8_2_1_A; $scope.guest_rooms_8_2_1_A = false; $scope.guest_rooms_8_2_1_A_b = true; $scope.guest_rooms_8_2_1_A_c = false; $scope.guest_rooms_8_2_1_A_cm = ''; } else if(data.guest_rooms_8_2_1_A  == 25){ 
				$scope.guest_rooms_8_2_1_A = data.guest_rooms_8_2_1_A; $scope.guest_rooms_8_2_1_A = false; $scope.guest_rooms_8_2_1_A_b = false; $scope.guest_rooms_8_2_1_A_c = true; $scope.guest_rooms_8_2_1_A_cm = ''; } else if( ((data.guest_rooms_8_2_1_A  >= 0 ) && (data.guest_rooms_8_2_1_A  < 3)) || ((data.guest_rooms_8_2_1_A  > 3 ) && (data.guest_rooms_8_2_1_A  < 5)) || ((data.guest_rooms_8_2_1_A  > 5 ) && (data.guest_rooms_8_2_1_A  < 25)) ){ $scope.guest_rooms_8_2_1_A_cm = data.guest_rooms_8_2_1_A; $scope.guest_rooms_8_2_1_A = false; $scope.guest_rooms_8_2_1_A_b = false; $scope.guest_rooms_8_2_1_A_c = false; $scope.guest_rooms_8_2_1_A = ''; }else{ $scope.guest_rooms_8_2_1_A = ''; $scope.guest_rooms_8_2_1_A_cm = ''; $scope.guest_rooms_8_2_1_A = false; $scope.guest_rooms_8_2_1_A_b = false; $scope.guest_rooms_8_2_1_A_c = false;}
				if(data.guest_rooms_8_2_1_B == 5){ $scope.guest_rooms_8_2_1_B = data.guest_rooms_8_2_1_B; $scope.guest_rooms_8_2_1_B = true; $scope.guest_rooms_8_2_1_B_b = false; $scope.guest_rooms_8_2_1_B_c = false; $scope.guest_rooms_8_2_1_B_cm = ''; } else if(data.guest_rooms_8_2_1_B  == 10){ $scope.guest_rooms_8_2_1_B = data.guest_rooms_8_2_1_B; $scope.guest_rooms_8_2_1_B = false; $scope.guest_rooms_8_2_1_B_b = true; $scope.guest_rooms_8_2_1_B_c = false; $scope.guest_rooms_8_2_1_B_cm = ''; } else if(data.guest_rooms_8_2_1_B  == 15){ 
				$scope.guest_rooms_8_2_1_B = data.guest_rooms_8_2_1_B; $scope.guest_rooms_8_2_1_B = false; $scope.guest_rooms_8_2_1_B_b = false; $scope.guest_rooms_8_2_1_B_c = true; $scope.guest_rooms_8_2_1_B_cm = ''; } else if( ((data.guest_rooms_8_2_1_B  >= 0 ) && (data.guest_rooms_8_2_1_B  < 5)) || ((data.guest_rooms_8_2_1_B  > 5 ) && (data.guest_rooms_8_2_1_B  < 10)) || ((data.guest_rooms_8_2_1_B  > 10 ) && (data.guest_rooms_8_2_1_B  < 15)) ){ $scope.guest_rooms_8_2_1_B_cm = data.guest_rooms_8_2_1_B; $scope.guest_rooms_8_2_1_B = false; $scope.guest_rooms_8_2_1_B_b = false; $scope.guest_rooms_8_2_1_B_c = false; $scope.guest_rooms_8_2_1_B = ''; }else{ $scope.guest_rooms_8_2_1_B = ''; $scope.guest_rooms_8_2_1_B_cm = ''; $scope.guest_rooms_8_2_1_B = false; $scope.guest_rooms_8_2_1_B_b = false; $scope.guest_rooms_8_2_1_B_c = false;}
				$scope.guest_rooms_8_3_1_text = data.guest_rooms_8_3_1_text;
				if(data.guest_rooms_8_3_1_A_a == 3){ $scope.guest_rooms_8_3_1_A_a = data.guest_rooms_8_3_1_A_a; $scope.guest_rooms_8_3_1_A_a= true; $scope.guest_rooms_8_3_1_A_a_cm = ''; } else if((data.guest_rooms_8_3_1_A_a > 0 ) && (data.guest_rooms_8_3_1_A_a < 3)){ $scope.guest_rooms_8_3_1_A_a_cm = data.guest_rooms_8_3_1_A_a; $scope.guest_rooms_8_3_1_A_a= false; $scope.guest_rooms_8_3_1_A_a= ''; }else{ $scope.guest_rooms_8_3_1_A_a= ''; $scope.guest_rooms_8_3_1_A_a_cm = ''; $scope.guest_rooms_8_3_1_A_a= false; }
				if(data.guest_rooms_8_3_1_A_b == 3){ $scope.guest_rooms_8_3_1_A_b = data.guest_rooms_8_3_1_A_b; $scope.guest_rooms_8_3_1_A_b= true; $scope.guest_rooms_8_3_1_A_b_cm = ''; } else if((data.guest_rooms_8_3_1_A_b > 0 ) && (data.guest_rooms_8_3_1_A_b < 3)){ $scope.guest_rooms_8_3_1_A_b_cm = data.guest_rooms_8_3_1_A_b; $scope.guest_rooms_8_3_1_A_b= false; $scope.guest_rooms_8_3_1_A_b= ''; }else{ $scope.guest_rooms_8_3_1_A_b= ''; $scope.guest_rooms_8_3_1_A_b_cm = ''; $scope.guest_rooms_8_3_1_A_b= false; }
				if(data.guest_rooms_8_3_1_A_c == 3){ $scope.guest_rooms_8_3_1_A_c = data.guest_rooms_8_3_1_A_c; $scope.guest_rooms_8_3_1_A_c= true; $scope.guest_rooms_8_3_1_A_c_cm = ''; } else if((data.guest_rooms_8_3_1_A_c > 0 ) && (data.guest_rooms_8_3_1_A_c < 3)){ $scope.guest_rooms_8_3_1_A_c_cm = data.guest_rooms_8_3_1_A_c; $scope.guest_rooms_8_3_1_A_c= false; $scope.guest_rooms_8_3_1_A_c= ''; }else{ $scope.guest_rooms_8_3_1_A_c= ''; $scope.guest_rooms_8_3_1_A_c_cm = ''; $scope.guest_rooms_8_3_1_A_c= false; }
				if(data.guest_rooms_8_3_1_A_d == 2){ $scope.guest_rooms_8_3_1_A_d = data.guest_rooms_8_3_1_A_d; $scope.guest_rooms_8_3_1_A_d= true; $scope.guest_rooms_8_3_1_A_d_cm = ''; } else if((data.guest_rooms_8_3_1_A_d > 0 ) && (data.guest_rooms_8_3_1_A_d < 2)){ $scope.guest_rooms_8_3_1_A_d_cm = data.guest_rooms_8_3_1_A_d; $scope.guest_rooms_8_3_1_A_d= false; $scope.guest_rooms_8_3_1_A_d= ''; }else{ $scope.guest_rooms_8_3_1_A_d= ''; $scope.guest_rooms_8_3_1_A_d_cm = ''; $scope.guest_rooms_8_3_1_A_d= false; }
				if(data.guest_rooms_8_3_1_A_e == 3){ $scope.guest_rooms_8_3_1_A_e = data.guest_rooms_8_3_1_A_e; $scope.guest_rooms_8_3_1_A_e= true; $scope.guest_rooms_8_3_1_A_e_cm = ''; } else if((data.guest_rooms_8_3_1_A_e > 0 ) && (data.guest_rooms_8_3_1_A_e < 3)){ $scope.guest_rooms_8_3_1_A_e_cm = data.guest_rooms_8_3_1_A_e; $scope.guest_rooms_8_3_1_A_e= false; $scope.guest_rooms_8_3_1_A_e= ''; }else{ $scope.guest_rooms_8_3_1_A_e= ''; $scope.guest_rooms_8_3_1_A_e_cm = ''; $scope.guest_rooms_8_3_1_A_e= false; }
				if(data.guest_rooms_8_3_1_A_f == 3){ $scope.guest_rooms_8_3_1_A_f = data.guest_rooms_8_3_1_A_f; $scope.guest_rooms_8_3_1_A_f= true; $scope.guest_rooms_8_3_1_A_f_cm = ''; } else if((data.guest_rooms_8_3_1_A_f > 0 ) && (data.guest_rooms_8_3_1_A_f < 3)){ $scope.guest_rooms_8_3_1_A_f_cm = data.guest_rooms_8_3_1_A_f; $scope.guest_rooms_8_3_1_A_f= false; $scope.guest_rooms_8_3_1_A_f= ''; }else{ $scope.guest_rooms_8_3_1_A_f= ''; $scope.guest_rooms_8_3_1_A_f_cm = ''; $scope.guest_rooms_8_3_1_A_f= false; }
				if(data.guest_rooms_8_3_1_A_g == 3){ $scope.guest_rooms_8_3_1_A_g = data.guest_rooms_8_3_1_A_g; $scope.guest_rooms_8_3_1_A_g= true; $scope.guest_rooms_8_3_1_A_g_cm = ''; } else if((data.guest_rooms_8_3_1_A_g > 0 ) && (data.guest_rooms_8_3_1_A_g < 3)){ $scope.guest_rooms_8_3_1_A_g_cm = data.guest_rooms_8_3_1_A_g; $scope.guest_rooms_8_3_1_A_g= false; $scope.guest_rooms_8_3_1_A_g= ''; }else{ $scope.guest_rooms_8_3_1_A_g= ''; $scope.guest_rooms_8_3_1_A_g_cm = ''; $scope.guest_rooms_8_3_1_A_g= false; }
				if(data.guest_rooms_8_3_1_A_h == 3){ $scope.guest_rooms_8_3_1_A_h = data.guest_rooms_8_3_1_A_h; $scope.guest_rooms_8_3_1_A_h= true; $scope.guest_rooms_8_3_1_A_h_cm = ''; } else if((data.guest_rooms_8_3_1_A_h > 0 ) && (data.guest_rooms_8_3_1_A_h < 3)){ $scope.guest_rooms_8_3_1_A_h_cm = data.guest_rooms_8_3_1_A_h; $scope.guest_rooms_8_3_1_A_h= false; $scope.guest_rooms_8_3_1_A_h= ''; }else{ $scope.guest_rooms_8_3_1_A_h= ''; $scope.guest_rooms_8_3_1_A_h_cm = ''; $scope.guest_rooms_8_3_1_A_h= false; }
				if(data.guest_rooms_8_3_1_A_i == 2){ $scope.guest_rooms_8_3_1_A_i = data.guest_rooms_8_3_1_A_i; $scope.guest_rooms_8_3_1_A_i= true; $scope.guest_rooms_8_3_1_A_i_cm = ''; } else if((data.guest_rooms_8_3_1_A_i > 0 ) && (data.guest_rooms_8_3_1_A_i < 2)){ $scope.guest_rooms_8_3_1_A_i_cm = data.guest_rooms_8_3_1_A_i; $scope.guest_rooms_8_3_1_A_i= false; $scope.guest_rooms_8_3_1_A_i= ''; }else{ $scope.guest_rooms_8_3_1_A_i= ''; $scope.guest_rooms_8_3_1_A_i_cm = ''; $scope.guest_rooms_8_3_1_A_i= false; }
				if(data.guest_rooms_8_3_1_A_j == 2){ $scope.guest_rooms_8_3_1_A_j = data.guest_rooms_8_3_1_A_j; $scope.guest_rooms_8_3_1_A_j= true; $scope.guest_rooms_8_3_1_A_j_cm = ''; } else if((data.guest_rooms_8_3_1_A_j > 0 ) && (data.guest_rooms_8_3_1_A_j < 2)){ $scope.guest_rooms_8_3_1_A_j_cm = data.guest_rooms_8_3_1_A_j; $scope.guest_rooms_8_3_1_A_j= false; $scope.guest_rooms_8_3_1_A_j= ''; }else{ $scope.guest_rooms_8_3_1_A_j= ''; $scope.guest_rooms_8_3_1_A_j_cm = ''; $scope.guest_rooms_8_3_1_A_j= false; }
				if(data.guest_rooms_8_3_1_A_k == 2){ $scope.guest_rooms_8_3_1_A_k = data.guest_rooms_8_3_1_A_k; $scope.guest_rooms_8_3_1_A_k= true; $scope.guest_rooms_8_3_1_A_k_cm = ''; } else if((data.guest_rooms_8_3_1_A_k > 0 ) && (data.guest_rooms_8_3_1_A_k < 2)){ $scope.guest_rooms_8_3_1_A_k_cm = data.guest_rooms_8_3_1_A_k; $scope.guest_rooms_8_3_1_A_k= false; $scope.guest_rooms_8_3_1_A_k= ''; }else{ $scope.guest_rooms_8_3_1_A_k= ''; $scope.guest_rooms_8_3_1_A_k_cm = ''; $scope.guest_rooms_8_3_1_A_k= false; }
				if(data.guest_rooms_8_3_1_A_l == 3){ $scope.guest_rooms_8_3_1_A_l = data.guest_rooms_8_3_1_A_l; $scope.guest_rooms_8_3_1_A_l= true; $scope.guest_rooms_8_3_1_A_l_cm = ''; } else if((data.guest_rooms_8_3_1_A_l > 0 ) && (data.guest_rooms_8_3_1_A_l < 3)){ $scope.guest_rooms_8_3_1_A_l_cm = data.guest_rooms_8_3_1_A_l; $scope.guest_rooms_8_3_1_A_l= false; $scope.guest_rooms_8_3_1_A_l= ''; }else{ $scope.guest_rooms_8_3_1_A_l= ''; $scope.guest_rooms_8_3_1_A_l_cm = ''; $scope.guest_rooms_8_3_1_A_l= false; }
				if(data.guest_rooms_8_3_1_A_m == 3){ $scope.guest_rooms_8_3_1_A_m = data.guest_rooms_8_3_1_A_m; $scope.guest_rooms_8_3_1_A_m= true; $scope.guest_rooms_8_3_1_A_m_cm = ''; } else if((data.guest_rooms_8_3_1_A_m > 0 ) && (data.guest_rooms_8_3_1_A_m < 3)){ $scope.guest_rooms_8_3_1_A_m_cm = data.guest_rooms_8_3_1_A_m; $scope.guest_rooms_8_3_1_A_m= false; $scope.guest_rooms_8_3_1_A_m= ''; }else{ $scope.guest_rooms_8_3_1_A_m= ''; $scope.guest_rooms_8_3_1_A_m_cm = ''; $scope.guest_rooms_8_3_1_A_m= false; }
				if(data.guest_rooms_8_3_1_A_n == 3){ $scope.guest_rooms_8_3_1_A_n = data.guest_rooms_8_3_1_A_n; $scope.guest_rooms_8_3_1_A_n= true; $scope.guest_rooms_8_3_1_A_n_cm = ''; } else if((data.guest_rooms_8_3_1_A_n > 0 ) && (data.guest_rooms_8_3_1_A_n < 3)){ $scope.guest_rooms_8_3_1_A_n_cm = data.guest_rooms_8_3_1_A_n; $scope.guest_rooms_8_3_1_A_n= false; $scope.guest_rooms_8_3_1_A_n= ''; }else{ $scope.guest_rooms_8_3_1_A_n= ''; $scope.guest_rooms_8_3_1_A_n_cm = ''; $scope.guest_rooms_8_3_1_A_n= false; }
				if(data.guest_rooms_8_3_1_A_o == 3){ $scope.guest_rooms_8_3_1_A_o = data.guest_rooms_8_3_1_A_o; $scope.guest_rooms_8_3_1_A_o= true; $scope.guest_rooms_8_3_1_A_o_cm = ''; } else if((data.guest_rooms_8_3_1_A_o > 0 ) && (data.guest_rooms_8_3_1_A_o < 3)){ $scope.guest_rooms_8_3_1_A_o_cm = data.guest_rooms_8_3_1_A_o; $scope.guest_rooms_8_3_1_A_o= false; $scope.guest_rooms_8_3_1_A_o= ''; }else{ $scope.guest_rooms_8_3_1_A_o= ''; $scope.guest_rooms_8_3_1_A_o_cm = ''; $scope.guest_rooms_8_3_1_A_o= false; }
				if(data.guest_rooms_8_3_1_A_p == 3){ $scope.guest_rooms_8_3_1_A_p = data.guest_rooms_8_3_1_A_p; $scope.guest_rooms_8_3_1_A_p= true; $scope.guest_rooms_8_3_1_A_p_cm = ''; } else if((data.guest_rooms_8_3_1_A_p > 0 ) && (data.guest_rooms_8_3_1_A_p < 3)){ $scope.guest_rooms_8_3_1_A_p_cm = data.guest_rooms_8_3_1_A_p; $scope.guest_rooms_8_3_1_A_p= false; $scope.guest_rooms_8_3_1_A_p= ''; }else{ $scope.guest_rooms_8_3_1_A_p= ''; $scope.guest_rooms_8_3_1_A_p_cm = ''; $scope.guest_rooms_8_3_1_A_p= false; }
				if(data.guest_rooms_8_3_1_B == 1){ $scope.guest_rooms_8_3_1_B = data.guest_rooms_8_3_1_B; $scope.guest_rooms_8_3_1_B = true; $scope.guest_rooms_8_3_1_B_b = false; $scope.guest_rooms_8_3_1_B_c = false; $scope.guest_rooms_8_3_1_B_cm = ''; } else if(data.guest_rooms_8_3_1_B  == 4){ $scope.guest_rooms_8_3_1_B = data.guest_rooms_8_3_1_B; $scope.guest_rooms_8_3_1_B = false; $scope.guest_rooms_8_3_1_B_b = true; $scope.guest_rooms_8_3_1_B_c = false; $scope.guest_rooms_8_3_1_B_cm = ''; } else if(data.guest_rooms_8_3_1_B  == 6){ 
				$scope.guest_rooms_8_3_1_B = data.guest_rooms_8_3_1_B; $scope.guest_rooms_8_3_1_B = false; $scope.guest_rooms_8_3_1_B_b = false; $scope.guest_rooms_8_3_1_B_c = true; $scope.guest_rooms_8_3_1_B_cm = ''; } else if( ((data.guest_rooms_8_3_1_B  >= 0 ) && (data.guest_rooms_8_3_1_B  < 1)) || ((data.guest_rooms_8_3_1_B  > 1 ) && (data.guest_rooms_8_3_1_B  < 4)) || ((data.guest_rooms_8_3_1_B  > 4 ) && (data.guest_rooms_8_3_1_B  < 6)) ){ $scope.guest_rooms_8_3_1_B_cm = data.guest_rooms_8_3_1_B; $scope.guest_rooms_8_3_1_B = false; $scope.guest_rooms_8_3_1_B_b = false; $scope.guest_rooms_8_3_1_B_c = false; $scope.guest_rooms_8_3_1_B = ''; }else{ $scope.guest_rooms_8_3_1_B = ''; $scope.guest_rooms_8_3_1_B_cm = ''; $scope.guest_rooms_8_3_1_B = false; $scope.guest_rooms_8_3_1_B_b = false; $scope.guest_rooms_8_3_1_B_c = false;}
				$scope.guest_rooms_8_4_1_text = data.guest_rooms_8_4_1_text;
				if(data.guest_rooms_8_4_1_A == 3){ $scope.guest_rooms_8_4_1_A = data.guest_rooms_8_4_1_A; $scope.guest_rooms_8_4_1_A = true; $scope.guest_rooms_8_4_1_A_b = false; $scope.guest_rooms_8_4_1_A_c = false; $scope.guest_rooms_8_4_1_A_cm = ''; } else if(data.guest_rooms_8_4_1_A  == 6){ $scope.guest_rooms_8_4_1_A = data.guest_rooms_8_4_1_A; $scope.guest_rooms_8_4_1_A = false; $scope.guest_rooms_8_4_1_A_b = true; $scope.guest_rooms_8_4_1_A_c = false; $scope.guest_rooms_8_4_1_A_cm = ''; } else if(data.guest_rooms_8_4_1_A  == 9){ 
				$scope.guest_rooms_8_4_1_A = data.guest_rooms_8_4_1_A; $scope.guest_rooms_8_4_1_A = false; $scope.guest_rooms_8_4_1_A_b = false; $scope.guest_rooms_8_4_1_A_c = true; $scope.guest_rooms_8_4_1_A_cm = ''; } else if( ((data.guest_rooms_8_4_1_A  >= 0 ) && (data.guest_rooms_8_4_1_A  < 3)) || ((data.guest_rooms_8_4_1_A  > 3 ) && (data.guest_rooms_8_4_1_A  < 6)) || ((data.guest_rooms_8_4_1_A  > 6 ) && (data.guest_rooms_8_4_1_A  < 9)) ){ $scope.guest_rooms_8_4_1_A_cm = data.guest_rooms_8_4_1_A; $scope.guest_rooms_8_4_1_A = false; $scope.guest_rooms_8_4_1_A_b = false; $scope.guest_rooms_8_4_1_A_c = false; $scope.guest_rooms_8_4_1_A = ''; }else{ $scope.guest_rooms_8_4_1_A = ''; $scope.guest_rooms_8_4_1_A_cm = ''; $scope.guest_rooms_8_4_1_A = false; $scope.guest_rooms_8_4_1_A_b = false; $scope.guest_rooms_8_4_1_A_c = false;}
				if(data.guest_rooms_8_4_1_B_a == 4){ $scope.guest_rooms_8_4_1_B_a = data.guest_rooms_8_4_1_B_a; $scope.guest_rooms_8_4_1_B_a= true; $scope.guest_rooms_8_4_1_B_a_cm = ''; } else if((data.guest_rooms_8_4_1_B_a > 0 ) && (data.guest_rooms_8_4_1_B_a < 4)){ $scope.guest_rooms_8_4_1_B_a_cm = data.guest_rooms_8_4_1_B_a; $scope.guest_rooms_8_4_1_B_a= false; $scope.guest_rooms_8_4_1_B_a= ''; }else{ $scope.guest_rooms_8_4_1_B_a= ''; $scope.guest_rooms_8_4_1_B_a_cm = ''; $scope.guest_rooms_8_4_1_B_a= false; }
				if(data.guest_rooms_8_4_1_B_b == 4){ $scope.guest_rooms_8_4_1_B_b = data.guest_rooms_8_4_1_B_b; $scope.guest_rooms_8_4_1_B_b= true; $scope.guest_rooms_8_4_1_B_b_cm = ''; } else if((data.guest_rooms_8_4_1_B_b > 0 ) && (data.guest_rooms_8_4_1_B_b < 4)){ $scope.guest_rooms_8_4_1_B_b_cm = data.guest_rooms_8_4_1_B_b; $scope.guest_rooms_8_4_1_B_b= false; $scope.guest_rooms_8_4_1_B_b= ''; }else{ $scope.guest_rooms_8_4_1_B_b= ''; $scope.guest_rooms_8_4_1_B_b_cm = ''; $scope.guest_rooms_8_4_1_B_b= false; }
				if(data.guest_rooms_8_4_1_B_c == 4){ $scope.guest_rooms_8_4_1_B_c = data.guest_rooms_8_4_1_B_c; $scope.guest_rooms_8_4_1_B_c= true; $scope.guest_rooms_8_4_1_B_c_cm = ''; } else if((data.guest_rooms_8_4_1_B_c > 0 ) && (data.guest_rooms_8_4_1_B_c < 4)){ $scope.guest_rooms_8_4_1_B_c_cm = data.guest_rooms_8_4_1_B_c; $scope.guest_rooms_8_4_1_B_c= false; $scope.guest_rooms_8_4_1_B_c= ''; }else{ $scope.guest_rooms_8_4_1_B_c= ''; $scope.guest_rooms_8_4_1_B_c_cm = ''; $scope.guest_rooms_8_4_1_B_c= false; }
				if(data.guest_rooms_8_4_1_B_d == 4){ $scope.guest_rooms_8_4_1_B_d = data.guest_rooms_8_4_1_B_d; $scope.guest_rooms_8_4_1_B_d= true; $scope.guest_rooms_8_4_1_B_d_cm = ''; } else if((data.guest_rooms_8_4_1_B_d > 0 ) && (data.guest_rooms_8_4_1_B_d < 4)){ $scope.guest_rooms_8_4_1_B_d_cm = data.guest_rooms_8_4_1_B_d; $scope.guest_rooms_8_4_1_B_d= false; $scope.guest_rooms_8_4_1_B_d= ''; }else{ $scope.guest_rooms_8_4_1_B_d= ''; $scope.guest_rooms_8_4_1_B_d_cm = ''; $scope.guest_rooms_8_4_1_B_d= false; }
				if(data.guest_rooms_8_4_1_C == 1){ $scope.guest_rooms_8_4_1_C = data.guest_rooms_8_4_1_C; $scope.guest_rooms_8_4_1_C = true; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = false; $scope.guest_rooms_8_4_1_C_cm = ''; } else if(data.guest_rooms_8_4_1_C  == 5){ $scope.guest_rooms_8_4_1_C = data.guest_rooms_8_4_1_C; $scope.guest_rooms_8_4_1_C = false; $scope.guest_rooms_8_4_1_C_b = true; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = false; $scope.guest_rooms_8_4_1_C_cm = ''; } else if(data.guest_rooms_8_4_1_C  == 10){ $scope.guest_rooms_8_4_1_C = data.guest_rooms_8_4_1_C; $scope.guest_rooms_8_4_1_C = false; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = true; $scope.guest_rooms_8_4_1_C_d = false; $scope.guest_rooms_8_4_1_C_cm = ''; }else if(data.guest_rooms_8_4_1_C  == 15){ $scope.guest_rooms_8_4_1_C = data.guest_rooms_8_4_1_C; $scope.guest_rooms_8_4_1_C = false; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = true; $scope.guest_rooms_8_4_1_C_cm = ''; } else if( ((data.guest_rooms_8_4_1_C  >= 0 ) && (data.guest_rooms_8_4_1_C  < 1)) || ((data.guest_rooms_8_4_1_C  > 1 ) && (data.guest_rooms_8_4_1_C  < 5)) || ((data.guest_rooms_8_4_1_C  > 5 ) && (data.guest_rooms_8_4_1_C  < 10)) || ((data.guest_rooms_8_4_1_C  > 10 ) && (data.guest_rooms_8_4_1_C  < 15)) )
				{ $scope.guest_rooms_8_4_1_C_cm = data.guest_rooms_8_4_1_C; $scope.guest_rooms_8_4_1_C = false; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = false; $scope.guest_rooms_8_4_1_C = ''; }else{ $scope.guest_rooms_8_4_1_C = ''; $scope.guest_rooms_8_4_1_C_cm = ''; $scope.guest_rooms_8_4_1_C = false; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = false;}
				if(data.guest_rooms_8_4_1_D == 5){ $scope.guest_rooms_8_4_1_D = data.guest_rooms_8_4_1_D; $scope.guest_rooms_8_4_1_D = true; $scope.guest_rooms_8_4_1_D_b = false; $scope.guest_rooms_8_4_1_D_c = false; $scope.guest_rooms_8_4_1_D_cm = ''; } else if(data.guest_rooms_8_4_1_D  == 8){ $scope.guest_rooms_8_4_1_D = data.guest_rooms_8_4_1_D; $scope.guest_rooms_8_4_1_D = false; $scope.guest_rooms_8_4_1_D_b = true; $scope.guest_rooms_8_4_1_D_c = false; $scope.guest_rooms_8_4_1_D_cm = ''; } else if(data.guest_rooms_8_4_1_D  == 10){ 
				$scope.guest_rooms_8_4_1_D = data.guest_rooms_8_4_1_D; $scope.guest_rooms_8_4_1_D = false; $scope.guest_rooms_8_4_1_D_b = false; $scope.guest_rooms_8_4_1_D_c = true; $scope.guest_rooms_8_4_1_D_cm = ''; } else if( ((data.guest_rooms_8_4_1_D  >= 0 ) && (data.guest_rooms_8_4_1_D  < 5)) || ((data.guest_rooms_8_4_1_D  > 5 ) && (data.guest_rooms_8_4_1_D  < 8)) || ((data.guest_rooms_8_4_1_D  > 8 ) && (data.guest_rooms_8_4_1_D  < 10)) ){ $scope.guest_rooms_8_4_1_D_cm = data.guest_rooms_8_4_1_D; $scope.guest_rooms_8_4_1_D = false; $scope.guest_rooms_8_4_1_D_b = false; $scope.guest_rooms_8_4_1_D_c = false; $scope.guest_rooms_8_4_1_D = ''; }else{ $scope.guest_rooms_8_4_1_D = ''; $scope.guest_rooms_8_4_1_D_cm = ''; $scope.guest_rooms_8_4_1_D = false; $scope.guest_rooms_8_4_1_D_b = false; $scope.guest_rooms_8_4_1_D_c = false;}
				$scope.guest_rooms_8_5_1_text = data.guest_rooms_8_5_1_text;
				if(data.guest_rooms_8_5_1_A  == 5){ $scope.guest_rooms_8_5_1_A  = data.guest_rooms_8_5_1_A ; $scope.guest_rooms_8_5_1_A = true; $scope.guest_rooms_8_5_1_A_b = false; $scope.guest_rooms_8_5_1_A_cm = ''; } else if(data.guest_rooms_8_5_1_A  == 10){ $scope.guest_rooms_8_5_1_A  = data.guest_rooms_8_5_1_A ; $scope.guest_rooms_8_5_1_A = false; $scope.guest_rooms_8_5_1_A_b = true; $scope.guest_rooms_8_5_1_A_cm = ''; }else if( ((data.guest_rooms_8_5_1_A  > 0 ) && (data.guest_rooms_8_5_1_A  < 5)) || ((data.guest_rooms_8_5_1_A  > 5 ) && (data.guest_rooms_8_5_1_A  < 10)))
				{ $scope.guest_rooms_8_5_1_A_cm = data.guest_rooms_8_5_1_A ; $scope.guest_rooms_8_5_1_A = false; $scope.guest_rooms_8_5_1_A_b = false; $scope.guest_rooms_8_5_1_A  = ''; }else{ $scope.guest_rooms_8_5_1_A  = ''; $scope.guest_rooms_8_5_1_A_cm = ''; $scope.guest_rooms_8_5_1_A = false; $scope.guest_rooms_8_5_1_A_b = false; }
				if(data.guest_rooms_8_5_1_B == 2){ $scope.guest_rooms_8_5_1_B = data.guest_rooms_8_5_1_B; $scope.guest_rooms_8_5_1_B = true; $scope.guest_rooms_8_5_1_B_b = false; $scope.guest_rooms_8_5_1_B_c = false; $scope.guest_rooms_8_5_1_B_cm = ''; } else if(data.guest_rooms_8_5_1_B  == 5){ $scope.guest_rooms_8_5_1_B = data.guest_rooms_8_5_1_B; $scope.guest_rooms_8_5_1_B = false; $scope.guest_rooms_8_5_1_B_b = true; $scope.guest_rooms_8_5_1_B_c = false; $scope.guest_rooms_8_5_1_B_cm = ''; } else if(data.guest_rooms_8_5_1_B  == 10){ 
				$scope.guest_rooms_8_5_1_B = data.guest_rooms_8_5_1_B; $scope.guest_rooms_8_5_1_B = false; $scope.guest_rooms_8_5_1_B_b = false; $scope.guest_rooms_8_5_1_B_c = true; $scope.guest_rooms_8_5_1_B_cm = ''; } else if( ((data.guest_rooms_8_5_1_B  >= 0 ) && (data.guest_rooms_8_5_1_B  < 2)) || ((data.guest_rooms_8_5_1_B  > 2 ) && (data.guest_rooms_8_5_1_B  < 5)) || ((data.guest_rooms_8_5_1_B  > 5 ) && (data.guest_rooms_8_5_1_B  < 10)) ){ $scope.guest_rooms_8_5_1_B_cm = data.guest_rooms_8_5_1_B; $scope.guest_rooms_8_5_1_B = false; $scope.guest_rooms_8_5_1_B_b = false; $scope.guest_rooms_8_5_1_B_c = false; $scope.guest_rooms_8_5_1_B = ''; }else{ $scope.guest_rooms_8_5_1_B = ''; $scope.guest_rooms_8_5_1_B_cm = ''; $scope.guest_rooms_8_5_1_B = false; $scope.guest_rooms_8_5_1_B_b = false; $scope.guest_rooms_8_5_1_B_c = false;}
				$scope.guest_rooms_8_6_1_text = data.guest_rooms_8_6_1_text;
				if(data.guest_rooms_8_6_1_A == 2){ $scope.guest_rooms_8_6_1_A = data.guest_rooms_8_6_1_A; $scope.guest_rooms_8_6_1_A = true; $scope.guest_rooms_8_6_1_A_b = false; $scope.guest_rooms_8_6_1_A_c = false; $scope.guest_rooms_8_6_1_A_cm = ''; } else if(data.guest_rooms_8_6_1_A  == 5){ $scope.guest_rooms_8_6_1_A = data.guest_rooms_8_6_1_A; $scope.guest_rooms_8_6_1_A = false; $scope.guest_rooms_8_6_1_A_b = true; $scope.guest_rooms_8_6_1_A_c = false; $scope.guest_rooms_8_6_1_A_cm = ''; } else if(data.guest_rooms_8_6_1_A  == 8){ 
				$scope.guest_rooms_8_6_1_A = data.guest_rooms_8_6_1_A; $scope.guest_rooms_8_6_1_A = false; $scope.guest_rooms_8_6_1_A_b = false; $scope.guest_rooms_8_6_1_A_c = true; $scope.guest_rooms_8_6_1_A_cm = ''; } else if( ((data.guest_rooms_8_6_1_A  >= 0 ) && (data.guest_rooms_8_6_1_A  < 2)) || ((data.guest_rooms_8_6_1_A  > 2 ) && (data.guest_rooms_8_6_1_A  < 5)) || ((data.guest_rooms_8_6_1_A  > 5 ) && (data.guest_rooms_8_6_1_A  < 8)) ){ $scope.guest_rooms_8_6_1_A_cm = data.guest_rooms_8_6_1_A; $scope.guest_rooms_8_6_1_A = false; $scope.guest_rooms_8_6_1_A_b = false; $scope.guest_rooms_8_6_1_A_c = false; $scope.guest_rooms_8_6_1_A = ''; }else{ $scope.guest_rooms_8_6_1_A = ''; $scope.guest_rooms_8_6_1_A_cm = ''; $scope.guest_rooms_8_6_1_A = false; $scope.guest_rooms_8_6_1_A_b = false; $scope.guest_rooms_8_6_1_A_c = false;}
				if(data.guest_rooms_8_6_1_B == 0){ $scope.guest_rooms_8_6_1_B = data.guest_rooms_8_6_1_B; $scope.guest_rooms_8_6_1_B = true; $scope.guest_rooms_8_6_1_B_b = false; $scope.guest_rooms_8_6_1_B_c = false; $scope.guest_rooms_8_6_1_B_cm = ''; } else if(data.guest_rooms_8_6_1_B  == 8){ $scope.guest_rooms_8_6_1_B = data.guest_rooms_8_6_1_B; $scope.guest_rooms_8_6_1_B = false; $scope.guest_rooms_8_6_1_B_b = true; $scope.guest_rooms_8_6_1_B_c = false; $scope.guest_rooms_8_6_1_B_cm = ''; } else if(data.guest_rooms_8_6_1_B  == ){ $scope.guest_rooms_8_6_1_B = data.guest_rooms_8_6_1_B; $scope.guest_rooms_8_6_1_B = false; $scope.guest_rooms_8_6_1_B_b = false; $scope.guest_rooms_8_6_1_B_c = true; $scope.guest_rooms_8_6_1_B_cm = ''; }else if( ((data.guest_rooms_8_6_1_B  > 0 ) && (data.guest_rooms_8_6_1_B  < 8)) || ((data.guest_rooms_8_6_1_B  > 8 ) && (data.guest_rooms_8_6_1_B  < )) )
				{ $scope.guest_rooms_8_6_1_B_cm = data.guest_rooms_8_6_1_B; $scope.guest_rooms_8_6_1_B = false; $scope.guest_rooms_8_6_1_B_b = false;  $scope.guest_rooms_8_6_1_B_c = false; $scope.guest_rooms_8_6_1_B = ''; }else{ $scope.guest_rooms_8_6_1_B = ''; $scope.guest_rooms_8_6_1_B_cm = ''; $scope.guest_rooms_8_6_1_B = false; $scope.guest_rooms_8_6_1_B_b = false; $scope.guest_rooms_8_6_1_B_c = false; }
				if(data.guest_rooms_8_6_1_C == 2){ $scope.guest_rooms_8_6_1_C = data.guest_rooms_8_6_1_C; $scope.guest_rooms_8_6_1_C = true; $scope.guest_rooms_8_6_1_C_b = false; $scope.guest_rooms_8_6_1_C_c = false; $scope.guest_rooms_8_6_1_C_cm = ''; } else if(data.guest_rooms_8_6_1_C  == 5){ $scope.guest_rooms_8_6_1_C = data.guest_rooms_8_6_1_C; $scope.guest_rooms_8_6_1_C = false; $scope.guest_rooms_8_6_1_C_b = true; $scope.guest_rooms_8_6_1_C_c = false; $scope.guest_rooms_8_6_1_C_cm = ''; } else if(data.guest_rooms_8_6_1_C  == 8){ 
				$scope.guest_rooms_8_6_1_C = data.guest_rooms_8_6_1_C; $scope.guest_rooms_8_6_1_C = false; $scope.guest_rooms_8_6_1_C_b = false; $scope.guest_rooms_8_6_1_C_c = true; $scope.guest_rooms_8_6_1_C_cm = ''; } else if( ((data.guest_rooms_8_6_1_C  >= 0 ) && (data.guest_rooms_8_6_1_C  < 2)) || ((data.guest_rooms_8_6_1_C  > 2 ) && (data.guest_rooms_8_6_1_C  < 5)) || ((data.guest_rooms_8_6_1_C  > 5 ) && (data.guest_rooms_8_6_1_C  < 8)) ){ $scope.guest_rooms_8_6_1_C_cm = data.guest_rooms_8_6_1_C; $scope.guest_rooms_8_6_1_C = false; $scope.guest_rooms_8_6_1_C_b = false; $scope.guest_rooms_8_6_1_C_c = false; $scope.guest_rooms_8_6_1_C = ''; }else{ $scope.guest_rooms_8_6_1_C = ''; $scope.guest_rooms_8_6_1_C_cm = ''; $scope.guest_rooms_8_6_1_C = false; $scope.guest_rooms_8_6_1_C_b = false; $scope.guest_rooms_8_6_1_C_c = false;}
				if(data.guest_rooms_8_6_1_D == 0){ $scope.guest_rooms_8_6_1_D = data.guest_rooms_8_6_1_D; $scope.guest_rooms_8_6_1_D = true; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = false; $scope.guest_rooms_8_6_1_D_cm = ''; } else if(data.guest_rooms_8_6_1_D  == 3){ $scope.guest_rooms_8_6_1_D = data.guest_rooms_8_6_1_D; $scope.guest_rooms_8_6_1_D = false; $scope.guest_rooms_8_6_1_D_b = true; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = false; $scope.guest_rooms_8_6_1_D_cm = ''; } else if(data.guest_rooms_8_6_1_D  == 5){ $scope.guest_rooms_8_6_1_D = data.guest_rooms_8_6_1_D; $scope.guest_rooms_8_6_1_D = false; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = true; $scope.guest_rooms_8_6_1_D_d = false; $scope.guest_rooms_8_6_1_D_cm = ''; }else if(data.guest_rooms_8_6_1_D  == 8){ $scope.guest_rooms_8_6_1_D = data.guest_rooms_8_6_1_D; $scope.guest_rooms_8_6_1_D = false; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = true; $scope.guest_rooms_8_6_1_D_cm = ''; } else if( ((data.guest_rooms_8_6_1_D  > 0 ) && (data.guest_rooms_8_6_1_D  < 3)) || ((data.guest_rooms_8_6_1_D  > 3 ) && (data.guest_rooms_8_6_1_D  < 5)) || ((data.guest_rooms_8_6_1_D  > 5 ) && (data.guest_rooms_8_6_1_D  < 8)) )
				{ $scope.guest_rooms_8_6_1_D_cm = data.guest_rooms_8_6_1_D; $scope.guest_rooms_8_6_1_D = false; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = false; $scope.guest_rooms_8_6_1_D = ''; }else{ $scope.guest_rooms_8_6_1_D = ''; $scope.guest_rooms_8_6_1_D_cm = ''; $scope.guest_rooms_8_6_1_D = false; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = false;}
				if(data.guest_rooms_8_6_1_E == 3){ $scope.guest_rooms_8_6_1_E = data.guest_rooms_8_6_1_E; $scope.guest_rooms_8_6_1_E = true; $scope.guest_rooms_8_6_1_E_b = false; $scope.guest_rooms_8_6_1_E_c = false; $scope.guest_rooms_8_6_1_E_cm = ''; } else if(data.guest_rooms_8_6_1_E  == 5){ $scope.guest_rooms_8_6_1_E = data.guest_rooms_8_6_1_E; $scope.guest_rooms_8_6_1_E = false; $scope.guest_rooms_8_6_1_E_b = true; $scope.guest_rooms_8_6_1_E_c = false; $scope.guest_rooms_8_6_1_E_cm = ''; } else if(data.guest_rooms_8_6_1_E  == 8){ 
				$scope.guest_rooms_8_6_1_E = data.guest_rooms_8_6_1_E; $scope.guest_rooms_8_6_1_E = false; $scope.guest_rooms_8_6_1_E_b = false; $scope.guest_rooms_8_6_1_E_c = true; $scope.guest_rooms_8_6_1_E_cm = ''; } else if( ((data.guest_rooms_8_6_1_E  >= 0 ) && (data.guest_rooms_8_6_1_E  < 3)) || ((data.guest_rooms_8_6_1_E  > 3 ) && (data.guest_rooms_8_6_1_E  < 5)) || ((data.guest_rooms_8_6_1_E  > 5 ) && (data.guest_rooms_8_6_1_E  < 8)) ){ $scope.guest_rooms_8_6_1_E_cm = data.guest_rooms_8_6_1_E; $scope.guest_rooms_8_6_1_E = false; $scope.guest_rooms_8_6_1_E_b = false; $scope.guest_rooms_8_6_1_E_c = false; $scope.guest_rooms_8_6_1_E = ''; }else{ $scope.guest_rooms_8_6_1_E = ''; $scope.guest_rooms_8_6_1_E_cm = ''; $scope.guest_rooms_8_6_1_E = false; $scope.guest_rooms_8_6_1_E_b = false; $scope.guest_rooms_8_6_1_E_c = false;}
				$scope.guest_rooms_8_7_1_text = data.guest_rooms_8_7_1_text;
				if(data.guest_rooms_8_7_1_A == 3){ $scope.guest_rooms_8_7_1_A = data.guest_rooms_8_7_1_A; $scope.guest_rooms_8_7_1_A = true; $scope.guest_rooms_8_7_1_A_b = false; $scope.guest_rooms_8_7_1_A_c = false; $scope.guest_rooms_8_7_1_A_cm = ''; } else if(data.guest_rooms_8_7_1_A  == 5){ $scope.guest_rooms_8_7_1_A = data.guest_rooms_8_7_1_A; $scope.guest_rooms_8_7_1_A = false; $scope.guest_rooms_8_7_1_A_b = true; $scope.guest_rooms_8_7_1_A_c = false; $scope.guest_rooms_8_7_1_A_cm = ''; } else if(data.guest_rooms_8_7_1_A  == 7){ 
				$scope.guest_rooms_8_7_1_A = data.guest_rooms_8_7_1_A; $scope.guest_rooms_8_7_1_A = false; $scope.guest_rooms_8_7_1_A_b = false; $scope.guest_rooms_8_7_1_A_c = true; $scope.guest_rooms_8_7_1_A_cm = ''; } else if( ((data.guest_rooms_8_7_1_A  >= 0 ) && (data.guest_rooms_8_7_1_A  < 3)) || ((data.guest_rooms_8_7_1_A  > 3 ) && (data.guest_rooms_8_7_1_A  < 5)) || ((data.guest_rooms_8_7_1_A  > 5 ) && (data.guest_rooms_8_7_1_A  < 7)) ){ $scope.guest_rooms_8_7_1_A_cm = data.guest_rooms_8_7_1_A; $scope.guest_rooms_8_7_1_A = false; $scope.guest_rooms_8_7_1_A_b = false; $scope.guest_rooms_8_7_1_A_c = false; $scope.guest_rooms_8_7_1_A = ''; }else{ $scope.guest_rooms_8_7_1_A = ''; $scope.guest_rooms_8_7_1_A_cm = ''; $scope.guest_rooms_8_7_1_A = false; $scope.guest_rooms_8_7_1_A_b = false; $scope.guest_rooms_8_7_1_A_c = false;}
				if(data.guest_rooms_8_7_1_B == 2){ $scope.guest_rooms_8_7_1_B = data.guest_rooms_8_7_1_B; $scope.guest_rooms_8_7_1_B = true; $scope.guest_rooms_8_7_1_B_b = false; $scope.guest_rooms_8_7_1_B_c = false; $scope.guest_rooms_8_7_1_B_cm = ''; } else if(data.guest_rooms_8_7_1_B  == 5){ $scope.guest_rooms_8_7_1_B = data.guest_rooms_8_7_1_B; $scope.guest_rooms_8_7_1_B = false; $scope.guest_rooms_8_7_1_B_b = true; $scope.guest_rooms_8_7_1_B_c = false; $scope.guest_rooms_8_7_1_B_cm = ''; } else if(data.guest_rooms_8_7_1_B  == 7){ 
				$scope.guest_rooms_8_7_1_B = data.guest_rooms_8_7_1_B; $scope.guest_rooms_8_7_1_B = false; $scope.guest_rooms_8_7_1_B_b = false; $scope.guest_rooms_8_7_1_B_c = true; $scope.guest_rooms_8_7_1_B_cm = ''; } else if( ((data.guest_rooms_8_7_1_B  >= 0 ) && (data.guest_rooms_8_7_1_B  < 2)) || ((data.guest_rooms_8_7_1_B  > 2 ) && (data.guest_rooms_8_7_1_B  < 5)) || ((data.guest_rooms_8_7_1_B  > 5 ) && (data.guest_rooms_8_7_1_B  < 7)) ){ $scope.guest_rooms_8_7_1_B_cm = data.guest_rooms_8_7_1_B; $scope.guest_rooms_8_7_1_B = false; $scope.guest_rooms_8_7_1_B_b = false; $scope.guest_rooms_8_7_1_B_c = false; $scope.guest_rooms_8_7_1_B = ''; }else{ $scope.guest_rooms_8_7_1_B = ''; $scope.guest_rooms_8_7_1_B_cm = ''; $scope.guest_rooms_8_7_1_B = false; $scope.guest_rooms_8_7_1_B_b = false; $scope.guest_rooms_8_7_1_B_c = false;}
				if(data.guest_rooms_8_7_1_C == 2){ $scope.guest_rooms_8_7_1_C = data.guest_rooms_8_7_1_C; $scope.guest_rooms_8_7_1_C = true; $scope.guest_rooms_8_7_1_C_b = false; $scope.guest_rooms_8_7_1_C_c = false; $scope.guest_rooms_8_7_1_C_cm = ''; } else if(data.guest_rooms_8_7_1_C  == 4){ $scope.guest_rooms_8_7_1_C = data.guest_rooms_8_7_1_C; $scope.guest_rooms_8_7_1_C = false; $scope.guest_rooms_8_7_1_C_b = true; $scope.guest_rooms_8_7_1_C_c = false; $scope.guest_rooms_8_7_1_C_cm = ''; } else if(data.guest_rooms_8_7_1_C  == 6){ 
				$scope.guest_rooms_8_7_1_C = data.guest_rooms_8_7_1_C; $scope.guest_rooms_8_7_1_C = false; $scope.guest_rooms_8_7_1_C_b = false; $scope.guest_rooms_8_7_1_C_c = true; $scope.guest_rooms_8_7_1_C_cm = ''; } else if( ((data.guest_rooms_8_7_1_C  >= 0 ) && (data.guest_rooms_8_7_1_C  < 2)) || ((data.guest_rooms_8_7_1_C  > 2 ) && (data.guest_rooms_8_7_1_C  < 4)) || ((data.guest_rooms_8_7_1_C  > 4 ) && (data.guest_rooms_8_7_1_C  < 6)) ){ $scope.guest_rooms_8_7_1_C_cm = data.guest_rooms_8_7_1_C; $scope.guest_rooms_8_7_1_C = false; $scope.guest_rooms_8_7_1_C_b = false; $scope.guest_rooms_8_7_1_C_c = false; $scope.guest_rooms_8_7_1_C = ''; }else{ $scope.guest_rooms_8_7_1_C = ''; $scope.guest_rooms_8_7_1_C_cm = ''; $scope.guest_rooms_8_7_1_C = false; $scope.guest_rooms_8_7_1_C_b = false; $scope.guest_rooms_8_7_1_C_c = false;}
				if(data.guest_rooms_8_7_1_D == 0){ $scope.guest_rooms_8_7_1_D = data.guest_rooms_8_7_1_D; $scope.guest_rooms_8_7_1_D = true; $scope.guest_rooms_8_7_1_D_b = false; $scope.guest_rooms_8_7_1_D_c = false; $scope.guest_rooms_8_7_1_D_cm = ''; } else if(data.guest_rooms_8_7_1_D  == 3){ $scope.guest_rooms_8_7_1_D = data.guest_rooms_8_7_1_D; $scope.guest_rooms_8_7_1_D = false; $scope.guest_rooms_8_7_1_D_b = true; $scope.guest_rooms_8_7_1_D_c = false; $scope.guest_rooms_8_7_1_D_cm = ''; } else if(data.guest_rooms_8_7_1_D  == 5){ $scope.guest_rooms_8_7_1_D = data.guest_rooms_8_7_1_D; $scope.guest_rooms_8_7_1_D = false; $scope.guest_rooms_8_7_1_D_b = false; $scope.guest_rooms_8_7_1_D_c = true; $scope.guest_rooms_8_7_1_D_cm = ''; }else if( ((data.guest_rooms_8_7_1_D  > 0 ) && (data.guest_rooms_8_7_1_D  < 3)) || ((data.guest_rooms_8_7_1_D  > 3 ) && (data.guest_rooms_8_7_1_D  < 5)) )
				{ $scope.guest_rooms_8_7_1_D_cm = data.guest_rooms_8_7_1_D; $scope.guest_rooms_8_7_1_D = false; $scope.guest_rooms_8_7_1_D_b = false;  $scope.guest_rooms_8_7_1_D_c = false; $scope.guest_rooms_8_7_1_D = ''; }else{ $scope.guest_rooms_8_7_1_D = ''; $scope.guest_rooms_8_7_1_D_cm = ''; $scope.guest_rooms_8_7_1_D = false; $scope.guest_rooms_8_7_1_D_b = false; $scope.guest_rooms_8_7_1_D_c = false; }
				if(data.guest_rooms_8_7_1_E == 0){ $scope.guest_rooms_8_7_1_E = data.guest_rooms_8_7_1_E; $scope.guest_rooms_8_7_1_E = true; $scope.guest_rooms_8_7_1_E_b = false; $scope.guest_rooms_8_7_1_E_c = false; $scope.guest_rooms_8_7_1_E_cm = ''; } else if(data.guest_rooms_8_7_1_E  == 3){ $scope.guest_rooms_8_7_1_E = data.guest_rooms_8_7_1_E; $scope.guest_rooms_8_7_1_E = false; $scope.guest_rooms_8_7_1_E_b = true; $scope.guest_rooms_8_7_1_E_c = false; $scope.guest_rooms_8_7_1_E_cm = ''; } else if(data.guest_rooms_8_7_1_E  == 5){ $scope.guest_rooms_8_7_1_E = data.guest_rooms_8_7_1_E; $scope.guest_rooms_8_7_1_E = false; $scope.guest_rooms_8_7_1_E_b = false; $scope.guest_rooms_8_7_1_E_c = true; $scope.guest_rooms_8_7_1_E_cm = ''; }else if( ((data.guest_rooms_8_7_1_E  > 0 ) && (data.guest_rooms_8_7_1_E  < 3)) || ((data.guest_rooms_8_7_1_E  > 3 ) && (data.guest_rooms_8_7_1_E  < 5)) )
				{ $scope.guest_rooms_8_7_1_E_cm = data.guest_rooms_8_7_1_E; $scope.guest_rooms_8_7_1_E = false; $scope.guest_rooms_8_7_1_E_b = false;  $scope.guest_rooms_8_7_1_E_c = false; $scope.guest_rooms_8_7_1_E = ''; }else{ $scope.guest_rooms_8_7_1_E = ''; $scope.guest_rooms_8_7_1_E_cm = ''; $scope.guest_rooms_8_7_1_E = false; $scope.guest_rooms_8_7_1_E_b = false; $scope.guest_rooms_8_7_1_E_c = false; }
				$scope.guest_rooms_8_8_1_text = data.guest_rooms_8_8_1_text;
				if(data.guest_rooms_8_8_1_A == 3){ $scope.guest_rooms_8_8_1_A = data.guest_rooms_8_8_1_A; $scope.guest_rooms_8_8_1_A = true; $scope.guest_rooms_8_8_1_A_b = false; $scope.guest_rooms_8_8_1_A_c = false; $scope.guest_rooms_8_8_1_A_cm = ''; } else if(data.guest_rooms_8_8_1_A  == 5){ $scope.guest_rooms_8_8_1_A = data.guest_rooms_8_8_1_A; $scope.guest_rooms_8_8_1_A = false; $scope.guest_rooms_8_8_1_A_b = true; $scope.guest_rooms_8_8_1_A_c = false; $scope.guest_rooms_8_8_1_A_cm = ''; } else if(data.guest_rooms_8_8_1_A  == 7){ 
				$scope.guest_rooms_8_8_1_A = data.guest_rooms_8_8_1_A; $scope.guest_rooms_8_8_1_A = false; $scope.guest_rooms_8_8_1_A_b = false; $scope.guest_rooms_8_8_1_A_c = true; $scope.guest_rooms_8_8_1_A_cm = ''; } else if( ((data.guest_rooms_8_8_1_A  >= 0 ) && (data.guest_rooms_8_8_1_A  < 3)) || ((data.guest_rooms_8_8_1_A  > 3 ) && (data.guest_rooms_8_8_1_A  < 5)) || ((data.guest_rooms_8_8_1_A  > 5 ) && (data.guest_rooms_8_8_1_A  < 7)) ){ $scope.guest_rooms_8_8_1_A_cm = data.guest_rooms_8_8_1_A; $scope.guest_rooms_8_8_1_A = false; $scope.guest_rooms_8_8_1_A_b = false; $scope.guest_rooms_8_8_1_A_c = false; $scope.guest_rooms_8_8_1_A = ''; }else{ $scope.guest_rooms_8_8_1_A = ''; $scope.guest_rooms_8_8_1_A_cm = ''; $scope.guest_rooms_8_8_1_A = false; $scope.guest_rooms_8_8_1_A_b = false; $scope.guest_rooms_8_8_1_A_c = false;}
				if(data.guest_rooms_8_8_1_B_a == 2){ $scope.guest_rooms_8_8_1_B_a = data.guest_rooms_8_8_1_B_a; $scope.guest_rooms_8_8_1_B_a= true; $scope.guest_rooms_8_8_1_B_a_cm = ''; } else if((data.guest_rooms_8_8_1_B_a > 0 ) && (data.guest_rooms_8_8_1_B_a < 2)){ $scope.guest_rooms_8_8_1_B_a_cm = data.guest_rooms_8_8_1_B_a; $scope.guest_rooms_8_8_1_B_a= false; $scope.guest_rooms_8_8_1_B_a= ''; }else{ $scope.guest_rooms_8_8_1_B_a= ''; $scope.guest_rooms_8_8_1_B_a_cm = ''; $scope.guest_rooms_8_8_1_B_a= false; }
				if(data.guest_rooms_8_8_1_B_b == 2){ $scope.guest_rooms_8_8_1_B_b = data.guest_rooms_8_8_1_B_b; $scope.guest_rooms_8_8_1_B_b= true; $scope.guest_rooms_8_8_1_B_b_cm = ''; } else if((data.guest_rooms_8_8_1_B_b > 0 ) && (data.guest_rooms_8_8_1_B_b < 2)){ $scope.guest_rooms_8_8_1_B_b_cm = data.guest_rooms_8_8_1_B_b; $scope.guest_rooms_8_8_1_B_b= false; $scope.guest_rooms_8_8_1_B_b= ''; }else{ $scope.guest_rooms_8_8_1_B_b= ''; $scope.guest_rooms_8_8_1_B_b_cm = ''; $scope.guest_rooms_8_8_1_B_b= false; }
				if(data.guest_rooms_8_8_1_B_c == 2){ $scope.guest_rooms_8_8_1_B_c = data.guest_rooms_8_8_1_B_c; $scope.guest_rooms_8_8_1_B_c= true; $scope.guest_rooms_8_8_1_B_c_cm = ''; } else if((data.guest_rooms_8_8_1_B_c > 0 ) && (data.guest_rooms_8_8_1_B_c < 2)){ $scope.guest_rooms_8_8_1_B_c_cm = data.guest_rooms_8_8_1_B_c; $scope.guest_rooms_8_8_1_B_c= false; $scope.guest_rooms_8_8_1_B_c= ''; }else{ $scope.guest_rooms_8_8_1_B_c= ''; $scope.guest_rooms_8_8_1_B_c_cm = ''; $scope.guest_rooms_8_8_1_B_c= false; }
				if(data.guest_rooms_8_8_1_B_d == 2){ $scope.guest_rooms_8_8_1_B_d = data.guest_rooms_8_8_1_B_d; $scope.guest_rooms_8_8_1_B_d= true; $scope.guest_rooms_8_8_1_B_d_cm = ''; } else if((data.guest_rooms_8_8_1_B_d > 0 ) && (data.guest_rooms_8_8_1_B_d < 2)){ $scope.guest_rooms_8_8_1_B_d_cm = data.guest_rooms_8_8_1_B_d; $scope.guest_rooms_8_8_1_B_d= false; $scope.guest_rooms_8_8_1_B_d= ''; }else{ $scope.guest_rooms_8_8_1_B_d= ''; $scope.guest_rooms_8_8_1_B_d_cm = ''; $scope.guest_rooms_8_8_1_B_d= false; }
				if(data.guest_rooms_8_8_1_B_e == 2){ $scope.guest_rooms_8_8_1_B_e = data.guest_rooms_8_8_1_B_e; $scope.guest_rooms_8_8_1_B_e= true; $scope.guest_rooms_8_8_1_B_e_cm = ''; } else if((data.guest_rooms_8_8_1_B_e > 0 ) && (data.guest_rooms_8_8_1_B_e < 2)){ $scope.guest_rooms_8_8_1_B_e_cm = data.guest_rooms_8_8_1_B_e; $scope.guest_rooms_8_8_1_B_e= false; $scope.guest_rooms_8_8_1_B_e= ''; }else{ $scope.guest_rooms_8_8_1_B_e= ''; $scope.guest_rooms_8_8_1_B_e_cm = ''; $scope.guest_rooms_8_8_1_B_e= false; }
				if(data.guest_rooms_8_8_1_B_f == 2){ $scope.guest_rooms_8_8_1_B_f = data.guest_rooms_8_8_1_B_f; $scope.guest_rooms_8_8_1_B_f= true; $scope.guest_rooms_8_8_1_B_f_cm = ''; } else if((data.guest_rooms_8_8_1_B_f > 0 ) && (data.guest_rooms_8_8_1_B_f < 2)){ $scope.guest_rooms_8_8_1_B_f_cm = data.guest_rooms_8_8_1_B_f; $scope.guest_rooms_8_8_1_B_f= false; $scope.guest_rooms_8_8_1_B_f= ''; }else{ $scope.guest_rooms_8_8_1_B_f= ''; $scope.guest_rooms_8_8_1_B_f_cm = ''; $scope.guest_rooms_8_8_1_B_f= false; }
				if(data.guest_rooms_8_8_1_C_a == 2){ $scope.guest_rooms_8_8_1_C_a = data.guest_rooms_8_8_1_C_a; $scope.guest_rooms_8_8_1_C_a= true; $scope.guest_rooms_8_8_1_C_a_cm = ''; } else if((data.guest_rooms_8_8_1_C_a > 0 ) && (data.guest_rooms_8_8_1_C_a < 2)){ $scope.guest_rooms_8_8_1_C_a_cm = data.guest_rooms_8_8_1_C_a; $scope.guest_rooms_8_8_1_C_a= false; $scope.guest_rooms_8_8_1_C_a= ''; }else{ $scope.guest_rooms_8_8_1_C_a= ''; $scope.guest_rooms_8_8_1_C_a_cm = ''; $scope.guest_rooms_8_8_1_C_a= false; }
				if(data.guest_rooms_8_8_1_C_b == 3){ $scope.guest_rooms_8_8_1_C_b = data.guest_rooms_8_8_1_C_b; $scope.guest_rooms_8_8_1_C_b= true; $scope.guest_rooms_8_8_1_C_b_cm = ''; } else if((data.guest_rooms_8_8_1_C_b > 0 ) && (data.guest_rooms_8_8_1_C_b < 3)){ $scope.guest_rooms_8_8_1_C_b_cm = data.guest_rooms_8_8_1_C_b; $scope.guest_rooms_8_8_1_C_b= false; $scope.guest_rooms_8_8_1_C_b= ''; }else{ $scope.guest_rooms_8_8_1_C_b= ''; $scope.guest_rooms_8_8_1_C_b_cm = ''; $scope.guest_rooms_8_8_1_C_b= false; }
				if(data.guest_rooms_8_8_1_D == 2){ $scope.guest_rooms_8_8_1_D = data.guest_rooms_8_8_1_D; $scope.guest_rooms_8_8_1_D = true; $scope.guest_rooms_8_8_1_D_b = false; $scope.guest_rooms_8_8_1_D_c = false; $scope.guest_rooms_8_8_1_D_cm = ''; } else if(data.guest_rooms_8_8_1_D  == 4){ $scope.guest_rooms_8_8_1_D = data.guest_rooms_8_8_1_D; $scope.guest_rooms_8_8_1_D = false; $scope.guest_rooms_8_8_1_D_b = true; $scope.guest_rooms_8_8_1_D_c = false; $scope.guest_rooms_8_8_1_D_cm = ''; } else if(data.guest_rooms_8_8_1_D  == 6){ 
				$scope.guest_rooms_8_8_1_D = data.guest_rooms_8_8_1_D; $scope.guest_rooms_8_8_1_D = false; $scope.guest_rooms_8_8_1_D_b = false; $scope.guest_rooms_8_8_1_D_c = true; $scope.guest_rooms_8_8_1_D_cm = ''; } else if( ((data.guest_rooms_8_8_1_D  >= 0 ) && (data.guest_rooms_8_8_1_D  < 2)) || ((data.guest_rooms_8_8_1_D  > 2 ) && (data.guest_rooms_8_8_1_D  < 4)) || ((data.guest_rooms_8_8_1_D  > 4 ) && (data.guest_rooms_8_8_1_D  < 6)) ){ $scope.guest_rooms_8_8_1_D_cm = data.guest_rooms_8_8_1_D; $scope.guest_rooms_8_8_1_D = false; $scope.guest_rooms_8_8_1_D_b = false; $scope.guest_rooms_8_8_1_D_c = false; $scope.guest_rooms_8_8_1_D = ''; }else{ $scope.guest_rooms_8_8_1_D = ''; $scope.guest_rooms_8_8_1_D_cm = ''; $scope.guest_rooms_8_8_1_D = false; $scope.guest_rooms_8_8_1_D_b = false; $scope.guest_rooms_8_8_1_D_c = false;}
				$scope.guest_rooms_8_9_1_text = data.guest_rooms_8_9_1_text;
				if(data.guest_rooms_8_9_1_A == 0){ $scope.guest_rooms_8_9_1_A = data.guest_rooms_8_9_1_A; $scope.guest_rooms_8_9_1_A = true; $scope.guest_rooms_8_9_1_A_b = false; $scope.guest_rooms_8_9_1_A_c = false; $scope.guest_rooms_8_9_1_A_cm = ''; } else if(data.guest_rooms_8_9_1_A  == 10){ $scope.guest_rooms_8_9_1_A = data.guest_rooms_8_9_1_A; $scope.guest_rooms_8_9_1_A = false; $scope.guest_rooms_8_9_1_A_b = true; $scope.guest_rooms_8_9_1_A_c = false; $scope.guest_rooms_8_9_1_A_cm = ''; } else if(data.guest_rooms_8_9_1_A  == ){ $scope.guest_rooms_8_9_1_A = data.guest_rooms_8_9_1_A; $scope.guest_rooms_8_9_1_A = false; $scope.guest_rooms_8_9_1_A_b = false; $scope.guest_rooms_8_9_1_A_c = true; $scope.guest_rooms_8_9_1_A_cm = ''; }else if( ((data.guest_rooms_8_9_1_A  > 0 ) && (data.guest_rooms_8_9_1_A  < 10)) || ((data.guest_rooms_8_9_1_A  > 10 ) && (data.guest_rooms_8_9_1_A  < )) )
				{ $scope.guest_rooms_8_9_1_A_cm = data.guest_rooms_8_9_1_A; $scope.guest_rooms_8_9_1_A = false; $scope.guest_rooms_8_9_1_A_b = false;  $scope.guest_rooms_8_9_1_A_c = false; $scope.guest_rooms_8_9_1_A = ''; }else{ $scope.guest_rooms_8_9_1_A = ''; $scope.guest_rooms_8_9_1_A_cm = ''; $scope.guest_rooms_8_9_1_A = false; $scope.guest_rooms_8_9_1_A_b = false; $scope.guest_rooms_8_9_1_A_c = false; }
				if(data.guest_rooms_8_9_1_B == 10){ $scope.guest_rooms_8_9_1_B = data.guest_rooms_8_9_1_B; $scope.guest_rooms_8_9_1_B = true; $scope.guest_rooms_8_9_1_B_b = false; $scope.guest_rooms_8_9_1_B_c = false; $scope.guest_rooms_8_9_1_B_cm = ''; } else if(data.guest_rooms_8_9_1_B  == 15){ $scope.guest_rooms_8_9_1_B = data.guest_rooms_8_9_1_B; $scope.guest_rooms_8_9_1_B = false; $scope.guest_rooms_8_9_1_B_b = true; $scope.guest_rooms_8_9_1_B_c = false; $scope.guest_rooms_8_9_1_B_cm = ''; } else if(data.guest_rooms_8_9_1_B  == 20){ 
				$scope.guest_rooms_8_9_1_B = data.guest_rooms_8_9_1_B; $scope.guest_rooms_8_9_1_B = false; $scope.guest_rooms_8_9_1_B_b = false; $scope.guest_rooms_8_9_1_B_c = true; $scope.guest_rooms_8_9_1_B_cm = ''; } else if( ((data.guest_rooms_8_9_1_B  >= 0 ) && (data.guest_rooms_8_9_1_B  < 10)) || ((data.guest_rooms_8_9_1_B  > 10 ) && (data.guest_rooms_8_9_1_B  < 15)) || ((data.guest_rooms_8_9_1_B  > 15 ) && (data.guest_rooms_8_9_1_B  < 20)) ){ $scope.guest_rooms_8_9_1_B_cm = data.guest_rooms_8_9_1_B; $scope.guest_rooms_8_9_1_B = false; $scope.guest_rooms_8_9_1_B_b = false; $scope.guest_rooms_8_9_1_B_c = false; $scope.guest_rooms_8_9_1_B = ''; }else{ $scope.guest_rooms_8_9_1_B = ''; $scope.guest_rooms_8_9_1_B_cm = ''; $scope.guest_rooms_8_9_1_B = false; $scope.guest_rooms_8_9_1_B_b = false; $scope.guest_rooms_8_9_1_B_c = false;}
				$scope.guest_rooms_8_10_1_text = data.guest_rooms_8_10_1_text;
				if(data.guest_rooms_8_10_1_A_a == 2){ $scope.guest_rooms_8_10_1_A_a = data.guest_rooms_8_10_1_A_a; $scope.guest_rooms_8_10_1_A_a= true; $scope.guest_rooms_8_10_1_A_a_cm = ''; } else if((data.guest_rooms_8_10_1_A_a > 0 ) && (data.guest_rooms_8_10_1_A_a < 2)){ $scope.guest_rooms_8_10_1_A_a_cm = data.guest_rooms_8_10_1_A_a; $scope.guest_rooms_8_10_1_A_a= false; $scope.guest_rooms_8_10_1_A_a= ''; }else{ $scope.guest_rooms_8_10_1_A_a= ''; $scope.guest_rooms_8_10_1_A_a_cm = ''; $scope.guest_rooms_8_10_1_A_a= false; }
				if(data.guest_rooms_8_10_1_A_b == 2){ $scope.guest_rooms_8_10_1_A_b = data.guest_rooms_8_10_1_A_b; $scope.guest_rooms_8_10_1_A_b= true; $scope.guest_rooms_8_10_1_A_b_cm = ''; } else if((data.guest_rooms_8_10_1_A_b > 0 ) && (data.guest_rooms_8_10_1_A_b < 2)){ $scope.guest_rooms_8_10_1_A_b_cm = data.guest_rooms_8_10_1_A_b; $scope.guest_rooms_8_10_1_A_b= false; $scope.guest_rooms_8_10_1_A_b= ''; }else{ $scope.guest_rooms_8_10_1_A_b= ''; $scope.guest_rooms_8_10_1_A_b_cm = ''; $scope.guest_rooms_8_10_1_A_b= false; }
				if(data.guest_rooms_8_10_1_A_c == 2){ $scope.guest_rooms_8_10_1_A_c = data.guest_rooms_8_10_1_A_c; $scope.guest_rooms_8_10_1_A_c= true; $scope.guest_rooms_8_10_1_A_c_cm = ''; } else if((data.guest_rooms_8_10_1_A_c > 0 ) && (data.guest_rooms_8_10_1_A_c < 2)){ $scope.guest_rooms_8_10_1_A_c_cm = data.guest_rooms_8_10_1_A_c; $scope.guest_rooms_8_10_1_A_c= false; $scope.guest_rooms_8_10_1_A_c= ''; }else{ $scope.guest_rooms_8_10_1_A_c= ''; $scope.guest_rooms_8_10_1_A_c_cm = ''; $scope.guest_rooms_8_10_1_A_c= false; }
				if(data.guest_rooms_8_10_1_A_d == 2){ $scope.guest_rooms_8_10_1_A_d = data.guest_rooms_8_10_1_A_d; $scope.guest_rooms_8_10_1_A_d= true; $scope.guest_rooms_8_10_1_A_d_cm = ''; } else if((data.guest_rooms_8_10_1_A_d > 0 ) && (data.guest_rooms_8_10_1_A_d < 2)){ $scope.guest_rooms_8_10_1_A_d_cm = data.guest_rooms_8_10_1_A_d; $scope.guest_rooms_8_10_1_A_d= false; $scope.guest_rooms_8_10_1_A_d= ''; }else{ $scope.guest_rooms_8_10_1_A_d= ''; $scope.guest_rooms_8_10_1_A_d_cm = ''; $scope.guest_rooms_8_10_1_A_d= false; }
				if(data.guest_rooms_8_10_1_A_e == 2){ $scope.guest_rooms_8_10_1_A_e = data.guest_rooms_8_10_1_A_e; $scope.guest_rooms_8_10_1_A_e= true; $scope.guest_rooms_8_10_1_A_e_cm = ''; } else if((data.guest_rooms_8_10_1_A_e > 0 ) && (data.guest_rooms_8_10_1_A_e < 2)){ $scope.guest_rooms_8_10_1_A_e_cm = data.guest_rooms_8_10_1_A_e; $scope.guest_rooms_8_10_1_A_e= false; $scope.guest_rooms_8_10_1_A_e= ''; }else{ $scope.guest_rooms_8_10_1_A_e= ''; $scope.guest_rooms_8_10_1_A_e_cm = ''; $scope.guest_rooms_8_10_1_A_e= false; }
				if(data.guest_rooms_8_10_1_B_a == 2){ $scope.guest_rooms_8_10_1_B_a = data.guest_rooms_8_10_1_B_a; $scope.guest_rooms_8_10_1_B_a= true; $scope.guest_rooms_8_10_1_B_a_cm = ''; } else if((data.guest_rooms_8_10_1_B_a > 0 ) && (data.guest_rooms_8_10_1_B_a < 2)){ $scope.guest_rooms_8_10_1_B_a_cm = data.guest_rooms_8_10_1_B_a; $scope.guest_rooms_8_10_1_B_a= false; $scope.guest_rooms_8_10_1_B_a= ''; }else{ $scope.guest_rooms_8_10_1_B_a= ''; $scope.guest_rooms_8_10_1_B_a_cm = ''; $scope.guest_rooms_8_10_1_B_a= false; }
				if(data.guest_rooms_8_10_1_B_b == 2){ $scope.guest_rooms_8_10_1_B_b = data.guest_rooms_8_10_1_B_b; $scope.guest_rooms_8_10_1_B_b= true; $scope.guest_rooms_8_10_1_B_b_cm = ''; } else if((data.guest_rooms_8_10_1_B_b > 0 ) && (data.guest_rooms_8_10_1_B_b < 2)){ $scope.guest_rooms_8_10_1_B_b_cm = data.guest_rooms_8_10_1_B_b; $scope.guest_rooms_8_10_1_B_b= false; $scope.guest_rooms_8_10_1_B_b= ''; }else{ $scope.guest_rooms_8_10_1_B_b= ''; $scope.guest_rooms_8_10_1_B_b_cm = ''; $scope.guest_rooms_8_10_1_B_b= false; }
				if(data.guest_rooms_8_10_1_B_c == 1){ $scope.guest_rooms_8_10_1_B_c = data.guest_rooms_8_10_1_B_c; $scope.guest_rooms_8_10_1_B_c= true; $scope.guest_rooms_8_10_1_B_c_cm = ''; } else if((data.guest_rooms_8_10_1_B_c > 0 ) && (data.guest_rooms_8_10_1_B_c < 1)){ $scope.guest_rooms_8_10_1_B_c_cm = data.guest_rooms_8_10_1_B_c; $scope.guest_rooms_8_10_1_B_c= false; $scope.guest_rooms_8_10_1_B_c= ''; }else{ $scope.guest_rooms_8_10_1_B_c= ''; $scope.guest_rooms_8_10_1_B_c_cm = ''; $scope.guest_rooms_8_10_1_B_c= false; }
				if(data.guest_rooms_8_10_1_B_d == 1){ $scope.guest_rooms_8_10_1_B_d = data.guest_rooms_8_10_1_B_d; $scope.guest_rooms_8_10_1_B_d= true; $scope.guest_rooms_8_10_1_B_d_cm = ''; } else if((data.guest_rooms_8_10_1_B_d > 0 ) && (data.guest_rooms_8_10_1_B_d < 1)){ $scope.guest_rooms_8_10_1_B_d_cm = data.guest_rooms_8_10_1_B_d; $scope.guest_rooms_8_10_1_B_d= false; $scope.guest_rooms_8_10_1_B_d= ''; }else{ $scope.guest_rooms_8_10_1_B_d= ''; $scope.guest_rooms_8_10_1_B_d_cm = ''; $scope.guest_rooms_8_10_1_B_d= false; }
				if(data.guest_rooms_8_10_1_C == 1){ $scope.guest_rooms_8_10_1_C = data.guest_rooms_8_10_1_C; $scope.guest_rooms_8_10_1_C = true; $scope.guest_rooms_8_10_1_C_b = false; $scope.guest_rooms_8_10_1_C_c = false; $scope.guest_rooms_8_10_1_C_cm = ''; } else if(data.guest_rooms_8_10_1_C  == 2){ $scope.guest_rooms_8_10_1_C = data.guest_rooms_8_10_1_C; $scope.guest_rooms_8_10_1_C = false; $scope.guest_rooms_8_10_1_C_b = true; $scope.guest_rooms_8_10_1_C_c = false; $scope.guest_rooms_8_10_1_C_cm = ''; } else if(data.guest_rooms_8_10_1_C  == 4){ 
				$scope.guest_rooms_8_10_1_C = data.guest_rooms_8_10_1_C; $scope.guest_rooms_8_10_1_C = false; $scope.guest_rooms_8_10_1_C_b = false; $scope.guest_rooms_8_10_1_C_c = true; $scope.guest_rooms_8_10_1_C_cm = ''; } else if( ((data.guest_rooms_8_10_1_C  >= 0 ) && (data.guest_rooms_8_10_1_C  < 1)) || ((data.guest_rooms_8_10_1_C  > 1 ) && (data.guest_rooms_8_10_1_C  < 2)) || ((data.guest_rooms_8_10_1_C  > 2 ) && (data.guest_rooms_8_10_1_C  < 4)) ){ $scope.guest_rooms_8_10_1_C_cm = data.guest_rooms_8_10_1_C; $scope.guest_rooms_8_10_1_C = false; $scope.guest_rooms_8_10_1_C_b = false; $scope.guest_rooms_8_10_1_C_c = false; $scope.guest_rooms_8_10_1_C = ''; }else{ $scope.guest_rooms_8_10_1_C = ''; $scope.guest_rooms_8_10_1_C_cm = ''; $scope.guest_rooms_8_10_1_C = false; $scope.guest_rooms_8_10_1_C_b = false; $scope.guest_rooms_8_10_1_C_c = false;}
				$scope.guest_rooms_8_11_1_text = data.guest_rooms_8_11_1_text;
				if(data.guest_rooms_8_11_1_A == 0){ $scope.guest_rooms_8_11_1_A = data.guest_rooms_8_11_1_A; $scope.guest_rooms_8_11_1_A = true; $scope.guest_rooms_8_11_1_A_b = false; $scope.guest_rooms_8_11_1_A_c = false; $scope.guest_rooms_8_11_1_A_cm = ''; } else if(data.guest_rooms_8_11_1_A  == 2){ $scope.guest_rooms_8_11_1_A = data.guest_rooms_8_11_1_A; $scope.guest_rooms_8_11_1_A = false; $scope.guest_rooms_8_11_1_A_b = true; $scope.guest_rooms_8_11_1_A_c = false; $scope.guest_rooms_8_11_1_A_cm = ''; } else if(data.guest_rooms_8_11_1_A  == ){ $scope.guest_rooms_8_11_1_A = data.guest_rooms_8_11_1_A; $scope.guest_rooms_8_11_1_A = false; $scope.guest_rooms_8_11_1_A_b = false; $scope.guest_rooms_8_11_1_A_c = true; $scope.guest_rooms_8_11_1_A_cm = ''; }else if( ((data.guest_rooms_8_11_1_A  > 0 ) && (data.guest_rooms_8_11_1_A  < 2)) || ((data.guest_rooms_8_11_1_A  > 2 ) && (data.guest_rooms_8_11_1_A  < )) )
				{ $scope.guest_rooms_8_11_1_A_cm = data.guest_rooms_8_11_1_A; $scope.guest_rooms_8_11_1_A = false; $scope.guest_rooms_8_11_1_A_b = false;  $scope.guest_rooms_8_11_1_A_c = false; $scope.guest_rooms_8_11_1_A = ''; }else{ $scope.guest_rooms_8_11_1_A = ''; $scope.guest_rooms_8_11_1_A_cm = ''; $scope.guest_rooms_8_11_1_A = false; $scope.guest_rooms_8_11_1_A_b = false; $scope.guest_rooms_8_11_1_A_c = false; }
				if(data.guest_rooms_8_11_1_B  == 1){ $scope.guest_rooms_8_11_1_B  = data.guest_rooms_8_11_1_B ; $scope.guest_rooms_8_11_1_B = true; $scope.guest_rooms_8_11_1_B_b = false; $scope.guest_rooms_8_11_1_B_cm = ''; } else if(data.guest_rooms_8_11_1_B  == 3){ $scope.guest_rooms_8_11_1_B  = data.guest_rooms_8_11_1_B ; $scope.guest_rooms_8_11_1_B = false; $scope.guest_rooms_8_11_1_B_b = true; $scope.guest_rooms_8_11_1_B_cm = ''; }else if( ((data.guest_rooms_8_11_1_B  > 0 ) && (data.guest_rooms_8_11_1_B  < 1)) || ((data.guest_rooms_8_11_1_B  > 1 ) && (data.guest_rooms_8_11_1_B  < 3)))
				{ $scope.guest_rooms_8_11_1_B_cm = data.guest_rooms_8_11_1_B ; $scope.guest_rooms_8_11_1_B = false; $scope.guest_rooms_8_11_1_B_b = false; $scope.guest_rooms_8_11_1_B  = ''; }else{ $scope.guest_rooms_8_11_1_B  = ''; $scope.guest_rooms_8_11_1_B_cm = ''; $scope.guest_rooms_8_11_1_B = false; $scope.guest_rooms_8_11_1_B_b = false; }
				if(data.guest_rooms_8_11_1_C_a == 2){ $scope.guest_rooms_8_11_1_C_a = data.guest_rooms_8_11_1_C_a; $scope.guest_rooms_8_11_1_C_a= true; $scope.guest_rooms_8_11_1_C_a_cm = ''; } else if((data.guest_rooms_8_11_1_C_a > 0 ) && (data.guest_rooms_8_11_1_C_a < 2)){ $scope.guest_rooms_8_11_1_C_a_cm = data.guest_rooms_8_11_1_C_a; $scope.guest_rooms_8_11_1_C_a= false; $scope.guest_rooms_8_11_1_C_a= ''; }else{ $scope.guest_rooms_8_11_1_C_a= ''; $scope.guest_rooms_8_11_1_C_a_cm = ''; $scope.guest_rooms_8_11_1_C_a= false; }
				if(data.guest_rooms_8_11_1_C_b == 2){ $scope.guest_rooms_8_11_1_C_b = data.guest_rooms_8_11_1_C_b; $scope.guest_rooms_8_11_1_C_b= true; $scope.guest_rooms_8_11_1_C_b_cm = ''; } else if((data.guest_rooms_8_11_1_C_b > 0 ) && (data.guest_rooms_8_11_1_C_b < 2)){ $scope.guest_rooms_8_11_1_C_b_cm = data.guest_rooms_8_11_1_C_b; $scope.guest_rooms_8_11_1_C_b= false; $scope.guest_rooms_8_11_1_C_b= ''; }else{ $scope.guest_rooms_8_11_1_C_b= ''; $scope.guest_rooms_8_11_1_C_b_cm = ''; $scope.guest_rooms_8_11_1_C_b= false; }
				if(data.guest_rooms_8_11_1_C_c == 2){ $scope.guest_rooms_8_11_1_C_c = data.guest_rooms_8_11_1_C_c; $scope.guest_rooms_8_11_1_C_c= true; $scope.guest_rooms_8_11_1_C_c_cm = ''; } else if((data.guest_rooms_8_11_1_C_c > 0 ) && (data.guest_rooms_8_11_1_C_c < 2)){ $scope.guest_rooms_8_11_1_C_c_cm = data.guest_rooms_8_11_1_C_c; $scope.guest_rooms_8_11_1_C_c= false; $scope.guest_rooms_8_11_1_C_c= ''; }else{ $scope.guest_rooms_8_11_1_C_c= ''; $scope.guest_rooms_8_11_1_C_c_cm = ''; $scope.guest_rooms_8_11_1_C_c= false; }
				if(data.guest_rooms_8_11_1_D == 0){ $scope.guest_rooms_8_11_1_D = data.guest_rooms_8_11_1_D; $scope.guest_rooms_8_11_1_D = true; $scope.guest_rooms_8_11_1_D_b = false; $scope.guest_rooms_8_11_1_D_c = false; $scope.guest_rooms_8_11_1_D_cm = ''; } else if(data.guest_rooms_8_11_1_D  == 2){ $scope.guest_rooms_8_11_1_D = data.guest_rooms_8_11_1_D; $scope.guest_rooms_8_11_1_D = false; $scope.guest_rooms_8_11_1_D_b = true; $scope.guest_rooms_8_11_1_D_c = false; $scope.guest_rooms_8_11_1_D_cm = ''; } else if(data.guest_rooms_8_11_1_D  == ){ $scope.guest_rooms_8_11_1_D = data.guest_rooms_8_11_1_D; $scope.guest_rooms_8_11_1_D = false; $scope.guest_rooms_8_11_1_D_b = false; $scope.guest_rooms_8_11_1_D_c = true; $scope.guest_rooms_8_11_1_D_cm = ''; }else if( ((data.guest_rooms_8_11_1_D  > 0 ) && (data.guest_rooms_8_11_1_D  < 2)) || ((data.guest_rooms_8_11_1_D  > 2 ) && (data.guest_rooms_8_11_1_D  < )) )
				{ $scope.guest_rooms_8_11_1_D_cm = data.guest_rooms_8_11_1_D; $scope.guest_rooms_8_11_1_D = false; $scope.guest_rooms_8_11_1_D_b = false;  $scope.guest_rooms_8_11_1_D_c = false; $scope.guest_rooms_8_11_1_D = ''; }else{ $scope.guest_rooms_8_11_1_D = ''; $scope.guest_rooms_8_11_1_D_cm = ''; $scope.guest_rooms_8_11_1_D = false; $scope.guest_rooms_8_11_1_D_b = false; $scope.guest_rooms_8_11_1_D_c = false; }
				if(data.guest_rooms_8_11_1_E == 2){ $scope.guest_rooms_8_11_1_E = data.guest_rooms_8_11_1_E; $scope.guest_rooms_8_11_1_E = true; $scope.guest_rooms_8_11_1_E_b = false; $scope.guest_rooms_8_11_1_E_c = false; $scope.guest_rooms_8_11_1_E_cm = ''; } else if(data.guest_rooms_8_11_1_E  == 4){ $scope.guest_rooms_8_11_1_E = data.guest_rooms_8_11_1_E; $scope.guest_rooms_8_11_1_E = false; $scope.guest_rooms_8_11_1_E_b = true; $scope.guest_rooms_8_11_1_E_c = false; $scope.guest_rooms_8_11_1_E_cm = ''; } else if(data.guest_rooms_8_11_1_E  == 6){ 
				$scope.guest_rooms_8_11_1_E = data.guest_rooms_8_11_1_E; $scope.guest_rooms_8_11_1_E = false; $scope.guest_rooms_8_11_1_E_b = false; $scope.guest_rooms_8_11_1_E_c = true; $scope.guest_rooms_8_11_1_E_cm = ''; } else if( ((data.guest_rooms_8_11_1_E  >= 0 ) && (data.guest_rooms_8_11_1_E  < 2)) || ((data.guest_rooms_8_11_1_E  > 2 ) && (data.guest_rooms_8_11_1_E  < 4)) || ((data.guest_rooms_8_11_1_E  > 4 ) && (data.guest_rooms_8_11_1_E  < 6)) ){ $scope.guest_rooms_8_11_1_E_cm = data.guest_rooms_8_11_1_E; $scope.guest_rooms_8_11_1_E = false; $scope.guest_rooms_8_11_1_E_b = false; $scope.guest_rooms_8_11_1_E_c = false; $scope.guest_rooms_8_11_1_E = ''; }else{ $scope.guest_rooms_8_11_1_E = ''; $scope.guest_rooms_8_11_1_E_cm = ''; $scope.guest_rooms_8_11_1_E = false; $scope.guest_rooms_8_11_1_E_b = false; $scope.guest_rooms_8_11_1_E_c = false;}
				$scope.guest_rooms_8_12_1_text = data.guest_rooms_8_12_1_text;
				if(data.guest_rooms_8_12_1_A == 0){ $scope.guest_rooms_8_12_1_A = data.guest_rooms_8_12_1_A; $scope.guest_rooms_8_12_1_A = true; $scope.guest_rooms_8_12_1_A_b = false; $scope.guest_rooms_8_12_1_A_c = false; $scope.guest_rooms_8_12_1_A_cm = ''; } else if(data.guest_rooms_8_12_1_A  == 5){ $scope.guest_rooms_8_12_1_A = data.guest_rooms_8_12_1_A; $scope.guest_rooms_8_12_1_A = false; $scope.guest_rooms_8_12_1_A_b = true; $scope.guest_rooms_8_12_1_A_c = false; $scope.guest_rooms_8_12_1_A_cm = ''; } else if(data.guest_rooms_8_12_1_A  == ){ $scope.guest_rooms_8_12_1_A = data.guest_rooms_8_12_1_A; $scope.guest_rooms_8_12_1_A = false; $scope.guest_rooms_8_12_1_A_b = false; $scope.guest_rooms_8_12_1_A_c = true; $scope.guest_rooms_8_12_1_A_cm = ''; }else if( ((data.guest_rooms_8_12_1_A  > 0 ) && (data.guest_rooms_8_12_1_A  < 5)) || ((data.guest_rooms_8_12_1_A  > 5 ) && (data.guest_rooms_8_12_1_A  < )) )
				{ $scope.guest_rooms_8_12_1_A_cm = data.guest_rooms_8_12_1_A; $scope.guest_rooms_8_12_1_A = false; $scope.guest_rooms_8_12_1_A_b = false;  $scope.guest_rooms_8_12_1_A_c = false; $scope.guest_rooms_8_12_1_A = ''; }else{ $scope.guest_rooms_8_12_1_A = ''; $scope.guest_rooms_8_12_1_A_cm = ''; $scope.guest_rooms_8_12_1_A = false; $scope.guest_rooms_8_12_1_A_b = false; $scope.guest_rooms_8_12_1_A_c = false; }
				if(data.guest_rooms_8_12_1_B == 3){ $scope.guest_rooms_8_12_1_B = data.guest_rooms_8_12_1_B; $scope.guest_rooms_8_12_1_B = true; $scope.guest_rooms_8_12_1_B_b = false; $scope.guest_rooms_8_12_1_B_c = false; $scope.guest_rooms_8_12_1_B_cm = ''; } else if(data.guest_rooms_8_12_1_B  == 5){ $scope.guest_rooms_8_12_1_B = data.guest_rooms_8_12_1_B; $scope.guest_rooms_8_12_1_B = false; $scope.guest_rooms_8_12_1_B_b = true; $scope.guest_rooms_8_12_1_B_c = false; $scope.guest_rooms_8_12_1_B_cm = ''; } else if(data.guest_rooms_8_12_1_B  == 7){ 
				$scope.guest_rooms_8_12_1_B = data.guest_rooms_8_12_1_B; $scope.guest_rooms_8_12_1_B = false; $scope.guest_rooms_8_12_1_B_b = false; $scope.guest_rooms_8_12_1_B_c = true; $scope.guest_rooms_8_12_1_B_cm = ''; } else if( ((data.guest_rooms_8_12_1_B  >= 0 ) && (data.guest_rooms_8_12_1_B  < 3)) || ((data.guest_rooms_8_12_1_B  > 3 ) && (data.guest_rooms_8_12_1_B  < 5)) || ((data.guest_rooms_8_12_1_B  > 5 ) && (data.guest_rooms_8_12_1_B  < 7)) ){ $scope.guest_rooms_8_12_1_B_cm = data.guest_rooms_8_12_1_B; $scope.guest_rooms_8_12_1_B = false; $scope.guest_rooms_8_12_1_B_b = false; $scope.guest_rooms_8_12_1_B_c = false; $scope.guest_rooms_8_12_1_B = ''; }else{ $scope.guest_rooms_8_12_1_B = ''; $scope.guest_rooms_8_12_1_B_cm = ''; $scope.guest_rooms_8_12_1_B = false; $scope.guest_rooms_8_12_1_B_b = false; $scope.guest_rooms_8_12_1_B_c = false;}
				if(data.guest_rooms_8_12_1_C == 2){ $scope.guest_rooms_8_12_1_C = data.guest_rooms_8_12_1_C; $scope.guest_rooms_8_12_1_C = true; $scope.guest_rooms_8_12_1_C_b = false; $scope.guest_rooms_8_12_1_C_c = false; $scope.guest_rooms_8_12_1_C_cm = ''; } else if(data.guest_rooms_8_12_1_C  == 5){ $scope.guest_rooms_8_12_1_C = data.guest_rooms_8_12_1_C; $scope.guest_rooms_8_12_1_C = false; $scope.guest_rooms_8_12_1_C_b = true; $scope.guest_rooms_8_12_1_C_c = false; $scope.guest_rooms_8_12_1_C_cm = ''; } else if(data.guest_rooms_8_12_1_C  == 8){ 
				$scope.guest_rooms_8_12_1_C = data.guest_rooms_8_12_1_C; $scope.guest_rooms_8_12_1_C = false; $scope.guest_rooms_8_12_1_C_b = false; $scope.guest_rooms_8_12_1_C_c = true; $scope.guest_rooms_8_12_1_C_cm = ''; } else if( ((data.guest_rooms_8_12_1_C  >= 0 ) && (data.guest_rooms_8_12_1_C  < 2)) || ((data.guest_rooms_8_12_1_C  > 2 ) && (data.guest_rooms_8_12_1_C  < 5)) || ((data.guest_rooms_8_12_1_C  > 5 ) && (data.guest_rooms_8_12_1_C  < 8)) ){ $scope.guest_rooms_8_12_1_C_cm = data.guest_rooms_8_12_1_C; $scope.guest_rooms_8_12_1_C = false; $scope.guest_rooms_8_12_1_C_b = false; $scope.guest_rooms_8_12_1_C_c = false; $scope.guest_rooms_8_12_1_C = ''; }else{ $scope.guest_rooms_8_12_1_C = ''; $scope.guest_rooms_8_12_1_C_cm = ''; $scope.guest_rooms_8_12_1_C = false; $scope.guest_rooms_8_12_1_C_b = false; $scope.guest_rooms_8_12_1_C_c = false;}
				$scope.guest_rooms_8_13_1_text = data.guest_rooms_8_13_1_text;
				if(data.guest_rooms_8_13_1_A == 1){ $scope.guest_rooms_8_13_1_A = data.guest_rooms_8_13_1_A; $scope.guest_rooms_8_13_1_A = true; $scope.guest_rooms_8_13_1_A_b = false; $scope.guest_rooms_8_13_1_A_c = false; $scope.guest_rooms_8_13_1_A_cm = ''; } else if(data.guest_rooms_8_13_1_A  == 3){ $scope.guest_rooms_8_13_1_A = data.guest_rooms_8_13_1_A; $scope.guest_rooms_8_13_1_A = false; $scope.guest_rooms_8_13_1_A_b = true; $scope.guest_rooms_8_13_1_A_c = false; $scope.guest_rooms_8_13_1_A_cm = ''; } else if(data.guest_rooms_8_13_1_A  == 5){ 
				$scope.guest_rooms_8_13_1_A = data.guest_rooms_8_13_1_A; $scope.guest_rooms_8_13_1_A = false; $scope.guest_rooms_8_13_1_A_b = false; $scope.guest_rooms_8_13_1_A_c = true; $scope.guest_rooms_8_13_1_A_cm = ''; } else if( ((data.guest_rooms_8_13_1_A  >= 0 ) && (data.guest_rooms_8_13_1_A  < 1)) || ((data.guest_rooms_8_13_1_A  > 1 ) && (data.guest_rooms_8_13_1_A  < 3)) || ((data.guest_rooms_8_13_1_A  > 3 ) && (data.guest_rooms_8_13_1_A  < 5)) ){ $scope.guest_rooms_8_13_1_A_cm = data.guest_rooms_8_13_1_A; $scope.guest_rooms_8_13_1_A = false; $scope.guest_rooms_8_13_1_A_b = false; $scope.guest_rooms_8_13_1_A_c = false; $scope.guest_rooms_8_13_1_A = ''; }else{ $scope.guest_rooms_8_13_1_A = ''; $scope.guest_rooms_8_13_1_A_cm = ''; $scope.guest_rooms_8_13_1_A = false; $scope.guest_rooms_8_13_1_A_b = false; $scope.guest_rooms_8_13_1_A_c = false;}
				if(data.guest_rooms_8_13_1_B_a == 5){ $scope.guest_rooms_8_13_1_B_a = data.guest_rooms_8_13_1_B_a; $scope.guest_rooms_8_13_1_B_a= true; $scope.guest_rooms_8_13_1_B_a_cm = ''; } else if((data.guest_rooms_8_13_1_B_a > 0 ) && (data.guest_rooms_8_13_1_B_a < 5)){ $scope.guest_rooms_8_13_1_B_a_cm = data.guest_rooms_8_13_1_B_a; $scope.guest_rooms_8_13_1_B_a= false; $scope.guest_rooms_8_13_1_B_a= ''; }else{ $scope.guest_rooms_8_13_1_B_a= ''; $scope.guest_rooms_8_13_1_B_a_cm = ''; $scope.guest_rooms_8_13_1_B_a= false; }
				if(data.guest_rooms_8_13_1_B_b == 5){ $scope.guest_rooms_8_13_1_B_b = data.guest_rooms_8_13_1_B_b; $scope.guest_rooms_8_13_1_B_b= true; $scope.guest_rooms_8_13_1_B_b_cm = ''; } else if((data.guest_rooms_8_13_1_B_b > 0 ) && (data.guest_rooms_8_13_1_B_b < 5)){ $scope.guest_rooms_8_13_1_B_b_cm = data.guest_rooms_8_13_1_B_b; $scope.guest_rooms_8_13_1_B_b= false; $scope.guest_rooms_8_13_1_B_b= ''; }else{ $scope.guest_rooms_8_13_1_B_b= ''; $scope.guest_rooms_8_13_1_B_b_cm = ''; $scope.guest_rooms_8_13_1_B_b= false; }
				if(data.guest_rooms_8_13_1_B_c == 5){ $scope.guest_rooms_8_13_1_B_c = data.guest_rooms_8_13_1_B_c; $scope.guest_rooms_8_13_1_B_c= true; $scope.guest_rooms_8_13_1_B_c_cm = ''; } else if((data.guest_rooms_8_13_1_B_c > 0 ) && (data.guest_rooms_8_13_1_B_c < 5)){ $scope.guest_rooms_8_13_1_B_c_cm = data.guest_rooms_8_13_1_B_c; $scope.guest_rooms_8_13_1_B_c= false; $scope.guest_rooms_8_13_1_B_c= ''; }else{ $scope.guest_rooms_8_13_1_B_c= ''; $scope.guest_rooms_8_13_1_B_c_cm = ''; $scope.guest_rooms_8_13_1_B_c= false; }
				if(data.guest_rooms_8_13_1_C == 4){ $scope.guest_rooms_8_13_1_C = data.guest_rooms_8_13_1_C; $scope.guest_rooms_8_13_1_C = true; $scope.guest_rooms_8_13_1_C_b = false; $scope.guest_rooms_8_13_1_C_c = false; $scope.guest_rooms_8_13_1_C_cm = ''; } else if(data.guest_rooms_8_13_1_C  == 7){ $scope.guest_rooms_8_13_1_C = data.guest_rooms_8_13_1_C; $scope.guest_rooms_8_13_1_C = false; $scope.guest_rooms_8_13_1_C_b = true; $scope.guest_rooms_8_13_1_C_c = false; $scope.guest_rooms_8_13_1_C_cm = ''; } else if(data.guest_rooms_8_13_1_C  == 10){ 
				$scope.guest_rooms_8_13_1_C = data.guest_rooms_8_13_1_C; $scope.guest_rooms_8_13_1_C = false; $scope.guest_rooms_8_13_1_C_b = false; $scope.guest_rooms_8_13_1_C_c = true; $scope.guest_rooms_8_13_1_C_cm = ''; } else if( ((data.guest_rooms_8_13_1_C  >= 0 ) && (data.guest_rooms_8_13_1_C  < 4)) || ((data.guest_rooms_8_13_1_C  > 4 ) && (data.guest_rooms_8_13_1_C  < 7)) || ((data.guest_rooms_8_13_1_C  > 7 ) && (data.guest_rooms_8_13_1_C  < 10)) ){ $scope.guest_rooms_8_13_1_C_cm = data.guest_rooms_8_13_1_C; $scope.guest_rooms_8_13_1_C = false; $scope.guest_rooms_8_13_1_C_b = false; $scope.guest_rooms_8_13_1_C_c = false; $scope.guest_rooms_8_13_1_C = ''; }else{ $scope.guest_rooms_8_13_1_C = ''; $scope.guest_rooms_8_13_1_C_cm = ''; $scope.guest_rooms_8_13_1_C = false; $scope.guest_rooms_8_13_1_C_b = false; $scope.guest_rooms_8_13_1_C_c = false;}
				$scope.guest_rooms_8_14_1_text = data.guest_rooms_8_14_1_text;
				if(data.guest_rooms_8_14_1_A_a == 2){ $scope.guest_rooms_8_14_1_A_a = data.guest_rooms_8_14_1_A_a; $scope.guest_rooms_8_14_1_A_a= true; $scope.guest_rooms_8_14_1_A_a_cm = ''; } else if((data.guest_rooms_8_14_1_A_a > 0 ) && (data.guest_rooms_8_14_1_A_a < 2)){ $scope.guest_rooms_8_14_1_A_a_cm = data.guest_rooms_8_14_1_A_a; $scope.guest_rooms_8_14_1_A_a= false; $scope.guest_rooms_8_14_1_A_a= ''; }else{ $scope.guest_rooms_8_14_1_A_a= ''; $scope.guest_rooms_8_14_1_A_a_cm = ''; $scope.guest_rooms_8_14_1_A_a= false; }
				if(data.guest_rooms_8_14_1_A_b == 2){ $scope.guest_rooms_8_14_1_A_b = data.guest_rooms_8_14_1_A_b; $scope.guest_rooms_8_14_1_A_b= true; $scope.guest_rooms_8_14_1_A_b_cm = ''; } else if((data.guest_rooms_8_14_1_A_b > 0 ) && (data.guest_rooms_8_14_1_A_b < 2)){ $scope.guest_rooms_8_14_1_A_b_cm = data.guest_rooms_8_14_1_A_b; $scope.guest_rooms_8_14_1_A_b= false; $scope.guest_rooms_8_14_1_A_b= ''; }else{ $scope.guest_rooms_8_14_1_A_b= ''; $scope.guest_rooms_8_14_1_A_b_cm = ''; $scope.guest_rooms_8_14_1_A_b= false; }
				if(data.guest_rooms_8_14_1_A_c == 2){ $scope.guest_rooms_8_14_1_A_c = data.guest_rooms_8_14_1_A_c; $scope.guest_rooms_8_14_1_A_c= true; $scope.guest_rooms_8_14_1_A_c_cm = ''; } else if((data.guest_rooms_8_14_1_A_c > 0 ) && (data.guest_rooms_8_14_1_A_c < 2)){ $scope.guest_rooms_8_14_1_A_c_cm = data.guest_rooms_8_14_1_A_c; $scope.guest_rooms_8_14_1_A_c= false; $scope.guest_rooms_8_14_1_A_c= ''; }else{ $scope.guest_rooms_8_14_1_A_c= ''; $scope.guest_rooms_8_14_1_A_c_cm = ''; $scope.guest_rooms_8_14_1_A_c= false; }
				if(data.guest_rooms_8_14_1_A_d == 2){ $scope.guest_rooms_8_14_1_A_d = data.guest_rooms_8_14_1_A_d; $scope.guest_rooms_8_14_1_A_d= true; $scope.guest_rooms_8_14_1_A_d_cm = ''; } else if((data.guest_rooms_8_14_1_A_d > 0 ) && (data.guest_rooms_8_14_1_A_d < 2)){ $scope.guest_rooms_8_14_1_A_d_cm = data.guest_rooms_8_14_1_A_d; $scope.guest_rooms_8_14_1_A_d= false; $scope.guest_rooms_8_14_1_A_d= ''; }else{ $scope.guest_rooms_8_14_1_A_d= ''; $scope.guest_rooms_8_14_1_A_d_cm = ''; $scope.guest_rooms_8_14_1_A_d= false; }
				if(data.guest_rooms_8_14_1_A_e == 2){ $scope.guest_rooms_8_14_1_A_e = data.guest_rooms_8_14_1_A_e; $scope.guest_rooms_8_14_1_A_e= true; $scope.guest_rooms_8_14_1_A_e_cm = ''; } else if((data.guest_rooms_8_14_1_A_e > 0 ) && (data.guest_rooms_8_14_1_A_e < 2)){ $scope.guest_rooms_8_14_1_A_e_cm = data.guest_rooms_8_14_1_A_e; $scope.guest_rooms_8_14_1_A_e= false; $scope.guest_rooms_8_14_1_A_e= ''; }else{ $scope.guest_rooms_8_14_1_A_e= ''; $scope.guest_rooms_8_14_1_A_e_cm = ''; $scope.guest_rooms_8_14_1_A_e= false; }
				if(data.guest_rooms_8_14_1_A_f == 2){ $scope.guest_rooms_8_14_1_A_f = data.guest_rooms_8_14_1_A_f; $scope.guest_rooms_8_14_1_A_f= true; $scope.guest_rooms_8_14_1_A_f_cm = ''; } else if((data.guest_rooms_8_14_1_A_f > 0 ) && (data.guest_rooms_8_14_1_A_f < 2)){ $scope.guest_rooms_8_14_1_A_f_cm = data.guest_rooms_8_14_1_A_f; $scope.guest_rooms_8_14_1_A_f= false; $scope.guest_rooms_8_14_1_A_f= ''; }else{ $scope.guest_rooms_8_14_1_A_f= ''; $scope.guest_rooms_8_14_1_A_f_cm = ''; $scope.guest_rooms_8_14_1_A_f= false; }
				if(data.guest_rooms_8_14_1_A_g == 2){ $scope.guest_rooms_8_14_1_A_g = data.guest_rooms_8_14_1_A_g; $scope.guest_rooms_8_14_1_A_g= true; $scope.guest_rooms_8_14_1_A_g_cm = ''; } else if((data.guest_rooms_8_14_1_A_g > 0 ) && (data.guest_rooms_8_14_1_A_g < 2)){ $scope.guest_rooms_8_14_1_A_g_cm = data.guest_rooms_8_14_1_A_g; $scope.guest_rooms_8_14_1_A_g= false; $scope.guest_rooms_8_14_1_A_g= ''; }else{ $scope.guest_rooms_8_14_1_A_g= ''; $scope.guest_rooms_8_14_1_A_g_cm = ''; $scope.guest_rooms_8_14_1_A_g= false; }
				if(data.guest_rooms_8_14_1_A_h == 2){ $scope.guest_rooms_8_14_1_A_h = data.guest_rooms_8_14_1_A_h; $scope.guest_rooms_8_14_1_A_h= true; $scope.guest_rooms_8_14_1_A_h_cm = ''; } else if((data.guest_rooms_8_14_1_A_h > 0 ) && (data.guest_rooms_8_14_1_A_h < 2)){ $scope.guest_rooms_8_14_1_A_h_cm = data.guest_rooms_8_14_1_A_h; $scope.guest_rooms_8_14_1_A_h= false; $scope.guest_rooms_8_14_1_A_h= ''; }else{ $scope.guest_rooms_8_14_1_A_h= ''; $scope.guest_rooms_8_14_1_A_h_cm = ''; $scope.guest_rooms_8_14_1_A_h= false; }
				if(data.guest_rooms_8_14_1_A_i == 2){ $scope.guest_rooms_8_14_1_A_i = data.guest_rooms_8_14_1_A_i; $scope.guest_rooms_8_14_1_A_i= true; $scope.guest_rooms_8_14_1_A_i_cm = ''; } else if((data.guest_rooms_8_14_1_A_i > 0 ) && (data.guest_rooms_8_14_1_A_i < 2)){ $scope.guest_rooms_8_14_1_A_i_cm = data.guest_rooms_8_14_1_A_i; $scope.guest_rooms_8_14_1_A_i= false; $scope.guest_rooms_8_14_1_A_i= ''; }else{ $scope.guest_rooms_8_14_1_A_i= ''; $scope.guest_rooms_8_14_1_A_i_cm = ''; $scope.guest_rooms_8_14_1_A_i= false; }
				if(data.guest_rooms_8_14_1_A_j == 2){ $scope.guest_rooms_8_14_1_A_j = data.guest_rooms_8_14_1_A_j; $scope.guest_rooms_8_14_1_A_j= true; $scope.guest_rooms_8_14_1_A_j_cm = ''; } else if((data.guest_rooms_8_14_1_A_j > 0 ) && (data.guest_rooms_8_14_1_A_j < 2)){ $scope.guest_rooms_8_14_1_A_j_cm = data.guest_rooms_8_14_1_A_j; $scope.guest_rooms_8_14_1_A_j= false; $scope.guest_rooms_8_14_1_A_j= ''; }else{ $scope.guest_rooms_8_14_1_A_j= ''; $scope.guest_rooms_8_14_1_A_j_cm = ''; $scope.guest_rooms_8_14_1_A_j= false; }
				if(data.guest_rooms_8_14_1_A_k == 2){ $scope.guest_rooms_8_14_1_A_k = data.guest_rooms_8_14_1_A_k; $scope.guest_rooms_8_14_1_A_k= true; $scope.guest_rooms_8_14_1_A_k_cm = ''; } else if((data.guest_rooms_8_14_1_A_k > 0 ) && (data.guest_rooms_8_14_1_A_k < 2)){ $scope.guest_rooms_8_14_1_A_k_cm = data.guest_rooms_8_14_1_A_k; $scope.guest_rooms_8_14_1_A_k= false; $scope.guest_rooms_8_14_1_A_k= ''; }else{ $scope.guest_rooms_8_14_1_A_k= ''; $scope.guest_rooms_8_14_1_A_k_cm = ''; $scope.guest_rooms_8_14_1_A_k= false; }
				if(data.guest_rooms_8_14_1_A_l == 2){ $scope.guest_rooms_8_14_1_A_l = data.guest_rooms_8_14_1_A_l; $scope.guest_rooms_8_14_1_A_l= true; $scope.guest_rooms_8_14_1_A_l_cm = ''; } else if((data.guest_rooms_8_14_1_A_l > 0 ) && (data.guest_rooms_8_14_1_A_l < 2)){ $scope.guest_rooms_8_14_1_A_l_cm = data.guest_rooms_8_14_1_A_l; $scope.guest_rooms_8_14_1_A_l= false; $scope.guest_rooms_8_14_1_A_l= ''; }else{ $scope.guest_rooms_8_14_1_A_l= ''; $scope.guest_rooms_8_14_1_A_l_cm = ''; $scope.guest_rooms_8_14_1_A_l= false; }
				if(data.guest_rooms_8_14_1_A_m == 2){ $scope.guest_rooms_8_14_1_A_m = data.guest_rooms_8_14_1_A_m; $scope.guest_rooms_8_14_1_A_m= true; $scope.guest_rooms_8_14_1_A_m_cm = ''; } else if((data.guest_rooms_8_14_1_A_m > 0 ) && (data.guest_rooms_8_14_1_A_m < 2)){ $scope.guest_rooms_8_14_1_A_m_cm = data.guest_rooms_8_14_1_A_m; $scope.guest_rooms_8_14_1_A_m= false; $scope.guest_rooms_8_14_1_A_m= ''; }else{ $scope.guest_rooms_8_14_1_A_m= ''; $scope.guest_rooms_8_14_1_A_m_cm = ''; $scope.guest_rooms_8_14_1_A_m= false; }
				if(data.guest_rooms_8_14_1_A_n == 2){ $scope.guest_rooms_8_14_1_A_n = data.guest_rooms_8_14_1_A_n; $scope.guest_rooms_8_14_1_A_n= true; $scope.guest_rooms_8_14_1_A_n_cm = ''; } else if((data.guest_rooms_8_14_1_A_n > 0 ) && (data.guest_rooms_8_14_1_A_n < 2)){ $scope.guest_rooms_8_14_1_A_n_cm = data.guest_rooms_8_14_1_A_n; $scope.guest_rooms_8_14_1_A_n= false; $scope.guest_rooms_8_14_1_A_n= ''; }else{ $scope.guest_rooms_8_14_1_A_n= ''; $scope.guest_rooms_8_14_1_A_n_cm = ''; $scope.guest_rooms_8_14_1_A_n= false; }
				if(data.guest_rooms_8_14_1_A_o == 2){ $scope.guest_rooms_8_14_1_A_o = data.guest_rooms_8_14_1_A_o; $scope.guest_rooms_8_14_1_A_o= true; $scope.guest_rooms_8_14_1_A_o_cm = ''; } else if((data.guest_rooms_8_14_1_A_o > 0 ) && (data.guest_rooms_8_14_1_A_o < 2)){ $scope.guest_rooms_8_14_1_A_o_cm = data.guest_rooms_8_14_1_A_o; $scope.guest_rooms_8_14_1_A_o= false; $scope.guest_rooms_8_14_1_A_o= ''; }else{ $scope.guest_rooms_8_14_1_A_o= ''; $scope.guest_rooms_8_14_1_A_o_cm = ''; $scope.guest_rooms_8_14_1_A_o= false; }
				if(data.guest_rooms_8_14_1_A_p == 2){ $scope.guest_rooms_8_14_1_A_p = data.guest_rooms_8_14_1_A_p; $scope.guest_rooms_8_14_1_A_p= true; $scope.guest_rooms_8_14_1_A_p_cm = ''; } else if((data.guest_rooms_8_14_1_A_p > 0 ) && (data.guest_rooms_8_14_1_A_p < 2)){ $scope.guest_rooms_8_14_1_A_p_cm = data.guest_rooms_8_14_1_A_p; $scope.guest_rooms_8_14_1_A_p= false; $scope.guest_rooms_8_14_1_A_p= ''; }else{ $scope.guest_rooms_8_14_1_A_p= ''; $scope.guest_rooms_8_14_1_A_p_cm = ''; $scope.guest_rooms_8_14_1_A_p= false; }
				if(data.guest_rooms_8_14_1_A_q == 2){ $scope.guest_rooms_8_14_1_A_q = data.guest_rooms_8_14_1_A_q; $scope.guest_rooms_8_14_1_A_q= true; $scope.guest_rooms_8_14_1_A_q_cm = ''; } else if((data.guest_rooms_8_14_1_A_q > 0 ) && (data.guest_rooms_8_14_1_A_q < 2)){ $scope.guest_rooms_8_14_1_A_q_cm = data.guest_rooms_8_14_1_A_q; $scope.guest_rooms_8_14_1_A_q= false; $scope.guest_rooms_8_14_1_A_q= ''; }else{ $scope.guest_rooms_8_14_1_A_q= ''; $scope.guest_rooms_8_14_1_A_q_cm = ''; $scope.guest_rooms_8_14_1_A_q= false; }
				if(data.guest_rooms_8_14_1_B == 2){ $scope.guest_rooms_8_14_1_B = data.guest_rooms_8_14_1_B; $scope.guest_rooms_8_14_1_B = true; $scope.guest_rooms_8_14_1_B_b = false; $scope.guest_rooms_8_14_1_B_c = false; $scope.guest_rooms_8_14_1_B_cm = ''; } else if(data.guest_rooms_8_14_1_B  == 4){ $scope.guest_rooms_8_14_1_B = data.guest_rooms_8_14_1_B; $scope.guest_rooms_8_14_1_B = false; $scope.guest_rooms_8_14_1_B_b = true; $scope.guest_rooms_8_14_1_B_c = false; $scope.guest_rooms_8_14_1_B_cm = ''; } else if(data.guest_rooms_8_14_1_B  == 6){ 
				$scope.guest_rooms_8_14_1_B = data.guest_rooms_8_14_1_B; $scope.guest_rooms_8_14_1_B = false; $scope.guest_rooms_8_14_1_B_b = false; $scope.guest_rooms_8_14_1_B_c = true; $scope.guest_rooms_8_14_1_B_cm = ''; } else if( ((data.guest_rooms_8_14_1_B  >= 0 ) && (data.guest_rooms_8_14_1_B  < 2)) || ((data.guest_rooms_8_14_1_B  > 2 ) && (data.guest_rooms_8_14_1_B  < 4)) || ((data.guest_rooms_8_14_1_B  > 4 ) && (data.guest_rooms_8_14_1_B  < 6)) ){ $scope.guest_rooms_8_14_1_B_cm = data.guest_rooms_8_14_1_B; $scope.guest_rooms_8_14_1_B = false; $scope.guest_rooms_8_14_1_B_b = false; $scope.guest_rooms_8_14_1_B_c = false; $scope.guest_rooms_8_14_1_B = ''; }else{ $scope.guest_rooms_8_14_1_B = ''; $scope.guest_rooms_8_14_1_B_cm = ''; $scope.guest_rooms_8_14_1_B = false; $scope.guest_rooms_8_14_1_B_b = false; $scope.guest_rooms_8_14_1_B_c = false;}
				$scope.guest_bathrooms_9_1_1_text = data.guest_bathrooms_9_1_1_text;
				if(data.guest_bathrooms_9_1_1_A == 3){ $scope.guest_bathrooms_9_1_1_A = data.guest_bathrooms_9_1_1_A; $scope.guest_bathrooms_9_1_1_A = true; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = false; $scope.guest_bathrooms_9_1_1_A_cm = ''; } else if(data.guest_bathrooms_9_1_1_A  == 7){ $scope.guest_bathrooms_9_1_1_A = data.guest_bathrooms_9_1_1_A; $scope.guest_bathrooms_9_1_1_A = false; $scope.guest_bathrooms_9_1_1_A_b = true; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = false; $scope.guest_bathrooms_9_1_1_A_cm = ''; } else if(data.guest_bathrooms_9_1_1_A  == 10){ $scope.guest_bathrooms_9_1_1_A = data.guest_bathrooms_9_1_1_A; $scope.guest_bathrooms_9_1_1_A = false; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = true; $scope.guest_bathrooms_9_1_1_A_d = false; $scope.guest_bathrooms_9_1_1_A_cm = ''; }else if(data.guest_bathrooms_9_1_1_A  == 13){ $scope.guest_bathrooms_9_1_1_A = data.guest_bathrooms_9_1_1_A; $scope.guest_bathrooms_9_1_1_A = false; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = true; $scope.guest_bathrooms_9_1_1_A_cm = ''; } else if( ((data.guest_bathrooms_9_1_1_A  >= 0 ) && (data.guest_bathrooms_9_1_1_A  < 3)) || ((data.guest_bathrooms_9_1_1_A  > 3 ) && (data.guest_bathrooms_9_1_1_A  < 7)) || ((data.guest_bathrooms_9_1_1_A  > 7 ) && (data.guest_bathrooms_9_1_1_A  < 10)) || ((data.guest_bathrooms_9_1_1_A  > 10 ) && (data.guest_bathrooms_9_1_1_A  < 13)) )
				{ $scope.guest_bathrooms_9_1_1_A_cm = data.guest_bathrooms_9_1_1_A; $scope.guest_bathrooms_9_1_1_A = false; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = false; $scope.guest_bathrooms_9_1_1_A = ''; }else{ $scope.guest_bathrooms_9_1_1_A = ''; $scope.guest_bathrooms_9_1_1_A_cm = ''; $scope.guest_bathrooms_9_1_1_A = false; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = false;}
				if(data.guest_bathrooms_9_1_1_B == 10){ $scope.guest_bathrooms_9_1_1_B = data.guest_bathrooms_9_1_1_B; $scope.guest_bathrooms_9_1_1_B = true; $scope.guest_bathrooms_9_1_1_B_b = false; $scope.guest_bathrooms_9_1_1_B_c = false; $scope.guest_bathrooms_9_1_1_B_cm = ''; } else if(data.guest_bathrooms_9_1_1_B  == 15){ $scope.guest_bathrooms_9_1_1_B = data.guest_bathrooms_9_1_1_B; $scope.guest_bathrooms_9_1_1_B = false; $scope.guest_bathrooms_9_1_1_B_b = true; $scope.guest_bathrooms_9_1_1_B_c = false; $scope.guest_bathrooms_9_1_1_B_cm = ''; } else if(data.guest_bathrooms_9_1_1_B  == 20){ 
				$scope.guest_bathrooms_9_1_1_B = data.guest_bathrooms_9_1_1_B; $scope.guest_bathrooms_9_1_1_B = false; $scope.guest_bathrooms_9_1_1_B_b = false; $scope.guest_bathrooms_9_1_1_B_c = true; $scope.guest_bathrooms_9_1_1_B_cm = ''; } else if( ((data.guest_bathrooms_9_1_1_B  >= 0 ) && (data.guest_bathrooms_9_1_1_B  < 10)) || ((data.guest_bathrooms_9_1_1_B  > 10 ) && (data.guest_bathrooms_9_1_1_B  < 15)) || ((data.guest_bathrooms_9_1_1_B  > 15 ) && (data.guest_bathrooms_9_1_1_B  < 20)) ){ $scope.guest_bathrooms_9_1_1_B_cm = data.guest_bathrooms_9_1_1_B; $scope.guest_bathrooms_9_1_1_B = false; $scope.guest_bathrooms_9_1_1_B_b = false; $scope.guest_bathrooms_9_1_1_B_c = false; $scope.guest_bathrooms_9_1_1_B = ''; }else{ $scope.guest_bathrooms_9_1_1_B = ''; $scope.guest_bathrooms_9_1_1_B_cm = ''; $scope.guest_bathrooms_9_1_1_B = false; $scope.guest_bathrooms_9_1_1_B_b = false; $scope.guest_bathrooms_9_1_1_B_c = false;}
				if(data.guest_bathrooms_9_1_1_C == 3){ $scope.guest_bathrooms_9_1_1_C = data.guest_bathrooms_9_1_1_C; $scope.guest_bathrooms_9_1_1_C = true; $scope.guest_bathrooms_9_1_1_C_b = false; $scope.guest_bathrooms_9_1_1_C_c = false; $scope.guest_bathrooms_9_1_1_C_cm = ''; } else if(data.guest_bathrooms_9_1_1_C  == 5){ $scope.guest_bathrooms_9_1_1_C = data.guest_bathrooms_9_1_1_C; $scope.guest_bathrooms_9_1_1_C = false; $scope.guest_bathrooms_9_1_1_C_b = true; $scope.guest_bathrooms_9_1_1_C_c = false; $scope.guest_bathrooms_9_1_1_C_cm = ''; } else if(data.guest_bathrooms_9_1_1_C  == 7){ 
				$scope.guest_bathrooms_9_1_1_C = data.guest_bathrooms_9_1_1_C; $scope.guest_bathrooms_9_1_1_C = false; $scope.guest_bathrooms_9_1_1_C_b = false; $scope.guest_bathrooms_9_1_1_C_c = true; $scope.guest_bathrooms_9_1_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_1_1_C  >= 0 ) && (data.guest_bathrooms_9_1_1_C  < 3)) || ((data.guest_bathrooms_9_1_1_C  > 3 ) && (data.guest_bathrooms_9_1_1_C  < 5)) || ((data.guest_bathrooms_9_1_1_C  > 5 ) && (data.guest_bathrooms_9_1_1_C  < 7)) ){ $scope.guest_bathrooms_9_1_1_C_cm = data.guest_bathrooms_9_1_1_C; $scope.guest_bathrooms_9_1_1_C = false; $scope.guest_bathrooms_9_1_1_C_b = false; $scope.guest_bathrooms_9_1_1_C_c = false; $scope.guest_bathrooms_9_1_1_C = ''; }else{ $scope.guest_bathrooms_9_1_1_C = ''; $scope.guest_bathrooms_9_1_1_C_cm = ''; $scope.guest_bathrooms_9_1_1_C = false; $scope.guest_bathrooms_9_1_1_C_b = false; $scope.guest_bathrooms_9_1_1_C_c = false;}
				$scope.guest_bathrooms_9_2_1_text = data.guest_bathrooms_9_2_1_text;
				if(data.guest_bathrooms_9_2_1_A_a == 2){ $scope.guest_bathrooms_9_2_1_A_a = data.guest_bathrooms_9_2_1_A_a; $scope.guest_bathrooms_9_2_1_A_a= true; $scope.guest_bathrooms_9_2_1_A_a_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_a > 0 ) && (data.guest_bathrooms_9_2_1_A_a < 2)){ $scope.guest_bathrooms_9_2_1_A_a_cm = data.guest_bathrooms_9_2_1_A_a; $scope.guest_bathrooms_9_2_1_A_a= false; $scope.guest_bathrooms_9_2_1_A_a= ''; }else{ $scope.guest_bathrooms_9_2_1_A_a= ''; $scope.guest_bathrooms_9_2_1_A_a_cm = ''; $scope.guest_bathrooms_9_2_1_A_a= false; }
				if(data.guest_bathrooms_9_2_1_A_b == 2){ $scope.guest_bathrooms_9_2_1_A_b = data.guest_bathrooms_9_2_1_A_b; $scope.guest_bathrooms_9_2_1_A_b= true; $scope.guest_bathrooms_9_2_1_A_b_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_b > 0 ) && (data.guest_bathrooms_9_2_1_A_b < 2)){ $scope.guest_bathrooms_9_2_1_A_b_cm = data.guest_bathrooms_9_2_1_A_b; $scope.guest_bathrooms_9_2_1_A_b= false; $scope.guest_bathrooms_9_2_1_A_b= ''; }else{ $scope.guest_bathrooms_9_2_1_A_b= ''; $scope.guest_bathrooms_9_2_1_A_b_cm = ''; $scope.guest_bathrooms_9_2_1_A_b= false; }
				if(data.guest_bathrooms_9_2_1_A_c == 2){ $scope.guest_bathrooms_9_2_1_A_c = data.guest_bathrooms_9_2_1_A_c; $scope.guest_bathrooms_9_2_1_A_c= true; $scope.guest_bathrooms_9_2_1_A_c_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_c > 0 ) && (data.guest_bathrooms_9_2_1_A_c < 2)){ $scope.guest_bathrooms_9_2_1_A_c_cm = data.guest_bathrooms_9_2_1_A_c; $scope.guest_bathrooms_9_2_1_A_c= false; $scope.guest_bathrooms_9_2_1_A_c= ''; }else{ $scope.guest_bathrooms_9_2_1_A_c= ''; $scope.guest_bathrooms_9_2_1_A_c_cm = ''; $scope.guest_bathrooms_9_2_1_A_c= false; }
				if(data.guest_bathrooms_9_2_1_A_d == 2){ $scope.guest_bathrooms_9_2_1_A_d = data.guest_bathrooms_9_2_1_A_d; $scope.guest_bathrooms_9_2_1_A_d= true; $scope.guest_bathrooms_9_2_1_A_d_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_d > 0 ) && (data.guest_bathrooms_9_2_1_A_d < 2)){ $scope.guest_bathrooms_9_2_1_A_d_cm = data.guest_bathrooms_9_2_1_A_d; $scope.guest_bathrooms_9_2_1_A_d= false; $scope.guest_bathrooms_9_2_1_A_d= ''; }else{ $scope.guest_bathrooms_9_2_1_A_d= ''; $scope.guest_bathrooms_9_2_1_A_d_cm = ''; $scope.guest_bathrooms_9_2_1_A_d= false; }
				if(data.guest_bathrooms_9_2_1_A_e == 2){ $scope.guest_bathrooms_9_2_1_A_e = data.guest_bathrooms_9_2_1_A_e; $scope.guest_bathrooms_9_2_1_A_e= true; $scope.guest_bathrooms_9_2_1_A_e_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_e > 0 ) && (data.guest_bathrooms_9_2_1_A_e < 2)){ $scope.guest_bathrooms_9_2_1_A_e_cm = data.guest_bathrooms_9_2_1_A_e; $scope.guest_bathrooms_9_2_1_A_e= false; $scope.guest_bathrooms_9_2_1_A_e= ''; }else{ $scope.guest_bathrooms_9_2_1_A_e= ''; $scope.guest_bathrooms_9_2_1_A_e_cm = ''; $scope.guest_bathrooms_9_2_1_A_e= false; }
				if(data.guest_bathrooms_9_2_1_A_f == 2){ $scope.guest_bathrooms_9_2_1_A_f = data.guest_bathrooms_9_2_1_A_f; $scope.guest_bathrooms_9_2_1_A_f= true; $scope.guest_bathrooms_9_2_1_A_f_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_f > 0 ) && (data.guest_bathrooms_9_2_1_A_f < 2)){ $scope.guest_bathrooms_9_2_1_A_f_cm = data.guest_bathrooms_9_2_1_A_f; $scope.guest_bathrooms_9_2_1_A_f= false; $scope.guest_bathrooms_9_2_1_A_f= ''; }else{ $scope.guest_bathrooms_9_2_1_A_f= ''; $scope.guest_bathrooms_9_2_1_A_f_cm = ''; $scope.guest_bathrooms_9_2_1_A_f= false; }
				if(data.guest_bathrooms_9_2_1_A_g == 1){ $scope.guest_bathrooms_9_2_1_A_g = data.guest_bathrooms_9_2_1_A_g; $scope.guest_bathrooms_9_2_1_A_g= true; $scope.guest_bathrooms_9_2_1_A_g_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_g > 0 ) && (data.guest_bathrooms_9_2_1_A_g < 1)){ $scope.guest_bathrooms_9_2_1_A_g_cm = data.guest_bathrooms_9_2_1_A_g; $scope.guest_bathrooms_9_2_1_A_g= false; $scope.guest_bathrooms_9_2_1_A_g= ''; }else{ $scope.guest_bathrooms_9_2_1_A_g= ''; $scope.guest_bathrooms_9_2_1_A_g_cm = ''; $scope.guest_bathrooms_9_2_1_A_g= false; }
				if(data.guest_bathrooms_9_2_1_A_h == 1){ $scope.guest_bathrooms_9_2_1_A_h = data.guest_bathrooms_9_2_1_A_h; $scope.guest_bathrooms_9_2_1_A_h= true; $scope.guest_bathrooms_9_2_1_A_h_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_h > 0 ) && (data.guest_bathrooms_9_2_1_A_h < 1)){ $scope.guest_bathrooms_9_2_1_A_h_cm = data.guest_bathrooms_9_2_1_A_h; $scope.guest_bathrooms_9_2_1_A_h= false; $scope.guest_bathrooms_9_2_1_A_h= ''; }else{ $scope.guest_bathrooms_9_2_1_A_h= ''; $scope.guest_bathrooms_9_2_1_A_h_cm = ''; $scope.guest_bathrooms_9_2_1_A_h= false; }
				if(data.guest_bathrooms_9_2_1_A_i == 1){ $scope.guest_bathrooms_9_2_1_A_i = data.guest_bathrooms_9_2_1_A_i; $scope.guest_bathrooms_9_2_1_A_i= true; $scope.guest_bathrooms_9_2_1_A_i_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_i > 0 ) && (data.guest_bathrooms_9_2_1_A_i < 1)){ $scope.guest_bathrooms_9_2_1_A_i_cm = data.guest_bathrooms_9_2_1_A_i; $scope.guest_bathrooms_9_2_1_A_i= false; $scope.guest_bathrooms_9_2_1_A_i= ''; }else{ $scope.guest_bathrooms_9_2_1_A_i= ''; $scope.guest_bathrooms_9_2_1_A_i_cm = ''; $scope.guest_bathrooms_9_2_1_A_i= false; }
				if(data.guest_bathrooms_9_2_1_A_j == 1){ $scope.guest_bathrooms_9_2_1_A_j = data.guest_bathrooms_9_2_1_A_j; $scope.guest_bathrooms_9_2_1_A_j= true; $scope.guest_bathrooms_9_2_1_A_j_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_j > 0 ) && (data.guest_bathrooms_9_2_1_A_j < 1)){ $scope.guest_bathrooms_9_2_1_A_j_cm = data.guest_bathrooms_9_2_1_A_j; $scope.guest_bathrooms_9_2_1_A_j= false; $scope.guest_bathrooms_9_2_1_A_j= ''; }else{ $scope.guest_bathrooms_9_2_1_A_j= ''; $scope.guest_bathrooms_9_2_1_A_j_cm = ''; $scope.guest_bathrooms_9_2_1_A_j= false; }
				if(data.guest_bathrooms_9_2_1_A_k == 2){ $scope.guest_bathrooms_9_2_1_A_k = data.guest_bathrooms_9_2_1_A_k; $scope.guest_bathrooms_9_2_1_A_k= true; $scope.guest_bathrooms_9_2_1_A_k_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_k > 0 ) && (data.guest_bathrooms_9_2_1_A_k < 2)){ $scope.guest_bathrooms_9_2_1_A_k_cm = data.guest_bathrooms_9_2_1_A_k; $scope.guest_bathrooms_9_2_1_A_k= false; $scope.guest_bathrooms_9_2_1_A_k= ''; }else{ $scope.guest_bathrooms_9_2_1_A_k= ''; $scope.guest_bathrooms_9_2_1_A_k_cm = ''; $scope.guest_bathrooms_9_2_1_A_k= false; }
				if(data.guest_bathrooms_9_2_1_A_l == 2){ $scope.guest_bathrooms_9_2_1_A_l = data.guest_bathrooms_9_2_1_A_l; $scope.guest_bathrooms_9_2_1_A_l= true; $scope.guest_bathrooms_9_2_1_A_l_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_l > 0 ) && (data.guest_bathrooms_9_2_1_A_l < 2)){ $scope.guest_bathrooms_9_2_1_A_l_cm = data.guest_bathrooms_9_2_1_A_l; $scope.guest_bathrooms_9_2_1_A_l= false; $scope.guest_bathrooms_9_2_1_A_l= ''; }else{ $scope.guest_bathrooms_9_2_1_A_l= ''; $scope.guest_bathrooms_9_2_1_A_l_cm = ''; $scope.guest_bathrooms_9_2_1_A_l= false; }
				if(data.guest_bathrooms_9_2_1_A_m == 1){ $scope.guest_bathrooms_9_2_1_A_m = data.guest_bathrooms_9_2_1_A_m; $scope.guest_bathrooms_9_2_1_A_m= true; $scope.guest_bathrooms_9_2_1_A_m_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_m > 0 ) && (data.guest_bathrooms_9_2_1_A_m < 1)){ $scope.guest_bathrooms_9_2_1_A_m_cm = data.guest_bathrooms_9_2_1_A_m; $scope.guest_bathrooms_9_2_1_A_m= false; $scope.guest_bathrooms_9_2_1_A_m= ''; }else{ $scope.guest_bathrooms_9_2_1_A_m= ''; $scope.guest_bathrooms_9_2_1_A_m_cm = ''; $scope.guest_bathrooms_9_2_1_A_m= false; }
				if(data.guest_bathrooms_9_2_1_A_n == 1){ $scope.guest_bathrooms_9_2_1_A_n = data.guest_bathrooms_9_2_1_A_n; $scope.guest_bathrooms_9_2_1_A_n= true; $scope.guest_bathrooms_9_2_1_A_n_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_n > 0 ) && (data.guest_bathrooms_9_2_1_A_n < 1)){ $scope.guest_bathrooms_9_2_1_A_n_cm = data.guest_bathrooms_9_2_1_A_n; $scope.guest_bathrooms_9_2_1_A_n= false; $scope.guest_bathrooms_9_2_1_A_n= ''; }else{ $scope.guest_bathrooms_9_2_1_A_n= ''; $scope.guest_bathrooms_9_2_1_A_n_cm = ''; $scope.guest_bathrooms_9_2_1_A_n= false; }
				if(data.guest_bathrooms_9_2_1_A_o == 1){ $scope.guest_bathrooms_9_2_1_A_o = data.guest_bathrooms_9_2_1_A_o; $scope.guest_bathrooms_9_2_1_A_o= true; $scope.guest_bathrooms_9_2_1_A_o_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_o > 0 ) && (data.guest_bathrooms_9_2_1_A_o < 1)){ $scope.guest_bathrooms_9_2_1_A_o_cm = data.guest_bathrooms_9_2_1_A_o; $scope.guest_bathrooms_9_2_1_A_o= false; $scope.guest_bathrooms_9_2_1_A_o= ''; }else{ $scope.guest_bathrooms_9_2_1_A_o= ''; $scope.guest_bathrooms_9_2_1_A_o_cm = ''; $scope.guest_bathrooms_9_2_1_A_o= false; }
				if(data.guest_bathrooms_9_2_1_A_p == 1){ $scope.guest_bathrooms_9_2_1_A_p = data.guest_bathrooms_9_2_1_A_p; $scope.guest_bathrooms_9_2_1_A_p= true; $scope.guest_bathrooms_9_2_1_A_p_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_p > 0 ) && (data.guest_bathrooms_9_2_1_A_p < 1)){ $scope.guest_bathrooms_9_2_1_A_p_cm = data.guest_bathrooms_9_2_1_A_p; $scope.guest_bathrooms_9_2_1_A_p= false; $scope.guest_bathrooms_9_2_1_A_p= ''; }else{ $scope.guest_bathrooms_9_2_1_A_p= ''; $scope.guest_bathrooms_9_2_1_A_p_cm = ''; $scope.guest_bathrooms_9_2_1_A_p= false; }
				if(data.guest_bathrooms_9_2_1_A_q == 1){ $scope.guest_bathrooms_9_2_1_A_q = data.guest_bathrooms_9_2_1_A_q; $scope.guest_bathrooms_9_2_1_A_q= true; $scope.guest_bathrooms_9_2_1_A_q_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_q > 0 ) && (data.guest_bathrooms_9_2_1_A_q < 1)){ $scope.guest_bathrooms_9_2_1_A_q_cm = data.guest_bathrooms_9_2_1_A_q; $scope.guest_bathrooms_9_2_1_A_q= false; $scope.guest_bathrooms_9_2_1_A_q= ''; }else{ $scope.guest_bathrooms_9_2_1_A_q= ''; $scope.guest_bathrooms_9_2_1_A_q_cm = ''; $scope.guest_bathrooms_9_2_1_A_q= false; }
				if(data.guest_bathrooms_9_2_1_A_r == 1){ $scope.guest_bathrooms_9_2_1_A_r = data.guest_bathrooms_9_2_1_A_r; $scope.guest_bathrooms_9_2_1_A_r= true; $scope.guest_bathrooms_9_2_1_A_r_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_r > 0 ) && (data.guest_bathrooms_9_2_1_A_r < 1)){ $scope.guest_bathrooms_9_2_1_A_r_cm = data.guest_bathrooms_9_2_1_A_r; $scope.guest_bathrooms_9_2_1_A_r= false; $scope.guest_bathrooms_9_2_1_A_r= ''; }else{ $scope.guest_bathrooms_9_2_1_A_r= ''; $scope.guest_bathrooms_9_2_1_A_r_cm = ''; $scope.guest_bathrooms_9_2_1_A_r= false; }
				if(data.guest_bathrooms_9_2_1_A_s == 1){ $scope.guest_bathrooms_9_2_1_A_s = data.guest_bathrooms_9_2_1_A_s; $scope.guest_bathrooms_9_2_1_A_s= true; $scope.guest_bathrooms_9_2_1_A_s_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_s > 0 ) && (data.guest_bathrooms_9_2_1_A_s < 1)){ $scope.guest_bathrooms_9_2_1_A_s_cm = data.guest_bathrooms_9_2_1_A_s; $scope.guest_bathrooms_9_2_1_A_s= false; $scope.guest_bathrooms_9_2_1_A_s= ''; }else{ $scope.guest_bathrooms_9_2_1_A_s= ''; $scope.guest_bathrooms_9_2_1_A_s_cm = ''; $scope.guest_bathrooms_9_2_1_A_s= false; }
				if(data.guest_bathrooms_9_2_1_A_t == 2){ $scope.guest_bathrooms_9_2_1_A_t = data.guest_bathrooms_9_2_1_A_t; $scope.guest_bathrooms_9_2_1_A_t= true; $scope.guest_bathrooms_9_2_1_A_t_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_t > 0 ) && (data.guest_bathrooms_9_2_1_A_t < 2)){ $scope.guest_bathrooms_9_2_1_A_t_cm = data.guest_bathrooms_9_2_1_A_t; $scope.guest_bathrooms_9_2_1_A_t= false; $scope.guest_bathrooms_9_2_1_A_t= ''; }else{ $scope.guest_bathrooms_9_2_1_A_t= ''; $scope.guest_bathrooms_9_2_1_A_t_cm = ''; $scope.guest_bathrooms_9_2_1_A_t= false; }
				if(data.guest_bathrooms_9_2_1_A_u == 1){ $scope.guest_bathrooms_9_2_1_A_u = data.guest_bathrooms_9_2_1_A_u; $scope.guest_bathrooms_9_2_1_A_u= true; $scope.guest_bathrooms_9_2_1_A_u_cm = ''; } else if((data.guest_bathrooms_9_2_1_A_u > 0 ) && (data.guest_bathrooms_9_2_1_A_u < 1)){ $scope.guest_bathrooms_9_2_1_A_u_cm = data.guest_bathrooms_9_2_1_A_u; $scope.guest_bathrooms_9_2_1_A_u= false; $scope.guest_bathrooms_9_2_1_A_u= ''; }else{ $scope.guest_bathrooms_9_2_1_A_u= ''; $scope.guest_bathrooms_9_2_1_A_u_cm = ''; $scope.guest_bathrooms_9_2_1_A_u= false; }
				if(data.guest_bathrooms_9_2_1_B == 1){ $scope.guest_bathrooms_9_2_1_B = data.guest_bathrooms_9_2_1_B; $scope.guest_bathrooms_9_2_1_B = true; $scope.guest_bathrooms_9_2_1_B_b = false; $scope.guest_bathrooms_9_2_1_B_c = false; $scope.guest_bathrooms_9_2_1_B_cm = ''; } else if(data.guest_bathrooms_9_2_1_B  == 3){ $scope.guest_bathrooms_9_2_1_B = data.guest_bathrooms_9_2_1_B; $scope.guest_bathrooms_9_2_1_B = false; $scope.guest_bathrooms_9_2_1_B_b = true; $scope.guest_bathrooms_9_2_1_B_c = false; $scope.guest_bathrooms_9_2_1_B_cm = ''; } else if(data.guest_bathrooms_9_2_1_B  == 5){ 
				$scope.guest_bathrooms_9_2_1_B = data.guest_bathrooms_9_2_1_B; $scope.guest_bathrooms_9_2_1_B = false; $scope.guest_bathrooms_9_2_1_B_b = false; $scope.guest_bathrooms_9_2_1_B_c = true; $scope.guest_bathrooms_9_2_1_B_cm = ''; } else if( ((data.guest_bathrooms_9_2_1_B  >= 0 ) && (data.guest_bathrooms_9_2_1_B  < 1)) || ((data.guest_bathrooms_9_2_1_B  > 1 ) && (data.guest_bathrooms_9_2_1_B  < 3)) || ((data.guest_bathrooms_9_2_1_B  > 3 ) && (data.guest_bathrooms_9_2_1_B  < 5)) ){ $scope.guest_bathrooms_9_2_1_B_cm = data.guest_bathrooms_9_2_1_B; $scope.guest_bathrooms_9_2_1_B = false; $scope.guest_bathrooms_9_2_1_B_b = false; $scope.guest_bathrooms_9_2_1_B_c = false; $scope.guest_bathrooms_9_2_1_B = ''; }else{ $scope.guest_bathrooms_9_2_1_B = ''; $scope.guest_bathrooms_9_2_1_B_cm = ''; $scope.guest_bathrooms_9_2_1_B = false; $scope.guest_bathrooms_9_2_1_B_b = false; $scope.guest_bathrooms_9_2_1_B_c = false;}
				if(data.guest_bathrooms_9_2_1_C == 1){ $scope.guest_bathrooms_9_2_1_C = data.guest_bathrooms_9_2_1_C; $scope.guest_bathrooms_9_2_1_C = true; $scope.guest_bathrooms_9_2_1_C_b = false; $scope.guest_bathrooms_9_2_1_C_c = false; $scope.guest_bathrooms_9_2_1_C_cm = ''; } else if(data.guest_bathrooms_9_2_1_C  == 3){ $scope.guest_bathrooms_9_2_1_C = data.guest_bathrooms_9_2_1_C; $scope.guest_bathrooms_9_2_1_C = false; $scope.guest_bathrooms_9_2_1_C_b = true; $scope.guest_bathrooms_9_2_1_C_c = false; $scope.guest_bathrooms_9_2_1_C_cm = ''; } else if(data.guest_bathrooms_9_2_1_C  == 5){ 
				$scope.guest_bathrooms_9_2_1_C = data.guest_bathrooms_9_2_1_C; $scope.guest_bathrooms_9_2_1_C = false; $scope.guest_bathrooms_9_2_1_C_b = false; $scope.guest_bathrooms_9_2_1_C_c = true; $scope.guest_bathrooms_9_2_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_2_1_C  >= 0 ) && (data.guest_bathrooms_9_2_1_C  < 1)) || ((data.guest_bathrooms_9_2_1_C  > 1 ) && (data.guest_bathrooms_9_2_1_C  < 3)) || ((data.guest_bathrooms_9_2_1_C  > 3 ) && (data.guest_bathrooms_9_2_1_C  < 5)) ){ $scope.guest_bathrooms_9_2_1_C_cm = data.guest_bathrooms_9_2_1_C; $scope.guest_bathrooms_9_2_1_C = false; $scope.guest_bathrooms_9_2_1_C_b = false; $scope.guest_bathrooms_9_2_1_C_c = false; $scope.guest_bathrooms_9_2_1_C = ''; }else{ $scope.guest_bathrooms_9_2_1_C = ''; $scope.guest_bathrooms_9_2_1_C_cm = ''; $scope.guest_bathrooms_9_2_1_C = false; $scope.guest_bathrooms_9_2_1_C_b = false; $scope.guest_bathrooms_9_2_1_C_c = false;}
				$scope.guest_bathrooms_9_3_1_text = data.guest_bathrooms_9_3_1_text;
				if(data.guest_bathrooms_9_3_1_A == 2){ $scope.guest_bathrooms_9_3_1_A = data.guest_bathrooms_9_3_1_A; $scope.guest_bathrooms_9_3_1_A = true; $scope.guest_bathrooms_9_3_1_A_b = false; $scope.guest_bathrooms_9_3_1_A_c = false; $scope.guest_bathrooms_9_3_1_A_cm = ''; } else if(data.guest_bathrooms_9_3_1_A  == 4){ $scope.guest_bathrooms_9_3_1_A = data.guest_bathrooms_9_3_1_A; $scope.guest_bathrooms_9_3_1_A = false; $scope.guest_bathrooms_9_3_1_A_b = true; $scope.guest_bathrooms_9_3_1_A_c = false; $scope.guest_bathrooms_9_3_1_A_cm = ''; } else if(data.guest_bathrooms_9_3_1_A  == 6){ 
				$scope.guest_bathrooms_9_3_1_A = data.guest_bathrooms_9_3_1_A; $scope.guest_bathrooms_9_3_1_A = false; $scope.guest_bathrooms_9_3_1_A_b = false; $scope.guest_bathrooms_9_3_1_A_c = true; $scope.guest_bathrooms_9_3_1_A_cm = ''; } else if( ((data.guest_bathrooms_9_3_1_A  >= 0 ) && (data.guest_bathrooms_9_3_1_A  < 2)) || ((data.guest_bathrooms_9_3_1_A  > 2 ) && (data.guest_bathrooms_9_3_1_A  < 4)) || ((data.guest_bathrooms_9_3_1_A  > 4 ) && (data.guest_bathrooms_9_3_1_A  < 6)) ){ $scope.guest_bathrooms_9_3_1_A_cm = data.guest_bathrooms_9_3_1_A; $scope.guest_bathrooms_9_3_1_A = false; $scope.guest_bathrooms_9_3_1_A_b = false; $scope.guest_bathrooms_9_3_1_A_c = false; $scope.guest_bathrooms_9_3_1_A = ''; }else{ $scope.guest_bathrooms_9_3_1_A = ''; $scope.guest_bathrooms_9_3_1_A_cm = ''; $scope.guest_bathrooms_9_3_1_A = false; $scope.guest_bathrooms_9_3_1_A_b = false; $scope.guest_bathrooms_9_3_1_A_c = false;}
				if(data.guest_bathrooms_9_3_1_B == 2){ $scope.guest_bathrooms_9_3_1_B = data.guest_bathrooms_9_3_1_B; $scope.guest_bathrooms_9_3_1_B = true; $scope.guest_bathrooms_9_3_1_B_b = false; $scope.guest_bathrooms_9_3_1_B_c = false; $scope.guest_bathrooms_9_3_1_B_cm = ''; } else if(data.guest_bathrooms_9_3_1_B  == 4){ $scope.guest_bathrooms_9_3_1_B = data.guest_bathrooms_9_3_1_B; $scope.guest_bathrooms_9_3_1_B = false; $scope.guest_bathrooms_9_3_1_B_b = true; $scope.guest_bathrooms_9_3_1_B_c = false; $scope.guest_bathrooms_9_3_1_B_cm = ''; } else if(data.guest_bathrooms_9_3_1_B  == 6){ 
				$scope.guest_bathrooms_9_3_1_B = data.guest_bathrooms_9_3_1_B; $scope.guest_bathrooms_9_3_1_B = false; $scope.guest_bathrooms_9_3_1_B_b = false; $scope.guest_bathrooms_9_3_1_B_c = true; $scope.guest_bathrooms_9_3_1_B_cm = ''; } else if( ((data.guest_bathrooms_9_3_1_B  >= 0 ) && (data.guest_bathrooms_9_3_1_B  < 2)) || ((data.guest_bathrooms_9_3_1_B  > 2 ) && (data.guest_bathrooms_9_3_1_B  < 4)) || ((data.guest_bathrooms_9_3_1_B  > 4 ) && (data.guest_bathrooms_9_3_1_B  < 6)) ){ $scope.guest_bathrooms_9_3_1_B_cm = data.guest_bathrooms_9_3_1_B; $scope.guest_bathrooms_9_3_1_B = false; $scope.guest_bathrooms_9_3_1_B_b = false; $scope.guest_bathrooms_9_3_1_B_c = false; $scope.guest_bathrooms_9_3_1_B = ''; }else{ $scope.guest_bathrooms_9_3_1_B = ''; $scope.guest_bathrooms_9_3_1_B_cm = ''; $scope.guest_bathrooms_9_3_1_B = false; $scope.guest_bathrooms_9_3_1_B_b = false; $scope.guest_bathrooms_9_3_1_B_c = false;}
				if(data.guest_bathrooms_9_3_1_C == 2){ $scope.guest_bathrooms_9_3_1_C = data.guest_bathrooms_9_3_1_C; $scope.guest_bathrooms_9_3_1_C = true; $scope.guest_bathrooms_9_3_1_C_b = false; $scope.guest_bathrooms_9_3_1_C_c = false; $scope.guest_bathrooms_9_3_1_C_cm = ''; } else if(data.guest_bathrooms_9_3_1_C  == 4){ $scope.guest_bathrooms_9_3_1_C = data.guest_bathrooms_9_3_1_C; $scope.guest_bathrooms_9_3_1_C = false; $scope.guest_bathrooms_9_3_1_C_b = true; $scope.guest_bathrooms_9_3_1_C_c = false; $scope.guest_bathrooms_9_3_1_C_cm = ''; } else if(data.guest_bathrooms_9_3_1_C  == 6){ 
				$scope.guest_bathrooms_9_3_1_C = data.guest_bathrooms_9_3_1_C; $scope.guest_bathrooms_9_3_1_C = false; $scope.guest_bathrooms_9_3_1_C_b = false; $scope.guest_bathrooms_9_3_1_C_c = true; $scope.guest_bathrooms_9_3_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_3_1_C  >= 0 ) && (data.guest_bathrooms_9_3_1_C  < 2)) || ((data.guest_bathrooms_9_3_1_C  > 2 ) && (data.guest_bathrooms_9_3_1_C  < 4)) || ((data.guest_bathrooms_9_3_1_C  > 4 ) && (data.guest_bathrooms_9_3_1_C  < 6)) ){ $scope.guest_bathrooms_9_3_1_C_cm = data.guest_bathrooms_9_3_1_C; $scope.guest_bathrooms_9_3_1_C = false; $scope.guest_bathrooms_9_3_1_C_b = false; $scope.guest_bathrooms_9_3_1_C_c = false; $scope.guest_bathrooms_9_3_1_C = ''; }else{ $scope.guest_bathrooms_9_3_1_C = ''; $scope.guest_bathrooms_9_3_1_C_cm = ''; $scope.guest_bathrooms_9_3_1_C = false; $scope.guest_bathrooms_9_3_1_C_b = false; $scope.guest_bathrooms_9_3_1_C_c = false;}
				if(data.guest_bathrooms_9_3_1_D == 0){ $scope.guest_bathrooms_9_3_1_D = data.guest_bathrooms_9_3_1_D; $scope.guest_bathrooms_9_3_1_D = true; $scope.guest_bathrooms_9_3_1_D_b = false; $scope.guest_bathrooms_9_3_1_D_c = false; $scope.guest_bathrooms_9_3_1_D_cm = ''; } else if(data.guest_bathrooms_9_3_1_D  == 2){ $scope.guest_bathrooms_9_3_1_D = data.guest_bathrooms_9_3_1_D; $scope.guest_bathrooms_9_3_1_D = false; $scope.guest_bathrooms_9_3_1_D_b = true; $scope.guest_bathrooms_9_3_1_D_c = false; $scope.guest_bathrooms_9_3_1_D_cm = ''; } else if(data.guest_bathrooms_9_3_1_D  == ){ $scope.guest_bathrooms_9_3_1_D = data.guest_bathrooms_9_3_1_D; $scope.guest_bathrooms_9_3_1_D = false; $scope.guest_bathrooms_9_3_1_D_b = false; $scope.guest_bathrooms_9_3_1_D_c = true; $scope.guest_bathrooms_9_3_1_D_cm = ''; }else if( ((data.guest_bathrooms_9_3_1_D  > 0 ) && (data.guest_bathrooms_9_3_1_D  < 2)) || ((data.guest_bathrooms_9_3_1_D  > 2 ) && (data.guest_bathrooms_9_3_1_D  < )) )
				{ $scope.guest_bathrooms_9_3_1_D_cm = data.guest_bathrooms_9_3_1_D; $scope.guest_bathrooms_9_3_1_D = false; $scope.guest_bathrooms_9_3_1_D_b = false;  $scope.guest_bathrooms_9_3_1_D_c = false; $scope.guest_bathrooms_9_3_1_D = ''; }else{ $scope.guest_bathrooms_9_3_1_D = ''; $scope.guest_bathrooms_9_3_1_D_cm = ''; $scope.guest_bathrooms_9_3_1_D = false; $scope.guest_bathrooms_9_3_1_D_b = false; $scope.guest_bathrooms_9_3_1_D_c = false; }
				if(data.guest_bathrooms_9_3_1_E == 0){ $scope.guest_bathrooms_9_3_1_E = data.guest_bathrooms_9_3_1_E; $scope.guest_bathrooms_9_3_1_E = true; $scope.guest_bathrooms_9_3_1_E_b = false; $scope.guest_bathrooms_9_3_1_E_c = false; $scope.guest_bathrooms_9_3_1_E_cm = ''; } else if(data.guest_bathrooms_9_3_1_E  == 3){ $scope.guest_bathrooms_9_3_1_E = data.guest_bathrooms_9_3_1_E; $scope.guest_bathrooms_9_3_1_E = false; $scope.guest_bathrooms_9_3_1_E_b = true; $scope.guest_bathrooms_9_3_1_E_c = false; $scope.guest_bathrooms_9_3_1_E_cm = ''; } else if(data.guest_bathrooms_9_3_1_E  == 5){ $scope.guest_bathrooms_9_3_1_E = data.guest_bathrooms_9_3_1_E; $scope.guest_bathrooms_9_3_1_E = false; $scope.guest_bathrooms_9_3_1_E_b = false; $scope.guest_bathrooms_9_3_1_E_c = true; $scope.guest_bathrooms_9_3_1_E_cm = ''; }else if( ((data.guest_bathrooms_9_3_1_E  > 0 ) && (data.guest_bathrooms_9_3_1_E  < 3)) || ((data.guest_bathrooms_9_3_1_E  > 3 ) && (data.guest_bathrooms_9_3_1_E  < 5)) )
				{ $scope.guest_bathrooms_9_3_1_E_cm = data.guest_bathrooms_9_3_1_E; $scope.guest_bathrooms_9_3_1_E = false; $scope.guest_bathrooms_9_3_1_E_b = false;  $scope.guest_bathrooms_9_3_1_E_c = false; $scope.guest_bathrooms_9_3_1_E = ''; }else{ $scope.guest_bathrooms_9_3_1_E = ''; $scope.guest_bathrooms_9_3_1_E_cm = ''; $scope.guest_bathrooms_9_3_1_E = false; $scope.guest_bathrooms_9_3_1_E_b = false; $scope.guest_bathrooms_9_3_1_E_c = false; }
				if(data.guest_bathrooms_9_3_1_F == 0){ $scope.guest_bathrooms_9_3_1_F = data.guest_bathrooms_9_3_1_F; $scope.guest_bathrooms_9_3_1_F = true; $scope.guest_bathrooms_9_3_1_F_b = false; $scope.guest_bathrooms_9_3_1_F_c = false; $scope.guest_bathrooms_9_3_1_F_cm = ''; } else if(data.guest_bathrooms_9_3_1_F  == 3){ $scope.guest_bathrooms_9_3_1_F = data.guest_bathrooms_9_3_1_F; $scope.guest_bathrooms_9_3_1_F = false; $scope.guest_bathrooms_9_3_1_F_b = true; $scope.guest_bathrooms_9_3_1_F_c = false; $scope.guest_bathrooms_9_3_1_F_cm = ''; } else if(data.guest_bathrooms_9_3_1_F  == 5){ $scope.guest_bathrooms_9_3_1_F = data.guest_bathrooms_9_3_1_F; $scope.guest_bathrooms_9_3_1_F = false; $scope.guest_bathrooms_9_3_1_F_b = false; $scope.guest_bathrooms_9_3_1_F_c = true; $scope.guest_bathrooms_9_3_1_F_cm = ''; }else if( ((data.guest_bathrooms_9_3_1_F  > 0 ) && (data.guest_bathrooms_9_3_1_F  < 3)) || ((data.guest_bathrooms_9_3_1_F  > 3 ) && (data.guest_bathrooms_9_3_1_F  < 5)) )
				{ $scope.guest_bathrooms_9_3_1_F_cm = data.guest_bathrooms_9_3_1_F; $scope.guest_bathrooms_9_3_1_F = false; $scope.guest_bathrooms_9_3_1_F_b = false;  $scope.guest_bathrooms_9_3_1_F_c = false; $scope.guest_bathrooms_9_3_1_F = ''; }else{ $scope.guest_bathrooms_9_3_1_F = ''; $scope.guest_bathrooms_9_3_1_F_cm = ''; $scope.guest_bathrooms_9_3_1_F = false; $scope.guest_bathrooms_9_3_1_F_b = false; $scope.guest_bathrooms_9_3_1_F_c = false; }
				$scope.guest_bathrooms_9_4_1_text = data.guest_bathrooms_9_4_1_text;
				if(data.guest_bathrooms_9_4_1_A_a == 1){ $scope.guest_bathrooms_9_4_1_A_a = data.guest_bathrooms_9_4_1_A_a; $scope.guest_bathrooms_9_4_1_A_a= true; $scope.guest_bathrooms_9_4_1_A_a_cm = ''; } else if((data.guest_bathrooms_9_4_1_A_a > 0 ) && (data.guest_bathrooms_9_4_1_A_a < 1)){ $scope.guest_bathrooms_9_4_1_A_a_cm = data.guest_bathrooms_9_4_1_A_a; $scope.guest_bathrooms_9_4_1_A_a= false; $scope.guest_bathrooms_9_4_1_A_a= ''; }else{ $scope.guest_bathrooms_9_4_1_A_a= ''; $scope.guest_bathrooms_9_4_1_A_a_cm = ''; $scope.guest_bathrooms_9_4_1_A_a= false; }
				if(data.guest_bathrooms_9_4_1_A_b == 1){ $scope.guest_bathrooms_9_4_1_A_b = data.guest_bathrooms_9_4_1_A_b; $scope.guest_bathrooms_9_4_1_A_b= true; $scope.guest_bathrooms_9_4_1_A_b_cm = ''; } else if((data.guest_bathrooms_9_4_1_A_b > 0 ) && (data.guest_bathrooms_9_4_1_A_b < 1)){ $scope.guest_bathrooms_9_4_1_A_b_cm = data.guest_bathrooms_9_4_1_A_b; $scope.guest_bathrooms_9_4_1_A_b= false; $scope.guest_bathrooms_9_4_1_A_b= ''; }else{ $scope.guest_bathrooms_9_4_1_A_b= ''; $scope.guest_bathrooms_9_4_1_A_b_cm = ''; $scope.guest_bathrooms_9_4_1_A_b= false; }
				if(data.guest_bathrooms_9_4_1_A_c == 1){ $scope.guest_bathrooms_9_4_1_A_c = data.guest_bathrooms_9_4_1_A_c; $scope.guest_bathrooms_9_4_1_A_c= true; $scope.guest_bathrooms_9_4_1_A_c_cm = ''; } else if((data.guest_bathrooms_9_4_1_A_c > 0 ) && (data.guest_bathrooms_9_4_1_A_c < 1)){ $scope.guest_bathrooms_9_4_1_A_c_cm = data.guest_bathrooms_9_4_1_A_c; $scope.guest_bathrooms_9_4_1_A_c= false; $scope.guest_bathrooms_9_4_1_A_c= ''; }else{ $scope.guest_bathrooms_9_4_1_A_c= ''; $scope.guest_bathrooms_9_4_1_A_c_cm = ''; $scope.guest_bathrooms_9_4_1_A_c= false; }
				if(data.guest_bathrooms_9_4_1_A_d == 1){ $scope.guest_bathrooms_9_4_1_A_d = data.guest_bathrooms_9_4_1_A_d; $scope.guest_bathrooms_9_4_1_A_d= true; $scope.guest_bathrooms_9_4_1_A_d_cm = ''; } else if((data.guest_bathrooms_9_4_1_A_d > 0 ) && (data.guest_bathrooms_9_4_1_A_d < 1)){ $scope.guest_bathrooms_9_4_1_A_d_cm = data.guest_bathrooms_9_4_1_A_d; $scope.guest_bathrooms_9_4_1_A_d= false; $scope.guest_bathrooms_9_4_1_A_d= ''; }else{ $scope.guest_bathrooms_9_4_1_A_d= ''; $scope.guest_bathrooms_9_4_1_A_d_cm = ''; $scope.guest_bathrooms_9_4_1_A_d= false; }
				if(data.guest_bathrooms_9_4_1_A_e == 1){ $scope.guest_bathrooms_9_4_1_A_e = data.guest_bathrooms_9_4_1_A_e; $scope.guest_bathrooms_9_4_1_A_e= true; $scope.guest_bathrooms_9_4_1_A_e_cm = ''; } else if((data.guest_bathrooms_9_4_1_A_e > 0 ) && (data.guest_bathrooms_9_4_1_A_e < 1)){ $scope.guest_bathrooms_9_4_1_A_e_cm = data.guest_bathrooms_9_4_1_A_e; $scope.guest_bathrooms_9_4_1_A_e= false; $scope.guest_bathrooms_9_4_1_A_e= ''; }else{ $scope.guest_bathrooms_9_4_1_A_e= ''; $scope.guest_bathrooms_9_4_1_A_e_cm = ''; $scope.guest_bathrooms_9_4_1_A_e= false; }
				if(data.guest_bathrooms_9_4_1_B == 1){ $scope.guest_bathrooms_9_4_1_B = data.guest_bathrooms_9_4_1_B; $scope.guest_bathrooms_9_4_1_B = true; $scope.guest_bathrooms_9_4_1_B_b = false; $scope.guest_bathrooms_9_4_1_B_c = false; $scope.guest_bathrooms_9_4_1_B_cm = ''; } else if(data.guest_bathrooms_9_4_1_B  == 2){ $scope.guest_bathrooms_9_4_1_B = data.guest_bathrooms_9_4_1_B; $scope.guest_bathrooms_9_4_1_B = false; $scope.guest_bathrooms_9_4_1_B_b = true; $scope.guest_bathrooms_9_4_1_B_c = false; $scope.guest_bathrooms_9_4_1_B_cm = ''; } else if(data.guest_bathrooms_9_4_1_B  == 3){ 
				$scope.guest_bathrooms_9_4_1_B = data.guest_bathrooms_9_4_1_B; $scope.guest_bathrooms_9_4_1_B = false; $scope.guest_bathrooms_9_4_1_B_b = false; $scope.guest_bathrooms_9_4_1_B_c = true; $scope.guest_bathrooms_9_4_1_B_cm = ''; } else if( ((data.guest_bathrooms_9_4_1_B  >= 0 ) && (data.guest_bathrooms_9_4_1_B  < 1)) || ((data.guest_bathrooms_9_4_1_B  > 1 ) && (data.guest_bathrooms_9_4_1_B  < 2)) || ((data.guest_bathrooms_9_4_1_B  > 2 ) && (data.guest_bathrooms_9_4_1_B  < 3)) ){ $scope.guest_bathrooms_9_4_1_B_cm = data.guest_bathrooms_9_4_1_B; $scope.guest_bathrooms_9_4_1_B = false; $scope.guest_bathrooms_9_4_1_B_b = false; $scope.guest_bathrooms_9_4_1_B_c = false; $scope.guest_bathrooms_9_4_1_B = ''; }else{ $scope.guest_bathrooms_9_4_1_B = ''; $scope.guest_bathrooms_9_4_1_B_cm = ''; $scope.guest_bathrooms_9_4_1_B = false; $scope.guest_bathrooms_9_4_1_B_b = false; $scope.guest_bathrooms_9_4_1_B_c = false;}
				if(data.guest_bathrooms_9_4_1_C == 0){ $scope.guest_bathrooms_9_4_1_C = data.guest_bathrooms_9_4_1_C; $scope.guest_bathrooms_9_4_1_C = true; $scope.guest_bathrooms_9_4_1_C_b = false; $scope.guest_bathrooms_9_4_1_C_c = false; $scope.guest_bathrooms_9_4_1_C_cm = ''; } else if(data.guest_bathrooms_9_4_1_C  == 2){ $scope.guest_bathrooms_9_4_1_C = data.guest_bathrooms_9_4_1_C; $scope.guest_bathrooms_9_4_1_C = false; $scope.guest_bathrooms_9_4_1_C_b = true; $scope.guest_bathrooms_9_4_1_C_c = false; $scope.guest_bathrooms_9_4_1_C_cm = ''; } else if(data.guest_bathrooms_9_4_1_C  == ){ $scope.guest_bathrooms_9_4_1_C = data.guest_bathrooms_9_4_1_C; $scope.guest_bathrooms_9_4_1_C = false; $scope.guest_bathrooms_9_4_1_C_b = false; $scope.guest_bathrooms_9_4_1_C_c = true; $scope.guest_bathrooms_9_4_1_C_cm = ''; }else if( ((data.guest_bathrooms_9_4_1_C  > 0 ) && (data.guest_bathrooms_9_4_1_C  < 2)) || ((data.guest_bathrooms_9_4_1_C  > 2 ) && (data.guest_bathrooms_9_4_1_C  < )) )
				{ $scope.guest_bathrooms_9_4_1_C_cm = data.guest_bathrooms_9_4_1_C; $scope.guest_bathrooms_9_4_1_C = false; $scope.guest_bathrooms_9_4_1_C_b = false;  $scope.guest_bathrooms_9_4_1_C_c = false; $scope.guest_bathrooms_9_4_1_C = ''; }else{ $scope.guest_bathrooms_9_4_1_C = ''; $scope.guest_bathrooms_9_4_1_C_cm = ''; $scope.guest_bathrooms_9_4_1_C = false; $scope.guest_bathrooms_9_4_1_C_b = false; $scope.guest_bathrooms_9_4_1_C_c = false; }
				if(data.guest_bathrooms_9_4_1_D == 0){ $scope.guest_bathrooms_9_4_1_D = data.guest_bathrooms_9_4_1_D; $scope.guest_bathrooms_9_4_1_D = true; $scope.guest_bathrooms_9_4_1_D_b = false; $scope.guest_bathrooms_9_4_1_D_c = false; $scope.guest_bathrooms_9_4_1_D_cm = ''; } else if(data.guest_bathrooms_9_4_1_D  == 2){ $scope.guest_bathrooms_9_4_1_D = data.guest_bathrooms_9_4_1_D; $scope.guest_bathrooms_9_4_1_D = false; $scope.guest_bathrooms_9_4_1_D_b = true; $scope.guest_bathrooms_9_4_1_D_c = false; $scope.guest_bathrooms_9_4_1_D_cm = ''; } else if(data.guest_bathrooms_9_4_1_D  == ){ $scope.guest_bathrooms_9_4_1_D = data.guest_bathrooms_9_4_1_D; $scope.guest_bathrooms_9_4_1_D = false; $scope.guest_bathrooms_9_4_1_D_b = false; $scope.guest_bathrooms_9_4_1_D_c = true; $scope.guest_bathrooms_9_4_1_D_cm = ''; }else if( ((data.guest_bathrooms_9_4_1_D  > 0 ) && (data.guest_bathrooms_9_4_1_D  < 2)) || ((data.guest_bathrooms_9_4_1_D  > 2 ) && (data.guest_bathrooms_9_4_1_D  < )) )
				{ $scope.guest_bathrooms_9_4_1_D_cm = data.guest_bathrooms_9_4_1_D; $scope.guest_bathrooms_9_4_1_D = false; $scope.guest_bathrooms_9_4_1_D_b = false;  $scope.guest_bathrooms_9_4_1_D_c = false; $scope.guest_bathrooms_9_4_1_D = ''; }else{ $scope.guest_bathrooms_9_4_1_D = ''; $scope.guest_bathrooms_9_4_1_D_cm = ''; $scope.guest_bathrooms_9_4_1_D = false; $scope.guest_bathrooms_9_4_1_D_b = false; $scope.guest_bathrooms_9_4_1_D_c = false; }
				if(data.guest_bathrooms_9_4_1_E == 1){ $scope.guest_bathrooms_9_4_1_E = data.guest_bathrooms_9_4_1_E; $scope.guest_bathrooms_9_4_1_E = true; $scope.guest_bathrooms_9_4_1_E_b = false; $scope.guest_bathrooms_9_4_1_E_c = false; $scope.guest_bathrooms_9_4_1_E_cm = ''; } else if(data.guest_bathrooms_9_4_1_E  == 3){ $scope.guest_bathrooms_9_4_1_E = data.guest_bathrooms_9_4_1_E; $scope.guest_bathrooms_9_4_1_E = false; $scope.guest_bathrooms_9_4_1_E_b = true; $scope.guest_bathrooms_9_4_1_E_c = false; $scope.guest_bathrooms_9_4_1_E_cm = ''; } else if(data.guest_bathrooms_9_4_1_E  == 5){ 
				$scope.guest_bathrooms_9_4_1_E = data.guest_bathrooms_9_4_1_E; $scope.guest_bathrooms_9_4_1_E = false; $scope.guest_bathrooms_9_4_1_E_b = false; $scope.guest_bathrooms_9_4_1_E_c = true; $scope.guest_bathrooms_9_4_1_E_cm = ''; } else if( ((data.guest_bathrooms_9_4_1_E  >= 0 ) && (data.guest_bathrooms_9_4_1_E  < 1)) || ((data.guest_bathrooms_9_4_1_E  > 1 ) && (data.guest_bathrooms_9_4_1_E  < 3)) || ((data.guest_bathrooms_9_4_1_E  > 3 ) && (data.guest_bathrooms_9_4_1_E  < 5)) ){ $scope.guest_bathrooms_9_4_1_E_cm = data.guest_bathrooms_9_4_1_E; $scope.guest_bathrooms_9_4_1_E = false; $scope.guest_bathrooms_9_4_1_E_b = false; $scope.guest_bathrooms_9_4_1_E_c = false; $scope.guest_bathrooms_9_4_1_E = ''; }else{ $scope.guest_bathrooms_9_4_1_E = ''; $scope.guest_bathrooms_9_4_1_E_cm = ''; $scope.guest_bathrooms_9_4_1_E = false; $scope.guest_bathrooms_9_4_1_E_b = false; $scope.guest_bathrooms_9_4_1_E_c = false;}
				if(data.guest_bathrooms_9_4_1_F  == 1){ $scope.guest_bathrooms_9_4_1_F  = data.guest_bathrooms_9_4_1_F ; $scope.guest_bathrooms_9_4_1_F = true; $scope.guest_bathrooms_9_4_1_F_b = false; $scope.guest_bathrooms_9_4_1_F_cm = ''; } else if(data.guest_bathrooms_9_4_1_F  == 3){ $scope.guest_bathrooms_9_4_1_F  = data.guest_bathrooms_9_4_1_F ; $scope.guest_bathrooms_9_4_1_F = false; $scope.guest_bathrooms_9_4_1_F_b = true; $scope.guest_bathrooms_9_4_1_F_cm = ''; }else if( ((data.guest_bathrooms_9_4_1_F  > 0 ) && (data.guest_bathrooms_9_4_1_F  < 1)) || ((data.guest_bathrooms_9_4_1_F  > 1 ) && (data.guest_bathrooms_9_4_1_F  < 3)))
				{ $scope.guest_bathrooms_9_4_1_F_cm = data.guest_bathrooms_9_4_1_F ; $scope.guest_bathrooms_9_4_1_F = false; $scope.guest_bathrooms_9_4_1_F_b = false; $scope.guest_bathrooms_9_4_1_F  = ''; }else{ $scope.guest_bathrooms_9_4_1_F  = ''; $scope.guest_bathrooms_9_4_1_F_cm = ''; $scope.guest_bathrooms_9_4_1_F = false; $scope.guest_bathrooms_9_4_1_F_b = false; }
				$scope.guest_bathrooms_9_5_1_text = data.guest_bathrooms_9_5_1_text;
				if(data.guest_bathrooms_9_5_1_A == 5){ $scope.guest_bathrooms_9_5_1_A = data.guest_bathrooms_9_5_1_A; $scope.guest_bathrooms_9_5_1_A = true; $scope.guest_bathrooms_9_5_1_A_b = false; $scope.guest_bathrooms_9_5_1_A_c = false; $scope.guest_bathrooms_9_5_1_A_cm = ''; } else if(data.guest_bathrooms_9_5_1_A  == 8){ $scope.guest_bathrooms_9_5_1_A = data.guest_bathrooms_9_5_1_A; $scope.guest_bathrooms_9_5_1_A = false; $scope.guest_bathrooms_9_5_1_A_b = true; $scope.guest_bathrooms_9_5_1_A_c = false; $scope.guest_bathrooms_9_5_1_A_cm = ''; } else if(data.guest_bathrooms_9_5_1_A  == 10){ 
				$scope.guest_bathrooms_9_5_1_A = data.guest_bathrooms_9_5_1_A; $scope.guest_bathrooms_9_5_1_A = false; $scope.guest_bathrooms_9_5_1_A_b = false; $scope.guest_bathrooms_9_5_1_A_c = true; $scope.guest_bathrooms_9_5_1_A_cm = ''; } else if( ((data.guest_bathrooms_9_5_1_A  >= 0 ) && (data.guest_bathrooms_9_5_1_A  < 5)) || ((data.guest_bathrooms_9_5_1_A  > 5 ) && (data.guest_bathrooms_9_5_1_A  < 8)) || ((data.guest_bathrooms_9_5_1_A  > 8 ) && (data.guest_bathrooms_9_5_1_A  < 10)) ){ $scope.guest_bathrooms_9_5_1_A_cm = data.guest_bathrooms_9_5_1_A; $scope.guest_bathrooms_9_5_1_A = false; $scope.guest_bathrooms_9_5_1_A_b = false; $scope.guest_bathrooms_9_5_1_A_c = false; $scope.guest_bathrooms_9_5_1_A = ''; }else{ $scope.guest_bathrooms_9_5_1_A = ''; $scope.guest_bathrooms_9_5_1_A_cm = ''; $scope.guest_bathrooms_9_5_1_A = false; $scope.guest_bathrooms_9_5_1_A_b = false; $scope.guest_bathrooms_9_5_1_A_c = false;}
				if(data.guest_bathrooms_9_5_1_B == 0){ $scope.guest_bathrooms_9_5_1_B = data.guest_bathrooms_9_5_1_B; $scope.guest_bathrooms_9_5_1_B = true; $scope.guest_bathrooms_9_5_1_B_b = false; $scope.guest_bathrooms_9_5_1_B_c = false; $scope.guest_bathrooms_9_5_1_B_cm = ''; } else if(data.guest_bathrooms_9_5_1_B  == 5){ $scope.guest_bathrooms_9_5_1_B = data.guest_bathrooms_9_5_1_B; $scope.guest_bathrooms_9_5_1_B = false; $scope.guest_bathrooms_9_5_1_B_b = true; $scope.guest_bathrooms_9_5_1_B_c = false; $scope.guest_bathrooms_9_5_1_B_cm = ''; } else if(data.guest_bathrooms_9_5_1_B  == ){ $scope.guest_bathrooms_9_5_1_B = data.guest_bathrooms_9_5_1_B; $scope.guest_bathrooms_9_5_1_B = false; $scope.guest_bathrooms_9_5_1_B_b = false; $scope.guest_bathrooms_9_5_1_B_c = true; $scope.guest_bathrooms_9_5_1_B_cm = ''; }else if( ((data.guest_bathrooms_9_5_1_B  > 0 ) && (data.guest_bathrooms_9_5_1_B  < 5)) || ((data.guest_bathrooms_9_5_1_B  > 5 ) && (data.guest_bathrooms_9_5_1_B  < )) )
				{ $scope.guest_bathrooms_9_5_1_B_cm = data.guest_bathrooms_9_5_1_B; $scope.guest_bathrooms_9_5_1_B = false; $scope.guest_bathrooms_9_5_1_B_b = false;  $scope.guest_bathrooms_9_5_1_B_c = false; $scope.guest_bathrooms_9_5_1_B = ''; }else{ $scope.guest_bathrooms_9_5_1_B = ''; $scope.guest_bathrooms_9_5_1_B_cm = ''; $scope.guest_bathrooms_9_5_1_B = false; $scope.guest_bathrooms_9_5_1_B_b = false; $scope.guest_bathrooms_9_5_1_B_c = false; }
				if(data.guest_bathrooms_9_5_1_C == 5){ $scope.guest_bathrooms_9_5_1_C = data.guest_bathrooms_9_5_1_C; $scope.guest_bathrooms_9_5_1_C = true; $scope.guest_bathrooms_9_5_1_C_b = false; $scope.guest_bathrooms_9_5_1_C_c = false; $scope.guest_bathrooms_9_5_1_C_cm = ''; } else if(data.guest_bathrooms_9_5_1_C  == 8){ $scope.guest_bathrooms_9_5_1_C = data.guest_bathrooms_9_5_1_C; $scope.guest_bathrooms_9_5_1_C = false; $scope.guest_bathrooms_9_5_1_C_b = true; $scope.guest_bathrooms_9_5_1_C_c = false; $scope.guest_bathrooms_9_5_1_C_cm = ''; } else if(data.guest_bathrooms_9_5_1_C  == 10){ 
				$scope.guest_bathrooms_9_5_1_C = data.guest_bathrooms_9_5_1_C; $scope.guest_bathrooms_9_5_1_C = false; $scope.guest_bathrooms_9_5_1_C_b = false; $scope.guest_bathrooms_9_5_1_C_c = true; $scope.guest_bathrooms_9_5_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_5_1_C  >= 0 ) && (data.guest_bathrooms_9_5_1_C  < 5)) || ((data.guest_bathrooms_9_5_1_C  > 5 ) && (data.guest_bathrooms_9_5_1_C  < 8)) || ((data.guest_bathrooms_9_5_1_C  > 8 ) && (data.guest_bathrooms_9_5_1_C  < 10)) ){ $scope.guest_bathrooms_9_5_1_C_cm = data.guest_bathrooms_9_5_1_C; $scope.guest_bathrooms_9_5_1_C = false; $scope.guest_bathrooms_9_5_1_C_b = false; $scope.guest_bathrooms_9_5_1_C_c = false; $scope.guest_bathrooms_9_5_1_C = ''; }else{ $scope.guest_bathrooms_9_5_1_C = ''; $scope.guest_bathrooms_9_5_1_C_cm = ''; $scope.guest_bathrooms_9_5_1_C = false; $scope.guest_bathrooms_9_5_1_C_b = false; $scope.guest_bathrooms_9_5_1_C_c = false;}
				if(data.guest_bathrooms_9_5_1_D == 5){ $scope.guest_bathrooms_9_5_1_D = data.guest_bathrooms_9_5_1_D; $scope.guest_bathrooms_9_5_1_D = true; $scope.guest_bathrooms_9_5_1_D_b = false; $scope.guest_bathrooms_9_5_1_D_c = false; $scope.guest_bathrooms_9_5_1_D_cm = ''; } else if(data.guest_bathrooms_9_5_1_D  == 7){ $scope.guest_bathrooms_9_5_1_D = data.guest_bathrooms_9_5_1_D; $scope.guest_bathrooms_9_5_1_D = false; $scope.guest_bathrooms_9_5_1_D_b = true; $scope.guest_bathrooms_9_5_1_D_c = false; $scope.guest_bathrooms_9_5_1_D_cm = ''; } else if(data.guest_bathrooms_9_5_1_D  == 15){ 
				$scope.guest_bathrooms_9_5_1_D = data.guest_bathrooms_9_5_1_D; $scope.guest_bathrooms_9_5_1_D = false; $scope.guest_bathrooms_9_5_1_D_b = false; $scope.guest_bathrooms_9_5_1_D_c = true; $scope.guest_bathrooms_9_5_1_D_cm = ''; } else if( ((data.guest_bathrooms_9_5_1_D  >= 0 ) && (data.guest_bathrooms_9_5_1_D  < 5)) || ((data.guest_bathrooms_9_5_1_D  > 5 ) && (data.guest_bathrooms_9_5_1_D  < 7)) || ((data.guest_bathrooms_9_5_1_D  > 7 ) && (data.guest_bathrooms_9_5_1_D  < 15)) ){ $scope.guest_bathrooms_9_5_1_D_cm = data.guest_bathrooms_9_5_1_D; $scope.guest_bathrooms_9_5_1_D = false; $scope.guest_bathrooms_9_5_1_D_b = false; $scope.guest_bathrooms_9_5_1_D_c = false; $scope.guest_bathrooms_9_5_1_D = ''; }else{ $scope.guest_bathrooms_9_5_1_D = ''; $scope.guest_bathrooms_9_5_1_D_cm = ''; $scope.guest_bathrooms_9_5_1_D = false; $scope.guest_bathrooms_9_5_1_D_b = false; $scope.guest_bathrooms_9_5_1_D_c = false;}
				$scope.guest_bathrooms_9_6_1_text = data.guest_bathrooms_9_6_1_text;
				if(data.guest_bathrooms_9_6_1_A == 0){ $scope.guest_bathrooms_9_6_1_A = data.guest_bathrooms_9_6_1_A; $scope.guest_bathrooms_9_6_1_A = true; $scope.guest_bathrooms_9_6_1_A_b = false; $scope.guest_bathrooms_9_6_1_A_c = false; $scope.guest_bathrooms_9_6_1_A_cm = ''; } else if(data.guest_bathrooms_9_6_1_A  == 5){ $scope.guest_bathrooms_9_6_1_A = data.guest_bathrooms_9_6_1_A; $scope.guest_bathrooms_9_6_1_A = false; $scope.guest_bathrooms_9_6_1_A_b = true; $scope.guest_bathrooms_9_6_1_A_c = false; $scope.guest_bathrooms_9_6_1_A_cm = ''; } else if(data.guest_bathrooms_9_6_1_A  == ){ $scope.guest_bathrooms_9_6_1_A = data.guest_bathrooms_9_6_1_A; $scope.guest_bathrooms_9_6_1_A = false; $scope.guest_bathrooms_9_6_1_A_b = false; $scope.guest_bathrooms_9_6_1_A_c = true; $scope.guest_bathrooms_9_6_1_A_cm = ''; }else if( ((data.guest_bathrooms_9_6_1_A  > 0 ) && (data.guest_bathrooms_9_6_1_A  < 5)) || ((data.guest_bathrooms_9_6_1_A  > 5 ) && (data.guest_bathrooms_9_6_1_A  < )) )
				{ $scope.guest_bathrooms_9_6_1_A_cm = data.guest_bathrooms_9_6_1_A; $scope.guest_bathrooms_9_6_1_A = false; $scope.guest_bathrooms_9_6_1_A_b = false;  $scope.guest_bathrooms_9_6_1_A_c = false; $scope.guest_bathrooms_9_6_1_A = ''; }else{ $scope.guest_bathrooms_9_6_1_A = ''; $scope.guest_bathrooms_9_6_1_A_cm = ''; $scope.guest_bathrooms_9_6_1_A = false; $scope.guest_bathrooms_9_6_1_A_b = false; $scope.guest_bathrooms_9_6_1_A_c = false; }
				if(data.guest_bathrooms_9_6_1_B == 0){ $scope.guest_bathrooms_9_6_1_B = data.guest_bathrooms_9_6_1_B; $scope.guest_bathrooms_9_6_1_B = true; $scope.guest_bathrooms_9_6_1_B_b = false; $scope.guest_bathrooms_9_6_1_B_c = false; $scope.guest_bathrooms_9_6_1_B_cm = ''; } else if(data.guest_bathrooms_9_6_1_B  == 5){ $scope.guest_bathrooms_9_6_1_B = data.guest_bathrooms_9_6_1_B; $scope.guest_bathrooms_9_6_1_B = false; $scope.guest_bathrooms_9_6_1_B_b = true; $scope.guest_bathrooms_9_6_1_B_c = false; $scope.guest_bathrooms_9_6_1_B_cm = ''; } else if(data.guest_bathrooms_9_6_1_B  == ){ $scope.guest_bathrooms_9_6_1_B = data.guest_bathrooms_9_6_1_B; $scope.guest_bathrooms_9_6_1_B = false; $scope.guest_bathrooms_9_6_1_B_b = false; $scope.guest_bathrooms_9_6_1_B_c = true; $scope.guest_bathrooms_9_6_1_B_cm = ''; }else if( ((data.guest_bathrooms_9_6_1_B  > 0 ) && (data.guest_bathrooms_9_6_1_B  < 5)) || ((data.guest_bathrooms_9_6_1_B  > 5 ) && (data.guest_bathrooms_9_6_1_B  < )) )
				{ $scope.guest_bathrooms_9_6_1_B_cm = data.guest_bathrooms_9_6_1_B; $scope.guest_bathrooms_9_6_1_B = false; $scope.guest_bathrooms_9_6_1_B_b = false;  $scope.guest_bathrooms_9_6_1_B_c = false; $scope.guest_bathrooms_9_6_1_B = ''; }else{ $scope.guest_bathrooms_9_6_1_B = ''; $scope.guest_bathrooms_9_6_1_B_cm = ''; $scope.guest_bathrooms_9_6_1_B = false; $scope.guest_bathrooms_9_6_1_B_b = false; $scope.guest_bathrooms_9_6_1_B_c = false; }
				if(data.guest_bathrooms_9_6_1_C == 3){ $scope.guest_bathrooms_9_6_1_C = data.guest_bathrooms_9_6_1_C; $scope.guest_bathrooms_9_6_1_C = true; $scope.guest_bathrooms_9_6_1_C_b = false; $scope.guest_bathrooms_9_6_1_C_c = false; $scope.guest_bathrooms_9_6_1_C_cm = ''; } else if(data.guest_bathrooms_9_6_1_C  == 5){ $scope.guest_bathrooms_9_6_1_C = data.guest_bathrooms_9_6_1_C; $scope.guest_bathrooms_9_6_1_C = false; $scope.guest_bathrooms_9_6_1_C_b = true; $scope.guest_bathrooms_9_6_1_C_c = false; $scope.guest_bathrooms_9_6_1_C_cm = ''; } else if(data.guest_bathrooms_9_6_1_C  == 10){ 
				$scope.guest_bathrooms_9_6_1_C = data.guest_bathrooms_9_6_1_C; $scope.guest_bathrooms_9_6_1_C = false; $scope.guest_bathrooms_9_6_1_C_b = false; $scope.guest_bathrooms_9_6_1_C_c = true; $scope.guest_bathrooms_9_6_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_6_1_C  >= 0 ) && (data.guest_bathrooms_9_6_1_C  < 3)) || ((data.guest_bathrooms_9_6_1_C  > 3 ) && (data.guest_bathrooms_9_6_1_C  < 5)) || ((data.guest_bathrooms_9_6_1_C  > 5 ) && (data.guest_bathrooms_9_6_1_C  < 10)) ){ $scope.guest_bathrooms_9_6_1_C_cm = data.guest_bathrooms_9_6_1_C; $scope.guest_bathrooms_9_6_1_C = false; $scope.guest_bathrooms_9_6_1_C_b = false; $scope.guest_bathrooms_9_6_1_C_c = false; $scope.guest_bathrooms_9_6_1_C = ''; }else{ $scope.guest_bathrooms_9_6_1_C = ''; $scope.guest_bathrooms_9_6_1_C_cm = ''; $scope.guest_bathrooms_9_6_1_C = false; $scope.guest_bathrooms_9_6_1_C_b = false; $scope.guest_bathrooms_9_6_1_C_c = false;}
				$scope.guest_bathrooms_9_7_1_text = data.guest_bathrooms_9_7_1_text;
				if(data.guest_bathrooms_9_7_1_A_a == 2){ $scope.guest_bathrooms_9_7_1_A_a = data.guest_bathrooms_9_7_1_A_a; $scope.guest_bathrooms_9_7_1_A_a= true; $scope.guest_bathrooms_9_7_1_A_a_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_a > 0 ) && (data.guest_bathrooms_9_7_1_A_a < 2)){ $scope.guest_bathrooms_9_7_1_A_a_cm = data.guest_bathrooms_9_7_1_A_a; $scope.guest_bathrooms_9_7_1_A_a= false; $scope.guest_bathrooms_9_7_1_A_a= ''; }else{ $scope.guest_bathrooms_9_7_1_A_a= ''; $scope.guest_bathrooms_9_7_1_A_a_cm = ''; $scope.guest_bathrooms_9_7_1_A_a= false; }
				if(data.guest_bathrooms_9_7_1_A_b == 2){ $scope.guest_bathrooms_9_7_1_A_b = data.guest_bathrooms_9_7_1_A_b; $scope.guest_bathrooms_9_7_1_A_b= true; $scope.guest_bathrooms_9_7_1_A_b_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_b > 0 ) && (data.guest_bathrooms_9_7_1_A_b < 2)){ $scope.guest_bathrooms_9_7_1_A_b_cm = data.guest_bathrooms_9_7_1_A_b; $scope.guest_bathrooms_9_7_1_A_b= false; $scope.guest_bathrooms_9_7_1_A_b= ''; }else{ $scope.guest_bathrooms_9_7_1_A_b= ''; $scope.guest_bathrooms_9_7_1_A_b_cm = ''; $scope.guest_bathrooms_9_7_1_A_b= false; }
				if(data.guest_bathrooms_9_7_1_A_c == 2){ $scope.guest_bathrooms_9_7_1_A_c = data.guest_bathrooms_9_7_1_A_c; $scope.guest_bathrooms_9_7_1_A_c= true; $scope.guest_bathrooms_9_7_1_A_c_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_c > 0 ) && (data.guest_bathrooms_9_7_1_A_c < 2)){ $scope.guest_bathrooms_9_7_1_A_c_cm = data.guest_bathrooms_9_7_1_A_c; $scope.guest_bathrooms_9_7_1_A_c= false; $scope.guest_bathrooms_9_7_1_A_c= ''; }else{ $scope.guest_bathrooms_9_7_1_A_c= ''; $scope.guest_bathrooms_9_7_1_A_c_cm = ''; $scope.guest_bathrooms_9_7_1_A_c= false; }
				if(data.guest_bathrooms_9_7_1_A_d == 2){ $scope.guest_bathrooms_9_7_1_A_d = data.guest_bathrooms_9_7_1_A_d; $scope.guest_bathrooms_9_7_1_A_d= true; $scope.guest_bathrooms_9_7_1_A_d_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_d > 0 ) && (data.guest_bathrooms_9_7_1_A_d < 2)){ $scope.guest_bathrooms_9_7_1_A_d_cm = data.guest_bathrooms_9_7_1_A_d; $scope.guest_bathrooms_9_7_1_A_d= false; $scope.guest_bathrooms_9_7_1_A_d= ''; }else{ $scope.guest_bathrooms_9_7_1_A_d= ''; $scope.guest_bathrooms_9_7_1_A_d_cm = ''; $scope.guest_bathrooms_9_7_1_A_d= false; }
				if(data.guest_bathrooms_9_7_1_A_e == 2){ $scope.guest_bathrooms_9_7_1_A_e = data.guest_bathrooms_9_7_1_A_e; $scope.guest_bathrooms_9_7_1_A_e= true; $scope.guest_bathrooms_9_7_1_A_e_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_e > 0 ) && (data.guest_bathrooms_9_7_1_A_e < 2)){ $scope.guest_bathrooms_9_7_1_A_e_cm = data.guest_bathrooms_9_7_1_A_e; $scope.guest_bathrooms_9_7_1_A_e= false; $scope.guest_bathrooms_9_7_1_A_e= ''; }else{ $scope.guest_bathrooms_9_7_1_A_e= ''; $scope.guest_bathrooms_9_7_1_A_e_cm = ''; $scope.guest_bathrooms_9_7_1_A_e= false; }
				if(data.guest_bathrooms_9_7_1_A_f == 2){ $scope.guest_bathrooms_9_7_1_A_f = data.guest_bathrooms_9_7_1_A_f; $scope.guest_bathrooms_9_7_1_A_f= true; $scope.guest_bathrooms_9_7_1_A_f_cm = ''; } else if((data.guest_bathrooms_9_7_1_A_f > 0 ) && (data.guest_bathrooms_9_7_1_A_f < 2)){ $scope.guest_bathrooms_9_7_1_A_f_cm = data.guest_bathrooms_9_7_1_A_f; $scope.guest_bathrooms_9_7_1_A_f= false; $scope.guest_bathrooms_9_7_1_A_f= ''; }else{ $scope.guest_bathrooms_9_7_1_A_f= ''; $scope.guest_bathrooms_9_7_1_A_f_cm = ''; $scope.guest_bathrooms_9_7_1_A_f= false; }
				if(data.guest_bathrooms_9_7_1_B == 1){ $scope.guest_bathrooms_9_7_1_B = data.guest_bathrooms_9_7_1_B; $scope.guest_bathrooms_9_7_1_B = true; $scope.guest_bathrooms_9_7_1_B_b = false; $scope.guest_bathrooms_9_7_1_B_c = false; $scope.guest_bathrooms_9_7_1_B_cm = ''; } else if(data.guest_bathrooms_9_7_1_B  == 3){ $scope.guest_bathrooms_9_7_1_B = data.guest_bathrooms_9_7_1_B; $scope.guest_bathrooms_9_7_1_B = false; $scope.guest_bathrooms_9_7_1_B_b = true; $scope.guest_bathrooms_9_7_1_B_c = false; $scope.guest_bathrooms_9_7_1_B_cm = ''; } else if(data.guest_bathrooms_9_7_1_B  == 4){ 
				$scope.guest_bathrooms_9_7_1_B = data.guest_bathrooms_9_7_1_B; $scope.guest_bathrooms_9_7_1_B = false; $scope.guest_bathrooms_9_7_1_B_b = false; $scope.guest_bathrooms_9_7_1_B_c = true; $scope.guest_bathrooms_9_7_1_B_cm = ''; } else if( ((data.guest_bathrooms_9_7_1_B  >= 0 ) && (data.guest_bathrooms_9_7_1_B  < 1)) || ((data.guest_bathrooms_9_7_1_B  > 1 ) && (data.guest_bathrooms_9_7_1_B  < 3)) || ((data.guest_bathrooms_9_7_1_B  > 3 ) && (data.guest_bathrooms_9_7_1_B  < 4)) ){ $scope.guest_bathrooms_9_7_1_B_cm = data.guest_bathrooms_9_7_1_B; $scope.guest_bathrooms_9_7_1_B = false; $scope.guest_bathrooms_9_7_1_B_b = false; $scope.guest_bathrooms_9_7_1_B_c = false; $scope.guest_bathrooms_9_7_1_B = ''; }else{ $scope.guest_bathrooms_9_7_1_B = ''; $scope.guest_bathrooms_9_7_1_B_cm = ''; $scope.guest_bathrooms_9_7_1_B = false; $scope.guest_bathrooms_9_7_1_B_b = false; $scope.guest_bathrooms_9_7_1_B_c = false;}
				if(data.guest_bathrooms_9_7_1_C == 1){ $scope.guest_bathrooms_9_7_1_C = data.guest_bathrooms_9_7_1_C; $scope.guest_bathrooms_9_7_1_C = true; $scope.guest_bathrooms_9_7_1_C_b = false; $scope.guest_bathrooms_9_7_1_C_c = false; $scope.guest_bathrooms_9_7_1_C_cm = ''; } else if(data.guest_bathrooms_9_7_1_C  == 3){ $scope.guest_bathrooms_9_7_1_C = data.guest_bathrooms_9_7_1_C; $scope.guest_bathrooms_9_7_1_C = false; $scope.guest_bathrooms_9_7_1_C_b = true; $scope.guest_bathrooms_9_7_1_C_c = false; $scope.guest_bathrooms_9_7_1_C_cm = ''; } else if(data.guest_bathrooms_9_7_1_C  == 4){ 
				$scope.guest_bathrooms_9_7_1_C = data.guest_bathrooms_9_7_1_C; $scope.guest_bathrooms_9_7_1_C = false; $scope.guest_bathrooms_9_7_1_C_b = false; $scope.guest_bathrooms_9_7_1_C_c = true; $scope.guest_bathrooms_9_7_1_C_cm = ''; } else if( ((data.guest_bathrooms_9_7_1_C  >= 0 ) && (data.guest_bathrooms_9_7_1_C  < 1)) || ((data.guest_bathrooms_9_7_1_C  > 1 ) && (data.guest_bathrooms_9_7_1_C  < 3)) || ((data.guest_bathrooms_9_7_1_C  > 3 ) && (data.guest_bathrooms_9_7_1_C  < 4)) ){ $scope.guest_bathrooms_9_7_1_C_cm = data.guest_bathrooms_9_7_1_C; $scope.guest_bathrooms_9_7_1_C = false; $scope.guest_bathrooms_9_7_1_C_b = false; $scope.guest_bathrooms_9_7_1_C_c = false; $scope.guest_bathrooms_9_7_1_C = ''; }else{ $scope.guest_bathrooms_9_7_1_C = ''; $scope.guest_bathrooms_9_7_1_C_cm = ''; $scope.guest_bathrooms_9_7_1_C = false; $scope.guest_bathrooms_9_7_1_C_b = false; $scope.guest_bathrooms_9_7_1_C_c = false;}
				$scope.guest_bathrooms_9_8_1_text = data.guest_bathrooms_9_8_1_text;
				if(data.guest_bathrooms_9_8_1_A == 0){ $scope.guest_bathrooms_9_8_1_A = data.guest_bathrooms_9_8_1_A; $scope.guest_bathrooms_9_8_1_A = true; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = false; $scope.guest_bathrooms_9_8_1_A_cm = ''; } else if(data.guest_bathrooms_9_8_1_A  == 4){ $scope.guest_bathrooms_9_8_1_A = data.guest_bathrooms_9_8_1_A; $scope.guest_bathrooms_9_8_1_A = false; $scope.guest_bathrooms_9_8_1_A_b = true; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = false; $scope.guest_bathrooms_9_8_1_A_cm = ''; } else if(data.guest_bathrooms_9_8_1_A  == 8){ $scope.guest_bathrooms_9_8_1_A = data.guest_bathrooms_9_8_1_A; $scope.guest_bathrooms_9_8_1_A = false; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = true; $scope.guest_bathrooms_9_8_1_A_d = false; $scope.guest_bathrooms_9_8_1_A_cm = ''; }else if(data.guest_bathrooms_9_8_1_A  == 15){ $scope.guest_bathrooms_9_8_1_A = data.guest_bathrooms_9_8_1_A; $scope.guest_bathrooms_9_8_1_A = false; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = true; $scope.guest_bathrooms_9_8_1_A_cm = ''; } else if( ((data.guest_bathrooms_9_8_1_A  > 0 ) && (data.guest_bathrooms_9_8_1_A  < 4)) || ((data.guest_bathrooms_9_8_1_A  > 4 ) && (data.guest_bathrooms_9_8_1_A  < 8)) || ((data.guest_bathrooms_9_8_1_A  > 8 ) && (data.guest_bathrooms_9_8_1_A  < 15)) )
				{ $scope.guest_bathrooms_9_8_1_A_cm = data.guest_bathrooms_9_8_1_A; $scope.guest_bathrooms_9_8_1_A = false; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = false; $scope.guest_bathrooms_9_8_1_A = ''; }else{ $scope.guest_bathrooms_9_8_1_A = ''; $scope.guest_bathrooms_9_8_1_A_cm = ''; $scope.guest_bathrooms_9_8_1_A = false; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = false;}
				if(data.guest_bathrooms_9_8_1_B  == 2){ $scope.guest_bathrooms_9_8_1_B  = data.guest_bathrooms_9_8_1_B ; $scope.guest_bathrooms_9_8_1_B = true; $scope.guest_bathrooms_9_8_1_B_b = false; $scope.guest_bathrooms_9_8_1_B_cm = ''; } else if(data.guest_bathrooms_9_8_1_B  == 5){ $scope.guest_bathrooms_9_8_1_B  = data.guest_bathrooms_9_8_1_B ; $scope.guest_bathrooms_9_8_1_B = false; $scope.guest_bathrooms_9_8_1_B_b = true; $scope.guest_bathrooms_9_8_1_B_cm = ''; }else if( ((data.guest_bathrooms_9_8_1_B  > 0 ) && (data.guest_bathrooms_9_8_1_B  < 2)) || ((data.guest_bathrooms_9_8_1_B  > 2 ) && (data.guest_bathrooms_9_8_1_B  < 5)))
				{ $scope.guest_bathrooms_9_8_1_B_cm = data.guest_bathrooms_9_8_1_B ; $scope.guest_bathrooms_9_8_1_B = false; $scope.guest_bathrooms_9_8_1_B_b = false; $scope.guest_bathrooms_9_8_1_B  = ''; }else{ $scope.guest_bathrooms_9_8_1_B  = ''; $scope.guest_bathrooms_9_8_1_B_cm = ''; $scope.guest_bathrooms_9_8_1_B = false; $scope.guest_bathrooms_9_8_1_B_b = false; }
				$scope.hygiene_and_sanitation_10_1_1_text = data.hygiene_and_sanitation_10_1_1_text;
				if(data.hygiene_and_sanitation_10_1_1_A  == 1){ $scope.hygiene_and_sanitation_10_1_1_A  = data.hygiene_and_sanitation_10_1_1_A ; $scope.hygiene_and_sanitation_10_1_1_A = true; $scope.hygiene_and_sanitation_10_1_1_A_b = false; $scope.hygiene_and_sanitation_10_1_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_A  == 2){ $scope.hygiene_and_sanitation_10_1_1_A  = data.hygiene_and_sanitation_10_1_1_A ; $scope.hygiene_and_sanitation_10_1_1_A = false; $scope.hygiene_and_sanitation_10_1_1_A_b = true; $scope.hygiene_and_sanitation_10_1_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_A  > 0 ) && (data.hygiene_and_sanitation_10_1_1_A  < 1)) || ((data.hygiene_and_sanitation_10_1_1_A  > 1 ) && (data.hygiene_and_sanitation_10_1_1_A  < 2)))
				{ $scope.hygiene_and_sanitation_10_1_1_A_cm = data.hygiene_and_sanitation_10_1_1_A ; $scope.hygiene_and_sanitation_10_1_1_A = false; $scope.hygiene_and_sanitation_10_1_1_A_b = false; $scope.hygiene_and_sanitation_10_1_1_A  = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_A  = ''; $scope.hygiene_and_sanitation_10_1_1_A_cm = ''; $scope.hygiene_and_sanitation_10_1_1_A = false; $scope.hygiene_and_sanitation_10_1_1_A_b = false; }
				if(data.hygiene_and_sanitation_10_1_1_B == 1){ $scope.hygiene_and_sanitation_10_1_1_B = data.hygiene_and_sanitation_10_1_1_B; $scope.hygiene_and_sanitation_10_1_1_B = true; $scope.hygiene_and_sanitation_10_1_1_B_b = false; $scope.hygiene_and_sanitation_10_1_1_B_c = false; $scope.hygiene_and_sanitation_10_1_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_B  == 2){ $scope.hygiene_and_sanitation_10_1_1_B = data.hygiene_and_sanitation_10_1_1_B; $scope.hygiene_and_sanitation_10_1_1_B = false; $scope.hygiene_and_sanitation_10_1_1_B_b = true; $scope.hygiene_and_sanitation_10_1_1_B_c = false; $scope.hygiene_and_sanitation_10_1_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_B  == 3){ 
				$scope.hygiene_and_sanitation_10_1_1_B = data.hygiene_and_sanitation_10_1_1_B; $scope.hygiene_and_sanitation_10_1_1_B = false; $scope.hygiene_and_sanitation_10_1_1_B_b = false; $scope.hygiene_and_sanitation_10_1_1_B_c = true; $scope.hygiene_and_sanitation_10_1_1_B_cm = ''; } else if( ((data.hygiene_and_sanitation_10_1_1_B  >= 0 ) && (data.hygiene_and_sanitation_10_1_1_B  < 1)) || ((data.hygiene_and_sanitation_10_1_1_B  > 1 ) && (data.hygiene_and_sanitation_10_1_1_B  < 2)) || ((data.hygiene_and_sanitation_10_1_1_B  > 2 ) && (data.hygiene_and_sanitation_10_1_1_B  < 3)) ){ $scope.hygiene_and_sanitation_10_1_1_B_cm = data.hygiene_and_sanitation_10_1_1_B; $scope.hygiene_and_sanitation_10_1_1_B = false; $scope.hygiene_and_sanitation_10_1_1_B_b = false; $scope.hygiene_and_sanitation_10_1_1_B_c = false; $scope.hygiene_and_sanitation_10_1_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_B = ''; $scope.hygiene_and_sanitation_10_1_1_B_cm = ''; $scope.hygiene_and_sanitation_10_1_1_B = false; $scope.hygiene_and_sanitation_10_1_1_B_b = false; $scope.hygiene_and_sanitation_10_1_1_B_c = false;}
				if(data.hygiene_and_sanitation_10_1_1_C == 0){ $scope.hygiene_and_sanitation_10_1_1_C = data.hygiene_and_sanitation_10_1_1_C; $scope.hygiene_and_sanitation_10_1_1_C = true; $scope.hygiene_and_sanitation_10_1_1_C_b = false; $scope.hygiene_and_sanitation_10_1_1_C_c = false; $scope.hygiene_and_sanitation_10_1_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_C  == 1){ $scope.hygiene_and_sanitation_10_1_1_C = data.hygiene_and_sanitation_10_1_1_C; $scope.hygiene_and_sanitation_10_1_1_C = false; $scope.hygiene_and_sanitation_10_1_1_C_b = true; $scope.hygiene_and_sanitation_10_1_1_C_c = false; $scope.hygiene_and_sanitation_10_1_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_C  == 2){ $scope.hygiene_and_sanitation_10_1_1_C = data.hygiene_and_sanitation_10_1_1_C; $scope.hygiene_and_sanitation_10_1_1_C = false; $scope.hygiene_and_sanitation_10_1_1_C_b = false; $scope.hygiene_and_sanitation_10_1_1_C_c = true; $scope.hygiene_and_sanitation_10_1_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_C  > 0 ) && (data.hygiene_and_sanitation_10_1_1_C  < 1)) || ((data.hygiene_and_sanitation_10_1_1_C  > 1 ) && (data.hygiene_and_sanitation_10_1_1_C  < 2)) )
				{ $scope.hygiene_and_sanitation_10_1_1_C_cm = data.hygiene_and_sanitation_10_1_1_C; $scope.hygiene_and_sanitation_10_1_1_C = false; $scope.hygiene_and_sanitation_10_1_1_C_b = false;  $scope.hygiene_and_sanitation_10_1_1_C_c = false; $scope.hygiene_and_sanitation_10_1_1_C = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_C = ''; $scope.hygiene_and_sanitation_10_1_1_C_cm = ''; $scope.hygiene_and_sanitation_10_1_1_C = false; $scope.hygiene_and_sanitation_10_1_1_C_b = false; $scope.hygiene_and_sanitation_10_1_1_C_c = false; }
				if(data.hygiene_and_sanitation_10_1_1_D_a == 1){ $scope.hygiene_and_sanitation_10_1_1_D_a = data.hygiene_and_sanitation_10_1_1_D_a; $scope.hygiene_and_sanitation_10_1_1_D_a= true; $scope.hygiene_and_sanitation_10_1_1_D_a_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_a > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_a < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_a_cm = data.hygiene_and_sanitation_10_1_1_D_a; $scope.hygiene_and_sanitation_10_1_1_D_a= false; $scope.hygiene_and_sanitation_10_1_1_D_a= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_a= ''; $scope.hygiene_and_sanitation_10_1_1_D_a_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_a= false; }
				if(data.hygiene_and_sanitation_10_1_1_D_b == 1){ $scope.hygiene_and_sanitation_10_1_1_D_b = data.hygiene_and_sanitation_10_1_1_D_b; $scope.hygiene_and_sanitation_10_1_1_D_b= true; $scope.hygiene_and_sanitation_10_1_1_D_b_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_b > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_b < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_b_cm = data.hygiene_and_sanitation_10_1_1_D_b; $scope.hygiene_and_sanitation_10_1_1_D_b= false; $scope.hygiene_and_sanitation_10_1_1_D_b= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_b= ''; $scope.hygiene_and_sanitation_10_1_1_D_b_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_b= false; }
				if(data.hygiene_and_sanitation_10_1_1_D_c == 1){ $scope.hygiene_and_sanitation_10_1_1_D_c = data.hygiene_and_sanitation_10_1_1_D_c; $scope.hygiene_and_sanitation_10_1_1_D_c= true; $scope.hygiene_and_sanitation_10_1_1_D_c_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_c > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_c < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_c_cm = data.hygiene_and_sanitation_10_1_1_D_c; $scope.hygiene_and_sanitation_10_1_1_D_c= false; $scope.hygiene_and_sanitation_10_1_1_D_c= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_c= ''; $scope.hygiene_and_sanitation_10_1_1_D_c_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_c= false; }
				if(data.hygiene_and_sanitation_10_1_1_D_d == 1){ $scope.hygiene_and_sanitation_10_1_1_D_d = data.hygiene_and_sanitation_10_1_1_D_d; $scope.hygiene_and_sanitation_10_1_1_D_d= true; $scope.hygiene_and_sanitation_10_1_1_D_d_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_d > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_d < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_d_cm = data.hygiene_and_sanitation_10_1_1_D_d; $scope.hygiene_and_sanitation_10_1_1_D_d= false; $scope.hygiene_and_sanitation_10_1_1_D_d= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_d= ''; $scope.hygiene_and_sanitation_10_1_1_D_d_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_d= false; }
				if(data.hygiene_and_sanitation_10_1_1_D_e == 1){ $scope.hygiene_and_sanitation_10_1_1_D_e = data.hygiene_and_sanitation_10_1_1_D_e; $scope.hygiene_and_sanitation_10_1_1_D_e= true; $scope.hygiene_and_sanitation_10_1_1_D_e_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_e > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_e < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_e_cm = data.hygiene_and_sanitation_10_1_1_D_e; $scope.hygiene_and_sanitation_10_1_1_D_e= false; $scope.hygiene_and_sanitation_10_1_1_D_e= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_e= ''; $scope.hygiene_and_sanitation_10_1_1_D_e_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_e= false; }
				if(data.hygiene_and_sanitation_10_1_1_D_f == 1){ $scope.hygiene_and_sanitation_10_1_1_D_f = data.hygiene_and_sanitation_10_1_1_D_f; $scope.hygiene_and_sanitation_10_1_1_D_f= true; $scope.hygiene_and_sanitation_10_1_1_D_f_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_D_f > 0 ) && (data.hygiene_and_sanitation_10_1_1_D_f < 1)){ $scope.hygiene_and_sanitation_10_1_1_D_f_cm = data.hygiene_and_sanitation_10_1_1_D_f; $scope.hygiene_and_sanitation_10_1_1_D_f= false; $scope.hygiene_and_sanitation_10_1_1_D_f= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_D_f= ''; $scope.hygiene_and_sanitation_10_1_1_D_f_cm = ''; $scope.hygiene_and_sanitation_10_1_1_D_f= false; }
				if(data.hygiene_and_sanitation_10_1_1_E == 1){ $scope.hygiene_and_sanitation_10_1_1_E = data.hygiene_and_sanitation_10_1_1_E; $scope.hygiene_and_sanitation_10_1_1_E = true; $scope.hygiene_and_sanitation_10_1_1_E_b = false; $scope.hygiene_and_sanitation_10_1_1_E_c = false; $scope.hygiene_and_sanitation_10_1_1_E_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_E  == 2){ $scope.hygiene_and_sanitation_10_1_1_E = data.hygiene_and_sanitation_10_1_1_E; $scope.hygiene_and_sanitation_10_1_1_E = false; $scope.hygiene_and_sanitation_10_1_1_E_b = true; $scope.hygiene_and_sanitation_10_1_1_E_c = false; $scope.hygiene_and_sanitation_10_1_1_E_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_E  == 3){ 
				$scope.hygiene_and_sanitation_10_1_1_E = data.hygiene_and_sanitation_10_1_1_E; $scope.hygiene_and_sanitation_10_1_1_E = false; $scope.hygiene_and_sanitation_10_1_1_E_b = false; $scope.hygiene_and_sanitation_10_1_1_E_c = true; $scope.hygiene_and_sanitation_10_1_1_E_cm = ''; } else if( ((data.hygiene_and_sanitation_10_1_1_E  >= 0 ) && (data.hygiene_and_sanitation_10_1_1_E  < 1)) || ((data.hygiene_and_sanitation_10_1_1_E  > 1 ) && (data.hygiene_and_sanitation_10_1_1_E  < 2)) || ((data.hygiene_and_sanitation_10_1_1_E  > 2 ) && (data.hygiene_and_sanitation_10_1_1_E  < 3)) ){ $scope.hygiene_and_sanitation_10_1_1_E_cm = data.hygiene_and_sanitation_10_1_1_E; $scope.hygiene_and_sanitation_10_1_1_E = false; $scope.hygiene_and_sanitation_10_1_1_E_b = false; $scope.hygiene_and_sanitation_10_1_1_E_c = false; $scope.hygiene_and_sanitation_10_1_1_E = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_E = ''; $scope.hygiene_and_sanitation_10_1_1_E_cm = ''; $scope.hygiene_and_sanitation_10_1_1_E = false; $scope.hygiene_and_sanitation_10_1_1_E_b = false; $scope.hygiene_and_sanitation_10_1_1_E_c = false;}
				if(data.hygiene_and_sanitation_10_1_1_F == 1){ $scope.hygiene_and_sanitation_10_1_1_F = data.hygiene_and_sanitation_10_1_1_F; $scope.hygiene_and_sanitation_10_1_1_F = true; $scope.hygiene_and_sanitation_10_1_1_F_b = false; $scope.hygiene_and_sanitation_10_1_1_F_c = false; $scope.hygiene_and_sanitation_10_1_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_F  == 2){ $scope.hygiene_and_sanitation_10_1_1_F = data.hygiene_and_sanitation_10_1_1_F; $scope.hygiene_and_sanitation_10_1_1_F = false; $scope.hygiene_and_sanitation_10_1_1_F_b = true; $scope.hygiene_and_sanitation_10_1_1_F_c = false; $scope.hygiene_and_sanitation_10_1_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_F  == 3){ 
				$scope.hygiene_and_sanitation_10_1_1_F = data.hygiene_and_sanitation_10_1_1_F; $scope.hygiene_and_sanitation_10_1_1_F = false; $scope.hygiene_and_sanitation_10_1_1_F_b = false; $scope.hygiene_and_sanitation_10_1_1_F_c = true; $scope.hygiene_and_sanitation_10_1_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_10_1_1_F  >= 0 ) && (data.hygiene_and_sanitation_10_1_1_F  < 1)) || ((data.hygiene_and_sanitation_10_1_1_F  > 1 ) && (data.hygiene_and_sanitation_10_1_1_F  < 2)) || ((data.hygiene_and_sanitation_10_1_1_F  > 2 ) && (data.hygiene_and_sanitation_10_1_1_F  < 3)) ){ $scope.hygiene_and_sanitation_10_1_1_F_cm = data.hygiene_and_sanitation_10_1_1_F; $scope.hygiene_and_sanitation_10_1_1_F = false; $scope.hygiene_and_sanitation_10_1_1_F_b = false; $scope.hygiene_and_sanitation_10_1_1_F_c = false; $scope.hygiene_and_sanitation_10_1_1_F = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_F = ''; $scope.hygiene_and_sanitation_10_1_1_F_cm = ''; $scope.hygiene_and_sanitation_10_1_1_F = false; $scope.hygiene_and_sanitation_10_1_1_F_b = false; $scope.hygiene_and_sanitation_10_1_1_F_c = false;}
				if(data.hygiene_and_sanitation_10_1_1_G == 0){ $scope.hygiene_and_sanitation_10_1_1_G = data.hygiene_and_sanitation_10_1_1_G; $scope.hygiene_and_sanitation_10_1_1_G = true; $scope.hygiene_and_sanitation_10_1_1_G_b = false; $scope.hygiene_and_sanitation_10_1_1_G_c = false; $scope.hygiene_and_sanitation_10_1_1_G_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_G  == 1){ $scope.hygiene_and_sanitation_10_1_1_G = data.hygiene_and_sanitation_10_1_1_G; $scope.hygiene_and_sanitation_10_1_1_G = false; $scope.hygiene_and_sanitation_10_1_1_G_b = true; $scope.hygiene_and_sanitation_10_1_1_G_c = false; $scope.hygiene_and_sanitation_10_1_1_G_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_G  == ){ $scope.hygiene_and_sanitation_10_1_1_G = data.hygiene_and_sanitation_10_1_1_G; $scope.hygiene_and_sanitation_10_1_1_G = false; $scope.hygiene_and_sanitation_10_1_1_G_b = false; $scope.hygiene_and_sanitation_10_1_1_G_c = true; $scope.hygiene_and_sanitation_10_1_1_G_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_G  > 0 ) && (data.hygiene_and_sanitation_10_1_1_G  < 1)) || ((data.hygiene_and_sanitation_10_1_1_G  > 1 ) && (data.hygiene_and_sanitation_10_1_1_G  < )) )
				{ $scope.hygiene_and_sanitation_10_1_1_G_cm = data.hygiene_and_sanitation_10_1_1_G; $scope.hygiene_and_sanitation_10_1_1_G = false; $scope.hygiene_and_sanitation_10_1_1_G_b = false;  $scope.hygiene_and_sanitation_10_1_1_G_c = false; $scope.hygiene_and_sanitation_10_1_1_G = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_G = ''; $scope.hygiene_and_sanitation_10_1_1_G_cm = ''; $scope.hygiene_and_sanitation_10_1_1_G = false; $scope.hygiene_and_sanitation_10_1_1_G_b = false; $scope.hygiene_and_sanitation_10_1_1_G_c = false; }
				if(data.hygiene_and_sanitation_10_1_1_H == 0){ $scope.hygiene_and_sanitation_10_1_1_H = data.hygiene_and_sanitation_10_1_1_H; $scope.hygiene_and_sanitation_10_1_1_H = true; $scope.hygiene_and_sanitation_10_1_1_H_b = false; $scope.hygiene_and_sanitation_10_1_1_H_c = false; $scope.hygiene_and_sanitation_10_1_1_H_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_H  == 1){ $scope.hygiene_and_sanitation_10_1_1_H = data.hygiene_and_sanitation_10_1_1_H; $scope.hygiene_and_sanitation_10_1_1_H = false; $scope.hygiene_and_sanitation_10_1_1_H_b = true; $scope.hygiene_and_sanitation_10_1_1_H_c = false; $scope.hygiene_and_sanitation_10_1_1_H_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_H  == ){ $scope.hygiene_and_sanitation_10_1_1_H = data.hygiene_and_sanitation_10_1_1_H; $scope.hygiene_and_sanitation_10_1_1_H = false; $scope.hygiene_and_sanitation_10_1_1_H_b = false; $scope.hygiene_and_sanitation_10_1_1_H_c = true; $scope.hygiene_and_sanitation_10_1_1_H_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_H  > 0 ) && (data.hygiene_and_sanitation_10_1_1_H  < 1)) || ((data.hygiene_and_sanitation_10_1_1_H  > 1 ) && (data.hygiene_and_sanitation_10_1_1_H  < )) )
				{ $scope.hygiene_and_sanitation_10_1_1_H_cm = data.hygiene_and_sanitation_10_1_1_H; $scope.hygiene_and_sanitation_10_1_1_H = false; $scope.hygiene_and_sanitation_10_1_1_H_b = false;  $scope.hygiene_and_sanitation_10_1_1_H_c = false; $scope.hygiene_and_sanitation_10_1_1_H = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_H = ''; $scope.hygiene_and_sanitation_10_1_1_H_cm = ''; $scope.hygiene_and_sanitation_10_1_1_H = false; $scope.hygiene_and_sanitation_10_1_1_H_b = false; $scope.hygiene_and_sanitation_10_1_1_H_c = false; }
				if(data.hygiene_and_sanitation_10_1_1_I_a == 1){ $scope.hygiene_and_sanitation_10_1_1_I_a = data.hygiene_and_sanitation_10_1_1_I_a; $scope.hygiene_and_sanitation_10_1_1_I_a= true; $scope.hygiene_and_sanitation_10_1_1_I_a_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_I_a > 0 ) && (data.hygiene_and_sanitation_10_1_1_I_a < 1)){ $scope.hygiene_and_sanitation_10_1_1_I_a_cm = data.hygiene_and_sanitation_10_1_1_I_a; $scope.hygiene_and_sanitation_10_1_1_I_a= false; $scope.hygiene_and_sanitation_10_1_1_I_a= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_I_a= ''; $scope.hygiene_and_sanitation_10_1_1_I_a_cm = ''; $scope.hygiene_and_sanitation_10_1_1_I_a= false; }
				if(data.hygiene_and_sanitation_10_1_1_I_b == 1){ $scope.hygiene_and_sanitation_10_1_1_I_b = data.hygiene_and_sanitation_10_1_1_I_b; $scope.hygiene_and_sanitation_10_1_1_I_b= true; $scope.hygiene_and_sanitation_10_1_1_I_b_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_I_b > 0 ) && (data.hygiene_and_sanitation_10_1_1_I_b < 1)){ $scope.hygiene_and_sanitation_10_1_1_I_b_cm = data.hygiene_and_sanitation_10_1_1_I_b; $scope.hygiene_and_sanitation_10_1_1_I_b= false; $scope.hygiene_and_sanitation_10_1_1_I_b= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_I_b= ''; $scope.hygiene_and_sanitation_10_1_1_I_b_cm = ''; $scope.hygiene_and_sanitation_10_1_1_I_b= false; }
				if(data.hygiene_and_sanitation_10_1_1_I_c == 1){ $scope.hygiene_and_sanitation_10_1_1_I_c = data.hygiene_and_sanitation_10_1_1_I_c; $scope.hygiene_and_sanitation_10_1_1_I_c= true; $scope.hygiene_and_sanitation_10_1_1_I_c_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_I_c > 0 ) && (data.hygiene_and_sanitation_10_1_1_I_c < 1)){ $scope.hygiene_and_sanitation_10_1_1_I_c_cm = data.hygiene_and_sanitation_10_1_1_I_c; $scope.hygiene_and_sanitation_10_1_1_I_c= false; $scope.hygiene_and_sanitation_10_1_1_I_c= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_I_c= ''; $scope.hygiene_and_sanitation_10_1_1_I_c_cm = ''; $scope.hygiene_and_sanitation_10_1_1_I_c= false; }
				if(data.hygiene_and_sanitation_10_1_1_I_d == 1){ $scope.hygiene_and_sanitation_10_1_1_I_d = data.hygiene_and_sanitation_10_1_1_I_d; $scope.hygiene_and_sanitation_10_1_1_I_d= true; $scope.hygiene_and_sanitation_10_1_1_I_d_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_I_d > 0 ) && (data.hygiene_and_sanitation_10_1_1_I_d < 1)){ $scope.hygiene_and_sanitation_10_1_1_I_d_cm = data.hygiene_and_sanitation_10_1_1_I_d; $scope.hygiene_and_sanitation_10_1_1_I_d= false; $scope.hygiene_and_sanitation_10_1_1_I_d= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_I_d= ''; $scope.hygiene_and_sanitation_10_1_1_I_d_cm = ''; $scope.hygiene_and_sanitation_10_1_1_I_d= false; }
				if(data.hygiene_and_sanitation_10_1_1_I_e == 1){ $scope.hygiene_and_sanitation_10_1_1_I_e = data.hygiene_and_sanitation_10_1_1_I_e; $scope.hygiene_and_sanitation_10_1_1_I_e= true; $scope.hygiene_and_sanitation_10_1_1_I_e_cm = ''; } else if((data.hygiene_and_sanitation_10_1_1_I_e > 0 ) && (data.hygiene_and_sanitation_10_1_1_I_e < 1)){ $scope.hygiene_and_sanitation_10_1_1_I_e_cm = data.hygiene_and_sanitation_10_1_1_I_e; $scope.hygiene_and_sanitation_10_1_1_I_e= false; $scope.hygiene_and_sanitation_10_1_1_I_e= ''; }else{ $scope.hygiene_and_sanitation_10_1_1_I_e= ''; $scope.hygiene_and_sanitation_10_1_1_I_e_cm = ''; $scope.hygiene_and_sanitation_10_1_1_I_e= false; }
				if(data.hygiene_and_sanitation_10_1_1_J == 0){ $scope.hygiene_and_sanitation_10_1_1_J = data.hygiene_and_sanitation_10_1_1_J; $scope.hygiene_and_sanitation_10_1_1_J = true; $scope.hygiene_and_sanitation_10_1_1_J_b = false; $scope.hygiene_and_sanitation_10_1_1_J_c = false; $scope.hygiene_and_sanitation_10_1_1_J_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_J  == 1){ $scope.hygiene_and_sanitation_10_1_1_J = data.hygiene_and_sanitation_10_1_1_J; $scope.hygiene_and_sanitation_10_1_1_J = false; $scope.hygiene_and_sanitation_10_1_1_J_b = true; $scope.hygiene_and_sanitation_10_1_1_J_c = false; $scope.hygiene_and_sanitation_10_1_1_J_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_J  == 2){ $scope.hygiene_and_sanitation_10_1_1_J = data.hygiene_and_sanitation_10_1_1_J; $scope.hygiene_and_sanitation_10_1_1_J = false; $scope.hygiene_and_sanitation_10_1_1_J_b = false; $scope.hygiene_and_sanitation_10_1_1_J_c = true; $scope.hygiene_and_sanitation_10_1_1_J_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_J  > 0 ) && (data.hygiene_and_sanitation_10_1_1_J  < 1)) || ((data.hygiene_and_sanitation_10_1_1_J  > 1 ) && (data.hygiene_and_sanitation_10_1_1_J  < 2)) )
				{ $scope.hygiene_and_sanitation_10_1_1_J_cm = data.hygiene_and_sanitation_10_1_1_J; $scope.hygiene_and_sanitation_10_1_1_J = false; $scope.hygiene_and_sanitation_10_1_1_J_b = false;  $scope.hygiene_and_sanitation_10_1_1_J_c = false; $scope.hygiene_and_sanitation_10_1_1_J = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_J = ''; $scope.hygiene_and_sanitation_10_1_1_J_cm = ''; $scope.hygiene_and_sanitation_10_1_1_J = false; $scope.hygiene_and_sanitation_10_1_1_J_b = false; $scope.hygiene_and_sanitation_10_1_1_J_c = false; }
				if(data.hygiene_and_sanitation_10_1_1_K == 0){ $scope.hygiene_and_sanitation_10_1_1_K = data.hygiene_and_sanitation_10_1_1_K; $scope.hygiene_and_sanitation_10_1_1_K = true; $scope.hygiene_and_sanitation_10_1_1_K_b = false; $scope.hygiene_and_sanitation_10_1_1_K_c = false; $scope.hygiene_and_sanitation_10_1_1_K_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_K  == 1){ $scope.hygiene_and_sanitation_10_1_1_K = data.hygiene_and_sanitation_10_1_1_K; $scope.hygiene_and_sanitation_10_1_1_K = false; $scope.hygiene_and_sanitation_10_1_1_K_b = true; $scope.hygiene_and_sanitation_10_1_1_K_c = false; $scope.hygiene_and_sanitation_10_1_1_K_cm = ''; } else if(data.hygiene_and_sanitation_10_1_1_K  == 2){ $scope.hygiene_and_sanitation_10_1_1_K = data.hygiene_and_sanitation_10_1_1_K; $scope.hygiene_and_sanitation_10_1_1_K = false; $scope.hygiene_and_sanitation_10_1_1_K_b = false; $scope.hygiene_and_sanitation_10_1_1_K_c = true; $scope.hygiene_and_sanitation_10_1_1_K_cm = ''; }else if( ((data.hygiene_and_sanitation_10_1_1_K  > 0 ) && (data.hygiene_and_sanitation_10_1_1_K  < 1)) || ((data.hygiene_and_sanitation_10_1_1_K  > 1 ) && (data.hygiene_and_sanitation_10_1_1_K  < 2)) )
				{ $scope.hygiene_and_sanitation_10_1_1_K_cm = data.hygiene_and_sanitation_10_1_1_K; $scope.hygiene_and_sanitation_10_1_1_K = false; $scope.hygiene_and_sanitation_10_1_1_K_b = false;  $scope.hygiene_and_sanitation_10_1_1_K_c = false; $scope.hygiene_and_sanitation_10_1_1_K = ''; }else{ $scope.hygiene_and_sanitation_10_1_1_K = ''; $scope.hygiene_and_sanitation_10_1_1_K_cm = ''; $scope.hygiene_and_sanitation_10_1_1_K = false; $scope.hygiene_and_sanitation_10_1_1_K_b = false; $scope.hygiene_and_sanitation_10_1_1_K_c = false; }
				$scope.hygiene_and_sanitation_10_2_1_text = data.hygiene_and_sanitation_10_2_1_text;
				if(data.hygiene_and_sanitation_10_2_1_A  == 1){ $scope.hygiene_and_sanitation_10_2_1_A  = data.hygiene_and_sanitation_10_2_1_A ; $scope.hygiene_and_sanitation_10_2_1_A = true; $scope.hygiene_and_sanitation_10_2_1_A_b = false; $scope.hygiene_and_sanitation_10_2_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_A  == 2){ $scope.hygiene_and_sanitation_10_2_1_A  = data.hygiene_and_sanitation_10_2_1_A ; $scope.hygiene_and_sanitation_10_2_1_A = false; $scope.hygiene_and_sanitation_10_2_1_A_b = true; $scope.hygiene_and_sanitation_10_2_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_A  > 0 ) && (data.hygiene_and_sanitation_10_2_1_A  < 1)) || ((data.hygiene_and_sanitation_10_2_1_A  > 1 ) && (data.hygiene_and_sanitation_10_2_1_A  < 2)))
				{ $scope.hygiene_and_sanitation_10_2_1_A_cm = data.hygiene_and_sanitation_10_2_1_A ; $scope.hygiene_and_sanitation_10_2_1_A = false; $scope.hygiene_and_sanitation_10_2_1_A_b = false; $scope.hygiene_and_sanitation_10_2_1_A  = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_A  = ''; $scope.hygiene_and_sanitation_10_2_1_A_cm = ''; $scope.hygiene_and_sanitation_10_2_1_A = false; $scope.hygiene_and_sanitation_10_2_1_A_b = false; }
				if(data.hygiene_and_sanitation_10_2_1_B == 0){ $scope.hygiene_and_sanitation_10_2_1_B = data.hygiene_and_sanitation_10_2_1_B; $scope.hygiene_and_sanitation_10_2_1_B = true; $scope.hygiene_and_sanitation_10_2_1_B_b = false; $scope.hygiene_and_sanitation_10_2_1_B_c = false; $scope.hygiene_and_sanitation_10_2_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_B  == 1){ $scope.hygiene_and_sanitation_10_2_1_B = data.hygiene_and_sanitation_10_2_1_B; $scope.hygiene_and_sanitation_10_2_1_B = false; $scope.hygiene_and_sanitation_10_2_1_B_b = true; $scope.hygiene_and_sanitation_10_2_1_B_c = false; $scope.hygiene_and_sanitation_10_2_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_B  == ){ $scope.hygiene_and_sanitation_10_2_1_B = data.hygiene_and_sanitation_10_2_1_B; $scope.hygiene_and_sanitation_10_2_1_B = false; $scope.hygiene_and_sanitation_10_2_1_B_b = false; $scope.hygiene_and_sanitation_10_2_1_B_c = true; $scope.hygiene_and_sanitation_10_2_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_B  > 0 ) && (data.hygiene_and_sanitation_10_2_1_B  < 1)) || ((data.hygiene_and_sanitation_10_2_1_B  > 1 ) && (data.hygiene_and_sanitation_10_2_1_B  < )) )
				{ $scope.hygiene_and_sanitation_10_2_1_B_cm = data.hygiene_and_sanitation_10_2_1_B; $scope.hygiene_and_sanitation_10_2_1_B = false; $scope.hygiene_and_sanitation_10_2_1_B_b = false;  $scope.hygiene_and_sanitation_10_2_1_B_c = false; $scope.hygiene_and_sanitation_10_2_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_B = ''; $scope.hygiene_and_sanitation_10_2_1_B_cm = ''; $scope.hygiene_and_sanitation_10_2_1_B = false; $scope.hygiene_and_sanitation_10_2_1_B_b = false; $scope.hygiene_and_sanitation_10_2_1_B_c = false; }
				if(data.hygiene_and_sanitation_10_2_1_C == 1){ $scope.hygiene_and_sanitation_10_2_1_C = data.hygiene_and_sanitation_10_2_1_C; $scope.hygiene_and_sanitation_10_2_1_C = true; $scope.hygiene_and_sanitation_10_2_1_C_b = false; $scope.hygiene_and_sanitation_10_2_1_C_c = false; $scope.hygiene_and_sanitation_10_2_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_C  == 2){ $scope.hygiene_and_sanitation_10_2_1_C = data.hygiene_and_sanitation_10_2_1_C; $scope.hygiene_and_sanitation_10_2_1_C = false; $scope.hygiene_and_sanitation_10_2_1_C_b = true; $scope.hygiene_and_sanitation_10_2_1_C_c = false; $scope.hygiene_and_sanitation_10_2_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_C  == 3){ 
				$scope.hygiene_and_sanitation_10_2_1_C = data.hygiene_and_sanitation_10_2_1_C; $scope.hygiene_and_sanitation_10_2_1_C = false; $scope.hygiene_and_sanitation_10_2_1_C_b = false; $scope.hygiene_and_sanitation_10_2_1_C_c = true; $scope.hygiene_and_sanitation_10_2_1_C_cm = ''; } else if( ((data.hygiene_and_sanitation_10_2_1_C  >= 0 ) && (data.hygiene_and_sanitation_10_2_1_C  < 1)) || ((data.hygiene_and_sanitation_10_2_1_C  > 1 ) && (data.hygiene_and_sanitation_10_2_1_C  < 2)) || ((data.hygiene_and_sanitation_10_2_1_C  > 2 ) && (data.hygiene_and_sanitation_10_2_1_C  < 3)) ){ $scope.hygiene_and_sanitation_10_2_1_C_cm = data.hygiene_and_sanitation_10_2_1_C; $scope.hygiene_and_sanitation_10_2_1_C = false; $scope.hygiene_and_sanitation_10_2_1_C_b = false; $scope.hygiene_and_sanitation_10_2_1_C_c = false; $scope.hygiene_and_sanitation_10_2_1_C = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_C = ''; $scope.hygiene_and_sanitation_10_2_1_C_cm = ''; $scope.hygiene_and_sanitation_10_2_1_C = false; $scope.hygiene_and_sanitation_10_2_1_C_b = false; $scope.hygiene_and_sanitation_10_2_1_C_c = false;}
				if(data.hygiene_and_sanitation_10_2_1_D == 0){ $scope.hygiene_and_sanitation_10_2_1_D = data.hygiene_and_sanitation_10_2_1_D; $scope.hygiene_and_sanitation_10_2_1_D = true; $scope.hygiene_and_sanitation_10_2_1_D_b = false; $scope.hygiene_and_sanitation_10_2_1_D_c = false; $scope.hygiene_and_sanitation_10_2_1_D_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_D  == 1){ $scope.hygiene_and_sanitation_10_2_1_D = data.hygiene_and_sanitation_10_2_1_D; $scope.hygiene_and_sanitation_10_2_1_D = false; $scope.hygiene_and_sanitation_10_2_1_D_b = true; $scope.hygiene_and_sanitation_10_2_1_D_c = false; $scope.hygiene_and_sanitation_10_2_1_D_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_D  == 2){ $scope.hygiene_and_sanitation_10_2_1_D = data.hygiene_and_sanitation_10_2_1_D; $scope.hygiene_and_sanitation_10_2_1_D = false; $scope.hygiene_and_sanitation_10_2_1_D_b = false; $scope.hygiene_and_sanitation_10_2_1_D_c = true; $scope.hygiene_and_sanitation_10_2_1_D_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_D  > 0 ) && (data.hygiene_and_sanitation_10_2_1_D  < 1)) || ((data.hygiene_and_sanitation_10_2_1_D  > 1 ) && (data.hygiene_and_sanitation_10_2_1_D  < 2)) )
				{ $scope.hygiene_and_sanitation_10_2_1_D_cm = data.hygiene_and_sanitation_10_2_1_D; $scope.hygiene_and_sanitation_10_2_1_D = false; $scope.hygiene_and_sanitation_10_2_1_D_b = false;  $scope.hygiene_and_sanitation_10_2_1_D_c = false; $scope.hygiene_and_sanitation_10_2_1_D = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_D = ''; $scope.hygiene_and_sanitation_10_2_1_D_cm = ''; $scope.hygiene_and_sanitation_10_2_1_D = false; $scope.hygiene_and_sanitation_10_2_1_D_b = false; $scope.hygiene_and_sanitation_10_2_1_D_c = false; }
				if(data.hygiene_and_sanitation_10_2_1_E_a == 2){ $scope.hygiene_and_sanitation_10_2_1_E_a = data.hygiene_and_sanitation_10_2_1_E_a; $scope.hygiene_and_sanitation_10_2_1_E_a= true; $scope.hygiene_and_sanitation_10_2_1_E_a_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_a > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_a < 2)){ $scope.hygiene_and_sanitation_10_2_1_E_a_cm = data.hygiene_and_sanitation_10_2_1_E_a; $scope.hygiene_and_sanitation_10_2_1_E_a= false; $scope.hygiene_and_sanitation_10_2_1_E_a= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_a= ''; $scope.hygiene_and_sanitation_10_2_1_E_a_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_a= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_b == 1){ $scope.hygiene_and_sanitation_10_2_1_E_b = data.hygiene_and_sanitation_10_2_1_E_b; $scope.hygiene_and_sanitation_10_2_1_E_b= true; $scope.hygiene_and_sanitation_10_2_1_E_b_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_b > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_b < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_b_cm = data.hygiene_and_sanitation_10_2_1_E_b; $scope.hygiene_and_sanitation_10_2_1_E_b= false; $scope.hygiene_and_sanitation_10_2_1_E_b= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_b= ''; $scope.hygiene_and_sanitation_10_2_1_E_b_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_b= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_c == 1){ $scope.hygiene_and_sanitation_10_2_1_E_c = data.hygiene_and_sanitation_10_2_1_E_c; $scope.hygiene_and_sanitation_10_2_1_E_c= true; $scope.hygiene_and_sanitation_10_2_1_E_c_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_c > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_c < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_c_cm = data.hygiene_and_sanitation_10_2_1_E_c; $scope.hygiene_and_sanitation_10_2_1_E_c= false; $scope.hygiene_and_sanitation_10_2_1_E_c= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_c= ''; $scope.hygiene_and_sanitation_10_2_1_E_c_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_c= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_d == 1){ $scope.hygiene_and_sanitation_10_2_1_E_d = data.hygiene_and_sanitation_10_2_1_E_d; $scope.hygiene_and_sanitation_10_2_1_E_d= true; $scope.hygiene_and_sanitation_10_2_1_E_d_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_d > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_d < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_d_cm = data.hygiene_and_sanitation_10_2_1_E_d; $scope.hygiene_and_sanitation_10_2_1_E_d= false; $scope.hygiene_and_sanitation_10_2_1_E_d= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_d= ''; $scope.hygiene_and_sanitation_10_2_1_E_d_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_d= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_e == 1){ $scope.hygiene_and_sanitation_10_2_1_E_e = data.hygiene_and_sanitation_10_2_1_E_e; $scope.hygiene_and_sanitation_10_2_1_E_e= true; $scope.hygiene_and_sanitation_10_2_1_E_e_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_e > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_e < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_e_cm = data.hygiene_and_sanitation_10_2_1_E_e; $scope.hygiene_and_sanitation_10_2_1_E_e= false; $scope.hygiene_and_sanitation_10_2_1_E_e= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_e= ''; $scope.hygiene_and_sanitation_10_2_1_E_e_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_e= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_f == 1){ $scope.hygiene_and_sanitation_10_2_1_E_f = data.hygiene_and_sanitation_10_2_1_E_f; $scope.hygiene_and_sanitation_10_2_1_E_f= true; $scope.hygiene_and_sanitation_10_2_1_E_f_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_f > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_f < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_f_cm = data.hygiene_and_sanitation_10_2_1_E_f; $scope.hygiene_and_sanitation_10_2_1_E_f= false; $scope.hygiene_and_sanitation_10_2_1_E_f= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_f= ''; $scope.hygiene_and_sanitation_10_2_1_E_f_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_f= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_g == 1){ $scope.hygiene_and_sanitation_10_2_1_E_g = data.hygiene_and_sanitation_10_2_1_E_g; $scope.hygiene_and_sanitation_10_2_1_E_g= true; $scope.hygiene_and_sanitation_10_2_1_E_g_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_g > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_g < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_g_cm = data.hygiene_and_sanitation_10_2_1_E_g; $scope.hygiene_and_sanitation_10_2_1_E_g= false; $scope.hygiene_and_sanitation_10_2_1_E_g= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_g= ''; $scope.hygiene_and_sanitation_10_2_1_E_g_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_g= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_h == 1){ $scope.hygiene_and_sanitation_10_2_1_E_h = data.hygiene_and_sanitation_10_2_1_E_h; $scope.hygiene_and_sanitation_10_2_1_E_h= true; $scope.hygiene_and_sanitation_10_2_1_E_h_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_h > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_h < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_h_cm = data.hygiene_and_sanitation_10_2_1_E_h; $scope.hygiene_and_sanitation_10_2_1_E_h= false; $scope.hygiene_and_sanitation_10_2_1_E_h= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_h= ''; $scope.hygiene_and_sanitation_10_2_1_E_h_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_h= false; }
				if(data.hygiene_and_sanitation_10_2_1_E_i == 1){ $scope.hygiene_and_sanitation_10_2_1_E_i = data.hygiene_and_sanitation_10_2_1_E_i; $scope.hygiene_and_sanitation_10_2_1_E_i= true; $scope.hygiene_and_sanitation_10_2_1_E_i_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_E_i > 0 ) && (data.hygiene_and_sanitation_10_2_1_E_i < 1)){ $scope.hygiene_and_sanitation_10_2_1_E_i_cm = data.hygiene_and_sanitation_10_2_1_E_i; $scope.hygiene_and_sanitation_10_2_1_E_i= false; $scope.hygiene_and_sanitation_10_2_1_E_i= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_E_i= ''; $scope.hygiene_and_sanitation_10_2_1_E_i_cm = ''; $scope.hygiene_and_sanitation_10_2_1_E_i= false; }
				if(data.hygiene_and_sanitation_10_2_1_F == 1){ $scope.hygiene_and_sanitation_10_2_1_F = data.hygiene_and_sanitation_10_2_1_F; $scope.hygiene_and_sanitation_10_2_1_F = true; $scope.hygiene_and_sanitation_10_2_1_F_b = false; $scope.hygiene_and_sanitation_10_2_1_F_c = false; $scope.hygiene_and_sanitation_10_2_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_F  == 2){ $scope.hygiene_and_sanitation_10_2_1_F = data.hygiene_and_sanitation_10_2_1_F; $scope.hygiene_and_sanitation_10_2_1_F = false; $scope.hygiene_and_sanitation_10_2_1_F_b = true; $scope.hygiene_and_sanitation_10_2_1_F_c = false; $scope.hygiene_and_sanitation_10_2_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_F  == 3){ 
				$scope.hygiene_and_sanitation_10_2_1_F = data.hygiene_and_sanitation_10_2_1_F; $scope.hygiene_and_sanitation_10_2_1_F = false; $scope.hygiene_and_sanitation_10_2_1_F_b = false; $scope.hygiene_and_sanitation_10_2_1_F_c = true; $scope.hygiene_and_sanitation_10_2_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_10_2_1_F  >= 0 ) && (data.hygiene_and_sanitation_10_2_1_F  < 1)) || ((data.hygiene_and_sanitation_10_2_1_F  > 1 ) && (data.hygiene_and_sanitation_10_2_1_F  < 2)) || ((data.hygiene_and_sanitation_10_2_1_F  > 2 ) && (data.hygiene_and_sanitation_10_2_1_F  < 3)) ){ $scope.hygiene_and_sanitation_10_2_1_F_cm = data.hygiene_and_sanitation_10_2_1_F; $scope.hygiene_and_sanitation_10_2_1_F = false; $scope.hygiene_and_sanitation_10_2_1_F_b = false; $scope.hygiene_and_sanitation_10_2_1_F_c = false; $scope.hygiene_and_sanitation_10_2_1_F = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_F = ''; $scope.hygiene_and_sanitation_10_2_1_F_cm = ''; $scope.hygiene_and_sanitation_10_2_1_F = false; $scope.hygiene_and_sanitation_10_2_1_F_b = false; $scope.hygiene_and_sanitation_10_2_1_F_c = false;}
				if(data.hygiene_and_sanitation_10_2_1_G == 0){ $scope.hygiene_and_sanitation_10_2_1_G = data.hygiene_and_sanitation_10_2_1_G; $scope.hygiene_and_sanitation_10_2_1_G = true; $scope.hygiene_and_sanitation_10_2_1_G_b = false; $scope.hygiene_and_sanitation_10_2_1_G_c = false; $scope.hygiene_and_sanitation_10_2_1_G_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_G  == 1){ $scope.hygiene_and_sanitation_10_2_1_G = data.hygiene_and_sanitation_10_2_1_G; $scope.hygiene_and_sanitation_10_2_1_G = false; $scope.hygiene_and_sanitation_10_2_1_G_b = true; $scope.hygiene_and_sanitation_10_2_1_G_c = false; $scope.hygiene_and_sanitation_10_2_1_G_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_G  == ){ $scope.hygiene_and_sanitation_10_2_1_G = data.hygiene_and_sanitation_10_2_1_G; $scope.hygiene_and_sanitation_10_2_1_G = false; $scope.hygiene_and_sanitation_10_2_1_G_b = false; $scope.hygiene_and_sanitation_10_2_1_G_c = true; $scope.hygiene_and_sanitation_10_2_1_G_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_G  > 0 ) && (data.hygiene_and_sanitation_10_2_1_G  < 1)) || ((data.hygiene_and_sanitation_10_2_1_G  > 1 ) && (data.hygiene_and_sanitation_10_2_1_G  < )) )
				{ $scope.hygiene_and_sanitation_10_2_1_G_cm = data.hygiene_and_sanitation_10_2_1_G; $scope.hygiene_and_sanitation_10_2_1_G = false; $scope.hygiene_and_sanitation_10_2_1_G_b = false;  $scope.hygiene_and_sanitation_10_2_1_G_c = false; $scope.hygiene_and_sanitation_10_2_1_G = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_G = ''; $scope.hygiene_and_sanitation_10_2_1_G_cm = ''; $scope.hygiene_and_sanitation_10_2_1_G = false; $scope.hygiene_and_sanitation_10_2_1_G_b = false; $scope.hygiene_and_sanitation_10_2_1_G_c = false; }
				if(data.hygiene_and_sanitation_10_2_1_H_a == 1){ $scope.hygiene_and_sanitation_10_2_1_H_a = data.hygiene_and_sanitation_10_2_1_H_a; $scope.hygiene_and_sanitation_10_2_1_H_a= true; $scope.hygiene_and_sanitation_10_2_1_H_a_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_H_a > 0 ) && (data.hygiene_and_sanitation_10_2_1_H_a < 1)){ $scope.hygiene_and_sanitation_10_2_1_H_a_cm = data.hygiene_and_sanitation_10_2_1_H_a; $scope.hygiene_and_sanitation_10_2_1_H_a= false; $scope.hygiene_and_sanitation_10_2_1_H_a= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_H_a= ''; $scope.hygiene_and_sanitation_10_2_1_H_a_cm = ''; $scope.hygiene_and_sanitation_10_2_1_H_a= false; }
				if(data.hygiene_and_sanitation_10_2_1_H_b == 1){ $scope.hygiene_and_sanitation_10_2_1_H_b = data.hygiene_and_sanitation_10_2_1_H_b; $scope.hygiene_and_sanitation_10_2_1_H_b= true; $scope.hygiene_and_sanitation_10_2_1_H_b_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_H_b > 0 ) && (data.hygiene_and_sanitation_10_2_1_H_b < 1)){ $scope.hygiene_and_sanitation_10_2_1_H_b_cm = data.hygiene_and_sanitation_10_2_1_H_b; $scope.hygiene_and_sanitation_10_2_1_H_b= false; $scope.hygiene_and_sanitation_10_2_1_H_b= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_H_b= ''; $scope.hygiene_and_sanitation_10_2_1_H_b_cm = ''; $scope.hygiene_and_sanitation_10_2_1_H_b= false; }
				if(data.hygiene_and_sanitation_10_2_1_H_c == 1){ $scope.hygiene_and_sanitation_10_2_1_H_c = data.hygiene_and_sanitation_10_2_1_H_c; $scope.hygiene_and_sanitation_10_2_1_H_c= true; $scope.hygiene_and_sanitation_10_2_1_H_c_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_H_c > 0 ) && (data.hygiene_and_sanitation_10_2_1_H_c < 1)){ $scope.hygiene_and_sanitation_10_2_1_H_c_cm = data.hygiene_and_sanitation_10_2_1_H_c; $scope.hygiene_and_sanitation_10_2_1_H_c= false; $scope.hygiene_and_sanitation_10_2_1_H_c= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_H_c= ''; $scope.hygiene_and_sanitation_10_2_1_H_c_cm = ''; $scope.hygiene_and_sanitation_10_2_1_H_c= false; }
				if(data.hygiene_and_sanitation_10_2_1_H_d == 1){ $scope.hygiene_and_sanitation_10_2_1_H_d = data.hygiene_and_sanitation_10_2_1_H_d; $scope.hygiene_and_sanitation_10_2_1_H_d= true; $scope.hygiene_and_sanitation_10_2_1_H_d_cm = ''; } else if((data.hygiene_and_sanitation_10_2_1_H_d > 0 ) && (data.hygiene_and_sanitation_10_2_1_H_d < 1)){ $scope.hygiene_and_sanitation_10_2_1_H_d_cm = data.hygiene_and_sanitation_10_2_1_H_d; $scope.hygiene_and_sanitation_10_2_1_H_d= false; $scope.hygiene_and_sanitation_10_2_1_H_d= ''; }else{ $scope.hygiene_and_sanitation_10_2_1_H_d= ''; $scope.hygiene_and_sanitation_10_2_1_H_d_cm = ''; $scope.hygiene_and_sanitation_10_2_1_H_d= false; }
				if(data.hygiene_and_sanitation_10_2_1_I == 0){ $scope.hygiene_and_sanitation_10_2_1_I = data.hygiene_and_sanitation_10_2_1_I; $scope.hygiene_and_sanitation_10_2_1_I = true; $scope.hygiene_and_sanitation_10_2_1_I_b = false; $scope.hygiene_and_sanitation_10_2_1_I_c = false; $scope.hygiene_and_sanitation_10_2_1_I_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_I  == 1){ $scope.hygiene_and_sanitation_10_2_1_I = data.hygiene_and_sanitation_10_2_1_I; $scope.hygiene_and_sanitation_10_2_1_I = false; $scope.hygiene_and_sanitation_10_2_1_I_b = true; $scope.hygiene_and_sanitation_10_2_1_I_c = false; $scope.hygiene_and_sanitation_10_2_1_I_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_I  == 2){ $scope.hygiene_and_sanitation_10_2_1_I = data.hygiene_and_sanitation_10_2_1_I; $scope.hygiene_and_sanitation_10_2_1_I = false; $scope.hygiene_and_sanitation_10_2_1_I_b = false; $scope.hygiene_and_sanitation_10_2_1_I_c = true; $scope.hygiene_and_sanitation_10_2_1_I_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_I  > 0 ) && (data.hygiene_and_sanitation_10_2_1_I  < 1)) || ((data.hygiene_and_sanitation_10_2_1_I  > 1 ) && (data.hygiene_and_sanitation_10_2_1_I  < 2)) )
				{ $scope.hygiene_and_sanitation_10_2_1_I_cm = data.hygiene_and_sanitation_10_2_1_I; $scope.hygiene_and_sanitation_10_2_1_I = false; $scope.hygiene_and_sanitation_10_2_1_I_b = false;  $scope.hygiene_and_sanitation_10_2_1_I_c = false; $scope.hygiene_and_sanitation_10_2_1_I = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_I = ''; $scope.hygiene_and_sanitation_10_2_1_I_cm = ''; $scope.hygiene_and_sanitation_10_2_1_I = false; $scope.hygiene_and_sanitation_10_2_1_I_b = false; $scope.hygiene_and_sanitation_10_2_1_I_c = false; }
				if(data.hygiene_and_sanitation_10_2_1_J == 0){ $scope.hygiene_and_sanitation_10_2_1_J = data.hygiene_and_sanitation_10_2_1_J; $scope.hygiene_and_sanitation_10_2_1_J = true; $scope.hygiene_and_sanitation_10_2_1_J_b = false; $scope.hygiene_and_sanitation_10_2_1_J_c = false; $scope.hygiene_and_sanitation_10_2_1_J_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_J  == 1){ $scope.hygiene_and_sanitation_10_2_1_J = data.hygiene_and_sanitation_10_2_1_J; $scope.hygiene_and_sanitation_10_2_1_J = false; $scope.hygiene_and_sanitation_10_2_1_J_b = true; $scope.hygiene_and_sanitation_10_2_1_J_c = false; $scope.hygiene_and_sanitation_10_2_1_J_cm = ''; } else if(data.hygiene_and_sanitation_10_2_1_J  == 2){ $scope.hygiene_and_sanitation_10_2_1_J = data.hygiene_and_sanitation_10_2_1_J; $scope.hygiene_and_sanitation_10_2_1_J = false; $scope.hygiene_and_sanitation_10_2_1_J_b = false; $scope.hygiene_and_sanitation_10_2_1_J_c = true; $scope.hygiene_and_sanitation_10_2_1_J_cm = ''; }else if( ((data.hygiene_and_sanitation_10_2_1_J  > 0 ) && (data.hygiene_and_sanitation_10_2_1_J  < 1)) || ((data.hygiene_and_sanitation_10_2_1_J  > 1 ) && (data.hygiene_and_sanitation_10_2_1_J  < 2)) )
				{ $scope.hygiene_and_sanitation_10_2_1_J_cm = data.hygiene_and_sanitation_10_2_1_J; $scope.hygiene_and_sanitation_10_2_1_J = false; $scope.hygiene_and_sanitation_10_2_1_J_b = false;  $scope.hygiene_and_sanitation_10_2_1_J_c = false; $scope.hygiene_and_sanitation_10_2_1_J = ''; }else{ $scope.hygiene_and_sanitation_10_2_1_J = ''; $scope.hygiene_and_sanitation_10_2_1_J_cm = ''; $scope.hygiene_and_sanitation_10_2_1_J = false; $scope.hygiene_and_sanitation_10_2_1_J_b = false; $scope.hygiene_and_sanitation_10_2_1_J_c = false; }
				$scope.hygiene_and_sanitation_10_3_1_text = data.hygiene_and_sanitation_10_3_1_text;
				if(data.hygiene_and_sanitation_10_3_1_A == 0){ $scope.hygiene_and_sanitation_10_3_1_A = data.hygiene_and_sanitation_10_3_1_A; $scope.hygiene_and_sanitation_10_3_1_A = true; $scope.hygiene_and_sanitation_10_3_1_A_b = false; $scope.hygiene_and_sanitation_10_3_1_A_c = false; $scope.hygiene_and_sanitation_10_3_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_A  == 5){ $scope.hygiene_and_sanitation_10_3_1_A = data.hygiene_and_sanitation_10_3_1_A; $scope.hygiene_and_sanitation_10_3_1_A = false; $scope.hygiene_and_sanitation_10_3_1_A_b = true; $scope.hygiene_and_sanitation_10_3_1_A_c = false; $scope.hygiene_and_sanitation_10_3_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_A  == ){ $scope.hygiene_and_sanitation_10_3_1_A = data.hygiene_and_sanitation_10_3_1_A; $scope.hygiene_and_sanitation_10_3_1_A = false; $scope.hygiene_and_sanitation_10_3_1_A_b = false; $scope.hygiene_and_sanitation_10_3_1_A_c = true; $scope.hygiene_and_sanitation_10_3_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_3_1_A  > 0 ) && (data.hygiene_and_sanitation_10_3_1_A  < 5)) || ((data.hygiene_and_sanitation_10_3_1_A  > 5 ) && (data.hygiene_and_sanitation_10_3_1_A  < )) )
				{ $scope.hygiene_and_sanitation_10_3_1_A_cm = data.hygiene_and_sanitation_10_3_1_A; $scope.hygiene_and_sanitation_10_3_1_A = false; $scope.hygiene_and_sanitation_10_3_1_A_b = false;  $scope.hygiene_and_sanitation_10_3_1_A_c = false; $scope.hygiene_and_sanitation_10_3_1_A = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_A = ''; $scope.hygiene_and_sanitation_10_3_1_A_cm = ''; $scope.hygiene_and_sanitation_10_3_1_A = false; $scope.hygiene_and_sanitation_10_3_1_A_b = false; $scope.hygiene_and_sanitation_10_3_1_A_c = false; }
				if(data.hygiene_and_sanitation_10_3_1_B == 0){ $scope.hygiene_and_sanitation_10_3_1_B = data.hygiene_and_sanitation_10_3_1_B; $scope.hygiene_and_sanitation_10_3_1_B = true; $scope.hygiene_and_sanitation_10_3_1_B_b = false; $scope.hygiene_and_sanitation_10_3_1_B_c = false; $scope.hygiene_and_sanitation_10_3_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_B  == 5){ $scope.hygiene_and_sanitation_10_3_1_B = data.hygiene_and_sanitation_10_3_1_B; $scope.hygiene_and_sanitation_10_3_1_B = false; $scope.hygiene_and_sanitation_10_3_1_B_b = true; $scope.hygiene_and_sanitation_10_3_1_B_c = false; $scope.hygiene_and_sanitation_10_3_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_B  == ){ $scope.hygiene_and_sanitation_10_3_1_B = data.hygiene_and_sanitation_10_3_1_B; $scope.hygiene_and_sanitation_10_3_1_B = false; $scope.hygiene_and_sanitation_10_3_1_B_b = false; $scope.hygiene_and_sanitation_10_3_1_B_c = true; $scope.hygiene_and_sanitation_10_3_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_10_3_1_B  > 0 ) && (data.hygiene_and_sanitation_10_3_1_B  < 5)) || ((data.hygiene_and_sanitation_10_3_1_B  > 5 ) && (data.hygiene_and_sanitation_10_3_1_B  < )) )
				{ $scope.hygiene_and_sanitation_10_3_1_B_cm = data.hygiene_and_sanitation_10_3_1_B; $scope.hygiene_and_sanitation_10_3_1_B = false; $scope.hygiene_and_sanitation_10_3_1_B_b = false;  $scope.hygiene_and_sanitation_10_3_1_B_c = false; $scope.hygiene_and_sanitation_10_3_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_B = ''; $scope.hygiene_and_sanitation_10_3_1_B_cm = ''; $scope.hygiene_and_sanitation_10_3_1_B = false; $scope.hygiene_and_sanitation_10_3_1_B_b = false; $scope.hygiene_and_sanitation_10_3_1_B_c = false; }
				if(data.hygiene_and_sanitation_10_3_1_C == 0){ $scope.hygiene_and_sanitation_10_3_1_C = data.hygiene_and_sanitation_10_3_1_C; $scope.hygiene_and_sanitation_10_3_1_C = true; $scope.hygiene_and_sanitation_10_3_1_C_b = false; $scope.hygiene_and_sanitation_10_3_1_C_c = false; $scope.hygiene_and_sanitation_10_3_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_C  == 5){ $scope.hygiene_and_sanitation_10_3_1_C = data.hygiene_and_sanitation_10_3_1_C; $scope.hygiene_and_sanitation_10_3_1_C = false; $scope.hygiene_and_sanitation_10_3_1_C_b = true; $scope.hygiene_and_sanitation_10_3_1_C_c = false; $scope.hygiene_and_sanitation_10_3_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_C  == ){ $scope.hygiene_and_sanitation_10_3_1_C = data.hygiene_and_sanitation_10_3_1_C; $scope.hygiene_and_sanitation_10_3_1_C = false; $scope.hygiene_and_sanitation_10_3_1_C_b = false; $scope.hygiene_and_sanitation_10_3_1_C_c = true; $scope.hygiene_and_sanitation_10_3_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_10_3_1_C  > 0 ) && (data.hygiene_and_sanitation_10_3_1_C  < 5)) || ((data.hygiene_and_sanitation_10_3_1_C  > 5 ) && (data.hygiene_and_sanitation_10_3_1_C  < )) )
				{ $scope.hygiene_and_sanitation_10_3_1_C_cm = data.hygiene_and_sanitation_10_3_1_C; $scope.hygiene_and_sanitation_10_3_1_C = false; $scope.hygiene_and_sanitation_10_3_1_C_b = false;  $scope.hygiene_and_sanitation_10_3_1_C_c = false; $scope.hygiene_and_sanitation_10_3_1_C = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_C = ''; $scope.hygiene_and_sanitation_10_3_1_C_cm = ''; $scope.hygiene_and_sanitation_10_3_1_C = false; $scope.hygiene_and_sanitation_10_3_1_C_b = false; $scope.hygiene_and_sanitation_10_3_1_C_c = false; }
				if(data.hygiene_and_sanitation_10_3_1_D == 0){ $scope.hygiene_and_sanitation_10_3_1_D = data.hygiene_and_sanitation_10_3_1_D; $scope.hygiene_and_sanitation_10_3_1_D = true; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = false; $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_D  == 2){ $scope.hygiene_and_sanitation_10_3_1_D = data.hygiene_and_sanitation_10_3_1_D; $scope.hygiene_and_sanitation_10_3_1_D = false; $scope.hygiene_and_sanitation_10_3_1_D_b = true; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = false; $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_D  == 3){ $scope.hygiene_and_sanitation_10_3_1_D = data.hygiene_and_sanitation_10_3_1_D; $scope.hygiene_and_sanitation_10_3_1_D = false; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = true; $scope.hygiene_and_sanitation_10_3_1_D_d = false; $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; }else if(data.hygiene_and_sanitation_10_3_1_D  == 5){ $scope.hygiene_and_sanitation_10_3_1_D = data.hygiene_and_sanitation_10_3_1_D; $scope.hygiene_and_sanitation_10_3_1_D = false; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = true; $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; } else if( ((data.hygiene_and_sanitation_10_3_1_D  > 0 ) && (data.hygiene_and_sanitation_10_3_1_D  < 2)) || ((data.hygiene_and_sanitation_10_3_1_D  > 2 ) && (data.hygiene_and_sanitation_10_3_1_D  < 3)) || ((data.hygiene_and_sanitation_10_3_1_D  > 3 ) && (data.hygiene_and_sanitation_10_3_1_D  < 5)) )
				{ $scope.hygiene_and_sanitation_10_3_1_D_cm = data.hygiene_and_sanitation_10_3_1_D; $scope.hygiene_and_sanitation_10_3_1_D = false; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = false; $scope.hygiene_and_sanitation_10_3_1_D = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_D = ''; $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; $scope.hygiene_and_sanitation_10_3_1_D = false; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = false;}
				if(data.hygiene_and_sanitation_10_3_1_E == 0){ $scope.hygiene_and_sanitation_10_3_1_E = data.hygiene_and_sanitation_10_3_1_E; $scope.hygiene_and_sanitation_10_3_1_E = true; $scope.hygiene_and_sanitation_10_3_1_E_b = false; $scope.hygiene_and_sanitation_10_3_1_E_c = false; $scope.hygiene_and_sanitation_10_3_1_E_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_E  == 5){ $scope.hygiene_and_sanitation_10_3_1_E = data.hygiene_and_sanitation_10_3_1_E; $scope.hygiene_and_sanitation_10_3_1_E = false; $scope.hygiene_and_sanitation_10_3_1_E_b = true; $scope.hygiene_and_sanitation_10_3_1_E_c = false; $scope.hygiene_and_sanitation_10_3_1_E_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_E  == ){ $scope.hygiene_and_sanitation_10_3_1_E = data.hygiene_and_sanitation_10_3_1_E; $scope.hygiene_and_sanitation_10_3_1_E = false; $scope.hygiene_and_sanitation_10_3_1_E_b = false; $scope.hygiene_and_sanitation_10_3_1_E_c = true; $scope.hygiene_and_sanitation_10_3_1_E_cm = ''; }else if( ((data.hygiene_and_sanitation_10_3_1_E  > 0 ) && (data.hygiene_and_sanitation_10_3_1_E  < 5)) || ((data.hygiene_and_sanitation_10_3_1_E  > 5 ) && (data.hygiene_and_sanitation_10_3_1_E  < )) )
				{ $scope.hygiene_and_sanitation_10_3_1_E_cm = data.hygiene_and_sanitation_10_3_1_E; $scope.hygiene_and_sanitation_10_3_1_E = false; $scope.hygiene_and_sanitation_10_3_1_E_b = false;  $scope.hygiene_and_sanitation_10_3_1_E_c = false; $scope.hygiene_and_sanitation_10_3_1_E = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_E = ''; $scope.hygiene_and_sanitation_10_3_1_E_cm = ''; $scope.hygiene_and_sanitation_10_3_1_E = false; $scope.hygiene_and_sanitation_10_3_1_E_b = false; $scope.hygiene_and_sanitation_10_3_1_E_c = false; }
				if(data.hygiene_and_sanitation_10_3_1_F == 1){ $scope.hygiene_and_sanitation_10_3_1_F = data.hygiene_and_sanitation_10_3_1_F; $scope.hygiene_and_sanitation_10_3_1_F = true; $scope.hygiene_and_sanitation_10_3_1_F_b = false; $scope.hygiene_and_sanitation_10_3_1_F_c = false; $scope.hygiene_and_sanitation_10_3_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_F  == 2){ $scope.hygiene_and_sanitation_10_3_1_F = data.hygiene_and_sanitation_10_3_1_F; $scope.hygiene_and_sanitation_10_3_1_F = false; $scope.hygiene_and_sanitation_10_3_1_F_b = true; $scope.hygiene_and_sanitation_10_3_1_F_c = false; $scope.hygiene_and_sanitation_10_3_1_F_cm = ''; } else if(data.hygiene_and_sanitation_10_3_1_F  == 5){ 
				$scope.hygiene_and_sanitation_10_3_1_F = data.hygiene_and_sanitation_10_3_1_F; $scope.hygiene_and_sanitation_10_3_1_F = false; $scope.hygiene_and_sanitation_10_3_1_F_b = false; $scope.hygiene_and_sanitation_10_3_1_F_c = true; $scope.hygiene_and_sanitation_10_3_1_F_cm = ''; } else if( ((data.hygiene_and_sanitation_10_3_1_F  >= 0 ) && (data.hygiene_and_sanitation_10_3_1_F  < 1)) || ((data.hygiene_and_sanitation_10_3_1_F  > 1 ) && (data.hygiene_and_sanitation_10_3_1_F  < 2)) || ((data.hygiene_and_sanitation_10_3_1_F  > 2 ) && (data.hygiene_and_sanitation_10_3_1_F  < 5)) ){ $scope.hygiene_and_sanitation_10_3_1_F_cm = data.hygiene_and_sanitation_10_3_1_F; $scope.hygiene_and_sanitation_10_3_1_F = false; $scope.hygiene_and_sanitation_10_3_1_F_b = false; $scope.hygiene_and_sanitation_10_3_1_F_c = false; $scope.hygiene_and_sanitation_10_3_1_F = ''; }else{ $scope.hygiene_and_sanitation_10_3_1_F = ''; $scope.hygiene_and_sanitation_10_3_1_F_cm = ''; $scope.hygiene_and_sanitation_10_3_1_F = false; $scope.hygiene_and_sanitation_10_3_1_F_b = false; $scope.hygiene_and_sanitation_10_3_1_F_c = false;}
				$scope.hygiene_and_sanitation_10_4_1_text = data.hygiene_and_sanitation_10_4_1_text;
				if(data.hygiene_and_sanitation_10_4_1_A == 5){ $scope.hygiene_and_sanitation_10_4_1_A = data.hygiene_and_sanitation_10_4_1_A; $scope.hygiene_and_sanitation_10_4_1_A = true; $scope.hygiene_and_sanitation_10_4_1_A_b = false; $scope.hygiene_and_sanitation_10_4_1_A_c = false; $scope.hygiene_and_sanitation_10_4_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_A  == 7){ $scope.hygiene_and_sanitation_10_4_1_A = data.hygiene_and_sanitation_10_4_1_A; $scope.hygiene_and_sanitation_10_4_1_A = false; $scope.hygiene_and_sanitation_10_4_1_A_b = true; $scope.hygiene_and_sanitation_10_4_1_A_c = false; $scope.hygiene_and_sanitation_10_4_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_A  == 10){ 
				$scope.hygiene_and_sanitation_10_4_1_A = data.hygiene_and_sanitation_10_4_1_A; $scope.hygiene_and_sanitation_10_4_1_A = false; $scope.hygiene_and_sanitation_10_4_1_A_b = false; $scope.hygiene_and_sanitation_10_4_1_A_c = true; $scope.hygiene_and_sanitation_10_4_1_A_cm = ''; } else if( ((data.hygiene_and_sanitation_10_4_1_A  >= 0 ) && (data.hygiene_and_sanitation_10_4_1_A  < 5)) || ((data.hygiene_and_sanitation_10_4_1_A  > 5 ) && (data.hygiene_and_sanitation_10_4_1_A  < 7)) || ((data.hygiene_and_sanitation_10_4_1_A  > 7 ) && (data.hygiene_and_sanitation_10_4_1_A  < 10)) ){ $scope.hygiene_and_sanitation_10_4_1_A_cm = data.hygiene_and_sanitation_10_4_1_A; $scope.hygiene_and_sanitation_10_4_1_A = false; $scope.hygiene_and_sanitation_10_4_1_A_b = false; $scope.hygiene_and_sanitation_10_4_1_A_c = false; $scope.hygiene_and_sanitation_10_4_1_A = ''; }else{ $scope.hygiene_and_sanitation_10_4_1_A = ''; $scope.hygiene_and_sanitation_10_4_1_A_cm = ''; $scope.hygiene_and_sanitation_10_4_1_A = false; $scope.hygiene_and_sanitation_10_4_1_A_b = false; $scope.hygiene_and_sanitation_10_4_1_A_c = false;}
				if(data.hygiene_and_sanitation_10_4_1_B == 0){ $scope.hygiene_and_sanitation_10_4_1_B = data.hygiene_and_sanitation_10_4_1_B; $scope.hygiene_and_sanitation_10_4_1_B = true; $scope.hygiene_and_sanitation_10_4_1_B_b = false; $scope.hygiene_and_sanitation_10_4_1_B_c = false; $scope.hygiene_and_sanitation_10_4_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_B  == 10){ $scope.hygiene_and_sanitation_10_4_1_B = data.hygiene_and_sanitation_10_4_1_B; $scope.hygiene_and_sanitation_10_4_1_B = false; $scope.hygiene_and_sanitation_10_4_1_B_b = true; $scope.hygiene_and_sanitation_10_4_1_B_c = false; $scope.hygiene_and_sanitation_10_4_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_B  == ){ $scope.hygiene_and_sanitation_10_4_1_B = data.hygiene_and_sanitation_10_4_1_B; $scope.hygiene_and_sanitation_10_4_1_B = false; $scope.hygiene_and_sanitation_10_4_1_B_b = false; $scope.hygiene_and_sanitation_10_4_1_B_c = true; $scope.hygiene_and_sanitation_10_4_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_10_4_1_B  > 0 ) && (data.hygiene_and_sanitation_10_4_1_B  < 10)) || ((data.hygiene_and_sanitation_10_4_1_B  > 10 ) && (data.hygiene_and_sanitation_10_4_1_B  < )) )
				{ $scope.hygiene_and_sanitation_10_4_1_B_cm = data.hygiene_and_sanitation_10_4_1_B; $scope.hygiene_and_sanitation_10_4_1_B = false; $scope.hygiene_and_sanitation_10_4_1_B_b = false;  $scope.hygiene_and_sanitation_10_4_1_B_c = false; $scope.hygiene_and_sanitation_10_4_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_4_1_B = ''; $scope.hygiene_and_sanitation_10_4_1_B_cm = ''; $scope.hygiene_and_sanitation_10_4_1_B = false; $scope.hygiene_and_sanitation_10_4_1_B_b = false; $scope.hygiene_and_sanitation_10_4_1_B_c = false; }
				if(data.hygiene_and_sanitation_10_4_1_C == 0){ $scope.hygiene_and_sanitation_10_4_1_C = data.hygiene_and_sanitation_10_4_1_C; $scope.hygiene_and_sanitation_10_4_1_C = true; $scope.hygiene_and_sanitation_10_4_1_C_b = false; $scope.hygiene_and_sanitation_10_4_1_C_c = false; $scope.hygiene_and_sanitation_10_4_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_C  == 5){ $scope.hygiene_and_sanitation_10_4_1_C = data.hygiene_and_sanitation_10_4_1_C; $scope.hygiene_and_sanitation_10_4_1_C = false; $scope.hygiene_and_sanitation_10_4_1_C_b = true; $scope.hygiene_and_sanitation_10_4_1_C_c = false; $scope.hygiene_and_sanitation_10_4_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_4_1_C  == 10){ $scope.hygiene_and_sanitation_10_4_1_C = data.hygiene_and_sanitation_10_4_1_C; $scope.hygiene_and_sanitation_10_4_1_C = false; $scope.hygiene_and_sanitation_10_4_1_C_b = false; $scope.hygiene_and_sanitation_10_4_1_C_c = true; $scope.hygiene_and_sanitation_10_4_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_10_4_1_C  > 0 ) && (data.hygiene_and_sanitation_10_4_1_C  < 5)) || ((data.hygiene_and_sanitation_10_4_1_C  > 5 ) && (data.hygiene_and_sanitation_10_4_1_C  < 10)) )
				{ $scope.hygiene_and_sanitation_10_4_1_C_cm = data.hygiene_and_sanitation_10_4_1_C; $scope.hygiene_and_sanitation_10_4_1_C = false; $scope.hygiene_and_sanitation_10_4_1_C_b = false;  $scope.hygiene_and_sanitation_10_4_1_C_c = false; $scope.hygiene_and_sanitation_10_4_1_C = ''; }else{ $scope.hygiene_and_sanitation_10_4_1_C = ''; $scope.hygiene_and_sanitation_10_4_1_C_cm = ''; $scope.hygiene_and_sanitation_10_4_1_C = false; $scope.hygiene_and_sanitation_10_4_1_C_b = false; $scope.hygiene_and_sanitation_10_4_1_C_c = false; }
				$scope.hygiene_and_sanitation_10_5_1_text = data.hygiene_and_sanitation_10_5_1_text;
				if(data.hygiene_and_sanitation_10_5_1_A == 0){ $scope.hygiene_and_sanitation_10_5_1_A = data.hygiene_and_sanitation_10_5_1_A; $scope.hygiene_and_sanitation_10_5_1_A = true; $scope.hygiene_and_sanitation_10_5_1_A_b = false; $scope.hygiene_and_sanitation_10_5_1_A_c = false; $scope.hygiene_and_sanitation_10_5_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_5_1_A  == 5){ $scope.hygiene_and_sanitation_10_5_1_A = data.hygiene_and_sanitation_10_5_1_A; $scope.hygiene_and_sanitation_10_5_1_A = false; $scope.hygiene_and_sanitation_10_5_1_A_b = true; $scope.hygiene_and_sanitation_10_5_1_A_c = false; $scope.hygiene_and_sanitation_10_5_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_5_1_A  == ){ $scope.hygiene_and_sanitation_10_5_1_A = data.hygiene_and_sanitation_10_5_1_A; $scope.hygiene_and_sanitation_10_5_1_A = false; $scope.hygiene_and_sanitation_10_5_1_A_b = false; $scope.hygiene_and_sanitation_10_5_1_A_c = true; $scope.hygiene_and_sanitation_10_5_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_5_1_A  > 0 ) && (data.hygiene_and_sanitation_10_5_1_A  < 5)) || ((data.hygiene_and_sanitation_10_5_1_A  > 5 ) && (data.hygiene_and_sanitation_10_5_1_A  < )) )
				{ $scope.hygiene_and_sanitation_10_5_1_A_cm = data.hygiene_and_sanitation_10_5_1_A; $scope.hygiene_and_sanitation_10_5_1_A = false; $scope.hygiene_and_sanitation_10_5_1_A_b = false;  $scope.hygiene_and_sanitation_10_5_1_A_c = false; $scope.hygiene_and_sanitation_10_5_1_A = ''; }else{ $scope.hygiene_and_sanitation_10_5_1_A = ''; $scope.hygiene_and_sanitation_10_5_1_A_cm = ''; $scope.hygiene_and_sanitation_10_5_1_A = false; $scope.hygiene_and_sanitation_10_5_1_A_b = false; $scope.hygiene_and_sanitation_10_5_1_A_c = false; }
				if(data.hygiene_and_sanitation_10_5_1_B == 5){ $scope.hygiene_and_sanitation_10_5_1_B = data.hygiene_and_sanitation_10_5_1_B; $scope.hygiene_and_sanitation_10_5_1_B = true; $scope.hygiene_and_sanitation_10_5_1_B_b = false; $scope.hygiene_and_sanitation_10_5_1_B_c = false; $scope.hygiene_and_sanitation_10_5_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_5_1_B  == 10){ $scope.hygiene_and_sanitation_10_5_1_B = data.hygiene_and_sanitation_10_5_1_B; $scope.hygiene_and_sanitation_10_5_1_B = false; $scope.hygiene_and_sanitation_10_5_1_B_b = true; $scope.hygiene_and_sanitation_10_5_1_B_c = false; $scope.hygiene_and_sanitation_10_5_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_5_1_B  == 15){ 
				$scope.hygiene_and_sanitation_10_5_1_B = data.hygiene_and_sanitation_10_5_1_B; $scope.hygiene_and_sanitation_10_5_1_B = false; $scope.hygiene_and_sanitation_10_5_1_B_b = false; $scope.hygiene_and_sanitation_10_5_1_B_c = true; $scope.hygiene_and_sanitation_10_5_1_B_cm = ''; } else if( ((data.hygiene_and_sanitation_10_5_1_B  >= 0 ) && (data.hygiene_and_sanitation_10_5_1_B  < 5)) || ((data.hygiene_and_sanitation_10_5_1_B  > 5 ) && (data.hygiene_and_sanitation_10_5_1_B  < 10)) || ((data.hygiene_and_sanitation_10_5_1_B  > 10 ) && (data.hygiene_and_sanitation_10_5_1_B  < 15)) ){ $scope.hygiene_and_sanitation_10_5_1_B_cm = data.hygiene_and_sanitation_10_5_1_B; $scope.hygiene_and_sanitation_10_5_1_B = false; $scope.hygiene_and_sanitation_10_5_1_B_b = false; $scope.hygiene_and_sanitation_10_5_1_B_c = false; $scope.hygiene_and_sanitation_10_5_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_5_1_B = ''; $scope.hygiene_and_sanitation_10_5_1_B_cm = ''; $scope.hygiene_and_sanitation_10_5_1_B = false; $scope.hygiene_and_sanitation_10_5_1_B_b = false; $scope.hygiene_and_sanitation_10_5_1_B_c = false;}
				$scope.hygiene_and_sanitation_10_6_1_text = data.hygiene_and_sanitation_10_6_1_text;
				if(data.hygiene_and_sanitation_10_6_1_A == 0){ $scope.hygiene_and_sanitation_10_6_1_A = data.hygiene_and_sanitation_10_6_1_A; $scope.hygiene_and_sanitation_10_6_1_A = true; $scope.hygiene_and_sanitation_10_6_1_A_b = false; $scope.hygiene_and_sanitation_10_6_1_A_c = false; $scope.hygiene_and_sanitation_10_6_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_6_1_A  == 8){ $scope.hygiene_and_sanitation_10_6_1_A = data.hygiene_and_sanitation_10_6_1_A; $scope.hygiene_and_sanitation_10_6_1_A = false; $scope.hygiene_and_sanitation_10_6_1_A_b = true; $scope.hygiene_and_sanitation_10_6_1_A_c = false; $scope.hygiene_and_sanitation_10_6_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_6_1_A  == ){ $scope.hygiene_and_sanitation_10_6_1_A = data.hygiene_and_sanitation_10_6_1_A; $scope.hygiene_and_sanitation_10_6_1_A = false; $scope.hygiene_and_sanitation_10_6_1_A_b = false; $scope.hygiene_and_sanitation_10_6_1_A_c = true; $scope.hygiene_and_sanitation_10_6_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_6_1_A  > 0 ) && (data.hygiene_and_sanitation_10_6_1_A  < 8)) || ((data.hygiene_and_sanitation_10_6_1_A  > 8 ) && (data.hygiene_and_sanitation_10_6_1_A  < )) )
				{ $scope.hygiene_and_sanitation_10_6_1_A_cm = data.hygiene_and_sanitation_10_6_1_A; $scope.hygiene_and_sanitation_10_6_1_A = false; $scope.hygiene_and_sanitation_10_6_1_A_b = false;  $scope.hygiene_and_sanitation_10_6_1_A_c = false; $scope.hygiene_and_sanitation_10_6_1_A = ''; }else{ $scope.hygiene_and_sanitation_10_6_1_A = ''; $scope.hygiene_and_sanitation_10_6_1_A_cm = ''; $scope.hygiene_and_sanitation_10_6_1_A = false; $scope.hygiene_and_sanitation_10_6_1_A_b = false; $scope.hygiene_and_sanitation_10_6_1_A_c = false; }
				if(data.hygiene_and_sanitation_10_6_1_B_a == 3){ $scope.hygiene_and_sanitation_10_6_1_B_a = data.hygiene_and_sanitation_10_6_1_B_a; $scope.hygiene_and_sanitation_10_6_1_B_a= true; $scope.hygiene_and_sanitation_10_6_1_B_a_cm = ''; } else if((data.hygiene_and_sanitation_10_6_1_B_a > 0 ) && (data.hygiene_and_sanitation_10_6_1_B_a < 3)){ $scope.hygiene_and_sanitation_10_6_1_B_a_cm = data.hygiene_and_sanitation_10_6_1_B_a; $scope.hygiene_and_sanitation_10_6_1_B_a= false; $scope.hygiene_and_sanitation_10_6_1_B_a= ''; }else{ $scope.hygiene_and_sanitation_10_6_1_B_a= ''; $scope.hygiene_and_sanitation_10_6_1_B_a_cm = ''; $scope.hygiene_and_sanitation_10_6_1_B_a= false; }
				if(data.hygiene_and_sanitation_10_6_1_B_b == 5){ $scope.hygiene_and_sanitation_10_6_1_B_b = data.hygiene_and_sanitation_10_6_1_B_b; $scope.hygiene_and_sanitation_10_6_1_B_b= true; $scope.hygiene_and_sanitation_10_6_1_B_b_cm = ''; } else if((data.hygiene_and_sanitation_10_6_1_B_b > 0 ) && (data.hygiene_and_sanitation_10_6_1_B_b < 5)){ $scope.hygiene_and_sanitation_10_6_1_B_b_cm = data.hygiene_and_sanitation_10_6_1_B_b; $scope.hygiene_and_sanitation_10_6_1_B_b= false; $scope.hygiene_and_sanitation_10_6_1_B_b= ''; }else{ $scope.hygiene_and_sanitation_10_6_1_B_b= ''; $scope.hygiene_and_sanitation_10_6_1_B_b_cm = ''; $scope.hygiene_and_sanitation_10_6_1_B_b= false; }
				if(data.hygiene_and_sanitation_10_6_1_C == 0){ $scope.hygiene_and_sanitation_10_6_1_C = data.hygiene_and_sanitation_10_6_1_C; $scope.hygiene_and_sanitation_10_6_1_C = true; $scope.hygiene_and_sanitation_10_6_1_C_b = false; $scope.hygiene_and_sanitation_10_6_1_C_c = false; $scope.hygiene_and_sanitation_10_6_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_6_1_C  == 4){ $scope.hygiene_and_sanitation_10_6_1_C = data.hygiene_and_sanitation_10_6_1_C; $scope.hygiene_and_sanitation_10_6_1_C = false; $scope.hygiene_and_sanitation_10_6_1_C_b = true; $scope.hygiene_and_sanitation_10_6_1_C_c = false; $scope.hygiene_and_sanitation_10_6_1_C_cm = ''; } else if(data.hygiene_and_sanitation_10_6_1_C  == ){ $scope.hygiene_and_sanitation_10_6_1_C = data.hygiene_and_sanitation_10_6_1_C; $scope.hygiene_and_sanitation_10_6_1_C = false; $scope.hygiene_and_sanitation_10_6_1_C_b = false; $scope.hygiene_and_sanitation_10_6_1_C_c = true; $scope.hygiene_and_sanitation_10_6_1_C_cm = ''; }else if( ((data.hygiene_and_sanitation_10_6_1_C  > 0 ) && (data.hygiene_and_sanitation_10_6_1_C  < 4)) || ((data.hygiene_and_sanitation_10_6_1_C  > 4 ) && (data.hygiene_and_sanitation_10_6_1_C  < )) )
				{ $scope.hygiene_and_sanitation_10_6_1_C_cm = data.hygiene_and_sanitation_10_6_1_C; $scope.hygiene_and_sanitation_10_6_1_C = false; $scope.hygiene_and_sanitation_10_6_1_C_b = false;  $scope.hygiene_and_sanitation_10_6_1_C_c = false; $scope.hygiene_and_sanitation_10_6_1_C = ''; }else{ $scope.hygiene_and_sanitation_10_6_1_C = ''; $scope.hygiene_and_sanitation_10_6_1_C_cm = ''; $scope.hygiene_and_sanitation_10_6_1_C = false; $scope.hygiene_and_sanitation_10_6_1_C_b = false; $scope.hygiene_and_sanitation_10_6_1_C_c = false; }
				$scope.hygiene_and_sanitation_10_7_1_text = data.hygiene_and_sanitation_10_7_1_text;
				if(data.hygiene_and_sanitation_10_7_1_A == 0){ $scope.hygiene_and_sanitation_10_7_1_A = data.hygiene_and_sanitation_10_7_1_A; $scope.hygiene_and_sanitation_10_7_1_A = true; $scope.hygiene_and_sanitation_10_7_1_A_b = false; $scope.hygiene_and_sanitation_10_7_1_A_c = false; $scope.hygiene_and_sanitation_10_7_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_7_1_A  == 5){ $scope.hygiene_and_sanitation_10_7_1_A = data.hygiene_and_sanitation_10_7_1_A; $scope.hygiene_and_sanitation_10_7_1_A = false; $scope.hygiene_and_sanitation_10_7_1_A_b = true; $scope.hygiene_and_sanitation_10_7_1_A_c = false; $scope.hygiene_and_sanitation_10_7_1_A_cm = ''; } else if(data.hygiene_and_sanitation_10_7_1_A  == ){ $scope.hygiene_and_sanitation_10_7_1_A = data.hygiene_and_sanitation_10_7_1_A; $scope.hygiene_and_sanitation_10_7_1_A = false; $scope.hygiene_and_sanitation_10_7_1_A_b = false; $scope.hygiene_and_sanitation_10_7_1_A_c = true; $scope.hygiene_and_sanitation_10_7_1_A_cm = ''; }else if( ((data.hygiene_and_sanitation_10_7_1_A  > 0 ) && (data.hygiene_and_sanitation_10_7_1_A  < 5)) || ((data.hygiene_and_sanitation_10_7_1_A  > 5 ) && (data.hygiene_and_sanitation_10_7_1_A  < )) )
				{ $scope.hygiene_and_sanitation_10_7_1_A_cm = data.hygiene_and_sanitation_10_7_1_A; $scope.hygiene_and_sanitation_10_7_1_A = false; $scope.hygiene_and_sanitation_10_7_1_A_b = false;  $scope.hygiene_and_sanitation_10_7_1_A_c = false; $scope.hygiene_and_sanitation_10_7_1_A = ''; }else{ $scope.hygiene_and_sanitation_10_7_1_A = ''; $scope.hygiene_and_sanitation_10_7_1_A_cm = ''; $scope.hygiene_and_sanitation_10_7_1_A = false; $scope.hygiene_and_sanitation_10_7_1_A_b = false; $scope.hygiene_and_sanitation_10_7_1_A_c = false; }
				if(data.hygiene_and_sanitation_10_7_1_B == 15){ $scope.hygiene_and_sanitation_10_7_1_B = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = true; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_7_1_B  == 20){ $scope.hygiene_and_sanitation_10_7_1_B = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = true; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_7_1_B  == 25){ $scope.hygiene_and_sanitation_10_7_1_B = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = true; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; }else if(data.hygiene_and_sanitation_10_7_1_B  == 30){ $scope.hygiene_and_sanitation_10_7_1_B = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; 
				$scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = true; $scope.hygiene_and_sanitation_10_7_1_B_e = false; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; } else if(data.hygiene_and_sanitation_10_7_1_B  == 35){ $scope.hygiene_and_sanitation_10_7_1_B = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = true; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; }else if( ((data.hygiene_and_sanitation_10_7_1_B  >= 0 ) && (data.hygiene_and_sanitation_10_7_1_B  < 15)) || ((data.hygiene_and_sanitation_10_7_1_B  > 15 ) && (data.hygiene_and_sanitation_10_7_1_B  < 20)) || ((data.hygiene_and_sanitation_10_7_1_B  > 20 ) && (data.hygiene_and_sanitation_10_7_1_B  < 25)) || ((data.hygiene_and_sanitation_10_7_1_B  > 25 ) && (data.hygiene_and_sanitation_10_7_1_B  < 30)) || ((data.hygiene_and_sanitation_10_7_1_B  > 30 ) && (data.hygiene_and_sanitation_10_7_1_B  < 35)) )
				{ $scope.hygiene_and_sanitation_10_7_1_B_cm = data.hygiene_and_sanitation_10_7_1_B; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false; $scope.hygiene_and_sanitation_10_7_1_B = ''; }else{ $scope.hygiene_and_sanitation_10_7_1_B = ''; $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; $scope.hygiene_and_sanitation_10_7_1_B = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false;}
				$scope.safety_and_security_11_1_1_text = data.safety_and_security_11_1_1_text;
				if(data.safety_and_security_11_1_1_A == 0){ $scope.safety_and_security_11_1_1_A = data.safety_and_security_11_1_1_A; $scope.safety_and_security_11_1_1_A = true; $scope.safety_and_security_11_1_1_A_b = false; $scope.safety_and_security_11_1_1_A_c = false; $scope.safety_and_security_11_1_1_A_cm = ''; } else if(data.safety_and_security_11_1_1_A  == 4){ $scope.safety_and_security_11_1_1_A = data.safety_and_security_11_1_1_A; $scope.safety_and_security_11_1_1_A = false; $scope.safety_and_security_11_1_1_A_b = true; $scope.safety_and_security_11_1_1_A_c = false; $scope.safety_and_security_11_1_1_A_cm = ''; } else if(data.safety_and_security_11_1_1_A  == ){ $scope.safety_and_security_11_1_1_A = data.safety_and_security_11_1_1_A; $scope.safety_and_security_11_1_1_A = false; $scope.safety_and_security_11_1_1_A_b = false; $scope.safety_and_security_11_1_1_A_c = true; $scope.safety_and_security_11_1_1_A_cm = ''; }else if( ((data.safety_and_security_11_1_1_A  > 0 ) && (data.safety_and_security_11_1_1_A  < 4)) || ((data.safety_and_security_11_1_1_A  > 4 ) && (data.safety_and_security_11_1_1_A  < )) )
				{ $scope.safety_and_security_11_1_1_A_cm = data.safety_and_security_11_1_1_A; $scope.safety_and_security_11_1_1_A = false; $scope.safety_and_security_11_1_1_A_b = false;  $scope.safety_and_security_11_1_1_A_c = false; $scope.safety_and_security_11_1_1_A = ''; }else{ $scope.safety_and_security_11_1_1_A = ''; $scope.safety_and_security_11_1_1_A_cm = ''; $scope.safety_and_security_11_1_1_A = false; $scope.safety_and_security_11_1_1_A_b = false; $scope.safety_and_security_11_1_1_A_c = false; }
				if(data.safety_and_security_11_1_1_B == 0){ $scope.safety_and_security_11_1_1_B = data.safety_and_security_11_1_1_B; $scope.safety_and_security_11_1_1_B = true; $scope.safety_and_security_11_1_1_B_b = false; $scope.safety_and_security_11_1_1_B_c = false; $scope.safety_and_security_11_1_1_B_cm = ''; } else if(data.safety_and_security_11_1_1_B  == 4){ $scope.safety_and_security_11_1_1_B = data.safety_and_security_11_1_1_B; $scope.safety_and_security_11_1_1_B = false; $scope.safety_and_security_11_1_1_B_b = true; $scope.safety_and_security_11_1_1_B_c = false; $scope.safety_and_security_11_1_1_B_cm = ''; } else if(data.safety_and_security_11_1_1_B  == ){ $scope.safety_and_security_11_1_1_B = data.safety_and_security_11_1_1_B; $scope.safety_and_security_11_1_1_B = false; $scope.safety_and_security_11_1_1_B_b = false; $scope.safety_and_security_11_1_1_B_c = true; $scope.safety_and_security_11_1_1_B_cm = ''; }else if( ((data.safety_and_security_11_1_1_B  > 0 ) && (data.safety_and_security_11_1_1_B  < 4)) || ((data.safety_and_security_11_1_1_B  > 4 ) && (data.safety_and_security_11_1_1_B  < )) )
				{ $scope.safety_and_security_11_1_1_B_cm = data.safety_and_security_11_1_1_B; $scope.safety_and_security_11_1_1_B = false; $scope.safety_and_security_11_1_1_B_b = false;  $scope.safety_and_security_11_1_1_B_c = false; $scope.safety_and_security_11_1_1_B = ''; }else{ $scope.safety_and_security_11_1_1_B = ''; $scope.safety_and_security_11_1_1_B_cm = ''; $scope.safety_and_security_11_1_1_B = false; $scope.safety_and_security_11_1_1_B_b = false; $scope.safety_and_security_11_1_1_B_c = false; }
				if(data.safety_and_security_11_1_1_C == 0){ $scope.safety_and_security_11_1_1_C = data.safety_and_security_11_1_1_C; $scope.safety_and_security_11_1_1_C = true; $scope.safety_and_security_11_1_1_C_b = false; $scope.safety_and_security_11_1_1_C_c = false; $scope.safety_and_security_11_1_1_C_cm = ''; } else if(data.safety_and_security_11_1_1_C  == 4){ $scope.safety_and_security_11_1_1_C = data.safety_and_security_11_1_1_C; $scope.safety_and_security_11_1_1_C = false; $scope.safety_and_security_11_1_1_C_b = true; $scope.safety_and_security_11_1_1_C_c = false; $scope.safety_and_security_11_1_1_C_cm = ''; } else if(data.safety_and_security_11_1_1_C  == ){ $scope.safety_and_security_11_1_1_C = data.safety_and_security_11_1_1_C; $scope.safety_and_security_11_1_1_C = false; $scope.safety_and_security_11_1_1_C_b = false; $scope.safety_and_security_11_1_1_C_c = true; $scope.safety_and_security_11_1_1_C_cm = ''; }else if( ((data.safety_and_security_11_1_1_C  > 0 ) && (data.safety_and_security_11_1_1_C  < 4)) || ((data.safety_and_security_11_1_1_C  > 4 ) && (data.safety_and_security_11_1_1_C  < )) )
				{ $scope.safety_and_security_11_1_1_C_cm = data.safety_and_security_11_1_1_C; $scope.safety_and_security_11_1_1_C = false; $scope.safety_and_security_11_1_1_C_b = false;  $scope.safety_and_security_11_1_1_C_c = false; $scope.safety_and_security_11_1_1_C = ''; }else{ $scope.safety_and_security_11_1_1_C = ''; $scope.safety_and_security_11_1_1_C_cm = ''; $scope.safety_and_security_11_1_1_C = false; $scope.safety_and_security_11_1_1_C_b = false; $scope.safety_and_security_11_1_1_C_c = false; }
				if(data.safety_and_security_11_1_1_D == 0){ $scope.safety_and_security_11_1_1_D = data.safety_and_security_11_1_1_D; $scope.safety_and_security_11_1_1_D = true; $scope.safety_and_security_11_1_1_D_b = false; $scope.safety_and_security_11_1_1_D_c = false; $scope.safety_and_security_11_1_1_D_cm = ''; } else if(data.safety_and_security_11_1_1_D  == 3){ $scope.safety_and_security_11_1_1_D = data.safety_and_security_11_1_1_D; $scope.safety_and_security_11_1_1_D = false; $scope.safety_and_security_11_1_1_D_b = true; $scope.safety_and_security_11_1_1_D_c = false; $scope.safety_and_security_11_1_1_D_cm = ''; } else if(data.safety_and_security_11_1_1_D  == ){ $scope.safety_and_security_11_1_1_D = data.safety_and_security_11_1_1_D; $scope.safety_and_security_11_1_1_D = false; $scope.safety_and_security_11_1_1_D_b = false; $scope.safety_and_security_11_1_1_D_c = true; $scope.safety_and_security_11_1_1_D_cm = ''; }else if( ((data.safety_and_security_11_1_1_D  > 0 ) && (data.safety_and_security_11_1_1_D  < 3)) || ((data.safety_and_security_11_1_1_D  > 3 ) && (data.safety_and_security_11_1_1_D  < )) )
				{ $scope.safety_and_security_11_1_1_D_cm = data.safety_and_security_11_1_1_D; $scope.safety_and_security_11_1_1_D = false; $scope.safety_and_security_11_1_1_D_b = false;  $scope.safety_and_security_11_1_1_D_c = false; $scope.safety_and_security_11_1_1_D = ''; }else{ $scope.safety_and_security_11_1_1_D = ''; $scope.safety_and_security_11_1_1_D_cm = ''; $scope.safety_and_security_11_1_1_D = false; $scope.safety_and_security_11_1_1_D_b = false; $scope.safety_and_security_11_1_1_D_c = false; }
				if(data.safety_and_security_11_1_1_E_a == 2){ $scope.safety_and_security_11_1_1_E_a = data.safety_and_security_11_1_1_E_a; $scope.safety_and_security_11_1_1_E_a= true; $scope.safety_and_security_11_1_1_E_a_cm = ''; } else if((data.safety_and_security_11_1_1_E_a > 0 ) && (data.safety_and_security_11_1_1_E_a < 2)){ $scope.safety_and_security_11_1_1_E_a_cm = data.safety_and_security_11_1_1_E_a; $scope.safety_and_security_11_1_1_E_a= false; $scope.safety_and_security_11_1_1_E_a= ''; }else{ $scope.safety_and_security_11_1_1_E_a= ''; $scope.safety_and_security_11_1_1_E_a_cm = ''; $scope.safety_and_security_11_1_1_E_a= false; }
				if(data.safety_and_security_11_1_1_E_b == 1){ $scope.safety_and_security_11_1_1_E_b = data.safety_and_security_11_1_1_E_b; $scope.safety_and_security_11_1_1_E_b= true; $scope.safety_and_security_11_1_1_E_b_cm = ''; } else if((data.safety_and_security_11_1_1_E_b > 0 ) && (data.safety_and_security_11_1_1_E_b < 1)){ $scope.safety_and_security_11_1_1_E_b_cm = data.safety_and_security_11_1_1_E_b; $scope.safety_and_security_11_1_1_E_b= false; $scope.safety_and_security_11_1_1_E_b= ''; }else{ $scope.safety_and_security_11_1_1_E_b= ''; $scope.safety_and_security_11_1_1_E_b_cm = ''; $scope.safety_and_security_11_1_1_E_b= false; }
				if(data.safety_and_security_11_1_1_E_c == 2){ $scope.safety_and_security_11_1_1_E_c = data.safety_and_security_11_1_1_E_c; $scope.safety_and_security_11_1_1_E_c= true; $scope.safety_and_security_11_1_1_E_c_cm = ''; } else if((data.safety_and_security_11_1_1_E_c > 0 ) && (data.safety_and_security_11_1_1_E_c < 2)){ $scope.safety_and_security_11_1_1_E_c_cm = data.safety_and_security_11_1_1_E_c; $scope.safety_and_security_11_1_1_E_c= false; $scope.safety_and_security_11_1_1_E_c= ''; }else{ $scope.safety_and_security_11_1_1_E_c= ''; $scope.safety_and_security_11_1_1_E_c_cm = ''; $scope.safety_and_security_11_1_1_E_c= false; }
				if(data.safety_and_security_11_1_1_E_d == 1){ $scope.safety_and_security_11_1_1_E_d = data.safety_and_security_11_1_1_E_d; $scope.safety_and_security_11_1_1_E_d= true; $scope.safety_and_security_11_1_1_E_d_cm = ''; } else if((data.safety_and_security_11_1_1_E_d > 0 ) && (data.safety_and_security_11_1_1_E_d < 1)){ $scope.safety_and_security_11_1_1_E_d_cm = data.safety_and_security_11_1_1_E_d; $scope.safety_and_security_11_1_1_E_d= false; $scope.safety_and_security_11_1_1_E_d= ''; }else{ $scope.safety_and_security_11_1_1_E_d= ''; $scope.safety_and_security_11_1_1_E_d_cm = ''; $scope.safety_and_security_11_1_1_E_d= false; }
				if(data.safety_and_security_11_1_1_E_e == 1){ $scope.safety_and_security_11_1_1_E_e = data.safety_and_security_11_1_1_E_e; $scope.safety_and_security_11_1_1_E_e= true; $scope.safety_and_security_11_1_1_E_e_cm = ''; } else if((data.safety_and_security_11_1_1_E_e > 0 ) && (data.safety_and_security_11_1_1_E_e < 1)){ $scope.safety_and_security_11_1_1_E_e_cm = data.safety_and_security_11_1_1_E_e; $scope.safety_and_security_11_1_1_E_e= false; $scope.safety_and_security_11_1_1_E_e= ''; }else{ $scope.safety_and_security_11_1_1_E_e= ''; $scope.safety_and_security_11_1_1_E_e_cm = ''; $scope.safety_and_security_11_1_1_E_e= false; }
				if(data.safety_and_security_11_1_1_E_f == 2){ $scope.safety_and_security_11_1_1_E_f = data.safety_and_security_11_1_1_E_f; $scope.safety_and_security_11_1_1_E_f= true; $scope.safety_and_security_11_1_1_E_f_cm = ''; } else if((data.safety_and_security_11_1_1_E_f > 0 ) && (data.safety_and_security_11_1_1_E_f < 2)){ $scope.safety_and_security_11_1_1_E_f_cm = data.safety_and_security_11_1_1_E_f; $scope.safety_and_security_11_1_1_E_f= false; $scope.safety_and_security_11_1_1_E_f= ''; }else{ $scope.safety_and_security_11_1_1_E_f= ''; $scope.safety_and_security_11_1_1_E_f_cm = ''; $scope.safety_and_security_11_1_1_E_f= false; }
				if(data.safety_and_security_11_1_1_E_g == 2){ $scope.safety_and_security_11_1_1_E_g = data.safety_and_security_11_1_1_E_g; $scope.safety_and_security_11_1_1_E_g= true; $scope.safety_and_security_11_1_1_E_g_cm = ''; } else if((data.safety_and_security_11_1_1_E_g > 0 ) && (data.safety_and_security_11_1_1_E_g < 2)){ $scope.safety_and_security_11_1_1_E_g_cm = data.safety_and_security_11_1_1_E_g; $scope.safety_and_security_11_1_1_E_g= false; $scope.safety_and_security_11_1_1_E_g= ''; }else{ $scope.safety_and_security_11_1_1_E_g= ''; $scope.safety_and_security_11_1_1_E_g_cm = ''; $scope.safety_and_security_11_1_1_E_g= false; }
				if(data.safety_and_security_11_1_1_F == 0){ $scope.safety_and_security_11_1_1_F = data.safety_and_security_11_1_1_F; $scope.safety_and_security_11_1_1_F = true; $scope.safety_and_security_11_1_1_F_b = false; $scope.safety_and_security_11_1_1_F_c = false; $scope.safety_and_security_11_1_1_F_cm = ''; } else if(data.safety_and_security_11_1_1_F  == 3){ $scope.safety_and_security_11_1_1_F = data.safety_and_security_11_1_1_F; $scope.safety_and_security_11_1_1_F = false; $scope.safety_and_security_11_1_1_F_b = true; $scope.safety_and_security_11_1_1_F_c = false; $scope.safety_and_security_11_1_1_F_cm = ''; } else if(data.safety_and_security_11_1_1_F  == ){ $scope.safety_and_security_11_1_1_F = data.safety_and_security_11_1_1_F; $scope.safety_and_security_11_1_1_F = false; $scope.safety_and_security_11_1_1_F_b = false; $scope.safety_and_security_11_1_1_F_c = true; $scope.safety_and_security_11_1_1_F_cm = ''; }else if( ((data.safety_and_security_11_1_1_F  > 0 ) && (data.safety_and_security_11_1_1_F  < 3)) || ((data.safety_and_security_11_1_1_F  > 3 ) && (data.safety_and_security_11_1_1_F  < )) )
				{ $scope.safety_and_security_11_1_1_F_cm = data.safety_and_security_11_1_1_F; $scope.safety_and_security_11_1_1_F = false; $scope.safety_and_security_11_1_1_F_b = false;  $scope.safety_and_security_11_1_1_F_c = false; $scope.safety_and_security_11_1_1_F = ''; }else{ $scope.safety_and_security_11_1_1_F = ''; $scope.safety_and_security_11_1_1_F_cm = ''; $scope.safety_and_security_11_1_1_F = false; $scope.safety_and_security_11_1_1_F_b = false; $scope.safety_and_security_11_1_1_F_c = false; }
				if(data.safety_and_security_11_1_1_G == 0){ $scope.safety_and_security_11_1_1_G = data.safety_and_security_11_1_1_G; $scope.safety_and_security_11_1_1_G = true; $scope.safety_and_security_11_1_1_G_b = false; $scope.safety_and_security_11_1_1_G_c = false; $scope.safety_and_security_11_1_1_G_cm = ''; } else if(data.safety_and_security_11_1_1_G  == 3){ $scope.safety_and_security_11_1_1_G = data.safety_and_security_11_1_1_G; $scope.safety_and_security_11_1_1_G = false; $scope.safety_and_security_11_1_1_G_b = true; $scope.safety_and_security_11_1_1_G_c = false; $scope.safety_and_security_11_1_1_G_cm = ''; } else if(data.safety_and_security_11_1_1_G  == ){ $scope.safety_and_security_11_1_1_G = data.safety_and_security_11_1_1_G; $scope.safety_and_security_11_1_1_G = false; $scope.safety_and_security_11_1_1_G_b = false; $scope.safety_and_security_11_1_1_G_c = true; $scope.safety_and_security_11_1_1_G_cm = ''; }else if( ((data.safety_and_security_11_1_1_G  > 0 ) && (data.safety_and_security_11_1_1_G  < 3)) || ((data.safety_and_security_11_1_1_G  > 3 ) && (data.safety_and_security_11_1_1_G  < )) )
				{ $scope.safety_and_security_11_1_1_G_cm = data.safety_and_security_11_1_1_G; $scope.safety_and_security_11_1_1_G = false; $scope.safety_and_security_11_1_1_G_b = false;  $scope.safety_and_security_11_1_1_G_c = false; $scope.safety_and_security_11_1_1_G = ''; }else{ $scope.safety_and_security_11_1_1_G = ''; $scope.safety_and_security_11_1_1_G_cm = ''; $scope.safety_and_security_11_1_1_G = false; $scope.safety_and_security_11_1_1_G_b = false; $scope.safety_and_security_11_1_1_G_c = false; }
				if(data.safety_and_security_11_1_1_H == 0){ $scope.safety_and_security_11_1_1_H = data.safety_and_security_11_1_1_H; $scope.safety_and_security_11_1_1_H = true; $scope.safety_and_security_11_1_1_H_b = false; $scope.safety_and_security_11_1_1_H_c = false; $scope.safety_and_security_11_1_1_H_cm = ''; } else if(data.safety_and_security_11_1_1_H  == 3){ $scope.safety_and_security_11_1_1_H = data.safety_and_security_11_1_1_H; $scope.safety_and_security_11_1_1_H = false; $scope.safety_and_security_11_1_1_H_b = true; $scope.safety_and_security_11_1_1_H_c = false; $scope.safety_and_security_11_1_1_H_cm = ''; } else if(data.safety_and_security_11_1_1_H  == ){ $scope.safety_and_security_11_1_1_H = data.safety_and_security_11_1_1_H; $scope.safety_and_security_11_1_1_H = false; $scope.safety_and_security_11_1_1_H_b = false; $scope.safety_and_security_11_1_1_H_c = true; $scope.safety_and_security_11_1_1_H_cm = ''; }else if( ((data.safety_and_security_11_1_1_H  > 0 ) && (data.safety_and_security_11_1_1_H  < 3)) || ((data.safety_and_security_11_1_1_H  > 3 ) && (data.safety_and_security_11_1_1_H  < )) )
				{ $scope.safety_and_security_11_1_1_H_cm = data.safety_and_security_11_1_1_H; $scope.safety_and_security_11_1_1_H = false; $scope.safety_and_security_11_1_1_H_b = false;  $scope.safety_and_security_11_1_1_H_c = false; $scope.safety_and_security_11_1_1_H = ''; }else{ $scope.safety_and_security_11_1_1_H = ''; $scope.safety_and_security_11_1_1_H_cm = ''; $scope.safety_and_security_11_1_1_H = false; $scope.safety_and_security_11_1_1_H_b = false; $scope.safety_and_security_11_1_1_H_c = false; }
				if(data.safety_and_security_11_1_1_I == 1){ $scope.safety_and_security_11_1_1_I = data.safety_and_security_11_1_1_I; $scope.safety_and_security_11_1_1_I = true; $scope.safety_and_security_11_1_1_I_b = false; $scope.safety_and_security_11_1_1_I_c = false; $scope.safety_and_security_11_1_1_I_cm = ''; } else if(data.safety_and_security_11_1_1_I  == 3){ $scope.safety_and_security_11_1_1_I = data.safety_and_security_11_1_1_I; $scope.safety_and_security_11_1_1_I = false; $scope.safety_and_security_11_1_1_I_b = true; $scope.safety_and_security_11_1_1_I_c = false; $scope.safety_and_security_11_1_1_I_cm = ''; } else if(data.safety_and_security_11_1_1_I  == 5){ 
				$scope.safety_and_security_11_1_1_I = data.safety_and_security_11_1_1_I; $scope.safety_and_security_11_1_1_I = false; $scope.safety_and_security_11_1_1_I_b = false; $scope.safety_and_security_11_1_1_I_c = true; $scope.safety_and_security_11_1_1_I_cm = ''; } else if( ((data.safety_and_security_11_1_1_I  >= 0 ) && (data.safety_and_security_11_1_1_I  < 1)) || ((data.safety_and_security_11_1_1_I  > 1 ) && (data.safety_and_security_11_1_1_I  < 3)) || ((data.safety_and_security_11_1_1_I  > 3 ) && (data.safety_and_security_11_1_1_I  < 5)) ){ $scope.safety_and_security_11_1_1_I_cm = data.safety_and_security_11_1_1_I; $scope.safety_and_security_11_1_1_I = false; $scope.safety_and_security_11_1_1_I_b = false; $scope.safety_and_security_11_1_1_I_c = false; $scope.safety_and_security_11_1_1_I = ''; }else{ $scope.safety_and_security_11_1_1_I = ''; $scope.safety_and_security_11_1_1_I_cm = ''; $scope.safety_and_security_11_1_1_I = false; $scope.safety_and_security_11_1_1_I_b = false; $scope.safety_and_security_11_1_1_I_c = false;}
				$scope.safety_and_security_11_2_1_text = data.safety_and_security_11_2_1_text;
				if(data.safety_and_security_11_2_1_A == 0){ $scope.safety_and_security_11_2_1_A = data.safety_and_security_11_2_1_A; $scope.safety_and_security_11_2_1_A = true; $scope.safety_and_security_11_2_1_A_b = false; $scope.safety_and_security_11_2_1_A_c = false; $scope.safety_and_security_11_2_1_A_cm = ''; } else if(data.safety_and_security_11_2_1_A  == 15){ $scope.safety_and_security_11_2_1_A = data.safety_and_security_11_2_1_A; $scope.safety_and_security_11_2_1_A = false; $scope.safety_and_security_11_2_1_A_b = true; $scope.safety_and_security_11_2_1_A_c = false; $scope.safety_and_security_11_2_1_A_cm = ''; } else if(data.safety_and_security_11_2_1_A  == ){ $scope.safety_and_security_11_2_1_A = data.safety_and_security_11_2_1_A; $scope.safety_and_security_11_2_1_A = false; $scope.safety_and_security_11_2_1_A_b = false; $scope.safety_and_security_11_2_1_A_c = true; $scope.safety_and_security_11_2_1_A_cm = ''; }else if( ((data.safety_and_security_11_2_1_A  > 0 ) && (data.safety_and_security_11_2_1_A  < 15)) || ((data.safety_and_security_11_2_1_A  > 15 ) && (data.safety_and_security_11_2_1_A  < )) )
				{ $scope.safety_and_security_11_2_1_A_cm = data.safety_and_security_11_2_1_A; $scope.safety_and_security_11_2_1_A = false; $scope.safety_and_security_11_2_1_A_b = false;  $scope.safety_and_security_11_2_1_A_c = false; $scope.safety_and_security_11_2_1_A = ''; }else{ $scope.safety_and_security_11_2_1_A = ''; $scope.safety_and_security_11_2_1_A_cm = ''; $scope.safety_and_security_11_2_1_A = false; $scope.safety_and_security_11_2_1_A_b = false; $scope.safety_and_security_11_2_1_A_c = false; }
				if(data.safety_and_security_11_2_1_B == 2){ $scope.safety_and_security_11_2_1_B = data.safety_and_security_11_2_1_B; $scope.safety_and_security_11_2_1_B = true; $scope.safety_and_security_11_2_1_B_b = false; $scope.safety_and_security_11_2_1_B_c = false; $scope.safety_and_security_11_2_1_B_cm = ''; } else if(data.safety_and_security_11_2_1_B  == 3){ $scope.safety_and_security_11_2_1_B = data.safety_and_security_11_2_1_B; $scope.safety_and_security_11_2_1_B = false; $scope.safety_and_security_11_2_1_B_b = true; $scope.safety_and_security_11_2_1_B_c = false; $scope.safety_and_security_11_2_1_B_cm = ''; } else if(data.safety_and_security_11_2_1_B  == 5){ 
				$scope.safety_and_security_11_2_1_B = data.safety_and_security_11_2_1_B; $scope.safety_and_security_11_2_1_B = false; $scope.safety_and_security_11_2_1_B_b = false; $scope.safety_and_security_11_2_1_B_c = true; $scope.safety_and_security_11_2_1_B_cm = ''; } else if( ((data.safety_and_security_11_2_1_B  >= 0 ) && (data.safety_and_security_11_2_1_B  < 2)) || ((data.safety_and_security_11_2_1_B  > 2 ) && (data.safety_and_security_11_2_1_B  < 3)) || ((data.safety_and_security_11_2_1_B  > 3 ) && (data.safety_and_security_11_2_1_B  < 5)) ){ $scope.safety_and_security_11_2_1_B_cm = data.safety_and_security_11_2_1_B; $scope.safety_and_security_11_2_1_B = false; $scope.safety_and_security_11_2_1_B_b = false; $scope.safety_and_security_11_2_1_B_c = false; $scope.safety_and_security_11_2_1_B = ''; }else{ $scope.safety_and_security_11_2_1_B = ''; $scope.safety_and_security_11_2_1_B_cm = ''; $scope.safety_and_security_11_2_1_B = false; $scope.safety_and_security_11_2_1_B_b = false; $scope.safety_and_security_11_2_1_B_c = false;}
				$scope.safety_and_security_11_3_1_text = data.safety_and_security_11_3_1_text;
				if(data.safety_and_security_11_3_1_A == 0){ $scope.safety_and_security_11_3_1_A = data.safety_and_security_11_3_1_A; $scope.safety_and_security_11_3_1_A = true; $scope.safety_and_security_11_3_1_A_b = false; $scope.safety_and_security_11_3_1_A_c = false; $scope.safety_and_security_11_3_1_A_cm = ''; } else if(data.safety_and_security_11_3_1_A  == 1){ $scope.safety_and_security_11_3_1_A = data.safety_and_security_11_3_1_A; $scope.safety_and_security_11_3_1_A = false; $scope.safety_and_security_11_3_1_A_b = true; $scope.safety_and_security_11_3_1_A_c = false; $scope.safety_and_security_11_3_1_A_cm = ''; } else if(data.safety_and_security_11_3_1_A  == ){ $scope.safety_and_security_11_3_1_A = data.safety_and_security_11_3_1_A; $scope.safety_and_security_11_3_1_A = false; $scope.safety_and_security_11_3_1_A_b = false; $scope.safety_and_security_11_3_1_A_c = true; $scope.safety_and_security_11_3_1_A_cm = ''; }else if( ((data.safety_and_security_11_3_1_A  > 0 ) && (data.safety_and_security_11_3_1_A  < 1)) || ((data.safety_and_security_11_3_1_A  > 1 ) && (data.safety_and_security_11_3_1_A  < )) )
				{ $scope.safety_and_security_11_3_1_A_cm = data.safety_and_security_11_3_1_A; $scope.safety_and_security_11_3_1_A = false; $scope.safety_and_security_11_3_1_A_b = false;  $scope.safety_and_security_11_3_1_A_c = false; $scope.safety_and_security_11_3_1_A = ''; }else{ $scope.safety_and_security_11_3_1_A = ''; $scope.safety_and_security_11_3_1_A_cm = ''; $scope.safety_and_security_11_3_1_A = false; $scope.safety_and_security_11_3_1_A_b = false; $scope.safety_and_security_11_3_1_A_c = false; }
				if(data.safety_and_security_11_3_1_B == 1){ $scope.safety_and_security_11_3_1_B = data.safety_and_security_11_3_1_B; $scope.safety_and_security_11_3_1_B = true; $scope.safety_and_security_11_3_1_B_b = false; $scope.safety_and_security_11_3_1_B_c = false; $scope.safety_and_security_11_3_1_B_cm = ''; } else if(data.safety_and_security_11_3_1_B  == 2){ $scope.safety_and_security_11_3_1_B = data.safety_and_security_11_3_1_B; $scope.safety_and_security_11_3_1_B = false; $scope.safety_and_security_11_3_1_B_b = true; $scope.safety_and_security_11_3_1_B_c = false; $scope.safety_and_security_11_3_1_B_cm = ''; } else if(data.safety_and_security_11_3_1_B  == 3){ 
				$scope.safety_and_security_11_3_1_B = data.safety_and_security_11_3_1_B; $scope.safety_and_security_11_3_1_B = false; $scope.safety_and_security_11_3_1_B_b = false; $scope.safety_and_security_11_3_1_B_c = true; $scope.safety_and_security_11_3_1_B_cm = ''; } else if( ((data.safety_and_security_11_3_1_B  >= 0 ) && (data.safety_and_security_11_3_1_B  < 1)) || ((data.safety_and_security_11_3_1_B  > 1 ) && (data.safety_and_security_11_3_1_B  < 2)) || ((data.safety_and_security_11_3_1_B  > 2 ) && (data.safety_and_security_11_3_1_B  < 3)) ){ $scope.safety_and_security_11_3_1_B_cm = data.safety_and_security_11_3_1_B; $scope.safety_and_security_11_3_1_B = false; $scope.safety_and_security_11_3_1_B_b = false; $scope.safety_and_security_11_3_1_B_c = false; $scope.safety_and_security_11_3_1_B = ''; }else{ $scope.safety_and_security_11_3_1_B = ''; $scope.safety_and_security_11_3_1_B_cm = ''; $scope.safety_and_security_11_3_1_B = false; $scope.safety_and_security_11_3_1_B_b = false; $scope.safety_and_security_11_3_1_B_c = false;}
				if(data.safety_and_security_11_3_1_C == 0){ $scope.safety_and_security_11_3_1_C = data.safety_and_security_11_3_1_C; $scope.safety_and_security_11_3_1_C = true; $scope.safety_and_security_11_3_1_C_b = false; $scope.safety_and_security_11_3_1_C_c = false; $scope.safety_and_security_11_3_1_C_cm = ''; } else if(data.safety_and_security_11_3_1_C  == 2){ $scope.safety_and_security_11_3_1_C = data.safety_and_security_11_3_1_C; $scope.safety_and_security_11_3_1_C = false; $scope.safety_and_security_11_3_1_C_b = true; $scope.safety_and_security_11_3_1_C_c = false; $scope.safety_and_security_11_3_1_C_cm = ''; } else if(data.safety_and_security_11_3_1_C  == ){ $scope.safety_and_security_11_3_1_C = data.safety_and_security_11_3_1_C; $scope.safety_and_security_11_3_1_C = false; $scope.safety_and_security_11_3_1_C_b = false; $scope.safety_and_security_11_3_1_C_c = true; $scope.safety_and_security_11_3_1_C_cm = ''; }else if( ((data.safety_and_security_11_3_1_C  > 0 ) && (data.safety_and_security_11_3_1_C  < 2)) || ((data.safety_and_security_11_3_1_C  > 2 ) && (data.safety_and_security_11_3_1_C  < )) )
				{ $scope.safety_and_security_11_3_1_C_cm = data.safety_and_security_11_3_1_C; $scope.safety_and_security_11_3_1_C = false; $scope.safety_and_security_11_3_1_C_b = false;  $scope.safety_and_security_11_3_1_C_c = false; $scope.safety_and_security_11_3_1_C = ''; }else{ $scope.safety_and_security_11_3_1_C = ''; $scope.safety_and_security_11_3_1_C_cm = ''; $scope.safety_and_security_11_3_1_C = false; $scope.safety_and_security_11_3_1_C_b = false; $scope.safety_and_security_11_3_1_C_c = false; }
				if(data.safety_and_security_11_3_1_D == 0){ $scope.safety_and_security_11_3_1_D = data.safety_and_security_11_3_1_D; $scope.safety_and_security_11_3_1_D = true; $scope.safety_and_security_11_3_1_D_b = false; $scope.safety_and_security_11_3_1_D_c = false; $scope.safety_and_security_11_3_1_D_cm = ''; } else if(data.safety_and_security_11_3_1_D  == 2){ $scope.safety_and_security_11_3_1_D = data.safety_and_security_11_3_1_D; $scope.safety_and_security_11_3_1_D = false; $scope.safety_and_security_11_3_1_D_b = true; $scope.safety_and_security_11_3_1_D_c = false; $scope.safety_and_security_11_3_1_D_cm = ''; } else if(data.safety_and_security_11_3_1_D  == 3){ $scope.safety_and_security_11_3_1_D = data.safety_and_security_11_3_1_D; $scope.safety_and_security_11_3_1_D = false; $scope.safety_and_security_11_3_1_D_b = false; $scope.safety_and_security_11_3_1_D_c = true; $scope.safety_and_security_11_3_1_D_cm = ''; }else if( ((data.safety_and_security_11_3_1_D  > 0 ) && (data.safety_and_security_11_3_1_D  < 2)) || ((data.safety_and_security_11_3_1_D  > 2 ) && (data.safety_and_security_11_3_1_D  < 3)) )
				{ $scope.safety_and_security_11_3_1_D_cm = data.safety_and_security_11_3_1_D; $scope.safety_and_security_11_3_1_D = false; $scope.safety_and_security_11_3_1_D_b = false;  $scope.safety_and_security_11_3_1_D_c = false; $scope.safety_and_security_11_3_1_D = ''; }else{ $scope.safety_and_security_11_3_1_D = ''; $scope.safety_and_security_11_3_1_D_cm = ''; $scope.safety_and_security_11_3_1_D = false; $scope.safety_and_security_11_3_1_D_b = false; $scope.safety_and_security_11_3_1_D_c = false; }
				if(data.safety_and_security_11_3_1_E == 0){ $scope.safety_and_security_11_3_1_E = data.safety_and_security_11_3_1_E; $scope.safety_and_security_11_3_1_E = true; $scope.safety_and_security_11_3_1_E_b = false; $scope.safety_and_security_11_3_1_E_c = false; $scope.safety_and_security_11_3_1_E_cm = ''; } else if(data.safety_and_security_11_3_1_E  == 2){ $scope.safety_and_security_11_3_1_E = data.safety_and_security_11_3_1_E; $scope.safety_and_security_11_3_1_E = false; $scope.safety_and_security_11_3_1_E_b = true; $scope.safety_and_security_11_3_1_E_c = false; $scope.safety_and_security_11_3_1_E_cm = ''; } else if(data.safety_and_security_11_3_1_E  == ){ $scope.safety_and_security_11_3_1_E = data.safety_and_security_11_3_1_E; $scope.safety_and_security_11_3_1_E = false; $scope.safety_and_security_11_3_1_E_b = false; $scope.safety_and_security_11_3_1_E_c = true; $scope.safety_and_security_11_3_1_E_cm = ''; }else if( ((data.safety_and_security_11_3_1_E  > 0 ) && (data.safety_and_security_11_3_1_E  < 2)) || ((data.safety_and_security_11_3_1_E  > 2 ) && (data.safety_and_security_11_3_1_E  < )) )
				{ $scope.safety_and_security_11_3_1_E_cm = data.safety_and_security_11_3_1_E; $scope.safety_and_security_11_3_1_E = false; $scope.safety_and_security_11_3_1_E_b = false;  $scope.safety_and_security_11_3_1_E_c = false; $scope.safety_and_security_11_3_1_E = ''; }else{ $scope.safety_and_security_11_3_1_E = ''; $scope.safety_and_security_11_3_1_E_cm = ''; $scope.safety_and_security_11_3_1_E = false; $scope.safety_and_security_11_3_1_E_b = false; $scope.safety_and_security_11_3_1_E_c = false; }
				if(data.safety_and_security_11_3_1_F == 1){ $scope.safety_and_security_11_3_1_F = data.safety_and_security_11_3_1_F; $scope.safety_and_security_11_3_1_F = true; $scope.safety_and_security_11_3_1_F_b = false; $scope.safety_and_security_11_3_1_F_c = false; $scope.safety_and_security_11_3_1_F_cm = ''; } else if(data.safety_and_security_11_3_1_F  == 2){ $scope.safety_and_security_11_3_1_F = data.safety_and_security_11_3_1_F; $scope.safety_and_security_11_3_1_F = false; $scope.safety_and_security_11_3_1_F_b = true; $scope.safety_and_security_11_3_1_F_c = false; $scope.safety_and_security_11_3_1_F_cm = ''; } else if(data.safety_and_security_11_3_1_F  == 3){ 
				$scope.safety_and_security_11_3_1_F = data.safety_and_security_11_3_1_F; $scope.safety_and_security_11_3_1_F = false; $scope.safety_and_security_11_3_1_F_b = false; $scope.safety_and_security_11_3_1_F_c = true; $scope.safety_and_security_11_3_1_F_cm = ''; } else if( ((data.safety_and_security_11_3_1_F  >= 0 ) && (data.safety_and_security_11_3_1_F  < 1)) || ((data.safety_and_security_11_3_1_F  > 1 ) && (data.safety_and_security_11_3_1_F  < 2)) || ((data.safety_and_security_11_3_1_F  > 2 ) && (data.safety_and_security_11_3_1_F  < 3)) ){ $scope.safety_and_security_11_3_1_F_cm = data.safety_and_security_11_3_1_F; $scope.safety_and_security_11_3_1_F = false; $scope.safety_and_security_11_3_1_F_b = false; $scope.safety_and_security_11_3_1_F_c = false; $scope.safety_and_security_11_3_1_F = ''; }else{ $scope.safety_and_security_11_3_1_F = ''; $scope.safety_and_security_11_3_1_F_cm = ''; $scope.safety_and_security_11_3_1_F = false; $scope.safety_and_security_11_3_1_F_b = false; $scope.safety_and_security_11_3_1_F_c = false;}
				if(data.safety_and_security_11_3_1_G == 0){ $scope.safety_and_security_11_3_1_G = data.safety_and_security_11_3_1_G; $scope.safety_and_security_11_3_1_G = true; $scope.safety_and_security_11_3_1_G_b = false; $scope.safety_and_security_11_3_1_G_c = false; $scope.safety_and_security_11_3_1_G_cm = ''; } else if(data.safety_and_security_11_3_1_G  == 3){ $scope.safety_and_security_11_3_1_G = data.safety_and_security_11_3_1_G; $scope.safety_and_security_11_3_1_G = false; $scope.safety_and_security_11_3_1_G_b = true; $scope.safety_and_security_11_3_1_G_c = false; $scope.safety_and_security_11_3_1_G_cm = ''; } else if(data.safety_and_security_11_3_1_G  == ){ $scope.safety_and_security_11_3_1_G = data.safety_and_security_11_3_1_G; $scope.safety_and_security_11_3_1_G = false; $scope.safety_and_security_11_3_1_G_b = false; $scope.safety_and_security_11_3_1_G_c = true; $scope.safety_and_security_11_3_1_G_cm = ''; }else if( ((data.safety_and_security_11_3_1_G  > 0 ) && (data.safety_and_security_11_3_1_G  < 3)) || ((data.safety_and_security_11_3_1_G  > 3 ) && (data.safety_and_security_11_3_1_G  < )) )
				{ $scope.safety_and_security_11_3_1_G_cm = data.safety_and_security_11_3_1_G; $scope.safety_and_security_11_3_1_G = false; $scope.safety_and_security_11_3_1_G_b = false;  $scope.safety_and_security_11_3_1_G_c = false; $scope.safety_and_security_11_3_1_G = ''; }else{ $scope.safety_and_security_11_3_1_G = ''; $scope.safety_and_security_11_3_1_G_cm = ''; $scope.safety_and_security_11_3_1_G = false; $scope.safety_and_security_11_3_1_G_b = false; $scope.safety_and_security_11_3_1_G_c = false; }
				if(data.safety_and_security_11_3_1_H == 0){ $scope.safety_and_security_11_3_1_H = data.safety_and_security_11_3_1_H; $scope.safety_and_security_11_3_1_H = true; $scope.safety_and_security_11_3_1_H_b = false; $scope.safety_and_security_11_3_1_H_c = false; $scope.safety_and_security_11_3_1_H_cm = ''; } else if(data.safety_and_security_11_3_1_H  == 3){ $scope.safety_and_security_11_3_1_H = data.safety_and_security_11_3_1_H; $scope.safety_and_security_11_3_1_H = false; $scope.safety_and_security_11_3_1_H_b = true; $scope.safety_and_security_11_3_1_H_c = false; $scope.safety_and_security_11_3_1_H_cm = ''; } else if(data.safety_and_security_11_3_1_H  == ){ $scope.safety_and_security_11_3_1_H = data.safety_and_security_11_3_1_H; $scope.safety_and_security_11_3_1_H = false; $scope.safety_and_security_11_3_1_H_b = false; $scope.safety_and_security_11_3_1_H_c = true; $scope.safety_and_security_11_3_1_H_cm = ''; }else if( ((data.safety_and_security_11_3_1_H  > 0 ) && (data.safety_and_security_11_3_1_H  < 3)) || ((data.safety_and_security_11_3_1_H  > 3 ) && (data.safety_and_security_11_3_1_H  < )) )
				{ $scope.safety_and_security_11_3_1_H_cm = data.safety_and_security_11_3_1_H; $scope.safety_and_security_11_3_1_H = false; $scope.safety_and_security_11_3_1_H_b = false;  $scope.safety_and_security_11_3_1_H_c = false; $scope.safety_and_security_11_3_1_H = ''; }else{ $scope.safety_and_security_11_3_1_H = ''; $scope.safety_and_security_11_3_1_H_cm = ''; $scope.safety_and_security_11_3_1_H = false; $scope.safety_and_security_11_3_1_H_b = false; $scope.safety_and_security_11_3_1_H_c = false; }
				$scope.safety_and_security_11_4_1_text = data.safety_and_security_11_4_1_text;
				if(data.safety_and_security_11_4_1_A == 0){ $scope.safety_and_security_11_4_1_A = data.safety_and_security_11_4_1_A; $scope.safety_and_security_11_4_1_A = true; $scope.safety_and_security_11_4_1_A_b = false; $scope.safety_and_security_11_4_1_A_c = false; $scope.safety_and_security_11_4_1_A_cm = ''; } else if(data.safety_and_security_11_4_1_A  == 10){ $scope.safety_and_security_11_4_1_A = data.safety_and_security_11_4_1_A; $scope.safety_and_security_11_4_1_A = false; $scope.safety_and_security_11_4_1_A_b = true; $scope.safety_and_security_11_4_1_A_c = false; $scope.safety_and_security_11_4_1_A_cm = ''; } else if(data.safety_and_security_11_4_1_A  == ){ $scope.safety_and_security_11_4_1_A = data.safety_and_security_11_4_1_A; $scope.safety_and_security_11_4_1_A = false; $scope.safety_and_security_11_4_1_A_b = false; $scope.safety_and_security_11_4_1_A_c = true; $scope.safety_and_security_11_4_1_A_cm = ''; }else if( ((data.safety_and_security_11_4_1_A  > 0 ) && (data.safety_and_security_11_4_1_A  < 10)) || ((data.safety_and_security_11_4_1_A  > 10 ) && (data.safety_and_security_11_4_1_A  < )) )
				{ $scope.safety_and_security_11_4_1_A_cm = data.safety_and_security_11_4_1_A; $scope.safety_and_security_11_4_1_A = false; $scope.safety_and_security_11_4_1_A_b = false;  $scope.safety_and_security_11_4_1_A_c = false; $scope.safety_and_security_11_4_1_A = ''; }else{ $scope.safety_and_security_11_4_1_A = ''; $scope.safety_and_security_11_4_1_A_cm = ''; $scope.safety_and_security_11_4_1_A = false; $scope.safety_and_security_11_4_1_A_b = false; $scope.safety_and_security_11_4_1_A_c = false; }
				if(data.safety_and_security_11_4_1_B == 5){ $scope.safety_and_security_11_4_1_B = data.safety_and_security_11_4_1_B; $scope.safety_and_security_11_4_1_B = true; $scope.safety_and_security_11_4_1_B_b = false; $scope.safety_and_security_11_4_1_B_c = false; $scope.safety_and_security_11_4_1_B_cm = ''; } else if(data.safety_and_security_11_4_1_B  == 7){ $scope.safety_and_security_11_4_1_B = data.safety_and_security_11_4_1_B; $scope.safety_and_security_11_4_1_B = false; $scope.safety_and_security_11_4_1_B_b = true; $scope.safety_and_security_11_4_1_B_c = false; $scope.safety_and_security_11_4_1_B_cm = ''; } else if(data.safety_and_security_11_4_1_B  == 10){ 
				$scope.safety_and_security_11_4_1_B = data.safety_and_security_11_4_1_B; $scope.safety_and_security_11_4_1_B = false; $scope.safety_and_security_11_4_1_B_b = false; $scope.safety_and_security_11_4_1_B_c = true; $scope.safety_and_security_11_4_1_B_cm = ''; } else if( ((data.safety_and_security_11_4_1_B  >= 0 ) && (data.safety_and_security_11_4_1_B  < 5)) || ((data.safety_and_security_11_4_1_B  > 5 ) && (data.safety_and_security_11_4_1_B  < 7)) || ((data.safety_and_security_11_4_1_B  > 7 ) && (data.safety_and_security_11_4_1_B  < 10)) ){ $scope.safety_and_security_11_4_1_B_cm = data.safety_and_security_11_4_1_B; $scope.safety_and_security_11_4_1_B = false; $scope.safety_and_security_11_4_1_B_b = false; $scope.safety_and_security_11_4_1_B_c = false; $scope.safety_and_security_11_4_1_B = ''; }else{ $scope.safety_and_security_11_4_1_B = ''; $scope.safety_and_security_11_4_1_B_cm = ''; $scope.safety_and_security_11_4_1_B = false; $scope.safety_and_security_11_4_1_B_b = false; $scope.safety_and_security_11_4_1_B_c = false;}
				if(data.safety_and_security_11_4_1_C == 5){ $scope.safety_and_security_11_4_1_C = data.safety_and_security_11_4_1_C; $scope.safety_and_security_11_4_1_C = true; $scope.safety_and_security_11_4_1_C_b = false; $scope.safety_and_security_11_4_1_C_c = false; $scope.safety_and_security_11_4_1_C_cm = ''; } else if(data.safety_and_security_11_4_1_C  == 7){ $scope.safety_and_security_11_4_1_C = data.safety_and_security_11_4_1_C; $scope.safety_and_security_11_4_1_C = false; $scope.safety_and_security_11_4_1_C_b = true; $scope.safety_and_security_11_4_1_C_c = false; $scope.safety_and_security_11_4_1_C_cm = ''; } else if(data.safety_and_security_11_4_1_C  == 10){ 
				$scope.safety_and_security_11_4_1_C = data.safety_and_security_11_4_1_C; $scope.safety_and_security_11_4_1_C = false; $scope.safety_and_security_11_4_1_C_b = false; $scope.safety_and_security_11_4_1_C_c = true; $scope.safety_and_security_11_4_1_C_cm = ''; } else if( ((data.safety_and_security_11_4_1_C  >= 0 ) && (data.safety_and_security_11_4_1_C  < 5)) || ((data.safety_and_security_11_4_1_C  > 5 ) && (data.safety_and_security_11_4_1_C  < 7)) || ((data.safety_and_security_11_4_1_C  > 7 ) && (data.safety_and_security_11_4_1_C  < 10)) ){ $scope.safety_and_security_11_4_1_C_cm = data.safety_and_security_11_4_1_C; $scope.safety_and_security_11_4_1_C = false; $scope.safety_and_security_11_4_1_C_b = false; $scope.safety_and_security_11_4_1_C_c = false; $scope.safety_and_security_11_4_1_C = ''; }else{ $scope.safety_and_security_11_4_1_C = ''; $scope.safety_and_security_11_4_1_C_cm = ''; $scope.safety_and_security_11_4_1_C = false; $scope.safety_and_security_11_4_1_C_b = false; $scope.safety_and_security_11_4_1_C_c = false;}
				$scope.safety_and_security_11_5_1_text = data.safety_and_security_11_5_1_text;
				if(data.safety_and_security_11_5_1_A == 0){ $scope.safety_and_security_11_5_1_A = data.safety_and_security_11_5_1_A; $scope.safety_and_security_11_5_1_A = true; $scope.safety_and_security_11_5_1_A_b = false; $scope.safety_and_security_11_5_1_A_c = false; $scope.safety_and_security_11_5_1_A_cm = ''; } else if(data.safety_and_security_11_5_1_A  == 3){ $scope.safety_and_security_11_5_1_A = data.safety_and_security_11_5_1_A; $scope.safety_and_security_11_5_1_A = false; $scope.safety_and_security_11_5_1_A_b = true; $scope.safety_and_security_11_5_1_A_c = false; $scope.safety_and_security_11_5_1_A_cm = ''; } else if(data.safety_and_security_11_5_1_A  == 6){ $scope.safety_and_security_11_5_1_A = data.safety_and_security_11_5_1_A; $scope.safety_and_security_11_5_1_A = false; $scope.safety_and_security_11_5_1_A_b = false; $scope.safety_and_security_11_5_1_A_c = true; $scope.safety_and_security_11_5_1_A_cm = ''; }else if( ((data.safety_and_security_11_5_1_A  > 0 ) && (data.safety_and_security_11_5_1_A  < 3)) || ((data.safety_and_security_11_5_1_A  > 3 ) && (data.safety_and_security_11_5_1_A  < 6)) )
				{ $scope.safety_and_security_11_5_1_A_cm = data.safety_and_security_11_5_1_A; $scope.safety_and_security_11_5_1_A = false; $scope.safety_and_security_11_5_1_A_b = false;  $scope.safety_and_security_11_5_1_A_c = false; $scope.safety_and_security_11_5_1_A = ''; }else{ $scope.safety_and_security_11_5_1_A = ''; $scope.safety_and_security_11_5_1_A_cm = ''; $scope.safety_and_security_11_5_1_A = false; $scope.safety_and_security_11_5_1_A_b = false; $scope.safety_and_security_11_5_1_A_c = false; }
				if(data.safety_and_security_11_5_1_B == 0){ $scope.safety_and_security_11_5_1_B = data.safety_and_security_11_5_1_B; $scope.safety_and_security_11_5_1_B = true; $scope.safety_and_security_11_5_1_B_b = false; $scope.safety_and_security_11_5_1_B_c = false; $scope.safety_and_security_11_5_1_B_cm = ''; } else if(data.safety_and_security_11_5_1_B  == 6){ $scope.safety_and_security_11_5_1_B = data.safety_and_security_11_5_1_B; $scope.safety_and_security_11_5_1_B = false; $scope.safety_and_security_11_5_1_B_b = true; $scope.safety_and_security_11_5_1_B_c = false; $scope.safety_and_security_11_5_1_B_cm = ''; } else if(data.safety_and_security_11_5_1_B  == ){ $scope.safety_and_security_11_5_1_B = data.safety_and_security_11_5_1_B; $scope.safety_and_security_11_5_1_B = false; $scope.safety_and_security_11_5_1_B_b = false; $scope.safety_and_security_11_5_1_B_c = true; $scope.safety_and_security_11_5_1_B_cm = ''; }else if( ((data.safety_and_security_11_5_1_B  > 0 ) && (data.safety_and_security_11_5_1_B  < 6)) || ((data.safety_and_security_11_5_1_B  > 6 ) && (data.safety_and_security_11_5_1_B  < )) )
				{ $scope.safety_and_security_11_5_1_B_cm = data.safety_and_security_11_5_1_B; $scope.safety_and_security_11_5_1_B = false; $scope.safety_and_security_11_5_1_B_b = false;  $scope.safety_and_security_11_5_1_B_c = false; $scope.safety_and_security_11_5_1_B = ''; }else{ $scope.safety_and_security_11_5_1_B = ''; $scope.safety_and_security_11_5_1_B_cm = ''; $scope.safety_and_security_11_5_1_B = false; $scope.safety_and_security_11_5_1_B_b = false; $scope.safety_and_security_11_5_1_B_c = false; }
				if(data.safety_and_security_11_5_1_C == 0){ $scope.safety_and_security_11_5_1_C = data.safety_and_security_11_5_1_C; $scope.safety_and_security_11_5_1_C = true; $scope.safety_and_security_11_5_1_C_b = false; $scope.safety_and_security_11_5_1_C_c = false; $scope.safety_and_security_11_5_1_C_cm = ''; } else if(data.safety_and_security_11_5_1_C  == 6){ $scope.safety_and_security_11_5_1_C = data.safety_and_security_11_5_1_C; $scope.safety_and_security_11_5_1_C = false; $scope.safety_and_security_11_5_1_C_b = true; $scope.safety_and_security_11_5_1_C_c = false; $scope.safety_and_security_11_5_1_C_cm = ''; } else if(data.safety_and_security_11_5_1_C  == ){ $scope.safety_and_security_11_5_1_C = data.safety_and_security_11_5_1_C; $scope.safety_and_security_11_5_1_C = false; $scope.safety_and_security_11_5_1_C_b = false; $scope.safety_and_security_11_5_1_C_c = true; $scope.safety_and_security_11_5_1_C_cm = ''; }else if( ((data.safety_and_security_11_5_1_C  > 0 ) && (data.safety_and_security_11_5_1_C  < 6)) || ((data.safety_and_security_11_5_1_C  > 6 ) && (data.safety_and_security_11_5_1_C  < )) )
				{ $scope.safety_and_security_11_5_1_C_cm = data.safety_and_security_11_5_1_C; $scope.safety_and_security_11_5_1_C = false; $scope.safety_and_security_11_5_1_C_b = false;  $scope.safety_and_security_11_5_1_C_c = false; $scope.safety_and_security_11_5_1_C = ''; }else{ $scope.safety_and_security_11_5_1_C = ''; $scope.safety_and_security_11_5_1_C_cm = ''; $scope.safety_and_security_11_5_1_C = false; $scope.safety_and_security_11_5_1_C_b = false; $scope.safety_and_security_11_5_1_C_c = false; }
				if(data.safety_and_security_11_5_1_D == 0){ $scope.safety_and_security_11_5_1_D = data.safety_and_security_11_5_1_D; $scope.safety_and_security_11_5_1_D = true; $scope.safety_and_security_11_5_1_D_b = false; $scope.safety_and_security_11_5_1_D_c = false; $scope.safety_and_security_11_5_1_D_cm = ''; } else if(data.safety_and_security_11_5_1_D  == 6){ $scope.safety_and_security_11_5_1_D = data.safety_and_security_11_5_1_D; $scope.safety_and_security_11_5_1_D = false; $scope.safety_and_security_11_5_1_D_b = true; $scope.safety_and_security_11_5_1_D_c = false; $scope.safety_and_security_11_5_1_D_cm = ''; } else if(data.safety_and_security_11_5_1_D  == ){ $scope.safety_and_security_11_5_1_D = data.safety_and_security_11_5_1_D; $scope.safety_and_security_11_5_1_D = false; $scope.safety_and_security_11_5_1_D_b = false; $scope.safety_and_security_11_5_1_D_c = true; $scope.safety_and_security_11_5_1_D_cm = ''; }else if( ((data.safety_and_security_11_5_1_D  > 0 ) && (data.safety_and_security_11_5_1_D  < 6)) || ((data.safety_and_security_11_5_1_D  > 6 ) && (data.safety_and_security_11_5_1_D  < )) )
				{ $scope.safety_and_security_11_5_1_D_cm = data.safety_and_security_11_5_1_D; $scope.safety_and_security_11_5_1_D = false; $scope.safety_and_security_11_5_1_D_b = false;  $scope.safety_and_security_11_5_1_D_c = false; $scope.safety_and_security_11_5_1_D = ''; }else{ $scope.safety_and_security_11_5_1_D = ''; $scope.safety_and_security_11_5_1_D_cm = ''; $scope.safety_and_security_11_5_1_D = false; $scope.safety_and_security_11_5_1_D_b = false; $scope.safety_and_security_11_5_1_D_c = false; }
				if(data.safety_and_security_11_5_1_E == 0){ $scope.safety_and_security_11_5_1_E = data.safety_and_security_11_5_1_E; $scope.safety_and_security_11_5_1_E = true; $scope.safety_and_security_11_5_1_E_b = false; $scope.safety_and_security_11_5_1_E_c = false; $scope.safety_and_security_11_5_1_E_cm = ''; } else if(data.safety_and_security_11_5_1_E  == 6){ $scope.safety_and_security_11_5_1_E = data.safety_and_security_11_5_1_E; $scope.safety_and_security_11_5_1_E = false; $scope.safety_and_security_11_5_1_E_b = true; $scope.safety_and_security_11_5_1_E_c = false; $scope.safety_and_security_11_5_1_E_cm = ''; } else if(data.safety_and_security_11_5_1_E  == ){ $scope.safety_and_security_11_5_1_E = data.safety_and_security_11_5_1_E; $scope.safety_and_security_11_5_1_E = false; $scope.safety_and_security_11_5_1_E_b = false; $scope.safety_and_security_11_5_1_E_c = true; $scope.safety_and_security_11_5_1_E_cm = ''; }else if( ((data.safety_and_security_11_5_1_E  > 0 ) && (data.safety_and_security_11_5_1_E  < 6)) || ((data.safety_and_security_11_5_1_E  > 6 ) && (data.safety_and_security_11_5_1_E  < )) )
				{ $scope.safety_and_security_11_5_1_E_cm = data.safety_and_security_11_5_1_E; $scope.safety_and_security_11_5_1_E = false; $scope.safety_and_security_11_5_1_E_b = false;  $scope.safety_and_security_11_5_1_E_c = false; $scope.safety_and_security_11_5_1_E = ''; }else{ $scope.safety_and_security_11_5_1_E = ''; $scope.safety_and_security_11_5_1_E_cm = ''; $scope.safety_and_security_11_5_1_E = false; $scope.safety_and_security_11_5_1_E_b = false; $scope.safety_and_security_11_5_1_E_c = false; }
				$scope.safety_and_security_11_6_1_text = data.safety_and_security_11_6_1_text;
				if(data.safety_and_security_11_6_1_A == 0){ $scope.safety_and_security_11_6_1_A = data.safety_and_security_11_6_1_A; $scope.safety_and_security_11_6_1_A = true; $scope.safety_and_security_11_6_1_A_b = false; $scope.safety_and_security_11_6_1_A_c = false; $scope.safety_and_security_11_6_1_A_cm = ''; } else if(data.safety_and_security_11_6_1_A  == 5){ $scope.safety_and_security_11_6_1_A = data.safety_and_security_11_6_1_A; $scope.safety_and_security_11_6_1_A = false; $scope.safety_and_security_11_6_1_A_b = true; $scope.safety_and_security_11_6_1_A_c = false; $scope.safety_and_security_11_6_1_A_cm = ''; } else if(data.safety_and_security_11_6_1_A  == ){ $scope.safety_and_security_11_6_1_A = data.safety_and_security_11_6_1_A; $scope.safety_and_security_11_6_1_A = false; $scope.safety_and_security_11_6_1_A_b = false; $scope.safety_and_security_11_6_1_A_c = true; $scope.safety_and_security_11_6_1_A_cm = ''; }else if( ((data.safety_and_security_11_6_1_A  > 0 ) && (data.safety_and_security_11_6_1_A  < 5)) || ((data.safety_and_security_11_6_1_A  > 5 ) && (data.safety_and_security_11_6_1_A  < )) )
				{ $scope.safety_and_security_11_6_1_A_cm = data.safety_and_security_11_6_1_A; $scope.safety_and_security_11_6_1_A = false; $scope.safety_and_security_11_6_1_A_b = false;  $scope.safety_and_security_11_6_1_A_c = false; $scope.safety_and_security_11_6_1_A = ''; }else{ $scope.safety_and_security_11_6_1_A = ''; $scope.safety_and_security_11_6_1_A_cm = ''; $scope.safety_and_security_11_6_1_A = false; $scope.safety_and_security_11_6_1_A_b = false; $scope.safety_and_security_11_6_1_A_c = false; }
				if(data.safety_and_security_11_6_1_B == 0){ $scope.safety_and_security_11_6_1_B = data.safety_and_security_11_6_1_B; $scope.safety_and_security_11_6_1_B = true; $scope.safety_and_security_11_6_1_B_b = false; $scope.safety_and_security_11_6_1_B_c = false; $scope.safety_and_security_11_6_1_B_cm = ''; } else if(data.safety_and_security_11_6_1_B  == 5){ $scope.safety_and_security_11_6_1_B = data.safety_and_security_11_6_1_B; $scope.safety_and_security_11_6_1_B = false; $scope.safety_and_security_11_6_1_B_b = true; $scope.safety_and_security_11_6_1_B_c = false; $scope.safety_and_security_11_6_1_B_cm = ''; } else if(data.safety_and_security_11_6_1_B  == ){ $scope.safety_and_security_11_6_1_B = data.safety_and_security_11_6_1_B; $scope.safety_and_security_11_6_1_B = false; $scope.safety_and_security_11_6_1_B_b = false; $scope.safety_and_security_11_6_1_B_c = true; $scope.safety_and_security_11_6_1_B_cm = ''; }else if( ((data.safety_and_security_11_6_1_B  > 0 ) && (data.safety_and_security_11_6_1_B  < 5)) || ((data.safety_and_security_11_6_1_B  > 5 ) && (data.safety_and_security_11_6_1_B  < )) )
				{ $scope.safety_and_security_11_6_1_B_cm = data.safety_and_security_11_6_1_B; $scope.safety_and_security_11_6_1_B = false; $scope.safety_and_security_11_6_1_B_b = false;  $scope.safety_and_security_11_6_1_B_c = false; $scope.safety_and_security_11_6_1_B = ''; }else{ $scope.safety_and_security_11_6_1_B = ''; $scope.safety_and_security_11_6_1_B_cm = ''; $scope.safety_and_security_11_6_1_B = false; $scope.safety_and_security_11_6_1_B_b = false; $scope.safety_and_security_11_6_1_B_c = false; }
				if(data.safety_and_security_11_6_1_C == 0){ $scope.safety_and_security_11_6_1_C = data.safety_and_security_11_6_1_C; $scope.safety_and_security_11_6_1_C = true; $scope.safety_and_security_11_6_1_C_b = false; $scope.safety_and_security_11_6_1_C_c = false; $scope.safety_and_security_11_6_1_C_cm = ''; } else if(data.safety_and_security_11_6_1_C  == 10){ $scope.safety_and_security_11_6_1_C = data.safety_and_security_11_6_1_C; $scope.safety_and_security_11_6_1_C = false; $scope.safety_and_security_11_6_1_C_b = true; $scope.safety_and_security_11_6_1_C_c = false; $scope.safety_and_security_11_6_1_C_cm = ''; } else if(data.safety_and_security_11_6_1_C  == ){ $scope.safety_and_security_11_6_1_C = data.safety_and_security_11_6_1_C; $scope.safety_and_security_11_6_1_C = false; $scope.safety_and_security_11_6_1_C_b = false; $scope.safety_and_security_11_6_1_C_c = true; $scope.safety_and_security_11_6_1_C_cm = ''; }else if( ((data.safety_and_security_11_6_1_C  > 0 ) && (data.safety_and_security_11_6_1_C  < 10)) || ((data.safety_and_security_11_6_1_C  > 10 ) && (data.safety_and_security_11_6_1_C  < )) )
				{ $scope.safety_and_security_11_6_1_C_cm = data.safety_and_security_11_6_1_C; $scope.safety_and_security_11_6_1_C = false; $scope.safety_and_security_11_6_1_C_b = false;  $scope.safety_and_security_11_6_1_C_c = false; $scope.safety_and_security_11_6_1_C = ''; }else{ $scope.safety_and_security_11_6_1_C = ''; $scope.safety_and_security_11_6_1_C_cm = ''; $scope.safety_and_security_11_6_1_C = false; $scope.safety_and_security_11_6_1_C_b = false; $scope.safety_and_security_11_6_1_C_c = false; }
				$scope.sundry_services_12_1_1_text = data.sundry_services_12_1_1_text;
				if(data.sundry_services_12_1_1_A == 0){ $scope.sundry_services_12_1_1_A = data.sundry_services_12_1_1_A; $scope.sundry_services_12_1_1_A = true; $scope.sundry_services_12_1_1_A_b = false; $scope.sundry_services_12_1_1_A_c = false; $scope.sundry_services_12_1_1_A_cm = ''; } else if(data.sundry_services_12_1_1_A  == 2){ $scope.sundry_services_12_1_1_A = data.sundry_services_12_1_1_A; $scope.sundry_services_12_1_1_A = false; $scope.sundry_services_12_1_1_A_b = true; $scope.sundry_services_12_1_1_A_c = false; $scope.sundry_services_12_1_1_A_cm = ''; } else if(data.sundry_services_12_1_1_A  == ){ $scope.sundry_services_12_1_1_A = data.sundry_services_12_1_1_A; $scope.sundry_services_12_1_1_A = false; $scope.sundry_services_12_1_1_A_b = false; $scope.sundry_services_12_1_1_A_c = true; $scope.sundry_services_12_1_1_A_cm = ''; }else if( ((data.sundry_services_12_1_1_A  > 0 ) && (data.sundry_services_12_1_1_A  < 2)) || ((data.sundry_services_12_1_1_A  > 2 ) && (data.sundry_services_12_1_1_A  < )) )
				{ $scope.sundry_services_12_1_1_A_cm = data.sundry_services_12_1_1_A; $scope.sundry_services_12_1_1_A = false; $scope.sundry_services_12_1_1_A_b = false;  $scope.sundry_services_12_1_1_A_c = false; $scope.sundry_services_12_1_1_A = ''; }else{ $scope.sundry_services_12_1_1_A = ''; $scope.sundry_services_12_1_1_A_cm = ''; $scope.sundry_services_12_1_1_A = false; $scope.sundry_services_12_1_1_A_b = false; $scope.sundry_services_12_1_1_A_c = false; }
				if(data.sundry_services_12_1_1_B  == 1){ $scope.sundry_services_12_1_1_B  = data.sundry_services_12_1_1_B ; $scope.sundry_services_12_1_1_B = true; $scope.sundry_services_12_1_1_B_b = false; $scope.sundry_services_12_1_1_B_cm = ''; } else if(data.sundry_services_12_1_1_B  == 5){ $scope.sundry_services_12_1_1_B  = data.sundry_services_12_1_1_B ; $scope.sundry_services_12_1_1_B = false; $scope.sundry_services_12_1_1_B_b = true; $scope.sundry_services_12_1_1_B_cm = ''; }else if( ((data.sundry_services_12_1_1_B  > 0 ) && (data.sundry_services_12_1_1_B  < 1)) || ((data.sundry_services_12_1_1_B  > 1 ) && (data.sundry_services_12_1_1_B  < 5)))
				{ $scope.sundry_services_12_1_1_B_cm = data.sundry_services_12_1_1_B ; $scope.sundry_services_12_1_1_B = false; $scope.sundry_services_12_1_1_B_b = false; $scope.sundry_services_12_1_1_B  = ''; }else{ $scope.sundry_services_12_1_1_B  = ''; $scope.sundry_services_12_1_1_B_cm = ''; $scope.sundry_services_12_1_1_B = false; $scope.sundry_services_12_1_1_B_b = false; }
				if(data.sundry_services_12_1_1_C == 0){ $scope.sundry_services_12_1_1_C = data.sundry_services_12_1_1_C; $scope.sundry_services_12_1_1_C = true; $scope.sundry_services_12_1_1_C_b = false; $scope.sundry_services_12_1_1_C_c = false; $scope.sundry_services_12_1_1_C_cm = ''; } else if(data.sundry_services_12_1_1_C  == 3){ $scope.sundry_services_12_1_1_C = data.sundry_services_12_1_1_C; $scope.sundry_services_12_1_1_C = false; $scope.sundry_services_12_1_1_C_b = true; $scope.sundry_services_12_1_1_C_c = false; $scope.sundry_services_12_1_1_C_cm = ''; } else if(data.sundry_services_12_1_1_C  == ){ $scope.sundry_services_12_1_1_C = data.sundry_services_12_1_1_C; $scope.sundry_services_12_1_1_C = false; $scope.sundry_services_12_1_1_C_b = false; $scope.sundry_services_12_1_1_C_c = true; $scope.sundry_services_12_1_1_C_cm = ''; }else if( ((data.sundry_services_12_1_1_C  > 0 ) && (data.sundry_services_12_1_1_C  < 3)) || ((data.sundry_services_12_1_1_C  > 3 ) && (data.sundry_services_12_1_1_C  < )) )
				{ $scope.sundry_services_12_1_1_C_cm = data.sundry_services_12_1_1_C; $scope.sundry_services_12_1_1_C = false; $scope.sundry_services_12_1_1_C_b = false;  $scope.sundry_services_12_1_1_C_c = false; $scope.sundry_services_12_1_1_C = ''; }else{ $scope.sundry_services_12_1_1_C = ''; $scope.sundry_services_12_1_1_C_cm = ''; $scope.sundry_services_12_1_1_C = false; $scope.sundry_services_12_1_1_C_b = false; $scope.sundry_services_12_1_1_C_c = false; }
				$scope.sundry_services_12_2_1_text = data.sundry_services_12_2_1_text;
				if(data.sundry_services_12_2_1_A == 0){ $scope.sundry_services_12_2_1_A = data.sundry_services_12_2_1_A; $scope.sundry_services_12_2_1_A = true; $scope.sundry_services_12_2_1_A_b = false; $scope.sundry_services_12_2_1_A_c = false; $scope.sundry_services_12_2_1_A_cm = ''; } else if(data.sundry_services_12_2_1_A  == 10){ $scope.sundry_services_12_2_1_A = data.sundry_services_12_2_1_A; $scope.sundry_services_12_2_1_A = false; $scope.sundry_services_12_2_1_A_b = true; $scope.sundry_services_12_2_1_A_c = false; $scope.sundry_services_12_2_1_A_cm = ''; } else if(data.sundry_services_12_2_1_A  == ){ $scope.sundry_services_12_2_1_A = data.sundry_services_12_2_1_A; $scope.sundry_services_12_2_1_A = false; $scope.sundry_services_12_2_1_A_b = false; $scope.sundry_services_12_2_1_A_c = true; $scope.sundry_services_12_2_1_A_cm = ''; }else if( ((data.sundry_services_12_2_1_A  > 0 ) && (data.sundry_services_12_2_1_A  < 10)) || ((data.sundry_services_12_2_1_A  > 10 ) && (data.sundry_services_12_2_1_A  < )) )
				{ $scope.sundry_services_12_2_1_A_cm = data.sundry_services_12_2_1_A; $scope.sundry_services_12_2_1_A = false; $scope.sundry_services_12_2_1_A_b = false;  $scope.sundry_services_12_2_1_A_c = false; $scope.sundry_services_12_2_1_A = ''; }else{ $scope.sundry_services_12_2_1_A = ''; $scope.sundry_services_12_2_1_A_cm = ''; $scope.sundry_services_12_2_1_A = false; $scope.sundry_services_12_2_1_A_b = false; $scope.sundry_services_12_2_1_A_c = false; }
				$scope.sundry_services_12_3_1_text = data.sundry_services_12_3_1_text;
				if(data.sundry_services_12_3_1_A  == 15){ $scope.sundry_services_12_3_1_A  = data.sundry_services_12_3_1_A ; $scope.sundry_services_12_3_1_A = true; $scope.sundry_services_12_3_1_A_b = false; $scope.sundry_services_12_3_1_A_cm = ''; } else if(data.sundry_services_12_3_1_A  == 20){ $scope.sundry_services_12_3_1_A  = data.sundry_services_12_3_1_A ; $scope.sundry_services_12_3_1_A = false; $scope.sundry_services_12_3_1_A_b = true; $scope.sundry_services_12_3_1_A_cm = ''; }else if( ((data.sundry_services_12_3_1_A  > 0 ) && (data.sundry_services_12_3_1_A  < 15)) || ((data.sundry_services_12_3_1_A  > 15 ) && (data.sundry_services_12_3_1_A  < 20)))
				{ $scope.sundry_services_12_3_1_A_cm = data.sundry_services_12_3_1_A ; $scope.sundry_services_12_3_1_A = false; $scope.sundry_services_12_3_1_A_b = false; $scope.sundry_services_12_3_1_A  = ''; }else{ $scope.sundry_services_12_3_1_A  = ''; $scope.sundry_services_12_3_1_A_cm = ''; $scope.sundry_services_12_3_1_A = false; $scope.sundry_services_12_3_1_A_b = false; }
				$scope.sundry_services_12_4_1_text = data.sundry_services_12_4_1_text;
				if(data.sundry_services_12_4_1_A == 0){ $scope.sundry_services_12_4_1_A = data.sundry_services_12_4_1_A; $scope.sundry_services_12_4_1_A = true; $scope.sundry_services_12_4_1_A_b = false; $scope.sundry_services_12_4_1_A_c = false; $scope.sundry_services_12_4_1_A_cm = ''; } else if(data.sundry_services_12_4_1_A  == 3){ $scope.sundry_services_12_4_1_A = data.sundry_services_12_4_1_A; $scope.sundry_services_12_4_1_A = false; $scope.sundry_services_12_4_1_A_b = true; $scope.sundry_services_12_4_1_A_c = false; $scope.sundry_services_12_4_1_A_cm = ''; } else if(data.sundry_services_12_4_1_A  == ){ $scope.sundry_services_12_4_1_A = data.sundry_services_12_4_1_A; $scope.sundry_services_12_4_1_A = false; $scope.sundry_services_12_4_1_A_b = false; $scope.sundry_services_12_4_1_A_c = true; $scope.sundry_services_12_4_1_A_cm = ''; }else if( ((data.sundry_services_12_4_1_A  > 0 ) && (data.sundry_services_12_4_1_A  < 3)) || ((data.sundry_services_12_4_1_A  > 3 ) && (data.sundry_services_12_4_1_A  < )) )
				{ $scope.sundry_services_12_4_1_A_cm = data.sundry_services_12_4_1_A; $scope.sundry_services_12_4_1_A = false; $scope.sundry_services_12_4_1_A_b = false;  $scope.sundry_services_12_4_1_A_c = false; $scope.sundry_services_12_4_1_A = ''; }else{ $scope.sundry_services_12_4_1_A = ''; $scope.sundry_services_12_4_1_A_cm = ''; $scope.sundry_services_12_4_1_A = false; $scope.sundry_services_12_4_1_A_b = false; $scope.sundry_services_12_4_1_A_c = false; }
				if(data.sundry_services_12_4_1_B == 1){ $scope.sundry_services_12_4_1_B = data.sundry_services_12_4_1_B; $scope.sundry_services_12_4_1_B = true; $scope.sundry_services_12_4_1_B_b = false; $scope.sundry_services_12_4_1_B_c = false; $scope.sundry_services_12_4_1_B_cm = ''; } else if(data.sundry_services_12_4_1_B  == 5){ $scope.sundry_services_12_4_1_B = data.sundry_services_12_4_1_B; $scope.sundry_services_12_4_1_B = false; $scope.sundry_services_12_4_1_B_b = true; $scope.sundry_services_12_4_1_B_c = false; $scope.sundry_services_12_4_1_B_cm = ''; } else if(data.sundry_services_12_4_1_B  == 8){ 
				$scope.sundry_services_12_4_1_B = data.sundry_services_12_4_1_B; $scope.sundry_services_12_4_1_B = false; $scope.sundry_services_12_4_1_B_b = false; $scope.sundry_services_12_4_1_B_c = true; $scope.sundry_services_12_4_1_B_cm = ''; } else if( ((data.sundry_services_12_4_1_B  >= 0 ) && (data.sundry_services_12_4_1_B  < 1)) || ((data.sundry_services_12_4_1_B  > 1 ) && (data.sundry_services_12_4_1_B  < 5)) || ((data.sundry_services_12_4_1_B  > 5 ) && (data.sundry_services_12_4_1_B  < 8)) ){ $scope.sundry_services_12_4_1_B_cm = data.sundry_services_12_4_1_B; $scope.sundry_services_12_4_1_B = false; $scope.sundry_services_12_4_1_B_b = false; $scope.sundry_services_12_4_1_B_c = false; $scope.sundry_services_12_4_1_B = ''; }else{ $scope.sundry_services_12_4_1_B = ''; $scope.sundry_services_12_4_1_B_cm = ''; $scope.sundry_services_12_4_1_B = false; $scope.sundry_services_12_4_1_B_b = false; $scope.sundry_services_12_4_1_B_c = false;}
				if(data.sundry_services_12_4_1_C == 0){ $scope.sundry_services_12_4_1_C = data.sundry_services_12_4_1_C; $scope.sundry_services_12_4_1_C = true; $scope.sundry_services_12_4_1_C_b = false; $scope.sundry_services_12_4_1_C_c = false; $scope.sundry_services_12_4_1_C_cm = ''; } else if(data.sundry_services_12_4_1_C  == 3){ $scope.sundry_services_12_4_1_C = data.sundry_services_12_4_1_C; $scope.sundry_services_12_4_1_C = false; $scope.sundry_services_12_4_1_C_b = true; $scope.sundry_services_12_4_1_C_c = false; $scope.sundry_services_12_4_1_C_cm = ''; } else if(data.sundry_services_12_4_1_C  == ){ $scope.sundry_services_12_4_1_C = data.sundry_services_12_4_1_C; $scope.sundry_services_12_4_1_C = false; $scope.sundry_services_12_4_1_C_b = false; $scope.sundry_services_12_4_1_C_c = true; $scope.sundry_services_12_4_1_C_cm = ''; }else if( ((data.sundry_services_12_4_1_C  > 0 ) && (data.sundry_services_12_4_1_C  < 3)) || ((data.sundry_services_12_4_1_C  > 3 ) && (data.sundry_services_12_4_1_C  < )) )
				{ $scope.sundry_services_12_4_1_C_cm = data.sundry_services_12_4_1_C; $scope.sundry_services_12_4_1_C = false; $scope.sundry_services_12_4_1_C_b = false;  $scope.sundry_services_12_4_1_C_c = false; $scope.sundry_services_12_4_1_C = ''; }else{ $scope.sundry_services_12_4_1_C = ''; $scope.sundry_services_12_4_1_C_cm = ''; $scope.sundry_services_12_4_1_C = false; $scope.sundry_services_12_4_1_C_b = false; $scope.sundry_services_12_4_1_C_c = false; }
				if(data.sundry_services_12_4_1_D == 1){ $scope.sundry_services_12_4_1_D = data.sundry_services_12_4_1_D; $scope.sundry_services_12_4_1_D = true; $scope.sundry_services_12_4_1_D_b = false; $scope.sundry_services_12_4_1_D_c = false; $scope.sundry_services_12_4_1_D_cm = ''; } else if(data.sundry_services_12_4_1_D  == 4){ $scope.sundry_services_12_4_1_D = data.sundry_services_12_4_1_D; $scope.sundry_services_12_4_1_D = false; $scope.sundry_services_12_4_1_D_b = true; $scope.sundry_services_12_4_1_D_c = false; $scope.sundry_services_12_4_1_D_cm = ''; } else if(data.sundry_services_12_4_1_D  == 6){ 
				$scope.sundry_services_12_4_1_D = data.sundry_services_12_4_1_D; $scope.sundry_services_12_4_1_D = false; $scope.sundry_services_12_4_1_D_b = false; $scope.sundry_services_12_4_1_D_c = true; $scope.sundry_services_12_4_1_D_cm = ''; } else if( ((data.sundry_services_12_4_1_D  >= 0 ) && (data.sundry_services_12_4_1_D  < 1)) || ((data.sundry_services_12_4_1_D  > 1 ) && (data.sundry_services_12_4_1_D  < 4)) || ((data.sundry_services_12_4_1_D  > 4 ) && (data.sundry_services_12_4_1_D  < 6)) ){ $scope.sundry_services_12_4_1_D_cm = data.sundry_services_12_4_1_D; $scope.sundry_services_12_4_1_D = false; $scope.sundry_services_12_4_1_D_b = false; $scope.sundry_services_12_4_1_D_c = false; $scope.sundry_services_12_4_1_D = ''; }else{ $scope.sundry_services_12_4_1_D = ''; $scope.sundry_services_12_4_1_D_cm = ''; $scope.sundry_services_12_4_1_D = false; $scope.sundry_services_12_4_1_D_b = false; $scope.sundry_services_12_4_1_D_c = false;}
				$scope.human_resources_13_1_1_text = data.human_resources_13_1_1_text;
				if(data.human_resources_13_1_1_A == 0){ $scope.human_resources_13_1_1_A = data.human_resources_13_1_1_A; $scope.human_resources_13_1_1_A = true; $scope.human_resources_13_1_1_A_b = false; $scope.human_resources_13_1_1_A_c = false; $scope.human_resources_13_1_1_A_cm = ''; } else if(data.human_resources_13_1_1_A  == 5){ $scope.human_resources_13_1_1_A = data.human_resources_13_1_1_A; $scope.human_resources_13_1_1_A = false; $scope.human_resources_13_1_1_A_b = true; $scope.human_resources_13_1_1_A_c = false; $scope.human_resources_13_1_1_A_cm = ''; } else if(data.human_resources_13_1_1_A  == ){ $scope.human_resources_13_1_1_A = data.human_resources_13_1_1_A; $scope.human_resources_13_1_1_A = false; $scope.human_resources_13_1_1_A_b = false; $scope.human_resources_13_1_1_A_c = true; $scope.human_resources_13_1_1_A_cm = ''; }else if( ((data.human_resources_13_1_1_A  > 0 ) && (data.human_resources_13_1_1_A  < 5)) || ((data.human_resources_13_1_1_A  > 5 ) && (data.human_resources_13_1_1_A  < )) )
				{ $scope.human_resources_13_1_1_A_cm = data.human_resources_13_1_1_A; $scope.human_resources_13_1_1_A = false; $scope.human_resources_13_1_1_A_b = false;  $scope.human_resources_13_1_1_A_c = false; $scope.human_resources_13_1_1_A = ''; }else{ $scope.human_resources_13_1_1_A = ''; $scope.human_resources_13_1_1_A_cm = ''; $scope.human_resources_13_1_1_A = false; $scope.human_resources_13_1_1_A_b = false; $scope.human_resources_13_1_1_A_c = false; }
				if(data.human_resources_13_1_1_B  == 2){ $scope.human_resources_13_1_1_B  = data.human_resources_13_1_1_B ; $scope.human_resources_13_1_1_B = true; $scope.human_resources_13_1_1_B_b = false; $scope.human_resources_13_1_1_B_cm = ''; } else if(data.human_resources_13_1_1_B  == 5){ $scope.human_resources_13_1_1_B  = data.human_resources_13_1_1_B ; $scope.human_resources_13_1_1_B = false; $scope.human_resources_13_1_1_B_b = true; $scope.human_resources_13_1_1_B_cm = ''; }else if( ((data.human_resources_13_1_1_B  > 0 ) && (data.human_resources_13_1_1_B  < 2)) || ((data.human_resources_13_1_1_B  > 2 ) && (data.human_resources_13_1_1_B  < 5)))
				{ $scope.human_resources_13_1_1_B_cm = data.human_resources_13_1_1_B ; $scope.human_resources_13_1_1_B = false; $scope.human_resources_13_1_1_B_b = false; $scope.human_resources_13_1_1_B  = ''; }else{ $scope.human_resources_13_1_1_B  = ''; $scope.human_resources_13_1_1_B_cm = ''; $scope.human_resources_13_1_1_B = false; $scope.human_resources_13_1_1_B_b = false; }
				if(data.human_resources_13_1_1_C == 3){ $scope.human_resources_13_1_1_C = data.human_resources_13_1_1_C; $scope.human_resources_13_1_1_C = true; $scope.human_resources_13_1_1_C_b = false; $scope.human_resources_13_1_1_C_c = false; $scope.human_resources_13_1_1_C_cm = ''; } else if(data.human_resources_13_1_1_C  == 6){ $scope.human_resources_13_1_1_C = data.human_resources_13_1_1_C; $scope.human_resources_13_1_1_C = false; $scope.human_resources_13_1_1_C_b = true; $scope.human_resources_13_1_1_C_c = false; $scope.human_resources_13_1_1_C_cm = ''; } else if(data.human_resources_13_1_1_C  == 10){ 
				$scope.human_resources_13_1_1_C = data.human_resources_13_1_1_C; $scope.human_resources_13_1_1_C = false; $scope.human_resources_13_1_1_C_b = false; $scope.human_resources_13_1_1_C_c = true; $scope.human_resources_13_1_1_C_cm = ''; } else if( ((data.human_resources_13_1_1_C  >= 0 ) && (data.human_resources_13_1_1_C  < 3)) || ((data.human_resources_13_1_1_C  > 3 ) && (data.human_resources_13_1_1_C  < 6)) || ((data.human_resources_13_1_1_C  > 6 ) && (data.human_resources_13_1_1_C  < 10)) ){ $scope.human_resources_13_1_1_C_cm = data.human_resources_13_1_1_C; $scope.human_resources_13_1_1_C = false; $scope.human_resources_13_1_1_C_b = false; $scope.human_resources_13_1_1_C_c = false; $scope.human_resources_13_1_1_C = ''; }else{ $scope.human_resources_13_1_1_C = ''; $scope.human_resources_13_1_1_C_cm = ''; $scope.human_resources_13_1_1_C = false; $scope.human_resources_13_1_1_C_b = false; $scope.human_resources_13_1_1_C_c = false;}
				if(data.human_resources_13_1_1_D == 5){ $scope.human_resources_13_1_1_D = data.human_resources_13_1_1_D; $scope.human_resources_13_1_1_D = true; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = false; $scope.human_resources_13_1_1_D_cm = ''; } else if(data.human_resources_13_1_1_D  == 10){ $scope.human_resources_13_1_1_D = data.human_resources_13_1_1_D; $scope.human_resources_13_1_1_D = false; $scope.human_resources_13_1_1_D_b = true; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = false; $scope.human_resources_13_1_1_D_cm = ''; } else if(data.human_resources_13_1_1_D  == 15){ $scope.human_resources_13_1_1_D = data.human_resources_13_1_1_D; $scope.human_resources_13_1_1_D = false; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = true; $scope.human_resources_13_1_1_D_d = false; $scope.human_resources_13_1_1_D_cm = ''; }else if(data.human_resources_13_1_1_D  == 20){ $scope.human_resources_13_1_1_D = data.human_resources_13_1_1_D; $scope.human_resources_13_1_1_D = false; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = true; $scope.human_resources_13_1_1_D_cm = ''; } else if( ((data.human_resources_13_1_1_D  >= 0 ) && (data.human_resources_13_1_1_D  < 5)) || ((data.human_resources_13_1_1_D  > 5 ) && (data.human_resources_13_1_1_D  < 10)) || ((data.human_resources_13_1_1_D  > 10 ) && (data.human_resources_13_1_1_D  < 15)) || ((data.human_resources_13_1_1_D  > 15 ) && (data.human_resources_13_1_1_D  < 20)) )
				{ $scope.human_resources_13_1_1_D_cm = data.human_resources_13_1_1_D; $scope.human_resources_13_1_1_D = false; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = false; $scope.human_resources_13_1_1_D = ''; }else{ $scope.human_resources_13_1_1_D = ''; $scope.human_resources_13_1_1_D_cm = ''; $scope.human_resources_13_1_1_D = false; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = false;}
				if(data.human_resources_13_1_1_E_a == 2){ $scope.human_resources_13_1_1_E_a = data.human_resources_13_1_1_E_a; $scope.human_resources_13_1_1_E_a= true; $scope.human_resources_13_1_1_E_a_cm = ''; } else if((data.human_resources_13_1_1_E_a > 0 ) && (data.human_resources_13_1_1_E_a < 2)){ $scope.human_resources_13_1_1_E_a_cm = data.human_resources_13_1_1_E_a; $scope.human_resources_13_1_1_E_a= false; $scope.human_resources_13_1_1_E_a= ''; }else{ $scope.human_resources_13_1_1_E_a= ''; $scope.human_resources_13_1_1_E_a_cm = ''; $scope.human_resources_13_1_1_E_a= false; }
				if(data.human_resources_13_1_1_E_b == 2){ $scope.human_resources_13_1_1_E_b = data.human_resources_13_1_1_E_b; $scope.human_resources_13_1_1_E_b= true; $scope.human_resources_13_1_1_E_b_cm = ''; } else if((data.human_resources_13_1_1_E_b > 0 ) && (data.human_resources_13_1_1_E_b < 2)){ $scope.human_resources_13_1_1_E_b_cm = data.human_resources_13_1_1_E_b; $scope.human_resources_13_1_1_E_b= false; $scope.human_resources_13_1_1_E_b= ''; }else{ $scope.human_resources_13_1_1_E_b= ''; $scope.human_resources_13_1_1_E_b_cm = ''; $scope.human_resources_13_1_1_E_b= false; }
				if(data.human_resources_13_1_1_E_c == 2){ $scope.human_resources_13_1_1_E_c = data.human_resources_13_1_1_E_c; $scope.human_resources_13_1_1_E_c= true; $scope.human_resources_13_1_1_E_c_cm = ''; } else if((data.human_resources_13_1_1_E_c > 0 ) && (data.human_resources_13_1_1_E_c < 2)){ $scope.human_resources_13_1_1_E_c_cm = data.human_resources_13_1_1_E_c; $scope.human_resources_13_1_1_E_c= false; $scope.human_resources_13_1_1_E_c= ''; }else{ $scope.human_resources_13_1_1_E_c= ''; $scope.human_resources_13_1_1_E_c_cm = ''; $scope.human_resources_13_1_1_E_c= false; }
				if(data.human_resources_13_1_1_E_d == 2){ $scope.human_resources_13_1_1_E_d = data.human_resources_13_1_1_E_d; $scope.human_resources_13_1_1_E_d= true; $scope.human_resources_13_1_1_E_d_cm = ''; } else if((data.human_resources_13_1_1_E_d > 0 ) && (data.human_resources_13_1_1_E_d < 2)){ $scope.human_resources_13_1_1_E_d_cm = data.human_resources_13_1_1_E_d; $scope.human_resources_13_1_1_E_d= false; $scope.human_resources_13_1_1_E_d= ''; }else{ $scope.human_resources_13_1_1_E_d= ''; $scope.human_resources_13_1_1_E_d_cm = ''; $scope.human_resources_13_1_1_E_d= false; }
				if(data.human_resources_13_1_1_E_e == 2){ $scope.human_resources_13_1_1_E_e = data.human_resources_13_1_1_E_e; $scope.human_resources_13_1_1_E_e= true; $scope.human_resources_13_1_1_E_e_cm = ''; } else if((data.human_resources_13_1_1_E_e > 0 ) && (data.human_resources_13_1_1_E_e < 2)){ $scope.human_resources_13_1_1_E_e_cm = data.human_resources_13_1_1_E_e; $scope.human_resources_13_1_1_E_e= false; $scope.human_resources_13_1_1_E_e= ''; }else{ $scope.human_resources_13_1_1_E_e= ''; $scope.human_resources_13_1_1_E_e_cm = ''; $scope.human_resources_13_1_1_E_e= false; }
				$scope.human_resources_13_2_1_text = data.human_resources_13_2_1_text;
				if(data.human_resources_13_2_1_A == 15){ $scope.human_resources_13_2_1_A = data.human_resources_13_2_1_A; $scope.human_resources_13_2_1_A = true; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = false; $scope.human_resources_13_2_1_A_cm = ''; } else if(data.human_resources_13_2_1_A  == 20){ $scope.human_resources_13_2_1_A = data.human_resources_13_2_1_A; $scope.human_resources_13_2_1_A = false; $scope.human_resources_13_2_1_A_b = true; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = false; $scope.human_resources_13_2_1_A_cm = ''; } else if(data.human_resources_13_2_1_A  == 25){ $scope.human_resources_13_2_1_A = data.human_resources_13_2_1_A; $scope.human_resources_13_2_1_A = false; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = true; $scope.human_resources_13_2_1_A_d = false; $scope.human_resources_13_2_1_A_cm = ''; }else if(data.human_resources_13_2_1_A  == 30){ $scope.human_resources_13_2_1_A = data.human_resources_13_2_1_A; $scope.human_resources_13_2_1_A = false; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = true; $scope.human_resources_13_2_1_A_cm = ''; } else if( ((data.human_resources_13_2_1_A  >= 0 ) && (data.human_resources_13_2_1_A  < 15)) || ((data.human_resources_13_2_1_A  > 15 ) && (data.human_resources_13_2_1_A  < 20)) || ((data.human_resources_13_2_1_A  > 20 ) && (data.human_resources_13_2_1_A  < 25)) || ((data.human_resources_13_2_1_A  > 25 ) && (data.human_resources_13_2_1_A  < 30)) )
				{ $scope.human_resources_13_2_1_A_cm = data.human_resources_13_2_1_A; $scope.human_resources_13_2_1_A = false; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = false; $scope.human_resources_13_2_1_A = ''; }else{ $scope.human_resources_13_2_1_A = ''; $scope.human_resources_13_2_1_A_cm = ''; $scope.human_resources_13_2_1_A = false; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = false;}
				if(data.human_resources_13_2_1_B  == 5){ $scope.human_resources_13_2_1_B  = data.human_resources_13_2_1_B ; $scope.human_resources_13_2_1_B = true; $scope.human_resources_13_2_1_B_b = false; $scope.human_resources_13_2_1_B_cm = ''; } else if(data.human_resources_13_2_1_B  == 10){ $scope.human_resources_13_2_1_B  = data.human_resources_13_2_1_B ; $scope.human_resources_13_2_1_B = false; $scope.human_resources_13_2_1_B_b = true; $scope.human_resources_13_2_1_B_cm = ''; }else if( ((data.human_resources_13_2_1_B  > 0 ) && (data.human_resources_13_2_1_B  < 5)) || ((data.human_resources_13_2_1_B  > 5 ) && (data.human_resources_13_2_1_B  < 10)))
				{ $scope.human_resources_13_2_1_B_cm = data.human_resources_13_2_1_B ; $scope.human_resources_13_2_1_B = false; $scope.human_resources_13_2_1_B_b = false; $scope.human_resources_13_2_1_B  = ''; }else{ $scope.human_resources_13_2_1_B  = ''; $scope.human_resources_13_2_1_B_cm = ''; $scope.human_resources_13_2_1_B = false; $scope.human_resources_13_2_1_B_b = false; }
				$scope.human_resources_13_3_1_text = data.human_resources_13_3_1_text;
				if(data.human_resources_13_3_1_A == 10){ $scope.human_resources_13_3_1_A = data.human_resources_13_3_1_A; $scope.human_resources_13_3_1_A = true; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = false; $scope.human_resources_13_3_1_A_cm = ''; } else if(data.human_resources_13_3_1_A  == 15){ $scope.human_resources_13_3_1_A = data.human_resources_13_3_1_A; $scope.human_resources_13_3_1_A = false; $scope.human_resources_13_3_1_A_b = true; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = false; $scope.human_resources_13_3_1_A_cm = ''; } else if(data.human_resources_13_3_1_A  == 25){ $scope.human_resources_13_3_1_A = data.human_resources_13_3_1_A; $scope.human_resources_13_3_1_A = false; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = true; $scope.human_resources_13_3_1_A_d = false; $scope.human_resources_13_3_1_A_cm = ''; }else if(data.human_resources_13_3_1_A  == 30){ $scope.human_resources_13_3_1_A = data.human_resources_13_3_1_A; $scope.human_resources_13_3_1_A = false; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = true; $scope.human_resources_13_3_1_A_cm = ''; } else if( ((data.human_resources_13_3_1_A  >= 0 ) && (data.human_resources_13_3_1_A  < 10)) || ((data.human_resources_13_3_1_A  > 10 ) && (data.human_resources_13_3_1_A  < 15)) || ((data.human_resources_13_3_1_A  > 15 ) && (data.human_resources_13_3_1_A  < 25)) || ((data.human_resources_13_3_1_A  > 25 ) && (data.human_resources_13_3_1_A  < 30)) )
				{ $scope.human_resources_13_3_1_A_cm = data.human_resources_13_3_1_A; $scope.human_resources_13_3_1_A = false; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = false; $scope.human_resources_13_3_1_A = ''; }else{ $scope.human_resources_13_3_1_A = ''; $scope.human_resources_13_3_1_A_cm = ''; $scope.human_resources_13_3_1_A = false; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = false;}
				if(data.human_resources_13_3_1_B == 0){ $scope.human_resources_13_3_1_B = data.human_resources_13_3_1_B; $scope.human_resources_13_3_1_B = true; $scope.human_resources_13_3_1_B_b = false; $scope.human_resources_13_3_1_B_c = false; $scope.human_resources_13_3_1_B_cm = ''; } else if(data.human_resources_13_3_1_B  == 10){ $scope.human_resources_13_3_1_B = data.human_resources_13_3_1_B; $scope.human_resources_13_3_1_B = false; $scope.human_resources_13_3_1_B_b = true; $scope.human_resources_13_3_1_B_c = false; $scope.human_resources_13_3_1_B_cm = ''; } else if(data.human_resources_13_3_1_B  == ){ $scope.human_resources_13_3_1_B = data.human_resources_13_3_1_B; $scope.human_resources_13_3_1_B = false; $scope.human_resources_13_3_1_B_b = false; $scope.human_resources_13_3_1_B_c = true; $scope.human_resources_13_3_1_B_cm = ''; }else if( ((data.human_resources_13_3_1_B  > 0 ) && (data.human_resources_13_3_1_B  < 10)) || ((data.human_resources_13_3_1_B  > 10 ) && (data.human_resources_13_3_1_B  < )) )
				{ $scope.human_resources_13_3_1_B_cm = data.human_resources_13_3_1_B; $scope.human_resources_13_3_1_B = false; $scope.human_resources_13_3_1_B_b = false;  $scope.human_resources_13_3_1_B_c = false; $scope.human_resources_13_3_1_B = ''; }else{ $scope.human_resources_13_3_1_B = ''; $scope.human_resources_13_3_1_B_cm = ''; $scope.human_resources_13_3_1_B = false; $scope.human_resources_13_3_1_B_b = false; $scope.human_resources_13_3_1_B_c = false; }
				$scope.human_resources_13_4_1_text = data.human_resources_13_4_1_text;
				if(data.human_resources_13_4_1_A_a == 4){ $scope.human_resources_13_4_1_A_a = data.human_resources_13_4_1_A_a; $scope.human_resources_13_4_1_A_a= true; $scope.human_resources_13_4_1_A_a_cm = ''; } else if((data.human_resources_13_4_1_A_a > 0 ) && (data.human_resources_13_4_1_A_a < 4)){ $scope.human_resources_13_4_1_A_a_cm = data.human_resources_13_4_1_A_a; $scope.human_resources_13_4_1_A_a= false; $scope.human_resources_13_4_1_A_a= ''; }else{ $scope.human_resources_13_4_1_A_a= ''; $scope.human_resources_13_4_1_A_a_cm = ''; $scope.human_resources_13_4_1_A_a= false; }
				if(data.human_resources_13_4_1_A_b == 4){ $scope.human_resources_13_4_1_A_b = data.human_resources_13_4_1_A_b; $scope.human_resources_13_4_1_A_b= true; $scope.human_resources_13_4_1_A_b_cm = ''; } else if((data.human_resources_13_4_1_A_b > 0 ) && (data.human_resources_13_4_1_A_b < 4)){ $scope.human_resources_13_4_1_A_b_cm = data.human_resources_13_4_1_A_b; $scope.human_resources_13_4_1_A_b= false; $scope.human_resources_13_4_1_A_b= ''; }else{ $scope.human_resources_13_4_1_A_b= ''; $scope.human_resources_13_4_1_A_b_cm = ''; $scope.human_resources_13_4_1_A_b= false; }
				if(data.human_resources_13_4_1_A_c == 4){ $scope.human_resources_13_4_1_A_c = data.human_resources_13_4_1_A_c; $scope.human_resources_13_4_1_A_c= true; $scope.human_resources_13_4_1_A_c_cm = ''; } else if((data.human_resources_13_4_1_A_c > 0 ) && (data.human_resources_13_4_1_A_c < 4)){ $scope.human_resources_13_4_1_A_c_cm = data.human_resources_13_4_1_A_c; $scope.human_resources_13_4_1_A_c= false; $scope.human_resources_13_4_1_A_c= ''; }else{ $scope.human_resources_13_4_1_A_c= ''; $scope.human_resources_13_4_1_A_c_cm = ''; $scope.human_resources_13_4_1_A_c= false; }
				if(data.human_resources_13_4_1_B_a == 3){ $scope.human_resources_13_4_1_B_a = data.human_resources_13_4_1_B_a; $scope.human_resources_13_4_1_B_a= true; $scope.human_resources_13_4_1_B_a_cm = ''; } else if((data.human_resources_13_4_1_B_a > 0 ) && (data.human_resources_13_4_1_B_a < 3)){ $scope.human_resources_13_4_1_B_a_cm = data.human_resources_13_4_1_B_a; $scope.human_resources_13_4_1_B_a= false; $scope.human_resources_13_4_1_B_a= ''; }else{ $scope.human_resources_13_4_1_B_a= ''; $scope.human_resources_13_4_1_B_a_cm = ''; $scope.human_resources_13_4_1_B_a= false; }
				if(data.human_resources_13_4_1_B_b == 3){ $scope.human_resources_13_4_1_B_b = data.human_resources_13_4_1_B_b; $scope.human_resources_13_4_1_B_b= true; $scope.human_resources_13_4_1_B_b_cm = ''; } else if((data.human_resources_13_4_1_B_b > 0 ) && (data.human_resources_13_4_1_B_b < 3)){ $scope.human_resources_13_4_1_B_b_cm = data.human_resources_13_4_1_B_b; $scope.human_resources_13_4_1_B_b= false; $scope.human_resources_13_4_1_B_b= ''; }else{ $scope.human_resources_13_4_1_B_b= ''; $scope.human_resources_13_4_1_B_b_cm = ''; $scope.human_resources_13_4_1_B_b= false; }
				if(data.human_resources_13_4_1_B_c == 3){ $scope.human_resources_13_4_1_B_c = data.human_resources_13_4_1_B_c; $scope.human_resources_13_4_1_B_c= true; $scope.human_resources_13_4_1_B_c_cm = ''; } else if((data.human_resources_13_4_1_B_c > 0 ) && (data.human_resources_13_4_1_B_c < 3)){ $scope.human_resources_13_4_1_B_c_cm = data.human_resources_13_4_1_B_c; $scope.human_resources_13_4_1_B_c= false; $scope.human_resources_13_4_1_B_c= ''; }else{ $scope.human_resources_13_4_1_B_c= ''; $scope.human_resources_13_4_1_B_c_cm = ''; $scope.human_resources_13_4_1_B_c= false; }
				if(data.human_resources_13_4_1_C_a == 3){ $scope.human_resources_13_4_1_C_a = data.human_resources_13_4_1_C_a; $scope.human_resources_13_4_1_C_a= true; $scope.human_resources_13_4_1_C_a_cm = ''; } else if((data.human_resources_13_4_1_C_a > 0 ) && (data.human_resources_13_4_1_C_a < 3)){ $scope.human_resources_13_4_1_C_a_cm = data.human_resources_13_4_1_C_a; $scope.human_resources_13_4_1_C_a= false; $scope.human_resources_13_4_1_C_a= ''; }else{ $scope.human_resources_13_4_1_C_a= ''; $scope.human_resources_13_4_1_C_a_cm = ''; $scope.human_resources_13_4_1_C_a= false; }
				if(data.human_resources_13_4_1_C_b == 3){ $scope.human_resources_13_4_1_C_b = data.human_resources_13_4_1_C_b; $scope.human_resources_13_4_1_C_b= true; $scope.human_resources_13_4_1_C_b_cm = ''; } else if((data.human_resources_13_4_1_C_b > 0 ) && (data.human_resources_13_4_1_C_b < 3)){ $scope.human_resources_13_4_1_C_b_cm = data.human_resources_13_4_1_C_b; $scope.human_resources_13_4_1_C_b= false; $scope.human_resources_13_4_1_C_b= ''; }else{ $scope.human_resources_13_4_1_C_b= ''; $scope.human_resources_13_4_1_C_b_cm = ''; $scope.human_resources_13_4_1_C_b= false; }
				if(data.human_resources_13_4_1_C_c == 3){ $scope.human_resources_13_4_1_C_c = data.human_resources_13_4_1_C_c; $scope.human_resources_13_4_1_C_c= true; $scope.human_resources_13_4_1_C_c_cm = ''; } else if((data.human_resources_13_4_1_C_c > 0 ) && (data.human_resources_13_4_1_C_c < 3)){ $scope.human_resources_13_4_1_C_c_cm = data.human_resources_13_4_1_C_c; $scope.human_resources_13_4_1_C_c= false; $scope.human_resources_13_4_1_C_c= ''; }else{ $scope.human_resources_13_4_1_C_c= ''; $scope.human_resources_13_4_1_C_c_cm = ''; $scope.human_resources_13_4_1_C_c= false; }
				$scope.human_resources_13_5_1_text = data.human_resources_13_5_1_text;
				if(data.human_resources_13_5_1_A == 0){ $scope.human_resources_13_5_1_A = data.human_resources_13_5_1_A; $scope.human_resources_13_5_1_A = true; $scope.human_resources_13_5_1_A_b = false; $scope.human_resources_13_5_1_A_c = false; $scope.human_resources_13_5_1_A_cm = ''; } else if(data.human_resources_13_5_1_A  == 10){ $scope.human_resources_13_5_1_A = data.human_resources_13_5_1_A; $scope.human_resources_13_5_1_A = false; $scope.human_resources_13_5_1_A_b = true; $scope.human_resources_13_5_1_A_c = false; $scope.human_resources_13_5_1_A_cm = ''; } else if(data.human_resources_13_5_1_A  == ){ $scope.human_resources_13_5_1_A = data.human_resources_13_5_1_A; $scope.human_resources_13_5_1_A = false; $scope.human_resources_13_5_1_A_b = false; $scope.human_resources_13_5_1_A_c = true; $scope.human_resources_13_5_1_A_cm = ''; }else if( ((data.human_resources_13_5_1_A  > 0 ) && (data.human_resources_13_5_1_A  < 10)) || ((data.human_resources_13_5_1_A  > 10 ) && (data.human_resources_13_5_1_A  < )) )
				{ $scope.human_resources_13_5_1_A_cm = data.human_resources_13_5_1_A; $scope.human_resources_13_5_1_A = false; $scope.human_resources_13_5_1_A_b = false;  $scope.human_resources_13_5_1_A_c = false; $scope.human_resources_13_5_1_A = ''; }else{ $scope.human_resources_13_5_1_A = ''; $scope.human_resources_13_5_1_A_cm = ''; $scope.human_resources_13_5_1_A = false; $scope.human_resources_13_5_1_A_b = false; $scope.human_resources_13_5_1_A_c = false; }
				$scope.human_resources_13_6_1_text = data.human_resources_13_6_1_text;
				if(data.human_resources_13_6_1_A == 0){ $scope.human_resources_13_6_1_A = data.human_resources_13_6_1_A; $scope.human_resources_13_6_1_A = true; $scope.human_resources_13_6_1_A_b = false; $scope.human_resources_13_6_1_A_c = false; $scope.human_resources_13_6_1_A_cm = ''; } else if(data.human_resources_13_6_1_A  == 5){ $scope.human_resources_13_6_1_A = data.human_resources_13_6_1_A; $scope.human_resources_13_6_1_A = false; $scope.human_resources_13_6_1_A_b = true; $scope.human_resources_13_6_1_A_c = false; $scope.human_resources_13_6_1_A_cm = ''; } else if(data.human_resources_13_6_1_A  == ){ $scope.human_resources_13_6_1_A = data.human_resources_13_6_1_A; $scope.human_resources_13_6_1_A = false; $scope.human_resources_13_6_1_A_b = false; $scope.human_resources_13_6_1_A_c = true; $scope.human_resources_13_6_1_A_cm = ''; }else if( ((data.human_resources_13_6_1_A  > 0 ) && (data.human_resources_13_6_1_A  < 5)) || ((data.human_resources_13_6_1_A  > 5 ) && (data.human_resources_13_6_1_A  < )) )
				{ $scope.human_resources_13_6_1_A_cm = data.human_resources_13_6_1_A; $scope.human_resources_13_6_1_A = false; $scope.human_resources_13_6_1_A_b = false;  $scope.human_resources_13_6_1_A_c = false; $scope.human_resources_13_6_1_A = ''; }else{ $scope.human_resources_13_6_1_A = ''; $scope.human_resources_13_6_1_A_cm = ''; $scope.human_resources_13_6_1_A = false; $scope.human_resources_13_6_1_A_b = false; $scope.human_resources_13_6_1_A_c = false; }
				if(data.human_resources_13_6_1_B == 1){ $scope.human_resources_13_6_1_B = data.human_resources_13_6_1_B; $scope.human_resources_13_6_1_B = true; $scope.human_resources_13_6_1_B_b = false; $scope.human_resources_13_6_1_B_c = false; $scope.human_resources_13_6_1_B_cm = ''; } else if(data.human_resources_13_6_1_B  == 3){ $scope.human_resources_13_6_1_B = data.human_resources_13_6_1_B; $scope.human_resources_13_6_1_B = false; $scope.human_resources_13_6_1_B_b = true; $scope.human_resources_13_6_1_B_c = false; $scope.human_resources_13_6_1_B_cm = ''; } else if(data.human_resources_13_6_1_B  == 5){ 
				$scope.human_resources_13_6_1_B = data.human_resources_13_6_1_B; $scope.human_resources_13_6_1_B = false; $scope.human_resources_13_6_1_B_b = false; $scope.human_resources_13_6_1_B_c = true; $scope.human_resources_13_6_1_B_cm = ''; } else if( ((data.human_resources_13_6_1_B  >= 0 ) && (data.human_resources_13_6_1_B  < 1)) || ((data.human_resources_13_6_1_B  > 1 ) && (data.human_resources_13_6_1_B  < 3)) || ((data.human_resources_13_6_1_B  > 3 ) && (data.human_resources_13_6_1_B  < 5)) ){ $scope.human_resources_13_6_1_B_cm = data.human_resources_13_6_1_B; $scope.human_resources_13_6_1_B = false; $scope.human_resources_13_6_1_B_b = false; $scope.human_resources_13_6_1_B_c = false; $scope.human_resources_13_6_1_B = ''; }else{ $scope.human_resources_13_6_1_B = ''; $scope.human_resources_13_6_1_B_cm = ''; $scope.human_resources_13_6_1_B = false; $scope.human_resources_13_6_1_B_b = false; $scope.human_resources_13_6_1_B_c = false;}
				if(data.human_resources_13_6_1_C == 0){ $scope.human_resources_13_6_1_C = data.human_resources_13_6_1_C; $scope.human_resources_13_6_1_C = true; $scope.human_resources_13_6_1_C_b = false; $scope.human_resources_13_6_1_C_c = false; $scope.human_resources_13_6_1_C_cm = ''; } else if(data.human_resources_13_6_1_C  == 5){ $scope.human_resources_13_6_1_C = data.human_resources_13_6_1_C; $scope.human_resources_13_6_1_C = false; $scope.human_resources_13_6_1_C_b = true; $scope.human_resources_13_6_1_C_c = false; $scope.human_resources_13_6_1_C_cm = ''; } else if(data.human_resources_13_6_1_C  == ){ $scope.human_resources_13_6_1_C = data.human_resources_13_6_1_C; $scope.human_resources_13_6_1_C = false; $scope.human_resources_13_6_1_C_b = false; $scope.human_resources_13_6_1_C_c = true; $scope.human_resources_13_6_1_C_cm = ''; }else if( ((data.human_resources_13_6_1_C  > 0 ) && (data.human_resources_13_6_1_C  < 5)) || ((data.human_resources_13_6_1_C  > 5 ) && (data.human_resources_13_6_1_C  < )) )
				{ $scope.human_resources_13_6_1_C_cm = data.human_resources_13_6_1_C; $scope.human_resources_13_6_1_C = false; $scope.human_resources_13_6_1_C_b = false;  $scope.human_resources_13_6_1_C_c = false; $scope.human_resources_13_6_1_C = ''; }else{ $scope.human_resources_13_6_1_C = ''; $scope.human_resources_13_6_1_C_cm = ''; $scope.human_resources_13_6_1_C = false; $scope.human_resources_13_6_1_C_b = false; $scope.human_resources_13_6_1_C_c = false; }
				if(data.human_resources_13_6_1_D == 1){ $scope.human_resources_13_6_1_D = data.human_resources_13_6_1_D; $scope.human_resources_13_6_1_D = true; $scope.human_resources_13_6_1_D_b = false; $scope.human_resources_13_6_1_D_c = false; $scope.human_resources_13_6_1_D_cm = ''; } else if(data.human_resources_13_6_1_D  == 3){ $scope.human_resources_13_6_1_D = data.human_resources_13_6_1_D; $scope.human_resources_13_6_1_D = false; $scope.human_resources_13_6_1_D_b = true; $scope.human_resources_13_6_1_D_c = false; $scope.human_resources_13_6_1_D_cm = ''; } else if(data.human_resources_13_6_1_D  == 5){ 
				$scope.human_resources_13_6_1_D = data.human_resources_13_6_1_D; $scope.human_resources_13_6_1_D = false; $scope.human_resources_13_6_1_D_b = false; $scope.human_resources_13_6_1_D_c = true; $scope.human_resources_13_6_1_D_cm = ''; } else if( ((data.human_resources_13_6_1_D  >= 0 ) && (data.human_resources_13_6_1_D  < 1)) || ((data.human_resources_13_6_1_D  > 1 ) && (data.human_resources_13_6_1_D  < 3)) || ((data.human_resources_13_6_1_D  > 3 ) && (data.human_resources_13_6_1_D  < 5)) ){ $scope.human_resources_13_6_1_D_cm = data.human_resources_13_6_1_D; $scope.human_resources_13_6_1_D = false; $scope.human_resources_13_6_1_D_b = false; $scope.human_resources_13_6_1_D_c = false; $scope.human_resources_13_6_1_D = ''; }else{ $scope.human_resources_13_6_1_D = ''; $scope.human_resources_13_6_1_D_cm = ''; $scope.human_resources_13_6_1_D = false; $scope.human_resources_13_6_1_D_b = false; $scope.human_resources_13_6_1_D_c = false;}
				$scope.human_resources_13_7_1_text = data.human_resources_13_7_1_text;
				if(data.human_resources_13_7_1_A == 0){ $scope.human_resources_13_7_1_A = data.human_resources_13_7_1_A; $scope.human_resources_13_7_1_A = true; $scope.human_resources_13_7_1_A_b = false; $scope.human_resources_13_7_1_A_c = false; $scope.human_resources_13_7_1_A_cm = ''; } else if(data.human_resources_13_7_1_A  == 3){ $scope.human_resources_13_7_1_A = data.human_resources_13_7_1_A; $scope.human_resources_13_7_1_A = false; $scope.human_resources_13_7_1_A_b = true; $scope.human_resources_13_7_1_A_c = false; $scope.human_resources_13_7_1_A_cm = ''; } else if(data.human_resources_13_7_1_A  == ){ $scope.human_resources_13_7_1_A = data.human_resources_13_7_1_A; $scope.human_resources_13_7_1_A = false; $scope.human_resources_13_7_1_A_b = false; $scope.human_resources_13_7_1_A_c = true; $scope.human_resources_13_7_1_A_cm = ''; }else if( ((data.human_resources_13_7_1_A  > 0 ) && (data.human_resources_13_7_1_A  < 3)) || ((data.human_resources_13_7_1_A  > 3 ) && (data.human_resources_13_7_1_A  < )) )
				{ $scope.human_resources_13_7_1_A_cm = data.human_resources_13_7_1_A; $scope.human_resources_13_7_1_A = false; $scope.human_resources_13_7_1_A_b = false;  $scope.human_resources_13_7_1_A_c = false; $scope.human_resources_13_7_1_A = ''; }else{ $scope.human_resources_13_7_1_A = ''; $scope.human_resources_13_7_1_A_cm = ''; $scope.human_resources_13_7_1_A = false; $scope.human_resources_13_7_1_A_b = false; $scope.human_resources_13_7_1_A_c = false; }
				if(data.human_resources_13_7_1_B == 0){ $scope.human_resources_13_7_1_B = data.human_resources_13_7_1_B; $scope.human_resources_13_7_1_B = true; $scope.human_resources_13_7_1_B_b = false; $scope.human_resources_13_7_1_B_c = false; $scope.human_resources_13_7_1_B_cm = ''; } else if(data.human_resources_13_7_1_B  == 3){ $scope.human_resources_13_7_1_B = data.human_resources_13_7_1_B; $scope.human_resources_13_7_1_B = false; $scope.human_resources_13_7_1_B_b = true; $scope.human_resources_13_7_1_B_c = false; $scope.human_resources_13_7_1_B_cm = ''; } else if(data.human_resources_13_7_1_B  == ){ $scope.human_resources_13_7_1_B = data.human_resources_13_7_1_B; $scope.human_resources_13_7_1_B = false; $scope.human_resources_13_7_1_B_b = false; $scope.human_resources_13_7_1_B_c = true; $scope.human_resources_13_7_1_B_cm = ''; }else if( ((data.human_resources_13_7_1_B  > 0 ) && (data.human_resources_13_7_1_B  < 3)) || ((data.human_resources_13_7_1_B  > 3 ) && (data.human_resources_13_7_1_B  < )) )
				{ $scope.human_resources_13_7_1_B_cm = data.human_resources_13_7_1_B; $scope.human_resources_13_7_1_B = false; $scope.human_resources_13_7_1_B_b = false;  $scope.human_resources_13_7_1_B_c = false; $scope.human_resources_13_7_1_B = ''; }else{ $scope.human_resources_13_7_1_B = ''; $scope.human_resources_13_7_1_B_cm = ''; $scope.human_resources_13_7_1_B = false; $scope.human_resources_13_7_1_B_b = false; $scope.human_resources_13_7_1_B_c = false; }
				if(data.human_resources_13_7_1_C == 1){ $scope.human_resources_13_7_1_C = data.human_resources_13_7_1_C; $scope.human_resources_13_7_1_C = true; $scope.human_resources_13_7_1_C_b = false; $scope.human_resources_13_7_1_C_c = false; $scope.human_resources_13_7_1_C_cm = ''; } else if(data.human_resources_13_7_1_C  == 3){ $scope.human_resources_13_7_1_C = data.human_resources_13_7_1_C; $scope.human_resources_13_7_1_C = false; $scope.human_resources_13_7_1_C_b = true; $scope.human_resources_13_7_1_C_c = false; $scope.human_resources_13_7_1_C_cm = ''; } else if(data.human_resources_13_7_1_C  == 4){ 
				$scope.human_resources_13_7_1_C = data.human_resources_13_7_1_C; $scope.human_resources_13_7_1_C = false; $scope.human_resources_13_7_1_C_b = false; $scope.human_resources_13_7_1_C_c = true; $scope.human_resources_13_7_1_C_cm = ''; } else if( ((data.human_resources_13_7_1_C  >= 0 ) && (data.human_resources_13_7_1_C  < 1)) || ((data.human_resources_13_7_1_C  > 1 ) && (data.human_resources_13_7_1_C  < 3)) || ((data.human_resources_13_7_1_C  > 3 ) && (data.human_resources_13_7_1_C  < 4)) ){ $scope.human_resources_13_7_1_C_cm = data.human_resources_13_7_1_C; $scope.human_resources_13_7_1_C = false; $scope.human_resources_13_7_1_C_b = false; $scope.human_resources_13_7_1_C_c = false; $scope.human_resources_13_7_1_C = ''; }else{ $scope.human_resources_13_7_1_C = ''; $scope.human_resources_13_7_1_C_cm = ''; $scope.human_resources_13_7_1_C = false; $scope.human_resources_13_7_1_C_b = false; $scope.human_resources_13_7_1_C_c = false;}
				if(data.human_resources_13_7_1_D == 1){ $scope.human_resources_13_7_1_D = data.human_resources_13_7_1_D; $scope.human_resources_13_7_1_D = true; $scope.human_resources_13_7_1_D_b = false; $scope.human_resources_13_7_1_D_c = false; $scope.human_resources_13_7_1_D_cm = ''; } else if(data.human_resources_13_7_1_D  == 3){ $scope.human_resources_13_7_1_D = data.human_resources_13_7_1_D; $scope.human_resources_13_7_1_D = false; $scope.human_resources_13_7_1_D_b = true; $scope.human_resources_13_7_1_D_c = false; $scope.human_resources_13_7_1_D_cm = ''; } else if(data.human_resources_13_7_1_D  == 4){ 
				$scope.human_resources_13_7_1_D = data.human_resources_13_7_1_D; $scope.human_resources_13_7_1_D = false; $scope.human_resources_13_7_1_D_b = false; $scope.human_resources_13_7_1_D_c = true; $scope.human_resources_13_7_1_D_cm = ''; } else if( ((data.human_resources_13_7_1_D  >= 0 ) && (data.human_resources_13_7_1_D  < 1)) || ((data.human_resources_13_7_1_D  > 1 ) && (data.human_resources_13_7_1_D  < 3)) || ((data.human_resources_13_7_1_D  > 3 ) && (data.human_resources_13_7_1_D  < 4)) ){ $scope.human_resources_13_7_1_D_cm = data.human_resources_13_7_1_D; $scope.human_resources_13_7_1_D = false; $scope.human_resources_13_7_1_D_b = false; $scope.human_resources_13_7_1_D_c = false; $scope.human_resources_13_7_1_D = ''; }else{ $scope.human_resources_13_7_1_D = ''; $scope.human_resources_13_7_1_D_cm = ''; $scope.human_resources_13_7_1_D = false; $scope.human_resources_13_7_1_D_b = false; $scope.human_resources_13_7_1_D_c = false;}
				if(data.human_resources_13_7_1_E == 1){ $scope.human_resources_13_7_1_E = data.human_resources_13_7_1_E; $scope.human_resources_13_7_1_E = true; $scope.human_resources_13_7_1_E_b = false; $scope.human_resources_13_7_1_E_c = false; $scope.human_resources_13_7_1_E_cm = ''; } else if(data.human_resources_13_7_1_E  == 3){ $scope.human_resources_13_7_1_E = data.human_resources_13_7_1_E; $scope.human_resources_13_7_1_E = false; $scope.human_resources_13_7_1_E_b = true; $scope.human_resources_13_7_1_E_c = false; $scope.human_resources_13_7_1_E_cm = ''; } else if(data.human_resources_13_7_1_E  == 4){ 
				$scope.human_resources_13_7_1_E = data.human_resources_13_7_1_E; $scope.human_resources_13_7_1_E = false; $scope.human_resources_13_7_1_E_b = false; $scope.human_resources_13_7_1_E_c = true; $scope.human_resources_13_7_1_E_cm = ''; } else if( ((data.human_resources_13_7_1_E  >= 0 ) && (data.human_resources_13_7_1_E  < 1)) || ((data.human_resources_13_7_1_E  > 1 ) && (data.human_resources_13_7_1_E  < 3)) || ((data.human_resources_13_7_1_E  > 3 ) && (data.human_resources_13_7_1_E  < 4)) ){ $scope.human_resources_13_7_1_E_cm = data.human_resources_13_7_1_E; $scope.human_resources_13_7_1_E = false; $scope.human_resources_13_7_1_E_b = false; $scope.human_resources_13_7_1_E_c = false; $scope.human_resources_13_7_1_E = ''; }else{ $scope.human_resources_13_7_1_E = ''; $scope.human_resources_13_7_1_E_cm = ''; $scope.human_resources_13_7_1_E = false; $scope.human_resources_13_7_1_E_b = false; $scope.human_resources_13_7_1_E_c = false;}
				if(data.human_resources_13_7_1_F_a == 1){ $scope.human_resources_13_7_1_F_a = data.human_resources_13_7_1_F_a; $scope.human_resources_13_7_1_F_a= true; $scope.human_resources_13_7_1_F_a_cm = ''; } else if((data.human_resources_13_7_1_F_a > 0 ) && (data.human_resources_13_7_1_F_a < 1)){ $scope.human_resources_13_7_1_F_a_cm = data.human_resources_13_7_1_F_a; $scope.human_resources_13_7_1_F_a= false; $scope.human_resources_13_7_1_F_a= ''; }else{ $scope.human_resources_13_7_1_F_a= ''; $scope.human_resources_13_7_1_F_a_cm = ''; $scope.human_resources_13_7_1_F_a= false; }
				if(data.human_resources_13_7_1_F_b == 1){ $scope.human_resources_13_7_1_F_b = data.human_resources_13_7_1_F_b; $scope.human_resources_13_7_1_F_b= true; $scope.human_resources_13_7_1_F_b_cm = ''; } else if((data.human_resources_13_7_1_F_b > 0 ) && (data.human_resources_13_7_1_F_b < 1)){ $scope.human_resources_13_7_1_F_b_cm = data.human_resources_13_7_1_F_b; $scope.human_resources_13_7_1_F_b= false; $scope.human_resources_13_7_1_F_b= ''; }else{ $scope.human_resources_13_7_1_F_b= ''; $scope.human_resources_13_7_1_F_b_cm = ''; $scope.human_resources_13_7_1_F_b= false; }
				$scope.human_resources_13_8_1_text = data.human_resources_13_8_1_text;
				if(data.human_resources_13_8_1_A == 1){ $scope.human_resources_13_8_1_A = data.human_resources_13_8_1_A; $scope.human_resources_13_8_1_A = true; $scope.human_resources_13_8_1_A_b = false; $scope.human_resources_13_8_1_A_c = false; $scope.human_resources_13_8_1_A_cm = ''; } else if(data.human_resources_13_8_1_A  == 2){ $scope.human_resources_13_8_1_A = data.human_resources_13_8_1_A; $scope.human_resources_13_8_1_A = false; $scope.human_resources_13_8_1_A_b = true; $scope.human_resources_13_8_1_A_c = false; $scope.human_resources_13_8_1_A_cm = ''; } else if(data.human_resources_13_8_1_A  == 4){ 
				$scope.human_resources_13_8_1_A = data.human_resources_13_8_1_A; $scope.human_resources_13_8_1_A = false; $scope.human_resources_13_8_1_A_b = false; $scope.human_resources_13_8_1_A_c = true; $scope.human_resources_13_8_1_A_cm = ''; } else if( ((data.human_resources_13_8_1_A  >= 0 ) && (data.human_resources_13_8_1_A  < 1)) || ((data.human_resources_13_8_1_A  > 1 ) && (data.human_resources_13_8_1_A  < 2)) || ((data.human_resources_13_8_1_A  > 2 ) && (data.human_resources_13_8_1_A  < 4)) ){ $scope.human_resources_13_8_1_A_cm = data.human_resources_13_8_1_A; $scope.human_resources_13_8_1_A = false; $scope.human_resources_13_8_1_A_b = false; $scope.human_resources_13_8_1_A_c = false; $scope.human_resources_13_8_1_A = ''; }else{ $scope.human_resources_13_8_1_A = ''; $scope.human_resources_13_8_1_A_cm = ''; $scope.human_resources_13_8_1_A = false; $scope.human_resources_13_8_1_A_b = false; $scope.human_resources_13_8_1_A_c = false;}
				if(data.human_resources_13_8_1_B == 2){ $scope.human_resources_13_8_1_B = data.human_resources_13_8_1_B; $scope.human_resources_13_8_1_B = true; $scope.human_resources_13_8_1_B_b = false; $scope.human_resources_13_8_1_B_c = false; $scope.human_resources_13_8_1_B_cm = ''; } else if(data.human_resources_13_8_1_B  == 3){ $scope.human_resources_13_8_1_B = data.human_resources_13_8_1_B; $scope.human_resources_13_8_1_B = false; $scope.human_resources_13_8_1_B_b = true; $scope.human_resources_13_8_1_B_c = false; $scope.human_resources_13_8_1_B_cm = ''; } else if(data.human_resources_13_8_1_B  == 4){ 
				$scope.human_resources_13_8_1_B = data.human_resources_13_8_1_B; $scope.human_resources_13_8_1_B = false; $scope.human_resources_13_8_1_B_b = false; $scope.human_resources_13_8_1_B_c = true; $scope.human_resources_13_8_1_B_cm = ''; } else if( ((data.human_resources_13_8_1_B  >= 0 ) && (data.human_resources_13_8_1_B  < 2)) || ((data.human_resources_13_8_1_B  > 2 ) && (data.human_resources_13_8_1_B  < 3)) || ((data.human_resources_13_8_1_B  > 3 ) && (data.human_resources_13_8_1_B  < 4)) ){ $scope.human_resources_13_8_1_B_cm = data.human_resources_13_8_1_B; $scope.human_resources_13_8_1_B = false; $scope.human_resources_13_8_1_B_b = false; $scope.human_resources_13_8_1_B_c = false; $scope.human_resources_13_8_1_B = ''; }else{ $scope.human_resources_13_8_1_B = ''; $scope.human_resources_13_8_1_B_cm = ''; $scope.human_resources_13_8_1_B = false; $scope.human_resources_13_8_1_B_b = false; $scope.human_resources_13_8_1_B_c = false;}
				if(data.human_resources_13_8_1_C == 0){ $scope.human_resources_13_8_1_C = data.human_resources_13_8_1_C; $scope.human_resources_13_8_1_C = true; $scope.human_resources_13_8_1_C_b = false; $scope.human_resources_13_8_1_C_c = false; $scope.human_resources_13_8_1_C_cm = ''; } else if(data.human_resources_13_8_1_C  == 2){ $scope.human_resources_13_8_1_C = data.human_resources_13_8_1_C; $scope.human_resources_13_8_1_C = false; $scope.human_resources_13_8_1_C_b = true; $scope.human_resources_13_8_1_C_c = false; $scope.human_resources_13_8_1_C_cm = ''; } else if(data.human_resources_13_8_1_C  == ){ $scope.human_resources_13_8_1_C = data.human_resources_13_8_1_C; $scope.human_resources_13_8_1_C = false; $scope.human_resources_13_8_1_C_b = false; $scope.human_resources_13_8_1_C_c = true; $scope.human_resources_13_8_1_C_cm = ''; }else if( ((data.human_resources_13_8_1_C  > 0 ) && (data.human_resources_13_8_1_C  < 2)) || ((data.human_resources_13_8_1_C  > 2 ) && (data.human_resources_13_8_1_C  < )) )
				{ $scope.human_resources_13_8_1_C_cm = data.human_resources_13_8_1_C; $scope.human_resources_13_8_1_C = false; $scope.human_resources_13_8_1_C_b = false;  $scope.human_resources_13_8_1_C_c = false; $scope.human_resources_13_8_1_C = ''; }else{ $scope.human_resources_13_8_1_C = ''; $scope.human_resources_13_8_1_C_cm = ''; $scope.human_resources_13_8_1_C = false; $scope.human_resources_13_8_1_C_b = false; $scope.human_resources_13_8_1_C_c = false; }
				$scope.general_14_1_1_text = data.general_14_1_1_text;
				if(data.general_14_1_1_A == 7){ $scope.general_14_1_1_A = data.general_14_1_1_A; $scope.general_14_1_1_A = true; $scope.general_14_1_1_A_b = false; $scope.general_14_1_1_A_c = false; $scope.general_14_1_1_A_cm = ''; } else if(data.general_14_1_1_A  == 10){ $scope.general_14_1_1_A = data.general_14_1_1_A; $scope.general_14_1_1_A = false; $scope.general_14_1_1_A_b = true; $scope.general_14_1_1_A_c = false; $scope.general_14_1_1_A_cm = ''; } else if(data.general_14_1_1_A  == 20){ 
				$scope.general_14_1_1_A = data.general_14_1_1_A; $scope.general_14_1_1_A = false; $scope.general_14_1_1_A_b = false; $scope.general_14_1_1_A_c = true; $scope.general_14_1_1_A_cm = ''; } else if( ((data.general_14_1_1_A  >= 0 ) && (data.general_14_1_1_A  < 7)) || ((data.general_14_1_1_A  > 7 ) && (data.general_14_1_1_A  < 10)) || ((data.general_14_1_1_A  > 10 ) && (data.general_14_1_1_A  < 20)) ){ $scope.general_14_1_1_A_cm = data.general_14_1_1_A; $scope.general_14_1_1_A = false; $scope.general_14_1_1_A_b = false; $scope.general_14_1_1_A_c = false; $scope.general_14_1_1_A = ''; }else{ $scope.general_14_1_1_A = ''; $scope.general_14_1_1_A_cm = ''; $scope.general_14_1_1_A = false; $scope.general_14_1_1_A_b = false; $scope.general_14_1_1_A_c = false;}
				$scope.general_14_2_1_text = data.general_14_2_1_text;
				if(data.general_14_2_1_A == 0){ $scope.general_14_2_1_A = data.general_14_2_1_A; $scope.general_14_2_1_A = true; $scope.general_14_2_1_A_b = false; $scope.general_14_2_1_A_c = false; $scope.general_14_2_1_A_cm = ''; } else if(data.general_14_2_1_A  == 15){ $scope.general_14_2_1_A = data.general_14_2_1_A; $scope.general_14_2_1_A = false; $scope.general_14_2_1_A_b = true; $scope.general_14_2_1_A_c = false; $scope.general_14_2_1_A_cm = ''; } else if(data.general_14_2_1_A  == 20){ $scope.general_14_2_1_A = data.general_14_2_1_A; $scope.general_14_2_1_A = false; $scope.general_14_2_1_A_b = false; $scope.general_14_2_1_A_c = true; $scope.general_14_2_1_A_cm = ''; }else if( ((data.general_14_2_1_A  > 0 ) && (data.general_14_2_1_A  < 15)) || ((data.general_14_2_1_A  > 15 ) && (data.general_14_2_1_A  < 20)) )
				{ $scope.general_14_2_1_A_cm = data.general_14_2_1_A; $scope.general_14_2_1_A = false; $scope.general_14_2_1_A_b = false;  $scope.general_14_2_1_A_c = false; $scope.general_14_2_1_A = ''; }else{ $scope.general_14_2_1_A = ''; $scope.general_14_2_1_A_cm = ''; $scope.general_14_2_1_A = false; $scope.general_14_2_1_A_b = false; $scope.general_14_2_1_A_c = false; }
				$scope.general_14_3_1_text = data.general_14_3_1_text;
				if(data.general_14_3_1_A == 0){ $scope.general_14_3_1_A = data.general_14_3_1_A; $scope.general_14_3_1_A = true; $scope.general_14_3_1_A_b = false; $scope.general_14_3_1_A_c = false; $scope.general_14_3_1_A_cm = ''; } else if(data.general_14_3_1_A  == 10){ $scope.general_14_3_1_A = data.general_14_3_1_A; $scope.general_14_3_1_A = false; $scope.general_14_3_1_A_b = true; $scope.general_14_3_1_A_c = false; $scope.general_14_3_1_A_cm = ''; } else if(data.general_14_3_1_A  == ){ $scope.general_14_3_1_A = data.general_14_3_1_A; $scope.general_14_3_1_A = false; $scope.general_14_3_1_A_b = false; $scope.general_14_3_1_A_c = true; $scope.general_14_3_1_A_cm = ''; }else if( ((data.general_14_3_1_A  > 0 ) && (data.general_14_3_1_A  < 10)) || ((data.general_14_3_1_A  > 10 ) && (data.general_14_3_1_A  < )) )
				{ $scope.general_14_3_1_A_cm = data.general_14_3_1_A; $scope.general_14_3_1_A = false; $scope.general_14_3_1_A_b = false;  $scope.general_14_3_1_A_c = false; $scope.general_14_3_1_A = ''; }else{ $scope.general_14_3_1_A = ''; $scope.general_14_3_1_A_cm = ''; $scope.general_14_3_1_A = false; $scope.general_14_3_1_A_b = false; $scope.general_14_3_1_A_c = false; }
				if(data.general_14_3_1_B_a == 4){ $scope.general_14_3_1_B_a = data.general_14_3_1_B_a; $scope.general_14_3_1_B_a= true; $scope.general_14_3_1_B_a_cm = ''; } else if((data.general_14_3_1_B_a > 0 ) && (data.general_14_3_1_B_a < 4)){ $scope.general_14_3_1_B_a_cm = data.general_14_3_1_B_a; $scope.general_14_3_1_B_a= false; $scope.general_14_3_1_B_a= ''; }else{ $scope.general_14_3_1_B_a= ''; $scope.general_14_3_1_B_a_cm = ''; $scope.general_14_3_1_B_a= false; }
				if(data.general_14_3_1_B_b == 4){ $scope.general_14_3_1_B_b = data.general_14_3_1_B_b; $scope.general_14_3_1_B_b= true; $scope.general_14_3_1_B_b_cm = ''; } else if((data.general_14_3_1_B_b > 0 ) && (data.general_14_3_1_B_b < 4)){ $scope.general_14_3_1_B_b_cm = data.general_14_3_1_B_b; $scope.general_14_3_1_B_b= false; $scope.general_14_3_1_B_b= ''; }else{ $scope.general_14_3_1_B_b= ''; $scope.general_14_3_1_B_b_cm = ''; $scope.general_14_3_1_B_b= false; }
				if(data.general_14_3_1_B_c == 4){ $scope.general_14_3_1_B_c = data.general_14_3_1_B_c; $scope.general_14_3_1_B_c= true; $scope.general_14_3_1_B_c_cm = ''; } else if((data.general_14_3_1_B_c > 0 ) && (data.general_14_3_1_B_c < 4)){ $scope.general_14_3_1_B_c_cm = data.general_14_3_1_B_c; $scope.general_14_3_1_B_c= false; $scope.general_14_3_1_B_c= ''; }else{ $scope.general_14_3_1_B_c= ''; $scope.general_14_3_1_B_c_cm = ''; $scope.general_14_3_1_B_c= false; }
				if(data.general_14_3_1_B_d == 4){ $scope.general_14_3_1_B_d = data.general_14_3_1_B_d; $scope.general_14_3_1_B_d= true; $scope.general_14_3_1_B_d_cm = ''; } else if((data.general_14_3_1_B_d > 0 ) && (data.general_14_3_1_B_d < 4)){ $scope.general_14_3_1_B_d_cm = data.general_14_3_1_B_d; $scope.general_14_3_1_B_d= false; $scope.general_14_3_1_B_d= ''; }else{ $scope.general_14_3_1_B_d= ''; $scope.general_14_3_1_B_d_cm = ''; $scope.general_14_3_1_B_d= false; }
				if(data.general_14_3_1_B_e == 4){ $scope.general_14_3_1_B_e = data.general_14_3_1_B_e; $scope.general_14_3_1_B_e= true; $scope.general_14_3_1_B_e_cm = ''; } else if((data.general_14_3_1_B_e > 0 ) && (data.general_14_3_1_B_e < 4)){ $scope.general_14_3_1_B_e_cm = data.general_14_3_1_B_e; $scope.general_14_3_1_B_e= false; $scope.general_14_3_1_B_e= ''; }else{ $scope.general_14_3_1_B_e= ''; $scope.general_14_3_1_B_e_cm = ''; $scope.general_14_3_1_B_e= false; }
				if(data.general_14_3_1_C  == 5){ $scope.general_14_3_1_C  = data.general_14_3_1_C ; $scope.general_14_3_1_C = true; $scope.general_14_3_1_C_b = false; $scope.general_14_3_1_C_cm = ''; } else if(data.general_14_3_1_C  == 10){ $scope.general_14_3_1_C  = data.general_14_3_1_C ; $scope.general_14_3_1_C = false; $scope.general_14_3_1_C_b = true; $scope.general_14_3_1_C_cm = ''; }else if( ((data.general_14_3_1_C  > 0 ) && (data.general_14_3_1_C  < 5)) || ((data.general_14_3_1_C  > 5 ) && (data.general_14_3_1_C  < 10)))
				{ $scope.general_14_3_1_C_cm = data.general_14_3_1_C ; $scope.general_14_3_1_C = false; $scope.general_14_3_1_C_b = false; $scope.general_14_3_1_C  = ''; }else{ $scope.general_14_3_1_C  = ''; $scope.general_14_3_1_C_cm = ''; $scope.general_14_3_1_C = false; $scope.general_14_3_1_C_b = false; }
				$scope.general_14_4_1_text = data.general_14_4_1_text;
				if(data.general_14_4_1_A == 5){ $scope.general_14_4_1_A = data.general_14_4_1_A; $scope.general_14_4_1_A = true; $scope.general_14_4_1_A_b = false; $scope.general_14_4_1_A_c = false; $scope.general_14_4_1_A_cm = ''; } else if(data.general_14_4_1_A  == 8){ $scope.general_14_4_1_A = data.general_14_4_1_A; $scope.general_14_4_1_A = false; $scope.general_14_4_1_A_b = true; $scope.general_14_4_1_A_c = false; $scope.general_14_4_1_A_cm = ''; } else if(data.general_14_4_1_A  == 10){ 
				$scope.general_14_4_1_A = data.general_14_4_1_A; $scope.general_14_4_1_A = false; $scope.general_14_4_1_A_b = false; $scope.general_14_4_1_A_c = true; $scope.general_14_4_1_A_cm = ''; } else if( ((data.general_14_4_1_A  >= 0 ) && (data.general_14_4_1_A  < 5)) || ((data.general_14_4_1_A  > 5 ) && (data.general_14_4_1_A  < 8)) || ((data.general_14_4_1_A  > 8 ) && (data.general_14_4_1_A  < 10)) ){ $scope.general_14_4_1_A_cm = data.general_14_4_1_A; $scope.general_14_4_1_A = false; $scope.general_14_4_1_A_b = false; $scope.general_14_4_1_A_c = false; $scope.general_14_4_1_A = ''; }else{ $scope.general_14_4_1_A = ''; $scope.general_14_4_1_A_cm = ''; $scope.general_14_4_1_A = false; $scope.general_14_4_1_A_b = false; $scope.general_14_4_1_A_c = false;}
				if(data.general_14_4_1_B == 0){ $scope.general_14_4_1_B = data.general_14_4_1_B; $scope.general_14_4_1_B = true; $scope.general_14_4_1_B_b = false; $scope.general_14_4_1_B_c = false; $scope.general_14_4_1_B_cm = ''; } else if(data.general_14_4_1_B  == 10){ $scope.general_14_4_1_B = data.general_14_4_1_B; $scope.general_14_4_1_B = false; $scope.general_14_4_1_B_b = true; $scope.general_14_4_1_B_c = false; $scope.general_14_4_1_B_cm = ''; } else if(data.general_14_4_1_B  == ){ $scope.general_14_4_1_B = data.general_14_4_1_B; $scope.general_14_4_1_B = false; $scope.general_14_4_1_B_b = false; $scope.general_14_4_1_B_c = true; $scope.general_14_4_1_B_cm = ''; }else if( ((data.general_14_4_1_B  > 0 ) && (data.general_14_4_1_B  < 10)) || ((data.general_14_4_1_B  > 10 ) && (data.general_14_4_1_B  < )) )
				{ $scope.general_14_4_1_B_cm = data.general_14_4_1_B; $scope.general_14_4_1_B = false; $scope.general_14_4_1_B_b = false;  $scope.general_14_4_1_B_c = false; $scope.general_14_4_1_B = ''; }else{ $scope.general_14_4_1_B = ''; $scope.general_14_4_1_B_cm = ''; $scope.general_14_4_1_B = false; $scope.general_14_4_1_B_b = false; $scope.general_14_4_1_B_c = false; }
				$scope.general_14_5_1_text = data.general_14_5_1_text;
				if(data.general_14_5_1_A == 0){ $scope.general_14_5_1_A = data.general_14_5_1_A; $scope.general_14_5_1_A = true; $scope.general_14_5_1_A_b = false; $scope.general_14_5_1_A_c = false; $scope.general_14_5_1_A_cm = ''; } else if(data.general_14_5_1_A  == 3){ $scope.general_14_5_1_A = data.general_14_5_1_A; $scope.general_14_5_1_A = false; $scope.general_14_5_1_A_b = true; $scope.general_14_5_1_A_c = false; $scope.general_14_5_1_A_cm = ''; } else if(data.general_14_5_1_A  == ){ $scope.general_14_5_1_A = data.general_14_5_1_A; $scope.general_14_5_1_A = false; $scope.general_14_5_1_A_b = false; $scope.general_14_5_1_A_c = true; $scope.general_14_5_1_A_cm = ''; }else if( ((data.general_14_5_1_A  > 0 ) && (data.general_14_5_1_A  < 3)) || ((data.general_14_5_1_A  > 3 ) && (data.general_14_5_1_A  < )) )
				{ $scope.general_14_5_1_A_cm = data.general_14_5_1_A; $scope.general_14_5_1_A = false; $scope.general_14_5_1_A_b = false;  $scope.general_14_5_1_A_c = false; $scope.general_14_5_1_A = ''; }else{ $scope.general_14_5_1_A = ''; $scope.general_14_5_1_A_cm = ''; $scope.general_14_5_1_A = false; $scope.general_14_5_1_A_b = false; $scope.general_14_5_1_A_c = false; }
				if(data.general_14_5_1_B == 3){ $scope.general_14_5_1_B = data.general_14_5_1_B; $scope.general_14_5_1_B = true; $scope.general_14_5_1_B_b = false; $scope.general_14_5_1_B_c = false; $scope.general_14_5_1_B_cm = ''; } else if(data.general_14_5_1_B  == 5){ $scope.general_14_5_1_B = data.general_14_5_1_B; $scope.general_14_5_1_B = false; $scope.general_14_5_1_B_b = true; $scope.general_14_5_1_B_c = false; $scope.general_14_5_1_B_cm = ''; } else if(data.general_14_5_1_B  == 7){ 
				$scope.general_14_5_1_B = data.general_14_5_1_B; $scope.general_14_5_1_B = false; $scope.general_14_5_1_B_b = false; $scope.general_14_5_1_B_c = true; $scope.general_14_5_1_B_cm = ''; } else if( ((data.general_14_5_1_B  >= 0 ) && (data.general_14_5_1_B  < 3)) || ((data.general_14_5_1_B  > 3 ) && (data.general_14_5_1_B  < 5)) || ((data.general_14_5_1_B  > 5 ) && (data.general_14_5_1_B  < 7)) ){ $scope.general_14_5_1_B_cm = data.general_14_5_1_B; $scope.general_14_5_1_B = false; $scope.general_14_5_1_B_b = false; $scope.general_14_5_1_B_c = false; $scope.general_14_5_1_B = ''; }else{ $scope.general_14_5_1_B = ''; $scope.general_14_5_1_B_cm = ''; $scope.general_14_5_1_B = false; $scope.general_14_5_1_B_b = false; $scope.general_14_5_1_B_c = false;}
				$scope.general_14_6_1_text = data.general_14_6_1_text;
				if(data.general_14_6_1_A == 0){ $scope.general_14_6_1_A = data.general_14_6_1_A; $scope.general_14_6_1_A = true; $scope.general_14_6_1_A_b = false; $scope.general_14_6_1_A_c = false; $scope.general_14_6_1_A_cm = ''; } else if(data.general_14_6_1_A  == 3){ $scope.general_14_6_1_A = data.general_14_6_1_A; $scope.general_14_6_1_A = false; $scope.general_14_6_1_A_b = true; $scope.general_14_6_1_A_c = false; $scope.general_14_6_1_A_cm = ''; } else if(data.general_14_6_1_A  == ){ $scope.general_14_6_1_A = data.general_14_6_1_A; $scope.general_14_6_1_A = false; $scope.general_14_6_1_A_b = false; $scope.general_14_6_1_A_c = true; $scope.general_14_6_1_A_cm = ''; }else if( ((data.general_14_6_1_A  > 0 ) && (data.general_14_6_1_A  < 3)) || ((data.general_14_6_1_A  > 3 ) && (data.general_14_6_1_A  < )) )
				{ $scope.general_14_6_1_A_cm = data.general_14_6_1_A; $scope.general_14_6_1_A = false; $scope.general_14_6_1_A_b = false;  $scope.general_14_6_1_A_c = false; $scope.general_14_6_1_A = ''; }else{ $scope.general_14_6_1_A = ''; $scope.general_14_6_1_A_cm = ''; $scope.general_14_6_1_A = false; $scope.general_14_6_1_A_b = false; $scope.general_14_6_1_A_c = false; }
				if(data.general_14_6_1_B == 3){ $scope.general_14_6_1_B = data.general_14_6_1_B; $scope.general_14_6_1_B = true; $scope.general_14_6_1_B_b = false; $scope.general_14_6_1_B_c = false; $scope.general_14_6_1_B_cm = ''; } else if(data.general_14_6_1_B  == 5){ $scope.general_14_6_1_B = data.general_14_6_1_B; $scope.general_14_6_1_B = false; $scope.general_14_6_1_B_b = true; $scope.general_14_6_1_B_c = false; $scope.general_14_6_1_B_cm = ''; } else if(data.general_14_6_1_B  == 7){ 
				$scope.general_14_6_1_B = data.general_14_6_1_B; $scope.general_14_6_1_B = false; $scope.general_14_6_1_B_b = false; $scope.general_14_6_1_B_c = true; $scope.general_14_6_1_B_cm = ''; } else if( ((data.general_14_6_1_B  >= 0 ) && (data.general_14_6_1_B  < 3)) || ((data.general_14_6_1_B  > 3 ) && (data.general_14_6_1_B  < 5)) || ((data.general_14_6_1_B  > 5 ) && (data.general_14_6_1_B  < 7)) ){ $scope.general_14_6_1_B_cm = data.general_14_6_1_B; $scope.general_14_6_1_B = false; $scope.general_14_6_1_B_b = false; $scope.general_14_6_1_B_c = false; $scope.general_14_6_1_B = ''; }else{ $scope.general_14_6_1_B = ''; $scope.general_14_6_1_B_cm = ''; $scope.general_14_6_1_B = false; $scope.general_14_6_1_B_b = false; $scope.general_14_6_1_B_c = false;}
				$scope.general_14_7_1_text = data.general_14_7_1_text;
				if(data.general_14_7_1_A == 5){ $scope.general_14_7_1_A = data.general_14_7_1_A; $scope.general_14_7_1_A = true; $scope.general_14_7_1_A_b = false; $scope.general_14_7_1_A_c = false; $scope.general_14_7_1_A_cm = ''; } else if(data.general_14_7_1_A  == 7){ $scope.general_14_7_1_A = data.general_14_7_1_A; $scope.general_14_7_1_A = false; $scope.general_14_7_1_A_b = true; $scope.general_14_7_1_A_c = false; $scope.general_14_7_1_A_cm = ''; } else if(data.general_14_7_1_A  == 10){ 
				$scope.general_14_7_1_A = data.general_14_7_1_A; $scope.general_14_7_1_A = false; $scope.general_14_7_1_A_b = false; $scope.general_14_7_1_A_c = true; $scope.general_14_7_1_A_cm = ''; } else if( ((data.general_14_7_1_A  >= 0 ) && (data.general_14_7_1_A  < 5)) || ((data.general_14_7_1_A  > 5 ) && (data.general_14_7_1_A  < 7)) || ((data.general_14_7_1_A  > 7 ) && (data.general_14_7_1_A  < 10)) ){ $scope.general_14_7_1_A_cm = data.general_14_7_1_A; $scope.general_14_7_1_A = false; $scope.general_14_7_1_A_b = false; $scope.general_14_7_1_A_c = false; $scope.general_14_7_1_A = ''; }else{ $scope.general_14_7_1_A = ''; $scope.general_14_7_1_A_cm = ''; $scope.general_14_7_1_A = false; $scope.general_14_7_1_A_b = false; $scope.general_14_7_1_A_c = false;}
				if(data.general_14_7_1_B == 5){ $scope.general_14_7_1_B = data.general_14_7_1_B; $scope.general_14_7_1_B = true; $scope.general_14_7_1_B_b = false; $scope.general_14_7_1_B_c = false; $scope.general_14_7_1_B_cm = ''; } else if(data.general_14_7_1_B  == 7){ $scope.general_14_7_1_B = data.general_14_7_1_B; $scope.general_14_7_1_B = false; $scope.general_14_7_1_B_b = true; $scope.general_14_7_1_B_c = false; $scope.general_14_7_1_B_cm = ''; } else if(data.general_14_7_1_B  == 10){ 
				$scope.general_14_7_1_B = data.general_14_7_1_B; $scope.general_14_7_1_B = false; $scope.general_14_7_1_B_b = false; $scope.general_14_7_1_B_c = true; $scope.general_14_7_1_B_cm = ''; } else if( ((data.general_14_7_1_B  >= 0 ) && (data.general_14_7_1_B  < 5)) || ((data.general_14_7_1_B  > 5 ) && (data.general_14_7_1_B  < 7)) || ((data.general_14_7_1_B  > 7 ) && (data.general_14_7_1_B  < 10)) ){ $scope.general_14_7_1_B_cm = data.general_14_7_1_B; $scope.general_14_7_1_B = false; $scope.general_14_7_1_B_b = false; $scope.general_14_7_1_B_c = false; $scope.general_14_7_1_B = ''; }else{ $scope.general_14_7_1_B = ''; $scope.general_14_7_1_B_cm = ''; $scope.general_14_7_1_B = false; $scope.general_14_7_1_B_b = false; $scope.general_14_7_1_B_c = false;}
				if(data.general_14_7_1_C == 5){ $scope.general_14_7_1_C = data.general_14_7_1_C; $scope.general_14_7_1_C = true; $scope.general_14_7_1_C_b = false; $scope.general_14_7_1_C_c = false; $scope.general_14_7_1_C_cm = ''; } else if(data.general_14_7_1_C  == 7){ $scope.general_14_7_1_C = data.general_14_7_1_C; $scope.general_14_7_1_C = false; $scope.general_14_7_1_C_b = true; $scope.general_14_7_1_C_c = false; $scope.general_14_7_1_C_cm = ''; } else if(data.general_14_7_1_C  == 10){ 
				$scope.general_14_7_1_C = data.general_14_7_1_C; $scope.general_14_7_1_C = false; $scope.general_14_7_1_C_b = false; $scope.general_14_7_1_C_c = true; $scope.general_14_7_1_C_cm = ''; } else if( ((data.general_14_7_1_C  >= 0 ) && (data.general_14_7_1_C  < 5)) || ((data.general_14_7_1_C  > 5 ) && (data.general_14_7_1_C  < 7)) || ((data.general_14_7_1_C  > 7 ) && (data.general_14_7_1_C  < 10)) ){ $scope.general_14_7_1_C_cm = data.general_14_7_1_C; $scope.general_14_7_1_C = false; $scope.general_14_7_1_C_b = false; $scope.general_14_7_1_C_c = false; $scope.general_14_7_1_C = ''; }else{ $scope.general_14_7_1_C = ''; $scope.general_14_7_1_C_cm = ''; $scope.general_14_7_1_C = false; $scope.general_14_7_1_C_b = false; $scope.general_14_7_1_C_c = false;}
				$scope.general_14_8_1_text = data.general_14_8_1_text;
				if(data.general_14_8_1_A == 0){ $scope.general_14_8_1_A = data.general_14_8_1_A; $scope.general_14_8_1_A = true; $scope.general_14_8_1_A_b = false; $scope.general_14_8_1_A_c = false; $scope.general_14_8_1_A_cm = ''; } else if(data.general_14_8_1_A  == 3){ $scope.general_14_8_1_A = data.general_14_8_1_A; $scope.general_14_8_1_A = false; $scope.general_14_8_1_A_b = true; $scope.general_14_8_1_A_c = false; $scope.general_14_8_1_A_cm = ''; } else if(data.general_14_8_1_A  == ){ $scope.general_14_8_1_A = data.general_14_8_1_A; $scope.general_14_8_1_A = false; $scope.general_14_8_1_A_b = false; $scope.general_14_8_1_A_c = true; $scope.general_14_8_1_A_cm = ''; }else if( ((data.general_14_8_1_A  > 0 ) && (data.general_14_8_1_A  < 3)) || ((data.general_14_8_1_A  > 3 ) && (data.general_14_8_1_A  < )) )
				{ $scope.general_14_8_1_A_cm = data.general_14_8_1_A; $scope.general_14_8_1_A = false; $scope.general_14_8_1_A_b = false;  $scope.general_14_8_1_A_c = false; $scope.general_14_8_1_A = ''; }else{ $scope.general_14_8_1_A = ''; $scope.general_14_8_1_A_cm = ''; $scope.general_14_8_1_A = false; $scope.general_14_8_1_A_b = false; $scope.general_14_8_1_A_c = false; }
				if(data.general_14_8_1_B == 0){ $scope.general_14_8_1_B = data.general_14_8_1_B; $scope.general_14_8_1_B = true; $scope.general_14_8_1_B_b = false; $scope.general_14_8_1_B_c = false; $scope.general_14_8_1_B_cm = ''; } else if(data.general_14_8_1_B  == 2){ $scope.general_14_8_1_B = data.general_14_8_1_B; $scope.general_14_8_1_B = false; $scope.general_14_8_1_B_b = true; $scope.general_14_8_1_B_c = false; $scope.general_14_8_1_B_cm = ''; } else if(data.general_14_8_1_B  == ){ $scope.general_14_8_1_B = data.general_14_8_1_B; $scope.general_14_8_1_B = false; $scope.general_14_8_1_B_b = false; $scope.general_14_8_1_B_c = true; $scope.general_14_8_1_B_cm = ''; }else if( ((data.general_14_8_1_B  > 0 ) && (data.general_14_8_1_B  < 2)) || ((data.general_14_8_1_B  > 2 ) && (data.general_14_8_1_B  < )) )
				{ $scope.general_14_8_1_B_cm = data.general_14_8_1_B; $scope.general_14_8_1_B = false; $scope.general_14_8_1_B_b = false;  $scope.general_14_8_1_B_c = false; $scope.general_14_8_1_B = ''; }else{ $scope.general_14_8_1_B = ''; $scope.general_14_8_1_B_cm = ''; $scope.general_14_8_1_B = false; $scope.general_14_8_1_B_b = false; $scope.general_14_8_1_B_c = false; }
				if(data.general_14_8_1_C_a == 1){ $scope.general_14_8_1_C_a = data.general_14_8_1_C_a; $scope.general_14_8_1_C_a= true; $scope.general_14_8_1_C_a_cm = ''; } else if((data.general_14_8_1_C_a > 0 ) && (data.general_14_8_1_C_a < 1)){ $scope.general_14_8_1_C_a_cm = data.general_14_8_1_C_a; $scope.general_14_8_1_C_a= false; $scope.general_14_8_1_C_a= ''; }else{ $scope.general_14_8_1_C_a= ''; $scope.general_14_8_1_C_a_cm = ''; $scope.general_14_8_1_C_a= false; }
				if(data.general_14_8_1_C_b == 1){ $scope.general_14_8_1_C_b = data.general_14_8_1_C_b; $scope.general_14_8_1_C_b= true; $scope.general_14_8_1_C_b_cm = ''; } else if((data.general_14_8_1_C_b > 0 ) && (data.general_14_8_1_C_b < 1)){ $scope.general_14_8_1_C_b_cm = data.general_14_8_1_C_b; $scope.general_14_8_1_C_b= false; $scope.general_14_8_1_C_b= ''; }else{ $scope.general_14_8_1_C_b= ''; $scope.general_14_8_1_C_b_cm = ''; $scope.general_14_8_1_C_b= false; }
				if(data.general_14_8_1_C_c == 1){ $scope.general_14_8_1_C_c = data.general_14_8_1_C_c; $scope.general_14_8_1_C_c= true; $scope.general_14_8_1_C_c_cm = ''; } else if((data.general_14_8_1_C_c > 0 ) && (data.general_14_8_1_C_c < 1)){ $scope.general_14_8_1_C_c_cm = data.general_14_8_1_C_c; $scope.general_14_8_1_C_c= false; $scope.general_14_8_1_C_c= ''; }else{ $scope.general_14_8_1_C_c= ''; $scope.general_14_8_1_C_c_cm = ''; $scope.general_14_8_1_C_c= false; }
				if(data.general_14_8_1_C_d == 1){ $scope.general_14_8_1_C_d = data.general_14_8_1_C_d; $scope.general_14_8_1_C_d= true; $scope.general_14_8_1_C_d_cm = ''; } else if((data.general_14_8_1_C_d > 0 ) && (data.general_14_8_1_C_d < 1)){ $scope.general_14_8_1_C_d_cm = data.general_14_8_1_C_d; $scope.general_14_8_1_C_d= false; $scope.general_14_8_1_C_d= ''; }else{ $scope.general_14_8_1_C_d= ''; $scope.general_14_8_1_C_d_cm = ''; $scope.general_14_8_1_C_d= false; }
				if(data.general_14_8_1_C_e == 1){ $scope.general_14_8_1_C_e = data.general_14_8_1_C_e; $scope.general_14_8_1_C_e= true; $scope.general_14_8_1_C_e_cm = ''; } else if((data.general_14_8_1_C_e > 0 ) && (data.general_14_8_1_C_e < 1)){ $scope.general_14_8_1_C_e_cm = data.general_14_8_1_C_e; $scope.general_14_8_1_C_e= false; $scope.general_14_8_1_C_e= ''; }else{ $scope.general_14_8_1_C_e= ''; $scope.general_14_8_1_C_e_cm = ''; $scope.general_14_8_1_C_e= false; }
				if(data.general_14_8_1_D == 0){ $scope.general_14_8_1_D = data.general_14_8_1_D; $scope.general_14_8_1_D = true; $scope.general_14_8_1_D_b = false; $scope.general_14_8_1_D_c = false; $scope.general_14_8_1_D_cm = ''; } else if(data.general_14_8_1_D  == 2){ $scope.general_14_8_1_D = data.general_14_8_1_D; $scope.general_14_8_1_D = false; $scope.general_14_8_1_D_b = true; $scope.general_14_8_1_D_c = false; $scope.general_14_8_1_D_cm = ''; } else if(data.general_14_8_1_D  == ){ $scope.general_14_8_1_D = data.general_14_8_1_D; $scope.general_14_8_1_D = false; $scope.general_14_8_1_D_b = false; $scope.general_14_8_1_D_c = true; $scope.general_14_8_1_D_cm = ''; }else if( ((data.general_14_8_1_D  > 0 ) && (data.general_14_8_1_D  < 2)) || ((data.general_14_8_1_D  > 2 ) && (data.general_14_8_1_D  < )) )
				{ $scope.general_14_8_1_D_cm = data.general_14_8_1_D; $scope.general_14_8_1_D = false; $scope.general_14_8_1_D_b = false;  $scope.general_14_8_1_D_c = false; $scope.general_14_8_1_D = ''; }else{ $scope.general_14_8_1_D = ''; $scope.general_14_8_1_D_cm = ''; $scope.general_14_8_1_D = false; $scope.general_14_8_1_D_b = false; $scope.general_14_8_1_D_c = false; }
				if(data.general_14_8_1_E == 0){ $scope.general_14_8_1_E = data.general_14_8_1_E; $scope.general_14_8_1_E = true; $scope.general_14_8_1_E_b = false; $scope.general_14_8_1_E_c = false; $scope.general_14_8_1_E_cm = ''; } else if(data.general_14_8_1_E  == 2){ $scope.general_14_8_1_E = data.general_14_8_1_E; $scope.general_14_8_1_E = false; $scope.general_14_8_1_E_b = true; $scope.general_14_8_1_E_c = false; $scope.general_14_8_1_E_cm = ''; } else if(data.general_14_8_1_E  == ){ $scope.general_14_8_1_E = data.general_14_8_1_E; $scope.general_14_8_1_E = false; $scope.general_14_8_1_E_b = false; $scope.general_14_8_1_E_c = true; $scope.general_14_8_1_E_cm = ''; }else if( ((data.general_14_8_1_E  > 0 ) && (data.general_14_8_1_E  < 2)) || ((data.general_14_8_1_E  > 2 ) && (data.general_14_8_1_E  < )) )
				{ $scope.general_14_8_1_E_cm = data.general_14_8_1_E; $scope.general_14_8_1_E = false; $scope.general_14_8_1_E_b = false;  $scope.general_14_8_1_E_c = false; $scope.general_14_8_1_E = ''; }else{ $scope.general_14_8_1_E = ''; $scope.general_14_8_1_E_cm = ''; $scope.general_14_8_1_E = false; $scope.general_14_8_1_E_b = false; $scope.general_14_8_1_E_c = false; }
				if(data.general_14_8_1_F == 1){ $scope.general_14_8_1_F = data.general_14_8_1_F; $scope.general_14_8_1_F = true; $scope.general_14_8_1_F_b = false; $scope.general_14_8_1_F_c = false; $scope.general_14_8_1_F_cm = ''; } else if(data.general_14_8_1_F  == 2){ $scope.general_14_8_1_F = data.general_14_8_1_F; $scope.general_14_8_1_F = false; $scope.general_14_8_1_F_b = true; $scope.general_14_8_1_F_c = false; $scope.general_14_8_1_F_cm = ''; } else if(data.general_14_8_1_F  == 3){ 
				$scope.general_14_8_1_F = data.general_14_8_1_F; $scope.general_14_8_1_F = false; $scope.general_14_8_1_F_b = false; $scope.general_14_8_1_F_c = true; $scope.general_14_8_1_F_cm = ''; } else if( ((data.general_14_8_1_F  >= 0 ) && (data.general_14_8_1_F  < 1)) || ((data.general_14_8_1_F  > 1 ) && (data.general_14_8_1_F  < 2)) || ((data.general_14_8_1_F  > 2 ) && (data.general_14_8_1_F  < 3)) ){ $scope.general_14_8_1_F_cm = data.general_14_8_1_F; $scope.general_14_8_1_F = false; $scope.general_14_8_1_F_b = false; $scope.general_14_8_1_F_c = false; $scope.general_14_8_1_F = ''; }else{ $scope.general_14_8_1_F = ''; $scope.general_14_8_1_F_cm = ''; $scope.general_14_8_1_F = false; $scope.general_14_8_1_F_b = false; $scope.general_14_8_1_F_c = false;}
				if(data.general_14_8_1_G == 1){ $scope.general_14_8_1_G = data.general_14_8_1_G; $scope.general_14_8_1_G = true; $scope.general_14_8_1_G_b = false; $scope.general_14_8_1_G_c = false; $scope.general_14_8_1_G_cm = ''; } else if(data.general_14_8_1_G  == 2){ $scope.general_14_8_1_G = data.general_14_8_1_G; $scope.general_14_8_1_G = false; $scope.general_14_8_1_G_b = true; $scope.general_14_8_1_G_c = false; $scope.general_14_8_1_G_cm = ''; } else if(data.general_14_8_1_G  == 3){ 
				$scope.general_14_8_1_G = data.general_14_8_1_G; $scope.general_14_8_1_G = false; $scope.general_14_8_1_G_b = false; $scope.general_14_8_1_G_c = true; $scope.general_14_8_1_G_cm = ''; } else if( ((data.general_14_8_1_G  >= 0 ) && (data.general_14_8_1_G  < 1)) || ((data.general_14_8_1_G  > 1 ) && (data.general_14_8_1_G  < 2)) || ((data.general_14_8_1_G  > 2 ) && (data.general_14_8_1_G  < 3)) ){ $scope.general_14_8_1_G_cm = data.general_14_8_1_G; $scope.general_14_8_1_G = false; $scope.general_14_8_1_G_b = false; $scope.general_14_8_1_G_c = false; $scope.general_14_8_1_G = ''; }else{ $scope.general_14_8_1_G = ''; $scope.general_14_8_1_G_cm = ''; $scope.general_14_8_1_G = false; $scope.general_14_8_1_G_b = false; $scope.general_14_8_1_G_c = false;}
				$scope.general_14_9_1_text = data.general_14_9_1_text;
				if(data.general_14_9_1_A == 0){ $scope.general_14_9_1_A = data.general_14_9_1_A; $scope.general_14_9_1_A = true; $scope.general_14_9_1_A_b = false; $scope.general_14_9_1_A_c = false; $scope.general_14_9_1_A_cm = ''; } else if(data.general_14_9_1_A  == 5){ $scope.general_14_9_1_A = data.general_14_9_1_A; $scope.general_14_9_1_A = false; $scope.general_14_9_1_A_b = true; $scope.general_14_9_1_A_c = false; $scope.general_14_9_1_A_cm = ''; } else if(data.general_14_9_1_A  == ){ $scope.general_14_9_1_A = data.general_14_9_1_A; $scope.general_14_9_1_A = false; $scope.general_14_9_1_A_b = false; $scope.general_14_9_1_A_c = true; $scope.general_14_9_1_A_cm = ''; }else if( ((data.general_14_9_1_A  > 0 ) && (data.general_14_9_1_A  < 5)) || ((data.general_14_9_1_A  > 5 ) && (data.general_14_9_1_A  < )) )
				{ $scope.general_14_9_1_A_cm = data.general_14_9_1_A; $scope.general_14_9_1_A = false; $scope.general_14_9_1_A_b = false;  $scope.general_14_9_1_A_c = false; $scope.general_14_9_1_A = ''; }else{ $scope.general_14_9_1_A = ''; $scope.general_14_9_1_A_cm = ''; $scope.general_14_9_1_A = false; $scope.general_14_9_1_A_b = false; $scope.general_14_9_1_A_c = false; }
				if(data.general_14_9_1_B == 0){ $scope.general_14_9_1_B = data.general_14_9_1_B; $scope.general_14_9_1_B = true; $scope.general_14_9_1_B_b = false; $scope.general_14_9_1_B_c = false; $scope.general_14_9_1_B_cm = ''; } else if(data.general_14_9_1_B  == 10){ $scope.general_14_9_1_B = data.general_14_9_1_B; $scope.general_14_9_1_B = false; $scope.general_14_9_1_B_b = true; $scope.general_14_9_1_B_c = false; $scope.general_14_9_1_B_cm = ''; } else if(data.general_14_9_1_B  == ){ $scope.general_14_9_1_B = data.general_14_9_1_B; $scope.general_14_9_1_B = false; $scope.general_14_9_1_B_b = false; $scope.general_14_9_1_B_c = true; $scope.general_14_9_1_B_cm = ''; }else if( ((data.general_14_9_1_B  > 0 ) && (data.general_14_9_1_B  < 10)) || ((data.general_14_9_1_B  > 10 ) && (data.general_14_9_1_B  < )) )
				{ $scope.general_14_9_1_B_cm = data.general_14_9_1_B; $scope.general_14_9_1_B = false; $scope.general_14_9_1_B_b = false;  $scope.general_14_9_1_B_c = false; $scope.general_14_9_1_B = ''; }else{ $scope.general_14_9_1_B = ''; $scope.general_14_9_1_B_cm = ''; $scope.general_14_9_1_B = false; $scope.general_14_9_1_B_b = false; $scope.general_14_9_1_B_c = false; }
				 
				

			});
	};
	
	<!--------- Interchanging Selected Marks Custom Marks ----------------->
	
	//LOCATION
	
	$scope.check_location_1_0_1_A = function(){ $scope.location_1_0_1_A = ''; $scope.location_1_0_1_A_a = false; $scope.location_1_0_1_A_b = false; };
	$scope.check_location_1_0_1_A_cm = function(){ $scope.location_1_0_1_A_cm = ''; };
	$scope.check_location_1_0_1_B = function(){ $scope.location_1_0_1_B = ''; $scope.location_1_0_1_B_a = false; $scope.location_1_0_1_B_b = false; };
	$scope.check_location_1_0_1_B_cm = function(){ $scope.location_1_0_1_B_cm = ''; };
	$scope.check_location_1_1_1_A = function(){ $scope.location_1_1_1_A = ''; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = false; };
	$scope.check_location_1_1_1_A_cm = function(){ $scope.location_1_1_1_A_cm = ''; };
	$scope.check_location_1_1_2_A = function(){ $scope.location_1_1_2_A = ''; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_c = false; };
	$scope.check_location_1_1_2_A_cm = function(){ $scope.location_1_1_2_A_cm = ''; };
	$scope.check_location_1_1_3_A = function(){ $scope.location_1_1_3_A = ''; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = false; };
	$scope.check_location_1_1_3_A_cm = function(){ $scope.location_1_1_3_A_cm = ''; };
	$scope.check_location_1_1_3_B_a = function(){ $scope.location_1_1_3_B_a = ''; $scope.location_1_1_3_B_a = false; };
	$scope.check_location_1_1_3_B_a_cm = function(){ $scope.location_1_1_3_B_a_cm = ''; };
	$scope.check_location_1_1_3_B_b = function(){ $scope.location_1_1_3_B_b = ''; $scope.location_1_1_3_B_b = false; };
	$scope.check_location_1_1_3_B_b_cm = function(){ $scope.location_1_1_3_B_b_cm = ''; };
	$scope.check_location_1_1_3_B_c = function(){ $scope.location_1_1_3_B_c = ''; $scope.location_1_1_3_B_c = false; };
	$scope.check_location_1_1_3_B_c_cm = function(){ $scope.location_1_1_3_B_c_cm = ''; };
	$scope.check_location_1_1_3_B_d = function(){ $scope.location_1_1_3_B_d = ''; $scope.location_1_1_3_B_d = false; };
	$scope.check_location_1_1_3_B_d_cm = function(){ $scope.location_1_1_3_B_d_cm = ''; };
	$scope.check_location_1_1_4_A = function(){ $scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; };
	$scope.check_location_1_1_4_A_cm = function(){ $scope.location_1_1_4_A_cm = ''; };
	$scope.check_location_1_1_4_B = function(){ $scope.location_1_1_4_B = ''; $scope.location_1_1_4_B_a = false; $scope.location_1_1_4_B_b = false; };
	$scope.check_location_1_1_4_B_cm = function(){ $scope.location_1_1_4_B_cm = ''; };
	$scope.check_location_1_1_4_C = function(){ $scope.location_1_1_4_C = ''; $scope.location_1_1_4_C_a = false; $scope.location_1_1_4_C_b = false; };
	$scope.check_location_1_1_4_C_cm = function(){ $scope.location_1_1_4_C_cm = ''; };
	$scope.check_location_1_1_5_A = function(){ $scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = false; };
	$scope.check_location_1_1_5_A_cm = function(){ $scope.location_1_1_5_A_cm = ''; };
	$scope.check_location_1_1_5_B = function(){ $scope.location_1_1_5_B = ''; $scope.location_1_1_5_B_a = false; $scope.location_1_1_5_B_b = false; };
	$scope.check_location_1_1_5_B_cm = function(){ $scope.location_1_1_5_B_cm = ''; };
	$scope.check_location_1_1_5_C = function(){ $scope.location_1_1_5_C = ''; $scope.location_1_1_5_C_a = false; $scope.location_1_1_5_C_b = false; };
	$scope.check_location_1_1_5_C_cm = function(){ $scope.location_1_1_5_C_cm = ''; };
	$scope.check_location_1_1_5_D = function(){ $scope.location_1_1_5_D = ''; $scope.location_1_1_5_D_a = false; $scope.location_1_1_5_D_b = false; };
	$scope.check_location_1_1_5_D_cm = function(){ $scope.location_1_1_5_D_cm = ''; };
	$scope.check_location_1_2_1_A = function(){ $scope.location_1_2_1_A = ''; $scope.location_1_2_1_A_a = false; $scope.location_1_2_1_A_b = false; };
	$scope.check_location_1_2_1_A_cm = function(){ $scope.location_1_2_1_A_cm = ''; };
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
	$scope.check_building_2_2_2_E = function(){ $scope.building_2_2_2_E = ''; $scope.building_2_2_2_E_a = false; $scope.building_2_2_2_E_b = false; };
	$scope.check_building_2_2_2_E_cm = function(){ $scope.building_2_2_2_E_cm = ''; };
	$scope.check_building_2_2_2_F = function(){ $scope.building_2_2_2_F = ''; $scope.building_2_2_2_F_a = false; $scope.building_2_2_2_F_b = false; $scope.building_2_2_2_F_c = false; };
	$scope.check_building_2_2_2_F_cm = function(){ $scope.building_2_2_2_F_cm = ''; };
	$scope.check_building_2_2_2_G = function(){ $scope.building_2_2_2_G = ''; $scope.building_2_2_2_G_a = false; $scope.building_2_2_2_G_b = false; $scope.building_2_2_2_G_c = false; };
	$scope.check_building_2_2_2_G_cm = function(){ $scope.building_2_2_2_G_cm = ''; };
	$scope.check_building_2_3_1_A = function(){ $scope.building_2_3_1_A = ''; $scope.building_2_3_1_A_a = false; $scope.building_2_3_1_A_b = false; };
	$scope.check_building_2_3_1_A_cm = function(){ $scope.building_2_3_1_A_cm = ''; };
	$scope.check_building_2_4_1_A = function(){ $scope.building_2_4_1_A = ''; $scope.building_2_4_1_A_a = false; $scope.building_2_4_1_A_b = false; };
	$scope.check_building_2_4_1_A_cm = function(){ $scope.building_2_4_1_A_cm = ''; };
	$scope.check_building_2_4_1_B = function(){ $scope.building_2_4_1_B = ''; $scope.building_2_4_1_B_a = false; $scope.building_2_4_1_B_b = false; };
	$scope.check_building_2_4_1_B_cm = function(){ $scope.building_2_4_1_B_cm = ''; };
	$scope.check_building_2_4_1_C = function(){ $scope.building_2_4_1_C = ''; $scope.building_2_4_1_C_a = false; $scope.building_2_4_1_C_b = false; };
	$scope.check_building_2_4_1_C_cm = function(){ $scope.building_2_4_1_C_cm = ''; };
	$scope.check_building_2_4_1_D = function(){ $scope.building_2_4_1_D = ''; $scope.building_2_4_1_D_a = false; $scope.building_2_4_1_D_b = false; };
	$scope.check_building_2_4_1_D_cm = function(){ $scope.building_2_4_1_D_cm = ''; };
	$scope.check_building_2_4_1_E = function(){ $scope.building_2_4_1_E = ''; $scope.building_2_4_1_E_a = false; $scope.building_2_4_1_E_b = false; };
	$scope.check_building_2_4_1_E_cm = function(){ $scope.building_2_4_1_E_cm = ''; };
	$scope.check_building_2_4_1_F = function(){ $scope.building_2_4_1_F = ''; $scope.building_2_4_1_F_a = false; $scope.building_2_4_1_F_b = false; };
	$scope.check_building_2_4_1_F_cm = function(){ $scope.building_2_4_1_F_cm = ''; };
	$scope.check_building_2_4_1_G = function(){ $scope.building_2_4_1_G = ''; $scope.building_2_4_1_G_a = false; $scope.building_2_4_1_G_b = false; $scope.building_2_4_1_G_c = false; };
	$scope.check_building_2_4_1_G_cm = function(){ $scope.building_2_4_1_G_cm = ''; };
	$scope.check_building_2_4_1_H = function(){ $scope.building_2_4_1_H = ''; $scope.building_2_4_1_H_a = false; $scope.building_2_4_1_H_b = false; $scope.building_2_4_1_H_c = false; };
	$scope.check_building_2_4_1_H_cm = function(){ $scope.building_2_4_1_H_cm = ''; };
	$scope.check_building_2_4_1_I = function(){ $scope.building_2_4_1_I = ''; $scope.building_2_4_1_I_a = false; $scope.building_2_4_1_I_b = false; $scope.building_2_4_1_I_c = false; };
	$scope.check_building_2_4_1_I_cm = function(){ $scope.building_2_4_1_I_cm = ''; };
	$scope.check_building_2_4_1_J = function(){ $scope.building_2_4_1_J = ''; $scope.building_2_4_1_J_a = false; $scope.building_2_4_1_J_b = false; $scope.building_2_4_1_J_c = false; };
	$scope.check_building_2_4_1_J_cm = function(){ $scope.building_2_4_1_J_cm = ''; };
	$scope.check_front_office_3_1_1_A = function(){ $scope.front_office_3_1_1_A = ''; $scope.front_office_3_1_1_A_a = false; $scope.front_office_3_1_1_A_b = false; };
	$scope.check_front_office_3_1_1_A_cm = function(){ $scope.front_office_3_1_1_A_cm = ''; };
	$scope.check_front_office_3_1_1_B = function(){ $scope.front_office_3_1_1_B = ''; $scope.front_office_3_1_1_B_a = false; $scope.front_office_3_1_1_B_b = false; };
	$scope.check_front_office_3_1_1_B_cm = function(){ $scope.front_office_3_1_1_B_cm = ''; };
	$scope.check_front_office_3_1_1_C = function(){ $scope.front_office_3_1_1_C = ''; $scope.front_office_3_1_1_C_a = false; $scope.front_office_3_1_1_C_b = false; };
	$scope.check_front_office_3_1_1_C_cm = function(){ $scope.front_office_3_1_1_C_cm = ''; };
	$scope.check_front_office_3_1_1_D = function(){ $scope.front_office_3_1_1_D = ''; $scope.front_office_3_1_1_D_a = false; $scope.front_office_3_1_1_D_b = false; };
	$scope.check_front_office_3_1_1_D_cm = function(){ $scope.front_office_3_1_1_D_cm = ''; };
	$scope.check_front_office_3_1_2_A = function(){ $scope.front_office_3_1_2_A = ''; $scope.front_office_3_1_2_A_a = false; $scope.front_office_3_1_2_A_b = false; $scope.front_office_3_1_2_A_c = false; };
	$scope.check_front_office_3_1_2_A_cm = function(){ $scope.front_office_3_1_2_A_cm = ''; };
	$scope.check_front_office_3_1_2_B = function(){ $scope.front_office_3_1_2_B = ''; $scope.front_office_3_1_2_B_a = false; $scope.front_office_3_1_2_B_b = false; };
	$scope.check_front_office_3_1_2_B_cm = function(){ $scope.front_office_3_1_2_B_cm = ''; };
	$scope.check_front_office_3_1_2_C = function(){ $scope.front_office_3_1_2_C = ''; $scope.front_office_3_1_2_C_a = false; $scope.front_office_3_1_2_C_b = false; $scope.front_office_3_1_2_C_c = false; };
	$scope.check_front_office_3_1_2_C_cm = function(){ $scope.front_office_3_1_2_C_cm = ''; };
	$scope.check_front_office_3_1_2_D = function(){ $scope.front_office_3_1_2_D = ''; $scope.front_office_3_1_2_D_a = false; $scope.front_office_3_1_2_D_b = false; };
	$scope.check_front_office_3_1_2_D_cm = function(){ $scope.front_office_3_1_2_D_cm = ''; };
	$scope.check_front_office_3_1_2_E = function(){ $scope.front_office_3_1_2_E = ''; $scope.front_office_3_1_2_E_a = false; $scope.front_office_3_1_2_E_b = false; };
	$scope.check_front_office_3_1_2_E_cm = function(){ $scope.front_office_3_1_2_E_cm = ''; };
	$scope.check_front_office_3_1_2_F = function(){ $scope.front_office_3_1_2_F = ''; $scope.front_office_3_1_2_F_a = false; $scope.front_office_3_1_2_F_b = false; };
	$scope.check_front_office_3_1_2_F_cm = function(){ $scope.front_office_3_1_2_F_cm = ''; };
	$scope.check_front_office_3_2_1_A = function(){ $scope.front_office_3_2_1_A = ''; $scope.front_office_3_2_1_A_a = false; $scope.front_office_3_2_1_A_b = false; };
	$scope.check_front_office_3_2_1_A_cm = function(){ $scope.front_office_3_2_1_A_cm = ''; };
	$scope.check_front_office_3_2_1_B_a = function(){ $scope.front_office_3_2_1_B_a = ''; $scope.front_office_3_2_1_B_a = false; };
	$scope.check_front_office_3_2_1_B_a_cm = function(){ $scope.front_office_3_2_1_B_a_cm = ''; };
	$scope.check_front_office_3_2_1_B_b = function(){ $scope.front_office_3_2_1_B_b = ''; $scope.front_office_3_2_1_B_b = false; };
	$scope.check_front_office_3_2_1_B_b_cm = function(){ $scope.front_office_3_2_1_B_b_cm = ''; };
	$scope.check_front_office_3_2_1_B_c = function(){ $scope.front_office_3_2_1_B_c = ''; $scope.front_office_3_2_1_B_c = false; };
	$scope.check_front_office_3_2_1_B_c_cm = function(){ $scope.front_office_3_2_1_B_c_cm = ''; };
	$scope.check_front_office_3_2_1_C_a = function(){ $scope.front_office_3_2_1_C_a = ''; $scope.front_office_3_2_1_C_a = false; };
	$scope.check_front_office_3_2_1_C_a_cm = function(){ $scope.front_office_3_2_1_C_a_cm = ''; };
	$scope.check_front_office_3_2_1_C_b = function(){ $scope.front_office_3_2_1_C_b = ''; $scope.front_office_3_2_1_C_b = false; };
	$scope.check_front_office_3_2_1_C_b_cm = function(){ $scope.front_office_3_2_1_C_b_cm = ''; };
	$scope.check_front_office_3_2_1_C_c = function(){ $scope.front_office_3_2_1_C_c = ''; $scope.front_office_3_2_1_C_c = false; };
	$scope.check_front_office_3_2_1_C_c_cm = function(){ $scope.front_office_3_2_1_C_c_cm = ''; };
	$scope.check_front_office_3_2_1_D_a = function(){ $scope.front_office_3_2_1_D_a = ''; $scope.front_office_3_2_1_D_a = false; };
	$scope.check_front_office_3_2_1_D_a_cm = function(){ $scope.front_office_3_2_1_D_a_cm = ''; };
	$scope.check_front_office_3_2_1_D_b = function(){ $scope.front_office_3_2_1_D_b = ''; $scope.front_office_3_2_1_D_b = false; };
	$scope.check_front_office_3_2_1_D_b_cm = function(){ $scope.front_office_3_2_1_D_b_cm = ''; };
	$scope.check_front_office_3_2_1_D_c = function(){ $scope.front_office_3_2_1_D_c = ''; $scope.front_office_3_2_1_D_c = false; };
	$scope.check_front_office_3_2_1_D_c_cm = function(){ $scope.front_office_3_2_1_D_c_cm = ''; };
	$scope.check_front_office_3_2_1_D_d = function(){ $scope.front_office_3_2_1_D_d = ''; $scope.front_office_3_2_1_D_d = false; };
	$scope.check_front_office_3_2_1_D_d_cm = function(){ $scope.front_office_3_2_1_D_d_cm = ''; };
	$scope.check_front_office_3_3_1_A = function(){ $scope.front_office_3_3_1_A = ''; $scope.front_office_3_3_1_A_a = false; $scope.front_office_3_3_1_A_b = false; };
	$scope.check_front_office_3_3_1_A_cm = function(){ $scope.front_office_3_3_1_A_cm = ''; };
	$scope.check_front_office_3_3_1_B = function(){ $scope.front_office_3_3_1_B = ''; $scope.front_office_3_3_1_B_a = false; $scope.front_office_3_3_1_B_b = false; $scope.front_office_3_3_1_B_c = false; };
	$scope.check_front_office_3_3_1_B_cm = function(){ $scope.front_office_3_3_1_B_cm = ''; };
	$scope.check_front_office_3_4_1_A_a = function(){ $scope.front_office_3_4_1_A_a = ''; $scope.front_office_3_4_1_A_a = false; };
	$scope.check_front_office_3_4_1_A_a_cm = function(){ $scope.front_office_3_4_1_A_a_cm = ''; };
	$scope.check_front_office_3_4_1_A_b = function(){ $scope.front_office_3_4_1_A_b = ''; $scope.front_office_3_4_1_A_b = false; };
	$scope.check_front_office_3_4_1_A_b_cm = function(){ $scope.front_office_3_4_1_A_b_cm = ''; };
	$scope.check_front_office_3_4_1_A_c = function(){ $scope.front_office_3_4_1_A_c = ''; $scope.front_office_3_4_1_A_c = false; };
	$scope.check_front_office_3_4_1_A_c_cm = function(){ $scope.front_office_3_4_1_A_c_cm = ''; };
	$scope.check_front_office_3_4_1_A_d = function(){ $scope.front_office_3_4_1_A_d = ''; $scope.front_office_3_4_1_A_d = false; };
	$scope.check_front_office_3_4_1_A_d_cm = function(){ $scope.front_office_3_4_1_A_d_cm = ''; };
	$scope.check_front_office_3_5_1_A = function(){ $scope.front_office_3_5_1_A = ''; $scope.front_office_3_5_1_A_a = false; $scope.front_office_3_5_1_A_b = false; $scope.front_office_3_5_1_A_c = false; $scope.front_office_3_5_1_A_d = false; };
	$scope.check_front_office_3_5_1_A_cm = function(){ $scope.front_office_3_5_1_A_cm = ''; };
	$scope.check_front_office_3_5_1_B = function(){ $scope.front_office_3_5_1_B = ''; $scope.front_office_3_5_1_B_a = false; $scope.front_office_3_5_1_B_b = false; };
	$scope.check_front_office_3_5_1_B_cm = function(){ $scope.front_office_3_5_1_B_cm = ''; };
	$scope.check_front_office_3_5_1_C = function(){ $scope.front_office_3_5_1_C = ''; $scope.front_office_3_5_1_C_a = false; $scope.front_office_3_5_1_C_b = false; };
	$scope.check_front_office_3_5_1_C_cm = function(){ $scope.front_office_3_5_1_C_cm = ''; };
	$scope.check_front_office_3_6_1_A = function(){ $scope.front_office_3_6_1_A = ''; $scope.front_office_3_6_1_A_a = false; $scope.front_office_3_6_1_A_b = false; };
	$scope.check_front_office_3_6_1_A_cm = function(){ $scope.front_office_3_6_1_A_cm = ''; };
	$scope.check_front_office_3_6_1_B = function(){ $scope.front_office_3_6_1_B = ''; $scope.front_office_3_6_1_B_a = false; $scope.front_office_3_6_1_B_b = false; };
	$scope.check_front_office_3_6_1_B_cm = function(){ $scope.front_office_3_6_1_B_cm = ''; };
	$scope.check_front_office_3_7_1_A_a = function(){ $scope.front_office_3_7_1_A_a = ''; $scope.front_office_3_7_1_A_a = false; };
	$scope.check_front_office_3_7_1_A_a_cm = function(){ $scope.front_office_3_7_1_A_a_cm = ''; };
	$scope.check_front_office_3_7_1_A_b = function(){ $scope.front_office_3_7_1_A_b = ''; $scope.front_office_3_7_1_A_b = false; };
	$scope.check_front_office_3_7_1_A_b_cm = function(){ $scope.front_office_3_7_1_A_b_cm = ''; };
	$scope.check_front_office_3_7_1_A_c = function(){ $scope.front_office_3_7_1_A_c = ''; $scope.front_office_3_7_1_A_c = false; };
	$scope.check_front_office_3_7_1_A_c_cm = function(){ $scope.front_office_3_7_1_A_c_cm = ''; };
	$scope.check_front_office_3_7_1_B_a = function(){ $scope.front_office_3_7_1_B_a = ''; $scope.front_office_3_7_1_B_a = false; };
	$scope.check_front_office_3_7_1_B_a_cm = function(){ $scope.front_office_3_7_1_B_a_cm = ''; };
	$scope.check_front_office_3_7_1_B_b = function(){ $scope.front_office_3_7_1_B_b = ''; $scope.front_office_3_7_1_B_b = false; };
	$scope.check_front_office_3_7_1_B_b_cm = function(){ $scope.front_office_3_7_1_B_b_cm = ''; };
	$scope.check_front_office_3_7_1_B_c = function(){ $scope.front_office_3_7_1_B_c = ''; $scope.front_office_3_7_1_B_c = false; };
	$scope.check_front_office_3_7_1_B_c_cm = function(){ $scope.front_office_3_7_1_B_c_cm = ''; };
	$scope.check_front_office_3_8_1_A = function(){ $scope.front_office_3_8_1_A = ''; $scope.front_office_3_8_1_A_a = false; $scope.front_office_3_8_1_A_b = false; };
	$scope.check_front_office_3_8_1_A_cm = function(){ $scope.front_office_3_8_1_A_cm = ''; };
	$scope.check_front_office_3_8_1_B = function(){ $scope.front_office_3_8_1_B = ''; $scope.front_office_3_8_1_B_a = false; $scope.front_office_3_8_1_B_b = false; };
	$scope.check_front_office_3_8_1_B_cm = function(){ $scope.front_office_3_8_1_B_cm = ''; };
	$scope.check_front_office_3_8_1_C = function(){ $scope.front_office_3_8_1_C = ''; $scope.front_office_3_8_1_C_a = false; $scope.front_office_3_8_1_C_b = false; };
	$scope.check_front_office_3_8_1_C_cm = function(){ $scope.front_office_3_8_1_C_cm = ''; };
	$scope.check_front_office_3_8_1_D = function(){ $scope.front_office_3_8_1_D = ''; $scope.front_office_3_8_1_D_a = false; $scope.front_office_3_8_1_D_b = false; };
	$scope.check_front_office_3_8_1_D_cm = function(){ $scope.front_office_3_8_1_D_cm = ''; };
	$scope.check_front_office_3_8_1_E = function(){ $scope.front_office_3_8_1_E = ''; $scope.front_office_3_8_1_E_a = false; $scope.front_office_3_8_1_E_b = false; };
	$scope.check_front_office_3_8_1_E_cm = function(){ $scope.front_office_3_8_1_E_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_A = ''; $scope.lobby_lounge_other_public_areas_4_0_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_A_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_B = ''; $scope.lobby_lounge_other_public_areas_4_0_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_C = ''; $scope.lobby_lounge_other_public_areas_4_0_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_C_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_D = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_D = ''; $scope.lobby_lounge_other_public_areas_4_0_1_D_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_D_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_D_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_D_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_E = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_E = ''; $scope.lobby_lounge_other_public_areas_4_0_1_E_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_E_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_E_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_E_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_F = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_F = ''; $scope.lobby_lounge_other_public_areas_4_0_1_F_a = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_0_1_F_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_0_1_F_cm = function(){ $scope.lobby_lounge_other_public_areas_4_0_1_F_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_A = ''; $scope.lobby_lounge_other_public_areas_4_1_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_1_1_A_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_a = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_a = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_b = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_b = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_c = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_c = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_c_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_d = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_d = ''; $scope.lobby_lounge_other_public_areas_4_1_1_B_d = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_B_d_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_C = ''; $scope.lobby_lounge_other_public_areas_4_1_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_1_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_1_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_1_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_A = ''; $scope.lobby_lounge_other_public_areas_4_2_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_A_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_B = ''; $scope.lobby_lounge_other_public_areas_4_2_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_C = ''; $scope.lobby_lounge_other_public_areas_4_2_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_D_a = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_D_a = ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_D_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_D_b = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_D_b = ''; $scope.lobby_lounge_other_public_areas_4_2_1_D_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_D_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_E = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_E = ''; $scope.lobby_lounge_other_public_areas_4_2_1_E_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_E_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_E_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_E_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_F = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_F = ''; $scope.lobby_lounge_other_public_areas_4_2_1_F_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_F_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_F_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_F_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_G = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_G = ''; $scope.lobby_lounge_other_public_areas_4_2_1_G_a = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_b = false; $scope.lobby_lounge_other_public_areas_4_2_1_G_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_2_1_G_cm = function(){ $scope.lobby_lounge_other_public_areas_4_2_1_G_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_3_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_3_1_A = ''; $scope.lobby_lounge_other_public_areas_4_3_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_A_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_3_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_3_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_3_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_3_1_B = ''; $scope.lobby_lounge_other_public_areas_4_3_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_3_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_3_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_3_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_A = ''; $scope.lobby_lounge_other_public_areas_4_4_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_A_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_B = ''; $scope.lobby_lounge_other_public_areas_4_4_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_C = ''; $scope.lobby_lounge_other_public_areas_4_4_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_D = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_D = ''; $scope.lobby_lounge_other_public_areas_4_4_1_D_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_D_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_D_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_D_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_E = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_E = ''; $scope.lobby_lounge_other_public_areas_4_4_1_E_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_E_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_E_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_E_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_F = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_F = ''; $scope.lobby_lounge_other_public_areas_4_4_1_F_a = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_b = false; $scope.lobby_lounge_other_public_areas_4_4_1_F_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_4_1_F_cm = function(){ $scope.lobby_lounge_other_public_areas_4_4_1_F_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_A = ''; $scope.lobby_lounge_other_public_areas_4_5_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_5_1_A_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_B = ''; $scope.lobby_lounge_other_public_areas_4_5_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_5_1_B_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_C = ''; $scope.lobby_lounge_other_public_areas_4_5_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_5_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_5_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_5_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_A = ''; $scope.lobby_lounge_other_public_areas_4_6_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_6_1_A_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_a = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_a = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_b = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_b = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_c = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_c = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_c_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_d = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_d = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_d = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_d_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_e = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_e = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_e = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_e_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_f = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_f = ''; $scope.lobby_lounge_other_public_areas_4_6_1_B_f = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_B_f_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_C = ''; $scope.lobby_lounge_other_public_areas_4_6_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_6_1_C_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_6_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_6_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_A = ''; $scope.lobby_lounge_other_public_areas_4_7_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_7_1_A_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_a = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_a = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_b = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_b = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_c = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_c = ''; $scope.lobby_lounge_other_public_areas_4_7_1_B_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_B_c_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_a = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_a = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_b = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_b = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_c = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_c = ''; $scope.lobby_lounge_other_public_areas_4_7_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_C_c_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_a = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_a = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_a = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_a_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_b = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_b = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_b_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_c = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_c = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_c_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_d = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_d = ''; $scope.lobby_lounge_other_public_areas_4_7_1_D_d = false; };
	$scope.check_lobby_lounge_other_public_areas_4_7_1_D_d_cm = function(){ $scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_A = ''; $scope.lobby_lounge_other_public_areas_4_8_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_8_1_A_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_A_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_B = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_B = ''; $scope.lobby_lounge_other_public_areas_4_8_1_B_a = false; $scope.lobby_lounge_other_public_areas_4_8_1_B_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_B_cm = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_B_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_C = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_C = ''; $scope.lobby_lounge_other_public_areas_4_8_1_C_a = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_b = false; $scope.lobby_lounge_other_public_areas_4_8_1_C_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_C_cm = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_C_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_D = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_D = ''; $scope.lobby_lounge_other_public_areas_4_8_1_D_a = false; $scope.lobby_lounge_other_public_areas_4_8_1_D_b = false; };
	$scope.check_lobby_lounge_other_public_areas_4_8_1_D_cm = function(){ $scope.lobby_lounge_other_public_areas_4_8_1_D_cm = ''; };
	$scope.check_lobby_lounge_other_public_areas_4_9_1_A = function(){ $scope.lobby_lounge_other_public_areas_4_9_1_A = ''; $scope.lobby_lounge_other_public_areas_4_9_1_A_a = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_b = false; $scope.lobby_lounge_other_public_areas_4_9_1_A_c = false; };
	$scope.check_lobby_lounge_other_public_areas_4_9_1_A_cm = function(){ $scope.lobby_lounge_other_public_areas_4_9_1_A_cm = ''; };
	$scope.check_restaurants_5_1_1_A = function(){ $scope.restaurants_5_1_1_A = ''; $scope.restaurants_5_1_1_A_a = false; $scope.restaurants_5_1_1_A_b = false; $scope.restaurants_5_1_1_A_c = false; };
	$scope.check_restaurants_5_1_1_A_cm = function(){ $scope.restaurants_5_1_1_A_cm = ''; };
	$scope.check_restaurants_5_1_1_B = function(){ $scope.restaurants_5_1_1_B = ''; $scope.restaurants_5_1_1_B_a = false; $scope.restaurants_5_1_1_B_b = false; };
	$scope.check_restaurants_5_1_1_B_cm = function(){ $scope.restaurants_5_1_1_B_cm = ''; };
	$scope.check_restaurants_5_1_1_C = function(){ $scope.restaurants_5_1_1_C = ''; $scope.restaurants_5_1_1_C_a = false; $scope.restaurants_5_1_1_C_b = false; $scope.restaurants_5_1_1_C_c = false; };
	$scope.check_restaurants_5_1_1_C_cm = function(){ $scope.restaurants_5_1_1_C_cm = ''; };
	$scope.check_restaurants_5_2_1_A = function(){ $scope.restaurants_5_2_1_A = ''; $scope.restaurants_5_2_1_A_a = false; $scope.restaurants_5_2_1_A_b = false; $scope.restaurants_5_2_1_A_c = false; };
	$scope.check_restaurants_5_2_1_A_cm = function(){ $scope.restaurants_5_2_1_A_cm = ''; };
	$scope.check_restaurants_5_2_1_B = function(){ $scope.restaurants_5_2_1_B = ''; $scope.restaurants_5_2_1_B_a = false; $scope.restaurants_5_2_1_B_b = false; $scope.restaurants_5_2_1_B_c = false; };
	$scope.check_restaurants_5_2_1_B_cm = function(){ $scope.restaurants_5_2_1_B_cm = ''; };
	$scope.check_restaurants_5_2_1_C = function(){ $scope.restaurants_5_2_1_C = ''; $scope.restaurants_5_2_1_C_a = false; $scope.restaurants_5_2_1_C_b = false; $scope.restaurants_5_2_1_C_c = false; };
	$scope.check_restaurants_5_2_1_C_cm = function(){ $scope.restaurants_5_2_1_C_cm = ''; };
	$scope.check_restaurants_5_2_1_D = function(){ $scope.restaurants_5_2_1_D = ''; $scope.restaurants_5_2_1_D_a = false; $scope.restaurants_5_2_1_D_b = false; $scope.restaurants_5_2_1_D_c = false; };
	$scope.check_restaurants_5_2_1_D_cm = function(){ $scope.restaurants_5_2_1_D_cm = ''; };
	$scope.check_restaurants_5_2_1_E = function(){ $scope.restaurants_5_2_1_E = ''; $scope.restaurants_5_2_1_E_a = false; $scope.restaurants_5_2_1_E_b = false; $scope.restaurants_5_2_1_E_c = false; };
	$scope.check_restaurants_5_2_1_E_cm = function(){ $scope.restaurants_5_2_1_E_cm = ''; };
	$scope.check_restaurants_5_2_1_F = function(){ $scope.restaurants_5_2_1_F = ''; $scope.restaurants_5_2_1_F_a = false; $scope.restaurants_5_2_1_F_b = false; $scope.restaurants_5_2_1_F_c = false; };
	$scope.check_restaurants_5_2_1_F_cm = function(){ $scope.restaurants_5_2_1_F_cm = ''; };
	$scope.check_restaurants_5_2_1_G = function(){ $scope.restaurants_5_2_1_G = ''; $scope.restaurants_5_2_1_G_a = false; $scope.restaurants_5_2_1_G_b = false; $scope.restaurants_5_2_1_G_c = false; };
	$scope.check_restaurants_5_2_1_G_cm = function(){ $scope.restaurants_5_2_1_G_cm = ''; };
	$scope.check_restaurants_5_2_1_H = function(){ $scope.restaurants_5_2_1_H = ''; $scope.restaurants_5_2_1_H_a = false; $scope.restaurants_5_2_1_H_b = false; $scope.restaurants_5_2_1_H_c = false; };
	$scope.check_restaurants_5_2_1_H_cm = function(){ $scope.restaurants_5_2_1_H_cm = ''; };
	$scope.check_restaurants_5_3_1_A = function(){ $scope.restaurants_5_3_1_A = ''; $scope.restaurants_5_3_1_A_a = false; $scope.restaurants_5_3_1_A_b = false; $scope.restaurants_5_3_1_A_c = false; };
	$scope.check_restaurants_5_3_1_A_cm = function(){ $scope.restaurants_5_3_1_A_cm = ''; };
	$scope.check_restaurants_5_3_1_B = function(){ $scope.restaurants_5_3_1_B = ''; $scope.restaurants_5_3_1_B_a = false; $scope.restaurants_5_3_1_B_b = false; $scope.restaurants_5_3_1_B_c = false; };
	$scope.check_restaurants_5_3_1_B_cm = function(){ $scope.restaurants_5_3_1_B_cm = ''; };
	$scope.check_restaurants_5_3_1_C = function(){ $scope.restaurants_5_3_1_C = ''; $scope.restaurants_5_3_1_C_a = false; $scope.restaurants_5_3_1_C_b = false; $scope.restaurants_5_3_1_C_c = false; $scope.restaurants_5_3_1_C_d = false; };
	$scope.check_restaurants_5_3_1_C_cm = function(){ $scope.restaurants_5_3_1_C_cm = ''; };
	$scope.check_restaurants_5_4_1_A = function(){ $scope.restaurants_5_4_1_A = ''; $scope.restaurants_5_4_1_A_a = false; $scope.restaurants_5_4_1_A_b = false; $scope.restaurants_5_4_1_A_c = false; };
	$scope.check_restaurants_5_4_1_A_cm = function(){ $scope.restaurants_5_4_1_A_cm = ''; };
	$scope.check_restaurants_5_4_1_B = function(){ $scope.restaurants_5_4_1_B = ''; $scope.restaurants_5_4_1_B_a = false; $scope.restaurants_5_4_1_B_b = false; };
	$scope.check_restaurants_5_4_1_B_cm = function(){ $scope.restaurants_5_4_1_B_cm = ''; };
	$scope.check_restaurants_5_4_1_C = function(){ $scope.restaurants_5_4_1_C = ''; $scope.restaurants_5_4_1_C_a = false; $scope.restaurants_5_4_1_C_b = false; $scope.restaurants_5_4_1_C_c = false; };
	$scope.check_restaurants_5_4_1_C_cm = function(){ $scope.restaurants_5_4_1_C_cm = ''; };
	$scope.check_restaurants_5_4_1_D = function(){ $scope.restaurants_5_4_1_D = ''; $scope.restaurants_5_4_1_D_a = false; $scope.restaurants_5_4_1_D_b = false; $scope.restaurants_5_4_1_D_c = false; };
	$scope.check_restaurants_5_4_1_D_cm = function(){ $scope.restaurants_5_4_1_D_cm = ''; };
	$scope.check_restaurants_5_4_1_E = function(){ $scope.restaurants_5_4_1_E = ''; $scope.restaurants_5_4_1_E_a = false; $scope.restaurants_5_4_1_E_b = false; $scope.restaurants_5_4_1_E_c = false; };
	$scope.check_restaurants_5_4_1_E_cm = function(){ $scope.restaurants_5_4_1_E_cm = ''; };
	$scope.check_restaurants_5_5_1_A = function(){ $scope.restaurants_5_5_1_A = ''; $scope.restaurants_5_5_1_A_a = false; $scope.restaurants_5_5_1_A_b = false; };
	$scope.check_restaurants_5_5_1_A_cm = function(){ $scope.restaurants_5_5_1_A_cm = ''; };
	$scope.check_restaurants_5_5_1_B = function(){ $scope.restaurants_5_5_1_B = ''; $scope.restaurants_5_5_1_B_a = false; $scope.restaurants_5_5_1_B_b = false; $scope.restaurants_5_5_1_B_c = false; };
	$scope.check_restaurants_5_5_1_B_cm = function(){ $scope.restaurants_5_5_1_B_cm = ''; };
	$scope.check_restaurants_5_5_1_C = function(){ $scope.restaurants_5_5_1_C = ''; $scope.restaurants_5_5_1_C_a = false; $scope.restaurants_5_5_1_C_b = false; $scope.restaurants_5_5_1_C_c = false; };
	$scope.check_restaurants_5_5_1_C_cm = function(){ $scope.restaurants_5_5_1_C_cm = ''; };
	$scope.check_restaurants_5_5_1_D = function(){ $scope.restaurants_5_5_1_D = ''; $scope.restaurants_5_5_1_D_a = false; $scope.restaurants_5_5_1_D_b = false; $scope.restaurants_5_5_1_D_c = false; };
	$scope.check_restaurants_5_5_1_D_cm = function(){ $scope.restaurants_5_5_1_D_cm = ''; };
	$scope.check_restaurants_5_5_1_E_a = function(){ $scope.restaurants_5_5_1_E_a = ''; $scope.restaurants_5_5_1_E_a = false; };
	$scope.check_restaurants_5_5_1_E_a_cm = function(){ $scope.restaurants_5_5_1_E_a_cm = ''; };
	$scope.check_restaurants_5_5_1_E_b = function(){ $scope.restaurants_5_5_1_E_b = ''; $scope.restaurants_5_5_1_E_b = false; };
	$scope.check_restaurants_5_5_1_E_b_cm = function(){ $scope.restaurants_5_5_1_E_b_cm = ''; };
	$scope.check_restaurants_5_5_1_E_c = function(){ $scope.restaurants_5_5_1_E_c = ''; $scope.restaurants_5_5_1_E_c = false; };
	$scope.check_restaurants_5_5_1_E_c_cm = function(){ $scope.restaurants_5_5_1_E_c_cm = ''; };
	$scope.check_restaurants_5_5_1_E_d = function(){ $scope.restaurants_5_5_1_E_d = ''; $scope.restaurants_5_5_1_E_d = false; };
	$scope.check_restaurants_5_5_1_E_d_cm = function(){ $scope.restaurants_5_5_1_E_d_cm = ''; };
	$scope.check_restaurants_5_5_1_F = function(){ $scope.restaurants_5_5_1_F = ''; $scope.restaurants_5_5_1_F_a = false; $scope.restaurants_5_5_1_F_b = false; $scope.restaurants_5_5_1_F_c = false; };
	$scope.check_restaurants_5_5_1_F_cm = function(){ $scope.restaurants_5_5_1_F_cm = ''; };
	$scope.check_restaurants_5_5_1_G_a = function(){ $scope.restaurants_5_5_1_G_a = ''; $scope.restaurants_5_5_1_G_a = false; };
	$scope.check_restaurants_5_5_1_G_a_cm = function(){ $scope.restaurants_5_5_1_G_a_cm = ''; };
	$scope.check_restaurants_5_5_1_G_b = function(){ $scope.restaurants_5_5_1_G_b = ''; $scope.restaurants_5_5_1_G_b = false; };
	$scope.check_restaurants_5_5_1_G_b_cm = function(){ $scope.restaurants_5_5_1_G_b_cm = ''; };
	$scope.check_restaurants_5_5_1_G_c = function(){ $scope.restaurants_5_5_1_G_c = ''; $scope.restaurants_5_5_1_G_c = false; };
	$scope.check_restaurants_5_5_1_G_c_cm = function(){ $scope.restaurants_5_5_1_G_c_cm = ''; };
	$scope.check_restaurants_5_5_1_H = function(){ $scope.restaurants_5_5_1_H = ''; $scope.restaurants_5_5_1_H_a = false; $scope.restaurants_5_5_1_H_b = false; $scope.restaurants_5_5_1_H_c = false; };
	$scope.check_restaurants_5_5_1_H_cm = function(){ $scope.restaurants_5_5_1_H_cm = ''; };
	$scope.check_restaurants_5_5_1_I = function(){ $scope.restaurants_5_5_1_I = ''; $scope.restaurants_5_5_1_I_a = false; $scope.restaurants_5_5_1_I_b = false; $scope.restaurants_5_5_1_I_c = false; };
	$scope.check_restaurants_5_5_1_I_cm = function(){ $scope.restaurants_5_5_1_I_cm = ''; };
	$scope.check_restaurants_5_6_1_A = function(){ $scope.restaurants_5_6_1_A = ''; $scope.restaurants_5_6_1_A_a = false; $scope.restaurants_5_6_1_A_b = false; };
	$scope.check_restaurants_5_6_1_A_cm = function(){ $scope.restaurants_5_6_1_A_cm = ''; };
	$scope.check_restaurants_5_6_1_B = function(){ $scope.restaurants_5_6_1_B = ''; $scope.restaurants_5_6_1_B_a = false; $scope.restaurants_5_6_1_B_b = false; };
	$scope.check_restaurants_5_6_1_B_cm = function(){ $scope.restaurants_5_6_1_B_cm = ''; };
	$scope.check_restaurants_5_6_1_C = function(){ $scope.restaurants_5_6_1_C = ''; $scope.restaurants_5_6_1_C_a = false; $scope.restaurants_5_6_1_C_b = false; $scope.restaurants_5_6_1_C_c = false; };
	$scope.check_restaurants_5_6_1_C_cm = function(){ $scope.restaurants_5_6_1_C_cm = ''; };
	$scope.check_restaurants_5_6_1_D = function(){ $scope.restaurants_5_6_1_D = ''; $scope.restaurants_5_6_1_D_a = false; $scope.restaurants_5_6_1_D_b = false; $scope.restaurants_5_6_1_D_c = false; };
	$scope.check_restaurants_5_6_1_D_cm = function(){ $scope.restaurants_5_6_1_D_cm = ''; };
	$scope.check_restaurants_5_7_1_A = function(){ $scope.restaurants_5_7_1_A = ''; $scope.restaurants_5_7_1_A_a = false; $scope.restaurants_5_7_1_A_b = false; };
	$scope.check_restaurants_5_7_1_A_cm = function(){ $scope.restaurants_5_7_1_A_cm = ''; };
	$scope.check_restaurants_5_7_1_B = function(){ $scope.restaurants_5_7_1_B = ''; $scope.restaurants_5_7_1_B_a = false; $scope.restaurants_5_7_1_B_b = false; };
	$scope.check_restaurants_5_7_1_B_cm = function(){ $scope.restaurants_5_7_1_B_cm = ''; };
	$scope.check_restaurants_5_7_1_C = function(){ $scope.restaurants_5_7_1_C = ''; $scope.restaurants_5_7_1_C_a = false; $scope.restaurants_5_7_1_C_b = false; $scope.restaurants_5_7_1_C_c = false; };
	$scope.check_restaurants_5_7_1_C_cm = function(){ $scope.restaurants_5_7_1_C_cm = ''; };
	$scope.check_restaurants_5_8_1_A = function(){ $scope.restaurants_5_8_1_A = ''; $scope.restaurants_5_8_1_A_a = false; $scope.restaurants_5_8_1_A_b = false; $scope.restaurants_5_8_1_A_c = false; };
	$scope.check_restaurants_5_8_1_A_cm = function(){ $scope.restaurants_5_8_1_A_cm = ''; };
	$scope.check_restaurants_5_8_1_B = function(){ $scope.restaurants_5_8_1_B = ''; $scope.restaurants_5_8_1_B_a = false; $scope.restaurants_5_8_1_B_b = false; $scope.restaurants_5_8_1_B_c = false; };
	$scope.check_restaurants_5_8_1_B_cm = function(){ $scope.restaurants_5_8_1_B_cm = ''; };
	$scope.check_bar_6_1_1_A = function(){ $scope.bar_6_1_1_A = ''; $scope.bar_6_1_1_A_a = false; $scope.bar_6_1_1_A_b = false; $scope.bar_6_1_1_A_c = false; };
	$scope.check_bar_6_1_1_A_cm = function(){ $scope.bar_6_1_1_A_cm = ''; };
	$scope.check_bar_6_1_1_B_a = function(){ $scope.bar_6_1_1_B_a = ''; $scope.bar_6_1_1_B_a = false; };
	$scope.check_bar_6_1_1_B_a_cm = function(){ $scope.bar_6_1_1_B_a_cm = ''; };
	$scope.check_bar_6_1_1_B_b = function(){ $scope.bar_6_1_1_B_b = ''; $scope.bar_6_1_1_B_b = false; };
	$scope.check_bar_6_1_1_B_b_cm = function(){ $scope.bar_6_1_1_B_b_cm = ''; };
	$scope.check_bar_6_1_1_B_c = function(){ $scope.bar_6_1_1_B_c = ''; $scope.bar_6_1_1_B_c = false; };
	$scope.check_bar_6_1_1_B_c_cm = function(){ $scope.bar_6_1_1_B_c_cm = ''; };
	$scope.check_bar_6_1_1_C = function(){ $scope.bar_6_1_1_C = ''; $scope.bar_6_1_1_C_a = false; $scope.bar_6_1_1_C_b = false; };
	$scope.check_bar_6_1_1_C_cm = function(){ $scope.bar_6_1_1_C_cm = ''; };
	$scope.check_bar_6_1_1_D_a = function(){ $scope.bar_6_1_1_D_a = ''; $scope.bar_6_1_1_D_a = false; };
	$scope.check_bar_6_1_1_D_a_cm = function(){ $scope.bar_6_1_1_D_a_cm = ''; };
	$scope.check_bar_6_1_1_D_b = function(){ $scope.bar_6_1_1_D_b = ''; $scope.bar_6_1_1_D_b = false; };
	$scope.check_bar_6_1_1_D_b_cm = function(){ $scope.bar_6_1_1_D_b_cm = ''; };
	$scope.check_bar_6_1_1_D_c = function(){ $scope.bar_6_1_1_D_c = ''; $scope.bar_6_1_1_D_c = false; };
	$scope.check_bar_6_1_1_D_c_cm = function(){ $scope.bar_6_1_1_D_c_cm = ''; };
	$scope.check_bar_6_1_1_E = function(){ $scope.bar_6_1_1_E = ''; $scope.bar_6_1_1_E_a = false; $scope.bar_6_1_1_E_b = false; $scope.bar_6_1_1_E_c = false; };
	$scope.check_bar_6_1_1_E_cm = function(){ $scope.bar_6_1_1_E_cm = ''; };
	$scope.check_bar_6_1_1_F = function(){ $scope.bar_6_1_1_F = ''; $scope.bar_6_1_1_F_a = false; $scope.bar_6_1_1_F_b = false; $scope.bar_6_1_1_F_c = false; };
	$scope.check_bar_6_1_1_F_cm = function(){ $scope.bar_6_1_1_F_cm = ''; };
	$scope.check_bar_6_1_1_G = function(){ $scope.bar_6_1_1_G = ''; $scope.bar_6_1_1_G_a = false; $scope.bar_6_1_1_G_b = false; $scope.bar_6_1_1_G_c = false; };
	$scope.check_bar_6_1_1_G_cm = function(){ $scope.bar_6_1_1_G_cm = ''; };
	$scope.check_bar_6_2_1_A = function(){ $scope.bar_6_2_1_A = ''; $scope.bar_6_2_1_A_a = false; $scope.bar_6_2_1_A_b = false; $scope.bar_6_2_1_A_c = false; };
	$scope.check_bar_6_2_1_A_cm = function(){ $scope.bar_6_2_1_A_cm = ''; };
	$scope.check_bar_6_2_1_B = function(){ $scope.bar_6_2_1_B = ''; $scope.bar_6_2_1_B_a = false; $scope.bar_6_2_1_B_b = false; };
	$scope.check_bar_6_2_1_B_cm = function(){ $scope.bar_6_2_1_B_cm = ''; };
	$scope.check_bar_6_2_1_C = function(){ $scope.bar_6_2_1_C = ''; $scope.bar_6_2_1_C_a = false; $scope.bar_6_2_1_C_b = false; $scope.bar_6_2_1_C_c = false; };
	$scope.check_bar_6_2_1_C_cm = function(){ $scope.bar_6_2_1_C_cm = ''; };
	$scope.check_bar_6_2_1_D = function(){ $scope.bar_6_2_1_D = ''; $scope.bar_6_2_1_D_a = false; $scope.bar_6_2_1_D_b = false; $scope.bar_6_2_1_D_c = false; };
	$scope.check_bar_6_2_1_D_cm = function(){ $scope.bar_6_2_1_D_cm = ''; };
	$scope.check_bar_6_2_1_E = function(){ $scope.bar_6_2_1_E = ''; $scope.bar_6_2_1_E_a = false; $scope.bar_6_2_1_E_b = false; $scope.bar_6_2_1_E_c = false; };
	$scope.check_bar_6_2_1_E_cm = function(){ $scope.bar_6_2_1_E_cm = ''; };
	$scope.check_bar_6_2_1_F = function(){ $scope.bar_6_2_1_F = ''; $scope.bar_6_2_1_F_a = false; $scope.bar_6_2_1_F_b = false; $scope.bar_6_2_1_F_c = false; };
	$scope.check_bar_6_2_1_F_cm = function(){ $scope.bar_6_2_1_F_cm = ''; };
	$scope.check_bar_6_2_1_G = function(){ $scope.bar_6_2_1_G = ''; $scope.bar_6_2_1_G_a = false; $scope.bar_6_2_1_G_b = false; $scope.bar_6_2_1_G_c = false; $scope.bar_6_2_1_G_d = false; };
	$scope.check_bar_6_2_1_G_cm = function(){ $scope.bar_6_2_1_G_cm = ''; };
	$scope.check_bar_6_2_1_H = function(){ $scope.bar_6_2_1_H = ''; $scope.bar_6_2_1_H_a = false; $scope.bar_6_2_1_H_b = false; $scope.bar_6_2_1_H_c = false; };
	$scope.check_bar_6_2_1_H_cm = function(){ $scope.bar_6_2_1_H_cm = ''; };
	$scope.check_bar_6_2_1_I = function(){ $scope.bar_6_2_1_I = ''; $scope.bar_6_2_1_I_a = false; $scope.bar_6_2_1_I_b = false; $scope.bar_6_2_1_I_c = false; };
	$scope.check_bar_6_2_1_I_cm = function(){ $scope.bar_6_2_1_I_cm = ''; };
	$scope.check_bar_6_2_1_J = function(){ $scope.bar_6_2_1_J = ''; $scope.bar_6_2_1_J_a = false; $scope.bar_6_2_1_J_b = false; $scope.bar_6_2_1_J_c = false; };
	$scope.check_bar_6_2_1_J_cm = function(){ $scope.bar_6_2_1_J_cm = ''; };
	$scope.check_bar_6_3_1_A = function(){ $scope.bar_6_3_1_A = ''; $scope.bar_6_3_1_A_a = false; $scope.bar_6_3_1_A_b = false; };
	$scope.check_bar_6_3_1_A_cm = function(){ $scope.bar_6_3_1_A_cm = ''; };
	$scope.check_bar_6_3_1_B = function(){ $scope.bar_6_3_1_B = ''; $scope.bar_6_3_1_B_a = false; $scope.bar_6_3_1_B_b = false; };
	$scope.check_bar_6_3_1_B_cm = function(){ $scope.bar_6_3_1_B_cm = ''; };
	$scope.check_bar_6_3_1_C = function(){ $scope.bar_6_3_1_C = ''; $scope.bar_6_3_1_C_a = false; $scope.bar_6_3_1_C_b = false; $scope.bar_6_3_1_C_c = false; };
	$scope.check_bar_6_3_1_C_cm = function(){ $scope.bar_6_3_1_C_cm = ''; };
	$scope.check_bar_6_3_1_D = function(){ $scope.bar_6_3_1_D = ''; $scope.bar_6_3_1_D_a = false; $scope.bar_6_3_1_D_b = false; $scope.bar_6_3_1_D_c = false; };
	$scope.check_bar_6_3_1_D_cm = function(){ $scope.bar_6_3_1_D_cm = ''; };
	$scope.check_bar_6_4_1_A = function(){ $scope.bar_6_4_1_A = ''; $scope.bar_6_4_1_A_a = false; $scope.bar_6_4_1_A_b = false; };
	$scope.check_bar_6_4_1_A_cm = function(){ $scope.bar_6_4_1_A_cm = ''; };
	$scope.check_bar_6_4_1_B = function(){ $scope.bar_6_4_1_B = ''; $scope.bar_6_4_1_B_a = false; $scope.bar_6_4_1_B_b = false; $scope.bar_6_4_1_B_c = false; };
	$scope.check_bar_6_4_1_B_cm = function(){ $scope.bar_6_4_1_B_cm = ''; };
	$scope.check_bar_6_4_1_C = function(){ $scope.bar_6_4_1_C = ''; $scope.bar_6_4_1_C_a = false; $scope.bar_6_4_1_C_b = false; $scope.bar_6_4_1_C_c = false; };
	$scope.check_bar_6_4_1_C_cm = function(){ $scope.bar_6_4_1_C_cm = ''; };
	$scope.check_bar_6_4_1_D = function(){ $scope.bar_6_4_1_D = ''; $scope.bar_6_4_1_D_a = false; $scope.bar_6_4_1_D_b = false; $scope.bar_6_4_1_D_c = false; };
	$scope.check_bar_6_4_1_D_cm = function(){ $scope.bar_6_4_1_D_cm = ''; };
	$scope.check_bar_6_4_1_E_a = function(){ $scope.bar_6_4_1_E_a = ''; $scope.bar_6_4_1_E_a = false; };
	$scope.check_bar_6_4_1_E_a_cm = function(){ $scope.bar_6_4_1_E_a_cm = ''; };
	$scope.check_bar_6_4_1_E_b = function(){ $scope.bar_6_4_1_E_b = ''; $scope.bar_6_4_1_E_b = false; };
	$scope.check_bar_6_4_1_E_b_cm = function(){ $scope.bar_6_4_1_E_b_cm = ''; };
	$scope.check_bar_6_4_1_E_c = function(){ $scope.bar_6_4_1_E_c = ''; $scope.bar_6_4_1_E_c = false; };
	$scope.check_bar_6_4_1_E_c_cm = function(){ $scope.bar_6_4_1_E_c_cm = ''; };
	$scope.check_bar_6_4_1_E_d = function(){ $scope.bar_6_4_1_E_d = ''; $scope.bar_6_4_1_E_d = false; };
	$scope.check_bar_6_4_1_E_d_cm = function(){ $scope.bar_6_4_1_E_d_cm = ''; };
	$scope.check_bar_6_4_1_E_e = function(){ $scope.bar_6_4_1_E_e = ''; $scope.bar_6_4_1_E_e = false; };
	$scope.check_bar_6_4_1_E_e_cm = function(){ $scope.bar_6_4_1_E_e_cm = ''; };
	$scope.check_bar_6_4_1_E_f = function(){ $scope.bar_6_4_1_E_f = ''; $scope.bar_6_4_1_E_f = false; };
	$scope.check_bar_6_4_1_E_f_cm = function(){ $scope.bar_6_4_1_E_f_cm = ''; };
	$scope.check_bar_6_4_1_E_g = function(){ $scope.bar_6_4_1_E_g = ''; $scope.bar_6_4_1_E_g = false; };
	$scope.check_bar_6_4_1_E_g_cm = function(){ $scope.bar_6_4_1_E_g_cm = ''; };
	$scope.check_bar_6_4_1_E_h = function(){ $scope.bar_6_4_1_E_h = ''; $scope.bar_6_4_1_E_h = false; };
	$scope.check_bar_6_4_1_E_h_cm = function(){ $scope.bar_6_4_1_E_h_cm = ''; };
	$scope.check_bar_6_4_1_F = function(){ $scope.bar_6_4_1_F = ''; $scope.bar_6_4_1_F_a = false; $scope.bar_6_4_1_F_b = false; $scope.bar_6_4_1_F_c = false; };
	$scope.check_bar_6_4_1_F_cm = function(){ $scope.bar_6_4_1_F_cm = ''; };
	$scope.check_bar_6_4_1_G = function(){ $scope.bar_6_4_1_G = ''; $scope.bar_6_4_1_G_a = false; $scope.bar_6_4_1_G_b = false; };
	$scope.check_bar_6_4_1_G_cm = function(){ $scope.bar_6_4_1_G_cm = ''; };
	$scope.check_bar_6_4_1_H = function(){ $scope.bar_6_4_1_H = ''; $scope.bar_6_4_1_H_a = false; $scope.bar_6_4_1_H_b = false; $scope.bar_6_4_1_H_c = false; };
	$scope.check_bar_6_4_1_H_cm = function(){ $scope.bar_6_4_1_H_cm = ''; };
	$scope.check_bar_6_4_1_I = function(){ $scope.bar_6_4_1_I = ''; $scope.bar_6_4_1_I_a = false; $scope.bar_6_4_1_I_b = false; $scope.bar_6_4_1_I_c = false; };
	$scope.check_bar_6_4_1_I_cm = function(){ $scope.bar_6_4_1_I_cm = ''; };
	$scope.check_bar_6_5_1_A = function(){ $scope.bar_6_5_1_A = ''; $scope.bar_6_5_1_A_a = false; $scope.bar_6_5_1_A_b = false; $scope.bar_6_5_1_A_c = false; };
	$scope.check_bar_6_5_1_A_cm = function(){ $scope.bar_6_5_1_A_cm = ''; };
	$scope.check_bar_6_5_1_B = function(){ $scope.bar_6_5_1_B = ''; $scope.bar_6_5_1_B_a = false; $scope.bar_6_5_1_B_b = false; };
	$scope.check_bar_6_5_1_B_cm = function(){ $scope.bar_6_5_1_B_cm = ''; };
	$scope.check_bar_6_5_1_C = function(){ $scope.bar_6_5_1_C = ''; $scope.bar_6_5_1_C_a = false; $scope.bar_6_5_1_C_b = false; };
	$scope.check_bar_6_5_1_C_cm = function(){ $scope.bar_6_5_1_C_cm = ''; };
	$scope.check_bar_6_6_1_A = function(){ $scope.bar_6_6_1_A = ''; $scope.bar_6_6_1_A_a = false; $scope.bar_6_6_1_A_b = false; $scope.bar_6_6_1_A_c = false; };
	$scope.check_bar_6_6_1_A_cm = function(){ $scope.bar_6_6_1_A_cm = ''; };
	$scope.check_bar_6_6_1_B = function(){ $scope.bar_6_6_1_B = ''; $scope.bar_6_6_1_B_a = false; $scope.bar_6_6_1_B_b = false; $scope.bar_6_6_1_B_c = false; };
	$scope.check_bar_6_6_1_B_cm = function(){ $scope.bar_6_6_1_B_cm = ''; };
	$scope.check_bar_6_6_1_C = function(){ $scope.bar_6_6_1_C = ''; $scope.bar_6_6_1_C_a = false; $scope.bar_6_6_1_C_b = false; $scope.bar_6_6_1_C_c = false; };
	$scope.check_bar_6_6_1_C_cm = function(){ $scope.bar_6_6_1_C_cm = ''; };
	$scope.check_bar_6_7_1_A = function(){ $scope.bar_6_7_1_A = ''; $scope.bar_6_7_1_A_a = false; $scope.bar_6_7_1_A_b = false; $scope.bar_6_7_1_A_c = false; };
	$scope.check_bar_6_7_1_A_cm = function(){ $scope.bar_6_7_1_A_cm = ''; };
	$scope.check_bar_6_7_1_B = function(){ $scope.bar_6_7_1_B = ''; $scope.bar_6_7_1_B_a = false; $scope.bar_6_7_1_B_b = false; };
	$scope.check_bar_6_7_1_B_cm = function(){ $scope.bar_6_7_1_B_cm = ''; };
	$scope.check_bar_6_7_1_C = function(){ $scope.bar_6_7_1_C = ''; $scope.bar_6_7_1_C_a = false; $scope.bar_6_7_1_C_b = false; $scope.bar_6_7_1_C_c = false; };
	$scope.check_bar_6_7_1_C_cm = function(){ $scope.bar_6_7_1_C_cm = ''; };
	$scope.check_kitchen_7_1_1_A = function(){ $scope.kitchen_7_1_1_A = ''; $scope.kitchen_7_1_1_A_a = false; $scope.kitchen_7_1_1_A_b = false; $scope.kitchen_7_1_1_A_c = false; };
	$scope.check_kitchen_7_1_1_A_cm = function(){ $scope.kitchen_7_1_1_A_cm = ''; };
	$scope.check_kitchen_7_2_1_A = function(){ $scope.kitchen_7_2_1_A = ''; $scope.kitchen_7_2_1_A_a = false; $scope.kitchen_7_2_1_A_b = false; };
	$scope.check_kitchen_7_2_1_A_cm = function(){ $scope.kitchen_7_2_1_A_cm = ''; };
	$scope.check_kitchen_7_2_1_B = function(){ $scope.kitchen_7_2_1_B = ''; $scope.kitchen_7_2_1_B_a = false; $scope.kitchen_7_2_1_B_b = false; $scope.kitchen_7_2_1_B_c = false; };
	$scope.check_kitchen_7_2_1_B_cm = function(){ $scope.kitchen_7_2_1_B_cm = ''; };
	$scope.check_kitchen_7_2_1_C = function(){ $scope.kitchen_7_2_1_C = ''; $scope.kitchen_7_2_1_C_a = false; $scope.kitchen_7_2_1_C_b = false; $scope.kitchen_7_2_1_C_c = false; };
	$scope.check_kitchen_7_2_1_C_cm = function(){ $scope.kitchen_7_2_1_C_cm = ''; };
	$scope.check_kitchen_7_3_1_A = function(){ $scope.kitchen_7_3_1_A = ''; $scope.kitchen_7_3_1_A_a = false; $scope.kitchen_7_3_1_A_b = false; $scope.kitchen_7_3_1_A_c = false; $scope.kitchen_7_3_1_A_d = false; };
	$scope.check_kitchen_7_3_1_A_cm = function(){ $scope.kitchen_7_3_1_A_cm = ''; };
	$scope.check_kitchen_7_3_1_B = function(){ $scope.kitchen_7_3_1_B = ''; $scope.kitchen_7_3_1_B_a = false; $scope.kitchen_7_3_1_B_b = false; };
	$scope.check_kitchen_7_3_1_B_cm = function(){ $scope.kitchen_7_3_1_B_cm = ''; };
	$scope.check_kitchen_7_3_1_C = function(){ $scope.kitchen_7_3_1_C = ''; $scope.kitchen_7_3_1_C_a = false; $scope.kitchen_7_3_1_C_b = false; };
	$scope.check_kitchen_7_3_1_C_cm = function(){ $scope.kitchen_7_3_1_C_cm = ''; };
	$scope.check_kitchen_7_4_1_A = function(){ $scope.kitchen_7_4_1_A = ''; $scope.kitchen_7_4_1_A_a = false; $scope.kitchen_7_4_1_A_b = false; $scope.kitchen_7_4_1_A_c = false; };
	$scope.check_kitchen_7_4_1_A_cm = function(){ $scope.kitchen_7_4_1_A_cm = ''; };
	FALSE
	$scope.check_kitchen_7_4_1_C = function(){ $scope.kitchen_7_4_1_C = ''; $scope.kitchen_7_4_1_C_a = false; $scope.kitchen_7_4_1_C_b = false; $scope.kitchen_7_4_1_C_c = false; };
	$scope.check_kitchen_7_4_1_C_cm = function(){ $scope.kitchen_7_4_1_C_cm = ''; };
	$scope.check_kitchen_7_5_1_A = function(){ $scope.kitchen_7_5_1_A = ''; $scope.kitchen_7_5_1_A_a = false; $scope.kitchen_7_5_1_A_b = false; $scope.kitchen_7_5_1_A_c = false; };
	$scope.check_kitchen_7_5_1_A_cm = function(){ $scope.kitchen_7_5_1_A_cm = ''; };
	$scope.check_kitchen_7_5_1_B = function(){ $scope.kitchen_7_5_1_B = ''; $scope.kitchen_7_5_1_B_a = false; $scope.kitchen_7_5_1_B_b = false; $scope.kitchen_7_5_1_B_c = false; };
	$scope.check_kitchen_7_5_1_B_cm = function(){ $scope.kitchen_7_5_1_B_cm = ''; };
	$scope.check_kitchen_7_5_1_C = function(){ $scope.kitchen_7_5_1_C = ''; $scope.kitchen_7_5_1_C_a = false; $scope.kitchen_7_5_1_C_b = false; $scope.kitchen_7_5_1_C_c = false; };
	$scope.check_kitchen_7_5_1_C_cm = function(){ $scope.kitchen_7_5_1_C_cm = ''; };
	$scope.check_kitchen_7_5_1_D = function(){ $scope.kitchen_7_5_1_D = ''; $scope.kitchen_7_5_1_D_a = false; $scope.kitchen_7_5_1_D_b = false; $scope.kitchen_7_5_1_D_c = false; };
	$scope.check_kitchen_7_5_1_D_cm = function(){ $scope.kitchen_7_5_1_D_cm = ''; };
	$scope.check_kitchen_7_5_1_E = function(){ $scope.kitchen_7_5_1_E = ''; $scope.kitchen_7_5_1_E_a = false; $scope.kitchen_7_5_1_E_b = false; $scope.kitchen_7_5_1_E_c = false; };
	$scope.check_kitchen_7_5_1_E_cm = function(){ $scope.kitchen_7_5_1_E_cm = ''; };
	$scope.check_kitchen_7_5_1_F = function(){ $scope.kitchen_7_5_1_F = ''; $scope.kitchen_7_5_1_F_a = false; $scope.kitchen_7_5_1_F_b = false; };
	$scope.check_kitchen_7_5_1_F_cm = function(){ $scope.kitchen_7_5_1_F_cm = ''; };
	$scope.check_kitchen_7_5_1_G = function(){ $scope.kitchen_7_5_1_G = ''; $scope.kitchen_7_5_1_G_a = false; $scope.kitchen_7_5_1_G_b = false; $scope.kitchen_7_5_1_G_c = false; };
	$scope.check_kitchen_7_5_1_G_cm = function(){ $scope.kitchen_7_5_1_G_cm = ''; };
	$scope.check_kitchen_7_5_1_H = function(){ $scope.kitchen_7_5_1_H = ''; $scope.kitchen_7_5_1_H_a = false; $scope.kitchen_7_5_1_H_b = false; $scope.kitchen_7_5_1_H_c = false; };
	$scope.check_kitchen_7_5_1_H_cm = function(){ $scope.kitchen_7_5_1_H_cm = ''; };
	$scope.check_kitchen_7_5_1_I = function(){ $scope.kitchen_7_5_1_I = ''; $scope.kitchen_7_5_1_I_a = false; $scope.kitchen_7_5_1_I_b = false; $scope.kitchen_7_5_1_I_c = false; };
	$scope.check_kitchen_7_5_1_I_cm = function(){ $scope.kitchen_7_5_1_I_cm = ''; };
	$scope.check_kitchen_7_6_1_A = function(){ $scope.kitchen_7_6_1_A = ''; $scope.kitchen_7_6_1_A_a = false; $scope.kitchen_7_6_1_A_b = false; };
	$scope.check_kitchen_7_6_1_A_cm = function(){ $scope.kitchen_7_6_1_A_cm = ''; };
	$scope.check_kitchen_7_6_1_B = function(){ $scope.kitchen_7_6_1_B = ''; $scope.kitchen_7_6_1_B_a = false; $scope.kitchen_7_6_1_B_b = false; };
	$scope.check_kitchen_7_6_1_B_cm = function(){ $scope.kitchen_7_6_1_B_cm = ''; };
	$scope.check_kitchen_7_6_1_C = function(){ $scope.kitchen_7_6_1_C = ''; $scope.kitchen_7_6_1_C_a = false; $scope.kitchen_7_6_1_C_b = false; };
	$scope.check_kitchen_7_6_1_C_cm = function(){ $scope.kitchen_7_6_1_C_cm = ''; };
	$scope.check_kitchen_7_6_1_D = function(){ $scope.kitchen_7_6_1_D = ''; $scope.kitchen_7_6_1_D_a = false; $scope.kitchen_7_6_1_D_b = false; };
	$scope.check_kitchen_7_6_1_D_cm = function(){ $scope.kitchen_7_6_1_D_cm = ''; };
	$scope.check_kitchen_7_6_1_E = function(){ $scope.kitchen_7_6_1_E = ''; $scope.kitchen_7_6_1_E_a = false; $scope.kitchen_7_6_1_E_b = false; };
	$scope.check_kitchen_7_6_1_E_cm = function(){ $scope.kitchen_7_6_1_E_cm = ''; };
	$scope.check_kitchen_7_6_1_F = function(){ $scope.kitchen_7_6_1_F = ''; $scope.kitchen_7_6_1_F_a = false; $scope.kitchen_7_6_1_F_b = false; };
	$scope.check_kitchen_7_6_1_F_cm = function(){ $scope.kitchen_7_6_1_F_cm = ''; };
	$scope.check_kitchen_7_6_1_G = function(){ $scope.kitchen_7_6_1_G = ''; $scope.kitchen_7_6_1_G_a = false; $scope.kitchen_7_6_1_G_b = false; };
	$scope.check_kitchen_7_6_1_G_cm = function(){ $scope.kitchen_7_6_1_G_cm = ''; };
	$scope.check_kitchen_7_7_1_A = function(){ $scope.kitchen_7_7_1_A = ''; $scope.kitchen_7_7_1_A_a = false; $scope.kitchen_7_7_1_A_b = false; };
	$scope.check_kitchen_7_7_1_A_cm = function(){ $scope.kitchen_7_7_1_A_cm = ''; };
	$scope.check_kitchen_7_7_1_B = function(){ $scope.kitchen_7_7_1_B = ''; $scope.kitchen_7_7_1_B_a = false; $scope.kitchen_7_7_1_B_b = false; };
	$scope.check_kitchen_7_7_1_B_cm = function(){ $scope.kitchen_7_7_1_B_cm = ''; };
	$scope.check_kitchen_7_7_1_C = function(){ $scope.kitchen_7_7_1_C = ''; $scope.kitchen_7_7_1_C_a = false; $scope.kitchen_7_7_1_C_b = false; $scope.kitchen_7_7_1_C_c = false; };
	$scope.check_kitchen_7_7_1_C_cm = function(){ $scope.kitchen_7_7_1_C_cm = ''; };
	$scope.check_kitchen_7_7_1_D = function(){ $scope.kitchen_7_7_1_D = ''; $scope.kitchen_7_7_1_D_a = false; $scope.kitchen_7_7_1_D_b = false; $scope.kitchen_7_7_1_D_c = false; };
	$scope.check_kitchen_7_7_1_D_cm = function(){ $scope.kitchen_7_7_1_D_cm = ''; };
	$scope.check_kitchen_7_7_1_E = function(){ $scope.kitchen_7_7_1_E = ''; $scope.kitchen_7_7_1_E_a = false; $scope.kitchen_7_7_1_E_b = false; $scope.kitchen_7_7_1_E_c = false; };
	$scope.check_kitchen_7_7_1_E_cm = function(){ $scope.kitchen_7_7_1_E_cm = ''; };
	$scope.check_kitchen_7_8_1_A = function(){ $scope.kitchen_7_8_1_A = ''; $scope.kitchen_7_8_1_A_a = false; $scope.kitchen_7_8_1_A_b = false; };
	$scope.check_kitchen_7_8_1_A_cm = function(){ $scope.kitchen_7_8_1_A_cm = ''; };
	$scope.check_kitchen_7_8_1_B = function(){ $scope.kitchen_7_8_1_B = ''; $scope.kitchen_7_8_1_B_a = false; $scope.kitchen_7_8_1_B_b = false; };
	$scope.check_kitchen_7_8_1_B_cm = function(){ $scope.kitchen_7_8_1_B_cm = ''; };
	$scope.check_kitchen_7_8_1_C_a = function(){ $scope.kitchen_7_8_1_C_a = ''; $scope.kitchen_7_8_1_C_a = false; };
	$scope.check_kitchen_7_8_1_C_a_cm = function(){ $scope.kitchen_7_8_1_C_a_cm = ''; };
	$scope.check_kitchen_7_8_1_C_b = function(){ $scope.kitchen_7_8_1_C_b = ''; $scope.kitchen_7_8_1_C_b = false; };
	$scope.check_kitchen_7_8_1_C_b_cm = function(){ $scope.kitchen_7_8_1_C_b_cm = ''; };
	$scope.check_kitchen_7_8_1_D = function(){ $scope.kitchen_7_8_1_D = ''; $scope.kitchen_7_8_1_D_a = false; $scope.kitchen_7_8_1_D_b = false; $scope.kitchen_7_8_1_D_c = false; $scope.kitchen_7_8_1_D_d = false; };
	$scope.check_kitchen_7_8_1_D_cm = function(){ $scope.kitchen_7_8_1_D_cm = ''; };
	$scope.check_kitchen_7_8_1_E = function(){ $scope.kitchen_7_8_1_E = ''; $scope.kitchen_7_8_1_E_a = false; $scope.kitchen_7_8_1_E_b = false; };
	$scope.check_kitchen_7_8_1_E_cm = function(){ $scope.kitchen_7_8_1_E_cm = ''; };
	$scope.check_kitchen_7_8_1_F = function(){ $scope.kitchen_7_8_1_F = ''; $scope.kitchen_7_8_1_F_a = false; $scope.kitchen_7_8_1_F_b = false; };
	$scope.check_kitchen_7_8_1_F_cm = function(){ $scope.kitchen_7_8_1_F_cm = ''; };
	$scope.check_kitchen_7_8_1_G = function(){ $scope.kitchen_7_8_1_G = ''; $scope.kitchen_7_8_1_G_a = false; $scope.kitchen_7_8_1_G_b = false; };
	$scope.check_kitchen_7_8_1_G_cm = function(){ $scope.kitchen_7_8_1_G_cm = ''; };
	$scope.check_kitchen_7_8_1_H = function(){ $scope.kitchen_7_8_1_H = ''; $scope.kitchen_7_8_1_H_a = false; $scope.kitchen_7_8_1_H_b = false; $scope.kitchen_7_8_1_H_c = false; };
	$scope.check_kitchen_7_8_1_H_cm = function(){ $scope.kitchen_7_8_1_H_cm = ''; };
	$scope.check_kitchen_7_9_1_A = function(){ $scope.kitchen_7_9_1_A = ''; $scope.kitchen_7_9_1_A_a = false; $scope.kitchen_7_9_1_A_b = false; $scope.kitchen_7_9_1_A_c = false; };
	$scope.check_kitchen_7_9_1_A_cm = function(){ $scope.kitchen_7_9_1_A_cm = ''; };
	$scope.check_kitchen_7_9_1_B = function(){ $scope.kitchen_7_9_1_B = ''; $scope.kitchen_7_9_1_B_a = false; $scope.kitchen_7_9_1_B_b = false; };
	$scope.check_kitchen_7_9_1_B_cm = function(){ $scope.kitchen_7_9_1_B_cm = ''; };
	$scope.check_kitchen_7_9_1_C = function(){ $scope.kitchen_7_9_1_C = ''; $scope.kitchen_7_9_1_C_a = false; $scope.kitchen_7_9_1_C_b = false; };
	$scope.check_kitchen_7_9_1_C_cm = function(){ $scope.kitchen_7_9_1_C_cm = ''; };
	$scope.check_kitchen_7_9_1_D = function(){ $scope.kitchen_7_9_1_D = ''; $scope.kitchen_7_9_1_D_a = false; $scope.kitchen_7_9_1_D_b = false; $scope.kitchen_7_9_1_D_c = false; };
	$scope.check_kitchen_7_9_1_D_cm = function(){ $scope.kitchen_7_9_1_D_cm = ''; };
	$scope.check_kitchen_7_9_1_E = function(){ $scope.kitchen_7_9_1_E = ''; $scope.kitchen_7_9_1_E_a = false; $scope.kitchen_7_9_1_E_b = false; $scope.kitchen_7_9_1_E_c = false; };
	$scope.check_kitchen_7_9_1_E_cm = function(){ $scope.kitchen_7_9_1_E_cm = ''; };
	$scope.check_kitchen_7_10_1_A_a = function(){ $scope.kitchen_7_10_1_A_a = ''; $scope.kitchen_7_10_1_A_a = false; };
	$scope.check_kitchen_7_10_1_A_a_cm = function(){ $scope.kitchen_7_10_1_A_a_cm = ''; };
	$scope.check_kitchen_7_10_1_A_b = function(){ $scope.kitchen_7_10_1_A_b = ''; $scope.kitchen_7_10_1_A_b = false; };
	$scope.check_kitchen_7_10_1_A_b_cm = function(){ $scope.kitchen_7_10_1_A_b_cm = ''; };
	$scope.check_kitchen_7_10_1_A_c = function(){ $scope.kitchen_7_10_1_A_c = ''; $scope.kitchen_7_10_1_A_c = false; };
	$scope.check_kitchen_7_10_1_A_c_cm = function(){ $scope.kitchen_7_10_1_A_c_cm = ''; };
	$scope.check_kitchen_7_10_1_A_d = function(){ $scope.kitchen_7_10_1_A_d = ''; $scope.kitchen_7_10_1_A_d = false; };
	$scope.check_kitchen_7_10_1_A_d_cm = function(){ $scope.kitchen_7_10_1_A_d_cm = ''; };
	$scope.check_kitchen_7_10_1_B = function(){ $scope.kitchen_7_10_1_B = ''; $scope.kitchen_7_10_1_B_a = false; $scope.kitchen_7_10_1_B_b = false; $scope.kitchen_7_10_1_B_c = false; };
	$scope.check_kitchen_7_10_1_B_cm = function(){ $scope.kitchen_7_10_1_B_cm = ''; };
	$scope.check_kitchen_7_10_1_C = function(){ $scope.kitchen_7_10_1_C = ''; $scope.kitchen_7_10_1_C_a = false; $scope.kitchen_7_10_1_C_b = false; };
	$scope.check_kitchen_7_10_1_C_cm = function(){ $scope.kitchen_7_10_1_C_cm = ''; };
	$scope.check_kitchen_7_10_1_D = function(){ $scope.kitchen_7_10_1_D = ''; $scope.kitchen_7_10_1_D_a = false; $scope.kitchen_7_10_1_D_b = false; };
	$scope.check_kitchen_7_10_1_D_cm = function(){ $scope.kitchen_7_10_1_D_cm = ''; };
	$scope.check_kitchen_7_10_1_E = function(){ $scope.kitchen_7_10_1_E = ''; $scope.kitchen_7_10_1_E_a = false; $scope.kitchen_7_10_1_E_b = false; };
	$scope.check_kitchen_7_10_1_E_cm = function(){ $scope.kitchen_7_10_1_E_cm = ''; };
	$scope.check_kitchen_7_10_1_F = function(){ $scope.kitchen_7_10_1_F = ''; $scope.kitchen_7_10_1_F_a = false; $scope.kitchen_7_10_1_F_b = false; $scope.kitchen_7_10_1_F_c = false; };
	$scope.check_kitchen_7_10_1_F_cm = function(){ $scope.kitchen_7_10_1_F_cm = ''; };
	$scope.check_kitchen_7_10_1_G = function(){ $scope.kitchen_7_10_1_G = ''; $scope.kitchen_7_10_1_G_a = false; $scope.kitchen_7_10_1_G_b = false; $scope.kitchen_7_10_1_G_c = false; };
	$scope.check_kitchen_7_10_1_G_cm = function(){ $scope.kitchen_7_10_1_G_cm = ''; };
	$scope.check_kitchen_7_11_1_A_a = function(){ $scope.kitchen_7_11_1_A_a = ''; $scope.kitchen_7_11_1_A_a = false; };
	$scope.check_kitchen_7_11_1_A_a_cm = function(){ $scope.kitchen_7_11_1_A_a_cm = ''; };
	$scope.check_kitchen_7_11_1_A_b = function(){ $scope.kitchen_7_11_1_A_b = ''; $scope.kitchen_7_11_1_A_b = false; };
	$scope.check_kitchen_7_11_1_A_b_cm = function(){ $scope.kitchen_7_11_1_A_b_cm = ''; };
	$scope.check_kitchen_7_11_1_A_c = function(){ $scope.kitchen_7_11_1_A_c = ''; $scope.kitchen_7_11_1_A_c = false; };
	$scope.check_kitchen_7_11_1_A_c_cm = function(){ $scope.kitchen_7_11_1_A_c_cm = ''; };
	$scope.check_kitchen_7_11_1_B = function(){ $scope.kitchen_7_11_1_B = ''; $scope.kitchen_7_11_1_B_a = false; $scope.kitchen_7_11_1_B_b = false; $scope.kitchen_7_11_1_B_c = false; };
	$scope.check_kitchen_7_11_1_B_cm = function(){ $scope.kitchen_7_11_1_B_cm = ''; };
	$scope.check_kitchen_7_11_1_C_a = function(){ $scope.kitchen_7_11_1_C_a = ''; $scope.kitchen_7_11_1_C_a = false; };
	$scope.check_kitchen_7_11_1_C_a_cm = function(){ $scope.kitchen_7_11_1_C_a_cm = ''; };
	$scope.check_kitchen_7_11_1_C_b = function(){ $scope.kitchen_7_11_1_C_b = ''; $scope.kitchen_7_11_1_C_b = false; };
	$scope.check_kitchen_7_11_1_C_b_cm = function(){ $scope.kitchen_7_11_1_C_b_cm = ''; };
	$scope.check_kitchen_7_11_1_C_c = function(){ $scope.kitchen_7_11_1_C_c = ''; $scope.kitchen_7_11_1_C_c = false; };
	$scope.check_kitchen_7_11_1_C_c_cm = function(){ $scope.kitchen_7_11_1_C_c_cm = ''; };
	$scope.check_kitchen_7_11_1_C_d = function(){ $scope.kitchen_7_11_1_C_d = ''; $scope.kitchen_7_11_1_C_d = false; };
	$scope.check_kitchen_7_11_1_C_d_cm = function(){ $scope.kitchen_7_11_1_C_d_cm = ''; };
	$scope.check_kitchen_7_11_1_C_e = function(){ $scope.kitchen_7_11_1_C_e = ''; $scope.kitchen_7_11_1_C_e = false; };
	$scope.check_kitchen_7_11_1_C_e_cm = function(){ $scope.kitchen_7_11_1_C_e_cm = ''; };
	$scope.check_kitchen_7_11_1_D_a = function(){ $scope.kitchen_7_11_1_D_a = ''; $scope.kitchen_7_11_1_D_a = false; };
	$scope.check_kitchen_7_11_1_D_a_cm = function(){ $scope.kitchen_7_11_1_D_a_cm = ''; };
	$scope.check_kitchen_7_11_1_D_b = function(){ $scope.kitchen_7_11_1_D_b = ''; $scope.kitchen_7_11_1_D_b = false; };
	$scope.check_kitchen_7_11_1_D_b_cm = function(){ $scope.kitchen_7_11_1_D_b_cm = ''; };
	$scope.check_kitchen_7_11_1_E = function(){ $scope.kitchen_7_11_1_E = ''; $scope.kitchen_7_11_1_E_a = false; $scope.kitchen_7_11_1_E_b = false; };
	$scope.check_kitchen_7_11_1_E_cm = function(){ $scope.kitchen_7_11_1_E_cm = ''; };
	$scope.check_kitchen_7_11_1_F = function(){ $scope.kitchen_7_11_1_F = ''; $scope.kitchen_7_11_1_F_a = false; $scope.kitchen_7_11_1_F_b = false; $scope.kitchen_7_11_1_F_c = false; };
	$scope.check_kitchen_7_11_1_F_cm = function(){ $scope.kitchen_7_11_1_F_cm = ''; };
	$scope.check_guest_rooms_8_1_1_A = function(){ $scope.guest_rooms_8_1_1_A = ''; $scope.guest_rooms_8_1_1_A_a = false; $scope.guest_rooms_8_1_1_A_b = false; $scope.guest_rooms_8_1_1_A_c = false; };
	$scope.check_guest_rooms_8_1_1_A_cm = function(){ $scope.guest_rooms_8_1_1_A_cm = ''; };
	$scope.check_guest_rooms_8_2_1_A = function(){ $scope.guest_rooms_8_2_1_A = ''; $scope.guest_rooms_8_2_1_A_a = false; $scope.guest_rooms_8_2_1_A_b = false; $scope.guest_rooms_8_2_1_A_c = false; };
	$scope.check_guest_rooms_8_2_1_A_cm = function(){ $scope.guest_rooms_8_2_1_A_cm = ''; };
	$scope.check_guest_rooms_8_2_1_B = function(){ $scope.guest_rooms_8_2_1_B = ''; $scope.guest_rooms_8_2_1_B_a = false; $scope.guest_rooms_8_2_1_B_b = false; $scope.guest_rooms_8_2_1_B_c = false; };
	$scope.check_guest_rooms_8_2_1_B_cm = function(){ $scope.guest_rooms_8_2_1_B_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_a = function(){ $scope.guest_rooms_8_3_1_A_a = ''; $scope.guest_rooms_8_3_1_A_a = false; };
	$scope.check_guest_rooms_8_3_1_A_a_cm = function(){ $scope.guest_rooms_8_3_1_A_a_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_b = function(){ $scope.guest_rooms_8_3_1_A_b = ''; $scope.guest_rooms_8_3_1_A_b = false; };
	$scope.check_guest_rooms_8_3_1_A_b_cm = function(){ $scope.guest_rooms_8_3_1_A_b_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_c = function(){ $scope.guest_rooms_8_3_1_A_c = ''; $scope.guest_rooms_8_3_1_A_c = false; };
	$scope.check_guest_rooms_8_3_1_A_c_cm = function(){ $scope.guest_rooms_8_3_1_A_c_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_d = function(){ $scope.guest_rooms_8_3_1_A_d = ''; $scope.guest_rooms_8_3_1_A_d = false; };
	$scope.check_guest_rooms_8_3_1_A_d_cm = function(){ $scope.guest_rooms_8_3_1_A_d_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_e = function(){ $scope.guest_rooms_8_3_1_A_e = ''; $scope.guest_rooms_8_3_1_A_e = false; };
	$scope.check_guest_rooms_8_3_1_A_e_cm = function(){ $scope.guest_rooms_8_3_1_A_e_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_f = function(){ $scope.guest_rooms_8_3_1_A_f = ''; $scope.guest_rooms_8_3_1_A_f = false; };
	$scope.check_guest_rooms_8_3_1_A_f_cm = function(){ $scope.guest_rooms_8_3_1_A_f_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_g = function(){ $scope.guest_rooms_8_3_1_A_g = ''; $scope.guest_rooms_8_3_1_A_g = false; };
	$scope.check_guest_rooms_8_3_1_A_g_cm = function(){ $scope.guest_rooms_8_3_1_A_g_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_h = function(){ $scope.guest_rooms_8_3_1_A_h = ''; $scope.guest_rooms_8_3_1_A_h = false; };
	$scope.check_guest_rooms_8_3_1_A_h_cm = function(){ $scope.guest_rooms_8_3_1_A_h_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_i = function(){ $scope.guest_rooms_8_3_1_A_i = ''; $scope.guest_rooms_8_3_1_A_i = false; };
	$scope.check_guest_rooms_8_3_1_A_i_cm = function(){ $scope.guest_rooms_8_3_1_A_i_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_j = function(){ $scope.guest_rooms_8_3_1_A_j = ''; $scope.guest_rooms_8_3_1_A_j = false; };
	$scope.check_guest_rooms_8_3_1_A_j_cm = function(){ $scope.guest_rooms_8_3_1_A_j_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_k = function(){ $scope.guest_rooms_8_3_1_A_k = ''; $scope.guest_rooms_8_3_1_A_k = false; };
	$scope.check_guest_rooms_8_3_1_A_k_cm = function(){ $scope.guest_rooms_8_3_1_A_k_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_l = function(){ $scope.guest_rooms_8_3_1_A_l = ''; $scope.guest_rooms_8_3_1_A_l = false; };
	$scope.check_guest_rooms_8_3_1_A_l_cm = function(){ $scope.guest_rooms_8_3_1_A_l_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_m = function(){ $scope.guest_rooms_8_3_1_A_m = ''; $scope.guest_rooms_8_3_1_A_m = false; };
	$scope.check_guest_rooms_8_3_1_A_m_cm = function(){ $scope.guest_rooms_8_3_1_A_m_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_n = function(){ $scope.guest_rooms_8_3_1_A_n = ''; $scope.guest_rooms_8_3_1_A_n = false; };
	$scope.check_guest_rooms_8_3_1_A_n_cm = function(){ $scope.guest_rooms_8_3_1_A_n_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_o = function(){ $scope.guest_rooms_8_3_1_A_o = ''; $scope.guest_rooms_8_3_1_A_o = false; };
	$scope.check_guest_rooms_8_3_1_A_o_cm = function(){ $scope.guest_rooms_8_3_1_A_o_cm = ''; };
	$scope.check_guest_rooms_8_3_1_A_p = function(){ $scope.guest_rooms_8_3_1_A_p = ''; $scope.guest_rooms_8_3_1_A_p = false; };
	$scope.check_guest_rooms_8_3_1_A_p_cm = function(){ $scope.guest_rooms_8_3_1_A_p_cm = ''; };
	$scope.check_guest_rooms_8_3_1_B = function(){ $scope.guest_rooms_8_3_1_B = ''; $scope.guest_rooms_8_3_1_B_a = false; $scope.guest_rooms_8_3_1_B_b = false; $scope.guest_rooms_8_3_1_B_c = false; };
	$scope.check_guest_rooms_8_3_1_B_cm = function(){ $scope.guest_rooms_8_3_1_B_cm = ''; };
	$scope.check_guest_rooms_8_4_1_A = function(){ $scope.guest_rooms_8_4_1_A = ''; $scope.guest_rooms_8_4_1_A_a = false; $scope.guest_rooms_8_4_1_A_b = false; $scope.guest_rooms_8_4_1_A_c = false; };
	$scope.check_guest_rooms_8_4_1_A_cm = function(){ $scope.guest_rooms_8_4_1_A_cm = ''; };
	$scope.check_guest_rooms_8_4_1_B_a = function(){ $scope.guest_rooms_8_4_1_B_a = ''; $scope.guest_rooms_8_4_1_B_a = false; };
	$scope.check_guest_rooms_8_4_1_B_a_cm = function(){ $scope.guest_rooms_8_4_1_B_a_cm = ''; };
	$scope.check_guest_rooms_8_4_1_B_b = function(){ $scope.guest_rooms_8_4_1_B_b = ''; $scope.guest_rooms_8_4_1_B_b = false; };
	$scope.check_guest_rooms_8_4_1_B_b_cm = function(){ $scope.guest_rooms_8_4_1_B_b_cm = ''; };
	$scope.check_guest_rooms_8_4_1_B_c = function(){ $scope.guest_rooms_8_4_1_B_c = ''; $scope.guest_rooms_8_4_1_B_c = false; };
	$scope.check_guest_rooms_8_4_1_B_c_cm = function(){ $scope.guest_rooms_8_4_1_B_c_cm = ''; };
	$scope.check_guest_rooms_8_4_1_B_d = function(){ $scope.guest_rooms_8_4_1_B_d = ''; $scope.guest_rooms_8_4_1_B_d = false; };
	$scope.check_guest_rooms_8_4_1_B_d_cm = function(){ $scope.guest_rooms_8_4_1_B_d_cm = ''; };
	$scope.check_guest_rooms_8_4_1_C = function(){ $scope.guest_rooms_8_4_1_C = ''; $scope.guest_rooms_8_4_1_C_a = false; $scope.guest_rooms_8_4_1_C_b = false; $scope.guest_rooms_8_4_1_C_c = false; $scope.guest_rooms_8_4_1_C_d = false; };
	$scope.check_guest_rooms_8_4_1_C_cm = function(){ $scope.guest_rooms_8_4_1_C_cm = ''; };
	$scope.check_guest_rooms_8_4_1_D = function(){ $scope.guest_rooms_8_4_1_D = ''; $scope.guest_rooms_8_4_1_D_a = false; $scope.guest_rooms_8_4_1_D_b = false; $scope.guest_rooms_8_4_1_D_c = false; };
	$scope.check_guest_rooms_8_4_1_D_cm = function(){ $scope.guest_rooms_8_4_1_D_cm = ''; };
	$scope.check_guest_rooms_8_5_1_A = function(){ $scope.guest_rooms_8_5_1_A = ''; $scope.guest_rooms_8_5_1_A_a = false; $scope.guest_rooms_8_5_1_A_b = false; };
	$scope.check_guest_rooms_8_5_1_A_cm = function(){ $scope.guest_rooms_8_5_1_A_cm = ''; };
	$scope.check_guest_rooms_8_5_1_B = function(){ $scope.guest_rooms_8_5_1_B = ''; $scope.guest_rooms_8_5_1_B_a = false; $scope.guest_rooms_8_5_1_B_b = false; $scope.guest_rooms_8_5_1_B_c = false; };
	$scope.check_guest_rooms_8_5_1_B_cm = function(){ $scope.guest_rooms_8_5_1_B_cm = ''; };
	$scope.check_guest_rooms_8_6_1_A = function(){ $scope.guest_rooms_8_6_1_A = ''; $scope.guest_rooms_8_6_1_A_a = false; $scope.guest_rooms_8_6_1_A_b = false; $scope.guest_rooms_8_6_1_A_c = false; };
	$scope.check_guest_rooms_8_6_1_A_cm = function(){ $scope.guest_rooms_8_6_1_A_cm = ''; };
	$scope.check_guest_rooms_8_6_1_B = function(){ $scope.guest_rooms_8_6_1_B = ''; $scope.guest_rooms_8_6_1_B_a = false; $scope.guest_rooms_8_6_1_B_b = false; };
	$scope.check_guest_rooms_8_6_1_B_cm = function(){ $scope.guest_rooms_8_6_1_B_cm = ''; };
	$scope.check_guest_rooms_8_6_1_C = function(){ $scope.guest_rooms_8_6_1_C = ''; $scope.guest_rooms_8_6_1_C_a = false; $scope.guest_rooms_8_6_1_C_b = false; $scope.guest_rooms_8_6_1_C_c = false; };
	$scope.check_guest_rooms_8_6_1_C_cm = function(){ $scope.guest_rooms_8_6_1_C_cm = ''; };
	$scope.check_guest_rooms_8_6_1_D = function(){ $scope.guest_rooms_8_6_1_D = ''; $scope.guest_rooms_8_6_1_D_a = false; $scope.guest_rooms_8_6_1_D_b = false; $scope.guest_rooms_8_6_1_D_c = false; $scope.guest_rooms_8_6_1_D_d = false; };
	$scope.check_guest_rooms_8_6_1_D_cm = function(){ $scope.guest_rooms_8_6_1_D_cm = ''; };
	$scope.check_guest_rooms_8_6_1_E = function(){ $scope.guest_rooms_8_6_1_E = ''; $scope.guest_rooms_8_6_1_E_a = false; $scope.guest_rooms_8_6_1_E_b = false; $scope.guest_rooms_8_6_1_E_c = false; };
	$scope.check_guest_rooms_8_6_1_E_cm = function(){ $scope.guest_rooms_8_6_1_E_cm = ''; };
	$scope.check_guest_rooms_8_7_1_A = function(){ $scope.guest_rooms_8_7_1_A = ''; $scope.guest_rooms_8_7_1_A_a = false; $scope.guest_rooms_8_7_1_A_b = false; $scope.guest_rooms_8_7_1_A_c = false; };
	$scope.check_guest_rooms_8_7_1_A_cm = function(){ $scope.guest_rooms_8_7_1_A_cm = ''; };
	$scope.check_guest_rooms_8_7_1_B = function(){ $scope.guest_rooms_8_7_1_B = ''; $scope.guest_rooms_8_7_1_B_a = false; $scope.guest_rooms_8_7_1_B_b = false; $scope.guest_rooms_8_7_1_B_c = false; };
	$scope.check_guest_rooms_8_7_1_B_cm = function(){ $scope.guest_rooms_8_7_1_B_cm = ''; };
	$scope.check_guest_rooms_8_7_1_C = function(){ $scope.guest_rooms_8_7_1_C = ''; $scope.guest_rooms_8_7_1_C_a = false; $scope.guest_rooms_8_7_1_C_b = false; $scope.guest_rooms_8_7_1_C_c = false; };
	$scope.check_guest_rooms_8_7_1_C_cm = function(){ $scope.guest_rooms_8_7_1_C_cm = ''; };
	$scope.check_guest_rooms_8_7_1_D = function(){ $scope.guest_rooms_8_7_1_D = ''; $scope.guest_rooms_8_7_1_D_a = false; $scope.guest_rooms_8_7_1_D_b = false; $scope.guest_rooms_8_7_1_D_c = false; };
	$scope.check_guest_rooms_8_7_1_D_cm = function(){ $scope.guest_rooms_8_7_1_D_cm = ''; };
	$scope.check_guest_rooms_8_7_1_E = function(){ $scope.guest_rooms_8_7_1_E = ''; $scope.guest_rooms_8_7_1_E_a = false; $scope.guest_rooms_8_7_1_E_b = false; $scope.guest_rooms_8_7_1_E_c = false; };
	$scope.check_guest_rooms_8_7_1_E_cm = function(){ $scope.guest_rooms_8_7_1_E_cm = ''; };
	$scope.check_guest_rooms_8_8_1_A = function(){ $scope.guest_rooms_8_8_1_A = ''; $scope.guest_rooms_8_8_1_A_a = false; $scope.guest_rooms_8_8_1_A_b = false; $scope.guest_rooms_8_8_1_A_c = false; };
	$scope.check_guest_rooms_8_8_1_A_cm = function(){ $scope.guest_rooms_8_8_1_A_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_a = function(){ $scope.guest_rooms_8_8_1_B_a = ''; $scope.guest_rooms_8_8_1_B_a = false; };
	$scope.check_guest_rooms_8_8_1_B_a_cm = function(){ $scope.guest_rooms_8_8_1_B_a_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_b = function(){ $scope.guest_rooms_8_8_1_B_b = ''; $scope.guest_rooms_8_8_1_B_b = false; };
	$scope.check_guest_rooms_8_8_1_B_b_cm = function(){ $scope.guest_rooms_8_8_1_B_b_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_c = function(){ $scope.guest_rooms_8_8_1_B_c = ''; $scope.guest_rooms_8_8_1_B_c = false; };
	$scope.check_guest_rooms_8_8_1_B_c_cm = function(){ $scope.guest_rooms_8_8_1_B_c_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_d = function(){ $scope.guest_rooms_8_8_1_B_d = ''; $scope.guest_rooms_8_8_1_B_d = false; };
	$scope.check_guest_rooms_8_8_1_B_d_cm = function(){ $scope.guest_rooms_8_8_1_B_d_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_e = function(){ $scope.guest_rooms_8_8_1_B_e = ''; $scope.guest_rooms_8_8_1_B_e = false; };
	$scope.check_guest_rooms_8_8_1_B_e_cm = function(){ $scope.guest_rooms_8_8_1_B_e_cm = ''; };
	$scope.check_guest_rooms_8_8_1_B_f = function(){ $scope.guest_rooms_8_8_1_B_f = ''; $scope.guest_rooms_8_8_1_B_f = false; };
	$scope.check_guest_rooms_8_8_1_B_f_cm = function(){ $scope.guest_rooms_8_8_1_B_f_cm = ''; };
	$scope.check_guest_rooms_8_8_1_C_a = function(){ $scope.guest_rooms_8_8_1_C_a = ''; $scope.guest_rooms_8_8_1_C_a = false; };
	$scope.check_guest_rooms_8_8_1_C_a_cm = function(){ $scope.guest_rooms_8_8_1_C_a_cm = ''; };
	$scope.check_guest_rooms_8_8_1_C_b = function(){ $scope.guest_rooms_8_8_1_C_b = ''; $scope.guest_rooms_8_8_1_C_b = false; };
	$scope.check_guest_rooms_8_8_1_C_b_cm = function(){ $scope.guest_rooms_8_8_1_C_b_cm = ''; };
	$scope.check_guest_rooms_8_8_1_D = function(){ $scope.guest_rooms_8_8_1_D = ''; $scope.guest_rooms_8_8_1_D_a = false; $scope.guest_rooms_8_8_1_D_b = false; $scope.guest_rooms_8_8_1_D_c = false; };
	$scope.check_guest_rooms_8_8_1_D_cm = function(){ $scope.guest_rooms_8_8_1_D_cm = ''; };
	$scope.check_guest_rooms_8_9_1_A = function(){ $scope.guest_rooms_8_9_1_A = ''; $scope.guest_rooms_8_9_1_A_a = false; $scope.guest_rooms_8_9_1_A_b = false; };
	$scope.check_guest_rooms_8_9_1_A_cm = function(){ $scope.guest_rooms_8_9_1_A_cm = ''; };
	$scope.check_guest_rooms_8_9_1_B = function(){ $scope.guest_rooms_8_9_1_B = ''; $scope.guest_rooms_8_9_1_B_a = false; $scope.guest_rooms_8_9_1_B_b = false; $scope.guest_rooms_8_9_1_B_c = false; };
	$scope.check_guest_rooms_8_9_1_B_cm = function(){ $scope.guest_rooms_8_9_1_B_cm = ''; };
	$scope.check_guest_rooms_8_10_1_A_a = function(){ $scope.guest_rooms_8_10_1_A_a = ''; $scope.guest_rooms_8_10_1_A_a = false; };
	$scope.check_guest_rooms_8_10_1_A_a_cm = function(){ $scope.guest_rooms_8_10_1_A_a_cm = ''; };
	$scope.check_guest_rooms_8_10_1_A_b = function(){ $scope.guest_rooms_8_10_1_A_b = ''; $scope.guest_rooms_8_10_1_A_b = false; };
	$scope.check_guest_rooms_8_10_1_A_b_cm = function(){ $scope.guest_rooms_8_10_1_A_b_cm = ''; };
	$scope.check_guest_rooms_8_10_1_A_c = function(){ $scope.guest_rooms_8_10_1_A_c = ''; $scope.guest_rooms_8_10_1_A_c = false; };
	$scope.check_guest_rooms_8_10_1_A_c_cm = function(){ $scope.guest_rooms_8_10_1_A_c_cm = ''; };
	$scope.check_guest_rooms_8_10_1_A_d = function(){ $scope.guest_rooms_8_10_1_A_d = ''; $scope.guest_rooms_8_10_1_A_d = false; };
	$scope.check_guest_rooms_8_10_1_A_d_cm = function(){ $scope.guest_rooms_8_10_1_A_d_cm = ''; };
	$scope.check_guest_rooms_8_10_1_A_e = function(){ $scope.guest_rooms_8_10_1_A_e = ''; $scope.guest_rooms_8_10_1_A_e = false; };
	$scope.check_guest_rooms_8_10_1_A_e_cm = function(){ $scope.guest_rooms_8_10_1_A_e_cm = ''; };
	$scope.check_guest_rooms_8_10_1_B_a = function(){ $scope.guest_rooms_8_10_1_B_a = ''; $scope.guest_rooms_8_10_1_B_a = false; };
	$scope.check_guest_rooms_8_10_1_B_a_cm = function(){ $scope.guest_rooms_8_10_1_B_a_cm = ''; };
	$scope.check_guest_rooms_8_10_1_B_b = function(){ $scope.guest_rooms_8_10_1_B_b = ''; $scope.guest_rooms_8_10_1_B_b = false; };
	$scope.check_guest_rooms_8_10_1_B_b_cm = function(){ $scope.guest_rooms_8_10_1_B_b_cm = ''; };
	$scope.check_guest_rooms_8_10_1_B_c = function(){ $scope.guest_rooms_8_10_1_B_c = ''; $scope.guest_rooms_8_10_1_B_c = false; };
	$scope.check_guest_rooms_8_10_1_B_c_cm = function(){ $scope.guest_rooms_8_10_1_B_c_cm = ''; };
	$scope.check_guest_rooms_8_10_1_B_d = function(){ $scope.guest_rooms_8_10_1_B_d = ''; $scope.guest_rooms_8_10_1_B_d = false; };
	$scope.check_guest_rooms_8_10_1_B_d_cm = function(){ $scope.guest_rooms_8_10_1_B_d_cm = ''; };
	$scope.check_guest_rooms_8_10_1_C = function(){ $scope.guest_rooms_8_10_1_C = ''; $scope.guest_rooms_8_10_1_C_a = false; $scope.guest_rooms_8_10_1_C_b = false; $scope.guest_rooms_8_10_1_C_c = false; };
	$scope.check_guest_rooms_8_10_1_C_cm = function(){ $scope.guest_rooms_8_10_1_C_cm = ''; };
	$scope.check_guest_rooms_8_11_1_A = function(){ $scope.guest_rooms_8_11_1_A = ''; $scope.guest_rooms_8_11_1_A_a = false; $scope.guest_rooms_8_11_1_A_b = false; };
	$scope.check_guest_rooms_8_11_1_A_cm = function(){ $scope.guest_rooms_8_11_1_A_cm = ''; };
	$scope.check_guest_rooms_8_11_1_B = function(){ $scope.guest_rooms_8_11_1_B = ''; $scope.guest_rooms_8_11_1_B_a = false; $scope.guest_rooms_8_11_1_B_b = false; };
	$scope.check_guest_rooms_8_11_1_B_cm = function(){ $scope.guest_rooms_8_11_1_B_cm = ''; };
	$scope.check_guest_rooms_8_11_1_C_a = function(){ $scope.guest_rooms_8_11_1_C_a = ''; $scope.guest_rooms_8_11_1_C_a = false; };
	$scope.check_guest_rooms_8_11_1_C_a_cm = function(){ $scope.guest_rooms_8_11_1_C_a_cm = ''; };
	$scope.check_guest_rooms_8_11_1_C_b = function(){ $scope.guest_rooms_8_11_1_C_b = ''; $scope.guest_rooms_8_11_1_C_b = false; };
	$scope.check_guest_rooms_8_11_1_C_b_cm = function(){ $scope.guest_rooms_8_11_1_C_b_cm = ''; };
	$scope.check_guest_rooms_8_11_1_C_c = function(){ $scope.guest_rooms_8_11_1_C_c = ''; $scope.guest_rooms_8_11_1_C_c = false; };
	$scope.check_guest_rooms_8_11_1_C_c_cm = function(){ $scope.guest_rooms_8_11_1_C_c_cm = ''; };
	$scope.check_guest_rooms_8_11_1_D = function(){ $scope.guest_rooms_8_11_1_D = ''; $scope.guest_rooms_8_11_1_D_a = false; $scope.guest_rooms_8_11_1_D_b = false; };
	$scope.check_guest_rooms_8_11_1_D_cm = function(){ $scope.guest_rooms_8_11_1_D_cm = ''; };
	$scope.check_guest_rooms_8_11_1_E = function(){ $scope.guest_rooms_8_11_1_E = ''; $scope.guest_rooms_8_11_1_E_a = false; $scope.guest_rooms_8_11_1_E_b = false; $scope.guest_rooms_8_11_1_E_c = false; };
	$scope.check_guest_rooms_8_11_1_E_cm = function(){ $scope.guest_rooms_8_11_1_E_cm = ''; };
	$scope.check_guest_rooms_8_12_1_A = function(){ $scope.guest_rooms_8_12_1_A = ''; $scope.guest_rooms_8_12_1_A_a = false; $scope.guest_rooms_8_12_1_A_b = false; };
	$scope.check_guest_rooms_8_12_1_A_cm = function(){ $scope.guest_rooms_8_12_1_A_cm = ''; };
	$scope.check_guest_rooms_8_12_1_B = function(){ $scope.guest_rooms_8_12_1_B = ''; $scope.guest_rooms_8_12_1_B_a = false; $scope.guest_rooms_8_12_1_B_b = false; $scope.guest_rooms_8_12_1_B_c = false; };
	$scope.check_guest_rooms_8_12_1_B_cm = function(){ $scope.guest_rooms_8_12_1_B_cm = ''; };
	$scope.check_guest_rooms_8_12_1_C = function(){ $scope.guest_rooms_8_12_1_C = ''; $scope.guest_rooms_8_12_1_C_a = false; $scope.guest_rooms_8_12_1_C_b = false; $scope.guest_rooms_8_12_1_C_c = false; };
	$scope.check_guest_rooms_8_12_1_C_cm = function(){ $scope.guest_rooms_8_12_1_C_cm = ''; };
	$scope.check_guest_rooms_8_13_1_A = function(){ $scope.guest_rooms_8_13_1_A = ''; $scope.guest_rooms_8_13_1_A_a = false; $scope.guest_rooms_8_13_1_A_b = false; $scope.guest_rooms_8_13_1_A_c = false; };
	$scope.check_guest_rooms_8_13_1_A_cm = function(){ $scope.guest_rooms_8_13_1_A_cm = ''; };
	$scope.check_guest_rooms_8_13_1_B_a = function(){ $scope.guest_rooms_8_13_1_B_a = ''; $scope.guest_rooms_8_13_1_B_a = false; };
	$scope.check_guest_rooms_8_13_1_B_a_cm = function(){ $scope.guest_rooms_8_13_1_B_a_cm = ''; };
	$scope.check_guest_rooms_8_13_1_B_b = function(){ $scope.guest_rooms_8_13_1_B_b = ''; $scope.guest_rooms_8_13_1_B_b = false; };
	$scope.check_guest_rooms_8_13_1_B_b_cm = function(){ $scope.guest_rooms_8_13_1_B_b_cm = ''; };
	$scope.check_guest_rooms_8_13_1_B_c = function(){ $scope.guest_rooms_8_13_1_B_c = ''; $scope.guest_rooms_8_13_1_B_c = false; };
	$scope.check_guest_rooms_8_13_1_B_c_cm = function(){ $scope.guest_rooms_8_13_1_B_c_cm = ''; };
	$scope.check_guest_rooms_8_13_1_C = function(){ $scope.guest_rooms_8_13_1_C = ''; $scope.guest_rooms_8_13_1_C_a = false; $scope.guest_rooms_8_13_1_C_b = false; $scope.guest_rooms_8_13_1_C_c = false; };
	$scope.check_guest_rooms_8_13_1_C_cm = function(){ $scope.guest_rooms_8_13_1_C_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_a = function(){ $scope.guest_rooms_8_14_1_A_a = ''; $scope.guest_rooms_8_14_1_A_a = false; };
	$scope.check_guest_rooms_8_14_1_A_a_cm = function(){ $scope.guest_rooms_8_14_1_A_a_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_b = function(){ $scope.guest_rooms_8_14_1_A_b = ''; $scope.guest_rooms_8_14_1_A_b = false; };
	$scope.check_guest_rooms_8_14_1_A_b_cm = function(){ $scope.guest_rooms_8_14_1_A_b_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_c = function(){ $scope.guest_rooms_8_14_1_A_c = ''; $scope.guest_rooms_8_14_1_A_c = false; };
	$scope.check_guest_rooms_8_14_1_A_c_cm = function(){ $scope.guest_rooms_8_14_1_A_c_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_d = function(){ $scope.guest_rooms_8_14_1_A_d = ''; $scope.guest_rooms_8_14_1_A_d = false; };
	$scope.check_guest_rooms_8_14_1_A_d_cm = function(){ $scope.guest_rooms_8_14_1_A_d_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_e = function(){ $scope.guest_rooms_8_14_1_A_e = ''; $scope.guest_rooms_8_14_1_A_e = false; };
	$scope.check_guest_rooms_8_14_1_A_e_cm = function(){ $scope.guest_rooms_8_14_1_A_e_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_f = function(){ $scope.guest_rooms_8_14_1_A_f = ''; $scope.guest_rooms_8_14_1_A_f = false; };
	$scope.check_guest_rooms_8_14_1_A_f_cm = function(){ $scope.guest_rooms_8_14_1_A_f_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_g = function(){ $scope.guest_rooms_8_14_1_A_g = ''; $scope.guest_rooms_8_14_1_A_g = false; };
	$scope.check_guest_rooms_8_14_1_A_g_cm = function(){ $scope.guest_rooms_8_14_1_A_g_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_h = function(){ $scope.guest_rooms_8_14_1_A_h = ''; $scope.guest_rooms_8_14_1_A_h = false; };
	$scope.check_guest_rooms_8_14_1_A_h_cm = function(){ $scope.guest_rooms_8_14_1_A_h_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_i = function(){ $scope.guest_rooms_8_14_1_A_i = ''; $scope.guest_rooms_8_14_1_A_i = false; };
	$scope.check_guest_rooms_8_14_1_A_i_cm = function(){ $scope.guest_rooms_8_14_1_A_i_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_j = function(){ $scope.guest_rooms_8_14_1_A_j = ''; $scope.guest_rooms_8_14_1_A_j = false; };
	$scope.check_guest_rooms_8_14_1_A_j_cm = function(){ $scope.guest_rooms_8_14_1_A_j_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_k = function(){ $scope.guest_rooms_8_14_1_A_k = ''; $scope.guest_rooms_8_14_1_A_k = false; };
	$scope.check_guest_rooms_8_14_1_A_k_cm = function(){ $scope.guest_rooms_8_14_1_A_k_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_l = function(){ $scope.guest_rooms_8_14_1_A_l = ''; $scope.guest_rooms_8_14_1_A_l = false; };
	$scope.check_guest_rooms_8_14_1_A_l_cm = function(){ $scope.guest_rooms_8_14_1_A_l_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_m = function(){ $scope.guest_rooms_8_14_1_A_m = ''; $scope.guest_rooms_8_14_1_A_m = false; };
	$scope.check_guest_rooms_8_14_1_A_m_cm = function(){ $scope.guest_rooms_8_14_1_A_m_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_n = function(){ $scope.guest_rooms_8_14_1_A_n = ''; $scope.guest_rooms_8_14_1_A_n = false; };
	$scope.check_guest_rooms_8_14_1_A_n_cm = function(){ $scope.guest_rooms_8_14_1_A_n_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_o = function(){ $scope.guest_rooms_8_14_1_A_o = ''; $scope.guest_rooms_8_14_1_A_o = false; };
	$scope.check_guest_rooms_8_14_1_A_o_cm = function(){ $scope.guest_rooms_8_14_1_A_o_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_p = function(){ $scope.guest_rooms_8_14_1_A_p = ''; $scope.guest_rooms_8_14_1_A_p = false; };
	$scope.check_guest_rooms_8_14_1_A_p_cm = function(){ $scope.guest_rooms_8_14_1_A_p_cm = ''; };
	$scope.check_guest_rooms_8_14_1_A_q = function(){ $scope.guest_rooms_8_14_1_A_q = ''; $scope.guest_rooms_8_14_1_A_q = false; };
	$scope.check_guest_rooms_8_14_1_A_q_cm = function(){ $scope.guest_rooms_8_14_1_A_q_cm = ''; };
	$scope.check_guest_rooms_8_14_1_B = function(){ $scope.guest_rooms_8_14_1_B = ''; $scope.guest_rooms_8_14_1_B_a = false; $scope.guest_rooms_8_14_1_B_b = false; $scope.guest_rooms_8_14_1_B_c = false; };
	$scope.check_guest_rooms_8_14_1_B_cm = function(){ $scope.guest_rooms_8_14_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_1_1_A = function(){ $scope.guest_bathrooms_9_1_1_A = ''; $scope.guest_bathrooms_9_1_1_A_a = false; $scope.guest_bathrooms_9_1_1_A_b = false; $scope.guest_bathrooms_9_1_1_A_c = false; $scope.guest_bathrooms_9_1_1_A_d = false; };
	$scope.check_guest_bathrooms_9_1_1_A_cm = function(){ $scope.guest_bathrooms_9_1_1_A_cm = ''; };
	$scope.check_guest_bathrooms_9_1_1_B = function(){ $scope.guest_bathrooms_9_1_1_B = ''; $scope.guest_bathrooms_9_1_1_B_a = false; $scope.guest_bathrooms_9_1_1_B_b = false; $scope.guest_bathrooms_9_1_1_B_c = false; };
	$scope.check_guest_bathrooms_9_1_1_B_cm = function(){ $scope.guest_bathrooms_9_1_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_1_1_C = function(){ $scope.guest_bathrooms_9_1_1_C = ''; $scope.guest_bathrooms_9_1_1_C_a = false; $scope.guest_bathrooms_9_1_1_C_b = false; $scope.guest_bathrooms_9_1_1_C_c = false; };
	$scope.check_guest_bathrooms_9_1_1_C_cm = function(){ $scope.guest_bathrooms_9_1_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_a = function(){ $scope.guest_bathrooms_9_2_1_A_a = ''; $scope.guest_bathrooms_9_2_1_A_a = false; };
	$scope.check_guest_bathrooms_9_2_1_A_a_cm = function(){ $scope.guest_bathrooms_9_2_1_A_a_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_b = function(){ $scope.guest_bathrooms_9_2_1_A_b = ''; $scope.guest_bathrooms_9_2_1_A_b = false; };
	$scope.check_guest_bathrooms_9_2_1_A_b_cm = function(){ $scope.guest_bathrooms_9_2_1_A_b_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_c = function(){ $scope.guest_bathrooms_9_2_1_A_c = ''; $scope.guest_bathrooms_9_2_1_A_c = false; };
	$scope.check_guest_bathrooms_9_2_1_A_c_cm = function(){ $scope.guest_bathrooms_9_2_1_A_c_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_d = function(){ $scope.guest_bathrooms_9_2_1_A_d = ''; $scope.guest_bathrooms_9_2_1_A_d = false; };
	$scope.check_guest_bathrooms_9_2_1_A_d_cm = function(){ $scope.guest_bathrooms_9_2_1_A_d_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_e = function(){ $scope.guest_bathrooms_9_2_1_A_e = ''; $scope.guest_bathrooms_9_2_1_A_e = false; };
	$scope.check_guest_bathrooms_9_2_1_A_e_cm = function(){ $scope.guest_bathrooms_9_2_1_A_e_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_f = function(){ $scope.guest_bathrooms_9_2_1_A_f = ''; $scope.guest_bathrooms_9_2_1_A_f = false; };
	$scope.check_guest_bathrooms_9_2_1_A_f_cm = function(){ $scope.guest_bathrooms_9_2_1_A_f_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_g = function(){ $scope.guest_bathrooms_9_2_1_A_g = ''; $scope.guest_bathrooms_9_2_1_A_g = false; };
	$scope.check_guest_bathrooms_9_2_1_A_g_cm = function(){ $scope.guest_bathrooms_9_2_1_A_g_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_h = function(){ $scope.guest_bathrooms_9_2_1_A_h = ''; $scope.guest_bathrooms_9_2_1_A_h = false; };
	$scope.check_guest_bathrooms_9_2_1_A_h_cm = function(){ $scope.guest_bathrooms_9_2_1_A_h_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_i = function(){ $scope.guest_bathrooms_9_2_1_A_i = ''; $scope.guest_bathrooms_9_2_1_A_i = false; };
	$scope.check_guest_bathrooms_9_2_1_A_i_cm = function(){ $scope.guest_bathrooms_9_2_1_A_i_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_j = function(){ $scope.guest_bathrooms_9_2_1_A_j = ''; $scope.guest_bathrooms_9_2_1_A_j = false; };
	$scope.check_guest_bathrooms_9_2_1_A_j_cm = function(){ $scope.guest_bathrooms_9_2_1_A_j_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_k = function(){ $scope.guest_bathrooms_9_2_1_A_k = ''; $scope.guest_bathrooms_9_2_1_A_k = false; };
	$scope.check_guest_bathrooms_9_2_1_A_k_cm = function(){ $scope.guest_bathrooms_9_2_1_A_k_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_l = function(){ $scope.guest_bathrooms_9_2_1_A_l = ''; $scope.guest_bathrooms_9_2_1_A_l = false; };
	$scope.check_guest_bathrooms_9_2_1_A_l_cm = function(){ $scope.guest_bathrooms_9_2_1_A_l_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_m = function(){ $scope.guest_bathrooms_9_2_1_A_m = ''; $scope.guest_bathrooms_9_2_1_A_m = false; };
	$scope.check_guest_bathrooms_9_2_1_A_m_cm = function(){ $scope.guest_bathrooms_9_2_1_A_m_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_n = function(){ $scope.guest_bathrooms_9_2_1_A_n = ''; $scope.guest_bathrooms_9_2_1_A_n = false; };
	$scope.check_guest_bathrooms_9_2_1_A_n_cm = function(){ $scope.guest_bathrooms_9_2_1_A_n_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_o = function(){ $scope.guest_bathrooms_9_2_1_A_o = ''; $scope.guest_bathrooms_9_2_1_A_o = false; };
	$scope.check_guest_bathrooms_9_2_1_A_o_cm = function(){ $scope.guest_bathrooms_9_2_1_A_o_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_p = function(){ $scope.guest_bathrooms_9_2_1_A_p = ''; $scope.guest_bathrooms_9_2_1_A_p = false; };
	$scope.check_guest_bathrooms_9_2_1_A_p_cm = function(){ $scope.guest_bathrooms_9_2_1_A_p_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_q = function(){ $scope.guest_bathrooms_9_2_1_A_q = ''; $scope.guest_bathrooms_9_2_1_A_q = false; };
	$scope.check_guest_bathrooms_9_2_1_A_q_cm = function(){ $scope.guest_bathrooms_9_2_1_A_q_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_r = function(){ $scope.guest_bathrooms_9_2_1_A_r = ''; $scope.guest_bathrooms_9_2_1_A_r = false; };
	$scope.check_guest_bathrooms_9_2_1_A_r_cm = function(){ $scope.guest_bathrooms_9_2_1_A_r_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_s = function(){ $scope.guest_bathrooms_9_2_1_A_s = ''; $scope.guest_bathrooms_9_2_1_A_s = false; };
	$scope.check_guest_bathrooms_9_2_1_A_s_cm = function(){ $scope.guest_bathrooms_9_2_1_A_s_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_t = function(){ $scope.guest_bathrooms_9_2_1_A_t = ''; $scope.guest_bathrooms_9_2_1_A_t = false; };
	$scope.check_guest_bathrooms_9_2_1_A_t_cm = function(){ $scope.guest_bathrooms_9_2_1_A_t_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_A_u = function(){ $scope.guest_bathrooms_9_2_1_A_u = ''; $scope.guest_bathrooms_9_2_1_A_u = false; };
	$scope.check_guest_bathrooms_9_2_1_A_u_cm = function(){ $scope.guest_bathrooms_9_2_1_A_u_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_B = function(){ $scope.guest_bathrooms_9_2_1_B = ''; $scope.guest_bathrooms_9_2_1_B_a = false; $scope.guest_bathrooms_9_2_1_B_b = false; $scope.guest_bathrooms_9_2_1_B_c = false; };
	$scope.check_guest_bathrooms_9_2_1_B_cm = function(){ $scope.guest_bathrooms_9_2_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_2_1_C = function(){ $scope.guest_bathrooms_9_2_1_C = ''; $scope.guest_bathrooms_9_2_1_C_a = false; $scope.guest_bathrooms_9_2_1_C_b = false; $scope.guest_bathrooms_9_2_1_C_c = false; };
	$scope.check_guest_bathrooms_9_2_1_C_cm = function(){ $scope.guest_bathrooms_9_2_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_A = function(){ $scope.guest_bathrooms_9_3_1_A = ''; $scope.guest_bathrooms_9_3_1_A_a = false; $scope.guest_bathrooms_9_3_1_A_b = false; $scope.guest_bathrooms_9_3_1_A_c = false; };
	$scope.check_guest_bathrooms_9_3_1_A_cm = function(){ $scope.guest_bathrooms_9_3_1_A_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_B = function(){ $scope.guest_bathrooms_9_3_1_B = ''; $scope.guest_bathrooms_9_3_1_B_a = false; $scope.guest_bathrooms_9_3_1_B_b = false; $scope.guest_bathrooms_9_3_1_B_c = false; };
	$scope.check_guest_bathrooms_9_3_1_B_cm = function(){ $scope.guest_bathrooms_9_3_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_C = function(){ $scope.guest_bathrooms_9_3_1_C = ''; $scope.guest_bathrooms_9_3_1_C_a = false; $scope.guest_bathrooms_9_3_1_C_b = false; $scope.guest_bathrooms_9_3_1_C_c = false; };
	$scope.check_guest_bathrooms_9_3_1_C_cm = function(){ $scope.guest_bathrooms_9_3_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_D = function(){ $scope.guest_bathrooms_9_3_1_D = ''; $scope.guest_bathrooms_9_3_1_D_a = false; $scope.guest_bathrooms_9_3_1_D_b = false; };
	$scope.check_guest_bathrooms_9_3_1_D_cm = function(){ $scope.guest_bathrooms_9_3_1_D_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_E = function(){ $scope.guest_bathrooms_9_3_1_E = ''; $scope.guest_bathrooms_9_3_1_E_a = false; $scope.guest_bathrooms_9_3_1_E_b = false; $scope.guest_bathrooms_9_3_1_E_c = false; };
	$scope.check_guest_bathrooms_9_3_1_E_cm = function(){ $scope.guest_bathrooms_9_3_1_E_cm = ''; };
	$scope.check_guest_bathrooms_9_3_1_F = function(){ $scope.guest_bathrooms_9_3_1_F = ''; $scope.guest_bathrooms_9_3_1_F_a = false; $scope.guest_bathrooms_9_3_1_F_b = false; $scope.guest_bathrooms_9_3_1_F_c = false; };
	$scope.check_guest_bathrooms_9_3_1_F_cm = function(){ $scope.guest_bathrooms_9_3_1_F_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_A_a = function(){ $scope.guest_bathrooms_9_4_1_A_a = ''; $scope.guest_bathrooms_9_4_1_A_a = false; };
	$scope.check_guest_bathrooms_9_4_1_A_a_cm = function(){ $scope.guest_bathrooms_9_4_1_A_a_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_A_b = function(){ $scope.guest_bathrooms_9_4_1_A_b = ''; $scope.guest_bathrooms_9_4_1_A_b = false; };
	$scope.check_guest_bathrooms_9_4_1_A_b_cm = function(){ $scope.guest_bathrooms_9_4_1_A_b_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_A_c = function(){ $scope.guest_bathrooms_9_4_1_A_c = ''; $scope.guest_bathrooms_9_4_1_A_c = false; };
	$scope.check_guest_bathrooms_9_4_1_A_c_cm = function(){ $scope.guest_bathrooms_9_4_1_A_c_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_A_d = function(){ $scope.guest_bathrooms_9_4_1_A_d = ''; $scope.guest_bathrooms_9_4_1_A_d = false; };
	$scope.check_guest_bathrooms_9_4_1_A_d_cm = function(){ $scope.guest_bathrooms_9_4_1_A_d_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_A_e = function(){ $scope.guest_bathrooms_9_4_1_A_e = ''; $scope.guest_bathrooms_9_4_1_A_e = false; };
	$scope.check_guest_bathrooms_9_4_1_A_e_cm = function(){ $scope.guest_bathrooms_9_4_1_A_e_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_B = function(){ $scope.guest_bathrooms_9_4_1_B = ''; $scope.guest_bathrooms_9_4_1_B_a = false; $scope.guest_bathrooms_9_4_1_B_b = false; $scope.guest_bathrooms_9_4_1_B_c = false; };
	$scope.check_guest_bathrooms_9_4_1_B_cm = function(){ $scope.guest_bathrooms_9_4_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_C = function(){ $scope.guest_bathrooms_9_4_1_C = ''; $scope.guest_bathrooms_9_4_1_C_a = false; $scope.guest_bathrooms_9_4_1_C_b = false; };
	$scope.check_guest_bathrooms_9_4_1_C_cm = function(){ $scope.guest_bathrooms_9_4_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_D = function(){ $scope.guest_bathrooms_9_4_1_D = ''; $scope.guest_bathrooms_9_4_1_D_a = false; $scope.guest_bathrooms_9_4_1_D_b = false; };
	$scope.check_guest_bathrooms_9_4_1_D_cm = function(){ $scope.guest_bathrooms_9_4_1_D_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_E = function(){ $scope.guest_bathrooms_9_4_1_E = ''; $scope.guest_bathrooms_9_4_1_E_a = false; $scope.guest_bathrooms_9_4_1_E_b = false; $scope.guest_bathrooms_9_4_1_E_c = false; };
	$scope.check_guest_bathrooms_9_4_1_E_cm = function(){ $scope.guest_bathrooms_9_4_1_E_cm = ''; };
	$scope.check_guest_bathrooms_9_4_1_F = function(){ $scope.guest_bathrooms_9_4_1_F = ''; $scope.guest_bathrooms_9_4_1_F_a = false; $scope.guest_bathrooms_9_4_1_F_b = false; };
	$scope.check_guest_bathrooms_9_4_1_F_cm = function(){ $scope.guest_bathrooms_9_4_1_F_cm = ''; };
	$scope.check_guest_bathrooms_9_5_1_A = function(){ $scope.guest_bathrooms_9_5_1_A = ''; $scope.guest_bathrooms_9_5_1_A_a = false; $scope.guest_bathrooms_9_5_1_A_b = false; $scope.guest_bathrooms_9_5_1_A_c = false; };
	$scope.check_guest_bathrooms_9_5_1_A_cm = function(){ $scope.guest_bathrooms_9_5_1_A_cm = ''; };
	$scope.check_guest_bathrooms_9_5_1_B = function(){ $scope.guest_bathrooms_9_5_1_B = ''; $scope.guest_bathrooms_9_5_1_B_a = false; $scope.guest_bathrooms_9_5_1_B_b = false; };
	$scope.check_guest_bathrooms_9_5_1_B_cm = function(){ $scope.guest_bathrooms_9_5_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_5_1_C = function(){ $scope.guest_bathrooms_9_5_1_C = ''; $scope.guest_bathrooms_9_5_1_C_a = false; $scope.guest_bathrooms_9_5_1_C_b = false; $scope.guest_bathrooms_9_5_1_C_c = false; };
	$scope.check_guest_bathrooms_9_5_1_C_cm = function(){ $scope.guest_bathrooms_9_5_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_5_1_D = function(){ $scope.guest_bathrooms_9_5_1_D = ''; $scope.guest_bathrooms_9_5_1_D_a = false; $scope.guest_bathrooms_9_5_1_D_b = false; $scope.guest_bathrooms_9_5_1_D_c = false; };
	$scope.check_guest_bathrooms_9_5_1_D_cm = function(){ $scope.guest_bathrooms_9_5_1_D_cm = ''; };
	$scope.check_guest_bathrooms_9_6_1_A = function(){ $scope.guest_bathrooms_9_6_1_A = ''; $scope.guest_bathrooms_9_6_1_A_a = false; $scope.guest_bathrooms_9_6_1_A_b = false; };
	$scope.check_guest_bathrooms_9_6_1_A_cm = function(){ $scope.guest_bathrooms_9_6_1_A_cm = ''; };
	$scope.check_guest_bathrooms_9_6_1_B = function(){ $scope.guest_bathrooms_9_6_1_B = ''; $scope.guest_bathrooms_9_6_1_B_a = false; $scope.guest_bathrooms_9_6_1_B_b = false; };
	$scope.check_guest_bathrooms_9_6_1_B_cm = function(){ $scope.guest_bathrooms_9_6_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_6_1_C = function(){ $scope.guest_bathrooms_9_6_1_C = ''; $scope.guest_bathrooms_9_6_1_C_a = false; $scope.guest_bathrooms_9_6_1_C_b = false; $scope.guest_bathrooms_9_6_1_C_c = false; };
	$scope.check_guest_bathrooms_9_6_1_C_cm = function(){ $scope.guest_bathrooms_9_6_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_a = function(){ $scope.guest_bathrooms_9_7_1_A_a = ''; $scope.guest_bathrooms_9_7_1_A_a = false; };
	$scope.check_guest_bathrooms_9_7_1_A_a_cm = function(){ $scope.guest_bathrooms_9_7_1_A_a_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_b = function(){ $scope.guest_bathrooms_9_7_1_A_b = ''; $scope.guest_bathrooms_9_7_1_A_b = false; };
	$scope.check_guest_bathrooms_9_7_1_A_b_cm = function(){ $scope.guest_bathrooms_9_7_1_A_b_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_c = function(){ $scope.guest_bathrooms_9_7_1_A_c = ''; $scope.guest_bathrooms_9_7_1_A_c = false; };
	$scope.check_guest_bathrooms_9_7_1_A_c_cm = function(){ $scope.guest_bathrooms_9_7_1_A_c_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_d = function(){ $scope.guest_bathrooms_9_7_1_A_d = ''; $scope.guest_bathrooms_9_7_1_A_d = false; };
	$scope.check_guest_bathrooms_9_7_1_A_d_cm = function(){ $scope.guest_bathrooms_9_7_1_A_d_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_e = function(){ $scope.guest_bathrooms_9_7_1_A_e = ''; $scope.guest_bathrooms_9_7_1_A_e = false; };
	$scope.check_guest_bathrooms_9_7_1_A_e_cm = function(){ $scope.guest_bathrooms_9_7_1_A_e_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_A_f = function(){ $scope.guest_bathrooms_9_7_1_A_f = ''; $scope.guest_bathrooms_9_7_1_A_f = false; };
	$scope.check_guest_bathrooms_9_7_1_A_f_cm = function(){ $scope.guest_bathrooms_9_7_1_A_f_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_B = function(){ $scope.guest_bathrooms_9_7_1_B = ''; $scope.guest_bathrooms_9_7_1_B_a = false; $scope.guest_bathrooms_9_7_1_B_b = false; $scope.guest_bathrooms_9_7_1_B_c = false; };
	$scope.check_guest_bathrooms_9_7_1_B_cm = function(){ $scope.guest_bathrooms_9_7_1_B_cm = ''; };
	$scope.check_guest_bathrooms_9_7_1_C = function(){ $scope.guest_bathrooms_9_7_1_C = ''; $scope.guest_bathrooms_9_7_1_C_a = false; $scope.guest_bathrooms_9_7_1_C_b = false; $scope.guest_bathrooms_9_7_1_C_c = false; };
	$scope.check_guest_bathrooms_9_7_1_C_cm = function(){ $scope.guest_bathrooms_9_7_1_C_cm = ''; };
	$scope.check_guest_bathrooms_9_8_1_A = function(){ $scope.guest_bathrooms_9_8_1_A = ''; $scope.guest_bathrooms_9_8_1_A_a = false; $scope.guest_bathrooms_9_8_1_A_b = false; $scope.guest_bathrooms_9_8_1_A_c = false; $scope.guest_bathrooms_9_8_1_A_d = false; };
	$scope.check_guest_bathrooms_9_8_1_A_cm = function(){ $scope.guest_bathrooms_9_8_1_A_cm = ''; };
	$scope.check_guest_bathrooms_9_8_1_B = function(){ $scope.guest_bathrooms_9_8_1_B = ''; $scope.guest_bathrooms_9_8_1_B_a = false; $scope.guest_bathrooms_9_8_1_B_b = false; };
	$scope.check_guest_bathrooms_9_8_1_B_cm = function(){ $scope.guest_bathrooms_9_8_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_A = function(){ $scope.hygiene_and_sanitation_10_1_1_A = ''; $scope.hygiene_and_sanitation_10_1_1_A_a = false; $scope.hygiene_and_sanitation_10_1_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_B = function(){ $scope.hygiene_and_sanitation_10_1_1_B = ''; $scope.hygiene_and_sanitation_10_1_1_B_a = false; $scope.hygiene_and_sanitation_10_1_1_B_b = false; $scope.hygiene_and_sanitation_10_1_1_B_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_C = function(){ $scope.hygiene_and_sanitation_10_1_1_C = ''; $scope.hygiene_and_sanitation_10_1_1_C_a = false; $scope.hygiene_and_sanitation_10_1_1_C_b = false; $scope.hygiene_and_sanitation_10_1_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_C_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_a = function(){ $scope.hygiene_and_sanitation_10_1_1_D_a = ''; $scope.hygiene_and_sanitation_10_1_1_D_a = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_a_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_b = function(){ $scope.hygiene_and_sanitation_10_1_1_D_b = ''; $scope.hygiene_and_sanitation_10_1_1_D_b = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_b_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_c = function(){ $scope.hygiene_and_sanitation_10_1_1_D_c = ''; $scope.hygiene_and_sanitation_10_1_1_D_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_c_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_d = function(){ $scope.hygiene_and_sanitation_10_1_1_D_d = ''; $scope.hygiene_and_sanitation_10_1_1_D_d = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_d_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_e = function(){ $scope.hygiene_and_sanitation_10_1_1_D_e = ''; $scope.hygiene_and_sanitation_10_1_1_D_e = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_e_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_f = function(){ $scope.hygiene_and_sanitation_10_1_1_D_f = ''; $scope.hygiene_and_sanitation_10_1_1_D_f = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_D_f_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_D_f_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_E = function(){ $scope.hygiene_and_sanitation_10_1_1_E = ''; $scope.hygiene_and_sanitation_10_1_1_E_a = false; $scope.hygiene_and_sanitation_10_1_1_E_b = false; $scope.hygiene_and_sanitation_10_1_1_E_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_E_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_E_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_F = function(){ $scope.hygiene_and_sanitation_10_1_1_F = ''; $scope.hygiene_and_sanitation_10_1_1_F_a = false; $scope.hygiene_and_sanitation_10_1_1_F_b = false; $scope.hygiene_and_sanitation_10_1_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_F_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_G = function(){ $scope.hygiene_and_sanitation_10_1_1_G = ''; $scope.hygiene_and_sanitation_10_1_1_G_a = false; $scope.hygiene_and_sanitation_10_1_1_G_b = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_G_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_G_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_H = function(){ $scope.hygiene_and_sanitation_10_1_1_H = ''; $scope.hygiene_and_sanitation_10_1_1_H_a = false; $scope.hygiene_and_sanitation_10_1_1_H_b = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_H_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_H_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_a = function(){ $scope.hygiene_and_sanitation_10_1_1_I_a = ''; $scope.hygiene_and_sanitation_10_1_1_I_a = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_a_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_I_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_b = function(){ $scope.hygiene_and_sanitation_10_1_1_I_b = ''; $scope.hygiene_and_sanitation_10_1_1_I_b = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_b_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_I_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_c = function(){ $scope.hygiene_and_sanitation_10_1_1_I_c = ''; $scope.hygiene_and_sanitation_10_1_1_I_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_c_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_I_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_d = function(){ $scope.hygiene_and_sanitation_10_1_1_I_d = ''; $scope.hygiene_and_sanitation_10_1_1_I_d = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_d_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_I_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_e = function(){ $scope.hygiene_and_sanitation_10_1_1_I_e = ''; $scope.hygiene_and_sanitation_10_1_1_I_e = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_I_e_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_I_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_J = function(){ $scope.hygiene_and_sanitation_10_1_1_J = ''; $scope.hygiene_and_sanitation_10_1_1_J_a = false; $scope.hygiene_and_sanitation_10_1_1_J_b = false; $scope.hygiene_and_sanitation_10_1_1_J_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_J_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_J_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_1_1_K = function(){ $scope.hygiene_and_sanitation_10_1_1_K = ''; $scope.hygiene_and_sanitation_10_1_1_K_a = false; $scope.hygiene_and_sanitation_10_1_1_K_b = false; $scope.hygiene_and_sanitation_10_1_1_K_c = false; };
	$scope.check_hygiene_and_sanitation_10_1_1_K_cm = function(){ $scope.hygiene_and_sanitation_10_1_1_K_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_A = function(){ $scope.hygiene_and_sanitation_10_2_1_A = ''; $scope.hygiene_and_sanitation_10_2_1_A_a = false; $scope.hygiene_and_sanitation_10_2_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_B = function(){ $scope.hygiene_and_sanitation_10_2_1_B = ''; $scope.hygiene_and_sanitation_10_2_1_B_a = false; $scope.hygiene_and_sanitation_10_2_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_C = function(){ $scope.hygiene_and_sanitation_10_2_1_C = ''; $scope.hygiene_and_sanitation_10_2_1_C_a = false; $scope.hygiene_and_sanitation_10_2_1_C_b = false; $scope.hygiene_and_sanitation_10_2_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_C_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_D = function(){ $scope.hygiene_and_sanitation_10_2_1_D = ''; $scope.hygiene_and_sanitation_10_2_1_D_a = false; $scope.hygiene_and_sanitation_10_2_1_D_b = false; $scope.hygiene_and_sanitation_10_2_1_D_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_D_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_D_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_a = function(){ $scope.hygiene_and_sanitation_10_2_1_E_a = ''; $scope.hygiene_and_sanitation_10_2_1_E_a = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_a_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_b = function(){ $scope.hygiene_and_sanitation_10_2_1_E_b = ''; $scope.hygiene_and_sanitation_10_2_1_E_b = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_b_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_c = function(){ $scope.hygiene_and_sanitation_10_2_1_E_c = ''; $scope.hygiene_and_sanitation_10_2_1_E_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_c_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_d = function(){ $scope.hygiene_and_sanitation_10_2_1_E_d = ''; $scope.hygiene_and_sanitation_10_2_1_E_d = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_d_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_e = function(){ $scope.hygiene_and_sanitation_10_2_1_E_e = ''; $scope.hygiene_and_sanitation_10_2_1_E_e = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_e_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_e_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_f = function(){ $scope.hygiene_and_sanitation_10_2_1_E_f = ''; $scope.hygiene_and_sanitation_10_2_1_E_f = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_f_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_f_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_g = function(){ $scope.hygiene_and_sanitation_10_2_1_E_g = ''; $scope.hygiene_and_sanitation_10_2_1_E_g = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_g_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_g_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_h = function(){ $scope.hygiene_and_sanitation_10_2_1_E_h = ''; $scope.hygiene_and_sanitation_10_2_1_E_h = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_h_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_h_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_i = function(){ $scope.hygiene_and_sanitation_10_2_1_E_i = ''; $scope.hygiene_and_sanitation_10_2_1_E_i = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_E_i_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_E_i_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_F = function(){ $scope.hygiene_and_sanitation_10_2_1_F = ''; $scope.hygiene_and_sanitation_10_2_1_F_a = false; $scope.hygiene_and_sanitation_10_2_1_F_b = false; $scope.hygiene_and_sanitation_10_2_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_F_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_G = function(){ $scope.hygiene_and_sanitation_10_2_1_G = ''; $scope.hygiene_and_sanitation_10_2_1_G_a = false; $scope.hygiene_and_sanitation_10_2_1_G_b = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_G_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_G_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_a = function(){ $scope.hygiene_and_sanitation_10_2_1_H_a = ''; $scope.hygiene_and_sanitation_10_2_1_H_a = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_a_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_H_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_b = function(){ $scope.hygiene_and_sanitation_10_2_1_H_b = ''; $scope.hygiene_and_sanitation_10_2_1_H_b = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_b_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_H_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_c = function(){ $scope.hygiene_and_sanitation_10_2_1_H_c = ''; $scope.hygiene_and_sanitation_10_2_1_H_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_c_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_H_c_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_d = function(){ $scope.hygiene_and_sanitation_10_2_1_H_d = ''; $scope.hygiene_and_sanitation_10_2_1_H_d = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_H_d_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_H_d_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_I = function(){ $scope.hygiene_and_sanitation_10_2_1_I = ''; $scope.hygiene_and_sanitation_10_2_1_I_a = false; $scope.hygiene_and_sanitation_10_2_1_I_b = false; $scope.hygiene_and_sanitation_10_2_1_I_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_I_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_I_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_2_1_J = function(){ $scope.hygiene_and_sanitation_10_2_1_J = ''; $scope.hygiene_and_sanitation_10_2_1_J_a = false; $scope.hygiene_and_sanitation_10_2_1_J_b = false; $scope.hygiene_and_sanitation_10_2_1_J_c = false; };
	$scope.check_hygiene_and_sanitation_10_2_1_J_cm = function(){ $scope.hygiene_and_sanitation_10_2_1_J_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_A = function(){ $scope.hygiene_and_sanitation_10_3_1_A = ''; $scope.hygiene_and_sanitation_10_3_1_A_a = false; $scope.hygiene_and_sanitation_10_3_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_B = function(){ $scope.hygiene_and_sanitation_10_3_1_B = ''; $scope.hygiene_and_sanitation_10_3_1_B_a = false; $scope.hygiene_and_sanitation_10_3_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_C = function(){ $scope.hygiene_and_sanitation_10_3_1_C = ''; $scope.hygiene_and_sanitation_10_3_1_C_a = false; $scope.hygiene_and_sanitation_10_3_1_C_b = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_C_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_D = function(){ $scope.hygiene_and_sanitation_10_3_1_D = ''; $scope.hygiene_and_sanitation_10_3_1_D_a = false; $scope.hygiene_and_sanitation_10_3_1_D_b = false; $scope.hygiene_and_sanitation_10_3_1_D_c = false; $scope.hygiene_and_sanitation_10_3_1_D_d = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_D_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_D_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_E = function(){ $scope.hygiene_and_sanitation_10_3_1_E = ''; $scope.hygiene_and_sanitation_10_3_1_E_a = false; $scope.hygiene_and_sanitation_10_3_1_E_b = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_E_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_E_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_3_1_F = function(){ $scope.hygiene_and_sanitation_10_3_1_F = ''; $scope.hygiene_and_sanitation_10_3_1_F_a = false; $scope.hygiene_and_sanitation_10_3_1_F_b = false; $scope.hygiene_and_sanitation_10_3_1_F_c = false; };
	$scope.check_hygiene_and_sanitation_10_3_1_F_cm = function(){ $scope.hygiene_and_sanitation_10_3_1_F_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_4_1_A = function(){ $scope.hygiene_and_sanitation_10_4_1_A = ''; $scope.hygiene_and_sanitation_10_4_1_A_a = false; $scope.hygiene_and_sanitation_10_4_1_A_b = false; $scope.hygiene_and_sanitation_10_4_1_A_c = false; };
	$scope.check_hygiene_and_sanitation_10_4_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_4_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_4_1_B = function(){ $scope.hygiene_and_sanitation_10_4_1_B = ''; $scope.hygiene_and_sanitation_10_4_1_B_a = false; $scope.hygiene_and_sanitation_10_4_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_10_4_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_4_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_4_1_C = function(){ $scope.hygiene_and_sanitation_10_4_1_C = ''; $scope.hygiene_and_sanitation_10_4_1_C_a = false; $scope.hygiene_and_sanitation_10_4_1_C_b = false; $scope.hygiene_and_sanitation_10_4_1_C_c = false; };
	$scope.check_hygiene_and_sanitation_10_4_1_C_cm = function(){ $scope.hygiene_and_sanitation_10_4_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_5_1_A = function(){ $scope.hygiene_and_sanitation_10_5_1_A = ''; $scope.hygiene_and_sanitation_10_5_1_A_a = false; $scope.hygiene_and_sanitation_10_5_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_5_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_5_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_5_1_B = function(){ $scope.hygiene_and_sanitation_10_5_1_B = ''; $scope.hygiene_and_sanitation_10_5_1_B_a = false; $scope.hygiene_and_sanitation_10_5_1_B_b = false; $scope.hygiene_and_sanitation_10_5_1_B_c = false; };
	$scope.check_hygiene_and_sanitation_10_5_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_5_1_B_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_6_1_A = function(){ $scope.hygiene_and_sanitation_10_6_1_A = ''; $scope.hygiene_and_sanitation_10_6_1_A_a = false; $scope.hygiene_and_sanitation_10_6_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_6_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_6_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_6_1_B_a = function(){ $scope.hygiene_and_sanitation_10_6_1_B_a = ''; $scope.hygiene_and_sanitation_10_6_1_B_a = false; };
	$scope.check_hygiene_and_sanitation_10_6_1_B_a_cm = function(){ $scope.hygiene_and_sanitation_10_6_1_B_a_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_6_1_B_b = function(){ $scope.hygiene_and_sanitation_10_6_1_B_b = ''; $scope.hygiene_and_sanitation_10_6_1_B_b = false; };
	$scope.check_hygiene_and_sanitation_10_6_1_B_b_cm = function(){ $scope.hygiene_and_sanitation_10_6_1_B_b_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_6_1_C = function(){ $scope.hygiene_and_sanitation_10_6_1_C = ''; $scope.hygiene_and_sanitation_10_6_1_C_a = false; $scope.hygiene_and_sanitation_10_6_1_C_b = false; };
	$scope.check_hygiene_and_sanitation_10_6_1_C_cm = function(){ $scope.hygiene_and_sanitation_10_6_1_C_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_7_1_A = function(){ $scope.hygiene_and_sanitation_10_7_1_A = ''; $scope.hygiene_and_sanitation_10_7_1_A_a = false; $scope.hygiene_and_sanitation_10_7_1_A_b = false; };
	$scope.check_hygiene_and_sanitation_10_7_1_A_cm = function(){ $scope.hygiene_and_sanitation_10_7_1_A_cm = ''; };
	$scope.check_hygiene_and_sanitation_10_7_1_B = function(){ $scope.hygiene_and_sanitation_10_7_1_B = ''; $scope.hygiene_and_sanitation_10_7_1_B_a = false; $scope.hygiene_and_sanitation_10_7_1_B_b = false; $scope.hygiene_and_sanitation_10_7_1_B_c = false; $scope.hygiene_and_sanitation_10_7_1_B_d = false; $scope.hygiene_and_sanitation_10_7_1_B_e = false; };
	$scope.check_hygiene_and_sanitation_10_7_1_B_cm = function(){ $scope.hygiene_and_sanitation_10_7_1_B_cm = ''; };
	$scope.check_safety_and_security_11_1_1_A = function(){ $scope.safety_and_security_11_1_1_A = ''; $scope.safety_and_security_11_1_1_A_a = false; $scope.safety_and_security_11_1_1_A_b = false; };
	$scope.check_safety_and_security_11_1_1_A_cm = function(){ $scope.safety_and_security_11_1_1_A_cm = ''; };
	$scope.check_safety_and_security_11_1_1_B = function(){ $scope.safety_and_security_11_1_1_B = ''; $scope.safety_and_security_11_1_1_B_a = false; $scope.safety_and_security_11_1_1_B_b = false; };
	$scope.check_safety_and_security_11_1_1_B_cm = function(){ $scope.safety_and_security_11_1_1_B_cm = ''; };
	$scope.check_safety_and_security_11_1_1_C = function(){ $scope.safety_and_security_11_1_1_C = ''; $scope.safety_and_security_11_1_1_C_a = false; $scope.safety_and_security_11_1_1_C_b = false; };
	$scope.check_safety_and_security_11_1_1_C_cm = function(){ $scope.safety_and_security_11_1_1_C_cm = ''; };
	$scope.check_safety_and_security_11_1_1_D = function(){ $scope.safety_and_security_11_1_1_D = ''; $scope.safety_and_security_11_1_1_D_a = false; $scope.safety_and_security_11_1_1_D_b = false; };
	$scope.check_safety_and_security_11_1_1_D_cm = function(){ $scope.safety_and_security_11_1_1_D_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_a = function(){ $scope.safety_and_security_11_1_1_E_a = ''; $scope.safety_and_security_11_1_1_E_a = false; };
	$scope.check_safety_and_security_11_1_1_E_a_cm = function(){ $scope.safety_and_security_11_1_1_E_a_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_b = function(){ $scope.safety_and_security_11_1_1_E_b = ''; $scope.safety_and_security_11_1_1_E_b = false; };
	$scope.check_safety_and_security_11_1_1_E_b_cm = function(){ $scope.safety_and_security_11_1_1_E_b_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_c = function(){ $scope.safety_and_security_11_1_1_E_c = ''; $scope.safety_and_security_11_1_1_E_c = false; };
	$scope.check_safety_and_security_11_1_1_E_c_cm = function(){ $scope.safety_and_security_11_1_1_E_c_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_d = function(){ $scope.safety_and_security_11_1_1_E_d = ''; $scope.safety_and_security_11_1_1_E_d = false; };
	$scope.check_safety_and_security_11_1_1_E_d_cm = function(){ $scope.safety_and_security_11_1_1_E_d_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_e = function(){ $scope.safety_and_security_11_1_1_E_e = ''; $scope.safety_and_security_11_1_1_E_e = false; };
	$scope.check_safety_and_security_11_1_1_E_e_cm = function(){ $scope.safety_and_security_11_1_1_E_e_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_f = function(){ $scope.safety_and_security_11_1_1_E_f = ''; $scope.safety_and_security_11_1_1_E_f = false; };
	$scope.check_safety_and_security_11_1_1_E_f_cm = function(){ $scope.safety_and_security_11_1_1_E_f_cm = ''; };
	$scope.check_safety_and_security_11_1_1_E_g = function(){ $scope.safety_and_security_11_1_1_E_g = ''; $scope.safety_and_security_11_1_1_E_g = false; };
	$scope.check_safety_and_security_11_1_1_E_g_cm = function(){ $scope.safety_and_security_11_1_1_E_g_cm = ''; };
	$scope.check_safety_and_security_11_1_1_F = function(){ $scope.safety_and_security_11_1_1_F = ''; $scope.safety_and_security_11_1_1_F_a = false; $scope.safety_and_security_11_1_1_F_b = false; };
	$scope.check_safety_and_security_11_1_1_F_cm = function(){ $scope.safety_and_security_11_1_1_F_cm = ''; };
	$scope.check_safety_and_security_11_1_1_G = function(){ $scope.safety_and_security_11_1_1_G = ''; $scope.safety_and_security_11_1_1_G_a = false; $scope.safety_and_security_11_1_1_G_b = false; };
	$scope.check_safety_and_security_11_1_1_G_cm = function(){ $scope.safety_and_security_11_1_1_G_cm = ''; };
	$scope.check_safety_and_security_11_1_1_H = function(){ $scope.safety_and_security_11_1_1_H = ''; $scope.safety_and_security_11_1_1_H_a = false; $scope.safety_and_security_11_1_1_H_b = false; };
	$scope.check_safety_and_security_11_1_1_H_cm = function(){ $scope.safety_and_security_11_1_1_H_cm = ''; };
	$scope.check_safety_and_security_11_1_1_I = function(){ $scope.safety_and_security_11_1_1_I = ''; $scope.safety_and_security_11_1_1_I_a = false; $scope.safety_and_security_11_1_1_I_b = false; $scope.safety_and_security_11_1_1_I_c = false; };
	$scope.check_safety_and_security_11_1_1_I_cm = function(){ $scope.safety_and_security_11_1_1_I_cm = ''; };
	$scope.check_safety_and_security_11_2_1_A = function(){ $scope.safety_and_security_11_2_1_A = ''; $scope.safety_and_security_11_2_1_A_a = false; $scope.safety_and_security_11_2_1_A_b = false; };
	$scope.check_safety_and_security_11_2_1_A_cm = function(){ $scope.safety_and_security_11_2_1_A_cm = ''; };
	$scope.check_safety_and_security_11_2_1_B = function(){ $scope.safety_and_security_11_2_1_B = ''; $scope.safety_and_security_11_2_1_B_a = false; $scope.safety_and_security_11_2_1_B_b = false; $scope.safety_and_security_11_2_1_B_c = false; };
	$scope.check_safety_and_security_11_2_1_B_cm = function(){ $scope.safety_and_security_11_2_1_B_cm = ''; };
	$scope.check_safety_and_security_11_3_1_A = function(){ $scope.safety_and_security_11_3_1_A = ''; $scope.safety_and_security_11_3_1_A_a = false; $scope.safety_and_security_11_3_1_A_b = false; };
	$scope.check_safety_and_security_11_3_1_A_cm = function(){ $scope.safety_and_security_11_3_1_A_cm = ''; };
	$scope.check_safety_and_security_11_3_1_B = function(){ $scope.safety_and_security_11_3_1_B = ''; $scope.safety_and_security_11_3_1_B_a = false; $scope.safety_and_security_11_3_1_B_b = false; $scope.safety_and_security_11_3_1_B_c = false; };
	$scope.check_safety_and_security_11_3_1_B_cm = function(){ $scope.safety_and_security_11_3_1_B_cm = ''; };
	$scope.check_safety_and_security_11_3_1_C = function(){ $scope.safety_and_security_11_3_1_C = ''; $scope.safety_and_security_11_3_1_C_a = false; $scope.safety_and_security_11_3_1_C_b = false; };
	$scope.check_safety_and_security_11_3_1_C_cm = function(){ $scope.safety_and_security_11_3_1_C_cm = ''; };
	$scope.check_safety_and_security_11_3_1_D = function(){ $scope.safety_and_security_11_3_1_D = ''; $scope.safety_and_security_11_3_1_D_a = false; $scope.safety_and_security_11_3_1_D_b = false; $scope.safety_and_security_11_3_1_D_c = false; };
	$scope.check_safety_and_security_11_3_1_D_cm = function(){ $scope.safety_and_security_11_3_1_D_cm = ''; };
	$scope.check_safety_and_security_11_3_1_E = function(){ $scope.safety_and_security_11_3_1_E = ''; $scope.safety_and_security_11_3_1_E_a = false; $scope.safety_and_security_11_3_1_E_b = false; };
	$scope.check_safety_and_security_11_3_1_E_cm = function(){ $scope.safety_and_security_11_3_1_E_cm = ''; };
	$scope.check_safety_and_security_11_3_1_F = function(){ $scope.safety_and_security_11_3_1_F = ''; $scope.safety_and_security_11_3_1_F_a = false; $scope.safety_and_security_11_3_1_F_b = false; $scope.safety_and_security_11_3_1_F_c = false; };
	$scope.check_safety_and_security_11_3_1_F_cm = function(){ $scope.safety_and_security_11_3_1_F_cm = ''; };
	$scope.check_safety_and_security_11_3_1_G = function(){ $scope.safety_and_security_11_3_1_G = ''; $scope.safety_and_security_11_3_1_G_a = false; $scope.safety_and_security_11_3_1_G_b = false; };
	$scope.check_safety_and_security_11_3_1_G_cm = function(){ $scope.safety_and_security_11_3_1_G_cm = ''; };
	$scope.check_safety_and_security_11_3_1_H = function(){ $scope.safety_and_security_11_3_1_H = ''; $scope.safety_and_security_11_3_1_H_a = false; $scope.safety_and_security_11_3_1_H_b = false; };
	$scope.check_safety_and_security_11_3_1_H_cm = function(){ $scope.safety_and_security_11_3_1_H_cm = ''; };
	$scope.check_safety_and_security_11_4_1_A = function(){ $scope.safety_and_security_11_4_1_A = ''; $scope.safety_and_security_11_4_1_A_a = false; $scope.safety_and_security_11_4_1_A_b = false; };
	$scope.check_safety_and_security_11_4_1_A_cm = function(){ $scope.safety_and_security_11_4_1_A_cm = ''; };
	$scope.check_safety_and_security_11_4_1_B = function(){ $scope.safety_and_security_11_4_1_B = ''; $scope.safety_and_security_11_4_1_B_a = false; $scope.safety_and_security_11_4_1_B_b = false; $scope.safety_and_security_11_4_1_B_c = false; };
	$scope.check_safety_and_security_11_4_1_B_cm = function(){ $scope.safety_and_security_11_4_1_B_cm = ''; };
	$scope.check_safety_and_security_11_4_1_C = function(){ $scope.safety_and_security_11_4_1_C = ''; $scope.safety_and_security_11_4_1_C_a = false; $scope.safety_and_security_11_4_1_C_b = false; $scope.safety_and_security_11_4_1_C_c = false; };
	$scope.check_safety_and_security_11_4_1_C_cm = function(){ $scope.safety_and_security_11_4_1_C_cm = ''; };
	$scope.check_safety_and_security_11_5_1_A = function(){ $scope.safety_and_security_11_5_1_A = ''; $scope.safety_and_security_11_5_1_A_a = false; $scope.safety_and_security_11_5_1_A_b = false; $scope.safety_and_security_11_5_1_A_c = false; };
	$scope.check_safety_and_security_11_5_1_A_cm = function(){ $scope.safety_and_security_11_5_1_A_cm = ''; };
	$scope.check_safety_and_security_11_5_1_B = function(){ $scope.safety_and_security_11_5_1_B = ''; $scope.safety_and_security_11_5_1_B_a = false; $scope.safety_and_security_11_5_1_B_b = false; };
	$scope.check_safety_and_security_11_5_1_B_cm = function(){ $scope.safety_and_security_11_5_1_B_cm = ''; };
	$scope.check_safety_and_security_11_5_1_C = function(){ $scope.safety_and_security_11_5_1_C = ''; $scope.safety_and_security_11_5_1_C_a = false; $scope.safety_and_security_11_5_1_C_b = false; };
	$scope.check_safety_and_security_11_5_1_C_cm = function(){ $scope.safety_and_security_11_5_1_C_cm = ''; };
	$scope.check_safety_and_security_11_5_1_D = function(){ $scope.safety_and_security_11_5_1_D = ''; $scope.safety_and_security_11_5_1_D_a = false; $scope.safety_and_security_11_5_1_D_b = false; };
	$scope.check_safety_and_security_11_5_1_D_cm = function(){ $scope.safety_and_security_11_5_1_D_cm = ''; };
	$scope.check_safety_and_security_11_5_1_E = function(){ $scope.safety_and_security_11_5_1_E = ''; $scope.safety_and_security_11_5_1_E_a = false; $scope.safety_and_security_11_5_1_E_b = false; };
	$scope.check_safety_and_security_11_5_1_E_cm = function(){ $scope.safety_and_security_11_5_1_E_cm = ''; };
	$scope.check_safety_and_security_11_6_1_A = function(){ $scope.safety_and_security_11_6_1_A = ''; $scope.safety_and_security_11_6_1_A_a = false; $scope.safety_and_security_11_6_1_A_b = false; };
	$scope.check_safety_and_security_11_6_1_A_cm = function(){ $scope.safety_and_security_11_6_1_A_cm = ''; };
	$scope.check_safety_and_security_11_6_1_B = function(){ $scope.safety_and_security_11_6_1_B = ''; $scope.safety_and_security_11_6_1_B_a = false; $scope.safety_and_security_11_6_1_B_b = false; };
	$scope.check_safety_and_security_11_6_1_B_cm = function(){ $scope.safety_and_security_11_6_1_B_cm = ''; };
	$scope.check_safety_and_security_11_6_1_C = function(){ $scope.safety_and_security_11_6_1_C = ''; $scope.safety_and_security_11_6_1_C_a = false; $scope.safety_and_security_11_6_1_C_b = false; };
	$scope.check_safety_and_security_11_6_1_C_cm = function(){ $scope.safety_and_security_11_6_1_C_cm = ''; };
	$scope.check_sundry_services_12_1_1_A = function(){ $scope.sundry_services_12_1_1_A = ''; $scope.sundry_services_12_1_1_A_a = false; $scope.sundry_services_12_1_1_A_b = false; };
	$scope.check_sundry_services_12_1_1_A_cm = function(){ $scope.sundry_services_12_1_1_A_cm = ''; };
	$scope.check_sundry_services_12_1_1_B = function(){ $scope.sundry_services_12_1_1_B = ''; $scope.sundry_services_12_1_1_B_a = false; $scope.sundry_services_12_1_1_B_b = false; };
	$scope.check_sundry_services_12_1_1_B_cm = function(){ $scope.sundry_services_12_1_1_B_cm = ''; };
	$scope.check_sundry_services_12_1_1_C = function(){ $scope.sundry_services_12_1_1_C = ''; $scope.sundry_services_12_1_1_C_a = false; $scope.sundry_services_12_1_1_C_b = false; };
	$scope.check_sundry_services_12_1_1_C_cm = function(){ $scope.sundry_services_12_1_1_C_cm = ''; };
	$scope.check_sundry_services_12_2_1_A = function(){ $scope.sundry_services_12_2_1_A = ''; $scope.sundry_services_12_2_1_A_a = false; $scope.sundry_services_12_2_1_A_b = false; };
	$scope.check_sundry_services_12_2_1_A_cm = function(){ $scope.sundry_services_12_2_1_A_cm = ''; };
	$scope.check_sundry_services_12_3_1_A = function(){ $scope.sundry_services_12_3_1_A = ''; $scope.sundry_services_12_3_1_A_a = false; $scope.sundry_services_12_3_1_A_b = false; };
	$scope.check_sundry_services_12_3_1_A_cm = function(){ $scope.sundry_services_12_3_1_A_cm = ''; };
	$scope.check_sundry_services_12_4_1_A = function(){ $scope.sundry_services_12_4_1_A = ''; $scope.sundry_services_12_4_1_A_a = false; $scope.sundry_services_12_4_1_A_b = false; };
	$scope.check_sundry_services_12_4_1_A_cm = function(){ $scope.sundry_services_12_4_1_A_cm = ''; };
	$scope.check_sundry_services_12_4_1_B = function(){ $scope.sundry_services_12_4_1_B = ''; $scope.sundry_services_12_4_1_B_a = false; $scope.sundry_services_12_4_1_B_b = false; $scope.sundry_services_12_4_1_B_c = false; };
	$scope.check_sundry_services_12_4_1_B_cm = function(){ $scope.sundry_services_12_4_1_B_cm = ''; };
	$scope.check_sundry_services_12_4_1_C = function(){ $scope.sundry_services_12_4_1_C = ''; $scope.sundry_services_12_4_1_C_a = false; $scope.sundry_services_12_4_1_C_b = false; };
	$scope.check_sundry_services_12_4_1_C_cm = function(){ $scope.sundry_services_12_4_1_C_cm = ''; };
	$scope.check_sundry_services_12_4_1_D = function(){ $scope.sundry_services_12_4_1_D = ''; $scope.sundry_services_12_4_1_D_a = false; $scope.sundry_services_12_4_1_D_b = false; $scope.sundry_services_12_4_1_D_c = false; };
	$scope.check_sundry_services_12_4_1_D_cm = function(){ $scope.sundry_services_12_4_1_D_cm = ''; };
	$scope.check_human_resources_13_1_1_A = function(){ $scope.human_resources_13_1_1_A = ''; $scope.human_resources_13_1_1_A_a = false; $scope.human_resources_13_1_1_A_b = false; };
	$scope.check_human_resources_13_1_1_A_cm = function(){ $scope.human_resources_13_1_1_A_cm = ''; };
	$scope.check_human_resources_13_1_1_B = function(){ $scope.human_resources_13_1_1_B = ''; $scope.human_resources_13_1_1_B_a = false; $scope.human_resources_13_1_1_B_b = false; };
	$scope.check_human_resources_13_1_1_B_cm = function(){ $scope.human_resources_13_1_1_B_cm = ''; };
	$scope.check_human_resources_13_1_1_C = function(){ $scope.human_resources_13_1_1_C = ''; $scope.human_resources_13_1_1_C_a = false; $scope.human_resources_13_1_1_C_b = false; $scope.human_resources_13_1_1_C_c = false; };
	$scope.check_human_resources_13_1_1_C_cm = function(){ $scope.human_resources_13_1_1_C_cm = ''; };
	$scope.check_human_resources_13_1_1_D = function(){ $scope.human_resources_13_1_1_D = ''; $scope.human_resources_13_1_1_D_a = false; $scope.human_resources_13_1_1_D_b = false; $scope.human_resources_13_1_1_D_c = false; $scope.human_resources_13_1_1_D_d = false; };
	$scope.check_human_resources_13_1_1_D_cm = function(){ $scope.human_resources_13_1_1_D_cm = ''; };
	$scope.check_human_resources_13_1_1_E_a = function(){ $scope.human_resources_13_1_1_E_a = ''; $scope.human_resources_13_1_1_E_a = false; };
	$scope.check_human_resources_13_1_1_E_a_cm = function(){ $scope.human_resources_13_1_1_E_a_cm = ''; };
	$scope.check_human_resources_13_1_1_E_b = function(){ $scope.human_resources_13_1_1_E_b = ''; $scope.human_resources_13_1_1_E_b = false; };
	$scope.check_human_resources_13_1_1_E_b_cm = function(){ $scope.human_resources_13_1_1_E_b_cm = ''; };
	$scope.check_human_resources_13_1_1_E_c = function(){ $scope.human_resources_13_1_1_E_c = ''; $scope.human_resources_13_1_1_E_c = false; };
	$scope.check_human_resources_13_1_1_E_c_cm = function(){ $scope.human_resources_13_1_1_E_c_cm = ''; };
	$scope.check_human_resources_13_1_1_E_d = function(){ $scope.human_resources_13_1_1_E_d = ''; $scope.human_resources_13_1_1_E_d = false; };
	$scope.check_human_resources_13_1_1_E_d_cm = function(){ $scope.human_resources_13_1_1_E_d_cm = ''; };
	$scope.check_human_resources_13_1_1_E_e = function(){ $scope.human_resources_13_1_1_E_e = ''; $scope.human_resources_13_1_1_E_e = false; };
	$scope.check_human_resources_13_1_1_E_e_cm = function(){ $scope.human_resources_13_1_1_E_e_cm = ''; };
	$scope.check_human_resources_13_2_1_A = function(){ $scope.human_resources_13_2_1_A = ''; $scope.human_resources_13_2_1_A_a = false; $scope.human_resources_13_2_1_A_b = false; $scope.human_resources_13_2_1_A_c = false; $scope.human_resources_13_2_1_A_d = false; };
	$scope.check_human_resources_13_2_1_A_cm = function(){ $scope.human_resources_13_2_1_A_cm = ''; };
	$scope.check_human_resources_13_2_1_B = function(){ $scope.human_resources_13_2_1_B = ''; $scope.human_resources_13_2_1_B_a = false; $scope.human_resources_13_2_1_B_b = false; };
	$scope.check_human_resources_13_2_1_B_cm = function(){ $scope.human_resources_13_2_1_B_cm = ''; };
	$scope.check_human_resources_13_3_1_A = function(){ $scope.human_resources_13_3_1_A = ''; $scope.human_resources_13_3_1_A_a = false; $scope.human_resources_13_3_1_A_b = false; $scope.human_resources_13_3_1_A_c = false; $scope.human_resources_13_3_1_A_d = false; };
	$scope.check_human_resources_13_3_1_A_cm = function(){ $scope.human_resources_13_3_1_A_cm = ''; };
	$scope.check_human_resources_13_3_1_B = function(){ $scope.human_resources_13_3_1_B = ''; $scope.human_resources_13_3_1_B_a = false; $scope.human_resources_13_3_1_B_b = false; };
	$scope.check_human_resources_13_3_1_B_cm = function(){ $scope.human_resources_13_3_1_B_cm = ''; };
	$scope.check_human_resources_13_4_1_A_a = function(){ $scope.human_resources_13_4_1_A_a = ''; $scope.human_resources_13_4_1_A_a = false; };
	$scope.check_human_resources_13_4_1_A_a_cm = function(){ $scope.human_resources_13_4_1_A_a_cm = ''; };
	$scope.check_human_resources_13_4_1_A_b = function(){ $scope.human_resources_13_4_1_A_b = ''; $scope.human_resources_13_4_1_A_b = false; };
	$scope.check_human_resources_13_4_1_A_b_cm = function(){ $scope.human_resources_13_4_1_A_b_cm = ''; };
	$scope.check_human_resources_13_4_1_A_c = function(){ $scope.human_resources_13_4_1_A_c = ''; $scope.human_resources_13_4_1_A_c = false; };
	$scope.check_human_resources_13_4_1_A_c_cm = function(){ $scope.human_resources_13_4_1_A_c_cm = ''; };
	$scope.check_human_resources_13_4_1_B_a = function(){ $scope.human_resources_13_4_1_B_a = ''; $scope.human_resources_13_4_1_B_a = false; };
	$scope.check_human_resources_13_4_1_B_a_cm = function(){ $scope.human_resources_13_4_1_B_a_cm = ''; };
	$scope.check_human_resources_13_4_1_B_b = function(){ $scope.human_resources_13_4_1_B_b = ''; $scope.human_resources_13_4_1_B_b = false; };
	$scope.check_human_resources_13_4_1_B_b_cm = function(){ $scope.human_resources_13_4_1_B_b_cm = ''; };
	$scope.check_human_resources_13_4_1_B_c = function(){ $scope.human_resources_13_4_1_B_c = ''; $scope.human_resources_13_4_1_B_c = false; };
	$scope.check_human_resources_13_4_1_B_c_cm = function(){ $scope.human_resources_13_4_1_B_c_cm = ''; };
	$scope.check_human_resources_13_4_1_C_a = function(){ $scope.human_resources_13_4_1_C_a = ''; $scope.human_resources_13_4_1_C_a = false; };
	$scope.check_human_resources_13_4_1_C_a_cm = function(){ $scope.human_resources_13_4_1_C_a_cm = ''; };
	$scope.check_human_resources_13_4_1_C_b = function(){ $scope.human_resources_13_4_1_C_b = ''; $scope.human_resources_13_4_1_C_b = false; };
	$scope.check_human_resources_13_4_1_C_b_cm = function(){ $scope.human_resources_13_4_1_C_b_cm = ''; };
	$scope.check_human_resources_13_4_1_C_c = function(){ $scope.human_resources_13_4_1_C_c = ''; $scope.human_resources_13_4_1_C_c = false; };
	$scope.check_human_resources_13_4_1_C_c_cm = function(){ $scope.human_resources_13_4_1_C_c_cm = ''; };
	$scope.check_human_resources_13_5_1_A = function(){ $scope.human_resources_13_5_1_A = ''; $scope.human_resources_13_5_1_A_a = false; $scope.human_resources_13_5_1_A_b = false; };
	$scope.check_human_resources_13_5_1_A_cm = function(){ $scope.human_resources_13_5_1_A_cm = ''; };
	$scope.check_human_resources_13_6_1_A = function(){ $scope.human_resources_13_6_1_A = ''; $scope.human_resources_13_6_1_A_a = false; $scope.human_resources_13_6_1_A_b = false; };
	$scope.check_human_resources_13_6_1_A_cm = function(){ $scope.human_resources_13_6_1_A_cm = ''; };
	$scope.check_human_resources_13_6_1_B = function(){ $scope.human_resources_13_6_1_B = ''; $scope.human_resources_13_6_1_B_a = false; $scope.human_resources_13_6_1_B_b = false; $scope.human_resources_13_6_1_B_c = false; };
	$scope.check_human_resources_13_6_1_B_cm = function(){ $scope.human_resources_13_6_1_B_cm = ''; };
	$scope.check_human_resources_13_6_1_C = function(){ $scope.human_resources_13_6_1_C = ''; $scope.human_resources_13_6_1_C_a = false; $scope.human_resources_13_6_1_C_b = false; };
	$scope.check_human_resources_13_6_1_C_cm = function(){ $scope.human_resources_13_6_1_C_cm = ''; };
	$scope.check_human_resources_13_6_1_D = function(){ $scope.human_resources_13_6_1_D = ''; $scope.human_resources_13_6_1_D_a = false; $scope.human_resources_13_6_1_D_b = false; $scope.human_resources_13_6_1_D_c = false; };
	$scope.check_human_resources_13_6_1_D_cm = function(){ $scope.human_resources_13_6_1_D_cm = ''; };
	$scope.check_human_resources_13_7_1_A = function(){ $scope.human_resources_13_7_1_A = ''; $scope.human_resources_13_7_1_A_a = false; $scope.human_resources_13_7_1_A_b = false; };
	$scope.check_human_resources_13_7_1_A_cm = function(){ $scope.human_resources_13_7_1_A_cm = ''; };
	$scope.check_human_resources_13_7_1_B = function(){ $scope.human_resources_13_7_1_B = ''; $scope.human_resources_13_7_1_B_a = false; $scope.human_resources_13_7_1_B_b = false; };
	$scope.check_human_resources_13_7_1_B_cm = function(){ $scope.human_resources_13_7_1_B_cm = ''; };
	$scope.check_human_resources_13_7_1_C = function(){ $scope.human_resources_13_7_1_C = ''; $scope.human_resources_13_7_1_C_a = false; $scope.human_resources_13_7_1_C_b = false; $scope.human_resources_13_7_1_C_c = false; };
	$scope.check_human_resources_13_7_1_C_cm = function(){ $scope.human_resources_13_7_1_C_cm = ''; };
	$scope.check_human_resources_13_7_1_D = function(){ $scope.human_resources_13_7_1_D = ''; $scope.human_resources_13_7_1_D_a = false; $scope.human_resources_13_7_1_D_b = false; $scope.human_resources_13_7_1_D_c = false; };
	$scope.check_human_resources_13_7_1_D_cm = function(){ $scope.human_resources_13_7_1_D_cm = ''; };
	$scope.check_human_resources_13_7_1_E = function(){ $scope.human_resources_13_7_1_E = ''; $scope.human_resources_13_7_1_E_a = false; $scope.human_resources_13_7_1_E_b = false; $scope.human_resources_13_7_1_E_c = false; };
	$scope.check_human_resources_13_7_1_E_cm = function(){ $scope.human_resources_13_7_1_E_cm = ''; };
	$scope.check_human_resources_13_7_1_F_a = function(){ $scope.human_resources_13_7_1_F_a = ''; $scope.human_resources_13_7_1_F_a = false; };
	$scope.check_human_resources_13_7_1_F_a_cm = function(){ $scope.human_resources_13_7_1_F_a_cm = ''; };
	$scope.check_human_resources_13_7_1_F_b = function(){ $scope.human_resources_13_7_1_F_b = ''; $scope.human_resources_13_7_1_F_b = false; };
	$scope.check_human_resources_13_7_1_F_b_cm = function(){ $scope.human_resources_13_7_1_F_b_cm = ''; };
	$scope.check_human_resources_13_8_1_A = function(){ $scope.human_resources_13_8_1_A = ''; $scope.human_resources_13_8_1_A_a = false; $scope.human_resources_13_8_1_A_b = false; $scope.human_resources_13_8_1_A_c = false; };
	$scope.check_human_resources_13_8_1_A_cm = function(){ $scope.human_resources_13_8_1_A_cm = ''; };
	$scope.check_human_resources_13_8_1_B = function(){ $scope.human_resources_13_8_1_B = ''; $scope.human_resources_13_8_1_B_a = false; $scope.human_resources_13_8_1_B_b = false; $scope.human_resources_13_8_1_B_c = false; };
	$scope.check_human_resources_13_8_1_B_cm = function(){ $scope.human_resources_13_8_1_B_cm = ''; };
	$scope.check_human_resources_13_8_1_C = function(){ $scope.human_resources_13_8_1_C = ''; $scope.human_resources_13_8_1_C_a = false; $scope.human_resources_13_8_1_C_b = false; };
	$scope.check_human_resources_13_8_1_C_cm = function(){ $scope.human_resources_13_8_1_C_cm = ''; };
	$scope.check_general_14_1_1_A = function(){ $scope.general_14_1_1_A = ''; $scope.general_14_1_1_A_a = false; $scope.general_14_1_1_A_b = false; $scope.general_14_1_1_A_c = false; };
	$scope.check_general_14_1_1_A_cm = function(){ $scope.general_14_1_1_A_cm = ''; };
	$scope.check_general_14_2_1_A = function(){ $scope.general_14_2_1_A = ''; $scope.general_14_2_1_A_a = false; $scope.general_14_2_1_A_b = false; $scope.general_14_2_1_A_c = false; };
	$scope.check_general_14_2_1_A_cm = function(){ $scope.general_14_2_1_A_cm = ''; };
	$scope.check_general_14_3_1_A = function(){ $scope.general_14_3_1_A = ''; $scope.general_14_3_1_A_a = false; $scope.general_14_3_1_A_b = false; };
	$scope.check_general_14_3_1_A_cm = function(){ $scope.general_14_3_1_A_cm = ''; };
	$scope.check_general_14_3_1_B_a = function(){ $scope.general_14_3_1_B_a = ''; $scope.general_14_3_1_B_a = false; };
	$scope.check_general_14_3_1_B_a_cm = function(){ $scope.general_14_3_1_B_a_cm = ''; };
	$scope.check_general_14_3_1_B_b = function(){ $scope.general_14_3_1_B_b = ''; $scope.general_14_3_1_B_b = false; };
	$scope.check_general_14_3_1_B_b_cm = function(){ $scope.general_14_3_1_B_b_cm = ''; };
	$scope.check_general_14_3_1_B_c = function(){ $scope.general_14_3_1_B_c = ''; $scope.general_14_3_1_B_c = false; };
	$scope.check_general_14_3_1_B_c_cm = function(){ $scope.general_14_3_1_B_c_cm = ''; };
	$scope.check_general_14_3_1_B_d = function(){ $scope.general_14_3_1_B_d = ''; $scope.general_14_3_1_B_d = false; };
	$scope.check_general_14_3_1_B_d_cm = function(){ $scope.general_14_3_1_B_d_cm = ''; };
	$scope.check_general_14_3_1_B_e = function(){ $scope.general_14_3_1_B_e = ''; $scope.general_14_3_1_B_e = false; };
	$scope.check_general_14_3_1_B_e_cm = function(){ $scope.general_14_3_1_B_e_cm = ''; };
	$scope.check_general_14_3_1_C = function(){ $scope.general_14_3_1_C = ''; $scope.general_14_3_1_C_a = false; $scope.general_14_3_1_C_b = false; };
	$scope.check_general_14_3_1_C_cm = function(){ $scope.general_14_3_1_C_cm = ''; };
	$scope.check_general_14_4_1_A = function(){ $scope.general_14_4_1_A = ''; $scope.general_14_4_1_A_a = false; $scope.general_14_4_1_A_b = false; $scope.general_14_4_1_A_c = false; };
	$scope.check_general_14_4_1_A_cm = function(){ $scope.general_14_4_1_A_cm = ''; };
	$scope.check_general_14_4_1_B = function(){ $scope.general_14_4_1_B = ''; $scope.general_14_4_1_B_a = false; $scope.general_14_4_1_B_b = false; };
	$scope.check_general_14_4_1_B_cm = function(){ $scope.general_14_4_1_B_cm = ''; };
	$scope.check_general_14_5_1_A = function(){ $scope.general_14_5_1_A = ''; $scope.general_14_5_1_A_a = false; $scope.general_14_5_1_A_b = false; };
	$scope.check_general_14_5_1_A_cm = function(){ $scope.general_14_5_1_A_cm = ''; };
	$scope.check_general_14_5_1_B = function(){ $scope.general_14_5_1_B = ''; $scope.general_14_5_1_B_a = false; $scope.general_14_5_1_B_b = false; $scope.general_14_5_1_B_c = false; };
	$scope.check_general_14_5_1_B_cm = function(){ $scope.general_14_5_1_B_cm = ''; };
	$scope.check_general_14_6_1_A = function(){ $scope.general_14_6_1_A = ''; $scope.general_14_6_1_A_a = false; $scope.general_14_6_1_A_b = false; };
	$scope.check_general_14_6_1_A_cm = function(){ $scope.general_14_6_1_A_cm = ''; };
	$scope.check_general_14_6_1_B = function(){ $scope.general_14_6_1_B = ''; $scope.general_14_6_1_B_a = false; $scope.general_14_6_1_B_b = false; $scope.general_14_6_1_B_c = false; };
	$scope.check_general_14_6_1_B_cm = function(){ $scope.general_14_6_1_B_cm = ''; };
	$scope.check_general_14_7_1_A = function(){ $scope.general_14_7_1_A = ''; $scope.general_14_7_1_A_a = false; $scope.general_14_7_1_A_b = false; $scope.general_14_7_1_A_c = false; };
	$scope.check_general_14_7_1_A_cm = function(){ $scope.general_14_7_1_A_cm = ''; };
	$scope.check_general_14_7_1_B = function(){ $scope.general_14_7_1_B = ''; $scope.general_14_7_1_B_a = false; $scope.general_14_7_1_B_b = false; $scope.general_14_7_1_B_c = false; };
	$scope.check_general_14_7_1_B_cm = function(){ $scope.general_14_7_1_B_cm = ''; };
	$scope.check_general_14_7_1_C = function(){ $scope.general_14_7_1_C = ''; $scope.general_14_7_1_C_a = false; $scope.general_14_7_1_C_b = false; $scope.general_14_7_1_C_c = false; };
	$scope.check_general_14_7_1_C_cm = function(){ $scope.general_14_7_1_C_cm = ''; };
	$scope.check_general_14_8_1_A = function(){ $scope.general_14_8_1_A = ''; $scope.general_14_8_1_A_a = false; $scope.general_14_8_1_A_b = false; };
	$scope.check_general_14_8_1_A_cm = function(){ $scope.general_14_8_1_A_cm = ''; };
	$scope.check_general_14_8_1_B = function(){ $scope.general_14_8_1_B = ''; $scope.general_14_8_1_B_a = false; $scope.general_14_8_1_B_b = false; };
	$scope.check_general_14_8_1_B_cm = function(){ $scope.general_14_8_1_B_cm = ''; };
	$scope.check_general_14_8_1_C_a = function(){ $scope.general_14_8_1_C_a = ''; $scope.general_14_8_1_C_a = false; };
	$scope.check_general_14_8_1_C_a_cm = function(){ $scope.general_14_8_1_C_a_cm = ''; };
	$scope.check_general_14_8_1_C_b = function(){ $scope.general_14_8_1_C_b = ''; $scope.general_14_8_1_C_b = false; };
	$scope.check_general_14_8_1_C_b_cm = function(){ $scope.general_14_8_1_C_b_cm = ''; };
	$scope.check_general_14_8_1_C_c = function(){ $scope.general_14_8_1_C_c = ''; $scope.general_14_8_1_C_c = false; };
	$scope.check_general_14_8_1_C_c_cm = function(){ $scope.general_14_8_1_C_c_cm = ''; };
	$scope.check_general_14_8_1_C_d = function(){ $scope.general_14_8_1_C_d = ''; $scope.general_14_8_1_C_d = false; };
	$scope.check_general_14_8_1_C_d_cm = function(){ $scope.general_14_8_1_C_d_cm = ''; };
	$scope.check_general_14_8_1_C_e = function(){ $scope.general_14_8_1_C_e = ''; $scope.general_14_8_1_C_e = false; };
	$scope.check_general_14_8_1_C_e_cm = function(){ $scope.general_14_8_1_C_e_cm = ''; };
	$scope.check_general_14_8_1_D = function(){ $scope.general_14_8_1_D = ''; $scope.general_14_8_1_D_a = false; $scope.general_14_8_1_D_b = false; };
	$scope.check_general_14_8_1_D_cm = function(){ $scope.general_14_8_1_D_cm = ''; };
	$scope.check_general_14_8_1_E = function(){ $scope.general_14_8_1_E = ''; $scope.general_14_8_1_E_a = false; $scope.general_14_8_1_E_b = false; };
	$scope.check_general_14_8_1_E_cm = function(){ $scope.general_14_8_1_E_cm = ''; };
	$scope.check_general_14_8_1_F = function(){ $scope.general_14_8_1_F = ''; $scope.general_14_8_1_F_a = false; $scope.general_14_8_1_F_b = false; $scope.general_14_8_1_F_c = false; };
	$scope.check_general_14_8_1_F_cm = function(){ $scope.general_14_8_1_F_cm = ''; };
	$scope.check_general_14_8_1_G = function(){ $scope.general_14_8_1_G = ''; $scope.general_14_8_1_G_a = false; $scope.general_14_8_1_G_b = false; $scope.general_14_8_1_G_c = false; };
	$scope.check_general_14_8_1_G_cm = function(){ $scope.general_14_8_1_G_cm = ''; };
	$scope.check_general_14_9_1_A = function(){ $scope.general_14_9_1_A = ''; $scope.general_14_9_1_A_a = false; $scope.general_14_9_1_A_b = false; };
	$scope.check_general_14_9_1_A_cm = function(){ $scope.general_14_9_1_A_cm = ''; };
	$scope.check_general_14_9_1_B = function(){ $scope.general_14_9_1_B = ''; $scope.general_14_9_1_B_a = false; $scope.general_14_9_1_B_b = false; };
	$scope.check_general_14_9_1_B_cm = function(){ $scope.general_14_9_1_B_cm = ''; };

		
	

	
	<!---------- End Interchanging Selected Marks Custom Marks ------------>
	
	$scope.open_assessment_sheet_for_motel = function(){
		var modal_popup = angular.element('#assessment_sheet_for_motel_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessment_sheet_for_motel = function(){
		var modal_popup = angular.element('#assessment_sheet_for_motel_panel');
		modal_popup.modal('hide');
	};
	$scope.check_for_assessment_form_changes_motel = function(){
		if($scope.show_asteric_motel == '*'){ $scope.assessment_motel_form_changes = true; $scope.open_save_changes(); }else{ $scope.close_assessment_sheet_for_motel(); };
	};
	$scope.save_and_exit_motel= function(){
	$scope.from_save_motel = 'save_and_exit';
	$scope.submit_assessment_motel_form();
	};
	$scope.close_without_save_motel= function(){
	$scope.close_assessment_sheet_for_motel();
	$scope.close_save_changes();
	};
	
	$scope.submit_assessment_motel_form = function(){
		if($scope.from_save_motel == 'save_and_exit') { $scope.close_save_changes(); }else{ $scope.from_save_motel = ''; };		
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.submitted_unsuccessfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.show_funika_kurasa_with_status();
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert_assessment_motel.php",
			data:{					
				'facility_id':$scope.facility_id,
				'assessor_category':$scope.assessor_category,
				'assessment_id':$scope.assessment_id,
				'assessment_score_motel':$scope.assessment_score_motel,
				//LOCATION 1.0
				//1.1
				//1.1.1
				'location_1_0_1_text':$scope.location_1_0_1_text,
				'location_1_0_1_A':$scope.location_1_0_1_A, 
				'location_1_0_1_A_cm':$scope.location_1_0_1_A_cm,
				'location_1_0_1_B':$scope.location_1_0_1_B, 
				'location_1_0_1_B_cm':$scope.location_1_0_1_B_cm,
				'location_1_1_1_text':$scope.location_1_1_1_text,
				'location_1_1_1_A':$scope.location_1_1_1_A, 
				'location_1_1_1_A_cm':$scope.location_1_1_1_A_cm,
				'location_1_1_2_text':$scope.location_1_1_2_text,
				'location_1_1_2_A':$scope.location_1_1_2_A, 
				'location_1_1_2_A_cm':$scope.location_1_1_2_A_cm,
				'location_1_1_3_text':$scope.location_1_1_3_text,
				'location_1_1_3_A':$scope.location_1_1_3_A, 
				'location_1_1_3_A_cm':$scope.location_1_1_3_A_cm,
				'location_1_1_3_B_a':$scope.location_1_1_3_B_a, 
				'location_1_1_3_B_a_cm':$scope.location_1_1_3_B_a_cm,
				'location_1_1_3_B_b':$scope.location_1_1_3_B_b, 
				'location_1_1_3_B_b_cm':$scope.location_1_1_3_B_b_cm,
				'location_1_1_3_B_c':$scope.location_1_1_3_B_c, 
				'location_1_1_3_B_c_cm':$scope.location_1_1_3_B_c_cm,
				'location_1_1_3_B_d':$scope.location_1_1_3_B_d, 
				'location_1_1_3_B_d_cm':$scope.location_1_1_3_B_d_cm,
				'location_1_1_4_text':$scope.location_1_1_4_text,
				'location_1_1_4_A':$scope.location_1_1_4_A, 
				'location_1_1_4_A_cm':$scope.location_1_1_4_A_cm,
				'location_1_1_4_B':$scope.location_1_1_4_B, 
				'location_1_1_4_B_cm':$scope.location_1_1_4_B_cm,
				'location_1_1_4_C':$scope.location_1_1_4_C, 
				'location_1_1_4_C_cm':$scope.location_1_1_4_C_cm,
				'location_1_1_5_text':$scope.location_1_1_5_text,
				'location_1_1_5_A':$scope.location_1_1_5_A, 
				'location_1_1_5_A_cm':$scope.location_1_1_5_A_cm,
				'location_1_1_5_B':$scope.location_1_1_5_B, 
				'location_1_1_5_B_cm':$scope.location_1_1_5_B_cm,
				'location_1_1_5_C':$scope.location_1_1_5_C, 
				'location_1_1_5_C_cm':$scope.location_1_1_5_C_cm,
				'location_1_1_5_D':$scope.location_1_1_5_D, 
				'location_1_1_5_D_cm':$scope.location_1_1_5_D_cm,
				'location_1_2_1_text':$scope.location_1_2_1_text,
				'location_1_2_1_A':$scope.location_1_2_1_A, 
				'location_1_2_1_A_cm':$scope.location_1_2_1_A_cm,
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
				'building_2_2_2_G':$scope.building_2_2_2_G, 
				'building_2_2_2_G_cm':$scope.building_2_2_2_G_cm,
				'building_2_3_1_text':$scope.building_2_3_1_text,
				'building_2_3_1_A':$scope.building_2_3_1_A, 
				'building_2_3_1_A_cm':$scope.building_2_3_1_A_cm,
				'building_2_4_1_text':$scope.building_2_4_1_text,
				'building_2_4_1_A':$scope.building_2_4_1_A, 
				'building_2_4_1_A_cm':$scope.building_2_4_1_A_cm,
				'building_2_4_1_B':$scope.building_2_4_1_B, 
				'building_2_4_1_B_cm':$scope.building_2_4_1_B_cm,
				'building_2_4_1_C':$scope.building_2_4_1_C, 
				'building_2_4_1_C_cm':$scope.building_2_4_1_C_cm,
				'building_2_4_1_D':$scope.building_2_4_1_D, 
				'building_2_4_1_D_cm':$scope.building_2_4_1_D_cm,
				'building_2_4_1_E':$scope.building_2_4_1_E, 
				'building_2_4_1_E_cm':$scope.building_2_4_1_E_cm,
				'building_2_4_1_F':$scope.building_2_4_1_F, 
				'building_2_4_1_F_cm':$scope.building_2_4_1_F_cm,
				'building_2_4_1_G':$scope.building_2_4_1_G, 
				'building_2_4_1_G_cm':$scope.building_2_4_1_G_cm,
				'building_2_4_1_H':$scope.building_2_4_1_H, 
				'building_2_4_1_H_cm':$scope.building_2_4_1_H_cm,
				'building_2_4_1_I':$scope.building_2_4_1_I, 
				'building_2_4_1_I_cm':$scope.building_2_4_1_I_cm,
				'building_2_4_1_J':$scope.building_2_4_1_J, 
				'building_2_4_1_J_cm':$scope.building_2_4_1_J_cm,
				'front_office_3_1_1_text':$scope.front_office_3_1_1_text,
				'front_office_3_1_1_A':$scope.front_office_3_1_1_A, 
				'front_office_3_1_1_A_cm':$scope.front_office_3_1_1_A_cm,
				'front_office_3_1_1_B':$scope.front_office_3_1_1_B, 
				'front_office_3_1_1_B_cm':$scope.front_office_3_1_1_B_cm,
				'front_office_3_1_1_C':$scope.front_office_3_1_1_C, 
				'front_office_3_1_1_C_cm':$scope.front_office_3_1_1_C_cm,
				'front_office_3_1_1_D':$scope.front_office_3_1_1_D, 
				'front_office_3_1_1_D_cm':$scope.front_office_3_1_1_D_cm,
				'front_office_3_1_2_text':$scope.front_office_3_1_2_text,
				'front_office_3_1_2_A':$scope.front_office_3_1_2_A, 
				'front_office_3_1_2_A_cm':$scope.front_office_3_1_2_A_cm,
				'front_office_3_1_2_B':$scope.front_office_3_1_2_B, 
				'front_office_3_1_2_B_cm':$scope.front_office_3_1_2_B_cm,
				'front_office_3_1_2_C':$scope.front_office_3_1_2_C, 
				'front_office_3_1_2_C_cm':$scope.front_office_3_1_2_C_cm,
				'front_office_3_1_2_D':$scope.front_office_3_1_2_D, 
				'front_office_3_1_2_D_cm':$scope.front_office_3_1_2_D_cm,
				'front_office_3_1_2_E':$scope.front_office_3_1_2_E, 
				'front_office_3_1_2_E_cm':$scope.front_office_3_1_2_E_cm,
				'front_office_3_1_2_F':$scope.front_office_3_1_2_F, 
				'front_office_3_1_2_F_cm':$scope.front_office_3_1_2_F_cm,
				'front_office_3_2_1_text':$scope.front_office_3_2_1_text,
				'front_office_3_2_1_A':$scope.front_office_3_2_1_A, 
				'front_office_3_2_1_A_cm':$scope.front_office_3_2_1_A_cm,
				'front_office_3_2_1_B_a':$scope.front_office_3_2_1_B_a, 
				'front_office_3_2_1_B_a_cm':$scope.front_office_3_2_1_B_a_cm,
				'front_office_3_2_1_B_b':$scope.front_office_3_2_1_B_b, 
				'front_office_3_2_1_B_b_cm':$scope.front_office_3_2_1_B_b_cm,
				'front_office_3_2_1_B_c':$scope.front_office_3_2_1_B_c, 
				'front_office_3_2_1_B_c_cm':$scope.front_office_3_2_1_B_c_cm,
				'front_office_3_2_1_C_a':$scope.front_office_3_2_1_C_a, 
				'front_office_3_2_1_C_a_cm':$scope.front_office_3_2_1_C_a_cm,
				'front_office_3_2_1_C_b':$scope.front_office_3_2_1_C_b, 
				'front_office_3_2_1_C_b_cm':$scope.front_office_3_2_1_C_b_cm,
				'front_office_3_2_1_C_c':$scope.front_office_3_2_1_C_c, 
				'front_office_3_2_1_C_c_cm':$scope.front_office_3_2_1_C_c_cm,
				'front_office_3_2_1_D_a':$scope.front_office_3_2_1_D_a, 
				'front_office_3_2_1_D_a_cm':$scope.front_office_3_2_1_D_a_cm,
				'front_office_3_2_1_D_b':$scope.front_office_3_2_1_D_b, 
				'front_office_3_2_1_D_b_cm':$scope.front_office_3_2_1_D_b_cm,
				'front_office_3_2_1_D_c':$scope.front_office_3_2_1_D_c, 
				'front_office_3_2_1_D_c_cm':$scope.front_office_3_2_1_D_c_cm,
				'front_office_3_2_1_D_d':$scope.front_office_3_2_1_D_d, 
				'front_office_3_2_1_D_d_cm':$scope.front_office_3_2_1_D_d_cm,
				'front_office_3_3_1_text':$scope.front_office_3_3_1_text,
				'front_office_3_3_1_A':$scope.front_office_3_3_1_A, 
				'front_office_3_3_1_A_cm':$scope.front_office_3_3_1_A_cm,
				'front_office_3_3_1_B':$scope.front_office_3_3_1_B, 
				'front_office_3_3_1_B_cm':$scope.front_office_3_3_1_B_cm,
				'front_office_3_4_1_text':$scope.front_office_3_4_1_text,
				'front_office_3_4_1_A_a':$scope.front_office_3_4_1_A_a, 
				'front_office_3_4_1_A_a_cm':$scope.front_office_3_4_1_A_a_cm,
				'front_office_3_4_1_A_b':$scope.front_office_3_4_1_A_b, 
				'front_office_3_4_1_A_b_cm':$scope.front_office_3_4_1_A_b_cm,
				'front_office_3_4_1_A_c':$scope.front_office_3_4_1_A_c, 
				'front_office_3_4_1_A_c_cm':$scope.front_office_3_4_1_A_c_cm,
				'front_office_3_4_1_A_d':$scope.front_office_3_4_1_A_d, 
				'front_office_3_4_1_A_d_cm':$scope.front_office_3_4_1_A_d_cm,
				'front_office_3_5_1_text':$scope.front_office_3_5_1_text,
				'front_office_3_5_1_A':$scope.front_office_3_5_1_A, 
				'front_office_3_5_1_A_cm':$scope.front_office_3_5_1_A_cm,
				'front_office_3_5_1_B':$scope.front_office_3_5_1_B, 
				'front_office_3_5_1_B_cm':$scope.front_office_3_5_1_B_cm,
				'front_office_3_5_1_C':$scope.front_office_3_5_1_C, 
				'front_office_3_5_1_C_cm':$scope.front_office_3_5_1_C_cm,
				'front_office_3_6_1_text':$scope.front_office_3_6_1_text,
				'front_office_3_6_1_A':$scope.front_office_3_6_1_A, 
				'front_office_3_6_1_A_cm':$scope.front_office_3_6_1_A_cm,
				'front_office_3_6_1_B':$scope.front_office_3_6_1_B, 
				'front_office_3_6_1_B_cm':$scope.front_office_3_6_1_B_cm,
				'front_office_3_7_1_text':$scope.front_office_3_7_1_text,
				'front_office_3_7_1_A_a':$scope.front_office_3_7_1_A_a, 
				'front_office_3_7_1_A_a_cm':$scope.front_office_3_7_1_A_a_cm,
				'front_office_3_7_1_A_b':$scope.front_office_3_7_1_A_b, 
				'front_office_3_7_1_A_b_cm':$scope.front_office_3_7_1_A_b_cm,
				'front_office_3_7_1_A_c':$scope.front_office_3_7_1_A_c, 
				'front_office_3_7_1_A_c_cm':$scope.front_office_3_7_1_A_c_cm,
				'front_office_3_7_1_B_a':$scope.front_office_3_7_1_B_a, 
				'front_office_3_7_1_B_a_cm':$scope.front_office_3_7_1_B_a_cm,
				'front_office_3_7_1_B_b':$scope.front_office_3_7_1_B_b, 
				'front_office_3_7_1_B_b_cm':$scope.front_office_3_7_1_B_b_cm,
				'front_office_3_7_1_B_c':$scope.front_office_3_7_1_B_c, 
				'front_office_3_7_1_B_c_cm':$scope.front_office_3_7_1_B_c_cm,
				'front_office_3_8_1_text':$scope.front_office_3_8_1_text,
				'front_office_3_8_1_A':$scope.front_office_3_8_1_A, 
				'front_office_3_8_1_A_cm':$scope.front_office_3_8_1_A_cm,
				'front_office_3_8_1_B':$scope.front_office_3_8_1_B, 
				'front_office_3_8_1_B_cm':$scope.front_office_3_8_1_B_cm,
				'front_office_3_8_1_C':$scope.front_office_3_8_1_C, 
				'front_office_3_8_1_C_cm':$scope.front_office_3_8_1_C_cm,
				'front_office_3_8_1_D':$scope.front_office_3_8_1_D, 
				'front_office_3_8_1_D_cm':$scope.front_office_3_8_1_D_cm,
				'front_office_3_8_1_E':$scope.front_office_3_8_1_E, 
				'front_office_3_8_1_E_cm':$scope.front_office_3_8_1_E_cm,
				'lobby_lounge_other_public_areas_4_0_1_text':$scope.lobby_lounge_other_public_areas_4_0_1_text,
				'lobby_lounge_other_public_areas_4_0_1_A':$scope.lobby_lounge_other_public_areas_4_0_1_A, 
				'lobby_lounge_other_public_areas_4_0_1_A_cm':$scope.lobby_lounge_other_public_areas_4_0_1_A_cm,
				'lobby_lounge_other_public_areas_4_0_1_B':$scope.lobby_lounge_other_public_areas_4_0_1_B, 
				'lobby_lounge_other_public_areas_4_0_1_B_cm':$scope.lobby_lounge_other_public_areas_4_0_1_B_cm,
				'lobby_lounge_other_public_areas_4_0_1_C':$scope.lobby_lounge_other_public_areas_4_0_1_C, 
				'lobby_lounge_other_public_areas_4_0_1_C_cm':$scope.lobby_lounge_other_public_areas_4_0_1_C_cm,
				'lobby_lounge_other_public_areas_4_0_1_D':$scope.lobby_lounge_other_public_areas_4_0_1_D, 
				'lobby_lounge_other_public_areas_4_0_1_D_cm':$scope.lobby_lounge_other_public_areas_4_0_1_D_cm,
				'lobby_lounge_other_public_areas_4_0_1_E':$scope.lobby_lounge_other_public_areas_4_0_1_E, 
				'lobby_lounge_other_public_areas_4_0_1_E_cm':$scope.lobby_lounge_other_public_areas_4_0_1_E_cm,
				'lobby_lounge_other_public_areas_4_0_1_F':$scope.lobby_lounge_other_public_areas_4_0_1_F, 
				'lobby_lounge_other_public_areas_4_0_1_F_cm':$scope.lobby_lounge_other_public_areas_4_0_1_F_cm,
				'lobby_lounge_other_public_areas_4_1_1_text':$scope.lobby_lounge_other_public_areas_4_1_1_text,
				'lobby_lounge_other_public_areas_4_1_1_A':$scope.lobby_lounge_other_public_areas_4_1_1_A, 
				'lobby_lounge_other_public_areas_4_1_1_A_cm':$scope.lobby_lounge_other_public_areas_4_1_1_A_cm,
				'lobby_lounge_other_public_areas_4_1_1_B_a':$scope.lobby_lounge_other_public_areas_4_1_1_B_a, 
				'lobby_lounge_other_public_areas_4_1_1_B_a_cm':$scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm,
				'lobby_lounge_other_public_areas_4_1_1_B_b':$scope.lobby_lounge_other_public_areas_4_1_1_B_b, 
				'lobby_lounge_other_public_areas_4_1_1_B_b_cm':$scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm,
				'lobby_lounge_other_public_areas_4_1_1_B_c':$scope.lobby_lounge_other_public_areas_4_1_1_B_c, 
				'lobby_lounge_other_public_areas_4_1_1_B_c_cm':$scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm,
				'lobby_lounge_other_public_areas_4_1_1_B_d':$scope.lobby_lounge_other_public_areas_4_1_1_B_d, 
				'lobby_lounge_other_public_areas_4_1_1_B_d_cm':$scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm,
				'lobby_lounge_other_public_areas_4_1_1_C':$scope.lobby_lounge_other_public_areas_4_1_1_C, 
				'lobby_lounge_other_public_areas_4_1_1_C_cm':$scope.lobby_lounge_other_public_areas_4_1_1_C_cm,
				'lobby_lounge_other_public_areas_4_2_1_text':$scope.lobby_lounge_other_public_areas_4_2_1_text,
				'lobby_lounge_other_public_areas_4_2_1_A':$scope.lobby_lounge_other_public_areas_4_2_1_A, 
				'lobby_lounge_other_public_areas_4_2_1_A_cm':$scope.lobby_lounge_other_public_areas_4_2_1_A_cm,
				'lobby_lounge_other_public_areas_4_2_1_B':$scope.lobby_lounge_other_public_areas_4_2_1_B, 
				'lobby_lounge_other_public_areas_4_2_1_B_cm':$scope.lobby_lounge_other_public_areas_4_2_1_B_cm,
				'lobby_lounge_other_public_areas_4_2_1_C':$scope.lobby_lounge_other_public_areas_4_2_1_C, 
				'lobby_lounge_other_public_areas_4_2_1_C_cm':$scope.lobby_lounge_other_public_areas_4_2_1_C_cm,
				'lobby_lounge_other_public_areas_4_2_1_D_a':$scope.lobby_lounge_other_public_areas_4_2_1_D_a, 
				'lobby_lounge_other_public_areas_4_2_1_D_a_cm':$scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm,
				'lobby_lounge_other_public_areas_4_2_1_D_b':$scope.lobby_lounge_other_public_areas_4_2_1_D_b, 
				'lobby_lounge_other_public_areas_4_2_1_D_b_cm':$scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm,
				'lobby_lounge_other_public_areas_4_2_1_E':$scope.lobby_lounge_other_public_areas_4_2_1_E, 
				'lobby_lounge_other_public_areas_4_2_1_E_cm':$scope.lobby_lounge_other_public_areas_4_2_1_E_cm,
				'lobby_lounge_other_public_areas_4_2_1_F':$scope.lobby_lounge_other_public_areas_4_2_1_F, 
				'lobby_lounge_other_public_areas_4_2_1_F_cm':$scope.lobby_lounge_other_public_areas_4_2_1_F_cm,
				'lobby_lounge_other_public_areas_4_2_1_G':$scope.lobby_lounge_other_public_areas_4_2_1_G, 
				'lobby_lounge_other_public_areas_4_2_1_G_cm':$scope.lobby_lounge_other_public_areas_4_2_1_G_cm,
				'lobby_lounge_other_public_areas_4_3_1_text':$scope.lobby_lounge_other_public_areas_4_3_1_text,
				'lobby_lounge_other_public_areas_4_3_1_A':$scope.lobby_lounge_other_public_areas_4_3_1_A, 
				'lobby_lounge_other_public_areas_4_3_1_A_cm':$scope.lobby_lounge_other_public_areas_4_3_1_A_cm,
				'lobby_lounge_other_public_areas_4_3_1_B':$scope.lobby_lounge_other_public_areas_4_3_1_B, 
				'lobby_lounge_other_public_areas_4_3_1_B_cm':$scope.lobby_lounge_other_public_areas_4_3_1_B_cm,
				'lobby_lounge_other_public_areas_4_4_1_text':$scope.lobby_lounge_other_public_areas_4_4_1_text,
				'lobby_lounge_other_public_areas_4_4_1_A':$scope.lobby_lounge_other_public_areas_4_4_1_A, 
				'lobby_lounge_other_public_areas_4_4_1_A_cm':$scope.lobby_lounge_other_public_areas_4_4_1_A_cm,
				'lobby_lounge_other_public_areas_4_4_1_B':$scope.lobby_lounge_other_public_areas_4_4_1_B, 
				'lobby_lounge_other_public_areas_4_4_1_B_cm':$scope.lobby_lounge_other_public_areas_4_4_1_B_cm,
				'lobby_lounge_other_public_areas_4_4_1_C':$scope.lobby_lounge_other_public_areas_4_4_1_C, 
				'lobby_lounge_other_public_areas_4_4_1_C_cm':$scope.lobby_lounge_other_public_areas_4_4_1_C_cm,
				'lobby_lounge_other_public_areas_4_4_1_D':$scope.lobby_lounge_other_public_areas_4_4_1_D, 
				'lobby_lounge_other_public_areas_4_4_1_D_cm':$scope.lobby_lounge_other_public_areas_4_4_1_D_cm,
				'lobby_lounge_other_public_areas_4_4_1_E':$scope.lobby_lounge_other_public_areas_4_4_1_E, 
				'lobby_lounge_other_public_areas_4_4_1_E_cm':$scope.lobby_lounge_other_public_areas_4_4_1_E_cm,
				'lobby_lounge_other_public_areas_4_4_1_F':$scope.lobby_lounge_other_public_areas_4_4_1_F, 
				'lobby_lounge_other_public_areas_4_4_1_F_cm':$scope.lobby_lounge_other_public_areas_4_4_1_F_cm,
				'lobby_lounge_other_public_areas_4_5_1_text':$scope.lobby_lounge_other_public_areas_4_5_1_text,
				'lobby_lounge_other_public_areas_4_5_1_A':$scope.lobby_lounge_other_public_areas_4_5_1_A, 
				'lobby_lounge_other_public_areas_4_5_1_A_cm':$scope.lobby_lounge_other_public_areas_4_5_1_A_cm,
				'lobby_lounge_other_public_areas_4_5_1_B':$scope.lobby_lounge_other_public_areas_4_5_1_B, 
				'lobby_lounge_other_public_areas_4_5_1_B_cm':$scope.lobby_lounge_other_public_areas_4_5_1_B_cm,
				'lobby_lounge_other_public_areas_4_5_1_C':$scope.lobby_lounge_other_public_areas_4_5_1_C, 
				'lobby_lounge_other_public_areas_4_5_1_C_cm':$scope.lobby_lounge_other_public_areas_4_5_1_C_cm,
				'lobby_lounge_other_public_areas_4_6_1_text':$scope.lobby_lounge_other_public_areas_4_6_1_text,
				'lobby_lounge_other_public_areas_4_6_1_A':$scope.lobby_lounge_other_public_areas_4_6_1_A, 
				'lobby_lounge_other_public_areas_4_6_1_A_cm':$scope.lobby_lounge_other_public_areas_4_6_1_A_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_a':$scope.lobby_lounge_other_public_areas_4_6_1_B_a, 
				'lobby_lounge_other_public_areas_4_6_1_B_a_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_a_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_b':$scope.lobby_lounge_other_public_areas_4_6_1_B_b, 
				'lobby_lounge_other_public_areas_4_6_1_B_b_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_c':$scope.lobby_lounge_other_public_areas_4_6_1_B_c, 
				'lobby_lounge_other_public_areas_4_6_1_B_c_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_d':$scope.lobby_lounge_other_public_areas_4_6_1_B_d, 
				'lobby_lounge_other_public_areas_4_6_1_B_d_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_e':$scope.lobby_lounge_other_public_areas_4_6_1_B_e, 
				'lobby_lounge_other_public_areas_4_6_1_B_e_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm,
				'lobby_lounge_other_public_areas_4_6_1_B_f':$scope.lobby_lounge_other_public_areas_4_6_1_B_f, 
				'lobby_lounge_other_public_areas_4_6_1_B_f_cm':$scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm,
				'lobby_lounge_other_public_areas_4_6_1_C':$scope.lobby_lounge_other_public_areas_4_6_1_C, 
				'lobby_lounge_other_public_areas_4_6_1_C_cm':$scope.lobby_lounge_other_public_areas_4_6_1_C_cm,
				'lobby_lounge_other_public_areas_4_7_1_text':$scope.lobby_lounge_other_public_areas_4_7_1_text,
				'lobby_lounge_other_public_areas_4_7_1_A':$scope.lobby_lounge_other_public_areas_4_7_1_A, 
				'lobby_lounge_other_public_areas_4_7_1_A_cm':$scope.lobby_lounge_other_public_areas_4_7_1_A_cm,
				'lobby_lounge_other_public_areas_4_7_1_B_a':$scope.lobby_lounge_other_public_areas_4_7_1_B_a, 
				'lobby_lounge_other_public_areas_4_7_1_B_a_cm':$scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm,
				'lobby_lounge_other_public_areas_4_7_1_B_b':$scope.lobby_lounge_other_public_areas_4_7_1_B_b, 
				'lobby_lounge_other_public_areas_4_7_1_B_b_cm':$scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm,
				'lobby_lounge_other_public_areas_4_7_1_B_c':$scope.lobby_lounge_other_public_areas_4_7_1_B_c, 
				'lobby_lounge_other_public_areas_4_7_1_B_c_cm':$scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm,
				'lobby_lounge_other_public_areas_4_7_1_C_a':$scope.lobby_lounge_other_public_areas_4_7_1_C_a, 
				'lobby_lounge_other_public_areas_4_7_1_C_a_cm':$scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm,
				'lobby_lounge_other_public_areas_4_7_1_C_b':$scope.lobby_lounge_other_public_areas_4_7_1_C_b, 
				'lobby_lounge_other_public_areas_4_7_1_C_b_cm':$scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm,
				'lobby_lounge_other_public_areas_4_7_1_C_c':$scope.lobby_lounge_other_public_areas_4_7_1_C_c, 
				'lobby_lounge_other_public_areas_4_7_1_C_c_cm':$scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm,
				'lobby_lounge_other_public_areas_4_7_1_D_a':$scope.lobby_lounge_other_public_areas_4_7_1_D_a, 
				'lobby_lounge_other_public_areas_4_7_1_D_a_cm':$scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm,
				'lobby_lounge_other_public_areas_4_7_1_D_b':$scope.lobby_lounge_other_public_areas_4_7_1_D_b, 
				'lobby_lounge_other_public_areas_4_7_1_D_b_cm':$scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm,
				'lobby_lounge_other_public_areas_4_7_1_D_c':$scope.lobby_lounge_other_public_areas_4_7_1_D_c, 
				'lobby_lounge_other_public_areas_4_7_1_D_c_cm':$scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm,
				'lobby_lounge_other_public_areas_4_7_1_D_d':$scope.lobby_lounge_other_public_areas_4_7_1_D_d, 
				'lobby_lounge_other_public_areas_4_7_1_D_d_cm':$scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm,
				'lobby_lounge_other_public_areas_4_8_1_text':$scope.lobby_lounge_other_public_areas_4_8_1_text,
				'lobby_lounge_other_public_areas_4_8_1_A':$scope.lobby_lounge_other_public_areas_4_8_1_A, 
				'lobby_lounge_other_public_areas_4_8_1_A_cm':$scope.lobby_lounge_other_public_areas_4_8_1_A_cm,
				'lobby_lounge_other_public_areas_4_8_1_B':$scope.lobby_lounge_other_public_areas_4_8_1_B, 
				'lobby_lounge_other_public_areas_4_8_1_B_cm':$scope.lobby_lounge_other_public_areas_4_8_1_B_cm,
				'lobby_lounge_other_public_areas_4_8_1_C':$scope.lobby_lounge_other_public_areas_4_8_1_C, 
				'lobby_lounge_other_public_areas_4_8_1_C_cm':$scope.lobby_lounge_other_public_areas_4_8_1_C_cm,
				'lobby_lounge_other_public_areas_4_8_1_D':$scope.lobby_lounge_other_public_areas_4_8_1_D, 
				'lobby_lounge_other_public_areas_4_8_1_D_cm':$scope.lobby_lounge_other_public_areas_4_8_1_D_cm,
				'lobby_lounge_other_public_areas_4_9_1_text':$scope.lobby_lounge_other_public_areas_4_9_1_text,
				'lobby_lounge_other_public_areas_4_9_1_A':$scope.lobby_lounge_other_public_areas_4_9_1_A, 
				'lobby_lounge_other_public_areas_4_9_1_A_cm':$scope.lobby_lounge_other_public_areas_4_9_1_A_cm,
				'restaurants_5_1_1_text':$scope.restaurants_5_1_1_text,
				'restaurants_5_1_1_A':$scope.restaurants_5_1_1_A, 
				'restaurants_5_1_1_A_cm':$scope.restaurants_5_1_1_A_cm,
				'restaurants_5_1_1_B':$scope.restaurants_5_1_1_B, 
				'restaurants_5_1_1_B_cm':$scope.restaurants_5_1_1_B_cm,
				'restaurants_5_1_1_C':$scope.restaurants_5_1_1_C, 
				'restaurants_5_1_1_C_cm':$scope.restaurants_5_1_1_C_cm,
				'restaurants_5_2_1_text':$scope.restaurants_5_2_1_text,
				'restaurants_5_2_1_A':$scope.restaurants_5_2_1_A, 
				'restaurants_5_2_1_A_cm':$scope.restaurants_5_2_1_A_cm,
				'restaurants_5_2_1_B':$scope.restaurants_5_2_1_B, 
				'restaurants_5_2_1_B_cm':$scope.restaurants_5_2_1_B_cm,
				'restaurants_5_2_1_C':$scope.restaurants_5_2_1_C, 
				'restaurants_5_2_1_C_cm':$scope.restaurants_5_2_1_C_cm,
				'restaurants_5_2_1_D':$scope.restaurants_5_2_1_D, 
				'restaurants_5_2_1_D_cm':$scope.restaurants_5_2_1_D_cm,
				'restaurants_5_2_1_E':$scope.restaurants_5_2_1_E, 
				'restaurants_5_2_1_E_cm':$scope.restaurants_5_2_1_E_cm,
				'restaurants_5_2_1_F':$scope.restaurants_5_2_1_F, 
				'restaurants_5_2_1_F_cm':$scope.restaurants_5_2_1_F_cm,
				'restaurants_5_2_1_G':$scope.restaurants_5_2_1_G, 
				'restaurants_5_2_1_G_cm':$scope.restaurants_5_2_1_G_cm,
				'restaurants_5_2_1_H':$scope.restaurants_5_2_1_H, 
				'restaurants_5_2_1_H_cm':$scope.restaurants_5_2_1_H_cm,
				'restaurants_5_3_1_text':$scope.restaurants_5_3_1_text,
				'restaurants_5_3_1_A':$scope.restaurants_5_3_1_A, 
				'restaurants_5_3_1_A_cm':$scope.restaurants_5_3_1_A_cm,
				'restaurants_5_3_1_B':$scope.restaurants_5_3_1_B, 
				'restaurants_5_3_1_B_cm':$scope.restaurants_5_3_1_B_cm,
				'restaurants_5_3_1_C':$scope.restaurants_5_3_1_C, 
				'restaurants_5_3_1_C_cm':$scope.restaurants_5_3_1_C_cm,
				'restaurants_5_4_1_text':$scope.restaurants_5_4_1_text,
				'restaurants_5_4_1_A':$scope.restaurants_5_4_1_A, 
				'restaurants_5_4_1_A_cm':$scope.restaurants_5_4_1_A_cm,
				'restaurants_5_4_1_B':$scope.restaurants_5_4_1_B, 
				'restaurants_5_4_1_B_cm':$scope.restaurants_5_4_1_B_cm,
				'restaurants_5_4_1_C':$scope.restaurants_5_4_1_C, 
				'restaurants_5_4_1_C_cm':$scope.restaurants_5_4_1_C_cm,
				'restaurants_5_4_1_D':$scope.restaurants_5_4_1_D, 
				'restaurants_5_4_1_D_cm':$scope.restaurants_5_4_1_D_cm,
				'restaurants_5_4_1_E':$scope.restaurants_5_4_1_E, 
				'restaurants_5_4_1_E_cm':$scope.restaurants_5_4_1_E_cm,
				'restaurants_5_5_1_text':$scope.restaurants_5_5_1_text,
				'restaurants_5_5_1_A':$scope.restaurants_5_5_1_A, 
				'restaurants_5_5_1_A_cm':$scope.restaurants_5_5_1_A_cm,
				'restaurants_5_5_1_B':$scope.restaurants_5_5_1_B, 
				'restaurants_5_5_1_B_cm':$scope.restaurants_5_5_1_B_cm,
				'restaurants_5_5_1_C':$scope.restaurants_5_5_1_C, 
				'restaurants_5_5_1_C_cm':$scope.restaurants_5_5_1_C_cm,
				'restaurants_5_5_1_D':$scope.restaurants_5_5_1_D, 
				'restaurants_5_5_1_D_cm':$scope.restaurants_5_5_1_D_cm,
				'restaurants_5_5_1_E_a':$scope.restaurants_5_5_1_E_a, 
				'restaurants_5_5_1_E_a_cm':$scope.restaurants_5_5_1_E_a_cm,
				'restaurants_5_5_1_E_b':$scope.restaurants_5_5_1_E_b, 
				'restaurants_5_5_1_E_b_cm':$scope.restaurants_5_5_1_E_b_cm,
				'restaurants_5_5_1_E_c':$scope.restaurants_5_5_1_E_c, 
				'restaurants_5_5_1_E_c_cm':$scope.restaurants_5_5_1_E_c_cm,
				'restaurants_5_5_1_E_d':$scope.restaurants_5_5_1_E_d, 
				'restaurants_5_5_1_E_d_cm':$scope.restaurants_5_5_1_E_d_cm,
				'restaurants_5_5_1_F':$scope.restaurants_5_5_1_F, 
				'restaurants_5_5_1_F_cm':$scope.restaurants_5_5_1_F_cm,
				'restaurants_5_5_1_G_a':$scope.restaurants_5_5_1_G_a, 
				'restaurants_5_5_1_G_a_cm':$scope.restaurants_5_5_1_G_a_cm,
				'restaurants_5_5_1_G_b':$scope.restaurants_5_5_1_G_b, 
				'restaurants_5_5_1_G_b_cm':$scope.restaurants_5_5_1_G_b_cm,
				'restaurants_5_5_1_G_c':$scope.restaurants_5_5_1_G_c, 
				'restaurants_5_5_1_G_c_cm':$scope.restaurants_5_5_1_G_c_cm,
				'restaurants_5_5_1_H':$scope.restaurants_5_5_1_H, 
				'restaurants_5_5_1_H_cm':$scope.restaurants_5_5_1_H_cm,
				'restaurants_5_5_1_I':$scope.restaurants_5_5_1_I, 
				'restaurants_5_5_1_I_cm':$scope.restaurants_5_5_1_I_cm,
				'restaurants_5_6_1_text':$scope.restaurants_5_6_1_text,
				'restaurants_5_6_1_A':$scope.restaurants_5_6_1_A, 
				'restaurants_5_6_1_A_cm':$scope.restaurants_5_6_1_A_cm,
				'restaurants_5_6_1_B':$scope.restaurants_5_6_1_B, 
				'restaurants_5_6_1_B_cm':$scope.restaurants_5_6_1_B_cm,
				'restaurants_5_6_1_C':$scope.restaurants_5_6_1_C, 
				'restaurants_5_6_1_C_cm':$scope.restaurants_5_6_1_C_cm,
				'restaurants_5_6_1_D':$scope.restaurants_5_6_1_D, 
				'restaurants_5_6_1_D_cm':$scope.restaurants_5_6_1_D_cm,
				'restaurants_5_7_1_text':$scope.restaurants_5_7_1_text,
				'restaurants_5_7_1_A':$scope.restaurants_5_7_1_A, 
				'restaurants_5_7_1_A_cm':$scope.restaurants_5_7_1_A_cm,
				'restaurants_5_7_1_B':$scope.restaurants_5_7_1_B, 
				'restaurants_5_7_1_B_cm':$scope.restaurants_5_7_1_B_cm,
				'restaurants_5_7_1_C':$scope.restaurants_5_7_1_C, 
				'restaurants_5_7_1_C_cm':$scope.restaurants_5_7_1_C_cm,
				'restaurants_5_8_1_text':$scope.restaurants_5_8_1_text,
				'restaurants_5_8_1_A':$scope.restaurants_5_8_1_A, 
				'restaurants_5_8_1_A_cm':$scope.restaurants_5_8_1_A_cm,
				'restaurants_5_8_1_B':$scope.restaurants_5_8_1_B, 
				'restaurants_5_8_1_B_cm':$scope.restaurants_5_8_1_B_cm,
				'bar_6_1_1_text':$scope.bar_6_1_1_text,
				'bar_6_1_1_A':$scope.bar_6_1_1_A, 
				'bar_6_1_1_A_cm':$scope.bar_6_1_1_A_cm,
				'bar_6_1_1_B_a':$scope.bar_6_1_1_B_a, 
				'bar_6_1_1_B_a_cm':$scope.bar_6_1_1_B_a_cm,
				'bar_6_1_1_B_b':$scope.bar_6_1_1_B_b, 
				'bar_6_1_1_B_b_cm':$scope.bar_6_1_1_B_b_cm,
				'bar_6_1_1_B_c':$scope.bar_6_1_1_B_c, 
				'bar_6_1_1_B_c_cm':$scope.bar_6_1_1_B_c_cm,
				'bar_6_1_1_C':$scope.bar_6_1_1_C, 
				'bar_6_1_1_C_cm':$scope.bar_6_1_1_C_cm,
				'bar_6_1_1_D_a':$scope.bar_6_1_1_D_a, 
				'bar_6_1_1_D_a_cm':$scope.bar_6_1_1_D_a_cm,
				'bar_6_1_1_D_b':$scope.bar_6_1_1_D_b, 
				'bar_6_1_1_D_b_cm':$scope.bar_6_1_1_D_b_cm,
				'bar_6_1_1_D_c':$scope.bar_6_1_1_D_c, 
				'bar_6_1_1_D_c_cm':$scope.bar_6_1_1_D_c_cm,
				'bar_6_1_1_E':$scope.bar_6_1_1_E, 
				'bar_6_1_1_E_cm':$scope.bar_6_1_1_E_cm,
				'bar_6_1_1_F':$scope.bar_6_1_1_F, 
				'bar_6_1_1_F_cm':$scope.bar_6_1_1_F_cm,
				'bar_6_1_1_G':$scope.bar_6_1_1_G, 
				'bar_6_1_1_G_cm':$scope.bar_6_1_1_G_cm,
				'bar_6_2_1_text':$scope.bar_6_2_1_text,
				'bar_6_2_1_A':$scope.bar_6_2_1_A, 
				'bar_6_2_1_A_cm':$scope.bar_6_2_1_A_cm,
				'bar_6_2_1_B':$scope.bar_6_2_1_B, 
				'bar_6_2_1_B_cm':$scope.bar_6_2_1_B_cm,
				'bar_6_2_1_C':$scope.bar_6_2_1_C, 
				'bar_6_2_1_C_cm':$scope.bar_6_2_1_C_cm,
				'bar_6_2_1_D':$scope.bar_6_2_1_D, 
				'bar_6_2_1_D_cm':$scope.bar_6_2_1_D_cm,
				'bar_6_2_1_E':$scope.bar_6_2_1_E, 
				'bar_6_2_1_E_cm':$scope.bar_6_2_1_E_cm,
				'bar_6_2_1_F':$scope.bar_6_2_1_F, 
				'bar_6_2_1_F_cm':$scope.bar_6_2_1_F_cm,
				'bar_6_2_1_G':$scope.bar_6_2_1_G, 
				'bar_6_2_1_G_cm':$scope.bar_6_2_1_G_cm,
				'bar_6_2_1_H':$scope.bar_6_2_1_H, 
				'bar_6_2_1_H_cm':$scope.bar_6_2_1_H_cm,
				'bar_6_2_1_I':$scope.bar_6_2_1_I, 
				'bar_6_2_1_I_cm':$scope.bar_6_2_1_I_cm,
				'bar_6_2_1_J':$scope.bar_6_2_1_J, 
				'bar_6_2_1_J_cm':$scope.bar_6_2_1_J_cm,
				'bar_6_3_1_text':$scope.bar_6_3_1_text,
				'bar_6_3_1_A':$scope.bar_6_3_1_A, 
				'bar_6_3_1_A_cm':$scope.bar_6_3_1_A_cm,
				'bar_6_3_1_B':$scope.bar_6_3_1_B, 
				'bar_6_3_1_B_cm':$scope.bar_6_3_1_B_cm,
				'bar_6_3_1_C':$scope.bar_6_3_1_C, 
				'bar_6_3_1_C_cm':$scope.bar_6_3_1_C_cm,
				'bar_6_3_1_D':$scope.bar_6_3_1_D, 
				'bar_6_3_1_D_cm':$scope.bar_6_3_1_D_cm,
				'bar_6_4_1_text':$scope.bar_6_4_1_text,
				'bar_6_4_1_A':$scope.bar_6_4_1_A, 
				'bar_6_4_1_A_cm':$scope.bar_6_4_1_A_cm,
				'bar_6_4_1_B':$scope.bar_6_4_1_B, 
				'bar_6_4_1_B_cm':$scope.bar_6_4_1_B_cm,
				'bar_6_4_1_C':$scope.bar_6_4_1_C, 
				'bar_6_4_1_C_cm':$scope.bar_6_4_1_C_cm,
				'bar_6_4_1_D':$scope.bar_6_4_1_D, 
				'bar_6_4_1_D_cm':$scope.bar_6_4_1_D_cm,
				'bar_6_4_1_E_a':$scope.bar_6_4_1_E_a, 
				'bar_6_4_1_E_a_cm':$scope.bar_6_4_1_E_a_cm,
				'bar_6_4_1_E_b':$scope.bar_6_4_1_E_b, 
				'bar_6_4_1_E_b_cm':$scope.bar_6_4_1_E_b_cm,
				'bar_6_4_1_E_c':$scope.bar_6_4_1_E_c, 
				'bar_6_4_1_E_c_cm':$scope.bar_6_4_1_E_c_cm,
				'bar_6_4_1_E_d':$scope.bar_6_4_1_E_d, 
				'bar_6_4_1_E_d_cm':$scope.bar_6_4_1_E_d_cm,
				'bar_6_4_1_E_e':$scope.bar_6_4_1_E_e, 
				'bar_6_4_1_E_e_cm':$scope.bar_6_4_1_E_e_cm,
				'bar_6_4_1_E_f':$scope.bar_6_4_1_E_f, 
				'bar_6_4_1_E_f_cm':$scope.bar_6_4_1_E_f_cm,
				'bar_6_4_1_E_g':$scope.bar_6_4_1_E_g, 
				'bar_6_4_1_E_g_cm':$scope.bar_6_4_1_E_g_cm,
				'bar_6_4_1_E_h':$scope.bar_6_4_1_E_h, 
				'bar_6_4_1_E_h_cm':$scope.bar_6_4_1_E_h_cm,
				'bar_6_4_1_F':$scope.bar_6_4_1_F, 
				'bar_6_4_1_F_cm':$scope.bar_6_4_1_F_cm,
				'bar_6_4_1_G':$scope.bar_6_4_1_G, 
				'bar_6_4_1_G_cm':$scope.bar_6_4_1_G_cm,
				'bar_6_4_1_H':$scope.bar_6_4_1_H, 
				'bar_6_4_1_H_cm':$scope.bar_6_4_1_H_cm,
				'bar_6_4_1_I':$scope.bar_6_4_1_I, 
				'bar_6_4_1_I_cm':$scope.bar_6_4_1_I_cm,
				'bar_6_5_1_text':$scope.bar_6_5_1_text,
				'bar_6_5_1_A':$scope.bar_6_5_1_A, 
				'bar_6_5_1_A_cm':$scope.bar_6_5_1_A_cm,
				'bar_6_5_1_B':$scope.bar_6_5_1_B, 
				'bar_6_5_1_B_cm':$scope.bar_6_5_1_B_cm,
				'bar_6_5_1_C':$scope.bar_6_5_1_C, 
				'bar_6_5_1_C_cm':$scope.bar_6_5_1_C_cm,
				'bar_6_6_1_text':$scope.bar_6_6_1_text,
				'bar_6_6_1_A':$scope.bar_6_6_1_A, 
				'bar_6_6_1_A_cm':$scope.bar_6_6_1_A_cm,
				'bar_6_6_1_B':$scope.bar_6_6_1_B, 
				'bar_6_6_1_B_cm':$scope.bar_6_6_1_B_cm,
				'bar_6_6_1_C':$scope.bar_6_6_1_C, 
				'bar_6_6_1_C_cm':$scope.bar_6_6_1_C_cm,
				'bar_6_7_1_text':$scope.bar_6_7_1_text,
				'bar_6_7_1_A':$scope.bar_6_7_1_A, 
				'bar_6_7_1_A_cm':$scope.bar_6_7_1_A_cm,
				'bar_6_7_1_B':$scope.bar_6_7_1_B, 
				'bar_6_7_1_B_cm':$scope.bar_6_7_1_B_cm,
				'bar_6_7_1_C':$scope.bar_6_7_1_C, 
				'bar_6_7_1_C_cm':$scope.bar_6_7_1_C_cm,
				'kitchen_7_1_1_text':$scope.kitchen_7_1_1_text,
				'kitchen_7_1_1_A':$scope.kitchen_7_1_1_A, 
				'kitchen_7_1_1_A_cm':$scope.kitchen_7_1_1_A_cm,
				'kitchen_7_2_1_text':$scope.kitchen_7_2_1_text,
				'kitchen_7_2_1_A':$scope.kitchen_7_2_1_A, 
				'kitchen_7_2_1_A_cm':$scope.kitchen_7_2_1_A_cm,
				'kitchen_7_2_1_B':$scope.kitchen_7_2_1_B, 
				'kitchen_7_2_1_B_cm':$scope.kitchen_7_2_1_B_cm,
				'kitchen_7_2_1_C':$scope.kitchen_7_2_1_C, 
				'kitchen_7_2_1_C_cm':$scope.kitchen_7_2_1_C_cm,
				'kitchen_7_3_1_text':$scope.kitchen_7_3_1_text,
				'kitchen_7_3_1_A':$scope.kitchen_7_3_1_A, 
				'kitchen_7_3_1_A_cm':$scope.kitchen_7_3_1_A_cm,
				'kitchen_7_3_1_B':$scope.kitchen_7_3_1_B, 
				'kitchen_7_3_1_B_cm':$scope.kitchen_7_3_1_B_cm,
				'kitchen_7_3_1_C':$scope.kitchen_7_3_1_C, 
				'kitchen_7_3_1_C_cm':$scope.kitchen_7_3_1_C_cm,
				'kitchen_7_4_1_text':$scope.kitchen_7_4_1_text,
				'kitchen_7_4_1_A':$scope.kitchen_7_4_1_A, 
				'kitchen_7_4_1_A_cm':$scope.kitchen_7_4_1_A_cm,
				'kitchen_7_4_1_B':$scope.kitchen_7_4_1_B, 
				'kitchen_7_4_1_B_cm':$scope.kitchen_7_4_1_B_cm,
				'kitchen_7_4_1_C':$scope.kitchen_7_4_1_C, 
				'kitchen_7_4_1_C_cm':$scope.kitchen_7_4_1_C_cm,
				'kitchen_7_5_1_text':$scope.kitchen_7_5_1_text,
				'kitchen_7_5_1_A':$scope.kitchen_7_5_1_A, 
				'kitchen_7_5_1_A_cm':$scope.kitchen_7_5_1_A_cm,
				'kitchen_7_5_1_B':$scope.kitchen_7_5_1_B, 
				'kitchen_7_5_1_B_cm':$scope.kitchen_7_5_1_B_cm,
				'kitchen_7_5_1_C':$scope.kitchen_7_5_1_C, 
				'kitchen_7_5_1_C_cm':$scope.kitchen_7_5_1_C_cm,
				'kitchen_7_5_1_D':$scope.kitchen_7_5_1_D, 
				'kitchen_7_5_1_D_cm':$scope.kitchen_7_5_1_D_cm,
				'kitchen_7_5_1_E':$scope.kitchen_7_5_1_E, 
				'kitchen_7_5_1_E_cm':$scope.kitchen_7_5_1_E_cm,
				'kitchen_7_5_1_F':$scope.kitchen_7_5_1_F, 
				'kitchen_7_5_1_F_cm':$scope.kitchen_7_5_1_F_cm,
				'kitchen_7_5_1_G':$scope.kitchen_7_5_1_G, 
				'kitchen_7_5_1_G_cm':$scope.kitchen_7_5_1_G_cm,
				'kitchen_7_5_1_H':$scope.kitchen_7_5_1_H, 
				'kitchen_7_5_1_H_cm':$scope.kitchen_7_5_1_H_cm,
				'kitchen_7_5_1_I':$scope.kitchen_7_5_1_I, 
				'kitchen_7_5_1_I_cm':$scope.kitchen_7_5_1_I_cm,
				'kitchen_7_6_1_text':$scope.kitchen_7_6_1_text,
				'kitchen_7_6_1_A':$scope.kitchen_7_6_1_A, 
				'kitchen_7_6_1_A_cm':$scope.kitchen_7_6_1_A_cm,
				'kitchen_7_6_1_B':$scope.kitchen_7_6_1_B, 
				'kitchen_7_6_1_B_cm':$scope.kitchen_7_6_1_B_cm,
				'kitchen_7_6_1_C':$scope.kitchen_7_6_1_C, 
				'kitchen_7_6_1_C_cm':$scope.kitchen_7_6_1_C_cm,
				'kitchen_7_6_1_D':$scope.kitchen_7_6_1_D, 
				'kitchen_7_6_1_D_cm':$scope.kitchen_7_6_1_D_cm,
				'kitchen_7_6_1_E':$scope.kitchen_7_6_1_E, 
				'kitchen_7_6_1_E_cm':$scope.kitchen_7_6_1_E_cm,
				'kitchen_7_6_1_F':$scope.kitchen_7_6_1_F, 
				'kitchen_7_6_1_F_cm':$scope.kitchen_7_6_1_F_cm,
				'kitchen_7_6_1_G':$scope.kitchen_7_6_1_G, 
				'kitchen_7_6_1_G_cm':$scope.kitchen_7_6_1_G_cm,
				'kitchen_7_7_1_text':$scope.kitchen_7_7_1_text,
				'kitchen_7_7_1_A':$scope.kitchen_7_7_1_A, 
				'kitchen_7_7_1_A_cm':$scope.kitchen_7_7_1_A_cm,
				'kitchen_7_7_1_B':$scope.kitchen_7_7_1_B, 
				'kitchen_7_7_1_B_cm':$scope.kitchen_7_7_1_B_cm,
				'kitchen_7_7_1_C':$scope.kitchen_7_7_1_C, 
				'kitchen_7_7_1_C_cm':$scope.kitchen_7_7_1_C_cm,
				'kitchen_7_7_1_D':$scope.kitchen_7_7_1_D, 
				'kitchen_7_7_1_D_cm':$scope.kitchen_7_7_1_D_cm,
				'kitchen_7_7_1_E':$scope.kitchen_7_7_1_E, 
				'kitchen_7_7_1_E_cm':$scope.kitchen_7_7_1_E_cm,
				'kitchen_7_8_1_text':$scope.kitchen_7_8_1_text,
				'kitchen_7_8_1_A':$scope.kitchen_7_8_1_A, 
				'kitchen_7_8_1_A_cm':$scope.kitchen_7_8_1_A_cm,
				'kitchen_7_8_1_B':$scope.kitchen_7_8_1_B, 
				'kitchen_7_8_1_B_cm':$scope.kitchen_7_8_1_B_cm,
				'kitchen_7_8_1_C_a':$scope.kitchen_7_8_1_C_a, 
				'kitchen_7_8_1_C_a_cm':$scope.kitchen_7_8_1_C_a_cm,
				'kitchen_7_8_1_C_b':$scope.kitchen_7_8_1_C_b, 
				'kitchen_7_8_1_C_b_cm':$scope.kitchen_7_8_1_C_b_cm,
				'kitchen_7_8_1_D':$scope.kitchen_7_8_1_D, 
				'kitchen_7_8_1_D_cm':$scope.kitchen_7_8_1_D_cm,
				'kitchen_7_8_1_E':$scope.kitchen_7_8_1_E, 
				'kitchen_7_8_1_E_cm':$scope.kitchen_7_8_1_E_cm,
				'kitchen_7_8_1_F':$scope.kitchen_7_8_1_F, 
				'kitchen_7_8_1_F_cm':$scope.kitchen_7_8_1_F_cm,
				'kitchen_7_8_1_G':$scope.kitchen_7_8_1_G, 
				'kitchen_7_8_1_G_cm':$scope.kitchen_7_8_1_G_cm,
				'kitchen_7_8_1_H':$scope.kitchen_7_8_1_H, 
				'kitchen_7_8_1_H_cm':$scope.kitchen_7_8_1_H_cm,
				'kitchen_7_9_1_text':$scope.kitchen_7_9_1_text,
				'kitchen_7_9_1_A':$scope.kitchen_7_9_1_A, 
				'kitchen_7_9_1_A_cm':$scope.kitchen_7_9_1_A_cm,
				'kitchen_7_9_1_B':$scope.kitchen_7_9_1_B, 
				'kitchen_7_9_1_B_cm':$scope.kitchen_7_9_1_B_cm,
				'kitchen_7_9_1_C':$scope.kitchen_7_9_1_C, 
				'kitchen_7_9_1_C_cm':$scope.kitchen_7_9_1_C_cm,
				'kitchen_7_9_1_D':$scope.kitchen_7_9_1_D, 
				'kitchen_7_9_1_D_cm':$scope.kitchen_7_9_1_D_cm,
				'kitchen_7_9_1_E':$scope.kitchen_7_9_1_E, 
				'kitchen_7_9_1_E_cm':$scope.kitchen_7_9_1_E_cm,
				'kitchen_7_10_1_text':$scope.kitchen_7_10_1_text,
				'kitchen_7_10_1_A_a':$scope.kitchen_7_10_1_A_a, 
				'kitchen_7_10_1_A_a_cm':$scope.kitchen_7_10_1_A_a_cm,
				'kitchen_7_10_1_A_b':$scope.kitchen_7_10_1_A_b, 
				'kitchen_7_10_1_A_b_cm':$scope.kitchen_7_10_1_A_b_cm,
				'kitchen_7_10_1_A_c':$scope.kitchen_7_10_1_A_c, 
				'kitchen_7_10_1_A_c_cm':$scope.kitchen_7_10_1_A_c_cm,
				'kitchen_7_10_1_A_d':$scope.kitchen_7_10_1_A_d, 
				'kitchen_7_10_1_A_d_cm':$scope.kitchen_7_10_1_A_d_cm,
				'kitchen_7_10_1_B':$scope.kitchen_7_10_1_B, 
				'kitchen_7_10_1_B_cm':$scope.kitchen_7_10_1_B_cm,
				'kitchen_7_10_1_C':$scope.kitchen_7_10_1_C, 
				'kitchen_7_10_1_C_cm':$scope.kitchen_7_10_1_C_cm,
				'kitchen_7_10_1_D':$scope.kitchen_7_10_1_D, 
				'kitchen_7_10_1_D_cm':$scope.kitchen_7_10_1_D_cm,
				'kitchen_7_10_1_E':$scope.kitchen_7_10_1_E, 
				'kitchen_7_10_1_E_cm':$scope.kitchen_7_10_1_E_cm,
				'kitchen_7_10_1_F':$scope.kitchen_7_10_1_F, 
				'kitchen_7_10_1_F_cm':$scope.kitchen_7_10_1_F_cm,
				'kitchen_7_10_1_G':$scope.kitchen_7_10_1_G, 
				'kitchen_7_10_1_G_cm':$scope.kitchen_7_10_1_G_cm,
				'kitchen_7_11_1_text':$scope.kitchen_7_11_1_text,
				'kitchen_7_11_1_A_a':$scope.kitchen_7_11_1_A_a, 
				'kitchen_7_11_1_A_a_cm':$scope.kitchen_7_11_1_A_a_cm,
				'kitchen_7_11_1_A_b':$scope.kitchen_7_11_1_A_b, 
				'kitchen_7_11_1_A_b_cm':$scope.kitchen_7_11_1_A_b_cm,
				'kitchen_7_11_1_A_c':$scope.kitchen_7_11_1_A_c, 
				'kitchen_7_11_1_A_c_cm':$scope.kitchen_7_11_1_A_c_cm,
				'kitchen_7_11_1_B':$scope.kitchen_7_11_1_B, 
				'kitchen_7_11_1_B_cm':$scope.kitchen_7_11_1_B_cm,
				'kitchen_7_11_1_C_a':$scope.kitchen_7_11_1_C_a, 
				'kitchen_7_11_1_C_a_cm':$scope.kitchen_7_11_1_C_a_cm,
				'kitchen_7_11_1_C_b':$scope.kitchen_7_11_1_C_b, 
				'kitchen_7_11_1_C_b_cm':$scope.kitchen_7_11_1_C_b_cm,
				'kitchen_7_11_1_C_c':$scope.kitchen_7_11_1_C_c, 
				'kitchen_7_11_1_C_c_cm':$scope.kitchen_7_11_1_C_c_cm,
				'kitchen_7_11_1_C_d':$scope.kitchen_7_11_1_C_d, 
				'kitchen_7_11_1_C_d_cm':$scope.kitchen_7_11_1_C_d_cm,
				'kitchen_7_11_1_C_e':$scope.kitchen_7_11_1_C_e, 
				'kitchen_7_11_1_C_e_cm':$scope.kitchen_7_11_1_C_e_cm,
				'kitchen_7_11_1_D_a':$scope.kitchen_7_11_1_D_a, 
				'kitchen_7_11_1_D_a_cm':$scope.kitchen_7_11_1_D_a_cm,
				'kitchen_7_11_1_D_b':$scope.kitchen_7_11_1_D_b, 
				'kitchen_7_11_1_D_b_cm':$scope.kitchen_7_11_1_D_b_cm,
				'kitchen_7_11_1_E':$scope.kitchen_7_11_1_E, 
				'kitchen_7_11_1_E_cm':$scope.kitchen_7_11_1_E_cm,
				'kitchen_7_11_1_F':$scope.kitchen_7_11_1_F, 
				'kitchen_7_11_1_F_cm':$scope.kitchen_7_11_1_F_cm,
				'guest_rooms_8_1_1_text':$scope.guest_rooms_8_1_1_text,
				'guest_rooms_8_1_1_A':$scope.guest_rooms_8_1_1_A, 
				'guest_rooms_8_1_1_A_cm':$scope.guest_rooms_8_1_1_A_cm,
				'guest_rooms_8_2_1_text':$scope.guest_rooms_8_2_1_text,
				'guest_rooms_8_2_1_A':$scope.guest_rooms_8_2_1_A, 
				'guest_rooms_8_2_1_A_cm':$scope.guest_rooms_8_2_1_A_cm,
				'guest_rooms_8_2_1_B':$scope.guest_rooms_8_2_1_B, 
				'guest_rooms_8_2_1_B_cm':$scope.guest_rooms_8_2_1_B_cm,
				'guest_rooms_8_3_1_text':$scope.guest_rooms_8_3_1_text,
				'guest_rooms_8_3_1_A_a':$scope.guest_rooms_8_3_1_A_a, 
				'guest_rooms_8_3_1_A_a_cm':$scope.guest_rooms_8_3_1_A_a_cm,
				'guest_rooms_8_3_1_A_b':$scope.guest_rooms_8_3_1_A_b, 
				'guest_rooms_8_3_1_A_b_cm':$scope.guest_rooms_8_3_1_A_b_cm,
				'guest_rooms_8_3_1_A_c':$scope.guest_rooms_8_3_1_A_c, 
				'guest_rooms_8_3_1_A_c_cm':$scope.guest_rooms_8_3_1_A_c_cm,
				'guest_rooms_8_3_1_A_d':$scope.guest_rooms_8_3_1_A_d, 
				'guest_rooms_8_3_1_A_d_cm':$scope.guest_rooms_8_3_1_A_d_cm,
				'guest_rooms_8_3_1_A_e':$scope.guest_rooms_8_3_1_A_e, 
				'guest_rooms_8_3_1_A_e_cm':$scope.guest_rooms_8_3_1_A_e_cm,
				'guest_rooms_8_3_1_A_f':$scope.guest_rooms_8_3_1_A_f, 
				'guest_rooms_8_3_1_A_f_cm':$scope.guest_rooms_8_3_1_A_f_cm,
				'guest_rooms_8_3_1_A_g':$scope.guest_rooms_8_3_1_A_g, 
				'guest_rooms_8_3_1_A_g_cm':$scope.guest_rooms_8_3_1_A_g_cm,
				'guest_rooms_8_3_1_A_h':$scope.guest_rooms_8_3_1_A_h, 
				'guest_rooms_8_3_1_A_h_cm':$scope.guest_rooms_8_3_1_A_h_cm,
				'guest_rooms_8_3_1_A_i':$scope.guest_rooms_8_3_1_A_i, 
				'guest_rooms_8_3_1_A_i_cm':$scope.guest_rooms_8_3_1_A_i_cm,
				'guest_rooms_8_3_1_A_j':$scope.guest_rooms_8_3_1_A_j, 
				'guest_rooms_8_3_1_A_j_cm':$scope.guest_rooms_8_3_1_A_j_cm,
				'guest_rooms_8_3_1_A_k':$scope.guest_rooms_8_3_1_A_k, 
				'guest_rooms_8_3_1_A_k_cm':$scope.guest_rooms_8_3_1_A_k_cm,
				'guest_rooms_8_3_1_A_l':$scope.guest_rooms_8_3_1_A_l, 
				'guest_rooms_8_3_1_A_l_cm':$scope.guest_rooms_8_3_1_A_l_cm,
				'guest_rooms_8_3_1_A_m':$scope.guest_rooms_8_3_1_A_m, 
				'guest_rooms_8_3_1_A_m_cm':$scope.guest_rooms_8_3_1_A_m_cm,
				'guest_rooms_8_3_1_A_n':$scope.guest_rooms_8_3_1_A_n, 
				'guest_rooms_8_3_1_A_n_cm':$scope.guest_rooms_8_3_1_A_n_cm,
				'guest_rooms_8_3_1_A_o':$scope.guest_rooms_8_3_1_A_o, 
				'guest_rooms_8_3_1_A_o_cm':$scope.guest_rooms_8_3_1_A_o_cm,
				'guest_rooms_8_3_1_A_p':$scope.guest_rooms_8_3_1_A_p, 
				'guest_rooms_8_3_1_A_p_cm':$scope.guest_rooms_8_3_1_A_p_cm,
				'guest_rooms_8_3_1_B':$scope.guest_rooms_8_3_1_B, 
				'guest_rooms_8_3_1_B_cm':$scope.guest_rooms_8_3_1_B_cm,
				'guest_rooms_8_4_1_text':$scope.guest_rooms_8_4_1_text,
				'guest_rooms_8_4_1_A':$scope.guest_rooms_8_4_1_A, 
				'guest_rooms_8_4_1_A_cm':$scope.guest_rooms_8_4_1_A_cm,
				'guest_rooms_8_4_1_B_a':$scope.guest_rooms_8_4_1_B_a, 
				'guest_rooms_8_4_1_B_a_cm':$scope.guest_rooms_8_4_1_B_a_cm,
				'guest_rooms_8_4_1_B_b':$scope.guest_rooms_8_4_1_B_b, 
				'guest_rooms_8_4_1_B_b_cm':$scope.guest_rooms_8_4_1_B_b_cm,
				'guest_rooms_8_4_1_B_c':$scope.guest_rooms_8_4_1_B_c, 
				'guest_rooms_8_4_1_B_c_cm':$scope.guest_rooms_8_4_1_B_c_cm,
				'guest_rooms_8_4_1_B_d':$scope.guest_rooms_8_4_1_B_d, 
				'guest_rooms_8_4_1_B_d_cm':$scope.guest_rooms_8_4_1_B_d_cm,
				'guest_rooms_8_4_1_C':$scope.guest_rooms_8_4_1_C, 
				'guest_rooms_8_4_1_C_cm':$scope.guest_rooms_8_4_1_C_cm,
				'guest_rooms_8_4_1_D':$scope.guest_rooms_8_4_1_D, 
				'guest_rooms_8_4_1_D_cm':$scope.guest_rooms_8_4_1_D_cm,
				'guest_rooms_8_5_1_text':$scope.guest_rooms_8_5_1_text,
				'guest_rooms_8_5_1_A':$scope.guest_rooms_8_5_1_A, 
				'guest_rooms_8_5_1_A_cm':$scope.guest_rooms_8_5_1_A_cm,
				'guest_rooms_8_5_1_B':$scope.guest_rooms_8_5_1_B, 
				'guest_rooms_8_5_1_B_cm':$scope.guest_rooms_8_5_1_B_cm,
				'guest_rooms_8_6_1_text':$scope.guest_rooms_8_6_1_text,
				'guest_rooms_8_6_1_A':$scope.guest_rooms_8_6_1_A, 
				'guest_rooms_8_6_1_A_cm':$scope.guest_rooms_8_6_1_A_cm,
				'guest_rooms_8_6_1_B':$scope.guest_rooms_8_6_1_B, 
				'guest_rooms_8_6_1_B_cm':$scope.guest_rooms_8_6_1_B_cm,
				'guest_rooms_8_6_1_C':$scope.guest_rooms_8_6_1_C, 
				'guest_rooms_8_6_1_C_cm':$scope.guest_rooms_8_6_1_C_cm,
				'guest_rooms_8_6_1_D':$scope.guest_rooms_8_6_1_D, 
				'guest_rooms_8_6_1_D_cm':$scope.guest_rooms_8_6_1_D_cm,
				'guest_rooms_8_6_1_E':$scope.guest_rooms_8_6_1_E, 
				'guest_rooms_8_6_1_E_cm':$scope.guest_rooms_8_6_1_E_cm,
				'guest_rooms_8_7_1_text':$scope.guest_rooms_8_7_1_text,
				'guest_rooms_8_7_1_A':$scope.guest_rooms_8_7_1_A, 
				'guest_rooms_8_7_1_A_cm':$scope.guest_rooms_8_7_1_A_cm,
				'guest_rooms_8_7_1_B':$scope.guest_rooms_8_7_1_B, 
				'guest_rooms_8_7_1_B_cm':$scope.guest_rooms_8_7_1_B_cm,
				'guest_rooms_8_7_1_C':$scope.guest_rooms_8_7_1_C, 
				'guest_rooms_8_7_1_C_cm':$scope.guest_rooms_8_7_1_C_cm,
				'guest_rooms_8_7_1_D':$scope.guest_rooms_8_7_1_D, 
				'guest_rooms_8_7_1_D_cm':$scope.guest_rooms_8_7_1_D_cm,
				'guest_rooms_8_7_1_E':$scope.guest_rooms_8_7_1_E, 
				'guest_rooms_8_7_1_E_cm':$scope.guest_rooms_8_7_1_E_cm,
				'guest_rooms_8_8_1_text':$scope.guest_rooms_8_8_1_text,
				'guest_rooms_8_8_1_A':$scope.guest_rooms_8_8_1_A, 
				'guest_rooms_8_8_1_A_cm':$scope.guest_rooms_8_8_1_A_cm,
				'guest_rooms_8_8_1_B_a':$scope.guest_rooms_8_8_1_B_a, 
				'guest_rooms_8_8_1_B_a_cm':$scope.guest_rooms_8_8_1_B_a_cm,
				'guest_rooms_8_8_1_B_b':$scope.guest_rooms_8_8_1_B_b, 
				'guest_rooms_8_8_1_B_b_cm':$scope.guest_rooms_8_8_1_B_b_cm,
				'guest_rooms_8_8_1_B_c':$scope.guest_rooms_8_8_1_B_c, 
				'guest_rooms_8_8_1_B_c_cm':$scope.guest_rooms_8_8_1_B_c_cm,
				'guest_rooms_8_8_1_B_d':$scope.guest_rooms_8_8_1_B_d, 
				'guest_rooms_8_8_1_B_d_cm':$scope.guest_rooms_8_8_1_B_d_cm,
				'guest_rooms_8_8_1_B_e':$scope.guest_rooms_8_8_1_B_e, 
				'guest_rooms_8_8_1_B_e_cm':$scope.guest_rooms_8_8_1_B_e_cm,
				'guest_rooms_8_8_1_B_f':$scope.guest_rooms_8_8_1_B_f, 
				'guest_rooms_8_8_1_B_f_cm':$scope.guest_rooms_8_8_1_B_f_cm,
				'guest_rooms_8_8_1_C_a':$scope.guest_rooms_8_8_1_C_a, 
				'guest_rooms_8_8_1_C_a_cm':$scope.guest_rooms_8_8_1_C_a_cm,
				'guest_rooms_8_8_1_C_b':$scope.guest_rooms_8_8_1_C_b, 
				'guest_rooms_8_8_1_C_b_cm':$scope.guest_rooms_8_8_1_C_b_cm,
				'guest_rooms_8_8_1_D':$scope.guest_rooms_8_8_1_D, 
				'guest_rooms_8_8_1_D_cm':$scope.guest_rooms_8_8_1_D_cm,
				'guest_rooms_8_9_1_text':$scope.guest_rooms_8_9_1_text,
				'guest_rooms_8_9_1_A':$scope.guest_rooms_8_9_1_A, 
				'guest_rooms_8_9_1_A_cm':$scope.guest_rooms_8_9_1_A_cm,
				'guest_rooms_8_9_1_B':$scope.guest_rooms_8_9_1_B, 
				'guest_rooms_8_9_1_B_cm':$scope.guest_rooms_8_9_1_B_cm,
				'guest_rooms_8_10_1_text':$scope.guest_rooms_8_10_1_text,
				'guest_rooms_8_10_1_A_a':$scope.guest_rooms_8_10_1_A_a, 
				'guest_rooms_8_10_1_A_a_cm':$scope.guest_rooms_8_10_1_A_a_cm,
				'guest_rooms_8_10_1_A_b':$scope.guest_rooms_8_10_1_A_b, 
				'guest_rooms_8_10_1_A_b_cm':$scope.guest_rooms_8_10_1_A_b_cm,
				'guest_rooms_8_10_1_A_c':$scope.guest_rooms_8_10_1_A_c, 
				'guest_rooms_8_10_1_A_c_cm':$scope.guest_rooms_8_10_1_A_c_cm,
				'guest_rooms_8_10_1_A_d':$scope.guest_rooms_8_10_1_A_d, 
				'guest_rooms_8_10_1_A_d_cm':$scope.guest_rooms_8_10_1_A_d_cm,
				'guest_rooms_8_10_1_A_e':$scope.guest_rooms_8_10_1_A_e, 
				'guest_rooms_8_10_1_A_e_cm':$scope.guest_rooms_8_10_1_A_e_cm,
				'guest_rooms_8_10_1_B_a':$scope.guest_rooms_8_10_1_B_a, 
				'guest_rooms_8_10_1_B_a_cm':$scope.guest_rooms_8_10_1_B_a_cm,
				'guest_rooms_8_10_1_B_b':$scope.guest_rooms_8_10_1_B_b, 
				'guest_rooms_8_10_1_B_b_cm':$scope.guest_rooms_8_10_1_B_b_cm,
				'guest_rooms_8_10_1_B_c':$scope.guest_rooms_8_10_1_B_c, 
				'guest_rooms_8_10_1_B_c_cm':$scope.guest_rooms_8_10_1_B_c_cm,
				'guest_rooms_8_10_1_B_d':$scope.guest_rooms_8_10_1_B_d, 
				'guest_rooms_8_10_1_B_d_cm':$scope.guest_rooms_8_10_1_B_d_cm,
				'guest_rooms_8_10_1_C':$scope.guest_rooms_8_10_1_C, 
				'guest_rooms_8_10_1_C_cm':$scope.guest_rooms_8_10_1_C_cm,
				'guest_rooms_8_11_1_text':$scope.guest_rooms_8_11_1_text,
				'guest_rooms_8_11_1_A':$scope.guest_rooms_8_11_1_A, 
				'guest_rooms_8_11_1_A_cm':$scope.guest_rooms_8_11_1_A_cm,
				'guest_rooms_8_11_1_B':$scope.guest_rooms_8_11_1_B, 
				'guest_rooms_8_11_1_B_cm':$scope.guest_rooms_8_11_1_B_cm,
				'guest_rooms_8_11_1_C_a':$scope.guest_rooms_8_11_1_C_a, 
				'guest_rooms_8_11_1_C_a_cm':$scope.guest_rooms_8_11_1_C_a_cm,
				'guest_rooms_8_11_1_C_b':$scope.guest_rooms_8_11_1_C_b, 
				'guest_rooms_8_11_1_C_b_cm':$scope.guest_rooms_8_11_1_C_b_cm,
				'guest_rooms_8_11_1_C_c':$scope.guest_rooms_8_11_1_C_c, 
				'guest_rooms_8_11_1_C_c_cm':$scope.guest_rooms_8_11_1_C_c_cm,
				'guest_rooms_8_11_1_D':$scope.guest_rooms_8_11_1_D, 
				'guest_rooms_8_11_1_D_cm':$scope.guest_rooms_8_11_1_D_cm,
				'guest_rooms_8_11_1_E':$scope.guest_rooms_8_11_1_E, 
				'guest_rooms_8_11_1_E_cm':$scope.guest_rooms_8_11_1_E_cm,
				'guest_rooms_8_12_1_text':$scope.guest_rooms_8_12_1_text,
				'guest_rooms_8_12_1_A':$scope.guest_rooms_8_12_1_A, 
				'guest_rooms_8_12_1_A_cm':$scope.guest_rooms_8_12_1_A_cm,
				'guest_rooms_8_12_1_B':$scope.guest_rooms_8_12_1_B, 
				'guest_rooms_8_12_1_B_cm':$scope.guest_rooms_8_12_1_B_cm,
				'guest_rooms_8_12_1_C':$scope.guest_rooms_8_12_1_C, 
				'guest_rooms_8_12_1_C_cm':$scope.guest_rooms_8_12_1_C_cm,
				'guest_rooms_8_13_1_text':$scope.guest_rooms_8_13_1_text,
				'guest_rooms_8_13_1_A':$scope.guest_rooms_8_13_1_A, 
				'guest_rooms_8_13_1_A_cm':$scope.guest_rooms_8_13_1_A_cm,
				'guest_rooms_8_13_1_B_a':$scope.guest_rooms_8_13_1_B_a, 
				'guest_rooms_8_13_1_B_a_cm':$scope.guest_rooms_8_13_1_B_a_cm,
				'guest_rooms_8_13_1_B_b':$scope.guest_rooms_8_13_1_B_b, 
				'guest_rooms_8_13_1_B_b_cm':$scope.guest_rooms_8_13_1_B_b_cm,
				'guest_rooms_8_13_1_B_c':$scope.guest_rooms_8_13_1_B_c, 
				'guest_rooms_8_13_1_B_c_cm':$scope.guest_rooms_8_13_1_B_c_cm,
				'guest_rooms_8_13_1_C':$scope.guest_rooms_8_13_1_C, 
				'guest_rooms_8_13_1_C_cm':$scope.guest_rooms_8_13_1_C_cm,
				'guest_rooms_8_14_1_text':$scope.guest_rooms_8_14_1_text,
				'guest_rooms_8_14_1_A_a':$scope.guest_rooms_8_14_1_A_a, 
				'guest_rooms_8_14_1_A_a_cm':$scope.guest_rooms_8_14_1_A_a_cm,
				'guest_rooms_8_14_1_A_b':$scope.guest_rooms_8_14_1_A_b, 
				'guest_rooms_8_14_1_A_b_cm':$scope.guest_rooms_8_14_1_A_b_cm,
				'guest_rooms_8_14_1_A_c':$scope.guest_rooms_8_14_1_A_c, 
				'guest_rooms_8_14_1_A_c_cm':$scope.guest_rooms_8_14_1_A_c_cm,
				'guest_rooms_8_14_1_A_d':$scope.guest_rooms_8_14_1_A_d, 
				'guest_rooms_8_14_1_A_d_cm':$scope.guest_rooms_8_14_1_A_d_cm,
				'guest_rooms_8_14_1_A_e':$scope.guest_rooms_8_14_1_A_e, 
				'guest_rooms_8_14_1_A_e_cm':$scope.guest_rooms_8_14_1_A_e_cm,
				'guest_rooms_8_14_1_A_f':$scope.guest_rooms_8_14_1_A_f, 
				'guest_rooms_8_14_1_A_f_cm':$scope.guest_rooms_8_14_1_A_f_cm,
				'guest_rooms_8_14_1_A_g':$scope.guest_rooms_8_14_1_A_g, 
				'guest_rooms_8_14_1_A_g_cm':$scope.guest_rooms_8_14_1_A_g_cm,
				'guest_rooms_8_14_1_A_h':$scope.guest_rooms_8_14_1_A_h, 
				'guest_rooms_8_14_1_A_h_cm':$scope.guest_rooms_8_14_1_A_h_cm,
				'guest_rooms_8_14_1_A_i':$scope.guest_rooms_8_14_1_A_i, 
				'guest_rooms_8_14_1_A_i_cm':$scope.guest_rooms_8_14_1_A_i_cm,
				'guest_rooms_8_14_1_A_j':$scope.guest_rooms_8_14_1_A_j, 
				'guest_rooms_8_14_1_A_j_cm':$scope.guest_rooms_8_14_1_A_j_cm,
				'guest_rooms_8_14_1_A_k':$scope.guest_rooms_8_14_1_A_k, 
				'guest_rooms_8_14_1_A_k_cm':$scope.guest_rooms_8_14_1_A_k_cm,
				'guest_rooms_8_14_1_A_l':$scope.guest_rooms_8_14_1_A_l, 
				'guest_rooms_8_14_1_A_l_cm':$scope.guest_rooms_8_14_1_A_l_cm,
				'guest_rooms_8_14_1_A_m':$scope.guest_rooms_8_14_1_A_m, 
				'guest_rooms_8_14_1_A_m_cm':$scope.guest_rooms_8_14_1_A_m_cm,
				'guest_rooms_8_14_1_A_n':$scope.guest_rooms_8_14_1_A_n, 
				'guest_rooms_8_14_1_A_n_cm':$scope.guest_rooms_8_14_1_A_n_cm,
				'guest_rooms_8_14_1_A_o':$scope.guest_rooms_8_14_1_A_o, 
				'guest_rooms_8_14_1_A_o_cm':$scope.guest_rooms_8_14_1_A_o_cm,
				'guest_rooms_8_14_1_A_p':$scope.guest_rooms_8_14_1_A_p, 
				'guest_rooms_8_14_1_A_p_cm':$scope.guest_rooms_8_14_1_A_p_cm,
				'guest_rooms_8_14_1_A_q':$scope.guest_rooms_8_14_1_A_q, 
				'guest_rooms_8_14_1_A_q_cm':$scope.guest_rooms_8_14_1_A_q_cm,
				'guest_rooms_8_14_1_B':$scope.guest_rooms_8_14_1_B, 
				'guest_rooms_8_14_1_B_cm':$scope.guest_rooms_8_14_1_B_cm,
				'guest_bathrooms_9_1_1_text':$scope.guest_bathrooms_9_1_1_text,
				'guest_bathrooms_9_1_1_A':$scope.guest_bathrooms_9_1_1_A, 
				'guest_bathrooms_9_1_1_A_cm':$scope.guest_bathrooms_9_1_1_A_cm,
				'guest_bathrooms_9_1_1_B':$scope.guest_bathrooms_9_1_1_B, 
				'guest_bathrooms_9_1_1_B_cm':$scope.guest_bathrooms_9_1_1_B_cm,
				'guest_bathrooms_9_1_1_C':$scope.guest_bathrooms_9_1_1_C, 
				'guest_bathrooms_9_1_1_C_cm':$scope.guest_bathrooms_9_1_1_C_cm,
				'guest_bathrooms_9_2_1_text':$scope.guest_bathrooms_9_2_1_text,
				'guest_bathrooms_9_2_1_A_a':$scope.guest_bathrooms_9_2_1_A_a, 
				'guest_bathrooms_9_2_1_A_a_cm':$scope.guest_bathrooms_9_2_1_A_a_cm,
				'guest_bathrooms_9_2_1_A_b':$scope.guest_bathrooms_9_2_1_A_b, 
				'guest_bathrooms_9_2_1_A_b_cm':$scope.guest_bathrooms_9_2_1_A_b_cm,
				'guest_bathrooms_9_2_1_A_c':$scope.guest_bathrooms_9_2_1_A_c, 
				'guest_bathrooms_9_2_1_A_c_cm':$scope.guest_bathrooms_9_2_1_A_c_cm,
				'guest_bathrooms_9_2_1_A_d':$scope.guest_bathrooms_9_2_1_A_d, 
				'guest_bathrooms_9_2_1_A_d_cm':$scope.guest_bathrooms_9_2_1_A_d_cm,
				'guest_bathrooms_9_2_1_A_e':$scope.guest_bathrooms_9_2_1_A_e, 
				'guest_bathrooms_9_2_1_A_e_cm':$scope.guest_bathrooms_9_2_1_A_e_cm,
				'guest_bathrooms_9_2_1_A_f':$scope.guest_bathrooms_9_2_1_A_f, 
				'guest_bathrooms_9_2_1_A_f_cm':$scope.guest_bathrooms_9_2_1_A_f_cm,
				'guest_bathrooms_9_2_1_A_g':$scope.guest_bathrooms_9_2_1_A_g, 
				'guest_bathrooms_9_2_1_A_g_cm':$scope.guest_bathrooms_9_2_1_A_g_cm,
				'guest_bathrooms_9_2_1_A_h':$scope.guest_bathrooms_9_2_1_A_h, 
				'guest_bathrooms_9_2_1_A_h_cm':$scope.guest_bathrooms_9_2_1_A_h_cm,
				'guest_bathrooms_9_2_1_A_i':$scope.guest_bathrooms_9_2_1_A_i, 
				'guest_bathrooms_9_2_1_A_i_cm':$scope.guest_bathrooms_9_2_1_A_i_cm,
				'guest_bathrooms_9_2_1_A_j':$scope.guest_bathrooms_9_2_1_A_j, 
				'guest_bathrooms_9_2_1_A_j_cm':$scope.guest_bathrooms_9_2_1_A_j_cm,
				'guest_bathrooms_9_2_1_A_k':$scope.guest_bathrooms_9_2_1_A_k, 
				'guest_bathrooms_9_2_1_A_k_cm':$scope.guest_bathrooms_9_2_1_A_k_cm,
				'guest_bathrooms_9_2_1_A_l':$scope.guest_bathrooms_9_2_1_A_l, 
				'guest_bathrooms_9_2_1_A_l_cm':$scope.guest_bathrooms_9_2_1_A_l_cm,
				'guest_bathrooms_9_2_1_A_m':$scope.guest_bathrooms_9_2_1_A_m, 
				'guest_bathrooms_9_2_1_A_m_cm':$scope.guest_bathrooms_9_2_1_A_m_cm,
				'guest_bathrooms_9_2_1_A_n':$scope.guest_bathrooms_9_2_1_A_n, 
				'guest_bathrooms_9_2_1_A_n_cm':$scope.guest_bathrooms_9_2_1_A_n_cm,
				'guest_bathrooms_9_2_1_A_o':$scope.guest_bathrooms_9_2_1_A_o, 
				'guest_bathrooms_9_2_1_A_o_cm':$scope.guest_bathrooms_9_2_1_A_o_cm,
				'guest_bathrooms_9_2_1_A_p':$scope.guest_bathrooms_9_2_1_A_p, 
				'guest_bathrooms_9_2_1_A_p_cm':$scope.guest_bathrooms_9_2_1_A_p_cm,
				'guest_bathrooms_9_2_1_A_q':$scope.guest_bathrooms_9_2_1_A_q, 
				'guest_bathrooms_9_2_1_A_q_cm':$scope.guest_bathrooms_9_2_1_A_q_cm,
				'guest_bathrooms_9_2_1_A_r':$scope.guest_bathrooms_9_2_1_A_r, 
				'guest_bathrooms_9_2_1_A_r_cm':$scope.guest_bathrooms_9_2_1_A_r_cm,
				'guest_bathrooms_9_2_1_A_s':$scope.guest_bathrooms_9_2_1_A_s, 
				'guest_bathrooms_9_2_1_A_s_cm':$scope.guest_bathrooms_9_2_1_A_s_cm,
				'guest_bathrooms_9_2_1_A_t':$scope.guest_bathrooms_9_2_1_A_t, 
				'guest_bathrooms_9_2_1_A_t_cm':$scope.guest_bathrooms_9_2_1_A_t_cm,
				'guest_bathrooms_9_2_1_A_u':$scope.guest_bathrooms_9_2_1_A_u, 
				'guest_bathrooms_9_2_1_A_u_cm':$scope.guest_bathrooms_9_2_1_A_u_cm,
				'guest_bathrooms_9_2_1_B':$scope.guest_bathrooms_9_2_1_B, 
				'guest_bathrooms_9_2_1_B_cm':$scope.guest_bathrooms_9_2_1_B_cm,
				'guest_bathrooms_9_2_1_C':$scope.guest_bathrooms_9_2_1_C, 
				'guest_bathrooms_9_2_1_C_cm':$scope.guest_bathrooms_9_2_1_C_cm,
				'guest_bathrooms_9_3_1_text':$scope.guest_bathrooms_9_3_1_text,
				'guest_bathrooms_9_3_1_A':$scope.guest_bathrooms_9_3_1_A, 
				'guest_bathrooms_9_3_1_A_cm':$scope.guest_bathrooms_9_3_1_A_cm,
				'guest_bathrooms_9_3_1_B':$scope.guest_bathrooms_9_3_1_B, 
				'guest_bathrooms_9_3_1_B_cm':$scope.guest_bathrooms_9_3_1_B_cm,
				'guest_bathrooms_9_3_1_C':$scope.guest_bathrooms_9_3_1_C, 
				'guest_bathrooms_9_3_1_C_cm':$scope.guest_bathrooms_9_3_1_C_cm,
				'guest_bathrooms_9_3_1_D':$scope.guest_bathrooms_9_3_1_D, 
				'guest_bathrooms_9_3_1_D_cm':$scope.guest_bathrooms_9_3_1_D_cm,
				'guest_bathrooms_9_3_1_E':$scope.guest_bathrooms_9_3_1_E, 
				'guest_bathrooms_9_3_1_E_cm':$scope.guest_bathrooms_9_3_1_E_cm,
				'guest_bathrooms_9_3_1_F':$scope.guest_bathrooms_9_3_1_F, 
				'guest_bathrooms_9_3_1_F_cm':$scope.guest_bathrooms_9_3_1_F_cm,
				'guest_bathrooms_9_4_1_text':$scope.guest_bathrooms_9_4_1_text,
				'guest_bathrooms_9_4_1_A_a':$scope.guest_bathrooms_9_4_1_A_a, 
				'guest_bathrooms_9_4_1_A_a_cm':$scope.guest_bathrooms_9_4_1_A_a_cm,
				'guest_bathrooms_9_4_1_A_b':$scope.guest_bathrooms_9_4_1_A_b, 
				'guest_bathrooms_9_4_1_A_b_cm':$scope.guest_bathrooms_9_4_1_A_b_cm,
				'guest_bathrooms_9_4_1_A_c':$scope.guest_bathrooms_9_4_1_A_c, 
				'guest_bathrooms_9_4_1_A_c_cm':$scope.guest_bathrooms_9_4_1_A_c_cm,
				'guest_bathrooms_9_4_1_A_d':$scope.guest_bathrooms_9_4_1_A_d, 
				'guest_bathrooms_9_4_1_A_d_cm':$scope.guest_bathrooms_9_4_1_A_d_cm,
				'guest_bathrooms_9_4_1_A_e':$scope.guest_bathrooms_9_4_1_A_e, 
				'guest_bathrooms_9_4_1_A_e_cm':$scope.guest_bathrooms_9_4_1_A_e_cm,
				'guest_bathrooms_9_4_1_B':$scope.guest_bathrooms_9_4_1_B, 
				'guest_bathrooms_9_4_1_B_cm':$scope.guest_bathrooms_9_4_1_B_cm,
				'guest_bathrooms_9_4_1_C':$scope.guest_bathrooms_9_4_1_C, 
				'guest_bathrooms_9_4_1_C_cm':$scope.guest_bathrooms_9_4_1_C_cm,
				'guest_bathrooms_9_4_1_D':$scope.guest_bathrooms_9_4_1_D, 
				'guest_bathrooms_9_4_1_D_cm':$scope.guest_bathrooms_9_4_1_D_cm,
				'guest_bathrooms_9_4_1_E':$scope.guest_bathrooms_9_4_1_E, 
				'guest_bathrooms_9_4_1_E_cm':$scope.guest_bathrooms_9_4_1_E_cm,
				'guest_bathrooms_9_4_1_F':$scope.guest_bathrooms_9_4_1_F, 
				'guest_bathrooms_9_4_1_F_cm':$scope.guest_bathrooms_9_4_1_F_cm,
				'guest_bathrooms_9_5_1_text':$scope.guest_bathrooms_9_5_1_text,
				'guest_bathrooms_9_5_1_A':$scope.guest_bathrooms_9_5_1_A, 
				'guest_bathrooms_9_5_1_A_cm':$scope.guest_bathrooms_9_5_1_A_cm,
				'guest_bathrooms_9_5_1_B':$scope.guest_bathrooms_9_5_1_B, 
				'guest_bathrooms_9_5_1_B_cm':$scope.guest_bathrooms_9_5_1_B_cm,
				'guest_bathrooms_9_5_1_C':$scope.guest_bathrooms_9_5_1_C, 
				'guest_bathrooms_9_5_1_C_cm':$scope.guest_bathrooms_9_5_1_C_cm,
				'guest_bathrooms_9_5_1_D':$scope.guest_bathrooms_9_5_1_D, 
				'guest_bathrooms_9_5_1_D_cm':$scope.guest_bathrooms_9_5_1_D_cm,
				'guest_bathrooms_9_6_1_text':$scope.guest_bathrooms_9_6_1_text,
				'guest_bathrooms_9_6_1_A':$scope.guest_bathrooms_9_6_1_A, 
				'guest_bathrooms_9_6_1_A_cm':$scope.guest_bathrooms_9_6_1_A_cm,
				'guest_bathrooms_9_6_1_B':$scope.guest_bathrooms_9_6_1_B, 
				'guest_bathrooms_9_6_1_B_cm':$scope.guest_bathrooms_9_6_1_B_cm,
				'guest_bathrooms_9_6_1_C':$scope.guest_bathrooms_9_6_1_C, 
				'guest_bathrooms_9_6_1_C_cm':$scope.guest_bathrooms_9_6_1_C_cm,
				'guest_bathrooms_9_7_1_text':$scope.guest_bathrooms_9_7_1_text,
				'guest_bathrooms_9_7_1_A_a':$scope.guest_bathrooms_9_7_1_A_a, 
				'guest_bathrooms_9_7_1_A_a_cm':$scope.guest_bathrooms_9_7_1_A_a_cm,
				'guest_bathrooms_9_7_1_A_b':$scope.guest_bathrooms_9_7_1_A_b, 
				'guest_bathrooms_9_7_1_A_b_cm':$scope.guest_bathrooms_9_7_1_A_b_cm,
				'guest_bathrooms_9_7_1_A_c':$scope.guest_bathrooms_9_7_1_A_c, 
				'guest_bathrooms_9_7_1_A_c_cm':$scope.guest_bathrooms_9_7_1_A_c_cm,
				'guest_bathrooms_9_7_1_A_d':$scope.guest_bathrooms_9_7_1_A_d, 
				'guest_bathrooms_9_7_1_A_d_cm':$scope.guest_bathrooms_9_7_1_A_d_cm,
				'guest_bathrooms_9_7_1_A_e':$scope.guest_bathrooms_9_7_1_A_e, 
				'guest_bathrooms_9_7_1_A_e_cm':$scope.guest_bathrooms_9_7_1_A_e_cm,
				'guest_bathrooms_9_7_1_A_f':$scope.guest_bathrooms_9_7_1_A_f, 
				'guest_bathrooms_9_7_1_A_f_cm':$scope.guest_bathrooms_9_7_1_A_f_cm,
				'guest_bathrooms_9_7_1_B':$scope.guest_bathrooms_9_7_1_B, 
				'guest_bathrooms_9_7_1_B_cm':$scope.guest_bathrooms_9_7_1_B_cm,
				'guest_bathrooms_9_7_1_C':$scope.guest_bathrooms_9_7_1_C, 
				'guest_bathrooms_9_7_1_C_cm':$scope.guest_bathrooms_9_7_1_C_cm,
				'guest_bathrooms_9_8_1_text':$scope.guest_bathrooms_9_8_1_text,
				'guest_bathrooms_9_8_1_A':$scope.guest_bathrooms_9_8_1_A, 
				'guest_bathrooms_9_8_1_A_cm':$scope.guest_bathrooms_9_8_1_A_cm,
				'guest_bathrooms_9_8_1_B':$scope.guest_bathrooms_9_8_1_B, 
				'guest_bathrooms_9_8_1_B_cm':$scope.guest_bathrooms_9_8_1_B_cm,
				'hygiene_and_sanitation_10_1_1_text':$scope.hygiene_and_sanitation_10_1_1_text,
				'hygiene_and_sanitation_10_1_1_A':$scope.hygiene_and_sanitation_10_1_1_A, 
				'hygiene_and_sanitation_10_1_1_A_cm':$scope.hygiene_and_sanitation_10_1_1_A_cm,
				'hygiene_and_sanitation_10_1_1_B':$scope.hygiene_and_sanitation_10_1_1_B, 
				'hygiene_and_sanitation_10_1_1_B_cm':$scope.hygiene_and_sanitation_10_1_1_B_cm,
				'hygiene_and_sanitation_10_1_1_C':$scope.hygiene_and_sanitation_10_1_1_C, 
				'hygiene_and_sanitation_10_1_1_C_cm':$scope.hygiene_and_sanitation_10_1_1_C_cm,
				'hygiene_and_sanitation_10_1_1_D_a':$scope.hygiene_and_sanitation_10_1_1_D_a, 
				'hygiene_and_sanitation_10_1_1_D_a_cm':$scope.hygiene_and_sanitation_10_1_1_D_a_cm,
				'hygiene_and_sanitation_10_1_1_D_b':$scope.hygiene_and_sanitation_10_1_1_D_b, 
				'hygiene_and_sanitation_10_1_1_D_b_cm':$scope.hygiene_and_sanitation_10_1_1_D_b_cm,
				'hygiene_and_sanitation_10_1_1_D_c':$scope.hygiene_and_sanitation_10_1_1_D_c, 
				'hygiene_and_sanitation_10_1_1_D_c_cm':$scope.hygiene_and_sanitation_10_1_1_D_c_cm,
				'hygiene_and_sanitation_10_1_1_D_d':$scope.hygiene_and_sanitation_10_1_1_D_d, 
				'hygiene_and_sanitation_10_1_1_D_d_cm':$scope.hygiene_and_sanitation_10_1_1_D_d_cm,
				'hygiene_and_sanitation_10_1_1_D_e':$scope.hygiene_and_sanitation_10_1_1_D_e, 
				'hygiene_and_sanitation_10_1_1_D_e_cm':$scope.hygiene_and_sanitation_10_1_1_D_e_cm,
				'hygiene_and_sanitation_10_1_1_D_f':$scope.hygiene_and_sanitation_10_1_1_D_f, 
				'hygiene_and_sanitation_10_1_1_D_f_cm':$scope.hygiene_and_sanitation_10_1_1_D_f_cm,
				'hygiene_and_sanitation_10_1_1_E':$scope.hygiene_and_sanitation_10_1_1_E, 
				'hygiene_and_sanitation_10_1_1_E_cm':$scope.hygiene_and_sanitation_10_1_1_E_cm,
				'hygiene_and_sanitation_10_1_1_F':$scope.hygiene_and_sanitation_10_1_1_F, 
				'hygiene_and_sanitation_10_1_1_F_cm':$scope.hygiene_and_sanitation_10_1_1_F_cm,
				'hygiene_and_sanitation_10_1_1_G':$scope.hygiene_and_sanitation_10_1_1_G, 
				'hygiene_and_sanitation_10_1_1_G_cm':$scope.hygiene_and_sanitation_10_1_1_G_cm,
				'hygiene_and_sanitation_10_1_1_H':$scope.hygiene_and_sanitation_10_1_1_H, 
				'hygiene_and_sanitation_10_1_1_H_cm':$scope.hygiene_and_sanitation_10_1_1_H_cm,
				'hygiene_and_sanitation_10_1_1_I_a':$scope.hygiene_and_sanitation_10_1_1_I_a, 
				'hygiene_and_sanitation_10_1_1_I_a_cm':$scope.hygiene_and_sanitation_10_1_1_I_a_cm,
				'hygiene_and_sanitation_10_1_1_I_b':$scope.hygiene_and_sanitation_10_1_1_I_b, 
				'hygiene_and_sanitation_10_1_1_I_b_cm':$scope.hygiene_and_sanitation_10_1_1_I_b_cm,
				'hygiene_and_sanitation_10_1_1_I_c':$scope.hygiene_and_sanitation_10_1_1_I_c, 
				'hygiene_and_sanitation_10_1_1_I_c_cm':$scope.hygiene_and_sanitation_10_1_1_I_c_cm,
				'hygiene_and_sanitation_10_1_1_I_d':$scope.hygiene_and_sanitation_10_1_1_I_d, 
				'hygiene_and_sanitation_10_1_1_I_d_cm':$scope.hygiene_and_sanitation_10_1_1_I_d_cm,
				'hygiene_and_sanitation_10_1_1_I_e':$scope.hygiene_and_sanitation_10_1_1_I_e, 
				'hygiene_and_sanitation_10_1_1_I_e_cm':$scope.hygiene_and_sanitation_10_1_1_I_e_cm,
				'hygiene_and_sanitation_10_1_1_J':$scope.hygiene_and_sanitation_10_1_1_J, 
				'hygiene_and_sanitation_10_1_1_J_cm':$scope.hygiene_and_sanitation_10_1_1_J_cm,
				'hygiene_and_sanitation_10_1_1_K':$scope.hygiene_and_sanitation_10_1_1_K, 
				'hygiene_and_sanitation_10_1_1_K_cm':$scope.hygiene_and_sanitation_10_1_1_K_cm,
				'hygiene_and_sanitation_10_2_1_text':$scope.hygiene_and_sanitation_10_2_1_text,
				'hygiene_and_sanitation_10_2_1_A':$scope.hygiene_and_sanitation_10_2_1_A, 
				'hygiene_and_sanitation_10_2_1_A_cm':$scope.hygiene_and_sanitation_10_2_1_A_cm,
				'hygiene_and_sanitation_10_2_1_B':$scope.hygiene_and_sanitation_10_2_1_B, 
				'hygiene_and_sanitation_10_2_1_B_cm':$scope.hygiene_and_sanitation_10_2_1_B_cm,
				'hygiene_and_sanitation_10_2_1_C':$scope.hygiene_and_sanitation_10_2_1_C, 
				'hygiene_and_sanitation_10_2_1_C_cm':$scope.hygiene_and_sanitation_10_2_1_C_cm,
				'hygiene_and_sanitation_10_2_1_D':$scope.hygiene_and_sanitation_10_2_1_D, 
				'hygiene_and_sanitation_10_2_1_D_cm':$scope.hygiene_and_sanitation_10_2_1_D_cm,
				'hygiene_and_sanitation_10_2_1_E_a':$scope.hygiene_and_sanitation_10_2_1_E_a, 
				'hygiene_and_sanitation_10_2_1_E_a_cm':$scope.hygiene_and_sanitation_10_2_1_E_a_cm,
				'hygiene_and_sanitation_10_2_1_E_b':$scope.hygiene_and_sanitation_10_2_1_E_b, 
				'hygiene_and_sanitation_10_2_1_E_b_cm':$scope.hygiene_and_sanitation_10_2_1_E_b_cm,
				'hygiene_and_sanitation_10_2_1_E_c':$scope.hygiene_and_sanitation_10_2_1_E_c, 
				'hygiene_and_sanitation_10_2_1_E_c_cm':$scope.hygiene_and_sanitation_10_2_1_E_c_cm,
				'hygiene_and_sanitation_10_2_1_E_d':$scope.hygiene_and_sanitation_10_2_1_E_d, 
				'hygiene_and_sanitation_10_2_1_E_d_cm':$scope.hygiene_and_sanitation_10_2_1_E_d_cm,
				'hygiene_and_sanitation_10_2_1_E_e':$scope.hygiene_and_sanitation_10_2_1_E_e, 
				'hygiene_and_sanitation_10_2_1_E_e_cm':$scope.hygiene_and_sanitation_10_2_1_E_e_cm,
				'hygiene_and_sanitation_10_2_1_E_f':$scope.hygiene_and_sanitation_10_2_1_E_f, 
				'hygiene_and_sanitation_10_2_1_E_f_cm':$scope.hygiene_and_sanitation_10_2_1_E_f_cm,
				'hygiene_and_sanitation_10_2_1_E_g':$scope.hygiene_and_sanitation_10_2_1_E_g, 
				'hygiene_and_sanitation_10_2_1_E_g_cm':$scope.hygiene_and_sanitation_10_2_1_E_g_cm,
				'hygiene_and_sanitation_10_2_1_E_h':$scope.hygiene_and_sanitation_10_2_1_E_h, 
				'hygiene_and_sanitation_10_2_1_E_h_cm':$scope.hygiene_and_sanitation_10_2_1_E_h_cm,
				'hygiene_and_sanitation_10_2_1_E_i':$scope.hygiene_and_sanitation_10_2_1_E_i, 
				'hygiene_and_sanitation_10_2_1_E_i_cm':$scope.hygiene_and_sanitation_10_2_1_E_i_cm,
				'hygiene_and_sanitation_10_2_1_F':$scope.hygiene_and_sanitation_10_2_1_F, 
				'hygiene_and_sanitation_10_2_1_F_cm':$scope.hygiene_and_sanitation_10_2_1_F_cm,
				'hygiene_and_sanitation_10_2_1_G':$scope.hygiene_and_sanitation_10_2_1_G, 
				'hygiene_and_sanitation_10_2_1_G_cm':$scope.hygiene_and_sanitation_10_2_1_G_cm,
				'hygiene_and_sanitation_10_2_1_H_a':$scope.hygiene_and_sanitation_10_2_1_H_a, 
				'hygiene_and_sanitation_10_2_1_H_a_cm':$scope.hygiene_and_sanitation_10_2_1_H_a_cm,
				'hygiene_and_sanitation_10_2_1_H_b':$scope.hygiene_and_sanitation_10_2_1_H_b, 
				'hygiene_and_sanitation_10_2_1_H_b_cm':$scope.hygiene_and_sanitation_10_2_1_H_b_cm,
				'hygiene_and_sanitation_10_2_1_H_c':$scope.hygiene_and_sanitation_10_2_1_H_c, 
				'hygiene_and_sanitation_10_2_1_H_c_cm':$scope.hygiene_and_sanitation_10_2_1_H_c_cm,
				'hygiene_and_sanitation_10_2_1_H_d':$scope.hygiene_and_sanitation_10_2_1_H_d, 
				'hygiene_and_sanitation_10_2_1_H_d_cm':$scope.hygiene_and_sanitation_10_2_1_H_d_cm,
				'hygiene_and_sanitation_10_2_1_I':$scope.hygiene_and_sanitation_10_2_1_I, 
				'hygiene_and_sanitation_10_2_1_I_cm':$scope.hygiene_and_sanitation_10_2_1_I_cm,
				'hygiene_and_sanitation_10_2_1_J':$scope.hygiene_and_sanitation_10_2_1_J, 
				'hygiene_and_sanitation_10_2_1_J_cm':$scope.hygiene_and_sanitation_10_2_1_J_cm,
				'hygiene_and_sanitation_10_3_1_text':$scope.hygiene_and_sanitation_10_3_1_text,
				'hygiene_and_sanitation_10_3_1_A':$scope.hygiene_and_sanitation_10_3_1_A, 
				'hygiene_and_sanitation_10_3_1_A_cm':$scope.hygiene_and_sanitation_10_3_1_A_cm,
				'hygiene_and_sanitation_10_3_1_B':$scope.hygiene_and_sanitation_10_3_1_B, 
				'hygiene_and_sanitation_10_3_1_B_cm':$scope.hygiene_and_sanitation_10_3_1_B_cm,
				'hygiene_and_sanitation_10_3_1_C':$scope.hygiene_and_sanitation_10_3_1_C, 
				'hygiene_and_sanitation_10_3_1_C_cm':$scope.hygiene_and_sanitation_10_3_1_C_cm,
				'hygiene_and_sanitation_10_3_1_D':$scope.hygiene_and_sanitation_10_3_1_D, 
				'hygiene_and_sanitation_10_3_1_D_cm':$scope.hygiene_and_sanitation_10_3_1_D_cm,
				'hygiene_and_sanitation_10_3_1_E':$scope.hygiene_and_sanitation_10_3_1_E, 
				'hygiene_and_sanitation_10_3_1_E_cm':$scope.hygiene_and_sanitation_10_3_1_E_cm,
				'hygiene_and_sanitation_10_3_1_F':$scope.hygiene_and_sanitation_10_3_1_F, 
				'hygiene_and_sanitation_10_3_1_F_cm':$scope.hygiene_and_sanitation_10_3_1_F_cm,
				'hygiene_and_sanitation_10_4_1_text':$scope.hygiene_and_sanitation_10_4_1_text,
				'hygiene_and_sanitation_10_4_1_A':$scope.hygiene_and_sanitation_10_4_1_A, 
				'hygiene_and_sanitation_10_4_1_A_cm':$scope.hygiene_and_sanitation_10_4_1_A_cm,
				'hygiene_and_sanitation_10_4_1_B':$scope.hygiene_and_sanitation_10_4_1_B, 
				'hygiene_and_sanitation_10_4_1_B_cm':$scope.hygiene_and_sanitation_10_4_1_B_cm,
				'hygiene_and_sanitation_10_4_1_C':$scope.hygiene_and_sanitation_10_4_1_C, 
				'hygiene_and_sanitation_10_4_1_C_cm':$scope.hygiene_and_sanitation_10_4_1_C_cm,
				'hygiene_and_sanitation_10_5_1_text':$scope.hygiene_and_sanitation_10_5_1_text,
				'hygiene_and_sanitation_10_5_1_A':$scope.hygiene_and_sanitation_10_5_1_A, 
				'hygiene_and_sanitation_10_5_1_A_cm':$scope.hygiene_and_sanitation_10_5_1_A_cm,
				'hygiene_and_sanitation_10_5_1_B':$scope.hygiene_and_sanitation_10_5_1_B, 
				'hygiene_and_sanitation_10_5_1_B_cm':$scope.hygiene_and_sanitation_10_5_1_B_cm,
				'hygiene_and_sanitation_10_6_1_text':$scope.hygiene_and_sanitation_10_6_1_text,
				'hygiene_and_sanitation_10_6_1_A':$scope.hygiene_and_sanitation_10_6_1_A, 
				'hygiene_and_sanitation_10_6_1_A_cm':$scope.hygiene_and_sanitation_10_6_1_A_cm,
				'hygiene_and_sanitation_10_6_1_B_a':$scope.hygiene_and_sanitation_10_6_1_B_a, 
				'hygiene_and_sanitation_10_6_1_B_a_cm':$scope.hygiene_and_sanitation_10_6_1_B_a_cm,
				'hygiene_and_sanitation_10_6_1_B_b':$scope.hygiene_and_sanitation_10_6_1_B_b, 
				'hygiene_and_sanitation_10_6_1_B_b_cm':$scope.hygiene_and_sanitation_10_6_1_B_b_cm,
				'hygiene_and_sanitation_10_6_1_C':$scope.hygiene_and_sanitation_10_6_1_C, 
				'hygiene_and_sanitation_10_6_1_C_cm':$scope.hygiene_and_sanitation_10_6_1_C_cm,
				'hygiene_and_sanitation_10_7_1_text':$scope.hygiene_and_sanitation_10_7_1_text,
				'hygiene_and_sanitation_10_7_1_A':$scope.hygiene_and_sanitation_10_7_1_A, 
				'hygiene_and_sanitation_10_7_1_A_cm':$scope.hygiene_and_sanitation_10_7_1_A_cm,
				'hygiene_and_sanitation_10_7_1_B':$scope.hygiene_and_sanitation_10_7_1_B, 
				'hygiene_and_sanitation_10_7_1_B_cm':$scope.hygiene_and_sanitation_10_7_1_B_cm,
				'safety_and_security_11_1_1_text':$scope.safety_and_security_11_1_1_text,
				'safety_and_security_11_1_1_A':$scope.safety_and_security_11_1_1_A, 
				'safety_and_security_11_1_1_A_cm':$scope.safety_and_security_11_1_1_A_cm,
				'safety_and_security_11_1_1_B':$scope.safety_and_security_11_1_1_B, 
				'safety_and_security_11_1_1_B_cm':$scope.safety_and_security_11_1_1_B_cm,
				'safety_and_security_11_1_1_C':$scope.safety_and_security_11_1_1_C, 
				'safety_and_security_11_1_1_C_cm':$scope.safety_and_security_11_1_1_C_cm,
				'safety_and_security_11_1_1_D':$scope.safety_and_security_11_1_1_D, 
				'safety_and_security_11_1_1_D_cm':$scope.safety_and_security_11_1_1_D_cm,
				'safety_and_security_11_1_1_E_a':$scope.safety_and_security_11_1_1_E_a, 
				'safety_and_security_11_1_1_E_a_cm':$scope.safety_and_security_11_1_1_E_a_cm,
				'safety_and_security_11_1_1_E_b':$scope.safety_and_security_11_1_1_E_b, 
				'safety_and_security_11_1_1_E_b_cm':$scope.safety_and_security_11_1_1_E_b_cm,
				'safety_and_security_11_1_1_E_c':$scope.safety_and_security_11_1_1_E_c, 
				'safety_and_security_11_1_1_E_c_cm':$scope.safety_and_security_11_1_1_E_c_cm,
				'safety_and_security_11_1_1_E_d':$scope.safety_and_security_11_1_1_E_d, 
				'safety_and_security_11_1_1_E_d_cm':$scope.safety_and_security_11_1_1_E_d_cm,
				'safety_and_security_11_1_1_E_e':$scope.safety_and_security_11_1_1_E_e, 
				'safety_and_security_11_1_1_E_e_cm':$scope.safety_and_security_11_1_1_E_e_cm,
				'safety_and_security_11_1_1_E_f':$scope.safety_and_security_11_1_1_E_f, 
				'safety_and_security_11_1_1_E_f_cm':$scope.safety_and_security_11_1_1_E_f_cm,
				'safety_and_security_11_1_1_E_g':$scope.safety_and_security_11_1_1_E_g, 
				'safety_and_security_11_1_1_E_g_cm':$scope.safety_and_security_11_1_1_E_g_cm,
				'safety_and_security_11_1_1_F':$scope.safety_and_security_11_1_1_F, 
				'safety_and_security_11_1_1_F_cm':$scope.safety_and_security_11_1_1_F_cm,
				'safety_and_security_11_1_1_G':$scope.safety_and_security_11_1_1_G, 
				'safety_and_security_11_1_1_G_cm':$scope.safety_and_security_11_1_1_G_cm,
				'safety_and_security_11_1_1_H':$scope.safety_and_security_11_1_1_H, 
				'safety_and_security_11_1_1_H_cm':$scope.safety_and_security_11_1_1_H_cm,
				'safety_and_security_11_1_1_I':$scope.safety_and_security_11_1_1_I, 
				'safety_and_security_11_1_1_I_cm':$scope.safety_and_security_11_1_1_I_cm,
				'safety_and_security_11_2_1_text':$scope.safety_and_security_11_2_1_text,
				'safety_and_security_11_2_1_A':$scope.safety_and_security_11_2_1_A, 
				'safety_and_security_11_2_1_A_cm':$scope.safety_and_security_11_2_1_A_cm,
				'safety_and_security_11_2_1_B':$scope.safety_and_security_11_2_1_B, 
				'safety_and_security_11_2_1_B_cm':$scope.safety_and_security_11_2_1_B_cm,
				'safety_and_security_11_3_1_text':$scope.safety_and_security_11_3_1_text,
				'safety_and_security_11_3_1_A':$scope.safety_and_security_11_3_1_A, 
				'safety_and_security_11_3_1_A_cm':$scope.safety_and_security_11_3_1_A_cm,
				'safety_and_security_11_3_1_B':$scope.safety_and_security_11_3_1_B, 
				'safety_and_security_11_3_1_B_cm':$scope.safety_and_security_11_3_1_B_cm,
				'safety_and_security_11_3_1_C':$scope.safety_and_security_11_3_1_C, 
				'safety_and_security_11_3_1_C_cm':$scope.safety_and_security_11_3_1_C_cm,
				'safety_and_security_11_3_1_D':$scope.safety_and_security_11_3_1_D, 
				'safety_and_security_11_3_1_D_cm':$scope.safety_and_security_11_3_1_D_cm,
				'safety_and_security_11_3_1_E':$scope.safety_and_security_11_3_1_E, 
				'safety_and_security_11_3_1_E_cm':$scope.safety_and_security_11_3_1_E_cm,
				'safety_and_security_11_3_1_F':$scope.safety_and_security_11_3_1_F, 
				'safety_and_security_11_3_1_F_cm':$scope.safety_and_security_11_3_1_F_cm,
				'safety_and_security_11_3_1_G':$scope.safety_and_security_11_3_1_G, 
				'safety_and_security_11_3_1_G_cm':$scope.safety_and_security_11_3_1_G_cm,
				'safety_and_security_11_3_1_H':$scope.safety_and_security_11_3_1_H, 
				'safety_and_security_11_3_1_H_cm':$scope.safety_and_security_11_3_1_H_cm,
				'safety_and_security_11_4_1_text':$scope.safety_and_security_11_4_1_text,
				'safety_and_security_11_4_1_A':$scope.safety_and_security_11_4_1_A, 
				'safety_and_security_11_4_1_A_cm':$scope.safety_and_security_11_4_1_A_cm,
				'safety_and_security_11_4_1_B':$scope.safety_and_security_11_4_1_B, 
				'safety_and_security_11_4_1_B_cm':$scope.safety_and_security_11_4_1_B_cm,
				'safety_and_security_11_4_1_C':$scope.safety_and_security_11_4_1_C, 
				'safety_and_security_11_4_1_C_cm':$scope.safety_and_security_11_4_1_C_cm,
				'safety_and_security_11_5_1_text':$scope.safety_and_security_11_5_1_text,
				'safety_and_security_11_5_1_A':$scope.safety_and_security_11_5_1_A, 
				'safety_and_security_11_5_1_A_cm':$scope.safety_and_security_11_5_1_A_cm,
				'safety_and_security_11_5_1_B':$scope.safety_and_security_11_5_1_B, 
				'safety_and_security_11_5_1_B_cm':$scope.safety_and_security_11_5_1_B_cm,
				'safety_and_security_11_5_1_C':$scope.safety_and_security_11_5_1_C, 
				'safety_and_security_11_5_1_C_cm':$scope.safety_and_security_11_5_1_C_cm,
				'safety_and_security_11_5_1_D':$scope.safety_and_security_11_5_1_D, 
				'safety_and_security_11_5_1_D_cm':$scope.safety_and_security_11_5_1_D_cm,
				'safety_and_security_11_5_1_E':$scope.safety_and_security_11_5_1_E, 
				'safety_and_security_11_5_1_E_cm':$scope.safety_and_security_11_5_1_E_cm,
				'safety_and_security_11_6_1_text':$scope.safety_and_security_11_6_1_text,
				'safety_and_security_11_6_1_A':$scope.safety_and_security_11_6_1_A, 
				'safety_and_security_11_6_1_A_cm':$scope.safety_and_security_11_6_1_A_cm,
				'safety_and_security_11_6_1_B':$scope.safety_and_security_11_6_1_B, 
				'safety_and_security_11_6_1_B_cm':$scope.safety_and_security_11_6_1_B_cm,
				'safety_and_security_11_6_1_C':$scope.safety_and_security_11_6_1_C, 
				'safety_and_security_11_6_1_C_cm':$scope.safety_and_security_11_6_1_C_cm,
				'sundry_services_12_1_1_text':$scope.sundry_services_12_1_1_text,
				'sundry_services_12_1_1_A':$scope.sundry_services_12_1_1_A, 
				'sundry_services_12_1_1_A_cm':$scope.sundry_services_12_1_1_A_cm,
				'sundry_services_12_1_1_B':$scope.sundry_services_12_1_1_B, 
				'sundry_services_12_1_1_B_cm':$scope.sundry_services_12_1_1_B_cm,
				'sundry_services_12_1_1_C':$scope.sundry_services_12_1_1_C, 
				'sundry_services_12_1_1_C_cm':$scope.sundry_services_12_1_1_C_cm,
				'sundry_services_12_2_1_text':$scope.sundry_services_12_2_1_text,
				'sundry_services_12_2_1_A':$scope.sundry_services_12_2_1_A, 
				'sundry_services_12_2_1_A_cm':$scope.sundry_services_12_2_1_A_cm,
				'sundry_services_12_3_1_text':$scope.sundry_services_12_3_1_text,
				'sundry_services_12_3_1_A':$scope.sundry_services_12_3_1_A, 
				'sundry_services_12_3_1_A_cm':$scope.sundry_services_12_3_1_A_cm,
				'sundry_services_12_4_1_text':$scope.sundry_services_12_4_1_text,
				'sundry_services_12_4_1_A':$scope.sundry_services_12_4_1_A, 
				'sundry_services_12_4_1_A_cm':$scope.sundry_services_12_4_1_A_cm,
				'sundry_services_12_4_1_B':$scope.sundry_services_12_4_1_B, 
				'sundry_services_12_4_1_B_cm':$scope.sundry_services_12_4_1_B_cm,
				'sundry_services_12_4_1_C':$scope.sundry_services_12_4_1_C, 
				'sundry_services_12_4_1_C_cm':$scope.sundry_services_12_4_1_C_cm,
				'sundry_services_12_4_1_D':$scope.sundry_services_12_4_1_D, 
				'sundry_services_12_4_1_D_cm':$scope.sundry_services_12_4_1_D_cm,
				'human_resources_13_1_1_text':$scope.human_resources_13_1_1_text,
				'human_resources_13_1_1_A':$scope.human_resources_13_1_1_A, 
				'human_resources_13_1_1_A_cm':$scope.human_resources_13_1_1_A_cm,
				'human_resources_13_1_1_B':$scope.human_resources_13_1_1_B, 
				'human_resources_13_1_1_B_cm':$scope.human_resources_13_1_1_B_cm,
				'human_resources_13_1_1_C':$scope.human_resources_13_1_1_C, 
				'human_resources_13_1_1_C_cm':$scope.human_resources_13_1_1_C_cm,
				'human_resources_13_1_1_D':$scope.human_resources_13_1_1_D, 
				'human_resources_13_1_1_D_cm':$scope.human_resources_13_1_1_D_cm,
				'human_resources_13_1_1_E_a':$scope.human_resources_13_1_1_E_a, 
				'human_resources_13_1_1_E_a_cm':$scope.human_resources_13_1_1_E_a_cm,
				'human_resources_13_1_1_E_b':$scope.human_resources_13_1_1_E_b, 
				'human_resources_13_1_1_E_b_cm':$scope.human_resources_13_1_1_E_b_cm,
				'human_resources_13_1_1_E_c':$scope.human_resources_13_1_1_E_c, 
				'human_resources_13_1_1_E_c_cm':$scope.human_resources_13_1_1_E_c_cm,
				'human_resources_13_1_1_E_d':$scope.human_resources_13_1_1_E_d, 
				'human_resources_13_1_1_E_d_cm':$scope.human_resources_13_1_1_E_d_cm,
				'human_resources_13_1_1_E_e':$scope.human_resources_13_1_1_E_e, 
				'human_resources_13_1_1_E_e_cm':$scope.human_resources_13_1_1_E_e_cm,
				'human_resources_13_2_1_text':$scope.human_resources_13_2_1_text,
				'human_resources_13_2_1_A':$scope.human_resources_13_2_1_A, 
				'human_resources_13_2_1_A_cm':$scope.human_resources_13_2_1_A_cm,
				'human_resources_13_2_1_B':$scope.human_resources_13_2_1_B, 
				'human_resources_13_2_1_B_cm':$scope.human_resources_13_2_1_B_cm,
				'human_resources_13_3_1_text':$scope.human_resources_13_3_1_text,
				'human_resources_13_3_1_A':$scope.human_resources_13_3_1_A, 
				'human_resources_13_3_1_A_cm':$scope.human_resources_13_3_1_A_cm,
				'human_resources_13_3_1_B':$scope.human_resources_13_3_1_B, 
				'human_resources_13_3_1_B_cm':$scope.human_resources_13_3_1_B_cm,
				'human_resources_13_4_1_text':$scope.human_resources_13_4_1_text,
				'human_resources_13_4_1_A_a':$scope.human_resources_13_4_1_A_a, 
				'human_resources_13_4_1_A_a_cm':$scope.human_resources_13_4_1_A_a_cm,
				'human_resources_13_4_1_A_b':$scope.human_resources_13_4_1_A_b, 
				'human_resources_13_4_1_A_b_cm':$scope.human_resources_13_4_1_A_b_cm,
				'human_resources_13_4_1_A_c':$scope.human_resources_13_4_1_A_c, 
				'human_resources_13_4_1_A_c_cm':$scope.human_resources_13_4_1_A_c_cm,
				'human_resources_13_4_1_B_a':$scope.human_resources_13_4_1_B_a, 
				'human_resources_13_4_1_B_a_cm':$scope.human_resources_13_4_1_B_a_cm,
				'human_resources_13_4_1_B_b':$scope.human_resources_13_4_1_B_b, 
				'human_resources_13_4_1_B_b_cm':$scope.human_resources_13_4_1_B_b_cm,
				'human_resources_13_4_1_B_c':$scope.human_resources_13_4_1_B_c, 
				'human_resources_13_4_1_B_c_cm':$scope.human_resources_13_4_1_B_c_cm,
				'human_resources_13_4_1_C_a':$scope.human_resources_13_4_1_C_a, 
				'human_resources_13_4_1_C_a_cm':$scope.human_resources_13_4_1_C_a_cm,
				'human_resources_13_4_1_C_b':$scope.human_resources_13_4_1_C_b, 
				'human_resources_13_4_1_C_b_cm':$scope.human_resources_13_4_1_C_b_cm,
				'human_resources_13_4_1_C_c':$scope.human_resources_13_4_1_C_c, 
				'human_resources_13_4_1_C_c_cm':$scope.human_resources_13_4_1_C_c_cm,
				'human_resources_13_5_1_text':$scope.human_resources_13_5_1_text,
				'human_resources_13_5_1_A':$scope.human_resources_13_5_1_A, 
				'human_resources_13_5_1_A_cm':$scope.human_resources_13_5_1_A_cm,
				'human_resources_13_6_1_text':$scope.human_resources_13_6_1_text,
				'human_resources_13_6_1_A':$scope.human_resources_13_6_1_A, 
				'human_resources_13_6_1_A_cm':$scope.human_resources_13_6_1_A_cm,
				'human_resources_13_6_1_B':$scope.human_resources_13_6_1_B, 
				'human_resources_13_6_1_B_cm':$scope.human_resources_13_6_1_B_cm,
				'human_resources_13_6_1_C':$scope.human_resources_13_6_1_C, 
				'human_resources_13_6_1_C_cm':$scope.human_resources_13_6_1_C_cm,
				'human_resources_13_6_1_D':$scope.human_resources_13_6_1_D, 
				'human_resources_13_6_1_D_cm':$scope.human_resources_13_6_1_D_cm,
				'human_resources_13_7_1_text':$scope.human_resources_13_7_1_text,
				'human_resources_13_7_1_A':$scope.human_resources_13_7_1_A, 
				'human_resources_13_7_1_A_cm':$scope.human_resources_13_7_1_A_cm,
				'human_resources_13_7_1_B':$scope.human_resources_13_7_1_B, 
				'human_resources_13_7_1_B_cm':$scope.human_resources_13_7_1_B_cm,
				'human_resources_13_7_1_C':$scope.human_resources_13_7_1_C, 
				'human_resources_13_7_1_C_cm':$scope.human_resources_13_7_1_C_cm,
				'human_resources_13_7_1_D':$scope.human_resources_13_7_1_D, 
				'human_resources_13_7_1_D_cm':$scope.human_resources_13_7_1_D_cm,
				'human_resources_13_7_1_E':$scope.human_resources_13_7_1_E, 
				'human_resources_13_7_1_E_cm':$scope.human_resources_13_7_1_E_cm,
				'human_resources_13_7_1_F_a':$scope.human_resources_13_7_1_F_a, 
				'human_resources_13_7_1_F_a_cm':$scope.human_resources_13_7_1_F_a_cm,
				'human_resources_13_7_1_F_b':$scope.human_resources_13_7_1_F_b, 
				'human_resources_13_7_1_F_b_cm':$scope.human_resources_13_7_1_F_b_cm,
				'human_resources_13_8_1_text':$scope.human_resources_13_8_1_text,
				'human_resources_13_8_1_A':$scope.human_resources_13_8_1_A, 
				'human_resources_13_8_1_A_cm':$scope.human_resources_13_8_1_A_cm,
				'human_resources_13_8_1_B':$scope.human_resources_13_8_1_B, 
				'human_resources_13_8_1_B_cm':$scope.human_resources_13_8_1_B_cm,
				'human_resources_13_8_1_C':$scope.human_resources_13_8_1_C, 
				'human_resources_13_8_1_C_cm':$scope.human_resources_13_8_1_C_cm,
				'general_14_1_1_text':$scope.general_14_1_1_text,
				'general_14_1_1_A':$scope.general_14_1_1_A, 
				'general_14_1_1_A_cm':$scope.general_14_1_1_A_cm,
				'general_14_2_1_text':$scope.general_14_2_1_text,
				'general_14_2_1_A':$scope.general_14_2_1_A, 
				'general_14_2_1_A_cm':$scope.general_14_2_1_A_cm,
				'general_14_3_1_text':$scope.general_14_3_1_text,
				'general_14_3_1_A':$scope.general_14_3_1_A, 
				'general_14_3_1_A_cm':$scope.general_14_3_1_A_cm,
				'general_14_3_1_B_a':$scope.general_14_3_1_B_a, 
				'general_14_3_1_B_a_cm':$scope.general_14_3_1_B_a_cm,
				'general_14_3_1_B_b':$scope.general_14_3_1_B_b, 
				'general_14_3_1_B_b_cm':$scope.general_14_3_1_B_b_cm,
				'general_14_3_1_B_c':$scope.general_14_3_1_B_c, 
				'general_14_3_1_B_c_cm':$scope.general_14_3_1_B_c_cm,
				'general_14_3_1_B_d':$scope.general_14_3_1_B_d, 
				'general_14_3_1_B_d_cm':$scope.general_14_3_1_B_d_cm,
				'general_14_3_1_B_e':$scope.general_14_3_1_B_e, 
				'general_14_3_1_B_e_cm':$scope.general_14_3_1_B_e_cm,
				'general_14_3_1_C':$scope.general_14_3_1_C, 
				'general_14_3_1_C_cm':$scope.general_14_3_1_C_cm,
				'general_14_4_1_text':$scope.general_14_4_1_text,
				'general_14_4_1_A':$scope.general_14_4_1_A, 
				'general_14_4_1_A_cm':$scope.general_14_4_1_A_cm,
				'general_14_4_1_B':$scope.general_14_4_1_B, 
				'general_14_4_1_B_cm':$scope.general_14_4_1_B_cm,
				'general_14_5_1_text':$scope.general_14_5_1_text,
				'general_14_5_1_A':$scope.general_14_5_1_A, 
				'general_14_5_1_A_cm':$scope.general_14_5_1_A_cm,
				'general_14_5_1_B':$scope.general_14_5_1_B, 
				'general_14_5_1_B_cm':$scope.general_14_5_1_B_cm,
				'general_14_6_1_text':$scope.general_14_6_1_text,
				'general_14_6_1_A':$scope.general_14_6_1_A, 
				'general_14_6_1_A_cm':$scope.general_14_6_1_A_cm,
				'general_14_6_1_B':$scope.general_14_6_1_B, 
				'general_14_6_1_B_cm':$scope.general_14_6_1_B_cm,
				'general_14_7_1_text':$scope.general_14_7_1_text,
				'general_14_7_1_A':$scope.general_14_7_1_A, 
				'general_14_7_1_A_cm':$scope.general_14_7_1_A_cm,
				'general_14_7_1_B':$scope.general_14_7_1_B, 
				'general_14_7_1_B_cm':$scope.general_14_7_1_B_cm,
				'general_14_7_1_C':$scope.general_14_7_1_C, 
				'general_14_7_1_C_cm':$scope.general_14_7_1_C_cm,
				'general_14_8_1_text':$scope.general_14_8_1_text,
				'general_14_8_1_A':$scope.general_14_8_1_A, 
				'general_14_8_1_A_cm':$scope.general_14_8_1_A_cm,
				'general_14_8_1_B':$scope.general_14_8_1_B, 
				'general_14_8_1_B_cm':$scope.general_14_8_1_B_cm,
				'general_14_8_1_C_a':$scope.general_14_8_1_C_a, 
				'general_14_8_1_C_a_cm':$scope.general_14_8_1_C_a_cm,
				'general_14_8_1_C_b':$scope.general_14_8_1_C_b, 
				'general_14_8_1_C_b_cm':$scope.general_14_8_1_C_b_cm,
				'general_14_8_1_C_c':$scope.general_14_8_1_C_c, 
				'general_14_8_1_C_c_cm':$scope.general_14_8_1_C_c_cm,
				'general_14_8_1_C_d':$scope.general_14_8_1_C_d, 
				'general_14_8_1_C_d_cm':$scope.general_14_8_1_C_d_cm,
				'general_14_8_1_C_e':$scope.general_14_8_1_C_e, 
				'general_14_8_1_C_e_cm':$scope.general_14_8_1_C_e_cm,
				'general_14_8_1_D':$scope.general_14_8_1_D, 
				'general_14_8_1_D_cm':$scope.general_14_8_1_D_cm,
				'general_14_8_1_E':$scope.general_14_8_1_E, 
				'general_14_8_1_E_cm':$scope.general_14_8_1_E_cm,
				'general_14_8_1_F':$scope.general_14_8_1_F, 
				'general_14_8_1_F_cm':$scope.general_14_8_1_F_cm,
				'general_14_8_1_G':$scope.general_14_8_1_G, 
				'general_14_8_1_G_cm':$scope.general_14_8_1_G_cm,
				'general_14_9_1_text':$scope.general_14_9_1_text,
				'general_14_9_1_A':$scope.general_14_9_1_A, 
				'general_14_9_1_A_cm':$scope.general_14_9_1_A_cm,
				'general_14_9_1_B':$scope.general_14_9_1_B, 
				'general_14_9_1_B_cm':$scope.general_14_9_1_B_cm,
								
								
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
			$scope.show_asteric_motel = ''; 
			$scope.status_success_message = 'Saved!';
			$scope.action = 'edit_record';
			$scope.assessment_id = data.assessment_id;
			$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
			$scope.fetchData_after_changes(); //direct access from assessment panel
			$scope.fetch_assessment_sheets_links();			
			$scope.fetchStatus();
				$timeout(function()
				{ 
					if($scope.from_save_motel =='save_and_exit')
					{ 
					$scope.close_assessment_sheet_for_motel(); $scope.close_funika_kurasa_with_status(); $scope.from_save_motel = ''; 
					}
					else
					{ 
					$scope.close_funika_kurasa_with_status();
					}
				}, 3000);
			}

		});		
	};
	

	$scope.futa_radio_check_values_motel = function(){
		//LOCATION 1.0
		$scope.location_1_0_1_A='';
		$scope.location_1_0_1_A_cm ='';
		$scope.location_1_0_1_B='';
		$scope.location_1_0_1_B_cm ='';
		$scope.location_1_1_1_A='';
		$scope.location_1_1_1_A_cm ='';
		$scope.location_1_1_2_A='';
		$scope.location_1_1_2_A_cm ='';
		$scope.location_1_1_3_A='';
		$scope.location_1_1_3_A_cm ='';
		$scope.location_1_1_3_B_a='';
		$scope.location_1_1_3_B_a_cm ='';
		$scope.location_1_1_3_B_b='';
		$scope.location_1_1_3_B_b_cm ='';
		$scope.location_1_1_3_B_c='';
		$scope.location_1_1_3_B_c_cm ='';
		$scope.location_1_1_3_B_d='';
		$scope.location_1_1_3_B_d_cm ='';
		$scope.location_1_1_4_A='';
		$scope.location_1_1_4_A_cm ='';
		$scope.location_1_1_4_B='';
		$scope.location_1_1_4_B_cm ='';
		$scope.location_1_1_4_C='';
		$scope.location_1_1_4_C_cm ='';
		$scope.location_1_1_5_A='';
		$scope.location_1_1_5_A_cm ='';
		$scope.location_1_1_5_B='';
		$scope.location_1_1_5_B_cm ='';
		$scope.location_1_1_5_C='';
		$scope.location_1_1_5_C_cm ='';
		$scope.location_1_1_5_D='';
		$scope.location_1_1_5_D_cm ='';
		$scope.location_1_2_1_A='';
		$scope.location_1_2_1_A_cm ='';
		$scope.building_2_1_1_A='';
		$scope.building_2_1_1_A_cm ='';
		$scope.building_2_1_2_A='';
		$scope.building_2_1_2_A_cm ='';
		$scope.building_2_2_1_A='';
		$scope.building_2_2_1_A_cm ='';
		$scope.building_2_2_1_B='';
		$scope.building_2_2_1_B_cm ='';
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
		$scope.building_2_2_2_G='';
		$scope.building_2_2_2_G_cm ='';
		$scope.building_2_3_1_A='';
		$scope.building_2_3_1_A_cm ='';
		$scope.building_2_4_1_A='';
		$scope.building_2_4_1_A_cm ='';
		$scope.building_2_4_1_B='';
		$scope.building_2_4_1_B_cm ='';
		$scope.building_2_4_1_C='';
		$scope.building_2_4_1_C_cm ='';
		$scope.building_2_4_1_D='';
		$scope.building_2_4_1_D_cm ='';
		$scope.building_2_4_1_E='';
		$scope.building_2_4_1_E_cm ='';
		$scope.building_2_4_1_F='';
		$scope.building_2_4_1_F_cm ='';
		$scope.building_2_4_1_G='';
		$scope.building_2_4_1_G_cm ='';
		$scope.building_2_4_1_H='';
		$scope.building_2_4_1_H_cm ='';
		$scope.building_2_4_1_I='';
		$scope.building_2_4_1_I_cm ='';
		$scope.building_2_4_1_J='';
		$scope.building_2_4_1_J_cm ='';
		$scope.front_office_3_1_1_A='';
		$scope.front_office_3_1_1_A_cm ='';
		$scope.front_office_3_1_1_B='';
		$scope.front_office_3_1_1_B_cm ='';
		$scope.front_office_3_1_1_C='';
		$scope.front_office_3_1_1_C_cm ='';
		$scope.front_office_3_1_1_D='';
		$scope.front_office_3_1_1_D_cm ='';
		$scope.front_office_3_1_2_A='';
		$scope.front_office_3_1_2_A_cm ='';
		$scope.front_office_3_1_2_B='';
		$scope.front_office_3_1_2_B_cm ='';
		$scope.front_office_3_1_2_C='';
		$scope.front_office_3_1_2_C_cm ='';
		$scope.front_office_3_1_2_D='';
		$scope.front_office_3_1_2_D_cm ='';
		$scope.front_office_3_1_2_E='';
		$scope.front_office_3_1_2_E_cm ='';
		$scope.front_office_3_1_2_F='';
		$scope.front_office_3_1_2_F_cm ='';
		$scope.front_office_3_2_1_A='';
		$scope.front_office_3_2_1_A_cm ='';
		$scope.front_office_3_2_1_B_a='';
		$scope.front_office_3_2_1_B_a_cm ='';
		$scope.front_office_3_2_1_B_b='';
		$scope.front_office_3_2_1_B_b_cm ='';
		$scope.front_office_3_2_1_B_c='';
		$scope.front_office_3_2_1_B_c_cm ='';
		$scope.front_office_3_2_1_C_a='';
		$scope.front_office_3_2_1_C_a_cm ='';
		$scope.front_office_3_2_1_C_b='';
		$scope.front_office_3_2_1_C_b_cm ='';
		$scope.front_office_3_2_1_C_c='';
		$scope.front_office_3_2_1_C_c_cm ='';
		$scope.front_office_3_2_1_D_a='';
		$scope.front_office_3_2_1_D_a_cm ='';
		$scope.front_office_3_2_1_D_b='';
		$scope.front_office_3_2_1_D_b_cm ='';
		$scope.front_office_3_2_1_D_c='';
		$scope.front_office_3_2_1_D_c_cm ='';
		$scope.front_office_3_2_1_D_d='';
		$scope.front_office_3_2_1_D_d_cm ='';
		$scope.front_office_3_3_1_A='';
		$scope.front_office_3_3_1_A_cm ='';
		$scope.front_office_3_3_1_B='';
		$scope.front_office_3_3_1_B_cm ='';
		$scope.front_office_3_4_1_A_a='';
		$scope.front_office_3_4_1_A_a_cm ='';
		$scope.front_office_3_4_1_A_b='';
		$scope.front_office_3_4_1_A_b_cm ='';
		$scope.front_office_3_4_1_A_c='';
		$scope.front_office_3_4_1_A_c_cm ='';
		$scope.front_office_3_4_1_A_d='';
		$scope.front_office_3_4_1_A_d_cm ='';
		$scope.front_office_3_5_1_A='';
		$scope.front_office_3_5_1_A_cm ='';
		$scope.front_office_3_5_1_B='';
		$scope.front_office_3_5_1_B_cm ='';
		$scope.front_office_3_5_1_C='';
		$scope.front_office_3_5_1_C_cm ='';
		$scope.front_office_3_6_1_A='';
		$scope.front_office_3_6_1_A_cm ='';
		$scope.front_office_3_6_1_B='';
		$scope.front_office_3_6_1_B_cm ='';
		$scope.front_office_3_7_1_A_a='';
		$scope.front_office_3_7_1_A_a_cm ='';
		$scope.front_office_3_7_1_A_b='';
		$scope.front_office_3_7_1_A_b_cm ='';
		$scope.front_office_3_7_1_A_c='';
		$scope.front_office_3_7_1_A_c_cm ='';
		$scope.front_office_3_7_1_B_a='';
		$scope.front_office_3_7_1_B_a_cm ='';
		$scope.front_office_3_7_1_B_b='';
		$scope.front_office_3_7_1_B_b_cm ='';
		$scope.front_office_3_7_1_B_c='';
		$scope.front_office_3_7_1_B_c_cm ='';
		$scope.front_office_3_8_1_A='';
		$scope.front_office_3_8_1_A_cm ='';
		$scope.front_office_3_8_1_B='';
		$scope.front_office_3_8_1_B_cm ='';
		$scope.front_office_3_8_1_C='';
		$scope.front_office_3_8_1_C_cm ='';
		$scope.front_office_3_8_1_D='';
		$scope.front_office_3_8_1_D_cm ='';
		$scope.front_office_3_8_1_E='';
		$scope.front_office_3_8_1_E_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_A='';
		$scope.lobby_lounge_other_public_areas_4_0_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_B='';
		$scope.lobby_lounge_other_public_areas_4_0_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_C='';
		$scope.lobby_lounge_other_public_areas_4_0_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_D='';
		$scope.lobby_lounge_other_public_areas_4_0_1_D_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_E='';
		$scope.lobby_lounge_other_public_areas_4_0_1_E_cm ='';
		$scope.lobby_lounge_other_public_areas_4_0_1_F='';
		$scope.lobby_lounge_other_public_areas_4_0_1_F_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_A='';
		$scope.lobby_lounge_other_public_areas_4_1_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_a='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_b='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_c='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_c_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_d='';
		$scope.lobby_lounge_other_public_areas_4_1_1_B_d_cm ='';
		$scope.lobby_lounge_other_public_areas_4_1_1_C='';
		$scope.lobby_lounge_other_public_areas_4_1_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_A='';
		$scope.lobby_lounge_other_public_areas_4_2_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_B='';
		$scope.lobby_lounge_other_public_areas_4_2_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_C='';
		$scope.lobby_lounge_other_public_areas_4_2_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_D_a='';
		$scope.lobby_lounge_other_public_areas_4_2_1_D_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_D_b='';
		$scope.lobby_lounge_other_public_areas_4_2_1_D_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_E='';
		$scope.lobby_lounge_other_public_areas_4_2_1_E_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_F='';
		$scope.lobby_lounge_other_public_areas_4_2_1_F_cm ='';
		$scope.lobby_lounge_other_public_areas_4_2_1_G='';
		$scope.lobby_lounge_other_public_areas_4_2_1_G_cm ='';
		$scope.lobby_lounge_other_public_areas_4_3_1_A='';
		$scope.lobby_lounge_other_public_areas_4_3_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_3_1_B='';
		$scope.lobby_lounge_other_public_areas_4_3_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_A='';
		$scope.lobby_lounge_other_public_areas_4_4_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_B='';
		$scope.lobby_lounge_other_public_areas_4_4_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_C='';
		$scope.lobby_lounge_other_public_areas_4_4_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_D='';
		$scope.lobby_lounge_other_public_areas_4_4_1_D_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_E='';
		$scope.lobby_lounge_other_public_areas_4_4_1_E_cm ='';
		$scope.lobby_lounge_other_public_areas_4_4_1_F='';
		$scope.lobby_lounge_other_public_areas_4_4_1_F_cm ='';
		$scope.lobby_lounge_other_public_areas_4_5_1_A='';
		$scope.lobby_lounge_other_public_areas_4_5_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_5_1_B='';
		$scope.lobby_lounge_other_public_areas_4_5_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_5_1_C='';
		$scope.lobby_lounge_other_public_areas_4_5_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_A='';
		$scope.lobby_lounge_other_public_areas_4_6_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_a='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_b='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_c='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_c_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_d='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_d_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_e='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_e_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_f='';
		$scope.lobby_lounge_other_public_areas_4_6_1_B_f_cm ='';
		$scope.lobby_lounge_other_public_areas_4_6_1_C='';
		$scope.lobby_lounge_other_public_areas_4_6_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_A='';
		$scope.lobby_lounge_other_public_areas_4_7_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_a='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_b='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_c='';
		$scope.lobby_lounge_other_public_areas_4_7_1_B_c_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_a='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_b='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_c='';
		$scope.lobby_lounge_other_public_areas_4_7_1_C_c_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_a='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_a_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_b='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_b_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_c='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_c_cm ='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_d='';
		$scope.lobby_lounge_other_public_areas_4_7_1_D_d_cm ='';
		$scope.lobby_lounge_other_public_areas_4_8_1_A='';
		$scope.lobby_lounge_other_public_areas_4_8_1_A_cm ='';
		$scope.lobby_lounge_other_public_areas_4_8_1_B='';
		$scope.lobby_lounge_other_public_areas_4_8_1_B_cm ='';
		$scope.lobby_lounge_other_public_areas_4_8_1_C='';
		$scope.lobby_lounge_other_public_areas_4_8_1_C_cm ='';
		$scope.lobby_lounge_other_public_areas_4_8_1_D='';
		$scope.lobby_lounge_other_public_areas_4_8_1_D_cm ='';
		$scope.lobby_lounge_other_public_areas_4_9_1_A='';
		$scope.lobby_lounge_other_public_areas_4_9_1_A_cm ='';
		$scope.restaurants_5_1_1_A='';
		$scope.restaurants_5_1_1_A_cm ='';
		$scope.restaurants_5_1_1_B='';
		$scope.restaurants_5_1_1_B_cm ='';
		$scope.restaurants_5_1_1_C='';
		$scope.restaurants_5_1_1_C_cm ='';
		$scope.restaurants_5_2_1_A='';
		$scope.restaurants_5_2_1_A_cm ='';
		$scope.restaurants_5_2_1_B='';
		$scope.restaurants_5_2_1_B_cm ='';
		$scope.restaurants_5_2_1_C='';
		$scope.restaurants_5_2_1_C_cm ='';
		$scope.restaurants_5_2_1_D='';
		$scope.restaurants_5_2_1_D_cm ='';
		$scope.restaurants_5_2_1_E='';
		$scope.restaurants_5_2_1_E_cm ='';
		$scope.restaurants_5_2_1_F='';
		$scope.restaurants_5_2_1_F_cm ='';
		$scope.restaurants_5_2_1_G='';
		$scope.restaurants_5_2_1_G_cm ='';
		$scope.restaurants_5_2_1_H='';
		$scope.restaurants_5_2_1_H_cm ='';
		$scope.restaurants_5_3_1_A='';
		$scope.restaurants_5_3_1_A_cm ='';
		$scope.restaurants_5_3_1_B='';
		$scope.restaurants_5_3_1_B_cm ='';
		$scope.restaurants_5_3_1_C='';
		$scope.restaurants_5_3_1_C_cm ='';
		$scope.restaurants_5_4_1_A='';
		$scope.restaurants_5_4_1_A_cm ='';
		$scope.restaurants_5_4_1_B='';
		$scope.restaurants_5_4_1_B_cm ='';
		$scope.restaurants_5_4_1_C='';
		$scope.restaurants_5_4_1_C_cm ='';
		$scope.restaurants_5_4_1_D='';
		$scope.restaurants_5_4_1_D_cm ='';
		$scope.restaurants_5_4_1_E='';
		$scope.restaurants_5_4_1_E_cm ='';
		$scope.restaurants_5_5_1_A='';
		$scope.restaurants_5_5_1_A_cm ='';
		$scope.restaurants_5_5_1_B='';
		$scope.restaurants_5_5_1_B_cm ='';
		$scope.restaurants_5_5_1_C='';
		$scope.restaurants_5_5_1_C_cm ='';
		$scope.restaurants_5_5_1_D='';
		$scope.restaurants_5_5_1_D_cm ='';
		$scope.restaurants_5_5_1_E_a='';
		$scope.restaurants_5_5_1_E_a_cm ='';
		$scope.restaurants_5_5_1_E_b='';
		$scope.restaurants_5_5_1_E_b_cm ='';
		$scope.restaurants_5_5_1_E_c='';
		$scope.restaurants_5_5_1_E_c_cm ='';
		$scope.restaurants_5_5_1_E_d='';
		$scope.restaurants_5_5_1_E_d_cm ='';
		$scope.restaurants_5_5_1_F='';
		$scope.restaurants_5_5_1_F_cm ='';
		$scope.restaurants_5_5_1_G_a='';
		$scope.restaurants_5_5_1_G_a_cm ='';
		$scope.restaurants_5_5_1_G_b='';
		$scope.restaurants_5_5_1_G_b_cm ='';
		$scope.restaurants_5_5_1_G_c='';
		$scope.restaurants_5_5_1_G_c_cm ='';
		$scope.restaurants_5_5_1_H='';
		$scope.restaurants_5_5_1_H_cm ='';
		$scope.restaurants_5_5_1_I='';
		$scope.restaurants_5_5_1_I_cm ='';
		$scope.restaurants_5_6_1_A='';
		$scope.restaurants_5_6_1_A_cm ='';
		$scope.restaurants_5_6_1_B='';
		$scope.restaurants_5_6_1_B_cm ='';
		$scope.restaurants_5_6_1_C='';
		$scope.restaurants_5_6_1_C_cm ='';
		$scope.restaurants_5_6_1_D='';
		$scope.restaurants_5_6_1_D_cm ='';
		$scope.restaurants_5_7_1_A='';
		$scope.restaurants_5_7_1_A_cm ='';
		$scope.restaurants_5_7_1_B='';
		$scope.restaurants_5_7_1_B_cm ='';
		$scope.restaurants_5_7_1_C='';
		$scope.restaurants_5_7_1_C_cm ='';
		$scope.restaurants_5_8_1_A='';
		$scope.restaurants_5_8_1_A_cm ='';
		$scope.restaurants_5_8_1_B='';
		$scope.restaurants_5_8_1_B_cm ='';
		$scope.bar_6_1_1_A='';
		$scope.bar_6_1_1_A_cm ='';
		$scope.bar_6_1_1_B_a='';
		$scope.bar_6_1_1_B_a_cm ='';
		$scope.bar_6_1_1_B_b='';
		$scope.bar_6_1_1_B_b_cm ='';
		$scope.bar_6_1_1_B_c='';
		$scope.bar_6_1_1_B_c_cm ='';
		$scope.bar_6_1_1_C='';
		$scope.bar_6_1_1_C_cm ='';
		$scope.bar_6_1_1_D_a='';
		$scope.bar_6_1_1_D_a_cm ='';
		$scope.bar_6_1_1_D_b='';
		$scope.bar_6_1_1_D_b_cm ='';
		$scope.bar_6_1_1_D_c='';
		$scope.bar_6_1_1_D_c_cm ='';
		$scope.bar_6_1_1_E='';
		$scope.bar_6_1_1_E_cm ='';
		$scope.bar_6_1_1_F='';
		$scope.bar_6_1_1_F_cm ='';
		$scope.bar_6_1_1_G='';
		$scope.bar_6_1_1_G_cm ='';
		$scope.bar_6_2_1_A='';
		$scope.bar_6_2_1_A_cm ='';
		$scope.bar_6_2_1_B='';
		$scope.bar_6_2_1_B_cm ='';
		$scope.bar_6_2_1_C='';
		$scope.bar_6_2_1_C_cm ='';
		$scope.bar_6_2_1_D='';
		$scope.bar_6_2_1_D_cm ='';
		$scope.bar_6_2_1_E='';
		$scope.bar_6_2_1_E_cm ='';
		$scope.bar_6_2_1_F='';
		$scope.bar_6_2_1_F_cm ='';
		$scope.bar_6_2_1_G='';
		$scope.bar_6_2_1_G_cm ='';
		$scope.bar_6_2_1_H='';
		$scope.bar_6_2_1_H_cm ='';
		$scope.bar_6_2_1_I='';
		$scope.bar_6_2_1_I_cm ='';
		$scope.bar_6_2_1_J='';
		$scope.bar_6_2_1_J_cm ='';
		$scope.bar_6_3_1_A='';
		$scope.bar_6_3_1_A_cm ='';
		$scope.bar_6_3_1_B='';
		$scope.bar_6_3_1_B_cm ='';
		$scope.bar_6_3_1_C='';
		$scope.bar_6_3_1_C_cm ='';
		$scope.bar_6_3_1_D='';
		$scope.bar_6_3_1_D_cm ='';
		$scope.bar_6_4_1_A='';
		$scope.bar_6_4_1_A_cm ='';
		$scope.bar_6_4_1_B='';
		$scope.bar_6_4_1_B_cm ='';
		$scope.bar_6_4_1_C='';
		$scope.bar_6_4_1_C_cm ='';
		$scope.bar_6_4_1_D='';
		$scope.bar_6_4_1_D_cm ='';
		$scope.bar_6_4_1_E_a='';
		$scope.bar_6_4_1_E_a_cm ='';
		$scope.bar_6_4_1_E_b='';
		$scope.bar_6_4_1_E_b_cm ='';
		$scope.bar_6_4_1_E_c='';
		$scope.bar_6_4_1_E_c_cm ='';
		$scope.bar_6_4_1_E_d='';
		$scope.bar_6_4_1_E_d_cm ='';
		$scope.bar_6_4_1_E_e='';
		$scope.bar_6_4_1_E_e_cm ='';
		$scope.bar_6_4_1_E_f='';
		$scope.bar_6_4_1_E_f_cm ='';
		$scope.bar_6_4_1_E_g='';
		$scope.bar_6_4_1_E_g_cm ='';
		$scope.bar_6_4_1_E_h='';
		$scope.bar_6_4_1_E_h_cm ='';
		$scope.bar_6_4_1_F='';
		$scope.bar_6_4_1_F_cm ='';
		$scope.bar_6_4_1_G='';
		$scope.bar_6_4_1_G_cm ='';
		$scope.bar_6_4_1_H='';
		$scope.bar_6_4_1_H_cm ='';
		$scope.bar_6_4_1_I='';
		$scope.bar_6_4_1_I_cm ='';
		$scope.bar_6_5_1_A='';
		$scope.bar_6_5_1_A_cm ='';
		$scope.bar_6_5_1_B='';
		$scope.bar_6_5_1_B_cm ='';
		$scope.bar_6_5_1_C='';
		$scope.bar_6_5_1_C_cm ='';
		$scope.bar_6_6_1_A='';
		$scope.bar_6_6_1_A_cm ='';
		$scope.bar_6_6_1_B='';
		$scope.bar_6_6_1_B_cm ='';
		$scope.bar_6_6_1_C='';
		$scope.bar_6_6_1_C_cm ='';
		$scope.bar_6_7_1_A='';
		$scope.bar_6_7_1_A_cm ='';
		$scope.bar_6_7_1_B='';
		$scope.bar_6_7_1_B_cm ='';
		$scope.bar_6_7_1_C='';
		$scope.bar_6_7_1_C_cm ='';
		$scope.kitchen_7_1_1_A='';
		$scope.kitchen_7_1_1_A_cm ='';
		$scope.kitchen_7_2_1_A='';
		$scope.kitchen_7_2_1_A_cm ='';
		$scope.kitchen_7_2_1_B='';
		$scope.kitchen_7_2_1_B_cm ='';
		$scope.kitchen_7_2_1_C='';
		$scope.kitchen_7_2_1_C_cm ='';
		$scope.kitchen_7_3_1_A='';
		$scope.kitchen_7_3_1_A_cm ='';
		$scope.kitchen_7_3_1_B='';
		$scope.kitchen_7_3_1_B_cm ='';
		$scope.kitchen_7_3_1_C='';
		$scope.kitchen_7_3_1_C_cm ='';
		$scope.kitchen_7_4_1_A='';
		$scope.kitchen_7_4_1_A_cm ='';
		$scope.kitchen_7_4_1_B='';
		$scope.kitchen_7_4_1_B_cm ='';
		$scope.kitchen_7_4_1_C='';
		$scope.kitchen_7_4_1_C_cm ='';
		$scope.kitchen_7_5_1_A='';
		$scope.kitchen_7_5_1_A_cm ='';
		$scope.kitchen_7_5_1_B='';
		$scope.kitchen_7_5_1_B_cm ='';
		$scope.kitchen_7_5_1_C='';
		$scope.kitchen_7_5_1_C_cm ='';
		$scope.kitchen_7_5_1_D='';
		$scope.kitchen_7_5_1_D_cm ='';
		$scope.kitchen_7_5_1_E='';
		$scope.kitchen_7_5_1_E_cm ='';
		$scope.kitchen_7_5_1_F='';
		$scope.kitchen_7_5_1_F_cm ='';
		$scope.kitchen_7_5_1_G='';
		$scope.kitchen_7_5_1_G_cm ='';
		$scope.kitchen_7_5_1_H='';
		$scope.kitchen_7_5_1_H_cm ='';
		$scope.kitchen_7_5_1_I='';
		$scope.kitchen_7_5_1_I_cm ='';
		$scope.kitchen_7_6_1_A='';
		$scope.kitchen_7_6_1_A_cm ='';
		$scope.kitchen_7_6_1_B='';
		$scope.kitchen_7_6_1_B_cm ='';
		$scope.kitchen_7_6_1_C='';
		$scope.kitchen_7_6_1_C_cm ='';
		$scope.kitchen_7_6_1_D='';
		$scope.kitchen_7_6_1_D_cm ='';
		$scope.kitchen_7_6_1_E='';
		$scope.kitchen_7_6_1_E_cm ='';
		$scope.kitchen_7_6_1_F='';
		$scope.kitchen_7_6_1_F_cm ='';
		$scope.kitchen_7_6_1_G='';
		$scope.kitchen_7_6_1_G_cm ='';
		$scope.kitchen_7_7_1_A='';
		$scope.kitchen_7_7_1_A_cm ='';
		$scope.kitchen_7_7_1_B='';
		$scope.kitchen_7_7_1_B_cm ='';
		$scope.kitchen_7_7_1_C='';
		$scope.kitchen_7_7_1_C_cm ='';
		$scope.kitchen_7_7_1_D='';
		$scope.kitchen_7_7_1_D_cm ='';
		$scope.kitchen_7_7_1_E='';
		$scope.kitchen_7_7_1_E_cm ='';
		$scope.kitchen_7_8_1_A='';
		$scope.kitchen_7_8_1_A_cm ='';
		$scope.kitchen_7_8_1_B='';
		$scope.kitchen_7_8_1_B_cm ='';
		$scope.kitchen_7_8_1_C_a='';
		$scope.kitchen_7_8_1_C_a_cm ='';
		$scope.kitchen_7_8_1_C_b='';
		$scope.kitchen_7_8_1_C_b_cm ='';
		$scope.kitchen_7_8_1_D='';
		$scope.kitchen_7_8_1_D_cm ='';
		$scope.kitchen_7_8_1_E='';
		$scope.kitchen_7_8_1_E_cm ='';
		$scope.kitchen_7_8_1_F='';
		$scope.kitchen_7_8_1_F_cm ='';
		$scope.kitchen_7_8_1_G='';
		$scope.kitchen_7_8_1_G_cm ='';
		$scope.kitchen_7_8_1_H='';
		$scope.kitchen_7_8_1_H_cm ='';
		$scope.kitchen_7_9_1_A='';
		$scope.kitchen_7_9_1_A_cm ='';
		$scope.kitchen_7_9_1_B='';
		$scope.kitchen_7_9_1_B_cm ='';
		$scope.kitchen_7_9_1_C='';
		$scope.kitchen_7_9_1_C_cm ='';
		$scope.kitchen_7_9_1_D='';
		$scope.kitchen_7_9_1_D_cm ='';
		$scope.kitchen_7_9_1_E='';
		$scope.kitchen_7_9_1_E_cm ='';
		$scope.kitchen_7_10_1_A_a='';
		$scope.kitchen_7_10_1_A_a_cm ='';
		$scope.kitchen_7_10_1_A_b='';
		$scope.kitchen_7_10_1_A_b_cm ='';
		$scope.kitchen_7_10_1_A_c='';
		$scope.kitchen_7_10_1_A_c_cm ='';
		$scope.kitchen_7_10_1_A_d='';
		$scope.kitchen_7_10_1_A_d_cm ='';
		$scope.kitchen_7_10_1_B='';
		$scope.kitchen_7_10_1_B_cm ='';
		$scope.kitchen_7_10_1_C='';
		$scope.kitchen_7_10_1_C_cm ='';
		$scope.kitchen_7_10_1_D='';
		$scope.kitchen_7_10_1_D_cm ='';
		$scope.kitchen_7_10_1_E='';
		$scope.kitchen_7_10_1_E_cm ='';
		$scope.kitchen_7_10_1_F='';
		$scope.kitchen_7_10_1_F_cm ='';
		$scope.kitchen_7_10_1_G='';
		$scope.kitchen_7_10_1_G_cm ='';
		$scope.kitchen_7_11_1_A_a='';
		$scope.kitchen_7_11_1_A_a_cm ='';
		$scope.kitchen_7_11_1_A_b='';
		$scope.kitchen_7_11_1_A_b_cm ='';
		$scope.kitchen_7_11_1_A_c='';
		$scope.kitchen_7_11_1_A_c_cm ='';
		$scope.kitchen_7_11_1_B='';
		$scope.kitchen_7_11_1_B_cm ='';
		$scope.kitchen_7_11_1_C_a='';
		$scope.kitchen_7_11_1_C_a_cm ='';
		$scope.kitchen_7_11_1_C_b='';
		$scope.kitchen_7_11_1_C_b_cm ='';
		$scope.kitchen_7_11_1_C_c='';
		$scope.kitchen_7_11_1_C_c_cm ='';
		$scope.kitchen_7_11_1_C_d='';
		$scope.kitchen_7_11_1_C_d_cm ='';
		$scope.kitchen_7_11_1_C_e='';
		$scope.kitchen_7_11_1_C_e_cm ='';
		$scope.kitchen_7_11_1_D_a='';
		$scope.kitchen_7_11_1_D_a_cm ='';
		$scope.kitchen_7_11_1_D_b='';
		$scope.kitchen_7_11_1_D_b_cm ='';
		$scope.kitchen_7_11_1_E='';
		$scope.kitchen_7_11_1_E_cm ='';
		$scope.kitchen_7_11_1_F='';
		$scope.kitchen_7_11_1_F_cm ='';
		$scope.guest_rooms_8_1_1_A='';
		$scope.guest_rooms_8_1_1_A_cm ='';
		$scope.guest_rooms_8_2_1_A='';
		$scope.guest_rooms_8_2_1_A_cm ='';
		$scope.guest_rooms_8_2_1_B='';
		$scope.guest_rooms_8_2_1_B_cm ='';
		$scope.guest_rooms_8_3_1_A_a='';
		$scope.guest_rooms_8_3_1_A_a_cm ='';
		$scope.guest_rooms_8_3_1_A_b='';
		$scope.guest_rooms_8_3_1_A_b_cm ='';
		$scope.guest_rooms_8_3_1_A_c='';
		$scope.guest_rooms_8_3_1_A_c_cm ='';
		$scope.guest_rooms_8_3_1_A_d='';
		$scope.guest_rooms_8_3_1_A_d_cm ='';
		$scope.guest_rooms_8_3_1_A_e='';
		$scope.guest_rooms_8_3_1_A_e_cm ='';
		$scope.guest_rooms_8_3_1_A_f='';
		$scope.guest_rooms_8_3_1_A_f_cm ='';
		$scope.guest_rooms_8_3_1_A_g='';
		$scope.guest_rooms_8_3_1_A_g_cm ='';
		$scope.guest_rooms_8_3_1_A_h='';
		$scope.guest_rooms_8_3_1_A_h_cm ='';
		$scope.guest_rooms_8_3_1_A_i='';
		$scope.guest_rooms_8_3_1_A_i_cm ='';
		$scope.guest_rooms_8_3_1_A_j='';
		$scope.guest_rooms_8_3_1_A_j_cm ='';
		$scope.guest_rooms_8_3_1_A_k='';
		$scope.guest_rooms_8_3_1_A_k_cm ='';
		$scope.guest_rooms_8_3_1_A_l='';
		$scope.guest_rooms_8_3_1_A_l_cm ='';
		$scope.guest_rooms_8_3_1_A_m='';
		$scope.guest_rooms_8_3_1_A_m_cm ='';
		$scope.guest_rooms_8_3_1_A_n='';
		$scope.guest_rooms_8_3_1_A_n_cm ='';
		$scope.guest_rooms_8_3_1_A_o='';
		$scope.guest_rooms_8_3_1_A_o_cm ='';
		$scope.guest_rooms_8_3_1_A_p='';
		$scope.guest_rooms_8_3_1_A_p_cm ='';
		$scope.guest_rooms_8_3_1_B='';
		$scope.guest_rooms_8_3_1_B_cm ='';
		$scope.guest_rooms_8_4_1_A='';
		$scope.guest_rooms_8_4_1_A_cm ='';
		$scope.guest_rooms_8_4_1_B_a='';
		$scope.guest_rooms_8_4_1_B_a_cm ='';
		$scope.guest_rooms_8_4_1_B_b='';
		$scope.guest_rooms_8_4_1_B_b_cm ='';
		$scope.guest_rooms_8_4_1_B_c='';
		$scope.guest_rooms_8_4_1_B_c_cm ='';
		$scope.guest_rooms_8_4_1_B_d='';
		$scope.guest_rooms_8_4_1_B_d_cm ='';
		$scope.guest_rooms_8_4_1_C='';
		$scope.guest_rooms_8_4_1_C_cm ='';
		$scope.guest_rooms_8_4_1_D='';
		$scope.guest_rooms_8_4_1_D_cm ='';
		$scope.guest_rooms_8_5_1_A='';
		$scope.guest_rooms_8_5_1_A_cm ='';
		$scope.guest_rooms_8_5_1_B='';
		$scope.guest_rooms_8_5_1_B_cm ='';
		$scope.guest_rooms_8_6_1_A='';
		$scope.guest_rooms_8_6_1_A_cm ='';
		$scope.guest_rooms_8_6_1_B='';
		$scope.guest_rooms_8_6_1_B_cm ='';
		$scope.guest_rooms_8_6_1_C='';
		$scope.guest_rooms_8_6_1_C_cm ='';
		$scope.guest_rooms_8_6_1_D='';
		$scope.guest_rooms_8_6_1_D_cm ='';
		$scope.guest_rooms_8_6_1_E='';
		$scope.guest_rooms_8_6_1_E_cm ='';
		$scope.guest_rooms_8_7_1_A='';
		$scope.guest_rooms_8_7_1_A_cm ='';
		$scope.guest_rooms_8_7_1_B='';
		$scope.guest_rooms_8_7_1_B_cm ='';
		$scope.guest_rooms_8_7_1_C='';
		$scope.guest_rooms_8_7_1_C_cm ='';
		$scope.guest_rooms_8_7_1_D='';
		$scope.guest_rooms_8_7_1_D_cm ='';
		$scope.guest_rooms_8_7_1_E='';
		$scope.guest_rooms_8_7_1_E_cm ='';
		$scope.guest_rooms_8_8_1_A='';
		$scope.guest_rooms_8_8_1_A_cm ='';
		$scope.guest_rooms_8_8_1_B_a='';
		$scope.guest_rooms_8_8_1_B_a_cm ='';
		$scope.guest_rooms_8_8_1_B_b='';
		$scope.guest_rooms_8_8_1_B_b_cm ='';
		$scope.guest_rooms_8_8_1_B_c='';
		$scope.guest_rooms_8_8_1_B_c_cm ='';
		$scope.guest_rooms_8_8_1_B_d='';
		$scope.guest_rooms_8_8_1_B_d_cm ='';
		$scope.guest_rooms_8_8_1_B_e='';
		$scope.guest_rooms_8_8_1_B_e_cm ='';
		$scope.guest_rooms_8_8_1_B_f='';
		$scope.guest_rooms_8_8_1_B_f_cm ='';
		$scope.guest_rooms_8_8_1_C_a='';
		$scope.guest_rooms_8_8_1_C_a_cm ='';
		$scope.guest_rooms_8_8_1_C_b='';
		$scope.guest_rooms_8_8_1_C_b_cm ='';
		$scope.guest_rooms_8_8_1_D='';
		$scope.guest_rooms_8_8_1_D_cm ='';
		$scope.guest_rooms_8_9_1_A='';
		$scope.guest_rooms_8_9_1_A_cm ='';
		$scope.guest_rooms_8_9_1_B='';
		$scope.guest_rooms_8_9_1_B_cm ='';
		$scope.guest_rooms_8_10_1_A_a='';
		$scope.guest_rooms_8_10_1_A_a_cm ='';
		$scope.guest_rooms_8_10_1_A_b='';
		$scope.guest_rooms_8_10_1_A_b_cm ='';
		$scope.guest_rooms_8_10_1_A_c='';
		$scope.guest_rooms_8_10_1_A_c_cm ='';
		$scope.guest_rooms_8_10_1_A_d='';
		$scope.guest_rooms_8_10_1_A_d_cm ='';
		$scope.guest_rooms_8_10_1_A_e='';
		$scope.guest_rooms_8_10_1_A_e_cm ='';
		$scope.guest_rooms_8_10_1_B_a='';
		$scope.guest_rooms_8_10_1_B_a_cm ='';
		$scope.guest_rooms_8_10_1_B_b='';
		$scope.guest_rooms_8_10_1_B_b_cm ='';
		$scope.guest_rooms_8_10_1_B_c='';
		$scope.guest_rooms_8_10_1_B_c_cm ='';
		$scope.guest_rooms_8_10_1_B_d='';
		$scope.guest_rooms_8_10_1_B_d_cm ='';
		$scope.guest_rooms_8_10_1_C='';
		$scope.guest_rooms_8_10_1_C_cm ='';
		$scope.guest_rooms_8_11_1_A='';
		$scope.guest_rooms_8_11_1_A_cm ='';
		$scope.guest_rooms_8_11_1_B='';
		$scope.guest_rooms_8_11_1_B_cm ='';
		$scope.guest_rooms_8_11_1_C_a='';
		$scope.guest_rooms_8_11_1_C_a_cm ='';
		$scope.guest_rooms_8_11_1_C_b='';
		$scope.guest_rooms_8_11_1_C_b_cm ='';
		$scope.guest_rooms_8_11_1_C_c='';
		$scope.guest_rooms_8_11_1_C_c_cm ='';
		$scope.guest_rooms_8_11_1_D='';
		$scope.guest_rooms_8_11_1_D_cm ='';
		$scope.guest_rooms_8_11_1_E='';
		$scope.guest_rooms_8_11_1_E_cm ='';
		$scope.guest_rooms_8_12_1_A='';
		$scope.guest_rooms_8_12_1_A_cm ='';
		$scope.guest_rooms_8_12_1_B='';
		$scope.guest_rooms_8_12_1_B_cm ='';
		$scope.guest_rooms_8_12_1_C='';
		$scope.guest_rooms_8_12_1_C_cm ='';
		$scope.guest_rooms_8_13_1_A='';
		$scope.guest_rooms_8_13_1_A_cm ='';
		$scope.guest_rooms_8_13_1_B_a='';
		$scope.guest_rooms_8_13_1_B_a_cm ='';
		$scope.guest_rooms_8_13_1_B_b='';
		$scope.guest_rooms_8_13_1_B_b_cm ='';
		$scope.guest_rooms_8_13_1_B_c='';
		$scope.guest_rooms_8_13_1_B_c_cm ='';
		$scope.guest_rooms_8_13_1_C='';
		$scope.guest_rooms_8_13_1_C_cm ='';
		$scope.guest_rooms_8_14_1_A_a='';
		$scope.guest_rooms_8_14_1_A_a_cm ='';
		$scope.guest_rooms_8_14_1_A_b='';
		$scope.guest_rooms_8_14_1_A_b_cm ='';
		$scope.guest_rooms_8_14_1_A_c='';
		$scope.guest_rooms_8_14_1_A_c_cm ='';
		$scope.guest_rooms_8_14_1_A_d='';
		$scope.guest_rooms_8_14_1_A_d_cm ='';
		$scope.guest_rooms_8_14_1_A_e='';
		$scope.guest_rooms_8_14_1_A_e_cm ='';
		$scope.guest_rooms_8_14_1_A_f='';
		$scope.guest_rooms_8_14_1_A_f_cm ='';
		$scope.guest_rooms_8_14_1_A_g='';
		$scope.guest_rooms_8_14_1_A_g_cm ='';
		$scope.guest_rooms_8_14_1_A_h='';
		$scope.guest_rooms_8_14_1_A_h_cm ='';
		$scope.guest_rooms_8_14_1_A_i='';
		$scope.guest_rooms_8_14_1_A_i_cm ='';
		$scope.guest_rooms_8_14_1_A_j='';
		$scope.guest_rooms_8_14_1_A_j_cm ='';
		$scope.guest_rooms_8_14_1_A_k='';
		$scope.guest_rooms_8_14_1_A_k_cm ='';
		$scope.guest_rooms_8_14_1_A_l='';
		$scope.guest_rooms_8_14_1_A_l_cm ='';
		$scope.guest_rooms_8_14_1_A_m='';
		$scope.guest_rooms_8_14_1_A_m_cm ='';
		$scope.guest_rooms_8_14_1_A_n='';
		$scope.guest_rooms_8_14_1_A_n_cm ='';
		$scope.guest_rooms_8_14_1_A_o='';
		$scope.guest_rooms_8_14_1_A_o_cm ='';
		$scope.guest_rooms_8_14_1_A_p='';
		$scope.guest_rooms_8_14_1_A_p_cm ='';
		$scope.guest_rooms_8_14_1_A_q='';
		$scope.guest_rooms_8_14_1_A_q_cm ='';
		$scope.guest_rooms_8_14_1_B='';
		$scope.guest_rooms_8_14_1_B_cm ='';
		$scope.guest_bathrooms_9_1_1_A='';
		$scope.guest_bathrooms_9_1_1_A_cm ='';
		$scope.guest_bathrooms_9_1_1_B='';
		$scope.guest_bathrooms_9_1_1_B_cm ='';
		$scope.guest_bathrooms_9_1_1_C='';
		$scope.guest_bathrooms_9_1_1_C_cm ='';
		$scope.guest_bathrooms_9_2_1_A_a='';
		$scope.guest_bathrooms_9_2_1_A_a_cm ='';
		$scope.guest_bathrooms_9_2_1_A_b='';
		$scope.guest_bathrooms_9_2_1_A_b_cm ='';
		$scope.guest_bathrooms_9_2_1_A_c='';
		$scope.guest_bathrooms_9_2_1_A_c_cm ='';
		$scope.guest_bathrooms_9_2_1_A_d='';
		$scope.guest_bathrooms_9_2_1_A_d_cm ='';
		$scope.guest_bathrooms_9_2_1_A_e='';
		$scope.guest_bathrooms_9_2_1_A_e_cm ='';
		$scope.guest_bathrooms_9_2_1_A_f='';
		$scope.guest_bathrooms_9_2_1_A_f_cm ='';
		$scope.guest_bathrooms_9_2_1_A_g='';
		$scope.guest_bathrooms_9_2_1_A_g_cm ='';
		$scope.guest_bathrooms_9_2_1_A_h='';
		$scope.guest_bathrooms_9_2_1_A_h_cm ='';
		$scope.guest_bathrooms_9_2_1_A_i='';
		$scope.guest_bathrooms_9_2_1_A_i_cm ='';
		$scope.guest_bathrooms_9_2_1_A_j='';
		$scope.guest_bathrooms_9_2_1_A_j_cm ='';
		$scope.guest_bathrooms_9_2_1_A_k='';
		$scope.guest_bathrooms_9_2_1_A_k_cm ='';
		$scope.guest_bathrooms_9_2_1_A_l='';
		$scope.guest_bathrooms_9_2_1_A_l_cm ='';
		$scope.guest_bathrooms_9_2_1_A_m='';
		$scope.guest_bathrooms_9_2_1_A_m_cm ='';
		$scope.guest_bathrooms_9_2_1_A_n='';
		$scope.guest_bathrooms_9_2_1_A_n_cm ='';
		$scope.guest_bathrooms_9_2_1_A_o='';
		$scope.guest_bathrooms_9_2_1_A_o_cm ='';
		$scope.guest_bathrooms_9_2_1_A_p='';
		$scope.guest_bathrooms_9_2_1_A_p_cm ='';
		$scope.guest_bathrooms_9_2_1_A_q='';
		$scope.guest_bathrooms_9_2_1_A_q_cm ='';
		$scope.guest_bathrooms_9_2_1_A_r='';
		$scope.guest_bathrooms_9_2_1_A_r_cm ='';
		$scope.guest_bathrooms_9_2_1_A_s='';
		$scope.guest_bathrooms_9_2_1_A_s_cm ='';
		$scope.guest_bathrooms_9_2_1_A_t='';
		$scope.guest_bathrooms_9_2_1_A_t_cm ='';
		$scope.guest_bathrooms_9_2_1_A_u='';
		$scope.guest_bathrooms_9_2_1_A_u_cm ='';
		$scope.guest_bathrooms_9_2_1_B='';
		$scope.guest_bathrooms_9_2_1_B_cm ='';
		$scope.guest_bathrooms_9_2_1_C='';
		$scope.guest_bathrooms_9_2_1_C_cm ='';
		$scope.guest_bathrooms_9_3_1_A='';
		$scope.guest_bathrooms_9_3_1_A_cm ='';
		$scope.guest_bathrooms_9_3_1_B='';
		$scope.guest_bathrooms_9_3_1_B_cm ='';
		$scope.guest_bathrooms_9_3_1_C='';
		$scope.guest_bathrooms_9_3_1_C_cm ='';
		$scope.guest_bathrooms_9_3_1_D='';
		$scope.guest_bathrooms_9_3_1_D_cm ='';
		$scope.guest_bathrooms_9_3_1_E='';
		$scope.guest_bathrooms_9_3_1_E_cm ='';
		$scope.guest_bathrooms_9_3_1_F='';
		$scope.guest_bathrooms_9_3_1_F_cm ='';
		$scope.guest_bathrooms_9_4_1_A_a='';
		$scope.guest_bathrooms_9_4_1_A_a_cm ='';
		$scope.guest_bathrooms_9_4_1_A_b='';
		$scope.guest_bathrooms_9_4_1_A_b_cm ='';
		$scope.guest_bathrooms_9_4_1_A_c='';
		$scope.guest_bathrooms_9_4_1_A_c_cm ='';
		$scope.guest_bathrooms_9_4_1_A_d='';
		$scope.guest_bathrooms_9_4_1_A_d_cm ='';
		$scope.guest_bathrooms_9_4_1_A_e='';
		$scope.guest_bathrooms_9_4_1_A_e_cm ='';
		$scope.guest_bathrooms_9_4_1_B='';
		$scope.guest_bathrooms_9_4_1_B_cm ='';
		$scope.guest_bathrooms_9_4_1_C='';
		$scope.guest_bathrooms_9_4_1_C_cm ='';
		$scope.guest_bathrooms_9_4_1_D='';
		$scope.guest_bathrooms_9_4_1_D_cm ='';
		$scope.guest_bathrooms_9_4_1_E='';
		$scope.guest_bathrooms_9_4_1_E_cm ='';
		$scope.guest_bathrooms_9_4_1_F='';
		$scope.guest_bathrooms_9_4_1_F_cm ='';
		$scope.guest_bathrooms_9_5_1_A='';
		$scope.guest_bathrooms_9_5_1_A_cm ='';
		$scope.guest_bathrooms_9_5_1_B='';
		$scope.guest_bathrooms_9_5_1_B_cm ='';
		$scope.guest_bathrooms_9_5_1_C='';
		$scope.guest_bathrooms_9_5_1_C_cm ='';
		$scope.guest_bathrooms_9_5_1_D='';
		$scope.guest_bathrooms_9_5_1_D_cm ='';
		$scope.guest_bathrooms_9_6_1_A='';
		$scope.guest_bathrooms_9_6_1_A_cm ='';
		$scope.guest_bathrooms_9_6_1_B='';
		$scope.guest_bathrooms_9_6_1_B_cm ='';
		$scope.guest_bathrooms_9_6_1_C='';
		$scope.guest_bathrooms_9_6_1_C_cm ='';
		$scope.guest_bathrooms_9_7_1_A_a='';
		$scope.guest_bathrooms_9_7_1_A_a_cm ='';
		$scope.guest_bathrooms_9_7_1_A_b='';
		$scope.guest_bathrooms_9_7_1_A_b_cm ='';
		$scope.guest_bathrooms_9_7_1_A_c='';
		$scope.guest_bathrooms_9_7_1_A_c_cm ='';
		$scope.guest_bathrooms_9_7_1_A_d='';
		$scope.guest_bathrooms_9_7_1_A_d_cm ='';
		$scope.guest_bathrooms_9_7_1_A_e='';
		$scope.guest_bathrooms_9_7_1_A_e_cm ='';
		$scope.guest_bathrooms_9_7_1_A_f='';
		$scope.guest_bathrooms_9_7_1_A_f_cm ='';
		$scope.guest_bathrooms_9_7_1_B='';
		$scope.guest_bathrooms_9_7_1_B_cm ='';
		$scope.guest_bathrooms_9_7_1_C='';
		$scope.guest_bathrooms_9_7_1_C_cm ='';
		$scope.guest_bathrooms_9_8_1_A='';
		$scope.guest_bathrooms_9_8_1_A_cm ='';
		$scope.guest_bathrooms_9_8_1_B='';
		$scope.guest_bathrooms_9_8_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_A='';
		$scope.hygiene_and_sanitation_10_1_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_B='';
		$scope.hygiene_and_sanitation_10_1_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_C='';
		$scope.hygiene_and_sanitation_10_1_1_C_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_a='';
		$scope.hygiene_and_sanitation_10_1_1_D_a_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_b='';
		$scope.hygiene_and_sanitation_10_1_1_D_b_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_c='';
		$scope.hygiene_and_sanitation_10_1_1_D_c_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_d='';
		$scope.hygiene_and_sanitation_10_1_1_D_d_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_e='';
		$scope.hygiene_and_sanitation_10_1_1_D_e_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_D_f='';
		$scope.hygiene_and_sanitation_10_1_1_D_f_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_E='';
		$scope.hygiene_and_sanitation_10_1_1_E_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_F='';
		$scope.hygiene_and_sanitation_10_1_1_F_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_G='';
		$scope.hygiene_and_sanitation_10_1_1_G_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_H='';
		$scope.hygiene_and_sanitation_10_1_1_H_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_I_a='';
		$scope.hygiene_and_sanitation_10_1_1_I_a_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_I_b='';
		$scope.hygiene_and_sanitation_10_1_1_I_b_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_I_c='';
		$scope.hygiene_and_sanitation_10_1_1_I_c_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_I_d='';
		$scope.hygiene_and_sanitation_10_1_1_I_d_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_I_e='';
		$scope.hygiene_and_sanitation_10_1_1_I_e_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_J='';
		$scope.hygiene_and_sanitation_10_1_1_J_cm ='';
		$scope.hygiene_and_sanitation_10_1_1_K='';
		$scope.hygiene_and_sanitation_10_1_1_K_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_A='';
		$scope.hygiene_and_sanitation_10_2_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_B='';
		$scope.hygiene_and_sanitation_10_2_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_C='';
		$scope.hygiene_and_sanitation_10_2_1_C_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_D='';
		$scope.hygiene_and_sanitation_10_2_1_D_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_a='';
		$scope.hygiene_and_sanitation_10_2_1_E_a_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_b='';
		$scope.hygiene_and_sanitation_10_2_1_E_b_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_c='';
		$scope.hygiene_and_sanitation_10_2_1_E_c_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_d='';
		$scope.hygiene_and_sanitation_10_2_1_E_d_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_e='';
		$scope.hygiene_and_sanitation_10_2_1_E_e_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_f='';
		$scope.hygiene_and_sanitation_10_2_1_E_f_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_g='';
		$scope.hygiene_and_sanitation_10_2_1_E_g_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_h='';
		$scope.hygiene_and_sanitation_10_2_1_E_h_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_E_i='';
		$scope.hygiene_and_sanitation_10_2_1_E_i_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_F='';
		$scope.hygiene_and_sanitation_10_2_1_F_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_G='';
		$scope.hygiene_and_sanitation_10_2_1_G_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_H_a='';
		$scope.hygiene_and_sanitation_10_2_1_H_a_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_H_b='';
		$scope.hygiene_and_sanitation_10_2_1_H_b_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_H_c='';
		$scope.hygiene_and_sanitation_10_2_1_H_c_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_H_d='';
		$scope.hygiene_and_sanitation_10_2_1_H_d_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_I='';
		$scope.hygiene_and_sanitation_10_2_1_I_cm ='';
		$scope.hygiene_and_sanitation_10_2_1_J='';
		$scope.hygiene_and_sanitation_10_2_1_J_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_A='';
		$scope.hygiene_and_sanitation_10_3_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_B='';
		$scope.hygiene_and_sanitation_10_3_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_C='';
		$scope.hygiene_and_sanitation_10_3_1_C_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_D='';
		$scope.hygiene_and_sanitation_10_3_1_D_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_E='';
		$scope.hygiene_and_sanitation_10_3_1_E_cm ='';
		$scope.hygiene_and_sanitation_10_3_1_F='';
		$scope.hygiene_and_sanitation_10_3_1_F_cm ='';
		$scope.hygiene_and_sanitation_10_4_1_A='';
		$scope.hygiene_and_sanitation_10_4_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_4_1_B='';
		$scope.hygiene_and_sanitation_10_4_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_4_1_C='';
		$scope.hygiene_and_sanitation_10_4_1_C_cm ='';
		$scope.hygiene_and_sanitation_10_5_1_A='';
		$scope.hygiene_and_sanitation_10_5_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_5_1_B='';
		$scope.hygiene_and_sanitation_10_5_1_B_cm ='';
		$scope.hygiene_and_sanitation_10_6_1_A='';
		$scope.hygiene_and_sanitation_10_6_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_6_1_B_a='';
		$scope.hygiene_and_sanitation_10_6_1_B_a_cm ='';
		$scope.hygiene_and_sanitation_10_6_1_B_b='';
		$scope.hygiene_and_sanitation_10_6_1_B_b_cm ='';
		$scope.hygiene_and_sanitation_10_6_1_C='';
		$scope.hygiene_and_sanitation_10_6_1_C_cm ='';
		$scope.hygiene_and_sanitation_10_7_1_A='';
		$scope.hygiene_and_sanitation_10_7_1_A_cm ='';
		$scope.hygiene_and_sanitation_10_7_1_B='';
		$scope.hygiene_and_sanitation_10_7_1_B_cm ='';
		$scope.safety_and_security_11_1_1_A='';
		$scope.safety_and_security_11_1_1_A_cm ='';
		$scope.safety_and_security_11_1_1_B='';
		$scope.safety_and_security_11_1_1_B_cm ='';
		$scope.safety_and_security_11_1_1_C='';
		$scope.safety_and_security_11_1_1_C_cm ='';
		$scope.safety_and_security_11_1_1_D='';
		$scope.safety_and_security_11_1_1_D_cm ='';
		$scope.safety_and_security_11_1_1_E_a='';
		$scope.safety_and_security_11_1_1_E_a_cm ='';
		$scope.safety_and_security_11_1_1_E_b='';
		$scope.safety_and_security_11_1_1_E_b_cm ='';
		$scope.safety_and_security_11_1_1_E_c='';
		$scope.safety_and_security_11_1_1_E_c_cm ='';
		$scope.safety_and_security_11_1_1_E_d='';
		$scope.safety_and_security_11_1_1_E_d_cm ='';
		$scope.safety_and_security_11_1_1_E_e='';
		$scope.safety_and_security_11_1_1_E_e_cm ='';
		$scope.safety_and_security_11_1_1_E_f='';
		$scope.safety_and_security_11_1_1_E_f_cm ='';
		$scope.safety_and_security_11_1_1_E_g='';
		$scope.safety_and_security_11_1_1_E_g_cm ='';
		$scope.safety_and_security_11_1_1_F='';
		$scope.safety_and_security_11_1_1_F_cm ='';
		$scope.safety_and_security_11_1_1_G='';
		$scope.safety_and_security_11_1_1_G_cm ='';
		$scope.safety_and_security_11_1_1_H='';
		$scope.safety_and_security_11_1_1_H_cm ='';
		$scope.safety_and_security_11_1_1_I='';
		$scope.safety_and_security_11_1_1_I_cm ='';
		$scope.safety_and_security_11_2_1_A='';
		$scope.safety_and_security_11_2_1_A_cm ='';
		$scope.safety_and_security_11_2_1_B='';
		$scope.safety_and_security_11_2_1_B_cm ='';
		$scope.safety_and_security_11_3_1_A='';
		$scope.safety_and_security_11_3_1_A_cm ='';
		$scope.safety_and_security_11_3_1_B='';
		$scope.safety_and_security_11_3_1_B_cm ='';
		$scope.safety_and_security_11_3_1_C='';
		$scope.safety_and_security_11_3_1_C_cm ='';
		$scope.safety_and_security_11_3_1_D='';
		$scope.safety_and_security_11_3_1_D_cm ='';
		$scope.safety_and_security_11_3_1_E='';
		$scope.safety_and_security_11_3_1_E_cm ='';
		$scope.safety_and_security_11_3_1_F='';
		$scope.safety_and_security_11_3_1_F_cm ='';
		$scope.safety_and_security_11_3_1_G='';
		$scope.safety_and_security_11_3_1_G_cm ='';
		$scope.safety_and_security_11_3_1_H='';
		$scope.safety_and_security_11_3_1_H_cm ='';
		$scope.safety_and_security_11_4_1_A='';
		$scope.safety_and_security_11_4_1_A_cm ='';
		$scope.safety_and_security_11_4_1_B='';
		$scope.safety_and_security_11_4_1_B_cm ='';
		$scope.safety_and_security_11_4_1_C='';
		$scope.safety_and_security_11_4_1_C_cm ='';
		$scope.safety_and_security_11_5_1_A='';
		$scope.safety_and_security_11_5_1_A_cm ='';
		$scope.safety_and_security_11_5_1_B='';
		$scope.safety_and_security_11_5_1_B_cm ='';
		$scope.safety_and_security_11_5_1_C='';
		$scope.safety_and_security_11_5_1_C_cm ='';
		$scope.safety_and_security_11_5_1_D='';
		$scope.safety_and_security_11_5_1_D_cm ='';
		$scope.safety_and_security_11_5_1_E='';
		$scope.safety_and_security_11_5_1_E_cm ='';
		$scope.safety_and_security_11_6_1_A='';
		$scope.safety_and_security_11_6_1_A_cm ='';
		$scope.safety_and_security_11_6_1_B='';
		$scope.safety_and_security_11_6_1_B_cm ='';
		$scope.safety_and_security_11_6_1_C='';
		$scope.safety_and_security_11_6_1_C_cm ='';
		$scope.sundry_services_12_1_1_A='';
		$scope.sundry_services_12_1_1_A_cm ='';
		$scope.sundry_services_12_1_1_B='';
		$scope.sundry_services_12_1_1_B_cm ='';
		$scope.sundry_services_12_1_1_C='';
		$scope.sundry_services_12_1_1_C_cm ='';
		$scope.sundry_services_12_2_1_A='';
		$scope.sundry_services_12_2_1_A_cm ='';
		$scope.sundry_services_12_3_1_A='';
		$scope.sundry_services_12_3_1_A_cm ='';
		$scope.sundry_services_12_4_1_A='';
		$scope.sundry_services_12_4_1_A_cm ='';
		$scope.sundry_services_12_4_1_B='';
		$scope.sundry_services_12_4_1_B_cm ='';
		$scope.sundry_services_12_4_1_C='';
		$scope.sundry_services_12_4_1_C_cm ='';
		$scope.sundry_services_12_4_1_D='';
		$scope.sundry_services_12_4_1_D_cm ='';
		$scope.human_resources_13_1_1_A='';
		$scope.human_resources_13_1_1_A_cm ='';
		$scope.human_resources_13_1_1_B='';
		$scope.human_resources_13_1_1_B_cm ='';
		$scope.human_resources_13_1_1_C='';
		$scope.human_resources_13_1_1_C_cm ='';
		$scope.human_resources_13_1_1_D='';
		$scope.human_resources_13_1_1_D_cm ='';
		$scope.human_resources_13_1_1_E_a='';
		$scope.human_resources_13_1_1_E_a_cm ='';
		$scope.human_resources_13_1_1_E_b='';
		$scope.human_resources_13_1_1_E_b_cm ='';
		$scope.human_resources_13_1_1_E_c='';
		$scope.human_resources_13_1_1_E_c_cm ='';
		$scope.human_resources_13_1_1_E_d='';
		$scope.human_resources_13_1_1_E_d_cm ='';
		$scope.human_resources_13_1_1_E_e='';
		$scope.human_resources_13_1_1_E_e_cm ='';
		$scope.human_resources_13_2_1_A='';
		$scope.human_resources_13_2_1_A_cm ='';
		$scope.human_resources_13_2_1_B='';
		$scope.human_resources_13_2_1_B_cm ='';
		$scope.human_resources_13_3_1_A='';
		$scope.human_resources_13_3_1_A_cm ='';
		$scope.human_resources_13_3_1_B='';
		$scope.human_resources_13_3_1_B_cm ='';
		$scope.human_resources_13_4_1_A_a='';
		$scope.human_resources_13_4_1_A_a_cm ='';
		$scope.human_resources_13_4_1_A_b='';
		$scope.human_resources_13_4_1_A_b_cm ='';
		$scope.human_resources_13_4_1_A_c='';
		$scope.human_resources_13_4_1_A_c_cm ='';
		$scope.human_resources_13_4_1_B_a='';
		$scope.human_resources_13_4_1_B_a_cm ='';
		$scope.human_resources_13_4_1_B_b='';
		$scope.human_resources_13_4_1_B_b_cm ='';
		$scope.human_resources_13_4_1_B_c='';
		$scope.human_resources_13_4_1_B_c_cm ='';
		$scope.human_resources_13_4_1_C_a='';
		$scope.human_resources_13_4_1_C_a_cm ='';
		$scope.human_resources_13_4_1_C_b='';
		$scope.human_resources_13_4_1_C_b_cm ='';
		$scope.human_resources_13_4_1_C_c='';
		$scope.human_resources_13_4_1_C_c_cm ='';
		$scope.human_resources_13_5_1_A='';
		$scope.human_resources_13_5_1_A_cm ='';
		$scope.human_resources_13_6_1_A='';
		$scope.human_resources_13_6_1_A_cm ='';
		$scope.human_resources_13_6_1_B='';
		$scope.human_resources_13_6_1_B_cm ='';
		$scope.human_resources_13_6_1_C='';
		$scope.human_resources_13_6_1_C_cm ='';
		$scope.human_resources_13_6_1_D='';
		$scope.human_resources_13_6_1_D_cm ='';
		$scope.human_resources_13_7_1_A='';
		$scope.human_resources_13_7_1_A_cm ='';
		$scope.human_resources_13_7_1_B='';
		$scope.human_resources_13_7_1_B_cm ='';
		$scope.human_resources_13_7_1_C='';
		$scope.human_resources_13_7_1_C_cm ='';
		$scope.human_resources_13_7_1_D='';
		$scope.human_resources_13_7_1_D_cm ='';
		$scope.human_resources_13_7_1_E='';
		$scope.human_resources_13_7_1_E_cm ='';
		$scope.human_resources_13_7_1_F_a='';
		$scope.human_resources_13_7_1_F_a_cm ='';
		$scope.human_resources_13_7_1_F_b='';
		$scope.human_resources_13_7_1_F_b_cm ='';
		$scope.human_resources_13_8_1_A='';
		$scope.human_resources_13_8_1_A_cm ='';
		$scope.human_resources_13_8_1_B='';
		$scope.human_resources_13_8_1_B_cm ='';
		$scope.human_resources_13_8_1_C='';
		$scope.human_resources_13_8_1_C_cm ='';
		$scope.general_14_1_1_A='';
		$scope.general_14_1_1_A_cm ='';
		$scope.general_14_2_1_A='';
		$scope.general_14_2_1_A_cm ='';
		$scope.general_14_3_1_A='';
		$scope.general_14_3_1_A_cm ='';
		$scope.general_14_3_1_B_a='';
		$scope.general_14_3_1_B_a_cm ='';
		$scope.general_14_3_1_B_b='';
		$scope.general_14_3_1_B_b_cm ='';
		$scope.general_14_3_1_B_c='';
		$scope.general_14_3_1_B_c_cm ='';
		$scope.general_14_3_1_B_d='';
		$scope.general_14_3_1_B_d_cm ='';
		$scope.general_14_3_1_B_e='';
		$scope.general_14_3_1_B_e_cm ='';
		$scope.general_14_3_1_C='';
		$scope.general_14_3_1_C_cm ='';
		$scope.general_14_4_1_A='';
		$scope.general_14_4_1_A_cm ='';
		$scope.general_14_4_1_B='';
		$scope.general_14_4_1_B_cm ='';
		$scope.general_14_5_1_A='';
		$scope.general_14_5_1_A_cm ='';
		$scope.general_14_5_1_B='';
		$scope.general_14_5_1_B_cm ='';
		$scope.general_14_6_1_A='';
		$scope.general_14_6_1_A_cm ='';
		$scope.general_14_6_1_B='';
		$scope.general_14_6_1_B_cm ='';
		$scope.general_14_7_1_A='';
		$scope.general_14_7_1_A_cm ='';
		$scope.general_14_7_1_B='';
		$scope.general_14_7_1_B_cm ='';
		$scope.general_14_7_1_C='';
		$scope.general_14_7_1_C_cm ='';
		$scope.general_14_8_1_A='';
		$scope.general_14_8_1_A_cm ='';
		$scope.general_14_8_1_B='';
		$scope.general_14_8_1_B_cm ='';
		$scope.general_14_8_1_C_a='';
		$scope.general_14_8_1_C_a_cm ='';
		$scope.general_14_8_1_C_b='';
		$scope.general_14_8_1_C_b_cm ='';
		$scope.general_14_8_1_C_c='';
		$scope.general_14_8_1_C_c_cm ='';
		$scope.general_14_8_1_C_d='';
		$scope.general_14_8_1_C_d_cm ='';
		$scope.general_14_8_1_C_e='';
		$scope.general_14_8_1_C_e_cm ='';
		$scope.general_14_8_1_D='';
		$scope.general_14_8_1_D_cm ='';
		$scope.general_14_8_1_E='';
		$scope.general_14_8_1_E_cm ='';
		$scope.general_14_8_1_F='';
		$scope.general_14_8_1_F_cm ='';
		$scope.general_14_8_1_G='';
		$scope.general_14_8_1_G_cm ='';
		$scope.general_14_9_1_A='';
		$scope.general_14_9_1_A_cm ='';
		$scope.general_14_9_1_B='';
		$scope.general_14_9_1_B_cm ='';
		

	
	};
	
	

};