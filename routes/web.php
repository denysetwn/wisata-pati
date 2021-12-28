<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Manager\UnggahController;
use App\Http\Controllers\admin\Manager\DataController;
use App\Http\Controllers\WisataController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('wisata', [WisataController::class, 'index'])->name('wisata');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', [AuthController::class, 'index'])->name('login');
        Route::post('login', [AuthController::class, 'login']);
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::namespace('Manager')->middleware(['admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('unggah', [UnggahController::class, 'index'])->name('unggah');
        Route::post('unggah/wisata', [UnggahController::class, 'unggah'])->name('unggah.wisata');
        Route::get('data', [DataController::class, 'index'])->name('data');
    });

    
});
