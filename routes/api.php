<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nama', function () {
    return "Bookstore-API";
});

Route::post('deskripsi', function () {
    return "Dokumentasi Bookstore-API";
});

Route::get('category/{id}', function ($id) {
    $categories = [
        1 => 'Matematika',
        2 => 'Bahasa',
        3 => 'Teknologi'
    ];
    $id = (int) $id;
    if ($id == 0) return 'Silahkan pilih kategori';
    else return "Anda memilih kategori <b>" . $categories[$id] . "</b>";
});

Route::get('/book/{id}', function () {
    return 'menampilkan buku';
})->where('id', '[0-9]+');

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/random/{count}', [CategoryController::class, 'random']);
    Route::get('categories/slug/{slug}', [CategoryController::class, 'slug']);
    Route::get('books', [BookController::class, 'index']);
    Route::get('books/top/{count}', [BookController::class, 'top']);
    Route::get('books/slug/{slug}', [BookController::class, 'slug']);
    Route::get('books/search/{keyword}', [BookController::class, 'search']);
    Route::get('provinces', [ShopController::class, 'provinces']);
    Route::get('cities', [ShopController::class, 'cities']);
    Route::get('couriers', [ShopController::class, 'couriers']);
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('shipping', [ShopController::class, 'shipping']);
        Route::post('services', [ShopController::class, 'services']);
        Route::post('payment', [ShopController::class, 'payment']);
        Route::get('my-order', [ShopController::class, 'myorder']);
    });
});

Route::middleware(['cors'])->group(function () {
    Route::get('buku/{title}', [BookController::class, 'print']);
});

// Route::middleware('throttle:10,1')->group(function () {
//     Route::get('buku/{title}', 'BookController@print');
// });