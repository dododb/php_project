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

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/{idObject}/Gallerie/{idPhoto}', function ($idObject, $idPhoto) {

    return view('PhotoGalerie')->with('idPhoto', $idPhoto);
})->where('idPhoto', '[0-9]+');

Route::get('/{idObject}/Gallerie', function ($idObject) {
    return view('Gallerie')->with('idObject', $idObject);
});
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout',
    'middleware' => 'auth'
]);
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

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');

    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleControl  ler@destroy','middleware' => ['permission:role-delete']]);


}); 