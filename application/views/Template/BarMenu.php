<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="<?= base_url('dashboard') ?>"></i>Dashboard </a>
        </li>
        <!-- /.Kata Page nya akan berubah tergantung siapa yang login berdasarkan level id -->
        <h3 class="menu-title">Page Admin</h3>
        <li class="active">
            <a href="<?= base_url('rekammedis') ?>">Rekam Medis </a>
            <a href="<?= base_url('pemilik') ?>"></i>Pemilik </a>
            <a href="<?= base_url('hewan') ?>"></i>Hewan </a>
            <a href="<?= base_url('kritik_admin') ?>"></i>Kritik </a>

            <!-- Penentu login admin dan tenaga medis jangan diubah !!-->
            <?php if ($_SESSION['Admin']->Id_Level == '1') { ?>
                <a href="<?= base_url('tindakan') ?>">Tindakan </a>
                <a href="<?= base_url('level') ?>"></i>Hak Akses </a>
                <a href="<?= base_url('tenagamedis') ?>"></i>Tenaga Medis </a>
                <a href="<?= base_url('penyakit') ?>"></i>Penyakit </a>
            <?php } ?>
        </li>
        <h3 class="menu-title">Laporan</h3>
        <!-- /.Laporan -->
        <li class="active">
            <a href="<?= base_url('LaporanHewan')?>" target="blank">Hewan</a>
            <a href="#">Rekam Medis</a>
            <a href="#">Kritik & Saran</a>
        </li>
        <h3 class="menu-title">Profile</h3>
        <!-- /.Profile -->
        <li class="menu-item-has-children dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="menu-icon fa fa-glass"></i>My profile</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?= base_url('editprofile/') .$_SESSION['Admin']->Id_Admin ?>">Edit Profile</a></li>
                <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?= base_url('ControllerAdmin/Login/logout'); ?>">Logout</a></li>
            </ul>
        </li>

    </ul>
</div><!-- /.navbar-collapse -->