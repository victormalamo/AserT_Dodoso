<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));
$output = []; 

if($form_data->action == 'fetch_single_idara')
{
	$levelID = $form_data->levelID;
	if(($levelID == 'w') || ($levelID == 'nw') || ($levelID == 'ps') || ($levelID == 'dps') || ($levelID == 'dahrm') || ($levelID == 'to') || ($levelID == 'driver') || ($levelID == 'masijala'))
	{ $div_unit_ID  = '1001'; }
	elseif(($levelID == 'ca') || ($levelID == 'tae') || ($levelID == 'ra'))
	{ $div_unit_ID  = '1002'; }
	elseif($levelID == 'pmu'){ $div_unit_ID  = '1006'; }
	
		$query = "SELECT * FROM divisions_units WHERE (div_unit_ID = '$div_unit_ID')"; 
		$result = mysqli_query($conntscpME, $query);
		
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;  
		 }
}
else
{
	$query = "SELECT * FROM divisions_units ORDER BY div_au_unit ASC, div_unit_kirefu ASC"; 
	 $result = mysqli_query($conntscpME, $query);
	 
		 while($row = mysqli_fetch_array($result))  
		 {  
			  $output[] = $row;
		 }
}

	echo json_encode($output);  

?>  