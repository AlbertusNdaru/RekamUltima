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
    <title>Rekam Medis Ultima</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?= base_url('assets/'); ?>images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url('assets/'); ?>images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- /.Kata Page nya akan berubah tergantung siapa yang login berdasarkan level id -->
                    <h3 class="menu-title">Page Admin</h3>
                    <li class="active">
                        <a href="<?= base_url('rekammedis') ?>"> <i class="menu-icon fa fa-dashboard"></i>Rekam Medis </a>
                        <a href="<?= base_url('pemilik') ?>"> <i class="menu-icon fa fa-dashboard"></i>Pemilik </a>
                        <a href="<?= base_url('hewan') ?>"> <i class="menu-icon fa fa-dashboard"></i>Hewan </a>

                        <!-- Penentu login admin dan tenaga medis jangan diubah !!-->
                        <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
                            <a href="<?= base_url('tindakan') ?>"> <i class="menu-icon fa fa-dashboard"></i>Tindakan </a>
                            <a href="<?= base_url('level') ?>"> <i class="menu-icon fa fa-dashboard"></i>Hak Akses </a>
                            <a href="<?= base_url('tenagamedis') ?>"> <i class="menu-icon fa fa-dashboard"></i>Tenaga Medis </a>
                            <a href="<?= base_url('penyakit') ?>"> <i class="menu-icon fa fa-dashboard"></i>Penyakit </a>
                        <?php } ?>
                    </li>
                    <h3 class="menu-title">Laporan</h3>
                    <!-- /.Laporan -->
                    <li class="active">
                        <a href="#">Hewan</a>
                        <a href="#">Rekam Medis</a>
                        <a href="#">Kritik & Saran</a>
                    </li>
                    <h3 class="menu-title">Profile</h3>
                    <!-- /.Profile -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-glass"></i>My profile</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?= base_url('ControllerAdmin/Login/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">



                <div class="col-sm-12">
                    <div class="user-area dropdown float-right">
                        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/'); ?>images/admin.jpg" alt="User Avatar">
                            <span class="hidden-sm hidden-xs"> <?= $_SESSION['Admin']->Username ?></span>
                        </button>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= base_url('profil'); ?>"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="<?= base_url('ControllerAdmin/Login/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->

        <div>
            <div>

                <div>
                    <?= $contents ?>
                </div>
            </div>
        </div>

       

</body>
<footer align="center" class="row">
    <p class="col-md-12 col-sm-12 col-xs-12 copyright">&copy; <a target="_blank">Sistem Informasi Pengelolaan Data Rekam Medis Pet shop & Clinic Ultima</a> <!-- diisi tahun -->
    </p>
</footer>

</html>