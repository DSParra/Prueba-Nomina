<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\NominaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PdfController;



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
    return view('auth/login');
});
/* Route::get('/formulario/puesto', function () {
    return view('puesto/create');
}); */



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Route::get('/calculo/nomina',[App\Http\Controllers\NominaController::class,'calculo'])->name('calculoNomina'); */
/* Route::get('/nomina/calculo', [App\Http\Controllers\NominaController::class, 'calculo']); */
Route::resource('/puesto', PuestoController::class);
Route::resource('/empleado', EmpleadoController::class);
Route::resource('/nomina', NominaController::class)->only('index');
Route::resource('/reporte', ReporteController::class)->only('index');
Route::resource('/pdf', PdfController::class)->only('index');


