<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/ejemplo', function()
{  
	$data['saludo'] = "hello";
	$data['frutas'] = array('pera', 'manzana', 'tomate');
	$data['estudiantes'] = array(
			array('nombre' => 'juan', 'edad' => '28'),
			array('nombre' => 'pedro', 'edad' => '26'),
			array('nombre' => 'ana', 'edad' => '25')
		);
	return View::make('ejemplo', $data);
});
Route::get('/plantillas', function()
{
	return View::make('extiende');
});
Route::get('/myapp', function()
{
	return View::make('myapp.app');
});
Route::get('/users', function()
{
	$data['users'] = array(array('nombre' => 'Yamid Viloria', 'edad' => '23', 'activo' => 'si'), 
						array('nombre' => 'Juan Perez', 'edad' => '19', 'activo' => 'si'),
						array('nombre' => 'Maria Gonzales', 'edad' => '20', 'activo' => 'no'),
						array('nombre' => 'Pedro artinez', 'edad' => '26', 'activo' => 'si'),
						array('nombre' => 'Ana Suarez', 'edad' => '17', 'activo' => 'no'));
	return View::make('myapp.users', $data);
});