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

Route::get('mesOffres', 'HomeController@mesOffres')->name('mesOffres');

Route::get('/profil/{user}', 'UserController@displayProfile')->name('userProfil');

Route::get('/mesCandidatures','UserController@showCandidatures')->middleware("auth")->name('user_candidatures');

Route::get('/OffresEmplois/{offre}/ListeCandidats', 'OffreEmploisController@listCandidats')->name('lestCandidats');

Route::get('/Candidature/{candidature}/Traiter', 'CandidatureController@traiter')->name('traiter_candidature');

Route::get('/profil/promote/{user}', 'UserController@promoteAdmin')->name('userPromote');

Route::get('/OffreEmplois/{offre}/Postuler', 'CandidatureController@postuler')->name('postuler');


Route::get('/Candidature/{cand}/Accept', 'CandidatureController@accept');

Route::get('/Candidature/{cand}/Refuse', 'CandidatureController@refuse');

Route::get('/profil/candidature/{id}','CandidatureController@display')->name('afficherCandidature');
Route::get('/profil/candidature/{id}/edit','CandidatureController@editer')->name('editerCandidature');
Route::get('/profil/candidature/{id}/delete','CandidatureController@delete')->name('deleteCandidature');
Route::post('/profil/candidature/{candidature}/edit','CandidatureController@saveEdition')->name('doEditerCandidature');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController')->only(['edit', 'update','destroy', 'show'])->middleware('auth');

Auth::routes();

Route::resource('user', 'UserController')->only(['edit', 'update', 'destroy', 'show'])->middleware('auth');

Route::resource('OffreEmplois', 'OffreEmploisController');



Route::get('/profil', function(){
    return view ('profil');
});

Route::get('/OffreEmplois/{offre}/changeFavoris', 'FavorisController@change')->middleware('auth')->name('favoris.change');

