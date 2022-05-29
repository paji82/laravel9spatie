<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware(['permission:write posts']);

Route::group(['middleware' => ['permission:product-list|product-create|product-edit|product-delete']], function () {
    Route::resource('products', ProductController::class);
});

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);
