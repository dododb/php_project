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

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout',
    'middleware' => 'auth'
]);

Route::get('{type}', 'ListeController@getListe')->where('type', 'activite|boutique');
Route::get('activite/soumettre', 'SoumettreController@getActiviteFormulaire');
Route::post('activite/soumettre', 'SoumettreController@setActivite');

Route::get('boutique/soumettre', 'SoumettreController@getProduitFormulaire');
Route::get('boutique/soumettre/image', 'SoumettreController@getImageFormulaire');
Route::post('boutique/soumettre', 'SoumettreController@setProduit');


Route::get('boutique/{idObject}', 'ProduitController@getProduit')->where('idObject', '[0-9]+');

Route::get('activite/{idObject}', 'ActiviteController@getActivite')->where('idObject', '[0-9]+');
Route::get('activite/{idObject}/galerie', 'GalerieController@getGalerie')->where('idObject', '[0-9]+');
Route::get('activite/{idObject}/galerie/{idPhoto}', 'PhotoGalerieController@getPhoto')->where('idObject', '[0-9]+')->where('idPhoto', '[0-9]+');
Route::post('activite/{idObject}/galerie/{idPhoto}', 'PhotoGalerieController@postComment')->where('idObject', '[0-9]+')->where('idPhoto', '[0-9]+');


Route::get('mentions-legales', function () {
    return view('mentionLegal');
});

/*
Route::get('/Gallerie/{id}', array {
'uses'=>
});
*/
/*  Route::get('/Accueil', function () {
    // Validate the request...
    return redirect('/accueil');
});*/
Auth::routes();

Route::group(['middleware' => ['auth']], function() { // if he is authentificate

    Route::get('/home', ['as' => 'home', 'use' => 'HomeController@index']);

});

Route::group(['middleware' => ['permission:bde']], function() { //if he is bde member

});

Route::group(['middleware' => ['permission:admin']], function() { //if he is admin
    Route::resource('users', 'UserController');

    Route::get('roles', ['as' => 'roles.index', 'uses' => 'RoleController@index']);
    Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create']);
    Route::post('roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store']);
    Route::get('roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);
    Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit',]);
    Route::patch('roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update']);
    Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy']);

    Route::post('boutique/{idObject}/delete', 'ProduitController@destroy')->where('idObject', '[0-9]+');
    Route::post('activite/{idObject}/delete', 'ActiviteController@destroy')->where('idObject', '[0-9]+');
    Route::post('activite/{idObject}/galerie/{idPhoto}/delete', 'PhotoGalerieController@destroy')->where('idObject', '[0-9]+')->where('idPhoto', '[0-9]+');
});


Route::get('imageUploadForm', 'ImageController@upload' );
Route::post('imageUploadForm', 'ImageController@store' );
Route::get('showLists', 'ImageController@show' );