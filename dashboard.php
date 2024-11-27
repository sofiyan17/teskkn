<?php
session_start();
include('db_connect.php');

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');  // Arahkan ke halaman login jika belum login
    exit();
}

echo "Selamat datang, " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" />
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
                        <h1 class="mt-4">Pelayanan Administratif</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelayanan Administratif Desa Kalijaga</li>
                        </ol>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Form Data Datang</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="datang.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Form Data Pindah</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pindah.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Form Data Kelahiran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kelahiran.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Form Data Kematian</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kematian.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <p><i class="fas fa-table me-1"></i>Table Data Datang</p>
                                <p><a href="export_data_datang.php" class="nav-link "><i class="fa-solid fa-file-export"></i></a></p>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Dusun</th>
                                            <th>Desa</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten</th>
                                            <th>RT Tujuan</th>
                                            <th>Dusun Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $rows = mysqli_query($conn, "SELECT * FROM pendatang");
                                    foreach ($rows as $row ):
                                    ?>

                                    <tr>
                                        <td><?php echo $row["nama"]?></td>
                                        <td><?php echo $row["nik"]?></td>
                                        <td><?php echo $row["jenis_kelamin"]?></td>
                                        <td><?php echo $row["dusun"]?></td>
                                        <td><?php echo $row["desa"]?></td>
                                        <td><?php echo $row["kecamatan"]?></td>
                                        <td><?php echo $row["kabupaten"]?></td>
                                        <td><?php echo $row["rt_tujuan"]?></td>
                                        <td><?php echo $row["dusun_tujuan"]?></td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                                <p><i class="fas fa-table me-1"></i>Table Data Pindah</p>
                                <p><a href="export_data_pindah.php" class="nav-link "><i class="fa-solid fa-file-export"></i></a></p>
                            </div>
                            <div class="card-body">
                                <table id="tabel_pindah">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>RT</th>
                                            <th>Dusun</th>
                                            <th>Dusun Tujuan</th>
                                            <th>Desa Tujuan</th>
                                            <th>Kecamatan Tujuan</th>
                                            <th>Kabupaten Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $rows = mysqli_query($conn, "SELECT * FROM pindah");
                                    foreach ($rows as $row ):
                                    ?>

                                    <tr>
                                        <td><?php echo $row["nama"]?></td>
                                        <td><?php echo $row["nik"]?></td>
                                        <td><?php echo $row["jenis_kelamin"]?></td>
                                        <td><?php echo $row["rt"]?></td>
                                        <td><?php echo $row["dusun"]?></td>
                                        <td><?php echo $row["dusun_tujuan"]?></td>
                                        <td><?php echo $row["desa_tujuan"]?></td>
                                        <td><?php echo $row["kecamatan_tujuan"]?></td>
                                        <td><?php echo $row["kabupaten_tujuan"]?></td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                                <p><i class="fas fa-table me-1"></i>Table Data Kelahiran</p>
                                <p><a href="export_data_kelahiran.php" class="nav-link "><i class="fa-solid fa-file-export"></i></a></p>
                            </div>
                            <div class="card-body">
                                <table id="tabel_kelahiran">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Jenis Lahir</th>
                                            <th>Penolong Kelahiran</th>
                                            <th>Tanggal Lahir</th>
                                            <th>RT</th>
                                            <th>Dusun</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $rows = mysqli_query($conn, "SELECT * FROM lahir");
                                    foreach ($rows as $row ):
                                    ?>

                                    <tr>
                                        <td><?php echo $row["nama"]?></td>
                                        <td><?php echo $row["jenis_kelamin"]?></td>
                                        <td><?php echo $row["tempat_lahir"]?></td>
                                        <td><?php echo $row["jenis_lahir"]?></td>
                                        <td><?php echo $row["penolong_kelahiran"]?></td>
                                        <td><?php echo $row["tanggal_lahir"]?></td>
                                        <td><?php echo $row["rt"]?></td>
                                        <td><?php echo $row["dusun"]?></td>
                                        <td><?php echo $row["nama_ayah"]?></td>
                                        <td><?php echo $row["nama_ibu"]?></td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                                <p><i class="fas fa-table me-1"></i>Table Data Kematian</p>
                                <p><a href="export_data_kematian.php" class="nav-link "><i class="fa-solid fa-file-export"></i></a></p>
                            </div>
                            <div class="card-body">
                                <table id="tabel_kematian">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pendidikan</th>
                                            <th>Pekerjaan</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Tanggal Meniggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $rows = mysqli_query($conn, "SELECT * FROM kematian");
                                    foreach ($rows as $row ):
                                    ?>

                                    <tr>
                                        <td><?php echo $row["nama"]?></td>
                                        <td><?php echo $row["nik"]?></td>
                                        <td><?php echo $row["alamat"]?></td>
                                        <td><?php echo $row["tanggal_lahir"]?></td>
                                        <td><?php echo $row["jenis_kelamin"]?></td>
                                        <td><?php echo $row["pendidikan"]?></td>
                                        <td><?php echo $row["pekerjaan"]?></td>
                                        <td><?php echo $row["nama_orang_tua"]?></td>
                                        <td><?php echo $row["tanggal_meninggal"]?></td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted text-center">Copyright &#169; 2024 KKN 28 Bina Desa Universistas Hamzanwadi</div>
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
        <script src="assets/js/tabel_datang.js"></script>
        <script src="assets/js/tabel_pindah.js"></script>
        <script src="assets/js/tabel_kelahiran.js"></script>
        <script src="assets/js/tabel_kematian.js"></script>
    </body>
</html>
