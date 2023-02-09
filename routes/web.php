<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MoneyCheckController;
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

Route::view('/', 'pages.index')->name('index');

Route::controller(AuthController::class)->group(function () {
    Route::post('/sign-in', 'signIn')->name('sign-in');
    Route::post('/sign-up', 'signUp')->name('sign-up');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')
    ->controller(MoneyCheckController::class)
    ->group(function () {
            Route::get('/money-check', 'index')->name('money-check');
            Route::post('/add-expense')->name('add-expense');
    });