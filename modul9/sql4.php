<?php
// File: index.php

// Include the database connection file
include 'connect.php';

// Memeriksa apakah metode HTTP adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
    
    // Menyiapkan pernyataan SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES (?, ?, ?)";
    
    // Menyiapkan pernyataan yang aman
    $stmt = $conn->prepare($sql);
    
    // Check if prepare() succeeded
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    
    // Bind parameters
    $result = $stmt->bind_param("sss", $nama, $email, $pesan);
    
    // Check if bind_param() succeeded
    if ($result === false) {
        die("Binding parameters failed: " . $stmt->error);
    }
    
    // Mengeksekusi pernyataan
    $executeResult = $stmt->execute();
    
    // Check if execute() succeeded
    if ($executeResult === false) {
        die("Execute failed: " . $stmt->error);
    }
    
    // If execution successful
    echo "Data berhasil dimasukkan ke dalam buku tamu.";
    
    // Menutup pernyataan
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Formulir Buku Tamu</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama"><br><br>
        Email: <input type="text" name="email"><br><br>
        Pesan: <textarea name="pesan" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
