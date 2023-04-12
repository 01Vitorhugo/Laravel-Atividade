<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelAlimentacaoController extends Controller
{
    public function index(){
        return view('site.Administracao.celAlimentacao');
    }
}
