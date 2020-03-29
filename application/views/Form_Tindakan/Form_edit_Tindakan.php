<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Tindakan </strong>
        </div>
        <div class="card-body">
            <form name="formedittindakan" id="formvaliditas" action="<?= base_url('Controller_Tindakan/ControllerTindakan/edittindakan') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Tindakan</label></div>
                    <div class="col-12 col-md-9"><input required type="text" name="tindakan" value="<?php echo $edittindakan->Nama_Tindakan ?>" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $edittindakan->Id_Tindakan ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
            </form>
        </div>
    </div>
</div>