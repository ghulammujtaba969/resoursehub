<?php

define('TITLE_HEADER', 'Resource Management System');
define("SITE_NAME", "Resource Management System");
define("SITE_ADDRESS", "");
define("COPY_RIGHTS", "Ghulam Mujtaba");
define("COPY_RIGHTS_ORG", "&copy; " . date("Y") . " - All Rights Reserved.");
define("COPY_RIGHTS_URL", "#");
//---------------------------------------------------
include "functions/login_func.php";
//---------------------------------------------------
if (isset($_SESSION['LOGINIDA_SSS'])) {
	header("Location: index.php");
} else {
	$login_id = (isset($_POST['login_id']) && $_POST['login_id'] != '') ? $_POST['login_id'] : '';
	if (isset($_POST['login_id'])) {
		$result = cpanelLMSAuserLogin();
		if ($result != '') {
			$errorMessage = $result;
		}
	}
	//----------------------------------------------------------------------
	echo '

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title> Login | ' . TITLE_HEADER . ' </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">

</head>
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
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">';
	//------------------------------------------------------------------------------------
	if (isset($errorMessage)) {
		echo $errorMessage;
	}
	//------------------------------------------------------------------------------------
	echo '
							<form class="form-auth-small" action="#" id="frmLogin" name="frmLogin" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="login_id" name="login_id" value="' . $login_id . '" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" d="inputPassword" name="login_pass" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="ForgotPassword.php">Forgot password?</a></span>
									<span>Don\'t have an account? <a href="Register.php">Register</a></span>
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
</html>';
	//----------------------------------------------------------------------
}
//----------------------------------------------------------------------
