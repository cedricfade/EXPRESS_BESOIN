<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function siteListe(){

        return view('page.dashboard.site');
    }

    public function Ajoutsite(){

        return view('page.dashboard.ajoutSite');
    }

    public function AjoutsiteAction(Request $request){

 
    }
}
