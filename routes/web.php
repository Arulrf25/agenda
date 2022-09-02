<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth');
});

Route::get('admin', function () {
    return view('layouts.master');
})->middleware('auth');

Route::get('dashboard', [App\Http\Controllers\AgendaController::class, 'dashboard']);
Route::get('dashboard2', [App\Http\Controllers\AgendaController::class, 'dashboard2']);

Route::get('auth', function () {
    return view('auth');
});

Route::get('/details', 'DetailsController@index')->name('details.index')->middleware('auth');
Route::post('/details/store', 'DetailsController@store');
Route::get('/details/cetakUsers', 'DetailsController@cetakUsers')->name('details.cetak_users');
Route::delete('/details/destroy/{id?}', 'DetailsController@destroy')->name('details.destroy');

Route::get('/logbook', 'LogbookController@index')->name('logbook.index')->middleware('auth');
Route::post('/logbook/create', 'LogbookController@create');
Route::post('/logbook/store', 'LogbookController@store');
Route::post('/logbook/cari', 'LogbookController@cari')->name('cari');
Route::get('/logbook/cetakLogbook', 'LogbookController@cetakLogbook')->name('logbook.cetak_logbook');
Route::get('/logbook/edit/{id?}', 'LogbookController@edit')->name('logbook.edit');
Route::put('/logbook/update/{id?}', 'LogbookController@update')->name('logbook.update');
Route::delete('/logbook/destroy/{id?}', 'LogbookController@destroy')->name('logbook.destroy');
Route::get('/logbook/cetak-logbook-form', 'LogbookController@cetakForm')->name('logbook.cetak-logbook-form');
Route::get('/logbook/cetak-logbook-pertanggal/{tglawal}/{tglakhir}', 'LogbookController@cetakLogbookPertanggal')->name('logbook.cetak-logbook-pertanggal');
Route::get('/admin', 'LogbookController@countLogbook')->name('logbook.buku_tamu');

Route::get('/agenda', 'AgendaController@index')->name('agenda.index')->middleware('auth');
Route::post('/agenda/create', 'AgendaController@create');
Route::post('/agenda/store', 'AgendaController@store');
Route::post('/agenda/search', 'AgendaController@search')->name('search');
Route::get('/agenda/cetak', 'AgendaController@cetakPdf')->name('agenda.cetak');
Route::get('/agenda/edit/{id?}', 'AgendaController@edit')->name('agenda.edit');
Route::put('/agenda/update/{id?}', 'AgendaController@update')->name('agenda.update');
Route::delete('/agenda/destroy/{id?}', 'AgendaController@destroy')->name('agenda.destroy');
Route::get('/agenda/cetak-agenda-form', 'AgendaController@cetakForm')->name('agenda.cetak-agenda-form');
Route::get('/agenda/cetak-agenda-pertanggal/{tglawal}/{tglakhir}', 'AgendaController@cetakAgendaPertanggal')->name('agenda.cetak-agenda-pertanggal');
Route::get('/admin', 'AgendaController@countAgenda')->name('layouts.master');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/auth', [App\Http\Controllers\AuthController::class, 'index'])->name('auth');
