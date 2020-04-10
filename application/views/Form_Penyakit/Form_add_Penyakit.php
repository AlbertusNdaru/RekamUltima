<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Penyakit </strong>
        </div>
        <div class="card-body">
            <form name="formaddpenyakit" id="formvaliditas"
                action="<?= base_url('Controller_Penyakit/ControllerPenyakit/addpenyakit') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Penyakit</label></div>
                    <div class="col-12 col-md-9"><input required type="text" onclick='validasi("PENYAKIT","PENYAKIT")'
                            name="penyakit" id="PENYAKIT" class="form-control required">
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Gejala</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" onclick='validasi("GEJALA","GEJALA")'
                            name="gejala" id="GEJALA" rows="3" class="form-control"></textarea></div>
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
$('#PENYAKIT').keypress(function(event) {
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