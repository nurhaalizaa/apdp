<?php
require '../koneksi.php'; 

// Query untuk mengambil data jumlah pegawai tiap jabatan
$stmt = $pdo->query('SELECT jabatan, COUNT(*) AS jumlah_pegawai FROM pegawai GROUP BY jabatan');
$data = $stmt->fetchAll();

// Memproses data agar sesuai dengan format yang dibutuhkan untuk chart
$labels = [];
$values = [];

foreach ($data as $row) {
    $labels[] = $row['jabatan'];
    $values[] = $row['jumlah_pegawai'];
}

// Data yang akan dikirimkan sebagai JSON
$response = [
    'labels' => $labels,
    'values' => $values,
];

// Mengirimkan respons sebagai JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
