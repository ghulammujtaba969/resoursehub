<?php

//----------------------------------------------------
if ((strstr(basename($_SERVER['REQUEST_URI']), '.php', true) == "Dashboard")) {

	$dashboard = 'class="active"';
} else {

	$dashboard 	= '';
}

//----------------------------------------------------

if ((strstr(basename($_SERVER['REQUEST_URI']), '.php', true) == "Documents")) {

	$documents 	= 'class="active"';
} else {

	$documents 	= '';
}

//----------------------------------------------------
if ((strstr(basename($_SERVER['REQUEST_URI']), '.php', true) == "Deparments")) {

	$departments 	= 'class="active"';
} else {

	$departments 	= '';
}

//----------------------------------------------------
if ((strstr(basename($_SERVER['REQUEST_URI']), '.php', true) == "Admins")) {

	$admins 	= 'class="active"';
} else {

	$admins 	= '';
}

//----------------------------------------------------

echo '

<!-- ===== Left-Sidebar ===== -->
<!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            

';

//----------------------------------------------------

include_once("LEFT/" . get_admtypes($_SESSION['LOGINTYPE_SSS']) . ".php");

//----------------------------------------------------

echo '       
		</div>
	</div>
<!-- ===== Left-Sidebar-End ===== -->';
