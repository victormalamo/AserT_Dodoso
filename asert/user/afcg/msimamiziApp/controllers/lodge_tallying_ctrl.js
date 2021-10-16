app.lodge_tallying_ctrl = function($timeout, $scope, $http, focus){

		 $scope.fetch_lodge_items_for_tallying = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_lodge_items_for_tallying.php",
			data:{'assessment_id':assessment_id, 'assessor_category':assessor_category }
			}).success(function(data){
			$scope.lodge_scores_columns = 6;
			$scope.lodge_show_one_assessor_column = true;
						
			//SECTIONS STARS CONSTS 
				var lodge_section_star_exact_length = 18;
				var lodge_section_star_total_length = 18;
				var lodge_section_three_stars_number_of_stars = 3;
				var lodge_section_four_stars_number_of_stars = 4;
				var lodge_section_five_stars_number_of_stars = 5;				
				var lodge_section_star_portion_color = "#fde585";
				var lodge_reconciliation_line = 5;
						
// <!-----------------------------  AVERAGE  -------------------------------------------->
			
			//LOCATION 1.0
				
				//Single Assessor
				$scope.lodge_location_1_1_self_self = data.lodge_location_1_1_self_self;
				$scope.lodge_location_1_2_self_self = data.lodge_location_1_2_self_self;
				$scope.lodge_location_1_0_self_self = data.lodge_location_1_0_self_self;

				//Assessor 1
				$scope.lodge_location_1_1_self_assessor_1 = data.lodge_location_1_1_self_assessor_1;
				$scope.lodge_location_1_2_self_assessor_1 = data.lodge_location_1_2_self_assessor_1;
				$scope.lodge_location_1_0_self_assessor_1 = data.lodge_location_1_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_location_1_1_self_assessor_2 = data.lodge_location_1_1_self_assessor_2;
				$scope.lodge_location_1_2_self_assessor_2 = data.lodge_location_1_2_self_assessor_2;
				$scope.lodge_location_1_0_self_assessor_2 = data.lodge_location_1_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_location_1_1_self_assessor_3 = data.lodge_location_1_1_self_assessor_3;
				$scope.lodge_location_1_2_self_assessor_3 = data.lodge_location_1_2_self_assessor_3;
				$scope.lodge_location_1_0_self_assessor_3 = data.lodge_location_1_0_self_assessor_3;								
				//Location and Subsections Average
				$scope.lodge_location_1_1_average = ((data.lodge_location_1_1_self_assessor_1 + data.lodge_location_1_1_self_assessor_2 + data.lodge_location_1_1_self_assessor_3)/3);
				$scope.lodge_location_1_2_average = ((data.lodge_location_1_2_self_assessor_1 + data.lodge_location_1_2_self_assessor_2 + data.lodge_location_1_2_self_assessor_3)/3);
				$scope.lodge_location_1_0_average = ((data.lodge_location_1_0_self_assessor_1 + data.lodge_location_1_0_self_assessor_2 + data.lodge_location_1_0_self_assessor_3)/3);
				//Location Reconcilliation
				$scope.lodge_location_not_reconciled = false;
				$scope.lodge_location_1_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_location_1_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_location_1_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_location_1_1_self_assessor_1 - $scope.lodge_location_1_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_location_1_1_self_assessor_1_not_reconciled = true; $scope.lodge_location_1_1_self_assessor_2_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }
				if (Math.abs($scope.lodge_location_1_1_self_assessor_1 - $scope.lodge_location_1_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_location_1_1_self_assessor_1_not_reconciled = true; $scope.lodge_location_1_1_self_assessor_3_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }
				if (Math.abs($scope.lodge_location_1_1_self_assessor_2 - $scope.lodge_location_1_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_location_1_1_self_assessor_2_not_reconciled = true; $scope.lodge_location_1_1_self_assessor_3_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }

				$scope.lodge_location_1_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_location_1_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_location_1_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_location_1_2_self_assessor_1 - $scope.lodge_location_1_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_location_1_2_self_assessor_1_not_reconciled = true; $scope.lodge_location_1_2_self_assessor_2_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }
				if (Math.abs($scope.lodge_location_1_2_self_assessor_1 - $scope.lodge_location_1_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_location_1_2_self_assessor_1_not_reconciled = true; $scope.lodge_location_1_2_self_assessor_3_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }
				if (Math.abs($scope.lodge_location_1_2_self_assessor_2 - $scope.lodge_location_1_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_location_1_2_self_assessor_2_not_reconciled = true; $scope.lodge_location_1_2_self_assessor_3_not_reconciled = true; $scope.lodge_location_not_reconciled = true; }


			//BUILDING 2.0
				//Single Assessor
				$scope.lodge_building_2_1_self_self = data.lodge_building_2_1_self_self;
				$scope.lodge_building_2_2_self_self = data.lodge_building_2_2_self_self;
				$scope.lodge_building_2_3_self_self = data.lodge_building_2_3_self_self;
				$scope.lodge_building_2_4_self_self = data.lodge_building_2_4_self_self;
				$scope.lodge_building_2_0_self_self = data.lodge_building_2_0_self_self;

				//Assessor 1
				$scope.lodge_building_2_1_self_assessor_1 = data.lodge_building_2_1_self_assessor_1;
				$scope.lodge_building_2_2_self_assessor_1 = data.lodge_building_2_2_self_assessor_1;
				$scope.lodge_building_2_3_self_assessor_1 = data.lodge_building_2_3_self_assessor_1;
				$scope.lodge_building_2_4_self_assessor_1 = data.lodge_building_2_4_self_assessor_1;
				$scope.lodge_building_2_0_self_assessor_1 = data.lodge_building_2_0_self_assessor_1;
				
				//Assessor 2
				$scope.lodge_building_2_1_self_assessor_2 = data.lodge_building_2_1_self_assessor_2;
				$scope.lodge_building_2_2_self_assessor_2 = data.lodge_building_2_2_self_assessor_2;
				$scope.lodge_building_2_3_self_assessor_2 = data.lodge_building_2_3_self_assessor_2;
				$scope.lodge_building_2_4_self_assessor_2 = data.lodge_building_2_4_self_assessor_2;
				$scope.lodge_building_2_0_self_assessor_2 = data.lodge_building_2_0_self_assessor_2;
				
				//Assessor 3
				$scope.lodge_building_2_1_self_assessor_3 = data.lodge_building_2_1_self_assessor_3;
				$scope.lodge_building_2_2_self_assessor_3 = data.lodge_building_2_2_self_assessor_3;
				$scope.lodge_building_2_3_self_assessor_3 = data.lodge_building_2_3_self_assessor_3;
				$scope.lodge_building_2_4_self_assessor_3 = data.lodge_building_2_4_self_assessor_3;
				$scope.lodge_building_2_0_self_assessor_3 = data.lodge_building_2_0_self_assessor_3;								
				
				//building and Subsections Average
				$scope.lodge_building_2_1_average = ((data.lodge_building_2_1_self_assessor_1 + data.lodge_building_2_1_self_assessor_2 + data.lodge_building_2_1_self_assessor_3)/3);
				$scope.lodge_building_2_2_average = ((data.lodge_building_2_2_self_assessor_1 + data.lodge_building_2_2_self_assessor_2 + data.lodge_building_2_2_self_assessor_3)/3);
				$scope.lodge_building_2_3_average = ((data.lodge_building_2_3_self_assessor_1 + data.lodge_building_2_3_self_assessor_2 + data.lodge_building_2_3_self_assessor_3)/3);
				$scope.lodge_building_2_4_average = ((data.lodge_building_2_4_self_assessor_1 + data.lodge_building_2_4_self_assessor_2 + data.lodge_building_2_4_self_assessor_3)/3);
				$scope.lodge_building_2_0_average = ((data.lodge_building_2_0_self_assessor_1 + data.lodge_building_2_0_self_assessor_2 + data.lodge_building_2_0_self_assessor_3)/3);
				
				//building Reconcilliation
				$scope.lodge_building_not_reconciled = false;
				$scope.lodge_building_2_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_building_2_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_building_2_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_building_2_1_self_assessor_1 - $scope.lodge_building_2_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_building_2_1_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_1_self_assessor_2_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_1_self_assessor_1 - $scope.lodge_building_2_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_1_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_1_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_1_self_assessor_2 - $scope.lodge_building_2_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_1_self_assessor_2_not_reconciled = true; $scope.lodge_building_2_1_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }

				$scope.lodge_building_2_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_building_2_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_building_2_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_building_2_2_self_assessor_1 - $scope.lodge_building_2_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_building_2_2_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_2_self_assessor_2_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_2_self_assessor_1 - $scope.lodge_building_2_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_2_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_2_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_2_self_assessor_2 - $scope.lodge_building_2_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_2_self_assessor_2_not_reconciled = true; $scope.lodge_building_2_2_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }

				$scope.lodge_building_2_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_building_2_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_building_2_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_building_2_3_self_assessor_1 - $scope.lodge_building_2_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_building_2_3_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_3_self_assessor_2_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_3_self_assessor_1 - $scope.lodge_building_2_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_3_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_3_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_3_self_assessor_2 - $scope.lodge_building_2_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_3_self_assessor_2_not_reconciled = true; $scope.lodge_building_2_3_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }

				$scope.lodge_building_2_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_building_2_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_building_2_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_building_2_4_self_assessor_1 - $scope.lodge_building_2_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_building_2_4_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_4_self_assessor_2_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_4_self_assessor_1 - $scope.lodge_building_2_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_4_self_assessor_1_not_reconciled = true; $scope.lodge_building_2_4_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }
				if (Math.abs($scope.lodge_building_2_4_self_assessor_2 - $scope.lodge_building_2_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_building_2_4_self_assessor_2_not_reconciled = true; $scope.lodge_building_2_4_self_assessor_3_not_reconciled = true; $scope.lodge_building_not_reconciled = true; }

				
			//FRONT OFFICE 3.0
				//Single Assessor
				$scope.lodge_front_office_3_1_self_self = data.lodge_front_office_3_1_self_self;
				$scope.lodge_front_office_3_2_self_self = data.lodge_front_office_3_2_self_self;
				$scope.lodge_front_office_3_3_self_self = data.lodge_front_office_3_3_self_self;
				$scope.lodge_front_office_3_4_self_self = data.lodge_front_office_3_4_self_self;
				$scope.lodge_front_office_3_5_self_self = data.lodge_front_office_3_5_self_self;
				$scope.lodge_front_office_3_6_self_self = data.lodge_front_office_3_6_self_self;
				$scope.lodge_front_office_3_7_self_self = data.lodge_front_office_3_7_self_self;
				$scope.lodge_front_office_3_8_self_self = data.lodge_front_office_3_8_self_self;
				$scope.lodge_front_office_3_9_self_self = data.lodge_front_office_3_9_self_self;
				$scope.lodge_front_office_3_0_self_self = data.lodge_front_office_3_0_self_self;

				//Assessor 1
				$scope.lodge_front_office_3_1_self_assessor_1 = data.lodge_front_office_3_1_self_assessor_1;
				$scope.lodge_front_office_3_2_self_assessor_1 = data.lodge_front_office_3_2_self_assessor_1;
				$scope.lodge_front_office_3_3_self_assessor_1 = data.lodge_front_office_3_3_self_assessor_1;
				$scope.lodge_front_office_3_4_self_assessor_1 = data.lodge_front_office_3_4_self_assessor_1;
				$scope.lodge_front_office_3_5_self_assessor_1 = data.lodge_front_office_3_5_self_assessor_1;
				$scope.lodge_front_office_3_6_self_assessor_1 = data.lodge_front_office_3_6_self_assessor_1;
				$scope.lodge_front_office_3_7_self_assessor_1 = data.lodge_front_office_3_7_self_assessor_1;
				$scope.lodge_front_office_3_8_self_assessor_1 = data.lodge_front_office_3_8_self_assessor_1;
				$scope.lodge_front_office_3_9_self_assessor_1 = data.lodge_front_office_3_9_self_assessor_1;
				$scope.lodge_front_office_3_0_self_assessor_1 = data.lodge_front_office_3_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_front_office_3_1_self_assessor_2 = data.lodge_front_office_3_1_self_assessor_2;
				$scope.lodge_front_office_3_2_self_assessor_2 = data.lodge_front_office_3_2_self_assessor_2;
				$scope.lodge_front_office_3_3_self_assessor_2 = data.lodge_front_office_3_3_self_assessor_2;
				$scope.lodge_front_office_3_4_self_assessor_2 = data.lodge_front_office_3_4_self_assessor_2;
				$scope.lodge_front_office_3_5_self_assessor_2 = data.lodge_front_office_3_5_self_assessor_2;
				$scope.lodge_front_office_3_6_self_assessor_2 = data.lodge_front_office_3_6_self_assessor_2;
				$scope.lodge_front_office_3_7_self_assessor_2 = data.lodge_front_office_3_7_self_assessor_2;
				$scope.lodge_front_office_3_8_self_assessor_2 = data.lodge_front_office_3_8_self_assessor_2;
				$scope.lodge_front_office_3_9_self_assessor_2 = data.lodge_front_office_3_9_self_assessor_2;
				$scope.lodge_front_office_3_0_self_assessor_2 = data.lodge_front_office_3_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_front_office_3_1_self_assessor_3 = data.lodge_front_office_3_1_self_assessor_3;
				$scope.lodge_front_office_3_2_self_assessor_3 = data.lodge_front_office_3_2_self_assessor_3;
				$scope.lodge_front_office_3_3_self_assessor_3 = data.lodge_front_office_3_3_self_assessor_3;
				$scope.lodge_front_office_3_4_self_assessor_3 = data.lodge_front_office_3_4_self_assessor_3;
				$scope.lodge_front_office_3_5_self_assessor_3 = data.lodge_front_office_3_5_self_assessor_3;
				$scope.lodge_front_office_3_6_self_assessor_3 = data.lodge_front_office_3_6_self_assessor_3;
				$scope.lodge_front_office_3_7_self_assessor_3 = data.lodge_front_office_3_7_self_assessor_3;
				$scope.lodge_front_office_3_8_self_assessor_3 = data.lodge_front_office_3_8_self_assessor_3;
				$scope.lodge_front_office_3_9_self_assessor_3 = data.lodge_front_office_3_9_self_assessor_3;
				$scope.lodge_front_office_3_0_self_assessor_3 = data.lodge_front_office_3_0_self_assessor_3;
				//Front office and Subsections Average
				$scope.lodge_front_office_3_1_average = ((data.lodge_front_office_3_1_self_assessor_1 + data.lodge_front_office_3_1_self_assessor_2 + data.lodge_front_office_3_1_self_assessor_3)/3);
				$scope.lodge_front_office_3_2_average = ((data.lodge_front_office_3_2_self_assessor_1 + data.lodge_front_office_3_2_self_assessor_2 + data.lodge_front_office_3_2_self_assessor_3)/3);
				$scope.lodge_front_office_3_3_average = ((data.lodge_front_office_3_3_self_assessor_1 + data.lodge_front_office_3_3_self_assessor_2 + data.lodge_front_office_3_3_self_assessor_3)/3);
				$scope.lodge_front_office_3_4_average = ((data.lodge_front_office_3_4_self_assessor_1 + data.lodge_front_office_3_4_self_assessor_2 + data.lodge_front_office_3_4_self_assessor_3)/3);
				$scope.lodge_front_office_3_5_average = ((data.lodge_front_office_3_5_self_assessor_1 + data.lodge_front_office_3_5_self_assessor_2 + data.lodge_front_office_3_5_self_assessor_3)/3);
				$scope.lodge_front_office_3_6_average = ((data.lodge_front_office_3_6_self_assessor_1 + data.lodge_front_office_3_6_self_assessor_2 + data.lodge_front_office_3_6_self_assessor_3)/3);
				$scope.lodge_front_office_3_7_average = ((data.lodge_front_office_3_7_self_assessor_1 + data.lodge_front_office_3_7_self_assessor_2 + data.lodge_front_office_3_7_self_assessor_3)/3);
				$scope.lodge_front_office_3_8_average = ((data.lodge_front_office_3_8_self_assessor_1 + data.lodge_front_office_3_8_self_assessor_2 + data.lodge_front_office_3_8_self_assessor_3)/3);
				$scope.lodge_front_office_3_9_average = ((data.lodge_front_office_3_9_self_assessor_1 + data.lodge_front_office_3_9_self_assessor_2 + data.lodge_front_office_3_9_self_assessor_3)/3);
				$scope.lodge_front_office_3_0_average = ((data.lodge_front_office_3_0_self_assessor_1 + data.lodge_front_office_3_0_self_assessor_2 + data.lodge_front_office_3_0_self_assessor_3)/3);

				//front office Reconcilliation
				$scope.lodge_front_office_not_reconciled = false;
				$scope.lodge_front_office_3_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_1_self_assessor_1 - $scope.lodge_front_office_3_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_1_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_1_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_1_self_assessor_1 - $scope.lodge_front_office_3_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_1_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_1_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_1_self_assessor_2 - $scope.lodge_front_office_3_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_1_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_1_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_2_self_assessor_1 - $scope.lodge_front_office_3_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_2_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_2_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_2_self_assessor_1 - $scope.lodge_front_office_3_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_2_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_2_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_2_self_assessor_2 - $scope.lodge_front_office_3_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_2_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_2_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_3_self_assessor_1 - $scope.lodge_front_office_3_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_3_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_3_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_3_self_assessor_1 - $scope.lodge_front_office_3_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_3_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_3_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_3_self_assessor_2 - $scope.lodge_front_office_3_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_3_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_3_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_4_self_assessor_1 - $scope.lodge_front_office_3_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_4_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_4_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_4_self_assessor_1 - $scope.lodge_front_office_3_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_4_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_4_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_4_self_assessor_2 - $scope.lodge_front_office_3_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_4_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_4_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_5_self_assessor_1 - $scope.lodge_front_office_3_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_5_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_5_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_5_self_assessor_1 - $scope.lodge_front_office_3_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_5_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_5_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_5_self_assessor_2 - $scope.lodge_front_office_3_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_5_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_5_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_6_self_assessor_1 - $scope.lodge_front_office_3_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_6_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_6_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_6_self_assessor_1 - $scope.lodge_front_office_3_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_6_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_6_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_6_self_assessor_2 - $scope.lodge_front_office_3_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_6_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_6_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_7_self_assessor_1 - $scope.lodge_front_office_3_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_7_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_7_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_7_self_assessor_1 - $scope.lodge_front_office_3_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_7_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_7_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_7_self_assessor_2 - $scope.lodge_front_office_3_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_7_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_7_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_8_self_assessor_1 - $scope.lodge_front_office_3_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_8_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_8_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_8_self_assessor_1 - $scope.lodge_front_office_3_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_8_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_8_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_8_self_assessor_2 - $scope.lodge_front_office_3_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_8_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_8_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

				$scope.lodge_front_office_3_9_self_assessor_1_not_reconciled = false;
				$scope.lodge_front_office_3_9_self_assessor_2_not_reconciled = false;
				$scope.lodge_front_office_3_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_front_office_3_9_self_assessor_1 - $scope.lodge_front_office_3_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_front_office_3_9_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_9_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_9_self_assessor_1 - $scope.lodge_front_office_3_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_9_self_assessor_1_not_reconciled = true; $scope.lodge_front_office_3_9_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }
				if (Math.abs($scope.lodge_front_office_3_9_self_assessor_2 - $scope.lodge_front_office_3_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_front_office_3_9_self_assessor_2_not_reconciled = true; $scope.lodge_front_office_3_9_self_assessor_3_not_reconciled = true; $scope.lodge_front_office_not_reconciled = true; }

		//LOBBY LOUNGE AND OTHER PUBLIC AREAS 4.0
			//Single Assessor
			$scope.lodge_lobby_lounge_other_public_areas_4_1_self_self = data.lodge_lobby_lounge_other_public_areas_4_1_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_2_self_self = data.lodge_lobby_lounge_other_public_areas_4_2_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_3_self_self = data.lodge_lobby_lounge_other_public_areas_4_3_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_4_self_self = data.lodge_lobby_lounge_other_public_areas_4_4_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_5_self_self = data.lodge_lobby_lounge_other_public_areas_4_5_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_6_self_self = data.lodge_lobby_lounge_other_public_areas_4_6_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_7_self_self = data.lodge_lobby_lounge_other_public_areas_4_7_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_8_self_self = data.lodge_lobby_lounge_other_public_areas_4_8_self_self;
			$scope.lodge_lobby_lounge_other_public_areas_4_0_self_self = data.lodge_lobby_lounge_other_public_areas_4_0_self_self;
			
			//Assessor 1
			$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1;
			$scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_1 = data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_1;
			//Assessor 2
			$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2;
			$scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_2 = data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_2;
			//Assessor 3
			$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3;
			$scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_3 = data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_3;
				//lobby lounge other public areas and subsections average
				$scope.lodge_lobby_lounge_other_public_areas_4_1_average = ((data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_2_average = ((data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_3_average = ((data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_4_average = ((data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_5_average = ((data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_6_average = ((data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_7_average = ((data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_8_average = ((data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3)/3);
				$scope.lodge_lobby_lounge_other_public_areas_4_0_average = ((data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_1 + data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_2 + data.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_3)/3);

				//lobby lounge other public areas Reconcilliation
				$scope.lodge_lobby_lounge_other_public_areas_not_reconciled = false;
				//4.1
				$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }

				$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1 - $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }
				if (Math.abs($scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2 - $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled = true; $scope.lodge_lobby_lounge_other_public_areas_not_reconciled = true; }


			//FUNCTION ROOMS 5.0			
				//Single Assessor
				$scope.lodge_function_rooms_5_1_self_self = data.lodge_function_rooms_5_1_self_self;
				$scope.lodge_function_rooms_5_0_self_self = data.lodge_function_rooms_5_0_self_self;

				//Assessor 1
				$scope.lodge_function_rooms_5_1_self_assessor_1 = data.lodge_function_rooms_5_1_self_assessor_1;
				$scope.lodge_function_rooms_5_0_self_assessor_1 = data.lodge_function_rooms_5_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_function_rooms_5_1_self_assessor_2 = data.lodge_function_rooms_5_1_self_assessor_2;
				$scope.lodge_function_rooms_5_0_self_assessor_2 = data.lodge_function_rooms_5_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_function_rooms_5_1_self_assessor_3 = data.lodge_function_rooms_5_1_self_assessor_3;
				$scope.lodge_function_rooms_5_0_self_assessor_3 = data.lodge_function_rooms_5_0_self_assessor_3;
				//function rooms and subsections average
				$scope.lodge_function_rooms_5_1_average = ((data.lodge_function_rooms_5_1_self_assessor_1 + data.lodge_function_rooms_5_1_self_assessor_2 + data.lodge_function_rooms_5_1_self_assessor_3)/3);
				$scope.lodge_function_rooms_5_0_average = ((data.lodge_function_rooms_5_0_self_assessor_1 + data.lodge_function_rooms_5_0_self_assessor_2 + data.lodge_function_rooms_5_0_self_assessor_3)/3);

				//function rooms reconcilliation
				$scope.lodge_function_rooms_not_reconciled = false;
				//5.1
				$scope.lodge_function_rooms_5_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_function_rooms_5_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_function_rooms_5_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_function_rooms_5_1_self_assessor_1 - $scope.lodge_function_rooms_5_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_function_rooms_5_1_self_assessor_1_not_reconciled = true; $scope.lodge_function_rooms_5_1_self_assessor_2_not_reconciled = true; $scope.lodge_function_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_function_rooms_5_1_self_assessor_1 - $scope.lodge_function_rooms_5_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_function_rooms_5_1_self_assessor_1_not_reconciled = true; $scope.lodge_function_rooms_5_1_self_assessor_3_not_reconciled = true; $scope.lodge_function_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_function_rooms_5_1_self_assessor_2 - $scope.lodge_function_rooms_5_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_function_rooms_5_1_self_assessor_2_not_reconciled = true; $scope.lodge_function_rooms_5_1_self_assessor_3_not_reconciled = true; $scope.lodge_function_rooms_not_reconciled = true; }


			//RESTAURANTS						
				//Single Assessor
				$scope.lodge_restaurants_6_1_self_self = data.lodge_restaurants_6_1_self_self;
				$scope.lodge_restaurants_6_2_self_self = data.lodge_restaurants_6_2_self_self;
				$scope.lodge_restaurants_6_3_self_self = data.lodge_restaurants_6_3_self_self;
				$scope.lodge_restaurants_6_4_self_self = data.lodge_restaurants_6_4_self_self;
				$scope.lodge_restaurants_6_5_self_self = data.lodge_restaurants_6_5_self_self;
				$scope.lodge_restaurants_6_6_self_self = data.lodge_restaurants_6_6_self_self;
				$scope.lodge_restaurants_6_7_self_self = data.lodge_restaurants_6_7_self_self;
				$scope.lodge_restaurants_6_8_self_self = data.lodge_restaurants_6_8_self_self;
				$scope.lodge_restaurants_6_0_self_self = data.lodge_restaurants_6_0_self_self;

				//Assessor 1
				$scope.lodge_restaurants_6_1_self_assessor_1 = data.lodge_restaurants_6_1_self_assessor_1;
				$scope.lodge_restaurants_6_2_self_assessor_1 = data.lodge_restaurants_6_2_self_assessor_1;
				$scope.lodge_restaurants_6_3_self_assessor_1 = data.lodge_restaurants_6_3_self_assessor_1;
				$scope.lodge_restaurants_6_4_self_assessor_1 = data.lodge_restaurants_6_4_self_assessor_1;
				$scope.lodge_restaurants_6_5_self_assessor_1 = data.lodge_restaurants_6_5_self_assessor_1;
				$scope.lodge_restaurants_6_6_self_assessor_1 = data.lodge_restaurants_6_6_self_assessor_1;
				$scope.lodge_restaurants_6_7_self_assessor_1 = data.lodge_restaurants_6_7_self_assessor_1;
				$scope.lodge_restaurants_6_8_self_assessor_1 = data.lodge_restaurants_6_8_self_assessor_1;
				$scope.lodge_restaurants_6_0_self_assessor_1 = data.lodge_restaurants_6_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_restaurants_6_1_self_assessor_2 = data.lodge_restaurants_6_1_self_assessor_2;
				$scope.lodge_restaurants_6_2_self_assessor_2 = data.lodge_restaurants_6_2_self_assessor_2;
				$scope.lodge_restaurants_6_3_self_assessor_2 = data.lodge_restaurants_6_3_self_assessor_2;
				$scope.lodge_restaurants_6_4_self_assessor_2 = data.lodge_restaurants_6_4_self_assessor_2;
				$scope.lodge_restaurants_6_5_self_assessor_2 = data.lodge_restaurants_6_5_self_assessor_2;
				$scope.lodge_restaurants_6_6_self_assessor_2 = data.lodge_restaurants_6_6_self_assessor_2;
				$scope.lodge_restaurants_6_7_self_assessor_2 = data.lodge_restaurants_6_7_self_assessor_2;
				$scope.lodge_restaurants_6_8_self_assessor_2 = data.lodge_restaurants_6_8_self_assessor_2;
				$scope.lodge_restaurants_6_0_self_assessor_2 = data.lodge_restaurants_6_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_restaurants_6_1_self_assessor_3 = data.lodge_restaurants_6_1_self_assessor_3;
				$scope.lodge_restaurants_6_2_self_assessor_3 = data.lodge_restaurants_6_2_self_assessor_3;
				$scope.lodge_restaurants_6_3_self_assessor_3 = data.lodge_restaurants_6_3_self_assessor_3;
				$scope.lodge_restaurants_6_4_self_assessor_3 = data.lodge_restaurants_6_4_self_assessor_3;
				$scope.lodge_restaurants_6_5_self_assessor_3 = data.lodge_restaurants_6_5_self_assessor_3;
				$scope.lodge_restaurants_6_6_self_assessor_3 = data.lodge_restaurants_6_6_self_assessor_3;
				$scope.lodge_restaurants_6_7_self_assessor_3 = data.lodge_restaurants_6_7_self_assessor_3;
				$scope.lodge_restaurants_6_8_self_assessor_3 = data.lodge_restaurants_6_8_self_assessor_3;
				$scope.lodge_restaurants_6_0_self_assessor_3 = data.lodge_restaurants_6_0_self_assessor_3;
				//lodge_restaurants and subsections average
				$scope.lodge_restaurants_6_1_average = ((data.lodge_restaurants_6_1_self_assessor_1 + data.lodge_restaurants_6_1_self_assessor_2 + data.lodge_restaurants_6_1_self_assessor_3)/3);
				$scope.lodge_restaurants_6_2_average = ((data.lodge_restaurants_6_2_self_assessor_1 + data.lodge_restaurants_6_2_self_assessor_2 + data.lodge_restaurants_6_2_self_assessor_3)/3);
				$scope.lodge_restaurants_6_3_average = ((data.lodge_restaurants_6_3_self_assessor_1 + data.lodge_restaurants_6_3_self_assessor_2 + data.lodge_restaurants_6_3_self_assessor_3)/3);
				$scope.lodge_restaurants_6_4_average = ((data.lodge_restaurants_6_4_self_assessor_1 + data.lodge_restaurants_6_4_self_assessor_2 + data.lodge_restaurants_6_4_self_assessor_3)/3);
				$scope.lodge_restaurants_6_5_average = ((data.lodge_restaurants_6_5_self_assessor_1 + data.lodge_restaurants_6_5_self_assessor_2 + data.lodge_restaurants_6_5_self_assessor_3)/3);
				$scope.lodge_restaurants_6_6_average = ((data.lodge_restaurants_6_6_self_assessor_1 + data.lodge_restaurants_6_6_self_assessor_2 + data.lodge_restaurants_6_6_self_assessor_3)/3);
				$scope.lodge_restaurants_6_7_average = ((data.lodge_restaurants_6_7_self_assessor_1 + data.lodge_restaurants_6_7_self_assessor_2 + data.lodge_restaurants_6_7_self_assessor_3)/3);
				$scope.lodge_restaurants_6_8_average = ((data.lodge_restaurants_6_8_self_assessor_1 + data.lodge_restaurants_6_8_self_assessor_2 + data.lodge_restaurants_6_8_self_assessor_3)/3);
				$scope.lodge_restaurants_6_0_average = ((data.lodge_restaurants_6_0_self_assessor_1 + data.lodge_restaurants_6_0_self_assessor_2 + data.lodge_restaurants_6_0_self_assessor_3)/3);

				//lodge_restaurants reconcilliation
				$scope.lodge_restaurants_not_reconciled = false;
				//6.1
				$scope.lodge_restaurants_6_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_1_self_assessor_1 - $scope.lodge_restaurants_6_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_1_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_1_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_1_self_assessor_1 - $scope.lodge_restaurants_6_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_1_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_1_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_1_self_assessor_2 - $scope.lodge_restaurants_6_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_1_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_1_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_2_self_assessor_1 - $scope.lodge_restaurants_6_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_2_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_2_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_2_self_assessor_1 - $scope.lodge_restaurants_6_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_2_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_2_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_2_self_assessor_2 - $scope.lodge_restaurants_6_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_2_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_2_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_3_self_assessor_1 - $scope.lodge_restaurants_6_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_3_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_3_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_3_self_assessor_1 - $scope.lodge_restaurants_6_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_3_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_3_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_3_self_assessor_2 - $scope.lodge_restaurants_6_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_3_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_3_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_4_self_assessor_1 - $scope.lodge_restaurants_6_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_4_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_4_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_4_self_assessor_1 - $scope.lodge_restaurants_6_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_4_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_4_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_4_self_assessor_2 - $scope.lodge_restaurants_6_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_4_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_4_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_5_self_assessor_1 - $scope.lodge_restaurants_6_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_5_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_5_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_5_self_assessor_1 - $scope.lodge_restaurants_6_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_5_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_5_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_5_self_assessor_2 - $scope.lodge_restaurants_6_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_5_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_5_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_6_self_assessor_1 - $scope.lodge_restaurants_6_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_6_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_6_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_6_self_assessor_1 - $scope.lodge_restaurants_6_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_6_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_6_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_6_self_assessor_2 - $scope.lodge_restaurants_6_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_6_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_6_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_7_self_assessor_1 - $scope.lodge_restaurants_6_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_7_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_7_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_7_self_assessor_1 - $scope.lodge_restaurants_6_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_7_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_7_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_7_self_assessor_2 - $scope.lodge_restaurants_6_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_7_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_7_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }

				$scope.lodge_restaurants_6_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_restaurants_6_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_restaurants_6_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_restaurants_6_8_self_assessor_1 - $scope.lodge_restaurants_6_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_8_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_8_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_8_self_assessor_1 - $scope.lodge_restaurants_6_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_8_self_assessor_1_not_reconciled = true; $scope.lodge_restaurants_6_8_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }
				if (Math.abs($scope.lodge_restaurants_6_8_self_assessor_2 - $scope.lodge_restaurants_6_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_restaurants_6_8_self_assessor_2_not_reconciled = true; $scope.lodge_restaurants_6_8_self_assessor_3_not_reconciled = true; $scope.lodge_restaurants_not_reconciled = true; }


			//BAR
				//Single Assessor
				$scope.lodge_bar_7_1_self_self = data.lodge_bar_7_1_self_self;
				$scope.lodge_bar_7_2_self_self = data.lodge_bar_7_2_self_self;
				$scope.lodge_bar_7_3_self_self = data.lodge_bar_7_3_self_self;
				$scope.lodge_bar_7_4_self_self = data.lodge_bar_7_4_self_self;
				$scope.lodge_bar_7_5_self_self = data.lodge_bar_7_5_self_self;
				$scope.lodge_bar_7_6_self_self = data.lodge_bar_7_6_self_self;
				$scope.lodge_bar_7_7_self_self = data.lodge_bar_7_7_self_self;
				$scope.lodge_bar_7_0_self_self = data.lodge_bar_7_0_self_self;

				//Assessor 1
				$scope.lodge_bar_7_1_self_assessor_1 = data.lodge_bar_7_1_self_assessor_1;
				$scope.lodge_bar_7_2_self_assessor_1 = data.lodge_bar_7_2_self_assessor_1;
				$scope.lodge_bar_7_3_self_assessor_1 = data.lodge_bar_7_3_self_assessor_1;
				$scope.lodge_bar_7_4_self_assessor_1 = data.lodge_bar_7_4_self_assessor_1;
				$scope.lodge_bar_7_5_self_assessor_1 = data.lodge_bar_7_5_self_assessor_1;
				$scope.lodge_bar_7_6_self_assessor_1 = data.lodge_bar_7_6_self_assessor_1;
				$scope.lodge_bar_7_7_self_assessor_1 = data.lodge_bar_7_7_self_assessor_1;
				$scope.lodge_bar_7_0_self_assessor_1 = data.lodge_bar_7_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_bar_7_1_self_assessor_2 = data.lodge_bar_7_1_self_assessor_2;
				$scope.lodge_bar_7_2_self_assessor_2 = data.lodge_bar_7_2_self_assessor_2;
				$scope.lodge_bar_7_3_self_assessor_2 = data.lodge_bar_7_3_self_assessor_2;
				$scope.lodge_bar_7_4_self_assessor_2 = data.lodge_bar_7_4_self_assessor_2;
				$scope.lodge_bar_7_5_self_assessor_2 = data.lodge_bar_7_5_self_assessor_2;
				$scope.lodge_bar_7_6_self_assessor_2 = data.lodge_bar_7_6_self_assessor_2;
				$scope.lodge_bar_7_7_self_assessor_2 = data.lodge_bar_7_7_self_assessor_2;
				$scope.lodge_bar_7_0_self_assessor_2 = data.lodge_bar_7_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_bar_7_1_self_assessor_3 = data.lodge_bar_7_1_self_assessor_3;
				$scope.lodge_bar_7_2_self_assessor_3 = data.lodge_bar_7_2_self_assessor_3;
				$scope.lodge_bar_7_3_self_assessor_3 = data.lodge_bar_7_3_self_assessor_3;
				$scope.lodge_bar_7_4_self_assessor_3 = data.lodge_bar_7_4_self_assessor_3;
				$scope.lodge_bar_7_5_self_assessor_3 = data.lodge_bar_7_5_self_assessor_3;
				$scope.lodge_bar_7_6_self_assessor_3 = data.lodge_bar_7_6_self_assessor_3;
				$scope.lodge_bar_7_7_self_assessor_3 = data.lodge_bar_7_7_self_assessor_3;
				$scope.lodge_bar_7_0_self_assessor_3 = data.lodge_bar_7_0_self_assessor_3;
				//Bar and Subsections Average
				$scope.lodge_bar_7_1_average = ((data.lodge_bar_7_1_self_assessor_1 + data.lodge_bar_7_1_self_assessor_2 + data.lodge_bar_7_1_self_assessor_3)/3);
				$scope.lodge_bar_7_2_average = ((data.lodge_bar_7_2_self_assessor_1 + data.lodge_bar_7_2_self_assessor_2 + data.lodge_bar_7_2_self_assessor_3)/3);
				$scope.lodge_bar_7_3_average = ((data.lodge_bar_7_3_self_assessor_1 + data.lodge_bar_7_3_self_assessor_2 + data.lodge_bar_7_3_self_assessor_3)/3);
				$scope.lodge_bar_7_4_average = ((data.lodge_bar_7_4_self_assessor_1 + data.lodge_bar_7_4_self_assessor_2 + data.lodge_bar_7_4_self_assessor_3)/3);
				$scope.lodge_bar_7_5_average = ((data.lodge_bar_7_5_self_assessor_1 + data.lodge_bar_7_5_self_assessor_2 + data.lodge_bar_7_5_self_assessor_3)/3);
				$scope.lodge_bar_7_6_average = ((data.lodge_bar_7_6_self_assessor_1 + data.lodge_bar_7_6_self_assessor_2 + data.lodge_bar_7_6_self_assessor_3)/3);
				$scope.lodge_bar_7_7_average = ((data.lodge_bar_7_7_self_assessor_1 + data.lodge_bar_7_7_self_assessor_2 + data.lodge_bar_7_7_self_assessor_3)/3);
				$scope.lodge_bar_7_0_average = ((data.lodge_bar_7_0_self_assessor_1 + data.lodge_bar_7_0_self_assessor_2 + data.lodge_bar_7_0_self_assessor_3)/3);

				//Bar reconcilliation
				$scope.lodge_bar_not_reconciled = false;
				//7_1
				$scope.lodge_bar_7_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_1_self_assessor_1 - $scope.lodge_bar_7_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_1_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_1_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_1_self_assessor_1 - $scope.lodge_bar_7_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_1_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_1_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_1_self_assessor_2 - $scope.lodge_bar_7_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_1_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_1_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				
				$scope.lodge_bar_7_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_2_self_assessor_1 - $scope.lodge_bar_7_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_2_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_2_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_2_self_assessor_1 - $scope.lodge_bar_7_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_2_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_2_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_2_self_assessor_2 - $scope.lodge_bar_7_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_2_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_2_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }

				$scope.lodge_bar_7_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_3_self_assessor_1 - $scope.lodge_bar_7_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_3_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_3_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_3_self_assessor_1 - $scope.lodge_bar_7_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_3_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_3_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_3_self_assessor_2 - $scope.lodge_bar_7_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_3_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_3_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }



				$scope.lodge_bar_7_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_4_self_assessor_1 - $scope.lodge_bar_7_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_4_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_4_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_4_self_assessor_1 - $scope.lodge_bar_7_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_4_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_4_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_4_self_assessor_2 - $scope.lodge_bar_7_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_4_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_4_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }



				$scope.lodge_bar_7_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_5_self_assessor_1 - $scope.lodge_bar_7_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_5_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_5_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_5_self_assessor_1 - $scope.lodge_bar_7_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_5_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_5_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_5_self_assessor_2 - $scope.lodge_bar_7_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_5_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_5_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }



				$scope.lodge_bar_7_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_6_self_assessor_1 - $scope.lodge_bar_7_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_6_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_6_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_6_self_assessor_1 - $scope.lodge_bar_7_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_6_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_6_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_6_self_assessor_2 - $scope.lodge_bar_7_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_6_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_6_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }



				$scope.lodge_bar_7_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_bar_7_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_bar_7_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_bar_7_7_self_assessor_1 - $scope.lodge_bar_7_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_bar_7_7_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_7_self_assessor_2_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_7_self_assessor_1 - $scope.lodge_bar_7_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_7_self_assessor_1_not_reconciled = true; $scope.lodge_bar_7_7_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }
				if (Math.abs($scope.lodge_bar_7_7_self_assessor_2 - $scope.lodge_bar_7_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_bar_7_7_self_assessor_2_not_reconciled = true; $scope.lodge_bar_7_7_self_assessor_3_not_reconciled = true; $scope.lodge_bar_not_reconciled = true; }


			//KITCHEN 8.0				
				//Single Assessor
				$scope.lodge_kitchen_8_1_self_self = data.lodge_kitchen_8_1_self_self;
				$scope.lodge_kitchen_8_2_self_self = data.lodge_kitchen_8_2_self_self;
				$scope.lodge_kitchen_8_3_self_self = data.lodge_kitchen_8_3_self_self;
				$scope.lodge_kitchen_8_4_self_self = data.lodge_kitchen_8_4_self_self;
				$scope.lodge_kitchen_8_5_self_self = data.lodge_kitchen_8_5_self_self;
				$scope.lodge_kitchen_8_6_self_self = data.lodge_kitchen_8_6_self_self;
				$scope.lodge_kitchen_8_7_self_self = data.lodge_kitchen_8_7_self_self;
				$scope.lodge_kitchen_8_8_self_self = data.lodge_kitchen_8_8_self_self;
				$scope.lodge_kitchen_8_9_self_self = data.lodge_kitchen_8_9_self_self;
				$scope.lodge_kitchen_8_10_self_self = data.lodge_kitchen_8_10_self_self;
				$scope.lodge_kitchen_8_11_self_self = data.lodge_kitchen_8_11_self_self;
				$scope.lodge_kitchen_8_12_self_self = data.lodge_kitchen_8_12_self_self;
				$scope.lodge_kitchen_8_0_self_self = data.lodge_kitchen_8_0_self_self;

				//Assessor 1
				$scope.lodge_kitchen_8_1_self_assessor_1 = data.lodge_kitchen_8_1_self_assessor_1;
				$scope.lodge_kitchen_8_2_self_assessor_1 = data.lodge_kitchen_8_2_self_assessor_1;
				$scope.lodge_kitchen_8_3_self_assessor_1 = data.lodge_kitchen_8_3_self_assessor_1;
				$scope.lodge_kitchen_8_4_self_assessor_1 = data.lodge_kitchen_8_4_self_assessor_1;
				$scope.lodge_kitchen_8_5_self_assessor_1 = data.lodge_kitchen_8_5_self_assessor_1;
				$scope.lodge_kitchen_8_6_self_assessor_1 = data.lodge_kitchen_8_6_self_assessor_1;
				$scope.lodge_kitchen_8_7_self_assessor_1 = data.lodge_kitchen_8_7_self_assessor_1;
				$scope.lodge_kitchen_8_8_self_assessor_1 = data.lodge_kitchen_8_8_self_assessor_1;
				$scope.lodge_kitchen_8_9_self_assessor_1 = data.lodge_kitchen_8_9_self_assessor_1;
				$scope.lodge_kitchen_8_10_self_assessor_1 = data.lodge_kitchen_8_10_self_assessor_1;
				$scope.lodge_kitchen_8_11_self_assessor_1 = data.lodge_kitchen_8_11_self_assessor_1;
				$scope.lodge_kitchen_8_12_self_assessor_1 = data.lodge_kitchen_8_12_self_assessor_1;
				$scope.lodge_kitchen_8_0_self_assessor_1 = data.lodge_kitchen_8_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_kitchen_8_1_self_assessor_2 = data.lodge_kitchen_8_1_self_assessor_2;
				$scope.lodge_kitchen_8_2_self_assessor_2 = data.lodge_kitchen_8_2_self_assessor_2;
				$scope.lodge_kitchen_8_3_self_assessor_2 = data.lodge_kitchen_8_3_self_assessor_2;
				$scope.lodge_kitchen_8_4_self_assessor_2 = data.lodge_kitchen_8_4_self_assessor_2;
				$scope.lodge_kitchen_8_5_self_assessor_2 = data.lodge_kitchen_8_5_self_assessor_2;
				$scope.lodge_kitchen_8_6_self_assessor_2 = data.lodge_kitchen_8_6_self_assessor_2;
				$scope.lodge_kitchen_8_7_self_assessor_2 = data.lodge_kitchen_8_7_self_assessor_2;
				$scope.lodge_kitchen_8_8_self_assessor_2 = data.lodge_kitchen_8_8_self_assessor_2;
				$scope.lodge_kitchen_8_9_self_assessor_2 = data.lodge_kitchen_8_9_self_assessor_2;
				$scope.lodge_kitchen_8_10_self_assessor_2 = data.lodge_kitchen_8_10_self_assessor_2;
				$scope.lodge_kitchen_8_11_self_assessor_2 = data.lodge_kitchen_8_11_self_assessor_2;
				$scope.lodge_kitchen_8_12_self_assessor_2 = data.lodge_kitchen_8_12_self_assessor_2;
				$scope.lodge_kitchen_8_0_self_assessor_2 = data.lodge_kitchen_8_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_kitchen_8_1_self_assessor_3 = data.lodge_kitchen_8_1_self_assessor_3;
				$scope.lodge_kitchen_8_2_self_assessor_3 = data.lodge_kitchen_8_2_self_assessor_3;
				$scope.lodge_kitchen_8_3_self_assessor_3 = data.lodge_kitchen_8_3_self_assessor_3;
				$scope.lodge_kitchen_8_4_self_assessor_3 = data.lodge_kitchen_8_4_self_assessor_3;
				$scope.lodge_kitchen_8_5_self_assessor_3 = data.lodge_kitchen_8_5_self_assessor_3;
				$scope.lodge_kitchen_8_6_self_assessor_3 = data.lodge_kitchen_8_6_self_assessor_3;
				$scope.lodge_kitchen_8_7_self_assessor_3 = data.lodge_kitchen_8_7_self_assessor_3;
				$scope.lodge_kitchen_8_8_self_assessor_3 = data.lodge_kitchen_8_8_self_assessor_3;
				$scope.lodge_kitchen_8_9_self_assessor_3 = data.lodge_kitchen_8_9_self_assessor_3;
				$scope.lodge_kitchen_8_10_self_assessor_3 = data.lodge_kitchen_8_10_self_assessor_3;
				$scope.lodge_kitchen_8_11_self_assessor_3 = data.lodge_kitchen_8_11_self_assessor_3;
				$scope.lodge_kitchen_8_12_self_assessor_3 = data.lodge_kitchen_8_12_self_assessor_3;
				$scope.lodge_kitchen_8_0_self_assessor_3 = data.lodge_kitchen_8_0_self_assessor_3;
				//kitchen and Subsections Average
				$scope.lodge_kitchen_8_1_average = ((data.lodge_kitchen_8_1_self_assessor_1 + data.lodge_kitchen_8_1_self_assessor_2 + data.lodge_kitchen_8_1_self_assessor_3)/3);
				$scope.lodge_kitchen_8_2_average = ((data.lodge_kitchen_8_2_self_assessor_1 + data.lodge_kitchen_8_2_self_assessor_2 + data.lodge_kitchen_8_2_self_assessor_3)/3);
				$scope.lodge_kitchen_8_3_average = ((data.lodge_kitchen_8_3_self_assessor_1 + data.lodge_kitchen_8_3_self_assessor_2 + data.lodge_kitchen_8_3_self_assessor_3)/3);
				$scope.lodge_kitchen_8_4_average = ((data.lodge_kitchen_8_4_self_assessor_1 + data.lodge_kitchen_8_4_self_assessor_2 + data.lodge_kitchen_8_4_self_assessor_3)/3);
				$scope.lodge_kitchen_8_5_average = ((data.lodge_kitchen_8_5_self_assessor_1 + data.lodge_kitchen_8_5_self_assessor_2 + data.lodge_kitchen_8_5_self_assessor_3)/3);
				$scope.lodge_kitchen_8_6_average = ((data.lodge_kitchen_8_6_self_assessor_1 + data.lodge_kitchen_8_6_self_assessor_2 + data.lodge_kitchen_8_6_self_assessor_3)/3);
				$scope.lodge_kitchen_8_7_average = ((data.lodge_kitchen_8_7_self_assessor_1 + data.lodge_kitchen_8_7_self_assessor_2 + data.lodge_kitchen_8_7_self_assessor_3)/3);
				$scope.lodge_kitchen_8_8_average = ((data.lodge_kitchen_8_8_self_assessor_1 + data.lodge_kitchen_8_8_self_assessor_2 + data.lodge_kitchen_8_8_self_assessor_3)/3);
				$scope.lodge_kitchen_8_9_average = ((data.lodge_kitchen_8_9_self_assessor_1 + data.lodge_kitchen_8_9_self_assessor_2 + data.lodge_kitchen_8_9_self_assessor_3)/3);
				$scope.lodge_kitchen_8_10_average = ((data.lodge_kitchen_8_10_self_assessor_1 + data.lodge_kitchen_8_10_self_assessor_2 + data.lodge_kitchen_8_10_self_assessor_3)/3);
				$scope.lodge_kitchen_8_11_average = ((data.lodge_kitchen_8_11_self_assessor_1 + data.lodge_kitchen_8_11_self_assessor_2 + data.lodge_kitchen_8_11_self_assessor_3)/3);
				$scope.lodge_kitchen_8_12_average = ((data.lodge_kitchen_8_12_self_assessor_1 + data.lodge_kitchen_8_12_self_assessor_2 + data.lodge_kitchen_8_12_self_assessor_3)/3);
				$scope.lodge_kitchen_8_0_average = ((data.lodge_kitchen_8_0_self_assessor_1 + data.lodge_kitchen_8_0_self_assessor_2 + data.lodge_kitchen_8_0_self_assessor_3)/3);

				//Kitchen Reconcilliation
				$scope.lodge_kitchen_not_reconciled = false;
				//8.1
				$scope.lodge_kitchen_8_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_1_self_assessor_1 - $scope.lodge_kitchen_8_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_1_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_1_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_1_self_assessor_1 - $scope.lodge_kitchen_8_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_1_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_1_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_1_self_assessor_2 - $scope.lodge_kitchen_8_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_1_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_1_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_2_self_assessor_1 - $scope.lodge_kitchen_8_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_2_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_2_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_2_self_assessor_1 - $scope.lodge_kitchen_8_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_2_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_2_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_2_self_assessor_2 - $scope.lodge_kitchen_8_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_2_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_2_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_3_self_assessor_1 - $scope.lodge_kitchen_8_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_3_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_3_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_3_self_assessor_1 - $scope.lodge_kitchen_8_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_3_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_3_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_3_self_assessor_2 - $scope.lodge_kitchen_8_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_3_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_3_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_4_self_assessor_1 - $scope.lodge_kitchen_8_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_4_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_4_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_4_self_assessor_1 - $scope.lodge_kitchen_8_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_4_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_4_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_4_self_assessor_2 - $scope.lodge_kitchen_8_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_4_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_4_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_5_self_assessor_1 - $scope.lodge_kitchen_8_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_5_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_5_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_5_self_assessor_1 - $scope.lodge_kitchen_8_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_5_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_5_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_5_self_assessor_2 - $scope.lodge_kitchen_8_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_5_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_5_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_6_self_assessor_1 - $scope.lodge_kitchen_8_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_6_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_6_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_6_self_assessor_1 - $scope.lodge_kitchen_8_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_6_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_6_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_6_self_assessor_2 - $scope.lodge_kitchen_8_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_6_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_6_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_7_self_assessor_1 - $scope.lodge_kitchen_8_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_7_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_7_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_7_self_assessor_1 - $scope.lodge_kitchen_8_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_7_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_7_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_7_self_assessor_2 - $scope.lodge_kitchen_8_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_7_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_7_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_8_self_assessor_1 - $scope.lodge_kitchen_8_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_8_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_8_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_8_self_assessor_1 - $scope.lodge_kitchen_8_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_8_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_8_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_8_self_assessor_2 - $scope.lodge_kitchen_8_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_8_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_8_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_9_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_9_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_9_self_assessor_1 - $scope.lodge_kitchen_8_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_9_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_9_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_9_self_assessor_1 - $scope.lodge_kitchen_8_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_9_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_9_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_9_self_assessor_2 - $scope.lodge_kitchen_8_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_9_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_9_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_10_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_10_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_10_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_10_self_assessor_1 - $scope.lodge_kitchen_8_10_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_10_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_10_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_10_self_assessor_1 - $scope.lodge_kitchen_8_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_10_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_10_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_10_self_assessor_2 - $scope.lodge_kitchen_8_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_10_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_10_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_11_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_11_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_11_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_11_self_assessor_1 - $scope.lodge_kitchen_8_11_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_11_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_11_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_11_self_assessor_1 - $scope.lodge_kitchen_8_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_11_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_11_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_11_self_assessor_2 - $scope.lodge_kitchen_8_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_11_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_11_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

				$scope.lodge_kitchen_8_12_self_assessor_1_not_reconciled = false;
				$scope.lodge_kitchen_8_12_self_assessor_2_not_reconciled = false;
				$scope.lodge_kitchen_8_12_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_kitchen_8_12_self_assessor_1 - $scope.lodge_kitchen_8_12_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_12_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_12_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_12_self_assessor_1 - $scope.lodge_kitchen_8_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_12_self_assessor_1_not_reconciled = true; $scope.lodge_kitchen_8_12_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }
				if (Math.abs($scope.lodge_kitchen_8_12_self_assessor_2 - $scope.lodge_kitchen_8_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_kitchen_8_12_self_assessor_2_not_reconciled = true; $scope.lodge_kitchen_8_12_self_assessor_3_not_reconciled = true; $scope.lodge_kitchen_not_reconciled = true; }

		//GUEST ROOMS
				//Single Assessor
				$scope.lodge_guest_rooms_9_1_self_self = data.lodge_guest_rooms_9_1_self_self;
				$scope.lodge_guest_rooms_9_2_self_self = data.lodge_guest_rooms_9_2_self_self;
				$scope.lodge_guest_rooms_9_3_self_self = data.lodge_guest_rooms_9_3_self_self;
				$scope.lodge_guest_rooms_9_4_self_self = data.lodge_guest_rooms_9_4_self_self;
				$scope.lodge_guest_rooms_9_5_self_self = data.lodge_guest_rooms_9_5_self_self;
				$scope.lodge_guest_rooms_9_6_self_self = data.lodge_guest_rooms_9_6_self_self;
				$scope.lodge_guest_rooms_9_7_self_self = data.lodge_guest_rooms_9_7_self_self;
				$scope.lodge_guest_rooms_9_8_self_self = data.lodge_guest_rooms_9_8_self_self;
				$scope.lodge_guest_rooms_9_9_self_self = data.lodge_guest_rooms_9_9_self_self;
				$scope.lodge_guest_rooms_9_10_self_self = data.lodge_guest_rooms_9_10_self_self;
				$scope.lodge_guest_rooms_9_11_self_self = data.lodge_guest_rooms_9_11_self_self;
				$scope.lodge_guest_rooms_9_12_self_self = data.lodge_guest_rooms_9_12_self_self;
				$scope.lodge_guest_rooms_9_13_self_self = data.lodge_guest_rooms_9_13_self_self;
				$scope.lodge_guest_rooms_9_14_self_self = data.lodge_guest_rooms_9_14_self_self;
				$scope.lodge_guest_rooms_9_15_self_self = data.lodge_guest_rooms_9_15_self_self;
				$scope.lodge_guest_rooms_9_0_self_self = data.lodge_guest_rooms_9_0_self_self;

				//Assessor 1
				$scope.lodge_guest_rooms_9_1_self_assessor_1 = data.lodge_guest_rooms_9_1_self_assessor_1;
				$scope.lodge_guest_rooms_9_2_self_assessor_1 = data.lodge_guest_rooms_9_2_self_assessor_1;
				$scope.lodge_guest_rooms_9_3_self_assessor_1 = data.lodge_guest_rooms_9_3_self_assessor_1;
				$scope.lodge_guest_rooms_9_4_self_assessor_1 = data.lodge_guest_rooms_9_4_self_assessor_1;
				$scope.lodge_guest_rooms_9_5_self_assessor_1 = data.lodge_guest_rooms_9_5_self_assessor_1;
				$scope.lodge_guest_rooms_9_6_self_assessor_1 = data.lodge_guest_rooms_9_6_self_assessor_1;
				$scope.lodge_guest_rooms_9_7_self_assessor_1 = data.lodge_guest_rooms_9_7_self_assessor_1;
				$scope.lodge_guest_rooms_9_8_self_assessor_1 = data.lodge_guest_rooms_9_8_self_assessor_1;
				$scope.lodge_guest_rooms_9_9_self_assessor_1 = data.lodge_guest_rooms_9_9_self_assessor_1;
				$scope.lodge_guest_rooms_9_10_self_assessor_1 = data.lodge_guest_rooms_9_10_self_assessor_1;
				$scope.lodge_guest_rooms_9_11_self_assessor_1 = data.lodge_guest_rooms_9_11_self_assessor_1;
				$scope.lodge_guest_rooms_9_12_self_assessor_1 = data.lodge_guest_rooms_9_12_self_assessor_1;
				$scope.lodge_guest_rooms_9_13_self_assessor_1 = data.lodge_guest_rooms_9_13_self_assessor_1;
				$scope.lodge_guest_rooms_9_14_self_assessor_1 = data.lodge_guest_rooms_9_14_self_assessor_1;
				$scope.lodge_guest_rooms_9_15_self_assessor_1 = data.lodge_guest_rooms_9_15_self_assessor_1;
				$scope.lodge_guest_rooms_9_0_self_assessor_1 = data.lodge_guest_rooms_9_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_guest_rooms_9_1_self_assessor_2 = data.lodge_guest_rooms_9_1_self_assessor_2;
				$scope.lodge_guest_rooms_9_2_self_assessor_2 = data.lodge_guest_rooms_9_2_self_assessor_2;
				$scope.lodge_guest_rooms_9_3_self_assessor_2 = data.lodge_guest_rooms_9_3_self_assessor_2;
				$scope.lodge_guest_rooms_9_4_self_assessor_2 = data.lodge_guest_rooms_9_4_self_assessor_2;
				$scope.lodge_guest_rooms_9_5_self_assessor_2 = data.lodge_guest_rooms_9_5_self_assessor_2;
				$scope.lodge_guest_rooms_9_6_self_assessor_2 = data.lodge_guest_rooms_9_6_self_assessor_2;
				$scope.lodge_guest_rooms_9_7_self_assessor_2 = data.lodge_guest_rooms_9_7_self_assessor_2;
				$scope.lodge_guest_rooms_9_8_self_assessor_2 = data.lodge_guest_rooms_9_8_self_assessor_2;
				$scope.lodge_guest_rooms_9_9_self_assessor_2 = data.lodge_guest_rooms_9_9_self_assessor_2;
				$scope.lodge_guest_rooms_9_10_self_assessor_2 = data.lodge_guest_rooms_9_10_self_assessor_2;
				$scope.lodge_guest_rooms_9_11_self_assessor_2 = data.lodge_guest_rooms_9_11_self_assessor_2;
				$scope.lodge_guest_rooms_9_12_self_assessor_2 = data.lodge_guest_rooms_9_12_self_assessor_2;
				$scope.lodge_guest_rooms_9_13_self_assessor_2 = data.lodge_guest_rooms_9_13_self_assessor_2;
				$scope.lodge_guest_rooms_9_14_self_assessor_2 = data.lodge_guest_rooms_9_14_self_assessor_2;
				$scope.lodge_guest_rooms_9_15_self_assessor_2 = data.lodge_guest_rooms_9_15_self_assessor_2;
				$scope.lodge_guest_rooms_9_0_self_assessor_2 = data.lodge_guest_rooms_9_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_guest_rooms_9_1_self_assessor_3 = data.lodge_guest_rooms_9_1_self_assessor_3;
				$scope.lodge_guest_rooms_9_2_self_assessor_3 = data.lodge_guest_rooms_9_2_self_assessor_3;
				$scope.lodge_guest_rooms_9_3_self_assessor_3 = data.lodge_guest_rooms_9_3_self_assessor_3;
				$scope.lodge_guest_rooms_9_4_self_assessor_3 = data.lodge_guest_rooms_9_4_self_assessor_3;
				$scope.lodge_guest_rooms_9_5_self_assessor_3 = data.lodge_guest_rooms_9_5_self_assessor_3;
				$scope.lodge_guest_rooms_9_6_self_assessor_3 = data.lodge_guest_rooms_9_6_self_assessor_3;
				$scope.lodge_guest_rooms_9_7_self_assessor_3 = data.lodge_guest_rooms_9_7_self_assessor_3;
				$scope.lodge_guest_rooms_9_8_self_assessor_3 = data.lodge_guest_rooms_9_8_self_assessor_3;
				$scope.lodge_guest_rooms_9_9_self_assessor_3 = data.lodge_guest_rooms_9_9_self_assessor_3;
				$scope.lodge_guest_rooms_9_10_self_assessor_3 = data.lodge_guest_rooms_9_10_self_assessor_3;
				$scope.lodge_guest_rooms_9_11_self_assessor_3 = data.lodge_guest_rooms_9_11_self_assessor_3;
				$scope.lodge_guest_rooms_9_12_self_assessor_3 = data.lodge_guest_rooms_9_12_self_assessor_3;
				$scope.lodge_guest_rooms_9_13_self_assessor_3 = data.lodge_guest_rooms_9_13_self_assessor_3;
				$scope.lodge_guest_rooms_9_14_self_assessor_3 = data.lodge_guest_rooms_9_14_self_assessor_3;
				$scope.lodge_guest_rooms_9_15_self_assessor_3 = data.lodge_guest_rooms_9_15_self_assessor_3;
				$scope.lodge_guest_rooms_9_0_self_assessor_3 = data.lodge_guest_rooms_9_0_self_assessor_3;
				//guest_rooms and subsections Average
				$scope.lodge_guest_rooms_9_1_average = ((data.lodge_guest_rooms_9_1_self_assessor_1 + data.lodge_guest_rooms_9_1_self_assessor_2 + data.lodge_guest_rooms_9_1_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_2_average = ((data.lodge_guest_rooms_9_2_self_assessor_1 + data.lodge_guest_rooms_9_2_self_assessor_2 + data.lodge_guest_rooms_9_2_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_3_average = ((data.lodge_guest_rooms_9_3_self_assessor_1 + data.lodge_guest_rooms_9_3_self_assessor_2 + data.lodge_guest_rooms_9_3_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_4_average = ((data.lodge_guest_rooms_9_4_self_assessor_1 + data.lodge_guest_rooms_9_4_self_assessor_2 + data.lodge_guest_rooms_9_4_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_5_average = ((data.lodge_guest_rooms_9_5_self_assessor_1 + data.lodge_guest_rooms_9_5_self_assessor_2 + data.lodge_guest_rooms_9_5_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_6_average = ((data.lodge_guest_rooms_9_6_self_assessor_1 + data.lodge_guest_rooms_9_6_self_assessor_2 + data.lodge_guest_rooms_9_6_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_7_average = ((data.lodge_guest_rooms_9_7_self_assessor_1 + data.lodge_guest_rooms_9_7_self_assessor_2 + data.lodge_guest_rooms_9_7_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_8_average = ((data.lodge_guest_rooms_9_8_self_assessor_1 + data.lodge_guest_rooms_9_8_self_assessor_2 + data.lodge_guest_rooms_9_8_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_9_average = ((data.lodge_guest_rooms_9_9_self_assessor_1 + data.lodge_guest_rooms_9_9_self_assessor_2 + data.lodge_guest_rooms_9_9_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_10_average = ((data.lodge_guest_rooms_9_10_self_assessor_1 + data.lodge_guest_rooms_9_10_self_assessor_2 + data.lodge_guest_rooms_9_10_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_11_average = ((data.lodge_guest_rooms_9_11_self_assessor_1 + data.lodge_guest_rooms_9_11_self_assessor_2 + data.lodge_guest_rooms_9_11_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_12_average = ((data.lodge_guest_rooms_9_12_self_assessor_1 + data.lodge_guest_rooms_9_12_self_assessor_2 + data.lodge_guest_rooms_9_12_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_13_average = ((data.lodge_guest_rooms_9_13_self_assessor_1 + data.lodge_guest_rooms_9_13_self_assessor_2 + data.lodge_guest_rooms_9_13_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_14_average = ((data.lodge_guest_rooms_9_14_self_assessor_1 + data.lodge_guest_rooms_9_14_self_assessor_2 + data.lodge_guest_rooms_9_14_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_15_average = ((data.lodge_guest_rooms_9_15_self_assessor_1 + data.lodge_guest_rooms_9_15_self_assessor_2 + data.lodge_guest_rooms_9_15_self_assessor_3)/3);
				$scope.lodge_guest_rooms_9_0_average = ((data.lodge_guest_rooms_9_0_self_assessor_1 + data.lodge_guest_rooms_9_0_self_assessor_2 + data.lodge_guest_rooms_9_0_self_assessor_3)/3);

				//Guest_rooms Reconcilliation
				$scope.lodge_guest_rooms_not_reconciled = false;
				//9_1
				$scope.lodge_guest_rooms_9_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_1_self_assessor_1 - $scope.lodge_guest_rooms_9_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_1_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_1_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_1_self_assessor_1 - $scope.lodge_guest_rooms_9_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_1_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_1_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_1_self_assessor_2 - $scope.lodge_guest_rooms_9_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_1_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_1_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_2_self_assessor_1 - $scope.lodge_guest_rooms_9_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_2_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_2_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_2_self_assessor_1 - $scope.lodge_guest_rooms_9_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_2_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_2_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_2_self_assessor_2 - $scope.lodge_guest_rooms_9_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_2_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_2_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_3_self_assessor_1 - $scope.lodge_guest_rooms_9_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_3_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_3_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_3_self_assessor_1 - $scope.lodge_guest_rooms_9_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_3_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_3_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_3_self_assessor_2 - $scope.lodge_guest_rooms_9_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_3_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_3_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_4_self_assessor_1 - $scope.lodge_guest_rooms_9_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_4_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_4_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_4_self_assessor_1 - $scope.lodge_guest_rooms_9_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_4_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_4_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_4_self_assessor_2 - $scope.lodge_guest_rooms_9_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_4_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_4_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_5_self_assessor_1 - $scope.lodge_guest_rooms_9_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_5_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_5_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_5_self_assessor_1 - $scope.lodge_guest_rooms_9_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_5_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_5_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_5_self_assessor_2 - $scope.lodge_guest_rooms_9_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_5_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_5_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_6_self_assessor_1 - $scope.lodge_guest_rooms_9_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_6_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_6_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_6_self_assessor_1 - $scope.lodge_guest_rooms_9_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_6_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_6_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_6_self_assessor_2 - $scope.lodge_guest_rooms_9_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_6_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_6_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_7_self_assessor_1 - $scope.lodge_guest_rooms_9_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_7_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_7_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_7_self_assessor_1 - $scope.lodge_guest_rooms_9_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_7_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_7_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_7_self_assessor_2 - $scope.lodge_guest_rooms_9_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_7_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_7_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_8_self_assessor_1 - $scope.lodge_guest_rooms_9_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_8_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_8_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_8_self_assessor_1 - $scope.lodge_guest_rooms_9_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_8_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_8_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_8_self_assessor_2 - $scope.lodge_guest_rooms_9_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_8_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_8_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_9_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_9_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_9_self_assessor_1 - $scope.lodge_guest_rooms_9_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_9_self_assessor_1 - $scope.lodge_guest_rooms_9_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_9_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_9_self_assessor_2 - $scope.lodge_guest_rooms_9_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_9_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_9_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_10_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_10_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_10_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_10_self_assessor_1 - $scope.lodge_guest_rooms_9_10_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_10_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_10_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_10_self_assessor_1 - $scope.lodge_guest_rooms_9_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_10_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_10_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_10_self_assessor_2 - $scope.lodge_guest_rooms_9_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_10_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_10_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_11_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_11_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_11_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_11_self_assessor_1 - $scope.lodge_guest_rooms_9_11_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_11_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_11_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_11_self_assessor_1 - $scope.lodge_guest_rooms_9_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_11_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_11_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_11_self_assessor_2 - $scope.lodge_guest_rooms_9_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_11_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_11_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_12_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_12_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_12_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_12_self_assessor_1 - $scope.lodge_guest_rooms_9_12_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_12_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_12_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_12_self_assessor_1 - $scope.lodge_guest_rooms_9_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_12_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_12_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_12_self_assessor_2 - $scope.lodge_guest_rooms_9_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_12_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_12_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_13_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_13_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_13_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_13_self_assessor_1 - $scope.lodge_guest_rooms_9_13_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_13_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_13_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_13_self_assessor_1 - $scope.lodge_guest_rooms_9_13_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_13_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_13_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_13_self_assessor_2 - $scope.lodge_guest_rooms_9_13_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_13_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_13_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_14_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_14_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_14_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_14_self_assessor_1 - $scope.lodge_guest_rooms_9_14_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_14_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_14_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_14_self_assessor_1 - $scope.lodge_guest_rooms_9_14_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_14_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_14_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_14_self_assessor_2 - $scope.lodge_guest_rooms_9_14_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_14_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_14_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

				$scope.lodge_guest_rooms_9_15_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_rooms_9_15_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_rooms_9_15_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_rooms_9_15_self_assessor_1 - $scope.lodge_guest_rooms_9_15_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_15_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_15_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_15_self_assessor_1 - $scope.lodge_guest_rooms_9_15_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_15_self_assessor_1_not_reconciled = true; $scope.lodge_guest_rooms_9_15_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_rooms_9_15_self_assessor_2 - $scope.lodge_guest_rooms_9_15_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_rooms_9_15_self_assessor_2_not_reconciled = true; $scope.lodge_guest_rooms_9_15_self_assessor_3_not_reconciled = true; $scope.lodge_guest_rooms_not_reconciled = true; }

			//GUEST BATHROOMS				
				//Single Assessor
				$scope.lodge_guest_bathrooms_10_1_self_self = data.lodge_guest_bathrooms_10_1_self_self;
				$scope.lodge_guest_bathrooms_10_2_self_self = data.lodge_guest_bathrooms_10_2_self_self;
				$scope.lodge_guest_bathrooms_10_3_self_self = data.lodge_guest_bathrooms_10_3_self_self;
				$scope.lodge_guest_bathrooms_10_4_self_self = data.lodge_guest_bathrooms_10_4_self_self;
				$scope.lodge_guest_bathrooms_10_5_self_self = data.lodge_guest_bathrooms_10_5_self_self;
				$scope.lodge_guest_bathrooms_10_6_self_self = data.lodge_guest_bathrooms_10_6_self_self;
				$scope.lodge_guest_bathrooms_10_7_self_self = data.lodge_guest_bathrooms_10_7_self_self;
				$scope.lodge_guest_bathrooms_10_8_self_self = data.lodge_guest_bathrooms_10_8_self_self;
				$scope.lodge_guest_bathrooms_10_9_self_self = data.lodge_guest_bathrooms_10_9_self_self;
				$scope.lodge_guest_bathrooms_10_0_self_self = data.lodge_guest_bathrooms_10_0_self_self;

				//Assessor 1
				$scope.lodge_guest_bathrooms_10_1_self_assessor_1 = data.lodge_guest_bathrooms_10_1_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_2_self_assessor_1 = data.lodge_guest_bathrooms_10_2_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_3_self_assessor_1 = data.lodge_guest_bathrooms_10_3_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_4_self_assessor_1 = data.lodge_guest_bathrooms_10_4_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_5_self_assessor_1 = data.lodge_guest_bathrooms_10_5_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_6_self_assessor_1 = data.lodge_guest_bathrooms_10_6_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_7_self_assessor_1 = data.lodge_guest_bathrooms_10_7_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_8_self_assessor_1 = data.lodge_guest_bathrooms_10_8_self_assessor_1;
				$scope.lodge_guest_bathrooms_10_9_self_assessor_1 = data.lodge_guest_bathrooms_10_9_self_assessor_1
				$scope.lodge_guest_bathrooms_10_0_self_assessor_1 = data.lodge_guest_bathrooms_10_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_guest_bathrooms_10_1_self_assessor_2 = data.lodge_guest_bathrooms_10_1_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_2_self_assessor_2 = data.lodge_guest_bathrooms_10_2_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_3_self_assessor_2 = data.lodge_guest_bathrooms_10_3_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_4_self_assessor_2 = data.lodge_guest_bathrooms_10_4_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_5_self_assessor_2 = data.lodge_guest_bathrooms_10_5_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_6_self_assessor_2 = data.lodge_guest_bathrooms_10_6_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_7_self_assessor_2 = data.lodge_guest_bathrooms_10_7_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_8_self_assessor_2 = data.lodge_guest_bathrooms_10_8_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_9_self_assessor_2 = data.lodge_guest_bathrooms_10_9_self_assessor_2;
				$scope.lodge_guest_bathrooms_10_0_self_assessor_2 = data.lodge_guest_bathrooms_10_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_guest_bathrooms_10_1_self_assessor_3 = data.lodge_guest_bathrooms_10_1_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_2_self_assessor_3 = data.lodge_guest_bathrooms_10_2_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_3_self_assessor_3 = data.lodge_guest_bathrooms_10_3_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_4_self_assessor_3 = data.lodge_guest_bathrooms_10_4_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_5_self_assessor_3 = data.lodge_guest_bathrooms_10_5_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_6_self_assessor_3 = data.lodge_guest_bathrooms_10_6_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_7_self_assessor_3 = data.lodge_guest_bathrooms_10_7_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_8_self_assessor_3 = data.lodge_guest_bathrooms_10_8_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_9_self_assessor_3 = data.lodge_guest_bathrooms_10_9_self_assessor_3;
				$scope.lodge_guest_bathrooms_10_0_self_assessor_3 = data.lodge_guest_bathrooms_10_0_self_assessor_3;
				//lodge_guest_bathrooms and Subsections Average
				$scope.lodge_guest_bathrooms_10_1_average = ((data.lodge_guest_bathrooms_10_1_self_assessor_1 + data.lodge_guest_bathrooms_10_1_self_assessor_2 + data.lodge_guest_bathrooms_10_1_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_2_average = ((data.lodge_guest_bathrooms_10_2_self_assessor_1 + data.lodge_guest_bathrooms_10_2_self_assessor_2 + data.lodge_guest_bathrooms_10_2_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_3_average = ((data.lodge_guest_bathrooms_10_3_self_assessor_1 + data.lodge_guest_bathrooms_10_3_self_assessor_2 + data.lodge_guest_bathrooms_10_3_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_4_average = ((data.lodge_guest_bathrooms_10_4_self_assessor_1 + data.lodge_guest_bathrooms_10_4_self_assessor_2 + data.lodge_guest_bathrooms_10_4_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_5_average = ((data.lodge_guest_bathrooms_10_5_self_assessor_1 + data.lodge_guest_bathrooms_10_5_self_assessor_2 + data.lodge_guest_bathrooms_10_5_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_6_average = ((data.lodge_guest_bathrooms_10_6_self_assessor_1 + data.lodge_guest_bathrooms_10_6_self_assessor_2 + data.lodge_guest_bathrooms_10_6_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_7_average = ((data.lodge_guest_bathrooms_10_7_self_assessor_1 + data.lodge_guest_bathrooms_10_7_self_assessor_2 + data.lodge_guest_bathrooms_10_7_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_8_average = ((data.lodge_guest_bathrooms_10_8_self_assessor_1 + data.lodge_guest_bathrooms_10_8_self_assessor_2 + data.lodge_guest_bathrooms_10_8_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_9_average = ((data.lodge_guest_bathrooms_10_9_self_assessor_1 + data.lodge_guest_bathrooms_10_9_self_assessor_2 + data.lodge_guest_bathrooms_10_9_self_assessor_3)/3);
				$scope.lodge_guest_bathrooms_10_0_average = ((data.lodge_guest_bathrooms_10_0_self_assessor_1 + data.lodge_guest_bathrooms_10_0_self_assessor_2 + data.lodge_guest_bathrooms_10_0_self_assessor_3)/3);

				//guest bathrooms Reconcilliation
				$scope.lodge_guest_bathrooms_not_reconciled = false;
				//10.1
				$scope.lodge_guest_bathrooms_10_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_1_self_assessor_1 - $scope.lodge_guest_bathrooms_10_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_1_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_1_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_1_self_assessor_1 - $scope.lodge_guest_bathrooms_10_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_1_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_1_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_1_self_assessor_2 - $scope.lodge_guest_bathrooms_10_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_1_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_1_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_2_self_assessor_1 - $scope.lodge_guest_bathrooms_10_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_2_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_2_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_2_self_assessor_1 - $scope.lodge_guest_bathrooms_10_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_2_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_2_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_2_self_assessor_2 - $scope.lodge_guest_bathrooms_10_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_2_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_2_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_3_self_assessor_1 - $scope.lodge_guest_bathrooms_10_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_3_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_3_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_3_self_assessor_1 - $scope.lodge_guest_bathrooms_10_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_3_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_3_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_3_self_assessor_2 - $scope.lodge_guest_bathrooms_10_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_3_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_3_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_4_self_assessor_1 - $scope.lodge_guest_bathrooms_10_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_4_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_4_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_4_self_assessor_1 - $scope.lodge_guest_bathrooms_10_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_4_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_4_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_4_self_assessor_2 - $scope.lodge_guest_bathrooms_10_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_4_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_4_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_5_self_assessor_1 - $scope.lodge_guest_bathrooms_10_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_5_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_5_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_5_self_assessor_1 - $scope.lodge_guest_bathrooms_10_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_5_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_5_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_5_self_assessor_2 - $scope.lodge_guest_bathrooms_10_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_5_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_5_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_6_self_assessor_1 - $scope.lodge_guest_bathrooms_10_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_6_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_6_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_6_self_assessor_1 - $scope.lodge_guest_bathrooms_10_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_6_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_6_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_6_self_assessor_2 - $scope.lodge_guest_bathrooms_10_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_6_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_6_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_7_self_assessor_1 - $scope.lodge_guest_bathrooms_10_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_7_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_7_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_7_self_assessor_1 - $scope.lodge_guest_bathrooms_10_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_7_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_7_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_7_self_assessor_2 - $scope.lodge_guest_bathrooms_10_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_7_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_7_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_8_self_assessor_1 - $scope.lodge_guest_bathrooms_10_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_8_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_8_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_8_self_assessor_1 - $scope.lodge_guest_bathrooms_10_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_8_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_8_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_8_self_assessor_2 - $scope.lodge_guest_bathrooms_10_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_8_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_8_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }

				$scope.lodge_guest_bathrooms_10_9_self_assessor_1_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_9_self_assessor_2_not_reconciled = false;
				$scope.lodge_guest_bathrooms_10_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_guest_bathrooms_10_9_self_assessor_1 - $scope.lodge_guest_bathrooms_10_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_9_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_9_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_9_self_assessor_1 - $scope.lodge_guest_bathrooms_10_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_9_self_assessor_1_not_reconciled = true; $scope.lodge_guest_bathrooms_10_9_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }
				if (Math.abs($scope.lodge_guest_bathrooms_10_9_self_assessor_2 - $scope.lodge_guest_bathrooms_10_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_guest_bathrooms_10_9_self_assessor_2_not_reconciled = true; $scope.lodge_guest_bathrooms_10_9_self_assessor_3_not_reconciled = true; $scope.lodge_guest_bathrooms_not_reconciled = true; }


		//SUITES
				//Single Assessor
				$scope.lodge_suites_11_1_self_self = data.lodge_suites_11_1_self_self;
				$scope.lodge_suites_11_2_self_self = data.lodge_suites_11_2_self_self;
				$scope.lodge_suites_11_3_self_self = data.lodge_suites_11_3_self_self;
				$scope.lodge_suites_11_4_self_self = data.lodge_suites_11_4_self_self;
				$scope.lodge_suites_11_5_self_self = data.lodge_suites_11_5_self_self;
				$scope.lodge_suites_11_6_self_self = data.lodge_suites_11_6_self_self;
				$scope.lodge_suites_11_7_self_self = data.lodge_suites_11_7_self_self;
				$scope.lodge_suites_11_8_self_self = data.lodge_suites_11_8_self_self;
				$scope.lodge_suites_11_9_self_self = data.lodge_suites_11_9_self_self;
				$scope.lodge_suites_11_10_self_self = data.lodge_suites_11_10_self_self;
				$scope.lodge_suites_11_11_self_self = data.lodge_suites_11_11_self_self;
				$scope.lodge_suites_11_12_self_self = data.lodge_suites_11_12_self_self;
				$scope.lodge_suites_11_13_self_self = data.lodge_suites_11_13_self_self;
				$scope.lodge_suites_11_14_self_self = data.lodge_suites_11_14_self_self;
				$scope.lodge_suites_11_15_self_self = data.lodge_suites_11_15_self_self;
				$scope.lodge_suites_11_16_self_self = data.lodge_suites_11_16_self_self;
				$scope.lodge_suites_11_17_self_self = data.lodge_suites_11_17_self_self;
				$scope.lodge_suites_11_18_self_self = data.lodge_suites_11_18_self_self;
				$scope.lodge_suites_11_19_self_self = data.lodge_suites_11_19_self_self;
				$scope.lodge_suites_11_20_self_self = data.lodge_suites_11_20_self_self;
				$scope.lodge_suites_11_0_self_self = data.lodge_suites_11_0_self_self;

				//Assessor 1
				$scope.lodge_suites_11_1_self_assessor_1 = data.lodge_suites_11_1_self_assessor_1;
				$scope.lodge_suites_11_2_self_assessor_1 = data.lodge_suites_11_2_self_assessor_1;
				$scope.lodge_suites_11_3_self_assessor_1 = data.lodge_suites_11_3_self_assessor_1;
				$scope.lodge_suites_11_4_self_assessor_1 = data.lodge_suites_11_4_self_assessor_1;
				$scope.lodge_suites_11_5_self_assessor_1 = data.lodge_suites_11_5_self_assessor_1;
				$scope.lodge_suites_11_6_self_assessor_1 = data.lodge_suites_11_6_self_assessor_1;
				$scope.lodge_suites_11_7_self_assessor_1 = data.lodge_suites_11_7_self_assessor_1;
				$scope.lodge_suites_11_8_self_assessor_1 = data.lodge_suites_11_8_self_assessor_1;
				$scope.lodge_suites_11_9_self_assessor_1 = data.lodge_suites_11_9_self_assessor_1;
				$scope.lodge_suites_11_10_self_assessor_1 = data.lodge_suites_11_10_self_assessor_1;
				$scope.lodge_suites_11_11_self_assessor_1 = data.lodge_suites_11_11_self_assessor_1;
				$scope.lodge_suites_11_12_self_assessor_1 = data.lodge_suites_11_12_self_assessor_1;
				$scope.lodge_suites_11_13_self_assessor_1 = data.lodge_suites_11_13_self_assessor_1;
				$scope.lodge_suites_11_14_self_assessor_1 = data.lodge_suites_11_14_self_assessor_1;
				$scope.lodge_suites_11_15_self_assessor_1 = data.lodge_suites_11_15_self_assessor_1;
				$scope.lodge_suites_11_16_self_assessor_1 = data.lodge_suites_11_16_self_assessor_1;
				$scope.lodge_suites_11_17_self_assessor_1 = data.lodge_suites_11_17_self_assessor_1;
				$scope.lodge_suites_11_18_self_assessor_1 = data.lodge_suites_11_18_self_assessor_1;
				$scope.lodge_suites_11_19_self_assessor_1 = data.lodge_suites_11_19_self_assessor_1;
				$scope.lodge_suites_11_20_self_assessor_1 = data.lodge_suites_11_20_self_assessor_1;
				$scope.lodge_suites_11_0_self_assessor_1 = data.lodge_suites_11_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_suites_11_1_self_assessor_2 = data.lodge_suites_11_1_self_assessor_2;
				$scope.lodge_suites_11_2_self_assessor_2 = data.lodge_suites_11_2_self_assessor_2;
				$scope.lodge_suites_11_3_self_assessor_2 = data.lodge_suites_11_3_self_assessor_2;
				$scope.lodge_suites_11_4_self_assessor_2 = data.lodge_suites_11_4_self_assessor_2;
				$scope.lodge_suites_11_5_self_assessor_2 = data.lodge_suites_11_5_self_assessor_2;
				$scope.lodge_suites_11_6_self_assessor_2 = data.lodge_suites_11_6_self_assessor_2;
				$scope.lodge_suites_11_7_self_assessor_2 = data.lodge_suites_11_7_self_assessor_2;
				$scope.lodge_suites_11_8_self_assessor_2 = data.lodge_suites_11_8_self_assessor_2;
				$scope.lodge_suites_11_9_self_assessor_2 = data.lodge_suites_11_9_self_assessor_2;
				$scope.lodge_suites_11_10_self_assessor_2 = data.lodge_suites_11_10_self_assessor_2;
				$scope.lodge_suites_11_11_self_assessor_2 = data.lodge_suites_11_11_self_assessor_2;
				$scope.lodge_suites_11_12_self_assessor_2 = data.lodge_suites_11_12_self_assessor_2;
				$scope.lodge_suites_11_13_self_assessor_2 = data.lodge_suites_11_13_self_assessor_2;
				$scope.lodge_suites_11_14_self_assessor_2 = data.lodge_suites_11_14_self_assessor_2;
				$scope.lodge_suites_11_15_self_assessor_2 = data.lodge_suites_11_15_self_assessor_2;
				$scope.lodge_suites_11_16_self_assessor_2 = data.lodge_suites_11_16_self_assessor_2;
				$scope.lodge_suites_11_17_self_assessor_2 = data.lodge_suites_11_17_self_assessor_2;
				$scope.lodge_suites_11_18_self_assessor_2 = data.lodge_suites_11_18_self_assessor_2;
				$scope.lodge_suites_11_19_self_assessor_2 = data.lodge_suites_11_19_self_assessor_2;
				$scope.lodge_suites_11_20_self_assessor_2 = data.lodge_suites_11_20_self_assessor_2;
				$scope.lodge_suites_11_0_self_assessor_2 = data.lodge_suites_11_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_suites_11_1_self_assessor_3 = data.lodge_suites_11_1_self_assessor_3;
				$scope.lodge_suites_11_2_self_assessor_3 = data.lodge_suites_11_2_self_assessor_3;
				$scope.lodge_suites_11_3_self_assessor_3 = data.lodge_suites_11_3_self_assessor_3;
				$scope.lodge_suites_11_4_self_assessor_3 = data.lodge_suites_11_4_self_assessor_3;
				$scope.lodge_suites_11_5_self_assessor_3 = data.lodge_suites_11_5_self_assessor_3;
				$scope.lodge_suites_11_6_self_assessor_3 = data.lodge_suites_11_6_self_assessor_3;
				$scope.lodge_suites_11_7_self_assessor_3 = data.lodge_suites_11_7_self_assessor_3;
				$scope.lodge_suites_11_8_self_assessor_3 = data.lodge_suites_11_8_self_assessor_3;
				$scope.lodge_suites_11_9_self_assessor_3 = data.lodge_suites_11_9_self_assessor_3;
				$scope.lodge_suites_11_10_self_assessor_3 = data.lodge_suites_11_10_self_assessor_3;
				$scope.lodge_suites_11_11_self_assessor_3 = data.lodge_suites_11_11_self_assessor_3;
				$scope.lodge_suites_11_12_self_assessor_3 = data.lodge_suites_11_12_self_assessor_3;
				$scope.lodge_suites_11_13_self_assessor_3 = data.lodge_suites_11_13_self_assessor_3;
				$scope.lodge_suites_11_14_self_assessor_3 = data.lodge_suites_11_14_self_assessor_3;
				$scope.lodge_suites_11_15_self_assessor_3 = data.lodge_suites_11_15_self_assessor_3;
				$scope.lodge_suites_11_16_self_assessor_3 = data.lodge_suites_11_16_self_assessor_3;
				$scope.lodge_suites_11_17_self_assessor_3 = data.lodge_suites_11_17_self_assessor_3;
				$scope.lodge_suites_11_18_self_assessor_3 = data.lodge_suites_11_18_self_assessor_3;
				$scope.lodge_suites_11_19_self_assessor_3 = data.lodge_suites_11_19_self_assessor_3;
				$scope.lodge_suites_11_20_self_assessor_3 = data.lodge_suites_11_20_self_assessor_3;
				$scope.lodge_suites_11_0_self_assessor_3 = data.lodge_suites_11_0_self_assessor_3;
				//Suites and subsections average
				$scope.lodge_suites_11_1_average = ((data.lodge_suites_11_1_self_assessor_1 + data.lodge_suites_11_1_self_assessor_2 + data.lodge_suites_11_1_self_assessor_3)/3);
				$scope.lodge_suites_11_2_average = ((data.lodge_suites_11_2_self_assessor_1 + data.lodge_suites_11_2_self_assessor_2 + data.lodge_suites_11_2_self_assessor_3)/3);
				$scope.lodge_suites_11_3_average = ((data.lodge_suites_11_3_self_assessor_1 + data.lodge_suites_11_3_self_assessor_2 + data.lodge_suites_11_3_self_assessor_3)/3);
				$scope.lodge_suites_11_4_average = ((data.lodge_suites_11_4_self_assessor_1 + data.lodge_suites_11_4_self_assessor_2 + data.lodge_suites_11_4_self_assessor_3)/3);
				$scope.lodge_suites_11_5_average = ((data.lodge_suites_11_5_self_assessor_1 + data.lodge_suites_11_5_self_assessor_2 + data.lodge_suites_11_5_self_assessor_3)/3);
				$scope.lodge_suites_11_6_average = ((data.lodge_suites_11_6_self_assessor_1 + data.lodge_suites_11_6_self_assessor_2 + data.lodge_suites_11_6_self_assessor_3)/3);
				$scope.lodge_suites_11_7_average = ((data.lodge_suites_11_7_self_assessor_1 + data.lodge_suites_11_7_self_assessor_2 + data.lodge_suites_11_7_self_assessor_3)/3);
				$scope.lodge_suites_11_8_average = ((data.lodge_suites_11_8_self_assessor_1 + data.lodge_suites_11_8_self_assessor_2 + data.lodge_suites_11_8_self_assessor_3)/3);
				$scope.lodge_suites_11_9_average = ((data.lodge_suites_11_9_self_assessor_1 + data.lodge_suites_11_9_self_assessor_2 + data.lodge_suites_11_9_self_assessor_3)/3);
				$scope.lodge_suites_11_10_average = ((data.lodge_suites_11_10_self_assessor_1 + data.lodge_suites_11_10_self_assessor_2 + data.lodge_suites_11_10_self_assessor_3)/3);
				$scope.lodge_suites_11_11_average = ((data.lodge_suites_11_11_self_assessor_1 + data.lodge_suites_11_11_self_assessor_2 + data.lodge_suites_11_11_self_assessor_3)/3);
				$scope.lodge_suites_11_12_average = ((data.lodge_suites_11_12_self_assessor_1 + data.lodge_suites_11_12_self_assessor_2 + data.lodge_suites_11_12_self_assessor_3)/3);
				$scope.lodge_suites_11_13_average = ((data.lodge_suites_11_13_self_assessor_1 + data.lodge_suites_11_13_self_assessor_2 + data.lodge_suites_11_13_self_assessor_3)/3);
				$scope.lodge_suites_11_14_average = ((data.lodge_suites_11_14_self_assessor_1 + data.lodge_suites_11_14_self_assessor_2 + data.lodge_suites_11_14_self_assessor_3)/3);
				$scope.lodge_suites_11_15_average = ((data.lodge_suites_11_15_self_assessor_1 + data.lodge_suites_11_15_self_assessor_2 + data.lodge_suites_11_15_self_assessor_3)/3);
				$scope.lodge_suites_11_16_average = ((data.lodge_suites_11_16_self_assessor_1 + data.lodge_suites_11_16_self_assessor_2 + data.lodge_suites_11_16_self_assessor_3)/3);
				$scope.lodge_suites_11_17_average = ((data.lodge_suites_11_17_self_assessor_1 + data.lodge_suites_11_17_self_assessor_2 + data.lodge_suites_11_17_self_assessor_3)/3);
				$scope.lodge_suites_11_18_average = ((data.lodge_suites_11_18_self_assessor_1 + data.lodge_suites_11_18_self_assessor_2 + data.lodge_suites_11_18_self_assessor_3)/3);
				$scope.lodge_suites_11_19_average = ((data.lodge_suites_11_19_self_assessor_1 + data.lodge_suites_11_19_self_assessor_2 + data.lodge_suites_11_19_self_assessor_3)/3);
				$scope.lodge_suites_11_20_average = ((data.lodge_suites_11_20_self_assessor_1 + data.lodge_suites_11_20_self_assessor_2 + data.lodge_suites_11_20_self_assessor_3)/3);
				$scope.lodge_suites_11_0_average = ((data.lodge_suites_11_0_self_assessor_1 + data.lodge_suites_11_0_self_assessor_2 + data.lodge_suites_11_0_self_assessor_3)/3);

				//Suites Reconcilliation
				$scope.lodge_suites_not_reconciled = false;
				//11_1
				$scope.lodge_suites_11_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_1_self_assessor_1 - $scope.lodge_suites_11_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_1_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_1_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_1_self_assessor_1 - $scope.lodge_suites_11_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_1_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_1_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_1_self_assessor_2 - $scope.lodge_suites_11_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_1_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_1_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_2_self_assessor_1 - $scope.lodge_suites_11_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_2_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_2_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_2_self_assessor_1 - $scope.lodge_suites_11_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_2_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_2_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_2_self_assessor_2 - $scope.lodge_suites_11_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_2_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_2_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_3_self_assessor_1 - $scope.lodge_suites_11_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_3_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_3_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_3_self_assessor_1 - $scope.lodge_suites_11_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_3_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_3_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_3_self_assessor_2 - $scope.lodge_suites_11_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_3_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_3_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_4_self_assessor_1 - $scope.lodge_suites_11_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_4_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_4_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_4_self_assessor_1 - $scope.lodge_suites_11_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_4_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_4_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_4_self_assessor_2 - $scope.lodge_suites_11_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_4_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_4_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_5_self_assessor_1 - $scope.lodge_suites_11_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_5_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_5_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_5_self_assessor_1 - $scope.lodge_suites_11_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_5_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_5_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_5_self_assessor_2 - $scope.lodge_suites_11_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_5_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_5_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_6_self_assessor_1 - $scope.lodge_suites_11_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_6_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_6_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_6_self_assessor_1 - $scope.lodge_suites_11_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_6_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_6_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_6_self_assessor_2 - $scope.lodge_suites_11_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_6_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_6_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_7_self_assessor_1 - $scope.lodge_suites_11_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_7_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_7_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_7_self_assessor_1 - $scope.lodge_suites_11_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_7_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_7_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_7_self_assessor_2 - $scope.lodge_suites_11_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_7_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_7_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_8_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_8_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_8_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_8_self_assessor_1 - $scope.lodge_suites_11_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_8_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_8_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_8_self_assessor_1 - $scope.lodge_suites_11_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_8_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_8_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_8_self_assessor_2 - $scope.lodge_suites_11_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_8_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_8_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_9_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_9_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_9_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_9_self_assessor_1 - $scope.lodge_suites_11_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_9_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_9_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_9_self_assessor_1 - $scope.lodge_suites_11_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_9_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_9_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_9_self_assessor_2 - $scope.lodge_suites_11_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_9_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_9_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_10_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_10_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_10_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_10_self_assessor_1 - $scope.lodge_suites_11_10_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_10_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_10_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_10_self_assessor_1 - $scope.lodge_suites_11_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_10_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_10_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_10_self_assessor_2 - $scope.lodge_suites_11_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_10_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_10_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_11_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_11_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_11_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_11_self_assessor_1 - $scope.lodge_suites_11_11_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_11_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_11_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_11_self_assessor_1 - $scope.lodge_suites_11_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_11_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_11_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_11_self_assessor_2 - $scope.lodge_suites_11_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_11_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_11_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_12_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_12_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_12_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_12_self_assessor_1 - $scope.lodge_suites_11_12_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_12_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_12_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_12_self_assessor_1 - $scope.lodge_suites_11_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_12_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_12_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_12_self_assessor_2 - $scope.lodge_suites_11_12_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_12_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_12_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_13_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_13_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_13_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_13_self_assessor_1 - $scope.lodge_suites_11_13_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_13_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_13_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_13_self_assessor_1 - $scope.lodge_suites_11_13_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_13_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_13_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_13_self_assessor_2 - $scope.lodge_suites_11_13_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_13_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_13_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_14_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_14_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_14_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_14_self_assessor_1 - $scope.lodge_suites_11_14_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_14_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_14_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_14_self_assessor_1 - $scope.lodge_suites_11_14_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_14_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_14_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_14_self_assessor_2 - $scope.lodge_suites_11_14_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_14_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_14_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_15_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_15_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_15_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_15_self_assessor_1 - $scope.lodge_suites_11_15_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_15_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_15_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_15_self_assessor_1 - $scope.lodge_suites_11_15_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_15_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_15_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_15_self_assessor_2 - $scope.lodge_suites_11_15_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_15_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_15_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_16_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_16_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_16_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_16_self_assessor_1 - $scope.lodge_suites_11_16_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_16_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_16_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_16_self_assessor_1 - $scope.lodge_suites_11_16_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_16_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_16_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_16_self_assessor_2 - $scope.lodge_suites_11_16_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_16_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_16_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_17_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_17_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_17_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_17_self_assessor_1 - $scope.lodge_suites_11_17_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_17_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_17_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_17_self_assessor_1 - $scope.lodge_suites_11_17_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_17_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_17_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_17_self_assessor_2 - $scope.lodge_suites_11_17_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_17_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_17_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_18_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_18_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_18_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_18_self_assessor_1 - $scope.lodge_suites_11_18_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_18_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_18_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_18_self_assessor_1 - $scope.lodge_suites_11_18_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_18_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_18_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_18_self_assessor_2 - $scope.lodge_suites_11_18_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_18_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_18_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_19_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_19_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_19_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_19_self_assessor_1 - $scope.lodge_suites_11_19_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_19_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_19_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_19_self_assessor_1 - $scope.lodge_suites_11_19_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_19_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_19_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_19_self_assessor_2 - $scope.lodge_suites_11_19_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_19_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_19_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

				$scope.lodge_suites_11_20_self_assessor_1_not_reconciled = false;
				$scope.lodge_suites_11_20_self_assessor_2_not_reconciled = false;
				$scope.lodge_suites_11_20_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_suites_11_20_self_assessor_1 - $scope.lodge_suites_11_20_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_suites_11_20_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_20_self_assessor_2_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_20_self_assessor_1 - $scope.lodge_suites_11_20_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_20_self_assessor_1_not_reconciled = true; $scope.lodge_suites_11_20_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }
				if (Math.abs($scope.lodge_suites_11_20_self_assessor_2 - $scope.lodge_suites_11_20_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_suites_11_20_self_assessor_2_not_reconciled = true; $scope.lodge_suites_11_20_self_assessor_3_not_reconciled = true; $scope.lodge_suites_not_reconciled = true; }

			

	//HYGIENE AND SANITATION 12.0				
				//Single Assessor
				$scope.lodge_hygiene_and_sanitation_12_1_self_self = data.lodge_hygiene_and_sanitation_12_1_self_self;
				$scope.lodge_hygiene_and_sanitation_12_2_self_self = data.lodge_hygiene_and_sanitation_12_2_self_self;
				$scope.lodge_hygiene_and_sanitation_12_3_self_self = data.lodge_hygiene_and_sanitation_12_3_self_self;
				$scope.lodge_hygiene_and_sanitation_12_4_self_self = data.lodge_hygiene_and_sanitation_12_4_self_self;
				$scope.lodge_hygiene_and_sanitation_12_5_self_self = data.lodge_hygiene_and_sanitation_12_5_self_self;
				$scope.lodge_hygiene_and_sanitation_12_6_self_self = data.lodge_hygiene_and_sanitation_12_6_self_self;
				$scope.lodge_hygiene_and_sanitation_12_7_self_self = data.lodge_hygiene_and_sanitation_12_7_self_self;
				$scope.lodge_hygiene_and_sanitation_12_0_self_self = data.lodge_hygiene_and_sanitation_12_0_self_self;

				//Assessor 1
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_1_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_2_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_3_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_4_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_5_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_6_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_7_self_assessor_1;
				$scope.lodge_hygiene_and_sanitation_12_0_self_assessor_1 = data.lodge_hygiene_and_sanitation_12_0_self_assessor_1;
				//Assessor 2
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_1_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_2_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_3_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_4_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_5_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_6_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_7_self_assessor_2;
				$scope.lodge_hygiene_and_sanitation_12_0_self_assessor_2 = data.lodge_hygiene_and_sanitation_12_0_self_assessor_2;
				//Assessor 3
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_1_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_2_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_3_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_4_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_5_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_6_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_7_self_assessor_3;
				$scope.lodge_hygiene_and_sanitation_12_0_self_assessor_3 = data.lodge_hygiene_and_sanitation_12_0_self_assessor_3;
				//lodge_hygiene_and_sanitation and Subsections Average
				$scope.lodge_hygiene_and_sanitation_12_1_average = ((data.lodge_hygiene_and_sanitation_12_1_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_1_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_1_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_2_average = ((data.lodge_hygiene_and_sanitation_12_2_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_2_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_2_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_3_average = ((data.lodge_hygiene_and_sanitation_12_3_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_3_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_3_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_4_average = ((data.lodge_hygiene_and_sanitation_12_4_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_4_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_4_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_5_average = ((data.lodge_hygiene_and_sanitation_12_5_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_5_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_5_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_6_average = ((data.lodge_hygiene_and_sanitation_12_6_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_6_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_6_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_7_average = ((data.lodge_hygiene_and_sanitation_12_7_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_7_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_7_self_assessor_3)/3);
				$scope.lodge_hygiene_and_sanitation_12_0_average = ((data.lodge_hygiene_and_sanitation_12_0_self_assessor_1 + data.lodge_hygiene_and_sanitation_12_0_self_assessor_2 + data.lodge_hygiene_and_sanitation_12_0_self_assessor_3)/3);

				//lodge_hygiene_and_sanitation Reconcilliation
				$scope.lodge_hygiene_and_sanitation_not_reconciled = false;
					//12.1
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }

				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = false;
				$scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = false;
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1 - $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }
				if (Math.abs($scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2 - $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled = true; $scope.lodge_hygiene_and_sanitation_not_reconciled = true; }


			//SAFETY AND SECURITY
					//Single Assessor
					$scope.lodge_safety_and_security_13_1_self_self = data.lodge_safety_and_security_13_1_self_self;
					$scope.lodge_safety_and_security_13_2_self_self = data.lodge_safety_and_security_13_2_self_self;
					$scope.lodge_safety_and_security_13_3_self_self = data.lodge_safety_and_security_13_3_self_self;
					$scope.lodge_safety_and_security_13_4_self_self = data.lodge_safety_and_security_13_4_self_self;
					$scope.lodge_safety_and_security_13_5_self_self = data.lodge_safety_and_security_13_5_self_self;
					$scope.lodge_safety_and_security_13_0_self_self = data.lodge_safety_and_security_13_0_self_self;

					//Assessor 1
					$scope.lodge_safety_and_security_13_1_self_assessor_1 = data.lodge_safety_and_security_13_1_self_assessor_1;
					$scope.lodge_safety_and_security_13_2_self_assessor_1 = data.lodge_safety_and_security_13_2_self_assessor_1;
					$scope.lodge_safety_and_security_13_3_self_assessor_1 = data.lodge_safety_and_security_13_3_self_assessor_1;
					$scope.lodge_safety_and_security_13_4_self_assessor_1 = data.lodge_safety_and_security_13_4_self_assessor_1;
					$scope.lodge_safety_and_security_13_5_self_assessor_1 = data.lodge_safety_and_security_13_5_self_assessor_1;
					$scope.lodge_safety_and_security_13_0_self_assessor_1 = data.lodge_safety_and_security_13_0_self_assessor_1;
					//Assessor 2
					$scope.lodge_safety_and_security_13_1_self_assessor_2 = data.lodge_safety_and_security_13_1_self_assessor_2;
					$scope.lodge_safety_and_security_13_2_self_assessor_2 = data.lodge_safety_and_security_13_2_self_assessor_2;
					$scope.lodge_safety_and_security_13_3_self_assessor_2 = data.lodge_safety_and_security_13_3_self_assessor_2;
					$scope.lodge_safety_and_security_13_4_self_assessor_2 = data.lodge_safety_and_security_13_4_self_assessor_2;
					$scope.lodge_safety_and_security_13_5_self_assessor_2 = data.lodge_safety_and_security_13_5_self_assessor_2;
					$scope.lodge_safety_and_security_13_0_self_assessor_2 = data.lodge_safety_and_security_13_0_self_assessor_2;
					//Assessor 3
					$scope.lodge_safety_and_security_13_1_self_assessor_3 = data.lodge_safety_and_security_13_1_self_assessor_3;
					$scope.lodge_safety_and_security_13_2_self_assessor_3 = data.lodge_safety_and_security_13_2_self_assessor_3;
					$scope.lodge_safety_and_security_13_3_self_assessor_3 = data.lodge_safety_and_security_13_3_self_assessor_3;
					$scope.lodge_safety_and_security_13_4_self_assessor_3 = data.lodge_safety_and_security_13_4_self_assessor_3;
					$scope.lodge_safety_and_security_13_5_self_assessor_3 = data.lodge_safety_and_security_13_5_self_assessor_3;
					$scope.lodge_safety_and_security_13_0_self_assessor_3 = data.lodge_safety_and_security_13_0_self_assessor_3;
					//lodge_safety_and_security and Subsections Average
					$scope.lodge_safety_and_security_13_1_average = ((data.lodge_safety_and_security_13_1_self_assessor_1 + data.lodge_safety_and_security_13_1_self_assessor_2 + data.lodge_safety_and_security_13_1_self_assessor_3)/3);
					$scope.lodge_safety_and_security_13_2_average = ((data.lodge_safety_and_security_13_2_self_assessor_1 + data.lodge_safety_and_security_13_2_self_assessor_2 + data.lodge_safety_and_security_13_2_self_assessor_3)/3);
					$scope.lodge_safety_and_security_13_3_average = ((data.lodge_safety_and_security_13_3_self_assessor_1 + data.lodge_safety_and_security_13_3_self_assessor_2 + data.lodge_safety_and_security_13_3_self_assessor_3)/3);
					$scope.lodge_safety_and_security_13_4_average = ((data.lodge_safety_and_security_13_4_self_assessor_1 + data.lodge_safety_and_security_13_4_self_assessor_2 + data.lodge_safety_and_security_13_4_self_assessor_3)/3);
					$scope.lodge_safety_and_security_13_5_average = ((data.lodge_safety_and_security_13_5_self_assessor_1 + data.lodge_safety_and_security_13_5_self_assessor_2 + data.lodge_safety_and_security_13_5_self_assessor_3)/3);
					$scope.lodge_safety_and_security_13_0_average = ((data.lodge_safety_and_security_13_0_self_assessor_1 + data.lodge_safety_and_security_13_0_self_assessor_2 + data.lodge_safety_and_security_13_0_self_assessor_3)/3);

					//lodge_safety_and_security Reconcilliation
					$scope.lodge_safety_and_security_not_reconciled = false;
					//13.1
					$scope.lodge_safety_and_security_13_1_self_assessor_1_not_reconciled = false;
					$scope.lodge_safety_and_security_13_1_self_assessor_2_not_reconciled = false;
					$scope.lodge_safety_and_security_13_1_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.lodge_safety_and_security_13_1_self_assessor_1 - $scope.lodge_safety_and_security_13_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_1_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_1_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_1_self_assessor_1 - $scope.lodge_safety_and_security_13_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_1_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_1_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_1_self_assessor_2 - $scope.lodge_safety_and_security_13_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_1_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_13_1_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }

					$scope.lodge_safety_and_security_13_2_self_assessor_1_not_reconciled = false;
					$scope.lodge_safety_and_security_13_2_self_assessor_2_not_reconciled = false;
					$scope.lodge_safety_and_security_13_2_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.lodge_safety_and_security_13_2_self_assessor_1 - $scope.lodge_safety_and_security_13_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_2_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_2_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_2_self_assessor_1 - $scope.lodge_safety_and_security_13_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_2_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_2_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_2_self_assessor_2 - $scope.lodge_safety_and_security_13_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_2_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_13_2_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }

					$scope.lodge_safety_and_security_13_3_self_assessor_1_not_reconciled = false;
					$scope.lodge_safety_and_security_13_3_self_assessor_2_not_reconciled = false;
					$scope.lodge_safety_and_security_13_3_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.lodge_safety_and_security_13_3_self_assessor_1 - $scope.lodge_safety_and_security_13_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_3_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_3_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_3_self_assessor_1 - $scope.lodge_safety_and_security_13_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_3_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_3_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_3_self_assessor_2 - $scope.lodge_safety_and_security_13_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_3_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_13_3_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }

					$scope.lodge_safety_and_security_13_4_self_assessor_1_not_reconciled = false;
					$scope.lodge_safety_and_security_13_4_self_assessor_2_not_reconciled = false;
					$scope.lodge_safety_and_security_13_4_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.lodge_safety_and_security_13_4_self_assessor_1 - $scope.lodge_safety_and_security_13_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_4_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_4_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_4_self_assessor_1 - $scope.lodge_safety_and_security_13_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_4_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_4_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_4_self_assessor_2 - $scope.lodge_safety_and_security_13_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_4_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_13_4_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }

					$scope.lodge_safety_and_security_13_5_self_assessor_1_not_reconciled = false;
					$scope.lodge_safety_and_security_13_5_self_assessor_2_not_reconciled = false;
					$scope.lodge_safety_and_security_13_5_self_assessor_3_not_reconciled = false;
					if (Math.abs($scope.lodge_safety_and_security_13_5_self_assessor_1 - $scope.lodge_safety_and_security_13_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_5_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_5_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_5_self_assessor_1 - $scope.lodge_safety_and_security_13_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_5_self_assessor_1_not_reconciled = true; $scope.lodge_safety_and_security_13_5_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }
					if (Math.abs($scope.lodge_safety_and_security_13_5_self_assessor_2 - $scope.lodge_safety_and_security_13_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_safety_and_security_13_5_self_assessor_2_not_reconciled = true; $scope.lodge_safety_and_security_13_5_self_assessor_3_not_reconciled = true; $scope.lodge_safety_and_security_not_reconciled = true; }


			//SUNDRY SERVICES
					//Single Assessor
					$scope.lodge_sundry_services_14_1_self_self = data.lodge_sundry_services_14_1_self_self;
					$scope.lodge_sundry_services_14_2_self_self = data.lodge_sundry_services_14_2_self_self;
					$scope.lodge_sundry_services_14_3_self_self = data.lodge_sundry_services_14_3_self_self;
					$scope.lodge_sundry_services_14_4_self_self = data.lodge_sundry_services_14_4_self_self;
					$scope.lodge_sundry_services_14_0_self_self = data.lodge_sundry_services_14_0_self_self;

					//Assessor 1
					$scope.lodge_sundry_services_14_1_self_assessor_1 = data.lodge_sundry_services_14_1_self_assessor_1;
					$scope.lodge_sundry_services_14_2_self_assessor_1 = data.lodge_sundry_services_14_2_self_assessor_1;
					$scope.lodge_sundry_services_14_3_self_assessor_1 = data.lodge_sundry_services_14_3_self_assessor_1;
					$scope.lodge_sundry_services_14_4_self_assessor_1 = data.lodge_sundry_services_14_4_self_assessor_1;
					$scope.lodge_sundry_services_14_0_self_assessor_1 = data.lodge_sundry_services_14_0_self_assessor_1;
					//Assessor 2
					$scope.lodge_sundry_services_14_1_self_assessor_2 = data.lodge_sundry_services_14_1_self_assessor_2;
					$scope.lodge_sundry_services_14_2_self_assessor_2 = data.lodge_sundry_services_14_2_self_assessor_2;
					$scope.lodge_sundry_services_14_3_self_assessor_2 = data.lodge_sundry_services_14_3_self_assessor_2;
					$scope.lodge_sundry_services_14_4_self_assessor_2 = data.lodge_sundry_services_14_4_self_assessor_2;
					$scope.lodge_sundry_services_14_0_self_assessor_2 = data.lodge_sundry_services_14_0_self_assessor_2;
					//Assessor 3
					$scope.lodge_sundry_services_14_1_self_assessor_3 = data.lodge_sundry_services_14_1_self_assessor_3;
					$scope.lodge_sundry_services_14_2_self_assessor_3 = data.lodge_sundry_services_14_2_self_assessor_3;
					$scope.lodge_sundry_services_14_3_self_assessor_3 = data.lodge_sundry_services_14_3_self_assessor_3;
					$scope.lodge_sundry_services_14_4_self_assessor_3 = data.lodge_sundry_services_14_4_self_assessor_3;
					$scope.lodge_sundry_services_14_0_self_assessor_3 = data.lodge_sundry_services_14_0_self_assessor_3;
					//lodge_sundry_services and subsections Average
					$scope.lodge_sundry_services_14_1_average = ((data.lodge_sundry_services_14_1_self_assessor_1 + data.lodge_sundry_services_14_1_self_assessor_2 + data.lodge_sundry_services_14_1_self_assessor_3)/3);
					$scope.lodge_sundry_services_14_2_average = ((data.lodge_sundry_services_14_2_self_assessor_1 + data.lodge_sundry_services_14_2_self_assessor_2 + data.lodge_sundry_services_14_2_self_assessor_3)/3);
					$scope.lodge_sundry_services_14_3_average = ((data.lodge_sundry_services_14_3_self_assessor_1 + data.lodge_sundry_services_14_3_self_assessor_2 + data.lodge_sundry_services_14_3_self_assessor_3)/3);
					$scope.lodge_sundry_services_14_4_average = ((data.lodge_sundry_services_14_4_self_assessor_1 + data.lodge_sundry_services_14_4_self_assessor_2 + data.lodge_sundry_services_14_4_self_assessor_3)/3);
					$scope.lodge_sundry_services_14_0_average = ((data.lodge_sundry_services_14_0_self_assessor_1 + data.lodge_sundry_services_14_0_self_assessor_2 + data.lodge_sundry_services_14_0_self_assessor_3)/3);

					//lodge_sundry_services reconcilliation
					$scope.lodge_sundry_services_not_reconciled = false;
						//14.1
						$scope.lodge_sundry_services_14_1_self_assessor_1_not_reconciled = false;
						$scope.lodge_sundry_services_14_1_self_assessor_2_not_reconciled = false;
						$scope.lodge_sundry_services_14_1_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_sundry_services_14_1_self_assessor_1 - $scope.lodge_sundry_services_14_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_1_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_1_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_1_self_assessor_1 - $scope.lodge_sundry_services_14_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_1_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_1_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_1_self_assessor_2 - $scope.lodge_sundry_services_14_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_1_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_14_1_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }

						$scope.lodge_sundry_services_14_2_self_assessor_1_not_reconciled = false;
						$scope.lodge_sundry_services_14_2_self_assessor_2_not_reconciled = false;
						$scope.lodge_sundry_services_14_2_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_sundry_services_14_2_self_assessor_1 - $scope.lodge_sundry_services_14_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_2_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_2_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_2_self_assessor_1 - $scope.lodge_sundry_services_14_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_2_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_2_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_2_self_assessor_2 - $scope.lodge_sundry_services_14_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_2_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_14_2_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }

						$scope.lodge_sundry_services_14_3_self_assessor_1_not_reconciled = false;
						$scope.lodge_sundry_services_14_3_self_assessor_2_not_reconciled = false;
						$scope.lodge_sundry_services_14_3_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_sundry_services_14_3_self_assessor_1 - $scope.lodge_sundry_services_14_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_3_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_3_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_3_self_assessor_1 - $scope.lodge_sundry_services_14_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_3_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_3_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_3_self_assessor_2 - $scope.lodge_sundry_services_14_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_3_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_14_3_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }

						$scope.lodge_sundry_services_14_4_self_assessor_1_not_reconciled = false;
						$scope.lodge_sundry_services_14_4_self_assessor_2_not_reconciled = false;
						$scope.lodge_sundry_services_14_4_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_sundry_services_14_4_self_assessor_1 - $scope.lodge_sundry_services_14_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_4_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_4_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_4_self_assessor_1 - $scope.lodge_sundry_services_14_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_4_self_assessor_1_not_reconciled = true; $scope.lodge_sundry_services_14_4_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }
						if (Math.abs($scope.lodge_sundry_services_14_4_self_assessor_2 - $scope.lodge_sundry_services_14_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_sundry_services_14_4_self_assessor_2_not_reconciled = true; $scope.lodge_sundry_services_14_4_self_assessor_3_not_reconciled = true; $scope.lodge_sundry_services_not_reconciled = true; }



				//HUMAN RESOURCES 15.0
						//Single Assessor
						$scope.lodge_human_resources_15_1_self_self = data.lodge_human_resources_15_1_self_self;
						$scope.lodge_human_resources_15_2_self_self = data.lodge_human_resources_15_2_self_self;
						$scope.lodge_human_resources_15_3_self_self = data.lodge_human_resources_15_3_self_self;
						$scope.lodge_human_resources_15_4_self_self = data.lodge_human_resources_15_4_self_self;
						$scope.lodge_human_resources_15_5_self_self = data.lodge_human_resources_15_5_self_self;
						$scope.lodge_human_resources_15_6_self_self = data.lodge_human_resources_15_6_self_self;
						$scope.lodge_human_resources_15_7_self_self = data.lodge_human_resources_15_7_self_self;
						$scope.lodge_human_resources_15_8_self_self = data.lodge_human_resources_15_8_self_self;
						$scope.lodge_human_resources_15_9_self_self = data.lodge_human_resources_15_9_self_self;
						$scope.lodge_human_resources_15_10_self_self = data.lodge_human_resources_15_10_self_self;
						$scope.lodge_human_resources_15_11_self_self = data.lodge_human_resources_15_11_self_self;
						$scope.lodge_human_resources_15_0_self_self = data.lodge_human_resources_15_0_self_self;

						//Assessor 1
						$scope.lodge_human_resources_15_1_self_assessor_1 = data.lodge_human_resources_15_1_self_assessor_1;
						$scope.lodge_human_resources_15_2_self_assessor_1 = data.lodge_human_resources_15_2_self_assessor_1;
						$scope.lodge_human_resources_15_3_self_assessor_1 = data.lodge_human_resources_15_3_self_assessor_1;
						$scope.lodge_human_resources_15_4_self_assessor_1 = data.lodge_human_resources_15_4_self_assessor_1;
						$scope.lodge_human_resources_15_5_self_assessor_1 = data.lodge_human_resources_15_5_self_assessor_1;
						$scope.lodge_human_resources_15_6_self_assessor_1 = data.lodge_human_resources_15_6_self_assessor_1;
						$scope.lodge_human_resources_15_7_self_assessor_1 = data.lodge_human_resources_15_7_self_assessor_1;
						$scope.lodge_human_resources_15_8_self_assessor_1 = data.lodge_human_resources_15_8_self_assessor_1;
						$scope.lodge_human_resources_15_9_self_assessor_1 = data.lodge_human_resources_15_9_self_assessor_1;
						$scope.lodge_human_resources_15_10_self_assessor_1 = data.lodge_human_resources_15_10_self_assessor_1;
						$scope.lodge_human_resources_15_11_self_assessor_1 = data.lodge_human_resources_15_11_self_assessor_1;
						$scope.lodge_human_resources_15_0_self_assessor_1 = data.lodge_human_resources_15_0_self_assessor_1;

						//Assessor 2
						$scope.lodge_human_resources_15_1_self_assessor_2 = data.lodge_human_resources_15_1_self_assessor_2;
						$scope.lodge_human_resources_15_2_self_assessor_2 = data.lodge_human_resources_15_2_self_assessor_2;
						$scope.lodge_human_resources_15_3_self_assessor_2 = data.lodge_human_resources_15_3_self_assessor_2;
						$scope.lodge_human_resources_15_4_self_assessor_2 = data.lodge_human_resources_15_4_self_assessor_2;
						$scope.lodge_human_resources_15_5_self_assessor_2 = data.lodge_human_resources_15_5_self_assessor_2;
						$scope.lodge_human_resources_15_6_self_assessor_2 = data.lodge_human_resources_15_6_self_assessor_2;
						$scope.lodge_human_resources_15_7_self_assessor_2 = data.lodge_human_resources_15_7_self_assessor_2;
						$scope.lodge_human_resources_15_8_self_assessor_2 = data.lodge_human_resources_15_8_self_assessor_2;
						$scope.lodge_human_resources_15_9_self_assessor_2 = data.lodge_human_resources_15_9_self_assessor_2;
						$scope.lodge_human_resources_15_10_self_assessor_2 = data.lodge_human_resources_15_10_self_assessor_2;
						$scope.lodge_human_resources_15_11_self_assessor_2 = data.lodge_human_resources_15_11_self_assessor_2;
						$scope.lodge_human_resources_15_0_self_assessor_2 = data.lodge_human_resources_15_0_self_assessor_2;

						//Assessor 3
						$scope.lodge_human_resources_15_1_self_assessor_3 = data.lodge_human_resources_15_1_self_assessor_3;
						$scope.lodge_human_resources_15_2_self_assessor_3 = data.lodge_human_resources_15_2_self_assessor_3;
						$scope.lodge_human_resources_15_3_self_assessor_3 = data.lodge_human_resources_15_3_self_assessor_3;
						$scope.lodge_human_resources_15_4_self_assessor_3 = data.lodge_human_resources_15_4_self_assessor_3;
						$scope.lodge_human_resources_15_5_self_assessor_3 = data.lodge_human_resources_15_5_self_assessor_3;
						$scope.lodge_human_resources_15_6_self_assessor_3 = data.lodge_human_resources_15_6_self_assessor_3;
						$scope.lodge_human_resources_15_7_self_assessor_3 = data.lodge_human_resources_15_7_self_assessor_3;
						$scope.lodge_human_resources_15_8_self_assessor_3 = data.lodge_human_resources_15_8_self_assessor_3;
						$scope.lodge_human_resources_15_9_self_assessor_3 = data.lodge_human_resources_15_9_self_assessor_3;
						$scope.lodge_human_resources_15_10_self_assessor_3 = data.lodge_human_resources_15_10_self_assessor_3;
						$scope.lodge_human_resources_15_11_self_assessor_3 = data.lodge_human_resources_15_11_self_assessor_3;
						$scope.lodge_human_resources_15_0_self_assessor_3 = data.lodge_human_resources_15_0_self_assessor_3;
						//lodge_human_resources and Subsections Average
						$scope.lodge_human_resources_15_1_average = ((data.lodge_human_resources_15_1_self_assessor_1 + data.lodge_human_resources_15_1_self_assessor_2 + data.lodge_human_resources_15_1_self_assessor_3)/3);
						$scope.lodge_human_resources_15_2_average = ((data.lodge_human_resources_15_2_self_assessor_1 + data.lodge_human_resources_15_2_self_assessor_2 + data.lodge_human_resources_15_2_self_assessor_3)/3);
						$scope.lodge_human_resources_15_3_average = ((data.lodge_human_resources_15_3_self_assessor_1 + data.lodge_human_resources_15_3_self_assessor_2 + data.lodge_human_resources_15_3_self_assessor_3)/3);
						$scope.lodge_human_resources_15_4_average = ((data.lodge_human_resources_15_4_self_assessor_1 + data.lodge_human_resources_15_4_self_assessor_2 + data.lodge_human_resources_15_4_self_assessor_3)/3);
						$scope.lodge_human_resources_15_5_average = ((data.lodge_human_resources_15_5_self_assessor_1 + data.lodge_human_resources_15_5_self_assessor_2 + data.lodge_human_resources_15_5_self_assessor_3)/3);
						$scope.lodge_human_resources_15_6_average = ((data.lodge_human_resources_15_6_self_assessor_1 + data.lodge_human_resources_15_6_self_assessor_2 + data.lodge_human_resources_15_6_self_assessor_3)/3);
						$scope.lodge_human_resources_15_7_average = ((data.lodge_human_resources_15_7_self_assessor_1 + data.lodge_human_resources_15_7_self_assessor_2 + data.lodge_human_resources_15_7_self_assessor_3)/3);
						$scope.lodge_human_resources_15_8_average = ((data.lodge_human_resources_15_8_self_assessor_1 + data.lodge_human_resources_15_8_self_assessor_2 + data.lodge_human_resources_15_8_self_assessor_3)/3);
						$scope.lodge_human_resources_15_9_average = ((data.lodge_human_resources_15_9_self_assessor_1 + data.lodge_human_resources_15_9_self_assessor_2 + data.lodge_human_resources_15_9_self_assessor_3)/3);
						$scope.lodge_human_resources_15_10_average = ((data.lodge_human_resources_15_10_self_assessor_1 + data.lodge_human_resources_15_10_self_assessor_2 + data.lodge_human_resources_15_10_self_assessor_3)/3);
						$scope.lodge_human_resources_15_11_average = ((data.lodge_human_resources_15_11_self_assessor_1 + data.lodge_human_resources_15_11_self_assessor_2 + data.lodge_human_resources_15_11_self_assessor_3)/3);
						$scope.lodge_human_resources_15_0_average = ((data.lodge_human_resources_15_0_self_assessor_1 + data.lodge_human_resources_15_0_self_assessor_2 + data.lodge_human_resources_15_0_self_assessor_3)/3);


						//lodge_human_resources Reconcilliation
						$scope.lodge_human_resources_not_reconciled = false;
						//15.1
						$scope.lodge_human_resources_15_1_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_1_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_1_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_1_self_assessor_1 - $scope.lodge_human_resources_15_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_1_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_1_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_1_self_assessor_1 - $scope.lodge_human_resources_15_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_1_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_1_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_1_self_assessor_2 - $scope.lodge_human_resources_15_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_1_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_1_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_2_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_2_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_2_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_2_self_assessor_1 - $scope.lodge_human_resources_15_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_2_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_2_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_2_self_assessor_1 - $scope.lodge_human_resources_15_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_2_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_2_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_2_self_assessor_2 - $scope.lodge_human_resources_15_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_2_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_2_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_3_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_3_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_3_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_3_self_assessor_1 - $scope.lodge_human_resources_15_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_3_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_3_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_3_self_assessor_1 - $scope.lodge_human_resources_15_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_3_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_3_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_3_self_assessor_2 - $scope.lodge_human_resources_15_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_3_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_3_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_4_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_4_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_4_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_4_self_assessor_1 - $scope.lodge_human_resources_15_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_4_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_4_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_4_self_assessor_1 - $scope.lodge_human_resources_15_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_4_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_4_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_4_self_assessor_2 - $scope.lodge_human_resources_15_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_4_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_4_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_5_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_5_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_5_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_5_self_assessor_1 - $scope.lodge_human_resources_15_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_5_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_5_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_5_self_assessor_1 - $scope.lodge_human_resources_15_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_5_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_5_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_5_self_assessor_2 - $scope.lodge_human_resources_15_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_5_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_5_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_6_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_6_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_6_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_6_self_assessor_1 - $scope.lodge_human_resources_15_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_6_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_6_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_6_self_assessor_1 - $scope.lodge_human_resources_15_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_6_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_6_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_6_self_assessor_2 - $scope.lodge_human_resources_15_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_6_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_6_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_7_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_7_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_7_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_7_self_assessor_1 - $scope.lodge_human_resources_15_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_7_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_7_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_7_self_assessor_1 - $scope.lodge_human_resources_15_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_7_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_7_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_7_self_assessor_2 - $scope.lodge_human_resources_15_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_7_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_7_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_8_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_8_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_8_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_8_self_assessor_1 - $scope.lodge_human_resources_15_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_8_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_8_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_8_self_assessor_1 - $scope.lodge_human_resources_15_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_8_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_8_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_8_self_assessor_2 - $scope.lodge_human_resources_15_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_8_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_8_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_9_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_9_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_9_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_9_self_assessor_1 - $scope.lodge_human_resources_15_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_9_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_9_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_9_self_assessor_1 - $scope.lodge_human_resources_15_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_9_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_9_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_9_self_assessor_2 - $scope.lodge_human_resources_15_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_human_resources_15_9_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_9_self_assessor_3_not_reconciled = true; $scope.lodge_human_resources_not_reconciled = true; }

						$scope.lodge_human_resources_15_10_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_10_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_10_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_10_self_assessor_1 - $scope.lodge_human_resources_15_10_self_assessor_2) > reconciliation_line){ $scope.lodge_human_resources_15_10_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_10_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_10_self_assessor_1 - $scope.lodge_human_resources_15_10_self_assessor_3) > reconciliation_line){ $scope.lodge_human_resources_15_10_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_10_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_10_self_assessor_2 - $scope.lodge_human_resources_15_10_self_assessor_3) > reconciliation_line){ $scope.lodge_human_resources_15_10_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_10_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }

						$scope.lodge_human_resources_15_11_self_assessor_1_not_reconciled = false;
						$scope.lodge_human_resources_15_11_self_assessor_2_not_reconciled = false;
						$scope.lodge_human_resources_15_11_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_human_resources_15_11_self_assessor_1 - $scope.lodge_human_resources_15_11_self_assessor_2) > reconciliation_line){ $scope.lodge_human_resources_15_11_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_11_self_assessor_2_not_reconciled = true; $scope.location_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_11_self_assessor_1 - $scope.lodge_human_resources_15_11_self_assessor_3) > reconciliation_line){ $scope.lodge_human_resources_15_11_self_assessor_1_not_reconciled = true; $scope.lodge_human_resources_15_11_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }
						if (Math.abs($scope.lodge_human_resources_15_11_self_assessor_2 - $scope.lodge_human_resources_15_11_self_assessor_3) > reconciliation_line){ $scope.lodge_human_resources_15_11_self_assessor_2_not_reconciled = true; $scope.lodge_human_resources_15_11_self_assessor_3_not_reconciled = true; $scope.location_not_reconciled = true; }


				        //GENERAL
						//Single Assessor
						$scope.lodge_general_16_1_self_self = data.lodge_general_16_1_self_self;
						$scope.lodge_general_16_2_self_self = data.lodge_general_16_2_self_self;
						$scope.lodge_general_16_3_self_self = data.lodge_general_16_3_self_self;
						$scope.lodge_general_16_4_self_self = data.lodge_general_16_4_self_self;
						$scope.lodge_general_16_5_self_self = data.lodge_general_16_5_self_self;
						$scope.lodge_general_16_6_self_self = data.lodge_general_16_6_self_self;
						$scope.lodge_general_16_7_self_self = data.lodge_general_16_7_self_self;
						$scope.lodge_general_16_8_self_self = data.lodge_general_16_8_self_self;
						$scope.lodge_general_16_9_self_self = data.lodge_general_16_9_self_self;
						$scope.lodge_general_16_10_self_self = data.lodge_general_16_10_self_self;
						$scope.lodge_general_16_11_self_self = data.lodge_general_16_11_self_self;
						$scope.lodge_general_16_0_self_self = data.lodge_general_16_0_self_self;

						//Assessor 1
						$scope.lodge_general_16_1_self_assessor_1 = data.lodge_general_16_1_self_assessor_1;
						$scope.lodge_general_16_2_self_assessor_1 = data.lodge_general_16_2_self_assessor_1;
						$scope.lodge_general_16_3_self_assessor_1 = data.lodge_general_16_3_self_assessor_1;
						$scope.lodge_general_16_4_self_assessor_1 = data.lodge_general_16_4_self_assessor_1;
						$scope.lodge_general_16_5_self_assessor_1 = data.lodge_general_16_5_self_assessor_1;
						$scope.lodge_general_16_6_self_assessor_1 = data.lodge_general_16_6_self_assessor_1;
						$scope.lodge_general_16_7_self_assessor_1 = data.lodge_general_16_7_self_assessor_1;
						$scope.lodge_general_16_8_self_assessor_1 = data.lodge_general_16_8_self_assessor_1;
						$scope.lodge_general_16_9_self_assessor_1 = data.lodge_general_16_9_self_assessor_1;
						$scope.lodge_general_16_10_self_assessor_1 = data.lodge_general_16_10_self_assessor_1;
						$scope.lodge_general_16_11_self_assessor_1 = data.lodge_general_16_11_self_assessor_1;
						$scope.lodge_general_16_0_self_assessor_1 = data.lodge_general_16_0_self_assessor_1;
						//Assessor 2
						$scope.lodge_general_16_1_self_assessor_2 = data.lodge_general_16_1_self_assessor_2;
						$scope.lodge_general_16_2_self_assessor_2 = data.lodge_general_16_2_self_assessor_2;
						$scope.lodge_general_16_3_self_assessor_2 = data.lodge_general_16_3_self_assessor_2;
						$scope.lodge_general_16_4_self_assessor_2 = data.lodge_general_16_4_self_assessor_2;
						$scope.lodge_general_16_5_self_assessor_2 = data.lodge_general_16_5_self_assessor_2;
						$scope.lodge_general_16_6_self_assessor_2 = data.lodge_general_16_6_self_assessor_2;
						$scope.lodge_general_16_7_self_assessor_2 = data.lodge_general_16_7_self_assessor_2;
						$scope.lodge_general_16_8_self_assessor_2 = data.lodge_general_16_8_self_assessor_2;
						$scope.lodge_general_16_9_self_assessor_2 = data.lodge_general_16_9_self_assessor_2;
						$scope.lodge_general_16_10_self_assessor_2 = data.lodge_general_16_10_self_assessor_2;
						$scope.lodge_general_16_11_self_assessor_2 = data.lodge_general_16_11_self_assessor_2;
						$scope.lodge_general_16_0_self_assessor_2 = data.lodge_general_16_0_self_assessor_2;
						//Assessor 3
						$scope.lodge_general_16_1_self_assessor_3 = data.lodge_general_16_1_self_assessor_3;
						$scope.lodge_general_16_2_self_assessor_3 = data.lodge_general_16_2_self_assessor_3;
						$scope.lodge_general_16_3_self_assessor_3 = data.lodge_general_16_3_self_assessor_3;
						$scope.lodge_general_16_4_self_assessor_3 = data.lodge_general_16_4_self_assessor_3;
						$scope.lodge_general_16_5_self_assessor_3 = data.lodge_general_16_5_self_assessor_3;
						$scope.lodge_general_16_6_self_assessor_3 = data.lodge_general_16_6_self_assessor_3;
						$scope.lodge_general_16_7_self_assessor_3 = data.lodge_general_16_7_self_assessor_3;
						$scope.lodge_general_16_8_self_assessor_3 = data.lodge_general_16_8_self_assessor_3;
						$scope.lodge_general_16_9_self_assessor_3 = data.lodge_general_16_9_self_assessor_3;
						$scope.lodge_general_16_10_self_assessor_3 = data.lodge_general_16_10_self_assessor_3;
						$scope.lodge_general_16_11_self_assessor_3 = data.lodge_general_16_11_self_assessor_3;
						$scope.lodge_general_16_0_self_assessor_3 = data.lodge_general_16_0_self_assessor_3;
						//general and subsections Average
						$scope.lodge_general_16_1_average = ((data.lodge_general_16_1_self_assessor_1 + data.lodge_general_16_1_self_assessor_2 + data.lodge_general_16_1_self_assessor_3)/3);
						$scope.lodge_general_16_2_average = ((data.lodge_general_16_2_self_assessor_1 + data.lodge_general_16_2_self_assessor_2 + data.lodge_general_16_2_self_assessor_3)/3);
						$scope.lodge_general_16_3_average = ((data.lodge_general_16_3_self_assessor_1 + data.lodge_general_16_3_self_assessor_2 + data.lodge_general_16_3_self_assessor_3)/3);
						$scope.lodge_general_16_4_average = ((data.lodge_general_16_4_self_assessor_1 + data.lodge_general_16_4_self_assessor_2 + data.lodge_general_16_4_self_assessor_3)/3);
						$scope.lodge_general_16_5_average = ((data.lodge_general_16_5_self_assessor_1 + data.lodge_general_16_5_self_assessor_2 + data.lodge_general_16_5_self_assessor_3)/3);
						$scope.lodge_general_16_6_average = ((data.lodge_general_16_6_self_assessor_1 + data.lodge_general_16_6_self_assessor_2 + data.lodge_general_16_6_self_assessor_3)/3);
						$scope.lodge_general_16_7_average = ((data.lodge_general_16_7_self_assessor_1 + data.lodge_general_16_7_self_assessor_2 + data.lodge_general_16_7_self_assessor_3)/3);
						$scope.lodge_general_16_8_average = ((data.lodge_general_16_8_self_assessor_1 + data.lodge_general_16_8_self_assessor_2 + data.lodge_general_16_8_self_assessor_3)/3);
						$scope.lodge_general_16_9_average = ((data.lodge_general_16_9_self_assessor_1 + data.lodge_general_16_9_self_assessor_2 + data.lodge_general_16_9_self_assessor_3)/3);
						$scope.lodge_general_16_10_average = ((data.lodge_general_16_10_self_assessor_1 + data.lodge_general_16_10_self_assessor_2 + data.lodge_general_16_10_self_assessor_3)/3);
						$scope.lodge_general_16_11_average = ((data.lodge_general_16_11_self_assessor_1 + data.lodge_general_16_11_self_assessor_2 + data.lodge_general_16_11_self_assessor_3)/3);
						$scope.lodge_general_16_0_average = ((data.lodge_general_16_0_self_assessor_1 + data.lodge_general_16_0_self_assessor_2 + data.lodge_general_16_0_self_assessor_3)/3);

						//general Reconcilliation
						$scope.lodge_general_not_reconciled = false;
						//16_1
						$scope.lodge_general_16_1_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_1_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_1_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_1_self_assessor_1 - $scope.lodge_general_16_1_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_1_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_1_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_1_self_assessor_1 - $scope.lodge_general_16_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_1_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_1_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_1_self_assessor_2 - $scope.lodge_general_16_1_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_1_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_1_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_2_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_2_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_2_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_2_self_assessor_1 - $scope.lodge_general_16_2_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_2_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_2_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_2_self_assessor_1 - $scope.lodge_general_16_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_2_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_2_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_2_self_assessor_2 - $scope.lodge_general_16_2_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_2_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_2_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_3_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_3_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_3_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_3_self_assessor_1 - $scope.lodge_general_16_3_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_3_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_3_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_3_self_assessor_1 - $scope.lodge_general_16_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_3_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_3_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_3_self_assessor_2 - $scope.lodge_general_16_3_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_3_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_3_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_4_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_4_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_4_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_4_self_assessor_1 - $scope.lodge_general_16_4_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_4_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_4_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_4_self_assessor_1 - $scope.lodge_general_16_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_4_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_4_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_4_self_assessor_2 - $scope.lodge_general_16_4_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_4_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_4_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_5_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_5_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_5_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_5_self_assessor_1 - $scope.lodge_general_16_5_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_5_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_5_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_5_self_assessor_1 - $scope.lodge_general_16_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_5_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_5_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_5_self_assessor_2 - $scope.lodge_general_16_5_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_5_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_5_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_6_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_6_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_6_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_6_self_assessor_1 - $scope.lodge_general_16_6_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_6_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_6_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_6_self_assessor_1 - $scope.lodge_general_16_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_6_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_6_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_6_self_assessor_2 - $scope.lodge_general_16_6_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_6_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_6_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_7_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_7_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_7_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_7_self_assessor_1 - $scope.lodge_general_16_7_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_7_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_7_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_7_self_assessor_1 - $scope.lodge_general_16_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_7_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_7_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_7_self_assessor_2 - $scope.lodge_general_16_7_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_7_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_7_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_8_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_8_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_8_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_8_self_assessor_1 - $scope.lodge_general_16_8_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_8_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_8_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_8_self_assessor_1 - $scope.lodge_general_16_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_8_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_8_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_8_self_assessor_2 - $scope.lodge_general_16_8_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_8_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_8_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_9_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_9_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_9_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_9_self_assessor_1 - $scope.lodge_general_16_9_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_9_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_9_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_9_self_assessor_1 - $scope.lodge_general_16_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_9_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_9_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_9_self_assessor_2 - $scope.lodge_general_16_9_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_9_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_9_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_10_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_10_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_10_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_10_self_assessor_1 - $scope.lodge_general_16_10_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_10_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_10_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_10_self_assessor_1 - $scope.lodge_general_16_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_10_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_10_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_10_self_assessor_2 - $scope.lodge_general_16_10_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_10_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_10_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }

						$scope.lodge_general_16_11_self_assessor_1_not_reconciled = false;
						$scope.lodge_general_16_11_self_assessor_2_not_reconciled = false;
						$scope.lodge_general_16_11_self_assessor_3_not_reconciled = false;
						if (Math.abs($scope.lodge_general_16_11_self_assessor_1 - $scope.lodge_general_16_11_self_assessor_2) > lodge_reconciliation_line){ $scope.lodge_general_16_11_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_11_self_assessor_2_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_11_self_assessor_1 - $scope.lodge_general_16_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_11_self_assessor_1_not_reconciled = true; $scope.lodge_general_16_11_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }
						if (Math.abs($scope.lodge_general_16_11_self_assessor_2 - $scope.lodge_general_16_11_self_assessor_3) > lodge_reconciliation_line){ $scope.lodge_general_16_11_self_assessor_2_not_reconciled = true; $scope.lodge_general_16_11_self_assessor_3_not_reconciled = true; $scope.lodge_general_not_reconciled = true; }


			//OVERALL TOTAL AND AVERAGE
				$scope.lodge_overall_total_self_self = $scope.lodge_location_1_0_self_self + $scope.lodge_building_2_0_self_self + $scope.lodge_front_office_3_0_self_self + $scope.lodge_lobby_lounge_other_public_areas_4_0_self_self + $scope.lodge_function_rooms_5_0_self_self + $scope.lodge_restaurants_6_0_self_self + $scope.lodge_bar_7_0_self_self + $scope.lodge_kitchen_8_0_self_self + $scope.lodge_guest_rooms_9_0_self_self + $scope.lodge_guest_bathrooms_10_0_self_self + $scope.lodge_suites_11_0_self_self + $scope.lodge_hygiene_and_sanitation_12_0_self_self + $scope.lodge_safety_and_security_13_0_self_self + $scope.lodge_sundry_services_14_0_self_self + $scope.lodge_human_resources_15_0_self_self + $scope.lodge_general_16_0_self_self;	
				$scope.lodge_overall_total_self_assessor_1 = $scope.lodge_location_1_0_self_assessor_1 + $scope.lodge_building_2_0_self_assessor_1 + $scope.lodge_front_office_3_0_self_assessor_1 + $scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_1 + $scope.lodge_function_rooms_5_0_self_assessor_1 + $scope.lodge_restaurants_6_0_self_assessor_1 + $scope.lodge_bar_7_0_self_assessor_1 + $scope.lodge_kitchen_8_0_self_assessor_1 + $scope.lodge_guest_rooms_9_0_self_assessor_1 + $scope.lodge_guest_bathrooms_10_0_self_assessor_1 + $scope.lodge_suites_11_0_self_assessor_1 + $scope.lodge_hygiene_and_sanitation_12_0_self_assessor_1 + $scope.lodge_safety_and_security_13_0_self_assessor_1 + $scope.lodge_sundry_services_14_0_self_assessor_1 + $scope.lodge_human_resources_15_0_self_assessor_1 + $scope.lodge_general_16_0_self_assessor_1;
				$scope.lodge_overall_total_self_assessor_2 = $scope.lodge_location_1_0_self_assessor_2 + $scope.lodge_building_2_0_self_assessor_2 + $scope.lodge_front_office_3_0_self_assessor_2 + $scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_2 + $scope.lodge_function_rooms_5_0_self_assessor_2 + $scope.lodge_restaurants_6_0_self_assessor_2 + $scope.lodge_bar_7_0_self_assessor_2 + $scope.lodge_kitchen_8_0_self_assessor_2 + $scope.lodge_guest_rooms_9_0_self_assessor_2 + $scope.lodge_guest_bathrooms_10_0_self_assessor_2 + $scope.lodge_suites_11_0_self_assessor_2 + $scope.lodge_hygiene_and_sanitation_12_0_self_assessor_2 + $scope.lodge_safety_and_security_13_0_self_assessor_2 + $scope.lodge_sundry_services_14_0_self_assessor_2 + $scope.lodge_human_resources_15_0_self_assessor_2 + $scope.lodge_general_16_0_self_assessor_2;
				$scope.lodge_overall_total_self_assessor_3 = $scope.lodge_location_1_0_self_assessor_3 + $scope.lodge_building_2_0_self_assessor_3 + $scope.lodge_front_office_3_0_self_assessor_3 + $scope.lodge_lobby_lounge_other_public_areas_4_0_self_assessor_3 + $scope.lodge_function_rooms_5_0_self_assessor_3 + $scope.lodge_restaurants_6_0_self_assessor_3 + $scope.lodge_bar_7_0_self_assessor_3 + $scope.lodge_kitchen_8_0_self_assessor_3 + $scope.lodge_guest_rooms_9_0_self_assessor_3 + $scope.lodge_guest_bathrooms_10_0_self_assessor_3 + $scope.lodge_suites_11_0_self_assessor_3 + $scope.lodge_hygiene_and_sanitation_12_0_self_assessor_3 + $scope.lodge_safety_and_security_13_0_self_assessor_3 + $scope.lodge_sundry_services_14_0_self_assessor_3 + $scope.lodge_human_resources_15_0_self_assessor_3 + $scope.lodge_general_16_0_self_assessor_3;
				$scope.lodge_overall_total_average = $scope.lodge_location_1_0_average + $scope.lodge_building_2_0_average + $scope.lodge_front_office_3_0_average + $scope.lodge_lobby_lounge_other_public_areas_4_0_average + $scope.lodge_function_rooms_5_0_average + $scope.lodge_restaurants_6_0_average + $scope.lodge_bar_7_0_average + $scope.lodge_kitchen_8_0_average + $scope.lodge_guest_rooms_9_0_average + $scope.lodge_guest_bathrooms_10_0_average + $scope.lodge_suites_11_0_average + $scope.lodge_hygiene_and_sanitation_12_0_average + $scope.lodge_safety_and_security_13_0_average + $scope.lodge_sundry_services_14_0_average + $scope.lodge_human_resources_15_0_average + $scope.lodge_general_16_0_average;
				
				$scope.vacation_overall_not_reconciled = false;
				if(($scope.lodge_location_not_reconciled) || ($scope.lodge_building_not_reconciled) || ($scope.lodge_front_office_not_reconciled) || ($scope.lodge_lobby_lounge_other_public_areas_not_reconciled) || ($scope.lodge_function_rooms_not_reconciled) || ($scope.lodge_restaurants_not_reconciled) || ($scope.lodge_bar_not_reconciled) || ($scope.lodge_kitchen_not_reconciled) || ($scope.lodge_guest_rooms_not_reconciled) || ($scope.lodge_guest_bathrooms_not_reconciled) || ($scope.lodge_suites_not_reconciled) || ($scope.lodge_hygiene_and_sanitation_not_reconciled) || ($scope.lodge_safety_and_security_not_reconciled) || ($scope.lodge_sundry_services_not_reconciled) || ($scope.lodge_human_resources_not_reconciled) || ($scope.lodge_general_not_reconciled)){ $scope.vacation_overall_not_reconciled = true; }
				
// <!-----------------------------  GRADING  -------------------------------------------->
							
		//GRADING TOTAL
			
				//Stars size				
				var lodge_star_medium_total_length = 44;
				var lodge_star_medium_exact_length = 36;
				var lodge_star_medium_stars_gape_length = 8;				
				var lodge_star_small_total_length = 22;
				var lodge_star_small_exact_length = 18;
				var lodge_star_small_stars_gape_length = 4;				
				//Approved Facility
				var lodge_approved_lower_scores = 0;
				var lodge_approved_upper_scores = 1097.5;
				var lodge_approved_number_of_stars = 0;
				//One Star Facility
				var lodge_one_star_lower_scores = 1097.5;
				var lodge_one_star_upper_scores = 1461;
				var lodge_one_star_number_of_stars = 1;
				//Two Stars Facility
				var lodge_two_stars_lower_scores = 1461;
				var lodge_two_stars_upper_scores = 2511;
				var lodge_two_stars_number_of_stars = 2;
				//Three Stars Facility
				var lodge_three_stars_lower_scores = 2511;
				var lodge_three_stars_upper_scores = 4020;
				var lodge_three_stars_number_of_stars = 3;
				//Four Stars Facility
				var lodge_four_stars_lower_scores = 4020;
				var lodge_four_stars_upper_scores = 4468;
				var lodge_four_stars_number_of_stars = 4;
				//Five Stars Facility
				var lodge_five_stars_lower_scores = 4468;
				var lodge_five_stars_upper_scores = 5585;
				var lodge_five_stars_number_of_stars = 5;
				$scope.lodge_filled_medium_size_stars_div_width = 0;
				$scope.lodge_filled_small_size_stars_div_width = 0;
				var lodge_star_portion_color = "#fde585";				
					
				if(($scope.lodge_overall_total_average >= lodge_approved_lower_scores) && ( $scope.lodge_overall_total_average < lodge_approved_upper_scores))
				{
					//aproved facility
					var lodge_approved_star_interval = (lodge_approved_upper_scores - lodge_approved_lower_scores);
					var lodge_approved_star_exceeded_scores = ($scope.lodge_overall_total_average - lodge_approved_lower_scores);
					//medium size stars				
					var lodge_approved_star_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * lodge_approved_star_exceeded_scores)/lodge_approved_star_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_approved_number_of_stars) + lodge_approved_star_medium_exceeded_length);
					//small size stars
					var lodge_approved_star_small_exceeded_length = parseInt(((lodge_star_small_exact_length * lodge_approved_star_exceeded_scores)/lodge_approved_star_interval));
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_approved_number_of_stars) + lodge_approved_star_small_exceeded_length);
					
					$scope.lodge_grade = "APPROVED FACILITY";
					$scope.lodge_color_one = lodge_star_portion_color;
				} 
				else if(($scope.lodge_overall_total_average >= lodge_one_star_lower_scores) && ( $scope.lodge_overall_total_average < lodge_one_star_upper_scores))
				{
					//one star facility
					var one_star_interval = (lodge_one_star_upper_scores - lodge_one_star_lower_scores);
					var one_star_exceeded_scores = ($scope.lodge_overall_total_average - lodge_one_star_lower_scores);
					//medium size stars				
					var one_star_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * one_star_exceeded_scores)/one_star_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_one_star_number_of_stars) + one_star_medium_exceeded_length);
					//small size stars
					var one_star_small_exceeded_length = parseInt(((lodge_star_small_exact_length * one_star_exceeded_scores)/one_star_interval));					
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_one_star_number_of_stars) + one_star_small_exceeded_length);
					
					$scope.lodge_grade = "ONE STAR";
					$scope.lodge_color_two = lodge_star_portion_color;
				}
				else if(($scope.lodge_overall_total_average >= lodge_two_stars_lower_scores) && ( $scope.lodge_overall_total_average < lodge_two_stars_upper_scores))
				{
					//two stars facility
					var lodge_two_stars_interval = (lodge_two_stars_upper_scores - lodge_two_stars_lower_scores);
					var lodge_two_stars_exceeded_scores = ($scope.lodge_overall_total_average - lodge_two_stars_lower_scores);
					//medium size stars			
					var lodge_two_stars_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * lodge_two_stars_exceeded_scores)/lodge_two_stars_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_two_stars_number_of_stars) + lodge_two_stars_medium_exceeded_length);
					//small size stars
					var lodge_two_stars_small_exceeded_length = parseInt(((lodge_star_small_exact_length * lodge_two_stars_exceeded_scores)/lodge_two_stars_interval));					
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_two_stars_number_of_stars) + lodge_two_stars_small_exceeded_length);
					
					$scope.lodge_grade = "TWO STARS";
					$scope.lodge_color_three = lodge_star_portion_color;
				}
				else if(($scope.lodge_overall_total_average >= lodge_three_stars_lower_scores) && ( $scope.lodge_overall_total_average < lodge_three_stars_upper_scores))
				{
					//three stars facility
					var lodge_three_stars_interval = (lodge_three_stars_upper_scores - lodge_three_stars_lower_scores);
					var lodge_three_stars_exceeded_scores = ($scope.lodge_overall_total_average - lodge_three_stars_lower_scores);
					//medium size stars				
					var lodge_three_stars_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * lodge_three_stars_exceeded_scores)/lodge_three_stars_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_three_stars_number_of_stars) + lodge_three_stars_medium_exceeded_length);
					//small size stars
					var lodge_three_stars_small_exceeded_length = parseInt(((lodge_star_small_exact_length * lodge_three_stars_exceeded_scores)/lodge_three_stars_interval));					
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_three_stars_number_of_stars) + lodge_three_stars_small_exceeded_length);
					
					$scope.lodge_grade = "THREE STARS";
					$scope.lodge_color_four = lodge_star_portion_color;
				}
				else if(($scope.lodge_overall_total_average >= lodge_four_stars_lower_scores) && ( $scope.lodge_overall_total_average < lodge_four_stars_upper_scores))
				{
					//four stars facility
					var lodge_four_stars_interval = (lodge_four_stars_upper_scores - lodge_four_stars_lower_scores);
					var lodge_four_stars_exceeded_scores = ($scope.lodge_overall_total_average - lodge_four_stars_lower_scores);
					//medium size stars			
					var lodge_four_stars_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * lodge_four_stars_exceeded_scores)/lodge_four_stars_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_four_stars_number_of_stars) + lodge_four_stars_medium_exceeded_length);
					//small size stars
					var lodge_four_stars_small_exceeded_length = parseInt(((lodge_star_small_exact_length * lodge_four_stars_exceeded_scores)/lodge_four_stars_interval));					
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_four_stars_number_of_stars) + lodge_four_stars_small_exceeded_length);
					
					$scope.lodge_grade = "FOUR STARS";
					$scope.lodge_color_five = lodge_star_portion_color;
				}
				else if(($scope.lodge_overall_total_average >= lodge_five_stars_lower_scores) && ( $scope.lodge_overall_total_average < lodge_five_stars_upper_scores))
				{
					//five stars facility
					var lodge_five_stars_interval = (lodge_five_stars_upper_scores - lodge_five_stars_lower_scores);
					var lodge_five_stars_exceeded_scores = ($scope.lodge_overall_total_average - lodge_five_stars_lower_scores);
					//medium size stars		
					var lodge_five_stars_medium_exceeded_length = parseInt(((lodge_star_medium_exact_length * lodge_five_stars_exceeded_scores)/lodge_five_stars_interval));					
					$scope.lodge_filled_medium_size_stars_div_width = ((lodge_star_medium_total_length * lodge_five_stars_number_of_stars) + lodge_five_stars_medium_exceeded_length);
					//small size stars
					var lodge_five_stars_small_exceeded_length = parseInt(((lodge_star_small_exact_length * lodge_five_stars_exceeded_scores)/lodge_five_stars_interval));					
					$scope.lodge_filled_small_size_stars_div_width = ((lodge_star_small_total_length * lodge_five_stars_number_of_stars) + lodge_five_stars_small_exceeded_length);
					
					$scope.lodge_grade = "FIVE STARS";
				}
				else
				{
				$scope.lodge_grade = "NOT QUALIFIED";
				$scope.lodge_filled_medium_size_stars_div_width = 0;
				$scope.lodge_filled_small_size_stars_div_width = 0;
				};
				
			
		//GRADING SECTIONS
						
			//GRADING LOCATION 1.0
															
				//Location Stars Limits				
				var lodge_three_stars_location_lower_scores = 24;
				var lodge_three_stars_location_upper_scores = 32;				
				var lodge_four_stars_location_lower_scores = 32;
				var lodge_four_stars_location_upper_scores = 40;				
				var lodge_five_stars_location_lower_scores = 40;
				$scope.lodge_filled_size_location_stars_div_width = 0;
								
				if(($scope.lodge_location_1_0_average >= lodge_three_stars_location_lower_scores) && ( $scope.lodge_location_1_0_average < lodge_three_stars_location_upper_scores))
				{
					//three stars location					
					var lodge_three_stars_location_interval = (lodge_three_stars_location_upper_scores - lodge_three_stars_location_lower_scores);
					var lodge_three_stars_location_exceeded_scores = ($scope.lodge_location_1_0_average - lodge_three_stars_location_lower_scores);
					//small size stars
					var lodge_three_stars_location_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_location_exceeded_scores)/lodge_three_stars_location_interval));					
					$scope.lodge_filled_size_location_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_location_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_location_1_0_average >= lodge_four_stars_location_lower_scores) && ( $scope.lodge_location_1_0_average < lodge_four_stars_location_upper_scores))
				{
					//four stars location
					var lodge_four_stars_location_interval = (lodge_four_stars_location_upper_scores - lodge_four_stars_location_lower_scores);
					var lodge_four_stars_location_exceeded_scores = ($scope.lodge_location_1_0_average - lodge_four_stars_location_lower_scores);
					//small size stars
					var lodge_four_stars_location_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_location_exceeded_scores)/lodge_four_stars_location_interval));					
					$scope.lodge_filled_size_location_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_location_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_location_1_0_average >= lodge_five_stars_location_lower_scores)
				{					
					var lodge_five_stars_location_exceeded_length = 0;
					$scope.lodge_filled_size_location_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_location_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_location_stars_div_width = 0;
				};
				
			//GRADING BUILDING 1.0
			//Building Stars Limits
				var lodge_three_stars_building_lower_scores = 60;
				var lodge_three_stars_building_upper_scores = 80;				
				var lodge_four_stars_building_lower_scores = 80;
				var lodge_four_stars_building_upper_scores = 100;				
				var lodge_five_stars_building_lower_scores = 100;
				$scope.lodge_filled_size_building_stars_div_width = 0;
								
				if(($scope.lodge_building_2_0_average >= lodge_three_stars_building_lower_scores) && ( $scope.lodge_building_2_0_average < lodge_three_stars_building_upper_scores))
				{
					//three stars building					
					var lodge_three_stars_building_interval = (lodge_three_stars_building_upper_scores - lodge_three_stars_building_lower_scores);
					var lodge_three_stars_building_exceeded_scores = ($scope.lodge_building_2_0_average - lodge_three_stars_building_lower_scores);
					//small size stars
					var lodge_three_stars_building_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_building_exceeded_scores)/lodge_three_stars_building_interval));					
					$scope.lodge_filled_size_building_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_building_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_building_2_0_average >= lodge_four_stars_building_lower_scores) && ( $scope.lodge_building_2_0_average < lodge_four_stars_building_upper_scores))
				{
					//four stars building
					var lodge_four_stars_building_interval = (lodge_four_stars_building_upper_scores - lodge_four_stars_building_lower_scores);
					var lodge_four_stars_building_exceeded_scores = ($scope.lodge_building_2_0_average - lodge_four_stars_building_lower_scores);
					//small size stars
					var lodge_four_stars_building_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_building_exceeded_scores)/lodge_four_stars_building_interval));					
					$scope.lodge_filled_size_building_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_building_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_building_2_0_average >= lodge_five_stars_building_lower_scores)
				{					
					var lodge_five_stars_building_exceeded_length = 0;
					$scope.lodge_filled_size_building_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_building_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_building_stars_div_width = 0;
				};
	
	
			//FRONT OFFICE 3.0
			//Front Office Stars Limits				
				var lodge_three_stars_front_office_lower_scores = 72;
				var lodge_three_stars_front_office_upper_scores = 96;				
				var lodge_four_stars_front_office_lower_scores = 96;
				var lodge_four_stars_front_office_upper_scores = 120;				
				var lodge_five_stars_front_office_lower_scores = 120;
				$scope.lodge_filled_size_front_office_stars_div_width = 0;
								
				if(($scope.lodge_front_office_3_0_average >= lodge_three_stars_front_office_lower_scores) && ( $scope.lodge_front_office_3_0_average < lodge_three_stars_front_office_upper_scores))
				{
					//three stars front_office					
					var lodge_three_stars_front_office_interval = (lodge_three_stars_front_office_upper_scores - lodge_three_stars_front_office_lower_scores);
					var lodge_three_stars_front_office_exceeded_scores = ($scope.lodge_front_office_3_0_average - lodge_three_stars_front_office_lower_scores);
					//small size stars
					var lodge_three_stars_front_office_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_front_office_exceeded_scores)/lodge_three_stars_front_office_interval));					
					$scope.lodge_filled_size_front_office_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_front_office_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_front_office_3_0_average >= lodge_four_stars_front_office_lower_scores) && ( $scope.lodge_front_office_3_0_average < lodge_four_stars_front_office_upper_scores))
				{
					//four stars front_office
					var lodge_four_stars_front_office_interval = (lodge_four_stars_front_office_upper_scores - lodge_four_stars_front_office_lower_scores);
					var lodge_four_stars_front_office_exceeded_scores = ($scope.lodge_front_office_3_0_average - lodge_four_stars_front_office_lower_scores);
					//small size stars
					var lodge_four_stars_front_office_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_front_office_exceeded_scores)/lodge_four_stars_front_office_interval));					
					$scope.lodge_filled_size_front_office_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_front_office_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_front_office_3_0_average >= lodge_five_stars_front_office_lower_scores)
				{					
					var lodge_five_stars_front_office_exceeded_length = 0;
					$scope.lodge_filled_size_front_office_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_front_office_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_front_office_stars_div_width = 0;
				};
				
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS 4.0															
			//lobby_lounge_other_public_areas Stars Limits				
				var lodge_three_stars_lobby_lounge_other_public_areas_lower_scores = 123;
				var lodge_three_stars_lobby_lounge_other_public_areas_upper_scores = 164;				
				var lodge_four_stars_lobby_lounge_other_public_areas_lower_scores = 164;
				var lodge_four_stars_lobby_lounge_other_public_areas_upper_scores = 205;				
				var lodge_five_stars_lobby_lounge_other_public_areas_lower_scores = 205;
				$scope.lodge_filled_size_lobby_lounge_other_public_areas_stars_div_width = 0;
								
				if(($scope.lodge_lobby_lounge_other_public_areas_4_0_average >= lodge_three_stars_lobby_lounge_other_public_areas_lower_scores) && ( $scope.lodge_lobby_lounge_other_public_areas_4_0_average < lodge_three_stars_lobby_lounge_other_public_areas_upper_scores))
				{
					//three stars lobby_lounge_other_public_areas					
					var lodge_three_stars_lobby_lounge_other_public_areas_interval = (lodge_three_stars_lobby_lounge_other_public_areas_upper_scores - lodge_three_stars_lobby_lounge_other_public_areas_lower_scores);
					var lodge_three_stars_lobby_lounge_other_public_areas_exceeded_scores = ($scope.lodge_lobby_lounge_other_public_areas_4_0_average - lodge_three_stars_lobby_lounge_other_public_areas_lower_scores);
					//small size stars
					var lodge_three_stars_lobby_lounge_other_public_areas_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_lobby_lounge_other_public_areas_exceeded_scores)/lodge_three_stars_lobby_lounge_other_public_areas_interval));					
					$scope.lodge_filled_size_lobby_lounge_other_public_areas_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_lobby_lounge_other_public_areas_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_lobby_lounge_other_public_areas_4_0_average >= lodge_four_stars_lobby_lounge_other_public_areas_lower_scores) && ( $scope.lodge_lobby_lounge_other_public_areas_4_0_average < lodge_four_stars_lobby_lounge_other_public_areas_upper_scores))
				{
					//four stars lobby_lounge_other_public_areas
					var lodge_four_stars_lobby_lounge_other_public_areas_interval = (lodge_four_stars_lobby_lounge_other_public_areas_upper_scores - lodge_four_stars_lobby_lounge_other_public_areas_lower_scores);
					var lodge_four_stars_lobby_lounge_other_public_areas_exceeded_scores = ($scope.lodge_lobby_lounge_other_public_areas_4_0_average - lodge_four_stars_lobby_lounge_other_public_areas_lower_scores);
					//small size stars
					var lodge_four_stars_lobby_lounge_other_public_areas_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_lobby_lounge_other_public_areas_exceeded_scores)/lodge_four_stars_lobby_lounge_other_public_areas_interval));					
					$scope.lodge_filled_size_lobby_lounge_other_public_areas_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_lobby_lounge_other_public_areas_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_lobby_lounge_other_public_areas_4_0_average >= lodge_five_stars_lobby_lounge_other_public_areas_lower_scores)
				{					
					var lodge_five_stars_lobby_lounge_other_public_areas_exceeded_length = 0;
					$scope.lodge_filled_size_lobby_lounge_other_public_areas_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_lobby_lounge_other_public_areas_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_lobby_lounge_other_public_areas_stars_div_width = 0;
				};
				
			//FUNCTION ROOMS 5.0															
				//function rooms Stars Limits				
				var lodge_three_stars_function_rooms_lower_scores = 21;
				var lodge_three_stars_function_rooms_upper_scores = 28;				
				var lodge_four_stars_function_rooms_lower_scores = 28;
				var lodge_four_stars_function_rooms_upper_scores = 35;				
				var lodge_five_stars_function_rooms_lower_scores = 35;
				$scope.lodge_filled_size_function_rooms_stars_div_width = 0;
								
				if(($scope.lodge_function_rooms_5_0_average >= lodge_three_stars_function_rooms_lower_scores) && ( $scope.lodge_function_rooms_5_0_average < lodge_three_stars_function_rooms_upper_scores))
				{
					//three stars function_rooms					
					var lodge_three_stars_function_rooms_interval = (lodge_three_stars_function_rooms_upper_scores - lodge_three_stars_function_rooms_lower_scores);
					var lodge_three_stars_function_rooms_exceeded_scores = ($scope.lodge_function_rooms_5_0_average - lodge_three_stars_function_rooms_lower_scores);
					//small size stars
					var lodge_three_stars_function_rooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_function_rooms_exceeded_scores)/lodge_three_stars_function_rooms_interval));					
					$scope.lodge_filled_size_function_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_function_rooms_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_function_rooms_5_0_average >= lodge_four_stars_function_rooms_lower_scores) && ( $scope.lodge_function_rooms_5_0_average < lodge_four_stars_function_rooms_upper_scores))
				{
					//four stars function_rooms
					var lodge_four_stars_function_rooms_interval = (lodge_four_stars_function_rooms_upper_scores - lodge_four_stars_function_rooms_lower_scores);
					var lodge_four_stars_function_rooms_exceeded_scores = ($scope.lodge_function_rooms_5_0_average - lodge_four_stars_function_rooms_lower_scores);
					//small size stars
					var lodge_four_stars_function_rooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_function_rooms_exceeded_scores)/lodge_four_stars_function_rooms_interval));					
					$scope.lodge_filled_size_function_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_function_rooms_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_function_rooms_5_0_average >= lodge_five_stars_function_rooms_lower_scores)
				{					
					var lodge_five_stars_function_rooms_exceeded_length = 0;
					$scope.lodge_filled_size_function_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_function_rooms_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_function_rooms_stars_div_width = 0;
				};
				
			//GRADING RESTAURANTS 6.0
															
				//restaurants Stars Limits				
				var lodge_three_stars_restaurants_lower_scores = 126;
				var lodge_three_stars_restaurants_upper_scores = 168;			
				var lodge_four_stars_restaurants_lower_scores = 168;
				var lodge_four_stars_restaurants_upper_scores = 210;				
				var lodge_five_stars_restaurants_lower_scores = 210;
				$scope.lodge_filled_size_restaurants_stars_div_width = 0;
								
				if(($scope.lodge_restaurants_6_0_average >= lodge_three_stars_restaurants_lower_scores) && ( $scope.lodge_restaurants_6_0_average < lodge_three_stars_restaurants_upper_scores))
				{
					//three stars restaurants					
					var lodge_three_stars_restaurants_interval = (lodge_three_stars_restaurants_upper_scores - lodge_three_stars_restaurants_lower_scores);
					var lodge_three_stars_restaurants_exceeded_scores = ($scope.lodge_restaurants_6_0_average - lodge_three_stars_restaurants_lower_scores);
					//small size stars
					var lodge_three_stars_restaurants_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_restaurants_exceeded_scores)/lodge_three_stars_restaurants_interval));					
					$scope.lodge_filled_size_restaurants_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_restaurants_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_restaurants_6_0_average >= lodge_four_stars_restaurants_lower_scores) && ( $scope.lodge_restaurants_6_0_average < lodge_four_stars_restaurants_upper_scores))
				{
					//four stars restaurants
					var lodge_four_stars_restaurants_interval = (lodge_four_stars_restaurants_upper_scores - lodge_four_stars_restaurants_lower_scores);
					var lodge_four_stars_restaurants_exceeded_scores = ($scope.lodge_restaurants_6_0_average - lodge_four_stars_restaurants_lower_scores);
					//small size stars
					var lodge_four_stars_restaurants_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_restaurants_exceeded_scores)/lodge_four_stars_restaurants_interval));					
					$scope.lodge_filled_size_restaurants_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_restaurants_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_restaurants_6_0_average >= lodge_five_stars_restaurants_lower_scores)
				{					
					var lodge_five_stars_restaurants_exceeded_length = 0;
					$scope.lodge_filled_size_restaurants_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_restaurants_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_restaurants_stars_div_width = 0;
				};
				
				
			//GRADING BAR
												
				//Bar Stars Limits				
				var lodge_three_stars_bar_lower_scores = 114;
				var lodge_three_stars_bar_upper_scores = 152;				
				var lodge_four_stars_bar_lower_scores = 152;
				var lodge_four_stars_bar_upper_scores = 190;				
				var lodge_five_stars_bar_lower_scores = 190;
				$scope.lodge_filled_size_bar_stars_div_width = 0;
								
				if(($scope.lodge_bar_7_0_average >= lodge_three_stars_bar_lower_scores) && ( $scope.lodge_bar_7_0_average < lodge_three_stars_bar_upper_scores))
				{
					//three stars bar					
					var lodge_three_stars_bar_interval = (lodge_three_stars_bar_upper_scores - lodge_three_stars_bar_lower_scores);
					var lodge_three_stars_bar_exceeded_scores = ($scope.lodge_bar_7_0_average - lodge_three_stars_bar_lower_scores);
					//small size stars
					var lodge_three_stars_bar_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_bar_exceeded_scores)/lodge_three_stars_bar_interval));					
					$scope.lodge_filled_size_bar_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_bar_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_bar_7_0_average >= lodge_four_stars_bar_lower_scores) && ( $scope.lodge_bar_7_0_average < lodge_four_stars_bar_upper_scores))
				{
					//four stars bar
					var lodge_four_stars_bar_interval = (lodge_four_stars_bar_upper_scores - lodge_four_stars_bar_lower_scores);
					var lodge_four_stars_bar_exceeded_scores = ($scope.lodge_bar_7_0_average - lodge_four_stars_bar_lower_scores);
					//small size stars
					var lodge_four_stars_bar_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_bar_exceeded_scores)/lodge_four_stars_bar_interval));					
					$scope.lodge_filled_size_bar_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_bar_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_bar_7_0_average >= lodge_five_stars_bar_lower_scores)
				{					
					var lodge_five_stars_bar_exceeded_length = 0;
					$scope.lodge_filled_size_bar_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_bar_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_bar_stars_div_width = 0;
				};
				
				//GRADING KITCHEN
												
				//Kitchen Stars Limits				
				var lodge_three_stars_kitchen_lower_scores = 151.5;
				var lodge_three_stars_kitchen_upper_scores = 202;				
				var lodge_four_stars_kitchen_lower_scores = 202;
				var lodge_four_stars_kitchen_upper_scores = 252.5;				
				var lodge_five_stars_kitchen_lower_scores = 252.5;
				$scope.lodge_filled_size_kitchen_stars_div_width = 0;
								
				if(($scope.lodge_kitchen_8_0_average >= lodge_three_stars_kitchen_lower_scores) && ( $scope.lodge_kitchen_8_0_average < lodge_three_stars_kitchen_upper_scores))
				{
					//three stars kitchen					
					var lodge_three_stars_kitchen_interval = (lodge_three_stars_kitchen_upper_scores - lodge_three_stars_kitchen_lower_scores);
					var lodge_three_stars_kitchen_exceeded_scores = ($scope.lodge_kitchen_8_0_average - lodge_three_stars_kitchen_lower_scores);
					//small size stars
					var lodge_three_stars_kitchen_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_kitchen_exceeded_scores)/lodge_three_stars_kitchen_interval));					
					$scope.lodge_filled_size_kitchen_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_kitchen_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_kitchen_8_0_average >= lodge_four_stars_kitchen_lower_scores) && ( $scope.lodge_kitchen_8_0_average < lodge_four_stars_kitchen_upper_scores))
				{
					//four stars kitchen
					var lodge_four_stars_kitchen_interval = (lodge_four_stars_kitchen_upper_scores - lodge_four_stars_kitchen_lower_scores);
					var lodge_four_stars_kitchen_exceeded_scores = ($scope.lodge_kitchen_8_0_average - lodge_four_stars_kitchen_lower_scores);
					//small size stars
					var lodge_four_stars_kitchen_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_kitchen_exceeded_scores)/lodge_four_stars_kitchen_interval));					
					$scope.lodge_filled_size_kitchen_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_kitchen_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_kitchen_8_0_average >= lodge_five_stars_kitchen_lower_scores)
				{					
					var lodge_five_stars_kitchen_exceeded_length = 0;
					$scope.lodge_filled_size_kitchen_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_kitchen_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_kitchen_stars_div_width = 0;
				};
				
				
		//GUEST ROOMS 9.0
																	
				//Guest rooms stars limits				
				var lodge_three_stars_guest_rooms_lower_scores = 210;
				var lodge_three_stars_guest_rooms_upper_scores = 280;				
				var lodge_four_stars_guest_rooms_lower_scores = 280;
				var lodge_four_stars_guest_rooms_upper_scores = 350;				
				var lodge_five_stars_guest_rooms_lower_scores = 350;
				$scope.lodge_filled_size_guest_rooms_stars_div_width = 0;
								
				if(($scope.lodge_guest_rooms_9_0_average >= lodge_three_stars_guest_rooms_lower_scores) && ( $scope.lodge_guest_rooms_9_0_average < lodge_three_stars_guest_rooms_upper_scores))
				{
					//three stars guest_rooms					
					var lodge_three_stars_guest_rooms_interval = (lodge_three_stars_guest_rooms_upper_scores - lodge_three_stars_guest_rooms_lower_scores);
					var lodge_three_stars_guest_rooms_exceeded_scores = ($scope.lodge_guest_rooms_9_0_average - lodge_three_stars_guest_rooms_lower_scores);
					//small size stars
					var lodge_three_stars_guest_rooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_guest_rooms_exceeded_scores)/lodge_three_stars_guest_rooms_interval));					
					$scope.lodge_filled_size_guest_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_guest_rooms_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_guest_rooms_9_0_average >= lodge_four_stars_guest_rooms_lower_scores) && ( $scope.lodge_guest_rooms_9_0_average < lodge_four_stars_guest_rooms_upper_scores))
				{
					//four stars guest_rooms
					var lodge_four_stars_guest_rooms_interval = (lodge_four_stars_guest_rooms_upper_scores - lodge_four_stars_guest_rooms_lower_scores);
					var lodge_four_stars_guest_rooms_exceeded_scores = ($scope.lodge_guest_rooms_9_0_average - lodge_four_stars_guest_rooms_lower_scores);
					//small size stars
					var lodge_four_stars_guest_rooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_guest_rooms_exceeded_scores)/lodge_four_stars_guest_rooms_interval));					
					$scope.lodge_filled_size_guest_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_guest_rooms_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_guest_rooms_9_0_average >= lodge_five_stars_guest_rooms_lower_scores)
				{					
					var lodge_five_stars_guest_rooms_exceeded_length = 0;
					$scope.lodge_filled_size_guest_rooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_guest_rooms_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_guest_rooms_stars_div_width = 0;
				};
				
				
		//GRADING GUEST BATHROOMS 10.0
											
				//Guest bathrooms Stars Limits				
				var lodge_three_stars_guest_bathrooms_lower_scores = 108;
				var lodge_three_stars_guest_bathrooms_upper_scores = 144;				
				var lodge_four_stars_guest_bathrooms_lower_scores = 144;
				var lodge_four_stars_guest_bathrooms_upper_scores = 180;				
				var lodge_five_stars_guest_bathrooms_lower_scores = 180;
				$scope.lodge_filled_size_guest_bathrooms_stars_div_width = 0;
								
				if(($scope.lodge_guest_bathrooms_10_0_average >= lodge_three_stars_guest_bathrooms_lower_scores) && ( $scope.lodge_guest_bathrooms_10_0_average < lodge_three_stars_guest_bathrooms_upper_scores))
				{
					//three stars guest_bathrooms					
					var lodge_three_stars_guest_bathrooms_interval = (lodge_three_stars_guest_bathrooms_upper_scores - lodge_three_stars_guest_bathrooms_lower_scores);
					var lodge_three_stars_guest_bathrooms_exceeded_scores = ($scope.lodge_guest_bathrooms_10_0_average - lodge_three_stars_guest_bathrooms_lower_scores);
					//small size stars
					var lodge_three_stars_guest_bathrooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_guest_bathrooms_exceeded_scores)/lodge_three_stars_guest_bathrooms_interval));					
					$scope.lodge_filled_size_guest_bathrooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_guest_bathrooms_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_guest_bathrooms_10_0_average >= lodge_four_stars_guest_bathrooms_lower_scores) && ( $scope.lodge_guest_bathrooms_10_0_average < lodge_four_stars_guest_bathrooms_upper_scores))
				{
					//four stars guest_bathrooms
					var lodge_four_stars_guest_bathrooms_interval = (lodge_four_stars_guest_bathrooms_upper_scores - lodge_four_stars_guest_bathrooms_lower_scores);
					var lodge_four_stars_guest_bathrooms_exceeded_scores = ($scope.lodge_guest_bathrooms_10_0_average - lodge_four_stars_guest_bathrooms_lower_scores);
					//small size stars
					var lodge_four_stars_guest_bathrooms_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_guest_bathrooms_exceeded_scores)/lodge_four_stars_guest_bathrooms_interval));					
					$scope.lodge_filled_size_guest_bathrooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_guest_bathrooms_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_guest_bathrooms_10_0_average >= lodge_five_stars_guest_bathrooms_lower_scores)
				{					
					var lodge_five_stars_guest_bathrooms_exceeded_length = 0;
					$scope.lodge_filled_size_guest_bathrooms_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_guest_bathrooms_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_guest_bathrooms_stars_div_width = 0;
				};
				
		//SUITES 11_0
								
				//Suites stars limits				
				var lodge_three_stars_suites_lower_scores = 309;
				var lodge_three_stars_suites_upper_scores = 412;				
				var lodge_four_stars_suites_lower_scores = 412;
				var lodge_four_stars_suites_upper_scores = 515;				
				var lodge_five_stars_suites_lower_scores = 515;
				$scope.lodge_filled_size_suites_stars_div_width = 0;
								
				if(($scope.lodge_suites_11_0_average >= lodge_three_stars_suites_lower_scores) && ( $scope.lodge_suites_11_0_average < lodge_three_stars_suites_upper_scores))
				{
					//three stars suites					
					var lodge_three_stars_suites_interval = (lodge_three_stars_suites_upper_scores - lodge_three_stars_suites_lower_scores);
					var lodge_three_stars_suites_exceeded_scores = ($scope.lodge_suites_11_0_average - lodge_three_stars_suites_lower_scores);
					//small size stars
					var lodge_three_stars_suites_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_suites_exceeded_scores)/lodge_three_stars_suites_interval));					
					$scope.lodge_filled_size_suites_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_suites_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_suites_11_0_average >= lodge_four_stars_suites_lower_scores) && ( $scope.lodge_suites_11_0_average < lodge_four_stars_suites_upper_scores))
				{
					//four stars suites
					var lodge_four_stars_suites_interval = (lodge_four_stars_suites_upper_scores - lodge_four_stars_suites_lower_scores);
					var lodge_four_stars_suites_exceeded_scores = ($scope.lodge_suites_11_0_average - lodge_four_stars_suites_lower_scores);
					//small size stars
					var lodge_four_stars_suites_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_suites_exceeded_scores)/lodge_four_stars_suites_interval));					
					$scope.lodge_filled_size_suites_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_suites_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_suites_11_0_average >= lodge_five_stars_suites_lower_scores)
				{					
					var lodge_five_stars_suites_exceeded_length = 0;
					$scope.lodge_filled_size_suites_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_suites_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_suites_stars_div_width = 0;
				};
						
		//HYGIENE AND SANITATION 12.0			
		
			//Hygiene and sanitation stars limits				
				var lodge_three_stars_hygiene_and_sanitation_lower_scores = 72;
				var lodge_three_stars_hygiene_and_sanitation_upper_scores = 96;				
				var lodge_four_stars_hygiene_and_sanitation_lower_scores = 96;
				var lodge_four_stars_hygiene_and_sanitation_upper_scores = 120;				
				var lodge_five_stars_hygiene_and_sanitation_lower_scores = 120;
				$scope.lodge_filled_size_hygiene_and_sanitation_stars_div_width = 0;
								
				if(($scope.lodge_hygiene_and_sanitation_12_0_average >= lodge_three_stars_hygiene_and_sanitation_lower_scores) && ( $scope.lodge_hygiene_and_sanitation_12_0_average < lodge_three_stars_hygiene_and_sanitation_upper_scores))
				{
					//three stars hygiene_and_sanitation					
					var lodge_three_stars_hygiene_and_sanitation_interval = (lodge_three_stars_hygiene_and_sanitation_upper_scores - lodge_three_stars_hygiene_and_sanitation_lower_scores);
					var lodge_three_stars_hygiene_and_sanitation_exceeded_scores = ($scope.lodge_hygiene_and_sanitation_12_0_average - lodge_three_stars_hygiene_and_sanitation_lower_scores);
					//small size stars
					var lodge_three_stars_hygiene_and_sanitation_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_hygiene_and_sanitation_exceeded_scores)/lodge_three_stars_hygiene_and_sanitation_interval));					
					$scope.lodge_filled_size_hygiene_and_sanitation_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_hygiene_and_sanitation_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_hygiene_and_sanitation_12_0_average >= lodge_four_stars_hygiene_and_sanitation_lower_scores) && ( $scope.lodge_hygiene_and_sanitation_12_0_average < lodge_four_stars_hygiene_and_sanitation_upper_scores))
				{
					//four stars hygiene_and_sanitation
					var lodge_four_stars_hygiene_and_sanitation_interval = (lodge_four_stars_hygiene_and_sanitation_upper_scores - lodge_four_stars_hygiene_and_sanitation_lower_scores);
					var lodge_four_stars_hygiene_and_sanitation_exceeded_scores = ($scope.lodge_hygiene_and_sanitation_12_0_average - lodge_four_stars_hygiene_and_sanitation_lower_scores);
					//small size stars
					var lodge_four_stars_hygiene_and_sanitation_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_hygiene_and_sanitation_exceeded_scores)/lodge_four_stars_hygiene_and_sanitation_interval));					
					$scope.lodge_filled_size_hygiene_and_sanitation_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_hygiene_and_sanitation_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_hygiene_and_sanitation_12_0_average >= lodge_five_stars_hygiene_and_sanitation_lower_scores)
				{					
					var lodge_five_stars_hygiene_and_sanitation_exceeded_length = 0;
					$scope.lodge_filled_size_hygiene_and_sanitation_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_hygiene_and_sanitation_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_hygiene_and_sanitation_stars_div_width = 0;
				};
				
	//SAFETY AND SECURITY

			//safety_and_security stars limits				
				var lodge_three_stars_safety_and_security_lower_scores = 48;
				var lodge_three_stars_safety_and_security_upper_scores = 64;				
				var lodge_four_stars_safety_and_security_lower_scores = 64;
				var lodge_four_stars_safety_and_security_upper_scores = 80;				
				var lodge_five_stars_safety_and_security_lower_scores = 80;
				$scope.lodge_filled_size_safety_and_security_stars_div_width = 0;
								
				if(($scope.lodge_safety_and_security_13_0_average >= lodge_three_stars_safety_and_security_lower_scores) && ( $scope.lodge_safety_and_security_13_0_average < lodge_three_stars_safety_and_security_upper_scores))
				{
					//three stars safety_and_security					
					var lodge_three_stars_safety_and_security_interval = (lodge_three_stars_safety_and_security_upper_scores - lodge_three_stars_safety_and_security_lower_scores);
					var lodge_three_stars_safety_and_security_exceeded_scores = ($scope.lodge_safety_and_security_13_0_average - lodge_three_stars_safety_and_security_lower_scores);
					//small size stars
					var lodge_three_stars_safety_and_security_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_safety_and_security_exceeded_scores)/lodge_three_stars_safety_and_security_interval));					
					$scope.lodge_filled_size_safety_and_security_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_safety_and_security_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_safety_and_security_13_0_average >= lodge_four_stars_safety_and_security_lower_scores) && ( $scope.lodge_safety_and_security_13_0_average < lodge_four_stars_safety_and_security_upper_scores))
				{
					//four stars safety_and_security
					var lodge_four_stars_safety_and_security_interval = (lodge_four_stars_safety_and_security_upper_scores - lodge_four_stars_safety_and_security_lower_scores);
					var lodge_four_stars_safety_and_security_exceeded_scores = ($scope.lodge_safety_and_security_13_0_average - lodge_four_stars_safety_and_security_lower_scores);
					//small size stars
					var lodge_four_stars_safety_and_security_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_safety_and_security_exceeded_scores)/lodge_four_stars_safety_and_security_interval));					
					$scope.lodge_filled_size_safety_and_security_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_safety_and_security_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_safety_and_security_13_0_average >= lodge_five_stars_safety_and_security_lower_scores)
				{					
					var lodge_five_stars_safety_and_security_exceeded_length = 0;
					$scope.lodge_filled_size_safety_and_security_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_safety_and_security_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_safety_and_security_stars_div_width = 0;
				};
				
	//SUNDRY SERVICES

			//sundry_services stars limits				
				var lodge_three_stars_sundry_services_lower_scores = 24;
				var lodge_three_stars_sundry_services_upper_scores = 32;				
				var lodge_four_stars_sundry_services_lower_scores = 32;
				var lodge_four_stars_sundry_services_upper_scores = 40;				
				var lodge_five_stars_sundry_services_lower_scores = 40;
				$scope.lodge_filled_size_sundry_services_stars_div_width = 0;
								
				if(($scope.lodge_sundry_services_14_0_average >= lodge_three_stars_sundry_services_lower_scores) && ( $scope.lodge_sundry_services_14_0_average < lodge_three_stars_sundry_services_upper_scores))
				{
					//three stars sundry_services					
					var lodge_three_stars_sundry_services_interval = (lodge_three_stars_sundry_services_upper_scores - lodge_three_stars_sundry_services_lower_scores);
					var lodge_three_stars_sundry_services_exceeded_scores = ($scope.lodge_sundry_services_14_0_average - lodge_three_stars_sundry_services_lower_scores);
					//small size stars
					var lodge_three_stars_sundry_services_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_sundry_services_exceeded_scores)/lodge_three_stars_sundry_services_interval));					
					$scope.lodge_filled_size_sundry_services_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_sundry_services_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_sundry_services_14_0_average >= lodge_four_stars_sundry_services_lower_scores) && ( $scope.lodge_sundry_services_14_0_average < lodge_four_stars_sundry_services_upper_scores))
				{
					//four stars sundry_services
					var lodge_four_stars_sundry_services_interval = (lodge_four_stars_sundry_services_upper_scores - lodge_four_stars_sundry_services_lower_scores);
					var lodge_four_stars_sundry_services_exceeded_scores = ($scope.lodge_sundry_services_14_0_average - lodge_four_stars_sundry_services_lower_scores);
					//small size stars
					var lodge_four_stars_sundry_services_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_sundry_services_exceeded_scores)/lodge_four_stars_sundry_services_interval));					
					$scope.lodge_filled_size_sundry_services_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_sundry_services_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_sundry_services_14_0_average >= lodge_five_stars_sundry_services_lower_scores)
				{					
					var lodge_five_stars_sundry_services_exceeded_length = 0;
					$scope.lodge_filled_size_sundry_services_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_sundry_services_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_sundry_services_stars_div_width = 0;
				};			
					
	//HUMAN RESOURCES 15.0
	
				//human_resources stars Limits				
				var lodge_three_stars_human_resources_lower_scores = 87;
				var lodge_three_stars_human_resources_upper_scores = 116;				
				var lodge_four_stars_human_resources_lower_scores = 116;
				var lodge_four_stars_human_resources_upper_scores = 145;				
				var lodge_five_stars_human_resources_lower_scores = 145;
				$scope.lodge_filled_size_human_resources_stars_div_width = 0;
								
				if(($scope.lodge_human_resources_15_0_average >= lodge_three_stars_human_resources_lower_scores) && ( $scope.lodge_human_resources_15_0_average < lodge_three_stars_human_resources_upper_scores))
				{
					//three stars human_resources					
					var lodge_three_stars_human_resources_interval = (lodge_three_stars_human_resources_upper_scores - lodge_three_stars_human_resources_lower_scores);
					var lodge_three_stars_human_resources_exceeded_scores = ($scope.lodge_human_resources_15_0_average - lodge_three_stars_human_resources_lower_scores);
					//small size stars
					var lodge_three_stars_human_resources_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_human_resources_exceeded_scores)/lodge_three_stars_human_resources_interval));					
					$scope.lodge_filled_size_human_resources_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_human_resources_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_human_resources_15_0_average >= lodge_four_stars_human_resources_lower_scores) && ( $scope.lodge_human_resources_15_0_average < lodge_four_stars_human_resources_upper_scores))
				{
					//four stars human_resources
					var lodge_four_stars_human_resources_interval = (lodge_four_stars_human_resources_upper_scores - lodge_four_stars_human_resources_lower_scores);
					var lodge_four_stars_human_resources_exceeded_scores = ($scope.lodge_human_resources_15_0_average - lodge_four_stars_human_resources_lower_scores);
					//small size stars
					var lodge_four_stars_human_resources_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_human_resources_exceeded_scores)/lodge_four_stars_human_resources_interval));					
					$scope.lodge_filled_size_human_resources_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_human_resources_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_human_resources_15_0_average >= lodge_five_stars_human_resources_lower_scores)
				{					
					var lodge_five_stars_human_resources_exceeded_length = 0;
					$scope.lodge_filled_size_human_resources_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_human_resources_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_human_resources_stars_div_width = 0;
				};
			
						
	//GENERAL	
			//general stars Limits				
				var lodge_three_stars_general_lower_scores = 126;
				var lodge_three_stars_general_upper_scores = 168;				
				var lodge_four_stars_general_lower_scores = 168;
				var lodge_four_stars_general_upper_scores = 210;				
				var lodge_five_stars_general_lower_scores = 210;
				$scope.lodge_filled_size_general_stars_div_width = 0;
								
				if(($scope.lodge_general_16_0_average >= lodge_three_stars_general_lower_scores) && ( $scope.lodge_general_16_0_average < lodge_three_stars_general_upper_scores))
				{
					//three stars general					
					var lodge_three_stars_general_interval = (lodge_three_stars_general_upper_scores - lodge_three_stars_general_lower_scores);
					var lodge_three_stars_general_exceeded_scores = ($scope.lodge_general_16_0_average - lodge_three_stars_general_lower_scores);
					//small size stars
					var lodge_three_stars_general_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_three_stars_general_exceeded_scores)/lodge_three_stars_general_interval));					
					$scope.lodge_filled_size_general_stars_div_width = ((lodge_section_star_total_length * lodge_section_three_stars_number_of_stars) + lodge_three_stars_general_exceeded_length);
					$scope.lodge_section_color_fourth_star = lodge_section_star_portion_color;
					
				}else if(($scope.lodge_general_16_0_average >= lodge_four_stars_general_lower_scores) && ( $scope.lodge_general_16_0_average < lodge_four_stars_general_upper_scores))
				{
					//four stars general
					var lodge_four_stars_general_interval = (lodge_four_stars_general_upper_scores - lodge_four_stars_general_lower_scores);
					var lodge_four_stars_general_exceeded_scores = ($scope.lodge_general_16_0_average - lodge_four_stars_general_lower_scores);
					//small size stars
					var lodge_four_stars_general_exceeded_length = parseInt(((lodge_section_star_exact_length * lodge_four_stars_general_exceeded_scores)/lodge_four_stars_general_interval));					
					$scope.lodge_filled_size_general_stars_div_width = ((lodge_section_star_total_length * lodge_section_four_stars_number_of_stars) + lodge_four_stars_general_exceeded_length);
					$scope.lodge_section_color_fifth_star = lodge_section_star_portion_color;					
				}
				else if($scope.lodge_general_16_0_average >= lodge_five_stars_general_lower_scores)
				{					
					var lodge_five_stars_general_exceeded_length = 0;
					$scope.lodge_filled_size_general_stars_div_width = ((lodge_section_star_total_length * lodge_section_five_stars_number_of_stars) + lodge_five_stars_general_exceeded_length);
				}
				else
				{
					$scope.lodge_filled_size_general_stars_div_width = 0;
				};

									
			//OPEN SHEET							
			$scope.open_tallying_sheet_for_lodge();	
			
			});
	};
	
	
	$scope.open_tallying_sheet_for_lodge = function(){
		var modal_popup = angular.element('#tallying_sheet_for_lodge_panel');
		modal_popup.modal('show');
	};
	$scope.close_tallying_sheet_for_lodge = function(){
		var modal_popup = angular.element('#tallying_sheet_for_lodge_panel');
		modal_popup.modal('hide');
	};
	
	

};
<!---------------------------------------->

/**************/