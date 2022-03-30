<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

// Route::get('/myartikel', function () {
//     return view('admin/artikelAnda');
// });

// Route::get('/profil', function () {
//     return view('admin/profil');
// });

// // Auth Kontributor
// Route::get('/login', function () {
//     return view('auth/login');
// });

// Route::get('/register', function () {
//     return view('auth/register');
// });

// // Artikel
// Route::get('/artikelbaru', function () {
//     return view('admin/tambahArtikel');
// });

// Route::get('/ubahartikel', function () {
//     return view('admin/ubahArtikel');
// });

// // user
// Route::get('/home', function () {
//     return view('users/index');
// });

// Route::get('/contact', function () {
//     return view('users/contact');
// });

// Route::get('/blog', function () {
//     return view('users/blog');
// });

// // buat detail artikel (/artikel/xxx) xx id artikel
// Route::get('/artikel', function () {
//     return view('users/detailArtikel');
// });



// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home', 'App\Http\Controllers\HomeController');

Route::post('/save', [App\Http\Controllers\Auth\RegisterController::class, 'save'])->name('save');
Route::post('/check', [App\Http\Controllers\Auth\LoginController::class, 'check'])->name('check');
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::resource('article', 'App\Http\Controllers\DashboardController');

    Route::get('/search/', [App\Http\Controllers\DashboardController::class, 'search'])->name('search');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'show'])->name('login');
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('register');
    Route::get('/profil', [App\Http\Controllers\DashboardController::class, 'profil'])->name('profil');
    Route::get('/artikelbaru', [App\Http\Controllers\DashboardController::class, 'create'])->name('artikelbaru');

    Route::put('/update-profil/{id}', [App\Http\Controllers\DashboardController::class, 'updateProfil'])->name('update-profil');
    Route::post('/create-artikel', [App\Http\Controllers\DashboardController::class, 'store'])->name('createArtikel');
    Route::delete('/dashboard/delete-artikel/{id}', [App\Http\Controllers\DashboardController::class, 'destroy'])->name('deleteArtikel');
});
