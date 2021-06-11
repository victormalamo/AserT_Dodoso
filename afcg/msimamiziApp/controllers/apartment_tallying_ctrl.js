app.apartment_tallying_ctrl = function($timeout, $scope, $http, focus){

		 $scope.fetch_apartment_items_for_tallying = function(assessment_id, assessor_category){
			$http({
			method:"POST",
			url:"msimamiziApp/sajili_mtumiaji/fetch_apartment_items_for_tallying.php",
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
								
			//OVERALL TOTAL AND AVERAGE
				$scope.overall_total_self_self = $scope.location_1_0_self_self;	
				$scope.overall_total_self_assessor_1 = $scope.location_1_0_self_assessor_1;
				$scope.overall_total_self_assessor_2 = $scope.location_1_0_self_assessor_2;
				$scope.overall_total_self_assessor_3 = $scope.location_1_0_self_assessor_3;
				$scope.overall_total_average = $scope.location_1_0_average;
				
				$scope.overall_not_reconciled = false;
				if(($scope.location_not_reconciled)){ $scope.overall_not_reconciled = true; }
				
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
				
			
												
			//OPEN SHEET							
			$scope.open_tallying_sheet_for_apartment();	
			
			});
	};
	
	
	$scope.open_tallying_sheet_for_apartment = function(){
		var modal_popup = angular.element('#tallying_sheet_for_apartment_panel');
		modal_popup.modal('show');
	};
	$scope.close_tallying_sheet_for_apartment = function(){
		var modal_popup = angular.element('#tallying_sheet_for_apartment_panel');
		modal_popup.modal('hide');
	};
	
	

};
<!---------------------------------------->

/**************/