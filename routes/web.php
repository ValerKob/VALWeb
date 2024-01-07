<?php

use App\Http\Controllers\ApplicationCotroller;
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

// POST
// Register 
Route::post('addApplications', [ApplicationCotroller::class, 'addApplications'])->name('addApplications');