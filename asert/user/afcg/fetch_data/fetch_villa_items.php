<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

//Detect assessor category
$assessor_category = $form_data->assessor_category;
$assessor_score_column = 'assessment_score_'.$assessor_category;

	$message = '';
	$connection_error = '';
	$output = array();
	$assessment_id = $form_data->assessment_id;
	$query = "SELECT * FROM afcg_assessment_villa WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = '".$assessor_category."'))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		 		  
			
			$output['location_1_1_1_text'] = $row['location_1_1_1_text']; 
			if(($row['location_1_1_1_A'] == "") || ($row['location_1_1_1_A'] === NULL)){ $output['location_1_1_1_A'] = "empty"; }else{ $output['location_1_1_1_A'] = $row['location_1_1_1_A']; }
			if(($row['location_1_1_1_B'] == "") || ($row['location_1_1_1_B'] === NULL)){ $output['location_1_1_1_B'] = "empty"; }else{ $output['location_1_1_1_B'] = $row['location_1_1_1_B']; }
			
			$output['location_1_1_2_text'] = $row['location_1_1_2_text']; 
			if(($row['location_1_1_2_A'] == "") || ($row['location_1_1_2_A'] === NULL)){ $output['location_1_1_2_A'] = "empty"; }else{ $output['location_1_1_2_A'] = $row['location_1_1_2_A']; }
			
			$output['location_1_1_3_text'] = $row['location_1_1_3_text']; 
			if(($row['location_1_1_3_A'] == "") || ($row['location_1_1_3_A'] === NULL)){ $output['location_1_1_3_A'] = "empty"; }else{ $output['location_1_1_3_A'] = $row['location_1_1_3_A']; }
			if(($row['location_1_1_3_B_a'] == "") || ($row['location_1_1_3_B_a'] === NULL)){ $output['location_1_1_3_B_a'] = "empty"; }else{ $output['location_1_1_3_B_a'] = $row['location_1_1_3_B_a']; }
			if(($row['location_1_1_3_B_b'] == "") || ($row['location_1_1_3_B_b'] === NULL)){ $output['location_1_1_3_B_b'] = "empty"; }else{ $output['location_1_1_3_B_b'] = $row['location_1_1_3_B_b']; }
			if(($row['location_1_1_3_B_c'] == "") || ($row['location_1_1_3_B_c'] === NULL)){ $output['location_1_1_3_B_c'] = "empty"; }else{ $output['location_1_1_3_B_c'] = $row['location_1_1_3_B_c']; }
			if(($row['location_1_1_3_B_d'] == "") || ($row['location_1_1_3_B_d'] === NULL)){ $output['location_1_1_3_B_d'] = "empty"; }else{ $output['location_1_1_3_B_d'] = $row['location_1_1_3_B_d']; }
			
			$output['location_1_1_4_text'] = $row['location_1_1_4_text']; 
			if(($row['location_1_1_4_A'] == "") || ($row['location_1_1_4_A'] === NULL)){ $output['location_1_1_4_A'] = "empty"; }else{ $output['location_1_1_4_A'] = $row['location_1_1_4_A']; }
			if(($row['location_1_1_4_B'] == "") || ($row['location_1_1_4_B'] === NULL)){ $output['location_1_1_4_B'] = "empty"; }else{ $output['location_1_1_4_B'] = $row['location_1_1_4_B']; }
			if(($row['location_1_1_4_C'] == "") || ($row['location_1_1_4_C'] === NULL)){ $output['location_1_1_4_C'] = "empty"; }else{ $output['location_1_1_4_C'] = $row['location_1_1_4_C']; }
 
			$output['location_1_1_5_text'] = $row['location_1_1_5_text']; 
			if(($row['location_1_1_5_A'] == "") || ($row['location_1_1_5_A'] === NULL)){ $output['location_1_1_5_A'] = "empty"; }else{ $output['location_1_1_5_A'] = $row['location_1_1_5_A']; }
			if(($row['location_1_1_5_B'] == "") || ($row['location_1_1_5_B'] === NULL)){ $output['location_1_1_5_B'] = "empty"; }else{ $output['location_1_1_5_B'] = $row['location_1_1_5_B']; }
			if(($row['location_1_1_5_C'] == "") || ($row['location_1_1_5_C'] === NULL)){ $output['location_1_1_5_C'] = "empty"; }else{ $output['location_1_1_5_C'] = $row['location_1_1_5_C']; }
			if(($row['location_1_1_5_D'] == "") || ($row['location_1_1_5_D'] === NULL)){ $output['location_1_1_5_D'] = "empty"; }else{ $output['location_1_1_5_D'] = $row['location_1_1_5_D']; }
			 
			$output['building_2_1_1_text'] = $row['building_2_1_1_text']; 
			if(($row['building_2_1_1_A'] == "") || ($row['building_2_1_1_A'] === NULL)){ $output['building_2_1_1_A'] = "empty"; }else{ $output['building_2_1_1_A'] = $row['building_2_1_1_A']; }
			if(($row['building_2_1_1_B'] == "") || ($row['building_2_1_1_B'] === NULL)){ $output['building_2_1_1_B'] = "empty"; }else{ $output['building_2_1_1_B'] = $row['building_2_1_1_B']; }
			 
			$output['building_2_2_1_text'] = $row['building_2_2_1_text']; 
			if(($row['building_2_2_1_A'] == "") || ($row['building_2_2_1_A'] === NULL)){ $output['building_2_2_1_A'] = "empty"; }else{ $output['building_2_2_1_A'] = $row['building_2_2_1_A']; }
			if(($row['building_2_2_1_B'] == "") || ($row['building_2_2_1_B'] === NULL)){ $output['building_2_2_1_B'] = "empty"; }else{ $output['building_2_2_1_B'] = $row['building_2_2_1_B']; }
			if(($row['building_2_2_1_C'] == "") || ($row['building_2_2_1_C'] === NULL)){ $output['building_2_2_1_C'] = "empty"; }else{ $output['building_2_2_1_C'] = $row['building_2_2_1_C']; }
			if(($row['building_2_2_1_D'] == "") || ($row['building_2_2_1_D'] === NULL)){ $output['building_2_2_1_D'] = "empty"; }else{ $output['building_2_2_1_D'] = $row['building_2_2_1_D']; }
			if(($row['building_2_2_1_E'] == "") || ($row['building_2_2_1_E'] === NULL)){ $output['building_2_2_1_E'] = "empty"; }else{ $output['building_2_2_1_E'] = $row['building_2_2_1_E']; }
			if(($row['building_2_2_1_F'] == "") || ($row['building_2_2_1_F'] === NULL)){ $output['building_2_2_1_F'] = "empty"; }else{ $output['building_2_2_1_F'] = $row['building_2_2_1_F']; }
			if(($row['building_2_2_1_G'] == "") || ($row['building_2_2_1_G'] === NULL)){ $output['building_2_2_1_G'] = "empty"; }else{ $output['building_2_2_1_G'] = $row['building_2_2_1_G']; }
			if(($row['building_2_2_1_H'] == "") || ($row['building_2_2_1_H'] === NULL)){ $output['building_2_2_1_H'] = "empty"; }else{ $output['building_2_2_1_H'] = $row['building_2_2_1_H']; }
			if(($row['building_2_2_1_I'] == "") || ($row['building_2_2_1_I'] === NULL)){ $output['building_2_2_1_I'] = "empty"; }else{ $output['building_2_2_1_I'] = $row['building_2_2_1_I']; }			
			 
			$output['building_2_3_1_text'] = $row['building_2_3_1_text']; 
			if(($row['building_2_3_1_A'] == "") || ($row['building_2_3_1_A'] === NULL)){ $output['building_2_3_1_A'] = "empty"; }else{ $output['building_2_3_1_A'] = $row['building_2_3_1_A']; }
			if(($row['building_2_3_1_B'] == "") || ($row['building_2_3_1_B'] === NULL)){ $output['building_2_3_1_B'] = "empty"; }else{ $output['building_2_3_1_B'] = $row['building_2_3_1_B']; }
			if(($row['building_2_3_1_C'] == "") || ($row['building_2_3_1_C'] === NULL)){ $output['building_2_3_1_C'] = "empty"; }else{ $output['building_2_3_1_C'] = $row['building_2_3_1_C']; }
			if(($row['building_2_3_1_D'] == "") || ($row['building_2_3_1_D'] === NULL)){ $output['building_2_3_1_D'] = "empty"; }else{ $output['building_2_3_1_D'] = $row['building_2_3_1_D']; }
			 
			$output['building_2_4_1_text'] = $row['building_2_4_1_text']; 
			if(($row['building_2_4_1_A'] == "") || ($row['building_2_4_1_A'] === NULL)){ $output['building_2_4_1_A'] = "empty"; }else{ $output['building_2_4_1_A'] = $row['building_2_4_1_A']; }
			 
			$output['building_2_5_1_text'] = $row['building_2_5_1_text']; 
			if(($row['building_2_5_1_A'] == "") || ($row['building_2_5_1_A'] === NULL)){ $output['building_2_5_1_A'] = "empty"; }else{ $output['building_2_5_1_A'] = $row['building_2_5_1_A']; }
			if(($row['building_2_5_1_B'] == "") || ($row['building_2_5_1_B'] === NULL)){ $output['building_2_5_1_B'] = "empty"; }else{ $output['building_2_5_1_B'] = $row['building_2_5_1_B']; }
			if(($row['building_2_5_1_C'] == "") || ($row['building_2_5_1_C'] === NULL)){ $output['building_2_5_1_C'] = "empty"; }else{ $output['building_2_5_1_C'] = $row['building_2_5_1_C']; }
			if(($row['building_2_5_1_D'] == "") || ($row['building_2_5_1_D'] === NULL)){ $output['building_2_5_1_D'] = "empty"; }else{ $output['building_2_5_1_D'] = $row['building_2_5_1_D']; }
			if(($row['building_2_5_1_E'] == "") || ($row['building_2_5_1_E'] === NULL)){ $output['building_2_5_1_E'] = "empty"; }else{ $output['building_2_5_1_E'] = $row['building_2_5_1_E']; }
			if(($row['building_2_5_1_F'] == "") || ($row['building_2_5_1_F'] === NULL)){ $output['building_2_5_1_F'] = "empty"; }else{ $output['building_2_5_1_F'] = $row['building_2_5_1_F']; }
			if(($row['building_2_5_1_G'] == "") || ($row['building_2_5_1_G'] === NULL)){ $output['building_2_5_1_G'] = "empty"; }else{ $output['building_2_5_1_G'] = $row['building_2_5_1_G']; }
			if(($row['building_2_5_1_H'] == "") || ($row['building_2_5_1_H'] === NULL)){ $output['building_2_5_1_H'] = "empty"; }else{ $output['building_2_5_1_H'] = $row['building_2_5_1_H']; }
			if(($row['building_2_5_1_I'] == "") || ($row['building_2_5_1_I'] === NULL)){ $output['building_2_5_1_I'] = "empty"; }else{ $output['building_2_5_1_I'] = $row['building_2_5_1_I']; }
			if(($row['building_2_5_1_J'] == "") || ($row['building_2_5_1_J'] === NULL)){ $output['building_2_5_1_J'] = "empty"; }else{ $output['building_2_5_1_J'] = $row['building_2_5_1_J']; }
			 
			$output['building_2_6_1_text'] = $row['building_2_6_1_text']; 
			if(($row['building_2_6_1_A'] == "") || ($row['building_2_6_1_A'] === NULL)){ $output['building_2_6_1_A'] = "empty"; }else{ $output['building_2_6_1_A'] = $row['building_2_6_1_A']; }
			if(($row['building_2_6_1_B'] == "") || ($row['building_2_6_1_B'] === NULL)){ $output['building_2_6_1_B'] = "empty"; }else{ $output['building_2_6_1_B'] = $row['building_2_6_1_B']; }
			if(($row['building_2_6_1_C'] == "") || ($row['building_2_6_1_C'] === NULL)){ $output['building_2_6_1_C'] = "empty"; }else{ $output['building_2_6_1_C'] = $row['building_2_6_1_C']; }
			if(($row['building_2_6_1_D'] == "") || ($row['building_2_6_1_D'] === NULL)){ $output['building_2_6_1_D'] = "empty"; }else{ $output['building_2_6_1_D'] = $row['building_2_6_1_D']; }
			if(($row['building_2_6_1_E'] == "") || ($row['building_2_6_1_E'] === NULL)){ $output['building_2_6_1_E'] = "empty"; }else{ $output['building_2_6_1_E'] = $row['building_2_6_1_E']; }
			 
			$output['building_2_7_1_text'] = $row['building_2_7_1_text']; 
			if(($row['building_2_7_1_A'] == "") || ($row['building_2_7_1_A'] === NULL)){ $output['building_2_7_1_A'] = "empty"; }else{ $output['building_2_7_1_A'] = $row['building_2_7_1_A']; }
			if(($row['building_2_7_1_B'] == "") || ($row['building_2_7_1_B'] === NULL)){ $output['building_2_7_1_B'] = "empty"; }else{ $output['building_2_7_1_B'] = $row['building_2_7_1_B']; }
			 
			$output['building_2_8_1_text'] = $row['building_2_8_1_text']; 
			if(($row['building_2_8_1_A'] == "") || ($row['building_2_8_1_A'] === NULL)){ $output['building_2_8_1_A'] = "empty"; }else{ $output['building_2_8_1_A'] = $row['building_2_8_1_A']; }
			if(($row['building_2_8_1_B'] == "") || ($row['building_2_8_1_B'] === NULL)){ $output['building_2_8_1_B'] = "empty"; }else{ $output['building_2_8_1_B'] = $row['building_2_8_1_B']; }
			 
			$output['lobby_lounge_other_public_areas_3_1_1_text'] = $row['lobby_lounge_other_public_areas_3_1_1_text']; 
			if(($row['lobby_lounge_other_public_areas_3_1_1_A'] == "") || ($row['lobby_lounge_other_public_areas_3_1_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_3_1_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_1_1_A'] = $row['lobby_lounge_other_public_areas_3_1_1_A']; }
			if(($row['lobby_lounge_other_public_areas_3_1_1_B'] == "") || ($row['lobby_lounge_other_public_areas_3_1_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_3_1_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_1_1_B'] = $row['lobby_lounge_other_public_areas_3_1_1_B']; }
			if(($row['lobby_lounge_other_public_areas_3_1_1_C'] == "") || ($row['lobby_lounge_other_public_areas_3_1_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_3_1_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_1_1_C'] = $row['lobby_lounge_other_public_areas_3_1_1_C']; }
			if(($row['lobby_lounge_other_public_areas_3_1_1_D'] == "") || ($row['lobby_lounge_other_public_areas_3_1_1_D'] === NULL)){ $output['lobby_lounge_other_public_areas_3_1_1_D'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_1_1_D'] = $row['lobby_lounge_other_public_areas_3_1_1_D']; }
			if(($row['lobby_lounge_other_public_areas_3_1_1_E'] == "") || ($row['lobby_lounge_other_public_areas_3_1_1_E'] === NULL)){ $output['lobby_lounge_other_public_areas_3_1_1_E'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_1_1_E'] = $row['lobby_lounge_other_public_areas_3_1_1_E']; }
			 
			$output['lobby_lounge_other_public_areas_3_2_1_text'] = $row['lobby_lounge_other_public_areas_3_2_1_text']; 
			if(($row['lobby_lounge_other_public_areas_3_2_1_A'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_A'] = $row['lobby_lounge_other_public_areas_3_2_1_A']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_B'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_B'] = $row['lobby_lounge_other_public_areas_3_2_1_B']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_C'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_C'] = $row['lobby_lounge_other_public_areas_3_2_1_C']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_D_a'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_D_a'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_D_a'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_D_a'] = $row['lobby_lounge_other_public_areas_3_2_1_D_a']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_D_b'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_D_b'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_D_b'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_D_b'] = $row['lobby_lounge_other_public_areas_3_2_1_D_b']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_E'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_E'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_E'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_E'] = $row['lobby_lounge_other_public_areas_3_2_1_E']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_F'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_F'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_F'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_F'] = $row['lobby_lounge_other_public_areas_3_2_1_F']; }
			if(($row['lobby_lounge_other_public_areas_3_2_1_G'] == "") || ($row['lobby_lounge_other_public_areas_3_2_1_G'] === NULL)){ $output['lobby_lounge_other_public_areas_3_2_1_G'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_3_2_1_G'] = $row['lobby_lounge_other_public_areas_3_2_1_G']; }
			 
			$output['lobby_lounge_other_public_area_3_3_1_text'] = $row['lobby_lounge_other_public_area_3_3_1_text']; 
			if(($row['lobby_lounge_other_public_area_3_3_1_A'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_A'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_A'] = $row['lobby_lounge_other_public_area_3_3_1_A']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_B_a'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_B_a'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_B_a'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_B_a'] = $row['lobby_lounge_other_public_area_3_3_1_B_a']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_B_b'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_B_b'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_B_b'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_B_b'] = $row['lobby_lounge_other_public_area_3_3_1_B_b']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_B_c'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_B_c'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_B_c'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_B_c'] = $row['lobby_lounge_other_public_area_3_3_1_B_c']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_C_a'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_C_a'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_C_a'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_C_a'] = $row['lobby_lounge_other_public_area_3_3_1_C_a']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_C_b'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_C_b'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_C_b'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_C_b'] = $row['lobby_lounge_other_public_area_3_3_1_C_b']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_C_c'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_C_c'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_C_c'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_C_c'] = $row['lobby_lounge_other_public_area_3_3_1_C_c']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_D_a'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_D_a'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_D_a'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_D_a'] = $row['lobby_lounge_other_public_area_3_3_1_D_a']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_D_b'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_D_b'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_D_b'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_D_b'] = $row['lobby_lounge_other_public_area_3_3_1_D_b']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_D_c'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_D_c'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_D_c'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_D_c'] = $row['lobby_lounge_other_public_area_3_3_1_D_c']; }
			if(($row['lobby_lounge_other_public_area_3_3_1_D_d'] == "") || ($row['lobby_lounge_other_public_area_3_3_1_D_d'] === NULL)){ $output['lobby_lounge_other_public_area_3_3_1_D_d'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_3_1_D_d'] = $row['lobby_lounge_other_public_area_3_3_1_D_d']; }
			 
			$output['lobby_lounge_other_public_area_3_4_1_text'] = $row['lobby_lounge_other_public_area_3_4_1_text']; 
			if(($row['lobby_lounge_other_public_area_3_4_1_A'] == "") || ($row['lobby_lounge_other_public_area_3_4_1_A'] === NULL)){ $output['lobby_lounge_other_public_area_3_4_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_4_1_A'] = $row['lobby_lounge_other_public_area_3_4_1_A']; }
			if(($row['lobby_lounge_other_public_area_3_4_1_B'] == "") || ($row['lobby_lounge_other_public_area_3_4_1_B'] === NULL)){ $output['lobby_lounge_other_public_area_3_4_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_4_1_B'] = $row['lobby_lounge_other_public_area_3_4_1_B']; }
			if(($row['lobby_lounge_other_public_area_3_4_1_C'] == "") || ($row['lobby_lounge_other_public_area_3_4_1_C'] === NULL)){ $output['lobby_lounge_other_public_area_3_4_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_4_1_C'] = $row['lobby_lounge_other_public_area_3_4_1_C']; }
			if(($row['lobby_lounge_other_public_area_3_4_1_D'] == "") || ($row['lobby_lounge_other_public_area_3_4_1_D'] === NULL)){ $output['lobby_lounge_other_public_area_3_4_1_D'] = "empty"; }else{ $output['lobby_lounge_other_public_area_3_4_1_D'] = $row['lobby_lounge_other_public_area_3_4_1_D']; }
			 
			$output['guest_rooms_4_1_1_text'] = $row['guest_rooms_4_1_1_text']; 
			if(($row['guest_rooms_4_1_1_A'] == "") || ($row['guest_rooms_4_1_1_A'] === NULL)){ $output['guest_rooms_4_1_1_A'] = "empty"; }else{ $output['guest_rooms_4_1_1_A'] = $row['guest_rooms_4_1_1_A']; }
			 
			$output['guest_rooms_4_2_1_text'] = $row['guest_rooms_4_2_1_text']; 
			if(($row['guest_rooms_4_2_1_A_a'] == "") || ($row['guest_rooms_4_2_1_A_a'] === NULL)){ $output['guest_rooms_4_2_1_A_a'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_a'] = $row['guest_rooms_4_2_1_A_a']; }
			if(($row['guest_rooms_4_2_1_A_b'] == "") || ($row['guest_rooms_4_2_1_A_b'] === NULL)){ $output['guest_rooms_4_2_1_A_b'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_b'] = $row['guest_rooms_4_2_1_A_b']; }
			if(($row['guest_rooms_4_2_1_A_c'] == "") || ($row['guest_rooms_4_2_1_A_c'] === NULL)){ $output['guest_rooms_4_2_1_A_c'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_c'] = $row['guest_rooms_4_2_1_A_c']; }
			if(($row['guest_rooms_4_2_1_A_d'] == "") || ($row['guest_rooms_4_2_1_A_d'] === NULL)){ $output['guest_rooms_4_2_1_A_d'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_d'] = $row['guest_rooms_4_2_1_A_d']; }
			if(($row['guest_rooms_4_2_1_A_e'] == "") || ($row['guest_rooms_4_2_1_A_e'] === NULL)){ $output['guest_rooms_4_2_1_A_e'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_e'] = $row['guest_rooms_4_2_1_A_e']; }
			if(($row['guest_rooms_4_2_1_A_f'] == "") || ($row['guest_rooms_4_2_1_A_f'] === NULL)){ $output['guest_rooms_4_2_1_A_f'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_f'] = $row['guest_rooms_4_2_1_A_f']; }
			if(($row['guest_rooms_4_2_1_A_g'] == "") || ($row['guest_rooms_4_2_1_A_g'] === NULL)){ $output['guest_rooms_4_2_1_A_g'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_g'] = $row['guest_rooms_4_2_1_A_g']; }
			if(($row['guest_rooms_4_2_1_A_h'] == "") || ($row['guest_rooms_4_2_1_A_h'] === NULL)){ $output['guest_rooms_4_2_1_A_h'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_h'] = $row['guest_rooms_4_2_1_A_h']; }
			if(($row['guest_rooms_4_2_1_A_i'] == "") || ($row['guest_rooms_4_2_1_A_i'] === NULL)){ $output['guest_rooms_4_2_1_A_i'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_i'] = $row['guest_rooms_4_2_1_A_i']; }
			if(($row['guest_rooms_4_2_1_A_j'] == "") || ($row['guest_rooms_4_2_1_A_j'] === NULL)){ $output['guest_rooms_4_2_1_A_j'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_j'] = $row['guest_rooms_4_2_1_A_j']; }
			if(($row['guest_rooms_4_2_1_A_k'] == "") || ($row['guest_rooms_4_2_1_A_k'] === NULL)){ $output['guest_rooms_4_2_1_A_k'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_k'] = $row['guest_rooms_4_2_1_A_k']; }
			if(($row['guest_rooms_4_2_1_A_l'] == "") || ($row['guest_rooms_4_2_1_A_l'] === NULL)){ $output['guest_rooms_4_2_1_A_l'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_l'] = $row['guest_rooms_4_2_1_A_l']; }
			if(($row['guest_rooms_4_2_1_A_m'] == "") || ($row['guest_rooms_4_2_1_A_m'] === NULL)){ $output['guest_rooms_4_2_1_A_m'] = "empty"; }else{ $output['guest_rooms_4_2_1_A_m'] = $row['guest_rooms_4_2_1_A_m']; }
			if(($row['guest_rooms_4_2_1_B'] == "") || ($row['guest_rooms_4_2_1_B'] === NULL)){ $output['guest_rooms_4_2_1_B'] = "empty"; }else{ $output['guest_rooms_4_2_1_B'] = $row['guest_rooms_4_2_1_B']; }
			 
			$output['guest_rooms_4_3_1_text'] = $row['guest_rooms_4_3_1_text']; 
			if(($row['guest_rooms_4_3_1_A'] == "") || ($row['guest_rooms_4_3_1_A'] === NULL)){ $output['guest_rooms_4_3_1_A'] = "empty"; }else{ $output['guest_rooms_4_3_1_A'] = $row['guest_rooms_4_3_1_A']; }
			if(($row['guest_rooms_4_3_1_B'] == "") || ($row['guest_rooms_4_3_1_B'] === NULL)){ $output['guest_rooms_4_3_1_B'] = "empty"; }else{ $output['guest_rooms_4_3_1_B'] = $row['guest_rooms_4_3_1_B']; }
			if(($row['guest_rooms_4_3_1_C'] == "") || ($row['guest_rooms_4_3_1_C'] === NULL)){ $output['guest_rooms_4_3_1_C'] = "empty"; }else{ $output['guest_rooms_4_3_1_C'] = $row['guest_rooms_4_3_1_C']; }
			if(($row['guest_rooms_4_3_1_D'] == "") || ($row['guest_rooms_4_3_1_D'] === NULL)){ $output['guest_rooms_4_3_1_D'] = "empty"; }else{ $output['guest_rooms_4_3_1_D'] = $row['guest_rooms_4_3_1_D']; }
			if(($row['guest_rooms_4_3_1_E'] == "") || ($row['guest_rooms_4_3_1_E'] === NULL)){ $output['guest_rooms_4_3_1_E'] = "empty"; }else{ $output['guest_rooms_4_3_1_E'] = $row['guest_rooms_4_3_1_E']; }
			 
			$output['guest_rooms_4_4_1_text'] = $row['guest_rooms_4_4_1_text']; 
			if(($row['guest_rooms_4_4_1_A'] == "") || ($row['guest_rooms_4_4_1_A'] === NULL)){ $output['guest_rooms_4_4_1_A'] = "empty"; }else{ $output['guest_rooms_4_4_1_A'] = $row['guest_rooms_4_4_1_A']; }
			if(($row['guest_rooms_4_4_1_B'] == "") || ($row['guest_rooms_4_4_1_B'] === NULL)){ $output['guest_rooms_4_4_1_B'] = "empty"; }else{ $output['guest_rooms_4_4_1_B'] = $row['guest_rooms_4_4_1_B']; }
			if(($row['guest_rooms_4_4_1_C'] == "") || ($row['guest_rooms_4_4_1_C'] === NULL)){ $output['guest_rooms_4_4_1_C'] = "empty"; }else{ $output['guest_rooms_4_4_1_C'] = $row['guest_rooms_4_4_1_C']; }
			if(($row['guest_rooms_4_4_1_D'] == "") || ($row['guest_rooms_4_4_1_D'] === NULL)){ $output['guest_rooms_4_4_1_D'] = "empty"; }else{ $output['guest_rooms_4_4_1_D'] = $row['guest_rooms_4_4_1_D']; }
			if(($row['guest_rooms_4_4_1_E'] == "") || ($row['guest_rooms_4_4_1_E'] === NULL)){ $output['guest_rooms_4_4_1_E'] = "empty"; }else{ $output['guest_rooms_4_4_1_E'] = $row['guest_rooms_4_4_1_E']; }
			 
			$output['guest_rooms_4_5_1_text'] = $row['guest_rooms_4_5_1_text']; 
			if(($row['guest_rooms_4_5_1_A'] == "") || ($row['guest_rooms_4_5_1_A'] === NULL)){ $output['guest_rooms_4_5_1_A'] = "empty"; }else{ $output['guest_rooms_4_5_1_A'] = $row['guest_rooms_4_5_1_A']; }
			if(($row['guest_rooms_4_5_1_B_a'] == "") || ($row['guest_rooms_4_5_1_B_a'] === NULL)){ $output['guest_rooms_4_5_1_B_a'] = "empty"; }else{ $output['guest_rooms_4_5_1_B_a'] = $row['guest_rooms_4_5_1_B_a']; }
			if(($row['guest_rooms_4_5_1_B_b'] == "") || ($row['guest_rooms_4_5_1_B_b'] === NULL)){ $output['guest_rooms_4_5_1_B_b'] = "empty"; }else{ $output['guest_rooms_4_5_1_B_b'] = $row['guest_rooms_4_5_1_B_b']; }
			if(($row['guest_rooms_4_5_1_B_c'] == "") || ($row['guest_rooms_4_5_1_B_c'] === NULL)){ $output['guest_rooms_4_5_1_B_c'] = "empty"; }else{ $output['guest_rooms_4_5_1_B_c'] = $row['guest_rooms_4_5_1_B_c']; }
			if(($row['guest_rooms_4_5_1_B_d'] == "") || ($row['guest_rooms_4_5_1_B_d'] === NULL)){ $output['guest_rooms_4_5_1_B_d'] = "empty"; }else{ $output['guest_rooms_4_5_1_B_d'] = $row['guest_rooms_4_5_1_B_d']; }
			if(($row['guest_rooms_4_5_1_B_e'] == "") || ($row['guest_rooms_4_5_1_B_e'] === NULL)){ $output['guest_rooms_4_5_1_B_e'] = "empty"; }else{ $output['guest_rooms_4_5_1_B_e'] = $row['guest_rooms_4_5_1_B_e']; }
			if(($row['guest_rooms_4_5_1_C'] == "") || ($row['guest_rooms_4_5_1_C'] === NULL)){ $output['guest_rooms_4_5_1_C'] = "empty"; }else{ $output['guest_rooms_4_5_1_C'] = $row['guest_rooms_4_5_1_C']; }
			if(($row['guest_rooms_4_5_1_D'] == "") || ($row['guest_rooms_4_5_1_D'] === NULL)){ $output['guest_rooms_4_5_1_D'] = "empty"; }else{ $output['guest_rooms_4_5_1_D'] = $row['guest_rooms_4_5_1_D']; }
			if(($row['guest_rooms_4_5_1_E'] == "") || ($row['guest_rooms_4_5_1_E'] === NULL)){ $output['guest_rooms_4_5_1_E'] = "empty"; }else{ $output['guest_rooms_4_5_1_E'] = $row['guest_rooms_4_5_1_E']; }
			if(($row['guest_rooms_4_5_1_F'] == "") || ($row['guest_rooms_4_5_1_F'] === NULL)){ $output['guest_rooms_4_5_1_F'] = "empty"; }else{ $output['guest_rooms_4_5_1_F'] = $row['guest_rooms_4_5_1_F']; }
			 
			$output['kitchen_5_1_1_text'] = $row['kitchen_5_1_1_text']; 
			if(($row['kitchen_5_1_1_A'] == "") || ($row['kitchen_5_1_1_A'] === NULL)){ $output['kitchen_5_1_1_A'] = "empty"; }else{ $output['kitchen_5_1_1_A'] = $row['kitchen_5_1_1_A']; }
			 
			$output['kitchen_5_2_1_text'] = $row['kitchen_5_2_1_text']; 
			if(($row['kitchen_5_2_1_A'] == "") || ($row['kitchen_5_2_1_A'] === NULL)){ $output['kitchen_5_2_1_A'] = "empty"; }else{ $output['kitchen_5_2_1_A'] = $row['kitchen_5_2_1_A']; }
			if(($row['kitchen_5_2_1_B'] == "") || ($row['kitchen_5_2_1_B'] === NULL)){ $output['kitchen_5_2_1_B'] = "empty"; }else{ $output['kitchen_5_2_1_B'] = $row['kitchen_5_2_1_B']; }
			if(($row['kitchen_5_2_1_C'] == "") || ($row['kitchen_5_2_1_C'] === NULL)){ $output['kitchen_5_2_1_C'] = "empty"; }else{ $output['kitchen_5_2_1_C'] = $row['kitchen_5_2_1_C']; }
			if(($row['kitchen_5_2_1_D'] == "") || ($row['kitchen_5_2_1_D'] === NULL)){ $output['kitchen_5_2_1_D'] = "empty"; }else{ $output['kitchen_5_2_1_D'] = $row['kitchen_5_2_1_D']; }
			if(($row['kitchen_5_2_1_E'] == "") || ($row['kitchen_5_2_1_E'] === NULL)){ $output['kitchen_5_2_1_E'] = "empty"; }else{ $output['kitchen_5_2_1_E'] = $row['kitchen_5_2_1_E']; }
			if(($row['kitchen_5_2_1_F'] == "") || ($row['kitchen_5_2_1_F'] === NULL)){ $output['kitchen_5_2_1_F'] = "empty"; }else{ $output['kitchen_5_2_1_F'] = $row['kitchen_5_2_1_F']; }
			if(($row['kitchen_5_2_1_G'] == "") || ($row['kitchen_5_2_1_G'] === NULL)){ $output['kitchen_5_2_1_G'] = "empty"; }else{ $output['kitchen_5_2_1_G'] = $row['kitchen_5_2_1_G']; }
			if(($row['kitchen_5_2_1_H'] == "") || ($row['kitchen_5_2_1_H'] === NULL)){ $output['kitchen_5_2_1_H'] = "empty"; }else{ $output['kitchen_5_2_1_H'] = $row['kitchen_5_2_1_H']; }
			 
			$output['kitchen_5_3_1_text'] = $row['kitchen_5_3_1_text']; 
			if(($row['kitchen_5_3_1_A_a'] == "") || ($row['kitchen_5_3_1_A_a'] === NULL)){ $output['kitchen_5_3_1_A_a'] = "empty"; }else{ $output['kitchen_5_3_1_A_a'] = $row['kitchen_5_3_1_A_a']; }
			if(($row['kitchen_5_3_1_A_b'] == "") || ($row['kitchen_5_3_1_A_b'] === NULL)){ $output['kitchen_5_3_1_A_b'] = "empty"; }else{ $output['kitchen_5_3_1_A_b'] = $row['kitchen_5_3_1_A_b']; }
			if(($row['kitchen_5_3_1_A_c'] == "") || ($row['kitchen_5_3_1_A_c'] === NULL)){ $output['kitchen_5_3_1_A_c'] = "empty"; }else{ $output['kitchen_5_3_1_A_c'] = $row['kitchen_5_3_1_A_c']; }
			if(($row['kitchen_5_3_1_A_d'] == "") || ($row['kitchen_5_3_1_A_d'] === NULL)){ $output['kitchen_5_3_1_A_d'] = "empty"; }else{ $output['kitchen_5_3_1_A_d'] = $row['kitchen_5_3_1_A_d']; }
			if(($row['kitchen_5_3_1_B'] == "") || ($row['kitchen_5_3_1_B'] === NULL)){ $output['kitchen_5_3_1_B'] = "empty"; }else{ $output['kitchen_5_3_1_B'] = $row['kitchen_5_3_1_B']; }
			if(($row['kitchen_5_3_1_C'] == "") || ($row['kitchen_5_3_1_C'] === NULL)){ $output['kitchen_5_3_1_C'] = "empty"; }else{ $output['kitchen_5_3_1_C'] = $row['kitchen_5_3_1_C']; }
			if(($row['kitchen_5_3_1_D'] == "") || ($row['kitchen_5_3_1_D'] === NULL)){ $output['kitchen_5_3_1_D'] = "empty"; }else{ $output['kitchen_5_3_1_D'] = $row['kitchen_5_3_1_D']; }
			if(($row['kitchen_5_3_1_E'] == "") || ($row['kitchen_5_3_1_E'] === NULL)){ $output['kitchen_5_3_1_E'] = "empty"; }else{ $output['kitchen_5_3_1_E'] = $row['kitchen_5_3_1_E']; }
			if(($row['kitchen_5_3_1_F'] == "") || ($row['kitchen_5_3_1_F'] === NULL)){ $output['kitchen_5_3_1_F'] = "empty"; }else{ $output['kitchen_5_3_1_F'] = $row['kitchen_5_3_1_F']; }
			if(($row['kitchen_5_3_1_G'] == "") || ($row['kitchen_5_3_1_G'] === NULL)){ $output['kitchen_5_3_1_G'] = "empty"; }else{ $output['kitchen_5_3_1_G'] = $row['kitchen_5_3_1_G']; }
			 
			$output['function_rooms_6_1_1_text'] = $row['function_rooms_6_1_1_text']; 
			if(($row['function_rooms_6_1_1_A'] == "") || ($row['function_rooms_6_1_1_A'] === NULL)){ $output['function_rooms_6_1_1_A'] = "empty"; }else{ $output['function_rooms_6_1_1_A'] = $row['function_rooms_6_1_1_A']; }
			 
			$output['function_rooms_6_2_1_text'] = $row['function_rooms_6_2_1_text']; 
			if(($row['function_rooms_6_2_1_A'] == "") || ($row['function_rooms_6_2_1_A'] === NULL)){ $output['function_rooms_6_2_1_A'] = "empty"; }else{ $output['function_rooms_6_2_1_A'] = $row['function_rooms_6_2_1_A']; }
			if(($row['function_rooms_6_2_1_B_a'] == "") || ($row['function_rooms_6_2_1_B_a'] === NULL)){ $output['function_rooms_6_2_1_B_a'] = "empty"; }else{ $output['function_rooms_6_2_1_B_a'] = $row['function_rooms_6_2_1_B_a']; }
			if(($row['function_rooms_6_2_1_B_b'] == "") || ($row['function_rooms_6_2_1_B_b'] === NULL)){ $output['function_rooms_6_2_1_B_b'] = "empty"; }else{ $output['function_rooms_6_2_1_B_b'] = $row['function_rooms_6_2_1_B_b']; }
			if(($row['function_rooms_6_2_1_B_c'] == "") || ($row['function_rooms_6_2_1_B_c'] === NULL)){ $output['function_rooms_6_2_1_B_c'] = "empty"; }else{ $output['function_rooms_6_2_1_B_c'] = $row['function_rooms_6_2_1_B_c']; }
			if(($row['function_rooms_6_2_1_B_d'] == "") || ($row['function_rooms_6_2_1_B_d'] === NULL)){ $output['function_rooms_6_2_1_B_d'] = "empty"; }else{ $output['function_rooms_6_2_1_B_d'] = $row['function_rooms_6_2_1_B_d']; }
			if(($row['function_rooms_6_2_1_B_e'] == "") || ($row['function_rooms_6_2_1_B_e'] === NULL)){ $output['function_rooms_6_2_1_B_e'] = "empty"; }else{ $output['function_rooms_6_2_1_B_e'] = $row['function_rooms_6_2_1_B_e']; }
			if(($row['function_rooms_6_2_1_B_f'] == "") || ($row['function_rooms_6_2_1_B_f'] === NULL)){ $output['function_rooms_6_2_1_B_f'] = "empty"; }else{ $output['function_rooms_6_2_1_B_f'] = $row['function_rooms_6_2_1_B_f']; }
			if(($row['function_rooms_6_2_1_C_a'] == "") || ($row['function_rooms_6_2_1_C_a'] === NULL)){ $output['function_rooms_6_2_1_C_a'] = "empty"; }else{ $output['function_rooms_6_2_1_C_a'] = $row['function_rooms_6_2_1_C_a']; }
			if(($row['function_rooms_6_2_1_C_b'] == "") || ($row['function_rooms_6_2_1_C_b'] === NULL)){ $output['function_rooms_6_2_1_C_b'] = "empty"; }else{ $output['function_rooms_6_2_1_C_b'] = $row['function_rooms_6_2_1_C_b']; }
			if(($row['function_rooms_6_2_1_D'] == "") || ($row['function_rooms_6_2_1_D'] === NULL)){ $output['function_rooms_6_2_1_D'] = "empty"; }else{ $output['function_rooms_6_2_1_D'] = $row['function_rooms_6_2_1_D']; }
			 
			$output['functions_room_6_3_1_text'] = $row['functions_room_6_3_1_text']; 
			if(($row['functions_room_6_3_1_A'] == "") || ($row['functions_room_6_3_1_A'] === NULL)){ $output['functions_room_6_3_1_A'] = "empty"; }else{ $output['functions_room_6_3_1_A'] = $row['functions_room_6_3_1_A']; }
			if(($row['functions_room_6_3_1_A_c'] == "") || ($row['functions_room_6_3_1_A_c'] === NULL)){ $output['functions_room_6_3_1_A_c'] = "empty"; }else{ $output['functions_room_6_3_1_A_c'] = $row['functions_room_6_3_1_A_c']; }
			if(($row['functions_room_6_3_1_A_d'] == "") || ($row['functions_room_6_3_1_A_d'] === NULL)){ $output['functions_room_6_3_1_A_d'] = "empty"; }else{ $output['functions_room_6_3_1_A_d'] = $row['functions_room_6_3_1_A_d']; }
			if(($row['functions_room_6_3_1_A_e'] == "") || ($row['functions_room_6_3_1_A_e'] === NULL)){ $output['functions_room_6_3_1_A_e'] = "empty"; }else{ $output['functions_room_6_3_1_A_e'] = $row['functions_room_6_3_1_A_e']; }
			if(($row['functions_room_6_3_1_A_f'] == "") || ($row['functions_room_6_3_1_A_f'] === NULL)){ $output['functions_room_6_3_1_A_f'] = "empty"; }else{ $output['functions_room_6_3_1_A_f'] = $row['functions_room_6_3_1_A_f']; }
			if(($row['functions_room_6_3_1_A_g'] == "") || ($row['functions_room_6_3_1_A_g'] === NULL)){ $output['functions_room_6_3_1_A_g'] = "empty"; }else{ $output['functions_room_6_3_1_A_g'] = $row['functions_room_6_3_1_A_g']; }
			if(($row['functions_room_6_3_1_A_h'] == "") || ($row['functions_room_6_3_1_A_h'] === NULL)){ $output['functions_room_6_3_1_A_h'] = "empty"; }else{ $output['functions_room_6_3_1_A_h'] = $row['functions_room_6_3_1_A_h']; }
			if(($row['functions_room_6_3_1_A_i'] == "") || ($row['functions_room_6_3_1_A_i'] === NULL)){ $output['functions_room_6_3_1_A_i'] = "empty"; }else{ $output['functions_room_6_3_1_A_i'] = $row['functions_room_6_3_1_A_i']; }
			if(($row['functions_room_6_3_1_A_j'] == "") || ($row['functions_room_6_3_1_A_j'] === NULL)){ $output['functions_room_6_3_1_A_j'] = "empty"; }else{ $output['functions_room_6_3_1_A_j'] = $row['functions_room_6_3_1_A_j']; }
			if(($row['functions_room_6_3_1_A_k'] == "") || ($row['functions_room_6_3_1_A_k'] === NULL)){ $output['functions_room_6_3_1_A_k'] = "empty"; }else{ $output['functions_room_6_3_1_A_k'] = $row['functions_room_6_3_1_A_k']; }
			if(($row['functions_room_6_3_1_A_l'] == "") || ($row['functions_room_6_3_1_A_l'] === NULL)){ $output['functions_room_6_3_1_A_l'] = "empty"; }else{ $output['functions_room_6_3_1_A_l'] = $row['functions_room_6_3_1_A_l']; }
			if(($row['functions_room_6_3_1_A_m'] == "") || ($row['functions_room_6_3_1_A_m'] === NULL)){ $output['functions_room_6_3_1_A_m'] = "empty"; }else{ $output['functions_room_6_3_1_A_m'] = $row['functions_room_6_3_1_A_m']; }
			if(($row['functions_room_6_3_1_A_n'] == "") || ($row['functions_room_6_3_1_A_n'] === NULL)){ $output['functions_room_6_3_1_A_n'] = "empty"; }else{ $output['functions_room_6_3_1_A_n'] = $row['functions_room_6_3_1_A_n']; }
			if(($row['functions_room_6_3_1_A_o'] == "") || ($row['functions_room_6_3_1_A_o'] === NULL)){ $output['functions_room_6_3_1_A_o'] = "empty"; }else{ $output['functions_room_6_3_1_A_o'] = $row['functions_room_6_3_1_A_o']; }
			if(($row['functions_room_6_3_1_A_p'] == "") || ($row['functions_room_6_3_1_A_p'] === NULL)){ $output['functions_room_6_3_1_A_p'] = "empty"; }else{ $output['functions_room_6_3_1_A_p'] = $row['functions_room_6_3_1_A_p']; }
			if(($row['functions_room_6_3_1_A_q'] == "") || ($row['functions_room_6_3_1_A_q'] === NULL)){ $output['functions_room_6_3_1_A_q'] = "empty"; }else{ $output['functions_room_6_3_1_A_q'] = $row['functions_room_6_3_1_A_q']; }
			if(($row['functions_room_6_3_1_B'] == "") || ($row['functions_room_6_3_1_B'] === NULL)){ $output['functions_room_6_3_1_B'] = "empty"; }else{ $output['functions_room_6_3_1_B'] = $row['functions_room_6_3_1_B']; }
			 
			$output['function_rooms_6_4_1_text'] = $row['function_rooms_6_4_1_text']; 
			if(($row['function_rooms_6_4_1_A'] == "") || ($row['function_rooms_6_4_1_A'] === NULL)){ $output['function_rooms_6_4_1_A'] = "empty"; }else{ $output['function_rooms_6_4_1_A'] = $row['function_rooms_6_4_1_A']; }
			if(($row['function_rooms_6_4_1_B_a'] == "") || ($row['function_rooms_6_4_1_B_a'] === NULL)){ $output['function_rooms_6_4_1_B_a'] = "empty"; }else{ $output['function_rooms_6_4_1_B_a'] = $row['function_rooms_6_4_1_B_a']; }
			if(($row['function_rooms_6_4_1_B_b'] == "") || ($row['function_rooms_6_4_1_B_b'] === NULL)){ $output['function_rooms_6_4_1_B_b'] = "empty"; }else{ $output['function_rooms_6_4_1_B_b'] = $row['function_rooms_6_4_1_B_b']; }
			if(($row['function_rooms_6_4_1_B_c'] == "") || ($row['function_rooms_6_4_1_B_c'] === NULL)){ $output['function_rooms_6_4_1_B_c'] = "empty"; }else{ $output['function_rooms_6_4_1_B_c'] = $row['function_rooms_6_4_1_B_c']; }
			if(($row['function_rooms_6_4_1_B_d'] == "") || ($row['function_rooms_6_4_1_B_d'] === NULL)){ $output['function_rooms_6_4_1_B_d'] = "empty"; }else{ $output['function_rooms_6_4_1_B_d'] = $row['function_rooms_6_4_1_B_d']; }
			if(($row['function_rooms_6_4_1_C'] == "") || ($row['function_rooms_6_4_1_C'] === NULL)){ $output['function_rooms_6_4_1_C'] = "empty"; }else{ $output['function_rooms_6_4_1_C'] = $row['function_rooms_6_4_1_C']; }
			if(($row['function_rooms_6_4_1_D'] == "") || ($row['function_rooms_6_4_1_D'] === NULL)){ $output['function_rooms_6_4_1_D'] = "empty"; }else{ $output['function_rooms_6_4_1_D'] = $row['function_rooms_6_4_1_D']; }
			 
			$output['function_rooms_6_5_1_text'] = $row['function_rooms_6_5_1_text']; 
			if(($row['function_rooms_6_5_1_A'] == "") || ($row['function_rooms_6_5_1_A'] === NULL)){ $output['function_rooms_6_5_1_A'] = "empty"; }else{ $output['function_rooms_6_5_1_A'] = $row['function_rooms_6_5_1_A']; }
			if(($row['function_rooms_6_5_1_B'] == "") || ($row['function_rooms_6_5_1_B'] === NULL)){ $output['function_rooms_6_5_1_B'] = "empty"; }else{ $output['function_rooms_6_5_1_B'] = $row['function_rooms_6_5_1_B']; }
			 $output['function_rooms_6_6_1_text'] = $row['function_rooms_6_6_1_text']; 
			if(($row['function_rooms_6_6_1_A'] == "") || ($row['function_rooms_6_6_1_A'] === NULL)){ $output['function_rooms_6_6_1_A'] = "empty"; }else{ $output['function_rooms_6_6_1_A'] = $row['function_rooms_6_6_1_A']; }
			if(($row['function_rooms_6_6_1_B'] == "") || ($row['function_rooms_6_6_1_B'] === NULL)){ $output['function_rooms_6_6_1_B'] = "empty"; }else{ $output['function_rooms_6_6_1_B'] = $row['function_rooms_6_6_1_B']; }
			if(($row['function_rooms_6_6_1_C'] == "") || ($row['function_rooms_6_6_1_C'] === NULL)){ $output['function_rooms_6_6_1_C'] = "empty"; }else{ $output['function_rooms_6_6_1_C'] = $row['function_rooms_6_6_1_C']; }
			if(($row['function_rooms_6_6_1_D'] == "") || ($row['function_rooms_6_6_1_D'] === NULL)){ $output['function_rooms_6_6_1_D'] = "empty"; }else{ $output['function_rooms_6_6_1_D'] = $row['function_rooms_6_6_1_D']; }
			if(($row['function_rooms_6_6_1_E'] == "") || ($row['function_rooms_6_6_1_E'] === NULL)){ $output['function_rooms_6_6_1_E'] = "empty"; }else{ $output['function_rooms_6_6_1_E'] = $row['function_rooms_6_6_1_E']; }
			 
			$output['function_rooms_6_7_1_text'] = $row['function_rooms_6_7_1_text']; 
			if(($row['function_rooms_6_7_1_A'] == "") || ($row['function_rooms_6_7_1_A'] === NULL)){ $output['function_rooms_6_7_1_A'] = "empty"; }else{ $output['function_rooms_6_7_1_A'] = $row['function_rooms_6_7_1_A']; }
			if(($row['function_rooms_6_7_1_B'] == "") || ($row['function_rooms_6_7_1_B'] === NULL)){ $output['function_rooms_6_7_1_B'] = "empty"; }else{ $output['function_rooms_6_7_1_B'] = $row['function_rooms_6_7_1_B']; }
			if(($row['function_rooms_6_7_1_C'] == "") || ($row['function_rooms_6_7_1_C'] === NULL)){ $output['function_rooms_6_7_1_C'] = "empty"; }else{ $output['function_rooms_6_7_1_C'] = $row['function_rooms_6_7_1_C']; }
			if(($row['function_rooms_6_7_1_D'] == "") || ($row['function_rooms_6_7_1_D'] === NULL)){ $output['function_rooms_6_7_1_D'] = "empty"; }else{ $output['function_rooms_6_7_1_D'] = $row['function_rooms_6_7_1_D']; }
			if(($row['function_rooms_6_7_1_E'] == "") || ($row['function_rooms_6_7_1_E'] === NULL)){ $output['function_rooms_6_7_1_E'] = "empty"; }else{ $output['function_rooms_6_7_1_E'] = $row['function_rooms_6_7_1_E']; }
			 
			$output['function_rooms_6_8_1_text'] = $row['function_rooms_6_8_1_text']; 
			if(($row['function_rooms_6_8_1_A'] == "") || ($row['function_rooms_6_8_1_A'] === NULL)){ $output['function_rooms_6_8_1_A'] = "empty"; }else{ $output['function_rooms_6_8_1_A'] = $row['function_rooms_6_8_1_A']; }
			if(($row['function_rooms_6_8_1_B_a'] == "") || ($row['function_rooms_6_8_1_B_a'] === NULL)){ $output['function_rooms_6_8_1_B_a'] = "empty"; }else{ $output['function_rooms_6_8_1_B_a'] = $row['function_rooms_6_8_1_B_a']; }
			if(($row['function_rooms_6_8_1_B_b'] == "") || ($row['function_rooms_6_8_1_B_b'] === NULL)){ $output['function_rooms_6_8_1_B_b'] = "empty"; }else{ $output['function_rooms_6_8_1_B_b'] = $row['function_rooms_6_8_1_B_b']; }
			if(($row['function_rooms_6_8_1_B_c'] == "") || ($row['function_rooms_6_8_1_B_c'] === NULL)){ $output['function_rooms_6_8_1_B_c'] = "empty"; }else{ $output['function_rooms_6_8_1_B_c'] = $row['function_rooms_6_8_1_B_c']; }
			if(($row['function_rooms_6_8_1_C'] == "") || ($row['function_rooms_6_8_1_C'] === NULL)){ $output['function_rooms_6_8_1_C'] = "empty"; }else{ $output['function_rooms_6_8_1_C'] = $row['function_rooms_6_8_1_C']; }
			
			$output['guest_bathrooms_7_1_1_text'] = $row['guest_bathrooms_7_1_1_text']; 
			if(($row['guest_bathrooms_7_1_1_A'] == "") || ($row['guest_bathrooms_7_1_1_A'] === NULL)){ $output['guest_bathrooms_7_1_1_A'] = "empty"; }else{ $output['guest_bathrooms_7_1_1_A'] = $row['guest_bathrooms_7_1_1_A']; }
			if(($row['guest_bathrooms_7_1_1_B'] == "") || ($row['guest_bathrooms_7_1_1_B'] === NULL)){ $output['guest_bathrooms_7_1_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_1_1_B'] = $row['guest_bathrooms_7_1_1_B']; }
			if(($row['guest_bathrooms_7_1_1_C'] == "") || ($row['guest_bathrooms_7_1_1_C'] === NULL)){ $output['guest_bathrooms_7_1_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_1_1_C'] = $row['guest_bathrooms_7_1_1_C']; }
			
			$output['guest_bathrooms_7_2_1_text'] = $row['guest_bathrooms_7_2_1_text']; 
			if(($row['guest_bathrooms_7_2_1_A'] == "") || ($row['guest_bathrooms_7_2_1_A'] === NULL)){ $output['guest_bathrooms_7_2_1_A'] = "empty"; }else{ $output['guest_bathrooms_7_2_1_A'] = $row['guest_bathrooms_7_2_1_A']; }
			if(($row['guest_bathrooms_7_2_1_B'] == "") || ($row['guest_bathrooms_7_2_1_B'] === NULL)){ $output['guest_bathrooms_7_2_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_2_1_B'] = $row['guest_bathrooms_7_2_1_B']; }
			if(($row['guest_bathrooms_7_2_1_C'] == "") || ($row['guest_bathrooms_7_2_1_C'] === NULL)){ $output['guest_bathrooms_7_2_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_2_1_C'] = $row['guest_bathrooms_7_2_1_C']; }
			if(($row['guest_bathrooms_7_2_1_D'] == "") || ($row['guest_bathrooms_7_2_1_D'] === NULL)){ $output['guest_bathrooms_7_2_1_D'] = "empty"; }else{ $output['guest_bathrooms_7_2_1_D'] = $row['guest_bathrooms_7_2_1_D']; }
			
			$output['guest_bathrooms_7_3_1_text'] = $row['guest_bathrooms_7_3_1_text']; 
			if(($row['guest_bathrooms_7_3_1_A_a'] == "") || ($row['guest_bathrooms_7_3_1_A_a'] === NULL)){ $output['guest_bathrooms_7_3_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_a'] = $row['guest_bathrooms_7_3_1_A_a']; }
			if(($row['guest_bathrooms_7_3_1_A_b'] == "") || ($row['guest_bathrooms_7_3_1_A_b'] === NULL)){ $output['guest_bathrooms_7_3_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_b'] = $row['guest_bathrooms_7_3_1_A_b']; }
			if(($row['guest_bathrooms_7_3_1_A_c'] == "") || ($row['guest_bathrooms_7_3_1_A_c'] === NULL)){ $output['guest_bathrooms_7_3_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_c'] = $row['guest_bathrooms_7_3_1_A_c']; }
			if(($row['guest_bathrooms_7_3_1_A_d'] == "") || ($row['guest_bathrooms_7_3_1_A_d'] === NULL)){ $output['guest_bathrooms_7_3_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_d'] = $row['guest_bathrooms_7_3_1_A_d']; }
			if(($row['guest_bathrooms_7_3_1_A_e'] == "") || ($row['guest_bathrooms_7_3_1_A_e'] === NULL)){ $output['guest_bathrooms_7_3_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_e'] = $row['guest_bathrooms_7_3_1_A_e']; }
			if(($row['guest_bathrooms_7_3_1_A_f'] == "") || ($row['guest_bathrooms_7_3_1_A_f'] === NULL)){ $output['guest_bathrooms_7_3_1_A_f'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_f'] = $row['guest_bathrooms_7_3_1_A_f']; }
			if(($row['guest_bathrooms_7_3_1_A_g'] == "") || ($row['guest_bathrooms_7_3_1_A_g'] === NULL)){ $output['guest_bathrooms_7_3_1_A_g'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_g'] = $row['guest_bathrooms_7_3_1_A_g']; }
			if(($row['guest_bathrooms_7_3_1_A_h'] == "") || ($row['guest_bathrooms_7_3_1_A_h'] === NULL)){ $output['guest_bathrooms_7_3_1_A_h'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_h'] = $row['guest_bathrooms_7_3_1_A_h']; }
			if(($row['guest_bathrooms_7_3_1_A_i'] == "") || ($row['guest_bathrooms_7_3_1_A_i'] === NULL)){ $output['guest_bathrooms_7_3_1_A_i'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_i'] = $row['guest_bathrooms_7_3_1_A_i']; }
			if(($row['guest_bathrooms_7_3_1_A_j'] == "") || ($row['guest_bathrooms_7_3_1_A_j'] === NULL)){ $output['guest_bathrooms_7_3_1_A_j'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_j'] = $row['guest_bathrooms_7_3_1_A_j']; }
			if(($row['guest_bathrooms_7_3_1_A_k'] == "") || ($row['guest_bathrooms_7_3_1_A_k'] === NULL)){ $output['guest_bathrooms_7_3_1_A_k'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_k'] = $row['guest_bathrooms_7_3_1_A_k']; }
			if(($row['guest_bathrooms_7_3_1_A_l'] == "") || ($row['guest_bathrooms_7_3_1_A_l'] === NULL)){ $output['guest_bathrooms_7_3_1_A_l'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_l'] = $row['guest_bathrooms_7_3_1_A_l']; }
			if(($row['guest_bathrooms_7_3_1_A_m'] == "") || ($row['guest_bathrooms_7_3_1_A_m'] === NULL)){ $output['guest_bathrooms_7_3_1_A_m'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_m'] = $row['guest_bathrooms_7_3_1_A_m']; }
			if(($row['guest_bathrooms_7_3_1_A_n'] == "") || ($row['guest_bathrooms_7_3_1_A_n'] === NULL)){ $output['guest_bathrooms_7_3_1_A_n'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_n'] = $row['guest_bathrooms_7_3_1_A_n']; }
			if(($row['guest_bathrooms_7_3_1_A_o'] == "") || ($row['guest_bathrooms_7_3_1_A_o'] === NULL)){ $output['guest_bathrooms_7_3_1_A_o'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_o'] = $row['guest_bathrooms_7_3_1_A_o']; }
			if(($row['guest_bathrooms_7_3_1_A_p'] == "") || ($row['guest_bathrooms_7_3_1_A_p'] === NULL)){ $output['guest_bathrooms_7_3_1_A_p'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_p'] = $row['guest_bathrooms_7_3_1_A_p']; }
			if(($row['guest_bathrooms_7_3_1_A_q'] == "") || ($row['guest_bathrooms_7_3_1_A_q'] === NULL)){ $output['guest_bathrooms_7_3_1_A_q'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_q'] = $row['guest_bathrooms_7_3_1_A_q']; }
			if(($row['guest_bathrooms_7_3_1_A_r'] == "") || ($row['guest_bathrooms_7_3_1_A_r'] === NULL)){ $output['guest_bathrooms_7_3_1_A_r'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_r'] = $row['guest_bathrooms_7_3_1_A_r']; }
			if(($row['guest_bathrooms_7_3_1_A_s'] == "") || ($row['guest_bathrooms_7_3_1_A_s'] === NULL)){ $output['guest_bathrooms_7_3_1_A_s'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_s'] = $row['guest_bathrooms_7_3_1_A_s']; }
			if(($row['guest_bathrooms_7_3_1_A_t'] == "") || ($row['guest_bathrooms_7_3_1_A_t'] === NULL)){ $output['guest_bathrooms_7_3_1_A_t'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_t'] = $row['guest_bathrooms_7_3_1_A_t']; }
			if(($row['guest_bathrooms_7_3_1_A_u'] == "") || ($row['guest_bathrooms_7_3_1_A_u'] === NULL)){ $output['guest_bathrooms_7_3_1_A_u'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_u'] = $row['guest_bathrooms_7_3_1_A_u']; }
			if(($row['guest_bathrooms_7_3_1_A_v'] == "") || ($row['guest_bathrooms_7_3_1_A_v'] === NULL)){ $output['guest_bathrooms_7_3_1_A_v'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_A_v'] = $row['guest_bathrooms_7_3_1_A_v']; }
			if(($row['guest_bathrooms_7_3_1_B'] == "") || ($row['guest_bathrooms_7_3_1_B'] === NULL)){ $output['guest_bathrooms_7_3_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_B'] = $row['guest_bathrooms_7_3_1_B']; }
			if(($row['guest_bathrooms_7_3_1_C'] == "") || ($row['guest_bathrooms_7_3_1_C'] === NULL)){ $output['guest_bathrooms_7_3_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_3_1_C'] = $row['guest_bathrooms_7_3_1_C']; }
			
			$output['guest_bathrooms_7_4_1_text'] = $row['guest_bathrooms_7_4_1_text']; 
			if(($row['guest_bathrooms_7_4_1_A'] == "") || ($row['guest_bathrooms_7_4_1_A'] === NULL)){ $output['guest_bathrooms_7_4_1_A'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_A'] = $row['guest_bathrooms_7_4_1_A']; }
			if(($row['guest_bathrooms_7_4_1_B'] == "") || ($row['guest_bathrooms_7_4_1_B'] === NULL)){ $output['guest_bathrooms_7_4_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_B'] = $row['guest_bathrooms_7_4_1_B']; }
			if(($row['guest_bathrooms_7_4_1_C'] == "") || ($row['guest_bathrooms_7_4_1_C'] === NULL)){ $output['guest_bathrooms_7_4_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_C'] = $row['guest_bathrooms_7_4_1_C']; }
			if(($row['guest_bathrooms_7_4_1_D'] == "") || ($row['guest_bathrooms_7_4_1_D'] === NULL)){ $output['guest_bathrooms_7_4_1_D'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_D'] = $row['guest_bathrooms_7_4_1_D']; }
			if(($row['guest_bathrooms_7_4_1_E'] == "") || ($row['guest_bathrooms_7_4_1_E'] === NULL)){ $output['guest_bathrooms_7_4_1_E'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_E'] = $row['guest_bathrooms_7_4_1_E']; }
			if(($row['guest_bathrooms_7_4_1_F'] == "") || ($row['guest_bathrooms_7_4_1_F'] === NULL)){ $output['guest_bathrooms_7_4_1_F'] = "empty"; }else{ $output['guest_bathrooms_7_4_1_F'] = $row['guest_bathrooms_7_4_1_F']; }
			
			$output['guest_bathrooms_7_5_1_text'] = $row['guest_bathrooms_7_5_1_text']; 
			if(($row['guest_bathrooms_7_5_1_A_a'] == "") || ($row['guest_bathrooms_7_5_1_A_a'] === NULL)){ $output['guest_bathrooms_7_5_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_A_a'] = $row['guest_bathrooms_7_5_1_A_a']; }
			if(($row['guest_bathrooms_7_5_1_A_b'] == "") || ($row['guest_bathrooms_7_5_1_A_b'] === NULL)){ $output['guest_bathrooms_7_5_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_A_b'] = $row['guest_bathrooms_7_5_1_A_b']; }
			if(($row['guest_bathrooms_7_5_1_A_c'] == "") || ($row['guest_bathrooms_7_5_1_A_c'] === NULL)){ $output['guest_bathrooms_7_5_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_A_c'] = $row['guest_bathrooms_7_5_1_A_c']; }
			if(($row['guest_bathrooms_7_5_1_A_d'] == "") || ($row['guest_bathrooms_7_5_1_A_d'] === NULL)){ $output['guest_bathrooms_7_5_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_A_d'] = $row['guest_bathrooms_7_5_1_A_d']; }
			if(($row['guest_bathrooms_7_5_1_A_e'] == "") || ($row['guest_bathrooms_7_5_1_A_e'] === NULL)){ $output['guest_bathrooms_7_5_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_A_e'] = $row['guest_bathrooms_7_5_1_A_e']; }
			if(($row['guest_bathrooms_7_5_1_B'] == "") || ($row['guest_bathrooms_7_5_1_B'] === NULL)){ $output['guest_bathrooms_7_5_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_B'] = $row['guest_bathrooms_7_5_1_B']; }
			if(($row['guest_bathrooms_7_5_1_C'] == "") || ($row['guest_bathrooms_7_5_1_C'] === NULL)){ $output['guest_bathrooms_7_5_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_C'] = $row['guest_bathrooms_7_5_1_C']; }
			if(($row['guest_bathrooms_7_5_1_D'] == "") || ($row['guest_bathrooms_7_5_1_D'] === NULL)){ $output['guest_bathrooms_7_5_1_D'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_D'] = $row['guest_bathrooms_7_5_1_D']; }
			if(($row['guest_bathrooms_7_5_1_E'] == "") || ($row['guest_bathrooms_7_5_1_E'] === NULL)){ $output['guest_bathrooms_7_5_1_E'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_E'] = $row['guest_bathrooms_7_5_1_E']; }
			if(($row['guest_bathrooms_7_5_1_F'] == "") || ($row['guest_bathrooms_7_5_1_F'] === NULL)){ $output['guest_bathrooms_7_5_1_F'] = "empty"; }else{ $output['guest_bathrooms_7_5_1_F'] = $row['guest_bathrooms_7_5_1_F']; }
			
			$output['guest_bathrooms_7_6_1_text'] = $row['guest_bathrooms_7_6_1_text']; 
			if(($row['guest_bathrooms_7_6_1_A_a'] == "") || ($row['guest_bathrooms_7_6_1_A_a'] === NULL)){ $output['guest_bathrooms_7_6_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_a'] = $row['guest_bathrooms_7_6_1_A_a']; }
			if(($row['guest_bathrooms_7_6_1_A_b'] == "") || ($row['guest_bathrooms_7_6_1_A_b'] === NULL)){ $output['guest_bathrooms_7_6_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_b'] = $row['guest_bathrooms_7_6_1_A_b']; }
			if(($row['guest_bathrooms_7_6_1_A_c'] == "") || ($row['guest_bathrooms_7_6_1_A_c'] === NULL)){ $output['guest_bathrooms_7_6_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_c'] = $row['guest_bathrooms_7_6_1_A_c']; }
			if(($row['guest_bathrooms_7_6_1_A_d'] == "") || ($row['guest_bathrooms_7_6_1_A_d'] === NULL)){ $output['guest_bathrooms_7_6_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_d'] = $row['guest_bathrooms_7_6_1_A_d']; }
			if(($row['guest_bathrooms_7_6_1_A_e'] == "") || ($row['guest_bathrooms_7_6_1_A_e'] === NULL)){ $output['guest_bathrooms_7_6_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_e'] = $row['guest_bathrooms_7_6_1_A_e']; }
			if(($row['guest_bathrooms_7_6_1_A_f'] == "") || ($row['guest_bathrooms_7_6_1_A_f'] === NULL)){ $output['guest_bathrooms_7_6_1_A_f'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_A_f'] = $row['guest_bathrooms_7_6_1_A_f']; }
			if(($row['guest_bathrooms_7_6_1_B'] == "") || ($row['guest_bathrooms_7_6_1_B'] === NULL)){ $output['guest_bathrooms_7_6_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_B'] = $row['guest_bathrooms_7_6_1_B']; }
			if(($row['guest_bathrooms_7_6_1_C'] == "") || ($row['guest_bathrooms_7_6_1_C'] === NULL)){ $output['guest_bathrooms_7_6_1_C'] = "empty"; }else{ $output['guest_bathrooms_7_6_1_C'] = $row['guest_bathrooms_7_6_1_C']; }
			
			$output['guest_bathrooms_7_7_1_text'] = $row['guest_bathrooms_7_7_1_text']; 
			if(($row['guest_bathrooms_7_7_1_A'] == "") || ($row['guest_bathrooms_7_7_1_A'] === NULL)){ $output['guest_bathrooms_7_7_1_A'] = "empty"; }else{ $output['guest_bathrooms_7_7_1_A'] = $row['guest_bathrooms_7_7_1_A']; }
			if(($row['guest_bathrooms_7_7_1_B'] == "") || ($row['guest_bathrooms_7_7_1_B'] === NULL)){ $output['guest_bathrooms_7_7_1_B'] = "empty"; }else{ $output['guest_bathrooms_7_7_1_B'] = $row['guest_bathrooms_7_7_1_B']; }
			
			$output['hygiene_and_sanitation_8_1_1_text'] = $row['hygiene_and_sanitation_8_1_1_text']; 
			if(($row['hygiene_and_sanitation_8_1_1_A'] == "") || ($row['hygiene_and_sanitation_8_1_1_A'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_A'] = $row['hygiene_and_sanitation_8_1_1_A']; }
			if(($row['hygiene_and_sanitation_8_1_1_B'] == "") || ($row['hygiene_and_sanitation_8_1_1_B'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_B'] = $row['hygiene_and_sanitation_8_1_1_B']; }
			if(($row['hygiene_and_sanitation_8_1_1_C'] == "") || ($row['hygiene_and_sanitation_8_1_1_C'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_C'] = $row['hygiene_and_sanitation_8_1_1_C']; }
			if(($row['hygiene_and_sanitation_8_1_1_D'] == "") || ($row['hygiene_and_sanitation_8_1_1_D'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_D'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_D'] = $row['hygiene_and_sanitation_8_1_1_D']; }
			if(($row['hygiene_and_sanitation_8_1_1_E'] == "") || ($row['hygiene_and_sanitation_8_1_1_E'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_E'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_E'] = $row['hygiene_and_sanitation_8_1_1_E']; }
			if(($row['hygiene_and_sanitation_8_1_1_F'] == "") || ($row['hygiene_and_sanitation_8_1_1_F'] === NULL)){ $output['hygiene_and_sanitation_8_1_1_F'] = "empty"; }else{ $output['hygiene_and_sanitation_8_1_1_F'] = $row['hygiene_and_sanitation_8_1_1_F']; }
			
			$output['hygiene_and_sanitation_8_2_1_text'] = $row['hygiene_and_sanitation_8_2_1_text']; 
			if(($row['hygiene_and_sanitation_8_2_1_A'] == "") || ($row['hygiene_and_sanitation_8_2_1_A'] === NULL)){ $output['hygiene_and_sanitation_8_2_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_8_2_1_A'] = $row['hygiene_and_sanitation_8_2_1_A']; }
			if(($row['hygiene_and_sanitation_8_2_1_B'] == "") || ($row['hygiene_and_sanitation_8_2_1_B'] === NULL)){ $output['hygiene_and_sanitation_8_2_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_8_2_1_B'] = $row['hygiene_and_sanitation_8_2_1_B']; }
			if(($row['hygiene_and_sanitation_8_2_1_C'] == "") || ($row['hygiene_and_sanitation_8_2_1_C'] === NULL)){ $output['hygiene_and_sanitation_8_2_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_8_2_1_C'] = $row['hygiene_and_sanitation_8_2_1_C']; }
			 
			$output['hygiene_and_sanitation_8_3_1_text'] = $row['hygiene_and_sanitation_8_3_1_text']; 
			if(($row['hygiene_and_sanitation_8_3_1_A'] == "") || ($row['hygiene_and_sanitation_8_3_1_A'] === NULL)){ $output['hygiene_and_sanitation_8_3_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_8_3_1_A'] = $row['hygiene_and_sanitation_8_3_1_A']; }
			if(($row['hygiene_and_sanitation_8_3_1_B'] == "") || ($row['hygiene_and_sanitation_8_3_1_B'] === NULL)){ $output['hygiene_and_sanitation_8_3_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_8_3_1_B'] = $row['hygiene_and_sanitation_8_3_1_B']; }
			
			$output['hygiene_and_sanitation_8_4_1_text'] = $row['hygiene_and_sanitation_8_4_1_text']; 
			if(($row['hygiene_and_sanitation_8_4_1_A'] == "") || ($row['hygiene_and_sanitation_8_4_1_A'] === NULL)){ $output['hygiene_and_sanitation_8_4_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_8_4_1_A'] = $row['hygiene_and_sanitation_8_4_1_A']; }
			if(($row['hygiene_and_sanitation_8_4_1_B_a'] == "") || ($row['hygiene_and_sanitation_8_4_1_B_a'] === NULL)){ $output['hygiene_and_sanitation_8_4_1_B_a'] = "empty"; }else{ $output['hygiene_and_sanitation_8_4_1_B_a'] = $row['hygiene_and_sanitation_8_4_1_B_a']; }
			if(($row['hygiene_and_sanitation_8_4_1_B_b'] == "") || ($row['hygiene_and_sanitation_8_4_1_B_b'] === NULL)){ $output['hygiene_and_sanitation_8_4_1_B_b'] = "empty"; }else{ $output['hygiene_and_sanitation_8_4_1_B_b'] = $row['hygiene_and_sanitation_8_4_1_B_b']; }
			if(($row['hygiene_and_sanitation_8_4_1_C'] == "") || ($row['hygiene_and_sanitation_8_4_1_C'] === NULL)){ $output['hygiene_and_sanitation_8_4_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_8_4_1_C'] = $row['hygiene_and_sanitation_8_4_1_C']; }
			 
			$output['hygiene_and_sanitation_8_5_1_text'] = $row['hygiene_and_sanitation_8_5_1_text']; 
			if(($row['hygiene_and_sanitation_8_5_1_A'] == "") || ($row['hygiene_and_sanitation_8_5_1_A'] === NULL)){ $output['hygiene_and_sanitation_8_5_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_8_5_1_A'] = $row['hygiene_and_sanitation_8_5_1_A']; }
			if(($row['hygiene_and_sanitation_8_5_1_B'] == "") || ($row['hygiene_and_sanitation_8_5_1_B'] === NULL)){ $output['hygiene_and_sanitation_8_5_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_8_5_1_B'] = $row['hygiene_and_sanitation_8_5_1_B']; }
			
			$output['safety_and_security_9_1_1_text'] = $row['safety_and_security_9_1_1_text']; 
			if(($row['safety_and_security_9_1_1_A'] == "") || ($row['safety_and_security_9_1_1_A'] === NULL)){ $output['safety_and_security_9_1_1_A'] = "empty"; }else{ $output['safety_and_security_9_1_1_A'] = $row['safety_and_security_9_1_1_A']; }
			if(($row['safety_and_security_9_1_1_B'] == "") || ($row['safety_and_security_9_1_1_B'] === NULL)){ $output['safety_and_security_9_1_1_B'] = "empty"; }else{ $output['safety_and_security_9_1_1_B'] = $row['safety_and_security_9_1_1_B']; }
			if(($row['safety_and_security_9_1_1_C'] == "") || ($row['safety_and_security_9_1_1_C'] === NULL)){ $output['safety_and_security_9_1_1_C'] = "empty"; }else{ $output['safety_and_security_9_1_1_C'] = $row['safety_and_security_9_1_1_C']; }
			if(($row['safety_and_security_9_1_1_D'] == "") || ($row['safety_and_security_9_1_1_D'] === NULL)){ $output['safety_and_security_9_1_1_D'] = "empty"; }else{ $output['safety_and_security_9_1_1_D'] = $row['safety_and_security_9_1_1_D']; }
			if(($row['safety_and_security_9_1_1_E_a'] == "") || ($row['safety_and_security_9_1_1_E_a'] === NULL)){ $output['safety_and_security_9_1_1_E_a'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_a'] = $row['safety_and_security_9_1_1_E_a']; }
			if(($row['safety_and_security_9_1_1_E_b'] == "") || ($row['safety_and_security_9_1_1_E_b'] === NULL)){ $output['safety_and_security_9_1_1_E_b'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_b'] = $row['safety_and_security_9_1_1_E_b']; }
			if(($row['safety_and_security_9_1_1_E_c'] == "") || ($row['safety_and_security_9_1_1_E_c'] === NULL)){ $output['safety_and_security_9_1_1_E_c'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_c'] = $row['safety_and_security_9_1_1_E_c']; }
			if(($row['safety_and_security_9_1_1_E_d'] == "") || ($row['safety_and_security_9_1_1_E_d'] === NULL)){ $output['safety_and_security_9_1_1_E_d'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_d'] = $row['safety_and_security_9_1_1_E_d']; }
			if(($row['safety_and_security_9_1_1_E_e'] == "") || ($row['safety_and_security_9_1_1_E_e'] === NULL)){ $output['safety_and_security_9_1_1_E_e'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_e'] = $row['safety_and_security_9_1_1_E_e']; }
			if(($row['safety_and_security_9_1_1_E_f'] == "") || ($row['safety_and_security_9_1_1_E_f'] === NULL)){ $output['safety_and_security_9_1_1_E_f'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_f'] = $row['safety_and_security_9_1_1_E_f']; }
			if(($row['safety_and_security_9_1_1_E_g'] == "") || ($row['safety_and_security_9_1_1_E_g'] === NULL)){ $output['safety_and_security_9_1_1_E_g'] = "empty"; }else{ $output['safety_and_security_9_1_1_E_g'] = $row['safety_and_security_9_1_1_E_g']; }
			if(($row['safety_and_security_9_1_1_F'] == "") || ($row['safety_and_security_9_1_1_F'] === NULL)){ $output['safety_and_security_9_1_1_F'] = "empty"; }else{ $output['safety_and_security_9_1_1_F'] = $row['safety_and_security_9_1_1_F']; }
			if(($row['safety_and_security_9_1_1_G'] == "") || ($row['safety_and_security_9_1_1_G'] === NULL)){ $output['safety_and_security_9_1_1_G'] = "empty"; }else{ $output['safety_and_security_9_1_1_G'] = $row['safety_and_security_9_1_1_G']; }
			if(($row['safety_and_security_9_1_1_H'] == "") || ($row['safety_and_security_9_1_1_H'] === NULL)){ $output['safety_and_security_9_1_1_H'] = "empty"; }else{ $output['safety_and_security_9_1_1_H'] = $row['safety_and_security_9_1_1_H']; }
			if(($row['safety_and_security_9_1_1_I'] == "") || ($row['safety_and_security_9_1_1_I'] === NULL)){ $output['safety_and_security_9_1_1_I'] = "empty"; }else{ $output['safety_and_security_9_1_1_I'] = $row['safety_and_security_9_1_1_I']; }
			
			$output['safety_and_security_9_2_1_text'] = $row['safety_and_security_9_2_1_text']; 
			if(($row['safety_and_security_9_2_1_A'] == "") || ($row['safety_and_security_9_2_1_A'] === NULL)){ $output['safety_and_security_9_2_1_A'] = "empty"; }else{ $output['safety_and_security_9_2_1_A'] = $row['safety_and_security_9_2_1_A']; }
			if(($row['safety_and_security_9_2_1_B'] == "") || ($row['safety_and_security_9_2_1_B'] === NULL)){ $output['safety_and_security_9_2_1_B'] = "empty"; }else{ $output['safety_and_security_9_2_1_B'] = $row['safety_and_security_9_2_1_B']; }
			
			$output['safety_and_security_9_3_1_text'] = $row['safety_and_security_9_3_1_text']; 
			if(($row['safety_and_security_9_3_1_A'] == "") || ($row['safety_and_security_9_3_1_A'] === NULL)){ $output['safety_and_security_9_3_1_A'] = "empty"; }else{ $output['safety_and_security_9_3_1_A'] = $row['safety_and_security_9_3_1_A']; }
			if(($row['safety_and_security_9_3_1_B'] == "") || ($row['safety_and_security_9_3_1_B'] === NULL)){ $output['safety_and_security_9_3_1_B'] = "empty"; }else{ $output['safety_and_security_9_3_1_B'] = $row['safety_and_security_9_3_1_B']; }
			if(($row['safety_and_security_9_3_1_C'] == "") || ($row['safety_and_security_9_3_1_C'] === NULL)){ $output['safety_and_security_9_3_1_C'] = "empty"; }else{ $output['safety_and_security_9_3_1_C'] = $row['safety_and_security_9_3_1_C']; }
			 
			$output['safety_and_security_9_4_1_text'] = $row['safety_and_security_9_4_1_text']; 
			if(($row['safety_and_security_9_4_1_A'] == "") || ($row['safety_and_security_9_4_1_A'] === NULL)){ $output['safety_and_security_9_4_1_A'] = "empty"; }else{ $output['safety_and_security_9_4_1_A'] = $row['safety_and_security_9_4_1_A']; }
			if(($row['safety_and_security_9_4_1_B'] == "") || ($row['safety_and_security_9_4_1_B'] === NULL)){ $output['safety_and_security_9_4_1_B'] = "empty"; }else{ $output['safety_and_security_9_4_1_B'] = $row['safety_and_security_9_4_1_B']; }
			if(($row['safety_and_security_9_4_1_C'] == "") || ($row['safety_and_security_9_4_1_C'] === NULL)){ $output['safety_and_security_9_4_1_C'] = "empty"; }else{ $output['safety_and_security_9_4_1_C'] = $row['safety_and_security_9_4_1_C']; }
			if(($row['safety_and_security_9_4_1_D'] == "") || ($row['safety_and_security_9_4_1_D'] === NULL)){ $output['safety_and_security_9_4_1_D'] = "empty"; }else{ $output['safety_and_security_9_4_1_D'] = $row['safety_and_security_9_4_1_D']; }
			if(($row['safety_and_security_9_4_1_E'] == "") || ($row['safety_and_security_9_4_1_E'] === NULL)){ $output['safety_and_security_9_4_1_E'] = "empty"; }else{ $output['safety_and_security_9_4_1_E'] = $row['safety_and_security_9_4_1_E']; }
			if(($row['safety_and_security_9_4_1_F'] == "") || ($row['safety_and_security_9_4_1_F'] === NULL)){ $output['safety_and_security_9_4_1_F'] = "empty"; }else{ $output['safety_and_security_9_4_1_F'] = $row['safety_and_security_9_4_1_F']; }
			if(($row['safety_and_security_9_4_1_G'] == "") || ($row['safety_and_security_9_4_1_G'] === NULL)){ $output['safety_and_security_9_4_1_G'] = "empty"; }else{ $output['safety_and_security_9_4_1_G'] = $row['safety_and_security_9_4_1_G']; }
			if(($row['safety_and_security_9_4_1_H'] == "") || ($row['safety_and_security_9_4_1_H'] === NULL)){ $output['safety_and_security_9_4_1_H'] = "empty"; }else{ $output['safety_and_security_9_4_1_H'] = $row['safety_and_security_9_4_1_H']; }
			
			$output['safety_and_security_9_5_1_text'] = $row['safety_and_security_9_5_1_text']; 
			if(($row['safety_and_security_9_5_1_A'] == "") || ($row['safety_and_security_9_5_1_A'] === NULL)){ $output['safety_and_security_9_5_1_A'] = "empty"; }else{ $output['safety_and_security_9_5_1_A'] = $row['safety_and_security_9_5_1_A']; }
			if(($row['safety_and_security_9_5_1_B'] == "") || ($row['safety_and_security_9_5_1_B'] === NULL)){ $output['safety_and_security_9_5_1_B'] = "empty"; }else{ $output['safety_and_security_9_5_1_B'] = $row['safety_and_security_9_5_1_B']; }
			if(($row['safety_and_security_9_5_1_C'] == "") || ($row['safety_and_security_9_5_1_C'] === NULL)){ $output['safety_and_security_9_5_1_C'] = "empty"; }else{ $output['safety_and_security_9_5_1_C'] = $row['safety_and_security_9_5_1_C']; }
			if(($row['safety_and_security_9_5_1_D'] == "") || ($row['safety_and_security_9_5_1_D'] === NULL)){ $output['safety_and_security_9_5_1_D'] = "empty"; }else{ $output['safety_and_security_9_5_1_D'] = $row['safety_and_security_9_5_1_D']; }
			if(($row['safety_and_security_9_5_1_E'] == "") || ($row['safety_and_security_9_5_1_E'] === NULL)){ $output['safety_and_security_9_5_1_E'] = "empty"; }else{ $output['safety_and_security_9_5_1_E'] = $row['safety_and_security_9_5_1_E']; }
			
			$output['safety_and_security_9_6_1_text'] = $row['safety_and_security_9_6_1_text']; 
			if(($row['safety_and_security_9_6_1_A'] == "") || ($row['safety_and_security_9_6_1_A'] === NULL)){ $output['safety_and_security_9_6_1_A'] = "empty"; }else{ $output['safety_and_security_9_6_1_A'] = $row['safety_and_security_9_6_1_A']; }
			if(($row['safety_and_security_9_6_1_B'] == "") || ($row['safety_and_security_9_6_1_B'] === NULL)){ $output['safety_and_security_9_6_1_B'] = "empty"; }else{ $output['safety_and_security_9_6_1_B'] = $row['safety_and_security_9_6_1_B']; }
			if(($row['safety_and_security_9_6_1_C'] == "") || ($row['safety_and_security_9_6_1_C'] === NULL)){ $output['safety_and_security_9_6_1_C'] = "empty"; }else{ $output['safety_and_security_9_6_1_C'] = $row['safety_and_security_9_6_1_C']; }
			
			$output['sundry_services_10_1_1_text'] = $row['sundry_services_10_1_1_text']; 
			if(($row['sundry_services_10_1_1_A'] == "") || ($row['sundry_services_10_1_1_A'] === NULL)){ $output['sundry_services_10_1_1_A'] = "empty"; }else{ $output['sundry_services_10_1_1_A'] = $row['sundry_services_10_1_1_A']; }
			if(($row['sundry_services_10_1_1_B'] == "") || ($row['sundry_services_10_1_1_B'] === NULL)){ $output['sundry_services_10_1_1_B'] = "empty"; }else{ $output['sundry_services_10_1_1_B'] = $row['sundry_services_10_1_1_B']; }
			if(($row['sundry_services_10_1_1_C'] == "") || ($row['sundry_services_10_1_1_C'] === NULL)){ $output['sundry_services_10_1_1_C'] = "empty"; }else{ $output['sundry_services_10_1_1_C'] = $row['sundry_services_10_1_1_C']; }
			if(($row['sundry_services_10_1_1_D'] == "") || ($row['sundry_services_10_1_1_D'] === NULL)){ $output['sundry_services_10_1_1_D'] = "empty"; }else{ $output['sundry_services_10_1_1_D'] = $row['sundry_services_10_1_1_D']; }
			
			$output['sundry_services_10_2_1_text'] = $row['sundry_services_10_2_1_text']; 
			if(($row['sundry_services_10_2_1_A'] == "") || ($row['sundry_services_10_2_1_A'] === NULL)){ $output['sundry_services_10_2_1_A'] = "empty"; }else{ $output['sundry_services_10_2_1_A'] = $row['sundry_services_10_2_1_A']; }
			
			$output['sundry_services_10_3_1_text'] = $row['sundry_services_10_3_1_text']; 
			if(($row['sundry_services_10_3_1_A'] == "") || ($row['sundry_services_10_3_1_A'] === NULL)){ $output['sundry_services_10_3_1_A'] = "empty"; }else{ $output['sundry_services_10_3_1_A'] = $row['sundry_services_10_3_1_A']; }
			 
			$output['sundry_services_10_4_1_text'] = $row['sundry_services_10_4_1_text']; 
			if(($row['sundry_services_10_4_1_A'] == "") || ($row['sundry_services_10_4_1_A'] === NULL)){ $output['sundry_services_10_4_1_A'] = "empty"; }else{ $output['sundry_services_10_4_1_A'] = $row['sundry_services_10_4_1_A']; }
			if(($row['sundry_services_10_4_1_B'] == "") || ($row['sundry_services_10_4_1_B'] === NULL)){ $output['sundry_services_10_4_1_B'] = "empty"; }else{ $output['sundry_services_10_4_1_B'] = $row['sundry_services_10_4_1_B']; }
			if(($row['sundry_services_10_4_1_C'] == "") || ($row['sundry_services_10_4_1_C'] === NULL)){ $output['sundry_services_10_4_1_C'] = "empty"; }else{ $output['sundry_services_10_4_1_C'] = $row['sundry_services_10_4_1_C']; }
			if(($row['sundry_services_10_4_1_D'] == "") || ($row['sundry_services_10_4_1_D'] === NULL)){ $output['sundry_services_10_4_1_D'] = "empty"; }else{ $output['sundry_services_10_4_1_D'] = $row['sundry_services_10_4_1_D']; }
			
			$output['human_resources_11_1_1_text'] = $row['human_resources_11_1_1_text']; 
			if(($row['human_resources_11_1_1_A'] == "") || ($row['human_resources_11_1_1_A'] === NULL)){ $output['human_resources_11_1_1_A'] = "empty"; }else{ $output['human_resources_11_1_1_A'] = $row['human_resources_11_1_1_A']; }
			if(($row['human_resources_11_1_1_B'] == "") || ($row['human_resources_11_1_1_B'] === NULL)){ $output['human_resources_11_1_1_B'] = "empty"; }else{ $output['human_resources_11_1_1_B'] = $row['human_resources_11_1_1_B']; }
			if(($row['human_resources_11_1_1_C'] == "") || ($row['human_resources_11_1_1_C'] === NULL)){ $output['human_resources_11_1_1_C'] = "empty"; }else{ $output['human_resources_11_1_1_C'] = $row['human_resources_11_1_1_C']; }
			if(($row['human_resources_11_1_1_D'] == "") || ($row['human_resources_11_1_1_D'] === NULL)){ $output['human_resources_11_1_1_D'] = "empty"; }else{ $output['human_resources_11_1_1_D'] = $row['human_resources_11_1_1_D']; }
			if(($row['human_resources_11_1_1_E_a'] == "") || ($row['human_resources_11_1_1_E_a'] === NULL)){ $output['human_resources_11_1_1_E_a'] = "empty"; }else{ $output['human_resources_11_1_1_E_a'] = $row['human_resources_11_1_1_E_a']; }
			if(($row['human_resources_11_1_1_E_b'] == "") || ($row['human_resources_11_1_1_E_b'] === NULL)){ $output['human_resources_11_1_1_E_b'] = "empty"; }else{ $output['human_resources_11_1_1_E_b'] = $row['human_resources_11_1_1_E_b']; }
			if(($row['human_resources_11_1_1_E_c'] == "") || ($row['human_resources_11_1_1_E_c'] === NULL)){ $output['human_resources_11_1_1_E_c'] = "empty"; }else{ $output['human_resources_11_1_1_E_c'] = $row['human_resources_11_1_1_E_c']; }
			if(($row['human_resources_11_1_1_E_d'] == "") || ($row['human_resources_11_1_1_E_d'] === NULL)){ $output['human_resources_11_1_1_E_d'] = "empty"; }else{ $output['human_resources_11_1_1_E_d'] = $row['human_resources_11_1_1_E_d']; }
			if(($row['human_resources_11_1_1_E_e'] == "") || ($row['human_resources_11_1_1_E_e'] === NULL)){ $output['human_resources_11_1_1_E_e'] = "empty"; }else{ $output['human_resources_11_1_1_E_e'] = $row['human_resources_11_1_1_E_e']; }
			
			$output['human_resources_11_2_1_text'] = $row['human_resources_11_2_1_text']; 
			if(($row['human_resources_11_2_1_A'] == "") || ($row['human_resources_11_2_1_A'] === NULL)){ $output['human_resources_11_2_1_A'] = "empty"; }else{ $output['human_resources_11_2_1_A'] = $row['human_resources_11_2_1_A']; }
			if(($row['human_resources_11_2_1_B'] == "") || ($row['human_resources_11_2_1_B'] === NULL)){ $output['human_resources_11_2_1_B'] = "empty"; }else{ $output['human_resources_11_2_1_B'] = $row['human_resources_11_2_1_B']; }
			 
			$output['human_resources_11_3_1_text'] = $row['human_resources_11_3_1_text']; 
			if(($row['human_resources_11_3_1_A_a'] == "") || ($row['human_resources_11_3_1_A_a'] === NULL)){ $output['human_resources_11_3_1_A_a'] = "empty"; }else{ $output['human_resources_11_3_1_A_a'] = $row['human_resources_11_3_1_A_a']; }
			if(($row['human_resources_11_3_1_A_b'] == "") || ($row['human_resources_11_3_1_A_b'] === NULL)){ $output['human_resources_11_3_1_A_b'] = "empty"; }else{ $output['human_resources_11_3_1_A_b'] = $row['human_resources_11_3_1_A_b']; }
			if(($row['human_resources_11_3_1_A_c'] == "") || ($row['human_resources_11_3_1_A_c'] === NULL)){ $output['human_resources_11_3_1_A_c'] = "empty"; }else{ $output['human_resources_11_3_1_A_c'] = $row['human_resources_11_3_1_A_c']; }
			if(($row['human_resources_11_3_1_B_a'] == "") || ($row['human_resources_11_3_1_B_a'] === NULL)){ $output['human_resources_11_3_1_B_a'] = "empty"; }else{ $output['human_resources_11_3_1_B_a'] = $row['human_resources_11_3_1_B_a']; }
			if(($row['human_resources_11_3_1_B_b'] == "") || ($row['human_resources_11_3_1_B_b'] === NULL)){ $output['human_resources_11_3_1_B_b'] = "empty"; }else{ $output['human_resources_11_3_1_B_b'] = $row['human_resources_11_3_1_B_b']; }
			if(($row['human_resources_11_3_1_B_c'] == "") || ($row['human_resources_11_3_1_B_c'] === NULL)){ $output['human_resources_11_3_1_B_c'] = "empty"; }else{ $output['human_resources_11_3_1_B_c'] = $row['human_resources_11_3_1_B_c']; }
			if(($row['human_resources_11_3_1_C_a'] == "") || ($row['human_resources_11_3_1_C_a'] === NULL)){ $output['human_resources_11_3_1_C_a'] = "empty"; }else{ $output['human_resources_11_3_1_C_a'] = $row['human_resources_11_3_1_C_a']; }
			if(($row['human_resources_11_3_1_C_b'] == "") || ($row['human_resources_11_3_1_C_b'] === NULL)){ $output['human_resources_11_3_1_C_b'] = "empty"; }else{ $output['human_resources_11_3_1_C_b'] = $row['human_resources_11_3_1_C_b']; }
			if(($row['human_resources_11_3_1_C_c'] == "") || ($row['human_resources_11_3_1_C_c'] === NULL)){ $output['human_resources_11_3_1_C_c'] = "empty"; }else{ $output['human_resources_11_3_1_C_c'] = $row['human_resources_11_3_1_C_c']; }
			
			$output['human_resources_11_4_1_text'] = $row['human_resources_11_4_1_text']; 
			if(($row['human_resources_11_4_1_A'] == "") || ($row['human_resources_11_4_1_A'] === NULL)){ $output['human_resources_11_4_1_A'] = "empty"; }else{ $output['human_resources_11_4_1_A'] = $row['human_resources_11_4_1_A']; }
			 
			$output['human_resources_11_5_1_text'] = $row['human_resources_11_5_1_text']; 
			if(($row['human_resources_11_5_1_A'] == "") || ($row['human_resources_11_5_1_A'] === NULL)){ $output['human_resources_11_5_1_A'] = "empty"; }else{ $output['human_resources_11_5_1_A'] = $row['human_resources_11_5_1_A']; }
			if(($row['human_resources_11_5_1_B'] == "") || ($row['human_resources_11_5_1_B'] === NULL)){ $output['human_resources_11_5_1_B'] = "empty"; }else{ $output['human_resources_11_5_1_B'] = $row['human_resources_11_5_1_B']; }
			if(($row['human_resources_11_5_1_C'] == "") || ($row['human_resources_11_5_1_C'] === NULL)){ $output['human_resources_11_5_1_C'] = "empty"; }else{ $output['human_resources_11_5_1_C'] = $row['human_resources_11_5_1_C']; }
			if(($row['human_resources_11_5_1_D'] == "") || ($row['human_resources_11_5_1_D'] === NULL)){ $output['human_resources_11_5_1_D'] = "empty"; }else{ $output['human_resources_11_5_1_D'] = $row['human_resources_11_5_1_D']; }
			if(($row['human_resources_11_5_1_E'] == "") || ($row['human_resources_11_5_1_E'] === NULL)){ $output['human_resources_11_5_1_E'] = "empty"; }else{ $output['human_resources_11_5_1_E'] = $row['human_resources_11_5_1_E']; }
			if(($row['human_resources_11_5_1_F'] == "") || ($row['human_resources_11_5_1_F'] === NULL)){ $output['human_resources_11_5_1_F'] = "empty"; }else{ $output['human_resources_11_5_1_F'] = $row['human_resources_11_5_1_F']; }
			if(($row['human_resources_11_5_1_G'] == "") || ($row['human_resources_11_5_1_G'] === NULL)){ $output['human_resources_11_5_1_G'] = "empty"; }else{ $output['human_resources_11_5_1_G'] = $row['human_resources_11_5_1_G']; }
			 
			$output['general_12_1_1_text'] = $row['general_12_1_1_text']; 
			if(($row['general_12_1_1_A'] == "") || ($row['general_12_1_1_A'] === NULL)){ $output['general_12_1_1_A'] = "empty"; }else{ $output['general_12_1_1_A'] = $row['general_12_1_1_A']; }
			if(($row['general_12_1_1_B'] == "") || ($row['general_12_1_1_B'] === NULL)){ $output['general_12_1_1_B'] = "empty"; }else{ $output['general_12_1_1_B'] = $row['general_12_1_1_B']; }
			 
			$output['general_12_2_1_text'] = $row['general_12_2_1_text']; 
			if(($row['general_12_2_1_A'] == "") || ($row['general_12_2_1_A'] === NULL)){ $output['general_12_2_1_A'] = "empty"; }else{ $output['general_12_2_1_A'] = $row['general_12_2_1_A']; }
			if(($row['general_12_2_1_B'] == "") || ($row['general_12_2_1_B'] === NULL)){ $output['general_12_2_1_B'] = "empty"; }else{ $output['general_12_2_1_B'] = $row['general_12_2_1_B']; }
			 
			$output['general_12_3_1_text'] = $row['general_12_3_1_text']; 
			if(($row['general_12_3_1_A'] == "") || ($row['general_12_3_1_A'] === NULL)){ $output['general_12_3_1_A'] = "empty"; }else{ $output['general_12_3_1_A'] = $row['general_12_3_1_A']; }
			if(($row['general_12_3_1_B'] == "") || ($row['general_12_3_1_B'] === NULL)){ $output['general_12_3_1_B'] = "empty"; }else{ $output['general_12_3_1_B'] = $row['general_12_3_1_B']; }
			 
			$output['general_12_4_1_text'] = $row['general_12_4_1_text']; 
			if(($row['general_12_4_1_A'] == "") || ($row['general_12_4_1_A'] === NULL)){ $output['general_12_4_1_A'] = "empty"; }else{ $output['general_12_4_1_A'] = $row['general_12_4_1_A']; }
			if(($row['general_12_4_1_B'] == "") || ($row['general_12_4_1_B'] === NULL)){ $output['general_12_4_1_B'] = "empty"; }else{ $output['general_12_4_1_B'] = $row['general_12_4_1_B']; }
			if(($row['general_12_4_1_C'] == "") || ($row['general_12_4_1_C'] === NULL)){ $output['general_12_4_1_C'] = "empty"; }else{ $output['general_12_4_1_C'] = $row['general_12_4_1_C']; }
			 
			$output['general_12_5_1_text'] = $row['general_12_5_1_text']; 
			if(($row['general_12_5_1_A'] == "") || ($row['general_12_5_1_A'] === NULL)){ $output['general_12_5_1_A'] = "empty"; }else{ $output['general_12_5_1_A'] = $row['general_12_5_1_A']; }
			if(($row['general_12_5_1_B'] == "") || ($row['general_12_5_1_B'] === NULL)){ $output['general_12_5_1_B'] = "empty"; }else{ $output['general_12_5_1_B'] = $row['general_12_5_1_B']; }
			if(($row['general_12_5_1_C'] == "") || ($row['general_12_5_1_C'] === NULL)){ $output['general_12_5_1_C'] = "empty"; }else{ $output['general_12_5_1_C'] = $row['general_12_5_1_C']; }
			if(($row['general_12_5_1_D_a'] == "") || ($row['general_12_5_1_D_a'] === NULL)){ $output['general_12_5_1_D_a'] = "empty"; }else{ $output['general_12_5_1_D_a'] = $row['general_12_5_1_D_a']; }
			if(($row['general_12_5_1_D_b'] == "") || ($row['general_12_5_1_D_b'] === NULL)){ $output['general_12_5_1_D_b'] = "empty"; }else{ $output['general_12_5_1_D_b'] = $row['general_12_5_1_D_b']; }
			if(($row['general_12_5_1_D_c'] == "") || ($row['general_12_5_1_D_c'] === NULL)){ $output['general_12_5_1_D_c'] = "empty"; }else{ $output['general_12_5_1_D_c'] = $row['general_12_5_1_D_c']; }
			if(($row['general_12_5_1_D_d'] == "") || ($row['general_12_5_1_D_d'] === NULL)){ $output['general_12_5_1_D_d'] = "empty"; }else{ $output['general_12_5_1_D_d'] = $row['general_12_5_1_D_d']; }
			if(($row['general_12_5_1_D_e'] == "") || ($row['general_12_5_1_D_e'] === NULL)){ $output['general_12_5_1_D_e'] = "empty"; }else{ $output['general_12_5_1_D_e'] = $row['general_12_5_1_D_e']; }
			if(($row['general_12_5_1_E'] == "") || ($row['general_12_5_1_E'] === NULL)){ $output['general_12_5_1_E'] = "empty"; }else{ $output['general_12_5_1_E'] = $row['general_12_5_1_E']; }
			if(($row['general_12_5_1_F'] == "") || ($row['general_12_5_1_F'] === NULL)){ $output['general_12_5_1_F'] = "empty"; }else{ $output['general_12_5_1_F'] = $row['general_12_5_1_F']; }
			if(($row['general_12_5_1_G'] == "") || ($row['general_12_5_1_G'] === NULL)){ $output['general_12_5_1_G'] = "empty"; }else{ $output['general_12_5_1_G'] = $row['general_12_5_1_G']; }
			if(($row['general_12_5_1_H'] == "") || ($row['general_12_5_1_H'] === NULL)){ $output['general_12_5_1_H'] = "empty"; }else{ $output['general_12_5_1_H'] = $row['general_12_5_1_H']; }
			 
			$output['general_12_6_1_text'] = $row['general_12_6_1_text']; 
			if(($row['general_12_6_1_A'] == "") || ($row['general_12_6_1_A'] === NULL)){ $output['general_12_6_1_A'] = "empty"; }else{ $output['general_12_6_1_A'] = $row['general_12_6_1_A']; }
			
					
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