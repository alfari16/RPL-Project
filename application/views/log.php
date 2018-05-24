

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
                  <?php 
                    $no = 1;
                    foreach ($data as $list) {
                  ?>
                    <tr>
                      <td scope="row"><?php echo $no++; ?></td>
                      <td><?php echo $list->nama_event; ?></td>
                      <td><?php echo $list->tanggal; ?></td>
                      <td><?php echo $list->user; ?></td>
                    </tr>
                  <?php
                    }
                  ?>
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
