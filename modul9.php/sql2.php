<HTML> <HEAD>
<title>Koneksi Database MySQL</title>
</HEAD>
<BODY>
<h1>Koneksi database dengan mysql_fetch_array</h1> 
<?php 
$conn = mysqli_connect("localhost", "root", "", "liga") or die("Koneksi gagal: " . mysqli_connect_error());

$hasil = mysqli_query($conn, "SELECT * FROM liga");

if ($hasil) {
    while ($row = mysqli_fetch_array($hasil)) {
        echo "liga " . $row["negara"];
    }
} else {
    echo "Query error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
</BODY>
</HTML>