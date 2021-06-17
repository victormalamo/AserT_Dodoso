<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));


	$message = '';
	$connection_error = '';
	$output = array();
	$assessment_id = $form_data->assessment_id;
	
	
	//// SELF_SELF ////
	
	$query = "SELECT * FROM afcg_assessment_vacation_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_self'))"; 
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
			
		}
	}
	
	//// SELF_ASSESSOR_1 ////
	
	$query = "SELECT * FROM afcg_assessment_vacation_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_1'))"; 
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
			
		}
	}
	
	//// SELF_ASSESSOR_2 ////	
	$query = "SELECT * FROM afcg_assessment_vacation_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_2'))"; 
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
			
		 }
	}
	
	//// SELF_ASSESSOR_3 ////
	
	$query = "SELECT * FROM afcg_assessment_vacation_hotel WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = 'self_assessor_3'))"; 
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