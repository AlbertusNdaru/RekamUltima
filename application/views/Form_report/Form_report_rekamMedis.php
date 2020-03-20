<?php
include APPPATH . 'views/Form_report/laporan.php';

?>

<!-- <head>
    <title>
    <?= 'DATA REKAM MEDIS' ?>
    </title>
</head> -->
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/landingpage/img/logo.png">
        <h2 align="center">
            Data Rekam Medis
            <br>
            Pertanggal : <?= date('d-M-Y'); ?>
        </h2>
    </div>
</div>
</div>
<!-- /. ROW  -->
<div>
    <div>
        <div>
            <div>
                <div>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Anamnesa</th>
                                <th>Berat Badan</th>
                                <th>Suhu Tubuh</th>
                                <th>Penyakit</th>
                                <th>Tindakan</th>
                                <th>Tenaga Medis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                <tr>
                                        <td align="center"><?= $no ?></td>
                                        <td align="center"><?= $r->Tgl_Berobat ?></td>
                                        <td align="center"><?= $r->Anamnesa ?></td>
                                        <td align="center"><?= $r->BeratBadan ?></td>
                                        <td align="center"><?= $r->SuhuTubuh ?></td>
                                        <td align="center"><?= $r->Nama_Penyakit ?></td>
                                        <td align="center"><?= $r->Nama_Tindakan ?></td>
                                        <td align="center"><?= $r->Nama_TenagaMedis ?></td>
                                    </tr>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                    <br><br>
                    <table style="width: 100%; margin-left: 75%;">
                        <tbody>
                            <tr class="gradeU">
                                <td align="center">Yogyakarta, <?= date('d-M-Y'); ?></td>
                            </tr>
                            <br>
                            <br>
                            <br>
                            <br>
                            <tr class="gradeU">
                                <td align="center"> Admin Ultima</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /. TABLE  -->
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->