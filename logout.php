<?php
session_start();
session_unset();  // Hapus semua session
session_destroy();  // Hapus session
header('Location: login.php');  // Arahkan kembali ke halaman login
exit();
?>
