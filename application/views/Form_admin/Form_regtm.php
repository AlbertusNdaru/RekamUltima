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
    <title>Register Tenaga Medis Ultima</title>
    <link rel="icon" href="<?= base_url('assets/landingpage/'); ?>img/favicon.png">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="<?= base_url('assets/'); ?>assets/js/main.js"></script> -->


</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="row">
                    <div class="col-md-12 center login-header">
                    </div>
                </div>
                <div class="login-form">
                    <form action="<?= base_url('ControllerAdmin/Reg_Admin/add_medis'); ?>" method="POST" id="formvaliditas">
                        <h2 align="center">Register Tenaga Medis</h2>
                        </br>
                        <?= $this->session->flashdata('Error'); ?>
                        <div class="row form-group">
                            <label>Nama Tenaga Medis</label>
                            <input required type="text" onclick='validasi("NAMA","NAMA")' name="name" id="NAMA"
                                placeholder="Enter Your Name" class="form-control required">
                        </div>
                        <div class="row form-group">
                            <label>Email Tenaga Medis</label>
                            <input required type="email" onclick='validasi("EMAIL","EMAIL")' name="email" id="EMAIL"
                                placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="row form-group">
                            <label>No Hp Tenaga Medis</label>
                            <input required type="text" onclick='validasi("PHONE","NOMER TELEPON")' name="phone"
                                placeholder="Enter Phone Number" id="PHONE" onkeyup="angka(this)" class="form-control">
                        </div>
                        <div class="row form-group">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control selectpicker">
                                <option value="P">Perempuan</option>
                                <option value="L">Laki - Laki</option>
                            </select>
                        </div>
                        <div class="row form-group">
                            <label>Alamat Tenaga Medis</label>
                            <textarea required type="text" onclick='validasi("ALAMAT","ALAMAT")' name="alamat"
                                id="ALAMAT" rows="3" placeholder="Input Your Address" class="form-control"></textarea>
                            </label>
                        </div>
                        </br>
                        <button type="submit" name="submitid"
                            class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="<?= base_url('admin') ?>"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>


    var form = document.querySelector("#formvaliditas");


    function validasi(textbox, text) {
        var input = document.getElementById(textbox);
        console.log(textbox);
        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " WAJIB DIISI");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }


    }


    function angka(e) {
        if (!/^[0-9]+$/.test(e.value)) {
            e.value = e.value.substring(0, e.value.length - 1);
        }
    }
    </script>



</body>

</html>