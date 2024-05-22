<?php
include "koneksi.inc.php";

$sql = "SELECT * FROM kontak ORDER BY nama";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Proses cetak gagal: " . mysqli_error($conn));
}

echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Nama</th>
<th>jkel</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>
";

$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>$no</td>
    <td>{$row['Nama']}</td>
    <td>{$row['jkel']}</td>
    <td>{$row['Email']}</td>
    <td>{$row['Alamat']}</td>
    <td>{$row['Kota']}</td>
    <td>{$row['Pesan']}</td>
    </tr>";
    $no++;
}

echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<a href="index.html">Kembali</a>
