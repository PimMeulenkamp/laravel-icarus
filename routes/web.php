<?php

use App\Http\Controllers\Account\OrderController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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
$userRole = \App\Models\Role::$ROLE_USER;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth',"checkUser:$userRole"])->group(function (){
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/order/details', [OrderController::class, 'details'])->name('order.details');
});
