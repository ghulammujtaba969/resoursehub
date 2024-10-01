<?php
const TITLE = 'Users';
include "dbsetting/lms_vars_config.php";
include "dbsetting/classdbconection.php";
$dblms = new dblms();
include "functions/login_func.php";
include "functions/functions.php";
checkCpanelLMSALogin();
//-------------------------------------------------------
if ($view == 'delete') {
	if (isset($_GET['Cid'])) {
		$sqllms  = $dblms->querylms("DELETE FROM " . ADMINS . " WHERE complaint_id = '" . cleanvars($_GET['Aid']) . "'");
		header('location: Admins.php?del=1');
	}
}
//----------------------------------------------------------------
include("include/header.php");
// die('123');
//----------------------------------------------------------------
echo '

<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add User</h6>
            </div>
            <div class="modal-body">
				<form action="Admins.php" method="post">
					<div class="row clearfix col-lg-12">
						<div class="col-12">
							<div class="form-group">                                    
								<input type="text" class="form-control" placeholder="First Name" name="fullname" id="fullname" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                                   
								<select class="form-control" name="role" id="role" required>
									<option value="">Select Role</option>
									<option value="1">Faculty</option>
									<option value="2">Student</option>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                                    
								<input type="email" class="form-control" placeholder="Email" name="email" id="email">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                                    
								<input type="phone" class="form-control" placeholder="Phone" name="phone" id="phone">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                                    
								<input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                                    
								<input type="text" class="form-control" placeholder="Enter Password" name="password" id="password" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">               
								<select class="form-control" name="status" id="status" required>
									<option value="">Select Status</option>
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>                     
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">                   
								<select class="form-control" placeholder="Access" name="access" id="access" required>
									<option value="">Select Access</option>
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>                                
							</div>
						</div>
					</div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" name="submit_Admins" id="submit_Admins">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Users</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <!--a href="app-contact-grid.html" class="btn btn-primary">Grid view</a-->
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addcontact">Add New</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


';
//----------------------------------------------------------------------------------------------
if (isset($_POST['submit_Admins'])) {
	//----------------------------------------------------------------------------------------------
	$emply_pass  	 = cleanvars($_POST['password']);
	$emply_passmdf  = md5($emply_pass);
	//----------------------------------------------------------------------------------------------
	$sqllms  = $dblms->querylms(
		"INSERT INTO " . ADMINS . "(
														username											, 
														password											, 
														status												, 
														access												, 
														fullname											, 
														email												, 
														dob													, 
														phone												, 
														id_added 											,
														created_at												
													  )	VALUES ( 
														'" . cleanvars($_POST['username']) . "'	  			,
														'" . $emply_passmdf . "'							, 
														'" . cleanvars($_POST['status']) . "'				, 
														'" . cleanvars($_POST['access']) . "'				, 
														'" . cleanvars($_POST['fullname']) . "'				, 
														'" . cleanvars($_POST['email']) . "'				,	 
														'" . cleanvars($_POST['dob']) . "'					,	 
														'" . cleanvars($_POST['phone']) . "'				, 
														'" . cleanvars($_SESSION['LOGINIDA_SSS']) . "'		,
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
	include("include/Pages/Admins/allAdmins.php");
}
//-------------------------------------------------------
if (LMS_VIEW == "add") {
	include("include/Pages/Admins/addAdmins.php");
}
//-------------------------------------------------------
if (LMS_VIEW == "modify") {
	include("include/Pages/Admins/modifyAdmins.php");
}
//-------------------------------------------------------
include "include/footer.php";
//-------------------------------------------------------
