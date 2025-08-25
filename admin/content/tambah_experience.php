<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM experience WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Experience";
} else {
    $title = "Tambah Experience";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM experience WHERE id = '$id'");

    if ($delete) {
        header("location:?page=resume&hapus=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $title_exp = $_POST['title_exp'];
    $perusahaan = $_POST['perusahaan'];
    $description = $_POST['description'];
    $awal_tahun = $_POST['awal_tahun'];
    $akhir_tahun = $_POST['akhir_tahun'];
    $is_active = $_POST['is_active'];


    // print_r($password);
    // die;

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, "UPDATE experience SET title_exp = '$title_exp', perusahaan='$perusahaan', description ='$description', awal_tahun='$awal_tahun', akhir_tahun='$akhir_tahun', is_active='$is_active' WHERE id = '$id' ");
        if ($update) {
            header("location:?page=resume&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO experience (title_exp, perusahaan, description, awal_tahun, akhir_tahun, is_active) VALUES('$title_exp','$perusahaan', '$description', '$awal_tahun', '$akhir_tahun', '$is_active')");
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
                                    <label for="">Divisi</label>
                                    <input type="text" name="title_exp" class="form-control"
                                        placeholder="Masukan diivisi / bagian" required
                                        value="<?= ($id) ? $rowEdit['title_exp'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Awal Masuk</label>
                                    <input type="date" name="awal_tahun" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['awal_tahun'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Selesai</label>
                                    <input type="date" name="akhir_tahun" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['akhir_tahun'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Perusahaan</label>
                                    <input type="text" name="perusahaan" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['perusahaan'] : ''; ?>">
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