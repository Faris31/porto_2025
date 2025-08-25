<?php
// queryPesan_Pengguna
$queryPesan = mysqli_query($koneksi, "SELECT * FROM pesan_pengguna ORDER BY id DESC");
$rowPesan = mysqli_fetch_all($queryPesan, MYSQLI_ASSOC);
// var_dump($rowPesan);
// die();
?>

<section class="section">
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pesan Pengguna</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="?page=project">Skill</a></li>
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
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama </th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Subject</th>
                                            <th class="text-center">Message</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rowPesan as $key => $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $key += 1 ?></td>
                                            <td class="text-center"><?= $row['name']?></td>
                                            <td class="text-center"><?= $row['email'] ?></td>
                                            <td class="text-center"><?= $row['subject'] ?></td>
                                            <td class="text-center"><?= $row['message'] ?></td>
                                            <td class="text-center">
                                                <a href="?page=edit_pengguna&edit=<?= $row['id'] ?>"
                                                    class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                                    ; href="?page=edit_pengguna&delete=<?= $row['id'] ?>"
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
    </div>
</section>