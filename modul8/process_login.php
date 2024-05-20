<?php
session_start();

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username, password, nama, dan email (disini kita contohkan tanpa validasi yang kompleks, hanya sebagai contoh)
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Cek apakah semua field terisi
    if (empty($username) || empty($password) || empty($name) || empty($email)) {
        // Redirect ke halaman error jika ada field yang kosong
        header("Location: error.php?message=Data tidak lengkap");
        exit();
    }
    
    // Contoh validasi sederhana
    if ($username === "indah" && $password === "password") {
        // Jika login berhasil, simpan informasi login ke dalam session
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");
        header("Location: welcome.php"); // Redirect ke halaman selamat datang
        exit();
    } else {
        // Redirect ke halaman error jika login gagal
        header("Location: error.php?message=Login gagal. Silakan coba lagi.");
        exit();
    }
} else {
    // Redirect jika user mencoba mengakses file ini secara langsung
    header("Location: login.php");
    exit();
}
?>
