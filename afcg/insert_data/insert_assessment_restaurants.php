<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';

$output = array();


		$facility_id = $form_data->facility_id;
		$assessor_category = $form_data->assessor_category;
		$assessor_score_column = 'assessment_score_'.$assessor_category;
		$assessment_score = $form_data->assessment_score_motel;

		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_1_text = '$location_1_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_1_A = '$location_1_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_2_text = '$location_1_1_2_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_2_A = '$location_1_1_2_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_3_text = '$location_1_1_3_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_3_A = '$location_1_1_3_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_3_B = '$location_1_1_3_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_3_C = '$location_1_1_3_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_4_text = '$location_1_1_4_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_4_A = '$location_1_1_4_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_5_text = '$location_1_1_5_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_5_A = '$location_1_1_5_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_6_text = '$location_1_1_6_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = location_1_1_6_A = '$location_1_1_6_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_1_1_text = '$building_2_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_1_1_A = '$building_2_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_1_2_text = '$building_2_1_2_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_1_2_A = '$building_2_1_2_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_1_text = '$building_2_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_1_A = '$building_2_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_1_B = '$building_2_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_text = '$building_2_2_2_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_A = '$building_2_2_2_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_B = '$building_2_2_2_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_C = '$building_2_2_2_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_D = '$building_2_2_2_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_E = '$building_2_2_2_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_2_2_F = '$building_2_2_2_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_3_1_text = '$building_2_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = building_2_3_1_A = '$building_2_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_text = '$reception_3_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_A = '$reception_3_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_B = '$reception_3_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_C = '$reception_3_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_D = '$reception_3_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = reception_3_1_1_E = '$reception_3_1_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_text = '$dining_area_4_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_A = '$dining_area_4_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_B = '$dining_area_4_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_C = '$dining_area_4_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_D = '$dining_area_4_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_E = '$dining_area_4_1_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_F = '$dining_area_4_1_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_G = '$dining_area_4_1_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_H = '$dining_area_4_1_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_I = '$dining_area_4_1_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_J = '$dining_area_4_1_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_K = '$dining_area_4_1_1_K', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_1_1_L = '$dining_area_4_1_1_L', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_2_1_text = '$dining_area_4_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_2_1_A = '$dining_area_4_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_2_1_B = '$dining_area_4_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_2_1_C = '$dining_area_4_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_2_1_D = '$dining_area_4_2_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_3_1_text = '$dining_area_4_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_3_1_A = '$dining_area_4_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_3_1_B = '$dining_area_4_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_3_1_C = '$dining_area_4_3_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_text = '$dining_area_4_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_A = '$dining_area_4_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_B = '$dining_area_4_4_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_C = '$dining_area_4_4_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_D = '$dining_area_4_4_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_E = '$dining_area_4_4_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = dining_area_4_4_1_F = '$dining_area_4_4_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_text = '$service_5_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_A = '$service_5_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_B = '$service_5_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_C = '$service_5_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_D = '$service_5_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_E = '$service_5_1_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_F = '$service_5_1_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_G = '$service_5_1_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_H = '$service_5_1_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_I = '$service_5_1_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_1_1_J = '$service_5_1_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_1_1_K_a = '$service_5_1_1_K_a', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_1_1_K_b = '$service_5_1_1_K_b', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_1_1_K_c = '$service_5_1_1_K_c', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_text = '$service_5_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_A = '$service_5_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_B = '$service_5_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_C = '$service_5_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_D = '$service_5_2_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_2_1_E_a = '$service_5_2_1_E_a', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_2_1_E_b = '$service_5_2_1_E_b', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_2_1_E_c = '$service_5_2_1_E_c', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = service_5_2_1_E_d = '$service_5_2_1_E_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_F = '$service_5_2_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = service_5_2_1_G_a = '$service_5_2_1_G_a', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = service_5_2_1_G_b = '$service_5_2_1_G_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = service_5_2_1_G_c = '$service_5_2_1_G_c', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_H = '$service_5_2_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_I = '$service_5_2_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_2_1_J = '$service_5_2_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_3_1_text = '$service_5_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_3_1_A = '$service_5_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = service_5_3_1_B = '$service_5_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = entertainment_6_1_1_text = '$entertainment_6_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = entertainment_6_1_1_A = '$entertainment_6_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = entertainment_6_1_1_B = '$entertainment_6_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = entertainment_6_1_1_C = '$entertainment_6_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_1_1_text = '$bar_7_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_1_1_A = '$bar_7_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = bar_7_1_1_B_a = '$bar_7_1_1_B_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = bar_7_1_1_B_b = '$bar_7_1_1_B_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = bar_7_1_1_B_c = '$bar_7_1_1_B_c', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_1_1_C = '$bar_7_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_1_1_D = '$bar_7_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_1_1_E = '$bar_7_1_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_1_text = '$bar_7_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_1_A = '$bar_7_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_1_B = '$bar_7_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_1_C = '$bar_7_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_1_D = '$bar_7_2_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_text = '$bar_7_2_2_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_A = '$bar_7_2_2_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_B = '$bar_7_2_2_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_C = '$bar_7_2_2_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_D = '$bar_7_2_2_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_E = '$bar_7_2_2_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_2_2_F = '$bar_7_2_2_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_text = '$bar_7_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_A = '$bar_7_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_B = '$bar_7_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_C = '$bar_7_3_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_D = '$bar_7_3_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_E = '$bar_7_3_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_3_1_F = '$bar_7_3_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_text = '$bar_7_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_A = '$bar_7_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_B = '$bar_7_4_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_C = '$bar_7_4_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_D = '$bar_7_4_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_a = '$bar_7_4_1_E_a', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_b = '$bar_7_4_1_E_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = bar_7_4_1_E_c = '$bar_7_4_1_E_c', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_d = '$bar_7_4_1_E_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = bar_7_4_1_E_e = '$bar_7_4_1_E_e', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_f = '$bar_7_4_1_E_f', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_g = '$bar_7_4_1_E_g', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = bar_7_4_1_E_h = '$bar_7_4_1_E_h', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_F = '$bar_7_4_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_G = '$bar_7_4_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_H = '$bar_7_4_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_4_1_I = '$bar_7_4_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_5_1_text = '$bar_7_5_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_5_1_A = '$bar_7_5_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_5_1_B = '$bar_7_5_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_5_1_C = '$bar_7_5_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_6_1_text = '$bar_7_6_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_6_1_A = '$bar_7_6_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_6_1_B = '$bar_7_6_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_6_1_C = '$bar_7_6_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_7_1_text = '$bar_7_7_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_7_1_A = '$bar_7_7_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_7_1_B = '$bar_7_7_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = bar_7_7_1_C = '$bar_7_7_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_1_1_text = '$kitchen_8_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_1_1_A = '$kitchen_8_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_2_1_text = '$kitchen_8_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_2_1_A = '$kitchen_8_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_2_1_B = '$kitchen_8_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_2_1_C = '$kitchen_8_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_3_1_text = '$kitchen_8_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_3_1_A = '$kitchen_8_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_3_1_B = '$kitchen_8_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_3_1_C = '$kitchen_8_3_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_1_text = '$kitchen_8_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_1_A = '$kitchen_8_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_2_text = '$kitchen_8_4_2_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_2_A = '$kitchen_8_4_2_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_2_B = '$kitchen_8_4_2_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_4_2_C = '$kitchen_8_4_2_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_text = '$kitchen_8_5_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_A = '$kitchen_8_5_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_B = '$kitchen_8_5_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_C = '$kitchen_8_5_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_D = '$kitchen_8_5_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_E = '$kitchen_8_5_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_F = '$kitchen_8_5_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_G = '$kitchen_8_5_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_H = '$kitchen_8_5_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_5_1_I = '$kitchen_8_5_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_text = '$kitchen_8_6_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_A = '$kitchen_8_6_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_B = '$kitchen_8_6_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_C = '$kitchen_8_6_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_D = '$kitchen_8_6_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_E = '$kitchen_8_6_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_F = '$kitchen_8_6_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_6_1_G = '$kitchen_8_6_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_text = '$kitchen_8_7_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_A = '$kitchen_8_7_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_B = '$kitchen_8_7_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_C = '$kitchen_8_7_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_D = '$kitchen_8_7_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_7_1_E = '$kitchen_8_7_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_8_1_text = '$kitchen_8_8_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_8_1_A = '$kitchen_8_8_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_8_1_B = '$kitchen_8_8_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_text = '$kitchen_8_9_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_A = '$kitchen_8_9_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_B = '$kitchen_8_9_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_9_1_C_a = '$kitchen_8_9_1_C_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_9_1_C_b = '$kitchen_8_9_1_C_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_D = '$kitchen_8_9_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_E = '$kitchen_8_9_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_F = '$kitchen_8_9_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_9_1_G = '$kitchen_8_9_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_10_1_text = '$kitchen_8_10_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_10_1_A = '$kitchen_8_10_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_10_1_B = '$kitchen_8_10_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_10_1_C = '$kitchen_8_10_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_text = '$kitchen_8_11_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_A = '$kitchen_8_11_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_B = '$kitchen_8_11_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_C = '$kitchen_8_11_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_D = '$kitchen_8_11_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_11_1_E = '$kitchen_8_11_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_text = '$kitchen_8_12_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_12_1_A_a = '$kitchen_8_12_1_A_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_12_1_A_b = '$kitchen_8_12_1_A_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = kitchen_8_12_1_A_c = '$kitchen_8_12_1_A_c', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = kitchen_8_12_1_A_d = '$kitchen_8_12_1_A_d', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_B = '$kitchen_8_12_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_C = '$kitchen_8_12_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_D = '$kitchen_8_12_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_E = '$kitchen_8_12_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_F = '$kitchen_8_12_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_12_1_G = '$kitchen_8_12_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_13_1_text = '$kitchen_8_13_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = kitchen_8_13_1_A_a = '$kitchen_8_13_1_A_a', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_13_1_A_b = '$kitchen_8_13_1_A_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = kitchen_8_13_1_A_c = '$kitchen_8_13_1_A_c', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_13_1_B = '$kitchen_8_13_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = kitchen_8_13_1_C_a = '$kitchen_8_13_1_C_a', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_13_1_C_b = '$kitchen_8_13_1_C_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_13_1_C_c = '$kitchen_8_13_1_C_c', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_13_1_C_d = '$kitchen_8_13_1_C_d', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = kitchen_8_13_1_C_e = '$kitchen_8_13_1_C_e', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->5_cm) == ''){ if($form_data->5 == ''){ $5 = ''; }else{ $5 = kitchen_8_13_1_D_a = '$kitchen_8_13_1_D_a', ; } }else{ $5= $form_data->5_cm; }
		if(($form_data->5_cm) == ''){ if($form_data->5 == ''){ $5 = ''; }else{ $5 = kitchen_8_13_1_D_b = '$kitchen_8_13_1_D_b', ; } }else{ $5= $form_data->5_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_13_1_E = '$kitchen_8_13_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_13_1_F = '$kitchen_8_13_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_text = '$kitchen_8_14_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_A = '$kitchen_8_14_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_B = '$kitchen_8_14_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_C = '$kitchen_8_14_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_D = '$kitchen_8_14_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_E = '$kitchen_8_14_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_F = '$kitchen_8_14_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_G = '$kitchen_8_14_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_H = '$kitchen_8_14_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_I = '$kitchen_8_14_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_J = '$kitchen_8_14_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = kitchen_8_14_1_K = '$kitchen_8_14_1_K', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_text = '$hygiene_and_sanitation_9_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_A = '$hygiene_and_sanitation_9_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_B = '$hygiene_and_sanitation_9_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_C = '$hygiene_and_sanitation_9_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_a = '$hygiene_and_sanitation_9_1_1_D_a', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_b = '$hygiene_and_sanitation_9_1_1_D_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_c = '$hygiene_and_sanitation_9_1_1_D_c', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_d = '$hygiene_and_sanitation_9_1_1_D_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_e = '$hygiene_and_sanitation_9_1_1_D_e', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_D_f = '$hygiene_and_sanitation_9_1_1_D_f', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_E = '$hygiene_and_sanitation_9_1_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_F = '$hygiene_and_sanitation_9_1_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_G = '$hygiene_and_sanitation_9_1_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_H = '$hygiene_and_sanitation_9_1_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_I_a = '$hygiene_and_sanitation_9_1_1_I_a', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_I_b = '$hygiene_and_sanitation_9_1_1_I_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_I_c = '$hygiene_and_sanitation_9_1_1_I_c', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_I_d = '$hygiene_and_sanitation_9_1_1_I_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_1_1_I_e = '$hygiene_and_sanitation_9_1_1_I_e', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_J = '$hygiene_and_sanitation_9_1_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_1_1_K = '$hygiene_and_sanitation_9_1_1_K', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_text = '$hygiene_and_sanitation_9_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_A = '$hygiene_and_sanitation_9_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_B = '$hygiene_and_sanitation_9_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_C = '$hygiene_and_sanitation_9_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_D = '$hygiene_and_sanitation_9_2_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->2_cm) == ''){ if($form_data->2 == ''){ $2 = ''; }else{ $2 = hygiene_and_sanitation_9_2_1_E_a = '$hygiene_and_sanitation_9_2_1_E_a', ; } }else{ $2= $form_data->2_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_b = '$hygiene_and_sanitation_9_2_1_E_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_c = '$hygiene_and_sanitation_9_2_1_E_c', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_d = '$hygiene_and_sanitation_9_2_1_E_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_e = '$hygiene_and_sanitation_9_2_1_E_e', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_f = '$hygiene_and_sanitation_9_2_1_E_f', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_g = '$hygiene_and_sanitation_9_2_1_E_g', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_h = '$hygiene_and_sanitation_9_2_1_E_h', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_E_i = '$hygiene_and_sanitation_9_2_1_E_i', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_F = '$hygiene_and_sanitation_9_2_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_G = '$hygiene_and_sanitation_9_2_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_H_a = '$hygiene_and_sanitation_9_2_1_H_a', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_H_b = '$hygiene_and_sanitation_9_2_1_H_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_H_c = '$hygiene_and_sanitation_9_2_1_H_c', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = hygiene_and_sanitation_9_2_1_H_d = '$hygiene_and_sanitation_9_2_1_H_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_I = '$hygiene_and_sanitation_9_2_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_2_1_J = '$hygiene_and_sanitation_9_2_1_J', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_text = '$hygiene_and_sanitation_9_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_A = '$hygiene_and_sanitation_9_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_B = '$hygiene_and_sanitation_9_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_C = '$hygiene_and_sanitation_9_3_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_D = '$hygiene_and_sanitation_9_3_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_E = '$hygiene_and_sanitation_9_3_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_3_1_F = '$hygiene_and_sanitation_9_3_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_4_1_text = '$hygiene_and_sanitation_9_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_4_1_A = '$hygiene_and_sanitation_9_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_12_4_1_B = '$hygiene_and_sanitation_12_4_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_4_1_C = '$hygiene_and_sanitation_9_4_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_5_1_text = '$hygiene_and_sanitation_9_5_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_5_1_A = '$hygiene_and_sanitation_9_5_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_5_1_B = '$hygiene_and_sanitation_9_5_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_6_1_text = '$hygiene_and_sanitation_9_6_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_6_1_A = '$hygiene_and_sanitation_9_6_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_6_1_B = '$hygiene_and_sanitation_9_6_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = hygiene_and_sanitation_9_6_1_C = '$hygiene_and_sanitation_9_6_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_text = '$safety_and_security_10_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_A = '$safety_and_security_10_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_B = '$safety_and_security_10_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_C = '$safety_and_security_10_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_D = '$safety_and_security_10_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_a = '$safety_and_security_10_1_1_E_a', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_b = '$safety_and_security_10_1_1_E_b', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_c = '$safety_and_security_10_1_1_E_c', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_d = '$safety_and_security_10_1_1_E_d', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_e = '$safety_and_security_10_1_1_E_e', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_f = '$safety_and_security_10_1_1_E_f', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->1_cm) == ''){ if($form_data->1 == ''){ $1 = ''; }else{ $1 = safety_and_security_10_1_1_E_g = '$safety_and_security_10_1_1_E_g', ; } }else{ $1= $form_data->1_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_F = '$safety_and_security_10_1_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_G = '$safety_and_security_10_1_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_H = '$safety_and_security_10_1_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_1_1_I = '$safety_and_security_10_1_1_I', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_2_1_text = '$safety_and_security_10_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_2_1_A = '$safety_and_security_10_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_2_1_B = '$safety_and_security_10_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_text = '$safety_and_security_10_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_A = '$safety_and_security_10_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_B = '$safety_and_security_10_3_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_C = '$safety_and_security_10_3_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_D = '$safety_and_security_10_3_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_E = '$safety_and_security_10_3_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_F = '$safety_and_security_10_3_1_F', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_G = '$safety_and_security_10_3_1_G', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_3_1_H = '$safety_and_security_10_3_1_H', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_4_1_text = '$safety_and_security_10_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_4_1_A = '$safety_and_security_10_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_4_1_B = '$safety_and_security_10_4_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_4_1_C = '$safety_and_security_10_4_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_text = '$safety_and_security_10_5_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_A = '$safety_and_security_10_5_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_B = '$safety_and_security_10_5_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_C = '$safety_and_security_10_5_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_D = '$safety_and_security_10_5_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_5_1_E = '$safety_and_security_10_5_1_E', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_6_1_text = '$safety_and_security_10_6_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = safety_and_security_10_6_1_A = '$safety_and_security_10_6_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_1_1_text = '$sundry_services_11_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_1_1_A = '$sundry_services_11_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_1_1_B = '$sundry_services_11_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_2_1_text = '$sundry_services_11_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_2_1_A = '$sundry_services_11_2_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_2_1_B = '$sundry_services_11_2_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_2_1_C = '$sundry_services_11_2_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_3_1_text = '$sundry_services_11_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_3_1_A = '$sundry_services_11_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_4_1_text = '$sundry_services_11_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_4_1_A = '$sundry_services_11_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_5_1_text = '$sundry_services_11_5_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_5_1_A = '$sundry_services_11_5_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_5_1_B = '$sundry_services_11_5_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_6_1_text = '$sundry_services_11_6_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = sundry_services_11_6_1_A = '$sundry_services_11_6_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_1_1_text = '$human_resources_12_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_1_1_A = '$human_resources_12_1_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_1_1_B = '$human_resources_12_1_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_1_1_C = '$human_resources_12_1_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_1_1_D = '$human_resources_12_1_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_1_1_E_a = '$human_resources_12_1_1_E_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_1_1_E_b = '$human_resources_12_1_1_E_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_1_1_E_c = '$human_resources_12_1_1_E_c', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_1_1_E_d = '$human_resources_12_1_1_E_d', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_1_1_E_e = '$human_resources_12_1_1_E_e', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_2_1_text = '$human_resources_12_2_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_2_1_A_a = '$human_resources_12_2_1_A_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_2_1_A_b = '$human_resources_12_2_1_A_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = human_resources_12_2_1_A_c = '$human_resources_12_2_1_A_c', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_2_1_B_a = '$human_resources_12_2_1_B_a', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->3_cm) == ''){ if($form_data->3 == ''){ $3 = ''; }else{ $3 = human_resources_12_2_1_B_b = '$human_resources_12_2_1_B_b', ; } }else{ $3= $form_data->3_cm; }
		if(($form_data->4_cm) == ''){ if($form_data->4 == ''){ $4 = ''; }else{ $4 = human_resources_12_2_1_B_c = '$human_resources_12_2_1_B_c', ; } }else{ $4= $form_data->4_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_3_1_text = '$human_resources_12_3_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_3_1_A = '$human_resources_12_3_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_4_1_text = '$human_resources_12_4_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_4_1_A = '$human_resources_12_4_1_A', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_4_1_B = '$human_resources_12_4_1_B', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_4_1_C = '$human_resources_12_4_1_C', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = human_resources_12_4_1_D = '$human_resources_12_4_1_D', ; } }else{ $= $form_data->_cm; }
		if(($form_data->_cm) == ''){ if($form_data-> == ''){ $ = ''; }else{ $ = general_13_1_1_text = '$general_13_1_1_text', ; } }else{ $= $form_data->_cm; }
		if(($form_data->0_cm) == ''){ if($form_data->0 == ''){ $0 = ''; }else{ $0 = general_13_1_1_A_a = '$general_13_1_1_A_a', ; } }else{ $0= $form_data->0_cm; }
		if(($form_data->5_cm) == ''){ if($form_data->5 == ''){ $5 = ''; }else{ $5 = general_13_1_1_A_b = '$general_13_1_1_A_b', ; } }else{ $5= $form_data->5_cm; }
		if(($form_data->15_cm) == ''){ if($form_data->15 == ''){ $15 = ''; }else{ $15 = general_13_1_1_A_c = '$general_13_1_1_A_c', ; } }else{ $15= $form_data->15_cm; }

		///Insert
			 if($form_data->action == 'insert_record')
			 {
				$query = "INSERT INTO afcg_assessment_motel (
				assessment_id, facility_id, assessor_category, assessment_score, 
				location_1_1_1_text, 
				location_1_1_1_A, 
				location_1_1_2_text, 
				location_1_1_2_A, 
				location_1_1_3_text, 
				location_1_1_3_A, 
				location_1_1_3_B, 
				location_1_1_3_C, 
				location_1_1_4_text, 
				location_1_1_4_A, 
				location_1_1_5_text, 
				location_1_1_5_A, 
				location_1_1_6_text, 
				location_1_1_6_A, 
				building_2_1_1_text, 
				building_2_1_1_A, 
				building_2_1_2_text, 
				building_2_1_2_A, 
				building_2_2_1_text, 
				building_2_2_1_A, 
				building_2_2_1_B, 
				building_2_2_2_text, 
				building_2_2_2_A, 
				building_2_2_2_B, 
				building_2_2_2_C, 
				building_2_2_2_D, 
				building_2_2_2_E, 
				building_2_2_2_F, 
				building_2_3_1_text, 
				building_2_3_1_A, 
				reception_3_1_1_text, 
				reception_3_1_1_A, 
				reception_3_1_1_B, 
				reception_3_1_1_C, 
				reception_3_1_1_D, 
				reception_3_1_1_E, 
				dining_area_4_1_1_text, 
				dining_area_4_1_1_A, 
				dining_area_4_1_1_B, 
				dining_area_4_1_1_C, 
				dining_area_4_1_1_D, 
				dining_area_4_1_1_E, 
				dining_area_4_1_1_F, 
				dining_area_4_1_1_G, 
				dining_area_4_1_1_H, 
				dining_area_4_1_1_I, 
				dining_area_4_1_1_J, 
				dining_area_4_1_1_K, 
				dining_area_4_1_1_L, 
				dining_area_4_2_1_text, 
				dining_area_4_2_1_A, 
				dining_area_4_2_1_B, 
				dining_area_4_2_1_C, 
				dining_area_4_2_1_D, 
				dining_area_4_3_1_text, 
				dining_area_4_3_1_A, 
				dining_area_4_3_1_B, 
				dining_area_4_3_1_C, 
				dining_area_4_4_1_text, 
				dining_area_4_4_1_A, 
				dining_area_4_4_1_B, 
				dining_area_4_4_1_C, 
				dining_area_4_4_1_D, 
				dining_area_4_4_1_E, 
				dining_area_4_4_1_F, 
				service_5_1_1_text, 
				service_5_1_1_A, 
				service_5_1_1_B, 
				service_5_1_1_C, 
				service_5_1_1_D, 
				service_5_1_1_E, 
				service_5_1_1_F, 
				service_5_1_1_G, 
				service_5_1_1_H, 
				service_5_1_1_I, 
				service_5_1_1_J, 
				service_5_1_1_K_a, 
				service_5_1_1_K_b, 
				service_5_1_1_K_c, 
				service_5_2_1_text, 
				service_5_2_1_A, 
				service_5_2_1_B, 
				service_5_2_1_C, 
				service_5_2_1_D, 
				service_5_2_1_E_a, 
				service_5_2_1_E_b, 
				service_5_2_1_E_c, 
				service_5_2_1_E_d, 
				service_5_2_1_F, 
				service_5_2_1_G_a, 
				service_5_2_1_G_b, 
				service_5_2_1_G_c, 
				service_5_2_1_H, 
				service_5_2_1_I, 
				service_5_2_1_J, 
				service_5_3_1_text, 
				service_5_3_1_A, 
				service_5_3_1_B, 
				entertainment_6_1_1_text, 
				entertainment_6_1_1_A, 
				entertainment_6_1_1_B, 
				entertainment_6_1_1_C, 
				bar_7_1_1_text, 
				bar_7_1_1_A, 
				bar_7_1_1_B_a, 
				bar_7_1_1_B_b, 
				bar_7_1_1_B_c, 
				bar_7_1_1_C, 
				bar_7_1_1_D, 
				bar_7_1_1_E, 
				bar_7_2_1_text, 
				bar_7_2_1_A, 
				bar_7_2_1_B, 
				bar_7_2_1_C, 
				bar_7_2_1_D, 
				bar_7_2_2_text, 
				bar_7_2_2_A, 
				bar_7_2_2_B, 
				bar_7_2_2_C, 
				bar_7_2_2_D, 
				bar_7_2_2_E, 
				bar_7_2_2_F, 
				bar_7_3_1_text, 
				bar_7_3_1_A, 
				bar_7_3_1_B, 
				bar_7_3_1_C, 
				bar_7_3_1_D, 
				bar_7_3_1_E, 
				bar_7_3_1_F, 
				bar_7_4_1_text, 
				bar_7_4_1_A, 
				bar_7_4_1_B, 
				bar_7_4_1_C, 
				bar_7_4_1_D, 
				bar_7_4_1_E_a, 
				bar_7_4_1_E_b, 
				bar_7_4_1_E_c, 
				bar_7_4_1_E_d, 
				bar_7_4_1_E_e, 
				bar_7_4_1_E_f, 
				bar_7_4_1_E_g, 
				bar_7_4_1_E_h, 
				bar_7_4_1_F, 
				bar_7_4_1_G, 
				bar_7_4_1_H, 
				bar_7_4_1_I, 
				bar_7_5_1_text, 
				bar_7_5_1_A, 
				bar_7_5_1_B, 
				bar_7_5_1_C, 
				bar_7_6_1_text, 
				bar_7_6_1_A, 
				bar_7_6_1_B, 
				bar_7_6_1_C, 
				bar_7_7_1_text, 
				bar_7_7_1_A, 
				bar_7_7_1_B, 
				bar_7_7_1_C, 
				kitchen_8_1_1_text, 
				kitchen_8_1_1_A, 
				kitchen_8_2_1_text, 
				kitchen_8_2_1_A, 
				kitchen_8_2_1_B, 
				kitchen_8_2_1_C, 
				kitchen_8_3_1_text, 
				kitchen_8_3_1_A, 
				kitchen_8_3_1_B, 
				kitchen_8_3_1_C, 
				kitchen_8_4_1_text, 
				kitchen_8_4_1_A, 
				kitchen_8_4_2_text, 
				kitchen_8_4_2_A, 
				kitchen_8_4_2_B, 
				kitchen_8_4_2_C, 
				kitchen_8_5_1_text, 
				kitchen_8_5_1_A, 
				kitchen_8_5_1_B, 
				kitchen_8_5_1_C, 
				kitchen_8_5_1_D, 
				kitchen_8_5_1_E, 
				kitchen_8_5_1_F, 
				kitchen_8_5_1_G, 
				kitchen_8_5_1_H, 
				kitchen_8_5_1_I, 
				kitchen_8_6_1_text, 
				kitchen_8_6_1_A, 
				kitchen_8_6_1_B, 
				kitchen_8_6_1_C, 
				kitchen_8_6_1_D, 
				kitchen_8_6_1_E, 
				kitchen_8_6_1_F, 
				kitchen_8_6_1_G, 
				kitchen_8_7_1_text, 
				kitchen_8_7_1_A, 
				kitchen_8_7_1_B, 
				kitchen_8_7_1_C, 
				kitchen_8_7_1_D, 
				kitchen_8_7_1_E, 
				kitchen_8_8_1_text, 
				kitchen_8_8_1_A, 
				kitchen_8_8_1_B, 
				kitchen_8_9_1_text, 
				kitchen_8_9_1_A, 
				kitchen_8_9_1_B, 
				kitchen_8_9_1_C_a, 
				kitchen_8_9_1_C_b, 
				kitchen_8_9_1_D, 
				kitchen_8_9_1_E, 
				kitchen_8_9_1_F, 
				kitchen_8_9_1_G, 
				kitchen_8_10_1_text, 
				kitchen_8_10_1_A, 
				kitchen_8_10_1_B, 
				kitchen_8_10_1_C, 
				kitchen_8_11_1_text, 
				kitchen_8_11_1_A, 
				kitchen_8_11_1_B, 
				kitchen_8_11_1_C, 
				kitchen_8_11_1_D, 
				kitchen_8_11_1_E, 
				kitchen_8_12_1_text, 
				kitchen_8_12_1_A_a, 
				kitchen_8_12_1_A_b, 
				kitchen_8_12_1_A_c, 
				kitchen_8_12_1_A_d, 
				kitchen_8_12_1_B, 
				kitchen_8_12_1_C, 
				kitchen_8_12_1_D, 
				kitchen_8_12_1_E, 
				kitchen_8_12_1_F, 
				kitchen_8_12_1_G, 
				kitchen_8_13_1_text, 
				kitchen_8_13_1_A_a, 
				kitchen_8_13_1_A_b, 
				kitchen_8_13_1_A_c, 
				kitchen_8_13_1_B, 
				kitchen_8_13_1_C_a, 
				kitchen_8_13_1_C_b, 
				kitchen_8_13_1_C_c, 
				kitchen_8_13_1_C_d, 
				kitchen_8_13_1_C_e, 
				kitchen_8_13_1_D_a, 
				kitchen_8_13_1_D_b, 
				kitchen_8_13_1_E, 
				kitchen_8_13_1_F, 
				kitchen_8_14_1_text, 
				kitchen_8_14_1_A, 
				kitchen_8_14_1_B, 
				kitchen_8_14_1_C, 
				kitchen_8_14_1_D, 
				kitchen_8_14_1_E, 
				kitchen_8_14_1_F, 
				kitchen_8_14_1_G, 
				kitchen_8_14_1_H, 
				kitchen_8_14_1_I, 
				kitchen_8_14_1_J, 
				kitchen_8_14_1_K, 
				hygiene_and_sanitation_9_1_1_text, 
				hygiene_and_sanitation_9_1_1_A, 
				hygiene_and_sanitation_9_1_1_B, 
				hygiene_and_sanitation_9_1_1_C, 
				hygiene_and_sanitation_9_1_1_D_a, 
				hygiene_and_sanitation_9_1_1_D_b, 
				hygiene_and_sanitation_9_1_1_D_c, 
				hygiene_and_sanitation_9_1_1_D_d, 
				hygiene_and_sanitation_9_1_1_D_e, 
				hygiene_and_sanitation_9_1_1_D_f, 
				hygiene_and_sanitation_9_1_1_E, 
				hygiene_and_sanitation_9_1_1_F, 
				hygiene_and_sanitation_9_1_1_G, 
				hygiene_and_sanitation_9_1_1_H, 
				hygiene_and_sanitation_9_1_1_I_a, 
				hygiene_and_sanitation_9_1_1_I_b, 
				hygiene_and_sanitation_9_1_1_I_c, 
				hygiene_and_sanitation_9_1_1_I_d, 
				hygiene_and_sanitation_9_1_1_I_e, 
				hygiene_and_sanitation_9_1_1_J, 
				hygiene_and_sanitation_9_1_1_K, 
				hygiene_and_sanitation_9_2_1_text, 
				hygiene_and_sanitation_9_2_1_A, 
				hygiene_and_sanitation_9_2_1_B, 
				hygiene_and_sanitation_9_2_1_C, 
				hygiene_and_sanitation_9_2_1_D, 
				hygiene_and_sanitation_9_2_1_E_a, 
				hygiene_and_sanitation_9_2_1_E_b, 
				hygiene_and_sanitation_9_2_1_E_c, 
				hygiene_and_sanitation_9_2_1_E_d, 
				hygiene_and_sanitation_9_2_1_E_e, 
				hygiene_and_sanitation_9_2_1_E_f, 
				hygiene_and_sanitation_9_2_1_E_g, 
				hygiene_and_sanitation_9_2_1_E_h, 
				hygiene_and_sanitation_9_2_1_E_i, 
				hygiene_and_sanitation_9_2_1_F, 
				hygiene_and_sanitation_9_2_1_G, 
				hygiene_and_sanitation_9_2_1_H_a, 
				hygiene_and_sanitation_9_2_1_H_b, 
				hygiene_and_sanitation_9_2_1_H_c, 
				hygiene_and_sanitation_9_2_1_H_d, 
				hygiene_and_sanitation_9_2_1_I, 
				hygiene_and_sanitation_9_2_1_J, 
				hygiene_and_sanitation_9_3_1_text, 
				hygiene_and_sanitation_9_3_1_A, 
				hygiene_and_sanitation_9_3_1_B, 
				hygiene_and_sanitation_9_3_1_C, 
				hygiene_and_sanitation_9_3_1_D, 
				hygiene_and_sanitation_9_3_1_E, 
				hygiene_and_sanitation_9_3_1_F, 
				hygiene_and_sanitation_9_4_1_text, 
				hygiene_and_sanitation_9_4_1_A, 
				hygiene_and_sanitation_12_4_1_B, 
				hygiene_and_sanitation_9_4_1_C, 
				hygiene_and_sanitation_9_5_1_text, 
				hygiene_and_sanitation_9_5_1_A, 
				hygiene_and_sanitation_9_5_1_B, 
				hygiene_and_sanitation_9_6_1_text, 
				hygiene_and_sanitation_9_6_1_A, 
				hygiene_and_sanitation_9_6_1_B, 
				hygiene_and_sanitation_9_6_1_C, 
				safety_and_security_10_1_1_text, 
				safety_and_security_10_1_1_A, 
				safety_and_security_10_1_1_B, 
				safety_and_security_10_1_1_C, 
				safety_and_security_10_1_1_D, 
				safety_and_security_10_1_1_E_a, 
				safety_and_security_10_1_1_E_b, 
				safety_and_security_10_1_1_E_c, 
				safety_and_security_10_1_1_E_d, 
				safety_and_security_10_1_1_E_e, 
				safety_and_security_10_1_1_E_f, 
				safety_and_security_10_1_1_E_g, 
				safety_and_security_10_1_1_F, 
				safety_and_security_10_1_1_G, 
				safety_and_security_10_1_1_H, 
				safety_and_security_10_1_1_I, 
				safety_and_security_10_2_1_text, 
				safety_and_security_10_2_1_A, 
				safety_and_security_10_2_1_B, 
				safety_and_security_10_3_1_text, 
				safety_and_security_10_3_1_A, 
				safety_and_security_10_3_1_B, 
				safety_and_security_10_3_1_C, 
				safety_and_security_10_3_1_D, 
				safety_and_security_10_3_1_E, 
				safety_and_security_10_3_1_F, 
				safety_and_security_10_3_1_G, 
				safety_and_security_10_3_1_H, 
				safety_and_security_10_4_1_text, 
				safety_and_security_10_4_1_A, 
				safety_and_security_10_4_1_B, 
				safety_and_security_10_4_1_C, 
				safety_and_security_10_5_1_text, 
				safety_and_security_10_5_1_A, 
				safety_and_security_10_5_1_B, 
				safety_and_security_10_5_1_C, 
				safety_and_security_10_5_1_D, 
				safety_and_security_10_5_1_E, 
				safety_and_security_10_6_1_text, 
				safety_and_security_10_6_1_A, 
				sundry_services_11_1_1_text, 
				sundry_services_11_1_1_A, 
				sundry_services_11_1_1_B, 
				sundry_services_11_2_1_text, 
				sundry_services_11_2_1_A, 
				sundry_services_11_2_1_B, 
				sundry_services_11_2_1_C, 
				sundry_services_11_3_1_text, 
				sundry_services_11_3_1_A, 
				sundry_services_11_4_1_text, 
				sundry_services_11_4_1_A, 
				sundry_services_11_5_1_text, 
				sundry_services_11_5_1_A, 
				sundry_services_11_5_1_B, 
				sundry_services_11_6_1_text, 
				sundry_services_11_6_1_A, 
				human_resources_12_1_1_text, 
				human_resources_12_1_1_A, 
				human_resources_12_1_1_B, 
				human_resources_12_1_1_C, 
				human_resources_12_1_1_D, 
				human_resources_12_1_1_E_a, 
				human_resources_12_1_1_E_b, 
				human_resources_12_1_1_E_c, 
				human_resources_12_1_1_E_d, 
				human_resources_12_1_1_E_e, 
				human_resources_12_2_1_text, 
				human_resources_12_2_1_A_a, 
				human_resources_12_2_1_A_b, 
				human_resources_12_2_1_A_c, 
				human_resources_12_2_1_B_a, 
				human_resources_12_2_1_B_b, 
				human_resources_12_2_1_B_c, 
				human_resources_12_3_1_text, 
				human_resources_12_3_1_A, 
				human_resources_12_4_1_text, 
				human_resources_12_4_1_A, 
				human_resources_12_4_1_B, 
				human_resources_12_4_1_C, 
				human_resources_12_4_1_D, 
				general_13_1_1_text, 
				general_13_1_1_A_a, 
				general_13_1_1_A_b, 
				general_13_1_1_A_c
				)VALUES(
				'$assessment_id', '$facility_id', '$assessor_category', '$assessment_score', 
				'$location_1_1_1_text', 
				'$location_1_1_1_A', 
				'$location_1_1_2_text', 
				'$location_1_1_2_A', 
				'$location_1_1_3_text', 
				'$location_1_1_3_A', 
				'$location_1_1_3_B', 
				'$location_1_1_3_C', 
				'$location_1_1_4_text', 
				'$location_1_1_4_A', 
				'$location_1_1_5_text', 
				'$location_1_1_5_A', 
				'$location_1_1_6_text', 
				'$location_1_1_6_A', 
				'$building_2_1_1_text', 
				'$building_2_1_1_A', 
				'$building_2_1_2_text', 
				'$building_2_1_2_A', 
				'$building_2_2_1_text', 
				'$building_2_2_1_A', 
				'$building_2_2_1_B', 
				'$building_2_2_2_text', 
				'$building_2_2_2_A', 
				'$building_2_2_2_B', 
				'$building_2_2_2_C', 
				'$building_2_2_2_D', 
				'$building_2_2_2_E', 
				'$building_2_2_2_F', 
				'$building_2_3_1_text', 
				'$building_2_3_1_A', 
				'$reception_3_1_1_text', 
				'$reception_3_1_1_A', 
				'$reception_3_1_1_B', 
				'$reception_3_1_1_C', 
				'$reception_3_1_1_D', 
				'$reception_3_1_1_E', 
				'$dining_area_4_1_1_text', 
				'$dining_area_4_1_1_A', 
				'$dining_area_4_1_1_B', 
				'$dining_area_4_1_1_C', 
				'$dining_area_4_1_1_D', 
				'$dining_area_4_1_1_E', 
				'$dining_area_4_1_1_F', 
				'$dining_area_4_1_1_G', 
				'$dining_area_4_1_1_H', 
				'$dining_area_4_1_1_I', 
				'$dining_area_4_1_1_J', 
				'$dining_area_4_1_1_K', 
				'$dining_area_4_1_1_L', 
				'$dining_area_4_2_1_text', 
				'$dining_area_4_2_1_A', 
				'$dining_area_4_2_1_B', 
				'$dining_area_4_2_1_C', 
				'$dining_area_4_2_1_D', 
				'$dining_area_4_3_1_text', 
				'$dining_area_4_3_1_A', 
				'$dining_area_4_3_1_B', 
				'$dining_area_4_3_1_C', 
				'$dining_area_4_4_1_text', 
				'$dining_area_4_4_1_A', 
				'$dining_area_4_4_1_B', 
				'$dining_area_4_4_1_C', 
				'$dining_area_4_4_1_D', 
				'$dining_area_4_4_1_E', 
				'$dining_area_4_4_1_F', 
				'$service_5_1_1_text', 
				'$service_5_1_1_A', 
				'$service_5_1_1_B', 
				'$service_5_1_1_C', 
				'$service_5_1_1_D', 
				'$service_5_1_1_E', 
				'$service_5_1_1_F', 
				'$service_5_1_1_G', 
				'$service_5_1_1_H', 
				'$service_5_1_1_I', 
				'$service_5_1_1_J', 
				'$service_5_1_1_K_a', 
				'$service_5_1_1_K_b', 
				'$service_5_1_1_K_c', 
				'$service_5_2_1_text', 
				'$service_5_2_1_A', 
				'$service_5_2_1_B', 
				'$service_5_2_1_C', 
				'$service_5_2_1_D', 
				'$service_5_2_1_E_a', 
				'$service_5_2_1_E_b', 
				'$service_5_2_1_E_c', 
				'$service_5_2_1_E_d', 
				'$service_5_2_1_F', 
				'$service_5_2_1_G_a', 
				'$service_5_2_1_G_b', 
				'$service_5_2_1_G_c', 
				'$service_5_2_1_H', 
				'$service_5_2_1_I', 
				'$service_5_2_1_J', 
				'$service_5_3_1_text', 
				'$service_5_3_1_A', 
				'$service_5_3_1_B', 
				'$entertainment_6_1_1_text', 
				'$entertainment_6_1_1_A', 
				'$entertainment_6_1_1_B', 
				'$entertainment_6_1_1_C', 
				'$bar_7_1_1_text', 
				'$bar_7_1_1_A', 
				'$bar_7_1_1_B_a', 
				'$bar_7_1_1_B_b', 
				'$bar_7_1_1_B_c', 
				'$bar_7_1_1_C', 
				'$bar_7_1_1_D', 
				'$bar_7_1_1_E', 
				'$bar_7_2_1_text', 
				'$bar_7_2_1_A', 
				'$bar_7_2_1_B', 
				'$bar_7_2_1_C', 
				'$bar_7_2_1_D', 
				'$bar_7_2_2_text', 
				'$bar_7_2_2_A', 
				'$bar_7_2_2_B', 
				'$bar_7_2_2_C', 
				'$bar_7_2_2_D', 
				'$bar_7_2_2_E', 
				'$bar_7_2_2_F', 
				'$bar_7_3_1_text', 
				'$bar_7_3_1_A', 
				'$bar_7_3_1_B', 
				'$bar_7_3_1_C', 
				'$bar_7_3_1_D', 
				'$bar_7_3_1_E', 
				'$bar_7_3_1_F', 
				'$bar_7_4_1_text', 
				'$bar_7_4_1_A', 
				'$bar_7_4_1_B', 
				'$bar_7_4_1_C', 
				'$bar_7_4_1_D', 
				'$bar_7_4_1_E_a', 
				'$bar_7_4_1_E_b', 
				'$bar_7_4_1_E_c', 
				'$bar_7_4_1_E_d', 
				'$bar_7_4_1_E_e', 
				'$bar_7_4_1_E_f', 
				'$bar_7_4_1_E_g', 
				'$bar_7_4_1_E_h', 
				'$bar_7_4_1_F', 
				'$bar_7_4_1_G', 
				'$bar_7_4_1_H', 
				'$bar_7_4_1_I', 
				'$bar_7_5_1_text', 
				'$bar_7_5_1_A', 
				'$bar_7_5_1_B', 
				'$bar_7_5_1_C', 
				'$bar_7_6_1_text', 
				'$bar_7_6_1_A', 
				'$bar_7_6_1_B', 
				'$bar_7_6_1_C', 
				'$bar_7_7_1_text', 
				'$bar_7_7_1_A', 
				'$bar_7_7_1_B', 
				'$bar_7_7_1_C', 
				'$kitchen_8_1_1_text', 
				'$kitchen_8_1_1_A', 
				'$kitchen_8_2_1_text', 
				'$kitchen_8_2_1_A', 
				'$kitchen_8_2_1_B', 
				'$kitchen_8_2_1_C', 
				'$kitchen_8_3_1_text', 
				'$kitchen_8_3_1_A', 
				'$kitchen_8_3_1_B', 
				'$kitchen_8_3_1_C', 
				'$kitchen_8_4_1_text', 
				'$kitchen_8_4_1_A', 
				'$kitchen_8_4_2_text', 
				'$kitchen_8_4_2_A', 
				'$kitchen_8_4_2_B', 
				'$kitchen_8_4_2_C', 
				'$kitchen_8_5_1_text', 
				'$kitchen_8_5_1_A', 
				'$kitchen_8_5_1_B', 
				'$kitchen_8_5_1_C', 
				'$kitchen_8_5_1_D', 
				'$kitchen_8_5_1_E', 
				'$kitchen_8_5_1_F', 
				'$kitchen_8_5_1_G', 
				'$kitchen_8_5_1_H', 
				'$kitchen_8_5_1_I', 
				'$kitchen_8_6_1_text', 
				'$kitchen_8_6_1_A', 
				'$kitchen_8_6_1_B', 
				'$kitchen_8_6_1_C', 
				'$kitchen_8_6_1_D', 
				'$kitchen_8_6_1_E', 
				'$kitchen_8_6_1_F', 
				'$kitchen_8_6_1_G', 
				'$kitchen_8_7_1_text', 
				'$kitchen_8_7_1_A', 
				'$kitchen_8_7_1_B', 
				'$kitchen_8_7_1_C', 
				'$kitchen_8_7_1_D', 
				'$kitchen_8_7_1_E', 
				'$kitchen_8_8_1_text', 
				'$kitchen_8_8_1_A', 
				'$kitchen_8_8_1_B', 
				'$kitchen_8_9_1_text', 
				'$kitchen_8_9_1_A', 
				'$kitchen_8_9_1_B', 
				'$kitchen_8_9_1_C_a', 
				'$kitchen_8_9_1_C_b', 
				'$kitchen_8_9_1_D', 
				'$kitchen_8_9_1_E', 
				'$kitchen_8_9_1_F', 
				'$kitchen_8_9_1_G', 
				'$kitchen_8_10_1_text', 
				'$kitchen_8_10_1_A', 
				'$kitchen_8_10_1_B', 
				'$kitchen_8_10_1_C', 
				'$kitchen_8_11_1_text', 
				'$kitchen_8_11_1_A', 
				'$kitchen_8_11_1_B', 
				'$kitchen_8_11_1_C', 
				'$kitchen_8_11_1_D', 
				'$kitchen_8_11_1_E', 
				'$kitchen_8_12_1_text', 
				'$kitchen_8_12_1_A_a', 
				'$kitchen_8_12_1_A_b', 
				'$kitchen_8_12_1_A_c', 
				'$kitchen_8_12_1_A_d', 
				'$kitchen_8_12_1_B', 
				'$kitchen_8_12_1_C', 
				'$kitchen_8_12_1_D', 
				'$kitchen_8_12_1_E', 
				'$kitchen_8_12_1_F', 
				'$kitchen_8_12_1_G', 
				'$kitchen_8_13_1_text', 
				'$kitchen_8_13_1_A_a', 
				'$kitchen_8_13_1_A_b', 
				'$kitchen_8_13_1_A_c', 
				'$kitchen_8_13_1_B', 
				'$kitchen_8_13_1_C_a', 
				'$kitchen_8_13_1_C_b', 
				'$kitchen_8_13_1_C_c', 
				'$kitchen_8_13_1_C_d', 
				'$kitchen_8_13_1_C_e', 
				'$kitchen_8_13_1_D_a', 
				'$kitchen_8_13_1_D_b', 
				'$kitchen_8_13_1_E', 
				'$kitchen_8_13_1_F', 
				'$kitchen_8_14_1_text', 
				'$kitchen_8_14_1_A', 
				'$kitchen_8_14_1_B', 
				'$kitchen_8_14_1_C', 
				'$kitchen_8_14_1_D', 
				'$kitchen_8_14_1_E', 
				'$kitchen_8_14_1_F', 
				'$kitchen_8_14_1_G', 
				'$kitchen_8_14_1_H', 
				'$kitchen_8_14_1_I', 
				'$kitchen_8_14_1_J', 
				'$kitchen_8_14_1_K', 
				'$hygiene_and_sanitation_9_1_1_text', 
				'$hygiene_and_sanitation_9_1_1_A', 
				'$hygiene_and_sanitation_9_1_1_B', 
				'$hygiene_and_sanitation_9_1_1_C', 
				'$hygiene_and_sanitation_9_1_1_D_a', 
				'$hygiene_and_sanitation_9_1_1_D_b', 
				'$hygiene_and_sanitation_9_1_1_D_c', 
				'$hygiene_and_sanitation_9_1_1_D_d', 
				'$hygiene_and_sanitation_9_1_1_D_e', 
				'$hygiene_and_sanitation_9_1_1_D_f', 
				'$hygiene_and_sanitation_9_1_1_E', 
				'$hygiene_and_sanitation_9_1_1_F', 
				'$hygiene_and_sanitation_9_1_1_G', 
				'$hygiene_and_sanitation_9_1_1_H', 
				'$hygiene_and_sanitation_9_1_1_I_a', 
				'$hygiene_and_sanitation_9_1_1_I_b', 
				'$hygiene_and_sanitation_9_1_1_I_c', 
				'$hygiene_and_sanitation_9_1_1_I_d', 
				'$hygiene_and_sanitation_9_1_1_I_e', 
				'$hygiene_and_sanitation_9_1_1_J', 
				'$hygiene_and_sanitation_9_1_1_K', 
				'$hygiene_and_sanitation_9_2_1_text', 
				'$hygiene_and_sanitation_9_2_1_A', 
				'$hygiene_and_sanitation_9_2_1_B', 
				'$hygiene_and_sanitation_9_2_1_C', 
				'$hygiene_and_sanitation_9_2_1_D', 
				'$hygiene_and_sanitation_9_2_1_E_a', 
				'$hygiene_and_sanitation_9_2_1_E_b', 
				'$hygiene_and_sanitation_9_2_1_E_c', 
				'$hygiene_and_sanitation_9_2_1_E_d', 
				'$hygiene_and_sanitation_9_2_1_E_e', 
				'$hygiene_and_sanitation_9_2_1_E_f', 
				'$hygiene_and_sanitation_9_2_1_E_g', 
				'$hygiene_and_sanitation_9_2_1_E_h', 
				'$hygiene_and_sanitation_9_2_1_E_i', 
				'$hygiene_and_sanitation_9_2_1_F', 
				'$hygiene_and_sanitation_9_2_1_G', 
				'$hygiene_and_sanitation_9_2_1_H_a', 
				'$hygiene_and_sanitation_9_2_1_H_b', 
				'$hygiene_and_sanitation_9_2_1_H_c', 
				'$hygiene_and_sanitation_9_2_1_H_d', 
				'$hygiene_and_sanitation_9_2_1_I', 
				'$hygiene_and_sanitation_9_2_1_J', 
				'$hygiene_and_sanitation_9_3_1_text', 
				'$hygiene_and_sanitation_9_3_1_A', 
				'$hygiene_and_sanitation_9_3_1_B', 
				'$hygiene_and_sanitation_9_3_1_C', 
				'$hygiene_and_sanitation_9_3_1_D', 
				'$hygiene_and_sanitation_9_3_1_E', 
				'$hygiene_and_sanitation_9_3_1_F', 
				'$hygiene_and_sanitation_9_4_1_text', 
				'$hygiene_and_sanitation_9_4_1_A', 
				'$hygiene_and_sanitation_12_4_1_B', 
				'$hygiene_and_sanitation_9_4_1_C', 
				'$hygiene_and_sanitation_9_5_1_text', 
				'$hygiene_and_sanitation_9_5_1_A', 
				'$hygiene_and_sanitation_9_5_1_B', 
				'$hygiene_and_sanitation_9_6_1_text', 
				'$hygiene_and_sanitation_9_6_1_A', 
				'$hygiene_and_sanitation_9_6_1_B', 
				'$hygiene_and_sanitation_9_6_1_C', 
				'$safety_and_security_10_1_1_text', 
				'$safety_and_security_10_1_1_A', 
				'$safety_and_security_10_1_1_B', 
				'$safety_and_security_10_1_1_C', 
				'$safety_and_security_10_1_1_D', 
				'$safety_and_security_10_1_1_E_a', 
				'$safety_and_security_10_1_1_E_b', 
				'$safety_and_security_10_1_1_E_c', 
				'$safety_and_security_10_1_1_E_d', 
				'$safety_and_security_10_1_1_E_e', 
				'$safety_and_security_10_1_1_E_f', 
				'$safety_and_security_10_1_1_E_g', 
				'$safety_and_security_10_1_1_F', 
				'$safety_and_security_10_1_1_G', 
				'$safety_and_security_10_1_1_H', 
				'$safety_and_security_10_1_1_I', 
				'$safety_and_security_10_2_1_text', 
				'$safety_and_security_10_2_1_A', 
				'$safety_and_security_10_2_1_B', 
				'$safety_and_security_10_3_1_text', 
				'$safety_and_security_10_3_1_A', 
				'$safety_and_security_10_3_1_B', 
				'$safety_and_security_10_3_1_C', 
				'$safety_and_security_10_3_1_D', 
				'$safety_and_security_10_3_1_E', 
				'$safety_and_security_10_3_1_F', 
				'$safety_and_security_10_3_1_G', 
				'$safety_and_security_10_3_1_H', 
				'$safety_and_security_10_4_1_text', 
				'$safety_and_security_10_4_1_A', 
				'$safety_and_security_10_4_1_B', 
				'$safety_and_security_10_4_1_C', 
				'$safety_and_security_10_5_1_text', 
				'$safety_and_security_10_5_1_A', 
				'$safety_and_security_10_5_1_B', 
				'$safety_and_security_10_5_1_C', 
				'$safety_and_security_10_5_1_D', 
				'$safety_and_security_10_5_1_E', 
				'$safety_and_security_10_6_1_text', 
				'$safety_and_security_10_6_1_A', 
				'$sundry_services_11_1_1_text', 
				'$sundry_services_11_1_1_A', 
				'$sundry_services_11_1_1_B', 
				'$sundry_services_11_2_1_text', 
				'$sundry_services_11_2_1_A', 
				'$sundry_services_11_2_1_B', 
				'$sundry_services_11_2_1_C', 
				'$sundry_services_11_3_1_text', 
				'$sundry_services_11_3_1_A', 
				'$sundry_services_11_4_1_text', 
				'$sundry_services_11_4_1_A', 
				'$sundry_services_11_5_1_text', 
				'$sundry_services_11_5_1_A', 
				'$sundry_services_11_5_1_B', 
				'$sundry_services_11_6_1_text', 
				'$sundry_services_11_6_1_A', 
				'$human_resources_12_1_1_text', 
				'$human_resources_12_1_1_A', 
				'$human_resources_12_1_1_B', 
				'$human_resources_12_1_1_C', 
				'$human_resources_12_1_1_D', 
				'$human_resources_12_1_1_E_a', 
				'$human_resources_12_1_1_E_b', 
				'$human_resources_12_1_1_E_c', 
				'$human_resources_12_1_1_E_d', 
				'$human_resources_12_1_1_E_e', 
				'$human_resources_12_2_1_text', 
				'$human_resources_12_2_1_A_a', 
				'$human_resources_12_2_1_A_b', 
				'$human_resources_12_2_1_A_c', 
				'$human_resources_12_2_1_B_a', 
				'$human_resources_12_2_1_B_b', 
				'$human_resources_12_2_1_B_c', 
				'$human_resources_12_3_1_text', 
				'$human_resources_12_3_1_A', 
				'$human_resources_12_4_1_text', 
				'$human_resources_12_4_1_A', 
				'$human_resources_12_4_1_B', 
				'$human_resources_12_4_1_C', 
				'$human_resources_12_4_1_D', 
				'$general_13_1_1_text', 
				'$general_13_1_1_A_a', 
				'$general_13_1_1_A_b', 
				'$general_13_1_1_A_c'
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
					$query = "UPDATE afcg_assessment_motel SET 
					assessment_score = '$assessment_score', 
					location_1_1_1_text = '$location_1_1_1_text', 
					location_1_1_1_A = '$location_1_1_1_A', 
					location_1_1_2_text = '$location_1_1_2_text', 
					location_1_1_2_A = '$location_1_1_2_A', 
					location_1_1_3_text = '$location_1_1_3_text', 
					location_1_1_3_A = '$location_1_1_3_A', 
					location_1_1_3_B = '$location_1_1_3_B', 
					location_1_1_3_C = '$location_1_1_3_C', 
					location_1_1_4_text = '$location_1_1_4_text', 
					location_1_1_4_A = '$location_1_1_4_A', 
					location_1_1_5_text = '$location_1_1_5_text', 
					location_1_1_5_A = '$location_1_1_5_A', 
					location_1_1_6_text = '$location_1_1_6_text', 
					location_1_1_6_A = '$location_1_1_6_A', 
					building_2_1_1_text = '$building_2_1_1_text', 
					building_2_1_1_A = '$building_2_1_1_A', 
					building_2_1_2_text = '$building_2_1_2_text', 
					building_2_1_2_A = '$building_2_1_2_A', 
					building_2_2_1_text = '$building_2_2_1_text', 
					building_2_2_1_A = '$building_2_2_1_A', 
					building_2_2_1_B = '$building_2_2_1_B', 
					building_2_2_2_text = '$building_2_2_2_text', 
					building_2_2_2_A = '$building_2_2_2_A', 
					building_2_2_2_B = '$building_2_2_2_B', 
					building_2_2_2_C = '$building_2_2_2_C', 
					building_2_2_2_D = '$building_2_2_2_D', 
					building_2_2_2_E = '$building_2_2_2_E', 
					building_2_2_2_F = '$building_2_2_2_F', 
					building_2_3_1_text = '$building_2_3_1_text', 
					building_2_3_1_A = '$building_2_3_1_A', 
					reception_3_1_1_text = '$reception_3_1_1_text', 
					reception_3_1_1_A = '$reception_3_1_1_A', 
					reception_3_1_1_B = '$reception_3_1_1_B', 
					reception_3_1_1_C = '$reception_3_1_1_C', 
					reception_3_1_1_D = '$reception_3_1_1_D', 
					reception_3_1_1_E = '$reception_3_1_1_E', 
					dining_area_4_1_1_text = '$dining_area_4_1_1_text', 
					dining_area_4_1_1_A = '$dining_area_4_1_1_A', 
					dining_area_4_1_1_B = '$dining_area_4_1_1_B', 
					dining_area_4_1_1_C = '$dining_area_4_1_1_C', 
					dining_area_4_1_1_D = '$dining_area_4_1_1_D', 
					dining_area_4_1_1_E = '$dining_area_4_1_1_E', 
					dining_area_4_1_1_F = '$dining_area_4_1_1_F', 
					dining_area_4_1_1_G = '$dining_area_4_1_1_G', 
					dining_area_4_1_1_H = '$dining_area_4_1_1_H', 
					dining_area_4_1_1_I = '$dining_area_4_1_1_I', 
					dining_area_4_1_1_J = '$dining_area_4_1_1_J', 
					dining_area_4_1_1_K = '$dining_area_4_1_1_K', 
					dining_area_4_1_1_L = '$dining_area_4_1_1_L', 
					dining_area_4_2_1_text = '$dining_area_4_2_1_text', 
					dining_area_4_2_1_A = '$dining_area_4_2_1_A', 
					dining_area_4_2_1_B = '$dining_area_4_2_1_B', 
					dining_area_4_2_1_C = '$dining_area_4_2_1_C', 
					dining_area_4_2_1_D = '$dining_area_4_2_1_D', 
					dining_area_4_3_1_text = '$dining_area_4_3_1_text', 
					dining_area_4_3_1_A = '$dining_area_4_3_1_A', 
					dining_area_4_3_1_B = '$dining_area_4_3_1_B', 
					dining_area_4_3_1_C = '$dining_area_4_3_1_C', 
					dining_area_4_4_1_text = '$dining_area_4_4_1_text', 
					dining_area_4_4_1_A = '$dining_area_4_4_1_A', 
					dining_area_4_4_1_B = '$dining_area_4_4_1_B', 
					dining_area_4_4_1_C = '$dining_area_4_4_1_C', 
					dining_area_4_4_1_D = '$dining_area_4_4_1_D', 
					dining_area_4_4_1_E = '$dining_area_4_4_1_E', 
					dining_area_4_4_1_F = '$dining_area_4_4_1_F', 
					service_5_1_1_text = '$service_5_1_1_text', 
					service_5_1_1_A = '$service_5_1_1_A', 
					service_5_1_1_B = '$service_5_1_1_B', 
					service_5_1_1_C = '$service_5_1_1_C', 
					service_5_1_1_D = '$service_5_1_1_D', 
					service_5_1_1_E = '$service_5_1_1_E', 
					service_5_1_1_F = '$service_5_1_1_F', 
					service_5_1_1_G = '$service_5_1_1_G', 
					service_5_1_1_H = '$service_5_1_1_H', 
					service_5_1_1_I = '$service_5_1_1_I', 
					service_5_1_1_J = '$service_5_1_1_J', 
					service_5_1_1_K_a = '$service_5_1_1_K_a', 
					service_5_1_1_K_b = '$service_5_1_1_K_b', 
					service_5_1_1_K_c = '$service_5_1_1_K_c', 
					service_5_2_1_text = '$service_5_2_1_text', 
					service_5_2_1_A = '$service_5_2_1_A', 
					service_5_2_1_B = '$service_5_2_1_B', 
					service_5_2_1_C = '$service_5_2_1_C', 
					service_5_2_1_D = '$service_5_2_1_D', 
					service_5_2_1_E_a = '$service_5_2_1_E_a', 
					service_5_2_1_E_b = '$service_5_2_1_E_b', 
					service_5_2_1_E_c = '$service_5_2_1_E_c', 
					service_5_2_1_E_d = '$service_5_2_1_E_d', 
					service_5_2_1_F = '$service_5_2_1_F', 
					service_5_2_1_G_a = '$service_5_2_1_G_a', 
					service_5_2_1_G_b = '$service_5_2_1_G_b', 
					service_5_2_1_G_c = '$service_5_2_1_G_c', 
					service_5_2_1_H = '$service_5_2_1_H', 
					service_5_2_1_I = '$service_5_2_1_I', 
					service_5_2_1_J = '$service_5_2_1_J', 
					service_5_3_1_text = '$service_5_3_1_text', 
					service_5_3_1_A = '$service_5_3_1_A', 
					service_5_3_1_B = '$service_5_3_1_B', 
					entertainment_6_1_1_text = '$entertainment_6_1_1_text', 
					entertainment_6_1_1_A = '$entertainment_6_1_1_A', 
					entertainment_6_1_1_B = '$entertainment_6_1_1_B', 
					entertainment_6_1_1_C = '$entertainment_6_1_1_C', 
					bar_7_1_1_text = '$bar_7_1_1_text', 
					bar_7_1_1_A = '$bar_7_1_1_A', 
					bar_7_1_1_B_a = '$bar_7_1_1_B_a', 
					bar_7_1_1_B_b = '$bar_7_1_1_B_b', 
					bar_7_1_1_B_c = '$bar_7_1_1_B_c', 
					bar_7_1_1_C = '$bar_7_1_1_C', 
					bar_7_1_1_D = '$bar_7_1_1_D', 
					bar_7_1_1_E = '$bar_7_1_1_E', 
					bar_7_2_1_text = '$bar_7_2_1_text', 
					bar_7_2_1_A = '$bar_7_2_1_A', 
					bar_7_2_1_B = '$bar_7_2_1_B', 
					bar_7_2_1_C = '$bar_7_2_1_C', 
					bar_7_2_1_D = '$bar_7_2_1_D', 
					bar_7_2_2_text = '$bar_7_2_2_text', 
					bar_7_2_2_A = '$bar_7_2_2_A', 
					bar_7_2_2_B = '$bar_7_2_2_B', 
					bar_7_2_2_C = '$bar_7_2_2_C', 
					bar_7_2_2_D = '$bar_7_2_2_D', 
					bar_7_2_2_E = '$bar_7_2_2_E', 
					bar_7_2_2_F = '$bar_7_2_2_F', 
					bar_7_3_1_text = '$bar_7_3_1_text', 
					bar_7_3_1_A = '$bar_7_3_1_A', 
					bar_7_3_1_B = '$bar_7_3_1_B', 
					bar_7_3_1_C = '$bar_7_3_1_C', 
					bar_7_3_1_D = '$bar_7_3_1_D', 
					bar_7_3_1_E = '$bar_7_3_1_E', 
					bar_7_3_1_F = '$bar_7_3_1_F', 
					bar_7_4_1_text = '$bar_7_4_1_text', 
					bar_7_4_1_A = '$bar_7_4_1_A', 
					bar_7_4_1_B = '$bar_7_4_1_B', 
					bar_7_4_1_C = '$bar_7_4_1_C', 
					bar_7_4_1_D = '$bar_7_4_1_D', 
					bar_7_4_1_E_a = '$bar_7_4_1_E_a', 
					bar_7_4_1_E_b = '$bar_7_4_1_E_b', 
					bar_7_4_1_E_c = '$bar_7_4_1_E_c', 
					bar_7_4_1_E_d = '$bar_7_4_1_E_d', 
					bar_7_4_1_E_e = '$bar_7_4_1_E_e', 
					bar_7_4_1_E_f = '$bar_7_4_1_E_f', 
					bar_7_4_1_E_g = '$bar_7_4_1_E_g', 
					bar_7_4_1_E_h = '$bar_7_4_1_E_h', 
					bar_7_4_1_F = '$bar_7_4_1_F', 
					bar_7_4_1_G = '$bar_7_4_1_G', 
					bar_7_4_1_H = '$bar_7_4_1_H', 
					bar_7_4_1_I = '$bar_7_4_1_I', 
					bar_7_5_1_text = '$bar_7_5_1_text', 
					bar_7_5_1_A = '$bar_7_5_1_A', 
					bar_7_5_1_B = '$bar_7_5_1_B', 
					bar_7_5_1_C = '$bar_7_5_1_C', 
					bar_7_6_1_text = '$bar_7_6_1_text', 
					bar_7_6_1_A = '$bar_7_6_1_A', 
					bar_7_6_1_B = '$bar_7_6_1_B', 
					bar_7_6_1_C = '$bar_7_6_1_C', 
					bar_7_7_1_text = '$bar_7_7_1_text', 
					bar_7_7_1_A = '$bar_7_7_1_A', 
					bar_7_7_1_B = '$bar_7_7_1_B', 
					bar_7_7_1_C = '$bar_7_7_1_C', 
					kitchen_8_1_1_text = '$kitchen_8_1_1_text', 
					kitchen_8_1_1_A = '$kitchen_8_1_1_A', 
					kitchen_8_2_1_text = '$kitchen_8_2_1_text', 
					kitchen_8_2_1_A = '$kitchen_8_2_1_A', 
					kitchen_8_2_1_B = '$kitchen_8_2_1_B', 
					kitchen_8_2_1_C = '$kitchen_8_2_1_C', 
					kitchen_8_3_1_text = '$kitchen_8_3_1_text', 
					kitchen_8_3_1_A = '$kitchen_8_3_1_A', 
					kitchen_8_3_1_B = '$kitchen_8_3_1_B', 
					kitchen_8_3_1_C = '$kitchen_8_3_1_C', 
					kitchen_8_4_1_text = '$kitchen_8_4_1_text', 
					kitchen_8_4_1_A = '$kitchen_8_4_1_A', 
					kitchen_8_4_2_text = '$kitchen_8_4_2_text', 
					kitchen_8_4_2_A = '$kitchen_8_4_2_A', 
					kitchen_8_4_2_B = '$kitchen_8_4_2_B', 
					kitchen_8_4_2_C = '$kitchen_8_4_2_C', 
					kitchen_8_5_1_text = '$kitchen_8_5_1_text', 
					kitchen_8_5_1_A = '$kitchen_8_5_1_A', 
					kitchen_8_5_1_B = '$kitchen_8_5_1_B', 
					kitchen_8_5_1_C = '$kitchen_8_5_1_C', 
					kitchen_8_5_1_D = '$kitchen_8_5_1_D', 
					kitchen_8_5_1_E = '$kitchen_8_5_1_E', 
					kitchen_8_5_1_F = '$kitchen_8_5_1_F', 
					kitchen_8_5_1_G = '$kitchen_8_5_1_G', 
					kitchen_8_5_1_H = '$kitchen_8_5_1_H', 
					kitchen_8_5_1_I = '$kitchen_8_5_1_I', 
					kitchen_8_6_1_text = '$kitchen_8_6_1_text', 
					kitchen_8_6_1_A = '$kitchen_8_6_1_A', 
					kitchen_8_6_1_B = '$kitchen_8_6_1_B', 
					kitchen_8_6_1_C = '$kitchen_8_6_1_C', 
					kitchen_8_6_1_D = '$kitchen_8_6_1_D', 
					kitchen_8_6_1_E = '$kitchen_8_6_1_E', 
					kitchen_8_6_1_F = '$kitchen_8_6_1_F', 
					kitchen_8_6_1_G = '$kitchen_8_6_1_G', 
					kitchen_8_7_1_text = '$kitchen_8_7_1_text', 
					kitchen_8_7_1_A = '$kitchen_8_7_1_A', 
					kitchen_8_7_1_B = '$kitchen_8_7_1_B', 
					kitchen_8_7_1_C = '$kitchen_8_7_1_C', 
					kitchen_8_7_1_D = '$kitchen_8_7_1_D', 
					kitchen_8_7_1_E = '$kitchen_8_7_1_E', 
					kitchen_8_8_1_text = '$kitchen_8_8_1_text', 
					kitchen_8_8_1_A = '$kitchen_8_8_1_A', 
					kitchen_8_8_1_B = '$kitchen_8_8_1_B', 
					kitchen_8_9_1_text = '$kitchen_8_9_1_text', 
					kitchen_8_9_1_A = '$kitchen_8_9_1_A', 
					kitchen_8_9_1_B = '$kitchen_8_9_1_B', 
					kitchen_8_9_1_C_a = '$kitchen_8_9_1_C_a', 
					kitchen_8_9_1_C_b = '$kitchen_8_9_1_C_b', 
					kitchen_8_9_1_D = '$kitchen_8_9_1_D', 
					kitchen_8_9_1_E = '$kitchen_8_9_1_E', 
					kitchen_8_9_1_F = '$kitchen_8_9_1_F', 
					kitchen_8_9_1_G = '$kitchen_8_9_1_G', 
					kitchen_8_10_1_text = '$kitchen_8_10_1_text', 
					kitchen_8_10_1_A = '$kitchen_8_10_1_A', 
					kitchen_8_10_1_B = '$kitchen_8_10_1_B', 
					kitchen_8_10_1_C = '$kitchen_8_10_1_C', 
					kitchen_8_11_1_text = '$kitchen_8_11_1_text', 
					kitchen_8_11_1_A = '$kitchen_8_11_1_A', 
					kitchen_8_11_1_B = '$kitchen_8_11_1_B', 
					kitchen_8_11_1_C = '$kitchen_8_11_1_C', 
					kitchen_8_11_1_D = '$kitchen_8_11_1_D', 
					kitchen_8_11_1_E = '$kitchen_8_11_1_E', 
					kitchen_8_12_1_text = '$kitchen_8_12_1_text', 
					kitchen_8_12_1_A_a = '$kitchen_8_12_1_A_a', 
					kitchen_8_12_1_A_b = '$kitchen_8_12_1_A_b', 
					kitchen_8_12_1_A_c = '$kitchen_8_12_1_A_c', 
					kitchen_8_12_1_A_d = '$kitchen_8_12_1_A_d', 
					kitchen_8_12_1_B = '$kitchen_8_12_1_B', 
					kitchen_8_12_1_C = '$kitchen_8_12_1_C', 
					kitchen_8_12_1_D = '$kitchen_8_12_1_D', 
					kitchen_8_12_1_E = '$kitchen_8_12_1_E', 
					kitchen_8_12_1_F = '$kitchen_8_12_1_F', 
					kitchen_8_12_1_G = '$kitchen_8_12_1_G', 
					kitchen_8_13_1_text = '$kitchen_8_13_1_text', 
					kitchen_8_13_1_A_a = '$kitchen_8_13_1_A_a', 
					kitchen_8_13_1_A_b = '$kitchen_8_13_1_A_b', 
					kitchen_8_13_1_A_c = '$kitchen_8_13_1_A_c', 
					kitchen_8_13_1_B = '$kitchen_8_13_1_B', 
					kitchen_8_13_1_C_a = '$kitchen_8_13_1_C_a', 
					kitchen_8_13_1_C_b = '$kitchen_8_13_1_C_b', 
					kitchen_8_13_1_C_c = '$kitchen_8_13_1_C_c', 
					kitchen_8_13_1_C_d = '$kitchen_8_13_1_C_d', 
					kitchen_8_13_1_C_e = '$kitchen_8_13_1_C_e', 
					kitchen_8_13_1_D_a = '$kitchen_8_13_1_D_a', 
					kitchen_8_13_1_D_b = '$kitchen_8_13_1_D_b', 
					kitchen_8_13_1_E = '$kitchen_8_13_1_E', 
					kitchen_8_13_1_F = '$kitchen_8_13_1_F', 
					kitchen_8_14_1_text = '$kitchen_8_14_1_text', 
					kitchen_8_14_1_A = '$kitchen_8_14_1_A', 
					kitchen_8_14_1_B = '$kitchen_8_14_1_B', 
					kitchen_8_14_1_C = '$kitchen_8_14_1_C', 
					kitchen_8_14_1_D = '$kitchen_8_14_1_D', 
					kitchen_8_14_1_E = '$kitchen_8_14_1_E', 
					kitchen_8_14_1_F = '$kitchen_8_14_1_F', 
					kitchen_8_14_1_G = '$kitchen_8_14_1_G', 
					kitchen_8_14_1_H = '$kitchen_8_14_1_H', 
					kitchen_8_14_1_I = '$kitchen_8_14_1_I', 
					kitchen_8_14_1_J = '$kitchen_8_14_1_J', 
					kitchen_8_14_1_K = '$kitchen_8_14_1_K', 
					hygiene_and_sanitation_9_1_1_text = '$hygiene_and_sanitation_9_1_1_text', 
					hygiene_and_sanitation_9_1_1_A = '$hygiene_and_sanitation_9_1_1_A', 
					hygiene_and_sanitation_9_1_1_B = '$hygiene_and_sanitation_9_1_1_B', 
					hygiene_and_sanitation_9_1_1_C = '$hygiene_and_sanitation_9_1_1_C', 
					hygiene_and_sanitation_9_1_1_D_a = '$hygiene_and_sanitation_9_1_1_D_a', 
					hygiene_and_sanitation_9_1_1_D_b = '$hygiene_and_sanitation_9_1_1_D_b', 
					hygiene_and_sanitation_9_1_1_D_c = '$hygiene_and_sanitation_9_1_1_D_c', 
					hygiene_and_sanitation_9_1_1_D_d = '$hygiene_and_sanitation_9_1_1_D_d', 
					hygiene_and_sanitation_9_1_1_D_e = '$hygiene_and_sanitation_9_1_1_D_e', 
					hygiene_and_sanitation_9_1_1_D_f = '$hygiene_and_sanitation_9_1_1_D_f', 
					hygiene_and_sanitation_9_1_1_E = '$hygiene_and_sanitation_9_1_1_E', 
					hygiene_and_sanitation_9_1_1_F = '$hygiene_and_sanitation_9_1_1_F', 
					hygiene_and_sanitation_9_1_1_G = '$hygiene_and_sanitation_9_1_1_G', 
					hygiene_and_sanitation_9_1_1_H = '$hygiene_and_sanitation_9_1_1_H', 
					hygiene_and_sanitation_9_1_1_I_a = '$hygiene_and_sanitation_9_1_1_I_a', 
					hygiene_and_sanitation_9_1_1_I_b = '$hygiene_and_sanitation_9_1_1_I_b', 
					hygiene_and_sanitation_9_1_1_I_c = '$hygiene_and_sanitation_9_1_1_I_c', 
					hygiene_and_sanitation_9_1_1_I_d = '$hygiene_and_sanitation_9_1_1_I_d', 
					hygiene_and_sanitation_9_1_1_I_e = '$hygiene_and_sanitation_9_1_1_I_e', 
					hygiene_and_sanitation_9_1_1_J = '$hygiene_and_sanitation_9_1_1_J', 
					hygiene_and_sanitation_9_1_1_K = '$hygiene_and_sanitation_9_1_1_K', 
					hygiene_and_sanitation_9_2_1_text = '$hygiene_and_sanitation_9_2_1_text', 
					hygiene_and_sanitation_9_2_1_A = '$hygiene_and_sanitation_9_2_1_A', 
					hygiene_and_sanitation_9_2_1_B = '$hygiene_and_sanitation_9_2_1_B', 
					hygiene_and_sanitation_9_2_1_C = '$hygiene_and_sanitation_9_2_1_C', 
					hygiene_and_sanitation_9_2_1_D = '$hygiene_and_sanitation_9_2_1_D', 
					hygiene_and_sanitation_9_2_1_E_a = '$hygiene_and_sanitation_9_2_1_E_a', 
					hygiene_and_sanitation_9_2_1_E_b = '$hygiene_and_sanitation_9_2_1_E_b', 
					hygiene_and_sanitation_9_2_1_E_c = '$hygiene_and_sanitation_9_2_1_E_c', 
					hygiene_and_sanitation_9_2_1_E_d = '$hygiene_and_sanitation_9_2_1_E_d', 
					hygiene_and_sanitation_9_2_1_E_e = '$hygiene_and_sanitation_9_2_1_E_e', 
					hygiene_and_sanitation_9_2_1_E_f = '$hygiene_and_sanitation_9_2_1_E_f', 
					hygiene_and_sanitation_9_2_1_E_g = '$hygiene_and_sanitation_9_2_1_E_g', 
					hygiene_and_sanitation_9_2_1_E_h = '$hygiene_and_sanitation_9_2_1_E_h', 
					hygiene_and_sanitation_9_2_1_E_i = '$hygiene_and_sanitation_9_2_1_E_i', 
					hygiene_and_sanitation_9_2_1_F = '$hygiene_and_sanitation_9_2_1_F', 
					hygiene_and_sanitation_9_2_1_G = '$hygiene_and_sanitation_9_2_1_G', 
					hygiene_and_sanitation_9_2_1_H_a = '$hygiene_and_sanitation_9_2_1_H_a', 
					hygiene_and_sanitation_9_2_1_H_b = '$hygiene_and_sanitation_9_2_1_H_b', 
					hygiene_and_sanitation_9_2_1_H_c = '$hygiene_and_sanitation_9_2_1_H_c', 
					hygiene_and_sanitation_9_2_1_H_d = '$hygiene_and_sanitation_9_2_1_H_d', 
					hygiene_and_sanitation_9_2_1_I = '$hygiene_and_sanitation_9_2_1_I', 
					hygiene_and_sanitation_9_2_1_J = '$hygiene_and_sanitation_9_2_1_J', 
					hygiene_and_sanitation_9_3_1_text = '$hygiene_and_sanitation_9_3_1_text', 
					hygiene_and_sanitation_9_3_1_A = '$hygiene_and_sanitation_9_3_1_A', 
					hygiene_and_sanitation_9_3_1_B = '$hygiene_and_sanitation_9_3_1_B', 
					hygiene_and_sanitation_9_3_1_C = '$hygiene_and_sanitation_9_3_1_C', 
					hygiene_and_sanitation_9_3_1_D = '$hygiene_and_sanitation_9_3_1_D', 
					hygiene_and_sanitation_9_3_1_E = '$hygiene_and_sanitation_9_3_1_E', 
					hygiene_and_sanitation_9_3_1_F = '$hygiene_and_sanitation_9_3_1_F', 
					hygiene_and_sanitation_9_4_1_text = '$hygiene_and_sanitation_9_4_1_text', 
					hygiene_and_sanitation_9_4_1_A = '$hygiene_and_sanitation_9_4_1_A', 
					hygiene_and_sanitation_12_4_1_B = '$hygiene_and_sanitation_12_4_1_B', 
					hygiene_and_sanitation_9_4_1_C = '$hygiene_and_sanitation_9_4_1_C', 
					hygiene_and_sanitation_9_5_1_text = '$hygiene_and_sanitation_9_5_1_text', 
					hygiene_and_sanitation_9_5_1_A = '$hygiene_and_sanitation_9_5_1_A', 
					hygiene_and_sanitation_9_5_1_B = '$hygiene_and_sanitation_9_5_1_B', 
					hygiene_and_sanitation_9_6_1_text = '$hygiene_and_sanitation_9_6_1_text', 
					hygiene_and_sanitation_9_6_1_A = '$hygiene_and_sanitation_9_6_1_A', 
					hygiene_and_sanitation_9_6_1_B = '$hygiene_and_sanitation_9_6_1_B', 
					hygiene_and_sanitation_9_6_1_C = '$hygiene_and_sanitation_9_6_1_C', 
					safety_and_security_10_1_1_text = '$safety_and_security_10_1_1_text', 
					safety_and_security_10_1_1_A = '$safety_and_security_10_1_1_A', 
					safety_and_security_10_1_1_B = '$safety_and_security_10_1_1_B', 
					safety_and_security_10_1_1_C = '$safety_and_security_10_1_1_C', 
					safety_and_security_10_1_1_D = '$safety_and_security_10_1_1_D', 
					safety_and_security_10_1_1_E_a = '$safety_and_security_10_1_1_E_a', 
					safety_and_security_10_1_1_E_b = '$safety_and_security_10_1_1_E_b', 
					safety_and_security_10_1_1_E_c = '$safety_and_security_10_1_1_E_c', 
					safety_and_security_10_1_1_E_d = '$safety_and_security_10_1_1_E_d', 
					safety_and_security_10_1_1_E_e = '$safety_and_security_10_1_1_E_e', 
					safety_and_security_10_1_1_E_f = '$safety_and_security_10_1_1_E_f', 
					safety_and_security_10_1_1_E_g = '$safety_and_security_10_1_1_E_g', 
					safety_and_security_10_1_1_F = '$safety_and_security_10_1_1_F', 
					safety_and_security_10_1_1_G = '$safety_and_security_10_1_1_G', 
					safety_and_security_10_1_1_H = '$safety_and_security_10_1_1_H', 
					safety_and_security_10_1_1_I = '$safety_and_security_10_1_1_I', 
					safety_and_security_10_2_1_text = '$safety_and_security_10_2_1_text', 
					safety_and_security_10_2_1_A = '$safety_and_security_10_2_1_A', 
					safety_and_security_10_2_1_B = '$safety_and_security_10_2_1_B', 
					safety_and_security_10_3_1_text = '$safety_and_security_10_3_1_text', 
					safety_and_security_10_3_1_A = '$safety_and_security_10_3_1_A', 
					safety_and_security_10_3_1_B = '$safety_and_security_10_3_1_B', 
					safety_and_security_10_3_1_C = '$safety_and_security_10_3_1_C', 
					safety_and_security_10_3_1_D = '$safety_and_security_10_3_1_D', 
					safety_and_security_10_3_1_E = '$safety_and_security_10_3_1_E', 
					safety_and_security_10_3_1_F = '$safety_and_security_10_3_1_F', 
					safety_and_security_10_3_1_G = '$safety_and_security_10_3_1_G', 
					safety_and_security_10_3_1_H = '$safety_and_security_10_3_1_H', 
					safety_and_security_10_4_1_text = '$safety_and_security_10_4_1_text', 
					safety_and_security_10_4_1_A = '$safety_and_security_10_4_1_A', 
					safety_and_security_10_4_1_B = '$safety_and_security_10_4_1_B', 
					safety_and_security_10_4_1_C = '$safety_and_security_10_4_1_C', 
					safety_and_security_10_5_1_text = '$safety_and_security_10_5_1_text', 
					safety_and_security_10_5_1_A = '$safety_and_security_10_5_1_A', 
					safety_and_security_10_5_1_B = '$safety_and_security_10_5_1_B', 
					safety_and_security_10_5_1_C = '$safety_and_security_10_5_1_C', 
					safety_and_security_10_5_1_D = '$safety_and_security_10_5_1_D', 
					safety_and_security_10_5_1_E = '$safety_and_security_10_5_1_E', 
					safety_and_security_10_6_1_text = '$safety_and_security_10_6_1_text', 
					safety_and_security_10_6_1_A = '$safety_and_security_10_6_1_A', 
					sundry_services_11_1_1_text = '$sundry_services_11_1_1_text', 
					sundry_services_11_1_1_A = '$sundry_services_11_1_1_A', 
					sundry_services_11_1_1_B = '$sundry_services_11_1_1_B', 
					sundry_services_11_2_1_text = '$sundry_services_11_2_1_text', 
					sundry_services_11_2_1_A = '$sundry_services_11_2_1_A', 
					sundry_services_11_2_1_B = '$sundry_services_11_2_1_B', 
					sundry_services_11_2_1_C = '$sundry_services_11_2_1_C', 
					sundry_services_11_3_1_text = '$sundry_services_11_3_1_text', 
					sundry_services_11_3_1_A = '$sundry_services_11_3_1_A', 
					sundry_services_11_4_1_text = '$sundry_services_11_4_1_text', 
					sundry_services_11_4_1_A = '$sundry_services_11_4_1_A', 
					sundry_services_11_5_1_text = '$sundry_services_11_5_1_text', 
					sundry_services_11_5_1_A = '$sundry_services_11_5_1_A', 
					sundry_services_11_5_1_B = '$sundry_services_11_5_1_B', 
					sundry_services_11_6_1_text = '$sundry_services_11_6_1_text', 
					sundry_services_11_6_1_A = '$sundry_services_11_6_1_A', 
					human_resources_12_1_1_text = '$human_resources_12_1_1_text', 
					human_resources_12_1_1_A = '$human_resources_12_1_1_A', 
					human_resources_12_1_1_B = '$human_resources_12_1_1_B', 
					human_resources_12_1_1_C = '$human_resources_12_1_1_C', 
					human_resources_12_1_1_D = '$human_resources_12_1_1_D', 
					human_resources_12_1_1_E_a = '$human_resources_12_1_1_E_a', 
					human_resources_12_1_1_E_b = '$human_resources_12_1_1_E_b', 
					human_resources_12_1_1_E_c = '$human_resources_12_1_1_E_c', 
					human_resources_12_1_1_E_d = '$human_resources_12_1_1_E_d', 
					human_resources_12_1_1_E_e = '$human_resources_12_1_1_E_e', 
					human_resources_12_2_1_text = '$human_resources_12_2_1_text', 
					human_resources_12_2_1_A_a = '$human_resources_12_2_1_A_a', 
					human_resources_12_2_1_A_b = '$human_resources_12_2_1_A_b', 
					human_resources_12_2_1_A_c = '$human_resources_12_2_1_A_c', 
					human_resources_12_2_1_B_a = '$human_resources_12_2_1_B_a', 
					human_resources_12_2_1_B_b = '$human_resources_12_2_1_B_b', 
					human_resources_12_2_1_B_c = '$human_resources_12_2_1_B_c', 
					human_resources_12_3_1_text = '$human_resources_12_3_1_text', 
					human_resources_12_3_1_A = '$human_resources_12_3_1_A', 
					human_resources_12_4_1_text = '$human_resources_12_4_1_text', 
					human_resources_12_4_1_A = '$human_resources_12_4_1_A', 
					human_resources_12_4_1_B = '$human_resources_12_4_1_B', 
					human_resources_12_4_1_C = '$human_resources_12_4_1_C', 
					human_resources_12_4_1_D = '$human_resources_12_4_1_D', 
					general_13_1_1_text = '$general_13_1_1_text', 
					general_13_1_1_A_a = '$general_13_1_1_A_a', 
					general_13_1_1_A_b = '$general_13_1_1_A_b', 
					general_13_1_1_A_c = '$general_13_1_1_A_c'
 
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