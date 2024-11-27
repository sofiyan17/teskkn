<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');  // Arahkan ke halaman login jika belum login
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Datang - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">KKN 28 UNHAZ</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-3 me-lg-4">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" role="button"><i class="fa-solid fa-right-from-bracket"></i></a>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Pelayanan</div>
                            <a class="nav-link" href="datang.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-arrow-down-to-line"></i></div>
                                Form Data Datang
                            </a>
                            <a class="nav-link" href="pindah.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-arrow-up-from-line"></i></i></div>
                                Form Data Pindah
                            </a>
                            <a class="nav-link" href="kelahiran.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                                Form Data Kelahiran
                            </a>
                            <a class="nav-link" href="kematian.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-minus"></i></div>
                                Form Data Kematian
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Data Datang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelayanan Administratif Desa Kalijaga</li>
                        </ol>
                    </div>
                </main>

                
                <!-- form -->
                <form action="add_data_datang.php" method="POST">
                    <div class="container">
                        <div class="container border rounded px-3 py-3">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pendatang" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK Pendatang" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis-kelamin" required>
                                    <option selected disabled>Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="dusun" class="form-label">Dusun</label>
                                <input type="text" class="form-control" name="dusun" id="dusun" placeholder="Asal Dusun" required>
                            </div>

                            <div class="mb-3">
                                <label for="desa" class="form-label">Desa</label>
                                <input type="text" class="form-control" name="desa" id="desa" placeholder="Asal Desa" required>
                            </div>

                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Asal Kecamatan" required>
                            </div>

                            <div class="mb-3">
                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Asal Kabupaten" required>
                            </div>

                            <div class="mb-3">
                                <label for="rt-tujuan" class="form-label">RT Tujuan</label>
                                <select class="form-select" name="rt_tujuan" id="rt-tujuan" required>
                                    <option selected disabled>Pilih</option>
                                    <option value="001">RT. 001</option>
                                    <option value="002">RT. 002</option>
                                    <option value="003">RT. 003</option>
                                    <option value="004">RT. 004</option>
                                    <option value="005">RT. 005</option>
                                    <option value="006">RT. 006</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="dusun-tujuan" class="form-label">Dusun Tujuan</label>
                                <select class="form-select" name="dusun_tujuan" id="dusun-tujuan" required>
                                    <option selected disabled>Pilih</option>
                                    <option value="Anyar">Anyar</option>
                                    <option value="Darul Hijrah">Darul Hijrah</option>
                                    <option value="Dasan Bongkot">Dasan Bongkot</option>
                                    <option value="Dayan Jero">Dayan Jero</option>
                                    <option value="Gubuk Dapur">Gubuk Dapur</option>
                                    <option value="Jangkong">Jangkong</option>
                                    <option value="Jorong">Jorong</option>
                                    <option value="Karang Luar">Karang Luar</option>
                                    <option value="Karang Mantri">Karang Mantri</option>
                                    <option value="Keramba">Keramba</option>
                                    <option value="Lauk Peken">Lauk Peken</option>
                                    <option value="Petakawan">Petakawan</option>
                                    <option value="Rembate">Rembate</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="pengisi-data" class="form-label">Pengisi Data</label>
                                <input type="text" class="form-control" name="pengisi_data" id="pengisi-data" placeholder="Nama Pengisi Data" required>
                            </div>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" name="jabatan" id="jabatan" required>
                                    <option selected disabled>Pilih</option>
                                    <option value="Kepala Wilayah">Kepala Wilayah</option>
                                    <option value="Kader Posyandu">Kader Posyandu</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>


                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &#169; 2024 KKN 28 Bina Desa Universistas Hamzanwadi</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
