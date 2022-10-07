<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
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

Route::match(['POST', 'GET'], 'login', [AuthController::class, 'login'])
    ->name('login')->withoutMiddleware('auth:web')->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::redirect('/', '/products')->name('home');

Route::resource('products', ProductsController::class);

Route::get('logs', function () {
    return \App\Models\Logger::all();
})->middleware(['role:admin']);
