<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
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

      
        $site = new Site();
        $site->user_id = auth()->user()->id;
        $site->libelle = $request->libelle;
        $site->commune = $request->commune;
        $site->ville = $request->ville;

       $site->save();
       


        return redirect()->route('site.view');
      
        

 
    }


    public function siteView(){
        $sites = Site::where('user_id',auth()->user()->id)->get();


        return view('page.dashboard.siteview', compact('sites'));
    }


  

  
}
