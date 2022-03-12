<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Access Blocked</title>
    <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="icon">
    <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>back/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div>
                        <p class="lead text-gray-800 mb-5">Access Forbiden</p>
                        <p class="text-gray-500 mb-0">You have not access to this panel!</p>
                        <a href="<?= return_back(); ?>">&larr; Back to Dashboard</a>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/front/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/back/'); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>