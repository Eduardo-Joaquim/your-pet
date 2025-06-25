<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sobrenos()
    {
        return view('sobrenos');
    }
   public function comoFunciona()
    {
        return view('como-funciona');
    }
}
