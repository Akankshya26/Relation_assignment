<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
//User page
Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/', [UserController::class, 'create'])->name('create');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [UserController::class, 'update'])->name('update');
Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');

//Role page

Route::controller(RoleController::class)->prefix('role')->group(function () {
    Route::get('/', 'list');
    Route::post('create', 'create')->name('role_create');
    Route::get('edit/{id}', 'edit')->name('role_edit');
    Route::put('update/{id}', 'update')->name('role_update');
    Route::delete('delete/{id}', 'delete')->name('role_delete');
});


Route::get('/role', [RoleController::class, 'index'])->name('index1');
Route::post('/role/create', [RoleController::class, 'create'])->name('create1');
Route::get('/edit1/{id}', [RoleController::class, 'edit'])->name('edit1');
Route::put('/edit1/{id}', [RoleController::class, 'update'])->name('update1');
Route::get('/delete1/{id}', [RoleController::class, 'destroy'])->name('destroy1');
