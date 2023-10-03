<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\PagePetameController;

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

//first page
Route::get('/', [StartController::class, 'index']);

//test2
Route::get('/page-pertama', [PagePetameController::class, 'page_submit']);


//example
Route::get('/start', [StartController::class, 'index']);
Route::get('/create-new', [StartController::class, 'create_new']);
Route::post('/create-new/submit', [StartController::class, 'save_submit']);
Route::get('/edit/{id}', [StartController::class, 'edit']);
Route::post('/edit/submit', [StartController::class, 'save_submit']);
Route::get('/remove/{id}', [StartController::class, 'remove']);

