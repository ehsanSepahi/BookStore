<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookstoreController;

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

//search
Route::get('/books/search', [BookstoreController::class, 'search'])->name('books.search');

//cartcontroller
//Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
//Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/books', [BookstoreController::class, 'index'])->name('books.index');

Route::get('/books/create', [BookstoreController::class, 'create']);

Route::get('/books/edit/{id}', [BookstoreController::class, 'edit']);

Route::get('/books/{id}', [BookstoreController::class, 'show']);

Route::post('/books', [BookstoreController::class, 'store']);

Route::put('/books/{id}', [BookstoreController::class, 'update']);

Route::delete('/books/{id}', [BookstoreController::class, 'destroy']);

