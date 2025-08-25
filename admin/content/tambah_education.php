<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM education WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Education";
} else {
    $title = "Tambah Education";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM education WHERE id = '$id'");

    if ($delete) {
        header("location:?page=resume&hapus=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $title_edu = $_POST['title_edu'];
    $sekolah = $_POST['sekolah'];
    $description = $_POST['description'];
    $mulai_tahun = $_POST['mulai_tahun'];
    $akhir_tahun = $_POST['akhir_tahun'];
    $is_active = $_POST['is_active'];


    // print_r($password);
    // die;

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, "UPDATE education SET title_edu = '$title_edu', sekolah='$sekolah', description ='$description', mulai_tahun='$mulai_tahun', akhir_tahun='$akhir_tahun', is_active='$is_active' WHERE id = '$id' ");
        if ($update) {
            header("location:?page=resume&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO education (title_edu, sekolah, description, mulai_tahun, akhir_tahun, is_active) VALUES('$title_edu','$sekolah', '$description', '$mulai_tahun', '$akhir_tahun', '$is_active')");
        if ($insert) {
            header("location:?page=resume&tambah=berhasil");
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
                                <li class="breadcrumb-item"><a href="?page=kategori"><?= $title ?></a></li>
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
                                <div class="mb-3">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="title_edu" class="form-control"
                                        placeholder="Masukan jenis kategori" required
                                        value="<?= ($id) ? $rowEdit['title_edu'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Awal Masuk</label>
                                    <input type="date" name="mulai_tahun" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['mulai_tahun'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Selesai</label>
                                    <input type="date" name="akhir_tahun" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['akhir_tahun'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="sekolah" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['sekolah'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Deskripsi</label>
                                    <textarea name="description"
                                        class="form-control summernote"><?= ($id) ? $rowEdit['description'] : ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=resume" class="text-muted ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>