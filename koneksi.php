<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bnsp";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi berhasil.";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
