<?php  
require_once('../../../../Connections/connmnrtsafari.php'); 

$output = []; 
$data = json_decode(file_get_contents("php://input")); 
$levelID = $data->levelID;
$div_unit_ID = $data->div_unit_ID;


	if(($levelID == 'w') || ($levelID == 'nw') || ($levelID == 'ps') || ($levelID == 'dps') || ($levelID == 'ca') || ($levelID == 'hod') || ($levelID == 'hos'))
	{
		$query = "SELECT * FROM vyeo WHERE levelID = '$levelID'"; 
		$result = mysqli_query($conntscpME, $query);
				
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	}
	elseif($levelID == 'dahrm')
	{
		$query = "SELECT * FROM vyeo WHERE (levelID = 'hod') ORDER BY id ASC"; 
		$result = mysqli_query($conntscpME, $query);
		
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	}
	elseif($levelID == 'driver')
	{
		$query = "SELECT * FROM vyeo WHERE (levelID = 'driver') ORDER BY id ASC"; 
		$result = mysqli_query($conntscpME, $query);
		
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	}
	/*elseif($levelID == 'nu')
	{
		$query = "SELECT * FROM vyeo WHERE (levelID = '$div_unit_ID') ORDER BY id ASC"; 
		$result = mysqli_query($conntscpME, $query);
		
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	}*/
	else
	{
		$query = "SELECT * FROM vyeo WHERE ((levelID IS NULL) || (levelID = '')) ORDER BY id ASC"; 
		$result = mysqli_query($conntscpME, $query);
		
		while($row = mysqli_fetch_array($result))  
		{  
			$output[] = $row;  
		}
	}
	
echo json_encode($output);
?>  