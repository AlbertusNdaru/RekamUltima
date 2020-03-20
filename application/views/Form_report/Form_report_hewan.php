<?php
include APPPATH . 'views/Form_report/laporan.php';

?>

<!-- <head>
    <title>
    <?= 'DATA HEWAN' ?>
    </title>
</head> -->
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/landingpage/img/logo.png">
        <h2 align="center">
        Data Hewan
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
                                <th>No.</th>
                                <th>Nama Hewan</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis</th>
                                <th>Signalemen</th>
                                <th>Pemilik</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->Nama_Hewan ?></td>
                                    <td align="center"><?php echo $r->Jenis_Kelamin ?></td>
                                    <td align="center"><?php echo $r->Jenis_Hewan ?></td>
                                    <td align="Left"><?php echo $r->Signalemen ?></td>
                                    <td align="center"><?php echo $r->Nama_Pemilik ?></td>
                                    <td align="center"><?php echo $r->Status ?></td>
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