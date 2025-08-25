<?php

?>
<!-- services -->
<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Resume</span>
            </div>
        </div>

        <div class="row">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title text-center">Education</h3>
                        <?php foreach ($rowEdu as $edu): ?>
                        <div class="resume-item">
                            <h4><?php echo $edu['title_edu'] ?></h4>
                            <h5><?php echo $edu['mulai_tahun'] ?> - <?php echo $edu['akhir_tahun'] ?></h5>
                            <p><em><?php echo $edu['sekolah'] ?></em></p>
                            <p><?php echo $edu['description'] ?></p>
                        </div><!-- Edn Resume Item -->
                        <?php endforeach ?>

                    </div>

                    <div class="col-lg-6 text-dark" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title text-center">Professional Experience</h3>
                        <?php foreach ($rowExp as $exp): ?>
                        <div class="resume-item">
                            <h4><?php echo $exp['title_exp'] ?></h4>
                            <h5><?php echo $exp['awal_tahun'] ?> - <?php echo $exp['akhir_tahun'] ?></h5>
                            <p><em><?php echo $exp['perusahaan'] ?></em></p>
                            <p><em><?php echo $exp['description'] ?></em></p>
                        </div><!-- Edn Resume Item -->
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>

            <!-- <div class="col-md-6 col-lg-6">
                <div class="media services d-block bg-white rounded-lg shadow">
                    <h3 class="heading mb-3">Web Design</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- end services -->