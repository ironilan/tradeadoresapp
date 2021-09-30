<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\UsuarioController;
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
    return redirect('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(
[
    'prefix' => '/',
    'middleware' => 'auth'
], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('my-portfolio', [HomeController::class, 'portfolio'])->name('dashboard.portfolio');
    Route::get('conversor', [HomeController::class, 'conversor'])->name('dashboard.conversor');
    Route::get('settings', [HomeController::class, 'settings'])->name('dashboard.settings');


    //ajax
    Route::get('listarOperaciones', [OperacionController::class, 'listar'])->name('operaciones.listar');
    Route::post('operaciones', [OperacionController::class, 'store'])->name('operaciones.store');
    Route::post('operacionesUpdate', [OperacionController::class, 'update'])->name('operaciones.update');
    Route::get('operaciones/{id}', [OperacionController::class, 'show'])->name('operaciones.show');
    Route::get('operacionesDelete', [OperacionController::class, 'delete'])->name('operaciones.delete');

    Route::get('porcentajeParcial1', [OperacionController::class, 'parcial1'])->name('operaciones.parcial1');
    Route::get('puntos2', [OperacionController::class, 'puntos2'])->name('operaciones.puntos2');


    Route::post('convertir', [OperacionController::class, 'convertir'])->name('operaciones.convertir');


    Route::get('listarEntradas', [DashboardController::class, 'listarEntradas'])->name('dashboard.listarEntradas');
    Route::get('listarAcciones', [DashboardController::class, 'listarAcciones'])->name('dashboard.listarAcciones');

    Route::get('getInversion', [UsuarioController::class, 'getInversion'])->name('dashboard.getInversion');
    Route::post('setInversion', [UsuarioController::class, 'setInversion'])->name('dashboard.setInversion');

    Route::post('setPerfil', [UsuarioController::class, 'setPerfil'])->name('usuario.setPerfil');
});



require __DIR__.'/auth.php';
