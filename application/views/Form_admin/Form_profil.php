<div class="card">
    <div class="card-header">
        <strong class="card-tittle">Profile</strong>
    </div>
    <div class=" card-block card-header">
        <div class="card-body">
            <form name="formaeditprofil" id="formvaliditas" action="<?= base_url('ControllerAdmin/Profil/editprofil') ?>" method="POST">
                <div class="row form-group">
                    <div class="col col-md-3"><label>Username</label></div>
                    <div class="col-12 col-md-9"><input required type="text" value="<?= $editprofil->Username ?>" name="username" class="form-control required">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label>Password</label></div>
                    <div class="col-12 col-md-9"><input required type="password" value="<?= $editprofil->Password ?>" name="password" class="form-control required">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submitid" value="<?= $editprofil->Id_Admin ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>

            </form>
        </div>
    </div>