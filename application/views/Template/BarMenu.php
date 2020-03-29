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
        <li class="active">
            <a href="<?= base_url('LaporanRekam') ?>" target="blank"><i class="fa fa-file-text"></i> Medis</a>
            <a href="<?= base_url('LaporanHewan') ?>" target="blank"><i class="fa fa-file"></i> Hewan</a>
            <a href="<?= base_url('LaporanKritik') ?>" target="blank"><i class="fa fa-comments-o"></i> Kritik & Saran</a>
        </li>
    <?php } ?>
    </ul>
</div><!-- /.navbar-collapse -->