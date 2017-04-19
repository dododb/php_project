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

Route::get('boutique/{idObject}', 'ProduitController@getProduit')->where('idObject', '[0-9]+');
Route::get('boutique/{idObject}/delete', 'ProduitController@deleteProduit')->where('idObject', '[0-9]+');
Route::post('boutique/{idObject}', 'ProduitController@destroy')->where('idObject', '[0-9]+');


Route::get('activite/{idObject}', 'ActiviteController@getActivite')->where('idObject', '[0-9]+');
Route::get('{type}/{idObject}/galerie', 'GalerieController@getGalerie')->where('type', 'activite|boutique')->where('idObject', '[0-9]+');
Route::get('{type}/{idObject}/galerie/{idPhoto}', 'PhotoGalerieController@getPhoto')->where('type', 'activite|boutique')->where('idObject', '[0-9]+')->where('idPhoto', '[0-9]+');


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

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');

    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:admin']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:admin']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:admin']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:admin']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:admin']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:admin']]);


});
Route::get('imageUploadForm', 'ImageController@upload' );
Route::post('imageUploadForm', 'ImageController@store' );
Route::get('showLists', 'ImageController@show' );