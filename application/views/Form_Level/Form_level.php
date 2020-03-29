<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Hak Akses</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="card-body">
                <a href="<?= base_url('aksitambahlevel') ?>" class="btn btn-addhewan btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
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
                                    <th>Kode level</th>
                                    <th>Hak Akses</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($level as $l) { ?>
                                    <tr>
                                        <td><?= $l->Id_Level ?></td>
                                        <td><?= $l->Deskripsi ?></td>
                                        <td align="center">
                                            <a class="btn btn-info" style="width: 69px;" href="<?= base_url('formeditlevel/' . $l->Id_Level . '') ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletelevel/' . $l->Id_Level . '') ?>">
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


        </div>
    </div><!-- .animated -->
</div><!-- .content -->