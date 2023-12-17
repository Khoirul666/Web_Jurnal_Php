<?php
include 'Config/koneksi.php';

if (isset($_SESSION['role'])) {
    header("location:admin");
}

if (isset($_POST['masuk'])) {
    $nim_nidn = $_POST['nim_nidn'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_akun = $koneksi->query("SELECT * FROM users WHERE nim_nidn='".$nim_nidn."' AND username='".$username."' AND password='".$password."'");

    if (mysqli_num_rows($cek_akun)>0) {
        $data = mysqli_fetch_array($cek_akun);
        $_SESSION['id_users'] = $data['id_users'];
        $_SESSION['nim_nidn'] = $data['nim_nidn'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['role'] = $data['role'];
        header("location:admin");
    }
    else{
        echo "<div class='alert alert-danger'>NIM / NIDN, Username, Password ada yang salah</div>
        <meta http-equiv='refresh' content='2'>";
    }
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
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#!">PERPUSTAKAAN JURNAL</a>
            <a class="btn btn-primary" href="index.php">HOME</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Silahkan Masuk Untuk Melakukan Upload Jurnal</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="container position-relative">
                <div class="row justify-content-center text-center text-white">
                    <div class="col-xl-6">
                        <h2 class="mb-4">LOGIN</h2>
                        <form method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control mb-2" name="nim_nidn" placeholder="NIM / NIDN">
                                    <input type="text" class="form-control mb-2" name="username" placeholder="USERNAME">
                                    <input type="password" class="form-control mb-2" name="password" placeholder="PASSWORD">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" name="masuk" class="btn btn-sm btn-primary">MASUK</button>
                                    <a href="daftar.php" class="btn btn-sm btn-success">DAFTAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Bootstrap core JS-->
    <script src="Assets/allin/bootstrap.bundle.min.js"></script>
</body>
</html>
