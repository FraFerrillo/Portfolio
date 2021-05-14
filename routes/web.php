<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class, 'index']);
Route::get('/cerca', [PublicController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//? Create
Route::get('/crea/annuncio', [AdController::class, 'create'])->name('ads.create');
Route::post('/salva/annuncio', [AdController::class, 'store'])->name('ads.store');
//? READ
Route::get('/visualizza/annuncio/{ad}',[AdController::class,'show'])->name('ads.show');
Route::get ('/category/{name}/{id}/ads', [PublicController::class, 'adByCategory'])->name('public.ads.category');

//!REVISOR AREA
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.home');

Route::post('/revisor/ad/{id}/accept',[RevisorController::class,'accept'])->name('revisor.accept');

Route::post('/revisor/ad/{id}/reject',[RevisorController::class,'reject'])->name('revisor.reject');
