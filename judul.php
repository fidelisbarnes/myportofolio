<?php
$judulQuery = mysqli_query($conn, "SELECT judul FROM judul_section WHERE nama_section='sosmed' LIMIT 1");

if (!$judulQuery) {
    die("❌ Query error: " . mysqli_error($conn));
}

$judul = mysqli_fetch_assoc($judulQuery);

if (!$judul) {
    die("❌ Data tidak ditemukan di tabel judul_section");
}
?>
<h2 class="fw-bold display-5 mb-5">
    <?php echo $judul['judul']; ?>
</h2>
