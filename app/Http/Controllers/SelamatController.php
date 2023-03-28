<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelamatController extends Controller
{
    //
    public function selamat(){
        return view('layout.selamat');
    }
}
