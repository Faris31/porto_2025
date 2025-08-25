<?php 
include 'admin/koneksi.php';

// querySetting
$querySetting = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
$rowSetting = mysqli_fetch_assoc($querySetting);

// queryBackground
$queryBackground = mysqli_query($koneksi, "SELECT * FROM background ORDER BY id DESC");
$rowBackground = mysqli_fetch_all($queryBackground, MYSQLI_ASSOC);

// queryAbout
$queryAbout = mysqli_query($koneksi, "SELECT * FROM about LIMIT 1");
$rowAbout = mysqli_fetch_assoc($queryAbout);

// queryProject
$queryProject = mysqli_query($koneksi, "SELECT * FROM project ORDER BY id DESC");
$rowProject = mysqli_fetch_all($queryProject, MYSQLI_ASSOC);

// queryBlog 
$queryBlog = mysqli_query($koneksi, "SELECT * FROM blogs ORDER BY id DESC");
$rowBlog = mysqli_fetch_all($queryBlog, MYSQLI_ASSOC);

// queryEducarion
$queryEdu = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id DESC");
$rowEdu = mysqli_fetch_all($queryEdu, MYSQLI_ASSOC);

// queryexperience
$queryExp = mysqli_query($koneksi, "SELECT * FROM experience ORDER BY id DESC");
$rowExp = mysqli_fetch_all($queryExp, MYSQLI_ASSOC);

//querySkill
$querySkill = mysqli_query($koneksi, "SELECT * FROM skill_soft ORDER BY id DESC");
$rowSkill = mysqli_fetch_all($querySkill, MYSQLI_ASSOC);
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clyde - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- navbar -->
    <?php include 'inc/header.php' ?>
    <!-- end navbar -->

    <!-- main -->
    <main class="main">
        <?php
            if (isset($_GET['page'])) {
            if (file_exists('content/' . $_GET['page'] . ".php")) {
                include 'content/' . $_GET['page'] . ".php";  #Ini ngecek ada atau nggak route ini di dalam folder content/
               } else {
                include 'content/notfound.php';   #kalo gaada lgsg di redirect ke not found
                }
            } else {
                include 'content/home.php';
            }
        ?>
    </main>
    <!-- end main -->

    <!-- footer -->
    <?php include 'inc/footer.php' ?>
    <!-- end footer -->


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="assets/js/google-map.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>