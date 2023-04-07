<?php

use App\Http\Controllers\EdInfFormacaoController;
use App\Http\Controllers\EdInfApoioController;
use App\Http\Controllers\InfantilController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EnsFun1Controller;
use App\Http\Controllers\EnsFun2Controller;
use App\Http\Controllers\CelEnsFun1Controller;
use App\Http\Controllers\CelPrjVidaController;
use App\Http\Controllers\CelTempoIntegralController;
use App\Http\Controllers\CelEdEspController;
use App\Http\Controllers\CelEdJvController;
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

Route::get('/', [PrincipalController::class,'index']);

//Rotas Coordenação Infantil
Route::get('/coordInfantil', [InfantilController::class,'index'])->name('site.coordInfantil');
Route::get('/coordInfantil/ApoioEd', [EdInfApoioController::class,'index'])->name('site.coordInfantil.celApoioEdInfantil');
Route::get('/coordInfantil/Formacao', [EdInfFormacaoController::class,'index'])->name('site.coordInfantil.celFormacao');

//Rotas Coordenação Ensino Fundamental I
Route::get('/coordEnsFun1', [EnsFun1Controller::class,'index'])->name('site.coordEnsFun1');
Route::get('/coordEnsFun1/celEnsFun1', [CelEnsFun1Controller::class,'index'])->name('site.coordEnsFun1.celEnsFun1');
Route::get('/coordEnsFun1/celEdEsp', [CelEdEspController::class,'index'])->name('site.coordEnsFun1.celEdEsp');
Route::get('/coordEnsFun1/celEdJv', [CelEdJvController::class,'index'])->name('site.coordEnsFun1.celEdJv');

//Rotas Coordenação Ensino Fundamental I
Route::get('/coordEnsFun2', [EnsFun2Controller::class,'index'])->name('site.coordEnsFun2');
Route::get('/coordEnsFun2/celProjVida', [CelPrjVidaController::class,'index'])->name('site.coordEnsFun2.celProjVida');
Route::get('/coordEnsFun2/celTempoIntegral', [CelTempoIntegralController::class,'index'])->name('site.coordEnsFun2.celTmpInt');
