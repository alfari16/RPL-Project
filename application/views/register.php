<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi - Ayam Nelongso Admin</title>
  <link href="<?php echo base_url('resources/assets/css/core.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('resources/assets/css/app.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('resources/assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <div class="login-wrapper justify-center align-center container flex-container">
    <div class="login">
      <div class="text-center">
        <h1 class="login-title">Tambah Data Admin Baru</h1>
        <p class="branding mb-5">Ayam
          <span>Nelongso</span>
          Admin
        </p>
      </div>
      <form action="UserController/register" data-provide="validation" data-disable="false" method="POST">
        <input name="nama_user" type="text" class="form-control" placeholder="Nama" required>
        <input name="alamat_user" type="text" class="form-control" placeholder="Alamat" required>
        <input name="telp_user" type="text" class="form-control mb-3" placeholder="No. Telp" required>
        <input name="username" type="text" class="form-control" placeholder="Username" required>
        <input name="password" type="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-primary form-control btn-login">Daftar</button>
      </form>
    </div>
  </div>
    <?php 
      if(isset($_GET['telah'])){
    ?>
    <script>alert('Username telah dipakai! Masukan username lain!')</script>
      <?php } ?>
</body>

</html>