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
            <a class="navbar-brand" href="#!" style="font-weight: bold;">E-PUS UKK</a>
            <a class="btn btn-primary" href="login.php">MASUK</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Silahkan Ketikkan Jurnal Yang Ingin Anda Cari</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative" style="background-color: #fff; border: 5px solid #FFF;">
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    $data_jurnal = $koneksi->query("SELECT * FROM jurnal WHERE status='konfirmasi'");
                    while($data=mysqli_fetch_array($data_jurnal)){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['judul']; ?></td>
                            <td><?= $data['tahun']; ?></td>
                            <td><a class="btn btn-sm btn-info" href="lihat.php?id=<?= $data['id_jurnal']; ?>">LIHAT</a></td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
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
