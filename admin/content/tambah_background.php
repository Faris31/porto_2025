<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';

//perintah edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM background WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit background";
} else {
    $title = "Tambah background";
}

// perintah delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryGambar = mysqli_query($koneksi, "SELECT id, images FROM background WHERE id='$id'");
    $rowGambar = mysqli_fetch_assoc($queryGambar);
    $image_name = $rowGambar['images'];
    unlink("uploads/" . $image_name);

    $delete = mysqli_query($koneksi, "DELETE FROM background WHERE id = '$id'");
    // print_r($image_name);
    // die;

    if ($delete) {
        header("location:?page=background&hapus=berhasil");
    }
}

// perintah simpan
if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $is_active = $_POST['is_active'];

    //perintah untuk mengambil gambar
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $type = mime_content_type($tmp_name);


        $ext_allowed = ['image/png', 'image/png', 'image/jpeg'];
        if (in_array($type, $ext_allowed)) {
            $path = "uploads/";
            if (!is_dir($path)) mkdir($path);

            $image_nama = time() . "-" . basename($image);
            $target_file = $path . $image_nama;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // jika gambarnya ada, maka gambar sebelumnya akan di ganti ke gambar yang baru
                if (!empty($row['image'])) {
                    unlink($path . $row['image']);
                }
            }
        } else {
            echo "Ekstensi file tidak ditemukan!";
            die;
        }
        $update = "UPDATE background SET title = '$title', is_active = '$is_active', images = '$image_nama', description = '$description' WHERE id = '$id'";
    } else {
        $update = "UPDATE background SET title = '$title', is_active = '$is_active', description = '$description' WHERE id = '$id'";
    }

    // perintah update
    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, $update);

        if ($update) {
            header("location:?page=background&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO background (title, images, description, is_active) VALUES('$title','$image_nama', '$description', '$is_active')");
        if ($insert) {
            header("location:?page=background&tambah=berhasil");
        }
    }
}
?>

<!-- Main content -->
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
                                <li class="breadcrumb-item"><a href="?page=background"><?= $title ?></a></li>
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
                            <!-- <h5 class="card-title"></h5> -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="">Gambar</label>
                                    <input type="file" name="image" class="form-control" required
                                        value=" <?= ($id) ? $rowEdit['images'] : ''; ?>">
                                    <small>* image must be landscape or 1920 x 1080</small> <br>
                                    <img class="mt-2 rounded-2"
                                        src="uploads/<?= (isset($rowEdit['images'])) ? $rowEdit['images'] : '' ?>"
                                        alt="" width="20%">
                                </div>
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukan title"
                                        required value="<?= ($id) ? $rowEdit['title'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="">Deskripsi</label>
                                    <input type="text" name="description" class="form-control"
                                        placeholder="Masukan deskripsi" required
                                        value="<?= ($id) ? $rowEdit['description'] : ''; ?>">
                                </div>
                                <div class=" mb-3">
                                    <label for="">Status</label>
                                    <select name="is_active" id="" class="form-control">
                                        <option value="">Silahkan Dipilih</option>
                                        <option value="0"
                                            <?= ($id) ? $rowEdit['is_active'] == 0 ? 'selected' : '' : '' ?>>
                                            Draft
                                        </option>
                                        <option value="1"
                                            <?= ($id) ? $rowEdit['is_active'] == 1 ? 'selected' : '' : '' ?>>
                                            Publish</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=background" class="text-muted ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>