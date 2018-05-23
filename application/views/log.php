

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
