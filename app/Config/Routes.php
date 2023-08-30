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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ==========================================================
// !! Catatan gw bikin: cek file controller > Home/Coba, liat juga bagian View > welcome_message !!
// !! cara baca, $routes->get('url', 'file(Contorller > nama_file.php)::methodnya'); !!
// $routes->get('/', 'Home::index');
// !! metode request get, post, add, delete. Contohnya !!
$routes->add('/coba', 'Coba::index');
// !! bisa bikin ke gini juga !!
$routes->get('/coba/bad', function () {
    echo "hello worlds sucker";
});
// !! bisa bikin ke gini juga, "(:any) = apapun yang ditulis user", (:num) = angka, (:segment) = apappun  kecuali ('\' or '/'), (:alpha) = alpahbet, ,(:alphanum) = alpahbet dam angka no symbol" !!
// !! $1 = ketikan pertama setelah slash, $2 = ketikan kedua setelah $1. dan seterusnya !!
// ini namamnya placeholder
$routes->get('/coba/(:any)/(:num)', 'Coba::index/$1/$2');

// !! karena ada 2 method di "/coba/", kalo pake diatas '/coba/(:any)/(:num)'. saat kita memanggil methodyang lain akan auto ke method "index", lalu bagaimana "cupu"? Gini caranya !!
// !! bikin jalur baru !!
$routes->get('/coba/cupu', 'Coba::cupu');
// cek: http://localhost:8080/coba/cupu
// !! optional !!
$routes->get('/coba/index', 'Coba::index');
// cek: http://localhost:8080/coba/index


// !! buat admin !!
$routes->get('/users', 'Admin\User::index');
// cek: http://localhost:8080/users



// we use it now, pertemuan ke 2
$routes->get('/pages', 'Pages::index');

// pertemuan ke - 5 (part 2) 
$routes->get('/komik/', 'Komik::index');
// $routes->get('/komik/index/(:segment)', 'Komik::detail/$1');

// pertemuan ke - 8
$routes->get('/komik/index/(:any)', 'Komik::detail/$1');


// pertemuan ke - 8
// delete button
$routes->delete('/komik/index/(:num)', 'Komik::delete/$1');
//edit button 
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');

// ==========================================================





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
