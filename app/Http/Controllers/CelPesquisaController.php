<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelPesquisaController extends Controller
{
    public function index(){
        return view('site.GestaoEsc.celPesquisa');
    }
}
