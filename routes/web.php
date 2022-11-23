<?php

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


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\Version1Controller@home');
Route::get('/products', 'App\Http\Controllers\Version1Controller@products');
Route::get('/contact', 'App\Http\Controllers\Version1Controller@contact');
Route::get('/basket', 'App\Http\Controllers\Version1Controller@basket');
Route::get('/checkout', 'App\Http\Controllers\Version1Controller@checkout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
