<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form action="<?= base_url('Controller_Kritik/ControllerKritik/addkritik') ?>" method="POST">
                        <h2>Kritik & Saran Ultima</h2>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea required class="form-control" id="Textarea" rows="4" name="kritik" placeholder="Kritik"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required class="form-control" id="Textarea" rows="4" name="saran" placeholder="Saran"></textarea>
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" name="id_pemilik" value="<?= $_SESSION['pemilik']->Id_Pemilik ?>" class="btn_2">Tambah</button>
                        </div>
                    </form>
                </div>
            </diva>
        </div>
    </div>
</section>
<!--::regervation_part end::-->
<?php include "footer.php"; ?>
<!-- footer part end-->