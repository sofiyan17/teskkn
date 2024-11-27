<?php
// Koneksi ke database
include('db_connect.php');

// Ambil data dari form
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$rt = $_POST['rt'];
$dusun = $_POST['dusun'];
$dusun_tujuan = $_POST['dusun_tujuan'];
$desa_tujuan = $_POST['desa_tujuan'];
$kecamatan_tujuan = $_POST['kecamatan_tujuan'];
$kabupaten_tujuan = $_POST['kabupaten_tujuan'];
$pengisi_data = $_POST['pengisi_data'];
$jabatan = $_POST['jabatan'];

// Query untuk menambahkan data ke tabel
$sql = "INSERT INTO pindah (nama, nik, jenis_kelamin, rt, dusun, dusun_tujuan, desa_tujuan, kecamatan_tujuan, kabupaten_tujuan, pengisi_data, jabatan)
        VALUES ('$nama', '$nik', '$jenis_kelamin', '$rt', '$dusun', '$dusun_tujuan', '$desa_tujuan', '$kecamatan_tujuan', '$kabupaten_tujuan', '$pengisi_data', '$jabatan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
    header('Location: pindah.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: pindah.php');
    exit();
}

// Tutup koneksi
$conn->close();
?>
