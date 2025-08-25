<?php
$id = isset($_GET['id']) ? $_GET['edit'] : '';

//perintah edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM project WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);

    $title = "Edit Project";
} else {
    $title = "Tambah Project";
}

// perintah delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryGambar = mysqli_query($koneksi, "SELECT id, images FROM project WHERE id='$id'");
    $rowGambar = mysqli_fetch_assoc($queryGambar);
    $image_name = $rowGambar['images'];
    unlink("uploads/" . $image_name);

    $delete = mysqli_query($koneksi, "DELETE FROM project WHERE id = '$id'");
    // print_r($image_name);
    // die;

    if ($delete) {
        header("location:?page=blog&hapus=berhasil");
    }
}

// perintah simpan
if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];

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

        $update = "UPDATE project SET title = '$title' , description = '$description', images = '$image_nama', link = '$link' WHERE id = '$id'";
    } else {
        $update = "UPDATE project SET title = '$title' , description = '$description', link='$link' WHERE id = '$id'";
    }

    // perintah update
    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, $update);
        if ($update) {
            header("location:?page=project&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO project (title, description, images, link) VALUES ('$title', '$description', '$image_nama', '$link')");
        if ($insert) {
            header("location:?page=project&tambah=berhasil");
        }
    }
}

// $queryCategories = mysqli_query($koneksi, "SELECT * FROM categories WHERE type ='blog' ORDER BY id ='$id'");
// $rowsCategories = mysqli_fetch_all($queryCategories, MYSQLI_ASSOC);

// penulis di ambil dari 
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
                                <li class="breadcrumb-item"><a href="?page=blog"><?= $title ?></a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input type="file" name="image" class="form-control"
                                        value=" <?= ($id) ? $rowEdit['images'] : ''; ?>">
                                    <small>)* image must be landscape or 1920 x 1080</small> <br>
                                    <img class="mt-2 rounded"
                                        src="uploads/<?= (isset($rowEdit['images'])) ? $rowEdit['images'] : '' ?>"
                                        alt="" width="200">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukan title"
                                        required value="<?= ($id) ? $rowEdit['title'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Description Project</label>
                                    <textarea name="description" id=""
                                        class="form-control"><?= ($id) ? $rowEdit['description'] : ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Link Project</label>
                                    <input type="url" name="link" class="form-control" placeholder="Masukan Link"
                                        required value="<?= ($id) ? $rowEdit['link'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="?page=project" class="text-muted ms-2">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>