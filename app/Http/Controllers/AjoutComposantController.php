<?php

namespace App\Http\Controllers;

use App\Models\climatiseur;
use App\Models\Site;
use Illuminate\Http\Request;

class AjoutComposantController extends Controller
{

    
    public function Equipement(){

        return view('page.dashboard.equiment');
    }

    // CLIMATISEUR

    public function Climatiseur($id){

        $site = Site::findOrFail($id);

        return view('page.dashboard.climatiseurAjout', compact('site'));
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




    // LAMPE


    public function Lamp(){

        return view('');
    }

}
