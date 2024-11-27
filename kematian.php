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
        <title>Data Kematian - SB Admin</title>
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
                        <h1 class="mt-4">Form Data Kematian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelayanan Administratif Desa Kalijaga</li>
                        </ol>
                    </div>
                </main>

                
                <!-- form -->
                <form method="POST" action="add_data_kematian.php" enctype="multipart/form-data">
                    <div class="container">
                        <div class="container border rounded px-3 py-3">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Yang Meninggal" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK Yang Meninggal" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                            </div>

                            <div class="mb-3">
                                <label for="kk" class="form-label">Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control" id="kk" name="kk" placeholder="Nomor Kartu Keluarga" required>
                            </div>

                            <div class="mb-3">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal-lahir" name="tanggal_lahir" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis-kelamin" name="jenis_kelamin" required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status-hubungan" class="form-label">Status Hubungan Dengan Keluarga</label>
                                <select class="form-select" id="status-hubungan" name="status_hubungan" required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Cucu">Cucu</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" required>
                            </div>

                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                            </div>

                            <div class="mb-3">
                                <label for="ortu" class="form-label">Nama Orang Tua</label>
                                <input type="text" class="form-control" id="ortu" name="ortu" placeholder="Nama Orang Tua Kandung (Ibu)" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal-meninggal" class="form-label">Tanggal Meninggal</label>
                                <input type="date" class="form-control" id="tanggal-meninggal" name="tanggal_meninggal" required>
                            </div>

                            <div class="mb-3">
                                <label for="file_kk" class="form-label">Gambar Kartu Keluarga</label>
                                <input type="file" class="form-control" id="file_kk" name="file_kk" required>
                            </div>

                            <div class="mb-3">
                                <label for="pengisi-data" class="form-label">Pengisi Data</label>
                                <input type="text" class="form-control" id="pengisi-data" name="pengisi_data" placeholder="Nama Pengisi Data" required>
                            </div>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" id="jabatan" name="jabatan" required>
                                    <option value="" selected disabled>Pilih</option>
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
