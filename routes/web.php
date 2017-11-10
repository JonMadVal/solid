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
/*
Route::get('/', function () {
    return view('welcome');
});

*/


Route::get('/createBeneficio', 'BeneficioController@create');
Route::get('/getAllBeneficio', 'BeneficioController@getAll');
Route::get('/getBeneficio/{id}', 'BeneficioController@getById');
Route::get('/updateBeneficio/{id}', 'BeneficioController@update');
Route::get('/deleteBeneficio/{id}', 'BeneficioController@delete');

Route::get('/createResponsabilidad', 'ResponsabilidadController@create');
Route::get('/getAllResponsabilidad', 'ResponsabilidadController@getAll');
Route::get('/getResponsabilidad/{id}', 'ResponsabilidadController@getReponsabilidad');
Route::get('/updateResponsabilidad/{id}', 'ResponsabilidadController@update');
Route::get('/deleteResponsabilidad/{id}', 'ResponsabilidadController@delete');


Route::get('/createPersona', 'PersonaController@create');
Route::get('/updatePersona', 'PersonaController@update');
Route::get('/getPersona/{id}', 'PersonaController@getPersona');
Route::get('/deletePersona/{id}', 'PersonaController@delete');
Route::get('/getAllPersona', 'PersonaController@getAllPersonas');


Route::get('/createEmpleado', 'EmpleadoController@create');
Route::get('/getEmpleado/{id}', 'EmpleadoController@getEmpleado');
Route::get('/getEmpleados', 'EmpleadoController@getAllEmpleado');
Route::get('/updateEmpleado', 'EmpleadoController@updateEmpleado');
Route::get('/deleteEmpleado/{id}', 'EmpleadoController@deleteEmpleado');


