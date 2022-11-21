<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Principal');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Principal::index');
$routes->get('/login', 'Login::login');
$routes->post('/login', 'Login::login');
$routes->get('/registro', 'Registro::registro');
$routes->post('/registro', 'Registro::registro');
$routes->get('/salir', 'Salir::salir');
$routes->get('/cuenta', 'Cuenta::Cuenta');
$routes->get('/clave', 'NuevaClave::nuevaClave');
$routes->post('/clave', 'NuevaClave::nuevaClave');
$routes->get('/ganado', 'GestionarGanado::ganado');
$routes->post('/ganado', 'GestionarGanado::ganado');
$routes->get('/tablero', 'Tablero::tablero');
$routes->get('/proveedor', 'proveedor::proveedor');
$routes->post('/proveedor', 'proveedor::proveedor');
$routes->get('/cliente', 'Cliente::cliente');
$routes->post('/cliente', 'Cliente::cliente');
$routes->get('/mostrar_ganado', 'MostrarGanado::mostrar');
$routes->get('/info_novillo/(:num)/edit', 'UpdateGanado::edit/$1', ['as' => 'admin_edit']);
$routes->post('/info_novillo/(:num)/edit', 'UpdateGanado::edit/$1', ['as' => 'admin_edit']);
$route['ganado/delete'] = 'DeleteGanado/delete';
$routes->get('/compra/inicio', 'NuevaCompra::inicio');
$routes->get('/compra/novillo', 'NuevaCompra::novillo');
$routes->get('/compra/proveedor', 'NuevaCompra::proveedor');
$routes->get('/compra/confirmar', 'NuevaCompra::compra');
$routes->post('/compra/inicio', 'NuevaCompra::inicio');
$routes->post('/compra/novillo', 'NuevaCompra::novillo');
$routes->post('/compra/proveedor', 'NuevaCompra::proveedor');
$routes->post('/compra/confirmar', 'NuevaCompra::compra');
$routes->get('/mostrar_compra', 'MostrarCompras::mostrar');
$routes->get('/compra_pdf', 'NuevaCompra::demoPDF');
$routes->get('/venta/inicio', 'NuevaVenta::inicio');
$routes->get('/venta/novillo', 'NuevaVenta::novillo');
$routes->get('/venta/cliente', 'NuevaVenta::cliente');
$routes->get('/venta/confirmar', 'NuevaVenta::venta');
$routes->post('/venta/inicio', 'NuevaVenta::inicio');
$routes->post('/venta/novillo', 'NuevaVenta::novillo');
$routes->post('/venta/cliente', 'NuevaVenta::cliente');
$routes->post('/venta/confirmar', 'NuevaVenta::venta');
$routes->get('/mostrar_venta', 'MostrarVentas::mostrar');
$routes->get('/venta_pdf', 'NuevaVenta::demoPDF');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
