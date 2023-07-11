<?php

namespace App\Http\Controllers;

use App\Models\Lampe;
use App\Models\Sitelampe;
use Illuminate\Http\Request;

class SiteLampeController extends Controller
{
    public function siteLampeAjout (){

        return view('page.dashboard.lampe.SiteLampAjout');

    }
    public function Sitelampe(Request $request){


        $this->validate($request,[
            'libelle'=> 'required',
            'commune'=> 'required',
            'ville'=> 'required',
        ]);

            $sitelampe =new Sitelampe();
            $sitelampe->user_id=auth()->user()->id;
         $sitelampe->libelle = $request->libelle;
        $sitelampe->commune = $request->commune;
        $sitelampe->ville = $request->ville;
        $sitelampe->save();



 return redirect()->route('site.lampe.view')->with('site_add','Site ajouté avec succès');


    }

    public function SiteLampeView(){
        $sitelampe = Sitelampe::where('user_id',auth()->user()->id)->get()->sortDesc();
        $lampe = lampe::all();

        foreach ($lampe as $lampe) {
            $lampe;
        }

        return view('page.dashboard.lampe.SiteLampeView', compact('sitelampe','lampe'));


        // return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites','lampe'));

    }
    public function siteLampeList(){


        $sitelampe = Sitelampe::where('user_id' , auth()->user()->id)->get()->sortDesc();
        // $sitelampe = Sitelampe::all();
        // $sitelampe = Sitelampe::with('lampe')->find($sitelampe_id);
        $lampe = lampe ::all();
        return view('page.dashboard.lampe.siteLampeList',compact('sitelampe','lampe'));


    //     $sites = Site::where('user_id', auth()->user()->id)->get()->sortDesc();

    //   //   $sites = Site::all();
    //     // $sites = Site::with('climatiseurs')->find($site_id);


    //     $climatiseurs = climatiseur::all();


    //     return view('page.dashboard.climatisseur.siteList',compact('sites','climatiseurs'));


  }
  public function lampe($id){

    $sitelampe = Sitelampe::findOrFail($id);

//     return view('page.dashboard.climatisseur.climatiseurAjout', compact('sitelampe'));
return view('page.dashboard.lampe.lampeAjout',compact('sitelampe'));
 }


 public function lampeAction(Request $request){

    $this->validate($request,[
        'photo' => 'mimes:png,jpg,jpeg',
        'watt' => 'required|numeric',
        'marque' => 'required',
        'modele' => 'required',
        'type_lampe' => 'required',
        'photo' => 'required',
    ]);

   if (isset($request->photo)) {
    $filename = time().'.'. $request->photo->extension();
      // Pour enregistré un fichier depuis request
   $path =  $request->file('photo')->storeAs('photo_lampe',$filename,'public');
   }




    $lampe = new lampe();


    $lampe->user_id = auth()->user()->id;
    $lampe->sitelampe_id  = $request->sitelampe_id;
    $lampe->marque = $request->marque;
    $lampe->type_lampe = $request->type_lampe;
    $lampe->watt = $request->watt;
    $lampe->sommes_watt = $request->watt;
    $lampe->photo = $path;
//    dd($climatiseur);

//   dd($pivot);

$lampe->save();

// dd($pivot);



  return redirect()->back()->with('lampe','lampe ajouté');
}

public function lampeInfos($id){

    $sitelampe = Sitelampe::findOrFail($id);
    $lampe = lampe::where('sitelampe_id',$sitelampe->id)->get();

    // return view('page.dashboard.lampe.Infos',compact('sitelampe','lampe'));

}
}
