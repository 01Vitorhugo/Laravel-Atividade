<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelPlanejamentoController extends Controller
{
    public function index(){
        return view('site.Financeiro.celPlanejamento');
    }
}
