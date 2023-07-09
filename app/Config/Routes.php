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
$routes->setDefaultController('Home');
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

// El formato es:
//$routes -> ('/nombre de la sección', 'Controlador:función de controlador');
$routes->get('/', 'Home::index');   //Recibe parametros por el metodo get
$routes->add('/contactos', 'Home::contacto');   //add es una ruta estatica
$routes->get('/contacto', 'ContactoController::index');
//$routes->get('/catalogo/(:num)', 'ContactoController::catalogo/$1'); //Pasamos datos por GET, en este caso debe ser un número (:num)
$routes->get('/catalogo', 'ContactoController::catalogo');

$routes->get('/formulario', 'Home::formulario'); //ejemplo de formulario
$routes->post('/envioPost', 'Home::enviaPost'); //ejemplo de Post del formulario


$routes->get('/inicio', 'Home::inicio'); //se inserta bootstrap local


//$routes->get('/libros', 'Home::libros', ['as' => 'libro']);
// **(ruta a mostrar, controlador::función, ['as' => Nombre de la ruta])

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
