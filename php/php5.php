<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Persegi Panjang</title>
</head>
<body>

<h2>Hitung Luas Persegi Panjang</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Panjang: <input type="text" name="panjang">
  <br><br>
  Lebar: <input type="text" name="lebar">
  <br><br>
  <input type="submit" name="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil nilai panjang dan lebar dari form
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];

  // Menghitung luas persegi panjang
  $luas = $panjang * $lebar;

  // Menampilkan hasil
  echo "Luas Persegi Panjang dengan panjang $panjang dan lebar $lebar adalah: " . $luas;
}
?>

</body>
</html>
