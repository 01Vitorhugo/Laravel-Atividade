<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelDesenvolvimentoController extends Controller
{
    public function index(){
        return view('site.Comunicacao.celDesenvolvimento');
    }
}
