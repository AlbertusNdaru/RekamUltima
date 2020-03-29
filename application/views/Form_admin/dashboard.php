<div class="card">
    <div class="card-header">
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
    </div>

    <div class="card-body card-block">
        <div class="row" style="margin-top:20px">
            <!-- CARD BUTTON !-->
            <!-- JUMLAH PEMILIK TERDAFTAR !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Jumlah Pemilik</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahpemilik) ?></div>
                </div>
            </div>
            <!-- JUMLAH PEMILIK Aktif !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Jumlah Pemilik Aktif</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahpemilikaktif) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN KESELURUHAN !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Seluruh Hewan</strong>
                    </div>
                    <div class="text-center"><?= count($jumlahhewan) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN MATI !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Hidup</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewanhidup) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN HIDUP !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Mati</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewanmati) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS KUCING !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Kucing</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewankucing) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS ANJING !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Anjing</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewanmati) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS AYAM !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Ayam Hidup</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewanmati) ?></div>
                </div>
            </div>
            <?php if ($_SESSION['Admin']->Id_Level == '2') { ?>
                <!-- CARD INFORMASI !-->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong class="card-title">Tambah Data Rekam Medis</strong>
                        </div>

                        <div class="text-center"><button class="btn"><a href="<?= base_url('rekammedis') ?>">Tambah</a></button>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>