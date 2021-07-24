<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/fav.png" type="image/x-icon">
    <title>SQL Learning and Evalution Platfrom</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING</div>
    </div>
</div>

<div id="app" class="paper-loading">
<div class="blog">
    <!-- Header -->
    <?php

    include_once 'includes/navbar.php';

    ?>
<div class="light b-t">
    <div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('assets/img/icon/icon-circles.png');">
        <main id="main" class="site-main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                    <header class="text-center">
                        <h1>Contact Us</h1>
                        <p>If You have Any Issue You can Contact Directly</p>
                       
                    </header>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control form-control-lg" placeholder="Message" ></textarea>
                                </div>
                            </div>
                           
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Contact Us">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
<footer>
    <div class="container">
       <div class="copyrights">
                 <center>   <p>&#xA9; 2018 SQL Evaluation Copyrights</p></center>
                </div>
    </div>
</footer>

<!--End Page page_wrrapper -->
<script src="assets/js/app.js"></script>

</body>
</html>