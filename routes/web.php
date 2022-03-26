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

Route::get('/', function () {
    return view('testBootstrap');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/myartikel', function () {
    return view('admin/artikelAnda');
});

Route::get('/profil', function () {
    return view('admin/profil');
});

// Auth Kontributor
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

// Artikel
Route::get('/artikelbaru', function () {
    return view('admin/tambahArtikel');
});

Route::get('/ubahartikel', function () {
    return view('admin/ubahArtikel');
});

// user
Route::get('/home', function () {
    return view('users/index');
});

Route::get('/contact', function () {
    return view('users/contact');
});

Route::get('/blog', function () {
    return view('users/blog');
});

// buat detail artikel (/artikel/xxx) xx id artikel
Route::get('/artikel', function () {
    return view('users/detailArtikel');
});
