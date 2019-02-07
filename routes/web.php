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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('exemple');
});

Route::get('/userlist', 'UserController@userList')->middleware("auth")->name('userlist');

Route::get('/profil/{user}', 'UserController@displayProfile')->name('userProfil');

Route::get('/profil/promote/{user}', 'UserController@promoteAdmin')->name('userPromote');

//TEST

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController')->only(['edit', 'update','destroy', 'show'])->middleware('auth');

Auth::routes();

Route::resource('user', 'UserController')->only(['edit', 'update', 'destroy', 'show'])->middleware('auth');

Route::resource('OffreEmplois', 'OffreEmploisController');

Route::get('/profil', function(){
    return view ('profil');
});

