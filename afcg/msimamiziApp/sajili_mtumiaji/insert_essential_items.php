<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));


$message = '';
$connection_error = '';

//$facility_id = '';
//$essential_item_score = '';
//$item_1_a_i = '';
//$action = '';
//$item_1_a_ii = '';

$output = array();


	$facility_id = $form_data->facility_id;
	$essential_item_score = $form_data->essential_item_score;
	//ITEM 1
	$item_1_a_i = $form_data->item_1_a_i;
	$item_1_a_ii = $form_data->item_1_a_ii;
	$item_1_b_i = $form_data->item_1_b_i;
	$item_1_b_ii = $form_data->item_1_b_ii;
	$item_1_text = $form_data->item_1_text;
	//ITEM 2
	$item_2_i = $form_data->item_2_i;
	$item_2_ii = $form_data->item_2_ii;
	$item_2_text = $form_data->item_2_text;
	//ITEM 3
	$item_3_i = $form_data->item_3_i;
	$item_3_ii = $form_data->item_3_ii;
	$item_3_text = $form_data->item_3_text;
	//ITEM 4
	$item_4_i = $form_data->item_4_i;
	$item_4_ii = $form_data->item_4_ii;
	$item_4_iii = $form_data->item_4_iii;
	$item_4_text = $form_data->item_4_text;
	//ITEM 5
	$item_5_i = $form_data->item_5_i;
	$item_5_ii = $form_data->item_5_ii;
	$item_5_iii = $form_data->item_5_iii;
	$item_5_text = $form_data->item_5_text;
	//ITEM 6
	$item_6_i = $form_data->item_6_i;
	$item_6_ii = $form_data->item_6_ii;
	$item_6_iii = $form_data->item_6_iii;
	$item_6_text = $form_data->item_6_text;
	//ITEM 7
	$item_7_i = $form_data->item_7_i;
	$item_7_ii = $form_data->item_7_ii;
	$item_7_iii = $form_data->item_7_iii;
	$item_7_text = $form_data->item_7_text;
	//ITEM 8
	$item_8_i = $form_data->item_8_i;
	$item_8_ii = $form_data->item_8_ii;
	$item_8_iii = $form_data->item_8_iii;
	$item_8_text = $form_data->item_8_text;
	//ITEM 9
	$item_9_i = $form_data->item_9_i;
	$item_9_ii = $form_data->item_9_ii;
	$item_9_iii = $form_data->item_9_iii;
	$item_9_text = $form_data->item_9_text;
	//ITEM 10
	$item_10_i = $form_data->item_10_i;
	$item_10_ii = $form_data->item_10_ii;
	$item_10_iii = $form_data->item_10_iii;
	$item_10_text = $form_data->item_10_text;
	//ITEM 11
	$item_11_i = $form_data->item_11_i;
	$item_11_ii = $form_data->item_11_ii;
	$item_11_text = $form_data->item_11_text;
	//ITEM 12
	$item_12_i = $form_data->item_12_i;
	$item_12_ii = $form_data->item_12_ii;
	$item_12_iii = $form_data->item_12_iii;
	$item_12_text = $form_data->item_12_text;
	//ITEM 13
	$item_13_i = $form_data->item_13_i;
	$item_13_ii = $form_data->item_13_ii;
	$item_13_iii = $form_data->item_13_iii;
	$item_13_text = $form_data->item_13_text;
	//ITEM 14
	$item_14_i = $form_data->item_14_i;
	$item_14_ii = $form_data->item_14_ii;
	$item_14_iii = $form_data->item_14_iii;
	$item_14_text = $form_data->item_14_text;
	//ITEM 15
	$item_15_i = $form_data->item_15_i;
	$item_15_ii = $form_data->item_15_ii;
	$item_15_iii = $form_data->item_15_iii;
	$item_15_text = $form_data->item_15_text;
	//ITEM 16
	$item_16_i = $form_data->item_16_i;
	$item_16_ii = $form_data->item_16_ii;
	$item_16_text = $form_data->item_16_text;
	//ITEM 17
	$item_17_i = $form_data->item_17_i;
	$item_17_ii = $form_data->item_17_ii;
	$item_17_iii = $form_data->item_17_iii;
	$item_17_text = $form_data->item_17_text;
	//ITEM 18
	$item_18_i = $form_data->item_18_i;
	$item_18_ii = $form_data->item_18_ii;
	$item_18_iii = $form_data->item_18_iii;
	$item_18_text = $form_data->item_18_text;
	//ITEM 19
	$item_19_i = $form_data->item_19_i;
	$item_19_ii = $form_data->item_19_ii;
	$item_19_iii = $form_data->item_19_iii;
	$item_19_text = $form_data->item_19_text;
	//ITEM 20
	$item_20_i = $form_data->item_20_i;
	$item_20_ii = $form_data->item_20_ii;
	$item_20_iii = $form_data->item_20_iii;
	$item_20_text = $form_data->item_20_text;
	//ITEM 21
	$item_21_i = $form_data->item_21_i;
	$item_21_ii = $form_data->item_21_ii;
	$item_21_text = $form_data->item_21_text;
	//ITEM 22
	$item_22_i = $form_data->item_22_i;
	$item_22_ii = $form_data->item_22_ii;
	$item_22_text = $form_data->item_22_text;	
	
			 ///Insert
			 if($form_data->action == 'insert_record')
			 {
			
				$query = "INSERT INTO afcg_essential_items (
				facility_id, essential_item_score, 
				item_1_a_i, item_1_a_ii, item_1_b_i, item_1_b_ii, item_1_text, 
				item_2_i, item_2_ii, item_2_text, 
				item_3_i, item_3_ii, item_3_text, 
				item_4_i, item_4_ii, item_4_iii, item_4_text,
				item_5_i, item_5_ii, item_5_iii, item_5_text,
				item_6_i, item_6_ii, item_6_iii, item_6_text,
				item_7_i, item_7_ii, item_7_iii, item_7_text,
				item_8_i, item_8_ii, item_8_iii, item_8_text,
				item_9_i, item_9_ii, item_9_iii, item_9_text,
				item_10_i, item_10_ii, item_10_iii, item_10_text,
				item_11_i, item_11_ii, item_11_text,
				item_12_i, item_12_ii, item_12_iii, item_12_text,
				item_13_i, item_13_ii, item_13_iii, item_13_text,
				item_14_i, item_14_ii, item_14_iii, item_14_text,
				item_15_i, item_15_ii, item_15_iii, item_15_text,
				item_16_i, item_16_ii, item_16_text,
				item_17_i, item_17_ii, item_17_iii, item_17_text,
				item_18_i, item_18_ii, item_18_iii, item_18_text,
				item_19_i, item_19_ii, item_19_iii, item_19_text,
				item_20_i, item_20_ii, item_20_iii, item_20_text,
				item_21_i, item_21_ii, item_21_text,
				item_22_i, item_22_ii, item_22_text
				)VALUES(
				'$facility_id', '$essential_item_score', 
				'$item_1_a_i', '$item_1_a_ii', '$item_1_b_i', '$item_1_b_ii', '$item_1_text', 
				'$item_2_i', '$item_2_ii', '$item_2_text', 
				'$item_3_i', '$item_3_ii', '$item_3_text', 
				'$item_4_i', '$item_4_ii', '$item_4_iii', '$item_4_text',
				'$item_5_i', '$item_5_ii', '$item_5_iii', '$item_5_text',
				'$item_6_i', '$item_6_ii', '$item_6_iii', '$item_6_text',
				'$item_7_i', '$item_7_ii', '$item_7_iii', '$item_7_text',
				'$item_8_i', '$item_8_ii', '$item_8_iii', '$item_8_text',
				'$item_9_i', '$item_9_ii', '$item_9_iii', '$item_9_text',
				'$item_10_i', '$item_10_ii', '$item_10_iii', '$item_10_text',
				'$item_11_i', '$item_11_ii', '$item_11_text', 
				'$item_12_i', '$item_12_ii', '$item_12_iii', '$item_12_text',
				'$item_13_i', '$item_13_ii', '$item_13_iii', '$item_13_text',
				'$item_14_i', '$item_14_ii', '$item_14_iii', '$item_14_text',
				'$item_15_i', '$item_15_ii', '$item_15_iii', '$item_15_text',
				'$item_16_i', '$item_16_ii', '$item_16_text', 
				'$item_17_i', '$item_17_ii', '$item_17_iii', '$item_17_text',
				'$item_18_i', '$item_18_ii', '$item_18_iii', '$item_18_text',
				'$item_19_i', '$item_19_ii', '$item_19_iii', '$item_19_text',
				'$item_20_i', '$item_20_ii', '$item_20_iii', '$item_20_text',
				'$item_21_i', '$item_21_ii', '$item_21_text', 
				'$item_22_i', '$item_22_ii', '$item_22_text'
				)";
				if(mysqli_query($conntscpME, $query)) {
					$message = 'imefanikiwa';
						$query_max_id = "SELECT MAX(id) AS id FROM afcg_essential_items";
						$result_max_id = mysqli_query($conntscpME, $query_max_id);
						$row_max_id = mysqli_fetch_array($result_max_id);
						if(mysqli_query($conntscpME, $query_max_id)) {
							$essential_items_id = $row_max_id['id'];
								///update scores and id in facilities table
								$query_update_scores = "UPDATE afcg_registered_facilities SET essential_items_id = '$essential_items_id', essential_item_score = '$essential_item_score' WHERE id = '$facility_id'";
								if (mysqli_query($conntscpME, $query_update_scores)) {
								$message = 'imefanikiwa';
								}else{
								$connection_error = 'tatizo';
								}						
						}
						else
						{
							$connection_error = 'tatizo';
						}
				}else{
				$connection_error = 'tatizo';
				}		
				
			}
			elseif($form_data->action == 'edit_record')
			{

					$essential_items_id = $form_data->essential_items_id;
					$query = "UPDATE afcg_essential_items SET 
					essential_item_score = '$essential_item_score', 
					item_1_a_i = '$item_1_a_i', item_1_a_ii = '$item_1_a_ii', item_1_b_i = '$item_1_b_i', item_1_b_ii = '$item_1_b_ii', item_1_text = '$item_1_text', 
					item_2_i = '$item_2_i', item_2_ii = '$item_2_ii', item_2_text = '$item_2_text', 
					item_3_i = '$item_3_i', item_3_ii = '$item_3_ii', item_3_text = '$item_3_text', 
					item_4_i = '$item_4_i', item_4_ii = '$item_4_ii', item_4_iii = '$item_4_iii', item_4_text = '$item_4_text',
					item_5_i = '$item_5_i', item_5_ii = '$item_5_ii', item_5_iii = '$item_5_iii', item_5_text = '$item_5_text',
					item_6_i = '$item_6_i', item_6_ii = '$item_6_ii', item_6_iii = '$item_6_iii', item_6_text = '$item_6_text',
					item_7_i = '$item_7_i', item_7_ii = '$item_7_ii', item_7_iii = '$item_7_iii', item_7_text = '$item_7_text',
					item_8_i = '$item_8_i', item_8_ii = '$item_8_ii', item_8_iii = '$item_8_iii', item_8_text = '$item_8_text',
					item_9_i = '$item_9_i', item_9_ii = '$item_9_ii', item_9_iii = '$item_9_iii', item_9_text = '$item_9_text',
					item_10_i = '$item_10_i', item_10_ii = '$item_10_ii', item_10_iii = '$item_10_iii', item_10_text = '$item_10_text',
					item_11_i = '$item_11_i', item_11_ii = '$item_11_ii', item_11_text = '$item_11_text',
					item_12_i = '$item_12_i', item_12_ii = '$item_12_ii', item_12_iii = '$item_12_iii', item_12_text = '$item_12_text',
					item_13_i = '$item_13_i', item_13_ii = '$item_13_ii', item_13_iii = '$item_13_iii', item_13_text = '$item_13_text',
					item_14_i = '$item_14_i', item_14_ii = '$item_14_ii', item_14_iii = '$item_14_iii', item_14_text = '$item_14_text',
					item_15_i = '$item_15_i', item_15_ii = '$item_15_ii', item_15_iii = '$item_15_iii', item_15_text = '$item_15_text',
					item_16_i = '$item_16_i', item_16_ii = '$item_16_ii', item_16_text = '$item_16_text',
					item_17_i = '$item_17_i', item_17_ii = '$item_17_ii', item_17_iii = '$item_17_iii', item_17_text = '$item_17_text',
					item_18_i = '$item_18_i', item_18_ii = '$item_18_ii', item_18_iii = '$item_18_iii', item_18_text = '$item_18_text',
					item_19_i = '$item_19_i', item_19_ii = '$item_19_ii', item_19_iii = '$item_19_iii', item_19_text = '$item_19_text',
					item_20_i = '$item_20_i', item_20_ii = '$item_20_ii', item_20_iii = '$item_20_iii', item_20_text = '$item_20_text',
					item_21_i = '$item_21_i', item_21_ii = '$item_21_ii', item_21_text = '$item_21_text',
					item_22_i = '$item_22_i', item_22_ii = '$item_22_ii', item_22_text = '$item_22_text'
					WHERE (id = '".$essential_items_id."')";
					if(mysqli_query($conntscpME, $query)){
						///update scores in facilities table
						$query_update_scores = "UPDATE afcg_registered_facilities SET essential_item_score = '$essential_item_score' WHERE id = '$facility_id'";
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
		'essential_items_id' => $essential_items_id,
		'connection_error' => $connection_error,
		'message' => $message
		);
	

echo json_encode($output);


?>