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
use App\Http\Controllers\CelAvaliacaoController;
use App\Http\Controllers\CelCompetenciasController;
use App\Http\Controllers\CelMedicaoController;
use App\Http\Controllers\CelSupervisaoController;
use App\Http\Controllers\CelTutoriaController;
use App\Http\Controllers\CelDesenvolvimentoController;
use App\Http\Controllers\CelLogisticaController;
use App\Http\Controllers\CelTransporteController;
use App\Http\Controllers\CelAlimentacaoController;
use App\Http\Controllers\CelObrasController;
use App\Http\Controllers\CelApoioAdmController;
use App\Http\Controllers\CelContratosController;
use App\Http\Controllers\CelProcessosController;
use App\Http\Controllers\CelControleController;
use App\Http\Controllers\CelContabilidadeController;
use App\Http\Controllers\CelContasController;
use App\Http\Controllers\CelPlanejamentoController;
use App\Http\Controllers\ComunicacaoController;
use App\Http\Controllers\GestaoEscController;
use App\Http\Controllers\GestaoValorController;
use App\Http\Controllers\DesenvolvimentoController;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\JuridicaController;
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

//Rota Raiz
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

//Rotas Coordenação Ensino Fundamental II
Route::get('/coordEnsFun2', [EnsFun2Controller::class,'index'])->name('site.coordEnsFun2');
Route::get('/coordEnsFun2/celProjVida', [CelPrjVidaController::class,'index'])->name('site.coordEnsFun2.celProjVida');
Route::get('/coordEnsFun2/celTempoIntegral', [CelTempoIntegralController::class,'index'])->name('site.coordEnsFun2.celTmpInt');

//Rotas Coordenação de Desenvolvimento da Aprendizagem e da Gestão Pedagógica
Route::get('/coordDesenvolvimento', [DesenvolvimentoController::class,'index'])->name('site.coordDesenvolvimento');
Route::get('/coordDesenvolvimento/AcompanhamentoPedagogico', [celAcompanhamentoController::class,'index'])->name('site.coordDesenvolvimento.celAcompanhamento');
Route::get('/coordDesenvolvimento/AvaliacaoEducacional', [CelAvaliacaoController::class,'index'])->name('site.coordDesenvolvimento.celAvaliacao');
Route::get('/coordDesenvolvimento/CompetenciasSocioemocionais', [CelCompetenciasController::class,'index'])->name('site.coordDesenvolvimento.celCompSoc');
Route::get('/coordDesenvolvimento/Medicao', [CelMedicaoController::class,'index'])->name('site.coordDesenvolvimento.celMedicao');
Route::get('/coordDesenvolvimento/Supervisao', [CelSupervisaoController::class,'index'])->name('site.coordDesenvolvimento.celSupervisao');
Route::get('/coordDesenvolvimento/Tutoria', [CelTutoriaController::class,'index'])->name('site.coordDesenvolvimento.celTutoria');

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
Route::get('/coordComunicacao/celDesenvolvimento', [CelDesenvolvimentoController::class, 'index'])->name('site.coordComunicacao.celDesenvolvimento');

//Rotas Coordenadoria Administrativa
Route::get('/coordAdministrativa', [AdministracaoController::class, 'index'])->name('site.coordAdministrativa');
Route::get('/coordAdministrativa/celLogistica', [CelLogisticaController::class, 'index'])->name('site.coordAdministrativa.celLogistica');
Route::get('/coordAdministrativa/celTransporte', [CelTransporteController::class, 'index'])->name('site.coordAdministrativa.celTransporte');
Route::get('/coordAdministrativa/celAlimentacao', [CelAlimentacaoController::class, 'index'])->name('site.coordAdministrativa.celAlimentacao');
Route::get('/coordAdministrativa/celObras', [CelObrasController::class, 'index'])->name('site.coordAdministrativa.celObras');

//Rotas Coordenadoria Jurídica
Route::get('/coordJuridica', [JuridicaController::class, 'index'])->name('site.coordJuridica');
Route::get('/coordJuridica/celApoioAdm', [CelApoioAdmController::class, 'index'])->name('site.coordJuridica.celApoioAdm');
Route::get('/coordJuridica/celContratos', [CelContratosController::class, 'index'])->name('site.coordJuridica.celContratos');
Route::get('/coordJuridica/celProcessos', [CelProcessosController::class, 'index'])->name('site.coordJuridica.celProcessos');
Route::get('/coordJuridica/celControle', [CelControleController::class, 'index'])->name('site.coordJuridica.celControle');

//Rotas Coordenadoria Financeira
Route::get('/coordFinanceira', [FinanceiroController::class, 'index'])->name('site.coordFinanceira');
Route::get('/coordFinanceira/celContabilidade', [CelContabilidadeController::class, 'index'])->name('site.coordFinanceira.celContabilidade');
Route::get('/coordFinanceira/celContas', [CelContasController::class, 'index'])->name('site.coordFinanceira.celContas');
Route::get('/coordFinanceira/celPlanejamento', [CelPlanejamentoController::class, 'index'])->name('site.coordFinanceira.celPlanejamento');