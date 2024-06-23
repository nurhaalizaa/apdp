<?php
session_start();
require '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPegawai = $_POST['namaPegawai'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jabatan = $_POST['jabatan'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Proses upload foto
    $foto = $_FILES['foto'];
    $fotoName = $foto['name'];
    $fotoTmpName = $foto['tmp_name'];
    $fotoSize = $foto['size'];
    $fotoError = $foto['error'];

    // lokasi penyimpanan foto
    $uploadDir = '../assets/images/';

    // nama untuk foto
    $fotoPath = $uploadDir . $fotoName;

    // Pindah file foto dari temporary location ke lokasi tujuan
    move_uploaded_file($fotoTmpName, $fotoPath);

    // Prepare statement untuk memasukkan data pegawai
    $stmt = $pdo->prepare("INSERT INTO pegawai (nama, jenis_kelamin, tanggal_lahir, jabatan, no_hp, email, alamat, foto) 
                           VALUES (:nama, :jenisKelamin, :tanggalLahir, :jabatan, :phoneNumber, :email, :alamat, :fotoPath)");

    // Bind parameter
    $stmt->bindParam(':nama', $namaPegawai);
    $stmt->bindParam(':jenisKelamin', $jenisKelamin);
    $stmt->bindParam(':tanggalLahir', $tanggalLahir);
    $stmt->bindParam(':jabatan', $jabatan);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':fotoPath', $fotoPath);

    // Execute query
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil ditambah'); window.location.href = 'pegawai.php';</script>";
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
