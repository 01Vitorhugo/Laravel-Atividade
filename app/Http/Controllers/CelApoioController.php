<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelApoioController extends Controller
{
    public function index(){
        return view('site.GestaoEsc.celApoio');
    }
}
