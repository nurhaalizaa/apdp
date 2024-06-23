<?php
require '../koneksi.php'; 
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php'); 
    exit();
}

$id = $_GET['id'];

// $sql = "SELECT * FROM pegawai WHERE id = $id";
// $result = $conn->query($sql);
$stmt = $pdo->prepare("SELECT * FROM pegawai WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

// if ($result->num_rows > 0) {
//     $pegawai = $result->fetch_assoc();
// } else {
//     echo "Data pegawai tidak ditemukan.";
//     exit();
// }
if ($stmt->rowCount() > 0) {
  $pegawai = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
  echo "Data pegawai tidak ditemukan.";
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
            <h5 class="card-title fw-semibold mb-4">Edit Pegawai</h5>
            <form action="prosesedit.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $pegawai['id']; ?>">
              <div class="mb-3">
                <label for="namaPegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="namaPegawai" name="namaPegawai" value="<?php echo $pegawai['nama']; ?>">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $pegawai['jabatan']; ?>">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $pegawai['email']; ?>">
              </div>
              <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp" value="<?php echo $pegawai['no_hp']; ?>">
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="Laki-laki" <?php echo $pegawai['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                  <option value="Perempuan" <?php echo $pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $pegawai['alamat']; ?>
                </textarea>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                  <?php echo $pegawai['foto']; ?>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <a href="pegawai.php" class="btn btn-info">kembali</a>
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