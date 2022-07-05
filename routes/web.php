<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    UserController,
    ViaCepController,
};

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

Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('viacep')->name('viacep.')->controller(ViaCepController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'index')->name('index.post');
    Route::get('/{cep}', 'show')->name('show');
});
