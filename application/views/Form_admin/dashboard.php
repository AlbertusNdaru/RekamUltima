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
                        <strong class="card-title">Jumlah Pemilik Terdaftar</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahpemilik) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN KESELURUHAN !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Jumlah Tenaga Medis</strong>
                    </div>
                    <div class="text-center"><?= count($jumlahmedis) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN MATI !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Mati</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewan) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS KUCING !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Kucing Hidup</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewan) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS ANJING !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Anjing Hidup</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewan) ?></div>
                </div>
            </div>

            <!-- JUMLAH HEWAN JENIS AYAM !-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Total Hewan Ayam Hidup</strong>
                    </div>

                    <div class="text-center"><?= count($jumlahhewan) ?></div>
                </div>
            </div>

            <!-- CARD INFORMASI !-->
            <div class="row" style="margin-top: 20px">
                <div class="col-md-4">
                    <div class="card card-outline">
                        <div class="card-body text-center">
                            <h4 class="text-link">Kunjungi Laboratorium</h4>
                            <hr>
                            <div type="button" class="bg-success"><i class="fa fa-check-square"></i></div>
                            <br>
                            Ingin tau tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-outline">
                        <div class="card-body text-center">
                            <h4 class="text-link">Kunjungi Laboratorium</h4>
                            <hr>
                            <div type="button" class="bg-success"><i class="fa fa-check-square"></i></div>
                            <br>
                            Ingin tau tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-outline">
                        <div class="card-body text-center">
                            <h4 class="text-link">Kunjungi Laboratorium</h4>
                            <hr>
                            <div type="button" class="bg-success"><i class="fa fa-check-square"></i></div>
                            <br>
                            Ingin tau tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>