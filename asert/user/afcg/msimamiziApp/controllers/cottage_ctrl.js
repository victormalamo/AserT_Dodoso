app.cottage_ctrl = function($timeout, $scope, $http, focus){

	$scope.fetch_cottage_items = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_cottage_items.php",
			data:{'assessment_id':assessment_id, 'assessor_category':assessor_category }
			}).success(function(data){
			
			//LOCATION 1.0
				//1.1
				//1.1.1
				if(data.location_1_1_1_A == 2){ $scope.location_1_1_1_A = data.location_1_1_1_A; $scope.location_1_1_1_A_a = true; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A_cm = ''; } else if(data.location_1_1_1_A  == 0){ $scope.location_1_1_1_A = data.location_1_1_1_A; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = true; $scope.location_1_1_1_A_cm = ''; }else if((data.location_1_1_1_A  > 0 ) && (data.location_1_1_1_A  < 2)){ $scope.location_1_1_1_A_cm = data.location_1_1_1_A; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = false; $scope.location_1_1_1_A = ''; }else{ $scope.location_1_1_1_A = ''; $scope.location_1_1_1_A_cm = ''; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = false; }
				$scope.location_1_1_1_text = data.location_1_1_1_text;
				//1.1.2
				if(data.location_1_1_2_A == 2){ $scope.location_1_1_2_A = data.location_1_1_2_A; $scope.location_1_1_2_A_a = true; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A_cm = ''; } else if(data.location_1_1_2_A  == 4){ $scope.location_1_1_2_A = data.location_1_1_2_A; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = true; $scope.location_1_1_2_A_cm = ''; }else if( ((data.location_1_1_2_A  > 2 ) && (data.location_1_1_2_A  < 4)) || ((data.location_1_1_2_A  >= 0 ) && (data.location_1_1_2_A  < 2)) ){ $scope.location_1_1_2_A_cm = data.location_1_1_2_A; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = false; $scope.location_1_1_2_A = ''; }else{ $scope.location_1_1_2_A = ''; $scope.location_1_1_2_A_cm = ''; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = false; }
				$scope.location_1_1_2_text = data.location_1_1_2_text;
				//1.1.3
				if(data.location_1_1_3_A == 1){ $scope.location_1_1_3_A = data.location_1_1_3_A; $scope.location_1_1_3_A_a = true; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A_cm = ''; } else if(data.location_1_1_3_A  == 2){ $scope.location_1_1_3_A = data.location_1_1_3_A; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = true; $scope.location_1_1_3_A_cm = ''; }else if( ((data.location_1_1_3_A  > 1 ) && (data.location_1_1_3_A  < 2)) || ((data.location_1_1_3_A  >= 0 ) && (data.location_1_1_3_A  < 1)) ){ $scope.location_1_1_3_A_cm = data.location_1_1_3_A; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = false; $scope.location_1_1_3_A = ''; }else{ $scope.location_1_1_3_A = ''; $scope.location_1_1_3_A_cm = ''; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = false; }
				if(data.location_1_1_3_B == 0){ $scope.location_1_1_3_B = data.location_1_1_3_B; $scope.location_1_1_3_B_a = true; $scope.location_1_1_3_B_b = false; $scope.location_1_1_3_B_cm = ''; } else if(data.location_1_1_3_B  == 3){ $scope.location_1_1_3_B = data.location_1_1_3_B; $scope.location_1_1_3_B_a = false; $scope.location_1_1_3_B_b = true; $scope.location_1_1_3_B_cm = ''; }else if( (data.location_1_1_3_B  > 0 ) && (data.location_1_1_3_B  < 3) ){ $scope.location_1_1_3_B_cm = data.location_1_1_3_B; $scope.location_1_1_3_B_a = false; $scope.location_1_1_3_B_b = false; $scope.location_1_1_3_B = ''; }else{ $scope.location_1_1_3_B = ''; $scope.location_1_1_3_B_cm = ''; $scope.location_1_1_3_B_a = false; $scope.location_1_1_3_B_b = false; }
				$scope.location_1_1_3_text = data.location_1_1_3_text;
				//1.1.4
				if(data.location_1_1_4_A == 1){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A_a = true; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == 2){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = true; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A_cm = ''; } else if(data.location_1_1_4_A  == 3){ $scope.location_1_1_4_A = data.location_1_1_4_A; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = true; $scope.location_1_1_4_A_cm = ''; } else if( ((data.location_1_1_4_A  > 1 ) && (data.location_1_1_4_A  < 2)) || ((data.location_1_1_4_A  >= 0 ) && (data.location_1_1_4_A  < 1)) || ((data.location_1_1_4_A  > 2 ) && (data.location_1_1_4_A  < 3)) ){ 
				$scope.location_1_1_4_A_cm = data.location_1_1_4_A; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false; $scope.location_1_1_4_A = ''; }else{ $scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_cm = ''; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false;}
				if(data.location_1_1_4_B == 1){ $scope.location_1_1_4_B = data.location_1_1_4_B; $scope.location_1_1_4_B_a = false; $scope.location_1_1_4_B_b = true; $scope.location_1_1_4_B_cm = ''; } else if(data.location_1_1_4_B  == 0){ $scope.location_1_1_4_B = data.location_1_1_4_B; $scope.location_1_1_4_B_a = true; $scope.location_1_1_4_B_b = false; $scope.location_1_1_4_B_cm = ''; } else if( ((data.location_1_1_4_B  > 0 ) && (data.location_1_1_4_B  < 1)) ){ $scope.location_1_1_4_B_cm = data.location_1_1_4_B; $scope.location_1_1_4_B_a = false; $scope.location_1_1_4_B_b = false; $scope.location_1_1_4_B = ''; }else{ $scope.location_1_1_4_B = ''; $scope.location_1_1_4_B_cm = ''; $scope.location_1_1_4_B_a = false; $scope.location_1_1_4_B_b = false;}
				$scope.location_1_1_4_text = data.location_1_1_4_text;
				//1.1.5
				if(data.location_1_1_5_A == 0){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A_a = true; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A_cm = ''; } else if(data.location_1_1_5_A  == 3){ $scope.location_1_1_5_A = data.location_1_1_5_A; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = true; $scope.location_1_1_5_A_cm = ''; }else if((data.location_1_1_5_A  > 0 ) && (data.location_1_1_5_A  < 3)){ $scope.location_1_1_5_A_cm = data.location_1_1_5_A; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = false; $scope.location_1_1_5_A = ''; }else{ $scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_cm = ''; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = false; }
				$scope.location_1_1_5_text = data.location_1_1_5_text;
				//1.1.6
				if(data.location_1_1_6_A == 0){ $scope.location_1_1_6_A = data.location_1_1_6_A; $scope.location_1_1_6_A_a = true; $scope.location_1_1_6_A_b = false; $scope.location_1_1_6_A_cm = ''; } else if(data.location_1_1_6_A  == 2){ $scope.location_1_1_6_A = data.location_1_1_6_A; $scope.location_1_1_6_A_a = false; $scope.location_1_1_6_A_b = true; $scope.location_1_1_6_A_cm = ''; }else if((data.location_1_1_6_A  > 0 ) && (data.location_1_1_6_A  < 2)){ $scope.location_1_1_6_A_cm = data.location_1_1_6_A; $scope.location_1_1_6_A_a = false; $scope.location_1_1_6_A_b = false; $scope.location_1_1_6_A = ''; }else{ $scope.location_1_1_6_A = ''; $scope.location_1_1_6_A_cm = ''; $scope.location_1_1_6_A_a = false; $scope.location_1_1_6_A_b = false; }
				$scope.location_1_1_6_text = data.location_1_1_6_text;
				//1.2.1
				if(data.location_1_2_1_A == 10){ $scope.location_1_2_1_A = data.location_1_2_1_A; $scope.location_1_2_1_A_a = true; $scope.location_1_2_1_A_b = false; $scope.location_1_2_1_A_cm = ''; } else if(data.location_1_2_1_A  == 0){ $scope.location_1_2_1_A = data.location_1_2_1_A; $scope.location_1_2_1_A_a = false; $scope.location_1_2_1_A_b = true; $scope.location_1_2_1_A_cm = ''; }else if((data.location_1_2_1_A  > 0 ) && (data.location_1_2_1_A  < 10)){ $scope.location_1_2_1_A_cm = data.location_1_2_1_A; $scope.location_1_2_1_A_a = false; $scope.location_1_2_1_A_b = false; $scope.location_1_2_1_A = ''; }else{ $scope.location_1_2_1_A = ''; $scope.location_1_2_1_A_cm = ''; $scope.location_1_2_1_A_a = false; $scope.location_1_2_1_A_b = false; }
				$scope.location_1_2_1_text = data.location_1_2_1_text;
				//1.2.2
				if(data.location_1_2_2_A == 3){ $scope.location_1_2_2_A = data.location_1_2_2_A; $scope.location_1_2_2_A_a = true; $scope.location_1_2_2_A_b = false; $scope.location_1_2_2_A_c = false; $scope.location_1_2_2_A_cm = ''; } else if(data.location_1_2_2_A  == 7){ $scope.location_1_2_2_A = data.location_1_2_2_A; $scope.location_1_2_2_A_a = false; $scope.location_1_2_2_A_b = true; $scope.location_1_2_2_A_c = false; $scope.location_1_2_2_A_cm = ''; } else if(data.location_1_2_2_A  == 10){ $scope.location_1_2_2_A = data.location_1_2_2_A; $scope.location_1_2_2_A_a = false; $scope.location_1_2_2_A_b = false; $scope.location_1_2_2_A_c = true; $scope.location_1_2_2_A_cm = ''; } else if( ((data.location_1_2_2_A  > 3 ) && (data.location_1_2_2_A  < 7)) || ((data.location_1_2_2_A  >= 0 ) && (data.location_1_2_2_A  < 3)) || ((data.location_1_2_2_A  > 7 ) && (data.location_1_2_2_A  < 10)) ){ 
				$scope.location_1_2_2_A_cm = data.location_1_2_2_A; $scope.location_1_2_2_A_a = false; $scope.location_1_2_2_A_b = false; $scope.location_1_2_2_A_c = false; $scope.location_1_2_2_A = ''; }else{ $scope.location_1_2_2_A = ''; $scope.location_1_2_2_A_cm = ''; $scope.location_1_2_2_A_a = false; $scope.location_1_2_2_A_b = false; $scope.location_1_2_2_A_c = false;}
				$scope.location_1_2_2_text = data.location_1_2_2_text;
				//1.2.3
				if(data.location_1_2_3_A == 0){ $scope.location_1_2_3_A = data.location_1_2_3_A; $scope.location_1_2_3_A_a = true; $scope.location_1_2_3_A_b = false; $scope.location_1_2_3_A_cm = ''; } else if(data.location_1_2_3_A  == 1){ $scope.location_1_2_3_A = data.location_1_2_3_A; $scope.location_1_2_3_A_a = false; $scope.location_1_2_3_A_b = true; $scope.location_1_2_3_A_cm = ''; }else if((data.location_1_2_3_A  > 0 ) && (data.location_1_2_3_A  < 1)){ $scope.location_1_2_3_A_cm = data.location_1_2_3_A; $scope.location_1_2_3_A_a = false; $scope.location_1_2_3_A_b = false; $scope.location_1_2_3_A = ''; }else{ $scope.location_1_2_3_A = ''; $scope.location_1_2_3_A_cm = ''; $scope.location_1_2_3_A_a = false; $scope.location_1_2_3_A_b = false; }
				if(data.location_1_2_3_B_a == 2){ $scope.location_1_2_3_B_a = data.location_1_2_3_B_a; $scope.location_1_2_3_B_a = true; $scope.location_1_2_3_B_a_cm = ''; } else if((data.location_1_2_3_B_a  >= 0 ) && (data.location_1_2_3_B_a  < 2)){ $scope.location_1_2_3_B_a_cm = data.location_1_2_3_B_a; $scope.location_1_2_3_B_a = false; $scope.location_1_2_3_B_a = ''; }else{ $scope.location_1_2_3_B_a = ''; $scope.location_1_2_3_B_a_cm = ''; $scope.location_1_2_3_B_a = false; }
				if(data.location_1_2_3_B_b == 2){ $scope.location_1_2_3_B_b = data.location_1_2_3_B_b; $scope.location_1_2_3_B_b = true; $scope.location_1_2_3_B_b_cm = ''; } else if((data.location_1_2_3_B_b  >= 0 ) && (data.location_1_2_3_B_b  < 2)){ $scope.location_1_2_3_B_b_cm = data.location_1_2_3_B_b; $scope.location_1_2_3_B_b = false; $scope.location_1_2_3_B_b = ''; }else{ $scope.location_1_2_3_B_b = ''; $scope.location_1_2_3_B_b_cm = ''; $scope.location_1_2_3_B_b = false; }
				if(data.location_1_2_3_B_c == 2){ $scope.location_1_2_3_B_c = data.location_1_2_3_B_c; $scope.location_1_2_3_B_c = true; $scope.location_1_2_3_B_c_cm = ''; } else if((data.location_1_2_3_B_c  >= 0 ) && (data.location_1_2_3_B_c  < 2)){ $scope.location_1_2_3_B_c_cm = data.location_1_2_3_B_c; $scope.location_1_2_3_B_c = false; $scope.location_1_2_3_B_c = ''; }else{ $scope.location_1_2_3_B_c = ''; $scope.location_1_2_3_B_c_cm = ''; $scope.location_1_2_3_B_c = false; }
				if(data.location_1_2_3_B_d == 2){ $scope.location_1_2_3_B_d = data.location_1_2_3_B_d; $scope.location_1_2_3_B_d = true; $scope.location_1_2_3_B_d_cm = ''; } else if((data.location_1_2_3_B_d  >= 0 ) && (data.location_1_2_3_B_d  < 2)){ $scope.location_1_2_3_B_d_cm = data.location_1_2_3_B_d; $scope.location_1_2_3_B_d = false; $scope.location_1_2_3_B_d = ''; }else{ $scope.location_1_2_3_B_d = ''; $scope.location_1_2_3_B_d_cm = ''; $scope.location_1_2_3_B_d = false; }
				if(data.location_1_2_3_B_e == 2){ $scope.location_1_2_3_B_e = data.location_1_2_3_B_e; $scope.location_1_2_3_B_e = true; $scope.location_1_2_3_B_e_cm = ''; } else if((data.location_1_2_3_B_e  >= 0 ) && (data.location_1_2_3_B_e  < 2)){ $scope.location_1_2_3_B_e_cm = data.location_1_2_3_B_e; $scope.location_1_2_3_B_e = false; $scope.location_1_2_3_B_e = ''; }else{ $scope.location_1_2_3_B_e = ''; $scope.location_1_2_3_B_e_cm = ''; $scope.location_1_2_3_B_e = false; }
				$scope.location_1_2_3_text = data.location_1_2_3_text;
				//1.2.4
				if(data.location_1_2_4_A == 0){ $scope.location_1_2_4_A = data.location_1_2_4_A; $scope.location_1_2_4_A_a = true; $scope.location_1_2_4_A_b = false; $scope.location_1_2_4_A_cm = ''; } else if(data.location_1_2_4_A  == 3){ $scope.location_1_2_4_A = data.location_1_2_4_A; $scope.location_1_2_4_A_a = false; $scope.location_1_2_4_A_b = true; $scope.location_1_2_4_A_cm = ''; } else if( (data.location_1_2_4_A  > 0 ) && (data.location_1_2_4_A  < 3) ){ $scope.location_1_2_4_A_cm = data.location_1_2_4_A; $scope.location_1_2_4_A_a = false; $scope.location_1_2_4_A_b = false; $scope.location_1_2_4_A = ''; }else{ $scope.location_1_2_4_A = ''; $scope.location_1_2_4_A_cm = ''; $scope.location_1_2_4_A_a = false; $scope.location_1_2_4_A_b = false; }
				if(data.location_1_2_4_B == 0){ $scope.location_1_2_4_B = data.location_1_2_4_B; $scope.location_1_2_4_B_a = true; $scope.location_1_2_4_B_b = false; $scope.location_1_2_4_B_cm = ''; } else if(data.location_1_2_4_B  == 3){ $scope.location_1_2_4_B = data.location_1_2_4_B; $scope.location_1_2_4_B_a = false; $scope.location_1_2_4_B_b = true; $scope.location_1_2_4_B_cm = ''; } else if( (data.location_1_2_4_B  > 0 ) && (data.location_1_2_4_B  < 3) ){ $scope.location_1_2_4_B_cm = data.location_1_2_4_B; $scope.location_1_2_4_B_a = false; $scope.location_1_2_4_B_b = false; $scope.location_1_2_4_B = ''; }else{ $scope.location_1_2_4_B = ''; $scope.location_1_2_4_B_cm = ''; $scope.location_1_2_4_B_a = false; $scope.location_1_2_4_B_b = false; }
				if(data.location_1_2_4_C == 0){ $scope.location_1_2_4_C = data.location_1_2_4_C; $scope.location_1_2_4_C_a = true; $scope.location_1_2_4_C_b = false; $scope.location_1_2_4_C_cm = ''; } else if(data.location_1_2_4_C  == 3){ $scope.location_1_2_4_C = data.location_1_2_4_C; $scope.location_1_2_4_C_a = false; $scope.location_1_2_4_C_b = true; $scope.location_1_2_4_C_cm = ''; } else if( (data.location_1_2_4_C  > 0 ) && (data.location_1_2_4_C  < 3) ){ $scope.location_1_2_4_C_cm = data.location_1_2_4_C; $scope.location_1_2_4_C_a = false; $scope.location_1_2_4_C_b = false; $scope.location_1_2_4_C = ''; }else{ $scope.location_1_2_4_C = ''; $scope.location_1_2_4_C_cm = ''; $scope.location_1_2_4_C_a = false; $scope.location_1_2_4_C_b = false; }
				$scope.location_1_2_4_text = data.location_1_2_4_text;
				//1.2.5
				if(data.location_1_2_5_A == 0){ $scope.location_1_2_5_A = data.location_1_2_5_A; $scope.location_1_2_5_A_a = true; $scope.location_1_2_5_A_b = false; $scope.location_1_2_5_A_cm = ''; } else if(data.location_1_2_5_A  == 5){ $scope.location_1_2_5_A = data.location_1_2_5_A; $scope.location_1_2_5_A_a = false; $scope.location_1_2_5_A_b = true; $scope.location_1_2_5_A_cm = ''; } else if( (data.location_1_2_5_A  > 0 ) && (data.location_1_2_5_A  < 5) ){ $scope.location_1_2_5_A_cm = data.location_1_2_5_A; $scope.location_1_2_5_A_a = false; $scope.location_1_2_5_A_b = false; $scope.location_1_2_5_A = ''; }else{ $scope.location_1_2_5_A = ''; $scope.location_1_2_5_A_cm = ''; $scope.location_1_2_5_A_a = false; $scope.location_1_2_5_A_b = false; }
				if(data.location_1_2_5_B == 0){ $scope.location_1_2_5_B = data.location_1_2_5_B; $scope.location_1_2_5_B_a = true; $scope.location_1_2_5_B_b = false; $scope.location_1_2_5_B_cm = ''; } else if(data.location_1_2_5_B  == 5){ $scope.location_1_2_5_B = data.location_1_2_5_B; $scope.location_1_2_5_B_a = false; $scope.location_1_2_5_B_b = true; $scope.location_1_2_5_B_cm = ''; } else if( (data.location_1_2_5_B  > 0 ) && (data.location_1_2_5_B  < 5) ){ $scope.location_1_2_5_B_cm = data.location_1_2_5_B; $scope.location_1_2_5_B_a = false; $scope.location_1_2_5_B_b = false; $scope.location_1_2_5_B = ''; }else{ $scope.location_1_2_5_B = ''; $scope.location_1_2_5_B_cm = ''; $scope.location_1_2_5_B_a = false; $scope.location_1_2_5_B_b = false; }
				if(data.location_1_2_5_C == 0){ $scope.location_1_2_5_C = data.location_1_2_5_C; $scope.location_1_2_5_C_a = true; $scope.location_1_2_5_C_b = false; $scope.location_1_2_5_C_cm = ''; } else if(data.location_1_2_5_C  == 5){ $scope.location_1_2_5_C = data.location_1_2_5_C; $scope.location_1_2_5_C_a = false; $scope.location_1_2_5_C_b = true; $scope.location_1_2_5_C_cm = ''; } else if( (data.location_1_2_5_C  > 0 ) && (data.location_1_2_5_C  < 5) ){ $scope.location_1_2_5_C_cm = data.location_1_2_5_C; $scope.location_1_2_5_C_a = false; $scope.location_1_2_5_C_b = false; $scope.location_1_2_5_C = ''; }else{ $scope.location_1_2_5_C = ''; $scope.location_1_2_5_C_cm = ''; $scope.location_1_2_5_C_a = false; $scope.location_1_2_5_C_b = false; }
				if(data.location_1_2_5_D == 0){ $scope.location_1_2_5_D = data.location_1_2_5_D; $scope.location_1_2_5_D_a = true; $scope.location_1_2_5_D_b = false; $scope.location_1_2_5_D_cm = ''; } else if(data.location_1_2_5_D  == 5){ $scope.location_1_2_5_D = data.location_1_2_5_D; $scope.location_1_2_5_D_a = false; $scope.location_1_2_5_D_b = true; $scope.location_1_2_5_D_cm = ''; } else if( (data.location_1_2_5_D  > 0 ) && (data.location_1_2_5_D  < 5) ){ $scope.location_1_2_5_D_cm = data.location_1_2_5_D; $scope.location_1_2_5_D_a = false; $scope.location_1_2_5_D_b = false; $scope.location_1_2_5_D = ''; }else{ $scope.location_1_2_5_D = ''; $scope.location_1_2_5_D_cm = ''; $scope.location_1_2_5_D_a = false; $scope.location_1_2_5_D_b = false; }
				$scope.location_1_2_5_text = data.location_1_2_5_text;
			

			});
	};
	
	<!--------- Interchanging Selected Marks Custom Marks ----------------->
	
	//LOCATION
	
	$scope.check_location_1_1_1_A = function(){	$scope.location_1_1_1_A = ''; $scope.location_1_1_1_A_a = false; $scope.location_1_1_1_A_b = false;	};
	$scope.check_location_1_1_1_A_cm = function(){	$scope.location_1_1_1_A_cm = ''; };
	$scope.check_location_1_1_2_A = function(){	$scope.location_1_1_2_A = ''; $scope.location_1_1_2_A_a = false; $scope.location_1_1_2_A_b = false;	};
	$scope.check_location_1_1_2_A_cm = function(){	$scope.location_1_1_2_A_cm = ''; };
	$scope.check_location_1_1_3_A = function(){	$scope.location_1_1_3_A = ''; $scope.location_1_1_3_A_a = false; $scope.location_1_1_3_A_b = false;	};
	$scope.check_location_1_1_3_A_cm = function(){	$scope.location_1_1_3_A_cm = ''; };
	$scope.check_location_1_1_3_B = function(){	$scope.location_1_1_3_B = ''; $scope.location_1_1_3_B_a = false; $scope.location_1_1_3_B_b = false;	};
	$scope.check_location_1_1_3_B_cm = function(){	$scope.location_1_1_3_B_cm = ''; };
	$scope.check_location_1_1_4_A = function(){	$scope.location_1_1_4_A = ''; $scope.location_1_1_4_A_a = false; $scope.location_1_1_4_A_b = false; $scope.location_1_1_4_A_c = false;	};
	$scope.check_location_1_1_4_A_cm = function(){	$scope.location_1_1_4_A_cm = ''; };
	$scope.check_location_1_1_4_B = function(){	$scope.location_1_1_4_B = ''; $scope.location_1_1_4_B_a = false; $scope.location_1_1_4_B_b = false;	};
	$scope.check_location_1_1_4_B_cm = function(){	$scope.location_1_1_4_B_cm = ''; };
	$scope.check_location_1_1_5_A = function(){	$scope.location_1_1_5_A = ''; $scope.location_1_1_5_A_a = false; $scope.location_1_1_5_A_b = false;	};
	$scope.check_location_1_1_5_A_cm = function(){	$scope.location_1_1_5_A_cm = ''; };
	$scope.check_location_1_1_6_A = function(){	$scope.location_1_1_6_A = ''; $scope.location_1_1_6_A_a = false; $scope.location_1_1_6_A_b = false;	};
	$scope.check_location_1_1_6_A_cm = function(){	$scope.location_1_1_6_A_cm = ''; };
	$scope.check_location_1_2_1_A = function(){	$scope.location_1_2_1_A = ''; $scope.location_1_2_1_A_a = false; $scope.location_1_2_1_A_b = false;	};
	$scope.check_location_1_2_1_A_cm = function(){	$scope.location_1_2_1_A_cm = ''; };
	$scope.check_location_1_2_2_A = function(){	$scope.location_1_2_2_A = ''; $scope.location_1_2_2_A_a = false; $scope.location_1_2_2_A_b = false; $scope.location_1_2_2_A_c = false;	};
	$scope.check_location_1_2_2_A_cm = function(){	$scope.location_1_2_2_A_cm = ''; };
	$scope.check_location_1_2_3_A = function(){	$scope.location_1_2_3_A = ''; $scope.location_1_2_3_A_a = false; $scope.location_1_2_3_A_b = false;	};
	$scope.check_location_1_2_3_A_cm = function(){	$scope.location_1_2_3_A_cm = ''; };
	$scope.check_location_1_2_3_B_a = function(){ $scope.location_1_2_3_B_a = ''; $scope.location_1_2_3_B_a = false; };
	$scope.check_location_1_2_3_B_a_cm = function(){ $scope.location_1_2_3_B_a_cm = ''; };
	$scope.check_location_1_2_3_B_b = function(){ $scope.location_1_2_3_B_b = ''; $scope.location_1_2_3_B_b = false; };
	$scope.check_location_1_2_3_B_b_cm = function(){ $scope.location_1_2_3_B_b_cm = ''; };
	$scope.check_location_1_2_3_B_c = function(){ $scope.location_1_2_3_B_c = ''; $scope.location_1_2_3_B_c = false; };
	$scope.check_location_1_2_3_B_c_cm = function(){ $scope.location_1_2_3_B_c_cm = ''; };
	$scope.check_location_1_2_3_B_d = function(){ $scope.location_1_2_3_B_d = ''; $scope.location_1_2_3_B_d = false; };
	$scope.check_location_1_2_3_B_d_cm = function(){ $scope.location_1_2_3_B_d_cm = ''; };
	$scope.check_location_1_2_3_B_e = function(){ $scope.location_1_2_3_B_e = ''; $scope.location_1_2_3_B_e = false; };
	$scope.check_location_1_2_3_B_e_cm = function(){ $scope.location_1_2_3_B_e_cm = ''; };
	$scope.check_location_1_2_4_A = function(){	$scope.location_1_2_4_A = ''; $scope.location_1_2_4_A_a = false; $scope.location_1_2_4_A_b = false;	};
	$scope.check_location_1_2_4_A_cm = function(){	$scope.location_1_2_4_A_cm = ''; };
	$scope.check_location_1_2_4_B = function(){	$scope.location_1_2_4_B = ''; $scope.location_1_2_4_B_a = false; $scope.location_1_2_4_B_b = false;	};
	$scope.check_location_1_2_4_B_cm = function(){	$scope.location_1_2_4_B_cm = ''; };
	$scope.check_location_1_2_4_C = function(){	$scope.location_1_2_4_C = ''; $scope.location_1_2_4_C_a = false; $scope.location_1_2_4_C_b = false;	};
	$scope.check_location_1_2_4_C_cm = function(){	$scope.location_1_2_4_C_cm = ''; };
	$scope.check_location_1_2_5_A = function(){	$scope.location_1_2_5_A = ''; $scope.location_1_2_5_A_a = false; $scope.location_1_2_5_A_b = false;	};
	$scope.check_location_1_2_5_A_cm = function(){	$scope.location_1_2_5_A_cm = ''; };
	$scope.check_location_1_2_5_B = function(){	$scope.location_1_2_5_B = ''; $scope.location_1_2_5_B_a = false; $scope.location_1_2_5_B_b = false;	};
	$scope.check_location_1_2_5_B_cm = function(){	$scope.location_1_2_5_B_cm = ''; };
	$scope.check_location_1_2_5_C = function(){	$scope.location_1_2_5_C = ''; $scope.location_1_2_5_C_a = false; $scope.location_1_2_5_C_b = false;	};
	$scope.check_location_1_2_5_C_cm = function(){	$scope.location_1_2_5_C_cm = ''; };
	$scope.check_location_1_2_5_D = function(){	$scope.location_1_2_5_D = ''; $scope.location_1_2_5_D_a = false; $scope.location_1_2_5_D_b = false;	};
	$scope.check_location_1_2_5_D_cm = function(){	$scope.location_1_2_5_D_cm = ''; };
	
	

	
	<!---------- End Interchanging Selected Marks Custom Marks ------------>
	
	$scope.open_assessment_sheet_for_cottage = function(){
		var modal_popup = angular.element('#assessment_sheet_for_cottage_panel');
		modal_popup.modal('show');
	};
	$scope.close_assessment_sheet_for_cottage = function(){
		var modal_popup = angular.element('#assessment_sheet_for_cottage_panel');
		modal_popup.modal('hide');
	};
	$scope.check_for_assessment_form_changes_cottage = function(){
		if($scope.show_asteric_cottage == '*'){ $scope.assessment_cottage_form_changes = true; $scope.open_save_changes(); }else{ $scope.close_assessment_sheet_for_cottage(); };
	};
	$scope.save_and_exit_cottage= function(){
	$scope.from_save_cottage = 'save_and_exit';
	$scope.submit_assessment_cottage_form();
	};
	$scope.close_without_save_cottage= function(){
	$scope.close_assessment_sheet_for_cottage();
	$scope.close_save_changes();
	};
	
	$scope.submit_assessment_cottage_form = function(){
		if($scope.from_save_cottage == 'save_and_exit') { $scope.close_save_changes(); }else{ $scope.from_save_cottage = ''; };		
		$scope.submitting_in_progress = true;
		$scope.submitted_successfully = false;
		$scope.submitted_unsuccessfully = false;
		$scope.show_checkmark = false;
		$scope.show_animated_exclamation_icon = false;
		$scope.show_funika_kurasa_with_status();
		$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/insert_assessment_cottage.php",
			data:{					
				'facility_id':$scope.facility_id,
				'assessor_category':$scope.assessor_category,
				'assessment_id':$scope.assessment_id,
				'assessment_score_cottage':$scope.assessment_score_cottage,
				//LOCATION 1.0
				//1.1
				//1.1.1
				'location_1_1_1_A':$scope.location_1_1_1_A,
				'location_1_1_1_A_cm':$scope.location_1_1_1_A_cm,
				'location_1_1_1_text':$scope.location_1_1_1_text,
				//1.1.2
				'location_1_1_2_A':$scope.location_1_1_2_A,
				'location_1_1_2_A_cm':$scope.location_1_1_2_A_cm,
				'location_1_1_2_text':$scope.location_1_1_2_text,				
				//1.1.3
				'location_1_1_3_A':$scope.location_1_1_3_A,
				'location_1_1_3_A_cm':$scope.location_1_1_3_A_cm,
				'location_1_1_3_B':$scope.location_1_1_3_B,
				'location_1_1_3_B_cm':$scope.location_1_1_3_B_cm,
				'location_1_1_3_text':$scope.location_1_1_3_text,
				//1.1.4		
				'location_1_1_4_A':$scope.location_1_1_4_A,
				'location_1_1_4_A_cm':$scope.location_1_1_4_A_cm,
				'location_1_1_4_B':$scope.location_1_1_4_B,
				'location_1_1_4_B_cm':$scope.location_1_1_4_B_cm,
				'location_1_1_4_text':$scope.location_1_1_4_text,
				//1.1.5		
				'location_1_1_5_A':$scope.location_1_1_5_A,
				'location_1_1_5_A_cm':$scope.location_1_1_5_A_cm,
				'location_1_1_5_text':$scope.location_1_1_5_text,
				//1.1.6		
				'location_1_1_6_A':$scope.location_1_1_6_A,
				'location_1_1_6_A_cm':$scope.location_1_1_6_A_cm,
				'location_1_1_6_text':$scope.location_1_1_6_text,
				//1.2
				//1.2.1
				'location_1_2_1_text':$scope.location_1_2_1_text,
				'location_1_2_1_A':$scope.location_1_2_1_A,
				'location_1_2_1_A_cm':$scope.location_1_2_1_A_cm,				
				//1.2.2
				'location_1_2_2_text':$scope.location_1_2_2_text,
				'location_1_2_2_A':$scope.location_1_2_2_A,
				'location_1_2_2_A_cm':$scope.location_1_2_2_A_cm,
				//1.2.3
				'location_1_2_3_text':$scope.location_1_2_3_text,
				'location_1_2_3_A':$scope.location_1_2_3_A,
				'location_1_2_3_A_cm':$scope.location_1_2_3_A_cm,								
				'location_1_2_3_B_a':$scope.location_1_2_3_B_a,
				'location_1_2_3_B_a_cm':$scope.location_1_2_3_B_a_cm,
				'location_1_2_3_B_b':$scope.location_1_2_3_B_b,
				'location_1_2_3_B_b_cm':$scope.location_1_2_3_B_b_cm,
				'location_1_2_3_B_c':$scope.location_1_2_3_B_c,
				'location_1_2_3_B_c_cm':$scope.location_1_2_3_B_c_cm,
				'location_1_2_3_B_d':$scope.location_1_2_3_B_d,
				'location_1_2_3_B_d_cm':$scope.location_1_2_3_B_d_cm,
				'location_1_2_3_B_e':$scope.location_1_2_3_B_e,
				'location_1_2_3_B_e_cm':$scope.location_1_2_3_B_e_cm,
				//1.2.4
				'location_1_2_4_text':$scope.location_1_2_4_text,
				'location_1_2_4_A':$scope.location_1_2_4_A,
				'location_1_2_4_A_cm':$scope.location_1_2_4_A_cm,
				'location_1_2_4_B':$scope.location_1_2_4_B,
				'location_1_2_4_B_cm':$scope.location_1_2_4_B_cm,
				'location_1_2_4_C':$scope.location_1_2_4_C,
				'location_1_2_4_C_cm':$scope.location_1_2_4_C_cm,
				//1.2.5
				'location_1_2_5_text':$scope.location_1_2_5_text,
				'location_1_2_5_A':$scope.location_1_2_5_A,
				'location_1_2_5_A_cm':$scope.location_1_2_5_A_cm,
				'location_1_2_5_B':$scope.location_1_2_5_B,
				'location_1_2_5_B_cm':$scope.location_1_2_5_B_cm,
				'location_1_2_5_C':$scope.location_1_2_5_C,
				'location_1_2_5_C_cm':$scope.location_1_2_5_C_cm,
				'location_1_2_5_D':$scope.location_1_2_5_D,
				'location_1_2_5_D_cm':$scope.location_1_2_5_D_cm,								
								
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
			$scope.show_asteric_cottage = ''; 
			$scope.status_success_message = 'Saved!';
			$scope.action = 'edit_record';
			$scope.assessment_id = data.assessment_id;
			$timeout(function(){ $scope.submitted_successfully = true; $scope.submitting_in_progress = false; $scope.show_checkmark = true; }, 2000);
			$scope.fetchData_after_changes(); //direct access from assessment panel
			$scope.fetch_assessment_sheets_links();			
			$scope.fetchStatus();
				$timeout(function()
				{ 
					if($scope.from_save_cottage =='save_and_exit')
					{ 
					$scope.close_assessment_sheet_for_cottage(); $scope.close_funika_kurasa_with_status(); $scope.from_save_cottage = ''; 
					}
					else
					{ 
					$scope.close_funika_kurasa_with_status();
					}
				}, 3000);
			}

		});		
	};
	

	$scope.futa_radio_check_values_cottage = function(){
		//LOCATION 1.0
			//1.1
				//1.1.1
				$scope.location_1_1_1_A = '';
				$scope.location_1_1_1_A_cm = '';
				$scope.location_1_1_1_text = '';
				//1.1.2
				$scope.location_1_1_2_A = '';
				$scope.location_1_1_2_A_cm = '';
				$scope.location_1_1_2_text = '';				
				//1.1.3
				$scope.location_1_1_3_A = '';
				$scope.location_1_1_3_A_cm = '';
				$scope.location_1_1_3_B = '';
				$scope.location_1_1_3_B_cm = '';
				$scope.location_1_1_3_text = '';
				//1.1.4		
				$scope.location_1_1_4_A = '';
				$scope.location_1_1_4_A_cm = '';
				$scope.location_1_1_4_B = '';
				$scope.location_1_1_4_B_cm = '';
				$scope.location_1_1_4_text = '';
				//1.1.5		
				$scope.location_1_1_5_A = '';
				$scope.location_1_1_5_A_cm = '';
				$scope.location_1_1_5_text = '';
				//1.1.6		
				$scope.location_1_1_6_A = '';
				$scope.location_1_1_6_A_cm = '';
				$scope.location_1_1_6_text = '';
			//1.2
				//1.2.1
				$scope.location_1_2_1_text = '';
				$scope.location_1_2_1_A = '';
				$scope.location_1_2_1_A_cm = '';				
				//1.2.2
				$scope.location_1_2_2_text = '';
				$scope.location_1_2_2_A = '';
				$scope.location_1_2_2_A_cm = '';
				//1.2.3
				$scope.location_1_2_3_text = '';
				$scope.location_1_2_3_A = '';
				$scope.location_1_2_3_A_cm = '';
				//Checkboxes
				$scope.location_1_2_3_B_a = '';
				$scope.location_1_2_3_B_a_cm = '';
				$scope.location_1_2_3_B_b = '';
				$scope.location_1_2_3_B_b_cm = '';
				$scope.location_1_2_3_B_c = '';
				$scope.location_1_2_3_B_c_cm = '';
				$scope.location_1_2_3_B_d = '';
				$scope.location_1_2_3_B_d_cm = '';
				$scope.location_1_2_3_B_e = '';
				$scope.location_1_2_3_B_e_cm = '';
				//1.2.4
				$scope.location_1_2_4_text = '';
				$scope.location_1_2_4_A = '';
				$scope.location_1_2_4_A_cm = '';
				$scope.location_1_2_4_B = '';
				$scope.location_1_2_4_B_cm = '';
				$scope.location_1_2_4_C = '';
				$scope.location_1_2_4_C_cm = '';
				//1.2.5
				$scope.location_1_2_5_text = '';
				$scope.location_1_2_5_A = '';
				$scope.location_1_2_5_A_cm = '';
				$scope.location_1_2_5_B = '';
				$scope.location_1_2_5_B_cm = '';
				$scope.location_1_2_5_C = '';
				$scope.location_1_2_5_C_cm = '';
				$scope.location_1_2_5_D = '';
				$scope.location_1_2_5_D_cm = '';
		

	
	};
	
	

};