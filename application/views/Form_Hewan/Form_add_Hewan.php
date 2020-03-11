<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Hewan </strong>
        </div>
        <div class="card-body">
            <form name="formaddhewan" id="formvaliditas" action="<?= base_url('Controller_Hewan/ControllerHewan/addhewan') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Hewan</label></div>
                    <div class="col-12 col-md-9"><input required type="text" onclick='validasi("NAMA","NAMA")' name="nama" id="NAMA" placeholder="Enter Your Name" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="jeniskelamin" class="form-control selectpicker">
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Hewan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="jenishewan" class="form-control selectpicker">
                            <option value="Kucing">Kucing</option>
                            <option value="Anjing">Anjing</option>
                            <option value="Ayam">Ayam</option>
                            <option value="Sapi">Sapi</option>
                            <option value="Kuda">Kuda</option>
                        </select>
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Signalemen</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" onclick='validasi("SIGNALEMEN","SIGNALEMEN")' name="signalemen" id="SIGNALEMEN" rows="3" placeholder="Masukan Ciri Khas Hewan" class="form-control"></textarea></div>
                </label>

                <div class="row form-group">
                    <div class="col col-md-3"><label>Pemilik</label></div>
                    <div class="col-12 col-md-9">
                        <select name="pemilik" class="form-control selectpicker">
                            <option selected value="">Select Pemilik</option>
                            <?php foreach ($pemilik_hewan as $p) {
                                echo "<option value='$p->Id_Pemilik'>$p->Nama_Pemilik</option>";
                            } ?>
                        </select>
                    </div>
                </div>
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