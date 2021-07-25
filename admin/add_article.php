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
        <!-- Plugins css -->
        <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
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
            $m=new MyAdmin();
            if (isset($_POST['add']))
            {

                $cat=$_POST['cats'];
                $title=$_POST['title'];
                $article=$_POST['article'];
                $example_detail=$_POST['example_detail'];
                $example_code=$_POST['example_code'];
                $quiz=$_POST['quiz'];
                $check=$m->addArticle($cat,$title,$article,$example_detail,$example_code,$quiz);


                echo "<script>alert('Record Inserted');</script>";
                echo "<script>location.replace('view_article.php');</script>";
            }

            ?>


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">Add Article</h2>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                         <div class="card-box">

                             <form role="form" class="col-lg-7" method="post" action="">
                                    <span style="color:red; font-size:16px;"><?php
                                        if (isset($_POST['add'])) {
                                            if($check)
                                            {
                                                echo $check;
                                            }
                                        }
                                        ?>
                                  </span>
                                 <div class="form-group">
                                     <label>Title:</label>
                                     <input class="form-control"  required type="text" name="title"   placeholder="Enter Title" />
                                 </div>
                                 <div class="form-group">
                                     <label>Category:</label>
                                     <select name="cats" class="form-control" required>
                                        <option value="">Choose</option>
                                         <?php
                                         $get=$m->getAllCats();
                                         if($get)
                                         {
                                            while($gets=$get->fetch_assoc())
                                            {



                                         ?>

                                                <option value="<?php echo $gets['id']; ?>"><?php echo $gets['title']; ?></option>
                                         <?php
                                            }
                                         }

                                         ?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Article Detail</label>
                                     <textarea rows="20" name="article" required>

                                     </textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>Example Detail</label>
                                     <textarea name="example_detail">

                                     </textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>Example Code</label>
                                     <input type="text" class="form-control" name="example_code">
                                 </div>
                                 <div class="form-group">
                                     <label>Quiz</label>
                                     <input class="form-control"   type="url" name="quiz"   placeholder="Quiz URL" />
                                 </div>
                                 <button type="submit" onclick="myfrom();" name="add" class="btn btn-primary"><i class="fa fa-sign-out fa-fw"></i> Add Article</button>
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
        <!-- Plugins js -->
        <script src="assets/libs/katex/katex.min.js"></script>
        <script src="assets/libs/quill/quill.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/2ugtnzpe4wu34b44wxd5sab2he396bqx31iomj8x14zbz18b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
            });
        </script>
        
    </body>
</html>