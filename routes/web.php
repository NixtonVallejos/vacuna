<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VacunaController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

// Route::resource('Registro/create', 'App\Http\Controllers\RegistroController');
Route::resource('/registro', RegistroController::class);
Route::resource('/dash', DashController::class);
Route::resource('/vacuna', VacunaController::class);
Route::resource('paciente/index', PacienteController::class);
