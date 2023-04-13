<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelContabilidadeController extends Controller
{
    public function index(){
        return view('site.Financeiro.celContabilidade');
    }
}
