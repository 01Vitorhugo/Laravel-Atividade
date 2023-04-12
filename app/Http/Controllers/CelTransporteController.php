<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelTransporteController extends Controller
{
    public function index(){
        return view('site.Administracao.celTransporte');
    }
}
