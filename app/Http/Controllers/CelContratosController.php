<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelContratosController extends Controller
{
    public function index(){
        return view('site.Juridica.celContratos');
    }
}

