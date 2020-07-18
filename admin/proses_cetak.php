<html>

<head>
    <title>Print Data Penerima</title>
</head>

<body>
    <?php
    include "koneksi.php";
    include "cek_login.php";
    ?>
    <div id="isi">
        <h3 align="center">Data pemantauan covid19 wilayah DKI Jakarta per <br>
            <?php
            echo date('d M Y');
            date_default_timezone_set('Asia/jakarta');
            echo " , Pukul : ";
            echo date('H:i');
            echo " WIB";
            ?>
        </h3><br>
        <table border="1" cellspacing="0" align="center">
            <thead>
                <tr>
                    <th width="200px">Propinsi</th>
                    <th width="210px">Positif</th>
                    <th width="120px">Dirawat</th>
                    <th width="120px">Sembuh</th>
                    <th width="150px">Meninggal</th>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table> <br><br>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>