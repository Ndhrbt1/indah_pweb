<HTML> <HEAD>
<title>Koneksi Database MySQL</title>
</HEAD>
<BODY>
<h1>Koneksi database dengan mysql_fetch_assoc</h1> 
<?php
$conn = mysqli_connect("localhost", "root", "", "liga") or die("Koneksi gagal: " . mysqli_connect_error());

$hasil = mysqli_query($conn, "SELECT * FROM liga");

if ($hasil) {
    while ($row = mysqli_fetch_row($hasil)) {
        echo "Liga " . $row[0] . " mempunyai " . $row[1] . " wakil di liga champion <br>";
    }
} else {
    echo "Query error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
</BODY> </HTML>