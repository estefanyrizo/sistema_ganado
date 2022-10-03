<div class="wrapper">
    <div class="sidebar">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    <img src=<?php echo base_url() . "/static/imagenes/favicon.jpg" ?>>
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                    La calamidad
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="./dashboard.html">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Tablero</p>
                    </a>
                </li>
                <li>
                    <a href="./icons.html">
                        <i class="tim-icons icon-satisfied"></i>
                        <p>Proveedor</p>
                    </a>
                </li>
                <li>
                    <a href="./icons.html">
                        <i class="tim-icons icon-satisfied"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li>
                    <a href="./map.html">
                        <i class="tim-icons icon-single-02"></i>
                        <p>Empleados</p>
                    </a>
                </li>
                <li>
                    <a href="./notifications.html">
                        <i class="tim-icons icon-heart-2"></i>
                        <p>Ganado</p>
                    </a>
                </li>
                <li>
                    <a href="./tables.html">
                        <i class="fa fa-syringe"></i></i>
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
                    <a href="./rtl.html">
                        <i class="tim-icons icon-coins"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="./upgrade.html">
                        <i class="tim-icons icon-bag-16"></i>
                        <p>Compras</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <?php
                    //El primer argumento es la invocacion al controlador
                    echo anchor("", "Inicio", ['class' => 'navbar-brand']);
                    ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="search-bar input-group">
                            <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                <span class="d-lg-none d-md-block">Search</span>
                            </button>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="gestiones d-none d-lg-block d-xl-block"></div>
                                <i class="tim-icons icon-notes"></i>
                                <p class="d-lg-none">
                                    Gestiones administrativas
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("ganado", "Ganado", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("", "Proveedores", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("", "Clientes", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("", "Usuarios", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("", "Alimentación", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("", "Nueva venta", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("compra", "Nueva compra", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="photo">
                                    <img src="https://i.pinimg.com/originals/58/91/dc/5891dcea19ea2a3fee0bfeb7f01ba8d1.jpg" alt="Profile Photo">
                                </div>
                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <p class="d-lg-none">
                                    Log out
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("cuenta", "Cuenta", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="nav-link">
                                    <?php
                                    //El primer argumento es la invocacion al controlador
                                    echo anchor("clave", "Nueva clave", ['class' => 'nav-item dropdown-item']);
                                    ?>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Cerrar sesion</a></li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="buscar" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="adjustments-line text-center color-change">
                        <span class="color-label">LIGHT MODE</span>
                        <span class="badge light-badge mr-2"></span>
                        <span class="badge dark-badge ml-2"></span>
                        <span class="color-label">DARK MODE</span>
                    </li>
                </ul>
            </div>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="static/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

        <script src="static/assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="static/script.js"></script>

        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                    $('.fixed-plugin a').click(function(event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .background-color span').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }

                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }
                    });

                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            blackDashboard.showSidebarMessage('Sidebar mini activated...');
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });

                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (white_color == true) {

                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {

                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);

                            white_color = true;
                        }


                    });

                    $('.light-badge').click(function() {
                        $('body').addClass('white-content');
                    });

                    $('.dark-badge').click(function() {
                        $('body').removeClass('white-content');
                    });
                });
            });
        </script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script>
            window.TrackJS &&
                TrackJS.install({
                    token: "ee6fab19c5a04ac1a32a645abde4613a",
                    application: "black-dashboard-free"
                });
        </script>