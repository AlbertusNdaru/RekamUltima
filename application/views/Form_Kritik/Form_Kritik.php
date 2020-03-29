<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Hak Akses</h1>
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
                                    <th>Kritik</th>
                                    <th>Saran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kritik as $k) { ?>
                                    <tr>
                                        <td><?= $k->Kritik ?></td>
                                        <td><?= $k->Saran ?></td>
                                        <td align="center">
                                            <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
                                                <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletelevel/' . $k->Id_Kritik . '') ?>">
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