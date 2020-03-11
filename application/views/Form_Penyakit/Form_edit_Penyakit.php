<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Penyakit </strong>
        </div>
        <div class="card-body">
            <form name="formeditpenyakit" id="formvaliditas" action="<?= base_url('Controller_Penyakit/ControllerPenyakit/editpenyakit') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Penyakit</label></div>
                    <div class="col-12 col-md-9">
                        <input type="name" name="penyakit" class="form-control" value="<?php echo $editpenyakit->Nama_Penyakit ?>">
                    </div>
                </div>
                <label class="row form-group">
                    <label class="col col-md-3"><label>Gejala</label></label>
                    <div class="col-12 col-md-9">
                        <textarea type="name" name="gejala" rows="5" class="form-control"><?= $editpenyakit->Gejala ?></textarea></div>
                </label>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $editpenyakit->Id_Penyakit ?>" class=" btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>

            </form>
        </div>
    </div>
</div>