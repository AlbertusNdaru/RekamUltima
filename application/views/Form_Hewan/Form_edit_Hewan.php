<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Hewan </strong>
        </div>
        <div class="card-body">
            <form name="formedithewan" id="formvaliditas" action="<?= base_url('Controller_Hewan/ControllerHewan/edithewan') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Hewan</label></div>
                    <div class="col-12 col-md-9"><input required type="text" value="<?= $edithewan->Nama_Hewan ?>" onclick='validasi("NAMA","NAMA")' name="nama" id="NAMA" placeholder="Enter Your Name" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="jeniskelamin" class="form-control selectpicker">
                            <option>Choose Gender</option>
                            <option value="Jantam" <?php if ($edithewan->Jenis_Kelamin == "Jantan") {
                                                        echo 'selected';
                                                    } ?>>Jantan</option>
                            <option value="Betina" <?php if ($edithewan->Jenis_Kelamin == "Betina") {
                                                        echo 'selected';
                                                    } ?>>Betina</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Hewan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="jenishewan" class="form-control selectpicker">
                            <option>Pilih Jenis Hewan</option>
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
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Signalemne</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" name="signalemen" rows="3" class="form-control"><?php echo $edithewan->Signalemen ?></textarea></div>
                </label>

                <div class="row form-group">
                    <div class="col col-md-3"><label>Pemilik</label></div>
                    <div class="col-12 col-md-9">
                        <select name="pemilik" class="form-control selectpicker">
                            <option value="">Select Pemilik</option>
                            <?php foreach ($pemilik_hewan as $p) {
                                echo "<option value='$p->Id_Pemilik'";
                                echo $edithewan->Id_Pemilik == $p->Id_Pemilik ? 'selected' : '';
                                echo ">$p->Nama_Pemilik</option>";
                            } ?>
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $edithewan->Id_Hewan ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>

            </form>
        </div>
    </div>
</div>