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

// * WEB
Route::get('/', function () {
    return view('index');
})->name('home');

Route::redirect('/index', '/', 301); // Redirect /index to /

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');


// * PORTOFOLIO
Route::get('/portfolio', function () {
    return view('portofolio.portofolio');
})->name('portfolio');

Route::get('/portfolio-detail', function () {
    return view('portofolio.portofolio');
})->name('portfolio');


// * BLOG
Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');
