<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<form method="post" action="Admins.php" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Complaints Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Username </label>
		<input type="text" class="form-control" id="emply_username" name="emply_username" placeholder="Enter Username" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Password </label>
		<input type="text" class="form-control" id="emply_userpass" name="emply_userpass" placeholder="Enter Password" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
	<div class="form-group">
		<label> Fullname </label>
		<input type="text" class="form-control" id="emply_fullname" name="emply_fullname" placeholder="Enter Fullname" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Phone # </label>
		<input type="text" class="form-control" id="emply_phone" name="emply_phone" placeholder="Enter Phone" autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Email </label>
		<input type="email" class="form-control" id="emply_email" name="emply_email" placeholder="Enter Email" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
<div class="form-group">
	<label> Remarks </label>
	<textarea class="form-control" id="emply_remarks" name="emply_remarks" rows="10"> </textarea>
</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12" align="center">
	<button type="submit" class="btn btn-primary" id="submit_Admins" name="submit_Admins"> Create Admins </button>
</div>

</div>
</form>

</div>
</div>
</div>
</div>';

?>

