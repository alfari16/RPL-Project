<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Responsive admin dashboard and web application ui kit. "> -->
    <meta name="keywords" content="blank, starter">

    <title>Log Aktivitas - Ayam Nelongso Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <link href="<?php echo base_url('resources/');?>assets/css/core.min.css" rel="stylesheet">
    <link href="<?php echo base_url('resources/');?>assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo base_url('resources/');?>assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="<?php echo base_url('resources/');?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url('resources/');?>assets/img/favicon.png" rel="icon">
    <script src="<?php echo base_url('resources/');?>assets/js/core.min.js"></script>
  </head>

  <body>

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <span class="logo">
          <a href="../index.html">
            <span style="font-weight: 100">Nelongso</span>Admin</a>
        </span>
        <span class="sidebar-toggle-fold" style="margin-right: 15px"></span>
      </header>
    
      <nav class="sidebar-navigation">
        <ul class="menu">
    
          <li class="menu-item">
            <a class="menu-link" href="index.html">
              <span class="icon fa fa-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon fa fa-bars"></span>
              <span class="title">Manajemen Barang</span>
            </a>
    
            <ul class="menu-submenu">
              <li class="menu-item">
                <a class="menu-link" href="data_barang.html" target="_self">
                  <span class="dot"></span>
                  <span class="title">Manajemen Barang</span>
                </a>
              </li>
    
              <li class="menu-item">
                <a class="menu-link" href="data_barang.html#tambah-barang">
                  <span class="dot"></span>
                  <span class="title">Tambah Barang</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item active">
            <a class="menu-link" href="log.html">
              <span class="icon fa fa-home"></span>
              <span class="title">Log Aktivitas</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar justify-center">
      <div class="text-center">
        <h1 style="margin-bottom:0">Log Aktivitas</h1>
      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container" id="app">
      <div class="main-content">
        <div class="">
          <div class="row mb-3">
            <div class="col-md-4">
              <label for="date-from">Dari Tanggal</label>
              <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" id="date-from" value="01/01/2017">
            </div>
            <div class="col-md-4">
              <label for="date-from">Sampai Tanggal</label>
              <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" id="date-to" value="05/16/2017">
            </div>
          </div>
          <div class="card">
            <h4 class="card-title">
              <strong>Log Aktivitas</strong>
            </h4>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Oleh</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td class="td-kode-barang">Menambah Jenis Barang</td>
                    <td class="td-nama-barang">12 April 2018</td>
                    <td class="td-harga-barang">admin</td>
                  </tr>
                  <tr>
                    <td scope="row">2</td>
                    <td class="td-kode-barang">Mengurangi Stock Barang</td>
                    <td class="td-nama-barang">12 April 2018</td>
                    <td class="td-harga-barang">bos</td>
                  </tr>
                  <tr>
                    <td scope="row">3</td>
                    <td class="td-kode-barang">Menginput Barang</td>
                    <td class="td-nama-barang">12 April 2018</td>
                    <td class="td-harga-barang">Sarah</td>
                  </tr>
                </tbody>
              </table>
        
            </div>
          </div>
        </div>


      </div><!--/.main-content -->
    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->


    <!-- Scripts -->
    <script src="<?php echo base_url('resources/assets/js/app.min.js') ?>"></script>
  </body>
</html>
