<?php

namespace App\Http\Controllers;

use App\Models\climatiseur;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function siteListe(){


        // $sites = Site::where('user_id', auth()->user()->id)->get()->sortDesc();

        $sites = Site::all(); 
        // $sites = Site::with('climatiseurs')->find($site_id);

    
        $climatiseurs = climatiseur::all();
       

        return view('page.dashboard.site', compact('sites', 'climatiseurs'));
    }

    public function Ajoutsite(){

        return view('page.dashboard.ajoutSite');
    }

    public function AjoutsiteAction(Request $request){

      
        $site = new Site();
        $site->user_id = auth()->user()->id;
        $site->libelle = $request->libelle;
        $site->commune = $request->commune;
        $site->ville = $request->ville;

       $site->save();
       


        return redirect()->route('site.climatiseur.view');
      
        

 
    }


    public function siteView(){
        $sites = Site::where('user_id',auth()->user()->id)->get()->sortDesc();
 


        return view('page.dashboard.siteview', compact('sites'));
    }


  

    public function LampeListe(){
        return view('page.dashboard.site');
    }
  
}
