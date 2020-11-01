<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lupa Password</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">


    <!-- ======= Forgot Password Section ======= -->
    <section id="forgotpass" class="forgotpass">
        <div class="row justify-content-between">
            <div class="col-lg-4 d-flex align-items-center justify-content-center login-img">
                <img src="<?= base_url() ?>template/assets/img/login-img.png" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="col-lg-7 pt-4 pt-lg-0">
                <h4 style="color:#863702;">Lupa password?</h4>
                <div class="row">
                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="100">
                        <form class="px-4 py-3">
                            <div class="input-group mb-3">
                                <input type="ID" class="form-control" id="id" name="id" placeholder="ID">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.social-auth-links -->
                            <button type="submit" class="btn" style="background-color:#C45C00; color:white; ">Ubah</button>
                            <p></p>
                            <p class="mb-1">
                                <a href="<?= base_url('Home'); ?>" class="text" style="color:#2B2B2B;">Kembali</a>
                            </p>
                        </form>
                        <div class=" dropdown-divider">
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End About Section -->
</body>

</html>