<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">';
//----------------------------------------------------------
if(isset($_POST['submit_changes'])) { 
//----------------------------------------------------------
$sqllms  = $dblms->querylms("UPDATE ".CATEGORIES." SET   cat_status		= '".cleanvars($_POST['cat_status'])."'
														, cat_name		= '".cleanvars($_POST['cat_name'])."'
														, cat_abbr		= '".cleanvars($_POST['cat_abbr'])."'
														, id_modify			= '".$_SESSION['LOGINIDA_SSS']."'
														, date_modify		= NOW()
														WHERE cat_id	= '".cleanvars($_GET['Cid'])."'");

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
	$sqllmsCategories	= $dblms->querylms("SELECT * FROM ".CATEGORIES." WHERE cat_id = '".cleanvars($_GET['Cid'])."' LIMIT 1");
	$valueCategories	 	= mysqli_fetch_array($sqllmsCategories);	
//----------------------------------------------------------
echo'
<div class="card-body">
<form action="Categories.php?view=modify&Cid='.$_GET['Cid'].'" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Category Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Category Name </label>
		<input type="text" class="form-control" id="cat_name" name="cat_name" value="'.$valueCategories['cat_name'].'" placeholder="Enter Name" required autocomplete="off">
	</div>
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Category Code</label>
		<input type="text" class="form-control" id="cat_abbr" name="cat_abbr" value="'.$valueCategories['cat_abbr'].'" placeholder="Enter Code" autocomplete="off">
	</div>
</div>

<div style="clear:both;"></div>	

<div class="col-12">
	<div class="form-group">
		<select class="form-control" id="cat_status" name="cat_status" style="width:100%" autocomplete="off" required>
				<option value="">Select Status</option>';
			foreach($admstatus as $itemadmstatus) {
				if($itemadmstatus['status_id'] == $valueCategories['cat_status']) { 
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

