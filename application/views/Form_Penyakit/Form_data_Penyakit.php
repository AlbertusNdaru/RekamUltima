<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Penyakit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="card-body">
                <a href="<?= base_url('aksitambahpenyakit') ?>" class="btn btn-addpenyakit btn-sm btn-primary"><i class="fa fa-plus-circle"></i></a>
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
                                    <th>Nama Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($penyakit as $p) { ?>
                                    <tr>
                                        <td><?= $p->Nama_Penyakit ?></td>
                                        <td><?= $p->Gejala ?></td>
                                        <td class="center">
                                            <a class="btn btn-info" style="width: 69px;" href="<?= base_url('formeditpenyakit/' . $p->Id_Penyakit . '') ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger" style="width: 69px;" href="<?= base_url('deletepenyakit/' . $p->Id_Penyakit . '') ?>">
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