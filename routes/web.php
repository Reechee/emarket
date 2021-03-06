<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/login','loginController@index');

Route::get('prueba',function(){
	return "hola desde web.php";
});

Route::get('nombre/{nombre}',function($nombre){
	return "hola soy:".$nombre;
});



Route::get('/', function () {
    return view('welcome');
});
*/


//Route::get('enc','encargadoController@index');
Route::get('solicitudes','solicitudController@index');
Route::get('finales','listaFinalizadosController@index');

Route::get('index{nombre}',
        ['as'=> 'index', 'uses'=>'listaCatController@index']
);

Route::resource('login','loginController');
Route::resource('nuevousuario','nuevousuarioController');
Route::resource('productos','listaCatController');
Route::resource('recepciones','listaRecepcionesController');
Route::resource('pendientes','listaPendientesController');
Route::resource('olvido','olvidoController');

