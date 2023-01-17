<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/creat', function () {
//     return view('creat');
// });
// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
//     Route::get('', [UserController::class, 'index'])->name('index');
//     Route::get('/create', [UserController::class, 'create'])->name('create');
//     Route::post('/store', [UserController::class, 'store'])->name('store');
//     Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
//     Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
//     Route::get('/delete/{user}', [UserController::class, 'delete'])->name('delete');
// });

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('update/{user}', [UserController::class, 'update'])->name('update');
    Route::get('delete/{user}', [UserController::class, 'delete'])->name('delete');
    Route::get('/convert-to-json', [UserController::class, 'pagination'])->name('pagination');
});