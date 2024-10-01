<?php
//*-------------------------------------------------------
$sql2  			= '';
$sqlmsstring	 = "";
//--------------------------------------------------------
if (($_GET['srch'])) {
	$sql2 		.= " AND ( username LIKE '%" . $_GET['srch'] . "%' 
	OR fullname LIKE '%" . $_GET['srch'] . "%'
	OR phone LIKE '%" . $_GET['srch'] . "%'
	OR email LIKE '%" . $_GET['srch'] . "%' )";
	$sqlmsstring .= "&srch=" . $_GET['srch'] . "";
}
//------------------------------------------------

//------------------------------------------------
$sqllms  = $dblms->querylms("SELECT *  
										FROM " . ADMINS . " 
										WHERE id != '' $sql2 
										ORDER BY id DESC ");
//--------------------------------------------------
$sql_print  = " SELECT *  
										FROM " . ADMINS . " 
										WHERE id != '' $sql2 
										ORDER BY id DESC ";
//--------------------------------------------------

//------------------------------------------------
$sqllms  = $dblms->querylms("SELECT *   
										FROM " . ADMINS . " 
										WHERE id != '' $sql2 
										ORDER BY id DESC ");
//--------------------------------------------------
if (mysqli_num_rows($sqllms) > 0) {
	//------------------------------------------------
	echo '
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Users List </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Access</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Access</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>';
	//-------------------------------------------------------------------------
	$srno = 0;
	//-------------------------------------------------------------------------
	while ($rowstd = mysqli_fetch_array($sqllms)) {
		//-------------------------------------------------------------------------
		$srno++;
		//-------------------------------------------------------------------------
		$userrole = get_admtypes($rowstd['role']);
		$userstatus = get_admtypes($rowstd['status']);
		$useraccess = get_admtypes($rowstd['access']);
		//-------------------------------------------------------------------------
		echo '

<tr>
	<td><a> ' . $rowstd['fullname'] . ' </a></td>
	<td> ' . $userrole . '</td>
	<td>' . $rowstd['email'] . '</td>
	<td>' . $userstatus . '</td>
	<td>' . $useraccess . '</td>
	<td>                                            
	
		<div class="actions">
			<a href="Admins.php?view=modify&Aid=' . $rowstd['id'] . '" class="btn btn-info"><i class="fa fa-edit"></i></a>
			<a class="btn btn-danger js-sweetalert" href="Admins.php?Aid=' . $rowstd['id'] . '&view=delete" onClick="javascript: return confirm(\'Please confirm deletion\');"> <i class="fa fa-trash-o"></i></a>
		</div>
	</td>
</tr>
';
		//------------------------------------------------
	} // end while loop
	//------------------------------------------------
	echo '
</tbody>
</table>';
	//------------------------------------------------
} else {
	//------------------------------------------------
	echo '
<div class="col-lg-12">
	<div class="alert alert-danger" role="alert">No Result Found!</div>
</div>';
	//------------------------------------------------
}
//------------------------------------------------
echo '


</div>
</div>

</div>
</div>
</div>

</div>
</div>


';
