 <?php
include 'admin/koneksi.php';

// $id = isset($_GET['id']) ? $_GET['edit'] : '';
// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $query = mysqli_query($koneksi, "SELECT * FROM pesan_pengguna WHERE id = '$id'");
//     $rowEdit = mysqli_fetch_assoc($query);

//     $title = "Edit Pesan Pengguna";
// } else {
//     $title = "Tambah Pesan Pengguna";
// }

// if (isset($_POST['simpan'])) {
//    $name    = mysqli_real_escape_string($koneksi, $_POST['name']);
//     $email   = mysqli_real_escape_string($koneksi, $_POST['email']);
//     $subject = mysqli_real_escape_string($koneksi, $_POST['subject']);
//     $message = mysqli_real_escape_string($koneksi, $_POST['message']);

//     // print_r($password);
//     // die;

//     if ($id) {
//         // ini query update
//         $update = mysqli_query($koneksi, "UPDATE pesan_pengguna SET name = '$name', email='$email', subject ='$subject', message='$message' WHERE id = '$id' ");
//         if ($update) {
//             header("location:?page=contact&ubah=berhasil");
//         }
//     } else {
//         $insert = mysqli_query($koneksi, "INSERT INTO pesan_pengguna (name, email, subject, message) VALUES('$name','$email', '$subject', '$message')");
//         if ($insert) {
//             header("location:?page=contact&tambah=berhasil");
//         }
//     }
// }


if (isset($_POST['simpan'])) {
    $name    = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email   = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subject = mysqli_real_escape_string($koneksi, $_POST['subject']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Query insert
    $insert = mysqli_query($koneksi, "INSERT INTO pesan_pengguna (name, email, subject, message) 
                                      VALUES ('$name', '$email', '$subject', '$message')");

    if ($insert) {
        // Redirect biar form gak ke-submit ulang kalau di-refresh
        header("Location: ?page=contact&tambah=berhasil");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

//     if ($row) {
//         // update
//         $id_pesan = $row['id'];
//         $update = mysqli_query($koneksi, "UPDATE pesan_pengguna SET name = '$name', email = '$email', subject = '$subject', message = '$message', 
//           WHERE id='$id_pesan'");
//         if ($update) {
//             header("location:?page=pesan_pengguna&ubah=berhasil");
//         }
//     } else {
//         // insert
//         $insert = mysqli_query($koneksi, "INSERT INTO pesan_pengguna (name, email, subject, message)
//         VALUES ('$name', '$email', '$subject', '$message') ");
//         if ($insert) {
//             header("location:?page=pesan_pengguna&tambah=berhasil");
//         }
//     }

 ?>

 <!-- contact -->
 <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
     <div class="container">
         <div class="row justify-content-center mb-5 pb-3">
             <div class="col-md-7 heading-section text-center ftco-animate">
                 <span class="subheading">Contact us</span>
                 <h2 class="mb-4">Punya project dan bingung ingin mebuatnya?</h2>
                 <p>Pelajari lebih jauh tentang siapa saya, apa yang saya lakukan, dan bagaimana saya bisa mendukung
                     kebutuhan Anda.</p>
             </div>
         </div>

         <div class="row block-9">
             <div class="col-md-8">
                 <form action="" class="bg-light p-4 p-md-5 contact-form" method="post">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="name" placeholder="Your Name">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="email" placeholder="Your Email">
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="subject" placeholder="Subject">
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <textarea id="" cols="30" rows="7" class="form-control" name="message"
                                     placeholder="Message"></textarea>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <input type="submit" value="Send" name="simpan" class="btn btn-primary py-3 px-5">
                             </div>
                         </div>
                     </div>
                 </form>

             </div>

             <div class="col-md-4 d-flex pl-md-5">
                 <div class="row">
                     <div class="dbox w-100 d-flex">
                         <div class="icon d-flex align-items-center justify-content-center">
                             <span class="fa fa-map-marker"></span>
                         </div>
                         <div class="text">
                             <p><span>Address:</span><?= $rowSetting['address'] ?></p>
                         </div>
                     </div>
                     <div class="dbox w-100 d-flex">
                         <div class="icon d-flex align-items-center justify-content-center">
                             <span class="fa fa-phone"></span>
                         </div>
                         <div class="text">
                             <p><span>Phone:</span> <a href="#"><?= $rowSetting['phone'] ?></a></p>
                         </div>
                     </div>
                     <div class="dbox w-100 d-flex">
                         <div class="icon d-flex align-items-center justify-content-center">
                             <span class="fa fa-paper-plane"></span>
                         </div>
                         <div class="text">
                             <p><span>Email:</span> <a href="#"><?= $rowSetting['email'] ?></a></p>
                         </div>
                     </div>
                     <div class="dbox w-100 d-flex">
                         <div class="icon d-flex align-items-center justify-content-center">
                             <span class="fa fa-globe"></span>
                         </div>
                         <div class="text">
                             <p><span>Github</span> <a
                                     href="https://github.com/Faris31/"><?= $rowSetting['github'] ?></a></p>
                         </div>
                     </div>
                 </div>
                 <!-- <div id="map" class="map"></div> -->
             </div>
         </div>
     </div>
 </section>
 <!-- end contact -->