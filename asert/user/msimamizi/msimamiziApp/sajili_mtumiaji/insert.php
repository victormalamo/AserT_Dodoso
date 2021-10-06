<?php
require_once('../../../../Connections/connmnrtsafari.php'); 

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$levelID = '';
$level_name = '';
$f_name = '';
$m_name = '';
$l_name = '';
$mob = '';
$e_add = '';
$leseni = '';
$pf_no = '';
$cheo_ID = '';
$jina_la_cheo = '';
$ngazi_ya_mshahara = '';
$daraja_la_mshahara = '';
$div_unit_ID = '';
$div_unit_kirefu = '';
$div_au_unit = '';
$section_ID = '';
$section_name = '';
$mfanyakazi_id = '';

$output = [];

//////////////////////////////////////////

if($form_data->action == 'fetch_single_data')
{
	$mfanyakazi_id = $form_data->mfanyakazi_id;
	//$div_unit_ID = $form_data->div_unit_ID;
	$query = "SELECT wafanyakazi.*, divisions_units.*, sections.*, vyeo.*, user_level.* FROM wafanyakazi, divisions_units, sections, vyeo, user_level WHERE ((wafanyakazi.id = '".$mfanyakazi_id."') AND (wafanyakazi.div_unit_ID = divisions_units.div_unit_ID) AND (wafanyakazi.section_ID = sections.section_ID)  AND (wafanyakazi.cheo_ID = vyeo.cheo_ID) AND (wafanyakazi.levelID = user_level.levelID))"; 
	$result = mysqli_query($conntscpME, $query);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
		 {
		  $output['levelID'] = $row['levelID'];
		  $output['level_name'] = $row['level_name'];
		  $output['f_name'] = $row['f_name'];
		  $output['m_name'] = $row['m_name'];
		  $output['l_name'] = $row['l_name'];
		  $output['username'] = $row['username'];
		  $output['mob'] = $row['mob'];
		  $output['e_add'] = $row['e_add'];
		  $output['leseni'] = $row['leseni'];
		  $output['pf_no'] = $row['pf_no'];
		  $output['cheo_ID'] = $row['cheo_ID'];
		  $output['jina_la_cheo'] = $row['jina_la_cheo'];
		  $output['ngazi_ya_mshahara'] = $row['ngazi_ya_mshahara'];
		  $output['daraja_la_mshahara'] = $row['daraja_la_mshahara'];
		  $output['div_unit_ID'] = $row['div_unit_ID'];
		  $output['div_unit_kirefu'] = $row['div_unit_kirefu'];
		  $output['div_au_unit'] = $row['div_au_unit'];
		  $output['section_ID'] = $row['section_ID'];
		  $output['section_name_kirefu'] = $row['section_name_kirefu'];
		 }
	 }
}
elseif($form_data->action == 'Delete')
{
	$mfanyakazi_id = $form_data->mfanyakazi_id;
	$query = "DELETE FROM wafanyakazi WHERE id='".$mfanyakazi_id."'";
	if (mysqli_query($conntscpME, $query)) {
	$output['message'] = 'Deleted';
	}else{
	$output['message'] = 'Not_Deleted';
	}
}
else
{

/*
if(empty($form_data->div_unit_ID))
{
 $error[] = 'Idara..';
}
else
{
$div_unit_ID = $form_data->div_unit_ID;
}
*/
$levelID = $form_data->levelID;
if($levelID == 'w'){ $levelID_group = 'Waziri'; }
elseif($levelID == 'nw'){ $levelID_group = 'Naibu Waziri'; }
elseif($levelID == 'ps'){ $levelID_group = 'Katibu Mkuu'; }
elseif($levelID == 'dps'){ $levelID_group = 'Naibu Katibu Mkuu'; }
elseif(($levelID == 'hod') || ($levelID == 'dahrm')) { $levelID_group = 'Mkuu wa Idara'; }
elseif(($levelID == 'ca') || ($levelID == 'hu') || ($levelID == 'pmu')){ $levelID_group = 'Mkuu wa Kitengo'; }
elseif($levelID == 'hos'){ $levelID_group = 'Mkuu wa Sehemu'; }
elseif(($levelID == 'masijala') || ($levelID == 'nu')  || ($levelID == 'to')  || ($levelID == 'ra')  || ($levelID == 'tae') ){ $levelID_group = 'Mtumishi Mwingine'; }
elseif($levelID == 'driver'){ $levelID_group = 'Dereva'; };

if( (empty($form_data->div_unit_ID)) && (($levelID == 'w') || ($levelID == 'nw')  || ($levelID == 'ps')  || ($levelID == 'dps')  || ($levelID == 'dahrm') || ($levelID == 'to')  || ($levelID == 'masijala') || ($levelID == 'driver') )){ $div_unit_ID = '1001'; }
elseif( (empty($form_data->div_unit_ID)) && (($levelID == 'ca') || ($levelID == 'ra')  || ($levelID == 'tae') )){ $div_unit_ID = '1002'; }
elseif( (empty($form_data->div_unit_ID)) && ($levelID == 'pmu') ){ $div_unit_ID = '1006'; }
else{ $div_unit_ID = $form_data->div_unit_ID; };
if(empty($form_data->section_ID)){ $section_ID = '999999'; }else{ $section_ID = $form_data->section_ID; };

//$div_unit_ID = $form_data->div_unit_ID;
$div_au_unit = $form_data->div_au_unit;
//$section_ID = $form_data->section_ID;
$f_name = $form_data->f_name;
$m_name = $form_data->m_name;
$l_name = $form_data->l_name;
$e_add = $form_data->e_add;
$mob = $form_data->mob;
$username = $form_data->username; //cheki namba
$leseni = $form_data->leseni;
$pf_no = $form_data->pf_no;
$cheo_ID = $form_data->cheo_ID;
$ngazi_ya_mshahara = $form_data->ngazi_ya_mshahara;
$daraja_la_mshahara = $form_data->daraja_la_mshahara;

//$password_row = '123456';
$password = md5($mob);
$password_mabadiliko = "tmp_".time();
$min_id = 69;
$deligatable = 'yes';
$active = 'yes';

if($levelID == 'hu'){ $levelID = 'hod'; }else{ $levelID = $levelID; }
	
	//if(empty($error))
	//{
			 ///Insert
			 if($form_data->action == 'Sajili')
			 {					  
				$query = "INSERT INTO wafanyakazi (min_id, f_name, m_name, l_name, pf_no, mob, e_add, div_unit_ID, div_au_unit, section_ID, cheo_ID, ngazi_ya_mshahara, daraja_la_mshahara, levelID, levelID_group, leseni, active, deligatable, username, password, password_mabadiliko) VALUES ('$min_id', '$f_name', '$m_name', '$l_name', '$pf_no', '$mob', '$e_add', '$div_unit_ID', '$div_au_unit', '$section_ID', '$cheo_ID', '$ngazi_ya_mshahara', '$daraja_la_mshahara', '$levelID', '$levelID_group', '$leseni', '$active', '$deligatable', '$username', '$password', '$password_mabadiliko')";
				if (mysqli_query($conntscpME, $query)) {
				$message = 'Data added successfully';
				}else{
				$message = 'Data Insert Failed';
				}
			  }
			  
			///Edit
			if($form_data->action == 'Save')
			{
				$mfanyakazi_id = $form_data->mfanyakazi_id;
				$query = "UPDATE wafanyakazi SET f_name = '$f_name', m_name = '$m_name', l_name = '$l_name', pf_no = '$pf_no', mob = '$mob', e_add = '$e_add', div_unit_ID = '$div_unit_ID', div_au_unit = '$div_au_unit', section_ID = '$section_ID',cheo_ID = '$cheo_ID', ngazi_ya_mshahara = '$ngazi_ya_mshahara',	daraja_la_mshahara = '$daraja_la_mshahara',	levelID = '$levelID', levelID_group = '$levelID_group', leseni = '$leseni' WHERE id = '$mfanyakazi_id'";
				if (mysqli_query($conntscpME, $query)) {
					$message = 'Data Updated Successfully...';					
				} else {
					$message = 'Data Update Failed';					
				}								
			}
			  
			
	//}
	// else
	//{
	//	  $validation_error = implode(", ", $error);		 
	//}
	$validation_error = '';
	$output = array(
		'error'  => $validation_error,
		'message' => $message
	);

}

echo json_encode($output);

?>