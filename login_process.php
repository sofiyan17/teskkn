<?php
session_start();
include('db_connect.php');

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];  // Ambil password dari form

    // Query untuk mendapatkan data user berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);  // Binding parameter username
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Ambil data user
        $user = $result->fetch_assoc();
        
        // Verifikasi password secara langsung (tanpa hash)
        if ($password === $user['password']) {
            // Login berhasil, simpan data pengguna di session
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $user['id'];
            header('Location: dashboard.php');  // Halaman setelah login berhasil
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Username tidak ditemukan.";
    }

    $stmt->close();
}

$conn->close();
?>
v