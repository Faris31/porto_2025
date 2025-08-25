<!-- project -->
<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Our Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($rowProject as $key => $val):?>
            <div class="col-md-3">
                <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(admin/uploads/<?= $val['images'] ?>); object-fit: cover;">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="<?= $val['link'] ?>"><?= $val['title'] ?></a></h3>
                        <span><?= $val['description'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- end project -->

<!-- header project -->
<section class="ftco-hireme">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-8 d-flex align-items-center">
                <div class="w-100 py-4">
                    <h2>Have a project on your mind.</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary
                        regelialia.
                        It is a paradisematic country, in which roasted parts of sentences fly.</p>
                    <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Contact me</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex align-items-end">
                <img src="assets/images/author.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end header project -->