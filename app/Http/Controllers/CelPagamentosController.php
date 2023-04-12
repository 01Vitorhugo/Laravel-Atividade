<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelPagamentosController extends Controller
{
    public function index(){
        return view('.site.GestaoValor.celPagamentos');
    }
}
