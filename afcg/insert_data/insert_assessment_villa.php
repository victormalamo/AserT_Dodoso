<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();


	$facility_id = $form_data->facility_id;
	$assessor_category = $form_data->assessor_category;
	$assessor_score_column = 'assessment_score_'.$assessor_category;
	$assessment_score = $form_data->assessment_score_villa;
	$location_1_1_1_text = $form_data->location_1_1_1_text;
	if(($form_data->location_1_1_1_A_cm) == ''){ $location_1_1_1_A = $form_data->location_1_1_1_A; }else{ $location_1_1_1_A= $form_data->location_1_1_1_A_cm; }
	if(($form_data->location_1_1_1_B_cm) == ''){ $location_1_1_1_B = $form_data->location_1_1_1_B; }else{ $location_1_1_1_B= $form_data->location_1_1_1_B_cm; }
	
	$location_1_1_2_text = $form_data->location_1_1_2_text;
	if(($form_data->location_1_1_2_A_cm) == ''){ $location_1_1_2_A = $form_data->location_1_1_2_A; }else{ $location_1_1_2_A= $form_data->location_1_1_2_A_cm; }
	
	$location_1_1_3_text = $form_data->location_1_1_3_text;
	if(($form_data->location_1_1_3_A_cm) == ''){ $location_1_1_3_A = $form_data->location_1_1_3_A; }else{ $location_1_1_3_A= $form_data->location_1_1_3_A_cm; }
	if(($form_data->location_1_1_3_B_a_cm) == ''){ if($form_data->location_1_1_3_B_a == ''){ $location_1_1_3_B_a = ''; }else{ $location_1_1_3_B_a = 1; } }else{ $location_1_1_3_B_a= $form_data->location_1_1_3_B_a_cm; }
	if(($form_data->location_1_1_3_B_b_cm) == ''){ if($form_data->location_1_1_3_B_b == ''){ $location_1_1_3_B_b = ''; }else{ $location_1_1_3_B_b = 1; } }else{ $location_1_1_3_B_b= $form_data->location_1_1_3_B_b_cm; }
	if(($form_data->location_1_1_3_B_c_cm) == ''){ if($form_data->location_1_1_3_B_c == ''){ $location_1_1_3_B_c = ''; }else{ $location_1_1_3_B_c = 1; } }else{ $location_1_1_3_B_c= $form_data->location_1_1_3_B_c_cm; }
	if(($form_data->location_1_1_3_B_d_cm) == ''){ if($form_data->location_1_1_3_B_d == ''){ $location_1_1_3_B_d = ''; }else{ $location_1_1_3_B_d = 1; } }else{ $location_1_1_3_B_d= $form_data->location_1_1_3_B_d_cm; }
	
	$location_1_1_4_text = $form_data->location_1_1_4_text;
	if(($form_data->location_1_1_4_A_cm) == ''){ $location_1_1_4_A = $form_data->location_1_1_4_A; }else{ $location_1_1_4_A= $form_data->location_1_1_4_A_cm; }
	if(($form_data->location_1_1_4_B_cm) == ''){ $location_1_1_4_B = $form_data->location_1_1_4_B; }else{ $location_1_1_4_B= $form_data->location_1_1_4_B_cm; }
	if(($form_data->location_1_1_4_C_cm) == ''){ $location_1_1_4_C = $form_data->location_1_1_4_C; }else{ $location_1_1_4_C= $form_data->location_1_1_4_C_cm; }

	$location_1_1_5_text = $form_data->location_1_1_5_text;
	if(($form_data->location_1_1_5_A_cm) == ''){ $location_1_1_5_A = $form_data->location_1_1_5_A; }else{ $location_1_1_5_A= $form_data->location_1_1_5_A_cm; }
	if(($form_data->location_1_1_5_B_cm) == ''){ $location_1_1_5_B = $form_data->location_1_1_5_B; }else{ $location_1_1_5_B= $form_data->location_1_1_5_B_cm; }
	if(($form_data->location_1_1_5_C_cm) == ''){ $location_1_1_5_C = $form_data->location_1_1_5_C; }else{ $location_1_1_5_C= $form_data->location_1_1_5_C_cm; }
	if(($form_data->location_1_1_5_D_cm) == ''){ $location_1_1_5_D = $form_data->location_1_1_5_D; }else{ $location_1_1_5_D= $form_data->location_1_1_5_D_cm; }
	
	$building_2_1_1_text = $form_data->building_2_1_1_text;
	if(($form_data->building_2_1_1_A_cm) == ''){ $building_2_1_1_A = $form_data->building_2_1_1_A; }else{ $building_2_1_1_A= $form_data->building_2_1_1_A_cm; }
	if(($form_data->building_2_1_1_B_cm) == ''){ $building_2_1_1_B = $form_data->building_2_1_1_B; }else{ $building_2_1_1_B= $form_data->building_2_1_1_B_cm; }
	
	$building_2_2_1_text = $form_data->building_2_2_1_text;
	if(($form_data->building_2_2_1_A_cm) == ''){ $building_2_2_1_A = $form_data->building_2_2_1_A; }else{ $building_2_2_1_A= $form_data->building_2_2_1_A_cm; }
	if(($form_data->building_2_2_1_B_cm) == ''){ $building_2_2_1_B = $form_data->building_2_2_1_B; }else{ $building_2_2_1_B= $form_data->building_2_2_1_B_cm; }
	if(($form_data->building_2_2_1_C_cm) == ''){ $building_2_2_1_C = $form_data->building_2_2_1_C; }else{ $building_2_2_1_C= $form_data->building_2_2_1_C_cm; }
	if(($form_data->building_2_2_1_D_cm) == ''){ $building_2_2_1_D = $form_data->building_2_2_1_D; }else{ $building_2_2_1_D= $form_data->building_2_2_1_D_cm; }
	if(($form_data->building_2_2_1_E_cm) == ''){ $building_2_2_1_E = $form_data->building_2_2_1_E; }else{ $building_2_2_1_E= $form_data->building_2_2_1_E_cm; }
	if(($form_data->building_2_2_1_F_cm) == ''){ $building_2_2_1_F = $form_data->building_2_2_1_F; }else{ $building_2_2_1_F= $form_data->building_2_2_1_F_cm; }
	if(($form_data->building_2_2_1_G_cm) == ''){ $building_2_2_1_G = $form_data->building_2_2_1_G; }else{ $building_2_2_1_G= $form_data->building_2_2_1_G_cm; }
	if(($form_data->building_2_2_1_H_cm) == ''){ $building_2_2_1_H = $form_data->building_2_2_1_H; }else{ $building_2_2_1_H= $form_data->building_2_2_1_H_cm; }
	if(($form_data->building_2_2_1_I_cm) == ''){ $building_2_2_1_I = $form_data->building_2_2_1_I; }else{ $building_2_2_1_I= $form_data->building_2_2_1_I_cm; }

	
	$building_2_3_1_text = $form_data->building_2_3_1_text;
	if(($form_data->building_2_3_1_A_cm) == ''){ $building_2_3_1_A = $form_data->building_2_3_1_A; }else{ $building_2_3_1_A= $form_data->building_2_3_1_A_cm; }
	if(($form_data->building_2_3_1_B_cm) == ''){ $building_2_3_1_B = $form_data->building_2_3_1_B; }else{ $building_2_3_1_B= $form_data->building_2_3_1_B_cm; }
	if(($form_data->building_2_3_1_C_cm) == ''){ $building_2_3_1_C = $form_data->building_2_3_1_C; }else{ $building_2_3_1_C= $form_data->building_2_3_1_C_cm; }
	if(($form_data->building_2_3_1_D_cm) == ''){ $building_2_3_1_D = $form_data->building_2_3_1_D; }else{ $building_2_3_1_D= $form_data->building_2_3_1_D_cm; }
	
	$building_2_4_1_text = $form_data->building_2_4_1_text;
	if(($form_data->building_2_4_1_A_cm) == ''){ $building_2_4_1_A = $form_data->building_2_4_1_A; }else{ $building_2_4_1_A= $form_data->building_2_4_1_A_cm; }
	
	$building_2_5_1_text = $form_data->building_2_5_1_text;
	if(($form_data->building_2_5_1_A_cm) == ''){ $building_2_5_1_A = $form_data->building_2_5_1_A; }else{ $building_2_5_1_A= $form_data->building_2_5_1_A_cm; }
	if(($form_data->building_2_5_1_B_cm) == ''){ $building_2_5_1_B = $form_data->building_2_5_1_B; }else{ $building_2_5_1_B= $form_data->building_2_5_1_B_cm; }
	if(($form_data->building_2_5_1_C_cm) == ''){ $building_2_5_1_C = $form_data->building_2_5_1_C; }else{ $building_2_5_1_C= $form_data->building_2_5_1_C_cm; }
	if(($form_data->building_2_5_1_D_cm) == ''){ $building_2_5_1_D = $form_data->building_2_5_1_D; }else{ $building_2_5_1_D= $form_data->building_2_5_1_D_cm; }
	if(($form_data->building_2_5_1_E_cm) == ''){ $building_2_5_1_E = $form_data->building_2_5_1_E; }else{ $building_2_5_1_E= $form_data->building_2_5_1_E_cm; }
	if(($form_data->building_2_5_1_F_cm) == ''){ $building_2_5_1_F = $form_data->building_2_5_1_F; }else{ $building_2_5_1_F= $form_data->building_2_5_1_F_cm; }
	if(($form_data->building_2_5_1_G_cm) == ''){ $building_2_5_1_G = $form_data->building_2_5_1_G; }else{ $building_2_5_1_G= $form_data->building_2_5_1_G_cm; }
	if(($form_data->building_2_5_1_H_cm) == ''){ $building_2_5_1_H = $form_data->building_2_5_1_H; }else{ $building_2_5_1_H= $form_data->building_2_5_1_H_cm; }
	if(($form_data->building_2_5_1_I_cm) == ''){ $building_2_5_1_I = $form_data->building_2_5_1_I; }else{ $building_2_5_1_I= $form_data->building_2_5_1_I_cm; }
	if(($form_data->building_2_5_1_J_cm) == ''){ $building_2_5_1_J = $form_data->building_2_5_1_J; }else{ $building_2_5_1_J= $form_data->building_2_5_1_J_cm; }
	
	$building_2_6_1_text = $form_data->building_2_6_1_text;
	if(($form_data->building_2_6_1_A_cm) == ''){ $building_2_6_1_A = $form_data->building_2_6_1_A; }else{ $building_2_6_1_A= $form_data->building_2_6_1_A_cm; }
	if(($form_data->building_2_6_1_B_cm) == ''){ $building_2_6_1_B = $form_data->building_2_6_1_B; }else{ $building_2_6_1_B= $form_data->building_2_6_1_B_cm; }
	if(($form_data->building_2_6_1_C_cm) == ''){ $building_2_6_1_C = $form_data->building_2_6_1_C; }else{ $building_2_6_1_C= $form_data->building_2_6_1_C_cm; }
	if(($form_data->building_2_6_1_D_cm) == ''){ $building_2_6_1_D = $form_data->building_2_6_1_D; }else{ $building_2_6_1_D= $form_data->building_2_6_1_D_cm; }
	if(($form_data->building_2_6_1_E_cm) == ''){ $building_2_6_1_E = $form_data->building_2_6_1_E; }else{ $building_2_6_1_E= $form_data->building_2_6_1_E_cm; }
	
	$building_2_7_1_text = $form_data->building_2_7_1_text;
	if(($form_data->building_2_7_1_A_cm) == ''){ $building_2_7_1_A = $form_data->building_2_7_1_A; }else{ $building_2_7_1_A= $form_data->building_2_7_1_A_cm; }
	if(($form_data->building_2_7_1_B_cm) == ''){ $building_2_7_1_B = $form_data->building_2_7_1_B; }else{ $building_2_7_1_B= $form_data->building_2_7_1_B_cm; }
	$building_2_8_1_text = $form_data->building_2_8_1_text;
	if(($form_data->building_2_8_1_A_cm) == ''){ $building_2_8_1_A = $form_data->building_2_8_1_A; }else{ $building_2_8_1_A= $form_data->building_2_8_1_A_cm; }
	if(($form_data->building_2_8_1_B_cm) == ''){ $building_2_8_1_B = $form_data->building_2_8_1_B; }else{ $building_2_8_1_B= $form_data->building_2_8_1_B_cm; }
	
	$lobby_lounge_other_public_areas_3_1_1_text = $form_data->lobby_lounge_other_public_areas_3_1_1_text;
	if(($form_data->lobby_lounge_other_public_areas_3_1_1_A_cm) == ''){ $lobby_lounge_other_public_areas_3_1_1_A = $form_data->lobby_lounge_other_public_areas_3_1_1_A; }else{ $lobby_lounge_other_public_areas_3_1_1_A= $form_data->lobby_lounge_other_public_areas_3_1_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_1_1_B_cm) == ''){ $lobby_lounge_other_public_areas_3_1_1_B = $form_data->lobby_lounge_other_public_areas_3_1_1_B; }else{ $lobby_lounge_other_public_areas_3_1_1_B= $form_data->lobby_lounge_other_public_areas_3_1_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_1_1_C_cm) == ''){ $lobby_lounge_other_public_areas_3_1_1_C = $form_data->lobby_lounge_other_public_areas_3_1_1_C; }else{ $lobby_lounge_other_public_areas_3_1_1_C= $form_data->lobby_lounge_other_public_areas_3_1_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_1_1_D_cm) == ''){ $lobby_lounge_other_public_areas_3_1_1_D = $form_data->lobby_lounge_other_public_areas_3_1_1_D; }else{ $lobby_lounge_other_public_areas_3_1_1_D= $form_data->lobby_lounge_other_public_areas_3_1_1_D_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_1_1_E_cm) == ''){ $lobby_lounge_other_public_areas_3_1_1_E = $form_data->lobby_lounge_other_public_areas_3_1_1_E; }else{ $lobby_lounge_other_public_areas_3_1_1_E= $form_data->lobby_lounge_other_public_areas_3_1_1_E_cm; }
	
	$lobby_lounge_other_public_areas_3_2_1_text = $form_data->lobby_lounge_other_public_areas_3_2_1_text;
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_A_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_A = $form_data->lobby_lounge_other_public_areas_3_2_1_A; }else{ $lobby_lounge_other_public_areas_3_2_1_A= $form_data->lobby_lounge_other_public_areas_3_2_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_B_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_B = $form_data->lobby_lounge_other_public_areas_3_2_1_B; }else{ $lobby_lounge_other_public_areas_3_2_1_B= $form_data->lobby_lounge_other_public_areas_3_2_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_C_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_C = $form_data->lobby_lounge_other_public_areas_3_2_1_C; }else{ $lobby_lounge_other_public_areas_3_2_1_C= $form_data->lobby_lounge_other_public_areas_3_2_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_D_a_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_3_2_1_D_a == ''){ $lobby_lounge_other_public_areas_3_2_1_D_a = ''; }else{ $lobby_lounge_other_public_areas_3_2_1_D_a = 1; } }else{ $lobby_lounge_other_public_areas_3_2_1_D_a= $form_data->lobby_lounge_other_public_areas_3_2_1_D_a_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_D_b_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_3_2_1_D_b == ''){ $lobby_lounge_other_public_areas_3_2_1_D_b = ''; }else{ $lobby_lounge_other_public_areas_3_2_1_D_b = 3; } }else{ $lobby_lounge_other_public_areas_3_2_1_D_b= $form_data->lobby_lounge_other_public_areas_3_2_1_D_b_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_E_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_E = $form_data->lobby_lounge_other_public_areas_3_2_1_E; }else{ $lobby_lounge_other_public_areas_3_2_1_E= $form_data->lobby_lounge_other_public_areas_3_2_1_E_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_F_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_F = $form_data->lobby_lounge_other_public_areas_3_2_1_F; }else{ $lobby_lounge_other_public_areas_3_2_1_F= $form_data->lobby_lounge_other_public_areas_3_2_1_F_cm; }
	if(($form_data->lobby_lounge_other_public_areas_3_2_1_G_cm) == ''){ $lobby_lounge_other_public_areas_3_2_1_G = $form_data->lobby_lounge_other_public_areas_3_2_1_G; }else{ $lobby_lounge_other_public_areas_3_2_1_G= $form_data->lobby_lounge_other_public_areas_3_2_1_G_cm; }
	
	$lobby_lounge_other_public_area_3_3_1_text = $form_data->lobby_lounge_other_public_area_3_3_1_text;
	if(($form_data->lobby_lounge_other_public_area_3_3_1_A_cm) == ''){ $lobby_lounge_other_public_area_3_3_1_A = $form_data->lobby_lounge_other_public_area_3_3_1_A; }else{ $lobby_lounge_other_public_area_3_3_1_A= $form_data->lobby_lounge_other_public_area_3_3_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_B_a_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_B_a == ''){ $lobby_lounge_other_public_area_3_3_1_B_a = ''; }else{ $lobby_lounge_other_public_area_3_3_1_B_a = 1; } }else{ $lobby_lounge_other_public_area_3_3_1_B_a= $form_data->lobby_lounge_other_public_area_3_3_1_B_a_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_B_b_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_B_b == ''){ $lobby_lounge_other_public_area_3_3_1_B_b = ''; }else{ $lobby_lounge_other_public_area_3_3_1_B_b = 2; } }else{ $lobby_lounge_other_public_area_3_3_1_B_b= $form_data->lobby_lounge_other_public_area_3_3_1_B_b_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_B_c_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_B_c == ''){ $lobby_lounge_other_public_area_3_3_1_B_c = ''; }else{ $lobby_lounge_other_public_area_3_3_1_B_c = 3; } }else{ $lobby_lounge_other_public_area_3_3_1_B_c= $form_data->lobby_lounge_other_public_area_3_3_1_B_c_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_C_a_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_C_a == ''){ $lobby_lounge_other_public_area_3_3_1_C_a = ''; }else{ $lobby_lounge_other_public_area_3_3_1_C_a = 1; } }else{ $lobby_lounge_other_public_area_3_3_1_C_a= $form_data->lobby_lounge_other_public_area_3_3_1_C_a_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_C_b_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_C_b == ''){ $lobby_lounge_other_public_area_3_3_1_C_b = ''; }else{ $lobby_lounge_other_public_area_3_3_1_C_b = 1; } }else{ $lobby_lounge_other_public_area_3_3_1_C_b= $form_data->lobby_lounge_other_public_area_3_3_1_C_b_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_C_c_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_C_c == ''){ $lobby_lounge_other_public_area_3_3_1_C_c = ''; }else{ $lobby_lounge_other_public_area_3_3_1_C_c = 1; } }else{ $lobby_lounge_other_public_area_3_3_1_C_c= $form_data->lobby_lounge_other_public_area_3_3_1_C_c_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_D_a_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_D_a == ''){ $lobby_lounge_other_public_area_3_3_1_D_a = ''; }else{ $lobby_lounge_other_public_area_3_3_1_D_a = 2; } }else{ $lobby_lounge_other_public_area_3_3_1_D_a= $form_data->lobby_lounge_other_public_area_3_3_1_D_a_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_D_b_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_D_b == ''){ $lobby_lounge_other_public_area_3_3_1_D_b = ''; }else{ $lobby_lounge_other_public_area_3_3_1_D_b = 2; } }else{ $lobby_lounge_other_public_area_3_3_1_D_b= $form_data->lobby_lounge_other_public_area_3_3_1_D_b_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_D_c_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_D_c == ''){ $lobby_lounge_other_public_area_3_3_1_D_c = ''; }else{ $lobby_lounge_other_public_area_3_3_1_D_c = 2; } }else{ $lobby_lounge_other_public_area_3_3_1_D_c= $form_data->lobby_lounge_other_public_area_3_3_1_D_c_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_3_1_D_d_cm) == ''){ if($form_data->lobby_lounge_other_public_area_3_3_1_D_d == ''){ $lobby_lounge_other_public_area_3_3_1_D_d = ''; }else{ $lobby_lounge_other_public_area_3_3_1_D_d = 2; } }else{ $lobby_lounge_other_public_area_3_3_1_D_d= $form_data->lobby_lounge_other_public_area_3_3_1_D_d_cm; }
	
	$lobby_lounge_other_public_area_3_4_1_text = $form_data->lobby_lounge_other_public_area_3_4_1_text;
	if(($form_data->lobby_lounge_other_public_area_3_4_1_A_cm) == ''){ $lobby_lounge_other_public_area_3_4_1_A = $form_data->lobby_lounge_other_public_area_3_4_1_A; }else{ $lobby_lounge_other_public_area_3_4_1_A= $form_data->lobby_lounge_other_public_area_3_4_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_4_1_B_cm) == ''){ $lobby_lounge_other_public_area_3_4_1_B = $form_data->lobby_lounge_other_public_area_3_4_1_B; }else{ $lobby_lounge_other_public_area_3_4_1_B= $form_data->lobby_lounge_other_public_area_3_4_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_4_1_C_cm) == ''){ $lobby_lounge_other_public_area_3_4_1_C = $form_data->lobby_lounge_other_public_area_3_4_1_C; }else{ $lobby_lounge_other_public_area_3_4_1_C= $form_data->lobby_lounge_other_public_area_3_4_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_area_3_4_1_D_cm) == ''){ $lobby_lounge_other_public_area_3_4_1_D = $form_data->lobby_lounge_other_public_area_3_4_1_D; }else{ $lobby_lounge_other_public_area_3_4_1_D= $form_data->lobby_lounge_other_public_area_3_4_1_D_cm; }
	
	$guest_rooms_4_1_1_text = $form_data->guest_rooms_4_1_1_text;
	if(($form_data->guest_rooms_4_1_1_A_cm) == ''){ $guest_rooms_4_1_1_A = $form_data->guest_rooms_4_1_1_A; }else{ $guest_rooms_4_1_1_A= $form_data->guest_rooms_4_1_1_A_cm; }
	
	$guest_rooms_4_2_1_text = $form_data->guest_rooms_4_2_1_text;
	if(($form_data->guest_rooms_4_2_1_A_a_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_a == ''){ $guest_rooms_4_2_1_A_a = ''; }else{ $guest_rooms_4_2_1_A_a = 3; } }else{ $guest_rooms_4_2_1_A_a= $form_data->guest_rooms_4_2_1_A_a_cm; }
	if(($form_data->guest_rooms_4_2_1_A_b_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_b == ''){ $guest_rooms_4_2_1_A_b = ''; }else{ $guest_rooms_4_2_1_A_b = 3; } }else{ $guest_rooms_4_2_1_A_b= $form_data->guest_rooms_4_2_1_A_b_cm; }
	if(($form_data->guest_rooms_4_2_1_A_c_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_c == ''){ $guest_rooms_4_2_1_A_c = ''; }else{ $guest_rooms_4_2_1_A_c = 3; } }else{ $guest_rooms_4_2_1_A_c= $form_data->guest_rooms_4_2_1_A_c_cm; }
	if(($form_data->guest_rooms_4_2_1_A_d_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_d == ''){ $guest_rooms_4_2_1_A_d = ''; }else{ $guest_rooms_4_2_1_A_d = 3; } }else{ $guest_rooms_4_2_1_A_d= $form_data->guest_rooms_4_2_1_A_d_cm; }
	if(($form_data->guest_rooms_4_2_1_A_e_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_e == ''){ $guest_rooms_4_2_1_A_e = ''; }else{ $guest_rooms_4_2_1_A_e = 3; } }else{ $guest_rooms_4_2_1_A_e= $form_data->guest_rooms_4_2_1_A_e_cm; }
	if(($form_data->guest_rooms_4_2_1_A_f_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_f == ''){ $guest_rooms_4_2_1_A_f = ''; }else{ $guest_rooms_4_2_1_A_f = 3; } }else{ $guest_rooms_4_2_1_A_f= $form_data->guest_rooms_4_2_1_A_f_cm; }
	if(($form_data->guest_rooms_4_2_1_A_g_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_g == ''){ $guest_rooms_4_2_1_A_g = ''; }else{ $guest_rooms_4_2_1_A_g = 3; } }else{ $guest_rooms_4_2_1_A_g= $form_data->guest_rooms_4_2_1_A_g_cm; }
	if(($form_data->guest_rooms_4_2_1_A_h_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_h == ''){ $guest_rooms_4_2_1_A_h = ''; }else{ $guest_rooms_4_2_1_A_h = 3; } }else{ $guest_rooms_4_2_1_A_h= $form_data->guest_rooms_4_2_1_A_h_cm; }
	if(($form_data->guest_rooms_4_2_1_A_i_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_i == ''){ $guest_rooms_4_2_1_A_i = ''; }else{ $guest_rooms_4_2_1_A_i = 3; } }else{ $guest_rooms_4_2_1_A_i= $form_data->guest_rooms_4_2_1_A_i_cm; }
	if(($form_data->guest_rooms_4_2_1_A_j_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_j == ''){ $guest_rooms_4_2_1_A_j = ''; }else{ $guest_rooms_4_2_1_A_j = 3; } }else{ $guest_rooms_4_2_1_A_j= $form_data->guest_rooms_4_2_1_A_j_cm; }
	if(($form_data->guest_rooms_4_2_1_A_k_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_k == ''){ $guest_rooms_4_2_1_A_k = ''; }else{ $guest_rooms_4_2_1_A_k = 4; } }else{ $guest_rooms_4_2_1_A_k= $form_data->guest_rooms_4_2_1_A_k_cm; }
	if(($form_data->guest_rooms_4_2_1_A_l_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_l == ''){ $guest_rooms_4_2_1_A_l = ''; }else{ $guest_rooms_4_2_1_A_l = 3; } }else{ $guest_rooms_4_2_1_A_l= $form_data->guest_rooms_4_2_1_A_l_cm; }
	if(($form_data->guest_rooms_4_2_1_A_m_cm) == ''){ if($form_data->guest_rooms_4_2_1_A_m == ''){ $guest_rooms_4_2_1_A_m = ''; }else{ $guest_rooms_4_2_1_A_m = 3; } }else{ $guest_rooms_4_2_1_A_m= $form_data->guest_rooms_4_2_1_A_m_cm; }
	if(($form_data->guest_rooms_4_2_1_B_cm) == ''){ $guest_rooms_4_2_1_B = $form_data->guest_rooms_4_2_1_B; }else{ $guest_rooms_4_2_1_B= $form_data->guest_rooms_4_2_1_B_cm; }
	
	$guest_rooms_4_3_1_text = $form_data->guest_rooms_4_3_1_text;
	if(($form_data->guest_rooms_4_3_1_A_cm) == ''){ $guest_rooms_4_3_1_A = $form_data->guest_rooms_4_3_1_A; }else{ $guest_rooms_4_3_1_A= $form_data->guest_rooms_4_3_1_A_cm; }
	if(($form_data->guest_rooms_4_3_1_B_cm) == ''){ $guest_rooms_4_3_1_B = $form_data->guest_rooms_4_3_1_B; }else{ $guest_rooms_4_3_1_B= $form_data->guest_rooms_4_3_1_B_cm; }
	if(($form_data->guest_rooms_4_3_1_C_cm) == ''){ $guest_rooms_4_3_1_C = $form_data->guest_rooms_4_3_1_C; }else{ $guest_rooms_4_3_1_C= $form_data->guest_rooms_4_3_1_C_cm; }
	if(($form_data->guest_rooms_4_3_1_D_cm) == ''){ $guest_rooms_4_3_1_D = $form_data->guest_rooms_4_3_1_D; }else{ $guest_rooms_4_3_1_D= $form_data->guest_rooms_4_3_1_D_cm; }
	if(($form_data->guest_rooms_4_3_1_E_cm) == ''){ $guest_rooms_4_3_1_E = $form_data->guest_rooms_4_3_1_E; }else{ $guest_rooms_4_3_1_E= $form_data->guest_rooms_4_3_1_E_cm; }
	
	$guest_rooms_4_4_1_text = $form_data->guest_rooms_4_4_1_text;
	if(($form_data->guest_rooms_4_4_1_A_cm) == ''){ $guest_rooms_4_4_1_A = $form_data->guest_rooms_4_4_1_A; }else{ $guest_rooms_4_4_1_A= $form_data->guest_rooms_4_4_1_A_cm; }
	if(($form_data->guest_rooms_4_4_1_B_cm) == ''){ $guest_rooms_4_4_1_B = $form_data->guest_rooms_4_4_1_B; }else{ $guest_rooms_4_4_1_B= $form_data->guest_rooms_4_4_1_B_cm; }
	if(($form_data->guest_rooms_4_4_1_C_cm) == ''){ $guest_rooms_4_4_1_C = $form_data->guest_rooms_4_4_1_C; }else{ $guest_rooms_4_4_1_C= $form_data->guest_rooms_4_4_1_C_cm; }
	if(($form_data->guest_rooms_4_4_1_D_cm) == ''){ $guest_rooms_4_4_1_D = $form_data->guest_rooms_4_4_1_D; }else{ $guest_rooms_4_4_1_D= $form_data->guest_rooms_4_4_1_D_cm; }
	if(($form_data->guest_rooms_4_4_1_E_cm) == ''){ $guest_rooms_4_4_1_E = $form_data->guest_rooms_4_4_1_E; }else{ $guest_rooms_4_4_1_E= $form_data->guest_rooms_4_4_1_E_cm; }
	
	$guest_rooms_4_5_1_text = $form_data->guest_rooms_4_5_1_text;
	if(($form_data->guest_rooms_4_5_1_A_cm) == ''){ $guest_rooms_4_5_1_A = $form_data->guest_rooms_4_5_1_A; }else{ $guest_rooms_4_5_1_A= $form_data->guest_rooms_4_5_1_A_cm; }
	if(($form_data->guest_rooms_4_5_1_B_a_cm) == ''){ if($form_data->guest_rooms_4_5_1_B_a == ''){ $guest_rooms_4_5_1_B_a = ''; }else{ $guest_rooms_4_5_1_B_a = 3; } }else{ $guest_rooms_4_5_1_B_a= $form_data->guest_rooms_4_5_1_B_a_cm; }
	if(($form_data->guest_rooms_4_5_1_B_b_cm) == ''){ if($form_data->guest_rooms_4_5_1_B_b == ''){ $guest_rooms_4_5_1_B_b = ''; }else{ $guest_rooms_4_5_1_B_b = 3; } }else{ $guest_rooms_4_5_1_B_b= $form_data->guest_rooms_4_5_1_B_b_cm; }
	if(($form_data->guest_rooms_4_5_1_B_c_cm) == ''){ if($form_data->guest_rooms_4_5_1_B_c == ''){ $guest_rooms_4_5_1_B_c = ''; }else{ $guest_rooms_4_5_1_B_c = 3; } }else{ $guest_rooms_4_5_1_B_c= $form_data->guest_rooms_4_5_1_B_c_cm; }
	if(($form_data->guest_rooms_4_5_1_B_d_cm) == ''){ if($form_data->guest_rooms_4_5_1_B_d == ''){ $guest_rooms_4_5_1_B_d = ''; }else{ $guest_rooms_4_5_1_B_d = 3; } }else{ $guest_rooms_4_5_1_B_d= $form_data->guest_rooms_4_5_1_B_d_cm; }
	if(($form_data->guest_rooms_4_5_1_B_e_cm) == ''){ if($form_data->guest_rooms_4_5_1_B_e == ''){ $guest_rooms_4_5_1_B_e = ''; }else{ $guest_rooms_4_5_1_B_e = 3; } }else{ $guest_rooms_4_5_1_B_e= $form_data->guest_rooms_4_5_1_B_e_cm; }
	if(($form_data->guest_rooms_4_5_1_C_cm) == ''){ $guest_rooms_4_5_1_C = $form_data->guest_rooms_4_5_1_C; }else{ $guest_rooms_4_5_1_C= $form_data->guest_rooms_4_5_1_C_cm; }
	if(($form_data->guest_rooms_4_5_1_D_cm) == ''){ $guest_rooms_4_5_1_D = $form_data->guest_rooms_4_5_1_D; }else{ $guest_rooms_4_5_1_D= $form_data->guest_rooms_4_5_1_D_cm; }
	if(($form_data->guest_rooms_4_5_1_E_cm) == ''){ $guest_rooms_4_5_1_E = $form_data->guest_rooms_4_5_1_E; }else{ $guest_rooms_4_5_1_E= $form_data->guest_rooms_4_5_1_E_cm; }
	if(($form_data->guest_rooms_4_5_1_F_cm) == ''){ $guest_rooms_4_5_1_F = $form_data->guest_rooms_4_5_1_F; }else{ $guest_rooms_4_5_1_F= $form_data->guest_rooms_4_5_1_F_cm; }
	
	$kitchen_5_1_1_text = $form_data->kitchen_5_1_1_text;
	if(($form_data->kitchen_5_1_1_A_cm) == ''){ $kitchen_5_1_1_A = $form_data->kitchen_5_1_1_A; }else{ $kitchen_5_1_1_A= $form_data->kitchen_5_1_1_A_cm; }
	
	$kitchen_5_2_1_text = $form_data->kitchen_5_2_1_text;
	if(($form_data->kitchen_5_2_1_A_cm) == ''){ $kitchen_5_2_1_A = $form_data->kitchen_5_2_1_A; }else{ $kitchen_5_2_1_A= $form_data->kitchen_5_2_1_A_cm; }
	if(($form_data->kitchen_5_2_1_B_cm) == ''){ $kitchen_5_2_1_B = $form_data->kitchen_5_2_1_B; }else{ $kitchen_5_2_1_B= $form_data->kitchen_5_2_1_B_cm; }
	if(($form_data->kitchen_5_2_1_C_cm) == ''){ $kitchen_5_2_1_C = $form_data->kitchen_5_2_1_C; }else{ $kitchen_5_2_1_C= $form_data->kitchen_5_2_1_C_cm; }
	if(($form_data->kitchen_5_2_1_D_cm) == ''){ $kitchen_5_2_1_D = $form_data->kitchen_5_2_1_D; }else{ $kitchen_5_2_1_D= $form_data->kitchen_5_2_1_D_cm; }
	if(($form_data->kitchen_5_2_1_E_cm) == ''){ $kitchen_5_2_1_E = $form_data->kitchen_5_2_1_E; }else{ $kitchen_5_2_1_E= $form_data->kitchen_5_2_1_E_cm; }
	if(($form_data->kitchen_5_2_1_F_cm) == ''){ $kitchen_5_2_1_F = $form_data->kitchen_5_2_1_F; }else{ $kitchen_5_2_1_F= $form_data->kitchen_5_2_1_F_cm; }
	if(($form_data->kitchen_5_2_1_G_cm) == ''){ $kitchen_5_2_1_G = $form_data->kitchen_5_2_1_G; }else{ $kitchen_5_2_1_G= $form_data->kitchen_5_2_1_G_cm; }
	if(($form_data->kitchen_5_2_1_H_cm) == ''){ $kitchen_5_2_1_H = $form_data->kitchen_5_2_1_H; }else{ $kitchen_5_2_1_H= $form_data->kitchen_5_2_1_H_cm; }
	
	$kitchen_5_3_1_text = $form_data->kitchen_5_3_1_text;
	if(($form_data->kitchen_5_3_1_A_a_cm) == ''){ if($form_data->kitchen_5_3_1_A_a == ''){ $kitchen_5_3_1_A_a = ''; }else{ $kitchen_5_3_1_A_a = 4; } }else{ $kitchen_5_3_1_A_a= $form_data->kitchen_5_3_1_A_a_cm; }
	if(($form_data->kitchen_5_3_1_A_b_cm) == ''){ if($form_data->kitchen_5_3_1_A_b == ''){ $kitchen_5_3_1_A_b = ''; }else{ $kitchen_5_3_1_A_b = 4; } }else{ $kitchen_5_3_1_A_b= $form_data->kitchen_5_3_1_A_b_cm; }
	if(($form_data->kitchen_5_3_1_A_c_cm) == ''){ if($form_data->kitchen_5_3_1_A_c == ''){ $kitchen_5_3_1_A_c = ''; }else{ $kitchen_5_3_1_A_c = 4; } }else{ $kitchen_5_3_1_A_c= $form_data->kitchen_5_3_1_A_c_cm; }
	if(($form_data->kitchen_5_3_1_A_d_cm) == ''){ if($form_data->kitchen_5_3_1_A_d == ''){ $kitchen_5_3_1_A_d = ''; }else{ $kitchen_5_3_1_A_d = 4; } }else{ $kitchen_5_3_1_A_d= $form_data->kitchen_5_3_1_A_d_cm; }
	if(($form_data->kitchen_5_3_1_B_cm) == ''){ $kitchen_5_3_1_B = $form_data->kitchen_5_3_1_B; }else{ $kitchen_5_3_1_B= $form_data->kitchen_5_3_1_B_cm; }
	if(($form_data->kitchen_5_3_1_C_cm) == ''){ $kitchen_5_3_1_C = $form_data->kitchen_5_3_1_C; }else{ $kitchen_5_3_1_C= $form_data->kitchen_5_3_1_C_cm; }
	if(($form_data->kitchen_5_3_1_D_cm) == ''){ $kitchen_5_3_1_D = $form_data->kitchen_5_3_1_D; }else{ $kitchen_5_3_1_D= $form_data->kitchen_5_3_1_D_cm; }
	if(($form_data->kitchen_5_3_1_E_cm) == ''){ $kitchen_5_3_1_E = $form_data->kitchen_5_3_1_E; }else{ $kitchen_5_3_1_E= $form_data->kitchen_5_3_1_E_cm; }
	if(($form_data->kitchen_5_3_1_F_cm) == ''){ $kitchen_5_3_1_F = $form_data->kitchen_5_3_1_F; }else{ $kitchen_5_3_1_F= $form_data->kitchen_5_3_1_F_cm; }
	if(($form_data->kitchen_5_3_1_G_cm) == ''){ $kitchen_5_3_1_G = $form_data->kitchen_5_3_1_G; }else{ $kitchen_5_3_1_G= $form_data->kitchen_5_3_1_G_cm; }
	
	$function_rooms_6_1_1_text = $form_data->function_rooms_6_1_1_text;
	if(($form_data->function_rooms_6_1_1_A_cm) == ''){ $function_rooms_6_1_1_A = $form_data->function_rooms_6_1_1_A; }else{ $function_rooms_6_1_1_A= $form_data->function_rooms_6_1_1_A_cm; }
	
	$function_rooms_6_2_1_text = $form_data->function_rooms_6_2_1_text;
	if(($form_data->function_rooms_6_2_1_A_cm) == ''){ $function_rooms_6_2_1_A = $form_data->function_rooms_6_2_1_A; }else{ $function_rooms_6_2_1_A= $form_data->function_rooms_6_2_1_A_cm; }
	if(($form_data->function_rooms_6_2_1_B_a_cm) == ''){ if($form_data->function_rooms_6_2_1_B_a == ''){ $function_rooms_6_2_1_B_a = ''; }else{ $function_rooms_6_2_1_B_a = 3; } }else{ $function_rooms_6_2_1_B_a= $form_data->function_rooms_6_2_1_B_a_cm; }
	if(($form_data->function_rooms_6_2_1_B_b_cm) == ''){ if($form_data->function_rooms_6_2_1_B_b == ''){ $function_rooms_6_2_1_B_b = ''; }else{ $function_rooms_6_2_1_B_b = 3; } }else{ $function_rooms_6_2_1_B_b= $form_data->function_rooms_6_2_1_B_b_cm; }
	if(($form_data->function_rooms_6_2_1_B_c_cm) == ''){ if($form_data->function_rooms_6_2_1_B_c == ''){ $function_rooms_6_2_1_B_c = ''; }else{ $function_rooms_6_2_1_B_c = 3; } }else{ $function_rooms_6_2_1_B_c= $form_data->function_rooms_6_2_1_B_c_cm; }
	if(($form_data->function_rooms_6_2_1_B_d_cm) == ''){ if($form_data->function_rooms_6_2_1_B_d == ''){ $function_rooms_6_2_1_B_d = ''; }else{ $function_rooms_6_2_1_B_d = 2; } }else{ $function_rooms_6_2_1_B_d= $form_data->function_rooms_6_2_1_B_d_cm; }
	if(($form_data->function_rooms_6_2_1_B_e_cm) == ''){ if($form_data->function_rooms_6_2_1_B_e == ''){ $function_rooms_6_2_1_B_e = ''; }else{ $function_rooms_6_2_1_B_e = 2; } }else{ $function_rooms_6_2_1_B_e= $form_data->function_rooms_6_2_1_B_e_cm; }
	if(($form_data->function_rooms_6_2_1_B_f_cm) == ''){ if($form_data->function_rooms_6_2_1_B_f == ''){ $function_rooms_6_2_1_B_f = ''; }else{ $function_rooms_6_2_1_B_f = 3; } }else{ $function_rooms_6_2_1_B_f= $form_data->function_rooms_6_2_1_B_f_cm; }
	if(($form_data->function_rooms_6_2_1_C_a_cm) == ''){ if($form_data->function_rooms_6_2_1_C_a == ''){ $function_rooms_6_2_1_C_a = ''; }else{ $function_rooms_6_2_1_C_a = 4; } }else{ $function_rooms_6_2_1_C_a= $form_data->function_rooms_6_2_1_C_a_cm; }
	if(($form_data->function_rooms_6_2_1_C_b_cm) == ''){ if($form_data->function_rooms_6_2_1_C_b == ''){ $function_rooms_6_2_1_C_b = ''; }else{ $function_rooms_6_2_1_C_b = 5; } }else{ $function_rooms_6_2_1_C_b= $form_data->function_rooms_6_2_1_C_b_cm; }
	if(($form_data->function_rooms_6_2_1_D_cm) == ''){ $function_rooms_6_2_1_D = $form_data->function_rooms_6_2_1_D; }else{ $function_rooms_6_2_1_D= $form_data->function_rooms_6_2_1_D_cm; }
	
	$functions_room_6_3_1_text = $form_data->functions_room_6_3_1_text;
	if(($form_data->functions_room_6_3_1_A_cm) == ''){ $functions_room_6_3_1_A = $form_data->functions_room_6_3_1_A; }else{ $functions_room_6_3_1_A= $form_data->functions_room_6_3_1_A_cm; }
	if(($form_data->functions_room_6_3_1_A_c_cm) == ''){ if($form_data->functions_room_6_3_1_A_c == ''){ $functions_room_6_3_1_A_c = ''; }else{ $functions_room_6_3_1_A_c = 5; } }else{ $functions_room_6_3_1_A_c= $form_data->functions_room_6_3_1_A_c_cm; }
	if(($form_data->functions_room_6_3_1_A_d_cm) == ''){ if($form_data->functions_room_6_3_1_A_d == ''){ $functions_room_6_3_1_A_d = ''; }else{ $functions_room_6_3_1_A_d = 4; } }else{ $functions_room_6_3_1_A_d= $form_data->functions_room_6_3_1_A_d_cm; }
	if(($form_data->functions_room_6_3_1_A_e_cm) == ''){ if($form_data->functions_room_6_3_1_A_e == ''){ $functions_room_6_3_1_A_e = ''; }else{ $functions_room_6_3_1_A_e = 3; } }else{ $functions_room_6_3_1_A_e= $form_data->functions_room_6_3_1_A_e_cm; }
	if(($form_data->functions_room_6_3_1_A_f_cm) == ''){ if($form_data->functions_room_6_3_1_A_f == ''){ $functions_room_6_3_1_A_f = ''; }else{ $functions_room_6_3_1_A_f = 4; } }else{ $functions_room_6_3_1_A_f= $form_data->functions_room_6_3_1_A_f_cm; }
	if(($form_data->functions_room_6_3_1_A_g_cm) == ''){ if($form_data->functions_room_6_3_1_A_g == ''){ $functions_room_6_3_1_A_g = ''; }else{ $functions_room_6_3_1_A_g = 4; } }else{ $functions_room_6_3_1_A_g= $form_data->functions_room_6_3_1_A_g_cm; }
	if(($form_data->functions_room_6_3_1_A_h_cm) == ''){ if($form_data->functions_room_6_3_1_A_h == ''){ $functions_room_6_3_1_A_h = ''; }else{ $functions_room_6_3_1_A_h = 4; } }else{ $functions_room_6_3_1_A_h= $form_data->functions_room_6_3_1_A_h_cm; }
	if(($form_data->functions_room_6_3_1_A_i_cm) == ''){ if($form_data->functions_room_6_3_1_A_i == ''){ $functions_room_6_3_1_A_i = ''; }else{ $functions_room_6_3_1_A_i = 4; } }else{ $functions_room_6_3_1_A_i= $form_data->functions_room_6_3_1_A_i_cm; }
	if(($form_data->functions_room_6_3_1_A_j_cm) == ''){ if($form_data->functions_room_6_3_1_A_j == ''){ $functions_room_6_3_1_A_j = ''; }else{ $functions_room_6_3_1_A_j = 2; } }else{ $functions_room_6_3_1_A_j= $form_data->functions_room_6_3_1_A_j_cm; }
	if(($form_data->functions_room_6_3_1_A_k_cm) == ''){ if($form_data->functions_room_6_3_1_A_k == ''){ $functions_room_6_3_1_A_k = ''; }else{ $functions_room_6_3_1_A_k = 2; } }else{ $functions_room_6_3_1_A_k= $form_data->functions_room_6_3_1_A_k_cm; }
	if(($form_data->functions_room_6_3_1_A_l_cm) == ''){ if($form_data->functions_room_6_3_1_A_l == ''){ $functions_room_6_3_1_A_l = ''; }else{ $functions_room_6_3_1_A_l = 3; } }else{ $functions_room_6_3_1_A_l= $form_data->functions_room_6_3_1_A_l_cm; }
	if(($form_data->functions_room_6_3_1_A_m_cm) == ''){ if($form_data->functions_room_6_3_1_A_m == ''){ $functions_room_6_3_1_A_m = ''; }else{ $functions_room_6_3_1_A_m = 5; } }else{ $functions_room_6_3_1_A_m= $form_data->functions_room_6_3_1_A_m_cm; }
	if(($form_data->functions_room_6_3_1_A_n_cm) == ''){ if($form_data->functions_room_6_3_1_A_n == ''){ $functions_room_6_3_1_A_n = ''; }else{ $functions_room_6_3_1_A_n = 4; } }else{ $functions_room_6_3_1_A_n= $form_data->functions_room_6_3_1_A_n_cm; }
	if(($form_data->functions_room_6_3_1_A_o_cm) == ''){ if($form_data->functions_room_6_3_1_A_o == ''){ $functions_room_6_3_1_A_o = ''; }else{ $functions_room_6_3_1_A_o = 5; } }else{ $functions_room_6_3_1_A_o= $form_data->functions_room_6_3_1_A_o_cm; }
	if(($form_data->functions_room_6_3_1_A_p_cm) == ''){ if($form_data->functions_room_6_3_1_A_p == ''){ $functions_room_6_3_1_A_p = ''; }else{ $functions_room_6_3_1_A_p = 5; } }else{ $functions_room_6_3_1_A_p= $form_data->functions_room_6_3_1_A_p_cm; }
	if(($form_data->functions_room_6_3_1_A_q_cm) == ''){ if($form_data->functions_room_6_3_1_A_q == ''){ $functions_room_6_3_1_A_q = ''; }else{ $functions_room_6_3_1_A_q = 5; } }else{ $functions_room_6_3_1_A_q= $form_data->functions_room_6_3_1_A_q_cm; }
	if(($form_data->functions_room_6_3_1_B_cm) == ''){ $functions_room_6_3_1_B = $form_data->functions_room_6_3_1_B; }else{ $functions_room_6_3_1_B= $form_data->functions_room_6_3_1_B_cm; }
	
	$function_rooms_6_4_1_text = $form_data->function_rooms_6_4_1_text;
	if(($form_data->function_rooms_6_4_1_A_cm) == ''){ $function_rooms_6_4_1_A = $form_data->function_rooms_6_4_1_A; }else{ $function_rooms_6_4_1_A= $form_data->function_rooms_6_4_1_A_cm; }
	if(($form_data->function_rooms_6_4_1_B_a_cm) == ''){ if($form_data->function_rooms_6_4_1_B_a == ''){ $function_rooms_6_4_1_B_a = ''; }else{ $function_rooms_6_4_1_B_a = 5; } }else{ $function_rooms_6_4_1_B_a= $form_data->function_rooms_6_4_1_B_a_cm; }
	if(($form_data->function_rooms_6_4_1_B_b_cm) == ''){ if($form_data->function_rooms_6_4_1_B_b == ''){ $function_rooms_6_4_1_B_b = ''; }else{ $function_rooms_6_4_1_B_b = 5; } }else{ $function_rooms_6_4_1_B_b= $form_data->function_rooms_6_4_1_B_b_cm; }
	if(($form_data->function_rooms_6_4_1_B_c_cm) == ''){ if($form_data->function_rooms_6_4_1_B_c == ''){ $function_rooms_6_4_1_B_c = ''; }else{ $function_rooms_6_4_1_B_c = 5; } }else{ $function_rooms_6_4_1_B_c= $form_data->function_rooms_6_4_1_B_c_cm; }
	if(($form_data->function_rooms_6_4_1_B_d_cm) == ''){ if($form_data->function_rooms_6_4_1_B_d == ''){ $function_rooms_6_4_1_B_d = ''; }else{ $function_rooms_6_4_1_B_d = 5; } }else{ $function_rooms_6_4_1_B_d= $form_data->function_rooms_6_4_1_B_d_cm; }
	if(($form_data->function_rooms_6_4_1_C_cm) == ''){ $function_rooms_6_4_1_C = $form_data->function_rooms_6_4_1_C; }else{ $function_rooms_6_4_1_C= $form_data->function_rooms_6_4_1_C_cm; }
	if(($form_data->function_rooms_6_4_1_D_cm) == ''){ $function_rooms_6_4_1_D = $form_data->function_rooms_6_4_1_D; }else{ $function_rooms_6_4_1_D= $form_data->function_rooms_6_4_1_D_cm; }
	
	$function_rooms_6_5_1_text = $form_data->function_rooms_6_5_1_text;
	if(($form_data->function_rooms_6_5_1_A_cm) == ''){ $function_rooms_6_5_1_A = $form_data->function_rooms_6_5_1_A; }else{ $function_rooms_6_5_1_A= $form_data->function_rooms_6_5_1_A_cm; }
	if(($form_data->function_rooms_6_5_1_B_cm) == ''){ $function_rooms_6_5_1_B = $form_data->function_rooms_6_5_1_B; }else{ $function_rooms_6_5_1_B= $form_data->function_rooms_6_5_1_B_cm; }
	
	$function_rooms_6_6_1_text = $form_data->function_rooms_6_6_1_text;
	if(($form_data->function_rooms_6_6_1_A_cm) == ''){ $function_rooms_6_6_1_A = $form_data->function_rooms_6_6_1_A; }else{ $function_rooms_6_6_1_A= $form_data->function_rooms_6_6_1_A_cm; }
	if(($form_data->function_rooms_6_6_1_B_cm) == ''){ $function_rooms_6_6_1_B = $form_data->function_rooms_6_6_1_B; }else{ $function_rooms_6_6_1_B= $form_data->function_rooms_6_6_1_B_cm; }
	if(($form_data->function_rooms_6_6_1_C_cm) == ''){ $function_rooms_6_6_1_C = $form_data->function_rooms_6_6_1_C; }else{ $function_rooms_6_6_1_C= $form_data->function_rooms_6_6_1_C_cm; }
	if(($form_data->function_rooms_6_6_1_D_cm) == ''){ $function_rooms_6_6_1_D = $form_data->function_rooms_6_6_1_D; }else{ $function_rooms_6_6_1_D= $form_data->function_rooms_6_6_1_D_cm; }
	if(($form_data->function_rooms_6_6_1_E_cm) == ''){ $function_rooms_6_6_1_E = $form_data->function_rooms_6_6_1_E; }else{ $function_rooms_6_6_1_E= $form_data->function_rooms_6_6_1_E_cm; }
	
	$function_rooms_6_7_1_text = $form_data->function_rooms_6_7_1_text;
	if(($form_data->function_rooms_6_7_1_A_cm) == ''){ $function_rooms_6_7_1_A = $form_data->function_rooms_6_7_1_A; }else{ $function_rooms_6_7_1_A= $form_data->function_rooms_6_7_1_A_cm; }
	if(($form_data->function_rooms_6_7_1_B_cm) == ''){ $function_rooms_6_7_1_B = $form_data->function_rooms_6_7_1_B; }else{ $function_rooms_6_7_1_B= $form_data->function_rooms_6_7_1_B_cm; }
	if(($form_data->function_rooms_6_7_1_C_cm) == ''){ $function_rooms_6_7_1_C = $form_data->function_rooms_6_7_1_C; }else{ $function_rooms_6_7_1_C= $form_data->function_rooms_6_7_1_C_cm; }
	if(($form_data->function_rooms_6_7_1_D_cm) == ''){ $function_rooms_6_7_1_D = $form_data->function_rooms_6_7_1_D; }else{ $function_rooms_6_7_1_D= $form_data->function_rooms_6_7_1_D_cm; }
	if(($form_data->function_rooms_6_7_1_E_cm) == ''){ $function_rooms_6_7_1_E = $form_data->function_rooms_6_7_1_E; }else{ $function_rooms_6_7_1_E= $form_data->function_rooms_6_7_1_E_cm; }
	
	$function_rooms_6_8_1_text = $form_data->function_rooms_6_8_1_text;
	if(($form_data->function_rooms_6_8_1_A_cm) == ''){ $function_rooms_6_8_1_A = $form_data->function_rooms_6_8_1_A; }else{ $function_rooms_6_8_1_A= $form_data->function_rooms_6_8_1_A_cm; }
	if(($form_data->function_rooms_6_8_1_B_a_cm) == ''){ if($form_data->function_rooms_6_8_1_B_a == ''){ $function_rooms_6_8_1_B_a = ''; }else{ $function_rooms_6_8_1_B_a = 2; } }else{ $function_rooms_6_8_1_B_a= $form_data->function_rooms_6_8_1_B_a_cm; }
	if(($form_data->function_rooms_6_8_1_B_b_cm) == ''){ if($form_data->function_rooms_6_8_1_B_b == ''){ $function_rooms_6_8_1_B_b = ''; }else{ $function_rooms_6_8_1_B_b = 3; } }else{ $function_rooms_6_8_1_B_b= $form_data->function_rooms_6_8_1_B_b_cm; }
	if(($form_data->function_rooms_6_8_1_B_c_cm) == ''){ if($form_data->function_rooms_6_8_1_B_c == ''){ $function_rooms_6_8_1_B_c = ''; }else{ $function_rooms_6_8_1_B_c = 4; } }else{ $function_rooms_6_8_1_B_c= $form_data->function_rooms_6_8_1_B_c_cm; }
	if(($form_data->function_rooms_6_8_1_C_cm) == ''){ $function_rooms_6_8_1_C = $form_data->function_rooms_6_8_1_C; }else{ $function_rooms_6_8_1_C= $form_data->function_rooms_6_8_1_C_cm; }
	
	$guest_bathrooms_7_1_1_text = $form_data->guest_bathrooms_7_1_1_text;
	if(($form_data->guest_bathrooms_7_1_1_A_cm) == ''){ $guest_bathrooms_7_1_1_A = $form_data->guest_bathrooms_7_1_1_A; }else{ $guest_bathrooms_7_1_1_A= $form_data->guest_bathrooms_7_1_1_A_cm; }
	if(($form_data->guest_bathrooms_7_1_1_B_cm) == ''){ $guest_bathrooms_7_1_1_B = $form_data->guest_bathrooms_7_1_1_B; }else{ $guest_bathrooms_7_1_1_B= $form_data->guest_bathrooms_7_1_1_B_cm; }
	if(($form_data->guest_bathrooms_7_1_1_C_cm) == ''){ $guest_bathrooms_7_1_1_C = $form_data->guest_bathrooms_7_1_1_C; }else{ $guest_bathrooms_7_1_1_C= $form_data->guest_bathrooms_7_1_1_C_cm; }
	
	$guest_bathrooms_7_2_1_text = $form_data->guest_bathrooms_7_2_1_text;
	if(($form_data->guest_bathrooms_7_2_1_A_cm) == ''){ $guest_bathrooms_7_2_1_A = $form_data->guest_bathrooms_7_2_1_A; }else{ $guest_bathrooms_7_2_1_A= $form_data->guest_bathrooms_7_2_1_A_cm; }
	if(($form_data->guest_bathrooms_7_2_1_B_cm) == ''){ $guest_bathrooms_7_2_1_B = $form_data->guest_bathrooms_7_2_1_B; }else{ $guest_bathrooms_7_2_1_B= $form_data->guest_bathrooms_7_2_1_B_cm; }
	if(($form_data->guest_bathrooms_7_2_1_C_cm) == ''){ $guest_bathrooms_7_2_1_C = $form_data->guest_bathrooms_7_2_1_C; }else{ $guest_bathrooms_7_2_1_C= $form_data->guest_bathrooms_7_2_1_C_cm; }
	if(($form_data->guest_bathrooms_7_2_1_D_cm) == ''){ $guest_bathrooms_7_2_1_D = $form_data->guest_bathrooms_7_2_1_D; }else{ $guest_bathrooms_7_2_1_D= $form_data->guest_bathrooms_7_2_1_D_cm; }
	
	$guest_bathrooms_7_3_1_text = $form_data->guest_bathrooms_7_3_1_text;
	if(($form_data->guest_bathrooms_7_3_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_a == ''){ $guest_bathrooms_7_3_1_A_a = ''; }else{ $guest_bathrooms_7_3_1_A_a = 2; } }else{ $guest_bathrooms_7_3_1_A_a= $form_data->guest_bathrooms_7_3_1_A_a_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_b == ''){ $guest_bathrooms_7_3_1_A_b = ''; }else{ $guest_bathrooms_7_3_1_A_b = 2; } }else{ $guest_bathrooms_7_3_1_A_b= $form_data->guest_bathrooms_7_3_1_A_b_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_c == ''){ $guest_bathrooms_7_3_1_A_c = ''; }else{ $guest_bathrooms_7_3_1_A_c = 2; } }else{ $guest_bathrooms_7_3_1_A_c= $form_data->guest_bathrooms_7_3_1_A_c_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_d == ''){ $guest_bathrooms_7_3_1_A_d = ''; }else{ $guest_bathrooms_7_3_1_A_d = 2; } }else{ $guest_bathrooms_7_3_1_A_d= $form_data->guest_bathrooms_7_3_1_A_d_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_e == ''){ $guest_bathrooms_7_3_1_A_e = ''; }else{ $guest_bathrooms_7_3_1_A_e = 2; } }else{ $guest_bathrooms_7_3_1_A_e= $form_data->guest_bathrooms_7_3_1_A_e_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_f_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_f == ''){ $guest_bathrooms_7_3_1_A_f = ''; }else{ $guest_bathrooms_7_3_1_A_f = 2; } }else{ $guest_bathrooms_7_3_1_A_f= $form_data->guest_bathrooms_7_3_1_A_f_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_g_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_g == ''){ $guest_bathrooms_7_3_1_A_g = ''; }else{ $guest_bathrooms_7_3_1_A_g = 1; } }else{ $guest_bathrooms_7_3_1_A_g= $form_data->guest_bathrooms_7_3_1_A_g_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_h_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_h == ''){ $guest_bathrooms_7_3_1_A_h = ''; }else{ $guest_bathrooms_7_3_1_A_h = 2; } }else{ $guest_bathrooms_7_3_1_A_h= $form_data->guest_bathrooms_7_3_1_A_h_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_i_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_i == ''){ $guest_bathrooms_7_3_1_A_i = ''; }else{ $guest_bathrooms_7_3_1_A_i = 1; } }else{ $guest_bathrooms_7_3_1_A_i= $form_data->guest_bathrooms_7_3_1_A_i_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_j_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_j == ''){ $guest_bathrooms_7_3_1_A_j = ''; }else{ $guest_bathrooms_7_3_1_A_j = 3; } }else{ $guest_bathrooms_7_3_1_A_j= $form_data->guest_bathrooms_7_3_1_A_j_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_k_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_k == ''){ $guest_bathrooms_7_3_1_A_k = ''; }else{ $guest_bathrooms_7_3_1_A_k = 2; } }else{ $guest_bathrooms_7_3_1_A_k= $form_data->guest_bathrooms_7_3_1_A_k_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_l_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_l == ''){ $guest_bathrooms_7_3_1_A_l = ''; }else{ $guest_bathrooms_7_3_1_A_l = 2; } }else{ $guest_bathrooms_7_3_1_A_l= $form_data->guest_bathrooms_7_3_1_A_l_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_m_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_m == ''){ $guest_bathrooms_7_3_1_A_m = ''; }else{ $guest_bathrooms_7_3_1_A_m = 3; } }else{ $guest_bathrooms_7_3_1_A_m= $form_data->guest_bathrooms_7_3_1_A_m_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_n_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_n == ''){ $guest_bathrooms_7_3_1_A_n = ''; }else{ $guest_bathrooms_7_3_1_A_n = 2; } }else{ $guest_bathrooms_7_3_1_A_n= $form_data->guest_bathrooms_7_3_1_A_n_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_o_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_o == ''){ $guest_bathrooms_7_3_1_A_o = ''; }else{ $guest_bathrooms_7_3_1_A_o = 2; } }else{ $guest_bathrooms_7_3_1_A_o= $form_data->guest_bathrooms_7_3_1_A_o_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_p_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_p == ''){ $guest_bathrooms_7_3_1_A_p = ''; }else{ $guest_bathrooms_7_3_1_A_p = 3; } }else{ $guest_bathrooms_7_3_1_A_p= $form_data->guest_bathrooms_7_3_1_A_p_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_q_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_q == ''){ $guest_bathrooms_7_3_1_A_q = ''; }else{ $guest_bathrooms_7_3_1_A_q = 3; } }else{ $guest_bathrooms_7_3_1_A_q= $form_data->guest_bathrooms_7_3_1_A_q_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_r_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_r == ''){ $guest_bathrooms_7_3_1_A_r = ''; }else{ $guest_bathrooms_7_3_1_A_r = 2; } }else{ $guest_bathrooms_7_3_1_A_r= $form_data->guest_bathrooms_7_3_1_A_r_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_s_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_s == ''){ $guest_bathrooms_7_3_1_A_s = ''; }else{ $guest_bathrooms_7_3_1_A_s = 3; } }else{ $guest_bathrooms_7_3_1_A_s= $form_data->guest_bathrooms_7_3_1_A_s_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_t_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_t == ''){ $guest_bathrooms_7_3_1_A_t = ''; }else{ $guest_bathrooms_7_3_1_A_t = 3; } }else{ $guest_bathrooms_7_3_1_A_t= $form_data->guest_bathrooms_7_3_1_A_t_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_u_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_u == ''){ $guest_bathrooms_7_3_1_A_u = ''; }else{ $guest_bathrooms_7_3_1_A_u = 4; } }else{ $guest_bathrooms_7_3_1_A_u= $form_data->guest_bathrooms_7_3_1_A_u_cm; }
	if(($form_data->guest_bathrooms_7_3_1_A_v_cm) == ''){ if($form_data->guest_bathrooms_7_3_1_A_v == ''){ $guest_bathrooms_7_3_1_A_v = ''; }else{ $guest_bathrooms_7_3_1_A_v = 2; } }else{ $guest_bathrooms_7_3_1_A_v= $form_data->guest_bathrooms_7_3_1_A_v_cm; }
	if(($form_data->guest_bathrooms_7_3_1_B_cm) == ''){ $guest_bathrooms_7_3_1_B = $form_data->guest_bathrooms_7_3_1_B; }else{ $guest_bathrooms_7_3_1_B= $form_data->guest_bathrooms_7_3_1_B_cm; }
	if(($form_data->guest_bathrooms_7_3_1_C_cm) == ''){ $guest_bathrooms_7_3_1_C = $form_data->guest_bathrooms_7_3_1_C; }else{ $guest_bathrooms_7_3_1_C= $form_data->guest_bathrooms_7_3_1_C_cm; }
	
	$guest_bathrooms_7_4_1_text = $form_data->guest_bathrooms_7_4_1_text;
	if(($form_data->guest_bathrooms_7_4_1_A_cm) == ''){ $guest_bathrooms_7_4_1_A = $form_data->guest_bathrooms_7_4_1_A; }else{ $guest_bathrooms_7_4_1_A= $form_data->guest_bathrooms_7_4_1_A_cm; }
	if(($form_data->guest_bathrooms_7_4_1_B_cm) == ''){ $guest_bathrooms_7_4_1_B = $form_data->guest_bathrooms_7_4_1_B; }else{ $guest_bathrooms_7_4_1_B= $form_data->guest_bathrooms_7_4_1_B_cm; }
	if(($form_data->guest_bathrooms_7_4_1_C_cm) == ''){ $guest_bathrooms_7_4_1_C = $form_data->guest_bathrooms_7_4_1_C; }else{ $guest_bathrooms_7_4_1_C= $form_data->guest_bathrooms_7_4_1_C_cm; }
	if(($form_data->guest_bathrooms_7_4_1_D_cm) == ''){ $guest_bathrooms_7_4_1_D = $form_data->guest_bathrooms_7_4_1_D; }else{ $guest_bathrooms_7_4_1_D= $form_data->guest_bathrooms_7_4_1_D_cm; }
	if(($form_data->guest_bathrooms_7_4_1_E_cm) == ''){ $guest_bathrooms_7_4_1_E = $form_data->guest_bathrooms_7_4_1_E; }else{ $guest_bathrooms_7_4_1_E= $form_data->guest_bathrooms_7_4_1_E_cm; }
	if(($form_data->guest_bathrooms_7_4_1_F_cm) == ''){ $guest_bathrooms_7_4_1_F = $form_data->guest_bathrooms_7_4_1_F; }else{ $guest_bathrooms_7_4_1_F= $form_data->guest_bathrooms_7_4_1_F_cm; }
	
	$guest_bathrooms_7_5_1_text = $form_data->guest_bathrooms_7_5_1_text;
	if(($form_data->guest_bathrooms_7_5_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_7_5_1_A_a == ''){ $guest_bathrooms_7_5_1_A_a = ''; }else{ $guest_bathrooms_7_5_1_A_a = 2; } }else{ $guest_bathrooms_7_5_1_A_a= $form_data->guest_bathrooms_7_5_1_A_a_cm; }
	if(($form_data->guest_bathrooms_7_5_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_7_5_1_A_b == ''){ $guest_bathrooms_7_5_1_A_b = ''; }else{ $guest_bathrooms_7_5_1_A_b = 2; } }else{ $guest_bathrooms_7_5_1_A_b= $form_data->guest_bathrooms_7_5_1_A_b_cm; }
	if(($form_data->guest_bathrooms_7_5_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_7_5_1_A_c == ''){ $guest_bathrooms_7_5_1_A_c = ''; }else{ $guest_bathrooms_7_5_1_A_c = 2; } }else{ $guest_bathrooms_7_5_1_A_c= $form_data->guest_bathrooms_7_5_1_A_c_cm; }
	if(($form_data->guest_bathrooms_7_5_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_7_5_1_A_d == ''){ $guest_bathrooms_7_5_1_A_d = ''; }else{ $guest_bathrooms_7_5_1_A_d = 2; } }else{ $guest_bathrooms_7_5_1_A_d= $form_data->guest_bathrooms_7_5_1_A_d_cm; }
	if(($form_data->guest_bathrooms_7_5_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_7_5_1_A_e == ''){ $guest_bathrooms_7_5_1_A_e = ''; }else{ $guest_bathrooms_7_5_1_A_e = 2; } }else{ $guest_bathrooms_7_5_1_A_e= $form_data->guest_bathrooms_7_5_1_A_e_cm; }
	if(($form_data->guest_bathrooms_7_5_1_B_cm) == ''){ $guest_bathrooms_7_5_1_B = $form_data->guest_bathrooms_7_5_1_B; }else{ $guest_bathrooms_7_5_1_B= $form_data->guest_bathrooms_7_5_1_B_cm; }
	if(($form_data->guest_bathrooms_7_5_1_C_cm) == ''){ $guest_bathrooms_7_5_1_C = $form_data->guest_bathrooms_7_5_1_C; }else{ $guest_bathrooms_7_5_1_C= $form_data->guest_bathrooms_7_5_1_C_cm; }
	if(($form_data->guest_bathrooms_7_5_1_D_cm) == ''){ $guest_bathrooms_7_5_1_D = $form_data->guest_bathrooms_7_5_1_D; }else{ $guest_bathrooms_7_5_1_D= $form_data->guest_bathrooms_7_5_1_D_cm; }
	if(($form_data->guest_bathrooms_7_5_1_E_cm) == ''){ $guest_bathrooms_7_5_1_E = $form_data->guest_bathrooms_7_5_1_E; }else{ $guest_bathrooms_7_5_1_E= $form_data->guest_bathrooms_7_5_1_E_cm; }
	if(($form_data->guest_bathrooms_7_5_1_F_cm) == ''){ $guest_bathrooms_7_5_1_F = $form_data->guest_bathrooms_7_5_1_F; }else{ $guest_bathrooms_7_5_1_F= $form_data->guest_bathrooms_7_5_1_F_cm; }
	
	$guest_bathrooms_7_6_1_text = $form_data->guest_bathrooms_7_6_1_text;
	if(($form_data->guest_bathrooms_7_6_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_a == ''){ $guest_bathrooms_7_6_1_A_a = ''; }else{ $guest_bathrooms_7_6_1_A_a = 3; } }else{ $guest_bathrooms_7_6_1_A_a= $form_data->guest_bathrooms_7_6_1_A_a_cm; }
	if(($form_data->guest_bathrooms_7_6_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_b == ''){ $guest_bathrooms_7_6_1_A_b = ''; }else{ $guest_bathrooms_7_6_1_A_b = 5; } }else{ $guest_bathrooms_7_6_1_A_b= $form_data->guest_bathrooms_7_6_1_A_b_cm; }
	if(($form_data->guest_bathrooms_7_6_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_c == ''){ $guest_bathrooms_7_6_1_A_c = ''; }else{ $guest_bathrooms_7_6_1_A_c = 3; } }else{ $guest_bathrooms_7_6_1_A_c= $form_data->guest_bathrooms_7_6_1_A_c_cm; }
	if(($form_data->guest_bathrooms_7_6_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_d == ''){ $guest_bathrooms_7_6_1_A_d = ''; }else{ $guest_bathrooms_7_6_1_A_d = 3; } }else{ $guest_bathrooms_7_6_1_A_d= $form_data->guest_bathrooms_7_6_1_A_d_cm; }
	if(($form_data->guest_bathrooms_7_6_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_e == ''){ $guest_bathrooms_7_6_1_A_e = ''; }else{ $guest_bathrooms_7_6_1_A_e = 3; } }else{ $guest_bathrooms_7_6_1_A_e= $form_data->guest_bathrooms_7_6_1_A_e_cm; }
	if(($form_data->guest_bathrooms_7_6_1_A_f_cm) == ''){ if($form_data->guest_bathrooms_7_6_1_A_f == ''){ $guest_bathrooms_7_6_1_A_f = ''; }else{ $guest_bathrooms_7_6_1_A_f = 3; } }else{ $guest_bathrooms_7_6_1_A_f= $form_data->guest_bathrooms_7_6_1_A_f_cm; }
	if(($form_data->guest_bathrooms_7_6_1_B_cm) == ''){ $guest_bathrooms_7_6_1_B = $form_data->guest_bathrooms_7_6_1_B; }else{ $guest_bathrooms_7_6_1_B= $form_data->guest_bathrooms_7_6_1_B_cm; }
	if(($form_data->guest_bathrooms_7_6_1_C_cm) == ''){ $guest_bathrooms_7_6_1_C = $form_data->guest_bathrooms_7_6_1_C; }else{ $guest_bathrooms_7_6_1_C= $form_data->guest_bathrooms_7_6_1_C_cm; }
	
	$guest_bathrooms_7_7_1_text = $form_data->guest_bathrooms_7_7_1_text;
	if(($form_data->guest_bathrooms_7_7_1_A_cm) == ''){ $guest_bathrooms_7_7_1_A = $form_data->guest_bathrooms_7_7_1_A; }else{ $guest_bathrooms_7_7_1_A= $form_data->guest_bathrooms_7_7_1_A_cm; }
	if(($form_data->guest_bathrooms_7_7_1_B_cm) == ''){ $guest_bathrooms_7_7_1_B = $form_data->guest_bathrooms_7_7_1_B; }else{ $guest_bathrooms_7_7_1_B= $form_data->guest_bathrooms_7_7_1_B_cm; }
	
	$hygiene_and_sanitation_8_1_1_text = $form_data->hygiene_and_sanitation_8_1_1_text;
	if(($form_data->hygiene_and_sanitation_8_1_1_A_cm) == ''){ $hygiene_and_sanitation_8_1_1_A = $form_data->hygiene_and_sanitation_8_1_1_A; }else{ $hygiene_and_sanitation_8_1_1_A= $form_data->hygiene_and_sanitation_8_1_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_8_1_1_B_cm) == ''){ $hygiene_and_sanitation_8_1_1_B = $form_data->hygiene_and_sanitation_8_1_1_B; }else{ $hygiene_and_sanitation_8_1_1_B= $form_data->hygiene_and_sanitation_8_1_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_8_1_1_C_cm) == ''){ $hygiene_and_sanitation_8_1_1_C = $form_data->hygiene_and_sanitation_8_1_1_C; }else{ $hygiene_and_sanitation_8_1_1_C= $form_data->hygiene_and_sanitation_8_1_1_C_cm; }
	if(($form_data->hygiene_and_sanitation_8_1_1_D_cm) == ''){ $hygiene_and_sanitation_8_1_1_D = $form_data->hygiene_and_sanitation_8_1_1_D; }else{ $hygiene_and_sanitation_8_1_1_D= $form_data->hygiene_and_sanitation_8_1_1_D_cm; }
	if(($form_data->hygiene_and_sanitation_8_1_1_E_cm) == ''){ $hygiene_and_sanitation_8_1_1_E = $form_data->hygiene_and_sanitation_8_1_1_E; }else{ $hygiene_and_sanitation_8_1_1_E= $form_data->hygiene_and_sanitation_8_1_1_E_cm; }
	if(($form_data->hygiene_and_sanitation_8_1_1_F_cm) == ''){ $hygiene_and_sanitation_8_1_1_F = $form_data->hygiene_and_sanitation_8_1_1_F; }else{ $hygiene_and_sanitation_8_1_1_F= $form_data->hygiene_and_sanitation_8_1_1_F_cm; }
	
	$hygiene_and_sanitation_8_2_1_text = $form_data->hygiene_and_sanitation_8_2_1_text;
	if(($form_data->hygiene_and_sanitation_8_2_1_A_cm) == ''){ $hygiene_and_sanitation_8_2_1_A = $form_data->hygiene_and_sanitation_8_2_1_A; }else{ $hygiene_and_sanitation_8_2_1_A= $form_data->hygiene_and_sanitation_8_2_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_8_2_1_B_cm) == ''){ $hygiene_and_sanitation_8_2_1_B = $form_data->hygiene_and_sanitation_8_2_1_B; }else{ $hygiene_and_sanitation_8_2_1_B= $form_data->hygiene_and_sanitation_8_2_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_8_2_1_C_cm) == ''){ $hygiene_and_sanitation_8_2_1_C = $form_data->hygiene_and_sanitation_8_2_1_C; }else{ $hygiene_and_sanitation_8_2_1_C= $form_data->hygiene_and_sanitation_8_2_1_C_cm; }
	
	$hygiene_and_sanitation_8_3_1_text = $form_data->hygiene_and_sanitation_8_3_1_text;
	if(($form_data->hygiene_and_sanitation_8_3_1_A_cm) == ''){ $hygiene_and_sanitation_8_3_1_A = $form_data->hygiene_and_sanitation_8_3_1_A; }else{ $hygiene_and_sanitation_8_3_1_A= $form_data->hygiene_and_sanitation_8_3_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_8_3_1_B_cm) == ''){ $hygiene_and_sanitation_8_3_1_B = $form_data->hygiene_and_sanitation_8_3_1_B; }else{ $hygiene_and_sanitation_8_3_1_B= $form_data->hygiene_and_sanitation_8_3_1_B_cm; }
	
	$hygiene_and_sanitation_8_4_1_text = $form_data->hygiene_and_sanitation_8_4_1_text;
	if(($form_data->hygiene_and_sanitation_8_4_1_A_cm) == ''){ $hygiene_and_sanitation_8_4_1_A = $form_data->hygiene_and_sanitation_8_4_1_A; }else{ $hygiene_and_sanitation_8_4_1_A= $form_data->hygiene_and_sanitation_8_4_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_8_4_1_B_a_cm) == ''){ if($form_data->hygiene_and_sanitation_8_4_1_B_a == ''){ $hygiene_and_sanitation_8_4_1_B_a = ''; }else{ $hygiene_and_sanitation_8_4_1_B_a = 3; } }else{ $hygiene_and_sanitation_8_4_1_B_a= $form_data->hygiene_and_sanitation_8_4_1_B_a_cm; }
	if(($form_data->hygiene_and_sanitation_8_4_1_B_b_cm) == ''){ if($form_data->hygiene_and_sanitation_8_4_1_B_b == ''){ $hygiene_and_sanitation_8_4_1_B_b = ''; }else{ $hygiene_and_sanitation_8_4_1_B_b = 5; } }else{ $hygiene_and_sanitation_8_4_1_B_b= $form_data->hygiene_and_sanitation_8_4_1_B_b_cm; }
	if(($form_data->hygiene_and_sanitation_8_4_1_C_cm) == ''){ $hygiene_and_sanitation_8_4_1_C = $form_data->hygiene_and_sanitation_8_4_1_C; }else{ $hygiene_and_sanitation_8_4_1_C= $form_data->hygiene_and_sanitation_8_4_1_C_cm; }
	$hygiene_and_sanitation_8_5_1_text = $form_data->hygiene_and_sanitation_8_5_1_text;
	if(($form_data->hygiene_and_sanitation_8_5_1_A_cm) == ''){ $hygiene_and_sanitation_8_5_1_A = $form_data->hygiene_and_sanitation_8_5_1_A; }else{ $hygiene_and_sanitation_8_5_1_A= $form_data->hygiene_and_sanitation_8_5_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_8_5_1_B_cm) == ''){ $hygiene_and_sanitation_8_5_1_B = $form_data->hygiene_and_sanitation_8_5_1_B; }else{ $hygiene_and_sanitation_8_5_1_B= $form_data->hygiene_and_sanitation_8_5_1_B_cm; }
	
	$safety_and_security_9_1_1_text = $form_data->safety_and_security_9_1_1_text;
	if(($form_data->safety_and_security_9_1_1_A_cm) == ''){ $safety_and_security_9_1_1_A = $form_data->safety_and_security_9_1_1_A; }else{ $safety_and_security_9_1_1_A= $form_data->safety_and_security_9_1_1_A_cm; }
	if(($form_data->safety_and_security_9_1_1_B_cm) == ''){ $safety_and_security_9_1_1_B = $form_data->safety_and_security_9_1_1_B; }else{ $safety_and_security_9_1_1_B= $form_data->safety_and_security_9_1_1_B_cm; }
	if(($form_data->safety_and_security_9_1_1_C_cm) == ''){ $safety_and_security_9_1_1_C = $form_data->safety_and_security_9_1_1_C; }else{ $safety_and_security_9_1_1_C= $form_data->safety_and_security_9_1_1_C_cm; }
	if(($form_data->safety_and_security_9_1_1_D_cm) == ''){ $safety_and_security_9_1_1_D = $form_data->safety_and_security_9_1_1_D; }else{ $safety_and_security_9_1_1_D= $form_data->safety_and_security_9_1_1_D_cm; }
	if(($form_data->safety_and_security_9_1_1_E_a_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_a == ''){ $safety_and_security_9_1_1_E_a = ''; }else{ $safety_and_security_9_1_1_E_a = 2; } }else{ $safety_and_security_9_1_1_E_a= $form_data->safety_and_security_9_1_1_E_a_cm; }
	if(($form_data->safety_and_security_9_1_1_E_b_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_b == ''){ $safety_and_security_9_1_1_E_b = ''; }else{ $safety_and_security_9_1_1_E_b = 1; } }else{ $safety_and_security_9_1_1_E_b= $form_data->safety_and_security_9_1_1_E_b_cm; }
	if(($form_data->safety_and_security_9_1_1_E_c_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_c == ''){ $safety_and_security_9_1_1_E_c = ''; }else{ $safety_and_security_9_1_1_E_c = 2; } }else{ $safety_and_security_9_1_1_E_c= $form_data->safety_and_security_9_1_1_E_c_cm; }
	if(($form_data->safety_and_security_9_1_1_E_d_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_d == ''){ $safety_and_security_9_1_1_E_d = ''; }else{ $safety_and_security_9_1_1_E_d = 1; } }else{ $safety_and_security_9_1_1_E_d= $form_data->safety_and_security_9_1_1_E_d_cm; }
	if(($form_data->safety_and_security_9_1_1_E_e_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_e == ''){ $safety_and_security_9_1_1_E_e = ''; }else{ $safety_and_security_9_1_1_E_e = 1; } }else{ $safety_and_security_9_1_1_E_e= $form_data->safety_and_security_9_1_1_E_e_cm; }
	if(($form_data->safety_and_security_9_1_1_E_f_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_f == ''){ $safety_and_security_9_1_1_E_f = ''; }else{ $safety_and_security_9_1_1_E_f = 2; } }else{ $safety_and_security_9_1_1_E_f= $form_data->safety_and_security_9_1_1_E_f_cm; }
	if(($form_data->safety_and_security_9_1_1_E_g_cm) == ''){ if($form_data->safety_and_security_9_1_1_E_g == ''){ $safety_and_security_9_1_1_E_g = ''; }else{ $safety_and_security_9_1_1_E_g = 2; } }else{ $safety_and_security_9_1_1_E_g= $form_data->safety_and_security_9_1_1_E_g_cm; }
	if(($form_data->safety_and_security_9_1_1_F_cm) == ''){ $safety_and_security_9_1_1_F = $form_data->safety_and_security_9_1_1_F; }else{ $safety_and_security_9_1_1_F= $form_data->safety_and_security_9_1_1_F_cm; }
	if(($form_data->safety_and_security_9_1_1_G_cm) == ''){ $safety_and_security_9_1_1_G = $form_data->safety_and_security_9_1_1_G; }else{ $safety_and_security_9_1_1_G= $form_data->safety_and_security_9_1_1_G_cm; }
	if(($form_data->safety_and_security_9_1_1_H_cm) == ''){ $safety_and_security_9_1_1_H = $form_data->safety_and_security_9_1_1_H; }else{ $safety_and_security_9_1_1_H= $form_data->safety_and_security_9_1_1_H_cm; }
	if(($form_data->safety_and_security_9_1_1_I_cm) == ''){ $safety_and_security_9_1_1_I = $form_data->safety_and_security_9_1_1_I; }else{ $safety_and_security_9_1_1_I= $form_data->safety_and_security_9_1_1_I_cm; }
	
	$safety_and_security_9_2_1_text = $form_data->safety_and_security_9_2_1_text;
	if(($form_data->safety_and_security_9_2_1_A_cm) == ''){ $safety_and_security_9_2_1_A = $form_data->safety_and_security_9_2_1_A; }else{ $safety_and_security_9_2_1_A= $form_data->safety_and_security_9_2_1_A_cm; }
	if(($form_data->safety_and_security_9_2_1_B_cm) == ''){ $safety_and_security_9_2_1_B = $form_data->safety_and_security_9_2_1_B; }else{ $safety_and_security_9_2_1_B= $form_data->safety_and_security_9_2_1_B_cm; }
	
	$safety_and_security_9_3_1_text = $form_data->safety_and_security_9_3_1_text;
	if(($form_data->safety_and_security_9_3_1_A_cm) == ''){ $safety_and_security_9_3_1_A = $form_data->safety_and_security_9_3_1_A; }else{ $safety_and_security_9_3_1_A= $form_data->safety_and_security_9_3_1_A_cm; }
	if(($form_data->safety_and_security_9_3_1_B_cm) == ''){ $safety_and_security_9_3_1_B = $form_data->safety_and_security_9_3_1_B; }else{ $safety_and_security_9_3_1_B= $form_data->safety_and_security_9_3_1_B_cm; }
	if(($form_data->safety_and_security_9_3_1_C_cm) == ''){ $safety_and_security_9_3_1_C = $form_data->safety_and_security_9_3_1_C; }else{ $safety_and_security_9_3_1_C= $form_data->safety_and_security_9_3_1_C_cm; }
	
	$safety_and_security_9_4_1_text = $form_data->safety_and_security_9_4_1_text;
	if(($form_data->safety_and_security_9_4_1_A_cm) == ''){ $safety_and_security_9_4_1_A = $form_data->safety_and_security_9_4_1_A; }else{ $safety_and_security_9_4_1_A= $form_data->safety_and_security_9_4_1_A_cm; }
	if(($form_data->safety_and_security_9_4_1_B_cm) == ''){ $safety_and_security_9_4_1_B = $form_data->safety_and_security_9_4_1_B; }else{ $safety_and_security_9_4_1_B= $form_data->safety_and_security_9_4_1_B_cm; }
	if(($form_data->safety_and_security_9_4_1_C_cm) == ''){ $safety_and_security_9_4_1_C = $form_data->safety_and_security_9_4_1_C; }else{ $safety_and_security_9_4_1_C= $form_data->safety_and_security_9_4_1_C_cm; }
	if(($form_data->safety_and_security_9_4_1_D_cm) == ''){ $safety_and_security_9_4_1_D = $form_data->safety_and_security_9_4_1_D; }else{ $safety_and_security_9_4_1_D= $form_data->safety_and_security_9_4_1_D_cm; }
	if(($form_data->safety_and_security_9_4_1_E_cm) == ''){ $safety_and_security_9_4_1_E = $form_data->safety_and_security_9_4_1_E; }else{ $safety_and_security_9_4_1_E= $form_data->safety_and_security_9_4_1_E_cm; }
	if(($form_data->safety_and_security_9_4_1_F_cm) == ''){ $safety_and_security_9_4_1_F = $form_data->safety_and_security_9_4_1_F; }else{ $safety_and_security_9_4_1_F= $form_data->safety_and_security_9_4_1_F_cm; }
	if(($form_data->safety_and_security_9_4_1_G_cm) == ''){ $safety_and_security_9_4_1_G = $form_data->safety_and_security_9_4_1_G; }else{ $safety_and_security_9_4_1_G= $form_data->safety_and_security_9_4_1_G_cm; }
	if(($form_data->safety_and_security_9_4_1_H_cm) == ''){ $safety_and_security_9_4_1_H = $form_data->safety_and_security_9_4_1_H; }else{ $safety_and_security_9_4_1_H= $form_data->safety_and_security_9_4_1_H_cm; }
	
	$safety_and_security_9_5_1_text = $form_data->safety_and_security_9_5_1_text;
	if(($form_data->safety_and_security_9_5_1_A_cm) == ''){ $safety_and_security_9_5_1_A = $form_data->safety_and_security_9_5_1_A; }else{ $safety_and_security_9_5_1_A= $form_data->safety_and_security_9_5_1_A_cm; }
	if(($form_data->safety_and_security_9_5_1_B_cm) == ''){ $safety_and_security_9_5_1_B = $form_data->safety_and_security_9_5_1_B; }else{ $safety_and_security_9_5_1_B= $form_data->safety_and_security_9_5_1_B_cm; }
	if(($form_data->safety_and_security_9_5_1_C_cm) == ''){ $safety_and_security_9_5_1_C = $form_data->safety_and_security_9_5_1_C; }else{ $safety_and_security_9_5_1_C= $form_data->safety_and_security_9_5_1_C_cm; }
	if(($form_data->safety_and_security_9_5_1_D_cm) == ''){ $safety_and_security_9_5_1_D = $form_data->safety_and_security_9_5_1_D; }else{ $safety_and_security_9_5_1_D= $form_data->safety_and_security_9_5_1_D_cm; }
	if(($form_data->safety_and_security_9_5_1_E_cm) == ''){ $safety_and_security_9_5_1_E = $form_data->safety_and_security_9_5_1_E; }else{ $safety_and_security_9_5_1_E= $form_data->safety_and_security_9_5_1_E_cm; }
	
	$safety_and_security_9_6_1_text = $form_data->safety_and_security_9_6_1_text;
	if(($form_data->safety_and_security_9_6_1_A_cm) == ''){ $safety_and_security_9_6_1_A = $form_data->safety_and_security_9_6_1_A; }else{ $safety_and_security_9_6_1_A= $form_data->safety_and_security_9_6_1_A_cm; }
	if(($form_data->safety_and_security_9_6_1_B_cm) == ''){ $safety_and_security_9_6_1_B = $form_data->safety_and_security_9_6_1_B; }else{ $safety_and_security_9_6_1_B= $form_data->safety_and_security_9_6_1_B_cm; }
	if(($form_data->safety_and_security_9_6_1_C_cm) == ''){ $safety_and_security_9_6_1_C = $form_data->safety_and_security_9_6_1_C; }else{ $safety_and_security_9_6_1_C= $form_data->safety_and_security_9_6_1_C_cm; }
	
	$sundry_services_10_1_1_text = $form_data->sundry_services_10_1_1_text;
	if(($form_data->sundry_services_10_1_1_A_cm) == ''){ $sundry_services_10_1_1_A = $form_data->sundry_services_10_1_1_A; }else{ $sundry_services_10_1_1_A= $form_data->sundry_services_10_1_1_A_cm; }
	if(($form_data->sundry_services_10_1_1_B_cm) == ''){ $sundry_services_10_1_1_B = $form_data->sundry_services_10_1_1_B; }else{ $sundry_services_10_1_1_B= $form_data->sundry_services_10_1_1_B_cm; }
	if(($form_data->sundry_services_10_1_1_C_cm) == ''){ $sundry_services_10_1_1_C = $form_data->sundry_services_10_1_1_C; }else{ $sundry_services_10_1_1_C= $form_data->sundry_services_10_1_1_C_cm; }
	if(($form_data->sundry_services_10_1_1_D_cm) == ''){ $sundry_services_10_1_1_D = $form_data->sundry_services_10_1_1_D; }else{ $sundry_services_10_1_1_D= $form_data->sundry_services_10_1_1_D_cm; }
	
	$sundry_services_10_2_1_text = $form_data->sundry_services_10_2_1_text;
	if(($form_data->sundry_services_10_2_1_A_cm) == ''){ $sundry_services_10_2_1_A = $form_data->sundry_services_10_2_1_A; }else{ $sundry_services_10_2_1_A= $form_data->sundry_services_10_2_1_A_cm; }
	
	$sundry_services_10_3_1_text = $form_data->sundry_services_10_3_1_text;
	if(($form_data->sundry_services_10_3_1_A_cm) == ''){ $sundry_services_10_3_1_A = $form_data->sundry_services_10_3_1_A; }else{ $sundry_services_10_3_1_A= $form_data->sundry_services_10_3_1_A_cm; }
	
	$sundry_services_10_4_1_text = $form_data->sundry_services_10_4_1_text;
	if(($form_data->sundry_services_10_4_1_A_cm) == ''){ $sundry_services_10_4_1_A = $form_data->sundry_services_10_4_1_A; }else{ $sundry_services_10_4_1_A= $form_data->sundry_services_10_4_1_A_cm; }
	if(($form_data->sundry_services_10_4_1_B_cm) == ''){ $sundry_services_10_4_1_B = $form_data->sundry_services_10_4_1_B; }else{ $sundry_services_10_4_1_B= $form_data->sundry_services_10_4_1_B_cm; }
	if(($form_data->sundry_services_10_4_1_C_cm) == ''){ $sundry_services_10_4_1_C = $form_data->sundry_services_10_4_1_C; }else{ $sundry_services_10_4_1_C= $form_data->sundry_services_10_4_1_C_cm; }
	if(($form_data->sundry_services_10_4_1_D_cm) == ''){ $sundry_services_10_4_1_D = $form_data->sundry_services_10_4_1_D; }else{ $sundry_services_10_4_1_D= $form_data->sundry_services_10_4_1_D_cm; }
	
	$human_resources_11_1_1_text = $form_data->human_resources_11_1_1_text;
	if(($form_data->human_resources_11_1_1_A_cm) == ''){ $human_resources_11_1_1_A = $form_data->human_resources_11_1_1_A; }else{ $human_resources_11_1_1_A= $form_data->human_resources_11_1_1_A_cm; }
	if(($form_data->human_resources_11_1_1_B_cm) == ''){ $human_resources_11_1_1_B = $form_data->human_resources_11_1_1_B; }else{ $human_resources_11_1_1_B= $form_data->human_resources_11_1_1_B_cm; }
	if(($form_data->human_resources_11_1_1_C_cm) == ''){ $human_resources_11_1_1_C = $form_data->human_resources_11_1_1_C; }else{ $human_resources_11_1_1_C= $form_data->human_resources_11_1_1_C_cm; }
	if(($form_data->human_resources_11_1_1_D_cm) == ''){ $human_resources_11_1_1_D = $form_data->human_resources_11_1_1_D; }else{ $human_resources_11_1_1_D= $form_data->human_resources_11_1_1_D_cm; }
	if(($form_data->human_resources_11_1_1_E_a_cm) == ''){ if($form_data->human_resources_11_1_1_E_a == ''){ $human_resources_11_1_1_E_a = ''; }else{ $human_resources_11_1_1_E_a = 2; } }else{ $human_resources_11_1_1_E_a= $form_data->human_resources_11_1_1_E_a_cm; }
	if(($form_data->human_resources_11_1_1_E_b_cm) == ''){ if($form_data->human_resources_11_1_1_E_b == ''){ $human_resources_11_1_1_E_b = ''; }else{ $human_resources_11_1_1_E_b = 2; } }else{ $human_resources_11_1_1_E_b= $form_data->human_resources_11_1_1_E_b_cm; }
	if(($form_data->human_resources_11_1_1_E_c_cm) == ''){ if($form_data->human_resources_11_1_1_E_c == ''){ $human_resources_11_1_1_E_c = ''; }else{ $human_resources_11_1_1_E_c = 2; } }else{ $human_resources_11_1_1_E_c= $form_data->human_resources_11_1_1_E_c_cm; }
	if(($form_data->human_resources_11_1_1_E_d_cm) == ''){ if($form_data->human_resources_11_1_1_E_d == ''){ $human_resources_11_1_1_E_d = ''; }else{ $human_resources_11_1_1_E_d = 2; } }else{ $human_resources_11_1_1_E_d= $form_data->human_resources_11_1_1_E_d_cm; }
	if(($form_data->human_resources_11_1_1_E_e_cm) == ''){ if($form_data->human_resources_11_1_1_E_e == ''){ $human_resources_11_1_1_E_e = ''; }else{ $human_resources_11_1_1_E_e = 2; } }else{ $human_resources_11_1_1_E_e= $form_data->human_resources_11_1_1_E_e_cm; }
	
	$human_resources_11_2_1_text = $form_data->human_resources_11_2_1_text;
	if(($form_data->human_resources_11_2_1_A_cm) == ''){ $human_resources_11_2_1_A = $form_data->human_resources_11_2_1_A; }else{ $human_resources_11_2_1_A= $form_data->human_resources_11_2_1_A_cm; }
	if(($form_data->human_resources_11_2_1_B_cm) == ''){ $human_resources_11_2_1_B = $form_data->human_resources_11_2_1_B; }else{ $human_resources_11_2_1_B= $form_data->human_resources_11_2_1_B_cm; }
	
	$human_resources_11_3_1_text = $form_data->human_resources_11_3_1_text;
	if(($form_data->human_resources_11_3_1_A_a_cm) == ''){ if($form_data->human_resources_11_3_1_A_a == ''){ $human_resources_11_3_1_A_a = ''; }else{ $human_resources_11_3_1_A_a = 4; } }else{ $human_resources_11_3_1_A_a= $form_data->human_resources_11_3_1_A_a_cm; }
	if(($form_data->human_resources_11_3_1_A_b_cm) == ''){ if($form_data->human_resources_11_3_1_A_b == ''){ $human_resources_11_3_1_A_b = ''; }else{ $human_resources_11_3_1_A_b = 4; } }else{ $human_resources_11_3_1_A_b= $form_data->human_resources_11_3_1_A_b_cm; }
	if(($form_data->human_resources_11_3_1_A_c_cm) == ''){ if($form_data->human_resources_11_3_1_A_c == ''){ $human_resources_11_3_1_A_c = ''; }else{ $human_resources_11_3_1_A_c = 4; } }else{ $human_resources_11_3_1_A_c= $form_data->human_resources_11_3_1_A_c_cm; }
	if(($form_data->human_resources_11_3_1_B_a_cm) == ''){ if($form_data->human_resources_11_3_1_B_a == ''){ $human_resources_11_3_1_B_a = ''; }else{ $human_resources_11_3_1_B_a = 4; } }else{ $human_resources_11_3_1_B_a= $form_data->human_resources_11_3_1_B_a_cm; }
	if(($form_data->human_resources_11_3_1_B_b_cm) == ''){ if($form_data->human_resources_11_3_1_B_b == ''){ $human_resources_11_3_1_B_b = ''; }else{ $human_resources_11_3_1_B_b = 4; } }else{ $human_resources_11_3_1_B_b= $form_data->human_resources_11_3_1_B_b_cm; }
	if(($form_data->human_resources_11_3_1_B_c_cm) == ''){ if($form_data->human_resources_11_3_1_B_c == ''){ $human_resources_11_3_1_B_c = ''; }else{ $human_resources_11_3_1_B_c = 4; } }else{ $human_resources_11_3_1_B_c= $form_data->human_resources_11_3_1_B_c_cm; }
	if(($form_data->human_resources_11_3_1_C_a_cm) == ''){ if($form_data->human_resources_11_3_1_C_a == ''){ $human_resources_11_3_1_C_a = ''; }else{ $human_resources_11_3_1_C_a = 5; } }else{ $human_resources_11_3_1_C_a= $form_data->human_resources_11_3_1_C_a_cm; }
	if(($form_data->human_resources_11_3_1_C_b_cm) == ''){ if($form_data->human_resources_11_3_1_C_b == ''){ $human_resources_11_3_1_C_b = ''; }else{ $human_resources_11_3_1_C_b = 5; } }else{ $human_resources_11_3_1_C_b= $form_data->human_resources_11_3_1_C_b_cm; }
	if(($form_data->human_resources_11_3_1_C_c_cm) == ''){ if($form_data->human_resources_11_3_1_C_c == ''){ $human_resources_11_3_1_C_c = ''; }else{ $human_resources_11_3_1_C_c = 6; } }else{ $human_resources_11_3_1_C_c= $form_data->human_resources_11_3_1_C_c_cm; }

	
	$human_resources_11_4_1_text = $form_data->human_resources_11_4_1_text;
	if(($form_data->human_resources_11_4_1_A_cm) == ''){ $human_resources_11_4_1_A = $form_data->human_resources_11_4_1_A; }else{ $human_resources_11_4_1_A= $form_data->human_resources_11_4_1_A_cm; }
	
	$human_resources_11_5_1_text = $form_data->human_resources_11_5_1_text;
	if(($form_data->human_resources_11_5_1_A_cm) == ''){ $human_resources_11_5_1_A = $form_data->human_resources_11_5_1_A; }else{ $human_resources_11_5_1_A= $form_data->human_resources_11_5_1_A_cm; }
	if(($form_data->human_resources_11_5_1_B_cm) == ''){ $human_resources_11_5_1_B = $form_data->human_resources_11_5_1_B; }else{ $human_resources_11_5_1_B= $form_data->human_resources_11_5_1_B_cm; }
	if(($form_data->human_resources_11_5_1_C_cm) == ''){ $human_resources_11_5_1_C = $form_data->human_resources_11_5_1_C; }else{ $human_resources_11_5_1_C= $form_data->human_resources_11_5_1_C_cm; }
	if(($form_data->human_resources_11_5_1_D_cm) == ''){ $human_resources_11_5_1_D = $form_data->human_resources_11_5_1_D; }else{ $human_resources_11_5_1_D= $form_data->human_resources_11_5_1_D_cm; }
	if(($form_data->human_resources_11_5_1_E_cm) == ''){ $human_resources_11_5_1_E = $form_data->human_resources_11_5_1_E; }else{ $human_resources_11_5_1_E= $form_data->human_resources_11_5_1_E_cm; }
	if(($form_data->human_resources_11_5_1_F_cm) == ''){ $human_resources_11_5_1_F = $form_data->human_resources_11_5_1_F; }else{ $human_resources_11_5_1_F= $form_data->human_resources_11_5_1_F_cm; }
	if(($form_data->human_resources_11_5_1_G_cm) == ''){ $human_resources_11_5_1_G = $form_data->human_resources_11_5_1_G; }else{ $human_resources_11_5_1_G= $form_data->human_resources_11_5_1_G_cm; }
	
	$general_12_1_1_text = $form_data->general_12_1_1_text;
	if(($form_data->general_12_1_1_A_cm) == ''){ $general_12_1_1_A = $form_data->general_12_1_1_A; }else{ $general_12_1_1_A= $form_data->general_12_1_1_A_cm; }
	if(($form_data->general_12_1_1_B_cm) == ''){ $general_12_1_1_B = $form_data->general_12_1_1_B; }else{ $general_12_1_1_B= $form_data->general_12_1_1_B_cm; }
	
	$general_12_2_1_text = $form_data->general_12_2_1_text;
	if(($form_data->general_12_2_1_A_cm) == ''){ $general_12_2_1_A = $form_data->general_12_2_1_A; }else{ $general_12_2_1_A= $form_data->general_12_2_1_A_cm; }
	if(($form_data->general_12_2_1_B_cm) == ''){ $general_12_2_1_B = $form_data->general_12_2_1_B; }else{ $general_12_2_1_B= $form_data->general_12_2_1_B_cm; }
	
	$general_12_3_1_text = $form_data->general_12_3_1_text;
	if(($form_data->general_12_3_1_A_cm) == ''){ $general_12_3_1_A = $form_data->general_12_3_1_A; }else{ $general_12_3_1_A= $form_data->general_12_3_1_A_cm; }
	if(($form_data->general_12_3_1_B_cm) == ''){ $general_12_3_1_B = $form_data->general_12_3_1_B; }else{ $general_12_3_1_B= $form_data->general_12_3_1_B_cm; }
	
	$general_12_4_1_text = $form_data->general_12_4_1_text;
	if(($form_data->general_12_4_1_A_cm) == ''){ $general_12_4_1_A = $form_data->general_12_4_1_A; }else{ $general_12_4_1_A= $form_data->general_12_4_1_A_cm; }
	if(($form_data->general_12_4_1_B_cm) == ''){ $general_12_4_1_B = $form_data->general_12_4_1_B; }else{ $general_12_4_1_B= $form_data->general_12_4_1_B_cm; }
	if(($form_data->general_12_4_1_C_cm) == ''){ $general_12_4_1_C = $form_data->general_12_4_1_C; }else{ $general_12_4_1_C= $form_data->general_12_4_1_C_cm; }
	
	$general_12_5_1_text = $form_data->general_12_5_1_text;
	if(($form_data->general_12_5_1_A_cm) == ''){ $general_12_5_1_A = $form_data->general_12_5_1_A; }else{ $general_12_5_1_A= $form_data->general_12_5_1_A_cm; }
	if(($form_data->general_12_5_1_B_cm) == ''){ $general_12_5_1_B = $form_data->general_12_5_1_B; }else{ $general_12_5_1_B= $form_data->general_12_5_1_B_cm; }
	if(($form_data->general_12_5_1_C_cm) == ''){ $general_12_5_1_C = $form_data->general_12_5_1_C; }else{ $general_12_5_1_C= $form_data->general_12_5_1_C_cm; }
	if(($form_data->general_12_5_1_D_a_cm) == ''){ if($form_data->general_12_5_1_D_a == ''){ $general_12_5_1_D_a = ''; }else{ $general_12_5_1_D_a = 2; } }else{ $general_12_5_1_D_a= $form_data->general_12_5_1_D_a_cm; }
	if(($form_data->general_12_5_1_D_b_cm) == ''){ if($form_data->general_12_5_1_D_b == ''){ $general_12_5_1_D_b = ''; }else{ $general_12_5_1_D_b = 2; } }else{ $general_12_5_1_D_b= $form_data->general_12_5_1_D_b_cm; }
	if(($form_data->general_12_5_1_D_c_cm) == ''){ if($form_data->general_12_5_1_D_c == ''){ $general_12_5_1_D_c = ''; }else{ $general_12_5_1_D_c = 2; } }else{ $general_12_5_1_D_c= $form_data->general_12_5_1_D_c_cm; }
	if(($form_data->general_12_5_1_D_d_cm) == ''){ if($form_data->general_12_5_1_D_d == ''){ $general_12_5_1_D_d = ''; }else{ $general_12_5_1_D_d = 2; } }else{ $general_12_5_1_D_d= $form_data->general_12_5_1_D_d_cm; }
	if(($form_data->general_12_5_1_D_e_cm) == ''){ if($form_data->general_12_5_1_D_e == ''){ $general_12_5_1_D_e = ''; }else{ $general_12_5_1_D_e = 2; } }else{ $general_12_5_1_D_e= $form_data->general_12_5_1_D_e_cm; }
	if(($form_data->general_12_5_1_E_cm) == ''){ $general_12_5_1_E = $form_data->general_12_5_1_E; }else{ $general_12_5_1_E= $form_data->general_12_5_1_E_cm; }
	if(($form_data->general_12_5_1_F_cm) == ''){ $general_12_5_1_F = $form_data->general_12_5_1_F; }else{ $general_12_5_1_F= $form_data->general_12_5_1_F_cm; }
	if(($form_data->general_12_5_1_G_cm) == ''){ $general_12_5_1_G = $form_data->general_12_5_1_G; }else{ $general_12_5_1_G= $form_data->general_12_5_1_G_cm; }
	if(($form_data->general_12_5_1_H_cm) == ''){ $general_12_5_1_H = $form_data->general_12_5_1_H; }else{ $general_12_5_1_H= $form_data->general_12_5_1_H_cm; }
	
	$general_12_6_1_text = $form_data->general_12_6_1_text;
	if(($form_data->general_12_6_1_A_cm) == ''){ $general_12_6_1_A = $form_data->general_12_6_1_A; }else{ $general_12_6_1_A= $form_data->general_12_6_1_A_cm; }	
		///Insert
			 if($form_data->action == 'insert_record')
			 {
				$query = "INSERT INTO afcg_assessment_villa (
				assessment_id, facility_id, assessor_category, assessment_score, 
				location_1_1_1_text,
				location_1_1_1_A,
				location_1_1_1_B,
				location_1_1_2_text,
				location_1_1_2_A,
				location_1_1_3_text,
				location_1_1_3_A,
				location_1_1_3_B_a,
				location_1_1_3_B_b,
				location_1_1_3_B_c,
				location_1_1_3_B_d,
				location_1_1_4_text,
				location_1_1_4_A,
				location_1_1_4_B,
				location_1_1_4_C,
				location_1_1_5_text,
				location_1_1_5_A,
				location_1_1_5_B,
				location_1_1_5_C,
				location_1_1_5_D,
				building_2_1_1_text,
				building_2_1_1_A,
				building_2_1_1_B,
				building_2_2_1_text,
				building_2_2_1_A,
				building_2_2_1_B,
				building_2_2_1_C,
				building_2_2_1_D,
				building_2_2_1_E,
				building_2_2_1_F,
				building_2_2_1_G,
				building_2_2_1_H,
				building_2_2_1_I,
				building_2_3_1_text,
				building_2_3_1_A,
				building_2_3_1_B,
				building_2_3_1_C,
				building_2_3_1_D,
				building_2_4_1_text,
				building_2_4_1_A,
				building_2_5_1_text,
				building_2_5_1_A,
				building_2_5_1_B,
				building_2_5_1_C,
				building_2_5_1_D,
				building_2_5_1_E,
				building_2_5_1_F,
				building_2_5_1_G,
				building_2_5_1_H,
				building_2_5_1_I,
				building_2_5_1_J,
				building_2_6_1_text,
				building_2_6_1_A,
				building_2_6_1_B,
				building_2_6_1_C,
				building_2_6_1_D,
				building_2_6_1_E,
				building_2_7_1_text,
				building_2_7_1_A,
				building_2_7_1_B,
				building_2_8_1_text,
				building_2_8_1_A,
				building_2_8_1_B,
				lobby_lounge_other_public_areas_3_1_1_text,
				lobby_lounge_other_public_areas_3_1_1_A,
				lobby_lounge_other_public_areas_3_1_1_B,
				lobby_lounge_other_public_areas_3_1_1_C,
				lobby_lounge_other_public_areas_3_1_1_D,
				lobby_lounge_other_public_areas_3_1_1_E,
				lobby_lounge_other_public_areas_3_2_1_text,
				lobby_lounge_other_public_areas_3_2_1_A,
				lobby_lounge_other_public_areas_3_2_1_B,
				lobby_lounge_other_public_areas_3_2_1_C,
				lobby_lounge_other_public_areas_3_2_1_D_a,
				lobby_lounge_other_public_areas_3_2_1_D_b,
				lobby_lounge_other_public_areas_3_2_1_E,
				lobby_lounge_other_public_areas_3_2_1_F,
				lobby_lounge_other_public_areas_3_2_1_G,
				lobby_lounge_other_public_area_3_3_1_text,
				lobby_lounge_other_public_area_3_3_1_A,
				lobby_lounge_other_public_area_3_3_1_B_a,
				lobby_lounge_other_public_area_3_3_1_B_b,
				lobby_lounge_other_public_area_3_3_1_B_c,
				lobby_lounge_other_public_area_3_3_1_C_a,
				lobby_lounge_other_public_area_3_3_1_C_b,
				lobby_lounge_other_public_area_3_3_1_C_c,
				lobby_lounge_other_public_area_3_3_1_D_a,
				lobby_lounge_other_public_area_3_3_1_D_b,
				lobby_lounge_other_public_area_3_3_1_D_c,
				lobby_lounge_other_public_area_3_3_1_D_d,
				lobby_lounge_other_public_area_3_4_1_text,
				lobby_lounge_other_public_area_3_4_1_A,
				lobby_lounge_other_public_area_3_4_1_B,
				lobby_lounge_other_public_area_3_4_1_C,
				lobby_lounge_other_public_area_3_4_1_D,
				guest_rooms_4_1_1_text,
				guest_rooms_4_1_1_A,
				guest_rooms_4_2_1_text,
				guest_rooms_4_2_1_A_a,
				guest_rooms_4_2_1_A_b,
				guest_rooms_4_2_1_A_c,
				guest_rooms_4_2_1_A_d,
				guest_rooms_4_2_1_A_e,
				guest_rooms_4_2_1_A_f,
				guest_rooms_4_2_1_A_g,
				guest_rooms_4_2_1_A_h,
				guest_rooms_4_2_1_A_i,
				guest_rooms_4_2_1_A_j,
				guest_rooms_4_2_1_A_k,
				guest_rooms_4_2_1_A_l,
				guest_rooms_4_2_1_A_m,
				guest_rooms_4_2_1_B,
				guest_rooms_4_3_1_text,
				guest_rooms_4_3_1_A,
				guest_rooms_4_3_1_B,
				guest_rooms_4_3_1_C,
				guest_rooms_4_3_1_D,
				guest_rooms_4_3_1_E,
				guest_rooms_4_4_1_text,
				guest_rooms_4_4_1_A,
				guest_rooms_4_4_1_B,
				guest_rooms_4_4_1_C,
				guest_rooms_4_4_1_D,
				guest_rooms_4_4_1_E,
				guest_rooms_4_5_1_text,
				guest_rooms_4_5_1_A,
				guest_rooms_4_5_1_B_a,
				guest_rooms_4_5_1_B_b,
				guest_rooms_4_5_1_B_c,
				guest_rooms_4_5_1_B_d,
				guest_rooms_4_5_1_B_e,
				guest_rooms_4_5_1_C,
				guest_rooms_4_5_1_D,
				guest_rooms_4_5_1_E,
				guest_rooms_4_5_1_F,
				kitchen_5_1_1_text,
				kitchen_5_1_1_A,
				kitchen_5_2_1_text,
				kitchen_5_2_1_A,
				kitchen_5_2_1_B,
				kitchen_5_2_1_C,
				kitchen_5_2_1_D,
				kitchen_5_2_1_E,
				kitchen_5_2_1_F,
				kitchen_5_2_1_G,
				kitchen_5_2_1_H,
				kitchen_5_3_1_text,
				kitchen_5_3_1_A_a,
				kitchen_5_3_1_A_b,
				kitchen_5_3_1_A_c,
				kitchen_5_3_1_A_d,
				kitchen_5_3_1_B,
				kitchen_5_3_1_C,
				kitchen_5_3_1_D,
				kitchen_5_3_1_E,
				kitchen_5_3_1_F,
				kitchen_5_3_1_G,
				function_rooms_6_1_1_text,
				function_rooms_6_1_1_A,
				function_rooms_6_2_1_text,
				function_rooms_6_2_1_A,
				function_rooms_6_2_1_B_a,
				function_rooms_6_2_1_B_b,
				function_rooms_6_2_1_B_c,
				function_rooms_6_2_1_B_d,
				function_rooms_6_2_1_B_e,
				function_rooms_6_2_1_B_f,
				function_rooms_6_2_1_C_a,
				function_rooms_6_2_1_C_b,
				function_rooms_6_2_1_D,
				functions_room_6_3_1_text,
				functions_room_6_3_1_A,
				functions_room_6_3_1_A_c,
				functions_room_6_3_1_A_d,
				functions_room_6_3_1_A_e,
				functions_room_6_3_1_A_f,
				functions_room_6_3_1_A_g,
				functions_room_6_3_1_A_h,
				functions_room_6_3_1_A_i,
				functions_room_6_3_1_A_j,
				functions_room_6_3_1_A_k,
				functions_room_6_3_1_A_l,
				functions_room_6_3_1_A_m,
				functions_room_6_3_1_A_n,
				functions_room_6_3_1_A_o,
				functions_room_6_3_1_A_p,
				functions_room_6_3_1_A_q,
				functions_room_6_3_1_B,
				function_rooms_6_4_1_text,
				function_rooms_6_4_1_A,
				function_rooms_6_4_1_B_a,
				function_rooms_6_4_1_B_b,
				function_rooms_6_4_1_B_c,
				function_rooms_6_4_1_B_d,
				function_rooms_6_4_1_C,
				function_rooms_6_4_1_D,
				function_rooms_6_5_1_text,
				function_rooms_6_5_1_A,
				function_rooms_6_5_1_B,
				function_rooms_6_6_1_text,
				function_rooms_6_6_1_A,
				function_rooms_6_6_1_B,
				function_rooms_6_6_1_C,
				function_rooms_6_6_1_D,
				function_rooms_6_6_1_E,
				function_rooms_6_7_1_text,
				function_rooms_6_7_1_A,
				function_rooms_6_7_1_B,
				function_rooms_6_7_1_C,
				function_rooms_6_7_1_D,
				function_rooms_6_7_1_E,
				function_rooms_6_8_1_text,
				function_rooms_6_8_1_A,
				function_rooms_6_8_1_B_a,
				function_rooms_6_8_1_B_b,
				function_rooms_6_8_1_B_c,
				function_rooms_6_8_1_C,
				guest_bathrooms_7_1_1_text,
				guest_bathrooms_7_1_1_A,
				guest_bathrooms_7_1_1_B,
				guest_bathrooms_7_1_1_C,
				guest_bathrooms_7_2_1_text,
				guest_bathrooms_7_2_1_A,
				guest_bathrooms_7_2_1_B,
				guest_bathrooms_7_2_1_C,
				guest_bathrooms_7_2_1_D,
				guest_bathrooms_7_3_1_text,
				guest_bathrooms_7_3_1_A_a,
				guest_bathrooms_7_3_1_A_b,
				guest_bathrooms_7_3_1_A_c,
				guest_bathrooms_7_3_1_A_d,
				guest_bathrooms_7_3_1_A_e,
				guest_bathrooms_7_3_1_A_f,
				guest_bathrooms_7_3_1_A_g,
				guest_bathrooms_7_3_1_A_h,
				guest_bathrooms_7_3_1_A_i,
				guest_bathrooms_7_3_1_A_j,
				guest_bathrooms_7_3_1_A_k,
				guest_bathrooms_7_3_1_A_l,
				guest_bathrooms_7_3_1_A_m,
				guest_bathrooms_7_3_1_A_n,
				guest_bathrooms_7_3_1_A_o,
				guest_bathrooms_7_3_1_A_p,
				guest_bathrooms_7_3_1_A_q,
				guest_bathrooms_7_3_1_A_r,
				guest_bathrooms_7_3_1_A_s,
				guest_bathrooms_7_3_1_A_t,
				guest_bathrooms_7_3_1_A_u,
				guest_bathrooms_7_3_1_A_v,
				guest_bathrooms_7_3_1_B,
				guest_bathrooms_7_3_1_C,
				guest_bathrooms_7_4_1_text,
				guest_bathrooms_7_4_1_A,
				guest_bathrooms_7_4_1_B,
				guest_bathrooms_7_4_1_C,
				guest_bathrooms_7_4_1_D,
				guest_bathrooms_7_4_1_E,
				guest_bathrooms_7_4_1_F,
				guest_bathrooms_7_5_1_text,
				guest_bathrooms_7_5_1_A_a,
				guest_bathrooms_7_5_1_A_b,
				guest_bathrooms_7_5_1_A_c,
				guest_bathrooms_7_5_1_A_d,
				guest_bathrooms_7_5_1_A_e,
				guest_bathrooms_7_5_1_B,
				guest_bathrooms_7_5_1_C,
				guest_bathrooms_7_5_1_D,
				guest_bathrooms_7_5_1_E,
				guest_bathrooms_7_5_1_F,
				guest_bathrooms_7_6_1_text,
				guest_bathrooms_7_6_1_A_a,
				guest_bathrooms_7_6_1_A_b,
				guest_bathrooms_7_6_1_A_c,
				guest_bathrooms_7_6_1_A_d,
				guest_bathrooms_7_6_1_A_e,
				guest_bathrooms_7_6_1_A_f,
				guest_bathrooms_7_6_1_B,
				guest_bathrooms_7_6_1_C,
				guest_bathrooms_7_7_1_text,
				guest_bathrooms_7_7_1_A,
				guest_bathrooms_7_7_1_B,
				hygiene_and_sanitation_8_1_1_text,
				hygiene_and_sanitation_8_1_1_A,
				hygiene_and_sanitation_8_1_1_B,
				hygiene_and_sanitation_8_1_1_C,
				hygiene_and_sanitation_8_1_1_D,
				hygiene_and_sanitation_8_1_1_E,
				hygiene_and_sanitation_8_1_1_F,
				hygiene_and_sanitation_8_2_1_text,
				hygiene_and_sanitation_8_2_1_A,
				hygiene_and_sanitation_8_2_1_B,
				hygiene_and_sanitation_8_2_1_C,
				hygiene_and_sanitation_8_3_1_text,
				hygiene_and_sanitation_8_3_1_A,
				hygiene_and_sanitation_8_3_1_B,
				hygiene_and_sanitation_8_4_1_text,
				hygiene_and_sanitation_8_4_1_A,
				hygiene_and_sanitation_8_4_1_B_a,
				hygiene_and_sanitation_8_4_1_B_b,
				hygiene_and_sanitation_8_4_1_C,
				hygiene_and_sanitation_8_5_1_text,
				hygiene_and_sanitation_8_5_1_A,
				hygiene_and_sanitation_8_5_1_B,
				safety_and_security_9_1_1_text,
				safety_and_security_9_1_1_A,
				safety_and_security_9_1_1_B,
				safety_and_security_9_1_1_C,
				safety_and_security_9_1_1_D,
				safety_and_security_9_1_1_E_a,
				safety_and_security_9_1_1_E_b,
				safety_and_security_9_1_1_E_c,
				safety_and_security_9_1_1_E_d,
				safety_and_security_9_1_1_E_e,
				safety_and_security_9_1_1_E_f,
				safety_and_security_9_1_1_E_g,
				safety_and_security_9_1_1_F,
				safety_and_security_9_1_1_G,
				safety_and_security_9_1_1_H,
				safety_and_security_9_1_1_I,
				safety_and_security_9_2_1_text,
				safety_and_security_9_2_1_A,
				safety_and_security_9_2_1_B,
				safety_and_security_9_3_1_text,
				safety_and_security_9_3_1_A,
				safety_and_security_9_3_1_B,
				safety_and_security_9_3_1_C,
				safety_and_security_9_4_1_text,
				safety_and_security_9_4_1_A,
				safety_and_security_9_4_1_B,
				safety_and_security_9_4_1_C,
				safety_and_security_9_4_1_D,
				safety_and_security_9_4_1_E,
				safety_and_security_9_4_1_F,
				safety_and_security_9_4_1_G,
				safety_and_security_9_4_1_H,
				safety_and_security_9_5_1_text,
				safety_and_security_9_5_1_A,
				safety_and_security_9_5_1_B,
				safety_and_security_9_5_1_C,
				safety_and_security_9_5_1_D,
				safety_and_security_9_5_1_E,
				safety_and_security_9_6_1_text,
				safety_and_security_9_6_1_A,
				safety_and_security_9_6_1_B,
				safety_and_security_9_6_1_C,
				sundry_services_10_1_1_text,
				sundry_services_10_1_1_A,
				sundry_services_10_1_1_B,
				sundry_services_10_1_1_C,
				sundry_services_10_1_1_D,
				sundry_services_10_2_1_text,
				sundry_services_10_2_1_A,
				sundry_services_10_3_1_text,
				sundry_services_10_3_1_A,
				sundry_services_10_4_1_text,
				sundry_services_10_4_1_A,
				sundry_services_10_4_1_B,
				sundry_services_10_4_1_C,
				sundry_services_10_4_1_D,
				human_resources_11_1_1_text,
				human_resources_11_1_1_A,
				human_resources_11_1_1_B,
				human_resources_11_1_1_C,
				human_resources_11_1_1_D,
				human_resources_11_1_1_E_a,
				human_resources_11_1_1_E_b,
				human_resources_11_1_1_E_c,
				human_resources_11_1_1_E_d,
				human_resources_11_1_1_E_e,
				human_resources_11_2_1_text,
				human_resources_11_2_1_A,
				human_resources_11_2_1_B,
				human_resources_11_3_1_text,
				human_resources_11_3_1_A_a,
				human_resources_11_3_1_A_b,
				human_resources_11_3_1_A_c,
				human_resources_11_3_1_B_a,
				human_resources_11_3_1_B_b,
				human_resources_11_3_1_B_c,
				human_resources_11_3_1_C_a,
				human_resources_11_3_1_C_b,
				human_resources_11_3_1_C_c,
				human_resources_11_4_1_text,
				human_resources_11_4_1_A,
				human_resources_11_5_1_text,
				human_resources_11_5_1_A,
				human_resources_11_5_1_B,
				human_resources_11_5_1_C,
				human_resources_11_5_1_D,
				human_resources_11_5_1_E,
				human_resources_11_5_1_F,
				human_resources_11_5_1_G,
				general_12_1_1_text,
				general_12_1_1_A,
				general_12_1_1_B,
				general_12_2_1_text,
				general_12_2_1_A,
				general_12_2_1_B,
				general_12_3_1_text,
				general_12_3_1_A,
				general_12_3_1_B,
				general_12_4_1_text,
				general_12_4_1_A,
				general_12_4_1_B,
				general_12_4_1_C,
				general_12_5_1_text,
				general_12_5_1_A,
				general_12_5_1_B,
				general_12_5_1_C,
				general_12_5_1_D_a,
				general_12_5_1_D_b,
				general_12_5_1_D_c,
				general_12_5_1_D_d,
				general_12_5_1_D_e,
				general_12_5_1_E,
				general_12_5_1_F,
				general_12_5_1_G,
				general_12_5_1_H,
				general_12_6_1_text,
				general_12_6_1_A
				)VALUES(
				'$assessment_id', '$facility_id', '$assessor_category', '$assessment_score', 
				'$location_1_1_1_text',
				'$location_1_1_1_A',
				'$location_1_1_1_B',
				'$location_1_1_2_text',
				'$location_1_1_2_A',
				'$location_1_1_3_text',
				'$location_1_1_3_A',
				'$location_1_1_3_B_a',
				'$location_1_1_3_B_b',
				'$location_1_1_3_B_c',
				'$location_1_1_3_B_d',
				'$location_1_1_4_text',
				'$location_1_1_4_A',
				'$location_1_1_4_B',
				'$location_1_1_4_C',
				'$location_1_1_5_text',
				'$location_1_1_5_A',
				'$location_1_1_5_B',
				'$location_1_1_5_C',
				'$location_1_1_5_D',
				'$building_2_1_1_text',
				'$building_2_1_1_A',
				'$building_2_1_1_B',
				'$building_2_2_1_text',
				'$building_2_2_1_A',
				'$building_2_2_1_B',
				'$building_2_2_1_C',
				'$building_2_2_1_D',
				'$building_2_2_1_E',
				'$building_2_2_1_F',
				'$building_2_2_1_G',
				'$building_2_2_1_H',
				'$building_2_2_1_I',
				'$building_2_3_1_text',
				'$building_2_3_1_A',
				'$building_2_3_1_B',
				'$building_2_3_1_C',
				'$building_2_3_1_D',
				'$building_2_4_1_text',
				'$building_2_4_1_A',
				'$building_2_5_1_text',
				'$building_2_5_1_A',
				'$building_2_5_1_B',
				'$building_2_5_1_C',
				'$building_2_5_1_D',
				'$building_2_5_1_E',
				'$building_2_5_1_F',
				'$building_2_5_1_G',
				'$building_2_5_1_H',
				'$building_2_5_1_I',
				'$building_2_5_1_J',
				'$building_2_6_1_text',
				'$building_2_6_1_A',
				'$building_2_6_1_B',
				'$building_2_6_1_C',
				'$building_2_6_1_D',
				'$building_2_6_1_E',
				'$building_2_7_1_text',
				'$building_2_7_1_A',
				'$building_2_7_1_B',
				'$building_2_8_1_text',
				'$building_2_8_1_A',
				'$building_2_8_1_B',
				'$lobby_lounge_other_public_areas_3_1_1_text',
				'$lobby_lounge_other_public_areas_3_1_1_A',
				'$lobby_lounge_other_public_areas_3_1_1_B',
				'$lobby_lounge_other_public_areas_3_1_1_C',
				'$lobby_lounge_other_public_areas_3_1_1_D',
				'$lobby_lounge_other_public_areas_3_1_1_E',
				'$lobby_lounge_other_public_areas_3_2_1_text',
				'$lobby_lounge_other_public_areas_3_2_1_A',
				'$lobby_lounge_other_public_areas_3_2_1_B',
				'$lobby_lounge_other_public_areas_3_2_1_C',
				'$lobby_lounge_other_public_areas_3_2_1_D_a',
				'$lobby_lounge_other_public_areas_3_2_1_D_b',
				'$lobby_lounge_other_public_areas_3_2_1_E',
				'$lobby_lounge_other_public_areas_3_2_1_F',
				'$lobby_lounge_other_public_areas_3_2_1_G',
				'$lobby_lounge_other_public_area_3_3_1_text',
				'$lobby_lounge_other_public_area_3_3_1_A',
				'$lobby_lounge_other_public_area_3_3_1_B_a',
				'$lobby_lounge_other_public_area_3_3_1_B_b',
				'$lobby_lounge_other_public_area_3_3_1_B_c',
				'$lobby_lounge_other_public_area_3_3_1_C_a',
				'$lobby_lounge_other_public_area_3_3_1_C_b',
				'$lobby_lounge_other_public_area_3_3_1_C_c',
				'$lobby_lounge_other_public_area_3_3_1_D_a',
				'$lobby_lounge_other_public_area_3_3_1_D_b',
				'$lobby_lounge_other_public_area_3_3_1_D_c',
				'$lobby_lounge_other_public_area_3_3_1_D_d',
				'$lobby_lounge_other_public_area_3_4_1_text',
				'$lobby_lounge_other_public_area_3_4_1_A',
				'$lobby_lounge_other_public_area_3_4_1_B',
				'$lobby_lounge_other_public_area_3_4_1_C',
				'$lobby_lounge_other_public_area_3_4_1_D',
				'$guest_rooms_4_1_1_text',
				'$guest_rooms_4_1_1_A',
				'$guest_rooms_4_2_1_text',
				'$guest_rooms_4_2_1_A_a',
				'$guest_rooms_4_2_1_A_b',
				'$guest_rooms_4_2_1_A_c',
				'$guest_rooms_4_2_1_A_d',
				'$guest_rooms_4_2_1_A_e',
				'$guest_rooms_4_2_1_A_f',
				'$guest_rooms_4_2_1_A_g',
				'$guest_rooms_4_2_1_A_h',
				'$guest_rooms_4_2_1_A_i',
				'$guest_rooms_4_2_1_A_j',
				'$guest_rooms_4_2_1_A_k',
				'$guest_rooms_4_2_1_A_l',
				'$guest_rooms_4_2_1_A_m',
				'$guest_rooms_4_2_1_B',
				'$guest_rooms_4_3_1_text',
				'$guest_rooms_4_3_1_A',
				'$guest_rooms_4_3_1_B',
				'$guest_rooms_4_3_1_C',
				'$guest_rooms_4_3_1_D',
				'$guest_rooms_4_3_1_E',
				'$guest_rooms_4_4_1_text',
				'$guest_rooms_4_4_1_A',
				'$guest_rooms_4_4_1_B',
				'$guest_rooms_4_4_1_C',
				'$guest_rooms_4_4_1_D',
				'$guest_rooms_4_4_1_E',
				'$guest_rooms_4_5_1_text',
				'$guest_rooms_4_5_1_A',
				'$guest_rooms_4_5_1_B_a',
				'$guest_rooms_4_5_1_B_b',
				'$guest_rooms_4_5_1_B_c',
				'$guest_rooms_4_5_1_B_d',
				'$guest_rooms_4_5_1_B_e',
				'$guest_rooms_4_5_1_C',
				'$guest_rooms_4_5_1_D',
				'$guest_rooms_4_5_1_E',
				'$guest_rooms_4_5_1_F',
				'$kitchen_5_1_1_text',
				'$kitchen_5_1_1_A',
				'$kitchen_5_2_1_text',
				'$kitchen_5_2_1_A',
				'$kitchen_5_2_1_B',
				'$kitchen_5_2_1_C',
				'$kitchen_5_2_1_D',
				'$kitchen_5_2_1_E',
				'$kitchen_5_2_1_F',
				'$kitchen_5_2_1_G',
				'$kitchen_5_2_1_H',
				'$kitchen_5_3_1_text',
				'$kitchen_5_3_1_A_a',
				'$kitchen_5_3_1_A_b',
				'$kitchen_5_3_1_A_c',
				'$kitchen_5_3_1_A_d',
				'$kitchen_5_3_1_B',
				'$kitchen_5_3_1_C',
				'$kitchen_5_3_1_D',
				'$kitchen_5_3_1_E',
				'$kitchen_5_3_1_F',
				'$kitchen_5_3_1_G',
				'$function_rooms_6_1_1_text',
				'$function_rooms_6_1_1_A',
				'$function_rooms_6_2_1_text',
				'$function_rooms_6_2_1_A',
				'$function_rooms_6_2_1_B_a',
				'$function_rooms_6_2_1_B_b',
				'$function_rooms_6_2_1_B_c',
				'$function_rooms_6_2_1_B_d',
				'$function_rooms_6_2_1_B_e',
				'$function_rooms_6_2_1_B_f',
				'$function_rooms_6_2_1_C_a',
				'$function_rooms_6_2_1_C_b',
				'$function_rooms_6_2_1_D',
				'$functions_room_6_3_1_text',
				'$functions_room_6_3_1_A',
				'$functions_room_6_3_1_A_c',
				'$functions_room_6_3_1_A_d',
				'$functions_room_6_3_1_A_e',
				'$functions_room_6_3_1_A_f',
				'$functions_room_6_3_1_A_g',
				'$functions_room_6_3_1_A_h',
				'$functions_room_6_3_1_A_i',
				'$functions_room_6_3_1_A_j',
				'$functions_room_6_3_1_A_k',
				'$functions_room_6_3_1_A_l',
				'$functions_room_6_3_1_A_m',
				'$functions_room_6_3_1_A_n',
				'$functions_room_6_3_1_A_o',
				'$functions_room_6_3_1_A_p',
				'$functions_room_6_3_1_A_q',
				'$functions_room_6_3_1_B',
				'$function_rooms_6_4_1_text',
				'$function_rooms_6_4_1_A',
				'$function_rooms_6_4_1_B_a',
				'$function_rooms_6_4_1_B_b',
				'$function_rooms_6_4_1_B_c',
				'$function_rooms_6_4_1_B_d',
				'$function_rooms_6_4_1_C',
				'$function_rooms_6_4_1_D',
				'$function_rooms_6_5_1_text',
				'$function_rooms_6_5_1_A',
				'$function_rooms_6_5_1_B',
				'$function_rooms_6_6_1_text',
				'$function_rooms_6_6_1_A',
				'$function_rooms_6_6_1_B',
				'$function_rooms_6_6_1_C',
				'$function_rooms_6_6_1_D',
				'$function_rooms_6_6_1_E',
				'$function_rooms_6_7_1_text',
				'$function_rooms_6_7_1_A',
				'$function_rooms_6_7_1_B',
				'$function_rooms_6_7_1_C',
				'$function_rooms_6_7_1_D',
				'$function_rooms_6_7_1_E',
				'$function_rooms_6_8_1_text',
				'$function_rooms_6_8_1_A',
				'$function_rooms_6_8_1_B_a',
				'$function_rooms_6_8_1_B_b',
				'$function_rooms_6_8_1_B_c',
				'$function_rooms_6_8_1_C',
				'$guest_bathrooms_7_1_1_text',
				'$guest_bathrooms_7_1_1_A',
				'$guest_bathrooms_7_1_1_B',
				'$guest_bathrooms_7_1_1_C',
				'$guest_bathrooms_7_2_1_text',
				'$guest_bathrooms_7_2_1_A',
				'$guest_bathrooms_7_2_1_B',
				'$guest_bathrooms_7_2_1_C',
				'$guest_bathrooms_7_2_1_D',
				'$guest_bathrooms_7_3_1_text',
				'$guest_bathrooms_7_3_1_A_a',
				'$guest_bathrooms_7_3_1_A_b',
				'$guest_bathrooms_7_3_1_A_c',
				'$guest_bathrooms_7_3_1_A_d',
				'$guest_bathrooms_7_3_1_A_e',
				'$guest_bathrooms_7_3_1_A_f',
				'$guest_bathrooms_7_3_1_A_g',
				'$guest_bathrooms_7_3_1_A_h',
				'$guest_bathrooms_7_3_1_A_i',
				'$guest_bathrooms_7_3_1_A_j',
				'$guest_bathrooms_7_3_1_A_k',
				'$guest_bathrooms_7_3_1_A_l',
				'$guest_bathrooms_7_3_1_A_m',
				'$guest_bathrooms_7_3_1_A_n',
				'$guest_bathrooms_7_3_1_A_o',
				'$guest_bathrooms_7_3_1_A_p',
				'$guest_bathrooms_7_3_1_A_q',
				'$guest_bathrooms_7_3_1_A_r',
				'$guest_bathrooms_7_3_1_A_s',
				'$guest_bathrooms_7_3_1_A_t',
				'$guest_bathrooms_7_3_1_A_u',
				'$guest_bathrooms_7_3_1_A_v',
				'$guest_bathrooms_7_3_1_B',
				'$guest_bathrooms_7_3_1_C',
				'$guest_bathrooms_7_4_1_text',
				'$guest_bathrooms_7_4_1_A',
				'$guest_bathrooms_7_4_1_B',
				'$guest_bathrooms_7_4_1_C',
				'$guest_bathrooms_7_4_1_D',
				'$guest_bathrooms_7_4_1_E',
				'$guest_bathrooms_7_4_1_F',
				'$guest_bathrooms_7_5_1_text',
				'$guest_bathrooms_7_5_1_A_a',
				'$guest_bathrooms_7_5_1_A_b',
				'$guest_bathrooms_7_5_1_A_c',
				'$guest_bathrooms_7_5_1_A_d',
				'$guest_bathrooms_7_5_1_A_e',
				'$guest_bathrooms_7_5_1_B',
				'$guest_bathrooms_7_5_1_C',
				'$guest_bathrooms_7_5_1_D',
				'$guest_bathrooms_7_5_1_E',
				'$guest_bathrooms_7_5_1_F',
				'$guest_bathrooms_7_6_1_text',
				'$guest_bathrooms_7_6_1_A_a',
				'$guest_bathrooms_7_6_1_A_b',
				'$guest_bathrooms_7_6_1_A_c',
				'$guest_bathrooms_7_6_1_A_d',
				'$guest_bathrooms_7_6_1_A_e',
				'$guest_bathrooms_7_6_1_A_f',
				'$guest_bathrooms_7_6_1_B',
				'$guest_bathrooms_7_6_1_C',
				'$guest_bathrooms_7_7_1_text',
				'$guest_bathrooms_7_7_1_A',
				'$guest_bathrooms_7_7_1_B',
				'$hygiene_and_sanitation_8_1_1_text',
				'$hygiene_and_sanitation_8_1_1_A',
				'$hygiene_and_sanitation_8_1_1_B',
				'$hygiene_and_sanitation_8_1_1_C',
				'$hygiene_and_sanitation_8_1_1_D',
				'$hygiene_and_sanitation_8_1_1_E',
				'$hygiene_and_sanitation_8_1_1_F',
				'$hygiene_and_sanitation_8_2_1_text',
				'$hygiene_and_sanitation_8_2_1_A',
				'$hygiene_and_sanitation_8_2_1_B',
				'$hygiene_and_sanitation_8_2_1_C',
				'$hygiene_and_sanitation_8_3_1_text',
				'$hygiene_and_sanitation_8_3_1_A',
				'$hygiene_and_sanitation_8_3_1_B',
				'$hygiene_and_sanitation_8_4_1_text',
				'$hygiene_and_sanitation_8_4_1_A',
				'$hygiene_and_sanitation_8_4_1_B_a',
				'$hygiene_and_sanitation_8_4_1_B_b',
				'$hygiene_and_sanitation_8_4_1_C',
				'$hygiene_and_sanitation_8_5_1_text',
				'$hygiene_and_sanitation_8_5_1_A',
				'$hygiene_and_sanitation_8_5_1_B',
				'$safety_and_security_9_1_1_text',
				'$safety_and_security_9_1_1_A',
				'$safety_and_security_9_1_1_B',
				'$safety_and_security_9_1_1_C',
				'$safety_and_security_9_1_1_D',
				'$safety_and_security_9_1_1_E_a',
				'$safety_and_security_9_1_1_E_b',
				'$safety_and_security_9_1_1_E_c',
				'$safety_and_security_9_1_1_E_d',
				'$safety_and_security_9_1_1_E_e',
				'$safety_and_security_9_1_1_E_f',
				'$safety_and_security_9_1_1_E_g',
				'$safety_and_security_9_1_1_F',
				'$safety_and_security_9_1_1_G',
				'$safety_and_security_9_1_1_H',
				'$safety_and_security_9_1_1_I',
				'$safety_and_security_9_2_1_text',
				'$safety_and_security_9_2_1_A',
				'$safety_and_security_9_2_1_B',
				'$safety_and_security_9_3_1_text',
				'$safety_and_security_9_3_1_A',
				'$safety_and_security_9_3_1_B',
				'$safety_and_security_9_3_1_C',
				'$safety_and_security_9_4_1_text',
				'$safety_and_security_9_4_1_A',
				'$safety_and_security_9_4_1_B',
				'$safety_and_security_9_4_1_C',
				'$safety_and_security_9_4_1_D',
				'$safety_and_security_9_4_1_E',
				'$safety_and_security_9_4_1_F',
				'$safety_and_security_9_4_1_G',
				'$safety_and_security_9_4_1_H',
				'$safety_and_security_9_5_1_text',
				'$safety_and_security_9_5_1_A',
				'$safety_and_security_9_5_1_B',
				'$safety_and_security_9_5_1_C',
				'$safety_and_security_9_5_1_D',
				'$safety_and_security_9_5_1_E',
				'$safety_and_security_9_6_1_text',
				'$safety_and_security_9_6_1_A',
				'$safety_and_security_9_6_1_B',
				'$safety_and_security_9_6_1_C',
				'$sundry_services_10_1_1_text',
				'$sundry_services_10_1_1_A',
				'$sundry_services_10_1_1_B',
				'$sundry_services_10_1_1_C',
				'$sundry_services_10_1_1_D',
				'$sundry_services_10_2_1_text',
				'$sundry_services_10_2_1_A',
				'$sundry_services_10_3_1_text',
				'$sundry_services_10_3_1_A',
				'$sundry_services_10_4_1_text',
				'$sundry_services_10_4_1_A',
				'$sundry_services_10_4_1_B',
				'$sundry_services_10_4_1_C',
				'$sundry_services_10_4_1_D',
				'$human_resources_11_1_1_text',
				'$human_resources_11_1_1_A',
				'$human_resources_11_1_1_B',
				'$human_resources_11_1_1_C',
				'$human_resources_11_1_1_D',
				'$human_resources_11_1_1_E_a',
				'$human_resources_11_1_1_E_b',
				'$human_resources_11_1_1_E_c',
				'$human_resources_11_1_1_E_d',
				'$human_resources_11_1_1_E_e',
				'$human_resources_11_2_1_text',
				'$human_resources_11_2_1_A',
				'$human_resources_11_2_1_B',
				'$human_resources_11_3_1_text',
				'$human_resources_11_3_1_A_a',
				'$human_resources_11_3_1_A_b',
				'$human_resources_11_3_1_A_c',
				'$human_resources_11_3_1_B_a',
				'$human_resources_11_3_1_B_b',
				'$human_resources_11_3_1_B_c',
				'$human_resources_11_3_1_C_a',
				'$human_resources_11_3_1_C_b',
				'$human_resources_11_3_1_C_c',
				'$human_resources_11_4_1_text',
				'$human_resources_11_4_1_A',
				'$human_resources_11_5_1_text',
				'$human_resources_11_5_1_A',
				'$human_resources_11_5_1_B',
				'$human_resources_11_5_1_C',
				'$human_resources_11_5_1_D',
				'$human_resources_11_5_1_E',
				'$human_resources_11_5_1_F',
				'$human_resources_11_5_1_G',
				'$general_12_1_1_text',
				'$general_12_1_1_A',
				'$general_12_1_1_B',
				'$general_12_2_1_text',
				'$general_12_2_1_A',
				'$general_12_2_1_B',
				'$general_12_3_1_text',
				'$general_12_3_1_A',
				'$general_12_3_1_B',
				'$general_12_4_1_text',
				'$general_12_4_1_A',
				'$general_12_4_1_B',
				'$general_12_4_1_C',
				'$general_12_5_1_text',
				'$general_12_5_1_A',
				'$general_12_5_1_B',
				'$general_12_5_1_C',
				'$general_12_5_1_D_a',
				'$general_12_5_1_D_b',
				'$general_12_5_1_D_c',
				'$general_12_5_1_D_d',
				'$general_12_5_1_D_e',
				'$general_12_5_1_E',
				'$general_12_5_1_F',
				'$general_12_5_1_G',
				'$general_12_5_1_H',
				'$general_12_6_1_text',
				'$general_12_6_1_A'
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
					$query = "UPDATE afcg_assessment_villa SET 
					assessment_score = '$assessment_score', 
					location_1_1_1_text = '$location_1_1_1_text',
					location_1_1_1_A = '$location_1_1_1_A',
					location_1_1_1_B = '$location_1_1_1_B',
					location_1_1_2_text = '$location_1_1_2_text',
					location_1_1_2_A = '$location_1_1_2_A',
					location_1_1_3_text = '$location_1_1_3_text',
					location_1_1_3_A = '$location_1_1_3_A',
					location_1_1_3_B_a = '$location_1_1_3_B_a',
					location_1_1_3_B_b = '$location_1_1_3_B_b',
					location_1_1_3_B_c = '$location_1_1_3_B_c',
					location_1_1_3_B_d = '$location_1_1_3_B_d',
					location_1_1_4_text = '$location_1_1_4_text',
					location_1_1_4_A = '$location_1_1_4_A',
					location_1_1_4_B = '$location_1_1_4_B',
					location_1_1_4_C = '$location_1_1_4_C',
					location_1_1_5_text = '$location_1_1_5_text',
					location_1_1_5_A = '$location_1_1_5_A',
					location_1_1_5_B = '$location_1_1_5_B',
					location_1_1_5_C = '$location_1_1_5_C',
					location_1_1_5_D = '$location_1_1_5_D',
					building_2_1_1_text = '$building_2_1_1_text',
					building_2_1_1_A = '$building_2_1_1_A',
					building_2_1_1_B = '$building_2_1_1_B',
					building_2_2_1_text = '$building_2_2_1_text',
					building_2_2_1_A = '$building_2_2_1_A',
					building_2_2_1_B = '$building_2_2_1_B',
					building_2_2_1_C = '$building_2_2_1_C',
					building_2_2_1_D = '$building_2_2_1_D',
					building_2_2_1_E = '$building_2_2_1_E',
					building_2_2_1_F = '$building_2_2_1_F',
					building_2_2_1_G = '$building_2_2_1_G',
					building_2_2_1_H = '$building_2_2_1_H',
					building_2_2_1_I = '$building_2_2_1_I',
					building_2_3_1_text = '$building_2_3_1_text',
					building_2_3_1_A = '$building_2_3_1_A',
					building_2_3_1_B = '$building_2_3_1_B',
					building_2_3_1_C = '$building_2_3_1_C',
					building_2_3_1_D = '$building_2_3_1_D',
					building_2_4_1_text = '$building_2_4_1_text',
					building_2_4_1_A = '$building_2_4_1_A',
					building_2_5_1_text = '$building_2_5_1_text',
					building_2_5_1_A = '$building_2_5_1_A',
					building_2_5_1_B = '$building_2_5_1_B',
					building_2_5_1_C = '$building_2_5_1_C',
					building_2_5_1_D = '$building_2_5_1_D',
					building_2_5_1_E = '$building_2_5_1_E',
					building_2_5_1_F = '$building_2_5_1_F',
					building_2_5_1_G = '$building_2_5_1_G',
					building_2_5_1_H = '$building_2_5_1_H',
					building_2_5_1_I = '$building_2_5_1_I',
					building_2_5_1_J = '$building_2_5_1_J',
					building_2_6_1_text = '$building_2_6_1_text',
					building_2_6_1_A = '$building_2_6_1_A',
					building_2_6_1_B = '$building_2_6_1_B',
					building_2_6_1_C = '$building_2_6_1_C',
					building_2_6_1_D = '$building_2_6_1_D',
					building_2_6_1_E = '$building_2_6_1_E',
					building_2_7_1_text = '$building_2_7_1_text',
					building_2_7_1_A = '$building_2_7_1_A',
					building_2_7_1_B = '$building_2_7_1_B',
					building_2_8_1_text = '$building_2_8_1_text',
					building_2_8_1_A = '$building_2_8_1_A',
					building_2_8_1_B = '$building_2_8_1_B',
					lobby_lounge_other_public_areas_3_1_1_text = '$lobby_lounge_other_public_areas_3_1_1_text',
					lobby_lounge_other_public_areas_3_1_1_A = '$lobby_lounge_other_public_areas_3_1_1_A',
					lobby_lounge_other_public_areas_3_1_1_B = '$lobby_lounge_other_public_areas_3_1_1_B',
					lobby_lounge_other_public_areas_3_1_1_C = '$lobby_lounge_other_public_areas_3_1_1_C',
					lobby_lounge_other_public_areas_3_1_1_D = '$lobby_lounge_other_public_areas_3_1_1_D',
					lobby_lounge_other_public_areas_3_1_1_E = '$lobby_lounge_other_public_areas_3_1_1_E',
					lobby_lounge_other_public_areas_3_2_1_text = '$lobby_lounge_other_public_areas_3_2_1_text',
					lobby_lounge_other_public_areas_3_2_1_A = '$lobby_lounge_other_public_areas_3_2_1_A',
					lobby_lounge_other_public_areas_3_2_1_B = '$lobby_lounge_other_public_areas_3_2_1_B',
					lobby_lounge_other_public_areas_3_2_1_C = '$lobby_lounge_other_public_areas_3_2_1_C',
					lobby_lounge_other_public_areas_3_2_1_D_a = '$lobby_lounge_other_public_areas_3_2_1_D_a',
					lobby_lounge_other_public_areas_3_2_1_D_b = '$lobby_lounge_other_public_areas_3_2_1_D_b',
					lobby_lounge_other_public_areas_3_2_1_E = '$lobby_lounge_other_public_areas_3_2_1_E',
					lobby_lounge_other_public_areas_3_2_1_F = '$lobby_lounge_other_public_areas_3_2_1_F',
					lobby_lounge_other_public_areas_3_2_1_G = '$lobby_lounge_other_public_areas_3_2_1_G',
					lobby_lounge_other_public_area_3_3_1_text = '$lobby_lounge_other_public_area_3_3_1_text',
					lobby_lounge_other_public_area_3_3_1_A = '$lobby_lounge_other_public_area_3_3_1_A',
					lobby_lounge_other_public_area_3_3_1_B_a = '$lobby_lounge_other_public_area_3_3_1_B_a',
					lobby_lounge_other_public_area_3_3_1_B_b = '$lobby_lounge_other_public_area_3_3_1_B_b',
					lobby_lounge_other_public_area_3_3_1_B_c = '$lobby_lounge_other_public_area_3_3_1_B_c',
					lobby_lounge_other_public_area_3_3_1_C_a = '$lobby_lounge_other_public_area_3_3_1_C_a',
					lobby_lounge_other_public_area_3_3_1_C_b = '$lobby_lounge_other_public_area_3_3_1_C_b',
					lobby_lounge_other_public_area_3_3_1_C_c = '$lobby_lounge_other_public_area_3_3_1_C_c',
					lobby_lounge_other_public_area_3_3_1_D_a = '$lobby_lounge_other_public_area_3_3_1_D_a',
					lobby_lounge_other_public_area_3_3_1_D_b = '$lobby_lounge_other_public_area_3_3_1_D_b',
					lobby_lounge_other_public_area_3_3_1_D_c = '$lobby_lounge_other_public_area_3_3_1_D_c',
					lobby_lounge_other_public_area_3_3_1_D_d = '$lobby_lounge_other_public_area_3_3_1_D_d',
					lobby_lounge_other_public_area_3_4_1_text = '$lobby_lounge_other_public_area_3_4_1_text',
					lobby_lounge_other_public_area_3_4_1_A = '$lobby_lounge_other_public_area_3_4_1_A',
					lobby_lounge_other_public_area_3_4_1_B = '$lobby_lounge_other_public_area_3_4_1_B',
					lobby_lounge_other_public_area_3_4_1_C = '$lobby_lounge_other_public_area_3_4_1_C',
					lobby_lounge_other_public_area_3_4_1_D = '$lobby_lounge_other_public_area_3_4_1_D',
					guest_rooms_4_1_1_text = '$guest_rooms_4_1_1_text',
					guest_rooms_4_1_1_A = '$guest_rooms_4_1_1_A',
					guest_rooms_4_2_1_text = '$guest_rooms_4_2_1_text',
					guest_rooms_4_2_1_A_a = '$guest_rooms_4_2_1_A_a',
					guest_rooms_4_2_1_A_b = '$guest_rooms_4_2_1_A_b',
					guest_rooms_4_2_1_A_c = '$guest_rooms_4_2_1_A_c',
					guest_rooms_4_2_1_A_d = '$guest_rooms_4_2_1_A_d',
					guest_rooms_4_2_1_A_e = '$guest_rooms_4_2_1_A_e',
					guest_rooms_4_2_1_A_f = '$guest_rooms_4_2_1_A_f',
					guest_rooms_4_2_1_A_g = '$guest_rooms_4_2_1_A_g',
					guest_rooms_4_2_1_A_h = '$guest_rooms_4_2_1_A_h',
					guest_rooms_4_2_1_A_i = '$guest_rooms_4_2_1_A_i',
					guest_rooms_4_2_1_A_j = '$guest_rooms_4_2_1_A_j',
					guest_rooms_4_2_1_A_k = '$guest_rooms_4_2_1_A_k',
					guest_rooms_4_2_1_A_l = '$guest_rooms_4_2_1_A_l',
					guest_rooms_4_2_1_A_m = '$guest_rooms_4_2_1_A_m',
					guest_rooms_4_2_1_B = '$guest_rooms_4_2_1_B',
					guest_rooms_4_3_1_text = '$guest_rooms_4_3_1_text',
					guest_rooms_4_3_1_A = '$guest_rooms_4_3_1_A',
					guest_rooms_4_3_1_B = '$guest_rooms_4_3_1_B',
					guest_rooms_4_3_1_C = '$guest_rooms_4_3_1_C',
					guest_rooms_4_3_1_D = '$guest_rooms_4_3_1_D',
					guest_rooms_4_3_1_E = '$guest_rooms_4_3_1_E',
					guest_rooms_4_4_1_text = '$guest_rooms_4_4_1_text',
					guest_rooms_4_4_1_A = '$guest_rooms_4_4_1_A',
					guest_rooms_4_4_1_B = '$guest_rooms_4_4_1_B',
					guest_rooms_4_4_1_C = '$guest_rooms_4_4_1_C',
					guest_rooms_4_4_1_D = '$guest_rooms_4_4_1_D',
					guest_rooms_4_4_1_E = '$guest_rooms_4_4_1_E',
					guest_rooms_4_5_1_text = '$guest_rooms_4_5_1_text',
					guest_rooms_4_5_1_A = '$guest_rooms_4_5_1_A',
					guest_rooms_4_5_1_B_a = '$guest_rooms_4_5_1_B_a',
					guest_rooms_4_5_1_B_b = '$guest_rooms_4_5_1_B_b',
					guest_rooms_4_5_1_B_c = '$guest_rooms_4_5_1_B_c',
					guest_rooms_4_5_1_B_d = '$guest_rooms_4_5_1_B_d',
					guest_rooms_4_5_1_B_e = '$guest_rooms_4_5_1_B_e',
					guest_rooms_4_5_1_C = '$guest_rooms_4_5_1_C',
					guest_rooms_4_5_1_D = '$guest_rooms_4_5_1_D',
					guest_rooms_4_5_1_E = '$guest_rooms_4_5_1_E',
					guest_rooms_4_5_1_F = '$guest_rooms_4_5_1_F',
					kitchen_5_1_1_text = '$kitchen_5_1_1_text',
					kitchen_5_1_1_A = '$kitchen_5_1_1_A',
					kitchen_5_2_1_text = '$kitchen_5_2_1_text',
					kitchen_5_2_1_A = '$kitchen_5_2_1_A',
					kitchen_5_2_1_B = '$kitchen_5_2_1_B',
					kitchen_5_2_1_C = '$kitchen_5_2_1_C',
					kitchen_5_2_1_D = '$kitchen_5_2_1_D',
					kitchen_5_2_1_E = '$kitchen_5_2_1_E',
					kitchen_5_2_1_F = '$kitchen_5_2_1_F',
					kitchen_5_2_1_G = '$kitchen_5_2_1_G',
					kitchen_5_2_1_H = '$kitchen_5_2_1_H',
					kitchen_5_3_1_text = '$kitchen_5_3_1_text',
					kitchen_5_3_1_A_a = '$kitchen_5_3_1_A_a',
					kitchen_5_3_1_A_b = '$kitchen_5_3_1_A_b',
					kitchen_5_3_1_A_c = '$kitchen_5_3_1_A_c',
					kitchen_5_3_1_A_d = '$kitchen_5_3_1_A_d',
					kitchen_5_3_1_B = '$kitchen_5_3_1_B',
					kitchen_5_3_1_C = '$kitchen_5_3_1_C',
					kitchen_5_3_1_D = '$kitchen_5_3_1_D',
					kitchen_5_3_1_E = '$kitchen_5_3_1_E',
					kitchen_5_3_1_F = '$kitchen_5_3_1_F',
					kitchen_5_3_1_G = '$kitchen_5_3_1_G',
					function_rooms_6_1_1_text = '$function_rooms_6_1_1_text',
					function_rooms_6_1_1_A = '$function_rooms_6_1_1_A',
					function_rooms_6_2_1_text = '$function_rooms_6_2_1_text',
					function_rooms_6_2_1_A = '$function_rooms_6_2_1_A',
					function_rooms_6_2_1_B_a = '$function_rooms_6_2_1_B_a',
					function_rooms_6_2_1_B_b = '$function_rooms_6_2_1_B_b',
					function_rooms_6_2_1_B_c = '$function_rooms_6_2_1_B_c',
					function_rooms_6_2_1_B_d = '$function_rooms_6_2_1_B_d',
					function_rooms_6_2_1_B_e = '$function_rooms_6_2_1_B_e',
					function_rooms_6_2_1_B_f = '$function_rooms_6_2_1_B_f',
					function_rooms_6_2_1_C_a = '$function_rooms_6_2_1_C_a',
					function_rooms_6_2_1_C_b = '$function_rooms_6_2_1_C_b',
					function_rooms_6_2_1_D = '$function_rooms_6_2_1_D',
					functions_room_6_3_1_text = '$functions_room_6_3_1_text',
					functions_room_6_3_1_A = '$functions_room_6_3_1_A',
					functions_room_6_3_1_A_c = '$functions_room_6_3_1_A_c',
					functions_room_6_3_1_A_d = '$functions_room_6_3_1_A_d',
					functions_room_6_3_1_A_e = '$functions_room_6_3_1_A_e',
					functions_room_6_3_1_A_f = '$functions_room_6_3_1_A_f',
					functions_room_6_3_1_A_g = '$functions_room_6_3_1_A_g',
					functions_room_6_3_1_A_h = '$functions_room_6_3_1_A_h',
					functions_room_6_3_1_A_i = '$functions_room_6_3_1_A_i',
					functions_room_6_3_1_A_j = '$functions_room_6_3_1_A_j',
					functions_room_6_3_1_A_k = '$functions_room_6_3_1_A_k',
					functions_room_6_3_1_A_l = '$functions_room_6_3_1_A_l',
					functions_room_6_3_1_A_m = '$functions_room_6_3_1_A_m',
					functions_room_6_3_1_A_n = '$functions_room_6_3_1_A_n',
					functions_room_6_3_1_A_o = '$functions_room_6_3_1_A_o',
					functions_room_6_3_1_A_p = '$functions_room_6_3_1_A_p',
					functions_room_6_3_1_A_q = '$functions_room_6_3_1_A_q',
					functions_room_6_3_1_B = '$functions_room_6_3_1_B',
					function_rooms_6_4_1_text = '$function_rooms_6_4_1_text',
					function_rooms_6_4_1_A = '$function_rooms_6_4_1_A',
					function_rooms_6_4_1_B_a = '$function_rooms_6_4_1_B_a',
					function_rooms_6_4_1_B_b = '$function_rooms_6_4_1_B_b',
					function_rooms_6_4_1_B_c = '$function_rooms_6_4_1_B_c',
					function_rooms_6_4_1_B_d = '$function_rooms_6_4_1_B_d',
					function_rooms_6_4_1_C = '$function_rooms_6_4_1_C',
					function_rooms_6_4_1_D = '$function_rooms_6_4_1_D',
					function_rooms_6_5_1_text = '$function_rooms_6_5_1_text',
					function_rooms_6_5_1_A = '$function_rooms_6_5_1_A',
					function_rooms_6_5_1_B = '$function_rooms_6_5_1_B',
					function_rooms_6_6_1_text = '$function_rooms_6_6_1_text',
					function_rooms_6_6_1_A = '$function_rooms_6_6_1_A',
					function_rooms_6_6_1_B = '$function_rooms_6_6_1_B',
					function_rooms_6_6_1_C = '$function_rooms_6_6_1_C',
					function_rooms_6_6_1_D = '$function_rooms_6_6_1_D',
					function_rooms_6_6_1_E = '$function_rooms_6_6_1_E',
					function_rooms_6_7_1_text = '$function_rooms_6_7_1_text',
					function_rooms_6_7_1_A = '$function_rooms_6_7_1_A',
					function_rooms_6_7_1_B = '$function_rooms_6_7_1_B',
					function_rooms_6_7_1_C = '$function_rooms_6_7_1_C',
					function_rooms_6_7_1_D = '$function_rooms_6_7_1_D',
					function_rooms_6_7_1_E = '$function_rooms_6_7_1_E',
					function_rooms_6_8_1_text = '$function_rooms_6_8_1_text',
					function_rooms_6_8_1_A = '$function_rooms_6_8_1_A',
					function_rooms_6_8_1_B_a = '$function_rooms_6_8_1_B_a',
					function_rooms_6_8_1_B_b = '$function_rooms_6_8_1_B_b',
					function_rooms_6_8_1_B_c = '$function_rooms_6_8_1_B_c',
					function_rooms_6_8_1_C = '$function_rooms_6_8_1_C',
					guest_bathrooms_7_1_1_text = '$guest_bathrooms_7_1_1_text',
					guest_bathrooms_7_1_1_A = '$guest_bathrooms_7_1_1_A',
					guest_bathrooms_7_1_1_B = '$guest_bathrooms_7_1_1_B',
					guest_bathrooms_7_1_1_C = '$guest_bathrooms_7_1_1_C',
					guest_bathrooms_7_2_1_text = '$guest_bathrooms_7_2_1_text',
					guest_bathrooms_7_2_1_A = '$guest_bathrooms_7_2_1_A',
					guest_bathrooms_7_2_1_B = '$guest_bathrooms_7_2_1_B',
					guest_bathrooms_7_2_1_C = '$guest_bathrooms_7_2_1_C',
					guest_bathrooms_7_2_1_D = '$guest_bathrooms_7_2_1_D',
					guest_bathrooms_7_3_1_text = '$guest_bathrooms_7_3_1_text',
					guest_bathrooms_7_3_1_A_a = '$guest_bathrooms_7_3_1_A_a',
					guest_bathrooms_7_3_1_A_b = '$guest_bathrooms_7_3_1_A_b',
					guest_bathrooms_7_3_1_A_c = '$guest_bathrooms_7_3_1_A_c',
					guest_bathrooms_7_3_1_A_d = '$guest_bathrooms_7_3_1_A_d',
					guest_bathrooms_7_3_1_A_e = '$guest_bathrooms_7_3_1_A_e',
					guest_bathrooms_7_3_1_A_f = '$guest_bathrooms_7_3_1_A_f',
					guest_bathrooms_7_3_1_A_g = '$guest_bathrooms_7_3_1_A_g',
					guest_bathrooms_7_3_1_A_h = '$guest_bathrooms_7_3_1_A_h',
					guest_bathrooms_7_3_1_A_i = '$guest_bathrooms_7_3_1_A_i',
					guest_bathrooms_7_3_1_A_j = '$guest_bathrooms_7_3_1_A_j',
					guest_bathrooms_7_3_1_A_k = '$guest_bathrooms_7_3_1_A_k',
					guest_bathrooms_7_3_1_A_l = '$guest_bathrooms_7_3_1_A_l',
					guest_bathrooms_7_3_1_A_m = '$guest_bathrooms_7_3_1_A_m',
					guest_bathrooms_7_3_1_A_n = '$guest_bathrooms_7_3_1_A_n',
					guest_bathrooms_7_3_1_A_o = '$guest_bathrooms_7_3_1_A_o',
					guest_bathrooms_7_3_1_A_p = '$guest_bathrooms_7_3_1_A_p',
					guest_bathrooms_7_3_1_A_q = '$guest_bathrooms_7_3_1_A_q',
					guest_bathrooms_7_3_1_A_r = '$guest_bathrooms_7_3_1_A_r',
					guest_bathrooms_7_3_1_A_s = '$guest_bathrooms_7_3_1_A_s',
					guest_bathrooms_7_3_1_A_t = '$guest_bathrooms_7_3_1_A_t',
					guest_bathrooms_7_3_1_A_u = '$guest_bathrooms_7_3_1_A_u',
					guest_bathrooms_7_3_1_A_v = '$guest_bathrooms_7_3_1_A_v',
					guest_bathrooms_7_3_1_B = '$guest_bathrooms_7_3_1_B',
					guest_bathrooms_7_3_1_C = '$guest_bathrooms_7_3_1_C',
					guest_bathrooms_7_4_1_text = '$guest_bathrooms_7_4_1_text',
					guest_bathrooms_7_4_1_A = '$guest_bathrooms_7_4_1_A',
					guest_bathrooms_7_4_1_B = '$guest_bathrooms_7_4_1_B',
					guest_bathrooms_7_4_1_C = '$guest_bathrooms_7_4_1_C',
					guest_bathrooms_7_4_1_D = '$guest_bathrooms_7_4_1_D',
					guest_bathrooms_7_4_1_E = '$guest_bathrooms_7_4_1_E',
					guest_bathrooms_7_4_1_F = '$guest_bathrooms_7_4_1_F',
					guest_bathrooms_7_5_1_text = '$guest_bathrooms_7_5_1_text',
					guest_bathrooms_7_5_1_A_a = '$guest_bathrooms_7_5_1_A_a',
					guest_bathrooms_7_5_1_A_b = '$guest_bathrooms_7_5_1_A_b',
					guest_bathrooms_7_5_1_A_c = '$guest_bathrooms_7_5_1_A_c',
					guest_bathrooms_7_5_1_A_d = '$guest_bathrooms_7_5_1_A_d',
					guest_bathrooms_7_5_1_A_e = '$guest_bathrooms_7_5_1_A_e',
					guest_bathrooms_7_5_1_B = '$guest_bathrooms_7_5_1_B',
					guest_bathrooms_7_5_1_C = '$guest_bathrooms_7_5_1_C',
					guest_bathrooms_7_5_1_D = '$guest_bathrooms_7_5_1_D',
					guest_bathrooms_7_5_1_E = '$guest_bathrooms_7_5_1_E',
					guest_bathrooms_7_5_1_F = '$guest_bathrooms_7_5_1_F',
					guest_bathrooms_7_6_1_text = '$guest_bathrooms_7_6_1_text',
					guest_bathrooms_7_6_1_A_a = '$guest_bathrooms_7_6_1_A_a',
					guest_bathrooms_7_6_1_A_b = '$guest_bathrooms_7_6_1_A_b',
					guest_bathrooms_7_6_1_A_c = '$guest_bathrooms_7_6_1_A_c',
					guest_bathrooms_7_6_1_A_d = '$guest_bathrooms_7_6_1_A_d',
					guest_bathrooms_7_6_1_A_e = '$guest_bathrooms_7_6_1_A_e',
					guest_bathrooms_7_6_1_A_f = '$guest_bathrooms_7_6_1_A_f',
					guest_bathrooms_7_6_1_B = '$guest_bathrooms_7_6_1_B',
					guest_bathrooms_7_6_1_C = '$guest_bathrooms_7_6_1_C',
					guest_bathrooms_7_7_1_text = '$guest_bathrooms_7_7_1_text',
					guest_bathrooms_7_7_1_A = '$guest_bathrooms_7_7_1_A',
					guest_bathrooms_7_7_1_B = '$guest_bathrooms_7_7_1_B',
					hygiene_and_sanitation_8_1_1_text = '$hygiene_and_sanitation_8_1_1_text',
					hygiene_and_sanitation_8_1_1_A = '$hygiene_and_sanitation_8_1_1_A',
					hygiene_and_sanitation_8_1_1_B = '$hygiene_and_sanitation_8_1_1_B',
					hygiene_and_sanitation_8_1_1_C = '$hygiene_and_sanitation_8_1_1_C',
					hygiene_and_sanitation_8_1_1_D = '$hygiene_and_sanitation_8_1_1_D',
					hygiene_and_sanitation_8_1_1_E = '$hygiene_and_sanitation_8_1_1_E',
					hygiene_and_sanitation_8_1_1_F = '$hygiene_and_sanitation_8_1_1_F',
					hygiene_and_sanitation_8_2_1_text = '$hygiene_and_sanitation_8_2_1_text',
					hygiene_and_sanitation_8_2_1_A = '$hygiene_and_sanitation_8_2_1_A',
					hygiene_and_sanitation_8_2_1_B = '$hygiene_and_sanitation_8_2_1_B',
					hygiene_and_sanitation_8_2_1_C = '$hygiene_and_sanitation_8_2_1_C',
					hygiene_and_sanitation_8_3_1_text = '$hygiene_and_sanitation_8_3_1_text',
					hygiene_and_sanitation_8_3_1_A = '$hygiene_and_sanitation_8_3_1_A',
					hygiene_and_sanitation_8_3_1_B = '$hygiene_and_sanitation_8_3_1_B',
					hygiene_and_sanitation_8_4_1_text = '$hygiene_and_sanitation_8_4_1_text',
					hygiene_and_sanitation_8_4_1_A = '$hygiene_and_sanitation_8_4_1_A',
					hygiene_and_sanitation_8_4_1_B_a = '$hygiene_and_sanitation_8_4_1_B_a',
					hygiene_and_sanitation_8_4_1_B_b = '$hygiene_and_sanitation_8_4_1_B_b',
					hygiene_and_sanitation_8_4_1_C = '$hygiene_and_sanitation_8_4_1_C',
					hygiene_and_sanitation_8_5_1_text = '$hygiene_and_sanitation_8_5_1_text',
					hygiene_and_sanitation_8_5_1_A = '$hygiene_and_sanitation_8_5_1_A',
					hygiene_and_sanitation_8_5_1_B = '$hygiene_and_sanitation_8_5_1_B',
					safety_and_security_9_1_1_text = '$safety_and_security_9_1_1_text',
					safety_and_security_9_1_1_A = '$safety_and_security_9_1_1_A',
					safety_and_security_9_1_1_B = '$safety_and_security_9_1_1_B',
					safety_and_security_9_1_1_C = '$safety_and_security_9_1_1_C',
					safety_and_security_9_1_1_D = '$safety_and_security_9_1_1_D',
					safety_and_security_9_1_1_E_a = '$safety_and_security_9_1_1_E_a',
					safety_and_security_9_1_1_E_b = '$safety_and_security_9_1_1_E_b',
					safety_and_security_9_1_1_E_c = '$safety_and_security_9_1_1_E_c',
					safety_and_security_9_1_1_E_d = '$safety_and_security_9_1_1_E_d',
					safety_and_security_9_1_1_E_e = '$safety_and_security_9_1_1_E_e',
					safety_and_security_9_1_1_E_f = '$safety_and_security_9_1_1_E_f',
					safety_and_security_9_1_1_E_g = '$safety_and_security_9_1_1_E_g',
					safety_and_security_9_1_1_F = '$safety_and_security_9_1_1_F',
					safety_and_security_9_1_1_G = '$safety_and_security_9_1_1_G',
					safety_and_security_9_1_1_H = '$safety_and_security_9_1_1_H',
					safety_and_security_9_1_1_I = '$safety_and_security_9_1_1_I',
					safety_and_security_9_2_1_text = '$safety_and_security_9_2_1_text',
					safety_and_security_9_2_1_A = '$safety_and_security_9_2_1_A',
					safety_and_security_9_2_1_B = '$safety_and_security_9_2_1_B',
					safety_and_security_9_3_1_text = '$safety_and_security_9_3_1_text',
					safety_and_security_9_3_1_A = '$safety_and_security_9_3_1_A',
					safety_and_security_9_3_1_B = '$safety_and_security_9_3_1_B',
					safety_and_security_9_3_1_C = '$safety_and_security_9_3_1_C',
					safety_and_security_9_4_1_text = '$safety_and_security_9_4_1_text',
					safety_and_security_9_4_1_A = '$safety_and_security_9_4_1_A',
					safety_and_security_9_4_1_B = '$safety_and_security_9_4_1_B',
					safety_and_security_9_4_1_C = '$safety_and_security_9_4_1_C',
					safety_and_security_9_4_1_D = '$safety_and_security_9_4_1_D',
					safety_and_security_9_4_1_E = '$safety_and_security_9_4_1_E',
					safety_and_security_9_4_1_F = '$safety_and_security_9_4_1_F',
					safety_and_security_9_4_1_G = '$safety_and_security_9_4_1_G',
					safety_and_security_9_4_1_H = '$safety_and_security_9_4_1_H',
					safety_and_security_9_5_1_text = '$safety_and_security_9_5_1_text',
					safety_and_security_9_5_1_A = '$safety_and_security_9_5_1_A',
					safety_and_security_9_5_1_B = '$safety_and_security_9_5_1_B',
					safety_and_security_9_5_1_C = '$safety_and_security_9_5_1_C',
					safety_and_security_9_5_1_D = '$safety_and_security_9_5_1_D',
					safety_and_security_9_5_1_E = '$safety_and_security_9_5_1_E',
					safety_and_security_9_6_1_text = '$safety_and_security_9_6_1_text',
					safety_and_security_9_6_1_A = '$safety_and_security_9_6_1_A',
					safety_and_security_9_6_1_B = '$safety_and_security_9_6_1_B',
					safety_and_security_9_6_1_C = '$safety_and_security_9_6_1_C',
					sundry_services_10_1_1_text = '$sundry_services_10_1_1_text',
					sundry_services_10_1_1_A = '$sundry_services_10_1_1_A',
					sundry_services_10_1_1_B = '$sundry_services_10_1_1_B',
					sundry_services_10_1_1_C = '$sundry_services_10_1_1_C',
					sundry_services_10_1_1_D = '$sundry_services_10_1_1_D',
					sundry_services_10_2_1_text = '$sundry_services_10_2_1_text',
					sundry_services_10_2_1_A = '$sundry_services_10_2_1_A',
					sundry_services_10_3_1_text = '$sundry_services_10_3_1_text',
					sundry_services_10_3_1_A = '$sundry_services_10_3_1_A',
					sundry_services_10_4_1_text = '$sundry_services_10_4_1_text',
					sundry_services_10_4_1_A = '$sundry_services_10_4_1_A',
					sundry_services_10_4_1_B = '$sundry_services_10_4_1_B',
					sundry_services_10_4_1_C = '$sundry_services_10_4_1_C',
					sundry_services_10_4_1_D = '$sundry_services_10_4_1_D',
					human_resources_11_1_1_text = '$human_resources_11_1_1_text',
					human_resources_11_1_1_A = '$human_resources_11_1_1_A',
					human_resources_11_1_1_B = '$human_resources_11_1_1_B',
					human_resources_11_1_1_C = '$human_resources_11_1_1_C',
					human_resources_11_1_1_D = '$human_resources_11_1_1_D',
					human_resources_11_1_1_E_a = '$human_resources_11_1_1_E_a',
					human_resources_11_1_1_E_b = '$human_resources_11_1_1_E_b',
					human_resources_11_1_1_E_c = '$human_resources_11_1_1_E_c',
					human_resources_11_1_1_E_d = '$human_resources_11_1_1_E_d',
					human_resources_11_1_1_E_e = '$human_resources_11_1_1_E_e',
					human_resources_11_2_1_text = '$human_resources_11_2_1_text',
					human_resources_11_2_1_A = '$human_resources_11_2_1_A',
					human_resources_11_2_1_B = '$human_resources_11_2_1_B',
					human_resources_11_3_1_text = '$human_resources_11_3_1_text',
					human_resources_11_3_1_A_a = '$human_resources_11_3_1_A_a',
					human_resources_11_3_1_A_b = '$human_resources_11_3_1_A_b',
					human_resources_11_3_1_A_c = '$human_resources_11_3_1_A_c',
					human_resources_11_3_1_B_a = '$human_resources_11_3_1_B_a',
					human_resources_11_3_1_B_b = '$human_resources_11_3_1_B_b',
					human_resources_11_3_1_B_c = '$human_resources_11_3_1_B_c',
					human_resources_11_3_1_C_a = '$human_resources_11_3_1_C_a',
					human_resources_11_3_1_C_b = '$human_resources_11_3_1_C_b',
					human_resources_11_3_1_C_c = '$human_resources_11_3_1_C_c',
					human_resources_11_4_1_text = '$human_resources_11_4_1_text',
					human_resources_11_4_1_A = '$human_resources_11_4_1_A',
					human_resources_11_5_1_text = '$human_resources_11_5_1_text',
					human_resources_11_5_1_A = '$human_resources_11_5_1_A',
					human_resources_11_5_1_B = '$human_resources_11_5_1_B',
					human_resources_11_5_1_C = '$human_resources_11_5_1_C',
					human_resources_11_5_1_D = '$human_resources_11_5_1_D',
					human_resources_11_5_1_E = '$human_resources_11_5_1_E',
					human_resources_11_5_1_F = '$human_resources_11_5_1_F',
					human_resources_11_5_1_G = '$human_resources_11_5_1_G',
					general_12_1_1_text = '$general_12_1_1_text',
					general_12_1_1_A = '$general_12_1_1_A',
					general_12_1_1_B = '$general_12_1_1_B',
					general_12_2_1_text = '$general_12_2_1_text',
					general_12_2_1_A = '$general_12_2_1_A',
					general_12_2_1_B = '$general_12_2_1_B',
					general_12_3_1_text = '$general_12_3_1_text',
					general_12_3_1_A = '$general_12_3_1_A',
					general_12_3_1_B = '$general_12_3_1_B',
					general_12_4_1_text = '$general_12_4_1_text',
					general_12_4_1_A = '$general_12_4_1_A',
					general_12_4_1_B = '$general_12_4_1_B',
					general_12_4_1_C = '$general_12_4_1_C',
					general_12_5_1_text = '$general_12_5_1_text',
					general_12_5_1_A = '$general_12_5_1_A',
					general_12_5_1_B = '$general_12_5_1_B',
					general_12_5_1_C = '$general_12_5_1_C',
					general_12_5_1_D_a = '$general_12_5_1_D_a',
					general_12_5_1_D_b = '$general_12_5_1_D_b',
					general_12_5_1_D_c = '$general_12_5_1_D_c',
					general_12_5_1_D_d = '$general_12_5_1_D_d',
					general_12_5_1_D_e = '$general_12_5_1_D_e',
					general_12_5_1_E = '$general_12_5_1_E',
					general_12_5_1_F = '$general_12_5_1_F',
					general_12_5_1_G = '$general_12_5_1_G',
					general_12_5_1_H = '$general_12_5_1_H',
					general_12_6_1_text = '$general_12_6_1_text',
					general_12_6_1_A = '$general_12_6_1_A'																			
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