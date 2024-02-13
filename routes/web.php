<?php

use App\Http\Controllers\IndexController;
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

// Route::get('/',[IndexController::class,'index']);

Route::controller(IndexController::class)->group(function () {
    Route::get('/','index')->name('index.index');
    Route::get('/catalog','catalog')->name('index.catalog');
});