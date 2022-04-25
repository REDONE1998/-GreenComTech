<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\HomeController::class ,'acceuil'])->name('index');

Route::get('/admin' ,[App\Http\Controllers\HomeController::class , 'admin'])->name('admin');

Auth::routes();
Route::get('/contact',[App\Http\Controllers\HomeController::class ,'contact'])->name('contact');
Route::get('/blog',[App\Http\Controllers\HomeController::class ,'blog'])->name('blog');
Route::get('/devis',[App\Http\Controllers\HomeController::class ,'devis'])->name('devis');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home'])->name('home1');