        <!-- carousel -->
        <section id="home-section" class="hero">
            <div class="home-slider owl-carousel">
                <?php foreach ($rowBackground as $key ): ?>
                <div class="slider-item">
                    <div class="container-fluid px-md-0">
                        <img src="admin/uploads/<?= $key['images'] ?>" alt="" style="object-fit: cover;">
                        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                            data-scrollax-parent="true">
                            <div class="one-forth d-flex  align-items-center ftco-animate"
                                data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">Hello! I'am Faris</span>
                                    <h1 class="mb-4 mt-3"><?= $key['title'] ?></h1>
                                    <p><?= $key['description'] ?></p>
                                    <p>
                                        <a href="?page=contact" class="btn btn-primary">Hire me</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </section>
        <!-- end carousel -->

        <!-- bawah carousel -->
        <section class="ftco-counter img bg-light" id="section-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-suitcase"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="750">0</strong>
                                <span>Project Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-loyalty"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="568">0</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-coffee"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="478">0</strong>
                                <span>Cups of coffee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-calendar"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="780">0</strong>
                                <span>Years experienced</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end bawah carousel -->