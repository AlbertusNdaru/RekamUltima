<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="breadcrumbs">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="card-body">
                                    <h1>Data Pemilik</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="card-body">
                                    <a href="<?= base_url('aksitambahpemilik') ?>" class="btn btn-addhewan btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
                                    <a href="#" class="btn btn-minimize btn-sm btn-primary"><i class="fa fa-sort-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>No Handphone</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat Pemilik</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pemilik_hewan as $ph) { ?>
                                    <tr>
                                        <td><?= $ph->Nama_Pemilik ?></td>
                                        <td><?= $ph->NoHp_Pemilik ?></td>
                                        <td><?= $ph->JenisKelamin ?></td>
                                        <td><?= $ph->Alamat_Pemilik ?></td>
                                        <td class="center">
                                            <span class="label-success label <?php if ($ph->Status == 'Aktif') echo 'label-default';
                                                                                else echo 'label-danger'; ?>"><?= $ph->Status ?></span>
                                        </td>
                                        <td class="center">
                                            <?php if ($ph->Status == "TidakAktif") { ?>
                                                <a class="btn btn-success" style="width: 94px;" href="<?= base_url('editstatuspemilik/' . $ph->Id_Pemilik . '/Aktif') ?>">
                                                    <i class="glyphicon glyphicon-ok icon-white"></i>
                                                    Aktif
                                                <?php } else { ?>
                                                    <a class="btn btn-danger" style="width: 94px;" href="<?= base_url('editstatuspemilik/' . $ph->Id_Pemilik . '/TidakAktif') ?>">
                                                        <i class="glyphicon glyphicon-remove icon-white"></i>
                                                        Tidak Aktif
                                                    <?php } ?>
                                                    </a>
                                                    <a class="btn btn-info" style="width: 69px;" href="<?= base_url('formeditpemilik/' . $ph->Id_Pemilik . '') ?>">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletepemilik/' . $ph->Id_Pemilik . '') ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
    </div>
    <!--/span-->