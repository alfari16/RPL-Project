
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
                    <button class="btn" title="Add new" id="tambah-barang" data-provide="tooltip" data-toggle="modal" data-target="#modal-large">
                      <i class="ion-plus-round"></i> Tambah Barang Baru
                    </button>
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td class="td-kode-barang">AS476</td>
                    <td class="td-nama-barang">Daging Ayam Super</td>
                    <td class="td-harga-barang">24,000</td>
                    <td class="td-jumlah-barang">240</td>
                    <td>12 April 2018</td>
                    <td class=" table-actions">
                      <a class="table-action" href="#" title="Kelola" data-toggle="modal" data-target="#modal-edit">
                        <i class="ti-pencil"></i>
                      </a>
                      <a class="table-action" href="#" title="Hapus" data-toggle="modal" data-target="#delete-modal">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">2</td>
                    <td class="td-kode-barang">R672</td>
                    <td class="td-nama-barang">Rempah-rempah</td>
                    <td class="td-harga-barang">24,000</td>
                    <td class="td-jumlah-barang">240</td>
                    <td>21 Maret 2018</td>
                    <td class=" table-actions">
                      <a class="table-action" href="#" title="Kelola" data-toggle="modal" data-target="#modal-edit">
                        <i class="ti-pencil"></i>
                      </a>
                      <a class="table-action" href="#" title="Hapus">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">3</td>
                    <td class="td-kode-barang">B782</td>
                    <td class="td-nama-barang">Bawang</td>
                    <td class="td-harga-barang">24,000</td>
                    <td class="td-jumlah-barang">240</td>
                    <td>25 April 2018</td>
                    <td class=" table-actions">
                      <a class="table-action" href="#" title="Kelola" data-toggle="modal" data-target="#modal-edit">
                        <i class="ti-pencil"></i>
                      </a>
                      <a class="table-action" href="#" title="Hapus">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
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
          <form data-provide="validation" data-disable="false">
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-1">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control" id="input-1" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Nama Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control" id="input-2" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Jumlah Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control currency" id="input-4" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input3">Harga Barang</label>
                <div class="col-8 col-lg-10 flex-container align-center">
                  <p class="floating-left no-space mr-3">Rp</p>
                  <input type="text" class="form-control currency" id="input3" required placeholder="">
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
          <form data-provide="validation" data-disable="false">
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-1">Kode Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control kode-barang" id="input-1" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Nama Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control nama-barang" id="input-2" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input-2">Jumlah Barang</label>
                <div class="col-8 col-lg-10">
                  <input type="text" class="form-control jumlah-barang currency" id="input-4" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-lg-2 col-form-label require" for="input3">Harga Barang</label>
                <div class="col-8 col-lg-10 flex-container align-center">
                  <p class="floating-left no-space mr-3">Rp</p>
                  <input type="text" class="form-control harga-barang currency" id="input3" required placeholder="">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Edit Barang End -->

    <!-- Modal Action Delete Start-->
    <div class="modal fade" id="delete-modal" tabindex="-1">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Apakah Anda Yakin?</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" value="" id="input-delete">
            <p>Hapus 
              <span class="kode-barang">Blablabla</span> -
              <span class="nama-barang">Blablabla</span>
              (<span class="jumlah-barang">Blablabla</span> pcs)
              ?
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-bold btn-pure btn-primary">Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Action Delete End-->


    <!-- Scripts -->
    <script src="<?php echo base_url('resources/');?>assets/js/core.min.js"></script>
    <script src="<?php echo base_url('resources/');?>assets/js/app.min.js"></script>
    <script>
      $('.currency').keypress(function(e){
        if(e.which<48||e.which>57) e.preventDefault();
        var value = $(this).val().split('').filter(function (el) { return el !== ',' }).reverse();
        var temp = '';
        value.forEach((element,idx) => {
          if((idx+1)%3==0 && idx>0) temp+=',';
          temp+=element;
        });
        $(this).val(temp.split('').reverse().join(''));
      });
      if(location.hash==='#tambah-barang'){
        $('#tambah-barang').click();
      }
      $('[data-target="#delete-modal"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#delete-modal');
        modal.find('.kode-barang').text(data.find('.td-kode-barang').text());
        modal.find('.nama-barang').text(data.find('.td-nama-barang').text());
        modal.find('.jumlah-barang').text(data.find('.td-jumlah-barang').text());
      });
      $('[data-target="#modal-edit"]').click(function(e){
        var data = $(this).closest('tr');
        var modal = $('#modal-edit');
        modal.find('.kode-barang').val(data.find('.td-kode-barang').text());
        modal.find('.nama-barang').val(data.find('.td-nama-barang').text());
        modal.find('.jumlah-barang').val(data.find('.td-jumlah-barang').text());
        modal.find('.harga-barang').val(data.find('.td-harga-barang').text());
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
  </body>
</html>
