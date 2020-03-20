<?php
include APPPATH . 'views/Form_report/laporan.php';

?>

<!-- <head>
    <title>
    <?= 'DATA Kritik Saran' ?>
    </title>
</head> -->
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/landingpage/img/logo.png">
        <h2 align="center">
            Data Kritik Saran
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
                    <h2 align="center">
                        Kritik
                    </h2>
                    <br>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kritik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->Kritik ?></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <h2 align="center">
                        Saran
                    </h2>
                    <br>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Saran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->Saran ?></td>
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