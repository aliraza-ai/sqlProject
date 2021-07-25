<?php
include_once "demodb/db.php";
$db=new DB();
?>
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
        .mylink:hover
        {
            color: #03a9f4 !important;
        }
        .hljs {
            display: block;
            overflow-x: auto;
            padding: 1em;
            border-left: 4px solid #03a9f4;
            background: #f5f2f0;
            color: #606676;
            font-weight: bold;
            font-size: 18px;
            font-family: Consolas,Monaco,Andale Mono,Ubuntu Mono,monospace;
        }
        .heading
        {
            background: rgba(236, 233, 233, 0.55);
            padding: 10px;
            border-left: #0a6aa1 3px solid;
        }


    </style>
</head>
<body>
<!-- Pre loader -->
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
    $m=new ManageClient();
    $get=$m->getTopArticle();
    if(isset($_GET['id']))
    {
        $get=$m->getArticleById($_GET['id']);

    }


    $gets=$get->fetch_assoc();

    ?>
    <div class="search-section">
        <div class="container">
            <h1 style="margin-top: 10px;">SQL Evaluations Scenarios</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="main-sidebar ">
                    <div class="">
                        <section class="sidebar p-t-b-40">
                           <h6 style="font-weight: bold;">Database Information</h6>
                            <br>
                            <b>Database Name: <span style="color: #0a6aa1;">demo</span> </b>
                            <br><br>

                            <?php
                            $result=$db->link->query("SHOW TABLES FROM demo");

                         //   var_dump($result);
                                while ($res=$result->fetch_row())
                                {

                            ?>
                            <b><?php echo $res[0] ."<br>"; ?></b>
                            <?php
                                }

                            ?>

                        </section>
                    </div>
                    <!-- /.sidebar -->
                </aside>
            </div>
            <article class="col-md-9 p-b-40 b-l p-40">
                <section id="introduction">
                    <div class="row">
                        <div class="col-md-12" style="min-height: 60vh;">
                            <div style="background: #f5f2f0;padding: 25px;">
                                <textarea class="form-control"  style="resize: none;" id="input" required><?php echo $gets['example_code']; ?></textarea>
                                <p style="color: black;font-size: 14px;">Edit the SQL Statement, and click "Run SQL" to see the result.</p>
                                <button onclick="myquery()" class="btn btn-primary">Run SQL</button>
                                <br><br>
                                <h4 style="color:black;">Result:</h4>
                                <div style="background: white;padding: 10px;" id="result">
                                    Click "Run SQL" to execute the SQL statement above.
                                </div>
                            </div>

                        </div>
                    </div>
                </section>




            </article>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
            function myquery()
            {
                var value=$("#input").val();
               // result=value.match("select")[0];

                    $(document).ready(function() {
                        var response = '';
                        $.ajax({
                            type: "POST",
                            url: "demodb/getQuery.php",

                            data: {qry: value},
                            async: false,
                            success: function (text)
                            {
                                response = text;
                                $("#result").html(response);
                            }
                        });
                    });




            }

    </script>


</body>
</html>