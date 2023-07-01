<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjoutComposantController extends Controller
{

    
    public function Equipement(){

        return view('page.dashboard.equiment');
    }

    // CLIMATISEUR

    public function Climatiseur(){

        return view('page.dashboard.climatiseurAjout');
    }



    // LAMPE


    public function Lamp(){

        return view('');
    }

}
