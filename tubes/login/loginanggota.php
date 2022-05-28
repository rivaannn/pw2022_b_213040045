<?php
require '../config/functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query(koneksi(), "SELECT * FROM tbl_login WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            echo "
            <script>
                alert('Berhasil Login Sebagai Anggota!!!');
                document.location.href = '../indexanggota.php';
            </script>
        ";
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Anggota - VAN TECH</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Core-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Form login center  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card shadow-lg">
                    <div class="fw-bolder fs-4 card-header text-center bg-primary text-white">Form Login Anggota - VAN TECH</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="masukkan username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="masukkan password" required>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                                <div class="d-grid gap-2 col-6 mx-auto py-3">
                                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                                </div>
                                <div class="fw-light text-center">
                                    <span class="text-center"> Belum punya akun? </span>
                                    <a href="../register/registrasianggota.php"> Daftar Sekarang </a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="assets/js/scripts.js"></script>

</html>