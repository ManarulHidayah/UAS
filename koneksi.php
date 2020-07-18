<?php
$server ="localhost";
$user = "id14370728_root";
$password ="GJUkrg3&E+zNeC0~";
$dbname ="id14370728_data_pasien";
$db = mysqli_connect($server, $user, $password, $dbname);
if (!$db) {
	die("Gagal Terhubung ke database:" . mysqli_connect_error());
}
