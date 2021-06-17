<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

//Detect assessor category
///////////////$assessor_category = $form_data->assessor_category;
//$assessor_category = 'self_self';
//$assessor_category = 'self_assessor_1';
//$assessor_category = 'self_assessor_2';
//$assessor_category = 'self_assessor_3';
//$assessor_category = 'gov_assessor_1';
//$assessor_category = 'gov_assessor_2';
//$assessor_category = 'gov_assessor_3';
////////////$assessor_score_column = 'assessment_score_'.$assessor_category;


	$message = '';
	$connection_error = '';
	$output = array();
	$assessment_id = $form_data->assessment_id;
	
	
	//// SELF_SELF ////
	
	$query = "SELECT * FROM afcg_assessment_town_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_self'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			//1.1
			$location_1_1_self_self = $row['location_1_1_1_A'] + $row['location_1_1_2_A'] + $row['location_1_1_3_A'] + $row['location_1_1_3_B'] + $row['location_1_1_4_A'] + $row['location_1_1_4_B'] + $row['location_1_1_5_A'] + $row['location_1_1_6_A'];				
			//1.2			
			$location_1_2_self_self = $row['location_1_2_1_A'] + $row['location_1_2_2_A'] + $row['location_1_2_3_A'] + $row['location_1_2_3_B_a'] + $row['location_1_2_3_B_b'] + $row['location_1_2_3_B_c'] + $row['location_1_2_3_B_d'] + $row['location_1_2_3_B_e'] + $row['location_1_2_4_A'] + $row['location_1_2_4_B'] + $row['location_1_2_4_C'] + $row['location_1_2_5_A'] + $row['location_1_2_5_B'] + $row['location_1_2_5_C'] + $row['location_1_2_5_D'];
			//1.0
			$output['location_1_1_self_self'] = $location_1_1_self_self;
			$output['location_1_2_self_self'] = $location_1_2_self_self;
			$output['location_1_0_self_self'] = $location_1_1_self_self + $location_1_2_self_self;
			//BUILDING 2.0
			//2.1
			$building_2_1_self_self = $row['building_2_1_1_A'] + $row['building_2_1_2_A'] + $row['building_2_1_2_B'] + $row['building_2_1_2_C'] + $row['building_2_1_2_D'];				
			//2.2			
			$building_2_2_self_self = $row['building_2_2_1_A'] + $row['building_2_2_1_B'] + $row['building_2_2_2_A'] + $row['building_2_2_2_B'] + $row['building_2_2_2_C'] + $row['building_2_2_2_D'] + $row['building_2_2_2_E'] + $row['building_2_2_2_F'] + $row['building_2_2_2_G'];
			//2.3
			$building_2_3_self_self = $row['building_2_3_1_A'] + 0;
			//2.4
			$building_2_4_self_self = $row['building_2_4_1_A'] + $row['building_2_4_1_B'] + $row['building_2_4_1_C'] + $row['building_2_4_1_D'] + $row['building_2_4_1_E'] + $row['building_2_4_1_F'] + $row['building_2_4_1_G'] + $row['building_2_4_1_H'] + $row['building_2_4_1_I'] + $row['building_2_4_1_J'] + $row['building_2_4_1_K'];
			//2.0
			$output['building_2_1_self_self'] = $building_2_1_self_self;
			$output['building_2_2_self_self'] = $building_2_2_self_self;
			$output['building_2_3_self_self'] = $building_2_3_self_self;
			$output['building_2_4_self_self'] = $building_2_4_self_self;
			$output['building_2_0_self_self'] = $building_2_1_self_self + $building_2_2_self_self + $building_2_3_self_self + $building_2_4_self_self;
			//FRONT OFFICE 3.0
			$front_office_3_1_self_self = $row['front_office_3_1_1_A'] + $row['front_office_3_1_1_B'] + $row['front_office_3_1_1_C'] + $row['front_office_3_1_1_D'] + $row['front_office_3_1_2_A'] + $row['front_office_3_1_2_B'] + $row['front_office_3_1_2_C'];
			$front_office_3_2_self_self = $row['front_office_3_2_1_A'] + $row['front_office_3_2_1_B_a'] + $row['front_office_3_2_1_B_b'] + $row['front_office_3_2_1_B_c'] + $row['front_office_3_2_1_C_a'] + $row['front_office_3_2_1_C_b'] + $row['front_office_3_2_1_C_c'] + $row['front_office_3_2_1_D_a'] + $row['front_office_3_2_1_D_b'] + $row['front_office_3_2_1_D_c'] + $row['front_office_3_2_1_D_d'];
			$front_office_3_3_self_self = $row['front_office_3_3_1_A'] + $row['front_office_3_3_1_B'];
			$front_office_3_4_self_self = $row['front_office_3_4_1_A_a'] + $row['front_office_3_4_1_A_b'] + $row['front_office_3_4_1_A_c'] + $row['front_office_3_4_1_A_d'];
			$front_office_3_5_self_self = $row['front_office_3_5_1_D'] + $row['front_office_3_5_1_A'] + $row['front_office_3_5_1_B'] + $row['front_office_3_5_1_C'];
			$front_office_3_6_self_self = $row['front_office_3_6_1_A'] + $row['front_office_3_6_1_B'];
			$front_office_3_7_self_self = $row['front_office_3_7_1_A'] + $row['front_office_3_7_1_B'] + $row['front_office_3_7_1_C'];
			$front_office_3_8_self_self = $row['front_office_3_8_1_A_a'] + $row['front_office_3_8_1_A_b'] + $row['front_office_3_8_1_A_c'] + $row['front_office_3_8_1_B_a'] + $row['front_office_3_8_1_B_b'] + $row['front_office_3_8_1_B_c'];
			$front_office_3_9_self_self = $row['front_office_3_9_1_A'] + $row['front_office_3_9_1_B'] + $row['front_office_3_9_1_C'] + $row['front_office_3_9_1_D'] + $row['front_office_3_9_1_E'];
			$output['front_office_3_1_self_self'] = $front_office_3_1_self_self;
			$output['front_office_3_2_self_self'] = $front_office_3_2_self_self;
			$output['front_office_3_3_self_self'] = $front_office_3_3_self_self;
			$output['front_office_3_4_self_self'] = $front_office_3_4_self_self;
			$output['front_office_3_5_self_self'] = $front_office_3_5_self_self;
			$output['front_office_3_6_self_self'] = $front_office_3_6_self_self;
			$output['front_office_3_7_self_self'] = $front_office_3_7_self_self;
			$output['front_office_3_8_self_self'] = $front_office_3_8_self_self;
			$output['front_office_3_9_self_self'] = $front_office_3_9_self_self;
			$output['front_office_3_0_self_self'] = $front_office_3_1_self_self + $front_office_3_2_self_self + $front_office_3_3_self_self + $front_office_3_4_self_self + $front_office_3_5_self_self + $front_office_3_6_self_self + $front_office_3_7_self_self + $front_office_3_8_self_self + $front_office_3_9_self_self;
		}
	}
	
	//// SELF_ASSESSOR_1 ////
	
	$query = "SELECT * FROM afcg_assessment_town_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_1'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			//1.1
			$location_1_1_self_assessor_1 = $row['location_1_1_1_A'] + $row['location_1_1_2_A'] + $row['location_1_1_3_A'] + $row['location_1_1_3_B'] + $row['location_1_1_4_A'] + $row['location_1_1_4_B'] + $row['location_1_1_5_A'] + $row['location_1_1_6_A'];				
			//1.2			
			$location_1_2_self_assessor_1 = $row['location_1_2_1_A'] + $row['location_1_2_2_A'] + $row['location_1_2_3_A'] + $row['location_1_2_3_B_a'] + $row['location_1_2_3_B_b'] + $row['location_1_2_3_B_c'] + $row['location_1_2_3_B_d'] + $row['location_1_2_3_B_e'] + $row['location_1_2_4_A'] + $row['location_1_2_4_B'] + $row['location_1_2_4_C'] + $row['location_1_2_5_A'] + $row['location_1_2_5_B'] + $row['location_1_2_5_C'] + $row['location_1_2_5_D'];
			//1.0
			$output['location_1_1_self_assessor_1'] = $location_1_1_self_assessor_1;
			$output['location_1_2_self_assessor_1'] = $location_1_2_self_assessor_1;
			$output['location_1_0_self_assessor_1'] = $location_1_1_self_assessor_1 + $location_1_2_self_assessor_1;
			//BUILDING 2.0
			//2.1
			$building_2_1_self_assessor_1 = $row['building_2_1_1_A'] + $row['building_2_1_2_A'] + $row['building_2_1_2_B'] + $row['building_2_1_2_C'] + $row['building_2_1_2_D'];				
			//2.2			
			$building_2_2_self_assessor_1 = $row['building_2_2_1_A'] + $row['building_2_2_1_B'] + $row['building_2_2_2_A'] + $row['building_2_2_2_B'] + $row['building_2_2_2_C'] + $row['building_2_2_2_D'] + $row['building_2_2_2_E'] + $row['building_2_2_2_F'] + $row['building_2_2_2_G'];
			//2.3
			$building_2_3_self_assessor_1 = $row['building_2_3_1_A'] + 0;
			//2.4
			$building_2_4_self_assessor_1 = $row['building_2_4_1_A'] + $row['building_2_4_1_B'] + $row['building_2_4_1_C'] + $row['building_2_4_1_D'] + $row['building_2_4_1_E'] + $row['building_2_4_1_F'] + $row['building_2_4_1_G'] + $row['building_2_4_1_H'] + $row['building_2_4_1_I'] + $row['building_2_4_1_J'] + $row['building_2_4_1_K'];
			//2.0
			$output['building_2_1_self_assessor_1'] = $building_2_1_self_assessor_1;
			$output['building_2_2_self_assessor_1'] = $building_2_2_self_assessor_1;
			$output['building_2_3_self_assessor_1'] = $building_2_3_self_assessor_1;
			$output['building_2_4_self_assessor_1'] = $building_2_4_self_assessor_1;
			$output['building_2_0_self_assessor_1'] = $building_2_1_self_assessor_1 + $building_2_2_self_assessor_1 + $building_2_3_self_assessor_1 + $building_2_4_self_assessor_1;
			//FRONT OFFICE 3.0
			$front_office_3_1_self_assessor_1 = $row['front_office_3_1_1_A'] + $row['front_office_3_1_1_B'] + $row['front_office_3_1_1_C'] + $row['front_office_3_1_1_D'] + $row['front_office_3_1_2_A'] + $row['front_office_3_1_2_B'] + $row['front_office_3_1_2_C'];
			$front_office_3_2_self_assessor_1 = $row['front_office_3_2_1_A'] + $row['front_office_3_2_1_B_a'] + $row['front_office_3_2_1_B_b'] + $row['front_office_3_2_1_B_c'] + $row['front_office_3_2_1_C_a'] + $row['front_office_3_2_1_C_b'] + $row['front_office_3_2_1_C_c'] + $row['front_office_3_2_1_D_a'] + $row['front_office_3_2_1_D_b'] + $row['front_office_3_2_1_D_c'] + $row['front_office_3_2_1_D_d'];
			$front_office_3_3_self_assessor_1 = $row['front_office_3_3_1_A'] + $row['front_office_3_3_1_B'];
			$front_office_3_4_self_assessor_1 = $row['front_office_3_4_1_A_a'] + $row['front_office_3_4_1_A_b'] + $row['front_office_3_4_1_A_c'] + $row['front_office_3_4_1_A_d'];
			$front_office_3_5_self_assessor_1 = $row['front_office_3_5_1_D'] + $row['front_office_3_5_1_A'] + $row['front_office_3_5_1_B'] + $row['front_office_3_5_1_C'];
			$front_office_3_6_self_assessor_1 = $row['front_office_3_6_1_A'] + $row['front_office_3_6_1_B'];
			$front_office_3_7_self_assessor_1 = $row['front_office_3_7_1_A'] + $row['front_office_3_7_1_B'] + $row['front_office_3_7_1_C'];
			$front_office_3_8_self_assessor_1 = $row['front_office_3_8_1_A_a'] + $row['front_office_3_8_1_A_b'] + $row['front_office_3_8_1_A_c'] + $row['front_office_3_8_1_B_a'] + $row['front_office_3_8_1_B_b'] + $row['front_office_3_8_1_B_c'];
			$front_office_3_9_self_assessor_1 = $row['front_office_3_9_1_A'] + $row['front_office_3_9_1_B'] + $row['front_office_3_9_1_C'] + $row['front_office_3_9_1_D'] + $row['front_office_3_9_1_E'];
			$output['front_office_3_1_self_assessor_1'] = $front_office_3_1_self_assessor_1;
			$output['front_office_3_2_self_assessor_1'] = $front_office_3_2_self_assessor_1;
			$output['front_office_3_3_self_assessor_1'] = $front_office_3_3_self_assessor_1;
			$output['front_office_3_4_self_assessor_1'] = $front_office_3_4_self_assessor_1;
			$output['front_office_3_5_self_assessor_1'] = $front_office_3_5_self_assessor_1;
			$output['front_office_3_6_self_assessor_1'] = $front_office_3_6_self_assessor_1;
			$output['front_office_3_7_self_assessor_1'] = $front_office_3_7_self_assessor_1;
			$output['front_office_3_8_self_assessor_1'] = $front_office_3_8_self_assessor_1;
			$output['front_office_3_9_self_assessor_1'] = $front_office_3_9_self_assessor_1;
			$output['front_office_3_0_self_assessor_1'] = $front_office_3_1_self_assessor_1 + $front_office_3_2_self_assessor_1 + $front_office_3_3_self_assessor_1 + $front_office_3_4_self_assessor_1 + $front_office_3_5_self_assessor_1 + $front_office_3_6_self_assessor_1 + $front_office_3_7_self_assessor_1 + $front_office_3_8_self_assessor_1 + $front_office_3_9_self_assessor_1;
		 }
	}
	
	//// SELF_ASSESSOR_2 ////
	
	$query = "SELECT * FROM afcg_assessment_town_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_2'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			//1.1
			$location_1_1_self_assessor_2 = $row['location_1_1_1_A'] + $row['location_1_1_2_A'] + $row['location_1_1_3_A'] + $row['location_1_1_3_B'] + $row['location_1_1_4_A'] + $row['location_1_1_4_B'] + $row['location_1_1_5_A'] + $row['location_1_1_6_A'];				
			//1.2			
			$location_1_2_self_assessor_2 = $row['location_1_2_1_A'] + $row['location_1_2_2_A'] + $row['location_1_2_3_A'] + $row['location_1_2_3_B_a'] + $row['location_1_2_3_B_b'] + $row['location_1_2_3_B_c'] + $row['location_1_2_3_B_d'] + $row['location_1_2_3_B_e'] + $row['location_1_2_4_A'] + $row['location_1_2_4_B'] + $row['location_1_2_4_C'] + $row['location_1_2_5_A'] + $row['location_1_2_5_B'] + $row['location_1_2_5_C'] + $row['location_1_2_5_D'];
			//1.0
			$output['location_1_1_self_assessor_2'] = $location_1_1_self_assessor_2;
			$output['location_1_2_self_assessor_2'] = $location_1_2_self_assessor_2;
			$output['location_1_0_self_assessor_2'] = $location_1_1_self_assessor_2 + $location_1_2_self_assessor_2;
			//BUILDING 2.0
			//2.1
			$building_2_1_self_assessor_2 = $row['building_2_1_1_A'] + $row['building_2_1_2_A'] + $row['building_2_1_2_B'] + $row['building_2_1_2_C'] + $row['building_2_1_2_D'];				
			//2.2			
			$building_2_2_self_assessor_2 = $row['building_2_2_1_A'] + $row['building_2_2_1_B'] + $row['building_2_2_2_A'] + $row['building_2_2_2_B'] + $row['building_2_2_2_C'] + $row['building_2_2_2_D'] + $row['building_2_2_2_E'] + $row['building_2_2_2_F'] + $row['building_2_2_2_G'];
			//2.3
			$building_2_3_self_assessor_2 = $row['building_2_3_1_A'] + 0;
			//2.4
			$building_2_4_self_assessor_2 = $row['building_2_4_1_A'] + $row['building_2_4_1_B'] + $row['building_2_4_1_C'] + $row['building_2_4_1_D'] + $row['building_2_4_1_E'] + $row['building_2_4_1_F'] + $row['building_2_4_1_G'] + $row['building_2_4_1_H'] + $row['building_2_4_1_I'] + $row['building_2_4_1_J'] + $row['building_2_4_1_K'];
			//2.0
			$output['building_2_1_self_assessor_2'] = $building_2_1_self_assessor_2;
			$output['building_2_2_self_assessor_2'] = $building_2_2_self_assessor_2;
			$output['building_2_3_self_assessor_2'] = $building_2_3_self_assessor_2;
			$output['building_2_4_self_assessor_2'] = $building_2_4_self_assessor_2;
			$output['building_2_0_self_assessor_2'] = $building_2_1_self_assessor_2 + $building_2_2_self_assessor_2 + $building_2_3_self_assessor_2 + $building_2_4_self_assessor_2;
			//FRONT OFFICE 3.0
			$front_office_3_1_self_assessor_2 = $row['front_office_3_1_1_A'] + $row['front_office_3_1_1_B'] + $row['front_office_3_1_1_C'] + $row['front_office_3_1_1_D'] + $row['front_office_3_1_2_A'] + $row['front_office_3_1_2_B'] + $row['front_office_3_1_2_C'];
			$front_office_3_2_self_assessor_2 = $row['front_office_3_2_1_A'] + $row['front_office_3_2_1_B_a'] + $row['front_office_3_2_1_B_b'] + $row['front_office_3_2_1_B_c'] + $row['front_office_3_2_1_C_a'] + $row['front_office_3_2_1_C_b'] + $row['front_office_3_2_1_C_c'] + $row['front_office_3_2_1_D_a'] + $row['front_office_3_2_1_D_b'] + $row['front_office_3_2_1_D_c'] + $row['front_office_3_2_1_D_d'];
			$front_office_3_3_self_assessor_2 = $row['front_office_3_3_1_A'] + $row['front_office_3_3_1_B'];
			$front_office_3_4_self_assessor_2 = $row['front_office_3_4_1_A_a'] + $row['front_office_3_4_1_A_b'] + $row['front_office_3_4_1_A_c'] + $row['front_office_3_4_1_A_d'];
			$front_office_3_5_self_assessor_2 = $row['front_office_3_5_1_D'] + $row['front_office_3_5_1_A'] + $row['front_office_3_5_1_B'] + $row['front_office_3_5_1_C'];
			$front_office_3_6_self_assessor_2 = $row['front_office_3_6_1_A'] + $row['front_office_3_6_1_B'];
			$front_office_3_7_self_assessor_2 = $row['front_office_3_7_1_A'] + $row['front_office_3_7_1_B'] + $row['front_office_3_7_1_C'];
			$front_office_3_8_self_assessor_2 = $row['front_office_3_8_1_A_a'] + $row['front_office_3_8_1_A_b'] + $row['front_office_3_8_1_A_c'] + $row['front_office_3_8_1_B_a'] + $row['front_office_3_8_1_B_b'] + $row['front_office_3_8_1_B_c'];
			$front_office_3_9_self_assessor_2 = $row['front_office_3_9_1_A'] + $row['front_office_3_9_1_B'] + $row['front_office_3_9_1_C'] + $row['front_office_3_9_1_D'] + $row['front_office_3_9_1_E'];
			$output['front_office_3_1_self_assessor_2'] = $front_office_3_1_self_assessor_2;
			$output['front_office_3_2_self_assessor_2'] = $front_office_3_2_self_assessor_2;
			$output['front_office_3_3_self_assessor_2'] = $front_office_3_3_self_assessor_2;
			$output['front_office_3_4_self_assessor_2'] = $front_office_3_4_self_assessor_2;
			$output['front_office_3_5_self_assessor_2'] = $front_office_3_5_self_assessor_2;
			$output['front_office_3_6_self_assessor_2'] = $front_office_3_6_self_assessor_2;
			$output['front_office_3_7_self_assessor_2'] = $front_office_3_7_self_assessor_2;
			$output['front_office_3_8_self_assessor_2'] = $front_office_3_8_self_assessor_2;
			$output['front_office_3_9_self_assessor_2'] = $front_office_3_9_self_assessor_2;
			$output['front_office_3_0_self_assessor_2'] = $front_office_3_1_self_assessor_2 + $front_office_3_2_self_assessor_2 + $front_office_3_3_self_assessor_2 + $front_office_3_4_self_assessor_2 + $front_office_3_5_self_assessor_2 + $front_office_3_6_self_assessor_2 + $front_office_3_7_self_assessor_2 + $front_office_3_8_self_assessor_2 + $front_office_3_9_self_assessor_2;
		 }
	}
	
	//// SELF_ASSESSOR_3 ////
	
	$query = "SELECT * FROM afcg_assessment_town_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_3'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			//1.1
			$location_1_1_self_assessor_3 = $row['location_1_1_1_A'] + $row['location_1_1_2_A'] + $row['location_1_1_3_A'] + $row['location_1_1_3_B'] + $row['location_1_1_4_A'] + $row['location_1_1_4_B'] + $row['location_1_1_5_A'] + $row['location_1_1_6_A'];				
			//1.2			
			$location_1_2_self_assessor_3 = $row['location_1_2_1_A'] + $row['location_1_2_2_A'] + $row['location_1_2_3_A'] + $row['location_1_2_3_B_a'] + $row['location_1_2_3_B_b'] + $row['location_1_2_3_B_c'] + $row['location_1_2_3_B_d'] + $row['location_1_2_3_B_e'] + $row['location_1_2_4_A'] + $row['location_1_2_4_B'] + $row['location_1_2_4_C'] + $row['location_1_2_5_A'] + $row['location_1_2_5_B'] + $row['location_1_2_5_C'] + $row['location_1_2_5_D'];
			//1.0
			$output['location_1_1_self_assessor_3'] = $location_1_1_self_assessor_3;
			$output['location_1_2_self_assessor_3'] = $location_1_2_self_assessor_3;
			$output['location_1_0_self_assessor_3'] = $location_1_1_self_assessor_3 + $location_1_2_self_assessor_3;
			//BUILDING 2.0
			//2.1
			$building_2_1_self_assessor_3 = $row['building_2_1_1_A'] + $row['building_2_1_2_A'] + $row['building_2_1_2_B'] + $row['building_2_1_2_C'] + $row['building_2_1_2_D'];				
			//2.2			
			$building_2_2_self_assessor_3 = $row['building_2_2_1_A'] + $row['building_2_2_1_B'] + $row['building_2_2_2_A'] + $row['building_2_2_2_B'] + $row['building_2_2_2_C'] + $row['building_2_2_2_D'] + $row['building_2_2_2_E'] + $row['building_2_2_2_F'] + $row['building_2_2_2_G'];
			//2.3
			$building_2_3_self_assessor_3 = $row['building_2_3_1_A'] + 0;
			//2.4
			$building_2_4_self_assessor_3 = $row['building_2_4_1_A'] + $row['building_2_4_1_B'] + $row['building_2_4_1_C'] + $row['building_2_4_1_D'] + $row['building_2_4_1_E'] + $row['building_2_4_1_F'] + $row['building_2_4_1_G'] + $row['building_2_4_1_H'] + $row['building_2_4_1_I'] + $row['building_2_4_1_J'] + $row['building_2_4_1_K'];
			//2.0
			$output['building_2_1_self_assessor_3'] = $building_2_1_self_assessor_3;
			$output['building_2_2_self_assessor_3'] = $building_2_2_self_assessor_3;
			$output['building_2_3_self_assessor_3'] = $building_2_3_self_assessor_3;
			$output['building_2_4_self_assessor_3'] = $building_2_4_self_assessor_3;
			$output['building_2_0_self_assessor_3'] = $building_2_1_self_assessor_3 + $building_2_2_self_assessor_3 + $building_2_3_self_assessor_3 + $building_2_4_self_assessor_3;
			//FRONT OFFICE 3.0
			$front_office_3_1_self_assessor_3 = $row['front_office_3_1_1_A'] + $row['front_office_3_1_1_B'] + $row['front_office_3_1_1_C'] + $row['front_office_3_1_1_D'] + $row['front_office_3_1_2_A'] + $row['front_office_3_1_2_B'] + $row['front_office_3_1_2_C'];
			$front_office_3_2_self_assessor_3 = $row['front_office_3_2_1_A'] + $row['front_office_3_2_1_B_a'] + $row['front_office_3_2_1_B_b'] + $row['front_office_3_2_1_B_c'] + $row['front_office_3_2_1_C_a'] + $row['front_office_3_2_1_C_b'] + $row['front_office_3_2_1_C_c'] + $row['front_office_3_2_1_D_a'] + $row['front_office_3_2_1_D_b'] + $row['front_office_3_2_1_D_c'] + $row['front_office_3_2_1_D_d'];
			$front_office_3_3_self_assessor_3 = $row['front_office_3_3_1_A'] + $row['front_office_3_3_1_B'];
			$front_office_3_4_self_assessor_3 = $row['front_office_3_4_1_A_a'] + $row['front_office_3_4_1_A_b'] + $row['front_office_3_4_1_A_c'] + $row['front_office_3_4_1_A_d'];
			$front_office_3_5_self_assessor_3 = $row['front_office_3_5_1_D'] + $row['front_office_3_5_1_A'] + $row['front_office_3_5_1_B'] + $row['front_office_3_5_1_C'];
			$front_office_3_6_self_assessor_3 = $row['front_office_3_6_1_A'] + $row['front_office_3_6_1_B'];
			$front_office_3_7_self_assessor_3 = $row['front_office_3_7_1_A'] + $row['front_office_3_7_1_B'] + $row['front_office_3_7_1_C'];
			$front_office_3_8_self_assessor_3 = $row['front_office_3_8_1_A_a'] + $row['front_office_3_8_1_A_b'] + $row['front_office_3_8_1_A_c'] + $row['front_office_3_8_1_B_a'] + $row['front_office_3_8_1_B_b'] + $row['front_office_3_8_1_B_c'];
			$front_office_3_9_self_assessor_3 = $row['front_office_3_9_1_A'] + $row['front_office_3_9_1_B'] + $row['front_office_3_9_1_C'] + $row['front_office_3_9_1_D'] + $row['front_office_3_9_1_E'];
			$output['front_office_3_1_self_assessor_3'] = $front_office_3_1_self_assessor_3;
			$output['front_office_3_2_self_assessor_3'] = $front_office_3_2_self_assessor_3;
			$output['front_office_3_3_self_assessor_3'] = $front_office_3_3_self_assessor_3;
			$output['front_office_3_4_self_assessor_3'] = $front_office_3_4_self_assessor_3;
			$output['front_office_3_5_self_assessor_3'] = $front_office_3_5_self_assessor_3;
			$output['front_office_3_6_self_assessor_3'] = $front_office_3_6_self_assessor_3;
			$output['front_office_3_7_self_assessor_3'] = $front_office_3_7_self_assessor_3;
			$output['front_office_3_8_self_assessor_3'] = $front_office_3_8_self_assessor_3;
			$output['front_office_3_9_self_assessor_3'] = $front_office_3_9_self_assessor_3;
			$output['front_office_3_0_self_assessor_3'] = $front_office_3_1_self_assessor_3 + $front_office_3_2_self_assessor_3 + $front_office_3_3_self_assessor_3 + $front_office_3_4_self_assessor_3 + $front_office_3_5_self_assessor_3 + $front_office_3_6_self_assessor_3 + $front_office_3_7_self_assessor_3 + $front_office_3_8_self_assessor_3 + $front_office_3_9_self_assessor_3;

		 }
	}

	/*$output = array(
	'imefika' => $imefika,
	'essential_items_id' => $essential_items_id,
	'connection_error' => $connection_error,
	'message' => $message
	);
	*/	

echo json_encode($output);

?>