<?php

$id = isset($_GET['id']) ? $_GET['edit'] : '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM pesan_pengguna WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Pesan Pengguna";
} else {
    $title = "Tambah Pesan Pengguna";
}

if (isset($_POST['simpan'])) {
   $name    = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email   = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subject = mysqli_real_escape_string($koneksi, $_POST['subject']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // print_r($password);
    // die;

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, "UPDATE pesan_pengguna SET name = '$name', email='$email', subject ='$subject', message='$message' WHERE id = '$id' ");
        if ($update) {
            header("location:?page=pesan_pengguna&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO pesan_pengguna (name, email, subject, message) VALUES('$name','$email', '$subject', '$message')");
        if ($insert) {
            header("location:?page=pesan_pengguna&tambah=berhasil");
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
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukan jenis kategori" required
                                        value="<?= ($id) ? $rowEdit['name'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['email'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['subject'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Message</label>
                                    <input type="text" name="message" class="form-control" required
                                        value="<?= ($id) ? $rowEdit['message'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=pesan_pengguna" class="text-muted ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>