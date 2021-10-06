<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));
	$message = '';
	$connection_error = '';
	$output = array();
	$essential_items_id = $form_data->essential_items_id;
	$assessor_category = $form_data->assessor_category;
	if($assessor_category == 'self_assessor_2'){ $assessor = 'assessor_2'; }else{ $assessor = 'assessor_3'; }
	$query = "SELECT * FROM afcg_essential_items WHERE (id = '".$essential_items_id."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  
			//ITEM 1
			
			if(($row['item_1_a_i'] == "") || ($row['item_1_a_i'] === NULL)){ $output['item_1_a_i'] = "empty"; }else{ $output['item_1_a_i'] = $row['item_1_a_i']; }
				if(($row['item_1_a_i_'.$assessor.''] == "") || ($row['item_1_a_i_'.$assessor.''] === NULL)){ $output['item_1_a_i_agreement'] = "empty"; }else{ $output['item_1_a_i_agreement'] = $row['item_1_a_i_'.$assessor.'']; }
				$output['item_1_a_i_agreement_assessor_2'] = $row['item_1_a_i_assessor_2']; $output['item_1_a_i_agreement_assessor_3'] = $row['item_1_a_i_assessor_3'];
			if(($row['item_1_a_ii'] == "") || ($row['item_1_a_ii'] === NULL)){ $output['item_1_a_ii'] = "empty"; }else{ $output['item_1_a_ii'] = $row['item_1_a_ii']; }
				if(($row['item_1_a_ii_'.$assessor.''] == "") || ($row['item_1_a_ii_'.$assessor.''] === NULL)){ $output['item_1_a_ii_agreement'] = "empty"; }else{ $output['item_1_a_ii_agreement'] = $row['item_1_a_ii_'.$assessor.'']; }
				$output['item_1_a_ii_agreement_assessor_2'] = $row['item_1_a_ii_assessor_2']; $output['item_1_a_ii_agreement_assessor_3'] = $row['item_1_a_ii_assessor_3'];
			if(($row['item_1_b_i'] == "") || ($row['item_1_b_i'] === NULL)){ $output['item_1_b_i'] = "empty"; }else{ $output['item_1_b_i'] = $row['item_1_b_i']; }
				if(($row['item_1_b_i_'.$assessor.''] == "") || ($row['item_1_b_i_'.$assessor.''] === NULL)){ $output['item_1_b_i_agreement'] = "empty"; }else{ $output['item_1_b_i_agreement'] = $row['item_1_b_i_'.$assessor.'']; }
				$output['item_1_b_i_agreement_assessor_2'] = $row['item_1_b_i_assessor_2']; $output['item_1_b_i_agreement_assessor_3'] = $row['item_1_b_i_assessor_3'];
			if(($row['item_1_b_ii'] == "") || ($row['item_1_b_ii'] === NULL)){ $output['item_1_b_ii'] = "empty"; }else{ $output['item_1_b_ii'] = $row['item_1_b_ii']; }
				if(($row['item_1_b_ii_'.$assessor.''] == "") || ($row['item_1_b_ii_'.$assessor.''] === NULL)){ $output['item_1_b_ii_agreement'] = "empty"; }else{ $output['item_1_b_ii_agreement'] = $row['item_1_b_ii_'.$assessor.'']; }
				$output['item_1_b_ii_agreement_assessor_2'] = $row['item_1_b_ii_assessor_2']; $output['item_1_b_ii_agreement_assessor_3'] = $row['item_1_b_ii_assessor_3'];
			$output['item_1_text'] = $row['item_1_text'];
			
			//ITEM 2
			if(($row['item_2_i'] == "") || ($row['item_2_i'] === NULL)){ $output['item_2_i'] = "empty"; }else{ $output['item_2_i'] = $row['item_2_i']; }
				if(($row['item_2_i_'.$assessor.''] == "") || ($row['item_2_i_'.$assessor.''] === NULL)){ $output['item_2_i_agreement'] = "empty"; }else{ $output['item_2_i_agreement'] = $row['item_2_i_'.$assessor.'']; }
				$output['item_2_i_agreement_assessor_2'] = $row['item_2_i_assessor_2']; $output['item_2_i_agreement_assessor_3'] = $row['item_2_i_assessor_3'];
			if(($row['item_2_ii'] == "") || ($row['item_2_ii'] === NULL)){ $output['item_2_ii'] = "empty"; }else{ $output['item_2_ii'] = $row['item_2_ii']; }
				if(($row['item_2_ii_'.$assessor.''] == "") || ($row['item_2_ii_'.$assessor.''] === NULL)){ $output['item_2_ii_agreement'] = "empty"; }else{ $output['item_2_ii_agreement'] = $row['item_2_ii_'.$assessor.'']; }
				$output['item_2_ii_agreement_assessor_2'] = $row['item_2_ii_assessor_2']; $output['item_2_ii_agreement_assessor_3'] = $row['item_2_ii_assessor_3'];
			$output['item_2_text'] = $row['item_2_text'];
			//ITEM 3
			if(($row['item_3_i'] == "") || ($row['item_3_i'] === NULL)){ $output['item_3_i'] = "empty"; }else{ $output['item_3_i'] = $row['item_3_i']; }
				if(($row['item_3_i_'.$assessor.''] == "") || ($row['item_3_i_'.$assessor.''] === NULL)){ $output['item_3_i_agreement'] = "empty"; }else{ $output['item_3_i_agreement'] = $row['item_3_i_'.$assessor.'']; }
				$output['item_3_i_agreement_assessor_2'] = $row['item_3_i_assessor_2']; $output['item_3_i_agreement_assessor_3'] = $row['item_3_i_assessor_3'];
			if(($row['item_3_ii'] == "") || ($row['item_3_ii'] === NULL)){ $output['item_3_ii'] = "empty"; }else{ $output['item_3_ii'] = $row['item_3_ii']; }
				if(($row['item_3_ii_'.$assessor.''] == "") || ($row['item_3_ii_'.$assessor.''] === NULL)){ $output['item_3_ii_agreement'] = "empty"; }else{ $output['item_3_ii_agreement'] = $row['item_3_ii_'.$assessor.'']; }
				$output['item_3_ii_agreement_assessor_2'] = $row['item_3_ii_assessor_2']; $output['item_3_ii_agreement_assessor_3'] = $row['item_3_ii_assessor_3'];
			$output['item_3_text'] = $row['item_3_text'];
			//ITEM 4
			if(($row['item_4_i'] == "") || ($row['item_4_i'] === NULL)){ $output['item_4_i'] = "empty"; }else{ $output['item_4_i'] = $row['item_4_i']; }
				if(($row['item_4_i_'.$assessor.''] == "") || ($row['item_4_i_'.$assessor.''] === NULL)){ $output['item_4_i_agreement'] = "empty"; }else{ $output['item_4_i_agreement'] = $row['item_4_i_'.$assessor.'']; }
				$output['item_4_i_agreement_assessor_2'] = $row['item_4_i_assessor_2']; $output['item_4_i_agreement_assessor_3'] = $row['item_4_i_assessor_3'];
			if(($row['item_4_ii'] == "") || ($row['item_4_ii'] === NULL)){ $output['item_4_ii'] = "empty"; }else{ $output['item_4_ii'] = $row['item_4_ii']; }
				if(($row['item_4_ii_'.$assessor.''] == "") || ($row['item_4_ii_'.$assessor.''] === NULL)){ $output['item_4_ii_agreement'] = "empty"; }else{ $output['item_4_ii_agreement'] = $row['item_4_ii_'.$assessor.'']; }
				$output['item_4_ii_agreement_assessor_2'] = $row['item_4_ii_assessor_2']; $output['item_4_ii_agreement_assessor_3'] = $row['item_4_ii_assessor_3'];
			if(($row['item_4_iii'] == "") || ($row['item_4_iii'] === NULL)){ $output['item_4_iii'] = "empty"; }else{ $output['item_4_iii'] = $row['item_4_iii']; }
				if(($row['item_4_iii_'.$assessor.''] == "") || ($row['item_4_iii_'.$assessor.''] === NULL)){ $output['item_4_iii_agreement'] = "empty"; }else{ $output['item_4_iii_agreement'] = $row['item_4_iii_'.$assessor.'']; }
				$output['item_4_iii_agreement_assessor_2'] = $row['item_4_iii_assessor_2']; $output['item_4_iii_agreement_assessor_3'] = $row['item_4_iii_assessor_3'];
			$output['item_4_text'] = $row['item_4_text'];
			//ITEM 5
			if(($row['item_5_i'] == "") || ($row['item_5_i'] === NULL)){ $output['item_5_i'] = "empty"; }else{ $output['item_5_i'] = $row['item_5_i']; }
				if(($row['item_5_i_'.$assessor.''] == "") || ($row['item_5_i_'.$assessor.''] === NULL)){ $output['item_5_i_agreement'] = "empty"; }else{ $output['item_5_i_agreement'] = $row['item_5_i_'.$assessor.'']; }
				$output['item_5_i_agreement_assessor_2'] = $row['item_5_i_assessor_2']; $output['item_5_i_agreement_assessor_3'] = $row['item_5_i_assessor_3'];
			if(($row['item_5_ii'] == "") || ($row['item_5_ii'] === NULL)){ $output['item_5_ii'] = "empty"; }else{ $output['item_5_ii'] = $row['item_5_ii']; }
				if(($row['item_5_ii_'.$assessor.''] == "") || ($row['item_5_ii_'.$assessor.''] === NULL)){ $output['item_5_ii_agreement'] = "empty"; }else{ $output['item_5_ii_agreement'] = $row['item_5_ii_'.$assessor.'']; }
				$output['item_5_ii_agreement_assessor_2'] = $row['item_5_ii_assessor_2']; $output['item_5_ii_agreement_assessor_3'] = $row['item_5_ii_assessor_3'];
			if(($row['item_5_iii'] == "") || ($row['item_5_iii'] === NULL)){ $output['item_5_iii'] = "empty"; }else{ $output['item_5_iii'] = $row['item_5_iii']; }
				if(($row['item_5_iii_'.$assessor.''] == "") || ($row['item_5_iii_'.$assessor.''] === NULL)){ $output['item_5_iii_agreement'] = "empty"; }else{ $output['item_5_iii_agreement'] = $row['item_5_iii_'.$assessor.'']; }
				$output['item_5_iii_agreement_assessor_2'] = $row['item_5_iii_assessor_2']; $output['item_5_iii_agreement_assessor_3'] = $row['item_5_iii_assessor_3'];
			$output['item_5_text'] = $row['item_5_text'];
			//ITEM 6
			if(($row['item_6_i'] == "") || ($row['item_6_i'] === NULL)){ $output['item_6_i'] = "empty"; }else{ $output['item_6_i'] = $row['item_6_i']; }
				if(($row['item_6_i_'.$assessor.''] == "") || ($row['item_6_i_'.$assessor.''] === NULL)){ $output['item_6_i_agreement'] = "empty"; }else{ $output['item_6_i_agreement'] = $row['item_6_i_'.$assessor.'']; }
				$output['item_6_i_agreement_assessor_2'] = $row['item_6_i_assessor_2']; $output['item_6_i_agreement_assessor_3'] = $row['item_6_i_assessor_3'];
			if(($row['item_6_ii'] == "") || ($row['item_6_ii'] === NULL)){ $output['item_6_ii'] = "empty"; }else{ $output['item_6_ii'] = $row['item_6_ii']; }
				if(($row['item_6_ii_'.$assessor.''] == "") || ($row['item_6_ii_'.$assessor.''] === NULL)){ $output['item_6_ii_agreement'] = "empty"; }else{ $output['item_6_ii_agreement'] = $row['item_6_ii_'.$assessor.'']; }
				$output['item_6_ii_agreement_assessor_2'] = $row['item_6_ii_assessor_2']; $output['item_6_ii_agreement_assessor_3'] = $row['item_6_ii_assessor_3'];
			if(($row['item_6_iii'] == "") || ($row['item_6_iii'] === NULL)){ $output['item_6_iii'] = "empty"; }else{ $output['item_6_iii'] = $row['item_6_iii']; }
				if(($row['item_6_iii_'.$assessor.''] == "") || ($row['item_6_iii_'.$assessor.''] === NULL)){ $output['item_6_iii_agreement'] = "empty"; }else{ $output['item_6_iii_agreement'] = $row['item_6_iii_'.$assessor.'']; }
				$output['item_6_iii_agreement_assessor_2'] = $row['item_6_iii_assessor_2']; $output['item_6_iii_agreement_assessor_3'] = $row['item_6_iii_assessor_3'];
			$output['item_6_text'] = $row['item_6_text'];
			//ITEM 7
			if(($row['item_7_i'] == "") || ($row['item_7_i'] === NULL)){ $output['item_7_i'] = "empty"; }else{ $output['item_7_i'] = $row['item_7_i']; }
				if(($row['item_7_i_'.$assessor.''] == "") || ($row['item_7_i_'.$assessor.''] === NULL)){ $output['item_7_i_agreement'] = "empty"; }else{ $output['item_7_i_agreement'] = $row['item_7_i_'.$assessor.'']; }
				$output['item_7_i_agreement_assessor_2'] = $row['item_7_i_assessor_2']; $output['item_7_i_agreement_assessor_3'] = $row['item_7_i_assessor_3'];
			if(($row['item_7_ii'] == "") || ($row['item_7_ii'] === NULL)){ $output['item_7_ii'] = "empty"; }else{ $output['item_7_ii'] = $row['item_7_ii']; }
				if(($row['item_7_ii_'.$assessor.''] == "") || ($row['item_7_ii_'.$assessor.''] === NULL)){ $output['item_7_ii_agreement'] = "empty"; }else{ $output['item_7_ii_agreement'] = $row['item_7_ii_'.$assessor.'']; }
				$output['item_7_ii_agreement_assessor_2'] = $row['item_7_ii_assessor_2']; $output['item_7_ii_agreement_assessor_3'] = $row['item_7_ii_assessor_3'];
			if(($row['item_7_iii'] == "") || ($row['item_7_iii'] === NULL)){ $output['item_7_iii'] = "empty"; }else{ $output['item_7_iii'] = $row['item_7_iii']; }
				if(($row['item_7_iii_'.$assessor.''] == "") || ($row['item_7_iii_'.$assessor.''] === NULL)){ $output['item_7_iii_agreement'] = "empty"; }else{ $output['item_7_iii_agreement'] = $row['item_7_iii_'.$assessor.'']; }
				$output['item_7_iii_agreement_assessor_2'] = $row['item_7_iii_assessor_2']; $output['item_7_iii_agreement_assessor_3'] = $row['item_7_iii_assessor_3'];
			$output['item_7_text'] = $row['item_7_text'];
			//ITEM 8
			if(($row['item_8_i'] == "") || ($row['item_8_i'] === NULL)){ $output['item_8_i'] = "empty"; }else{ $output['item_8_i'] = $row['item_8_i']; }
				if(($row['item_8_i_'.$assessor.''] == "") || ($row['item_8_i_'.$assessor.''] === NULL)){ $output['item_8_i_agreement'] = "empty"; }else{ $output['item_8_i_agreement'] = $row['item_8_i_'.$assessor.'']; }
				$output['item_8_i_agreement_assessor_2'] = $row['item_8_i_assessor_2']; $output['item_8_i_agreement_assessor_3'] = $row['item_8_i_assessor_3'];
			if(($row['item_8_ii'] == "") || ($row['item_8_ii'] === NULL)){ $output['item_8_ii'] = "empty"; }else{ $output['item_8_ii'] = $row['item_8_ii']; }
				if(($row['item_8_ii_'.$assessor.''] == "") || ($row['item_8_ii_'.$assessor.''] === NULL)){ $output['item_8_ii_agreement'] = "empty"; }else{ $output['item_8_ii_agreement'] = $row['item_8_ii_'.$assessor.'']; }
				$output['item_8_ii_agreement_assessor_2'] = $row['item_8_ii_assessor_2']; $output['item_8_ii_agreement_assessor_3'] = $row['item_8_ii_assessor_3'];
			if(($row['item_8_iii'] == "") || ($row['item_8_iii'] === NULL)){ $output['item_8_iii'] = "empty"; }else{ $output['item_8_iii'] = $row['item_8_iii']; }
				if(($row['item_8_iii_'.$assessor.''] == "") || ($row['item_8_iii_'.$assessor.''] === NULL)){ $output['item_8_iii_agreement'] = "empty"; }else{ $output['item_8_iii_agreement'] = $row['item_8_iii_'.$assessor.'']; }
				$output['item_8_iii_agreement_assessor_2'] = $row['item_8_iii_assessor_2']; $output['item_8_iii_agreement_assessor_3'] = $row['item_8_iii_assessor_3'];
			$output['item_8_text'] = $row['item_8_text'];
			//ITEM 9
			if(($row['item_9_i'] == "") || ($row['item_9_i'] === NULL)){ $output['item_9_i'] = "empty"; }else{ $output['item_9_i'] = $row['item_9_i']; }
				if(($row['item_9_i_'.$assessor.''] == "") || ($row['item_9_i_'.$assessor.''] === NULL)){ $output['item_9_i_agreement'] = "empty"; }else{ $output['item_9_i_agreement'] = $row['item_9_i_'.$assessor.'']; }
				$output['item_9_i_agreement_assessor_2'] = $row['item_9_i_assessor_2']; $output['item_9_i_agreement_assessor_3'] = $row['item_9_i_assessor_3'];
			if(($row['item_9_ii'] == "") || ($row['item_9_ii'] === NULL)){ $output['item_9_ii'] = "empty"; }else{ $output['item_9_ii'] = $row['item_9_ii']; }
				if(($row['item_9_ii_'.$assessor.''] == "") || ($row['item_9_ii_'.$assessor.''] === NULL)){ $output['item_9_ii_agreement'] = "empty"; }else{ $output['item_9_ii_agreement'] = $row['item_9_ii_'.$assessor.'']; }
				$output['item_9_ii_agreement_assessor_2'] = $row['item_9_ii_assessor_2']; $output['item_9_ii_agreement_assessor_3'] = $row['item_9_ii_assessor_3'];
			if(($row['item_9_iii'] == "") || ($row['item_9_iii'] === NULL)){ $output['item_9_iii'] = "empty"; }else{ $output['item_9_iii'] = $row['item_9_iii']; }
				if(($row['item_9_iii_'.$assessor.''] == "") || ($row['item_9_iii_'.$assessor.''] === NULL)){ $output['item_9_iii_agreement'] = "empty"; }else{ $output['item_9_iii_agreement'] = $row['item_9_iii_'.$assessor.'']; }
				$output['item_9_iii_agreement_assessor_2'] = $row['item_9_iii_assessor_2']; $output['item_9_iii_agreement_assessor_3'] = $row['item_9_iii_assessor_3'];
			$output['item_9_text'] = $row['item_9_text'];
			//ITEM 10
			if(($row['item_10_i'] == "") || ($row['item_10_i'] === NULL)){ $output['item_10_i'] = "empty"; }else{ $output['item_10_i'] = $row['item_10_i']; }
				if(($row['item_10_i_'.$assessor.''] == "") || ($row['item_10_i_'.$assessor.''] === NULL)){ $output['item_10_i_agreement'] = "empty"; }else{ $output['item_10_i_agreement'] = $row['item_10_i_'.$assessor.'']; }
				$output['item_10_i_agreement_assessor_2'] = $row['item_10_i_assessor_2']; $output['item_10_i_agreement_assessor_3'] = $row['item_10_i_assessor_3'];
			if(($row['item_10_ii'] == "") || ($row['item_10_ii'] === NULL)){ $output['item_10_ii'] = "empty"; }else{ $output['item_10_ii'] = $row['item_10_ii']; }
				if(($row['item_10_ii_'.$assessor.''] == "") || ($row['item_10_ii_'.$assessor.''] === NULL)){ $output['item_10_ii_agreement'] = "empty"; }else{ $output['item_10_ii_agreement'] = $row['item_10_ii_'.$assessor.'']; }
				$output['item_10_ii_agreement_assessor_2'] = $row['item_10_ii_assessor_2']; $output['item_10_ii_agreement_assessor_3'] = $row['item_10_ii_assessor_3'];
			if(($row['item_10_iii'] == "") || ($row['item_10_iii'] === NULL)){ $output['item_10_iii'] = "empty"; }else{ $output['item_10_iii'] = $row['item_10_iii']; }
				if(($row['item_10_iii_'.$assessor.''] == "") || ($row['item_10_iii_'.$assessor.''] === NULL)){ $output['item_10_iii_agreement'] = "empty"; }else{ $output['item_10_iii_agreement'] = $row['item_10_iii_'.$assessor.'']; }
				$output['item_10_iii_agreement_assessor_2'] = $row['item_10_iii_assessor_2']; $output['item_10_iii_agreement_assessor_3'] = $row['item_10_iii_assessor_3'];
			$output['item_10_text'] = $row['item_10_text'];
			//ITEM 11
			if(($row['item_11_i'] == "") || ($row['item_11_i'] === NULL)){ $output['item_11_i'] = "empty"; }else{ $output['item_11_i'] = $row['item_11_i']; }
				if(($row['item_11_i_'.$assessor.''] == "") || ($row['item_11_i_'.$assessor.''] === NULL)){ $output['item_11_i_agreement'] = "empty"; }else{ $output['item_11_i_agreement'] = $row['item_11_i_'.$assessor.'']; }
				$output['item_11_i_agreement_assessor_2'] = $row['item_11_i_assessor_2']; $output['item_11_i_agreement_assessor_3'] = $row['item_11_i_assessor_3'];
			if(($row['item_11_ii'] == "") || ($row['item_11_ii'] === NULL)){ $output['item_11_ii'] = "empty"; }else{ $output['item_11_ii'] = $row['item_11_ii']; }
				if(($row['item_11_ii_'.$assessor.''] == "") || ($row['item_11_ii_'.$assessor.''] === NULL)){ $output['item_11_ii_agreement'] = "empty"; }else{ $output['item_11_ii_agreement'] = $row['item_11_ii_'.$assessor.'']; }
				$output['item_11_ii_agreement_assessor_2'] = $row['item_11_ii_assessor_2']; $output['item_11_ii_agreement_assessor_3'] = $row['item_11_ii_assessor_3'];
			$output['item_11_text'] = $row['item_11_text'];
			//ITEM 12
			if(($row['item_12_i'] == "") || ($row['item_12_i'] === NULL)){ $output['item_12_i'] = "empty"; }else{ $output['item_12_i'] = $row['item_12_i']; }
				if(($row['item_12_i_'.$assessor.''] == "") || ($row['item_12_i_'.$assessor.''] === NULL)){ $output['item_12_i_agreement'] = "empty"; }else{ $output['item_12_i_agreement'] = $row['item_12_i_'.$assessor.'']; }
				$output['item_12_i_agreement_assessor_2'] = $row['item_12_i_assessor_2']; $output['item_12_i_agreement_assessor_3'] = $row['item_12_i_assessor_3'];
			if(($row['item_12_ii'] == "") || ($row['item_12_ii'] === NULL)){ $output['item_12_ii'] = "empty"; }else{ $output['item_12_ii'] = $row['item_12_ii']; }
				if(($row['item_12_ii_'.$assessor.''] == "") || ($row['item_12_ii_'.$assessor.''] === NULL)){ $output['item_12_ii_agreement'] = "empty"; }else{ $output['item_12_ii_agreement'] = $row['item_12_ii_'.$assessor.'']; }
				$output['item_12_ii_agreement_assessor_2'] = $row['item_12_ii_assessor_2']; $output['item_12_ii_agreement_assessor_3'] = $row['item_12_ii_assessor_3'];
			if(($row['item_12_iii'] == "") || ($row['item_12_iii'] === NULL)){ $output['item_12_iii'] = "empty"; }else{ $output['item_12_iii'] = $row['item_12_iii']; }
				if(($row['item_12_iii_'.$assessor.''] == "") || ($row['item_12_iii_'.$assessor.''] === NULL)){ $output['item_12_iii_agreement'] = "empty"; }else{ $output['item_12_iii_agreement'] = $row['item_12_iii_'.$assessor.'']; }
				$output['item_12_iii_agreement_assessor_2'] = $row['item_12_iii_assessor_2']; $output['item_12_iii_agreement_assessor_3'] = $row['item_12_iii_assessor_3'];
			$output['item_12_text'] = $row['item_12_text'];
			//ITEM 13
			if(($row['item_13_i'] == "") || ($row['item_13_i'] === NULL)){ $output['item_13_i'] = "empty"; }else{ $output['item_13_i'] = $row['item_13_i']; }
				if(($row['item_13_i_'.$assessor.''] == "") || ($row['item_13_i_'.$assessor.''] === NULL)){ $output['item_13_i_agreement'] = "empty"; }else{ $output['item_13_i_agreement'] = $row['item_13_i_'.$assessor.'']; }
				$output['item_13_i_agreement_assessor_2'] = $row['item_13_i_assessor_2']; $output['item_13_i_agreement_assessor_3'] = $row['item_13_i_assessor_3'];
			if(($row['item_13_ii'] == "") || ($row['item_13_ii'] === NULL)){ $output['item_13_ii'] = "empty"; }else{ $output['item_13_ii'] = $row['item_13_ii']; }
				if(($row['item_13_ii_'.$assessor.''] == "") || ($row['item_13_ii_'.$assessor.''] === NULL)){ $output['item_13_ii_agreement'] = "empty"; }else{ $output['item_13_ii_agreement'] = $row['item_13_ii_'.$assessor.'']; }
				$output['item_13_ii_agreement_assessor_2'] = $row['item_13_ii_assessor_2']; $output['item_13_ii_agreement_assessor_3'] = $row['item_13_ii_assessor_3'];
			if(($row['item_13_iii'] == "") || ($row['item_13_iii'] === NULL)){ $output['item_13_iii'] = "empty"; }else{ $output['item_13_iii'] = $row['item_13_iii']; }
				if(($row['item_13_iii_'.$assessor.''] == "") || ($row['item_13_iii_'.$assessor.''] === NULL)){ $output['item_13_iii_agreement'] = "empty"; }else{ $output['item_13_iii_agreement'] = $row['item_13_iii_'.$assessor.'']; }
				$output['item_13_iii_agreement_assessor_2'] = $row['item_13_iii_assessor_2']; $output['item_13_iii_agreement_assessor_3'] = $row['item_13_iii_assessor_3'];
			$output['item_13_text'] = $row['item_13_text'];
			//ITEM 14
			if(($row['item_14_i'] == "") || ($row['item_14_i'] === NULL)){ $output['item_14_i'] = "empty"; }else{ $output['item_14_i'] = $row['item_14_i']; }
				if(($row['item_14_i_'.$assessor.''] == "") || ($row['item_14_i_'.$assessor.''] === NULL)){ $output['item_14_i_agreement'] = "empty"; }else{ $output['item_14_i_agreement'] = $row['item_14_i_'.$assessor.'']; }
				$output['item_14_i_agreement_assessor_2'] = $row['item_14_i_assessor_2']; $output['item_14_i_agreement_assessor_3'] = $row['item_14_i_assessor_3'];
			if(($row['item_14_ii'] == "") || ($row['item_14_ii'] === NULL)){ $output['item_14_ii'] = "empty"; }else{ $output['item_14_ii'] = $row['item_14_ii']; }
				if(($row['item_14_ii_'.$assessor.''] == "") || ($row['item_14_ii_'.$assessor.''] === NULL)){ $output['item_14_ii_agreement'] = "empty"; }else{ $output['item_14_ii_agreement'] = $row['item_14_ii_'.$assessor.'']; }
				$output['item_14_ii_agreement_assessor_2'] = $row['item_14_ii_assessor_2']; $output['item_14_ii_agreement_assessor_3'] = $row['item_14_ii_assessor_3'];
			if(($row['item_14_iii'] == "") || ($row['item_14_iii'] === NULL)){ $output['item_14_iii'] = "empty"; }else{ $output['item_14_iii'] = $row['item_14_iii']; }
				if(($row['item_14_iii_'.$assessor.''] == "") || ($row['item_14_iii_'.$assessor.''] === NULL)){ $output['item_14_iii_agreement'] = "empty"; }else{ $output['item_14_iii_agreement'] = $row['item_14_iii_'.$assessor.'']; }
				$output['item_14_iii_agreement_assessor_2'] = $row['item_14_iii_assessor_2']; $output['item_14_iii_agreement_assessor_3'] = $row['item_14_iii_assessor_3'];
			$output['item_14_text'] = $row['item_14_text'];
			//ITEM 15
			if(($row['item_15_i'] == "") || ($row['item_15_i'] === NULL)){ $output['item_15_i'] = "empty"; }else{ $output['item_15_i'] = $row['item_15_i']; }
				if(($row['item_15_i_'.$assessor.''] == "") || ($row['item_15_i_'.$assessor.''] === NULL)){ $output['item_15_i_agreement'] = "empty"; }else{ $output['item_15_i_agreement'] = $row['item_15_i_'.$assessor.'']; }
				$output['item_15_i_agreement_assessor_2'] = $row['item_15_i_assessor_2']; $output['item_15_i_agreement_assessor_3'] = $row['item_15_i_assessor_3'];
			if(($row['item_15_ii'] == "") || ($row['item_15_ii'] === NULL)){ $output['item_15_ii'] = "empty"; }else{ $output['item_15_ii'] = $row['item_15_ii']; }
				if(($row['item_15_ii_'.$assessor.''] == "") || ($row['item_15_ii_'.$assessor.''] === NULL)){ $output['item_15_ii_agreement'] = "empty"; }else{ $output['item_15_ii_agreement'] = $row['item_15_ii_'.$assessor.'']; }
				$output['item_15_ii_agreement_assessor_2'] = $row['item_15_ii_assessor_2']; $output['item_15_ii_agreement_assessor_3'] = $row['item_15_ii_assessor_3'];
			if(($row['item_15_iii'] == "") || ($row['item_15_iii'] === NULL)){ $output['item_15_iii'] = "empty"; }else{ $output['item_15_iii'] = $row['item_15_iii']; }
				if(($row['item_15_iii_'.$assessor.''] == "") || ($row['item_15_iii_'.$assessor.''] === NULL)){ $output['item_15_iii_agreement'] = "empty"; }else{ $output['item_15_iii_agreement'] = $row['item_15_iii_'.$assessor.'']; }
				$output['item_15_iii_agreement_assessor_2'] = $row['item_15_iii_assessor_2']; $output['item_15_iii_agreement_assessor_3'] = $row['item_15_iii_assessor_3'];
			$output['item_15_text'] = $row['item_15_text'];
			//ITEM 16
			if(($row['item_16_i'] == "") || ($row['item_16_i'] === NULL)){ $output['item_16_i'] = "empty"; }else{ $output['item_16_i'] = $row['item_16_i']; }
				if(($row['item_16_i_'.$assessor.''] == "") || ($row['item_16_i_'.$assessor.''] === NULL)){ $output['item_16_i_agreement'] = "empty"; }else{ $output['item_16_i_agreement'] = $row['item_16_i_'.$assessor.'']; }
				$output['item_16_i_agreement_assessor_2'] = $row['item_16_i_assessor_2']; $output['item_16_i_agreement_assessor_3'] = $row['item_16_i_assessor_3'];
			if(($row['item_16_ii'] == "") || ($row['item_16_ii'] === NULL)){ $output['item_16_ii'] = "empty"; }else{ $output['item_16_ii'] = $row['item_16_ii']; }
				if(($row['item_16_ii_'.$assessor.''] == "") || ($row['item_16_ii_'.$assessor.''] === NULL)){ $output['item_16_ii_agreement'] = "empty"; }else{ $output['item_16_ii_agreement'] = $row['item_16_ii_'.$assessor.'']; }
				$output['item_16_ii_agreement_assessor_2'] = $row['item_16_ii_assessor_2']; $output['item_16_ii_agreement_assessor_3'] = $row['item_16_ii_assessor_3'];
			$output['item_16_text'] = $row['item_16_text'];
			//ITEM 17
			if(($row['item_17_i'] == "") || ($row['item_17_i'] === NULL)){ $output['item_17_i'] = "empty"; }else{ $output['item_17_i'] = $row['item_17_i']; }
				if(($row['item_17_i_'.$assessor.''] == "") || ($row['item_17_i_'.$assessor.''] === NULL)){ $output['item_17_i_agreement'] = "empty"; }else{ $output['item_17_i_agreement'] = $row['item_17_i_'.$assessor.'']; }
				$output['item_17_i_agreement_assessor_2'] = $row['item_17_i_assessor_2']; $output['item_17_i_agreement_assessor_3'] = $row['item_17_i_assessor_3'];
			if(($row['item_17_ii'] == "") || ($row['item_17_ii'] === NULL)){ $output['item_17_ii'] = "empty"; }else{ $output['item_17_ii'] = $row['item_17_ii']; }
				if(($row['item_17_ii_'.$assessor.''] == "") || ($row['item_17_ii_'.$assessor.''] === NULL)){ $output['item_17_ii_agreement'] = "empty"; }else{ $output['item_17_ii_agreement'] = $row['item_17_ii_'.$assessor.'']; }
				$output['item_17_ii_agreement_assessor_2'] = $row['item_17_ii_assessor_2']; $output['item_17_ii_agreement_assessor_3'] = $row['item_17_ii_assessor_3'];
			if(($row['item_17_iii'] == "") || ($row['item_17_iii'] === NULL)){ $output['item_17_iii'] = "empty"; }else{ $output['item_17_iii'] = $row['item_17_iii']; }
				if(($row['item_17_iii_'.$assessor.''] == "") || ($row['item_17_iii_'.$assessor.''] === NULL)){ $output['item_17_iii_agreement'] = "empty"; }else{ $output['item_17_iii_agreement'] = $row['item_17_iii_'.$assessor.'']; }
				$output['item_17_iii_agreement_assessor_2'] = $row['item_17_iii_assessor_2']; $output['item_17_iii_agreement_assessor_3'] = $row['item_17_iii_assessor_3'];
			$output['item_17_text'] = $row['item_17_text'];
			//ITEM 18
			if(($row['item_18_i'] == "") || ($row['item_18_i'] === NULL)){ $output['item_18_i'] = "empty"; }else{ $output['item_18_i'] = $row['item_18_i']; }
				if(($row['item_18_i_'.$assessor.''] == "") || ($row['item_18_i_'.$assessor.''] === NULL)){ $output['item_18_i_agreement'] = "empty"; }else{ $output['item_18_i_agreement'] = $row['item_18_i_'.$assessor.'']; }
				$output['item_18_i_agreement_assessor_2'] = $row['item_18_i_assessor_2']; $output['item_18_i_agreement_assessor_3'] = $row['item_18_i_assessor_3'];
			if(($row['item_18_ii'] == "") || ($row['item_18_ii'] === NULL)){ $output['item_18_ii'] = "empty"; }else{ $output['item_18_ii'] = $row['item_18_ii']; }
				if(($row['item_18_ii_'.$assessor.''] == "") || ($row['item_18_ii_'.$assessor.''] === NULL)){ $output['item_18_ii_agreement'] = "empty"; }else{ $output['item_18_ii_agreement'] = $row['item_18_ii_'.$assessor.'']; }
				$output['item_18_ii_agreement_assessor_2'] = $row['item_18_ii_assessor_2']; $output['item_18_ii_agreement_assessor_3'] = $row['item_18_ii_assessor_3'];
			if(($row['item_18_iii'] == "") || ($row['item_18_iii'] === NULL)){ $output['item_18_iii'] = "empty"; }else{ $output['item_18_iii'] = $row['item_18_iii']; }
				if(($row['item_18_iii_'.$assessor.''] == "") || ($row['item_18_iii_'.$assessor.''] === NULL)){ $output['item_18_iii_agreement'] = "empty"; }else{ $output['item_18_iii_agreement'] = $row['item_18_iii_'.$assessor.'']; }
				$output['item_18_iii_agreement_assessor_2'] = $row['item_18_iii_assessor_2']; $output['item_18_iii_agreement_assessor_3'] = $row['item_18_iii_assessor_3'];
			$output['item_18_text'] = $row['item_18_text'];
			//ITEM 19
			if(($row['item_19_i'] == "") || ($row['item_19_i'] === NULL)){ $output['item_19_i'] = "empty"; }else{ $output['item_19_i'] = $row['item_19_i']; }
				if(($row['item_19_i_'.$assessor.''] == "") || ($row['item_19_i_'.$assessor.''] === NULL)){ $output['item_19_i_agreement'] = "empty"; }else{ $output['item_19_i_agreement'] = $row['item_19_i_'.$assessor.'']; }
				$output['item_19_i_agreement_assessor_2'] = $row['item_19_i_assessor_2']; $output['item_19_i_agreement_assessor_3'] = $row['item_19_i_assessor_3'];
			if(($row['item_19_ii'] == "") || ($row['item_19_ii'] === NULL)){ $output['item_19_ii'] = "empty"; }else{ $output['item_19_ii'] = $row['item_19_ii']; }
				if(($row['item_19_ii_'.$assessor.''] == "") || ($row['item_19_ii_'.$assessor.''] === NULL)){ $output['item_19_ii_agreement'] = "empty"; }else{ $output['item_19_ii_agreement'] = $row['item_19_ii_'.$assessor.'']; }
				$output['item_19_ii_agreement_assessor_2'] = $row['item_19_ii_assessor_2']; $output['item_19_ii_agreement_assessor_3'] = $row['item_19_ii_assessor_3'];
			if(($row['item_19_iii'] == "") || ($row['item_19_iii'] === NULL)){ $output['item_19_iii'] = "empty"; }else{ $output['item_19_iii'] = $row['item_19_iii']; }
				if(($row['item_19_iii_'.$assessor.''] == "") || ($row['item_19_iii_'.$assessor.''] === NULL)){ $output['item_19_iii_agreement'] = "empty"; }else{ $output['item_19_iii_agreement'] = $row['item_19_iii_'.$assessor.'']; }
				$output['item_19_iii_agreement_assessor_2'] = $row['item_19_iii_assessor_2']; $output['item_19_iii_agreement_assessor_3'] = $row['item_19_iii_assessor_3'];
			$output['item_19_text'] = $row['item_19_text'];
			//ITEM 20
			if(($row['item_20_i'] == "") || ($row['item_20_i'] === NULL)){ $output['item_20_i'] = "empty"; }else{ $output['item_20_i'] = $row['item_20_i']; }
				if(($row['item_20_i_'.$assessor.''] == "") || ($row['item_20_i_'.$assessor.''] === NULL)){ $output['item_20_i_agreement'] = "empty"; }else{ $output['item_20_i_agreement'] = $row['item_20_i_'.$assessor.'']; }
				$output['item_20_i_agreement_assessor_2'] = $row['item_20_i_assessor_2']; $output['item_20_i_agreement_assessor_3'] = $row['item_20_i_assessor_3'];
			if(($row['item_20_ii'] == "") || ($row['item_20_ii'] === NULL)){ $output['item_20_ii'] = "empty"; }else{ $output['item_20_ii'] = $row['item_20_ii']; }
				if(($row['item_20_ii_'.$assessor.''] == "") || ($row['item_20_ii_'.$assessor.''] === NULL)){ $output['item_20_ii_agreement'] = "empty"; }else{ $output['item_20_ii_agreement'] = $row['item_20_ii_'.$assessor.'']; }
				$output['item_20_ii_agreement_assessor_2'] = $row['item_20_ii_assessor_2']; $output['item_20_ii_agreement_assessor_3'] = $row['item_20_ii_assessor_3'];
			if(($row['item_20_iii'] == "") || ($row['item_20_iii'] === NULL)){ $output['item_20_iii'] = "empty"; }else{ $output['item_20_iii'] = $row['item_20_iii']; }
				if(($row['item_20_iii_'.$assessor.''] == "") || ($row['item_20_iii_'.$assessor.''] === NULL)){ $output['item_20_iii_agreement'] = "empty"; }else{ $output['item_20_iii_agreement'] = $row['item_20_iii_'.$assessor.'']; }
				$output['item_20_iii_agreement_assessor_2'] = $row['item_20_iii_assessor_2']; $output['item_20_iii_agreement_assessor_3'] = $row['item_20_iii_assessor_3'];
			$output['item_20_text'] = $row['item_20_text'];
			//ITEM 21
			if(($row['item_21_i'] == "") || ($row['item_21_i'] === NULL)){ $output['item_21_i'] = "empty"; }else{ $output['item_21_i'] = $row['item_21_i']; }
				if(($row['item_21_i_'.$assessor.''] == "") || ($row['item_21_i_'.$assessor.''] === NULL)){ $output['item_21_i_agreement'] = "empty"; }else{ $output['item_21_i_agreement'] = $row['item_21_i_'.$assessor.'']; }
				$output['item_21_i_agreement_assessor_2'] = $row['item_21_i_assessor_2']; $output['item_21_i_agreement_assessor_3'] = $row['item_21_i_assessor_3'];
			if(($row['item_21_ii'] == "") || ($row['item_21_ii'] === NULL)){ $output['item_21_ii'] = "empty"; }else{ $output['item_21_ii'] = $row['item_21_ii']; }
				if(($row['item_21_ii_'.$assessor.''] == "") || ($row['item_21_ii_'.$assessor.''] === NULL)){ $output['item_21_ii_agreement'] = "empty"; }else{ $output['item_21_ii_agreement'] = $row['item_21_ii_'.$assessor.'']; }
				$output['item_21_ii_agreement_assessor_2'] = $row['item_21_ii_assessor_2']; $output['item_21_ii_agreement_assessor_3'] = $row['item_21_ii_assessor_3'];
			$output['item_21_text'] = $row['item_21_text'];
			//ITEM 22
			if(($row['item_22_i'] == "") || ($row['item_22_i'] === NULL)){ $output['item_22_i'] = "empty"; }else{ $output['item_22_i'] = $row['item_22_i']; }
				if(($row['item_22_i_'.$assessor.''] == "") || ($row['item_22_i_'.$assessor.''] === NULL)){ $output['item_22_i_agreement'] = "empty"; }else{ $output['item_22_i_agreement'] = $row['item_22_i_'.$assessor.'']; }
				$output['item_22_i_agreement_assessor_2'] = $row['item_22_i_assessor_2']; $output['item_22_i_agreement_assessor_3'] = $row['item_22_i_assessor_3'];
			if(($row['item_22_ii'] == "") || ($row['item_22_ii'] === NULL)){ $output['item_22_ii'] = "empty"; }else{ $output['item_22_ii'] = $row['item_22_ii']; }
				if(($row['item_22_ii_'.$assessor.''] == "") || ($row['item_22_ii_'.$assessor.''] === NULL)){ $output['item_22_ii_agreement'] = "empty"; }else{ $output['item_22_ii_agreement'] = $row['item_22_ii_'.$assessor.'']; }
				$output['item_22_ii_agreement_assessor_2'] = $row['item_22_ii_assessor_2']; $output['item_22_ii_agreement_assessor_3'] = $row['item_22_ii_assessor_3'];
			$output['item_22_text'] = $row['item_22_text'];
			//TOTAL
			$output['essential_item_score'] = $row['essential_item_score'];
			
			
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