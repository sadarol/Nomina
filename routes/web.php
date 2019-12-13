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

//Vista empleados

//Vista lstar empleados
Route::get('/lista/empleados',['as' => 'employeelist',  'uses' => 'EmployeeController@index']);

//Vista de crear empleados
Route::get('/empleado/create',['as' => 'employeeCreate',  'uses' => 'EmployeeController@create']);
//Vista editar empleados
Route::get('/empleado/{id}/editar',['as' => 'employeeEdit',  'uses' => 'EmployeeController@edit']);
//guardar empleados
Route::post('/empleados',['as' => 'employeeStore', 'uses' => 'EmployeeController@store']);
//Vista show detallada
Route::get('/empleados/{id}',['as' => 'employeeShow', 'uses' => 'EmployeeController@show']);
//metodo update
Route::put('/empleados/{id}',['as' => 'employeeUpdate', 'uses' => 'EmployeeController@update']);
//metodo eliminar
Route::delete('/empleados/{id}',['as' => 'employeeDelete', 'uses' => 'EmployeeController@destroy']);

//Route::resource('empleados' , 'EmployeeController');
Route::get('/', function () {
    return view('auth.login');
});

//Esta es la ruta del index de la plantilla
Route::get('/', function () {
    return view('home.index');
})->name('inicio');


Auth::routes();

Route::get('/reset', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/cerrado',['as' => 'logout', 'uses' => 'LoginController@logout']);



