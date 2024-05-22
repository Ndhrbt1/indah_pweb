<?php
// File: koneksi.php

// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "liga";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>
