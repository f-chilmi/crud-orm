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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/coba', function(){
    return "halo";
});

Route::get('/tes/{nama_depan}/dan/{nama_belakang}', 'PerkenalanController@hai');

Route::get('/perkenalan/{nama_depan}/dan/{nama_belakang}', 'PerkenalanController@halo');

Route::get('/', function(){
    return view('halaman1');
});

Route::get('/form', 'PerkenalanController@form');

Route::get('/welcome', 'PerkenalanController@welcome');

Route::get('/master', function(){
    return view('adminLte.master');
});

Route::get('/data', function(){
    return view('adminLte.contents.data');
});

Route::get('/data_tables', function(){
    return view('adminLte.contents.dataTables');
});

// CRUD
Route::get('/posts/create/profile', 'postController@createProfile');
Route::post('/posts/profile', 'postController@storeProfile');
Route::get('/posts/create', 'postController@create');
Route::post('/posts', 'postController@store');
