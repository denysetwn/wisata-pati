<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\dataTableController;

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
Route::get('dashboardAdmin', [AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');
Route::get('uploadInformation', [UploadController::class, 'uploadInformation'])->name('uploadInformation');
Route::get('dataTable', [dataTableController::class, 'dataTable'])->name('dataTable');
