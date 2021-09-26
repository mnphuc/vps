<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mua-vps/{id}', [HomeController::class, 'buyAcc'])->name('buy-acc');
Route::post('/payment', [HomeController::class, 'payment'])->name('payment');
//Route::get('/dashboard', function () {
//    return view('admin/home');
//})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('product', ProductController::class);
});
require __DIR__ . '/auth.php';
