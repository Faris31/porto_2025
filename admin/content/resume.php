<?php
// queryEducation
$queryEducation = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id DESC");
$rowEducation = mysqli_fetch_all($queryEducation, MYSQLI_ASSOC);

//queryExperience
$queryExperience = mysqli_query($koneksi, "SELECT * FROM experience ORDER BY id DESC");
$rowsExperience = mysqli_fetch_all($queryExperience, MYSQLI_ASSOC);
?>

<section class="section">
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Project</h1>
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
                            <div class="mb-3" align="right">
                                <h5 class="card-title">Data Education</h5>
                                <a href="?page=tambah_education" class="btn btn-primary">
                                    Tambah Education
                                </a>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul </th>
                                            <th class="text-center">Asal Sekolah</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Lama Sekolah</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rowEducation as $key => $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $key += 1 ?></td>
                                            <td class="text-center"><?= $row['title_edu']?></td>
                                            <td class="text-center"><?= $row['sekolah'] ?></td>
                                            <td class="text-center"><?= $row['description'] ?></td>
                                            <td class="text-center"><?= $row['mulai_tahun'] ?> s.d
                                                <?= $row['akhir_tahun'] ?></td>
                                            <td class="text-center">
                                                <a href="?page=tambah_education&edit=<?= $row['id'] ?>"
                                                    class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                                    ; href="?page=tambah_education&delete=<?= $row['id'] ?>"
                                                    class="btn btn-sm btn-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3 mt-3" align="right">
                                <h5 class=" card-title">Data Experience</h5>
                                <a href="?page=tambah_experience" class="btn btn-primary">
                                    Tambah Experience
                                </a>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul </th>
                                            <th class="text-center">Asal Perusahaan</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Lama Bekerja</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rowsExperience as $key => $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $key += 1 ?></td>
                                            <td class="text-center"><?= $row['title_exp']?></td>
                                            <td class="text-center"><?= $row['perusahaan']?></td>
                                            <td class="text-center"><?= $row['description']?></td>
                                            <td class="text-center"><?= $row['awal_tahun'] ?> -
                                                <?= $row['akhir_tahun']?></td>
                                            <td class="text-center">
                                                <a href="?page=tambah_experience&edit=<?= $row['id'] ?>"
                                                    class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                                    ; href="?page=tambah_experience&delete=<?= $row['id'] ?>"
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