<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(){
        return "this is a store statement";
    }
    public function index(){
        return "successfully entered and redirected in index page";
    }
    public function length($name){
        $length = strlen($name);
        return "The length of the name '$name' is $length characters.";
    }
    public function _construct(){
        $this->middleware('auth');
    }

}
