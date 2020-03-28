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
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin Ultima</title>
    <link rel="icon" href="<?= base_url('assets/landingpage/'); ?>img/favicon.png">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body class="bg-dark">




    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="row">
                    <div class="col-md-12 center login-header">
                    </div>
                </div>
                <div class="login-form ">
                    <form action="<?= base_url('ControllerAdmin/Login/login'); ?>" method="POST" >
                        <h3 align="center">Please Enter Your Username and Password</h3>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="<?= base_url('ControllerAdmin/Reg_admin'); ?>"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/main.js"></script>

</body>

</html>