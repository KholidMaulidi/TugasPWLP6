<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function profile($id=0){
        if($id == 0){
            return view('content.contact');
        } else if($id == 1){  
            return view('aldin.profile');
        } else if($id == 2){
            return view('Kholid.profileKholid');
        } else{
            return 'error';
        }
    }
    
}
