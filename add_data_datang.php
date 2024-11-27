<?php
// Koneksi ke database
include('db_connect.php');

// Ambil data dari formulir
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$dusun = $_POST['dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$rt_tujuan = $_POST['rt_tujuan'];
$dusun_tujuan = $_POST['dusun_tujuan'];
$pengisi_data = $_POST['pengisi_data'];
$jabatan = $_POST['jabatan'];

// Query untuk menambahkan data
$sql = "INSERT INTO pendatang (nama, nik, jenis_kelamin, dusun, desa, kecamatan, kabupaten, rt_tujuan, dusun_tujuan, pengisi_data, jabatan)
        VALUES ('$nama', '$nik', '$jenis_kelamin', '$dusun', '$desa', '$kecamatan', '$kabupaten', '$rt_tujuan', '$dusun_tujuan', '$pengisi_data', '$jabatan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
    header('Location: datang.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: datang.php');
    exit();
}

// Tutup koneksi
$conn->close();
?>
