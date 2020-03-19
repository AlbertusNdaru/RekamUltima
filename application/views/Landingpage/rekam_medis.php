<!--::header part start::-->
<?php include "header.php"; ?>
<!-- Header part end-->

<!--::doctor_part start::-->
<section class="doctor_part single_page_doctor_part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>REKAM MEDIS HEWAN</h2>
                    <!-- <p>Face replenish sea good winged bearing years air divide wasHave night male also</p> -->
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-right">
            <div class="col-xl-12">
                <div class="section_tittle text-right">
                    <h2>DATA HEWAN</h2>
                    <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                </div>
            </div>
        </div> -->
        <div class="row" style="margin:auto;">
            <?php foreach ($hewan as $h) { ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img href="#" src="<?= base_url('assets/landingpage/'); ?>img/doctor/doctor_3.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="<?= base_url('rekammedisdetail/').$h->Id_Hewan?>" target="blank"> REKAM MEDIS </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3><?= $h->Nama_Hewan ?></h3>
                                <p><?= $h->Jenis_Hewan ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--::doctor_part end::-->

<!-- footer part start-->
<?php include "footer.php"; ?>
<!-- footer part end-->