<?php
$queryProject = mysqli_query($koneksi, "SELECT * FROM project ORDER BY id DESC");
$rowProject = mysqli_fetch_all($queryProject, MYSQLI_ASSOC);

// $querySkillaHard = mysqli_query($koneksi, "SELECT * FROM skill_soft ORDER BY id DESC");
// $rowsSkillHard = mysqli_fetch_all($querySkillaHard, MYSQLI_ASSOC);
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
                                <h5 class="card-title">Data Project</h5>
                                <a href="?page=tambah_project" class="btn btn-primary">
                                    Tambah Project
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Images</th>
                                        <th class="text-center">Title Project</th>
                                        <th class="text-center">Description Project</th>
                                        <th class="text-center">Link Project</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rowProject as $key => $row) : ?>
                                    <tr>
                                        <td class="text-center"><?= $key += 1 ?></td>
                                        <td class="text-center"><img width="100" src="uploads/<?= $row['images'] ?>"
                                                alt=""></td>
                                        <td class="text-center"><?= $row['title'] ?></td>
                                        <td class="text-center"><?= $row['description'] ?></td>
                                        <td class="text-center"><?= $row['link'] ?></td>
                                        <td class="text-center">
                                            <a href="?page=tambah_project&edit=<?= $row['id'] ?>"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" ;
                                                href="?page=tambah_project&delete=<?= $row['id'] ?>"
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