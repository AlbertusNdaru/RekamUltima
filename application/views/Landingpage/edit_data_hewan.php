<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form action="<?= base_url('Controller_landingpage/Controller_landingpage/edithewan') ?>"
                        method="POST">
                        <h2>Registrasi Hewan</h2>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input required type="text" name="nama" class="form-control" id="nama"
                                    value="<?= $edithewan->Nama_Hewan ?>" placeholder="Nama Hewan">
                            </div>
                            <div class="form-group col-md-12">
                                <select name="jenishewan" class="form-control selectpicker">
                                    <option>PILIH JENIS HEWAN</option>
                                    <option value="Kucing" <?php if ($edithewan->Jenis_Hewan == "Kucing") {
                                                                echo 'selected';
                                                            } ?>>Kucing</option>
                                    <option value="Anjing" <?php if ($edithewan->Jenis_Hewan == "Anjing") {
                                                                echo 'selected';
                                                            } ?>>Anjing</option>
                                    <option value="Ayam" <?php if ($edithewan->Jenis_Hewan == "Ayam") {
                                                                echo 'selected';
                                                            } ?>>Ayam</option>
                                    <option value="Sapi" <?php if ($edithewan->Jenis_Hewan == "Sapi") {
                                                                echo 'selected';
                                                            } ?>>Sapi</option>
                                    <option value="Kuda" <?php if ($edithewan->Jenis_Hewan == "Kuda") {
                                                                echo 'selected';
                                                            } ?>>Kuda</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select name="jeniskelamin" class="form-control selectpicker">
                                    <option>PILIH JENIS KELAMIN</option>
                                    <option value="Jantan" <?php if ($edithewan->Jenis_Kelamin == "Jantan") {
                                                                echo 'selected';
                                                            } ?>>Jantan</option>
                                    <option value="Betina" <?php if ($edithewan->Jenis_Kelamin == "Betina") {
                                                                echo 'selected';
                                                            } ?>>Betina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required class="form-control" id="Textarea" rows="4" name="signalemen"
                                    placeholder="Signalemen"><?= $edithewan->Signalemen ?></textarea>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <input required class="form-control" id="image" rows="4" name="image" placeholder="image"></textarea>
                            </div> -->
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" name="submitid" value="<?= $edithewan->Id_Hewan ?>"
                                class="btn_2">Edit</button>
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