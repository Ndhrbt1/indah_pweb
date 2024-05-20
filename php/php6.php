<?php
// Mendapatkan tanggal dan waktu saat ini
$now = time();

// Format tanggal dan waktu
echo "Tanggal dan Waktu Sekarang:<br>";
echo date("Y-m-d H:i:s", $now) . "<br>"; // Format default
echo date("d/m/Y h:i:s A", $now) . "<br>"; // Format alternatif
echo date("l", $now) . "<br>"; // Hari
echo date("F", $now) . "<br>"; // Bulan
echo date("Y", $now) . "<br>"; // Tahun
?>
