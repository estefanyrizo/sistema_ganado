<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a class="simple-text logo-mini" href=<?php echo base_url() ?>>
                <div class="logo-image-small">
                    <img src=<?php echo base_url() . "/public/static/imagenes/favicon.jpg" ?>>
                </div>
                <!-- <p>CT</p> -->
            </a>
            <a href=<?php echo base_url() ?> class="simple-text logo-normal">
                La calamidad
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="./tablero">
                        <i class="nc-icon nc-bank"></i>
                        <p>Tablero</p>
                    </a>
                </li>
                <li>
                    <a href="./proovedor">
                        <i class="nc-icon nc-satisfied"></i>
                        <p>Proveedores</p>
                    </a>
                </li>
                <li>
                    <a href="./map.html">
                        <i class="nc-icon nc-satisfied"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li>
                    <a href="./notifications.html">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Empleados</p>
                    </a>
                </li>
                <li>
                    <a href=<?php echo base_url() . "/mostrar_ganado"?>>
                        <i class="fa fa-cow"></i>
                        <p>Ganado</p>
                    </a>
                </li>
                <li>
                    <a href="./tables.html">
                        <i class="fa fa-syringe"></i>
                        <p>Medicina</p>
                    </a>
                </li>
                <li>
                    <a href="./typography.html">
                        <i class="fa fa-seedling"></i>
                        <p>Alimentaci&oacute;n</p>
                    </a>
                </li>
                <li>
                    <a href="./upgrade.html">
                        <i class="nc-icon nc-money-coins"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li>
                    <a href="./upgrade.html">
                        <i class="nc-icon nc-bag-16"></i>
                        <p>Compras</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Aca ira algo</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-diamond"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Gestiones administrativas</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("ganado", "Ganado", ['class' => 'dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("", "Proveedores", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("", "Clientes", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("", "Usuarios", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("", "Alimentación", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("", "Nueva venta", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("compra", "Nueva compra", ['class' => 'nav-item dropdown-item']);
                                ?>
                            </div>
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="javascript:;">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Ajustes</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="photo">
                                    <img src="https://i.pinimg.com/originals/58/91/dc/5891dcea19ea2a3fee0bfeb7f01ba8d1.jpg" alt="Profile Photo">
                                </div>
                                <p>
                                    <span class="d-lg-none d-md-block"> Mi cuenta</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("cuenta", "Cuenta", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("clave", "Nueva clave", ['class' => 'nav-item dropdown-item']);
                                ?>
                                <?php
                                //El primer argumento es la invocacion al controlador
                                echo anchor("salir", "Cerrar sesión", ['class' => 'nav-item dropdown-item']);
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <main class="container-fluid pb-5 pt-5">
