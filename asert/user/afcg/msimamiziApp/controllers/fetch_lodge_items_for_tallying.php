<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));


	$message = '';
	$connection_error = '';
	$output = array();
	$assessment_id = $form_data->assessment_id;
	
	
	//// SELF_SELF ////
	
	$query = "SELECT * FROM afcg_assessment_lodge WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_self'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			$lodge_location_1_1_self_self = $row['lodge_location_1_1_1_A'] + $row['lodge_location_1_1_1_B'] + $row['lodge_location_1_1_1_C'] + $row['lodge_location_1_1_1_D'] + $row['lodge_location_1_1_1_E'] + $row['lodge_location_1_1_1_F'] + $row['lodge_location_1_1_1_G'] + $row['lodge_location_1_1_1_H'] + $row['lodge_location_1_1_1_I'];
			$lodge_location_1_2_self_self = $row['lodge_location_1_2_1_A'] + $row['lodge_location_1_2_1_B'] + $row['lodge_location_1_2_1_C'] + $row['lodge_location_1_2_1_D_a'] + $row['lodge_location_1_2_1_D_b'] + $row['lodge_location_1_2_1_D_c'] + $row['lodge_location_1_2_1_D_d'] + $row['lodge_location_1_2_1_E'] + $row['lodge_location_1_2_1_F'] + $row['lodge_location_1_2_1_G_a'] + $row['lodge_location_1_2_1_G_b'] + $row['lodge_location_1_2_1_G_c'] + $row['lodge_location_1_2_1_H'] + $row['lodge_location_1_2_1_I'] + $row['lodge_location_1_2_1_J'] + $row['lodge_location_1_2_1_K'] + $row['lodge_location_1_2_1_L'] + $row['lodge_location_1_2_1_M'] + $row['lodge_location_1_2_1_N'];
			$output['lodge_location_1_1_self_self'] = $lodge_location_1_1_self_self;
			$output['lodge_location_1_2_self_self'] = $lodge_location_1_2_self_self;
			$output['lodge_location_1_0_self_self'] = $lodge_location_1_1_self_self + $lodge_location_1_2_self_self;

						

			//BUILDING 2.0
			//2.1
			$lodge_building_2_1_self_self = $row['lodge_building_2_1_1_A'] + $row['lodge_building_2_1_1_B'] + $row['lodge_building_2_1_1_C'] + $row['lodge_building_2_1_1_D'] + $row['lodge_building_2_1_1_E'] + $row['lodge_building_2_1_1_F'] + $row['lodge_building_2_1_1_G'] + $row['lodge_building_2_1_1_H'] + $row['lodge_building_2_1_1_I'] + $row['lodge_building_2_1_1_J'] + $row['lodge_building_2_1_1_K'];
			$lodge_building_2_2_self_self = $row['lodge_building_2_2_1_A'] + 0;
			$lodge_building_2_3_self_self = $row['lodge_building_2_3_1_A'] + $row['lodge_building_2_3_1_B'] + $row['lodge_building_2_3_1_C'] + $row['lodge_building_2_3_1_D'] + $row['lodge_building_2_3_1_E'] + $row['lodge_building_2_3_1_F'] + $row['lodge_building_2_3_1_G'];
			$lodge_building_2_4_self_self = $row['lodge_building_2_4_1_A'] + $row['lodge_building_2_4_1_B'];
			$output['lodge_building_2_1_self_self'] = $lodge_building_2_1_self_self;
			$output['lodge_building_2_2_self_self'] = $lodge_building_2_2_self_self;
			$output['lodge_building_2_3_self_self'] = $lodge_building_2_3_self_self;
			$output['lodge_building_2_4_self_self'] = $lodge_building_2_4_self_self;
			$output['lodge_building_2_0_self_self'] = $lodge_building_2_1_self_self + $lodge_building_2_2_self_self + $lodge_building_2_3_self_self + $lodge_building_2_4_self_self;



			
			//FRONT OFFICE 3.0
			$lodge_front_office_3_1_self_self = $row['lodge_front_office_3_1_1_A'] + $row['lodge_front_office_3_1_1_B'] + $row['lodge_front_office_3_1_1_C'] + $row['lodge_front_office_3_1_1_D'] + $row['lodge_front_office_3_1_1_E'] + $row['lodge_front_office_3_1_1_F'];
			$lodge_front_office_3_2_self_self = $row['lodge_front_office_3_2_1_A'] + $row['lodge_front_office_3_2_1_B_a'] + $row['lodge_front_office_3_2_1_B_b'] + $row['lodge_front_office_3_2_1_B_c'] + $row['lodge_front_office_3_2_1_C_a'] + $row['lodge_front_office_3_2_1_C_b'] + $row['lodge_front_office_3_2_1_C_c'] + $row['lodge_front_office_3_2_1_D_a'] + $row['lodge_front_office_3_2_1_D_b'] + $row['lodge_front_office_3_2_1_D_c'] + $row['lodge_front_office_3_2_1_D_d'];
			$lodge_front_office_3_3_self_self = $row['lodge_front_office_3_3_1_A'] + $row['lodge_front_office_3_3_1_B'];
			$lodge_front_office_3_4_self_self = $row['lodge_front_office_3_4_1_A_a'] + $row['lodge_front_office_3_4_1_A_b'] + $row['lodge_front_office_3_4_1_A_c'] + $row['lodge_front_office_3_4_1_A_d'];
			$lodge_front_office_3_5_self_self = $row['lodge_front_office_3_5_1_A'] + $row['lodge_front_office_3_5_1_B'] + $row['lodge_front_office_3_5_1_C'] + $row['lodge_front_office_3_5_1_D'];
			$lodge_front_office_3_6_self_self = $row['lodge_front_office_3_6_1_A'] + $row['lodge_front_office_3_6_1_B'];
			$lodge_front_office_3_7_self_self = $row['lodge_front_office_3_7_1_A'] + $row['lodge_front_office_3_7_1_B'] + $row['lodge_front_office_3_7_1_C'];
			$lodge_front_office_3_8_self_self = $row['lodge_front_office_3_8_1_A_a'] + $row['lodge_front_office_3_8_1_A_b'] + $row['lodge_front_office_3_8_1_A_c'] + $row['lodge_front_office_3_8_1_B_a'] + $row['lodge_front_office_3_8_1_B_b'] + $row['lodge_front_office_3_8_1_B_c'];
			$lodge_front_office_3_9_self_self = $row['lodge_front_office_3_9_1_A'] + $row['lodge_front_office_3_9_1_B'] + $row['lodge_front_office_3_9_1_C'];
			$output['lodge_front_office_3_1_self_self'] = $lodge_front_office_3_1_self_self;
			$output['lodge_front_office_3_2_self_self'] = $lodge_front_office_3_2_self_self;
			$output['lodge_front_office_3_3_self_self'] = $lodge_front_office_3_3_self_self;
			$output['lodge_front_office_3_4_self_self'] = $lodge_front_office_3_4_self_self;
			$output['lodge_front_office_3_5_self_self'] = $lodge_front_office_3_5_self_self;
			$output['lodge_front_office_3_6_self_self'] = $lodge_front_office_3_6_self_self;
			$output['lodge_front_office_3_7_self_self'] = $lodge_front_office_3_7_self_self;
			$output['lodge_front_office_3_8_self_self'] = $lodge_front_office_3_8_self_self;
			$output['lodge_front_office_3_9_self_self'] = $lodge_front_office_3_9_self_self;
			$output['lodge_front_office_3_0_self_self'] = $lodge_front_office_3_1_self_self + $lodge_front_office_3_2_self_self + $lodge_front_office_3_3_self_self + $lodge_front_office_3_4_self_self + $lodge_front_office_3_5_self_self + $lodge_front_office_3_6_self_self + $lodge_front_office_3_7_self_self + $lodge_front_office_3_8_self_self + $lodge_front_office_3_9_self_self;

			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lodge_lobby_lounge_other_public_areas_4_1_self_self = $row['lodge_lobby_lounge_other_public_areas_4_1_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_2_self_self = $row['lodge_lobby_lounge_other_public_areas_4_2_1_A'];
			$lodge_lobby_lounge_other_public_areas_4_3_self_self = $row['lodge_lobby_lounge_other_public_areas_4_3_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_4_self_self = $row['lodge_lobby_lounge_other_public_areas_4_4_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_F'];
			$lodge_lobby_lounge_other_public_areas_4_5_self_self = $row['lodge_lobby_lounge_other_public_areas_4_5_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_5_1_B'];
			$lodge_lobby_lounge_other_public_areas_4_6_self_self = $row['lodge_lobby_lounge_other_public_areas_4_6_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_7_self_self = $row['lodge_lobby_lounge_other_public_areas_4_7_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_8_self_self = $row['lodge_lobby_lounge_other_public_areas_4_8_1_A'];
			$output['lodge_lobby_lounge_other_public_areas_4_1_self_self'] = $lodge_lobby_lounge_other_public_areas_4_1_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_2_self_self'] = $lodge_lobby_lounge_other_public_areas_4_2_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_3_self_self'] = $lodge_lobby_lounge_other_public_areas_4_3_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_4_self_self'] = $lodge_lobby_lounge_other_public_areas_4_4_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_5_self_self'] = $lodge_lobby_lounge_other_public_areas_4_5_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_6_self_self'] = $lodge_lobby_lounge_other_public_areas_4_6_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_7_self_self'] = $lodge_lobby_lounge_other_public_areas_4_7_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_8_self_self'] = $lodge_lobby_lounge_other_public_areas_4_8_self_self;
			$output['lodge_lobby_lounge_other_public_areas_4_0_self_self'] = $lodge_lobby_lounge_other_public_areas_4_1_self_self + $lodge_lobby_lounge_other_public_areas_4_2_self_self + $lodge_lobby_lounge_other_public_areas_4_3_self_self + $lodge_lobby_lounge_other_public_areas_4_4_self_self + $lodge_lobby_lounge_other_public_areas_4_5_self_self + $lodge_lobby_lounge_other_public_areas_4_6_self_self + $lodge_lobby_lounge_other_public_areas_4_7_self_self + $lodge_lobby_lounge_other_public_areas_4_8_self_self;

			//FUNCTION ROOMS 5.0
			$lodge_function_rooms_5_1_self_self = $row['lodge_function_rooms_5_1_1_A'] + $row['lodge_function_rooms_5_1_1_B'] + $row['lodge_function_rooms_5_1_1_C'] + $row['lodge_function_rooms_5_1_1_D'] + $row['lodge_function_rooms_5_1_1_E'] + $row['lodge_function_rooms_5_1_1_F'] + $row['lodge_function_rooms_5_1_1_G'] + $row['lodge_function_rooms_5_1_1_H'] + $row['lodge_function_rooms_5_1_1_I'] + $row['lodge_function_rooms_5_1_1_J'] + $row['lodge_function_rooms_5_1_1_K'] + $row['lodge_function_rooms_5_1_1_L'];
			$output['lodge_function_rooms_5_1_self_self'] = $lodge_function_rooms_5_1_self_self;
			$output['lodge_function_rooms_5_0_self_self'] = $lodge_function_rooms_5_1_self_self;
			
			//RESTAURANTS
			$lodge_restaurants_6_1_self_self = $row['lodge_restaurants_6_1_1_A'] + $row['lodge_restaurants_6_1_1_B'] + $row['lodge_restaurants_6_1_1_C'] + $row['lodge_restaurants_6_1_1_D'] + $row['lodge_restaurants_6_1_1_E'];
			$lodge_restaurants_6_2_self_self = $row['lodge_restaurants_6_2_1_A'] + $row['lodge_restaurants_6_2_1_B'] + $row['lodge_restaurants_6_2_1_C'] + $row['lodge_restaurants_6_2_1_D'] + $row['lodge_restaurants_6_2_1_E'] + $row['lodge_restaurants_6_2_1_F'] + $row['lodge_restaurants_6_2_1_G'] + $row['lodge_restaurants_6_2_1_H'] + $row['lodge_restaurants_6_2_1_I'];
			$lodge_restaurants_6_3_self_self = $row['lodge_restaurants_6_3_1_A'] + $row['lodge_restaurants_6_3_1_B'] + $row['lodge_restaurants_6_3_1_C'] + $row['lodge_restaurants_6_3_1_D'];
			$lodge_restaurants_6_4_self_self = $row['lodge_restaurants_6_4_1_A'] + $row['lodge_restaurants_6_4_1_B'] + $row['lodge_restaurants_6_4_1_C'] + $row['lodge_restaurants_6_4_1_D'];
			$lodge_restaurants_6_5_self_self = $row['lodge_restaurants_6_5_1_A'] + $row['lodge_restaurants_6_5_1_B'] + $row['lodge_restaurants_6_5_1_C'] + $row['lodge_restaurants_6_5_1_D'] + $row['lodge_restaurants_6_5_1_E'] + $row['lodge_restaurants_6_5_1_F'] + $row['lodge_restaurants_6_5_1_G'] + $row['lodge_restaurants_6_5_1_H'];
			$lodge_restaurants_6_6_self_self = $row['lodge_restaurants_6_6_1_A'] + $row['lodge_restaurants_6_6_1_B'] + $row['lodge_restaurants_6_6_1_C'] + $row['lodge_restaurants_6_6_1_D'] + $row['lodge_restaurants_6_6_1_E'] + $row['lodge_restaurants_6_6_1_F_a'] + $row['lodge_restaurants_6_6_1_F_b'] + $row['lodge_restaurants_6_6_1_F_c'] + $row['lodge_restaurants_6_6_1_F_d'] + $row['lodge_restaurants_6_6_1_G'] + $row['lodge_restaurants_6_6_1_H_a'] + $row['lodge_restaurants_6_6_1_H_b'] + $row['lodge_restaurants_6_6_1_H_c'] + $row['lodge_restaurants_6_6_1_I'] + $row['lodge_restaurants_6_6_1_J'];
			$lodge_restaurants_6_7_self_self = $row['lodge_restaurants_6_7_1_A'] + $row['lodge_restaurants_6_7_1_B'] + $row['lodge_restaurants_6_7_1_C'];
			$lodge_restaurants_6_8_self_self = $row['lodge_restaurants_6_8_1_A'] + $row['lodge_restaurants_6_8_1_B'];
			$output['lodge_restaurants_6_1_self_self'] = $lodge_restaurants_6_1_self_self;
			$output['lodge_restaurants_6_2_self_self'] = $lodge_restaurants_6_2_self_self;
			$output['lodge_restaurants_6_3_self_self'] = $lodge_restaurants_6_3_self_self;
			$output['lodge_restaurants_6_4_self_self'] = $lodge_restaurants_6_4_self_self;
			$output['lodge_restaurants_6_5_self_self'] = $lodge_restaurants_6_5_self_self;
			$output['lodge_restaurants_6_6_self_self'] = $lodge_restaurants_6_6_self_self;
			$output['lodge_restaurants_6_7_self_self'] = $lodge_restaurants_6_7_self_self;
			$output['lodge_restaurants_6_8_self_self'] = $lodge_restaurants_6_8_self_self;
			$output['lodge_restaurants_6_0_self_self'] = $lodge_restaurants_6_1_self_self + $lodge_restaurants_6_2_self_self + $lodge_restaurants_6_3_self_self + $lodge_restaurants_6_4_self_self + $lodge_restaurants_6_5_self_self + $lodge_restaurants_6_6_self_self + $lodge_restaurants_6_7_self_self + $lodge_restaurants_6_8_self_self;
			

			//BARS
			$lodge_bar_7_1_self_self = $row['lodge_bar_7_1_1_A'] + $row['lodge_bar_7_1_1_B'] + $row['lodge_bar_7_1_1_C'] + $row['lodge_bar_7_1_1_D_a'] + $row['lodge_bar_7_1_1_D_b'] + $row['lodge_bar_7_1_1_D_c'] + $row['lodge_bar_7_1_1_E'] + $row['lodge_bar_7_1_1_F'] + $row['lodge_bar_7_1_1_G'];
			$lodge_bar_7_2_self_self = $row['lodge_bar_7_2_1_A'] + $row['lodge_bar_7_2_1_B'] + $row['lodge_bar_7_2_1_C'] + $row['lodge_bar_7_2_1_D'] + $row['lodge_bar_7_2_1_E'] + $row['lodge_bar_7_2_1_F'] + $row['lodge_bar_7_2_1_G'] + $row['lodge_bar_7_2_1_H'] + $row['lodge_bar_7_2_1_I'];
			$lodge_bar_7_3_self_self = $row['lodge_bar_7_3_1_A'] + $row['lodge_bar_7_3_1_B'] + $row['lodge_bar_7_3_1_C'] + $row['lodge_bar_7_3_1_D'] + $row['lodge_bar_7_3_1_E'] + $row['lodge_bar_7_3_1_F'];
			$lodge_bar_7_4_self_self = $row['lodge_bar_7_4_1_A'] + $row['lodge_bar_7_4_1_B'] + $row['lodge_bar_7_4_1_C'] + $row['lodge_bar_7_4_1_D'] + $row['lodge_bar_7_4_1_E_a'] + $row['lodge_bar_7_4_1_E_b'] + $row['lodge_bar_7_4_1_E_c'] + $row['lodge_bar_7_4_1_E_d'] + $row['lodge_bar_7_4_1_E_e'] + $row['lodge_bar_7_4_1_E_f'] + $row['lodge_bar_7_4_1_E_g'] + $row['lodge_bar_7_4_1_E_h'] + $row['lodge_bar_7_4_1_F'] + $row['lodge_bar_7_4_1_G'] + $row['lodge_bar_7_4_1_H'] + $row['lodge_bar_7_4_1_I'];
			$lodge_bar_7_5_self_self = $row['lodge_bar_7_5_1_A'] + $row['lodge_bar_7_5_1_B'] + $row['lodge_bar_7_5_1_C'];
			$lodge_bar_7_6_self_self = $row['lodge_bar_7_6_1_A'] + $row['lodge_bar_7_6_1_B'] + $row['lodge_bar_7_6_1_C'];
			$lodge_bar_7_7_self_self = $row['lodge_bar_7_7_1_A'] + $row['lodge_bar_7_7_1_B'] + $row['lodge_bar_7_7_1_C'];
			$output['lodge_bar_7_1_self_self'] = $lodge_bar_7_1_self_self;
			$output['lodge_bar_7_2_self_self'] = $lodge_bar_7_2_self_self;
			$output['lodge_bar_7_3_self_self'] = $lodge_bar_7_3_self_self;
			$output['lodge_bar_7_4_self_self'] = $lodge_bar_7_4_self_self;
			$output['lodge_bar_7_5_self_self'] = $lodge_bar_7_5_self_self;
			$output['lodge_bar_7_6_self_self'] = $lodge_bar_7_6_self_self;
			$output['lodge_bar_7_7_self_self'] = $lodge_bar_7_7_self_self;
			$output['lodge_bar_7_0_self_self'] = $lodge_bar_7_1_self_self + $lodge_bar_7_2_self_self + $lodge_bar_7_3_self_self + $lodge_bar_7_4_self_self + $lodge_bar_7_5_self_self + $lodge_bar_7_6_self_self + $lodge_bar_7_7_self_self;
			
			//KITCHEN			
			$lodge_kitchen_8_1_self_self = $row['lodge_kitchen_8_1_1_A'] + 0;;
			$lodge_kitchen_8_2_self_self = $row['lodge_kitchen_8_2_1_A'] + $row['lodge_kitchen_8_2_1_B'] + $row['lodge_kitchen_8_2_1_C'];
			$lodge_kitchen_8_3_self_self = $row['lodge_kitchen_8_3_1_A'] + $row['lodge_kitchen_8_3_1_B'] + $row['lodge_kitchen_8_3_1_C'];
			$lodge_kitchen_8_4_self_self = $row['lodge_kitchen_8_4_1_A'] + $row['lodge_kitchen_8_4_1_B'] + $row['lodge_kitchen_8_4_1_C'] + $row['lodge_kitchen_8_4_1_D'];
			$lodge_kitchen_8_5_self_self = $row['lodge_kitchen_8_5_1_A'] + $row['lodge_kitchen_8_5_1_B'] + $row['lodge_kitchen_8_5_1_C'] + $row['lodge_kitchen_8_5_1_D'] + $row['lodge_kitchen_8_5_1_E'] + $row['lodge_kitchen_8_5_1_F'] + $row['lodge_kitchen_8_5_1_G'] + $row['lodge_kitchen_8_5_1_H'] + $row['lodge_kitchen_8_5_1_I'];
			$lodge_kitchen_8_6_self_self = $row['lodge_kitchen_8_6_1_A'] + $row['lodge_kitchen_8_6_1_B'] + $row['lodge_kitchen_8_6_1_C'] + $row['lodge_kitchen_8_6_1_D'] + $row['lodge_kitchen_8_6_1_E'] + $row['lodge_kitchen_8_6_1_F'] + $row['lodge_kitchen_8_6_1_G'];
			$lodge_kitchen_8_7_self_self = $row['lodge_kitchen_8_7_1_A'] + $row['lodge_kitchen_8_7_1_B'] + $row['lodge_kitchen_8_7_1_C'] + $row['lodge_kitchen_8_7_1_D'] + $row['lodge_kitchen_8_7_1_E'];
			$lodge_kitchen_8_8_self_self = $row['lodge_kitchen_8_8_1_A'] + $row['lodge_kitchen_8_8_1_B'] + $row['lodge_kitchen_8_8_1_C_a'] + $row['lodge_kitchen_8_8_1_C_b'] + $row['lodge_kitchen_8_8_1_D'] + $row['lodge_kitchen_8_8_1_E'] + $row['lodge_kitchen_8_8_1_F'] + $row['lodge_kitchen_8_8_1_G'] + $row['lodge_kitchen_8_8_1_H'];
			$lodge_kitchen_8_9_self_self = $row['lodge_kitchen_8_9_1_A'] + $row['lodge_kitchen_8_9_1_B'] + $row['lodge_kitchen_8_9_1_C'] + $row['lodge_kitchen_8_9_1_D'] + $row['lodge_kitchen_8_9_1_E'];
			$lodge_kitchen_8_10_self_self = $row['lodge_kitchen_8_10_1_A_a'] + $row['lodge_kitchen_8_10_1_A_b'] + $row['lodge_kitchen_8_10_1_A_c'] + $row['lodge_kitchen_8_10_1_A_d'] + $row['lodge_kitchen_8_10_1_B'] + $row['lodge_kitchen_8_10_1_C'] + $row['lodge_kitchen_8_10_1_D'] + $row['lodge_kitchen_8_10_1_E'] + $row['lodge_kitchen_8_10_1_F'] + $row['lodge_kitchen_8_10_1_G'];
			$lodge_kitchen_8_11_self_self = $row['lodge_kitchen_8_11_1_A_a'] + $row['lodge_kitchen_8_11_1_A_b'] + $row['lodge_kitchen_8_11_1_A_c'] + $row['lodge_kitchen_8_11_1_B'] + $row['lodge_kitchen_8_11_1_C_a'] + $row['lodge_kitchen_8_11_1_C_b'] + $row['lodge_kitchen_8_11_1_C_c'] + $row['lodge_kitchen_8_11_1_C_d'] + $row['lodge_kitchen_8_11_1_C_e'] + $row['lodge_kitchen_8_11_1_D_a'] + $row['lodge_kitchen_8_11_1_D_b'] + $row['lodge_kitchen_8_11_1_E'];
			$lodge_kitchen_8_12_self_self = $row['lodge_kitchen_8_12_1_A'] + $row['lodge_kitchen_8_12_1_B'] + $row['lodge_kitchen_8_12_1_C'];
			$output['lodge_kitchen_8_1_self_self'] = $lodge_kitchen_8_1_self_self;
			$output['lodge_kitchen_8_2_self_self'] = $lodge_kitchen_8_2_self_self;
			$output['lodge_kitchen_8_3_self_self'] = $lodge_kitchen_8_3_self_self;
			$output['lodge_kitchen_8_4_self_self'] = $lodge_kitchen_8_4_self_self;
			$output['lodge_kitchen_8_5_self_self'] = $lodge_kitchen_8_5_self_self;
			$output['lodge_kitchen_8_6_self_self'] = $lodge_kitchen_8_6_self_self;
			$output['lodge_kitchen_8_7_self_self'] = $lodge_kitchen_8_7_self_self;
			$output['lodge_kitchen_8_8_self_self'] = $lodge_kitchen_8_8_self_self;
			$output['lodge_kitchen_8_9_self_self'] = $lodge_kitchen_8_9_self_self;
			$output['lodge_kitchen_8_10_self_self'] = $lodge_kitchen_8_10_self_self;
			$output['lodge_kitchen_8_11_self_self'] = $lodge_kitchen_8_11_self_self;
			$output['lodge_kitchen_8_12_self_self'] = $lodge_kitchen_8_12_self_self;
			$output['lodge_kitchen_8_0_self_self'] = $lodge_kitchen_8_1_self_self + $lodge_kitchen_8_2_self_self + $lodge_kitchen_8_3_self_self + $lodge_kitchen_8_4_self_self + $lodge_kitchen_8_5_self_self + $lodge_kitchen_8_6_self_self + $lodge_kitchen_8_7_self_self + $lodge_kitchen_8_8_self_self + $lodge_kitchen_8_9_self_self + $lodge_kitchen_8_10_self_self + $lodge_kitchen_8_11_self_self + $lodge_kitchen_8_12_self_self;


			//GUEST ROOMS			
			$lodge_guest_rooms_9_1_self_self = $row['lodge_guest_rooms_9_1_1_A'] + 0;
			$lodge_guest_rooms_9_2_self_self = $row['lodge_guest_rooms_9_2_1_A'] + $row['lodge_guest_rooms_9_2_1_B'];
			$lodge_guest_rooms_9_3_self_self = $row['lodge_guest_rooms_9_3_1_A'] + $row['lodge_guest_rooms_9_3_1_B'];
			$lodge_guest_rooms_9_4_self_self = $row['lodge_guest_rooms_9_4_1_A'] + $row['lodge_guest_rooms_9_4_1_B_a'] + $row['lodge_guest_rooms_9_4_1_B_b'] + $row['lodge_guest_rooms_9_4_1_B_c'] + $row['lodge_guest_rooms_9_4_1_B_d'] + $row['lodge_guest_rooms_9_4_1_B_e'] + $row['lodge_guest_rooms_9_4_1_B_f'] + $row['lodge_guest_rooms_9_4_1_B_g'] + $row['lodge_guest_rooms_9_4_1_B_h'] + $row['lodge_guest_rooms_9_4_1_B_i'] + $row['lodge_guest_rooms_9_4_1_B_j'] + $row['lodge_guest_rooms_9_4_1_B_k'] + $row['lodge_guest_rooms_9_4_1_B_l'] + $row['lodge_guest_rooms_9_4_1_B_m'] + $row['lodge_guest_rooms_9_4_1_B_n'] + $row['lodge_guest_rooms_9_4_1_C'] + $row['lodge_guest_rooms_9_4_1_D'] + $row['lodge_guest_rooms_9_4_1_E'] + $row['lodge_guest_rooms_9_4_1_F'] + $row['lodge_guest_rooms_9_4_1_G'];
			$lodge_guest_rooms_9_5_self_self = $row['lodge_guest_rooms_9_5_1_A'] + $row['lodge_guest_rooms_9_5_1_B_a'] + $row['lodge_guest_rooms_9_5_1_B_b'] + $row['lodge_guest_rooms_9_5_1_B_c'] + $row['lodge_guest_rooms_9_5_1_B_d'] + $row['lodge_guest_rooms_9_5_1_C'] + $row['lodge_guest_rooms_9_5_1_D'];
			$lodge_guest_rooms_9_6_self_self = $row['lodge_guest_rooms_9_6_1_A'] + $row['lodge_guest_rooms_9_6_1_B'];
			$lodge_guest_rooms_9_7_self_self = $row['lodge_guest_rooms_9_7_1_A'] + $row['lodge_guest_rooms_9_7_1_B'] + $row['lodge_guest_rooms_9_7_1_C'] + $row['lodge_guest_rooms_9_7_1_D'] + $row['lodge_guest_rooms_9_7_1_E'];
			$lodge_guest_rooms_9_8_self_self = $row['lodge_guest_rooms_9_8_1_A'] + $row['lodge_guest_rooms_9_8_1_B'] + $row['lodge_guest_rooms_9_8_1_C'] + $row['lodge_guest_rooms_9_8_1_D'] + $row['lodge_guest_rooms_9_8_1_E'];
			$lodge_guest_rooms_9_9_self_self = $row['lodge_guest_rooms_9_9_1_A'] + $row['lodge_guest_rooms_9_9_1_B_a'] + $row['lodge_guest_rooms_9_9_1_B_b'] + $row['lodge_guest_rooms_9_9_1_B_c'] + $row['lodge_guest_rooms_9_9_1_B_d'] + $row['lodge_guest_rooms_9_9_1_B_e'] + $row['lodge_guest_rooms_9_9_1_B_f'] + $row['lodge_guest_rooms_9_9_1_C_a'] + $row['lodge_guest_rooms_9_9_1_C_b'] + $row['lodge_guest_rooms_9_9_1_D'];
			$lodge_guest_rooms_9_10_self_self = $row['lodge_guest_rooms_9_10_1_A'] + 0;
			$lodge_guest_rooms_9_11_self_self = $row['lodge_guest_rooms_9_11_1_A_a'] + $row['lodge_guest_rooms_9_11_1_A_b'] + $row['lodge_guest_rooms_9_11_1_A_c'] + $row['lodge_guest_rooms_9_11_1_A_d'] + $row['lodge_guest_rooms_9_11_1_A_e'] + $row['lodge_guest_rooms_9_11_1_B_a'] + $row['lodge_guest_rooms_9_11_1_B_b'] + $row['lodge_guest_rooms_9_11_1_B_c'] + $row['lodge_guest_rooms_9_11_1_B_d'] + $row['lodge_guest_rooms_9_11_1_C'];
			$lodge_guest_rooms_9_12_self_self = $row['lodge_guest_rooms_9_12_1_A'] + $row['lodge_guest_rooms_9_12_1_B'] + $row['lodge_guest_rooms_9_12_1_C'] + $row['lodge_guest_rooms_9_12_1_D'] + $row['lodge_guest_rooms_9_12_1_E'] + $row['lodge_guest_rooms_9_12_1_F'] + $row['lodge_guest_rooms_9_12_1_G'];
			$lodge_guest_rooms_9_13_self_self = $row['lodge_guest_rooms_9_13_1_A'] + $row['lodge_guest_rooms_9_13_1_B'] + $row['lodge_guest_rooms_9_13_1_C'];
			$lodge_guest_rooms_9_14_self_self = $row['lodge_guest_rooms_9_14_1_A'] + $row['lodge_guest_rooms_9_14_1_B_a'] + $row['lodge_guest_rooms_9_14_1_B_b'] + $row['lodge_guest_rooms_9_14_1_B_c'] + $row['lodge_guest_rooms_9_14_1_C'];
			$lodge_guest_rooms_9_15_self_self = $row['lodge_guest_rooms_9_15_1_A_a'] + $row['lodge_guest_rooms_9_15_1_A_b'] + $row['lodge_guest_rooms_9_15_1_A_c'] + $row['lodge_guest_rooms_9_15_1_A_d'] + $row['lodge_guest_rooms_9_15_1_A_e'] + $row['lodge_guest_rooms_9_15_1_A_f'] + $row['lodge_guest_rooms_9_15_1_A_g'] + $row['lodge_guest_rooms_9_15_1_A_h'] + $row['lodge_guest_rooms_9_15_1_A_i'] + $row['lodge_guest_rooms_9_15_1_A_j'] + $row['lodge_guest_rooms_9_15_1_A_k'] + $row['lodge_guest_rooms_9_15_1_A_l'] + $row['lodge_guest_rooms_9_15_1_A_m'] + $row['lodge_guest_rooms_9_15_1_A_n'] + $row['lodge_guest_rooms_9_15_1_A_o'] + $row['lodge_guest_rooms_9_15_1_A_p'] + $row['lodge_guest_rooms_9_15_1_A_q'] + $row['lodge_guest_rooms_9_15_1_B'] + $row['lodge_guest_rooms_9_15_1_C'];
			$output['lodge_guest_rooms_9_1_self_self'] = $lodge_guest_rooms_9_1_self_self;
			$output['lodge_guest_rooms_9_2_self_self'] = $lodge_guest_rooms_9_2_self_self;
			$output['lodge_guest_rooms_9_3_self_self'] = $lodge_guest_rooms_9_3_self_self;
			$output['lodge_guest_rooms_9_7_self_self'] = $lodge_guest_rooms_9_7_self_self;
			$output['lodge_guest_rooms_9_8_self_self'] = $lodge_guest_rooms_9_8_self_self;
			$output['lodge_guest_rooms_9_9_self_self'] = $lodge_guest_rooms_9_9_self_self;
			$output['lodge_guest_rooms_9_10_self_self'] = $lodge_guest_rooms_9_10_self_self;
			$output['lodge_guest_rooms_9_11_self_self'] = $lodge_guest_rooms_9_11_self_self;
			$output['lodge_guest_rooms_9_12_self_self'] = $lodge_guest_rooms_9_12_self_self;
			$output['lodge_guest_rooms_9_13_self_self'] = $lodge_guest_rooms_9_13_self_self;
			$output['lodge_guest_rooms_9_14_self_self'] = $lodge_guest_rooms_9_14_self_self;
			$output['lodge_guest_rooms_9_15_self_self'] = $lodge_guest_rooms_9_15_self_self;
			$output['lodge_guest_rooms_9_0_self_self'] =  $lodge_guest_rooms_9_1_self_self + $lodge_guest_rooms_9_2_self_self + $lodge_guest_rooms_9_3_self_self + $lodge_guest_rooms_9_4_self_self + $lodge_guest_rooms_9_5_self_self + $lodge_guest_rooms_9_6_self_self + $lodge_guest_rooms_9_7_self_self + $lodge_guest_rooms_9_8_self_self + $lodge_guest_rooms_9_9_self_self + $lodge_guest_rooms_9_10_self_self + $lodge_guest_rooms_9_11_self_self + $lodge_guest_rooms_9_12_self_self + $lodge_guest_rooms_9_13_self_self + $lodge_guest_rooms_9_14_self_self + $lodge_guest_rooms_9_15_self_self;


			//GUEST BATHROOMS
			$lodge_guest_bathrooms_10_1_self_self = $row['lodge_guest_bathrooms_10_1_1_A'] + 0;
			$lodge_guest_bathrooms_10_2_self_self = $row['lodge_guest_bathrooms_10_2_1_A'] + 0;
			$lodge_guest_bathrooms_10_3_self_self = $row['lodge_guest_bathrooms_10_3_1_A_a'] + $row['lodge_guest_bathrooms_10_3_1_A_b'] + $row['lodge_guest_bathrooms_10_3_1_A_c'] + $row['lodge_guest_bathrooms_10_3_1_A_d'] + $row['lodge_guest_bathrooms_10_3_1_A_e'] + $row['lodge_guest_bathrooms_10_3_1_A_f'] + $row['lodge_guest_bathrooms_10_3_1_A_g'] + $row['lodge_guest_bathrooms_10_3_1_A_h'] + $row['lodge_guest_bathrooms_10_3_1_A_i'] + $row['lodge_guest_bathrooms_10_3_1_A_j'] + $row['lodge_guest_bathrooms_10_3_1_A_k'] + $row['lodge_guest_bathrooms_10_3_1_A_l'] + $row['lodge_guest_bathrooms_10_3_1_A_m'] + $row['lodge_guest_bathrooms_10_3_1_A_n'] + $row['lodge_guest_bathrooms_10_3_1_A_o'] + $row['lodge_guest_bathrooms_10_3_1_A_p'] + $row['lodge_guest_bathrooms_10_3_1_A_q'] + $row['lodge_guest_bathrooms_10_3_1_A_r'] + $row['lodge_guest_bathrooms_10_3_1_A_s'] + $row['lodge_guest_bathrooms_10_3_1_A_t'] + $row['lodge_guest_bathrooms_10_3_1_A_u'] + $row['lodge_guest_bathrooms_10_3_1_A_v'] + $row['lodge_guest_bathrooms_10_3_1_A_w'] + $row['lodge_guest_bathrooms_10_3_1_B'] + $row['lodge_guest_bathrooms_10_3_1_C'] + $row['lodge_guest_bathrooms_10_3_1_D'] + $row['lodge_guest_bathrooms_10_3_1_E'] + $row['lodge_guest_bathrooms_10_3_1_F'];
			$lodge_guest_bathrooms_10_4_self_self = $row['lodge_guest_bathrooms_10_4_1_A'] + $row['lodge_guest_bathrooms_10_4_1_B'] + $row['lodge_guest_bathrooms_10_4_1_C'] + $row['lodge_guest_bathrooms_10_4_1_D'] + $row['lodge_guest_bathrooms_10_4_1_E'] + $row['lodge_guest_bathrooms_10_4_1_F'];
			$lodge_guest_bathrooms_10_5_self_self = $row['lodge_guest_bathrooms_10_5_1_A_a'] + $row['lodge_guest_bathrooms_10_5_1_A_b'] + $row['lodge_guest_bathrooms_10_5_1_A_c'] + $row['lodge_guest_bathrooms_10_5_1_A_d'] + $row['lodge_guest_bathrooms_10_5_1_A_e'] + $row['lodge_guest_bathrooms_10_5_1_B'] + $row['lodge_guest_bathrooms_10_5_1_C'] + $row['lodge_guest_bathrooms_10_5_1_D'] + $row['lodge_guest_bathrooms_10_5_1_E'] + $row['lodge_guest_bathrooms_10_5_1_F'];
			$lodge_guest_bathrooms_10_6_self_self = $row['lodge_guest_bathrooms_10_6_1_A'] + $row['lodge_guest_bathrooms_10_6_1_B'] + $row['lodge_guest_bathrooms_10_6_1_C'];
			$lodge_guest_bathrooms_10_7_self_self = $row['lodge_guest_bathrooms_10_7_1_A'] + $row['lodge_guest_bathrooms_10_7_1_B'] + $row['lodge_guest_bathrooms_10_7_1_C'] + $row['lodge_guest_bathrooms_10_7_1_D'];
			$lodge_guest_bathrooms_10_8_self_self = $row['lodge_guest_bathrooms_10_8_1_A_a'] + $row['lodge_guest_bathrooms_10_8_1_A_b'] + $row['lodge_guest_bathrooms_10_8_1_A_c'] + $row['lodge_guest_bathrooms_10_8_1_A_d'] + $row['lodge_guest_bathrooms_10_8_1_A_e'] + $row['lodge_guest_bathrooms_10_8_1_A_f'] + $row['lodge_guest_bathrooms_10_8_1_A_g'] + $row['lodge_guest_bathrooms_10_8_1_B'] + $row['lodge_guest_bathrooms_10_8_1_C'];
			$lodge_guest_bathrooms_10_9_self_self = $row['lodge_guest_bathrooms_10_9_1_A'] + $row['lodge_guest_bathrooms_10_9_1_B'];
			$output['lodge_guest_bathrooms_10_1_self_self'] = $lodge_guest_bathrooms_10_1_self_self;
			$output['lodge_guest_bathrooms_10_3_self_self'] = $lodge_guest_bathrooms_10_3_self_self;
			$output['lodge_guest_bathrooms_10_4_self_self'] = $lodge_guest_bathrooms_10_4_self_self;
			$output['lodge_guest_bathrooms_10_5_self_self'] = $lodge_guest_bathrooms_10_5_self_self;
			$output['lodge_guest_bathrooms_10_6_self_self'] = $lodge_guest_bathrooms_10_6_self_self;
			$output['lodge_guest_bathrooms_10_7_self_self'] = $lodge_guest_bathrooms_10_7_self_self;
			$output['lodge_guest_bathrooms_10_8_self_self'] = $lodge_guest_bathrooms_10_8_self_self;
			$output['lodge_guest_bathrooms_10_9_self_self'] = $lodge_guest_bathrooms_10_9_self_self;
			$output['lodge_guest_bathrooms_10_0_self_self'] =  $lodge_guest_bathrooms_10_1_self_self + $lodge_guest_bathrooms_10_2_self_self + $lodge_guest_bathrooms_10_3_self_self + $lodge_guest_bathrooms_10_4_self_self + $lodge_guest_bathrooms_10_5_self_self + $lodge_guest_bathrooms_10_6_self_self + $lodge_guest_bathrooms_10_7_self_self + $lodge_guest_bathrooms_10_8_self_self + $lodge_guest_bathrooms_10_9_self_self;

			//SUITES
			$lodge_suites_11_1_self_self = $row['lodge_suites_11_1_1_A'] + 0;
			$lodge_suites_11_2_self_self = $row['lodge_suites_11_2_1_A'] + $row['lodge_suites_11_2_1_B'];
			$lodge_suites_11_3_self_self = $row['lodge_suites_11_3_1_A_a'] + $row['lodge_suites_11_3_1_A_b'] + $row['lodge_suites_11_3_1_A_c'] + $row['lodge_suites_11_3_1_A_d'];
			$lodge_suites_11_4_self_self = $row['lodge_suites_11_4_1_A'] + $row['lodge_suites_11_4_1_B'];
			$lodge_suites_11_5_self_self = $row['lodge_suites_11_5_1_A_a'] + $row['lodge_suites_11_5_1_A_b'] + $row['lodge_suites_11_5_1_B_a'] + $row['lodge_suites_11_5_1_B_b'] + $row['lodge_suites_11_5_1_B_c'] + $row['lodge_suites_11_5_1_B_d'] + $row['lodge_suites_11_5_1_B_e'] + $row['lodge_suites_11_5_1_B_f'] + $row['lodge_suites_11_5_1_B_g'] + $row['lodge_suites_11_5_1_B_h'] + $row['lodge_suites_11_5_1_B_i'] + $row['lodge_suites_11_5_1_B_j'] + $row['lodge_suites_11_5_1_B_k'] + $row['lodge_suites_11_5_1_B_l'] + $row['lodge_suites_11_5_1_B_m'] + $row['lodge_suites_11_5_1_B_n'] + $row['lodge_suites_11_5_1_B_o'] + $row['lodge_suites_11_5_1_B_p'] + $row['lodge_suites_11_5_1_C'] + $row['lodge_suites_11_5_1_D'] + $row['lodge_suites_11_5_1_E'] + $row['lodge_suites_11_5_1_F'] + $row['lodge_suites_11_5_1_G'];
			$lodge_suites_11_6_self_self = $row['lodge_suites_11_6_1_A'] + $row['lodge_suites_11_6_1_B'] + $row['lodge_suites_11_6_1_C'] + $row['lodge_suites_11_6_1_D'] + $row['lodge_suites_11_6_1_E'];
			$lodge_suites_11_7_self_self = $row['lodge_suites_11_7_1_A'] + $row['lodge_suites_11_7_1_B_a'] + $row['lodge_suites_11_7_1_B_b'] + $row['lodge_suites_11_7_1_B_c'] + $row['lodge_suites_11_7_1_B_d'] + $row['lodge_suites_11_7_1_C'] + $row['lodge_suites_11_7_1_D'];
			$lodge_suites_11_8_self_self = $row['lodge_suites_11_8_1_A'] + $row['lodge_suites_11_8_1_B_a'] + $row['lodge_suites_11_8_1_B_b'] + $row['lodge_suites_11_8_1_B_c'] + $row['lodge_suites_11_8_1_B_d'] + $row['lodge_suites_11_8_1_B_e'] + $row['lodge_suites_11_8_1_B_f'] + $row['lodge_suites_11_8_1_B_g'] + $row['lodge_suites_11_8_1_B_h'] + $row['lodge_suites_11_8_1_B_i'] + $row['lodge_suites_11_8_1_C_a'] + $row['lodge_suites_11_8_1_C_b'] + $row['lodge_suites_11_8_1_D'];
			$lodge_suites_11_9_self_self = $row['lodge_suites_11_9_1_A'] + 0;
			$lodge_suites_11_10_self_self = $row['lodge_suites_11_10_1_A_a'] + $row['lodge_suites_11_10_1_A_b'] + $row['lodge_suites_11_10_1_A_c'] + $row['lodge_suites_11_10_1_A_d'] + $row['lodge_suites_11_10_1_A_e'] + $row['lodge_suites_11_10_1_B_a'] + $row['lodge_suites_11_10_1_B_b'] + $row['lodge_suites_11_10_1_B'] + $row['lodge_suites_11_10_1_C'];
			$lodge_suites_11_11_self_self = $row['lodge_suites_11_11_1_A'] + $row['lodge_suites_11_11_1_B'] + $row['lodge_suites_11_11_1_C'] + $row['lodge_suites_11_11_1_D'] + $row['lodge_suites_11_11_1_E'] + $row['lodge_suites_11_11_1_F'] + $row['lodge_suites_11_11_1_G'];
			$lodge_suites_11_12_self_self = $row['lodge_suites_11_12_1_A_a'] + $row['lodge_suites_11_12_1_A_b'] + $row['lodge_suites_11_12_1_A_c'] + $row['lodge_suites_11_12_1_A_d'] + $row['lodge_suites_11_12_1_A_e'] + $row['lodge_suites_11_12_1_A_f'] + $row['lodge_suites_11_12_1_A_g'] + $row['lodge_suites_11_12_1_A_h'] + $row['lodge_suites_11_12_1_A_i'] + $row['lodge_suites_11_12_1_A_j'] + $row['lodge_suites_11_12_1_A_k'] + $row['lodge_suites_11_12_1_A_l'] + $row['lodge_suites_11_12_1_A_m'] + $row['lodge_suites_11_12_1_A_n'] + $row['lodge_suites_11_12_1_A_o'] + $row['lodge_suites_11_12_1_A_p'] + $row['lodge_suites_11_12_1_A_q'] + $row['lodge_suites_11_12_1_A_r'] + $row['lodge_suites_11_12_1_A_s'] + $row['lodge_suites_11_12_1_A_t'] + $row['lodge_suites_11_12_1_A_u'] + $row['lodge_suites_11_12_1_A_v'] + $row['lodge_suites_11_12_1_B'] + $row['lodge_suites_11_12_1_C'];
			$lodge_suites_11_13_self_self = $row['lodge_suites_11_13_1_A'] + $row['lodge_suites_11_13_1_B'];
			$lodge_suites_11_14_self_self = $row['lodge_suites_11_14_1_A'] + $row['lodge_suites_11_14_1_B_a'] + $row['lodge_suites_11_14_1_B_b'] + $row['lodge_suites_11_14_1_B_c'] + $row['lodge_suites_11_14_1_C'];
			$lodge_suites_11_15_self_self = $row['lodge_suites_11_15_1_A'] + 0;
			$lodge_suites_11_16_self_self = $row['lodge_suites_11_16_1_A_a'] + $row['lodge_suites_11_16_1_A_b'] + $row['lodge_suites_11_16_1_A_c'] + $row['lodge_suites_11_16_1_A_d'] + $row['lodge_suites_11_16_1_A_e'] + $row['lodge_suites_11_16_1_A_f'] + $row['lodge_suites_11_16_1_A_g'] + $row['lodge_suites_11_16_1_A_h'] + $row['lodge_suites_11_16_1_A_i'] + $row['lodge_suites_11_16_1_A_j'] + $row['lodge_suites_11_16_1_A_k'] + $row['lodge_suites_11_16_1_A_l'] + $row['lodge_suites_11_16_1_A_m'] + $row['lodge_suites_11_16_1_A_n'] + $row['lodge_suites_11_16_1_A_o'] + $row['lodge_suites_11_16_1_A_p'] + $row['lodge_suites_11_16_1_A_q'] + $row['lodge_suites_11_16_1_A_r'] + $row['lodge_suites_11_16_1_A_s'] + $row['lodge_suites_11_16_1_A_t'] + $row['lodge_suites_11_16_1_A_u'] + $row['lodge_suites_11_16_1_A_v'] + $row['lodge_suites_11_16_1_B'] + $row['lodge_suites_11_16_1_C'] + $row['lodge_suites_11_16_1_D'] + $row['lodge_suites_11_16_1_E'] + $row['lodge_suites_11_16_1_F'];
			$lodge_suites_11_17_self_self = $row['lodge_suites_11_17_1_A_a'] + $row['lodge_suites_11_17_1_A_b'] + $row['lodge_suites_11_17_1_A_c'] + $row['lodge_suites_11_17_1_A_d'] + $row['lodge_suites_11_17_1_A_e'] + $row['lodge_suites_11_17_1_A_f'] + $row['lodge_suites_11_17_1_A_g'] + $row['lodge_suites_11_17_1_A_h'] + $row['lodge_suites_11_17_1_A_i'] + $row['lodge_suites_11_17_1_A_j'] + $row['lodge_suites_11_17_1_A_k'] + $row['lodge_suites_11_17_1_B'] + $row['lodge_suites_11_17_1_C'];
			$lodge_suites_11_18_self_self = $row['lodge_suites_11_18_1_A'] + $row['lodge_suites_11_18_1_B'] + $row['lodge_suites_11_18_1_C'] + $row['lodge_suites_11_18_1_D'] + $row['lodge_suites_11_18_1_E'] + $row['lodge_suites_11_18_1_F'];
			$lodge_suites_11_19_self_self = $row['lodge_suites_11_19_1_A_a'] + $row['lodge_suites_11_19_1_A_b'] + $row['lodge_suites_11_19_1_A_c'] + $row['lodge_suites_11_19_1_A_d'] + $row['lodge_suites_11_19_1_A_e'] + $row['lodge_suites_11_19_1_B'] + $row['lodge_suites_11_19_1_C'] + $row['lodge_suites_11_19_1_D'] + $row['lodge_suites_11_19_1_E'] + $row['lodge_suites_11_19_1_F'];
			$lodge_suites_11_20_self_self = $row['lodge_suites_11_20_1_A'] + $row['lodge_suites_11_20_1_B'] + $row['lodge_suites_11_20_1_C'];
			$output['lodge_suites_11_1_self_self'] = $lodge_suites_11_1_self_self;
			$output['lodge_suites_11_2_self_self'] = $lodge_suites_11_2_self_self;
			$output['lodge_suites_11_3_self_self'] = $lodge_suites_11_3_self_self;
			$output['lodge_suites_11_4_self_self'] = $lodge_suites_11_4_self_self;
			$output['lodge_suites_11_5_self_self'] = $lodge_suites_11_5_self_self;
			$output['lodge_suites_11_6_self_self'] = $lodge_suites_11_6_self_self;
			$output['lodge_suites_11_7_self_self'] = $lodge_suites_11_7_self_self;
			$output['lodge_suites_11_8_self_self'] = $lodge_suites_11_8_self_self;
			$output['lodge_suites_11_9_self_self'] = $lodge_suites_11_9_self_self;
			$output['lodge_suites_11_10_self_self'] = $lodge_suites_11_10_self_self;
			$output['lodge_suites_11_11_self_self'] = $lodge_suites_11_11_self_self;
			$output['lodge_suites_11_12_self_self'] = $lodge_suites_11_12_self_self;
			$output['lodge_suites_11_13_self_self'] = $lodge_suites_11_13_self_self;
			$output['lodge_suites_11_14_self_self'] = $lodge_suites_11_14_self_self;
			$output['lodge_suites_11_15_self_self'] = $lodge_suites_11_15_self_self;
			$output['lodge_suites_11_16_self_self'] = $lodge_suites_11_16_self_self;
			$output['lodge_suites_11_17_self_self'] = $lodge_suites_11_17_self_self;
			$output['lodge_suites_11_18_self_self'] = $lodge_suites_11_18_self_self;
			$output['lodge_suites_11_19_self_self'] = $lodge_suites_11_19_self_self;
			$output['lodge_suites_11_20_self_self'] = $lodge_suites_11_20_self_self;
			$output['lodge_suites_11_0_self_self'] = $lodge_suites_11_1_self_self + $lodge_suites_11_2_self_self + $lodge_suites_11_3_self_self + $lodge_suites_11_4_self_self + $lodge_suites_11_5_self_self + $lodge_suites_11_6_self_self + $lodge_suites_11_7_self_self + $lodge_suites_11_8_self_self + $lodge_suites_11_9_self_self + $lodge_suites_11_10_self_self + $lodge_suites_11_11_self_self + $lodge_suites_11_12_self_self + $lodge_suites_11_13_self_self + $lodge_suites_11_14_self_self + $lodge_suites_11_15_self_self + $lodge_suites_11_16_self_self + $lodge_suites_11_17_self_self + $lodge_suites_11_18_self_self + $lodge_suites_11_19_self_self + $lodge_suites_11_20_self_self;
			//HYGIENE AND SANITATION
			$lodge_hygiene_and_sanitation_12_1_self_self = $row['lodge_hygiene_and_sanitation_12_1_1_A'] + $row['lodge_hygiene_and_sanitation_12_1_1_B'] + $row['lodge_hygiene_and_sanitation_12_1_1_C'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_f'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_g'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_h'] + $row['lodge_hygiene_and_sanitation_12_1_1_E'] + $row['lodge_hygiene_and_sanitation_12_1_1_F'] + $row['lodge_hygiene_and_sanitation_12_1_1_G'] + $row['lodge_hygiene_and_sanitation_12_1_1_H'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_J'] + $row['lodge_hygiene_and_sanitation_12_1_1_K'] + $row['lodge_hygiene_and_sanitation_12_1_1_L'] + $row['lodge_hygiene_and_sanitation_12_1_1_M'] + $row['lodge_hygiene_and_sanitation_12_1_1_N'];
			$lodge_hygiene_and_sanitation_12_2_self_self = $row['lodge_hygiene_and_sanitation_12_2_1_A'] + $row['lodge_hygiene_and_sanitation_12_2_1_B'] + $row['lodge_hygiene_and_sanitation_12_2_1_C'] + $row['lodge_hygiene_and_sanitation_12_2_1_D'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_e'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_f'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_g'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_h'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_i'] + $row['lodge_hygiene_and_sanitation_12_2_1_F'] + $row['lodge_hygiene_and_sanitation_12_2_1_G'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_I'] + $row['lodge_hygiene_and_sanitation_12_2_1_J'];
			$lodge_hygiene_and_sanitation_12_3_self_self = $row['lodge_hygiene_and_sanitation_12_3_1_A'] + $row['lodge_hygiene_and_sanitation_12_3_1_B'] + $row['lodge_hygiene_and_sanitation_12_3_1_C'] + $row['lodge_hygiene_and_sanitation_12_3_1_D'] + $row['lodge_hygiene_and_sanitation_12_3_1_E'] + $row['lodge_hygiene_and_sanitation_12_3_1_F'] + $row['lodge_hygiene_and_sanitation_12_3_1_G'];
			$lodge_hygiene_and_sanitation_12_4_self_self = $row['lodge_hygiene_and_sanitation_12_4_1_A'] + $row['lodge_hygiene_and_sanitation_12_4_1_B'] + $row['lodge_hygiene_and_sanitation_12_4_1_C'] + $row['lodge_hygiene_and_sanitation_12_4_1_D'];
			$lodge_hygiene_and_sanitation_12_5_self_self = $row['lodge_hygiene_and_sanitation_12_5_1_A'] + $row['lodge_hygiene_and_sanitation_12_5_1_B'];
			$lodge_hygiene_and_sanitation_12_6_self_self = $row['lodge_hygiene_and_sanitation_12_6_1_A'] + $row['lodge_hygiene_and_sanitation_12_6_1_B'] + $row['lodge_hygiene_and_sanitation_12_6_1_C'];
			$lodge_hygiene_and_sanitation_12_7_self_self = $row['lodge_hygiene_and_sanitation_12_7_1_A'] + $row['lodge_hygiene_and_sanitation_12_7_1_B'];
			$output['lodge_hygiene_and_sanitation_12_1_self_self'] = $lodge_hygiene_and_sanitation_12_1_self_self;
			$output['lodge_hygiene_and_sanitation_12_2_self_self'] = $lodge_hygiene_and_sanitation_12_2_self_self;
			$output['lodge_hygiene_and_sanitation_12_3_self_self'] = $lodge_hygiene_and_sanitation_12_3_self_self;
			$output['lodge_hygiene_and_sanitation_12_4_self_self'] = $lodge_hygiene_and_sanitation_12_4_self_self;
			$output['lodge_hygiene_and_sanitation_12_5_self_self'] = $lodge_hygiene_and_sanitation_12_5_self_self;
			$output['lodge_hygiene_and_sanitation_12_6_self_self'] = $lodge_hygiene_and_sanitation_12_6_self_self;
			$output['lodge_hygiene_and_sanitation_12_7_self_self'] = $lodge_hygiene_and_sanitation_12_7_self_self;
			$output['lodge_hygiene_and_sanitation_12_0_self_self'] = $lodge_hygiene_and_sanitation_12_1_self_self + $lodge_hygiene_and_sanitation_12_2_self_self + $lodge_hygiene_and_sanitation_12_3_self_self + $lodge_hygiene_and_sanitation_12_4_self_self + $lodge_hygiene_and_sanitation_12_5_self_self + $lodge_hygiene_and_sanitation_12_6_self_self + $lodge_hygiene_and_sanitation_12_7_self_self;
			

			//SAFETY AND SECURITY
			$lodge_safety_and_security_13_1_self_self = $row['lodge_safety_and_security_13_1_1_A'] + $row['lodge_safety_and_security_13_1_1_B'] + $row['lodge_safety_and_security_13_1_1_C'] + $row['lodge_safety_and_security_13_1_1_D'] + $row['lodge_safety_and_security_13_1_1_E'] + $row['lodge_safety_and_security_13_1_1_F_a'] + $row['lodge_safety_and_security_13_1_1_F_b'] + $row['lodge_safety_and_security_13_1_1_F_c'] + $row['lodge_safety_and_security_13_1_1_F_d'] + $row['lodge_safety_and_security_13_1_1_F_e'] + $row['lodge_safety_and_security_13_1_1_F_f'] + $row['lodge_safety_and_security_13_1_1_F_g'] + $row['lodge_safety_and_security_13_1_1_G'] + $row['lodge_safety_and_security_13_1_1_H'] + $row['lodge_safety_and_security_13_1_1_I'] + $row['lodge_safety_and_security_13_1_1_J'];
			$lodge_safety_and_security_13_2_self_self = $row['lodge_safety_and_security_13_2_1_A'] + $row['lodge_safety_and_security_13_2_1_B'];
			$lodge_safety_and_security_13_3_self_self = $row['lodge_safety_and_security_13_3_1_A'] + $row['lodge_safety_and_security_13_3_1_B'] + $row['lodge_safety_and_security_13_3_1_C'] + $row['lodge_safety_and_security_13_3_1_D'] + $row['lodge_safety_and_security_13_3_1_E'];
			$lodge_safety_and_security_13_4_self_self = $row['lodge_safety_and_security_13_4_1_A'] + $row['lodge_safety_and_security_13_4_1_B'] + $row['lodge_safety_and_security_13_4_1_C'];
			$lodge_safety_and_security_13_5_self_self = $row['lodge_safety_and_security_13_5_1_A'] + $row['lodge_safety_and_security_13_5_1_B'] + $row['lodge_safety_and_security_13_5_1_C'] + $row['lodge_safety_and_security_13_5_1_D'] + $row['lodge_safety_and_security_13_5_1_E'] + $row['lodge_safety_and_security_13_5_1_F'];
			$output['lodge_safety_and_security_13_1_self_self'] = $lodge_safety_and_security_13_1_self_self;
			$output['lodge_safety_and_security_13_2_self_self'] = $lodge_safety_and_security_13_2_self_self;
			$output['lodge_safety_and_security_13_3_self_self'] = $lodge_safety_and_security_13_3_self_self;
			$output['lodge_safety_and_security_13_4_self_self'] = $lodge_safety_and_security_13_4_self_self;
			$output['lodge_safety_and_security_13_5_self_self'] = $lodge_safety_and_security_13_5_self_self;
			$output['lodge_safety_and_security_13_0_self_self'] = $lodge_safety_and_security_13_1_self_self + $lodge_safety_and_security_13_2_self_self + $lodge_safety_and_security_13_3_self_self + $lodge_safety_and_security_13_4_self_self + $lodge_safety_and_security_13_5_self_self;
			
			//SUNDRY SERVICES
			$lodge_sundry_services_14_1_self_self = $row['lodge_sundry_services_14_1_1_A'] + $row['lodge_sundry_services_14_1_1_B'] + $row['lodge_sundry_services_14_1_1_C'];
			$lodge_sundry_services_14_2_self_self = $row['lodge_sundry_services_14_2_1_A'] + 0;
			$lodge_sundry_services_14_3_self_self = $row['lodge_sundry_services_14_3_1_A'] + $row['lodge_sundry_services_14_3_1_B'];
			$lodge_sundry_services_14_4_self_self = $row['lodge_sundry_services_14_4_1_A'] + 0;
			$output['lodge_sundry_services_14_1_self_self'] = $lodge_sundry_services_14_1_self_self;
			$output['lodge_sundry_services_14_2_self_self'] = $lodge_sundry_services_14_2_self_self;
			$output['lodge_sundry_services_14_3_self_self'] = $lodge_sundry_services_14_3_self_self;
			$output['lodge_sundry_services_14_4_self_self'] = $lodge_sundry_services_14_4_self_self;
			$output['lodge_sundry_services_14_0_self_self'] = $lodge_sundry_services_14_1_self_self + $lodge_sundry_services_14_2_self_self + $lodge_sundry_services_14_3_self_self + $lodge_sundry_services_14_4_self_self;


			//HUMAN RESOURCES
			$lodge_human_resources_15_1_self_self = $row['lodge_human_resources_15_1_1_text'] + $row['lodge_human_resources_15_1_1_A'] + $row['lodge_human_resources_15_1_1_B_a'] + $row['lodge_human_resources_15_1_1_B_b'] + $row['lodge_human_resources_15_1_1_B_c'] + $row['lodge_human_resources_15_1_1_B_d'] + $row['lodge_human_resources_15_1_1_B_e'] + $row['lodge_human_resources_15_1_1_B_f'];
			$lodge_human_resources_15_2_self_self = $row['lodge_human_resources_15_2_1_A'] + $row['lodge_human_resources_15_2_1_B'];
			$lodge_human_resources_15_3_self_self = $row['lodge_human_resources_15_3_1_A'] + $row['lodge_human_resources_15_3_1_B'];
			$lodge_human_resources_15_4_self_self = $row['lodge_human_resources_15_4_1_A'] + $row['lodge_human_resources_15_4_1_B'] + $row['lodge_human_resources_15_4_1_C'];
			$lodge_human_resources_15_6_self_self = $row['lodge_human_resources_15_6_1_A'] + 0;
			$lodge_human_resources_15_7_self_self = $row['lodge_human_resources_15_7_1_A'] + $row['lodge_human_resources_15_7_1_B'] + $row['lodge_human_resources_15_7_1_C'] + $row['lodge_human_resources_15_7_1_D'];
			$lodge_human_resources_15_8_self_self = $row['lodge_human_resources_15_8_1_A'] + $row['lodge_human_resources_15_8_1_B'] + $row['lodge_human_resources_15_8_1_C'];
			$lodge_human_resources_15_9_self_self = $row['lodge_human_resources_15_9_1_A'] + $row['lodge_human_resources_15_9_1_B'] + $row['lodge_human_resources_15_9_1_C'] + $row['lodge_human_resources_15_9_1_D'] + $row['lodge_human_resources_15_9_1_E'] + $row['lodge_human_resources_15_9_1_F'];
			$lodge_human_resources_15_10_self_self = $row['lodge_human_resources_15_10_1_A'] + $row['lodge_human_resources_15_10_1_B'] + $row['lodge_human_resources_15_10_1_C'] + $row['lodge_human_resources_15_10_1_D'] + $row['lodge_human_resources_15_10_1_E'] + $row['lodge_human_resources_15_10_1_F'] + $row['lodge_human_resources_15_10_1_G'];
			$lodge_human_resources_15_11_self_self = $row['lodge_human_resources_15_11_1_A_a'] + $row['lodge_human_resources_15_11_1_A_b'] + $row['lodge_human_resources_15_11_1_A_c'] + $row['lodge_human_resources_15_11_1_B_a'] + $row['lodge_human_resources_15_11_1_B_b'] + $row['lodge_human_resources_15_11_1_B_c'];
			$output['lodge_human_resources_15_1_self_self'] = $lodge_human_resources_15_1_self_self;
			$output['lodge_human_resources_15_2_self_self'] = $lodge_human_resources_15_2_self_self;
			$output['lodge_human_resources_15_3_self_self'] = $lodge_human_resources_15_3_self_self;
			$output['lodge_human_resources_15_4_self_self'] = $lodge_human_resources_15_4_self_self;
			$output['lodge_human_resources_15_5_self_self'] = $lodge_human_resources_15_5_self_self;
			$output['lodge_human_resources_15_6_self_self'] = $lodge_human_resources_15_6_self_self;
			$output['lodge_human_resources_15_7_self_self'] = $lodge_human_resources_15_7_self_self;
			$output['lodge_human_resources_15_8_self_self'] = $lodge_human_resources_15_8_self_self;
			$output['lodge_human_resources_15_9_self_self'] = $lodge_human_resources_15_9_self_self;
			$output['lodge_human_resources_15_10_self_self'] = $lodge_human_resources_15_10_self_self;
			$output['lodge_human_resources_15_11_self_self'] = $lodge_human_resources_15_11_self_self;
			$output['lodge_human_resources_15_0_self_self'] = $lodge_human_resources_15_1_self_self + $lodge_human_resources_15_2_self_self + $lodge_human_resources_15_3_self_self + $lodge_human_resources_15_4_self_self + $lodge_human_resources_15_5_self_self + $lodge_human_resources_15_6_self_self + $lodge_human_resources_15_7_self_self + $lodge_human_resources_15_8_self_self + $lodge_human_resources_15_9_self_self + $lodge_human_resources_15_10_self_self + $lodge_human_resources_15_11_self_self;
			

			//GENERAL
			$lodge_general_16_1_self_self = $row['lodge_general_16_1_1_A'] + 0;
			$lodge_general_16_2_self_self = $row['lodge_general_16_2_1_A'] + $row['lodge_general_16_2_1_B'];
			$lodge_general_16_3_self_self = $row['lodge_general_16_3_1_A'] + $row['lodge_general_16_3_1_B_a'] + $row['lodge_general_16_3_1_B_b'] + $row['lodge_general_16_3_1_B_c'] + $row['lodge_general_16_3_1_B_d'] + $row['lodge_general_16_3_1_B_e'] + $row['lodge_general_16_3_1_C_a'] + $row['lodge_general_16_3_1_C_b'] + $row['lodge_general_16_3_1_D'];
			$lodge_general_16_4_self_self = $row['lodge_general_16_4_1_A'] + $row['lodge_general_16_4_1_B'];
			$lodge_general_16_5_self_self = $row['lodge_general_16_5_1_A'] + $row['lodge_general_16_5_1_B'] + $row['lodge_general_16_5_1_C'] + $row['lodge_general_16_5_1_D'] + $row['lodge_general_16_5_1_E'];
			$lodge_general_16_6_self_self = $row['lodge_general_16_6_1_A'] + 0;
			$lodge_general_16_7_self_self = $row['lodge_general_16_7_1_A'] + $row['lodge_general_16_7_1_B'];
			$lodge_general_16_8_self_self = $row['lodge_general_16_8_1_A'] + $row['lodge_general_16_8_1_B'] + $row['lodge_general_16_8_1_C'];
			$lodge_general_16_9_self_self = $row['lodge_general_16_9_1_A'] + $row['lodge_general_16_9_1_B'] + $row['lodge_general_16_9_1_C'] + $row['lodge_general_16_9_1_D_a'] + $row['lodge_general_16_9_1_D_b'] + $row['lodge_general_16_9_1_D_c'] + $row['lodge_general_16_9_1_D_d'] + $row['lodge_general_16_9_1_D_e'] + $row['lodge_general_16_9_1_E'] + $row['lodge_general_16_9_1_F'] + $row['lodge_general_16_9_1_G'] + $row['lodge_general_16_9_1_H'];
			$lodge_general_16_10_self_self = $row['lodge_general_16_10_1_A'] + 0;
			$lodge_general_16_11_self_self = $row['lodge_general_16_11_1_A'] + $row['lodge_general_16_11_1_B_a'] + $row['lodge_general_16_11_1_B_b'] + $row['lodge_general_16_11_1_B_c'] + $row['lodge_general_16_11_1_B_d'] + $row['lodge_general_16_11_1_B_e'] + $row['lodge_general_16_11_1_C'] + $row['lodge_general_16_11_1_D'] + $row['lodge_general_16_11_1_E'];
			$output['lodge_general_16_1_self_self'] = $lodge_general_16_1_self_self;
			$output['lodge_general_16_2_self_self'] = $lodge_general_16_2_self_self;
			$output['lodge_general_16_3_self_self'] = $lodge_general_16_3_self_self;
			$output['lodge_general_16_4_self_self'] = $lodge_general_16_4_self_self;
			$output['lodge_general_16_5_self_self'] = $lodge_general_16_5_self_self;
			$output['lodge_general_16_6_self_self'] = $lodge_general_16_6_self_self;
			$output['lodge_general_16_7_self_self'] = $lodge_general_16_7_self_self;
			$output['lodge_general_16_8_self_self'] = $lodge_general_16_8_self_self;
			$output['lodge_general_16_9_self_self'] = $lodge_general_16_9_self_self;
			$output['lodge_general_16_10_self_self'] = $lodge_general_16_10_self_self;
			$output['lodge_general_16_11_self_self'] = $lodge_general_16_11_self_self;
			$output['lodge_general_16_0_self_self'] = $lodge_human_resources_15_1_self_self + $lodge_human_resources_15_2_self_self + $lodge_human_resources_15_3_self_self + $lodge_human_resources_15_4_self_self + $lodge_human_resources_15_5_self_self + $lodge_human_resources_15_6_self_self + $lodge_human_resources_15_7_self_self + $lodge_human_resources_15_8_self_self + $lodge_human_resources_15_9_self_self + $lodge_human_resources_15_10_self_self + $lodge_human_resources_15_11_self_self + $lodge_general_16_1_self_self + $lodge_general_16_2_self_self + $lodge_general_16_3_self_self + $lodge_general_16_4_self_self + $lodge_general_16_5_self_self + $lodge_general_16_6_self_self + $lodge_general_16_7_self_self + $lodge_general_16_8_self_self + $lodge_general_16_9_self_self + $lodge_general_16_10_self_self + $lodge_general_16_11_self_self;
		}
	}
	
	//// SELF_ASSESSOR_1 ////
	
	$query = "SELECT * FROM afcg_assessment_lodge WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_1'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			$lodge_location_1_1_self_assessor_1 = $row['lodge_location_1_1_1_A'] + $row['lodge_location_1_1_1_B'] + $row['lodge_location_1_1_1_C'] + $row['lodge_location_1_1_1_D'] + $row['lodge_location_1_1_1_E'] + $row['lodge_location_1_1_1_F'] + $row['lodge_location_1_1_1_G'] + $row['lodge_location_1_1_1_H'] + $row['lodge_location_1_1_1_I'];
			$lodge_location_1_2_self_assessor_1 = $row['lodge_location_1_2_1_A'] + $row['lodge_location_1_2_1_B'] + $row['lodge_location_1_2_1_C'] + $row['lodge_location_1_2_1_D_a'] + $row['lodge_location_1_2_1_D_b'] + $row['lodge_location_1_2_1_D_c'] + $row['lodge_location_1_2_1_D_d'] + $row['lodge_location_1_2_1_E'] + $row['lodge_location_1_2_1_F'] + $row['lodge_location_1_2_1_G_a'] + $row['lodge_location_1_2_1_G_b'] + $row['lodge_location_1_2_1_G_c'] + $row['lodge_location_1_2_1_H'] + $row['lodge_location_1_2_1_I'] + $row['lodge_location_1_2_1_J'] + $row['lodge_location_1_2_1_K'] + $row['lodge_location_1_2_1_L'] + $row['lodge_location_1_2_1_M'] + $row['lodge_location_1_2_1_N'];
			$output['lodge_location_1_1_self_assessor_1'] = $lodge_location_1_1_self_assessor_1;
			$output['lodge_location_1_2_self_assessor_1'] = $lodge_location_1_2_self_assessor_1;
			$output['lodge_location_1_0_self_assessor_1'] = $lodge_location_1_1_self_assessor_1 + $lodge_location_1_2_self_assessor_1;

						

			//BUILDING 2.0
			//2.1
			$lodge_building_2_1_self_assessor_1 = $row['lodge_building_2_1_1_A'] + $row['lodge_building_2_1_1_B'] + $row['lodge_building_2_1_1_C'] + $row['lodge_building_2_1_1_D'] + $row['lodge_building_2_1_1_E'] + $row['lodge_building_2_1_1_F'] + $row['lodge_building_2_1_1_G'] + $row['lodge_building_2_1_1_H'] + $row['lodge_building_2_1_1_I'] + $row['lodge_building_2_1_1_J'] + $row['lodge_building_2_1_1_K'];
			$lodge_building_2_2_self_assessor_1 = $row['lodge_building_2_2_1_A'] + 0;
			$lodge_building_2_3_self_assessor_1 = $row['lodge_building_2_3_1_A'] + $row['lodge_building_2_3_1_B'] + $row['lodge_building_2_3_1_C'] + $row['lodge_building_2_3_1_D'] + $row['lodge_building_2_3_1_E'] + $row['lodge_building_2_3_1_F'] + $row['lodge_building_2_3_1_G'];
			$lodge_building_2_4_self_assessor_1 = $row['lodge_building_2_4_1_A'] + $row['lodge_building_2_4_1_B'];
			$output['lodge_building_2_1_self_assessor_1'] = $lodge_building_2_1_self_assessor_1;
			$output['lodge_building_2_2_self_assessor_1'] = $lodge_building_2_2_self_assessor_1;
			$output['lodge_building_2_3_self_assessor_1'] = $lodge_building_2_3_self_assessor_1;
			$output['lodge_building_2_4_self_assessor_1'] = $lodge_building_2_4_self_assessor_1;
			$output['lodge_building_2_0_self_assessor_1'] = $lodge_building_2_1_self_assessor_1 + $lodge_building_2_2_self_assessor_1 + $lodge_building_2_3_self_assessor_1 + $lodge_building_2_4_self_assessor_1;




			//FRONT OFFICE 3.0
			$lodge_front_office_3_1_self_assessor_1 = $row['lodge_front_office_3_1_1_A'] + $row['lodge_front_office_3_1_1_B'] + $row['lodge_front_office_3_1_1_C'] + $row['lodge_front_office_3_1_1_D'] + $row['lodge_front_office_3_1_1_E'] + $row['lodge_front_office_3_1_1_F'];
			$lodge_front_office_3_2_self_assessor_1 = $row['lodge_front_office_3_2_1_A'] + $row['lodge_front_office_3_2_1_B_a'] + $row['lodge_front_office_3_2_1_B_b'] + $row['lodge_front_office_3_2_1_B_c'] + $row['lodge_front_office_3_2_1_C_a'] + $row['lodge_front_office_3_2_1_C_b'] + $row['lodge_front_office_3_2_1_C_c'] + $row['lodge_front_office_3_2_1_D_a'] + $row['lodge_front_office_3_2_1_D_b'] + $row['lodge_front_office_3_2_1_D_c'] + $row['lodge_front_office_3_2_1_D_d'];
			$lodge_front_office_3_3_self_assessor_1 = $row['lodge_front_office_3_3_1_A'] + $row['lodge_front_office_3_3_1_B'];
			$lodge_front_office_3_4_self_assessor_1 = $row['lodge_front_office_3_4_1_A_a'] + $row['lodge_front_office_3_4_1_A_b'] + $row['lodge_front_office_3_4_1_A_c'] + $row['lodge_front_office_3_4_1_A_d'];
			$lodge_front_office_3_5_self_assessor_1 = $row['lodge_front_office_3_5_1_A'] + $row['lodge_front_office_3_5_1_B'] + $row['lodge_front_office_3_5_1_C'] + $row['lodge_front_office_3_5_1_D'];
			$lodge_front_office_3_6_self_assessor_1 = $row['lodge_front_office_3_6_1_A'] + $row['lodge_front_office_3_6_1_B'];
			$lodge_front_office_3_7_self_assessor_1 = $row['lodge_front_office_3_7_1_A'] + $row['lodge_front_office_3_7_1_B'] + $row['lodge_front_office_3_7_1_C'];
			$lodge_front_office_3_8_self_assessor_1 = $row['lodge_front_office_3_8_1_A_a'] + $row['lodge_front_office_3_8_1_A_b'] + $row['lodge_front_office_3_8_1_A_c'] + $row['lodge_front_office_3_8_1_B_a'] + $row['lodge_front_office_3_8_1_B_b'] + $row['lodge_front_office_3_8_1_B_c'];
			$lodge_front_office_3_9_self_assessor_1 = $row['lodge_front_office_3_9_1_A'] + $row['lodge_front_office_3_9_1_B'] + $row['lodge_front_office_3_9_1_C'];
			$output['lodge_front_office_3_1_self_assessor_1'] = $lodge_front_office_3_1_self_assessor_1;
			$output['lodge_front_office_3_2_self_assessor_1'] = $lodge_front_office_3_2_self_assessor_1;
			$output['lodge_front_office_3_3_self_assessor_1'] = $lodge_front_office_3_3_self_assessor_1;
			$output['lodge_front_office_3_4_self_assessor_1'] = $lodge_front_office_3_4_self_assessor_1;
			$output['lodge_front_office_3_5_self_assessor_1'] = $lodge_front_office_3_5_self_assessor_1;
			$output['lodge_front_office_3_6_self_assessor_1'] = $lodge_front_office_3_6_self_assessor_1;
			$output['lodge_front_office_3_7_self_assessor_1'] = $lodge_front_office_3_7_self_assessor_1;
			$output['lodge_front_office_3_8_self_assessor_1'] = $lodge_front_office_3_8_self_assessor_1;
			$output['lodge_front_office_3_9_self_assessor_1'] = $lodge_front_office_3_9_self_assessor_1;
			$output['lodge_front_office_3_0_self_assessor_1'] = $lodge_front_office_3_1_self_assessor_1 + $lodge_front_office_3_2_self_assessor_1 + $lodge_front_office_3_3_self_assessor_1 + $lodge_front_office_3_4_self_assessor_1 + $lodge_front_office_3_5_self_assessor_1 + $lodge_front_office_3_6_self_assessor_1 + $lodge_front_office_3_7_self_assessor_1 + $lodge_front_office_3_8_self_assessor_1 + $lodge_front_office_3_9_self_assessor_1;

			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_1_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_2_1_A'];
			$lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_3_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_4_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_F'];
			$lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_5_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_5_1_B'];
			$lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_6_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_7_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1 = $row['lodge_lobby_lounge_other_public_areas_4_8_1_A'];
			$output['lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1;
			$output['lodge_lobby_lounge_other_public_areas_4_0_self_assessor_1'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_1 + $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_1;

			//FUNCTION ROOMS 5.0
			$lodge_function_rooms_5_1_self_assessor_1 = $row['lodge_function_rooms_5_1_1_A'] + $row['lodge_function_rooms_5_1_1_B'] + $row['lodge_function_rooms_5_1_1_C'] + $row['lodge_function_rooms_5_1_1_D'] + $row['lodge_function_rooms_5_1_1_E'] + $row['lodge_function_rooms_5_1_1_F'] + $row['lodge_function_rooms_5_1_1_G'] + $row['lodge_function_rooms_5_1_1_H'] + $row['lodge_function_rooms_5_1_1_I'] + $row['lodge_function_rooms_5_1_1_J'] + $row['lodge_function_rooms_5_1_1_K'] + $row['lodge_function_rooms_5_1_1_L'];
			$output['lodge_function_rooms_5_1_self_assessor_1'] = $lodge_function_rooms_5_1_self_assessor_1;
			$output['lodge_function_rooms_5_0_self_assessor_1'] = $lodge_function_rooms_5_1_self_assessor_1;

			//RESTAURANTS
			$lodge_restaurants_6_1_self_assessor_1 = $row['lodge_restaurants_6_1_1_A'] + $row['lodge_restaurants_6_1_1_B'] + $row['lodge_restaurants_6_1_1_C'] + $row['lodge_restaurants_6_1_1_D'] + $row['lodge_restaurants_6_1_1_E'];
			$lodge_restaurants_6_2_self_assessor_1 = $row['lodge_restaurants_6_2_1_A'] + $row['lodge_restaurants_6_2_1_B'] + $row['lodge_restaurants_6_2_1_C'] + $row['lodge_restaurants_6_2_1_D'] + $row['lodge_restaurants_6_2_1_E'] + $row['lodge_restaurants_6_2_1_F'] + $row['lodge_restaurants_6_2_1_G'] + $row['lodge_restaurants_6_2_1_H'] + $row['lodge_restaurants_6_2_1_I'];
			$lodge_restaurants_6_3_self_assessor_1 = $row['lodge_restaurants_6_3_1_A'] + $row['lodge_restaurants_6_3_1_B'] + $row['lodge_restaurants_6_3_1_C'] + $row['lodge_restaurants_6_3_1_D'];
			$lodge_restaurants_6_4_self_assessor_1 = $row['lodge_restaurants_6_4_1_A'] + $row['lodge_restaurants_6_4_1_B'] + $row['lodge_restaurants_6_4_1_C'] + $row['lodge_restaurants_6_4_1_D'];
			$lodge_restaurants_6_5_self_assessor_1 = $row['lodge_restaurants_6_5_1_A'] + $row['lodge_restaurants_6_5_1_B'] + $row['lodge_restaurants_6_5_1_C'] + $row['lodge_restaurants_6_5_1_D'] + $row['lodge_restaurants_6_5_1_E'] + $row['lodge_restaurants_6_5_1_F'] + $row['lodge_restaurants_6_5_1_G'] + $row['lodge_restaurants_6_5_1_H'];
			$lodge_restaurants_6_6_self_assessor_1 = $row['lodge_restaurants_6_6_1_A'] + $row['lodge_restaurants_6_6_1_B'] + $row['lodge_restaurants_6_6_1_C'] + $row['lodge_restaurants_6_6_1_D'] + $row['lodge_restaurants_6_6_1_E'] + $row['lodge_restaurants_6_6_1_F_a'] + $row['lodge_restaurants_6_6_1_F_b'] + $row['lodge_restaurants_6_6_1_F_c'] + $row['lodge_restaurants_6_6_1_F_d'] + $row['lodge_restaurants_6_6_1_G'] + $row['lodge_restaurants_6_6_1_H_a'] + $row['lodge_restaurants_6_6_1_H_b'] + $row['lodge_restaurants_6_6_1_H_c'] + $row['lodge_restaurants_6_6_1_I'] + $row['lodge_restaurants_6_6_1_J'];
			$lodge_restaurants_6_7_self_assessor_1 = $row['lodge_restaurants_6_7_1_A'] + $row['lodge_restaurants_6_7_1_B'] + $row['lodge_restaurants_6_7_1_C'];
			$lodge_restaurants_6_8_self_assessor_1 = $row['lodge_restaurants_6_8_1_A'] + $row['lodge_restaurants_6_8_1_B'];
			$output['lodge_restaurants_6_1_self_assessor_1'] = $lodge_restaurants_6_1_self_assessor_1;
			$output['lodge_restaurants_6_2_self_assessor_1'] = $lodge_restaurants_6_2_self_assessor_1;
			$output['lodge_restaurants_6_3_self_assessor_1'] = $lodge_restaurants_6_3_self_assessor_1;
			$output['lodge_restaurants_6_4_self_assessor_1'] = $lodge_restaurants_6_4_self_assessor_1;
			$output['lodge_restaurants_6_5_self_assessor_1'] = $lodge_restaurants_6_5_self_assessor_1;
			$output['lodge_restaurants_6_6_self_assessor_1'] = $lodge_restaurants_6_6_self_assessor_1;
			$output['lodge_restaurants_6_7_self_assessor_1'] = $lodge_restaurants_6_7_self_assessor_1;
			$output['lodge_restaurants_6_8_self_assessor_1'] = $lodge_restaurants_6_8_self_assessor_1;
			$output['lodge_restaurants_6_0_self_assessor_1'] = $lodge_restaurants_6_1_self_assessor_1 + $lodge_restaurants_6_2_self_assessor_1 + $lodge_restaurants_6_3_self_assessor_1 + $lodge_restaurants_6_4_self_assessor_1 + $lodge_restaurants_6_5_self_assessor_1 + $lodge_restaurants_6_6_self_assessor_1 + $lodge_restaurants_6_7_self_assessor_1 + $lodge_restaurants_6_8_self_assessor_1;


			//BARS
			$lodge_bar_7_1_self_assessor_1 = $row['lodge_bar_7_1_1_A'] + $row['lodge_bar_7_1_1_B'] + $row['lodge_bar_7_1_1_C'] + $row['lodge_bar_7_1_1_D_a'] + $row['lodge_bar_7_1_1_D_b'] + $row['lodge_bar_7_1_1_D_c'] + $row['lodge_bar_7_1_1_E'] + $row['lodge_bar_7_1_1_F'] + $row['lodge_bar_7_1_1_G'];
			$lodge_bar_7_2_self_assessor_1 = $row['lodge_bar_7_2_1_A'] + $row['lodge_bar_7_2_1_B'] + $row['lodge_bar_7_2_1_C'] + $row['lodge_bar_7_2_1_D'] + $row['lodge_bar_7_2_1_E'] + $row['lodge_bar_7_2_1_F'] + $row['lodge_bar_7_2_1_G'] + $row['lodge_bar_7_2_1_H'] + $row['lodge_bar_7_2_1_I'];
			$lodge_bar_7_3_self_assessor_1 = $row['lodge_bar_7_3_1_A'] + $row['lodge_bar_7_3_1_B'] + $row['lodge_bar_7_3_1_C'] + $row['lodge_bar_7_3_1_D'] + $row['lodge_bar_7_3_1_E'] + $row['lodge_bar_7_3_1_F'];
			$lodge_bar_7_4_self_assessor_1 = $row['lodge_bar_7_4_1_A'] + $row['lodge_bar_7_4_1_B'] + $row['lodge_bar_7_4_1_C'] + $row['lodge_bar_7_4_1_D'] + $row['lodge_bar_7_4_1_E_a'] + $row['lodge_bar_7_4_1_E_b'] + $row['lodge_bar_7_4_1_E_c'] + $row['lodge_bar_7_4_1_E_d'] + $row['lodge_bar_7_4_1_E_e'] + $row['lodge_bar_7_4_1_E_f'] + $row['lodge_bar_7_4_1_E_g'] + $row['lodge_bar_7_4_1_E_h'] + $row['lodge_bar_7_4_1_F'] + $row['lodge_bar_7_4_1_G'] + $row['lodge_bar_7_4_1_H'] + $row['lodge_bar_7_4_1_I'];
			$lodge_bar_7_5_self_assessor_1 = $row['lodge_bar_7_5_1_A'] + $row['lodge_bar_7_5_1_B'] + $row['lodge_bar_7_5_1_C'];
			$lodge_bar_7_6_self_assessor_1 = $row['lodge_bar_7_6_1_A'] + $row['lodge_bar_7_6_1_B'] + $row['lodge_bar_7_6_1_C'];
			$lodge_bar_7_7_self_assessor_1 = $row['lodge_bar_7_7_1_A'] + $row['lodge_bar_7_7_1_B'] + $row['lodge_bar_7_7_1_C'];
			$output['lodge_bar_7_1_self_assessor_1'] = $lodge_bar_7_1_self_assessor_1;
			$output['lodge_bar_7_2_self_assessor_1'] = $lodge_bar_7_2_self_assessor_1;
			$output['lodge_bar_7_3_self_assessor_1'] = $lodge_bar_7_3_self_assessor_1;
			$output['lodge_bar_7_4_self_assessor_1'] = $lodge_bar_7_4_self_assessor_1;
			$output['lodge_bar_7_5_self_assessor_1'] = $lodge_bar_7_5_self_assessor_1;
			$output['lodge_bar_7_6_self_assessor_1'] = $lodge_bar_7_6_self_assessor_1;
			$output['lodge_bar_7_7_self_assessor_1'] = $lodge_bar_7_7_self_assessor_1;
			$output['lodge_bar_7_0_self_assessor_1'] = $lodge_bar_7_1_self_assessor_1 + $lodge_bar_7_2_self_assessor_1 + $lodge_bar_7_3_self_assessor_1 + $lodge_bar_7_4_self_assessor_1 + $lodge_bar_7_5_self_assessor_1 + $lodge_bar_7_6_self_assessor_1 + $lodge_bar_7_7_self_assessor_1;

			//KITCHEN			
			$lodge_kitchen_8_1_self_assessor_1 = $row['lodge_kitchen_8_1_1_A'] + 0;;
			$lodge_kitchen_8_2_self_assessor_1 = $row['lodge_kitchen_8_2_1_A'] + $row['lodge_kitchen_8_2_1_B'] + $row['lodge_kitchen_8_2_1_C'];
			$lodge_kitchen_8_3_self_assessor_1 = $row['lodge_kitchen_8_3_1_A'] + $row['lodge_kitchen_8_3_1_B'] + $row['lodge_kitchen_8_3_1_C'];
			$lodge_kitchen_8_4_self_assessor_1 = $row['lodge_kitchen_8_4_1_A'] + $row['lodge_kitchen_8_4_1_B'] + $row['lodge_kitchen_8_4_1_C'] + $row['lodge_kitchen_8_4_1_D'];
			$lodge_kitchen_8_5_self_assessor_1 = $row['lodge_kitchen_8_5_1_A'] + $row['lodge_kitchen_8_5_1_B'] + $row['lodge_kitchen_8_5_1_C'] + $row['lodge_kitchen_8_5_1_D'] + $row['lodge_kitchen_8_5_1_E'] + $row['lodge_kitchen_8_5_1_F'] + $row['lodge_kitchen_8_5_1_G'] + $row['lodge_kitchen_8_5_1_H'] + $row['lodge_kitchen_8_5_1_I'];
			$lodge_kitchen_8_6_self_assessor_1 = $row['lodge_kitchen_8_6_1_A'] + $row['lodge_kitchen_8_6_1_B'] + $row['lodge_kitchen_8_6_1_C'] + $row['lodge_kitchen_8_6_1_D'] + $row['lodge_kitchen_8_6_1_E'] + $row['lodge_kitchen_8_6_1_F'] + $row['lodge_kitchen_8_6_1_G'];
			$lodge_kitchen_8_7_self_assessor_1 = $row['lodge_kitchen_8_7_1_A'] + $row['lodge_kitchen_8_7_1_B'] + $row['lodge_kitchen_8_7_1_C'] + $row['lodge_kitchen_8_7_1_D'] + $row['lodge_kitchen_8_7_1_E'];
			$lodge_kitchen_8_8_self_assessor_1 = $row['lodge_kitchen_8_8_1_A'] + $row['lodge_kitchen_8_8_1_B'] + $row['lodge_kitchen_8_8_1_C_a'] + $row['lodge_kitchen_8_8_1_C_b'] + $row['lodge_kitchen_8_8_1_D'] + $row['lodge_kitchen_8_8_1_E'] + $row['lodge_kitchen_8_8_1_F'] + $row['lodge_kitchen_8_8_1_G'] + $row['lodge_kitchen_8_8_1_H'];
			$lodge_kitchen_8_9_self_assessor_1 = $row['lodge_kitchen_8_9_1_A'] + $row['lodge_kitchen_8_9_1_B'] + $row['lodge_kitchen_8_9_1_C'] + $row['lodge_kitchen_8_9_1_D'] + $row['lodge_kitchen_8_9_1_E'];
			$lodge_kitchen_8_10_self_assessor_1 = $row['lodge_kitchen_8_10_1_A_a'] + $row['lodge_kitchen_8_10_1_A_b'] + $row['lodge_kitchen_8_10_1_A_c'] + $row['lodge_kitchen_8_10_1_A_d'] + $row['lodge_kitchen_8_10_1_B'] + $row['lodge_kitchen_8_10_1_C'] + $row['lodge_kitchen_8_10_1_D'] + $row['lodge_kitchen_8_10_1_E'] + $row['lodge_kitchen_8_10_1_F'] + $row['lodge_kitchen_8_10_1_G'];
			$lodge_kitchen_8_11_self_assessor_1 = $row['lodge_kitchen_8_11_1_A_a'] + $row['lodge_kitchen_8_11_1_A_b'] + $row['lodge_kitchen_8_11_1_A_c'] + $row['lodge_kitchen_8_11_1_B'] + $row['lodge_kitchen_8_11_1_C_a'] + $row['lodge_kitchen_8_11_1_C_b'] + $row['lodge_kitchen_8_11_1_C_c'] + $row['lodge_kitchen_8_11_1_C_d'] + $row['lodge_kitchen_8_11_1_C_e'] + $row['lodge_kitchen_8_11_1_D_a'] + $row['lodge_kitchen_8_11_1_D_b'] + $row['lodge_kitchen_8_11_1_E'];
			$lodge_kitchen_8_12_self_assessor_1 = $row['lodge_kitchen_8_12_1_A'] + $row['lodge_kitchen_8_12_1_B'] + $row['lodge_kitchen_8_12_1_C'];
			$output['lodge_kitchen_8_1_self_assessor_1'] = $lodge_kitchen_8_1_self_assessor_1;
			$output['lodge_kitchen_8_2_self_assessor_1'] = $lodge_kitchen_8_2_self_assessor_1;
			$output['lodge_kitchen_8_3_self_assessor_1'] = $lodge_kitchen_8_3_self_assessor_1;
			$output['lodge_kitchen_8_4_self_assessor_1'] = $lodge_kitchen_8_4_self_assessor_1;
			$output['lodge_kitchen_8_5_self_assessor_1'] = $lodge_kitchen_8_5_self_assessor_1;
			$output['lodge_kitchen_8_6_self_assessor_1'] = $lodge_kitchen_8_6_self_assessor_1;
			$output['lodge_kitchen_8_7_self_assessor_1'] = $lodge_kitchen_8_7_self_assessor_1;
			$output['lodge_kitchen_8_8_self_assessor_1'] = $lodge_kitchen_8_8_self_assessor_1;
			$output['lodge_kitchen_8_9_self_assessor_1'] = $lodge_kitchen_8_9_self_assessor_1;
			$output['lodge_kitchen_8_10_self_assessor_1'] = $lodge_kitchen_8_10_self_assessor_1;
			$output['lodge_kitchen_8_11_self_assessor_1'] = $lodge_kitchen_8_11_self_assessor_1;
			$output['lodge_kitchen_8_12_self_assessor_1'] = $lodge_kitchen_8_12_self_assessor_1;
			$output['lodge_kitchen_8_0_self_assessor_1'] = $lodge_kitchen_8_1_self_assessor_1 + $lodge_kitchen_8_2_self_assessor_1 + $lodge_kitchen_8_3_self_assessor_1 + $lodge_kitchen_8_4_self_assessor_1 + $lodge_kitchen_8_5_self_assessor_1 + $lodge_kitchen_8_6_self_assessor_1 + $lodge_kitchen_8_7_self_assessor_1 + $lodge_kitchen_8_8_self_assessor_1 + $lodge_kitchen_8_9_self_assessor_1 + $lodge_kitchen_8_10_self_assessor_1 + $lodge_kitchen_8_11_self_assessor_1 + $lodge_kitchen_8_12_self_assessor_1;


			//GUEST ROOMS			
			$lodge_guest_rooms_9_1_self_assessor_1 = $row['lodge_guest_rooms_9_1_1_A'] + 0;
			$lodge_guest_rooms_9_2_self_assessor_1 = $row['lodge_guest_rooms_9_2_1_A'] + $row['lodge_guest_rooms_9_2_1_B'];
			$lodge_guest_rooms_9_3_self_assessor_1 = $row['lodge_guest_rooms_9_3_1_A'] + $row['lodge_guest_rooms_9_3_1_B'];
			$lodge_guest_rooms_9_4_self_assessor_1 = $row['lodge_guest_rooms_9_4_1_A'] + $row['lodge_guest_rooms_9_4_1_B_a'] + $row['lodge_guest_rooms_9_4_1_B_b'] + $row['lodge_guest_rooms_9_4_1_B_c'] + $row['lodge_guest_rooms_9_4_1_B_d'] + $row['lodge_guest_rooms_9_4_1_B_e'] + $row['lodge_guest_rooms_9_4_1_B_f'] + $row['lodge_guest_rooms_9_4_1_B_g'] + $row['lodge_guest_rooms_9_4_1_B_h'] + $row['lodge_guest_rooms_9_4_1_B_i'] + $row['lodge_guest_rooms_9_4_1_B_j'] + $row['lodge_guest_rooms_9_4_1_B_k'] + $row['lodge_guest_rooms_9_4_1_B_l'] + $row['lodge_guest_rooms_9_4_1_B_m'] + $row['lodge_guest_rooms_9_4_1_B_n'] + $row['lodge_guest_rooms_9_4_1_C'] + $row['lodge_guest_rooms_9_4_1_D'] + $row['lodge_guest_rooms_9_4_1_E'] + $row['lodge_guest_rooms_9_4_1_F'] + $row['lodge_guest_rooms_9_4_1_G'];
			$lodge_guest_rooms_9_5_self_assessor_1 = $row['lodge_guest_rooms_9_5_1_A'] + $row['lodge_guest_rooms_9_5_1_B_a'] + $row['lodge_guest_rooms_9_5_1_B_b'] + $row['lodge_guest_rooms_9_5_1_B_c'] + $row['lodge_guest_rooms_9_5_1_B_d'] + $row['lodge_guest_rooms_9_5_1_C'] + $row['lodge_guest_rooms_9_5_1_D'];
			$lodge_guest_rooms_9_6_self_assessor_1 = $row['lodge_guest_rooms_9_6_1_A'] + $row['lodge_guest_rooms_9_6_1_B'];
			$lodge_guest_rooms_9_7_self_assessor_1 = $row['lodge_guest_rooms_9_7_1_A'] + $row['lodge_guest_rooms_9_7_1_B'] + $row['lodge_guest_rooms_9_7_1_C'] + $row['lodge_guest_rooms_9_7_1_D'] + $row['lodge_guest_rooms_9_7_1_E'];
			$lodge_guest_rooms_9_8_self_assessor_1 = $row['lodge_guest_rooms_9_8_1_A'] + $row['lodge_guest_rooms_9_8_1_B'] + $row['lodge_guest_rooms_9_8_1_C'] + $row['lodge_guest_rooms_9_8_1_D'] + $row['lodge_guest_rooms_9_8_1_E'];
			$lodge_guest_rooms_9_9_self_assessor_1 = $row['lodge_guest_rooms_9_9_1_A'] + $row['lodge_guest_rooms_9_9_1_B_a'] + $row['lodge_guest_rooms_9_9_1_B_b'] + $row['lodge_guest_rooms_9_9_1_B_c'] + $row['lodge_guest_rooms_9_9_1_B_d'] + $row['lodge_guest_rooms_9_9_1_B_e'] + $row['lodge_guest_rooms_9_9_1_B_f'] + $row['lodge_guest_rooms_9_9_1_C_a'] + $row['lodge_guest_rooms_9_9_1_C_b'] + $row['lodge_guest_rooms_9_9_1_D'];
			$lodge_guest_rooms_9_10_self_assessor_1 = $row['lodge_guest_rooms_9_10_1_A'] + 0;
			$lodge_guest_rooms_9_11_self_assessor_1 = $row['lodge_guest_rooms_9_11_1_A_a'] + $row['lodge_guest_rooms_9_11_1_A_b'] + $row['lodge_guest_rooms_9_11_1_A_c'] + $row['lodge_guest_rooms_9_11_1_A_d'] + $row['lodge_guest_rooms_9_11_1_A_e'] + $row['lodge_guest_rooms_9_11_1_B_a'] + $row['lodge_guest_rooms_9_11_1_B_b'] + $row['lodge_guest_rooms_9_11_1_B_c'] + $row['lodge_guest_rooms_9_11_1_B_d'] + $row['lodge_guest_rooms_9_11_1_C'];
			$lodge_guest_rooms_9_12_self_assessor_1 = $row['lodge_guest_rooms_9_12_1_A'] + $row['lodge_guest_rooms_9_12_1_B'] + $row['lodge_guest_rooms_9_12_1_C'] + $row['lodge_guest_rooms_9_12_1_D'] + $row['lodge_guest_rooms_9_12_1_E'] + $row['lodge_guest_rooms_9_12_1_F'] + $row['lodge_guest_rooms_9_12_1_G'];
			$lodge_guest_rooms_9_13_self_assessor_1 = $row['lodge_guest_rooms_9_13_1_A'] + $row['lodge_guest_rooms_9_13_1_B'] + $row['lodge_guest_rooms_9_13_1_C'];
			$lodge_guest_rooms_9_14_self_assessor_1 = $row['lodge_guest_rooms_9_14_1_A'] + $row['lodge_guest_rooms_9_14_1_B_a'] + $row['lodge_guest_rooms_9_14_1_B_b'] + $row['lodge_guest_rooms_9_14_1_B_c'] + $row['lodge_guest_rooms_9_14_1_C'];
			$lodge_guest_rooms_9_15_self_assessor_1 = $row['lodge_guest_rooms_9_15_1_A_a'] + $row['lodge_guest_rooms_9_15_1_A_b'] + $row['lodge_guest_rooms_9_15_1_A_c'] + $row['lodge_guest_rooms_9_15_1_A_d'] + $row['lodge_guest_rooms_9_15_1_A_e'] + $row['lodge_guest_rooms_9_15_1_A_f'] + $row['lodge_guest_rooms_9_15_1_A_g'] + $row['lodge_guest_rooms_9_15_1_A_h'] + $row['lodge_guest_rooms_9_15_1_A_i'] + $row['lodge_guest_rooms_9_15_1_A_j'] + $row['lodge_guest_rooms_9_15_1_A_k'] + $row['lodge_guest_rooms_9_15_1_A_l'] + $row['lodge_guest_rooms_9_15_1_A_m'] + $row['lodge_guest_rooms_9_15_1_A_n'] + $row['lodge_guest_rooms_9_15_1_A_o'] + $row['lodge_guest_rooms_9_15_1_A_p'] + $row['lodge_guest_rooms_9_15_1_A_q'] + $row['lodge_guest_rooms_9_15_1_B'] + $row['lodge_guest_rooms_9_15_1_C'];
			$output['lodge_guest_rooms_9_1_self_assessor_1'] = $lodge_guest_rooms_9_1_self_assessor_1;
			$output['lodge_guest_rooms_9_2_self_assessor_1'] = $lodge_guest_rooms_9_2_self_assessor_1;
			$output['lodge_guest_rooms_9_3_self_assessor_1'] = $lodge_guest_rooms_9_3_self_assessor_1;
			$output['lodge_guest_rooms_9_7_self_assessor_1'] = $lodge_guest_rooms_9_7_self_assessor_1;
			$output['lodge_guest_rooms_9_8_self_assessor_1'] = $lodge_guest_rooms_9_8_self_assessor_1;
			$output['lodge_guest_rooms_9_9_self_assessor_1'] = $lodge_guest_rooms_9_9_self_assessor_1;
			$output['lodge_guest_rooms_9_10_self_assessor_1'] = $lodge_guest_rooms_9_10_self_assessor_1;
			$output['lodge_guest_rooms_9_11_self_assessor_1'] = $lodge_guest_rooms_9_11_self_assessor_1;
			$output['lodge_guest_rooms_9_12_self_assessor_1'] = $lodge_guest_rooms_9_12_self_assessor_1;
			$output['lodge_guest_rooms_9_13_self_assessor_1'] = $lodge_guest_rooms_9_13_self_assessor_1;
			$output['lodge_guest_rooms_9_14_self_assessor_1'] = $lodge_guest_rooms_9_14_self_assessor_1;
			$output['lodge_guest_rooms_9_15_self_assessor_1'] = $lodge_guest_rooms_9_15_self_assessor_1;
			$output['lodge_guest_rooms_9_0_self_assessor_1'] =  $lodge_guest_rooms_9_1_self_assessor_1 + $lodge_guest_rooms_9_2_self_assessor_1 + $lodge_guest_rooms_9_3_self_assessor_1 + $lodge_guest_rooms_9_4_self_assessor_1 + $lodge_guest_rooms_9_5_self_assessor_1 + $lodge_guest_rooms_9_6_self_assessor_1 + $lodge_guest_rooms_9_7_self_assessor_1 + $lodge_guest_rooms_9_8_self_assessor_1 + $lodge_guest_rooms_9_9_self_assessor_1 + $lodge_guest_rooms_9_10_self_assessor_1 + $lodge_guest_rooms_9_11_self_assessor_1 + $lodge_guest_rooms_9_12_self_assessor_1 + $lodge_guest_rooms_9_13_self_assessor_1 + $lodge_guest_rooms_9_14_self_assessor_1 + $lodge_guest_rooms_9_15_self_assessor_1;


			//GUEST BATHROOMS
			$lodge_guest_bathrooms_10_1_self_assessor_1 = $row['lodge_guest_bathrooms_10_1_1_A'] + 0;
			$lodge_guest_bathrooms_10_2_self_assessor_1 = $row['lodge_guest_bathrooms_10_2_1_A'] + 0;
			$lodge_guest_bathrooms_10_3_self_assessor_1 = $row['lodge_guest_bathrooms_10_3_1_A_a'] + $row['lodge_guest_bathrooms_10_3_1_A_b'] + $row['lodge_guest_bathrooms_10_3_1_A_c'] + $row['lodge_guest_bathrooms_10_3_1_A_d'] + $row['lodge_guest_bathrooms_10_3_1_A_e'] + $row['lodge_guest_bathrooms_10_3_1_A_f'] + $row['lodge_guest_bathrooms_10_3_1_A_g'] + $row['lodge_guest_bathrooms_10_3_1_A_h'] + $row['lodge_guest_bathrooms_10_3_1_A_i'] + $row['lodge_guest_bathrooms_10_3_1_A_j'] + $row['lodge_guest_bathrooms_10_3_1_A_k'] + $row['lodge_guest_bathrooms_10_3_1_A_l'] + $row['lodge_guest_bathrooms_10_3_1_A_m'] + $row['lodge_guest_bathrooms_10_3_1_A_n'] + $row['lodge_guest_bathrooms_10_3_1_A_o'] + $row['lodge_guest_bathrooms_10_3_1_A_p'] + $row['lodge_guest_bathrooms_10_3_1_A_q'] + $row['lodge_guest_bathrooms_10_3_1_A_r'] + $row['lodge_guest_bathrooms_10_3_1_A_s'] + $row['lodge_guest_bathrooms_10_3_1_A_t'] + $row['lodge_guest_bathrooms_10_3_1_A_u'] + $row['lodge_guest_bathrooms_10_3_1_A_v'] + $row['lodge_guest_bathrooms_10_3_1_A_w'] + $row['lodge_guest_bathrooms_10_3_1_B'] + $row['lodge_guest_bathrooms_10_3_1_C'] + $row['lodge_guest_bathrooms_10_3_1_D'] + $row['lodge_guest_bathrooms_10_3_1_E'] + $row['lodge_guest_bathrooms_10_3_1_F'];
			$lodge_guest_bathrooms_10_4_self_assessor_1 = $row['lodge_guest_bathrooms_10_4_1_A'] + $row['lodge_guest_bathrooms_10_4_1_B'] + $row['lodge_guest_bathrooms_10_4_1_C'] + $row['lodge_guest_bathrooms_10_4_1_D'] + $row['lodge_guest_bathrooms_10_4_1_E'] + $row['lodge_guest_bathrooms_10_4_1_F'];
			$lodge_guest_bathrooms_10_5_self_assessor_1 = $row['lodge_guest_bathrooms_10_5_1_A_a'] + $row['lodge_guest_bathrooms_10_5_1_A_b'] + $row['lodge_guest_bathrooms_10_5_1_A_c'] + $row['lodge_guest_bathrooms_10_5_1_A_d'] + $row['lodge_guest_bathrooms_10_5_1_A_e'] + $row['lodge_guest_bathrooms_10_5_1_B'] + $row['lodge_guest_bathrooms_10_5_1_C'] + $row['lodge_guest_bathrooms_10_5_1_D'] + $row['lodge_guest_bathrooms_10_5_1_E'] + $row['lodge_guest_bathrooms_10_5_1_F'];
			$lodge_guest_bathrooms_10_6_self_assessor_1 = $row['lodge_guest_bathrooms_10_6_1_A'] + $row['lodge_guest_bathrooms_10_6_1_B'] + $row['lodge_guest_bathrooms_10_6_1_C'];
			$lodge_guest_bathrooms_10_7_self_assessor_1 = $row['lodge_guest_bathrooms_10_7_1_A'] + $row['lodge_guest_bathrooms_10_7_1_B'] + $row['lodge_guest_bathrooms_10_7_1_C'] + $row['lodge_guest_bathrooms_10_7_1_D'];
			$lodge_guest_bathrooms_10_8_self_assessor_1 = $row['lodge_guest_bathrooms_10_8_1_A_a'] + $row['lodge_guest_bathrooms_10_8_1_A_b'] + $row['lodge_guest_bathrooms_10_8_1_A_c'] + $row['lodge_guest_bathrooms_10_8_1_A_d'] + $row['lodge_guest_bathrooms_10_8_1_A_e'] + $row['lodge_guest_bathrooms_10_8_1_A_f'] + $row['lodge_guest_bathrooms_10_8_1_A_g'] + $row['lodge_guest_bathrooms_10_8_1_B'] + $row['lodge_guest_bathrooms_10_8_1_C'];
			$lodge_guest_bathrooms_10_9_self_assessor_1 = $row['lodge_guest_bathrooms_10_9_1_A'] + $row['lodge_guest_bathrooms_10_9_1_B'];
			$output['lodge_guest_bathrooms_10_1_self_assessor_1'] = $lodge_guest_bathrooms_10_1_self_assessor_1;
			$output['lodge_guest_bathrooms_10_3_self_assessor_1'] = $lodge_guest_bathrooms_10_3_self_assessor_1;
			$output['lodge_guest_bathrooms_10_4_self_assessor_1'] = $lodge_guest_bathrooms_10_4_self_assessor_1;
			$output['lodge_guest_bathrooms_10_5_self_assessor_1'] = $lodge_guest_bathrooms_10_5_self_assessor_1;
			$output['lodge_guest_bathrooms_10_6_self_assessor_1'] = $lodge_guest_bathrooms_10_6_self_assessor_1;
			$output['lodge_guest_bathrooms_10_7_self_assessor_1'] = $lodge_guest_bathrooms_10_7_self_assessor_1;
			$output['lodge_guest_bathrooms_10_8_self_assessor_1'] = $lodge_guest_bathrooms_10_8_self_assessor_1;
			$output['lodge_guest_bathrooms_10_9_self_assessor_1'] = $lodge_guest_bathrooms_10_9_self_assessor_1;
			$output['lodge_guest_bathrooms_10_0_self_assessor_1'] =  $lodge_guest_bathrooms_10_1_self_assessor_1 + $lodge_guest_bathrooms_10_2_self_assessor_1 + $lodge_guest_bathrooms_10_3_self_assessor_1 + $lodge_guest_bathrooms_10_4_self_assessor_1 + $lodge_guest_bathrooms_10_5_self_assessor_1 + $lodge_guest_bathrooms_10_6_self_assessor_1 + $lodge_guest_bathrooms_10_7_self_assessor_1 + $lodge_guest_bathrooms_10_8_self_assessor_1 + $lodge_guest_bathrooms_10_9_self_assessor_1;

			//SUITES
			$lodge_suites_11_1_self_assessor_1 = $row['lodge_suites_11_1_1_A'] + 0;
			$lodge_suites_11_2_self_assessor_1 = $row['lodge_suites_11_2_1_A'] + $row['lodge_suites_11_2_1_B'];
			$lodge_suites_11_3_self_assessor_1 = $row['lodge_suites_11_3_1_A_a'] + $row['lodge_suites_11_3_1_A_b'] + $row['lodge_suites_11_3_1_A_c'] + $row['lodge_suites_11_3_1_A_d'];
			$lodge_suites_11_4_self_assessor_1 = $row['lodge_suites_11_4_1_A'] + $row['lodge_suites_11_4_1_B'];
			$lodge_suites_11_5_self_assessor_1 = $row['lodge_suites_11_5_1_A_a'] + $row['lodge_suites_11_5_1_A_b'] + $row['lodge_suites_11_5_1_B_a'] + $row['lodge_suites_11_5_1_B_b'] + $row['lodge_suites_11_5_1_B_c'] + $row['lodge_suites_11_5_1_B_d'] + $row['lodge_suites_11_5_1_B_e'] + $row['lodge_suites_11_5_1_B_f'] + $row['lodge_suites_11_5_1_B_g'] + $row['lodge_suites_11_5_1_B_h'] + $row['lodge_suites_11_5_1_B_i'] + $row['lodge_suites_11_5_1_B_j'] + $row['lodge_suites_11_5_1_B_k'] + $row['lodge_suites_11_5_1_B_l'] + $row['lodge_suites_11_5_1_B_m'] + $row['lodge_suites_11_5_1_B_n'] + $row['lodge_suites_11_5_1_B_o'] + $row['lodge_suites_11_5_1_B_p'] + $row['lodge_suites_11_5_1_C'] + $row['lodge_suites_11_5_1_D'] + $row['lodge_suites_11_5_1_E'] + $row['lodge_suites_11_5_1_F'] + $row['lodge_suites_11_5_1_G'];
			$lodge_suites_11_6_self_assessor_1 = $row['lodge_suites_11_6_1_A'] + $row['lodge_suites_11_6_1_B'] + $row['lodge_suites_11_6_1_C'] + $row['lodge_suites_11_6_1_D'] + $row['lodge_suites_11_6_1_E'];
			$lodge_suites_11_7_self_assessor_1 = $row['lodge_suites_11_7_1_A'] + $row['lodge_suites_11_7_1_B_a'] + $row['lodge_suites_11_7_1_B_b'] + $row['lodge_suites_11_7_1_B_c'] + $row['lodge_suites_11_7_1_B_d'] + $row['lodge_suites_11_7_1_C'] + $row['lodge_suites_11_7_1_D'];
			$lodge_suites_11_8_self_assessor_1 = $row['lodge_suites_11_8_1_A'] + $row['lodge_suites_11_8_1_B_a'] + $row['lodge_suites_11_8_1_B_b'] + $row['lodge_suites_11_8_1_B_c'] + $row['lodge_suites_11_8_1_B_d'] + $row['lodge_suites_11_8_1_B_e'] + $row['lodge_suites_11_8_1_B_f'] + $row['lodge_suites_11_8_1_B_g'] + $row['lodge_suites_11_8_1_B_h'] + $row['lodge_suites_11_8_1_B_i'] + $row['lodge_suites_11_8_1_C_a'] + $row['lodge_suites_11_8_1_C_b'] + $row['lodge_suites_11_8_1_D'];
			$lodge_suites_11_9_self_assessor_1 = $row['lodge_suites_11_9_1_A'] + 0;
			$lodge_suites_11_10_self_assessor_1 = $row['lodge_suites_11_10_1_A_a'] + $row['lodge_suites_11_10_1_A_b'] + $row['lodge_suites_11_10_1_A_c'] + $row['lodge_suites_11_10_1_A_d'] + $row['lodge_suites_11_10_1_A_e'] + $row['lodge_suites_11_10_1_B_a'] + $row['lodge_suites_11_10_1_B_b'] + $row['lodge_suites_11_10_1_B'] + $row['lodge_suites_11_10_1_C'];
			$lodge_suites_11_11_self_assessor_1 = $row['lodge_suites_11_11_1_A'] + $row['lodge_suites_11_11_1_B'] + $row['lodge_suites_11_11_1_C'] + $row['lodge_suites_11_11_1_D'] + $row['lodge_suites_11_11_1_E'] + $row['lodge_suites_11_11_1_F'] + $row['lodge_suites_11_11_1_G'];
			$lodge_suites_11_12_self_assessor_1 = $row['lodge_suites_11_12_1_A_a'] + $row['lodge_suites_11_12_1_A_b'] + $row['lodge_suites_11_12_1_A_c'] + $row['lodge_suites_11_12_1_A_d'] + $row['lodge_suites_11_12_1_A_e'] + $row['lodge_suites_11_12_1_A_f'] + $row['lodge_suites_11_12_1_A_g'] + $row['lodge_suites_11_12_1_A_h'] + $row['lodge_suites_11_12_1_A_i'] + $row['lodge_suites_11_12_1_A_j'] + $row['lodge_suites_11_12_1_A_k'] + $row['lodge_suites_11_12_1_A_l'] + $row['lodge_suites_11_12_1_A_m'] + $row['lodge_suites_11_12_1_A_n'] + $row['lodge_suites_11_12_1_A_o'] + $row['lodge_suites_11_12_1_A_p'] + $row['lodge_suites_11_12_1_A_q'] + $row['lodge_suites_11_12_1_A_r'] + $row['lodge_suites_11_12_1_A_s'] + $row['lodge_suites_11_12_1_A_t'] + $row['lodge_suites_11_12_1_A_u'] + $row['lodge_suites_11_12_1_A_v'] + $row['lodge_suites_11_12_1_B'] + $row['lodge_suites_11_12_1_C'];
			$lodge_suites_11_13_self_assessor_1 = $row['lodge_suites_11_13_1_A'] + $row['lodge_suites_11_13_1_B'];
			$lodge_suites_11_14_self_assessor_1 = $row['lodge_suites_11_14_1_A'] + $row['lodge_suites_11_14_1_B_a'] + $row['lodge_suites_11_14_1_B_b'] + $row['lodge_suites_11_14_1_B_c'] + $row['lodge_suites_11_14_1_C'];
			$lodge_suites_11_15_self_assessor_1 = $row['lodge_suites_11_15_1_A'] + 0;
			$lodge_suites_11_16_self_assessor_1 = $row['lodge_suites_11_16_1_A_a'] + $row['lodge_suites_11_16_1_A_b'] + $row['lodge_suites_11_16_1_A_c'] + $row['lodge_suites_11_16_1_A_d'] + $row['lodge_suites_11_16_1_A_e'] + $row['lodge_suites_11_16_1_A_f'] + $row['lodge_suites_11_16_1_A_g'] + $row['lodge_suites_11_16_1_A_h'] + $row['lodge_suites_11_16_1_A_i'] + $row['lodge_suites_11_16_1_A_j'] + $row['lodge_suites_11_16_1_A_k'] + $row['lodge_suites_11_16_1_A_l'] + $row['lodge_suites_11_16_1_A_m'] + $row['lodge_suites_11_16_1_A_n'] + $row['lodge_suites_11_16_1_A_o'] + $row['lodge_suites_11_16_1_A_p'] + $row['lodge_suites_11_16_1_A_q'] + $row['lodge_suites_11_16_1_A_r'] + $row['lodge_suites_11_16_1_A_s'] + $row['lodge_suites_11_16_1_A_t'] + $row['lodge_suites_11_16_1_A_u'] + $row['lodge_suites_11_16_1_A_v'] + $row['lodge_suites_11_16_1_B'] + $row['lodge_suites_11_16_1_C'] + $row['lodge_suites_11_16_1_D'] + $row['lodge_suites_11_16_1_E'] + $row['lodge_suites_11_16_1_F'];
			$lodge_suites_11_17_self_assessor_1 = $row['lodge_suites_11_17_1_A_a'] + $row['lodge_suites_11_17_1_A_b'] + $row['lodge_suites_11_17_1_A_c'] + $row['lodge_suites_11_17_1_A_d'] + $row['lodge_suites_11_17_1_A_e'] + $row['lodge_suites_11_17_1_A_f'] + $row['lodge_suites_11_17_1_A_g'] + $row['lodge_suites_11_17_1_A_h'] + $row['lodge_suites_11_17_1_A_i'] + $row['lodge_suites_11_17_1_A_j'] + $row['lodge_suites_11_17_1_A_k'] + $row['lodge_suites_11_17_1_B'] + $row['lodge_suites_11_17_1_C'];
			$lodge_suites_11_18_self_assessor_1 = $row['lodge_suites_11_18_1_A'] + $row['lodge_suites_11_18_1_B'] + $row['lodge_suites_11_18_1_C'] + $row['lodge_suites_11_18_1_D'] + $row['lodge_suites_11_18_1_E'] + $row['lodge_suites_11_18_1_F'];
			$lodge_suites_11_19_self_assessor_1 = $row['lodge_suites_11_19_1_A_a'] + $row['lodge_suites_11_19_1_A_b'] + $row['lodge_suites_11_19_1_A_c'] + $row['lodge_suites_11_19_1_A_d'] + $row['lodge_suites_11_19_1_A_e'] + $row['lodge_suites_11_19_1_B'] + $row['lodge_suites_11_19_1_C'] + $row['lodge_suites_11_19_1_D'] + $row['lodge_suites_11_19_1_E'] + $row['lodge_suites_11_19_1_F'];
			$lodge_suites_11_20_self_assessor_1 = $row['lodge_suites_11_20_1_A'] + $row['lodge_suites_11_20_1_B'] + $row['lodge_suites_11_20_1_C'];
			$output['lodge_suites_11_1_self_assessor_1'] = $lodge_suites_11_1_self_assessor_1;
			$output['lodge_suites_11_2_self_assessor_1'] = $lodge_suites_11_2_self_assessor_1;
			$output['lodge_suites_11_3_self_assessor_1'] = $lodge_suites_11_3_self_assessor_1;
			$output['lodge_suites_11_4_self_assessor_1'] = $lodge_suites_11_4_self_assessor_1;
			$output['lodge_suites_11_5_self_assessor_1'] = $lodge_suites_11_5_self_assessor_1;
			$output['lodge_suites_11_6_self_assessor_1'] = $lodge_suites_11_6_self_assessor_1;
			$output['lodge_suites_11_7_self_assessor_1'] = $lodge_suites_11_7_self_assessor_1;
			$output['lodge_suites_11_8_self_assessor_1'] = $lodge_suites_11_8_self_assessor_1;
			$output['lodge_suites_11_9_self_assessor_1'] = $lodge_suites_11_9_self_assessor_1;
			$output['lodge_suites_11_10_self_assessor_1'] = $lodge_suites_11_10_self_assessor_1;
			$output['lodge_suites_11_11_self_assessor_1'] = $lodge_suites_11_11_self_assessor_1;
			$output['lodge_suites_11_12_self_assessor_1'] = $lodge_suites_11_12_self_assessor_1;
			$output['lodge_suites_11_13_self_assessor_1'] = $lodge_suites_11_13_self_assessor_1;
			$output['lodge_suites_11_14_self_assessor_1'] = $lodge_suites_11_14_self_assessor_1;
			$output['lodge_suites_11_15_self_assessor_1'] = $lodge_suites_11_15_self_assessor_1;
			$output['lodge_suites_11_16_self_assessor_1'] = $lodge_suites_11_16_self_assessor_1;
			$output['lodge_suites_11_17_self_assessor_1'] = $lodge_suites_11_17_self_assessor_1;
			$output['lodge_suites_11_18_self_assessor_1'] = $lodge_suites_11_18_self_assessor_1;
			$output['lodge_suites_11_19_self_assessor_1'] = $lodge_suites_11_19_self_assessor_1;
			$output['lodge_suites_11_20_self_assessor_1'] = $lodge_suites_11_20_self_assessor_1;
			$output['lodge_suites_11_0_self_assessor_1'] = $lodge_suites_11_1_self_assessor_1 + $lodge_suites_11_2_self_assessor_1 + $lodge_suites_11_3_self_assessor_1 + $lodge_suites_11_4_self_assessor_1 + $lodge_suites_11_5_self_assessor_1 + $lodge_suites_11_6_self_assessor_1 + $lodge_suites_11_7_self_assessor_1 + $lodge_suites_11_8_self_assessor_1 + $lodge_suites_11_9_self_assessor_1 + $lodge_suites_11_10_self_assessor_1 + $lodge_suites_11_11_self_assessor_1 + $lodge_suites_11_12_self_assessor_1 + $lodge_suites_11_13_self_assessor_1 + $lodge_suites_11_14_self_assessor_1 + $lodge_suites_11_15_self_assessor_1 + $lodge_suites_11_16_self_assessor_1 + $lodge_suites_11_17_self_assessor_1 + $lodge_suites_11_18_self_assessor_1 + $lodge_suites_11_19_self_assessor_1 + $lodge_suites_11_20_self_assessor_1;
			//HYGIENE AND SANITATION
			$lodge_hygiene_and_sanitation_12_1_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_1_1_A'] + $row['lodge_hygiene_and_sanitation_12_1_1_B'] + $row['lodge_hygiene_and_sanitation_12_1_1_C'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_f'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_g'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_h'] + $row['lodge_hygiene_and_sanitation_12_1_1_E'] + $row['lodge_hygiene_and_sanitation_12_1_1_F'] + $row['lodge_hygiene_and_sanitation_12_1_1_G'] + $row['lodge_hygiene_and_sanitation_12_1_1_H'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_J'] + $row['lodge_hygiene_and_sanitation_12_1_1_K'] + $row['lodge_hygiene_and_sanitation_12_1_1_L'] + $row['lodge_hygiene_and_sanitation_12_1_1_M'] + $row['lodge_hygiene_and_sanitation_12_1_1_N'];
			$lodge_hygiene_and_sanitation_12_2_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_2_1_A'] + $row['lodge_hygiene_and_sanitation_12_2_1_B'] + $row['lodge_hygiene_and_sanitation_12_2_1_C'] + $row['lodge_hygiene_and_sanitation_12_2_1_D'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_e'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_f'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_g'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_h'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_i'] + $row['lodge_hygiene_and_sanitation_12_2_1_F'] + $row['lodge_hygiene_and_sanitation_12_2_1_G'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_I'] + $row['lodge_hygiene_and_sanitation_12_2_1_J'];
			$lodge_hygiene_and_sanitation_12_3_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_3_1_A'] + $row['lodge_hygiene_and_sanitation_12_3_1_B'] + $row['lodge_hygiene_and_sanitation_12_3_1_C'] + $row['lodge_hygiene_and_sanitation_12_3_1_D'] + $row['lodge_hygiene_and_sanitation_12_3_1_E'] + $row['lodge_hygiene_and_sanitation_12_3_1_F'] + $row['lodge_hygiene_and_sanitation_12_3_1_G'];
			$lodge_hygiene_and_sanitation_12_4_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_4_1_A'] + $row['lodge_hygiene_and_sanitation_12_4_1_B'] + $row['lodge_hygiene_and_sanitation_12_4_1_C'] + $row['lodge_hygiene_and_sanitation_12_4_1_D'];
			$lodge_hygiene_and_sanitation_12_5_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_5_1_A'] + $row['lodge_hygiene_and_sanitation_12_5_1_B'];
			$lodge_hygiene_and_sanitation_12_6_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_6_1_A'] + $row['lodge_hygiene_and_sanitation_12_6_1_B'] + $row['lodge_hygiene_and_sanitation_12_6_1_C'];
			$lodge_hygiene_and_sanitation_12_7_self_assessor_1 = $row['lodge_hygiene_and_sanitation_12_7_1_A'] + $row['lodge_hygiene_and_sanitation_12_7_1_B'];
			$output['lodge_hygiene_and_sanitation_12_1_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_2_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_2_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_3_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_3_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_4_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_4_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_5_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_5_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_6_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_6_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_7_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_7_self_assessor_1;
			$output['lodge_hygiene_and_sanitation_12_0_self_assessor_1'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_1 + $lodge_hygiene_and_sanitation_12_2_self_assessor_1 + $lodge_hygiene_and_sanitation_12_3_self_assessor_1 + $lodge_hygiene_and_sanitation_12_4_self_assessor_1 + $lodge_hygiene_and_sanitation_12_5_self_assessor_1 + $lodge_hygiene_and_sanitation_12_6_self_assessor_1 + $lodge_hygiene_and_sanitation_12_7_self_assessor_1;


			//SAFETY AND SECURITY
			$lodge_safety_and_security_13_1_self_assessor_1 = $row['lodge_safety_and_security_13_1_1_A'] + $row['lodge_safety_and_security_13_1_1_B'] + $row['lodge_safety_and_security_13_1_1_C'] + $row['lodge_safety_and_security_13_1_1_D'] + $row['lodge_safety_and_security_13_1_1_E'] + $row['lodge_safety_and_security_13_1_1_F_a'] + $row['lodge_safety_and_security_13_1_1_F_b'] + $row['lodge_safety_and_security_13_1_1_F_c'] + $row['lodge_safety_and_security_13_1_1_F_d'] + $row['lodge_safety_and_security_13_1_1_F_e'] + $row['lodge_safety_and_security_13_1_1_F_f'] + $row['lodge_safety_and_security_13_1_1_F_g'] + $row['lodge_safety_and_security_13_1_1_G'] + $row['lodge_safety_and_security_13_1_1_H'] + $row['lodge_safety_and_security_13_1_1_I'] + $row['lodge_safety_and_security_13_1_1_J'];
			$lodge_safety_and_security_13_2_self_assessor_1 = $row['lodge_safety_and_security_13_2_1_A'] + $row['lodge_safety_and_security_13_2_1_B'];
			$lodge_safety_and_security_13_3_self_assessor_1 = $row['lodge_safety_and_security_13_3_1_A'] + $row['lodge_safety_and_security_13_3_1_B'] + $row['lodge_safety_and_security_13_3_1_C'] + $row['lodge_safety_and_security_13_3_1_D'] + $row['lodge_safety_and_security_13_3_1_E'];
			$lodge_safety_and_security_13_4_self_assessor_1 = $row['lodge_safety_and_security_13_4_1_A'] + $row['lodge_safety_and_security_13_4_1_B'] + $row['lodge_safety_and_security_13_4_1_C'];
			$lodge_safety_and_security_13_5_self_assessor_1 = $row['lodge_safety_and_security_13_5_1_A'] + $row['lodge_safety_and_security_13_5_1_B'] + $row['lodge_safety_and_security_13_5_1_C'] + $row['lodge_safety_and_security_13_5_1_D'] + $row['lodge_safety_and_security_13_5_1_E'] + $row['lodge_safety_and_security_13_5_1_F'];
			$output['lodge_safety_and_security_13_1_self_assessor_1'] = $lodge_safety_and_security_13_1_self_assessor_1;
			$output['lodge_safety_and_security_13_2_self_assessor_1'] = $lodge_safety_and_security_13_2_self_assessor_1;
			$output['lodge_safety_and_security_13_3_self_assessor_1'] = $lodge_safety_and_security_13_3_self_assessor_1;
			$output['lodge_safety_and_security_13_4_self_assessor_1'] = $lodge_safety_and_security_13_4_self_assessor_1;
			$output['lodge_safety_and_security_13_5_self_assessor_1'] = $lodge_safety_and_security_13_5_self_assessor_1;
			$output['lodge_safety_and_security_13_0_self_assessor_1'] = $lodge_safety_and_security_13_1_self_assessor_1 + $lodge_safety_and_security_13_2_self_assessor_1 + $lodge_safety_and_security_13_3_self_assessor_1 + $lodge_safety_and_security_13_4_self_assessor_1 + $lodge_safety_and_security_13_5_self_assessor_1;

			//SUNDRY SERVICES
			$lodge_sundry_services_14_1_self_assessor_1 = $row['lodge_sundry_services_14_1_1_A'] + $row['lodge_sundry_services_14_1_1_B'] + $row['lodge_sundry_services_14_1_1_C'];
			$lodge_sundry_services_14_2_self_assessor_1 = $row['lodge_sundry_services_14_2_1_A'] + 0;
			$lodge_sundry_services_14_3_self_assessor_1 = $row['lodge_sundry_services_14_3_1_A'] + $row['lodge_sundry_services_14_3_1_B'];
			$lodge_sundry_services_14_4_self_assessor_1 = $row['lodge_sundry_services_14_4_1_A'] + 0;
			$output['lodge_sundry_services_14_1_self_assessor_1'] = $lodge_sundry_services_14_1_self_assessor_1;
			$output['lodge_sundry_services_14_2_self_assessor_1'] = $lodge_sundry_services_14_2_self_assessor_1;
			$output['lodge_sundry_services_14_3_self_assessor_1'] = $lodge_sundry_services_14_3_self_assessor_1;
			$output['lodge_sundry_services_14_4_self_assessor_1'] = $lodge_sundry_services_14_4_self_assessor_1;
			$output['lodge_sundry_services_14_0_self_assessor_1'] = $lodge_sundry_services_14_1_self_assessor_1 + $lodge_sundry_services_14_2_self_assessor_1 + $lodge_sundry_services_14_3_self_assessor_1 + $lodge_sundry_services_14_4_self_assessor_1;


			//HUMAN RESOURCES
			$lodge_human_resources_15_1_self_assessor_1 = $row['lodge_human_resources_15_1_1_text'] + $row['lodge_human_resources_15_1_1_A'] + $row['lodge_human_resources_15_1_1_B_a'] + $row['lodge_human_resources_15_1_1_B_b'] + $row['lodge_human_resources_15_1_1_B_c'] + $row['lodge_human_resources_15_1_1_B_d'] + $row['lodge_human_resources_15_1_1_B_e'] + $row['lodge_human_resources_15_1_1_B_f'];
			$lodge_human_resources_15_2_self_assessor_1 = $row['lodge_human_resources_15_2_1_A'] + $row['lodge_human_resources_15_2_1_B'];
			$lodge_human_resources_15_3_self_assessor_1 = $row['lodge_human_resources_15_3_1_A'] + $row['lodge_human_resources_15_3_1_B'];
			$lodge_human_resources_15_4_self_assessor_1 = $row['lodge_human_resources_15_4_1_A'] + $row['lodge_human_resources_15_4_1_B'] + $row['lodge_human_resources_15_4_1_C'];
			$lodge_human_resources_15_6_self_assessor_1 = $row['lodge_human_resources_15_6_1_A'] + 0;
			$lodge_human_resources_15_7_self_assessor_1 = $row['lodge_human_resources_15_7_1_A'] + $row['lodge_human_resources_15_7_1_B'] + $row['lodge_human_resources_15_7_1_C'] + $row['lodge_human_resources_15_7_1_D'];
			$lodge_human_resources_15_8_self_assessor_1 = $row['lodge_human_resources_15_8_1_A'] + $row['lodge_human_resources_15_8_1_B'] + $row['lodge_human_resources_15_8_1_C'];
			$lodge_human_resources_15_9_self_assessor_1 = $row['lodge_human_resources_15_9_1_A'] + $row['lodge_human_resources_15_9_1_B'] + $row['lodge_human_resources_15_9_1_C'] + $row['lodge_human_resources_15_9_1_D'] + $row['lodge_human_resources_15_9_1_E'] + $row['lodge_human_resources_15_9_1_F'];
			$lodge_human_resources_15_10_self_assessor_1 = $row['lodge_human_resources_15_10_1_A'] + $row['lodge_human_resources_15_10_1_B'] + $row['lodge_human_resources_15_10_1_C'] + $row['lodge_human_resources_15_10_1_D'] + $row['lodge_human_resources_15_10_1_E'] + $row['lodge_human_resources_15_10_1_F'] + $row['lodge_human_resources_15_10_1_G'];
			$lodge_human_resources_15_11_self_assessor_1 = $row['lodge_human_resources_15_11_1_A_a'] + $row['lodge_human_resources_15_11_1_A_b'] + $row['lodge_human_resources_15_11_1_A_c'] + $row['lodge_human_resources_15_11_1_B_a'] + $row['lodge_human_resources_15_11_1_B_b'] + $row['lodge_human_resources_15_11_1_B_c'];
			$output['lodge_human_resources_15_1_self_assessor_1'] = $lodge_human_resources_15_1_self_assessor_1;
			$output['lodge_human_resources_15_2_self_assessor_1'] = $lodge_human_resources_15_2_self_assessor_1;
			$output['lodge_human_resources_15_3_self_assessor_1'] = $lodge_human_resources_15_3_self_assessor_1;
			$output['lodge_human_resources_15_4_self_assessor_1'] = $lodge_human_resources_15_4_self_assessor_1;
			$output['lodge_human_resources_15_5_self_assessor_1'] = $lodge_human_resources_15_5_self_assessor_1;
			$output['lodge_human_resources_15_6_self_assessor_1'] = $lodge_human_resources_15_6_self_assessor_1;
			$output['lodge_human_resources_15_7_self_assessor_1'] = $lodge_human_resources_15_7_self_assessor_1;
			$output['lodge_human_resources_15_8_self_assessor_1'] = $lodge_human_resources_15_8_self_assessor_1;
			$output['lodge_human_resources_15_9_self_assessor_1'] = $lodge_human_resources_15_9_self_assessor_1;
			$output['lodge_human_resources_15_10_self_assessor_1'] = $lodge_human_resources_15_10_self_assessor_1;
			$output['lodge_human_resources_15_11_self_assessor_1'] = $lodge_human_resources_15_11_self_assessor_1;
			$output['lodge_human_resources_15_0_self_assessor_1'] = $lodge_human_resources_15_1_self_assessor_1 + $lodge_human_resources_15_2_self_assessor_1 + $lodge_human_resources_15_3_self_assessor_1 + $lodge_human_resources_15_4_self_assessor_1 + $lodge_human_resources_15_5_self_assessor_1 + $lodge_human_resources_15_6_self_assessor_1 + $lodge_human_resources_15_7_self_assessor_1 + $lodge_human_resources_15_8_self_assessor_1 + $lodge_human_resources_15_9_self_assessor_1 + $lodge_human_resources_15_10_self_assessor_1 + $lodge_human_resources_15_11_self_assessor_1;


			//GENERAL
			$lodge_general_16_1_self_assessor_1 = $row['lodge_general_16_1_1_A'] + 0;
			$lodge_general_16_2_self_assessor_1 = $row['lodge_general_16_2_1_A'] + $row['lodge_general_16_2_1_B'];
			$lodge_general_16_3_self_assessor_1 = $row['lodge_general_16_3_1_A'] + $row['lodge_general_16_3_1_B_a'] + $row['lodge_general_16_3_1_B_b'] + $row['lodge_general_16_3_1_B_c'] + $row['lodge_general_16_3_1_B_d'] + $row['lodge_general_16_3_1_B_e'] + $row['lodge_general_16_3_1_C_a'] + $row['lodge_general_16_3_1_C_b'] + $row['lodge_general_16_3_1_D'];
			$lodge_general_16_4_self_assessor_1 = $row['lodge_general_16_4_1_A'] + $row['lodge_general_16_4_1_B'];
			$lodge_general_16_5_self_assessor_1 = $row['lodge_general_16_5_1_A'] + $row['lodge_general_16_5_1_B'] + $row['lodge_general_16_5_1_C'] + $row['lodge_general_16_5_1_D'] + $row['lodge_general_16_5_1_E'];
			$lodge_general_16_6_self_assessor_1 = $row['lodge_general_16_6_1_A'] + 0;
			$lodge_general_16_7_self_assessor_1 = $row['lodge_general_16_7_1_A'] + $row['lodge_general_16_7_1_B'];
			$lodge_general_16_8_self_assessor_1 = $row['lodge_general_16_8_1_A'] + $row['lodge_general_16_8_1_B'] + $row['lodge_general_16_8_1_C'];
			$lodge_general_16_9_self_assessor_1 = $row['lodge_general_16_9_1_A'] + $row['lodge_general_16_9_1_B'] + $row['lodge_general_16_9_1_C'] + $row['lodge_general_16_9_1_D_a'] + $row['lodge_general_16_9_1_D_b'] + $row['lodge_general_16_9_1_D_c'] + $row['lodge_general_16_9_1_D_d'] + $row['lodge_general_16_9_1_D_e'] + $row['lodge_general_16_9_1_E'] + $row['lodge_general_16_9_1_F'] + $row['lodge_general_16_9_1_G'] + $row['lodge_general_16_9_1_H'];
			$lodge_general_16_10_self_assessor_1 = $row['lodge_general_16_10_1_A'] + 0;
			$lodge_general_16_11_self_assessor_1 = $row['lodge_general_16_11_1_A'] + $row['lodge_general_16_11_1_B_a'] + $row['lodge_general_16_11_1_B_b'] + $row['lodge_general_16_11_1_B_c'] + $row['lodge_general_16_11_1_B_d'] + $row['lodge_general_16_11_1_B_e'] + $row['lodge_general_16_11_1_C'] + $row['lodge_general_16_11_1_D'] + $row['lodge_general_16_11_1_E'];
			$output['lodge_general_16_1_self_assessor_1'] = $lodge_general_16_1_self_assessor_1;
			$output['lodge_general_16_2_self_assessor_1'] = $lodge_general_16_2_self_assessor_1;
			$output['lodge_general_16_3_self_assessor_1'] = $lodge_general_16_3_self_assessor_1;
			$output['lodge_general_16_4_self_assessor_1'] = $lodge_general_16_4_self_assessor_1;
			$output['lodge_general_16_5_self_assessor_1'] = $lodge_general_16_5_self_assessor_1;
			$output['lodge_general_16_6_self_assessor_1'] = $lodge_general_16_6_self_assessor_1;
			$output['lodge_general_16_7_self_assessor_1'] = $lodge_general_16_7_self_assessor_1;
			$output['lodge_general_16_8_self_assessor_1'] = $lodge_general_16_8_self_assessor_1;
			$output['lodge_general_16_9_self_assessor_1'] = $lodge_general_16_9_self_assessor_1;
			$output['lodge_general_16_10_self_assessor_1'] = $lodge_general_16_10_self_assessor_1;
			$output['lodge_general_16_11_self_assessor_1'] = $lodge_general_16_11_self_assessor_1;
			$output['lodge_general_16_0_self_assessor_1'] = $lodge_human_resources_15_1_self_assessor_1 + $lodge_human_resources_15_2_self_assessor_1 + $lodge_human_resources_15_3_self_assessor_1 + $lodge_human_resources_15_4_self_assessor_1 + $lodge_human_resources_15_5_self_assessor_1 + $lodge_human_resources_15_6_self_assessor_1 + $lodge_human_resources_15_7_self_assessor_1 + $lodge_human_resources_15_8_self_assessor_1 + $lodge_human_resources_15_9_self_assessor_1 + $lodge_human_resources_15_10_self_assessor_1 + $lodge_human_resources_15_11_self_assessor_1 + $lodge_general_16_1_self_assessor_1 + $lodge_general_16_2_self_assessor_1 + $lodge_general_16_3_self_assessor_1 + $lodge_general_16_4_self_assessor_1 + $lodge_general_16_5_self_assessor_1 + $lodge_general_16_6_self_assessor_1 + $lodge_general_16_7_self_assessor_1 + $lodge_general_16_8_self_assessor_1 + $lodge_general_16_9_self_assessor_1 + $lodge_general_16_10_self_assessor_1 + $lodge_general_16_11_self_assessor_1;

		}
	}
	
	//// SELF_ASSESSOR_2 ////	
	$query = "SELECT * FROM afcg_assessment_lodge WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_2'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			$lodge_location_1_1_self_assessor_2 = $row['lodge_location_1_1_1_A'] + $row['lodge_location_1_1_1_B'] + $row['lodge_location_1_1_1_C'] + $row['lodge_location_1_1_1_D'] + $row['lodge_location_1_1_1_E'] + $row['lodge_location_1_1_1_F'] + $row['lodge_location_1_1_1_G'] + $row['lodge_location_1_1_1_H'] + $row['lodge_location_1_1_1_I'];
			$lodge_location_1_2_self_assessor_2 = $row['lodge_location_1_2_1_A'] + $row['lodge_location_1_2_1_B'] + $row['lodge_location_1_2_1_C'] + $row['lodge_location_1_2_1_D_a'] + $row['lodge_location_1_2_1_D_b'] + $row['lodge_location_1_2_1_D_c'] + $row['lodge_location_1_2_1_D_d'] + $row['lodge_location_1_2_1_E'] + $row['lodge_location_1_2_1_F'] + $row['lodge_location_1_2_1_G_a'] + $row['lodge_location_1_2_1_G_b'] + $row['lodge_location_1_2_1_G_c'] + $row['lodge_location_1_2_1_H'] + $row['lodge_location_1_2_1_I'] + $row['lodge_location_1_2_1_J'] + $row['lodge_location_1_2_1_K'] + $row['lodge_location_1_2_1_L'] + $row['lodge_location_1_2_1_M'] + $row['lodge_location_1_2_1_N'];
			$output['lodge_location_1_1_self_assessor_2'] = $lodge_location_1_1_self_assessor_2;
			$output['lodge_location_1_2_self_assessor_2'] = $lodge_location_1_2_self_assessor_2;
			$output['lodge_location_1_0_self_assessor_2'] = $lodge_location_1_1_self_assessor_2 + $lodge_location_1_2_self_assessor_2;

						

			//BUILDING 2.0
			//2.1
			$lodge_building_2_1_self_assessor_2 = $row['lodge_building_2_1_1_A'] + $row['lodge_building_2_1_1_B'] + $row['lodge_building_2_1_1_C'] + $row['lodge_building_2_1_1_D'] + $row['lodge_building_2_1_1_E'] + $row['lodge_building_2_1_1_F'] + $row['lodge_building_2_1_1_G'] + $row['lodge_building_2_1_1_H'] + $row['lodge_building_2_1_1_I'] + $row['lodge_building_2_1_1_J'] + $row['lodge_building_2_1_1_K'];
			$lodge_building_2_2_self_assessor_2 = $row['lodge_building_2_2_1_A'] + 0;
			$lodge_building_2_3_self_assessor_2 = $row['lodge_building_2_3_1_A'] + $row['lodge_building_2_3_1_B'] + $row['lodge_building_2_3_1_C'] + $row['lodge_building_2_3_1_D'] + $row['lodge_building_2_3_1_E'] + $row['lodge_building_2_3_1_F'] + $row['lodge_building_2_3_1_G'];
			$lodge_building_2_4_self_assessor_2 = $row['lodge_building_2_4_1_A'] + $row['lodge_building_2_4_1_B'];
			$output['lodge_building_2_1_self_assessor_2'] = $lodge_building_2_1_self_assessor_2;
			$output['lodge_building_2_2_self_assessor_2'] = $lodge_building_2_2_self_assessor_2;
			$output['lodge_building_2_3_self_assessor_2'] = $lodge_building_2_3_self_assessor_2;
			$output['lodge_building_2_4_self_assessor_2'] = $lodge_building_2_4_self_assessor_2;
			$output['lodge_building_2_0_self_assessor_2'] = $lodge_building_2_1_self_assessor_2 + $lodge_building_2_2_self_assessor_2 + $lodge_building_2_3_self_assessor_2 + $lodge_building_2_4_self_assessor_2;




			//FRONT OFFICE 3.0
			$lodge_front_office_3_1_self_assessor_2 = $row['lodge_front_office_3_1_1_A'] + $row['lodge_front_office_3_1_1_B'] + $row['lodge_front_office_3_1_1_C'] + $row['lodge_front_office_3_1_1_D'] + $row['lodge_front_office_3_1_1_E'] + $row['lodge_front_office_3_1_1_F'];
			$lodge_front_office_3_2_self_assessor_2 = $row['lodge_front_office_3_2_1_A'] + $row['lodge_front_office_3_2_1_B_a'] + $row['lodge_front_office_3_2_1_B_b'] + $row['lodge_front_office_3_2_1_B_c'] + $row['lodge_front_office_3_2_1_C_a'] + $row['lodge_front_office_3_2_1_C_b'] + $row['lodge_front_office_3_2_1_C_c'] + $row['lodge_front_office_3_2_1_D_a'] + $row['lodge_front_office_3_2_1_D_b'] + $row['lodge_front_office_3_2_1_D_c'] + $row['lodge_front_office_3_2_1_D_d'];
			$lodge_front_office_3_3_self_assessor_2 = $row['lodge_front_office_3_3_1_A'] + $row['lodge_front_office_3_3_1_B'];
			$lodge_front_office_3_4_self_assessor_2 = $row['lodge_front_office_3_4_1_A_a'] + $row['lodge_front_office_3_4_1_A_b'] + $row['lodge_front_office_3_4_1_A_c'] + $row['lodge_front_office_3_4_1_A_d'];
			$lodge_front_office_3_5_self_assessor_2 = $row['lodge_front_office_3_5_1_A'] + $row['lodge_front_office_3_5_1_B'] + $row['lodge_front_office_3_5_1_C'] + $row['lodge_front_office_3_5_1_D'];
			$lodge_front_office_3_6_self_assessor_2 = $row['lodge_front_office_3_6_1_A'] + $row['lodge_front_office_3_6_1_B'];
			$lodge_front_office_3_7_self_assessor_2 = $row['lodge_front_office_3_7_1_A'] + $row['lodge_front_office_3_7_1_B'] + $row['lodge_front_office_3_7_1_C'];
			$lodge_front_office_3_8_self_assessor_2 = $row['lodge_front_office_3_8_1_A_a'] + $row['lodge_front_office_3_8_1_A_b'] + $row['lodge_front_office_3_8_1_A_c'] + $row['lodge_front_office_3_8_1_B_a'] + $row['lodge_front_office_3_8_1_B_b'] + $row['lodge_front_office_3_8_1_B_c'];
			$lodge_front_office_3_9_self_assessor_2 = $row['lodge_front_office_3_9_1_A'] + $row['lodge_front_office_3_9_1_B'] + $row['lodge_front_office_3_9_1_C'];
			$output['lodge_front_office_3_1_self_assessor_2'] = $lodge_front_office_3_1_self_assessor_2;
			$output['lodge_front_office_3_2_self_assessor_2'] = $lodge_front_office_3_2_self_assessor_2;
			$output['lodge_front_office_3_3_self_assessor_2'] = $lodge_front_office_3_3_self_assessor_2;
			$output['lodge_front_office_3_4_self_assessor_2'] = $lodge_front_office_3_4_self_assessor_2;
			$output['lodge_front_office_3_5_self_assessor_2'] = $lodge_front_office_3_5_self_assessor_2;
			$output['lodge_front_office_3_6_self_assessor_2'] = $lodge_front_office_3_6_self_assessor_2;
			$output['lodge_front_office_3_7_self_assessor_2'] = $lodge_front_office_3_7_self_assessor_2;
			$output['lodge_front_office_3_8_self_assessor_2'] = $lodge_front_office_3_8_self_assessor_2;
			$output['lodge_front_office_3_9_self_assessor_2'] = $lodge_front_office_3_9_self_assessor_2;
			$output['lodge_front_office_3_0_self_assessor_2'] = $lodge_front_office_3_1_self_assessor_2 + $lodge_front_office_3_2_self_assessor_2 + $lodge_front_office_3_3_self_assessor_2 + $lodge_front_office_3_4_self_assessor_2 + $lodge_front_office_3_5_self_assessor_2 + $lodge_front_office_3_6_self_assessor_2 + $lodge_front_office_3_7_self_assessor_2 + $lodge_front_office_3_8_self_assessor_2 + $lodge_front_office_3_9_self_assessor_2;

			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_1_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_2_1_A'];
			$lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_3_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_4_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_F'];
			$lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_5_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_5_1_B'];
			$lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_6_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_7_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2 = $row['lodge_lobby_lounge_other_public_areas_4_8_1_A'];
			$output['lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2;
			$output['lodge_lobby_lounge_other_public_areas_4_0_self_assessor_2'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_2 + $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_2;

			//FUNCTION ROOMS 5.0
			$lodge_function_rooms_5_1_self_assessor_2 = $row['lodge_function_rooms_5_1_1_A'] + $row['lodge_function_rooms_5_1_1_B'] + $row['lodge_function_rooms_5_1_1_C'] + $row['lodge_function_rooms_5_1_1_D'] + $row['lodge_function_rooms_5_1_1_E'] + $row['lodge_function_rooms_5_1_1_F'] + $row['lodge_function_rooms_5_1_1_G'] + $row['lodge_function_rooms_5_1_1_H'] + $row['lodge_function_rooms_5_1_1_I'] + $row['lodge_function_rooms_5_1_1_J'] + $row['lodge_function_rooms_5_1_1_K'] + $row['lodge_function_rooms_5_1_1_L'];
			$output['lodge_function_rooms_5_1_self_assessor_2'] = $lodge_function_rooms_5_1_self_assessor_2;
			$output['lodge_function_rooms_5_0_self_assessor_2'] = $lodge_function_rooms_5_1_self_assessor_2;

			//RESTAURANTS
			$lodge_restaurants_6_1_self_assessor_2 = $row['lodge_restaurants_6_1_1_A'] + $row['lodge_restaurants_6_1_1_B'] + $row['lodge_restaurants_6_1_1_C'] + $row['lodge_restaurants_6_1_1_D'] + $row['lodge_restaurants_6_1_1_E'];
			$lodge_restaurants_6_2_self_assessor_2 = $row['lodge_restaurants_6_2_1_A'] + $row['lodge_restaurants_6_2_1_B'] + $row['lodge_restaurants_6_2_1_C'] + $row['lodge_restaurants_6_2_1_D'] + $row['lodge_restaurants_6_2_1_E'] + $row['lodge_restaurants_6_2_1_F'] + $row['lodge_restaurants_6_2_1_G'] + $row['lodge_restaurants_6_2_1_H'] + $row['lodge_restaurants_6_2_1_I'];
			$lodge_restaurants_6_3_self_assessor_2 = $row['lodge_restaurants_6_3_1_A'] + $row['lodge_restaurants_6_3_1_B'] + $row['lodge_restaurants_6_3_1_C'] + $row['lodge_restaurants_6_3_1_D'];
			$lodge_restaurants_6_4_self_assessor_2 = $row['lodge_restaurants_6_4_1_A'] + $row['lodge_restaurants_6_4_1_B'] + $row['lodge_restaurants_6_4_1_C'] + $row['lodge_restaurants_6_4_1_D'];
			$lodge_restaurants_6_5_self_assessor_2 = $row['lodge_restaurants_6_5_1_A'] + $row['lodge_restaurants_6_5_1_B'] + $row['lodge_restaurants_6_5_1_C'] + $row['lodge_restaurants_6_5_1_D'] + $row['lodge_restaurants_6_5_1_E'] + $row['lodge_restaurants_6_5_1_F'] + $row['lodge_restaurants_6_5_1_G'] + $row['lodge_restaurants_6_5_1_H'];
			$lodge_restaurants_6_6_self_assessor_2 = $row['lodge_restaurants_6_6_1_A'] + $row['lodge_restaurants_6_6_1_B'] + $row['lodge_restaurants_6_6_1_C'] + $row['lodge_restaurants_6_6_1_D'] + $row['lodge_restaurants_6_6_1_E'] + $row['lodge_restaurants_6_6_1_F_a'] + $row['lodge_restaurants_6_6_1_F_b'] + $row['lodge_restaurants_6_6_1_F_c'] + $row['lodge_restaurants_6_6_1_F_d'] + $row['lodge_restaurants_6_6_1_G'] + $row['lodge_restaurants_6_6_1_H_a'] + $row['lodge_restaurants_6_6_1_H_b'] + $row['lodge_restaurants_6_6_1_H_c'] + $row['lodge_restaurants_6_6_1_I'] + $row['lodge_restaurants_6_6_1_J'];
			$lodge_restaurants_6_7_self_assessor_2 = $row['lodge_restaurants_6_7_1_A'] + $row['lodge_restaurants_6_7_1_B'] + $row['lodge_restaurants_6_7_1_C'];
			$lodge_restaurants_6_8_self_assessor_2 = $row['lodge_restaurants_6_8_1_A'] + $row['lodge_restaurants_6_8_1_B'];
			$output['lodge_restaurants_6_1_self_assessor_2'] = $lodge_restaurants_6_1_self_assessor_2;
			$output['lodge_restaurants_6_2_self_assessor_2'] = $lodge_restaurants_6_2_self_assessor_2;
			$output['lodge_restaurants_6_3_self_assessor_2'] = $lodge_restaurants_6_3_self_assessor_2;
			$output['lodge_restaurants_6_4_self_assessor_2'] = $lodge_restaurants_6_4_self_assessor_2;
			$output['lodge_restaurants_6_5_self_assessor_2'] = $lodge_restaurants_6_5_self_assessor_2;
			$output['lodge_restaurants_6_6_self_assessor_2'] = $lodge_restaurants_6_6_self_assessor_2;
			$output['lodge_restaurants_6_7_self_assessor_2'] = $lodge_restaurants_6_7_self_assessor_2;
			$output['lodge_restaurants_6_8_self_assessor_2'] = $lodge_restaurants_6_8_self_assessor_2;
			$output['lodge_restaurants_6_0_self_assessor_2'] = $lodge_restaurants_6_1_self_assessor_2 + $lodge_restaurants_6_2_self_assessor_2 + $lodge_restaurants_6_3_self_assessor_2 + $lodge_restaurants_6_4_self_assessor_2 + $lodge_restaurants_6_5_self_assessor_2 + $lodge_restaurants_6_6_self_assessor_2 + $lodge_restaurants_6_7_self_assessor_2 + $lodge_restaurants_6_8_self_assessor_2;


			//BARS
			$lodge_bar_7_1_self_assessor_2 = $row['lodge_bar_7_1_1_A'] + $row['lodge_bar_7_1_1_B'] + $row['lodge_bar_7_1_1_C'] + $row['lodge_bar_7_1_1_D_a'] + $row['lodge_bar_7_1_1_D_b'] + $row['lodge_bar_7_1_1_D_c'] + $row['lodge_bar_7_1_1_E'] + $row['lodge_bar_7_1_1_F'] + $row['lodge_bar_7_1_1_G'];
			$lodge_bar_7_2_self_assessor_2 = $row['lodge_bar_7_2_1_A'] + $row['lodge_bar_7_2_1_B'] + $row['lodge_bar_7_2_1_C'] + $row['lodge_bar_7_2_1_D'] + $row['lodge_bar_7_2_1_E'] + $row['lodge_bar_7_2_1_F'] + $row['lodge_bar_7_2_1_G'] + $row['lodge_bar_7_2_1_H'] + $row['lodge_bar_7_2_1_I'];
			$lodge_bar_7_3_self_assessor_2 = $row['lodge_bar_7_3_1_A'] + $row['lodge_bar_7_3_1_B'] + $row['lodge_bar_7_3_1_C'] + $row['lodge_bar_7_3_1_D'] + $row['lodge_bar_7_3_1_E'] + $row['lodge_bar_7_3_1_F'];
			$lodge_bar_7_4_self_assessor_2 = $row['lodge_bar_7_4_1_A'] + $row['lodge_bar_7_4_1_B'] + $row['lodge_bar_7_4_1_C'] + $row['lodge_bar_7_4_1_D'] + $row['lodge_bar_7_4_1_E_a'] + $row['lodge_bar_7_4_1_E_b'] + $row['lodge_bar_7_4_1_E_c'] + $row['lodge_bar_7_4_1_E_d'] + $row['lodge_bar_7_4_1_E_e'] + $row['lodge_bar_7_4_1_E_f'] + $row['lodge_bar_7_4_1_E_g'] + $row['lodge_bar_7_4_1_E_h'] + $row['lodge_bar_7_4_1_F'] + $row['lodge_bar_7_4_1_G'] + $row['lodge_bar_7_4_1_H'] + $row['lodge_bar_7_4_1_I'];
			$lodge_bar_7_5_self_assessor_2 = $row['lodge_bar_7_5_1_A'] + $row['lodge_bar_7_5_1_B'] + $row['lodge_bar_7_5_1_C'];
			$lodge_bar_7_6_self_assessor_2 = $row['lodge_bar_7_6_1_A'] + $row['lodge_bar_7_6_1_B'] + $row['lodge_bar_7_6_1_C'];
			$lodge_bar_7_7_self_assessor_2 = $row['lodge_bar_7_7_1_A'] + $row['lodge_bar_7_7_1_B'] + $row['lodge_bar_7_7_1_C'];
			$output['lodge_bar_7_1_self_assessor_2'] = $lodge_bar_7_1_self_assessor_2;
			$output['lodge_bar_7_2_self_assessor_2'] = $lodge_bar_7_2_self_assessor_2;
			$output['lodge_bar_7_3_self_assessor_2'] = $lodge_bar_7_3_self_assessor_2;
			$output['lodge_bar_7_4_self_assessor_2'] = $lodge_bar_7_4_self_assessor_2;
			$output['lodge_bar_7_5_self_assessor_2'] = $lodge_bar_7_5_self_assessor_2;
			$output['lodge_bar_7_6_self_assessor_2'] = $lodge_bar_7_6_self_assessor_2;
			$output['lodge_bar_7_7_self_assessor_2'] = $lodge_bar_7_7_self_assessor_2;
			$output['lodge_bar_7_0_self_assessor_2'] = $lodge_bar_7_1_self_assessor_2 + $lodge_bar_7_2_self_assessor_2 + $lodge_bar_7_3_self_assessor_2 + $lodge_bar_7_4_self_assessor_2 + $lodge_bar_7_5_self_assessor_2 + $lodge_bar_7_6_self_assessor_2 + $lodge_bar_7_7_self_assessor_2;

			//KITCHEN			
			$lodge_kitchen_8_1_self_assessor_2 = $row['lodge_kitchen_8_1_1_A'] + 0;;
			$lodge_kitchen_8_2_self_assessor_2 = $row['lodge_kitchen_8_2_1_A'] + $row['lodge_kitchen_8_2_1_B'] + $row['lodge_kitchen_8_2_1_C'];
			$lodge_kitchen_8_3_self_assessor_2 = $row['lodge_kitchen_8_3_1_A'] + $row['lodge_kitchen_8_3_1_B'] + $row['lodge_kitchen_8_3_1_C'];
			$lodge_kitchen_8_4_self_assessor_2 = $row['lodge_kitchen_8_4_1_A'] + $row['lodge_kitchen_8_4_1_B'] + $row['lodge_kitchen_8_4_1_C'] + $row['lodge_kitchen_8_4_1_D'];
			$lodge_kitchen_8_5_self_assessor_2 = $row['lodge_kitchen_8_5_1_A'] + $row['lodge_kitchen_8_5_1_B'] + $row['lodge_kitchen_8_5_1_C'] + $row['lodge_kitchen_8_5_1_D'] + $row['lodge_kitchen_8_5_1_E'] + $row['lodge_kitchen_8_5_1_F'] + $row['lodge_kitchen_8_5_1_G'] + $row['lodge_kitchen_8_5_1_H'] + $row['lodge_kitchen_8_5_1_I'];
			$lodge_kitchen_8_6_self_assessor_2 = $row['lodge_kitchen_8_6_1_A'] + $row['lodge_kitchen_8_6_1_B'] + $row['lodge_kitchen_8_6_1_C'] + $row['lodge_kitchen_8_6_1_D'] + $row['lodge_kitchen_8_6_1_E'] + $row['lodge_kitchen_8_6_1_F'] + $row['lodge_kitchen_8_6_1_G'];
			$lodge_kitchen_8_7_self_assessor_2 = $row['lodge_kitchen_8_7_1_A'] + $row['lodge_kitchen_8_7_1_B'] + $row['lodge_kitchen_8_7_1_C'] + $row['lodge_kitchen_8_7_1_D'] + $row['lodge_kitchen_8_7_1_E'];
			$lodge_kitchen_8_8_self_assessor_2 = $row['lodge_kitchen_8_8_1_A'] + $row['lodge_kitchen_8_8_1_B'] + $row['lodge_kitchen_8_8_1_C_a'] + $row['lodge_kitchen_8_8_1_C_b'] + $row['lodge_kitchen_8_8_1_D'] + $row['lodge_kitchen_8_8_1_E'] + $row['lodge_kitchen_8_8_1_F'] + $row['lodge_kitchen_8_8_1_G'] + $row['lodge_kitchen_8_8_1_H'];
			$lodge_kitchen_8_9_self_assessor_2 = $row['lodge_kitchen_8_9_1_A'] + $row['lodge_kitchen_8_9_1_B'] + $row['lodge_kitchen_8_9_1_C'] + $row['lodge_kitchen_8_9_1_D'] + $row['lodge_kitchen_8_9_1_E'];
			$lodge_kitchen_8_10_self_assessor_2 = $row['lodge_kitchen_8_10_1_A_a'] + $row['lodge_kitchen_8_10_1_A_b'] + $row['lodge_kitchen_8_10_1_A_c'] + $row['lodge_kitchen_8_10_1_A_d'] + $row['lodge_kitchen_8_10_1_B'] + $row['lodge_kitchen_8_10_1_C'] + $row['lodge_kitchen_8_10_1_D'] + $row['lodge_kitchen_8_10_1_E'] + $row['lodge_kitchen_8_10_1_F'] + $row['lodge_kitchen_8_10_1_G'];
			$lodge_kitchen_8_11_self_assessor_2 = $row['lodge_kitchen_8_11_1_A_a'] + $row['lodge_kitchen_8_11_1_A_b'] + $row['lodge_kitchen_8_11_1_A_c'] + $row['lodge_kitchen_8_11_1_B'] + $row['lodge_kitchen_8_11_1_C_a'] + $row['lodge_kitchen_8_11_1_C_b'] + $row['lodge_kitchen_8_11_1_C_c'] + $row['lodge_kitchen_8_11_1_C_d'] + $row['lodge_kitchen_8_11_1_C_e'] + $row['lodge_kitchen_8_11_1_D_a'] + $row['lodge_kitchen_8_11_1_D_b'] + $row['lodge_kitchen_8_11_1_E'];
			$lodge_kitchen_8_12_self_assessor_2 = $row['lodge_kitchen_8_12_1_A'] + $row['lodge_kitchen_8_12_1_B'] + $row['lodge_kitchen_8_12_1_C'];
			$output['lodge_kitchen_8_1_self_assessor_2'] = $lodge_kitchen_8_1_self_assessor_2;
			$output['lodge_kitchen_8_2_self_assessor_2'] = $lodge_kitchen_8_2_self_assessor_2;
			$output['lodge_kitchen_8_3_self_assessor_2'] = $lodge_kitchen_8_3_self_assessor_2;
			$output['lodge_kitchen_8_4_self_assessor_2'] = $lodge_kitchen_8_4_self_assessor_2;
			$output['lodge_kitchen_8_5_self_assessor_2'] = $lodge_kitchen_8_5_self_assessor_2;
			$output['lodge_kitchen_8_6_self_assessor_2'] = $lodge_kitchen_8_6_self_assessor_2;
			$output['lodge_kitchen_8_7_self_assessor_2'] = $lodge_kitchen_8_7_self_assessor_2;
			$output['lodge_kitchen_8_8_self_assessor_2'] = $lodge_kitchen_8_8_self_assessor_2;
			$output['lodge_kitchen_8_9_self_assessor_2'] = $lodge_kitchen_8_9_self_assessor_2;
			$output['lodge_kitchen_8_10_self_assessor_2'] = $lodge_kitchen_8_10_self_assessor_2;
			$output['lodge_kitchen_8_11_self_assessor_2'] = $lodge_kitchen_8_11_self_assessor_2;
			$output['lodge_kitchen_8_12_self_assessor_2'] = $lodge_kitchen_8_12_self_assessor_2;
			$output['lodge_kitchen_8_0_self_assessor_2'] = $lodge_kitchen_8_1_self_assessor_2 + $lodge_kitchen_8_2_self_assessor_2 + $lodge_kitchen_8_3_self_assessor_2 + $lodge_kitchen_8_4_self_assessor_2 + $lodge_kitchen_8_5_self_assessor_2 + $lodge_kitchen_8_6_self_assessor_2 + $lodge_kitchen_8_7_self_assessor_2 + $lodge_kitchen_8_8_self_assessor_2 + $lodge_kitchen_8_9_self_assessor_2 + $lodge_kitchen_8_10_self_assessor_2 + $lodge_kitchen_8_11_self_assessor_2 + $lodge_kitchen_8_12_self_assessor_2;


			//GUEST ROOMS			
			$lodge_guest_rooms_9_1_self_assessor_2 = $row['lodge_guest_rooms_9_1_1_A'] + 0;
			$lodge_guest_rooms_9_2_self_assessor_2 = $row['lodge_guest_rooms_9_2_1_A'] + $row['lodge_guest_rooms_9_2_1_B'];
			$lodge_guest_rooms_9_3_self_assessor_2 = $row['lodge_guest_rooms_9_3_1_A'] + $row['lodge_guest_rooms_9_3_1_B'];
			$lodge_guest_rooms_9_4_self_assessor_2 = $row['lodge_guest_rooms_9_4_1_A'] + $row['lodge_guest_rooms_9_4_1_B_a'] + $row['lodge_guest_rooms_9_4_1_B_b'] + $row['lodge_guest_rooms_9_4_1_B_c'] + $row['lodge_guest_rooms_9_4_1_B_d'] + $row['lodge_guest_rooms_9_4_1_B_e'] + $row['lodge_guest_rooms_9_4_1_B_f'] + $row['lodge_guest_rooms_9_4_1_B_g'] + $row['lodge_guest_rooms_9_4_1_B_h'] + $row['lodge_guest_rooms_9_4_1_B_i'] + $row['lodge_guest_rooms_9_4_1_B_j'] + $row['lodge_guest_rooms_9_4_1_B_k'] + $row['lodge_guest_rooms_9_4_1_B_l'] + $row['lodge_guest_rooms_9_4_1_B_m'] + $row['lodge_guest_rooms_9_4_1_B_n'] + $row['lodge_guest_rooms_9_4_1_C'] + $row['lodge_guest_rooms_9_4_1_D'] + $row['lodge_guest_rooms_9_4_1_E'] + $row['lodge_guest_rooms_9_4_1_F'] + $row['lodge_guest_rooms_9_4_1_G'];
			$lodge_guest_rooms_9_5_self_assessor_2 = $row['lodge_guest_rooms_9_5_1_A'] + $row['lodge_guest_rooms_9_5_1_B_a'] + $row['lodge_guest_rooms_9_5_1_B_b'] + $row['lodge_guest_rooms_9_5_1_B_c'] + $row['lodge_guest_rooms_9_5_1_B_d'] + $row['lodge_guest_rooms_9_5_1_C'] + $row['lodge_guest_rooms_9_5_1_D'];
			$lodge_guest_rooms_9_6_self_assessor_2 = $row['lodge_guest_rooms_9_6_1_A'] + $row['lodge_guest_rooms_9_6_1_B'];
			$lodge_guest_rooms_9_7_self_assessor_2 = $row['lodge_guest_rooms_9_7_1_A'] + $row['lodge_guest_rooms_9_7_1_B'] + $row['lodge_guest_rooms_9_7_1_C'] + $row['lodge_guest_rooms_9_7_1_D'] + $row['lodge_guest_rooms_9_7_1_E'];
			$lodge_guest_rooms_9_8_self_assessor_2 = $row['lodge_guest_rooms_9_8_1_A'] + $row['lodge_guest_rooms_9_8_1_B'] + $row['lodge_guest_rooms_9_8_1_C'] + $row['lodge_guest_rooms_9_8_1_D'] + $row['lodge_guest_rooms_9_8_1_E'];
			$lodge_guest_rooms_9_9_self_assessor_2 = $row['lodge_guest_rooms_9_9_1_A'] + $row['lodge_guest_rooms_9_9_1_B_a'] + $row['lodge_guest_rooms_9_9_1_B_b'] + $row['lodge_guest_rooms_9_9_1_B_c'] + $row['lodge_guest_rooms_9_9_1_B_d'] + $row['lodge_guest_rooms_9_9_1_B_e'] + $row['lodge_guest_rooms_9_9_1_B_f'] + $row['lodge_guest_rooms_9_9_1_C_a'] + $row['lodge_guest_rooms_9_9_1_C_b'] + $row['lodge_guest_rooms_9_9_1_D'];
			$lodge_guest_rooms_9_10_self_assessor_2 = $row['lodge_guest_rooms_9_10_1_A'] + 0;
			$lodge_guest_rooms_9_11_self_assessor_2 = $row['lodge_guest_rooms_9_11_1_A_a'] + $row['lodge_guest_rooms_9_11_1_A_b'] + $row['lodge_guest_rooms_9_11_1_A_c'] + $row['lodge_guest_rooms_9_11_1_A_d'] + $row['lodge_guest_rooms_9_11_1_A_e'] + $row['lodge_guest_rooms_9_11_1_B_a'] + $row['lodge_guest_rooms_9_11_1_B_b'] + $row['lodge_guest_rooms_9_11_1_B_c'] + $row['lodge_guest_rooms_9_11_1_B_d'] + $row['lodge_guest_rooms_9_11_1_C'];
			$lodge_guest_rooms_9_12_self_assessor_2 = $row['lodge_guest_rooms_9_12_1_A'] + $row['lodge_guest_rooms_9_12_1_B'] + $row['lodge_guest_rooms_9_12_1_C'] + $row['lodge_guest_rooms_9_12_1_D'] + $row['lodge_guest_rooms_9_12_1_E'] + $row['lodge_guest_rooms_9_12_1_F'] + $row['lodge_guest_rooms_9_12_1_G'];
			$lodge_guest_rooms_9_13_self_assessor_2 = $row['lodge_guest_rooms_9_13_1_A'] + $row['lodge_guest_rooms_9_13_1_B'] + $row['lodge_guest_rooms_9_13_1_C'];
			$lodge_guest_rooms_9_14_self_assessor_2 = $row['lodge_guest_rooms_9_14_1_A'] + $row['lodge_guest_rooms_9_14_1_B_a'] + $row['lodge_guest_rooms_9_14_1_B_b'] + $row['lodge_guest_rooms_9_14_1_B_c'] + $row['lodge_guest_rooms_9_14_1_C'];
			$lodge_guest_rooms_9_15_self_assessor_2 = $row['lodge_guest_rooms_9_15_1_A_a'] + $row['lodge_guest_rooms_9_15_1_A_b'] + $row['lodge_guest_rooms_9_15_1_A_c'] + $row['lodge_guest_rooms_9_15_1_A_d'] + $row['lodge_guest_rooms_9_15_1_A_e'] + $row['lodge_guest_rooms_9_15_1_A_f'] + $row['lodge_guest_rooms_9_15_1_A_g'] + $row['lodge_guest_rooms_9_15_1_A_h'] + $row['lodge_guest_rooms_9_15_1_A_i'] + $row['lodge_guest_rooms_9_15_1_A_j'] + $row['lodge_guest_rooms_9_15_1_A_k'] + $row['lodge_guest_rooms_9_15_1_A_l'] + $row['lodge_guest_rooms_9_15_1_A_m'] + $row['lodge_guest_rooms_9_15_1_A_n'] + $row['lodge_guest_rooms_9_15_1_A_o'] + $row['lodge_guest_rooms_9_15_1_A_p'] + $row['lodge_guest_rooms_9_15_1_A_q'] + $row['lodge_guest_rooms_9_15_1_B'] + $row['lodge_guest_rooms_9_15_1_C'];
			$output['lodge_guest_rooms_9_1_self_assessor_2'] = $lodge_guest_rooms_9_1_self_assessor_2;
			$output['lodge_guest_rooms_9_2_self_assessor_2'] = $lodge_guest_rooms_9_2_self_assessor_2;
			$output['lodge_guest_rooms_9_3_self_assessor_2'] = $lodge_guest_rooms_9_3_self_assessor_2;
			$output['lodge_guest_rooms_9_7_self_assessor_2'] = $lodge_guest_rooms_9_7_self_assessor_2;
			$output['lodge_guest_rooms_9_8_self_assessor_2'] = $lodge_guest_rooms_9_8_self_assessor_2;
			$output['lodge_guest_rooms_9_9_self_assessor_2'] = $lodge_guest_rooms_9_9_self_assessor_2;
			$output['lodge_guest_rooms_9_10_self_assessor_2'] = $lodge_guest_rooms_9_10_self_assessor_2;
			$output['lodge_guest_rooms_9_11_self_assessor_2'] = $lodge_guest_rooms_9_11_self_assessor_2;
			$output['lodge_guest_rooms_9_12_self_assessor_2'] = $lodge_guest_rooms_9_12_self_assessor_2;
			$output['lodge_guest_rooms_9_13_self_assessor_2'] = $lodge_guest_rooms_9_13_self_assessor_2;
			$output['lodge_guest_rooms_9_14_self_assessor_2'] = $lodge_guest_rooms_9_14_self_assessor_2;
			$output['lodge_guest_rooms_9_15_self_assessor_2'] = $lodge_guest_rooms_9_15_self_assessor_2;
			$output['lodge_guest_rooms_9_0_self_assessor_2'] =  $lodge_guest_rooms_9_1_self_assessor_2 + $lodge_guest_rooms_9_2_self_assessor_2 + $lodge_guest_rooms_9_3_self_assessor_2 + $lodge_guest_rooms_9_4_self_assessor_2 + $lodge_guest_rooms_9_5_self_assessor_2 + $lodge_guest_rooms_9_6_self_assessor_2 + $lodge_guest_rooms_9_7_self_assessor_2 + $lodge_guest_rooms_9_8_self_assessor_2 + $lodge_guest_rooms_9_9_self_assessor_2 + $lodge_guest_rooms_9_10_self_assessor_2 + $lodge_guest_rooms_9_11_self_assessor_2 + $lodge_guest_rooms_9_12_self_assessor_2 + $lodge_guest_rooms_9_13_self_assessor_2 + $lodge_guest_rooms_9_14_self_assessor_2 + $lodge_guest_rooms_9_15_self_assessor_2;


			//GUEST BATHROOMS
			$lodge_guest_bathrooms_10_1_self_assessor_2 = $row['lodge_guest_bathrooms_10_1_1_A'] + 0;
			$lodge_guest_bathrooms_10_2_self_assessor_2 = $row['lodge_guest_bathrooms_10_2_1_A'] + 0;
			$lodge_guest_bathrooms_10_3_self_assessor_2 = $row['lodge_guest_bathrooms_10_3_1_A_a'] + $row['lodge_guest_bathrooms_10_3_1_A_b'] + $row['lodge_guest_bathrooms_10_3_1_A_c'] + $row['lodge_guest_bathrooms_10_3_1_A_d'] + $row['lodge_guest_bathrooms_10_3_1_A_e'] + $row['lodge_guest_bathrooms_10_3_1_A_f'] + $row['lodge_guest_bathrooms_10_3_1_A_g'] + $row['lodge_guest_bathrooms_10_3_1_A_h'] + $row['lodge_guest_bathrooms_10_3_1_A_i'] + $row['lodge_guest_bathrooms_10_3_1_A_j'] + $row['lodge_guest_bathrooms_10_3_1_A_k'] + $row['lodge_guest_bathrooms_10_3_1_A_l'] + $row['lodge_guest_bathrooms_10_3_1_A_m'] + $row['lodge_guest_bathrooms_10_3_1_A_n'] + $row['lodge_guest_bathrooms_10_3_1_A_o'] + $row['lodge_guest_bathrooms_10_3_1_A_p'] + $row['lodge_guest_bathrooms_10_3_1_A_q'] + $row['lodge_guest_bathrooms_10_3_1_A_r'] + $row['lodge_guest_bathrooms_10_3_1_A_s'] + $row['lodge_guest_bathrooms_10_3_1_A_t'] + $row['lodge_guest_bathrooms_10_3_1_A_u'] + $row['lodge_guest_bathrooms_10_3_1_A_v'] + $row['lodge_guest_bathrooms_10_3_1_A_w'] + $row['lodge_guest_bathrooms_10_3_1_B'] + $row['lodge_guest_bathrooms_10_3_1_C'] + $row['lodge_guest_bathrooms_10_3_1_D'] + $row['lodge_guest_bathrooms_10_3_1_E'] + $row['lodge_guest_bathrooms_10_3_1_F'];
			$lodge_guest_bathrooms_10_4_self_assessor_2 = $row['lodge_guest_bathrooms_10_4_1_A'] + $row['lodge_guest_bathrooms_10_4_1_B'] + $row['lodge_guest_bathrooms_10_4_1_C'] + $row['lodge_guest_bathrooms_10_4_1_D'] + $row['lodge_guest_bathrooms_10_4_1_E'] + $row['lodge_guest_bathrooms_10_4_1_F'];
			$lodge_guest_bathrooms_10_5_self_assessor_2 = $row['lodge_guest_bathrooms_10_5_1_A_a'] + $row['lodge_guest_bathrooms_10_5_1_A_b'] + $row['lodge_guest_bathrooms_10_5_1_A_c'] + $row['lodge_guest_bathrooms_10_5_1_A_d'] + $row['lodge_guest_bathrooms_10_5_1_A_e'] + $row['lodge_guest_bathrooms_10_5_1_B'] + $row['lodge_guest_bathrooms_10_5_1_C'] + $row['lodge_guest_bathrooms_10_5_1_D'] + $row['lodge_guest_bathrooms_10_5_1_E'] + $row['lodge_guest_bathrooms_10_5_1_F'];
			$lodge_guest_bathrooms_10_6_self_assessor_2 = $row['lodge_guest_bathrooms_10_6_1_A'] + $row['lodge_guest_bathrooms_10_6_1_B'] + $row['lodge_guest_bathrooms_10_6_1_C'];
			$lodge_guest_bathrooms_10_7_self_assessor_2 = $row['lodge_guest_bathrooms_10_7_1_A'] + $row['lodge_guest_bathrooms_10_7_1_B'] + $row['lodge_guest_bathrooms_10_7_1_C'] + $row['lodge_guest_bathrooms_10_7_1_D'];
			$lodge_guest_bathrooms_10_8_self_assessor_2 = $row['lodge_guest_bathrooms_10_8_1_A_a'] + $row['lodge_guest_bathrooms_10_8_1_A_b'] + $row['lodge_guest_bathrooms_10_8_1_A_c'] + $row['lodge_guest_bathrooms_10_8_1_A_d'] + $row['lodge_guest_bathrooms_10_8_1_A_e'] + $row['lodge_guest_bathrooms_10_8_1_A_f'] + $row['lodge_guest_bathrooms_10_8_1_A_g'] + $row['lodge_guest_bathrooms_10_8_1_B'] + $row['lodge_guest_bathrooms_10_8_1_C'];
			$lodge_guest_bathrooms_10_9_self_assessor_2 = $row['lodge_guest_bathrooms_10_9_1_A'] + $row['lodge_guest_bathrooms_10_9_1_B'];
			$output['lodge_guest_bathrooms_10_1_self_assessor_2'] = $lodge_guest_bathrooms_10_1_self_assessor_2;
			$output['lodge_guest_bathrooms_10_3_self_assessor_2'] = $lodge_guest_bathrooms_10_3_self_assessor_2;
			$output['lodge_guest_bathrooms_10_4_self_assessor_2'] = $lodge_guest_bathrooms_10_4_self_assessor_2;
			$output['lodge_guest_bathrooms_10_5_self_assessor_2'] = $lodge_guest_bathrooms_10_5_self_assessor_2;
			$output['lodge_guest_bathrooms_10_6_self_assessor_2'] = $lodge_guest_bathrooms_10_6_self_assessor_2;
			$output['lodge_guest_bathrooms_10_7_self_assessor_2'] = $lodge_guest_bathrooms_10_7_self_assessor_2;
			$output['lodge_guest_bathrooms_10_8_self_assessor_2'] = $lodge_guest_bathrooms_10_8_self_assessor_2;
			$output['lodge_guest_bathrooms_10_9_self_assessor_2'] = $lodge_guest_bathrooms_10_9_self_assessor_2;
			$output['lodge_guest_bathrooms_10_0_self_assessor_2'] =  $lodge_guest_bathrooms_10_1_self_assessor_2 + $lodge_guest_bathrooms_10_2_self_assessor_2 + $lodge_guest_bathrooms_10_3_self_assessor_2 + $lodge_guest_bathrooms_10_4_self_assessor_2 + $lodge_guest_bathrooms_10_5_self_assessor_2 + $lodge_guest_bathrooms_10_6_self_assessor_2 + $lodge_guest_bathrooms_10_7_self_assessor_2 + $lodge_guest_bathrooms_10_8_self_assessor_2 + $lodge_guest_bathrooms_10_9_self_assessor_2;

			//SUITES
			$lodge_suites_11_1_self_assessor_2 = $row['lodge_suites_11_1_1_A'] + 0;
			$lodge_suites_11_2_self_assessor_2 = $row['lodge_suites_11_2_1_A'] + $row['lodge_suites_11_2_1_B'];
			$lodge_suites_11_3_self_assessor_2 = $row['lodge_suites_11_3_1_A_a'] + $row['lodge_suites_11_3_1_A_b'] + $row['lodge_suites_11_3_1_A_c'] + $row['lodge_suites_11_3_1_A_d'];
			$lodge_suites_11_4_self_assessor_2 = $row['lodge_suites_11_4_1_A'] + $row['lodge_suites_11_4_1_B'];
			$lodge_suites_11_5_self_assessor_2 = $row['lodge_suites_11_5_1_A_a'] + $row['lodge_suites_11_5_1_A_b'] + $row['lodge_suites_11_5_1_B_a'] + $row['lodge_suites_11_5_1_B_b'] + $row['lodge_suites_11_5_1_B_c'] + $row['lodge_suites_11_5_1_B_d'] + $row['lodge_suites_11_5_1_B_e'] + $row['lodge_suites_11_5_1_B_f'] + $row['lodge_suites_11_5_1_B_g'] + $row['lodge_suites_11_5_1_B_h'] + $row['lodge_suites_11_5_1_B_i'] + $row['lodge_suites_11_5_1_B_j'] + $row['lodge_suites_11_5_1_B_k'] + $row['lodge_suites_11_5_1_B_l'] + $row['lodge_suites_11_5_1_B_m'] + $row['lodge_suites_11_5_1_B_n'] + $row['lodge_suites_11_5_1_B_o'] + $row['lodge_suites_11_5_1_B_p'] + $row['lodge_suites_11_5_1_C'] + $row['lodge_suites_11_5_1_D'] + $row['lodge_suites_11_5_1_E'] + $row['lodge_suites_11_5_1_F'] + $row['lodge_suites_11_5_1_G'];
			$lodge_suites_11_6_self_assessor_2 = $row['lodge_suites_11_6_1_A'] + $row['lodge_suites_11_6_1_B'] + $row['lodge_suites_11_6_1_C'] + $row['lodge_suites_11_6_1_D'] + $row['lodge_suites_11_6_1_E'];
			$lodge_suites_11_7_self_assessor_2 = $row['lodge_suites_11_7_1_A'] + $row['lodge_suites_11_7_1_B_a'] + $row['lodge_suites_11_7_1_B_b'] + $row['lodge_suites_11_7_1_B_c'] + $row['lodge_suites_11_7_1_B_d'] + $row['lodge_suites_11_7_1_C'] + $row['lodge_suites_11_7_1_D'];
			$lodge_suites_11_8_self_assessor_2 = $row['lodge_suites_11_8_1_A'] + $row['lodge_suites_11_8_1_B_a'] + $row['lodge_suites_11_8_1_B_b'] + $row['lodge_suites_11_8_1_B_c'] + $row['lodge_suites_11_8_1_B_d'] + $row['lodge_suites_11_8_1_B_e'] + $row['lodge_suites_11_8_1_B_f'] + $row['lodge_suites_11_8_1_B_g'] + $row['lodge_suites_11_8_1_B_h'] + $row['lodge_suites_11_8_1_B_i'] + $row['lodge_suites_11_8_1_C_a'] + $row['lodge_suites_11_8_1_C_b'] + $row['lodge_suites_11_8_1_D'];
			$lodge_suites_11_9_self_assessor_2 = $row['lodge_suites_11_9_1_A'] + 0;
			$lodge_suites_11_10_self_assessor_2 = $row['lodge_suites_11_10_1_A_a'] + $row['lodge_suites_11_10_1_A_b'] + $row['lodge_suites_11_10_1_A_c'] + $row['lodge_suites_11_10_1_A_d'] + $row['lodge_suites_11_10_1_A_e'] + $row['lodge_suites_11_10_1_B_a'] + $row['lodge_suites_11_10_1_B_b'] + $row['lodge_suites_11_10_1_B'] + $row['lodge_suites_11_10_1_C'];
			$lodge_suites_11_11_self_assessor_2 = $row['lodge_suites_11_11_1_A'] + $row['lodge_suites_11_11_1_B'] + $row['lodge_suites_11_11_1_C'] + $row['lodge_suites_11_11_1_D'] + $row['lodge_suites_11_11_1_E'] + $row['lodge_suites_11_11_1_F'] + $row['lodge_suites_11_11_1_G'];
			$lodge_suites_11_12_self_assessor_2 = $row['lodge_suites_11_12_1_A_a'] + $row['lodge_suites_11_12_1_A_b'] + $row['lodge_suites_11_12_1_A_c'] + $row['lodge_suites_11_12_1_A_d'] + $row['lodge_suites_11_12_1_A_e'] + $row['lodge_suites_11_12_1_A_f'] + $row['lodge_suites_11_12_1_A_g'] + $row['lodge_suites_11_12_1_A_h'] + $row['lodge_suites_11_12_1_A_i'] + $row['lodge_suites_11_12_1_A_j'] + $row['lodge_suites_11_12_1_A_k'] + $row['lodge_suites_11_12_1_A_l'] + $row['lodge_suites_11_12_1_A_m'] + $row['lodge_suites_11_12_1_A_n'] + $row['lodge_suites_11_12_1_A_o'] + $row['lodge_suites_11_12_1_A_p'] + $row['lodge_suites_11_12_1_A_q'] + $row['lodge_suites_11_12_1_A_r'] + $row['lodge_suites_11_12_1_A_s'] + $row['lodge_suites_11_12_1_A_t'] + $row['lodge_suites_11_12_1_A_u'] + $row['lodge_suites_11_12_1_A_v'] + $row['lodge_suites_11_12_1_B'] + $row['lodge_suites_11_12_1_C'];
			$lodge_suites_11_13_self_assessor_2 = $row['lodge_suites_11_13_1_A'] + $row['lodge_suites_11_13_1_B'];
			$lodge_suites_11_14_self_assessor_2 = $row['lodge_suites_11_14_1_A'] + $row['lodge_suites_11_14_1_B_a'] + $row['lodge_suites_11_14_1_B_b'] + $row['lodge_suites_11_14_1_B_c'] + $row['lodge_suites_11_14_1_C'];
			$lodge_suites_11_15_self_assessor_2 = $row['lodge_suites_11_15_1_A'] + 0;
			$lodge_suites_11_16_self_assessor_2 = $row['lodge_suites_11_16_1_A_a'] + $row['lodge_suites_11_16_1_A_b'] + $row['lodge_suites_11_16_1_A_c'] + $row['lodge_suites_11_16_1_A_d'] + $row['lodge_suites_11_16_1_A_e'] + $row['lodge_suites_11_16_1_A_f'] + $row['lodge_suites_11_16_1_A_g'] + $row['lodge_suites_11_16_1_A_h'] + $row['lodge_suites_11_16_1_A_i'] + $row['lodge_suites_11_16_1_A_j'] + $row['lodge_suites_11_16_1_A_k'] + $row['lodge_suites_11_16_1_A_l'] + $row['lodge_suites_11_16_1_A_m'] + $row['lodge_suites_11_16_1_A_n'] + $row['lodge_suites_11_16_1_A_o'] + $row['lodge_suites_11_16_1_A_p'] + $row['lodge_suites_11_16_1_A_q'] + $row['lodge_suites_11_16_1_A_r'] + $row['lodge_suites_11_16_1_A_s'] + $row['lodge_suites_11_16_1_A_t'] + $row['lodge_suites_11_16_1_A_u'] + $row['lodge_suites_11_16_1_A_v'] + $row['lodge_suites_11_16_1_B'] + $row['lodge_suites_11_16_1_C'] + $row['lodge_suites_11_16_1_D'] + $row['lodge_suites_11_16_1_E'] + $row['lodge_suites_11_16_1_F'];
			$lodge_suites_11_17_self_assessor_2 = $row['lodge_suites_11_17_1_A_a'] + $row['lodge_suites_11_17_1_A_b'] + $row['lodge_suites_11_17_1_A_c'] + $row['lodge_suites_11_17_1_A_d'] + $row['lodge_suites_11_17_1_A_e'] + $row['lodge_suites_11_17_1_A_f'] + $row['lodge_suites_11_17_1_A_g'] + $row['lodge_suites_11_17_1_A_h'] + $row['lodge_suites_11_17_1_A_i'] + $row['lodge_suites_11_17_1_A_j'] + $row['lodge_suites_11_17_1_A_k'] + $row['lodge_suites_11_17_1_B'] + $row['lodge_suites_11_17_1_C'];
			$lodge_suites_11_18_self_assessor_2 = $row['lodge_suites_11_18_1_A'] + $row['lodge_suites_11_18_1_B'] + $row['lodge_suites_11_18_1_C'] + $row['lodge_suites_11_18_1_D'] + $row['lodge_suites_11_18_1_E'] + $row['lodge_suites_11_18_1_F'];
			$lodge_suites_11_19_self_assessor_2 = $row['lodge_suites_11_19_1_A_a'] + $row['lodge_suites_11_19_1_A_b'] + $row['lodge_suites_11_19_1_A_c'] + $row['lodge_suites_11_19_1_A_d'] + $row['lodge_suites_11_19_1_A_e'] + $row['lodge_suites_11_19_1_B'] + $row['lodge_suites_11_19_1_C'] + $row['lodge_suites_11_19_1_D'] + $row['lodge_suites_11_19_1_E'] + $row['lodge_suites_11_19_1_F'];
			$lodge_suites_11_20_self_assessor_2 = $row['lodge_suites_11_20_1_A'] + $row['lodge_suites_11_20_1_B'] + $row['lodge_suites_11_20_1_C'];
			$output['lodge_suites_11_1_self_assessor_2'] = $lodge_suites_11_1_self_assessor_2;
			$output['lodge_suites_11_2_self_assessor_2'] = $lodge_suites_11_2_self_assessor_2;
			$output['lodge_suites_11_3_self_assessor_2'] = $lodge_suites_11_3_self_assessor_2;
			$output['lodge_suites_11_4_self_assessor_2'] = $lodge_suites_11_4_self_assessor_2;
			$output['lodge_suites_11_5_self_assessor_2'] = $lodge_suites_11_5_self_assessor_2;
			$output['lodge_suites_11_6_self_assessor_2'] = $lodge_suites_11_6_self_assessor_2;
			$output['lodge_suites_11_7_self_assessor_2'] = $lodge_suites_11_7_self_assessor_2;
			$output['lodge_suites_11_8_self_assessor_2'] = $lodge_suites_11_8_self_assessor_2;
			$output['lodge_suites_11_9_self_assessor_2'] = $lodge_suites_11_9_self_assessor_2;
			$output['lodge_suites_11_10_self_assessor_2'] = $lodge_suites_11_10_self_assessor_2;
			$output['lodge_suites_11_11_self_assessor_2'] = $lodge_suites_11_11_self_assessor_2;
			$output['lodge_suites_11_12_self_assessor_2'] = $lodge_suites_11_12_self_assessor_2;
			$output['lodge_suites_11_13_self_assessor_2'] = $lodge_suites_11_13_self_assessor_2;
			$output['lodge_suites_11_14_self_assessor_2'] = $lodge_suites_11_14_self_assessor_2;
			$output['lodge_suites_11_15_self_assessor_2'] = $lodge_suites_11_15_self_assessor_2;
			$output['lodge_suites_11_16_self_assessor_2'] = $lodge_suites_11_16_self_assessor_2;
			$output['lodge_suites_11_17_self_assessor_2'] = $lodge_suites_11_17_self_assessor_2;
			$output['lodge_suites_11_18_self_assessor_2'] = $lodge_suites_11_18_self_assessor_2;
			$output['lodge_suites_11_19_self_assessor_2'] = $lodge_suites_11_19_self_assessor_2;
			$output['lodge_suites_11_20_self_assessor_2'] = $lodge_suites_11_20_self_assessor_2;
			$output['lodge_suites_11_0_self_assessor_2'] = $lodge_suites_11_1_self_assessor_2 + $lodge_suites_11_2_self_assessor_2 + $lodge_suites_11_3_self_assessor_2 + $lodge_suites_11_4_self_assessor_2 + $lodge_suites_11_5_self_assessor_2 + $lodge_suites_11_6_self_assessor_2 + $lodge_suites_11_7_self_assessor_2 + $lodge_suites_11_8_self_assessor_2 + $lodge_suites_11_9_self_assessor_2 + $lodge_suites_11_10_self_assessor_2 + $lodge_suites_11_11_self_assessor_2 + $lodge_suites_11_12_self_assessor_2 + $lodge_suites_11_13_self_assessor_2 + $lodge_suites_11_14_self_assessor_2 + $lodge_suites_11_15_self_assessor_2 + $lodge_suites_11_16_self_assessor_2 + $lodge_suites_11_17_self_assessor_2 + $lodge_suites_11_18_self_assessor_2 + $lodge_suites_11_19_self_assessor_2 + $lodge_suites_11_20_self_assessor_2;
			//HYGIENE AND SANITATION
			$lodge_hygiene_and_sanitation_12_1_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_1_1_A'] + $row['lodge_hygiene_and_sanitation_12_1_1_B'] + $row['lodge_hygiene_and_sanitation_12_1_1_C'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_f'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_g'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_h'] + $row['lodge_hygiene_and_sanitation_12_1_1_E'] + $row['lodge_hygiene_and_sanitation_12_1_1_F'] + $row['lodge_hygiene_and_sanitation_12_1_1_G'] + $row['lodge_hygiene_and_sanitation_12_1_1_H'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_J'] + $row['lodge_hygiene_and_sanitation_12_1_1_K'] + $row['lodge_hygiene_and_sanitation_12_1_1_L'] + $row['lodge_hygiene_and_sanitation_12_1_1_M'] + $row['lodge_hygiene_and_sanitation_12_1_1_N'];
			$lodge_hygiene_and_sanitation_12_2_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_2_1_A'] + $row['lodge_hygiene_and_sanitation_12_2_1_B'] + $row['lodge_hygiene_and_sanitation_12_2_1_C'] + $row['lodge_hygiene_and_sanitation_12_2_1_D'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_e'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_f'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_g'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_h'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_i'] + $row['lodge_hygiene_and_sanitation_12_2_1_F'] + $row['lodge_hygiene_and_sanitation_12_2_1_G'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_I'] + $row['lodge_hygiene_and_sanitation_12_2_1_J'];
			$lodge_hygiene_and_sanitation_12_3_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_3_1_A'] + $row['lodge_hygiene_and_sanitation_12_3_1_B'] + $row['lodge_hygiene_and_sanitation_12_3_1_C'] + $row['lodge_hygiene_and_sanitation_12_3_1_D'] + $row['lodge_hygiene_and_sanitation_12_3_1_E'] + $row['lodge_hygiene_and_sanitation_12_3_1_F'] + $row['lodge_hygiene_and_sanitation_12_3_1_G'];
			$lodge_hygiene_and_sanitation_12_4_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_4_1_A'] + $row['lodge_hygiene_and_sanitation_12_4_1_B'] + $row['lodge_hygiene_and_sanitation_12_4_1_C'] + $row['lodge_hygiene_and_sanitation_12_4_1_D'];
			$lodge_hygiene_and_sanitation_12_5_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_5_1_A'] + $row['lodge_hygiene_and_sanitation_12_5_1_B'];
			$lodge_hygiene_and_sanitation_12_6_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_6_1_A'] + $row['lodge_hygiene_and_sanitation_12_6_1_B'] + $row['lodge_hygiene_and_sanitation_12_6_1_C'];
			$lodge_hygiene_and_sanitation_12_7_self_assessor_2 = $row['lodge_hygiene_and_sanitation_12_7_1_A'] + $row['lodge_hygiene_and_sanitation_12_7_1_B'];
			$output['lodge_hygiene_and_sanitation_12_1_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_2_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_2_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_3_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_3_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_4_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_4_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_5_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_5_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_6_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_6_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_7_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_7_self_assessor_2;
			$output['lodge_hygiene_and_sanitation_12_0_self_assessor_2'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_2 + $lodge_hygiene_and_sanitation_12_2_self_assessor_2 + $lodge_hygiene_and_sanitation_12_3_self_assessor_2 + $lodge_hygiene_and_sanitation_12_4_self_assessor_2 + $lodge_hygiene_and_sanitation_12_5_self_assessor_2 + $lodge_hygiene_and_sanitation_12_6_self_assessor_2 + $lodge_hygiene_and_sanitation_12_7_self_assessor_2;


			//SAFETY AND SECURITY
			$lodge_safety_and_security_13_1_self_assessor_2 = $row['lodge_safety_and_security_13_1_1_A'] + $row['lodge_safety_and_security_13_1_1_B'] + $row['lodge_safety_and_security_13_1_1_C'] + $row['lodge_safety_and_security_13_1_1_D'] + $row['lodge_safety_and_security_13_1_1_E'] + $row['lodge_safety_and_security_13_1_1_F_a'] + $row['lodge_safety_and_security_13_1_1_F_b'] + $row['lodge_safety_and_security_13_1_1_F_c'] + $row['lodge_safety_and_security_13_1_1_F_d'] + $row['lodge_safety_and_security_13_1_1_F_e'] + $row['lodge_safety_and_security_13_1_1_F_f'] + $row['lodge_safety_and_security_13_1_1_F_g'] + $row['lodge_safety_and_security_13_1_1_G'] + $row['lodge_safety_and_security_13_1_1_H'] + $row['lodge_safety_and_security_13_1_1_I'] + $row['lodge_safety_and_security_13_1_1_J'];
			$lodge_safety_and_security_13_2_self_assessor_2 = $row['lodge_safety_and_security_13_2_1_A'] + $row['lodge_safety_and_security_13_2_1_B'];
			$lodge_safety_and_security_13_3_self_assessor_2 = $row['lodge_safety_and_security_13_3_1_A'] + $row['lodge_safety_and_security_13_3_1_B'] + $row['lodge_safety_and_security_13_3_1_C'] + $row['lodge_safety_and_security_13_3_1_D'] + $row['lodge_safety_and_security_13_3_1_E'];
			$lodge_safety_and_security_13_4_self_assessor_2 = $row['lodge_safety_and_security_13_4_1_A'] + $row['lodge_safety_and_security_13_4_1_B'] + $row['lodge_safety_and_security_13_4_1_C'];
			$lodge_safety_and_security_13_5_self_assessor_2 = $row['lodge_safety_and_security_13_5_1_A'] + $row['lodge_safety_and_security_13_5_1_B'] + $row['lodge_safety_and_security_13_5_1_C'] + $row['lodge_safety_and_security_13_5_1_D'] + $row['lodge_safety_and_security_13_5_1_E'] + $row['lodge_safety_and_security_13_5_1_F'];
			$output['lodge_safety_and_security_13_1_self_assessor_2'] = $lodge_safety_and_security_13_1_self_assessor_2;
			$output['lodge_safety_and_security_13_2_self_assessor_2'] = $lodge_safety_and_security_13_2_self_assessor_2;
			$output['lodge_safety_and_security_13_3_self_assessor_2'] = $lodge_safety_and_security_13_3_self_assessor_2;
			$output['lodge_safety_and_security_13_4_self_assessor_2'] = $lodge_safety_and_security_13_4_self_assessor_2;
			$output['lodge_safety_and_security_13_5_self_assessor_2'] = $lodge_safety_and_security_13_5_self_assessor_2;
			$output['lodge_safety_and_security_13_0_self_assessor_2'] = $lodge_safety_and_security_13_1_self_assessor_2 + $lodge_safety_and_security_13_2_self_assessor_2 + $lodge_safety_and_security_13_3_self_assessor_2 + $lodge_safety_and_security_13_4_self_assessor_2 + $lodge_safety_and_security_13_5_self_assessor_2;

			//SUNDRY SERVICES
			$lodge_sundry_services_14_1_self_assessor_2 = $row['lodge_sundry_services_14_1_1_A'] + $row['lodge_sundry_services_14_1_1_B'] + $row['lodge_sundry_services_14_1_1_C'];
			$lodge_sundry_services_14_2_self_assessor_2 = $row['lodge_sundry_services_14_2_1_A'] + 0;
			$lodge_sundry_services_14_3_self_assessor_2 = $row['lodge_sundry_services_14_3_1_A'] + $row['lodge_sundry_services_14_3_1_B'];
			$lodge_sundry_services_14_4_self_assessor_2 = $row['lodge_sundry_services_14_4_1_A'] + 0;
			$output['lodge_sundry_services_14_1_self_assessor_2'] = $lodge_sundry_services_14_1_self_assessor_2;
			$output['lodge_sundry_services_14_2_self_assessor_2'] = $lodge_sundry_services_14_2_self_assessor_2;
			$output['lodge_sundry_services_14_3_self_assessor_2'] = $lodge_sundry_services_14_3_self_assessor_2;
			$output['lodge_sundry_services_14_4_self_assessor_2'] = $lodge_sundry_services_14_4_self_assessor_2;
			$output['lodge_sundry_services_14_0_self_assessor_2'] = $lodge_sundry_services_14_1_self_assessor_2 + $lodge_sundry_services_14_2_self_assessor_2 + $lodge_sundry_services_14_3_self_assessor_2 + $lodge_sundry_services_14_4_self_assessor_2;


			//HUMAN RESOURCES
			$lodge_human_resources_15_1_self_assessor_2 = $row['lodge_human_resources_15_1_1_text'] + $row['lodge_human_resources_15_1_1_A'] + $row['lodge_human_resources_15_1_1_B_a'] + $row['lodge_human_resources_15_1_1_B_b'] + $row['lodge_human_resources_15_1_1_B_c'] + $row['lodge_human_resources_15_1_1_B_d'] + $row['lodge_human_resources_15_1_1_B_e'] + $row['lodge_human_resources_15_1_1_B_f'];
			$lodge_human_resources_15_2_self_assessor_2 = $row['lodge_human_resources_15_2_1_A'] + $row['lodge_human_resources_15_2_1_B'];
			$lodge_human_resources_15_3_self_assessor_2 = $row['lodge_human_resources_15_3_1_A'] + $row['lodge_human_resources_15_3_1_B'];
			$lodge_human_resources_15_4_self_assessor_2 = $row['lodge_human_resources_15_4_1_A'] + $row['lodge_human_resources_15_4_1_B'] + $row['lodge_human_resources_15_4_1_C'];
			$lodge_human_resources_15_6_self_assessor_2 = $row['lodge_human_resources_15_6_1_A'] + 0;
			$lodge_human_resources_15_7_self_assessor_2 = $row['lodge_human_resources_15_7_1_A'] + $row['lodge_human_resources_15_7_1_B'] + $row['lodge_human_resources_15_7_1_C'] + $row['lodge_human_resources_15_7_1_D'];
			$lodge_human_resources_15_8_self_assessor_2 = $row['lodge_human_resources_15_8_1_A'] + $row['lodge_human_resources_15_8_1_B'] + $row['lodge_human_resources_15_8_1_C'];
			$lodge_human_resources_15_9_self_assessor_2 = $row['lodge_human_resources_15_9_1_A'] + $row['lodge_human_resources_15_9_1_B'] + $row['lodge_human_resources_15_9_1_C'] + $row['lodge_human_resources_15_9_1_D'] + $row['lodge_human_resources_15_9_1_E'] + $row['lodge_human_resources_15_9_1_F'];
			$lodge_human_resources_15_10_self_assessor_2 = $row['lodge_human_resources_15_10_1_A'] + $row['lodge_human_resources_15_10_1_B'] + $row['lodge_human_resources_15_10_1_C'] + $row['lodge_human_resources_15_10_1_D'] + $row['lodge_human_resources_15_10_1_E'] + $row['lodge_human_resources_15_10_1_F'] + $row['lodge_human_resources_15_10_1_G'];
			$lodge_human_resources_15_11_self_assessor_2 = $row['lodge_human_resources_15_11_1_A_a'] + $row['lodge_human_resources_15_11_1_A_b'] + $row['lodge_human_resources_15_11_1_A_c'] + $row['lodge_human_resources_15_11_1_B_a'] + $row['lodge_human_resources_15_11_1_B_b'] + $row['lodge_human_resources_15_11_1_B_c'];
			$output['lodge_human_resources_15_1_self_assessor_2'] = $lodge_human_resources_15_1_self_assessor_2;
			$output['lodge_human_resources_15_2_self_assessor_2'] = $lodge_human_resources_15_2_self_assessor_2;
			$output['lodge_human_resources_15_3_self_assessor_2'] = $lodge_human_resources_15_3_self_assessor_2;
			$output['lodge_human_resources_15_4_self_assessor_2'] = $lodge_human_resources_15_4_self_assessor_2;
			$output['lodge_human_resources_15_5_self_assessor_2'] = $lodge_human_resources_15_5_self_assessor_2;
			$output['lodge_human_resources_15_6_self_assessor_2'] = $lodge_human_resources_15_6_self_assessor_2;
			$output['lodge_human_resources_15_7_self_assessor_2'] = $lodge_human_resources_15_7_self_assessor_2;
			$output['lodge_human_resources_15_8_self_assessor_2'] = $lodge_human_resources_15_8_self_assessor_2;
			$output['lodge_human_resources_15_9_self_assessor_2'] = $lodge_human_resources_15_9_self_assessor_2;
			$output['lodge_human_resources_15_10_self_assessor_2'] = $lodge_human_resources_15_10_self_assessor_2;
			$output['lodge_human_resources_15_11_self_assessor_2'] = $lodge_human_resources_15_11_self_assessor_2;
			$output['lodge_human_resources_15_0_self_assessor_2'] = $lodge_human_resources_15_1_self_assessor_2 + $lodge_human_resources_15_2_self_assessor_2 + $lodge_human_resources_15_3_self_assessor_2 + $lodge_human_resources_15_4_self_assessor_2 + $lodge_human_resources_15_5_self_assessor_2 + $lodge_human_resources_15_6_self_assessor_2 + $lodge_human_resources_15_7_self_assessor_2 + $lodge_human_resources_15_8_self_assessor_2 + $lodge_human_resources_15_9_self_assessor_2 + $lodge_human_resources_15_10_self_assessor_2 + $lodge_human_resources_15_11_self_assessor_2;


			//GENERAL
			$lodge_general_16_1_self_assessor_2 = $row['lodge_general_16_1_1_A'] + 0;
			$lodge_general_16_2_self_assessor_2 = $row['lodge_general_16_2_1_A'] + $row['lodge_general_16_2_1_B'];
			$lodge_general_16_3_self_assessor_2 = $row['lodge_general_16_3_1_A'] + $row['lodge_general_16_3_1_B_a'] + $row['lodge_general_16_3_1_B_b'] + $row['lodge_general_16_3_1_B_c'] + $row['lodge_general_16_3_1_B_d'] + $row['lodge_general_16_3_1_B_e'] + $row['lodge_general_16_3_1_C_a'] + $row['lodge_general_16_3_1_C_b'] + $row['lodge_general_16_3_1_D'];
			$lodge_general_16_4_self_assessor_2 = $row['lodge_general_16_4_1_A'] + $row['lodge_general_16_4_1_B'];
			$lodge_general_16_5_self_assessor_2 = $row['lodge_general_16_5_1_A'] + $row['lodge_general_16_5_1_B'] + $row['lodge_general_16_5_1_C'] + $row['lodge_general_16_5_1_D'] + $row['lodge_general_16_5_1_E'];
			$lodge_general_16_6_self_assessor_2 = $row['lodge_general_16_6_1_A'] + 0;
			$lodge_general_16_7_self_assessor_2 = $row['lodge_general_16_7_1_A'] + $row['lodge_general_16_7_1_B'];
			$lodge_general_16_8_self_assessor_2 = $row['lodge_general_16_8_1_A'] + $row['lodge_general_16_8_1_B'] + $row['lodge_general_16_8_1_C'];
			$lodge_general_16_9_self_assessor_2 = $row['lodge_general_16_9_1_A'] + $row['lodge_general_16_9_1_B'] + $row['lodge_general_16_9_1_C'] + $row['lodge_general_16_9_1_D_a'] + $row['lodge_general_16_9_1_D_b'] + $row['lodge_general_16_9_1_D_c'] + $row['lodge_general_16_9_1_D_d'] + $row['lodge_general_16_9_1_D_e'] + $row['lodge_general_16_9_1_E'] + $row['lodge_general_16_9_1_F'] + $row['lodge_general_16_9_1_G'] + $row['lodge_general_16_9_1_H'];
			$lodge_general_16_10_self_assessor_2 = $row['lodge_general_16_10_1_A'] + 0;
			$lodge_general_16_11_self_assessor_2 = $row['lodge_general_16_11_1_A'] + $row['lodge_general_16_11_1_B_a'] + $row['lodge_general_16_11_1_B_b'] + $row['lodge_general_16_11_1_B_c'] + $row['lodge_general_16_11_1_B_d'] + $row['lodge_general_16_11_1_B_e'] + $row['lodge_general_16_11_1_C'] + $row['lodge_general_16_11_1_D'] + $row['lodge_general_16_11_1_E'];
			$output['lodge_general_16_1_self_assessor_2'] = $lodge_general_16_1_self_assessor_2;
			$output['lodge_general_16_2_self_assessor_2'] = $lodge_general_16_2_self_assessor_2;
			$output['lodge_general_16_3_self_assessor_2'] = $lodge_general_16_3_self_assessor_2;
			$output['lodge_general_16_4_self_assessor_2'] = $lodge_general_16_4_self_assessor_2;
			$output['lodge_general_16_5_self_assessor_2'] = $lodge_general_16_5_self_assessor_2;
			$output['lodge_general_16_6_self_assessor_2'] = $lodge_general_16_6_self_assessor_2;
			$output['lodge_general_16_7_self_assessor_2'] = $lodge_general_16_7_self_assessor_2;
			$output['lodge_general_16_8_self_assessor_2'] = $lodge_general_16_8_self_assessor_2;
			$output['lodge_general_16_9_self_assessor_2'] = $lodge_general_16_9_self_assessor_2;
			$output['lodge_general_16_10_self_assessor_2'] = $lodge_general_16_10_self_assessor_2;
			$output['lodge_general_16_11_self_assessor_2'] = $lodge_general_16_11_self_assessor_2;
			$output['lodge_general_16_0_self_assessor_2'] = $lodge_human_resources_15_1_self_assessor_2 + $lodge_human_resources_15_2_self_assessor_2 + $lodge_human_resources_15_3_self_assessor_2 + $lodge_human_resources_15_4_self_assessor_2 + $lodge_human_resources_15_5_self_assessor_2 + $lodge_human_resources_15_6_self_assessor_2 + $lodge_human_resources_15_7_self_assessor_2 + $lodge_human_resources_15_8_self_assessor_2 + $lodge_human_resources_15_9_self_assessor_2 + $lodge_human_resources_15_10_self_assessor_2 + $lodge_human_resources_15_11_self_assessor_2 + $lodge_general_16_1_self_assessor_2 + $lodge_general_16_2_self_assessor_2 + $lodge_general_16_3_self_assessor_2 + $lodge_general_16_4_self_assessor_2 + $lodge_general_16_5_self_assessor_2 + $lodge_general_16_6_self_assessor_2 + $lodge_general_16_7_self_assessor_2 + $lodge_general_16_8_self_assessor_2 + $lodge_general_16_9_self_assessor_2 + $lodge_general_16_10_self_assessor_2 + $lodge_general_16_11_self_assessor_2;

		 }
	}
	
	//// SELF_ASSESSOR_3 ////
	
	$query = "SELECT * FROM afcg_assessment_lodge WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_3'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		  
			//LOCATION 1.0
			$lodge_location_1_1_self_assessor_3 = $row['lodge_location_1_1_1_A'] + $row['lodge_location_1_1_1_B'] + $row['lodge_location_1_1_1_C'] + $row['lodge_location_1_1_1_D'] + $row['lodge_location_1_1_1_E'] + $row['lodge_location_1_1_1_F'] + $row['lodge_location_1_1_1_G'] + $row['lodge_location_1_1_1_H'] + $row['lodge_location_1_1_1_I'];
			$lodge_location_1_2_self_assessor_3 = $row['lodge_location_1_2_1_A'] + $row['lodge_location_1_2_1_B'] + $row['lodge_location_1_2_1_C'] + $row['lodge_location_1_2_1_D_a'] + $row['lodge_location_1_2_1_D_b'] + $row['lodge_location_1_2_1_D_c'] + $row['lodge_location_1_2_1_D_d'] + $row['lodge_location_1_2_1_E'] + $row['lodge_location_1_2_1_F'] + $row['lodge_location_1_2_1_G_a'] + $row['lodge_location_1_2_1_G_b'] + $row['lodge_location_1_2_1_G_c'] + $row['lodge_location_1_2_1_H'] + $row['lodge_location_1_2_1_I'] + $row['lodge_location_1_2_1_J'] + $row['lodge_location_1_2_1_K'] + $row['lodge_location_1_2_1_L'] + $row['lodge_location_1_2_1_M'] + $row['lodge_location_1_2_1_N'];
			$output['lodge_location_1_1_self_assessor_3'] = $lodge_location_1_1_self_assessor_3;
			$output['lodge_location_1_2_self_assessor_3'] = $lodge_location_1_2_self_assessor_3;
			$output['lodge_location_1_0_self_assessor_3'] = $lodge_location_1_1_self_assessor_3 + $lodge_location_1_2_self_assessor_3;

						

			//BUILDING 2.0
			//2.1
			$lodge_building_2_1_self_assessor_3 = $row['lodge_building_2_1_1_A'] + $row['lodge_building_2_1_1_B'] + $row['lodge_building_2_1_1_C'] + $row['lodge_building_2_1_1_D'] + $row['lodge_building_2_1_1_E'] + $row['lodge_building_2_1_1_F'] + $row['lodge_building_2_1_1_G'] + $row['lodge_building_2_1_1_H'] + $row['lodge_building_2_1_1_I'] + $row['lodge_building_2_1_1_J'] + $row['lodge_building_2_1_1_K'];
			$lodge_building_2_2_self_assessor_3 = $row['lodge_building_2_2_1_A'] + 0;
			$lodge_building_2_3_self_assessor_3 = $row['lodge_building_2_3_1_A'] + $row['lodge_building_2_3_1_B'] + $row['lodge_building_2_3_1_C'] + $row['lodge_building_2_3_1_D'] + $row['lodge_building_2_3_1_E'] + $row['lodge_building_2_3_1_F'] + $row['lodge_building_2_3_1_G'];
			$lodge_building_2_4_self_assessor_3 = $row['lodge_building_2_4_1_A'] + $row['lodge_building_2_4_1_B'];
			$output['lodge_building_2_1_self_assessor_3'] = $lodge_building_2_1_self_assessor_3;
			$output['lodge_building_2_2_self_assessor_3'] = $lodge_building_2_2_self_assessor_3;
			$output['lodge_building_2_3_self_assessor_3'] = $lodge_building_2_3_self_assessor_3;
			$output['lodge_building_2_4_self_assessor_3'] = $lodge_building_2_4_self_assessor_3;
			$output['lodge_building_2_0_self_assessor_3'] = $lodge_building_2_1_self_assessor_3 + $lodge_building_2_2_self_assessor_3 + $lodge_building_2_3_self_assessor_3 + $lodge_building_2_4_self_assessor_3;




			//FRONT OFFICE 3.0
			$lodge_front_office_3_1_self_assessor_3 = $row['lodge_front_office_3_1_1_A'] + $row['lodge_front_office_3_1_1_B'] + $row['lodge_front_office_3_1_1_C'] + $row['lodge_front_office_3_1_1_D'] + $row['lodge_front_office_3_1_1_E'] + $row['lodge_front_office_3_1_1_F'];
			$lodge_front_office_3_2_self_assessor_3 = $row['lodge_front_office_3_2_1_A'] + $row['lodge_front_office_3_2_1_B_a'] + $row['lodge_front_office_3_2_1_B_b'] + $row['lodge_front_office_3_2_1_B_c'] + $row['lodge_front_office_3_2_1_C_a'] + $row['lodge_front_office_3_2_1_C_b'] + $row['lodge_front_office_3_2_1_C_c'] + $row['lodge_front_office_3_2_1_D_a'] + $row['lodge_front_office_3_2_1_D_b'] + $row['lodge_front_office_3_2_1_D_c'] + $row['lodge_front_office_3_2_1_D_d'];
			$lodge_front_office_3_3_self_assessor_3 = $row['lodge_front_office_3_3_1_A'] + $row['lodge_front_office_3_3_1_B'];
			$lodge_front_office_3_4_self_assessor_3 = $row['lodge_front_office_3_4_1_A_a'] + $row['lodge_front_office_3_4_1_A_b'] + $row['lodge_front_office_3_4_1_A_c'] + $row['lodge_front_office_3_4_1_A_d'];
			$lodge_front_office_3_5_self_assessor_3 = $row['lodge_front_office_3_5_1_A'] + $row['lodge_front_office_3_5_1_B'] + $row['lodge_front_office_3_5_1_C'] + $row['lodge_front_office_3_5_1_D'];
			$lodge_front_office_3_6_self_assessor_3 = $row['lodge_front_office_3_6_1_A'] + $row['lodge_front_office_3_6_1_B'];
			$lodge_front_office_3_7_self_assessor_3 = $row['lodge_front_office_3_7_1_A'] + $row['lodge_front_office_3_7_1_B'] + $row['lodge_front_office_3_7_1_C'];
			$lodge_front_office_3_8_self_assessor_3 = $row['lodge_front_office_3_8_1_A_a'] + $row['lodge_front_office_3_8_1_A_b'] + $row['lodge_front_office_3_8_1_A_c'] + $row['lodge_front_office_3_8_1_B_a'] + $row['lodge_front_office_3_8_1_B_b'] + $row['lodge_front_office_3_8_1_B_c'];
			$lodge_front_office_3_9_self_assessor_3 = $row['lodge_front_office_3_9_1_A'] + $row['lodge_front_office_3_9_1_B'] + $row['lodge_front_office_3_9_1_C'];
			$output['lodge_front_office_3_1_self_assessor_3'] = $lodge_front_office_3_1_self_assessor_3;
			$output['lodge_front_office_3_2_self_assessor_3'] = $lodge_front_office_3_2_self_assessor_3;
			$output['lodge_front_office_3_3_self_assessor_3'] = $lodge_front_office_3_3_self_assessor_3;
			$output['lodge_front_office_3_4_self_assessor_3'] = $lodge_front_office_3_4_self_assessor_3;
			$output['lodge_front_office_3_5_self_assessor_3'] = $lodge_front_office_3_5_self_assessor_3;
			$output['lodge_front_office_3_6_self_assessor_3'] = $lodge_front_office_3_6_self_assessor_3;
			$output['lodge_front_office_3_7_self_assessor_3'] = $lodge_front_office_3_7_self_assessor_3;
			$output['lodge_front_office_3_8_self_assessor_3'] = $lodge_front_office_3_8_self_assessor_3;
			$output['lodge_front_office_3_9_self_assessor_3'] = $lodge_front_office_3_9_self_assessor_3;
			$output['lodge_front_office_3_0_self_assessor_3'] = $lodge_front_office_3_1_self_assessor_3 + $lodge_front_office_3_2_self_assessor_3 + $lodge_front_office_3_3_self_assessor_3 + $lodge_front_office_3_4_self_assessor_3 + $lodge_front_office_3_5_self_assessor_3 + $lodge_front_office_3_6_self_assessor_3 + $lodge_front_office_3_7_self_assessor_3 + $lodge_front_office_3_8_self_assessor_3 + $lodge_front_office_3_9_self_assessor_3;

			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			$lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_1_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_1_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_2_1_A'];
			$lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_3_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_a'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_b'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_c'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_B_d'] + $row['lodge_lobby_lounge_other_public_areas_4_3_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_4_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_a'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_D_b'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_4_1_F'];
			$lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_5_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_5_1_B'];
			$lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_6_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_C'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_D'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_E'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_F'] + $row['lodge_lobby_lounge_other_public_areas_4_6_1_G'];
			$lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_7_1_A'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_B'] + $row['lodge_lobby_lounge_other_public_areas_4_7_1_C'];
			$lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3 = $row['lodge_lobby_lounge_other_public_areas_4_8_1_A'];
			$output['lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3;
			$output['lodge_lobby_lounge_other_public_areas_4_0_self_assessor_3'] = $lodge_lobby_lounge_other_public_areas_4_1_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_2_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_3_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_4_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_5_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_6_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_7_self_assessor_3 + $lodge_lobby_lounge_other_public_areas_4_8_self_assessor_3;

			//FUNCTION ROOMS 5.0
			$lodge_function_rooms_5_1_self_assessor_3 = $row['lodge_function_rooms_5_1_1_A'] + $row['lodge_function_rooms_5_1_1_B'] + $row['lodge_function_rooms_5_1_1_C'] + $row['lodge_function_rooms_5_1_1_D'] + $row['lodge_function_rooms_5_1_1_E'] + $row['lodge_function_rooms_5_1_1_F'] + $row['lodge_function_rooms_5_1_1_G'] + $row['lodge_function_rooms_5_1_1_H'] + $row['lodge_function_rooms_5_1_1_I'] + $row['lodge_function_rooms_5_1_1_J'] + $row['lodge_function_rooms_5_1_1_K'] + $row['lodge_function_rooms_5_1_1_L'];
			$output['lodge_function_rooms_5_1_self_assessor_3'] = $lodge_function_rooms_5_1_self_assessor_3;
			$output['lodge_function_rooms_5_0_self_assessor_3'] = $lodge_function_rooms_5_1_self_assessor_3;

			//RESTAURANTS
			$lodge_restaurants_6_1_self_assessor_3 = $row['lodge_restaurants_6_1_1_A'] + $row['lodge_restaurants_6_1_1_B'] + $row['lodge_restaurants_6_1_1_C'] + $row['lodge_restaurants_6_1_1_D'] + $row['lodge_restaurants_6_1_1_E'];
			$lodge_restaurants_6_2_self_assessor_3 = $row['lodge_restaurants_6_2_1_A'] + $row['lodge_restaurants_6_2_1_B'] + $row['lodge_restaurants_6_2_1_C'] + $row['lodge_restaurants_6_2_1_D'] + $row['lodge_restaurants_6_2_1_E'] + $row['lodge_restaurants_6_2_1_F'] + $row['lodge_restaurants_6_2_1_G'] + $row['lodge_restaurants_6_2_1_H'] + $row['lodge_restaurants_6_2_1_I'];
			$lodge_restaurants_6_3_self_assessor_3 = $row['lodge_restaurants_6_3_1_A'] + $row['lodge_restaurants_6_3_1_B'] + $row['lodge_restaurants_6_3_1_C'] + $row['lodge_restaurants_6_3_1_D'];
			$lodge_restaurants_6_4_self_assessor_3 = $row['lodge_restaurants_6_4_1_A'] + $row['lodge_restaurants_6_4_1_B'] + $row['lodge_restaurants_6_4_1_C'] + $row['lodge_restaurants_6_4_1_D'];
			$lodge_restaurants_6_5_self_assessor_3 = $row['lodge_restaurants_6_5_1_A'] + $row['lodge_restaurants_6_5_1_B'] + $row['lodge_restaurants_6_5_1_C'] + $row['lodge_restaurants_6_5_1_D'] + $row['lodge_restaurants_6_5_1_E'] + $row['lodge_restaurants_6_5_1_F'] + $row['lodge_restaurants_6_5_1_G'] + $row['lodge_restaurants_6_5_1_H'];
			$lodge_restaurants_6_6_self_assessor_3 = $row['lodge_restaurants_6_6_1_A'] + $row['lodge_restaurants_6_6_1_B'] + $row['lodge_restaurants_6_6_1_C'] + $row['lodge_restaurants_6_6_1_D'] + $row['lodge_restaurants_6_6_1_E'] + $row['lodge_restaurants_6_6_1_F_a'] + $row['lodge_restaurants_6_6_1_F_b'] + $row['lodge_restaurants_6_6_1_F_c'] + $row['lodge_restaurants_6_6_1_F_d'] + $row['lodge_restaurants_6_6_1_G'] + $row['lodge_restaurants_6_6_1_H_a'] + $row['lodge_restaurants_6_6_1_H_b'] + $row['lodge_restaurants_6_6_1_H_c'] + $row['lodge_restaurants_6_6_1_I'] + $row['lodge_restaurants_6_6_1_J'];
			$lodge_restaurants_6_7_self_assessor_3 = $row['lodge_restaurants_6_7_1_A'] + $row['lodge_restaurants_6_7_1_B'] + $row['lodge_restaurants_6_7_1_C'];
			$lodge_restaurants_6_8_self_assessor_3 = $row['lodge_restaurants_6_8_1_A'] + $row['lodge_restaurants_6_8_1_B'];
			$output['lodge_restaurants_6_1_self_assessor_3'] = $lodge_restaurants_6_1_self_assessor_3;
			$output['lodge_restaurants_6_2_self_assessor_3'] = $lodge_restaurants_6_2_self_assessor_3;
			$output['lodge_restaurants_6_3_self_assessor_3'] = $lodge_restaurants_6_3_self_assessor_3;
			$output['lodge_restaurants_6_4_self_assessor_3'] = $lodge_restaurants_6_4_self_assessor_3;
			$output['lodge_restaurants_6_5_self_assessor_3'] = $lodge_restaurants_6_5_self_assessor_3;
			$output['lodge_restaurants_6_6_self_assessor_3'] = $lodge_restaurants_6_6_self_assessor_3;
			$output['lodge_restaurants_6_7_self_assessor_3'] = $lodge_restaurants_6_7_self_assessor_3;
			$output['lodge_restaurants_6_8_self_assessor_3'] = $lodge_restaurants_6_8_self_assessor_3;
			$output['lodge_restaurants_6_0_self_assessor_3'] = $lodge_restaurants_6_1_self_assessor_3 + $lodge_restaurants_6_2_self_assessor_3 + $lodge_restaurants_6_3_self_assessor_3 + $lodge_restaurants_6_4_self_assessor_3 + $lodge_restaurants_6_5_self_assessor_3 + $lodge_restaurants_6_6_self_assessor_3 + $lodge_restaurants_6_7_self_assessor_3 + $lodge_restaurants_6_8_self_assessor_3;


			//BARS
			$lodge_bar_7_1_self_assessor_3 = $row['lodge_bar_7_1_1_A'] + $row['lodge_bar_7_1_1_B'] + $row['lodge_bar_7_1_1_C'] + $row['lodge_bar_7_1_1_D_a'] + $row['lodge_bar_7_1_1_D_b'] + $row['lodge_bar_7_1_1_D_c'] + $row['lodge_bar_7_1_1_E'] + $row['lodge_bar_7_1_1_F'] + $row['lodge_bar_7_1_1_G'];
			$lodge_bar_7_2_self_assessor_3 = $row['lodge_bar_7_2_1_A'] + $row['lodge_bar_7_2_1_B'] + $row['lodge_bar_7_2_1_C'] + $row['lodge_bar_7_2_1_D'] + $row['lodge_bar_7_2_1_E'] + $row['lodge_bar_7_2_1_F'] + $row['lodge_bar_7_2_1_G'] + $row['lodge_bar_7_2_1_H'] + $row['lodge_bar_7_2_1_I'];
			$lodge_bar_7_3_self_assessor_3 = $row['lodge_bar_7_3_1_A'] + $row['lodge_bar_7_3_1_B'] + $row['lodge_bar_7_3_1_C'] + $row['lodge_bar_7_3_1_D'] + $row['lodge_bar_7_3_1_E'] + $row['lodge_bar_7_3_1_F'];
			$lodge_bar_7_4_self_assessor_3 = $row['lodge_bar_7_4_1_A'] + $row['lodge_bar_7_4_1_B'] + $row['lodge_bar_7_4_1_C'] + $row['lodge_bar_7_4_1_D'] + $row['lodge_bar_7_4_1_E_a'] + $row['lodge_bar_7_4_1_E_b'] + $row['lodge_bar_7_4_1_E_c'] + $row['lodge_bar_7_4_1_E_d'] + $row['lodge_bar_7_4_1_E_e'] + $row['lodge_bar_7_4_1_E_f'] + $row['lodge_bar_7_4_1_E_g'] + $row['lodge_bar_7_4_1_E_h'] + $row['lodge_bar_7_4_1_F'] + $row['lodge_bar_7_4_1_G'] + $row['lodge_bar_7_4_1_H'] + $row['lodge_bar_7_4_1_I'];
			$lodge_bar_7_5_self_assessor_3 = $row['lodge_bar_7_5_1_A'] + $row['lodge_bar_7_5_1_B'] + $row['lodge_bar_7_5_1_C'];
			$lodge_bar_7_6_self_assessor_3 = $row['lodge_bar_7_6_1_A'] + $row['lodge_bar_7_6_1_B'] + $row['lodge_bar_7_6_1_C'];
			$lodge_bar_7_7_self_assessor_3 = $row['lodge_bar_7_7_1_A'] + $row['lodge_bar_7_7_1_B'] + $row['lodge_bar_7_7_1_C'];
			$output['lodge_bar_7_1_self_assessor_3'] = $lodge_bar_7_1_self_assessor_3;
			$output['lodge_bar_7_2_self_assessor_3'] = $lodge_bar_7_2_self_assessor_3;
			$output['lodge_bar_7_3_self_assessor_3'] = $lodge_bar_7_3_self_assessor_3;
			$output['lodge_bar_7_4_self_assessor_3'] = $lodge_bar_7_4_self_assessor_3;
			$output['lodge_bar_7_5_self_assessor_3'] = $lodge_bar_7_5_self_assessor_3;
			$output['lodge_bar_7_6_self_assessor_3'] = $lodge_bar_7_6_self_assessor_3;
			$output['lodge_bar_7_7_self_assessor_3'] = $lodge_bar_7_7_self_assessor_3;
			$output['lodge_bar_7_0_self_assessor_3'] = $lodge_bar_7_1_self_assessor_3 + $lodge_bar_7_2_self_assessor_3 + $lodge_bar_7_3_self_assessor_3 + $lodge_bar_7_4_self_assessor_3 + $lodge_bar_7_5_self_assessor_3 + $lodge_bar_7_6_self_assessor_3 + $lodge_bar_7_7_self_assessor_3;

			//KITCHEN			
			$lodge_kitchen_8_1_self_assessor_3 = $row['lodge_kitchen_8_1_1_A'] + 0;;
			$lodge_kitchen_8_2_self_assessor_3 = $row['lodge_kitchen_8_2_1_A'] + $row['lodge_kitchen_8_2_1_B'] + $row['lodge_kitchen_8_2_1_C'];
			$lodge_kitchen_8_3_self_assessor_3 = $row['lodge_kitchen_8_3_1_A'] + $row['lodge_kitchen_8_3_1_B'] + $row['lodge_kitchen_8_3_1_C'];
			$lodge_kitchen_8_4_self_assessor_3 = $row['lodge_kitchen_8_4_1_A'] + $row['lodge_kitchen_8_4_1_B'] + $row['lodge_kitchen_8_4_1_C'] + $row['lodge_kitchen_8_4_1_D'];
			$lodge_kitchen_8_5_self_assessor_3 = $row['lodge_kitchen_8_5_1_A'] + $row['lodge_kitchen_8_5_1_B'] + $row['lodge_kitchen_8_5_1_C'] + $row['lodge_kitchen_8_5_1_D'] + $row['lodge_kitchen_8_5_1_E'] + $row['lodge_kitchen_8_5_1_F'] + $row['lodge_kitchen_8_5_1_G'] + $row['lodge_kitchen_8_5_1_H'] + $row['lodge_kitchen_8_5_1_I'];
			$lodge_kitchen_8_6_self_assessor_3 = $row['lodge_kitchen_8_6_1_A'] + $row['lodge_kitchen_8_6_1_B'] + $row['lodge_kitchen_8_6_1_C'] + $row['lodge_kitchen_8_6_1_D'] + $row['lodge_kitchen_8_6_1_E'] + $row['lodge_kitchen_8_6_1_F'] + $row['lodge_kitchen_8_6_1_G'];
			$lodge_kitchen_8_7_self_assessor_3 = $row['lodge_kitchen_8_7_1_A'] + $row['lodge_kitchen_8_7_1_B'] + $row['lodge_kitchen_8_7_1_C'] + $row['lodge_kitchen_8_7_1_D'] + $row['lodge_kitchen_8_7_1_E'];
			$lodge_kitchen_8_8_self_assessor_3 = $row['lodge_kitchen_8_8_1_A'] + $row['lodge_kitchen_8_8_1_B'] + $row['lodge_kitchen_8_8_1_C_a'] + $row['lodge_kitchen_8_8_1_C_b'] + $row['lodge_kitchen_8_8_1_D'] + $row['lodge_kitchen_8_8_1_E'] + $row['lodge_kitchen_8_8_1_F'] + $row['lodge_kitchen_8_8_1_G'] + $row['lodge_kitchen_8_8_1_H'];
			$lodge_kitchen_8_9_self_assessor_3 = $row['lodge_kitchen_8_9_1_A'] + $row['lodge_kitchen_8_9_1_B'] + $row['lodge_kitchen_8_9_1_C'] + $row['lodge_kitchen_8_9_1_D'] + $row['lodge_kitchen_8_9_1_E'];
			$lodge_kitchen_8_10_self_assessor_3 = $row['lodge_kitchen_8_10_1_A_a'] + $row['lodge_kitchen_8_10_1_A_b'] + $row['lodge_kitchen_8_10_1_A_c'] + $row['lodge_kitchen_8_10_1_A_d'] + $row['lodge_kitchen_8_10_1_B'] + $row['lodge_kitchen_8_10_1_C'] + $row['lodge_kitchen_8_10_1_D'] + $row['lodge_kitchen_8_10_1_E'] + $row['lodge_kitchen_8_10_1_F'] + $row['lodge_kitchen_8_10_1_G'];
			$lodge_kitchen_8_11_self_assessor_3 = $row['lodge_kitchen_8_11_1_A_a'] + $row['lodge_kitchen_8_11_1_A_b'] + $row['lodge_kitchen_8_11_1_A_c'] + $row['lodge_kitchen_8_11_1_B'] + $row['lodge_kitchen_8_11_1_C_a'] + $row['lodge_kitchen_8_11_1_C_b'] + $row['lodge_kitchen_8_11_1_C_c'] + $row['lodge_kitchen_8_11_1_C_d'] + $row['lodge_kitchen_8_11_1_C_e'] + $row['lodge_kitchen_8_11_1_D_a'] + $row['lodge_kitchen_8_11_1_D_b'] + $row['lodge_kitchen_8_11_1_E'];
			$lodge_kitchen_8_12_self_assessor_3 = $row['lodge_kitchen_8_12_1_A'] + $row['lodge_kitchen_8_12_1_B'] + $row['lodge_kitchen_8_12_1_C'];
			$output['lodge_kitchen_8_1_self_assessor_3'] = $lodge_kitchen_8_1_self_assessor_3;
			$output['lodge_kitchen_8_2_self_assessor_3'] = $lodge_kitchen_8_2_self_assessor_3;
			$output['lodge_kitchen_8_3_self_assessor_3'] = $lodge_kitchen_8_3_self_assessor_3;
			$output['lodge_kitchen_8_4_self_assessor_3'] = $lodge_kitchen_8_4_self_assessor_3;
			$output['lodge_kitchen_8_5_self_assessor_3'] = $lodge_kitchen_8_5_self_assessor_3;
			$output['lodge_kitchen_8_6_self_assessor_3'] = $lodge_kitchen_8_6_self_assessor_3;
			$output['lodge_kitchen_8_7_self_assessor_3'] = $lodge_kitchen_8_7_self_assessor_3;
			$output['lodge_kitchen_8_8_self_assessor_3'] = $lodge_kitchen_8_8_self_assessor_3;
			$output['lodge_kitchen_8_9_self_assessor_3'] = $lodge_kitchen_8_9_self_assessor_3;
			$output['lodge_kitchen_8_10_self_assessor_3'] = $lodge_kitchen_8_10_self_assessor_3;
			$output['lodge_kitchen_8_11_self_assessor_3'] = $lodge_kitchen_8_11_self_assessor_3;
			$output['lodge_kitchen_8_12_self_assessor_3'] = $lodge_kitchen_8_12_self_assessor_3;
			$output['lodge_kitchen_8_0_self_assessor_3'] = $lodge_kitchen_8_1_self_assessor_3 + $lodge_kitchen_8_2_self_assessor_3 + $lodge_kitchen_8_3_self_assessor_3 + $lodge_kitchen_8_4_self_assessor_3 + $lodge_kitchen_8_5_self_assessor_3 + $lodge_kitchen_8_6_self_assessor_3 + $lodge_kitchen_8_7_self_assessor_3 + $lodge_kitchen_8_8_self_assessor_3 + $lodge_kitchen_8_9_self_assessor_3 + $lodge_kitchen_8_10_self_assessor_3 + $lodge_kitchen_8_11_self_assessor_3 + $lodge_kitchen_8_12_self_assessor_3;


			//GUEST ROOMS			
			$lodge_guest_rooms_9_1_self_assessor_3 = $row['lodge_guest_rooms_9_1_1_A'] + 0;
			$lodge_guest_rooms_9_2_self_assessor_3 = $row['lodge_guest_rooms_9_2_1_A'] + $row['lodge_guest_rooms_9_2_1_B'];
			$lodge_guest_rooms_9_3_self_assessor_3 = $row['lodge_guest_rooms_9_3_1_A'] + $row['lodge_guest_rooms_9_3_1_B'];
			$lodge_guest_rooms_9_4_self_assessor_3 = $row['lodge_guest_rooms_9_4_1_A'] + $row['lodge_guest_rooms_9_4_1_B_a'] + $row['lodge_guest_rooms_9_4_1_B_b'] + $row['lodge_guest_rooms_9_4_1_B_c'] + $row['lodge_guest_rooms_9_4_1_B_d'] + $row['lodge_guest_rooms_9_4_1_B_e'] + $row['lodge_guest_rooms_9_4_1_B_f'] + $row['lodge_guest_rooms_9_4_1_B_g'] + $row['lodge_guest_rooms_9_4_1_B_h'] + $row['lodge_guest_rooms_9_4_1_B_i'] + $row['lodge_guest_rooms_9_4_1_B_j'] + $row['lodge_guest_rooms_9_4_1_B_k'] + $row['lodge_guest_rooms_9_4_1_B_l'] + $row['lodge_guest_rooms_9_4_1_B_m'] + $row['lodge_guest_rooms_9_4_1_B_n'] + $row['lodge_guest_rooms_9_4_1_C'] + $row['lodge_guest_rooms_9_4_1_D'] + $row['lodge_guest_rooms_9_4_1_E'] + $row['lodge_guest_rooms_9_4_1_F'] + $row['lodge_guest_rooms_9_4_1_G'];
			$lodge_guest_rooms_9_5_self_assessor_3 = $row['lodge_guest_rooms_9_5_1_A'] + $row['lodge_guest_rooms_9_5_1_B_a'] + $row['lodge_guest_rooms_9_5_1_B_b'] + $row['lodge_guest_rooms_9_5_1_B_c'] + $row['lodge_guest_rooms_9_5_1_B_d'] + $row['lodge_guest_rooms_9_5_1_C'] + $row['lodge_guest_rooms_9_5_1_D'];
			$lodge_guest_rooms_9_6_self_assessor_3 = $row['lodge_guest_rooms_9_6_1_A'] + $row['lodge_guest_rooms_9_6_1_B'];
			$lodge_guest_rooms_9_7_self_assessor_3 = $row['lodge_guest_rooms_9_7_1_A'] + $row['lodge_guest_rooms_9_7_1_B'] + $row['lodge_guest_rooms_9_7_1_C'] + $row['lodge_guest_rooms_9_7_1_D'] + $row['lodge_guest_rooms_9_7_1_E'];
			$lodge_guest_rooms_9_8_self_assessor_3 = $row['lodge_guest_rooms_9_8_1_A'] + $row['lodge_guest_rooms_9_8_1_B'] + $row['lodge_guest_rooms_9_8_1_C'] + $row['lodge_guest_rooms_9_8_1_D'] + $row['lodge_guest_rooms_9_8_1_E'];
			$lodge_guest_rooms_9_9_self_assessor_3 = $row['lodge_guest_rooms_9_9_1_A'] + $row['lodge_guest_rooms_9_9_1_B_a'] + $row['lodge_guest_rooms_9_9_1_B_b'] + $row['lodge_guest_rooms_9_9_1_B_c'] + $row['lodge_guest_rooms_9_9_1_B_d'] + $row['lodge_guest_rooms_9_9_1_B_e'] + $row['lodge_guest_rooms_9_9_1_B_f'] + $row['lodge_guest_rooms_9_9_1_C_a'] + $row['lodge_guest_rooms_9_9_1_C_b'] + $row['lodge_guest_rooms_9_9_1_D'];
			$lodge_guest_rooms_9_10_self_assessor_3 = $row['lodge_guest_rooms_9_10_1_A'] + 0;
			$lodge_guest_rooms_9_11_self_assessor_3 = $row['lodge_guest_rooms_9_11_1_A_a'] + $row['lodge_guest_rooms_9_11_1_A_b'] + $row['lodge_guest_rooms_9_11_1_A_c'] + $row['lodge_guest_rooms_9_11_1_A_d'] + $row['lodge_guest_rooms_9_11_1_A_e'] + $row['lodge_guest_rooms_9_11_1_B_a'] + $row['lodge_guest_rooms_9_11_1_B_b'] + $row['lodge_guest_rooms_9_11_1_B_c'] + $row['lodge_guest_rooms_9_11_1_B_d'] + $row['lodge_guest_rooms_9_11_1_C'];
			$lodge_guest_rooms_9_12_self_assessor_3 = $row['lodge_guest_rooms_9_12_1_A'] + $row['lodge_guest_rooms_9_12_1_B'] + $row['lodge_guest_rooms_9_12_1_C'] + $row['lodge_guest_rooms_9_12_1_D'] + $row['lodge_guest_rooms_9_12_1_E'] + $row['lodge_guest_rooms_9_12_1_F'] + $row['lodge_guest_rooms_9_12_1_G'];
			$lodge_guest_rooms_9_13_self_assessor_3 = $row['lodge_guest_rooms_9_13_1_A'] + $row['lodge_guest_rooms_9_13_1_B'] + $row['lodge_guest_rooms_9_13_1_C'];
			$lodge_guest_rooms_9_14_self_assessor_3 = $row['lodge_guest_rooms_9_14_1_A'] + $row['lodge_guest_rooms_9_14_1_B_a'] + $row['lodge_guest_rooms_9_14_1_B_b'] + $row['lodge_guest_rooms_9_14_1_B_c'] + $row['lodge_guest_rooms_9_14_1_C'];
			$lodge_guest_rooms_9_15_self_assessor_3 = $row['lodge_guest_rooms_9_15_1_A_a'] + $row['lodge_guest_rooms_9_15_1_A_b'] + $row['lodge_guest_rooms_9_15_1_A_c'] + $row['lodge_guest_rooms_9_15_1_A_d'] + $row['lodge_guest_rooms_9_15_1_A_e'] + $row['lodge_guest_rooms_9_15_1_A_f'] + $row['lodge_guest_rooms_9_15_1_A_g'] + $row['lodge_guest_rooms_9_15_1_A_h'] + $row['lodge_guest_rooms_9_15_1_A_i'] + $row['lodge_guest_rooms_9_15_1_A_j'] + $row['lodge_guest_rooms_9_15_1_A_k'] + $row['lodge_guest_rooms_9_15_1_A_l'] + $row['lodge_guest_rooms_9_15_1_A_m'] + $row['lodge_guest_rooms_9_15_1_A_n'] + $row['lodge_guest_rooms_9_15_1_A_o'] + $row['lodge_guest_rooms_9_15_1_A_p'] + $row['lodge_guest_rooms_9_15_1_A_q'] + $row['lodge_guest_rooms_9_15_1_B'] + $row['lodge_guest_rooms_9_15_1_C'];
			$output['lodge_guest_rooms_9_1_self_assessor_3'] = $lodge_guest_rooms_9_1_self_assessor_3;
			$output['lodge_guest_rooms_9_2_self_assessor_3'] = $lodge_guest_rooms_9_2_self_assessor_3;
			$output['lodge_guest_rooms_9_3_self_assessor_3'] = $lodge_guest_rooms_9_3_self_assessor_3;
			$output['lodge_guest_rooms_9_7_self_assessor_3'] = $lodge_guest_rooms_9_7_self_assessor_3;
			$output['lodge_guest_rooms_9_8_self_assessor_3'] = $lodge_guest_rooms_9_8_self_assessor_3;
			$output['lodge_guest_rooms_9_9_self_assessor_3'] = $lodge_guest_rooms_9_9_self_assessor_3;
			$output['lodge_guest_rooms_9_10_self_assessor_3'] = $lodge_guest_rooms_9_10_self_assessor_3;
			$output['lodge_guest_rooms_9_11_self_assessor_3'] = $lodge_guest_rooms_9_11_self_assessor_3;
			$output['lodge_guest_rooms_9_12_self_assessor_3'] = $lodge_guest_rooms_9_12_self_assessor_3;
			$output['lodge_guest_rooms_9_13_self_assessor_3'] = $lodge_guest_rooms_9_13_self_assessor_3;
			$output['lodge_guest_rooms_9_14_self_assessor_3'] = $lodge_guest_rooms_9_14_self_assessor_3;
			$output['lodge_guest_rooms_9_15_self_assessor_3'] = $lodge_guest_rooms_9_15_self_assessor_3;
			$output['lodge_guest_rooms_9_0_self_assessor_3'] =  $lodge_guest_rooms_9_1_self_assessor_3 + $lodge_guest_rooms_9_2_self_assessor_3 + $lodge_guest_rooms_9_3_self_assessor_3 + $lodge_guest_rooms_9_4_self_assessor_3 + $lodge_guest_rooms_9_5_self_assessor_3 + $lodge_guest_rooms_9_6_self_assessor_3 + $lodge_guest_rooms_9_7_self_assessor_3 + $lodge_guest_rooms_9_8_self_assessor_3 + $lodge_guest_rooms_9_9_self_assessor_3 + $lodge_guest_rooms_9_10_self_assessor_3 + $lodge_guest_rooms_9_11_self_assessor_3 + $lodge_guest_rooms_9_12_self_assessor_3 + $lodge_guest_rooms_9_13_self_assessor_3 + $lodge_guest_rooms_9_14_self_assessor_3 + $lodge_guest_rooms_9_15_self_assessor_3;


			//GUEST BATHROOMS
			$lodge_guest_bathrooms_10_1_self_assessor_3 = $row['lodge_guest_bathrooms_10_1_1_A'] + 0;
			$lodge_guest_bathrooms_10_2_self_assessor_3 = $row['lodge_guest_bathrooms_10_2_1_A'] + 0;
			$lodge_guest_bathrooms_10_3_self_assessor_3 = $row['lodge_guest_bathrooms_10_3_1_A_a'] + $row['lodge_guest_bathrooms_10_3_1_A_b'] + $row['lodge_guest_bathrooms_10_3_1_A_c'] + $row['lodge_guest_bathrooms_10_3_1_A_d'] + $row['lodge_guest_bathrooms_10_3_1_A_e'] + $row['lodge_guest_bathrooms_10_3_1_A_f'] + $row['lodge_guest_bathrooms_10_3_1_A_g'] + $row['lodge_guest_bathrooms_10_3_1_A_h'] + $row['lodge_guest_bathrooms_10_3_1_A_i'] + $row['lodge_guest_bathrooms_10_3_1_A_j'] + $row['lodge_guest_bathrooms_10_3_1_A_k'] + $row['lodge_guest_bathrooms_10_3_1_A_l'] + $row['lodge_guest_bathrooms_10_3_1_A_m'] + $row['lodge_guest_bathrooms_10_3_1_A_n'] + $row['lodge_guest_bathrooms_10_3_1_A_o'] + $row['lodge_guest_bathrooms_10_3_1_A_p'] + $row['lodge_guest_bathrooms_10_3_1_A_q'] + $row['lodge_guest_bathrooms_10_3_1_A_r'] + $row['lodge_guest_bathrooms_10_3_1_A_s'] + $row['lodge_guest_bathrooms_10_3_1_A_t'] + $row['lodge_guest_bathrooms_10_3_1_A_u'] + $row['lodge_guest_bathrooms_10_3_1_A_v'] + $row['lodge_guest_bathrooms_10_3_1_A_w'] + $row['lodge_guest_bathrooms_10_3_1_B'] + $row['lodge_guest_bathrooms_10_3_1_C'] + $row['lodge_guest_bathrooms_10_3_1_D'] + $row['lodge_guest_bathrooms_10_3_1_E'] + $row['lodge_guest_bathrooms_10_3_1_F'];
			$lodge_guest_bathrooms_10_4_self_assessor_3 = $row['lodge_guest_bathrooms_10_4_1_A'] + $row['lodge_guest_bathrooms_10_4_1_B'] + $row['lodge_guest_bathrooms_10_4_1_C'] + $row['lodge_guest_bathrooms_10_4_1_D'] + $row['lodge_guest_bathrooms_10_4_1_E'] + $row['lodge_guest_bathrooms_10_4_1_F'];
			$lodge_guest_bathrooms_10_5_self_assessor_3 = $row['lodge_guest_bathrooms_10_5_1_A_a'] + $row['lodge_guest_bathrooms_10_5_1_A_b'] + $row['lodge_guest_bathrooms_10_5_1_A_c'] + $row['lodge_guest_bathrooms_10_5_1_A_d'] + $row['lodge_guest_bathrooms_10_5_1_A_e'] + $row['lodge_guest_bathrooms_10_5_1_B'] + $row['lodge_guest_bathrooms_10_5_1_C'] + $row['lodge_guest_bathrooms_10_5_1_D'] + $row['lodge_guest_bathrooms_10_5_1_E'] + $row['lodge_guest_bathrooms_10_5_1_F'];
			$lodge_guest_bathrooms_10_6_self_assessor_3 = $row['lodge_guest_bathrooms_10_6_1_A'] + $row['lodge_guest_bathrooms_10_6_1_B'] + $row['lodge_guest_bathrooms_10_6_1_C'];
			$lodge_guest_bathrooms_10_7_self_assessor_3 = $row['lodge_guest_bathrooms_10_7_1_A'] + $row['lodge_guest_bathrooms_10_7_1_B'] + $row['lodge_guest_bathrooms_10_7_1_C'] + $row['lodge_guest_bathrooms_10_7_1_D'];
			$lodge_guest_bathrooms_10_8_self_assessor_3 = $row['lodge_guest_bathrooms_10_8_1_A_a'] + $row['lodge_guest_bathrooms_10_8_1_A_b'] + $row['lodge_guest_bathrooms_10_8_1_A_c'] + $row['lodge_guest_bathrooms_10_8_1_A_d'] + $row['lodge_guest_bathrooms_10_8_1_A_e'] + $row['lodge_guest_bathrooms_10_8_1_A_f'] + $row['lodge_guest_bathrooms_10_8_1_A_g'] + $row['lodge_guest_bathrooms_10_8_1_B'] + $row['lodge_guest_bathrooms_10_8_1_C'];
			$lodge_guest_bathrooms_10_9_self_assessor_3 = $row['lodge_guest_bathrooms_10_9_1_A'] + $row['lodge_guest_bathrooms_10_9_1_B'];
			$output['lodge_guest_bathrooms_10_1_self_assessor_3'] = $lodge_guest_bathrooms_10_1_self_assessor_3;
			$output['lodge_guest_bathrooms_10_3_self_assessor_3'] = $lodge_guest_bathrooms_10_3_self_assessor_3;
			$output['lodge_guest_bathrooms_10_4_self_assessor_3'] = $lodge_guest_bathrooms_10_4_self_assessor_3;
			$output['lodge_guest_bathrooms_10_5_self_assessor_3'] = $lodge_guest_bathrooms_10_5_self_assessor_3;
			$output['lodge_guest_bathrooms_10_6_self_assessor_3'] = $lodge_guest_bathrooms_10_6_self_assessor_3;
			$output['lodge_guest_bathrooms_10_7_self_assessor_3'] = $lodge_guest_bathrooms_10_7_self_assessor_3;
			$output['lodge_guest_bathrooms_10_8_self_assessor_3'] = $lodge_guest_bathrooms_10_8_self_assessor_3;
			$output['lodge_guest_bathrooms_10_9_self_assessor_3'] = $lodge_guest_bathrooms_10_9_self_assessor_3;
			$output['lodge_guest_bathrooms_10_0_self_assessor_3'] =  $lodge_guest_bathrooms_10_1_self_assessor_3 + $lodge_guest_bathrooms_10_2_self_assessor_3 + $lodge_guest_bathrooms_10_3_self_assessor_3 + $lodge_guest_bathrooms_10_4_self_assessor_3 + $lodge_guest_bathrooms_10_5_self_assessor_3 + $lodge_guest_bathrooms_10_6_self_assessor_3 + $lodge_guest_bathrooms_10_7_self_assessor_3 + $lodge_guest_bathrooms_10_8_self_assessor_3 + $lodge_guest_bathrooms_10_9_self_assessor_3;

			//SUITES
			$lodge_suites_11_1_self_assessor_3 = $row['lodge_suites_11_1_1_A'] + 0;
			$lodge_suites_11_2_self_assessor_3 = $row['lodge_suites_11_2_1_A'] + $row['lodge_suites_11_2_1_B'];
			$lodge_suites_11_3_self_assessor_3 = $row['lodge_suites_11_3_1_A_a'] + $row['lodge_suites_11_3_1_A_b'] + $row['lodge_suites_11_3_1_A_c'] + $row['lodge_suites_11_3_1_A_d'];
			$lodge_suites_11_4_self_assessor_3 = $row['lodge_suites_11_4_1_A'] + $row['lodge_suites_11_4_1_B'];
			$lodge_suites_11_5_self_assessor_3 = $row['lodge_suites_11_5_1_A_a'] + $row['lodge_suites_11_5_1_A_b'] + $row['lodge_suites_11_5_1_B_a'] + $row['lodge_suites_11_5_1_B_b'] + $row['lodge_suites_11_5_1_B_c'] + $row['lodge_suites_11_5_1_B_d'] + $row['lodge_suites_11_5_1_B_e'] + $row['lodge_suites_11_5_1_B_f'] + $row['lodge_suites_11_5_1_B_g'] + $row['lodge_suites_11_5_1_B_h'] + $row['lodge_suites_11_5_1_B_i'] + $row['lodge_suites_11_5_1_B_j'] + $row['lodge_suites_11_5_1_B_k'] + $row['lodge_suites_11_5_1_B_l'] + $row['lodge_suites_11_5_1_B_m'] + $row['lodge_suites_11_5_1_B_n'] + $row['lodge_suites_11_5_1_B_o'] + $row['lodge_suites_11_5_1_B_p'] + $row['lodge_suites_11_5_1_C'] + $row['lodge_suites_11_5_1_D'] + $row['lodge_suites_11_5_1_E'] + $row['lodge_suites_11_5_1_F'] + $row['lodge_suites_11_5_1_G'];
			$lodge_suites_11_6_self_assessor_3 = $row['lodge_suites_11_6_1_A'] + $row['lodge_suites_11_6_1_B'] + $row['lodge_suites_11_6_1_C'] + $row['lodge_suites_11_6_1_D'] + $row['lodge_suites_11_6_1_E'];
			$lodge_suites_11_7_self_assessor_3 = $row['lodge_suites_11_7_1_A'] + $row['lodge_suites_11_7_1_B_a'] + $row['lodge_suites_11_7_1_B_b'] + $row['lodge_suites_11_7_1_B_c'] + $row['lodge_suites_11_7_1_B_d'] + $row['lodge_suites_11_7_1_C'] + $row['lodge_suites_11_7_1_D'];
			$lodge_suites_11_8_self_assessor_3 = $row['lodge_suites_11_8_1_A'] + $row['lodge_suites_11_8_1_B_a'] + $row['lodge_suites_11_8_1_B_b'] + $row['lodge_suites_11_8_1_B_c'] + $row['lodge_suites_11_8_1_B_d'] + $row['lodge_suites_11_8_1_B_e'] + $row['lodge_suites_11_8_1_B_f'] + $row['lodge_suites_11_8_1_B_g'] + $row['lodge_suites_11_8_1_B_h'] + $row['lodge_suites_11_8_1_B_i'] + $row['lodge_suites_11_8_1_C_a'] + $row['lodge_suites_11_8_1_C_b'] + $row['lodge_suites_11_8_1_D'];
			$lodge_suites_11_9_self_assessor_3 = $row['lodge_suites_11_9_1_A'] + 0;
			$lodge_suites_11_10_self_assessor_3 = $row['lodge_suites_11_10_1_A_a'] + $row['lodge_suites_11_10_1_A_b'] + $row['lodge_suites_11_10_1_A_c'] + $row['lodge_suites_11_10_1_A_d'] + $row['lodge_suites_11_10_1_A_e'] + $row['lodge_suites_11_10_1_B_a'] + $row['lodge_suites_11_10_1_B_b'] + $row['lodge_suites_11_10_1_B'] + $row['lodge_suites_11_10_1_C'];
			$lodge_suites_11_11_self_assessor_3 = $row['lodge_suites_11_11_1_A'] + $row['lodge_suites_11_11_1_B'] + $row['lodge_suites_11_11_1_C'] + $row['lodge_suites_11_11_1_D'] + $row['lodge_suites_11_11_1_E'] + $row['lodge_suites_11_11_1_F'] + $row['lodge_suites_11_11_1_G'];
			$lodge_suites_11_12_self_assessor_3 = $row['lodge_suites_11_12_1_A_a'] + $row['lodge_suites_11_12_1_A_b'] + $row['lodge_suites_11_12_1_A_c'] + $row['lodge_suites_11_12_1_A_d'] + $row['lodge_suites_11_12_1_A_e'] + $row['lodge_suites_11_12_1_A_f'] + $row['lodge_suites_11_12_1_A_g'] + $row['lodge_suites_11_12_1_A_h'] + $row['lodge_suites_11_12_1_A_i'] + $row['lodge_suites_11_12_1_A_j'] + $row['lodge_suites_11_12_1_A_k'] + $row['lodge_suites_11_12_1_A_l'] + $row['lodge_suites_11_12_1_A_m'] + $row['lodge_suites_11_12_1_A_n'] + $row['lodge_suites_11_12_1_A_o'] + $row['lodge_suites_11_12_1_A_p'] + $row['lodge_suites_11_12_1_A_q'] + $row['lodge_suites_11_12_1_A_r'] + $row['lodge_suites_11_12_1_A_s'] + $row['lodge_suites_11_12_1_A_t'] + $row['lodge_suites_11_12_1_A_u'] + $row['lodge_suites_11_12_1_A_v'] + $row['lodge_suites_11_12_1_B'] + $row['lodge_suites_11_12_1_C'];
			$lodge_suites_11_13_self_assessor_3 = $row['lodge_suites_11_13_1_A'] + $row['lodge_suites_11_13_1_B'];
			$lodge_suites_11_14_self_assessor_3 = $row['lodge_suites_11_14_1_A'] + $row['lodge_suites_11_14_1_B_a'] + $row['lodge_suites_11_14_1_B_b'] + $row['lodge_suites_11_14_1_B_c'] + $row['lodge_suites_11_14_1_C'];
			$lodge_suites_11_15_self_assessor_3 = $row['lodge_suites_11_15_1_A'] + 0;
			$lodge_suites_11_16_self_assessor_3 = $row['lodge_suites_11_16_1_A_a'] + $row['lodge_suites_11_16_1_A_b'] + $row['lodge_suites_11_16_1_A_c'] + $row['lodge_suites_11_16_1_A_d'] + $row['lodge_suites_11_16_1_A_e'] + $row['lodge_suites_11_16_1_A_f'] + $row['lodge_suites_11_16_1_A_g'] + $row['lodge_suites_11_16_1_A_h'] + $row['lodge_suites_11_16_1_A_i'] + $row['lodge_suites_11_16_1_A_j'] + $row['lodge_suites_11_16_1_A_k'] + $row['lodge_suites_11_16_1_A_l'] + $row['lodge_suites_11_16_1_A_m'] + $row['lodge_suites_11_16_1_A_n'] + $row['lodge_suites_11_16_1_A_o'] + $row['lodge_suites_11_16_1_A_p'] + $row['lodge_suites_11_16_1_A_q'] + $row['lodge_suites_11_16_1_A_r'] + $row['lodge_suites_11_16_1_A_s'] + $row['lodge_suites_11_16_1_A_t'] + $row['lodge_suites_11_16_1_A_u'] + $row['lodge_suites_11_16_1_A_v'] + $row['lodge_suites_11_16_1_B'] + $row['lodge_suites_11_16_1_C'] + $row['lodge_suites_11_16_1_D'] + $row['lodge_suites_11_16_1_E'] + $row['lodge_suites_11_16_1_F'];
			$lodge_suites_11_17_self_assessor_3 = $row['lodge_suites_11_17_1_A_a'] + $row['lodge_suites_11_17_1_A_b'] + $row['lodge_suites_11_17_1_A_c'] + $row['lodge_suites_11_17_1_A_d'] + $row['lodge_suites_11_17_1_A_e'] + $row['lodge_suites_11_17_1_A_f'] + $row['lodge_suites_11_17_1_A_g'] + $row['lodge_suites_11_17_1_A_h'] + $row['lodge_suites_11_17_1_A_i'] + $row['lodge_suites_11_17_1_A_j'] + $row['lodge_suites_11_17_1_A_k'] + $row['lodge_suites_11_17_1_B'] + $row['lodge_suites_11_17_1_C'];
			$lodge_suites_11_18_self_assessor_3 = $row['lodge_suites_11_18_1_A'] + $row['lodge_suites_11_18_1_B'] + $row['lodge_suites_11_18_1_C'] + $row['lodge_suites_11_18_1_D'] + $row['lodge_suites_11_18_1_E'] + $row['lodge_suites_11_18_1_F'];
			$lodge_suites_11_19_self_assessor_3 = $row['lodge_suites_11_19_1_A_a'] + $row['lodge_suites_11_19_1_A_b'] + $row['lodge_suites_11_19_1_A_c'] + $row['lodge_suites_11_19_1_A_d'] + $row['lodge_suites_11_19_1_A_e'] + $row['lodge_suites_11_19_1_B'] + $row['lodge_suites_11_19_1_C'] + $row['lodge_suites_11_19_1_D'] + $row['lodge_suites_11_19_1_E'] + $row['lodge_suites_11_19_1_F'];
			$lodge_suites_11_20_self_assessor_3 = $row['lodge_suites_11_20_1_A'] + $row['lodge_suites_11_20_1_B'] + $row['lodge_suites_11_20_1_C'];
			$output['lodge_suites_11_1_self_assessor_3'] = $lodge_suites_11_1_self_assessor_3;
			$output['lodge_suites_11_2_self_assessor_3'] = $lodge_suites_11_2_self_assessor_3;
			$output['lodge_suites_11_3_self_assessor_3'] = $lodge_suites_11_3_self_assessor_3;
			$output['lodge_suites_11_4_self_assessor_3'] = $lodge_suites_11_4_self_assessor_3;
			$output['lodge_suites_11_5_self_assessor_3'] = $lodge_suites_11_5_self_assessor_3;
			$output['lodge_suites_11_6_self_assessor_3'] = $lodge_suites_11_6_self_assessor_3;
			$output['lodge_suites_11_7_self_assessor_3'] = $lodge_suites_11_7_self_assessor_3;
			$output['lodge_suites_11_8_self_assessor_3'] = $lodge_suites_11_8_self_assessor_3;
			$output['lodge_suites_11_9_self_assessor_3'] = $lodge_suites_11_9_self_assessor_3;
			$output['lodge_suites_11_10_self_assessor_3'] = $lodge_suites_11_10_self_assessor_3;
			$output['lodge_suites_11_11_self_assessor_3'] = $lodge_suites_11_11_self_assessor_3;
			$output['lodge_suites_11_12_self_assessor_3'] = $lodge_suites_11_12_self_assessor_3;
			$output['lodge_suites_11_13_self_assessor_3'] = $lodge_suites_11_13_self_assessor_3;
			$output['lodge_suites_11_14_self_assessor_3'] = $lodge_suites_11_14_self_assessor_3;
			$output['lodge_suites_11_15_self_assessor_3'] = $lodge_suites_11_15_self_assessor_3;
			$output['lodge_suites_11_16_self_assessor_3'] = $lodge_suites_11_16_self_assessor_3;
			$output['lodge_suites_11_17_self_assessor_3'] = $lodge_suites_11_17_self_assessor_3;
			$output['lodge_suites_11_18_self_assessor_3'] = $lodge_suites_11_18_self_assessor_3;
			$output['lodge_suites_11_19_self_assessor_3'] = $lodge_suites_11_19_self_assessor_3;
			$output['lodge_suites_11_20_self_assessor_3'] = $lodge_suites_11_20_self_assessor_3;
			$output['lodge_suites_11_0_self_assessor_3'] = $lodge_suites_11_1_self_assessor_3 + $lodge_suites_11_2_self_assessor_3 + $lodge_suites_11_3_self_assessor_3 + $lodge_suites_11_4_self_assessor_3 + $lodge_suites_11_5_self_assessor_3 + $lodge_suites_11_6_self_assessor_3 + $lodge_suites_11_7_self_assessor_3 + $lodge_suites_11_8_self_assessor_3 + $lodge_suites_11_9_self_assessor_3 + $lodge_suites_11_10_self_assessor_3 + $lodge_suites_11_11_self_assessor_3 + $lodge_suites_11_12_self_assessor_3 + $lodge_suites_11_13_self_assessor_3 + $lodge_suites_11_14_self_assessor_3 + $lodge_suites_11_15_self_assessor_3 + $lodge_suites_11_16_self_assessor_3 + $lodge_suites_11_17_self_assessor_3 + $lodge_suites_11_18_self_assessor_3 + $lodge_suites_11_19_self_assessor_3 + $lodge_suites_11_20_self_assessor_3;
			//HYGIENE AND SANITATION
			$lodge_hygiene_and_sanitation_12_1_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_1_1_A'] + $row['lodge_hygiene_and_sanitation_12_1_1_B'] + $row['lodge_hygiene_and_sanitation_12_1_1_C'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_f'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_g'] + $row['lodge_hygiene_and_sanitation_12_1_1_D_h'] + $row['lodge_hygiene_and_sanitation_12_1_1_E'] + $row['lodge_hygiene_and_sanitation_12_1_1_F'] + $row['lodge_hygiene_and_sanitation_12_1_1_G'] + $row['lodge_hygiene_and_sanitation_12_1_1_H'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_a'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_b'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_c'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_d'] + $row['lodge_hygiene_and_sanitation_12_1_1_I_e'] + $row['lodge_hygiene_and_sanitation_12_1_1_J'] + $row['lodge_hygiene_and_sanitation_12_1_1_K'] + $row['lodge_hygiene_and_sanitation_12_1_1_L'] + $row['lodge_hygiene_and_sanitation_12_1_1_M'] + $row['lodge_hygiene_and_sanitation_12_1_1_N'];
			$lodge_hygiene_and_sanitation_12_2_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_2_1_A'] + $row['lodge_hygiene_and_sanitation_12_2_1_B'] + $row['lodge_hygiene_and_sanitation_12_2_1_C'] + $row['lodge_hygiene_and_sanitation_12_2_1_D'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_e'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_f'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_g'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_h'] + $row['lodge_hygiene_and_sanitation_12_2_1_E_i'] + $row['lodge_hygiene_and_sanitation_12_2_1_F'] + $row['lodge_hygiene_and_sanitation_12_2_1_G'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_a'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_b'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_c'] + $row['lodge_hygiene_and_sanitation_12_2_1_H_d'] + $row['lodge_hygiene_and_sanitation_12_2_1_I'] + $row['lodge_hygiene_and_sanitation_12_2_1_J'];
			$lodge_hygiene_and_sanitation_12_3_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_3_1_A'] + $row['lodge_hygiene_and_sanitation_12_3_1_B'] + $row['lodge_hygiene_and_sanitation_12_3_1_C'] + $row['lodge_hygiene_and_sanitation_12_3_1_D'] + $row['lodge_hygiene_and_sanitation_12_3_1_E'] + $row['lodge_hygiene_and_sanitation_12_3_1_F'] + $row['lodge_hygiene_and_sanitation_12_3_1_G'];
			$lodge_hygiene_and_sanitation_12_4_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_4_1_A'] + $row['lodge_hygiene_and_sanitation_12_4_1_B'] + $row['lodge_hygiene_and_sanitation_12_4_1_C'] + $row['lodge_hygiene_and_sanitation_12_4_1_D'];
			$lodge_hygiene_and_sanitation_12_5_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_5_1_A'] + $row['lodge_hygiene_and_sanitation_12_5_1_B'];
			$lodge_hygiene_and_sanitation_12_6_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_6_1_A'] + $row['lodge_hygiene_and_sanitation_12_6_1_B'] + $row['lodge_hygiene_and_sanitation_12_6_1_C'];
			$lodge_hygiene_and_sanitation_12_7_self_assessor_3 = $row['lodge_hygiene_and_sanitation_12_7_1_A'] + $row['lodge_hygiene_and_sanitation_12_7_1_B'];
			$output['lodge_hygiene_and_sanitation_12_1_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_2_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_2_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_3_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_3_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_4_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_4_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_5_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_5_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_6_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_6_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_7_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_7_self_assessor_3;
			$output['lodge_hygiene_and_sanitation_12_0_self_assessor_3'] = $lodge_hygiene_and_sanitation_12_1_self_assessor_3 + $lodge_hygiene_and_sanitation_12_2_self_assessor_3 + $lodge_hygiene_and_sanitation_12_3_self_assessor_3 + $lodge_hygiene_and_sanitation_12_4_self_assessor_3 + $lodge_hygiene_and_sanitation_12_5_self_assessor_3 + $lodge_hygiene_and_sanitation_12_6_self_assessor_3 + $lodge_hygiene_and_sanitation_12_7_self_assessor_3;


			//SAFETY AND SECURITY
			$lodge_safety_and_security_13_1_self_assessor_3 = $row['lodge_safety_and_security_13_1_1_A'] + $row['lodge_safety_and_security_13_1_1_B'] + $row['lodge_safety_and_security_13_1_1_C'] + $row['lodge_safety_and_security_13_1_1_D'] + $row['lodge_safety_and_security_13_1_1_E'] + $row['lodge_safety_and_security_13_1_1_F_a'] + $row['lodge_safety_and_security_13_1_1_F_b'] + $row['lodge_safety_and_security_13_1_1_F_c'] + $row['lodge_safety_and_security_13_1_1_F_d'] + $row['lodge_safety_and_security_13_1_1_F_e'] + $row['lodge_safety_and_security_13_1_1_F_f'] + $row['lodge_safety_and_security_13_1_1_F_g'] + $row['lodge_safety_and_security_13_1_1_G'] + $row['lodge_safety_and_security_13_1_1_H'] + $row['lodge_safety_and_security_13_1_1_I'] + $row['lodge_safety_and_security_13_1_1_J'];
			$lodge_safety_and_security_13_2_self_assessor_3 = $row['lodge_safety_and_security_13_2_1_A'] + $row['lodge_safety_and_security_13_2_1_B'];
			$lodge_safety_and_security_13_3_self_assessor_3 = $row['lodge_safety_and_security_13_3_1_A'] + $row['lodge_safety_and_security_13_3_1_B'] + $row['lodge_safety_and_security_13_3_1_C'] + $row['lodge_safety_and_security_13_3_1_D'] + $row['lodge_safety_and_security_13_3_1_E'];
			$lodge_safety_and_security_13_4_self_assessor_3 = $row['lodge_safety_and_security_13_4_1_A'] + $row['lodge_safety_and_security_13_4_1_B'] + $row['lodge_safety_and_security_13_4_1_C'];
			$lodge_safety_and_security_13_5_self_assessor_3 = $row['lodge_safety_and_security_13_5_1_A'] + $row['lodge_safety_and_security_13_5_1_B'] + $row['lodge_safety_and_security_13_5_1_C'] + $row['lodge_safety_and_security_13_5_1_D'] + $row['lodge_safety_and_security_13_5_1_E'] + $row['lodge_safety_and_security_13_5_1_F'];
			$output['lodge_safety_and_security_13_1_self_assessor_3'] = $lodge_safety_and_security_13_1_self_assessor_3;
			$output['lodge_safety_and_security_13_2_self_assessor_3'] = $lodge_safety_and_security_13_2_self_assessor_3;
			$output['lodge_safety_and_security_13_3_self_assessor_3'] = $lodge_safety_and_security_13_3_self_assessor_3;
			$output['lodge_safety_and_security_13_4_self_assessor_3'] = $lodge_safety_and_security_13_4_self_assessor_3;
			$output['lodge_safety_and_security_13_5_self_assessor_3'] = $lodge_safety_and_security_13_5_self_assessor_3;
			$output['lodge_safety_and_security_13_0_self_assessor_3'] = $lodge_safety_and_security_13_1_self_assessor_3 + $lodge_safety_and_security_13_2_self_assessor_3 + $lodge_safety_and_security_13_3_self_assessor_3 + $lodge_safety_and_security_13_4_self_assessor_3 + $lodge_safety_and_security_13_5_self_assessor_3;

			//SUNDRY SERVICES
			$lodge_sundry_services_14_1_self_assessor_3 = $row['lodge_sundry_services_14_1_1_A'] + $row['lodge_sundry_services_14_1_1_B'] + $row['lodge_sundry_services_14_1_1_C'];
			$lodge_sundry_services_14_2_self_assessor_3 = $row['lodge_sundry_services_14_2_1_A'] + 0;
			$lodge_sundry_services_14_3_self_assessor_3 = $row['lodge_sundry_services_14_3_1_A'] + $row['lodge_sundry_services_14_3_1_B'];
			$lodge_sundry_services_14_4_self_assessor_3 = $row['lodge_sundry_services_14_4_1_A'] + 0;
			$output['lodge_sundry_services_14_1_self_assessor_3'] = $lodge_sundry_services_14_1_self_assessor_3;
			$output['lodge_sundry_services_14_2_self_assessor_3'] = $lodge_sundry_services_14_2_self_assessor_3;
			$output['lodge_sundry_services_14_3_self_assessor_3'] = $lodge_sundry_services_14_3_self_assessor_3;
			$output['lodge_sundry_services_14_4_self_assessor_3'] = $lodge_sundry_services_14_4_self_assessor_3;
			$output['lodge_sundry_services_14_0_self_assessor_3'] = $lodge_sundry_services_14_1_self_assessor_3 + $lodge_sundry_services_14_2_self_assessor_3 + $lodge_sundry_services_14_3_self_assessor_3 + $lodge_sundry_services_14_4_self_assessor_3;


			//HUMAN RESOURCES
			$lodge_human_resources_15_1_self_assessor_3 = $row['lodge_human_resources_15_1_1_text'] + $row['lodge_human_resources_15_1_1_A'] + $row['lodge_human_resources_15_1_1_B_a'] + $row['lodge_human_resources_15_1_1_B_b'] + $row['lodge_human_resources_15_1_1_B_c'] + $row['lodge_human_resources_15_1_1_B_d'] + $row['lodge_human_resources_15_1_1_B_e'] + $row['lodge_human_resources_15_1_1_B_f'];
			$lodge_human_resources_15_2_self_assessor_3 = $row['lodge_human_resources_15_2_1_A'] + $row['lodge_human_resources_15_2_1_B'];
			$lodge_human_resources_15_3_self_assessor_3 = $row['lodge_human_resources_15_3_1_A'] + $row['lodge_human_resources_15_3_1_B'];
			$lodge_human_resources_15_4_self_assessor_3 = $row['lodge_human_resources_15_4_1_A'] + $row['lodge_human_resources_15_4_1_B'] + $row['lodge_human_resources_15_4_1_C'];
			$lodge_human_resources_15_6_self_assessor_3 = $row['lodge_human_resources_15_6_1_A'] + 0;
			$lodge_human_resources_15_7_self_assessor_3 = $row['lodge_human_resources_15_7_1_A'] + $row['lodge_human_resources_15_7_1_B'] + $row['lodge_human_resources_15_7_1_C'] + $row['lodge_human_resources_15_7_1_D'];
			$lodge_human_resources_15_8_self_assessor_3 = $row['lodge_human_resources_15_8_1_A'] + $row['lodge_human_resources_15_8_1_B'] + $row['lodge_human_resources_15_8_1_C'];
			$lodge_human_resources_15_9_self_assessor_3 = $row['lodge_human_resources_15_9_1_A'] + $row['lodge_human_resources_15_9_1_B'] + $row['lodge_human_resources_15_9_1_C'] + $row['lodge_human_resources_15_9_1_D'] + $row['lodge_human_resources_15_9_1_E'] + $row['lodge_human_resources_15_9_1_F'];
			$lodge_human_resources_15_10_self_assessor_3 = $row['lodge_human_resources_15_10_1_A'] + $row['lodge_human_resources_15_10_1_B'] + $row['lodge_human_resources_15_10_1_C'] + $row['lodge_human_resources_15_10_1_D'] + $row['lodge_human_resources_15_10_1_E'] + $row['lodge_human_resources_15_10_1_F'] + $row['lodge_human_resources_15_10_1_G'];
			$lodge_human_resources_15_11_self_assessor_3 = $row['lodge_human_resources_15_11_1_A_a'] + $row['lodge_human_resources_15_11_1_A_b'] + $row['lodge_human_resources_15_11_1_A_c'] + $row['lodge_human_resources_15_11_1_B_a'] + $row['lodge_human_resources_15_11_1_B_b'] + $row['lodge_human_resources_15_11_1_B_c'];
			$output['lodge_human_resources_15_1_self_assessor_3'] = $lodge_human_resources_15_1_self_assessor_3;
			$output['lodge_human_resources_15_2_self_assessor_3'] = $lodge_human_resources_15_2_self_assessor_3;
			$output['lodge_human_resources_15_3_self_assessor_3'] = $lodge_human_resources_15_3_self_assessor_3;
			$output['lodge_human_resources_15_4_self_assessor_3'] = $lodge_human_resources_15_4_self_assessor_3;
			$output['lodge_human_resources_15_5_self_assessor_3'] = $lodge_human_resources_15_5_self_assessor_3;
			$output['lodge_human_resources_15_6_self_assessor_3'] = $lodge_human_resources_15_6_self_assessor_3;
			$output['lodge_human_resources_15_7_self_assessor_3'] = $lodge_human_resources_15_7_self_assessor_3;
			$output['lodge_human_resources_15_8_self_assessor_3'] = $lodge_human_resources_15_8_self_assessor_3;
			$output['lodge_human_resources_15_9_self_assessor_3'] = $lodge_human_resources_15_9_self_assessor_3;
			$output['lodge_human_resources_15_10_self_assessor_3'] = $lodge_human_resources_15_10_self_assessor_3;
			$output['lodge_human_resources_15_11_self_assessor_3'] = $lodge_human_resources_15_11_self_assessor_3;
			$output['lodge_human_resources_15_0_self_assessor_3'] = $lodge_human_resources_15_1_self_assessor_3 + $lodge_human_resources_15_2_self_assessor_3 + $lodge_human_resources_15_3_self_assessor_3 + $lodge_human_resources_15_4_self_assessor_3 + $lodge_human_resources_15_5_self_assessor_3 + $lodge_human_resources_15_6_self_assessor_3 + $lodge_human_resources_15_7_self_assessor_3 + $lodge_human_resources_15_8_self_assessor_3 + $lodge_human_resources_15_9_self_assessor_3 + $lodge_human_resources_15_10_self_assessor_3 + $lodge_human_resources_15_11_self_assessor_3;


			//GENERAL
			$lodge_general_16_1_self_assessor_3 = $row['lodge_general_16_1_1_A'] + 0;
			$lodge_general_16_2_self_assessor_3 = $row['lodge_general_16_2_1_A'] + $row['lodge_general_16_2_1_B'];
			$lodge_general_16_3_self_assessor_3 = $row['lodge_general_16_3_1_A'] + $row['lodge_general_16_3_1_B_a'] + $row['lodge_general_16_3_1_B_b'] + $row['lodge_general_16_3_1_B_c'] + $row['lodge_general_16_3_1_B_d'] + $row['lodge_general_16_3_1_B_e'] + $row['lodge_general_16_3_1_C_a'] + $row['lodge_general_16_3_1_C_b'] + $row['lodge_general_16_3_1_D'];
			$lodge_general_16_4_self_assessor_3 = $row['lodge_general_16_4_1_A'] + $row['lodge_general_16_4_1_B'];
			$lodge_general_16_5_self_assessor_3 = $row['lodge_general_16_5_1_A'] + $row['lodge_general_16_5_1_B'] + $row['lodge_general_16_5_1_C'] + $row['lodge_general_16_5_1_D'] + $row['lodge_general_16_5_1_E'];
			$lodge_general_16_6_self_assessor_3 = $row['lodge_general_16_6_1_A'] + 0;
			$lodge_general_16_7_self_assessor_3 = $row['lodge_general_16_7_1_A'] + $row['lodge_general_16_7_1_B'];
			$lodge_general_16_8_self_assessor_3 = $row['lodge_general_16_8_1_A'] + $row['lodge_general_16_8_1_B'] + $row['lodge_general_16_8_1_C'];
			$lodge_general_16_9_self_assessor_3 = $row['lodge_general_16_9_1_A'] + $row['lodge_general_16_9_1_B'] + $row['lodge_general_16_9_1_C'] + $row['lodge_general_16_9_1_D_a'] + $row['lodge_general_16_9_1_D_b'] + $row['lodge_general_16_9_1_D_c'] + $row['lodge_general_16_9_1_D_d'] + $row['lodge_general_16_9_1_D_e'] + $row['lodge_general_16_9_1_E'] + $row['lodge_general_16_9_1_F'] + $row['lodge_general_16_9_1_G'] + $row['lodge_general_16_9_1_H'];
			$lodge_general_16_10_self_assessor_3 = $row['lodge_general_16_10_1_A'] + 0;
			$lodge_general_16_11_self_assessor_3 = $row['lodge_general_16_11_1_A'] + $row['lodge_general_16_11_1_B_a'] + $row['lodge_general_16_11_1_B_b'] + $row['lodge_general_16_11_1_B_c'] + $row['lodge_general_16_11_1_B_d'] + $row['lodge_general_16_11_1_B_e'] + $row['lodge_general_16_11_1_C'] + $row['lodge_general_16_11_1_D'] + $row['lodge_general_16_11_1_E'];
			$output['lodge_general_16_1_self_assessor_3'] = $lodge_general_16_1_self_assessor_3;
			$output['lodge_general_16_2_self_assessor_3'] = $lodge_general_16_2_self_assessor_3;
			$output['lodge_general_16_3_self_assessor_3'] = $lodge_general_16_3_self_assessor_3;
			$output['lodge_general_16_4_self_assessor_3'] = $lodge_general_16_4_self_assessor_3;
			$output['lodge_general_16_5_self_assessor_3'] = $lodge_general_16_5_self_assessor_3;
			$output['lodge_general_16_6_self_assessor_3'] = $lodge_general_16_6_self_assessor_3;
			$output['lodge_general_16_7_self_assessor_3'] = $lodge_general_16_7_self_assessor_3;
			$output['lodge_general_16_8_self_assessor_3'] = $lodge_general_16_8_self_assessor_3;
			$output['lodge_general_16_9_self_assessor_3'] = $lodge_general_16_9_self_assessor_3;
			$output['lodge_general_16_10_self_assessor_3'] = $lodge_general_16_10_self_assessor_3;
			$output['lodge_general_16_11_self_assessor_3'] = $lodge_general_16_11_self_assessor_3;
			$output['lodge_general_16_0_self_assessor_3'] = $lodge_human_resources_15_1_self_assessor_3 + $lodge_human_resources_15_2_self_assessor_3 + $lodge_human_resources_15_3_self_assessor_3 + $lodge_human_resources_15_4_self_assessor_3 + $lodge_human_resources_15_5_self_assessor_3 + $lodge_human_resources_15_6_self_assessor_3 + $lodge_human_resources_15_7_self_assessor_3 + $lodge_human_resources_15_8_self_assessor_3 + $lodge_human_resources_15_9_self_assessor_3 + $lodge_human_resources_15_10_self_assessor_3 + $lodge_human_resources_15_11_self_assessor_3 + $lodge_general_16_1_self_assessor_3 + $lodge_general_16_2_self_assessor_3 + $lodge_general_16_3_self_assessor_3 + $lodge_general_16_4_self_assessor_3 + $lodge_general_16_5_self_assessor_3 + $lodge_general_16_6_self_assessor_3 + $lodge_general_16_7_self_assessor_3 + $lodge_general_16_8_self_assessor_3 + $lodge_general_16_9_self_assessor_3 + $lodge_general_16_10_self_assessor_3 + $lodge_general_16_11_self_assessor_3;

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