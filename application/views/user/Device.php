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

    <style>
        /* Graph Colors */
        /* Graph Sizes */
        .graph-container {
            display: flex;
            margin: 10px 0;
            padding: 4px;
            max-width: 500px;
        }

        .graph-container>p {
            margin: 0 20px 0 0;
            max-width: 100px;
            justify-content: center;
        }

        .bar-graph {
            height: 40px;
            position: relative;
            background-color: #85dcff;
            width: 400px;
        }

        .bar-graph .graph {
            height: 40px;
            padding: 0;
            margin: 0;
            width: 100%;
            display: table;
        }

        .bar-graph .graph p {
            position: relative;
            text-align: center;
            color: white;
            margin-top: 0;
            display: table-cell;
            vertical-align: middle;
        }

        .bar-graph .graph {
            width: 0.1%;
            background-color: #0094f0;
        }
    </style>

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
                            <a href="<?= base_url('user/order/history'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
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
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <p></p>
                            <h1 style=" font-size: 27px; font-family:Segoe UI; color: #673E27;">Grafik Perangkat Tampung Minyak Jelantah</h1>
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
                <div class="container-fluid" style="margin:auto;">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Tingkat Ketinggian Minyak
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- ini grafik data -->
                                <div class="graph-container">
                                    <p>Persentase Drum <?php echo $id_device ?></p>
                                    <div class="bar-graph">
                                        <div id="capacity-bar" class="graph">
                                        <p id="capacity-text">0%</p>
                                        </div>
                                    </div>
                                </div>

                                <span>Grafik disamping adalah informasi tentang minyak jelantah yang
                                    telah dikumpulkan. Pesan jasa pengepul untuk menjemputnya apabila semakin besar jumlahnya.
                                </span>
                                <br></br>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->

                            <a href="" class="btn" href="order" style="background-color: #FF951B; color: white; float:right;">Pesan Penjemputan</a>
                        </div><!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>
        <br></br>


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
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>template/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
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

    <!-- CloudMqtt for pubsub -->
    <script src="https://unpkg.com/paho-mqtt@1.1.0/paho-mqtt-min.js"></script>
    <script type="module" src="<?= base_url() ?>dist/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>