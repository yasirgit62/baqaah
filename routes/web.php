<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
$router->get('/cart', function() {
    return view('main.cart.index');
});
$router->get('/confirmation', function() {
    return view('main.confirmation.index');
});
$router->get('/contact', function() {
    return view('main.contact.index');
});
$router->get('/favorites', function() {
    return view('main.favorites.index');
});
$router->get('/flowers-list', function() {
    return view('main.flowers-list.index');
});
$router->get('/main', function() {
    return view('main.main.index');
});
$router->get('/florist', function() {
    return view('main.florist.index');
});
Route::group(['middleware' => ['web']], function ($router) {
    Route::group(['prefix' => 'main'], function($router) {
        $router->get('/florist/{id}', 'mainFloristController@index');
        $router->get('/flower-detail/{id}', 'mainFloristController@flower_detail');
        $router->get('/home', 'mainFloristController@home');
        $router->get('/all_products', 'mainFloristController@all_products');
        $router->post('/all_products', 'mainFloristController@my_query');
    });
    Route::group(['prefix' => 'florist'], function($router) {

        $router->get('/login', 'FloristAuthController@login');
        $router->post('/login', 'FloristAuthController@handleLogin');
        $router->post('/sign-up', 'FloristAuthController@registration');
        Route::group(['prefix' => 'profile'], function($router) {

            $router->get('/gift', 'FloristController@gift');
            $router->get('/edit', 'FloristController@edit');
            $router->post('/edit/{id}', 'FloristController@update_info');
            $router->post('/update_delivery/{id}', 'FloristController@update_delivery');
            $router->post('/update_password/{id}', 'FloristController@update_password');
        });
        Route::group(['prefix' => 'gift'], function($router) {

            $router->get('/index', 'GiftController@index');
            $router->get('/edit/{id}', 'GiftController@edit');
            $router->post('/edit/{id}', 'GiftController@update');
            $router->get('/add', 'GiftController@add');
            $router->post('/add', 'GiftController@insert');
        });
        Route::group(['prefix' => 'product'], function($router) {

            $router->get('/index', 'ProductController@index');
            $router->get('/edit/{id}', 'ProductController@edit');
            $router->post('/edit/{id}', 'ProductController@update');
            $router->get('/add', 'ProductController@add');
            $router->post('/add', 'ProductController@insert');
        });
    });
});
