<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdInfFormacaoController extends Controller
{
    public function index(){
        return view('site/Infantil/celFormacao');
    }
}
