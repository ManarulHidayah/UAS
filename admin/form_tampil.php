<html>

<head>
    <title>Data Pasien Covid19</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include "koneksi.php"; ?>
    <div class="content">
        <header>
            <img src="logo.jpg" width="90px">
            <h1 class="judul">Data Pemantauan Covid19</h1>
            <h5 class="logout"><a href="logout.php">Logout</a></h5>
            
        </header>
        <div class="menu">
            <ul>
                <li>
                    <a href="aboutUs.php">Tentang Kami</a>
                </li>
                <li>
                    <a href="form_tampil.php">Daftar Pasien</a>
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
            <h3 align="center">Data PasienCovid19</h3>
            <br>
            <nav align="right">
                <a href="proses_cetak.php" target="_blank">Print</a>
            </nav>
            <br>
            <table border="1" cellspacing="0" align="center">
                <thead>
                    <tr align="center">
                        <th width="200px">Propinsi</th>
                        <th width="200px">Positif</th>
                        <th width="120px">Dirawat</th>
                        <th width="210px">Sembuh</th>
                        <th width="120px">Meninggal</th>
                        <th width="120px">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambildata = mysqli_query($db, "SELECT * FROM pasien");
                    while ($a = mysqli_fetch_array($ambildata)) { ?>
                        <tr align="center">
                            <td><?php echo $a['Propinsi']; ?></td>
                            <td><?php echo $a['Positif']; ?></td>
                            <td><?php echo $a['DiRawat']; ?></td>
                            <td><?php echo $a['Sembuh']; ?></td>
                            <td><?php echo $a['Meninggal']; ?></td>
                            <td>
                                <?php echo "<a href='form_edit.php?id=" . $a[0] . "'>Edit</a> | ";
                                echo "<a href='proses_hapus.php?id=" . $a[0] . "'>Hapus</a>"; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> <br><br><br>
        </div>
    </div>

</body>

</html>