<?php

use App\Http\Controllers\EdInfFormacaoController;
use App\Http\Controllers\EdInfApoioController;
use App\Http\Controllers\InfantilController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EnsFun1Controller;
use App\Http\Controllers\EnsFun2Controller;
use App\Http\Controllers\CelEnsFun1Controller;
use App\Http\Controllers\CelPesquisaController;
use App\Http\Controllers\CelApoioController;
use App\Http\Controllers\CelSuperintendenciaController;
use App\Http\Controllers\CelServicosController;
use App\Http\Controllers\CelPagamentosController;
use App\Http\Controllers\CelAcompanhamentoController;
use App\Http\Controllers\CelPrjVidaController;
use App\Http\Controllers\CelTempoIntegralController;
use App\Http\Controllers\CelEdEspController;
use App\Http\Controllers\CelEdJvController;
use App\Http\Controllers\ComunicacaoController;
use App\Http\Controllers\GestaoEscController;
use App\Http\Controllers\GestaoValorController;
use Faker\Guesser\Name;
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

//Rotas Coordoria de Gestão Escolar
Route::get('/coordGestaoEsc', [GestaoEscController::class, 'index'])->name('site.GestaoEsc');
Route::get('/coordGestaoEsc/celPesquisa', [CelPesquisaController::class, 'index'])->name('site.GestaoEsc.celPesquisa');
Route::get('/coordGestaoEsc/celApoio', [CelApoioController::class, 'index'])->name('site.GestaoEsc.celApoio');
Route::get('/coordGestaoEsc/celSuperintendecia', [CelSuperintendenciaController::class, 'index'])->name('site.GestaoEsc.celSuperintendencia');
Route::get('/coordGestaoEsc/celServicos', [CelServicosController::class, 'index'])->name('site.GestaoEsc.celServicos');

//Rotas Coordenadoria de Gestão de Valorização de Pessoas
Route::get('/coordGestaoValor', [GestaoValorController::class, 'index'])->name('site.GestaoValor');
Route::get('/coordGestaoValor/celPagamentos', [CelPagamentosController::class, 'index'])->name('site.GestaoValor.celPagamentos');
Route::get('/coordGestaoValor/celAcompanhamento', [CelAcompanhamentoController::class, 'index'])->name('site.GestaoValor.celAcompanhamento');

//Rotas Coordenadoria de Comunicação e Tecnologia da Informação
Route::get('/coordComunicacao', [ComunicacaoController::class, 'index'])->name('site.coordComunicacao');