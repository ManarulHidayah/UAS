<!DOCTYPE html>
<html>

<head>
    <title>Admin - Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include "koneksi.php"; ?>
    <div class="content">
        <header>
            <img src="logo.jpg" width="70px">
            <h1 class="judul">Data Pemantauan Covid19</h1>
            <h5 class="logout"><a href="logout.php">Logout</a></h5>
            
        </header>
        <div class="menu">
            <ul>
                <li>
                    <a href="aboutUs.php">Tentang Kami</a>
                </li>
                <li>
                    <a href="form_tampil.php">Data Pasien</a>
                </li>
                <li>
                    <a href="form_input.php">Input Data Pasien</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
        </div>
        <div id="isi">
            <p align="center">
                Website ini Dibuat oleh kelompok 6 Kelas 06TPLM006
            </p>
        </div>
    </div>

</body>

</html>