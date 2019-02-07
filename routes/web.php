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
    return view('exemple');
});

//TEST
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::resource('user', 'UserController')->only(['edit', 'update', 'destroy', 'show'])->middleware('auth');
=======



Route::resource('OffreEmplois', 'OffreEmploisController');

Route::get('/profil', function(){
    return view ('profil');
});
>>>>>>> 302f057a9cc100b8cc1e9df81a15f9102e4fe819
