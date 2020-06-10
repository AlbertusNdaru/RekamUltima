<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form action="<?= base_url('Controller_landingpage/Controller_landingpage/addhewan') ?>"
                        method="POST" enctype="multipart/form-data">
                        <h2>Registrasi Hewan</h2>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input required type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Nama Hewan">
                            </div>
                            <div class="form-group col-md-12">
                                <select required name="jenishewan" class="form-control" id="Selectjenis">
                                    <option>Pilih Jenis Hewan</option>
                                    <option value="Kucing">Kucing</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Ayam">Ayam</option>
                                    <option value="Sapi">Sapi</option>
                                    <option value="Kuda">Kuda</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select required name="jeniskelamin" class="form-control" id="course_type">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Jantan">Jantan</option>
                                    <option value="Betina">Betina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required class="form-control" id="Textarea" rows="4" name="signalemen"
                                    placeholder="Signalemen"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <Input required type="file" class="form-control" id="img" rows="4" max-size="2000000" name="imagehewan"
                                    placeholder="foto hewan"></Input>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <input required class="form-control" id="image" rows="4" name="image" placeholder="image"></textarea>
                            </div> -->
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn_2">Proses</button>
                        </div>
                    </form>
                </div>
            </diva>
            S
        </div>
    </div>
</section>
<!--::regervation_part end::-->

<!-- footer part start-->
<?php include "footer.php"; ?>

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
			title: 'Error : ',
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
    <!-- footer part end-->