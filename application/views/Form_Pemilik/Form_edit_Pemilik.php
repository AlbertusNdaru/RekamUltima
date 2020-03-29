<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Pemilik Hewan </strong>
        </div>
        <div class="card-body">
            <form name="formeditpemilik" id="formvaliditas" action="<?= base_url('Controller_Pemilik/ControllerPemilik/editpemilik') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Pemilik</label></div>
                    <div class="col-12 col-md-9"><input required type="text" name="name" class="form-control required" value="<?php echo $editpemilik->Nama_Pemilik ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>No Hp Pemilik</label></div>
                    <div class="col-120 col-md-9"><input required type="text" name="phone" onkeyup="angka(this)" class="form-control" value="<?php echo $editpemilik->NoHp_Pemilik ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="gender" class="form-control selectpicker">
                            <option>Choose Gender</option>
                            <option value="L" <?php if ($editpemilik->JenisKelamin == "L") {
                                                    echo 'selected';
                                                } ?>>Laki-Laki</option>
                            <option value="P" <?php if ($editpemilik->JenisKelamin == "P") {
                                                    echo 'selected';
                                                } ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Alamat Pemilik</label></label>
                    <div class="col-12 col-md-9"><textarea required type="text" name="alamat" rows="3" class="form-control"><?php echo $editpemilik->Alamat_Pemilik ?></textarea></div>
                </label>
        </div>
        <div class="modal-footer">
            <button type="submit" name="sumitid" value="<?= $editpemilik->Id_Pemilik ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>

            </form>
        </div>
    </div>
</div>