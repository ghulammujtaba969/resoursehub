<?php
//*-------------------------------------------------------
	$sql2  			= '';	
	$sqlmsstring	 = "";	
//--------------------------------------------------------
if(($_GET['srch'])) {
	$sql2 		.= " AND ( cat_name LIKE '%".$_GET['srch']."%' OR cat_abbr LIKE '%".$_GET['srch']."%')";
	$sqlmsstring .= "&srch=".$_GET['srch']."";
}
//------------------------------------------------
if (!($Limit))   { $Limit = 30; }  
if ($page == "") { $page  = 1;  } 
//------------------------------------------------
	$sqllms  = $dblms->querylms("SELECT *  
										FROM ".QUESTIONS." 
										WHERE ques_id != '' $sql2 
										ORDER BY ques_id DESC ");
//--------------------------------------------------
	$sql_print  = " SELECT *  
										FROM ".QUESTIONS." 
										WHERE ques_id != '' $sql2 
										ORDER BY ques_id DESC ";
//--------------------------------------------------
	$count 		   = mysqli_num_rows($sqllms);
	$NumberOfPages = ceil($count/$Limit);
//------------------------------------------------
	$sqllms  = $dblms->querylms("SELECT *   
										FROM ".QUESTIONS." 
										WHERE ques_id != '' $sql2 
										ORDER BY ques_id DESC LIMIT ".($page-1)*$Limit .",$Limit");
//--------------------------------------------------
if (mysqli_num_rows($sqllms) > 0) {
//------------------------------------------------
echo '
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="color-table table-bordered primary-table table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Code</th>
		<th>Status </th>
		<th class="text-right">Action</th>
	</tr>
</thead>
<tbody>';
//-------------------------------------------------------------------------
$srno = 0 ;
//-------------------------------------------------------------------------
while($rowstd = mysqli_fetch_array($sqllms)) {
//-------------------------------------------------------------------------
$srno++;
//-------------------------------------------------------------------------
	$ctystatus = get_admstatus($rowstd['status']);
//-------------------------------------------------------------------------
echo'
<tr>
	<td> '.$rowstd['ques_id'].' </td>
	<td><h2><a> '.$rowstd['short_ques'].' </a></h2></td>
	<td> '.$rowstd['id_catagory'].' </td>
	<td> '.$rowstd['dated'].' </td>
	<td> '.$rowstd['keywords'].' </td>
	<td> '.$ctystatus.' </td>
	<td class="text-right">
		<div class="actions">
			<a href="Categories.php?view=modify&Qid='.$rowstd['ques_id'].'" class="btn btn-sm bg-success-light mr-2"><i class="fas fa-pen"></i></a>
			<a class="btn btn-sm bg-danger-light" href="Categories.php?Qid='.$rowstd['ques_id'].'&view=delete" onClick="javascript: return confirm(\'Please confirm deletion\');"> <i class="fas fa-trash"></i></a>
		</div>
	</td>
</tr>';
//------------------------------------------------
} // end while loop
//------------------------------------------------
echo'
</tbody>
</table>';
//-----------------------------------------
if($count>$Limit) {
echo'
<br><br>
<div style="text-align:center;">
<!--WI_PAGINATION-->
<ul class="pagination pagination-lg">';
	$Nav= ""; 
if($page > 1) { 
	$Nav .= '<li class="page-item disabled"><a class="page-link" href="Categories.php?page='.($page-1).$sqlmsstring.'">Prev</a></li>'; 
} 
for($i = 1 ; $i <= $NumberOfPages ; $i++) { 
if($i == $page) { 
	$Nav .= '<li class="page-item active"><a class="page-link" href="">'.$i.'</a></li>'; 
} else { 
	$Nav .= '<li class="page-item"><a class="page-link" href="Categories.php?page='.$i.$sqlmsstring.'">'.$i.'</a></li>';
} } 
if($page < $NumberOfPages) { 
	$Nav .= '<li class="page-item"><a class="page-link" href="Categories.php?page='.($page+1).$sqlmsstring.'">Next</a><li>'; 
} 
	echo $Nav;
echo '
</ul>
<!--WI_PAGINATION-->
	<div class="clearfix"></div>
</div>';
}
//------------------------------------------------
} else { 
//------------------------------------------------
echo '
<div class="col-lg-12">
	<div class="widget-tabs-notification">No Result Found</div>
</div>';
//------------------------------------------------
}
//------------------------------------------------
echo '
</div>
</div>
</div>
</div>
</div>';
?>