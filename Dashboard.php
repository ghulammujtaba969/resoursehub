<?php
const TITLE = 'Dashboard';
//--------------------------------------------------------
include_once "dbsetting/lms_vars_config.php";
include_once "dbsetting/classdbconection.php";
$dblms = new dblms();
include_once "functions/login_func.php";
include_once "functions/functions.php";
checkCpanelLMSALogin();
// die($_SESSION['LOGINTYPE_SSS']);
include_once("include/header.php");

//----------------------------------------------
include_once("include/Dashboard/" . get_admtypes($_SESSION['LOGINTYPE_SSS']) . ".php");
//---------------------------------------------------
include_once "include/footer.php";
//---------------------------------------------------
