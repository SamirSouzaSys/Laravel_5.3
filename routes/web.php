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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['namespace' => 'Site'], function () {
  Route::get('/categoria/{id}', 'SiteController@categoria');
//Opcional - ?id
  Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');


// artisan make:controller SiteController
  Route::get('/', 'SiteController@index');

  Route::get('/contato', 'SiteController@contato');
});




//Route::get('/empresa', function () {
////    return view('empresa');
//    return "empresa";
//});
//
//Route::get('/contato', function () {
//    return view('contato');
//});

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

//Route::get('/nome/nome2/nome3', function(){
//  return "Rota Grande";
////  print "Rota Grande";
//})->name('rota.nomeada');
//
//Route::get('/', function(){
//  return redirect()->route('rota.nomeada');
//});

//Route::get('/categoria/{idCat}/nome-fixo/{prm2}',function($idCat, $prm2){
//  return "Posts da categoria {$idCat} - {$prm2}";
//});

//Route::get('/categoria2/{idCat?}',function($idCat = '-1'){
//  return "Posts da categoria {$idCat}";
//});
