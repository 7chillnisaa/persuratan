<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;


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
    return redirect()->route('login'); // Arahkan ke halaman login
})->name('home');

Route::resource('surat',SuratController::class)->middleware('auth');


Route::get('/sesi', [SessionController::class, 'index'])->name('login'); 
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.post'); 
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});