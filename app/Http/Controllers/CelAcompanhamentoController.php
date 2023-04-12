<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelAcompanhamentoController extends Controller
{
    public function index(){
        return view('site.GestaoValor.celAcompanhamento');
    }
}
