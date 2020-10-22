<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', 'HomeController@index')->name('home');

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
    Route::group(['middleware' => ['web','auth:admin']], function () {

    //acceptaion agence
    Route::get('liste_agences_accepter', 'ContratAdminController@index')->name('admin.contrat');
    Route::get('liste_agences_accepter/{id}', 'ContratAdminController@index')->name('admin.contrat');
    Route::get('liste_agences_enattente', 'AgenceController@store')->name('admin.liste_agences');
    Route::get('liste_agences_enattente', 'AgenceController@index')->name('admin.liste_agences');
    Route::get('liste_agences_enattente/{id}', 'AgenceController@accepterAgence')->name('admin.liste_agences.accepterAgence');
    
    //promotion
    Route::get('liste_promo', 'PromoAdminController@index')->name('admin.promo.liste_promo');
    Route::get('detail_promo/{id}', 'PromoAdminController@show')->name('admin.promo.promo_detail');
    //Route::resource('/promo_edit', 'PromoAdminController');
    Route::get('promo_edit/{id}', 'PromoAdminController@edit')->name('admin.promo.promo_edit');
    Route::get('promo/update/{id}', 'PromoAdminController@update')->name('admin.promo.update');
    Route::get('promo/edit/{id}', 'PromoAdminController@edit')->name('admin.promo.edit');
    Route::get('promo/delete/{id}','PromoAdminController@destroy')->name('admin.promo.promo_delete');
    Route::get('add_promo', 'PromoAdminController@create')->name('admin.promo.add_promo');
    Route::get('add_promo/store', 'PromoAdminController@store')->name('admin.promo.store');

    //admin profil
    Route::get('profil', 'AdminProfileController@index')->name('admin.profil.profil');
    Route::get('profil/update/{id}', 'AdminProfileController@update')->name('admin.profil.update');
    Route::get('profil/edit/{id}', 'AdminProfileController@edit')->name('admin.profil.edit');

    //admin chambre
    Route::get('chambre', 'AdminChambreController@index')->name('admin.chambre.lister_chambre');
    Route::get('add_chambre', 'AdminChambreController@create')->name('admin.chambre.add_chambre');
    Route::get('add_chambre/store', 'AdminChambreController@store')->name('admin.chambre.store');
    Route::get('chambre/update/{id}', 'AdminChambreController@update')->name('admin.chambre.update');
    Route::get('chambre/edit/{id}', 'AdminChambreController@edit')->name('admin.chambre.edit');
    Route::get('chambre/delete/{id}','AdminChambreController@destroy')->name('admin.chambre.delete');

     //Reclamations
    Route::get('reclamation', 'ReclamationController@index')->name('admin.reclamation.tout_reclamation');



    

});

});
Route::group(['middleware' => ['web','auth']], function () {
  
    Route::resource('/list', 'ListHotelsController' );
   // Route::resource('/list', 'ListHotelsController' );
    Route::get('list/demande/{id}','ListHotelsController@demande')->name('hotels.demande');

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/reclamation', 'AgenceReclamController@index')->name('reclamation.historique_reclamattion');
    Route::get('add_reclamation', 'AgenceReclamController@create')->name('reclamation.ajouter_reclam');
    Route::get('add_reclamation/store', 'AgenceReclamController@store')->name('reclamation.ajouter_reclam.store');

    

  });