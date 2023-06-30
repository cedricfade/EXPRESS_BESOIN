<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){

        return view('page.login');

    }

    public function Inscription(){


        return view('page.inscription');

    }
     public function store (Request $request){



      $user = users::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
             'contact'=>$request->contact,
             'photo'=>$request->photo,
             'email'=>$request->email,
             'password'=>$request->password,

         ]);
    //    dd( $user);

     }
}
