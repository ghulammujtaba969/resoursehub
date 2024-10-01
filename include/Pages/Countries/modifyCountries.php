<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">';
//----------------------------------------------------------
if(isset($_POST['submit_changes'])) { 
//----------------------------------------------------------
$sqllms  = $dblms->querylms("UPDATE ".COUNTIRES." SET   country_status		= '".cleanvars($_POST['country_status'])."'
														, country_name		= '".cleanvars($_POST['country_name'])."'
														, country_abbr		= '".cleanvars($_POST['country_abbr'])."'
														, id_modify			= '".$_SESSION['LOGINIDA_SSS']."'
														, date_modify		= NOW()
														WHERE country_id	= '".cleanvars($_GET['Cid'])."'");

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
	$sqllmsCountries	= $dblms->querylms("SELECT * FROM ".COUNTIRES." WHERE country_id = '".cleanvars($_GET['Cid'])."' LIMIT 1");
	$valueCountries	 	= mysqli_fetch_array($sqllmsCountries);	
//----------------------------------------------------------
echo'
<div class="card-body">
<form action="Countries.php?view=modify&Cid='.$_GET['Cid'].'" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Country Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Country Name </label>
		<input type="text" class="form-control" id="country_name" name="country_name" value="'.$valueCountries['country_name'].'" placeholder="Enter Name" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Country Code</label>
		<input type="text" class="form-control" id="country_abbr" name="country_abbr" value="'.$valueCountries['country_abbr'].'" placeholder="Enter Code" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
	<div class="form-group">
		<select class="form-control" id="country_status" name="country_status" style="width:100%" autocomplete="off" required>
				<option value="">Select Status</option>';
			foreach($admstatus as $itemadmstatus) {
				if($itemadmstatus['status_id'] == $valueCountries['country_status']) { 
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

