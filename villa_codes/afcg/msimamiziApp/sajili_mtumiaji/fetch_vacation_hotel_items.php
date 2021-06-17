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
	$query = "SELECT * FROM afcg_assessment_vacation_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = '".$assessor_category."'))"; 
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