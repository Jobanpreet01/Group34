<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('productsPage');
Route::get('/contact', 'App\Http\Controllers\Version1Controller@contact');
Route::get('/basket', 'App\Http\Controllers\Version1Controller@basket');
Route::get('/checkout', 'App\Http\Controllers\Version1Controller@checkout');

Route::get('/about', 'App\Http\Controllers\Version1Controller@about');

Route::post('update/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::post('updatequantity/{id}', [App\Http\Controllers\HomeController::class, 'updatequantity']);
Route::post('updateStatus/{id}', [App\Http\Controllers\HomeController::class, 'updateStatus']);
Route::post('remove/{id}', [App\Http\Controllers\HomeController::class, 'remove']);
Route::post('checkout', [App\Http\Controllers\HomeController::class, 'addToOrders']);




Route::post('/home/{id}', 'App\Http\Controllers\HomeController@basket');


Auth::routes(); #take care of all the routes for authorization such as for the login and register pages.


Route::middleware(['auth', 'userAccess:user'])->group(function () {
  
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
  

Route::middleware(['auth', 'userAccess:admin'])->group(function () {
  
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminPage');
});
