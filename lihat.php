<?php
include 'Config/koneksi.php';

if (isset($_SESSION['role'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Jurnal</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="Assets/frontend/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="Assets/frontend/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Assets/datatable/jquery.dataTables.min.css">
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="font-weight: bold;">E-PUS UKK</a>
            <a class="btn btn-primary" href="login.php">MASUK</a>
        </div>
    </nav>
    <?php 

    $status="tidak";
    if (isset($_GET['id'])) {
        $status="ada";
    }

    // echo $domain;
    // echo "<br>";
    // echo $path;
    // echo "<br>";
    // echo $queryString;
    // echo "<br>";
    // echo $directoryPath."\..";
    // echo "<br>";
    // echo $base_url;
    phpinfo();
    // $image = new Imagick();

    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <?php if ($status=="ada"): ?>
                            <h1 class="mb-5">Silahkan Ketikkan Jurnal Yang Ingin Anda Cari</h1>
                        <?php elseif ($status=="tidak"): ?>
                            <h1 class="mb-5">Dokumen tidak ditemukan, Silahkan pilih dokumen lainnya</h1>
                            <br>
                            <a class="btn btn-sm btn-info" href="index.php">KEMBALI</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative" style="background-color: #fff; border: 5px solid #FFF;">

        </div>
    </header>
    <!-- Bootstrap core JS-->
    <script src="Assets/allin/bootstrap.bundle.min.js"></script>
    <script src="Assets/allin/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="Assets/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        let table = new DataTable(".dataTable");
    </script>
</body>
</html>
