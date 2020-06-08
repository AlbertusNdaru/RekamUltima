<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i> Dashboard </a>
        </li>
        <!-- /.Kata Page nya akan berubah tergantung siapa yang login berdasarkan level id -->
        <h3 class="menu-title">Page Admin</h3>
        <li class="active">
            <a href="<?= base_url('rekammedis') ?>"><i class="fa fa-medkit"></i> Rekam Medis </a>
            <a href="<?= base_url('pemilik') ?>"><i class="fa fa-users"></i> Pemilik </a>
            <a href="<?= base_url('hewan') ?>"><i class="fa fa-github"></i> Hewan </a>
            <a href="<?= base_url('kritik_admin') ?>"><i class="fa fa-comments"></i> Kritik </a>

            <!-- Penentu login admin dan tenaga medis jangan diubah !!-->
            <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
            <a href="<?= base_url('tenagamedis') ?>"><i class="fa fa-user-md"></i> Tenaga Medis </a>
            <a href="<?= base_url('tindakan') ?>"><i class="fa fa-shield"></i> Tindakan </a>
            <a href="<?= base_url('penyakit') ?>"><i class="fa fa-tint"></i> Penyakit </a>
            <a href="<?= base_url('level') ?>"><i class="fa fa-key"></i> Hak Akses </a>

        </li>
        <h3 class="menu-title">Laporan</h3>
        <!-- /.Laporan -->
        <li class="nav-item">
            <a href="#" class="tanggalcetak"><i class="fa fa-file-text"></i> Medis</a>
            <a href="<?= base_url('LaporanHewan') ?>" target="blank"><i class="fa fa-file"></i> Hewan</a>
            <a href="<?= base_url('LaporanKritik') ?>" target="blank"><i class="fa fa-comments-o"></i> Kritik &
                Saran</a>
        </li>
        <?php } ?>
    </ul>



    <div class="modal fade" id="tanggalcetak" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Cetak Laporan Rekam Medis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="box col-md-12">
                            <div align="center" class="box-content">
                                <form name="fromrekammedis"
                                    action="<?= base_url('Controller_report/Controller_report/report_RekamMedisbyDate') ?>"
                                    target="_blank" method="post">
                                    <input id="tanggal1" style="line-height: 15px;" required name="tanggal1"
                                        onchange="datevalidation()" type="date"> -
                                    <input id="tanggal2" style="line-height: 15px;" disabled name="tanggal2"
                                        type="date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" style="float: right" type="button" class="btn btn-primary">Cetak</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <Script>
    $('.tanggalcetak').click(function(e) {
        e.preventDefault();
        $('#tanggalcetak').modal('show');
    });

    document.getElementById('tanggal1').value = "";
    document.getElementById('tanggal2').value = "";

    function datevalidation() {
        var x = document.getElementById("tanggal1").value;
        document.getElementById('tanggal2').min = x;
        $('#tanggal2').removeAttr('disabled');
        console.log(x);
        if (x == "") {

            $('#tanggal2').attr('disabled', 'true');
            document.getElementById('tanggal2').value = "";
        }
    }
    </Script>
</div><!-- /.navbar-collapse -->