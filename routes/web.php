<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\quotationController;
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
Auth::routes();

Route::get('/inicio', [HomeController::class, 'index'])->name('home');
// modulo proveedores
Route::get('/proveedores', [VendorController::class, 'index'])->name('vendors.index');
Route::get('/proveedores/crear', [VendorController::class, 'create'])->name('vendors.create');
Route::post('/proveedores/crear', [VendorController::class, 'store'])->name('vendors.store');
Route::get('/proveedores/editar/{vendorsitem}', [VendorController::class, 'edit'])->name('vendors.edit');
Route::patch('/proveedores/editar/{vendorsitem}', [VendorController::class, 'update'])->name('vendors.update');
Route::delete('/proveedores/{vendorsitem}', [VendorController::class, 'destroy'])->name('vendors.destroy');

//modulo orden de compra
Route::get('/Ordendecompra', [quotationController::Class, 'index'])->name('quotation.index');
Route::get('/Ordendecompra/crear', [quotationController::Class, 'create'])->name('quotation.create');