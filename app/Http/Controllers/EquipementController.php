<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipementController extends Controller
{
    
    public function equipementAjout(){


        return view('page.dashboard.equipement.ajout');
    }

    public function all(){


        return view('page.dashboard.equipement.all');
    }
}
