<?php

define('TITLE_HEADER', 'Resource Management System');
define("SITE_NAME", "Resource Management System");
define("SITE_ADDRESS", "");
define("COPY_RIGHTS", "Ghulam Mujtaba");
define("COPY_RIGHTS_ORG", "&copy; " . date("Y") . " - All Rights Reserved.");
define("COPY_RIGHTS_URL", "#");
echo '

<!doctype html>
<html lang="en">

<head>
<title> Forgot Password | ' . TITLE_HEADER . '</title>
<meta charset="utf-8">
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
                            <p class="lead">Recover my password</p>
                        </div>
                        <div class="body">
                            <p>Please enter your email address below to receive instructions for resetting password.</p>
                            <form class="form-auth-small" action="index.html">
                                <div class="form-group">                                    
                                    <input type="password" class="form-control" id="signup-password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
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
