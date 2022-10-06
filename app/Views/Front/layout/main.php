<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title><?= $this->renderSection("title") ?></title>

    <link href=<?php echo base_url() . "/static/assets/css/black-dashboard.css?v=1.0.0" ?>rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e1b504be8a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href=<?php echo base_url() . "/static/style.css" ?> rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url() . "/static/assets/css/bootstrap.min.css" ?>/>
    <link rel="stylesheet" href=<?php echo base_url() . "/static/assets/css/paper-dashboard.css?v=2.0.1" ?>/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link  rel="stylesheet" href= <?php echo base_url() . "/static/assets/demo/demo.css"?>/>
    <link rel="shortcut icon" href=<?php echo base_url() . "/static/imagenes/favicon.jpg" ?>>

</head>

<body class="">
    <?= $this->include('Front/layout/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('Front/layout/footer') ?>
</body>

</html>