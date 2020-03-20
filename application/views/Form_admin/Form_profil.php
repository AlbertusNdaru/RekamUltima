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
                    <div class="col-12 col-md-9"><input required type="password" id="pass1" value="<?= $admin->Password ?>" name="password1" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Verifikasi Password</label></div>
                    <div class="col-12 col-md-9"><input required type="password" id="pass2" onchange="validatepassword()" value="<?= $admin->Password ?>" name="password2" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="btnsubmit" name="submitid" value="<?= $admin->Id_Admin ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>

            </form>
        </div>
    </div>
    <script>
        var form = document.querySelector("#formvaliditas");

        function validatepassword() {
            var pas1 = $('#pass1').val();
            var pas2 = $('#pass2').val();
            var val = $("#pass2")[0];
            var input = document.getElementById('pass2');
            // console.log(pas1 + "  " + pas2);
            val.oninput = function(e) {
                e.target.setCustomValidity("")
            }

            if (pas1 != pas2) {

                val.setCustomValidity("Password Tidak Cocok");
                $('#btnsubmit').attr('disabled', 'true')
                form.reportValidity();
            } else {
                $('#btnsubmit').removeAttr('disabled')
                val.setCustomValidity("");
            }
        }



        function angka(e) {
            if (!/^[0-9]+$/.test(e.value)) {
                e.value = e.value.substring(0, e.value.length - 1);
            }
        }
    </script>