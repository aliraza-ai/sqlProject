
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <meta charset="utf-8" />
        <title>SQL Learning and Evalution Platfrom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include_once "includes/topbar.php"?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once "includes/sidebar.php"?>
            <!-- Left Sidebar End -->

            <?php
            if (isset($_POST['changePassword']))
            {
                $user=new User();
                $oldPassword=$_POST['Cpassword'];
                $newPassword=$_POST['Npassword'];
                $newPassword1=$_POST['NCpassword'];
                if($newPassword==$newPassword1)
                    $userCheck=$user->changePassword(session::get('adminId'),$oldPassword,$newPassword);
                else echo "<script>alert('Password Not Match');</script>";
            }

            ?>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                         <div class="card-box">

                             <form role="form" class="col-lg-7" method="post" action="change-password.php">
                                 <span style="color:red; font-size:16px;"><?php
                                     if (isset($_POST['changePassword'])) {
                                         if($userCheck!=false)
                                         {
                                             echo "<script>alert('$userCheck');</script>";
                                             session::destroy();
                                         }else
                                         {
                                             echo "<script>alert('Current Password Not Valid..');</script>";
                                         }
                                     }
                                     ?>
                                  </span>
                                 <div class="form-group">
                                     <label>Current Password:</label>
                                     <input class="form-control"  required type="password" name="Cpassword"  minlength="5" placeholder="Enter Password" />
                                 </div>
                                 <div class="form-group">
                                     <label>New Password:</label>
                                     <input class="form-control" required type="password" id="password" name="Npassword" minlength="5" placeholder="Enter Password" />
                                 </div>
                                 <div class="form-group">
                                     <label>Confirm Password:</label>
                                     <input class="form-control" required type="password" minlength="5" name="NCpassword" id="confirm_password" placeholder="Enter Password" />
                                 </div>
                                 <button type="submit" name="changePassword" class="btn btn-primary"><i class="fa fa-sign-out fa-fw"></i> Change Password</button>
                                 <button type="reset" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                             </form>
                                    
                        </div>
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2020 - 2021 &copy; SQL Project by <a href="">UOG students</a> 
                            </div>
                        
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       

       
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script>
            var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
    </body>
</html>