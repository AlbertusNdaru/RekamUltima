<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form name="formeditpemilik" action="<?= base_url('Controller_landingpage/Controller_landingpage/editpassword') ?>" method="POST">
                        <h2>Edit Profile Pemilik</h2>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Username</label></div>
                            <div class="col-12 col-md-9"><input required type="text" name="username" class="form-control required" value="<?php echo $pemilik_hewan->Username ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Password Baru</label></div>
                            <div class="col-12 col-md-9"><input required type="password" name="password1" id="pass1" class="form-control required">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Password Verifikasi</label></div>
                            <div class="col-12 col-md-9"><input required type="password" name="password2" id="pass2" onchange="validatepassword()" class="form-control required">
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" name="submitid" id="btnsubmit" value="<?= $pemilik_hewan->Id_Pemilik ?>" class="btn_2">Update</button>
                        </div>
                    </form>
                </div>
            </diva>
        </div>
    </div>
</section>
<!--::regervation_part end::-->
<script>
    var form = document.querySelector("#formvaliditas");

    function validatepassword() {
        var pas1 = $('#pass1').val();
        var pas2 = $('#pass2').val();
        var val = $("#pass2")[0];
        //var input = document.getElementById('pass2');
        // console.log(pas1 + "  " + pas2);
        val.oninput = function(e) {
            e.target.setCustomValidity("")
        }

        if (pas1 != pas2) {

            val.setCustomValidity("Password Tidak Cocok");
            $('#btnsubmit').attr('disabled', 'true')
            form.reportValidity();
        } else {
            $('#btsubmit').removeAttr('disabled')
            val.setCustomValidity("");
        }
    }



    function angka(e) {
        if (!/^[0-9]+$/.test(e.value)) {
            e.value = e.value.substring(0, e.value.length - 1);
        }
    }
</script>
<!-- footer part start-->
<?php include "footer.php"; ?>
<!-- footer part end-->