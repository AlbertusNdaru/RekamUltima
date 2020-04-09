<?php include "header.php"; ?>
<!-- breadcrumb start-->
<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <diva align="center" class="col-lg-8" style="margin: auto;">
                <div class="regervation_part_iner">
                    <form action="<?= base_url('Controller_landingpage/Controller_landingpage/addhewan') ?>" method="POST">
                        <h2>Registrasi Hewan</h2>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Nama Hewan">
                            </div>
                            <div class="form-group col-md-12">
                                <select required name="jenishewan" class="form-control" id="Selectjenis">
                                    <option>Pilih Jenis Hewan</option>
                                    <option value="Kucing">Kucing</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Ayam">Ayam</option>
                                    <option value="Sapi">Sapi</option>
                                    <option value="Kuda">Kuda</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select required name="jeniskelamin" class="form-control" id="course_type">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Jantan">Jantan</option>
                                    <option value="Betina">Betina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required class="form-control" id="Textarea" rows="4" name="signalemen" placeholder="Signalemen"></textarea>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <input required class="form-control" id="image" rows="4" name="image" placeholder="image"></textarea>
                            </div> -->
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn_2">Proses</button>
                        </div>
                    </form>
                </div>
            </diva>
        </div>
    </div>
</section>
<!--::regervation_part end::-->

<!-- footer part start-->
<?php include "footer.php"; ?>
<!-- footer part end-->