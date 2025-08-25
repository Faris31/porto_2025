<!-- about -->
<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img d-flex align-items-stretch">
                    <div class="img d-flex align-items-center">
                        <img src="admin/uploads/<?= $rowAbout['images'] ?>" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">My Intro</span>
                            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">
                                <?= $rowAbout['title'] ?></h2>
                            <p><?= $rowAbout['description'] ?></p>

                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name :</span> <span><?= $rowAbout['name'] ?></span></li>
                                <li class="d-flex"><span>Date of birth :</span>
                                    <span><?= $rowAbout['birthday'] ?></span>
                                </li>
                                <li class="d-flex"><span>Address :</span> <span><?= $rowAbout['address'] ?></span>
                                </li>
                                <li class="d-flex"><span>Zip code :</span> <span><?= $rowAbout['zip_code'] ?></span>
                                </li>
                                <li class="d-flex"><span>Email :</span> <span><?= $rowAbout['email'] ?></span></li>
                                <li class="d-flex"><span>Phone : </span> <span><?= $rowAbout['phone'] ?></span></li>
                                <li class="d-flex"><span>Hobi : </span> <span><?= $rowAbout['hobi_1'] ?> ,
                                        <?= $rowAbout['hobi_2'] ?> , <?= $rowAbout['hobi_3'] ?> ,
                                        <?= $rowAbout['hobi_4'] ?> </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->