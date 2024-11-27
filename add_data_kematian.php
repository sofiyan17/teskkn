<?php
include('db_connect.php');

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$no_kk = $_POST['kk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_hubungan = $_POST['status_hubungan'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$nama_orang_tua = $_POST['ortu'];
$tanggal_meninggal = $_POST['tanggal_meninggal'];
$pengisi_data = $_POST['pengisi_data'];
$jabatan = $_POST['jabatan'];

// Upload file
$file_kk = '';
if (isset($_FILES['file_kk']['name']) && $_FILES['file_kk']['name'] != '') {
    $target_dir = "assets/uploads/";
    $file_kk = $target_dir . basename($_FILES['file_kk']['name']);
    move_uploaded_file($_FILES['file_kk']['tmp_name'], $file_kk);
}

$sql = "INSERT INTO kematian (nama, nik, alamat, no_kk, tempat_lahir, tanggal_lahir, jenis_kelamin, status_hubungan, pendidikan, pekerjaan, nama_orang_tua, tanggal_meninggal, file_kk, pengisi_data, jabatan) 
        VALUES ('$nama', '$nik', '$alamat', '$no_kk', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$status_hubungan', '$pendidikan', '$pekerjaan', '$nama_orang_tua', '$tanggal_meninggal', '$file_kk', '$pengisi_data', '$jabatan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
    header('Location: kematian.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: kematian.php');
    exit();
}

$conn->close();
?>
