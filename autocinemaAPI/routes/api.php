<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//URL utilizada http://127.0.0.1:8000 + api + nivel + tablabd  = http://127.0.0.1:8000/api/v1/rols
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'rols'], function () {

        //http://127.0.0.1:8000/api/v1/rols
        Route::get('', 'RolController@index');
        //http://127.0.0.1:8000/api/v1/rols/$id
        Route::get('/{id}', 'RolController@show');
    });

    Route::group(['prefix' => 'ubicacions'], function () {
        //http://127.0.0.1:8000/api/v1/ubicacions
        Route::get('', 'UbicacionController@index');
        //http://127.0.0.1:8000/api/v1/ubicacions/$id
        Route::get('/{id}', 'UbicacionController@show');
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', 'AuthController@register');
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    });

    Route::group(['prefix' => 'clasificacions'], function () {
        //http://127.0.0.1:8000/api/v1/clasificacions
        Route::get('', 'ClasificacionController@index');
        //http://127.0.0.1:8000/api/v1/clasificacions/$id
        Route::get('/{id}', 'ClasificacionController@show');
    });

    Route::group(['prefix' => 'carteleras'], function () {
        //http://127.0.0.1:8000/api/v1/carteleras
        Route::get('', 'CarteleraController@index');
        //http://127.0.0.1:8000/api/v1/carteleras/all
        Route::get('all', 'CarteleraController@all');
        //http://127.0.0.1:8000/api/v1/carteleras/$id
        Route::get('/{id}', 'CarteleraController@show');
    });

    Route::group(['prefix' => 'peliculas'], function () {
        //http://127.0.0.1:8000/api/v1/peliculas
        Route::get('', 'PeliculaController@index');
        //http://127.0.0.1:8000/api/v1/peliculas/all
        Route::get('all', 'PeliculaController@all');
        //http://127.0.0.1:8000/api/v1/peliculas/$id
        Route::get('/{id}', 'PeliculaController@show');
    });

    Route::group(['prefix' => 'generos'], function () {
        //http://127.0.0.1:8000/api/v1/generos
        Route::get('', 'GeneroController@index');
        //http://127.0.0.1:8000/api/v1/generos/$id
        Route::get('/{id}', 'GeneroController@show');
    });

    Route::group(['prefix' => 'tipos'], function () {
        //http://127.0.0.1:8000/api/v1/tipos
        Route::get('', 'TipoController@index');
        //http://127.0.0.1:8000/api/v1/tipos/$id
        Route::get('/{id}', 'TipoController@show');
    });

    Route::group(['prefix' => 'productos'], function () {
        //http://127.0.0.1:8000/api/v1/productos
        Route::get('', 'ProductoController@index');
        //http://127.0.0.1:8000/api/v1/productos/all
        Route::get('all', 'ProductoController@all');
        //http://127.0.0.1:8000/api/v1/productos/$id
        Route::get('/{id}', 'ProductoController@show');
    });

    Route::group(['prefix' => 'categorias'], function () {
        //http://127.0.0.1:8000/api/v1/categorias
        Route::get('', 'CategoriaController@index');
        //http://127.0.0.1:8000/api/v1/categorias/$id
        Route::get('/{id}', 'CategoriaController@show');
    });

    Route::group(['prefix' => 'tiquetes'], function () {
        //http://127.0.0.1:8000/api/v1/tiquetes
        Route::get('', 'TiqueteController@index');
        //http://127.0.0.1:8000/api/v1/tiquetes/$id
        Route::get('/{id}', 'TiqueteController@show');
    });

    Route::group(['prefix' => 'reservas'], function () {
        //http://127.0.0.1:8000/api/v1/reservas
        Route::get('', 'ReservaController@index');
        //http://127.0.0.1:8000/api/v1/reservas/all
        Route::get('all', 'ReservaController@all');
        //http://127.0.0.1:8000/api/v1/reservas/$id
        Route::get('/{id}', 'ReservaController@show');
    });
});
