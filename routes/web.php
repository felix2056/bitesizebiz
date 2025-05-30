<?php

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

// Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/', [App\Http\Controllers\IndexController::class, 'blog']);
Route::match(['get', 'post'], '/contact', [App\Http\Controllers\IndexController::class, 'contact']);

Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show']);
Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show']);
Route::get('/tag/{slug}', [App\Http\Controllers\TagController::class, 'show']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);