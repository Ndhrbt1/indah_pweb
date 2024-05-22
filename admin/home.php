<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    // Jika tidak, redirect ke halaman login
    header("Location: index.php");
    exit();
}

// Jika sudah login, tampilkan halaman utama
echo "Selamat datang, " . $_SESSION["username"] . "! Ini adalah halaman utama.";
?>
