<?php 
session_start();
ob_start();

include 'koneksi.php';
if(empty($_SESSION['ID_USER'])){
    header("location:index.php?access=failed");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Porto</title>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- tagify -->
    <link rel="stylesheet" href="assets/tagify/tagify.css">
    <script src="assets/js/tags/dist/inputTags.min.css"></script>

    <?php include 'template/css.php'?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- header -->
        <?php include 'template/header.php' ?>

        <!-- sidebar -->
        <?php include 'template/sidebar.php'?>

        <!-- Main content -->
        <?php 
                
                if (isset($_GET['page'])) {
                    if (file_exists('content/' . $_GET['page'] . '.php')) {
                        include 'content/' . $_GET['page'] . '.php';
                    } else {
                        include 'content/notfound.php';
                    }
                } else {
                    include 'content/dashboard.php';
                }
                
                ?>
    </div>


    <!-- Main Footer -->
    <?php include 'template/footer.php' ?>

    <!-- js file -->
    <?php include 'template/js.php' ?>

    <!-- summernote -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <script>
    $(' .summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    </script>
    <!-- end summernote -->

    <!-- tags -->
    <script src="assets/tagify/tagify.js"></script>
    <script>
    let input = document.querySelector('#tags');
    new Tagify(input)
    </script>
    <!-- end tags -->
</body>

</html>