<?php
session_start();
require '../config/functions.php';

$id = $_SESSION['id'];
$tbladmin = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE id   = '$id'")[0];


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="../assets/img/logo.png" />

  <title>Profile - Admin</title>

  <!-- Core CSS -->
  <link href="css/app.css" rel="stylesheet" />

  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Boostrap 5 -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
  <!-- Navbar Sebelah Kiri -->
  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" style="text-decoration: none" href="../indexadmin.php">
          <span class="align-middle">Van Technology</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="home"></i>
              <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Profile</span>
            </a>
          </li>

          <li class="sidebar-header">Tabel</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="tabeladmin/tabeladmin.php">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Admin</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="tabelanggota/tabelanggota.php">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Anggota</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="database"></i>
              <span class="align-middle">Tabel Buku</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/<?= $tbladmin['gambar']; ?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                <span class="text-dark"><?= $tbladmin['nama']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="profile.php">
                  <i class="align-middle me-1" data-feather="user"></i>Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login/logout.php">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Form Profile -->
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3">Profile</h1>
          <section class="padding-y bg-light">
            <div class="container">

              <div class="row">
                <aside class="col-lg-3 col-xl-3">
                  <!--  COMPONENT MENU LIST  -->
                  <nav class="nav flex-lg-column nav-pills mb-4">
                    <a class="nav-link active" href="#">Profil</a>
                    <a class="nav-link" href="logout.php">Keluar</a>
                  </nav>
                  <!--   COMPONENT MENU LIST END .//   -->
                </aside>
                <main class="col-lg-9">
                  <article class="card">
                    <div class="card-body">

                      <form>
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="row gx-3">
                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Admin" value="<?= $tbladmin['username']; ?>" readonly>
                              </div>

                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Admin@gmail.com" value="<?= $tbladmin['email']; ?>" readonly>
                              </div>

                              <div class="col-lg-12  mb-3">
                                <label class="form-label">Level</label>
                                <input class="form-control" type="text" placeholder="Admin@gmail.com" value="<?= $tbladmin['level']; ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <aside class="col-lg-4">
                            <figure class="text-lg-center">
                              <h6>Foto</h6>
                              <img class="img-lg img-avatar" src="img/<?= $tbladmin['gambar']; ?>" width="75px" alt="User Photo">
                            </figure>
                          </aside>
                        </div>
                      </form>

                      <hr class="my-4">

                      <div class="row" style="max-width:920px">
                        <div class="col-md">
                          <article class="box mb-3">
                            <a class="btn float-end btn btn-info btn-sm" href="#">Ganti Disini</a>
                            <p class="title mb-0">Ganti Password</p>
                          </article>
                        </div>
                      </div>


                    </div>
                  </article>
                </main>
              </div>

              <br><br>

            </div>
          </section>
        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
              <div class="small m-0 text-dark">
                Copyright &copy; 2022 &middot; Tubes &middot; Muhamad Rivan
                Sahronie
              </div>
            </div>
            <div class="col-auto ms-auto">
              <a class="link-dark btn btn-secondary" href="https://www.instagram.com/rivaann_/" target="_blank"><i class="bi bi-instagram"></i></a>
              <span class="text-white mx-1">&middot;</span>
              <a class="link-dark btn btn-secondary" href="https://github.com/rivaannn" target="_blank"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>