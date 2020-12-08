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
                    </div>
                    <div class="info">
                        <?php
                        foreach ($getdatabyId->result() as $row) {
                        ?>
                            <a class="d-block" style=" font-family:Segoe UI; color: white;"><b><?php echo $row->name ?></b></a>
                        <?php
                        } ?>
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
                            <a href="<?= base_url('user/order/history'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon 
                                fas fa-hourglass-half"></i>
                                <p> Riwayat Transaksi </p>
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
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <p></p>
                            <h1 style=" font-size: 27px; font-family:Segoe UI; color: #673E27;">Pengaturan Akun</h1>
                            <p></p>
                        </div>
                        <div class="col-sm-7">

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
                                <form role="form" action="settings/update_validation" method="post">
                                    <div class="card-body">
                                        <?php
                                        if ($getdatabyId->num_rows() > 0) {
                                            foreach ($getdatabyId->result() as $row) {
                                        ?>
                                                <div class="form-group">
                                                    <label for="InputID">ID</label>
                                                    <input type="text" class="form-control" id="ID" name="id" value="<?php echo $row->id ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputID">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row->username ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputNama">Nama</label>
                                                    <input type="text" class="form-control" id="Name" name="name" value="<?php echo $row->name ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputEmail">Email</label>
                                                    <input type="text" class="form-control" id="Email" name="email" value="<?php echo $row->email ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputTelp">Telepon</label>
                                                    <input type="text" class="form-control" id="Telp" name="telp" value="<?php echo $row->telp ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputAlamat">Alamat</label>
                                                    <input type="text" class="form-control" id="Address" name="address" value="<?php echo $row->address ?>">
                                                </div>

                                                <!--  <div class="form-group">
                                            <label for="InputFoto">Foto Profil</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="InputFoto" />
                                                    <label class="custom-file-label" for="InputFile">Pilih Foto</label>
                                                </div>
                                            </div>-->
                                                <button type="submit" class="btn" style="background-color: #FF951B; color: white; float:right; ">
                                                    Ubah Data
                                                </button>
                                    </div>
                            </div> <br><br></br></br>
                            <!-- /.card-body -->
                    <?php
                                            }
                                        }
                    ?>
                    </form>
                        </div>
                        <br></br>

                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"></div>
            <strong>Copyright &copy; 2020
                <a>Adelia</a>.</strong>
            All rights reserved.
        </footer>

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