<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestaoEscController extends Controller
{
    public function index(){
        return view ('site.coordGestaoEsc');
    }
}
