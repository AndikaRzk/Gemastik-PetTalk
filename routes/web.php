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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/signIn', function () {
//     return view('SignIn');
// })->name('signIn');

Route::get('/signin', function () {
    return view('SignIn');
})->name('signin');

Route::get('/signup', function () {
    return view('SignUp');
})->name('signup');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/adopsi', function () {
    return view('adopsi');
})->name('adopsi');

Route::get('/Form_Adopsi', function () {
    return view('form_adopsi');
})->name('Form_Adopsi');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');