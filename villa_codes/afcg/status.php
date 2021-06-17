<?php 
require_once('../../Connections/connmnrtsafari.php'); 
session_start();
$output = array();
//Idadi incomplete
$query_incomplete = "SELECT * FROM afcg_registered_facilities WHERE (((username = '".$_SESSION['username']."') || ((group_admin_username = '".$_SESSION['username']."') AND (username != '".$_SESSION['username']."'))) AND ((general_status = 'mapya') || (general_status = 'sent_for_approval') || (general_status = 'approved')))";
$rs_incomplete = mysqli_query($conntscpME, $query_incomplete) or die(mysqli_error());
$row_incomplete = mysqli_fetch_assoc($rs_incomplete);
$idadi_incomplete = mysqli_num_rows($rs_incomplete);

//approved - for essential items stage
//$query_approved = "SELECT * FROM afcg_registered_facilities WHERE (((username = '".$_SESSION['username']."') || ((group_admin_username = '".$_SESSION['username']."') AND (username != '".$_SESSION['username']."'))) AND (general_status = 'approved'))";
$query_approved = "SELECT afcg_registered_facilities.*, afcg_assessors_vs_facilities.* FROM afcg_registered_facilities, afcg_assessors_vs_facilities WHERE ((afcg_registered_facilities.id = afcg_assessors_vs_facilities.facility_id) AND (afcg_assessors_vs_facilities.assessor_username = '".$_SESSION['username']."') AND (general_status = 'approved'))";
$rs_approved = mysqli_query($conntscpME, $query_approved) or die(mysqli_error());
$row_approved = mysqli_fetch_assoc($rs_approved);
$idadi_approved = mysqli_num_rows($rs_approved);

//eligible for assessment
/*$query_eligible_for_assessment = "SELECT * FROM afcg_registered_facilities WHERE (((username = '".$_SESSION['username']."') || ((group_admin_username = '".$_SESSION['username']."') AND (username != '".$_SESSION['username']."'))) AND (essential_item_score >= 75))";*/
$query_eligible_for_assessment = "SELECT afcg_registered_facilities.*, afcg_assessors_vs_facilities.* FROM afcg_registered_facilities, afcg_assessors_vs_facilities WHERE ((afcg_registered_facilities.id = afcg_assessors_vs_facilities.facility_id) AND (afcg_assessors_vs_facilities.assessor_username = '".$_SESSION['username']."') AND (afcg_registered_facilities.essential_item_score >= 75))";
$rs_eligible_for_assessment = mysqli_query($conntscpME, $query_eligible_for_assessment) or die(mysqli_error());
$row_eligible_for_assessment = mysqli_fetch_assoc($rs_eligible_for_assessment);
$idadi_eligible_for_assessment = mysqli_num_rows($rs_eligible_for_assessment);

	$output = array(
		'idadi_incomplete' => $idadi_incomplete,
		'idadi_approved' => $idadi_approved,
		'idadi_eligible_for_assessment' => $idadi_eligible_for_assessment
	);
	
echo json_encode($output);
?>