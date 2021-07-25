
<?php


require 'classes/adminLogin.php';
$al=new adminlogin();
if (isset($_POST['adminLogin'])) {
    $adminUser=$_POST['adminUser'];
    $adminPass=$_POST['adminPass'];
    $loginCheck=$al->adminLogin($adminUser,$adminPass);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
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


    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="deshboard.php" class="logo">
                                <img src="assets/images/logo-light.png" alt="" height="120" class="logo-light mx-auto">
                               <img src="assets/images/logo-dark.png" alt="" height="120" class="logo-dark mx-auto">
                            </a>
                            <br>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Sign In</h4>
                                </div>

                                <form method="post" action="index.php">
                                <span style="color:red; font-size:16px;"><?php
                                    if (isset($_POST['adminLogin'])) {
                                        if($loginCheck)
                                        {
                                            echo $loginCheck;
                                        }
                                    }
                                    ?></span>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">User Name</label>
                                        <input class="form-control" type="test" id="emailaddress" name="adminUser" required="" placeholder="Enter your User Name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="adminPass" required="" id="password" placeholder="Enter your password">
                                    </div>

                                 

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" name="adminLogin" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>



