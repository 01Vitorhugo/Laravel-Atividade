<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelSuperintendenciaController extends Controller
{
    public function index(){
        return view('site.GestaoEsc.celSuperIntendencia');
    }
}
