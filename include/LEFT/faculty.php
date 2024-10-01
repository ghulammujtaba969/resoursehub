<?php
echo '

            <div class="user-account">
                <img src="assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>' . $_SESSION['LOGINFNAMEA_SSS'] . '</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="profile.php"><i class="icon-user"></i>My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php?logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>              
            </ul>
			<div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
							<li ' . $dashboard . '>
                                <a href="Dashboard.php" ><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                            </li>
							<li ' . $departments . ' >
                                <a href="#Departments.php" class="has-arrow"><i class="fa fa-university "></i><span>Departments</span></a>
                                <ul>
                                    <li ' . $departments . '><a href="Departments.php">All</a></li>
                                    <li ' . $departments . '><a href="Departments.php?view=active">Active</a></li>
                                    <li ' . $departments . '><a href="Departments.php?=add">Add New</a></li>
                                </ul>
                            </li>
							<li ' . $documents . '>
                                <a href="#Documents.php" class="has-arrow"><i class="fa fa-file"></i><span>Documents</span></a>
                                <ul>
                                    <li ' . $documents . '><a href="Documents.php">All</a></li>
                                    <li ' . $documents . '><a href="Documents.php?view=active">Active</a></li>
                                    <li ' . $documents . '><a href="Documents.php?=add">Add New</a></li>
                                </ul>
                            </li>
							<li ' . $admins . '>
                                <a href="Admins.php" ><i class="fa fa-user-circle-o"></i><span>Users</span></a>
                            </li>                            
                        </ul>
                    </nav>
                </div>
                
                <div class="tab-pane" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green" class="active"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>

                    <ul class="list-unstyled font_setting mt-3">
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                <span class="custom-control-label">Nunito Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                <span class="custom-control-label">Ubuntu Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                <span class="custom-control-label">Raleway Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                <span class="custom-control-label">IBM Plex Google Font</span>
                            </label>
                        </li>
                    </ul>

                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable Dark Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-rtl">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable RTL Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-high-contrast">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable High Contrast Mode!</span>
                        </li>
                    </ul>                    

                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Allowed Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div> 
';
