<?php
require '../koneksi.php'; 
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php'); 
    exit();
}

    // Query untuk mendapatkan total pegawai
    $query_total = "SELECT COUNT(*) as total FROM pegawai";
    $statement_total = $pdo->prepare($query_total);
    $statement_total->execute();
    $total_pegawai = $statement_total->fetch(PDO::FETCH_ASSOC)['total'];

    // Query untuk mendapatkan total pegawai perempuan
    $query_female = "SELECT COUNT(*) as total FROM pegawai WHERE jenis_kelamin = 'perempuan'";
    $statement_female = $pdo->prepare($query_female);
    $statement_female->execute();
    $total_perempuan = $statement_female->fetch(PDO::FETCH_ASSOC)['total'];

    // Query untuk mendapatkan total pegawai laki-laki
    $query_male = "SELECT COUNT(*) as total FROM pegawai WHERE jenis_kelamin = 'laki-laki'";
    $statement_male = $pdo->prepare($query_male);
    $statement_male->execute();
    $total_laki_laki = $statement_male->fetch(PDO::FETCH_ASSOC)['total'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APDP</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <?php include 'layouts/sidebar.php'; ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
    <?php include 'layouts/header.php'; ?>      
      <div class="container-fluid">
        <!--  Row 1 -->
          <div class="card">
            <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Dashboard</h5>

            <div class="row">
          <!-- Total Pegawai -->
          <div class="col-md-4">
          <div class="card bg-primary rounded-0">
            <div class="card-body text-center p-3">
              <div class="row">
                <div class="col-6">
                  <h5 class="card-title text-white"></h5>                                
                  <img src="../assets/images/logos/pegawai.png" class="img-fluid" alt="pegawai" style='width:80%;'>
                </div>
                <div class="col-6">
                  <h1 class="card-title text-white">TOTAL</h1>
                  <h1 class="mb-0 text-white fw-bolder fs-11"><?php echo $total_pegawai; ?></h1>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- Total Pegawai Perempuan -->
          <div class="col-md-4">
          <div class="card bg-primary rounded-0">
            <div class="card-body text-center p-3">
              <div class="row">
                <div class="col-6">
                  <h5 class="card-title text-white"></h5>                                
                  <img src="../assets/images/logos/wanita.png" class="img-fluid" alt="pegawai" style='width:55%;'>
                </div>
                <div class="col-6">
                  <h1 class="card-title text-white">TOTAL</h1>
                  <h1 class="mb-0 text-white fw-bolder fs-11"><?php echo $total_perempuan; ?></h1>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- Total Pegawai Laki-Laki -->
          <div class="col-md-4">
          <div class="card bg-primary rounded-0">
            <div class="card-body text-center p-3">
              <div class="row">
                <div class="col-6">
                  <h5 class="card-title text-white"></h5>                                
                  <img src="../assets/images/logos/pria.png" class="img-fluid" alt="pegawai" style='width:55%;'>
                </div>
                <div class="col-6">
                  <h1 class="card-title text-white">TOTAL</h1>
                  <h1 class="mb-0 text-white fw-bolder fs-11"><?php echo $total_laki_laki; ?></h1>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- <canvas id="pegawaiChart"></canvas> -->

        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      // Ketika halaman dimuat, panggil fungsi untuk mengambil data dan membangun chart
      fetchDataAndBuildChart();
    });

    function fetchDataAndBuildChart() {
      $.ajax({
        url: 'chart.php', // URL ke file PHP yang menyediakan data jumlah pegawai tiap jabatan
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          // Panggil fungsi untuk membangun chart dengan data yang diterima
          buildChart(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Tangani kesalahan jika permintaan gagal
          console.error('Error fetching data:', textStatus, errorThrown);
        }
      });
    }

    function buildChart(data) {
      // Ambil konteks dari elemen canvas
      var ctx = document.getElementById('myChart').getContext('2d');

      // Buat chart baru dengan tipe grafik garis
      var myChart = new Chart(ctx, {
        type: 'line', // Tipe chart
        data: {
          labels: data.labels, // Label sumbu X (jabatan)
          datasets: [{
            label: 'Jumlah Pegawai',
            data: data.values, // Data nilai untuk setiap label (jumlah pegawai)
            borderColor: 'rgba(54, 162, 235, 1)', // Warna garis grafik
            borderWidth: 1,
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true, // Mulai sumbu Y dari 0
                stepSize: 1 // Langkah setiap 1
              }
            }]
          }
        }
      });
    }
  </script>
    
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>