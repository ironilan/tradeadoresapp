<?php

use App\Http\Controllers\HomeController;
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
});



require __DIR__.'/auth.php';
