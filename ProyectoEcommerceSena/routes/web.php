<?php

use Illuminate\Support\Facades\Route;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

//Ruta Servicios
Route::prefix('servicios')->group(function () {
    Route::get('/', [ServicesController::class, 'index']);
    Route::get('/mantenimiento-general', [ServicesController::class, 'mantenimiento']);
    Route::get('/programacion', [ServicesController::class, 'programacion']);
    Route::get('/reparacionMovil', [ServicesController::class, 'reparacionMovil']);
    Route::get('/InstalacionCamaras', [ServicesController::class, 'InstalacionCamaras']);
    Route::get('/EnsambleEquipos', [ServicesController::class, 'EnsambleEquipos']);
    Route::get('/ReparacionBisagras', [ServicesController::class, 'ReparacionBisagras']);
});

//Ruta Productos
Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

//Ruta Nosotros
Route::get('/nosotros', function () {
    return view('sobre-nosotros');
});

//Ruta Ayuda y Soporte
Route::get('/ayuda-y-soporte', function () {
    return view('help');
});
