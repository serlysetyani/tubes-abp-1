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
