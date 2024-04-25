<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// Route::get('/', function () {
//     return view('products');
// });
 

Route::get('/', [ProductController::class, 'products'])->name('products');
Route::post('/add-product', [ProductController::class, 'addproduct'])->name('add.products');
Route::post('/update-product', [ProductController::class, 'updateproduct'])->name('update.products');
Route::post('/delete-product', [ProductController::class, 'deleteproduct'])->name('delete.products');
Route::get('/pagination/paginate-data', [ProductController::class, 'pagination']);
Route::get('/search-product', [ProductController::class, 'searchproduct'])->name('search.product');






