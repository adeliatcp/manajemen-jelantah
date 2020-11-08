<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Minyak Jelantah</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="<?= base_url() ?>template/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="template/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="<?= base_url() ?>template/index.html"><span>SMPJ</span></a></h1>
                <a href="index.html"><img src="<?= base_url() ?>template/assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Beranda</a></li>
                    <li><a href="#about">Tentang SPMJ</a></li>
                    <li><a href="#faq">Tanya Jawab</a></li>

                    <li class="get-started"><a href="<?= base_url('Auth/login'); ?>">Masuk</a></li>
                    <li class="get-started"><a href="<?= base_url('Auth/register'); ?>">Daftar</a></li>
                </ul>
            </nav> <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1> Minyak Jelantah Jangan Buru-buru Dibuang!</h1>
                    <h2> SPMJ selalu siap membantu Anda.</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 cooking">
                    <img src="<?= base_url() ?>template/assets/img/cooking.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <main id="main">
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="<?= base_url() ?>template/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3 data-aos="fade-up">Tentang SPMJ</h3>
                        <p></p>
                        <p data-aos="fade-up" data-aos-delay="100">
                            SPMJ adalah singkatan dari Sistem Pengumpulan Minyak Jelantah yang berada di Kota Malang. SPMJ menghubungkan pengepul minyak jelantah dengan pengguna yang ingin mencari pengepul minyak jelantah dengan cara yang lebih praktis. SPMJ juga membantu pengguna untuk menerima pemberitahuan terkait ambang batas minyak jelantah yang telah terkumpul dengan sensor yang telah dipasang pada tempat terkumpulnya minyak jelantah lalu dari pemberitahuan tersebut pengguna dapat melanjutkan ke proses pemesanan jasa penjemputan minyak jelantah.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End About Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tanya Jawab</h2>
                    <p>Pertanyaan yang sering diajukan.</p>
                </div>

                <ul class="faq-list">

                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-toggle="collapse" class="" href="#faq1">Bagaimana cara menggunakan layanan ini? <i class="icofont-simple-up"></i></a>
                        <div id="faq1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Jika anda belum mempunyai akun maka anda dapat melakukan DAFTAR, jika anda sudah mempunyai akun anda harus MASUK untuk menggunakan layanan ini.</p>

                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->
    </main><!-- End #main -->



    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Adelia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>template/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>template/assets/js/main.js"></script>

</body>

</html>