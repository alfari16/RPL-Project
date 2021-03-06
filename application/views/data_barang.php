  <header class="topbar justify-center">
      <div class="text-center">
          <h1 style="margin-bottom:0">
              Manajemen Barang
          </h1>
      </div>
  </header>
    <!-- Main container -->
    <main class="main-container" id="app">
      <div class="main-content">
        <div class="">
          <div class="card">
            <h4 class="card-title">
              <strong>Data Barang</strong>
            </h4>
        
            <div class="card-body">
        
              <div class="flexbox mb-20">
                <div class="lookup">
                  <input class="w-200px" type="text" name="s" placeholder="Cari" id="cari-input">
                </div>
        
                <div class="btn-toolbar">
                  <div class="btn-group btn-group-sm">
                    <a href="<?php echo base_url('manajemen-barang#tambahbarang') ?>"><button class="btn" title="Add new" id="tambah-barang" data-provide="tooltip" data-toggle="modal" data-target="#modal-large">
                      <i class="ion-plus-round"></i> Tambah Barang Baru
                    </button></a>
                  </div>
                </div>
              </div>
        
        
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Terakhir diperbarui</th>
                    <th class="text-center">Pemasukan/Pengeluaran</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
                $no=1;

                  foreach ($barang as $key => $value) { ?>
                  <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td class="td-kode-barang"><?php echo $value->kode_barang; ?></td>
                    <td class="td-nama-barang"><?php echo $value->nama_barang; ?></td>
                    <td class="td-harga-barang"><?php echo $value->satuan; ?></td>
                    <td class="td-jumlah-barang"><?php echo $value->stok; ?></td>
                    <td><?php echo $value->terakhir_diubah; ?></td>
                    <td class="text-center">
                      <a class="table-action operation" href="#" title="Pemasukan" data-toggle="modal" data-target="#modal-pemasukan">
                        <i class="ti-plus"></i>
                      </a>
                      <a class="table-action operation" href="#" title="Pengeluaran" data-toggle="modal" data-target="#modal-pengeluaran">
                        <i class="ti-minus"></i>
                      </a>
                    </td>
                     <td class="text-center table-actions">
                      <a class="table-action" href="#" title="Kelola" data-toggle="modal" data-target="#modal-edit">
                        <i class="ti-pencil"></i>
                      </a>
                      <a class="table-action" href="#" title="Hapus" data-toggle="modal" data-target="#delete-modal">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
               
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

    <!-- Modal Tambah Barang Start -->
    <div class="modal fade" id="modal-large" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form data-provide="validation" data-disable="false" action="<?php echo base_url('BarangController/tambah') ?>" method="POST">
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-1">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control" id="input-1" name="kode_barang" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Nama Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control" id="input-2" name="nama_barang" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Harga Barang</label>
                <div class="col-8 col-lg-10 flex-container align-center">
                  <p class="floating-left no-space mr-3">Rp</p>
                  <input type="text" class="form-control currency" id="input-4" name="satuan" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input3">Jumlah Barang</label>
                <div class="col-8 col-lg-10 flex-container align-center">
                  <p class="floating-left no-space mr-3">pcs</p>
                  <input type="text" class="form-control currency" id="input3" required placeholder="" name="stok" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>        
            <div class="modal-footer">
              <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Barang End -->

    <!-- Modal Edit Barang Start -->
    <div class="modal fade" id="modal-edit" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Barang</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php $button = 'Edit'; ?>
          <form data-provide="validation" data-disable="false" action="<?php echo base_url('BarangController/edit'); ?>" method='POST'>
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-1">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input name="edit-kode-barang" type="hidden" class="form-control kode-barang" id="input-1" required>
                  <input type="text" class="form-control kode-barang" disabled id="input-1" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Nama Barang</label>
                <div class="col-8 col-lg-10">
                  <input name="edit-nama-barang" type="text" class="form-control nama-barang" id="input-2" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Jumlah Barang</label>
                <div class="col-8 col-lg-10">
                  <input name="edit-stok" type="text" class="form-control jumlah-barang currency" id="input-4" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input3">Harga Barang</label>
                <div class="col-8 col-lg-10 flex-container align-center">
                  <p class="floating-left no-space mr-3">Rp</p>
                  <input name="edit-satuan" type="text" class="form-control harga-barang currency" id="input3" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit"><?php echo $button; ?></button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Edit Barang End -->

    <!-- Modal Pemasukan Start -->
    <div class="modal fade" id="modal-pemasukan" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Pemasukan</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form data-provide="validation" data-disable="false" action="<?php echo base_url('transaksi/masuk') ?>" method='POST'>
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="hidden" class="form-control kode-barang" required>
                  <input type="text" class="form-control kode-barang" name="kode_barang" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require">Jumlah Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="number" class="form-control jumlah-barang currency" name="jumlah_barang" required id="pemasukan-input">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit"><?php echo $button; ?></button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Pemasukan End -->
    
    <!-- Modal Pengeluaran Start -->
    <div class="modal fade" id="modal-pengeluaran" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Pengeluaran</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form data-provide="validation" data-disable="false" action="<?php echo base_url('transaksi/keluar') ?>" method='POST'>
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="hidden" class="form-control kode-barang"  required>
                  <input type="text" class="form-control kode-barang" name="kode_barang" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require">Jumlah Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="number" class="form-control jumlah-barang currency" name="jumlah_barang" required id="pengeluaran-input">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit"><?php echo $button; ?></button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Pengeluaran End -->

    <!-- Modal Action Delete Start-->
    <div class="modal fade" id="delete-modal" tabindex="-1">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <form action="<?php echo base_url('BarangController/hapus'); ?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Apakah Anda Yakin?</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" value="" id="input-delete" name="modal_delete">
            <p>Hapus 
              <span class="kode-barang">Blablabla</span> -
              <span class="nama-barang">Blablabla</span>
              (<span class="jumlah-barang">Blablabla</span> pcs)
              ?
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
            <button class="btn btn-bold btn-pure btn-primary">Hapus</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Action Delete End-->


    <!-- Scripts -->
    <script src="<?php echo base_url('resources/');?>assets/js/core.min.js"></script>
    <script src="<?php echo base_url('resources/');?>assets/js/app.min.js"></script>
    <script>
      var url = location.href;
      if(url.includes('#tambahbarang')) $('#tambah-barang').click();
      $('[data-target="#delete-modal"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#delete-modal');
        modal.find('.kode-barang').text(data.find('.td-kode-barang').text());
        modal.find('.nama-barang').text(data.find('.td-nama-barang').text());
        modal.find('.jumlah-barang').text(data.find('.td-jumlah-barang').text());
        var id = data.find('.td-kode-barang').text()
        modal.find('#input-delete').val(id)
      });
      $('[data-target="#modal-edit"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#modal-edit');
        modal.find('.kode-barang').val(data.find('.td-kode-barang').text());
        modal.find('.nama-barang').val(data.find('.td-nama-barang').text());
        modal.find('.jumlah-barang').val(data.find('.td-jumlah-barang').text());
        modal.find('.harga-barang').val(data.find('.td-harga-barang').text());
      });
      $('[data-target="#modal-pemasukan"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#modal-pemasukan');
        modal.find('#pemasukan-input').prop('min',data.find('.td-jumlah-barang').text());
        modal.find('.kode-barang').val(data.find('.td-kode-barang').text());
        modal.find('.jumlah-barang').val(data.find('.td-jumlah-barang').text());
      });
      $('[data-target="#modal-pengeluaran"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#modal-pengeluaran');
        modal.find('#pengeluaran-input').prop('max',data.find('.td-jumlah-barang').text());
        modal.find('.kode-barang').val(data.find('.td-kode-barang').text());
        modal.find('.jumlah-barang').val(data.find('.td-jumlah-barang').text());
      });
      $('#cari-input').keyup(function(e){
        var value = $(this).val().toLowerCase();
        $('table tbody').children('tr').each(function(idx,val){
          var $this=$(this);
          function pencarian(arg){
            return $this.find(arg).text().toLowerCase().indexOf(value)>=0;
          }
          if(pencarian('.td-kode-barang') || pencarian('.td-nama-barang') || pencarian('.td-harga-barang')){
            $this.show();
          }else $this.hide();
        });
      });
    </script>
    <?php 
      if(isset($_GET['result'])){
        switch($_GET['result']){
          case 'kodesudahada':
            echo "<script>alert(\"Kode Barang sudah dipakai!\");</script>";
            break;
          case 'berhasil':
            echo "<script>alert(\"Berhasil menambah barang!\");</script>";
            break;
          case 'gagal':
            echo "<script>alert(\"Gagal menambah barang!\");</script>";
            break;
          case 'gagalhapus':
            echo "<script>alert(\"Gagal menghapus barang!\");</script>";
            break;
          case 'berhasilhapus':
            echo "<script>alert(\"Berhasil menghapus barang!\");</script>";
            break;
          case 'gagaledit':
            echo "<script>alert(\"Gagal mengedit barang!\");</script>";
            break;
          case 'berhasiledit':
            echo "<script>alert(\"Berhasil mengedit barang!\");</script>";
            break;
          default: break;
        }
        echo "location.href = location.href+\'#tambahbarang\';";
      }
    ?>
  </body>
</html>
