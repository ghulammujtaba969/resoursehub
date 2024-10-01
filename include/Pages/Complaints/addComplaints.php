<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<form method="post" action="Complaints.php" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Complaints Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Name </label>
		<input type="text" class="form-control" id="complaint_fullname" name="complaint_fullname" placeholder="Enter Name" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Subject </label>
		<input type="text" class="form-control" id="complaint_subject" name="complaint_subject" placeholder="Enter Subject" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Phone # </label>
		<input type="text" class="form-control" id="complaint_phone" name="complaint_phone" placeholder="Enter Phone" autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Email </label>
		<input type="email" class="form-control" id="complaint_email" name="complaint_email" placeholder="Enter Email" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
<div class="form-group">
	<label> Message </label>
	<textarea class="form-control" id="complaint_message" name="complaint_message" rows="10">  </textarea>
</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
<div class="form-group">
	<label> Remarks </label>
	<textarea class="form-control" id="complaint_remarks" name="complaint_remarks" rows="10">  </textarea>
</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12" align="center">
	<button type="submit" class="btn btn-primary" id="submit_Complaints" name="submit_Complaints"> Create Complaints </button>
</div>

</div>
</form>

</div>
</div>
</div>
</div>';

?>

