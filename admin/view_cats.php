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
        <!-- third party css -->
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

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
            if (isset($_GET['del']))
            {
                $m=new MyAdmin();
                $id=$_GET['del'];
                $delCheck=$m->deleteCats($id);
                echo "<script>location.replace('view_cats.php');</script>";
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
                            <div class="col-12">
                                <div class="card-box">
                                    <h2 class="mt-0 header-title">Categories List</h2>
                                    <br>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $m=new MyAdmin();
                                        $getAll=$m->getAllCats();
                                        if ($getAll) {
                                            while ($result=$getAll->fetch_assoc()) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $result['id']; ?></td>
                                                    <td><?php echo $result['title']; ?></td>
                                                    <td  style="text-align: right;"><a class="btn btn-primary"  href="edit_cats.php?edit=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> Edit</a> <a class="btn btn-danger" onclick="return confirm('Are you sour to delete!')" href="view_cats.php?del=<?php echo $result['id']; ?>"><i class="fa fa-remove"></i> Delete</a></td>
                                                </tr>
                                            <?php }} ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


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

        <!-- third party js -->
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>