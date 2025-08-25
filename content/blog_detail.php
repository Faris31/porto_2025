<?php 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// rowBlog
$queryBlog = mysqli_query($koneksi, "SELECT categories.name, blogs.* FROM blogs JOIN categories ON categories.id = blogs.id_kategori WHERE blogs.id = '$id'");
$rowBlog = mysqli_fetch_assoc($queryBlog);

// reccentBlog
$recentBlogDetail = mysqli_query($koneksi, "SELECT categories.name, blogs.* FROM blogs JOIN categories ON categories.id = blogs.id_kategori LIMIT 5");
$rowRecentBlogDetail = mysqli_fetch_all($recentBlogDetail, MYSQLI_ASSOC);
?>

<!-- untuk membuat jam, ngambil dari created_at -->
<?php
$date_blog = $rowBlog['created_at'];
$date_blog = date("M d Y", strtotime($date_blog));
?>

<?php
$tags = json_decode($rowBlog['tags'], true);
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/uploads/<?= $rowBlog['images'] ?>');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center ">
            <div class="col-md-9 ftco-animate pb-5 text-center text-white">
                <p class="breadcrumbs "><span class="mr-2"><a href="?page=home" class="text-white">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span class="mr-2 "><a href="?page=blog"
                            class="text-white">Blog
                            <i class="fa fa-chevron-right"></i></a></span> <span class="text-white">Blog Details
                        <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread text-white">Blog details</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3"><?= $rowBlog['title'] ?></h2>
                <p><?= $rowBlog['content'] ?>
                </p>

                <div class="tag-widget post-tag-container mb-5 mt-5 d-inline">
                    <div class="tagcloud">
                        <?php foreach($tags as $tag):?>
                        <a href="#" class="tag-cloud-link"><?= $tag['value'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Categories</h3>
                    <?php foreach($recentBlogDetail as $key => $val): ?>
                    <ul class="categories">
                        <li><?= $val['name'] ?></li>
                    </ul>
                    <?php endforeach; ?>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Recent Blog</h3>
                    <?php foreach($rowRecentBlogDetail as $rowRecentBlog): ?>
                    <div class="block-21 mb-4 d-flex ">
                        <a class="blog-img mr-4"
                            style="background-image: url(admin/uploads/<?= $rowRecentBlog['images'] ?>); width:150px; height: 110px;"></a>
                        <div class="text">
                            <h3 class="heading"><a
                                    href="?page=blog_detail&id=<?= $rowRecentBlog['id'] ?>"><?= $rowRecentBlog['title'] ?></a>
                            </h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span><?= $date_blog ?></a></div>
                                <div><a href="#"><span class="icon-person"></span><?= $rowRecentBlog['penulis'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Tag Cloud</h3>
                    <div class="tagcloud">
                        <?php foreach($tags as $tag):?>
                        <a href="#" class="tag-cloud-link"><?= $tag['value'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->