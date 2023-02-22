<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Product Page
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'marbel']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelandfriend']);
    Route::get('/riri-story-books', [ProductController::class, 'riri']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkids']);

});

// News Page
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{id}', [NewsController::class, 'newsparam']);


// Program Page
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'industri']);
});

// About Us Page
Route::get('/about-us', [AboutController::class, 'about']);


// Contact Us Page
Route::resource('/contact-us',ContactController::class);
