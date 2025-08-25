<?php
$querySkillSoft = mysqli_query($koneksi, "SELECT * FROM skill_soft ORDER BY id DESC");
$rowsSkillSoft = mysqli_fetch_all($querySkillSoft, MYSQLI_ASSOC);

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
                            <h1 class="m-0">Skill</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="?page=skill">Skill</a></li>
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
                                <h5 class="card-title">Data Skill</h5>
                                <a href="?page=tambah_skill" class="btn btn-primary">
                                    Tambah Skill
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Skill</th>
                                        <th class="text-center">Kemampuan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rowsSkillSoft as $key => $row) : ?>
                                    <tr>
                                        <td class="text-center"><?= $key += 1 ?></td>
                                        <td class="text-center"><?= $row['title'] ?></td>
                                        <td class="text-center"><?= $row['persentase'] ?>%</td>
                                        <td class="text-center">
                                            <a href="?page=tambah_skill&edit=<?= $row['id'] ?>"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" ;
                                                href="?page=tambah_skill&delete=<?= $row['id'] ?>"
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