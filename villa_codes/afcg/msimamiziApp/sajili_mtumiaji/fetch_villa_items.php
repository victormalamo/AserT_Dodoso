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
		 		  
			//LOCATION 1.0
			//1.1
			//1.1.1
			if(($row['location_1_1_1_A'] == "") || ($row['location_1_1_1_A'] === NULL)){ $output['location_1_1_1_A'] = "empty"; }else{ $output['location_1_1_1_A'] = $row['location_1_1_1_A']; }
			$output['location_1_1_1_text'] = $row['location_1_1_1_text'];
			//1.1.2
			if(($row['location_1_1_2_A'] == "") || ($row['location_1_1_2_A'] === NULL)){ $output['location_1_1_2_A'] = "empty"; }else{ $output['location_1_1_2_A'] = $row['location_1_1_2_A']; }
			$output['location_1_1_2_text'] = $row['location_1_1_2_text'];
			//1.1.3
			if(($row['location_1_1_3_A'] == "") || ($row['location_1_1_3_A'] === NULL)){ $output['location_1_1_3_A'] = "empty"; }else{ $output['location_1_1_3_A'] = $row['location_1_1_3_A']; }
			if(($row['location_1_1_3_B'] == "") || ($row['location_1_1_3_B'] === NULL)){ $output['location_1_1_3_B'] = "empty"; }else{ $output['location_1_1_3_B'] = $row['location_1_1_3_B']; }
			$output['location_1_1_3_text'] = $row['location_1_1_3_text'];
			//1.1.4
			if(($row['location_1_1_4_A'] == "") || ($row['location_1_1_4_A'] === NULL)){ $output['location_1_1_4_A'] = "empty"; }else{ $output['location_1_1_4_A'] = $row['location_1_1_4_A']; }
			if(($row['location_1_1_4_B'] == "") || ($row['location_1_1_4_B'] === NULL)){ $output['location_1_1_4_B'] = "empty"; }else{ $output['location_1_1_4_B'] = $row['location_1_1_4_B']; }
			$output['location_1_1_4_text'] = $row['location_1_1_4_text'];
			//1.1.5
			if(($row['location_1_1_5_A'] == "") || ($row['location_1_1_5_A'] === NULL)){ $output['location_1_1_5_A'] = "empty"; }else{ $output['location_1_1_5_A'] = $row['location_1_1_5_A']; }
			$output['location_1_1_5_text'] = $row['location_1_1_5_text'];
			//1.1.6
			if(($row['location_1_1_6_A'] == "") || ($row['location_1_1_6_A'] === NULL)){ $output['location_1_1_6_A'] = "empty"; }else{ $output['location_1_1_6_A'] = $row['location_1_1_6_A']; }
			$output['location_1_1_6_text'] = $row['location_1_1_6_text'];
			//1.2.1
			if(($row['location_1_2_1_A'] == "") || ($row['location_1_2_1_A'] === NULL)){ $output['location_1_2_1_A'] = "empty"; }else{ $output['location_1_2_1_A'] = $row['location_1_2_1_A']; }
			$output['location_1_2_1_text'] = $row['location_1_2_1_text'];
			//1.2.2
			if(($row['location_1_2_2_A'] == "") || ($row['location_1_2_2_A'] === NULL)){ $output['location_1_2_2_A'] = "empty"; }else{ $output['location_1_2_2_A'] = $row['location_1_2_2_A']; }
			$output['location_1_2_2_text'] = $row['location_1_2_2_text'];
			//1.2.3
			if(($row['location_1_2_3_A'] == "") || ($row['location_1_2_3_A'] === NULL)){ $output['location_1_2_3_A'] = "empty"; }else{ $output['location_1_2_3_A'] = $row['location_1_2_3_A']; }
			if(($row['location_1_2_3_B_a'] == "") || ($row['location_1_2_3_B_a'] === NULL)){ $output['location_1_2_3_B_a'] = "empty"; }else{ $output['location_1_2_3_B_a'] = $row['location_1_2_3_B_a']; }
			if(($row['location_1_2_3_B_b'] == "") || ($row['location_1_2_3_B_b'] === NULL)){ $output['location_1_2_3_B_b'] = "empty"; }else{ $output['location_1_2_3_B_b'] = $row['location_1_2_3_B_b']; }
			if(($row['location_1_2_3_B_c'] == "") || ($row['location_1_2_3_B_c'] === NULL)){ $output['location_1_2_3_B_c'] = "empty"; }else{ $output['location_1_2_3_B_c'] = $row['location_1_2_3_B_c']; }
			if(($row['location_1_2_3_B_d'] == "") || ($row['location_1_2_3_B_d'] === NULL)){ $output['location_1_2_3_B_d'] = "empty"; }else{ $output['location_1_2_3_B_d'] = $row['location_1_2_3_B_d']; }
			if(($row['location_1_2_3_B_e'] == "") || ($row['location_1_2_3_B_e'] === NULL)){ $output['location_1_2_3_B_e'] = "empty"; }else{ $output['location_1_2_3_B_e'] = $row['location_1_2_3_B_e']; }
			$output['location_1_2_3_text'] = $row['location_1_2_3_text'];
			//1.2.4
			if(($row['location_1_2_4_A'] == "") || ($row['location_1_2_4_A'] === NULL)){ $output['location_1_2_4_A'] = "empty"; }else{ $output['location_1_2_4_A'] = $row['location_1_2_4_A']; }
			if(($row['location_1_2_4_B'] == "") || ($row['location_1_2_4_B'] === NULL)){ $output['location_1_2_4_B'] = "empty"; }else{ $output['location_1_2_4_B'] = $row['location_1_2_4_B']; }
			if(($row['location_1_2_4_C'] == "") || ($row['location_1_2_4_C'] === NULL)){ $output['location_1_2_4_C'] = "empty"; }else{ $output['location_1_2_4_C'] = $row['location_1_2_4_C']; }
			$output['location_1_2_4_text'] = $row['location_1_2_4_text'];
			//1.2.5
			if(($row['location_1_2_5_A'] == "") || ($row['location_1_2_5_A'] === NULL)){ $output['location_1_2_5_A'] = "empty"; }else{ $output['location_1_2_5_A'] = $row['location_1_2_5_A']; }
			if(($row['location_1_2_5_B'] == "") || ($row['location_1_2_5_B'] === NULL)){ $output['location_1_2_5_B'] = "empty"; }else{ $output['location_1_2_5_B'] = $row['location_1_2_5_B']; }
			if(($row['location_1_2_5_C'] == "") || ($row['location_1_2_5_C'] === NULL)){ $output['location_1_2_5_C'] = "empty"; }else{ $output['location_1_2_5_C'] = $row['location_1_2_5_C']; }
			if(($row['location_1_2_5_D'] == "") || ($row['location_1_2_5_D'] === NULL)){ $output['location_1_2_5_D'] = "empty"; }else{ $output['location_1_2_5_D'] = $row['location_1_2_5_D']; }
			$output['location_1_2_5_text'] = $row['location_1_2_5_text'];			
			//BUILDING 2.0
			if(($row['building_2_1_1_A'] == "") || ($row['building_2_1_1_A'] === NULL)){ $output['building_2_1_1_A'] = "empty"; }else{ $output['building_2_1_1_A'] = $row['building_2_1_1_A']; }
			$output['building_2_1_1_text'] = $row['building_2_1_1_text'];
			if(($row['building_2_1_2_A'] == "") || ($row['building_2_1_2_A'] === NULL)){ $output['building_2_1_2_A'] = "empty"; }else{ $output['building_2_1_2_A'] = $row['building_2_1_2_A']; }
			if(($row['building_2_1_2_B'] == "") || ($row['building_2_1_2_B'] === NULL)){ $output['building_2_1_2_B'] = "empty"; }else{ $output['building_2_1_2_B'] = $row['building_2_1_2_B']; }
			if(($row['building_2_1_2_C'] == "") || ($row['building_2_1_2_C'] === NULL)){ $output['building_2_1_2_C'] = "empty"; }else{ $output['building_2_1_2_C'] = $row['building_2_1_2_C']; }
			if(($row['building_2_1_2_D'] == "") || ($row['building_2_1_2_D'] === NULL)){ $output['building_2_1_2_D'] = "empty"; }else{ $output['building_2_1_2_D'] = $row['building_2_1_2_D']; }
			$output['building_2_1_2_text'] = $row['building_2_1_2_text'];
			if(($row['building_2_2_1_A'] == "") || ($row['building_2_2_1_A'] === NULL)){ $output['building_2_2_1_A'] = "empty"; }else{ $output['building_2_2_1_A'] = $row['building_2_2_1_A']; }
			if(($row['building_2_2_1_B'] == "") || ($row['building_2_2_1_B'] === NULL)){ $output['building_2_2_1_B'] = "empty"; }else{ $output['building_2_2_1_B'] = $row['building_2_2_1_B']; }
			$output['building_2_2_1_text'] = $row['building_2_2_1_text'];
			if(($row['building_2_2_2_A'] == "") || ($row['building_2_2_2_A'] === NULL)){ $output['building_2_2_2_A'] = "empty"; }else{ $output['building_2_2_2_A'] = $row['building_2_2_2_A']; }
			if(($row['building_2_2_2_B'] == "") || ($row['building_2_2_2_B'] === NULL)){ $output['building_2_2_2_B'] = "empty"; }else{ $output['building_2_2_2_B'] = $row['building_2_2_2_B']; }
			if(($row['building_2_2_2_C'] == "") || ($row['building_2_2_2_C'] === NULL)){ $output['building_2_2_2_C'] = "empty"; }else{ $output['building_2_2_2_C'] = $row['building_2_2_2_C']; }
			if(($row['building_2_2_2_D'] == "") || ($row['building_2_2_2_D'] === NULL)){ $output['building_2_2_2_D'] = "empty"; }else{ $output['building_2_2_2_D'] = $row['building_2_2_2_D']; }
			if(($row['building_2_2_2_E'] == "") || ($row['building_2_2_2_E'] === NULL)){ $output['building_2_2_2_E'] = "empty"; }else{ $output['building_2_2_2_E'] = $row['building_2_2_2_E']; }
			if(($row['building_2_2_2_F'] == "") || ($row['building_2_2_2_F'] === NULL)){ $output['building_2_2_2_F'] = "empty"; }else{ $output['building_2_2_2_F'] = $row['building_2_2_2_F']; }
			if(($row['building_2_2_2_G'] == "") || ($row['building_2_2_2_G'] === NULL)){ $output['building_2_2_2_G'] = "empty"; }else{ $output['building_2_2_2_G'] = $row['building_2_2_2_G']; }
			$output['building_2_2_2_text'] = $row['building_2_2_2_text'];
			if(($row['building_2_3_1_A'] == "") || ($row['building_2_3_1_A'] === NULL)){ $output['building_2_3_1_A'] = "empty"; }else{ $output['building_2_3_1_A'] = $row['building_2_3_1_A']; }
			$output['building_2_3_1_text'] = $row['building_2_3_1_text'];
			if(($row['building_2_4_1_A'] == "") || ($row['building_2_4_1_A'] === NULL)){ $output['building_2_4_1_A'] = "empty"; }else{ $output['building_2_4_1_A'] = $row['building_2_4_1_A']; }
			if(($row['building_2_4_1_B'] == "") || ($row['building_2_4_1_B'] === NULL)){ $output['building_2_4_1_B'] = "empty"; }else{ $output['building_2_4_1_B'] = $row['building_2_4_1_B']; }
			if(($row['building_2_4_1_C'] == "") || ($row['building_2_4_1_C'] === NULL)){ $output['building_2_4_1_C'] = "empty"; }else{ $output['building_2_4_1_C'] = $row['building_2_4_1_C']; }
			if(($row['building_2_4_1_D'] == "") || ($row['building_2_4_1_D'] === NULL)){ $output['building_2_4_1_D'] = "empty"; }else{ $output['building_2_4_1_D'] = $row['building_2_4_1_D']; }
			if(($row['building_2_4_1_E'] == "") || ($row['building_2_4_1_E'] === NULL)){ $output['building_2_4_1_E'] = "empty"; }else{ $output['building_2_4_1_E'] = $row['building_2_4_1_E']; }
			if(($row['building_2_4_1_F'] == "") || ($row['building_2_4_1_F'] === NULL)){ $output['building_2_4_1_F'] = "empty"; }else{ $output['building_2_4_1_F'] = $row['building_2_4_1_F']; }
			if(($row['building_2_4_1_G'] == "") || ($row['building_2_4_1_G'] === NULL)){ $output['building_2_4_1_G'] = "empty"; }else{ $output['building_2_4_1_G'] = $row['building_2_4_1_G']; }
			if(($row['building_2_4_1_H'] == "") || ($row['building_2_4_1_H'] === NULL)){ $output['building_2_4_1_H'] = "empty"; }else{ $output['building_2_4_1_H'] = $row['building_2_4_1_H']; }
			if(($row['building_2_4_1_I'] == "") || ($row['building_2_4_1_I'] === NULL)){ $output['building_2_4_1_I'] = "empty"; }else{ $output['building_2_4_1_I'] = $row['building_2_4_1_I']; }
			if(($row['building_2_4_1_J'] == "") || ($row['building_2_4_1_J'] === NULL)){ $output['building_2_4_1_J'] = "empty"; }else{ $output['building_2_4_1_J'] = $row['building_2_4_1_J']; }
			if(($row['building_2_4_1_K'] == "") || ($row['building_2_4_1_K'] === NULL)){ $output['building_2_4_1_K'] = "empty"; }else{ $output['building_2_4_1_K'] = $row['building_2_4_1_K']; }
			$output['building_2_4_1_text'] = $row['building_2_4_1_text'];			
			//FRONT OFFICE
			if(($row['front_office_3_1_1_A'] == "") || ($row['front_office_3_1_1_A'] === NULL)){ $output['front_office_3_1_1_A'] = "empty"; }else{ $output['front_office_3_1_1_A'] = $row['front_office_3_1_1_A']; }
			if(($row['front_office_3_1_1_B'] == "") || ($row['front_office_3_1_1_B'] === NULL)){ $output['front_office_3_1_1_B'] = "empty"; }else{ $output['front_office_3_1_1_B'] = $row['front_office_3_1_1_B']; }
			if(($row['front_office_3_1_1_C'] == "") || ($row['front_office_3_1_1_C'] === NULL)){ $output['front_office_3_1_1_C'] = "empty"; }else{ $output['front_office_3_1_1_C'] = $row['front_office_3_1_1_C']; }
			if(($row['front_office_3_1_1_D'] == "") || ($row['front_office_3_1_1_D'] === NULL)){ $output['front_office_3_1_1_D'] = "empty"; }else{ $output['front_office_3_1_1_D'] = $row['front_office_3_1_1_D']; }
			$output['front_office_3_1_1_text'] = $row['front_office_3_1_1_text'];
			if(($row['front_office_3_1_2_A'] == "") || ($row['front_office_3_1_2_A'] === NULL)){ $output['front_office_3_1_2_A'] = "empty"; }else{ $output['front_office_3_1_2_A'] = $row['front_office_3_1_2_A']; }
			if(($row['front_office_3_1_2_B'] == "") || ($row['front_office_3_1_2_B'] === NULL)){ $output['front_office_3_1_2_B'] = "empty"; }else{ $output['front_office_3_1_2_B'] = $row['front_office_3_1_2_B']; }
			if(($row['front_office_3_1_2_C'] == "") || ($row['front_office_3_1_2_C'] === NULL)){ $output['front_office_3_1_2_C'] = "empty"; }else{ $output['front_office_3_1_2_C'] = $row['front_office_3_1_2_C']; }
			$output['front_office_3_1_2_text'] = $row['front_office_3_1_2_text'];
			if(($row['front_office_3_2_1_A'] == "") || ($row['front_office_3_2_1_A'] === NULL)){ $output['front_office_3_2_1_A'] = "empty"; }else{ $output['front_office_3_2_1_A'] = $row['front_office_3_2_1_A']; }
			if(($row['front_office_3_2_1_B_a'] == "") || ($row['front_office_3_2_1_B_a'] === NULL)){ $output['front_office_3_2_1_B_a'] = "empty"; }else{ $output['front_office_3_2_1_B_a'] = $row['front_office_3_2_1_B_a']; }
			if(($row['front_office_3_2_1_B_b'] == "") || ($row['front_office_3_2_1_B_b'] === NULL)){ $output['front_office_3_2_1_B_b'] = "empty"; }else{ $output['front_office_3_2_1_B_b'] = $row['front_office_3_2_1_B_b']; }
			if(($row['front_office_3_2_1_B_c'] == "") || ($row['front_office_3_2_1_B_c'] === NULL)){ $output['front_office_3_2_1_B_c'] = "empty"; }else{ $output['front_office_3_2_1_B_c'] = $row['front_office_3_2_1_B_c']; }
			if(($row['front_office_3_2_1_C_a'] == "") || ($row['front_office_3_2_1_C_a'] === NULL)){ $output['front_office_3_2_1_C_a'] = "empty"; }else{ $output['front_office_3_2_1_C_a'] = $row['front_office_3_2_1_C_a']; }
			if(($row['front_office_3_2_1_C_b'] == "") || ($row['front_office_3_2_1_C_b'] === NULL)){ $output['front_office_3_2_1_C_b'] = "empty"; }else{ $output['front_office_3_2_1_C_b'] = $row['front_office_3_2_1_C_b']; }
			if(($row['front_office_3_2_1_C_c'] == "") || ($row['front_office_3_2_1_C_c'] === NULL)){ $output['front_office_3_2_1_C_c'] = "empty"; }else{ $output['front_office_3_2_1_C_c'] = $row['front_office_3_2_1_C_c']; }
			if(($row['front_office_3_2_1_D_a'] == "") || ($row['front_office_3_2_1_D_a'] === NULL)){ $output['front_office_3_2_1_D_a'] = "empty"; }else{ $output['front_office_3_2_1_D_a'] = $row['front_office_3_2_1_D_a']; }
			if(($row['front_office_3_2_1_D_b'] == "") || ($row['front_office_3_2_1_D_b'] === NULL)){ $output['front_office_3_2_1_D_b'] = "empty"; }else{ $output['front_office_3_2_1_D_b'] = $row['front_office_3_2_1_D_b']; }
			if(($row['front_office_3_2_1_D_c'] == "") || ($row['front_office_3_2_1_D_c'] === NULL)){ $output['front_office_3_2_1_D_c'] = "empty"; }else{ $output['front_office_3_2_1_D_c'] = $row['front_office_3_2_1_D_c']; }
			if(($row['front_office_3_2_1_D_d'] == "") || ($row['front_office_3_2_1_D_d'] === NULL)){ $output['front_office_3_2_1_D_d'] = "empty"; }else{ $output['front_office_3_2_1_D_d'] = $row['front_office_3_2_1_D_d']; }
			$output['front_office_3_2_1_text'] = $row['front_office_3_2_1_text'];
			if(($row['front_office_3_3_1_A'] == "") || ($row['front_office_3_3_1_A'] === NULL)){ $output['front_office_3_3_1_A'] = "empty"; }else{ $output['front_office_3_3_1_A'] = $row['front_office_3_3_1_A']; }
			if(($row['front_office_3_3_1_B'] == "") || ($row['front_office_3_3_1_B'] === NULL)){ $output['front_office_3_3_1_B'] = "empty"; }else{ $output['front_office_3_3_1_B'] = $row['front_office_3_3_1_B']; }
			$output['front_office_3_3_1_text'] = $row['front_office_3_3_1_text'];
			if(($row['front_office_3_4_1_A_a'] == "") || ($row['front_office_3_4_1_A_a'] === NULL)){ $output['front_office_3_4_1_A_a'] = "empty"; }else{ $output['front_office_3_4_1_A_a'] = $row['front_office_3_4_1_A_a']; }
			if(($row['front_office_3_4_1_A_b'] == "") || ($row['front_office_3_4_1_A_b'] === NULL)){ $output['front_office_3_4_1_A_b'] = "empty"; }else{ $output['front_office_3_4_1_A_b'] = $row['front_office_3_4_1_A_b']; }
			if(($row['front_office_3_4_1_A_c'] == "") || ($row['front_office_3_4_1_A_c'] === NULL)){ $output['front_office_3_4_1_A_c'] = "empty"; }else{ $output['front_office_3_4_1_A_c'] = $row['front_office_3_4_1_A_c']; }
			if(($row['front_office_3_4_1_A_d'] == "") || ($row['front_office_3_4_1_A_d'] === NULL)){ $output['front_office_3_4_1_A_d'] = "empty"; }else{ $output['front_office_3_4_1_A_d'] = $row['front_office_3_4_1_A_d']; }
			$output['front_office_3_4_1_text'] = $row['front_office_3_4_1_text'];
			if(($row['front_office_3_5_1_D'] == "") || ($row['front_office_3_5_1_D'] === NULL)){ $output['front_office_3_5_1_D'] = "empty"; }else{ $output['front_office_3_5_1_D'] = $row['front_office_3_5_1_D']; }
			if(($row['front_office_3_5_1_A'] == "") || ($row['front_office_3_5_1_A'] === NULL)){ $output['front_office_3_5_1_A'] = "empty"; }else{ $output['front_office_3_5_1_A'] = $row['front_office_3_5_1_A']; }
			if(($row['front_office_3_5_1_B'] == "") || ($row['front_office_3_5_1_B'] === NULL)){ $output['front_office_3_5_1_B'] = "empty"; }else{ $output['front_office_3_5_1_B'] = $row['front_office_3_5_1_B']; }
			if(($row['front_office_3_5_1_C'] == "") || ($row['front_office_3_5_1_C'] === NULL)){ $output['front_office_3_5_1_C'] = "empty"; }else{ $output['front_office_3_5_1_C'] = $row['front_office_3_5_1_C']; }
			$output['front_office_3_5_1_text'] = $row['front_office_3_5_1_text'];
			if(($row['front_office_3_6_1_A'] == "") || ($row['front_office_3_6_1_A'] === NULL)){ $output['front_office_3_6_1_A'] = "empty"; }else{ $output['front_office_3_6_1_A'] = $row['front_office_3_6_1_A']; }
			if(($row['front_office_3_6_1_B'] == "") || ($row['front_office_3_6_1_B'] === NULL)){ $output['front_office_3_6_1_B'] = "empty"; }else{ $output['front_office_3_6_1_B'] = $row['front_office_3_6_1_B']; }
			$output['front_office_3_6_1_text'] = $row['front_office_3_6_1_text'];
			if(($row['front_office_3_7_1_A'] == "") || ($row['front_office_3_7_1_A'] === NULL)){ $output['front_office_3_7_1_A'] = "empty"; }else{ $output['front_office_3_7_1_A'] = $row['front_office_3_7_1_A']; }
			if(($row['front_office_3_7_1_B'] == "") || ($row['front_office_3_7_1_B'] === NULL)){ $output['front_office_3_7_1_B'] = "empty"; }else{ $output['front_office_3_7_1_B'] = $row['front_office_3_7_1_B']; }
			if(($row['front_office_3_7_1_C'] == "") || ($row['front_office_3_7_1_C'] === NULL)){ $output['front_office_3_7_1_C'] = "empty"; }else{ $output['front_office_3_7_1_C'] = $row['front_office_3_7_1_C']; }
			$output['front_office_3_7_1_text'] = $row['front_office_3_7_1_text'];
			if(($row['front_office_3_8_1_A_a'] == "") || ($row['front_office_3_8_1_A_a'] === NULL)){ $output['front_office_3_8_1_A_a'] = "empty"; }else{ $output['front_office_3_8_1_A_a'] = $row['front_office_3_8_1_A_a']; }
			if(($row['front_office_3_8_1_A_b'] == "") || ($row['front_office_3_8_1_A_b'] === NULL)){ $output['front_office_3_8_1_A_b'] = "empty"; }else{ $output['front_office_3_8_1_A_b'] = $row['front_office_3_8_1_A_b']; }
			if(($row['front_office_3_8_1_A_c'] == "") || ($row['front_office_3_8_1_A_c'] === NULL)){ $output['front_office_3_8_1_A_c'] = "empty"; }else{ $output['front_office_3_8_1_A_c'] = $row['front_office_3_8_1_A_c']; }
			if(($row['front_office_3_8_1_B_a'] == "") || ($row['front_office_3_8_1_B_a'] === NULL)){ $output['front_office_3_8_1_B_a'] = "empty"; }else{ $output['front_office_3_8_1_B_a'] = $row['front_office_3_8_1_B_a']; }
			if(($row['front_office_3_8_1_B_b'] == "") || ($row['front_office_3_8_1_B_b'] === NULL)){ $output['front_office_3_8_1_B_b'] = "empty"; }else{ $output['front_office_3_8_1_B_b'] = $row['front_office_3_8_1_B_b']; }
			if(($row['front_office_3_8_1_B_c'] == "") || ($row['front_office_3_8_1_B_c'] === NULL)){ $output['front_office_3_8_1_B_c'] = "empty"; }else{ $output['front_office_3_8_1_B_c'] = $row['front_office_3_8_1_B_c']; }
			$output['front_office_3_8_1_text'] = $row['front_office_3_8_1_text'];
			if(($row['front_office_3_9_1_A'] == "") || ($row['front_office_3_9_1_A'] === NULL)){ $output['front_office_3_9_1_A'] = "empty"; }else{ $output['front_office_3_9_1_A'] = $row['front_office_3_9_1_A']; }
			if(($row['front_office_3_9_1_B'] == "") || ($row['front_office_3_9_1_B'] === NULL)){ $output['front_office_3_9_1_B'] = "empty"; }else{ $output['front_office_3_9_1_B'] = $row['front_office_3_9_1_B']; }
			if(($row['front_office_3_9_1_C'] == "") || ($row['front_office_3_9_1_C'] === NULL)){ $output['front_office_3_9_1_C'] = "empty"; }else{ $output['front_office_3_9_1_C'] = $row['front_office_3_9_1_C']; }
			if(($row['front_office_3_9_1_D'] == "") || ($row['front_office_3_9_1_D'] === NULL)){ $output['front_office_3_9_1_D'] = "empty"; }else{ $output['front_office_3_9_1_D'] = $row['front_office_3_9_1_D']; }
			if(($row['front_office_3_9_1_E'] == "") || ($row['front_office_3_9_1_E'] === NULL)){ $output['front_office_3_9_1_E'] = "empty"; }else{ $output['front_office_3_9_1_E'] = $row['front_office_3_9_1_E']; }
			$output['front_office_3_9_1_text'] = $row['front_office_3_9_1_text'];
			//LOBBY LOUNGE AND OTHER PUBLIC AREAS
			if(($row['lobby_lounge_other_public_areas_4_1_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_1_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_1_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_1_1_A'] = $row['lobby_lounge_other_public_areas_4_1_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_1_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_1_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_1_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_1_1_B'] = $row['lobby_lounge_other_public_areas_4_1_1_B']; }
			if(($row['lobby_lounge_other_public_areas_4_1_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_1_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_1_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_1_1_C'] = $row['lobby_lounge_other_public_areas_4_1_1_C']; }
			if(($row['lobby_lounge_other_public_areas_4_1_1_D'] == "") || ($row['lobby_lounge_other_public_areas_4_1_1_D'] === NULL)){ $output['lobby_lounge_other_public_areas_4_1_1_D'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_1_1_D'] = $row['lobby_lounge_other_public_areas_4_1_1_D']; }
			if(($row['lobby_lounge_other_public_areas_4_1_1_E'] == "") || ($row['lobby_lounge_other_public_areas_4_1_1_E'] === NULL)){ $output['lobby_lounge_other_public_areas_4_1_1_E'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_1_1_E'] = $row['lobby_lounge_other_public_areas_4_1_1_E']; }
			$output['lobby_lounge_other_public_areas_4_1_1_text'] = $row['lobby_lounge_other_public_areas_4_1_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_2_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_2_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_2_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_2_1_A'] = $row['lobby_lounge_other_public_areas_4_2_1_A']; }
			$output['lobby_lounge_other_public_areas_4_2_1_text'] = $row['lobby_lounge_other_public_areas_4_2_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_3_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_A'] = $row['lobby_lounge_other_public_areas_4_3_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_3_1_B_a'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_B_a'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_B_a'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_B_a'] = $row['lobby_lounge_other_public_areas_4_3_1_B_a']; }
			if(($row['lobby_lounge_other_public_areas_4_3_1_B_b'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_B_b'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_B_b'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_B_b'] = $row['lobby_lounge_other_public_areas_4_3_1_B_b']; }
			if(($row['lobby_lounge_other_public_areas_4_3_1_B_c'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_B_c'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_B_c'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_B_c'] = $row['lobby_lounge_other_public_areas_4_3_1_B_c']; }
			if(($row['lobby_lounge_other_public_areas_4_3_1_B_d'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_B_d'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_B_d'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_B_d'] = $row['lobby_lounge_other_public_areas_4_3_1_B_d']; }
			if(($row['lobby_lounge_other_public_areas_4_3_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_3_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_3_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_3_1_C'] = $row['lobby_lounge_other_public_areas_4_3_1_C']; }
			$output['lobby_lounge_other_public_areas_4_3_1_text'] = $row['lobby_lounge_other_public_areas_4_3_1_text'] ;
			if(($row['lobby_lounge_other_public_areas_4_4_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_A'] = $row['lobby_lounge_other_public_areas_4_4_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_B'] = $row['lobby_lounge_other_public_areas_4_4_1_B']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_C'] = $row['lobby_lounge_other_public_areas_4_4_1_C']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_D_a'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_D_a'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_D_a'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_D_a'] = $row['lobby_lounge_other_public_areas_4_4_1_D_a']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_D_b'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_D_b'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_D_b'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_D_b'] = $row['lobby_lounge_other_public_areas_4_4_1_D_b']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_E'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_E'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_E'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_E'] = $row['lobby_lounge_other_public_areas_4_4_1_E']; }
			if(($row['lobby_lounge_other_public_areas_4_4_1_F'] == "") || ($row['lobby_lounge_other_public_areas_4_4_1_F'] === NULL)){ $output['lobby_lounge_other_public_areas_4_4_1_F'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_4_1_F'] = $row['lobby_lounge_other_public_areas_4_4_1_F']; }
			$output['lobby_lounge_other_public_areas_4_4_1_text'] = $row['lobby_lounge_other_public_areas_4_4_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_5_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_5_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_5_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_5_1_A'] = $row['lobby_lounge_other_public_areas_4_5_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_5_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_5_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_5_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_5_1_B'] = $row['lobby_lounge_other_public_areas_4_5_1_B']; }
			$output['lobby_lounge_other_public_areas_4_5_1_text'] = $row['lobby_lounge_other_public_areas_4_5_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_6_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_A'] = $row['lobby_lounge_other_public_areas_4_6_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_6_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_B'] = $row['lobby_lounge_other_public_areas_4_6_1_B']; }
			if(($row['lobby_lounge_other_public_areas_4_6_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_C'] = $row['lobby_lounge_other_public_areas_4_6_1_C']; }
			if(($row['lobby_lounge_other_public_areas_4_6_1_D'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_D'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_D'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_D'] = $row['lobby_lounge_other_public_areas_4_6_1_D']; }
			if(($row['lobby_lounge_other_public_areas_4_6_1_E'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_E'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_E'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_E'] = $row['lobby_lounge_other_public_areas_4_6_1_E']; }
			if(($row['lobby_lounge_other_public_areas_4_6_1_F'] == "") || ($row['lobby_lounge_other_public_areas_4_6_1_F'] === NULL)){ $output['lobby_lounge_other_public_areas_4_6_1_F'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_6_1_F'] = $row['lobby_lounge_other_public_areas_4_6_1_F']; }
			$output['lobby_lounge_other_public_areas_4_6_1_text'] = $row['lobby_lounge_other_public_areas_4_6_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_7_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_7_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_7_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_7_1_A'] = $row['lobby_lounge_other_public_areas_4_7_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_7_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_7_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_7_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_7_1_B'] = $row['lobby_lounge_other_public_areas_4_7_1_B']; }
			if(($row['lobby_lounge_other_public_areas_4_7_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_7_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_7_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_7_1_C'] = $row['lobby_lounge_other_public_areas_4_7_1_C']; }
			$output['lobby_lounge_other_public_areas_4_7_1_text'] = $row['lobby_lounge_other_public_areas_4_7_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_8_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_A'] = $row['lobby_lounge_other_public_areas_4_8_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_a'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_a'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_a'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_a'] = $row['lobby_lounge_other_public_areas_4_8_1_B_a']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_b'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_b'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_b'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_b'] = $row['lobby_lounge_other_public_areas_4_8_1_B_b']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_c'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_c'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_c'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_c'] = $row['lobby_lounge_other_public_areas_4_8_1_B_c']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_d'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_d'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_d'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_d'] = $row['lobby_lounge_other_public_areas_4_8_1_B_d']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_e'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_e'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_e'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_e'] = $row['lobby_lounge_other_public_areas_4_8_1_B_e']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_B_f'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_B_f'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_B_f'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_B_f'] = $row['lobby_lounge_other_public_areas_4_8_1_B_f']; }
			if(($row['lobby_lounge_other_public_areas_4_8_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_8_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_8_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_8_1_C'] = $row['lobby_lounge_other_public_areas_4_8_1_C']; }
			$output['lobby_lounge_other_public_areas_4_8_1_text'] = $row['lobby_lounge_other_public_areas_4_8_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_9_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_9_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_9_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_9_1_A'] = $row['lobby_lounge_other_public_areas_4_9_1_A']; }
			if(($row['lobby_lounge_other_public_areas_4_9_1_B'] == "") || ($row['lobby_lounge_other_public_areas_4_9_1_B'] === NULL)){ $output['lobby_lounge_other_public_areas_4_9_1_B'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_9_1_B'] = $row['lobby_lounge_other_public_areas_4_9_1_B']; }
			if(($row['lobby_lounge_other_public_areas_4_9_1_C'] == "") || ($row['lobby_lounge_other_public_areas_4_9_1_C'] === NULL)){ $output['lobby_lounge_other_public_areas_4_9_1_C'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_9_1_C'] = $row['lobby_lounge_other_public_areas_4_9_1_C']; }
			if(($row['lobby_lounge_other_public_areas_4_9_1_D'] == "") || ($row['lobby_lounge_other_public_areas_4_9_1_D'] === NULL)){ $output['lobby_lounge_other_public_areas_4_9_1_D'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_9_1_D'] = $row['lobby_lounge_other_public_areas_4_9_1_D']; }
			$output['lobby_lounge_other_public_areas_4_9_1_text'] = $row['lobby_lounge_other_public_areas_4_9_1_text'];
			if(($row['lobby_lounge_other_public_areas_4_10_1_A'] == "") || ($row['lobby_lounge_other_public_areas_4_10_1_A'] === NULL)){ $output['lobby_lounge_other_public_areas_4_10_1_A'] = "empty"; }else{ $output['lobby_lounge_other_public_areas_4_10_1_A'] = $row['lobby_lounge_other_public_areas_4_10_1_A']; }
			$output['lobby_lounge_other_public_areas_4_10_1_text'] = $row['lobby_lounge_other_public_areas_4_10_1_text'];
			//FUNCTION ROOMS
			if(($row['function_rooms_5_1_1_A'] == "") || ($row['function_rooms_5_1_1_A'] === NULL)){ $output['function_rooms_5_1_1_A'] = "empty"; }else{ $output['function_rooms_5_1_1_A'] = $row['function_rooms_5_1_1_A']; }
			if(($row['function_rooms_5_1_1_B'] == "") || ($row['function_rooms_5_1_1_B'] === NULL)){ $output['function_rooms_5_1_1_B'] = "empty"; }else{ $output['function_rooms_5_1_1_B'] = $row['function_rooms_5_1_1_B']; }
			if(($row['function_rooms_5_1_1_C'] == "") || ($row['function_rooms_5_1_1_C'] === NULL)){ $output['function_rooms_5_1_1_C'] = "empty"; }else{ $output['function_rooms_5_1_1_C'] = $row['function_rooms_5_1_1_C']; }
			if(($row['function_rooms_5_1_1_D'] == "") || ($row['function_rooms_5_1_1_D'] === NULL)){ $output['function_rooms_5_1_1_D'] = "empty"; }else{ $output['function_rooms_5_1_1_D'] = $row['function_rooms_5_1_1_D']; }
			if(($row['function_rooms_5_1_1_E'] == "") || ($row['function_rooms_5_1_1_E'] === NULL)){ $output['function_rooms_5_1_1_E'] = "empty"; }else{ $output['function_rooms_5_1_1_E'] = $row['function_rooms_5_1_1_E']; }
			if(($row['function_rooms_5_1_1_F'] == "") || ($row['function_rooms_5_1_1_F'] === NULL)){ $output['function_rooms_5_1_1_F'] = "empty"; }else{ $output['function_rooms_5_1_1_F'] = $row['function_rooms_5_1_1_F']; }
			if(($row['function_rooms_5_1_1_G'] == "") || ($row['function_rooms_5_1_1_G'] === NULL)){ $output['function_rooms_5_1_1_G'] = "empty"; }else{ $output['function_rooms_5_1_1_G'] = $row['function_rooms_5_1_1_G']; }
			if(($row['function_rooms_5_1_1_H'] == "") || ($row['function_rooms_5_1_1_H'] === NULL)){ $output['function_rooms_5_1_1_H'] = "empty"; }else{ $output['function_rooms_5_1_1_H'] = $row['function_rooms_5_1_1_H']; }
			if(($row['function_rooms_5_1_1_I'] == "") || ($row['function_rooms_5_1_1_I'] === NULL)){ $output['function_rooms_5_1_1_I'] = "empty"; }else{ $output['function_rooms_5_1_1_I'] = $row['function_rooms_5_1_1_I']; }
			if(($row['function_rooms_5_1_1_J'] == "") || ($row['function_rooms_5_1_1_J'] === NULL)){ $output['function_rooms_5_1_1_J'] = "empty"; }else{ $output['function_rooms_5_1_1_J'] = $row['function_rooms_5_1_1_J']; }
			if(($row['function_rooms_5_1_1_K'] == "") || ($row['function_rooms_5_1_1_K'] === NULL)){ $output['function_rooms_5_1_1_K'] = "empty"; }else{ $output['function_rooms_5_1_1_K'] = $row['function_rooms_5_1_1_K']; }
			if(($row['function_rooms_5_1_1_L'] == "") || ($row['function_rooms_5_1_1_L'] === NULL)){ $output['function_rooms_5_1_1_L'] = "empty"; }else{ $output['function_rooms_5_1_1_L'] = $row['function_rooms_5_1_1_L']; }
			if(($row['function_rooms_5_1_1_M'] == "") || ($row['function_rooms_5_1_1_M'] === NULL)){ $output['function_rooms_5_1_1_M'] = "empty"; }else{ $output['function_rooms_5_1_1_M'] = $row['function_rooms_5_1_1_M']; }
			$output['function_rooms_5_1_1_text'] = $row['function_rooms_5_1_1_text'];
			//RESTAURANTS
			if(($row['restaurants_6_1_1_A'] == "") || ($row['restaurants_6_1_1_A'] === NULL)){ $output['restaurants_6_1_1_A'] = "empty"; }else{ $output['restaurants_6_1_1_A'] = $row['restaurants_6_1_1_A']; }
			if(($row['restaurants_6_1_1_B'] == "") || ($row['restaurants_6_1_1_B'] === NULL)){ $output['restaurants_6_1_1_B'] = "empty"; }else{ $output['restaurants_6_1_1_B'] = $row['restaurants_6_1_1_B']; }
			if(($row['restaurants_6_1_1_C'] == "") || ($row['restaurants_6_1_1_C'] === NULL)){ $output['restaurants_6_1_1_C'] = "empty"; }else{ $output['restaurants_6_1_1_C'] = $row['restaurants_6_1_1_C']; }
			if(($row['restaurants_6_1_1_D'] == "") || ($row['restaurants_6_1_1_D'] === NULL)){ $output['restaurants_6_1_1_D'] = "empty"; }else{ $output['restaurants_6_1_1_D'] = $row['restaurants_6_1_1_D']; }
			$output['restaurants_6_1_1_text'] = $row['restaurants_6_1_1_text'];
			if(($row['restaurants_6_2_1_A'] == "") || ($row['restaurants_6_2_1_A'] === NULL)){ $output['restaurants_6_2_1_A'] = "empty"; }else{ $output['restaurants_6_2_1_A'] = $row['restaurants_6_2_1_A']; }
			if(($row['restaurants_6_2_1_B'] == "") || ($row['restaurants_6_2_1_B'] === NULL)){ $output['restaurants_6_2_1_B'] = "empty"; }else{ $output['restaurants_6_2_1_B'] = $row['restaurants_6_2_1_B']; }
			if(($row['restaurants_6_2_1_C'] == "") || ($row['restaurants_6_2_1_C'] === NULL)){ $output['restaurants_6_2_1_C'] = "empty"; }else{ $output['restaurants_6_2_1_C'] = $row['restaurants_6_2_1_C']; }
			if(($row['restaurants_6_2_1_D'] == "") || ($row['restaurants_6_2_1_D'] === NULL)){ $output['restaurants_6_2_1_D'] = "empty"; }else{ $output['restaurants_6_2_1_D'] = $row['restaurants_6_2_1_D']; }
			if(($row['restaurants_6_2_1_E'] == "") || ($row['restaurants_6_2_1_E'] === NULL)){ $output['restaurants_6_2_1_E'] = "empty"; }else{ $output['restaurants_6_2_1_E'] = $row['restaurants_6_2_1_E']; }
			if(($row['restaurants_6_2_1_F'] == "") || ($row['restaurants_6_2_1_F'] === NULL)){ $output['restaurants_6_2_1_F'] = "empty"; }else{ $output['restaurants_6_2_1_F'] = $row['restaurants_6_2_1_F']; }
			if(($row['restaurants_6_2_1_G'] == "") || ($row['restaurants_6_2_1_G'] === NULL)){ $output['restaurants_6_2_1_G'] = "empty"; }else{ $output['restaurants_6_2_1_G'] = $row['restaurants_6_2_1_G']; }
			if(($row['restaurants_6_2_1_H'] == "") || ($row['restaurants_6_2_1_H'] === NULL)){ $output['restaurants_6_2_1_H'] = "empty"; }else{ $output['restaurants_6_2_1_H'] = $row['restaurants_6_2_1_H']; }
			if(($row['restaurants_6_2_1_I'] == "") || ($row['restaurants_6_2_1_I'] === NULL)){ $output['restaurants_6_2_1_I'] = "empty"; }else{ $output['restaurants_6_2_1_I'] = $row['restaurants_6_2_1_I']; }
			$output['restaurants_6_2_1_text'] = $row['restaurants_6_2_1_text'];
			if(($row['restaurants_6_3_1_A'] == "") || ($row['restaurants_6_3_1_A'] === NULL)){ $output['restaurants_6_3_1_A'] = "empty"; }else{ $output['restaurants_6_3_1_A'] = $row['restaurants_6_3_1_A']; }
			if(($row['restaurants_6_3_1_B'] == "") || ($row['restaurants_6_3_1_B'] === NULL)){ $output['restaurants_6_3_1_B'] = "empty"; }else{ $output['restaurants_6_3_1_B'] = $row['restaurants_6_3_1_B']; }
			if(($row['restaurants_6_3_1_C'] == "") || ($row['restaurants_6_3_1_C'] === NULL)){ $output['restaurants_6_3_1_C'] = "empty"; }else{ $output['restaurants_6_3_1_C'] = $row['restaurants_6_3_1_C']; }
			$output['restaurants_6_3_1_text'] = $row['restaurants_6_3_1_text'];
			if(($row['restaurants_6_4_1_A'] == "") || ($row['restaurants_6_4_1_A'] === NULL)){ $output['restaurants_6_4_1_A'] = "empty"; }else{ $output['restaurants_6_4_1_A'] = $row['restaurants_6_4_1_A']; }
			if(($row['restaurants_6_4_1_B'] == "") || ($row['restaurants_6_4_1_B'] === NULL)){ $output['restaurants_6_4_1_B'] = "empty"; }else{ $output['restaurants_6_4_1_B'] = $row['restaurants_6_4_1_B']; }
			if(($row['restaurants_6_4_1_C'] == "") || ($row['restaurants_6_4_1_C'] === NULL)){ $output['restaurants_6_4_1_C'] = "empty"; }else{ $output['restaurants_6_4_1_C'] = $row['restaurants_6_4_1_C']; }
			if(($row['restaurants_6_4_1_D'] == "") || ($row['restaurants_6_4_1_D'] === NULL)){ $output['restaurants_6_4_1_D'] = "empty"; }else{ $output['restaurants_6_4_1_D'] = $row['restaurants_6_4_1_D']; }
			if(($row['restaurants_6_4_1_E'] == "") || ($row['restaurants_6_4_1_E'] === NULL)){ $output['restaurants_6_4_1_E'] = "empty"; }else{ $output['restaurants_6_4_1_E'] = $row['restaurants_6_4_1_E']; }
			if(($row['restaurants_6_4_1_F'] == "") || ($row['restaurants_6_4_1_F'] === NULL)){ $output['restaurants_6_4_1_F'] = "empty"; }else{ $output['restaurants_6_4_1_F'] = $row['restaurants_6_4_1_F']; }
			if(($row['restaurants_6_4_1_G'] == "") || ($row['restaurants_6_4_1_G'] === NULL)){ $output['restaurants_6_4_1_G'] = "empty"; }else{ $output['restaurants_6_4_1_G'] = $row['restaurants_6_4_1_G']; }
			$output['restaurants_6_4_1_text'] = $row['restaurants_6_4_1_text'];
			if(($row['restaurants_6_5_1_A'] == "") || ($row['restaurants_6_5_1_A'] === NULL)){ $output['restaurants_6_5_1_A'] = "empty"; }else{ $output['restaurants_6_5_1_A'] = $row['restaurants_6_5_1_A']; }
			if(($row['restaurants_6_5_1_B'] == "") || ($row['restaurants_6_5_1_B'] === NULL)){ $output['restaurants_6_5_1_B'] = "empty"; }else{ $output['restaurants_6_5_1_B'] = $row['restaurants_6_5_1_B']; }
			if(($row['restaurants_6_5_1_C'] == "") || ($row['restaurants_6_5_1_C'] === NULL)){ $output['restaurants_6_5_1_C'] = "empty"; }else{ $output['restaurants_6_5_1_C'] = $row['restaurants_6_5_1_C']; }
			if(($row['restaurants_6_5_1_D'] == "") || ($row['restaurants_6_5_1_D'] === NULL)){ $output['restaurants_6_5_1_D'] = "empty"; }else{ $output['restaurants_6_5_1_D'] = $row['restaurants_6_5_1_D']; }
			if(($row['restaurants_6_5_1_E_a'] == "") || ($row['restaurants_6_5_1_E_a'] === NULL)){ $output['restaurants_6_5_1_E_a'] = "empty"; }else{ $output['restaurants_6_5_1_E_a'] = $row['restaurants_6_5_1_E_a']; }
			if(($row['restaurants_6_5_1_E_b'] == "") || ($row['restaurants_6_5_1_E_b'] === NULL)){ $output['restaurants_6_5_1_E_b'] = "empty"; }else{ $output['restaurants_6_5_1_E_b'] = $row['restaurants_6_5_1_E_b']; }
			if(($row['restaurants_6_5_1_E_c'] == "") || ($row['restaurants_6_5_1_E_c'] === NULL)){ $output['restaurants_6_5_1_E_c'] = "empty"; }else{ $output['restaurants_6_5_1_E_c'] = $row['restaurants_6_5_1_E_c']; }
			if(($row['restaurants_6_5_1_E_d'] == "") || ($row['restaurants_6_5_1_E_d'] === NULL)){ $output['restaurants_6_5_1_E_d'] = "empty"; }else{ $output['restaurants_6_5_1_E_d'] = $row['restaurants_6_5_1_E_d']; }
			if(($row['restaurants_6_5_1_F'] == "") || ($row['restaurants_6_5_1_F'] === NULL)){ $output['restaurants_6_5_1_F'] = "empty"; }else{ $output['restaurants_6_5_1_F'] = $row['restaurants_6_5_1_F']; }
			if(($row['restaurants_6_5_1_G_a'] == "") || ($row['restaurants_6_5_1_G_a'] === NULL)){ $output['restaurants_6_5_1_G_a'] = "empty"; }else{ $output['restaurants_6_5_1_G_a'] = $row['restaurants_6_5_1_G_a']; }
			if(($row['restaurants_6_5_1_G_b'] == "") || ($row['restaurants_6_5_1_G_b'] === NULL)){ $output['restaurants_6_5_1_G_b'] = "empty"; }else{ $output['restaurants_6_5_1_G_b'] = $row['restaurants_6_5_1_G_b']; }
			if(($row['restaurants_6_5_1_G_c'] == "") || ($row['restaurants_6_5_1_G_c'] === NULL)){ $output['restaurants_6_5_1_G_c'] = "empty"; }else{ $output['restaurants_6_5_1_G_c'] = $row['restaurants_6_5_1_G_c']; }
			if(($row['restaurants_6_5_1_H'] == "") || ($row['restaurants_6_5_1_H'] === NULL)){ $output['restaurants_6_5_1_H'] = "empty"; }else{ $output['restaurants_6_5_1_H'] = $row['restaurants_6_5_1_H']; }
			if(($row['restaurants_6_5_1_I'] == "") || ($row['restaurants_6_5_1_I'] === NULL)){ $output['restaurants_6_5_1_I'] = "empty"; }else{ $output['restaurants_6_5_1_I'] = $row['restaurants_6_5_1_I']; }
			$output['restaurants_6_5_1_text'] = $row['restaurants_6_5_1_text'];
			if(($row['restaurants_6_6_1_A'] == "") || ($row['restaurants_6_6_1_A'] === NULL)){ $output['restaurants_6_6_1_A'] = "empty"; }else{ $output['restaurants_6_6_1_A'] = $row['restaurants_6_6_1_A']; }
			if(($row['restaurants_6_6_1_B'] == "") || ($row['restaurants_6_6_1_B'] === NULL)){ $output['restaurants_6_6_1_B'] = "empty"; }else{ $output['restaurants_6_6_1_B'] = $row['restaurants_6_6_1_B']; }
			if(($row['restaurants_6_6_1_C'] == "") || ($row['restaurants_6_6_1_C'] === NULL)){ $output['restaurants_6_6_1_C'] = "empty"; }else{ $output['restaurants_6_6_1_C'] = $row['restaurants_6_6_1_C']; }
			if(($row['restaurants_6_6_1_D'] == "") || ($row['restaurants_6_6_1_D'] === NULL)){ $output['restaurants_6_6_1_D'] = "empty"; }else{ $output['restaurants_6_6_1_D'] = $row['restaurants_6_6_1_D']; }
			$output['restaurants_6_6_1_text'] = $row['restaurants_6_6_1_text'];
			if(($row['restaurants_6_7_1_A'] == "") || ($row['restaurants_6_7_1_A'] === NULL)){ $output['restaurants_6_7_1_A'] = "empty"; }else{ $output['restaurants_6_7_1_A'] = $row['restaurants_6_7_1_A']; }
			if(($row['restaurants_6_7_1_B'] == "") || ($row['restaurants_6_7_1_B'] === NULL)){ $output['restaurants_6_7_1_B'] = "empty"; }else{ $output['restaurants_6_7_1_B'] = $row['restaurants_6_7_1_B']; }
			if(($row['restaurants_6_7_1_C'] == "") || ($row['restaurants_6_7_1_C'] === NULL)){ $output['restaurants_6_7_1_C'] = "empty"; }else{ $output['restaurants_6_7_1_C'] = $row['restaurants_6_7_1_C']; }
			$output['restaurants_6_7_1_text'] = $row['restaurants_6_7_1_text'];
			if(($row['restaurants_6_8_1_A'] == "") || ($row['restaurants_6_8_1_A'] === NULL)){ $output['restaurants_6_8_1_A'] = "empty"; }else{ $output['restaurants_6_8_1_A'] = $row['restaurants_6_8_1_A']; }
			if(($row['restaurants_6_8_1_B'] == "") || ($row['restaurants_6_8_1_B'] === NULL)){ $output['restaurants_6_8_1_B'] = "empty"; }else{ $output['restaurants_6_8_1_B'] = $row['restaurants_6_8_1_B']; }
			$output['restaurants_6_8_1_text'] = $row['restaurants_6_8_1_text'];
			//BARS
			if(($row['bar_7_1_1_A'] == "") || ($row['bar_7_1_1_A'] === NULL)){ $output['bar_7_1_1_A'] = "empty"; }else{ $output['bar_7_1_1_A'] = $row['bar_7_1_1_A']; }
			if(($row['bar_7_1_1_B_a'] == "") || ($row['bar_7_1_1_B_a'] === NULL)){ $output['bar_7_1_1_B_a'] = "empty"; }else{ $output['bar_7_1_1_B_a'] = $row['bar_7_1_1_B_a']; }
			if(($row['bar_7_1_1_B_b'] == "") || ($row['bar_7_1_1_B_b'] === NULL)){ $output['bar_7_1_1_B_b'] = "empty"; }else{ $output['bar_7_1_1_B_b'] = $row['bar_7_1_1_B_b']; }
			if(($row['bar_7_1_1_B_c'] == "") || ($row['bar_7_1_1_B_c'] === NULL)){ $output['bar_7_1_1_B_c'] = "empty"; }else{ $output['bar_7_1_1_B_c'] = $row['bar_7_1_1_B_c']; }
			if(($row['bar_7_1_1_C'] == "") || ($row['bar_7_1_1_C'] === NULL)){ $output['bar_7_1_1_C'] = "empty"; }else{ $output['bar_7_1_1_C'] = $row['bar_7_1_1_C']; }
			if(($row['bar_7_1_1_D_a'] == "") || ($row['bar_7_1_1_D_a'] === NULL)){ $output['bar_7_1_1_D_a'] = "empty"; }else{ $output['bar_7_1_1_D_a'] = $row['bar_7_1_1_D_a']; }
			if(($row['bar_7_1_1_D_b'] == "") || ($row['bar_7_1_1_D_b'] === NULL)){ $output['bar_7_1_1_D_b'] = "empty"; }else{ $output['bar_7_1_1_D_b'] = $row['bar_7_1_1_D_b']; }
			if(($row['bar_7_1_1_D_c'] == "") || ($row['bar_7_1_1_D_c'] === NULL)){ $output['bar_7_1_1_D_c'] = "empty"; }else{ $output['bar_7_1_1_D_c'] = $row['bar_7_1_1_D_c']; }
			if(($row['bar_7_1_1_E'] == "") || ($row['bar_7_1_1_E'] === NULL)){ $output['bar_7_1_1_E'] = "empty"; }else{ $output['bar_7_1_1_E'] = $row['bar_7_1_1_E']; }
			if(($row['bar_7_1_1_F'] == "") || ($row['bar_7_1_1_F'] === NULL)){ $output['bar_7_1_1_F'] = "empty"; }else{ $output['bar_7_1_1_F'] = $row['bar_7_1_1_F']; }
			if(($row['bar_7_1_1_G'] == "") || ($row['bar_7_1_1_G'] === NULL)){ $output['bar_7_1_1_G'] = "empty"; }else{ $output['bar_7_1_1_G'] = $row['bar_7_1_1_G']; }
			$output['bar_7_1_1_text'] = $row['bar_7_1_1_text'];
			if(($row['bar_7_2_1_A'] == "") || ($row['bar_7_2_1_A'] === NULL)){ $output['bar_7_2_1_A'] = "empty"; }else{ $output['bar_7_2_1_A'] = $row['bar_7_2_1_A']; }
			if(($row['bar_7_2_1_B'] == "") || ($row['bar_7_2_1_B'] === NULL)){ $output['bar_7_2_1_B'] = "empty"; }else{ $output['bar_7_2_1_B'] = $row['bar_7_2_1_B']; }
			if(($row['bar_7_2_1_C'] == "") || ($row['bar_7_2_1_C'] === NULL)){ $output['bar_7_2_1_C'] = "empty"; }else{ $output['bar_7_2_1_C'] = $row['bar_7_2_1_C']; }
			if(($row['bar_7_2_1_D'] == "") || ($row['bar_7_2_1_D'] === NULL)){ $output['bar_7_2_1_D'] = "empty"; }else{ $output['bar_7_2_1_D'] = $row['bar_7_2_1_D']; }
			if(($row['bar_7_2_1_E'] == "") || ($row['bar_7_2_1_E'] === NULL)){ $output['bar_7_2_1_E'] = "empty"; }else{ $output['bar_7_2_1_E'] = $row['bar_7_2_1_E']; }
			if(($row['bar_7_2_1_F'] == "") || ($row['bar_7_2_1_F'] === NULL)){ $output['bar_7_2_1_F'] = "empty"; }else{ $output['bar_7_2_1_F'] = $row['bar_7_2_1_F']; }
			if(($row['bar_7_2_1_G'] == "") || ($row['bar_7_2_1_G'] === NULL)){ $output['bar_7_2_1_G'] = "empty"; }else{ $output['bar_7_2_1_G'] = $row['bar_7_2_1_G']; }
			if(($row['bar_7_2_1_H'] == "") || ($row['bar_7_2_1_H'] === NULL)){ $output['bar_7_2_1_H'] = "empty"; }else{ $output['bar_7_2_1_H'] = $row['bar_7_2_1_H']; }
			if(($row['bar_7_2_1_I'] == "") || ($row['bar_7_2_1_I'] === NULL)){ $output['bar_7_2_1_I'] = "empty"; }else{ $output['bar_7_2_1_I'] = $row['bar_7_2_1_I']; }
			if(($row['bar_7_2_1_J'] == "") || ($row['bar_7_2_1_J'] === NULL)){ $output['bar_7_2_1_J'] = "empty"; }else{ $output['bar_7_2_1_J'] = $row['bar_7_2_1_J']; }
			$output['bar_7_2_1_text'] = $row['bar_7_2_1_text'];
			if(($row['bar_7_3_1_A'] == "") || ($row['bar_7_3_1_A'] === NULL)){ $output['bar_7_3_1_A'] = "empty"; }else{ $output['bar_7_3_1_A'] = $row['bar_7_3_1_A']; }
			if(($row['bar_7_3_1_B'] == "") || ($row['bar_7_3_1_B'] === NULL)){ $output['bar_7_3_1_B'] = "empty"; }else{ $output['bar_7_3_1_B'] = $row['bar_7_3_1_B']; }
			if(($row['bar_7_3_1_C'] == "") || ($row['bar_7_3_1_C'] === NULL)){ $output['bar_7_3_1_C'] = "empty"; }else{ $output['bar_7_3_1_C'] = $row['bar_7_3_1_C']; }
			if(($row['bar_7_3_1_D'] == "") || ($row['bar_7_3_1_D'] === NULL)){ $output['bar_7_3_1_D'] = "empty"; }else{ $output['bar_7_3_1_D'] = $row['bar_7_3_1_D']; }
			$output['bar_7_3_1_text'] = $row['bar_7_3_1_text'];
			if(($row['bar_7_4_1_A'] == "") || ($row['bar_7_4_1_A'] === NULL)){ $output['bar_7_4_1_A'] = "empty"; }else{ $output['bar_7_4_1_A'] = $row['bar_7_4_1_A']; }
			if(($row['bar_7_4_1_B'] == "") || ($row['bar_7_4_1_B'] === NULL)){ $output['bar_7_4_1_B'] = "empty"; }else{ $output['bar_7_4_1_B'] = $row['bar_7_4_1_B']; }
			if(($row['bar_7_4_1_C'] == "") || ($row['bar_7_4_1_C'] === NULL)){ $output['bar_7_4_1_C'] = "empty"; }else{ $output['bar_7_4_1_C'] = $row['bar_7_4_1_C']; }
			$output['bar_7_4_1_text'] = $row['bar_7_4_1_text'];
			if(($row['bar_7_5_1_A'] == "") || ($row['bar_7_5_1_A'] === NULL)){ $output['bar_7_5_1_A'] = "empty"; }else{ $output['bar_7_5_1_A'] = $row['bar_7_5_1_A']; }
			if(($row['bar_7_5_1_B'] == "") || ($row['bar_7_5_1_B'] === NULL)){ $output['bar_7_5_1_B'] = "empty"; }else{ $output['bar_7_5_1_B'] = $row['bar_7_5_1_B']; }
			if(($row['bar_7_5_1_C'] == "") || ($row['bar_7_5_1_C'] === NULL)){ $output['bar_7_5_1_C'] = "empty"; }else{ $output['bar_7_5_1_C'] = $row['bar_7_5_1_C']; }
			if(($row['bar_7_5_1_D'] == "") || ($row['bar_7_5_1_D'] === NULL)){ $output['bar_7_5_1_D'] = "empty"; }else{ $output['bar_7_5_1_D'] = $row['bar_7_5_1_D']; }
			if(($row['bar_7_5_1_E_a'] == "") || ($row['bar_7_5_1_E_a'] === NULL)){ $output['bar_7_5_1_E_a'] = "empty"; }else{ $output['bar_7_5_1_E_a'] = $row['bar_7_5_1_E_a']; }
			if(($row['bar_7_5_1_E_b'] == "") || ($row['bar_7_5_1_E_b'] === NULL)){ $output['bar_7_5_1_E_b'] = "empty"; }else{ $output['bar_7_5_1_E_b'] = $row['bar_7_5_1_E_b']; }
			if(($row['bar_7_5_1_E_c'] == "") || ($row['bar_7_5_1_E_c'] === NULL)){ $output['bar_7_5_1_E_c'] = "empty"; }else{ $output['bar_7_5_1_E_c'] = $row['bar_7_5_1_E_c']; }
			if(($row['bar_7_5_1_E_d'] == "") || ($row['bar_7_5_1_E_d'] === NULL)){ $output['bar_7_5_1_E_d'] = "empty"; }else{ $output['bar_7_5_1_E_d'] = $row['bar_7_5_1_E_d']; }
			if(($row['bar_7_5_1_E_e'] == "") || ($row['bar_7_5_1_E_e'] === NULL)){ $output['bar_7_5_1_E_e'] = "empty"; }else{ $output['bar_7_5_1_E_e'] = $row['bar_7_5_1_E_e']; }
			if(($row['bar_7_5_1_E_f'] == "") || ($row['bar_7_5_1_E_f'] === NULL)){ $output['bar_7_5_1_E_f'] = "empty"; }else{ $output['bar_7_5_1_E_f'] = $row['bar_7_5_1_E_f']; }
			if(($row['bar_7_5_1_E_g'] == "") || ($row['bar_7_5_1_E_g'] === NULL)){ $output['bar_7_5_1_E_g'] = "empty"; }else{ $output['bar_7_5_1_E_g'] = $row['bar_7_5_1_E_g']; }
			if(($row['bar_7_5_1_E_h'] == "") || ($row['bar_7_5_1_E_h'] === NULL)){ $output['bar_7_5_1_E_h'] = "empty"; }else{ $output['bar_7_5_1_E_h'] = $row['bar_7_5_1_E_h']; }
			if(($row['bar_7_5_1_F'] == "") || ($row['bar_7_5_1_F'] === NULL)){ $output['bar_7_5_1_F'] = "empty"; }else{ $output['bar_7_5_1_F'] = $row['bar_7_5_1_F']; }
			if(($row['bar_7_5_1_G'] == "") || ($row['bar_7_5_1_G'] === NULL)){ $output['bar_7_5_1_G'] = "empty"; }else{ $output['bar_7_5_1_G'] = $row['bar_7_5_1_G']; }
			if(($row['bar_7_5_1_H'] == "") || ($row['bar_7_5_1_H'] === NULL)){ $output['bar_7_5_1_H'] = "empty"; }else{ $output['bar_7_5_1_H'] = $row['bar_7_5_1_H']; }
			if(($row['bar_7_5_1_I'] == "") || ($row['bar_7_5_1_I'] === NULL)){ $output['bar_7_5_1_I'] = "empty"; }else{ $output['bar_7_5_1_I'] = $row['bar_7_5_1_I']; }
			$output['bar_7_5_1_text'] = $row['bar_7_5_1_text'];
			if(($row['bar_7_6_1_A'] == "") || ($row['bar_7_6_1_A'] === NULL)){ $output['bar_7_6_1_A'] = "empty"; }else{ $output['bar_7_6_1_A'] = $row['bar_7_6_1_A']; }
			if(($row['bar_7_6_1_B'] == "") || ($row['bar_7_6_1_B'] === NULL)){ $output['bar_7_6_1_B'] = "empty"; }else{ $output['bar_7_6_1_B'] = $row['bar_7_6_1_B']; }
			if(($row['bar_7_6_1_C'] == "") || ($row['bar_7_6_1_C'] === NULL)){ $output['bar_7_6_1_C'] = "empty"; }else{ $output['bar_7_6_1_C'] = $row['bar_7_6_1_C']; }
			$output['bar_7_6_1_text'] = $row['bar_7_6_1_text'];
			if(($row['bar_7_7_1_A'] == "") || ($row['bar_7_7_1_A'] === NULL)){ $output['bar_7_7_1_A'] = "empty"; }else{ $output['bar_7_7_1_A'] = $row['bar_7_7_1_A']; }
			if(($row['bar_7_7_1_B'] == "") || ($row['bar_7_7_1_B'] === NULL)){ $output['bar_7_7_1_B'] = "empty"; }else{ $output['bar_7_7_1_B'] = $row['bar_7_7_1_B']; }
			if(($row['bar_7_7_1_C'] == "") || ($row['bar_7_7_1_C'] === NULL)){ $output['bar_7_7_1_C'] = "empty"; }else{ $output['bar_7_7_1_C'] = $row['bar_7_7_1_C']; }
			$output['bar_7_7_1_text'] = $row['bar_7_7_1_text'];
			if(($row['bar_7_8_1_A'] == "") || ($row['bar_7_8_1_A'] === NULL)){ $output['bar_7_8_1_A'] = "empty"; }else{ $output['bar_7_8_1_A'] = $row['bar_7_8_1_A']; }
			if(($row['bar_7_8_1_B'] == "") || ($row['bar_7_8_1_B'] === NULL)){ $output['bar_7_8_1_B'] = "empty"; }else{ $output['bar_7_8_1_B'] = $row['bar_7_8_1_B']; }
			if(($row['bar_7_8_1_C'] == "") || ($row['bar_7_8_1_C'] === NULL)){ $output['bar_7_8_1_C'] = "empty"; }else{ $output['bar_7_8_1_C'] = $row['bar_7_8_1_C']; }
			$output['bar_7_8_1_text'] = $row['bar_7_8_1_text'];
			//KITCHEN
			if(($row['kitchen_8_1_1_A'] == "") || ($row['kitchen_8_1_1_A'] === NULL)){ $output['kitchen_8_1_1_A'] = "empty"; }else{ $output['kitchen_8_1_1_A'] = $row['kitchen_8_1_1_A']; }
			$output['kitchen_8_1_1_text'] = $row['kitchen_8_1_1_text'];
			if(($row['kitchen_8_2_1_A'] == "") || ($row['kitchen_8_2_1_A'] === NULL)){ $output['kitchen_8_2_1_A'] = "empty"; }else{ $output['kitchen_8_2_1_A'] = $row['kitchen_8_2_1_A']; }
			if(($row['kitchen_8_2_1_B'] == "") || ($row['kitchen_8_2_1_B'] === NULL)){ $output['kitchen_8_2_1_B'] = "empty"; }else{ $output['kitchen_8_2_1_B'] = $row['kitchen_8_2_1_B']; }
			if(($row['kitchen_8_2_1_C'] == "") || ($row['kitchen_8_2_1_C'] === NULL)){ $output['kitchen_8_2_1_C'] = "empty"; }else{ $output['kitchen_8_2_1_C'] = $row['kitchen_8_2_1_C']; }
			$output['kitchen_8_2_1_text'] = $row['kitchen_8_2_1_text'];
			if(($row['kitchen_8_3_1_A'] == "") || ($row['kitchen_8_3_1_A'] === NULL)){ $output['kitchen_8_3_1_A'] = "empty"; }else{ $output['kitchen_8_3_1_A'] = $row['kitchen_8_3_1_A']; }
			if(($row['kitchen_8_3_1_B'] == "") || ($row['kitchen_8_3_1_B'] === NULL)){ $output['kitchen_8_3_1_B'] = "empty"; }else{ $output['kitchen_8_3_1_B'] = $row['kitchen_8_3_1_B']; }
			if(($row['kitchen_8_3_1_C'] == "") || ($row['kitchen_8_3_1_C'] === NULL)){ $output['kitchen_8_3_1_C'] = "empty"; }else{ $output['kitchen_8_3_1_C'] = $row['kitchen_8_3_1_C']; }
			$output['kitchen_8_3_1_text'] = $row['kitchen_8_3_1_text'];
			if(($row['kitchen_8_4_1_A'] == "") || ($row['kitchen_8_4_1_A'] === NULL)){ $output['kitchen_8_4_1_A'] = "empty"; }else{ $output['kitchen_8_4_1_A'] = $row['kitchen_8_4_1_A']; }
			$output['kitchen_8_4_1_text'] = $row['kitchen_8_4_1_text'];
			if(($row['kitchen_8_4_2_A'] == "") || ($row['kitchen_8_4_2_A'] === NULL)){ $output['kitchen_8_4_2_A'] = "empty"; }else{ $output['kitchen_8_4_2_A'] = $row['kitchen_8_4_2_A']; }
			if(($row['kitchen_8_4_2_B'] == "") || ($row['kitchen_8_4_2_B'] === NULL)){ $output['kitchen_8_4_2_B'] = "empty"; }else{ $output['kitchen_8_4_2_B'] = $row['kitchen_8_4_2_B']; }
			if(($row['kitchen_8_4_2_C'] == "") || ($row['kitchen_8_4_2_C'] === NULL)){ $output['kitchen_8_4_2_C'] = "empty"; }else{ $output['kitchen_8_4_2_C'] = $row['kitchen_8_4_2_C']; }
			$output['kitchen_8_4_2_text'] = $row['kitchen_8_4_2_text'];
			if(($row['kitchen_8_5_1_A'] == "") || ($row['kitchen_8_5_1_A'] === NULL)){ $output['kitchen_8_5_1_A'] = "empty"; }else{ $output['kitchen_8_5_1_A'] = $row['kitchen_8_5_1_A']; }
			if(($row['kitchen_8_5_1_B'] == "") || ($row['kitchen_8_5_1_B'] === NULL)){ $output['kitchen_8_5_1_B'] = "empty"; }else{ $output['kitchen_8_5_1_B'] = $row['kitchen_8_5_1_B']; }
			if(($row['kitchen_8_5_1_C'] == "") || ($row['kitchen_8_5_1_C'] === NULL)){ $output['kitchen_8_5_1_C'] = "empty"; }else{ $output['kitchen_8_5_1_C'] = $row['kitchen_8_5_1_C']; }
			if(($row['kitchen_8_5_1_D'] == "") || ($row['kitchen_8_5_1_D'] === NULL)){ $output['kitchen_8_5_1_D'] = "empty"; }else{ $output['kitchen_8_5_1_D'] = $row['kitchen_8_5_1_D']; }
			if(($row['kitchen_8_5_1_E'] == "") || ($row['kitchen_8_5_1_E'] === NULL)){ $output['kitchen_8_5_1_E'] = "empty"; }else{ $output['kitchen_8_5_1_E'] = $row['kitchen_8_5_1_E']; }
			if(($row['kitchen_8_5_1_F'] == "") || ($row['kitchen_8_5_1_F'] === NULL)){ $output['kitchen_8_5_1_F'] = "empty"; }else{ $output['kitchen_8_5_1_F'] = $row['kitchen_8_5_1_F']; }
			if(($row['kitchen_8_5_1_G'] == "") || ($row['kitchen_8_5_1_G'] === NULL)){ $output['kitchen_8_5_1_G'] = "empty"; }else{ $output['kitchen_8_5_1_G'] = $row['kitchen_8_5_1_G']; }
			if(($row['kitchen_8_5_1_H'] == "") || ($row['kitchen_8_5_1_H'] === NULL)){ $output['kitchen_8_5_1_H'] = "empty"; }else{ $output['kitchen_8_5_1_H'] = $row['kitchen_8_5_1_H']; }
			if(($row['kitchen_8_5_1_I'] == "") || ($row['kitchen_8_5_1_I'] === NULL)){ $output['kitchen_8_5_1_I'] = "empty"; }else{ $output['kitchen_8_5_1_I'] = $row['kitchen_8_5_1_I']; }
			$output['kitchen_8_5_1_text'] = $row['kitchen_8_5_1_text'];
			if(($row['kitchen_8_6_1_A'] == "") || ($row['kitchen_8_6_1_A'] === NULL)){ $output['kitchen_8_6_1_A'] = "empty"; }else{ $output['kitchen_8_6_1_A'] = $row['kitchen_8_6_1_A']; }
			if(($row['kitchen_8_6_1_B'] == "") || ($row['kitchen_8_6_1_B'] === NULL)){ $output['kitchen_8_6_1_B'] = "empty"; }else{ $output['kitchen_8_6_1_B'] = $row['kitchen_8_6_1_B']; }
			if(($row['kitchen_8_6_1_C'] == "") || ($row['kitchen_8_6_1_C'] === NULL)){ $output['kitchen_8_6_1_C'] = "empty"; }else{ $output['kitchen_8_6_1_C'] = $row['kitchen_8_6_1_C']; }
			if(($row['kitchen_8_6_1_D'] == "") || ($row['kitchen_8_6_1_D'] === NULL)){ $output['kitchen_8_6_1_D'] = "empty"; }else{ $output['kitchen_8_6_1_D'] = $row['kitchen_8_6_1_D']; }
			if(($row['kitchen_8_6_1_E'] == "") || ($row['kitchen_8_6_1_E'] === NULL)){ $output['kitchen_8_6_1_E'] = "empty"; }else{ $output['kitchen_8_6_1_E'] = $row['kitchen_8_6_1_E']; }
			if(($row['kitchen_8_6_1_F'] == "") || ($row['kitchen_8_6_1_F'] === NULL)){ $output['kitchen_8_6_1_F'] = "empty"; }else{ $output['kitchen_8_6_1_F'] = $row['kitchen_8_6_1_F']; }
			if(($row['kitchen_8_6_1_G'] == "") || ($row['kitchen_8_6_1_G'] === NULL)){ $output['kitchen_8_6_1_G'] = "empty"; }else{ $output['kitchen_8_6_1_G'] = $row['kitchen_8_6_1_G']; }
			$output['kitchen_8_6_1_text'] = $row['kitchen_8_6_1_text'];
			if(($row['kitchen_8_7_1_A'] == "") || ($row['kitchen_8_7_1_A'] === NULL)){ $output['kitchen_8_7_1_A'] = "empty"; }else{ $output['kitchen_8_7_1_A'] = $row['kitchen_8_7_1_A']; }
			if(($row['kitchen_8_7_1_B'] == "") || ($row['kitchen_8_7_1_B'] === NULL)){ $output['kitchen_8_7_1_B'] = "empty"; }else{ $output['kitchen_8_7_1_B'] = $row['kitchen_8_7_1_B']; }
			if(($row['kitchen_8_7_1_C'] == "") || ($row['kitchen_8_7_1_C'] === NULL)){ $output['kitchen_8_7_1_C'] = "empty"; }else{ $output['kitchen_8_7_1_C'] = $row['kitchen_8_7_1_C']; }
			if(($row['kitchen_8_7_1_D'] == "") || ($row['kitchen_8_7_1_D'] === NULL)){ $output['kitchen_8_7_1_D'] = "empty"; }else{ $output['kitchen_8_7_1_D'] = $row['kitchen_8_7_1_D']; }
			if(($row['kitchen_8_7_1_E'] == "") || ($row['kitchen_8_7_1_E'] === NULL)){ $output['kitchen_8_7_1_E'] = "empty"; }else{ $output['kitchen_8_7_1_E'] = $row['kitchen_8_7_1_E']; }
			$output['kitchen_8_7_1_text'] = $row['kitchen_8_7_1_text'];
			if(($row['kitchen_8_8_1_A'] == "") || ($row['kitchen_8_8_1_A'] === NULL)){ $output['kitchen_8_8_1_A'] = "empty"; }else{ $output['kitchen_8_8_1_A'] = $row['kitchen_8_8_1_A']; }
			if(($row['kitchen_8_8_1_B'] == "") || ($row['kitchen_8_8_1_B'] === NULL)){ $output['kitchen_8_8_1_B'] = "empty"; }else{ $output['kitchen_8_8_1_B'] = $row['kitchen_8_8_1_B']; }
			if(($row['kitchen_8_8_1_C_a'] == "") || ($row['kitchen_8_8_1_C_a'] === NULL)){ $output['kitchen_8_8_1_C_a'] = "empty"; }else{ $output['kitchen_8_8_1_C_a'] = $row['kitchen_8_8_1_C_a']; }
			if(($row['kitchen_8_8_1_C_b'] == "") || ($row['kitchen_8_8_1_C_b'] === NULL)){ $output['kitchen_8_8_1_C_b'] = "empty"; }else{ $output['kitchen_8_8_1_C_b'] = $row['kitchen_8_8_1_C_b']; }
			if(($row['kitchen_8_8_1_D'] == "") || ($row['kitchen_8_8_1_D'] === NULL)){ $output['kitchen_8_8_1_D'] = "empty"; }else{ $output['kitchen_8_8_1_D'] = $row['kitchen_8_8_1_D']; }
			if(($row['kitchen_8_8_1_E'] == "") || ($row['kitchen_8_8_1_E'] === NULL)){ $output['kitchen_8_8_1_E'] = "empty"; }else{ $output['kitchen_8_8_1_E'] = $row['kitchen_8_8_1_E']; }
			$output['kitchen_8_8_1_text'] = $row['kitchen_8_8_1_text'];
			if(($row['kitchen_8_9_1_A'] == "") || ($row['kitchen_8_9_1_A'] === NULL)){ $output['kitchen_8_9_1_A'] = "empty"; }else{ $output['kitchen_8_9_1_A'] = $row['kitchen_8_9_1_A']; }
			if(($row['kitchen_8_9_1_B'] == "") || ($row['kitchen_8_9_1_B'] === NULL)){ $output['kitchen_8_9_1_B'] = "empty"; }else{ $output['kitchen_8_9_1_B'] = $row['kitchen_8_9_1_B']; }
			if(($row['kitchen_8_9_1_C'] == "") || ($row['kitchen_8_9_1_C'] === NULL)){ $output['kitchen_8_9_1_C'] = "empty"; }else{ $output['kitchen_8_9_1_C'] = $row['kitchen_8_9_1_C']; }
			if(($row['kitchen_8_9_1_D'] == "") || ($row['kitchen_8_9_1_D'] === NULL)){ $output['kitchen_8_9_1_D'] = "empty"; }else{ $output['kitchen_8_9_1_D'] = $row['kitchen_8_9_1_D']; }
			if(($row['kitchen_8_9_1_E'] == "") || ($row['kitchen_8_9_1_E'] === NULL)){ $output['kitchen_8_9_1_E'] = "empty"; }else{ $output['kitchen_8_9_1_E'] = $row['kitchen_8_9_1_E']; }
			$output['kitchen_8_9_1_text'] = $row['kitchen_8_9_1_text'];
			if(($row['kitchen_8_10_1_A_a'] == "") || ($row['kitchen_8_10_1_A_a'] === NULL)){ $output['kitchen_8_10_1_A_a'] = "empty"; }else{ $output['kitchen_8_10_1_A_a'] = $row['kitchen_8_10_1_A_a']; }
			if(($row['kitchen_8_10_1_A_b'] == "") || ($row['kitchen_8_10_1_A_b'] === NULL)){ $output['kitchen_8_10_1_A_b'] = "empty"; }else{ $output['kitchen_8_10_1_A_b'] = $row['kitchen_8_10_1_A_b']; }
			if(($row['kitchen_8_10_1_A_c'] == "") || ($row['kitchen_8_10_1_A_c'] === NULL)){ $output['kitchen_8_10_1_A_c'] = "empty"; }else{ $output['kitchen_8_10_1_A_c'] = $row['kitchen_8_10_1_A_c']; }
			if(($row['kitchen_8_10_1_A_d'] == "") || ($row['kitchen_8_10_1_A_d'] === NULL)){ $output['kitchen_8_10_1_A_d'] = "empty"; }else{ $output['kitchen_8_10_1_A_d'] = $row['kitchen_8_10_1_A_d']; }
			if(($row['kitchen_8_10_1_B'] == "") || ($row['kitchen_8_10_1_B'] === NULL)){ $output['kitchen_8_10_1_B'] = "empty"; }else{ $output['kitchen_8_10_1_B'] = $row['kitchen_8_10_1_B']; }
			if(($row['kitchen_8_10_1_C'] == "") || ($row['kitchen_8_10_1_C'] === NULL)){ $output['kitchen_8_10_1_C'] = "empty"; }else{ $output['kitchen_8_10_1_C'] = $row['kitchen_8_10_1_C']; }
			if(($row['kitchen_8_10_1_D'] == "") || ($row['kitchen_8_10_1_D'] === NULL)){ $output['kitchen_8_10_1_D'] = "empty"; }else{ $output['kitchen_8_10_1_D'] = $row['kitchen_8_10_1_D']; }
			if(($row['kitchen_8_10_1_E'] == "") || ($row['kitchen_8_10_1_E'] === NULL)){ $output['kitchen_8_10_1_E'] = "empty"; }else{ $output['kitchen_8_10_1_E'] = $row['kitchen_8_10_1_E']; }
			if(($row['kitchen_8_10_1_F'] == "") || ($row['kitchen_8_10_1_F'] === NULL)){ $output['kitchen_8_10_1_F'] = "empty"; }else{ $output['kitchen_8_10_1_F'] = $row['kitchen_8_10_1_F']; }
			if(($row['kitchen_8_10_1_G'] == "") || ($row['kitchen_8_10_1_G'] === NULL)){ $output['kitchen_8_10_1_G'] = "empty"; }else{ $output['kitchen_8_10_1_G'] = $row['kitchen_8_10_1_G']; }
			$output['kitchen_8_10_1_text'] = $row['kitchen_8_10_1_text'];
			if(($row['kitchen_8_11_1_A_a'] == "") || ($row['kitchen_8_11_1_A_a'] === NULL)){ $output['kitchen_8_11_1_A_a'] = "empty"; }else{ $output['kitchen_8_11_1_A_a'] = $row['kitchen_8_11_1_A_a']; }
			if(($row['kitchen_8_11_1_A_b'] == "") || ($row['kitchen_8_11_1_A_b'] === NULL)){ $output['kitchen_8_11_1_A_b'] = "empty"; }else{ $output['kitchen_8_11_1_A_b'] = $row['kitchen_8_11_1_A_b']; }
			if(($row['kitchen_8_11_1_A_c'] == "") || ($row['kitchen_8_11_1_A_c'] === NULL)){ $output['kitchen_8_11_1_A_c'] = "empty"; }else{ $output['kitchen_8_11_1_A_c'] = $row['kitchen_8_11_1_A_c']; }
			if(($row['kitchen_8_11_1_B'] == "") || ($row['kitchen_8_11_1_B'] === NULL)){ $output['kitchen_8_11_1_B'] = "empty"; }else{ $output['kitchen_8_11_1_B'] = $row['kitchen_8_11_1_B']; }
			if(($row['kitchen_8_11_1_C_a'] == "") || ($row['kitchen_8_11_1_C_a'] === NULL)){ $output['kitchen_8_11_1_C_a'] = "empty"; }else{ $output['kitchen_8_11_1_C_a'] = $row['kitchen_8_11_1_C_a']; }
			if(($row['kitchen_8_11_1_C_b'] == "") || ($row['kitchen_8_11_1_C_b'] === NULL)){ $output['kitchen_8_11_1_C_b'] = "empty"; }else{ $output['kitchen_8_11_1_C_b'] = $row['kitchen_8_11_1_C_b']; }
			if(($row['kitchen_8_11_1_C_c'] == "") || ($row['kitchen_8_11_1_C_c'] === NULL)){ $output['kitchen_8_11_1_C_c'] = "empty"; }else{ $output['kitchen_8_11_1_C_c'] = $row['kitchen_8_11_1_C_c']; }
			if(($row['kitchen_8_11_1_C_d'] == "") || ($row['kitchen_8_11_1_C_d'] === NULL)){ $output['kitchen_8_11_1_C_d'] = "empty"; }else{ $output['kitchen_8_11_1_C_d'] = $row['kitchen_8_11_1_C_d']; }
			if(($row['kitchen_8_11_1_C_e'] == "") || ($row['kitchen_8_11_1_C_e'] === NULL)){ $output['kitchen_8_11_1_C_e'] = "empty"; }else{ $output['kitchen_8_11_1_C_e'] = $row['kitchen_8_11_1_C_e']; }
			if(($row['kitchen_8_11_1_D_a'] == "") || ($row['kitchen_8_11_1_D_a'] === NULL)){ $output['kitchen_8_11_1_D_a'] = "empty"; }else{ $output['kitchen_8_11_1_D_a'] = $row['kitchen_8_11_1_D_a']; }
			if(($row['kitchen_8_11_1_D_b'] == "") || ($row['kitchen_8_11_1_D_b'] === NULL)){ $output['kitchen_8_11_1_D_b'] = "empty"; }else{ $output['kitchen_8_11_1_D_b'] = $row['kitchen_8_11_1_D_b']; }
			if(($row['kitchen_8_11_1_E'] == "") || ($row['kitchen_8_11_1_E'] === NULL)){ $output['kitchen_8_11_1_E'] = "empty"; }else{ $output['kitchen_8_11_1_E'] = $row['kitchen_8_11_1_E']; }
			if(($row['kitchen_8_11_1_F'] == "") || ($row['kitchen_8_11_1_F'] === NULL)){ $output['kitchen_8_11_1_F'] = "empty"; }else{ $output['kitchen_8_11_1_F'] = $row['kitchen_8_11_1_F']; }
			$output['kitchen_8_11_1_text'] = $row['kitchen_8_11_1_text'];
			if(($row['kitchen_8_12_1_A'] == "") || ($row['kitchen_8_12_1_A'] === NULL)){ $output['kitchen_8_12_1_A'] = "empty"; }else{ $output['kitchen_8_12_1_A'] = $row['kitchen_8_12_1_A']; }
			if(($row['kitchen_8_12_1_B'] == "") || ($row['kitchen_8_12_1_B'] === NULL)){ $output['kitchen_8_12_1_B'] = "empty"; }else{ $output['kitchen_8_12_1_B'] = $row['kitchen_8_12_1_B']; }
			if(($row['kitchen_8_12_1_C'] == "") || ($row['kitchen_8_12_1_C'] === NULL)){ $output['kitchen_8_12_1_C'] = "empty"; }else{ $output['kitchen_8_12_1_C'] = $row['kitchen_8_12_1_C']; }
			$output['kitchen_8_12_1_text'] = $row['kitchen_8_12_1_text'];
			
			//GUEST ROOMS
			
			if(($row['guest_rooms_9_1_1_A'] == "") || ($row['guest_rooms_9_1_1_A'] === NULL)){ $output['guest_rooms_9_1_1_A'] = "empty"; }else{ $output['guest_rooms_9_1_1_A'] = $row['guest_rooms_9_1_1_A']; }
			$output['guest_rooms_9_1_1_text'] = $row['guest_rooms_9_1_1_text']; 
			if(($row['guest_rooms_9_2_1_A'] == "") || ($row['guest_rooms_9_2_1_A'] === NULL)){ $output['guest_rooms_9_2_1_A'] = "empty"; }else{ $output['guest_rooms_9_2_1_A'] = $row['guest_rooms_9_2_1_A']; }
			if(($row['guest_rooms_9_2_1_B'] == "") || ($row['guest_rooms_9_2_1_B'] === NULL)){ $output['guest_rooms_9_2_1_B'] = "empty"; }else{ $output['guest_rooms_9_2_1_B'] = $row['guest_rooms_9_2_1_B']; }
			$output['guest_rooms_9_2_1_text'] = $row['guest_rooms_9_2_1_text']; 
			if(($row['guest_rooms_9_3_1_A'] == "") || ($row['guest_rooms_9_3_1_A'] === NULL)){ $output['guest_rooms_9_3_1_A'] = "empty"; }else{ $output['guest_rooms_9_3_1_A'] = $row['guest_rooms_9_3_1_A']; }
			if(($row['guest_rooms_9_3_1_B'] == "") || ($row['guest_rooms_9_3_1_B'] === NULL)){ $output['guest_rooms_9_3_1_B'] = "empty"; }else{ $output['guest_rooms_9_3_1_B'] = $row['guest_rooms_9_3_1_B']; }
			$output['guest_rooms_9_3_1_text'] = $row['guest_rooms_9_3_1_text']; 
			if(($row['guest_rooms_9_4_1_A'] == "") || ($row['guest_rooms_9_4_1_A'] === NULL)){ $output['guest_rooms_9_4_1_A'] = "empty"; }else{ $output['guest_rooms_9_4_1_A'] = $row['guest_rooms_9_4_1_A']; }
			//$output['guest_rooms_9_4_1_A'] = 5;
			if(($row['guest_rooms_9_4_1_B_a'] == "") || ($row['guest_rooms_9_4_1_B_a'] === NULL)){ $output['guest_rooms_9_4_1_B_a'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_a'] = $row['guest_rooms_9_4_1_B_a']; }
			if(($row['guest_rooms_9_4_1_B_b'] == "") || ($row['guest_rooms_9_4_1_B_b'] === NULL)){ $output['guest_rooms_9_4_1_B_b'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_b'] = $row['guest_rooms_9_4_1_B_b']; }
			if(($row['guest_rooms_9_4_1_B_c'] == "") || ($row['guest_rooms_9_4_1_B_c'] === NULL)){ $output['guest_rooms_9_4_1_B_c'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_c'] = $row['guest_rooms_9_4_1_B_c']; }
			if(($row['guest_rooms_9_4_1_B_d'] == "") || ($row['guest_rooms_9_4_1_B_d'] === NULL)){ $output['guest_rooms_9_4_1_B_d'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_d'] = $row['guest_rooms_9_4_1_B_d']; }
			if(($row['guest_rooms_9_4_1_B_e'] == "") || ($row['guest_rooms_9_4_1_B_e'] === NULL)){ $output['guest_rooms_9_4_1_B_e'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_e'] = $row['guest_rooms_9_4_1_B_e']; }
			if(($row['guest_rooms_9_4_1_B_f'] == "") || ($row['guest_rooms_9_4_1_B_f'] === NULL)){ $output['guest_rooms_9_4_1_B_f'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_f'] = $row['guest_rooms_9_4_1_B_f']; }
			if(($row['guest_rooms_9_4_1_B_g'] == "") || ($row['guest_rooms_9_4_1_B_g'] === NULL)){ $output['guest_rooms_9_4_1_B_g'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_g'] = $row['guest_rooms_9_4_1_B_g']; }
			if(($row['guest_rooms_9_4_1_B_h'] == "") || ($row['guest_rooms_9_4_1_B_h'] === NULL)){ $output['guest_rooms_9_4_1_B_h'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_h'] = $row['guest_rooms_9_4_1_B_h']; }
			if(($row['guest_rooms_9_4_1_B_i'] == "") || ($row['guest_rooms_9_4_1_B_i'] === NULL)){ $output['guest_rooms_9_4_1_B_i'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_i'] = $row['guest_rooms_9_4_1_B_i']; }
			if(($row['guest_rooms_9_4_1_B_j'] == "") || ($row['guest_rooms_9_4_1_B_j'] === NULL)){ $output['guest_rooms_9_4_1_B_j'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_j'] = $row['guest_rooms_9_4_1_B_j']; }
			if(($row['guest_rooms_9_4_1_B_k'] == "") || ($row['guest_rooms_9_4_1_B_k'] === NULL)){ $output['guest_rooms_9_4_1_B_k'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_k'] = $row['guest_rooms_9_4_1_B_k']; }
			if(($row['guest_rooms_9_4_1_B_l'] == "") || ($row['guest_rooms_9_4_1_B_l'] === NULL)){ $output['guest_rooms_9_4_1_B_l'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_l'] = $row['guest_rooms_9_4_1_B_l']; }
			if(($row['guest_rooms_9_4_1_B_m'] == "") || ($row['guest_rooms_9_4_1_B_m'] === NULL)){ $output['guest_rooms_9_4_1_B_m'] = "empty"; }else{ $output['guest_rooms_9_4_1_B_m'] = $row['guest_rooms_9_4_1_B_m']; }
			if(($row['guest_rooms_9_4_1_C'] == "") || ($row['guest_rooms_9_4_1_C'] === NULL)){ $output['guest_rooms_9_4_1_C'] = "empty"; }else{ $output['guest_rooms_9_4_1_C'] = $row['guest_rooms_9_4_1_C']; }
			if(($row['guest_rooms_9_4_1_D'] == "") || ($row['guest_rooms_9_4_1_D'] === NULL)){ $output['guest_rooms_9_4_1_D'] = "empty"; }else{ $output['guest_rooms_9_4_1_D'] = $row['guest_rooms_9_4_1_D']; }
			if(($row['guest_rooms_9_4_1_E'] == "") || ($row['guest_rooms_9_4_1_E'] === NULL)){ $output['guest_rooms_9_4_1_E'] = "empty"; }else{ $output['guest_rooms_9_4_1_E'] = $row['guest_rooms_9_4_1_E']; }
			if(($row['guest_rooms_9_4_1_F'] == "") || ($row['guest_rooms_9_4_1_F'] === NULL)){ $output['guest_rooms_9_4_1_F'] = "empty"; }else{ $output['guest_rooms_9_4_1_F'] = $row['guest_rooms_9_4_1_F']; }
			if(($row['guest_rooms_9_4_1_G'] == "") || ($row['guest_rooms_9_4_1_G'] === NULL)){ $output['guest_rooms_9_4_1_G'] = "empty"; }else{ $output['guest_rooms_9_4_1_G'] = $row['guest_rooms_9_4_1_G']; }
			$output['guest_rooms_9_4_1_text'] = $row['guest_rooms_9_4_1_text']; 
			if(($row['guest_rooms_9_5_1_A'] == "") || ($row['guest_rooms_9_5_1_A'] === NULL)){ $output['guest_rooms_9_5_1_A'] = "empty"; }else{ $output['guest_rooms_9_5_1_A'] = $row['guest_rooms_9_5_1_A']; }
			if(($row['guest_rooms_9_5_1_B_a'] == "") || ($row['guest_rooms_9_5_1_B_a'] === NULL)){ $output['guest_rooms_9_5_1_B_a'] = "empty"; }else{ $output['guest_rooms_9_5_1_B_a'] = $row['guest_rooms_9_5_1_B_a']; }
			if(($row['guest_rooms_9_5_1_B_b'] == "") || ($row['guest_rooms_9_5_1_B_b'] === NULL)){ $output['guest_rooms_9_5_1_B_b'] = "empty"; }else{ $output['guest_rooms_9_5_1_B_b'] = $row['guest_rooms_9_5_1_B_b']; }
			if(($row['guest_rooms_9_5_1_B_c'] == "") || ($row['guest_rooms_9_5_1_B_c'] === NULL)){ $output['guest_rooms_9_5_1_B_c'] = "empty"; }else{ $output['guest_rooms_9_5_1_B_c'] = $row['guest_rooms_9_5_1_B_c']; }
			if(($row['guest_rooms_9_5_1_B_d'] == "") || ($row['guest_rooms_9_5_1_B_d'] === NULL)){ $output['guest_rooms_9_5_1_B_d'] = "empty"; }else{ $output['guest_rooms_9_5_1_B_d'] = $row['guest_rooms_9_5_1_B_d']; }
			if(($row['guest_rooms_9_5_1_B_e'] == "") || ($row['guest_rooms_9_5_1_B_e'] === NULL)){ $output['guest_rooms_9_5_1_B_e'] = "empty"; }else{ $output['guest_rooms_9_5_1_B_e'] = $row['guest_rooms_9_5_1_B_e']; }
			if(($row['guest_rooms_9_5_1_C'] == "") || ($row['guest_rooms_9_5_1_C'] === NULL)){ $output['guest_rooms_9_5_1_C'] = "empty"; }else{ $output['guest_rooms_9_5_1_C'] = $row['guest_rooms_9_5_1_C']; }
			if(($row['guest_rooms_9_5_1_D'] == "") || ($row['guest_rooms_9_5_1_D'] === NULL)){ $output['guest_rooms_9_5_1_D'] = "empty"; }else{ $output['guest_rooms_9_5_1_D'] = $row['guest_rooms_9_5_1_D']; }
			$output['guest_rooms_9_5_1_text'] = $row['guest_rooms_9_5_1_text']; 
			if(($row['guest_rooms_9_6_1_A'] == "") || ($row['guest_rooms_9_6_1_A'] === NULL)){ $output['guest_rooms_9_6_1_A'] = "empty"; }else{ $output['guest_rooms_9_6_1_A'] = $row['guest_rooms_9_6_1_A']; }
			if(($row['guest_rooms_9_6_1_B'] == "") || ($row['guest_rooms_9_6_1_B'] === NULL)){ $output['guest_rooms_9_6_1_B'] = "empty"; }else{ $output['guest_rooms_9_6_1_B'] = $row['guest_rooms_9_6_1_B']; }
			$output['guest_rooms_9_6_1_text'] = $row['guest_rooms_9_6_1_text']; 
			if(($row['guest_rooms_9_7_1_A'] == "") || ($row['guest_rooms_9_7_1_A'] === NULL)){ $output['guest_rooms_9_7_1_A'] = "empty"; }else{ $output['guest_rooms_9_7_1_A'] = $row['guest_rooms_9_7_1_A']; }
			if(($row['guest_rooms_9_7_1_B'] == "") || ($row['guest_rooms_9_7_1_B'] === NULL)){ $output['guest_rooms_9_7_1_B'] = "empty"; }else{ $output['guest_rooms_9_7_1_B'] = $row['guest_rooms_9_7_1_B']; }
			if(($row['guest_rooms_9_7_1_C'] == "") || ($row['guest_rooms_9_7_1_C'] === NULL)){ $output['guest_rooms_9_7_1_C'] = "empty"; }else{ $output['guest_rooms_9_7_1_C'] = $row['guest_rooms_9_7_1_C']; }
			if(($row['guest_rooms_9_7_1_D'] == "") || ($row['guest_rooms_9_7_1_D'] === NULL)){ $output['guest_rooms_9_7_1_D'] = "empty"; }else{ $output['guest_rooms_9_7_1_D'] = $row['guest_rooms_9_7_1_D']; }
			if(($row['guest_rooms_9_7_1_E'] == "") || ($row['guest_rooms_9_7_1_E'] === NULL)){ $output['guest_rooms_9_7_1_E'] = "empty"; }else{ $output['guest_rooms_9_7_1_E'] = $row['guest_rooms_9_7_1_E']; }
			$output['guest_rooms_9_7_1_text'] = $row['guest_rooms_9_7_1_text']; 
			if(($row['guest_rooms_9_8_1_A'] == "") || ($row['guest_rooms_9_8_1_A'] === NULL)){ $output['guest_rooms_9_8_1_A'] = "empty"; }else{ $output['guest_rooms_9_8_1_A'] = $row['guest_rooms_9_8_1_A']; }
			if(($row['guest_rooms_9_8_1_B'] == "") || ($row['guest_rooms_9_8_1_B'] === NULL)){ $output['guest_rooms_9_8_1_B'] = "empty"; }else{ $output['guest_rooms_9_8_1_B'] = $row['guest_rooms_9_8_1_B']; }
			if(($row['guest_rooms_9_8_1_C'] == "") || ($row['guest_rooms_9_8_1_C'] === NULL)){ $output['guest_rooms_9_8_1_C'] = "empty"; }else{ $output['guest_rooms_9_8_1_C'] = $row['guest_rooms_9_8_1_C']; }
			if(($row['guest_rooms_9_8_1_D'] == "") || ($row['guest_rooms_9_8_1_D'] === NULL)){ $output['guest_rooms_9_8_1_D'] = "empty"; }else{ $output['guest_rooms_9_8_1_D'] = $row['guest_rooms_9_8_1_D']; }
			if(($row['guest_rooms_9_8_1_E'] == "") || ($row['guest_rooms_9_8_1_E'] === NULL)){ $output['guest_rooms_9_8_1_E'] = "empty"; }else{ $output['guest_rooms_9_8_1_E'] = $row['guest_rooms_9_8_1_E']; }
			$output['guest_rooms_9_8_1_text'] = $row['guest_rooms_9_8_1_text']; 
			if(($row['guest_rooms_9_9_1_A'] == "") || ($row['guest_rooms_9_9_1_A'] === NULL)){ $output['guest_rooms_9_9_1_A'] = "empty"; }else{ $output['guest_rooms_9_9_1_A'] = $row['guest_rooms_9_9_1_A']; }
			if(($row['guest_rooms_9_9_1_B_a'] == "") || ($row['guest_rooms_9_9_1_B_a'] === NULL)){ $output['guest_rooms_9_9_1_B_a'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_a'] = $row['guest_rooms_9_9_1_B_a']; }
			if(($row['guest_rooms_9_9_1_B_b'] == "") || ($row['guest_rooms_9_9_1_B_b'] === NULL)){ $output['guest_rooms_9_9_1_B_b'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_b'] = $row['guest_rooms_9_9_1_B_b']; }
			if(($row['guest_rooms_9_9_1_B_c'] == "") || ($row['guest_rooms_9_9_1_B_c'] === NULL)){ $output['guest_rooms_9_9_1_B_c'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_c'] = $row['guest_rooms_9_9_1_B_c']; }
			if(($row['guest_rooms_9_9_1_B_d'] == "") || ($row['guest_rooms_9_9_1_B_d'] === NULL)){ $output['guest_rooms_9_9_1_B_d'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_d'] = $row['guest_rooms_9_9_1_B_d']; }
			if(($row['guest_rooms_9_9_1_B_e'] == "") || ($row['guest_rooms_9_9_1_B_e'] === NULL)){ $output['guest_rooms_9_9_1_B_e'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_e'] = $row['guest_rooms_9_9_1_B_e']; }
			if(($row['guest_rooms_9_9_1_B_f'] == "") || ($row['guest_rooms_9_9_1_B_f'] === NULL)){ $output['guest_rooms_9_9_1_B_f'] = "empty"; }else{ $output['guest_rooms_9_9_1_B_f'] = $row['guest_rooms_9_9_1_B_f']; }
			if(($row['guest_rooms_9_9_1_C_a'] == "") || ($row['guest_rooms_9_9_1_C_a'] === NULL)){ $output['guest_rooms_9_9_1_C_a'] = "empty"; }else{ $output['guest_rooms_9_9_1_C_a'] = $row['guest_rooms_9_9_1_C_a']; }
			if(($row['guest_rooms_9_9_1_C_b'] == "") || ($row['guest_rooms_9_9_1_C_b'] === NULL)){ $output['guest_rooms_9_9_1_C_b'] = "empty"; }else{ $output['guest_rooms_9_9_1_C_b'] = $row['guest_rooms_9_9_1_C_b']; }
			if(($row['guest_rooms_9_9_1_D'] == "") || ($row['guest_rooms_9_9_1_D'] === NULL)){ $output['guest_rooms_9_9_1_D'] = "empty"; }else{ $output['guest_rooms_9_9_1_D'] = $row['guest_rooms_9_9_1_D']; }
			$output['guest_rooms_9_9_1_text'] = $row['guest_rooms_9_9_1_text']; 
			if(($row['guest_rooms_9_10_1_A'] == "") || ($row['guest_rooms_9_10_1_A'] === NULL)){ $output['guest_rooms_9_10_1_A'] = "empty"; }else{ $output['guest_rooms_9_10_1_A'] = $row['guest_rooms_9_10_1_A']; }
			if(($row['guest_rooms_9_10_1_B'] == "") || ($row['guest_rooms_9_10_1_B'] === NULL)){ $output['guest_rooms_9_10_1_B'] = "empty"; }else{ $output['guest_rooms_9_10_1_B'] = $row['guest_rooms_9_10_1_B']; }
			$output['guest_rooms_9_10_1_text'] = $row['guest_rooms_9_10_1_text']; 
			if(($row['guest_rooms_9_11_1_A_a'] == "") || ($row['guest_rooms_9_11_1_A_a'] === NULL)){ $output['guest_rooms_9_11_1_A_a'] = "empty"; }else{ $output['guest_rooms_9_11_1_A_a'] = $row['guest_rooms_9_11_1_A_a']; }
			if(($row['guest_rooms_9_11_1_A_b'] == "") || ($row['guest_rooms_9_11_1_A_b'] === NULL)){ $output['guest_rooms_9_11_1_A_b'] = "empty"; }else{ $output['guest_rooms_9_11_1_A_b'] = $row['guest_rooms_9_11_1_A_b']; }
			if(($row['guest_rooms_9_11_1_A_c'] == "") || ($row['guest_rooms_9_11_1_A_c'] === NULL)){ $output['guest_rooms_9_11_1_A_c'] = "empty"; }else{ $output['guest_rooms_9_11_1_A_c'] = $row['guest_rooms_9_11_1_A_c']; }
			if(($row['guest_rooms_9_11_1_A_d'] == "") || ($row['guest_rooms_9_11_1_A_d'] === NULL)){ $output['guest_rooms_9_11_1_A_d'] = "empty"; }else{ $output['guest_rooms_9_11_1_A_d'] = $row['guest_rooms_9_11_1_A_d']; }
			if(($row['guest_rooms_9_11_1_A_e'] == "") || ($row['guest_rooms_9_11_1_A_e'] === NULL)){ $output['guest_rooms_9_11_1_A_e'] = "empty"; }else{ $output['guest_rooms_9_11_1_A_e'] = $row['guest_rooms_9_11_1_A_e']; }
			if(($row['guest_rooms_9_11_1_B_a'] == "") || ($row['guest_rooms_9_11_1_B_a'] === NULL)){ $output['guest_rooms_9_11_1_B_a'] = "empty"; }else{ $output['guest_rooms_9_11_1_B_a'] = $row['guest_rooms_9_11_1_B_a']; }
			if(($row['guest_rooms_9_11_1_B_b'] == "") || ($row['guest_rooms_9_11_1_B_b'] === NULL)){ $output['guest_rooms_9_11_1_B_b'] = "empty"; }else{ $output['guest_rooms_9_11_1_B_b'] = $row['guest_rooms_9_11_1_B_b']; }
			if(($row['guest_rooms_9_11_1_B'] == "") || ($row['guest_rooms_9_11_1_B'] === NULL)){ $output['guest_rooms_9_11_1_B'] = "empty"; }else{ $output['guest_rooms_9_11_1_B'] = $row['guest_rooms_9_11_1_B']; }
			if(($row['guest_rooms_9_11_1_C'] == "") || ($row['guest_rooms_9_11_1_C'] === NULL)){ $output['guest_rooms_9_11_1_C'] = "empty"; }else{ $output['guest_rooms_9_11_1_C'] = $row['guest_rooms_9_11_1_C']; }
			$output['guest_rooms_9_11_1_text'] = $row['guest_rooms_9_11_1_text']; 
			if(($row['guest_rooms_9_12_1_A'] == "") || ($row['guest_rooms_9_12_1_A'] === NULL)){ $output['guest_rooms_9_12_1_A'] = "empty"; }else{ $output['guest_rooms_9_12_1_A'] = $row['guest_rooms_9_12_1_A']; }
			if(($row['guest_rooms_9_12_1_B'] == "") || ($row['guest_rooms_9_12_1_B'] === NULL)){ $output['guest_rooms_9_12_1_B'] = "empty"; }else{ $output['guest_rooms_9_12_1_B'] = $row['guest_rooms_9_12_1_B']; }
			if(($row['guest_rooms_9_12_1_C'] == "") || ($row['guest_rooms_9_12_1_C'] === NULL)){ $output['guest_rooms_9_12_1_C'] = "empty"; }else{ $output['guest_rooms_9_12_1_C'] = $row['guest_rooms_9_12_1_C']; }
			if(($row['guest_rooms_9_12_1_D'] == "") || ($row['guest_rooms_9_12_1_D'] === NULL)){ $output['guest_rooms_9_12_1_D'] = "empty"; }else{ $output['guest_rooms_9_12_1_D'] = $row['guest_rooms_9_12_1_D']; }
			if(($row['guest_rooms_9_12_1_E'] == "") || ($row['guest_rooms_9_12_1_E'] === NULL)){ $output['guest_rooms_9_12_1_E'] = "empty"; }else{ $output['guest_rooms_9_12_1_E'] = $row['guest_rooms_9_12_1_E']; }
			if(($row['guest_rooms_9_12_1_F'] == "") || ($row['guest_rooms_9_12_1_F'] === NULL)){ $output['guest_rooms_9_12_1_F'] = "empty"; }else{ $output['guest_rooms_9_12_1_F'] = $row['guest_rooms_9_12_1_F']; }
			if(($row['guest_rooms_9_12_1_G'] == "") || ($row['guest_rooms_9_12_1_G'] === NULL)){ $output['guest_rooms_9_12_1_G'] = "empty"; }else{ $output['guest_rooms_9_12_1_G'] = $row['guest_rooms_9_12_1_G']; }
			$output['guest_rooms_9_12_1_text'] = $row['guest_rooms_9_12_1_text']; 
			if(($row['guest_rooms_9_13_1_A'] == "") || ($row['guest_rooms_9_13_1_A'] === NULL)){ $output['guest_rooms_9_13_1_A'] = "empty"; }else{ $output['guest_rooms_9_13_1_A'] = $row['guest_rooms_9_13_1_A']; }
			if(($row['guest_rooms_9_13_1_B'] == "") || ($row['guest_rooms_9_13_1_B'] === NULL)){ $output['guest_rooms_9_13_1_B'] = "empty"; }else{ $output['guest_rooms_9_13_1_B'] = $row['guest_rooms_9_13_1_B']; }
			if(($row['guest_rooms_9_13_1_C'] == "") || ($row['guest_rooms_9_13_1_C'] === NULL)){ $output['guest_rooms_9_13_1_C'] = "empty"; }else{ $output['guest_rooms_9_13_1_C'] = $row['guest_rooms_9_13_1_C']; }
			$output['guest_rooms_9_13_1_text'] = $row['guest_rooms_9_13_1_text']; 
			if(($row['guest_rooms_9_14_1_A'] == "") || ($row['guest_rooms_9_14_1_A'] === NULL)){ $output['guest_rooms_9_14_1_A'] = "empty"; }else{ $output['guest_rooms_9_14_1_A'] = $row['guest_rooms_9_14_1_A']; }
			if(($row['guest_rooms_9_14_1_B_a'] == "") || ($row['guest_rooms_9_14_1_B_a'] === NULL)){ $output['guest_rooms_9_14_1_B_a'] = "empty"; }else{ $output['guest_rooms_9_14_1_B_a'] = $row['guest_rooms_9_14_1_B_a']; }
			if(($row['guest_rooms_9_14_1_B_b'] == "") || ($row['guest_rooms_9_14_1_B_b'] === NULL)){ $output['guest_rooms_9_14_1_B_b'] = "empty"; }else{ $output['guest_rooms_9_14_1_B_b'] = $row['guest_rooms_9_14_1_B_b']; }
			if(($row['guest_rooms_9_14_1_B_c'] == "") || ($row['guest_rooms_9_14_1_B_c'] === NULL)){ $output['guest_rooms_9_14_1_B_c'] = "empty"; }else{ $output['guest_rooms_9_14_1_B_c'] = $row['guest_rooms_9_14_1_B_c']; }
			if(($row['guest_rooms_9_14_1_C'] == "") || ($row['guest_rooms_9_14_1_C'] === NULL)){ $output['guest_rooms_9_14_1_C'] = "empty"; }else{ $output['guest_rooms_9_14_1_C'] = $row['guest_rooms_9_14_1_C']; }
			$output['guest_rooms_9_14_1_text'] = $row['guest_rooms_9_14_1_text']; 
			if(($row['guest_rooms_9_15_1_A_a'] == "") || ($row['guest_rooms_9_15_1_A_a'] === NULL)){ $output['guest_rooms_9_15_1_A_a'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_a'] = $row['guest_rooms_9_15_1_A_a']; }
			if(($row['guest_rooms_9_15_1_A_b'] == "") || ($row['guest_rooms_9_15_1_A_b'] === NULL)){ $output['guest_rooms_9_15_1_A_b'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_b'] = $row['guest_rooms_9_15_1_A_b']; }
			if(($row['guest_rooms_9_15_1_A_c'] == "") || ($row['guest_rooms_9_15_1_A_c'] === NULL)){ $output['guest_rooms_9_15_1_A_c'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_c'] = $row['guest_rooms_9_15_1_A_c']; }
			if(($row['guest_rooms_9_15_1_A_d'] == "") || ($row['guest_rooms_9_15_1_A_d'] === NULL)){ $output['guest_rooms_9_15_1_A_d'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_d'] = $row['guest_rooms_9_15_1_A_d']; }
			if(($row['guest_rooms_9_15_1_A_e'] == "") || ($row['guest_rooms_9_15_1_A_e'] === NULL)){ $output['guest_rooms_9_15_1_A_e'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_e'] = $row['guest_rooms_9_15_1_A_e']; }
			if(($row['guest_rooms_9_15_1_A_f'] == "") || ($row['guest_rooms_9_15_1_A_f'] === NULL)){ $output['guest_rooms_9_15_1_A_f'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_f'] = $row['guest_rooms_9_15_1_A_f']; }
			if(($row['guest_rooms_9_15_1_A_g'] == "") || ($row['guest_rooms_9_15_1_A_g'] === NULL)){ $output['guest_rooms_9_15_1_A_g'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_g'] = $row['guest_rooms_9_15_1_A_g']; }
			if(($row['guest_rooms_9_15_1_A_h'] == "") || ($row['guest_rooms_9_15_1_A_h'] === NULL)){ $output['guest_rooms_9_15_1_A_h'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_h'] = $row['guest_rooms_9_15_1_A_h']; }
			if(($row['guest_rooms_9_15_1_A_i'] == "") || ($row['guest_rooms_9_15_1_A_i'] === NULL)){ $output['guest_rooms_9_15_1_A_i'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_i'] = $row['guest_rooms_9_15_1_A_i']; }
			if(($row['guest_rooms_9_15_1_A_j'] == "") || ($row['guest_rooms_9_15_1_A_j'] === NULL)){ $output['guest_rooms_9_15_1_A_j'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_j'] = $row['guest_rooms_9_15_1_A_j']; }
			if(($row['guest_rooms_9_15_1_A_k'] == "") || ($row['guest_rooms_9_15_1_A_k'] === NULL)){ $output['guest_rooms_9_15_1_A_k'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_k'] = $row['guest_rooms_9_15_1_A_k']; }
			if(($row['guest_rooms_9_15_1_A_l'] == "") || ($row['guest_rooms_9_15_1_A_l'] === NULL)){ $output['guest_rooms_9_15_1_A_l'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_l'] = $row['guest_rooms_9_15_1_A_l']; }
			if(($row['guest_rooms_9_15_1_A_m'] == "") || ($row['guest_rooms_9_15_1_A_m'] === NULL)){ $output['guest_rooms_9_15_1_A_m'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_m'] = $row['guest_rooms_9_15_1_A_m']; }
			if(($row['guest_rooms_9_15_1_A_n'] == "") || ($row['guest_rooms_9_15_1_A_n'] === NULL)){ $output['guest_rooms_9_15_1_A_n'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_n'] = $row['guest_rooms_9_15_1_A_n']; }
			if(($row['guest_rooms_9_15_1_A_o'] == "") || ($row['guest_rooms_9_15_1_A_o'] === NULL)){ $output['guest_rooms_9_15_1_A_o'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_o'] = $row['guest_rooms_9_15_1_A_o']; }
			if(($row['guest_rooms_9_15_1_A_p'] == "") || ($row['guest_rooms_9_15_1_A_p'] === NULL)){ $output['guest_rooms_9_15_1_A_p'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_p'] = $row['guest_rooms_9_15_1_A_p']; }
			if(($row['guest_rooms_9_15_1_A_q'] == "") || ($row['guest_rooms_9_15_1_A_q'] === NULL)){ $output['guest_rooms_9_15_1_A_q'] = "empty"; }else{ $output['guest_rooms_9_15_1_A_q'] = $row['guest_rooms_9_15_1_A_q']; }
			if(($row['guest_rooms_9_15_1_B'] == "") || ($row['guest_rooms_9_15_1_B'] === NULL)){ $output['guest_rooms_9_15_1_B'] = "empty"; }else{ $output['guest_rooms_9_15_1_B'] = $row['guest_rooms_9_15_1_B']; }
			if(($row['guest_rooms_9_15_1_C'] == "") || ($row['guest_rooms_9_15_1_C'] === NULL)){ $output['guest_rooms_9_15_1_C'] = "empty"; }else{ $output['guest_rooms_9_15_1_C'] = $row['guest_rooms_9_15_1_C']; }
			$output['guest_rooms_9_15_1_text'] = $row['guest_rooms_9_15_1_text'];
			
			//GUEST BATHROOMS
			
			if(($row['guest_bathrooms_10_1_1_A'] == "") || ($row['guest_bathrooms_10_1_1_A'] === NULL)){ $output['guest_bathrooms_10_1_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_1_1_A'] = $row['guest_bathrooms_10_1_1_A']; }
			$output['guest_bathrooms_10_1_1_text'] = $row['guest_bathrooms_10_1_1_text'];
			if(($row['guest_bathrooms_10_2_1_A'] == "") || ($row['guest_bathrooms_10_2_1_A'] === NULL)){ $output['guest_bathrooms_10_2_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_2_1_A'] = $row['guest_bathrooms_10_2_1_A']; }
			$output['guest_bathrooms_10_2_1_text'] = $row['guest_bathrooms_10_2_1_text'];
			if(($row['guest_bathrooms_10_3_1_A_a'] == "") || ($row['guest_bathrooms_10_3_1_A_a'] === NULL)){ $output['guest_bathrooms_10_3_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_a'] = $row['guest_bathrooms_10_3_1_A_a']; }
			if(($row['guest_bathrooms_10_3_1_A_b'] == "") || ($row['guest_bathrooms_10_3_1_A_b'] === NULL)){ $output['guest_bathrooms_10_3_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_b'] = $row['guest_bathrooms_10_3_1_A_b']; }
			if(($row['guest_bathrooms_10_3_1_A_c'] == "") || ($row['guest_bathrooms_10_3_1_A_c'] === NULL)){ $output['guest_bathrooms_10_3_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_c'] = $row['guest_bathrooms_10_3_1_A_c']; }
			if(($row['guest_bathrooms_10_3_1_A_d'] == "") || ($row['guest_bathrooms_10_3_1_A_d'] === NULL)){ $output['guest_bathrooms_10_3_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_d'] = $row['guest_bathrooms_10_3_1_A_d']; }
			if(($row['guest_bathrooms_10_3_1_A_e'] == "") || ($row['guest_bathrooms_10_3_1_A_e'] === NULL)){ $output['guest_bathrooms_10_3_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_e'] = $row['guest_bathrooms_10_3_1_A_e']; }
			if(($row['guest_bathrooms_10_3_1_A_f'] == "") || ($row['guest_bathrooms_10_3_1_A_f'] === NULL)){ $output['guest_bathrooms_10_3_1_A_f'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_f'] = $row['guest_bathrooms_10_3_1_A_f']; }
			if(($row['guest_bathrooms_10_3_1_A_g'] == "") || ($row['guest_bathrooms_10_3_1_A_g'] === NULL)){ $output['guest_bathrooms_10_3_1_A_g'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_g'] = $row['guest_bathrooms_10_3_1_A_g']; }
			if(($row['guest_bathrooms_10_3_1_A_h'] == "") || ($row['guest_bathrooms_10_3_1_A_h'] === NULL)){ $output['guest_bathrooms_10_3_1_A_h'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_h'] = $row['guest_bathrooms_10_3_1_A_h']; }
			if(($row['guest_bathrooms_10_3_1_A_i'] == "") || ($row['guest_bathrooms_10_3_1_A_i'] === NULL)){ $output['guest_bathrooms_10_3_1_A_i'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_i'] = $row['guest_bathrooms_10_3_1_A_i']; }
			if(($row['guest_bathrooms_10_3_1_A_j'] == "") || ($row['guest_bathrooms_10_3_1_A_j'] === NULL)){ $output['guest_bathrooms_10_3_1_A_j'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_j'] = $row['guest_bathrooms_10_3_1_A_j']; }
			if(($row['guest_bathrooms_10_3_1_A_k'] == "") || ($row['guest_bathrooms_10_3_1_A_k'] === NULL)){ $output['guest_bathrooms_10_3_1_A_k'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_k'] = $row['guest_bathrooms_10_3_1_A_k']; }
			if(($row['guest_bathrooms_10_3_1_A_l'] == "") || ($row['guest_bathrooms_10_3_1_A_l'] === NULL)){ $output['guest_bathrooms_10_3_1_A_l'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_l'] = $row['guest_bathrooms_10_3_1_A_l']; }
			if(($row['guest_bathrooms_10_3_1_A_m'] == "") || ($row['guest_bathrooms_10_3_1_A_m'] === NULL)){ $output['guest_bathrooms_10_3_1_A_m'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_m'] = $row['guest_bathrooms_10_3_1_A_m']; }
			if(($row['guest_bathrooms_10_3_1_A_n'] == "") || ($row['guest_bathrooms_10_3_1_A_n'] === NULL)){ $output['guest_bathrooms_10_3_1_A_n'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_n'] = $row['guest_bathrooms_10_3_1_A_n']; }
			if(($row['guest_bathrooms_10_3_1_A_o'] == "") || ($row['guest_bathrooms_10_3_1_A_o'] === NULL)){ $output['guest_bathrooms_10_3_1_A_o'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_o'] = $row['guest_bathrooms_10_3_1_A_o']; }
			if(($row['guest_bathrooms_10_3_1_A_p'] == "") || ($row['guest_bathrooms_10_3_1_A_p'] === NULL)){ $output['guest_bathrooms_10_3_1_A_p'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_p'] = $row['guest_bathrooms_10_3_1_A_p']; }
			if(($row['guest_bathrooms_10_3_1_A_q'] == "") || ($row['guest_bathrooms_10_3_1_A_q'] === NULL)){ $output['guest_bathrooms_10_3_1_A_q'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_q'] = $row['guest_bathrooms_10_3_1_A_q']; }
			if(($row['guest_bathrooms_10_3_1_A_r'] == "") || ($row['guest_bathrooms_10_3_1_A_r'] === NULL)){ $output['guest_bathrooms_10_3_1_A_r'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_r'] = $row['guest_bathrooms_10_3_1_A_r']; }
			if(($row['guest_bathrooms_10_3_1_A_s'] == "") || ($row['guest_bathrooms_10_3_1_A_s'] === NULL)){ $output['guest_bathrooms_10_3_1_A_s'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_s'] = $row['guest_bathrooms_10_3_1_A_s']; }
			if(($row['guest_bathrooms_10_3_1_A_t'] == "") || ($row['guest_bathrooms_10_3_1_A_t'] === NULL)){ $output['guest_bathrooms_10_3_1_A_t'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_t'] = $row['guest_bathrooms_10_3_1_A_t']; }
			if(($row['guest_bathrooms_10_3_1_A_u'] == "") || ($row['guest_bathrooms_10_3_1_A_u'] === NULL)){ $output['guest_bathrooms_10_3_1_A_u'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_u'] = $row['guest_bathrooms_10_3_1_A_u']; }
			if(($row['guest_bathrooms_10_3_1_A_v'] == "") || ($row['guest_bathrooms_10_3_1_A_v'] === NULL)){ $output['guest_bathrooms_10_3_1_A_v'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_v'] = $row['guest_bathrooms_10_3_1_A_v']; }
			if(($row['guest_bathrooms_10_3_1_A_w'] == "") || ($row['guest_bathrooms_10_3_1_A_w'] === NULL)){ $output['guest_bathrooms_10_3_1_A_w'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_A_w'] = $row['guest_bathrooms_10_3_1_A_w']; }
			if(($row['guest_bathrooms_10_3_1_B'] == "") || ($row['guest_bathrooms_10_3_1_B'] === NULL)){ $output['guest_bathrooms_10_3_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_B'] = $row['guest_bathrooms_10_3_1_B']; }
			if(($row['guest_bathrooms_10_3_1_C'] == "") || ($row['guest_bathrooms_10_3_1_C'] === NULL)){ $output['guest_bathrooms_10_3_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_C'] = $row['guest_bathrooms_10_3_1_C']; }
			if(($row['guest_bathrooms_10_3_1_D'] == "") || ($row['guest_bathrooms_10_3_1_D'] === NULL)){ $output['guest_bathrooms_10_3_1_D'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_D'] = $row['guest_bathrooms_10_3_1_D']; }
			if(($row['guest_bathrooms_10_3_1_E'] == "") || ($row['guest_bathrooms_10_3_1_E'] === NULL)){ $output['guest_bathrooms_10_3_1_E'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_E'] = $row['guest_bathrooms_10_3_1_E']; }
			if(($row['guest_bathrooms_10_3_1_F'] == "") || ($row['guest_bathrooms_10_3_1_F'] === NULL)){ $output['guest_bathrooms_10_3_1_F'] = "empty"; }else{ $output['guest_bathrooms_10_3_1_F'] = $row['guest_bathrooms_10_3_1_F']; }
			$output['guest_bathrooms_10_3_1_text'] = $row['guest_bathrooms_10_3_1_text'];
			if(($row['guest_bathrooms_10_4_1_A'] == "") || ($row['guest_bathrooms_10_4_1_A'] === NULL)){ $output['guest_bathrooms_10_4_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_A'] = $row['guest_bathrooms_10_4_1_A']; }
			if(($row['guest_bathrooms_10_4_1_B'] == "") || ($row['guest_bathrooms_10_4_1_B'] === NULL)){ $output['guest_bathrooms_10_4_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_B'] = $row['guest_bathrooms_10_4_1_B']; }
			if(($row['guest_bathrooms_10_4_1_C'] == "") || ($row['guest_bathrooms_10_4_1_C'] === NULL)){ $output['guest_bathrooms_10_4_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_C'] = $row['guest_bathrooms_10_4_1_C']; }
			if(($row['guest_bathrooms_10_4_1_D'] == "") || ($row['guest_bathrooms_10_4_1_D'] === NULL)){ $output['guest_bathrooms_10_4_1_D'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_D'] = $row['guest_bathrooms_10_4_1_D']; }
			if(($row['guest_bathrooms_10_4_1_E'] == "") || ($row['guest_bathrooms_10_4_1_E'] === NULL)){ $output['guest_bathrooms_10_4_1_E'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_E'] = $row['guest_bathrooms_10_4_1_E']; }
			if(($row['guest_bathrooms_10_4_1_F'] == "") || ($row['guest_bathrooms_10_4_1_F'] === NULL)){ $output['guest_bathrooms_10_4_1_F'] = "empty"; }else{ $output['guest_bathrooms_10_4_1_F'] = $row['guest_bathrooms_10_4_1_F']; }
			$output['guest_bathrooms_10_4_1_text'] = $row['guest_bathrooms_10_4_1_text'];
			if(($row['guest_bathrooms_10_5_1_A_a'] == "") || ($row['guest_bathrooms_10_5_1_A_a'] === NULL)){ $output['guest_bathrooms_10_5_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_A_a'] = $row['guest_bathrooms_10_5_1_A_a']; }
			if(($row['guest_bathrooms_10_5_1_A_b'] == "") || ($row['guest_bathrooms_10_5_1_A_b'] === NULL)){ $output['guest_bathrooms_10_5_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_A_b'] = $row['guest_bathrooms_10_5_1_A_b']; }
			if(($row['guest_bathrooms_10_5_1_A_c'] == "") || ($row['guest_bathrooms_10_5_1_A_c'] === NULL)){ $output['guest_bathrooms_10_5_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_A_c'] = $row['guest_bathrooms_10_5_1_A_c']; }
			if(($row['guest_bathrooms_10_5_1_A_d'] == "") || ($row['guest_bathrooms_10_5_1_A_d'] === NULL)){ $output['guest_bathrooms_10_5_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_A_d'] = $row['guest_bathrooms_10_5_1_A_d']; }
			if(($row['guest_bathrooms_10_5_1_A_e'] == "") || ($row['guest_bathrooms_10_5_1_A_e'] === NULL)){ $output['guest_bathrooms_10_5_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_A_e'] = $row['guest_bathrooms_10_5_1_A_e']; }
			if(($row['guest_bathrooms_10_5_1_B'] == "") || ($row['guest_bathrooms_10_5_1_B'] === NULL)){ $output['guest_bathrooms_10_5_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_B'] = $row['guest_bathrooms_10_5_1_B']; }
			if(($row['guest_bathrooms_10_5_1_C'] == "") || ($row['guest_bathrooms_10_5_1_C'] === NULL)){ $output['guest_bathrooms_10_5_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_C'] = $row['guest_bathrooms_10_5_1_C']; }
			if(($row['guest_bathrooms_10_5_1_D'] == "") || ($row['guest_bathrooms_10_5_1_D'] === NULL)){ $output['guest_bathrooms_10_5_1_D'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_D'] = $row['guest_bathrooms_10_5_1_D']; }
			if(($row['guest_bathrooms_10_5_1_E'] == "") || ($row['guest_bathrooms_10_5_1_E'] === NULL)){ $output['guest_bathrooms_10_5_1_E'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_E'] = $row['guest_bathrooms_10_5_1_E']; }
			if(($row['guest_bathrooms_10_5_1_F'] == "") || ($row['guest_bathrooms_10_5_1_F'] === NULL)){ $output['guest_bathrooms_10_5_1_F'] = "empty"; }else{ $output['guest_bathrooms_10_5_1_F'] = $row['guest_bathrooms_10_5_1_F']; }
			$output['guest_bathrooms_10_5_1_text'] = $row['guest_bathrooms_10_5_1_text'];
			if(($row['guest_bathrooms_10_6_1_A'] == "") || ($row['guest_bathrooms_10_6_1_A'] === NULL)){ $output['guest_bathrooms_10_6_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_6_1_A'] = $row['guest_bathrooms_10_6_1_A']; }
			if(($row['guest_bathrooms_10_6_1_B'] == "") || ($row['guest_bathrooms_10_6_1_B'] === NULL)){ $output['guest_bathrooms_10_6_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_6_1_B'] = $row['guest_bathrooms_10_6_1_B']; }
			if(($row['guest_bathrooms_10_6_1_C'] == "") || ($row['guest_bathrooms_10_6_1_C'] === NULL)){ $output['guest_bathrooms_10_6_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_6_1_C'] = $row['guest_bathrooms_10_6_1_C']; }
			$output['guest_bathrooms_10_6_1_text'] = $row['guest_bathrooms_10_6_1_text'];
			if(($row['guest_bathrooms_10_7_1_A'] == "") || ($row['guest_bathrooms_10_7_1_A'] === NULL)){ $output['guest_bathrooms_10_7_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_7_1_A'] = $row['guest_bathrooms_10_7_1_A']; }
			if(($row['guest_bathrooms_10_7_1_B'] == "") || ($row['guest_bathrooms_10_7_1_B'] === NULL)){ $output['guest_bathrooms_10_7_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_7_1_B'] = $row['guest_bathrooms_10_7_1_B']; }
			if(($row['guest_bathrooms_10_7_1_C'] == "") || ($row['guest_bathrooms_10_7_1_C'] === NULL)){ $output['guest_bathrooms_10_7_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_7_1_C'] = $row['guest_bathrooms_10_7_1_C']; }
			if(($row['guest_bathrooms_10_7_1_D'] == "") || ($row['guest_bathrooms_10_7_1_D'] === NULL)){ $output['guest_bathrooms_10_7_1_D'] = "empty"; }else{ $output['guest_bathrooms_10_7_1_D'] = $row['guest_bathrooms_10_7_1_D']; }
			$output['guest_bathrooms_10_7_1_text'] = $row['guest_bathrooms_10_7_1_text'];
			if(($row['guest_bathrooms_10_8_1_A_a'] == "") || ($row['guest_bathrooms_10_8_1_A_a'] === NULL)){ $output['guest_bathrooms_10_8_1_A_a'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_a'] = $row['guest_bathrooms_10_8_1_A_a']; }
			if(($row['guest_bathrooms_10_8_1_A_b'] == "") || ($row['guest_bathrooms_10_8_1_A_b'] === NULL)){ $output['guest_bathrooms_10_8_1_A_b'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_b'] = $row['guest_bathrooms_10_8_1_A_b']; }
			if(($row['guest_bathrooms_10_8_1_A_c'] == "") || ($row['guest_bathrooms_10_8_1_A_c'] === NULL)){ $output['guest_bathrooms_10_8_1_A_c'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_c'] = $row['guest_bathrooms_10_8_1_A_c']; }
			if(($row['guest_bathrooms_10_8_1_A_d'] == "") || ($row['guest_bathrooms_10_8_1_A_d'] === NULL)){ $output['guest_bathrooms_10_8_1_A_d'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_d'] = $row['guest_bathrooms_10_8_1_A_d']; }
			if(($row['guest_bathrooms_10_8_1_A_e'] == "") || ($row['guest_bathrooms_10_8_1_A_e'] === NULL)){ $output['guest_bathrooms_10_8_1_A_e'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_e'] = $row['guest_bathrooms_10_8_1_A_e']; }
			if(($row['guest_bathrooms_10_8_1_A_f'] == "") || ($row['guest_bathrooms_10_8_1_A_f'] === NULL)){ $output['guest_bathrooms_10_8_1_A_f'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_f'] = $row['guest_bathrooms_10_8_1_A_f']; }
			if(($row['guest_bathrooms_10_8_1_A_g'] == "") || ($row['guest_bathrooms_10_8_1_A_g'] === NULL)){ $output['guest_bathrooms_10_8_1_A_g'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_A_g'] = $row['guest_bathrooms_10_8_1_A_g']; }
			if(($row['guest_bathrooms_10_8_1_B'] == "") || ($row['guest_bathrooms_10_8_1_B'] === NULL)){ $output['guest_bathrooms_10_8_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_B'] = $row['guest_bathrooms_10_8_1_B']; }
			if(($row['guest_bathrooms_10_8_1_C'] == "") || ($row['guest_bathrooms_10_8_1_C'] === NULL)){ $output['guest_bathrooms_10_8_1_C'] = "empty"; }else{ $output['guest_bathrooms_10_8_1_C'] = $row['guest_bathrooms_10_8_1_C']; }
			$output['guest_bathrooms_10_8_1_text'] = $row['guest_bathrooms_10_8_1_text'];
			if(($row['guest_bathrooms_10_9_1_A'] == "") || ($row['guest_bathrooms_10_9_1_A'] === NULL)){ $output['guest_bathrooms_10_9_1_A'] = "empty"; }else{ $output['guest_bathrooms_10_9_1_A'] = $row['guest_bathrooms_10_9_1_A']; }
			if(($row['guest_bathrooms_10_9_1_B'] == "") || ($row['guest_bathrooms_10_9_1_B'] === NULL)){ $output['guest_bathrooms_10_9_1_B'] = "empty"; }else{ $output['guest_bathrooms_10_9_1_B'] = $row['guest_bathrooms_10_9_1_B']; }
			
			//SUITES
			
			if(($row['suites_11_1_1_A'] == "") || ($row['suites_11_1_1_A'] === NULL)){ $output['suites_11_1_1_A'] = "empty"; }else{ $output['suites_11_1_1_A'] = $row['suites_11_1_1_A']; }
			$output['suites_11_1_1_text'] = $row['suites_11_1_1_text'];
			if(($row['suites_11_2_1_A'] == "") || ($row['suites_11_2_1_A'] === NULL)){ $output['suites_11_2_1_A'] = "empty"; }else{ $output['suites_11_2_1_A'] = $row['suites_11_2_1_A']; }
			if(($row['suites_11_2_1_B'] == "") || ($row['suites_11_2_1_B'] === NULL)){ $output['suites_11_2_1_B'] = "empty"; }else{ $output['suites_11_2_1_B'] = $row['suites_11_2_1_B']; }
			if(($row['suites_11_2_1_C'] == "") || ($row['suites_11_2_1_C'] === NULL)){ $output['suites_11_2_1_C'] = "empty"; }else{ $output['suites_11_2_1_C'] = $row['suites_11_2_1_C']; }
			$output['suites_11_2_1_text'] = $row['suites_11_2_1_text'];
			if(($row['suites_11_3_1_A_a'] == "") || ($row['suites_11_3_1_A_a'] === NULL)){ $output['suites_11_3_1_A_a'] = "empty"; }else{ $output['suites_11_3_1_A_a'] = $row['suites_11_3_1_A_a']; }
			if(($row['suites_11_3_1_A_b'] == "") || ($row['suites_11_3_1_A_b'] === NULL)){ $output['suites_11_3_1_A_b'] = "empty"; }else{ $output['suites_11_3_1_A_b'] = $row['suites_11_3_1_A_b']; }
			if(($row['suites_11_3_1_A_c'] == "") || ($row['suites_11_3_1_A_c'] === NULL)){ $output['suites_11_3_1_A_c'] = "empty"; }else{ $output['suites_11_3_1_A_c'] = $row['suites_11_3_1_A_c']; }
			if(($row['suites_11_3_1_A_d'] == "") || ($row['suites_11_3_1_A_d'] === NULL)){ $output['suites_11_3_1_A_d'] = "empty"; }else{ $output['suites_11_3_1_A_d'] = $row['suites_11_3_1_A_d']; }
			$output['suites_11_3_1_text'] = $row['suites_11_3_1_text'];
			if(($row['suites_11_4_1_A'] == "") || ($row['suites_11_4_1_A'] === NULL)){ $output['suites_11_4_1_A'] = "empty"; }else{ $output['suites_11_4_1_A'] = $row['suites_11_4_1_A']; }
			if(($row['suites_11_4_1_B'] == "") || ($row['suites_11_4_1_B'] === NULL)){ $output['suites_11_4_1_B'] = "empty"; }else{ $output['suites_11_4_1_B'] = $row['suites_11_4_1_B']; }
			$output['suites_11_4_1_text'] = $row['suites_11_4_1_text'];
			if(($row['suites_11_5_1_A_a'] == "") || ($row['suites_11_5_1_A_a'] === NULL)){ $output['suites_11_5_1_A_a'] = "empty"; }else{ $output['suites_11_5_1_A_a'] = $row['suites_11_5_1_A_a']; }
			if(($row['suites_11_5_1_A_b'] == "") || ($row['suites_11_5_1_A_b'] === NULL)){ $output['suites_11_5_1_A_b'] = "empty"; }else{ $output['suites_11_5_1_A_b'] = $row['suites_11_5_1_A_b']; }
			if(($row['suites_11_5_1_B_a'] == "") || ($row['suites_11_5_1_B_a'] === NULL)){ $output['suites_11_5_1_B_a'] = "empty"; }else{ $output['suites_11_5_1_B_a'] = $row['suites_11_5_1_B_a']; }
			if(($row['suites_11_5_1_B_b'] == "") || ($row['suites_11_5_1_B_b'] === NULL)){ $output['suites_11_5_1_B_b'] = "empty"; }else{ $output['suites_11_5_1_B_b'] = $row['suites_11_5_1_B_b']; }
			if(($row['suites_11_5_1_B_c'] == "") || ($row['suites_11_5_1_B_c'] === NULL)){ $output['suites_11_5_1_B_c'] = "empty"; }else{ $output['suites_11_5_1_B_c'] = $row['suites_11_5_1_B_c']; }
			if(($row['suites_11_5_1_B_d'] == "") || ($row['suites_11_5_1_B_d'] === NULL)){ $output['suites_11_5_1_B_d'] = "empty"; }else{ $output['suites_11_5_1_B_d'] = $row['suites_11_5_1_B_d']; }
			if(($row['suites_11_5_1_B_e'] == "") || ($row['suites_11_5_1_B_e'] === NULL)){ $output['suites_11_5_1_B_e'] = "empty"; }else{ $output['suites_11_5_1_B_e'] = $row['suites_11_5_1_B_e']; }
			if(($row['suites_11_5_1_B_f'] == "") || ($row['suites_11_5_1_B_f'] === NULL)){ $output['suites_11_5_1_B_f'] = "empty"; }else{ $output['suites_11_5_1_B_f'] = $row['suites_11_5_1_B_f']; }
			if(($row['suites_11_5_1_B_g'] == "") || ($row['suites_11_5_1_B_g'] === NULL)){ $output['suites_11_5_1_B_g'] = "empty"; }else{ $output['suites_11_5_1_B_g'] = $row['suites_11_5_1_B_g']; }
			if(($row['suites_11_5_1_B_h'] == "") || ($row['suites_11_5_1_B_h'] === NULL)){ $output['suites_11_5_1_B_h'] = "empty"; }else{ $output['suites_11_5_1_B_h'] = $row['suites_11_5_1_B_h']; }
			if(($row['suites_11_5_1_B_i'] == "") || ($row['suites_11_5_1_B_i'] === NULL)){ $output['suites_11_5_1_B_i'] = "empty"; }else{ $output['suites_11_5_1_B_i'] = $row['suites_11_5_1_B_i']; }
			if(($row['suites_11_5_1_B_j'] == "") || ($row['suites_11_5_1_B_j'] === NULL)){ $output['suites_11_5_1_B_j'] = "empty"; }else{ $output['suites_11_5_1_B_j'] = $row['suites_11_5_1_B_j']; }
			if(($row['suites_11_5_1_B_k'] == "") || ($row['suites_11_5_1_B_k'] === NULL)){ $output['suites_11_5_1_B_k'] = "empty"; }else{ $output['suites_11_5_1_B_k'] = $row['suites_11_5_1_B_k']; }
			if(($row['suites_11_5_1_B_l'] == "") || ($row['suites_11_5_1_B_l'] === NULL)){ $output['suites_11_5_1_B_l'] = "empty"; }else{ $output['suites_11_5_1_B_l'] = $row['suites_11_5_1_B_l']; }
			if(($row['suites_11_5_1_B_m'] == "") || ($row['suites_11_5_1_B_m'] === NULL)){ $output['suites_11_5_1_B_m'] = "empty"; }else{ $output['suites_11_5_1_B_m'] = $row['suites_11_5_1_B_m']; }
			if(($row['suites_11_5_1_B_n'] == "") || ($row['suites_11_5_1_B_n'] === NULL)){ $output['suites_11_5_1_B_n'] = "empty"; }else{ $output['suites_11_5_1_B_n'] = $row['suites_11_5_1_B_n']; }
			if(($row['suites_11_5_1_B_o'] == "") || ($row['suites_11_5_1_B_o'] === NULL)){ $output['suites_11_5_1_B_o'] = "empty"; }else{ $output['suites_11_5_1_B_o'] = $row['suites_11_5_1_B_o']; }
			if(($row['suites_11_5_1_B_p'] == "") || ($row['suites_11_5_1_B_p'] === NULL)){ $output['suites_11_5_1_B_p'] = "empty"; }else{ $output['suites_11_5_1_B_p'] = $row['suites_11_5_1_B_p']; }
			if(($row['suites_11_5_1_B_q'] == "") || ($row['suites_11_5_1_B_q'] === NULL)){ $output['suites_11_5_1_B_q'] = "empty"; }else{ $output['suites_11_5_1_B_q'] = $row['suites_11_5_1_B_q']; }
			if(($row['suites_11_5_1_B_r'] == "") || ($row['suites_11_5_1_B_r'] === NULL)){ $output['suites_11_5_1_B_r'] = "empty"; }else{ $output['suites_11_5_1_B_r'] = $row['suites_11_5_1_B_r']; }
			if(($row['suites_11_5_1_B_s'] == "") || ($row['suites_11_5_1_B_s'] === NULL)){ $output['suites_11_5_1_B_s'] = "empty"; }else{ $output['suites_11_5_1_B_s'] = $row['suites_11_5_1_B_s']; }
			if(($row['suites_11_5_1_B_t'] == "") || ($row['suites_11_5_1_B_t'] === NULL)){ $output['suites_11_5_1_B_t'] = "empty"; }else{ $output['suites_11_5_1_B_t'] = $row['suites_11_5_1_B_t']; }
			if(($row['suites_11_5_1_C'] == "") || ($row['suites_11_5_1_C'] === NULL)){ $output['suites_11_5_1_C'] = "empty"; }else{ $output['suites_11_5_1_C'] = $row['suites_11_5_1_C']; }
			if(($row['suites_11_5_1_D'] == "") || ($row['suites_11_5_1_D'] === NULL)){ $output['suites_11_5_1_D'] = "empty"; }else{ $output['suites_11_5_1_D'] = $row['suites_11_5_1_D']; }
			if(($row['suites_11_5_1_E'] == "") || ($row['suites_11_5_1_E'] === NULL)){ $output['suites_11_5_1_E'] = "empty"; }else{ $output['suites_11_5_1_E'] = $row['suites_11_5_1_E']; }
			if(($row['suites_11_5_1_F'] == "") || ($row['suites_11_5_1_F'] === NULL)){ $output['suites_11_5_1_F'] = "empty"; }else{ $output['suites_11_5_1_F'] = $row['suites_11_5_1_F']; }
			if(($row['suites_11_5_1_G'] == "") || ($row['suites_11_5_1_G'] === NULL)){ $output['suites_11_5_1_G'] = "empty"; }else{ $output['suites_11_5_1_G'] = $row['suites_11_5_1_G']; }
			$output['suites_11_5_1_text'] = $row['suites_11_5_1_text'];
			if(($row['suites_11_6_1_A'] == "") || ($row['suites_11_6_1_A'] === NULL)){ $output['suites_11_6_1_A'] = "empty"; }else{ $output['suites_11_6_1_A'] = $row['suites_11_6_1_A']; }
			if(($row['suites_11_6_1_B'] == "") || ($row['suites_11_6_1_B'] === NULL)){ $output['suites_11_6_1_B'] = "empty"; }else{ $output['suites_11_6_1_B'] = $row['suites_11_6_1_B']; }
			if(($row['suites_11_6_1_C'] == "") || ($row['suites_11_6_1_C'] === NULL)){ $output['suites_11_6_1_C'] = "empty"; }else{ $output['suites_11_6_1_C'] = $row['suites_11_6_1_C']; }
			if(($row['suites_11_6_1_D'] == "") || ($row['suites_11_6_1_D'] === NULL)){ $output['suites_11_6_1_D'] = "empty"; }else{ $output['suites_11_6_1_D'] = $row['suites_11_6_1_D']; }
			if(($row['suites_11_6_1_E'] == "") || ($row['suites_11_6_1_E'] === NULL)){ $output['suites_11_6_1_E'] = "empty"; }else{ $output['suites_11_6_1_E'] = $row['suites_11_6_1_E']; }
			$output['suites_11_6_1_text'] = $row['suites_11_6_1_text'];
			if(($row['suites_11_7_1_A'] == "") || ($row['suites_11_7_1_A'] === NULL)){ $output['suites_11_7_1_A'] = "empty"; }else{ $output['suites_11_7_1_A'] = $row['suites_11_7_1_A']; }
			if(($row['suites_11_7_1_B_a'] == "") || ($row['suites_11_7_1_B_a'] === NULL)){ $output['suites_11_7_1_B_a'] = "empty"; }else{ $output['suites_11_7_1_B_a'] = $row['suites_11_7_1_B_a']; }
			if(($row['suites_11_7_1_B_b'] == "") || ($row['suites_11_7_1_B_b'] === NULL)){ $output['suites_11_7_1_B_b'] = "empty"; }else{ $output['suites_11_7_1_B_b'] = $row['suites_11_7_1_B_b']; }
			if(($row['suites_11_7_1_B_c'] == "") || ($row['suites_11_7_1_B_c'] === NULL)){ $output['suites_11_7_1_B_c'] = "empty"; }else{ $output['suites_11_7_1_B_c'] = $row['suites_11_7_1_B_c']; }
			if(($row['suites_11_7_1_B_d'] == "") || ($row['suites_11_7_1_B_d'] === NULL)){ $output['suites_11_7_1_B_d'] = "empty"; }else{ $output['suites_11_7_1_B_d'] = $row['suites_11_7_1_B_d']; }
			if(($row['suites_11_7_1_C'] == "") || ($row['suites_11_7_1_C'] === NULL)){ $output['suites_11_7_1_C'] = "empty"; }else{ $output['suites_11_7_1_C'] = $row['suites_11_7_1_C']; }
			if(($row['suites_11_7_1_D'] == "") || ($row['suites_11_7_1_D'] === NULL)){ $output['suites_11_7_1_D'] = "empty"; }else{ $output['suites_11_7_1_D'] = $row['suites_11_7_1_D']; }
			$output['suites_11_7_1_text'] = $row['suites_11_7_1_text'];
			if(($row['suites_11_8_1_A'] == "") || ($row['suites_11_8_1_A'] === NULL)){ $output['suites_11_8_1_A'] = "empty"; }else{ $output['suites_11_8_1_A'] = $row['suites_11_8_1_A']; }
			if(($row['suites_11_8_1_B_a'] == "") || ($row['suites_11_8_1_B_a'] === NULL)){ $output['suites_11_8_1_B_a'] = "empty"; }else{ $output['suites_11_8_1_B_a'] = $row['suites_11_8_1_B_a']; }
			if(($row['suites_11_8_1_B_b'] == "") || ($row['suites_11_8_1_B_b'] === NULL)){ $output['suites_11_8_1_B_b'] = "empty"; }else{ $output['suites_11_8_1_B_b'] = $row['suites_11_8_1_B_b']; }
			if(($row['suites_11_8_1_B_c'] == "") || ($row['suites_11_8_1_B_c'] === NULL)){ $output['suites_11_8_1_B_c'] = "empty"; }else{ $output['suites_11_8_1_B_c'] = $row['suites_11_8_1_B_c']; }
			if(($row['suites_11_8_1_B_d'] == "") || ($row['suites_11_8_1_B_d'] === NULL)){ $output['suites_11_8_1_B_d'] = "empty"; }else{ $output['suites_11_8_1_B_d'] = $row['suites_11_8_1_B_d']; }
			if(($row['suites_11_8_1_B_e'] == "") || ($row['suites_11_8_1_B_e'] === NULL)){ $output['suites_11_8_1_B_e'] = "empty"; }else{ $output['suites_11_8_1_B_e'] = $row['suites_11_8_1_B_e']; }
			if(($row['suites_11_8_1_B_f'] == "") || ($row['suites_11_8_1_B_f'] === NULL)){ $output['suites_11_8_1_B_f'] = "empty"; }else{ $output['suites_11_8_1_B_f'] = $row['suites_11_8_1_B_f']; }
			if(($row['suites_11_8_1_B_g'] == "") || ($row['suites_11_8_1_B_g'] === NULL)){ $output['suites_11_8_1_B_g'] = "empty"; }else{ $output['suites_11_8_1_B_g'] = $row['suites_11_8_1_B_g']; }
			if(($row['suites_11_8_1_B_h'] == "") || ($row['suites_11_8_1_B_h'] === NULL)){ $output['suites_11_8_1_B_h'] = "empty"; }else{ $output['suites_11_8_1_B_h'] = $row['suites_11_8_1_B_h']; }
			if(($row['suites_11_8_1_B_i'] == "") || ($row['suites_11_8_1_B_i'] === NULL)){ $output['suites_11_8_1_B_i'] = "empty"; }else{ $output['suites_11_8_1_B_i'] = $row['suites_11_8_1_B_i']; }
			if(($row['suites_11_8_1_C_a'] == "") || ($row['suites_11_8_1_C_a'] === NULL)){ $output['suites_11_8_1_C_a'] = "empty"; }else{ $output['suites_11_8_1_C_a'] = $row['suites_11_8_1_C_a']; }
			if(($row['suites_11_8_1_C_b'] == "") || ($row['suites_11_8_1_C_b'] === NULL)){ $output['suites_11_8_1_C_b'] = "empty"; }else{ $output['suites_11_8_1_C_b'] = $row['suites_11_8_1_C_b']; }
			if(($row['suites_11_8_1_D'] == "") || ($row['suites_11_8_1_D'] === NULL)){ $output['suites_11_8_1_D'] = "empty"; }else{ $output['suites_11_8_1_D'] = $row['suites_11_8_1_D']; }
			$output['suites_11_8_1_text'] = $row['suites_11_8_1_text'];
			if(($row['suites_11_9_1_A'] == "") || ($row['suites_11_9_1_A'] === NULL)){ $output['suites_11_9_1_A'] = "empty"; }else{ $output['suites_11_9_1_A'] = $row['suites_11_9_1_A']; }
			if(($row['suites_11_9_1_B'] == "") || ($row['suites_11_9_1_B'] === NULL)){ $output['suites_11_9_1_B'] = "empty"; }else{ $output['suites_11_9_1_B'] = $row['suites_11_9_1_B']; }
			$output['suites_11_9_1_text'] = $row['suites_11_9_1_text'];
			if(($row['suites_11_10_1_A_a'] == "") || ($row['suites_11_10_1_A_a'] === NULL)){ $output['suites_11_10_1_A_a'] = "empty"; }else{ $output['suites_11_10_1_A_a'] = $row['suites_11_10_1_A_a']; }
			if(($row['suites_11_10_1_A_b'] == "") || ($row['suites_11_10_1_A_b'] === NULL)){ $output['suites_11_10_1_A_b'] = "empty"; }else{ $output['suites_11_10_1_A_b'] = $row['suites_11_10_1_A_b']; }
			if(($row['suites_11_10_1_A_c'] == "") || ($row['suites_11_10_1_A_c'] === NULL)){ $output['suites_11_10_1_A_c'] = "empty"; }else{ $output['suites_11_10_1_A_c'] = $row['suites_11_10_1_A_c']; }
			if(($row['suites_11_10_1_A_d'] == "") || ($row['suites_11_10_1_A_d'] === NULL)){ $output['suites_11_10_1_A_d'] = "empty"; }else{ $output['suites_11_10_1_A_d'] = $row['suites_11_10_1_A_d']; }
			if(($row['suites_11_10_1_A_e'] == "") || ($row['suites_11_10_1_A_e'] === NULL)){ $output['suites_11_10_1_A_e'] = "empty"; }else{ $output['suites_11_10_1_A_e'] = $row['suites_11_10_1_A_e']; }
			if(($row['suites_11_10_1_B_a'] == "") || ($row['suites_11_10_1_B_a'] === NULL)){ $output['suites_11_10_1_B_a'] = "empty"; }else{ $output['suites_11_10_1_B_a'] = $row['suites_11_10_1_B_a']; }
			if(($row['suites_11_10_1_B_b'] == "") || ($row['suites_11_10_1_B_b'] === NULL)){ $output['suites_11_10_1_B_b'] = "empty"; }else{ $output['suites_11_10_1_B_b'] = $row['suites_11_10_1_B_b']; }
			if(($row['suites_11_10_1_B_c'] == "") || ($row['suites_11_10_1_B_c'] === NULL)){ $output['suites_11_10_1_B_c'] = "empty"; }else{ $output['suites_11_10_1_B_c'] = $row['suites_11_10_1_B_c']; }
			if(($row['suites_11_10_1_B_d'] == "") || ($row['suites_11_10_1_B_d'] === NULL)){ $output['suites_11_10_1_B_d'] = "empty"; }else{ $output['suites_11_10_1_B_d'] = $row['suites_11_10_1_B_d']; }
			if(($row['suites_11_10_1_C'] == "") || ($row['suites_11_10_1_C'] === NULL)){ $output['suites_11_10_1_C'] = "empty"; }else{ $output['suites_11_10_1_C'] = $row['suites_11_10_1_C']; }
			$output['suites_11_10_1_text'] = $row['suites_11_10_1_text'];
			if(($row['suites_11_11_1_A'] == "") || ($row['suites_11_11_1_A'] === NULL)){ $output['suites_11_11_1_A'] = "empty"; }else{ $output['suites_11_11_1_A'] = $row['suites_11_11_1_A']; }
			if(($row['suites_11_11_1_B'] == "") || ($row['suites_11_11_1_B'] === NULL)){ $output['suites_11_11_1_B'] = "empty"; }else{ $output['suites_11_11_1_B'] = $row['suites_11_11_1_B']; }
			if(($row['suites_11_11_1_C_a'] == "") || ($row['suites_11_11_1_C_a'] === NULL)){ $output['suites_11_11_1_C_a'] = "empty"; }else{ $output['suites_11_11_1_C_a'] = $row['suites_11_11_1_C_a']; }
			if(($row['suites_11_11_1_C_b'] == "") || ($row['suites_11_11_1_C_b'] === NULL)){ $output['suites_11_11_1_C_b'] = "empty"; }else{ $output['suites_11_11_1_C_b'] = $row['suites_11_11_1_C_b']; }
			if(($row['suites_11_11_1_C_c'] == "") || ($row['suites_11_11_1_C_c'] === NULL)){ $output['suites_11_11_1_C_c'] = "empty"; }else{ $output['suites_11_11_1_C_c'] = $row['suites_11_11_1_C_c']; }
			if(($row['suites_11_11_1_D'] == "") || ($row['suites_11_11_1_D'] === NULL)){ $output['suites_11_11_1_D'] = "empty"; }else{ $output['suites_11_11_1_D'] = $row['suites_11_11_1_D']; }
			if(($row['suites_11_11_1_E'] == "") || ($row['suites_11_11_1_E'] === NULL)){ $output['suites_11_11_1_E'] = "empty"; }else{ $output['suites_11_11_1_E'] = $row['suites_11_11_1_E']; }
			if(($row['suites_11_11_1_F'] == "") || ($row['suites_11_11_1_F'] === NULL)){ $output['suites_11_11_1_F'] = "empty"; }else{ $output['suites_11_11_1_F'] = $row['suites_11_11_1_F']; }
			if(($row['suites_11_11_1_G'] == "") || ($row['suites_11_11_1_G'] === NULL)){ $output['suites_11_11_1_G'] = "empty"; }else{ $output['suites_11_11_1_G'] = $row['suites_11_11_1_G']; }
			$output['suites_11_11_1_text'] = $row['suites_11_11_1_text'];
			if(($row['suites_11_12_1_A_a'] == "") || ($row['suites_11_12_1_A_a'] === NULL)){ $output['suites_11_12_1_A_a'] = "empty"; }else{ $output['suites_11_12_1_A_a'] = $row['suites_11_12_1_A_a']; }
			if(($row['suites_11_12_1_A_b'] == "") || ($row['suites_11_12_1_A_b'] === NULL)){ $output['suites_11_12_1_A_b'] = "empty"; }else{ $output['suites_11_12_1_A_b'] = $row['suites_11_12_1_A_b']; }
			if(($row['suites_11_12_1_A_c'] == "") || ($row['suites_11_12_1_A_c'] === NULL)){ $output['suites_11_12_1_A_c'] = "empty"; }else{ $output['suites_11_12_1_A_c'] = $row['suites_11_12_1_A_c']; }
			if(($row['suites_11_12_1_A_d'] == "") || ($row['suites_11_12_1_A_d'] === NULL)){ $output['suites_11_12_1_A_d'] = "empty"; }else{ $output['suites_11_12_1_A_d'] = $row['suites_11_12_1_A_d']; }
			if(($row['suites_11_12_1_A_e'] == "") || ($row['suites_11_12_1_A_e'] === NULL)){ $output['suites_11_12_1_A_e'] = "empty"; }else{ $output['suites_11_12_1_A_e'] = $row['suites_11_12_1_A_e']; }
			if(($row['suites_11_12_1_A_f'] == "") || ($row['suites_11_12_1_A_f'] === NULL)){ $output['suites_11_12_1_A_f'] = "empty"; }else{ $output['suites_11_12_1_A_f'] = $row['suites_11_12_1_A_f']; }
			if(($row['suites_11_12_1_A_g'] == "") || ($row['suites_11_12_1_A_g'] === NULL)){ $output['suites_11_12_1_A_g'] = "empty"; }else{ $output['suites_11_12_1_A_g'] = $row['suites_11_12_1_A_g']; }
			if(($row['suites_11_12_1_A_h'] == "") || ($row['suites_11_12_1_A_h'] === NULL)){ $output['suites_11_12_1_A_h'] = "empty"; }else{ $output['suites_11_12_1_A_h'] = $row['suites_11_12_1_A_h']; }
			if(($row['suites_11_12_1_A_i'] == "") || ($row['suites_11_12_1_A_i'] === NULL)){ $output['suites_11_12_1_A_i'] = "empty"; }else{ $output['suites_11_12_1_A_i'] = $row['suites_11_12_1_A_i']; }
			if(($row['suites_11_12_1_A_j'] == "") || ($row['suites_11_12_1_A_j'] === NULL)){ $output['suites_11_12_1_A_j'] = "empty"; }else{ $output['suites_11_12_1_A_j'] = $row['suites_11_12_1_A_j']; }
			if(($row['suites_11_12_1_A_k'] == "") || ($row['suites_11_12_1_A_k'] === NULL)){ $output['suites_11_12_1_A_k'] = "empty"; }else{ $output['suites_11_12_1_A_k'] = $row['suites_11_12_1_A_k']; }
			if(($row['suites_11_12_1_A_l'] == "") || ($row['suites_11_12_1_A_l'] === NULL)){ $output['suites_11_12_1_A_l'] = "empty"; }else{ $output['suites_11_12_1_A_l'] = $row['suites_11_12_1_A_l']; }
			if(($row['suites_11_12_1_A_m'] == "") || ($row['suites_11_12_1_A_m'] === NULL)){ $output['suites_11_12_1_A_m'] = "empty"; }else{ $output['suites_11_12_1_A_m'] = $row['suites_11_12_1_A_m']; }
			if(($row['suites_11_12_1_A_n'] == "") || ($row['suites_11_12_1_A_n'] === NULL)){ $output['suites_11_12_1_A_n'] = "empty"; }else{ $output['suites_11_12_1_A_n'] = $row['suites_11_12_1_A_n']; }
			if(($row['suites_11_12_1_A_o'] == "") || ($row['suites_11_12_1_A_o'] === NULL)){ $output['suites_11_12_1_A_o'] = "empty"; }else{ $output['suites_11_12_1_A_o'] = $row['suites_11_12_1_A_o']; }
			if(($row['suites_11_12_1_A_p'] == "") || ($row['suites_11_12_1_A_p'] === NULL)){ $output['suites_11_12_1_A_p'] = "empty"; }else{ $output['suites_11_12_1_A_p'] = $row['suites_11_12_1_A_p']; }
			if(($row['suites_11_12_1_A_q'] == "") || ($row['suites_11_12_1_A_q'] === NULL)){ $output['suites_11_12_1_A_q'] = "empty"; }else{ $output['suites_11_12_1_A_q'] = $row['suites_11_12_1_A_q']; }
			if(($row['suites_11_12_1_A_r'] == "") || ($row['suites_11_12_1_A_r'] === NULL)){ $output['suites_11_12_1_A_r'] = "empty"; }else{ $output['suites_11_12_1_A_r'] = $row['suites_11_12_1_A_r']; }
			if(($row['suites_11_12_1_A_s'] == "") || ($row['suites_11_12_1_A_s'] === NULL)){ $output['suites_11_12_1_A_s'] = "empty"; }else{ $output['suites_11_12_1_A_s'] = $row['suites_11_12_1_A_s']; }
			if(($row['suites_11_12_1_A_t'] == "") || ($row['suites_11_12_1_A_t'] === NULL)){ $output['suites_11_12_1_A_t'] = "empty"; }else{ $output['suites_11_12_1_A_t'] = $row['suites_11_12_1_A_t']; }
			if(($row['suites_11_12_1_A_u'] == "") || ($row['suites_11_12_1_A_u'] === NULL)){ $output['suites_11_12_1_A_u'] = "empty"; }else{ $output['suites_11_12_1_A_u'] = $row['suites_11_12_1_A_u']; }
			if(($row['suites_11_12_1_A_v'] == "") || ($row['suites_11_12_1_A_v'] === NULL)){ $output['suites_11_12_1_A_v'] = "empty"; }else{ $output['suites_11_12_1_A_v'] = $row['suites_11_12_1_A_v']; }
			if(($row['suites_11_12_1_B'] == "") || ($row['suites_11_12_1_B'] === NULL)){ $output['suites_11_12_1_B'] = "empty"; }else{ $output['suites_11_12_1_B'] = $row['suites_11_12_1_B']; }
			if(($row['suites_11_12_1_C'] == "") || ($row['suites_11_12_1_C'] === NULL)){ $output['suites_11_12_1_C'] = "empty"; }else{ $output['suites_11_12_1_C'] = $row['suites_11_12_1_C']; }
			$output['suites_11_12_1_text'] = $row['suites_11_12_1_text'];
			if(($row['suites_11_13_1_A'] == "") || ($row['suites_11_13_1_A'] === NULL)){ $output['suites_11_13_1_A'] = "empty"; }else{ $output['suites_11_13_1_A'] = $row['suites_11_13_1_A']; }
			if(($row['suites_11_13_1_B'] == "") || ($row['suites_11_13_1_B'] === NULL)){ $output['suites_11_13_1_B'] = "empty"; }else{ $output['suites_11_13_1_B'] = $row['suites_11_13_1_B']; }
			$output['suites_11_13_1_text'] = $row['suites_11_13_1_text'];
			if(($row['suites_11_14_1_A'] == "") || ($row['suites_11_14_1_A'] === NULL)){ $output['suites_11_14_1_A'] = "empty"; }else{ $output['suites_11_14_1_A'] = $row['suites_11_14_1_A']; }
			if(($row['suites_11_14_1_B_a'] == "") || ($row['suites_11_14_1_B_a'] === NULL)){ $output['suites_11_14_1_B_a'] = "empty"; }else{ $output['suites_11_14_1_B_a'] = $row['suites_11_14_1_B_a']; }
			if(($row['suites_11_14_1_B_b'] == "") || ($row['suites_11_14_1_B_b'] === NULL)){ $output['suites_11_14_1_B_b'] = "empty"; }else{ $output['suites_11_14_1_B_b'] = $row['suites_11_14_1_B_b']; }
			if(($row['suites_11_14_1_B_c'] == "") || ($row['suites_11_14_1_B_c'] === NULL)){ $output['suites_11_14_1_B_c'] = "empty"; }else{ $output['suites_11_14_1_B_c'] = $row['suites_11_14_1_B_c']; }
			if(($row['suites_11_14_1_C'] == "") || ($row['suites_11_14_1_C'] === NULL)){ $output['suites_11_14_1_C'] = "empty"; }else{ $output['suites_11_14_1_C'] = $row['suites_11_14_1_C']; }
			$output['suites_11_14_1_text'] = $row['suites_11_14_1_text'];
			if(($row['suites_11_15_1_A'] == "") || ($row['suites_11_15_1_A'] === NULL)){ $output['suites_11_15_1_A'] = "empty"; }else{ $output['suites_11_15_1_A'] = $row['suites_11_15_1_A']; }
			$output['suites_11_15_1_text'] = $row['suites_11_15_1_text'];
			if(($row['suites_11_16_1_A_a'] == "") || ($row['suites_11_16_1_A_a'] === NULL)){ $output['suites_11_16_1_A_a'] = "empty"; }else{ $output['suites_11_16_1_A_a'] = $row['suites_11_16_1_A_a']; }
			if(($row['suites_11_16_1_A_b'] == "") || ($row['suites_11_16_1_A_b'] === NULL)){ $output['suites_11_16_1_A_b'] = "empty"; }else{ $output['suites_11_16_1_A_b'] = $row['suites_11_16_1_A_b']; }
			if(($row['suites_11_16_1_A_c'] == "") || ($row['suites_11_16_1_A_c'] === NULL)){ $output['suites_11_16_1_A_c'] = "empty"; }else{ $output['suites_11_16_1_A_c'] = $row['suites_11_16_1_A_c']; }
			if(($row['suites_11_16_1_A_d'] == "") || ($row['suites_11_16_1_A_d'] === NULL)){ $output['suites_11_16_1_A_d'] = "empty"; }else{ $output['suites_11_16_1_A_d'] = $row['suites_11_16_1_A_d']; }
			if(($row['suites_11_16_1_A_e'] == "") || ($row['suites_11_16_1_A_e'] === NULL)){ $output['suites_11_16_1_A_e'] = "empty"; }else{ $output['suites_11_16_1_A_e'] = $row['suites_11_16_1_A_e']; }
			if(($row['suites_11_16_1_A_f'] == "") || ($row['suites_11_16_1_A_f'] === NULL)){ $output['suites_11_16_1_A_f'] = "empty"; }else{ $output['suites_11_16_1_A_f'] = $row['suites_11_16_1_A_f']; }
			if(($row['suites_11_16_1_A_g'] == "") || ($row['suites_11_16_1_A_g'] === NULL)){ $output['suites_11_16_1_A_g'] = "empty"; }else{ $output['suites_11_16_1_A_g'] = $row['suites_11_16_1_A_g']; }
			if(($row['suites_11_16_1_A_h'] == "") || ($row['suites_11_16_1_A_h'] === NULL)){ $output['suites_11_16_1_A_h'] = "empty"; }else{ $output['suites_11_16_1_A_h'] = $row['suites_11_16_1_A_h']; }
			if(($row['suites_11_16_1_A_i'] == "") || ($row['suites_11_16_1_A_i'] === NULL)){ $output['suites_11_16_1_A_i'] = "empty"; }else{ $output['suites_11_16_1_A_i'] = $row['suites_11_16_1_A_i']; }
			if(($row['suites_11_16_1_A_j'] == "") || ($row['suites_11_16_1_A_j'] === NULL)){ $output['suites_11_16_1_A_j'] = "empty"; }else{ $output['suites_11_16_1_A_j'] = $row['suites_11_16_1_A_j']; }
			if(($row['suites_11_16_1_A_k'] == "") || ($row['suites_11_16_1_A_k'] === NULL)){ $output['suites_11_16_1_A_k'] = "empty"; }else{ $output['suites_11_16_1_A_k'] = $row['suites_11_16_1_A_k']; }
			if(($row['suites_11_16_1_A_l'] == "") || ($row['suites_11_16_1_A_l'] === NULL)){ $output['suites_11_16_1_A_l'] = "empty"; }else{ $output['suites_11_16_1_A_l'] = $row['suites_11_16_1_A_l']; }
			if(($row['suites_11_16_1_A_m'] == "") || ($row['suites_11_16_1_A_m'] === NULL)){ $output['suites_11_16_1_A_m'] = "empty"; }else{ $output['suites_11_16_1_A_m'] = $row['suites_11_16_1_A_m']; }
			if(($row['suites_11_16_1_A_n'] == "") || ($row['suites_11_16_1_A_n'] === NULL)){ $output['suites_11_16_1_A_n'] = "empty"; }else{ $output['suites_11_16_1_A_n'] = $row['suites_11_16_1_A_n']; }
			if(($row['suites_11_16_1_A_o'] == "") || ($row['suites_11_16_1_A_o'] === NULL)){ $output['suites_11_16_1_A_o'] = "empty"; }else{ $output['suites_11_16_1_A_o'] = $row['suites_11_16_1_A_o']; }
			if(($row['suites_11_16_1_A_p'] == "") || ($row['suites_11_16_1_A_p'] === NULL)){ $output['suites_11_16_1_A_p'] = "empty"; }else{ $output['suites_11_16_1_A_p'] = $row['suites_11_16_1_A_p']; }
			if(($row['suites_11_16_1_A_q'] == "") || ($row['suites_11_16_1_A_q'] === NULL)){ $output['suites_11_16_1_A_q'] = "empty"; }else{ $output['suites_11_16_1_A_q'] = $row['suites_11_16_1_A_q']; }
			if(($row['suites_11_16_1_A_r'] == "") || ($row['suites_11_16_1_A_r'] === NULL)){ $output['suites_11_16_1_A_r'] = "empty"; }else{ $output['suites_11_16_1_A_r'] = $row['suites_11_16_1_A_r']; }
			if(($row['suites_11_16_1_A_s'] == "") || ($row['suites_11_16_1_A_s'] === NULL)){ $output['suites_11_16_1_A_s'] = "empty"; }else{ $output['suites_11_16_1_A_s'] = $row['suites_11_16_1_A_s']; }
			if(($row['suites_11_16_1_A_t'] == "") || ($row['suites_11_16_1_A_t'] === NULL)){ $output['suites_11_16_1_A_t'] = "empty"; }else{ $output['suites_11_16_1_A_t'] = $row['suites_11_16_1_A_t']; }
			if(($row['suites_11_16_1_A_u'] == "") || ($row['suites_11_16_1_A_u'] === NULL)){ $output['suites_11_16_1_A_u'] = "empty"; }else{ $output['suites_11_16_1_A_u'] = $row['suites_11_16_1_A_u']; }
			if(($row['suites_11_16_1_A_v'] == "") || ($row['suites_11_16_1_A_v'] === NULL)){ $output['suites_11_16_1_A_v'] = "empty"; }else{ $output['suites_11_16_1_A_v'] = $row['suites_11_16_1_A_v']; }
			if(($row['suites_11_16_1_A_w'] == "") || ($row['suites_11_16_1_A_w'] === NULL)){ $output['suites_11_16_1_A_w'] = "empty"; }else{ $output['suites_11_16_1_A_w'] = $row['suites_11_16_1_A_w']; }
			if(($row['suites_11_16_1_A_x'] == "") || ($row['suites_11_16_1_A_x'] === NULL)){ $output['suites_11_16_1_A_x'] = "empty"; }else{ $output['suites_11_16_1_A_x'] = $row['suites_11_16_1_A_x']; }
			if(($row['suites_11_16_1_B'] == "") || ($row['suites_11_16_1_B'] === NULL)){ $output['suites_11_16_1_B'] = "empty"; }else{ $output['suites_11_16_1_B'] = $row['suites_11_16_1_B']; }
			if(($row['suites_11_16_1_C'] == "") || ($row['suites_11_16_1_C'] === NULL)){ $output['suites_11_16_1_C'] = "empty"; }else{ $output['suites_11_16_1_C'] = $row['suites_11_16_1_C']; }
			if(($row['suites_11_16_1_D'] == "") || ($row['suites_11_16_1_D'] === NULL)){ $output['suites_11_16_1_D'] = "empty"; }else{ $output['suites_11_16_1_D'] = $row['suites_11_16_1_D']; }
			if(($row['suites_11_16_1_E'] == "") || ($row['suites_11_16_1_E'] === NULL)){ $output['suites_11_16_1_E'] = "empty"; }else{ $output['suites_11_16_1_E'] = $row['suites_11_16_1_E']; }
			if(($row['suites_11_16_1_F'] == "") || ($row['suites_11_16_1_F'] === NULL)){ $output['suites_11_16_1_F'] = "empty"; }else{ $output['suites_11_16_1_F'] = $row['suites_11_16_1_F']; }
			$output['suites_11_16_1_text'] = $row['suites_11_16_1_text'];
			if(($row['suites_11_17_1_A_a'] == "") || ($row['suites_11_17_1_A_a'] === NULL)){ $output['suites_11_17_1_A_a'] = "empty"; }else{ $output['suites_11_17_1_A_a'] = $row['suites_11_17_1_A_a']; }
			if(($row['suites_11_17_1_A_b'] == "") || ($row['suites_11_17_1_A_b'] === NULL)){ $output['suites_11_17_1_A_b'] = "empty"; }else{ $output['suites_11_17_1_A_b'] = $row['suites_11_17_1_A_b']; }
			if(($row['suites_11_17_1_A_c'] == "") || ($row['suites_11_17_1_A_c'] === NULL)){ $output['suites_11_17_1_A_c'] = "empty"; }else{ $output['suites_11_17_1_A_c'] = $row['suites_11_17_1_A_c']; }
			if(($row['suites_11_17_1_A_d'] == "") || ($row['suites_11_17_1_A_d'] === NULL)){ $output['suites_11_17_1_A_d'] = "empty"; }else{ $output['suites_11_17_1_A_d'] = $row['suites_11_17_1_A_d']; }
			if(($row['suites_11_17_1_A_e'] == "") || ($row['suites_11_17_1_A_e'] === NULL)){ $output['suites_11_17_1_A_e'] = "empty"; }else{ $output['suites_11_17_1_A_e'] = $row['suites_11_17_1_A_e']; }
			if(($row['suites_11_17_1_A_f'] == "") || ($row['suites_11_17_1_A_f'] === NULL)){ $output['suites_11_17_1_A_f'] = "empty"; }else{ $output['suites_11_17_1_A_f'] = $row['suites_11_17_1_A_f']; }
			if(($row['suites_11_17_1_A_g'] == "") || ($row['suites_11_17_1_A_g'] === NULL)){ $output['suites_11_17_1_A_g'] = "empty"; }else{ $output['suites_11_17_1_A_g'] = $row['suites_11_17_1_A_g']; }
			if(($row['suites_11_17_1_A_h'] == "") || ($row['suites_11_17_1_A_h'] === NULL)){ $output['suites_11_17_1_A_h'] = "empty"; }else{ $output['suites_11_17_1_A_h'] = $row['suites_11_17_1_A_h']; }
			if(($row['suites_11_17_1_A_i'] == "") || ($row['suites_11_17_1_A_i'] === NULL)){ $output['suites_11_17_1_A_i'] = "empty"; }else{ $output['suites_11_17_1_A_i'] = $row['suites_11_17_1_A_i']; }
			if(($row['suites_11_17_1_A_j'] == "") || ($row['suites_11_17_1_A_j'] === NULL)){ $output['suites_11_17_1_A_j'] = "empty"; }else{ $output['suites_11_17_1_A_j'] = $row['suites_11_17_1_A_j']; }
			if(($row['suites_11_17_1_A_k'] == "") || ($row['suites_11_17_1_A_k'] === NULL)){ $output['suites_11_17_1_A_k'] = "empty"; }else{ $output['suites_11_17_1_A_k'] = $row['suites_11_17_1_A_k']; }
			if(($row['suites_11_17_1_A_l'] == "") || ($row['suites_11_17_1_A_l'] === NULL)){ $output['suites_11_17_1_A_l'] = "empty"; }else{ $output['suites_11_17_1_A_l'] = $row['suites_11_17_1_A_l']; }
			if(($row['suites_11_17_1_B'] == "") || ($row['suites_11_17_1_B'] === NULL)){ $output['suites_11_17_1_B'] = "empty"; }else{ $output['suites_11_17_1_B'] = $row['suites_11_17_1_B']; }
			if(($row['suites_11_17_1_C'] == "") || ($row['suites_11_17_1_C'] === NULL)){ $output['suites_11_17_1_C'] = "empty"; }else{ $output['suites_11_17_1_C'] = $row['suites_11_17_1_C']; }
			$output['suites_11_17_1_text'] = $row['suites_11_17_1_text'];
			if(($row['suites_11_18_1_A'] == "") || ($row['suites_11_18_1_A'] === NULL)){ $output['suites_11_18_1_A'] = "empty"; }else{ $output['suites_11_18_1_A'] = $row['suites_11_18_1_A']; }
			if(($row['suites_11_18_1_B'] == "") || ($row['suites_11_18_1_B'] === NULL)){ $output['suites_11_18_1_B'] = "empty"; }else{ $output['suites_11_18_1_B'] = $row['suites_11_18_1_B']; }
			if(($row['suites_11_18_1_C'] == "") || ($row['suites_11_18_1_C'] === NULL)){ $output['suites_11_18_1_C'] = "empty"; }else{ $output['suites_11_18_1_C'] = $row['suites_11_18_1_C']; }
			if(($row['suites_11_18_1_D'] == "") || ($row['suites_11_18_1_D'] === NULL)){ $output['suites_11_18_1_D'] = "empty"; }else{ $output['suites_11_18_1_D'] = $row['suites_11_18_1_D']; }
			if(($row['suites_11_18_1_E'] == "") || ($row['suites_11_18_1_E'] === NULL)){ $output['suites_11_18_1_E'] = "empty"; }else{ $output['suites_11_18_1_E'] = $row['suites_11_18_1_E']; }
			if(($row['suites_11_18_1_F'] == "") || ($row['suites_11_18_1_F'] === NULL)){ $output['suites_11_18_1_F'] = "empty"; }else{ $output['suites_11_18_1_F'] = $row['suites_11_18_1_F']; }
			$output['suites_11_18_1_text'] = $row['suites_11_18_1_text'];
			if(($row['suites_11_19_1_A_a'] == "") || ($row['suites_11_19_1_A_a'] === NULL)){ $output['suites_11_19_1_A_a'] = "empty"; }else{ $output['suites_11_19_1_A_a'] = $row['suites_11_19_1_A_a']; }
			if(($row['suites_11_19_1_A_b'] == "") || ($row['suites_11_19_1_A_b'] === NULL)){ $output['suites_11_19_1_A_b'] = "empty"; }else{ $output['suites_11_19_1_A_b'] = $row['suites_11_19_1_A_b']; }
			if(($row['suites_11_19_1_A_c'] == "") || ($row['suites_11_19_1_A_c'] === NULL)){ $output['suites_11_19_1_A_c'] = "empty"; }else{ $output['suites_11_19_1_A_c'] = $row['suites_11_19_1_A_c']; }
			if(($row['suites_11_19_1_A_d'] == "") || ($row['suites_11_19_1_A_d'] === NULL)){ $output['suites_11_19_1_A_d'] = "empty"; }else{ $output['suites_11_19_1_A_d'] = $row['suites_11_19_1_A_d']; }
			if(($row['suites_11_19_1_A_e'] == "") || ($row['suites_11_19_1_A_e'] === NULL)){ $output['suites_11_19_1_A_e'] = "empty"; }else{ $output['suites_11_19_1_A_e'] = $row['suites_11_19_1_A_e']; }
			if(($row['suites_11_19_1_B'] == "") || ($row['suites_11_19_1_B'] === NULL)){ $output['suites_11_19_1_B'] = "empty"; }else{ $output['suites_11_19_1_B'] = $row['suites_11_19_1_B']; }
			if(($row['suites_11_19_1_C'] == "") || ($row['suites_11_19_1_C'] === NULL)){ $output['suites_11_19_1_C'] = "empty"; }else{ $output['suites_11_19_1_C'] = $row['suites_11_19_1_C']; }
			if(($row['suites_11_19_1_D'] == "") || ($row['suites_11_19_1_D'] === NULL)){ $output['suites_11_19_1_D'] = "empty"; }else{ $output['suites_11_19_1_D'] = $row['suites_11_19_1_D']; }
			if(($row['suites_11_19_1_E'] == "") || ($row['suites_11_19_1_E'] === NULL)){ $output['suites_11_19_1_E'] = "empty"; }else{ $output['suites_11_19_1_E'] = $row['suites_11_19_1_E']; }
			if(($row['suites_11_19_1_F'] == "") || ($row['suites_11_19_1_F'] === NULL)){ $output['suites_11_19_1_F'] = "empty"; }else{ $output['suites_11_19_1_F'] = $row['suites_11_19_1_F']; }
			$output['suites_11_19_1_text'] = $row['suites_11_19_1_text'];
			if(($row['suites_11_20_1_A'] == "") || ($row['suites_11_20_1_A'] === NULL)){ $output['suites_11_20_1_A'] = "empty"; }else{ $output['suites_11_20_1_A'] = $row['suites_11_20_1_A']; }
			if(($row['suites_11_20_1_B'] == "") || ($row['suites_11_20_1_B'] === NULL)){ $output['suites_11_20_1_B'] = "empty"; }else{ $output['suites_11_20_1_B'] = $row['suites_11_20_1_B']; }
			if(($row['suites_11_20_1_C'] == "") || ($row['suites_11_20_1_C'] === NULL)){ $output['suites_11_20_1_C'] = "empty"; }else{ $output['suites_11_20_1_C'] = $row['suites_11_20_1_C']; }
			$output['suites_11_20_1_text'] = $row['suites_11_20_1_text'];
			if(($row['suites_11_21_1_A'] == "") || ($row['suites_11_21_1_A'] === NULL)){ $output['suites_11_21_1_A'] = "empty"; }else{ $output['suites_11_21_1_A'] = $row['suites_11_21_1_A']; }
			if(($row['suites_11_21_1_B'] == "") || ($row['suites_11_21_1_B'] === NULL)){ $output['suites_11_21_1_B'] = "empty"; }else{ $output['suites_11_21_1_B'] = $row['suites_11_21_1_B']; }
			if(($row['suites_11_21_1_C'] == "") || ($row['suites_11_21_1_C'] === NULL)){ $output['suites_11_21_1_C'] = "empty"; }else{ $output['suites_11_21_1_C'] = $row['suites_11_21_1_C']; }
			$output['suites_11_21_1_text'] = $row['suites_11_21_1_text'];
			
			//HYGIENE AND SANITATION
			
			if(($row['hygiene_and_sanitation_12_1_1_A'] == "") || ($row['hygiene_and_sanitation_12_1_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_A'] = $row['hygiene_and_sanitation_12_1_1_A']; }
			if(($row['hygiene_and_sanitation_12_1_1_B'] == "") || ($row['hygiene_and_sanitation_12_1_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_B'] = $row['hygiene_and_sanitation_12_1_1_B']; }
			if(($row['hygiene_and_sanitation_12_1_1_C'] == "") || ($row['hygiene_and_sanitation_12_1_1_C'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_C'] = $row['hygiene_and_sanitation_12_1_1_C']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_a'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_a'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_a'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_a'] = $row['hygiene_and_sanitation_12_1_1_D_a']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_b'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_b'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_b'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_b'] = $row['hygiene_and_sanitation_12_1_1_D_b']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_c'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_c'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_c'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_c'] = $row['hygiene_and_sanitation_12_1_1_D_c']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_d'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_d'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_d'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_d'] = $row['hygiene_and_sanitation_12_1_1_D_d']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_e'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_e'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_e'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_e'] = $row['hygiene_and_sanitation_12_1_1_D_e']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_f'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_f'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_f'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_f'] = $row['hygiene_and_sanitation_12_1_1_D_f']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_g'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_g'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_g'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_g'] = $row['hygiene_and_sanitation_12_1_1_D_g']; }
			if(($row['hygiene_and_sanitation_12_1_1_D_h'] == "") || ($row['hygiene_and_sanitation_12_1_1_D_h'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_D_h'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_D_h'] = $row['hygiene_and_sanitation_12_1_1_D_h']; }
			if(($row['hygiene_and_sanitation_12_1_1_E'] == "") || ($row['hygiene_and_sanitation_12_1_1_E'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_E'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_E'] = $row['hygiene_and_sanitation_12_1_1_E']; }
			if(($row['hygiene_and_sanitation_12_1_1_F'] == "") || ($row['hygiene_and_sanitation_12_1_1_F'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_F'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_F'] = $row['hygiene_and_sanitation_12_1_1_F']; }
			if(($row['hygiene_and_sanitation_12_1_1_G'] == "") || ($row['hygiene_and_sanitation_12_1_1_G'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_G'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_G'] = $row['hygiene_and_sanitation_12_1_1_G']; }
			if(($row['hygiene_and_sanitation_12_1_1_H'] == "") || ($row['hygiene_and_sanitation_12_1_1_H'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_H'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_H'] = $row['hygiene_and_sanitation_12_1_1_H']; }
			if(($row['hygiene_and_sanitation_12_1_1_I_a'] == "") || ($row['hygiene_and_sanitation_12_1_1_I_a'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_I_a'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_I_a'] = $row['hygiene_and_sanitation_12_1_1_I_a']; }
			if(($row['hygiene_and_sanitation_12_1_1_I_b'] == "") || ($row['hygiene_and_sanitation_12_1_1_I_b'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_I_b'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_I_b'] = $row['hygiene_and_sanitation_12_1_1_I_b']; }
			if(($row['hygiene_and_sanitation_12_1_1_I_c'] == "") || ($row['hygiene_and_sanitation_12_1_1_I_c'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_I_c'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_I_c'] = $row['hygiene_and_sanitation_12_1_1_I_c']; }
			if(($row['hygiene_and_sanitation_12_1_1_I_d'] == "") || ($row['hygiene_and_sanitation_12_1_1_I_d'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_I_d'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_I_d'] = $row['hygiene_and_sanitation_12_1_1_I_d']; }
			if(($row['hygiene_and_sanitation_12_1_1_I_e'] == "") || ($row['hygiene_and_sanitation_12_1_1_I_e'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_I_e'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_I_e'] = $row['hygiene_and_sanitation_12_1_1_I_e']; }
			if(($row['hygiene_and_sanitation_12_1_1_J'] == "") || ($row['hygiene_and_sanitation_12_1_1_J'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_J'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_J'] = $row['hygiene_and_sanitation_12_1_1_J']; }
			if(($row['hygiene_and_sanitation_12_1_1_K'] == "") || ($row['hygiene_and_sanitation_12_1_1_K'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_K'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_K'] = $row['hygiene_and_sanitation_12_1_1_K']; }
			if(($row['hygiene_and_sanitation_12_1_1_L'] == "") || ($row['hygiene_and_sanitation_12_1_1_L'] === NULL)){ $output['hygiene_and_sanitation_12_1_1_L'] = "empty"; }else{ $output['hygiene_and_sanitation_12_1_1_L'] = $row['hygiene_and_sanitation_12_1_1_L']; }
			$output['hygiene_and_sanitation_12_1_1_text'] = $row['hygiene_and_sanitation_12_1_1_text'];
			if(($row['hygiene_and_sanitation_12_2_1_A'] == "") || ($row['hygiene_and_sanitation_12_2_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_A'] = $row['hygiene_and_sanitation_12_2_1_A']; }
			if(($row['hygiene_and_sanitation_12_2_1_B'] == "") || ($row['hygiene_and_sanitation_12_2_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_B'] = $row['hygiene_and_sanitation_12_2_1_B']; }
			if(($row['hygiene_and_sanitation_12_2_1_C'] == "") || ($row['hygiene_and_sanitation_12_2_1_C'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_C'] = $row['hygiene_and_sanitation_12_2_1_C']; }
			if(($row['hygiene_and_sanitation_12_2_1_D'] == "") || ($row['hygiene_and_sanitation_12_2_1_D'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_D'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_D'] = $row['hygiene_and_sanitation_12_2_1_D']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_a'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_a'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_a'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_a'] = $row['hygiene_and_sanitation_12_2_1_E_a']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_b'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_b'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_b'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_b'] = $row['hygiene_and_sanitation_12_2_1_E_b']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_c'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_c'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_c'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_c'] = $row['hygiene_and_sanitation_12_2_1_E_c']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_d'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_d'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_d'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_d'] = $row['hygiene_and_sanitation_12_2_1_E_d']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_e'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_e'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_e'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_e'] = $row['hygiene_and_sanitation_12_2_1_E_e']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_f'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_f'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_f'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_f'] = $row['hygiene_and_sanitation_12_2_1_E_f']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_g'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_g'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_g'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_g'] = $row['hygiene_and_sanitation_12_2_1_E_g']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_h'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_h'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_h'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_h'] = $row['hygiene_and_sanitation_12_2_1_E_h']; }
			if(($row['hygiene_and_sanitation_12_2_1_E_i'] == "") || ($row['hygiene_and_sanitation_12_2_1_E_i'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_E_i'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_E_i'] = $row['hygiene_and_sanitation_12_2_1_E_i']; }
			if(($row['hygiene_and_sanitation_12_2_1_F'] == "") || ($row['hygiene_and_sanitation_12_2_1_F'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_F'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_F'] = $row['hygiene_and_sanitation_12_2_1_F']; }
			if(($row['hygiene_and_sanitation_12_2_1_G'] == "") || ($row['hygiene_and_sanitation_12_2_1_G'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_G'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_G'] = $row['hygiene_and_sanitation_12_2_1_G']; }
			if(($row['hygiene_and_sanitation_12_2_1_H_a'] == "") || ($row['hygiene_and_sanitation_12_2_1_H_a'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_H_a'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_H_a'] = $row['hygiene_and_sanitation_12_2_1_H_a']; }
			if(($row['hygiene_and_sanitation_12_2_1_H_b'] == "") || ($row['hygiene_and_sanitation_12_2_1_H_b'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_H_b'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_H_b'] = $row['hygiene_and_sanitation_12_2_1_H_b']; }
			if(($row['hygiene_and_sanitation_12_2_1_H_c'] == "") || ($row['hygiene_and_sanitation_12_2_1_H_c'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_H_c'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_H_c'] = $row['hygiene_and_sanitation_12_2_1_H_c']; }
			if(($row['hygiene_and_sanitation_12_2_1_H_d'] == "") || ($row['hygiene_and_sanitation_12_2_1_H_d'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_H_d'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_H_d'] = $row['hygiene_and_sanitation_12_2_1_H_d']; }
			if(($row['hygiene_and_sanitation_12_2_1_I'] == "") || ($row['hygiene_and_sanitation_12_2_1_I'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_I'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_I'] = $row['hygiene_and_sanitation_12_2_1_I']; }
			if(($row['hygiene_and_sanitation_12_2_1_J'] == "") || ($row['hygiene_and_sanitation_12_2_1_J'] === NULL)){ $output['hygiene_and_sanitation_12_2_1_J'] = "empty"; }else{ $output['hygiene_and_sanitation_12_2_1_J'] = $row['hygiene_and_sanitation_12_2_1_J']; }
			$output['hygiene_and_sanitation_12_2_1_text'] = $row['hygiene_and_sanitation_12_2_1_text'];
			if(($row['hygiene_and_sanitation_12_3_1_A'] == "") || ($row['hygiene_and_sanitation_12_3_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_A'] = $row['hygiene_and_sanitation_12_3_1_A']; }
			if(($row['hygiene_and_sanitation_12_3_1_B'] == "") || ($row['hygiene_and_sanitation_12_3_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_B'] = $row['hygiene_and_sanitation_12_3_1_B']; }
			if(($row['hygiene_and_sanitation_12_3_1_C'] == "") || ($row['hygiene_and_sanitation_12_3_1_C'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_C'] = $row['hygiene_and_sanitation_12_3_1_C']; }
			if(($row['hygiene_and_sanitation_12_3_1_D'] == "") || ($row['hygiene_and_sanitation_12_3_1_D'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_D'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_D'] = $row['hygiene_and_sanitation_12_3_1_D']; }
			if(($row['hygiene_and_sanitation_12_3_1_E'] == "") || ($row['hygiene_and_sanitation_12_3_1_E'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_E'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_E'] = $row['hygiene_and_sanitation_12_3_1_E']; }
			if(($row['hygiene_and_sanitation_12_3_1_F'] == "") || ($row['hygiene_and_sanitation_12_3_1_F'] === NULL)){ $output['hygiene_and_sanitation_12_3_1_F'] = "empty"; }else{ $output['hygiene_and_sanitation_12_3_1_F'] = $row['hygiene_and_sanitation_12_3_1_F']; }
			$output['hygiene_and_sanitation_12_3_1_text'] = $row['hygiene_and_sanitation_12_3_1_text'];
			if(($row['hygiene_and_sanitation_12_4_1_A'] == "") || ($row['hygiene_and_sanitation_12_4_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_4_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_4_1_A'] = $row['hygiene_and_sanitation_12_4_1_A']; }
			if(($row['hygiene_and_sanitation_12_4_1_B'] == "") || ($row['hygiene_and_sanitation_12_4_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_4_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_4_1_B'] = $row['hygiene_and_sanitation_12_4_1_B']; }
			if(($row['hygiene_and_sanitation_12_4_1_C'] == "") || ($row['hygiene_and_sanitation_12_4_1_C'] === NULL)){ $output['hygiene_and_sanitation_12_4_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_12_4_1_C'] = $row['hygiene_and_sanitation_12_4_1_C']; }
			$output['hygiene_and_sanitation_12_4_1_text'] = $row['hygiene_and_sanitation_12_4_1_text'];
			if(($row['hygiene_and_sanitation_12_5_1_A'] == "") || ($row['hygiene_and_sanitation_12_5_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_5_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_5_1_A'] = $row['hygiene_and_sanitation_12_5_1_A']; }
			if(($row['hygiene_and_sanitation_12_5_1_B'] == "") || ($row['hygiene_and_sanitation_12_5_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_5_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_5_1_B'] = $row['hygiene_and_sanitation_12_5_1_B']; }
			$output['hygiene_and_sanitation_12_5_1_text'] = $row['hygiene_and_sanitation_12_5_1_text'];
			if(($row['hygiene_and_sanitation_12_6_1_A'] == "") || ($row['hygiene_and_sanitation_12_6_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_6_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_6_1_A'] = $row['hygiene_and_sanitation_12_6_1_A']; }
			if(($row['hygiene_and_sanitation_12_6_1_B_a'] == "") || ($row['hygiene_and_sanitation_12_6_1_B_a'] === NULL)){ $output['hygiene_and_sanitation_12_6_1_B_a'] = "empty"; }else{ $output['hygiene_and_sanitation_12_6_1_B_a'] = $row['hygiene_and_sanitation_12_6_1_B_a']; }
			if(($row['hygiene_and_sanitation_12_6_1_B_b'] == "") || ($row['hygiene_and_sanitation_12_6_1_B_b'] === NULL)){ $output['hygiene_and_sanitation_12_6_1_B_b'] = "empty"; }else{ $output['hygiene_and_sanitation_12_6_1_B_b'] = $row['hygiene_and_sanitation_12_6_1_B_b']; }
			if(($row['hygiene_and_sanitation_12_6_1_C'] == "") || ($row['hygiene_and_sanitation_12_6_1_C'] === NULL)){ $output['hygiene_and_sanitation_12_6_1_C'] = "empty"; }else{ $output['hygiene_and_sanitation_12_6_1_C'] = $row['hygiene_and_sanitation_12_6_1_C']; }
			$output['hygiene_and_sanitation_12_6_1_text'] = $row['hygiene_and_sanitation_12_6_1_text'];
			if(($row['hygiene_and_sanitation_12_7_1_A'] == "") || ($row['hygiene_and_sanitation_12_7_1_A'] === NULL)){ $output['hygiene_and_sanitation_12_7_1_A'] = "empty"; }else{ $output['hygiene_and_sanitation_12_7_1_A'] = $row['hygiene_and_sanitation_12_7_1_A']; }
			if(($row['hygiene_and_sanitation_12_7_1_B'] == "") || ($row['hygiene_and_sanitation_12_7_1_B'] === NULL)){ $output['hygiene_and_sanitation_12_7_1_B'] = "empty"; }else{ $output['hygiene_and_sanitation_12_7_1_B'] = $row['hygiene_and_sanitation_12_7_1_B']; }
			$output['hygiene_and_sanitation_12_7_1_text'] = $row['hygiene_and_sanitation_12_7_1_text'];
			
			//SAFETY AND SECURITY
			
			if(($row['safety_and_security_13_1_1_A'] == "") || ($row['safety_and_security_13_1_1_A'] === NULL)){ $output['safety_and_security_13_1_1_A'] = "empty"; }else{ $output['safety_and_security_13_1_1_A'] = $row['safety_and_security_13_1_1_A']; }
			if(($row['safety_and_security_13_1_1_B'] == "") || ($row['safety_and_security_13_1_1_B'] === NULL)){ $output['safety_and_security_13_1_1_B'] = "empty"; }else{ $output['safety_and_security_13_1_1_B'] = $row['safety_and_security_13_1_1_B']; }
			if(($row['safety_and_security_13_1_1_C'] == "") || ($row['safety_and_security_13_1_1_C'] === NULL)){ $output['safety_and_security_13_1_1_C'] = "empty"; }else{ $output['safety_and_security_13_1_1_C'] = $row['safety_and_security_13_1_1_C']; }
			if(($row['safety_and_security_13_1_1_D'] == "") || ($row['safety_and_security_13_1_1_D'] === NULL)){ $output['safety_and_security_13_1_1_D'] = "empty"; }else{ $output['safety_and_security_13_1_1_D'] = $row['safety_and_security_13_1_1_D']; }
			if(($row['safety_and_security_13_1_1_E'] == "") || ($row['safety_and_security_13_1_1_E'] === NULL)){ $output['safety_and_security_13_1_1_E'] = "empty"; }else{ $output['safety_and_security_13_1_1_E'] = $row['safety_and_security_13_1_1_E']; }
			if(($row['safety_and_security_13_1_1_F_a'] == "") || ($row['safety_and_security_13_1_1_F_a'] === NULL)){ $output['safety_and_security_13_1_1_F_a'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_a'] = $row['safety_and_security_13_1_1_F_a']; }
			if(($row['safety_and_security_13_1_1_F_b'] == "") || ($row['safety_and_security_13_1_1_F_b'] === NULL)){ $output['safety_and_security_13_1_1_F_b'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_b'] = $row['safety_and_security_13_1_1_F_b']; }
			if(($row['safety_and_security_13_1_1_F_c'] == "") || ($row['safety_and_security_13_1_1_F_c'] === NULL)){ $output['safety_and_security_13_1_1_F_c'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_c'] = $row['safety_and_security_13_1_1_F_c']; }
			if(($row['safety_and_security_13_1_1_F_d'] == "") || ($row['safety_and_security_13_1_1_F_d'] === NULL)){ $output['safety_and_security_13_1_1_F_d'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_d'] = $row['safety_and_security_13_1_1_F_d']; }
			if(($row['safety_and_security_13_1_1_F_e'] == "") || ($row['safety_and_security_13_1_1_F_e'] === NULL)){ $output['safety_and_security_13_1_1_F_e'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_e'] = $row['safety_and_security_13_1_1_F_e']; }
			if(($row['safety_and_security_13_1_1_F_f'] == "") || ($row['safety_and_security_13_1_1_F_f'] === NULL)){ $output['safety_and_security_13_1_1_F_f'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_f'] = $row['safety_and_security_13_1_1_F_f']; }
			if(($row['safety_and_security_13_1_1_F_g'] == "") || ($row['safety_and_security_13_1_1_F_g'] === NULL)){ $output['safety_and_security_13_1_1_F_g'] = "empty"; }else{ $output['safety_and_security_13_1_1_F_g'] = $row['safety_and_security_13_1_1_F_g']; }
			if(($row['safety_and_security_13_1_1_G'] == "") || ($row['safety_and_security_13_1_1_G'] === NULL)){ $output['safety_and_security_13_1_1_G'] = "empty"; }else{ $output['safety_and_security_13_1_1_G'] = $row['safety_and_security_13_1_1_G']; }
			if(($row['safety_and_security_13_1_1_H'] == "") || ($row['safety_and_security_13_1_1_H'] === NULL)){ $output['safety_and_security_13_1_1_H'] = "empty"; }else{ $output['safety_and_security_13_1_1_H'] = $row['safety_and_security_13_1_1_H']; }
			if(($row['safety_and_security_13_1_1_I'] == "") || ($row['safety_and_security_13_1_1_I'] === NULL)){ $output['safety_and_security_13_1_1_I'] = "empty"; }else{ $output['safety_and_security_13_1_1_I'] = $row['safety_and_security_13_1_1_I']; }
			if(($row['safety_and_security_13_1_1_J'] == "") || ($row['safety_and_security_13_1_1_J'] === NULL)){ $output['safety_and_security_13_1_1_J'] = "empty"; }else{ $output['safety_and_security_13_1_1_J'] = $row['safety_and_security_13_1_1_J']; }
			$output['safety_and_security_13_1_1_text'] = $row['safety_and_security_13_1_1_text'];
			if(($row['safety_and_security_13_2_1_A'] == "") || ($row['safety_and_security_13_2_1_A'] === NULL)){ $output['safety_and_security_13_2_1_A'] = "empty"; }else{ $output['safety_and_security_13_2_1_A'] = $row['safety_and_security_13_2_1_A']; }
			if(($row['safety_and_security_13_2_1_B'] == "") || ($row['safety_and_security_13_2_1_B'] === NULL)){ $output['safety_and_security_13_2_1_B'] = "empty"; }else{ $output['safety_and_security_13_2_1_B'] = $row['safety_and_security_13_2_1_B']; }
			$output['safety_and_security_13_2_1_text'] = $row['safety_and_security_13_2_1_text'];
			if(($row['safety_and_security_13_3_1_A'] == "") || ($row['safety_and_security_13_3_1_A'] === NULL)){ $output['safety_and_security_13_3_1_A'] = "empty"; }else{ $output['safety_and_security_13_3_1_A'] = $row['safety_and_security_13_3_1_A']; }
			if(($row['safety_and_security_13_3_1_B'] == "") || ($row['safety_and_security_13_3_1_B'] === NULL)){ $output['safety_and_security_13_3_1_B'] = "empty"; }else{ $output['safety_and_security_13_3_1_B'] = $row['safety_and_security_13_3_1_B']; }
			if(($row['safety_and_security_13_3_1_C'] == "") || ($row['safety_and_security_13_3_1_C'] === NULL)){ $output['safety_and_security_13_3_1_C'] = "empty"; }else{ $output['safety_and_security_13_3_1_C'] = $row['safety_and_security_13_3_1_C']; }
			if(($row['safety_and_security_13_3_1_D'] == "") || ($row['safety_and_security_13_3_1_D'] === NULL)){ $output['safety_and_security_13_3_1_D'] = "empty"; }else{ $output['safety_and_security_13_3_1_D'] = $row['safety_and_security_13_3_1_D']; }
			if(($row['safety_and_security_13_3_1_E'] == "") || ($row['safety_and_security_13_3_1_E'] === NULL)){ $output['safety_and_security_13_3_1_E'] = "empty"; }else{ $output['safety_and_security_13_3_1_E'] = $row['safety_and_security_13_3_1_E']; }
			if(($row['safety_and_security_13_3_1_F'] == "") || ($row['safety_and_security_13_3_1_F'] === NULL)){ $output['safety_and_security_13_3_1_F'] = "empty"; }else{ $output['safety_and_security_13_3_1_F'] = $row['safety_and_security_13_3_1_F']; }
			if(($row['safety_and_security_13_3_1_G'] == "") || ($row['safety_and_security_13_3_1_G'] === NULL)){ $output['safety_and_security_13_3_1_G'] = "empty"; }else{ $output['safety_and_security_13_3_1_G'] = $row['safety_and_security_13_3_1_G']; }
			if(($row['safety_and_security_13_3_1_H'] == "") || ($row['safety_and_security_13_3_1_H'] === NULL)){ $output['safety_and_security_13_3_1_H'] = "empty"; }else{ $output['safety_and_security_13_3_1_H'] = $row['safety_and_security_13_3_1_H']; }
			$output['safety_and_security_13_3_1_text'] = $row['safety_and_security_13_3_1_text'];
			if(($row['safety_and_security_13_4_1_A'] == "") || ($row['safety_and_security_13_4_1_A'] === NULL)){ $output['safety_and_security_13_4_1_A'] = "empty"; }else{ $output['safety_and_security_13_4_1_A'] = $row['safety_and_security_13_4_1_A']; }
			if(($row['safety_and_security_13_4_1_B'] == "") || ($row['safety_and_security_13_4_1_B'] === NULL)){ $output['safety_and_security_13_4_1_B'] = "empty"; }else{ $output['safety_and_security_13_4_1_B'] = $row['safety_and_security_13_4_1_B']; }
			if(($row['safety_and_security_13_4_1_C'] == "") || ($row['safety_and_security_13_4_1_C'] === NULL)){ $output['safety_and_security_13_4_1_C'] = "empty"; }else{ $output['safety_and_security_13_4_1_C'] = $row['safety_and_security_13_4_1_C']; }
			if(($row['safety_and_security_13_4_1_D'] == "") || ($row['safety_and_security_13_4_1_D'] === NULL)){ $output['safety_and_security_13_4_1_D'] = "empty"; }else{ $output['safety_and_security_13_4_1_D'] = $row['safety_and_security_13_4_1_D']; }
			if(($row['safety_and_security_13_4_1_E'] == "") || ($row['safety_and_security_13_4_1_E'] === NULL)){ $output['safety_and_security_13_4_1_E'] = "empty"; }else{ $output['safety_and_security_13_4_1_E'] = $row['safety_and_security_13_4_1_E']; }
			$output['safety_and_security_13_4_1_text'] = $row['safety_and_security_13_4_1_text'];
			if(($row['safety_and_security_13_5_1_A'] == "") || ($row['safety_and_security_13_5_1_A'] === NULL)){ $output['safety_and_security_13_5_1_A'] = "empty"; }else{ $output['safety_and_security_13_5_1_A'] = $row['safety_and_security_13_5_1_A']; }
			if(($row['safety_and_security_13_5_1_B'] == "") || ($row['safety_and_security_13_5_1_B'] === NULL)){ $output['safety_and_security_13_5_1_B'] = "empty"; }else{ $output['safety_and_security_13_5_1_B'] = $row['safety_and_security_13_5_1_B']; }
			if(($row['safety_and_security_13_5_1_C'] == "") || ($row['safety_and_security_13_5_1_C'] === NULL)){ $output['safety_and_security_13_5_1_C'] = "empty"; }else{ $output['safety_and_security_13_5_1_C'] = $row['safety_and_security_13_5_1_C']; }
			if(($row['safety_and_security_13_5_1_D'] == "") || ($row['safety_and_security_13_5_1_D'] === NULL)){ $output['safety_and_security_13_5_1_D'] = "empty"; }else{ $output['safety_and_security_13_5_1_D'] = $row['safety_and_security_13_5_1_D']; }
			if(($row['safety_and_security_13_5_1_E'] == "") || ($row['safety_and_security_13_5_1_E'] === NULL)){ $output['safety_and_security_13_5_1_E'] = "empty"; }else{ $output['safety_and_security_13_5_1_E'] = $row['safety_and_security_13_5_1_E']; }
			$output['safety_and_security_13_5_1_text'] = $row['safety_and_security_13_5_1_text'];
			
			//SUNDRY SERVICES
			
			if(($row['sundry_services_14_1_1_A'] == "") || ($row['sundry_services_14_1_1_A'] === NULL)){ $output['sundry_services_14_1_1_A'] = "empty"; }else{ $output['sundry_services_14_1_1_A'] = $row['sundry_services_14_1_1_A']; }
			if(($row['sundry_services_14_1_1_B'] == "") || ($row['sundry_services_14_1_1_B'] === NULL)){ $output['sundry_services_14_1_1_B'] = "empty"; }else{ $output['sundry_services_14_1_1_B'] = $row['sundry_services_14_1_1_B']; }
			if(($row['sundry_services_14_1_1_C'] == "") || ($row['sundry_services_14_1_1_C'] === NULL)){ $output['sundry_services_14_1_1_C'] = "empty"; }else{ $output['sundry_services_14_1_1_C'] = $row['sundry_services_14_1_1_C']; }
			$output['sundry_services_14_1_1_text'] = $row['sundry_services_14_1_1_text']; 
			if(($row['sundry_services_14_2_1_A'] == "") || ($row['sundry_services_14_2_1_A'] === NULL)){ $output['sundry_services_14_2_1_A'] = "empty"; }else{ $output['sundry_services_14_2_1_A'] = $row['sundry_services_14_2_1_A']; }
			$output['sundry_services_14_2_1_text'] = $row['sundry_services_14_2_1_text'];
			if(($row['sundry_services_14_3_1_A'] == "") || ($row['sundry_services_14_3_1_A'] === NULL)){ $output['sundry_services_14_3_1_A'] = "empty"; }else{ $output['sundry_services_14_3_1_A'] = $row['sundry_services_14_3_1_A']; }
			$output['sundry_services_14_3_1_text'] = $row['sundry_services_14_3_1_text'];
			if(($row['sundry_services_14_4_1_A'] == "") || ($row['sundry_services_14_4_1_A'] === NULL)){ $output['sundry_services_14_4_1_A'] = "empty"; }else{ $output['sundry_services_14_4_1_A'] = $row['sundry_services_14_4_1_A']; }
			$output['sundry_services_14_4_1_text'] = $row['sundry_services_14_4_1_text'];
			if(($row['sundry_services_14_5_1_A'] == "") || ($row['sundry_services_14_5_1_A'] === NULL)){ $output['sundry_services_14_5_1_A'] = "empty"; }else{ $output['sundry_services_14_5_1_A'] = $row['sundry_services_14_5_1_A']; }
			if(($row['sundry_services_14_5_1_B'] == "") || ($row['sundry_services_14_5_1_B'] === NULL)){ $output['sundry_services_14_5_1_B'] = "empty"; }else{ $output['sundry_services_14_5_1_B'] = $row['sundry_services_14_5_1_B']; }
			if(($row['sundry_services_14_5_1_C'] == "") || ($row['sundry_services_14_5_1_C'] === NULL)){ $output['sundry_services_14_5_1_C'] = "empty"; }else{ $output['sundry_services_14_5_1_C'] = $row['sundry_services_14_5_1_C']; }
			if(($row['sundry_services_14_5_1_D'] == "") || ($row['sundry_services_14_5_1_D'] === NULL)){ $output['sundry_services_14_5_1_D'] = "empty"; }else{ $output['sundry_services_14_5_1_D'] = $row['sundry_services_14_5_1_D']; }
			$output['sundry_services_14_5_1_text'] = $row['sundry_services_14_5_1_text'];
			
			//HUMAN RESOURCES
			
			if(($row['human_resources_15_1_1_A'] == "") || ($row['human_resources_15_1_1_A'] === NULL)){ $output['human_resources_15_1_1_A'] = "empty"; }else{ $output['human_resources_15_1_1_A'] = $row['human_resources_15_1_1_A']; }
			if(($row['human_resources_15_1_1_B_a'] == "") || ($row['human_resources_15_1_1_B_a'] === NULL)){ $output['human_resources_15_1_1_B_a'] = "empty"; }else{ $output['human_resources_15_1_1_B_a'] = $row['human_resources_15_1_1_B_a']; }
			if(($row['human_resources_15_1_1_B_b'] == "") || ($row['human_resources_15_1_1_B_b'] === NULL)){ $output['human_resources_15_1_1_B_b'] = "empty"; }else{ $output['human_resources_15_1_1_B_b'] = $row['human_resources_15_1_1_B_b']; }
			if(($row['human_resources_15_1_1_B_c'] == "") || ($row['human_resources_15_1_1_B_c'] === NULL)){ $output['human_resources_15_1_1_B_c'] = "empty"; }else{ $output['human_resources_15_1_1_B_c'] = $row['human_resources_15_1_1_B_c']; }
			if(($row['human_resources_15_1_1_B_d'] == "") || ($row['human_resources_15_1_1_B_d'] === NULL)){ $output['human_resources_15_1_1_B_d'] = "empty"; }else{ $output['human_resources_15_1_1_B_d'] = $row['human_resources_15_1_1_B_d']; }
			if(($row['human_resources_15_1_1_B_e'] == "") || ($row['human_resources_15_1_1_B_e'] === NULL)){ $output['human_resources_15_1_1_B_e'] = "empty"; }else{ $output['human_resources_15_1_1_B_e'] = $row['human_resources_15_1_1_B_e']; }
			if(($row['human_resources_15_1_1_B_f'] == "") || ($row['human_resources_15_1_1_B_f'] === NULL)){ $output['human_resources_15_1_1_B_f'] = "empty"; }else{ $output['human_resources_15_1_1_B_f'] = $row['human_resources_15_1_1_B_f']; }
			$output['human_resources_15_1_1_text'] = $row['human_resources_15_1_1_text'];
			if(($row['human_resources_15_2_1_A'] == "") || ($row['human_resources_15_2_1_A'] === NULL)){ $output['human_resources_15_2_1_A'] = "empty"; }else{ $output['human_resources_15_2_1_A'] = $row['human_resources_15_2_1_A']; }
			if(($row['human_resources_15_2_1_B'] == "") || ($row['human_resources_15_2_1_B'] === NULL)){ $output['human_resources_15_2_1_B'] = "empty"; }else{ $output['human_resources_15_2_1_B'] = $row['human_resources_15_2_1_B']; }
			$output['human_resources_15_2_1_text'] = $row['human_resources_15_2_1_text'];
			if(($row['human_resources_15_3_1_A'] == "") || ($row['human_resources_15_3_1_A'] === NULL)){ $output['human_resources_15_3_1_A'] = "empty"; }else{ $output['human_resources_15_3_1_A'] = $row['human_resources_15_3_1_A']; }
			if(($row['human_resources_15_3_1_B'] == "") || ($row['human_resources_15_3_1_B'] === NULL)){ $output['human_resources_15_3_1_B'] = "empty"; }else{ $output['human_resources_15_3_1_B'] = $row['human_resources_15_3_1_B']; }
			$output['human_resources_15_3_1_text'] = $row['human_resources_15_3_1_text'];
			if(($row['human_resources_15_4_1_A'] == "") || ($row['human_resources_15_4_1_A'] === NULL)){ $output['human_resources_15_4_1_A'] = "empty"; }else{ $output['human_resources_15_4_1_A'] = $row['human_resources_15_4_1_A']; }
			if(($row['human_resources_15_4_1_B'] == "") || ($row['human_resources_15_4_1_B'] === NULL)){ $output['human_resources_15_4_1_B'] = "empty"; }else{ $output['human_resources_15_4_1_B'] = $row['human_resources_15_4_1_B']; }
			if(($row['human_resources_15_4_1_C'] == "") || ($row['human_resources_15_4_1_C'] === NULL)){ $output['human_resources_15_4_1_C'] = "empty"; }else{ $output['human_resources_15_4_1_C'] = $row['human_resources_15_4_1_C']; }
			$output['human_resources_15_4_1_text'] = $row['human_resources_15_4_1_text'];
			if(($row['human_resources_15_5_1_A_a'] == "") || ($row['human_resources_15_5_1_A_a'] === NULL)){ $output['human_resources_15_5_1_A_a'] = "empty"; }else{ $output['human_resources_15_5_1_A_a'] = $row['human_resources_15_5_1_A_a']; }
			if(($row['human_resources_15_5_1_A_b'] == "") || ($row['human_resources_15_5_1_A_b'] === NULL)){ $output['human_resources_15_5_1_A_b'] = "empty"; }else{ $output['human_resources_15_5_1_A_b'] = $row['human_resources_15_5_1_A_b']; }
			if(($row['human_resources_15_5_1_A_c'] == "") || ($row['human_resources_15_5_1_A_c'] === NULL)){ $output['human_resources_15_5_1_A_c'] = "empty"; }else{ $output['human_resources_15_5_1_A_c'] = $row['human_resources_15_5_1_A_c']; }
			if(($row['human_resources_15_5_1_B_a'] == "") || ($row['human_resources_15_5_1_B_a'] === NULL)){ $output['human_resources_15_5_1_B_a'] = "empty"; }else{ $output['human_resources_15_5_1_B_a'] = $row['human_resources_15_5_1_B_a']; }
			if(($row['human_resources_15_5_1_B_b'] == "") || ($row['human_resources_15_5_1_B_b'] === NULL)){ $output['human_resources_15_5_1_B_b'] = "empty"; }else{ $output['human_resources_15_5_1_B_b'] = $row['human_resources_15_5_1_B_b']; }
			if(($row['human_resources_15_5_1_B_c'] == "") || ($row['human_resources_15_5_1_B_c'] === NULL)){ $output['human_resources_15_5_1_B_c'] = "empty"; }else{ $output['human_resources_15_5_1_B_c'] = $row['human_resources_15_5_1_B_c']; }
			if(($row['human_resources_15_5_1_C_a'] == "") || ($row['human_resources_15_5_1_C_a'] === NULL)){ $output['human_resources_15_5_1_C_a'] = "empty"; }else{ $output['human_resources_15_5_1_C_a'] = $row['human_resources_15_5_1_C_a']; }
			if(($row['human_resources_15_5_1_C_b'] == "") || ($row['human_resources_15_5_1_C_b'] === NULL)){ $output['human_resources_15_5_1_C_b'] = "empty"; }else{ $output['human_resources_15_5_1_C_b'] = $row['human_resources_15_5_1_C_b']; }
			if(($row['human_resources_15_5_1_C_c'] == "") || ($row['human_resources_15_5_1_C_c'] === NULL)){ $output['human_resources_15_5_1_C_c'] = "empty"; }else{ $output['human_resources_15_5_1_C_c'] = $row['human_resources_15_5_1_C_c']; }
			$output['human_resources_15_5_1_text'] = $row['human_resources_15_5_1_text'];
			if(($row['human_resources_15_6_1_A'] == "") || ($row['human_resources_15_6_1_A'] === NULL)){ $output['human_resources_15_6_1_A'] = "empty"; }else{ $output['human_resources_15_6_1_A'] = $row['human_resources_15_6_1_A']; }
			$output['human_resources_15_6_1_text'] = $row['human_resources_15_6_1_text'];
			if(($row['human_resources_15_7_1_A'] == "") || ($row['human_resources_15_7_1_A'] === NULL)){ $output['human_resources_15_7_1_A'] = "empty"; }else{ $output['human_resources_15_7_1_A'] = $row['human_resources_15_7_1_A']; }
			if(($row['human_resources_15_7_1_B'] == "") || ($row['human_resources_15_7_1_B'] === NULL)){ $output['human_resources_15_7_1_B'] = "empty"; }else{ $output['human_resources_15_7_1_B'] = $row['human_resources_15_7_1_B']; }
			if(($row['human_resources_15_7_1_C'] == "") || ($row['human_resources_15_7_1_C'] === NULL)){ $output['human_resources_15_7_1_C'] = "empty"; }else{ $output['human_resources_15_7_1_C'] = $row['human_resources_15_7_1_C']; }
			if(($row['human_resources_15_7_1_D'] == "") || ($row['human_resources_15_7_1_D'] === NULL)){ $output['human_resources_15_7_1_D'] = "empty"; }else{ $output['human_resources_15_7_1_D'] = $row['human_resources_15_7_1_D']; }
			$output['human_resources_15_7_1_text'] = $row['human_resources_15_7_1_text'];
			if(($row['human_resources_15_8_1_A'] == "") || ($row['human_resources_15_8_1_A'] === NULL)){ $output['human_resources_15_8_1_A'] = "empty"; }else{ $output['human_resources_15_8_1_A'] = $row['human_resources_15_8_1_A']; }
			if(($row['human_resources_15_8_1_B'] == "") || ($row['human_resources_15_8_1_B'] === NULL)){ $output['human_resources_15_8_1_B'] = "empty"; }else{ $output['human_resources_15_8_1_B'] = $row['human_resources_15_8_1_B']; }
			if(($row['human_resources_15_8_1_C'] == "") || ($row['human_resources_15_8_1_C'] === NULL)){ $output['human_resources_15_8_1_C'] = "empty"; }else{ $output['human_resources_15_8_1_C'] = $row['human_resources_15_8_1_C']; }
			$output['human_resources_15_8_1_text'] = $row['human_resources_15_8_1_text'];
			if(($row['human_resources_15_9_1_A'] == "") || ($row['human_resources_15_9_1_A'] === NULL)){ $output['human_resources_15_9_1_A'] = "empty"; }else{ $output['human_resources_15_9_1_A'] = $row['human_resources_15_9_1_A']; }
			if(($row['human_resources_15_9_1_B'] == "") || ($row['human_resources_15_9_1_B'] === NULL)){ $output['human_resources_15_9_1_B'] = "empty"; }else{ $output['human_resources_15_9_1_B'] = $row['human_resources_15_9_1_B']; }
			if(($row['human_resources_15_9_1_C'] == "") || ($row['human_resources_15_9_1_C'] === NULL)){ $output['human_resources_15_9_1_C'] = "empty"; }else{ $output['human_resources_15_9_1_C'] = $row['human_resources_15_9_1_C']; }
			if(($row['human_resources_15_9_1_D'] == "") || ($row['human_resources_15_9_1_D'] === NULL)){ $output['human_resources_15_9_1_D'] = "empty"; }else{ $output['human_resources_15_9_1_D'] = $row['human_resources_15_9_1_D']; }
			if(($row['human_resources_15_9_1_E'] == "") || ($row['human_resources_15_9_1_E'] === NULL)){ $output['human_resources_15_9_1_E'] = "empty"; }else{ $output['human_resources_15_9_1_E'] = $row['human_resources_15_9_1_E']; }
			if(($row['human_resources_15_9_1_F_a'] == "") || ($row['human_resources_15_9_1_F_a'] === NULL)){ $output['human_resources_15_9_1_F_a'] = "empty"; }else{ $output['human_resources_15_9_1_F_a'] = $row['human_resources_15_9_1_F_a']; }
			if(($row['human_resources_15_9_1_F_b'] == "") || ($row['human_resources_15_9_1_F_b'] === NULL)){ $output['human_resources_15_9_1_F_b'] = "empty"; }else{ $output['human_resources_15_9_1_F_b'] = $row['human_resources_15_9_1_F_b']; }
			if(($row['human_resources_15_9_1_F_c'] == "") || ($row['human_resources_15_9_1_F_c'] === NULL)){ $output['human_resources_15_9_1_F_c'] = "empty"; }else{ $output['human_resources_15_9_1_F_c'] = $row['human_resources_15_9_1_F_c']; }
			$output['human_resources_15_9_1_text'] = $row['human_resources_15_9_1_text'];
			
			//GENERAL
			
			if(($row['general_16_1_1_A'] == "") || ($row['general_16_1_1_A'] === NULL)){ $output['general_16_1_1_A'] = "empty"; }else{ $output['general_16_1_1_A'] = $row['general_16_1_1_A']; }
			$output['general_16_1_1_text'] = $row['general_16_1_1_text'];
			if(($row['general_16_2_1_A'] == "") || ($row['general_16_2_1_A'] === NULL)){ $output['general_16_2_1_A'] = "empty"; }else{ $output['general_16_2_1_A'] = $row['general_16_2_1_A']; }
			if(($row['general_16_2_1_B_a'] == "") || ($row['general_16_2_1_B_a'] === NULL)){ $output['general_16_2_1_B_a'] = "empty"; }else{ $output['general_16_2_1_B_a'] = $row['general_16_2_1_B_a']; }
			if(($row['general_16_2_1_B_b'] == "") || ($row['general_16_2_1_B_b'] === NULL)){ $output['general_16_2_1_B_b'] = "empty"; }else{ $output['general_16_2_1_B_b'] = $row['general_16_2_1_B_b']; }
			if(($row['general_16_2_1_B_c'] == "") || ($row['general_16_2_1_B_c'] === NULL)){ $output['general_16_2_1_B_c'] = "empty"; }else{ $output['general_16_2_1_B_c'] = $row['general_16_2_1_B_c']; }
			if(($row['general_16_2_1_B_d'] == "") || ($row['general_16_2_1_B_d'] === NULL)){ $output['general_16_2_1_B_d'] = "empty"; }else{ $output['general_16_2_1_B_d'] = $row['general_16_2_1_B_d']; }
			if(($row['general_16_2_1_B_e'] == "") || ($row['general_16_2_1_B_e'] === NULL)){ $output['general_16_2_1_B_e'] = "empty"; }else{ $output['general_16_2_1_B_e'] = $row['general_16_2_1_B_e']; }
			if(($row['general_16_2_1_C'] == "") || ($row['general_16_2_1_C'] === NULL)){ $output['general_16_2_1_C'] = "empty"; }else{ $output['general_16_2_1_C'] = $row['general_16_2_1_C']; }
			$output['general_16_2_1_text'] = $row['general_16_2_1_text'];
			if(($row['general_16_3_1_A_a'] == "") || ($row['general_16_3_1_A_a'] === NULL)){ $output['general_16_3_1_A_a'] = "empty"; }else{ $output['general_16_3_1_A_a'] = $row['general_16_3_1_A_a']; }
			if(($row['general_16_3_1_A_b'] == "") || ($row['general_16_3_1_A_b'] === NULL)){ $output['general_16_3_1_A_b'] = "empty"; }else{ $output['general_16_3_1_A_b'] = $row['general_16_3_1_A_b']; }
			if(($row['general_16_3_1_A_c'] == "") || ($row['general_16_3_1_A_c'] === NULL)){ $output['general_16_3_1_A_c'] = "empty"; }else{ $output['general_16_3_1_A_c'] = $row['general_16_3_1_A_c']; }
			if(($row['general_16_3_1_B'] == "") || ($row['general_16_3_1_B'] === NULL)){ $output['general_16_3_1_B'] = "empty"; }else{ $output['general_16_3_1_B'] = $row['general_16_3_1_B']; }
			if(($row['general_16_3_1_C_a'] == "") || ($row['general_16_3_1_C_a'] === NULL)){ $output['general_16_3_1_C_a'] = "empty"; }else{ $output['general_16_3_1_C_a'] = $row['general_16_3_1_C_a']; }
			if(($row['general_16_3_1_C_b'] == "") || ($row['general_16_3_1_C_b'] === NULL)){ $output['general_16_3_1_C_b'] = "empty"; }else{ $output['general_16_3_1_C_b'] = $row['general_16_3_1_C_b']; }
			if(($row['general_16_3_1_C_c'] == "") || ($row['general_16_3_1_C_c'] === NULL)){ $output['general_16_3_1_C_c'] = "empty"; }else{ $output['general_16_3_1_C_c'] = $row['general_16_3_1_C_c']; }
			if(($row['general_16_3_1_C_d'] == "") || ($row['general_16_3_1_C_d'] === NULL)){ $output['general_16_3_1_C_d'] = "empty"; }else{ $output['general_16_3_1_C_d'] = $row['general_16_3_1_C_d']; }
			if(($row['general_16_3_1_C_e'] == "") || ($row['general_16_3_1_C_e'] === NULL)){ $output['general_16_3_1_C_e'] = "empty"; }else{ $output['general_16_3_1_C_e'] = $row['general_16_3_1_C_e']; }
			if(($row['general_16_3_1_D_a'] == "") || ($row['general_16_3_1_D_a'] === NULL)){ $output['general_16_3_1_D_a'] = "empty"; }else{ $output['general_16_3_1_D_a'] = $row['general_16_3_1_D_a']; }
			if(($row['general_16_3_1_D_b'] == "") || ($row['general_16_3_1_D_b'] === NULL)){ $output['general_16_3_1_D_b'] = "empty"; }else{ $output['general_16_3_1_D_b'] = $row['general_16_3_1_D_b']; }
			if(($row['general_16_3_1_E'] == "") || ($row['general_16_3_1_E'] === NULL)){ $output['general_16_3_1_E'] = "empty"; }else{ $output['general_16_3_1_E'] = $row['general_16_3_1_E']; }
			$output['general_16_3_1_text'] = $row['general_16_3_1_text'];
			if(($row['general_16_4_1_A'] == "") || ($row['general_16_4_1_A'] === NULL)){ $output['general_16_4_1_A'] = "empty"; }else{ $output['general_16_4_1_A'] = $row['general_16_4_1_A']; }
			if(($row['general_16_4_1_B'] == "") || ($row['general_16_4_1_B'] === NULL)){ $output['general_16_4_1_B'] = "empty"; }else{ $output['general_16_4_1_B'] = $row['general_16_4_1_B']; }
			$output['general_16_4_1_text'] = $row['general_16_4_1_text'];
			if(($row['general_16_5_1_A'] == "") || ($row['general_16_5_1_A'] === NULL)){ $output['general_16_5_1_A'] = "empty"; }else{ $output['general_16_5_1_A'] = $row['general_16_5_1_A']; }
			if(($row['general_16_5_1_B'] == "") || ($row['general_16_5_1_B'] === NULL)){ $output['general_16_5_1_B'] = "empty"; }else{ $output['general_16_5_1_B'] = $row['general_16_5_1_B']; }
			$output['general_16_5_1_text'] = $row['general_16_5_1_text'];
			if(($row['general_16_6_1_A'] == "") || ($row['general_16_6_1_A'] === NULL)){ $output['general_16_6_1_A'] = "empty"; }else{ $output['general_16_6_1_A'] = $row['general_16_6_1_A']; }
			if(($row['general_16_6_1_B'] == "") || ($row['general_16_6_1_B'] === NULL)){ $output['general_16_6_1_B'] = "empty"; }else{ $output['general_16_6_1_B'] = $row['general_16_6_1_B']; }
			$output['general_16_6_1_text'] = $row['general_16_6_1_text'];
			if(($row['general_16_7_1_A'] == "") || ($row['general_16_7_1_A'] === NULL)){ $output['general_16_7_1_A'] = "empty"; }else{ $output['general_16_7_1_A'] = $row['general_16_7_1_A']; }
			if(($row['general_16_7_1_B'] == "") || ($row['general_16_7_1_B'] === NULL)){ $output['general_16_7_1_B'] = "empty"; }else{ $output['general_16_7_1_B'] = $row['general_16_7_1_B']; }
			$output['general_16_7_1_text'] = $row['general_16_7_1_text'];
			if(($row['general_16_8_1_A'] == "") || ($row['general_16_8_1_A'] === NULL)){ $output['general_16_8_1_A'] = "empty"; }else{ $output['general_16_8_1_A'] = $row['general_16_8_1_A']; }
			if(($row['general_16_8_1_B'] == "") || ($row['general_16_8_1_B'] === NULL)){ $output['general_16_8_1_B'] = "empty"; }else{ $output['general_16_8_1_B'] = $row['general_16_8_1_B']; }
			if(($row['general_16_8_1_C'] == "") || ($row['general_16_8_1_C'] === NULL)){ $output['general_16_8_1_C'] = "empty"; }else{ $output['general_16_8_1_C'] = $row['general_16_8_1_C']; }
			$output['general_16_8_1_text'] = $row['general_16_8_1_text'];
			if(($row['general_16_9_1_A'] == "") || ($row['general_16_9_1_A'] === NULL)){ $output['general_16_9_1_A'] = "empty"; }else{ $output['general_16_9_1_A'] = $row['general_16_9_1_A']; }
			if(($row['general_16_9_1_B'] == "") || ($row['general_16_9_1_B'] === NULL)){ $output['general_16_9_1_B'] = "empty"; }else{ $output['general_16_9_1_B'] = $row['general_16_9_1_B']; }
			if(($row['general_16_9_1_C'] == "") || ($row['general_16_9_1_C'] === NULL)){ $output['general_16_9_1_C'] = "empty"; }else{ $output['general_16_9_1_C'] = $row['general_16_9_1_C']; }
			if(($row['general_16_9_1_D'] == "") || ($row['general_16_9_1_D'] === NULL)){ $output['general_16_9_1_D'] = "empty"; }else{ $output['general_16_9_1_D'] = $row['general_16_9_1_D']; }
			$output['general_16_9_1_text'] = $row['general_16_9_1_text'];
			if(($row['general_16_10_1_A'] == "") || ($row['general_16_10_1_A'] === NULL)){ $output['general_16_10_1_A'] = "empty"; }else{ $output['general_16_10_1_A'] = $row['general_16_10_1_A']; }
			if(($row['general_16_10_1_B'] == "") || ($row['general_16_10_1_B'] === NULL)){ $output['general_16_10_1_B'] = "empty"; }else{ $output['general_16_10_1_B'] = $row['general_16_10_1_B']; }
			if(($row['general_16_10_1_C'] == "") || ($row['general_16_10_1_C'] === NULL)){ $output['general_16_10_1_C'] = "empty"; }else{ $output['general_16_10_1_C'] = $row['general_16_10_1_C']; }
			$output['general_16_10_1_text'] = $row['general_16_10_1_text'];
			if(($row['general_16_11_1_A'] == "") || ($row['general_16_11_1_A'] === NULL)){ $output['general_16_11_1_A'] = "empty"; }else{ $output['general_16_11_1_A'] = $row['general_16_11_1_A']; }
			if(($row['general_16_11_1_B'] == "") || ($row['general_16_11_1_B'] === NULL)){ $output['general_16_11_1_B'] = "empty"; }else{ $output['general_16_11_1_B'] = $row['general_16_11_1_B']; }
			if(($row['general_16_11_1_C'] == "") || ($row['general_16_11_1_C'] === NULL)){ $output['general_16_11_1_C'] = "empty"; }else{ $output['general_16_11_1_C'] = $row['general_16_11_1_C']; }
			if(($row['general_16_11_1_D_a'] == "") || ($row['general_16_11_1_D_a'] === NULL)){ $output['general_16_11_1_D_a'] = "empty"; }else{ $output['general_16_11_1_D_a'] = $row['general_16_11_1_D_a']; }
			if(($row['general_16_11_1_D_b'] == "") || ($row['general_16_11_1_D_b'] === NULL)){ $output['general_16_11_1_D_b'] = "empty"; }else{ $output['general_16_11_1_D_b'] = $row['general_16_11_1_D_b']; }
			if(($row['general_16_11_1_D_c'] == "") || ($row['general_16_11_1_D_c'] === NULL)){ $output['general_16_11_1_D_c'] = "empty"; }else{ $output['general_16_11_1_D_c'] = $row['general_16_11_1_D_c']; }
			if(($row['general_16_11_1_D_d'] == "") || ($row['general_16_11_1_D_d'] === NULL)){ $output['general_16_11_1_D_d'] = "empty"; }else{ $output['general_16_11_1_D_d'] = $row['general_16_11_1_D_d']; }
			if(($row['general_16_11_1_D_e'] == "") || ($row['general_16_11_1_D_e'] === NULL)){ $output['general_16_11_1_D_e'] = "empty"; }else{ $output['general_16_11_1_D_e'] = $row['general_16_11_1_D_e']; }
			if(($row['general_16_11_1_E'] == "") || ($row['general_16_11_1_E'] === NULL)){ $output['general_16_11_1_E'] = "empty"; }else{ $output['general_16_11_1_E'] = $row['general_16_11_1_E']; }
			if(($row['general_16_11_1_F'] == "") || ($row['general_16_11_1_F'] === NULL)){ $output['general_16_11_1_F'] = "empty"; }else{ $output['general_16_11_1_F'] = $row['general_16_11_1_F']; }
			if(($row['general_16_11_1_G'] == "") || ($row['general_16_11_1_G'] === NULL)){ $output['general_16_11_1_G'] = "empty"; }else{ $output['general_16_11_1_G'] = $row['general_16_11_1_G']; }
			if(($row['general_16_11_1_H'] == "") || ($row['general_16_11_1_H'] === NULL)){ $output['general_16_11_1_H'] = "empty"; }else{ $output['general_16_11_1_H'] = $row['general_16_11_1_H']; }
			$output['general_16_11_1_text'] = $row['general_16_11_1_text'];
			if(($row['general_16_12_1_A'] == "") || ($row['general_16_12_1_A'] === NULL)){ $output['general_16_12_1_A'] = "empty"; }else{ $output['general_16_12_1_A'] = $row['general_16_12_1_A']; }
			$output['general_16_12_1_text'] = $row['general_16_12_1_text'];
			if(($row['general_16_13_1_A'] == "") || ($row['general_16_13_1_A'] === NULL)){ $output['general_16_13_1_A'] = "empty"; }else{ $output['general_16_13_1_A'] = $row['general_16_13_1_A']; }
			if(($row['general_16_13_1_B_a'] == "") || ($row['general_16_13_1_B_a'] === NULL)){ $output['general_16_13_1_B_a'] = "empty"; }else{ $output['general_16_13_1_B_a'] = $row['general_16_13_1_B_a']; }
			if(($row['general_16_13_1_B_b'] == "") || ($row['general_16_13_1_B_b'] === NULL)){ $output['general_16_13_1_B_b'] = "empty"; }else{ $output['general_16_13_1_B_b'] = $row['general_16_13_1_B_b']; }
			if(($row['general_16_13_1_B_c'] == "") || ($row['general_16_13_1_B_c'] === NULL)){ $output['general_16_13_1_B_c'] = "empty"; }else{ $output['general_16_13_1_B_c'] = $row['general_16_13_1_B_c']; }
			if(($row['general_16_13_1_B_d'] == "") || ($row['general_16_13_1_B_d'] === NULL)){ $output['general_16_13_1_B_d'] = "empty"; }else{ $output['general_16_13_1_B_d'] = $row['general_16_13_1_B_d']; }
			if(($row['general_16_13_1_B_e'] == "") || ($row['general_16_13_1_B_e'] === NULL)){ $output['general_16_13_1_B_e'] = "empty"; }else{ $output['general_16_13_1_B_e'] = $row['general_16_13_1_B_e']; }
			if(($row['general_16_13_1_C'] == "") || ($row['general_16_13_1_C'] === NULL)){ $output['general_16_13_1_C'] = "empty"; }else{ $output['general_16_13_1_C'] = $row['general_16_13_1_C']; }
			if(($row['general_16_13_1_D'] == "") || ($row['general_16_13_1_D'] === NULL)){ $output['general_16_13_1_D'] = "empty"; }else{ $output['general_16_13_1_D'] = $row['general_16_13_1_D']; }
			if(($row['general_16_13_1_E'] == "") || ($row['general_16_13_1_E'] === NULL)){ $output['general_16_13_1_E'] = "empty"; }else{ $output['general_16_13_1_E'] = $row['general_16_13_1_E']; }
			$output['general_16_13_1_text'] = $row['general_16_13_1_text'];
			
					
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