<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelProcessosController extends Controller
{
    public function index(){
        return view('site.Juridica.celProcessos');
    }
}
