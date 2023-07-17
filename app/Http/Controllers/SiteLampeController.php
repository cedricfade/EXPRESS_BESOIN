<?php

namespace App\Http\Controllers;

use App\Models\Lampe;
use App\Models\Sitelampes;
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

            $sitelampe =new Sitelampes();
            $sitelampe->user_id=auth()->user()->id;
         $sitelampe->libelle = $request->libelle;
        $sitelampe->commune = $request->commune;
        $sitelampe->ville = $request->ville;
        $sitelampe->save();



 return redirect()->route('site.lampe.view')->with('site_add','Site ajouté avec succès');


    }

    public function SiteLampeView(){
        $sitelampe = Sitelampes::where('user_id',auth()->user()->id)->get()->sortDesc();
        $lampe = Lampe::all();

        foreach ($lampe as $lampe) {
            $lampe;
        }

        return view('page.dashboard.lampe.SiteLampeView', compact('sitelampe','lampe'));


        // return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites','lampe'));

    }
    public function siteLampeList(){


        $sitelampes = Sitelampes::where('user_id', auth()->user()->id)->get()->sortDesc();
        $lampe = Lampe::all();
        return view('page.dashboard.lampe.siteLampeList',compact('sitelampes', 'lampe'));


  }
  public function lampe($id){

    $sitelampe = Sitelampes::findOrFail($id);


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




    $lampe = new Lampe();


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



  return redirect()->back()->with('lampe','lampe ajoutée avec succès');
}

public function lampeInfos($id){

    $sitelampe = Sitelampes::findOrFail($id);
    $lampes = Lampe::where('sitelampe_id',$sitelampe->id)->get();

    return view('page.dashboard.lampe.lampeInfos',compact('sitelampe','lampes'));

}
}
