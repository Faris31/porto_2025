<?php
$query = mysqli_query($koneksi, "SELECT  categories.name as category_name, blogs. * FROM blogs 
JOIN categories ON categories.id = blogs.id_kategori
ORDER BY blogs.id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);

function changeIsActive($isActive)
{
    switch ($isActive) {
        case '1':
            $title = "<span class='badge bg-primary'>Publish</span>";
            break;

        default:
            $title = "<span class='badge bg-warning'>Draft</span>";
            break;
    }

    return $title;
}
?>

<section class="section">
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="?page=blog">Blog</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Blog</h5>
                            <div class="mb-3" align="right">
                                <a href="?page=tambah_blogs" class="btn btn-primary">
                                    Tambah Blog Kami
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kategories</th>
                                        <th>Judul</th>
                                        <th>Content</th>
                                        <th>Mini Content</th>
                                        <th>Penulis</th>
                                        <th>Status</th>
                                        <th>Tags</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $key => $row) : ?>
                                    <tr>
                                        <td class="text-center align-content-center"><?= $key += 1 ?></td>
                                        <td class="text-center"><img width="100" src="uploads/<?= $row['images'] ?>"
                                                alt="">
                                        </td>
                                        <td class="text-center align-content-center"><?= $row['id_kategori'] ?></td>
                                        <td class="text-center align-content-center"><?= $row['title'] ?></td>
                                        <td class="text-center align-content-center"><?= $row['content'] ?></td>
                                        <td class="text-center align-content-center"><?= $row['mini_content'] ?></td>
                                        <td class="text-center align-content-center"><?= $row['penulis'] ?></td>
                                        <td class="text-center align-content-center">
                                            <?= $row['is_active'] ? 'Publish' : 'Draft'; ?></td>
                                        <td class="text-center align-content-center"><?= $row['tags'] ?></td>
                                        <td class="align-content-center text-center">
                                            <a href="?page=tambah_blogs&edit=<?= $row['id'] ?>"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" ;
                                                href="?page=tambah_blogs&delete=<?= $row['id'] ?>"
                                                class="btn btn-sm btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>