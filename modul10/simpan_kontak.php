<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "indah_059";

// Establishing connection
$conn = mysqli_connect($host, $username, $password, $database) or die("Koneksi gagal dibangun");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama = $_POST['nama'];
$vjkel = $_POST['jkel'];
$vemail = $_POST['email'];
$valamat = $_POST['alamat'];
$vkota = $_POST['kota'];
$vpesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) VALUES ('$vnama', '$vjkel', '$vemail', '$valamat', '$vkota', '$vpesan')";

if(mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:kontak.html");
?>
