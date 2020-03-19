<div class="card">
    <div class="card-header">
        <strong class="card-tittle">Profile</strong>
    </div>
    <div class=" card-block card-header">
        <div class="card-body">
            <form name="formaeditprofil" id="formvaliditas" action="<?= base_url('ControllerAdmin/Profil/editprofil') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Username</label></div>
                    <div class="col-12 col-md-9"><input required type="text" value="<?= $admin->Username ?>" name="username" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Password</label></div>
                    <div class="col-12 col-md-9"><input required type="password" onclick='validasi("PASSWORD1","PASSWORD1")' value="<?= $admin->Password ?>" name="password1" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Verifikasi form_validationPassword</label></div>
                    <div class="col-12 col-md-9"><input required type="password" onclick='validasi("PASSWORD2","PASSWORD2")' value="<?= $admin->Password ?>" name="password2" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $admin->Id_Admin ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>

            </form>
        </div>
    </div>
    <script>
        $('#PASSWORD1').keypress(function(event) {
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
                    }else if (e.target.validity.ValueNoMatch){
                        e.target.setCustomValidity(text + "Password Tidak Cocok");
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