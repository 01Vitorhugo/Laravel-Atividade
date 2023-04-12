<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelObrasController extends Controller
{
    public function index(){
        return view('site.Administracao.celObras');
    }
}
