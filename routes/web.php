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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontendController::class)->prefix('front')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/blog', 'blog')->name('front.blog');
        Route::get('/portfolio', 'portfolio')->name('front.portfolio');
    });