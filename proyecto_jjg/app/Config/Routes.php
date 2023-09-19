<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(true);
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
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/terminosyusos', 'Home::terminos_y_usos');
$routes->get('/quienessomos', 'Home::about_us');


/* Rutas de registro de usuario */
$routes->get('/registro', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');


/* Rutas de login de usuario */
$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/logout', 'Login_controller::logout');

/* RUTAS DE PRODUCTO */
$routes->get('/crear', 'Producto_controller::index');
$routes->get('/agregar', 'Producto_controller::index');
$routes->get('/product-form', 'Producto_controller::creaProducto');
$routes->post('/enviar-prod', 'Producto_controller::store');
$routes->get('/editar/(:num)', 'Producto_controller::singleProducto/$1');
$routes->post('modificar/(:num)', 'Producto_controller::modificar/$1');
$routes->get('borrar/(:num)', 'Producto_controller::deletelogico/$1');
$routes->get('borrar-definitivo/(:num)', 'Producto_controller::deleteproducto/$1');
$routes->get('/eliminados', 'Producto_controller::eliminados');
$routes->get('activar/(:num)', 'Producto_controller::activarproducto/$1');

$routes->get('secciones', 'Producto_controller::secciones');
$routes->get('bebidas', 'Producto_controller::bebidas');
$routes->get('golosinas', 'Producto_controller::golosinas');
$routes->get('almacen', 'Producto_controller::almacen');
$routes->get('lacteos', 'Producto_controller::lacteos');


/* RUTAS PARA CARRITO */

//muestra todos los productos del catalogo
$routes->get('/todos_p', 'Carrito_controller::catalogo',['filter' => 'auth']);
//carga la vista carrito_parte_view
$routes->get('/muestro', 'Carrito_controller::muestra',['filter' => 'auth']);
//actualiza los datos del carrito
$routes->get('/carrito_actualiza','Carrito_controller::actualiza_carrito',['filter' => 'auth']);
//agregar los items al carrito
$routes->post('/carrito_agrega', 'Carrito_controller::add',['filter' => 'auth']);
//elimina un ítem seleccionado
$routes->get('carrito_elimina/(:any)','Carrito_controller::remove/$1',['filter' => 'auth']);
//eliminar todo el carrito
$routes->get('/borrar','Carrito_controller::borrar_carrito',['filter' => 'auth']);
//muestra las compras una vez que realizamos la misma
$routes->get('/carrito-comprar', 'Ventas_controller::comprarCarrito',['filter' => 'auth']);

$routes->get('/ventas', 'Ventas_controller::ventas',['filter' => 'auth']);
$routes->get('/factura/(:num)', 'Ventas_controller::factura/$1',['filter' => 'auth']);



/* RUTA PARA CONSULTA */
$routes->get('/consulta_no_leidos', 'Consultas_controller::noLeidos');
$routes->get('/consulta_leido/(:num)', 'Consultas_controller::leido/$1');
$routes->get('/consulta_reply/(:num)', 'Consultas_controller::reply/$1');
$routes->post('/enviar_respuesta', 'Consultas_controller::enviarRespuesta');


$routes->get('/consulta_contactos', 'Consultas_controller::principal');
$routes->get('/borrarconsulta/(:num)', 'Consultas_controller::borrarConsulta/$1');
$routes->post('/consulta', 'Consultas_controller::registrar_consulta');

/* RUTAS PARA CRUD USUARIOS */
$routes->get('/usuarios', 'Usuario_crud_controller::principal');
$routes->get('/borrar-usuario/(:num)','Usuario_crud_controller::deletelogico/$1');
$routes->get('/dadosbaja','Usuario_crud_controller::eliminados');
$routes->get('/activar-usuario/(:num)','Usuario_crud_controller::activarlogico/$1');
$routes->get('/bdusuario/(:num)','Usuario_crud_controller::activarlogico/$1');



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
