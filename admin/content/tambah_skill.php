<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM skill_soft WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Skill";
} else {
    $title = "Tambah Skill";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM skill_soft WHERE id = '$id'");

    if ($delete) {
        header("location:?page=skill&hapus=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $persentase = $_POST['persentase'];
   

    // print_r($password);
    // die;

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, "UPDATE skill_soft SET title='$title', persentase='$persentase' WHERE id = '$id' ");
        if ($update) {
            header("location:?page=skill&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO skill_soft (title, persentase) VALUES('$title','$persentase')");
        if ($insert) {
            header("location:?page=skill&tambah=berhasil");
        }
    }
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
                            <h1 class="m-0"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="?page=skill"><?= $title ?></a></li>
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
                            <h5 class="card-title"></h5>
                            <form action="" method="post">
                                <h3>Soft Skills</h3>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="">Jenis Skill</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Masukan jenis skill" required
                                            value="<?= ($id) ? $rowEdit['title'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Persentase %</label>
                                        <input type="range" name="persentase" class="form-control" min="0" max="100"
                                            step="1" value="<?= ($id) ? $rowEdit['persentase'] : ''; ?>"
                                            oninput="document.getElementById('percentageValue').innerText = this.value + '%'">
                                        <div><strong id="percentageValue"><?= $rowEdit['persentase'] ?? 50; ?>%</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=skill" class="text-muted ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <form action="" method="post">
                                <h1>Soft Skil</h1>
                                <div class="mb-3">
                                    <label for="">Jenis Skill</label>
                                    <input type="text" name="jenis_skill" class="form-control"
                                        placeholder="Masukan nama anda" required
                                        value="<?= ($id) ? $rowEdit['name'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan email anda"
                                        required value="<?= ($id) ? $rowEdit['email'] : ''; ?>">
                                </div>
                                <div class=" mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Masukan password anda" <?= (!$id) ? 'required' : ''; ?>>
                                    <small class="text-danger">* isi password jika ingin merubahnya</small>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=skill" class="text-muted ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
</section>