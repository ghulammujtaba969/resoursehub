<?php 
echo'
<div class="row">
<div class="col-sm-12">
<div class="card">';
//----------------------------------------------------------
if(isset($_POST['submit_changes'])) { 
//----------------------------------------------------------
$sqllms  = $dblms->querylms("UPDATE ".QUESTIONS." SET   status		= '".cleanvars($_POST['status'])."'
														, dated		= '".cleanvars($_POST['dated'])."'
														, short_ques		= '".cleanvars($_POST['short_ques'])."'
														, long_ques		= '".cleanvars($_POST['long_ques'])."'
														, short_ans		= '".cleanvars($_POST['short_ans'])."'
														, long_answer		= '".cleanvars($_POST['long_answer'])."'
														, keywords		= '".cleanvars($_POST['keywords'])."'
														, id_modify			= '".$_SESSION['LOGINIDA_SSS']."'
														, date_modify		= NOW()
														WHERE ques_id	= '".cleanvars($_GET['Qid'])."'");

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
	$sqllmsQuestions	= $dblms->querylms("SELECT * FROM ".QUESTIONS." WHERE ques_id = '".cleanvars($_GET['Qid'])."' LIMIT 1");
	$valueQuestions	 	= mysqli_fetch_array($sqllmsQuestions);	
//----------------------------------------------------------
echo'
<div class="card-body">
<form action="Questions.php?view=modify&Qid='.$_GET['Qid'].'" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-12">
	<h5 class="form-title"><span>Question Details</span></h5>
</div>

<div style="clear:both;"></div>	<br><br>
<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Question Date </label>
		<input type="datetime-local" class="form-control" id="dated" name="dated" placeholder="Enter Name" required autocomplete="off">
	</div> 
</div>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Question Catagory</label>		
		<select class="form-control" id="id_catagory" name="id_catagory" style="width:100%" autocomplete="off" required>
			<option value="">Select Catagory</option>';
			
			$catagories = $dblms->querylms("SELECT * FROM ".CATEGORIES." WHERE cat_status != '2' ");				
			while($valueQuestions = mysqli_fetch_array($catagories)) {
				echo '<option value="'.$valueQuestions['cat_id'].'">'.$valueQuestions['cat_name'].'</option>';
			}
		echo'
		</select>
	</div>
</div>

<div style="clear:both;"></div>	<br><br>


<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Short Question</label>		
		<input type="text" class="form-control" id="short_ques" name="short_ques" style="font-size: 25px; font-family: Jameel Noori Nastaleeq Regular; height: 70px; direction:rtl;" placeholder="یہاں لکھیں" required autocomplete="off" value="'.$valueQuestions['short_ques'].'">
	</div>
</div><div style="clear:both;"></div><br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Short Answer</label>
		<input type="text" class="form-control" id="short_ans" name="short_ans" style="font-size: 25px; font-family: Jameel Noori Nastaleeq Regular; height: 70px; direction:rtl;" placeholder="یہاں لکھیں" required autocomplete="off" value="'.$valueQuestions['short_ans'].'">
	</div>
</div>

<div class="col-12 col-sm-12">
	<div class="form-group">
		<label>Long Question</label>	
		<textarea class="form-control" id="long_ques" name="long_ques" style="font-size: 25px; font-family: Jameel Noori Nastaleeq Regular; height: 70px; direction:rtl;" placeholder="یہاں لکھیں" rows="5" cols="10">'.$valueQuestions['long_ques'].'</textarea>	
	</div>
</div><div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-12">
	<div class="form-group">
		<label>Long Answer</label>
		<textarea class="form-control" id="long_answer" name="long_answer" style="font-size: 25px; font-family: Jameel Noori Nastaleeq Regular; height: 70px; direction:rtl;" placeholder="یہاں لکھیں" rows="5" cols="10">'.$valueQuestions['long_answer'].'</textarea>
	</div>
</div>
<div class="col-12 col-sm-12">
	<div class="form-group">
		<label>Keywords</label>		
		<textarea class="form-control" id="keywords" name="keywords" rows="5" cols="10">'.$valueQuestions['keywords'].'</textarea>
	</div>
</div><div style="clear:both;"></div>	<br><br>

<div class="col-12 col-sm-6">
	<div class="form-group">
		<label>Feature Image</label>
		<input type="file" class="form-control" id="feature_image" name="feature_image" placeholder="Enter Name" autocomplete="off">
	</div>
</div>
<div style="clear:both;"></div>	

<div class="col-12">
	<div class="form-group">
		<select class="form-control" id="status" name="status" style="width:100%" autocomplete="off" required>
				<option value="">Select Status</option>';
			foreach($admstatus as $itemadmstatus) {
				if($itemadmstatus['status_id'] == $valueQuestions['status']) { 
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

