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
                        <?php
                        if ($getdatabyId->num_rows() > 0) {
                            foreach ($getdatabyId->result() as $row) {
                        ?>
                                <a href="#" class="d-block" style=" font-family:Segoe UI; color: white;"><?php echo $row->name ?></a>
                        <?php
                            }
                        } ?>
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
                            <a href="<?= base_url('pengepul/pickup/pickup_success'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengepul/payment/payment_history'); ?>" class="nav-link" style="color: #F8F2EE; font-size: 15px;">
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
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <p>
                                <h1 style=" font-size: 26px; font-family:Segoe UI; color: #673E27;">Pembayaran</h1>
                            </p>
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
                                <form role="form" action="<?php echo base_url() . 'pengepul/payment/payment_validation'; ?>" method="post">
                                    <div class="card-body">
                                        <?php
                                        if ($getdatabyId->num_rows() > 0) {
                                            foreach ($getdatabyId->result() as $row) {
                                        ?>
                                                <div class="form-group">
                                                    <label for="inputname" style="color: #474747;">Nama Pengepul</label>
                                                    <input type="text" class="form-control" id="name1" name="name1" value="<?php echo $row->name ?>">
                                                </div>
                                        <?php
                                            }
                                        } ?>
                                        <?php
                                        if ($getdatapayment->num_rows() > 0) {
                                            foreach ($getdatapayment->result() as $row) {
                                        ?>
                                                <div class="form-group">
                                                    <label for="inputname" style="color: #474747;">ID Pesanan</label>
                                                    <input type="text" class="form-control" id="idorder" name="idorder" value="<?php echo $row->id ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" style="color: #474747;">Nama Pemesan</label>
                                                    <input type="hidden" class="form-control" id="iduser" name="iduser" value="<?php echo $row->id_user ?>">
                                                    <input type="text" class="form-control" value="<?php echo $row->name ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputid" style="color: #474747;">ID Perangkat Pemesan</label>
                                                    <input type="id" class="form-control" id="iddevice" name="iddevice" value="<?php echo $row->id_device ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputbill" style="color: #474747;">Jumlah Tagihan</label>
                                                    <input type="text" class="form-control" id="bill" name="bill" value="<?php echo $row->harga ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputbill" style="color: #474747;">Tanggal Penjemputan</label>
                                                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $row->date ?>" readonly>
                                                </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" formmethod="POST" class="btn" style="background-color: #FF951B; color: white;" value="delete">Bayar</button>
                                    </div>
                            <?php
                                            }
                                        }
                            ?>
                                </form> <!-- /.card -->
                            </div>
                        </div>
                        <br></br><br></br>
                        <!-- /.row -->
                    </div>
            </section>
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
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
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