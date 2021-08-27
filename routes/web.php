<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
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

Route::get('/proveedores', [VendorController::class, 'index'])->name('vendors.index');
Route::get('/proveedores/crear', [VendorController::class, 'create'])->name('vendors.create');
Route::post('/proveedores/crear', [VendorController::class, 'store'])->name('vendors.store');
Route::get('/proveedores/editar/{vendorsitem}', [VendorController::class, 'edit'])->name('vendors.edit');
Route::patch('/proveedores/editar/{vendorsitem}', [VendorController::class, 'update'])->name('vendors.update');
Route::delete('/proveedores/{vendorsitem}', [VendorController::class, 'destroy'])->name('vendors.destroy');