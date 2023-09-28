<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Usuarios;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ConstruccionController;
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
})->middleware(['auth','verified'])->name('home');

Route::get('/delete', [UsuariosController::class, 'destroy'])->name('user.delete');
Route::post('/updateN', [UsuariosController::class, 'updateN'])->name('user.updateN');
Route::post('/updateP', [UsuariosController::class, 'updateP'])->name('user.updateP');
Route::post('/check', [LoginController::class, 'isActive'])->name('user.check');


Route::get('/construcciones', [ConstruccionController::class, 'show'])->name('construcciones.home');
Route::post('/construcciones/store', [ConstruccionController::class, 'store'])->name('construcciones.store');
Route::get('/construcciones/crear', [ConstruccionController::class, 'create'])->middleware(['auth','verified'])->name('construcciones.create');
Route::get('/storage/{con_con}', [ConstruccionController::class, 'down'])->name('construcciones.down');

Auth::routes(['verify' => true]);


