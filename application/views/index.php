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
                <strong>Jumlah Barang</strong>
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
                    <strong>Pemasukan</strong>
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
                  <span class="fs-18 ml-1">{{totalCount}}</span>
                </span>
              </div>
            </div>
          </div>
          <label>Harga</label>
          <div class="flex-container align-center harga-container" v-for="list in data">
            <div class="left">{{list.nama}}</div>
            <div class="right">Rp {{list.harga}}</div>
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
        data : [
          {
            nama:"Cabe",
            jumlah:0,
            kode:'string',
            harga:0,
          },
          {
            nama:"Tempe",
            jumlah:6000,
            kode:'string',
            harga:6000,
          },
          {
            nama:"Ayam",
            jumlah:8000,
            kode:'string',
            harga:8000,
          },
          {
            nama:"Bawang",
            jumlah:5000,
            kode:'string',
            harga:5000,
          }
        ]
      },
      computed:{
        totalCount:function(){
          var total = 0;
          this.data.forEach(function(element){
            total+=element.jumlah
          });
          return total;
        }
      },
      created: function(){
        console.log('test create');
        this.fetchApi();
      },
      mounted:function(){
        this.getData();
      },
      methods: {
        fetchApi:function(){
          var vm = this;
          fetch('http://f6a76499.ngrok.io/api/resources/cur_harga')
            .then(function(res){return res.json();})
            .then(function(res){
              var data = res;
              console.log(data);
              //vm.getData();
            });
        },
        getDataByKey:function(key){
          return this.data.map(function(ele){
            return ele[key];
          })
        },
        getData:function() {
          var vm = this;
          app.ready(function () {
            $('#chat-content').scrollToEnd();
            var chartjs2 = new Chart($("#chart-js-2"), {
              type: 'bar',
              data: {
                labels: vm.getDataByKey('nama'),
                datasets: [
                  {
                    label: "Jumlah Barang",
                    backgroundColor: "rgb(51,202,185)",
                    data: vm.getDataByKey('jumlah')
                  },
                ]
              },
              options: {
                legend: {
                    display: false
                },
                tooltips: {
                    callbacks: {
                      label: function(tooltipItem) {
                              return tooltipItem.yLabel;
                      }
                    }
                }
              }
            });
            var chartjs3 = new Chart($("#chart-js-3"), {
              type: 'line',
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
                    label: "Barang Keluar",
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