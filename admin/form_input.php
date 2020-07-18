<!DOCTYPE html>
<html>

<head>
    <title>Input Data Pasien</title>
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
            <form method=post action=proses_input.php>
                <h4>Input Data Pasien</h4>
                <table width="100%" border="0" cellspacing="10" cellpadding="0">
                        <td>Propinsi</td>
                        <td>:</td>
                        <td>
                            <select name="propinsi">
                                <option value="pilih">Propinsi</option>
                                <option value="dki">DKI Jakarta</option>
                                <option value="banten">Banten</option>
                                <option value="jabar">jabar</option>
                                <option value="jateng">jateng</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Positif</td>
                        <td>:</td>
                        <td><input type="text" name="positif" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Dirawat</td>
                        <td>:</td>
                        <td><input type="text" name="rawat" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Sembuh</td>
                        <td>:</td>
                        <td><input type="text" name="sembuh" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Meninggal</td>
                        <td>:</td>
                        <td><input type="text" name="mati" size="30" class="masukan"></td>
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
                            <input type="submit" name="Submit" value="Simpan" class="tombol">
                            <input type="reset" name="batal" value="Reset" class="tombol">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>