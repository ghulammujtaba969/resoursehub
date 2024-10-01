<?php

include "dbsetting/lms_vars_config.php";
include "dbsetting/classdbconection.php";
$dblms = new dblms();
include "functions/login_func.php";

echo '
<!doctype html>
<html lang="en">

<head>
<title> Sign Up | Resourse Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
</head>';

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['email'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $emply_dob = date('Y-m-d', strtotime($_POST['emply_dob']));
    $date_added = date('Y-m-d');

    $contact = $_POST['contact'];
    // die($emply_dob);


    //$sqllms = $dblms->querylms("INSERT INTO " . ADMINS . "(
    $sqllms = $dblms->querylms("INSERT INTO " . ADMINS . "(
                                                        `emply_status`, 
                                                        `emply_type`, 
                                                        `emply_username`, 
                                                        `emply_userpass`, 
                                                        `emply_pwd`, 
                                                        `emply_access`, 
                                                        `emply_fullname`, 
                                                        `emply_email`, 
                                                        `emply_joinsdate`, 
                                                        `date_added`
                                                        ) VALUES (
                                                        '1',
                                                        '1',
                                                        '" . $username . "',
                                                        '" . $password . "',
                                                        '" . $password . "',
                                                        '1',
                                                        '" . $fullname . "',
                                                        '" . $email . "', 
                                                        '" . $emply_dob . "',
                                                        '" . $date_added . "'

                                                    )");

    $errorMessage = '';

    if ($sqllms) {
        // die('123');
        $errorMessage = '<div class="alert alert-success" role="alert">Registration Successful</div>';
        header("Location: login.php");
        exit();
    } else {
        $errorMessage = '<div class="alert alert-danger" role="alert">Registration Failed. Please try again.</div>';
    }
}


echo '
<body data-theme="light" class="font-nunito">
	<!-- WRAPPER -->
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="assets/images/logo-white.svg" alt="Iconic">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">';
//------------------------------------------------------------------------------------
if (isset($errorMessage)) {
    echo $errorMessage;
}
//------------------------------------------------------------------------------------
echo '
                            <form class="form-auth-small" action="#" method="post">
                                <div class="form-group">
                                    <label for="signup-name" class="control-label sr-only">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" id="signup-name" placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" id="signup-email" placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" id="signup-password" placeholder="Password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="Login.php">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>




';
