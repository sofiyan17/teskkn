<?php
include('db_connect.php');

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_lahir = $_POST['jenis_lahir'];
$penolong_kelahiran = $_POST['penolong_kelahiran'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$rt = $_POST['rt'];
$dusun = $_POST['dusun'];
$nama_ayah = $_POST['nama_ayah'];
$nik_ayah = $_POST['nik_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$nik_ibu = $_POST['nik_ibu'];
$pengisi_data = $_POST['pengisi_data'];
$jabatan = $_POST['jabatan'];
$dusun_pengisi = $_POST['dusun_pengisi'];

$sql = "INSERT INTO lahir (nama, jenis_kelamin, tempat_lahir, jenis_lahir, penolong_kelahiran, tanggal_lahir, rt, dusun, nama_ayah, nik_ayah, nama_ibu, nik_ibu, pengisi_data, jabatan, dusun_pengisi)
        VALUES ('$nama', '$jenis_kelamin', '$tempat_lahir', '$jenis_lahir', '$penolong_kelahiran', '$tanggal_lahir', '$rt', '$dusun', '$nama_ayah', '$nik_ayah', '$nama_ibu', '$nik_ibu', '$pengisi_data', '$jabatan', '$dusun_pengisi')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
    header('Location: kelahiran.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: kelahiran.php');
    exit();
}

$conn->close();
?>
