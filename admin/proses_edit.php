<?php
include "koneksi.php";
include "cek_login.php";
if (isset($_POST['update'])) {
$Nmr = $_POST['id'];
$prop = $_POST['propinsi'];
$pos = $_POST['positif'];
$raw = $_POST['rawat'];
$sembuh = $_POST['sembuh'];
$mati = $_POST['mati'];

$sql = "UPDATE pasien SET Propinsi='$prop', Positif='$pos', DiRawat='$raw', Sembuh='$sembuh', Meninggal='$mati' WHERE Nomor='$Nmr'";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: form_tampil.php');
    } else {
        die("Gagal Mengupdate");
    }
} else {
    die("Akses dilarang...");
}
