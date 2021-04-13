<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;

class PostController extends Controller

{
    public function index(){
        return view('index');
    }
}
