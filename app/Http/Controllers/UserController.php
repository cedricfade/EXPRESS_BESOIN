<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){

        return view('page.login');

    }

    public function Inscription(){


        return view('page.inscription');
        
    }
}
