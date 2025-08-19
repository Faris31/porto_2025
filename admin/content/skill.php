<?php
$querySkillSoft = mysqli_query($koneksi, "SELECT * FROM skill_soft ORDER BY id DESC");
$rowsSkillSoft = mysqli_fetch_all($querySkillSoft, MYSQLI_ASSOC);

// $querySkillaHard = mysqli_query($koneksi, "SELECT * FROM skill_soft ORDER BY id DESC");
// $rowsSkillHard = mysqli_fetch_all($querySkillaHard, MYSQLI_ASSOC);
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
                        <h5 class="card-title">Data Users</h5>
                        <div class="mb-3" align="right">
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
                                        <td class="text-center"><?= $row['persentase'] ?></td>
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
</section>