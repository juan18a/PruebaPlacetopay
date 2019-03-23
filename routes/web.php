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

Route::get('/', function () {
    return view('Pay');

});


Route::get('/Payment', 'PlacetoPayController@Payment');


Route::get('/response', 'ResumenController@VerificarPago');
Route::get('/resumen', 'ResumenController@ResumenTransations');

