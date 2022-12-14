<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e1b504be8a.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href=<?php echo base_url() . "/public/static/style.css" ?> rel="stylesheet">
  <link rel="stylesheet" href=<?php echo base_url() . "/public/static/assets/css/bootstrap.min.css" ?> />
  <link rel="stylesheet" href=<?php echo base_url() . "/public/static/assets/css/paper-dashboard.css?v=2.0.1" ?> />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href=<?php echo base_url() . "/public/static/assets/demo/demo.css" ?> />
  <link rel="shortcut icon" href=<?php echo base_url() . "/public/static/imagenes/favicon.jpg" ?>>

</head>

<body>
  <div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
  </div>

  <div class="container login-caja">

    <div class="login">
      <?= form_open('login') ?>
      <fieldset class="clearfix">
        <p><span class="fontawesome-user"></span><input type="text" placeholder="Usuario" name="usuario" value="<?= set_value('usuario') ?>" id="usuario" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
        <p><span class="fontawesome-lock"></span><input type="password" placeholder="Clave" id="clave" name="clave" value="<?= set_value('clave') ?>" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
        <p><input type="submit" class="submit" value="Iniciar Sesi??n"></p>

      </fieldset>

      <?= form_close() ?>

      <p>??No es un miembro?

        <?php
        echo anchor('registro', 'Registrate ahora', ['class' => 'blue']);
        ?>

        <span class="fontawesome-arrow-right"></span>
      </p>

    </div> <!-- end login -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (session()->getFlashdata('error')) : ?>
      <script>
        swal({
          title: "Lo sentimos",
          text: "<?= session()->getFlashdata('error'); ?>",
          icon: "error",
        });
      </script>
    <?php endif; ?>
  </div>
</body>

</html>