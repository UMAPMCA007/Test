<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/vj',[MainController::class,'viewJob'])->name('view-job');
Route::get('/aj',[MainController::class,'addJob'])->name('add-job');
Route::post('/pp',[MainController::class,'postPart'])->name('post-part');
Route::post('/pj',[MainController::class,'postJob'])->name('post-job');
