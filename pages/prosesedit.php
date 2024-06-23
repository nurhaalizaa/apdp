<?php
require '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['namaPegawai'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Prepare statement untuk mengambil data pegawai saat ini (termasuk foto)
    $stmt = $pdo->prepare("SELECT foto FROM pegawai WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $pegawai = $stmt->fetch(PDO::FETCH_ASSOC);

    // Proses upload file foto baru jika ada
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];

        // Direktori upload
        $upload_dir = "../assets/images/";
        $fotoPath = $upload_dir . $foto;

        // Pindahkan file foto yang baru diupload ke direktori upload
        move_uploaded_file($foto_tmp, $upload_dir . $foto);
    } else {
        // Jika tidak ada file baru yang diupload, gunakan file yang sudah ada
        $fotoPath = $pegawai['foto'];
    }

    // Prepare statement untuk update data pegawai
    $stmtUpdate = $pdo->prepare("UPDATE pegawai SET 
                                    nama = :nama,
                                    jabatan = :jabatan,
                                    email = :email,
                                    no_hp = :phoneNumber,
                                    jenis_kelamin = :jenis_kelamin,
                                    alamat = :alamat,
                                    foto = :fotoPath
                                WHERE id = :id");

    // Bind parameter ke prepared statement
    $stmtUpdate->bindParam(':nama', $nama);
    $stmtUpdate->bindParam(':jabatan', $jabatan);
    $stmtUpdate->bindParam(':email', $email);
    $stmtUpdate->bindParam(':phoneNumber', $phoneNumber);
    $stmtUpdate->bindParam(':jenis_kelamin', $jenis_kelamin);
    $stmtUpdate->bindParam(':alamat', $alamat);
    $stmtUpdate->bindParam(':fotoPath', $fotoPath);
    $stmtUpdate->bindParam(':id', $id);

    // Eksekusi statement
    if ($stmtUpdate->execute()) {
        echo "<script>alert('Data pegawai berhasil diperbarui'); window.location.href = 'pegawai.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
