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
use App\Http\Controllers\Admin\CompraController;
use App\Http\Controllers\Admin\PedidoController;
use Spatie\Permission\Middlewares\RoleMiddleware;
use Illuminate\Support\Facades\Auth;



// Rutas protegidas para el rol 'Admin' y solo serán accesibles por usuarios con el rol 'Admin' debido al middleware RoleMiddleware.
// Aquí agregas todas las rutas que solo serán accesibles por los administradores.
Route::middleware([RoleMiddleware::class.':Admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    //Panel de administración, Ruta CRUD de Usuarios 
    Route::resource('users', UserController::class)->names('admin.users');
    //Panel de administración, Ruta CRUD de Roles de Usuarios
    Route::resource('roles', RoleController::class)->names('admin.roles')->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    //Panel de administración, Ruta CRUD de los Productos.
    Route::resource('/products', ProductoController::class)->names('products');
    //Panel de administración, Ruta CRUD de los Proveedores.
    Route::resource('/proveedores', ProveedorController::class)->names('proveedores');
    //Panel de administración, Ruta de las Categorias.
    Route::resource('/categories', categoriaController::class)->names('categories');
    //Panel de administración, Ruta CRUD de Clientes
    Route::resource('customers', ClienteController::class)->names('customers');
    //Panel de administración, Ruta CRUD de Pedidos realizados por los Clientes.
    Route::resource('pedidos', PedidoController::class)->names('pedidos');
    //Panel de administración, Ruta Buscador.
    Route::get('/buscador', [BuscadorController::class, 'search'])->name('buscador.search');
    //buscador de productos panel de Categorias
    Route::get('/buscador/categories', [BuscadorController::class, 'searchCategories'])->name('buscador.searchCategories');
    //Buscador de productos panel de Proveedores
    Route::get('/buscador_proveedores', [BuscadorController::class, 'searchproveedor'])->name('buscador.searchproveedor');
    //Buscador de productos panel de Clientes
    Route::get('/buscador_clientes', [BuscadorController::class, 'searchclientes'])->name('buscador.searchclientes');
    //Panel de administración, Ruta CRUD de Clientes
    Route::resource('/clientes', ClienteController::class)->names('clientes');
    //Panel de administración, Ruta CRUD Compras
    Route::resource('fronted/compras',CompraController::class)->names('frontend/compras');
});
// POR AQUI ESTUVO ZETTA ORGANIZANDO LAS RUTAS :)





















