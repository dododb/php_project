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

Route::get('Accueil', function () {
    return view('Accueil');
});

Route::get('/{idObject}/Gallerie/{idPhoto}', function ($idObject, $idPhoto) {

    return view('PhotoGalerie')->with('idPhoto', $idPhoto);
})->where('idPhoto', '[0-9]+');

Route::get('/{idObject}/Gallerie', function ($idObject) {
    return view('Gallerie')->with('idObject', $idObject);
});

/*
Route::get('/Gallerie/{id}', array {
'uses'=>
});
*/