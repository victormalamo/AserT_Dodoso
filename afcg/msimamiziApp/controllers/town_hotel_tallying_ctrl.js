app.town_hotel_tallying_ctrl = function($timeout, $scope, $http, focus){

		 $scope.fetch_town_hotel_items_for_tallying = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_town_hotel_items_for_tallying.php",
			data:{'assessment_id':assessment_id, 'assessor_category':assessor_category }
			}).success(function(data){
			$scope.scores_columns = 6;
			$scope.show_one_assessor_column = true;
			
						
			//SECTIONS STARS CONSTS 
				var section_star_exact_length = 17;
				var section_star_total_length = 17;
				var section_three_stars_number_of_stars = 3;
				var section_four_stars_number_of_stars = 4;
				var section_five_stars_number_of_stars = 5;				
				var section_star_portion_color = "#fde585";
				var reconciliation_line = 5;
						
						
<!-----------------------------  AVERAGE  -------------------------------------------->
			
			//LOCATION 1.0			
				
				//Single Assessor
				$scope.location_1_0_self_self = data.location_1_0_self_self;
				$scope.location_1_1_self_self = data.location_1_1_self_self;
				$scope.location_1_2_self_self = data.location_1_2_self_self;
				//Assessor 1
				$scope.location_1_0_self_assessor_1 = data.location_1_0_self_assessor_1;
				$scope.location_1_1_self_assessor_1 = data.location_1_1_self_assessor_1;
				$scope.location_1_2_self_assessor_1 = data.location_1_2_self_assessor_1;
				//Assessor 2
				$scope.location_1_0_self_assessor_2 = data.location_1_0_self_assessor_2;
				$scope.location_1_1_self_assessor_2 = data.location_1_1_self_assessor_2;
				$scope.location_1_2_self_assessor_2 = data.location_1_2_self_assessor_2;
				//Assessor 3
				$scope.location_1_0_self_assessor_3 = data.location_1_0_self_assessor_3;
				$scope.location_1_1_self_assessor_3 = data.location_1_1_self_assessor_3;
				$scope.location_1_2_self_assessor_3 = data.location_1_2_self_assessor_3;								
				//Location and Subsections Average
				$scope.location_1_0_average = ((data.location_1_0_self_assessor_1 + data.location_1_0_self_assessor_2 + data.location_1_0_self_assessor_3)/3);				
				$scope.location_1_1_average = ((data.location_1_1_self_assessor_1 + data.location_1_1_self_assessor_2 + data.location_1_1_self_assessor_3)/3);
				$scope.location_1_2_average = ((data.location_1_2_self_assessor_1 + data.location_1_2_self_assessor_2 + data.location_1_2_self_assessor_3)/3);
				//Location Reconcilliation
				$scope.location_not_reconciled = false;
					//1.1
					$scope.location_1_1_self_assessor_1_not_reconciled = false;
					$scope.location_1_1_self_assessor_2_not_reconciled = false;
					$scope.location_1_1_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.location_1_1_self_assessor_1 - $scope.location_1_1_self_assessor_2) > reconciliation_line){ $scope.location_1_1_self_assessor_1_not_reconciled = true; $scope.location_1_1_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
					if (Math.abs($scope.location_1_1_self_assessor_1 - $scope.location_1_1_self_assessor_3) > reconciliation_line){ $scope.location_1_1_self_assessor_1_not_reconciled = true; $scope.location_1_1_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
					if (Math.abs($scope.location_1_1_self_assessor_2 - $scope.location_1_1_self_assessor_3) > reconciliation_line){ $scope.location_1_1_self_assessor_2_not_reconciled = true; $scope.location_1_1_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
					//1.2
					$scope.location_1_2_self_assessor_1_not_reconciled = false;
					$scope.location_1_2_self_assessor_2_not_reconciled = false;
					$scope.location_1_2_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.location_1_2_self_assessor_1 - $scope.location_1_2_self_assessor_2) > reconciliation_line){ $scope.location_1_2_self_assessor_1_not_reconciled = true; $scope.location_1_2_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
					if (Math.abs($scope.location_1_2_self_assessor_1 - $scope.location_1_2_self_assessor_3) > reconciliation_line){ $scope.location_1_2_self_assessor_1_not_reconciled = true; $scope.location_1_2_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
					if (Math.abs($scope.location_1_2_self_assessor_2 - $scope.location_1_2_self_assessor_3) > reconciliation_line){ $scope.location_1_2_self_assessor_2_not_reconciled = true; $scope.location_1_2_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
								
			//BUILDING 2.0
				//Single Assessor
				$scope.building_2_0_self_self = data.building_2_0_self_self;
				$scope.building_2_1_self_self = data.building_2_1_self_self;
				$scope.building_2_2_self_self = data.building_2_2_self_self;
				$scope.building_2_3_self_self = data.building_2_3_self_self;
				$scope.building_2_4_self_self = data.building_2_4_self_self;
				//Assessor 1
				$scope.building_2_0_self_assessor_1 = data.building_2_0_self_assessor_1;
				$scope.building_2_1_self_assessor_1 = data.building_2_1_self_assessor_1;
				$scope.building_2_2_self_assessor_1 = data.building_2_2_self_assessor_1;
				$scope.building_2_3_self_assessor_1 = data.building_2_3_self_assessor_1;
				$scope.building_2_4_self_assessor_1 = data.building_2_4_self_assessor_1;
				//Assessor 2
				$scope.building_2_0_self_assessor_2 = data.building_2_0_self_assessor_2;
				$scope.building_2_1_self_assessor_2 = data.building_2_1_self_assessor_2;
				$scope.building_2_2_self_assessor_2 = data.building_2_2_self_assessor_2;
				$scope.building_2_3_self_assessor_2 = data.building_2_3_self_assessor_2;
				$scope.building_2_4_self_assessor_2 = data.building_2_4_self_assessor_2;
				//Assessor 3
				$scope.building_2_0_self_assessor_3 = data.building_2_0_self_assessor_3;
				$scope.building_2_1_self_assessor_3 = data.building_2_1_self_assessor_3;
				$scope.building_2_2_self_assessor_3 = data.building_2_2_self_assessor_3;
				$scope.building_2_3_self_assessor_3 = data.building_2_3_self_assessor_3;
				$scope.building_2_4_self_assessor_3 = data.building_2_4_self_assessor_3;								
				//building and Subsections Average
				$scope.building_2_0_average = ((data.building_2_0_self_assessor_1 + data.building_2_0_self_assessor_2 + data.building_2_0_self_assessor_3)/3);				
				$scope.building_2_1_average = ((data.building_2_1_self_assessor_1 + data.building_2_1_self_assessor_2 + data.building_2_1_self_assessor_3)/3);
				$scope.building_2_2_average = ((data.building_2_2_self_assessor_1 + data.building_2_2_self_assessor_2 + data.building_2_2_self_assessor_3)/3);
				$scope.building_2_3_average = ((data.building_2_3_self_assessor_1 + data.building_2_3_self_assessor_2 + data.building_2_3_self_assessor_3)/3);
				$scope.building_2_4_average = ((data.building_2_4_self_assessor_1 + data.building_2_4_self_assessor_2 + data.building_2_4_self_assessor_3)/3);
				//building Reconcilliation
				$scope.building_not_reconciled = false;
					//2.1
					$scope.building_2_1_self_assessor_1_not_reconciled = false;
					$scope.building_2_1_self_assessor_2_not_reconciled = false;
					$scope.building_2_1_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.building_2_1_self_assessor_1 - $scope.building_2_1_self_assessor_2) > reconciliation_line){ $scope.building_2_1_self_assessor_1_not_reconciled = true; $scope.building_2_1_self_assessor_2_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_1_self_assessor_1 - $scope.building_2_1_self_assessor_3) > reconciliation_line){ $scope.building_2_1_self_assessor_1_not_reconciled = true; $scope.building_2_1_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_1_self_assessor_2 - $scope.building_2_1_self_assessor_3) > reconciliation_line){ $scope.building_2_1_self_assessor_2_not_reconciled = true; $scope.building_2_1_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					//2.2
					$scope.building_2_2_self_assessor_1_not_reconciled = false;
					$scope.building_2_2_self_assessor_2_not_reconciled = false;
					$scope.building_2_2_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.building_2_2_self_assessor_1 - $scope.building_2_2_self_assessor_2) > reconciliation_line){ $scope.building_2_2_self_assessor_1_not_reconciled = true; $scope.building_2_2_self_assessor_2_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_2_self_assessor_1 - $scope.building_2_2_self_assessor_3) > reconciliation_line){ $scope.building_2_2_self_assessor_1_not_reconciled = true; $scope.building_2_2_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_2_self_assessor_2 - $scope.building_2_2_self_assessor_3) > reconciliation_line){ $scope.building_2_2_self_assessor_2_not_reconciled = true; $scope.building_2_2_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					//2.3
					$scope.building_2_3_self_assessor_1_not_reconciled = false;
					$scope.building_2_3_self_assessor_2_not_reconciled = false;
					$scope.building_2_3_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.building_2_3_self_assessor_1 - $scope.building_2_3_self_assessor_2) > reconciliation_line){ $scope.building_2_3_self_assessor_1_not_reconciled = true; $scope.building_2_3_self_assessor_2_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_3_self_assessor_1 - $scope.building_2_3_self_assessor_3) > reconciliation_line){ $scope.building_2_3_self_assessor_1_not_reconciled = true; $scope.building_2_3_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_3_self_assessor_2 - $scope.building_2_3_self_assessor_3) > reconciliation_line){ $scope.building_2_3_self_assessor_2_not_reconciled = true; $scope.building_2_3_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					//2.4
					$scope.building_2_4_self_assessor_1_not_reconciled = false;
					$scope.building_2_4_self_assessor_2_not_reconciled = false;
					$scope.building_2_4_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.building_2_4_self_assessor_1 - $scope.building_2_4_self_assessor_2) > reconciliation_line){ $scope.building_2_4_self_assessor_1_not_reconciled = true; $scope.building_2_4_self_assessor_2_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_4_self_assessor_1 - $scope.building_2_4_self_assessor_3) > reconciliation_line){ $scope.building_2_4_self_assessor_1_not_reconciled = true; $scope.building_2_4_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
					if (Math.abs($scope.building_2_4_self_assessor_2 - $scope.building_2_4_self_assessor_3) > reconciliation_line){ $scope.building_2_4_self_assessor_2_not_reconciled = true; $scope.building_2_4_self_assessor_3_not_reconciled = true; $scope.building_not_reconciled = true; }
			
			//FRONT OFFICE 3.0
				//Single Assessor
				$scope.front_office_3_0_self_self = data.front_office_3_0_self_self;
				$scope.front_office_3_1_self_self = data.front_office_3_1_self_self;
				$scope.front_office_3_2_self_self = data.front_office_3_2_self_self;
				$scope.front_office_3_3_self_self = data.front_office_3_3_self_self;
				$scope.front_office_3_4_self_self = data.front_office_3_4_self_self;
				$scope.front_office_3_5_self_self = data.front_office_3_5_self_self;
				$scope.front_office_3_6_self_self = data.front_office_3_6_self_self;
				$scope.front_office_3_7_self_self = data.front_office_3_7_self_self;
				$scope.front_office_3_8_self_self = data.front_office_3_8_self_self;
				$scope.front_office_3_9_self_self = data.front_office_3_9_self_self;
				//Assessor 1
				$scope.front_office_3_0_self_assessor_1 = data.front_office_3_0_self_assessor_1;
				$scope.front_office_3_1_self_assessor_1 = data.front_office_3_1_self_assessor_1;
				$scope.front_office_3_2_self_assessor_1 = data.front_office_3_2_self_assessor_1;
				$scope.front_office_3_3_self_assessor_1 = data.front_office_3_3_self_assessor_1;
				$scope.front_office_3_4_self_assessor_1 = data.front_office_3_4_self_assessor_1;
				$scope.front_office_3_5_self_assessor_1 = data.front_office_3_5_self_assessor_1;
				$scope.front_office_3_6_self_assessor_1 = data.front_office_3_6_self_assessor_1;
				$scope.front_office_3_7_self_assessor_1 = data.front_office_3_7_self_assessor_1;
				$scope.front_office_3_8_self_assessor_1 = data.front_office_3_8_self_assessor_1;
				$scope.front_office_3_9_self_assessor_1 = data.front_office_3_9_self_assessor_1;
				//Assessor 2
				$scope.front_office_3_0_self_assessor_2 = data.front_office_3_0_self_assessor_2;
				$scope.front_office_3_1_self_assessor_2 = data.front_office_3_1_self_assessor_2;
				$scope.front_office_3_2_self_assessor_2 = data.front_office_3_2_self_assessor_2;
				$scope.front_office_3_3_self_assessor_2 = data.front_office_3_3_self_assessor_2;
				$scope.front_office_3_4_self_assessor_2 = data.front_office_3_4_self_assessor_2;
				$scope.front_office_3_5_self_assessor_2 = data.front_office_3_5_self_assessor_2;
				$scope.front_office_3_6_self_assessor_2 = data.front_office_3_6_self_assessor_2;
				$scope.front_office_3_7_self_assessor_2 = data.front_office_3_7_self_assessor_2;
				$scope.front_office_3_8_self_assessor_2 = data.front_office_3_8_self_assessor_2;
				$scope.front_office_3_9_self_assessor_2 = data.front_office_3_9_self_assessor_2;
				//Assessor 3
				$scope.front_office_3_0_self_assessor_3 = data.front_office_3_0_self_assessor_3;
				$scope.front_office_3_1_self_assessor_3 = data.front_office_3_1_self_assessor_3;
				$scope.front_office_3_2_self_assessor_3 = data.front_office_3_2_self_assessor_3;
				$scope.front_office_3_3_self_assessor_3 = data.front_office_3_3_self_assessor_3;
				$scope.front_office_3_4_self_assessor_3 = data.front_office_3_4_self_assessor_3;
				$scope.front_office_3_5_self_assessor_3 = data.front_office_3_5_self_assessor_3;
				$scope.front_office_3_6_self_assessor_3 = data.front_office_3_6_self_assessor_3;
				$scope.front_office_3_7_self_assessor_3 = data.front_office_3_7_self_assessor_3;
				$scope.front_office_3_8_self_assessor_3 = data.front_office_3_8_self_assessor_3;
				$scope.front_office_3_9_self_assessor_3 = data.front_office_3_9_self_assessor_3;
				//Front office and Subsections Average
				$scope.front_office_3_0_average = ((data.front_office_3_0_self_assessor_1 + data.front_office_3_0_self_assessor_2 + data.front_office_3_0_self_assessor_3)/3);
				$scope.front_office_3_1_average = ((data.front_office_3_1_self_assessor_1 + data.front_office_3_1_self_assessor_2 + data.front_office_3_1_self_assessor_3)/3);
				$scope.front_office_3_2_average = ((data.front_office_3_2_self_assessor_1 + data.front_office_3_2_self_assessor_2 + data.front_office_3_2_self_assessor_3)/3);
				$scope.front_office_3_3_average = ((data.front_office_3_3_self_assessor_1 + data.front_office_3_3_self_assessor_2 + data.front_office_3_3_self_assessor_3)/3);
				$scope.front_office_3_4_average = ((data.front_office_3_4_self_assessor_1 + data.front_office_3_4_self_assessor_2 + data.front_office_3_4_self_assessor_3)/3);
				$scope.front_office_3_5_average = ((data.front_office_3_5_self_assessor_1 + data.front_office_3_5_self_assessor_2 + data.front_office_3_5_self_assessor_3)/3);
				$scope.front_office_3_6_average = ((data.front_office_3_6_self_assessor_1 + data.front_office_3_6_self_assessor_2 + data.front_office_3_6_self_assessor_3)/3);
				$scope.front_office_3_7_average = ((data.front_office_3_7_self_assessor_1 + data.front_office_3_7_self_assessor_2 + data.front_office_3_7_self_assessor_3)/3);
				$scope.front_office_3_8_average = ((data.front_office_3_8_self_assessor_1 + data.front_office_3_8_self_assessor_2 + data.front_office_3_8_self_assessor_3)/3);
				$scope.front_office_3_9_average = ((data.front_office_3_9_self_assessor_1 + data.front_office_3_9_self_assessor_2 + data.front_office_3_9_self_assessor_3)/3);
				//front office Reconcilliation
				$scope.front_office_not_reconciled = false;
				//3.1
				$scope.front_office_3_1_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_1_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_1_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_1_self_assessor_1 - $scope.front_office_3_1_self_assessor_2) > reconciliation_line){ $scope.front_office_3_1_self_assessor_1_not_reconciled = true; $scope.front_office_3_1_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_1_self_assessor_1 - $scope.front_office_3_1_self_assessor_3) > reconciliation_line){ $scope.front_office_3_1_self_assessor_1_not_reconciled = true; $scope.front_office_3_1_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_1_self_assessor_2 - $scope.front_office_3_1_self_assessor_3) > reconciliation_line){ $scope.front_office_3_1_self_assessor_2_not_reconciled = true; $scope.front_office_3_1_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.2
				$scope.front_office_3_2_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_2_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_2_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_2_self_assessor_1 - $scope.front_office_3_2_self_assessor_2) > reconciliation_line){ $scope.front_office_3_2_self_assessor_1_not_reconciled = true; $scope.front_office_3_2_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_2_self_assessor_1 - $scope.front_office_3_2_self_assessor_3) > reconciliation_line){ $scope.front_office_3_2_self_assessor_1_not_reconciled = true; $scope.front_office_3_2_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_2_self_assessor_2 - $scope.front_office_3_2_self_assessor_3) > reconciliation_line){ $scope.front_office_3_2_self_assessor_2_not_reconciled = true; $scope.front_office_3_2_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.3
				$scope.front_office_3_3_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_3_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_3_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_3_self_assessor_1 - $scope.front_office_3_3_self_assessor_2) > reconciliation_line){ $scope.front_office_3_3_self_assessor_1_not_reconciled = true; $scope.front_office_3_3_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_3_self_assessor_1 - $scope.front_office_3_3_self_assessor_3) > reconciliation_line){ $scope.front_office_3_3_self_assessor_1_not_reconciled = true; $scope.front_office_3_3_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_3_self_assessor_2 - $scope.front_office_3_3_self_assessor_3) > reconciliation_line){ $scope.front_office_3_3_self_assessor_2_not_reconciled = true; $scope.front_office_3_3_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.4
				$scope.front_office_3_4_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_4_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_4_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_4_self_assessor_1 - $scope.front_office_3_4_self_assessor_2) > reconciliation_line){ $scope.front_office_3_4_self_assessor_1_not_reconciled = true; $scope.front_office_3_4_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_4_self_assessor_1 - $scope.front_office_3_4_self_assessor_3) > reconciliation_line){ $scope.front_office_3_4_self_assessor_1_not_reconciled = true; $scope.front_office_3_4_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_4_self_assessor_2 - $scope.front_office_3_4_self_assessor_3) > reconciliation_line){ $scope.front_office_3_4_self_assessor_2_not_reconciled = true; $scope.front_office_3_4_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.5
				$scope.front_office_3_5_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_5_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_5_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_5_self_assessor_1 - $scope.front_office_3_5_self_assessor_2) > reconciliation_line){ $scope.front_office_3_5_self_assessor_1_not_reconciled = true; $scope.front_office_3_5_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_5_self_assessor_1 - $scope.front_office_3_5_self_assessor_3) > reconciliation_line){ $scope.front_office_3_5_self_assessor_1_not_reconciled = true; $scope.front_office_3_5_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_5_self_assessor_2 - $scope.front_office_3_5_self_assessor_3) > reconciliation_line){ $scope.front_office_3_5_self_assessor_2_not_reconciled = true; $scope.front_office_3_5_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.6
				$scope.front_office_3_6_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_6_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_6_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_6_self_assessor_1 - $scope.front_office_3_6_self_assessor_2) > reconciliation_line){ $scope.front_office_3_6_self_assessor_1_not_reconciled = true; $scope.front_office_3_6_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_6_self_assessor_1 - $scope.front_office_3_6_self_assessor_3) > reconciliation_line){ $scope.front_office_3_6_self_assessor_1_not_reconciled = true; $scope.front_office_3_6_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_6_self_assessor_2 - $scope.front_office_3_6_self_assessor_3) > reconciliation_line){ $scope.front_office_3_6_self_assessor_2_not_reconciled = true; $scope.front_office_3_6_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.7
				$scope.front_office_3_7_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_7_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_7_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_7_self_assessor_1 - $scope.front_office_3_7_self_assessor_2) > reconciliation_line){ $scope.front_office_3_7_self_assessor_1_not_reconciled = true; $scope.front_office_3_7_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_7_self_assessor_1 - $scope.front_office_3_7_self_assessor_3) > reconciliation_line){ $scope.front_office_3_7_self_assessor_1_not_reconciled = true; $scope.front_office_3_7_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_7_self_assessor_2 - $scope.front_office_3_7_self_assessor_3) > reconciliation_line){ $scope.front_office_3_7_self_assessor_2_not_reconciled = true; $scope.front_office_3_7_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.8
				$scope.front_office_3_8_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_8_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_8_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_8_self_assessor_1 - $scope.front_office_3_8_self_assessor_2) > reconciliation_line){ $scope.front_office_3_8_self_assessor_1_not_reconciled = true; $scope.front_office_3_8_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_8_self_assessor_1 - $scope.front_office_3_8_self_assessor_3) > reconciliation_line){ $scope.front_office_3_8_self_assessor_1_not_reconciled = true; $scope.front_office_3_8_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_8_self_assessor_2 - $scope.front_office_3_8_self_assessor_3) > reconciliation_line){ $scope.front_office_3_8_self_assessor_2_not_reconciled = true; $scope.front_office_3_8_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				//3.9
				$scope.front_office_3_9_self_assessor_1_not_reconciled = false;
				$scope.front_office_3_9_self_assessor_2_not_reconciled = false;
				$scope.front_office_3_9_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.front_office_3_9_self_assessor_1 - $scope.front_office_3_9_self_assessor_2) > reconciliation_line){ $scope.front_office_3_9_self_assessor_1_not_reconciled = true; $scope.front_office_3_9_self_assessor_2_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_9_self_assessor_1 - $scope.front_office_3_9_self_assessor_3) > reconciliation_line){ $scope.front_office_3_9_self_assessor_1_not_reconciled = true; $scope.front_office_3_9_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
				if (Math.abs($scope.front_office_3_9_self_assessor_2 - $scope.front_office_3_9_self_assessor_3) > reconciliation_line){ $scope.front_office_3_9_self_assessor_2_not_reconciled = true; $scope.front_office_3_9_self_assessor_3_not_reconciled = true; $scope.front_office_not_reconciled = true; }
		//LOBBY LOUNGE AND OTHER PUBLIC AREAS 4.0
			//Single Assessor
				$scope.lobby_lounge_other_public_areas_4_0_self_self = data.lobby_lounge_other_public_areas_4_0_self_self;
				$scope.lobby_lounge_other_public_areas_4_1_self_self = data.lobby_lounge_other_public_areas_4_1_self_self;
				$scope.lobby_lounge_other_public_areas_4_2_self_self = data.lobby_lounge_other_public_areas_4_2_self_self;
				$scope.lobby_lounge_other_public_areas_4_3_self_self = data.lobby_lounge_other_public_areas_4_3_self_self;
				$scope.lobby_lounge_other_public_areas_4_4_self_self = data.lobby_lounge_other_public_areas_4_4_self_self;
				$scope.lobby_lounge_other_public_areas_4_5_self_self = data.lobby_lounge_other_public_areas_4_5_self_self;
				$scope.lobby_lounge_other_public_areas_4_6_self_self = data.lobby_lounge_other_public_areas_4_6_self_self;
				$scope.lobby_lounge_other_public_areas_4_7_self_self = data.lobby_lounge_other_public_areas_4_7_self_self;
				$scope.lobby_lounge_other_public_areas_4_8_self_self = data.lobby_lounge_other_public_areas_4_8_self_self;
				$scope.lobby_lounge_other_public_areas_4_9_self_self = data.lobby_lounge_other_public_areas_4_9_self_self;
				$scope.lobby_lounge_other_public_areas_4_10_self_self = data.lobby_lounge_other_public_areas_4_10_self_self;
			//Assessor 1
				$scope.lobby_lounge_other_public_areas_4_0_self_assessor_1 = data.lobby_lounge_other_public_areas_4_0_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_1 = data.lobby_lounge_other_public_areas_4_1_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_1 = data.lobby_lounge_other_public_areas_4_2_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_1 = data.lobby_lounge_other_public_areas_4_3_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_1 = data.lobby_lounge_other_public_areas_4_4_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_1 = data.lobby_lounge_other_public_areas_4_5_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_1 = data.lobby_lounge_other_public_areas_4_6_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_1 = data.lobby_lounge_other_public_areas_4_7_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_1 = data.lobby_lounge_other_public_areas_4_8_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_1 = data.lobby_lounge_other_public_areas_4_9_self_assessor_1;
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_1 = data.lobby_lounge_other_public_areas_4_10_self_assessor_1;
			//Assessor 2
				$scope.lobby_lounge_other_public_areas_4_0_self_assessor_2 = data.lobby_lounge_other_public_areas_4_0_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_2 = data.lobby_lounge_other_public_areas_4_1_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_2 = data.lobby_lounge_other_public_areas_4_2_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_2 = data.lobby_lounge_other_public_areas_4_3_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_2 = data.lobby_lounge_other_public_areas_4_4_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_2 = data.lobby_lounge_other_public_areas_4_5_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_2 = data.lobby_lounge_other_public_areas_4_6_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_2 = data.lobby_lounge_other_public_areas_4_7_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_2 = data.lobby_lounge_other_public_areas_4_8_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_2 = data.lobby_lounge_other_public_areas_4_9_self_assessor_2;
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_2 = data.lobby_lounge_other_public_areas_4_10_self_assessor_2;
			//Assessor 3
				$scope.lobby_lounge_other_public_areas_4_0_self_assessor_3 = data.lobby_lounge_other_public_areas_4_0_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_3 = data.lobby_lounge_other_public_areas_4_1_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_3 = data.lobby_lounge_other_public_areas_4_2_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_3 = data.lobby_lounge_other_public_areas_4_3_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_3 = data.lobby_lounge_other_public_areas_4_4_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_3 = data.lobby_lounge_other_public_areas_4_5_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_3 = data.lobby_lounge_other_public_areas_4_6_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_3 = data.lobby_lounge_other_public_areas_4_7_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_3 = data.lobby_lounge_other_public_areas_4_8_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_3 = data.lobby_lounge_other_public_areas_4_9_self_assessor_3;
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_3 = data.lobby_lounge_other_public_areas_4_10_self_assessor_3;
				//lobby lounge other public areas and subsections average
				$scope.lobby_lounge_other_public_areas_4_0_average = ((data.lobby_lounge_other_public_areas_4_0_self_assessor_1 + data.lobby_lounge_other_public_areas_4_0_self_assessor_2 + data.lobby_lounge_other_public_areas_4_0_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_1_average = ((data.lobby_lounge_other_public_areas_4_1_self_assessor_1 + data.lobby_lounge_other_public_areas_4_1_self_assessor_2 + data.lobby_lounge_other_public_areas_4_1_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_2_average = ((data.lobby_lounge_other_public_areas_4_2_self_assessor_1 + data.lobby_lounge_other_public_areas_4_2_self_assessor_2 + data.lobby_lounge_other_public_areas_4_2_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_3_average = ((data.lobby_lounge_other_public_areas_4_3_self_assessor_1 + data.lobby_lounge_other_public_areas_4_3_self_assessor_2 + data.lobby_lounge_other_public_areas_4_3_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_4_average = ((data.lobby_lounge_other_public_areas_4_4_self_assessor_1 + data.lobby_lounge_other_public_areas_4_4_self_assessor_2 + data.lobby_lounge_other_public_areas_4_4_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_5_average = ((data.lobby_lounge_other_public_areas_4_5_self_assessor_1 + data.lobby_lounge_other_public_areas_4_5_self_assessor_2 + data.lobby_lounge_other_public_areas_4_5_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_6_average = ((data.lobby_lounge_other_public_areas_4_6_self_assessor_1 + data.lobby_lounge_other_public_areas_4_6_self_assessor_2 + data.lobby_lounge_other_public_areas_4_6_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_7_average = ((data.lobby_lounge_other_public_areas_4_7_self_assessor_1 + data.lobby_lounge_other_public_areas_4_7_self_assessor_2 + data.lobby_lounge_other_public_areas_4_7_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_8_average = ((data.lobby_lounge_other_public_areas_4_8_self_assessor_1 + data.lobby_lounge_other_public_areas_4_8_self_assessor_2 + data.lobby_lounge_other_public_areas_4_8_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_9_average = ((data.lobby_lounge_other_public_areas_4_9_self_assessor_1 + data.lobby_lounge_other_public_areas_4_9_self_assessor_2 + data.lobby_lounge_other_public_areas_4_9_self_assessor_3)/3);
				$scope.lobby_lounge_other_public_areas_4_10_average = ((data.lobby_lounge_other_public_areas_4_10_self_assessor_1 + data.lobby_lounge_other_public_areas_4_10_self_assessor_2 + data.lobby_lounge_other_public_areas_4_10_self_assessor_3)/3);
				//lobby lounge other public areas Reconcilliation
				$scope.lobby_lounge_other_public_areas_not_reconciled = false;
				//4.1
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_1_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_1_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_1_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_1_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_1_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_1_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.2
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_2_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_2_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_2_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_2_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_2_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_2_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.3
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_3_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_3_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_3_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_3_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_3_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_3_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.4
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_4_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_4_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_4_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_4_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_4_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_4_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.5
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_5_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_5_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_5_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_5_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_5_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_5_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.6
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_6_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_6_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_6_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_6_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_6_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_6_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.7
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_7_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_7_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_7_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_7_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_7_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_7_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.8
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_8_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_8_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_8_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_8_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_8_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_8_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.9
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_9_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_9_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_9_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_9_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_9_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_9_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_9_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_9_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_9_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_9_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_9_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_9_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				//4.10
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_1_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_2_not_reconciled = false;
				$scope.lobby_lounge_other_public_areas_4_10_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_10_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_10_self_assessor_2) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_10_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_10_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_10_self_assessor_1 - $scope.lobby_lounge_other_public_areas_4_10_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_10_self_assessor_1_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_10_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lobby_lounge_other_public_areas_4_10_self_assessor_2 - $scope.lobby_lounge_other_public_areas_4_10_self_assessor_3) > reconciliation_line){ $scope.lobby_lounge_other_public_areas_4_10_self_assessor_2_not_reconciled = true; $scope.lobby_lounge_other_public_areas_4_10_self_assessor_3_not_reconciled = true; $scope.lobby_lounge_other_public_areas_not_reconciled = true; }
			//FUNCTION ROOMS 5.0			
				//Single Assessor
				$scope.function_rooms_5_0_self_self = data.function_rooms_5_0_self_self;
				$scope.function_rooms_5_1_self_self = data.function_rooms_5_1_self_self;
				//Assessor 1
				$scope.function_rooms_5_0_self_assessor_1 = data.function_rooms_5_0_self_assessor_1;
				$scope.function_rooms_5_1_self_assessor_1 = data.function_rooms_5_1_self_assessor_1;
				//Assessor 2
				$scope.function_rooms_5_0_self_assessor_2 = data.function_rooms_5_0_self_assessor_2;
				$scope.function_rooms_5_1_self_assessor_2 = data.function_rooms_5_1_self_assessor_2;
				//Assessor 3
				$scope.function_rooms_5_0_self_assessor_3 = data.function_rooms_5_0_self_assessor_3;
				$scope.function_rooms_5_1_self_assessor_3 = data.function_rooms_5_1_self_assessor_3;
				//function rooms and subsections average
				$scope.function_rooms_5_0_average = ((data.function_rooms_5_0_self_assessor_1 + data.function_rooms_5_0_self_assessor_2 + data.function_rooms_5_0_self_assessor_3)/3);
				$scope.function_rooms_5_1_average = ((data.function_rooms_5_1_self_assessor_1 + data.function_rooms_5_1_self_assessor_2 + data.function_rooms_5_1_self_assessor_3)/3);
				//function rooms reconcilliation
				$scope.function_rooms_not_reconciled = false;
				//5.1
				$scope.function_rooms_5_1_self_assessor_1_not_reconciled = false;
				$scope.function_rooms_5_1_self_assessor_2_not_reconciled = false;
				$scope.function_rooms_5_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.function_rooms_5_1_self_assessor_1 - $scope.function_rooms_5_1_self_assessor_2) > reconciliation_line){ $scope.function_rooms_5_1_self_assessor_1_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_2_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_3_not_reconciled = true; }
				if (Math.abs($scope.function_rooms_5_1_self_assessor_1 - $scope.function_rooms_5_1_self_assessor_3) > reconciliation_line){ $scope.function_rooms_5_1_self_assessor_1_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_3_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_3_not_reconciled = true; }
				if (Math.abs($scope.function_rooms_5_1_self_assessor_2 - $scope.function_rooms_5_1_self_assessor_3) > reconciliation_line){ $scope.function_rooms_5_1_self_assessor_2_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_3_not_reconciled = true; $scope.function_rooms_5_1_self_assessor_3_not_reconciled = true; }
			//RESTAURANTS						
				//Single Assessor
				$scope.restaurants_6_0_self_self = data.restaurants_6_0_self_self;
				$scope.restaurants_6_1_self_self = data.restaurants_6_1_self_self;
				$scope.restaurants_6_2_self_self = data.restaurants_6_2_self_self;
				$scope.restaurants_6_3_self_self = data.restaurants_6_3_self_self;
				$scope.restaurants_6_4_self_self = data.restaurants_6_4_self_self;
				$scope.restaurants_6_5_self_self = data.restaurants_6_5_self_self;
				$scope.restaurants_6_6_self_self = data.restaurants_6_6_self_self;
				$scope.restaurants_6_7_self_self = data.restaurants_6_7_self_self;
				$scope.restaurants_6_8_self_self = data.restaurants_6_8_self_self;
				//Assessor 1
				$scope.restaurants_6_0_self_assessor_1 = data.restaurants_6_0_self_assessor_1;
				$scope.restaurants_6_1_self_assessor_1 = data.restaurants_6_1_self_assessor_1;
				$scope.restaurants_6_2_self_assessor_1 = data.restaurants_6_2_self_assessor_1;
				$scope.restaurants_6_3_self_assessor_1 = data.restaurants_6_3_self_assessor_1;
				$scope.restaurants_6_4_self_assessor_1 = data.restaurants_6_4_self_assessor_1;
				$scope.restaurants_6_5_self_assessor_1 = data.restaurants_6_5_self_assessor_1;
				$scope.restaurants_6_6_self_assessor_1 = data.restaurants_6_6_self_assessor_1;
				$scope.restaurants_6_7_self_assessor_1 = data.restaurants_6_7_self_assessor_1;
				$scope.restaurants_6_8_self_assessor_1 = data.restaurants_6_8_self_assessor_1;
				//Assessor 2
				$scope.restaurants_6_0_self_assessor_2 = data.restaurants_6_0_self_assessor_2;
				$scope.restaurants_6_1_self_assessor_2 = data.restaurants_6_1_self_assessor_2;
				$scope.restaurants_6_2_self_assessor_2 = data.restaurants_6_2_self_assessor_2;
				$scope.restaurants_6_3_self_assessor_2 = data.restaurants_6_3_self_assessor_2;
				$scope.restaurants_6_4_self_assessor_2 = data.restaurants_6_4_self_assessor_2;
				$scope.restaurants_6_5_self_assessor_2 = data.restaurants_6_5_self_assessor_2;
				$scope.restaurants_6_6_self_assessor_2 = data.restaurants_6_6_self_assessor_2;
				$scope.restaurants_6_7_self_assessor_2 = data.restaurants_6_7_self_assessor_2;
				$scope.restaurants_6_8_self_assessor_2 = data.restaurants_6_8_self_assessor_2;
				//Assessor 3
				$scope.restaurants_6_0_self_assessor_3 = data.restaurants_6_0_self_assessor_3;
				$scope.restaurants_6_1_self_assessor_3 = data.restaurants_6_1_self_assessor_3;
				$scope.restaurants_6_2_self_assessor_3 = data.restaurants_6_2_self_assessor_3;
				$scope.restaurants_6_3_self_assessor_3 = data.restaurants_6_3_self_assessor_3;
				$scope.restaurants_6_4_self_assessor_3 = data.restaurants_6_4_self_assessor_3;
				$scope.restaurants_6_5_self_assessor_3 = data.restaurants_6_5_self_assessor_3;
				$scope.restaurants_6_6_self_assessor_3 = data.restaurants_6_6_self_assessor_3;
				$scope.restaurants_6_7_self_assessor_3 = data.restaurants_6_7_self_assessor_3;
				$scope.restaurants_6_8_self_assessor_3 = data.restaurants_6_8_self_assessor_3;
				//restaurants and subsections average
				$scope.restaurants_6_0_average = ((data.restaurants_6_0_self_assessor_1 + data.restaurants_6_0_self_assessor_2 + data.restaurants_6_0_self_assessor_3)/3);
				$scope.restaurants_6_1_average = ((data.restaurants_6_1_self_assessor_1 + data.restaurants_6_1_self_assessor_2 + data.restaurants_6_1_self_assessor_3)/3);
				$scope.restaurants_6_2_average = ((data.restaurants_6_2_self_assessor_1 + data.restaurants_6_2_self_assessor_2 + data.restaurants_6_2_self_assessor_3)/3);
				$scope.restaurants_6_3_average = ((data.restaurants_6_3_self_assessor_1 + data.restaurants_6_3_self_assessor_2 + data.restaurants_6_3_self_assessor_3)/3);
				$scope.restaurants_6_4_average = ((data.restaurants_6_4_self_assessor_1 + data.restaurants_6_4_self_assessor_2 + data.restaurants_6_4_self_assessor_3)/3);
				$scope.restaurants_6_5_average = ((data.restaurants_6_5_self_assessor_1 + data.restaurants_6_5_self_assessor_2 + data.restaurants_6_5_self_assessor_3)/3);
				$scope.restaurants_6_6_average = ((data.restaurants_6_6_self_assessor_1 + data.restaurants_6_6_self_assessor_2 + data.restaurants_6_6_self_assessor_3)/3);
				$scope.restaurants_6_7_average = ((data.restaurants_6_7_self_assessor_1 + data.restaurants_6_7_self_assessor_2 + data.restaurants_6_7_self_assessor_3)/3);
				$scope.restaurants_6_8_average = ((data.restaurants_6_8_self_assessor_1 + data.restaurants_6_8_self_assessor_2 + data.restaurants_6_8_self_assessor_3)/3);
				//restaurants reconcilliation
				$scope.restaurants_not_reconciled = false;
				//6.1
				$scope.restaurants_6_1_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_1_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_1_self_assessor_1 - $scope.restaurants_6_1_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_1_self_assessor_1_not_reconciled = true; $scope.restaurants_6_1_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_1_self_assessor_1 - $scope.restaurants_6_1_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_1_self_assessor_1_not_reconciled = true; $scope.restaurants_6_1_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_1_self_assessor_2 - $scope.restaurants_6_1_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_1_self_assessor_2_not_reconciled = true; $scope.restaurants_6_1_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.2				
				$scope.restaurants_6_2_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_2_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_2_self_assessor_1 - $scope.restaurants_6_2_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_2_self_assessor_1_not_reconciled = true; $scope.restaurants_6_2_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_2_self_assessor_1 - $scope.restaurants_6_2_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_2_self_assessor_1_not_reconciled = true; $scope.restaurants_6_2_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_2_self_assessor_2 - $scope.restaurants_6_2_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_2_self_assessor_2_not_reconciled = true; $scope.restaurants_6_2_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.3
				$scope.restaurants_6_3_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_3_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_3_self_assessor_1 - $scope.restaurants_6_3_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_3_self_assessor_1_not_reconciled = true; $scope.restaurants_6_3_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_3_self_assessor_1 - $scope.restaurants_6_3_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_3_self_assessor_1_not_reconciled = true; $scope.restaurants_6_3_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_3_self_assessor_2 - $scope.restaurants_6_3_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_3_self_assessor_2_not_reconciled = true; $scope.restaurants_6_3_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.4
				$scope.restaurants_6_4_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_4_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_4_self_assessor_1 - $scope.restaurants_6_4_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_4_self_assessor_1_not_reconciled = true; $scope.restaurants_6_4_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_4_self_assessor_1 - $scope.restaurants_6_4_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_4_self_assessor_1_not_reconciled = true; $scope.restaurants_6_4_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_4_self_assessor_2 - $scope.restaurants_6_4_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_4_self_assessor_2_not_reconciled = true; $scope.restaurants_6_4_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.5
				$scope.restaurants_6_5_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_5_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_5_self_assessor_1 - $scope.restaurants_6_5_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_5_self_assessor_1_not_reconciled = true; $scope.restaurants_6_5_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_5_self_assessor_1 - $scope.restaurants_6_5_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_5_self_assessor_1_not_reconciled = true; $scope.restaurants_6_5_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_5_self_assessor_2 - $scope.restaurants_6_5_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_5_self_assessor_2_not_reconciled = true; $scope.restaurants_6_5_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.6
				$scope.restaurants_6_6_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_6_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_6_self_assessor_1 - $scope.restaurants_6_6_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_6_self_assessor_1_not_reconciled = true; $scope.restaurants_6_6_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_6_self_assessor_1 - $scope.restaurants_6_6_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_6_self_assessor_1_not_reconciled = true; $scope.restaurants_6_6_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_6_self_assessor_2 - $scope.restaurants_6_6_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_6_self_assessor_2_not_reconciled = true; $scope.restaurants_6_6_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.7
				$scope.restaurants_6_7_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_7_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_7_self_assessor_1 - $scope.restaurants_6_7_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_7_self_assessor_1_not_reconciled = true; $scope.restaurants_6_7_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_7_self_assessor_1 - $scope.restaurants_6_7_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_7_self_assessor_1_not_reconciled = true; $scope.restaurants_6_7_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_7_self_assessor_2 - $scope.restaurants_6_7_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_7_self_assessor_2_not_reconciled = true; $scope.restaurants_6_7_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				//6.8
				$scope.restaurants_6_8_self_assessor_1_not_reconciled = false;
				$scope.restaurants_6_8_self_assessor_2_not_reconciled = false;
				$scope.restaurants_6_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.restaurants_6_8_self_assessor_1 - $scope.restaurants_6_8_self_assessor_2) > reconciliation_line){ $scope.restaurants_6_8_self_assessor_1_not_reconciled = true; $scope.restaurants_6_8_self_assessor_2_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_8_self_assessor_1 - $scope.restaurants_6_8_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_8_self_assessor_1_not_reconciled = true; $scope.restaurants_6_8_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
				if (Math.abs($scope.restaurants_6_8_self_assessor_2 - $scope.restaurants_6_8_self_assessor_3) > reconciliation_line){ $scope.restaurants_6_8_self_assessor_2_not_reconciled = true; $scope.restaurants_6_8_self_assessor_3_not_reconciled = true; $scope.restaurants_not_reconciled = true; }
			//BAR
				//Single Assessor
				$scope.bar_7_0_self_self = data.bar_7_0_self_self;
				$scope.bar_7_1_self_self = data.bar_7_1_self_self;
				$scope.bar_7_2_self_self = data.bar_7_2_self_self;
				$scope.bar_7_3_self_self = data.bar_7_3_self_self;
				$scope.bar_7_4_self_self = data.bar_7_4_self_self;
				$scope.bar_7_5_self_self = data.bar_7_5_self_self;
				$scope.bar_7_6_self_self = data.bar_7_6_self_self;
				$scope.bar_7_7_self_self = data.bar_7_7_self_self;
				$scope.bar_7_8_self_self = data.bar_7_8_self_self;
				//Assessor 1
				$scope.bar_7_0_self_assessor_1 = data.bar_7_0_self_assessor_1;
				$scope.bar_7_1_self_assessor_1 = data.bar_7_1_self_assessor_1;
				$scope.bar_7_2_self_assessor_1 = data.bar_7_2_self_assessor_1;
				$scope.bar_7_3_self_assessor_1 = data.bar_7_3_self_assessor_1;
				$scope.bar_7_4_self_assessor_1 = data.bar_7_4_self_assessor_1;
				$scope.bar_7_5_self_assessor_1 = data.bar_7_5_self_assessor_1;
				$scope.bar_7_6_self_assessor_1 = data.bar_7_6_self_assessor_1;
				$scope.bar_7_7_self_assessor_1 = data.bar_7_7_self_assessor_1;
				$scope.bar_7_8_self_assessor_1 = data.bar_7_8_self_assessor_1;
				//Assessor 2
				$scope.bar_7_0_self_assessor_2 = data.bar_7_0_self_assessor_2;
				$scope.bar_7_1_self_assessor_2 = data.bar_7_1_self_assessor_2;
				$scope.bar_7_2_self_assessor_2 = data.bar_7_2_self_assessor_2;
				$scope.bar_7_3_self_assessor_2 = data.bar_7_3_self_assessor_2;
				$scope.bar_7_4_self_assessor_2 = data.bar_7_4_self_assessor_2;
				$scope.bar_7_5_self_assessor_2 = data.bar_7_5_self_assessor_2;
				$scope.bar_7_6_self_assessor_2 = data.bar_7_6_self_assessor_2;
				$scope.bar_7_7_self_assessor_2 = data.bar_7_7_self_assessor_2;
				$scope.bar_7_8_self_assessor_2 = data.bar_7_8_self_assessor_2;
				//Assessor 3
				$scope.bar_7_0_self_assessor_3 = data.bar_7_0_self_assessor_3;
				$scope.bar_7_1_self_assessor_3 = data.bar_7_1_self_assessor_3;
				$scope.bar_7_2_self_assessor_3 = data.bar_7_2_self_assessor_3;
				$scope.bar_7_3_self_assessor_3 = data.bar_7_3_self_assessor_3;
				$scope.bar_7_4_self_assessor_3 = data.bar_7_4_self_assessor_3;
				$scope.bar_7_5_self_assessor_3 = data.bar_7_5_self_assessor_3;
				$scope.bar_7_6_self_assessor_3 = data.bar_7_6_self_assessor_3;
				$scope.bar_7_7_self_assessor_3 = data.bar_7_7_self_assessor_3;
				$scope.bar_7_8_self_assessor_3 = data.bar_7_8_self_assessor_3;
				//Bar and Subsections Average
				$scope.bar_7_0_average = ((data.bar_7_0_self_assessor_1 + data.bar_7_0_self_assessor_2 + data.bar_7_0_self_assessor_3)/3);
				$scope.bar_7_1_average = ((data.bar_7_1_self_assessor_1 + data.bar_7_1_self_assessor_2 + data.bar_7_1_self_assessor_3)/3);
				$scope.bar_7_2_average = ((data.bar_7_2_self_assessor_1 + data.bar_7_2_self_assessor_2 + data.bar_7_2_self_assessor_3)/3);
				$scope.bar_7_3_average = ((data.bar_7_3_self_assessor_1 + data.bar_7_3_self_assessor_2 + data.bar_7_3_self_assessor_3)/3);
				$scope.bar_7_4_average = ((data.bar_7_4_self_assessor_1 + data.bar_7_4_self_assessor_2 + data.bar_7_4_self_assessor_3)/3);
				$scope.bar_7_5_average = ((data.bar_7_5_self_assessor_1 + data.bar_7_5_self_assessor_2 + data.bar_7_5_self_assessor_3)/3);
				$scope.bar_7_6_average = ((data.bar_7_6_self_assessor_1 + data.bar_7_6_self_assessor_2 + data.bar_7_6_self_assessor_3)/3);
				$scope.bar_7_7_average = ((data.bar_7_7_self_assessor_1 + data.bar_7_7_self_assessor_2 + data.bar_7_7_self_assessor_3)/3);
				$scope.bar_7_8_average = ((data.bar_7_8_self_assessor_1 + data.bar_7_8_self_assessor_2 + data.bar_7_8_self_assessor_3)/3);
				//Bar reconcilliation
				$scope.bar_not_reconciled = false;
				//7_1
				$scope.bar_7_1_self_assessor_1_not_reconciled = false;
				$scope.bar_7_1_self_assessor_2_not_reconciled = false;
				$scope.bar_7_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_1_self_assessor_1 - $scope.bar_7_1_self_assessor_2) > reconciliation_line){ $scope.bar_7_1_self_assessor_1_not_reconciled = true; $scope.bar_7_1_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_1_self_assessor_1 - $scope.bar_7_1_self_assessor_3) > reconciliation_line){ $scope.bar_7_1_self_assessor_1_not_reconciled = true; $scope.bar_7_1_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_1_self_assessor_2 - $scope.bar_7_1_self_assessor_3) > reconciliation_line){ $scope.bar_7_1_self_assessor_2_not_reconciled = true; $scope.bar_7_1_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_2
				$scope.bar_7_2_self_assessor_1_not_reconciled = false;
				$scope.bar_7_2_self_assessor_2_not_reconciled = false;
				$scope.bar_7_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_2_self_assessor_1 - $scope.bar_7_2_self_assessor_2) > reconciliation_line){ $scope.bar_7_2_self_assessor_1_not_reconciled = true; $scope.bar_7_2_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_2_self_assessor_1 - $scope.bar_7_2_self_assessor_3) > reconciliation_line){ $scope.bar_7_2_self_assessor_1_not_reconciled = true; $scope.bar_7_2_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_2_self_assessor_2 - $scope.bar_7_2_self_assessor_3) > reconciliation_line){ $scope.bar_7_2_self_assessor_2_not_reconciled = true; $scope.bar_7_2_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_3
				$scope.bar_7_3_self_assessor_1_not_reconciled = false;
				$scope.bar_7_3_self_assessor_2_not_reconciled = false;
				$scope.bar_7_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_3_self_assessor_1 - $scope.bar_7_3_self_assessor_2) > reconciliation_line){ $scope.bar_7_3_self_assessor_1_not_reconciled = true; $scope.bar_7_3_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_3_self_assessor_1 - $scope.bar_7_3_self_assessor_3) > reconciliation_line){ $scope.bar_7_3_self_assessor_1_not_reconciled = true; $scope.bar_7_3_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_3_self_assessor_2 - $scope.bar_7_3_self_assessor_3) > reconciliation_line){ $scope.bar_7_3_self_assessor_2_not_reconciled = true; $scope.bar_7_3_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_4
				$scope.bar_7_4_self_assessor_1_not_reconciled = false;
				$scope.bar_7_4_self_assessor_2_not_reconciled = false;
				$scope.bar_7_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_4_self_assessor_1 - $scope.bar_7_4_self_assessor_2) > reconciliation_line){ $scope.bar_7_4_self_assessor_1_not_reconciled = true; $scope.bar_7_4_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_4_self_assessor_1 - $scope.bar_7_4_self_assessor_3) > reconciliation_line){ $scope.bar_7_4_self_assessor_1_not_reconciled = true; $scope.bar_7_4_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_4_self_assessor_2 - $scope.bar_7_4_self_assessor_3) > reconciliation_line){ $scope.bar_7_4_self_assessor_2_not_reconciled = true; $scope.bar_7_4_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_5
				$scope.bar_7_5_self_assessor_1_not_reconciled = false;
				$scope.bar_7_5_self_assessor_2_not_reconciled = false;
				$scope.bar_7_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_5_self_assessor_1 - $scope.bar_7_5_self_assessor_2) > reconciliation_line){ $scope.bar_7_5_self_assessor_1_not_reconciled = true; $scope.bar_7_5_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_5_self_assessor_1 - $scope.bar_7_5_self_assessor_3) > reconciliation_line){ $scope.bar_7_5_self_assessor_1_not_reconciled = true; $scope.bar_7_5_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_5_self_assessor_2 - $scope.bar_7_5_self_assessor_3) > reconciliation_line){ $scope.bar_7_5_self_assessor_2_not_reconciled = true; $scope.bar_7_5_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_6
				$scope.bar_7_6_self_assessor_1_not_reconciled = false;
				$scope.bar_7_6_self_assessor_2_not_reconciled = false;
				$scope.bar_7_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_6_self_assessor_1 - $scope.bar_7_6_self_assessor_2) > reconciliation_line){ $scope.bar_7_6_self_assessor_1_not_reconciled = true; $scope.bar_7_6_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_6_self_assessor_1 - $scope.bar_7_6_self_assessor_3) > reconciliation_line){ $scope.bar_7_6_self_assessor_1_not_reconciled = true; $scope.bar_7_6_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_6_self_assessor_2 - $scope.bar_7_6_self_assessor_3) > reconciliation_line){ $scope.bar_7_6_self_assessor_2_not_reconciled = true; $scope.bar_7_6_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_7
				$scope.bar_7_7_self_assessor_1_not_reconciled = false;
				$scope.bar_7_7_self_assessor_2_not_reconciled = false;
				$scope.bar_7_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_7_self_assessor_1 - $scope.bar_7_7_self_assessor_2) > reconciliation_line){ $scope.bar_7_7_self_assessor_1_not_reconciled = true; $scope.bar_7_7_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_7_self_assessor_1 - $scope.bar_7_7_self_assessor_3) > reconciliation_line){ $scope.bar_7_7_self_assessor_1_not_reconciled = true; $scope.bar_7_7_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_7_self_assessor_2 - $scope.bar_7_7_self_assessor_3) > reconciliation_line){ $scope.bar_7_7_self_assessor_2_not_reconciled = true; $scope.bar_7_7_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				//7_8
				$scope.bar_7_8_self_assessor_1_not_reconciled = false;
				$scope.bar_7_8_self_assessor_2_not_reconciled = false;
				$scope.bar_7_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.bar_7_8_self_assessor_1 - $scope.bar_7_8_self_assessor_2) > reconciliation_line){ $scope.bar_7_8_self_assessor_1_not_reconciled = true; $scope.bar_7_8_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_8_self_assessor_1 - $scope.bar_7_8_self_assessor_3) > reconciliation_line){ $scope.bar_7_8_self_assessor_1_not_reconciled = true; $scope.bar_7_8_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
				if (Math.abs($scope.bar_7_8_self_assessor_2 - $scope.bar_7_8_self_assessor_3) > reconciliation_line){ $scope.bar_7_8_self_assessor_2_not_reconciled = true; $scope.bar_7_8_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
			//KITCHEN 8.0				
				//Single Assessor
				$scope.kitchen_8_0_self_self = data.kitchen_8_0_self_self;
				$scope.kitchen_8_1_self_self = data.kitchen_8_1_self_self;
				$scope.kitchen_8_2_self_self = data.kitchen_8_2_self_self;
				$scope.kitchen_8_3_self_self = data.kitchen_8_3_self_self;
				$scope.kitchen_8_4_self_self = data.kitchen_8_4_self_self;
				$scope.kitchen_8_5_self_self = data.kitchen_8_5_self_self;
				$scope.kitchen_8_6_self_self = data.kitchen_8_6_self_self;
				$scope.kitchen_8_7_self_self = data.kitchen_8_7_self_self;
				$scope.kitchen_8_8_self_self = data.kitchen_8_8_self_self;
				$scope.kitchen_8_9_self_self = data.kitchen_8_9_self_self;
				$scope.kitchen_8_10_self_self = data.kitchen_8_10_self_self;
				$scope.kitchen_8_11_self_self = data.kitchen_8_11_self_self;
				$scope.kitchen_8_12_self_self = data.kitchen_8_12_self_self;
				//Assessor 1
				$scope.kitchen_8_0_self_assessor_1 = data.kitchen_8_0_self_assessor_1;
				$scope.kitchen_8_1_self_assessor_1 = data.kitchen_8_1_self_assessor_1;
				$scope.kitchen_8_2_self_assessor_1 = data.kitchen_8_2_self_assessor_1;
				$scope.kitchen_8_3_self_assessor_1 = data.kitchen_8_3_self_assessor_1;
				$scope.kitchen_8_4_self_assessor_1 = data.kitchen_8_4_self_assessor_1;
				$scope.kitchen_8_5_self_assessor_1 = data.kitchen_8_5_self_assessor_1;
				$scope.kitchen_8_6_self_assessor_1 = data.kitchen_8_6_self_assessor_1;
				$scope.kitchen_8_7_self_assessor_1 = data.kitchen_8_7_self_assessor_1;
				$scope.kitchen_8_8_self_assessor_1 = data.kitchen_8_8_self_assessor_1;
				$scope.kitchen_8_9_self_assessor_1 = data.kitchen_8_9_self_assessor_1;
				$scope.kitchen_8_10_self_assessor_1 = data.kitchen_8_10_self_assessor_1;
				$scope.kitchen_8_11_self_assessor_1 = data.kitchen_8_11_self_assessor_1;
				$scope.kitchen_8_12_self_assessor_1 = data.kitchen_8_12_self_assessor_1;
				//Assessor 2
				$scope.kitchen_8_0_self_assessor_2 = data.kitchen_8_0_self_assessor_2;
				$scope.kitchen_8_1_self_assessor_2 = data.kitchen_8_1_self_assessor_2;
				$scope.kitchen_8_2_self_assessor_2 = data.kitchen_8_2_self_assessor_2;
				$scope.kitchen_8_3_self_assessor_2 = data.kitchen_8_3_self_assessor_2;
				$scope.kitchen_8_4_self_assessor_2 = data.kitchen_8_4_self_assessor_2;
				$scope.kitchen_8_5_self_assessor_2 = data.kitchen_8_5_self_assessor_2;
				$scope.kitchen_8_6_self_assessor_2 = data.kitchen_8_6_self_assessor_2;
				$scope.kitchen_8_7_self_assessor_2 = data.kitchen_8_7_self_assessor_2;
				$scope.kitchen_8_8_self_assessor_2 = data.kitchen_8_8_self_assessor_2;
				$scope.kitchen_8_9_self_assessor_2 = data.kitchen_8_9_self_assessor_2;
				$scope.kitchen_8_10_self_assessor_2 = data.kitchen_8_10_self_assessor_2;
				$scope.kitchen_8_11_self_assessor_2 = data.kitchen_8_11_self_assessor_2;
				$scope.kitchen_8_12_self_assessor_2 = data.kitchen_8_12_self_assessor_2;
				//Assessor 3
				$scope.kitchen_8_0_self_assessor_3 = data.kitchen_8_0_self_assessor_3;
				$scope.kitchen_8_1_self_assessor_3 = data.kitchen_8_1_self_assessor_3;
				$scope.kitchen_8_2_self_assessor_3 = data.kitchen_8_2_self_assessor_3;
				$scope.kitchen_8_3_self_assessor_3 = data.kitchen_8_3_self_assessor_3;
				$scope.kitchen_8_4_self_assessor_3 = data.kitchen_8_4_self_assessor_3;
				$scope.kitchen_8_5_self_assessor_3 = data.kitchen_8_5_self_assessor_3;
				$scope.kitchen_8_6_self_assessor_3 = data.kitchen_8_6_self_assessor_3;
				$scope.kitchen_8_7_self_assessor_3 = data.kitchen_8_7_self_assessor_3;
				$scope.kitchen_8_8_self_assessor_3 = data.kitchen_8_8_self_assessor_3;
				$scope.kitchen_8_9_self_assessor_3 = data.kitchen_8_9_self_assessor_3;
				$scope.kitchen_8_10_self_assessor_3 = data.kitchen_8_10_self_assessor_3;
				$scope.kitchen_8_11_self_assessor_3 = data.kitchen_8_11_self_assessor_3;
				$scope.kitchen_8_12_self_assessor_3 = data.kitchen_8_12_self_assessor_3;
				//kitchen and Subsections Average
				$scope.kitchen_8_0_average = ((data.kitchen_8_0_self_assessor_1 + data.kitchen_8_0_self_assessor_2 + data.kitchen_8_0_self_assessor_3)/3);
				$scope.kitchen_8_1_average = ((data.kitchen_8_1_self_assessor_1 + data.kitchen_8_1_self_assessor_2 + data.kitchen_8_1_self_assessor_3)/3);
				$scope.kitchen_8_2_average = ((data.kitchen_8_2_self_assessor_1 + data.kitchen_8_2_self_assessor_2 + data.kitchen_8_2_self_assessor_3)/3);
				$scope.kitchen_8_3_average = ((data.kitchen_8_3_self_assessor_1 + data.kitchen_8_3_self_assessor_2 + data.kitchen_8_3_self_assessor_3)/3);
				$scope.kitchen_8_4_average = ((data.kitchen_8_4_self_assessor_1 + data.kitchen_8_4_self_assessor_2 + data.kitchen_8_4_self_assessor_3)/3);
				$scope.kitchen_8_5_average = ((data.kitchen_8_5_self_assessor_1 + data.kitchen_8_5_self_assessor_2 + data.kitchen_8_5_self_assessor_3)/3);
				$scope.kitchen_8_6_average = ((data.kitchen_8_6_self_assessor_1 + data.kitchen_8_6_self_assessor_2 + data.kitchen_8_6_self_assessor_3)/3);
				$scope.kitchen_8_7_average = ((data.kitchen_8_7_self_assessor_1 + data.kitchen_8_7_self_assessor_2 + data.kitchen_8_7_self_assessor_3)/3);
				$scope.kitchen_8_8_average = ((data.kitchen_8_8_self_assessor_1 + data.kitchen_8_8_self_assessor_2 + data.kitchen_8_8_self_assessor_3)/3);
				$scope.kitchen_8_9_average = ((data.kitchen_8_9_self_assessor_1 + data.kitchen_8_9_self_assessor_2 + data.kitchen_8_9_self_assessor_3)/3);
				$scope.kitchen_8_10_average = ((data.kitchen_8_10_self_assessor_1 + data.kitchen_8_10_self_assessor_2 + data.kitchen_8_10_self_assessor_3)/3);
				$scope.kitchen_8_11_average = ((data.kitchen_8_11_self_assessor_1 + data.kitchen_8_11_self_assessor_2 + data.kitchen_8_11_self_assessor_3)/3);
				$scope.kitchen_8_12_average = ((data.kitchen_8_12_self_assessor_1 + data.kitchen_8_12_self_assessor_2 + data.kitchen_8_12_self_assessor_3)/3);
				//Kitchen Reconcilliation
				$scope.kitchen_not_reconciled = false;
				//8.1
				$scope.kitchen_8_1_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_1_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_1_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_1_self_assessor_1 - $scope.kitchen_8_1_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_1_self_assessor_1_not_reconciled = true; $scope.kitchen_8_1_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_1_self_assessor_1 - $scope.kitchen_8_1_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_1_self_assessor_1_not_reconciled = true; $scope.kitchen_8_1_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_1_self_assessor_2 - $scope.kitchen_8_1_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_1_self_assessor_2_not_reconciled = true; $scope.kitchen_8_1_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_2
				$scope.kitchen_8_2_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_2_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_2_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_2_self_assessor_1 - $scope.kitchen_8_2_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_2_self_assessor_1_not_reconciled = true; $scope.kitchen_8_2_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_2_self_assessor_1 - $scope.kitchen_8_2_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_2_self_assessor_1_not_reconciled = true; $scope.kitchen_8_2_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_2_self_assessor_2 - $scope.kitchen_8_2_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_2_self_assessor_2_not_reconciled = true; $scope.kitchen_8_2_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_3
				$scope.kitchen_8_3_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_3_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_3_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_3_self_assessor_1 - $scope.kitchen_8_3_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_3_self_assessor_1_not_reconciled = true; $scope.kitchen_8_3_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_3_self_assessor_1 - $scope.kitchen_8_3_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_3_self_assessor_1_not_reconciled = true; $scope.kitchen_8_3_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_3_self_assessor_2 - $scope.kitchen_8_3_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_3_self_assessor_2_not_reconciled = true; $scope.kitchen_8_3_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_4
				$scope.kitchen_8_4_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_4_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_4_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_4_self_assessor_1 - $scope.kitchen_8_4_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_4_self_assessor_1_not_reconciled = true; $scope.kitchen_8_4_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_4_self_assessor_1 - $scope.kitchen_8_4_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_4_self_assessor_1_not_reconciled = true; $scope.kitchen_8_4_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_4_self_assessor_2 - $scope.kitchen_8_4_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_4_self_assessor_2_not_reconciled = true; $scope.kitchen_8_4_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_5
				$scope.kitchen_8_5_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_5_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_5_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_5_self_assessor_1 - $scope.kitchen_8_5_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_5_self_assessor_1_not_reconciled = true; $scope.kitchen_8_5_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_5_self_assessor_1 - $scope.kitchen_8_5_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_5_self_assessor_1_not_reconciled = true; $scope.kitchen_8_5_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_5_self_assessor_2 - $scope.kitchen_8_5_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_5_self_assessor_2_not_reconciled = true; $scope.kitchen_8_5_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_6
				$scope.kitchen_8_6_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_6_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_6_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_6_self_assessor_1 - $scope.kitchen_8_6_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_6_self_assessor_1_not_reconciled = true; $scope.kitchen_8_6_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_6_self_assessor_1 - $scope.kitchen_8_6_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_6_self_assessor_1_not_reconciled = true; $scope.kitchen_8_6_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_6_self_assessor_2 - $scope.kitchen_8_6_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_6_self_assessor_2_not_reconciled = true; $scope.kitchen_8_6_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_7
				$scope.kitchen_8_7_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_7_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_7_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_7_self_assessor_1 - $scope.kitchen_8_7_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_7_self_assessor_1_not_reconciled = true; $scope.kitchen_8_7_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_7_self_assessor_1 - $scope.kitchen_8_7_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_7_self_assessor_1_not_reconciled = true; $scope.kitchen_8_7_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_7_self_assessor_2 - $scope.kitchen_8_7_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_7_self_assessor_2_not_reconciled = true; $scope.kitchen_8_7_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_8
				$scope.kitchen_8_8_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_8_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_8_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_8_self_assessor_1 - $scope.kitchen_8_8_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_8_self_assessor_1_not_reconciled = true; $scope.kitchen_8_8_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_8_self_assessor_1 - $scope.kitchen_8_8_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_8_self_assessor_1_not_reconciled = true; $scope.kitchen_8_8_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_8_self_assessor_2 - $scope.kitchen_8_8_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_8_self_assessor_2_not_reconciled = true; $scope.kitchen_8_8_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_9
				$scope.kitchen_8_9_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_9_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_9_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_9_self_assessor_1 - $scope.kitchen_8_9_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_9_self_assessor_1_not_reconciled = true; $scope.kitchen_8_9_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_9_self_assessor_1 - $scope.kitchen_8_9_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_9_self_assessor_1_not_reconciled = true; $scope.kitchen_8_9_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_9_self_assessor_2 - $scope.kitchen_8_9_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_9_self_assessor_2_not_reconciled = true; $scope.kitchen_8_9_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_10
				$scope.kitchen_8_10_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_10_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_10_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_10_self_assessor_1 - $scope.kitchen_8_10_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_10_self_assessor_1_not_reconciled = true; $scope.kitchen_8_10_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_10_self_assessor_1 - $scope.kitchen_8_10_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_10_self_assessor_1_not_reconciled = true; $scope.kitchen_8_10_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_10_self_assessor_2 - $scope.kitchen_8_10_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_10_self_assessor_2_not_reconciled = true; $scope.kitchen_8_10_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_11
				$scope.kitchen_8_11_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_11_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_11_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_11_self_assessor_1 - $scope.kitchen_8_11_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_11_self_assessor_1_not_reconciled = true; $scope.kitchen_8_11_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_11_self_assessor_1 - $scope.kitchen_8_11_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_11_self_assessor_1_not_reconciled = true; $scope.kitchen_8_11_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_11_self_assessor_2 - $scope.kitchen_8_11_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_11_self_assessor_2_not_reconciled = true; $scope.kitchen_8_11_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				//8_12
				$scope.kitchen_8_12_self_assessor_1_not_reconciled = false;
				$scope.kitchen_8_12_self_assessor_2_not_reconciled = false;
				$scope.kitchen_8_12_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.kitchen_8_12_self_assessor_1 - $scope.kitchen_8_12_self_assessor_2) > reconciliation_line){ $scope.kitchen_8_12_self_assessor_1_not_reconciled = true; $scope.kitchen_8_12_self_assessor_2_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_12_self_assessor_1 - $scope.kitchen_8_12_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_12_self_assessor_1_not_reconciled = true; $scope.kitchen_8_12_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
				if (Math.abs($scope.kitchen_8_12_self_assessor_2 - $scope.kitchen_8_12_self_assessor_3) > reconciliation_line){ $scope.kitchen_8_12_self_assessor_2_not_reconciled = true; $scope.kitchen_8_12_self_assessor_3_not_reconciled = true; $scope.kitchen_not_reconciled = true; }
		//GUEST ROOMS
				//Single Assessor
				$scope.guest_rooms_9_0_self_self = data.guest_rooms_9_0_self_self;
				$scope.guest_rooms_9_1_self_self = data.guest_rooms_9_1_self_self;
				$scope.guest_rooms_9_2_self_self = data.guest_rooms_9_2_self_self;
				$scope.guest_rooms_9_3_self_self = data.guest_rooms_9_3_self_self;
				$scope.guest_rooms_9_4_self_self = data.guest_rooms_9_4_self_self;
				$scope.guest_rooms_9_5_self_self = data.guest_rooms_9_5_self_self;
				$scope.guest_rooms_9_6_self_self = data.guest_rooms_9_6_self_self;
				$scope.guest_rooms_9_7_self_self = data.guest_rooms_9_7_self_self;
				$scope.guest_rooms_9_8_self_self = data.guest_rooms_9_8_self_self;
				$scope.guest_rooms_9_9_self_self = data.guest_rooms_9_9_self_self;
				$scope.guest_rooms_9_10_self_self = data.guest_rooms_9_10_self_self;
				$scope.guest_rooms_9_11_self_self = data.guest_rooms_9_11_self_self;
				$scope.guest_rooms_9_12_self_self = data.guest_rooms_9_12_self_self;
				$scope.guest_rooms_9_13_self_self = data.guest_rooms_9_13_self_self;
				$scope.guest_rooms_9_14_self_self = data.guest_rooms_9_14_self_self;
				$scope.guest_rooms_9_15_self_self = data.guest_rooms_9_15_self_self;
				//Assessor 1
				$scope.guest_rooms_9_0_self_assessor_1 = data.guest_rooms_9_0_self_assessor_1;
				$scope.guest_rooms_9_1_self_assessor_1 = data.guest_rooms_9_1_self_assessor_1;
				$scope.guest_rooms_9_2_self_assessor_1 = data.guest_rooms_9_2_self_assessor_1;
				$scope.guest_rooms_9_3_self_assessor_1 = data.guest_rooms_9_3_self_assessor_1;
				$scope.guest_rooms_9_4_self_assessor_1 = data.guest_rooms_9_4_self_assessor_1;
				$scope.guest_rooms_9_5_self_assessor_1 = data.guest_rooms_9_5_self_assessor_1;
				$scope.guest_rooms_9_6_self_assessor_1 = data.guest_rooms_9_6_self_assessor_1;
				$scope.guest_rooms_9_7_self_assessor_1 = data.guest_rooms_9_7_self_assessor_1;
				$scope.guest_rooms_9_8_self_assessor_1 = data.guest_rooms_9_8_self_assessor_1;
				$scope.guest_rooms_9_9_self_assessor_1 = data.guest_rooms_9_9_self_assessor_1;
				$scope.guest_rooms_9_10_self_assessor_1 = data.guest_rooms_9_10_self_assessor_1;
				$scope.guest_rooms_9_11_self_assessor_1 = data.guest_rooms_9_11_self_assessor_1;
				$scope.guest_rooms_9_12_self_assessor_1 = data.guest_rooms_9_12_self_assessor_1;
				$scope.guest_rooms_9_13_self_assessor_1 = data.guest_rooms_9_13_self_assessor_1;
				$scope.guest_rooms_9_14_self_assessor_1 = data.guest_rooms_9_14_self_assessor_1;
				$scope.guest_rooms_9_15_self_assessor_1 = data.guest_rooms_9_15_self_assessor_1;
				//Assessor 2
				$scope.guest_rooms_9_0_self_assessor_2 = data.guest_rooms_9_0_self_assessor_2;
				$scope.guest_rooms_9_1_self_assessor_2 = data.guest_rooms_9_1_self_assessor_2;
				$scope.guest_rooms_9_2_self_assessor_2 = data.guest_rooms_9_2_self_assessor_2;
				$scope.guest_rooms_9_3_self_assessor_2 = data.guest_rooms_9_3_self_assessor_2;
				$scope.guest_rooms_9_4_self_assessor_2 = data.guest_rooms_9_4_self_assessor_2;
				$scope.guest_rooms_9_5_self_assessor_2 = data.guest_rooms_9_5_self_assessor_2;
				$scope.guest_rooms_9_6_self_assessor_2 = data.guest_rooms_9_6_self_assessor_2;
				$scope.guest_rooms_9_7_self_assessor_2 = data.guest_rooms_9_7_self_assessor_2;
				$scope.guest_rooms_9_8_self_assessor_2 = data.guest_rooms_9_8_self_assessor_2;
				$scope.guest_rooms_9_9_self_assessor_2 = data.guest_rooms_9_9_self_assessor_2;
				$scope.guest_rooms_9_10_self_assessor_2 = data.guest_rooms_9_10_self_assessor_2;
				$scope.guest_rooms_9_11_self_assessor_2 = data.guest_rooms_9_11_self_assessor_2;
				$scope.guest_rooms_9_12_self_assessor_2 = data.guest_rooms_9_12_self_assessor_2;
				$scope.guest_rooms_9_13_self_assessor_2 = data.guest_rooms_9_13_self_assessor_2;
				$scope.guest_rooms_9_14_self_assessor_2 = data.guest_rooms_9_14_self_assessor_2;
				$scope.guest_rooms_9_15_self_assessor_2 = data.guest_rooms_9_15_self_assessor_2;
				//Assessor 3
				$scope.guest_rooms_9_0_self_assessor_3 = data.guest_rooms_9_0_self_assessor_3;
				$scope.guest_rooms_9_1_self_assessor_3 = data.guest_rooms_9_1_self_assessor_3;
				$scope.guest_rooms_9_2_self_assessor_3 = data.guest_rooms_9_2_self_assessor_3;
				$scope.guest_rooms_9_3_self_assessor_3 = data.guest_rooms_9_3_self_assessor_3;
				$scope.guest_rooms_9_4_self_assessor_3 = data.guest_rooms_9_4_self_assessor_3;
				$scope.guest_rooms_9_5_self_assessor_3 = data.guest_rooms_9_5_self_assessor_3;
				$scope.guest_rooms_9_6_self_assessor_3 = data.guest_rooms_9_6_self_assessor_3;
				$scope.guest_rooms_9_7_self_assessor_3 = data.guest_rooms_9_7_self_assessor_3;
				$scope.guest_rooms_9_8_self_assessor_3 = data.guest_rooms_9_8_self_assessor_3;
				$scope.guest_rooms_9_9_self_assessor_3 = data.guest_rooms_9_9_self_assessor_3;
				$scope.guest_rooms_9_10_self_assessor_3 = data.guest_rooms_9_10_self_assessor_3;
				$scope.guest_rooms_9_11_self_assessor_3 = data.guest_rooms_9_11_self_assessor_3;
				$scope.guest_rooms_9_12_self_assessor_3 = data.guest_rooms_9_12_self_assessor_3;
				$scope.guest_rooms_9_13_self_assessor_3 = data.guest_rooms_9_13_self_assessor_3;
				$scope.guest_rooms_9_14_self_assessor_3 = data.guest_rooms_9_14_self_assessor_3;
				$scope.guest_rooms_9_15_self_assessor_3 = data.guest_rooms_9_15_self_assessor_3;
				//guest_rooms and subsections Average
				$scope.guest_rooms_9_0_average = ((data.guest_rooms_9_0_self_assessor_1 + data.guest_rooms_9_0_self_assessor_2 + data.guest_rooms_9_0_self_assessor_3)/3);
				$scope.guest_rooms_9_1_average = ((data.guest_rooms_9_1_self_assessor_1 + data.guest_rooms_9_1_self_assessor_2 + data.guest_rooms_9_1_self_assessor_3)/3);
				$scope.guest_rooms_9_2_average = ((data.guest_rooms_9_2_self_assessor_1 + data.guest_rooms_9_2_self_assessor_2 + data.guest_rooms_9_2_self_assessor_3)/3);
				$scope.guest_rooms_9_3_average = ((data.guest_rooms_9_3_self_assessor_1 + data.guest_rooms_9_3_self_assessor_2 + data.guest_rooms_9_3_self_assessor_3)/3);
				$scope.guest_rooms_9_4_average = ((data.guest_rooms_9_4_self_assessor_1 + data.guest_rooms_9_4_self_assessor_2 + data.guest_rooms_9_4_self_assessor_3)/3);
				$scope.guest_rooms_9_5_average = ((data.guest_rooms_9_5_self_assessor_1 + data.guest_rooms_9_5_self_assessor_2 + data.guest_rooms_9_5_self_assessor_3)/3);
				$scope.guest_rooms_9_6_average = ((data.guest_rooms_9_6_self_assessor_1 + data.guest_rooms_9_6_self_assessor_2 + data.guest_rooms_9_6_self_assessor_3)/3);
				$scope.guest_rooms_9_7_average = ((data.guest_rooms_9_7_self_assessor_1 + data.guest_rooms_9_7_self_assessor_2 + data.guest_rooms_9_7_self_assessor_3)/3);
				$scope.guest_rooms_9_8_average = ((data.guest_rooms_9_8_self_assessor_1 + data.guest_rooms_9_8_self_assessor_2 + data.guest_rooms_9_8_self_assessor_3)/3);
				$scope.guest_rooms_9_9_average = ((data.guest_rooms_9_9_self_assessor_1 + data.guest_rooms_9_9_self_assessor_2 + data.guest_rooms_9_9_self_assessor_3)/3);
				$scope.guest_rooms_9_10_average = ((data.guest_rooms_9_10_self_assessor_1 + data.guest_rooms_9_10_self_assessor_2 + data.guest_rooms_9_10_self_assessor_3)/3);
				$scope.guest_rooms_9_11_average = ((data.guest_rooms_9_11_self_assessor_1 + data.guest_rooms_9_11_self_assessor_2 + data.guest_rooms_9_11_self_assessor_3)/3);
				$scope.guest_rooms_9_12_average = ((data.guest_rooms_9_12_self_assessor_1 + data.guest_rooms_9_12_self_assessor_2 + data.guest_rooms_9_12_self_assessor_3)/3);
				$scope.guest_rooms_9_13_average = ((data.guest_rooms_9_13_self_assessor_1 + data.guest_rooms_9_13_self_assessor_2 + data.guest_rooms_9_13_self_assessor_3)/3);
				$scope.guest_rooms_9_14_average = ((data.guest_rooms_9_14_self_assessor_1 + data.guest_rooms_9_14_self_assessor_2 + data.guest_rooms_9_14_self_assessor_3)/3);
				$scope.guest_rooms_9_15_average = ((data.guest_rooms_9_15_self_assessor_1 + data.guest_rooms_9_15_self_assessor_2 + data.guest_rooms_9_15_self_assessor_3)/3);
				//Guest_rooms Reconcilliation
				$scope.guest_rooms_not_reconciled = false;
				//9_1
				$scope.guest_rooms_9_1_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_1_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_1_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_1_self_assessor_1 - $scope.guest_rooms_9_1_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_1_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_1_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_1_self_assessor_1 - $scope.guest_rooms_9_1_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_1_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_1_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_1_self_assessor_2 - $scope.guest_rooms_9_1_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_1_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_1_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_2
				$scope.guest_rooms_9_2_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_2_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_2_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_2_self_assessor_1 - $scope.guest_rooms_9_2_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_2_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_2_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_2_self_assessor_1 - $scope.guest_rooms_9_2_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_2_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_2_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_2_self_assessor_2 - $scope.guest_rooms_9_2_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_2_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_2_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_3
				$scope.guest_rooms_9_3_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_3_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_3_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_3_self_assessor_1 - $scope.guest_rooms_9_3_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_3_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_3_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_3_self_assessor_1 - $scope.guest_rooms_9_3_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_3_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_3_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_3_self_assessor_2 - $scope.guest_rooms_9_3_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_3_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_3_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_4
				$scope.guest_rooms_9_4_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_4_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_4_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_4_self_assessor_1 - $scope.guest_rooms_9_4_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_4_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_4_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_4_self_assessor_1 - $scope.guest_rooms_9_4_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_4_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_4_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_4_self_assessor_2 - $scope.guest_rooms_9_4_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_4_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_4_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_5
				$scope.guest_rooms_9_5_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_5_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_5_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_5_self_assessor_1 - $scope.guest_rooms_9_5_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_5_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_5_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_5_self_assessor_1 - $scope.guest_rooms_9_5_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_5_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_5_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_5_self_assessor_2 - $scope.guest_rooms_9_5_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_5_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_5_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_6
				$scope.guest_rooms_9_6_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_6_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_6_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_6_self_assessor_1 - $scope.guest_rooms_9_6_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_6_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_6_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_6_self_assessor_1 - $scope.guest_rooms_9_6_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_6_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_6_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_6_self_assessor_2 - $scope.guest_rooms_9_6_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_6_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_6_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_7
				$scope.guest_rooms_9_7_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_7_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_7_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_7_self_assessor_1 - $scope.guest_rooms_9_7_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_7_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_7_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_7_self_assessor_1 - $scope.guest_rooms_9_7_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_7_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_7_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_7_self_assessor_2 - $scope.guest_rooms_9_7_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_7_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_7_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_8
				$scope.guest_rooms_9_9_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_9_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_9_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_1 - $scope.guest_rooms_9_9_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_1 - $scope.guest_rooms_9_9_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_2 - $scope.guest_rooms_9_9_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_9
				$scope.guest_rooms_9_9_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_9_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_9_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_1 - $scope.guest_rooms_9_9_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_1 - $scope.guest_rooms_9_9_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_9_self_assessor_2 - $scope.guest_rooms_9_9_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_10
				$scope.guest_rooms_9_10_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_10_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_10_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_10_self_assessor_1 - $scope.guest_rooms_9_10_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_10_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_10_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_10_self_assessor_1 - $scope.guest_rooms_9_10_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_10_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_10_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_10_self_assessor_2 - $scope.guest_rooms_9_10_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_10_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_10_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_11
				$scope.guest_rooms_9_11_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_11_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_11_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_11_self_assessor_1 - $scope.guest_rooms_9_11_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_11_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_11_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_11_self_assessor_1 - $scope.guest_rooms_9_11_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_11_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_11_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_11_self_assessor_2 - $scope.guest_rooms_9_11_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_11_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_11_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_12
				$scope.guest_rooms_9_12_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_12_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_12_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_12_self_assessor_1 - $scope.guest_rooms_9_12_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_12_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_12_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_12_self_assessor_1 - $scope.guest_rooms_9_12_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_12_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_12_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_12_self_assessor_2 - $scope.guest_rooms_9_12_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_12_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_12_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_13
				$scope.guest_rooms_9_13_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_13_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_13_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_13_self_assessor_1 - $scope.guest_rooms_9_13_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_13_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_13_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_13_self_assessor_1 - $scope.guest_rooms_9_13_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_13_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_13_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_13_self_assessor_2 - $scope.guest_rooms_9_13_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_13_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_13_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_14
				$scope.guest_rooms_9_14_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_14_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_14_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_14_self_assessor_1 - $scope.guest_rooms_9_14_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_14_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_14_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_14_self_assessor_1 - $scope.guest_rooms_9_14_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_14_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_14_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_14_self_assessor_2 - $scope.guest_rooms_9_14_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_14_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_14_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				//9_15
				$scope.guest_rooms_9_15_self_assessor_1_not_reconciled = false;
				$scope.guest_rooms_9_15_self_assessor_2_not_reconciled = false;
				$scope.guest_rooms_9_15_self_assessor_3_not_reconciled = false;					
				if(Math.abs($scope.guest_rooms_9_15_self_assessor_1 - $scope.guest_rooms_9_15_self_assessor_2) > reconciliation_line){ $scope.guest_rooms_9_15_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_15_self_assessor_2_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_15_self_assessor_1 - $scope.guest_rooms_9_15_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_15_self_assessor_1_not_reconciled = true; $scope.guest_rooms_9_15_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
				if(Math.abs($scope.guest_rooms_9_15_self_assessor_2 - $scope.guest_rooms_9_15_self_assessor_3) > reconciliation_line){ $scope.guest_rooms_9_15_self_assessor_2_not_reconciled = true; $scope.guest_rooms_9_15_self_assessor_3_not_reconciled = true; $scope.guest_rooms_not_reconciled = true; }
			//GUEST BATHROOMS				
				//Single Assessor
				$scope.guest_bathrooms_10_0_self_self = data.guest_bathrooms_10_0_self_self;
				$scope.guest_bathrooms_10_1_self_self = data.guest_bathrooms_10_1_self_self;
				$scope.guest_bathrooms_10_2_self_self = data.guest_bathrooms_10_2_self_self;
				$scope.guest_bathrooms_10_3_self_self = data.guest_bathrooms_10_3_self_self;
				$scope.guest_bathrooms_10_4_self_self = data.guest_bathrooms_10_4_self_self;
				$scope.guest_bathrooms_10_5_self_self = data.guest_bathrooms_10_5_self_self;
				$scope.guest_bathrooms_10_6_self_self = data.guest_bathrooms_10_6_self_self;
				$scope.guest_bathrooms_10_7_self_self = data.guest_bathrooms_10_7_self_self;
				$scope.guest_bathrooms_10_8_self_self = data.guest_bathrooms_10_8_self_self;
				$scope.guest_bathrooms_10_9_self_self = data.guest_bathrooms_10_9_self_self;
				//Assessor 1
				$scope.guest_bathrooms_10_0_self_assessor_1 = data.guest_bathrooms_10_0_self_assessor_1;
				$scope.guest_bathrooms_10_1_self_assessor_1 = data.guest_bathrooms_10_1_self_assessor_1;
				$scope.guest_bathrooms_10_2_self_assessor_1 = data.guest_bathrooms_10_2_self_assessor_1;
				$scope.guest_bathrooms_10_3_self_assessor_1 = data.guest_bathrooms_10_3_self_assessor_1;
				$scope.guest_bathrooms_10_4_self_assessor_1 = data.guest_bathrooms_10_4_self_assessor_1;
				$scope.guest_bathrooms_10_5_self_assessor_1 = data.guest_bathrooms_10_5_self_assessor_1;
				$scope.guest_bathrooms_10_6_self_assessor_1 = data.guest_bathrooms_10_6_self_assessor_1;
				$scope.guest_bathrooms_10_7_self_assessor_1 = data.guest_bathrooms_10_7_self_assessor_1;
				$scope.guest_bathrooms_10_8_self_assessor_1 = data.guest_bathrooms_10_8_self_assessor_1;
				$scope.guest_bathrooms_10_9_self_assessor_1 = data.guest_bathrooms_10_9_self_assessor_1;
				//Assessor 2
				$scope.guest_bathrooms_10_0_self_assessor_2 = data.guest_bathrooms_10_0_self_assessor_2;
				$scope.guest_bathrooms_10_1_self_assessor_2 = data.guest_bathrooms_10_1_self_assessor_2;
				$scope.guest_bathrooms_10_2_self_assessor_2 = data.guest_bathrooms_10_2_self_assessor_2;
				$scope.guest_bathrooms_10_3_self_assessor_2 = data.guest_bathrooms_10_3_self_assessor_2;
				$scope.guest_bathrooms_10_4_self_assessor_2 = data.guest_bathrooms_10_4_self_assessor_2;
				$scope.guest_bathrooms_10_5_self_assessor_2 = data.guest_bathrooms_10_5_self_assessor_2;
				$scope.guest_bathrooms_10_6_self_assessor_2 = data.guest_bathrooms_10_6_self_assessor_2;
				$scope.guest_bathrooms_10_7_self_assessor_2 = data.guest_bathrooms_10_7_self_assessor_2;
				$scope.guest_bathrooms_10_8_self_assessor_2 = data.guest_bathrooms_10_8_self_assessor_2;
				$scope.guest_bathrooms_10_9_self_assessor_2 = data.guest_bathrooms_10_9_self_assessor_2;
				//Assessor 3
				$scope.guest_bathrooms_10_0_self_assessor_3 = data.guest_bathrooms_10_0_self_assessor_3;
				$scope.guest_bathrooms_10_1_self_assessor_3 = data.guest_bathrooms_10_1_self_assessor_3;
				$scope.guest_bathrooms_10_2_self_assessor_3 = data.guest_bathrooms_10_2_self_assessor_3;
				$scope.guest_bathrooms_10_3_self_assessor_3 = data.guest_bathrooms_10_3_self_assessor_3;
				$scope.guest_bathrooms_10_4_self_assessor_3 = data.guest_bathrooms_10_4_self_assessor_3;
				$scope.guest_bathrooms_10_5_self_assessor_3 = data.guest_bathrooms_10_5_self_assessor_3;
				$scope.guest_bathrooms_10_6_self_assessor_3 = data.guest_bathrooms_10_6_self_assessor_3;
				$scope.guest_bathrooms_10_7_self_assessor_3 = data.guest_bathrooms_10_7_self_assessor_3;
				$scope.guest_bathrooms_10_8_self_assessor_3 = data.guest_bathrooms_10_8_self_assessor_3;
				$scope.guest_bathrooms_10_9_self_assessor_3 = data.guest_bathrooms_10_9_self_assessor_3;
				//guest_bathrooms and Subsections Average
				$scope.guest_bathrooms_10_0_average = ((data.guest_bathrooms_10_0_self_assessor_1 + data.guest_bathrooms_10_0_self_assessor_2 + data.guest_bathrooms_10_0_self_assessor_3)/3);				
				$scope.guest_bathrooms_10_1_average = ((data.guest_bathrooms_10_1_self_assessor_1 + data.guest_bathrooms_10_1_self_assessor_2 + data.guest_bathrooms_10_1_self_assessor_3)/3);
				$scope.guest_bathrooms_10_2_average = ((data.guest_bathrooms_10_2_self_assessor_1 + data.guest_bathrooms_10_2_self_assessor_2 + data.guest_bathrooms_10_2_self_assessor_3)/3);
				$scope.guest_bathrooms_10_3_average = ((data.guest_bathrooms_10_3_self_assessor_1 + data.guest_bathrooms_10_3_self_assessor_2 + data.guest_bathrooms_10_3_self_assessor_3)/3);
				$scope.guest_bathrooms_10_4_average = ((data.guest_bathrooms_10_4_self_assessor_1 + data.guest_bathrooms_10_4_self_assessor_2 + data.guest_bathrooms_10_4_self_assessor_3)/3);
				$scope.guest_bathrooms_10_5_average = ((data.guest_bathrooms_10_5_self_assessor_1 + data.guest_bathrooms_10_5_self_assessor_2 + data.guest_bathrooms_10_5_self_assessor_3)/3);
				$scope.guest_bathrooms_10_6_average = ((data.guest_bathrooms_10_6_self_assessor_1 + data.guest_bathrooms_10_6_self_assessor_2 + data.guest_bathrooms_10_6_self_assessor_3)/3);
				$scope.guest_bathrooms_10_7_average = ((data.guest_bathrooms_10_7_self_assessor_1 + data.guest_bathrooms_10_7_self_assessor_2 + data.guest_bathrooms_10_7_self_assessor_3)/3);
				$scope.guest_bathrooms_10_8_average = ((data.guest_bathrooms_10_8_self_assessor_1 + data.guest_bathrooms_10_8_self_assessor_2 + data.guest_bathrooms_10_8_self_assessor_3)/3);
				$scope.guest_bathrooms_10_9_average = ((data.guest_bathrooms_10_9_self_assessor_1 + data.guest_bathrooms_10_9_self_assessor_2 + data.guest_bathrooms_10_9_self_assessor_3)/3);
				//guest bathrooms Reconcilliation
				$scope.guest_bathrooms_not_reconciled = false;
				//10.1
				$scope.guest_bathrooms_10_1_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_1_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_1_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_1_self_assessor_1 - $scope.guest_bathrooms_10_1_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_1_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_1_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_1_self_assessor_1 - $scope.guest_bathrooms_10_1_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_1_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_1_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_1_self_assessor_2 - $scope.guest_bathrooms_10_1_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_1_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_1_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.2
				$scope.guest_bathrooms_10_2_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_2_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_2_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_2_self_assessor_1 - $scope.guest_bathrooms_10_2_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_2_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_2_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_2_self_assessor_1 - $scope.guest_bathrooms_10_2_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_2_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_2_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_2_self_assessor_2 - $scope.guest_bathrooms_10_2_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_2_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_2_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.3
				$scope.guest_bathrooms_10_3_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_3_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_3_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_3_self_assessor_1 - $scope.guest_bathrooms_10_3_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_3_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_3_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_3_self_assessor_1 - $scope.guest_bathrooms_10_3_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_3_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_3_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_3_self_assessor_2 - $scope.guest_bathrooms_10_3_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_3_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_3_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.4
				$scope.guest_bathrooms_10_4_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_4_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_4_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_4_self_assessor_1 - $scope.guest_bathrooms_10_4_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_4_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_4_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_4_self_assessor_1 - $scope.guest_bathrooms_10_4_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_4_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_4_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_4_self_assessor_2 - $scope.guest_bathrooms_10_4_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_4_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_4_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.5
				$scope.guest_bathrooms_10_5_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_5_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_5_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_5_self_assessor_1 - $scope.guest_bathrooms_10_5_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_5_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_5_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_5_self_assessor_1 - $scope.guest_bathrooms_10_5_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_5_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_5_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_5_self_assessor_2 - $scope.guest_bathrooms_10_5_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_5_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_5_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.6
				$scope.guest_bathrooms_10_6_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_6_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_6_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_6_self_assessor_1 - $scope.guest_bathrooms_10_6_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_6_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_6_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_6_self_assessor_1 - $scope.guest_bathrooms_10_6_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_6_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_6_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_6_self_assessor_2 - $scope.guest_bathrooms_10_6_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_6_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_6_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.7
				$scope.guest_bathrooms_10_7_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_7_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_7_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_7_self_assessor_1 - $scope.guest_bathrooms_10_7_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_7_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_7_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_7_self_assessor_1 - $scope.guest_bathrooms_10_7_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_7_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_7_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_7_self_assessor_2 - $scope.guest_bathrooms_10_7_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_7_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_7_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.8
				$scope.guest_bathrooms_10_8_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_8_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_8_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_8_self_assessor_1 - $scope.guest_bathrooms_10_8_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_8_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_8_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_8_self_assessor_1 - $scope.guest_bathrooms_10_8_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_8_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_8_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_8_self_assessor_2 - $scope.guest_bathrooms_10_8_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_8_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_8_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//10.9
				$scope.guest_bathrooms_10_9_self_assessor_1_not_reconciled = false;
				$scope.guest_bathrooms_10_9_self_assessor_2_not_reconciled = false;
				$scope.guest_bathrooms_10_9_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.guest_bathrooms_10_9_self_assessor_1 - $scope.guest_bathrooms_10_9_self_assessor_2) > reconciliation_line){ $scope.guest_bathrooms_10_9_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_9_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_9_self_assessor_1 - $scope.guest_bathrooms_10_9_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_9_self_assessor_1_not_reconciled = true; $scope.guest_bathrooms_10_9_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.guest_bathrooms_10_9_self_assessor_2 - $scope.guest_bathrooms_10_9_self_assessor_3) > reconciliation_line){ $scope.guest_bathrooms_10_9_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_10_9_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
		//SUITES
				//Single Assessor
				$scope.suites_11_0_self_self = data.suites_11_0_self_self;
				$scope.suites_11_1_self_self = data.suites_11_1_self_self;
				$scope.suites_11_2_self_self = data.suites_11_2_self_self;
				$scope.suites_11_3_self_self = data.suites_11_3_self_self;
				$scope.suites_11_4_self_self = data.suites_11_4_self_self;
				$scope.suites_11_5_self_self = data.suites_11_5_self_self;
				$scope.suites_11_6_self_self = data.suites_11_6_self_self;
				$scope.suites_11_7_self_self = data.suites_11_7_self_self;
				$scope.suites_11_8_self_self = data.suites_11_8_self_self;
				$scope.suites_11_9_self_self = data.suites_11_9_self_self;
				$scope.suites_11_10_self_self = data.suites_11_10_self_self;
				$scope.suites_11_11_self_self = data.suites_11_11_self_self;
				$scope.suites_11_12_self_self = data.suites_11_12_self_self;
				$scope.suites_11_13_self_self = data.suites_11_13_self_self;
				$scope.suites_11_14_self_self = data.suites_11_14_self_self;
				$scope.suites_11_15_self_self = data.suites_11_15_self_self;
				$scope.suites_11_16_self_self = data.suites_11_16_self_self;
				$scope.suites_11_17_self_self = data.suites_11_17_self_self;
				$scope.suites_11_18_self_self = data.suites_11_18_self_self;
				$scope.suites_11_19_self_self = data.suites_11_19_self_self;
				$scope.suites_11_20_self_self = data.suites_11_20_self_self;
				$scope.suites_11_21_self_self = data.suites_11_21_self_self;
				//Assessor 1
				$scope.suites_11_0_self_assessor_1 = data.suites_11_0_self_assessor_1;
				$scope.suites_11_1_self_assessor_1 = data.suites_11_1_self_assessor_1;
				$scope.suites_11_2_self_assessor_1 = data.suites_11_2_self_assessor_1;
				$scope.suites_11_3_self_assessor_1 = data.suites_11_3_self_assessor_1;
				$scope.suites_11_4_self_assessor_1 = data.suites_11_4_self_assessor_1;
				$scope.suites_11_5_self_assessor_1 = data.suites_11_5_self_assessor_1;
				$scope.suites_11_6_self_assessor_1 = data.suites_11_6_self_assessor_1;
				$scope.suites_11_7_self_assessor_1 = data.suites_11_7_self_assessor_1;
				$scope.suites_11_8_self_assessor_1 = data.suites_11_8_self_assessor_1;
				$scope.suites_11_9_self_assessor_1 = data.suites_11_9_self_assessor_1;
				$scope.suites_11_10_self_assessor_1 = data.suites_11_10_self_assessor_1;
				$scope.suites_11_11_self_assessor_1 = data.suites_11_11_self_assessor_1;
				$scope.suites_11_12_self_assessor_1 = data.suites_11_12_self_assessor_1;
				$scope.suites_11_13_self_assessor_1 = data.suites_11_13_self_assessor_1;
				$scope.suites_11_14_self_assessor_1 = data.suites_11_14_self_assessor_1;
				$scope.suites_11_15_self_assessor_1 = data.suites_11_15_self_assessor_1;
				$scope.suites_11_16_self_assessor_1 = data.suites_11_16_self_assessor_1;
				$scope.suites_11_17_self_assessor_1 = data.suites_11_17_self_assessor_1;
				$scope.suites_11_18_self_assessor_1 = data.suites_11_18_self_assessor_1;
				$scope.suites_11_19_self_assessor_1 = data.suites_11_19_self_assessor_1;
				$scope.suites_11_20_self_assessor_1 = data.suites_11_20_self_assessor_1;
				$scope.suites_11_21_self_assessor_1 = data.suites_11_21_self_assessor_1;
				//Assessor 2
				$scope.suites_11_0_self_assessor_2 = data.suites_11_0_self_assessor_2;
				$scope.suites_11_1_self_assessor_2 = data.suites_11_1_self_assessor_2;
				$scope.suites_11_2_self_assessor_2 = data.suites_11_2_self_assessor_2;
				$scope.suites_11_3_self_assessor_2 = data.suites_11_3_self_assessor_2;
				$scope.suites_11_4_self_assessor_2 = data.suites_11_4_self_assessor_2;
				$scope.suites_11_5_self_assessor_2 = data.suites_11_5_self_assessor_2;
				$scope.suites_11_6_self_assessor_2 = data.suites_11_6_self_assessor_2;
				$scope.suites_11_7_self_assessor_2 = data.suites_11_7_self_assessor_2;
				$scope.suites_11_8_self_assessor_2 = data.suites_11_8_self_assessor_2;
				$scope.suites_11_9_self_assessor_2 = data.suites_11_9_self_assessor_2;
				$scope.suites_11_10_self_assessor_2 = data.suites_11_10_self_assessor_2;
				$scope.suites_11_11_self_assessor_2 = data.suites_11_11_self_assessor_2;
				$scope.suites_11_12_self_assessor_2 = data.suites_11_12_self_assessor_2;
				$scope.suites_11_13_self_assessor_2 = data.suites_11_13_self_assessor_2;
				$scope.suites_11_14_self_assessor_2 = data.suites_11_14_self_assessor_2;
				$scope.suites_11_15_self_assessor_2 = data.suites_11_15_self_assessor_2;
				$scope.suites_11_16_self_assessor_2 = data.suites_11_16_self_assessor_2;
				$scope.suites_11_17_self_assessor_2 = data.suites_11_17_self_assessor_2;
				$scope.suites_11_18_self_assessor_2 = data.suites_11_18_self_assessor_2;
				$scope.suites_11_19_self_assessor_2 = data.suites_11_19_self_assessor_2;
				$scope.suites_11_20_self_assessor_2 = data.suites_11_20_self_assessor_2;
				$scope.suites_11_21_self_assessor_2 = data.suites_11_21_self_assessor_2;
				//Assessor 3
				$scope.suites_11_0_self_assessor_3 = data.suites_11_0_self_assessor_3;
				$scope.suites_11_1_self_assessor_3 = data.suites_11_1_self_assessor_3;
				$scope.suites_11_2_self_assessor_3 = data.suites_11_2_self_assessor_3;
				$scope.suites_11_3_self_assessor_3 = data.suites_11_3_self_assessor_3;
				$scope.suites_11_4_self_assessor_3 = data.suites_11_4_self_assessor_3;
				$scope.suites_11_5_self_assessor_3 = data.suites_11_5_self_assessor_3;
				$scope.suites_11_6_self_assessor_3 = data.suites_11_6_self_assessor_3;
				$scope.suites_11_7_self_assessor_3 = data.suites_11_7_self_assessor_3;
				$scope.suites_11_8_self_assessor_3 = data.suites_11_8_self_assessor_3;
				$scope.suites_11_9_self_assessor_3 = data.suites_11_9_self_assessor_3;
				$scope.suites_11_10_self_assessor_3 = data.suites_11_10_self_assessor_3;
				$scope.suites_11_11_self_assessor_3 = data.suites_11_11_self_assessor_3;
				$scope.suites_11_12_self_assessor_3 = data.suites_11_12_self_assessor_3;
				$scope.suites_11_13_self_assessor_3 = data.suites_11_13_self_assessor_3;
				$scope.suites_11_14_self_assessor_3 = data.suites_11_14_self_assessor_3;
				$scope.suites_11_15_self_assessor_3 = data.suites_11_15_self_assessor_3;
				$scope.suites_11_16_self_assessor_3 = data.suites_11_16_self_assessor_3;
				$scope.suites_11_17_self_assessor_3 = data.suites_11_17_self_assessor_3;
				$scope.suites_11_18_self_assessor_3 = data.suites_11_18_self_assessor_3;
				$scope.suites_11_19_self_assessor_3 = data.suites_11_19_self_assessor_3;
				$scope.suites_11_20_self_assessor_3 = data.suites_11_20_self_assessor_3;
				$scope.suites_11_21_self_assessor_3 = data.suites_11_21_self_assessor_3;
				//Suites and subsections average
				$scope.suites_11_0_average = ((data.suites_11_0_self_assessor_1 + data.suites_11_0_self_assessor_2 + data.suites_11_0_self_assessor_3)/3);
				$scope.suites_11_1_average = ((data.suites_11_1_self_assessor_1 + data.suites_11_1_self_assessor_2 + data.suites_11_1_self_assessor_3)/3);
				$scope.suites_11_2_average = ((data.suites_11_2_self_assessor_1 + data.suites_11_2_self_assessor_2 + data.suites_11_2_self_assessor_3)/3);
				$scope.suites_11_3_average = ((data.suites_11_3_self_assessor_1 + data.suites_11_3_self_assessor_2 + data.suites_11_3_self_assessor_3)/3);
				$scope.suites_11_4_average = ((data.suites_11_4_self_assessor_1 + data.suites_11_4_self_assessor_2 + data.suites_11_4_self_assessor_3)/3);
				$scope.suites_11_5_average = ((data.suites_11_5_self_assessor_1 + data.suites_11_5_self_assessor_2 + data.suites_11_5_self_assessor_3)/3);
				$scope.suites_11_6_average = ((data.suites_11_6_self_assessor_1 + data.suites_11_6_self_assessor_2 + data.suites_11_6_self_assessor_3)/3);
				$scope.suites_11_7_average = ((data.suites_11_7_self_assessor_1 + data.suites_11_7_self_assessor_2 + data.suites_11_7_self_assessor_3)/3);
				$scope.suites_11_8_average = ((data.suites_11_8_self_assessor_1 + data.suites_11_8_self_assessor_2 + data.suites_11_8_self_assessor_3)/3);
				$scope.suites_11_9_average = ((data.suites_11_9_self_assessor_1 + data.suites_11_9_self_assessor_2 + data.suites_11_9_self_assessor_3)/3);
				$scope.suites_11_10_average = ((data.suites_11_10_self_assessor_1 + data.suites_11_10_self_assessor_2 + data.suites_11_10_self_assessor_3)/3);
				$scope.suites_11_11_average = ((data.suites_11_11_self_assessor_1 + data.suites_11_11_self_assessor_2 + data.suites_11_11_self_assessor_3)/3);
				$scope.suites_11_12_average = ((data.suites_11_12_self_assessor_1 + data.suites_11_12_self_assessor_2 + data.suites_11_12_self_assessor_3)/3);
				$scope.suites_11_13_average = ((data.suites_11_13_self_assessor_1 + data.suites_11_13_self_assessor_2 + data.suites_11_13_self_assessor_3)/3);
				$scope.suites_11_14_average = ((data.suites_11_14_self_assessor_1 + data.suites_11_14_self_assessor_2 + data.suites_11_14_self_assessor_3)/3);
				$scope.suites_11_15_average = ((data.suites_11_15_self_assessor_1 + data.suites_11_15_self_assessor_2 + data.suites_11_15_self_assessor_3)/3);
				$scope.suites_11_16_average = ((data.suites_11_16_self_assessor_1 + data.suites_11_16_self_assessor_2 + data.suites_11_16_self_assessor_3)/3);
				$scope.suites_11_17_average = ((data.suites_11_17_self_assessor_1 + data.suites_11_17_self_assessor_2 + data.suites_11_17_self_assessor_3)/3);
				$scope.suites_11_18_average = ((data.suites_11_18_self_assessor_1 + data.suites_11_18_self_assessor_2 + data.suites_11_18_self_assessor_3)/3);
				$scope.suites_11_19_average = ((data.suites_11_19_self_assessor_1 + data.suites_11_19_self_assessor_2 + data.suites_11_19_self_assessor_3)/3);
				$scope.suites_11_20_average = ((data.suites_11_20_self_assessor_1 + data.suites_11_20_self_assessor_2 + data.suites_11_20_self_assessor_3)/3);
				$scope.suites_11_21_average = ((data.suites_11_21_self_assessor_1 + data.suites_11_21_self_assessor_2 + data.suites_11_21_self_assessor_3)/3);
				//Suites Reconcilliation
				$scope.suites_not_reconciled = false;
				//11_1
				$scope.suites_11_1_self_assessor_1_not_reconciled = false;
				$scope.suites_11_1_self_assessor_2_not_reconciled = false;
				$scope.suites_11_1_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_1_self_assessor_1 - $scope.suites_11_1_self_assessor_2) > reconciliation_line){ $scope.suites_11_1_self_assessor_1_not_reconciled = true; $scope.suites_11_1_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_1_self_assessor_1 - $scope.suites_11_1_self_assessor_3) > reconciliation_line){ $scope.suites_11_1_self_assessor_1_not_reconciled = true; $scope.suites_11_1_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_1_self_assessor_2 - $scope.suites_11_1_self_assessor_3) > reconciliation_line){ $scope.suites_11_1_self_assessor_2_not_reconciled = true; $scope.suites_11_1_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_2
				$scope.suites_11_2_self_assessor_1_not_reconciled = false;
				$scope.suites_11_2_self_assessor_2_not_reconciled = false;
				$scope.suites_11_2_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_2_self_assessor_1 - $scope.suites_11_2_self_assessor_2) > reconciliation_line){ $scope.suites_11_2_self_assessor_1_not_reconciled = true; $scope.suites_11_2_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_2_self_assessor_1 - $scope.suites_11_2_self_assessor_3) > reconciliation_line){ $scope.suites_11_2_self_assessor_1_not_reconciled = true; $scope.suites_11_2_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_2_self_assessor_2 - $scope.suites_11_2_self_assessor_3) > reconciliation_line){ $scope.suites_11_2_self_assessor_2_not_reconciled = true; $scope.suites_11_2_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_3
				$scope.suites_11_3_self_assessor_1_not_reconciled = false;
				$scope.suites_11_3_self_assessor_2_not_reconciled = false;
				$scope.suites_11_3_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_3_self_assessor_1 - $scope.suites_11_3_self_assessor_2) > reconciliation_line){ $scope.suites_11_3_self_assessor_1_not_reconciled = true; $scope.suites_11_3_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_3_self_assessor_1 - $scope.suites_11_3_self_assessor_3) > reconciliation_line){ $scope.suites_11_3_self_assessor_1_not_reconciled = true; $scope.suites_11_3_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_3_self_assessor_2 - $scope.suites_11_3_self_assessor_3) > reconciliation_line){ $scope.suites_11_3_self_assessor_2_not_reconciled = true; $scope.suites_11_3_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_4
				$scope.suites_11_4_self_assessor_1_not_reconciled = false;
				$scope.suites_11_4_self_assessor_2_not_reconciled = false;
				$scope.suites_11_4_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_4_self_assessor_1 - $scope.suites_11_4_self_assessor_2) > reconciliation_line){ $scope.suites_11_4_self_assessor_1_not_reconciled = true; $scope.suites_11_4_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_4_self_assessor_1 - $scope.suites_11_4_self_assessor_3) > reconciliation_line){ $scope.suites_11_4_self_assessor_1_not_reconciled = true; $scope.suites_11_4_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_4_self_assessor_2 - $scope.suites_11_4_self_assessor_3) > reconciliation_line){ $scope.suites_11_4_self_assessor_2_not_reconciled = true; $scope.suites_11_4_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_5
				$scope.suites_11_5_self_assessor_1_not_reconciled = false;
				$scope.suites_11_5_self_assessor_2_not_reconciled = false;
				$scope.suites_11_5_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_5_self_assessor_1 - $scope.suites_11_5_self_assessor_2) > reconciliation_line){ $scope.suites_11_5_self_assessor_1_not_reconciled = true; $scope.suites_11_5_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_5_self_assessor_1 - $scope.suites_11_5_self_assessor_3) > reconciliation_line){ $scope.suites_11_5_self_assessor_1_not_reconciled = true; $scope.suites_11_5_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_5_self_assessor_2 - $scope.suites_11_5_self_assessor_3) > reconciliation_line){ $scope.suites_11_5_self_assessor_2_not_reconciled = true; $scope.suites_11_5_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_6
				$scope.suites_11_6_self_assessor_1_not_reconciled = false;
				$scope.suites_11_6_self_assessor_2_not_reconciled = false;
				$scope.suites_11_6_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_6_self_assessor_1 - $scope.suites_11_6_self_assessor_2) > reconciliation_line){ $scope.suites_11_6_self_assessor_1_not_reconciled = true; $scope.suites_11_6_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_6_self_assessor_1 - $scope.suites_11_6_self_assessor_3) > reconciliation_line){ $scope.suites_11_6_self_assessor_1_not_reconciled = true; $scope.suites_11_6_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_6_self_assessor_2 - $scope.suites_11_6_self_assessor_3) > reconciliation_line){ $scope.suites_11_6_self_assessor_2_not_reconciled = true; $scope.suites_11_6_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_7
				$scope.suites_11_7_self_assessor_1_not_reconciled = false;
				$scope.suites_11_7_self_assessor_2_not_reconciled = false;
				$scope.suites_11_7_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_7_self_assessor_1 - $scope.suites_11_7_self_assessor_2) > reconciliation_line){ $scope.suites_11_7_self_assessor_1_not_reconciled = true; $scope.suites_11_7_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_7_self_assessor_1 - $scope.suites_11_7_self_assessor_3) > reconciliation_line){ $scope.suites_11_7_self_assessor_1_not_reconciled = true; $scope.suites_11_7_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_7_self_assessor_2 - $scope.suites_11_7_self_assessor_3) > reconciliation_line){ $scope.suites_11_7_self_assessor_2_not_reconciled = true; $scope.suites_11_7_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_8
				$scope.suites_11_8_self_assessor_1_not_reconciled = false;
				$scope.suites_11_8_self_assessor_2_not_reconciled = false;
				$scope.suites_11_8_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_8_self_assessor_1 - $scope.suites_11_8_self_assessor_2) > reconciliation_line){ $scope.suites_11_8_self_assessor_1_not_reconciled = true; $scope.suites_11_8_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_8_self_assessor_1 - $scope.suites_11_8_self_assessor_3) > reconciliation_line){ $scope.suites_11_8_self_assessor_1_not_reconciled = true; $scope.suites_11_8_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_8_self_assessor_2 - $scope.suites_11_8_self_assessor_3) > reconciliation_line){ $scope.suites_11_8_self_assessor_2_not_reconciled = true; $scope.suites_11_8_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_9
				$scope.suites_11_9_self_assessor_1_not_reconciled = false;
				$scope.suites_11_9_self_assessor_2_not_reconciled = false;
				$scope.suites_11_9_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_9_self_assessor_1 - $scope.suites_11_9_self_assessor_2) > reconciliation_line){ $scope.suites_11_9_self_assessor_1_not_reconciled = true; $scope.suites_11_9_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_9_self_assessor_1 - $scope.suites_11_9_self_assessor_3) > reconciliation_line){ $scope.suites_11_9_self_assessor_1_not_reconciled = true; $scope.suites_11_9_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_9_self_assessor_2 - $scope.suites_11_9_self_assessor_3) > reconciliation_line){ $scope.suites_11_9_self_assessor_2_not_reconciled = true; $scope.suites_11_9_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_10
				$scope.suites_11_10_self_assessor_1_not_reconciled = false;
				$scope.suites_11_10_self_assessor_2_not_reconciled = false;
				$scope.suites_11_10_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_10_self_assessor_1 - $scope.suites_11_10_self_assessor_2) > reconciliation_line){ $scope.suites_11_10_self_assessor_1_not_reconciled = true; $scope.suites_11_10_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_10_self_assessor_1 - $scope.suites_11_10_self_assessor_3) > reconciliation_line){ $scope.suites_11_10_self_assessor_1_not_reconciled = true; $scope.suites_11_10_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_10_self_assessor_2 - $scope.suites_11_10_self_assessor_3) > reconciliation_line){ $scope.suites_11_10_self_assessor_2_not_reconciled = true; $scope.suites_11_10_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_11
				$scope.suites_11_11_self_assessor_1_not_reconciled = false;
				$scope.suites_11_11_self_assessor_2_not_reconciled = false;
				$scope.suites_11_11_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_11_self_assessor_1 - $scope.suites_11_11_self_assessor_2) > reconciliation_line){ $scope.suites_11_11_self_assessor_1_not_reconciled = true; $scope.suites_11_11_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_11_self_assessor_1 - $scope.suites_11_11_self_assessor_3) > reconciliation_line){ $scope.suites_11_11_self_assessor_1_not_reconciled = true; $scope.suites_11_11_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_11_self_assessor_2 - $scope.suites_11_11_self_assessor_3) > reconciliation_line){ $scope.suites_11_11_self_assessor_2_not_reconciled = true; $scope.suites_11_11_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_12
				$scope.suites_11_12_self_assessor_1_not_reconciled = false;
				$scope.suites_11_12_self_assessor_2_not_reconciled = false;
				$scope.suites_11_12_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_12_self_assessor_1 - $scope.suites_11_12_self_assessor_2) > reconciliation_line){ $scope.suites_11_12_self_assessor_1_not_reconciled = true; $scope.suites_11_12_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_12_self_assessor_1 - $scope.suites_11_12_self_assessor_3) > reconciliation_line){ $scope.suites_11_12_self_assessor_1_not_reconciled = true; $scope.suites_11_12_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_12_self_assessor_2 - $scope.suites_11_12_self_assessor_3) > reconciliation_line){ $scope.suites_11_12_self_assessor_2_not_reconciled = true; $scope.suites_11_12_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_13
				$scope.suites_11_13_self_assessor_1_not_reconciled = false;
				$scope.suites_11_13_self_assessor_2_not_reconciled = false;
				$scope.suites_11_13_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_13_self_assessor_1 - $scope.suites_11_13_self_assessor_2) > reconciliation_line){ $scope.suites_11_13_self_assessor_1_not_reconciled = true; $scope.suites_11_13_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_13_self_assessor_1 - $scope.suites_11_13_self_assessor_3) > reconciliation_line){ $scope.suites_11_13_self_assessor_1_not_reconciled = true; $scope.suites_11_13_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_13_self_assessor_2 - $scope.suites_11_13_self_assessor_3) > reconciliation_line){ $scope.suites_11_13_self_assessor_2_not_reconciled = true; $scope.suites_11_13_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_14
				$scope.suites_11_14_self_assessor_1_not_reconciled = false;
				$scope.suites_11_14_self_assessor_2_not_reconciled = false;
				$scope.suites_11_14_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_14_self_assessor_1 - $scope.suites_11_14_self_assessor_2) > reconciliation_line){ $scope.suites_11_14_self_assessor_1_not_reconciled = true; $scope.suites_11_14_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_14_self_assessor_1 - $scope.suites_11_14_self_assessor_3) > reconciliation_line){ $scope.suites_11_14_self_assessor_1_not_reconciled = true; $scope.suites_11_14_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_14_self_assessor_2 - $scope.suites_11_14_self_assessor_3) > reconciliation_line){ $scope.suites_11_14_self_assessor_2_not_reconciled = true; $scope.suites_11_14_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_15
				$scope.suites_11_15_self_assessor_1_not_reconciled = false;
				$scope.suites_11_15_self_assessor_2_not_reconciled = false;
				$scope.suites_11_15_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_15_self_assessor_1 - $scope.suites_11_15_self_assessor_2) > reconciliation_line){ $scope.suites_11_15_self_assessor_1_not_reconciled = true; $scope.suites_11_15_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_15_self_assessor_1 - $scope.suites_11_15_self_assessor_3) > reconciliation_line){ $scope.suites_11_15_self_assessor_1_not_reconciled = true; $scope.suites_11_15_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_15_self_assessor_2 - $scope.suites_11_15_self_assessor_3) > reconciliation_line){ $scope.suites_11_15_self_assessor_2_not_reconciled = true; $scope.suites_11_15_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_16
				$scope.suites_11_16_self_assessor_1_not_reconciled = false;
				$scope.suites_11_16_self_assessor_2_not_reconciled = false;
				$scope.suites_11_16_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_16_self_assessor_1 - $scope.suites_11_16_self_assessor_2) > reconciliation_line){ $scope.suites_11_16_self_assessor_1_not_reconciled = true; $scope.suites_11_16_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_16_self_assessor_1 - $scope.suites_11_16_self_assessor_3) > reconciliation_line){ $scope.suites_11_16_self_assessor_1_not_reconciled = true; $scope.suites_11_16_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_16_self_assessor_2 - $scope.suites_11_16_self_assessor_3) > reconciliation_line){ $scope.suites_11_16_self_assessor_2_not_reconciled = true; $scope.suites_11_16_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_17
				$scope.suites_11_17_self_assessor_1_not_reconciled = false;
				$scope.suites_11_17_self_assessor_2_not_reconciled = false;
				$scope.suites_11_17_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_17_self_assessor_1 - $scope.suites_11_17_self_assessor_2) > reconciliation_line){ $scope.suites_11_17_self_assessor_1_not_reconciled = true; $scope.suites_11_17_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_17_self_assessor_1 - $scope.suites_11_17_self_assessor_3) > reconciliation_line){ $scope.suites_11_17_self_assessor_1_not_reconciled = true; $scope.suites_11_17_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_17_self_assessor_2 - $scope.suites_11_17_self_assessor_3) > reconciliation_line){ $scope.suites_11_17_self_assessor_2_not_reconciled = true; $scope.suites_11_17_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_18
				$scope.suites_11_18_self_assessor_1_not_reconciled = false;
				$scope.suites_11_18_self_assessor_2_not_reconciled = false;
				$scope.suites_11_18_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_18_self_assessor_1 - $scope.suites_11_18_self_assessor_2) > reconciliation_line){ $scope.suites_11_18_self_assessor_1_not_reconciled = true; $scope.suites_11_18_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_18_self_assessor_1 - $scope.suites_11_18_self_assessor_3) > reconciliation_line){ $scope.suites_11_18_self_assessor_1_not_reconciled = true; $scope.suites_11_18_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_18_self_assessor_2 - $scope.suites_11_18_self_assessor_3) > reconciliation_line){ $scope.suites_11_18_self_assessor_2_not_reconciled = true; $scope.suites_11_18_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_19
				$scope.suites_11_19_self_assessor_1_not_reconciled = false;
				$scope.suites_11_19_self_assessor_2_not_reconciled = false;
				$scope.suites_11_19_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_19_self_assessor_1 - $scope.suites_11_19_self_assessor_2) > reconciliation_line){ $scope.suites_11_19_self_assessor_1_not_reconciled = true; $scope.suites_11_19_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_19_self_assessor_1 - $scope.suites_11_19_self_assessor_3) > reconciliation_line){ $scope.suites_11_19_self_assessor_1_not_reconciled = true; $scope.suites_11_19_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_19_self_assessor_2 - $scope.suites_11_19_self_assessor_3) > reconciliation_line){ $scope.suites_11_19_self_assessor_2_not_reconciled = true; $scope.suites_11_19_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_20
				$scope.suites_11_20_self_assessor_1_not_reconciled = false;
				$scope.suites_11_20_self_assessor_2_not_reconciled = false;
				$scope.suites_11_20_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_20_self_assessor_1 - $scope.suites_11_20_self_assessor_2) > reconciliation_line){ $scope.suites_11_20_self_assessor_1_not_reconciled = true; $scope.suites_11_20_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_20_self_assessor_1 - $scope.suites_11_20_self_assessor_3) > reconciliation_line){ $scope.suites_11_20_self_assessor_1_not_reconciled = true; $scope.suites_11_20_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_20_self_assessor_2 - $scope.suites_11_20_self_assessor_3) > reconciliation_line){ $scope.suites_11_20_self_assessor_2_not_reconciled = true; $scope.suites_11_20_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				//11_21
				$scope.suites_11_21_self_assessor_1_not_reconciled = false;
				$scope.suites_11_21_self_assessor_2_not_reconciled = false;
				$scope.suites_11_21_self_assessor_3_not_reconciled = false;					
				if (Math.abs($scope.suites_11_21_self_assessor_1 - $scope.suites_11_21_self_assessor_2) > reconciliation_line){ $scope.suites_11_21_self_assessor_1_not_reconciled = true; $scope.suites_11_21_self_assessor_2_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_21_self_assessor_1 - $scope.suites_11_21_self_assessor_3) > reconciliation_line){ $scope.suites_11_21_self_assessor_1_not_reconciled = true; $scope.suites_11_21_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.suites_11_21_self_assessor_2 - $scope.suites_11_21_self_assessor_3) > reconciliation_line){ $scope.suites_11_21_self_assessor_2_not_reconciled = true; $scope.suites_11_21_self_assessor_3_not_reconciled = true; $scope.guest_bathrooms_not_reconciled = true; }
	//HYGIENE AND SANITATION 12.0				
				//Single Assessor
				$scope.hygiene_and_sanitation_12_0_self_self = data.hygiene_and_sanitation_12_0_self_self;
				$scope.hygiene_and_sanitation_12_1_self_self = data.hygiene_and_sanitation_12_1_self_self;
				$scope.hygiene_and_sanitation_12_2_self_self = data.hygiene_and_sanitation_12_2_self_self;
				$scope.hygiene_and_sanitation_12_3_self_self = data.hygiene_and_sanitation_12_2_self_self;
				$scope.hygiene_and_sanitation_12_4_self_self = data.hygiene_and_sanitation_12_2_self_self;
				$scope.hygiene_and_sanitation_12_5_self_self = data.hygiene_and_sanitation_12_2_self_self;
				$scope.hygiene_and_sanitation_12_6_self_self = data.hygiene_and_sanitation_12_6_self_self;
				$scope.hygiene_and_sanitation_12_7_self_self = data.hygiene_and_sanitation_12_7_self_self;
				//Assessor 1
				$scope.hygiene_and_sanitation_12_0_self_assessor_1 = data.hygiene_and_sanitation_12_0_self_assessor_1;
				$scope.hygiene_and_sanitation_12_1_self_assessor_1 = data.hygiene_and_sanitation_12_1_self_assessor_1;
				$scope.hygiene_and_sanitation_12_2_self_assessor_1 = data.hygiene_and_sanitation_12_2_self_assessor_1;
				$scope.hygiene_and_sanitation_12_3_self_assessor_1 = data.hygiene_and_sanitation_12_2_self_assessor_1;
				$scope.hygiene_and_sanitation_12_4_self_assessor_1 = data.hygiene_and_sanitation_12_2_self_assessor_1;
				$scope.hygiene_and_sanitation_12_5_self_assessor_1 = data.hygiene_and_sanitation_12_2_self_assessor_1;
				$scope.hygiene_and_sanitation_12_6_self_assessor_1 = data.hygiene_and_sanitation_12_6_self_assessor_1;
				$scope.hygiene_and_sanitation_12_7_self_assessor_1 = data.hygiene_and_sanitation_12_7_self_assessor_1;
				//Assessor 2
				$scope.hygiene_and_sanitation_12_0_self_assessor_2 = data.hygiene_and_sanitation_12_0_self_assessor_2;
				$scope.hygiene_and_sanitation_12_1_self_assessor_2 = data.hygiene_and_sanitation_12_1_self_assessor_2;
				$scope.hygiene_and_sanitation_12_2_self_assessor_2 = data.hygiene_and_sanitation_12_2_self_assessor_2;
				$scope.hygiene_and_sanitation_12_3_self_assessor_2 = data.hygiene_and_sanitation_12_2_self_assessor_2;
				$scope.hygiene_and_sanitation_12_4_self_assessor_2 = data.hygiene_and_sanitation_12_2_self_assessor_2;
				$scope.hygiene_and_sanitation_12_5_self_assessor_2 = data.hygiene_and_sanitation_12_2_self_assessor_2;
				$scope.hygiene_and_sanitation_12_6_self_assessor_2 = data.hygiene_and_sanitation_12_6_self_assessor_2;
				$scope.hygiene_and_sanitation_12_7_self_assessor_2 = data.hygiene_and_sanitation_12_7_self_assessor_2;
				//Assessor 3
				$scope.hygiene_and_sanitation_12_0_self_assessor_3 = data.hygiene_and_sanitation_12_0_self_assessor_3;
				$scope.hygiene_and_sanitation_12_1_self_assessor_3 = data.hygiene_and_sanitation_12_1_self_assessor_3;
				$scope.hygiene_and_sanitation_12_2_self_assessor_3 = data.hygiene_and_sanitation_12_2_self_assessor_3;
				$scope.hygiene_and_sanitation_12_3_self_assessor_3 = data.hygiene_and_sanitation_12_2_self_assessor_3;
				$scope.hygiene_and_sanitation_12_4_self_assessor_3 = data.hygiene_and_sanitation_12_2_self_assessor_3;
				$scope.hygiene_and_sanitation_12_5_self_assessor_3 = data.hygiene_and_sanitation_12_2_self_assessor_3;
				$scope.hygiene_and_sanitation_12_6_self_assessor_3 = data.hygiene_and_sanitation_12_6_self_assessor_3;
				$scope.hygiene_and_sanitation_12_7_self_assessor_3 = data.hygiene_and_sanitation_12_7_self_assessor_3;
				//hygiene_and_sanitation and Subsections Average
				$scope.hygiene_and_sanitation_12_0_average = ((data.hygiene_and_sanitation_12_0_self_assessor_1 + data.hygiene_and_sanitation_12_0_self_assessor_2 + data.hygiene_and_sanitation_12_0_self_assessor_3)/3);				
				$scope.hygiene_and_sanitation_12_1_average = ((data.hygiene_and_sanitation_12_1_self_assessor_1 + data.hygiene_and_sanitation_12_1_self_assessor_2 + data.hygiene_and_sanitation_12_1_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_2_average = ((data.hygiene_and_sanitation_12_2_self_assessor_1 + data.hygiene_and_sanitation_12_2_self_assessor_2 + data.hygiene_and_sanitation_12_2_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_3_average = ((data.hygiene_and_sanitation_12_3_self_assessor_1 + data.hygiene_and_sanitation_12_3_self_assessor_2 + data.hygiene_and_sanitation_12_3_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_4_average = ((data.hygiene_and_sanitation_12_4_self_assessor_1 + data.hygiene_and_sanitation_12_4_self_assessor_2 + data.hygiene_and_sanitation_12_4_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_5_average = ((data.hygiene_and_sanitation_12_5_self_assessor_1 + data.hygiene_and_sanitation_12_5_self_assessor_2 + data.hygiene_and_sanitation_12_5_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_6_average = ((data.hygiene_and_sanitation_12_6_self_assessor_1 + data.hygiene_and_sanitation_12_6_self_assessor_2 + data.hygiene_and_sanitation_12_6_self_assessor_3)/3);
				$scope.hygiene_and_sanitation_12_7_average = ((data.hygiene_and_sanitation_12_7_self_assessor_1 + data.hygiene_and_sanitation_12_7_self_assessor_2 + data.hygiene_and_sanitation_12_7_self_assessor_3)/3);
				//hygiene_and_sanitation Reconcilliation
				$scope.hygiene_and_sanitation_not_reconciled = false;
					//12.1
					$scope.hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.hygiene_and_sanitation_12_1_self_assessor_1 - $scope.hygiene_and_sanitation_12_1_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_1_self_assessor_1 - $scope.hygiene_and_sanitation_12_1_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_1_self_assessor_2 - $scope.hygiene_and_sanitation_12_1_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12.2
					$scope.hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_2_self_assessor_1 - $scope.hygiene_and_sanitation_12_2_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_2_self_assessor_1 - $scope.hygiene_and_sanitation_12_2_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12_3
					$scope.hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_3_self_assessor_1 - $scope.hygiene_and_sanitation_12_3_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_3_self_assessor_1 - $scope.hygiene_and_sanitation_12_3_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_3_self_assessor_2 - $scope.hygiene_and_sanitation_12_3_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12_4
					$scope.hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_4_self_assessor_1 - $scope.hygiene_and_sanitation_12_4_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_4_self_assessor_1 - $scope.hygiene_and_sanitation_12_4_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_4_self_assessor_2 - $scope.hygiene_and_sanitation_12_4_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12_5
					$scope.hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_5_self_assessor_1 - $scope.hygiene_and_sanitation_12_5_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_5_self_assessor_1 - $scope.hygiene_and_sanitation_12_5_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_5_self_assessor_2 - $scope.hygiene_and_sanitation_12_5_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12_6
					$scope.hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_6_self_assessor_1 - $scope.hygiene_and_sanitation_12_6_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_6_self_assessor_1 - $scope.hygiene_and_sanitation_12_6_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_6_self_assessor_2 - $scope.hygiene_and_sanitation_12_6_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					//12_7
					$scope.hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = false;
					$scope.hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.hygiene_and_sanitation_12_7_self_assessor_1 - $scope.hygiene_and_sanitation_12_7_self_assessor_2) > reconciliation_line){ $scope.hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_7_self_assessor_1 - $scope.hygiene_and_sanitation_12_7_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = true; $scope.hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
					if (Math.abs($scope.hygiene_and_sanitation_12_7_self_assessor_2 - $scope.hygiene_and_sanitation_12_7_self_assessor_3) > reconciliation_line){ $scope.hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = true; $scope.hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = true; $scope.hygiene_and_sanitation_not_reconciled = true; }
			//SAFETY AND SECURITY
					//Single Assessor
					$scope.safety_and_security_13_0_self_self = data.safety_and_security_13_0_self_self;
					$scope.safety_and_security_13_1_self_self = data.safety_and_security_13_1_self_self;
					$scope.safety_and_security_13_2_self_self = data.safety_and_security_13_2_self_self;
					$scope.safety_and_security_13_3_self_self = data.safety_and_security_13_3_self_self;
					$scope.safety_and_security_13_4_self_self = data.safety_and_security_13_4_self_self;
					$scope.safety_and_security_13_5_self_self = data.safety_and_security_13_5_self_self;
					//Assessor 1
					$scope.safety_and_security_13_0_self_assessor_1 = data.safety_and_security_13_0_self_assessor_1;
					$scope.safety_and_security_13_1_self_assessor_1 = data.safety_and_security_13_1_self_assessor_1;
					$scope.safety_and_security_13_2_self_assessor_1 = data.safety_and_security_13_2_self_assessor_1;
					$scope.safety_and_security_13_3_self_assessor_1 = data.safety_and_security_13_3_self_assessor_1;
					$scope.safety_and_security_13_4_self_assessor_1 = data.safety_and_security_13_4_self_assessor_1;
					$scope.safety_and_security_13_5_self_assessor_1 = data.safety_and_security_13_5_self_assessor_1;
					//Assessor 2
					$scope.safety_and_security_13_0_self_assessor_2 = data.safety_and_security_13_0_self_assessor_2;
					$scope.safety_and_security_13_1_self_assessor_2 = data.safety_and_security_13_1_self_assessor_2;
					$scope.safety_and_security_13_2_self_assessor_2 = data.safety_and_security_13_2_self_assessor_2;
					$scope.safety_and_security_13_3_self_assessor_2 = data.safety_and_security_13_3_self_assessor_2;
					$scope.safety_and_security_13_4_self_assessor_2 = data.safety_and_security_13_4_self_assessor_2;
					$scope.safety_and_security_13_5_self_assessor_2 = data.safety_and_security_13_5_self_assessor_2;
					//Assessor 3
					$scope.safety_and_security_13_0_self_assessor_3 = data.safety_and_security_13_0_self_assessor_3;
					$scope.safety_and_security_13_1_self_assessor_3 = data.safety_and_security_13_1_self_assessor_3;
					$scope.safety_and_security_13_2_self_assessor_3 = data.safety_and_security_13_2_self_assessor_3;
					$scope.safety_and_security_13_3_self_assessor_3 = data.safety_and_security_13_3_self_assessor_3;
					$scope.safety_and_security_13_4_self_assessor_3 = data.safety_and_security_13_4_self_assessor_3;
					$scope.safety_and_security_13_5_self_assessor_3 = data.safety_and_security_13_5_self_assessor_3;
					//safety_and_security and Subsections Average
					$scope.safety_and_security_13_0_average = ((data.safety_and_security_13_0_self_assessor_1 + data.safety_and_security_13_0_self_assessor_2 + data.safety_and_security_13_0_self_assessor_3)/3);				
					$scope.safety_and_security_13_1_average = ((data.safety_and_security_13_1_self_assessor_1 + data.safety_and_security_13_1_self_assessor_2 + data.safety_and_security_13_1_self_assessor_3)/3);
					$scope.safety_and_security_13_2_average = ((data.safety_and_security_13_2_self_assessor_1 + data.safety_and_security_13_2_self_assessor_2 + data.safety_and_security_13_2_self_assessor_3)/3);
					$scope.safety_and_security_13_3_average = ((data.safety_and_security_13_3_self_assessor_1 + data.safety_and_security_13_3_self_assessor_2 + data.safety_and_security_13_3_self_assessor_3)/3);
					$scope.safety_and_security_13_4_average = ((data.safety_and_security_13_4_self_assessor_1 + data.safety_and_security_13_4_self_assessor_2 + data.safety_and_security_13_4_self_assessor_3)/3);
					$scope.safety_and_security_13_5_average = ((data.safety_and_security_13_5_self_assessor_1 + data.safety_and_security_13_5_self_assessor_2 + data.safety_and_security_13_5_self_assessor_3)/3);
					//safety_and_security Reconcilliation
					$scope.safety_and_security_not_reconciled = false;
					//13.1
					$scope.safety_and_security_13_1_self_assessor_1_not_reconciled = false;
					$scope.safety_and_security_13_1_self_assessor_2_not_reconciled = false;
					$scope.safety_and_security_13_1_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.safety_and_security_13_1_self_assessor_1 - $scope.safety_and_security_13_1_self_assessor_2) > reconciliation_line){ $scope.safety_and_security_13_1_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_1_self_assessor_2_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_1_self_assessor_1 - $scope.safety_and_security_13_1_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_1_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_1_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_1_self_assessor_2 - $scope.safety_and_security_13_1_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_1_self_assessor_2_not_reconciled = true; $scope.safety_and_security_13_1_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					//13.2
					$scope.safety_and_security_13_2_self_assessor_1_not_reconciled = false;
					$scope.safety_and_security_13_2_self_assessor_2_not_reconciled = false;
					$scope.safety_and_security_13_2_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.safety_and_security_13_2_self_assessor_1 - $scope.safety_and_security_13_2_self_assessor_2) > reconciliation_line){ $scope.safety_and_security_13_2_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_2_self_assessor_2_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_2_self_assessor_1 - $scope.safety_and_security_13_2_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_2_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_2_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_2_self_assessor_2 - $scope.safety_and_security_13_2_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_2_self_assessor_2_not_reconciled = true; $scope.safety_and_security_13_2_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					//13.3
					$scope.safety_and_security_13_3_self_assessor_1_not_reconciled = false;
					$scope.safety_and_security_13_3_self_assessor_2_not_reconciled = false;
					$scope.safety_and_security_13_3_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.safety_and_security_13_3_self_assessor_1 - $scope.safety_and_security_13_3_self_assessor_2) > reconciliation_line){ $scope.safety_and_security_13_3_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_3_self_assessor_2_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_3_self_assessor_1 - $scope.safety_and_security_13_3_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_3_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_3_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_3_self_assessor_2 - $scope.safety_and_security_13_3_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_3_self_assessor_2_not_reconciled = true; $scope.safety_and_security_13_3_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					//13.4
					$scope.safety_and_security_13_4_self_assessor_1_not_reconciled = false;
					$scope.safety_and_security_13_4_self_assessor_2_not_reconciled = false;
					$scope.safety_and_security_13_4_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.safety_and_security_13_4_self_assessor_1 - $scope.safety_and_security_13_4_self_assessor_2) > reconciliation_line){ $scope.safety_and_security_13_4_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_4_self_assessor_2_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_4_self_assessor_1 - $scope.safety_and_security_13_4_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_4_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_4_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_4_self_assessor_2 - $scope.safety_and_security_13_4_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_4_self_assessor_2_not_reconciled = true; $scope.safety_and_security_13_4_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					//13.5
					$scope.safety_and_security_13_5_self_assessor_1_not_reconciled = false;
					$scope.safety_and_security_13_5_self_assessor_2_not_reconciled = false;
					$scope.safety_and_security_13_5_self_assessor_3_not_reconciled = false;					
					if (Math.abs($scope.safety_and_security_13_5_self_assessor_1 - $scope.safety_and_security_13_5_self_assessor_2) > reconciliation_line){ $scope.safety_and_security_13_5_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_5_self_assessor_2_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_5_self_assessor_1 - $scope.safety_and_security_13_5_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_5_self_assessor_1_not_reconciled = true; $scope.safety_and_security_13_5_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.safety_and_security_13_5_self_assessor_2 - $scope.safety_and_security_13_5_self_assessor_3) > reconciliation_line){ $scope.safety_and_security_13_5_self_assessor_2_not_reconciled = true; $scope.safety_and_security_13_5_self_assessor_3_not_reconciled = true; $scope.safety_and_security_not_reconciled = true; }
			//SUNDRY SERVICES
					//Single Assessor
					$scope.sundry_services_14_0_self_self = data.sundry_services_14_0_self_self;
					$scope.sundry_services_14_1_self_self = data.sundry_services_14_1_self_self;
					$scope.sundry_services_14_2_self_self = data.sundry_services_14_2_self_self;
					$scope.sundry_services_14_3_self_self = data.sundry_services_14_3_self_self;
					$scope.sundry_services_14_4_self_self = data.sundry_services_14_4_self_self;
					$scope.sundry_services_14_5_self_self = data.sundry_services_14_5_self_self;
					//Assessor 1
					$scope.sundry_services_14_0_self_assessor_1 = data.sundry_services_14_0_self_assessor_1;
					$scope.sundry_services_14_1_self_assessor_1 = data.sundry_services_14_1_self_assessor_1;
					$scope.sundry_services_14_2_self_assessor_1 = data.sundry_services_14_2_self_assessor_1;
					$scope.sundry_services_14_3_self_assessor_1 = data.sundry_services_14_3_self_assessor_1;
					$scope.sundry_services_14_4_self_assessor_1 = data.sundry_services_14_4_self_assessor_1;
					$scope.sundry_services_14_5_self_assessor_1 = data.sundry_services_14_5_self_assessor_1;
					//Assessor 2
					$scope.sundry_services_14_0_self_assessor_2 = data.sundry_services_14_0_self_assessor_2;
					$scope.sundry_services_14_1_self_assessor_2 = data.sundry_services_14_1_self_assessor_2;
					$scope.sundry_services_14_2_self_assessor_2 = data.sundry_services_14_2_self_assessor_2;
					$scope.sundry_services_14_3_self_assessor_2 = data.sundry_services_14_3_self_assessor_2;
					$scope.sundry_services_14_4_self_assessor_2 = data.sundry_services_14_4_self_assessor_2;
					$scope.sundry_services_14_5_self_assessor_2 = data.sundry_services_14_5_self_assessor_2;
					//Assessor 3
					$scope.sundry_services_14_0_self_assessor_3 = data.sundry_services_14_0_self_assessor_3;
					$scope.sundry_services_14_1_self_assessor_3 = data.sundry_services_14_1_self_assessor_3;
					$scope.sundry_services_14_2_self_assessor_3 = data.sundry_services_14_2_self_assessor_3;
					$scope.sundry_services_14_3_self_assessor_3 = data.sundry_services_14_3_self_assessor_3;
					$scope.sundry_services_14_4_self_assessor_3 = data.sundry_services_14_4_self_assessor_3;
					$scope.sundry_services_14_5_self_assessor_3 = data.sundry_services_14_5_self_assessor_3;
					//sundry_services and subsections Average
					$scope.sundry_services_14_0_average = ((data.sundry_services_14_0_self_assessor_1 + data.sundry_services_14_0_self_assessor_2 + data.sundry_services_14_0_self_assessor_3)/3);				
					$scope.sundry_services_14_1_average = ((data.sundry_services_14_1_self_assessor_1 + data.sundry_services_14_1_self_assessor_2 + data.sundry_services_14_1_self_assessor_3)/3);
					$scope.sundry_services_14_2_average = ((data.sundry_services_14_2_self_assessor_1 + data.sundry_services_14_2_self_assessor_2 + data.sundry_services_14_2_self_assessor_3)/3);
					$scope.sundry_services_14_3_average = ((data.sundry_services_14_3_self_assessor_1 + data.sundry_services_14_3_self_assessor_2 + data.sundry_services_14_3_self_assessor_3)/3);
					$scope.sundry_services_14_4_average = ((data.sundry_services_14_4_self_assessor_1 + data.sundry_services_14_4_self_assessor_2 + data.sundry_services_14_4_self_assessor_3)/3);
					$scope.sundry_services_14_5_average = ((data.sundry_services_14_5_self_assessor_1 + data.sundry_services_14_5_self_assessor_2 + data.sundry_services_14_5_self_assessor_3)/3);
					//sundry_services reconcilliation
					$scope.sundry_services_not_reconciled = false;
						//14.1
						$scope.sundry_services_14_1_self_assessor_1_not_reconciled = false;
						$scope.sundry_services_14_1_self_assessor_2_not_reconciled = false;
						$scope.sundry_services_14_1_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.sundry_services_14_1_self_assessor_1 - $scope.sundry_services_14_1_self_assessor_2) > reconciliation_line){ $scope.sundry_services_14_1_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_1_self_assessor_2_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_1_self_assessor_1 - $scope.sundry_services_14_1_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_1_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_1_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_1_self_assessor_2 - $scope.sundry_services_14_1_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_1_self_assessor_2_not_reconciled = true; $scope.sundry_services_14_1_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						//14.2
						$scope.sundry_services_14_2_self_assessor_1_not_reconciled = false;
						$scope.sundry_services_14_2_self_assessor_2_not_reconciled = false;
						$scope.sundry_services_14_2_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.sundry_services_14_2_self_assessor_1 - $scope.sundry_services_14_2_self_assessor_2) > reconciliation_line){ $scope.sundry_services_14_2_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_2_self_assessor_2_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_2_self_assessor_1 - $scope.sundry_services_14_2_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_2_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_2_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_2_self_assessor_2 - $scope.sundry_services_14_2_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_2_self_assessor_2_not_reconciled = true; $scope.sundry_services_14_2_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						//14.3
						$scope.sundry_services_14_3_self_assessor_1_not_reconciled = false;
						$scope.sundry_services_14_3_self_assessor_2_not_reconciled = false;
						$scope.sundry_services_14_3_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.sundry_services_14_3_self_assessor_1 - $scope.sundry_services_14_3_self_assessor_2) > reconciliation_line){ $scope.sundry_services_14_3_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_3_self_assessor_2_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_3_self_assessor_1 - $scope.sundry_services_14_3_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_3_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_3_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_3_self_assessor_2 - $scope.sundry_services_14_3_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_3_self_assessor_2_not_reconciled = true; $scope.sundry_services_14_3_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						//14.4
						$scope.sundry_services_14_4_self_assessor_1_not_reconciled = false;
						$scope.sundry_services_14_4_self_assessor_2_not_reconciled = false;
						$scope.sundry_services_14_4_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.sundry_services_14_4_self_assessor_1 - $scope.sundry_services_14_4_self_assessor_2) > reconciliation_line){ $scope.sundry_services_14_4_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_4_self_assessor_2_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_4_self_assessor_1 - $scope.sundry_services_14_4_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_4_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_4_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_4_self_assessor_2 - $scope.sundry_services_14_4_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_4_self_assessor_2_not_reconciled = true; $scope.sundry_services_14_4_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						//14.5
						$scope.sundry_services_14_5_self_assessor_1_not_reconciled = false;
						$scope.sundry_services_14_5_self_assessor_2_not_reconciled = false;
						$scope.sundry_services_14_5_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.sundry_services_14_5_self_assessor_1 - $scope.sundry_services_14_5_self_assessor_2) > reconciliation_line){ $scope.sundry_services_14_5_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_5_self_assessor_2_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_5_self_assessor_1 - $scope.sundry_services_14_5_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_5_self_assessor_1_not_reconciled = true; $scope.sundry_services_14_5_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }
						if (Math.abs($scope.sundry_services_14_5_self_assessor_2 - $scope.sundry_services_14_5_self_assessor_3) > reconciliation_line){ $scope.sundry_services_14_5_self_assessor_2_not_reconciled = true; $scope.sundry_services_14_5_self_assessor_3_not_reconciled = true; $scope.sundry_services_not_reconciled = true; }

				//HUMAN RESOURCES 15.0
						//Single Assessor
						$scope.human_resources_15_0_self_self = data.human_resources_15_0_self_self;
						$scope.human_resources_15_1_self_self = data.human_resources_15_1_self_self;
						$scope.human_resources_15_2_self_self = data.human_resources_15_2_self_self;
						$scope.human_resources_15_3_self_self = data.human_resources_15_3_self_self;
						$scope.human_resources_15_4_self_self = data.human_resources_15_4_self_self;
						$scope.human_resources_15_5_self_self = data.human_resources_15_5_self_self;
						$scope.human_resources_15_6_self_self = data.human_resources_15_6_self_self;
						$scope.human_resources_15_7_self_self = data.human_resources_15_7_self_self;
						$scope.human_resources_15_8_self_self = data.human_resources_15_8_self_self;
						$scope.human_resources_15_9_self_self = data.human_resources_15_9_self_self;
						//Assessor 1
						$scope.human_resources_15_0_self_assessor_1 = data.human_resources_15_0_self_assessor_1;
						$scope.human_resources_15_1_self_assessor_1 = data.human_resources_15_1_self_assessor_1;
						$scope.human_resources_15_2_self_assessor_1 = data.human_resources_15_2_self_assessor_1;
						$scope.human_resources_15_3_self_assessor_1 = data.human_resources_15_3_self_assessor_1;
						$scope.human_resources_15_4_self_assessor_1 = data.human_resources_15_4_self_assessor_1;
						$scope.human_resources_15_5_self_assessor_1 = data.human_resources_15_5_self_assessor_1;
						$scope.human_resources_15_6_self_assessor_1 = data.human_resources_15_6_self_assessor_1;
						$scope.human_resources_15_7_self_assessor_1 = data.human_resources_15_7_self_assessor_1;
						$scope.human_resources_15_8_self_assessor_1 = data.human_resources_15_8_self_assessor_1;
						$scope.human_resources_15_9_self_assessor_1 = data.human_resources_15_9_self_assessor_1;
						//Assessor 2
						$scope.human_resources_15_0_self_assessor_2 = data.human_resources_15_0_self_assessor_2;
						$scope.human_resources_15_1_self_assessor_2 = data.human_resources_15_1_self_assessor_2;
						$scope.human_resources_15_2_self_assessor_2 = data.human_resources_15_2_self_assessor_2;
						$scope.human_resources_15_3_self_assessor_2 = data.human_resources_15_3_self_assessor_2;
						$scope.human_resources_15_4_self_assessor_2 = data.human_resources_15_4_self_assessor_2;
						$scope.human_resources_15_5_self_assessor_2 = data.human_resources_15_5_self_assessor_2;
						$scope.human_resources_15_6_self_assessor_2 = data.human_resources_15_6_self_assessor_2;
						$scope.human_resources_15_7_self_assessor_2 = data.human_resources_15_7_self_assessor_2;
						$scope.human_resources_15_8_self_assessor_2 = data.human_resources_15_8_self_assessor_2;
						$scope.human_resources_15_9_self_assessor_2 = data.human_resources_15_9_self_assessor_2;
						//Assessor 3
						$scope.human_resources_15_0_self_assessor_3 = data.human_resources_15_0_self_assessor_3;
						$scope.human_resources_15_1_self_assessor_3 = data.human_resources_15_1_self_assessor_3;
						$scope.human_resources_15_2_self_assessor_3 = data.human_resources_15_2_self_assessor_3;
						$scope.human_resources_15_3_self_assessor_3 = data.human_resources_15_3_self_assessor_3;
						$scope.human_resources_15_4_self_assessor_3 = data.human_resources_15_4_self_assessor_3;
						$scope.human_resources_15_5_self_assessor_3 = data.human_resources_15_5_self_assessor_3;
						$scope.human_resources_15_6_self_assessor_3 = data.human_resources_15_6_self_assessor_3;
						$scope.human_resources_15_7_self_assessor_3 = data.human_resources_15_7_self_assessor_3;
						$scope.human_resources_15_8_self_assessor_3 = data.human_resources_15_8_self_assessor_3;
						$scope.human_resources_15_9_self_assessor_3 = data.human_resources_15_9_self_assessor_3;
						//human_resources and Subsections Average
						$scope.human_resources_15_0_average = ((data.human_resources_15_0_self_assessor_1 + data.human_resources_15_0_self_assessor_2 + data.human_resources_15_0_self_assessor_3)/3);
						$scope.human_resources_15_1_average = ((data.human_resources_15_1_self_assessor_1 + data.human_resources_15_1_self_assessor_2 + data.human_resources_15_1_self_assessor_3)/3);
						$scope.human_resources_15_2_average = ((data.human_resources_15_2_self_assessor_1 + data.human_resources_15_2_self_assessor_2 + data.human_resources_15_2_self_assessor_3)/3);
						$scope.human_resources_15_3_average = ((data.human_resources_15_3_self_assessor_1 + data.human_resources_15_3_self_assessor_2 + data.human_resources_15_3_self_assessor_3)/3);
						$scope.human_resources_15_4_average = ((data.human_resources_15_4_self_assessor_1 + data.human_resources_15_4_self_assessor_2 + data.human_resources_15_4_self_assessor_3)/3);
						$scope.human_resources_15_5_average = ((data.human_resources_15_5_self_assessor_1 + data.human_resources_15_5_self_assessor_2 + data.human_resources_15_5_self_assessor_3)/3);
						$scope.human_resources_15_6_average = ((data.human_resources_15_6_self_assessor_1 + data.human_resources_15_6_self_assessor_2 + data.human_resources_15_6_self_assessor_3)/3);
						$scope.human_resources_15_7_average = ((data.human_resources_15_7_self_assessor_1 + data.human_resources_15_7_self_assessor_2 + data.human_resources_15_7_self_assessor_3)/3);
						$scope.human_resources_15_8_average = ((data.human_resources_15_8_self_assessor_1 + data.human_resources_15_8_self_assessor_2 + data.human_resources_15_8_self_assessor_3)/3);
						$scope.human_resources_15_9_average = ((data.human_resources_15_9_self_assessor_1 + data.human_resources_15_9_self_assessor_2 + data.human_resources_15_9_self_assessor_3)/3);
						//human_resources Reconcilliation
						$scope.human_resources_not_reconciled = false;
						//15.1
						$scope.human_resources_15_1_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_1_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_1_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_1_self_assessor_1 - $scope.human_resources_15_1_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_1_self_assessor_1_not_reconciled = true; $scope.human_resources_15_1_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_1_self_assessor_1 - $scope.human_resources_15_1_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_1_self_assessor_1_not_reconciled = true; $scope.human_resources_15_1_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_1_self_assessor_2 - $scope.human_resources_15_1_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_1_self_assessor_2_not_reconciled = true; $scope.human_resources_15_1_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.2
						$scope.human_resources_15_2_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_2_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_2_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_2_self_assessor_1 - $scope.human_resources_15_2_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_2_self_assessor_1_not_reconciled = true; $scope.human_resources_15_2_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_2_self_assessor_1 - $scope.human_resources_15_2_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_2_self_assessor_1_not_reconciled = true; $scope.human_resources_15_2_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_2_self_assessor_2 - $scope.human_resources_15_2_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_2_self_assessor_2_not_reconciled = true; $scope.human_resources_15_2_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.3
						$scope.human_resources_15_3_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_3_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_3_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_3_self_assessor_1 - $scope.human_resources_15_3_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_3_self_assessor_1_not_reconciled = true; $scope.human_resources_15_3_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_3_self_assessor_1 - $scope.human_resources_15_3_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_3_self_assessor_1_not_reconciled = true; $scope.human_resources_15_3_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_3_self_assessor_2 - $scope.human_resources_15_3_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_3_self_assessor_2_not_reconciled = true; $scope.human_resources_15_3_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.4
						$scope.human_resources_15_4_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_4_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_4_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_4_self_assessor_1 - $scope.human_resources_15_4_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_4_self_assessor_1_not_reconciled = true; $scope.human_resources_15_4_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_4_self_assessor_1 - $scope.human_resources_15_4_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_4_self_assessor_1_not_reconciled = true; $scope.human_resources_15_4_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_4_self_assessor_2 - $scope.human_resources_15_4_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_4_self_assessor_2_not_reconciled = true; $scope.human_resources_15_4_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.5
						$scope.human_resources_15_5_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_5_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_5_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_5_self_assessor_1 - $scope.human_resources_15_5_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_5_self_assessor_1_not_reconciled = true; $scope.human_resources_15_5_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_5_self_assessor_1 - $scope.human_resources_15_5_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_5_self_assessor_1_not_reconciled = true; $scope.human_resources_15_5_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_5_self_assessor_2 - $scope.human_resources_15_5_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_5_self_assessor_2_not_reconciled = true; $scope.human_resources_15_5_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.6
						$scope.human_resources_15_6_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_6_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_6_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_6_self_assessor_1 - $scope.human_resources_15_6_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_6_self_assessor_1_not_reconciled = true; $scope.human_resources_15_6_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_6_self_assessor_1 - $scope.human_resources_15_6_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_6_self_assessor_1_not_reconciled = true; $scope.human_resources_15_6_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_6_self_assessor_2 - $scope.human_resources_15_6_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_6_self_assessor_2_not_reconciled = true; $scope.human_resources_15_6_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.7
						$scope.human_resources_15_7_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_7_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_7_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_7_self_assessor_1 - $scope.human_resources_15_7_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_7_self_assessor_1_not_reconciled = true; $scope.human_resources_15_7_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_7_self_assessor_1 - $scope.human_resources_15_7_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_7_self_assessor_1_not_reconciled = true; $scope.human_resources_15_7_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_7_self_assessor_2 - $scope.human_resources_15_7_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_7_self_assessor_2_not_reconciled = true; $scope.human_resources_15_7_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.8
						$scope.human_resources_15_8_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_8_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_8_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_8_self_assessor_1 - $scope.human_resources_15_8_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_8_self_assessor_1_not_reconciled = true; $scope.human_resources_15_8_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_8_self_assessor_1 - $scope.human_resources_15_8_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_8_self_assessor_1_not_reconciled = true; $scope.human_resources_15_8_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_8_self_assessor_2 - $scope.human_resources_15_8_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_8_self_assessor_2_not_reconciled = true; $scope.human_resources_15_8_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						//15.9
						$scope.human_resources_15_9_self_assessor_1_not_reconciled = false;
						$scope.human_resources_15_9_self_assessor_2_not_reconciled = false;
						$scope.human_resources_15_9_self_assessor_3_not_reconciled = false;					
						if (Math.abs($scope.human_resources_15_9_self_assessor_1 - $scope.human_resources_15_9_self_assessor_2) > reconciliation_line){ $scope.human_resources_15_9_self_assessor_1_not_reconciled = true; $scope.human_resources_15_9_self_assessor_2_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_9_self_assessor_1 - $scope.human_resources_15_9_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_9_self_assessor_1_not_reconciled = true; $scope.human_resources_15_9_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
						if (Math.abs($scope.human_resources_15_9_self_assessor_2 - $scope.human_resources_15_9_self_assessor_3) > reconciliation_line){ $scope.human_resources_15_9_self_assessor_2_not_reconciled = true; $scope.human_resources_15_9_self_assessor_3_not_reconciled = true; $scope.human_resources_not_reconciled = true; }
				//GENERAL
						//Single Assessor
						$scope.general_16_0_self_self = data.general_16_0_self_self;
						$scope.general_16_1_self_self = data.general_16_1_self_self;
						$scope.general_16_2_self_self = data.general_16_2_self_self;
						$scope.general_16_3_self_self = data.general_16_3_self_self;
						$scope.general_16_4_self_self = data.general_16_4_self_self;
						$scope.general_16_5_self_self = data.general_16_5_self_self;
						$scope.general_16_6_self_self = data.general_16_6_self_self;
						$scope.general_16_7_self_self = data.general_16_7_self_self;
						$scope.general_16_8_self_self = data.general_16_8_self_self;
						$scope.general_16_9_self_self = data.general_16_9_self_self;
						$scope.general_16_10_self_self = data.general_16_10_self_self;
						$scope.general_16_11_self_self = data.general_16_11_self_self;
						$scope.general_16_12_self_self = data.general_16_12_self_self;
						$scope.general_16_13_self_self = data.general_16_13_self_self;
						//Assessor 1
						$scope.general_16_0_self_assessor_1 = data.general_16_0_self_assessor_1;
						$scope.general_16_1_self_assessor_1 = data.general_16_1_self_assessor_1;
						$scope.general_16_2_self_assessor_1 = data.general_16_2_self_assessor_1;
						$scope.general_16_3_self_assessor_1 = data.general_16_3_self_assessor_1;
						$scope.general_16_4_self_assessor_1 = data.general_16_4_self_assessor_1;
						$scope.general_16_5_self_assessor_1 = data.general_16_5_self_assessor_1;
						$scope.general_16_6_self_assessor_1 = data.general_16_6_self_assessor_1;
						$scope.general_16_7_self_assessor_1 = data.general_16_7_self_assessor_1;
						$scope.general_16_8_self_assessor_1 = data.general_16_8_self_assessor_1;
						$scope.general_16_9_self_assessor_1 = data.general_16_9_self_assessor_1;
						$scope.general_16_10_self_assessor_1 = data.general_16_10_self_assessor_1;
						$scope.general_16_11_self_assessor_1 = data.general_16_11_self_assessor_1;
						$scope.general_16_12_self_assessor_1 = data.general_16_12_self_assessor_1;
						$scope.general_16_13_self_assessor_1 = data.general_16_13_self_assessor_1;
						//Assessor 2
						$scope.general_16_0_self_assessor_2 = data.general_16_0_self_assessor_2;
						$scope.general_16_1_self_assessor_2 = data.general_16_1_self_assessor_2;
						$scope.general_16_2_self_assessor_2 = data.general_16_2_self_assessor_2;
						$scope.general_16_3_self_assessor_2 = data.general_16_3_self_assessor_2;
						$scope.general_16_4_self_assessor_2 = data.general_16_4_self_assessor_2;
						$scope.general_16_5_self_assessor_2 = data.general_16_5_self_assessor_2;
						$scope.general_16_6_self_assessor_2 = data.general_16_6_self_assessor_2;
						$scope.general_16_7_self_assessor_2 = data.general_16_7_self_assessor_2;
						$scope.general_16_8_self_assessor_2 = data.general_16_8_self_assessor_2;
						$scope.general_16_9_self_assessor_2 = data.general_16_9_self_assessor_2;
						$scope.general_16_10_self_assessor_2 = data.general_16_10_self_assessor_2;
						$scope.general_16_11_self_assessor_2 = data.general_16_11_self_assessor_2;
						$scope.general_16_12_self_assessor_2 = data.general_16_12_self_assessor_2;
						$scope.general_16_13_self_assessor_2 = data.general_16_13_self_assessor_2;
						//Assessor 3
						$scope.general_16_0_self_assessor_3 = data.general_16_0_self_assessor_3;
						$scope.general_16_1_self_assessor_3 = data.general_16_1_self_assessor_3;
						$scope.general_16_2_self_assessor_3 = data.general_16_2_self_assessor_3;
						$scope.general_16_3_self_assessor_3 = data.general_16_3_self_assessor_3;
						$scope.general_16_4_self_assessor_3 = data.general_16_4_self_assessor_3;
						$scope.general_16_5_self_assessor_3 = data.general_16_5_self_assessor_3;
						$scope.general_16_6_self_assessor_3 = data.general_16_6_self_assessor_3;
						$scope.general_16_7_self_assessor_3 = data.general_16_7_self_assessor_3;
						$scope.general_16_8_self_assessor_3 = data.general_16_8_self_assessor_3;
						$scope.general_16_9_self_assessor_3 = data.general_16_9_self_assessor_3;
						$scope.general_16_10_self_assessor_3 = data.general_16_10_self_assessor_3;
						$scope.general_16_11_self_assessor_3 = data.general_16_11_self_assessor_3;
						$scope.general_16_12_self_assessor_3 = data.general_16_12_self_assessor_3;
						$scope.general_16_13_self_assessor_3 = data.general_16_13_self_assessor_3;
						//general and subsections Average
						$scope.general_16_0_average = ((data.general_16_0_self_assessor_1 + data.general_16_0_self_assessor_2 + data.general_16_0_self_assessor_3)/3);
						$scope.general_16_1_average = ((data.general_16_1_self_assessor_1 + data.general_16_1_self_assessor_2 + data.general_16_1_self_assessor_3)/3);
						$scope.general_16_2_average = ((data.general_16_2_self_assessor_1 + data.general_16_2_self_assessor_2 + data.general_16_2_self_assessor_3)/3);
						$scope.general_16_3_average = ((data.general_16_3_self_assessor_1 + data.general_16_3_self_assessor_2 + data.general_16_3_self_assessor_3)/3);
						$scope.general_16_4_average = ((data.general_16_4_self_assessor_1 + data.general_16_4_self_assessor_2 + data.general_16_4_self_assessor_3)/3);
						$scope.general_16_5_average = ((data.general_16_5_self_assessor_1 + data.general_16_5_self_assessor_2 + data.general_16_5_self_assessor_3)/3);
						$scope.general_16_6_average = ((data.general_16_6_self_assessor_1 + data.general_16_6_self_assessor_2 + data.general_16_6_self_assessor_3)/3);
						$scope.general_16_7_average = ((data.general_16_7_self_assessor_1 + data.general_16_7_self_assessor_2 + data.general_16_7_self_assessor_3)/3);
						$scope.general_16_8_average = ((data.general_16_8_self_assessor_1 + data.general_16_8_self_assessor_2 + data.general_16_8_self_assessor_3)/3);
						$scope.general_16_9_average = ((data.general_16_9_self_assessor_1 + data.general_16_9_self_assessor_2 + data.general_16_9_self_assessor_3)/3);
						$scope.general_16_10_average = ((data.general_16_10_self_assessor_1 + data.general_16_10_self_assessor_2 + data.general_16_10_self_assessor_3)/3);
						$scope.general_16_11_average = ((data.general_16_11_self_assessor_1 + data.general_16_11_self_assessor_2 + data.general_16_11_self_assessor_3)/3);
						$scope.general_16_12_average = ((data.general_16_12_self_assessor_1 + data.general_16_12_self_assessor_2 + data.general_16_12_self_assessor_3)/3);
						$scope.general_16_13_average = ((data.general_16_13_self_assessor_1 + data.general_16_13_self_assessor_2 + data.general_16_13_self_assessor_3)/3);
						//general Reconcilliation
						$scope.general_not_reconciled = false;
						//16_1
						$scope.general_16_1_self_assessor_1_not_reconciled = false;
						$scope.general_16_1_self_assessor_2_not_reconciled = false;
						$scope.general_16_1_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_1_self_assessor_1 - $scope.general_16_1_self_assessor_2) > reconciliation_line){ $scope.general_16_1_self_assessor_1_not_reconciled = true; $scope.general_16_1_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_1_self_assessor_1 - $scope.general_16_1_self_assessor_3) > reconciliation_line){ $scope.general_16_1_self_assessor_1_not_reconciled = true; $scope.general_16_1_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_1_self_assessor_2 - $scope.general_16_1_self_assessor_3) > reconciliation_line){ $scope.general_16_1_self_assessor_2_not_reconciled = true; $scope.general_16_1_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_2
						$scope.general_16_2_self_assessor_1_not_reconciled = false;
						$scope.general_16_2_self_assessor_2_not_reconciled = false;
						$scope.general_16_2_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_2_self_assessor_1 - $scope.general_16_2_self_assessor_2) > reconciliation_line){ $scope.general_16_2_self_assessor_1_not_reconciled = true; $scope.general_16_2_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_2_self_assessor_1 - $scope.general_16_2_self_assessor_3) > reconciliation_line){ $scope.general_16_2_self_assessor_1_not_reconciled = true; $scope.general_16_2_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_2_self_assessor_2 - $scope.general_16_2_self_assessor_3) > reconciliation_line){ $scope.general_16_2_self_assessor_2_not_reconciled = true; $scope.general_16_2_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_3
						$scope.general_16_3_self_assessor_1_not_reconciled = false;
						$scope.general_16_3_self_assessor_2_not_reconciled = false;
						$scope.general_16_3_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_3_self_assessor_1 - $scope.general_16_3_self_assessor_2) > reconciliation_line){ $scope.general_16_3_self_assessor_1_not_reconciled = true; $scope.general_16_3_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_3_self_assessor_1 - $scope.general_16_3_self_assessor_3) > reconciliation_line){ $scope.general_16_3_self_assessor_1_not_reconciled = true; $scope.general_16_3_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_3_self_assessor_2 - $scope.general_16_3_self_assessor_3) > reconciliation_line){ $scope.general_16_3_self_assessor_2_not_reconciled = true; $scope.general_16_3_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_4
						$scope.general_16_4_self_assessor_1_not_reconciled = false;
						$scope.general_16_4_self_assessor_2_not_reconciled = false;
						$scope.general_16_4_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_4_self_assessor_1 - $scope.general_16_4_self_assessor_2) > reconciliation_line){ $scope.general_16_4_self_assessor_1_not_reconciled = true; $scope.general_16_4_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_4_self_assessor_1 - $scope.general_16_4_self_assessor_3) > reconciliation_line){ $scope.general_16_4_self_assessor_1_not_reconciled = true; $scope.general_16_4_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_4_self_assessor_2 - $scope.general_16_4_self_assessor_3) > reconciliation_line){ $scope.general_16_4_self_assessor_2_not_reconciled = true; $scope.general_16_4_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_5
						$scope.general_16_5_self_assessor_1_not_reconciled = false;
						$scope.general_16_5_self_assessor_2_not_reconciled = false;
						$scope.general_16_5_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_5_self_assessor_1 - $scope.general_16_5_self_assessor_2) > reconciliation_line){ $scope.general_16_5_self_assessor_1_not_reconciled = true; $scope.general_16_5_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_5_self_assessor_1 - $scope.general_16_5_self_assessor_3) > reconciliation_line){ $scope.general_16_5_self_assessor_1_not_reconciled = true; $scope.general_16_5_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_5_self_assessor_2 - $scope.general_16_5_self_assessor_3) > reconciliation_line){ $scope.general_16_5_self_assessor_2_not_reconciled = true; $scope.general_16_5_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_6
						$scope.general_16_6_self_assessor_1_not_reconciled = false;
						$scope.general_16_6_self_assessor_2_not_reconciled = false;
						$scope.general_16_6_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_6_self_assessor_1 - $scope.general_16_6_self_assessor_2) > reconciliation_line){ $scope.general_16_6_self_assessor_1_not_reconciled = true; $scope.general_16_6_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_6_self_assessor_1 - $scope.general_16_6_self_assessor_3) > reconciliation_line){ $scope.general_16_6_self_assessor_1_not_reconciled = true; $scope.general_16_6_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_6_self_assessor_2 - $scope.general_16_6_self_assessor_3) > reconciliation_line){ $scope.general_16_6_self_assessor_2_not_reconciled = true; $scope.general_16_6_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_7
						$scope.general_16_7_self_assessor_1_not_reconciled = false;
						$scope.general_16_7_self_assessor_2_not_reconciled = false;
						$scope.general_16_7_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_7_self_assessor_1 - $scope.general_16_7_self_assessor_2) > reconciliation_line){ $scope.general_16_7_self_assessor_1_not_reconciled = true; $scope.general_16_7_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_7_self_assessor_1 - $scope.general_16_7_self_assessor_3) > reconciliation_line){ $scope.general_16_7_self_assessor_1_not_reconciled = true; $scope.general_16_7_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_7_self_assessor_2 - $scope.general_16_7_self_assessor_3) > reconciliation_line){ $scope.general_16_7_self_assessor_2_not_reconciled = true; $scope.general_16_7_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_8
						$scope.general_16_9_self_assessor_1_not_reconciled = false;
						$scope.general_16_9_self_assessor_2_not_reconciled = false;
						$scope.general_16_9_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_9_self_assessor_1 - $scope.general_16_9_self_assessor_2) > reconciliation_line){ $scope.general_16_9_self_assessor_1_not_reconciled = true; $scope.general_16_9_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_9_self_assessor_1 - $scope.general_16_9_self_assessor_3) > reconciliation_line){ $scope.general_16_9_self_assessor_1_not_reconciled = true; $scope.general_16_9_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_9_self_assessor_2 - $scope.general_16_9_self_assessor_3) > reconciliation_line){ $scope.general_16_9_self_assessor_2_not_reconciled = true; $scope.general_16_9_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_9
						$scope.general_16_9_self_assessor_1_not_reconciled = false;
						$scope.general_16_9_self_assessor_2_not_reconciled = false;
						$scope.general_16_9_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_9_self_assessor_1 - $scope.general_16_9_self_assessor_2) > reconciliation_line){ $scope.general_16_9_self_assessor_1_not_reconciled = true; $scope.general_16_9_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_9_self_assessor_1 - $scope.general_16_9_self_assessor_3) > reconciliation_line){ $scope.general_16_9_self_assessor_1_not_reconciled = true; $scope.general_16_9_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_9_self_assessor_2 - $scope.general_16_9_self_assessor_3) > reconciliation_line){ $scope.general_16_9_self_assessor_2_not_reconciled = true; $scope.general_16_9_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_10
						$scope.general_16_10_self_assessor_1_not_reconciled = false;
						$scope.general_16_10_self_assessor_2_not_reconciled = false;
						$scope.general_16_10_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_10_self_assessor_1 - $scope.general_16_10_self_assessor_2) > reconciliation_line){ $scope.general_16_10_self_assessor_1_not_reconciled = true; $scope.general_16_10_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_10_self_assessor_1 - $scope.general_16_10_self_assessor_3) > reconciliation_line){ $scope.general_16_10_self_assessor_1_not_reconciled = true; $scope.general_16_10_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_10_self_assessor_2 - $scope.general_16_10_self_assessor_3) > reconciliation_line){ $scope.general_16_10_self_assessor_2_not_reconciled = true; $scope.general_16_10_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_11
						$scope.general_16_11_self_assessor_1_not_reconciled = false;
						$scope.general_16_11_self_assessor_2_not_reconciled = false;
						$scope.general_16_11_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_11_self_assessor_1 - $scope.general_16_11_self_assessor_2) > reconciliation_line){ $scope.general_16_11_self_assessor_1_not_reconciled = true; $scope.general_16_11_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_11_self_assessor_1 - $scope.general_16_11_self_assessor_3) > reconciliation_line){ $scope.general_16_11_self_assessor_1_not_reconciled = true; $scope.general_16_11_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_11_self_assessor_2 - $scope.general_16_11_self_assessor_3) > reconciliation_line){ $scope.general_16_11_self_assessor_2_not_reconciled = true; $scope.general_16_11_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_12
						$scope.general_16_12_self_assessor_1_not_reconciled = false;
						$scope.general_16_12_self_assessor_2_not_reconciled = false;
						$scope.general_16_12_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_12_self_assessor_1 - $scope.general_16_12_self_assessor_2) > reconciliation_line){ $scope.general_16_12_self_assessor_1_not_reconciled = true; $scope.general_16_12_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_12_self_assessor_1 - $scope.general_16_12_self_assessor_3) > reconciliation_line){ $scope.general_16_12_self_assessor_1_not_reconciled = true; $scope.general_16_12_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_12_self_assessor_2 - $scope.general_16_12_self_assessor_3) > reconciliation_line){ $scope.general_16_12_self_assessor_2_not_reconciled = true; $scope.general_16_12_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						//16_13
						$scope.general_16_13_self_assessor_1_not_reconciled = false;
						$scope.general_16_13_self_assessor_2_not_reconciled = false;
						$scope.general_16_13_self_assessor_3_not_reconciled = false;					
						if(Math.abs($scope.general_16_13_self_assessor_1 - $scope.general_16_13_self_assessor_2) > reconciliation_line){ $scope.general_16_13_self_assessor_1_not_reconciled = true; $scope.general_16_13_self_assessor_2_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_13_self_assessor_1 - $scope.general_16_13_self_assessor_3) > reconciliation_line){ $scope.general_16_13_self_assessor_1_not_reconciled = true; $scope.general_16_13_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
						if(Math.abs($scope.general_16_13_self_assessor_2 - $scope.general_16_13_self_assessor_3) > reconciliation_line){ $scope.general_16_13_self_assessor_2_not_reconciled = true; $scope.general_16_13_self_assessor_3_not_reconciled = true; $scope.general_not_reconciled = true; }
			//OVERALL TOTAL AND AVERAGE
				$scope.overall_total_self_self = $scope.location_1_0_self_self + $scope.building_2_0_self_self + $scope.front_office_3_0_self_self + $scope.lobby_lounge_other_public_areas_4_0_self_self + $scope.function_rooms_5_0_self_self + $scope.restaurants_6_0_self_self + $scope.bar_7_0_self_self + $scope.kitchen_8_0_self_self + $scope.guest_rooms_9_0_self_self + $scope.guest_bathrooms_10_0_self_self + $scope.suites_11_0_self_self + $scope.hygiene_and_sanitation_12_0_self_self + $scope.safety_and_security_13_0_self_self + $scope.sundry_services_14_0_self_self + $scope.human_resources_15_0_self_self + $scope.general_16_0_self_self;	
				$scope.overall_total_self_assessor_1 = $scope.location_1_0_self_assessor_1 + $scope.building_2_0_self_assessor_1 + $scope.front_office_3_0_self_assessor_1 + $scope.lobby_lounge_other_public_areas_4_0_self_assessor_1 + $scope.function_rooms_5_0_self_assessor_1 + $scope.restaurants_6_0_self_assessor_1 + $scope.bar_7_0_self_assessor_1 + $scope.kitchen_8_0_self_assessor_1 + $scope.guest_rooms_9_0_self_assessor_1 + $scope.guest_bathrooms_10_0_self_assessor_1 + $scope.suites_11_0_self_assessor_1 + $scope.hygiene_and_sanitation_12_0_self_assessor_1 + $scope.safety_and_security_13_0_self_assessor_1 + $scope.sundry_services_14_0_self_assessor_1 + $scope.human_resources_15_0_self_assessor_1 + $scope.general_16_0_self_assessor_1;
				$scope.overall_total_self_assessor_2 = $scope.location_1_0_self_assessor_2 + $scope.building_2_0_self_assessor_2 + $scope.front_office_3_0_self_assessor_2 + $scope.lobby_lounge_other_public_areas_4_0_self_assessor_2 + $scope.function_rooms_5_0_self_assessor_2 + $scope.restaurants_6_0_self_assessor_2 + $scope.bar_7_0_self_assessor_2 + $scope.kitchen_8_0_self_assessor_2 + $scope.guest_rooms_9_0_self_assessor_2 + $scope.guest_bathrooms_10_0_self_assessor_2 + $scope.suites_11_0_self_assessor_2 + $scope.hygiene_and_sanitation_12_0_self_assessor_2 + $scope.safety_and_security_13_0_self_assessor_2 + $scope.sundry_services_14_0_self_assessor_2 + $scope.human_resources_15_0_self_assessor_2 + $scope.general_16_0_self_assessor_2;
				$scope.overall_total_self_assessor_3 = $scope.location_1_0_self_assessor_3 + $scope.building_2_0_self_assessor_3 + $scope.front_office_3_0_self_assessor_3 + $scope.lobby_lounge_other_public_areas_4_0_self_assessor_3 + $scope.function_rooms_5_0_self_assessor_3 + $scope.restaurants_6_0_self_assessor_3 + $scope.bar_7_0_self_assessor_3 + $scope.kitchen_8_0_self_assessor_3 + $scope.guest_rooms_9_0_self_assessor_3 + $scope.guest_bathrooms_10_0_self_assessor_3 + $scope.suites_11_0_self_assessor_3 + $scope.hygiene_and_sanitation_12_0_self_assessor_3 + $scope.safety_and_security_13_0_self_assessor_3 + $scope.sundry_services_14_0_self_assessor_3 + $scope.human_resources_15_0_self_assessor_3 + $scope.general_16_0_self_assessor_3;
				$scope.overall_total_average = $scope.location_1_0_average + $scope.building_2_0_average + $scope.front_office_3_0_average + $scope.lobby_lounge_other_public_areas_4_0_average + $scope.function_rooms_5_0_average + $scope.restaurants_6_0_average + $scope.bar_7_0_average + $scope.kitchen_8_0_average + $scope.guest_rooms_9_0_average + $scope.guest_bathrooms_10_0_average + $scope.suites_11_0_average + $scope.hygiene_and_sanitation_12_0_average + $scope.safety_and_security_13_0_average + $scope.sundry_services_14_0_average + $scope.human_resources_15_0_average + $scope.general_16_0_average;
				
				$scope.overall_not_reconciled = false;
				if(($scope.location_not_reconciled) || ($scope.building_not_reconciled) || ($scope.front_office_not_reconciled) || ($scope.lobby_lounge_other_public_areas_not_reconciled) || ($scope.function_rooms_not_reconciled) || ($scope.restaurants_not_reconciled) || ($scope.bar_not_reconciled) || ($scope.kitchen_not_reconciled) || ($scope.guest_rooms_not_reconciled) || ($scope.guest_bathrooms_not_reconciled) || ($scope.suites_not_reconciled) || ($scope.hygiene_and_sanitation_not_reconciled) || ($scope.safety_and_security_not_reconciled) || ($scope.sundry_services_not_reconciled) || ($scope.human_resources_not_reconciled) || ($scope.general_not_reconciled)){ $scope.overall_not_reconciled = true; }
				
<!-----------------------------  GRADING  -------------------------------------------->
							
		//GRADING TOTAL
			
				//Stars size				
				var star_medium_total_length = 40;
				var star_medium_exact_length = 32;
				var star_medium_stars_gape_length = 8;				
				var star_small_total_length = 21;
				var star_small_exact_length = 17;
				var star_small_stars_gape_length = 4;				
				//Approved Facility
				var approved_lower_scores = 0;
				var approved_upper_scores = 1097.5;
				var approved_number_of_stars = 0;
				//One Star Facility
				var one_star_lower_scores = 1097.5;
				var one_star_upper_scores = 1461;
				var one_star_number_of_stars = 1;
				//Two Stars Facility
				var two_stars_lower_scores = 1461;
				var two_stars_upper_scores = 2511;
				var two_stars_number_of_stars = 2;
				//Three Stars Facility
				var three_stars_lower_scores = 2511;
				var three_stars_upper_scores = 4020;
				var three_stars_number_of_stars = 3;
				//Four Stars Facility
				var four_stars_lower_scores = 4020;
				var four_stars_upper_scores = 4468;
				var four_stars_number_of_stars = 4;
				//Five Stars Facility
				var five_stars_lower_scores = 4468;
				var five_stars_upper_scores = 5585;
				var five_stars_number_of_stars = 5;
				$scope.filled_medium_size_stars_div_width = 0;
				$scope.filled_small_size_stars_div_width = 0;
				var star_portion_color = "#fde585";				
					
				if(($scope.overall_total_average >= approved_lower_scores) && ( $scope.overall_total_average < approved_upper_scores))
				{
					//aproved facility
					var approved_star_interval = (approved_upper_scores - approved_lower_scores);
					var approved_star_exceeded_scores = ($scope.overall_total_average - approved_lower_scores);
					//medium size stars				
					var approved_star_medium_exceeded_length = parseInt(((star_medium_exact_length * approved_star_exceeded_scores)/approved_star_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * approved_number_of_stars) + approved_star_medium_exceeded_length);
					//small size stars
					var approved_star_small_exceeded_length = parseInt(((star_small_exact_length * approved_star_exceeded_scores)/approved_star_interval));
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * approved_number_of_stars) + approved_star_small_exceeded_length);
					
					$scope.grade = "APPROVED FACILITY";
					$scope.color_one = star_portion_color;
				} 
				else if(($scope.overall_total_average >= one_star_lower_scores) && ( $scope.overall_total_average < one_star_upper_scores))
				{
					//one star facility
					var one_star_interval = (one_star_upper_scores - one_star_lower_scores);
					var one_star_exceeded_scores = ($scope.overall_total_average - one_star_lower_scores);
					//medium size stars				
					var one_star_medium_exceeded_length = parseInt(((star_medium_exact_length * one_star_exceeded_scores)/one_star_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * one_star_number_of_stars) + one_star_medium_exceeded_length);
					//small size stars
					var one_star_small_exceeded_length = parseInt(((star_small_exact_length * one_star_exceeded_scores)/one_star_interval));					
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * one_star_number_of_stars) + one_star_small_exceeded_length);
					
					$scope.grade = "ONE STAR";
					$scope.color_two = star_portion_color;
				}
				else if(($scope.overall_total_average >= two_stars_lower_scores) && ( $scope.overall_total_average < two_stars_upper_scores))
				{
					//two stars facility
					var two_stars_interval = (two_stars_upper_scores - two_stars_lower_scores);
					var two_stars_exceeded_scores = ($scope.overall_total_average - two_stars_lower_scores);
					//medium size stars			
					var two_stars_medium_exceeded_length = parseInt(((star_medium_exact_length * two_stars_exceeded_scores)/two_stars_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * two_stars_number_of_stars) + two_stars_medium_exceeded_length);
					//small size stars
					var two_stars_small_exceeded_length = parseInt(((star_small_exact_length * two_stars_exceeded_scores)/two_stars_interval));					
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * two_stars_number_of_stars) + two_stars_small_exceeded_length);
					
					$scope.grade = "TWO STARS";
					$scope.color_three = star_portion_color;
				}
				else if(($scope.overall_total_average >= three_stars_lower_scores) && ( $scope.overall_total_average < three_stars_upper_scores))
				{
					//three stars facility
					var three_stars_interval = (three_stars_upper_scores - three_stars_lower_scores);
					var three_stars_exceeded_scores = ($scope.overall_total_average - three_stars_lower_scores);
					//medium size stars				
					var three_stars_medium_exceeded_length = parseInt(((star_medium_exact_length * three_stars_exceeded_scores)/three_stars_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * three_stars_number_of_stars) + three_stars_medium_exceeded_length);
					//small size stars
					var three_stars_small_exceeded_length = parseInt(((star_small_exact_length * three_stars_exceeded_scores)/three_stars_interval));					
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * three_stars_number_of_stars) + three_stars_small_exceeded_length);
					
					$scope.grade = "THREE STARS";
					$scope.color_four = star_portion_color;
				}
				else if(($scope.overall_total_average >= four_stars_lower_scores) && ( $scope.overall_total_average < four_stars_upper_scores))
				{
					//four stars facility
					var four_stars_interval = (four_stars_upper_scores - four_stars_lower_scores);
					var four_stars_exceeded_scores = ($scope.overall_total_average - four_stars_lower_scores);
					//medium size stars			
					var four_stars_medium_exceeded_length = parseInt(((star_medium_exact_length * four_stars_exceeded_scores)/four_stars_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * four_stars_number_of_stars) + four_stars_medium_exceeded_length);
					//small size stars
					var four_stars_small_exceeded_length = parseInt(((star_small_exact_length * four_stars_exceeded_scores)/four_stars_interval));					
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * four_stars_number_of_stars) + four_stars_small_exceeded_length);
					
					$scope.grade = "FOUR STARS";
					$scope.color_five = star_portion_color;
				}
				else if(($scope.overall_total_average >= five_stars_lower_scores) && ( $scope.overall_total_average < five_stars_upper_scores))
				{
					//five stars facility
					var five_stars_interval = (five_stars_upper_scores - five_stars_lower_scores);
					var five_stars_exceeded_scores = ($scope.overall_total_average - five_stars_lower_scores);
					//medium size stars		
					var five_stars_medium_exceeded_length = parseInt(((star_medium_exact_length * five_stars_exceeded_scores)/five_stars_interval));					
					$scope.filled_medium_size_stars_div_width = ((star_medium_total_length * five_stars_number_of_stars) + five_stars_medium_exceeded_length);
					//small size stars
					var five_stars_small_exceeded_length = parseInt(((star_small_exact_length * five_stars_exceeded_scores)/five_stars_interval));					
					$scope.filled_small_size_stars_div_width = ((star_small_total_length * five_stars_number_of_stars) + five_stars_small_exceeded_length);
					
					$scope.grade = "FIVE STARS";
				}
				else
				{
				$scope.grade = "NOT QUALIFIED";
				$scope.filled_medium_size_stars_div_width = 0;
				$scope.filled_small_size_stars_div_width = 0;
				};
				
			
		//GRADING SECTIONS
						
			//GRADING LOCATION 1.0
															
				//Location Stars Limits				
				var three_stars_location_lower_scores = 24;
				var three_stars_location_upper_scores = 32				
				var four_stars_location_lower_scores = 32;
				var four_stars_location_upper_scores = 40;				
				var five_stars_location_lower_scores = 40;
				$scope.filled_size_location_stars_div_width = 0;
								
				if(($scope.location_1_0_average >= three_stars_location_lower_scores) && ( $scope.location_1_0_average < three_stars_location_upper_scores))
				{
					//three stars location					
					var three_stars_location_interval = (three_stars_location_upper_scores - three_stars_location_lower_scores);
					var three_stars_location_exceeded_scores = ($scope.location_1_0_average - three_stars_location_lower_scores);
					//small size stars
					var three_stars_location_exceeded_length = parseInt(((section_star_exact_length * three_stars_location_exceeded_scores)/three_stars_location_interval));					
					$scope.filled_size_location_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_location_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.location_1_0_average >= four_stars_location_lower_scores) && ( $scope.location_1_0_average < four_stars_location_upper_scores))
				{
					//four stars location
					var four_stars_location_interval = (four_stars_location_upper_scores - four_stars_location_lower_scores);
					var four_stars_location_exceeded_scores = ($scope.location_1_0_average - four_stars_location_lower_scores);
					//small size stars
					var four_stars_location_exceeded_length = parseInt(((section_star_exact_length * four_stars_location_exceeded_scores)/four_stars_location_interval));					
					$scope.filled_size_location_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_location_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.location_1_0_average >= five_stars_location_lower_scores)
				{					
					var five_stars_location_exceeded_length = 0;
					$scope.filled_size_location_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_location_exceeded_length);
				}
				else
				{
					$scope.filled_size_location_stars_div_width = 0;
				};
				
			//GRADING BUILDING 1.0
			//Building Stars Limits				
				var three_stars_building_lower_scores = 60;
				var three_stars_building_upper_scores = 80				
				var four_stars_building_lower_scores = 80;
				var four_stars_building_upper_scores = 100;				
				var five_stars_building_lower_scores = 100;
				$scope.filled_size_building_stars_div_width = 0;
								
				if(($scope.building_2_0_average >= three_stars_building_lower_scores) && ( $scope.building_2_0_average < three_stars_building_upper_scores))
				{
					//three stars building					
					var three_stars_building_interval = (three_stars_building_upper_scores - three_stars_building_lower_scores);
					var three_stars_building_exceeded_scores = ($scope.building_2_0_average - three_stars_building_lower_scores);
					//small size stars
					var three_stars_building_exceeded_length = parseInt(((section_star_exact_length * three_stars_building_exceeded_scores)/three_stars_building_interval));					
					$scope.filled_size_building_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_building_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.building_2_0_average >= four_stars_building_lower_scores) && ( $scope.building_2_0_average < four_stars_building_upper_scores))
				{
					//four stars building
					var four_stars_building_interval = (four_stars_building_upper_scores - four_stars_building_lower_scores);
					var four_stars_building_exceeded_scores = ($scope.building_2_0_average - four_stars_building_lower_scores);
					//small size stars
					var four_stars_building_exceeded_length = parseInt(((section_star_exact_length * four_stars_building_exceeded_scores)/four_stars_building_interval));					
					$scope.filled_size_building_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_building_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.building_2_0_average >= five_stars_building_lower_scores)
				{					
					var five_stars_building_exceeded_length = 0;
					$scope.filled_size_building_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_building_exceeded_length);
				}
				else
				{
					$scope.filled_size_building_stars_div_width = 0;
				};
			
			//FRONT OFFICE 3.0
			//Front Office Stars Limits				
				var three_stars_front_office_lower_scores = 72;
				var three_stars_front_office_upper_scores = 96				
				var four_stars_front_office_lower_scores = 96;
				var four_stars_front_office_upper_scores = 120;				
				var five_stars_front_office_lower_scores = 120;
				$scope.filled_size_front_office_stars_div_width = 0;
								
				if(($scope.front_office_3_0_average >= three_stars_front_office_lower_scores) && ( $scope.front_office_3_0_average < three_stars_front_office_upper_scores))
				{
					//three stars front_office					
					var three_stars_front_office_interval = (three_stars_front_office_upper_scores - three_stars_front_office_lower_scores);
					var three_stars_front_office_exceeded_scores = ($scope.front_office_3_0_average - three_stars_front_office_lower_scores);
					//small size stars
					var three_stars_front_office_exceeded_length = parseInt(((section_star_exact_length * three_stars_front_office_exceeded_scores)/three_stars_front_office_interval));					
					$scope.filled_size_front_office_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_front_office_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.front_office_3_0_average >= four_stars_front_office_lower_scores) && ( $scope.front_office_3_0_average < four_stars_front_office_upper_scores))
				{
					//four stars front_office
					var four_stars_front_office_interval = (four_stars_front_office_upper_scores - four_stars_front_office_lower_scores);
					var four_stars_front_office_exceeded_scores = ($scope.front_office_3_0_average - four_stars_front_office_lower_scores);
					//small size stars
					var four_stars_front_office_exceeded_length = parseInt(((section_star_exact_length * four_stars_front_office_exceeded_scores)/four_stars_front_office_interval));					
					$scope.filled_size_front_office_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_front_office_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.front_office_3_0_average >= five_stars_front_office_lower_scores)
				{					
					var five_stars_front_office_exceeded_length = 0;
					$scope.filled_size_front_office_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_front_office_exceeded_length);
				}
				else
				{
					$scope.filled_size_front_office_stars_div_width = 0;
				};
				
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS 4.0															
			//lobby_lounge_other_public_areas Stars Limits				
				var three_stars_lobby_lounge_other_public_areas_lower_scores = 123;
				var three_stars_lobby_lounge_other_public_areas_upper_scores = 164;				
				var four_stars_lobby_lounge_other_public_areas_lower_scores = 164;
				var four_stars_lobby_lounge_other_public_areas_upper_scores = 205;				
				var five_stars_lobby_lounge_other_public_areas_lower_scores = 205;
				$scope.filled_size_lobby_lounge_other_public_areas_stars_div_width = 0;
				
				if(($scope.lobby_lounge_other_public_areas_4_0_average >= three_stars_lobby_lounge_other_public_areas_lower_scores) && ( $scope.lobby_lounge_other_public_areas_4_0_average < three_stars_lobby_lounge_other_public_areas_upper_scores))
				{
					//three stars lobby_lounge_other_public_areas					
					var three_stars_lobby_lounge_other_public_areas_interval = (three_stars_lobby_lounge_other_public_areas_upper_scores - three_stars_lobby_lounge_other_public_areas_lower_scores);
					var three_stars_lobby_lounge_other_public_areas_exceeded_scores = ($scope.lobby_lounge_other_public_areas_4_0_average - three_stars_lobby_lounge_other_public_areas_lower_scores);
					//small size stars
					var three_stars_lobby_lounge_other_public_areas_exceeded_length = parseInt(((section_star_exact_length * three_stars_lobby_lounge_other_public_areas_exceeded_scores)/three_stars_lobby_lounge_other_public_areas_interval));					
					$scope.filled_size_lobby_lounge_other_public_areas_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_lobby_lounge_other_public_areas_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.lobby_lounge_other_public_areas_4_0_average >= four_stars_lobby_lounge_other_public_areas_lower_scores) && ( $scope.lobby_lounge_other_public_areas_4_0_average < four_stars_lobby_lounge_other_public_areas_upper_scores))
				{
					//four stars lobby_lounge_other_public_areas
					var four_stars_lobby_lounge_other_public_areas_interval = (four_stars_lobby_lounge_other_public_areas_upper_scores - four_stars_lobby_lounge_other_public_areas_lower_scores);
					var four_stars_lobby_lounge_other_public_areas_exceeded_scores = ($scope.lobby_lounge_other_public_areas_4_0_average - four_stars_lobby_lounge_other_public_areas_lower_scores);
					//small size stars
					var four_stars_lobby_lounge_other_public_areas_exceeded_length = parseInt(((section_star_exact_length * four_stars_lobby_lounge_other_public_areas_exceeded_scores)/four_stars_lobby_lounge_other_public_areas_interval));					
					$scope.filled_size_lobby_lounge_other_public_areas_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_lobby_lounge_other_public_areas_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.lobby_lounge_other_public_areas_4_0_average >= five_stars_lobby_lounge_other_public_areas_lower_scores)
				{					
					var five_stars_lobby_lounge_other_public_areas_exceeded_length = 0;
					$scope.filled_size_lobby_lounge_other_public_areas_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_lobby_lounge_other_public_areas_exceeded_length);
				}
				else
				{
					$scope.filled_size_lobby_lounge_other_public_areas_stars_div_width = 0;
				};
			//FUNCTION ROOMS 5.0															
				//function rooms Stars Limits				
				var three_stars_function_rooms_lower_scores = 21;
				var three_stars_function_rooms_upper_scores = 28				
				var four_stars_function_rooms_lower_scores = 28;
				var four_stars_function_rooms_upper_scores = 35;				
				var five_stars_function_rooms_lower_scores = 35;
				$scope.filled_size_function_rooms_stars_div_width = 0;
				if(($scope.function_rooms_5_0_average >= three_stars_function_rooms_lower_scores) && ( $scope.function_rooms_5_0_average < three_stars_function_rooms_upper_scores))
				{
					//three stars function_rooms					
					var three_stars_function_rooms_interval = (three_stars_function_rooms_upper_scores - three_stars_function_rooms_lower_scores);
					var three_stars_function_rooms_exceeded_scores = ($scope.function_rooms_5_0_average - three_stars_function_rooms_lower_scores);
					//small size stars
					var three_stars_function_rooms_exceeded_length = parseInt(((section_star_exact_length * three_stars_function_rooms_exceeded_scores)/three_stars_function_rooms_interval));					
					$scope.filled_size_function_rooms_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_function_rooms_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;					
				}else if(($scope.function_rooms_5_0_average >= four_stars_function_rooms_lower_scores) && ( $scope.function_rooms_5_0_average < four_stars_function_rooms_upper_scores))
				{
					//four stars function_rooms
					var four_stars_function_rooms_interval = (four_stars_function_rooms_upper_scores - four_stars_function_rooms_lower_scores);
					var four_stars_function_rooms_exceeded_scores = ($scope.function_rooms_5_0_average - four_stars_function_rooms_lower_scores);
					//small size stars
					var four_stars_function_rooms_exceeded_length = parseInt(((section_star_exact_length * four_stars_function_rooms_exceeded_scores)/four_stars_function_rooms_interval));					
					$scope.filled_size_function_rooms_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_function_rooms_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.function_rooms_5_0_average >= five_stars_function_rooms_lower_scores)
				{					
					var five_stars_function_rooms_exceeded_length = 0;
					$scope.filled_size_function_rooms_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_function_rooms_exceeded_length);
				}
				else
				{
					$scope.filled_size_function_rooms_stars_div_width = 0;
				};
				
			//GRADING RESTAURANTS 6.0
															
				//restaurants Stars Limits				
				var three_stars_restaurants_lower_scores = 126;
				var three_stars_restaurants_upper_scores = 168;				
				var four_stars_restaurants_lower_scores = 168;
				var four_stars_restaurants_upper_scores = 210;				
				var five_stars_restaurants_lower_scores = 210;
				$scope.filled_size_restaurants_stars_div_width = 0;
				if(($scope.restaurants_6_0_average >= three_stars_restaurants_lower_scores) && ( $scope.restaurants_6_0_average < three_stars_restaurants_upper_scores))
				{
					//three stars restaurants					
					var three_stars_restaurants_interval = (three_stars_restaurants_upper_scores - three_stars_restaurants_lower_scores);
					var three_stars_restaurants_exceeded_scores = ($scope.restaurants_6_0_average - three_stars_restaurants_lower_scores);
					//small size stars
					var three_stars_restaurants_exceeded_length = parseInt(((section_star_exact_length * three_stars_restaurants_exceeded_scores)/three_stars_restaurants_interval));					
					$scope.filled_size_restaurants_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_restaurants_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;					
				}else if(($scope.restaurants_6_0_average >= four_stars_restaurants_lower_scores) && ( $scope.restaurants_6_0_average < four_stars_restaurants_upper_scores))
				{
					//four stars restaurants
					var four_stars_restaurants_interval = (four_stars_restaurants_upper_scores - four_stars_restaurants_lower_scores);
					var four_stars_restaurants_exceeded_scores = ($scope.restaurants_6_0_average - four_stars_restaurants_lower_scores);
					//small size stars
					var four_stars_restaurants_exceeded_length = parseInt(((section_star_exact_length * four_stars_restaurants_exceeded_scores)/four_stars_restaurants_interval));					
					$scope.filled_size_restaurants_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_restaurants_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.restaurants_6_0_average >= five_stars_restaurants_lower_scores)
				{					
					var five_stars_restaurants_exceeded_length = 0;
					$scope.filled_size_restaurants_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_restaurants_exceeded_length);
				}
				else
				{
					$scope.filled_size_restaurants_stars_div_width = 0;
				};
				
				
			//GRADING BAR
												
				//Bar Stars Limits				
				var three_stars_bar_lower_scores = 114;
				var three_stars_bar_upper_scores = 152				
				var four_stars_bar_lower_scores = 152;
				var four_stars_bar_upper_scores = 190;				
				var five_stars_bar_lower_scores = 190;
				$scope.filled_size_bar_stars_div_width = 0;
				
				if(($scope.bar_7_0_average >= three_stars_bar_lower_scores) && ( $scope.bar_7_0_average < three_stars_bar_upper_scores))
				{
					//three stars bar					
					var three_stars_bar_interval = (three_stars_bar_upper_scores - three_stars_bar_lower_scores);
					var three_stars_bar_exceeded_scores = ($scope.bar_7_0_average - three_stars_bar_lower_scores);
					//small size stars
					var three_stars_bar_exceeded_length = parseInt(((section_star_exact_length * three_stars_bar_exceeded_scores)/three_stars_bar_interval));					
					$scope.filled_size_bar_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_bar_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.bar_7_0_average >= four_stars_bar_lower_scores) && ( $scope.bar_7_0_average < four_stars_bar_upper_scores))
				{
					//four stars bar
					var four_stars_bar_interval = (four_stars_bar_upper_scores - four_stars_bar_lower_scores);
					var four_stars_bar_exceeded_scores = ($scope.bar_7_0_average - four_stars_bar_lower_scores);
					//small size stars
					var four_stars_bar_exceeded_length = parseInt(((section_star_exact_length * four_stars_bar_exceeded_scores)/four_stars_bar_interval));					
					$scope.filled_size_bar_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_bar_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.bar_7_0_average >= five_stars_bar_lower_scores)
				{					
					var five_stars_bar_exceeded_length = 0;
					$scope.filled_size_bar_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_bar_exceeded_length);
				}
				else
				{
					$scope.filled_size_bar_stars_div_width = 0;
				};
				
				//GRADING KITCHEN
												
				//Kitchen Stars Limits				
				var three_stars_kitchen_lower_scores = 151.5;
				var three_stars_kitchen_upper_scores = 202				
				var four_stars_kitchen_lower_scores = 202;
				var four_stars_kitchen_upper_scores = 252.5;				
				var five_stars_kitchen_lower_scores = 252.5;
				$scope.filled_size_kitchen_stars_div_width = 0;
				
				if(($scope.kitchen_8_0_average >= three_stars_kitchen_lower_scores) && ( $scope.kitchen_8_0_average < three_stars_kitchen_upper_scores))
				{
					//three stars kitchen					
					var three_stars_kitchen_interval = (three_stars_kitchen_upper_scores - three_stars_kitchen_lower_scores);
					var three_stars_kitchen_exceeded_scores = ($scope.kitchen_8_0_average - three_stars_kitchen_lower_scores);
					//small size stars
					var three_stars_kitchen_exceeded_length = parseInt(((section_star_exact_length * three_stars_kitchen_exceeded_scores)/three_stars_kitchen_interval));					
					$scope.filled_size_kitchen_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_kitchen_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.kitchen_8_0_average >= four_stars_kitchen_lower_scores) && ( $scope.kitchen_8_0_average < four_stars_kitchen_upper_scores))
				{
					//four stars kitchen
					var four_stars_kitchen_interval = (four_stars_kitchen_upper_scores - four_stars_kitchen_lower_scores);
					var four_stars_kitchen_exceeded_scores = ($scope.kitchen_8_0_average - four_stars_kitchen_lower_scores);
					//small size stars
					var four_stars_kitchen_exceeded_length = parseInt(((section_star_exact_length * four_stars_kitchen_exceeded_scores)/four_stars_kitchen_interval));					
					$scope.filled_size_kitchen_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_kitchen_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.kitchen_8_0_average >= five_stars_kitchen_lower_scores)
				{					
					var five_stars_kitchen_exceeded_length = 0;
					$scope.filled_size_kitchen_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_kitchen_exceeded_length);
				}
				else
				{
					$scope.filled_size_kitchen_stars_div_width = 0;
				};
				
				
		//GUEST ROOMS 9.0
																	
				//Guest rooms stars limits				
				var three_stars_guest_rooms_lower_scores = 210;
				var three_stars_guest_rooms_upper_scores = 280				
				var four_stars_guest_rooms_lower_scores = 280;
				var four_stars_guest_rooms_upper_scores = 350;				
				var five_stars_guest_rooms_lower_scores = 350;
				$scope.filled_size_guest_rooms_stars_div_width = 0;
								
				if(($scope.guest_rooms_9_0_average >= three_stars_guest_rooms_lower_scores) && ( $scope.guest_rooms_9_0_average < three_stars_guest_rooms_upper_scores))
				{
					//three stars guest_rooms					
					var three_stars_guest_rooms_interval = (three_stars_guest_rooms_upper_scores - three_stars_guest_rooms_lower_scores);
					var three_stars_guest_rooms_exceeded_scores = ($scope.guest_rooms_9_0_average - three_stars_guest_rooms_lower_scores);
					//small size stars
					var three_stars_guest_rooms_exceeded_length = parseInt(((section_star_exact_length * three_stars_guest_rooms_exceeded_scores)/three_stars_guest_rooms_interval));					
					$scope.filled_size_guest_rooms_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_guest_rooms_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.guest_rooms_9_0_average >= four_stars_guest_rooms_lower_scores) && ( $scope.guest_rooms_9_0_average < four_stars_guest_rooms_upper_scores))
				{
					//four stars guest_rooms
					var four_stars_guest_rooms_interval = (four_stars_guest_rooms_upper_scores - four_stars_guest_rooms_lower_scores);
					var four_stars_guest_rooms_exceeded_scores = ($scope.guest_rooms_9_0_average - four_stars_guest_rooms_lower_scores);
					//small size stars
					var four_stars_guest_rooms_exceeded_length = parseInt(((section_star_exact_length * four_stars_guest_rooms_exceeded_scores)/four_stars_guest_rooms_interval));					
					$scope.filled_size_guest_rooms_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_guest_rooms_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.guest_rooms_9_0_average >= five_stars_guest_rooms_lower_scores)
				{					
					var five_stars_guest_rooms_exceeded_length = 0;
					$scope.filled_size_guest_rooms_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_guest_rooms_exceeded_length);
				}
				else
				{
					$scope.filled_size_guest_rooms_stars_div_width = 0;
				};
				
				
		//GRADING GUEST BATHROOMS 10.0
											
				//Guest bathrooms Stars Limits				
				var three_stars_guest_bathrooms_lower_scores = 108;
				var three_stars_guest_bathrooms_upper_scores = 144				
				var four_stars_guest_bathrooms_lower_scores = 144;
				var four_stars_guest_bathrooms_upper_scores = 180;				
				var five_stars_guest_bathrooms_lower_scores = 180;
				$scope.filled_size_guest_bathrooms_stars_div_width = 0;
				
				if(($scope.guest_bathrooms_10_0_average >= three_stars_guest_bathrooms_lower_scores) && ( $scope.guest_bathrooms_10_0_average < three_stars_guest_bathrooms_upper_scores))
				{
					//three stars guest_bathrooms					
					var three_stars_guest_bathrooms_interval = (three_stars_guest_bathrooms_upper_scores - three_stars_guest_bathrooms_lower_scores);
					var three_stars_guest_bathrooms_exceeded_scores = ($scope.guest_bathrooms_10_0_average - three_stars_guest_bathrooms_lower_scores);
					//small size stars
					var three_stars_guest_bathrooms_exceeded_length = parseInt(((section_star_exact_length * three_stars_guest_bathrooms_exceeded_scores)/three_stars_guest_bathrooms_interval));					
					$scope.filled_size_guest_bathrooms_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_guest_bathrooms_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.guest_bathrooms_10_0_average >= four_stars_guest_bathrooms_lower_scores) && ( $scope.guest_bathrooms_10_0_average < four_stars_guest_bathrooms_upper_scores))
				{
					//four stars guest_bathrooms
					var four_stars_guest_bathrooms_interval = (four_stars_guest_bathrooms_upper_scores - four_stars_guest_bathrooms_lower_scores);
					var four_stars_guest_bathrooms_exceeded_scores = ($scope.guest_bathrooms_10_0_average - four_stars_guest_bathrooms_lower_scores);
					//small size stars
					var four_stars_guest_bathrooms_exceeded_length = parseInt(((section_star_exact_length * four_stars_guest_bathrooms_exceeded_scores)/four_stars_guest_bathrooms_interval));					
					$scope.filled_size_guest_bathrooms_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_guest_bathrooms_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.guest_bathrooms_10_0_average >= five_stars_guest_bathrooms_lower_scores)
				{					
					var five_stars_guest_bathrooms_exceeded_length = 0;
					$scope.filled_size_guest_bathrooms_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_guest_bathrooms_exceeded_length);
				}
				else
				{
					$scope.filled_size_guest_bathrooms_stars_div_width = 0;
				};
				
		//SUITES 11_0
								
				//Suites stars limits				
				var three_stars_suites_lower_scores = 309;
				var three_stars_suites_upper_scores = 412;				
				var four_stars_suites_lower_scores = 412;
				var four_stars_suites_upper_scores = 515;				
				var five_stars_suites_lower_scores = 515;
				$scope.filled_size_suites_stars_div_width = 0;
				
				if(($scope.suites_11_0_average >= three_stars_suites_lower_scores) && ( $scope.suites_11_0_average < three_stars_suites_upper_scores))
				{
					//three stars suites					
					var three_stars_suites_interval = (three_stars_suites_upper_scores - three_stars_suites_lower_scores);
					var three_stars_suites_exceeded_scores = ($scope.suites_11_0_average - three_stars_suites_lower_scores);
					//small size stars
					var three_stars_suites_exceeded_length = parseInt(((section_star_exact_length * three_stars_suites_exceeded_scores)/three_stars_suites_interval));					
					$scope.filled_size_suites_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_suites_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.suites_11_0_average >= four_stars_suites_lower_scores) && ( $scope.suites_11_0_average < four_stars_suites_upper_scores))
				{
					//four stars suites
					var four_stars_suites_interval = (four_stars_suites_upper_scores - four_stars_suites_lower_scores);
					var four_stars_suites_exceeded_scores = ($scope.suites_11_0_average - four_stars_suites_lower_scores);
					//small size stars
					var four_stars_suites_exceeded_length = parseInt(((section_star_exact_length * four_stars_suites_exceeded_scores)/four_stars_suites_interval));					
					$scope.filled_size_suites_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_suites_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.suites_11_0_average >= five_stars_suites_lower_scores)
				{					
					var five_stars_suites_exceeded_length = 0;
					$scope.filled_size_suites_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_suites_exceeded_length);
				}
				else
				{
					$scope.filled_size_suites_stars_div_width = 0;
				};
						
		//HYGIENE AND SANITATION 12.0			
		
			//Hygiene and sanitation stars limits				
			var three_stars_hygiene_and_sanitation_lower_scores = 72;
			var three_stars_hygiene_and_sanitation_upper_scores = 96;				
			var four_stars_hygiene_and_sanitation_lower_scores = 96;
			var four_stars_hygiene_and_sanitation_upper_scores = 120;				
			var five_stars_hygiene_and_sanitation_lower_scores = 120;
			$scope.filled_size_hygiene_and_sanitation_stars_div_width = 0;
			
			if(($scope.hygiene_and_sanitation_12_0_average >= three_stars_hygiene_and_sanitation_lower_scores) && ( $scope.hygiene_and_sanitation_12_0_average < three_stars_hygiene_and_sanitation_upper_scores))
				{
					//three stars hygiene_and_sanitation					
					var three_stars_hygiene_and_sanitation_interval = (three_stars_hygiene_and_sanitation_upper_scores - three_stars_hygiene_and_sanitation_lower_scores);
					var three_stars_hygiene_and_sanitation_exceeded_scores = ($scope.hygiene_and_sanitation_12_0_average - three_stars_hygiene_and_sanitation_lower_scores);
					//small size stars
					var three_stars_hygiene_and_sanitation_exceeded_length = parseInt(((section_star_exact_length * three_stars_hygiene_and_sanitation_exceeded_scores)/three_stars_hygiene_and_sanitation_interval));					
					$scope.filled_size_hygiene_and_sanitation_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_hygiene_and_sanitation_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.hygiene_and_sanitation_12_0_average >= four_stars_hygiene_and_sanitation_lower_scores) && ( $scope.hygiene_and_sanitation_12_0_average < four_stars_hygiene_and_sanitation_upper_scores))
				{
					//four stars hygiene_and_sanitation
					var four_stars_hygiene_and_sanitation_interval = (four_stars_hygiene_and_sanitation_upper_scores - four_stars_hygiene_and_sanitation_lower_scores);
					var four_stars_hygiene_and_sanitation_exceeded_scores = ($scope.hygiene_and_sanitation_12_0_average - four_stars_hygiene_and_sanitation_lower_scores);
					//small size stars
					var four_stars_hygiene_and_sanitation_exceeded_length = parseInt(((section_star_exact_length * four_stars_hygiene_and_sanitation_exceeded_scores)/four_stars_hygiene_and_sanitation_interval));					
					$scope.filled_size_hygiene_and_sanitation_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_hygiene_and_sanitation_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.hygiene_and_sanitation_12_0_average >= five_stars_hygiene_and_sanitation_lower_scores)
				{					
					var five_stars_hygiene_and_sanitation_exceeded_length = 0;
					$scope.filled_size_hygiene_and_sanitation_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_hygiene_and_sanitation_exceeded_length);
				}
				else
				{
					$scope.filled_size_hygiene_and_sanitation_stars_div_width = 0;
				};
				
	//SAFETY AND SECURITY

			//safety_and_security stars limits				
			var three_stars_safety_and_security_lower_scores = 48;
			var three_stars_safety_and_security_upper_scores = 64;				
			var four_stars_safety_and_security_lower_scores = 64;
			var four_stars_safety_and_security_upper_scores = 80;				
			var five_stars_safety_and_security_lower_scores = 80;
			$scope.filled_size_safety_and_security_stars_div_width = 0;
			
			if(($scope.safety_and_security_13_0_average >= three_stars_safety_and_security_lower_scores) && ( $scope.safety_and_security_13_0_average < three_stars_safety_and_security_upper_scores))
				{
					//three stars safety_and_security					
					var three_stars_safety_and_security_interval = (three_stars_safety_and_security_upper_scores - three_stars_safety_and_security_lower_scores);
					var three_stars_safety_and_security_exceeded_scores = ($scope.safety_and_security_13_0_average - three_stars_safety_and_security_lower_scores);
					//small size stars
					var three_stars_safety_and_security_exceeded_length = parseInt(((section_star_exact_length * three_stars_safety_and_security_exceeded_scores)/three_stars_safety_and_security_interval));					
					$scope.filled_size_safety_and_security_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_safety_and_security_exceeded_length);
					$scope.section_color_fourth_star = section_star_portion_color;
					
				}else if(($scope.safety_and_security_13_0_average >= four_stars_safety_and_security_lower_scores) && ( $scope.safety_and_security_13_0_average < four_stars_safety_and_security_upper_scores))
				{
					//four stars safety_and_security
					var four_stars_safety_and_security_interval = (four_stars_safety_and_security_upper_scores - four_stars_safety_and_security_lower_scores);
					var four_stars_safety_and_security_exceeded_scores = ($scope.safety_and_security_13_0_average - four_stars_safety_and_security_lower_scores);
					//small size stars
					var four_stars_safety_and_security_exceeded_length = parseInt(((section_star_exact_length * four_stars_safety_and_security_exceeded_scores)/four_stars_safety_and_security_interval));					
					$scope.filled_size_safety_and_security_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_safety_and_security_exceeded_length);
					$scope.section_color_fifth_star = section_star_portion_color;					
				}
				else if($scope.safety_and_security_13_0_average >= five_stars_safety_and_security_lower_scores)
				{					
					var five_stars_safety_and_security_exceeded_length = 0;
					$scope.filled_size_safety_and_security_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_safety_and_security_exceeded_length);
				}
				else
				{
					$scope.filled_size_safety_and_security_stars_div_width = 0;
				};
				
	//SUNDRY SERVICES

			//sundry_services stars limits				
			var three_stars_sundry_services_lower_scores = 24;
			var three_stars_sundry_services_upper_scores = 32;				
			var four_stars_sundry_services_lower_scores = 32;
			var four_stars_sundry_services_upper_scores = 40;				
			var five_stars_sundry_services_lower_scores = 40;
			$scope.filled_size_sundry_services_stars_div_width = 0;
			
			if(($scope.sundry_services_14_0_average >= three_stars_sundry_services_lower_scores) && ( $scope.sundry_services_14_0_average < three_stars_sundry_services_upper_scores))
			{
				//three stars sundry_services					
				var three_stars_sundry_services_interval = (three_stars_sundry_services_upper_scores - three_stars_sundry_services_lower_scores);
				var three_stars_sundry_services_exceeded_scores = ($scope.sundry_services_14_0_average - three_stars_sundry_services_lower_scores);
				//small size stars
				var three_stars_sundry_services_exceeded_length = parseInt(((section_star_exact_length * three_stars_sundry_services_exceeded_scores)/three_stars_sundry_services_interval));					
				$scope.filled_size_sundry_services_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_sundry_services_exceeded_length);
				$scope.section_color_fourth_star = section_star_portion_color;				
			}else if(($scope.sundry_services_14_0_average >= four_stars_sundry_services_lower_scores) && ( $scope.sundry_services_14_0_average < four_stars_sundry_services_upper_scores))
			{
				//four stars sundry_services
				var four_stars_sundry_services_interval = (four_stars_sundry_services_upper_scores - four_stars_sundry_services_lower_scores);
				var four_stars_sundry_services_exceeded_scores = ($scope.sundry_services_14_0_average - four_stars_sundry_services_lower_scores);
				//small size stars
				var four_stars_sundry_services_exceeded_length = parseInt(((section_star_exact_length * four_stars_sundry_services_exceeded_scores)/four_stars_sundry_services_interval));					
				$scope.filled_size_sundry_services_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_sundry_services_exceeded_length);
				$scope.section_color_fifth_star = section_star_portion_color;					
			}
			else if($scope.sundry_services_14_0_average >= five_stars_sundry_services_lower_scores)
			{					
				var five_stars_sundry_services_exceeded_length = 0;
				$scope.filled_size_sundry_services_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_sundry_services_exceeded_length);
			}
			else
			{
				$scope.filled_size_sundry_services_stars_div_width = 0;
			};			
					
	//HUMAN RESOURCES 15.0
	
			//human_resources stars Limits				
			var three_stars_human_resources_lower_scores = 87;
			var three_stars_human_resources_upper_scores = 116;				
			var four_stars_human_resources_lower_scores = 116;
			var four_stars_human_resources_upper_scores = 145;				
			var five_stars_human_resources_lower_scores = 145;
			$scope.filled_size_human_resources_stars_div_width = 0;
			
			if(($scope.human_resources_15_0_average >= three_stars_human_resources_lower_scores) && ( $scope.human_resources_15_0_average < three_stars_human_resources_upper_scores))
			{
				//three stars human_resources					
				var three_stars_human_resources_interval = (three_stars_human_resources_upper_scores - three_stars_human_resources_lower_scores);
				var three_stars_human_resources_exceeded_scores = ($scope.human_resources_15_0_average - three_stars_human_resources_lower_scores);
				//small size stars
				var three_stars_human_resources_exceeded_length = parseInt(((section_star_exact_length * three_stars_human_resources_exceeded_scores)/three_stars_human_resources_interval));					
				$scope.filled_size_human_resources_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_human_resources_exceeded_length);
				$scope.section_color_fourth_star = section_star_portion_color;				
			}else if(($scope.human_resources_15_0_average >= four_stars_human_resources_lower_scores) && ( $scope.human_resources_15_0_average < four_stars_human_resources_upper_scores))
			{
				//four stars human_resources
				var four_stars_human_resources_interval = (four_stars_human_resources_upper_scores - four_stars_human_resources_lower_scores);
				var four_stars_human_resources_exceeded_scores = ($scope.human_resources_15_0_average - four_stars_human_resources_lower_scores);
				//small size stars
				var four_stars_human_resources_exceeded_length = parseInt(((section_star_exact_length * four_stars_human_resources_exceeded_scores)/four_stars_human_resources_interval));					
				$scope.filled_size_human_resources_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_human_resources_exceeded_length);
				$scope.section_color_fifth_star = section_star_portion_color;					
			}
			else if($scope.human_resources_15_0_average >= five_stars_human_resources_lower_scores)
			{					
				var five_stars_human_resources_exceeded_length = 0;
				$scope.filled_size_human_resources_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_human_resources_exceeded_length);
			}
			else
			{
				$scope.filled_size_human_resources_stars_div_width = 0;
			};			
	//GENERAL	
			//general stars Limits				
			var three_stars_general_lower_scores = 126;
			var three_stars_general_upper_scores = 168;				
			var four_stars_general_lower_scores = 168;
			var four_stars_general_upper_scores = 210;				
			var five_stars_general_lower_scores = 210;
			$scope.filled_size_general_stars_div_width = 0;
			
			if(($scope.general_16_0_average >= three_stars_general_lower_scores) && ( $scope.general_16_0_average < three_stars_general_upper_scores))
			{
				//three stars general					
				var three_stars_general_interval = (three_stars_general_upper_scores - three_stars_general_lower_scores);
				var three_stars_general_exceeded_scores = ($scope.general_16_0_average - three_stars_general_lower_scores);
				//small size stars
				var three_stars_general_exceeded_length = parseInt(((section_star_exact_length * three_stars_general_exceeded_scores)/three_stars_general_interval));					
				$scope.filled_size_general_stars_div_width = ((section_star_total_length * section_three_stars_number_of_stars) + three_stars_general_exceeded_length);
				$scope.section_color_fourth_star = section_star_portion_color;				
			}else if(($scope.general_16_0_average >= four_stars_general_lower_scores) && ( $scope.general_16_0_average < four_stars_general_upper_scores))
			{
				//four stars general
				var four_stars_general_interval = (four_stars_general_upper_scores - four_stars_general_lower_scores);
				var four_stars_general_exceeded_scores = ($scope.general_16_0_average - four_stars_general_lower_scores);
				//small size stars
				var four_stars_general_exceeded_length = parseInt(((section_star_exact_length * four_stars_general_exceeded_scores)/four_stars_general_interval));					
				$scope.filled_size_general_stars_div_width = ((section_star_total_length * section_four_stars_number_of_stars) + four_stars_general_exceeded_length);
				$scope.section_color_fifth_star = section_star_portion_color;					
			}
			else if($scope.general_16_0_average >= five_stars_general_lower_scores)
			{					
				var five_stars_general_exceeded_length = 0;
				$scope.filled_size_general_stars_div_width = ((section_star_total_length * section_five_stars_number_of_stars) + five_stars_general_exceeded_length);
			}
			else
			{
				$scope.filled_size_general_stars_div_width = 0;
			};

				
												
			//OPEN SHEET							
			$scope.open_tallying_sheet_for_town_hotel();	
			
			});
	};
	
	
	$scope.open_tallying_sheet_for_town_hotel = function(){
		var modal_popup = angular.element('#tallying_sheet_for_town_hotel_panel');
		modal_popup.modal('show');
	};
	$scope.close_tallying_sheet_for_town_hotel = function(){
		var modal_popup = angular.element('#tallying_sheet_for_town_hotel_panel');
		modal_popup.modal('hide');
	};
	
	

};
<!---------------------------------------->

/**************/