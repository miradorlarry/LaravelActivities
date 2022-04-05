<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //code here
    public function __invoke(){

        $data = array(
            'img' => 'img/siren.jpg',
            'title'=>'Siren - Hydrodynamic uniform',
            'description'=>'A soldier that kills an enemy with rytec AMR',
            'author'=>'Codm'
            );
        return view('about')->with($data);
        }

}
