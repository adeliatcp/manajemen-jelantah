<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
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

<body class="hold-transition register-page">


    <!-- =======  Section ======= -->
    <section id="register" class="register">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-between">
                <div class="col-lg-4 d-flex align-items-center justify-content-center login-img">
                    <img src="<?= base_url() ?>template/assets/img/register-img.png" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0">
                    <h4 style="color:#863702 ;" data-aos="fade-up">Belum punya akun? Silahkan daftar dulu!</h4>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <form class="px-4 py-3" method="post" action="<?= base_url('auth/register'); ?>">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="username" name="id" placeholder="Username" value="<?= set_value('username'); ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-address-card"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>">
                                    <div class=" input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" oninvalid="this.setCustomValidity('Please Enter valid email')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="input-group mb-3">
                                    <input type="Email" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" value="<?= set_value('telp'); ?>">
                                    <div class=" input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Alamat Lengkap" value="<?= set_value('address'); ?>">
                                    <div class=" input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marked-alt"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pilihsebagai" style="color:#863702 ;"> Daftar sebagai : </label>
                                    <select class="form-control" name="pilihsebagai">">
                                        <option value="1">Pelanggan</option>
                                        <option value="2">Pengepul</option>
                                        <option value="3">Admin</option>
                                    </select>
                                </div>
                                <!-- /.social-auth-links -->
                                <button type="submit" class="btn" style="background-color:#C45C00; color:white;">Daftar</button>
                                <p></p>
                                <p class="mb-0">
                                    <a href="<?= base_url('auth/login'); ?>" class="text" style="color:#2B2B2B;">Sudah punya akun? <b>Login Akun</b></a>
                                </p>
                            </form>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
    </section><!-- End About Section -->
</body>

</html>