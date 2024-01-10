<?php

use App\Http\Controllers\ApplicationCotroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// DATA
$addApp = 0;

// View
Route::view('', 'pages.main.index', compact('addApp'))->name('main');
Route::view('admin', 'pages.admin.index')->name('admin');

// POST
// Register 
Route::post('addApplications', [ApplicationCotroller::class, 'addApplications'])->name('addApplications');
Route::post('deleteApplications', [ApplicationCotroller::class, 'deleteApplications'])->name('deleteApplications');
Route::post('signInAdmin', [LoginController::class, 'signInAdmin'])->name('signInAdmin');

