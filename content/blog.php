<?php
// queryBlog 
$queryBlog = mysqli_query($koneksi, "SELECT * FROM blogs ORDER BY id DESC");
$rowBlog = mysqli_fetch_all($queryBlog, MYSQLI_ASSOC);
?>

<?php
// $date_blog = $rowBlog['created_at'];
// $date_blog = date("M d Y", strtotime($date_blog));
?>
<!-- blog -->
<section class="ftco-section bg-light" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Our Blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($rowBlog as $key => $val): ?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('admin/uploads/<?= $val['images'] ?>'); border-radius: 10px;">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2"><?= $date_blog ?></span>
                                <a href="#" class="mr-2"><?= $val['penulis'] ?></a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="?page=blog_detail&id=<?= $val['id'] ?>"><?= $val['title'] ?></a>
                        </h3>
                        <p><?= $val['mini_content'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end blog -->