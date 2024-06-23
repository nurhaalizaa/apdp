<?php
require '../koneksi.php'; 

// Ambil id pegawai dari parameter URL
$id = $_GET['id'];

// Prepare statement untuk menghapus data pegawai berdasarkan id
$stmt = $pdo->prepare("DELETE FROM pegawai WHERE id = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "<script>alert('Data pegawai berhasil dihapus'); window.location.href = 'pegawai.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
