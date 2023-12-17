<?php
include '../Config/koneksi.php';

if (isset($_SESSION['role'])) {
    $posisi = 'jurnal';
}
else{
    header("location:../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DAFTAR JURNAL</title>

    <!-- Custom fonts for this template-->
    <link href="../Assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../Assets/backend/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../Assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('menu.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-gray-800">DAFTAR JURNAL</h1>

                    <div class="card border-left-primary shadow h-100 py-2">
                        <?php if ($_SESSION['role']=='user'): ?>
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">DATA JURNAL</h6>
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahModal" href="#">TAMBAH DATA</button>
                            </div>
                        <?php endif ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        if ($_SESSION['role']=='admin') {
                                            $data_jurnal = $koneksi->query("SELECT * FROM jurnal");
                                        }
                                        elseif($_SESSION['role']=='user'){
                                            $data_jurnal = $koneksi->query("SELECT * FROM jurnal WHERE id_user='".$_SESSION['id_users']."'");
                                        }
                                        while($data=mysqli_fetch_array($data_jurnal)){
                                            ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $data['judul']; ?></td>
                                                <td><?= $data['tahun']; ?></td>
                                                <td><?= $data['status']; ?></td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#sjurnalModal<?= $no ?>" class="btn btn-sm btn-info" href="#">LIHAT</button>
                                                    <a class="btn btn-sm btn-primary" href="lihat.php?id=<?= $data['id_jurnal']; ?>">UBAH</a>
                                                    <a class="btn btn-sm btn-danger" href="lihat.php?id=<?= $data['id_jurnal']; ?>">HAPUS</a>
                                                    <?php include 'show_jurnal.php'; ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include('logout.php') ?>
    <?php include('tambah.php') ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../Assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Assets/backend/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../Assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../Assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../Assets/backend/js/demo/datatables-demo.js"></script>

</body>

</html>