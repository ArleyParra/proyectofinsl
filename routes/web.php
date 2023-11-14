<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DetallesInmueblesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FormularioContactoController;
use App\Http\Controllers\ArriendoController;
use App\Http\Controllers\QuienesSomosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
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

Route::get('/', [InicioController::class,'listInicio'])->name("inicio");
Route::get('/detalles_inmuebles', [DetallesInmueblesController::class,'listDetallesInmuebles'])->name("detalles");
Route::get('/formulario_contacto', [FormularioContactoController::class,'listFormularioContacto']);
Route::get('/arriendo',[ArriendoController::class,'listArriendo'])->name("arriendo");
Route::get('/venta', [VentaController::class,'listArriendo'])->name("venta");
Route::get('/quienes_somos', [QuienesSomosController::class,'listQuienesSomos'])->name("quienessomos");


