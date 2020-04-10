<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Tenaga Medis</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="card-body">
                <a href="<?= base_url('aksitambahmedis') ?>" class="btn btn-addmedis btn-sm btn-primary"><i
                        class="fa fa-plus-circle"></i></a>
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
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tenagamedis as $m) { ?>
                                <tr>
                                    <td><?= $m->Nama_TenagaMedis ?></td>
                                    <td><?= $m->NoHp_TenagaMedis ?></td>
                                    <td><?= $m->Alamat_TenagaMedis ?></td>
                                    <td><?= $m->JenisKelamin ?></td>
                                    <td class="center">
                                        <span
                                            class="label-success label <?php if ($m->Status == 'Aktif') echo 'label-default';
                                                                                else echo 'label-danger'; ?>"><?= $m->Status ?></span>
                                    </td>
                                    <td class=" center">
                                        <?php if ($_SESSION['Admin']->Id_Level == 1) { ?>
                                        <?php if ($m->Status == "TidakAktif") { ?>
                                        <a class="btn btn-success" style="width: 94px;"
                                            href="<?= base_url('editstatusmedis/' . $m->Id_TenagaMedis . '/Aktif') ?>">
                                            <i class="glyphicon glyphicon-ok icon-white"></i>
                                            Aktif
                                            <?php } else { ?>
                                            <a class="btn btn-danger" style="width: 94px;"
                                                href="<?= base_url('editstatusmedis/' . $m->Id_TenagaMedis . '/TidakAktif') ?>">
                                                <i class="glyphicon glyphicon-remove icon-white"></i>
                                                Off
                                                <?php } ?>
                                            </a>
                                            <?php } ?>
                                            <a class="btn btn-info"
                                                href="<?= base_url('formeditmedis/' . $m->Id_TenagaMedis . '') ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger"
                                                href="<?= base_url('deletemedis/' . $m->Id_TenagaMedis . '') ?>">
                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                Delete
                                            </a>
                                            <a class="btn btn-primary"
                                                href="<?= base_url('regadmin/' . $m->Id_TenagaMedis . '') ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Jadikan Admin
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