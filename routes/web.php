<?php

use App\Http\Controllers\CemiController;
use App\Http\Controllers\ConsutlasController;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\ExamesController;
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

Route::get('/', [HomeController::class, 'index'])->name('pages.home');
Route::get('/especialidades', [EspecialidadesController::class, 'index'])->name('especialidades');
Route::get('/exames', [ExamesController::class, 'index'])->name('exames');
Route::get('/consultas/{id}', [ConsutlasController::class, 'index'])->name('consultas');
Route::get('/cemi', [CemiController::class, 'index'])->name('cemi');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
