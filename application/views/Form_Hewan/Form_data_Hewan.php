    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1> Data Hewan</h1>
                </div>
            </div>
        </div>
        <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="card-body">
                        <a href="<?= base_url('aksitambahhewan') ?>" class="btn btn-addhewan btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
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
                                        <th>Nama Hewan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jenis Hewan</th>
                                        <th>Signalemen / Ciri-ciri Hewan</th>
                                        <th>Nama Pemilik</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hewan as $h) { ?>
                                        <tr>
                                            <td><?= $h->Nama_Hewan ?></td>
                                            <td><?= $h->Jenis_Kelamin ?></td>
                                            <td><?= $h->Jenis_Hewan ?></td>
                                            <td><?= $h->Signalemen ?></td>
                                            <td><?= $h->Nama_Pemilik ?></td>
                                            <td class="center">
                                                <span class="label-success label <?php if ($h->Status == 'Hidup') echo 'label-default';
                                                                                    else echo 'label-danger'; ?>"><?= $h->Status ?></span>
                                            </td>
                                            <td class="center">
                                                <?php if ($h->Status == "Hidup") { ?>
                                                    <a class="btn btn-danger" style="width: 94px;" href="<?= base_url('editstatushewan/' . $h->Id_Hewan . '/Mati') ?>">
                                                        <i class="glyphicon glyphicon-ok icon-white"></i>
                                                        Mati
                                                    <?php } else { ?>
                                                        <a class="btn btn-success" style="width: 94px;" href="<?= base_url('editstatushewan/' . $h->Id_Hewan . '/Hidup') ?>">
                                                            <i class="glyphicon glyphicon-remove icon-white"></i>
                                                            Hidup
                                                        <?php } ?>
                                                        </a>
                                                        <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
                                                            <a class="btn btn-info" style="width: 69px;" href="<?= base_url('formedithewan/' . $h->Id_Hewan . '') ?>">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletehewan/' . $h->Id_Hewan . '') ?>">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        <?php } ?>
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