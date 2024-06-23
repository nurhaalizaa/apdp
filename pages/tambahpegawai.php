<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APDP</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
    .error-message {
      color: red;
      font-size: 0.875em;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php include 'layouts/sidebar.php'; ?>
    <!-- Main wrapper -->
    <div class="body-wrapper">
      <?php include 'layouts/header.php'; ?>
      <div class="container-fluid">
        <!-- Row 1 -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Pegawai</h5>
            <!-- form tambah -->
            <form id="registrationForm" action="prosestambah.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
              <div class="mb-3">
                <label for="namaPegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="namaPegawai" name="namaPegawai" placeholder="Full Name" >
                <div id="namaPegawaiError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
                  <option value="" disabled selected>Pilih jenis kelamin</option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
                <div id="jenis_kelaminError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" >
                <div id="tanggalLahirError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Kepala Divisi" >
                <div id="jabatanError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">No Hp</label>
                <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="081918209189" >
                <div id="phoneNumberError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="contoh@gmail.com" >
                <div id="emailError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" ></textarea>
                <div id="alamatError" class="error-message"></div>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto </label>
                <input type="file" class="form-control" id="foto" name="foto" >
                <div id="fotoError" class="error-message"></div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- end form -->
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
  <script src="../assets/js/validate.js"></script>
  


</body>
</html>
