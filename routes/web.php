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













Route::get('{type}', 'ListeController@getListe')->where('type', 'activite|boutique');

Route::get('boutique/{idObject}', 'ProduitController@getProduit')->where('idObject', '[0-9]+');

Route::get('activite/{idObject}', 'ActiviteController@getActivite')->where('idObject', '[0-9]+');


Route::get('{type}/{idObject}/galerie', 'GalerieController@getGalerie')->where('type', 'activite|boutique')->where('idObject', '[0-9]+');

Route::get('{type}/{idObject}/galerie/{idPhoto}', 'PhotoGalerieController@getPhoto')->where('type', 'activite|boutique')->where('idObject', '[0-9]+')->where('idPhoto', '[0-9]+');
