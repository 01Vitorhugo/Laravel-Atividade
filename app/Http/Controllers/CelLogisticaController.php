<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelLogisticaController extends Controller
{
    public function index(){
        return view('site.Administracao.celLogistica');
    }
}
