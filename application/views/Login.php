<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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


    <!-- ======= Login Section ======= -->
    <section id="login" class="login">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between">
                <div class="col-lg-4 d-flex align-items-center justify-content-center login-img">
                    <img src="<?= base_url() ?>template/assets/img/login-img.png" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0">
                    <h4 style="color:#863702;">Login</h4>
                    <div class="row">
                        <div class="col-md-10" data-aos="fade-up" data-aos-delay="100">
                            <form class="px-4 py-3" method="POST" action="<?= base_url('auth/login_user'); ?>">
                                <div class="input-group mb-3">
                                    <input type="ID" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" required oninvalid="this.setCustomValidity('')" oninput="setCustomValidity('Cek kembali Username / Password anda!')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.social-auth-links -->
                                <p class="mb-1">
                                    <a href="<?= base_url('auth/forgotpass'); ?>" class="text" style="color:#2B2B2B;">Lupa Password?</a></p>
                                <p></p>
                                <button type="submit" class="btn" style="background-color:#C45C00; color:white;">Masuk</button>
                                <p></p>

                                <p class="mb-0">
                                    <a href="<?= base_url('auth/register'); ?>" class="text" style="color:#2B2B2B;">Belum punya akun? <b>Daftar akun.</b></a>
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