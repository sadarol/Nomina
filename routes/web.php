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

//Vista Usuario
Route::get('/usuario/',['as' => 'userCreate', function() {
    return view('user.create');
}]);

//Vista Listar Usuario
Route::get('/listausuario/',['as' => 'userlist', function() {
    return view('user.list');
}]);

//Vista Novedades
Route::get('/novedad/',['as' => 'noveltyCreate', function() {
    return view('novelty.create');
}]);

//Vista Listar Novedad
Route::get('/listanovedades/',['as' => 'noveltylist', function() {
    return view('novelty.list');
}]);

//Vista Sucursales
Route::get('/sucursales/',['as' => 'sucursalCreate', function() {
    return view('sucursal.create');
}]);

//Vista Listar Sucursales
Route::get('/listasucursales/',['as' => 'sucursallist', function() {
    return view('sucursal.list');
}]);


//Vista nomina
Route::get('/nomina/',['as' => 'payrollCreate', function() {
    return view('payroll.create');
}]);

//Vista Autoliquidación
Route::get('/autoliquidación/',['as' => 'self-assessmentCreate', function() {
    return view('self-assessment.create');
}]);


//Vista principal
/*
Route::get('home',['as' => 'home', function () {
    return view('/home/');
}]);
*/

Route::get('/', function () {
    return view('home.index');
});




