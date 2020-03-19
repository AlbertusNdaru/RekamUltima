<?php
include APPPATH . 'views/Landingpage/laporan.php';

?>

<!-- <head>
    <title>
    <?= $hewan->Nama_Hewan ?>
    </title>
</head> -->
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/landingpage/img/logo.png">
        <h2 align="center">
            Rekam Medis <br>
            <?= $hewan->Nama_Hewan ?>
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
                                <th>No.</th>
                                <th>Anamnesa</th>
                                <th>Berat Badan</th>
                                <th>Suhu Tubuh</th>
                                <th>Penyakit</th>
                                <th>Tindakan</th>
                                <th>Tenaga Medis</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="center"><?php echo $r->Anamnesa ?></td>
                                    <td align="center"><?php echo $r->BeratBadan ?></td>
                                    <td align="center"><?php echo $r->SuhuTubuh ?></td>
                                    <td align="center"><?php echo $r->Nama_Penyakit ?></td>
                                    <td align="center"><?php echo $r->Nama_Tindakan ?></td>
                                    <td align="center"><?php echo $r->Nama_TenagaMedis ?></td>
                                    <td align="center"><?php echo $r->Tgl_Berobat ?></td>
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