<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/perfil', ClienteController::class)->names('perfil')->only(['index', 'show', 'edit', 'update']);
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
// A quí estuvo Zetta
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
