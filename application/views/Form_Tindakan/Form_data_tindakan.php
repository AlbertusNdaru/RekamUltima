<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Tindakan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="card-body">
                <a href="<?= base_url('aksitambahtindakan') ?>" class="btn btn-addhewan btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
                <a href="#" class="btn btn-minimize btn-sm btn-primary"><i class="fa fa-sort-down"></i></a>
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
                                    <th>Kode Tindakan</th>
                                    <th>Nama Tindakan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tindakan as $t) { ?>
                                    <tr>
                                        <td><?= $t->Id_Tindakan ?></td>
                                        <td><?= $t->Nama_Tindakan ?></td>
                                        <td class="center">
                                            <a class="btn btn-info" style="width: 69px;" href="<?= base_url('formedittindakan/' . $t->Id_Tindakan . '') ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletetindakan/' . $t->Id_Tindakan . '') ?>">
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