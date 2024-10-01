<?php

include "dbsetting/lms_vars_config.php";
include "dbsetting/classdbconection.php";
$dblms = new dblms();
include "functions/login_func.php";
include "functions/functions.php";
checkCpanelLMSALogin();
//-------------------------------------------------------
if ($view == 'delete') {
	if (isset($_GET['Cid'])) {
		$sqllms  = $dblms->querylms("DELETE FROM " . DOCUMENTS . " WHERE complaint_id = '" . cleanvars($_GET['Cid']) . "'");
		header('location: Documents.php?del=1');
	}
}
//----------------------------------------------------------------
include_once("include/header.php");
//----------------------------------------------------------------
echo '
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
	<div class="col">
		<h3 class="page-title">Documents</h3>
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
			<li class="breadcrumb-item active"><a href="Documents.php">Documents</a></li>
		</ul>
	</div>
	<div class="col-auto text-right float-right ml-auto">
		<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
		<a href="Documents.php?view=add" class="btn btn-primary"><i class="fas fa-plus"></i></a>
	</div>
</div>
</div>';
//----------------------------------------------------------------------------------------------
if (isset($_POST['submit_Documents'])) {
	//----------------------------------------------------------------------------------------------
	$sqllms  = $dblms->querylms(
		"INSERT INTO " . DOCUMENTS . "(
														complaint_status									, 
														complaint_fullname									, 
														complaint_email										, 
														complaint_phone										, 
														complaint_subject									, 
														complaint_message									, 
														complaint_remarks									, 
														date_added											
													  )	VALUES (
														'1'													, 
														'" . cleanvars($_POST['complaint_fullname']) . "'	  	,
														'" . cleanvars($_POST['complaint_email']) . "'			, 
														'" . cleanvars($_POST['complaint_phone']) . "'			, 
														'" . cleanvars($_POST['complaint_subject']) . "'		, 
														'" . cleanvars($_POST['complaint_message']) . "'		, 
														'" . cleanvars($_POST['complaint_remarks']) . "'		, 
														NOW()  
													  )"
	);
	//----------------------------------------------------------------------------------------------
	if ($sqllms) {
		//----------------------------------------------------------------------------------------------
		echo '<div class="alert alert-info alert-dismissable" align="center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>success: </span>Record added successfully.
		</div>';
	}
	//-------------------------------------------------------
}
//-------------------------------------------------------
if (!LMS_VIEW || LMS_VIEW == 'list') {
	include("include/Pages/Documents/allDocuments.php");
}
//-------------------------------------------------------
if (LMS_VIEW == "add") {
	include("include/Pages/Documents/addDocuments.php");
}
//-------------------------------------------------------
if (LMS_VIEW == "modify") {
	include("include/Pages/Documents/modifyDocuments.php");
}
//-------------------------------------------------------
include "include/footer.php";
//-------------------------------------------------------
