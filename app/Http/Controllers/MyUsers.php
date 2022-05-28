<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUsers extends Controller
{
    //

    // public function index($user)
    // {
    //     echo "hello from controller<br>";
    //     echo "to".$user;

    //     return ['name'=>'Triveni', 'age'=>22];
    // }

    public function loadView($name){

        // return ('contact');
        echo $name;
         return view('contact', ['users'=>['triveni','rupali','sandip','rt sir']]);
    }

    public function index(){
        echo 'hello from controller';
    }
}


