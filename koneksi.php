<?php
$host = "localhost"; // sesuaikan
$user = "root";      // sesuaikan
$pass = "";          // sesuaikan
$db   = "komsos_db";    // sesuaikan

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
