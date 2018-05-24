  <header class="topbar justify-center">
      <div class="text-center">
          <h1 style="margin-bottom:0">
              Dashboard
          </h1>
      </div>
  </header>
  <!-- END Topbar -->
  <!-- Main container -->
  <main class="main-container" id="app">
    <div class="main-content">
      <div class="row">
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
  <?php 
    if(isset($_GET['sukses'])){
      $sukses = $_GET['sukses'] or null;
      switch ($sukses) {
        case 'tambahuser':
          echo "<script>alert(\"Berhasil menambah admin!\");</script>";
          break;
        
        default:
          break;
      }
    }
    ?>
</body>

</html>