<?php

//jika data setting sudah adam maka update tersebut
// selain itu kalo blm ada insert data

$queryAbout = mysqli_query($koneksi, "SELECT * FROM about LIMIT 1");
$row = mysqli_fetch_assoc($queryAbout);

$queryHobi = mysqli_query($koneksi, "SELECT * FROM hobi ORDER BY id = '$id' ");
$rowHobi = mysqli_fetch_all($queryHobi);


if (isset($_POST['simpan'])) {
    $logo_nama = $row['logo'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $zip_code = $_POST['zip_code'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // var_dump($name);
    // die;

    if (!empty($_FILES['logo']['name'])) { // jika folder tidak kosong
        $logo = $_FILES['logo']['name'];
        $path = "uploads/";
        if (!is_dir($path)) mkdir($path);

        $logo_nama = time() . "-" . basename($logo);
        $target_file = $path . $logo_nama;
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_file)) {
            // jika gambarnya ada, maka gambar sebelumnya akan di ganti ke gambar yang baru
            if (!empty($row['logo'])) {
                unlink($path . $row['logo']);
            }
        }
    }

    if ($row) {
        // update
        $id_about = $row['id'];
        $update = mysqli_query($koneksi, "UPDATE about SET email = '$email', phone = '$phone', address = '$address', name = '$name', birthday = '$birthday', zip_code = '$zip_code', title = '$title', images = '$logo_nama', description = '$description'  WHERE id='$id_about'");
        if ($update) {
            header("location:?page=about&ubah=berhasil");
        }
    } else {
        // insert
        $insert = mysqli_query($koneksi, "INSERT INTO about (email, phone, address, name, birthday, zip_code, title, images, description)
        VALUES ('$email', '$phone', '$address', '$name', '$birthday', '$zip_code', '$title', '$logo_nama','$description') ");
        if ($insert) {
            header("location:?page=about&tambah=berhasil");
        }
    }
}

// diluar if karena buat nampilin data yang sudah di input dan diupdate

?>

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Pengaturan</h5> -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="logo" class="form-label fw-bold">Foto</label>
                                </div>
                                <div class="col-sm">
                                    <input type="file" name="logo" class="form-control">
                                    <img class="mt-2 rounded"
                                        src="uploads/<?= isset($row['images']) ? $row['images'] : ''; ?>" alt=""
                                        width="100">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="title" class="form-label fw-bold">Title</label>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="title" class="form-control"
                                        value="<?= isset($row['title']) ? $row['title'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                </div>
                                <div class="col-sm">
                                    <textarea name="description" id=""
                                        class="form-control"><?= isset($row['description']) ? $row['description'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="name" class="form-label fw-bold">Nama</label>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="name" class="form-control"
                                        value="<?= isset($row['name']) ? $row['name'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="birthday" class="form-label fw-bold">Birthday</label>
                                </div>
                                <div class="col-sm">
                                    <input type="date" name="birthday" class="form-control"
                                        value="<?= isset($row['birthday']) ? $row['birthday'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="address" class="form-label fw-bold">Alamat</label>
                                </div>
                                <div class="col-sm">
                                    <textarea name="address" id="" class="form-control"><?= isset($row['address']) ? $row['address'] : '' ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="zip_code" class="form-label fw-bold">Kode Pos</label>
                                </div>
                                <div class="col-sm">
                                    <input type="number" name="zip_code" class="form-control"
                                        value="<?= isset($row['zip_code']) ? $row['zip_code'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="email" class="form-label">Email</label>
                                </div>
                                <div class="col-sm">
                                    <input type="email" name="email" class="form-control"
                                        value="<?= isset($row['email']) ? $row['email'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="phone" class="form-label fw-bold">No. Telp</label>
                                </div>
                                <div class="col-sm">
                                    <input type="number" name="phone" class="form-control"
                                        value="<?= isset($row['phone']) ? $row['phone'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="phone" class="form-label fw-bold">No. Telp</label>
                                </div>
                                <div class="col-sm">
                                    <input type="number" name="phone" class="form-control"
                                        value="<?= isset($row['phone']) ? $row['phone'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="hobi_1" class="form-label fw-bold">Hobi 1</label>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="hobi_1" class="form-control"
                                        value="<?= isset($row['hobi_1']) ? $row['hobi_1'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-2">
                                    <label for="hobi_2" class="form-label fw-bold">Hobi 2</label>
                                </div>
                                <div class="col-sm">
                                    <input type="number" name="phone" class="form-control"
                                        value="<?= isset($row['phone']) ? $row['phone'] : '' ?>">
                                </div>
                            </div>
                            <div class="mt-2 mb-3 row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="?page=about" class="text-muted ms-2">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>