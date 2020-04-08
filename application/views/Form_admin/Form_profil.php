<div class="card">
    <div class="card-header">
        <strong class="card-tittle">Change Password</strong>
    </div>
    <div class=" card-block card-header">
        <div class="card-body">
            <form name="formaeditprofil" id="formvaliditas" action="<?= base_url('ControllerAdmin/Profil/editprofil') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Username</label></div>
                    <div class="col-12 col-md-9"><input required type="text" value="<?= $admin->Username ?>" name="username" class="form-control required" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Password Baru</label></div>
                    <div class="col-12 col-md-9"><input required type="password" id="pass1"  name="password1" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Verifikasi Password</label></div>
                    <div class="col-12 col-md-9"><input required type="password" id="pass2" onchange="validatepassword()" name="password2" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <!-- buttonnya di disabled dulu aja biar gak bisa update kalo belum ke isi -->
            <button type="submit" disabled id="btnsubmit" name="submitid" value="<?= $admin->Id_Admin ?>" class="btn btn-primary btn-sm">
                Update
            </button>

            </form>
        </div>
    </div>
    <script>
        var form = document.querySelector("#formvaliditas");

        function validatepassword() {
            var pas1 = $('#pass1').val(); // -> ambil data dari element dengan id pass1
            var pas2 = $('#pass2').val();// -> ambil data dari element dengan id pass2
            var val = $("#pass2")[0]; // ini buat ambil element html yang mau di kasih custom validasi 
            // bawah iki dipake validasi password e sama tidak 
            if (pas1 != pas2) // membandingan apa pas1 dan pas2 itu sama atau tidak 
            {
                // jika tidak masuk kesini

                val.setCustomValidity("Password Tidak Cocok"); // ini dipake custom kata2 validasinya 
                $('#btnsubmit').attr('disabled', 'true') // ini buat disable button updatenya
                form.reportValidity(); // buat nampilin kata2 validasinya
            } else 
            {
                //jika sama masuk kesini
                $('#btnsubmit').removeAttr('disabled') // ini buat remove disablenya atau buat enable button
                val.setCustomValidity("");// validasi kata2nya di kosongi 
            }
        }



        function angka(e) {
            if (!/^[0-9]+$/.test(e.value)) {
                e.value = e.value.substring(0, e.value.length - 1);
            }
        }
    </script>