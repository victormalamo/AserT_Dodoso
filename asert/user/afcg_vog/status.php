<?php 
require_once('../../Connections/connmnrtsafari.php'); 
//session_start();
$output = array();
//New facilities
$query_new_facilities = "SELECT * FROM afcg_registered_facilities WHERE general_status = 'sent_for_approval'";
$rs_new_facilities = mysqli_query($conntscpME, $query_new_facilities) or die(mysqli_error());
$row_new_facilities = mysqli_fetch_assoc($rs_new_facilities);
$idadi_new_facilities = mysqli_num_rows($rs_new_facilities);

//Approved facilities
$query_approved_facilities = "SELECT * FROM afcg_registered_facilities WHERE general_status = 'approved'";
$rs_approved_facilities = mysqli_query($conntscpME, $query_approved_facilities) or die(mysqli_error());
$row_approved_facilities = mysqli_fetch_assoc($rs_approved_facilities);
$idadi_approved_facilities = mysqli_num_rows($rs_approved_facilities);

//New assessors
$query_new_assessors = "SELECT * FROM afcg_assessors WHERE ((assessor_created_by is NULL) || (assessor_created_by = ''))";
$rs_new_assessors = mysqli_query($conntscpME, $query_new_assessors) or die(mysqli_error());
$row_new_assessors = mysqli_fetch_assoc($rs_new_assessors);
$idadi_new_assessors = mysqli_num_rows($rs_new_assessors);

//Approved assessors
$query_approved_assessors = "SELECT * FROM afcg_assessors WHERE assessor_created_by = 'certified'";
$rs_approved_assessors = mysqli_query($conntscpME, $query_approved_assessors) or die(mysqli_error());
$row_approved_assessors = mysqli_fetch_assoc($rs_approved_assessors);
$idadi_approved_assessors = mysqli_num_rows($rs_approved_assessors);

	$output = array(
		'idadi_new_facilities' => $idadi_new_facilities,
		'idadi_approved_facilities' => $idadi_approved_facilities,
		'idadi_new_assessors' => $idadi_new_assessors,
		'idadi_approved_assessors' => $idadi_approved_assessors
	);
	
echo json_encode($output);
?>