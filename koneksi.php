<?php
$host = "localhost"; // sesuaikan
$user = "user20232019";      // sesuaikan
$pass = "Pd4VjG";          // sesuaikan
$db   = "user20232019";    // sesuaikan

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
