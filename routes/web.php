<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PostController;

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

// * WEB
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/index', '/', 301);

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/about-us', [AboutController::class, 'index'])->name('about');


// * PORTOFOLIO
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{slug}', [PortofolioController::class, 'show'])->name('portofolio.show');


// * BLOG
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');
Route::get('/category/{category}', [PostController::class, 'showCategory'])->name('blog.category');
Route::get('/search', [PostController::class, 'search'])->name('blog.search');
