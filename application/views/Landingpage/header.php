<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ultima</title>
    <link rel="icon" href="<?= base_url('assets/landingpage/'); ?>img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/'); ?>css/style.css">

    <!-- jquery plugins here-->
    <script src="<?= base_url('assets/landingpage/'); ?>js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url('assets/landingpage/'); ?>js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url('assets/landingpage/'); ?>js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?= base_url('assets/landingpage/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/landingpage/'); ?>js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="<?= base_url('assets/landingpage/'); ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/landingpage/'); ?>js/jquery.form.js"></script>
    <script src="<?= base_url('assets/landingpage/'); ?>js/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/landingpage/'); ?>js/mail-script.js"></script>
    <script src="<?= base_url('assets/landingpage/'); ?>js/contact.js"></script>
    <!-- custom js -->
    <script src="<?= base_url('assets/landingpage/'); ?>js/custom.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center" style="height: 100px;">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= base_url('landing') ?>"> <img src="<?= base_url('assets/landingpage/'); ?>img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <?php if (isset($_SESSION['pemilik'])) { ?>
                                    <li class="nav-item active">
                                        <a class="dropdown-item" href="<?= base_url('registerhewan') ?>">Data Hewan</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="dropdown-item" href="<?= base_url('datahewan/' . $_SESSION['pemilik']->Id_Pemilik) ?>">Rekam Medis & Data Hewan</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="dropdown-item" href="<?= base_url('aksitambahkritik') ?>">Kritik/Saran</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            My Profile
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?= base_url('edituser') ?>">Ubah Pemilik</a>
                                            <a class="dropdown-item" href="dep.html">Ubah Password</a>
                                        </div>
                                    </li>
                                    <!-- <a class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="Doctor.html">Doctors</a>
                                </li> -->

                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Service
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?= base_url('registerhewan') ?>">Registrasi Hewan</a>
                                            <a class="dropdown-item" href="dep.html">Data Hewan</a>
                                            <a class="dropdown-item" href="elements.html">Rekam Medis Hewan</a>
                                        </div>
                                    </li> -->
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" href="blog.html">blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li> -->
                                <?php } ?>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li> -->
                            </ul>
                        </div>

                        <?php if (isset($_SESSION["pemilik"])) { ?>
                            <a class="btn_2 d-none d-lg-block" href="#" style="margin-right: 10px"><?= $_SESSION['pemilik']->Nama_Pemilik ?></a>
                            <a class="btn_2 d-none d-lg-block" href="<?= base_url('logoutuser') ?>">LOGOUT</a>
                        <?php } else { ?>
                            <a class="btn_2 d-none d-lg-block" style="margin-right: 10px" href="<?= base_url("loginuser") ?>">LOGIN</a>
                            <a class="btn_2 d-none d-lg-block" href="<?= base_url("registeruser") ?>">REGISTER</a>
                        <?php } ?>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->