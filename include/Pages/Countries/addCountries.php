<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<form method="post" action="Countries.php" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Country Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Name </label>
		<input type="text" class="form-control" id="country_name" name="country_name" placeholder="Enter Name" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label> Code</label>
		<input type="text" class="form-control" id="country_abbr" name="country_abbr" placeholder="Enter Code" autocomplete="off">
	</div>
</div>


<div style="clear:both;"></div>	

<div class="col-12" align="center">
	<button type="submit" class="btn btn-primary" id="submit_Countries" name="submit_Countries"> Create Country </button>
</div>

</div>
</form>

</div>
</div>
</div>
</div>';

?>

