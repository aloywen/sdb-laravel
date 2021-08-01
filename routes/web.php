<?php

use Illuminate\Support\Facades\Route;

// home
Route::get('/', 'HomeController@index');
Route::get('/syarat-ketentuan', 'HomeController@syarat');
Route::get('/pilih-box', 'HomeController@pilih');
Route::get('/formulir/{id}', 'HomeController@form');
Route::post('/formulir/store', 'HomeController@store');

// login user
Route::get('/login-visit', 'Auth\AuthController@login_visit');
Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/login-v', 'Auth\AuthController@login_v');

//visit user
Route::middleware(['authen'])->group(function () {

    Route::get('/visit', 'VisitController@index');
    Route::get('/tambah-kunjungan/{id}', 'VisitController@tambah_kunjungan');
    Route::post('/addKunjungan', 'VisitController@addKunjungan');
    Route::get('/pembayaran-user', 'VisitController@pembayaran_user');
    Route::get('/akhir-sewa', 'VisitController@akhir_sewa');
    Route::patch('/selesai-sewa', 'VisitController@selesai')->name('selesai');
    
});


// admin

// login
Route::get('/login-admin', 'Auth\AuthController@login_admin');
Route::get('/logout-a', 'Auth\AuthController@logout_a');
Route::post('/login-a', 'Auth\AuthController@login_a');

//pendingan
Route::middleware(['authen'])->group(function () {

    Route::get('/pending', 'AdminController@index');
    Route::get('/detail-pending/{id}', 'AdminController@detail');
    Route::patch('/detail-pending/konfirmasi/{id}', 'AdminController@konfirmasi')->name('pending.update');

    //pembayaran
    Route::get('/pembayaran', 'AdminController@pembayaran');
    Route::get('/detail-pembayaran/{id}', 'AdminController@detail_pembayaran');
    Route::post('/tambah-pembayaran', 'AdminController@bayar');

    //history
    Route::get('/history', 'AdminController@history');
    Route::get('/detail-history/{id}', 'AdminController@detail_history');
    Route::get('/detail-box-history/{id}', 'AdminController@detail_box_history');

    //visitor
    Route::get('/visitor', 'AdminController@visitor'); 
    Route::patch('/blokirVisit', 'AdminController@blokirVisit')->name('blokir.visit'); 
    Route::patch('/bukaVisit', 'AdminController@bukaVisit')->name('buka.visit'); 

    //admin
    Route::get('/admin', 'AdminController@admin'); 
    Route::get('/tambah-admin', 'AdminController@tambah_admin'); 
    Route::post('/addAdmin', 'AdminController@addAdmin'); 

});