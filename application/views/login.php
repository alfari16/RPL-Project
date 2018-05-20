<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Ayam Nelongso Admin</title>
  <link href="<?php echo base_url('resources/')?>assets/css/core.min.css" rel="stylesheet">
  <link href="<?php echo base_url('resources/')?>assets/css/app.min.css" rel="stylesheet">
  <link href="<?php echo base_url('resources/')?>assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="login-wrapper justify-center align-center container flex-container">
    <div class="login">
      <div class="text-center">
        <h1 class="login-title">Login</h1>
        <p class="branding mb-5">Ayam<span>Nelongso</span>
          Admin
        </p>
      </div>
      <form action="" data-provide="validation" data-disable="false" method="post">
        <input type="text" name="uname" class="form-control" placeholder="Username" required>
        <input type="password" name="pass" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-primary form-control btn-login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>