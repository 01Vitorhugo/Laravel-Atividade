<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunicacaoController extends Controller
{
    public function index(){
        return view('site.coordComunicacao');
    }
}
