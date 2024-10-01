<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">';
//----------------------------------------------------------
if(isset($_POST['submit_changes'])) { 
//----------------------------------------------------------
$sqllms  = $dblms->querylms("UPDATE ".COMPLAINTS." SET   complaint_status		= '".cleanvars($_POST['complaint_status'])."'
														, complaint_fullname	= '".cleanvars($_POST['complaint_fullname'])."'
														, complaint_email		= '".cleanvars($_POST['complaint_email'])."'
														, complaint_phone		= '".cleanvars($_POST['complaint_phone'])."'
														, complaint_subject		= '".cleanvars($_POST['complaint_subject'])."'
														, complaint_message		= '".cleanvars($_POST['complaint_message'])."'
														, complaint_remarks		= '".cleanvars($_POST['complaint_remarks'])."'
														, date_modify			= NOW()
														WHERE complaint_id		= '".cleanvars($_GET['Cid'])."'");

//----------------------------------------------------------
if($sqllms) {
//----------------------------------------------------------
	echo'<div class="alert alert-success alert-dismissable" align="center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>success: </span>Record updated successfully.
		</div>';
	}
//----------------------------------------------------------
}
//------------------------------------------------------------------------------------------------------------
	$sqllmsComplaints		= $dblms->querylms("SELECT * FROM ".COMPLAINTS." WHERE complaint_id = '".cleanvars($_GET['Cid'])."' LIMIT 1");
	$valueComplaints	 	= mysqli_fetch_array($sqllmsComplaints);	
//----------------------------------------------------------
echo'
<div class="card-body">
<form action="Complaints.php?view=modify&Cid='.$_GET['Cid'].'" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Complaints Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Name </label>
		<input type="text" class="form-control" id="complaint_fullname" name="complaint_fullname" value="'.$valueComplaints['complaint_fullname'].'" placeholder="Enter Name" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Subject </label>
		<input type="text" class="form-control" id="complaint_subject" name="complaint_subject" value="'.$valueComplaints['complaint_subject'].'" placeholder="Enter Subject" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Phone # </label>
		<input type="text" class="form-control" id="complaint_phone" name="complaint_phone" value="'.$valueComplaints['complaint_phone'].'" placeholder="Enter Phone" autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Email </label>
		<input type="email" class="form-control" id="complaint_email" name="complaint_email" value="'.$valueComplaints['complaint_email'].'" placeholder="Enter Email" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
<div class="form-group">
	<label> Message </label>
	<textarea class="form-control" id="complaint_message" name="complaint_message" rows="10"> '.$valueComplaints['complaint_message'].' </textarea>
</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
<div class="form-group">
	<label> Remarks </label>
	<textarea class="form-control" id="complaint_remarks" name="complaint_remarks" rows="10"> '.$valueComplaints['complaint_remarks'].' </textarea>
</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
	<div class="form-group">
		<select class="form-control" id="complaint_status" name="complaint_status" style="width:100%" autocomplete="off" required>
				<option value="">Select Status</option>';
			foreach($admstatus as $itemadmstatus) {
				if($itemadmstatus['status_id'] == $valueComplaints['complaint_status']) { 
					echo '<option value="'.$itemadmstatus['status_id'].'" selected>'.$itemadmstatus['status_name'].'</option>';
				} else { 
					echo '<option value="'.$itemadmstatus['status_id'].'">'.$itemadmstatus['status_name'].'</option>';	
				}
			}
	echo'
		</select>
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12" align="center">
	<button type="submit" class="btn btn-primary" id="submit_changes" name="submit_changes"> Save Changes </button>
</div>

</div>
</form>
</div>
</div>
</div>
</div>';

?>

