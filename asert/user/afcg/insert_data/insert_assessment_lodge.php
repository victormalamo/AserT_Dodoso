<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();


	$facility_id = $form_data->facility_id;
	$assessor_category = $form_data->assessor_category;
	$assessor_score_column = 'assessment_score_'.$assessor_category;
	$assessment_score = $form_data->assessment_score_town_hotel;

	//Variables Controller
		
	$location_1_1_1_text = $form_data->location_1_1_1_text;
	if(($form_data->location_1_1_1_A_cm) == ''){ $location_1_1_1_A = $form_data->location_1_1_1_A; }else{ $location_1_1_1_A= $form_data->location_1_1_1_A_cm; }
	if(($form_data->location_1_1_1_B_cm) == ''){ $location_1_1_1_B = $form_data->location_1_1_1_B; }else{ $location_1_1_1_B= $form_data->location_1_1_1_B_cm; }
	if(($form_data->location_1_1_1_C_cm) == ''){ $location_1_1_1_C = $form_data->location_1_1_1_C; }else{ $location_1_1_1_C= $form_data->location_1_1_1_C_cm; }
	if(($form_data->location_1_1_1_D_cm) == ''){ $location_1_1_1_D = $form_data->location_1_1_1_D; }else{ $location_1_1_1_D= $form_data->location_1_1_1_D_cm; }
	if(($form_data->location_1_1_1_E_cm) == ''){ $location_1_1_1_E = $form_data->location_1_1_1_E; }else{ $location_1_1_1_E= $form_data->location_1_1_1_E_cm; }
	if(($form_data->location_1_1_1_F_cm) == ''){ $location_1_1_1_F = $form_data->location_1_1_1_F; }else{ $location_1_1_1_F= $form_data->location_1_1_1_F_cm; }
	if(($form_data->location_1_1_1_G_cm) == ''){ $location_1_1_1_G = $form_data->location_1_1_1_G; }else{ $location_1_1_1_G= $form_data->location_1_1_1_G_cm; }
	if(($form_data->location_1_1_1_H_cm) == ''){ $location_1_1_1_H = $form_data->location_1_1_1_H; }else{ $location_1_1_1_H= $form_data->location_1_1_1_H_cm; }
	if(($form_data->location_1_1_1_I_cm) == ''){ $location_1_1_1_I = $form_data->location_1_1_1_I; }else{ $location_1_1_1_I= $form_data->location_1_1_1_I_cm; }
	$location_1_2_1_text = $form_data->location_1_2_1_text;
	if(($form_data->location_1_2_1_A_cm) == ''){ $location_1_2_1_A = $form_data->location_1_2_1_A; }else{ $location_1_2_1_A= $form_data->location_1_2_1_A_cm; }
	if(($form_data->location_1_2_1_B_cm) == ''){ $location_1_2_1_B = $form_data->location_1_2_1_B; }else{ $location_1_2_1_B= $form_data->location_1_2_1_B_cm; }
	if(($form_data->location_1_2_1_C_cm) == ''){ $location_1_2_1_C = $form_data->location_1_2_1_C; }else{ $location_1_2_1_C= $form_data->location_1_2_1_C_cm; }
	if(($form_data->location_1_2_1_D_a_cm) == ''){ if($form_data->location_1_2_1_D_a == ''){ $location_1_2_1_D_a = ''; }else{ $location_1_2_1_D_a = 2; } }else{ $location_1_2_1_D_a= $form_data->location_1_2_1_D_a_cm; }
	if(($form_data->location_1_2_1_D_b_cm) == ''){ if($form_data->location_1_2_1_D_b == ''){ $location_1_2_1_D_b = ''; }else{ $location_1_2_1_D_b = 2; } }else{ $location_1_2_1_D_b= $form_data->location_1_2_1_D_b_cm; }
	if(($form_data->location_1_2_1_D_c_cm) == ''){ if($form_data->location_1_2_1_D_c == ''){ $location_1_2_1_D_c = ''; }else{ $location_1_2_1_D_c = 2; } }else{ $location_1_2_1_D_c= $form_data->location_1_2_1_D_c_cm; }
	if(($form_data->location_1_2_1_D_d_cm) == ''){ if($form_data->location_1_2_1_D_d == ''){ $location_1_2_1_D_d = ''; }else{ $location_1_2_1_D_d = 2; } }else{ $location_1_2_1_D_d= $form_data->location_1_2_1_D_d_cm; }
	if(($form_data->location_1_2_1_E_cm) == ''){ $location_1_2_1_E = $form_data->location_1_2_1_E; }else{ $location_1_2_1_E= $form_data->location_1_2_1_E_cm; }
	if(($form_data->location_1_2_1_F_cm) == ''){ $location_1_2_1_F = $form_data->location_1_2_1_F; }else{ $location_1_2_1_F= $form_data->location_1_2_1_F_cm; }
	if(($form_data->location_1_2_1_G_a_cm) == ''){ if($form_data->location_1_2_1_G_a == ''){ $location_1_2_1_G_a = ''; }else{ $location_1_2_1_G_a = 1; } }else{ $location_1_2_1_G_a= $form_data->location_1_2_1_G_a_cm; }
	if(($form_data->location_1_2_1_G_b_cm) == ''){ if($form_data->location_1_2_1_G_b == ''){ $location_1_2_1_G_b = ''; }else{ $location_1_2_1_G_b = 2; } }else{ $location_1_2_1_G_b= $form_data->location_1_2_1_G_b_cm; }
	if(($form_data->location_1_2_1_G_c_cm) == ''){ if($form_data->location_1_2_1_G_c == ''){ $location_1_2_1_G_c = ''; }else{ $location_1_2_1_G_c = 3; } }else{ $location_1_2_1_G_c= $form_data->location_1_2_1_G_c_cm; }
	if(($form_data->location_1_2_1_H_cm) == ''){ $location_1_2_1_H = $form_data->location_1_2_1_H; }else{ $location_1_2_1_H= $form_data->location_1_2_1_H_cm; }
	if(($form_data->location_1_2_1_I_cm) == ''){ $location_1_2_1_I = $form_data->location_1_2_1_I; }else{ $location_1_2_1_I= $form_data->location_1_2_1_I_cm; }
	if(($form_data->location_1_2_1_J_cm) == ''){ $location_1_2_1_J = $form_data->location_1_2_1_J; }else{ $location_1_2_1_J= $form_data->location_1_2_1_J_cm; }
	if(($form_data->location_1_2_1_K_cm) == ''){ $location_1_2_1_K = $form_data->location_1_2_1_K; }else{ $location_1_2_1_K= $form_data->location_1_2_1_K_cm; }
	if(($form_data->location_1_2_1_L_cm) == ''){ $location_1_2_1_L = $form_data->location_1_2_1_L; }else{ $location_1_2_1_L= $form_data->location_1_2_1_L_cm; }
	if(($form_data->location_1_2_1_M_cm) == ''){ $location_1_2_1_M = $form_data->location_1_2_1_M; }else{ $location_1_2_1_M= $form_data->location_1_2_1_M_cm; }
	if(($form_data->location_1_2_1_N_cm) == ''){ $location_1_2_1_N = $form_data->location_1_2_1_N; }else{ $location_1_2_1_N= $form_data->location_1_2_1_N_cm; }
	$building_2_1_1_text = $form_data->building_2_1_1_text;
	if(($form_data->building_2_1_1_A_cm) == ''){ $building_2_1_1_A = $form_data->building_2_1_1_A; }else{ $building_2_1_1_A= $form_data->building_2_1_1_A_cm; }
	if(($form_data->building_2_1_1_B_cm) == ''){ $building_2_1_1_B = $form_data->building_2_1_1_B; }else{ $building_2_1_1_B= $form_data->building_2_1_1_B_cm; }
	if(($form_data->building_2_1_1_C_cm) == ''){ $building_2_1_1_C = $form_data->building_2_1_1_C; }else{ $building_2_1_1_C= $form_data->building_2_1_1_C_cm; }
	if(($form_data->building_2_1_1_D_cm) == ''){ $building_2_1_1_D = $form_data->building_2_1_1_D; }else{ $building_2_1_1_D= $form_data->building_2_1_1_D_cm; }
	if(($form_data->building_2_1_1_E_cm) == ''){ $building_2_1_1_E = $form_data->building_2_1_1_E; }else{ $building_2_1_1_E= $form_data->building_2_1_1_E_cm; }
	if(($form_data->building_2_1_1_F_cm) == ''){ $building_2_1_1_F = $form_data->building_2_1_1_F; }else{ $building_2_1_1_F= $form_data->building_2_1_1_F_cm; }
	if(($form_data->building_2_1_1_G_cm) == ''){ $building_2_1_1_G = $form_data->building_2_1_1_G; }else{ $building_2_1_1_G= $form_data->building_2_1_1_G_cm; }
	if(($form_data->building_2_1_1_H_cm) == ''){ $building_2_1_1_H = $form_data->building_2_1_1_H; }else{ $building_2_1_1_H= $form_data->building_2_1_1_H_cm; }
	if(($form_data->building_2_1_1_I_cm) == ''){ $building_2_1_1_I = $form_data->building_2_1_1_I; }else{ $building_2_1_1_I= $form_data->building_2_1_1_I_cm; }
	if(($form_data->building_2_1_1_J_cm) == ''){ $building_2_1_1_J = $form_data->building_2_1_1_J; }else{ $building_2_1_1_J= $form_data->building_2_1_1_J_cm; }
	if(($form_data->building_2_1_1_K_cm) == ''){ $building_2_1_1_K = $form_data->building_2_1_1_K; }else{ $building_2_1_1_K= $form_data->building_2_1_1_K_cm; }
	$building_2_2_1_text = $form_data->building_2_2_1_text;
	if(($form_data->building_2_2_1_A_cm) == ''){ $building_2_2_1_A = $form_data->building_2_2_1_A; }else{ $building_2_2_1_A= $form_data->building_2_2_1_A_cm; }
	$building_2_3_1_text = $form_data->building_2_3_1_text;
	if(($form_data->building_2_3_1_A_cm) == ''){ $building_2_3_1_A = $form_data->building_2_3_1_A; }else{ $building_2_3_1_A= $form_data->building_2_3_1_A_cm; }
	if(($form_data->building_2_3_1_B_cm) == ''){ $building_2_3_1_B = $form_data->building_2_3_1_B; }else{ $building_2_3_1_B= $form_data->building_2_3_1_B_cm; }
	if(($form_data->building_2_3_1_C_cm) == ''){ $building_2_3_1_C = $form_data->building_2_3_1_C; }else{ $building_2_3_1_C= $form_data->building_2_3_1_C_cm; }
	if(($form_data->building_2_3_1_D_cm) == ''){ $building_2_3_1_D = $form_data->building_2_3_1_D; }else{ $building_2_3_1_D= $form_data->building_2_3_1_D_cm; }
	if(($form_data->building_2_3_1_E_cm) == ''){ $building_2_3_1_E = $form_data->building_2_3_1_E; }else{ $building_2_3_1_E= $form_data->building_2_3_1_E_cm; }
	if(($form_data->building_2_3_1_F_cm) == ''){ $building_2_3_1_F = $form_data->building_2_3_1_F; }else{ $building_2_3_1_F= $form_data->building_2_3_1_F_cm; }
	if(($form_data->building_2_3_1_G_cm) == ''){ $building_2_3_1_G = $form_data->building_2_3_1_G; }else{ $building_2_3_1_G= $form_data->building_2_3_1_G_cm; }
	if(($form_data->building_2_4_1_A_cm) == ''){ $building_2_4_1_A = $form_data->building_2_4_1_A; }else{ $building_2_4_1_A= $form_data->building_2_4_1_A_cm; }
	if(($form_data->building_2_4_1_B_cm) == ''){ $building_2_4_1_B = $form_data->building_2_4_1_B; }else{ $building_2_4_1_B= $form_data->building_2_4_1_B_cm; }
	$front_office_3_1_1_text = $form_data->front_office_3_1_1_text;
	if(($form_data->front_office_3_1_1_A_cm) == ''){ $front_office_3_1_1_A = $form_data->front_office_3_1_1_A; }else{ $front_office_3_1_1_A= $form_data->front_office_3_1_1_A_cm; }
	if(($form_data->front_office_3_1_1_B_cm) == ''){ $front_office_3_1_1_B = $form_data->front_office_3_1_1_B; }else{ $front_office_3_1_1_B= $form_data->front_office_3_1_1_B_cm; }
	if(($form_data->front_office_3_1_1_C_cm) == ''){ $front_office_3_1_1_C = $form_data->front_office_3_1_1_C; }else{ $front_office_3_1_1_C= $form_data->front_office_3_1_1_C_cm; }
	if(($form_data->front_office_3_1_1_D_cm) == ''){ $front_office_3_1_1_D = $form_data->front_office_3_1_1_D; }else{ $front_office_3_1_1_D= $form_data->front_office_3_1_1_D_cm; }
	if(($form_data->front_office_3_1_1_E_cm) == ''){ $front_office_3_1_1_E = $form_data->front_office_3_1_1_E; }else{ $front_office_3_1_1_E= $form_data->front_office_3_1_1_E_cm; }
	if(($form_data->front_office_3_1_1_F_cm) == ''){ $front_office_3_1_1_F = $form_data->front_office_3_1_1_F; }else{ $front_office_3_1_1_F= $form_data->front_office_3_1_1_F_cm; }
	$front_office_3_2_1_text = $form_data->front_office_3_2_1_text;
	if(($form_data->front_office_3_2_1_A_cm) == ''){ $front_office_3_2_1_A = $form_data->front_office_3_2_1_A; }else{ $front_office_3_2_1_A= $form_data->front_office_3_2_1_A_cm; }
	if(($form_data->front_office_3_2_1_B_a_cm) == ''){ if($form_data->front_office_3_2_1_B_a == ''){ $front_office_3_2_1_B_a = ''; }else{ $front_office_3_2_1_B_a = 1; } }else{ $front_office_3_2_1_B_a= $form_data->front_office_3_2_1_B_a_cm; }
	if(($form_data->front_office_3_2_1_B_b_cm) == ''){ if($form_data->front_office_3_2_1_B_b == ''){ $front_office_3_2_1_B_b = ''; }else{ $front_office_3_2_1_B_b = 2; } }else{ $front_office_3_2_1_B_b= $form_data->front_office_3_2_1_B_b_cm; }
	if(($form_data->front_office_3_2_1_B_c_cm) == ''){ if($form_data->front_office_3_2_1_B_c == ''){ $front_office_3_2_1_B_c = ''; }else{ $front_office_3_2_1_B_c = 2; } }else{ $front_office_3_2_1_B_c= $form_data->front_office_3_2_1_B_c_cm; }
	if(($form_data->front_office_3_2_1_C_a_cm) == ''){ if($form_data->front_office_3_2_1_C_a == ''){ $front_office_3_2_1_C_a = ''; }else{ $front_office_3_2_1_C_a = 2; } }else{ $front_office_3_2_1_C_a= $form_data->front_office_3_2_1_C_a_cm; }
	if(($form_data->front_office_3_2_1_C_b_cm) == ''){ if($form_data->front_office_3_2_1_C_b == ''){ $front_office_3_2_1_C_b = ''; }else{ $front_office_3_2_1_C_b = 2; } }else{ $front_office_3_2_1_C_b= $form_data->front_office_3_2_1_C_b_cm; }
	if(($form_data->front_office_3_2_1_C_c_cm) == ''){ if($form_data->front_office_3_2_1_C_c == ''){ $front_office_3_2_1_C_c = ''; }else{ $front_office_3_2_1_C_c = 2; } }else{ $front_office_3_2_1_C_c= $form_data->front_office_3_2_1_C_c_cm; }
	if(($form_data->front_office_3_2_1_D_a_cm) == ''){ if($form_data->front_office_3_2_1_D_a == ''){ $front_office_3_2_1_D_a = ''; }else{ $front_office_3_2_1_D_a = 2; } }else{ $front_office_3_2_1_D_a= $form_data->front_office_3_2_1_D_a_cm; }
	if(($form_data->front_office_3_2_1_D_b_cm) == ''){ if($form_data->front_office_3_2_1_D_b == ''){ $front_office_3_2_1_D_b = ''; }else{ $front_office_3_2_1_D_b = 2; } }else{ $front_office_3_2_1_D_b= $form_data->front_office_3_2_1_D_b_cm; }
	if(($form_data->front_office_3_2_1_D_c_cm) == ''){ if($form_data->front_office_3_2_1_D_c == ''){ $front_office_3_2_1_D_c = ''; }else{ $front_office_3_2_1_D_c = 2; } }else{ $front_office_3_2_1_D_c= $form_data->front_office_3_2_1_D_c_cm; }
	if(($form_data->front_office_3_2_1_D_d_cm) == ''){ if($form_data->front_office_3_2_1_D_d == ''){ $front_office_3_2_1_D_d = ''; }else{ $front_office_3_2_1_D_d = 2; } }else{ $front_office_3_2_1_D_d= $form_data->front_office_3_2_1_D_d_cm; }
	$front_office_3_3_1_text = $form_data->front_office_3_3_1_text;
	if(($form_data->front_office_3_3_1_A_cm) == ''){ $front_office_3_3_1_A = $form_data->front_office_3_3_1_A; }else{ $front_office_3_3_1_A= $form_data->front_office_3_3_1_A_cm; }
	if(($form_data->front_office_3_3_1_B_cm) == ''){ $front_office_3_3_1_B = $form_data->front_office_3_3_1_B; }else{ $front_office_3_3_1_B= $form_data->front_office_3_3_1_B_cm; }
	$front_office_3_4_1_text = $form_data->front_office_3_4_1_text;
	if(($form_data->front_office_3_4_1_A_a_cm) == ''){ if($form_data->front_office_3_4_1_A_a == ''){ $front_office_3_4_1_A_a = ''; }else{ $front_office_3_4_1_A_a = 0; } }else{ $front_office_3_4_1_A_a= $form_data->front_office_3_4_1_A_a_cm; }
	if(($form_data->front_office_3_4_1_A_b_cm) == ''){ if($form_data->front_office_3_4_1_A_b == ''){ $front_office_3_4_1_A_b = ''; }else{ $front_office_3_4_1_A_b = 2; } }else{ $front_office_3_4_1_A_b= $form_data->front_office_3_4_1_A_b_cm; }
	if(($form_data->front_office_3_4_1_A_c_cm) == ''){ if($form_data->front_office_3_4_1_A_c == ''){ $front_office_3_4_1_A_c = ''; }else{ $front_office_3_4_1_A_c = 3; } }else{ $front_office_3_4_1_A_c= $form_data->front_office_3_4_1_A_c_cm; }
	if(($form_data->front_office_3_4_1_A_d_cm) == ''){ if($form_data->front_office_3_4_1_A_d == ''){ $front_office_3_4_1_A_d = ''; }else{ $front_office_3_4_1_A_d = 15; } }else{ $front_office_3_4_1_A_d= $form_data->front_office_3_4_1_A_d_cm; }
	$front_office_3_5_1_text = $form_data->front_office_3_5_1_text;
	if(($form_data->front_office_3_5_1_A_cm) == ''){ $front_office_3_5_1_A = $form_data->front_office_3_5_1_A; }else{ $front_office_3_5_1_A= $form_data->front_office_3_5_1_A_cm; }
	if(($form_data->front_office_3_5_1_B_cm) == ''){ $front_office_3_5_1_B = $form_data->front_office_3_5_1_B; }else{ $front_office_3_5_1_B= $form_data->front_office_3_5_1_B_cm; }
	if(($form_data->front_office_3_5_1_C_cm) == ''){ $front_office_3_5_1_C = $form_data->front_office_3_5_1_C; }else{ $front_office_3_5_1_C= $form_data->front_office_3_5_1_C_cm; }
	if(($form_data->front_office_3_5_1_D_cm) == ''){ $front_office_3_5_1_D = $form_data->front_office_3_5_1_D; }else{ $front_office_3_5_1_D= $form_data->front_office_3_5_1_D_cm; }
	$front_office_3_6_1_text = $form_data->front_office_3_6_1_text;
	if(($form_data->front_office_3_6_1_A_cm) == ''){ $front_office_3_6_1_A = $form_data->front_office_3_6_1_A; }else{ $front_office_3_6_1_A= $form_data->front_office_3_6_1_A_cm; }
	if(($form_data->front_office_3_6_1_B_cm) == ''){ $front_office_3_6_1_B = $form_data->front_office_3_6_1_B; }else{ $front_office_3_6_1_B= $form_data->front_office_3_6_1_B_cm; }
	$front_office_3_7_1_text = $form_data->front_office_3_7_1_text;
	if(($form_data->front_office_3_7_1_A_cm) == ''){ $front_office_3_7_1_A = $form_data->front_office_3_7_1_A; }else{ $front_office_3_7_1_A= $form_data->front_office_3_7_1_A_cm; }
	if(($form_data->front_office_3_7_1_B_cm) == ''){ $front_office_3_7_1_B = $form_data->front_office_3_7_1_B; }else{ $front_office_3_7_1_B= $form_data->front_office_3_7_1_B_cm; }
	if(($form_data->front_office_3_7_1_C_cm) == ''){ $front_office_3_7_1_C = $form_data->front_office_3_7_1_C; }else{ $front_office_3_7_1_C= $form_data->front_office_3_7_1_C_cm; }
	$front_office_3_8_1_text = $form_data->front_office_3_8_1_text;
	if(($form_data->front_office_3_8_1_A_a_cm) == ''){ if($form_data->front_office_3_8_1_A_a == ''){ $front_office_3_8_1_A_a = ''; }else{ $front_office_3_8_1_A_a = 4; } }else{ $front_office_3_8_1_A_a= $form_data->front_office_3_8_1_A_a_cm; }
	if(($form_data->front_office_3_8_1_A_b_cm) == ''){ if($form_data->front_office_3_8_1_A_b == ''){ $front_office_3_8_1_A_b = ''; }else{ $front_office_3_8_1_A_b = 4; } }else{ $front_office_3_8_1_A_b= $form_data->front_office_3_8_1_A_b_cm; }
	if(($form_data->front_office_3_8_1_A_c_cm) == ''){ if($form_data->front_office_3_8_1_A_c == ''){ $front_office_3_8_1_A_c = ''; }else{ $front_office_3_8_1_A_c = 2; } }else{ $front_office_3_8_1_A_c= $form_data->front_office_3_8_1_A_c_cm; }
	if(($form_data->front_office_3_8_1_B_a_cm) == ''){ if($form_data->front_office_3_8_1_B_a == ''){ $front_office_3_8_1_B_a = ''; }else{ $front_office_3_8_1_B_a = 4; } }else{ $front_office_3_8_1_B_a= $form_data->front_office_3_8_1_B_a_cm; }
	if(($form_data->front_office_3_8_1_B_b_cm) == ''){ if($form_data->front_office_3_8_1_B_b == ''){ $front_office_3_8_1_B_b = ''; }else{ $front_office_3_8_1_B_b = 4; } }else{ $front_office_3_8_1_B_b= $form_data->front_office_3_8_1_B_b_cm; }
	if(($form_data->front_office_3_8_1_B_c_cm) == ''){ if($form_data->front_office_3_8_1_B_c == ''){ $front_office_3_8_1_B_c = ''; }else{ $front_office_3_8_1_B_c = 2; } }else{ $front_office_3_8_1_B_c= $form_data->front_office_3_8_1_B_c_cm; }
	$front_office_3_9_1_text = $form_data->front_office_3_9_1_text;
	if(($form_data->front_office_3_9_1_A_cm) == ''){ $front_office_3_9_1_A = $form_data->front_office_3_9_1_A; }else{ $front_office_3_9_1_A= $form_data->front_office_3_9_1_A_cm; }
	if(($form_data->front_office_3_9_1_B_cm) == ''){ $front_office_3_9_1_B = $form_data->front_office_3_9_1_B; }else{ $front_office_3_9_1_B= $form_data->front_office_3_9_1_B_cm; }
	if(($form_data->front_office_3_9_1_C_cm) == ''){ $front_office_3_9_1_C = $form_data->front_office_3_9_1_C; }else{ $front_office_3_9_1_C= $form_data->front_office_3_9_1_C_cm; }
	$lobby_lounge_other_public_areas_4_1_1_text = $form_data->lobby_lounge_other_public_areas_4_1_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_A = $form_data->lobby_lounge_other_public_areas_4_1_1_A; }else{ $lobby_lounge_other_public_areas_4_1_1_A= $form_data->lobby_lounge_other_public_areas_4_1_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_B_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_B = $form_data->lobby_lounge_other_public_areas_4_1_1_B; }else{ $lobby_lounge_other_public_areas_4_1_1_B= $form_data->lobby_lounge_other_public_areas_4_1_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_C_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_C = $form_data->lobby_lounge_other_public_areas_4_1_1_C; }else{ $lobby_lounge_other_public_areas_4_1_1_C= $form_data->lobby_lounge_other_public_areas_4_1_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_D_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_D = $form_data->lobby_lounge_other_public_areas_4_1_1_D; }else{ $lobby_lounge_other_public_areas_4_1_1_D= $form_data->lobby_lounge_other_public_areas_4_1_1_D_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_E_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_E = $form_data->lobby_lounge_other_public_areas_4_1_1_E; }else{ $lobby_lounge_other_public_areas_4_1_1_E= $form_data->lobby_lounge_other_public_areas_4_1_1_E_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_F_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_F = $form_data->lobby_lounge_other_public_areas_4_1_1_F; }else{ $lobby_lounge_other_public_areas_4_1_1_F= $form_data->lobby_lounge_other_public_areas_4_1_1_F_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_1_1_G_cm) == ''){ $lobby_lounge_other_public_areas_4_1_1_G = $form_data->lobby_lounge_other_public_areas_4_1_1_G; }else{ $lobby_lounge_other_public_areas_4_1_1_G= $form_data->lobby_lounge_other_public_areas_4_1_1_G_cm; }
	$lobby_lounge_other_public_areas_4_2_1_text = $form_data->lobby_lounge_other_public_areas_4_2_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_2_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_2_1_A = $form_data->lobby_lounge_other_public_areas_4_2_1_A; }else{ $lobby_lounge_other_public_areas_4_2_1_A= $form_data->lobby_lounge_other_public_areas_4_2_1_A_cm; }
	$lobby_lounge_other_public_areas_4_3_1_text = $form_data->lobby_lounge_other_public_areas_4_3_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_3_1_A = $form_data->lobby_lounge_other_public_areas_4_3_1_A; }else{ $lobby_lounge_other_public_areas_4_3_1_A= $form_data->lobby_lounge_other_public_areas_4_3_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_B_a_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_3_1_B_a == ''){ $lobby_lounge_other_public_areas_4_3_1_B_a = ''; }else{ $lobby_lounge_other_public_areas_4_3_1_B_a = 5; } }else{ $lobby_lounge_other_public_areas_4_3_1_B_a= $form_data->lobby_lounge_other_public_areas_4_3_1_B_a_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_B_b_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_3_1_B_b == ''){ $lobby_lounge_other_public_areas_4_3_1_B_b = ''; }else{ $lobby_lounge_other_public_areas_4_3_1_B_b = 7; } }else{ $lobby_lounge_other_public_areas_4_3_1_B_b= $form_data->lobby_lounge_other_public_areas_4_3_1_B_b_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_B_c_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_3_1_B_c == ''){ $lobby_lounge_other_public_areas_4_3_1_B_c = ''; }else{ $lobby_lounge_other_public_areas_4_3_1_B_c = 10; } }else{ $lobby_lounge_other_public_areas_4_3_1_B_c= $form_data->lobby_lounge_other_public_areas_4_3_1_B_c_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_B_d_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_3_1_B_d == ''){ $lobby_lounge_other_public_areas_4_3_1_B_d = ''; }else{ $lobby_lounge_other_public_areas_4_3_1_B_d = 13; } }else{ $lobby_lounge_other_public_areas_4_3_1_B_d= $form_data->lobby_lounge_other_public_areas_4_3_1_B_d_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_3_1_C_cm) == ''){ $lobby_lounge_other_public_areas_4_3_1_C = $form_data->lobby_lounge_other_public_areas_4_3_1_C; }else{ $lobby_lounge_other_public_areas_4_3_1_C= $form_data->lobby_lounge_other_public_areas_4_3_1_C_cm; }
	$lobby_lounge_other_public_areas_4_4_1_text = $form_data->lobby_lounge_other_public_areas_4_4_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_4_1_A = $form_data->lobby_lounge_other_public_areas_4_4_1_A; }else{ $lobby_lounge_other_public_areas_4_4_1_A= $form_data->lobby_lounge_other_public_areas_4_4_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_B_cm) == ''){ $lobby_lounge_other_public_areas_4_4_1_B = $form_data->lobby_lounge_other_public_areas_4_4_1_B; }else{ $lobby_lounge_other_public_areas_4_4_1_B= $form_data->lobby_lounge_other_public_areas_4_4_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_C_cm) == ''){ $lobby_lounge_other_public_areas_4_4_1_C = $form_data->lobby_lounge_other_public_areas_4_4_1_C; }else{ $lobby_lounge_other_public_areas_4_4_1_C= $form_data->lobby_lounge_other_public_areas_4_4_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_D_a_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_4_1_D_a == ''){ $lobby_lounge_other_public_areas_4_4_1_D_a = ''; }else{ $lobby_lounge_other_public_areas_4_4_1_D_a = 1; } }else{ $lobby_lounge_other_public_areas_4_4_1_D_a= $form_data->lobby_lounge_other_public_areas_4_4_1_D_a_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_D_b_cm) == ''){ if($form_data->lobby_lounge_other_public_areas_4_4_1_D_b == ''){ $lobby_lounge_other_public_areas_4_4_1_D_b = ''; }else{ $lobby_lounge_other_public_areas_4_4_1_D_b = 4; } }else{ $lobby_lounge_other_public_areas_4_4_1_D_b= $form_data->lobby_lounge_other_public_areas_4_4_1_D_b_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_E_cm) == ''){ $lobby_lounge_other_public_areas_4_4_1_E = $form_data->lobby_lounge_other_public_areas_4_4_1_E; }else{ $lobby_lounge_other_public_areas_4_4_1_E= $form_data->lobby_lounge_other_public_areas_4_4_1_E_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_4_1_F_cm) == ''){ $lobby_lounge_other_public_areas_4_4_1_F = $form_data->lobby_lounge_other_public_areas_4_4_1_F; }else{ $lobby_lounge_other_public_areas_4_4_1_F= $form_data->lobby_lounge_other_public_areas_4_4_1_F_cm; }
	$lobby_lounge_other_public_areas_4_5_1_text = $form_data->lobby_lounge_other_public_areas_4_5_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_5_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_5_1_A = $form_data->lobby_lounge_other_public_areas_4_5_1_A; }else{ $lobby_lounge_other_public_areas_4_5_1_A= $form_data->lobby_lounge_other_public_areas_4_5_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_5_1_B_cm) == ''){ $lobby_lounge_other_public_areas_4_5_1_B = $form_data->lobby_lounge_other_public_areas_4_5_1_B; }else{ $lobby_lounge_other_public_areas_4_5_1_B= $form_data->lobby_lounge_other_public_areas_4_5_1_B_cm; }
	$lobby_lounge_other_public_areas_4_6_1_text = $form_data->lobby_lounge_other_public_areas_4_6_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_A = $form_data->lobby_lounge_other_public_areas_4_6_1_A; }else{ $lobby_lounge_other_public_areas_4_6_1_A= $form_data->lobby_lounge_other_public_areas_4_6_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_B_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_B = $form_data->lobby_lounge_other_public_areas_4_6_1_B; }else{ $lobby_lounge_other_public_areas_4_6_1_B= $form_data->lobby_lounge_other_public_areas_4_6_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_C_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_C = $form_data->lobby_lounge_other_public_areas_4_6_1_C; }else{ $lobby_lounge_other_public_areas_4_6_1_C= $form_data->lobby_lounge_other_public_areas_4_6_1_C_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_D_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_D = $form_data->lobby_lounge_other_public_areas_4_6_1_D; }else{ $lobby_lounge_other_public_areas_4_6_1_D= $form_data->lobby_lounge_other_public_areas_4_6_1_D_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_E_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_E = $form_data->lobby_lounge_other_public_areas_4_6_1_E; }else{ $lobby_lounge_other_public_areas_4_6_1_E= $form_data->lobby_lounge_other_public_areas_4_6_1_E_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_F_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_F = $form_data->lobby_lounge_other_public_areas_4_6_1_F; }else{ $lobby_lounge_other_public_areas_4_6_1_F= $form_data->lobby_lounge_other_public_areas_4_6_1_F_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_6_1_G_cm) == ''){ $lobby_lounge_other_public_areas_4_6_1_G = $form_data->lobby_lounge_other_public_areas_4_6_1_G; }else{ $lobby_lounge_other_public_areas_4_6_1_G= $form_data->lobby_lounge_other_public_areas_4_6_1_G_cm; }
	$lobby_lounge_other_public_areas_4_7_1_text = $form_data->lobby_lounge_other_public_areas_4_7_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_7_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_7_1_A = $form_data->lobby_lounge_other_public_areas_4_7_1_A; }else{ $lobby_lounge_other_public_areas_4_7_1_A= $form_data->lobby_lounge_other_public_areas_4_7_1_A_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_7_1_B_cm) == ''){ $lobby_lounge_other_public_areas_4_7_1_B = $form_data->lobby_lounge_other_public_areas_4_7_1_B; }else{ $lobby_lounge_other_public_areas_4_7_1_B= $form_data->lobby_lounge_other_public_areas_4_7_1_B_cm; }
	if(($form_data->lobby_lounge_other_public_areas_4_7_1_C_cm) == ''){ $lobby_lounge_other_public_areas_4_7_1_C = $form_data->lobby_lounge_other_public_areas_4_7_1_C; }else{ $lobby_lounge_other_public_areas_4_7_1_C= $form_data->lobby_lounge_other_public_areas_4_7_1_C_cm; }
	$lobby_lounge_other_public_areas_4_8_1_text = $form_data->lobby_lounge_other_public_areas_4_8_1_text;
	if(($form_data->lobby_lounge_other_public_areas_4_8_1_A_cm) == ''){ $lobby_lounge_other_public_areas_4_8_1_A = $form_data->lobby_lounge_other_public_areas_4_8_1_A; }else{ $lobby_lounge_other_public_areas_4_8_1_A= $form_data->lobby_lounge_other_public_areas_4_8_1_A_cm; }
	$function_rooms_5_1_1_text = $form_data->function_rooms_5_1_1_text;
	if(($form_data->function_rooms_5_1_1_A_cm) == ''){ $function_rooms_5_1_1_A = $form_data->function_rooms_5_1_1_A; }else{ $function_rooms_5_1_1_A= $form_data->function_rooms_5_1_1_A_cm; }
	if(($form_data->function_rooms_5_1_1_B_cm) == ''){ $function_rooms_5_1_1_B = $form_data->function_rooms_5_1_1_B; }else{ $function_rooms_5_1_1_B= $form_data->function_rooms_5_1_1_B_cm; }
	if(($form_data->function_rooms_5_1_1_C_cm) == ''){ $function_rooms_5_1_1_C = $form_data->function_rooms_5_1_1_C; }else{ $function_rooms_5_1_1_C= $form_data->function_rooms_5_1_1_C_cm; }
	if(($form_data->function_rooms_5_1_1_D_cm) == ''){ $function_rooms_5_1_1_D = $form_data->function_rooms_5_1_1_D; }else{ $function_rooms_5_1_1_D= $form_data->function_rooms_5_1_1_D_cm; }
	if(($form_data->function_rooms_5_1_1_E_cm) == ''){ $function_rooms_5_1_1_E = $form_data->function_rooms_5_1_1_E; }else{ $function_rooms_5_1_1_E= $form_data->function_rooms_5_1_1_E_cm; }
	if(($form_data->function_rooms_5_1_1_F_cm) == ''){ $function_rooms_5_1_1_F = $form_data->function_rooms_5_1_1_F; }else{ $function_rooms_5_1_1_F= $form_data->function_rooms_5_1_1_F_cm; }
	if(($form_data->function_rooms_5_1_1_G_cm) == ''){ $function_rooms_5_1_1_G = $form_data->function_rooms_5_1_1_G; }else{ $function_rooms_5_1_1_G= $form_data->function_rooms_5_1_1_G_cm; }
	if(($form_data->function_rooms_5_1_1_H_cm) == ''){ $function_rooms_5_1_1_H = $form_data->function_rooms_5_1_1_H; }else{ $function_rooms_5_1_1_H= $form_data->function_rooms_5_1_1_H_cm; }
	if(($form_data->function_rooms_5_1_1_I_cm) == ''){ $function_rooms_5_1_1_I = $form_data->function_rooms_5_1_1_I; }else{ $function_rooms_5_1_1_I= $form_data->function_rooms_5_1_1_I_cm; }
	if(($form_data->function_rooms_5_1_1_J_cm) == ''){ $function_rooms_5_1_1_J = $form_data->function_rooms_5_1_1_J; }else{ $function_rooms_5_1_1_J= $form_data->function_rooms_5_1_1_J_cm; }
	if(($form_data->function_rooms_5_1_1_K_cm) == ''){ $function_rooms_5_1_1_K = $form_data->function_rooms_5_1_1_K; }else{ $function_rooms_5_1_1_K= $form_data->function_rooms_5_1_1_K_cm; }
	if(($form_data->function_rooms_5_1_1_L_cm) == ''){ $function_rooms_5_1_1_L = $form_data->function_rooms_5_1_1_L; }else{ $function_rooms_5_1_1_L= $form_data->function_rooms_5_1_1_L_cm; }
	$restaurants_6_1_1_text = $form_data->restaurants_6_1_1_text;
	if(($form_data->restaurants_6_1_1_A_cm) == ''){ $restaurants_6_1_1_A = $form_data->restaurants_6_1_1_A; }else{ $restaurants_6_1_1_A= $form_data->restaurants_6_1_1_A_cm; }
	if(($form_data->restaurants_6_1_1_B_cm) == ''){ $restaurants_6_1_1_B = $form_data->restaurants_6_1_1_B; }else{ $restaurants_6_1_1_B= $form_data->restaurants_6_1_1_B_cm; }
	if(($form_data->restaurants_6_1_1_C_cm) == ''){ $restaurants_6_1_1_C = $form_data->restaurants_6_1_1_C; }else{ $restaurants_6_1_1_C= $form_data->restaurants_6_1_1_C_cm; }
	if(($form_data->restaurants_6_1_1_D_cm) == ''){ $restaurants_6_1_1_D = $form_data->restaurants_6_1_1_D; }else{ $restaurants_6_1_1_D= $form_data->restaurants_6_1_1_D_cm; }
	if(($form_data->restaurants_6_1_1_E_cm) == ''){ $restaurants_6_1_1_E = $form_data->restaurants_6_1_1_E; }else{ $restaurants_6_1_1_E= $form_data->restaurants_6_1_1_E_cm; }
	$restaurants_6_2_1_text = $form_data->restaurants_6_2_1_text;
	if(($form_data->restaurants_6_2_1_A_cm) == ''){ $restaurants_6_2_1_A = $form_data->restaurants_6_2_1_A; }else{ $restaurants_6_2_1_A= $form_data->restaurants_6_2_1_A_cm; }
	if(($form_data->restaurants_6_2_1_B_cm) == ''){ $restaurants_6_2_1_B = $form_data->restaurants_6_2_1_B; }else{ $restaurants_6_2_1_B= $form_data->restaurants_6_2_1_B_cm; }
	if(($form_data->restaurants_6_2_1_C_cm) == ''){ $restaurants_6_2_1_C = $form_data->restaurants_6_2_1_C; }else{ $restaurants_6_2_1_C= $form_data->restaurants_6_2_1_C_cm; }
	if(($form_data->restaurants_6_2_1_D_cm) == ''){ $restaurants_6_2_1_D = $form_data->restaurants_6_2_1_D; }else{ $restaurants_6_2_1_D= $form_data->restaurants_6_2_1_D_cm; }
	if(($form_data->restaurants_6_2_1_E_cm) == ''){ $restaurants_6_2_1_E = $form_data->restaurants_6_2_1_E; }else{ $restaurants_6_2_1_E= $form_data->restaurants_6_2_1_E_cm; }
	if(($form_data->restaurants_6_2_1_F_cm) == ''){ $restaurants_6_2_1_F = $form_data->restaurants_6_2_1_F; }else{ $restaurants_6_2_1_F= $form_data->restaurants_6_2_1_F_cm; }
	if(($form_data->restaurants_6_2_1_G_cm) == ''){ $restaurants_6_2_1_G = $form_data->restaurants_6_2_1_G; }else{ $restaurants_6_2_1_G= $form_data->restaurants_6_2_1_G_cm; }
	if(($form_data->restaurants_6_2_1_H_cm) == ''){ $restaurants_6_2_1_H = $form_data->restaurants_6_2_1_H; }else{ $restaurants_6_2_1_H= $form_data->restaurants_6_2_1_H_cm; }
	if(($form_data->restaurants_6_2_1_I_cm) == ''){ $restaurants_6_2_1_I = $form_data->restaurants_6_2_1_I; }else{ $restaurants_6_2_1_I= $form_data->restaurants_6_2_1_I_cm; }
	if(($form_data->restaurants_6_3_1_A_cm) == ''){ $restaurants_6_3_1_A = $form_data->restaurants_6_3_1_A; }else{ $restaurants_6_3_1_A= $form_data->restaurants_6_3_1_A_cm; }
	if(($form_data->restaurants_6_3_1_B_cm) == ''){ $restaurants_6_3_1_B = $form_data->restaurants_6_3_1_B; }else{ $restaurants_6_3_1_B= $form_data->restaurants_6_3_1_B_cm; }
	if(($form_data->restaurants_6_3_1_C_cm) == ''){ $restaurants_6_3_1_C = $form_data->restaurants_6_3_1_C; }else{ $restaurants_6_3_1_C= $form_data->restaurants_6_3_1_C_cm; }
	if(($form_data->restaurants_6_3_1_D_cm) == ''){ $restaurants_6_3_1_D = $form_data->restaurants_6_3_1_D; }else{ $restaurants_6_3_1_D= $form_data->restaurants_6_3_1_D_cm; }
	if(($form_data->restaurants_6_4_1_A_cm) == ''){ $restaurants_6_4_1_A = $form_data->restaurants_6_4_1_A; }else{ $restaurants_6_4_1_A= $form_data->restaurants_6_4_1_A_cm; }
	if(($form_data->restaurants_6_4_1_B_cm) == ''){ $restaurants_6_4_1_B = $form_data->restaurants_6_4_1_B; }else{ $restaurants_6_4_1_B= $form_data->restaurants_6_4_1_B_cm; }
	if(($form_data->restaurants_6_4_1_C_cm) == ''){ $restaurants_6_4_1_C = $form_data->restaurants_6_4_1_C; }else{ $restaurants_6_4_1_C= $form_data->restaurants_6_4_1_C_cm; }
	if(($form_data->restaurants_6_4_1_D_cm) == ''){ $restaurants_6_4_1_D = $form_data->restaurants_6_4_1_D; }else{ $restaurants_6_4_1_D= $form_data->restaurants_6_4_1_D_cm; }
	if(($form_data->restaurants_6_5_1_A_cm) == ''){ $restaurants_6_5_1_A = $form_data->restaurants_6_5_1_A; }else{ $restaurants_6_5_1_A= $form_data->restaurants_6_5_1_A_cm; }
	if(($form_data->restaurants_6_5_1_B_cm) == ''){ $restaurants_6_5_1_B = $form_data->restaurants_6_5_1_B; }else{ $restaurants_6_5_1_B= $form_data->restaurants_6_5_1_B_cm; }
	if(($form_data->restaurants_6_5_1_C_cm) == ''){ $restaurants_6_5_1_C = $form_data->restaurants_6_5_1_C; }else{ $restaurants_6_5_1_C= $form_data->restaurants_6_5_1_C_cm; }
	if(($form_data->restaurants_6_5_1_D_cm) == ''){ $restaurants_6_5_1_D = $form_data->restaurants_6_5_1_D; }else{ $restaurants_6_5_1_D= $form_data->restaurants_6_5_1_D_cm; }
	if(($form_data->restaurants_6_5_1_E_cm) == ''){ $restaurants_6_5_1_E = $form_data->restaurants_6_5_1_E; }else{ $restaurants_6_5_1_E= $form_data->restaurants_6_5_1_E_cm; }
	if(($form_data->restaurants_6_5_1_F_cm) == ''){ $restaurants_6_5_1_F = $form_data->restaurants_6_5_1_F; }else{ $restaurants_6_5_1_F= $form_data->restaurants_6_5_1_F_cm; }
	if(($form_data->restaurants_6_5_1_G_cm) == ''){ $restaurants_6_5_1_G = $form_data->restaurants_6_5_1_G; }else{ $restaurants_6_5_1_G= $form_data->restaurants_6_5_1_G_cm; }
	if(($form_data->restaurants_6_5_1_H_cm) == ''){ $restaurants_6_5_1_H = $form_data->restaurants_6_5_1_H; }else{ $restaurants_6_5_1_H= $form_data->restaurants_6_5_1_H_cm; }
	if(($form_data->restaurants_6_6_1_A_cm) == ''){ $restaurants_6_6_1_A = $form_data->restaurants_6_6_1_A; }else{ $restaurants_6_6_1_A= $form_data->restaurants_6_6_1_A_cm; }
	if(($form_data->restaurants_6_6_1_B_cm) == ''){ $restaurants_6_6_1_B = $form_data->restaurants_6_6_1_B; }else{ $restaurants_6_6_1_B= $form_data->restaurants_6_6_1_B_cm; }
	if(($form_data->restaurants_6_6_1_C_cm) == ''){ $restaurants_6_6_1_C = $form_data->restaurants_6_6_1_C; }else{ $restaurants_6_6_1_C= $form_data->restaurants_6_6_1_C_cm; }
	if(($form_data->restaurants_6_6_1_D_cm) == ''){ $restaurants_6_6_1_D = $form_data->restaurants_6_6_1_D; }else{ $restaurants_6_6_1_D= $form_data->restaurants_6_6_1_D_cm; }
	if(($form_data->restaurants_6_6_1_E_cm) == ''){ $restaurants_6_6_1_E = $form_data->restaurants_6_6_1_E; }else{ $restaurants_6_6_1_E= $form_data->restaurants_6_6_1_E_cm; }
	if(($form_data->restaurants_6_6_1_F_a_cm) == ''){ if($form_data->restaurants_6_6_1_F_a == ''){ $restaurants_6_6_1_F_a = ''; }else{ $restaurants_6_6_1_F_a = 2; } }else{ $restaurants_6_6_1_F_a= $form_data->restaurants_6_6_1_F_a_cm; }
	if(($form_data->restaurants_6_6_1_F_b_cm) == ''){ if($form_data->restaurants_6_6_1_F_b == ''){ $restaurants_6_6_1_F_b = ''; }else{ $restaurants_6_6_1_F_b = 2; } }else{ $restaurants_6_6_1_F_b= $form_data->restaurants_6_6_1_F_b_cm; }
	if(($form_data->restaurants_6_6_1_F_c_cm) == ''){ if($form_data->restaurants_6_6_1_F_c == ''){ $restaurants_6_6_1_F_c = ''; }else{ $restaurants_6_6_1_F_c = 2; } }else{ $restaurants_6_6_1_F_c= $form_data->restaurants_6_6_1_F_c_cm; }
	if(($form_data->restaurants_6_6_1_F_d_cm) == ''){ if($form_data->restaurants_6_6_1_F_d == ''){ $restaurants_6_6_1_F_d = ''; }else{ $restaurants_6_6_1_F_d = 2; } }else{ $restaurants_6_6_1_F_d= $form_data->restaurants_6_6_1_F_d_cm; }
	if(($form_data->restaurants_6_6_1_G_cm) == ''){ $restaurants_6_6_1_G = $form_data->restaurants_6_6_1_G; }else{ $restaurants_6_6_1_G= $form_data->restaurants_6_6_1_G_cm; }
	if(($form_data->restaurants_6_6_1_H_a_cm) == ''){ if($form_data->restaurants_6_6_1_H_a == ''){ $restaurants_6_6_1_H_a = ''; }else{ $restaurants_6_6_1_H_a = 2; } }else{ $restaurants_6_6_1_H_a= $form_data->restaurants_6_6_1_H_a_cm; }
	if(($form_data->restaurants_6_6_1_H_b_cm) == ''){ if($form_data->restaurants_6_6_1_H_b == ''){ $restaurants_6_6_1_H_b = ''; }else{ $restaurants_6_6_1_H_b = 3; } }else{ $restaurants_6_6_1_H_b= $form_data->restaurants_6_6_1_H_b_cm; }
	if(($form_data->restaurants_6_6_1_H_c_cm) == ''){ if($form_data->restaurants_6_6_1_H_c == ''){ $restaurants_6_6_1_H_c = ''; }else{ $restaurants_6_6_1_H_c = 2; } }else{ $restaurants_6_6_1_H_c= $form_data->restaurants_6_6_1_H_c_cm; }
	if(($form_data->restaurants_6_6_1_I_cm) == ''){ $restaurants_6_6_1_I = $form_data->restaurants_6_6_1_I; }else{ $restaurants_6_6_1_I= $form_data->restaurants_6_6_1_I_cm; }
	if(($form_data->restaurants_6_6_1_J_cm) == ''){ $restaurants_6_6_1_J = $form_data->restaurants_6_6_1_J; }else{ $restaurants_6_6_1_J= $form_data->restaurants_6_6_1_J_cm; }
	if(($form_data->restaurants_6_7_1_A_cm) == ''){ $restaurants_6_7_1_A = $form_data->restaurants_6_7_1_A; }else{ $restaurants_6_7_1_A= $form_data->restaurants_6_7_1_A_cm; }
	if(($form_data->restaurants_6_7_1_B_cm) == ''){ $restaurants_6_7_1_B = $form_data->restaurants_6_7_1_B; }else{ $restaurants_6_7_1_B= $form_data->restaurants_6_7_1_B_cm; }
	if(($form_data->restaurants_6_7_1_C_cm) == ''){ $restaurants_6_7_1_C = $form_data->restaurants_6_7_1_C; }else{ $restaurants_6_7_1_C= $form_data->restaurants_6_7_1_C_cm; }
	if(($form_data->restaurants_6_8_1_A_cm) == ''){ $restaurants_6_8_1_A = $form_data->restaurants_6_8_1_A; }else{ $restaurants_6_8_1_A= $form_data->restaurants_6_8_1_A_cm; }
	if(($form_data->restaurants_6_8_1_B_cm) == ''){ $restaurants_6_8_1_B = $form_data->restaurants_6_8_1_B; }else{ $restaurants_6_8_1_B= $form_data->restaurants_6_8_1_B_cm; }
	$bar_7_1_1_text = $form_data->bar_7_1_1_text;
	if(($form_data->bar_7_1_1_A_cm) == ''){ $bar_7_1_1_A = $form_data->bar_7_1_1_A; }else{ $bar_7_1_1_A= $form_data->bar_7_1_1_A_cm; }
	if(($form_data->bar_7_1_1_B_cm) == ''){ $bar_7_1_1_B = $form_data->bar_7_1_1_B; }else{ $bar_7_1_1_B= $form_data->bar_7_1_1_B_cm; }
	if(($form_data->bar_7_1_1_C_cm) == ''){ $bar_7_1_1_C = $form_data->bar_7_1_1_C; }else{ $bar_7_1_1_C= $form_data->bar_7_1_1_C_cm; }
	if(($form_data->bar_7_1_1_D_a_cm) == ''){ if($form_data->bar_7_1_1_D_a == ''){ $bar_7_1_1_D_a = ''; }else{ $bar_7_1_1_D_a = 2; } }else{ $bar_7_1_1_D_a= $form_data->bar_7_1_1_D_a_cm; }
	if(($form_data->bar_7_1_1_D_b_cm) == ''){ if($form_data->bar_7_1_1_D_b == ''){ $bar_7_1_1_D_b = ''; }else{ $bar_7_1_1_D_b = 2; } }else{ $bar_7_1_1_D_b= $form_data->bar_7_1_1_D_b_cm; }
	if(($form_data->bar_7_1_1_D_c_cm) == ''){ if($form_data->bar_7_1_1_D_c == ''){ $bar_7_1_1_D_c = ''; }else{ $bar_7_1_1_D_c = 3; } }else{ $bar_7_1_1_D_c= $form_data->bar_7_1_1_D_c_cm; }
	if(($form_data->bar_7_1_1_E_cm) == ''){ $bar_7_1_1_E = $form_data->bar_7_1_1_E; }else{ $bar_7_1_1_E= $form_data->bar_7_1_1_E_cm; }
	if(($form_data->bar_7_1_1_F_cm) == ''){ $bar_7_1_1_F = $form_data->bar_7_1_1_F; }else{ $bar_7_1_1_F= $form_data->bar_7_1_1_F_cm; }
	if(($form_data->bar_7_1_1_G_cm) == ''){ $bar_7_1_1_G = $form_data->bar_7_1_1_G; }else{ $bar_7_1_1_G= $form_data->bar_7_1_1_G_cm; }
	$bar_7_2_1_text = $form_data->bar_7_2_1_text;
	if(($form_data->bar_7_2_1_A_cm) == ''){ $bar_7_2_1_A = $form_data->bar_7_2_1_A; }else{ $bar_7_2_1_A= $form_data->bar_7_2_1_A_cm; }
	if(($form_data->bar_7_2_1_B_cm) == ''){ $bar_7_2_1_B = $form_data->bar_7_2_1_B; }else{ $bar_7_2_1_B= $form_data->bar_7_2_1_B_cm; }
	if(($form_data->bar_7_2_1_C_cm) == ''){ $bar_7_2_1_C = $form_data->bar_7_2_1_C; }else{ $bar_7_2_1_C= $form_data->bar_7_2_1_C_cm; }
	if(($form_data->bar_7_2_1_D_cm) == ''){ $bar_7_2_1_D = $form_data->bar_7_2_1_D; }else{ $bar_7_2_1_D= $form_data->bar_7_2_1_D_cm; }
	if(($form_data->bar_7_2_1_E_cm) == ''){ $bar_7_2_1_E = $form_data->bar_7_2_1_E; }else{ $bar_7_2_1_E= $form_data->bar_7_2_1_E_cm; }
	if(($form_data->bar_7_2_1_F_cm) == ''){ $bar_7_2_1_F = $form_data->bar_7_2_1_F; }else{ $bar_7_2_1_F= $form_data->bar_7_2_1_F_cm; }
	if(($form_data->bar_7_2_1_G_cm) == ''){ $bar_7_2_1_G = $form_data->bar_7_2_1_G; }else{ $bar_7_2_1_G= $form_data->bar_7_2_1_G_cm; }
	if(($form_data->bar_7_2_1_H_cm) == ''){ $bar_7_2_1_H = $form_data->bar_7_2_1_H; }else{ $bar_7_2_1_H= $form_data->bar_7_2_1_H_cm; }
	if(($form_data->bar_7_2_1_I_cm) == ''){ $bar_7_2_1_I = $form_data->bar_7_2_1_I; }else{ $bar_7_2_1_I= $form_data->bar_7_2_1_I_cm; }
	if(($form_data->bar_7_3_1_A_cm) == ''){ $bar_7_3_1_A = $form_data->bar_7_3_1_A; }else{ $bar_7_3_1_A= $form_data->bar_7_3_1_A_cm; }
	if(($form_data->bar_7_3_1_B_cm) == ''){ $bar_7_3_1_B = $form_data->bar_7_3_1_B; }else{ $bar_7_3_1_B= $form_data->bar_7_3_1_B_cm; }
	if(($form_data->bar_7_3_1_C_cm) == ''){ $bar_7_3_1_C = $form_data->bar_7_3_1_C; }else{ $bar_7_3_1_C= $form_data->bar_7_3_1_C_cm; }
	if(($form_data->bar_7_3_1_D_cm) == ''){ $bar_7_3_1_D = $form_data->bar_7_3_1_D; }else{ $bar_7_3_1_D= $form_data->bar_7_3_1_D_cm; }
	if(($form_data->bar_7_3_1_E_cm) == ''){ $bar_7_3_1_E = $form_data->bar_7_3_1_E; }else{ $bar_7_3_1_E= $form_data->bar_7_3_1_E_cm; }
	if(($form_data->bar_7_3_1_F_cm) == ''){ $bar_7_3_1_F = $form_data->bar_7_3_1_F; }else{ $bar_7_3_1_F= $form_data->bar_7_3_1_F_cm; }
	$bar_7_4_1_text = $form_data->bar_7_4_1_text;
	if(($form_data->bar_7_4_1_A_cm) == ''){ $bar_7_4_1_A = $form_data->bar_7_4_1_A; }else{ $bar_7_4_1_A= $form_data->bar_7_4_1_A_cm; }
	if(($form_data->bar_7_4_1_B_cm) == ''){ $bar_7_4_1_B = $form_data->bar_7_4_1_B; }else{ $bar_7_4_1_B= $form_data->bar_7_4_1_B_cm; }
	if(($form_data->bar_7_4_1_C_cm) == ''){ $bar_7_4_1_C = $form_data->bar_7_4_1_C; }else{ $bar_7_4_1_C= $form_data->bar_7_4_1_C_cm; }
	if(($form_data->bar_7_4_1_D_cm) == ''){ $bar_7_4_1_D = $form_data->bar_7_4_1_D; }else{ $bar_7_4_1_D= $form_data->bar_7_4_1_D_cm; }
	if(($form_data->bar_7_4_1_E_a_cm) == ''){ if($form_data->bar_7_4_1_E_a == ''){ $bar_7_4_1_E_a = ''; }else{ $bar_7_4_1_E_a = 1; } }else{ $bar_7_4_1_E_a= $form_data->bar_7_4_1_E_a_cm; }
	if(($form_data->bar_7_4_1_E_b_cm) == ''){ if($form_data->bar_7_4_1_E_b == ''){ $bar_7_4_1_E_b = ''; }else{ $bar_7_4_1_E_b = 1; } }else{ $bar_7_4_1_E_b= $form_data->bar_7_4_1_E_b_cm; }
	if(($form_data->bar_7_4_1_E_c_cm) == ''){ if($form_data->bar_7_4_1_E_c == ''){ $bar_7_4_1_E_c = ''; }else{ $bar_7_4_1_E_c = 1; } }else{ $bar_7_4_1_E_c= $form_data->bar_7_4_1_E_c_cm; }
	if(($form_data->bar_7_4_1_E_d_cm) == ''){ if($form_data->bar_7_4_1_E_d == ''){ $bar_7_4_1_E_d = ''; }else{ $bar_7_4_1_E_d = 1; } }else{ $bar_7_4_1_E_d= $form_data->bar_7_4_1_E_d_cm; }
	if(($form_data->bar_7_4_1_E_e_cm) == ''){ if($form_data->bar_7_4_1_E_e == ''){ $bar_7_4_1_E_e = ''; }else{ $bar_7_4_1_E_e = 1; } }else{ $bar_7_4_1_E_e= $form_data->bar_7_4_1_E_e_cm; }
	if(($form_data->bar_7_4_1_E_f_cm) == ''){ if($form_data->bar_7_4_1_E_f == ''){ $bar_7_4_1_E_f = ''; }else{ $bar_7_4_1_E_f = 1; } }else{ $bar_7_4_1_E_f= $form_data->bar_7_4_1_E_f_cm; }
	if(($form_data->bar_7_4_1_E_g_cm) == ''){ if($form_data->bar_7_4_1_E_g == ''){ $bar_7_4_1_E_g = ''; }else{ $bar_7_4_1_E_g = 1; } }else{ $bar_7_4_1_E_g= $form_data->bar_7_4_1_E_g_cm; }
	if(($form_data->bar_7_4_1_E_h_cm) == ''){ if($form_data->bar_7_4_1_E_h == ''){ $bar_7_4_1_E_h = ''; }else{ $bar_7_4_1_E_h = 1; } }else{ $bar_7_4_1_E_h= $form_data->bar_7_4_1_E_h_cm; }
	if(($form_data->bar_7_4_1_F_cm) == ''){ $bar_7_4_1_F = $form_data->bar_7_4_1_F; }else{ $bar_7_4_1_F= $form_data->bar_7_4_1_F_cm; }
	if(($form_data->bar_7_4_1_G_cm) == ''){ $bar_7_4_1_G = $form_data->bar_7_4_1_G; }else{ $bar_7_4_1_G= $form_data->bar_7_4_1_G_cm; }
	if(($form_data->bar_7_4_1_H_cm) == ''){ $bar_7_4_1_H = $form_data->bar_7_4_1_H; }else{ $bar_7_4_1_H= $form_data->bar_7_4_1_H_cm; }
	if(($form_data->bar_7_4_1_I_cm) == ''){ $bar_7_4_1_I = $form_data->bar_7_4_1_I; }else{ $bar_7_4_1_I= $form_data->bar_7_4_1_I_cm; }
	$bar_7_5_1_text = $form_data->bar_7_5_1_text;
	if(($form_data->bar_7_5_1_A_cm) == ''){ $bar_7_5_1_A = $form_data->bar_7_5_1_A; }else{ $bar_7_5_1_A= $form_data->bar_7_5_1_A_cm; }
	if(($form_data->bar_7_5_1_B_cm) == ''){ $bar_7_5_1_B = $form_data->bar_7_5_1_B; }else{ $bar_7_5_1_B= $form_data->bar_7_5_1_B_cm; }
	if(($form_data->bar_7_5_1_C_cm) == ''){ $bar_7_5_1_C = $form_data->bar_7_5_1_C; }else{ $bar_7_5_1_C= $form_data->bar_7_5_1_C_cm; }
	$bar_7_6_1_text = $form_data->bar_7_6_1_text;
	if(($form_data->bar_7_6_1_A_cm) == ''){ $bar_7_6_1_A = $form_data->bar_7_6_1_A; }else{ $bar_7_6_1_A= $form_data->bar_7_6_1_A_cm; }
	if(($form_data->bar_7_6_1_B_cm) == ''){ $bar_7_6_1_B = $form_data->bar_7_6_1_B; }else{ $bar_7_6_1_B= $form_data->bar_7_6_1_B_cm; }
	if(($form_data->bar_7_6_1_C_cm) == ''){ $bar_7_6_1_C = $form_data->bar_7_6_1_C; }else{ $bar_7_6_1_C= $form_data->bar_7_6_1_C_cm; }
	$bar_7_7_1_text = $form_data->bar_7_7_1_text;
	if(($form_data->bar_7_7_1_A_cm) == ''){ $bar_7_7_1_A = $form_data->bar_7_7_1_A; }else{ $bar_7_7_1_A= $form_data->bar_7_7_1_A_cm; }
	if(($form_data->bar_7_7_1_B_cm) == ''){ $bar_7_7_1_B = $form_data->bar_7_7_1_B; }else{ $bar_7_7_1_B= $form_data->bar_7_7_1_B_cm; }
	if(($form_data->bar_7_7_1_C_cm) == ''){ $bar_7_7_1_C = $form_data->bar_7_7_1_C; }else{ $bar_7_7_1_C= $form_data->bar_7_7_1_C_cm; }
	$kitchen_8_1_1_text = $form_data->kitchen_8_1_1_text;
	if(($form_data->kitchen_8_1_1_A_cm) == ''){ $kitchen_8_1_1_A = $form_data->kitchen_8_1_1_A; }else{ $kitchen_8_1_1_A= $form_data->kitchen_8_1_1_A_cm; }
	$kitchen_8_2_1_text = $form_data->kitchen_8_2_1_text;
	if(($form_data->kitchen_8_2_1_A_cm) == ''){ $kitchen_8_2_1_A = $form_data->kitchen_8_2_1_A; }else{ $kitchen_8_2_1_A= $form_data->kitchen_8_2_1_A_cm; }
	if(($form_data->kitchen_8_2_1_B_cm) == ''){ $kitchen_8_2_1_B = $form_data->kitchen_8_2_1_B; }else{ $kitchen_8_2_1_B= $form_data->kitchen_8_2_1_B_cm; }
	if(($form_data->kitchen_8_2_1_C_cm) == ''){ $kitchen_8_2_1_C = $form_data->kitchen_8_2_1_C; }else{ $kitchen_8_2_1_C= $form_data->kitchen_8_2_1_C_cm; }
	$kitchen_8_3_1_text = $form_data->kitchen_8_3_1_text;
	if(($form_data->kitchen_8_3_1_A_cm) == ''){ $kitchen_8_3_1_A = $form_data->kitchen_8_3_1_A; }else{ $kitchen_8_3_1_A= $form_data->kitchen_8_3_1_A_cm; }
	if(($form_data->kitchen_8_3_1_B_cm) == ''){ $kitchen_8_3_1_B = $form_data->kitchen_8_3_1_B; }else{ $kitchen_8_3_1_B= $form_data->kitchen_8_3_1_B_cm; }
	if(($form_data->kitchen_8_3_1_C_cm) == ''){ $kitchen_8_3_1_C = $form_data->kitchen_8_3_1_C; }else{ $kitchen_8_3_1_C= $form_data->kitchen_8_3_1_C_cm; }
	$kitchen_8_4_1_text = $form_data->kitchen_8_4_1_text;
	if(($form_data->kitchen_8_4_1_A_cm) == ''){ $kitchen_8_4_1_A = $form_data->kitchen_8_4_1_A; }else{ $kitchen_8_4_1_A= $form_data->kitchen_8_4_1_A_cm; }
	if(($form_data->kitchen_8_4_1_B_cm) == ''){ $kitchen_8_4_1_B = $form_data->kitchen_8_4_1_B; }else{ $kitchen_8_4_1_B= $form_data->kitchen_8_4_1_B_cm; }
	if(($form_data->kitchen_8_4_1_C_cm) == ''){ $kitchen_8_4_1_C = $form_data->kitchen_8_4_1_C; }else{ $kitchen_8_4_1_C= $form_data->kitchen_8_4_1_C_cm; }
	if(($form_data->kitchen_8_4_1_D_cm) == ''){ $kitchen_8_4_1_D = $form_data->kitchen_8_4_1_D; }else{ $kitchen_8_4_1_D= $form_data->kitchen_8_4_1_D_cm; }
	$kitchen_8_5_1_text = $form_data->kitchen_8_5_1_text;
	if(($form_data->kitchen_8_5_1_A_cm) == ''){ $kitchen_8_5_1_A = $form_data->kitchen_8_5_1_A; }else{ $kitchen_8_5_1_A= $form_data->kitchen_8_5_1_A_cm; }
	if(($form_data->kitchen_8_5_1_B_cm) == ''){ $kitchen_8_5_1_B = $form_data->kitchen_8_5_1_B; }else{ $kitchen_8_5_1_B= $form_data->kitchen_8_5_1_B_cm; }
	if(($form_data->kitchen_8_5_1_C_cm) == ''){ $kitchen_8_5_1_C = $form_data->kitchen_8_5_1_C; }else{ $kitchen_8_5_1_C= $form_data->kitchen_8_5_1_C_cm; }
	if(($form_data->kitchen_8_5_1_D_cm) == ''){ $kitchen_8_5_1_D = $form_data->kitchen_8_5_1_D; }else{ $kitchen_8_5_1_D= $form_data->kitchen_8_5_1_D_cm; }
	if(($form_data->kitchen_8_5_1_E_cm) == ''){ $kitchen_8_5_1_E = $form_data->kitchen_8_5_1_E; }else{ $kitchen_8_5_1_E= $form_data->kitchen_8_5_1_E_cm; }
	if(($form_data->kitchen_8_5_1_F_cm) == ''){ $kitchen_8_5_1_F = $form_data->kitchen_8_5_1_F; }else{ $kitchen_8_5_1_F= $form_data->kitchen_8_5_1_F_cm; }
	if(($form_data->kitchen_8_5_1_G_cm) == ''){ $kitchen_8_5_1_G = $form_data->kitchen_8_5_1_G; }else{ $kitchen_8_5_1_G= $form_data->kitchen_8_5_1_G_cm; }
	if(($form_data->kitchen_8_5_1_H_cm) == ''){ $kitchen_8_5_1_H = $form_data->kitchen_8_5_1_H; }else{ $kitchen_8_5_1_H= $form_data->kitchen_8_5_1_H_cm; }
	if(($form_data->kitchen_8_5_1_I_cm) == ''){ $kitchen_8_5_1_I = $form_data->kitchen_8_5_1_I; }else{ $kitchen_8_5_1_I= $form_data->kitchen_8_5_1_I_cm; }
	$kitchen_8_6_1_text = $form_data->kitchen_8_6_1_text;
	if(($form_data->kitchen_8_6_1_A_cm) == ''){ $kitchen_8_6_1_A = $form_data->kitchen_8_6_1_A; }else{ $kitchen_8_6_1_A= $form_data->kitchen_8_6_1_A_cm; }
	if(($form_data->kitchen_8_6_1_B_cm) == ''){ $kitchen_8_6_1_B = $form_data->kitchen_8_6_1_B; }else{ $kitchen_8_6_1_B= $form_data->kitchen_8_6_1_B_cm; }
	if(($form_data->kitchen_8_6_1_C_cm) == ''){ $kitchen_8_6_1_C = $form_data->kitchen_8_6_1_C; }else{ $kitchen_8_6_1_C= $form_data->kitchen_8_6_1_C_cm; }
	if(($form_data->kitchen_8_6_1_D_cm) == ''){ $kitchen_8_6_1_D = $form_data->kitchen_8_6_1_D; }else{ $kitchen_8_6_1_D= $form_data->kitchen_8_6_1_D_cm; }
	if(($form_data->kitchen_8_6_1_E_cm) == ''){ $kitchen_8_6_1_E = $form_data->kitchen_8_6_1_E; }else{ $kitchen_8_6_1_E= $form_data->kitchen_8_6_1_E_cm; }
	if(($form_data->kitchen_8_6_1_F_cm) == ''){ $kitchen_8_6_1_F = $form_data->kitchen_8_6_1_F; }else{ $kitchen_8_6_1_F= $form_data->kitchen_8_6_1_F_cm; }
	if(($form_data->kitchen_8_6_1_G_cm) == ''){ $kitchen_8_6_1_G = $form_data->kitchen_8_6_1_G; }else{ $kitchen_8_6_1_G= $form_data->kitchen_8_6_1_G_cm; }
	$kitchen_8_7_1_text = $form_data->kitchen_8_7_1_text;
	if(($form_data->kitchen_8_7_1_A_cm) == ''){ $kitchen_8_7_1_A = $form_data->kitchen_8_7_1_A; }else{ $kitchen_8_7_1_A= $form_data->kitchen_8_7_1_A_cm; }
	if(($form_data->kitchen_8_7_1_B_cm) == ''){ $kitchen_8_7_1_B = $form_data->kitchen_8_7_1_B; }else{ $kitchen_8_7_1_B= $form_data->kitchen_8_7_1_B_cm; }
	if(($form_data->kitchen_8_7_1_C_cm) == ''){ $kitchen_8_7_1_C = $form_data->kitchen_8_7_1_C; }else{ $kitchen_8_7_1_C= $form_data->kitchen_8_7_1_C_cm; }
	if(($form_data->kitchen_8_7_1_D_cm) == ''){ $kitchen_8_7_1_D = $form_data->kitchen_8_7_1_D; }else{ $kitchen_8_7_1_D= $form_data->kitchen_8_7_1_D_cm; }
	if(($form_data->kitchen_8_7_1_E_cm) == ''){ $kitchen_8_7_1_E = $form_data->kitchen_8_7_1_E; }else{ $kitchen_8_7_1_E= $form_data->kitchen_8_7_1_E_cm; }
	$kitchen_8_8_1_text = $form_data->kitchen_8_8_1_text;
	if(($form_data->kitchen_8_8_1_A_cm) == ''){ $kitchen_8_8_1_A = $form_data->kitchen_8_8_1_A; }else{ $kitchen_8_8_1_A= $form_data->kitchen_8_8_1_A_cm; }
	if(($form_data->kitchen_8_8_1_B_cm) == ''){ $kitchen_8_8_1_B = $form_data->kitchen_8_8_1_B; }else{ $kitchen_8_8_1_B= $form_data->kitchen_8_8_1_B_cm; }
	if(($form_data->kitchen_8_8_1_C_a_cm) == ''){ if($form_data->kitchen_8_8_1_C_a == ''){ $kitchen_8_8_1_C_a = ''; }else{ $kitchen_8_8_1_C_a = 3; } }else{ $kitchen_8_8_1_C_a= $form_data->kitchen_8_8_1_C_a_cm; }
	if(($form_data->kitchen_8_8_1_C_b_cm) == ''){ if($form_data->kitchen_8_8_1_C_b == ''){ $kitchen_8_8_1_C_b = ''; }else{ $kitchen_8_8_1_C_b = 3; } }else{ $kitchen_8_8_1_C_b= $form_data->kitchen_8_8_1_C_b_cm; }
	if(($form_data->kitchen_8_8_1_D_cm) == ''){ $kitchen_8_8_1_D = $form_data->kitchen_8_8_1_D; }else{ $kitchen_8_8_1_D= $form_data->kitchen_8_8_1_D_cm; }
	if(($form_data->kitchen_8_8_1_E_cm) == ''){ $kitchen_8_8_1_E = $form_data->kitchen_8_8_1_E; }else{ $kitchen_8_8_1_E= $form_data->kitchen_8_8_1_E_cm; }
	if(($form_data->kitchen_8_8_1_F_cm) == ''){ $kitchen_8_8_1_F = $form_data->kitchen_8_8_1_F; }else{ $kitchen_8_8_1_F= $form_data->kitchen_8_8_1_F_cm; }
	if(($form_data->kitchen_8_8_1_G_cm) == ''){ $kitchen_8_8_1_G = $form_data->kitchen_8_8_1_G; }else{ $kitchen_8_8_1_G= $form_data->kitchen_8_8_1_G_cm; }
	if(($form_data->kitchen_8_8_1_H_cm) == ''){ $kitchen_8_8_1_H = $form_data->kitchen_8_8_1_H; }else{ $kitchen_8_8_1_H= $form_data->kitchen_8_8_1_H_cm; }
	$kitchen_8_9_1_text = $form_data->kitchen_8_9_1_text;
	if(($form_data->kitchen_8_9_1_A_cm) == ''){ $kitchen_8_9_1_A = $form_data->kitchen_8_9_1_A; }else{ $kitchen_8_9_1_A= $form_data->kitchen_8_9_1_A_cm; }
	if(($form_data->kitchen_8_9_1_B_cm) == ''){ $kitchen_8_9_1_B = $form_data->kitchen_8_9_1_B; }else{ $kitchen_8_9_1_B= $form_data->kitchen_8_9_1_B_cm; }
	if(($form_data->kitchen_8_9_1_C_cm) == ''){ $kitchen_8_9_1_C = $form_data->kitchen_8_9_1_C; }else{ $kitchen_8_9_1_C= $form_data->kitchen_8_9_1_C_cm; }
	if(($form_data->kitchen_8_9_1_D_cm) == ''){ $kitchen_8_9_1_D = $form_data->kitchen_8_9_1_D; }else{ $kitchen_8_9_1_D= $form_data->kitchen_8_9_1_D_cm; }
	if(($form_data->kitchen_8_9_1_E_cm) == ''){ $kitchen_8_9_1_E = $form_data->kitchen_8_9_1_E; }else{ $kitchen_8_9_1_E= $form_data->kitchen_8_9_1_E_cm; }
	$kitchen_8_10_1_text = $form_data->kitchen_8_10_1_text;
	if(($form_data->kitchen_8_10_1_A_a_cm) == ''){ if($form_data->kitchen_8_10_1_A_a == ''){ $kitchen_8_10_1_A_a = ''; }else{ $kitchen_8_10_1_A_a = 2; } }else{ $kitchen_8_10_1_A_a= $form_data->kitchen_8_10_1_A_a_cm; }
	if(($form_data->kitchen_8_10_1_A_b_cm) == ''){ if($form_data->kitchen_8_10_1_A_b == ''){ $kitchen_8_10_1_A_b = ''; }else{ $kitchen_8_10_1_A_b = 2; } }else{ $kitchen_8_10_1_A_b= $form_data->kitchen_8_10_1_A_b_cm; }
	if(($form_data->kitchen_8_10_1_A_c_cm) == ''){ if($form_data->kitchen_8_10_1_A_c == ''){ $kitchen_8_10_1_A_c = ''; }else{ $kitchen_8_10_1_A_c = 2; } }else{ $kitchen_8_10_1_A_c= $form_data->kitchen_8_10_1_A_c_cm; }
	if(($form_data->kitchen_8_10_1_A_d_cm) == ''){ if($form_data->kitchen_8_10_1_A_d == ''){ $kitchen_8_10_1_A_d = ''; }else{ $kitchen_8_10_1_A_d = 2; } }else{ $kitchen_8_10_1_A_d= $form_data->kitchen_8_10_1_A_d_cm; }
	if(($form_data->kitchen_8_10_1_B_cm) == ''){ $kitchen_8_10_1_B = $form_data->kitchen_8_10_1_B; }else{ $kitchen_8_10_1_B= $form_data->kitchen_8_10_1_B_cm; }
	if(($form_data->kitchen_8_10_1_C_cm) == ''){ $kitchen_8_10_1_C = $form_data->kitchen_8_10_1_C; }else{ $kitchen_8_10_1_C= $form_data->kitchen_8_10_1_C_cm; }
	if(($form_data->kitchen_8_10_1_D_cm) == ''){ $kitchen_8_10_1_D = $form_data->kitchen_8_10_1_D; }else{ $kitchen_8_10_1_D= $form_data->kitchen_8_10_1_D_cm; }
	if(($form_data->kitchen_8_10_1_E_cm) == ''){ $kitchen_8_10_1_E = $form_data->kitchen_8_10_1_E; }else{ $kitchen_8_10_1_E= $form_data->kitchen_8_10_1_E_cm; }
	if(($form_data->kitchen_8_10_1_F_cm) == ''){ $kitchen_8_10_1_F = $form_data->kitchen_8_10_1_F; }else{ $kitchen_8_10_1_F= $form_data->kitchen_8_10_1_F_cm; }
	if(($form_data->kitchen_8_10_1_G_cm) == ''){ $kitchen_8_10_1_G = $form_data->kitchen_8_10_1_G; }else{ $kitchen_8_10_1_G= $form_data->kitchen_8_10_1_G_cm; }
	$kitchen_8_11_1_text = $form_data->kitchen_8_11_1_text;
	if(($form_data->kitchen_8_11_1_A_a_cm) == ''){ if($form_data->kitchen_8_11_1_A_a == ''){ $kitchen_8_11_1_A_a = ''; }else{ $kitchen_8_11_1_A_a = 1; } }else{ $kitchen_8_11_1_A_a= $form_data->kitchen_8_11_1_A_a_cm; }
	if(($form_data->kitchen_8_11_1_A_b_cm) == ''){ if($form_data->kitchen_8_11_1_A_b == ''){ $kitchen_8_11_1_A_b = ''; }else{ $kitchen_8_11_1_A_b = 2; } }else{ $kitchen_8_11_1_A_b= $form_data->kitchen_8_11_1_A_b_cm; }
	if(($form_data->kitchen_8_11_1_A_c_cm) == ''){ if($form_data->kitchen_8_11_1_A_c == ''){ $kitchen_8_11_1_A_c = ''; }else{ $kitchen_8_11_1_A_c = 3; } }else{ $kitchen_8_11_1_A_c= $form_data->kitchen_8_11_1_A_c_cm; }
	if(($form_data->kitchen_8_11_1_B_cm) == ''){ $kitchen_8_11_1_B = $form_data->kitchen_8_11_1_B; }else{ $kitchen_8_11_1_B= $form_data->kitchen_8_11_1_B_cm; }
	if(($form_data->kitchen_8_11_1_C_a_cm) == ''){ if($form_data->kitchen_8_11_1_C_a == ''){ $kitchen_8_11_1_C_a = ''; }else{ $kitchen_8_11_1_C_a = 2; } }else{ $kitchen_8_11_1_C_a= $form_data->kitchen_8_11_1_C_a_cm; }
	if(($form_data->kitchen_8_11_1_C_b_cm) == ''){ if($form_data->kitchen_8_11_1_C_b == ''){ $kitchen_8_11_1_C_b = ''; }else{ $kitchen_8_11_1_C_b = 1; } }else{ $kitchen_8_11_1_C_b= $form_data->kitchen_8_11_1_C_b_cm; }
	if(($form_data->kitchen_8_11_1_C_c_cm) == ''){ if($form_data->kitchen_8_11_1_C_c == ''){ $kitchen_8_11_1_C_c = ''; }else{ $kitchen_8_11_1_C_c = 1; } }else{ $kitchen_8_11_1_C_c= $form_data->kitchen_8_11_1_C_c_cm; }
	if(($form_data->kitchen_8_11_1_C_d_cm) == ''){ if($form_data->kitchen_8_11_1_C_d == ''){ $kitchen_8_11_1_C_d = ''; }else{ $kitchen_8_11_1_C_d = 2; } }else{ $kitchen_8_11_1_C_d= $form_data->kitchen_8_11_1_C_d_cm; }
	if(($form_data->kitchen_8_11_1_C_e_cm) == ''){ if($form_data->kitchen_8_11_1_C_e == ''){ $kitchen_8_11_1_C_e = ''; }else{ $kitchen_8_11_1_C_e = 2; } }else{ $kitchen_8_11_1_C_e= $form_data->kitchen_8_11_1_C_e_cm; }
	if(($form_data->kitchen_8_11_1_D_a_cm) == ''){ if($form_data->kitchen_8_11_1_D_a == ''){ $kitchen_8_11_1_D_a = ''; }else{ $kitchen_8_11_1_D_a = 2; } }else{ $kitchen_8_11_1_D_a= $form_data->kitchen_8_11_1_D_a_cm; }
	if(($form_data->kitchen_8_11_1_D_b_cm) == ''){ if($form_data->kitchen_8_11_1_D_b == ''){ $kitchen_8_11_1_D_b = ''; }else{ $kitchen_8_11_1_D_b = 3; } }else{ $kitchen_8_11_1_D_b= $form_data->kitchen_8_11_1_D_b_cm; }
	if(($form_data->kitchen_8_11_1_E_cm) == ''){ $kitchen_8_11_1_E = $form_data->kitchen_8_11_1_E; }else{ $kitchen_8_11_1_E= $form_data->kitchen_8_11_1_E_cm; }
	$kitchen_8_12_1_text = $form_data->kitchen_8_12_1_text;
	if(($form_data->kitchen_8_12_1_A_cm) == ''){ $kitchen_8_12_1_A = $form_data->kitchen_8_12_1_A; }else{ $kitchen_8_12_1_A= $form_data->kitchen_8_12_1_A_cm; }
	if(($form_data->kitchen_8_12_1_B_cm) == ''){ $kitchen_8_12_1_B = $form_data->kitchen_8_12_1_B; }else{ $kitchen_8_12_1_B= $form_data->kitchen_8_12_1_B_cm; }
	if(($form_data->kitchen_8_12_1_C_cm) == ''){ $kitchen_8_12_1_C = $form_data->kitchen_8_12_1_C; }else{ $kitchen_8_12_1_C= $form_data->kitchen_8_12_1_C_cm; }
	$guest_rooms_9_1_1_text = $form_data->guest_rooms_9_1_1_text;
	if(($form_data->guest_rooms_9_1_1_A_cm) == ''){ $guest_rooms_9_1_1_A = $form_data->guest_rooms_9_1_1_A; }else{ $guest_rooms_9_1_1_A= $form_data->guest_rooms_9_1_1_A_cm; }
	$guest_rooms_9_2_1_text = $form_data->guest_rooms_9_2_1_text;
	if(($form_data->guest_rooms_9_2_1_A_cm) == ''){ $guest_rooms_9_2_1_A = $form_data->guest_rooms_9_2_1_A; }else{ $guest_rooms_9_2_1_A= $form_data->guest_rooms_9_2_1_A_cm; }
	if(($form_data->guest_rooms_9_2_1_B_cm) == ''){ $guest_rooms_9_2_1_B = $form_data->guest_rooms_9_2_1_B; }else{ $guest_rooms_9_2_1_B= $form_data->guest_rooms_9_2_1_B_cm; }
	$guest_rooms_9_3_1_text = $form_data->guest_rooms_9_3_1_text;
	if(($form_data->guest_rooms_9_3_1_A_cm) == ''){ $guest_rooms_9_3_1_A = $form_data->guest_rooms_9_3_1_A; }else{ $guest_rooms_9_3_1_A= $form_data->guest_rooms_9_3_1_A_cm; }
	if(($form_data->guest_rooms_9_3_1_B_cm) == ''){ $guest_rooms_9_3_1_B = $form_data->guest_rooms_9_3_1_B; }else{ $guest_rooms_9_3_1_B= $form_data->guest_rooms_9_3_1_B_cm; }
	$guest_rooms_9_4_1_text = $form_data->guest_rooms_9_4_1_text;
	if(($form_data->guest_rooms_9_4_1_A_cm) == ''){ $guest_rooms_9_4_1_A = $form_data->guest_rooms_9_4_1_A; }else{ $guest_rooms_9_4_1_A= $form_data->guest_rooms_9_4_1_A_cm; }
	if(($form_data->guest_rooms_9_4_1_B_a_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_a == ''){ $guest_rooms_9_4_1_B_a = ''; }else{ $guest_rooms_9_4_1_B_a = 5; } }else{ $guest_rooms_9_4_1_B_a= $form_data->guest_rooms_9_4_1_B_a_cm; }
	if(($form_data->guest_rooms_9_4_1_B_b_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_b == ''){ $guest_rooms_9_4_1_B_b = ''; }else{ $guest_rooms_9_4_1_B_b = 4; } }else{ $guest_rooms_9_4_1_B_b= $form_data->guest_rooms_9_4_1_B_b_cm; }
	if(($form_data->guest_rooms_9_4_1_B_c_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_c == ''){ $guest_rooms_9_4_1_B_c = ''; }else{ $guest_rooms_9_4_1_B_c = 4; } }else{ $guest_rooms_9_4_1_B_c= $form_data->guest_rooms_9_4_1_B_c_cm; }
	if(($form_data->guest_rooms_9_4_1_B_d_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_d == ''){ $guest_rooms_9_4_1_B_d = ''; }else{ $guest_rooms_9_4_1_B_d = 4; } }else{ $guest_rooms_9_4_1_B_d= $form_data->guest_rooms_9_4_1_B_d_cm; }
	if(($form_data->guest_rooms_9_4_1_B_e_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_e == ''){ $guest_rooms_9_4_1_B_e = ''; }else{ $guest_rooms_9_4_1_B_e = 4; } }else{ $guest_rooms_9_4_1_B_e= $form_data->guest_rooms_9_4_1_B_e_cm; }
	if(($form_data->guest_rooms_9_4_1_B_f_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_f == ''){ $guest_rooms_9_4_1_B_f = ''; }else{ $guest_rooms_9_4_1_B_f = 4; } }else{ $guest_rooms_9_4_1_B_f= $form_data->guest_rooms_9_4_1_B_f_cm; }
	if(($form_data->guest_rooms_9_4_1_B_g_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_g == ''){ $guest_rooms_9_4_1_B_g = ''; }else{ $guest_rooms_9_4_1_B_g = 4; } }else{ $guest_rooms_9_4_1_B_g= $form_data->guest_rooms_9_4_1_B_g_cm; }
	if(($form_data->guest_rooms_9_4_1_B_h_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_h == ''){ $guest_rooms_9_4_1_B_h = ''; }else{ $guest_rooms_9_4_1_B_h = 4; } }else{ $guest_rooms_9_4_1_B_h= $form_data->guest_rooms_9_4_1_B_h_cm; }
	if(($form_data->guest_rooms_9_4_1_B_i_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_i == ''){ $guest_rooms_9_4_1_B_i = ''; }else{ $guest_rooms_9_4_1_B_i = 5; } }else{ $guest_rooms_9_4_1_B_i= $form_data->guest_rooms_9_4_1_B_i_cm; }
	if(($form_data->guest_rooms_9_4_1_B_j_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_j == ''){ $guest_rooms_9_4_1_B_j = ''; }else{ $guest_rooms_9_4_1_B_j = 4; } }else{ $guest_rooms_9_4_1_B_j= $form_data->guest_rooms_9_4_1_B_j_cm; }
	if(($form_data->guest_rooms_9_4_1_B_k_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_k == ''){ $guest_rooms_9_4_1_B_k = ''; }else{ $guest_rooms_9_4_1_B_k = 3; } }else{ $guest_rooms_9_4_1_B_k= $form_data->guest_rooms_9_4_1_B_k_cm; }
	if(($form_data->guest_rooms_9_4_1_B_l_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_l == ''){ $guest_rooms_9_4_1_B_l = ''; }else{ $guest_rooms_9_4_1_B_l = 5; } }else{ $guest_rooms_9_4_1_B_l= $form_data->guest_rooms_9_4_1_B_l_cm; }
	if(($form_data->guest_rooms_9_4_1_B_m_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_m == ''){ $guest_rooms_9_4_1_B_m = ''; }else{ $guest_rooms_9_4_1_B_m = 4; } }else{ $guest_rooms_9_4_1_B_m= $form_data->guest_rooms_9_4_1_B_m_cm; }
	if(($form_data->guest_rooms_9_4_1_B_n_cm) == ''){ if($form_data->guest_rooms_9_4_1_B_n == ''){ $guest_rooms_9_4_1_B_n = ''; }else{ $guest_rooms_9_4_1_B_n = 5; } }else{ $guest_rooms_9_4_1_B_n= $form_data->guest_rooms_9_4_1_B_n_cm; }
	if(($form_data->guest_rooms_9_4_1_C_cm) == ''){ $guest_rooms_9_4_1_C = $form_data->guest_rooms_9_4_1_C; }else{ $guest_rooms_9_4_1_C= $form_data->guest_rooms_9_4_1_C_cm; }
	if(($form_data->guest_rooms_9_4_1_D_cm) == ''){ $guest_rooms_9_4_1_D = $form_data->guest_rooms_9_4_1_D; }else{ $guest_rooms_9_4_1_D= $form_data->guest_rooms_9_4_1_D_cm; }
	if(($form_data->guest_rooms_9_4_1_E_cm) == ''){ $guest_rooms_9_4_1_E = $form_data->guest_rooms_9_4_1_E; }else{ $guest_rooms_9_4_1_E= $form_data->guest_rooms_9_4_1_E_cm; }
	if(($form_data->guest_rooms_9_4_1_F_cm) == ''){ $guest_rooms_9_4_1_F = $form_data->guest_rooms_9_4_1_F; }else{ $guest_rooms_9_4_1_F= $form_data->guest_rooms_9_4_1_F_cm; }
	if(($form_data->guest_rooms_9_4_1_G_cm) == ''){ $guest_rooms_9_4_1_G = $form_data->guest_rooms_9_4_1_G; }else{ $guest_rooms_9_4_1_G= $form_data->guest_rooms_9_4_1_G_cm; }
	$guest_rooms_9_5_1_text = $form_data->guest_rooms_9_5_1_text;
	if(($form_data->guest_rooms_9_5_1_A_cm) == ''){ $guest_rooms_9_5_1_A = $form_data->guest_rooms_9_5_1_A; }else{ $guest_rooms_9_5_1_A= $form_data->guest_rooms_9_5_1_A_cm; }
	if(($form_data->guest_rooms_9_5_1_B_a_cm) == ''){ if($form_data->guest_rooms_9_5_1_B_a == ''){ $guest_rooms_9_5_1_B_a = ''; }else{ $guest_rooms_9_5_1_B_a = 5; } }else{ $guest_rooms_9_5_1_B_a= $form_data->guest_rooms_9_5_1_B_a_cm; }
	if(($form_data->guest_rooms_9_5_1_B_b_cm) == ''){ if($form_data->guest_rooms_9_5_1_B_b == ''){ $guest_rooms_9_5_1_B_b = ''; }else{ $guest_rooms_9_5_1_B_b = 5; } }else{ $guest_rooms_9_5_1_B_b= $form_data->guest_rooms_9_5_1_B_b_cm; }
	if(($form_data->guest_rooms_9_5_1_B_c_cm) == ''){ if($form_data->guest_rooms_9_5_1_B_c == ''){ $guest_rooms_9_5_1_B_c = ''; }else{ $guest_rooms_9_5_1_B_c = 5; } }else{ $guest_rooms_9_5_1_B_c= $form_data->guest_rooms_9_5_1_B_c_cm; }
	if(($form_data->guest_rooms_9_5_1_B_d_cm) == ''){ if($form_data->guest_rooms_9_5_1_B_d == ''){ $guest_rooms_9_5_1_B_d = ''; }else{ $guest_rooms_9_5_1_B_d = 5; } }else{ $guest_rooms_9_5_1_B_d= $form_data->guest_rooms_9_5_1_B_d_cm; }
	if(($form_data->guest_rooms_9_5_1_C_cm) == ''){ $guest_rooms_9_5_1_C = $form_data->guest_rooms_9_5_1_C; }else{ $guest_rooms_9_5_1_C= $form_data->guest_rooms_9_5_1_C_cm; }
	if(($form_data->guest_rooms_9_5_1_D_cm) == ''){ $guest_rooms_9_5_1_D = $form_data->guest_rooms_9_5_1_D; }else{ $guest_rooms_9_5_1_D= $form_data->guest_rooms_9_5_1_D_cm; }
	$guest_rooms_9_6_1_text = $form_data->guest_rooms_9_6_1_text;
	if(($form_data->guest_rooms_9_6_1_A_cm) == ''){ $guest_rooms_9_6_1_A = $form_data->guest_rooms_9_6_1_A; }else{ $guest_rooms_9_6_1_A= $form_data->guest_rooms_9_6_1_A_cm; }
	if(($form_data->guest_rooms_9_6_1_B_cm) == ''){ $guest_rooms_9_6_1_B = $form_data->guest_rooms_9_6_1_B; }else{ $guest_rooms_9_6_1_B= $form_data->guest_rooms_9_6_1_B_cm; }
	$guest_rooms_9_7_1_text = $form_data->guest_rooms_9_7_1_text;
	if(($form_data->guest_rooms_9_7_1_A_cm) == ''){ $guest_rooms_9_7_1_A = $form_data->guest_rooms_9_7_1_A; }else{ $guest_rooms_9_7_1_A= $form_data->guest_rooms_9_7_1_A_cm; }
	if(($form_data->guest_rooms_9_7_1_B_cm) == ''){ $guest_rooms_9_7_1_B = $form_data->guest_rooms_9_7_1_B; }else{ $guest_rooms_9_7_1_B= $form_data->guest_rooms_9_7_1_B_cm; }
	if(($form_data->guest_rooms_9_7_1_C_cm) == ''){ $guest_rooms_9_7_1_C = $form_data->guest_rooms_9_7_1_C; }else{ $guest_rooms_9_7_1_C= $form_data->guest_rooms_9_7_1_C_cm; }
	if(($form_data->guest_rooms_9_7_1_D_cm) == ''){ $guest_rooms_9_7_1_D = $form_data->guest_rooms_9_7_1_D; }else{ $guest_rooms_9_7_1_D= $form_data->guest_rooms_9_7_1_D_cm; }
	if(($form_data->guest_rooms_9_7_1_E_cm) == ''){ $guest_rooms_9_7_1_E = $form_data->guest_rooms_9_7_1_E; }else{ $guest_rooms_9_7_1_E= $form_data->guest_rooms_9_7_1_E_cm; }
	$guest_rooms_9_8_1_text = $form_data->guest_rooms_9_8_1_text;
	if(($form_data->guest_rooms_9_8_1_A_cm) == ''){ $guest_rooms_9_8_1_A = $form_data->guest_rooms_9_8_1_A; }else{ $guest_rooms_9_8_1_A= $form_data->guest_rooms_9_8_1_A_cm; }
	if(($form_data->guest_rooms_9_8_1_B_cm) == ''){ $guest_rooms_9_8_1_B = $form_data->guest_rooms_9_8_1_B; }else{ $guest_rooms_9_8_1_B= $form_data->guest_rooms_9_8_1_B_cm; }
	if(($form_data->guest_rooms_9_8_1_C_cm) == ''){ $guest_rooms_9_8_1_C = $form_data->guest_rooms_9_8_1_C; }else{ $guest_rooms_9_8_1_C= $form_data->guest_rooms_9_8_1_C_cm; }
	if(($form_data->guest_rooms_9_8_1_D_cm) == ''){ $guest_rooms_9_8_1_D = $form_data->guest_rooms_9_8_1_D; }else{ $guest_rooms_9_8_1_D= $form_data->guest_rooms_9_8_1_D_cm; }
	if(($form_data->guest_rooms_9_8_1_E_cm) == ''){ $guest_rooms_9_8_1_E = $form_data->guest_rooms_9_8_1_E; }else{ $guest_rooms_9_8_1_E= $form_data->guest_rooms_9_8_1_E_cm; }
	$guest_rooms_9_9_1_text = $form_data->guest_rooms_9_9_1_text;
	if(($form_data->guest_rooms_9_9_1_A_cm) == ''){ $guest_rooms_9_9_1_A = $form_data->guest_rooms_9_9_1_A; }else{ $guest_rooms_9_9_1_A= $form_data->guest_rooms_9_9_1_A_cm; }
	if(($form_data->guest_rooms_9_9_1_B_a_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_a == ''){ $guest_rooms_9_9_1_B_a = ''; }else{ $guest_rooms_9_9_1_B_a = 3; } }else{ $guest_rooms_9_9_1_B_a= $form_data->guest_rooms_9_9_1_B_a_cm; }
	if(($form_data->guest_rooms_9_9_1_B_b_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_b == ''){ $guest_rooms_9_9_1_B_b = ''; }else{ $guest_rooms_9_9_1_B_b = 3; } }else{ $guest_rooms_9_9_1_B_b= $form_data->guest_rooms_9_9_1_B_b_cm; }
	if(($form_data->guest_rooms_9_9_1_B_c_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_c == ''){ $guest_rooms_9_9_1_B_c = ''; }else{ $guest_rooms_9_9_1_B_c = 3; } }else{ $guest_rooms_9_9_1_B_c= $form_data->guest_rooms_9_9_1_B_c_cm; }
	if(($form_data->guest_rooms_9_9_1_B_d_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_d == ''){ $guest_rooms_9_9_1_B_d = ''; }else{ $guest_rooms_9_9_1_B_d = 2; } }else{ $guest_rooms_9_9_1_B_d= $form_data->guest_rooms_9_9_1_B_d_cm; }
	if(($form_data->guest_rooms_9_9_1_B_e_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_e == ''){ $guest_rooms_9_9_1_B_e = ''; }else{ $guest_rooms_9_9_1_B_e = 2; } }else{ $guest_rooms_9_9_1_B_e= $form_data->guest_rooms_9_9_1_B_e_cm; }
	if(($form_data->guest_rooms_9_9_1_B_f_cm) == ''){ if($form_data->guest_rooms_9_9_1_B_f == ''){ $guest_rooms_9_9_1_B_f = ''; }else{ $guest_rooms_9_9_1_B_f = 3; } }else{ $guest_rooms_9_9_1_B_f= $form_data->guest_rooms_9_9_1_B_f_cm; }
	if(($form_data->guest_rooms_9_9_1_C_a_cm) == ''){ if($form_data->guest_rooms_9_9_1_C_a == ''){ $guest_rooms_9_9_1_C_a = ''; }else{ $guest_rooms_9_9_1_C_a = 4; } }else{ $guest_rooms_9_9_1_C_a= $form_data->guest_rooms_9_9_1_C_a_cm; }
	if(($form_data->guest_rooms_9_9_1_C_b_cm) == ''){ if($form_data->guest_rooms_9_9_1_C_b == ''){ $guest_rooms_9_9_1_C_b = ''; }else{ $guest_rooms_9_9_1_C_b = 5; } }else{ $guest_rooms_9_9_1_C_b= $form_data->guest_rooms_9_9_1_C_b_cm; }
	if(($form_data->guest_rooms_9_9_1_D_cm) == ''){ $guest_rooms_9_9_1_D = $form_data->guest_rooms_9_9_1_D; }else{ $guest_rooms_9_9_1_D= $form_data->guest_rooms_9_9_1_D_cm; }
	$guest_rooms_9_10_1_text = $form_data->guest_rooms_9_10_1_text;
	if(($form_data->guest_rooms_9_10_1_A_cm) == ''){ $guest_rooms_9_10_1_A = $form_data->guest_rooms_9_10_1_A; }else{ $guest_rooms_9_10_1_A= $form_data->guest_rooms_9_10_1_A_cm; }
	$guest_rooms_9_11_1_text = $form_data->guest_rooms_9_11_1_text;
	if(($form_data->guest_rooms_9_11_1_A_a_cm) == ''){ if($form_data->guest_rooms_9_11_1_A_a == ''){ $guest_rooms_9_11_1_A_a = ''; }else{ $guest_rooms_9_11_1_A_a = 2; } }else{ $guest_rooms_9_11_1_A_a= $form_data->guest_rooms_9_11_1_A_a_cm; }
	if(($form_data->guest_rooms_9_11_1_A_b_cm) == ''){ if($form_data->guest_rooms_9_11_1_A_b == ''){ $guest_rooms_9_11_1_A_b = ''; }else{ $guest_rooms_9_11_1_A_b = 2; } }else{ $guest_rooms_9_11_1_A_b= $form_data->guest_rooms_9_11_1_A_b_cm; }
	if(($form_data->guest_rooms_9_11_1_A_c_cm) == ''){ if($form_data->guest_rooms_9_11_1_A_c == ''){ $guest_rooms_9_11_1_A_c = ''; }else{ $guest_rooms_9_11_1_A_c = 2; } }else{ $guest_rooms_9_11_1_A_c= $form_data->guest_rooms_9_11_1_A_c_cm; }
	if(($form_data->guest_rooms_9_11_1_A_d_cm) == ''){ if($form_data->guest_rooms_9_11_1_A_d == ''){ $guest_rooms_9_11_1_A_d = ''; }else{ $guest_rooms_9_11_1_A_d = 2; } }else{ $guest_rooms_9_11_1_A_d= $form_data->guest_rooms_9_11_1_A_d_cm; }
	if(($form_data->guest_rooms_9_11_1_A_e_cm) == ''){ if($form_data->guest_rooms_9_11_1_A_e == ''){ $guest_rooms_9_11_1_A_e = ''; }else{ $guest_rooms_9_11_1_A_e = 2; } }else{ $guest_rooms_9_11_1_A_e= $form_data->guest_rooms_9_11_1_A_e_cm; }
	if(($form_data->guest_rooms_9_11_1_B_a_cm) == ''){ if($form_data->guest_rooms_9_11_1_B_a == ''){ $guest_rooms_9_11_1_B_a = ''; }else{ $guest_rooms_9_11_1_B_a = 2; } }else{ $guest_rooms_9_11_1_B_a= $form_data->guest_rooms_9_11_1_B_a_cm; }
	if(($form_data->guest_rooms_9_11_1_B_b_cm) == ''){ if($form_data->guest_rooms_9_11_1_B_b == ''){ $guest_rooms_9_11_1_B_b = ''; }else{ $guest_rooms_9_11_1_B_b = 2; } }else{ $guest_rooms_9_11_1_B_b= $form_data->guest_rooms_9_11_1_B_b_cm; }
	if(($form_data->guest_rooms_9_11_1_B_c_cm) == ''){ if($form_data->guest_rooms_9_11_1_B_c == ''){ $guest_rooms_9_11_1_B_c = ''; }else{ $guest_rooms_9_11_1_B_c = 2; } }else{ $guest_rooms_9_11_1_B_c= $form_data->guest_rooms_9_11_1_B_c_cm; }
	if(($form_data->guest_rooms_9_11_1_B_d_cm) == ''){ if($form_data->guest_rooms_9_11_1_B_d == ''){ $guest_rooms_9_11_1_B_d = ''; }else{ $guest_rooms_9_11_1_B_d = 2; } }else{ $guest_rooms_9_11_1_B_d= $form_data->guest_rooms_9_11_1_B_d_cm; }
	if(($form_data->guest_rooms_9_11_1_C_cm) == ''){ $guest_rooms_9_11_1_C = $form_data->guest_rooms_9_11_1_C; }else{ $guest_rooms_9_11_1_C= $form_data->guest_rooms_9_11_1_C_cm; }
	$guest_rooms_9_12_1_text = $form_data->guest_rooms_9_12_1_text;
	if(($form_data->guest_rooms_9_12_1_A_cm) == ''){ $guest_rooms_9_12_1_A = $form_data->guest_rooms_9_12_1_A; }else{ $guest_rooms_9_12_1_A= $form_data->guest_rooms_9_12_1_A_cm; }
	if(($form_data->guest_rooms_9_12_1_B_cm) == ''){ $guest_rooms_9_12_1_B = $form_data->guest_rooms_9_12_1_B; }else{ $guest_rooms_9_12_1_B= $form_data->guest_rooms_9_12_1_B_cm; }
	if(($form_data->guest_rooms_9_12_1_C_cm) == ''){ $guest_rooms_9_12_1_C = $form_data->guest_rooms_9_12_1_C; }else{ $guest_rooms_9_12_1_C= $form_data->guest_rooms_9_12_1_C_cm; }
	if(($form_data->guest_rooms_9_12_1_D_cm) == ''){ $guest_rooms_9_12_1_D = $form_data->guest_rooms_9_12_1_D; }else{ $guest_rooms_9_12_1_D= $form_data->guest_rooms_9_12_1_D_cm; }
	if(($form_data->guest_rooms_9_12_1_E_cm) == ''){ $guest_rooms_9_12_1_E = $form_data->guest_rooms_9_12_1_E; }else{ $guest_rooms_9_12_1_E= $form_data->guest_rooms_9_12_1_E_cm; }
	if(($form_data->guest_rooms_9_12_1_F_cm) == ''){ $guest_rooms_9_12_1_F = $form_data->guest_rooms_9_12_1_F; }else{ $guest_rooms_9_12_1_F= $form_data->guest_rooms_9_12_1_F_cm; }
	if(($form_data->guest_rooms_9_12_1_G_cm) == ''){ $guest_rooms_9_12_1_G = $form_data->guest_rooms_9_12_1_G; }else{ $guest_rooms_9_12_1_G= $form_data->guest_rooms_9_12_1_G_cm; }
	$guest_rooms_9_13_1_text = $form_data->guest_rooms_9_13_1_text;
	if(($form_data->guest_rooms_9_13_1_A_cm) == ''){ $guest_rooms_9_13_1_A = $form_data->guest_rooms_9_13_1_A; }else{ $guest_rooms_9_13_1_A= $form_data->guest_rooms_9_13_1_A_cm; }
	if(($form_data->guest_rooms_9_13_1_B_cm) == ''){ $guest_rooms_9_13_1_B = $form_data->guest_rooms_9_13_1_B; }else{ $guest_rooms_9_13_1_B= $form_data->guest_rooms_9_13_1_B_cm; }
	if(($form_data->guest_rooms_9_13_1_C_cm) == ''){ $guest_rooms_9_13_1_C = $form_data->guest_rooms_9_13_1_C; }else{ $guest_rooms_9_13_1_C= $form_data->guest_rooms_9_13_1_C_cm; }
	$guest_rooms_9_14_1_text = $form_data->guest_rooms_9_14_1_text;
	if(($form_data->guest_rooms_9_14_1_A_cm) == ''){ $guest_rooms_9_14_1_A = $form_data->guest_rooms_9_14_1_A; }else{ $guest_rooms_9_14_1_A= $form_data->guest_rooms_9_14_1_A_cm; }
	if(($form_data->guest_rooms_9_14_1_B_a_cm) == ''){ if($form_data->guest_rooms_9_14_1_B_a == ''){ $guest_rooms_9_14_1_B_a = ''; }else{ $guest_rooms_9_14_1_B_a = 5; } }else{ $guest_rooms_9_14_1_B_a= $form_data->guest_rooms_9_14_1_B_a_cm; }
	if(($form_data->guest_rooms_9_14_1_B_b_cm) == ''){ if($form_data->guest_rooms_9_14_1_B_b == ''){ $guest_rooms_9_14_1_B_b = ''; }else{ $guest_rooms_9_14_1_B_b = 10; } }else{ $guest_rooms_9_14_1_B_b= $form_data->guest_rooms_9_14_1_B_b_cm; }
	if(($form_data->guest_rooms_9_14_1_B_c_cm) == ''){ if($form_data->guest_rooms_9_14_1_B_c == ''){ $guest_rooms_9_14_1_B_c = ''; }else{ $guest_rooms_9_14_1_B_c = 15; } }else{ $guest_rooms_9_14_1_B_c= $form_data->guest_rooms_9_14_1_B_c_cm; }
	if(($form_data->guest_rooms_9_14_1_C_cm) == ''){ $guest_rooms_9_14_1_C = $form_data->guest_rooms_9_14_1_C; }else{ $guest_rooms_9_14_1_C= $form_data->guest_rooms_9_14_1_C_cm; }
	if(($form_data->guest_rooms_9_15_1_A_a_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_a == ''){ $guest_rooms_9_15_1_A_a = ''; }else{ $guest_rooms_9_15_1_A_a = 4; } }else{ $guest_rooms_9_15_1_A_a= $form_data->guest_rooms_9_15_1_A_a_cm; }
	if(($form_data->guest_rooms_9_15_1_A_b_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_b == ''){ $guest_rooms_9_15_1_A_b = ''; }else{ $guest_rooms_9_15_1_A_b = 2; } }else{ $guest_rooms_9_15_1_A_b= $form_data->guest_rooms_9_15_1_A_b_cm; }
	if(($form_data->guest_rooms_9_15_1_A_c_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_c == ''){ $guest_rooms_9_15_1_A_c = ''; }else{ $guest_rooms_9_15_1_A_c = 3; } }else{ $guest_rooms_9_15_1_A_c= $form_data->guest_rooms_9_15_1_A_c_cm; }
	if(($form_data->guest_rooms_9_15_1_A_d_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_d == ''){ $guest_rooms_9_15_1_A_d = ''; }else{ $guest_rooms_9_15_1_A_d = 2; } }else{ $guest_rooms_9_15_1_A_d= $form_data->guest_rooms_9_15_1_A_d_cm; }
	if(($form_data->guest_rooms_9_15_1_A_e_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_e == ''){ $guest_rooms_9_15_1_A_e = ''; }else{ $guest_rooms_9_15_1_A_e = 2; } }else{ $guest_rooms_9_15_1_A_e= $form_data->guest_rooms_9_15_1_A_e_cm; }
	if(($form_data->guest_rooms_9_15_1_A_f_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_f == ''){ $guest_rooms_9_15_1_A_f = ''; }else{ $guest_rooms_9_15_1_A_f = 2; } }else{ $guest_rooms_9_15_1_A_f= $form_data->guest_rooms_9_15_1_A_f_cm; }
	if(($form_data->guest_rooms_9_15_1_A_g_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_g == ''){ $guest_rooms_9_15_1_A_g = ''; }else{ $guest_rooms_9_15_1_A_g = 2; } }else{ $guest_rooms_9_15_1_A_g= $form_data->guest_rooms_9_15_1_A_g_cm; }
	if(($form_data->guest_rooms_9_15_1_A_h_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_h == ''){ $guest_rooms_9_15_1_A_h = ''; }else{ $guest_rooms_9_15_1_A_h = 3; } }else{ $guest_rooms_9_15_1_A_h= $form_data->guest_rooms_9_15_1_A_h_cm; }
	if(($form_data->guest_rooms_9_15_1_A_i_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_i == ''){ $guest_rooms_9_15_1_A_i = ''; }else{ $guest_rooms_9_15_1_A_i = 4; } }else{ $guest_rooms_9_15_1_A_i= $form_data->guest_rooms_9_15_1_A_i_cm; }
	if(($form_data->guest_rooms_9_15_1_A_j_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_j == ''){ $guest_rooms_9_15_1_A_j = ''; }else{ $guest_rooms_9_15_1_A_j = 3; } }else{ $guest_rooms_9_15_1_A_j= $form_data->guest_rooms_9_15_1_A_j_cm; }
	if(($form_data->guest_rooms_9_15_1_A_k_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_k == ''){ $guest_rooms_9_15_1_A_k = ''; }else{ $guest_rooms_9_15_1_A_k = 3; } }else{ $guest_rooms_9_15_1_A_k= $form_data->guest_rooms_9_15_1_A_k_cm; }
	if(($form_data->guest_rooms_9_15_1_A_l_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_l == ''){ $guest_rooms_9_15_1_A_l = ''; }else{ $guest_rooms_9_15_1_A_l = 2; } }else{ $guest_rooms_9_15_1_A_l= $form_data->guest_rooms_9_15_1_A_l_cm; }
	if(($form_data->guest_rooms_9_15_1_A_m_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_m == ''){ $guest_rooms_9_15_1_A_m = ''; }else{ $guest_rooms_9_15_1_A_m = 3; } }else{ $guest_rooms_9_15_1_A_m= $form_data->guest_rooms_9_15_1_A_m_cm; }
	if(($form_data->guest_rooms_9_15_1_A_n_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_n == ''){ $guest_rooms_9_15_1_A_n = ''; }else{ $guest_rooms_9_15_1_A_n = 3; } }else{ $guest_rooms_9_15_1_A_n= $form_data->guest_rooms_9_15_1_A_n_cm; }
	if(($form_data->guest_rooms_9_15_1_A_o_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_o == ''){ $guest_rooms_9_15_1_A_o = ''; }else{ $guest_rooms_9_15_1_A_o = 4; } }else{ $guest_rooms_9_15_1_A_o= $form_data->guest_rooms_9_15_1_A_o_cm; }
	if(($form_data->guest_rooms_9_15_1_A_p_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_p == ''){ $guest_rooms_9_15_1_A_p = ''; }else{ $guest_rooms_9_15_1_A_p = 4; } }else{ $guest_rooms_9_15_1_A_p= $form_data->guest_rooms_9_15_1_A_p_cm; }
	if(($form_data->guest_rooms_9_15_1_A_q_cm) == ''){ if($form_data->guest_rooms_9_15_1_A_q == ''){ $guest_rooms_9_15_1_A_q = ''; }else{ $guest_rooms_9_15_1_A_q = 4; } }else{ $guest_rooms_9_15_1_A_q= $form_data->guest_rooms_9_15_1_A_q_cm; }
	if(($form_data->guest_rooms_9_15_1_B_cm) == ''){ $guest_rooms_9_15_1_B = $form_data->guest_rooms_9_15_1_B; }else{ $guest_rooms_9_15_1_B= $form_data->guest_rooms_9_15_1_B_cm; }
	if(($form_data->guest_rooms_9_15_1_C_cm) == ''){ $guest_rooms_9_15_1_C = $form_data->guest_rooms_9_15_1_C; }else{ $guest_rooms_9_15_1_C= $form_data->guest_rooms_9_15_1_C_cm; }
	$guest_bathrooms_10_1_1_text = $form_data->guest_bathrooms_10_1_1_text;
	if(($form_data->guest_bathrooms_10_1_1_A_cm) == ''){ $guest_bathrooms_10_1_1_A = $form_data->guest_bathrooms_10_1_1_A; }else{ $guest_bathrooms_10_1_1_A= $form_data->guest_bathrooms_10_1_1_A_cm; }
	if(($form_data->guest_bathrooms_10_2_1_A_cm) == ''){ $guest_bathrooms_10_2_1_A = $form_data->guest_bathrooms_10_2_1_A; }else{ $guest_bathrooms_10_2_1_A= $form_data->guest_bathrooms_10_2_1_A_cm; }
	$guest_bathrooms_10_3_1_text = $form_data->guest_bathrooms_10_3_1_text;
	if(($form_data->guest_bathrooms_10_3_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_a == ''){ $guest_bathrooms_10_3_1_A_a = ''; }else{ $guest_bathrooms_10_3_1_A_a = 2; } }else{ $guest_bathrooms_10_3_1_A_a= $form_data->guest_bathrooms_10_3_1_A_a_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_b == ''){ $guest_bathrooms_10_3_1_A_b = ''; }else{ $guest_bathrooms_10_3_1_A_b = 2; } }else{ $guest_bathrooms_10_3_1_A_b= $form_data->guest_bathrooms_10_3_1_A_b_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_c == ''){ $guest_bathrooms_10_3_1_A_c = ''; }else{ $guest_bathrooms_10_3_1_A_c = 2; } }else{ $guest_bathrooms_10_3_1_A_c= $form_data->guest_bathrooms_10_3_1_A_c_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_d == ''){ $guest_bathrooms_10_3_1_A_d = ''; }else{ $guest_bathrooms_10_3_1_A_d = 3; } }else{ $guest_bathrooms_10_3_1_A_d= $form_data->guest_bathrooms_10_3_1_A_d_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_e == ''){ $guest_bathrooms_10_3_1_A_e = ''; }else{ $guest_bathrooms_10_3_1_A_e = 2; } }else{ $guest_bathrooms_10_3_1_A_e= $form_data->guest_bathrooms_10_3_1_A_e_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_f_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_f == ''){ $guest_bathrooms_10_3_1_A_f = ''; }else{ $guest_bathrooms_10_3_1_A_f = 4; } }else{ $guest_bathrooms_10_3_1_A_f= $form_data->guest_bathrooms_10_3_1_A_f_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_g_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_g == ''){ $guest_bathrooms_10_3_1_A_g = ''; }else{ $guest_bathrooms_10_3_1_A_g = 2; } }else{ $guest_bathrooms_10_3_1_A_g= $form_data->guest_bathrooms_10_3_1_A_g_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_h_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_h == ''){ $guest_bathrooms_10_3_1_A_h = ''; }else{ $guest_bathrooms_10_3_1_A_h = 2; } }else{ $guest_bathrooms_10_3_1_A_h= $form_data->guest_bathrooms_10_3_1_A_h_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_i_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_i == ''){ $guest_bathrooms_10_3_1_A_i = ''; }else{ $guest_bathrooms_10_3_1_A_i = 2; } }else{ $guest_bathrooms_10_3_1_A_i= $form_data->guest_bathrooms_10_3_1_A_i_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_j_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_j == ''){ $guest_bathrooms_10_3_1_A_j = ''; }else{ $guest_bathrooms_10_3_1_A_j = 1; } }else{ $guest_bathrooms_10_3_1_A_j= $form_data->guest_bathrooms_10_3_1_A_j_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_k_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_k == ''){ $guest_bathrooms_10_3_1_A_k = ''; }else{ $guest_bathrooms_10_3_1_A_k = 3; } }else{ $guest_bathrooms_10_3_1_A_k= $form_data->guest_bathrooms_10_3_1_A_k_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_l_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_l == ''){ $guest_bathrooms_10_3_1_A_l = ''; }else{ $guest_bathrooms_10_3_1_A_l = 2; } }else{ $guest_bathrooms_10_3_1_A_l= $form_data->guest_bathrooms_10_3_1_A_l_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_m_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_m == ''){ $guest_bathrooms_10_3_1_A_m = ''; }else{ $guest_bathrooms_10_3_1_A_m = 1; } }else{ $guest_bathrooms_10_3_1_A_m= $form_data->guest_bathrooms_10_3_1_A_m_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_n_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_n == ''){ $guest_bathrooms_10_3_1_A_n = ''; }else{ $guest_bathrooms_10_3_1_A_n = 1; } }else{ $guest_bathrooms_10_3_1_A_n= $form_data->guest_bathrooms_10_3_1_A_n_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_o_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_o == ''){ $guest_bathrooms_10_3_1_A_o = ''; }else{ $guest_bathrooms_10_3_1_A_o = 3; } }else{ $guest_bathrooms_10_3_1_A_o= $form_data->guest_bathrooms_10_3_1_A_o_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_p_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_p == ''){ $guest_bathrooms_10_3_1_A_p = ''; }else{ $guest_bathrooms_10_3_1_A_p = 2; } }else{ $guest_bathrooms_10_3_1_A_p= $form_data->guest_bathrooms_10_3_1_A_p_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_q_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_q == ''){ $guest_bathrooms_10_3_1_A_q = ''; }else{ $guest_bathrooms_10_3_1_A_q = 2; } }else{ $guest_bathrooms_10_3_1_A_q= $form_data->guest_bathrooms_10_3_1_A_q_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_r_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_r == ''){ $guest_bathrooms_10_3_1_A_r = ''; }else{ $guest_bathrooms_10_3_1_A_r = 3; } }else{ $guest_bathrooms_10_3_1_A_r= $form_data->guest_bathrooms_10_3_1_A_r_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_s_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_s == ''){ $guest_bathrooms_10_3_1_A_s = ''; }else{ $guest_bathrooms_10_3_1_A_s = 3; } }else{ $guest_bathrooms_10_3_1_A_s= $form_data->guest_bathrooms_10_3_1_A_s_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_t_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_t == ''){ $guest_bathrooms_10_3_1_A_t = ''; }else{ $guest_bathrooms_10_3_1_A_t = 2; } }else{ $guest_bathrooms_10_3_1_A_t= $form_data->guest_bathrooms_10_3_1_A_t_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_u_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_u == ''){ $guest_bathrooms_10_3_1_A_u = ''; }else{ $guest_bathrooms_10_3_1_A_u = 3; } }else{ $guest_bathrooms_10_3_1_A_u= $form_data->guest_bathrooms_10_3_1_A_u_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_v_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_v == ''){ $guest_bathrooms_10_3_1_A_v = ''; }else{ $guest_bathrooms_10_3_1_A_v = 3; } }else{ $guest_bathrooms_10_3_1_A_v= $form_data->guest_bathrooms_10_3_1_A_v_cm; }
	if(($form_data->guest_bathrooms_10_3_1_A_w_cm) == ''){ if($form_data->guest_bathrooms_10_3_1_A_w == ''){ $guest_bathrooms_10_3_1_A_w = ''; }else{ $guest_bathrooms_10_3_1_A_w = 3; } }else{ $guest_bathrooms_10_3_1_A_w= $form_data->guest_bathrooms_10_3_1_A_w_cm; }
	if(($form_data->guest_bathrooms_10_3_1_B_cm) == ''){ $guest_bathrooms_10_3_1_B = $form_data->guest_bathrooms_10_3_1_B; }else{ $guest_bathrooms_10_3_1_B= $form_data->guest_bathrooms_10_3_1_B_cm; }
	if(($form_data->guest_bathrooms_10_3_1_C_cm) == ''){ $guest_bathrooms_10_3_1_C = $form_data->guest_bathrooms_10_3_1_C; }else{ $guest_bathrooms_10_3_1_C= $form_data->guest_bathrooms_10_3_1_C_cm; }
	if(($form_data->guest_bathrooms_10_3_1_D_cm) == ''){ $guest_bathrooms_10_3_1_D = $form_data->guest_bathrooms_10_3_1_D; }else{ $guest_bathrooms_10_3_1_D= $form_data->guest_bathrooms_10_3_1_D_cm; }
	if(($form_data->guest_bathrooms_10_3_1_E_cm) == ''){ $guest_bathrooms_10_3_1_E = $form_data->guest_bathrooms_10_3_1_E; }else{ $guest_bathrooms_10_3_1_E= $form_data->guest_bathrooms_10_3_1_E_cm; }
	if(($form_data->guest_bathrooms_10_3_1_F_cm) == ''){ $guest_bathrooms_10_3_1_F = $form_data->guest_bathrooms_10_3_1_F; }else{ $guest_bathrooms_10_3_1_F= $form_data->guest_bathrooms_10_3_1_F_cm; }
	$guest_bathrooms_10_4_1_text = $form_data->guest_bathrooms_10_4_1_text;
	if(($form_data->guest_bathrooms_10_4_1_A_cm) == ''){ $guest_bathrooms_10_4_1_A = $form_data->guest_bathrooms_10_4_1_A; }else{ $guest_bathrooms_10_4_1_A= $form_data->guest_bathrooms_10_4_1_A_cm; }
	if(($form_data->guest_bathrooms_10_4_1_B_cm) == ''){ $guest_bathrooms_10_4_1_B = $form_data->guest_bathrooms_10_4_1_B; }else{ $guest_bathrooms_10_4_1_B= $form_data->guest_bathrooms_10_4_1_B_cm; }
	if(($form_data->guest_bathrooms_10_4_1_C_cm) == ''){ $guest_bathrooms_10_4_1_C = $form_data->guest_bathrooms_10_4_1_C; }else{ $guest_bathrooms_10_4_1_C= $form_data->guest_bathrooms_10_4_1_C_cm; }
	if(($form_data->guest_bathrooms_10_4_1_D_cm) == ''){ $guest_bathrooms_10_4_1_D = $form_data->guest_bathrooms_10_4_1_D; }else{ $guest_bathrooms_10_4_1_D= $form_data->guest_bathrooms_10_4_1_D_cm; }
	if(($form_data->guest_bathrooms_10_4_1_E_cm) == ''){ $guest_bathrooms_10_4_1_E = $form_data->guest_bathrooms_10_4_1_E; }else{ $guest_bathrooms_10_4_1_E= $form_data->guest_bathrooms_10_4_1_E_cm; }
	if(($form_data->guest_bathrooms_10_4_1_F_cm) == ''){ $guest_bathrooms_10_4_1_F = $form_data->guest_bathrooms_10_4_1_F; }else{ $guest_bathrooms_10_4_1_F= $form_data->guest_bathrooms_10_4_1_F_cm; }
	$guest_bathrooms_10_5_1_text = $form_data->guest_bathrooms_10_5_1_text;
	if(($form_data->guest_bathrooms_10_5_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_10_5_1_A_a == ''){ $guest_bathrooms_10_5_1_A_a = ''; }else{ $guest_bathrooms_10_5_1_A_a = 2; } }else{ $guest_bathrooms_10_5_1_A_a= $form_data->guest_bathrooms_10_5_1_A_a_cm; }
	if(($form_data->guest_bathrooms_10_5_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_10_5_1_A_b == ''){ $guest_bathrooms_10_5_1_A_b = ''; }else{ $guest_bathrooms_10_5_1_A_b = 2; } }else{ $guest_bathrooms_10_5_1_A_b= $form_data->guest_bathrooms_10_5_1_A_b_cm; }
	if(($form_data->guest_bathrooms_10_5_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_10_5_1_A_c == ''){ $guest_bathrooms_10_5_1_A_c = ''; }else{ $guest_bathrooms_10_5_1_A_c = 2; } }else{ $guest_bathrooms_10_5_1_A_c= $form_data->guest_bathrooms_10_5_1_A_c_cm; }
	if(($form_data->guest_bathrooms_10_5_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_10_5_1_A_d == ''){ $guest_bathrooms_10_5_1_A_d = ''; }else{ $guest_bathrooms_10_5_1_A_d = 2; } }else{ $guest_bathrooms_10_5_1_A_d= $form_data->guest_bathrooms_10_5_1_A_d_cm; }
	if(($form_data->guest_bathrooms_10_5_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_10_5_1_A_e == ''){ $guest_bathrooms_10_5_1_A_e = ''; }else{ $guest_bathrooms_10_5_1_A_e = 2; } }else{ $guest_bathrooms_10_5_1_A_e= $form_data->guest_bathrooms_10_5_1_A_e_cm; }
	if(($form_data->guest_bathrooms_10_5_1_B_cm) == ''){ $guest_bathrooms_10_5_1_B = $form_data->guest_bathrooms_10_5_1_B; }else{ $guest_bathrooms_10_5_1_B= $form_data->guest_bathrooms_10_5_1_B_cm; }
	if(($form_data->guest_bathrooms_10_5_1_C_cm) == ''){ $guest_bathrooms_10_5_1_C = $form_data->guest_bathrooms_10_5_1_C; }else{ $guest_bathrooms_10_5_1_C= $form_data->guest_bathrooms_10_5_1_C_cm; }
	if(($form_data->guest_bathrooms_10_5_1_D_cm) == ''){ $guest_bathrooms_10_5_1_D = $form_data->guest_bathrooms_10_5_1_D; }else{ $guest_bathrooms_10_5_1_D= $form_data->guest_bathrooms_10_5_1_D_cm; }
	if(($form_data->guest_bathrooms_10_5_1_E_cm) == ''){ $guest_bathrooms_10_5_1_E = $form_data->guest_bathrooms_10_5_1_E; }else{ $guest_bathrooms_10_5_1_E= $form_data->guest_bathrooms_10_5_1_E_cm; }
	if(($form_data->guest_bathrooms_10_5_1_F_cm) == ''){ $guest_bathrooms_10_5_1_F = $form_data->guest_bathrooms_10_5_1_F; }else{ $guest_bathrooms_10_5_1_F= $form_data->guest_bathrooms_10_5_1_F_cm; }
	$guest_bathrooms_10_6_1_text = $form_data->guest_bathrooms_10_6_1_text;
	if(($form_data->guest_bathrooms_10_6_1_A_cm) == ''){ $guest_bathrooms_10_6_1_A = $form_data->guest_bathrooms_10_6_1_A; }else{ $guest_bathrooms_10_6_1_A= $form_data->guest_bathrooms_10_6_1_A_cm; }
	if(($form_data->guest_bathrooms_10_6_1_B_cm) == ''){ $guest_bathrooms_10_6_1_B = $form_data->guest_bathrooms_10_6_1_B; }else{ $guest_bathrooms_10_6_1_B= $form_data->guest_bathrooms_10_6_1_B_cm; }
	if(($form_data->guest_bathrooms_10_6_1_C_cm) == ''){ $guest_bathrooms_10_6_1_C = $form_data->guest_bathrooms_10_6_1_C; }else{ $guest_bathrooms_10_6_1_C= $form_data->guest_bathrooms_10_6_1_C_cm; }
	$guest_bathrooms_10_7_1_text = $form_data->guest_bathrooms_10_7_1_text;
	if(($form_data->guest_bathrooms_10_7_1_A_cm) == ''){ $guest_bathrooms_10_7_1_A = $form_data->guest_bathrooms_10_7_1_A; }else{ $guest_bathrooms_10_7_1_A= $form_data->guest_bathrooms_10_7_1_A_cm; }
	if(($form_data->guest_bathrooms_10_7_1_B_cm) == ''){ $guest_bathrooms_10_7_1_B = $form_data->guest_bathrooms_10_7_1_B; }else{ $guest_bathrooms_10_7_1_B= $form_data->guest_bathrooms_10_7_1_B_cm; }
	if(($form_data->guest_bathrooms_10_7_1_C_cm) == ''){ $guest_bathrooms_10_7_1_C = $form_data->guest_bathrooms_10_7_1_C; }else{ $guest_bathrooms_10_7_1_C= $form_data->guest_bathrooms_10_7_1_C_cm; }
	if(($form_data->guest_bathrooms_10_7_1_D_cm) == ''){ $guest_bathrooms_10_7_1_D = $form_data->guest_bathrooms_10_7_1_D; }else{ $guest_bathrooms_10_7_1_D= $form_data->guest_bathrooms_10_7_1_D_cm; }
	$guest_bathrooms_10_8_1_text = $form_data->guest_bathrooms_10_8_1_text;
	if(($form_data->guest_bathrooms_10_8_1_A_a_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_a == ''){ $guest_bathrooms_10_8_1_A_a = ''; }else{ $guest_bathrooms_10_8_1_A_a = 3; } }else{ $guest_bathrooms_10_8_1_A_a= $form_data->guest_bathrooms_10_8_1_A_a_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_b_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_b == ''){ $guest_bathrooms_10_8_1_A_b = ''; }else{ $guest_bathrooms_10_8_1_A_b = 3; } }else{ $guest_bathrooms_10_8_1_A_b= $form_data->guest_bathrooms_10_8_1_A_b_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_c_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_c == ''){ $guest_bathrooms_10_8_1_A_c = ''; }else{ $guest_bathrooms_10_8_1_A_c = 2; } }else{ $guest_bathrooms_10_8_1_A_c= $form_data->guest_bathrooms_10_8_1_A_c_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_d_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_d == ''){ $guest_bathrooms_10_8_1_A_d = ''; }else{ $guest_bathrooms_10_8_1_A_d = 3; } }else{ $guest_bathrooms_10_8_1_A_d= $form_data->guest_bathrooms_10_8_1_A_d_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_e_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_e == ''){ $guest_bathrooms_10_8_1_A_e = ''; }else{ $guest_bathrooms_10_8_1_A_e = 3; } }else{ $guest_bathrooms_10_8_1_A_e= $form_data->guest_bathrooms_10_8_1_A_e_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_f_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_f == ''){ $guest_bathrooms_10_8_1_A_f = ''; }else{ $guest_bathrooms_10_8_1_A_f = 3; } }else{ $guest_bathrooms_10_8_1_A_f= $form_data->guest_bathrooms_10_8_1_A_f_cm; }
	if(($form_data->guest_bathrooms_10_8_1_A_g_cm) == ''){ if($form_data->guest_bathrooms_10_8_1_A_g == ''){ $guest_bathrooms_10_8_1_A_g = ''; }else{ $guest_bathrooms_10_8_1_A_g = 3; } }else{ $guest_bathrooms_10_8_1_A_g= $form_data->guest_bathrooms_10_8_1_A_g_cm; }
	if(($form_data->guest_bathrooms_10_8_1_B_cm) == ''){ $guest_bathrooms_10_8_1_B = $form_data->guest_bathrooms_10_8_1_B; }else{ $guest_bathrooms_10_8_1_B= $form_data->guest_bathrooms_10_8_1_B_cm; }
	if(($form_data->guest_bathrooms_10_8_1_C_cm) == ''){ $guest_bathrooms_10_8_1_C = $form_data->guest_bathrooms_10_8_1_C; }else{ $guest_bathrooms_10_8_1_C= $form_data->guest_bathrooms_10_8_1_C_cm; }
	$guest_bathrooms_10_9_1_text = $form_data->guest_bathrooms_10_9_1_text;
	if(($form_data->guest_bathrooms_10_9_1_A_cm) == ''){ $guest_bathrooms_10_9_1_A = $form_data->guest_bathrooms_10_9_1_A; }else{ $guest_bathrooms_10_9_1_A= $form_data->guest_bathrooms_10_9_1_A_cm; }
	if(($form_data->guest_bathrooms_10_9_1_B_cm) == ''){ $guest_bathrooms_10_9_1_B = $form_data->guest_bathrooms_10_9_1_B; }else{ $guest_bathrooms_10_9_1_B= $form_data->guest_bathrooms_10_9_1_B_cm; }
	$suites_11_1_1_text = $form_data->suites_11_1_1_text;
	if(($form_data->suites_11_1_1_A_cm) == ''){ $suites_11_1_1_A = $form_data->suites_11_1_1_A; }else{ $suites_11_1_1_A= $form_data->suites_11_1_1_A_cm; }
	$suites_11_2_1_text = $form_data->suites_11_2_1_text;
	if(($form_data->suites_11_2_1_A_cm) == ''){ $suites_11_2_1_A = $form_data->suites_11_2_1_A; }else{ $suites_11_2_1_A= $form_data->suites_11_2_1_A_cm; }
	if(($form_data->suites_11_2_1_B_cm) == ''){ $suites_11_2_1_B = $form_data->suites_11_2_1_B; }else{ $suites_11_2_1_B= $form_data->suites_11_2_1_B_cm; }
	$suites_11_3_1_text = $form_data->suites_11_3_1_text;
	if(($form_data->suites_11_3_1_A_a_cm) == ''){ if($form_data->suites_11_3_1_A_a == ''){ $suites_11_3_1_A_a = ''; }else{ $suites_11_3_1_A_a = 15; } }else{ $suites_11_3_1_A_a= $form_data->suites_11_3_1_A_a_cm; }
	if(($form_data->suites_11_3_1_A_b_cm) == ''){ if($form_data->suites_11_3_1_A_b == ''){ $suites_11_3_1_A_b = ''; }else{ $suites_11_3_1_A_b = 5; } }else{ $suites_11_3_1_A_b= $form_data->suites_11_3_1_A_b_cm; }
	if(($form_data->suites_11_3_1_A_c_cm) == ''){ if($form_data->suites_11_3_1_A_c == ''){ $suites_11_3_1_A_c = ''; }else{ $suites_11_3_1_A_c = 15; } }else{ $suites_11_3_1_A_c= $form_data->suites_11_3_1_A_c_cm; }
	if(($form_data->suites_11_3_1_A_d_cm) == ''){ if($form_data->suites_11_3_1_A_d == ''){ $suites_11_3_1_A_d = ''; }else{ $suites_11_3_1_A_d = 15; } }else{ $suites_11_3_1_A_d= $form_data->suites_11_3_1_A_d_cm; }
	$suites_11_4_1_text = $form_data->suites_11_4_1_text;
	if(($form_data->suites_11_4_1_A_cm) == ''){ $suites_11_4_1_A = $form_data->suites_11_4_1_A; }else{ $suites_11_4_1_A= $form_data->suites_11_4_1_A_cm; }
	if(($form_data->suites_11_4_1_B_cm) == ''){ $suites_11_4_1_B = $form_data->suites_11_4_1_B; }else{ $suites_11_4_1_B= $form_data->suites_11_4_1_B_cm; }
	$suites_11_5_1_text = $form_data->suites_11_5_1_text;
	if(($form_data->suites_11_5_1_A_a_cm) == ''){ if($form_data->suites_11_5_1_A_a == ''){ $suites_11_5_1_A_a = ''; }else{ $suites_11_5_1_A_a = 5; } }else{ $suites_11_5_1_A_a= $form_data->suites_11_5_1_A_a_cm; }
	if(($form_data->suites_11_5_1_A_b_cm) == ''){ if($form_data->suites_11_5_1_A_b == ''){ $suites_11_5_1_A_b = ''; }else{ $suites_11_5_1_A_b = 5; } }else{ $suites_11_5_1_A_b= $form_data->suites_11_5_1_A_b_cm; }
	if(($form_data->suites_11_5_1_B_a_cm) == ''){ if($form_data->suites_11_5_1_B_a == ''){ $suites_11_5_1_B_a = ''; }else{ $suites_11_5_1_B_a = 5; } }else{ $suites_11_5_1_B_a= $form_data->suites_11_5_1_B_a_cm; }
	if(($form_data->suites_11_5_1_B_b_cm) == ''){ if($form_data->suites_11_5_1_B_b == ''){ $suites_11_5_1_B_b = ''; }else{ $suites_11_5_1_B_b = 4; } }else{ $suites_11_5_1_B_b= $form_data->suites_11_5_1_B_b_cm; }
	if(($form_data->suites_11_5_1_B_c_cm) == ''){ if($form_data->suites_11_5_1_B_c == ''){ $suites_11_5_1_B_c = ''; }else{ $suites_11_5_1_B_c = 3; } }else{ $suites_11_5_1_B_c= $form_data->suites_11_5_1_B_c_cm; }
	if(($form_data->suites_11_5_1_B_d_cm) == ''){ if($form_data->suites_11_5_1_B_d == ''){ $suites_11_5_1_B_d = ''; }else{ $suites_11_5_1_B_d = 4; } }else{ $suites_11_5_1_B_d= $form_data->suites_11_5_1_B_d_cm; }
	if(($form_data->suites_11_5_1_B_e_cm) == ''){ if($form_data->suites_11_5_1_B_e == ''){ $suites_11_5_1_B_e = ''; }else{ $suites_11_5_1_B_e = 4; } }else{ $suites_11_5_1_B_e= $form_data->suites_11_5_1_B_e_cm; }
	if(($form_data->suites_11_5_1_B_f_cm) == ''){ if($form_data->suites_11_5_1_B_f == ''){ $suites_11_5_1_B_f = ''; }else{ $suites_11_5_1_B_f = 4; } }else{ $suites_11_5_1_B_f= $form_data->suites_11_5_1_B_f_cm; }
	if(($form_data->suites_11_5_1_B_g_cm) == ''){ if($form_data->suites_11_5_1_B_g == ''){ $suites_11_5_1_B_g = ''; }else{ $suites_11_5_1_B_g = 3; } }else{ $suites_11_5_1_B_g= $form_data->suites_11_5_1_B_g_cm; }
	if(($form_data->suites_11_5_1_B_h_cm) == ''){ if($form_data->suites_11_5_1_B_h == ''){ $suites_11_5_1_B_h = ''; }else{ $suites_11_5_1_B_h = 5; } }else{ $suites_11_5_1_B_h= $form_data->suites_11_5_1_B_h_cm; }
	if(($form_data->suites_11_5_1_B_i_cm) == ''){ if($form_data->suites_11_5_1_B_i == ''){ $suites_11_5_1_B_i = ''; }else{ $suites_11_5_1_B_i = 3; } }else{ $suites_11_5_1_B_i= $form_data->suites_11_5_1_B_i_cm; }
	if(($form_data->suites_11_5_1_B_j_cm) == ''){ if($form_data->suites_11_5_1_B_j == ''){ $suites_11_5_1_B_j = ''; }else{ $suites_11_5_1_B_j = 4; } }else{ $suites_11_5_1_B_j= $form_data->suites_11_5_1_B_j_cm; }
	if(($form_data->suites_11_5_1_B_k_cm) == ''){ if($form_data->suites_11_5_1_B_k == ''){ $suites_11_5_1_B_k = ''; }else{ $suites_11_5_1_B_k = 2; } }else{ $suites_11_5_1_B_k= $form_data->suites_11_5_1_B_k_cm; }
	if(($form_data->suites_11_5_1_B_l_cm) == ''){ if($form_data->suites_11_5_1_B_l == ''){ $suites_11_5_1_B_l = ''; }else{ $suites_11_5_1_B_l = 2; } }else{ $suites_11_5_1_B_l= $form_data->suites_11_5_1_B_l_cm; }
	if(($form_data->suites_11_5_1_B_m_cm) == ''){ if($form_data->suites_11_5_1_B_m == ''){ $suites_11_5_1_B_m = ''; }else{ $suites_11_5_1_B_m = 3; } }else{ $suites_11_5_1_B_m= $form_data->suites_11_5_1_B_m_cm; }
	if(($form_data->suites_11_5_1_B_n_cm) == ''){ if($form_data->suites_11_5_1_B_n == ''){ $suites_11_5_1_B_n = ''; }else{ $suites_11_5_1_B_n = 4; } }else{ $suites_11_5_1_B_n= $form_data->suites_11_5_1_B_n_cm; }
	if(($form_data->suites_11_5_1_B_o_cm) == ''){ if($form_data->suites_11_5_1_B_o == ''){ $suites_11_5_1_B_o = ''; }else{ $suites_11_5_1_B_o = 2; } }else{ $suites_11_5_1_B_o= $form_data->suites_11_5_1_B_o_cm; }
	if(($form_data->suites_11_5_1_B_p_cm) == ''){ if($form_data->suites_11_5_1_B_p == ''){ $suites_11_5_1_B_p = ''; }else{ $suites_11_5_1_B_p = 3; } }else{ $suites_11_5_1_B_p= $form_data->suites_11_5_1_B_p_cm; }
	if(($form_data->suites_11_5_1_C_cm) == ''){ $suites_11_5_1_C = $form_data->suites_11_5_1_C; }else{ $suites_11_5_1_C= $form_data->suites_11_5_1_C_cm; }
	if(($form_data->suites_11_5_1_D_cm) == ''){ $suites_11_5_1_D = $form_data->suites_11_5_1_D; }else{ $suites_11_5_1_D= $form_data->suites_11_5_1_D_cm; }
	if(($form_data->suites_11_5_1_E_cm) == ''){ $suites_11_5_1_E = $form_data->suites_11_5_1_E; }else{ $suites_11_5_1_E= $form_data->suites_11_5_1_E_cm; }
	if(($form_data->suites_11_5_1_F_cm) == ''){ $suites_11_5_1_F = $form_data->suites_11_5_1_F; }else{ $suites_11_5_1_F= $form_data->suites_11_5_1_F_cm; }
	if(($form_data->suites_11_5_1_G_cm) == ''){ $suites_11_5_1_G = $form_data->suites_11_5_1_G; }else{ $suites_11_5_1_G= $form_data->suites_11_5_1_G_cm; }
	$suites_11_6_1_text = $form_data->suites_11_6_1_text;
	if(($form_data->suites_11_6_1_A_cm) == ''){ $suites_11_6_1_A = $form_data->suites_11_6_1_A; }else{ $suites_11_6_1_A= $form_data->suites_11_6_1_A_cm; }
	if(($form_data->suites_11_6_1_B_cm) == ''){ $suites_11_6_1_B = $form_data->suites_11_6_1_B; }else{ $suites_11_6_1_B= $form_data->suites_11_6_1_B_cm; }
	if(($form_data->suites_11_6_1_C_cm) == ''){ $suites_11_6_1_C = $form_data->suites_11_6_1_C; }else{ $suites_11_6_1_C= $form_data->suites_11_6_1_C_cm; }
	if(($form_data->suites_11_6_1_D_cm) == ''){ $suites_11_6_1_D = $form_data->suites_11_6_1_D; }else{ $suites_11_6_1_D= $form_data->suites_11_6_1_D_cm; }
	if(($form_data->suites_11_6_1_E_cm) == ''){ $suites_11_6_1_E = $form_data->suites_11_6_1_E; }else{ $suites_11_6_1_E= $form_data->suites_11_6_1_E_cm; }
	$suites_11_7_1_text = $form_data->suites_11_7_1_text;
	if(($form_data->suites_11_7_1_A_cm) == ''){ $suites_11_7_1_A = $form_data->suites_11_7_1_A; }else{ $suites_11_7_1_A= $form_data->suites_11_7_1_A_cm; }
	if(($form_data->suites_11_7_1_B_a_cm) == ''){ if($form_data->suites_11_7_1_B_a == ''){ $suites_11_7_1_B_a = ''; }else{ $suites_11_7_1_B_a = 5; } }else{ $suites_11_7_1_B_a= $form_data->suites_11_7_1_B_a_cm; }
	if(($form_data->suites_11_7_1_B_b_cm) == ''){ if($form_data->suites_11_7_1_B_b == ''){ $suites_11_7_1_B_b = ''; }else{ $suites_11_7_1_B_b = 5; } }else{ $suites_11_7_1_B_b= $form_data->suites_11_7_1_B_b_cm; }
	if(($form_data->suites_11_7_1_B_c_cm) == ''){ if($form_data->suites_11_7_1_B_c == ''){ $suites_11_7_1_B_c = ''; }else{ $suites_11_7_1_B_c = 5; } }else{ $suites_11_7_1_B_c= $form_data->suites_11_7_1_B_c_cm; }
	if(($form_data->suites_11_7_1_B_d_cm) == ''){ if($form_data->suites_11_7_1_B_d == ''){ $suites_11_7_1_B_d = ''; }else{ $suites_11_7_1_B_d = 5; } }else{ $suites_11_7_1_B_d= $form_data->suites_11_7_1_B_d_cm; }
	if(($form_data->suites_11_7_1_C_cm) == ''){ $suites_11_7_1_C = $form_data->suites_11_7_1_C; }else{ $suites_11_7_1_C= $form_data->suites_11_7_1_C_cm; }
	if(($form_data->suites_11_7_1_D_cm) == ''){ $suites_11_7_1_D = $form_data->suites_11_7_1_D; }else{ $suites_11_7_1_D= $form_data->suites_11_7_1_D_cm; }
	$suites_11_8_1_text = $form_data->suites_11_8_1_text;
	if(($form_data->suites_11_8_1_A_cm) == ''){ $suites_11_8_1_A = $form_data->suites_11_8_1_A; }else{ $suites_11_8_1_A= $form_data->suites_11_8_1_A_cm; }
	if(($form_data->suites_11_8_1_B_a_cm) == ''){ if($form_data->suites_11_8_1_B_a == ''){ $suites_11_8_1_B_a = ''; }else{ $suites_11_8_1_B_a = 3; } }else{ $suites_11_8_1_B_a= $form_data->suites_11_8_1_B_a_cm; }
	if(($form_data->suites_11_8_1_B_b_cm) == ''){ if($form_data->suites_11_8_1_B_b == ''){ $suites_11_8_1_B_b = ''; }else{ $suites_11_8_1_B_b = 3; } }else{ $suites_11_8_1_B_b= $form_data->suites_11_8_1_B_b_cm; }
	if(($form_data->suites_11_8_1_B_c_cm) == ''){ if($form_data->suites_11_8_1_B_c == ''){ $suites_11_8_1_B_c = ''; }else{ $suites_11_8_1_B_c = 3; } }else{ $suites_11_8_1_B_c= $form_data->suites_11_8_1_B_c_cm; }
	if(($form_data->suites_11_8_1_B_d_cm) == ''){ if($form_data->suites_11_8_1_B_d == ''){ $suites_11_8_1_B_d = ''; }else{ $suites_11_8_1_B_d = 2; } }else{ $suites_11_8_1_B_d= $form_data->suites_11_8_1_B_d_cm; }
	if(($form_data->suites_11_8_1_B_e_cm) == ''){ if($form_data->suites_11_8_1_B_e == ''){ $suites_11_8_1_B_e = ''; }else{ $suites_11_8_1_B_e = 2; } }else{ $suites_11_8_1_B_e= $form_data->suites_11_8_1_B_e_cm; }
	if(($form_data->suites_11_8_1_B_f_cm) == ''){ if($form_data->suites_11_8_1_B_f == ''){ $suites_11_8_1_B_f = ''; }else{ $suites_11_8_1_B_f = 3; } }else{ $suites_11_8_1_B_f= $form_data->suites_11_8_1_B_f_cm; }
	if(($form_data->suites_11_8_1_B_g_cm) == ''){ if($form_data->suites_11_8_1_B_g == ''){ $suites_11_8_1_B_g = ''; }else{ $suites_11_8_1_B_g = 2; } }else{ $suites_11_8_1_B_g= $form_data->suites_11_8_1_B_g_cm; }
	if(($form_data->suites_11_8_1_B_h_cm) == ''){ if($form_data->suites_11_8_1_B_h == ''){ $suites_11_8_1_B_h = ''; }else{ $suites_11_8_1_B_h = 2; } }else{ $suites_11_8_1_B_h= $form_data->suites_11_8_1_B_h_cm; }
	if(($form_data->suites_11_8_1_B_i_cm) == ''){ if($form_data->suites_11_8_1_B_i == ''){ $suites_11_8_1_B_i = ''; }else{ $suites_11_8_1_B_i = 2; } }else{ $suites_11_8_1_B_i= $form_data->suites_11_8_1_B_i_cm; }
	if(($form_data->suites_11_8_1_C_a_cm) == ''){ if($form_data->suites_11_8_1_C_a == ''){ $suites_11_8_1_C_a = ''; }else{ $suites_11_8_1_C_a = 2; } }else{ $suites_11_8_1_C_a= $form_data->suites_11_8_1_C_a_cm; }
	if(($form_data->suites_11_8_1_C_b_cm) == ''){ if($form_data->suites_11_8_1_C_b == ''){ $suites_11_8_1_C_b = ''; }else{ $suites_11_8_1_C_b = 3; } }else{ $suites_11_8_1_C_b= $form_data->suites_11_8_1_C_b_cm; }
	if(($form_data->suites_11_8_1_D_cm) == ''){ $suites_11_8_1_D = $form_data->suites_11_8_1_D; }else{ $suites_11_8_1_D= $form_data->suites_11_8_1_D_cm; }
	$suites_11_9_1_text = $form_data->suites_11_9_1_text;
	if(($form_data->suites_11_9_1_A_cm) == ''){ $suites_11_9_1_A = $form_data->suites_11_9_1_A; }else{ $suites_11_9_1_A= $form_data->suites_11_9_1_A_cm; }
	$suites_11_10_1_text = $form_data->suites_11_10_1_text;
	if(($form_data->suites_11_10_1_A_a_cm) == ''){ if($form_data->suites_11_10_1_A_a == ''){ $suites_11_10_1_A_a = ''; }else{ $suites_11_10_1_A_a = 2; } }else{ $suites_11_10_1_A_a= $form_data->suites_11_10_1_A_a_cm; }
	if(($form_data->suites_11_10_1_A_b_cm) == ''){ if($form_data->suites_11_10_1_A_b == ''){ $suites_11_10_1_A_b = ''; }else{ $suites_11_10_1_A_b = 2; } }else{ $suites_11_10_1_A_b= $form_data->suites_11_10_1_A_b_cm; }
	if(($form_data->suites_11_10_1_A_c_cm) == ''){ if($form_data->suites_11_10_1_A_c == ''){ $suites_11_10_1_A_c = ''; }else{ $suites_11_10_1_A_c = 2; } }else{ $suites_11_10_1_A_c= $form_data->suites_11_10_1_A_c_cm; }
	if(($form_data->suites_11_10_1_A_d_cm) == ''){ if($form_data->suites_11_10_1_A_d == ''){ $suites_11_10_1_A_d = ''; }else{ $suites_11_10_1_A_d = 2; } }else{ $suites_11_10_1_A_d= $form_data->suites_11_10_1_A_d_cm; }
	if(($form_data->suites_11_10_1_A_e_cm) == ''){ if($form_data->suites_11_10_1_A_e == ''){ $suites_11_10_1_A_e = ''; }else{ $suites_11_10_1_A_e = 2; } }else{ $suites_11_10_1_A_e= $form_data->suites_11_10_1_A_e_cm; }
	if(($form_data->suites_11_10_1_B_a_cm) == ''){ if($form_data->suites_11_10_1_B_a == ''){ $suites_11_10_1_B_a = ''; }else{ $suites_11_10_1_B_a = 2; } }else{ $suites_11_10_1_B_a= $form_data->suites_11_10_1_B_a_cm; }
	if(($form_data->suites_11_10_1_B_b_cm) == ''){ if($form_data->suites_11_10_1_B_b == ''){ $suites_11_10_1_B_b = ''; }else{ $suites_11_10_1_B_b = 2; } }else{ $suites_11_10_1_B_b= $form_data->suites_11_10_1_B_b_cm; }
	if(($form_data->suites_11_10_1_B_cm) == ''){ $suites_11_10_1_B = $form_data->suites_11_10_1_B; }else{ $suites_11_10_1_B= $form_data->suites_11_10_1_B_cm; }
	if(($form_data->suites_11_10_1_C_cm) == ''){ $suites_11_10_1_C = $form_data->suites_11_10_1_C; }else{ $suites_11_10_1_C= $form_data->suites_11_10_1_C_cm; }
	$suites_11_11_1_text = $form_data->suites_11_11_1_text;
	if(($form_data->suites_11_11_1_A_cm) == ''){ $suites_11_11_1_A = $form_data->suites_11_11_1_A; }else{ $suites_11_11_1_A= $form_data->suites_11_11_1_A_cm; }
	if(($form_data->suites_11_11_1_B_cm) == ''){ $suites_11_11_1_B = $form_data->suites_11_11_1_B; }else{ $suites_11_11_1_B= $form_data->suites_11_11_1_B_cm; }
	if(($form_data->suites_11_11_1_C_cm) == ''){ $suites_11_11_1_C = $form_data->suites_11_11_1_C; }else{ $suites_11_11_1_C= $form_data->suites_11_11_1_C_cm; }
	if(($form_data->suites_11_11_1_D_cm) == ''){ $suites_11_11_1_D = $form_data->suites_11_11_1_D; }else{ $suites_11_11_1_D= $form_data->suites_11_11_1_D_cm; }
	if(($form_data->suites_11_11_1_E_cm) == ''){ $suites_11_11_1_E = $form_data->suites_11_11_1_E; }else{ $suites_11_11_1_E= $form_data->suites_11_11_1_E_cm; }
	if(($form_data->suites_11_11_1_F_cm) == ''){ $suites_11_11_1_F = $form_data->suites_11_11_1_F; }else{ $suites_11_11_1_F= $form_data->suites_11_11_1_F_cm; }
	if(($form_data->suites_11_11_1_G_cm) == ''){ $suites_11_11_1_G = $form_data->suites_11_11_1_G; }else{ $suites_11_11_1_G= $form_data->suites_11_11_1_G_cm; }
	$suites_11_12_1_text = $form_data->suites_11_12_1_text;
	if(($form_data->suites_11_12_1_A_a_cm) == ''){ if($form_data->suites_11_12_1_A_a == ''){ $suites_11_12_1_A_a = ''; }else{ $suites_11_12_1_A_a = 2; } }else{ $suites_11_12_1_A_a= $form_data->suites_11_12_1_A_a_cm; }
	if(($form_data->suites_11_12_1_A_b_cm) == ''){ if($form_data->suites_11_12_1_A_b == ''){ $suites_11_12_1_A_b = ''; }else{ $suites_11_12_1_A_b = 2; } }else{ $suites_11_12_1_A_b= $form_data->suites_11_12_1_A_b_cm; }
	if(($form_data->suites_11_12_1_A_c_cm) == ''){ if($form_data->suites_11_12_1_A_c == ''){ $suites_11_12_1_A_c = ''; }else{ $suites_11_12_1_A_c = 2; } }else{ $suites_11_12_1_A_c= $form_data->suites_11_12_1_A_c_cm; }
	if(($form_data->suites_11_12_1_A_d_cm) == ''){ if($form_data->suites_11_12_1_A_d == ''){ $suites_11_12_1_A_d = ''; }else{ $suites_11_12_1_A_d = 1; } }else{ $suites_11_12_1_A_d= $form_data->suites_11_12_1_A_d_cm; }
	if(($form_data->suites_11_12_1_A_e_cm) == ''){ if($form_data->suites_11_12_1_A_e == ''){ $suites_11_12_1_A_e = ''; }else{ $suites_11_12_1_A_e = 5; } }else{ $suites_11_12_1_A_e= $form_data->suites_11_12_1_A_e_cm; }
	if(($form_data->suites_11_12_1_A_f_cm) == ''){ if($form_data->suites_11_12_1_A_f == ''){ $suites_11_12_1_A_f = ''; }else{ $suites_11_12_1_A_f = 3; } }else{ $suites_11_12_1_A_f= $form_data->suites_11_12_1_A_f_cm; }
	if(($form_data->suites_11_12_1_A_g_cm) == ''){ if($form_data->suites_11_12_1_A_g == ''){ $suites_11_12_1_A_g = ''; }else{ $suites_11_12_1_A_g = 2; } }else{ $suites_11_12_1_A_g= $form_data->suites_11_12_1_A_g_cm; }
	if(($form_data->suites_11_12_1_A_h_cm) == ''){ if($form_data->suites_11_12_1_A_h == ''){ $suites_11_12_1_A_h = ''; }else{ $suites_11_12_1_A_h = 2; } }else{ $suites_11_12_1_A_h= $form_data->suites_11_12_1_A_h_cm; }
	if(($form_data->suites_11_12_1_A_i_cm) == ''){ if($form_data->suites_11_12_1_A_i == ''){ $suites_11_12_1_A_i = ''; }else{ $suites_11_12_1_A_i = 1; } }else{ $suites_11_12_1_A_i= $form_data->suites_11_12_1_A_i_cm; }
	if(($form_data->suites_11_12_1_A_j_cm) == ''){ if($form_data->suites_11_12_1_A_j == ''){ $suites_11_12_1_A_j = ''; }else{ $suites_11_12_1_A_j = 2; } }else{ $suites_11_12_1_A_j= $form_data->suites_11_12_1_A_j_cm; }
	if(($form_data->suites_11_12_1_A_k_cm) == ''){ if($form_data->suites_11_12_1_A_k == ''){ $suites_11_12_1_A_k = ''; }else{ $suites_11_12_1_A_k = 3; } }else{ $suites_11_12_1_A_k= $form_data->suites_11_12_1_A_k_cm; }
	if(($form_data->suites_11_12_1_A_l_cm) == ''){ if($form_data->suites_11_12_1_A_l == ''){ $suites_11_12_1_A_l = ''; }else{ $suites_11_12_1_A_l = 4; } }else{ $suites_11_12_1_A_l= $form_data->suites_11_12_1_A_l_cm; }
	if(($form_data->suites_11_12_1_A_m_cm) == ''){ if($form_data->suites_11_12_1_A_m == ''){ $suites_11_12_1_A_m = ''; }else{ $suites_11_12_1_A_m = 3; } }else{ $suites_11_12_1_A_m= $form_data->suites_11_12_1_A_m_cm; }
	if(($form_data->suites_11_12_1_A_n_cm) == ''){ if($form_data->suites_11_12_1_A_n == ''){ $suites_11_12_1_A_n = ''; }else{ $suites_11_12_1_A_n = 3; } }else{ $suites_11_12_1_A_n= $form_data->suites_11_12_1_A_n_cm; }
	if(($form_data->suites_11_12_1_A_o_cm) == ''){ if($form_data->suites_11_12_1_A_o == ''){ $suites_11_12_1_A_o = ''; }else{ $suites_11_12_1_A_o = 2; } }else{ $suites_11_12_1_A_o= $form_data->suites_11_12_1_A_o_cm; }
	if(($form_data->suites_11_12_1_A_p_cm) == ''){ if($form_data->suites_11_12_1_A_p == ''){ $suites_11_12_1_A_p = ''; }else{ $suites_11_12_1_A_p = 2; } }else{ $suites_11_12_1_A_p= $form_data->suites_11_12_1_A_p_cm; }
	if(($form_data->suites_11_12_1_A_q_cm) == ''){ if($form_data->suites_11_12_1_A_q == ''){ $suites_11_12_1_A_q = ''; }else{ $suites_11_12_1_A_q = 3; } }else{ $suites_11_12_1_A_q= $form_data->suites_11_12_1_A_q_cm; }
	if(($form_data->suites_11_12_1_A_r_cm) == ''){ if($form_data->suites_11_12_1_A_r == ''){ $suites_11_12_1_A_r = ''; }else{ $suites_11_12_1_A_r = 3; } }else{ $suites_11_12_1_A_r= $form_data->suites_11_12_1_A_r_cm; }
	if(($form_data->suites_11_12_1_A_s_cm) == ''){ if($form_data->suites_11_12_1_A_s == ''){ $suites_11_12_1_A_s = ''; }else{ $suites_11_12_1_A_s = 4; } }else{ $suites_11_12_1_A_s= $form_data->suites_11_12_1_A_s_cm; }
	if(($form_data->suites_11_12_1_A_t_cm) == ''){ if($form_data->suites_11_12_1_A_t == ''){ $suites_11_12_1_A_t = ''; }else{ $suites_11_12_1_A_t = 4; } }else{ $suites_11_12_1_A_t= $form_data->suites_11_12_1_A_t_cm; }
	if(($form_data->suites_11_12_1_A_u_cm) == ''){ if($form_data->suites_11_12_1_A_u == ''){ $suites_11_12_1_A_u = ''; }else{ $suites_11_12_1_A_u = 4; } }else{ $suites_11_12_1_A_u= $form_data->suites_11_12_1_A_u_cm; }
	if(($form_data->suites_11_12_1_A_v_cm) == ''){ if($form_data->suites_11_12_1_A_v == ''){ $suites_11_12_1_A_v = ''; }else{ $suites_11_12_1_A_v = 3; } }else{ $suites_11_12_1_A_v= $form_data->suites_11_12_1_A_v_cm; }
	if(($form_data->suites_11_12_1_B_cm) == ''){ $suites_11_12_1_B = $form_data->suites_11_12_1_B; }else{ $suites_11_12_1_B= $form_data->suites_11_12_1_B_cm; }
	if(($form_data->suites_11_12_1_C_cm) == ''){ $suites_11_12_1_C = $form_data->suites_11_12_1_C; }else{ $suites_11_12_1_C= $form_data->suites_11_12_1_C_cm; }
	$suites_11_13_1_text = $form_data->suites_11_13_1_text;
	if(($form_data->suites_11_13_1_A_cm) == ''){ $suites_11_13_1_A = $form_data->suites_11_13_1_A; }else{ $suites_11_13_1_A= $form_data->suites_11_13_1_A_cm; }
	if(($form_data->suites_11_13_1_B_cm) == ''){ $suites_11_13_1_B = $form_data->suites_11_13_1_B; }else{ $suites_11_13_1_B= $form_data->suites_11_13_1_B_cm; }
	$suites_11_14_1_text = $form_data->suites_11_14_1_text;
	if(($form_data->suites_11_14_1_A_cm) == ''){ $suites_11_14_1_A = $form_data->suites_11_14_1_A; }else{ $suites_11_14_1_A= $form_data->suites_11_14_1_A_cm; }
	if(($form_data->suites_11_14_1_B_a_cm) == ''){ if($form_data->suites_11_14_1_B_a == ''){ $suites_11_14_1_B_a = ''; }else{ $suites_11_14_1_B_a = 3; } }else{ $suites_11_14_1_B_a= $form_data->suites_11_14_1_B_a_cm; }
	if(($form_data->suites_11_14_1_B_b_cm) == ''){ if($form_data->suites_11_14_1_B_b == ''){ $suites_11_14_1_B_b = ''; }else{ $suites_11_14_1_B_b = 3; } }else{ $suites_11_14_1_B_b= $form_data->suites_11_14_1_B_b_cm; }
	if(($form_data->suites_11_14_1_B_c_cm) == ''){ if($form_data->suites_11_14_1_B_c == ''){ $suites_11_14_1_B_c = ''; }else{ $suites_11_14_1_B_c = 3; } }else{ $suites_11_14_1_B_c= $form_data->suites_11_14_1_B_c_cm; }
	if(($form_data->suites_11_14_1_C_cm) == ''){ $suites_11_14_1_C = $form_data->suites_11_14_1_C; }else{ $suites_11_14_1_C= $form_data->suites_11_14_1_C_cm; }
	$suites_11_15_1_text = $form_data->suites_11_15_1_text;
	if(($form_data->suites_11_15_1_A_cm) == ''){ $suites_11_15_1_A = $form_data->suites_11_15_1_A; }else{ $suites_11_15_1_A= $form_data->suites_11_15_1_A_cm; }
	$suites_11_16_1_text = $form_data->suites_11_16_1_text;
	if(($form_data->suites_11_16_1_A_a_cm) == ''){ if($form_data->suites_11_16_1_A_a == ''){ $suites_11_16_1_A_a = ''; }else{ $suites_11_16_1_A_a = 2; } }else{ $suites_11_16_1_A_a= $form_data->suites_11_16_1_A_a_cm; }
	if(($form_data->suites_11_16_1_A_b_cm) == ''){ if($form_data->suites_11_16_1_A_b == ''){ $suites_11_16_1_A_b = ''; }else{ $suites_11_16_1_A_b = 2; } }else{ $suites_11_16_1_A_b= $form_data->suites_11_16_1_A_b_cm; }
	if(($form_data->suites_11_16_1_A_c_cm) == ''){ if($form_data->suites_11_16_1_A_c == ''){ $suites_11_16_1_A_c = ''; }else{ $suites_11_16_1_A_c = 3; } }else{ $suites_11_16_1_A_c= $form_data->suites_11_16_1_A_c_cm; }
	if(($form_data->suites_11_16_1_A_d_cm) == ''){ if($form_data->suites_11_16_1_A_d == ''){ $suites_11_16_1_A_d = ''; }else{ $suites_11_16_1_A_d = 3; } }else{ $suites_11_16_1_A_d= $form_data->suites_11_16_1_A_d_cm; }
	if(($form_data->suites_11_16_1_A_e_cm) == ''){ if($form_data->suites_11_16_1_A_e == ''){ $suites_11_16_1_A_e = ''; }else{ $suites_11_16_1_A_e = 3; } }else{ $suites_11_16_1_A_e= $form_data->suites_11_16_1_A_e_cm; }
	if(($form_data->suites_11_16_1_A_f_cm) == ''){ if($form_data->suites_11_16_1_A_f == ''){ $suites_11_16_1_A_f = ''; }else{ $suites_11_16_1_A_f = 3; } }else{ $suites_11_16_1_A_f= $form_data->suites_11_16_1_A_f_cm; }
	if(($form_data->suites_11_16_1_A_g_cm) == ''){ if($form_data->suites_11_16_1_A_g == ''){ $suites_11_16_1_A_g = ''; }else{ $suites_11_16_1_A_g = 3; } }else{ $suites_11_16_1_A_g= $form_data->suites_11_16_1_A_g_cm; }
	if(($form_data->suites_11_16_1_A_h_cm) == ''){ if($form_data->suites_11_16_1_A_h == ''){ $suites_11_16_1_A_h = ''; }else{ $suites_11_16_1_A_h = 2; } }else{ $suites_11_16_1_A_h= $form_data->suites_11_16_1_A_h_cm; }
	if(($form_data->suites_11_16_1_A_i_cm) == ''){ if($form_data->suites_11_16_1_A_i == ''){ $suites_11_16_1_A_i = ''; }else{ $suites_11_16_1_A_i = 2; } }else{ $suites_11_16_1_A_i= $form_data->suites_11_16_1_A_i_cm; }
	if(($form_data->suites_11_16_1_A_j_cm) == ''){ if($form_data->suites_11_16_1_A_j == ''){ $suites_11_16_1_A_j = ''; }else{ $suites_11_16_1_A_j = 3; } }else{ $suites_11_16_1_A_j= $form_data->suites_11_16_1_A_j_cm; }
	if(($form_data->suites_11_16_1_A_k_cm) == ''){ if($form_data->suites_11_16_1_A_k == ''){ $suites_11_16_1_A_k = ''; }else{ $suites_11_16_1_A_k = 2; } }else{ $suites_11_16_1_A_k= $form_data->suites_11_16_1_A_k_cm; }
	if(($form_data->suites_11_16_1_A_l_cm) == ''){ if($form_data->suites_11_16_1_A_l == ''){ $suites_11_16_1_A_l = ''; }else{ $suites_11_16_1_A_l = 2; } }else{ $suites_11_16_1_A_l= $form_data->suites_11_16_1_A_l_cm; }
	if(($form_data->suites_11_16_1_A_m_cm) == ''){ if($form_data->suites_11_16_1_A_m == ''){ $suites_11_16_1_A_m = ''; }else{ $suites_11_16_1_A_m = 2; } }else{ $suites_11_16_1_A_m= $form_data->suites_11_16_1_A_m_cm; }
	if(($form_data->suites_11_16_1_A_n_cm) == ''){ if($form_data->suites_11_16_1_A_n == ''){ $suites_11_16_1_A_n = ''; }else{ $suites_11_16_1_A_n = 3; } }else{ $suites_11_16_1_A_n= $form_data->suites_11_16_1_A_n_cm; }
	if(($form_data->suites_11_16_1_A_o_cm) == ''){ if($form_data->suites_11_16_1_A_o == ''){ $suites_11_16_1_A_o = ''; }else{ $suites_11_16_1_A_o = 3; } }else{ $suites_11_16_1_A_o= $form_data->suites_11_16_1_A_o_cm; }
	if(($form_data->suites_11_16_1_A_p_cm) == ''){ if($form_data->suites_11_16_1_A_p == ''){ $suites_11_16_1_A_p = ''; }else{ $suites_11_16_1_A_p = 3; } }else{ $suites_11_16_1_A_p= $form_data->suites_11_16_1_A_p_cm; }
	if(($form_data->suites_11_16_1_A_q_cm) == ''){ if($form_data->suites_11_16_1_A_q == ''){ $suites_11_16_1_A_q = ''; }else{ $suites_11_16_1_A_q = 3; } }else{ $suites_11_16_1_A_q= $form_data->suites_11_16_1_A_q_cm; }
	if(($form_data->suites_11_16_1_A_r_cm) == ''){ if($form_data->suites_11_16_1_A_r == ''){ $suites_11_16_1_A_r = ''; }else{ $suites_11_16_1_A_r = 4; } }else{ $suites_11_16_1_A_r= $form_data->suites_11_16_1_A_r_cm; }
	if(($form_data->suites_11_16_1_A_s_cm) == ''){ if($form_data->suites_11_16_1_A_s == ''){ $suites_11_16_1_A_s = ''; }else{ $suites_11_16_1_A_s = 3; } }else{ $suites_11_16_1_A_s= $form_data->suites_11_16_1_A_s_cm; }
	if(($form_data->suites_11_16_1_A_t_cm) == ''){ if($form_data->suites_11_16_1_A_t == ''){ $suites_11_16_1_A_t = ''; }else{ $suites_11_16_1_A_t = 3; } }else{ $suites_11_16_1_A_t= $form_data->suites_11_16_1_A_t_cm; }
	if(($form_data->suites_11_16_1_A_u_cm) == ''){ if($form_data->suites_11_16_1_A_u == ''){ $suites_11_16_1_A_u = ''; }else{ $suites_11_16_1_A_u = 3; } }else{ $suites_11_16_1_A_u= $form_data->suites_11_16_1_A_u_cm; }
	if(($form_data->suites_11_16_1_A_v_cm) == ''){ if($form_data->suites_11_16_1_A_v == ''){ $suites_11_16_1_A_v = ''; }else{ $suites_11_16_1_A_v = 3; } }else{ $suites_11_16_1_A_v= $form_data->suites_11_16_1_A_v_cm; }
	if(($form_data->suites_11_16_1_B_cm) == ''){ $suites_11_16_1_B = $form_data->suites_11_16_1_B; }else{ $suites_11_16_1_B= $form_data->suites_11_16_1_B_cm; }
	if(($form_data->suites_11_16_1_C_cm) == ''){ $suites_11_16_1_C = $form_data->suites_11_16_1_C; }else{ $suites_11_16_1_C= $form_data->suites_11_16_1_C_cm; }
	if(($form_data->suites_11_16_1_D_cm) == ''){ $suites_11_16_1_D = $form_data->suites_11_16_1_D; }else{ $suites_11_16_1_D= $form_data->suites_11_16_1_D_cm; }
	if(($form_data->suites_11_16_1_E_cm) == ''){ $suites_11_16_1_E = $form_data->suites_11_16_1_E; }else{ $suites_11_16_1_E= $form_data->suites_11_16_1_E_cm; }
	if(($form_data->suites_11_16_1_F_cm) == ''){ $suites_11_16_1_F = $form_data->suites_11_16_1_F; }else{ $suites_11_16_1_F= $form_data->suites_11_16_1_F_cm; }
	$suites_11_17_1_text = $form_data->suites_11_17_1_text;
	if(($form_data->suites_11_17_1_A_a_cm) == ''){ if($form_data->suites_11_17_1_A_a == ''){ $suites_11_17_1_A_a = ''; }else{ $suites_11_17_1_A_a = 3; } }else{ $suites_11_17_1_A_a= $form_data->suites_11_17_1_A_a_cm; }
	if(($form_data->suites_11_17_1_A_b_cm) == ''){ if($form_data->suites_11_17_1_A_b == ''){ $suites_11_17_1_A_b = ''; }else{ $suites_11_17_1_A_b = 3; } }else{ $suites_11_17_1_A_b= $form_data->suites_11_17_1_A_b_cm; }
	if(($form_data->suites_11_17_1_A_c_cm) == ''){ if($form_data->suites_11_17_1_A_c == ''){ $suites_11_17_1_A_c = ''; }else{ $suites_11_17_1_A_c = 3; } }else{ $suites_11_17_1_A_c= $form_data->suites_11_17_1_A_c_cm; }
	if(($form_data->suites_11_17_1_A_d_cm) == ''){ if($form_data->suites_11_17_1_A_d == ''){ $suites_11_17_1_A_d = ''; }else{ $suites_11_17_1_A_d = 3; } }else{ $suites_11_17_1_A_d= $form_data->suites_11_17_1_A_d_cm; }
	if(($form_data->suites_11_17_1_A_e_cm) == ''){ if($form_data->suites_11_17_1_A_e == ''){ $suites_11_17_1_A_e = ''; }else{ $suites_11_17_1_A_e = 2; } }else{ $suites_11_17_1_A_e= $form_data->suites_11_17_1_A_e_cm; }
	if(($form_data->suites_11_17_1_A_f_cm) == ''){ if($form_data->suites_11_17_1_A_f == ''){ $suites_11_17_1_A_f = ''; }else{ $suites_11_17_1_A_f = 3; } }else{ $suites_11_17_1_A_f= $form_data->suites_11_17_1_A_f_cm; }
	if(($form_data->suites_11_17_1_A_g_cm) == ''){ if($form_data->suites_11_17_1_A_g == ''){ $suites_11_17_1_A_g = ''; }else{ $suites_11_17_1_A_g = 3; } }else{ $suites_11_17_1_A_g= $form_data->suites_11_17_1_A_g_cm; }
	if(($form_data->suites_11_17_1_A_h_cm) == ''){ if($form_data->suites_11_17_1_A_h == ''){ $suites_11_17_1_A_h = ''; }else{ $suites_11_17_1_A_h = 3; } }else{ $suites_11_17_1_A_h= $form_data->suites_11_17_1_A_h_cm; }
	if(($form_data->suites_11_17_1_A_i_cm) == ''){ if($form_data->suites_11_17_1_A_i == ''){ $suites_11_17_1_A_i = ''; }else{ $suites_11_17_1_A_i = 2; } }else{ $suites_11_17_1_A_i= $form_data->suites_11_17_1_A_i_cm; }
	if(($form_data->suites_11_17_1_A_j_cm) == ''){ if($form_data->suites_11_17_1_A_j == ''){ $suites_11_17_1_A_j = ''; }else{ $suites_11_17_1_A_j = 3; } }else{ $suites_11_17_1_A_j= $form_data->suites_11_17_1_A_j_cm; }
	if(($form_data->suites_11_17_1_A_k_cm) == ''){ if($form_data->suites_11_17_1_A_k == ''){ $suites_11_17_1_A_k = ''; }else{ $suites_11_17_1_A_k = 2; } }else{ $suites_11_17_1_A_k= $form_data->suites_11_17_1_A_k_cm; }
	if(($form_data->suites_11_17_1_B_cm) == ''){ $suites_11_17_1_B = $form_data->suites_11_17_1_B; }else{ $suites_11_17_1_B= $form_data->suites_11_17_1_B_cm; }
	if(($form_data->suites_11_17_1_C_cm) == ''){ $suites_11_17_1_C = $form_data->suites_11_17_1_C; }else{ $suites_11_17_1_C= $form_data->suites_11_17_1_C_cm; }
	$suites_11_18_1_text = $form_data->suites_11_18_1_text;
	if(($form_data->suites_11_18_1_A_cm) == ''){ $suites_11_18_1_A = $form_data->suites_11_18_1_A; }else{ $suites_11_18_1_A= $form_data->suites_11_18_1_A_cm; }
	if(($form_data->suites_11_18_1_B_cm) == ''){ $suites_11_18_1_B = $form_data->suites_11_18_1_B; }else{ $suites_11_18_1_B= $form_data->suites_11_18_1_B_cm; }
	if(($form_data->suites_11_18_1_C_cm) == ''){ $suites_11_18_1_C = $form_data->suites_11_18_1_C; }else{ $suites_11_18_1_C= $form_data->suites_11_18_1_C_cm; }
	if(($form_data->suites_11_18_1_D_cm) == ''){ $suites_11_18_1_D = $form_data->suites_11_18_1_D; }else{ $suites_11_18_1_D= $form_data->suites_11_18_1_D_cm; }
	if(($form_data->suites_11_18_1_E_cm) == ''){ $suites_11_18_1_E = $form_data->suites_11_18_1_E; }else{ $suites_11_18_1_E= $form_data->suites_11_18_1_E_cm; }
	if(($form_data->suites_11_18_1_F_cm) == ''){ $suites_11_18_1_F = $form_data->suites_11_18_1_F; }else{ $suites_11_18_1_F= $form_data->suites_11_18_1_F_cm; }
	$suites_11_19_1_text = $form_data->suites_11_19_1_text;
	if(($form_data->suites_11_19_1_A_a_cm) == ''){ if($form_data->suites_11_19_1_A_a == ''){ $suites_11_19_1_A_a = ''; }else{ $suites_11_19_1_A_a = 2; } }else{ $suites_11_19_1_A_a= $form_data->suites_11_19_1_A_a_cm; }
	if(($form_data->suites_11_19_1_A_b_cm) == ''){ if($form_data->suites_11_19_1_A_b == ''){ $suites_11_19_1_A_b = ''; }else{ $suites_11_19_1_A_b = 2; } }else{ $suites_11_19_1_A_b= $form_data->suites_11_19_1_A_b_cm; }
	if(($form_data->suites_11_19_1_A_c_cm) == ''){ if($form_data->suites_11_19_1_A_c == ''){ $suites_11_19_1_A_c = ''; }else{ $suites_11_19_1_A_c = 2; } }else{ $suites_11_19_1_A_c= $form_data->suites_11_19_1_A_c_cm; }
	if(($form_data->suites_11_19_1_A_d_cm) == ''){ if($form_data->suites_11_19_1_A_d == ''){ $suites_11_19_1_A_d = ''; }else{ $suites_11_19_1_A_d = 2; } }else{ $suites_11_19_1_A_d= $form_data->suites_11_19_1_A_d_cm; }
	if(($form_data->suites_11_19_1_A_e_cm) == ''){ if($form_data->suites_11_19_1_A_e == ''){ $suites_11_19_1_A_e = ''; }else{ $suites_11_19_1_A_e = 2; } }else{ $suites_11_19_1_A_e= $form_data->suites_11_19_1_A_e_cm; }
	if(($form_data->suites_11_19_1_B_cm) == ''){ $suites_11_19_1_B = $form_data->suites_11_19_1_B; }else{ $suites_11_19_1_B= $form_data->suites_11_19_1_B_cm; }
	if(($form_data->suites_11_19_1_C_cm) == ''){ $suites_11_19_1_C = $form_data->suites_11_19_1_C; }else{ $suites_11_19_1_C= $form_data->suites_11_19_1_C_cm; }
	if(($form_data->suites_11_19_1_D_cm) == ''){ $suites_11_19_1_D = $form_data->suites_11_19_1_D; }else{ $suites_11_19_1_D= $form_data->suites_11_19_1_D_cm; }
	if(($form_data->suites_11_19_1_E_cm) == ''){ $suites_11_19_1_E = $form_data->suites_11_19_1_E; }else{ $suites_11_19_1_E= $form_data->suites_11_19_1_E_cm; }
	if(($form_data->suites_11_19_1_F_cm) == ''){ $suites_11_19_1_F = $form_data->suites_11_19_1_F; }else{ $suites_11_19_1_F= $form_data->suites_11_19_1_F_cm; }
	$suites_11_20_1_text = $form_data->suites_11_20_1_text;
	if(($form_data->suites_11_20_1_A_cm) == ''){ $suites_11_20_1_A = $form_data->suites_11_20_1_A; }else{ $suites_11_20_1_A= $form_data->suites_11_20_1_A_cm; }
	if(($form_data->suites_11_20_1_B_cm) == ''){ $suites_11_20_1_B = $form_data->suites_11_20_1_B; }else{ $suites_11_20_1_B= $form_data->suites_11_20_1_B_cm; }
	if(($form_data->suites_11_20_1_C_cm) == ''){ $suites_11_20_1_C = $form_data->suites_11_20_1_C; }else{ $suites_11_20_1_C= $form_data->suites_11_20_1_C_cm; }
	$hygiene_and_sanitation_12_1_1_text = $form_data->hygiene_and_sanitation_12_1_1_text;
	if(($form_data->hygiene_and_sanitation_12_1_1_A_cm) == ''){ $hygiene_and_sanitation_12_1_1_A = $form_data->hygiene_and_sanitation_12_1_1_A; }else{ $hygiene_and_sanitation_12_1_1_A= $form_data->hygiene_and_sanitation_12_1_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_B_cm) == ''){ $hygiene_and_sanitation_12_1_1_B = $form_data->hygiene_and_sanitation_12_1_1_B; }else{ $hygiene_and_sanitation_12_1_1_B= $form_data->hygiene_and_sanitation_12_1_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_C_cm) == ''){ $hygiene_and_sanitation_12_1_1_C = $form_data->hygiene_and_sanitation_12_1_1_C; }else{ $hygiene_and_sanitation_12_1_1_C= $form_data->hygiene_and_sanitation_12_1_1_C_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_a_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_a == ''){ $hygiene_and_sanitation_12_1_1_D_a = ''; }else{ $hygiene_and_sanitation_12_1_1_D_a = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_a= $form_data->hygiene_and_sanitation_12_1_1_D_a_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_b_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_b == ''){ $hygiene_and_sanitation_12_1_1_D_b = ''; }else{ $hygiene_and_sanitation_12_1_1_D_b = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_b= $form_data->hygiene_and_sanitation_12_1_1_D_b_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_c_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_c == ''){ $hygiene_and_sanitation_12_1_1_D_c = ''; }else{ $hygiene_and_sanitation_12_1_1_D_c = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_c= $form_data->hygiene_and_sanitation_12_1_1_D_c_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_d_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_d == ''){ $hygiene_and_sanitation_12_1_1_D_d = ''; }else{ $hygiene_and_sanitation_12_1_1_D_d = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_d= $form_data->hygiene_and_sanitation_12_1_1_D_d_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_e_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_e == ''){ $hygiene_and_sanitation_12_1_1_D_e = ''; }else{ $hygiene_and_sanitation_12_1_1_D_e = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_e= $form_data->hygiene_and_sanitation_12_1_1_D_e_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_f_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_f == ''){ $hygiene_and_sanitation_12_1_1_D_f = ''; }else{ $hygiene_and_sanitation_12_1_1_D_f = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_f= $form_data->hygiene_and_sanitation_12_1_1_D_f_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_g_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_g == ''){ $hygiene_and_sanitation_12_1_1_D_g = ''; }else{ $hygiene_and_sanitation_12_1_1_D_g = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_g= $form_data->hygiene_and_sanitation_12_1_1_D_g_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_D_h_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_D_h == ''){ $hygiene_and_sanitation_12_1_1_D_h = ''; }else{ $hygiene_and_sanitation_12_1_1_D_h = 1; } }else{ $hygiene_and_sanitation_12_1_1_D_h= $form_data->hygiene_and_sanitation_12_1_1_D_h_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_E_cm) == ''){ $hygiene_and_sanitation_12_1_1_E = $form_data->hygiene_and_sanitation_12_1_1_E; }else{ $hygiene_and_sanitation_12_1_1_E= $form_data->hygiene_and_sanitation_12_1_1_E_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_F_cm) == ''){ $hygiene_and_sanitation_12_1_1_F = $form_data->hygiene_and_sanitation_12_1_1_F; }else{ $hygiene_and_sanitation_12_1_1_F= $form_data->hygiene_and_sanitation_12_1_1_F_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_G_cm) == ''){ $hygiene_and_sanitation_12_1_1_G = $form_data->hygiene_and_sanitation_12_1_1_G; }else{ $hygiene_and_sanitation_12_1_1_G= $form_data->hygiene_and_sanitation_12_1_1_G_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_H_cm) == ''){ $hygiene_and_sanitation_12_1_1_H = $form_data->hygiene_and_sanitation_12_1_1_H; }else{ $hygiene_and_sanitation_12_1_1_H= $form_data->hygiene_and_sanitation_12_1_1_H_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_I_a_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_I_a == ''){ $hygiene_and_sanitation_12_1_1_I_a = ''; }else{ $hygiene_and_sanitation_12_1_1_I_a = 1; } }else{ $hygiene_and_sanitation_12_1_1_I_a= $form_data->hygiene_and_sanitation_12_1_1_I_a_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_I_b_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_I_b == ''){ $hygiene_and_sanitation_12_1_1_I_b = ''; }else{ $hygiene_and_sanitation_12_1_1_I_b = 1; } }else{ $hygiene_and_sanitation_12_1_1_I_b= $form_data->hygiene_and_sanitation_12_1_1_I_b_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_I_c_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_I_c == ''){ $hygiene_and_sanitation_12_1_1_I_c = ''; }else{ $hygiene_and_sanitation_12_1_1_I_c = 1; } }else{ $hygiene_and_sanitation_12_1_1_I_c= $form_data->hygiene_and_sanitation_12_1_1_I_c_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_I_d_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_I_d == ''){ $hygiene_and_sanitation_12_1_1_I_d = ''; }else{ $hygiene_and_sanitation_12_1_1_I_d = 1; } }else{ $hygiene_and_sanitation_12_1_1_I_d= $form_data->hygiene_and_sanitation_12_1_1_I_d_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_I_e_cm) == ''){ if($form_data->hygiene_and_sanitation_12_1_1_I_e == ''){ $hygiene_and_sanitation_12_1_1_I_e = ''; }else{ $hygiene_and_sanitation_12_1_1_I_e = 1; } }else{ $hygiene_and_sanitation_12_1_1_I_e= $form_data->hygiene_and_sanitation_12_1_1_I_e_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_J_cm) == ''){ $hygiene_and_sanitation_12_1_1_J = $form_data->hygiene_and_sanitation_12_1_1_J; }else{ $hygiene_and_sanitation_12_1_1_J= $form_data->hygiene_and_sanitation_12_1_1_J_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_K_cm) == ''){ $hygiene_and_sanitation_12_1_1_K = $form_data->hygiene_and_sanitation_12_1_1_K; }else{ $hygiene_and_sanitation_12_1_1_K= $form_data->hygiene_and_sanitation_12_1_1_K_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_L_cm) == ''){ $hygiene_and_sanitation_12_1_1_L = $form_data->hygiene_and_sanitation_12_1_1_L; }else{ $hygiene_and_sanitation_12_1_1_L= $form_data->hygiene_and_sanitation_12_1_1_L_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_M_cm) == ''){ $hygiene_and_sanitation_12_1_1_M = $form_data->hygiene_and_sanitation_12_1_1_M; }else{ $hygiene_and_sanitation_12_1_1_M= $form_data->hygiene_and_sanitation_12_1_1_M_cm; }
	if(($form_data->hygiene_and_sanitation_12_1_1_N_cm) == ''){ $hygiene_and_sanitation_12_1_1_N = $form_data->hygiene_and_sanitation_12_1_1_N; }else{ $hygiene_and_sanitation_12_1_1_N= $form_data->hygiene_and_sanitation_12_1_1_N_cm; }
	$hygiene_and_sanitation_12_2_1_text = $form_data->hygiene_and_sanitation_12_2_1_text;
	if(($form_data->hygiene_and_sanitation_12_2_1_A_cm) == ''){ $hygiene_and_sanitation_12_2_1_A = $form_data->hygiene_and_sanitation_12_2_1_A; }else{ $hygiene_and_sanitation_12_2_1_A= $form_data->hygiene_and_sanitation_12_2_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_B_cm) == ''){ $hygiene_and_sanitation_12_2_1_B = $form_data->hygiene_and_sanitation_12_2_1_B; }else{ $hygiene_and_sanitation_12_2_1_B= $form_data->hygiene_and_sanitation_12_2_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_C_cm) == ''){ $hygiene_and_sanitation_12_2_1_C = $form_data->hygiene_and_sanitation_12_2_1_C; }else{ $hygiene_and_sanitation_12_2_1_C= $form_data->hygiene_and_sanitation_12_2_1_C_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_D_cm) == ''){ $hygiene_and_sanitation_12_2_1_D = $form_data->hygiene_and_sanitation_12_2_1_D; }else{ $hygiene_and_sanitation_12_2_1_D= $form_data->hygiene_and_sanitation_12_2_1_D_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_a_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_a == ''){ $hygiene_and_sanitation_12_2_1_E_a = ''; }else{ $hygiene_and_sanitation_12_2_1_E_a = 2; } }else{ $hygiene_and_sanitation_12_2_1_E_a= $form_data->hygiene_and_sanitation_12_2_1_E_a_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_b_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_b == ''){ $hygiene_and_sanitation_12_2_1_E_b = ''; }else{ $hygiene_and_sanitation_12_2_1_E_b = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_b= $form_data->hygiene_and_sanitation_12_2_1_E_b_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_c_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_c == ''){ $hygiene_and_sanitation_12_2_1_E_c = ''; }else{ $hygiene_and_sanitation_12_2_1_E_c = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_c= $form_data->hygiene_and_sanitation_12_2_1_E_c_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_d_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_d == ''){ $hygiene_and_sanitation_12_2_1_E_d = ''; }else{ $hygiene_and_sanitation_12_2_1_E_d = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_d= $form_data->hygiene_and_sanitation_12_2_1_E_d_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_e_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_e == ''){ $hygiene_and_sanitation_12_2_1_E_e = ''; }else{ $hygiene_and_sanitation_12_2_1_E_e = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_e= $form_data->hygiene_and_sanitation_12_2_1_E_e_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_f_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_f == ''){ $hygiene_and_sanitation_12_2_1_E_f = ''; }else{ $hygiene_and_sanitation_12_2_1_E_f = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_f= $form_data->hygiene_and_sanitation_12_2_1_E_f_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_g_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_g == ''){ $hygiene_and_sanitation_12_2_1_E_g = ''; }else{ $hygiene_and_sanitation_12_2_1_E_g = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_g= $form_data->hygiene_and_sanitation_12_2_1_E_g_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_h_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_h == ''){ $hygiene_and_sanitation_12_2_1_E_h = ''; }else{ $hygiene_and_sanitation_12_2_1_E_h = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_h= $form_data->hygiene_and_sanitation_12_2_1_E_h_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_E_i_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_E_i == ''){ $hygiene_and_sanitation_12_2_1_E_i = ''; }else{ $hygiene_and_sanitation_12_2_1_E_i = 1; } }else{ $hygiene_and_sanitation_12_2_1_E_i= $form_data->hygiene_and_sanitation_12_2_1_E_i_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_F_cm) == ''){ $hygiene_and_sanitation_12_2_1_F = $form_data->hygiene_and_sanitation_12_2_1_F; }else{ $hygiene_and_sanitation_12_2_1_F= $form_data->hygiene_and_sanitation_12_2_1_F_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_G_cm) == ''){ $hygiene_and_sanitation_12_2_1_G = $form_data->hygiene_and_sanitation_12_2_1_G; }else{ $hygiene_and_sanitation_12_2_1_G= $form_data->hygiene_and_sanitation_12_2_1_G_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_H_a_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_H_a == ''){ $hygiene_and_sanitation_12_2_1_H_a = ''; }else{ $hygiene_and_sanitation_12_2_1_H_a = 1; } }else{ $hygiene_and_sanitation_12_2_1_H_a= $form_data->hygiene_and_sanitation_12_2_1_H_a_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_H_b_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_H_b == ''){ $hygiene_and_sanitation_12_2_1_H_b = ''; }else{ $hygiene_and_sanitation_12_2_1_H_b = 1; } }else{ $hygiene_and_sanitation_12_2_1_H_b= $form_data->hygiene_and_sanitation_12_2_1_H_b_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_H_c_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_H_c == ''){ $hygiene_and_sanitation_12_2_1_H_c = ''; }else{ $hygiene_and_sanitation_12_2_1_H_c = 1; } }else{ $hygiene_and_sanitation_12_2_1_H_c= $form_data->hygiene_and_sanitation_12_2_1_H_c_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_H_d_cm) == ''){ if($form_data->hygiene_and_sanitation_12_2_1_H_d == ''){ $hygiene_and_sanitation_12_2_1_H_d = ''; }else{ $hygiene_and_sanitation_12_2_1_H_d = 1; } }else{ $hygiene_and_sanitation_12_2_1_H_d= $form_data->hygiene_and_sanitation_12_2_1_H_d_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_I_cm) == ''){ $hygiene_and_sanitation_12_2_1_I = $form_data->hygiene_and_sanitation_12_2_1_I; }else{ $hygiene_and_sanitation_12_2_1_I= $form_data->hygiene_and_sanitation_12_2_1_I_cm; }
	if(($form_data->hygiene_and_sanitation_12_2_1_J_cm) == ''){ $hygiene_and_sanitation_12_2_1_J = $form_data->hygiene_and_sanitation_12_2_1_J; }else{ $hygiene_and_sanitation_12_2_1_J= $form_data->hygiene_and_sanitation_12_2_1_J_cm; }
	$hygiene_and_sanitation_12_3_1_text = $form_data->hygiene_and_sanitation_12_3_1_text;
	if(($form_data->hygiene_and_sanitation_12_3_1_A_cm) == ''){ $hygiene_and_sanitation_12_3_1_A = $form_data->hygiene_and_sanitation_12_3_1_A; }else{ $hygiene_and_sanitation_12_3_1_A= $form_data->hygiene_and_sanitation_12_3_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_B_cm) == ''){ $hygiene_and_sanitation_12_3_1_B = $form_data->hygiene_and_sanitation_12_3_1_B; }else{ $hygiene_and_sanitation_12_3_1_B= $form_data->hygiene_and_sanitation_12_3_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_C_cm) == ''){ $hygiene_and_sanitation_12_3_1_C = $form_data->hygiene_and_sanitation_12_3_1_C; }else{ $hygiene_and_sanitation_12_3_1_C= $form_data->hygiene_and_sanitation_12_3_1_C_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_D_cm) == ''){ $hygiene_and_sanitation_12_3_1_D = $form_data->hygiene_and_sanitation_12_3_1_D; }else{ $hygiene_and_sanitation_12_3_1_D= $form_data->hygiene_and_sanitation_12_3_1_D_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_E_cm) == ''){ $hygiene_and_sanitation_12_3_1_E = $form_data->hygiene_and_sanitation_12_3_1_E; }else{ $hygiene_and_sanitation_12_3_1_E= $form_data->hygiene_and_sanitation_12_3_1_E_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_F_cm) == ''){ $hygiene_and_sanitation_12_3_1_F = $form_data->hygiene_and_sanitation_12_3_1_F; }else{ $hygiene_and_sanitation_12_3_1_F= $form_data->hygiene_and_sanitation_12_3_1_F_cm; }
	if(($form_data->hygiene_and_sanitation_12_3_1_G_cm) == ''){ $hygiene_and_sanitation_12_3_1_G = $form_data->hygiene_and_sanitation_12_3_1_G; }else{ $hygiene_and_sanitation_12_3_1_G= $form_data->hygiene_and_sanitation_12_3_1_G_cm; }
	$hygiene_and_sanitation_12_4_1_text = $form_data->hygiene_and_sanitation_12_4_1_text;
	if(($form_data->hygiene_and_sanitation_12_4_1_A_cm) == ''){ $hygiene_and_sanitation_12_4_1_A = $form_data->hygiene_and_sanitation_12_4_1_A; }else{ $hygiene_and_sanitation_12_4_1_A= $form_data->hygiene_and_sanitation_12_4_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_4_1_B_cm) == ''){ $hygiene_and_sanitation_12_4_1_B = $form_data->hygiene_and_sanitation_12_4_1_B; }else{ $hygiene_and_sanitation_12_4_1_B= $form_data->hygiene_and_sanitation_12_4_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_12_4_1_C_cm) == ''){ $hygiene_and_sanitation_12_4_1_C = $form_data->hygiene_and_sanitation_12_4_1_C; }else{ $hygiene_and_sanitation_12_4_1_C= $form_data->hygiene_and_sanitation_12_4_1_C_cm; }
	if(($form_data->hygiene_and_sanitation_12_4_1_D_cm) == ''){ $hygiene_and_sanitation_12_4_1_D = $form_data->hygiene_and_sanitation_12_4_1_D; }else{ $hygiene_and_sanitation_12_4_1_D= $form_data->hygiene_and_sanitation_12_4_1_D_cm; }
	$hygiene_and_sanitation_12_5_1_text = $form_data->hygiene_and_sanitation_12_5_1_text;
	if(($form_data->hygiene_and_sanitation_12_5_1_A_cm) == ''){ $hygiene_and_sanitation_12_5_1_A = $form_data->hygiene_and_sanitation_12_5_1_A; }else{ $hygiene_and_sanitation_12_5_1_A= $form_data->hygiene_and_sanitation_12_5_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_5_1_B_cm) == ''){ $hygiene_and_sanitation_12_5_1_B = $form_data->hygiene_and_sanitation_12_5_1_B; }else{ $hygiene_and_sanitation_12_5_1_B= $form_data->hygiene_and_sanitation_12_5_1_B_cm; }
	$hygiene_and_sanitation_12_6_1_text = $form_data->hygiene_and_sanitation_12_6_1_text;
	if(($form_data->hygiene_and_sanitation_12_6_1_A_cm) == ''){ $hygiene_and_sanitation_12_6_1_A = $form_data->hygiene_and_sanitation_12_6_1_A; }else{ $hygiene_and_sanitation_12_6_1_A= $form_data->hygiene_and_sanitation_12_6_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_6_1_B_cm) == ''){ $hygiene_and_sanitation_12_6_1_B = $form_data->hygiene_and_sanitation_12_6_1_B; }else{ $hygiene_and_sanitation_12_6_1_B= $form_data->hygiene_and_sanitation_12_6_1_B_cm; }
	if(($form_data->hygiene_and_sanitation_12_6_1_C_cm) == ''){ $hygiene_and_sanitation_12_6_1_C = $form_data->hygiene_and_sanitation_12_6_1_C; }else{ $hygiene_and_sanitation_12_6_1_C= $form_data->hygiene_and_sanitation_12_6_1_C_cm; }
	$hygiene_and_sanitation_12_7_1_text = $form_data->hygiene_and_sanitation_12_7_1_text;
	if(($form_data->hygiene_and_sanitation_12_7_1_A_cm) == ''){ $hygiene_and_sanitation_12_7_1_A = $form_data->hygiene_and_sanitation_12_7_1_A; }else{ $hygiene_and_sanitation_12_7_1_A= $form_data->hygiene_and_sanitation_12_7_1_A_cm; }
	if(($form_data->hygiene_and_sanitation_12_7_1_B_cm) == ''){ $hygiene_and_sanitation_12_7_1_B = $form_data->hygiene_and_sanitation_12_7_1_B; }else{ $hygiene_and_sanitation_12_7_1_B= $form_data->hygiene_and_sanitation_12_7_1_B_cm; }
	$safety_and_security_13_1_1_text = $form_data->safety_and_security_13_1_1_text;
	if(($form_data->safety_and_security_13_1_1_A_cm) == ''){ $safety_and_security_13_1_1_A = $form_data->safety_and_security_13_1_1_A; }else{ $safety_and_security_13_1_1_A= $form_data->safety_and_security_13_1_1_A_cm; }
	if(($form_data->safety_and_security_13_1_1_B_cm) == ''){ $safety_and_security_13_1_1_B = $form_data->safety_and_security_13_1_1_B; }else{ $safety_and_security_13_1_1_B= $form_data->safety_and_security_13_1_1_B_cm; }
	if(($form_data->safety_and_security_13_1_1_C_cm) == ''){ $safety_and_security_13_1_1_C = $form_data->safety_and_security_13_1_1_C; }else{ $safety_and_security_13_1_1_C= $form_data->safety_and_security_13_1_1_C_cm; }
	if(($form_data->safety_and_security_13_1_1_D_cm) == ''){ $safety_and_security_13_1_1_D = $form_data->safety_and_security_13_1_1_D; }else{ $safety_and_security_13_1_1_D= $form_data->safety_and_security_13_1_1_D_cm; }
	if(($form_data->safety_and_security_13_1_1_E_cm) == ''){ $safety_and_security_13_1_1_E = $form_data->safety_and_security_13_1_1_E; }else{ $safety_and_security_13_1_1_E= $form_data->safety_and_security_13_1_1_E_cm; }
	if(($form_data->safety_and_security_13_1_1_F_a_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_a == ''){ $safety_and_security_13_1_1_F_a = ''; }else{ $safety_and_security_13_1_1_F_a = 2; } }else{ $safety_and_security_13_1_1_F_a= $form_data->safety_and_security_13_1_1_F_a_cm; }
	if(($form_data->safety_and_security_13_1_1_F_b_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_b == ''){ $safety_and_security_13_1_1_F_b = ''; }else{ $safety_and_security_13_1_1_F_b = 1; } }else{ $safety_and_security_13_1_1_F_b= $form_data->safety_and_security_13_1_1_F_b_cm; }
	if(($form_data->safety_and_security_13_1_1_F_c_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_c == ''){ $safety_and_security_13_1_1_F_c = ''; }else{ $safety_and_security_13_1_1_F_c = 2; } }else{ $safety_and_security_13_1_1_F_c= $form_data->safety_and_security_13_1_1_F_c_cm; }
	if(($form_data->safety_and_security_13_1_1_F_d_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_d == ''){ $safety_and_security_13_1_1_F_d = ''; }else{ $safety_and_security_13_1_1_F_d = 1; } }else{ $safety_and_security_13_1_1_F_d= $form_data->safety_and_security_13_1_1_F_d_cm; }
	if(($form_data->safety_and_security_13_1_1_F_e_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_e == ''){ $safety_and_security_13_1_1_F_e = ''; }else{ $safety_and_security_13_1_1_F_e = 1; } }else{ $safety_and_security_13_1_1_F_e= $form_data->safety_and_security_13_1_1_F_e_cm; }
	if(($form_data->safety_and_security_13_1_1_F_f_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_f == ''){ $safety_and_security_13_1_1_F_f = ''; }else{ $safety_and_security_13_1_1_F_f = 2; } }else{ $safety_and_security_13_1_1_F_f= $form_data->safety_and_security_13_1_1_F_f_cm; }
	if(($form_data->safety_and_security_13_1_1_F_g_cm) == ''){ if($form_data->safety_and_security_13_1_1_F_g == ''){ $safety_and_security_13_1_1_F_g = ''; }else{ $safety_and_security_13_1_1_F_g = 2; } }else{ $safety_and_security_13_1_1_F_g= $form_data->safety_and_security_13_1_1_F_g_cm; }
	if(($form_data->safety_and_security_13_1_1_G_cm) == ''){ $safety_and_security_13_1_1_G = $form_data->safety_and_security_13_1_1_G; }else{ $safety_and_security_13_1_1_G= $form_data->safety_and_security_13_1_1_G_cm; }
	if(($form_data->safety_and_security_13_1_1_H_cm) == ''){ $safety_and_security_13_1_1_H = $form_data->safety_and_security_13_1_1_H; }else{ $safety_and_security_13_1_1_H= $form_data->safety_and_security_13_1_1_H_cm; }
	if(($form_data->safety_and_security_13_1_1_I_cm) == ''){ $safety_and_security_13_1_1_I = $form_data->safety_and_security_13_1_1_I; }else{ $safety_and_security_13_1_1_I= $form_data->safety_and_security_13_1_1_I_cm; }
	if(($form_data->safety_and_security_13_1_1_J_cm) == ''){ $safety_and_security_13_1_1_J = $form_data->safety_and_security_13_1_1_J; }else{ $safety_and_security_13_1_1_J= $form_data->safety_and_security_13_1_1_J_cm; }
	$safety_and_security_13_2_1_text = $form_data->safety_and_security_13_2_1_text;
	if(($form_data->safety_and_security_13_2_1_A_cm) == ''){ $safety_and_security_13_2_1_A = $form_data->safety_and_security_13_2_1_A; }else{ $safety_and_security_13_2_1_A= $form_data->safety_and_security_13_2_1_A_cm; }
	if(($form_data->safety_and_security_13_2_1_B_cm) == ''){ $safety_and_security_13_2_1_B = $form_data->safety_and_security_13_2_1_B; }else{ $safety_and_security_13_2_1_B= $form_data->safety_and_security_13_2_1_B_cm; }
	$safety_and_security_13_3_1_text = $form_data->safety_and_security_13_3_1_text;
	if(($form_data->safety_and_security_13_3_1_A_cm) == ''){ $safety_and_security_13_3_1_A = $form_data->safety_and_security_13_3_1_A; }else{ $safety_and_security_13_3_1_A= $form_data->safety_and_security_13_3_1_A_cm; }
	if(($form_data->safety_and_security_13_3_1_B_cm) == ''){ $safety_and_security_13_3_1_B = $form_data->safety_and_security_13_3_1_B; }else{ $safety_and_security_13_3_1_B= $form_data->safety_and_security_13_3_1_B_cm; }
	if(($form_data->safety_and_security_13_3_1_C_cm) == ''){ $safety_and_security_13_3_1_C = $form_data->safety_and_security_13_3_1_C; }else{ $safety_and_security_13_3_1_C= $form_data->safety_and_security_13_3_1_C_cm; }
	if(($form_data->safety_and_security_13_3_1_D_cm) == ''){ $safety_and_security_13_3_1_D = $form_data->safety_and_security_13_3_1_D; }else{ $safety_and_security_13_3_1_D= $form_data->safety_and_security_13_3_1_D_cm; }
	if(($form_data->safety_and_security_13_3_1_E_cm) == ''){ $safety_and_security_13_3_1_E = $form_data->safety_and_security_13_3_1_E; }else{ $safety_and_security_13_3_1_E= $form_data->safety_and_security_13_3_1_E_cm; }
	$safety_and_security_13_4_1_text = $form_data->safety_and_security_13_4_1_text;
	if(($form_data->safety_and_security_13_4_1_A_cm) == ''){ $safety_and_security_13_4_1_A = $form_data->safety_and_security_13_4_1_A; }else{ $safety_and_security_13_4_1_A= $form_data->safety_and_security_13_4_1_A_cm; }
	if(($form_data->safety_and_security_13_4_1_B_cm) == ''){ $safety_and_security_13_4_1_B = $form_data->safety_and_security_13_4_1_B; }else{ $safety_and_security_13_4_1_B= $form_data->safety_and_security_13_4_1_B_cm; }
	if(($form_data->safety_and_security_13_4_1_C_cm) == ''){ $safety_and_security_13_4_1_C = $form_data->safety_and_security_13_4_1_C; }else{ $safety_and_security_13_4_1_C= $form_data->safety_and_security_13_4_1_C_cm; }
	$safety_and_security_13_5_1_text = $form_data->safety_and_security_13_5_1_text;
	if(($form_data->safety_and_security_13_5_1_A_cm) == ''){ $safety_and_security_13_5_1_A = $form_data->safety_and_security_13_5_1_A; }else{ $safety_and_security_13_5_1_A= $form_data->safety_and_security_13_5_1_A_cm; }
	if(($form_data->safety_and_security_13_5_1_B_cm) == ''){ $safety_and_security_13_5_1_B = $form_data->safety_and_security_13_5_1_B; }else{ $safety_and_security_13_5_1_B= $form_data->safety_and_security_13_5_1_B_cm; }
	if(($form_data->safety_and_security_13_5_1_C_cm) == ''){ $safety_and_security_13_5_1_C = $form_data->safety_and_security_13_5_1_C; }else{ $safety_and_security_13_5_1_C= $form_data->safety_and_security_13_5_1_C_cm; }
	if(($form_data->safety_and_security_13_5_1_D_cm) == ''){ $safety_and_security_13_5_1_D = $form_data->safety_and_security_13_5_1_D; }else{ $safety_and_security_13_5_1_D= $form_data->safety_and_security_13_5_1_D_cm; }
	if(($form_data->safety_and_security_13_5_1_E_cm) == ''){ $safety_and_security_13_5_1_E = $form_data->safety_and_security_13_5_1_E; }else{ $safety_and_security_13_5_1_E= $form_data->safety_and_security_13_5_1_E_cm; }
	if(($form_data->safety_and_security_13_5_1_F_cm) == ''){ $safety_and_security_13_5_1_F = $form_data->safety_and_security_13_5_1_F; }else{ $safety_and_security_13_5_1_F= $form_data->safety_and_security_13_5_1_F_cm; }
	$sundry_services_14_1_1_text = $form_data->sundry_services_14_1_1_text;
	if(($form_data->sundry_services_14_1_1_A_cm) == ''){ $sundry_services_14_1_1_A = $form_data->sundry_services_14_1_1_A; }else{ $sundry_services_14_1_1_A= $form_data->sundry_services_14_1_1_A_cm; }
	if(($form_data->sundry_services_14_1_1_B_cm) == ''){ $sundry_services_14_1_1_B = $form_data->sundry_services_14_1_1_B; }else{ $sundry_services_14_1_1_B= $form_data->sundry_services_14_1_1_B_cm; }
	if(($form_data->sundry_services_14_1_1_C_cm) == ''){ $sundry_services_14_1_1_C = $form_data->sundry_services_14_1_1_C; }else{ $sundry_services_14_1_1_C= $form_data->sundry_services_14_1_1_C_cm; }
	$sundry_services_14_2_1_text = $form_data->sundry_services_14_2_1_text;
	if(($form_data->sundry_services_14_2_1_A_cm) == ''){ $sundry_services_14_2_1_A = $form_data->sundry_services_14_2_1_A; }else{ $sundry_services_14_2_1_A= $form_data->sundry_services_14_2_1_A_cm; }
	$sundry_services_14_3_1_text = $form_data->sundry_services_14_3_1_text;
	if(($form_data->sundry_services_14_3_1_A_cm) == ''){ $sundry_services_14_3_1_A = $form_data->sundry_services_14_3_1_A; }else{ $sundry_services_14_3_1_A= $form_data->sundry_services_14_3_1_A_cm; }
	if(($form_data->sundry_services_14_3_1_B_cm) == ''){ $sundry_services_14_3_1_B = $form_data->sundry_services_14_3_1_B; }else{ $sundry_services_14_3_1_B= $form_data->sundry_services_14_3_1_B_cm; }
	$sundry_services_14_4_1_text = $form_data->sundry_services_14_4_1_text;
	if(($form_data->sundry_services_14_4_1_A_cm) == ''){ $sundry_services_14_4_1_A = $form_data->sundry_services_14_4_1_A; }else{ $sundry_services_14_4_1_A= $form_data->sundry_services_14_4_1_A_cm; }
	$human_resources_15_1_1_text = $form_data->human_resources_15_1_1_text;
	if(($form_data->human_resources_15_1_1_A_cm) == ''){ $human_resources_15_1_1_A = $form_data->human_resources_15_1_1_A; }else{ $human_resources_15_1_1_A= $form_data->human_resources_15_1_1_A_cm; }
	if(($form_data->human_resources_15_1_1_B_a_cm) == ''){ if($form_data->human_resources_15_1_1_B_a == ''){ $human_resources_15_1_1_B_a = ''; }else{ $human_resources_15_1_1_B_a = 5; } }else{ $human_resources_15_1_1_B_a= $form_data->human_resources_15_1_1_B_a_cm; }
	if(($form_data->human_resources_15_1_1_B_b_cm) == ''){ if($form_data->human_resources_15_1_1_B_b == ''){ $human_resources_15_1_1_B_b = ''; }else{ $human_resources_15_1_1_B_b = 3; } }else{ $human_resources_15_1_1_B_b= $form_data->human_resources_15_1_1_B_b_cm; }
	if(($form_data->human_resources_15_1_1_B_c_cm) == ''){ if($form_data->human_resources_15_1_1_B_c == ''){ $human_resources_15_1_1_B_c = ''; }else{ $human_resources_15_1_1_B_c = 3; } }else{ $human_resources_15_1_1_B_c= $form_data->human_resources_15_1_1_B_c_cm; }
	if(($form_data->human_resources_15_1_1_B_d_cm) == ''){ if($form_data->human_resources_15_1_1_B_d == ''){ $human_resources_15_1_1_B_d = ''; }else{ $human_resources_15_1_1_B_d = 3; } }else{ $human_resources_15_1_1_B_d= $form_data->human_resources_15_1_1_B_d_cm; }
	if(($form_data->human_resources_15_1_1_B_e_cm) == ''){ if($form_data->human_resources_15_1_1_B_e == ''){ $human_resources_15_1_1_B_e = ''; }else{ $human_resources_15_1_1_B_e = 3; } }else{ $human_resources_15_1_1_B_e= $form_data->human_resources_15_1_1_B_e_cm; }
	if(($form_data->human_resources_15_1_1_B_f_cm) == ''){ if($form_data->human_resources_15_1_1_B_f == ''){ $human_resources_15_1_1_B_f = ''; }else{ $human_resources_15_1_1_B_f = 3; } }else{ $human_resources_15_1_1_B_f= $form_data->human_resources_15_1_1_B_f_cm; }
	$human_resources_15_2_1_text = $form_data->human_resources_15_2_1_text;
	if(($form_data->human_resources_15_2_1_A_cm) == ''){ $human_resources_15_2_1_A = $form_data->human_resources_15_2_1_A; }else{ $human_resources_15_2_1_A= $form_data->human_resources_15_2_1_A_cm; }
	if(($form_data->human_resources_15_2_1_B_cm) == ''){ $human_resources_15_2_1_B = $form_data->human_resources_15_2_1_B; }else{ $human_resources_15_2_1_B= $form_data->human_resources_15_2_1_B_cm; }
	$sundry_services_15_3_1_text = $form_data->sundry_services_15_3_1_text;
	if(($form_data->human_resources_15_3_1_A_cm) == ''){ $human_resources_15_3_1_A = $form_data->human_resources_15_3_1_A; }else{ $human_resources_15_3_1_A= $form_data->human_resources_15_3_1_A_cm; }
	if(($form_data->human_resources_15_3_1_B_cm) == ''){ $human_resources_15_3_1_B = $form_data->human_resources_15_3_1_B; }else{ $human_resources_15_3_1_B= $form_data->human_resources_15_3_1_B_cm; }
	$sundry_services_15_4_1_text = $form_data->sundry_services_15_4_1_text;
	if(($form_data->human_resources_15_4_1_A_cm) == ''){ $human_resources_15_4_1_A = $form_data->human_resources_15_4_1_A; }else{ $human_resources_15_4_1_A= $form_data->human_resources_15_4_1_A_cm; }
	if(($form_data->human_resources_15_4_1_B_cm) == ''){ $human_resources_15_4_1_B = $form_data->human_resources_15_4_1_B; }else{ $human_resources_15_4_1_B= $form_data->human_resources_15_4_1_B_cm; }
	if(($form_data->human_resources_15_4_1_C_cm) == ''){ $human_resources_15_4_1_C = $form_data->human_resources_15_4_1_C; }else{ $human_resources_15_4_1_C= $form_data->human_resources_15_4_1_C_cm; }
	$human_resources_15_5_1_text = $form_data->human_resources_15_5_1_text;
	if(($form_data->human_resources_15_5_1_A_a_cm) == ''){ if($form_data->human_resources_15_5_1_A_a == ''){ $human_resources_15_5_1_A_a = ''; }else{ $human_resources_15_5_1_A_a = 4; } }else{ $human_resources_15_5_1_A_a= $form_data->human_resources_15_5_1_A_a_cm; }
	if(($form_data->human_resources_15_5_1_A_b_cm) == ''){ if($form_data->human_resources_15_5_1_A_b == ''){ $human_resources_15_5_1_A_b = ''; }else{ $human_resources_15_5_1_A_b = 4; } }else{ $human_resources_15_5_1_A_b= $form_data->human_resources_15_5_1_A_b_cm; }
	if(($form_data->human_resources_15_5_1_A_c_cm) == ''){ if($form_data->human_resources_15_5_1_A_c == ''){ $human_resources_15_5_1_A_c = ''; }else{ $human_resources_15_5_1_A_c = 4; } }else{ $human_resources_15_5_1_A_c= $form_data->human_resources_15_5_1_A_c_cm; }
	if(($form_data->human_resources_15_5_1_B_a_cm) == ''){ if($form_data->human_resources_15_5_1_B_a == ''){ $human_resources_15_5_1_B_a = ''; }else{ $human_resources_15_5_1_B_a = 4; } }else{ $human_resources_15_5_1_B_a= $form_data->human_resources_15_5_1_B_a_cm; }
	if(($form_data->human_resources_15_5_1_B_b_cm) == ''){ if($form_data->human_resources_15_5_1_B_b == ''){ $human_resources_15_5_1_B_b = ''; }else{ $human_resources_15_5_1_B_b = 4; } }else{ $human_resources_15_5_1_B_b= $form_data->human_resources_15_5_1_B_b_cm; }
	if(($form_data->human_resources_15_5_1_B_c_cm) == ''){ if($form_data->human_resources_15_5_1_B_c == ''){ $human_resources_15_5_1_B_c = ''; }else{ $human_resources_15_5_1_B_c = 4; } }else{ $human_resources_15_5_1_B_c= $form_data->human_resources_15_5_1_B_c_cm; }
	if(($form_data->human_resources_15_5_1_C_a_cm) == ''){ if($form_data->human_resources_15_5_1_C_a == ''){ $human_resources_15_5_1_C_a = ''; }else{ $human_resources_15_5_1_C_a = 5; } }else{ $human_resources_15_5_1_C_a= $form_data->human_resources_15_5_1_C_a_cm; }
	if(($form_data->human_resources_15_5_1_C_b_cm) == ''){ if($form_data->human_resources_15_5_1_C_b == ''){ $human_resources_15_5_1_C_b = ''; }else{ $human_resources_15_5_1_C_b = 5; } }else{ $human_resources_15_5_1_C_b= $form_data->human_resources_15_5_1_C_b_cm; }
	if(($form_data->human_resources_15_5_1_C_c_cm) == ''){ if($form_data->human_resources_15_5_1_C_c == ''){ $human_resources_15_5_1_C_c = ''; }else{ $human_resources_15_5_1_C_c = 6; } }else{ $human_resources_15_5_1_C_c= $form_data->human_resources_15_5_1_C_c_cm; }
	$human_resources_15_6_1_text = $form_data->human_resources_15_6_1_text;
	if(($form_data->human_resources_15_6_1_A_cm) == ''){ $human_resources_15_6_1_A = $form_data->human_resources_15_6_1_A; }else{ $human_resources_15_6_1_A= $form_data->human_resources_15_6_1_A_cm; }
	$human_resources_15_7_1_text = $form_data->human_resources_15_7_1_text;
	if(($form_data->human_resources_15_7_1_A_cm) == ''){ $human_resources_15_7_1_A = $form_data->human_resources_15_7_1_A; }else{ $human_resources_15_7_1_A= $form_data->human_resources_15_7_1_A_cm; }
	if(($form_data->human_resources_15_7_1_B_cm) == ''){ $human_resources_15_7_1_B = $form_data->human_resources_15_7_1_B; }else{ $human_resources_15_7_1_B= $form_data->human_resources_15_7_1_B_cm; }
	if(($form_data->human_resources_15_7_1_C_cm) == ''){ $human_resources_15_7_1_C = $form_data->human_resources_15_7_1_C; }else{ $human_resources_15_7_1_C= $form_data->human_resources_15_7_1_C_cm; }
	if(($form_data->human_resources_15_7_1_D_cm) == ''){ $human_resources_15_7_1_D = $form_data->human_resources_15_7_1_D; }else{ $human_resources_15_7_1_D= $form_data->human_resources_15_7_1_D_cm; }
	$human_resources_15_8_1_text = $form_data->human_resources_15_8_1_text;
	if(($form_data->human_resources_15_8_1_A_cm) == ''){ $human_resources_15_8_1_A = $form_data->human_resources_15_8_1_A; }else{ $human_resources_15_8_1_A= $form_data->human_resources_15_8_1_A_cm; }
	if(($form_data->human_resources_15_8_1_B_cm) == ''){ $human_resources_15_8_1_B = $form_data->human_resources_15_8_1_B; }else{ $human_resources_15_8_1_B= $form_data->human_resources_15_8_1_B_cm; }
	if(($form_data->human_resources_15_8_1_C_cm) == ''){ $human_resources_15_8_1_C = $form_data->human_resources_15_8_1_C; }else{ $human_resources_15_8_1_C= $form_data->human_resources_15_8_1_C_cm; }
	$human_resources_15_9_1_text = $form_data->human_resources_15_9_1_text;
	if(($form_data->human_resources_15_9_1_A_cm) == ''){ $human_resources_15_9_1_A = $form_data->human_resources_15_9_1_A; }else{ $human_resources_15_9_1_A= $form_data->human_resources_15_9_1_A_cm; }
	if(($form_data->human_resources_15_9_1_B_cm) == ''){ $human_resources_15_9_1_B = $form_data->human_resources_15_9_1_B; }else{ $human_resources_15_9_1_B= $form_data->human_resources_15_9_1_B_cm; }
	if(($form_data->human_resources_15_9_1_C_cm) == ''){ $human_resources_15_9_1_C = $form_data->human_resources_15_9_1_C; }else{ $human_resources_15_9_1_C= $form_data->human_resources_15_9_1_C_cm; }
	if(($form_data->human_resources_15_9_1_D_cm) == ''){ $human_resources_15_9_1_D = $form_data->human_resources_15_9_1_D; }else{ $human_resources_15_9_1_D= $form_data->human_resources_15_9_1_D_cm; }
	if(($form_data->human_resources_15_9_1_E_cm) == ''){ $human_resources_15_9_1_E = $form_data->human_resources_15_9_1_E; }else{ $human_resources_15_9_1_E= $form_data->human_resources_15_9_1_E_cm; }
	if(($form_data->human_resources_15_9_1_F_cm) == ''){ $human_resources_15_9_1_F = $form_data->human_resources_15_9_1_F; }else{ $human_resources_15_9_1_F= $form_data->human_resources_15_9_1_F_cm; }
	$human_resources_15_10_1_text = $form_data->human_resources_15_10_1_text;
	if(($form_data->human_resources_15_10_1_A_cm) == ''){ $human_resources_15_10_1_A = $form_data->human_resources_15_10_1_A; }else{ $human_resources_15_10_1_A= $form_data->human_resources_15_10_1_A_cm; }
	if(($form_data->human_resources_15_10_1_B_cm) == ''){ $human_resources_15_10_1_B = $form_data->human_resources_15_10_1_B; }else{ $human_resources_15_10_1_B= $form_data->human_resources_15_10_1_B_cm; }
	if(($form_data->human_resources_15_10_1_C_cm) == ''){ $human_resources_15_10_1_C = $form_data->human_resources_15_10_1_C; }else{ $human_resources_15_10_1_C= $form_data->human_resources_15_10_1_C_cm; }
	if(($form_data->human_resources_15_10_1_D_cm) == ''){ $human_resources_15_10_1_D = $form_data->human_resources_15_10_1_D; }else{ $human_resources_15_10_1_D= $form_data->human_resources_15_10_1_D_cm; }
	if(($form_data->human_resources_15_10_1_E_cm) == ''){ $human_resources_15_10_1_E = $form_data->human_resources_15_10_1_E; }else{ $human_resources_15_10_1_E= $form_data->human_resources_15_10_1_E_cm; }
	if(($form_data->human_resources_15_10_1_F_cm) == ''){ $human_resources_15_10_1_F = $form_data->human_resources_15_10_1_F; }else{ $human_resources_15_10_1_F= $form_data->human_resources_15_10_1_F_cm; }
	if(($form_data->human_resources_15_10_1_G_cm) == ''){ $human_resources_15_10_1_G = $form_data->human_resources_15_10_1_G; }else{ $human_resources_15_10_1_G= $form_data->human_resources_15_10_1_G_cm; }
	$human_resources_15_11_1_text = $form_data->human_resources_15_11_1_text;
	if(($form_data->human_resources_15_11_1_A_a_cm) == ''){ if($form_data->human_resources_15_11_1_A_a == ''){ $human_resources_15_11_1_A_a = ''; }else{ $human_resources_15_11_1_A_a = 2; } }else{ $human_resources_15_11_1_A_a= $form_data->human_resources_15_11_1_A_a_cm; }
	if(($form_data->human_resources_15_11_1_A_b_cm) == ''){ if($form_data->human_resources_15_11_1_A_b == ''){ $human_resources_15_11_1_A_b = ''; }else{ $human_resources_15_11_1_A_b = 1; } }else{ $human_resources_15_11_1_A_b= $form_data->human_resources_15_11_1_A_b_cm; }
	if(($form_data->human_resources_15_11_1_A_c_cm) == ''){ if($form_data->human_resources_15_11_1_A_c == ''){ $human_resources_15_11_1_A_c = ''; }else{ $human_resources_15_11_1_A_c = 3; } }else{ $human_resources_15_11_1_A_c= $form_data->human_resources_15_11_1_A_c_cm; }
	if(($form_data->human_resources_15_11_1_B_a_cm) == ''){ if($form_data->human_resources_15_11_1_B_a == ''){ $human_resources_15_11_1_B_a = ''; }else{ $human_resources_15_11_1_B_a = 0; } }else{ $human_resources_15_11_1_B_a= $form_data->human_resources_15_11_1_B_a_cm; }
	if(($form_data->human_resources_15_11_1_B_b_cm) == ''){ if($form_data->human_resources_15_11_1_B_b == ''){ $human_resources_15_11_1_B_b = ''; }else{ $human_resources_15_11_1_B_b = 2; } }else{ $human_resources_15_11_1_B_b= $form_data->human_resources_15_11_1_B_b_cm; }
	if(($form_data->human_resources_15_11_1_B_c_cm) == ''){ if($form_data->human_resources_15_11_1_B_c == ''){ $human_resources_15_11_1_B_c = ''; }else{ $human_resources_15_11_1_B_c = 2; } }else{ $human_resources_15_11_1_B_c= $form_data->human_resources_15_11_1_B_c_cm; }
	$general_16_1_1_text = $form_data->general_16_1_1_text;
	if(($form_data->general_16_1_1_A_cm) == ''){ $general_16_1_1_A = $form_data->general_16_1_1_A; }else{ $general_16_1_1_A= $form_data->general_16_1_1_A_cm; }
	$general_16_2_1_text = $form_data->general_16_2_1_text;
	if(($form_data->general_16_2_1_A_cm) == ''){ $general_16_2_1_A = $form_data->general_16_2_1_A; }else{ $general_16_2_1_A= $form_data->general_16_2_1_A_cm; }
	if(($form_data->general_16_2_1_B_cm) == ''){ $general_16_2_1_B = $form_data->general_16_2_1_B; }else{ $general_16_2_1_B= $form_data->general_16_2_1_B_cm; }
	$general_16_3_1_text = $form_data->general_16_3_1_text;
	if(($form_data->general_16_3_1_A_cm) == ''){ $general_16_3_1_A = $form_data->general_16_3_1_A; }else{ $general_16_3_1_A= $form_data->general_16_3_1_A_cm; }
	if(($form_data->general_16_3_1_B_a_cm) == ''){ if($form_data->general_16_3_1_B_a == ''){ $general_16_3_1_B_a = ''; }else{ $general_16_3_1_B_a = 2; } }else{ $general_16_3_1_B_a= $form_data->general_16_3_1_B_a_cm; }
	if(($form_data->general_16_3_1_B_b_cm) == ''){ if($form_data->general_16_3_1_B_b == ''){ $general_16_3_1_B_b = ''; }else{ $general_16_3_1_B_b = 2; } }else{ $general_16_3_1_B_b= $form_data->general_16_3_1_B_b_cm; }
	if(($form_data->general_16_3_1_B_c_cm) == ''){ if($form_data->general_16_3_1_B_c == ''){ $general_16_3_1_B_c = ''; }else{ $general_16_3_1_B_c = 2; } }else{ $general_16_3_1_B_c= $form_data->general_16_3_1_B_c_cm; }
	if(($form_data->general_16_3_1_B_d_cm) == ''){ if($form_data->general_16_3_1_B_d == ''){ $general_16_3_1_B_d = ''; }else{ $general_16_3_1_B_d = 2; } }else{ $general_16_3_1_B_d= $form_data->general_16_3_1_B_d_cm; }
	if(($form_data->general_16_3_1_B_e_cm) == ''){ if($form_data->general_16_3_1_B_e == ''){ $general_16_3_1_B_e = ''; }else{ $general_16_3_1_B_e = 2; } }else{ $general_16_3_1_B_e= $form_data->general_16_3_1_B_e_cm; }
	if(($form_data->general_16_3_1_C_a_cm) == ''){ if($form_data->general_16_3_1_C_a == ''){ $general_16_3_1_C_a = ''; }else{ $general_16_3_1_C_a = 3; } }else{ $general_16_3_1_C_a= $form_data->general_16_3_1_C_a_cm; }
	if(($form_data->general_16_3_1_C_b_cm) == ''){ if($form_data->general_16_3_1_C_b == ''){ $general_16_3_1_C_b = ''; }else{ $general_16_3_1_C_b = 5; } }else{ $general_16_3_1_C_b= $form_data->general_16_3_1_C_b_cm; }
	if(($form_data->general_16_3_1_D_cm) == ''){ $general_16_3_1_D = $form_data->general_16_3_1_D; }else{ $general_16_3_1_D= $form_data->general_16_3_1_D_cm; }
	$general_16_4_1_text = $form_data->general_16_4_1_text;
	if(($form_data->general_16_4_1_A_cm) == ''){ $general_16_4_1_A = $form_data->general_16_4_1_A; }else{ $general_16_4_1_A= $form_data->general_16_4_1_A_cm; }
	if(($form_data->general_16_4_1_B_cm) == ''){ $general_16_4_1_B = $form_data->general_16_4_1_B; }else{ $general_16_4_1_B= $form_data->general_16_4_1_B_cm; }
	$general_16_5_1_text = $form_data->general_16_5_1_text;
	if(($form_data->general_16_5_1_A_cm) == ''){ $general_16_5_1_A = $form_data->general_16_5_1_A; }else{ $general_16_5_1_A= $form_data->general_16_5_1_A_cm; }
	if(($form_data->general_16_5_1_B_cm) == ''){ $general_16_5_1_B = $form_data->general_16_5_1_B; }else{ $general_16_5_1_B= $form_data->general_16_5_1_B_cm; }
	if(($form_data->general_16_5_1_C_cm) == ''){ $general_16_5_1_C = $form_data->general_16_5_1_C; }else{ $general_16_5_1_C= $form_data->general_16_5_1_C_cm; }
	if(($form_data->general_16_5_1_D_cm) == ''){ $general_16_5_1_D = $form_data->general_16_5_1_D; }else{ $general_16_5_1_D= $form_data->general_16_5_1_D_cm; }
	if(($form_data->general_16_5_1_E_cm) == ''){ $general_16_5_1_E = $form_data->general_16_5_1_E; }else{ $general_16_5_1_E= $form_data->general_16_5_1_E_cm; }
	$general_16_6_1_text = $form_data->general_16_6_1_text;
	if(($form_data->general_16_6_1_A_cm) == ''){ $general_16_6_1_A = $form_data->general_16_6_1_A; }else{ $general_16_6_1_A= $form_data->general_16_6_1_A_cm; }
	$general_16_7_1_text = $form_data->general_16_7_1_text;
	if(($form_data->general_16_7_1_A_cm) == ''){ $general_16_7_1_A = $form_data->general_16_7_1_A; }else{ $general_16_7_1_A= $form_data->general_16_7_1_A_cm; }
	if(($form_data->general_16_7_1_B_cm) == ''){ $general_16_7_1_B = $form_data->general_16_7_1_B; }else{ $general_16_7_1_B= $form_data->general_16_7_1_B_cm; }
	$general_16_8_1_text = $form_data->general_16_8_1_text;
	if(($form_data->general_16_8_1_A_cm) == ''){ $general_16_8_1_A = $form_data->general_16_8_1_A; }else{ $general_16_8_1_A= $form_data->general_16_8_1_A_cm; }
	if(($form_data->general_16_8_1_B_cm) == ''){ $general_16_8_1_B = $form_data->general_16_8_1_B; }else{ $general_16_8_1_B= $form_data->general_16_8_1_B_cm; }
	if(($form_data->general_16_8_1_C_cm) == ''){ $general_16_8_1_C = $form_data->general_16_8_1_C; }else{ $general_16_8_1_C= $form_data->general_16_8_1_C_cm; }
	$general_16_9_1_text = $form_data->general_16_9_1_text;
	if(($form_data->general_16_9_1_A_cm) == ''){ $general_16_9_1_A = $form_data->general_16_9_1_A; }else{ $general_16_9_1_A= $form_data->general_16_9_1_A_cm; }
	if(($form_data->general_16_9_1_B_cm) == ''){ $general_16_9_1_B = $form_data->general_16_9_1_B; }else{ $general_16_9_1_B= $form_data->general_16_9_1_B_cm; }
	if(($form_data->general_16_9_1_C_cm) == ''){ $general_16_9_1_C = $form_data->general_16_9_1_C; }else{ $general_16_9_1_C= $form_data->general_16_9_1_C_cm; }
	if(($form_data->general_16_9_1_D_a_cm) == ''){ if($form_data->general_16_9_1_D_a == ''){ $general_16_9_1_D_a = ''; }else{ $general_16_9_1_D_a = 3; } }else{ $general_16_9_1_D_a= $form_data->general_16_9_1_D_a_cm; }
	if(($form_data->general_16_9_1_D_b_cm) == ''){ if($form_data->general_16_9_1_D_b == ''){ $general_16_9_1_D_b = ''; }else{ $general_16_9_1_D_b = 3; } }else{ $general_16_9_1_D_b= $form_data->general_16_9_1_D_b_cm; }
	if(($form_data->general_16_9_1_D_c_cm) == ''){ if($form_data->general_16_9_1_D_c == ''){ $general_16_9_1_D_c = ''; }else{ $general_16_9_1_D_c = 3; } }else{ $general_16_9_1_D_c= $form_data->general_16_9_1_D_c_cm; }
	if(($form_data->general_16_9_1_D_d_cm) == ''){ if($form_data->general_16_9_1_D_d == ''){ $general_16_9_1_D_d = ''; }else{ $general_16_9_1_D_d = 3; } }else{ $general_16_9_1_D_d= $form_data->general_16_9_1_D_d_cm; }
	if(($form_data->general_16_9_1_D_e_cm) == ''){ if($form_data->general_16_9_1_D_e == ''){ $general_16_9_1_D_e = ''; }else{ $general_16_9_1_D_e = 3; } }else{ $general_16_9_1_D_e= $form_data->general_16_9_1_D_e_cm; }
	if(($form_data->general_16_9_1_E_cm) == ''){ $general_16_9_1_E = $form_data->general_16_9_1_E; }else{ $general_16_9_1_E= $form_data->general_16_9_1_E_cm; }
	if(($form_data->general_16_9_1_F_cm) == ''){ $general_16_9_1_F = $form_data->general_16_9_1_F; }else{ $general_16_9_1_F= $form_data->general_16_9_1_F_cm; }
	if(($form_data->general_16_9_1_G_cm) == ''){ $general_16_9_1_G = $form_data->general_16_9_1_G; }else{ $general_16_9_1_G= $form_data->general_16_9_1_G_cm; }
	if(($form_data->general_16_9_1_H_cm) == ''){ $general_16_9_1_H = $form_data->general_16_9_1_H; }else{ $general_16_9_1_H= $form_data->general_16_9_1_H_cm; }
	$general_16_10_1_text = $form_data->general_16_10_1_text;
	if(($form_data->general_16_10_1_A_cm) == ''){ $general_16_10_1_A = $form_data->general_16_10_1_A; }else{ $general_16_10_1_A= $form_data->general_16_10_1_A_cm; }
	$general_16_11_1_text = $form_data->general_16_11_1_text;
	if(($form_data->general_16_11_1_A_cm) == ''){ $general_16_11_1_A = $form_data->general_16_11_1_A; }else{ $general_16_11_1_A= $form_data->general_16_11_1_A_cm; }
	if(($form_data->general_16_11_1_B_a_cm) == ''){ if($form_data->general_16_11_1_B_a == ''){ $general_16_11_1_B_a = ''; }else{ $general_16_11_1_B_a = 3; } }else{ $general_16_11_1_B_a= $form_data->general_16_11_1_B_a_cm; }
	if(($form_data->general_16_11_1_B_b_cm) == ''){ if($form_data->general_16_11_1_B_b == ''){ $general_16_11_1_B_b = ''; }else{ $general_16_11_1_B_b = 3; } }else{ $general_16_11_1_B_b= $form_data->general_16_11_1_B_b_cm; }
	if(($form_data->general_16_11_1_B_c_cm) == ''){ if($form_data->general_16_11_1_B_c == ''){ $general_16_11_1_B_c = ''; }else{ $general_16_11_1_B_c = 3; } }else{ $general_16_11_1_B_c= $form_data->general_16_11_1_B_c_cm; }
	if(($form_data->general_16_11_1_B_d_cm) == ''){ if($form_data->general_16_11_1_B_d == ''){ $general_16_11_1_B_d = ''; }else{ $general_16_11_1_B_d = 3; } }else{ $general_16_11_1_B_d= $form_data->general_16_11_1_B_d_cm; }
	if(($form_data->general_16_11_1_B_e_cm) == ''){ if($form_data->general_16_11_1_B_e == ''){ $general_16_11_1_B_e = ''; }else{ $general_16_11_1_B_e = 3; } }else{ $general_16_11_1_B_e= $form_data->general_16_11_1_B_e_cm; }
	if(($form_data->general_16_11_1_C_cm) == ''){ $general_16_11_1_C = $form_data->general_16_11_1_C; }else{ $general_16_11_1_C= $form_data->general_16_11_1_C_cm; }
	if(($form_data->general_16_11_1_D_cm) == ''){ $general_16_11_1_D = $form_data->general_16_11_1_D; }else{ $general_16_11_1_D= $form_data->general_16_11_1_D_cm; }
	if(($form_data->general_16_11_1_E_cm) == ''){ $general_16_11_1_E = $form_data->general_16_11_1_E; }else{ $general_16_11_1_E= $form_data->general_16_11_1_E_cm; }


	
		///Insert
			 if($form_data->action == 'insert_record')
			 {
				$query = "INSERT INTO afcg_assessment_lodge (
				assessment_id, facility_id, assessor_category, assessment_score, 
				location_1_1_1_text, location_1_1_1_A, location_1_1_1_B, location_1_1_1_C, location_1_1_1_D, location_1_1_1_E, location_1_1_1_F, location_1_1_1_G, location_1_1_1_H, location_1_1_1_I,
				location_1_2_1_text, location_1_2_1_A, location_1_2_1_B, location_1_2_1_C, location_1_2_1_D_a, location_1_2_1_D_b, location_1_2_1_D_c, location_1_2_1_D_d, location_1_2_1_E, location_1_2_1_F, location_1_2_1_G_a, location_1_2_1_G_b, location_1_2_1_G_c, location_1_2_1_H, location_1_2_1_I, location_1_2_1_J, location_1_2_1_K, location_1_2_1_L, location_1_2_1_M, location_1_2_1_N,
				building_2_1_1_text, building_2_1_1_A, building_2_1_1_B, building_2_1_1_C, building_2_1_1_D, building_2_1_1_E, building_2_1_1_F, building_2_1_1_G, building_2_1_1_H, building_2_1_1_I, building_2_1_1_J, building_2_1_1_K,
				building_2_2_1_text, building_2_2_1_A, 
				building_2_3_1_text, building_2_3_1_A, building_2_3_1_B, building_2_3_1_C, building_2_3_1_D, building_2_3_1_E, building_2_3_1_F, building_2_3_1_G, building_2_4_1_A, building_2_4_1_B,
				front_office_3_1_1_text, front_office_3_1_1_A, front_office_3_1_1_B, front_office_3_1_1_C, front_office_3_1_1_D, front_office_3_1_1_E, front_office_3_1_1_F,
				front_office_3_2_1_text, front_office_3_2_1_A, front_office_3_2_1_B_a, front_office_3_2_1_B_b, front_office_3_2_1_B_c, front_office_3_2_1_C_a, front_office_3_2_1_C_b, front_office_3_2_1_C_c, front_office_3_2_1_D_a, front_office_3_2_1_D_b, front_office_3_2_1_D_c, front_office_3_2_1_D_d,
				front_office_3_3_1_text, front_office_3_3_1_A, front_office_3_3_1_B, 
				front_office_3_4_1_text, front_office_3_4_1_A_a, front_office_3_4_1_A_b, front_office_3_4_1_A_c, front_office_3_4_1_A_d,
				front_office_3_5_1_text, front_office_3_5_1_A, front_office_3_5_1_B, front_office_3_5_1_C, front_office_3_5_1_D,
				front_office_3_6_1_text, front_office_3_6_1_A, front_office_3_6_1_B,
				front_office_3_7_1_text, front_office_3_7_1_A, front_office_3_7_1_B, front_office_3_7_1_C,
				front_office_3_8_1_text, front_office_3_8_1_A_a, front_office_3_8_1_A_b, front_office_3_8_1_A_c, front_office_3_8_1_B_a, front_office_3_8_1_B_b, front_office_3_8_1_B_c,
				front_office_3_9_1_text, front_office_3_9_1_A, front_office_3_9_1_B, front_office_3_9_1_C,
				lobby_lounge_other_public_areas_4_1_1_text, lobby_lounge_other_public_areas_4_1_1_A, lobby_lounge_other_public_areas_4_1_1_B, lobby_lounge_other_public_areas_4_1_1_C, lobby_lounge_other_public_areas_4_1_1_D, lobby_lounge_other_public_areas_4_1_1_E, lobby_lounge_other_public_areas_4_1_1_F, lobby_lounge_other_public_areas_4_1_1_G,
				lobby_lounge_other_public_areas_4_2_1_text, lobby_lounge_other_public_areas_4_2_1_A,
				lobby_lounge_other_public_areas_4_3_1_text, lobby_lounge_other_public_areas_4_3_1_A, lobby_lounge_other_public_areas_4_3_1_B_a, lobby_lounge_other_public_areas_4_3_1_B_b, lobby_lounge_other_public_areas_4_3_1_B_c, lobby_lounge_other_public_areas_4_3_1_B_d, lobby_lounge_other_public_areas_4_3_1_C,
				lobby_lounge_other_public_areas_4_4_1_text, lobby_lounge_other_public_areas_4_4_1_A, lobby_lounge_other_public_areas_4_4_1_B, lobby_lounge_other_public_areas_4_4_1_C, lobby_lounge_other_public_areas_4_4_1_D_a, lobby_lounge_other_public_areas_4_4_1_D_b, lobby_lounge_other_public_areas_4_4_1_E, lobby_lounge_other_public_areas_4_4_1_F,
				lobby_lounge_other_public_areas_4_5_1_text, lobby_lounge_other_public_areas_4_5_1_A, lobby_lounge_other_public_areas_4_5_1_B,
				lobby_lounge_other_public_areas_4_6_1_text, lobby_lounge_other_public_areas_4_6_1_A, lobby_lounge_other_public_areas_4_6_1_B, lobby_lounge_other_public_areas_4_6_1_C, lobby_lounge_other_public_areas_4_6_1_D, lobby_lounge_other_public_areas_4_6_1_E, lobby_lounge_other_public_areas_4_6_1_F, lobby_lounge_other_public_areas_4_6_1_G,
				lobby_lounge_other_public_areas_4_7_1_text, lobby_lounge_other_public_areas_4_7_1_A, lobby_lounge_other_public_areas_4_7_1_B, lobby_lounge_other_public_areas_4_7_1_C,
				lobby_lounge_other_public_areas_4_8_1_text, lobby_lounge_other_public_areas_4_8_1_A,
				function_rooms_5_1_1_text, function_rooms_5_1_1_A, function_rooms_5_1_1_B, function_rooms_5_1_1_C, function_rooms_5_1_1_D, function_rooms_5_1_1_E, function_rooms_5_1_1_F, function_rooms_5_1_1_G, function_rooms_5_1_1_H, function_rooms_5_1_1_I, function_rooms_5_1_1_J, function_rooms_5_1_1_K, function_rooms_5_1_1_L,
				restaurants_6_1_1_text, restaurants_6_1_1_A, restaurants_6_1_1_B, restaurants_6_1_1_C, restaurants_6_1_1_D, restaurants_6_1_1_E,
				restaurants_6_2_1_text, restaurants_6_2_1_A, restaurants_6_2_1_B, restaurants_6_2_1_C, restaurants_6_2_1_D, restaurants_6_2_1_E, restaurants_6_2_1_F, restaurants_6_2_1_G, restaurants_6_2_1_I, 
				restaurants_6_3_1_text, restaurants_6_3_1_A, restaurants_6_3_1_B, restaurants_6_3_1_C, restaurants_6_3_1_D, restaurants_6_4_1_A, restaurants_6_4_1_B, restaurants_6_4_1_C, restaurants_6_4_1_D, restaurants_6_5_1_A, restaurants_6_5_1_B, restaurants_6_5_1_C, restaurants_6_5_1_D, restaurants_6_5_1_E, restaurants_6_5_1_F, restaurants_6_5_1_G, restaurants_6_5_1_H, restaurants_6_6_1_A, restaurants_6_6_1_B, restaurants_6_6_1_C, restaurants_6_6_1_D, restaurants_6_6_1_E, restaurants_6_6_1_F_a, restaurants_6_6_1_F_b, restaurants_6_6_1_F_c, restaurants_6_6_1_F_d, restaurants_6_6_1_G, restaurants_6_6_1_H_a, restaurants_6_6_1_H_b, restaurants_6_6_1_H_c, restaurants_6_6_1_I, restaurants_6_6_1_J, restaurants_6_7_1_A, restaurants_6_7_1_B, restaurants_6_7_1_C, restaurants_6_8_1_A, restaurants_6_8_1_B,
				bar_7_1_1_text, bar_7_1_1_A, bar_7_1_1_B, bar_7_1_1_C, bar_7_1_1_D_a, bar_7_1_1_D_b, bar_7_1_1_D_c, bar_7_1_1_E, bar_7_1_1_F, bar_7_1_1_G,
				bar_7_2_1_text, bar_7_2_1_A, bar_7_2_1_B, bar_7_2_1_C, bar_7_2_1_D, bar_7_2_1_E, bar_7_2_1_F, bar_7_2_1_G, bar_7_2_1_H, bar_7_2_1_I, 
				bar_7_2_1_text, bar_7_3_1_A, bar_7_3_1_B, bar_7_3_1_C, bar_7_3_1_D, bar_7_3_1_E, bar_7_3_1_F,
				bar_7_4_1_text, bar_7_4_1_B, bar_7_4_1_C, bar_7_4_1_D, bar_7_4_1_E_a, bar_7_4_1_E_b, bar_7_4_1_E_c, bar_7_4_1_E_d, bar_7_4_1_E_e, bar_7_4_1_E_f, bar_7_4_1_E_g, bar_7_4_1_E_h, bar_7_4_1_F, bar_7_4_1_G, bar_7_4_1_H, bar_7_4_1_I,
				bar_7_5_1_text, bar_7_5_1_A, bar_7_5_1_B, bar_7_5_1_C,
				bar_7_6_1_text, bar_7_6_1_A, bar_7_6_1_B, bar_7_6_1_C,
				bar_7_7_1_text, bar_7_7_1_A, bar_7_7_1_B, bar_7_7_1_C,
				kitchen_8_1_1_text, kitchen_8_1_1_A,
				kitchen_8_2_1_text, kitchen_8_2_1_A, kitchen_8_2_1_B, kitchen_8_2_1_C,
				kitchen_8_3_1_text, kitchen_8_3_1_A, kitchen_8_3_1_B, kitchen_8_3_1_C,
				kitchen_8_4_1_text, kitchen_8_4_1_A, kitchen_8_4_1_B, kitchen_8_4_1_C, kitchen_8_4_1_D,
				kitchen_8_5_1_text, kitchen_8_5_1_A, kitchen_8_5_1_B, kitchen_8_5_1_C, kitchen_8_5_1_D, kitchen_8_5_1_E, kitchen_8_5_1_F, kitchen_8_5_1_G, kitchen_8_5_1_H, kitchen_8_5_1_I,
				kitchen_8_6_1_text, kitchen_8_6_1_A, kitchen_8_6_1_B, kitchen_8_6_1_C, kitchen_8_6_1_D, kitchen_8_6_1_E, kitchen_8_6_1_F, kitchen_8_6_1_G,
				kitchen_8_7_1_text, kitchen_8_7_1_A, kitchen_8_7_1_B, kitchen_8_7_1_C, kitchen_8_7_1_D, kitchen_8_7_1_E,
				kitchen_8_8_1_text, kitchen_8_8_1_A, kitchen_8_8_1_B, kitchen_8_8_1_C_a, kitchen_8_8_1_C_b, kitchen_8_8_1_D, kitchen_8_8_1_E, kitchen_8_8_1_F, kitchen_8_8_1_G, kitchen_8_8_1_H,
				kitchen_8_9_1_text, kitchen_8_9_1_A, kitchen_8_9_1_B, kitchen_8_9_1_C, kitchen_8_9_1_D, kitchen_8_9_1_E,
				kitchen_8_10_1_text, kitchen_8_10_1_A_a, kitchen_8_10_1_A_b, kitchen_8_10_1_A_c, kitchen_8_10_1_A_d, kitchen_8_10_1_B, kitchen_8_10_1_C, kitchen_8_10_1_D, kitchen_8_10_1_E, kitchen_8_10_1_F, kitchen_8_10_1_G,
				kitchen_8_11_1_text, kitchen_8_11_1_A_a, kitchen_8_11_1_A_b, kitchen_8_11_1_A_c, kitchen_8_11_1_B, kitchen_8_11_1_C_a, kitchen_8_11_1_C_b, kitchen_8_11_1_C_c, kitchen_8_11_1_C_d, kitchen_8_11_1_C_e, kitchen_8_11_1_D_a, kitchen_8_11_1_D_b, kitchen_8_11_1_E,
				kitchen_8_12_1_text, kitchen_8_12_1_A, kitchen_8_12_1_B, kitchen_8_12_1_C,
				guest_rooms_9_1_1_text, guest_rooms_9_1_1_A,
				guest_rooms_9_2_1_text, guest_rooms_9_2_1_A, guest_rooms_9_2_1_B,
				guest_rooms_9_3_1_text, guest_rooms_9_3_1_A, guest_rooms_9_3_1_B,
				guest_rooms_9_4_1_text, guest_rooms_9_4_1_A, guest_rooms_9_4_1_B_a, guest_rooms_9_4_1_B_b, guest_rooms_9_4_1_B_c, guest_rooms_9_4_1_B_d, guest_rooms_9_4_1_B_e, guest_rooms_9_4_1_B_f, guest_rooms_9_4_1_B_g, guest_rooms_9_4_1_B_h, guest_rooms_9_4_1_B_i, guest_rooms_9_4_1_B_j, guest_rooms_9_4_1_B_k, guest_rooms_9_4_1_B_l, guest_rooms_9_4_1_B_m, guest_rooms_9_4_1_B_n, guest_rooms_9_4_1_C, guest_rooms_9_4_1_D, guest_rooms_9_4_1_E, guest_rooms_9_4_1_F, guest_rooms_9_4_1_G,
				guest_rooms_9_5_1_text, guest_rooms_9_5_1_A, guest_rooms_9_5_1_B_a, guest_rooms_9_5_1_B_b, guest_rooms_9_5_1_B_c, guest_rooms_9_5_1_B_d, guest_rooms_9_5_1_C, guest_rooms_9_5_1_D,
				guest_rooms_9_6_1_text, guest_rooms_9_6_1_A, guest_rooms_9_6_1_B,
				guest_rooms_9_7_1_text, guest_rooms_9_7_1_A, guest_rooms_9_7_1_B, guest_rooms_9_7_1_C, guest_rooms_9_7_1_D, guest_rooms_9_7_1_E,
				guest_rooms_9_8_1_text, guest_rooms_9_8_1_A, guest_rooms_9_8_1_B, guest_rooms_9_8_1_C, guest_rooms_9_8_1_D, guest_rooms_9_8_1_E,
				guest_rooms_9_9_1_text, guest_rooms_9_9_1_A, guest_rooms_9_9_1_B_a, guest_rooms_9_9_1_B_b, guest_rooms_9_9_1_B_c, guest_rooms_9_9_1_B_d, guest_rooms_9_9_1_B_e, guest_rooms_9_9_1_B_f, guest_rooms_9_9_1_C_a, guest_rooms_9_9_1_C_b, guest_rooms_9_9_1_D,
				guest_rooms_9_10_1_text, guest_rooms_9_10_1_A,
				guest_rooms_9_11_1_text, guest_rooms_9_11_1_A_a, guest_rooms_9_11_1_A_b, guest_rooms_9_11_1_A_c, guest_rooms_9_11_1_A_d, guest_rooms_9_11_1_A_e, guest_rooms_9_11_1_B_a, guest_rooms_9_11_1_B_b, guest_rooms_9_11_1_B_c, guest_rooms_9_11_1_B_d, guest_rooms_9_11_1_C,
				guest_rooms_9_12_1_text, guest_rooms_9_12_1_A, guest_rooms_9_12_1_B, guest_rooms_9_12_1_C, guest_rooms_9_12_1_D, guest_rooms_9_12_1_E, guest_rooms_9_12_1_F, guest_rooms_9_12_1_G,
				guest_rooms_9_13_1_text, guest_rooms_9_13_1_A, guest_rooms_9_13_1_B, guest_rooms_9_13_1_C,
				guest_rooms_9_14_1_text, guest_rooms_9_14_1_A, guest_rooms_9_14_1_B_a, guest_rooms_9_14_1_B_b, guest_rooms_9_14_1_B_c, guest_rooms_9_14_1_C, guest_rooms_9_15_1_A_a, guest_rooms_9_15_1_A_b, guest_rooms_9_15_1_A_c, guest_rooms_9_15_1_A_d, guest_rooms_9_15_1_A_e, guest_rooms_9_15_1_A_f, guest_rooms_9_15_1_A_g, guest_rooms_9_15_1_A_h, guest_rooms_9_15_1_A_i, guest_rooms_9_15_1_A_j, guest_rooms_9_15_1_A_k, guest_rooms_9_15_1_A_l, guest_rooms_9_15_1_A_m, guest_rooms_9_15_1_A_n, guest_rooms_9_15_1_A_o, guest_rooms_9_15_1_A_p, guest_rooms_9_15_1_A_q, guest_rooms_9_15_1_B, guest_rooms_9_15_1_C,
				guest_bathrooms_10_1_1_text, guest_bathrooms_10_1_1_A, guest_bathrooms_10_2_1_A,
				guest_bathrooms_10_3_1_text, guest_bathrooms_10_3_1_A_a, guest_bathrooms_10_3_1_A_b, guest_bathrooms_10_3_1_A_c, guest_bathrooms_10_3_1_A_d, guest_bathrooms_10_3_1_A_e, guest_bathrooms_10_3_1_A_f, guest_bathrooms_10_3_1_A_g, guest_bathrooms_10_3_1_A_h, guest_bathrooms_10_3_1_A_i, guest_bathrooms_10_3_1_A_j, guest_bathrooms_10_3_1_A_k, guest_bathrooms_10_3_1_A_l, guest_bathrooms_10_3_1_A_m, guest_bathrooms_10_3_1_A_n, guest_bathrooms_10_3_1_A_o, guest_bathrooms_10_3_1_A_p, guest_bathrooms_10_3_1_A_q, guest_bathrooms_10_3_1_A_r, guest_bathrooms_10_3_1_A_s, guest_bathrooms_10_3_1_A_t, guest_bathrooms_10_3_1_A_u, guest_bathrooms_10_3_1_A_v, guest_bathrooms_10_3_1_A_w, guest_bathrooms_10_3_1_B, guest_bathrooms_10_3_1_C, guest_bathrooms_10_3_1_D, guest_bathrooms_10_3_1_E, guest_bathrooms_10_3_1_F,
				guest_bathrooms_10_4_1_text, guest_bathrooms_10_4_1_A, guest_bathrooms_10_4_1_B, guest_bathrooms_10_4_1_C, guest_bathrooms_10_4_1_D, guest_bathrooms_10_4_1_E, guest_bathrooms_10_4_1_F,
				guest_bathrooms_10_5_1_text, guest_bathrooms_10_5_1_A_a, guest_bathrooms_10_5_1_A_b, guest_bathrooms_10_5_1_A_c, guest_bathrooms_10_5_1_A_d, guest_bathrooms_10_5_1_A_e, guest_bathrooms_10_5_1_B, guest_bathrooms_10_5_1_C, guest_bathrooms_10_5_1_D, guest_bathrooms_10_5_1_E, guest_bathrooms_10_5_1_F,
				guest_bathrooms_10_6_1_text, guest_bathrooms_10_6_1_A, guest_bathrooms_10_6_1_B, guest_bathrooms_10_6_1_C,
				guest_bathrooms_10_7_1_text, guest_bathrooms_10_7_1_A, guest_bathrooms_10_7_1_B, guest_bathrooms_10_7_1_C, guest_bathrooms_10_7_1_D,
				guest_bathrooms_10_8_1_text, guest_bathrooms_10_8_1_A_a, guest_bathrooms_10_8_1_A_b, guest_bathrooms_10_8_1_A_c, guest_bathrooms_10_8_1_A_d, guest_bathrooms_10_8_1_A_e, guest_bathrooms_10_8_1_A_f, guest_bathrooms_10_8_1_A_g, guest_bathrooms_10_8_1_B, guest_bathrooms_10_8_1_C,
				guest_bathrooms_10_9_1_text, guest_bathrooms_10_9_1_A, guest_bathrooms_10_9_1_B,
				suites_11_1_1_text, suites_11_1_1_A,
				suites_11_2_1_text, suites_11_2_1_A, suites_11_2_1_B,
				suites_11_3_1_text, suites_11_3_1_A_a, suites_11_3_1_A_b, suites_11_3_1_A_c, suites_11_3_1_A_d,
				suites_11_4_1_text, suites_11_4_1_A, suites_11_4_1_B,
				suites_11_5_1_text, suites_11_5_1_A_a, suites_11_5_1_A_b, suites_11_5_1_B_a, suites_11_5_1_B_b, suites_11_5_1_B_c, suites_11_5_1_B_d, suites_11_5_1_B_e, suites_11_5_1_B_f, suites_11_5_1_B_g, suites_11_5_1_B_h, suites_11_5_1_B_i, suites_11_5_1_B_j, suites_11_5_1_B_k, suites_11_5_1_B_l, suites_11_5_1_B_m, suites_11_5_1_B_n, suites_11_5_1_B_o, suites_11_5_1_B_p, suites_11_5_1_C, suites_11_5_1_D, suites_11_5_1_E, suites_11_5_1_F, suites_11_5_1_G,
				suites_11_6_1_text, suites_11_6_1_A, suites_11_6_1_B, suites_11_6_1_C, suites_11_6_1_D, suites_11_6_1_E,
				suites_11_7_1_text, suites_11_7_1_A, suites_11_7_1_B_a, suites_11_7_1_B_b, suites_11_7_1_B_c, suites_11_7_1_B_d, suites_11_7_1_C, suites_11_7_1_D,
				suites_11_8_1_text, suites_11_8_1_A, suites_11_8_1_B_a, suites_11_8_1_B_b, suites_11_8_1_B_c, suites_11_8_1_B_d, suites_11_8_1_B_e, suites_11_8_1_B_f, suites_11_8_1_B_g, suites_11_8_1_B_h, suites_11_8_1_B_i, suites_11_8_1_C_a, suites_11_8_1_C_b, suites_11_8_1_D,
				suites_11_9_1_text, suites_11_9_1_A,
				suites_11_10_1_text, suites_11_10_1_A_a, suites_11_10_1_A_b, suites_11_10_1_A_c, suites_11_10_1_A_d, suites_11_10_1_A_e, suites_11_10_1_B_a, suites_11_10_1_B_b, suites_11_10_1_B, suites_11_10_1_C,
				suites_11_11_1_text, suites_11_11_1_A, suites_11_11_1_B, suites_11_11_1_C, suites_11_11_1_D, suites_11_11_1_E, suites_11_11_1_F, suites_11_11_1_G,
				suites_11_12_1_text, suites_11_12_1_A_a, suites_11_12_1_A_b, suites_11_12_1_A_c, suites_11_12_1_A_d, suites_11_12_1_A_e, suites_11_12_1_A_f, suites_11_12_1_A_g, suites_11_12_1_A_h, suites_11_12_1_A_i, suites_11_12_1_A_j, suites_11_12_1_A_k, suites_11_12_1_A_l, suites_11_12_1_A_m, suites_11_12_1_A_n, suites_11_12_1_A_o, suites_11_12_1_A_p, suites_11_12_1_A_q, suites_11_12_1_A_r, suites_11_12_1_A_s, suites_11_12_1_A_t, suites_11_12_1_A_u, suites_11_12_1_A_v, suites_11_12_1_B, suites_11_12_1_C,
				suites_11_13_1_text, suites_11_13_1_A, suites_11_13_1_B,
				suites_11_14_1_text, suites_11_14_1_A, suites_11_14_1_B_a, suites_11_14_1_B_b, suites_11_14_1_B_c, suites_11_14_1_C,
				suites_11_15_1_text, suites_11_15_1_A,
				suites_11_16_1_text, suites_11_16_1_A_a, suites_11_16_1_A_b, suites_11_16_1_A_c, suites_11_16_1_A_d, suites_11_16_1_A_e, suites_11_16_1_A_f, suites_11_16_1_A_g, suites_11_16_1_A_h, suites_11_16_1_A_i, suites_11_16_1_A_j, suites_11_16_1_A_k, suites_11_16_1_A_l, suites_11_16_1_A_m, suites_11_16_1_A_n, suites_11_16_1_A_o, suites_11_16_1_A_p, suites_11_16_1_A_q, suites_11_16_1_A_r, suites_11_16_1_A_s, suites_11_16_1_A_t, suites_11_16_1_A_u, suites_11_16_1_A_v, suites_11_16_1_B, suites_11_16_1_C, suites_11_16_1_D, suites_11_16_1_E, suites_11_16_1_F,
				suites_11_17_1_text, suites_11_17_1_A_a, suites_11_17_1_A_b, suites_11_17_1_A_c, suites_11_17_1_A_d, suites_11_17_1_A_e, suites_11_17_1_A_f, suites_11_17_1_A_g, suites_11_17_1_A_h, suites_11_17_1_A_i, suites_11_17_1_A_j, suites_11_17_1_A_k, suites_11_17_1_B, suites_11_17_1_C,
				suites_11_18_1_text, suites_11_18_1_A, suites_11_18_1_B, suites_11_18_1_C, suites_11_18_1_D, suites_11_18_1_E, suites_11_18_1_F,
				suites_11_19_1_text, suites_11_19_1_A_a, suites_11_19_1_A_b, suites_11_19_1_A_c, suites_11_19_1_A_d, suites_11_19_1_A_e, suites_11_19_1_B, suites_11_19_1_C, suites_11_19_1_D, suites_11_19_1_E, suites_11_19_1_F,
				suites_11_20_1_text, suites_11_20_1_A, suites_11_20_1_B, suites_11_20_1_C,
				hygiene_and_sanitation_12_1_1_text, hygiene_and_sanitation_12_1_1_A, hygiene_and_sanitation_12_1_1_B, hygiene_and_sanitation_12_1_1_C, hygiene_and_sanitation_12_1_1_D_a, hygiene_and_sanitation_12_1_1_D_b, hygiene_and_sanitation_12_1_1_D_c, hygiene_and_sanitation_12_1_1_D_d, hygiene_and_sanitation_12_1_1_D_e, hygiene_and_sanitation_12_1_1_D_f, hygiene_and_sanitation_12_1_1_D_g, hygiene_and_sanitation_12_1_1_D_h, hygiene_and_sanitation_12_1_1_E, hygiene_and_sanitation_12_1_1_F, hygiene_and_sanitation_12_1_1_G, hygiene_and_sanitation_12_1_1_H, hygiene_and_sanitation_12_1_1_I_a, hygiene_and_sanitation_12_1_1_I_b, hygiene_and_sanitation_12_1_1_I_c, hygiene_and_sanitation_12_1_1_I_d, hygiene_and_sanitation_12_1_1_I_e, hygiene_and_sanitation_12_1_1_J, hygiene_and_sanitation_12_1_1_K, hygiene_and_sanitation_12_1_1_L, hygiene_and_sanitation_12_1_1_M, hygiene_and_sanitation_12_1_1_N,
				hygiene_and_sanitation_12_2_1_text, hygiene_and_sanitation_12_2_1_A, hygiene_and_sanitation_12_2_1_B, hygiene_and_sanitation_12_2_1_C, hygiene_and_sanitation_12_2_1_D, hygiene_and_sanitation_12_2_1_E_a, hygiene_and_sanitation_12_2_1_E_b, hygiene_and_sanitation_12_2_1_E_c, hygiene_and_sanitation_12_2_1_E_d, hygiene_and_sanitation_12_2_1_E_e, hygiene_and_sanitation_12_2_1_E_f, hygiene_and_sanitation_12_2_1_E_g, hygiene_and_sanitation_12_2_1_E_h, hygiene_and_sanitation_12_2_1_E_i, hygiene_and_sanitation_12_2_1_F, hygiene_and_sanitation_12_2_1_G, hygiene_and_sanitation_12_2_1_H_a, hygiene_and_sanitation_12_2_1_H_b, hygiene_and_sanitation_12_2_1_H_c, hygiene_and_sanitation_12_2_1_H_d, hygiene_and_sanitation_12_2_1_I, hygiene_and_sanitation_12_2_1_J,
				hygiene_and_sanitation_12_3_1_text, hygiene_and_sanitation_12_3_1_A, hygiene_and_sanitation_12_3_1_B, hygiene_and_sanitation_12_3_1_C, hygiene_and_sanitation_12_3_1_D, hygiene_and_sanitation_12_3_1_E, hygiene_and_sanitation_12_3_1_F, hygiene_and_sanitation_12_3_1_G,
				hygiene_and_sanitation_12_4_1_text, hygiene_and_sanitation_12_4_1_A, hygiene_and_sanitation_12_4_1_B, hygiene_and_sanitation_12_4_1_C, hygiene_and_sanitation_12_4_1_D,
				hygiene_and_sanitation_12_5_1_text, hygiene_and_sanitation_12_5_1_A, hygiene_and_sanitation_12_5_1_B,
				hygiene_and_sanitation_12_6_1_text, hygiene_and_sanitation_12_6_1_A, hygiene_and_sanitation_12_6_1_B, hygiene_and_sanitation_12_6_1_C,
				hygiene_and_sanitation_12_7_1_text, hygiene_and_sanitation_12_7_1_A, hygiene_and_sanitation_12_7_1_B,
				safety_and_security_13_1_1_text, safety_and_security_13_1_1_A, safety_and_security_13_1_1_B, safety_and_security_13_1_1_C, safety_and_security_13_1_1_D, safety_and_security_13_1_1_E, safety_and_security_13_1_1_F_a, safety_and_security_13_1_1_F_b, safety_and_security_13_1_1_F_c, safety_and_security_13_1_1_F_d, safety_and_security_13_1_1_F_e, safety_and_security_13_1_1_F_f, safety_and_security_13_1_1_F_g, safety_and_security_13_1_1_G, safety_and_security_13_1_1_H, safety_and_security_13_1_1_I, safety_and_security_13_1_1_J,
				safety_and_security_13_2_1_text, safety_and_security_13_2_1_A, safety_and_security_13_2_1_B,
				safety_and_security_13_3_1_text, safety_and_security_13_3_1_A, safety_and_security_13_3_1_B, safety_and_security_13_3_1_C, safety_and_security_13_3_1_D, safety_and_security_13_3_1_E,
				safety_and_security_13_4_1_text, safety_and_security_13_4_1_A, safety_and_security_13_4_1_B, safety_and_security_13_4_1_C,
				safety_and_security_13_5_1_text, safety_and_security_13_5_1_A, safety_and_security_13_5_1_B, safety_and_security_13_5_1_C, safety_and_security_13_5_1_D, safety_and_security_13_5_1_E, safety_and_security_13_5_1_F,
				sundry_services_14_1_1_text, sundry_services_14_1_1_A, sundry_services_14_1_1_B, sundry_services_14_1_1_C,
				sundry_services_14_2_1_text, sundry_services_14_2_1_A,
				sundry_services_14_3_1_text, sundry_services_14_3_1_A, sundry_services_14_3_1_B,
				sundry_services_14_4_1_text, sundry_services_14_4_1_A,
				human_resources_15_1_1_text, human_resources_15_1_1_A, human_resources_15_1_1_B_a, human_resources_15_1_1_B_b, human_resources_15_1_1_B_c, human_resources_15_1_1_B_d, human_resources_15_1_1_B_e, human_resources_15_1_1_B_f,
				human_resources_15_2_1_text, human_resources_15_2_1_A, human_resources_15_2_1_B,
				sundry_services_15_3_1_text, human_resources_15_3_1_A, human_resources_15_3_1_B,
				sundry_services_15_4_1_text, human_resources_15_4_1_A, human_resources_15_4_1_B, human_resources_15_4_1_C,
				human_resources_15_5_1_text, human_resources_15_5_1_A_a, human_resources_15_5_1_A_b, human_resources_15_5_1_A_c, human_resources_15_5_1_B_a, human_resources_15_5_1_B_b, human_resources_15_5_1_B_c, human_resources_15_5_1_C_a, human_resources_15_5_1_C_b, human_resources_15_5_1_C_c,
				human_resources_15_6_1_text, human_resources_15_6_1_A,
				human_resources_15_7_1_text, human_resources_15_7_1_A, human_resources_15_7_1_B, human_resources_15_7_1_C, human_resources_15_7_1_D,
				human_resources_15_8_1_text, human_resources_15_8_1_A, human_resources_15_8_1_B, human_resources_15_8_1_C,
				human_resources_15_9_1_text, human_resources_15_9_1_A, human_resources_15_9_1_B, human_resources_15_9_1_C, human_resources_15_9_1_D, human_resources_15_9_1_E, human_resources_15_9_1_F,
				human_resources_15_10_1_text, human_resources_15_10_1_A, human_resources_15_10_1_B, human_resources_15_10_1_C, human_resources_15_10_1_D, human_resources_15_10_1_E, human_resources_15_10_1_F, human_resources_15_10_1_G,
				human_resources_15_11_1_text, human_resources_15_11_1_A_a, human_resources_15_11_1_A_b, human_resources_15_11_1_A_c, human_resources_15_11_1_B_a, human_resources_15_11_1_B_b, human_resources_15_11_1_B_c,
				general_16_1_1_text, general_16_1_1_A,
				general_16_2_1_text, general_16_2_1_A, general_16_2_1_B,
				general_16_3_1_text, general_16_3_1_A, general_16_3_1_B_a, general_16_3_1_B_b, general_16_3_1_B_c, general_16_3_1_B_d, general_16_3_1_B_e, general_16_3_1_C_a, general_16_3_1_C_b, general_16_3_1_D,
				general_16_4_1_text, general_16_4_1_A, general_16_4_1_B,
				general_16_5_1_text, general_16_5_1_A, general_16_5_1_B, general_16_5_1_C, general_16_5_1_D, general_16_5_1_E,
				general_16_6_1_text, general_16_6_1_A,
				general_16_7_1_text, general_16_7_1_A, general_16_7_1_B,
				general_16_8_1_text, general_16_8_1_A, general_16_8_1_B, general_16_8_1_C,
				general_16_9_1_text, general_16_9_1_A, general_16_9_1_B, general_16_9_1_C, general_16_9_1_D_a, general_16_9_1_D_b, general_16_9_1_D_c, general_16_9_1_D_d, general_16_9_1_D_e, general_16_9_1_E, general_16_9_1_F, general_16_9_1_G, general_16_9_1_H,
				general_16_10_1_text, general_16_10_1_A,
				general_16_11_1_text, general_16_11_1_A, general_16_11_1_B_a, general_16_11_1_B_b, general_16_11_1_B_c, general_16_11_1_B_d, general_16_11_1_B_e, general_16_11_1_C, general_16_11_1_D, general_16_11_1_E
				)VALUES(
				'$assessment_id', '$facility_id', '$facility_id', '$assessor_category', '$assessment_score', 
				'$location_1_1_1_text', '$location_1_1_1_A', '$location_1_1_1_B', '$location_1_1_1_C', '$location_1_1_1_D', '$location_1_1_1_E', '$location_1_1_1_F', '$location_1_1_1_G', '$location_1_1_1_H', '$location_1_1_1_I',
				'$location_1_2_1_text', '$location_1_2_1_A', '$location_1_2_1_B', '$location_1_2_1_C', '$location_1_2_1_D_a', '$location_1_2_1_D_b', '$location_1_2_1_D_c', '$location_1_2_1_D_d', '$location_1_2_1_E', '$location_1_2_1_F', '$location_1_2_1_G_a', '$location_1_2_1_G_b', '$location_1_2_1_G_c', '$location_1_2_1_H', '$location_1_2_1_I', '$location_1_2_1_J', '$location_1_2_1_K', '$location_1_2_1_L', '$location_1_2_1_M', '$location_1_2_1_N',
				'$building_2_1_1_text', '$building_2_1_1_A', '$building_2_1_1_B', '$building_2_1_1_C', '$building_2_1_1_D', '$building_2_1_1_E', '$building_2_1_1_F', '$building_2_1_1_G', '$building_2_1_1_H', '$building_2_1_1_I', '$building_2_1_1_J', '$building_2_1_1_K',
				'$building_2_2_1_text', '$building_2_2_1_A',
				'$building_2_3_1_text', '$building_2_3_1_A', '$building_2_3_1_B', '$building_2_3_1_C', '$building_2_3_1_D', '$building_2_3_1_E', '$building_2_3_1_F', '$building_2_3_1_G', '$building_2_4_1_A', '$building_2_4_1_B',
				'$front_office_3_1_1_text', '$front_office_3_1_1_A', '$front_office_3_1_1_B', '$front_office_3_1_1_C', '$front_office_3_1_1_D', '$front_office_3_1_1_E', '$front_office_3_1_1_F',
				'$front_office_3_2_1_text', '$front_office_3_2_1_A', '$front_office_3_2_1_B_a', '$front_office_3_2_1_B_b', '$front_office_3_2_1_B_c', '$front_office_3_2_1_C_a', '$front_office_3_2_1_C_b', '$front_office_3_2_1_C_c', '$front_office_3_2_1_D_a', '$front_office_3_2_1_D_b', '$front_office_3_2_1_D_c', '$front_office_3_2_1_D_d',
				'$front_office_3_3_1_text', '$front_office_3_3_1_A', '$front_office_3_3_1_B',
				'$front_office_3_4_1_text', '$front_office_3_4_1_A_a', '$front_office_3_4_1_A_b', '$front_office_3_4_1_A_c', '$front_office_3_4_1_A_d',
				'$front_office_3_5_1_text', '$front_office_3_5_1_A', '$front_office_3_5_1_B', '$front_office_3_5_1_C', '$front_office_3_5_1_D',
				'$front_office_3_6_1_text', '$front_office_3_6_1_A', '$front_office_3_6_1_B',
				'$front_office_3_7_1_text', '$front_office_3_7_1_A', '$front_office_3_7_1_B', '$front_office_3_7_1_C',
				'$front_office_3_8_1_text', '$front_office_3_8_1_A_a', '$front_office_3_8_1_A_b', '$front_office_3_8_1_A_c','$front_office_3_8_1_B_a', '$front_office_3_8_1_B_b', '$front_office_3_8_1_B_c',
				'$front_office_3_9_1_text', '$front_office_3_9_1_A', '$front_office_3_9_1_B', '$front_office_3_9_1_C',
				'$lobby_lounge_other_public_areas_4_1_1_text', '$lobby_lounge_other_public_areas_4_1_1_A', '$lobby_lounge_other_public_areas_4_1_1_B', '$lobby_lounge_other_public_areas_4_1_1_C', '$lobby_lounge_other_public_areas_4_1_1_D', '$lobby_lounge_other_public_areas_4_1_1_E', '$lobby_lounge_other_public_areas_4_1_1_F', '$lobby_lounge_other_public_areas_4_1_1_G',
				'$lobby_lounge_other_public_areas_4_2_1_text', '$lobby_lounge_other_public_areas_4_2_1_A',
				'$lobby_lounge_other_public_areas_4_3_1_text', '$lobby_lounge_other_public_areas_4_3_1_A', '$lobby_lounge_other_public_areas_4_3_1_B_a', '$lobby_lounge_other_public_areas_4_3_1_B_b', '$lobby_lounge_other_public_areas_4_3_1_B_c', '$lobby_lounge_other_public_areas_4_3_1_B_d', '$lobby_lounge_other_public_areas_4_3_1_C',
				'$lobby_lounge_other_public_areas_4_4_1_text', '$lobby_lounge_other_public_areas_4_4_1_A', '$lobby_lounge_other_public_areas_4_4_1_B', '$lobby_lounge_other_public_areas_4_4_1_C', '$lobby_lounge_other_public_areas_4_4_1_D_a', '$lobby_lounge_other_public_areas_4_4_1_D_b', '$lobby_lounge_other_public_areas_4_4_1_E', '$lobby_lounge_other_public_areas_4_4_1_F',
				'$lobby_lounge_other_public_areas_4_5_1_text', '$lobby_lounge_other_public_areas_4_5_1_A', '$lobby_lounge_other_public_areas_4_5_1_B',
				'$lobby_lounge_other_public_areas_4_6_1_text', '$lobby_lounge_other_public_areas_4_6_1_A', '$lobby_lounge_other_public_areas_4_6_1_B', '$lobby_lounge_other_public_areas_4_6_1_C', '$lobby_lounge_other_public_areas_4_6_1_D', '$lobby_lounge_other_public_areas_4_6_1_E', '$lobby_lounge_other_public_areas_4_6_1_F', '$lobby_lounge_other_public_areas_4_6_1_G',
				'$lobby_lounge_other_public_areas_4_7_1_text', '$lobby_lounge_other_public_areas_4_7_1_A', '$lobby_lounge_other_public_areas_4_7_1_B', '$lobby_lounge_other_public_areas_4_7_1_C',
				'$lobby_lounge_other_public_areas_4_8_1_text', '$lobby_lounge_other_public_areas_4_8_1_A',
				'$function_rooms_5_1_1_text', '$function_rooms_5_1_1_A', '$function_rooms_5_1_1_B', '$function_rooms_5_1_1_C', '$function_rooms_5_1_1_D', '$function_rooms_5_1_1_E', '$function_rooms_5_1_1_F', '$function_rooms_5_1_1_G', '$function_rooms_5_1_1_H', '$function_rooms_5_1_1_I', '$function_rooms_5_1_1_J', '$function_rooms_5_1_1_K', '$function_rooms_5_1_1_L',
				'$restaurants_6_1_1_text', '$restaurants_6_1_1_A', '$restaurants_6_1_1_B', '$restaurants_6_1_1_C', '$restaurants_6_1_1_D', '$restaurants_6_1_1_E',
				'$restaurants_6_2_1_text', '$restaurants_6_2_1_A', '$restaurants_6_2_1_B', '$restaurants_6_2_1_C', '$restaurants_6_2_1_D', '$restaurants_6_2_1_E', '$restaurants_6_2_1_F', '$restaurants_6_2_1_G', '$restaurants_6_2_1_H', '$restaurants_6_2_1_I', 
				'$restaurants_6_3_1_text', '$restaurants_6_3_1_A', '$restaurants_6_3_1_B', '$restaurants_6_3_1_C', '$restaurants_6_3_1_D', 
				'$restaurants_6_4_1_text','$restaurants_6_4_1_A', '$restaurants_6_4_1_B', '$restaurants_6_4_1_C', '$restaurants_6_4_1_D', 
				'$restaurants_6_5_1_text','$restaurants_6_5_1_A', '$restaurants_6_5_1_B', '$restaurants_6_5_1_C', '$restaurants_6_5_1_D', '$restaurants_6_5_1_E', '$restaurants_6_5_1_F', '$restaurants_6_5_1_G', '$restaurants_6_5_1_H',
				'$restaurants_6_6_1_text','$restaurants_6_6_1_A', '$restaurants_6_6_1_B', '$restaurants_6_6_1_C', '$restaurants_6_6_1_D', '$restaurants_6_6_1_E', '$restaurants_6_6_1_F_a', '$restaurants_6_6_1_F_b', '$restaurants_6_6_1_F_c', '$restaurants_6_6_1_F_d', '$restaurants_6_6_1_G', '$restaurants_6_6_1_H_a', '$restaurants_6_6_1_H_b', '$restaurants_6_6_1_H_c', '$restaurants_6_6_1_I', '$restaurants_6_6_1_J', 
				'$restaurants_6_7_1_A', '$restaurants_6_7_1_B', '$restaurants_6_7_1_C', '$restaurants_6_8_1_A', '$restaurants_6_8_1_B',
				'$bar_7_1_1_text', '$bar_7_1_1_A', '$bar_7_1_1_B', '$bar_7_1_1_C', '$bar_7_1_1_D_a', '$bar_7_1_1_D_b', '$bar_7_1_1_D_c', '$bar_7_1_1_E', '$bar_7_1_1_F', '$bar_7_1_1_G',
				'$bar_7_2_1_text', '$bar_7_2_1_A', '$bar_7_2_1_B', '$bar_7_2_1_C', '$bar_7_2_1_D', '$bar_7_2_1_E', '$bar_7_2_1_F', '$bar_7_2_1_G', '$bar_7_2_1_H', '$bar_7_2_1_I', '$bar_7_3_1_A', '$bar_7_3_1_B', '$bar_7_3_1_C', '$bar_7_3_1_D', '$bar_7_3_1_E', '$bar_7_3_1_F',
				'$bar_7_4_1_text', '$bar_7_4_1_A', '$bar_7_4_1_B', '$bar_7_4_1_C', '$bar_7_4_1_D', '$bar_7_4_1_E_a', '$bar_7_4_1_E_b', '$bar_7_4_1_E_c', '$bar_7_4_1_E_d', '$bar_7_4_1_E_e', '$bar_7_4_1_E_f', '$bar_7_4_1_E_g', '$bar_7_4_1_E_h', '$bar_7_4_1_F', '$bar_7_4_1_G', '$bar_7_4_1_H', '$bar_7_4_1_I',
				'$bar_7_5_1_text', '$bar_7_5_1_A', '$bar_7_5_1_B', '$bar_7_5_1_C',
				'$bar_7_6_1_text', '$bar_7_6_1_A', '$bar_7_6_1_B', '$bar_7_6_1_C',
				'$bar_7_7_1_text', '$bar_7_7_1_A', '$bar_7_7_1_B', '$bar_7_7_1_C',
				'$kitchen_8_1_1_text', '$kitchen_8_1_1_A',
				'$kitchen_8_2_1_text', '$kitchen_8_2_1_A', '$kitchen_8_2_1_B', '$kitchen_8_2_1_C',
				'$kitchen_8_3_1_text', '$kitchen_8_3_1_A', '$kitchen_8_3_1_B', '$kitchen_8_3_1_C',
				'$kitchen_8_4_1_text', '$kitchen_8_4_1_A', '$kitchen_8_4_1_B', '$kitchen_8_4_1_C', '$kitchen_8_4_1_D',
				'$kitchen_8_5_1_text', '$kitchen_8_5_1_A', '$kitchen_8_5_1_B', '$kitchen_8_5_1_C', '$kitchen_8_5_1_D', '$kitchen_8_5_1_E', '$kitchen_8_5_1_F', '$kitchen_8_5_1_G', '$kitchen_8_5_1_H', '$kitchen_8_5_1_I',
				'$kitchen_8_6_1_text', '$kitchen_8_6_1_A', '$kitchen_8_6_1_B', '$kitchen_8_6_1_C', '$kitchen_8_6_1_D', '$kitchen_8_6_1_E', '$kitchen_8_6_1_F', '$kitchen_8_6_1_G',
				'$kitchen_8_7_1_text', '$kitchen_8_7_1_A', '$kitchen_8_7_1_B', '$kitchen_8_7_1_C', '$kitchen_8_7_1_D', '$kitchen_8_7_1_E',
				'$kitchen_8_8_1_text', '$kitchen_8_8_1_A', '$kitchen_8_8_1_B', '$kitchen_8_8_1_C_a', '$kitchen_8_8_1_C_b', '$kitchen_8_8_1_D', '$kitchen_8_8_1_E', '$kitchen_8_8_1_F', '$kitchen_8_8_1_G', '$kitchen_8_8_1_H',
				'$kitchen_8_9_1_text', '$kitchen_8_9_1_A', '$kitchen_8_9_1_B', '$kitchen_8_9_1_C', '$kitchen_8_9_1_D', '$kitchen_8_9_1_E',
				'$kitchen_8_10_1_text', '$kitchen_8_10_1_A_a', '$kitchen_8_10_1_A_b', '$kitchen_8_10_1_A_c', '$kitchen_8_10_1_A_d', '$kitchen_8_10_1_B', '$kitchen_8_10_1_C', '$kitchen_8_10_1_D', '$kitchen_8_10_1_E', '$kitchen_8_10_1_F', '$kitchen_8_10_1_G',
				'$kitchen_8_11_1_text', '$kitchen_8_11_1_A_a', '$kitchen_8_11_1_A_b', '$kitchen_8_11_1_A_c', '$kitchen_8_11_1_B', '$kitchen_8_11_1_C_a', '$kitchen_8_11_1_C_b', '$kitchen_8_11_1_C_c', '$kitchen_8_11_1_C_d', '$kitchen_8_11_1_C_e', '$kitchen_8_11_1_D_a', '$kitchen_8_11_1_D_b', '$kitchen_8_11_1_E',
				'$kitchen_8_12_1_text', '$kitchen_8_12_1_A', '$kitchen_8_12_1_B', '$kitchen_8_12_1_C',
				'$guest_rooms_9_1_1_text', '$guest_rooms_9_1_1_A',
				'$guest_rooms_9_2_1_text', '$guest_rooms_9_2_1_A', '$guest_rooms_9_2_1_B',
				'$guest_rooms_9_3_1_text', '$guest_rooms_9_3_1_A', '$guest_rooms_9_3_1_B',
				'$guest_rooms_9_4_1_text', '$guest_rooms_9_4_1_A', '$guest_rooms_9_4_1_B_a', '$guest_rooms_9_4_1_B_b', '$guest_rooms_9_4_1_B_c', '$guest_rooms_9_4_1_B_d', '$guest_rooms_9_4_1_B_e', '$guest_rooms_9_4_1_B_f', '$guest_rooms_9_4_1_B_g', '$guest_rooms_9_4_1_B_h', '$guest_rooms_9_4_1_B_i', '$guest_rooms_9_4_1_B_j', '$guest_rooms_9_4_1_B_k', '$guest_rooms_9_4_1_B_l', '$guest_rooms_9_4_1_B_m', '$guest_rooms_9_4_1_B_n', '$guest_rooms_9_4_1_C', '$guest_rooms_9_4_1_D', '$guest_rooms_9_4_1_E', '$guest_rooms_9_4_1_F', '$guest_rooms_9_4_1_G',
				'$guest_rooms_9_5_1_text', '$guest_rooms_9_5_1_A', '$guest_rooms_9_5_1_B_a', '$guest_rooms_9_5_1_B_b', '$guest_rooms_9_5_1_B_c', '$guest_rooms_9_5_1_B_d', '$guest_rooms_9_5_1_C', '$guest_rooms_9_5_1_D',
				'$guest_rooms_9_6_1_text', '$guest_rooms_9_6_1_A', '$guest_rooms_9_6_1_B',
				'$guest_rooms_9_7_1_text', '$guest_rooms_9_7_1_A', '$guest_rooms_9_7_1_B', '$guest_rooms_9_7_1_C', '$guest_rooms_9_7_1_D', '$guest_rooms_9_7_1_E',
				'$guest_rooms_9_8_1_text', '$guest_rooms_9_8_1_A', '$guest_rooms_9_8_1_B', '$guest_rooms_9_8_1_C', '$guest_rooms_9_8_1_D', '$guest_rooms_9_8_1_E',
				'$guest_rooms_9_9_1_text', '$guest_rooms_9_9_1_A', '$guest_rooms_9_9_1_B_a', '$guest_rooms_9_9_1_B_b', '$guest_rooms_9_9_1_B_c', '$guest_rooms_9_9_1_B_d', '$guest_rooms_9_9_1_B_e', '$guest_rooms_9_9_1_B_f', '$guest_rooms_9_9_1_C_a', '$guest_rooms_9_9_1_C_b', '$guest_rooms_9_9_1_D',
				'$guest_rooms_9_10_1_text', '$guest_rooms_9_10_1_A',
				'$guest_rooms_9_11_1_text', '$guest_rooms_9_11_1_A_a', '$guest_rooms_9_11_1_A_b', '$guest_rooms_9_11_1_A_c', '$guest_rooms_9_11_1_A_d', '$guest_rooms_9_11_1_A_e', '$guest_rooms_9_11_1_B_a', '$guest_rooms_9_11_1_B_b', '$guest_rooms_9_11_1_B_c', '$guest_rooms_9_11_1_B_d', '$guest_rooms_9_11_1_C',
				'$guest_rooms_9_12_1_text', '$guest_rooms_9_12_1_A', '$guest_rooms_9_12_1_B', '$guest_rooms_9_12_1_C', '$guest_rooms_9_12_1_D', '$guest_rooms_9_12_1_E', '$guest_rooms_9_12_1_F', '$guest_rooms_9_12_1_G',
				'$guest_rooms_9_13_1_text', '$guest_rooms_9_13_1_A', '$guest_rooms_9_13_1_B', '$guest_rooms_9_13_1_C',
				'$guest_rooms_9_14_1_text', '$guest_rooms_9_14_1_A', '$guest_rooms_9_14_1_B_a', '$guest_rooms_9_14_1_B_b', '$guest_rooms_9_14_1_B_c', '$guest_rooms_9_14_1_C', '$guest_rooms_9_15_1_A_a', '$guest_rooms_9_15_1_A_b', '$guest_rooms_9_15_1_A_c', '$guest_rooms_9_15_1_A_d', '$guest_rooms_9_15_1_A_e', '$guest_rooms_9_15_1_A_f', '$guest_rooms_9_15_1_A_g', '$guest_rooms_9_15_1_A_h', '$guest_rooms_9_15_1_A_i', '$guest_rooms_9_15_1_A_j', '$guest_rooms_9_15_1_A_k', '$guest_rooms_9_15_1_A_l', '$guest_rooms_9_15_1_A_m', '$guest_rooms_9_15_1_A_n', '$guest_rooms_9_15_1_A_o', '$guest_rooms_9_15_1_A_p', '$guest_rooms_9_15_1_A_q', '$guest_rooms_9_15_1_B', '$guest_rooms_9_15_1_C',
				'$guest_bathrooms_10_1_1_text', '$guest_bathrooms_10_1_1_A', '$guest_bathrooms_10_2_1_A',
				'$guest_bathrooms_10_3_1_text', '$guest_bathrooms_10_3_1_A_a', '$guest_bathrooms_10_3_1_A_b', '$guest_bathrooms_10_3_1_A_c', '$guest_bathrooms_10_3_1_A_d', '$guest_bathrooms_10_3_1_A_e', '$guest_bathrooms_10_3_1_A_f', '$guest_bathrooms_10_3_1_A_g', '$guest_bathrooms_10_3_1_A_h', '$guest_bathrooms_10_3_1_A_i', '$guest_bathrooms_10_3_1_A_j', '$guest_bathrooms_10_3_1_A_k', '$guest_bathrooms_10_3_1_A_l', '$guest_bathrooms_10_3_1_A_m', '$guest_bathrooms_10_3_1_A_n', '$guest_bathrooms_10_3_1_A_o', '$guest_bathrooms_10_3_1_A_p', '$guest_bathrooms_10_3_1_A_q', '$guest_bathrooms_10_3_1_A_r', '$guest_bathrooms_10_3_1_A_s', '$guest_bathrooms_10_3_1_A_t', '$guest_bathrooms_10_3_1_A_u', '$guest_bathrooms_10_3_1_A_v', '$guest_bathrooms_10_3_1_A_w', '$guest_bathrooms_10_3_1_B', '$guest_bathrooms_10_3_1_C', '$guest_bathrooms_10_3_1_D', '$guest_bathrooms_10_3_1_E', '$guest_bathrooms_10_3_1_F',
				'$guest_bathrooms_10_4_1_text', '$guest_bathrooms_10_4_1_A', '$guest_bathrooms_10_4_1_B', '$guest_bathrooms_10_4_1_C', '$guest_bathrooms_10_4_1_D', '$guest_bathrooms_10_4_1_E', '$guest_bathrooms_10_4_1_F',
				'$guest_bathrooms_10_5_1_text', '$guest_bathrooms_10_5_1_A_a', '$guest_bathrooms_10_5_1_A_b', '$guest_bathrooms_10_5_1_A_c', '$guest_bathrooms_10_5_1_A_d', '$guest_bathrooms_10_5_1_A_e', '$guest_bathrooms_10_5_1_B', '$guest_bathrooms_10_5_1_C', '$guest_bathrooms_10_5_1_D', '$guest_bathrooms_10_5_1_E', '$guest_bathrooms_10_5_1_F',
				'$guest_bathrooms_10_6_1_text', '$guest_bathrooms_10_6_1_A', '$guest_bathrooms_10_6_1_B', '$guest_bathrooms_10_6_1_C',
				'$guest_bathrooms_10_7_1_text', '$guest_bathrooms_10_7_1_A', '$guest_bathrooms_10_7_1_B', '$guest_bathrooms_10_7_1_C', '$guest_bathrooms_10_7_1_D',
				'$guest_bathrooms_10_8_1_text', '$guest_bathrooms_10_8_1_A_a', '$guest_bathrooms_10_8_1_A_b', '$guest_bathrooms_10_8_1_A_c', '$guest_bathrooms_10_8_1_A_d', '$guest_bathrooms_10_8_1_A_e', '$guest_bathrooms_10_8_1_A_f', '$guest_bathrooms_10_8_1_A_g', '$guest_bathrooms_10_8_1_B', '$guest_bathrooms_10_8_1_C',
				'$guest_bathrooms_10_9_1_text', '$guest_bathrooms_10_9_1_A', '$guest_bathrooms_10_9_1_B',
				'$suites_11_1_1_text', '$suites_11_1_1_A',
				'$suites_11_2_1_text', '$suites_11_2_1_A', '$suites_11_2_1_B',
				'$suites_11_3_1_text', '$suites_11_3_1_A_a', '$suites_11_3_1_A_b', '$suites_11_3_1_A_c', '$suites_11_3_1_A_d',
				'$suites_11_4_1_text', '$suites_11_4_1_A', '$suites_11_4_1_B',
				'$suites_11_5_1_text', '$suites_11_5_1_A_a', '$suites_11_5_1_A_b', '$suites_11_5_1_B_a', '$suites_11_5_1_B_b', '$suites_11_5_1_B_c', '$suites_11_5_1_B_d', '$suites_11_5_1_B_e', '$suites_11_5_1_B_f', '$suites_11_5_1_B_g', '$suites_11_5_1_B_h', '$suites_11_5_1_B_i', '$suites_11_5_1_B_j', '$suites_11_5_1_B_k', '$suites_11_5_1_B_l', '$suites_11_5_1_B_m', '$suites_11_5_1_B_n', '$suites_11_5_1_B_o', '$suites_11_5_1_B_p', '$suites_11_5_1_C', '$suites_11_5_1_D', '$suites_11_5_1_E', '$suites_11_5_1_F', '$suites_11_5_1_G',
				'$suites_11_6_1_text', '$suites_11_6_1_A', '$suites_11_6_1_B', '$suites_11_6_1_C', '$suites_11_6_1_D', '$suites_11_6_1_E',
				'$suites_11_7_1_text', '$suites_11_7_1_A', '$suites_11_7_1_B_a', '$suites_11_7_1_B_b', '$suites_11_7_1_B_c', '$suites_11_7_1_B_d', '$suites_11_7_1_C', '$suites_11_7_1_D',
				'$suites_11_8_1_text', '$suites_11_8_1_A', '$suites_11_8_1_B_a', '$suites_11_8_1_B_b', '$suites_11_8_1_B_c', '$suites_11_8_1_B_d', '$suites_11_8_1_B_e', '$suites_11_8_1_B_f', '$suites_11_8_1_B_g', '$suites_11_8_1_B_h', '$suites_11_8_1_B_i', '$suites_11_8_1_C_a', '$suites_11_8_1_C_b', '$suites_11_8_1_D',
				'$suites_11_9_1_text', '$suites_11_9_1_A',
				'$suites_11_10_1_text', '$suites_11_10_1_A_a', '$suites_11_10_1_A_b', '$suites_11_10_1_A_c', '$suites_11_10_1_A_d', '$suites_11_10_1_A_e', '$suites_11_10_1_B_a', '$suites_11_10_1_B_b', '$suites_11_10_1_B', '$suites_11_10_1_C',
				'$suites_11_11_1_text', '$suites_11_11_1_A', '$suites_11_11_1_B', '$suites_11_11_1_C', '$suites_11_11_1_D', '$suites_11_11_1_E', '$suites_11_11_1_F', '$suites_11_11_1_G',
				'$suites_11_12_1_text', '$suites_11_12_1_A_a', '$suites_11_12_1_A_b', '$suites_11_12_1_A_c', '$suites_11_12_1_A_d', '$suites_11_12_1_A_e', '$suites_11_12_1_A_f', '$suites_11_12_1_A_g', '$suites_11_12_1_A_h', '$suites_11_12_1_A_i', '$suites_11_12_1_A_j', '$suites_11_12_1_A_k', '$suites_11_12_1_A_l', '$suites_11_12_1_A_m', '$suites_11_12_1_A_n', '$suites_11_12_1_A_o', '$suites_11_12_1_A_p', '$suites_11_12_1_A_q', '$suites_11_12_1_A_r', '$suites_11_12_1_A_s', '$suites_11_12_1_A_t', '$suites_11_12_1_A_u', '$suites_11_12_1_A_v', '$suites_11_12_1_B', '$suites_11_12_1_C',
				'$suites_11_13_1_text', '$suites_11_13_1_A', '$suites_11_13_1_B',
				'$suites_11_14_1_text', '$suites_11_14_1_A', '$suites_11_14_1_B_a', '$suites_11_14_1_B_b', '$suites_11_14_1_B_c', '$suites_11_14_1_C',
				'$suites_11_15_1_text', '$suites_11_15_1_A',
				'$suites_11_16_1_text', '$suites_11_16_1_A_a', '$suites_11_16_1_A_b', '$suites_11_16_1_A_c', '$suites_11_16_1_A_d', '$suites_11_16_1_A_e', '$suites_11_16_1_A_f', '$suites_11_16_1_A_g', '$suites_11_16_1_A_h', '$suites_11_16_1_A_i', '$suites_11_16_1_A_j', '$suites_11_16_1_A_k', '$suites_11_16_1_A_l', '$suites_11_16_1_A_m', '$suites_11_16_1_A_n', '$suites_11_16_1_A_o', '$suites_11_16_1_A_p', '$suites_11_16_1_A_q', '$suites_11_16_1_A_r', '$suites_11_16_1_A_s', '$suites_11_16_1_A_t', '$suites_11_16_1_A_u', '$suites_11_16_1_A_v', '$suites_11_16_1_B', '$suites_11_16_1_C', '$suites_11_16_1_D', '$suites_11_16_1_E', '$suites_11_16_1_F',
				'$suites_11_17_1_text', '$suites_11_17_1_A_a', '$suites_11_17_1_A_b', '$suites_11_17_1_A_c', '$suites_11_17_1_A_d', '$suites_11_17_1_A_e', '$suites_11_17_1_A_f', '$suites_11_17_1_A_g', '$suites_11_17_1_A_h', '$suites_11_17_1_A_i', '$suites_11_17_1_A_j', '$suites_11_17_1_A_k', '$suites_11_17_1_B', '$suites_11_17_1_C',
				'$suites_11_18_1_text', '$suites_11_18_1_A', '$suites_11_18_1_B', '$suites_11_18_1_C', '$suites_11_18_1_D', '$suites_11_18_1_E', '$suites_11_18_1_F',
				'$suites_11_19_1_text', '$suites_11_19_1_A_a', '$suites_11_19_1_A_b', '$suites_11_19_1_A_c', '$suites_11_19_1_A_d', '$suites_11_19_1_A_e', '$suites_11_19_1_B', '$suites_11_19_1_C', '$suites_11_19_1_D', '$suites_11_19_1_E', '$suites_11_19_1_F',
				'$suites_11_20_1_text', '$suites_11_20_1_A', '$suites_11_20_1_B', '$suites_11_20_1_C',
				'$hygiene_and_sanitation_12_1_1_text', '$hygiene_and_sanitation_12_1_1_A', '$hygiene_and_sanitation_12_1_1_B', '$hygiene_and_sanitation_12_1_1_C', '$hygiene_and_sanitation_12_1_1_D_a', '$hygiene_and_sanitation_12_1_1_D_b', '$hygiene_and_sanitation_12_1_1_D_c', '$hygiene_and_sanitation_12_1_1_D_d', '$hygiene_and_sanitation_12_1_1_D_e', '$hygiene_and_sanitation_12_1_1_D_f', '$hygiene_and_sanitation_12_1_1_D_g', '$hygiene_and_sanitation_12_1_1_D_h', '$hygiene_and_sanitation_12_1_1_E', '$hygiene_and_sanitation_12_1_1_F', '$hygiene_and_sanitation_12_1_1_G', '$hygiene_and_sanitation_12_1_1_H', '$hygiene_and_sanitation_12_1_1_I_a', '$hygiene_and_sanitation_12_1_1_I_b', '$hygiene_and_sanitation_12_1_1_I_c', '$hygiene_and_sanitation_12_1_1_I_d', '$hygiene_and_sanitation_12_1_1_I_e', '$hygiene_and_sanitation_12_1_1_J', '$hygiene_and_sanitation_12_1_1_K', '$hygiene_and_sanitation_12_1_1_L', '$hygiene_and_sanitation_12_1_1_M', '$hygiene_and_sanitation_12_1_1_N',
				'$hygiene_and_sanitation_12_2_1_text', '$hygiene_and_sanitation_12_2_1_A', '$hygiene_and_sanitation_12_2_1_B', '$hygiene_and_sanitation_12_2_1_C', '$hygiene_and_sanitation_12_2_1_D', '$hygiene_and_sanitation_12_2_1_E_a', '$hygiene_and_sanitation_12_2_1_E_b', '$hygiene_and_sanitation_12_2_1_E_c', '$hygiene_and_sanitation_12_2_1_E_d', '$hygiene_and_sanitation_12_2_1_E_e', '$hygiene_and_sanitation_12_2_1_E_f', '$hygiene_and_sanitation_12_2_1_E_g', '$hygiene_and_sanitation_12_2_1_E_h', '$hygiene_and_sanitation_12_2_1_E_i', '$hygiene_and_sanitation_12_2_1_F', '$hygiene_and_sanitation_12_2_1_G', '$hygiene_and_sanitation_12_2_1_H_a', '$hygiene_and_sanitation_12_2_1_H_b', '$hygiene_and_sanitation_12_2_1_H_c', '$hygiene_and_sanitation_12_2_1_H_d', '$hygiene_and_sanitation_12_2_1_I', '$hygiene_and_sanitation_12_2_1_J',
				'$hygiene_and_sanitation_12_3_1_text', '$hygiene_and_sanitation_12_3_1_A', '$hygiene_and_sanitation_12_3_1_B', '$hygiene_and_sanitation_12_3_1_C', '$hygiene_and_sanitation_12_3_1_D', '$hygiene_and_sanitation_12_3_1_E', '$hygiene_and_sanitation_12_3_1_F', '$hygiene_and_sanitation_12_3_1_G',
				'$hygiene_and_sanitation_12_4_1_text', '$hygiene_and_sanitation_12_4_1_A', '$hygiene_and_sanitation_12_4_1_B', '$hygiene_and_sanitation_12_4_1_C', '$hygiene_and_sanitation_12_4_1_D',
				'$hygiene_and_sanitation_12_5_1_text', '$hygiene_and_sanitation_12_5_1_A', '$hygiene_and_sanitation_12_5_1_B',
				'$hygiene_and_sanitation_12_6_1_text', '$hygiene_and_sanitation_12_6_1_A', '$hygiene_and_sanitation_12_6_1_B', '$hygiene_and_sanitation_12_6_1_C',
				'$hygiene_and_sanitation_12_7_1_text', '$hygiene_and_sanitation_12_7_1_A', '$hygiene_and_sanitation_12_7_1_B',
				'$safety_and_security_13_1_1_text', '$safety_and_security_13_1_1_A', '$safety_and_security_13_1_1_B', '$safety_and_security_13_1_1_C', '$safety_and_security_13_1_1_D', '$safety_and_security_13_1_1_E', '$safety_and_security_13_1_1_F_a', '$safety_and_security_13_1_1_F_b', '$safety_and_security_13_1_1_F_c', '$safety_and_security_13_1_1_F_d', '$safety_and_security_13_1_1_F_e', '$safety_and_security_13_1_1_F_f', '$safety_and_security_13_1_1_F_g', '$safety_and_security_13_1_1_G', '$safety_and_security_13_1_1_H', '$safety_and_security_13_1_1_I', '$safety_and_security_13_1_1_J',
				'$safety_and_security_13_2_1_text', '$safety_and_security_13_2_1_A', '$safety_and_security_13_2_1_B',
				'$safety_and_security_13_3_1_text', '$safety_and_security_13_3_1_A', '$safety_and_security_13_3_1_B', '$safety_and_security_13_3_1_C', '$safety_and_security_13_3_1_D', '$safety_and_security_13_3_1_E',
				'$safety_and_security_13_4_1_text', '$safety_and_security_13_4_1_A', '$safety_and_security_13_4_1_B', '$safety_and_security_13_4_1_C',
				'$safety_and_security_13_5_1_text', '$safety_and_security_13_5_1_A', '$safety_and_security_13_5_1_B', '$safety_and_security_13_5_1_C', '$safety_and_security_13_5_1_D', '$safety_and_security_13_5_1_E', '$safety_and_security_13_5_1_F',
				'$sundry_services_14_1_1_text', '$sundry_services_14_1_1_A', '$sundry_services_14_1_1_B', '$sundry_services_14_1_1_C',
				'$sundry_services_14_2_1_text', '$sundry_services_14_2_1_A',
				'$sundry_services_14_3_1_text', '$sundry_services_14_3_1_A', '$sundry_services_14_3_1_B',
				'$sundry_services_14_4_1_text', '$sundry_services_14_4_1_A',
				'$human_resources_15_1_1_text', '$human_resources_15_1_1_A', '$human_resources_15_1_1_B_a', '$human_resources_15_1_1_B_b', '$human_resources_15_1_1_B_c', '$human_resources_15_1_1_B_d', '$human_resources_15_1_1_B_e', '$human_resources_15_1_1_B_f',
				'$human_resources_15_2_1_text', '$human_resources_15_2_1_A', '$human_resources_15_2_1_B',
				'$sundry_services_15_3_1_text', '$human_resources_15_3_1_A', '$human_resources_15_3_1_B',
				'$sundry_services_15_4_1_text', '$human_resources_15_4_1_A', '$human_resources_15_4_1_B', '$human_resources_15_4_1_C',
				'$human_resources_15_5_1_text', '$human_resources_15_5_1_A_a', '$human_resources_15_5_1_A_b', '$human_resources_15_5_1_A_c', '$human_resources_15_5_1_B_a', '$human_resources_15_5_1_B_b', '$human_resources_15_5_1_B_c', '$human_resources_15_5_1_C_a', '$human_resources_15_5_1_C_b', '$human_resources_15_5_1_C_c',
				'$human_resources_15_6_1_text', '$human_resources_15_6_1_A',
				'$human_resources_15_7_1_text', '$human_resources_15_7_1_A', '$human_resources_15_7_1_B', '$human_resources_15_7_1_C', '$human_resources_15_7_1_D',
				'$human_resources_15_8_1_text', '$human_resources_15_8_1_A', '$human_resources_15_8_1_B', '$human_resources_15_8_1_C',
				'$human_resources_15_9_1_text', '$human_resources_15_9_1_A', '$human_resources_15_9_1_B', '$human_resources_15_9_1_C', '$human_resources_15_9_1_D', '$human_resources_15_9_1_E', '$human_resources_15_9_1_F',
				'$human_resources_15_10_1_text', '$human_resources_15_10_1_A', '$human_resources_15_10_1_B', '$human_resources_15_10_1_C', '$human_resources_15_10_1_D', '$human_resources_15_10_1_E', '$human_resources_15_10_1_F', '$human_resources_15_10_1_G',
				'$human_resources_15_11_1_text', '$human_resources_15_11_1_A_a', '$human_resources_15_11_1_A_b', '$human_resources_15_11_1_A_c', '$human_resources_15_11_1_B_a', '$human_resources_15_11_1_B_b', '$human_resources_15_11_1_B_c',
				'$general_16_1_1_text', '$general_16_1_1_A',
				'$general_16_2_1_text', '$general_16_2_1_A', '$general_16_2_1_B',
				'$general_16_3_1_text', '$general_16_3_1_A', '$general_16_3_1_B_a', '$general_16_3_1_B_b', '$general_16_3_1_B_c', '$general_16_3_1_B_d', '$general_16_3_1_B_e', '$general_16_3_1_C_a', '$general_16_3_1_C_b', '$general_16_3_1_D',
				'$general_16_4_1_text', '$general_16_4_1_A', '$general_16_4_1_B',
				'$general_16_5_1_text', '$general_16_5_1_A', '$general_16_5_1_B', '$general_16_5_1_C', '$general_16_5_1_D', '$general_16_5_1_E',
				'$general_16_6_1_text', '$general_16_6_1_A',
				'$general_16_7_1_text', '$general_16_7_1_A', '$general_16_7_1_B',
				'$general_16_8_1_text', '$general_16_8_1_A', '$general_16_8_1_B', '$general_16_8_1_C',
				'$general_16_9_1_text', '$general_16_9_1_A', '$general_16_9_1_B', '$general_16_9_1_C', '$general_16_9_1_D_a', '$general_16_9_1_D_b', '$general_16_9_1_D_c', '$general_16_9_1_D_d', '$general_16_9_1_D_e', '$general_16_9_1_E', '$general_16_9_1_F', '$general_16_9_1_G', '$general_16_9_1_H',
				'$general_16_10_1_text', '$general_16_10_1_A',
				'$general_16_11_1_text', '$general_16_11_1_A', '$general_16_11_1_B_a', '$general_16_11_1_B_b', '$general_16_11_1_B_c', '$general_16_11_1_B_d', '$general_16_11_1_B_e', '$general_16_11_1_C', '$general_16_11_1_D', '$general_16_11_1_E'
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
					$query = "UPDATE afcg_assessment_lodge SET 
					assessment_score = '$assessment_score', 
					location_1_1_1_text = '$location_1_1_1_text', location_1_1_1_A = '$location_1_1_1_A', location_1_1_1_B = '$location_1_1_1_B', location_1_1_1_C = '$location_1_1_1_C', location_1_1_1_D = '$location_1_1_1_D', location_1_1_1_E = '$location_1_1_1_E', location_1_1_1_F = '$location_1_1_1_F', location_1_1_1_G = '$location_1_1_1_G', location_1_1_1_H = '$location_1_1_1_H', location_1_1_1_I = '$location_1_1_1_I',
					location_1_2_1_text = '$location_1_2_1_text', location_1_2_1_A = '$location_1_2_1_A', location_1_2_1_B = '$location_1_2_1_B', location_1_2_1_C = '$location_1_2_1_C', location_1_2_1_D_a = '$location_1_2_1_D_a', location_1_2_1_D_b = '$location_1_2_1_D_b', location_1_2_1_D_c = '$location_1_2_1_D_c', location_1_2_1_D_d = '$location_1_2_1_D_d', location_1_2_1_E = '$location_1_2_1_E', location_1_2_1_F = '$location_1_2_1_F', location_1_2_1_G_a = '$location_1_2_1_G_a', location_1_2_1_G_b = '$location_1_2_1_G_b', location_1_2_1_G_c = '$location_1_2_1_G_c', location_1_2_1_H = '$location_1_2_1_H', location_1_2_1_I = '$location_1_2_1_I', location_1_2_1_J = '$location_1_2_1_J', location_1_2_1_K = '$location_1_2_1_K', location_1_2_1_L = '$location_1_2_1_L', location_1_2_1_M = '$location_1_2_1_M', location_1_2_1_N = '$location_1_2_1_N',
					building_2_1_1_text = '$building_2_1_1_text', building_2_1_1_A = '$building_2_1_1_A', building_2_1_1_B = '$building_2_1_1_B', building_2_1_1_C = '$building_2_1_1_C', building_2_1_1_D = '$building_2_1_1_D', building_2_1_1_E = '$building_2_1_1_E', building_2_1_1_F = '$building_2_1_1_F', building_2_1_1_G = '$building_2_1_1_G', building_2_1_1_H = '$building_2_1_1_H', building_2_1_1_I = '$building_2_1_1_I', building_2_1_1_J = '$building_2_1_1_J', building_2_1_1_K = '$building_2_1_1_K',
					building_2_2_1_text = '$building_2_2_1_text', building_2_2_1_A = '$building_2_2_1_A',
					building_2_3_1_text = '$building_2_3_1_text', building_2_3_1_A = '$building_2_3_1_A', building_2_3_1_B = '$building_2_3_1_B', building_2_3_1_C = '$building_2_3_1_C', building_2_3_1_D = '$building_2_3_1_D', building_2_3_1_E = '$building_2_3_1_E', building_2_3_1_F = '$building_2_3_1_F', building_2_3_1_G = '$building_2_3_1_G', building_2_4_1_A = '$building_2_4_1_A', building_2_4_1_B = '$building_2_4_1_B',
					front_office_3_1_1_text = '$front_office_3_1_1_text', front_office_3_1_1_A = '$front_office_3_1_1_A', front_office_3_1_1_B = '$front_office_3_1_1_B', front_office_3_1_1_C = '$front_office_3_1_1_C', front_office_3_1_1_D = '$front_office_3_1_1_D', front_office_3_1_1_E = '$front_office_3_1_1_E', front_office_3_1_1_F = '$front_office_3_1_1_F',
					front_office_3_2_1_text = '$front_office_3_2_1_text', front_office_3_2_1_A = '$front_office_3_2_1_A', front_office_3_2_1_B_a = '$front_office_3_2_1_B_a', front_office_3_2_1_B_b = '$front_office_3_2_1_B_b', front_office_3_2_1_B_c = '$front_office_3_2_1_B_c', front_office_3_2_1_C_a = '$front_office_3_2_1_C_a', front_office_3_2_1_C_b = '$front_office_3_2_1_C_b', front_office_3_2_1_C_c = '$front_office_3_2_1_C_c', front_office_3_2_1_D_a = '$front_office_3_2_1_D_a', front_office_3_2_1_D_b = '$front_office_3_2_1_D_b', front_office_3_2_1_D_c = '$front_office_3_2_1_D_c', front_office_3_2_1_D_d = '$front_office_3_2_1_D_d',
					front_office_3_3_1_text = '$front_office_3_3_1_text', front_office_3_3_1_A = '$front_office_3_3_1_A', front_office_3_3_1_B = '$front_office_3_3_1_B',
					front_office_3_4_1_text = '$front_office_3_4_1_text', front_office_3_4_1_A_a = '$front_office_3_4_1_A_a', front_office_3_4_1_A_b = '$front_office_3_4_1_A_b', front_office_3_4_1_A_c = '$front_office_3_4_1_A_c', front_office_3_4_1_A_d = '$front_office_3_4_1_A_d',
					front_office_3_5_1_text = '$front_office_3_5_1_text', front_office_3_5_1_A = '$front_office_3_5_1_A', front_office_3_5_1_B = '$front_office_3_5_1_B', front_office_3_5_1_C = '$front_office_3_5_1_C', front_office_3_5_1_D = '$front_office_3_5_1_D',
					front_office_3_6_1_text = '$front_office_3_6_1_text', front_office_3_6_1_A = '$front_office_3_6_1_A', front_office_3_6_1_B = '$front_office_3_6_1_B',
					front_office_3_7_1_text = '$front_office_3_7_1_text', front_office_3_7_1_A = '$front_office_3_7_1_A', front_office_3_7_1_B = '$front_office_3_7_1_B', front_office_3_7_1_C = '$front_office_3_7_1_C',
					front_office_3_8_1_text = '$front_office_3_8_1_text', front_office_3_8_1_A_a = '$front_office_3_8_1_A_a', front_office_3_8_1_A_b = '$front_office_3_8_1_A_b', front_office_3_8_1_A_c = '$front_office_3_8_1_A_c', front_office_3_8_1_B = '$front_office_3_8_1_B',
					front_office_3_9_1_text = '$front_office_3_9_1_text', front_office_3_9_1_A = '$front_office_3_9_1_A', front_office_3_9_1_B = '$front_office_3_9_1_B', front_office_3_9_1_C = '$front_office_3_9_1_C',
					lobby_lounge_other_public_areas_4_1_1_text = '$lobby_lounge_other_public_areas_4_1_1_text', lobby_lounge_other_public_areas_4_1_1_A = '$lobby_lounge_other_public_areas_4_1_1_A', lobby_lounge_other_public_areas_4_1_1_B = '$lobby_lounge_other_public_areas_4_1_1_B', lobby_lounge_other_public_areas_4_1_1_C = '$lobby_lounge_other_public_areas_4_1_1_C', lobby_lounge_other_public_areas_4_1_1_D = '$lobby_lounge_other_public_areas_4_1_1_D', lobby_lounge_other_public_areas_4_1_1_E = '$lobby_lounge_other_public_areas_4_1_1_E', lobby_lounge_other_public_areas_4_1_1_F = '$lobby_lounge_other_public_areas_4_1_1_F', lobby_lounge_other_public_areas_4_1_1_G = '$lobby_lounge_other_public_areas_4_1_1_G',
					lobby_lounge_other_public_areas_4_2_1_text = '$lobby_lounge_other_public_areas_4_2_1_text', lobby_lounge_other_public_areas_4_2_1_A = '$lobby_lounge_other_public_areas_4_2_1_A',
					lobby_lounge_other_public_areas_4_3_1_text = '$lobby_lounge_other_public_areas_4_3_1_text', lobby_lounge_other_public_areas_4_3_1_A = '$lobby_lounge_other_public_areas_4_3_1_A', lobby_lounge_other_public_areas_4_3_1_B_a = '$lobby_lounge_other_public_areas_4_3_1_B_a', lobby_lounge_other_public_areas_4_3_1_B_b = '$lobby_lounge_other_public_areas_4_3_1_B_b', lobby_lounge_other_public_areas_4_3_1_B_c = '$lobby_lounge_other_public_areas_4_3_1_B_c', lobby_lounge_other_public_areas_4_3_1_B_d = '$lobby_lounge_other_public_areas_4_3_1_B_d', lobby_lounge_other_public_areas_4_3_1_C = '$lobby_lounge_other_public_areas_4_3_1_C',
					lobby_lounge_other_public_areas_4_4_1_text = '$lobby_lounge_other_public_areas_4_4_1_text', lobby_lounge_other_public_areas_4_4_1_A = '$lobby_lounge_other_public_areas_4_4_1_A', lobby_lounge_other_public_areas_4_4_1_B = '$lobby_lounge_other_public_areas_4_4_1_B', lobby_lounge_other_public_areas_4_4_1_C = '$lobby_lounge_other_public_areas_4_4_1_C', lobby_lounge_other_public_areas_4_4_1_D_a = '$lobby_lounge_other_public_areas_4_4_1_D_a', lobby_lounge_other_public_areas_4_4_1_D_b = '$lobby_lounge_other_public_areas_4_4_1_D_b', lobby_lounge_other_public_areas_4_4_1_E = '$lobby_lounge_other_public_areas_4_4_1_E', lobby_lounge_other_public_areas_4_4_1_F = '$lobby_lounge_other_public_areas_4_4_1_F',
					lobby_lounge_other_public_areas_4_5_1_text = '$lobby_lounge_other_public_areas_4_5_1_text', lobby_lounge_other_public_areas_4_5_1_A = '$lobby_lounge_other_public_areas_4_5_1_A', lobby_lounge_other_public_areas_4_5_1_B = '$lobby_lounge_other_public_areas_4_5_1_B',
					lobby_lounge_other_public_areas_4_6_1_text = '$lobby_lounge_other_public_areas_4_6_1_text', lobby_lounge_other_public_areas_4_6_1_A = '$lobby_lounge_other_public_areas_4_6_1_A', lobby_lounge_other_public_areas_4_6_1_B = '$lobby_lounge_other_public_areas_4_6_1_B', lobby_lounge_other_public_areas_4_6_1_C = '$lobby_lounge_other_public_areas_4_6_1_C', lobby_lounge_other_public_areas_4_6_1_D = '$lobby_lounge_other_public_areas_4_6_1_D', lobby_lounge_other_public_areas_4_6_1_E = '$lobby_lounge_other_public_areas_4_6_1_E', lobby_lounge_other_public_areas_4_6_1_F = '$lobby_lounge_other_public_areas_4_6_1_F', lobby_lounge_other_public_areas_4_6_1_G = '$lobby_lounge_other_public_areas_4_6_1_G',
					lobby_lounge_other_public_areas_4_7_1_text = '$lobby_lounge_other_public_areas_4_7_1_text', lobby_lounge_other_public_areas_4_7_1_A = '$lobby_lounge_other_public_areas_4_7_1_A', lobby_lounge_other_public_areas_4_7_1_B = '$lobby_lounge_other_public_areas_4_7_1_B', lobby_lounge_other_public_areas_4_7_1_C = '$lobby_lounge_other_public_areas_4_7_1_C',
					lobby_lounge_other_public_areas_4_8_1_text = '$lobby_lounge_other_public_areas_4_8_1_text', lobby_lounge_other_public_areas_4_8_1_A = '$lobby_lounge_other_public_areas_4_8_1_A',
					function_rooms_5_1_1_text = '$function_rooms_5_1_1_text', function_rooms_5_1_1_A = '$function_rooms_5_1_1_A', function_rooms_5_1_1_B = '$function_rooms_5_1_1_B', function_rooms_5_1_1_C = '$function_rooms_5_1_1_C', function_rooms_5_1_1_D = '$function_rooms_5_1_1_D', function_rooms_5_1_1_E = '$function_rooms_5_1_1_E', function_rooms_5_1_1_F = '$function_rooms_5_1_1_F', function_rooms_5_1_1_G = '$function_rooms_5_1_1_G', function_rooms_5_1_1_H = '$function_rooms_5_1_1_H', function_rooms_5_1_1_I = '$function_rooms_5_1_1_I', function_rooms_5_1_1_J = '$function_rooms_5_1_1_J', function_rooms_5_1_1_K = '$function_rooms_5_1_1_K', function_rooms_5_1_1_L = '$function_rooms_5_1_1_L',
					restaurants_6_1_1_text = '$restaurants_6_1_1_text', restaurants_6_1_1_A = '$restaurants_6_1_1_A', restaurants_6_1_1_B = '$restaurants_6_1_1_B', restaurants_6_1_1_C = '$restaurants_6_1_1_C', restaurants_6_1_1_D = '$restaurants_6_1_1_D', restaurants_6_1_1_E = '$restaurants_6_1_1_E',
					restaurants_6_2_1_text = '$restaurants_6_2_1_text', restaurants_6_2_1_A = '$restaurants_6_2_1_A', restaurants_6_2_1_B = '$restaurants_6_2_1_B', restaurants_6_2_1_C = '$restaurants_6_2_1_C', restaurants_6_2_1_D = '$restaurants_6_2_1_D', restaurants_6_2_1_E = '$restaurants_6_2_1_E', restaurants_6_2_1_F = '$restaurants_6_2_1_F', restaurants_6_2_1_G = '$restaurants_6_2_1_G', restaurants_6_2_1_I = '$restaurants_6_2_1_I', restaurants_6_3_1_A = '$restaurants_6_3_1_A', restaurants_6_3_1_B = '$restaurants_6_3_1_B', restaurants_6_3_1_C = '$restaurants_6_3_1_C', restaurants_6_3_1_D = '$restaurants_6_3_1_D', restaurants_6_4_1_A = '$restaurants_6_4_1_A', restaurants_6_4_1_B = '$restaurants_6_4_1_B', restaurants_6_4_1_C = '$restaurants_6_4_1_C', restaurants_6_4_1_D = '$restaurants_6_4_1_D', restaurants_6_5_1_A = '$restaurants_6_5_1_A', restaurants_6_5_1_B = '$restaurants_6_5_1_B', restaurants_6_5_1_C = '$restaurants_6_5_1_C', restaurants_6_5_1_D = '$restaurants_6_5_1_D', restaurants_6_5_1_E = '$restaurants_6_5_1_E', restaurants_6_5_1_F = '$restaurants_6_5_1_F', restaurants_6_5_1_G = '$restaurants_6_5_1_G', restaurants_6_5_1_H = '$restaurants_6_5_1_H', restaurants_6_6_1_A = '$restaurants_6_6_1_A', restaurants_6_6_1_B = '$restaurants_6_6_1_B', restaurants_6_6_1_C = '$restaurants_6_6_1_C', restaurants_6_6_1_D = '$restaurants_6_6_1_D', restaurants_6_6_1_E = '$restaurants_6_6_1_E', restaurants_6_6_1_F_a = '$restaurants_6_6_1_F_a', restaurants_6_6_1_F_b = '$restaurants_6_6_1_F_b', restaurants_6_6_1_F_c = '$restaurants_6_6_1_F_c', restaurants_6_6_1_F_d = '$restaurants_6_6_1_F_d', restaurants_6_6_1_G = '$restaurants_6_6_1_G', restaurants_6_6_1_H_a = '$restaurants_6_6_1_H_a', restaurants_6_6_1_H_b = '$restaurants_6_6_1_H_b', restaurants_6_6_1_H_c = '$restaurants_6_6_1_H_c', restaurants_6_6_1_I = '$restaurants_6_6_1_I', restaurants_6_6_1_J = '$restaurants_6_6_1_J', restaurants_6_7_1_A = '$restaurants_6_7_1_A', restaurants_6_7_1_B = '$restaurants_6_7_1_B', restaurants_6_7_1_C = '$restaurants_6_7_1_C', restaurants_6_8_1_A = '$restaurants_6_8_1_A', restaurants_6_8_1_B = '$restaurants_6_8_1_B',
					bar_7_1_1_text = '$bar_7_1_1_text', bar_7_1_1_A = '$bar_7_1_1_A', bar_7_1_1_B = '$bar_7_1_1_B', bar_7_1_1_C = '$bar_7_1_1_C', bar_7_1_1_D_a = '$bar_7_1_1_D_a', bar_7_1_1_D_b = '$bar_7_1_1_D_b', bar_7_1_1_D_c = '$bar_7_1_1_D_c', bar_7_1_1_E = '$bar_7_1_1_E', bar_7_1_1_F = '$bar_7_1_1_F', bar_7_1_1_G = '$bar_7_1_1_G',
					bar_7_2_1_text = '$bar_7_2_1_text', bar_7_2_1_A = '$bar_7_2_1_A', bar_7_2_1_B = '$bar_7_2_1_B', bar_7_2_1_C = '$bar_7_2_1_C', bar_7_2_1_D = '$bar_7_2_1_D', bar_7_2_1_E = '$bar_7_2_1_E', bar_7_2_1_F = '$bar_7_2_1_F', bar_7_2_1_G = '$bar_7_2_1_G', bar_7_2_1_H = '$bar_7_2_1_H', bar_7_2_1_I = '$bar_7_2_1_I', bar_7_3_1_A = '$bar_7_3_1_A', bar_7_3_1_B = '$bar_7_3_1_B', bar_7_3_1_C = '$bar_7_3_1_C', bar_7_3_1_D = '$bar_7_3_1_D', bar_7_3_1_E = '$bar_7_3_1_E', bar_7_3_1_F = '$bar_7_3_1_F',
					bar_7_4_1_text = '$bar_7_4_1_text', bar_7_4_1_B = '$bar_7_4_1_B', bar_7_4_1_C = '$bar_7_4_1_C', bar_7_4_1_D = '$bar_7_4_1_D', bar_7_4_1_E_a = '$bar_7_4_1_E_a', bar_7_4_1_E_b = '$bar_7_4_1_E_b', bar_7_4_1_E_c = '$bar_7_4_1_E_c', bar_7_4_1_E_d = '$bar_7_4_1_E_d', bar_7_4_1_E_e = '$bar_7_4_1_E_e', bar_7_4_1_E_f = '$bar_7_4_1_E_f', bar_7_4_1_E_g = '$bar_7_4_1_E_g', bar_7_4_1_E_h = '$bar_7_4_1_E_h', bar_7_4_1_F = '$bar_7_4_1_F', bar_7_4_1_G = '$bar_7_4_1_G', bar_7_4_1_H = '$bar_7_4_1_H', bar_7_4_1_I = '$bar_7_4_1_I',
					bar_7_5_1_text = '$bar_7_5_1_text', bar_7_5_1_A = '$bar_7_5_1_A', bar_7_5_1_B = '$bar_7_5_1_B', bar_7_5_1_C = '$bar_7_5_1_C',
					bar_7_6_1_text = '$bar_7_6_1_text', bar_7_6_1_A = '$bar_7_6_1_A', bar_7_6_1_B = '$bar_7_6_1_B', bar_7_6_1_C = '$bar_7_6_1_C',
					bar_7_7_1_text = '$bar_7_7_1_text', bar_7_7_1_A = '$bar_7_7_1_A', bar_7_7_1_B = '$bar_7_7_1_B', bar_7_7_1_C = '$bar_7_7_1_C',
					kitchen_8_1_1_text = '$kitchen_8_1_1_text', kitchen_8_1_1_A = '$kitchen_8_1_1_A',
					kitchen_8_2_1_text = '$kitchen_8_2_1_text', kitchen_8_2_1_A = '$kitchen_8_2_1_A', kitchen_8_2_1_B = '$kitchen_8_2_1_B', kitchen_8_2_1_C = '$kitchen_8_2_1_C',
					kitchen_8_3_1_text = '$kitchen_8_3_1_text', kitchen_8_3_1_A = '$kitchen_8_3_1_A', kitchen_8_3_1_B = '$kitchen_8_3_1_B', kitchen_8_3_1_C = '$kitchen_8_3_1_C',
					kitchen_8_4_1_text = '$kitchen_8_4_1_text', kitchen_8_4_1_A = '$kitchen_8_4_1_A', kitchen_8_4_1_B = '$kitchen_8_4_1_B', kitchen_8_4_1_C = '$kitchen_8_4_1_C', kitchen_8_4_1_D = '$kitchen_8_4_1_D',
					kitchen_8_5_1_text = '$kitchen_8_5_1_text', kitchen_8_5_1_A = '$kitchen_8_5_1_A', kitchen_8_5_1_B = '$kitchen_8_5_1_B', kitchen_8_5_1_C = '$kitchen_8_5_1_C', kitchen_8_5_1_D = '$kitchen_8_5_1_D', kitchen_8_5_1_E = '$kitchen_8_5_1_E', kitchen_8_5_1_F = '$kitchen_8_5_1_F', kitchen_8_5_1_G = '$kitchen_8_5_1_G', kitchen_8_5_1_H = '$kitchen_8_5_1_H', kitchen_8_5_1_I = '$kitchen_8_5_1_I',
					kitchen_8_6_1_text = '$kitchen_8_6_1_text', kitchen_8_6_1_A = '$kitchen_8_6_1_A', kitchen_8_6_1_B = '$kitchen_8_6_1_B', kitchen_8_6_1_C = '$kitchen_8_6_1_C', kitchen_8_6_1_D = '$kitchen_8_6_1_D', kitchen_8_6_1_E = '$kitchen_8_6_1_E', kitchen_8_6_1_F = '$kitchen_8_6_1_F', kitchen_8_6_1_G = '$kitchen_8_6_1_G',
					kitchen_8_7_1_text = '$kitchen_8_7_1_text', kitchen_8_7_1_A = '$kitchen_8_7_1_A', kitchen_8_7_1_B = '$kitchen_8_7_1_B', kitchen_8_7_1_C = '$kitchen_8_7_1_C', kitchen_8_7_1_D = '$kitchen_8_7_1_D', kitchen_8_7_1_E = '$kitchen_8_7_1_E',
					kitchen_8_8_1_text = '$kitchen_8_8_1_text', kitchen_8_8_1_A = '$kitchen_8_8_1_A', kitchen_8_8_1_B = '$kitchen_8_8_1_B', kitchen_8_8_1_C_a = '$kitchen_8_8_1_C_a', kitchen_8_8_1_C_b = '$kitchen_8_8_1_C_b', kitchen_8_8_1_D = '$kitchen_8_8_1_D', kitchen_8_8_1_E = '$kitchen_8_8_1_E', kitchen_8_8_1_F = '$kitchen_8_8_1_F', kitchen_8_8_1_G = '$kitchen_8_8_1_G', kitchen_8_8_1_H = '$kitchen_8_8_1_H',
					kitchen_8_9_1_text = '$kitchen_8_9_1_text', kitchen_8_9_1_A = '$kitchen_8_9_1_A', kitchen_8_9_1_B = '$kitchen_8_9_1_B', kitchen_8_9_1_C = '$kitchen_8_9_1_C', kitchen_8_9_1_D = '$kitchen_8_9_1_D', kitchen_8_9_1_E = '$kitchen_8_9_1_E',
					kitchen_8_10_1_text = '$kitchen_8_10_1_text', kitchen_8_10_1_A_a = '$kitchen_8_10_1_A_a', kitchen_8_10_1_A_b = '$kitchen_8_10_1_A_b', kitchen_8_10_1_A_c = '$kitchen_8_10_1_A_c', kitchen_8_10_1_A_d = '$kitchen_8_10_1_A_d', kitchen_8_10_1_B = '$kitchen_8_10_1_B', kitchen_8_10_1_C = '$kitchen_8_10_1_C', kitchen_8_10_1_D = '$kitchen_8_10_1_D', kitchen_8_10_1_E = '$kitchen_8_10_1_E', kitchen_8_10_1_F = '$kitchen_8_10_1_F', kitchen_8_10_1_G = '$kitchen_8_10_1_G',
					kitchen_8_11_1_text = '$kitchen_8_11_1_text', kitchen_8_11_1_A_a = '$kitchen_8_11_1_A_a', kitchen_8_11_1_A_b = '$kitchen_8_11_1_A_b', kitchen_8_11_1_A_c = '$kitchen_8_11_1_A_c', kitchen_8_11_1_B = '$kitchen_8_11_1_B', kitchen_8_11_1_C_a = '$kitchen_8_11_1_C_a', kitchen_8_11_1_C_b = '$kitchen_8_11_1_C_b', kitchen_8_11_1_C_c = '$kitchen_8_11_1_C_c', kitchen_8_11_1_C_d = '$kitchen_8_11_1_C_d', kitchen_8_11_1_C_e = '$kitchen_8_11_1_C_e', kitchen_8_11_1_D_a = '$kitchen_8_11_1_D_a', kitchen_8_11_1_D_b = '$kitchen_8_11_1_D_b', kitchen_8_11_1_E = '$kitchen_8_11_1_E',
					kitchen_8_12_1_text = '$kitchen_8_12_1_text', kitchen_8_12_1_A = '$kitchen_8_12_1_A', kitchen_8_12_1_B = '$kitchen_8_12_1_B', kitchen_8_12_1_C = '$kitchen_8_12_1_C',
					guest_rooms_9_1_1_text = '$guest_rooms_9_1_1_text', guest_rooms_9_1_1_A = '$guest_rooms_9_1_1_A',
					guest_rooms_9_2_1_text = '$guest_rooms_9_2_1_text', guest_rooms_9_2_1_A = '$guest_rooms_9_2_1_A', guest_rooms_9_2_1_B = '$guest_rooms_9_2_1_B',
					guest_rooms_9_3_1_text = '$guest_rooms_9_3_1_text', guest_rooms_9_3_1_A = '$guest_rooms_9_3_1_A', guest_rooms_9_3_1_B = '$guest_rooms_9_3_1_B',
					guest_rooms_9_4_1_text = '$guest_rooms_9_4_1_text', guest_rooms_9_4_1_A = '$guest_rooms_9_4_1_A', guest_rooms_9_4_1_B_a = '$guest_rooms_9_4_1_B_a', guest_rooms_9_4_1_B_b = '$guest_rooms_9_4_1_B_b', guest_rooms_9_4_1_B_c = '$guest_rooms_9_4_1_B_c', guest_rooms_9_4_1_B_d = '$guest_rooms_9_4_1_B_d', guest_rooms_9_4_1_B_e = '$guest_rooms_9_4_1_B_e', guest_rooms_9_4_1_B_f = '$guest_rooms_9_4_1_B_f', guest_rooms_9_4_1_B_g = '$guest_rooms_9_4_1_B_g', guest_rooms_9_4_1_B_h = '$guest_rooms_9_4_1_B_h', guest_rooms_9_4_1_B_i = '$guest_rooms_9_4_1_B_i', guest_rooms_9_4_1_B_j = '$guest_rooms_9_4_1_B_j', guest_rooms_9_4_1_B_k = '$guest_rooms_9_4_1_B_k', guest_rooms_9_4_1_B_l = '$guest_rooms_9_4_1_B_l', guest_rooms_9_4_1_B_m = '$guest_rooms_9_4_1_B_m', guest_rooms_9_4_1_B_n = '$guest_rooms_9_4_1_B_n', guest_rooms_9_4_1_C = '$guest_rooms_9_4_1_C', guest_rooms_9_4_1_D = '$guest_rooms_9_4_1_D', guest_rooms_9_4_1_E = '$guest_rooms_9_4_1_E', guest_rooms_9_4_1_F = '$guest_rooms_9_4_1_F', guest_rooms_9_4_1_G = '$guest_rooms_9_4_1_G',
					guest_rooms_9_5_1_text = '$guest_rooms_9_5_1_text', guest_rooms_9_5_1_A = '$guest_rooms_9_5_1_A', guest_rooms_9_5_1_B_a = '$guest_rooms_9_5_1_B_a', guest_rooms_9_5_1_B_b = '$guest_rooms_9_5_1_B_b', guest_rooms_9_5_1_B_c = '$guest_rooms_9_5_1_B_c', guest_rooms_9_5_1_B_d = '$guest_rooms_9_5_1_B_d', guest_rooms_9_5_1_C = '$guest_rooms_9_5_1_C', guest_rooms_9_5_1_D = '$guest_rooms_9_5_1_D',
					guest_rooms_9_6_1_text = '$guest_rooms_9_6_1_text', guest_rooms_9_6_1_A = '$guest_rooms_9_6_1_A', guest_rooms_9_6_1_B = '$guest_rooms_9_6_1_B',
					guest_rooms_9_7_1_text = '$guest_rooms_9_7_1_text', guest_rooms_9_7_1_A = '$guest_rooms_9_7_1_A', guest_rooms_9_7_1_B = '$guest_rooms_9_7_1_B', guest_rooms_9_7_1_C = '$guest_rooms_9_7_1_C', guest_rooms_9_7_1_D = '$guest_rooms_9_7_1_D', guest_rooms_9_7_1_E = '$guest_rooms_9_7_1_E',
					guest_rooms_9_8_1_text = '$guest_rooms_9_8_1_text', guest_rooms_9_8_1_A = '$guest_rooms_9_8_1_A', guest_rooms_9_8_1_B = '$guest_rooms_9_8_1_B', guest_rooms_9_8_1_C = '$guest_rooms_9_8_1_C', guest_rooms_9_8_1_D = '$guest_rooms_9_8_1_D', guest_rooms_9_8_1_E = '$guest_rooms_9_8_1_E',
					guest_rooms_9_9_1_text = '$guest_rooms_9_9_1_text', guest_rooms_9_9_1_A = '$guest_rooms_9_9_1_A', guest_rooms_9_9_1_B_a = '$guest_rooms_9_9_1_B_a', guest_rooms_9_9_1_B_b = '$guest_rooms_9_9_1_B_b', guest_rooms_9_9_1_B_c = '$guest_rooms_9_9_1_B_c', guest_rooms_9_9_1_B_d = '$guest_rooms_9_9_1_B_d', guest_rooms_9_9_1_B_e = '$guest_rooms_9_9_1_B_e', guest_rooms_9_9_1_B_f = '$guest_rooms_9_9_1_B_f', guest_rooms_9_9_1_C_a = '$guest_rooms_9_9_1_C_a', guest_rooms_9_9_1_C_b = '$guest_rooms_9_9_1_C_b', guest_rooms_9_9_1_D = '$guest_rooms_9_9_1_D',
					guest_rooms_9_10_1_text = '$guest_rooms_9_10_1_text', guest_rooms_9_10_1_A = '$guest_rooms_9_10_1_A',
					guest_rooms_9_11_1_text = '$guest_rooms_9_11_1_text', guest_rooms_9_11_1_A_a = '$guest_rooms_9_11_1_A_a', guest_rooms_9_11_1_A_b = '$guest_rooms_9_11_1_A_b', guest_rooms_9_11_1_A_c = '$guest_rooms_9_11_1_A_c', guest_rooms_9_11_1_A_d = '$guest_rooms_9_11_1_A_d', guest_rooms_9_11_1_A_e = '$guest_rooms_9_11_1_A_e', guest_rooms_9_11_1_B_a = '$guest_rooms_9_11_1_B_a', guest_rooms_9_11_1_B_b = '$guest_rooms_9_11_1_B_b', guest_rooms_9_11_1_B_c = '$guest_rooms_9_11_1_B_c', guest_rooms_9_11_1_B_d = '$guest_rooms_9_11_1_B_d', guest_rooms_9_11_1_C = '$guest_rooms_9_11_1_C',
					guest_rooms_9_12_1_text = '$guest_rooms_9_12_1_text', guest_rooms_9_12_1_A = '$guest_rooms_9_12_1_A', guest_rooms_9_12_1_B = '$guest_rooms_9_12_1_B', guest_rooms_9_12_1_C = '$guest_rooms_9_12_1_C', guest_rooms_9_12_1_D = '$guest_rooms_9_12_1_D', guest_rooms_9_12_1_E = '$guest_rooms_9_12_1_E', guest_rooms_9_12_1_F = '$guest_rooms_9_12_1_F', guest_rooms_9_12_1_G = '$guest_rooms_9_12_1_G',
					guest_rooms_9_13_1_text = '$guest_rooms_9_13_1_text', guest_rooms_9_13_1_A = '$guest_rooms_9_13_1_A', guest_rooms_9_13_1_B = '$guest_rooms_9_13_1_B', guest_rooms_9_13_1_C = '$guest_rooms_9_13_1_C',
					guest_rooms_9_14_1_text = '$guest_rooms_9_14_1_text', guest_rooms_9_14_1_A = '$guest_rooms_9_14_1_A', guest_rooms_9_14_1_B_a = '$guest_rooms_9_14_1_B_a', guest_rooms_9_14_1_B_b = '$guest_rooms_9_14_1_B_b', guest_rooms_9_14_1_B_c = '$guest_rooms_9_14_1_B_c', guest_rooms_9_14_1_C = '$guest_rooms_9_14_1_C', guest_rooms_9_15_1_A_a = '$guest_rooms_9_15_1_A_a', guest_rooms_9_15_1_A_b = '$guest_rooms_9_15_1_A_b', guest_rooms_9_15_1_A_c = '$guest_rooms_9_15_1_A_c', guest_rooms_9_15_1_A_d = '$guest_rooms_9_15_1_A_d', guest_rooms_9_15_1_A_e = '$guest_rooms_9_15_1_A_e', guest_rooms_9_15_1_A_f = '$guest_rooms_9_15_1_A_f', guest_rooms_9_15_1_A_g = '$guest_rooms_9_15_1_A_g', guest_rooms_9_15_1_A_h = '$guest_rooms_9_15_1_A_h', guest_rooms_9_15_1_A_i = '$guest_rooms_9_15_1_A_i', guest_rooms_9_15_1_A_j = '$guest_rooms_9_15_1_A_j', guest_rooms_9_15_1_A_k = '$guest_rooms_9_15_1_A_k', guest_rooms_9_15_1_A_l = '$guest_rooms_9_15_1_A_l', guest_rooms_9_15_1_A_m = '$guest_rooms_9_15_1_A_m', guest_rooms_9_15_1_A_n = '$guest_rooms_9_15_1_A_n', guest_rooms_9_15_1_A_o = '$guest_rooms_9_15_1_A_o', guest_rooms_9_15_1_A_p = '$guest_rooms_9_15_1_A_p', guest_rooms_9_15_1_A_q = '$guest_rooms_9_15_1_A_q', guest_rooms_9_15_1_B = '$guest_rooms_9_15_1_B', guest_rooms_9_15_1_C = '$guest_rooms_9_15_1_C',
					guest_bathrooms_10_1_1_text = '$guest_bathrooms_10_1_1_text', guest_bathrooms_10_1_1_A = '$guest_bathrooms_10_1_1_A', guest_bathrooms_10_2_1_A = '$guest_bathrooms_10_2_1_A',
					guest_bathrooms_10_3_1_text = '$guest_bathrooms_10_3_1_text', guest_bathrooms_10_3_1_A_a = '$guest_bathrooms_10_3_1_A_a', guest_bathrooms_10_3_1_A_b = '$guest_bathrooms_10_3_1_A_b', guest_bathrooms_10_3_1_A_c = '$guest_bathrooms_10_3_1_A_c', guest_bathrooms_10_3_1_A_d = '$guest_bathrooms_10_3_1_A_d', guest_bathrooms_10_3_1_A_e = '$guest_bathrooms_10_3_1_A_e', guest_bathrooms_10_3_1_A_f = '$guest_bathrooms_10_3_1_A_f', guest_bathrooms_10_3_1_A_g = '$guest_bathrooms_10_3_1_A_g', guest_bathrooms_10_3_1_A_h = '$guest_bathrooms_10_3_1_A_h', guest_bathrooms_10_3_1_A_i = '$guest_bathrooms_10_3_1_A_i', guest_bathrooms_10_3_1_A_j = '$guest_bathrooms_10_3_1_A_j', guest_bathrooms_10_3_1_A_k = '$guest_bathrooms_10_3_1_A_k', guest_bathrooms_10_3_1_A_l = '$guest_bathrooms_10_3_1_A_l', guest_bathrooms_10_3_1_A_m = '$guest_bathrooms_10_3_1_A_m', guest_bathrooms_10_3_1_A_n = '$guest_bathrooms_10_3_1_A_n', guest_bathrooms_10_3_1_A_o = '$guest_bathrooms_10_3_1_A_o', guest_bathrooms_10_3_1_A_p = '$guest_bathrooms_10_3_1_A_p', guest_bathrooms_10_3_1_A_q = '$guest_bathrooms_10_3_1_A_q', guest_bathrooms_10_3_1_A_r = '$guest_bathrooms_10_3_1_A_r', guest_bathrooms_10_3_1_A_s = '$guest_bathrooms_10_3_1_A_s', guest_bathrooms_10_3_1_A_t = '$guest_bathrooms_10_3_1_A_t', guest_bathrooms_10_3_1_A_u = '$guest_bathrooms_10_3_1_A_u', guest_bathrooms_10_3_1_A_v = '$guest_bathrooms_10_3_1_A_v', guest_bathrooms_10_3_1_A_w = '$guest_bathrooms_10_3_1_A_w', guest_bathrooms_10_3_1_B = '$guest_bathrooms_10_3_1_B', guest_bathrooms_10_3_1_C = '$guest_bathrooms_10_3_1_C', guest_bathrooms_10_3_1_D = '$guest_bathrooms_10_3_1_D', guest_bathrooms_10_3_1_E = '$guest_bathrooms_10_3_1_E', guest_bathrooms_10_3_1_F = '$guest_bathrooms_10_3_1_F',
					guest_bathrooms_10_4_1_text = '$guest_bathrooms_10_4_1_text', guest_bathrooms_10_4_1_A = '$guest_bathrooms_10_4_1_A', guest_bathrooms_10_4_1_B = '$guest_bathrooms_10_4_1_B', guest_bathrooms_10_4_1_C = '$guest_bathrooms_10_4_1_C', guest_bathrooms_10_4_1_D = '$guest_bathrooms_10_4_1_D', guest_bathrooms_10_4_1_E = '$guest_bathrooms_10_4_1_E', guest_bathrooms_10_4_1_F = '$guest_bathrooms_10_4_1_F',
					guest_bathrooms_10_5_1_text = '$guest_bathrooms_10_5_1_text', guest_bathrooms_10_5_1_A_a = '$guest_bathrooms_10_5_1_A_a', guest_bathrooms_10_5_1_A_b = '$guest_bathrooms_10_5_1_A_b', guest_bathrooms_10_5_1_A_c = '$guest_bathrooms_10_5_1_A_c', guest_bathrooms_10_5_1_A_d = '$guest_bathrooms_10_5_1_A_d', guest_bathrooms_10_5_1_A_e = '$guest_bathrooms_10_5_1_A_e', guest_bathrooms_10_5_1_B = '$guest_bathrooms_10_5_1_B', guest_bathrooms_10_5_1_C = '$guest_bathrooms_10_5_1_C', guest_bathrooms_10_5_1_D = '$guest_bathrooms_10_5_1_D', guest_bathrooms_10_5_1_E = '$guest_bathrooms_10_5_1_E', guest_bathrooms_10_5_1_F = '$guest_bathrooms_10_5_1_F',
					guest_bathrooms_10_6_1_text = '$guest_bathrooms_10_6_1_text', guest_bathrooms_10_6_1_A = '$guest_bathrooms_10_6_1_A', guest_bathrooms_10_6_1_B = '$guest_bathrooms_10_6_1_B', guest_bathrooms_10_6_1_C = '$guest_bathrooms_10_6_1_C',
					guest_bathrooms_10_7_1_text = '$guest_bathrooms_10_7_1_text', guest_bathrooms_10_7_1_A = '$guest_bathrooms_10_7_1_A', guest_bathrooms_10_7_1_B = '$guest_bathrooms_10_7_1_B', guest_bathrooms_10_7_1_C = '$guest_bathrooms_10_7_1_C', guest_bathrooms_10_7_1_D = '$guest_bathrooms_10_7_1_D',
					guest_bathrooms_10_8_1_text = '$guest_bathrooms_10_8_1_text', guest_bathrooms_10_8_1_A_a = '$guest_bathrooms_10_8_1_A_a', guest_bathrooms_10_8_1_A_b = '$guest_bathrooms_10_8_1_A_b', guest_bathrooms_10_8_1_A_c = '$guest_bathrooms_10_8_1_A_c', guest_bathrooms_10_8_1_A_d = '$guest_bathrooms_10_8_1_A_d', guest_bathrooms_10_8_1_A_e = '$guest_bathrooms_10_8_1_A_e', guest_bathrooms_10_8_1_A_f = '$guest_bathrooms_10_8_1_A_f', guest_bathrooms_10_8_1_A_g = '$guest_bathrooms_10_8_1_A_g', guest_bathrooms_10_8_1_B = '$guest_bathrooms_10_8_1_B', guest_bathrooms_10_8_1_C = '$guest_bathrooms_10_8_1_C',
					guest_bathrooms_10_9_1_text = '$guest_bathrooms_10_9_1_text', guest_bathrooms_10_9_1_A = '$guest_bathrooms_10_9_1_A', guest_bathrooms_10_9_1_B = '$guest_bathrooms_10_9_1_B',
					suites_11_1_1_text = '$suites_11_1_1_text', suites_11_1_1_A = '$suites_11_1_1_A',
					suites_11_2_1_text = '$suites_11_2_1_text', suites_11_2_1_A = '$suites_11_2_1_A', suites_11_2_1_B = '$suites_11_2_1_B',
					suites_11_3_1_text = '$suites_11_3_1_text', suites_11_3_1_A_a = '$suites_11_3_1_A_a', suites_11_3_1_A_b = '$suites_11_3_1_A_b', suites_11_3_1_A_c = '$suites_11_3_1_A_c', suites_11_3_1_A_d = '$suites_11_3_1_A_d',
					suites_11_4_1_text = '$suites_11_4_1_text', suites_11_4_1_A = '$suites_11_4_1_A', suites_11_4_1_B = '$suites_11_4_1_B',
					suites_11_5_1_text = '$suites_11_5_1_text', suites_11_5_1_A_a = '$suites_11_5_1_A_a', suites_11_5_1_A_b = '$suites_11_5_1_A_b', suites_11_5_1_B_a = '$suites_11_5_1_B_a', suites_11_5_1_B_b = '$suites_11_5_1_B_b', suites_11_5_1_B_c = '$suites_11_5_1_B_c', suites_11_5_1_B_d = '$suites_11_5_1_B_d', suites_11_5_1_B_e = '$suites_11_5_1_B_e', suites_11_5_1_B_f = '$suites_11_5_1_B_f', suites_11_5_1_B_g = '$suites_11_5_1_B_g', suites_11_5_1_B_h = '$suites_11_5_1_B_h', suites_11_5_1_B_i = '$suites_11_5_1_B_i', suites_11_5_1_B_j = '$suites_11_5_1_B_j', suites_11_5_1_B_k = '$suites_11_5_1_B_k', suites_11_5_1_B_l = '$suites_11_5_1_B_l', suites_11_5_1_B_m = '$suites_11_5_1_B_m', suites_11_5_1_B_n = '$suites_11_5_1_B_n', suites_11_5_1_B_o = '$suites_11_5_1_B_o', suites_11_5_1_B_p = '$suites_11_5_1_B_p', suites_11_5_1_C = '$suites_11_5_1_C', suites_11_5_1_D = '$suites_11_5_1_D', suites_11_5_1_E = '$suites_11_5_1_E', suites_11_5_1_F = '$suites_11_5_1_F', suites_11_5_1_G = '$suites_11_5_1_G',
					suites_11_6_1_text = '$suites_11_6_1_text', suites_11_6_1_A = '$suites_11_6_1_A', suites_11_6_1_B = '$suites_11_6_1_B', suites_11_6_1_C = '$suites_11_6_1_C', suites_11_6_1_D = '$suites_11_6_1_D', suites_11_6_1_E = '$suites_11_6_1_E',
					suites_11_7_1_text = '$suites_11_7_1_text', suites_11_7_1_A = '$suites_11_7_1_A', suites_11_7_1_B_a = '$suites_11_7_1_B_a', suites_11_7_1_B_b = '$suites_11_7_1_B_b', suites_11_7_1_B_c = '$suites_11_7_1_B_c', suites_11_7_1_B_d = '$suites_11_7_1_B_d', suites_11_7_1_C = '$suites_11_7_1_C', suites_11_7_1_D = '$suites_11_7_1_D',
					suites_11_8_1_text = '$suites_11_8_1_text', suites_11_8_1_A = '$suites_11_8_1_A', suites_11_8_1_B_a = '$suites_11_8_1_B_a', suites_11_8_1_B_b = '$suites_11_8_1_B_b', suites_11_8_1_B_c = '$suites_11_8_1_B_c', suites_11_8_1_B_d = '$suites_11_8_1_B_d', suites_11_8_1_B_e = '$suites_11_8_1_B_e', suites_11_8_1_B_f = '$suites_11_8_1_B_f', suites_11_8_1_B_g = '$suites_11_8_1_B_g', suites_11_8_1_B_h = '$suites_11_8_1_B_h', suites_11_8_1_B_i = '$suites_11_8_1_B_i', suites_11_8_1_C_a = '$suites_11_8_1_C_a', suites_11_8_1_C_b = '$suites_11_8_1_C_b', suites_11_8_1_D = '$suites_11_8_1_D',
					suites_11_9_1_text = '$suites_11_9_1_text', suites_11_9_1_A = '$suites_11_9_1_A',
					suites_11_10_1_text = '$suites_11_10_1_text', suites_11_10_1_A_a = '$suites_11_10_1_A_a', suites_11_10_1_A_b = '$suites_11_10_1_A_b', suites_11_10_1_A_c = '$suites_11_10_1_A_c', suites_11_10_1_A_d = '$suites_11_10_1_A_d', suites_11_10_1_A_e = '$suites_11_10_1_A_e', suites_11_10_1_B_a = '$suites_11_10_1_B_a', suites_11_10_1_B_b = '$suites_11_10_1_B_b', suites_11_10_1_B = '$suites_11_10_1_B', suites_11_10_1_C = '$suites_11_10_1_C',
					suites_11_11_1_text = '$suites_11_11_1_text', suites_11_11_1__A = '$suites_11_11_1__A', suites_11_11_1__B = '$suites_11_11_1__B', suites_11_11_1__C = '$suites_11_11_1__C', suites_11_11_1__D = '$suites_11_11_1__D', suites_11_11_1__E = '$suites_11_11_1__E', suites_11_11_1__F = '$suites_11_11_1__F', suites_11_11_1__G = '$suites_11_11_1__G', suites_11_12_1_A_a = '$suites_11_12_1_A_a', suites_11_12_1_A_b = '$suites_11_12_1_A_b', suites_11_12_1_A_c = '$suites_11_12_1_A_c', suites_11_12_1_A_d = '$suites_11_12_1_A_d', suites_11_12_1_A_e = '$suites_11_12_1_A_e', suites_11_12_1_A_f = '$suites_11_12_1_A_f', suites_11_12_1_A_g = '$suites_11_12_1_A_g', suites_11_12_1_A_h = '$suites_11_12_1_A_h', suites_11_12_1_A_i = '$suites_11_12_1_A_i', suites_11_12_1_A_j = '$suites_11_12_1_A_j', suites_11_12_1_A_k = '$suites_11_12_1_A_k', suites_11_12_1_A_l = '$suites_11_12_1_A_l', suites_11_12_1_A_m = '$suites_11_12_1_A_m', suites_11_12_1_A_n = '$suites_11_12_1_A_n', suites_11_12_1_A_o = '$suites_11_12_1_A_o', suites_11_12_1_A_p = '$suites_11_12_1_A_p', suites_11_12_1_A_q = '$suites_11_12_1_A_q', suites_11_12_1_A_r = '$suites_11_12_1_A_r', suites_11_12_1_A_s = '$suites_11_12_1_A_s', suites_11_12_1_A_t = '$suites_11_12_1_A_t', suites_11_12_1_A_u = '$suites_11_12_1_A_u', suites_11_12_1_A_v = '$suites_11_12_1_A_v', suites_11_12_1_B = '$suites_11_12_1_B', suites_11_12_1_C = '$suites_11_12_1_C',
					suites_11_13_1_text = '$suites_11_13_1_text', suites_11_13_1_A = '$suites_11_13_1_A', suites_11_13_1_B = '$suites_11_13_1_B',
					suites_11_14_1_text = '$suites_11_14_1_text', suites_11_14_1_A = '$suites_11_14_1_A', suites_11_14_1_B_a = '$suites_11_14_1_B_a', suites_11_14_1_B_b = '$suites_11_14_1_B_b', suites_11_14_1_B_c = '$suites_11_14_1_B_c', suites_11_14_1_C = '$suites_11_14_1_C',
					suites_11_15_1_text = '$suites_11_15_1_text', suites_11_15_1_A = '$suites_11_15_1_A',
					suites_11_16_1_text = '$suites_11_16_1_text', suites_11_16_1_A_a = '$suites_11_16_1_A_a', suites_11_16_1_A_b = '$suites_11_16_1_A_b', suites_11_16_1_A_c = '$suites_11_16_1_A_c', suites_11_16_1_A_d = '$suites_11_16_1_A_d', suites_11_16_1_A_e = '$suites_11_16_1_A_e', suites_11_16_1_A_f = '$suites_11_16_1_A_f', suites_11_16_1_A_g = '$suites_11_16_1_A_g', suites_11_16_1_A_h = '$suites_11_16_1_A_h', suites_11_16_1_A_i = '$suites_11_16_1_A_i', suites_11_16_1_A_j = '$suites_11_16_1_A_j', suites_11_16_1_A_k = '$suites_11_16_1_A_k', suites_11_16_1_A_l = '$suites_11_16_1_A_l', suites_11_16_1_A_m = '$suites_11_16_1_A_m', suites_11_16_1_A_n = '$suites_11_16_1_A_n', suites_11_16_1_A_o = '$suites_11_16_1_A_o', suites_11_16_1_A_p = '$suites_11_16_1_A_p', suites_11_16_1_A_q = '$suites_11_16_1_A_q', suites_11_16_1_A_r = '$suites_11_16_1_A_r', suites_11_16_1_A_s = '$suites_11_16_1_A_s', suites_11_16_1_A_t = '$suites_11_16_1_A_t', suites_11_16_1_A_u = '$suites_11_16_1_A_u', suites_11_16_1_A_v = '$suites_11_16_1_A_v', suites_11_16_1_B = '$suites_11_16_1_B', suites_11_16_1_C = '$suites_11_16_1_C', suites_11_16_1_D = '$suites_11_16_1_D', suites_11_16_1_E = '$suites_11_16_1_E', suites_11_16_1_F = '$suites_11_16_1_F',
					suites_11_17_1_text = '$suites_11_17_1_text', suites_11_17_1_A_a = '$suites_11_17_1_A_a', suites_11_17_1_A_b = '$suites_11_17_1_A_b', suites_11_17_1_A_c = '$suites_11_17_1_A_c', suites_11_17_1_A_d = '$suites_11_17_1_A_d', suites_11_17_1_A_e = '$suites_11_17_1_A_e', suites_11_17_1_A_f = '$suites_11_17_1_A_f', suites_11_17_1_A_g = '$suites_11_17_1_A_g', suites_11_17_1_A_h = '$suites_11_17_1_A_h', suites_11_17_1_A_i = '$suites_11_17_1_A_i', suites_11_17_1_A_j = '$suites_11_17_1_A_j', suites_11_17_1_A_k = '$suites_11_17_1_A_k', suites_11_17_1_B = '$suites_11_17_1_B', suites_11_17_1_C = '$suites_11_17_1_C',
					suites_11_18_1_text = '$suites_11_18_1_text', suites_11_18_1_A = '$suites_11_18_1_A', suites_11_18_1_B = '$suites_11_18_1_B', suites_11_18_1_C = '$suites_11_18_1_C', suites_11_18_1_D = '$suites_11_18_1_D', suites_11_18_1_E = '$suites_11_18_1_E', suites_11_18_1_F = '$suites_11_18_1_F',
					suites_11_19_1_text = '$suites_11_19_1_text', suites_11_19_1_A_a = '$suites_11_19_1_A_a', suites_11_19_1_A_b = '$suites_11_19_1_A_b', suites_11_19_1_A_c = '$suites_11_19_1_A_c', suites_11_19_1_A_d = '$suites_11_19_1_A_d', suites_11_19_1_A_e = '$suites_11_19_1_A_e', suites_11_19_1_B = '$suites_11_19_1_B', suites_11_19_1_C = '$suites_11_19_1_C', suites_11_19_1_D = '$suites_11_19_1_D', suites_11_19_1_E = '$suites_11_19_1_E', suites_11_19_1_F = '$suites_11_19_1_F', suites_11_20_1_A = '$suites_11_20_1_A', suites_11_20_1_B = '$suites_11_20_1_B', suites_11_20_1_C = '$suites_11_20_1_C',
					hygiene_and_sanitation_12_1_1_text = '$hygiene_and_sanitation_12_1_1_text', hygiene_and_sanitation_12_1_1_A = '$hygiene_and_sanitation_12_1_1_A', hygiene_and_sanitation_12_1_1_B = '$hygiene_and_sanitation_12_1_1_B', hygiene_and_sanitation_12_1_1_C = '$hygiene_and_sanitation_12_1_1_C', hygiene_and_sanitation_12_1_1_D_a = '$hygiene_and_sanitation_12_1_1_D_a', hygiene_and_sanitation_12_1_1_D_b = '$hygiene_and_sanitation_12_1_1_D_b', hygiene_and_sanitation_12_1_1_D_c = '$hygiene_and_sanitation_12_1_1_D_c', hygiene_and_sanitation_12_1_1_D_d = '$hygiene_and_sanitation_12_1_1_D_d', hygiene_and_sanitation_12_1_1_D_e = '$hygiene_and_sanitation_12_1_1_D_e', hygiene_and_sanitation_12_1_1_D_f = '$hygiene_and_sanitation_12_1_1_D_f', hygiene_and_sanitation_12_1_1_D_g = '$hygiene_and_sanitation_12_1_1_D_g', hygiene_and_sanitation_12_1_1_D_h = '$hygiene_and_sanitation_12_1_1_D_h', hygiene_and_sanitation_12_1_1_E = '$hygiene_and_sanitation_12_1_1_E', hygiene_and_sanitation_12_1_1_F = '$hygiene_and_sanitation_12_1_1_F', hygiene_and_sanitation_12_1_1_G = '$hygiene_and_sanitation_12_1_1_G', hygiene_and_sanitation_12_1_1_H = '$hygiene_and_sanitation_12_1_1_H', hygiene_and_sanitation_12_1_1_I_a = '$hygiene_and_sanitation_12_1_1_I_a', hygiene_and_sanitation_12_1_1_I_b = '$hygiene_and_sanitation_12_1_1_I_b', hygiene_and_sanitation_12_1_1_I_c = '$hygiene_and_sanitation_12_1_1_I_c', hygiene_and_sanitation_12_1_1_I_d = '$hygiene_and_sanitation_12_1_1_I_d', hygiene_and_sanitation_12_1_1_I_e = '$hygiene_and_sanitation_12_1_1_I_e', hygiene_and_sanitation_12_1_1_J = '$hygiene_and_sanitation_12_1_1_J', hygiene_and_sanitation_12_1_1_K = '$hygiene_and_sanitation_12_1_1_K', hygiene_and_sanitation_12_1_1_L = '$hygiene_and_sanitation_12_1_1_L', hygiene_and_sanitation_12_1_1_M = '$hygiene_and_sanitation_12_1_1_M', hygiene_and_sanitation_12_1_1_N = '$hygiene_and_sanitation_12_1_1_N',
					hygiene_and_sanitation_12_2_1_text = '$hygiene_and_sanitation_12_2_1_text', hygiene_and_sanitation_12_2_1_A = '$hygiene_and_sanitation_12_2_1_A', hygiene_and_sanitation_12_2_1_B = '$hygiene_and_sanitation_12_2_1_B', hygiene_and_sanitation_12_2_1_C = '$hygiene_and_sanitation_12_2_1_C', hygiene_and_sanitation_12_2_1_D = '$hygiene_and_sanitation_12_2_1_D', hygiene_and_sanitation_12_2_1_E_a = '$hygiene_and_sanitation_12_2_1_E_a', hygiene_and_sanitation_12_2_1_E_b = '$hygiene_and_sanitation_12_2_1_E_b', hygiene_and_sanitation_12_2_1_E_c = '$hygiene_and_sanitation_12_2_1_E_c', hygiene_and_sanitation_12_2_1_E_d = '$hygiene_and_sanitation_12_2_1_E_d', hygiene_and_sanitation_12_2_1_E_e = '$hygiene_and_sanitation_12_2_1_E_e', hygiene_and_sanitation_12_2_1_E_f = '$hygiene_and_sanitation_12_2_1_E_f', hygiene_and_sanitation_12_2_1_E_g = '$hygiene_and_sanitation_12_2_1_E_g', hygiene_and_sanitation_12_2_1_E_h = '$hygiene_and_sanitation_12_2_1_E_h', hygiene_and_sanitation_12_2_1_E_i = '$hygiene_and_sanitation_12_2_1_E_i', hygiene_and_sanitation_12_2_1_F = '$hygiene_and_sanitation_12_2_1_F', hygiene_and_sanitation_12_2_1_G = '$hygiene_and_sanitation_12_2_1_G', hygiene_and_sanitation_12_2_1_H_a = '$hygiene_and_sanitation_12_2_1_H_a', hygiene_and_sanitation_12_2_1_H_b = '$hygiene_and_sanitation_12_2_1_H_b', hygiene_and_sanitation_12_2_1_H_c = '$hygiene_and_sanitation_12_2_1_H_c', hygiene_and_sanitation_12_2_1_H_d = '$hygiene_and_sanitation_12_2_1_H_d', hygiene_and_sanitation_12_2_1_I = '$hygiene_and_sanitation_12_2_1_I', hygiene_and_sanitation_12_2_1_J = '$hygiene_and_sanitation_12_2_1_J',
					hygiene_and_sanitation_12_3_1_text = '$hygiene_and_sanitation_12_3_1_text', hygiene_and_sanitation_12_3_1_A = '$hygiene_and_sanitation_12_3_1_A', hygiene_and_sanitation_12_3_1_B = '$hygiene_and_sanitation_12_3_1_B', hygiene_and_sanitation_12_3_1_C = '$hygiene_and_sanitation_12_3_1_C', hygiene_and_sanitation_12_3_1_D = '$hygiene_and_sanitation_12_3_1_D', hygiene_and_sanitation_12_3_1_E = '$hygiene_and_sanitation_12_3_1_E', hygiene_and_sanitation_12_3_1_F = '$hygiene_and_sanitation_12_3_1_F', hygiene_and_sanitation_12_3_1_G = '$hygiene_and_sanitation_12_3_1_G',
					hygiene_and_sanitation_12_4_1_text = '$hygiene_and_sanitation_12_4_1_text', hygiene_and_sanitation_12_4_1_A = '$hygiene_and_sanitation_12_4_1_A', hygiene_and_sanitation_12_4_1_B = '$hygiene_and_sanitation_12_4_1_B', hygiene_and_sanitation_12_4_1_C = '$hygiene_and_sanitation_12_4_1_C', hygiene_and_sanitation_12_4_1_D = '$hygiene_and_sanitation_12_4_1_D',
					hygiene_and_sanitation_12_5_1_text = '$hygiene_and_sanitation_12_5_1_text', hygiene_and_sanitation_12_5_1_A = '$hygiene_and_sanitation_12_5_1_A', hygiene_and_sanitation_12_5_1_B = '$hygiene_and_sanitation_12_5_1_B',
					hygiene_and_sanitation_12_6_1_text = '$hygiene_and_sanitation_12_6_1_text', hygiene_and_sanitation_12_6_1_A = '$hygiene_and_sanitation_12_6_1_A', hygiene_and_sanitation_12_6_1_B = '$hygiene_and_sanitation_12_6_1_B', hygiene_and_sanitation_12_6_1_C = '$hygiene_and_sanitation_12_6_1_C',
					hygiene_and_sanitation_12_7_1_text = '$hygiene_and_sanitation_12_7_1_text', hygiene_and_sanitation_12_7_1_A = '$hygiene_and_sanitation_12_7_1_A', hygiene_and_sanitation_12_7_1_B = '$hygiene_and_sanitation_12_7_1_B',
					safety_and_security_13_1_1_text = '$safety_and_security_13_1_1_text', safety_and_security_13_1_1_A = '$safety_and_security_13_1_1_A', safety_and_security_13_1_1_B = '$safety_and_security_13_1_1_B', safety_and_security_13_1_1_C = '$safety_and_security_13_1_1_C', safety_and_security_13_1_1_D = '$safety_and_security_13_1_1_D', safety_and_security_13_1_1_E = '$safety_and_security_13_1_1_E', safety_and_security_13_1_1_F_a = '$safety_and_security_13_1_1_F_a', safety_and_security_13_1_1_F_b = '$safety_and_security_13_1_1_F_b', safety_and_security_13_1_1_F_c = '$safety_and_security_13_1_1_F_c', safety_and_security_13_1_1_F_d = '$safety_and_security_13_1_1_F_d', safety_and_security_13_1_1_F_e = '$safety_and_security_13_1_1_F_e', safety_and_security_13_1_1_F_f = '$safety_and_security_13_1_1_F_f', safety_and_security_13_1_1_F_g = '$safety_and_security_13_1_1_F_g', safety_and_security_13_1_1_G = '$safety_and_security_13_1_1_G', safety_and_security_13_1_1_H = '$safety_and_security_13_1_1_H', safety_and_security_13_1_1_I = '$safety_and_security_13_1_1_I', safety_and_security_13_1_1_J = '$safety_and_security_13_1_1_J',
					safety_and_security_13_2_1_text = '$safety_and_security_13_2_1_text', safety_and_security_13_2_1_A = '$safety_and_security_13_2_1_A', safety_and_security_13_2_1_B = '$safety_and_security_13_2_1_B',
					safety_and_security_13_3_1_text = '$safety_and_security_13_3_1_text', safety_and_security_13_3_1_A = '$safety_and_security_13_3_1_A', safety_and_security_13_3_1_B = '$safety_and_security_13_3_1_B', safety_and_security_13_3_1_C = '$safety_and_security_13_3_1_C', safety_and_security_13_3_1_D = '$safety_and_security_13_3_1_D', safety_and_security_13_3_1_E = '$safety_and_security_13_3_1_E',
					safety_and_security_13_4_1_text = '$safety_and_security_13_4_1_text', safety_and_security_13_4_1_A = '$safety_and_security_13_4_1_A', safety_and_security_13_4_1_B = '$safety_and_security_13_4_1_B', safety_and_security_13_4_1_C = '$safety_and_security_13_4_1_C',
					safety_and_security_13_5_1_text = '$safety_and_security_13_5_1_text', safety_and_security_13_5_1_A = '$safety_and_security_13_5_1_A', safety_and_security_13_5_1_B = '$safety_and_security_13_5_1_B', safety_and_security_13_5_1_C = '$safety_and_security_13_5_1_C', safety_and_security_13_5_1_D = '$safety_and_security_13_5_1_D', safety_and_security_13_5_1_E = '$safety_and_security_13_5_1_E', safety_and_security_13_5_1_F = '$safety_and_security_13_5_1_F',
					sundry_services_14_1_1_text = '$sundry_services_14_1_1_text', sundry_services_14_1_1_A = '$sundry_services_14_1_1_A', sundry_services_14_1_1_B = '$sundry_services_14_1_1_B', sundry_services_14_1_1_C = '$sundry_services_14_1_1_C',
					sundry_services_14_2_1_text = '$sundry_services_14_2_1_text', sundry_services_14_2_1_A = '$sundry_services_14_2_1_A',
					sundry_services_14_3_1_text = '$sundry_services_14_3_1_text', sundry_services_14_3_1_A = '$sundry_services_14_3_1_A', sundry_services_14_3_1_B = '$sundry_services_14_3_1_B',
					sundry_services_14_4_1_text = '$sundry_services_14_4_1_text', sundry_services_14_4_1_A = '$sundry_services_14_4_1_A',
					human_resources_15_1_1_text = '$human_resources_15_1_1_text', human_resources_15_1_1_A = '$human_resources_15_1_1_A', human_resources_15_1_1_B_a = '$human_resources_15_1_1_B_a', human_resources_15_1_1_B_b = '$human_resources_15_1_1_B_b', human_resources_15_1_1_B_c = '$human_resources_15_1_1_B_c', human_resources_15_1_1_B_d = '$human_resources_15_1_1_B_d', human_resources_15_1_1_B_e = '$human_resources_15_1_1_B_e', human_resources_15_1_1_B_f = '$human_resources_15_1_1_B_f',
					human_resources_15_2_1_text = '$human_resources_15_2_1_text', human_resources_15_2_1_A = '$human_resources_15_2_1_A', human_resources_15_2_1_B = '$human_resources_15_2_1_B',
					sundry_services_15_3_1_text = '$sundry_services_15_3_1_text', human_resources_15_3_1_A = '$human_resources_15_3_1_A', human_resources_15_3_1_B = '$human_resources_15_3_1_B',
					sundry_services_15_4_1_text = '$sundry_services_15_4_1_text', human_resources_15_4_1_A = '$human_resources_15_4_1_A', human_resources_15_4_1_B = '$human_resources_15_4_1_B', human_resources_15_4_1_C = '$human_resources_15_4_1_C',
					human_resources_15_5_1_text = '$human_resources_15_5_1_text', human_resources_15_5_1_A_a = '$human_resources_15_5_1_A_a', human_resources_15_5_1_A_b = '$human_resources_15_5_1_A_b', human_resources_15_5_1_A_c = '$human_resources_15_5_1_A_c', human_resources_15_5_1_B_a = '$human_resources_15_5_1_B_a', human_resources_15_5_1_B_b = '$human_resources_15_5_1_B_b', human_resources_15_5_1_B_c = '$human_resources_15_5_1_B_c', human_resources_15_5_1_C_a = '$human_resources_15_5_1_C_a', human_resources_15_5_1_C_b = '$human_resources_15_5_1_C_b', human_resources_15_5_1_C_c = '$human_resources_15_5_1_C_c',
					human_resources_15_6_1_text = '$human_resources_15_6_1_text', human_resources_15_6_1_A = '$human_resources_15_6_1_A',
					human_resources_15_7_1_text = '$human_resources_15_7_1_text', human_resources_15_7_1_A = '$human_resources_15_7_1_A', human_resources_15_7_1_B = '$human_resources_15_7_1_B', human_resources_15_7_1_C = '$human_resources_15_7_1_C', human_resources_15_7_1_D = '$human_resources_15_7_1_D',
					human_resources_15_8_1_text = '$human_resources_15_8_1_text', human_resources_15_8_1_A = '$human_resources_15_8_1_A', human_resources_15_8_1_B = '$human_resources_15_8_1_B', human_resources_15_8_1_C = '$human_resources_15_8_1_C',
					human_resources_15_9_1_text = '$human_resources_15_9_1_text', human_resources_15_9_1_A = '$human_resources_15_9_1_A', human_resources_15_9_1_B = '$human_resources_15_9_1_B', human_resources_15_9_1_C = '$human_resources_15_9_1_C', human_resources_15_9_1_D = '$human_resources_15_9_1_D', human_resources_15_9_1_E = '$human_resources_15_9_1_E', human_resources_15_9_1_F = '$human_resources_15_9_1_F',
					human_resources_15_10_1_text = '$human_resources_15_10_1_text', human_resources_15_10_1_A = '$human_resources_15_10_1_A', human_resources_15_10_1_B = '$human_resources_15_10_1_B', human_resources_15_10_1_C = '$human_resources_15_10_1_C', human_resources_15_10_1_D = '$human_resources_15_10_1_D', human_resources_15_10_1_E = '$human_resources_15_10_1_E', human_resources_15_10_1_F = '$human_resources_15_10_1_F', human_resources_15_10_1_G = '$human_resources_15_10_1_G',
					human_resources_15_11_1_text = '$human_resources_15_11_1_text', human_resources_15_11_1_A_a = '$human_resources_15_11_1_A_a', human_resources_15_11_1_A_b = '$human_resources_15_11_1_A_b', human_resources_15_11_1_A_c = '$human_resources_15_11_1_A_c', human_resources_15_11_1_B_a = '$human_resources_15_11_1_B_a', human_resources_15_11_1_B_b = '$human_resources_15_11_1_B_b', human_resources_15_11_1_B_c = '$human_resources_15_11_1_B_c',
					general_16_1_1_text = '$general_16_1_1_text', general_16_1_1_A = '$general_16_1_1_A',
					general_16_2_1_text = '$general_16_2_1_text', general_16_2_1_A = '$general_16_2_1_A', general_16_2_1_B = '$general_16_2_1_B',
					general_16_3_1_text = '$general_16_3_1_text', general_16_3_1_A = '$general_16_3_1_A', general_16_3_1_B_a = '$general_16_3_1_B_a', general_16_3_1_B_b = '$general_16_3_1_B_b', general_16_3_1_B_c = '$general_16_3_1_B_c', general_16_3_1_B_d = '$general_16_3_1_B_d', general_16_3_1_B_e = '$general_16_3_1_B_e', general_16_3_1_C_a = '$general_16_3_1_C_a', general_16_3_1_C_b = '$general_16_3_1_C_b', general_16_3_1_D = '$general_16_3_1_D',
					general_16_4_1_text = '$general_16_4_1_text', general_16_4_1_A = '$general_16_4_1_A', general_16_4_1_B = '$general_16_4_1_B',
					general_16_5_1_text = '$general_16_5_1_text', general_16_5_1_A = '$general_16_5_1_A', general_16_5_1_B = '$general_16_5_1_B', general_16_5_1_C = '$general_16_5_1_C', general_16_5_1_D = '$general_16_5_1_D', general_16_5_1_E = '$general_16_5_1_E',
					general_16_6_1_text = '$general_16_6_1_text', general_16_6_1_A = '$general_16_6_1_A',
					general_16_7_1_text = '$general_16_7_1_text', general_16_7_1_A = '$general_16_7_1_A', general_16_7_1_B = '$general_16_7_1_B',
					general_16_8_1_text = '$general_16_8_1_text', general_16_8_1_A = '$general_16_8_1_A', general_16_8_1_B = '$general_16_8_1_B', general_16_8_1_C = '$general_16_8_1_C',
					general_16_9_1_text = '$general_16_9_1_text', general_16_9_1_A = '$general_16_9_1_A', general_16_9_1_B = '$general_16_9_1_B', general_16_9_1_C = '$general_16_9_1_C', general_16_9_1_D_a = '$general_16_9_1_D_a', general_16_9_1_D_b = '$general_16_9_1_D_b', general_16_9_1_D_c = '$general_16_9_1_D_c', general_16_9_1_D_d = '$general_16_9_1_D_d', general_16_9_1_D_e = '$general_16_9_1_D_e', general_16_9_1_E = '$general_16_9_1_E', general_16_9_1_F = '$general_16_9_1_F', general_16_9_1_G = '$general_16_9_1_G', general_16_9_1_H = '$general_16_9_1_H',
					general_16_10_1_text = '$general_16_10_1_text', general_16_10_1_A = '$general_16_10_1_A',
					general_16_11_1_text = '$general_16_11_1_text', general_16_11_1_A = '$general_16_11_1_A', general_16_11_1_B_a = '$general_16_11_1_B_a', general_16_11_1_B_b = '$general_16_11_1_B_b', general_16_11_1_B_c = '$general_16_11_1_B_c', general_16_11_1_B_d = '$general_16_11_1_B_d', general_16_11_1_B_e = '$general_16_11_1_B_e', general_16_11_1_C = '$general_16_11_1_C', general_16_11_1_D = '$general_16_11_1_D', general_16_11_1_E = '$general_16_11_1_E'																	
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