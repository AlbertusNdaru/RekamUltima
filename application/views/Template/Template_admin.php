<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Ultima</title>
    <link rel="icon" href="<?= base_url('assets/landingpage/'); ?>img/favicon.png">
    <meta name="description" content="Rekam Medis Ultima">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link  href="<?= base_url('assets/loginuser/'); ?>css/animate.min.css" rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script src="<?= base_url('assets/'); ?>assets/js/main.js"></script> -->
    <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--  Chart js -->
    <script src="<?= base_url('assets/'); ?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/init-scripts/chart-js/chartjs-init.js"></script>
    <script src="<?= base_url('assets/loginuser/'); ?>js/bootstrap-notify.js"></script>
    


</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="<?= base_url('dashboard') ?>"> <img src="<?= base_url('assets/landingpage/'); ?>img/logo.png" alt="logo"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <?php include "BarMenu.php"; ?>
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">


                <div class="col-sm-7">
                    <!-- <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a> -->
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/'); ?>images/admin.jpg" alt="User Avatar">
                            <br>
                            <br>
                            <span class="hidden-sm hidden-xs"> <?= $_SESSION['Admin']->Username ?></span>
                        </button>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= base_url('editprofile/') . $_SESSION['Admin']->Id_Admin ?>"><i class="fa fa-user"></i> Change Password</a>
                            <a class="nav-link" href="<?= base_url('ControllerAdmin/Login/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <?= $contents ?>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?= base_url('assets/'); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>