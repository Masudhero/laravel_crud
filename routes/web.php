<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CateguryController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//---------------categury section-----------//
Route::get('categury',[CateguryController::class, 'index'])->name('categury.index');
Route::get('categury/create',[CateguryController::class, 'create'])->name('categury.create');
Route::post('categury/store',[CateguryController::class, 'store'])->name('categury.store');
Route::get('categury/{id}/edit',[CateguryController::class, 'edit'])->name('categury.edit');
Route::put('categury/{id}/update',[CateguryController::class, 'update'])->name('categury.update');
//----------------brands section---------//
Route::get('brand',[BrandController::class, 'index'])->name('brand.index');
Route::get('brand/create',[BrandController::class, 'create'])->name('brand.create');
Route::post('brand/store',[brandController::class, 'store'])->name('brand.store');
Route::get('brand/{id}/edit',[brandController::class, 'edit'])->name('brand.edit');
Route::put('brand/{id}/update',[brandController::class, 'update'])->name('brand.update');
//------------------- Product section--------//
Route::get('product',[ProductController::class, 'index'])->name('products.index');
Route::get('product/create',[ProductController::class, 'create'])->name('product.create');
