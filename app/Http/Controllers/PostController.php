<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //code here
    public function __invoke(){

        $data = array(
            'img' => 'img/m13.jpg',
            'title'=>'M13 - Morning Star',
            'description'=>'A fast fire rate gun with balance control and deadly accuracy',
            'author'=>'Codm'
            );
        return view('post')->with($data);
        }
}
