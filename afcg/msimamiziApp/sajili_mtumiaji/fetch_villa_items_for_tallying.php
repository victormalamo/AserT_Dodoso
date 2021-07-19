<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));


	$message = '';
	$connection_error = '';
	$output = array();
	$assessment_id = $form_data->assessment_id;
	
	
	//// SELF_SELF ////
	
	$query = "SELECT * FROM afcg_assessment_villa WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_self'))"; 
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
			
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lobby_lounge_other_public_areas_4_1_self_self = $row['lobby_lounge_other_public_areas_4_1_1_A'] + $row['lobby_lounge_other_public_areas_4_1_1_B'] + $row['lobby_lounge_other_public_areas_4_1_1_C'] + $row['lobby_lounge_other_public_areas_4_1_1_D'] + $row['lobby_lounge_other_public_areas_4_1_1_E'];
			$lobby_lounge_other_public_areas_4_2_self_self = $row['lobby_lounge_other_public_areas_4_2_1_A'] + 0;
			$lobby_lounge_other_public_areas_4_3_self_self = $row['lobby_lounge_other_public_areas_4_3_1_A'] + $row['lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lobby_lounge_other_public_areas_4_3_1_C'];
			$lobby_lounge_other_public_areas_4_4_self_self = $row['lobby_lounge_other_public_areas_4_4_1_A'] + $row['lobby_lounge_other_public_areas_4_4_1_B'] + $row['lobby_lounge_other_public_areas_4_4_1_C'] + $row['lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lobby_lounge_other_public_areas_4_4_1_E'] + $row['lobby_lounge_other_public_areas_4_4_1_F'];
			$lobby_lounge_other_public_areas_4_5_self_self = $row['lobby_lounge_other_public_areas_4_5_1_A'] + $row['lobby_lounge_other_public_areas_4_5_1_B'];
			$lobby_lounge_other_public_areas_4_6_self_self = $row['lobby_lounge_other_public_areas_4_6_1_A'] + $row['lobby_lounge_other_public_areas_4_6_1_B'] + $row['lobby_lounge_other_public_areas_4_6_1_C'] + $row['lobby_lounge_other_public_areas_4_6_1_D'] + $row['lobby_lounge_other_public_areas_4_6_1_E'] + $row['lobby_lounge_other_public_areas_4_6_1_F'];
			$lobby_lounge_other_public_areas_4_7_self_self = $row['lobby_lounge_other_public_areas_4_7_1_A'] + $row['lobby_lounge_other_public_areas_4_7_1_B'] + $row['lobby_lounge_other_public_areas_4_7_1_C'];
			$lobby_lounge_other_public_areas_4_8_self_self = $row['lobby_lounge_other_public_areas_4_8_1_A'] + $row['lobby_lounge_other_public_areas_4_8_1_B_a'] + $row['lobby_lounge_other_public_areas_4_8_1_B_b'] + $row['lobby_lounge_other_public_areas_4_8_1_B_c'] + $row['lobby_lounge_other_public_areas_4_8_1_B_d'] + $row['lobby_lounge_other_public_areas_4_8_1_B_e'] + $row['lobby_lounge_other_public_areas_4_8_1_B_f'] + $row['lobby_lounge_other_public_areas_4_8_1_C'];
			$lobby_lounge_other_public_areas_4_9_self_self = $row['lobby_lounge_other_public_areas_4_9_1_A'] + $row['lobby_lounge_other_public_areas_4_9_1_B'] + $row['lobby_lounge_other_public_areas_4_9_1_C'] + $row['lobby_lounge_other_public_areas_4_9_1_D'];
			$lobby_lounge_other_public_areas_4_10_self_self = $row['lobby_lounge_other_public_areas_4_10_1_A'] + 0;
			$output['lobby_lounge_other_public_areas_4_1_self_self'] = $lobby_lounge_other_public_areas_4_1_self_self;
			$output['lobby_lounge_other_public_areas_4_2_self_self'] = $lobby_lounge_other_public_areas_4_2_self_self;
			$output['lobby_lounge_other_public_areas_4_3_self_self'] = $lobby_lounge_other_public_areas_4_3_self_self;
			$output['lobby_lounge_other_public_areas_4_4_self_self'] = $lobby_lounge_other_public_areas_4_4_self_self;
			$output['lobby_lounge_other_public_areas_4_5_self_self'] = $lobby_lounge_other_public_areas_4_5_self_self;
			$output['lobby_lounge_other_public_areas_4_6_self_self'] = $lobby_lounge_other_public_areas_4_6_self_self;
			$output['lobby_lounge_other_public_areas_4_7_self_self'] = $lobby_lounge_other_public_areas_4_7_self_self;
			$output['lobby_lounge_other_public_areas_4_8_self_self'] = $lobby_lounge_other_public_areas_4_8_self_self;
			$output['lobby_lounge_other_public_areas_4_9_self_self'] = $lobby_lounge_other_public_areas_4_9_self_self;
			$output['lobby_lounge_other_public_areas_4_10_self_self'] = $lobby_lounge_other_public_areas_4_10_self_self;
			$output['lobby_lounge_other_public_areas_4_0_self_self'] = $lobby_lounge_other_public_areas_4_1_self_self + $lobby_lounge_other_public_areas_4_2_self_self + $lobby_lounge_other_public_areas_4_3_self_self + $lobby_lounge_other_public_areas_4_4_self_self + $lobby_lounge_other_public_areas_4_5_self_self + $lobby_lounge_other_public_areas_4_6_self_self + $lobby_lounge_other_public_areas_4_7_self_self + $lobby_lounge_other_public_areas_4_8_self_self + $lobby_lounge_other_public_areas_4_9_self_self + $lobby_lounge_other_public_areas_4_10_self_self;
			
			//FUNCTION ROOMS 5.0
			$function_rooms_5_1_self_self = $row['function_rooms_5_1_1_A'] + $row['function_rooms_5_1_1_B'] + $row['function_rooms_5_1_1_C'] + $row['function_rooms_5_1_1_D'] + $row['function_rooms_5_1_1_E'] + $row['function_rooms_5_1_1_F'] + $row['function_rooms_5_1_1_G'] + $row['function_rooms_5_1_1_H'] + $row['function_rooms_5_1_1_I'] + $row['function_rooms_5_1_1_J'] + $row['function_rooms_5_1_1_K'] + $row['function_rooms_5_1_1_L'] + $row['function_rooms_5_1_1_M'];
			$output['function_rooms_5_1_self_self'] = $function_rooms_5_1_self_self;
			$output['function_rooms_5_0_self_self'] = $function_rooms_5_1_self_self;
			
			//RESTAURANTS
			$restaurants_6_1_self_self = $row['restaurants_6_1_1_A'] + $row['restaurants_6_1_1_B'] + $row['restaurants_6_1_1_C'] + $row['restaurants_6_1_1_D'];
			$restaurants_6_2_self_self = $row['restaurants_6_2_1_A'] + $row['restaurants_6_2_1_B'] + $row['restaurants_6_2_1_C'] + $row['restaurants_6_2_1_D'] + $row['restaurants_6_2_1_E'] + $row['restaurants_6_2_1_F'] + $row['restaurants_6_2_1_G'] + $row['restaurants_6_2_1_H'] + $row['restaurants_6_2_1_I'];
			$restaurants_6_3_self_self = $row['restaurants_6_3_1_A'] + $row['restaurants_6_3_1_B'] + $row['restaurants_6_3_1_C'];
			$restaurants_6_4_self_self = $row['restaurants_6_4_1_A'] + $row['restaurants_6_4_1_B'] + $row['restaurants_6_4_1_C'] + $row['restaurants_6_4_1_D'] + $row['restaurants_6_4_1_E'] + $row['restaurants_6_4_1_F'] + $row['restaurants_6_4_1_G'];
			$restaurants_6_5_self_self = $row['restaurants_6_5_1_A'] + $row['restaurants_6_5_1_B'] + $row['restaurants_6_5_1_C'] + $row['restaurants_6_5_1_D'] + $row['restaurants_6_5_1_E_a'] + $row['restaurants_6_5_1_E_b'] + $row['restaurants_6_5_1_E_c'] + $row['restaurants_6_5_1_E_d'] + $row['restaurants_6_5_1_F'] + $row['restaurants_6_5_1_G_a'] + $row['restaurants_6_5_1_G_b'] + $row['restaurants_6_5_1_G_c'] + $row['restaurants_6_5_1_H'] + $row['restaurants_6_5_1_I'];
			$restaurants_6_6_self_self = $row['restaurants_6_6_1_A'] + $row['restaurants_6_6_1_B'] + $row['restaurants_6_6_1_C'] + $row['restaurants_6_6_1_D'];
			$restaurants_6_7_self_self = $row['restaurants_6_7_1_A'] + $row['restaurants_6_7_1_B'] + $row['restaurants_6_7_1_C'];
			$restaurants_6_8_self_self = $row['restaurants_6_8_1_A'] + $row['restaurants_6_8_1_B'];			
			$output['restaurants_6_1_self_self'] = $restaurants_6_1_self_self;
			$output['restaurants_6_2_self_self'] = $restaurants_6_2_self_self;
			$output['restaurants_6_3_self_self'] = $restaurants_6_3_self_self;
			$output['restaurants_6_4_self_self'] = $restaurants_6_4_self_self;
			$output['restaurants_6_5_self_self'] = $restaurants_6_5_self_self;
			$output['restaurants_6_6_self_self'] = $restaurants_6_6_self_self;
			$output['restaurants_6_7_self_self'] = $restaurants_6_7_self_self;
			$output['restaurants_6_8_self_self'] = $restaurants_6_8_self_self;
			$output['restaurants_6_0_self_self'] = $restaurants_6_1_self_self + $restaurants_6_2_self_self + $restaurants_6_3_self_self + $restaurants_6_4_self_self + $restaurants_6_5_self_self + $restaurants_6_6_self_self + $restaurants_6_7_self_self + $restaurants_6_8_self_self;
			
			//BARS
			$bar_7_1_self_self = $row['bar_7_1_1_A'] + $row['bar_7_1_1_B_a'] + $row['bar_7_1_1_B_b'] + $row['bar_7_1_1_B_c'] + $row['bar_7_1_1_C'] + $row['bar_7_1_1_D_a'] + $row['bar_7_1_1_D_b'] + $row['bar_7_1_1_D_c'] + $row['bar_7_1_1_E'] + $row['bar_7_1_1_F'] + $row['bar_7_1_1_G'];
			$bar_7_2_self_self = $row['bar_7_2_1_A'] + $row['bar_7_2_1_B'] + $row['bar_7_2_1_C'] + $row['bar_7_2_1_D'] + $row['bar_7_2_1_E'] + $row['bar_7_2_1_F'] + $row['bar_7_2_1_G'] + $row['bar_7_2_1_H'] + $row['bar_7_2_1_I'] + $row['bar_7_2_1_J'];
			$bar_7_3_self_self = $row['bar_7_3_1_A'] + $row['bar_7_3_1_B'] + $row['bar_7_3_1_C'] + $row['bar_7_3_1_D'];
			$bar_7_4_self_self = $row['bar_7_4_1_A'] + $row['bar_7_4_1_B'] + $row['bar_7_4_1_C'];
			$bar_7_5_self_self = $row['bar_7_5_1_A'] + $row['bar_7_5_1_B'] + $row['bar_7_5_1_C'] + $row['bar_7_5_1_D'] + $row['bar_7_5_1_E_a'] + $row['bar_7_5_1_E_b'] + $row['bar_7_5_1_E_c'] + $row['bar_7_5_1_E_d'] + $row['bar_7_5_1_E_e'] + $row['bar_7_5_1_E_f'] + $row['bar_7_5_1_E_g'] + $row['bar_7_5_1_E_h'] + $row['bar_7_5_1_F'] + $row['bar_7_5_1_G'] + $row['bar_7_5_1_H'] + $row['bar_7_5_1_I'];
			$bar_7_6_self_self = $row['bar_7_6_1_A'] + $row['bar_7_6_1_B'] + $row['bar_7_6_1_C'];
			$bar_7_7_self_self = $row['bar_7_7_1_A'] + $row['bar_7_7_1_B'] + $row['bar_7_7_1_C'];
			$bar_7_8_self_self = $row['bar_7_8_1_A'] + $row['bar_7_8_1_B'] + $row['bar_7_8_1_C'];
			$output['bar_7_1_self_self'] = $bar_7_1_self_self;
			$output['bar_7_2_self_self'] = $bar_7_2_self_self;
			$output['bar_7_3_self_self'] = $bar_7_3_self_self;
			$output['bar_7_4_self_self'] = $bar_7_4_self_self;
			$output['bar_7_5_self_self'] = $bar_7_5_self_self;
			$output['bar_7_6_self_self'] = $bar_7_6_self_self;
			$output['bar_7_7_self_self'] = $bar_7_7_self_self;
			$output['bar_7_8_self_self'] = $bar_7_8_self_self;
			$output['bar_7_0_self_self'] = $bar_7_1_self_self + $bar_7_2_self_self + $bar_7_3_self_self + $bar_7_4_self_self + $bar_7_5_self_self + $bar_7_6_self_self + $bar_7_7_self_self + $bar_7_8_self_self;
			
			//KITCHEN			
			$kitchen_8_1_self_self = $row['kitchen_8_1_1_A'] + 0;
			$kitchen_8_2_self_self = $row['kitchen_8_2_1_A'] + $row['kitchen_8_2_1_B'] + $row['kitchen_8_2_1_C'];
			$kitchen_8_3_self_self = $row['kitchen_8_3_1_A'] + $row['kitchen_8_3_1_B'] + $row['kitchen_8_3_1_C'];
			$kitchen_8_4_self_self = $row['kitchen_8_4_1_A'] + $row['kitchen_8_4_2_A'] + $row['kitchen_8_4_2_B'] + $row['kitchen_8_4_2_C'];
			$kitchen_8_5_self_self = $row['kitchen_8_5_1_A'] + $row['kitchen_8_5_1_B'] + $row['kitchen_8_5_1_C'] + $row['kitchen_8_5_1_D'] + $row['kitchen_8_5_1_E'] + $row['kitchen_8_5_1_F'] + $row['kitchen_8_5_1_G'] + $row['kitchen_8_5_1_H'] + $row['kitchen_8_5_1_I'];
			$kitchen_8_6_self_self = $row['kitchen_8_6_1_A'] + $row['kitchen_8_6_1_B'] + $row['kitchen_8_6_1_C'] + $row['kitchen_8_6_1_D'] + $row['kitchen_8_6_1_E'] + $row['kitchen_8_6_1_F'] + $row['kitchen_8_6_1_G'];
			$kitchen_8_7_self_self = $row['kitchen_8_7_1_A'] + $row['kitchen_8_7_1_B'] + $row['kitchen_8_7_1_C'] + $row['kitchen_8_7_1_D'] + $row['kitchen_8_7_1_E'];
			$kitchen_8_8_self_self = $row['kitchen_8_8_1_A'] + $row['kitchen_8_8_1_B'] + $row['kitchen_8_8_1_C_a'] + $row['kitchen_8_8_1_C_b'] + $row['kitchen_8_8_1_D'] + $row['kitchen_8_8_1_E'];
			$kitchen_8_9_self_self = $row['kitchen_8_9_1_A'] + $row['kitchen_8_9_1_B'] + $row['kitchen_8_9_1_C'] + $row['kitchen_8_9_1_D'] + $row['kitchen_8_9_1_E'];
			$kitchen_8_10_self_self = $row['kitchen_8_10_1_A_a'] + $row['kitchen_8_10_1_A_b'] + $row['kitchen_8_10_1_A_c'] + $row['kitchen_8_10_1_A_d'] + $row['kitchen_8_10_1_B'] + $row['kitchen_8_10_1_C'] + $row['kitchen_8_10_1_D'] + $row['kitchen_8_10_1_E'] + $row['kitchen_8_10_1_F'] + $row['kitchen_8_10_1_G'];
			$kitchen_8_11_self_self = $row['kitchen_8_11_1_A_a'] + $row['kitchen_8_11_1_A_b'] + $row['kitchen_8_11_1_A_c'] + $row['kitchen_8_11_1_B'] + $row['kitchen_8_11_1_C_a'] + $row['kitchen_8_11_1_C_b'] + $row['kitchen_8_11_1_C_c'] + $row['kitchen_8_11_1_C_d'] + $row['kitchen_8_11_1_C_e'] + $row['kitchen_8_11_1_D_a'] + $row['kitchen_8_11_1_D_b'] + $row['kitchen_8_11_1_E'] + $row['kitchen_8_11_1_F'];
			$kitchen_8_12_self_self = $row['kitchen_8_12_1_A'] + $row['kitchen_8_12_1_B'] + $row['kitchen_8_12_1_C'];
			$output['kitchen_8_1_self_self'] = $kitchen_8_1_self_self;
			$output['kitchen_8_2_self_self'] = $kitchen_8_2_self_self;
			$output['kitchen_8_3_self_self'] = $kitchen_8_3_self_self;
			$output['kitchen_8_4_self_self'] = $kitchen_8_4_self_self;
			$output['kitchen_8_5_self_self'] = $kitchen_8_5_self_self;
			$output['kitchen_8_6_self_self'] = $kitchen_8_6_self_self;
			$output['kitchen_8_7_self_self'] = $kitchen_8_7_self_self;
			$output['kitchen_8_8_self_self'] = $kitchen_8_8_self_self;
			$output['kitchen_8_9_self_self'] = $kitchen_8_9_self_self;
			$output['kitchen_8_10_self_self'] = $kitchen_8_10_self_self;
			$output['kitchen_8_11_self_self'] = $kitchen_8_11_self_self;
			$output['kitchen_8_12_self_self'] = $kitchen_8_12_self_self;
			$output['kitchen_8_0_self_self'] = $kitchen_8_1_self_self + $kitchen_8_2_self_self + $kitchen_8_3_self_self + $kitchen_8_4_self_self + $kitchen_8_5_self_self + $kitchen_8_6_self_self + $kitchen_8_7_self_self + $kitchen_8_8_self_self + $kitchen_8_9_self_self + $kitchen_8_10_self_self + $kitchen_8_11_self_self + $kitchen_8_12_self_self;
			
			//GUEST ROOMS			
			$guest_rooms_9_1_self_self = $row['guest_rooms_9_1_1_A'] + 0;
			$guest_rooms_9_2_self_self = $row['guest_rooms_9_2_1_A'] + $row['guest_rooms_9_2_1_B'];
			$guest_rooms_9_3_self_self = $row['guest_rooms_9_3_1_A'] + $row['guest_rooms_9_3_1_B'];
			$guest_rooms_9_4_self_self = $row['guest_rooms_9_4_1_A'] + $row['guest_rooms_9_4_1_B_a'] + $row['guest_rooms_9_4_1_B_b'] + $row['guest_rooms_9_4_1_B_c'] + $row['guest_rooms_9_4_1_B_d'] + $row['guest_rooms_9_4_1_B_e'] + $row['guest_rooms_9_4_1_B_f'] + $row['guest_rooms_9_4_1_B_g'] + $row['guest_rooms_9_4_1_B_h'] + $row['guest_rooms_9_4_1_B_i'] + $row['guest_rooms_9_4_1_B_j'] + $row['guest_rooms_9_4_1_B_k'] + $row['guest_rooms_9_4_1_B_l'] + $row['guest_rooms_9_4_1_B_m'] + $row['guest_rooms_9_4_1_C'] + $row['guest_rooms_9_4_1_D'] + $row['guest_rooms_9_4_1_E'] + $row['guest_rooms_9_4_1_F'] + $row['guest_rooms_9_4_1_G'];
			$guest_rooms_9_5_self_self = $row['guest_rooms_9_5_1_A'] + $row['guest_rooms_9_5_1_B_a'] + $row['guest_rooms_9_5_1_B_b'] + $row['guest_rooms_9_5_1_B_c'] + $row['guest_rooms_9_5_1_B_d'] + $row['guest_rooms_9_5_1_B_e'] + $row['guest_rooms_9_5_1_C'] + $row['guest_rooms_9_5_1_D'];
			$guest_rooms_9_6_self_self = $row['guest_rooms_9_6_1_A'] + $row['guest_rooms_9_6_1_B'];
			$guest_rooms_9_7_self_self = $row['guest_rooms_9_7_1_A'] + $row['guest_rooms_9_7_1_B'] + $row['guest_rooms_9_7_1_C'] + $row['guest_rooms_9_7_1_D'] + $row['guest_rooms_9_7_1_E'];
			$guest_rooms_9_8_self_self = $row['guest_rooms_9_8_1_A'] + $row['guest_rooms_9_8_1_B'] + $row['guest_rooms_9_8_1_C'] + $row['guest_rooms_9_8_1_D'] + $row['guest_rooms_9_8_1_E'];
			$guest_rooms_9_9_self_self = $row['guest_rooms_9_9_1_A'] + $row['guest_rooms_9_9_1_B_a'] + $row['guest_rooms_9_9_1_B_b'] + $row['guest_rooms_9_9_1_B_c'] + $row['guest_rooms_9_9_1_B_d'] + $row['guest_rooms_9_9_1_B_e'] + $row['guest_rooms_9_9_1_B_f'] + $row['guest_rooms_9_9_1_C_a'] + $row['guest_rooms_9_9_1_C_b'] + $row['guest_rooms_9_9_1_C_c'] + $row['guest_rooms_9_9_1_D'];
			$guest_rooms_9_10_self_self = $row['guest_rooms_9_10_1_A'] + $row['guest_rooms_9_10_1_B'];
			$guest_rooms_9_11_self_self = $row['guest_rooms_9_11_1_A_a'] + $row['guest_rooms_9_11_1_A_b'] + $row['guest_rooms_9_11_1_A_c'] + $row['guest_rooms_9_11_1_A_d'] + $row['guest_rooms_9_11_1_A_e'] + $row['guest_rooms_9_11_1_B_a'] + $row['guest_rooms_9_11_1_B_b'] + $row['guest_rooms_9_11_1_B'] + $row['guest_rooms_9_11_1_C'];
			$guest_rooms_9_12_self_self = $row['guest_rooms_9_12_1_A'] + $row['guest_rooms_9_12_1_B'] + $row['guest_rooms_9_12_1_C'] + $row['guest_rooms_9_12_1_D'] + $row['guest_rooms_9_12_1_E'] + $row['guest_rooms_9_12_1_F'] + $row['guest_rooms_9_12_1_G'];
			$guest_rooms_9_13_self_self = $row['guest_rooms_9_13_1_A'] + $row['guest_rooms_9_13_1_B'] + $row['guest_rooms_9_13_1_C'];
			$guest_rooms_9_14_self_self = $row['guest_rooms_9_14_1_A'] + $row['guest_rooms_9_14_1_B_a'] + $row['guest_rooms_9_14_1_B_b'] + $row['guest_rooms_9_14_1_B_c'] + $row['guest_rooms_9_14_1_C'];
			$guest_rooms_9_15_self_self = $row['guest_rooms_9_15_1_A_a'] + $row['guest_rooms_9_15_1_A_b'] + $row['guest_rooms_9_15_1_A_c'] + $row['guest_rooms_9_15_1_A_d'] + $row['guest_rooms_9_15_1_A_e'] + $row['guest_rooms_9_15_1_A_f'] + $row['guest_rooms_9_15_1_A_g'] + $row['guest_rooms_9_15_1_A_h'] + $row['guest_rooms_9_15_1_A_i'] + $row['guest_rooms_9_15_1_A_j'] + $row['guest_rooms_9_15_1_A_k'] + $row['guest_rooms_9_15_1_A_l'] + $row['guest_rooms_9_15_1_A_m'] + $row['guest_rooms_9_15_1_A_n'] + $row['guest_rooms_9_15_1_A_o'] + $row['guest_rooms_9_15_1_A_p'] + $row['guest_rooms_9_15_1_A_q'] + $row['guest_rooms_9_15_1_B'] + $row['guest_rooms_9_15_1_C'];
			$output['guest_rooms_9_1_self_self'] = $guest_rooms_9_1_self_self;
			$output['guest_rooms_9_2_self_self'] = $guest_rooms_9_2_self_self;
			$output['guest_rooms_9_3_self_self'] = $guest_rooms_9_3_self_self;
			$output['guest_rooms_9_4_self_self'] = $guest_rooms_9_4_self_self;
			$output['guest_rooms_9_5_self_self'] = $guest_rooms_9_5_self_self;
			$output['guest_rooms_9_6_self_self'] = $guest_rooms_9_6_self_self;
			$output['guest_rooms_9_7_self_self'] = $guest_rooms_9_7_self_self;
			$output['guest_rooms_9_8_self_self'] = $guest_rooms_9_8_self_self;
			$output['guest_rooms_9_9_self_self'] = $guest_rooms_9_9_self_self;
			$output['guest_rooms_9_10_self_self'] = $guest_rooms_9_10_self_self;
			$output['guest_rooms_9_11_self_self'] = $guest_rooms_9_11_self_self;
			$output['guest_rooms_9_12_self_self'] = $guest_rooms_9_12_self_self;
			$output['guest_rooms_9_13_self_self'] = $guest_rooms_9_13_self_self;
			$output['guest_rooms_9_14_self_self'] = $guest_rooms_9_14_self_self;
			$output['guest_rooms_9_15_self_self'] = $guest_rooms_9_15_self_self;
			$output['guest_rooms_9_0_self_self'] = $guest_rooms_9_1_self_self + $guest_rooms_9_2_self_self + $guest_rooms_9_3_self_self + $guest_rooms_9_4_self_self + $guest_rooms_9_5_self_self + $guest_rooms_9_6_self_self + $guest_rooms_9_7_self_self + $guest_rooms_9_8_self_self + $guest_rooms_9_9_self_self + $guest_rooms_9_10_self_self + $guest_rooms_9_11_self_self + $guest_rooms_9_12_self_self + $guest_rooms_9_13_self_self + $guest_rooms_9_14_self_self + $guest_rooms_9_15_self_self;

			//GUEST BATHROOMS
			
			$guest_bathrooms_10_1_self_self = $row['guest_bathrooms_10_1_1_A'] + 0;
			$guest_bathrooms_10_2_self_self = $row['guest_bathrooms_10_2_1_A'] + 0;
			$guest_bathrooms_10_3_self_self = $row['guest_bathrooms_10_3_1_A_a'] + $row['guest_bathrooms_10_3_1_A_b'] + $row['guest_bathrooms_10_3_1_A_c'] + $row['guest_bathrooms_10_3_1_A_d'] + $row['guest_bathrooms_10_3_1_A_e'] + $row['guest_bathrooms_10_3_1_A_f'] + $row['guest_bathrooms_10_3_1_A_g'] + $row['guest_bathrooms_10_3_1_A_h'] + $row['guest_bathrooms_10_3_1_A_i'] + $row['guest_bathrooms_10_3_1_A_j'] + $row['guest_bathrooms_10_3_1_A_k'] + $row['guest_bathrooms_10_3_1_A_l'] + $row['guest_bathrooms_10_3_1_A_m'] + $row['guest_bathrooms_10_3_1_A_n'] + $row['guest_bathrooms_10_3_1_A_o'] + $row['guest_bathrooms_10_3_1_A_p'] + $row['guest_bathrooms_10_3_1_A_q'] + $row['guest_bathrooms_10_3_1_A_r'] + $row['guest_bathrooms_10_3_1_A_s'] + $row['guest_bathrooms_10_3_1_A_t'] + $row['guest_bathrooms_10_3_1_A_u'] + $row['guest_bathrooms_10_3_1_A_v']
			 + $row['guest_bathrooms_10_3_1_A_w'] + $row['guest_bathrooms_10_3_1_B'] + $row['guest_bathrooms_10_3_1_C'] + $row['guest_bathrooms_10_3_1_D'] + $row['guest_bathrooms_10_3_1_E']+ $row['guest_bathrooms_10_3_1_F'];
			$guest_bathrooms_10_4_self_self = $row['guest_bathrooms_10_4_1_A'] + $row['guest_bathrooms_10_4_1_B'] + $row['guest_bathrooms_10_4_1_C'] + $row['guest_bathrooms_10_4_1_D'] + $row['guest_bathrooms_10_4_1_E'] + $row['guest_bathrooms_10_4_1_F'];
			$guest_bathrooms_10_5_self_self = $row['guest_bathrooms_10_5_1_A_a'] + $row['guest_bathrooms_10_5_1_A_b'] + $row['guest_bathrooms_10_5_1_A_c'] + $row['guest_bathrooms_10_5_1_A_d'] + $row['guest_bathrooms_10_5_1_A_e'] + $row['guest_bathrooms_10_5_1_B'] + $row['guest_bathrooms_10_5_1_C'] + $row['guest_bathrooms_10_5_1_D'] + $row['guest_bathrooms_10_5_1_E'] + $row['guest_bathrooms_10_5_1_F'];
			$guest_bathrooms_10_6_self_self = $row['guest_bathrooms_10_6_1_A'] + $row['guest_bathrooms_10_6_1_B'] + $row['guest_bathrooms_10_6_1_C'];;
			$guest_bathrooms_10_7_self_self = $row['guest_bathrooms_10_7_1_A'] + $row['guest_bathrooms_10_7_1_B'] + $row['guest_bathrooms_10_7_1_C'] + $row['guest_bathrooms_10_7_1_D'];
			$guest_bathrooms_10_8_self_self = $row['guest_bathrooms_10_8_1_A_a'] + $row['guest_bathrooms_10_8_1_A_b'] + $row['guest_bathrooms_10_8_1_A_c'] + $row['guest_bathrooms_10_8_1_A_d'] + $row['guest_bathrooms_10_8_1_A_e'] + $row['guest_bathrooms_10_8_1_A_f'] + $row['guest_bathrooms_10_8_1_A_g'] + $row['guest_bathrooms_10_8_1_B'] + $row['guest_bathrooms_10_8_1_C'];
			$guest_bathrooms_10_9_self_self = $row['guest_bathrooms_10_9_1_A'] + $row['guest_bathrooms_10_9_1_B'];			
			$output['guest_bathrooms_10_1_self_self'] = $guest_bathrooms_10_1_self_self;
			$output['guest_bathrooms_10_2_self_self'] = $guest_bathrooms_10_2_self_self;
			$output['guest_bathrooms_10_3_self_self'] = $guest_bathrooms_10_3_self_self;
			$output['guest_bathrooms_10_4_self_self'] = $guest_bathrooms_10_4_self_self;
			$output['guest_bathrooms_10_5_self_self'] = $guest_bathrooms_10_5_self_self;
			$output['guest_bathrooms_10_6_self_self'] = $guest_bathrooms_10_6_self_self;
			$output['guest_bathrooms_10_7_self_self'] = $guest_bathrooms_10_7_self_self;
			$output['guest_bathrooms_10_8_self_self'] = $guest_bathrooms_10_8_self_self;
			$output['guest_bathrooms_10_9_self_self'] = $guest_bathrooms_10_9_self_self;
			$output['guest_bathrooms_10_0_self_self'] = $guest_bathrooms_10_1_self_self+$guest_bathrooms_10_2_self_self+$guest_bathrooms_10_3_self_self+$guest_bathrooms_10_4_self_self+$guest_bathrooms_10_5_self_self+$guest_bathrooms_10_6_self_self+$guest_bathrooms_10_7_self_self+$guest_bathrooms_10_8_self_self+$guest_bathrooms_10_9_self_self;

			//SUITES
			
			$suites_11_1_self_self = $row['suites_11_1_1_A'] + 0;
			$suites_11_2_self_self = $row['suites_11_2_1_A'] + $row['suites_11_2_1_B'] + $row['suites_11_2_1_C'];
			$suites_11_3_self_self = $row['suites_11_3_1_A_a'] + $row['suites_11_3_1_A_b'] + $row['suites_11_3_1_A_c'] + $row['suites_11_3_1_A_d'];
			$suites_11_4_self_self = $row['suites_11_4_1_A'] + $row['suites_11_4_1_B'];
			$suites_11_5_self_self = $row['suites_11_5_1_A_a'] + $row['suites_11_5_1_A_b'] + $row['suites_11_5_1_B_a'] + $row['suites_11_5_1_B_b'] + $row['suites_11_5_1_B_c'] + $row['suites_11_5_1_B_d'] + $row['suites_11_5_1_B_e'] + $row['suites_11_5_1_B_f'] + $row['suites_11_5_1_B_g'] + $row['suites_11_5_1_B_h'] + $row['suites_11_5_1_B_i'] + $row['suites_11_5_1_B_j'] + $row['suites_11_5_1_B_k'] + $row['suites_11_5_1_B_l'] + $row['suites_11_5_1_B_m'] + $row['suites_11_5_1_B_n'] + $row['suites_11_5_1_B_o'] + $row['suites_11_5_1_B_p'] + $row['suites_11_5_1_B_q'] + $row['suites_11_5_1_B_r'] + $row['suites_11_5_1_C'] + $row['suites_11_5_1_D'] + $row['suites_11_5_1_E'] + $row['suites_11_5_1_F'] + $row['suites_11_5_1_G'];
			$suites_11_6_self_self = $row['suites_11_6_1_A'] + $row['suites_11_6_1_B'] + $row['suites_11_6_1_C'] + $row['suites_11_6_1_D'] + $row['suites_11_6_1_E'];
			$suites_11_7_self_self = $row['suites_11_7_1_A'] + $row['suites_11_7_1_B_a'] + $row['suites_11_7_1_B_b'] + $row['suites_11_7_1_B_c'] + $row['suites_11_7_1_B_d'] + $row['suites_11_7_1_C'] + $row['suites_11_7_1_D'];
			$suites_11_8_self_self = $row['suites_11_8_1_A'] + $row['suites_11_8_1_B_a'] + $row['suites_11_8_1_B_b'] + $row['suites_11_8_1_B_c'] + $row['suites_11_8_1_B_d'] + $row['suites_11_8_1_B_e'] + $row['suites_11_8_1_B_f'] + $row['suites_11_8_1_B_g'] + $row['suites_11_8_1_B_h'] + $row['suites_11_8_1_B_i'] + $row['suites_11_8_1_C_a'] + $row['suites_11_8_1_C_b'] + $row['suites_11_8_1_D'];
			$suites_11_9_self_self = $row['suites_11_9_1_A'] + $row['suites_11_9_1_B'];
			$suites_11_10_self_self = $row['suites_11_10_1_A_a'] + $row['suites_11_10_1_A_b'] + $row['suites_11_10_1_A_c'] + $row['suites_11_10_1_A_d'] + $row['suites_11_10_1_A_e'] + $row['suites_11_10_1_B_a'] + $row['suites_11_10_1_B_b'] + $row['suites_11_10_1_B_c'] + $row['suites_11_10_1_B_d'] + $row['suites_11_10_1_C'];
			$suites_11_11_self_self = $row['suites_11_11_1_A'] + $row['suites_11_11_1_B'] + $row['suites_11_11_1_C_a'] + $row['suites_11_11_1_C_b'] + $row['suites_11_11_1_C_c'] + $row['suites_11_11_1_D'] + $row['suites_11_11_1_E'] + $row['suites_11_11_1_F'] + $row['suites_11_11_1_G'];
			$suites_11_12_self_self = $row['suites_11_12_1_A_a'] + $row['suites_11_12_1_A_b'] + $row['suites_11_12_1_A_c'] + $row['suites_11_12_1_A_d'] + $row['suites_11_12_1_A_e'] + $row['suites_11_12_1_A_f'] + $row['suites_11_12_1_A_g'] + $row['suites_11_12_1_A_h'] + $row['suites_11_12_1_A_i'] + $row['suites_11_12_1_A_j'] + $row['suites_11_12_1_A_k'] + $row['suites_11_12_1_A_l'] + $row['suites_11_12_1_A_m'] + $row['suites_11_12_1_A_n'] + $row['suites_11_12_1_A_o'] + $row['suites_11_12_1_A_p'] + $row['suites_11_12_1_A_q'] + $row['suites_11_12_1_A_r'] + $row['suites_11_12_1_A_s'] + $row['suites_11_12_1_A_t'] + $row['suites_11_12_1_A_u'] + $row['suites_11_12_1_A_v'] + $row['suites_11_12_1_B'] + $row['suites_11_12_1_C'];
			$suites_11_13_self_self = $row['suites_11_13_1_A'] + $row['suites_11_13_1_B'];
			$suites_11_14_self_self = $row['suites_11_14_1_A'] + $row['suites_11_14_1_B_a'] + $row['suites_11_14_1_B_b'] + $row['suites_11_14_1_B_c'] + $row['suites_11_14_1_C'];
			$suites_11_15_self_self = $row['suites_11_15_1_A'] + 0;
			$suites_11_16_self_self = $row['suites_11_16_1_A_a'] + $row['suites_11_16_1_A_b'] + $row['suites_11_16_1_A_c'] + $row['suites_11_16_1_A_d'] + $row['suites_11_16_1_A_e'] + $row['suites_11_16_1_A_f'] + $row['suites_11_16_1_A_g'] + $row['suites_11_16_1_A_h'] + $row['suites_11_16_1_A_i'] + $row['suites_11_16_1_A_j'] + $row['suites_11_16_1_A_k'] + $row['suites_11_16_1_A_l'] + $row['suites_11_16_1_A_m'] + $row['suites_11_16_1_A_n'] + $row['suites_11_16_1_A_o'] + $row['suites_11_16_1_A_p'] + $row['suites_11_16_1_A_q'] + $row['suites_11_16_1_A_r'] + $row['suites_11_16_1_A_s'] + $row['suites_11_16_1_A_t'] + $row['suites_11_16_1_A_u'] + $row['suites_11_16_1_A_v'] + $row['suites_11_16_1_A_w'] + $row['suites_11_16_1_A_x'] + $row['suites_11_16_1_B'] + $row['suites_11_16_1_C'] + $row['suites_11_16_1_D'] + $row['suites_11_16_1_E'] + $row['suites_11_16_1_F'];
			$suites_11_17_self_self = $row['suites_11_17_1_A_a'] + $row['suites_11_17_1_A_b'] + $row['suites_11_17_1_A_c'] + $row['suites_11_17_1_A_d'] + $row['suites_11_17_1_A_e'] + $row['suites_11_17_1_A_f'] + $row['suites_11_17_1_A_g'] + $row['suites_11_17_1_A_h'] + $row['suites_11_17_1_A_i'] + $row['suites_11_17_1_A_j'] + $row['suites_11_17_1_A_k'] + $row['suites_11_17_1_A_l'] + $row['suites_11_17_1_B'] + $row['suites_11_17_1_C'];
			$suites_11_18_self_self = $row['suites_11_18_1_A'] + $row['suites_11_18_1_B'] + $row['suites_11_18_1_C'] + $row['suites_11_18_1_D'] + $row['suites_11_18_1_E'] + $row['suites_11_18_1_F'];
			$suites_11_19_self_self = $row['suites_11_19_1_A_a'] + $row['suites_11_19_1_A_b'] + $row['suites_11_19_1_A_c'] + $row['suites_11_19_1_A_d'] + $row['suites_11_19_1_A_e'] + $row['suites_11_19_1_B'] + $row['suites_11_19_1_C'] + $row['suites_11_19_1_D'] + $row['suites_11_19_1_E'] + $row['suites_11_19_1_F'];
			$suites_11_20_self_self = $row['suites_11_20_1_A'] + $row['suites_11_20_1_B'] + $row['suites_11_20_1_C'];
			$suites_11_21_self_self = $row['suites_11_21_1_A'] + $row['suites_11_21_1_B'] + $row['suites_11_21_1_C'];
			$output['suites_11_1_self_self'] = $suites_11_1_self_self;
			$output['suites_11_2_self_self'] = $suites_11_2_self_self;
			$output['suites_11_3_self_self'] = $suites_11_3_self_self;
			$output['suites_11_4_self_self'] = $suites_11_4_self_self;
			$output['suites_11_5_self_self'] = $suites_11_5_self_self;
			$output['suites_11_6_self_self'] = $suites_11_6_self_self;
			$output['suites_11_7_self_self'] = $suites_11_7_self_self;
			$output['suites_11_8_self_self'] = $suites_11_8_self_self;
			$output['suites_11_9_self_self'] = $suites_11_9_self_self;
			$output['suites_11_10_self_self'] = $suites_11_10_self_self;
			$output['suites_11_11_self_self'] = $suites_11_11_self_self;
			$output['suites_11_12_self_self'] = $suites_11_12_self_self;
			$output['suites_11_13_self_self'] = $suites_11_13_self_self;
			$output['suites_11_14_self_self'] = $suites_11_14_self_self;
			$output['suites_11_15_self_self'] = $suites_11_15_self_self;
			$output['suites_11_16_self_self'] = $suites_11_16_self_self;
			$output['suites_11_17_self_self'] = $suites_11_17_self_self;
			$output['suites_11_18_self_self'] = $suites_11_18_self_self;
			$output['suites_11_19_self_self'] = $suites_11_19_self_self;
			$output['suites_11_20_self_self'] = $suites_11_20_self_self;
			$output['suites_11_21_self_self'] = $suites_11_21_self_self;
			$output['suites_11_0_self_self'] = $suites_11_1_self_self + $suites_11_2_self_self + $suites_11_3_self_self + $suites_11_4_self_self + $suites_11_5_self_self + $suites_11_6_self_self + $suites_11_7_self_self + $suites_11_8_self_self + $suites_11_9_self_self + $suites_11_10_self_self + $suites_11_11_self_self + $suites_11_12_self_self + $suites_11_13_self_self + $suites_11_14_self_self + $suites_11_15_self_self + $suites_11_16_self_self + $suites_11_17_self_self + $suites_11_18_self_self + $suites_11_19_self_self + $suites_11_20_self_self + $suites_11_21_self_self;
			
			//HYGIENE AND SANITATION
			
			$hygiene_and_sanitation_12_1_self_self = $row['hygiene_and_sanitation_12_1_1_A']+$row['hygiene_and_sanitation_12_1_1_B']+$row['hygiene_and_sanitation_12_1_1_C']+$row['hygiene_and_sanitation_12_1_1_D_a']+$row['hygiene_and_sanitation_12_1_1_D_b']+$row['hygiene_and_sanitation_12_1_1_D_c']+$row['hygiene_and_sanitation_12_1_1_D_d']+$row['hygiene_and_sanitation_12_1_1_D_e']+$row['hygiene_and_sanitation_12_1_1_D_f']+$row['hygiene_and_sanitation_12_1_1_D_g']+$row['hygiene_and_sanitation_12_1_1_D_h']+$row['hygiene_and_sanitation_12_1_1_E']+$row['hygiene_and_sanitation_12_1_1_F']+$row['hygiene_and_sanitation_12_1_1_G']+$row['hygiene_and_sanitation_12_1_1_H']+$row['hygiene_and_sanitation_12_1_1_I_a']+$row['hygiene_and_sanitation_12_1_1_I_b']+$row['hygiene_and_sanitation_12_1_1_I_c']+$row['hygiene_and_sanitation_12_1_1_I_d']+$row['hygiene_and_sanitation_12_1_1_I_e']+$row['hygiene_and_sanitation_12_1_1_J']+$row['hygiene_and_sanitation_12_1_1_K']+$row['hygiene_and_sanitation_12_1_1_L'];
			$hygiene_and_sanitation_12_2_self_self = $row['hygiene_and_sanitation_12_2_1_A']+$row['hygiene_and_sanitation_12_2_1_B']+$row['hygiene_and_sanitation_12_2_1_C']+$row['hygiene_and_sanitation_12_2_1_D']+$row['hygiene_and_sanitation_12_2_1_E_a']+$row['hygiene_and_sanitation_12_2_1_E_b']+$row['hygiene_and_sanitation_12_2_1_E_c']+$row['hygiene_and_sanitation_12_2_1_E_d']+$row['hygiene_and_sanitation_12_2_1_E_e']+$row['hygiene_and_sanitation_12_2_1_E_f']+$row['hygiene_and_sanitation_12_2_1_E_g']+$row['hygiene_and_sanitation_12_2_1_E_h']+$row['hygiene_and_sanitation_12_2_1_E_i']+$row['hygiene_and_sanitation_12_2_1_F']+$row['hygiene_and_sanitation_12_2_1_G']+$row['hygiene_and_sanitation_12_2_1_H_a']+$row['hygiene_and_sanitation_12_2_1_H_b']+$row['hygiene_and_sanitation_12_2_1_H_c']+$row['hygiene_and_sanitation_12_2_1_H_d']+$row['hygiene_and_sanitation_12_2_1_I']+$row['hygiene_and_sanitation_12_2_1_J'];
			$hygiene_and_sanitation_12_3_self_self = $row['hygiene_and_sanitation_12_3_1_A']+$row['hygiene_and_sanitation_12_3_1_B']+$row['hygiene_and_sanitation_12_3_1_C']+$row['hygiene_and_sanitation_12_3_1_D']+$row['hygiene_and_sanitation_12_3_1_E']+$row['hygiene_and_sanitation_12_3_1_F'];
			$hygiene_and_sanitation_12_4_self_self = $row['hygiene_and_sanitation_12_4_1_A']+$row['hygiene_and_sanitation_12_4_1_B']+$row['hygiene_and_sanitation_12_4_1_C'];
			$hygiene_and_sanitation_12_5_self_self = $row['hygiene_and_sanitation_12_5_1_A']+$row['hygiene_and_sanitation_12_5_1_B'];
			$hygiene_and_sanitation_12_6_self_self = $row['hygiene_and_sanitation_12_6_1_A']+$row['hygiene_and_sanitation_12_6_1_B_a']+$row['hygiene_and_sanitation_12_6_1_B_b']+$row['hygiene_and_sanitation_12_6_1_C'];
			$hygiene_and_sanitation_12_7_self_self = $row['hygiene_and_sanitation_12_7_1_A']+$row['hygiene_and_sanitation_12_7_1_B'];
			$output['hygiene_and_sanitation_12_1_self_self'] = $hygiene_and_sanitation_12_1_self_self;
			$output['hygiene_and_sanitation_12_2_self_self'] = $hygiene_and_sanitation_12_2_self_self;
			$output['hygiene_and_sanitation_12_3_self_self'] = $hygiene_and_sanitation_12_3_self_self;
			$output['hygiene_and_sanitation_12_4_self_self'] = $hygiene_and_sanitation_12_4_self_self;
			$output['hygiene_and_sanitation_12_5_self_self'] = $hygiene_and_sanitation_12_5_self_self;
			$output['hygiene_and_sanitation_12_6_self_self'] = $hygiene_and_sanitation_12_6_self_self;
			$output['hygiene_and_sanitation_12_7_self_self'] = $hygiene_and_sanitation_12_7_self_self;
			$output['hygiene_and_sanitation_12_0_self_self'] = $hygiene_and_sanitation_12_1_self_self + $hygiene_and_sanitation_12_2_self_self + $hygiene_and_sanitation_12_3_self_self + $hygiene_and_sanitation_12_4_self_self + $hygiene_and_sanitation_12_5_self_self + $hygiene_and_sanitation_12_6_self_self + $hygiene_and_sanitation_12_7_self_self;
			
			//SAFETY AND SECURITY
			
			$safety_and_security_13_1_self_self = $row['safety_and_security_13_1_1_A'] + $row['safety_and_security_13_1_1_B'] + $row['safety_and_security_13_1_1_C'] + $row['safety_and_security_13_1_1_D'] + $row['safety_and_security_13_1_1_E'] + $row['safety_and_security_13_1_1_F_a'] + $row['safety_and_security_13_1_1_F_b'] + $row['safety_and_security_13_1_1_F_c'] + $row['safety_and_security_13_1_1_F_d'] + $row['safety_and_security_13_1_1_F_e'] + $row['safety_and_security_13_1_1_F_f'] + $row['safety_and_security_13_1_1_F_g'] + $row['safety_and_security_13_1_1_G'] + $row['safety_and_security_13_1_1_H'] + $row['safety_and_security_13_1_1_I'] + $row['safety_and_security_13_1_1_J'];
			$safety_and_security_13_2_self_self = $row['safety_and_security_13_2_1_A'] + $row['safety_and_security_13_2_1_B'];
			$safety_and_security_13_3_self_self = $row['safety_and_security_13_3_1_A'] + $row['safety_and_security_13_3_1_B'] + $row['safety_and_security_13_3_1_C'] + $row['safety_and_security_13_3_1_D'] + $row['safety_and_security_13_3_1_E'] + $row['safety_and_security_13_3_1_F'] + $row['safety_and_security_13_3_1_G'] + $row['safety_and_security_13_3_1_H'];
			$safety_and_security_13_4_self_self = $row['safety_and_security_13_4_1_A'] + $row['safety_and_security_13_4_1_B'] + $row['safety_and_security_13_4_1_C'] + $row['safety_and_security_13_4_1_D'] + $row['safety_and_security_13_4_1_E'];
			$safety_and_security_13_5_self_self = $row['safety_and_security_13_5_1_A'] + $row['safety_and_security_13_5_1_B'] + $row['safety_and_security_13_5_1_C'] + $row['safety_and_security_13_5_1_D'] + $row['safety_and_security_13_5_1_E'];
			$output['safety_and_security_13_1_self_self'] = $safety_and_security_13_1_self_self;
			$output['safety_and_security_13_2_self_self'] = $safety_and_security_13_2_self_self;
			$output['safety_and_security_13_3_self_self'] = $safety_and_security_13_3_self_self;
			$output['safety_and_security_13_4_self_self'] = $safety_and_security_13_4_self_self;
			$output['safety_and_security_13_5_self_self'] = $safety_and_security_13_5_self_self;
			$output['safety_and_security_13_0_self_self'] = $safety_and_security_13_1_self_self + $safety_and_security_13_2_self_self + $safety_and_security_13_3_self_self + $safety_and_security_13_4_self_self + $safety_and_security_13_5_self_self;
			
			//SUNDRY SERVICES

			$sundry_services_14_1_self_self = $row['sundry_services_14_1_1_A'] + $row['sundry_services_14_1_1_B'] + $row['sundry_services_14_1_1_C'];
			$sundry_services_14_2_self_self = $row['sundry_services_14_2_1_A'] + 0;
			$sundry_services_14_3_self_self = $row['sundry_services_14_3_1_A'] + 0;
			$sundry_services_14_4_self_self = $row['sundry_services_14_4_1_A'] + 0;
			$sundry_services_14_5_self_self = $row['sundry_services_14_5_1_A'] + $row['sundry_services_14_5_1_B'] + $row['sundry_services_14_5_1_C'] + $row['sundry_services_14_5_1_D'];
			$output['sundry_services_14_1_self_self'] = $sundry_services_14_1_self_self;
			$output['sundry_services_14_2_self_self'] = $sundry_services_14_2_self_self;
			$output['sundry_services_14_3_self_self'] = $sundry_services_14_3_self_self;
			$output['sundry_services_14_4_self_self'] = $sundry_services_14_4_self_self;
			$output['sundry_services_14_5_self_self'] = $sundry_services_14_5_self_self;
			$output['sundry_services_14_0_self_self'] = $sundry_services_14_1_self_self + $sundry_services_14_2_self_self + $sundry_services_14_3_self_self + $sundry_services_14_4_self_self + $sundry_services_14_5_self_self;
			
			//HUMAN RESOURCES
			
			$human_resources_15_1_self_self = $row['human_resources_15_1_1_A'] + $row['human_resources_15_1_1_B_a'] + $row['human_resources_15_1_1_B_b'] + $row['human_resources_15_1_1_B_c'] + $row['human_resources_15_1_1_B_d'] + $row['human_resources_15_1_1_B_e'] + $row['human_resources_15_1_1_B_f'];
			$human_resources_15_2_self_self = $row['human_resources_15_2_1_A'] + $row['human_resources_15_2_1_B'];
			$human_resources_15_3_self_self = $row['human_resources_15_3_1_A'] + $row['human_resources_15_3_1_B'];
			$human_resources_15_4_self_self = $row['human_resources_15_4_1_A'] + $row['human_resources_15_4_1_B'] + $row['human_resources_15_4_1_C'];
			$human_resources_15_5_self_self = $row['human_resources_15_5_1_A_a'] + $row['human_resources_15_5_1_A_b'] + $row['human_resources_15_5_1_A_c'] + $row['human_resources_15_5_1_B_a'] + $row['human_resources_15_5_1_B_b'] + $row['human_resources_15_5_1_B_c'] + $row['human_resources_15_5_1_C_a'] + $row['human_resources_15_5_1_C_b'] + $row['human_resources_15_5_1_C_c'];
			$human_resources_15_6_self_self = $row['human_resources_15_6_1_A'] + 0;
			$human_resources_15_7_self_self = $row['human_resources_15_7_1_A'] + $row['human_resources_15_7_1_B'] + $row['human_resources_15_7_1_C'] + $row['human_resources_15_7_1_D'];
			$human_resources_15_8_self_self = $row['human_resources_15_8_1_A'] + $row['human_resources_15_8_1_B'] + $row['human_resources_15_8_1_C'];
			$human_resources_15_9_self_self = $row['human_resources_15_9_1_A'] + $row['human_resources_15_9_1_B'] + $row['human_resources_15_9_1_C'] + $row['human_resources_15_9_1_D'] + $row['human_resources_15_9_1_E'] + $row['human_resources_15_9_1_F_a'] + $row['human_resources_15_9_1_F_b'] + $row['human_resources_15_9_1_F_c'];
			$output['human_resources_15_1_self_self'] = $human_resources_15_1_self_self;
			$output['human_resources_15_2_self_self'] = $human_resources_15_2_self_self;
			$output['human_resources_15_3_self_self'] = $human_resources_15_3_self_self;
			$output['human_resources_15_4_self_self'] = $human_resources_15_4_self_self;
			$output['human_resources_15_5_self_self'] = $human_resources_15_5_self_self;
			$output['human_resources_15_6_self_self'] = $human_resources_15_6_self_self;
			$output['human_resources_15_7_self_self'] = $human_resources_15_7_self_self;
			$output['human_resources_15_8_self_self'] = $human_resources_15_8_self_self;
			$output['human_resources_15_9_self_self'] = $human_resources_15_9_self_self;
			$output['human_resources_15_0_self_self'] = $human_resources_15_1_self_self + $human_resources_15_2_self_self + $human_resources_15_3_self_self + $human_resources_15_4_self_self + $human_resources_15_5_self_self + $human_resources_15_6_self_self + $human_resources_15_7_self_self + $human_resources_15_8_self_self + $human_resources_15_9_self_self;
			
			//GENERAL
			
			$general_16_1_self_self = $row['general_16_1_1_A'] + 0;
			$general_16_2_self_self = $row['general_16_2_1_A'] + $row['general_16_2_1_B_a'] + $row['general_16_2_1_B_b'] + $row['general_16_2_1_B_c'] + $row['general_16_2_1_B_d'] + $row['general_16_2_1_B_e'] + $row['general_16_2_1_C'];
			$general_16_3_self_self = $row['general_16_3_1_A_a'] + $row['general_16_3_1_A_b'] + $row['general_16_3_1_A_c'] + $row['general_16_3_1_B'] + $row['general_16_3_1_C_a'] + $row['general_16_3_1_C_b'] + $row['general_16_3_1_C_c'] + $row['general_16_3_1_C_d'] + $row['general_16_3_1_C_e'] + $row['general_16_3_1_D_a'] + $row['general_16_3_1_D_b'] + $row['general_16_3_1_E'];
			$general_16_4_self_self = $row['general_16_4_1_A'] + $row['general_16_4_1_B'];
			$general_16_5_self_self = $row['general_16_5_1_A'] + $row['general_16_5_1_B'];
			$general_16_6_self_self = $row['general_16_6_1_A'] + $row['general_16_6_1_B'];
			$general_16_7_self_self = $row['general_16_7_1_A'] + $row['general_16_7_1_B'];
			$general_16_8_self_self = $row['general_16_8_1_A'] + $row['general_16_8_1_B'] + $row['general_16_8_1_C'];
			$general_16_9_self_self = $row['general_16_9_1_A'] + $row['general_16_9_1_B'] + $row['general_16_9_1_C'] + $row['general_16_9_1_D'];
			$general_16_10_self_self = $row['general_16_10_1_A'] + $row['general_16_10_1_B'] + $row['general_16_10_1_C'];
			$general_16_11_self_self = $row['general_16_11_1_A'] + $row['general_16_11_1_B'] + $row['general_16_11_1_C'] + $row['general_16_11_1_D_a'] + $row['general_16_11_1_D_b'] + $row['general_16_11_1_D_c'] + $row['general_16_11_1_D_d'] + $row['general_16_11_1_D_e'] + $row['general_16_11_1_E'] + $row['general_16_11_1_F'] + $row['general_16_11_1_G'] + $row['general_16_11_1_H'];
			$general_16_12_self_self = $row['general_16_12_1_A'] + 0;
			$general_16_13_self_self = $row['general_16_13_1_A'] + $row['general_16_13_1_B_a'] + $row['general_16_13_1_B_b'] + $row['general_16_13_1_B_c'] + $row['general_16_13_1_B_d'] + $row['general_16_13_1_B_e'] + $row['general_16_13_1_C'] + $row['general_16_13_1_D'] + $row['general_16_13_1_E'];
			$output['general_16_1_self_self'] = $general_16_1_self_self;
			$output['general_16_2_self_self'] = $general_16_1_self_self;
			$output['general_16_3_self_self'] = $general_16_1_self_self;
			$output['general_16_4_self_self'] = $general_16_1_self_self;
			$output['general_16_5_self_self'] = $general_16_1_self_self;
			$output['general_16_6_self_self'] = $general_16_6_self_self;
			$output['general_16_7_self_self'] = $general_16_7_self_self;
			$output['general_16_8_self_self'] = $general_16_8_self_self;
			$output['general_16_9_self_self'] = $general_16_9_self_self;
			$output['general_16_10_self_self'] = $general_16_10_self_self;
			$output['general_16_11_self_self'] = $general_16_11_self_self;
			$output['general_16_12_self_self'] = $general_16_12_self_self;
			$output['general_16_13_self_self'] = $general_16_13_self_self;
			$output['general_16_0_self_self'] = $general_16_1_self_self + $general_16_2_self_self + $general_16_3_self_self + $general_16_4_self_self + $general_16_5_self_self + $general_16_6_self_self + $general_16_7_self_self + $general_16_8_self_self + $general_16_9_self_self + $general_16_10_self_self + $general_16_11_self_self + $general_16_12_self_self + $general_16_13_self_self;
		}
	}
	
	//// SELF_ASSESSOR_1 ////
	
	$query = "SELECT * FROM afcg_assessment_villa WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_1'))"; 
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
			
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lobby_lounge_other_public_areas_4_1_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_1_1_A'] + $row['lobby_lounge_other_public_areas_4_1_1_B'] + $row['lobby_lounge_other_public_areas_4_1_1_C'] + $row['lobby_lounge_other_public_areas_4_1_1_D'] + $row['lobby_lounge_other_public_areas_4_1_1_E'];
			$lobby_lounge_other_public_areas_4_2_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_2_1_A'] + 0;
			$lobby_lounge_other_public_areas_4_3_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_3_1_A'] + $row['lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lobby_lounge_other_public_areas_4_3_1_C'];
			$lobby_lounge_other_public_areas_4_4_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_4_1_A'] + $row['lobby_lounge_other_public_areas_4_4_1_B'] + $row['lobby_lounge_other_public_areas_4_4_1_C'] + $row['lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lobby_lounge_other_public_areas_4_4_1_E'] + $row['lobby_lounge_other_public_areas_4_4_1_F'];
			$lobby_lounge_other_public_areas_4_5_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_5_1_A'] + $row['lobby_lounge_other_public_areas_4_5_1_B'];
			$lobby_lounge_other_public_areas_4_6_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_6_1_A'] + $row['lobby_lounge_other_public_areas_4_6_1_B'] + $row['lobby_lounge_other_public_areas_4_6_1_C'] + $row['lobby_lounge_other_public_areas_4_6_1_D'] + $row['lobby_lounge_other_public_areas_4_6_1_E'] + $row['lobby_lounge_other_public_areas_4_6_1_F'];
			$lobby_lounge_other_public_areas_4_7_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_7_1_A'] + $row['lobby_lounge_other_public_areas_4_7_1_B'] + $row['lobby_lounge_other_public_areas_4_7_1_C'];
			$lobby_lounge_other_public_areas_4_8_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_8_1_A'] + $row['lobby_lounge_other_public_areas_4_8_1_B_a'] + $row['lobby_lounge_other_public_areas_4_8_1_B_b'] + $row['lobby_lounge_other_public_areas_4_8_1_B_c'] + $row['lobby_lounge_other_public_areas_4_8_1_B_d'] + $row['lobby_lounge_other_public_areas_4_8_1_B_e'] + $row['lobby_lounge_other_public_areas_4_8_1_B_f'] + $row['lobby_lounge_other_public_areas_4_8_1_C'];
			$lobby_lounge_other_public_areas_4_9_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_9_1_A'] + $row['lobby_lounge_other_public_areas_4_9_1_B'] + $row['lobby_lounge_other_public_areas_4_9_1_C'] + $row['lobby_lounge_other_public_areas_4_9_1_D'];
			$lobby_lounge_other_public_areas_4_10_self_assessor_1 = $row['lobby_lounge_other_public_areas_4_10_1_A'] + 0;
			$output['lobby_lounge_other_public_areas_4_1_self_assessor_1'] = $lobby_lounge_other_public_areas_4_1_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_2_self_assessor_1'] = $lobby_lounge_other_public_areas_4_2_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_3_self_assessor_1'] = $lobby_lounge_other_public_areas_4_3_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_4_self_assessor_1'] = $lobby_lounge_other_public_areas_4_4_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_5_self_assessor_1'] = $lobby_lounge_other_public_areas_4_5_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_6_self_assessor_1'] = $lobby_lounge_other_public_areas_4_6_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_7_self_assessor_1'] = $lobby_lounge_other_public_areas_4_7_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_8_self_assessor_1'] = $lobby_lounge_other_public_areas_4_8_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_9_self_assessor_1'] = $lobby_lounge_other_public_areas_4_9_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_10_self_assessor_1'] = $lobby_lounge_other_public_areas_4_10_self_assessor_1;
			$output['lobby_lounge_other_public_areas_4_0_self_assessor_1'] = $lobby_lounge_other_public_areas_4_1_self_assessor_1 + $lobby_lounge_other_public_areas_4_2_self_assessor_1 + $lobby_lounge_other_public_areas_4_3_self_assessor_1 + $lobby_lounge_other_public_areas_4_4_self_assessor_1 + $lobby_lounge_other_public_areas_4_5_self_assessor_1 + $lobby_lounge_other_public_areas_4_6_self_assessor_1 + $lobby_lounge_other_public_areas_4_7_self_assessor_1 + $lobby_lounge_other_public_areas_4_8_self_assessor_1 + $lobby_lounge_other_public_areas_4_9_self_assessor_1 + $lobby_lounge_other_public_areas_4_10_self_assessor_1;
			
			//FUNCTION ROOMS 5.0
			$function_rooms_5_1_self_assessor_1 = $row['function_rooms_5_1_1_A'] + $row['function_rooms_5_1_1_B'] + $row['function_rooms_5_1_1_C'] + $row['function_rooms_5_1_1_D'] + $row['function_rooms_5_1_1_E'] + $row['function_rooms_5_1_1_F'] + $row['function_rooms_5_1_1_G'] + $row['function_rooms_5_1_1_H'] + $row['function_rooms_5_1_1_I'] + $row['function_rooms_5_1_1_J'] + $row['function_rooms_5_1_1_K'] + $row['function_rooms_5_1_1_L'] + $row['function_rooms_5_1_1_M'];
			$output['function_rooms_5_1_self_assessor_1'] = $function_rooms_5_1_self_assessor_1;
			$output['function_rooms_5_0_self_assessor_1'] = $function_rooms_5_1_self_assessor_1;
			//RESTAURANTS
			$restaurants_6_1_self_assessor_1 = $row['restaurants_6_1_1_A'] + $row['restaurants_6_1_1_B'] + $row['restaurants_6_1_1_C'] + $row['restaurants_6_1_1_D'];
			$restaurants_6_2_self_assessor_1 = $row['restaurants_6_2_1_A'] + $row['restaurants_6_2_1_B'] + $row['restaurants_6_2_1_C'] + $row['restaurants_6_2_1_D'] + $row['restaurants_6_2_1_E'] + $row['restaurants_6_2_1_F'] + $row['restaurants_6_2_1_G'] + $row['restaurants_6_2_1_H'] + $row['restaurants_6_2_1_I'];
			$restaurants_6_3_self_assessor_1 = $row['restaurants_6_3_1_A'] + $row['restaurants_6_3_1_B'] + $row['restaurants_6_3_1_C'];
			$restaurants_6_4_self_assessor_1 = $row['restaurants_6_4_1_A'] + $row['restaurants_6_4_1_B'] + $row['restaurants_6_4_1_C'] + $row['restaurants_6_4_1_D'] + $row['restaurants_6_4_1_E'] + $row['restaurants_6_4_1_F'] + $row['restaurants_6_4_1_G'];
			$restaurants_6_5_self_assessor_1 = $row['restaurants_6_5_1_A'] + $row['restaurants_6_5_1_B'] + $row['restaurants_6_5_1_C'] + $row['restaurants_6_5_1_D'] + $row['restaurants_6_5_1_E_a'] + $row['restaurants_6_5_1_E_b'] + $row['restaurants_6_5_1_E_c'] + $row['restaurants_6_5_1_E_d'] + $row['restaurants_6_5_1_F'] + $row['restaurants_6_5_1_G_a'] + $row['restaurants_6_5_1_G_b'] + $row['restaurants_6_5_1_G_c'] + $row['restaurants_6_5_1_H'] + $row['restaurants_6_5_1_I'];
			$restaurants_6_6_self_assessor_1 = $row['restaurants_6_6_1_A'] + $row['restaurants_6_6_1_B'] + $row['restaurants_6_6_1_C'] + $row['restaurants_6_6_1_D'];
			$restaurants_6_7_self_assessor_1 = $row['restaurants_6_7_1_A'] + $row['restaurants_6_7_1_B'] + $row['restaurants_6_7_1_C'];
			$restaurants_6_8_self_assessor_1 = $row['restaurants_6_8_1_A'] + $row['restaurants_6_8_1_B'];			
			$output['restaurants_6_1_self_assessor_1'] = $restaurants_6_1_self_assessor_1;
			$output['restaurants_6_2_self_assessor_1'] = $restaurants_6_2_self_assessor_1;
			$output['restaurants_6_3_self_assessor_1'] = $restaurants_6_3_self_assessor_1;
			$output['restaurants_6_4_self_assessor_1'] = $restaurants_6_4_self_assessor_1;
			$output['restaurants_6_5_self_assessor_1'] = $restaurants_6_5_self_assessor_1;
			$output['restaurants_6_6_self_assessor_1'] = $restaurants_6_6_self_assessor_1;
			$output['restaurants_6_7_self_assessor_1'] = $restaurants_6_7_self_assessor_1;
			$output['restaurants_6_8_self_assessor_1'] = $restaurants_6_8_self_assessor_1;
			$output['restaurants_6_0_self_assessor_1'] = $restaurants_6_1_self_assessor_1 + $restaurants_6_2_self_assessor_1 + $restaurants_6_3_self_assessor_1 + $restaurants_6_4_self_assessor_1 + $restaurants_6_5_self_assessor_1 + $restaurants_6_6_self_assessor_1 + $restaurants_6_7_self_assessor_1 + $restaurants_6_8_self_assessor_1;
			//BARS
			$bar_7_1_self_assessor_1 = $row['bar_7_1_1_A'] + $row['bar_7_1_1_B_a'] + $row['bar_7_1_1_B_b'] + $row['bar_7_1_1_B_c'] + $row['bar_7_1_1_C'] + $row['bar_7_1_1_D_a'] + $row['bar_7_1_1_D_b'] + $row['bar_7_1_1_D_c'] + $row['bar_7_1_1_E'] + $row['bar_7_1_1_F'] + $row['bar_7_1_1_G'];
			$bar_7_2_self_assessor_1 = $row['bar_7_2_1_A'] + $row['bar_7_2_1_B'] + $row['bar_7_2_1_C'] + $row['bar_7_2_1_D'] + $row['bar_7_2_1_E'] + $row['bar_7_2_1_F'] + $row['bar_7_2_1_G'] + $row['bar_7_2_1_H'] + $row['bar_7_2_1_I'] + $row['bar_7_2_1_J'];
			$bar_7_3_self_assessor_1 = $row['bar_7_3_1_A'] + $row['bar_7_3_1_B'] + $row['bar_7_3_1_C'] + $row['bar_7_3_1_D'];
			$bar_7_4_self_assessor_1 = $row['bar_7_4_1_A'] + $row['bar_7_4_1_B'] + $row['bar_7_4_1_C'];
			$bar_7_5_self_assessor_1 = $row['bar_7_5_1_A'] + $row['bar_7_5_1_B'] + $row['bar_7_5_1_C'] + $row['bar_7_5_1_D'] + $row['bar_7_5_1_E_a'] + $row['bar_7_5_1_E_b'] + $row['bar_7_5_1_E_c'] + $row['bar_7_5_1_E_d'] + $row['bar_7_5_1_E_e'] + $row['bar_7_5_1_E_f'] + $row['bar_7_5_1_E_g'] + $row['bar_7_5_1_E_h'] + $row['bar_7_5_1_F'] + $row['bar_7_5_1_G'] + $row['bar_7_5_1_H'] + $row['bar_7_5_1_I'];
			$bar_7_6_self_assessor_1 = $row['bar_7_6_1_A'] + $row['bar_7_6_1_B'] + $row['bar_7_6_1_C'];
			$bar_7_7_self_assessor_1 = $row['bar_7_7_1_A'] + $row['bar_7_7_1_B'] + $row['bar_7_7_1_C'];
			$bar_7_8_self_assessor_1 = $row['bar_7_8_1_A'] + $row['bar_7_8_1_B'] + $row['bar_7_8_1_C'];
			$output['bar_7_1_self_assessor_1'] = $bar_7_1_self_assessor_1;
			$output['bar_7_2_self_assessor_1'] = $bar_7_2_self_assessor_1;
			$output['bar_7_3_self_assessor_1'] = $bar_7_3_self_assessor_1;
			$output['bar_7_4_self_assessor_1'] = $bar_7_4_self_assessor_1;
			$output['bar_7_5_self_assessor_1'] = $bar_7_5_self_assessor_1;
			$output['bar_7_6_self_assessor_1'] = $bar_7_6_self_assessor_1;
			$output['bar_7_7_self_assessor_1'] = $bar_7_7_self_assessor_1;
			$output['bar_7_8_self_assessor_1'] = $bar_7_8_self_assessor_1;
			$output['bar_7_0_self_assessor_1'] = $bar_7_1_self_assessor_1 + $bar_7_2_self_assessor_1 + $bar_7_3_self_assessor_1 + $bar_7_4_self_assessor_1 + $bar_7_5_self_assessor_1 + $bar_7_6_self_assessor_1 + $bar_7_7_self_assessor_1 + $bar_7_8_self_assessor_1;
		
			//KITCHEN			
			$kitchen_8_1_self_assessor_1 = $row['kitchen_8_1_1_A'] + 0;
			$kitchen_8_2_self_assessor_1 = $row['kitchen_8_2_1_A'] + $row['kitchen_8_2_1_B'] + $row['kitchen_8_2_1_C'];
			$kitchen_8_3_self_assessor_1 = $row['kitchen_8_3_1_A'] + $row['kitchen_8_3_1_B'] + $row['kitchen_8_3_1_C'];
			$kitchen_8_4_self_assessor_1 = $row['kitchen_8_4_1_A'] + $row['kitchen_8_4_2_A'] + $row['kitchen_8_4_2_B'] + $row['kitchen_8_4_2_C'];
			$kitchen_8_5_self_assessor_1 = $row['kitchen_8_5_1_A'] + $row['kitchen_8_5_1_B'] + $row['kitchen_8_5_1_C'] + $row['kitchen_8_5_1_D'] + $row['kitchen_8_5_1_E'] + $row['kitchen_8_5_1_F'] + $row['kitchen_8_5_1_G'] + $row['kitchen_8_5_1_H'] + $row['kitchen_8_5_1_I'];
			$kitchen_8_6_self_assessor_1 = $row['kitchen_8_6_1_A'] + $row['kitchen_8_6_1_B'] + $row['kitchen_8_6_1_C'] + $row['kitchen_8_6_1_D'] + $row['kitchen_8_6_1_E'] + $row['kitchen_8_6_1_F'] + $row['kitchen_8_6_1_G'];
			$kitchen_8_7_self_assessor_1 = $row['kitchen_8_7_1_A'] + $row['kitchen_8_7_1_B'] + $row['kitchen_8_7_1_C'] + $row['kitchen_8_7_1_D'] + $row['kitchen_8_7_1_E'];
			$kitchen_8_8_self_assessor_1 = $row['kitchen_8_8_1_A'] + $row['kitchen_8_8_1_B'] + $row['kitchen_8_8_1_C_a'] + $row['kitchen_8_8_1_C_b'] + $row['kitchen_8_8_1_D'] + $row['kitchen_8_8_1_E'];
			$kitchen_8_9_self_assessor_1 = $row['kitchen_8_9_1_A'] + $row['kitchen_8_9_1_B'] + $row['kitchen_8_9_1_C'] + $row['kitchen_8_9_1_D'] + $row['kitchen_8_9_1_E'];
			$kitchen_8_10_self_assessor_1 = $row['kitchen_8_10_1_A_a'] + $row['kitchen_8_10_1_A_b'] + $row['kitchen_8_10_1_A_c'] + $row['kitchen_8_10_1_A_d'] + $row['kitchen_8_10_1_B'] + $row['kitchen_8_10_1_C'] + $row['kitchen_8_10_1_D'] + $row['kitchen_8_10_1_E'] + $row['kitchen_8_10_1_F'] + $row['kitchen_8_10_1_G'];
			$kitchen_8_11_self_assessor_1 = $row['kitchen_8_11_1_A_a'] + $row['kitchen_8_11_1_A_b'] + $row['kitchen_8_11_1_A_c'] + $row['kitchen_8_11_1_B'] + $row['kitchen_8_11_1_C_a'] + $row['kitchen_8_11_1_C_b'] + $row['kitchen_8_11_1_C_c'] + $row['kitchen_8_11_1_C_d'] + $row['kitchen_8_11_1_C_e'] + $row['kitchen_8_11_1_D_a'] + $row['kitchen_8_11_1_D_b'] + $row['kitchen_8_11_1_E'] + $row['kitchen_8_11_1_F'];
			$kitchen_8_12_self_assessor_1 = $row['kitchen_8_12_1_A'] + $row['kitchen_8_12_1_B'] + $row['kitchen_8_12_1_C'];
			$output['kitchen_8_1_self_assessor_1'] = $kitchen_8_1_self_assessor_1;
			$output['kitchen_8_2_self_assessor_1'] = $kitchen_8_2_self_assessor_1;
			$output['kitchen_8_3_self_assessor_1'] = $kitchen_8_3_self_assessor_1;
			$output['kitchen_8_4_self_assessor_1'] = $kitchen_8_4_self_assessor_1;
			$output['kitchen_8_5_self_assessor_1'] = $kitchen_8_5_self_assessor_1;
			$output['kitchen_8_6_self_assessor_1'] = $kitchen_8_6_self_assessor_1;
			$output['kitchen_8_7_self_assessor_1'] = $kitchen_8_7_self_assessor_1;
			$output['kitchen_8_8_self_assessor_1'] = $kitchen_8_8_self_assessor_1;
			$output['kitchen_8_9_self_assessor_1'] = $kitchen_8_9_self_assessor_1;
			$output['kitchen_8_10_self_assessor_1'] = $kitchen_8_10_self_assessor_1;
			$output['kitchen_8_11_self_assessor_1'] = $kitchen_8_11_self_assessor_1;
			$output['kitchen_8_12_self_assessor_1'] = $kitchen_8_12_self_assessor_1;
			$output['kitchen_8_0_self_assessor_1'] = $kitchen_8_1_self_assessor_1 + $kitchen_8_2_self_assessor_1 + $kitchen_8_3_self_assessor_1 + $kitchen_8_4_self_assessor_1 + $kitchen_8_5_self_assessor_1 + $kitchen_8_6_self_assessor_1 + $kitchen_8_7_self_assessor_1 + $kitchen_8_8_self_assessor_1 + $kitchen_8_9_self_assessor_1 + $kitchen_8_10_self_assessor_1 + $kitchen_8_11_self_assessor_1 + $kitchen_8_12_self_assessor_1;
			
			//GUEST ROOMS
			$guest_rooms_9_1_self_assessor_1 = $row['guest_rooms_9_1_1_A'] + 0;
			$guest_rooms_9_2_self_assessor_1 = $row['guest_rooms_9_2_1_A'] + $row['guest_rooms_9_2_1_B'];
			$guest_rooms_9_3_self_assessor_1 = $row['guest_rooms_9_3_1_A'] + $row['guest_rooms_9_3_1_B'];
			$guest_rooms_9_4_self_assessor_1 = $row['guest_rooms_9_4_1_A'] + $row['guest_rooms_9_4_1_B_a'] + $row['guest_rooms_9_4_1_B_b'] + $row['guest_rooms_9_4_1_B_c'] + $row['guest_rooms_9_4_1_B_d'] + $row['guest_rooms_9_4_1_B_e'] + $row['guest_rooms_9_4_1_B_f'] + $row['guest_rooms_9_4_1_B_g'] + $row['guest_rooms_9_4_1_B_h'] + $row['guest_rooms_9_4_1_B_i'] + $row['guest_rooms_9_4_1_B_j'] + $row['guest_rooms_9_4_1_B_k'] + $row['guest_rooms_9_4_1_B_l'] + $row['guest_rooms_9_4_1_B_m'] + $row['guest_rooms_9_4_1_C'] + $row['guest_rooms_9_4_1_D'] + $row['guest_rooms_9_4_1_E'] + $row['guest_rooms_9_4_1_F'] + $row['guest_rooms_9_4_1_G'];
			$guest_rooms_9_5_self_assessor_1 = $row['guest_rooms_9_5_1_A'] + $row['guest_rooms_9_5_1_B_a'] + $row['guest_rooms_9_5_1_B_b'] + $row['guest_rooms_9_5_1_B_c'] + $row['guest_rooms_9_5_1_B_d'] + $row['guest_rooms_9_5_1_B_e'] + $row['guest_rooms_9_5_1_C'] + $row['guest_rooms_9_5_1_D'];
			$guest_rooms_9_6_self_assessor_1 = $row['guest_rooms_9_6_1_A'] + $row['guest_rooms_9_6_1_B'];
			$guest_rooms_9_7_self_assessor_1 = $row['guest_rooms_9_7_1_A'] + $row['guest_rooms_9_7_1_B'] + $row['guest_rooms_9_7_1_C'] + $row['guest_rooms_9_7_1_D'] + $row['guest_rooms_9_7_1_E'];
			$guest_rooms_9_8_self_assessor_1 = $row['guest_rooms_9_8_1_A'] + $row['guest_rooms_9_8_1_B'] + $row['guest_rooms_9_8_1_C'] + $row['guest_rooms_9_8_1_D'] + $row['guest_rooms_9_8_1_E'];
			$guest_rooms_9_9_self_assessor_1 = $row['guest_rooms_9_9_1_A'] + $row['guest_rooms_9_9_1_B_a'] + $row['guest_rooms_9_9_1_B_b'] + $row['guest_rooms_9_9_1_B_c'] + $row['guest_rooms_9_9_1_B_d'] + $row['guest_rooms_9_9_1_B_e'] + $row['guest_rooms_9_9_1_B_f'] + $row['guest_rooms_9_9_1_C_a'] + $row['guest_rooms_9_9_1_C_b'] + $row['guest_rooms_9_9_1_C_c'] + $row['guest_rooms_9_9_1_D'];
			$guest_rooms_9_10_self_assessor_1 = $row['guest_rooms_9_10_1_A'] + $row['guest_rooms_9_10_1_B'];
			$guest_rooms_9_11_self_assessor_1 = $row['guest_rooms_9_11_1_A_a'] + $row['guest_rooms_9_11_1_A_b'] + $row['guest_rooms_9_11_1_A_c'] + $row['guest_rooms_9_11_1_A_d'] + $row['guest_rooms_9_11_1_A_e'] + $row['guest_rooms_9_11_1_B_a'] + $row['guest_rooms_9_11_1_B_b'] + $row['guest_rooms_9_11_1_B'] + $row['guest_rooms_9_11_1_C'];
			$guest_rooms_9_12_self_assessor_1 = $row['guest_rooms_9_12_1_A'] + $row['guest_rooms_9_12_1_B'] + $row['guest_rooms_9_12_1_C'] + $row['guest_rooms_9_12_1_D'] + $row['guest_rooms_9_12_1_E'] + $row['guest_rooms_9_12_1_F'] + $row['guest_rooms_9_12_1_G'];
			$guest_rooms_9_13_self_assessor_1 = $row['guest_rooms_9_13_1_A'] + $row['guest_rooms_9_13_1_B'] + $row['guest_rooms_9_13_1_C'];
			$guest_rooms_9_14_self_assessor_1 = $row['guest_rooms_9_14_1_A'] + $row['guest_rooms_9_14_1_B_a'] + $row['guest_rooms_9_14_1_B_b'] + $row['guest_rooms_9_14_1_B_c'] + $row['guest_rooms_9_14_1_C'];
			$guest_rooms_9_15_self_assessor_1 = $row['guest_rooms_9_15_1_A_a'] + $row['guest_rooms_9_15_1_A_b'] + $row['guest_rooms_9_15_1_A_c'] + $row['guest_rooms_9_15_1_A_d'] + $row['guest_rooms_9_15_1_A_e'] + $row['guest_rooms_9_15_1_A_f'] + $row['guest_rooms_9_15_1_A_g'] + $row['guest_rooms_9_15_1_A_h'] + $row['guest_rooms_9_15_1_A_i'] + $row['guest_rooms_9_15_1_A_j'] + $row['guest_rooms_9_15_1_A_k'] + $row['guest_rooms_9_15_1_A_l'] + $row['guest_rooms_9_15_1_A_m'] + $row['guest_rooms_9_15_1_A_n'] + $row['guest_rooms_9_15_1_A_o'] + $row['guest_rooms_9_15_1_A_p'] + $row['guest_rooms_9_15_1_A_q'] + $row['guest_rooms_9_15_1_B'] + $row['guest_rooms_9_15_1_C'];
			$output['guest_rooms_9_1_self_assessor_1'] = $guest_rooms_9_1_self_assessor_1;
			$output['guest_rooms_9_2_self_assessor_1'] = $guest_rooms_9_2_self_assessor_1;
			$output['guest_rooms_9_3_self_assessor_1'] = $guest_rooms_9_3_self_assessor_1;
			$output['guest_rooms_9_4_self_assessor_1'] = $guest_rooms_9_4_self_assessor_1;
			$output['guest_rooms_9_5_self_assessor_1'] = $guest_rooms_9_5_self_assessor_1;
			$output['guest_rooms_9_6_self_assessor_1'] = $guest_rooms_9_6_self_assessor_1;
			$output['guest_rooms_9_7_self_assessor_1'] = $guest_rooms_9_7_self_assessor_1;
			$output['guest_rooms_9_8_self_assessor_1'] = $guest_rooms_9_8_self_assessor_1;
			$output['guest_rooms_9_9_self_assessor_1'] = $guest_rooms_9_9_self_assessor_1;
			$output['guest_rooms_9_10_self_assessor_1'] = $guest_rooms_9_10_self_assessor_1;
			$output['guest_rooms_9_11_self_assessor_1'] = $guest_rooms_9_11_self_assessor_1;
			$output['guest_rooms_9_12_self_assessor_1'] = $guest_rooms_9_12_self_assessor_1;
			$output['guest_rooms_9_13_self_assessor_1'] = $guest_rooms_9_13_self_assessor_1;
			$output['guest_rooms_9_14_self_assessor_1'] = $guest_rooms_9_14_self_assessor_1;
			$output['guest_rooms_9_15_self_assessor_1'] = $guest_rooms_9_15_self_assessor_1;
			$output['guest_rooms_9_0_self_assessor_1'] = $guest_rooms_9_1_self_assessor_1 + $guest_rooms_9_2_self_assessor_1 + $guest_rooms_9_3_self_assessor_1 + $guest_rooms_9_4_self_assessor_1 + $guest_rooms_9_5_self_assessor_1 + $guest_rooms_9_6_self_assessor_1 + $guest_rooms_9_7_self_assessor_1 + $guest_rooms_9_8_self_assessor_1 + $guest_rooms_9_9_self_assessor_1 + $guest_rooms_9_10_self_assessor_1 + $guest_rooms_9_11_self_assessor_1 + $guest_rooms_9_12_self_assessor_1 + $guest_rooms_9_13_self_assessor_1 + $guest_rooms_9_14_self_assessor_1 + $guest_rooms_9_15_self_assessor_1;

			//GUEST BATHROOMS
			$guest_bathrooms_10_1_self_assessor_1 = $row['guest_bathrooms_10_1_1_A'] + 0;
			$guest_bathrooms_10_2_self_assessor_1 = $row['guest_bathrooms_10_2_1_A'] + 0;
			$guest_bathrooms_10_3_self_assessor_1 = $row['guest_bathrooms_10_3_1_A_a'] + $row['guest_bathrooms_10_3_1_A_b'] + $row['guest_bathrooms_10_3_1_A_c'] + $row['guest_bathrooms_10_3_1_A_d'] + $row['guest_bathrooms_10_3_1_A_e'] + $row['guest_bathrooms_10_3_1_A_f'] + $row['guest_bathrooms_10_3_1_A_g'] + $row['guest_bathrooms_10_3_1_A_h'] + $row['guest_bathrooms_10_3_1_A_i'] + $row['guest_bathrooms_10_3_1_A_j'] + $row['guest_bathrooms_10_3_1_A_k'] + $row['guest_bathrooms_10_3_1_A_l'] + $row['guest_bathrooms_10_3_1_A_m'] + $row['guest_bathrooms_10_3_1_A_n'] + $row['guest_bathrooms_10_3_1_A_o'] + $row['guest_bathrooms_10_3_1_A_p'] + $row['guest_bathrooms_10_3_1_A_q'] + $row['guest_bathrooms_10_3_1_A_r'] + $row['guest_bathrooms_10_3_1_A_s'] + $row['guest_bathrooms_10_3_1_A_t'] + $row['guest_bathrooms_10_3_1_A_u'] + $row['guest_bathrooms_10_3_1_A_v'] + $row['guest_bathrooms_10_3_1_A_w'] + $row['guest_bathrooms_10_3_1_B'] + $row['guest_bathrooms_10_3_1_C'] + $row['guest_bathrooms_10_3_1_D'] + $row['guest_bathrooms_10_3_1_E']+ $row['guest_bathrooms_10_3_1_F'];
			$guest_bathrooms_10_4_self_assessor_1 = $row['guest_bathrooms_10_4_1_A'] + $row['guest_bathrooms_10_4_1_B'] + $row['guest_bathrooms_10_4_1_C'] + $row['guest_bathrooms_10_4_1_D'] + $row['guest_bathrooms_10_4_1_E'] + $row['guest_bathrooms_10_4_1_F'];
			$guest_bathrooms_10_5_self_assessor_1 = $row['guest_bathrooms_10_5_1_A_a'] + $row['guest_bathrooms_10_5_1_A_b'] + $row['guest_bathrooms_10_5_1_A_c'] + $row['guest_bathrooms_10_5_1_A_d'] + $row['guest_bathrooms_10_5_1_A_e'] + $row['guest_bathrooms_10_5_1_B'] + $row['guest_bathrooms_10_5_1_C'] + $row['guest_bathrooms_10_5_1_D'] + $row['guest_bathrooms_10_5_1_E'] + $row['guest_bathrooms_10_5_1_F'];
			$guest_bathrooms_10_6_self_assessor_1 = $row['guest_bathrooms_10_6_1_A'] + $row['guest_bathrooms_10_6_1_B'] + $row['guest_bathrooms_10_6_1_C'];
			$guest_bathrooms_10_7_self_assessor_1 = $row['guest_bathrooms_10_7_1_A'] + $row['guest_bathrooms_10_7_1_B'] + $row['guest_bathrooms_10_7_1_C'] + $row['guest_bathrooms_10_7_1_D'];
			$guest_bathrooms_10_8_self_assessor_1 = $row['guest_bathrooms_10_8_1_A_a'] + $row['guest_bathrooms_10_8_1_A_b'] + $row['guest_bathrooms_10_8_1_A_c'] + $row['guest_bathrooms_10_8_1_A_d'] + $row['guest_bathrooms_10_8_1_A_e'] + $row['guest_bathrooms_10_8_1_A_f'] + $row['guest_bathrooms_10_8_1_A_g'] + $row['guest_bathrooms_10_8_1_B'] + $row['guest_bathrooms_10_8_1_C'];
			$guest_bathrooms_10_9_self_assessor_1 = $row['guest_bathrooms_10_9_1_A'] + $row['guest_bathrooms_10_9_1_B'];
			$output['guest_bathrooms_10_1_self_assessor_1'] = $guest_bathrooms_10_1_self_assessor_1;
			$output['guest_bathrooms_10_2_self_assessor_1'] = $guest_bathrooms_10_2_self_assessor_1;
			$output['guest_bathrooms_10_3_self_assessor_1'] = $guest_bathrooms_10_3_self_assessor_1;
			$output['guest_bathrooms_10_4_self_assessor_1'] = $guest_bathrooms_10_4_self_assessor_1;
			$output['guest_bathrooms_10_5_self_assessor_1'] = $guest_bathrooms_10_5_self_assessor_1;
			$output['guest_bathrooms_10_6_self_assessor_1'] = $guest_bathrooms_10_6_self_assessor_1;
			$output['guest_bathrooms_10_7_self_assessor_1'] = $guest_bathrooms_10_7_self_assessor_1;
			$output['guest_bathrooms_10_8_self_assessor_1'] = $guest_bathrooms_10_8_self_assessor_1;
			$output['guest_bathrooms_10_9_self_assessor_1'] = $guest_bathrooms_10_9_self_assessor_1;
			$output['guest_bathrooms_10_0_self_assessor_1'] = $guest_bathrooms_10_1_self_assessor_1+$guest_bathrooms_10_2_self_assessor_1+$guest_bathrooms_10_3_self_assessor_1+$guest_bathrooms_10_4_self_assessor_1+$guest_bathrooms_10_5_self_assessor_1+$guest_bathrooms_10_6_self_assessor_1+$guest_bathrooms_10_7_self_assessor_1+$guest_bathrooms_10_8_self_assessor_1+$guest_bathrooms_10_9_self_assessor_1;

			//SUITES
			
			$suites_11_1_self_assessor_1 = $row['suites_11_1_1_A'] + 0;
			$suites_11_2_self_assessor_1 = $row['suites_11_2_1_A'] + $row['suites_11_2_1_B'] + $row['suites_11_2_1_C'];
			$suites_11_3_self_assessor_1 = $row['suites_11_3_1_A_a'] + $row['suites_11_3_1_A_b'] + $row['suites_11_3_1_A_c'] + $row['suites_11_3_1_A_d'];
			$suites_11_4_self_assessor_1 = $row['suites_11_4_1_A'] + $row['suites_11_4_1_B'];
			$suites_11_5_self_assessor_1 = $row['suites_11_5_1_A_a'] + $row['suites_11_5_1_A_b'] + $row['suites_11_5_1_B_a'] + $row['suites_11_5_1_B_b'] + $row['suites_11_5_1_B_c'] + $row['suites_11_5_1_B_d'] + $row['suites_11_5_1_B_e'] + $row['suites_11_5_1_B_f'] + $row['suites_11_5_1_B_g'] + $row['suites_11_5_1_B_h'] + $row['suites_11_5_1_B_i'] + $row['suites_11_5_1_B_j'] + $row['suites_11_5_1_B_k'] + $row['suites_11_5_1_B_l'] + $row['suites_11_5_1_B_m'] + $row['suites_11_5_1_B_n'] + $row['suites_11_5_1_B_o'] + $row['suites_11_5_1_B_p'] + $row['suites_11_5_1_B_q'] + $row['suites_11_5_1_B_r'] + $row['suites_11_5_1_C'] + $row['suites_11_5_1_D'] + $row['suites_11_5_1_E'] + $row['suites_11_5_1_F'] + $row['suites_11_5_1_G'];
			$suites_11_6_self_assessor_1 = $row['suites_11_6_1_A'] + $row['suites_11_6_1_B'] + $row['suites_11_6_1_C'] + $row['suites_11_6_1_D'] + $row['suites_11_6_1_E'];
			$suites_11_7_self_assessor_1 = $row['suites_11_7_1_A'] + $row['suites_11_7_1_B_a'] + $row['suites_11_7_1_B_b'] + $row['suites_11_7_1_B_c'] + $row['suites_11_7_1_B_d'] + $row['suites_11_7_1_C'] + $row['suites_11_7_1_D'];
			$suites_11_8_self_assessor_1 = $row['suites_11_8_1_A'] + $row['suites_11_8_1_B_a'] + $row['suites_11_8_1_B_b'] + $row['suites_11_8_1_B_c'] + $row['suites_11_8_1_B_d'] + $row['suites_11_8_1_B_e'] + $row['suites_11_8_1_B_f'] + $row['suites_11_8_1_B_g'] + $row['suites_11_8_1_B_h'] + $row['suites_11_8_1_B_i'] + $row['suites_11_8_1_C_a'] + $row['suites_11_8_1_C_b'] + $row['suites_11_8_1_D'];
			$suites_11_9_self_assessor_1 = $row['suites_11_9_1_A'] + $row['suites_11_9_1_B'];
			$suites_11_10_self_assessor_1 = $row['suites_11_10_1_A_a'] + $row['suites_11_10_1_A_b'] + $row['suites_11_10_1_A_c'] + $row['suites_11_10_1_A_d'] + $row['suites_11_10_1_A_e'] + $row['suites_11_10_1_B_a'] + $row['suites_11_10_1_B_b'] + $row['suites_11_10_1_B_c'] + $row['suites_11_10_1_B_d'] + $row['suites_11_10_1_C'];
			$suites_11_11_self_assessor_1 = $row['suites_11_11_1_A'] + $row['suites_11_11_1_B'] + $row['suites_11_11_1_C_a'] + $row['suites_11_11_1_C_b'] + $row['suites_11_11_1_C_c'] + $row['suites_11_11_1_D'] + $row['suites_11_11_1_E'] + $row['suites_11_11_1_F'] + $row['suites_11_11_1_G'];
			$suites_11_12_self_assessor_1 = $row['suites_11_12_1_A_a'] + $row['suites_11_12_1_A_b'] + $row['suites_11_12_1_A_c'] + $row['suites_11_12_1_A_d'] + $row['suites_11_12_1_A_e'] + $row['suites_11_12_1_A_f'] + $row['suites_11_12_1_A_g'] + $row['suites_11_12_1_A_h'] + $row['suites_11_12_1_A_i'] + $row['suites_11_12_1_A_j'] + $row['suites_11_12_1_A_k'] + $row['suites_11_12_1_A_l'] + $row['suites_11_12_1_A_m'] + $row['suites_11_12_1_A_n'] + $row['suites_11_12_1_A_o'] + $row['suites_11_12_1_A_p'] + $row['suites_11_12_1_A_q'] + $row['suites_11_12_1_A_r'] + $row['suites_11_12_1_A_s'] + $row['suites_11_12_1_A_t'] + $row['suites_11_12_1_A_u'] + $row['suites_11_12_1_A_v'] + $row['suites_11_12_1_B'] + $row['suites_11_12_1_C'];
			$suites_11_13_self_assessor_1 = $row['suites_11_13_1_A'] + $row['suites_11_13_1_B'];
			$suites_11_14_self_assessor_1 = $row['suites_11_14_1_A'] + $row['suites_11_14_1_B_a'] + $row['suites_11_14_1_B_b'] + $row['suites_11_14_1_B_c'] + $row['suites_11_14_1_C'];
			$suites_11_15_self_assessor_1 = $row['suites_11_15_1_A'] + 0;
			$suites_11_16_self_assessor_1 = $row['suites_11_16_1_A_a'] + $row['suites_11_16_1_A_b'] + $row['suites_11_16_1_A_c'] + $row['suites_11_16_1_A_d'] + $row['suites_11_16_1_A_e'] + $row['suites_11_16_1_A_f'] + $row['suites_11_16_1_A_g'] + $row['suites_11_16_1_A_h'] + $row['suites_11_16_1_A_i'] + $row['suites_11_16_1_A_j'] + $row['suites_11_16_1_A_k'] + $row['suites_11_16_1_A_l'] + $row['suites_11_16_1_A_m'] + $row['suites_11_16_1_A_n'] + $row['suites_11_16_1_A_o'] + $row['suites_11_16_1_A_p'] + $row['suites_11_16_1_A_q'] + $row['suites_11_16_1_A_r'] + $row['suites_11_16_1_A_s'] + $row['suites_11_16_1_A_t'] + $row['suites_11_16_1_A_u'] + $row['suites_11_16_1_A_v'] + $row['suites_11_16_1_A_w'] + $row['suites_11_16_1_A_x'] + $row['suites_11_16_1_B'] + $row['suites_11_16_1_C'] + $row['suites_11_16_1_D'] + $row['suites_11_16_1_E'] + $row['suites_11_16_1_F'];
			$suites_11_17_self_assessor_1 = $row['suites_11_17_1_A_a'] + $row['suites_11_17_1_A_b'] + $row['suites_11_17_1_A_c'] + $row['suites_11_17_1_A_d'] + $row['suites_11_17_1_A_e'] + $row['suites_11_17_1_A_f'] + $row['suites_11_17_1_A_g'] + $row['suites_11_17_1_A_h'] + $row['suites_11_17_1_A_i'] + $row['suites_11_17_1_A_j'] + $row['suites_11_17_1_A_k'] + $row['suites_11_17_1_A_l'] + $row['suites_11_17_1_B'] + $row['suites_11_17_1_C'];
			$suites_11_18_self_assessor_1 = $row['suites_11_18_1_A'] + $row['suites_11_18_1_B'] + $row['suites_11_18_1_C'] + $row['suites_11_18_1_D'] + $row['suites_11_18_1_E'] + $row['suites_11_18_1_F'];
			$suites_11_19_self_assessor_1 = $row['suites_11_19_1_A_a'] + $row['suites_11_19_1_A_b'] + $row['suites_11_19_1_A_c'] + $row['suites_11_19_1_A_d'] + $row['suites_11_19_1_A_e'] + $row['suites_11_19_1_B'] + $row['suites_11_19_1_C'] + $row['suites_11_19_1_D'] + $row['suites_11_19_1_E'] + $row['suites_11_19_1_F'];
			$suites_11_20_self_assessor_1 = $row['suites_11_20_1_A'] + $row['suites_11_20_1_B'] + $row['suites_11_20_1_C'];
			$suites_11_21_self_assessor_1 = $row['suites_11_21_1_A'] + $row['suites_11_21_1_B'] + $row['suites_11_21_1_C'];
			$output['suites_11_1_self_assessor_1'] = $suites_11_1_self_assessor_1;
			$output['suites_11_2_self_assessor_1'] = $suites_11_2_self_assessor_1;
			$output['suites_11_3_self_assessor_1'] = $suites_11_3_self_assessor_1;
			$output['suites_11_4_self_assessor_1'] = $suites_11_4_self_assessor_1;
			$output['suites_11_5_self_assessor_1'] = $suites_11_5_self_assessor_1;
			$output['suites_11_6_self_assessor_1'] = $suites_11_6_self_assessor_1;
			$output['suites_11_7_self_assessor_1'] = $suites_11_7_self_assessor_1;
			$output['suites_11_8_self_assessor_1'] = $suites_11_8_self_assessor_1;
			$output['suites_11_9_self_assessor_1'] = $suites_11_9_self_assessor_1;
			$output['suites_11_10_self_assessor_1'] = $suites_11_10_self_assessor_1;
			$output['suites_11_11_self_assessor_1'] = $suites_11_11_self_assessor_1;
			$output['suites_11_12_self_assessor_1'] = $suites_11_12_self_assessor_1;
			$output['suites_11_13_self_assessor_1'] = $suites_11_13_self_assessor_1;
			$output['suites_11_14_self_assessor_1'] = $suites_11_14_self_assessor_1;
			$output['suites_11_15_self_assessor_1'] = $suites_11_15_self_assessor_1;
			$output['suites_11_16_self_assessor_1'] = $suites_11_16_self_assessor_1;
			$output['suites_11_17_self_assessor_1'] = $suites_11_17_self_assessor_1;
			$output['suites_11_18_self_assessor_1'] = $suites_11_18_self_assessor_1;
			$output['suites_11_19_self_assessor_1'] = $suites_11_19_self_assessor_1;
			$output['suites_11_20_self_assessor_1'] = $suites_11_20_self_assessor_1;
			$output['suites_11_21_self_assessor_1'] = $suites_11_21_self_assessor_1;
			$output['suites_11_0_self_assessor_1'] = $suites_11_1_self_assessor_1 + $suites_11_2_self_assessor_1 + $suites_11_3_self_assessor_1 + $suites_11_4_self_assessor_1 + $suites_11_5_self_assessor_1 + $suites_11_6_self_assessor_1 + $suites_11_7_self_assessor_1 + $suites_11_8_self_assessor_1 + $suites_11_9_self_assessor_1 + $suites_11_10_self_assessor_1 + $suites_11_11_self_assessor_1 + $suites_11_12_self_assessor_1 + $suites_11_13_self_assessor_1 + $suites_11_14_self_assessor_1 + $suites_11_15_self_assessor_1 + $suites_11_16_self_assessor_1 + $suites_11_17_self_assessor_1 + $suites_11_18_self_assessor_1 + $suites_11_19_self_assessor_1 + $suites_11_20_self_assessor_1 + $suites_11_21_self_assessor_1;


			//HYGIENE AND SANITATION
			
			$hygiene_and_sanitation_12_1_self_assessor_1 = $row['hygiene_and_sanitation_12_1_1_A']+$row['hygiene_and_sanitation_12_1_1_B']+$row['hygiene_and_sanitation_12_1_1_C']+$row['hygiene_and_sanitation_12_1_1_D_a']+$row['hygiene_and_sanitation_12_1_1_D_b']+$row['hygiene_and_sanitation_12_1_1_D_c']+$row['hygiene_and_sanitation_12_1_1_D_d']+$row['hygiene_and_sanitation_12_1_1_D_e']+$row['hygiene_and_sanitation_12_1_1_D_f']+$row['hygiene_and_sanitation_12_1_1_D_g']+$row['hygiene_and_sanitation_12_1_1_D_h']+$row['hygiene_and_sanitation_12_1_1_E']+$row['hygiene_and_sanitation_12_1_1_F']+$row['hygiene_and_sanitation_12_1_1_G']+$row['hygiene_and_sanitation_12_1_1_H']+$row['hygiene_and_sanitation_12_1_1_I_a']+$row['hygiene_and_sanitation_12_1_1_I_b']+$row['hygiene_and_sanitation_12_1_1_I_c']+$row['hygiene_and_sanitation_12_1_1_I_d']+$row['hygiene_and_sanitation_12_1_1_I_e']+$row['hygiene_and_sanitation_12_1_1_J']+$row['hygiene_and_sanitation_12_1_1_K']+$row['hygiene_and_sanitation_12_1_1_L'];
			$hygiene_and_sanitation_12_2_self_assessor_1 = $row['hygiene_and_sanitation_12_2_1_A']+$row['hygiene_and_sanitation_12_2_1_B']+$row['hygiene_and_sanitation_12_2_1_C']+$row['hygiene_and_sanitation_12_2_1_D']+$row['hygiene_and_sanitation_12_2_1_E_a']+$row['hygiene_and_sanitation_12_2_1_E_b']+$row['hygiene_and_sanitation_12_2_1_E_c']+$row['hygiene_and_sanitation_12_2_1_E_d']+$row['hygiene_and_sanitation_12_2_1_E_e']+$row['hygiene_and_sanitation_12_2_1_E_f']+$row['hygiene_and_sanitation_12_2_1_E_g']+$row['hygiene_and_sanitation_12_2_1_E_h']+$row['hygiene_and_sanitation_12_2_1_E_i']+$row['hygiene_and_sanitation_12_2_1_F']+$row['hygiene_and_sanitation_12_2_1_G']+$row['hygiene_and_sanitation_12_2_1_H_a']+$row['hygiene_and_sanitation_12_2_1_H_b']+$row['hygiene_and_sanitation_12_2_1_H_c']+$row['hygiene_and_sanitation_12_2_1_H_d']+$row['hygiene_and_sanitation_12_2_1_I']+$row['hygiene_and_sanitation_12_2_1_J'];
			$hygiene_and_sanitation_12_3_self_assessor_1 = $row['hygiene_and_sanitation_12_3_1_A']+$row['hygiene_and_sanitation_12_3_1_B']+$row['hygiene_and_sanitation_12_3_1_C']+$row['hygiene_and_sanitation_12_3_1_D']+$row['hygiene_and_sanitation_12_3_1_E']+$row['hygiene_and_sanitation_12_3_1_F'];
			$hygiene_and_sanitation_12_4_self_assessor_1 = $row['hygiene_and_sanitation_12_4_1_A']+$row['hygiene_and_sanitation_12_4_1_B']+$row['hygiene_and_sanitation_12_4_1_C'];
			$hygiene_and_sanitation_12_5_self_assessor_1 = $row['hygiene_and_sanitation_12_5_1_A']+$row['hygiene_and_sanitation_12_5_1_B'];
			$hygiene_and_sanitation_12_6_self_assessor_1 = $row['hygiene_and_sanitation_12_6_1_A']+$row['hygiene_and_sanitation_12_6_1_B_a']+$row['hygiene_and_sanitation_12_6_1_B_b']+$row['hygiene_and_sanitation_12_6_1_C'];
			$hygiene_and_sanitation_12_7_self_assessor_1 = $row['hygiene_and_sanitation_12_7_1_A']+$row['hygiene_and_sanitation_12_7_1_B'];
			$output['hygiene_and_sanitation_12_1_self_assessor_1'] = $hygiene_and_sanitation_12_1_self_assessor_1;
			$output['hygiene_and_sanitation_12_2_self_assessor_1'] = $hygiene_and_sanitation_12_2_self_assessor_1;
			$output['hygiene_and_sanitation_12_3_self_assessor_1'] = $hygiene_and_sanitation_12_3_self_assessor_1;
			$output['hygiene_and_sanitation_12_4_self_assessor_1'] = $hygiene_and_sanitation_12_4_self_assessor_1;
			$output['hygiene_and_sanitation_12_5_self_assessor_1'] = $hygiene_and_sanitation_12_5_self_assessor_1;
			$output['hygiene_and_sanitation_12_6_self_assessor_1'] = $hygiene_and_sanitation_12_6_self_assessor_1;
			$output['hygiene_and_sanitation_12_7_self_assessor_1'] = $hygiene_and_sanitation_12_7_self_assessor_1;
			$output['hygiene_and_sanitation_12_0_self_assessor_1'] = $hygiene_and_sanitation_12_1_self_assessor_1 + $hygiene_and_sanitation_12_2_self_assessor_1 + $hygiene_and_sanitation_12_3_self_assessor_1 + $hygiene_and_sanitation_12_4_self_assessor_1 + $hygiene_and_sanitation_12_5_self_assessor_1 + $hygiene_and_sanitation_12_6_self_assessor_1 + $hygiene_and_sanitation_12_7_self_assessor_1;

			//SAFETY AND SECURITY
			
			$safety_and_security_13_1_self_assessor_1 = $row['safety_and_security_13_1_1_A'] + $row['safety_and_security_13_1_1_B'] + $row['safety_and_security_13_1_1_C'] + $row['safety_and_security_13_1_1_D'] + $row['safety_and_security_13_1_1_E'] + $row['safety_and_security_13_1_1_F_a'] + $row['safety_and_security_13_1_1_F_b'] + $row['safety_and_security_13_1_1_F_c'] + $row['safety_and_security_13_1_1_F_d'] + $row['safety_and_security_13_1_1_F_e'] + $row['safety_and_security_13_1_1_F_f'] + $row['safety_and_security_13_1_1_F_g'] + $row['safety_and_security_13_1_1_G'] + $row['safety_and_security_13_1_1_H'] + $row['safety_and_security_13_1_1_I'] + $row['safety_and_security_13_1_1_J'];
			$safety_and_security_13_2_self_assessor_1 = $row['safety_and_security_13_2_1_A'] + $row['safety_and_security_13_2_1_B'];
			$safety_and_security_13_3_self_assessor_1 = $row['safety_and_security_13_3_1_A'] + $row['safety_and_security_13_3_1_B'] + $row['safety_and_security_13_3_1_C'] + $row['safety_and_security_13_3_1_D'] + $row['safety_and_security_13_3_1_E'] + $row['safety_and_security_13_3_1_F'] + $row['safety_and_security_13_3_1_G'] + $row['safety_and_security_13_3_1_H'];
			$safety_and_security_13_4_self_assessor_1 = $row['safety_and_security_13_4_1_A'] + $row['safety_and_security_13_4_1_B'] + $row['safety_and_security_13_4_1_C'] + $row['safety_and_security_13_4_1_D'] + $row['safety_and_security_13_4_1_E'];
			$safety_and_security_13_5_self_assessor_1 = $row['safety_and_security_13_5_1_A'] + $row['safety_and_security_13_5_1_B'] + $row['safety_and_security_13_5_1_C'] + $row['safety_and_security_13_5_1_D'] + $row['safety_and_security_13_5_1_E'];
			$output['safety_and_security_13_1_self_assessor_1'] = $safety_and_security_13_1_self_assessor_1;
			$output['safety_and_security_13_2_self_assessor_1'] = $safety_and_security_13_2_self_assessor_1;
			$output['safety_and_security_13_3_self_assessor_1'] = $safety_and_security_13_3_self_assessor_1;
			$output['safety_and_security_13_4_self_assessor_1'] = $safety_and_security_13_4_self_assessor_1;
			$output['safety_and_security_13_5_self_assessor_1'] = $safety_and_security_13_5_self_assessor_1;
			$output['safety_and_security_13_0_self_assessor_1'] = $safety_and_security_13_1_self_assessor_1 + $safety_and_security_13_2_self_assessor_1 + $safety_and_security_13_3_self_assessor_1 + $safety_and_security_13_4_self_assessor_1 + $safety_and_security_13_5_self_assessor_1;

			//SUNDRY SERVICES
			
			$sundry_services_14_1_self_assessor_1 = $row['sundry_services_14_1_1_A'] + $row['sundry_services_14_1_1_B'] + $row['sundry_services_14_1_1_C'];
			$sundry_services_14_2_self_assessor_1 = $row['sundry_services_14_2_1_A'] + 0;
			$sundry_services_14_3_self_assessor_1 = $row['sundry_services_14_3_1_A'] + 0;
			$sundry_services_14_4_self_assessor_1 = $row['sundry_services_14_4_1_A'] + 0;
			$sundry_services_14_5_self_assessor_1 = $row['sundry_services_14_5_1_A'] + $row['sundry_services_14_5_1_B'] + $row['sundry_services_14_5_1_C'] + $row['sundry_services_14_5_1_D'];
			$output['sundry_services_14_1_self_assessor_1'] = $sundry_services_14_1_self_assessor_1;
			$output['sundry_services_14_2_self_assessor_1'] = $sundry_services_14_2_self_assessor_1;
			$output['sundry_services_14_3_self_assessor_1'] = $sundry_services_14_3_self_assessor_1;
			$output['sundry_services_14_4_self_assessor_1'] = $sundry_services_14_4_self_assessor_1;
			$output['sundry_services_14_5_self_assessor_1'] = $sundry_services_14_5_self_assessor_1;
			$output['sundry_services_14_0_self_assessor_1'] = $sundry_services_14_1_self_assessor_1 + $sundry_services_14_2_self_assessor_1 + $sundry_services_14_3_self_assessor_1 + $sundry_services_14_4_self_assessor_1 + $sundry_services_14_5_self_assessor_1;
			
			//HUMAN RESOURCES

			$human_resources_15_1_self_assessor_1 = $row['human_resources_15_1_1_A'] + $row['human_resources_15_1_1_B_a'] + $row['human_resources_15_1_1_B_b'] + $row['human_resources_15_1_1_B_c'] + $row['human_resources_15_1_1_B_d'] + $row['human_resources_15_1_1_B_e'] + $row['human_resources_15_1_1_B_f'];
			$human_resources_15_2_self_assessor_1 = $row['human_resources_15_2_1_A'] + $row['human_resources_15_2_1_B'];
			$human_resources_15_3_self_assessor_1 = $row['human_resources_15_3_1_A'] + $row['human_resources_15_3_1_B'];
			$human_resources_15_4_self_assessor_1 = $row['human_resources_15_4_1_A'] + $row['human_resources_15_4_1_B'] + $row['human_resources_15_4_1_C'];
			$human_resources_15_5_self_assessor_1 = $row['human_resources_15_5_1_A_a'] + $row['human_resources_15_5_1_A_b'] + $row['human_resources_15_5_1_A_c'] + $row['human_resources_15_5_1_B_a'] + $row['human_resources_15_5_1_B_b'] + $row['human_resources_15_5_1_B_c'] + $row['human_resources_15_5_1_C_a'] + $row['human_resources_15_5_1_C_b'] + $row['human_resources_15_5_1_C_c'];
			$human_resources_15_6_self_assessor_1 = $row['human_resources_15_6_1_A'] + 0;
			$human_resources_15_7_self_assessor_1 = $row['human_resources_15_7_1_A'] + $row['human_resources_15_7_1_B'] + $row['human_resources_15_7_1_C'] + $row['human_resources_15_7_1_D'];
			$human_resources_15_8_self_assessor_1 = $row['human_resources_15_8_1_A'] + $row['human_resources_15_8_1_B'] + $row['human_resources_15_8_1_C'];
			$human_resources_15_9_self_assessor_1 = $row['human_resources_15_9_1_A'] + $row['human_resources_15_9_1_B'] + $row['human_resources_15_9_1_C'] + $row['human_resources_15_9_1_D'] + $row['human_resources_15_9_1_E'] + $row['human_resources_15_9_1_F_a'] + $row['human_resources_15_9_1_F_b'] + $row['human_resources_15_9_1_F_c'];
			$output['human_resources_15_1_self_assessor_1'] = $human_resources_15_1_self_assessor_1;
			$output['human_resources_15_2_self_assessor_1'] = $human_resources_15_2_self_assessor_1;
			$output['human_resources_15_3_self_assessor_1'] = $human_resources_15_3_self_assessor_1;
			$output['human_resources_15_4_self_assessor_1'] = $human_resources_15_4_self_assessor_1;
			$output['human_resources_15_5_self_assessor_1'] = $human_resources_15_5_self_assessor_1;
			$output['human_resources_15_6_self_assessor_1'] = $human_resources_15_6_self_assessor_1;
			$output['human_resources_15_7_self_assessor_1'] = $human_resources_15_7_self_assessor_1;
			$output['human_resources_15_8_self_assessor_1'] = $human_resources_15_8_self_assessor_1;
			$output['human_resources_15_9_self_assessor_1'] = $human_resources_15_9_self_assessor_1;
			$output['human_resources_15_0_self_assessor_1'] = $human_resources_15_1_self_assessor_1 + $human_resources_15_2_self_assessor_1 + $human_resources_15_3_self_assessor_1 + $human_resources_15_4_self_assessor_1 + $human_resources_15_5_self_assessor_1 + $human_resources_15_6_self_assessor_1 + $human_resources_15_7_self_assessor_1 + $human_resources_15_8_self_assessor_1 + $human_resources_15_9_self_assessor_1;
			
			//GENERAL
			
			$general_16_1_self_assessor_1 = $row['general_16_1_1_A'] + 0;
			$general_16_2_self_assessor_1 = $row['general_16_2_1_A'] + $row['general_16_2_1_B_a'] + $row['general_16_2_1_B_b'] + $row['general_16_2_1_B_c'] + $row['general_16_2_1_B_d'] + $row['general_16_2_1_B_e'] + $row['general_16_2_1_C'];
			$general_16_3_self_assessor_1 = $row['general_16_3_1_A_a'] + $row['general_16_3_1_A_b'] + $row['general_16_3_1_A_c'] + $row['general_16_3_1_B'] + $row['general_16_3_1_C_a'] + $row['general_16_3_1_C_b'] + $row['general_16_3_1_C_c'] + $row['general_16_3_1_C_d'] + $row['general_16_3_1_C_e'] + $row['general_16_3_1_D_a'] + $row['general_16_3_1_D_b'] + $row['general_16_3_1_E'];
			$general_16_4_self_assessor_1 = $row['general_16_4_1_A'] + $row['general_16_4_1_B'];
			$general_16_5_self_assessor_1 = $row['general_16_5_1_A'] + $row['general_16_5_1_B'];
			$general_16_6_self_assessor_1 = $row['general_16_6_1_A'] + $row['general_16_6_1_B'];
			$general_16_7_self_assessor_1 = $row['general_16_7_1_A'] + $row['general_16_7_1_B'];
			$general_16_8_self_assessor_1 = $row['general_16_8_1_A'] + $row['general_16_8_1_B'] + $row['general_16_8_1_C'];
			$general_16_9_self_assessor_1 = $row['general_16_9_1_A'] + $row['general_16_9_1_B'] + $row['general_16_9_1_C'] + $row['general_16_9_1_D'];
			$general_16_10_self_assessor_1 = $row['general_16_10_1_A'] + $row['general_16_10_1_B'] + $row['general_16_10_1_C'];
			$general_16_11_self_assessor_1 = $row['general_16_11_1_A'] + $row['general_16_11_1_B'] + $row['general_16_11_1_C'] + $row['general_16_11_1_D_a'] + $row['general_16_11_1_D_b'] + $row['general_16_11_1_D_c'] + $row['general_16_11_1_D_d'] + $row['general_16_11_1_D_e'] + $row['general_16_11_1_E'] + $row['general_16_11_1_F'] + $row['general_16_11_1_G'] + $row['general_16_11_1_H'];
			$general_16_12_self_assessor_1 = $row['general_16_12_1_A'] + 0;
			$general_16_13_self_assessor_1 = $row['general_16_13_1_A'] + $row['general_16_13_1_B_a'] + $row['general_16_13_1_B_b'] + $row['general_16_13_1_B_c'] + $row['general_16_13_1_B_d'] + $row['general_16_13_1_B_e'] + $row['general_16_13_1_C'] + $row['general_16_13_1_D'] + $row['general_16_13_1_E'];
			$output['general_16_1_self_assessor_1'] = $general_16_1_self_assessor_1;
			$output['general_16_2_self_assessor_1'] = $general_16_1_self_assessor_1;
			$output['general_16_3_self_assessor_1'] = $general_16_1_self_assessor_1;
			$output['general_16_4_self_assessor_1'] = $general_16_1_self_assessor_1;
			$output['general_16_5_self_assessor_1'] = $general_16_1_self_assessor_1;
			$output['general_16_6_self_assessor_1'] = $general_16_6_self_assessor_1;
			$output['general_16_7_self_assessor_1'] = $general_16_7_self_assessor_1;
			$output['general_16_8_self_assessor_1'] = $general_16_8_self_assessor_1;
			$output['general_16_9_self_assessor_1'] = $general_16_9_self_assessor_1;
			$output['general_16_10_self_assessor_1'] = $general_16_10_self_assessor_1;
			$output['general_16_11_self_assessor_1'] = $general_16_11_self_assessor_1;
			$output['general_16_12_self_assessor_1'] = $general_16_12_self_assessor_1;
			$output['general_16_13_self_assessor_1'] = $general_16_13_self_assessor_1;
			$output['general_16_0_self_assessor_1'] = $general_16_1_self_assessor_1 + $general_16_2_self_assessor_1 + $general_16_3_self_assessor_1 + $general_16_4_self_assessor_1 + $general_16_5_self_assessor_1 + $general_16_6_self_assessor_1 + $general_16_7_self_assessor_1 + $general_16_8_self_assessor_1 + $general_16_9_self_assessor_1 + $general_16_10_self_assessor_1 + $general_16_11_self_assessor_1 + $general_16_12_self_assessor_1 + $general_16_13_self_assessor_1;
		 
		}
	}
	
	//// SELF_ASSESSOR_2 ////	
	$query = "SELECT * FROM afcg_assessment_villa WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_2'))"; 
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
		 
		 	//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lobby_lounge_other_public_areas_4_1_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_1_1_A'] + $row['lobby_lounge_other_public_areas_4_1_1_B'] + $row['lobby_lounge_other_public_areas_4_1_1_C'] + $row['lobby_lounge_other_public_areas_4_1_1_D'] + $row['lobby_lounge_other_public_areas_4_1_1_E'];
			$lobby_lounge_other_public_areas_4_2_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_2_1_A'] + 0;
			$lobby_lounge_other_public_areas_4_3_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_3_1_A'] + $row['lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lobby_lounge_other_public_areas_4_3_1_C'];
			$lobby_lounge_other_public_areas_4_4_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_4_1_A'] + $row['lobby_lounge_other_public_areas_4_4_1_B'] + $row['lobby_lounge_other_public_areas_4_4_1_C'] + $row['lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lobby_lounge_other_public_areas_4_4_1_E'] + $row['lobby_lounge_other_public_areas_4_4_1_F'];
			$lobby_lounge_other_public_areas_4_5_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_5_1_A'] + $row['lobby_lounge_other_public_areas_4_5_1_B'];
			$lobby_lounge_other_public_areas_4_6_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_6_1_A'] + $row['lobby_lounge_other_public_areas_4_6_1_B'] + $row['lobby_lounge_other_public_areas_4_6_1_C'] + $row['lobby_lounge_other_public_areas_4_6_1_D'] + $row['lobby_lounge_other_public_areas_4_6_1_E'] + $row['lobby_lounge_other_public_areas_4_6_1_F'];
			$lobby_lounge_other_public_areas_4_7_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_7_1_A'] + $row['lobby_lounge_other_public_areas_4_7_1_B'] + $row['lobby_lounge_other_public_areas_4_7_1_C'];
			$lobby_lounge_other_public_areas_4_8_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_8_1_A'] + $row['lobby_lounge_other_public_areas_4_8_1_B_a'] + $row['lobby_lounge_other_public_areas_4_8_1_B_b'] + $row['lobby_lounge_other_public_areas_4_8_1_B_c'] + $row['lobby_lounge_other_public_areas_4_8_1_B_d'] + $row['lobby_lounge_other_public_areas_4_8_1_B_e'] + $row['lobby_lounge_other_public_areas_4_8_1_B_f'] + $row['lobby_lounge_other_public_areas_4_8_1_C'];
			$lobby_lounge_other_public_areas_4_9_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_9_1_A'] + $row['lobby_lounge_other_public_areas_4_9_1_B'] + $row['lobby_lounge_other_public_areas_4_9_1_C'] + $row['lobby_lounge_other_public_areas_4_9_1_D'];
			$lobby_lounge_other_public_areas_4_10_self_assessor_2 = $row['lobby_lounge_other_public_areas_4_10_1_A'] + 0;
			$output['lobby_lounge_other_public_areas_4_1_self_assessor_2'] = $lobby_lounge_other_public_areas_4_1_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_2_self_assessor_2'] = $lobby_lounge_other_public_areas_4_2_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_3_self_assessor_2'] = $lobby_lounge_other_public_areas_4_3_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_4_self_assessor_2'] = $lobby_lounge_other_public_areas_4_4_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_5_self_assessor_2'] = $lobby_lounge_other_public_areas_4_5_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_6_self_assessor_2'] = $lobby_lounge_other_public_areas_4_6_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_7_self_assessor_2'] = $lobby_lounge_other_public_areas_4_7_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_8_self_assessor_2'] = $lobby_lounge_other_public_areas_4_8_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_9_self_assessor_2'] = $lobby_lounge_other_public_areas_4_9_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_10_self_assessor_2'] = $lobby_lounge_other_public_areas_4_10_self_assessor_2;
			$output['lobby_lounge_other_public_areas_4_0_self_assessor_2'] = $lobby_lounge_other_public_areas_4_1_self_assessor_2 + $lobby_lounge_other_public_areas_4_2_self_assessor_2 + $lobby_lounge_other_public_areas_4_3_self_assessor_2 + $lobby_lounge_other_public_areas_4_4_self_assessor_2 + $lobby_lounge_other_public_areas_4_5_self_assessor_2 + $lobby_lounge_other_public_areas_4_6_self_assessor_2 + $lobby_lounge_other_public_areas_4_7_self_assessor_2 + $lobby_lounge_other_public_areas_4_8_self_assessor_2 + $lobby_lounge_other_public_areas_4_9_self_assessor_2 + $lobby_lounge_other_public_areas_4_10_self_assessor_2;
			
			//FUNCTION ROOMS 5.0
			$function_rooms_5_1_self_assessor_2 = $row['function_rooms_5_1_1_A'] + $row['function_rooms_5_1_1_B'] + $row['function_rooms_5_1_1_C'] + $row['function_rooms_5_1_1_D'] + $row['function_rooms_5_1_1_E'] + $row['function_rooms_5_1_1_F'] + $row['function_rooms_5_1_1_G'] + $row['function_rooms_5_1_1_H'] + $row['function_rooms_5_1_1_I'] + $row['function_rooms_5_1_1_J'] + $row['function_rooms_5_1_1_K'] + $row['function_rooms_5_1_1_L'] + $row['function_rooms_5_1_1_M'];
			$output['function_rooms_5_1_self_assessor_2'] = $function_rooms_5_1_self_assessor_2;
			$output['function_rooms_5_0_self_assessor_2'] = $function_rooms_5_1_self_assessor_2;
			
			//RESTAURANTS
			$restaurants_6_1_self_assessor_2 = $row['restaurants_6_1_1_A'] + $row['restaurants_6_1_1_B'] + $row['restaurants_6_1_1_C'] + $row['restaurants_6_1_1_D'];
			$restaurants_6_2_self_assessor_2 = $row['restaurants_6_2_1_A'] + $row['restaurants_6_2_1_B'] + $row['restaurants_6_2_1_C'] + $row['restaurants_6_2_1_D'] + $row['restaurants_6_2_1_E'] + $row['restaurants_6_2_1_F'] + $row['restaurants_6_2_1_G'] + $row['restaurants_6_2_1_H'] + $row['restaurants_6_2_1_I'];
			$restaurants_6_3_self_assessor_2 = $row['restaurants_6_3_1_A'] + $row['restaurants_6_3_1_B'] + $row['restaurants_6_3_1_C'];
			$restaurants_6_4_self_assessor_2 = $row['restaurants_6_4_1_A'] + $row['restaurants_6_4_1_B'] + $row['restaurants_6_4_1_C'] + $row['restaurants_6_4_1_D'] + $row['restaurants_6_4_1_E'] + $row['restaurants_6_4_1_F'] + $row['restaurants_6_4_1_G'];
			$restaurants_6_5_self_assessor_2 = $row['restaurants_6_5_1_A'] + $row['restaurants_6_5_1_B'] + $row['restaurants_6_5_1_C'] + $row['restaurants_6_5_1_D'] + $row['restaurants_6_5_1_E_a'] + $row['restaurants_6_5_1_E_b'] + $row['restaurants_6_5_1_E_c'] + $row['restaurants_6_5_1_E_d'] + $row['restaurants_6_5_1_F'] + $row['restaurants_6_5_1_G_a'] + $row['restaurants_6_5_1_G_b'] + $row['restaurants_6_5_1_G_c'] + $row['restaurants_6_5_1_H'] + $row['restaurants_6_5_1_I'];
			$restaurants_6_6_self_assessor_2 = $row['restaurants_6_6_1_A'] + $row['restaurants_6_6_1_B'] + $row['restaurants_6_6_1_C'] + $row['restaurants_6_6_1_D'];
			$restaurants_6_7_self_assessor_2 = $row['restaurants_6_7_1_A'] + $row['restaurants_6_7_1_B'] + $row['restaurants_6_7_1_C'];
			$restaurants_6_8_self_assessor_2 = $row['restaurants_6_8_1_A'] + $row['restaurants_6_8_1_B'];
			
			$output['restaurants_6_1_self_assessor_2'] = $restaurants_6_1_self_assessor_2;
			$output['restaurants_6_2_self_assessor_2'] = $restaurants_6_2_self_assessor_2;
			$output['restaurants_6_3_self_assessor_2'] = $restaurants_6_3_self_assessor_2;
			$output['restaurants_6_4_self_assessor_2'] = $restaurants_6_4_self_assessor_2;
			$output['restaurants_6_5_self_assessor_2'] = $restaurants_6_5_self_assessor_2;
			$output['restaurants_6_6_self_assessor_2'] = $restaurants_6_6_self_assessor_2;
			$output['restaurants_6_7_self_assessor_2'] = $restaurants_6_7_self_assessor_2;
			$output['restaurants_6_8_self_assessor_2'] = $restaurants_6_8_self_assessor_2;
			$output['restaurants_6_0_self_assessor_2'] = $restaurants_6_1_self_assessor_2 + $restaurants_6_2_self_assessor_2 + $restaurants_6_3_self_assessor_2 + $restaurants_6_4_self_assessor_2 + $restaurants_6_5_self_assessor_2 + $restaurants_6_6_self_assessor_2 + $restaurants_6_7_self_assessor_2 + $restaurants_6_8_self_assessor_2;
			//BARS
			$bar_7_1_self_assessor_2 = $row['bar_7_1_1_A'] + $row['bar_7_1_1_B_a'] + $row['bar_7_1_1_B_b'] + $row['bar_7_1_1_B_c'] + $row['bar_7_1_1_C'] + $row['bar_7_1_1_D_a'] + $row['bar_7_1_1_D_b'] + $row['bar_7_1_1_D_c'] + $row['bar_7_1_1_E'] + $row['bar_7_1_1_F'] + $row['bar_7_1_1_G'];
			$bar_7_2_self_assessor_2 = $row['bar_7_2_1_A'] + $row['bar_7_2_1_B'] + $row['bar_7_2_1_C'] + $row['bar_7_2_1_D'] + $row['bar_7_2_1_E'] + $row['bar_7_2_1_F'] + $row['bar_7_2_1_G'] + $row['bar_7_2_1_H'] + $row['bar_7_2_1_I'] + $row['bar_7_2_1_J'];
			$bar_7_3_self_assessor_2 = $row['bar_7_3_1_A'] + $row['bar_7_3_1_B'] + $row['bar_7_3_1_C'] + $row['bar_7_3_1_D'];
			$bar_7_4_self_assessor_2 = $row['bar_7_4_1_A'] + $row['bar_7_4_1_B'] + $row['bar_7_4_1_C'];
			$bar_7_5_self_assessor_2 = $row['bar_7_5_1_A'] + $row['bar_7_5_1_B'] + $row['bar_7_5_1_C'] + $row['bar_7_5_1_D'] + $row['bar_7_5_1_E_a'] + $row['bar_7_5_1_E_b'] + $row['bar_7_5_1_E_c'] + $row['bar_7_5_1_E_d'] + $row['bar_7_5_1_E_e'] + $row['bar_7_5_1_E_f'] + $row['bar_7_5_1_E_g'] + $row['bar_7_5_1_E_h'] + $row['bar_7_5_1_F'] + $row['bar_7_5_1_G'] + $row['bar_7_5_1_H'] + $row['bar_7_5_1_I'];
			$bar_7_6_self_assessor_2 = $row['bar_7_6_1_A'] + $row['bar_7_6_1_B'] + $row['bar_7_6_1_C'];
			$bar_7_7_self_assessor_2 = $row['bar_7_7_1_A'] + $row['bar_7_7_1_B'] + $row['bar_7_7_1_C'];
			$bar_7_8_self_assessor_2 = $row['bar_7_8_1_A'] + $row['bar_7_8_1_B'] + $row['bar_7_8_1_C'];
			$output['bar_7_1_self_assessor_2'] = $bar_7_1_self_assessor_2;
			$output['bar_7_2_self_assessor_2'] = $bar_7_2_self_assessor_2;
			$output['bar_7_3_self_assessor_2'] = $bar_7_3_self_assessor_2;
			$output['bar_7_4_self_assessor_2'] = $bar_7_4_self_assessor_2;
			$output['bar_7_5_self_assessor_2'] = $bar_7_5_self_assessor_2;
			$output['bar_7_6_self_assessor_2'] = $bar_7_6_self_assessor_2;
			$output['bar_7_7_self_assessor_2'] = $bar_7_7_self_assessor_2;
			$output['bar_7_8_self_assessor_2'] = $bar_7_8_self_assessor_2;
			$output['bar_7_0_self_assessor_2'] = $bar_7_1_self_assessor_2 + $bar_7_2_self_assessor_2 + $bar_7_3_self_assessor_2 + $bar_7_4_self_assessor_2 + $bar_7_5_self_assessor_2 + $bar_7_6_self_assessor_2 + $bar_7_7_self_assessor_2 + $bar_7_8_self_assessor_2;
		
			//KITCHEN			
			$kitchen_8_1_self_assessor_2 = $row['kitchen_8_1_1_A'] + 0;
			$kitchen_8_2_self_assessor_2 = $row['kitchen_8_2_1_A'] + $row['kitchen_8_2_1_B'] + $row['kitchen_8_2_1_C'];
			$kitchen_8_3_self_assessor_2 = $row['kitchen_8_3_1_A'] + $row['kitchen_8_3_1_B'] + $row['kitchen_8_3_1_C'];
			$kitchen_8_4_self_assessor_2 = $row['kitchen_8_4_1_A'] + $row['kitchen_8_4_2_A'] + $row['kitchen_8_4_2_B'] + $row['kitchen_8_4_2_C'];
			$kitchen_8_5_self_assessor_2 = $row['kitchen_8_5_1_A'] + $row['kitchen_8_5_1_B'] + $row['kitchen_8_5_1_C'] + $row['kitchen_8_5_1_D'] + $row['kitchen_8_5_1_E'] + $row['kitchen_8_5_1_F'] + $row['kitchen_8_5_1_G'] + $row['kitchen_8_5_1_H'] + $row['kitchen_8_5_1_I'];
			$kitchen_8_6_self_assessor_2 = $row['kitchen_8_6_1_A'] + $row['kitchen_8_6_1_B'] + $row['kitchen_8_6_1_C'] + $row['kitchen_8_6_1_D'] + $row['kitchen_8_6_1_E'] + $row['kitchen_8_6_1_F'] + $row['kitchen_8_6_1_G'];
			$kitchen_8_7_self_assessor_2 = $row['kitchen_8_7_1_A'] + $row['kitchen_8_7_1_B'] + $row['kitchen_8_7_1_C'] + $row['kitchen_8_7_1_D'] + $row['kitchen_8_7_1_E'];
			$kitchen_8_8_self_assessor_2 = $row['kitchen_8_8_1_A'] + $row['kitchen_8_8_1_B'] + $row['kitchen_8_8_1_C_a'] + $row['kitchen_8_8_1_C_b'] + $row['kitchen_8_8_1_D'] + $row['kitchen_8_8_1_E'];
			$kitchen_8_9_self_assessor_2 = $row['kitchen_8_9_1_A'] + $row['kitchen_8_9_1_B'] + $row['kitchen_8_9_1_C'] + $row['kitchen_8_9_1_D'] + $row['kitchen_8_9_1_E'];
			$kitchen_8_10_self_assessor_2 = $row['kitchen_8_10_1_A_a'] + $row['kitchen_8_10_1_A_b'] + $row['kitchen_8_10_1_A_c'] + $row['kitchen_8_10_1_A_d'] + $row['kitchen_8_10_1_B'] + $row['kitchen_8_10_1_C'] + $row['kitchen_8_10_1_D'] + $row['kitchen_8_10_1_E'] + $row['kitchen_8_10_1_F'] + $row['kitchen_8_10_1_G'];
			$kitchen_8_11_self_assessor_2 = $row['kitchen_8_11_1_A_a'] + $row['kitchen_8_11_1_A_b'] + $row['kitchen_8_11_1_A_c'] + $row['kitchen_8_11_1_B'] + $row['kitchen_8_11_1_C_a'] + $row['kitchen_8_11_1_C_b'] + $row['kitchen_8_11_1_C_c'] + $row['kitchen_8_11_1_C_d'] + $row['kitchen_8_11_1_C_e'] + $row['kitchen_8_11_1_D_a'] + $row['kitchen_8_11_1_D_b'] + $row['kitchen_8_11_1_E'] + $row['kitchen_8_11_1_F'];
			$kitchen_8_12_self_assessor_2 = $row['kitchen_8_12_1_A'] + $row['kitchen_8_12_1_B'] + $row['kitchen_8_12_1_C'];
			$output['kitchen_8_1_self_assessor_2'] = $kitchen_8_1_self_assessor_2;
			$output['kitchen_8_2_self_assessor_2'] = $kitchen_8_2_self_assessor_2;
			$output['kitchen_8_3_self_assessor_2'] = $kitchen_8_3_self_assessor_2;
			$output['kitchen_8_4_self_assessor_2'] = $kitchen_8_4_self_assessor_2;
			$output['kitchen_8_5_self_assessor_2'] = $kitchen_8_5_self_assessor_2;
			$output['kitchen_8_6_self_assessor_2'] = $kitchen_8_6_self_assessor_2;
			$output['kitchen_8_7_self_assessor_2'] = $kitchen_8_7_self_assessor_2;
			$output['kitchen_8_8_self_assessor_2'] = $kitchen_8_8_self_assessor_2;
			$output['kitchen_8_9_self_assessor_2'] = $kitchen_8_9_self_assessor_2;
			$output['kitchen_8_10_self_assessor_2'] = $kitchen_8_10_self_assessor_2;
			$output['kitchen_8_11_self_assessor_2'] = $kitchen_8_11_self_assessor_2;
			$output['kitchen_8_12_self_assessor_2'] = $kitchen_8_12_self_assessor_2;
			$output['kitchen_8_0_self_assessor_2'] = $kitchen_8_1_self_assessor_2 + $kitchen_8_2_self_assessor_2 + $kitchen_8_3_self_assessor_2 + $kitchen_8_4_self_assessor_2 + $kitchen_8_5_self_assessor_2 + $kitchen_8_6_self_assessor_2 + $kitchen_8_7_self_assessor_2 + $kitchen_8_8_self_assessor_2 + $kitchen_8_9_self_assessor_2 + $kitchen_8_10_self_assessor_2 + $kitchen_8_11_self_assessor_2 + $kitchen_8_12_self_assessor_2;
		
			//GUEST ROOMS
			$guest_rooms_9_1_self_assessor_2 = $row['guest_rooms_9_1_1_A'] +  0;
			$guest_rooms_9_2_self_assessor_2 = $row['guest_rooms_9_2_1_A'] + $row['guest_rooms_9_2_1_B'];
			$guest_rooms_9_3_self_assessor_2 = $row['guest_rooms_9_3_1_A'] + $row['guest_rooms_9_3_1_B'];
			$guest_rooms_9_4_self_assessor_2 = $row['guest_rooms_9_4_1_A'] + $row['guest_rooms_9_4_1_B_a'] + $row['guest_rooms_9_4_1_B_b'] + $row['guest_rooms_9_4_1_B_c'] + $row['guest_rooms_9_4_1_B_d'] + $row['guest_rooms_9_4_1_B_e'] + $row['guest_rooms_9_4_1_B_f'] + $row['guest_rooms_9_4_1_B_g'] + $row['guest_rooms_9_4_1_B_h'] + $row['guest_rooms_9_4_1_B_i'] + $row['guest_rooms_9_4_1_B_j'] + $row['guest_rooms_9_4_1_B_k'] + $row['guest_rooms_9_4_1_B_l'] + $row['guest_rooms_9_4_1_B_m'] + $row['guest_rooms_9_4_1_C'] + $row['guest_rooms_9_4_1_D'] + $row['guest_rooms_9_4_1_E'] + $row['guest_rooms_9_4_1_F'] + $row['guest_rooms_9_4_1_G'];
			$guest_rooms_9_5_self_assessor_2 = $row['guest_rooms_9_5_1_A'] + $row['guest_rooms_9_5_1_B_a'] + $row['guest_rooms_9_5_1_B_b'] + $row['guest_rooms_9_5_1_B_c'] + $row['guest_rooms_9_5_1_B_d'] + $row['guest_rooms_9_5_1_B_e'] + $row['guest_rooms_9_5_1_C'] + $row['guest_rooms_9_5_1_D'];
			$guest_rooms_9_6_self_assessor_2 = $row['guest_rooms_9_6_1_A'] + $row['guest_rooms_9_6_1_B'];
			$guest_rooms_9_7_self_assessor_2 = $row['guest_rooms_9_7_1_A'] + $row['guest_rooms_9_7_1_B'] + $row['guest_rooms_9_7_1_C'] + $row['guest_rooms_9_7_1_D'] + $row['guest_rooms_9_7_1_E'];
			$guest_rooms_9_8_self_assessor_2 = $row['guest_rooms_9_8_1_A'] + $row['guest_rooms_9_8_1_B'] + $row['guest_rooms_9_8_1_C'] + $row['guest_rooms_9_8_1_D'] + $row['guest_rooms_9_8_1_E'];
			$guest_rooms_9_9_self_assessor_2 = $row['guest_rooms_9_9_1_A'] + $row['guest_rooms_9_9_1_B_a'] + $row['guest_rooms_9_9_1_B_b'] + $row['guest_rooms_9_9_1_B_c'] + $row['guest_rooms_9_9_1_B_d'] + $row['guest_rooms_9_9_1_B_e'] + $row['guest_rooms_9_9_1_B_f'] + $row['guest_rooms_9_9_1_C_a'] + $row['guest_rooms_9_9_1_C_b'] + $row['guest_rooms_9_9_1_C_c'] + $row['guest_rooms_9_9_1_D'];
			$guest_rooms_9_10_self_assessor_2 = $row['guest_rooms_9_10_1_A'] + $row['guest_rooms_9_10_1_B'];
			$guest_rooms_9_11_self_assessor_2 = $row['guest_rooms_9_11_1_A_a'] + $row['guest_rooms_9_11_1_A_b'] + $row['guest_rooms_9_11_1_A_c'] + $row['guest_rooms_9_11_1_A_d'] + $row['guest_rooms_9_11_1_A_e'] + $row['guest_rooms_9_11_1_B_a'] + $row['guest_rooms_9_11_1_B_b'] + $row['guest_rooms_9_11_1_B'] + $row['guest_rooms_9_11_1_C'];
			$guest_rooms_9_12_self_assessor_2 = $row['guest_rooms_9_12_1_A'] + $row['guest_rooms_9_12_1_B'] + $row['guest_rooms_9_12_1_C'] + $row['guest_rooms_9_12_1_D'] + $row['guest_rooms_9_12_1_E'] + $row['guest_rooms_9_12_1_F'] + $row['guest_rooms_9_12_1_G'];
			$guest_rooms_9_13_self_assessor_2 = $row['guest_rooms_9_13_1_A'] + $row['guest_rooms_9_13_1_B'] + $row['guest_rooms_9_13_1_C'];
			$guest_rooms_9_14_self_assessor_2 = $row['guest_rooms_9_14_1_A'] + $row['guest_rooms_9_14_1_B_a'] + $row['guest_rooms_9_14_1_B_b'] + $row['guest_rooms_9_14_1_B_c'] + $row['guest_rooms_9_14_1_C'];
			$guest_rooms_9_15_self_assessor_2 = $row['guest_rooms_9_15_1_A_a'] + $row['guest_rooms_9_15_1_A_b'] + $row['guest_rooms_9_15_1_A_c'] + $row['guest_rooms_9_15_1_A_d'] + $row['guest_rooms_9_15_1_A_e'] + $row['guest_rooms_9_15_1_A_f'] + $row['guest_rooms_9_15_1_A_g'] + $row['guest_rooms_9_15_1_A_h'] + $row['guest_rooms_9_15_1_A_i'] + $row['guest_rooms_9_15_1_A_j'] + $row['guest_rooms_9_15_1_A_k'] + $row['guest_rooms_9_15_1_A_l'] + $row['guest_rooms_9_15_1_A_m'] + $row['guest_rooms_9_15_1_A_n'] + $row['guest_rooms_9_15_1_A_o'] + $row['guest_rooms_9_15_1_A_p'] + $row['guest_rooms_9_15_1_A_q'] + $row['guest_rooms_9_15_1_B'] + $row['guest_rooms_9_15_1_C'];
			$output['guest_rooms_9_1_self_assessor_2'] = $guest_rooms_9_1_self_assessor_2;
			$output['guest_rooms_9_2_self_assessor_2'] = $guest_rooms_9_2_self_assessor_2;
			$output['guest_rooms_9_3_self_assessor_2'] = $guest_rooms_9_3_self_assessor_2;
			$output['guest_rooms_9_4_self_assessor_2'] = $guest_rooms_9_4_self_assessor_2;
			$output['guest_rooms_9_5_self_assessor_2'] = $guest_rooms_9_5_self_assessor_2;
			$output['guest_rooms_9_6_self_assessor_2'] = $guest_rooms_9_6_self_assessor_2;
			$output['guest_rooms_9_7_self_assessor_2'] = $guest_rooms_9_7_self_assessor_2;
			$output['guest_rooms_9_8_self_assessor_2'] = $guest_rooms_9_8_self_assessor_2;
			$output['guest_rooms_9_9_self_assessor_2'] = $guest_rooms_9_9_self_assessor_2;
			$output['guest_rooms_9_10_self_assessor_2'] = $guest_rooms_9_10_self_assessor_2;
			$output['guest_rooms_9_11_self_assessor_2'] = $guest_rooms_9_11_self_assessor_2;
			$output['guest_rooms_9_12_self_assessor_2'] = $guest_rooms_9_12_self_assessor_2;
			$output['guest_rooms_9_13_self_assessor_2'] = $guest_rooms_9_13_self_assessor_2;
			$output['guest_rooms_9_14_self_assessor_2'] = $guest_rooms_9_14_self_assessor_2;
			$output['guest_rooms_9_15_self_assessor_2'] = $guest_rooms_9_15_self_assessor_2;
			$output['guest_rooms_9_0_self_assessor_2'] = $guest_rooms_9_1_self_assessor_2 + $guest_rooms_9_2_self_assessor_2 + $guest_rooms_9_3_self_assessor_2 + $guest_rooms_9_4_self_assessor_2 + $guest_rooms_9_5_self_assessor_2 + $guest_rooms_9_6_self_assessor_2 + $guest_rooms_9_7_self_assessor_2 + $guest_rooms_9_8_self_assessor_2 + $guest_rooms_9_9_self_assessor_2 + $guest_rooms_9_10_self_assessor_2 + $guest_rooms_9_11_self_assessor_2 + $guest_rooms_9_12_self_assessor_2 + $guest_rooms_9_13_self_assessor_2 + $guest_rooms_9_14_self_assessor_2 + $guest_rooms_9_15_self_assessor_2;
	
			//GUEST BATHROOMS

			$guest_bathrooms_10_1_self_assessor_2 = $row['guest_bathrooms_10_1_1_A'] + 0;
			$guest_bathrooms_10_2_self_assessor_2 = $row['guest_bathrooms_10_2_1_A'] + 0;
			$guest_bathrooms_10_3_self_assessor_2 = $row['guest_bathrooms_10_3_1_A_a'] + $row['guest_bathrooms_10_3_1_A_b'] + $row['guest_bathrooms_10_3_1_A_c'] + $row['guest_bathrooms_10_3_1_A_d'] + $row['guest_bathrooms_10_3_1_A_e'] + $row['guest_bathrooms_10_3_1_A_f'] + $row['guest_bathrooms_10_3_1_A_g'] + $row['guest_bathrooms_10_3_1_A_h'] + $row['guest_bathrooms_10_3_1_A_i'] + $row['guest_bathrooms_10_3_1_A_j'] + $row['guest_bathrooms_10_3_1_A_k'] + $row['guest_bathrooms_10_3_1_A_l'] + $row['guest_bathrooms_10_3_1_A_m'] + $row['guest_bathrooms_10_3_1_A_n'] + $row['guest_bathrooms_10_3_1_A_o'] + $row['guest_bathrooms_10_3_1_A_p'] + $row['guest_bathrooms_10_3_1_A_q'] + $row['guest_bathrooms_10_3_1_A_r'] + $row['guest_bathrooms_10_3_1_A_s'] + $row['guest_bathrooms_10_3_1_A_t'] + $row['guest_bathrooms_10_3_1_A_u'] + $row['guest_bathrooms_10_3_1_A_v'] + $row['guest_bathrooms_10_3_1_A_w'] + $row['guest_bathrooms_10_3_1_B'] + $row['guest_bathrooms_10_3_1_C'] + $row['guest_bathrooms_10_3_1_D'] + $row['guest_bathrooms_10_3_1_E']+ $row['guest_bathrooms_10_3_1_F'];
			$guest_bathrooms_10_4_self_assessor_2 = $row['guest_bathrooms_10_4_1_A'] + $row['guest_bathrooms_10_4_1_B'] + $row['guest_bathrooms_10_4_1_C'] + $row['guest_bathrooms_10_4_1_D'] + $row['guest_bathrooms_10_4_1_E'] + $row['guest_bathrooms_10_4_1_F'];
			$guest_bathrooms_10_5_self_assessor_2 = $row['guest_bathrooms_10_5_1_A_a'] + $row['guest_bathrooms_10_5_1_A_b'] + $row['guest_bathrooms_10_5_1_A_c'] + $row['guest_bathrooms_10_5_1_A_d'] + $row['guest_bathrooms_10_5_1_A_e'] + $row['guest_bathrooms_10_5_1_B'] + $row['guest_bathrooms_10_5_1_C'] + $row['guest_bathrooms_10_5_1_D'] + $row['guest_bathrooms_10_5_1_E'] + $row['guest_bathrooms_10_5_1_F'];
			$guest_bathrooms_10_6_self_assessor_2 = $row['guest_bathrooms_10_6_1_A'] + $row['guest_bathrooms_10_6_1_B'] + $row['guest_bathrooms_10_6_1_C'];
			$guest_bathrooms_10_7_self_assessor_2 = $row['guest_bathrooms_10_7_1_A'] + $row['guest_bathrooms_10_7_1_B'] + $row['guest_bathrooms_10_7_1_C'] + $row['guest_bathrooms_10_7_1_D'];
			$guest_bathrooms_10_8_self_assessor_2 = $row['guest_bathrooms_10_8_1_A_a'] + $row['guest_bathrooms_10_8_1_A_b'] + $row['guest_bathrooms_10_8_1_A_c'] + $row['guest_bathrooms_10_8_1_A_d'] + $row['guest_bathrooms_10_8_1_A_e'] + $row['guest_bathrooms_10_8_1_A_f'] + $row['guest_bathrooms_10_8_1_A_g'] + $row['guest_bathrooms_10_8_1_B'] + $row['guest_bathrooms_10_8_1_C'];
			$guest_bathrooms_10_9_self_assessor_2 = $row['guest_bathrooms_10_9_1_A'] + $row['guest_bathrooms_10_9_1_B'];
			$output['guest_bathrooms_10_1_self_assessor_2'] = $guest_bathrooms_10_1_self_assessor_2;
			$output['guest_bathrooms_10_2_self_assessor_2'] = $guest_bathrooms_10_2_self_assessor_2;
			$output['guest_bathrooms_10_3_self_assessor_2'] = $guest_bathrooms_10_3_self_assessor_2;
			$output['guest_bathrooms_10_4_self_assessor_2'] = $guest_bathrooms_10_4_self_assessor_2;
			$output['guest_bathrooms_10_5_self_assessor_2'] = $guest_bathrooms_10_5_self_assessor_2;
			$output['guest_bathrooms_10_6_self_assessor_2'] = $guest_bathrooms_10_6_self_assessor_2;
			$output['guest_bathrooms_10_7_self_assessor_2'] = $guest_bathrooms_10_7_self_assessor_2;
			$output['guest_bathrooms_10_8_self_assessor_2'] = $guest_bathrooms_10_8_self_assessor_2;
			$output['guest_bathrooms_10_9_self_assessor_2'] = $guest_bathrooms_10_9_self_assessor_2;
			$output['guest_bathrooms_10_0_self_assessor_2'] = $guest_bathrooms_10_1_self_assessor_2+$guest_bathrooms_10_2_self_assessor_2+$guest_bathrooms_10_3_self_assessor_2+$guest_bathrooms_10_4_self_assessor_2+$guest_bathrooms_10_5_self_assessor_2+$guest_bathrooms_10_6_self_assessor_2+$guest_bathrooms_10_7_self_assessor_2+$guest_bathrooms_10_8_self_assessor_2+$guest_bathrooms_10_9_self_assessor_2;

			//SUITES
			
			$suites_11_1_self_assessor_2 = $row['suites_11_1_1_A'] + 0;
			$suites_11_2_self_assessor_2 = $row['suites_11_2_1_A'] + $row['suites_11_2_1_B'] + $row['suites_11_2_1_C'];
			$suites_11_3_self_assessor_2 = $row['suites_11_3_1_A_a'] + $row['suites_11_3_1_A_b'] + $row['suites_11_3_1_A_c'] + $row['suites_11_3_1_A_d'];
			$suites_11_4_self_assessor_2 = $row['suites_11_4_1_A'] + $row['suites_11_4_1_B'];
			$suites_11_5_self_assessor_2 = $row['suites_11_5_1_A_a'] + $row['suites_11_5_1_A_b'] + $row['suites_11_5_1_B_a'] + $row['suites_11_5_1_B_b'] + $row['suites_11_5_1_B_c'] + $row['suites_11_5_1_B_d'] + $row['suites_11_5_1_B_e'] + $row['suites_11_5_1_B_f'] + $row['suites_11_5_1_B_g'] + $row['suites_11_5_1_B_h'] + $row['suites_11_5_1_B_i'] + $row['suites_11_5_1_B_j'] + $row['suites_11_5_1_B_k'] + $row['suites_11_5_1_B_l'] + $row['suites_11_5_1_B_m'] + $row['suites_11_5_1_B_n'] + $row['suites_11_5_1_B_o'] + $row['suites_11_5_1_B_p'] + $row['suites_11_5_1_B_q'] + $row['suites_11_5_1_B_r'] + $row['suites_11_5_1_C'] + $row['suites_11_5_1_D'] + $row['suites_11_5_1_E'] + $row['suites_11_5_1_F'] + $row['suites_11_5_1_G'];
			$suites_11_6_self_assessor_2 = $row['suites_11_6_1_A'] + $row['suites_11_6_1_B'] + $row['suites_11_6_1_C'] + $row['suites_11_6_1_D'] + $row['suites_11_6_1_E'];
			$suites_11_7_self_assessor_2 = $row['suites_11_7_1_A'] + $row['suites_11_7_1_B_a'] + $row['suites_11_7_1_B_b'] + $row['suites_11_7_1_B_c'] + $row['suites_11_7_1_B_d'] + $row['suites_11_7_1_C'] + $row['suites_11_7_1_D'];
			$suites_11_8_self_assessor_2 = $row['suites_11_8_1_A'] + $row['suites_11_8_1_B_a'] + $row['suites_11_8_1_B_b'] + $row['suites_11_8_1_B_c'] + $row['suites_11_8_1_B_d'] + $row['suites_11_8_1_B_e'] + $row['suites_11_8_1_B_f'] + $row['suites_11_8_1_B_g'] + $row['suites_11_8_1_B_h'] + $row['suites_11_8_1_B_i'] + $row['suites_11_8_1_C_a'] + $row['suites_11_8_1_C_b'] + $row['suites_11_8_1_D'];
			$suites_11_9_self_assessor_2 = $row['suites_11_9_1_A'] + $row['suites_11_9_1_B'];
			$suites_11_10_self_assessor_2 = $row['suites_11_10_1_A_a'] + $row['suites_11_10_1_A_b'] + $row['suites_11_10_1_A_c'] + $row['suites_11_10_1_A_d'] + $row['suites_11_10_1_A_e'] + $row['suites_11_10_1_B_a'] + $row['suites_11_10_1_B_b'] + $row['suites_11_10_1_B_c'] + $row['suites_11_10_1_B_d'] + $row['suites_11_10_1_C'];
			$suites_11_11_self_assessor_2 = $row['suites_11_11_1_A'] + $row['suites_11_11_1_B'] + $row['suites_11_11_1_C_a'] + $row['suites_11_11_1_C_b'] + $row['suites_11_11_1_C_c'] + $row['suites_11_11_1_D'] + $row['suites_11_11_1_E'] + $row['suites_11_11_1_F'] + $row['suites_11_11_1_G'];
			$suites_11_12_self_assessor_2 = $row['suites_11_12_1_A_a'] + $row['suites_11_12_1_A_b'] + $row['suites_11_12_1_A_c'] + $row['suites_11_12_1_A_d'] + $row['suites_11_12_1_A_e'] + $row['suites_11_12_1_A_f'] + $row['suites_11_12_1_A_g'] + $row['suites_11_12_1_A_h'] + $row['suites_11_12_1_A_i'] + $row['suites_11_12_1_A_j'] + $row['suites_11_12_1_A_k'] + $row['suites_11_12_1_A_l'] + $row['suites_11_12_1_A_m'] + $row['suites_11_12_1_A_n'] + $row['suites_11_12_1_A_o'] + $row['suites_11_12_1_A_p'] + $row['suites_11_12_1_A_q'] + $row['suites_11_12_1_A_r'] + $row['suites_11_12_1_A_s'] + $row['suites_11_12_1_A_t'] + $row['suites_11_12_1_A_u'] + $row['suites_11_12_1_A_v'] + $row['suites_11_12_1_B'] + $row['suites_11_12_1_C'];
			$suites_11_13_self_assessor_2 = $row['suites_11_13_1_A'] + $row['suites_11_13_1_B'];
			$suites_11_14_self_assessor_2 = $row['suites_11_14_1_A'] + $row['suites_11_14_1_B_a'] + $row['suites_11_14_1_B_b'] + $row['suites_11_14_1_B_c'] + $row['suites_11_14_1_C'];
			$suites_11_15_self_assessor_2 = $row['suites_11_15_1_A'] + 0;
			$suites_11_16_self_assessor_2 = $row['suites_11_16_1_A_a'] + $row['suites_11_16_1_A_b'] + $row['suites_11_16_1_A_c'] + $row['suites_11_16_1_A_d'] + $row['suites_11_16_1_A_e'] + $row['suites_11_16_1_A_f'] + $row['suites_11_16_1_A_g'] + $row['suites_11_16_1_A_h'] + $row['suites_11_16_1_A_i'] + $row['suites_11_16_1_A_j'] + $row['suites_11_16_1_A_k'] + $row['suites_11_16_1_A_l'] + $row['suites_11_16_1_A_m'] + $row['suites_11_16_1_A_n'] + $row['suites_11_16_1_A_o'] + $row['suites_11_16_1_A_p'] + $row['suites_11_16_1_A_q'] + $row['suites_11_16_1_A_r'] + $row['suites_11_16_1_A_s'] + $row['suites_11_16_1_A_t'] + $row['suites_11_16_1_A_u'] + $row['suites_11_16_1_A_v'] + $row['suites_11_16_1_A_w'] + $row['suites_11_16_1_A_x'] + $row['suites_11_16_1_B'] + $row['suites_11_16_1_C'] + $row['suites_11_16_1_D'] + $row['suites_11_16_1_E'] + $row['suites_11_16_1_F'];
			$suites_11_17_self_assessor_2 = $row['suites_11_17_1_A_a'] + $row['suites_11_17_1_A_b'] + $row['suites_11_17_1_A_c'] + $row['suites_11_17_1_A_d'] + $row['suites_11_17_1_A_e'] + $row['suites_11_17_1_A_f'] + $row['suites_11_17_1_A_g'] + $row['suites_11_17_1_A_h'] + $row['suites_11_17_1_A_i'] + $row['suites_11_17_1_A_j'] + $row['suites_11_17_1_A_k'] + $row['suites_11_17_1_A_l'] + $row['suites_11_17_1_B'] + $row['suites_11_17_1_C'];
			$suites_11_18_self_assessor_2 = $row['suites_11_18_1_A'] + $row['suites_11_18_1_B'] + $row['suites_11_18_1_C'] + $row['suites_11_18_1_D'] + $row['suites_11_18_1_E'] + $row['suites_11_18_1_F'];
			$suites_11_19_self_assessor_2 = $row['suites_11_19_1_A_a'] + $row['suites_11_19_1_A_b'] + $row['suites_11_19_1_A_c'] + $row['suites_11_19_1_A_d'] + $row['suites_11_19_1_A_e'] + $row['suites_11_19_1_B'] + $row['suites_11_19_1_C'] + $row['suites_11_19_1_D'] + $row['suites_11_19_1_E'] + $row['suites_11_19_1_F'];
			$suites_11_20_self_assessor_2 = $row['suites_11_20_1_A'] + $row['suites_11_20_1_B'] + $row['suites_11_20_1_C'];
			$suites_11_21_self_assessor_2 = $row['suites_11_21_1_A'] + $row['suites_11_21_1_B'] + $row['suites_11_21_1_C'];
			$output['suites_11_1_self_assessor_2'] = $suites_11_1_self_assessor_2;
			$output['suites_11_2_self_assessor_2'] = $suites_11_2_self_assessor_2;
			$output['suites_11_3_self_assessor_2'] = $suites_11_3_self_assessor_2;
			$output['suites_11_4_self_assessor_2'] = $suites_11_4_self_assessor_2;
			$output['suites_11_5_self_assessor_2'] = $suites_11_5_self_assessor_2;
			$output['suites_11_6_self_assessor_2'] = $suites_11_6_self_assessor_2;
			$output['suites_11_7_self_assessor_2'] = $suites_11_7_self_assessor_2;
			$output['suites_11_8_self_assessor_2'] = $suites_11_8_self_assessor_2;
			$output['suites_11_9_self_assessor_2'] = $suites_11_9_self_assessor_2;
			$output['suites_11_10_self_assessor_2'] = $suites_11_10_self_assessor_2;
			$output['suites_11_11_self_assessor_2'] = $suites_11_11_self_assessor_2;
			$output['suites_11_12_self_assessor_2'] = $suites_11_12_self_assessor_2;
			$output['suites_11_13_self_assessor_2'] = $suites_11_13_self_assessor_2;
			$output['suites_11_14_self_assessor_2'] = $suites_11_14_self_assessor_2;
			$output['suites_11_15_self_assessor_2'] = $suites_11_15_self_assessor_2;
			$output['suites_11_16_self_assessor_2'] = $suites_11_16_self_assessor_2;
			$output['suites_11_17_self_assessor_2'] = $suites_11_17_self_assessor_2;
			$output['suites_11_18_self_assessor_2'] = $suites_11_18_self_assessor_2;
			$output['suites_11_19_self_assessor_2'] = $suites_11_19_self_assessor_2;
			$output['suites_11_20_self_assessor_2'] = $suites_11_20_self_assessor_2;
			$output['suites_11_21_self_assessor_2'] = $suites_11_21_self_assessor_2;
			$output['suites_11_0_self_assessor_2'] = $suites_11_1_self_assessor_2 + $suites_11_2_self_assessor_2 + $suites_11_3_self_assessor_2 + $suites_11_4_self_assessor_2 + $suites_11_5_self_assessor_2 + $suites_11_6_self_assessor_2 + $suites_11_7_self_assessor_2 + $suites_11_8_self_assessor_2 + $suites_11_9_self_assessor_2 + $suites_11_10_self_assessor_2 + $suites_11_11_self_assessor_2 + $suites_11_12_self_assessor_2 + $suites_11_13_self_assessor_2 + $suites_11_14_self_assessor_2 + $suites_11_15_self_assessor_2 + $suites_11_16_self_assessor_2 + $suites_11_17_self_assessor_2 + $suites_11_18_self_assessor_2 + $suites_11_19_self_assessor_2 + $suites_11_20_self_assessor_2 + $suites_11_21_self_assessor_2;

			//HYGIENE AND SANITATION
			
			$hygiene_and_sanitation_12_1_self_assessor_2 = $row['hygiene_and_sanitation_12_1_1_A']+$row['hygiene_and_sanitation_12_1_1_B']+$row['hygiene_and_sanitation_12_1_1_C']+$row['hygiene_and_sanitation_12_1_1_D_a']+$row['hygiene_and_sanitation_12_1_1_D_b']+$row['hygiene_and_sanitation_12_1_1_D_c']+$row['hygiene_and_sanitation_12_1_1_D_d']+$row['hygiene_and_sanitation_12_1_1_D_e']+$row['hygiene_and_sanitation_12_1_1_D_f']+$row['hygiene_and_sanitation_12_1_1_D_g']+$row['hygiene_and_sanitation_12_1_1_D_h']+$row['hygiene_and_sanitation_12_1_1_E']+$row['hygiene_and_sanitation_12_1_1_F']+$row['hygiene_and_sanitation_12_1_1_G']+$row['hygiene_and_sanitation_12_1_1_H']+$row['hygiene_and_sanitation_12_1_1_I_a']+$row['hygiene_and_sanitation_12_1_1_I_b']+$row['hygiene_and_sanitation_12_1_1_I_c']+$row['hygiene_and_sanitation_12_1_1_I_d']+$row['hygiene_and_sanitation_12_1_1_I_e']+$row['hygiene_and_sanitation_12_1_1_J']+$row['hygiene_and_sanitation_12_1_1_K']+$row['hygiene_and_sanitation_12_1_1_L'];
			$hygiene_and_sanitation_12_2_self_assessor_2 = $row['hygiene_and_sanitation_12_2_1_A']+$row['hygiene_and_sanitation_12_2_1_B']+$row['hygiene_and_sanitation_12_2_1_C']+$row['hygiene_and_sanitation_12_2_1_D']+$row['hygiene_and_sanitation_12_2_1_E_a']+$row['hygiene_and_sanitation_12_2_1_E_b']+$row['hygiene_and_sanitation_12_2_1_E_c']+$row['hygiene_and_sanitation_12_2_1_E_d']+$row['hygiene_and_sanitation_12_2_1_E_e']+$row['hygiene_and_sanitation_12_2_1_E_f']+$row['hygiene_and_sanitation_12_2_1_E_g']+$row['hygiene_and_sanitation_12_2_1_E_h']+$row['hygiene_and_sanitation_12_2_1_E_i']+$row['hygiene_and_sanitation_12_2_1_F']+$row['hygiene_and_sanitation_12_2_1_G']+$row['hygiene_and_sanitation_12_2_1_H_a']+$row['hygiene_and_sanitation_12_2_1_H_b']+$row['hygiene_and_sanitation_12_2_1_H_c']+$row['hygiene_and_sanitation_12_2_1_H_d']+$row['hygiene_and_sanitation_12_2_1_I']+$row['hygiene_and_sanitation_12_2_1_J'];
			$hygiene_and_sanitation_12_3_self_assessor_2 = $row['hygiene_and_sanitation_12_3_1_A']+$row['hygiene_and_sanitation_12_3_1_B']+$row['hygiene_and_sanitation_12_3_1_C']+$row['hygiene_and_sanitation_12_3_1_D']+$row['hygiene_and_sanitation_12_3_1_E']+$row['hygiene_and_sanitation_12_3_1_F'];
			$hygiene_and_sanitation_12_4_self_assessor_2 = $row['hygiene_and_sanitation_12_4_1_A']+$row['hygiene_and_sanitation_12_4_1_B']+$row['hygiene_and_sanitation_12_4_1_C'];
			$hygiene_and_sanitation_12_5_self_assessor_2 = $row['hygiene_and_sanitation_12_5_1_A']+$row['hygiene_and_sanitation_12_5_1_B'];
			$hygiene_and_sanitation_12_6_self_assessor_2 = $row['hygiene_and_sanitation_12_6_1_A']+$row['hygiene_and_sanitation_12_6_1_B_a']+$row['hygiene_and_sanitation_12_6_1_B_b']+$row['hygiene_and_sanitation_12_6_1_C'];
			$hygiene_and_sanitation_12_7_self_assessor_2 = $row['hygiene_and_sanitation_12_7_1_A']+$row['hygiene_and_sanitation_12_7_1_B'];
			$output['hygiene_and_sanitation_12_1_self_assessor_2'] = $hygiene_and_sanitation_12_1_self_assessor_2;
			$output['hygiene_and_sanitation_12_2_self_assessor_2'] = $hygiene_and_sanitation_12_2_self_assessor_2;
			$output['hygiene_and_sanitation_12_3_self_assessor_2'] = $hygiene_and_sanitation_12_3_self_assessor_2;
			$output['hygiene_and_sanitation_12_4_self_assessor_2'] = $hygiene_and_sanitation_12_4_self_assessor_2;
			$output['hygiene_and_sanitation_12_5_self_assessor_2'] = $hygiene_and_sanitation_12_5_self_assessor_2;
			$output['hygiene_and_sanitation_12_6_self_assessor_2'] = $hygiene_and_sanitation_12_6_self_assessor_2;
			$output['hygiene_and_sanitation_12_7_self_assessor_2'] = $hygiene_and_sanitation_12_7_self_assessor_2;
			$output['hygiene_and_sanitation_12_0_self_assessor_2'] = $hygiene_and_sanitation_12_1_self_assessor_2 + $hygiene_and_sanitation_12_2_self_assessor_2 + $hygiene_and_sanitation_12_3_self_assessor_2 + $hygiene_and_sanitation_12_4_self_assessor_2 + $hygiene_and_sanitation_12_5_self_assessor_2 + $hygiene_and_sanitation_12_6_self_assessor_2 + $hygiene_and_sanitation_12_7_self_assessor_2;

			//SAFETY AND SECURITY
			
			$safety_and_security_13_1_self_assessor_2 = $row['safety_and_security_13_1_1_A'] + $row['safety_and_security_13_1_1_B'] + $row['safety_and_security_13_1_1_C'] + $row['safety_and_security_13_1_1_D'] + $row['safety_and_security_13_1_1_E'] + $row['safety_and_security_13_1_1_F_a'] + $row['safety_and_security_13_1_1_F_b'] + $row['safety_and_security_13_1_1_F_c'] + $row['safety_and_security_13_1_1_F_d'] + $row['safety_and_security_13_1_1_F_e'] + $row['safety_and_security_13_1_1_F_f'] + $row['safety_and_security_13_1_1_F_g'] + $row['safety_and_security_13_1_1_G'] + $row['safety_and_security_13_1_1_H'] + $row['safety_and_security_13_1_1_I'] + $row['safety_and_security_13_1_1_J'];
			$safety_and_security_13_2_self_assessor_2 = $row['safety_and_security_13_2_1_A'] + $row['safety_and_security_13_2_1_B'];
			$safety_and_security_13_3_self_assessor_2 = $row['safety_and_security_13_3_1_A'] + $row['safety_and_security_13_3_1_B'] + $row['safety_and_security_13_3_1_C'] + $row['safety_and_security_13_3_1_D'] + $row['safety_and_security_13_3_1_E'] + $row['safety_and_security_13_3_1_F'] + $row['safety_and_security_13_3_1_G'] + $row['safety_and_security_13_3_1_H'];
			$safety_and_security_13_4_self_assessor_2 = $row['safety_and_security_13_4_1_A'] + $row['safety_and_security_13_4_1_B'] + $row['safety_and_security_13_4_1_C'] + $row['safety_and_security_13_4_1_D'] + $row['safety_and_security_13_4_1_E'];
			$safety_and_security_13_5_self_assessor_2 = $row['safety_and_security_13_5_1_A'] + $row['safety_and_security_13_5_1_B'] + $row['safety_and_security_13_5_1_C'] + $row['safety_and_security_13_5_1_D'] + $row['safety_and_security_13_5_1_E'];
			$output['safety_and_security_13_1_self_assessor_2'] = $safety_and_security_13_1_self_assessor_2;
			$output['safety_and_security_13_2_self_assessor_2'] = $safety_and_security_13_2_self_assessor_2;
			$output['safety_and_security_13_3_self_assessor_2'] = $safety_and_security_13_3_self_assessor_2;
			$output['safety_and_security_13_4_self_assessor_2'] = $safety_and_security_13_4_self_assessor_2;
			$output['safety_and_security_13_5_self_assessor_2'] = $safety_and_security_13_5_self_assessor_2;
			$output['safety_and_security_13_0_self_assessor_2'] = $safety_and_security_13_1_self_assessor_2 + $safety_and_security_13_2_self_assessor_2 + $safety_and_security_13_3_self_assessor_2 + $safety_and_security_13_4_self_assessor_2 + $safety_and_security_13_5_self_assessor_2;
			
			//SUNDRY SERVICES
			
			$sundry_services_14_1_self_assessor_2 = $row['sundry_services_14_1_1_A'] + $row['sundry_services_14_1_1_B'] + $row['sundry_services_14_1_1_C'];
			$sundry_services_14_2_self_assessor_2 = $row['sundry_services_14_2_1_A'] + 0;
			$sundry_services_14_3_self_assessor_2 = $row['sundry_services_14_3_1_A'] + 0;
			$sundry_services_14_4_self_assessor_2 = $row['sundry_services_14_4_1_A'] + 0;
			$sundry_services_14_5_self_assessor_2 = $row['sundry_services_14_5_1_A'] + $row['sundry_services_14_5_1_B'] + $row['sundry_services_14_5_1_C'] + $row['sundry_services_14_5_1_D'];
			$output['sundry_services_14_1_self_assessor_2'] = $sundry_services_14_1_self_assessor_2;
			$output['sundry_services_14_2_self_assessor_2'] = $sundry_services_14_2_self_assessor_2;
			$output['sundry_services_14_3_self_assessor_2'] = $sundry_services_14_3_self_assessor_2;
			$output['sundry_services_14_4_self_assessor_2'] = $sundry_services_14_4_self_assessor_2;
			$output['sundry_services_14_5_self_assessor_2'] = $sundry_services_14_5_self_assessor_2;
			$output['sundry_services_14_0_self_assessor_2'] = $sundry_services_14_1_self_assessor_2 + $sundry_services_14_2_self_assessor_2 + $sundry_services_14_3_self_assessor_2 + $sundry_services_14_4_self_assessor_2 + $sundry_services_14_5_self_assessor_2;
		
			//HUMAN RESOURCES

			$human_resources_15_1_self_assessor_2 = $row['human_resources_15_1_1_A'] + $row['human_resources_15_1_1_B_a'] + $row['human_resources_15_1_1_B_b'] + $row['human_resources_15_1_1_B_c'] + $row['human_resources_15_1_1_B_d'] + $row['human_resources_15_1_1_B_e'] + $row['human_resources_15_1_1_B_f'];
			$human_resources_15_2_self_assessor_2 = $row['human_resources_15_2_1_A'] + $row['human_resources_15_2_1_B'];
			$human_resources_15_3_self_assessor_2 = $row['human_resources_15_3_1_A'] + $row['human_resources_15_3_1_B'];
			$human_resources_15_4_self_assessor_2 = $row['human_resources_15_4_1_A'] + $row['human_resources_15_4_1_B'] + $row['human_resources_15_4_1_C'];
			$human_resources_15_5_self_assessor_2 = $row['human_resources_15_5_1_A_a'] + $row['human_resources_15_5_1_A_b'] + $row['human_resources_15_5_1_A_c'] + $row['human_resources_15_5_1_B_a'] + $row['human_resources_15_5_1_B_b'] + $row['human_resources_15_5_1_B_c'] + $row['human_resources_15_5_1_C_a'] + $row['human_resources_15_5_1_C_b'] + $row['human_resources_15_5_1_C_c'];
			$human_resources_15_6_self_assessor_2 = $row['human_resources_15_6_1_A'] + 0;
			$human_resources_15_7_self_assessor_2 = $row['human_resources_15_7_1_A'] + $row['human_resources_15_7_1_B'] + $row['human_resources_15_7_1_C'] + $row['human_resources_15_7_1_D'];
			$human_resources_15_8_self_assessor_2 = $row['human_resources_15_8_1_A'] + $row['human_resources_15_8_1_B'] + $row['human_resources_15_8_1_C'];
			$human_resources_15_9_self_assessor_2 = $row['human_resources_15_9_1_A'] + $row['human_resources_15_9_1_B'] + $row['human_resources_15_9_1_C'] + $row['human_resources_15_9_1_D'] + $row['human_resources_15_9_1_E'] + $row['human_resources_15_9_1_F_a'] + $row['human_resources_15_9_1_F_b'] + $row['human_resources_15_9_1_F_c'];
			$output['human_resources_15_1_self_assessor_2'] = $human_resources_15_1_self_assessor_2;
			$output['human_resources_15_2_self_assessor_2'] = $human_resources_15_2_self_assessor_2;
			$output['human_resources_15_3_self_assessor_2'] = $human_resources_15_3_self_assessor_2;
			$output['human_resources_15_4_self_assessor_2'] = $human_resources_15_4_self_assessor_2;
			$output['human_resources_15_5_self_assessor_2'] = $human_resources_15_5_self_assessor_2;
			$output['human_resources_15_6_self_assessor_2'] = $human_resources_15_6_self_assessor_2;
			$output['human_resources_15_7_self_assessor_2'] = $human_resources_15_7_self_assessor_2;
			$output['human_resources_15_8_self_assessor_2'] = $human_resources_15_8_self_assessor_2;
			$output['human_resources_15_9_self_assessor_2'] = $human_resources_15_9_self_assessor_2;
			$output['human_resources_15_0_self_assessor_2'] = $human_resources_15_1_self_assessor_2 + $human_resources_15_2_self_assessor_2 + $human_resources_15_3_self_assessor_2 + $human_resources_15_4_self_assessor_2 + $human_resources_15_5_self_assessor_2 + $human_resources_15_6_self_assessor_2 + $human_resources_15_7_self_assessor_2 + $human_resources_15_8_self_assessor_2 + $human_resources_15_9_self_assessor_2;
			
			//GENERAL
			
			$general_16_1_self_assessor_2 = $row['general_16_1_1_A'] + 0;
			$general_16_2_self_assessor_2 = $row['general_16_2_1_A'] + $row['general_16_2_1_B_a'] + $row['general_16_2_1_B_b'] + $row['general_16_2_1_B_c'] + $row['general_16_2_1_B_d'] + $row['general_16_2_1_B_e'] + $row['general_16_2_1_C'];
			$general_16_3_self_assessor_2 = $row['general_16_3_1_A_a'] + $row['general_16_3_1_A_b'] + $row['general_16_3_1_A_c'] + $row['general_16_3_1_B'] + $row['general_16_3_1_C_a'] + $row['general_16_3_1_C_b'] + $row['general_16_3_1_C_c'] + $row['general_16_3_1_C_d'] + $row['general_16_3_1_C_e'] + $row['general_16_3_1_D_a'] + $row['general_16_3_1_D_b'] + $row['general_16_3_1_E'];
			$general_16_4_self_assessor_2 = $row['general_16_4_1_A'] + $row['general_16_4_1_B'];
			$general_16_5_self_assessor_2 = $row['general_16_5_1_A'] + $row['general_16_5_1_B'];
			$general_16_6_self_assessor_2 = $row['general_16_6_1_A'] + $row['general_16_6_1_B'];
			$general_16_7_self_assessor_2 = $row['general_16_7_1_A'] + $row['general_16_7_1_B'];
			$general_16_8_self_assessor_2 = $row['general_16_8_1_A'] + $row['general_16_8_1_B'] + $row['general_16_8_1_C'];
			$general_16_9_self_assessor_2 = $row['general_16_9_1_A'] + $row['general_16_9_1_B'] + $row['general_16_9_1_C'] + $row['general_16_9_1_D'];
			$general_16_10_self_assessor_2 = $row['general_16_10_1_A'] + $row['general_16_10_1_B'] + $row['general_16_10_1_C'];
			$general_16_11_self_assessor_2 = $row['general_16_11_1_A'] + $row['general_16_11_1_B'] + $row['general_16_11_1_C'] + $row['general_16_11_1_D_a'] + $row['general_16_11_1_D_b'] + $row['general_16_11_1_D_c'] + $row['general_16_11_1_D_d'] + $row['general_16_11_1_D_e'] + $row['general_16_11_1_E'] + $row['general_16_11_1_F'] + $row['general_16_11_1_G'] + $row['general_16_11_1_H'];
			$general_16_12_self_assessor_2 = $row['general_16_12_1_A'] + 0;
			$general_16_13_self_assessor_2 = $row['general_16_13_1_A'] + $row['general_16_13_1_B_a'] + $row['general_16_13_1_B_b'] + $row['general_16_13_1_B_c'] + $row['general_16_13_1_B_d'] + $row['general_16_13_1_B_e'] + $row['general_16_13_1_C'] + $row['general_16_13_1_D'] + $row['general_16_13_1_E'];
			$output['general_16_1_self_assessor_2'] = $general_16_1_self_assessor_2;
			$output['general_16_2_self_assessor_2'] = $general_16_1_self_assessor_2;
			$output['general_16_3_self_assessor_2'] = $general_16_1_self_assessor_2;
			$output['general_16_4_self_assessor_2'] = $general_16_1_self_assessor_2;
			$output['general_16_5_self_assessor_2'] = $general_16_1_self_assessor_2;
			$output['general_16_6_self_assessor_2'] = $general_16_6_self_assessor_2;
			$output['general_16_7_self_assessor_2'] = $general_16_7_self_assessor_2;
			$output['general_16_8_self_assessor_2'] = $general_16_8_self_assessor_2;
			$output['general_16_9_self_assessor_2'] = $general_16_9_self_assessor_2;
			$output['general_16_10_self_assessor_2'] = $general_16_10_self_assessor_2;
			$output['general_16_11_self_assessor_2'] = $general_16_11_self_assessor_2;
			$output['general_16_12_self_assessor_2'] = $general_16_12_self_assessor_2;
			$output['general_16_13_self_assessor_2'] = $general_16_13_self_assessor_2;
			$output['general_16_0_self_assessor_2'] = $general_16_1_self_assessor_2 + $general_16_2_self_assessor_2 + $general_16_3_self_assessor_2 + $general_16_4_self_assessor_2 + $general_16_5_self_assessor_2 + $general_16_6_self_assessor_2 + $general_16_7_self_assessor_2 + $general_16_8_self_assessor_2 + $general_16_9_self_assessor_2 + $general_16_10_self_assessor_2 + $general_16_11_self_assessor_2 + $general_16_12_self_assessor_2 + $general_16_13_self_assessor_2;		
		
		 }
	}
	
	//// SELF_ASSESSOR_3 ////
	
	$query = "SELECT * FROM afcg_assessment_villa WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_3'))"; 
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
			
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lobby_lounge_other_public_areas_4_1_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_1_1_A'] + $row['lobby_lounge_other_public_areas_4_1_1_B'] + $row['lobby_lounge_other_public_areas_4_1_1_C'] + $row['lobby_lounge_other_public_areas_4_1_1_D'] + $row['lobby_lounge_other_public_areas_4_1_1_E'];
			$lobby_lounge_other_public_areas_4_2_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_2_1_A'] + 0;
			$lobby_lounge_other_public_areas_4_3_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_3_1_A'] + $row['lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lobby_lounge_other_public_areas_4_3_1_C'];
			$lobby_lounge_other_public_areas_4_4_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_4_1_A'] + $row['lobby_lounge_other_public_areas_4_4_1_B'] + $row['lobby_lounge_other_public_areas_4_4_1_C'] + $row['lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lobby_lounge_other_public_areas_4_4_1_E'] + $row['lobby_lounge_other_public_areas_4_4_1_F'];
			$lobby_lounge_other_public_areas_4_5_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_5_1_A'] + $row['lobby_lounge_other_public_areas_4_5_1_B'];
			$lobby_lounge_other_public_areas_4_6_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_6_1_A'] + $row['lobby_lounge_other_public_areas_4_6_1_B'] + $row['lobby_lounge_other_public_areas_4_6_1_C'] + $row['lobby_lounge_other_public_areas_4_6_1_D'] + $row['lobby_lounge_other_public_areas_4_6_1_E'] + $row['lobby_lounge_other_public_areas_4_6_1_F'];
			$lobby_lounge_other_public_areas_4_7_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_7_1_A'] + $row['lobby_lounge_other_public_areas_4_7_1_B'] + $row['lobby_lounge_other_public_areas_4_7_1_C'];
			$lobby_lounge_other_public_areas_4_8_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_8_1_A'] + $row['lobby_lounge_other_public_areas_4_8_1_B_a'] + $row['lobby_lounge_other_public_areas_4_8_1_B_b'] + $row['lobby_lounge_other_public_areas_4_8_1_B_c'] + $row['lobby_lounge_other_public_areas_4_8_1_B_d'] + $row['lobby_lounge_other_public_areas_4_8_1_B_e'] + $row['lobby_lounge_other_public_areas_4_8_1_B_f'] + $row['lobby_lounge_other_public_areas_4_8_1_C'];
			$lobby_lounge_other_public_areas_4_9_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_9_1_A'] + $row['lobby_lounge_other_public_areas_4_9_1_B'] + $row['lobby_lounge_other_public_areas_4_9_1_C'] + $row['lobby_lounge_other_public_areas_4_9_1_D'];
			$lobby_lounge_other_public_areas_4_10_self_assessor_3 = $row['lobby_lounge_other_public_areas_4_10_1_A'] + 0;
			$output['lobby_lounge_other_public_areas_4_1_self_assessor_3'] = $lobby_lounge_other_public_areas_4_1_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_2_self_assessor_3'] = $lobby_lounge_other_public_areas_4_2_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_3_self_assessor_3'] = $lobby_lounge_other_public_areas_4_3_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_4_self_assessor_3'] = $lobby_lounge_other_public_areas_4_4_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_5_self_assessor_3'] = $lobby_lounge_other_public_areas_4_5_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_6_self_assessor_3'] = $lobby_lounge_other_public_areas_4_6_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_7_self_assessor_3'] = $lobby_lounge_other_public_areas_4_7_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_8_self_assessor_3'] = $lobby_lounge_other_public_areas_4_8_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_9_self_assessor_3'] = $lobby_lounge_other_public_areas_4_9_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_10_self_assessor_3'] = $lobby_lounge_other_public_areas_4_10_self_assessor_3;
			$output['lobby_lounge_other_public_areas_4_0_self_assessor_3'] = $lobby_lounge_other_public_areas_4_1_self_assessor_3 + $lobby_lounge_other_public_areas_4_2_self_assessor_3 + $lobby_lounge_other_public_areas_4_3_self_assessor_3 + $lobby_lounge_other_public_areas_4_4_self_assessor_3 + $lobby_lounge_other_public_areas_4_5_self_assessor_3 + $lobby_lounge_other_public_areas_4_6_self_assessor_3 + $lobby_lounge_other_public_areas_4_7_self_assessor_3 + $lobby_lounge_other_public_areas_4_8_self_assessor_3 + $lobby_lounge_other_public_areas_4_9_self_assessor_3 + $lobby_lounge_other_public_areas_4_10_self_assessor_3;
			
			//FUNCTION ROOMS 5.0
			$function_rooms_5_1_self_assessor_3 = $row['function_rooms_5_1_1_A'] + $row['function_rooms_5_1_1_B'] + $row['function_rooms_5_1_1_C'] + $row['function_rooms_5_1_1_D'] + $row['function_rooms_5_1_1_E'] + $row['function_rooms_5_1_1_F'] + $row['function_rooms_5_1_1_G'] + $row['function_rooms_5_1_1_H'] + $row['function_rooms_5_1_1_I'] + $row['function_rooms_5_1_1_J'] + $row['function_rooms_5_1_1_K'] + $row['function_rooms_5_1_1_L'] + $row['function_rooms_5_1_1_M'];
			$output['function_rooms_5_1_self_assessor_3'] = $function_rooms_5_1_self_assessor_3;
			$output['function_rooms_5_0_self_assessor_3'] = $function_rooms_5_1_self_assessor_3;
			
			//RESTAURANTS
			$restaurants_6_1_self_assessor_3 = $row['restaurants_6_1_1_A'] + $row['restaurants_6_1_1_B'] + $row['restaurants_6_1_1_C'] + $row['restaurants_6_1_1_D'];
			$restaurants_6_2_self_assessor_3 = $row['restaurants_6_2_1_A'] + $row['restaurants_6_2_1_B'] + $row['restaurants_6_2_1_C'] + $row['restaurants_6_2_1_D'] + $row['restaurants_6_2_1_E'] + $row['restaurants_6_2_1_F'] + $row['restaurants_6_2_1_G'] + $row['restaurants_6_2_1_H'] + $row['restaurants_6_2_1_I'];
			$restaurants_6_3_self_assessor_3 = $row['restaurants_6_3_1_A'] + $row['restaurants_6_3_1_B'] + $row['restaurants_6_3_1_C'];
			$restaurants_6_4_self_assessor_3 = $row['restaurants_6_4_1_A'] + $row['restaurants_6_4_1_B'] + $row['restaurants_6_4_1_C'] + $row['restaurants_6_4_1_D'] + $row['restaurants_6_4_1_E'] + $row['restaurants_6_4_1_F'] + $row['restaurants_6_4_1_G'];
			$restaurants_6_5_self_assessor_3 = $row['restaurants_6_5_1_A'] + $row['restaurants_6_5_1_B'] + $row['restaurants_6_5_1_C'] + $row['restaurants_6_5_1_D'] + $row['restaurants_6_5_1_E_a'] + $row['restaurants_6_5_1_E_b'] + $row['restaurants_6_5_1_E_c'] + $row['restaurants_6_5_1_E_d'] + $row['restaurants_6_5_1_F'] + $row['restaurants_6_5_1_G_a'] + $row['restaurants_6_5_1_G_b'] + $row['restaurants_6_5_1_G_c'] + $row['restaurants_6_5_1_H'] + $row['restaurants_6_5_1_I'];
			$restaurants_6_6_self_assessor_3 = $row['restaurants_6_6_1_A'] + $row['restaurants_6_6_1_B'] + $row['restaurants_6_6_1_C'] + $row['restaurants_6_6_1_D'];
			$restaurants_6_7_self_assessor_3 = $row['restaurants_6_7_1_A'] + $row['restaurants_6_7_1_B'] + $row['restaurants_6_7_1_C'];
			$restaurants_6_8_self_assessor_3 = $row['restaurants_6_8_1_A'] + $row['restaurants_6_8_1_B'];
			
			$output['restaurants_6_1_self_assessor_3'] = $restaurants_6_1_self_assessor_3;
			$output['restaurants_6_2_self_assessor_3'] = $restaurants_6_2_self_assessor_3;
			$output['restaurants_6_3_self_assessor_3'] = $restaurants_6_3_self_assessor_3;
			$output['restaurants_6_4_self_assessor_3'] = $restaurants_6_4_self_assessor_3;
			$output['restaurants_6_5_self_assessor_3'] = $restaurants_6_5_self_assessor_3;
			$output['restaurants_6_6_self_assessor_3'] = $restaurants_6_6_self_assessor_3;
			$output['restaurants_6_7_self_assessor_3'] = $restaurants_6_7_self_assessor_3;
			$output['restaurants_6_8_self_assessor_3'] = $restaurants_6_8_self_assessor_3;
			$output['restaurants_6_0_self_assessor_3'] = $restaurants_6_1_self_assessor_3 + $restaurants_6_2_self_assessor_3 + $restaurants_6_3_self_assessor_3 + $restaurants_6_4_self_assessor_3 + $restaurants_6_5_self_assessor_3 + $restaurants_6_6_self_assessor_3 + $restaurants_6_7_self_assessor_3 + $restaurants_6_8_self_assessor_3;
		 	//BARS
			$bar_7_1_self_assessor_3 = $row['bar_7_1_1_A'] + $row['bar_7_1_1_B_a'] + $row['bar_7_1_1_B_b'] + $row['bar_7_1_1_B_c'] + $row['bar_7_1_1_C'] + $row['bar_7_1_1_D_a'] + $row['bar_7_1_1_D_b'] + $row['bar_7_1_1_D_c'] + $row['bar_7_1_1_E'] + $row['bar_7_1_1_F'] + $row['bar_7_1_1_G'];
			$bar_7_2_self_assessor_3 = $row['bar_7_2_1_A'] + $row['bar_7_2_1_B'] + $row['bar_7_2_1_C'] + $row['bar_7_2_1_D'] + $row['bar_7_2_1_E'] + $row['bar_7_2_1_F'] + $row['bar_7_2_1_G'] + $row['bar_7_2_1_H'] + $row['bar_7_2_1_I'] + $row['bar_7_2_1_J'];
			$bar_7_3_self_assessor_3 = $row['bar_7_3_1_A'] + $row['bar_7_3_1_B'] + $row['bar_7_3_1_C'] + $row['bar_7_3_1_D'];
			$bar_7_4_self_assessor_3 = $row['bar_7_4_1_A'] + $row['bar_7_4_1_B'] + $row['bar_7_4_1_C'];
			$bar_7_5_self_assessor_3 = $row['bar_7_5_1_A'] + $row['bar_7_5_1_B'] + $row['bar_7_5_1_C'] + $row['bar_7_5_1_D'] + $row['bar_7_5_1_E_a'] + $row['bar_7_5_1_E_b'] + $row['bar_7_5_1_E_c'] + $row['bar_7_5_1_E_d'] + $row['bar_7_5_1_E_e'] + $row['bar_7_5_1_E_f'] + $row['bar_7_5_1_E_g'] + $row['bar_7_5_1_E_h'] + $row['bar_7_5_1_F'] + $row['bar_7_5_1_G'] + $row['bar_7_5_1_H'] + $row['bar_7_5_1_I'];
			$bar_7_6_self_assessor_3 = $row['bar_7_6_1_A'] + $row['bar_7_6_1_B'] + $row['bar_7_6_1_C'];
			$bar_7_7_self_assessor_3 = $row['bar_7_7_1_A'] + $row['bar_7_7_1_B'] + $row['bar_7_7_1_C'];
			$bar_7_8_self_assessor_3 = $row['bar_7_8_1_A'] + $row['bar_7_8_1_B'] + $row['bar_7_8_1_C'];
			$output['bar_7_1_self_assessor_3'] = $bar_7_1_self_assessor_3;
			$output['bar_7_2_self_assessor_3'] = $bar_7_2_self_assessor_3;
			$output['bar_7_3_self_assessor_3'] = $bar_7_3_self_assessor_3;
			$output['bar_7_4_self_assessor_3'] = $bar_7_4_self_assessor_3;
			$output['bar_7_5_self_assessor_3'] = $bar_7_5_self_assessor_3;
			$output['bar_7_6_self_assessor_3'] = $bar_7_6_self_assessor_3;
			$output['bar_7_7_self_assessor_3'] = $bar_7_7_self_assessor_3;
			$output['bar_7_8_self_assessor_3'] = $bar_7_8_self_assessor_3;
			$output['bar_7_0_self_assessor_3'] = $bar_7_1_self_assessor_3 + $bar_7_2_self_assessor_3 + $bar_7_3_self_assessor_3 + $bar_7_4_self_assessor_3 + $bar_7_5_self_assessor_3 + $bar_7_6_self_assessor_3 + $bar_7_7_self_assessor_3 + $bar_7_8_self_assessor_3;
		 
		 	//KITCHEN			
			$kitchen_8_1_self_assessor_3 = $row['kitchen_8_1_1_A'] + 0;
			$kitchen_8_2_self_assessor_3 = $row['kitchen_8_2_1_A'] + $row['kitchen_8_2_1_B'] + $row['kitchen_8_2_1_C'];
			$kitchen_8_3_self_assessor_3 = $row['kitchen_8_3_1_A'] + $row['kitchen_8_3_1_B'] + $row['kitchen_8_3_1_C'];
			$kitchen_8_4_self_assessor_3 = $row['kitchen_8_4_1_A'] + $row['kitchen_8_4_2_A'] + $row['kitchen_8_4_2_B'] + $row['kitchen_8_4_2_C'];
			$kitchen_8_5_self_assessor_3 = $row['kitchen_8_5_1_A'] + $row['kitchen_8_5_1_B'] + $row['kitchen_8_5_1_C'] + $row['kitchen_8_5_1_D'] + $row['kitchen_8_5_1_E'] + $row['kitchen_8_5_1_F'] + $row['kitchen_8_5_1_G'] + $row['kitchen_8_5_1_H'] + $row['kitchen_8_5_1_I'];
			$kitchen_8_6_self_assessor_3 = $row['kitchen_8_6_1_A'] + $row['kitchen_8_6_1_B'] + $row['kitchen_8_6_1_C'] + $row['kitchen_8_6_1_D'] + $row['kitchen_8_6_1_E'] + $row['kitchen_8_6_1_F'] + $row['kitchen_8_6_1_G'];
			$kitchen_8_7_self_assessor_3 = $row['kitchen_8_7_1_A'] + $row['kitchen_8_7_1_B'] + $row['kitchen_8_7_1_C'] + $row['kitchen_8_7_1_D'] + $row['kitchen_8_7_1_E'];
			$kitchen_8_8_self_assessor_3 = $row['kitchen_8_8_1_A'] + $row['kitchen_8_8_1_B'] + $row['kitchen_8_8_1_C_a'] + $row['kitchen_8_8_1_C_b'] + $row['kitchen_8_8_1_D'] + $row['kitchen_8_8_1_E'];
			$kitchen_8_9_self_assessor_3 = $row['kitchen_8_9_1_A'] + $row['kitchen_8_9_1_B'] + $row['kitchen_8_9_1_C'] + $row['kitchen_8_9_1_D'] + $row['kitchen_8_9_1_E'];
			$kitchen_8_10_self_assessor_3 = $row['kitchen_8_10_1_A_a'] + $row['kitchen_8_10_1_A_b'] + $row['kitchen_8_10_1_A_c'] + $row['kitchen_8_10_1_A_d'] + $row['kitchen_8_10_1_B'] + $row['kitchen_8_10_1_C'] + $row['kitchen_8_10_1_D'] + $row['kitchen_8_10_1_E'] + $row['kitchen_8_10_1_F'] + $row['kitchen_8_10_1_G'];
			$kitchen_8_11_self_assessor_3 = $row['kitchen_8_11_1_A_a'] + $row['kitchen_8_11_1_A_b'] + $row['kitchen_8_11_1_A_c'] + $row['kitchen_8_11_1_B'] + $row['kitchen_8_11_1_C_a'] + $row['kitchen_8_11_1_C_b'] + $row['kitchen_8_11_1_C_c'] + $row['kitchen_8_11_1_C_d'] + $row['kitchen_8_11_1_C_e'] + $row['kitchen_8_11_1_D_a'] + $row['kitchen_8_11_1_D_b'] + $row['kitchen_8_11_1_E'] + $row['kitchen_8_11_1_F'];
			$kitchen_8_12_self_assessor_3 = $row['kitchen_8_12_1_A'] + $row['kitchen_8_12_1_B'] + $row['kitchen_8_12_1_C'];
			$output['kitchen_8_1_self_assessor_3'] = $kitchen_8_1_self_assessor_3;
			$output['kitchen_8_2_self_assessor_3'] = $kitchen_8_2_self_assessor_3;
			$output['kitchen_8_3_self_assessor_3'] = $kitchen_8_3_self_assessor_3;
			$output['kitchen_8_4_self_assessor_3'] = $kitchen_8_4_self_assessor_3;
			$output['kitchen_8_5_self_assessor_3'] = $kitchen_8_5_self_assessor_3;
			$output['kitchen_8_6_self_assessor_3'] = $kitchen_8_6_self_assessor_3;
			$output['kitchen_8_7_self_assessor_3'] = $kitchen_8_7_self_assessor_3;
			$output['kitchen_8_8_self_assessor_3'] = $kitchen_8_8_self_assessor_3;
			$output['kitchen_8_9_self_assessor_3'] = $kitchen_8_9_self_assessor_3;
			$output['kitchen_8_10_self_assessor_3'] = $kitchen_8_10_self_assessor_3;
			$output['kitchen_8_11_self_assessor_3'] = $kitchen_8_11_self_assessor_3;
			$output['kitchen_8_12_self_assessor_3'] = $kitchen_8_12_self_assessor_3;
			$output['kitchen_8_0_self_assessor_3'] = $kitchen_8_1_self_assessor_3 + $kitchen_8_2_self_assessor_3 + $kitchen_8_3_self_assessor_3 + $kitchen_8_4_self_assessor_3 + $kitchen_8_5_self_assessor_3 + $kitchen_8_6_self_assessor_3 + $kitchen_8_7_self_assessor_3 + $kitchen_8_8_self_assessor_3 + $kitchen_8_9_self_assessor_3 + $kitchen_8_10_self_assessor_3 + $kitchen_8_11_self_assessor_3 + $kitchen_8_12_self_assessor_3;
		 
		 	//GUEST ROOMS
			$guest_rooms_9_1_self_assessor_3 = $row['guest_rooms_9_1_1_A'] +  0;
			$guest_rooms_9_2_self_assessor_3 = $row['guest_rooms_9_2_1_A'] + $row['guest_rooms_9_2_1_B'];
			$guest_rooms_9_3_self_assessor_3 = $row['guest_rooms_9_3_1_A'] + $row['guest_rooms_9_3_1_B'];
			$guest_rooms_9_4_self_assessor_3 = $row['guest_rooms_9_4_1_A'] + $row['guest_rooms_9_4_1_B_a'] + $row['guest_rooms_9_4_1_B_b'] + $row['guest_rooms_9_4_1_B_c'] + $row['guest_rooms_9_4_1_B_d'] + $row['guest_rooms_9_4_1_B_e'] + $row['guest_rooms_9_4_1_B_f'] + $row['guest_rooms_9_4_1_B_g'] + $row['guest_rooms_9_4_1_B_h'] + $row['guest_rooms_9_4_1_B_i'] + $row['guest_rooms_9_4_1_B_j'] + $row['guest_rooms_9_4_1_B_k'] + $row['guest_rooms_9_4_1_B_l'] + $row['guest_rooms_9_4_1_B_m'] + $row['guest_rooms_9_4_1_C'] + $row['guest_rooms_9_4_1_D'] + $row['guest_rooms_9_4_1_E'] + $row['guest_rooms_9_4_1_F'] + $row['guest_rooms_9_4_1_G'];
			$guest_rooms_9_5_self_assessor_3 = $row['guest_rooms_9_5_1_A'] + $row['guest_rooms_9_5_1_B_a'] + $row['guest_rooms_9_5_1_B_b'] + $row['guest_rooms_9_5_1_B_c'] + $row['guest_rooms_9_5_1_B_d'] + $row['guest_rooms_9_5_1_B_e'] + $row['guest_rooms_9_5_1_C'] + $row['guest_rooms_9_5_1_D'];
			$guest_rooms_9_6_self_assessor_3 = $row['guest_rooms_9_6_1_A'] + $row['guest_rooms_9_6_1_B'];
			$guest_rooms_9_7_self_assessor_3 = $row['guest_rooms_9_7_1_A'] + $row['guest_rooms_9_7_1_B'] + $row['guest_rooms_9_7_1_C'] + $row['guest_rooms_9_7_1_D'] + $row['guest_rooms_9_7_1_E'];
			$guest_rooms_9_8_self_assessor_3 = $row['guest_rooms_9_8_1_A'] + $row['guest_rooms_9_8_1_B'] + $row['guest_rooms_9_8_1_C'] + $row['guest_rooms_9_8_1_D'] + $row['guest_rooms_9_8_1_E'];
			$guest_rooms_9_9_self_assessor_3 = $row['guest_rooms_9_9_1_A'] + $row['guest_rooms_9_9_1_B_a'] + $row['guest_rooms_9_9_1_B_b'] + $row['guest_rooms_9_9_1_B_c'] + $row['guest_rooms_9_9_1_B_d'] + $row['guest_rooms_9_9_1_B_e'] + $row['guest_rooms_9_9_1_B_f'] + $row['guest_rooms_9_9_1_C_a'] + $row['guest_rooms_9_9_1_C_b'] + $row['guest_rooms_9_9_1_C_c'] + $row['guest_rooms_9_9_1_D'];
			$guest_rooms_9_10_self_assessor_3 = $row['guest_rooms_9_10_1_A'] + $row['guest_rooms_9_10_1_B'];
			$guest_rooms_9_11_self_assessor_3 = $row['guest_rooms_9_11_1_A_a'] + $row['guest_rooms_9_11_1_A_b'] + $row['guest_rooms_9_11_1_A_c'] + $row['guest_rooms_9_11_1_A_d'] + $row['guest_rooms_9_11_1_A_e'] + $row['guest_rooms_9_11_1_B_a'] + $row['guest_rooms_9_11_1_B_b'] + $row['guest_rooms_9_11_1_B'] + $row['guest_rooms_9_11_1_C'];
			$guest_rooms_9_12_self_assessor_3 = $row['guest_rooms_9_12_1_A'] + $row['guest_rooms_9_12_1_B'] + $row['guest_rooms_9_12_1_C'] + $row['guest_rooms_9_12_1_D'] + $row['guest_rooms_9_12_1_E'] + $row['guest_rooms_9_12_1_F'] + $row['guest_rooms_9_12_1_G'];
			$guest_rooms_9_13_self_assessor_3 = $row['guest_rooms_9_13_1_A'] + $row['guest_rooms_9_13_1_B'] + $row['guest_rooms_9_13_1_C'];
			$guest_rooms_9_14_self_assessor_3 = $row['guest_rooms_9_14_1_A'] + $row['guest_rooms_9_14_1_B_a'] + $row['guest_rooms_9_14_1_B_b'] + $row['guest_rooms_9_14_1_B_c'] + $row['guest_rooms_9_14_1_C'];
			$guest_rooms_9_15_self_assessor_3 = $row['guest_rooms_9_15_1_A_a'] + $row['guest_rooms_9_15_1_A_b'] + $row['guest_rooms_9_15_1_A_c'] + $row['guest_rooms_9_15_1_A_d'] + $row['guest_rooms_9_15_1_A_e'] + $row['guest_rooms_9_15_1_A_f'] + $row['guest_rooms_9_15_1_A_g'] + $row['guest_rooms_9_15_1_A_h'] + $row['guest_rooms_9_15_1_A_i'] + $row['guest_rooms_9_15_1_A_j'] + $row['guest_rooms_9_15_1_A_k'] + $row['guest_rooms_9_15_1_A_l'] + $row['guest_rooms_9_15_1_A_m'] + $row['guest_rooms_9_15_1_A_n'] + $row['guest_rooms_9_15_1_A_o'] + $row['guest_rooms_9_15_1_A_p'] + $row['guest_rooms_9_15_1_A_q'] + $row['guest_rooms_9_15_1_B'] + $row['guest_rooms_9_15_1_C'];
			$output['guest_rooms_9_1_self_assessor_3'] = $guest_rooms_9_1_self_assessor_3;
			$output['guest_rooms_9_2_self_assessor_3'] = $guest_rooms_9_2_self_assessor_3;
			$output['guest_rooms_9_3_self_assessor_3'] = $guest_rooms_9_3_self_assessor_3;
			$output['guest_rooms_9_4_self_assessor_3'] = $guest_rooms_9_4_self_assessor_3;
			$output['guest_rooms_9_5_self_assessor_3'] = $guest_rooms_9_5_self_assessor_3;
			$output['guest_rooms_9_6_self_assessor_3'] = $guest_rooms_9_6_self_assessor_3;
			$output['guest_rooms_9_7_self_assessor_3'] = $guest_rooms_9_7_self_assessor_3;
			$output['guest_rooms_9_8_self_assessor_3'] = $guest_rooms_9_8_self_assessor_3;
			$output['guest_rooms_9_9_self_assessor_3'] = $guest_rooms_9_9_self_assessor_3;
			$output['guest_rooms_9_10_self_assessor_3'] = $guest_rooms_9_10_self_assessor_3;
			$output['guest_rooms_9_11_self_assessor_3'] = $guest_rooms_9_11_self_assessor_3;
			$output['guest_rooms_9_12_self_assessor_3'] = $guest_rooms_9_12_self_assessor_3;
			$output['guest_rooms_9_13_self_assessor_3'] = $guest_rooms_9_13_self_assessor_3;
			$output['guest_rooms_9_14_self_assessor_3'] = $guest_rooms_9_14_self_assessor_3;
			$output['guest_rooms_9_15_self_assessor_3'] = $guest_rooms_9_15_self_assessor_3;
			$output['guest_rooms_9_0_self_assessor_3'] = $guest_rooms_9_1_self_assessor_3 + $guest_rooms_9_2_self_assessor_3 + $guest_rooms_9_3_self_assessor_3 + $guest_rooms_9_4_self_assessor_3 + $guest_rooms_9_5_self_assessor_3 + $guest_rooms_9_6_self_assessor_3 + $guest_rooms_9_7_self_assessor_3 + $guest_rooms_9_8_self_assessor_3 + $guest_rooms_9_9_self_assessor_3 + $guest_rooms_9_10_self_assessor_3 + $guest_rooms_9_11_self_assessor_3 + $guest_rooms_9_12_self_assessor_3 + $guest_rooms_9_13_self_assessor_3 + $guest_rooms_9_14_self_assessor_3 + $guest_rooms_9_15_self_assessor_3;
		 
			//GUEST BATHROOMS
			$guest_bathrooms_10_1_self_assessor_3 = $row['guest_bathrooms_10_1_1_A'] + 0;
			$guest_bathrooms_10_2_self_assessor_3 = $row['guest_bathrooms_10_2_1_A'] + 0;
			$guest_bathrooms_10_3_self_assessor_3 = $row['guest_bathrooms_10_3_1_A_a'] + $row['guest_bathrooms_10_3_1_A_b'] + $row['guest_bathrooms_10_3_1_A_c'] + $row['guest_bathrooms_10_3_1_A_d'] + $row['guest_bathrooms_10_3_1_A_e'] + $row['guest_bathrooms_10_3_1_A_f'] + $row['guest_bathrooms_10_3_1_A_g'] + $row['guest_bathrooms_10_3_1_A_h'] + $row['guest_bathrooms_10_3_1_A_i'] + $row['guest_bathrooms_10_3_1_A_j'] + $row['guest_bathrooms_10_3_1_A_k'] + $row['guest_bathrooms_10_3_1_A_l'] + $row['guest_bathrooms_10_3_1_A_m'] + $row['guest_bathrooms_10_3_1_A_n'] + $row['guest_bathrooms_10_3_1_A_o'] + $row['guest_bathrooms_10_3_1_A_p'] + $row['guest_bathrooms_10_3_1_A_q'] + $row['guest_bathrooms_10_3_1_A_r'] + $row['guest_bathrooms_10_3_1_A_s'] + $row['guest_bathrooms_10_3_1_A_t'] + $row['guest_bathrooms_10_3_1_A_u'] + $row['guest_bathrooms_10_3_1_A_v'] + $row['guest_bathrooms_10_3_1_A_w'] + $row['guest_bathrooms_10_3_1_B'] + $row['guest_bathrooms_10_3_1_C'] + $row['guest_bathrooms_10_3_1_D'] + $row['guest_bathrooms_10_3_1_E']+ $row['guest_bathrooms_10_3_1_F'];
			$guest_bathrooms_10_4_self_assessor_3 = $row['guest_bathrooms_10_4_1_A'] + $row['guest_bathrooms_10_4_1_B'] + $row['guest_bathrooms_10_4_1_C'] + $row['guest_bathrooms_10_4_1_D'] + $row['guest_bathrooms_10_4_1_E'] + $row['guest_bathrooms_10_4_1_F'];
			$guest_bathrooms_10_5_self_assessor_3 = $row['guest_bathrooms_10_5_1_A_a'] + $row['guest_bathrooms_10_5_1_A_b'] + $row['guest_bathrooms_10_5_1_A_c'] + $row['guest_bathrooms_10_5_1_A_d'] + $row['guest_bathrooms_10_5_1_A_e'] + $row['guest_bathrooms_10_5_1_B'] + $row['guest_bathrooms_10_5_1_C'] + $row['guest_bathrooms_10_5_1_D'] + $row['guest_bathrooms_10_5_1_E'] + $row['guest_bathrooms_10_5_1_F'];
			$guest_bathrooms_10_6_self_assessor_3 = $row['guest_bathrooms_10_6_1_A'] + $row['guest_bathrooms_10_6_1_B'] + $row['guest_bathrooms_10_6_1_C'];
			$guest_bathrooms_10_7_self_assessor_3 = $row['guest_bathrooms_10_7_1_A'] + $row['guest_bathrooms_10_7_1_B'] + $row['guest_bathrooms_10_7_1_C'] + $row['guest_bathrooms_10_7_1_D'];
			$guest_bathrooms_10_8_self_assessor_3 = $row['guest_bathrooms_10_8_1_A_a'] + $row['guest_bathrooms_10_8_1_A_b'] + $row['guest_bathrooms_10_8_1_A_c'] + $row['guest_bathrooms_10_8_1_A_d'] + $row['guest_bathrooms_10_8_1_A_e'] + $row['guest_bathrooms_10_8_1_A_f'] + $row['guest_bathrooms_10_8_1_A_g'] + $row['guest_bathrooms_10_8_1_B'] + $row['guest_bathrooms_10_8_1_C'];
			$guest_bathrooms_10_9_self_assessor_3 = $row['guest_bathrooms_10_9_1_A'] + $row['guest_bathrooms_10_9_1_B'];
			$output['guest_bathrooms_10_1_self_assessor_3'] = $guest_bathrooms_10_1_self_assessor_3;
			$output['guest_bathrooms_10_2_self_assessor_3'] = $guest_bathrooms_10_2_self_assessor_3;
			$output['guest_bathrooms_10_3_self_assessor_3'] = $guest_bathrooms_10_3_self_assessor_3;
			$output['guest_bathrooms_10_4_self_assessor_3'] = $guest_bathrooms_10_4_self_assessor_3;
			$output['guest_bathrooms_10_5_self_assessor_3'] = $guest_bathrooms_10_5_self_assessor_3;
			$output['guest_bathrooms_10_6_self_assessor_3'] = $guest_bathrooms_10_6_self_assessor_3;
			$output['guest_bathrooms_10_7_self_assessor_3'] = $guest_bathrooms_10_7_self_assessor_3;
			$output['guest_bathrooms_10_8_self_assessor_3'] = $guest_bathrooms_10_8_self_assessor_3;
			$output['guest_bathrooms_10_9_self_assessor_3'] = $guest_bathrooms_10_9_self_assessor_3;
			$output['guest_bathrooms_10_0_self_assessor_3'] = $guest_bathrooms_10_1_self_assessor_3+$guest_bathrooms_10_2_self_assessor_3+$guest_bathrooms_10_3_self_assessor_3+$guest_bathrooms_10_4_self_assessor_3+$guest_bathrooms_10_5_self_assessor_3+$guest_bathrooms_10_6_self_assessor_3+$guest_bathrooms_10_7_self_assessor_3+$guest_bathrooms_10_8_self_assessor_3+$guest_bathrooms_10_9_self_assessor_3;

			//SUITES
			
			$suites_11_1_self_assessor_3 = $row['suites_11_1_1_A'] + 0;
			$suites_11_2_self_assessor_3 = $row['suites_11_2_1_A'] + $row['suites_11_2_1_B'] + $row['suites_11_2_1_C'];
			$suites_11_3_self_assessor_3 = $row['suites_11_3_1_A_a'] + $row['suites_11_3_1_A_b'] + $row['suites_11_3_1_A_c'] + $row['suites_11_3_1_A_d'];
			$suites_11_4_self_assessor_3 = $row['suites_11_4_1_A'] + $row['suites_11_4_1_B'];
			$suites_11_5_self_assessor_3 = $row['suites_11_5_1_A_a'] + $row['suites_11_5_1_A_b'] + $row['suites_11_5_1_B_a'] + $row['suites_11_5_1_B_b'] + $row['suites_11_5_1_B_c'] + $row['suites_11_5_1_B_d'] + $row['suites_11_5_1_B_e'] + $row['suites_11_5_1_B_f'] + $row['suites_11_5_1_B_g'] + $row['suites_11_5_1_B_h'] + $row['suites_11_5_1_B_i'] + $row['suites_11_5_1_B_j'] + $row['suites_11_5_1_B_k'] + $row['suites_11_5_1_B_l'] + $row['suites_11_5_1_B_m'] + $row['suites_11_5_1_B_n'] + $row['suites_11_5_1_B_o'] + $row['suites_11_5_1_B_p'] + $row['suites_11_5_1_B_q'] + $row['suites_11_5_1_B_r'] + $row['suites_11_5_1_C'] + $row['suites_11_5_1_D'] + $row['suites_11_5_1_E'] + $row['suites_11_5_1_F'] + $row['suites_11_5_1_G'];
			$suites_11_6_self_assessor_3 = $row['suites_11_6_1_A'] + $row['suites_11_6_1_B'] + $row['suites_11_6_1_C'] + $row['suites_11_6_1_D'] + $row['suites_11_6_1_E'];
			$suites_11_7_self_assessor_3 = $row['suites_11_7_1_A'] + $row['suites_11_7_1_B_a'] + $row['suites_11_7_1_B_b'] + $row['suites_11_7_1_B_c'] + $row['suites_11_7_1_B_d'] + $row['suites_11_7_1_C'] + $row['suites_11_7_1_D'];
			$suites_11_8_self_assessor_3 = $row['suites_11_8_1_A'] + $row['suites_11_8_1_B_a'] + $row['suites_11_8_1_B_b'] + $row['suites_11_8_1_B_c'] + $row['suites_11_8_1_B_d'] + $row['suites_11_8_1_B_e'] + $row['suites_11_8_1_B_f'] + $row['suites_11_8_1_B_g'] + $row['suites_11_8_1_B_h'] + $row['suites_11_8_1_B_i'] + $row['suites_11_8_1_C_a'] + $row['suites_11_8_1_C_b'] + $row['suites_11_8_1_D'];
			$suites_11_9_self_assessor_3 = $row['suites_11_9_1_A'] + $row['suites_11_9_1_B'];
			$suites_11_10_self_assessor_3 = $row['suites_11_10_1_A_a'] + $row['suites_11_10_1_A_b'] + $row['suites_11_10_1_A_c'] + $row['suites_11_10_1_A_d'] + $row['suites_11_10_1_A_e'] + $row['suites_11_10_1_B_a'] + $row['suites_11_10_1_B_b'] + $row['suites_11_10_1_B_c'] + $row['suites_11_10_1_B_d'] + $row['suites_11_10_1_C'];
			$suites_11_11_self_assessor_3 = $row['suites_11_11_1_A'] + $row['suites_11_11_1_B'] + $row['suites_11_11_1_C_a'] + $row['suites_11_11_1_C_b'] + $row['suites_11_11_1_C_c'] + $row['suites_11_11_1_D'] + $row['suites_11_11_1_E'] + $row['suites_11_11_1_F'] + $row['suites_11_11_1_G'];
			$suites_11_12_self_assessor_3 = $row['suites_11_12_1_A_a'] + $row['suites_11_12_1_A_b'] + $row['suites_11_12_1_A_c'] + $row['suites_11_12_1_A_d'] + $row['suites_11_12_1_A_e'] + $row['suites_11_12_1_A_f'] + $row['suites_11_12_1_A_g'] + $row['suites_11_12_1_A_h'] + $row['suites_11_12_1_A_i'] + $row['suites_11_12_1_A_j'] + $row['suites_11_12_1_A_k'] + $row['suites_11_12_1_A_l'] + $row['suites_11_12_1_A_m'] + $row['suites_11_12_1_A_n'] + $row['suites_11_12_1_A_o'] + $row['suites_11_12_1_A_p'] + $row['suites_11_12_1_A_q'] + $row['suites_11_12_1_A_r'] + $row['suites_11_12_1_A_s'] + $row['suites_11_12_1_A_t'] + $row['suites_11_12_1_A_u'] + $row['suites_11_12_1_A_v'] + $row['suites_11_12_1_B'] + $row['suites_11_12_1_C'];
			$suites_11_13_self_assessor_3 = $row['suites_11_13_1_A'] + $row['suites_11_13_1_B'];
			$suites_11_14_self_assessor_3 = $row['suites_11_14_1_A'] + $row['suites_11_14_1_B_a'] + $row['suites_11_14_1_B_b'] + $row['suites_11_14_1_B_c'] + $row['suites_11_14_1_C'];
			$suites_11_15_self_assessor_3 = $row['suites_11_15_1_A'] + 0;
			$suites_11_16_self_assessor_3 = $row['suites_11_16_1_A_a'] + $row['suites_11_16_1_A_b'] + $row['suites_11_16_1_A_c'] + $row['suites_11_16_1_A_d'] + $row['suites_11_16_1_A_e'] + $row['suites_11_16_1_A_f'] + $row['suites_11_16_1_A_g'] + $row['suites_11_16_1_A_h'] + $row['suites_11_16_1_A_i'] + $row['suites_11_16_1_A_j'] + $row['suites_11_16_1_A_k'] + $row['suites_11_16_1_A_l'] + $row['suites_11_16_1_A_m'] + $row['suites_11_16_1_A_n'] + $row['suites_11_16_1_A_o'] + $row['suites_11_16_1_A_p'] + $row['suites_11_16_1_A_q'] + $row['suites_11_16_1_A_r'] + $row['suites_11_16_1_A_s'] + $row['suites_11_16_1_A_t'] + $row['suites_11_16_1_A_u'] + $row['suites_11_16_1_A_v'] + $row['suites_11_16_1_A_w'] + $row['suites_11_16_1_A_x'] + $row['suites_11_16_1_B'] + $row['suites_11_16_1_C'] + $row['suites_11_16_1_D'] + $row['suites_11_16_1_E'] + $row['suites_11_16_1_F'];
			$suites_11_17_self_assessor_3 = $row['suites_11_17_1_A_a'] + $row['suites_11_17_1_A_b'] + $row['suites_11_17_1_A_c'] + $row['suites_11_17_1_A_d'] + $row['suites_11_17_1_A_e'] + $row['suites_11_17_1_A_f'] + $row['suites_11_17_1_A_g'] + $row['suites_11_17_1_A_h'] + $row['suites_11_17_1_A_i'] + $row['suites_11_17_1_A_j'] + $row['suites_11_17_1_A_k'] + $row['suites_11_17_1_A_l'] + $row['suites_11_17_1_B'] + $row['suites_11_17_1_C'];
			$suites_11_18_self_assessor_3 = $row['suites_11_18_1_A'] + $row['suites_11_18_1_B'] + $row['suites_11_18_1_C'] + $row['suites_11_18_1_D'] + $row['suites_11_18_1_E'] + $row['suites_11_18_1_F'];
			$suites_11_19_self_assessor_3 = $row['suites_11_19_1_A_a'] + $row['suites_11_19_1_A_b'] + $row['suites_11_19_1_A_c'] + $row['suites_11_19_1_A_d'] + $row['suites_11_19_1_A_e'] + $row['suites_11_19_1_B'] + $row['suites_11_19_1_C'] + $row['suites_11_19_1_D'] + $row['suites_11_19_1_E'] + $row['suites_11_19_1_F'];
			$suites_11_20_self_assessor_3 = $row['suites_11_20_1_A'] + $row['suites_11_20_1_B'] + $row['suites_11_20_1_C'];
			$suites_11_21_self_assessor_3 = $row['suites_11_21_1_A'] + $row['suites_11_21_1_B'] + $row['suites_11_21_1_C'];
			$output['suites_11_1_self_assessor_3'] = $suites_11_1_self_assessor_3;
			$output['suites_11_2_self_assessor_3'] = $suites_11_2_self_assessor_3;
			$output['suites_11_3_self_assessor_3'] = $suites_11_3_self_assessor_3;
			$output['suites_11_4_self_assessor_3'] = $suites_11_4_self_assessor_3;
			$output['suites_11_5_self_assessor_3'] = $suites_11_5_self_assessor_3;
			$output['suites_11_6_self_assessor_3'] = $suites_11_6_self_assessor_3;
			$output['suites_11_7_self_assessor_3'] = $suites_11_7_self_assessor_3;
			$output['suites_11_8_self_assessor_3'] = $suites_11_8_self_assessor_3;
			$output['suites_11_9_self_assessor_3'] = $suites_11_9_self_assessor_3;
			$output['suites_11_10_self_assessor_3'] = $suites_11_10_self_assessor_3;
			$output['suites_11_11_self_assessor_3'] = $suites_11_11_self_assessor_3;
			$output['suites_11_12_self_assessor_3'] = $suites_11_12_self_assessor_3;
			$output['suites_11_13_self_assessor_3'] = $suites_11_13_self_assessor_3;
			$output['suites_11_14_self_assessor_3'] = $suites_11_14_self_assessor_3;
			$output['suites_11_15_self_assessor_3'] = $suites_11_15_self_assessor_3;
			$output['suites_11_16_self_assessor_3'] = $suites_11_16_self_assessor_3;
			$output['suites_11_17_self_assessor_3'] = $suites_11_17_self_assessor_3;
			$output['suites_11_18_self_assessor_3'] = $suites_11_18_self_assessor_3;
			$output['suites_11_19_self_assessor_3'] = $suites_11_19_self_assessor_3;
			$output['suites_11_20_self_assessor_3'] = $suites_11_20_self_assessor_3;
			$output['suites_11_21_self_assessor_3'] = $suites_11_21_self_assessor_3;
			$output['suites_11_0_self_assessor_3'] = $suites_11_1_self_assessor_3 + $suites_11_2_self_assessor_3 + $suites_11_3_self_assessor_3 + $suites_11_4_self_assessor_3 + $suites_11_5_self_assessor_3 + $suites_11_6_self_assessor_3 + $suites_11_7_self_assessor_3 + $suites_11_8_self_assessor_3 + $suites_11_9_self_assessor_3 + $suites_11_10_self_assessor_3 + $suites_11_11_self_assessor_3 + $suites_11_12_self_assessor_3 + $suites_11_13_self_assessor_3 + $suites_11_14_self_assessor_3 + $suites_11_15_self_assessor_3 + $suites_11_16_self_assessor_3 + $suites_11_17_self_assessor_3 + $suites_11_18_self_assessor_3 + $suites_11_19_self_assessor_3 + $suites_11_20_self_assessor_3 + $suites_11_21_self_assessor_3;
	 
	 
			//HYGIENE AND SANITATION
			
			$hygiene_and_sanitation_12_1_self_assessor_3 = $row['hygiene_and_sanitation_12_1_1_A']+$row['hygiene_and_sanitation_12_1_1_B']+$row['hygiene_and_sanitation_12_1_1_C']+$row['hygiene_and_sanitation_12_1_1_D_a']+$row['hygiene_and_sanitation_12_1_1_D_b']+$row['hygiene_and_sanitation_12_1_1_D_c']+$row['hygiene_and_sanitation_12_1_1_D_d']+$row['hygiene_and_sanitation_12_1_1_D_e']+$row['hygiene_and_sanitation_12_1_1_D_f']+$row['hygiene_and_sanitation_12_1_1_D_g']+$row['hygiene_and_sanitation_12_1_1_D_h']+$row['hygiene_and_sanitation_12_1_1_E']+$row['hygiene_and_sanitation_12_1_1_F']+$row['hygiene_and_sanitation_12_1_1_G']+$row['hygiene_and_sanitation_12_1_1_H']+$row['hygiene_and_sanitation_12_1_1_I_a']+$row['hygiene_and_sanitation_12_1_1_I_b']+$row['hygiene_and_sanitation_12_1_1_I_c']+$row['hygiene_and_sanitation_12_1_1_I_d']+$row['hygiene_and_sanitation_12_1_1_I_e']+$row['hygiene_and_sanitation_12_1_1_J']+$row['hygiene_and_sanitation_12_1_1_K']+$row['hygiene_and_sanitation_12_1_1_L'];
			$hygiene_and_sanitation_12_2_self_assessor_3 = $row['hygiene_and_sanitation_12_2_1_A']+$row['hygiene_and_sanitation_12_2_1_B']+$row['hygiene_and_sanitation_12_2_1_C']+$row['hygiene_and_sanitation_12_2_1_D']+$row['hygiene_and_sanitation_12_2_1_E_a']+$row['hygiene_and_sanitation_12_2_1_E_b']+$row['hygiene_and_sanitation_12_2_1_E_c']+$row['hygiene_and_sanitation_12_2_1_E_d']+$row['hygiene_and_sanitation_12_2_1_E_e']+$row['hygiene_and_sanitation_12_2_1_E_f']+$row['hygiene_and_sanitation_12_2_1_E_g']+$row['hygiene_and_sanitation_12_2_1_E_h']+$row['hygiene_and_sanitation_12_2_1_E_i']+$row['hygiene_and_sanitation_12_2_1_F']+$row['hygiene_and_sanitation_12_2_1_G']+$row['hygiene_and_sanitation_12_2_1_H_a']+$row['hygiene_and_sanitation_12_2_1_H_b']+$row['hygiene_and_sanitation_12_2_1_H_c']+$row['hygiene_and_sanitation_12_2_1_H_d']+$row['hygiene_and_sanitation_12_2_1_I']+$row['hygiene_and_sanitation_12_2_1_J'];
			$hygiene_and_sanitation_12_3_self_assessor_3 = $row['hygiene_and_sanitation_12_3_1_A']+$row['hygiene_and_sanitation_12_3_1_B']+$row['hygiene_and_sanitation_12_3_1_C']+$row['hygiene_and_sanitation_12_3_1_D']+$row['hygiene_and_sanitation_12_3_1_E']+$row['hygiene_and_sanitation_12_3_1_F'];
			$hygiene_and_sanitation_12_4_self_assessor_3 = $row['hygiene_and_sanitation_12_4_1_A']+$row['hygiene_and_sanitation_12_4_1_B']+$row['hygiene_and_sanitation_12_4_1_C'];
			$hygiene_and_sanitation_12_5_self_assessor_3 = $row['hygiene_and_sanitation_12_5_1_A']+$row['hygiene_and_sanitation_12_5_1_B'];
			$hygiene_and_sanitation_12_6_self_assessor_3 = $row['hygiene_and_sanitation_12_6_1_A']+$row['hygiene_and_sanitation_12_6_1_B_a']+$row['hygiene_and_sanitation_12_6_1_B_b']+$row['hygiene_and_sanitation_12_6_1_C'];
			$hygiene_and_sanitation_12_7_self_assessor_3 = $row['hygiene_and_sanitation_12_7_1_A']+$row['hygiene_and_sanitation_12_7_1_B'];
			$output['hygiene_and_sanitation_12_1_self_assessor_3'] = $hygiene_and_sanitation_12_1_self_assessor_3;
			$output['hygiene_and_sanitation_12_2_self_assessor_3'] = $hygiene_and_sanitation_12_2_self_assessor_3;
			$output['hygiene_and_sanitation_12_3_self_assessor_3'] = $hygiene_and_sanitation_12_3_self_assessor_3;
			$output['hygiene_and_sanitation_12_4_self_assessor_3'] = $hygiene_and_sanitation_12_4_self_assessor_3;
			$output['hygiene_and_sanitation_12_5_self_assessor_3'] = $hygiene_and_sanitation_12_5_self_assessor_3;
			$output['hygiene_and_sanitation_12_6_self_assessor_3'] = $hygiene_and_sanitation_12_6_self_assessor_3;
			$output['hygiene_and_sanitation_12_7_self_assessor_3'] = $hygiene_and_sanitation_12_7_self_assessor_3;
			$output['hygiene_and_sanitation_12_0_self_assessor_3'] = $hygiene_and_sanitation_12_1_self_assessor_3 + $hygiene_and_sanitation_12_2_self_assessor_3 + $hygiene_and_sanitation_12_3_self_assessor_3 + $hygiene_and_sanitation_12_4_self_assessor_3 + $hygiene_and_sanitation_12_5_self_assessor_3 + $hygiene_and_sanitation_12_6_self_assessor_3 + $hygiene_and_sanitation_12_7_self_assessor_3;

			//SAFETY AND SECURITY
			
			$safety_and_security_13_1_self_assessor_3 = $row['safety_and_security_13_1_1_A'] + $row['safety_and_security_13_1_1_B'] + $row['safety_and_security_13_1_1_C'] + $row['safety_and_security_13_1_1_D'] + $row['safety_and_security_13_1_1_E'] + $row['safety_and_security_13_1_1_F_a'] + $row['safety_and_security_13_1_1_F_b'] + $row['safety_and_security_13_1_1_F_c'] + $row['safety_and_security_13_1_1_F_d'] + $row['safety_and_security_13_1_1_F_e'] + $row['safety_and_security_13_1_1_F_f'] + $row['safety_and_security_13_1_1_F_g'] + $row['safety_and_security_13_1_1_G'] + $row['safety_and_security_13_1_1_H'] + $row['safety_and_security_13_1_1_I'] + $row['safety_and_security_13_1_1_J'];
			$safety_and_security_13_2_self_assessor_3 = $row['safety_and_security_13_2_1_A'] + $row['safety_and_security_13_2_1_B'];
			$safety_and_security_13_3_self_assessor_3 = $row['safety_and_security_13_3_1_A'] + $row['safety_and_security_13_3_1_B'] + $row['safety_and_security_13_3_1_C'] + $row['safety_and_security_13_3_1_D'] + $row['safety_and_security_13_3_1_E'] + $row['safety_and_security_13_3_1_F'] + $row['safety_and_security_13_3_1_G'] + $row['safety_and_security_13_3_1_H'];
			$safety_and_security_13_4_self_assessor_3 = $row['safety_and_security_13_4_1_A'] + $row['safety_and_security_13_4_1_B'] + $row['safety_and_security_13_4_1_C'] + $row['safety_and_security_13_4_1_D'] + $row['safety_and_security_13_4_1_E'];
			$safety_and_security_13_5_self_assessor_3 = $row['safety_and_security_13_5_1_A'] + $row['safety_and_security_13_5_1_B'] + $row['safety_and_security_13_5_1_C'] + $row['safety_and_security_13_5_1_D'] + $row['safety_and_security_13_5_1_E'];
			$output['safety_and_security_13_1_self_assessor_3'] = $safety_and_security_13_1_self_assessor_3;
			$output['safety_and_security_13_2_self_assessor_3'] = $safety_and_security_13_2_self_assessor_3;
			$output['safety_and_security_13_3_self_assessor_3'] = $safety_and_security_13_3_self_assessor_3;
			$output['safety_and_security_13_4_self_assessor_3'] = $safety_and_security_13_4_self_assessor_3;
			$output['safety_and_security_13_5_self_assessor_3'] = $safety_and_security_13_5_self_assessor_3;
			$output['safety_and_security_13_0_self_assessor_3'] = $safety_and_security_13_1_self_assessor_3 + $safety_and_security_13_2_self_assessor_3 + $safety_and_security_13_3_self_assessor_3 + $safety_and_security_13_4_self_assessor_3 + $safety_and_security_13_5_self_assessor_3;
			
			//SUNDRY SERVICES

			$sundry_services_14_1_self_assessor_3 = $row['sundry_services_14_1_1_A'] + $row['sundry_services_14_1_1_B'] + $row['sundry_services_14_1_1_C'];
			$sundry_services_14_2_self_assessor_3 = $row['sundry_services_14_2_1_A'] + 0;
			$sundry_services_14_3_self_assessor_3 = $row['sundry_services_14_3_1_A'] + 0;
			$sundry_services_14_4_self_assessor_3 = $row['sundry_services_14_4_1_A'] + 0;
			$sundry_services_14_5_self_assessor_3 = $row['sundry_services_14_5_1_A'] + $row['sundry_services_14_5_1_B'] + $row['sundry_services_14_5_1_C'] + $row['sundry_services_14_5_1_D'];
			$output['sundry_services_14_1_self_assessor_3'] = $sundry_services_14_1_self_assessor_3;
			$output['sundry_services_14_2_self_assessor_3'] = $sundry_services_14_2_self_assessor_3;
			$output['sundry_services_14_3_self_assessor_3'] = $sundry_services_14_3_self_assessor_3;
			$output['sundry_services_14_4_self_assessor_3'] = $sundry_services_14_4_self_assessor_3;
			$output['sundry_services_14_5_self_assessor_3'] = $sundry_services_14_5_self_assessor_3;
			$output['sundry_services_14_0_self_assessor_3'] = $sundry_services_14_1_self_assessor_3 + $sundry_services_14_2_self_assessor_3 + $sundry_services_14_3_self_assessor_3 + $sundry_services_14_4_self_assessor_3 + $sundry_services_14_5_self_assessor_3;
		
			//HUMAN RESOURCES

			$human_resources_15_1_self_assessor_3 = $row['human_resources_15_1_1_A'] + $row['human_resources_15_1_1_B_a'] + $row['human_resources_15_1_1_B_b'] + $row['human_resources_15_1_1_B_c'] + $row['human_resources_15_1_1_B_d'] + $row['human_resources_15_1_1_B_e'] + $row['human_resources_15_1_1_B_f'];
			$human_resources_15_2_self_assessor_3 = $row['human_resources_15_2_1_A'] + $row['human_resources_15_2_1_B'];
			$human_resources_15_3_self_assessor_3 = $row['human_resources_15_3_1_A'] + $row['human_resources_15_3_1_B'];
			$human_resources_15_4_self_assessor_3 = $row['human_resources_15_4_1_A'] + $row['human_resources_15_4_1_B'] + $row['human_resources_15_4_1_C'];
			$human_resources_15_5_self_assessor_3 = $row['human_resources_15_5_1_A_a'] + $row['human_resources_15_5_1_A_b'] + $row['human_resources_15_5_1_A_c'] + $row['human_resources_15_5_1_B_a'] + $row['human_resources_15_5_1_B_b'] + $row['human_resources_15_5_1_B_c'] + $row['human_resources_15_5_1_C_a'] + $row['human_resources_15_5_1_C_b'] + $row['human_resources_15_5_1_C_c'];
			$human_resources_15_6_self_assessor_3 = $row['human_resources_15_6_1_A'] + 0;
			$human_resources_15_7_self_assessor_3 = $row['human_resources_15_7_1_A'] + $row['human_resources_15_7_1_B'] + $row['human_resources_15_7_1_C'] + $row['human_resources_15_7_1_D'];
			$human_resources_15_8_self_assessor_3 = $row['human_resources_15_8_1_A'] + $row['human_resources_15_8_1_B'] + $row['human_resources_15_8_1_C'];
			$human_resources_15_9_self_assessor_3 = $row['human_resources_15_9_1_A'] + $row['human_resources_15_9_1_B'] + $row['human_resources_15_9_1_C'] + $row['human_resources_15_9_1_D'] + $row['human_resources_15_9_1_E'] + $row['human_resources_15_9_1_F_a'] + $row['human_resources_15_9_1_F_b'] + $row['human_resources_15_9_1_F_c'];
			$output['human_resources_15_1_self_assessor_3'] = $human_resources_15_1_self_assessor_3;
			$output['human_resources_15_2_self_assessor_3'] = $human_resources_15_2_self_assessor_3;
			$output['human_resources_15_3_self_assessor_3'] = $human_resources_15_3_self_assessor_3;
			$output['human_resources_15_4_self_assessor_3'] = $human_resources_15_4_self_assessor_3;
			$output['human_resources_15_5_self_assessor_3'] = $human_resources_15_5_self_assessor_3;
			$output['human_resources_15_6_self_assessor_3'] = $human_resources_15_6_self_assessor_3;
			$output['human_resources_15_7_self_assessor_3'] = $human_resources_15_7_self_assessor_3;
			$output['human_resources_15_8_self_assessor_3'] = $human_resources_15_8_self_assessor_3;
			$output['human_resources_15_9_self_assessor_3'] = $human_resources_15_9_self_assessor_3;
			$output['human_resources_15_0_self_assessor_3'] = $human_resources_15_1_self_assessor_3 + $human_resources_15_2_self_assessor_3 + $human_resources_15_3_self_assessor_3 + $human_resources_15_4_self_assessor_3 + $human_resources_15_5_self_assessor_3 + $human_resources_15_6_self_assessor_3 + $human_resources_15_7_self_assessor_3 + $human_resources_15_8_self_assessor_3 + $human_resources_15_9_self_assessor_3;
			
			//GENERAL
			
			$general_16_1_self_assessor_3 = $row['general_16_1_1_A'] + 0;
			$general_16_2_self_assessor_3 = $row['general_16_2_1_A'] + $row['general_16_2_1_B_a'] + $row['general_16_2_1_B_b'] + $row['general_16_2_1_B_c'] + $row['general_16_2_1_B_d'] + $row['general_16_2_1_B_e'] + $row['general_16_2_1_C'];
			$general_16_3_self_assessor_3 = $row['general_16_3_1_A_a'] + $row['general_16_3_1_A_b'] + $row['general_16_3_1_A_c'] + $row['general_16_3_1_B'] + $row['general_16_3_1_C_a'] + $row['general_16_3_1_C_b'] + $row['general_16_3_1_C_c'] + $row['general_16_3_1_C_d'] + $row['general_16_3_1_C_e'] + $row['general_16_3_1_D_a'] + $row['general_16_3_1_D_b'] + $row['general_16_3_1_E'];
			$general_16_4_self_assessor_3 = $row['general_16_4_1_A'] + $row['general_16_4_1_B'];
			$general_16_5_self_assessor_3 = $row['general_16_5_1_A'] + $row['general_16_5_1_B'];
			$general_16_6_self_assessor_3 = $row['general_16_6_1_A'] + $row['general_16_6_1_B'];
			$general_16_7_self_assessor_3 = $row['general_16_7_1_A'] + $row['general_16_7_1_B'];
			$general_16_8_self_assessor_3 = $row['general_16_8_1_A'] + $row['general_16_8_1_B'] + $row['general_16_8_1_C'];
			$general_16_9_self_assessor_3 = $row['general_16_9_1_A'] + $row['general_16_9_1_B'] + $row['general_16_9_1_C'] + $row['general_16_9_1_D'];
			$general_16_10_self_assessor_3 = $row['general_16_10_1_A'] + $row['general_16_10_1_B'] + $row['general_16_10_1_C'];
			$general_16_11_self_assessor_3 = $row['general_16_11_1_A'] + $row['general_16_11_1_B'] + $row['general_16_11_1_C'] + $row['general_16_11_1_D_a'] + $row['general_16_11_1_D_b'] + $row['general_16_11_1_D_c'] + $row['general_16_11_1_D_d'] + $row['general_16_11_1_D_e'] + $row['general_16_11_1_E'] + $row['general_16_11_1_F'] + $row['general_16_11_1_G'] + $row['general_16_11_1_H'];
			$general_16_12_self_assessor_3 = $row['general_16_12_1_A'] + 0;
			$general_16_13_self_assessor_3 = $row['general_16_13_1_A'] + $row['general_16_13_1_B_a'] + $row['general_16_13_1_B_b'] + $row['general_16_13_1_B_c'] + $row['general_16_13_1_B_d'] + $row['general_16_13_1_B_e'] + $row['general_16_13_1_C'] + $row['general_16_13_1_D'] + $row['general_16_13_1_E'];
			$output['general_16_1_self_assessor_3'] = $general_16_1_self_assessor_3;
			$output['general_16_2_self_assessor_3'] = $general_16_1_self_assessor_3;
			$output['general_16_3_self_assessor_3'] = $general_16_1_self_assessor_3;
			$output['general_16_4_self_assessor_3'] = $general_16_1_self_assessor_3;
			$output['general_16_5_self_assessor_3'] = $general_16_1_self_assessor_3;
			$output['general_16_6_self_assessor_3'] = $general_16_6_self_assessor_3;
			$output['general_16_7_self_assessor_3'] = $general_16_7_self_assessor_3;
			$output['general_16_8_self_assessor_3'] = $general_16_8_self_assessor_3;
			$output['general_16_9_self_assessor_3'] = $general_16_9_self_assessor_3;
			$output['general_16_10_self_assessor_3'] = $general_16_10_self_assessor_3;
			$output['general_16_11_self_assessor_3'] = $general_16_11_self_assessor_3;
			$output['general_16_12_self_assessor_3'] = $general_16_12_self_assessor_3;
			$output['general_16_13_self_assessor_3'] = $general_16_13_self_assessor_3;
			$output['general_16_0_self_assessor_3'] = $general_16_1_self_assessor_3 + $general_16_2_self_assessor_3 + $general_16_3_self_assessor_3 + $general_16_4_self_assessor_3 + $general_16_5_self_assessor_3 + $general_16_6_self_assessor_3 + $general_16_7_self_assessor_3 + $general_16_8_self_assessor_3 + $general_16_9_self_assessor_3 + $general_16_10_self_assessor_3 + $general_16_11_self_assessor_3 + $general_16_12_self_assessor_3 + $general_16_13_self_assessor_3;		
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