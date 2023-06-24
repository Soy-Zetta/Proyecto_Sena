<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CartController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(ServicesController::class)->group(function () {
    Route::get('/servicios', 'index');
    Route::get('/servicios/mantenimiento-general', 'mantenimiento');
    Route::get('/servicios/programacion', 'programacion');
    Route::get('/servicios/reparacionMovil', 'reparacionMovil');
    Route::get('/servicios/InstalacionCamaras', 'InstalacionCamaras');
    Route::get('/servicios/EnsambleEquipos', 'EnsambleEquipos');
    Route::get('/servicios/ReparacionBisagras', 'ReparacionBisagras');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/ayuda-y-soporte', function () {
    return view('help');
});

Route::get('/loginn', function () {
    return view('loginn');
});

// Route::get('/registerr', function () {
//     return view('registerr');
// });


//rutas productos
Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');



// Auth::routes();

// Route::get('/home', function() {
//     return view('admin.users.index');
// })->name('home')->middleware('auth');

// Route::resource('admin', UserController::class);

//rutas





    

