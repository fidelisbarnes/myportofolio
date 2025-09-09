<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $lingkungan = $_POST['lingkungan'];
    $umur = $_POST['umur'];
    $minat = $_POST['minat'];

    $sql = "INSERT INTO pendaftaran (nama, lingkungan, umur, minat) 
            VALUES ('$nama', '$lingkungan', '$umur', '$minat')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Pendaftaran berhasil!');
                window.location.href='index.php#form-daftar';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
