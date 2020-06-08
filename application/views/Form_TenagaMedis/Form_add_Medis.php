<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Tenaga Medis </strong>
        </div>
        <div class="card-body">
            <form name="formaddtenagamedis" id="formvaliditas"
                action="<?= base_url('Controller_TenagaMedis/ControllerMedis/addmedis') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Tenaga Medis</label></div>
                    <div class="col-12 col-md-9"><input required type="text" onclick='validasi("NAMA","NAMA")'
                            name="name" id="NAMA" placeholder="Enter Your Name" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Email Tenaga Medis</label></div>
                    <div class="col-12 col-md-9"><input required type="email" onclick='validasi("EMAIL","EMAIL")'
                            name="email" id="EMAIL" placeholder="Enter Your Email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>No Hp Tenaga Medis</label></div>
                    <div class="col-120 col-md-9"><input required type="text"
                            onclick='validasi("PHONE","NOMER TELEPON")' name="phone" placeholder="Enter Phone Number"
                            id="PHONE" onkeyup="angka(this)" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="gender" class="form-control selectpicker">
                            <option value="P">Perempuan</option>
                            <option value="L">Laki - Laki</option>
                        </select>
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Alamat Tenaga Medis</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" onclick='validasi("ALAMAT","ALAMAT")'
                            name="alamat" id="ALAMAT" rows="3" placeholder="Input Your Address"
                            class="form-control"></textarea></div>
                </label>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>

            </form>
        </div>
    </div>
</div>
<script>
$('#NAMA').keypress(function(event) {
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