<?php

use App\Http\Controllers\Admin\categoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\BuscadorController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\PedidoController;
use Illuminate\Support\Facades\Auth;



Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('admin.home');

//rutas crud proveedores panel de administracion
Route::resource('/customers',ClienteController::class)->names('customers');

//rutas crud proveedores panel de administracion
Route::resource('/pedidos',PedidoController::class)->names('pedidos');


//rutas crud proveedores panel de administracion
Route::resource('/proveedores',ProveedorController::class)->names('proveedores');

//rutas crud usuarios panel de administracion
Route::resource('/users', UserController::class)->names('admin.users');

//rutas crud productos panel de administracion
Route::resource('/products', ProductoController::class)->names('products')->middleware('auth'); 

//ruta CRUD roles panel administrativo
Route::resource('roles', RoleController::class)->names('admin.roles');


//buscador de productos,proveedores y categorias
Route::get('/buscador', [BuscadorController::class,'search'])->name('buscador.search');

Route::get('/buscador/categories', [BuscadorController::class, 'searchCategories'])->name('buscador.searchCategories');


//ruta crud categorias panel de  control
route::resource('/categories',categoriaController::class)->names('categories');


//buscador de productos panel de proveedores
Route::get('/buscador_proveedores', [BuscadorController::class,'searchproveedor'])->name('buscador.searchproveedor');

//buscador de productos panel de Clientes
Route::get('/buscador_clientes', [BuscadorController::class,'searchclientes'])->name('buscador.searchclientes');


//ruta crud cilentes home
Route::resource('/clientes', ClienteController::class)->names('clientes'); 





// //rutas crud productos panel de administracion
// Route::resource('/products', ProductoController::class)->names('products')->middleware('auth'); 

// //buscador de productos panel de administracion 
// Route::get('/buscador', [BuscadorController::class,'search'])->name('buscador.search');

// Agrega aquí más rutas específicas para la sección de administración

// Ejemplo:
// Route::get('/settings', [UserController::class, 'settings'])->name('admin.settings');
