<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/users', [UserController::class, 'index'])->name('users.index');
//Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//Route::post('/users/create', [UserController::class, 'store']);
//Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
////Edit User
//Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
////Update User
//Route::patch('/users/{id}/edit', [UserController::class, 'update'])->name('users.update');
//
////Delete User
//Route::get('/users/{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');


Route::resource('/users',UserController::class);
Route::resource('/products',ProductController::class);
