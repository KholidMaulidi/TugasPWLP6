<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function mahasiswa1(){
        return view('aldin.profile');
    }

    public function mahasiswa2(){
        return view('Kholid.profileKholid');
    }
}
