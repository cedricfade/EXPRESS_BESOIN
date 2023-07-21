<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{

    public function equipementAjout(){


        return view('page.dashboard.equipement.ajout');
    }

    public function all(){


        return view('page.dashboard.equipement.all');
    }

    public function equipement(Request $request){


        $this->validate($request,[
            'libelle'=> 'required',
            'commune'=> 'required',
            'ville'=> 'required',
            'type_appareil'=> 'required',
            'marque'=> 'required',
            'puissance'=> 'required',
            // 'photo' => 'mimes:png,jpg,jpeg',
        ]);

        // if (isset($request->photo)) {
        //     $filename = time().'.'. $request->photo->extension();
        //       // Pour enregistré un fichier depuis request
        //    $path =  $request->file('photo')->storeAs('photo_equipement',$filename,'public');
        //    }
        

            $equipement = new Equipement();
            $equipement->user_id=auth()->user()->id;
         $equipement->libelle = $request->libelle;
        $equipement->commune = $request->commune;
        $equipement->ville = $request->ville;
        $equipement->type_appareil = $request->type_appareil;
        $equipement->marque = $request->marque;
        $equipement->puissance = $request->puissance;
        // $equipement->photo = $path;
        $equipement->save();

         dd($equipement);


//  return redirect()->route('equipement.all')->with('equipements','equipements ajouté avec succès');
}


}
