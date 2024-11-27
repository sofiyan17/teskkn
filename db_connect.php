<?php
$servername = "sql112.infinityfree.com";
$username = "if0_37799516";  // Ganti dengan username database Anda
$password = "woClAA0U8j";      // Ganti dengan password database Anda
$dbname = "if0_37799516_datadesa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
