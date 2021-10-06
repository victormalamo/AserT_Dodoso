<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$connection_error = '';
$output = array();
$reg_assessor_id = $form_data->reg_assessor_id;
if($form_data->action == 'fetch_single_assessor')
{	
	$query = "SELECT * FROM afcg_assessors WHERE (reg_assessor_id = '".$reg_assessor_id."')"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {		 
		  $output['tarehe_kutoka_kwa_mteja'] = $row['tarehe_kutoka_kwa_mteja'];
		  $output['regID'] = $row['assessor_regID'];
		  $output['mkoa'] = $row['assessor_mkoa'];
		  $output['lgaID'] = $row['assessor_lgaID'];
		  $output['halmashauri'] = $row['assessor_halmashauri'];
		  $output['assessor_full_name'] = $row['assessor_full_name'];
		  $output['assessor_profession'] = $row['assessor_profession'];
		  $output['assessor_simu_mobile'] = $row['assessor_simu_mobile'];
		  $output['assessor_barua_pepe'] = $row['assessor_barua_pepe'];
		  $output['assessor_qualification_id'] = $row['assessor_qualification_id'];
		  $output['assessor_qualification_name'] = $row['assessor_qualification_name'];
		  $output['qualification_others'] = $row['qualification_others'];
		  $output['kiambata'] = $row['kiambata'];
		  }
	 }
}
else
{	
		//Update
			if($form_data->action == 'edit_single_assessor')
			{
				$approval = $form_data->approval;
				$insert_or_edit = 'edit';
					$query = "UPDATE afcg_assessors SET assessor_created_by = '$approval' WHERE (reg_assessor_id = '".$reg_assessor_id."')";
					if(mysqli_query($conntscpME, $query))
					{
					$message = 'imefanikiwa';																
					}
					else
					{
					$connection_error = 'tatizo';					
					}		
											
			}
			
	$output = array(
		'connection_error' => $connection_error,
		'message' => $message,
		'insert_or_edit' => $insert_or_edit
	);
	
}

echo json_encode($output);


?>