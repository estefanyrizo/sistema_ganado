<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e1b504be8a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href=<?php echo base_url() . "/public/static/style.css" ?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url() . "/public/static/assets/css/bootstrap.min.css" ?>/>
    <link rel="stylesheet" href=<?php echo base_url() . "/public/static/assets/css/paper-dashboard.css?v=2.0.1" ?>/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link  rel="stylesheet" href= <?php echo base_url() . "/public/static/assets/demo/demo.css"?>/>
    <link rel="shortcut icon" href=<?php echo base_url() . "/public/static/imagenes/favicon.jpg" ?>>

</head>

<div class="container-fluid">
  <div id="login" class="signin-card">
    <div class="logo-image">
      <img src=<?php echo base_url() . "/public/static/imagenes/favicon1.0.png" ?> alt="Logo" title="Logo"
        width="138">
    </div>
    <h1 class="display1">Bienvenido</h1>
    <form action=<?php echo base_url('/login')?> method="post">
      <div id="form-login-username" class="form-group">
        <label for="usuario" class="float-label">Usuario</label>
        <input id="usuario" class="form-control" name="usuario" type="text" size="18" alt="usuario" required />
        <span class="form-highlight"></span>
        <span class="form-bar"></span>
      </div>
      <div id="form-login-password" class="form-group">
        <label for="clave" class="float-label">Contraseña</label>
        <input id="clave" class="form-control" name="clave" type="password" size="18" alt="clave" required>
        <span class="form-highlight"></span>
        <span class="form-bar"></span>
      </div>
      <div>
        <button class="btn btn-block btn-primary ripple-effect" type="submit" name="Submit" alt="sign in">Iniciar sesi&oacute;n</button>
      </div>

  </div>
  </form>
</div>
</div>

</html>