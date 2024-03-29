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

//Delete
Route::delete('/delete/{id}', [SpecieController::class, 'destroy'])->name('deleteSpecie')->middleware('isadmin', 'auth');
//Create
Route::get('/create', [SpecieController::class, 'create'])->name('createSpecie')->middleware('isadmin', 'auth');
Route::post('/', [SpecieController::class, 'store'])->name('storeSpecie')->middleware('isadmin', 'auth');
//Edit
Route::get('/edit/{id}', [SpecieController::class, 'edit'])->name('editSpecie')->middleware('isadmin', 'auth');
//Update
Route::get('/edit/{id}', [SpecieController::class, 'edit'])->name('editSpecie')->middleware('isadmin', 'auth');
Route::patch('/specie/{id}', [SpecieController::class, 'update'])->name('updateSpecie')->middleware('isadmin', 'auth');
//Show
Route::get('/show/{id}', [SpecieController::class, 'show'])->name('showSpecie');

//sighting
Route::get('/sighting/{id}', [SpecieController::class, 'sighting'])->name('sighting')->middleware('auth');



