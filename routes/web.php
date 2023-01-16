<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecieController;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [SpecieController::class, 'index'])->name('home');

Route::get('/home', [SpecieController::class, 'index']);
