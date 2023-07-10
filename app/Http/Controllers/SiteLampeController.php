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
        $lampe = Lampe::all();

        foreach ($lampe as $lampe) {
            $lampe;
        }

        return view('page.dashboard.lampe.SiteLampeView', compact('sitelampe','lampe'));


        // return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites','lampe'));

    }
    public function siteLampeList(){


        $sitelampe = Sitelampe::where('user_id' , auth()->user()->id->get()->sortDesc());
        $sitelampe = Sitelampe::all();
        // $sitelampe = Sitelampe::with('lampe')->find($sitelampe_id);
        $lampe = Lampe ::all();
        return view('page.dashboard.lampe.siteLampeList',compact('sitelampe','lampe'));


    //     $sites = Site::where('user_id', auth()->user()->id)->get()->sortDesc();

    //   //   $sites = Site::all();
    //     // $sites = Site::with('climatiseurs')->find($site_id);


    //     $climatiseurs = climatiseur::all();


    //     return view('page.dashboard.climatisseur.siteList',compact('sites','climatiseurs'));


  }
  public function Climatiseur($id){

    $sitelampe = Sitelampe::findOrFail($id);

//     return view('page.dashboard.climatisseur.climatiseurAjout', compact('sitelampe'));
return view('page.dashboard.lampe.lampeAjout',compact('sitelampe'));
 }


}
