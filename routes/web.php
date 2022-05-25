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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('/editProduct', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/storeProduct', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::get('/createUnit', [App\Http\Controllers\UnitController::class, 'create'])->name('unit.create');
Route::get('/editUnit', [App\Http\Controllers\UnitController::class, 'edit'])->name('unit.edit');
Route::post('/storeUnit', [App\Http\Controllers\UnitController::class, 'store'])->name('unit.store');
Route::post('/updateUnit', [App\Http\Controllers\UnitController::class, 'update'])->name('unit.update');
