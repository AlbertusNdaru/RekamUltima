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
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Anamnesa</th>
                                    <th>Berat Badan</th>
                                    <th>Suhu Tubuh</th>
                                    <th>Penyakit</th>
                                    <th>Tindakan</th>
                                    <th>Resep</th>
                                    <th>Tenaga Medis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($detail_rm as $rm) { ?>
                                    <tr>
                                        <td align="center"><?= $rm->Tgl_Berobat ?></td>
                                        <td align="center"><?= $rm->Anamnesa ?></td>
                                        <td align="center"><?= $rm->BeratBadan ?></td>
                                        <td align="center"><?= $rm->SuhuTubuh ?></td>
                                        <td align="center"><?= $rm->Nama_Penyakit ?></td>
                                        <td align="center"><?= $rm->Nama_Tindakan ?></td>
                                        <td align="center"><?= $rm->Resep ?></td>
                                        <td align="center"><?= $rm->Nama_TenagaMedis ?></td>
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