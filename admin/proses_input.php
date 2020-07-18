<?php
include "koneksi.php";
$query_id = mysqli_query($db, "SELECT max(Nomor) as idTerbesar FROM pasien");
$dt = mysqli_fetch_array($query_id);
$Id = $dt['idTerbesar'];
$urutan = (int) substr($Id, 0);
$urutan++;
$hasil_id = sprintf($urutan);

$prop = $_POST['propinsi'];
$pos = $_POST['positif'];
$raw = $_POST['rawat'];
$sembuh = $_POST['sembuh'];
$mati = $_POST['mati'];

$query = "INSERT INTO pasien(Nomor, Propinsi, Positif, DiRawat, Sembuh, Meninggal)VALUES('$hasil_id','$prop','$pos','$raw','$sembuh','$mati')";
$result = mysqli_query($db, $query);
if ($result) {
    echo "<h3 align=center>Berhasil Menyimpan Data</h3>";
    include "form_tampil.php";
} else {
    echo "<h2 align=center>Proses penambahan data tidak berhasil</h2>";
    include "index.php";
}
?>
