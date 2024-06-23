<?php
require '../koneksi.php'; 
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php'); 
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
            <h5 class="card-title fw-semibold mb-4">Daftar Pegawai</h5>
              <div class="d-flex justify-content-end mb-3">
                <a href="tambahpegawai.php" class="btn btn-primary">Tambah Pegawai</a>
              </div>
              <div class="card">
                  <div class="card-body p-4">
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No_hp</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $stmt = $pdo->query("SELECT * FROM pegawai");
                        $count = 1;
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          echo "<tr>";
                          echo "<td>{$count}</td>";
                          echo "<td>{$row['nama']}</td>";
                          echo "<td>{$row['no_hp']}</td>";
                          echo "<td>{$row['jabatan']}</td>";
                          echo "<td>
                                  <a href='editpegawai.php?id={$row['id']}' class='btn btn-secondary m-1'>Edit</a>
                                  <a href='hapuspegawai.php?id={$row['id']}' class='btn btn-danger m-1'  onclick=\"return confirm('Apakah Anda yakin akan menghapus pegawai ini?')\">Hapus</a>
                                  <a href='detailpegawai.php?id={$row['id']}' class='btn btn-warning m-1'>Detail</a>
                                </td>";
                          echo "</tr>";
                          $count++;
                        }
                      ?>
                    </tbody>
                  </table>
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