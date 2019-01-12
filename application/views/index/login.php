<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eventikom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url('asset/css/login.css')?>" rel="stylesheet">
</head>
<body class="text-center">
  <form action="<?php echo base_url('Admin_C/proses_login'); ?>" method="post" class="form-signin">
    <img class="mb-4" src="<?php echo base_url('asset/img/amikom.png')?>" alt="" style="width:90px">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <div class="login-box-body">
    <p class="login-box-msg">Sign in to your account</p>

    <form action="login" method="post">

      <?php $erroremail = ""; if(form_error('password')){
            $erroremail = "has-error";
      } ?>
      <div class="form-group has-feedback <?=$erroremail?>">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="help-block"><?=form_error('username')?></span>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <?php $errorpass = ""; if(form_error('password')){
            $errorpass = "has-error";
      } ?>

      <div class="form-group has-feedback <?=$errorpass?>" >
        <input type="password" class="form-control" id="inputError" name="password" placeholder="Password">
        <span class="help-block"><?=form_error('password')?></span>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->s
      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        <!-- /.col -->
    <p class="mt-3 mb-5 text-muted">&copy; 2018-2019</p>
  </form>
</body>
</html>
