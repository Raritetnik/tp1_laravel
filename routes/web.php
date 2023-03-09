<?php

use App\Http\Controllers\EtudientController;
use App\Http\Controllers\VilleController;
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

Route::controller(EtudientController::class)->group(function () {
    Route::get('/', 'index')->name('etudient.index');
    Route::get('etudient', 'index')->name('etudient.index');
    Route::get('etudient/{etudient}', 'show')->name('etudient.show');
    Route::get('etudient-create', 'create')->name('etudient.create');
    Route::post('etudient-create', 'store')->name('etudient.store');
    Route::get('etudient-edit/{etudient}', 'edit')->name('etudient.edit');
    Route::put('etudient-edit/{etudient}', 'update')->name('etudient.update');
    Route::delete('etudient-edit/{etudient}', 'destroy')->name('etudient.delete');
});

Route::controller(VilleController::class)->group(function () {
    Route::get('ville', 'index')->name('ville.index');
    Route::get('ville/{ville}', 'show')->name('ville.show');
    Route::get('ville-create', 'create')->name('ville.create');
    Route::post('ville-create', 'store')->name('ville.store');
    Route::get('ville-edit/{ville}', 'edit')->name('ville.edit');
    Route::put('ville-edit/{ville}', 'update')->name('ville.update');
    Route::delete('ville-edit/{ville}', 'destroy')->name('ville.delete');
});
