<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Hak Akses </strong>
        </div>
        <div class="card-body">
            <form name="formeditlevel" id="formvaliditas" action="<?= base_url('Controller_Level/Controller_level/editlevel') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Hak Akses</label></div>
                    <div class="col-12 col-md-9"><input required type="text" name="hakakses" value="<?php echo $editlevel->Deskripsi ?>" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $editlevel->Id_Level ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
            </form>
        </div>
    </div>
</div>