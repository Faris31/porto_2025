<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM categories WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Kategori";
} else {
    $title = "Tambah Kategori";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM categories WHERE id = '$id'");

    if ($delete) {
        header("location:?page=kategori&hapus=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];

    // print_r($password);
    // die;

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, "UPDATE categories SET name = '$name', type='$type' WHERE id = '$id' ");
        if ($update) {
            header("location:?page=kategori&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO categories (name, type) VALUES('$name','$type')");
        if ($insert) {
            header("location:?page=kategori&tambah=berhasil");
        }
    }
}
?>

<!-- <div class="pagetitle">
    <h1></h1>
</div> -->
<!-- End Page Title -->

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Jenis Kategori</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukan jenis kategori"
                                    required value="<?= ($id) ? $rowEdit['name'] : ''; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Type Kategori</label>
                                <input type="text" name="type" class="form-control" placeholder="Masukan type kategori"
                                    required value="<?= ($id) ? $rowEdit['type'] : ''; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                <a href="?page=kategori" class="text-muted ms-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>