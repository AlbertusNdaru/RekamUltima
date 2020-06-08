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
    <title>Register Admin Ultima</title>
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
                    <form action="<?= base_url('ControllerAdmin/Reg_Admin/add_admin'); ?>" method="POST">
                        <h2 align="center">Register Admin</h2>
                        </br>
                        <?= $this->session->flashdata('Error'); ?>
                        <div class="form-group">
                            <input required readonly type="text" class="form-control" placeholder="Username"
                                value="<?php $nama = explode(" ", $tenagamedis->Nama_TenagaMedis);
                                echo $nama[0]; ?>" name="username" id="USERNAME">
                        </div>
                        <div class="form-group">
                            <input required readonly type="text" class="form-control" placeholder="Password"
                                value="<?= rand(100000, 999999) ?>" name="password" id="PASSWORD">
                        </div>
                        <div class="form-group">
                            <input required readonly type="email" class="form-control" placeholder="Email Tenaga Medis"
                                value="<?= $tenagamedis->Email ?>" name="email" id="EMAIL">
                        </div>
                        <div class="select-list">
                            <select required name="level" id="course_type">
                                <option selected value="">Select Hak Akses</option>
                                <?php foreach ($level as $l) {
                                    echo "<option value='$l->Id_Level'>$l->Deskripsi</option>";
                                } ?>
                            </select>
                        </div>
                        </br>
                        <button type="submit" name="submitid"
                            class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('#USERNAME').keypress(function(event) {
        var charCode = window.event.keyCode;
        return (((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) || charCode == 32 ||
            charCode == 46)

    });

    var form = document.querySelector("#formvaliditas");


    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

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
    <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/main.js"></script>


</body>

</html>