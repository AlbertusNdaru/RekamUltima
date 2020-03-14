<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Rekam Medis</strong>
        </div>
        <div class="card-body">
            <form name="formaddRekamMedis" id="formvaliditas" action="<?= base_url('addDetailMedis') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Hewan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="penyakit" class="form-control selectpicker">
                            <option selected value="">Pilih Nama</option>
                            <?php foreach ($penyakit as $p) {
                                echo "<option value='$p->Id_Penyakit'>$p->Nama_Penyakit</option>";
                            } ?>
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="idrekam" value="<?= $idrekam?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Tambah
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>

            </form>
        </div>
    </div>
</div>
<script>
    $('#ANAMNESA').keypress(function(event) {
        var charCode = window.event.keyCode;
        return (((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) || charCode == 32 || charCode == 46)

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