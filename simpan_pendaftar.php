<?php
include "koneksi.php";

// Ambil jumlah pendaftar berdasarkan minat
$sql = "SELECT minat, COUNT(*) as jumlah FROM pendaftaran GROUP BY minat";
$result = $conn->query($sql);

$labels = [];
$values = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['minat'];
        $values[] = $row['jumlah'];
    }
}

// Buat JSON untuk Chart.js
echo json_encode([
    "labels" => $labels,
    "values" => $values
]);

$conn->close();
?>
