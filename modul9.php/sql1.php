<html> <head>
<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?php
// Establishing connection using MySQLi
$conn = mysqli_connect("localhost", "root", "", "liga");

// Check if the connection is successful
if ($conn) {
    echo "OK";
} else {
    echo "Server not connected";
}
?>
</body> </html>