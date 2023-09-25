<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Usuarios;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/delete', [UsuariosController::class, 'destroy'])->name('user.delete');
Route::post('/updateN', [UsuariosController::class, 'updateN'])->name('user.updateN');
Route::post('/updateP', [UsuariosController::class, 'updateP'])->name('user.updateP');


Route::post('/check', [LoginController::class, 'isActive'])->name('user.check');

Auth::routes();


