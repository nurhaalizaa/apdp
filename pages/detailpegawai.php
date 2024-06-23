<?php
require '../koneksi.php'; 
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php'); 
    exit();
}

$id = $_GET['id'];

// Query untuk mengambil data pegawai berdasarkan id
$stmt = $pdo->prepare("SELECT * FROM pegawai WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

// Mengambil hasil query
if ($stmt->rowCount() > 0) {
    $pegawai = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    echo "Pegawai tidak ditemukan.";
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APDP</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php include 'layouts/sidebar.php'; ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
    <?php include 'layouts/header.php'; ?>      
      <div class="container-fluid">
        <!--  Row 1 -->
          <div class="card">
            <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Detail Pegawai</h5>
            <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $pegawai['foto']; ?>" class="img-fluid rounded-start" alt="Foto Pegawai">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $pegawai['nama']; ?></h5>
                <p class="card-text"><strong>Tanggal Lahir:</strong> <?php echo $pegawai['tanggal_lahir']; ?></p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> <?php echo $pegawai['jenis_kelamin']; ?></p>
                <p class="card-text"><strong>Jabatan:</strong> <?php echo $pegawai['jabatan']; ?></p>
                <p class="card-text"><strong>No Hp:</strong> <?php echo $pegawai['no_hp']; ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo $pegawai['email']; ?></p>
                <p class="card-text"><strong>Alamat:</strong> <?php echo $pegawai['alamat']; ?></p>
              </div>
            </div>
            <a href="pegawai.php" class="btn btn-info">kembali</a>
        </div>
    </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>