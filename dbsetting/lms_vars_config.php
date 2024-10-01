<?php
//----------------------------------------------------------------------------
error_reporting(0);
ob_start();
ob_clean();
//----------------------------------------------------------------------------
//date_default_timezone_set("Asia/Karachi");
ini_set('date.timezone', 'Asia/Karachi');
//----------------------------------------------------------------------------
if ($_SERVER['HTTP_HOST'] == "localhost" or $_SERVER['HTTP_HOST'] == "127.0.0.1") {
	//----------------------------------------------------------------------------	
	//Local 
	//----------------------------------------------------------------------------
	define('LMS_HOSTNAME', 'localhost');
	define('LMS_NAME', 'latest_research_hub');
	define('LMS_USERNAME', 'root');
	define('LMS_USERPASS', '');
	//----------------------------------------------------------------------------
} else {
	//----------------------------------------------------------------------------
	// Live 
	//$dblms->lastestid();	
	//----------------------------------------------------------------------------	

	// define('LMS_HOSTNAME'			, 'localhost');
	// define('LMS_NAME'				, 'future_apps2022');
	// define('LMS_USERNAME'			, 'future_apps2022');
	// define('LMS_USERPASS'			, 'Apps@#txnlcmtg2022');

}
//----------------------------------------------------------------------------
define('ADMINS', 'users');
define('ADMINS_HISTORY', 'apps_admins_history');
define('DEPARTMENTS', 'departments');
define('DOCUMENTS', 'documents');



//--------------------------------------------------
$ip	  			 = (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] != '') ? $_SERVER['REMOTE_ADDR'] : '';
$do	  			 = (isset($_REQUEST['do']) && $_REQUEST['do'] != '') ? $_REQUEST['do'] : '';
$view 			 = (isset($_REQUEST['view']) && $_REQUEST['view'] != '') ? $_REQUEST['view'] : '';
$page			 = (isset($_REQUEST['page']) && $_REQUEST['page'] != '') ? $_REQUEST['page'] : '';
$Limit			 = (isset($_REQUEST['Limit']) && $_REQUEST['Limit'] != '') ? $_REQUEST['Limit'] : '';
//--------------------------------------------------
define('LMS_IP', $ip);
define('LMS_DO', $do);
define('LMS_EPOCH', date("U"));
define('LMS_VIEW', $view);
define('TITLE_HEADER', 'Resource Management System');
define("SITE_NAME", "Resource Management System");
define("SITE_ADDRESS", "");
define("DEVELOPED_BY", "Developed By");
define("VERSION", "v 4.0");
define("COPY_RIGHTS", "Ghulam Mujtaba");
define("COPY_RIGHTS_ORG", "&copy; " . date("Y") . " - All Rights Reserved.");
define("COPY_RIGHTS_URL", "");
//--------------------------------------------------
