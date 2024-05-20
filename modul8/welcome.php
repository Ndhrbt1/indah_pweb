<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil informasi login dari session
$username = $_SESSION['username'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];

$login_time = $_SESSION['login_time'];

// Ambil informasi tambahan
$ip_address = $_SERVER['REMOTE_ADDR'];
$current_time = date("Y-m-d H:i:s");

// Tampilkan informasi
echo "<h2>Selamat datang, $name!</h2>";
echo "<p>Email: $email</p>";
echo "<p>Jam login: $login_time</p>";
echo "<p>Hari login: " . date('l', strtotime($login_time)) . "</p>";
echo "<p>Tanggal login: " . date('Y-m-d', strtotime($login_time)) . "</p>";
echo "<p>Jam sekarang: $current_time</p>";
echo "<p>IP Address: $ip_address</p>";

// Tombol logout
echo '<a href="logout.php">Logout</a>';
?>

