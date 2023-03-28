<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index($id = 0){
        if($id != 1 && $id != 2 && $id != 0){
            return 'error';
        } else if ($id == 1){
            return view('aldin.profile',['post'=> Post::getById($id)]);
        } else if ($id == 2){
            return view('Kholid.profileKholid',['post'=> Post::getById($id)]);
        } else if ($id == 0){
            return view('content.contact', ['post'=> Post::getById($id)]);
        }
    }
}
