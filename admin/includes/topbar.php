<?php
include 'lib/session.php';
Session::CheckSession();
include_once 'classes/User.php';
include_once 'classes/manage.php';
?>
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                            <span class="pro-user-name ml-1">
                                <?php

                                $my="Admin";
                                $my=session::get('adminUser');

                                echo $my;
                                ?> <i class="mdi mdi-chevron-down"></i>
                            </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>



                <!-- item-->
                <a href="change-password.php" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Change Password</span>
                </a>

                <?php

                if (isset($_GET['action']) && $_GET['action']=="logout") {
                    session::destroy();
                }
                ?>

                <div class="dropdown-divider"></div>

                <!-- item-->

                <a href="?action=logout" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                        <span>Logout</span>
                </a>
            </div>
        </li>



    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="dashboard.php" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="50">
                        </span>

        </a>

    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">Dashboard</h4>
        </li>

    </ul>

</div>