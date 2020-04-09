<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Ultima</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="<?= base_url('assets/loginuser/'); ?>image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url('assets/loginuser/'); ?>images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?= base_url('Controller_landingpage/Controller_landingpage/addpemilikfromlanding') ?>" method="POST">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        REGISTER
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter Name">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Phone">
                        <input class="input100" type="number" name="phone" placeholder="Phone">
                        <span class="focus-input100" data-placeholder="&#xf2ba;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter address">
                        <textarea class="input100" type="text" name="alamat" placeholder="Address"></textarea>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter JenisKel">
                        <select name="gender" class="form-control selectpicker">
                            <option selected>Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki - Laki</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/loginuser/'); ?>js/main.js"></script>

</body>

</html>