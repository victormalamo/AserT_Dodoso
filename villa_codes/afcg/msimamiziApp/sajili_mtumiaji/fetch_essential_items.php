<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));
	$message = '';
	$connection_error = '';
	$output = array();
	$essential_items_id = $form_data->essential_items_id;
	$query = "SELECT * FROM afcg_essential_items WHERE (id = '".$essential_items_id."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  
			//ITEM 1
			if(($row['item_1_a_i'] == "") || ($row['item_1_a_i'] === NULL)){ $output['item_1_a_i'] = "empty"; }else{ $output['item_1_a_i'] = $row['item_1_a_i']; }
			if(($row['item_1_a_ii'] == "") || ($row['item_1_a_ii'] === NULL)){ $output['item_1_a_ii'] = "empty"; }else{ $output['item_1_a_ii'] = $row['item_1_a_ii']; }
			if(($row['item_1_b_i'] == "") || ($row['item_1_b_i'] === NULL)){ $output['item_1_b_i'] = "empty"; }else{ $output['item_1_b_i'] = $row['item_1_b_i']; }
			if(($row['item_1_b_ii'] == "") || ($row['item_1_b_ii'] === NULL)){ $output['item_1_b_ii'] = "empty"; }else{ $output['item_1_b_ii'] = $row['item_1_b_ii']; }
			$output['item_1_text'] = $row['item_1_text'];
			//ITEM 2
			if(($row['item_2_i'] == "") || ($row['item_2_i'] === NULL)){ $output['item_2_i'] = "empty"; }else{ $output['item_2_i'] = $row['item_2_i']; }
			if(($row['item_2_ii'] == "") || ($row['item_2_ii'] === NULL)){ $output['item_2_ii'] = "empty"; }else{ $output['item_2_ii'] = $row['item_2_ii']; }
			$output['item_2_text'] = $row['item_2_text'];
			//ITEM 3
			if(($row['item_3_i'] == "") || ($row['item_3_i'] === NULL)){ $output['item_3_i'] = "empty"; }else{ $output['item_3_i'] = $row['item_3_i']; }
			if(($row['item_3_ii'] == "") || ($row['item_3_ii'] === NULL)){ $output['item_3_ii'] = "empty"; }else{ $output['item_3_ii'] = $row['item_3_ii']; }
			$output['item_3_text'] = $row['item_3_text'];
			//ITEM 4
			if(($row['item_4_i'] == "") || ($row['item_4_i'] === NULL)){ $output['item_4_i'] = "empty"; }else{ $output['item_4_i'] = $row['item_4_i']; }
			if(($row['item_4_ii'] == "") || ($row['item_4_ii'] === NULL)){ $output['item_4_ii'] = "empty"; }else{ $output['item_4_ii'] = $row['item_4_ii']; }
			if(($row['item_4_iii'] == "") || ($row['item_4_iii'] === NULL)){ $output['item_4_iii'] = "empty"; }else{ $output['item_4_iii'] = $row['item_4_iii']; }
			$output['item_4_text'] = $row['item_4_text'];
			//ITEM 5
			if(($row['item_5_i'] == "") || ($row['item_5_i'] === NULL)){ $output['item_5_i'] = "empty"; }else{ $output['item_5_i'] = $row['item_5_i']; }
			if(($row['item_5_ii'] == "") || ($row['item_5_ii'] === NULL)){ $output['item_5_ii'] = "empty"; }else{ $output['item_5_ii'] = $row['item_5_ii']; }
			if(($row['item_5_iii'] == "") || ($row['item_5_iii'] === NULL)){ $output['item_5_iii'] = "empty"; }else{ $output['item_5_iii'] = $row['item_5_iii']; }
			$output['item_5_text'] = $row['item_5_text'];
			//ITEM 6
			if(($row['item_6_i'] == "") || ($row['item_6_i'] === NULL)){ $output['item_6_i'] = "empty"; }else{ $output['item_6_i'] = $row['item_6_i']; }
			if(($row['item_6_ii'] == "") || ($row['item_6_ii'] === NULL)){ $output['item_6_ii'] = "empty"; }else{ $output['item_6_ii'] = $row['item_6_ii']; }
			if(($row['item_6_iii'] == "") || ($row['item_6_iii'] === NULL)){ $output['item_6_iii'] = "empty"; }else{ $output['item_6_iii'] = $row['item_6_iii']; }
			$output['item_6_text'] = $row['item_6_text'];
			//ITEM 7
			if(($row['item_7_i'] == "") || ($row['item_7_i'] === NULL)){ $output['item_7_i'] = "empty"; }else{ $output['item_7_i'] = $row['item_7_i']; }
			if(($row['item_7_ii'] == "") || ($row['item_7_ii'] === NULL)){ $output['item_7_ii'] = "empty"; }else{ $output['item_7_ii'] = $row['item_7_ii']; }
			if(($row['item_7_iii'] == "") || ($row['item_7_iii'] === NULL)){ $output['item_7_iii'] = "empty"; }else{ $output['item_7_iii'] = $row['item_7_iii']; }
			$output['item_7_text'] = $row['item_7_text'];
			//ITEM 8
			if(($row['item_8_i'] == "") || ($row['item_8_i'] === NULL)){ $output['item_8_i'] = "empty"; }else{ $output['item_8_i'] = $row['item_8_i']; }
			if(($row['item_8_ii'] == "") || ($row['item_8_ii'] === NULL)){ $output['item_8_ii'] = "empty"; }else{ $output['item_8_ii'] = $row['item_8_ii']; }
			if(($row['item_8_iii'] == "") || ($row['item_8_iii'] === NULL)){ $output['item_8_iii'] = "empty"; }else{ $output['item_8_iii'] = $row['item_8_iii']; }
			$output['item_8_text'] = $row['item_8_text'];
			//ITEM 9
			if(($row['item_9_i'] == "") || ($row['item_9_i'] === NULL)){ $output['item_9_i'] = "empty"; }else{ $output['item_9_i'] = $row['item_9_i']; }
			if(($row['item_9_ii'] == "") || ($row['item_9_ii'] === NULL)){ $output['item_9_ii'] = "empty"; }else{ $output['item_9_ii'] = $row['item_9_ii']; }
			if(($row['item_9_iii'] == "") || ($row['item_9_iii'] === NULL)){ $output['item_9_iii'] = "empty"; }else{ $output['item_9_iii'] = $row['item_9_iii']; }
			$output['item_9_text'] = $row['item_9_text'];
			//ITEM 10
			if(($row['item_10_i'] == "") || ($row['item_10_i'] === NULL)){ $output['item_10_i'] = "empty"; }else{ $output['item_10_i'] = $row['item_10_i']; }
			if(($row['item_10_ii'] == "") || ($row['item_10_ii'] === NULL)){ $output['item_10_ii'] = "empty"; }else{ $output['item_10_ii'] = $row['item_10_ii']; }
			if(($row['item_10_iii'] == "") || ($row['item_10_iii'] === NULL)){ $output['item_10_iii'] = "empty"; }else{ $output['item_10_iii'] = $row['item_10_iii']; }
			$output['item_10_text'] = $row['item_10_text'];
			//ITEM 11
			if(($row['item_11_i'] == "") || ($row['item_11_i'] === NULL)){ $output['item_11_i'] = "empty"; }else{ $output['item_11_i'] = $row['item_11_i']; }
			if(($row['item_11_ii'] == "") || ($row['item_11_ii'] === NULL)){ $output['item_11_ii'] = "empty"; }else{ $output['item_11_ii'] = $row['item_11_ii']; }
			$output['item_11_text'] = $row['item_11_text'];
			//ITEM 12
			if(($row['item_12_i'] == "") || ($row['item_12_i'] === NULL)){ $output['item_12_i'] = "empty"; }else{ $output['item_12_i'] = $row['item_12_i']; }
			if(($row['item_12_ii'] == "") || ($row['item_12_ii'] === NULL)){ $output['item_12_ii'] = "empty"; }else{ $output['item_12_ii'] = $row['item_12_ii']; }
			if(($row['item_12_iii'] == "") || ($row['item_12_iii'] === NULL)){ $output['item_12_iii'] = "empty"; }else{ $output['item_12_iii'] = $row['item_12_iii']; }
			$output['item_12_text'] = $row['item_12_text'];
			//ITEM 13
			if(($row['item_13_i'] == "") || ($row['item_13_i'] === NULL)){ $output['item_13_i'] = "empty"; }else{ $output['item_13_i'] = $row['item_13_i']; }
			if(($row['item_13_ii'] == "") || ($row['item_13_ii'] === NULL)){ $output['item_13_ii'] = "empty"; }else{ $output['item_13_ii'] = $row['item_13_ii']; }
			if(($row['item_13_iii'] == "") || ($row['item_13_iii'] === NULL)){ $output['item_13_iii'] = "empty"; }else{ $output['item_13_iii'] = $row['item_13_iii']; }
			$output['item_13_text'] = $row['item_13_text'];
			//ITEM 14
			if(($row['item_14_i'] == "") || ($row['item_14_i'] === NULL)){ $output['item_14_i'] = "empty"; }else{ $output['item_14_i'] = $row['item_14_i']; }
			if(($row['item_14_ii'] == "") || ($row['item_14_ii'] === NULL)){ $output['item_14_ii'] = "empty"; }else{ $output['item_14_ii'] = $row['item_14_ii']; }
			if(($row['item_14_iii'] == "") || ($row['item_14_iii'] === NULL)){ $output['item_14_iii'] = "empty"; }else{ $output['item_14_iii'] = $row['item_14_iii']; }
			$output['item_14_text'] = $row['item_14_text'];
			//ITEM 15
			if(($row['item_15_i'] == "") || ($row['item_15_i'] === NULL)){ $output['item_15_i'] = "empty"; }else{ $output['item_15_i'] = $row['item_15_i']; }
			if(($row['item_15_ii'] == "") || ($row['item_15_ii'] === NULL)){ $output['item_15_ii'] = "empty"; }else{ $output['item_15_ii'] = $row['item_15_ii']; }
			if(($row['item_15_iii'] == "") || ($row['item_15_iii'] === NULL)){ $output['item_15_iii'] = "empty"; }else{ $output['item_15_iii'] = $row['item_15_iii']; }
			$output['item_15_text'] = $row['item_15_text'];
			//ITEM 16
			if(($row['item_16_i'] == "") || ($row['item_16_i'] === NULL)){ $output['item_16_i'] = "empty"; }else{ $output['item_16_i'] = $row['item_16_i']; }
			if(($row['item_16_ii'] == "") || ($row['item_16_ii'] === NULL)){ $output['item_16_ii'] = "empty"; }else{ $output['item_16_ii'] = $row['item_16_ii']; }
			$output['item_16_text'] = $row['item_16_text'];
			//ITEM 17
			if(($row['item_17_i'] == "") || ($row['item_17_i'] === NULL)){ $output['item_17_i'] = "empty"; }else{ $output['item_17_i'] = $row['item_17_i']; }
			if(($row['item_17_ii'] == "") || ($row['item_17_ii'] === NULL)){ $output['item_17_ii'] = "empty"; }else{ $output['item_17_ii'] = $row['item_17_ii']; }
			if(($row['item_17_iii'] == "") || ($row['item_17_iii'] === NULL)){ $output['item_17_iii'] = "empty"; }else{ $output['item_17_iii'] = $row['item_17_iii']; }
			$output['item_17_text'] = $row['item_17_text'];
			//ITEM 18
			if(($row['item_18_i'] == "") || ($row['item_18_i'] === NULL)){ $output['item_18_i'] = "empty"; }else{ $output['item_18_i'] = $row['item_18_i']; }
			if(($row['item_18_ii'] == "") || ($row['item_18_ii'] === NULL)){ $output['item_18_ii'] = "empty"; }else{ $output['item_18_ii'] = $row['item_18_ii']; }
			if(($row['item_18_iii'] == "") || ($row['item_18_iii'] === NULL)){ $output['item_18_iii'] = "empty"; }else{ $output['item_18_iii'] = $row['item_18_iii']; }
			$output['item_18_text'] = $row['item_18_text'];
			//ITEM 19
			if(($row['item_19_i'] == "") || ($row['item_19_i'] === NULL)){ $output['item_19_i'] = "empty"; }else{ $output['item_19_i'] = $row['item_19_i']; }
			if(($row['item_19_ii'] == "") || ($row['item_19_ii'] === NULL)){ $output['item_19_ii'] = "empty"; }else{ $output['item_19_ii'] = $row['item_19_ii']; }
			if(($row['item_19_iii'] == "") || ($row['item_19_iii'] === NULL)){ $output['item_19_iii'] = "empty"; }else{ $output['item_19_iii'] = $row['item_19_iii']; }
			$output['item_19_text'] = $row['item_19_text'];
			//ITEM 20
			if(($row['item_20_i'] == "") || ($row['item_20_i'] === NULL)){ $output['item_20_i'] = "empty"; }else{ $output['item_20_i'] = $row['item_20_i']; }
			if(($row['item_20_ii'] == "") || ($row['item_20_ii'] === NULL)){ $output['item_20_ii'] = "empty"; }else{ $output['item_20_ii'] = $row['item_20_ii']; }
			if(($row['item_20_iii'] == "") || ($row['item_20_iii'] === NULL)){ $output['item_20_iii'] = "empty"; }else{ $output['item_20_iii'] = $row['item_20_iii']; }
			$output['item_20_text'] = $row['item_20_text'];
			//ITEM 21
			if(($row['item_21_i'] == "") || ($row['item_21_i'] === NULL)){ $output['item_21_i'] = "empty"; }else{ $output['item_21_i'] = $row['item_21_i']; }
			if(($row['item_21_ii'] == "") || ($row['item_21_ii'] === NULL)){ $output['item_21_ii'] = "empty"; }else{ $output['item_21_ii'] = $row['item_21_ii']; }
			$output['item_21_text'] = $row['item_21_text'];
			//ITEM 22
			if(($row['item_22_i'] == "") || ($row['item_22_i'] === NULL)){ $output['item_22_i'] = "empty"; }else{ $output['item_22_i'] = $row['item_22_i']; }
			if(($row['item_22_ii'] == "") || ($row['item_22_ii'] === NULL)){ $output['item_22_ii'] = "empty"; }else{ $output['item_22_ii'] = $row['item_22_ii']; }
			$output['item_22_text'] = $row['item_22_text'];
			
			
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