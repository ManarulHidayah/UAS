<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    header('Location: form_tampil.php');
}

$ID = $_GET['id'];
$perintah = mysqli_query($db, "SELECT * FROM pasien WHERE Nomor ='$ID'");
$row = mysqli_fetch_assoc($perintah);

if (mysqli_num_rows($perintah) < 1) {
    die("data tidak ditemukan...");
}
?>
<html>

<head>
    <title>Admin - Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
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
            <form method=post action=proses_edit.php>
                <h4>Edit Data Penerima</h4>
                <input type="hidden" name="id" value="<?php echo "$row[Nomor]" ?>">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                        <td>Propinsi</td>
                        <td>:</td>
                        <td>
                            <?php $alok = $row['Propinsi']; ?>
                            <select name="propinsi">
                                <option <?php echo ($alok == "dki") ? " selected" : "" ?>>DKI Jakarta</option>
                                <option <?php echo ($alok == "banten") ? " selected" : "" ?>>Banten</option>
                                <option <?php echo ($alok == "jabar") ? " selected" : "" ?>>Jabar</option>
                                <option <?php echo ($alok == "jateng") ? " selected" : "" ?>>Jateng</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Positif</td>
                        <td>:</td>
                        <td><input type="text" name="positif" size="30" class="masukan" value=" <?php echo "$row[Positif]" ?>"></td>
                    </tr>
                    <tr>
                        <td>DiRawat</td>
                        <td>:</td>
                        <td><input type="text" name="rawat" size="30" class="masukan" value=" <?php echo "$row[DiRawat]" ?>"></td>
                    </tr>
                    <tr>
                        <td>Sembuh</td>
                        <td>:</td>
                        <td><input type="text" name="sembuh" size="30" class="masukan" value=" <?php echo "$row[Sembuh]" ?>"></td>
                    </tr>
                    <tr>
                        <td>Meninggal</td>
                        <td>:</td>
                        <td><input type="text" name="mati" size="30" class="masukan" value=" <?php echo "$row[Meninggal]" ?>"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="update" value="Update" class="tombol">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
    </div>

</body>

</html>