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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/profiles', function () {
    return view('profiles');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/create', function () {
    return view('products-create');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/users/create', function () {
    return view('users-create');
});




    

