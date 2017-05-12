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
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/contato', function () {
    return view('contato');
});

//Route::post("/post", function(){
//  return 'Route Post';
//});

//Route::any('/any',function(){
//  return 'Route Any';
//});
//
//Route::match(['post','get'],'/match',function(){
//  return "rota match";
//});

Route::get('/nome/nome2/nome3', function(){
  return 'Rota Grande';
})->name('rota.nomeada');

Route::get('/', function(){
  return redirect()->route('rota.nomeada');
});
