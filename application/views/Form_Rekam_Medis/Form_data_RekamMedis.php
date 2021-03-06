<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rekam Medis</h1>
            </div>
        </div>
    </div>
    <!-- <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="card-body">
                <a href="<?= base_url('aksitambahmedis') ?>" class="btn btn-addhewan btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
                <a href="#" class="btn btn-minimize btn-sm btn-primary"><i class="fa fa-sort-down"></i></a>
            </div>
        </div>
    </div> -->
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Rekam Medis</th>
                                    <th>Nama Hewan</th>
                                    <th>Nama Pemilik</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rekam_medis as $rm) { ?>
                                    <tr>
                                        <td><?= $rm->Id_RekamMedis ?></td>
                                        <td><?= $rm->Nama_Hewan ?></td>
                                        <td><?= $rm->Nama_Pemilik ?></td>
                                        <td class="center">
                                            <a class="btn btn-info" style="width: 80px;" href="<?= base_url('viewTambah/') . $rm->Id_RekamMedis ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Tambah
                                            </a>
                                            <a class="btn btn-primary" style="width: 80px;" href="<?= base_url('detailrekammedis/') . $rm->Id_Hewan ?>">
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