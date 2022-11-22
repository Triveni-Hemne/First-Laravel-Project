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

        echo $name;
         return view('contactt', ['users'=>['triveni','rupali','sandip','rt sir']]);
    }

    public function index(){
        echo 'hello from controller';
        // return view('contact', ['user'=>'Triveni']);
        return view('home', ['user'=>['T', 'R', 'P','y']]);
    }
}


