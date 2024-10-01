<?php 
echo'
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modify User </h2>                            
                        </div>
						';
//--------------------------------------------------------------------------------------
if(isset($_POST['submit_changes'])) {
//--------------------------------------------------------------------------------------
if(!empty($_POST['emply_userpass'])) {
	$sqllms  = $dblms->querylms("UPDATE ".ADMINS." SET emply_userpass 	= '".md5(cleanvars($_POST['emply_userpass']))."' 
													WHERE emply_id 		= '".cleanvars($_GET['Aid'])."'");
unset($sqllms);
} 
//--------------------------------------------------------------------------------------
$sqllms  = $dblms->querylms("UPDATE ".ADMINS." SET  	  emply_status				= '".cleanvars($_POST['emply_status'])."'
														, emply_username		= '".cleanvars($_POST['emply_username'])."'
														, emply_fullname		= '".cleanvars($_POST['emply_fullname'])."'
														, emply_phone			= '".cleanvars($_POST['emply_phone'])."'
														, emply_email			= '".cleanvars($_POST['emply_email'])."'
														, emply_remarks			= '".cleanvars($_POST['emply_remarks'])."'
														, id_modify				= '".$_SESSION['LOGINIDA_SSS']."'
														, date_modify			= NOW()
														WHERE emply_id			= '".cleanvars($_GET['Aid'])."'");

//--------------------------------------------------------------------------------------
if($sqllms) {
//--------------------------------------------------------------------------------------
	echo'<div class="alert alert-success alert-dismissable" align="center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>success: </span>Record updated successfully.
		</div>';
//--------------------------------------------------------------------------------------
	}
//--------------------------------------------------------------------------------------
}
//------------------------------------------------------------------------------------------------------------
	$sqllmsAdmins		= $dblms->querylms("SELECT * FROM ".ADMINS." WHERE id = '".cleanvars($_GET['Aid'])."' LIMIT 1");
	$valueAdmins	 	= mysqli_fetch_array($sqllmsAdmins);	
//--------------------------------------------------------------------------------------
echo'
						<div class="body">
							<form action="Admins.php?view=modify&Aid='.$_GET['Aid'].'" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
									<div class="col-sm-6">
										<div class="form-group">                                    
											<input type="text" class="form-control" placeholder="Username" name="username" id="username" value="'.$valueAdmins['username'].'" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">                                    
											<input type="text" class="form-control" placeholder="User Password" name="password" id="password" required>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-6">
										<div class="form-group">                                    
											<input type="text" class="form-control" placeholder="First Name" name="fullname" id="fullname" value="'.$valueAdmins['fullname'].'" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">                                    
											<input type="text" class="form-control" placeholder="User Email" name="email" id="email" value="'.$valueAdmins['email'].'" required>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-4">
										<div class="form-group">                                    
											<input type="number" class="form-control" placeholder="User Phone" name="phone" id="phone" value="'.$valueAdmins['phone'].'" required>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<select class="form-control show-tick" name="gender" id="gender"> 
												<option value="">- Gender -</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
								</div>
								<div class="header">
									<h2> User Access </h2>                            
								</div>
								<div class="row clearfix">
									<div class="col-sm-4">
										<div class="form-group">
											<select class="form-control show-tick" name="role" id="role"> 
												<option value="">- Gender -</option>';
												foreach ($variable as $key => $value) {
													# code...
												}
												echo'
												<option value="1" >Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<select class="form-control show-tick" name="access" id="access"> 
												<option value="">- Access -</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<select class="form-control show-tick" name="status" id="status"> 
												<option value="">- Status -</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary">Submit</button>
										<button type="submit" class="btn btn-outline-secondary">Cancel</button>
									</div>
								</div>
								</div>
							</form>
                        </div>
					</div>
				</div>
			</div>





';

?>

