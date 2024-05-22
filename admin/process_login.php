<?php
session_start();

// Sambungkan ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "indah_059";

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil nilai dari form login
$username = $_POST["username"];
$password = $_POST["password"];

// Cari pengguna dengan username dan password yang cocok
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Jika pengguna ditemukan, set session dan redirect ke halaman utama
    $_SESSION["username"] = $username;
    header("Location: cetak.php"); // Arahkan ke halaman home.php
    exit();
} else {
    // Jika pengguna tidak ditemukan atau password salah, tampilkan pesan kesalahan
    echo "Username atau password salah.";
}

// Tutup koneksi
mysqli_close($conn);
?>
