<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuridicaController extends Controller
{
    public function index(){
        return view('site.coordJuridica');
    }
}
