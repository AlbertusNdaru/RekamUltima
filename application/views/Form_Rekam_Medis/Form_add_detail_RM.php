<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Detail Rekam Medis => "<?= $rekam->Nama_Hewan ?>"</strong>
        </div>
        <div class="card-body">
            <form name="formaddDetailMedis" id="formvaliditas" action="<?= base_url('addDetailMedis') ?>" method="POST">
                <label class="row form-group">
                    <label class="col col-md-3"><label>Anamnesa</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" onclick='validasi("ANAMNESA","ANAMNESA")' name="anamnesa" id="ANAMNESA" rows="3" class="form-control"></textarea></div>
                </label>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Berat Badan</label></div>
                    <div class="col-12 col-md-9"><input required type="number" onchange="setTwoNumberDecimal" step="any" onclick='validasi("BB","BB")' name="bb" id="BB" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Suhu Tubuh (Celcius)</label></div>
                    <div class="col-120 col-md-9"><input required type="number" onchange="setTwoNumberDecimal" step="any" onclick='validasi("SUHUTUBUH","Suhu TUbuh")' name="suhu" id="SUHUTUBUH" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Penyakit</label></div>
                    <div class="col-12 col-md-9">
                        <select name="penyakit" class="form-control selectpicker">
                            <option selected value="">Select Penyakit</option>
                            <?php foreach ($penyakit as $p) {
                                echo "<option value='$p->Id_Penyakit'>$p->Nama_Penyakit</option>";
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label>Tindakan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="tindakan" class="form-control selectpicker">
                            <option selected value="">Select Tindakan</option>
                            <?php foreach ($tindakan as $p) {
                                echo "<option value='$p->Id_Tindakan'>$p->Nama_Tindakan</option>";
                            } ?>
                        </select>
                    </div>
                </div>

                <label class="row form-group">
                    <label class="col col-md-3"><label>Injeksi atau Resep</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" onclick='validasi("RESEP","RESEP")' name="resep" id="RESEP" rows="3" class="form-control"></textarea></div>
                </label>

                <div class="row form-group">
                    <div class="col col-md-3"><label>Tenaga Medis</label></div>
                    <div class="col-12 col-md-9">
                        <select name="tenagamedis" class="form-control selectpicker">
                            <option selected value="">Select Tenaga Medis</option>
                            <?php foreach ($tenagamedis as $p) {
                                echo "<option value='$p->Id_TenagaMedis'>$p->Nama_TenagaMedis</option>";
                            } ?>
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="idrekam" value="<?= $rekam->Id_RekamMedis ?>" class="btn btn-primary btn-sm">
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
    // $('#ANAMNESA').keypress(function(event) {
    //     var charCode = window.event.keyCode;
    //     return (((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) || charCode == 32 || charCode == 46)

    // });

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