<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelServicosController extends Controller
{
    public function index(){
        return view('site.GestaoEsc.celServicos');
    }
}
