<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SMPJ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background-color:#F8F2EE;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: #C05419;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" style="color: #C05419;" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">Pemberitahuan</span>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('user/verifpickup'); ?>" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 1 pesan baru
                            <span class="float-right text-muted text-sm">1 minute ago</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('user/verifpickup'); ?>" class="dropdown-item dropdown-footer">Lihat Semua Pemberitahuan</a>
                    </div>
                </li>
                <li class="nav-item"></li>
                <!-- Messages Dropdown Menu -->
                <li class="active-nav-item dropdown">
                    <a class="nav-link" style="color: #C05419;" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('user/settings'); ?>" class=" dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <i class="fa fa-cog" style="color: #C05419;"></i>
                                        Pengaturan
                                        <span class="text-sm text-warning"></span>
                                    </h3>

                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout'); ?>" class=" dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <i class="fas fa-sign-out-alt" style="color: #C05419;"></i>
                                        Keluar
                                        <span class="text-sm text-warning"></span>
                                    </h3>

                                </div>
                            </div>
                        </a>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light  elevation-4 " style="background-color: #C05419; ">
            <!-- Brand Logo -->
            <a class="brand-link" style="color: #F8F2EE; font-size: 24px;">
                <img src="<?= base_url() ?>template/dist/img/oil2.png" class="brand-image elevation-3" style="opacity: 0.9;" />
                <span class="brand-text font-light">SPMJ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>template/dist/img/lumpia.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style=" font-family:Segoe UI; color: white;"><b>Lumpia Nur</b></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?= base_url('user/dashboard'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/order'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fa fa-truck"></i>
                                <p> Pesan Jasa Pengepul </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/history'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon 
                                fas fa-hourglass-half"></i>
                                <p> Transaksi </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <h1 style=" font-size: 26px; font-family:Segoe UI; color: #673E27;">Pesan Jasa Penjemputan</h1>
                        </div>
                        <div class="col-sm-10">

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-lg-10" style="float:none;margin:auto;">
                            <!-- general form elements -->
                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="ID" style="color: #474747;">ID Pelanggan</label>
                                            <p class="form-control">lumpianur</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat" style="color: #474747;">Alamat</label>
                                            <p class="form-control">Jl. Sumbersari No. 20</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Telepon" style="color: #474747;">Telepon</label>
                                            <p class="form-control">081234567890</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="PilihPengepul" style="color: #474747;">Pilih Pengepul</label>
                                            <select class="form-control" id="jurusan">
                                                <option>Supriadi</option>
                                                <option>Bambang</option>
                                                <option>Udin</option>
                                                <option>Herman</option>
                                                <option>Budi</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Harga" style="color: #474747;">Harga</label>
                                            <p class="form-control">Rp 56.000,-</p>
                                        </div>
                                        <h1 style=" font-size: 10px; font-family:Segoe UI; color: #673E27;"><i>*apabila penjemputan telah selesai jangan lupa untuk menekan tombol "Sudah Dijemput" pada pemberitahuan</i></h1>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" formmethod="POST" class="btn" style="background-color: #FF951B; color: white;">Pesan</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <br></br>
                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.0.5</div>
            <strong>Copyright &copy; 2020
                <a>Adelia</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="<?= base_url() ?>template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>template/dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>