<?php
$queryCategories = mysqli_query($koneksi, "SELECT * FROM categories ORDER BY id DESC");
$rowsCategories = mysqli_fetch_all($queryCategories, MYSQLI_ASSOC);
?>

<!-- <div class="pagetitle">
    <h1>Data Users</h1>
</div> -->
<!-- End Page Title -->

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kategori</h5>
                        <div class="mb-3" align="right">
                            <a href="?page=tambah_kategori" class="btn btn-primary">
                                Tambah Kategori
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Jenis Kategori</th>
                                    <th class="text-center">Type Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rowsCategories as $key => $row) : ?>
                                <tr>
                                    <td class="text-center"><?= $key += 1 ?></td>
                                    <td class="text-center"><?= $row['name'] ?></td>
                                    <td class="text-center"><?= $row['type'] ?></td>
                                    <td class="text-center">
                                        <a href="?page=tambah_kategori&edit=<?= $row['id'] ?>"
                                            class="btn btn-sm btn-success">
                                            Edit
                                        </a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" ;
                                            href="?page=tambah_kategori&delete=<?= $row['id'] ?>"
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
</section>