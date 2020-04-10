<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="<?= base_url('assets/loginuser/'); ?>image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginuser/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<link href="<?= base_url('assets/loginuser/'); ?>css/animate.min.css" rel='stylesheet'>
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/images/'); ?>bglogin.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= base_url('Controller_landingpage/Controller_landingpage/validasilogin') ?>" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<h3 style="font-size:20px" class="login100-form-title p-b-34 p-t-27">
						PLEASE ENTER YOUR USERNAME AND PASSWORD
					</h3>
					<!-- <?= $this->session->flashdata('Error'); ?> -->
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
							Login
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
	<script src="<?= base_url('assets/loginuser/'); ?>js/bootstrap-notify.js"></script>

</body>

<script>
	<?php if (!empty($this->session->flashdata('Status'))) { ?>
		setnotif('<?php echo $this->session->flashdata('Status') ?>');
	<?php } ?>

	function setnotif(err) {

		if (err == 'Berhasil Input' || err == 'Edit Success' || err == 'Delete Success') {
			ttp = 'success';
		} else {
			ttp = 'danger';
		}
		$.notify({
			// options
			icon: 'glyphicon glyphicon-star',
			title: 'Status',
			message: err,
		}, {
			// settings
			element: 'body',
			position: null,
			type: ttp,
			allow_dismiss: true,
			newest_on_top: false,
			showProgressbar: false,
			placement: {
				from: "top",
				align: "center"
			},
			offset: 20,
			spacing: 10,
			z_index: 1031,
			delay: 2000,
			timer: 1000,
			url_target: '_blank',
			mouse_over: null,
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
			onShow: null,
			onShown: null,
			onClose: null,
			onClosed: null,
			icon_type: 'class',
			template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message">{2}</span>' +
				'<div class="progress" data-notify="progressbar">' +
				'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
				'</div>' +
				'<a href="{3}" target="{4}" data-notify="url"></a>' +
				'</div>'
		});

	}
</script>

</html>