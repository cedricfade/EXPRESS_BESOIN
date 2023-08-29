<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Models\SiteEquipement;
use Illuminate\Http\Request;

class SiteEquipementController extends Controller
{
    public function siteEquipementAjout(){

        return view('page.dashboard.equipement.siteEquipementAjout');
    }


    public function SiteEquipement(Request $request){


        $this->validate($request,[
            'libelle'=> 'required',
            'commune'=> 'required',
            'ville'=> 'required',
            // 'type_appareil'=> 'required',
            // 'marque'=> 'required',
            // 'puissance'=> 'required',
            // 'photo' => 'mimes:png,jpg,jpeg',
        ]);

        // if (isset($request->photo)) {
        //     $filename = time().'.'. $request->photo->extension();
        //       // Pour enregistré un fichier depuis request
        //    $path =  $request->file('photo')->storeAs('photo_equipement',$filename,'public');
        //    }
        

            $equipement = new SiteEquipement();
            $equipement->user_id=auth()->user()->id;
         $equipement->libelle = $request->libelle;
        $equipement->commune = $request->commune;
        $equipement->ville = $request->ville;
        // $equipement->type_appareil = $request->type_appareil;
        // $equipement->marque = $request->marque;
        // $equipement->puissance = $request->puissance;
        // $equipement->photo = $path;
        $equipement->save();

        //  dd($equipement);


 return redirect()->route('site.equipement.view')->with('equipements_add','Equipements ajouté avec succès');
}   
      

        public function SiteEquipementView(){
        $siteequipements = SiteEquipement::where('user_id',auth()->user()->id)->orderBy('id','desc')->limit(1)->get();
        $lampe = Equipement::all();

     

        return view('page.dashboard.equipement.siteEquipementView', compact('siteequipements'));


        // return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites','lampe'));

    }


    public function Equipement($id){

        $SiteEquipement = SiteEquipement::findOrFail($id);
    
    
    //     return view('page.dashboard.climatisseur.climatiseurAjout', compact('sitelampe'));
    return view('page.dashboard.equipement.EquipementAjout',compact('SiteEquipement'));
     }


    public function equipementAction(Request $request){

    $this->validate($request,[
        'photo' => 'mimes:png,jpg,jpeg',
        'type_appareil' =>'required',
        'marque' => 'required',
        'puissance' => 'required|numeric',
    ]);

   if (isset($request->photo)) {
    $filename = time().'.'. $request->photo->extension();
      // Pour enregistré un fichier depuis request
   $path =  $request->file('photo')->storeAs('photo_equipement',$filename,'public');
   }




    $equipement = new Equipement();


    $equipement->user_id = auth()->user()->id;
    $equipement->site_equipement_id  = $request->site_equipement_id;
    $equipement->type_appareil = $request->type_appareil;
    $equipement->marque = $request->marque;
    $equipement->puissance = $request->puissance;
    $equipement->photo = $path;
//    dd($climatiseur);

//   dd($pivot);

$equipement->save();

// dd($pivot);



  return redirect()->back()->with('equipement','Equipement ajoutée avec succès');
}


public function SiteEquipementList(){


    $siteequipements = SiteEquipement::where('user_id', auth()->user()->id)->get()->sortDesc();
    
    return view('page.dashboard.equipement.EquipementList',compact('siteequipements'));


}


public function equipementinfos($id){

    
    $siteequipements = SiteEquipement::findOrFail($id);
    $equipements = Equipement::where('site_equipement_id',$siteequipements->id)->get();

    return view('page.dashboard.equipement.EquipementInfos', compact('equipements','siteequipements'));
}



}
