<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();


	$facility_id = $form_data->facility_id;
	$assessor_category = $form_data->assessor_category;
	$assessor_score_column = 'assessment_score_'.$assessor_category;
	$assessment_score = $form_data->assessment_score_vacation_hotel;
	//LOCATION 1.0
	//1.1
	//1.1.1
	if(($form_data->location_1_1_1_A_cm) == ''){ $location_1_1_1_A = $form_data->location_1_1_1_A; }else{ $location_1_1_1_A = $form_data->location_1_1_1_A_cm; }
	$location_1_1_1_text = $form_data->location_1_1_1_text;
	//1.1.2
	if(($form_data->location_1_1_2_A_cm) == ''){ $location_1_1_2_A = $form_data->location_1_1_2_A; }else{ $location_1_1_2_A = $form_data->location_1_1_2_A_cm; }
	$location_1_1_2_text = $form_data->location_1_1_2_text;
	//1.1.3
	if(($form_data->location_1_1_3_A_cm) == ''){ $location_1_1_3_A = $form_data->location_1_1_3_A; }else{ $location_1_1_3_A = $form_data->location_1_1_3_A_cm; }
	if(($form_data->location_1_1_3_B_cm) == ''){ $location_1_1_3_B = $form_data->location_1_1_3_B; }else{ $location_1_1_3_B = $form_data->location_1_1_3_B_cm; }
	$location_1_1_3_text = $form_data->location_1_1_3_text;
	//1.1.4
	if(($form_data->location_1_1_4_A_cm) == ''){ $location_1_1_4_A = $form_data->location_1_1_4_A; }else{ $location_1_1_4_A = $form_data->location_1_1_4_A_cm; }
	if(($form_data->location_1_1_4_B_cm) == ''){ $location_1_1_4_B = $form_data->location_1_1_4_B; }else{ $location_1_1_4_B = $form_data->location_1_1_4_B_cm; }
	$location_1_1_4_text = $form_data->location_1_1_4_text;
	//1.1.5
	if(($form_data->location_1_1_5_A_cm) == ''){ $location_1_1_5_A = $form_data->location_1_1_5_A; }else{ $location_1_1_5_A = $form_data->location_1_1_5_A_cm; }
	$location_1_1_5_text = $form_data->location_1_1_5_text;
	//1.1.6
	if(($form_data->location_1_1_6_A_cm) == ''){ $location_1_1_6_A = $form_data->location_1_1_6_A; }else{ $location_1_1_6_A = $form_data->location_1_1_6_A_cm; }
	$location_1_1_6_text = $form_data->location_1_1_6_text;
	//1.2
	//1.2.1
	if(($form_data->location_1_2_1_A_cm) == ''){ $location_1_2_1_A = $form_data->location_1_2_1_A; }else{ $location_1_2_1_A = $form_data->location_1_2_1_A_cm; }
	$location_1_2_1_text = $form_data->location_1_2_1_text;
	//1.2.2
	if(($form_data->location_1_2_2_A_cm) == ''){ $location_1_2_2_A = $form_data->location_1_2_2_A; }else{ $location_1_2_2_A = $form_data->location_1_2_2_A_cm; }
	$location_1_2_2_text = $form_data->location_1_2_2_text;
	//1.2.3
	if(($form_data->location_1_2_3_A_cm) == ''){ $location_1_2_3_A = $form_data->location_1_2_3_A; }else{ $location_1_2_3_A = $form_data->location_1_2_3_A_cm; }	
	if(($form_data->location_1_2_3_B_a_cm) == ''){ if($form_data->location_1_2_3_B_a == ''){ $location_1_2_3_B_a = ''; }else{ $location_1_2_3_B_a = 2; } }else{ $location_1_2_3_B_a = $form_data->location_1_2_3_B_a_cm; }
	if(($form_data->location_1_2_3_B_b_cm) == ''){ if($form_data->location_1_2_3_B_b == ''){ $location_1_2_3_B_b = ''; }else{ $location_1_2_3_B_b = 2; } }else{ $location_1_2_3_B_b = $form_data->location_1_2_3_B_b_cm; }
	if(($form_data->location_1_2_3_B_c_cm) == ''){ if($form_data->location_1_2_3_B_c == ''){ $location_1_2_3_B_c = ''; }else{ $location_1_2_3_B_c = 2; } }else{ $location_1_2_3_B_c = $form_data->location_1_2_3_B_c_cm; }
	if(($form_data->location_1_2_3_B_d_cm) == ''){ if($form_data->location_1_2_3_B_d == ''){ $location_1_2_3_B_d = ''; }else{ $location_1_2_3_B_d = 2; } }else{ $location_1_2_3_B_d = $form_data->location_1_2_3_B_d_cm; }
	if(($form_data->location_1_2_3_B_e_cm) == ''){ if($form_data->location_1_2_3_B_e == ''){ $location_1_2_3_B_e = ''; }else{ $location_1_2_3_B_e = 2; } }else{ $location_1_2_3_B_e = $form_data->location_1_2_3_B_e_cm; }
	$location_1_2_3_text = $form_data->location_1_2_3_text;
	//1.2.4
	if(($form_data->location_1_2_4_A_cm) == ''){ $location_1_2_4_A = $form_data->location_1_2_4_A; }else{ $location_1_2_4_A = $form_data->location_1_2_4_A_cm; }
	if(($form_data->location_1_2_4_B_cm) == ''){ $location_1_2_4_B = $form_data->location_1_2_4_B; }else{ $location_1_2_4_B = $form_data->location_1_2_4_B_cm; }
	if(($form_data->location_1_2_4_C_cm) == ''){ $location_1_2_4_C = $form_data->location_1_2_4_C; }else{ $location_1_2_4_C = $form_data->location_1_2_4_C_cm; }
	$location_1_2_4_text = $form_data->location_1_2_4_text;
	//1.2.5
	if(($form_data->location_1_2_5_A_cm) == ''){ $location_1_2_5_A = $form_data->location_1_2_5_A; }else{ $location_1_2_5_A = $form_data->location_1_2_5_A_cm; }
	if(($form_data->location_1_2_5_B_cm) == ''){ $location_1_2_5_B = $form_data->location_1_2_5_B; }else{ $location_1_2_5_B = $form_data->location_1_2_5_B_cm; }
	if(($form_data->location_1_2_5_C_cm) == ''){ $location_1_2_5_C = $form_data->location_1_2_5_C; }else{ $location_1_2_5_C = $form_data->location_1_2_5_C_cm; }
	if(($form_data->location_1_2_5_D_cm) == ''){ $location_1_2_5_D = $form_data->location_1_2_5_D; }else{ $location_1_2_5_D = $form_data->location_1_2_5_D_cm; }
	$location_1_2_5_text = $form_data->location_1_2_5_text;	
		
		///Insert
			 if($form_data->action == 'insert_record')
			 {
				$query = "INSERT INTO afcg_assessment_vacation_hotel (
				assessment_id, facility_id, assessor_category, assessment_score, 
				location_1_1_1_A, location_1_1_1_text,
				location_1_1_2_A, location_1_1_2_text,
				location_1_1_3_A, location_1_1_3_B, location_1_1_3_text,		
				location_1_1_4_A, location_1_1_4_B, location_1_1_4_text,		
				location_1_1_5_A, location_1_1_5_text,		
				location_1_1_6_A, location_1_1_6_text,
				location_1_2_1_A, location_1_2_1_text,
				location_1_2_2_A, location_1_2_2_text,
				location_1_2_3_A, location_1_2_3_B_a, location_1_2_3_B_b, location_1_2_3_B_c, location_1_2_3_B_d, location_1_2_3_B_e, location_1_2_3_text,
				location_1_2_4_A, location_1_2_4_B, location_1_2_4_C, location_1_2_4_text,
				location_1_2_5_A, location_1_2_5_B, location_1_2_5_C, location_1_2_5_D, location_1_2_5_text
				)VALUES(
				'$facility_id', '$facility_id', '$assessor_category', '$assessment_score', 
				'$location_1_1_1_A', '$location_1_1_1_text',
				'$location_1_1_2_A', '$location_1_1_2_text',
				'$location_1_1_3_A', '$location_1_1_3_B', '$location_1_1_3_text',		
				'$location_1_1_4_A', '$location_1_1_4_B', '$location_1_1_4_text',		
				'$location_1_1_5_A', '$location_1_1_5_text',		
				'$location_1_1_6_A', '$location_1_1_6_text',
				'$location_1_2_1_A', '$location_1_2_1_text',
				'$location_1_2_2_A', '$location_1_2_2_text',
				'$location_1_2_3_A', '$location_1_2_3_B_a', '$location_1_2_3_B_b', '$location_1_2_3_B_c', '$location_1_2_3_B_d', '$location_1_2_3_B_e', '$location_1_2_3_text',
				'$location_1_2_4_A', '$location_1_2_4_B', '$location_1_2_4_C', '$location_1_2_4_text',
				'$location_1_2_5_A', '$location_1_2_5_B', '$location_1_2_5_C', '$location_1_2_5_D', '$location_1_2_5_text'
				)";
				if(mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';
						///update scores and id in facilities table
						$query_update_scores = "UPDATE afcg_registered_facilities SET assessment_id = '$facility_id', ".$assessor_score_column." = '$assessment_score' WHERE id = '$facility_id'";
						if (mysqli_query($conntscpME, $query_update_scores)) {
						$message = 'imefanikiwa';
						}else{
						$connection_error = 'tatizo';
						}
				}else{
				$connection_error = 'tatizo';
				}		
				
			}
			elseif($form_data->action == 'edit_record')
			{

					$assessment_id = $form_data->assessment_id;
					$query = "UPDATE afcg_assessment_vacation_hotel SET 
					assessment_score = '$assessment_score', 
					location_1_1_1_A = '$location_1_1_1_A', location_1_1_1_text = '$location_1_1_1_text',
					location_1_1_2_A = '$location_1_1_2_A', location_1_1_2_text = '$location_1_1_2_text',
					location_1_1_3_A = '$location_1_1_3_A', location_1_1_3_B = '$location_1_1_3_B', location_1_1_3_text = '$location_1_1_3_text',		
					location_1_1_4_A = '$location_1_1_4_A', location_1_1_4_B = '$location_1_1_4_B', location_1_1_4_text = '$location_1_1_4_text',		
					location_1_1_5_A = '$location_1_1_5_A', location_1_1_5_text = '$location_1_1_5_text',		
					location_1_1_6_A = '$location_1_1_6_A', location_1_1_6_text = '$location_1_1_6_text',
					location_1_2_1_A = '$location_1_2_1_A', location_1_2_1_text = '$location_1_2_1_text',
					location_1_2_2_A = '$location_1_2_2_A', location_1_2_2_text = '$location_1_2_2_text',
					location_1_2_3_A = '$location_1_2_3_A', location_1_2_3_B_a = '$location_1_2_3_B_a', location_1_2_3_B_b = '$location_1_2_3_B_b', location_1_2_3_B_c = '$location_1_2_3_B_c', location_1_2_3_B_d = '$location_1_2_3_B_d', location_1_2_3_B_e = '$location_1_2_3_B_e', location_1_2_3_text = '$location_1_2_3_text',
					location_1_2_4_A = '$location_1_2_4_A', location_1_2_4_B = '$location_1_2_4_B', location_1_2_4_C = '$location_1_2_4_C', location_1_2_4_text = '$location_1_2_4_text',
					location_1_2_5_A = '$location_1_2_5_A', location_1_2_5_B = '$location_1_2_5_B', location_1_2_5_C = '$location_1_2_5_C', location_1_2_5_D = '$location_1_2_5_D', location_1_2_5_text = '$location_1_2_5_text'
					WHERE ((assessment_id = '".$assessment_id."') AND (assessor_category = '".$assessor_category."'))";
					if(mysqli_query($conntscpME, $query)){
						///update scores in facilities table
						$query_update_scores = "UPDATE afcg_registered_facilities SET ".$assessor_score_column." = '$assessment_score' WHERE assessment_id = '$assessment_id'";
						if (mysqli_query($conntscpME, $query_update_scores)) {
						$message = 'imefanikiwa';
						}else{
						$connection_error = 'tatizo';
						}																
					}else{
					$connection_error = 'tatizo';					
					}
								
			}
											

		$output = array(
		'assessment_id' => $facility_id,
		'connection_error' => $connection_error,
		'message' => $message
		);
	

echo json_encode($output);


?>