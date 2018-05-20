<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="description" content="Responsive admin dashboard and web application ui kit. "> -->
  <meta name="keywords" content="blank, starter">

  <title>Dashboard - Ayam Nelongso Admin</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

  <!-- Styles -->
  <link href="assets/css/core.min.css" rel="stylesheet">
  <link href="assets/css/app.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">
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

        <li class="menu-item active">
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
                <span class="icon fa fa-bars"></span>
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
        <li class="menu-item">
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
      <h1 style="margin-bottom:0">Dashboard</h1>
    </div>
  </header>
  <!-- END Topbar -->


  <!-- Main container -->
  <main class="main-container" id="app">
    <div class="main-content">
      <div class="row">
        <div class="col-md-12 row mb-3">
          <div class="col-md-4">
            <label for="date-from">Dari Tanggal</label>
            <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" id="date-from" v-model="dateFrom">
          </div>
          <div class="col-md-4">
            <label for="date-from">Sampai Tanggal</label>
            <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" id="date-to" v-model="dateTo">
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">
                <strong>Pengeluaran</strong>
              </h5>
            </div>
            <div class="card-body">
              <canvas id="chart-js-2" height="100px" data-provide="chartjs"></canvas>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <strong>Pengeluaran</strong>
                  </h5>
                </div>
                <div class="card-body">
                  <canvas id="chart-js-3" data-provide="chartjs"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <strong>Pengeluaran</strong>
                  </h5>
                </div>
                <div class="card-body">
                  <canvas id="chart-js-4" data-provide="chartjs"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-body card-ex">
            <i class="icon-dash fa fa-bars absolute"></i>
            <div>
              <div class="text-right">
                <span class="fw-400">Total Persediaan Barang</span>
                <span>
                  <i class="ti-angle-up text-success"></i>
                  <span class="fs-18 ml-1">113</span>
                </span>
              </div>
            </div>
          </div>
          <div class="card card-body card-ex">
            <i class="icon-dash fa fa-money absolute"></i>
            <div>
              <div class="text-right">
                <span class="fw-400">Anggaran</span>
                <span>
                  <i class="ti-angle-up text-success"></i>
                  <span class="fs-18 ml-1">113</span>
                </span>
              </div>
            </div>
          </div>
          <div class="card card-body card-ex">
            <i class="icon-dash fa fa-braille absolute"></i>
            <div>
              <div class="text-right">
                <span class="fw-400">Jenis Barang</span>
                <span>
                  <i class="ti-angle-up text-success"></i>
                  <span class="fs-18 ml-1">113</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!--/.main-content -->
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
  <script src="<?php echo base_url('resources/');?>assets/js/core.min.js"></script>
  <script src="<?php echo base_url('resources/');?>assets/js/app.min.js"></script>
  <script src="<?php echo base_url('resources/');?>assets/vendor/vuejs/vue.js"></script>
  <script>
    var currentDate = new Date(),
        today = currentDate.getDay()+1,
        month = currentDate.getMonth()+1,
        year = currentDate.getFullYear();

    new Vue({
      el: '#app',
      data: {
        dateFrom: '01/01/2017',
        dateTo: month+'/'+ today + '/' +year
      },
      mounted: function () {
        this.getData();
      },
      watch: {
        dateFrom: function (val) {
          console.log(val);
        }
      },
      methods: {
        getData:function() {
          app.ready(function () {
            $('#chat-content').scrollToEnd();
            var chartjs2 = new Chart($("#chart-js-2"), {
              type: 'line',
              data: {
                labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
                datasets: [
                  {
                    label: "Barang Masuk",
                    backgroundColor: "rgb(51,202,185)",
                    data: [0, 6000, 8000, 5000, 2000, 5000, 7500]
                  },
                ]
              },
            });
            var chartjs3 = new Chart($("#chart-js-3"), {
              type: 'bar',
              data: {
                labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
                datasets: [
                  {
                    label: "Barang Masuk",
                    backgroundColor: "#90CAF9",
                    data: [0, 6000, 8000, 5000, 2000, 5000, 7500]
                  },
                ]
              },
            });
            var chartjs4 = new Chart($("#chart-js-4"), {
              type: 'line',
              data: {
                labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
                datasets: [
                  {
                    label: "Barang Masuk",
                    backgroundColor: "#FFCDD2",
                    data: [0, 6000, 8000, 5000, 2000, 5000, 7500]
                  },
                ]
              },
            });
          });
        }
      }
    });
  </script>
</body>

</html>