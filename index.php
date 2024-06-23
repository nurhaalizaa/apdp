<?php
require 'koneksi.php';
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: pages/dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>APDP</title>
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/png" href="assets/images/logos/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/animasi.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">APDP</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Pekerjaan</a></li>
                        <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li> -->
                        <form action="login.php" method="post">
                            <button class="nav-link py-3 px-0 px-lg-3 rounded">
                                LOGIN
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/profile/karyawan.png" class="img-fluid" alt="Gambar">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="text-center">
                            <h1 class="masthead-heading text-uppercase mb-0">Aplikasi Pencatatan Data Pegawai</h1>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">APDP</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">
                    APDP (Aplikasi Pencatatan Data Pegawai) adalah aplikasi manajemen data pegawai yang dirancang untuk memperlancar dan mengoptimalkan proses pencatatan, pelacakan, dan pengelolaan informasi karyawan dalam organisasi Anda. 
                    </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">
                    Siap untuk mengubah manajemen data karyawan Anda? Daftar untuk APDP hari ini dan rasakan manfaat dari solusi yang sederhana, efisien, dan aman. Untuk informasi lebih lanjut atau untuk meminta demo, hubungi kami.
                    </p></div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="carousel">
            <div class="carousel-track">
                <div class="carousel-part">
                <div class="card-container">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/ceo.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">CEO</h5>
                            <p class="card-text">Pemimpin tertinggi dalam sebuah perusahaan, bertanggung jawab atas keseluruhan operasi dan strategi perusahaan.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/direktur.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Director</h5>
                            <p class="card-text">Memimpin bagian atau departemen dalam divisi, bertanggung jawab atas kebijakan dan strategi di bidangnya.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/manager.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Manager</h5>
                            <p class="card-text">Bertanggung jawab atas tim atau departemen tertentu, mengelola operasi harian dan memastikan target tercapai.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>          
                </div>
                </div>
                <div class="carousel-part">
                <div class="card-container">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/super.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Supervisor</h5>
                            <p class="card-text">Mengawasi tim kecil atau shift tertentu, memastikan bahwa pekerjaan dilakukan sesuai standar dan menyelesaikan masalah yang muncul.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/staff.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Staff</h5>
                            <p class="card-text">Pegawai yang melakukan tugas-tugas harian sesuai dengan job description mereka.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/traine.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Trainee</h5>
                            <p class="card-text">Individu yang baru memulai karir mereka, sering kali masih dalam tahap pelatihan atau magang.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>          
                </div>
                </div>
                <div class="carousel-part">
                <div class="card-container">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/teknisi.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Technician</h5>
                            <p class="card-text">Melakukan pekerjaan teknis atau pemeliharaan.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/sekretaris.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Secretary</h5>
                            <p class="card-text">Membantu manajer atau eksekutif dalam tugas-tugas administratif.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/profile/operator.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Operator</h5>
                            <p class="card-text">Mengoperasikan mesin atau peralatan tertentu.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>          
                </div>
                </div>
            </div>
            <div class="carousel-nav">
                <button id="prevBtn">&lt;</button>
                <button id="nextBtn">&gt;</button>
            </div>
            </div>      
        </section>
        
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Darmo Wonokromo
                            <br />
                            Surabaya, 60241
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">More Info</h4>
                        <p class="lead mb-0">
                            Untuk bergabung dengan kami hubungi
                            <a href="#">089187146144</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/carousel.js"></script>

        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
