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
    <div class="search-section">
    <div class="masthead single-masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-md-auto">
                    <form method="post" action="">
                        <input type="text" class="search-field" required placeholder="Search Something ... ">
                        <button type="submit" name="research"><i class="icon icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a>
                </li>
                
            </ol>
        </div>
    </div>
    <!-- Main Content -->
    <main class="content-wrapper">
        <div class="container">
            <header class="section-heading p-b-40">
                <h1 class="text-left">Recent Articles</h1>
              
            </header>
            <div class="row">
                <?php
                    $m=new ManageClient();

                   if(isset($_POST['research']))
                    {
                        $research=$_POST['research'];
                        $getHome=$m->GetResearch($research);
                    }
                   else
                   {
                       $getHome=$m->getRandomHome();
                   }
                    if($getHome)
                    {
                        while ($getsHome=$getHome->fetch_assoc())
                        {



                ?>

                <div class="col-lg-3">
                    <article class="post"><span class="ico icon-document-text"></span>
                        <h2><a href="single.html"><?php echo $getsHome['title'];
                                ?></a></h2>
                        <a href="single.html">Read Article</a>
                    </article>
                </div>
                <?php
                        }
                    }

                ?>
            </div>
           <h5 style="text-align: center;"><a href="index.php">View All</a></h5>
        </div>
    </main>
</div>
<?php

include_once 'includes/footer.php';

?>

</div>
<!--End Page page_wrrapper -->
<script src="assets/js/app.js"></script>

</body>
</html>