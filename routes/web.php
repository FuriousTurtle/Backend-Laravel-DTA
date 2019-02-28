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

Route::get('/', 'Controller@home')->name('home');

Route::get('/product', 'Controller@product')->name('product');

Route::get('/home', 'Controller@home')->name('home');
Auth::routes();

Route::get('/produits-lunettes', 'Controller@prodvue')->name('prodvue');

Route::get('/produits-lentille', 'Controller@prodlentille')->name('prodlentille');

Route::get('/produits-soleil', 'Controller@prodsoleil')->name('prodsoleil');

Route::get('/profil', 'HomeController@index')->name('connexion');

Route::get('/panier', 'Controller@panier')->name('panier');

Route::get('/itemdel', 'Controller@panierdel')->name('panierdel');