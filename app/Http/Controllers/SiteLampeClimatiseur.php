<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteLampeClimatiseur extends Controller
{
    public function SiteClimatiseurAjout(){

        return view('page.dashboard.lampe.lampeAjout');

    }
}
