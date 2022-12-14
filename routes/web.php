<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('login', function () {
    return view('admin.login');
});

Route::post('create', [KategoriController::class, 'store']);
Route::delete('delete/{kategori}', [KategoriController::class, 'destroy']);
Route::put('edit/{kategori}', [KategoriController::class, 'update']);
