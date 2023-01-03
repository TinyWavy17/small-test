<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChuyendiController;

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
Route::get('/', [ChuyendiController::class, 'index'])->name('index');
Route::get('create', [ChuyendiController::class, 'create'])->name('create');
Route::post('store', [ChuyendiController::class, 'store'])->name('store');
Route::get('edit/{id}', [ChuyendiController::class, 'edit'])->name('edit');
Route::post('update/{id}', [ChuyendiController::class, 'update'])->name('update');
Route::get('delete/{id}', [ChuyendiController::class, 'delete'])->name('delete');


