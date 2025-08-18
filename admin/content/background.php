<?php
$query = mysqli_query($koneksi, "SELECT * FROM background ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
                        <h5 class="card-title">Data Background</h5>
                        <div class="mb-3" align="right">
                            <a href="?page=tambah_background" class="btn btn-primary">
                                Tambah Background
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $row) : ?>
                                <tr>
                                    <td class="text-center"><?= $key += 1 ?></td>
                                    <td class="text-center"><img width="100" src="uploads/<?= $row['images'] ?>" alt="">
                                    </td>
                                    <td class="text-center"><?= $row['title'] ?></td>
                                    <td class="text-center"><?= $row['description'] ?></td>
                                    <td class="text-center"><?= $row['is_active'] ? 'Publish' : 'Draft' ?></td>
                                    <td class="text-center">
                                        <a href="?page=tambah_background&edit=<?= $row['id'] ?>"
                                            class="btn btn-sm btn-success">
                                            Edit
                                        </a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" ;
                                            href="?page=tambah_background&delete=<?= $row['id'] ?>"
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