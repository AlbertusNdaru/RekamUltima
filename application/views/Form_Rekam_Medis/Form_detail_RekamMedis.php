<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Rekam Medis</h1>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Kartu Rekam Medis Hewan</strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col col-md-3"><label>Nama Pemilik</label></div>
                            <div class="col-6 col-md-3"><input required type="text" name="anamnesa" class="form-control required">
                            <div class="col col-md-3"><label>Nama Hewan</label></div>
                            <div class="col-6 col-md-3"><input required type="text" name="anamnesa" class="form-control required">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label>No Hp</label></div>
                            <div class="col-6 col-md-3"><input required type="text" name="anamnesa" class="form-control required">
                            <div class="col col-md-3"><label>Signalemen</label></div>
                            <div class="col-6 col-md-3"><input required type="text" name="anamnesa" class="form-control required">
                            </div>
                        </div>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Anamnesa</th>
                                    <th>Diagnosa / Penyakit</th>
                                    <th>Terapi/Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rekam_medis as $rm) { ?>
                                    <tr>
                                        <td><?= $rm->Id_RekamMedis ?></td>
                                        <td><?= $rm->Nama_Hewan ?></td>
                                        <td class="center">
                                            <a class="btn btn-info" style="width: 80px;" href="<?= base_url('viewTambah/') . $rm->Id_RekamMedis ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Tambah
                                            </a>
                                            <a class="btn btn-primary" style="width: 80px;" href="#">
                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->