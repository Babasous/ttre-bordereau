<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/suivi', function () {
    return view('suivi');
})->middleware(['auth'])->name('suivi');

Route::get('/bordereau', [GlobalController::class, 'show'])->middleware(['auth'])->name('bordereau');

Route::get('/codeTracking', function () {
    return view('codeTracking');
})->middleware(['auth'])->name('codeTracking');

Route::get('/fiche', function () {
    return view('fiche');
})->middleware(['auth'])->name('fiche');

require __DIR__.'/auth.php';
