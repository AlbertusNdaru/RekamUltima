<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="section_padding">
    <div class=" container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form name="formeditpemilik" action="<?= base_url('Controller_landingpage/Controller_landingpage/editpemilik') ?>" method="POST">
                        <h2>Edit Profile Pemilik</h2>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Nama Pemilik</label></div>
                            <div class="col-12 col-md-9"><input required type="text" name="name" class="form-control required" value="<?php echo $pemilik_hewan->Nama_Pemilik ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>No Hp Pemilik</label></div>
                            <div class="col-120 col-md-9"><input required type="text" name="phone" onkeyup="angka(this)" class="form-control" value="<?php echo $pemilik_hewan->NoHp_Pemilik ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                                <select name="gender" class="form-control selectpicker">
                                    <option>Choose Gender</option>
                                    <option value="L" <?php if ($pemilik_hewan->JenisKelamin == "L") {
                                                            echo 'selected';
                                                        } ?>>Laki-Laki</option>
                                    <option value="P" <?php if ($pemilik_hewan->JenisKelamin == "P") {
                                                            echo 'selected';
                                                        } ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <label class="row form-group">
                            <label class="col col-md-3"><label>Alamat Pemilik</label></label>
                            <div class="col-12 col-md-9"><textarea required type="text" name="alamat" rows="3" class="form-control"><?php echo $pemilik_hewan->Alamat_Pemilik ?></textarea></div>
                        </label>
                </div>
                <div class="regerv_btn">
                    <button type="submit" name="submitid" value="<?= $pemilik_hewan->Id_Pemilik ?>" class="btn_2">Edit</button>
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