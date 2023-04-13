<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelContasController extends Controller
{
    public function index(){
        return view('site.Financeiro.celContas');
    }
}
