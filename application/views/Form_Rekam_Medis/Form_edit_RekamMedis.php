<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Tenaga Medis</strong>
        </div>
        <div class="card-body">
            <form name="formeditmedis" id="formvaliditas" action="<?= base_url('Controller_TenagaMedis/ControllerMedis/editmedis') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Tenaga Medis</label></div>
                    <div class="col-12 col-md-9"><input type="name" name="name" class="form-control" value="<?php echo $editmedis->Nama_TenagaMedis ?>">
                    </div>
                </div>
                <div class=" row form-group">
                    <div class="col col-md-3"><label>Email Tenaga Medis</label></div>
                    <div class="col-12 col-md-9"><input readonly type="email" name="email" class="form-control" value="<?php echo $editmedis->Email ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>No Hp Tenaga Medis</label></div>
                    <div class="col-120 col-md-9"><input type="phone" name="phone" class="form-control" value="<?php echo $editmedis->NoHp_TenagaMedis ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <select name="gender" class="form-control selectpicker">
                            <option>Choose Gender</option>
                            <option value="L" <?php if ($editmedis->JenisKelamin == "L") {
                                                    echo 'selected';
                                                } ?>>Laki-Laki</option>
                            <option value="P" <?php if ($editmedis->JenisKelamin == "P") {
                                                    echo 'selected';
                                                } ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Alamat Tenaga Medis</label></label>
                    <div class="col-12 col-md-9"><textarea name="alamat" id="textarea-input" rows="5" class="form-control" ><?php echo $editmedis->Alamat_TenagaMedis?></textarea></div>
                </label>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $editmedis->Id_TenagaMedis?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update

                </form>
        </div>
    </div>
</div>