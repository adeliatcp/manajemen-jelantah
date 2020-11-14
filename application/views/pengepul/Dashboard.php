<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPMJ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
                <li class="nav-item"></li>
                <!-- Messages Dropdown Menu -->
                <li class="active-nav-item dropdown">
                    <a class="nav-link" style="color: #C05419;" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('pengepul/settings'); ?>" class=" dropdown-item">
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
                        <img src="<?= base_url() ?>template/dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style=" font-family:Segoe UI; color: white;"><b>Budi</b></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('pengepul/dashboard'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengepul/pickup'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fa fa-truck"></i>
                                <p>
                                    Proses Penjemputan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengepul/pickuphistory'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengepul/history'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Riwayat Transaksi
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <h1 style=" font-size: 30px; font-family:Segoe UI; color: #673E27;">Selamat Datang!</h1>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-3 col-sm-6 col-10" style="float:right;">
                        <div class="info-box">
                            <span class=" info-box-icon bg-warning"><i class="fas fa-money-bill-wave" style="background-size: 10px;"></i></span>

                            <div class="info-box-content" style="font-size: 14px;">
                                <span class="info-box-text">Saldo Anda</span>
                                <span class="info-box-number">Rp 56.000,-</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <br><br><br></br>
                    <p></p>
                    <!-- Default box -->
                    <div class="col-md-11" style="margin:auto;">
                        <div class="card">
                            <div class="card-header" style="background-color:#D57E1B ;">
                                <h2 class="card-title" style="font-size: 16px; font-family:Trebuchet MS; color: #F8F2EE;"><b>Daftar Pemesan Penjemputan</b></h2>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table projects">
                                    <thead>
                                        <tr>
                                            <th style="width: 18%">
                                                Nama Pemesan
                                            </th>
                                            <th style="width: 18%">
                                                ID Perangkat
                                            </th>
                                            <th style="width: 20%">
                                                Alamat
                                            </th>

                                            <th style="width: 18%">
                                                Telepon
                                            </th>
                                            <th style="width: 15%">
                                                Harga
                                            </th>
                                            <th style="width: 10%" class="text-center">
                                                Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if ($getnamebyId->num_rows() > 0) {
                                            foreach ($getnamebyId->result() as $row) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row->name; ?>
                                                    </td>
                                            <?php }
                                        } else {
                                        }
                                            ?>
                                            <?php
                                            if ($getbyIduser->num_rows() > 0) {
                                                foreach ($getbyIduser->result() as $row) {
                                            ?>
                                                    <td>
                                                        <?php echo $row->id_device; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->alamat; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->telp; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->harga; ?>
                                                    </td>

                                                    <td class="project-state">
                                                        <a class="btn btn-success btn-sm" href="<?= base_url('pengepul/dashboard/yes_validation'); ?>">
                                                            <i class="fas fa-check">
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="<?= base_url('pengepul/dashboard/no_validation'); ?>">
                                                            <i class="fas fa-times">
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } else {
                                            ?>
                                            <tr>
                                                <td>Tidak ada data</td>
                                            </tr>
                                        <?php
                                            }
                                        ?>


                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        </form>

                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.0.5</div>
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
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>template/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>template/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>template/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>template/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>template/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>template/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>template/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>template/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>template/dist/js/demo.js"></script>
</body>

</html>