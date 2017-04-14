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

Route::get('accueil', function () {
    return view('Accueil');
});

Route::get('/{idObject}/gallerie/{idPhoto}', function ($idObject, $idPhoto) {

    return view('Photogalerie')->with('idPhoto', $idPhoto);
})->where('idPhoto', '[0-9]+')->where('idPhoto', '[0]+');

Route::get('/{idObject}/gallerie', function ($idObject) {
    return view('Gallerie')->with('idObject', $idObject);
});

Route::get('/', function () {
    Redirect::to('Accueil');
});
/*
Route::get('/Gallerie/{id}', array {
'uses'=>return ;
});
*/