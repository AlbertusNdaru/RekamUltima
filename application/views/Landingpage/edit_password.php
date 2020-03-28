<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="regervation_part section_padding">
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
                            <div class="col col-md-3"><label>Password</label></div>
                            <div class="col-12 col-md-9"><input required type="password" name="password1" class="form-control required" value="<?php echo $pemilik_hewan->Password ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Password</label></div>
                            <div class="col-12 col-md-9"><input required type="password" name="password2" class="form-control required" value="<?php echo $pemilik_hewan->Password ?>">
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" name="submitid" value="<?= $pemilik_hewan->Id_Pemilik ?>" class="btn_2">Proses</button>
                        </div>
                    </form>
                </div>
            </diva>
        </div>
    </div>
</section>
<!--::regervation_part end::-->

<!-- footer part start-->
<?php include "footer.php"; ?>
<!-- footer part end-->