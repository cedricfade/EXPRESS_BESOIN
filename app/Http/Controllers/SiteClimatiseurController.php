<?php

namespace App\Http\Controllers;

use App\Models\climatiseur;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteClimatiseurController extends Controller
{
    
    public function SiteClimatiseurAjout(){

        return view('page.dashboard.climatisseur.SiteClimatiseurAjout');

    }


    public function SiteClimatiseurTraitement(Request $request){

        
        $site = new Site();
        $site->user_id = auth()->user()->id;
        $site->libelle = $request->libelle;
        $site->commune = $request->commune;
        $site->ville = $request->ville;

       $site->save();
       


        return redirect()->route('site.climatiseur.view');
      

    }

    public function SiteClimatiseurView(){
        $sites = Site::where('user_id',auth()->user()->id)->get()->sortDesc();


        return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites'));

    }


// CLIMATISEUR


    public function Climatiseur($id){

        $site = Site::findOrFail($id);

        return view('page.dashboard.climatisseur.climatiseurAjout', compact('site'));
    }

    public function ClimatiseurAction(Request $request){

        $this->validate($request,[
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $filename = time().'.'. $request->photo->extension();

        // Pour enregistré un fichier depuis request
       $path =  $request->file('photo')->storeAs('image_clim',$filename,'public');

    
        $climatiseur = new climatiseur();

        $climatiseur->site_id  = $request->site_id;
        $climatiseur->marque = $request->marque;
        $climatiseur->type_climatiseur = $request->type_climatiseur;
        $climatiseur->puissance_electrique = $request->puissance_electrique;
        $climatiseur->puissance_frigorifique = $request->puissance_frigorifique;
        $climatiseur->photo = $path;
        

    //    dd($climatiseur);

    $climatiseur->save();
 
       

      return redirect()->back()->with('clim','Climatiseur ajouté');
    }
}
