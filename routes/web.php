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
/** Lien post pour ajouter un etudiant  */
Route::post('/etudiants/add', 'EtudiantController@add')->name('addEtudiant');
/** Lien details pour afficher l'information sur un etudiant */
Route::get('/etudiants/show/{id}', 'EtudiantController@show')->name('showEtudiant')->where('id','[0-9]+');
/** Lien modifier pour afficher le formulaire de modification d'un etudiant */
Route::get('/etudiants/edit/{id}', 'EtudiantController@edit')->name('editEtudiant')->where('id','[0-9]+');
/** Lien modifier pour valider la modification */
Route::put('/etudiants/update/{id}', 'EtudiantController@update')->name('updateEtudiant')->where('id','[0-9]+');
/** Lien supprimer pour supprimer un etudiant */
Route::get('/etudiants/delete/{id}', 'EtudiantController@delete')->name('deleteEtudiant')->where('id','[0-9]+');
/** Lien retour pour retourner en arriere */
Route::get('/etudiants/back', 'EtudiantController@goback')->name('back');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
