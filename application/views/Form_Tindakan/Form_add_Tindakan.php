<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Tindakan </strong>
        </div>
        <div class="card-body">
            <form name="formaddtindakan" id="formvaliditas" action="<?= base_url('Controller_Tindakan/ControllerTindakan/addtindakan') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Nama Tindakan</label></div>
                    <div class="col-12 col-md-9"><input required type="text" name="tindakan" id="TINDAKAN" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>

            </form>
        </div>
    </div>
</div>