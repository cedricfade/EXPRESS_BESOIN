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


        $this->validate($request,[
            'libelle'=> 'required',
            'commune'=> 'required',
            'ville'=> 'required',
        ]);


        $site = new Site();
        $site->user_id = auth()->user()->id;
        $site->libelle = $request->libelle;
        $site->commune = $request->commune;
        $site->ville = $request->ville;

       $site->save();



 return redirect()->route('site.climatiseur.view')->with('site_add','Site ajouté avec succès');


    }


    public function siteclimatiseur(){

          $sites = Site::where('user_id', auth()->user()->id)->get()->sortDesc();

   

       

         

          return view('page.dashboard.climatisseur.siteList',compact('sites'));


    }
    public function SiteClimatiseurView(){
        $sites = Site::where('user_id',auth()->user()->id)->orderBy('id','desc')->limit(1)->get();
        $climatiseurs = climatiseur::all();
        

        


        return view('page.dashboard.climatisseur.SiteClimatiseurView', compact('sites','climatiseurs'));

    }


// CLIMATISEUR
public function ClimatiseurInfos($id){

    $site = Site::findOrFail($id);
    $climatiseurs = climatiseur::where('site_id',$site->id)->get();

    return view('page.dashboard.climatisseur.ClimInfos',compact('site','climatiseurs'));


}



      public function Climatiseur($id){

        $site = Site::findOrFail($id);

        return view('page.dashboard.climatisseur.climatiseurAjout', compact('site'));
    }

    public function ClimatiseurAction(Request $request){

        $this->validate($request,[
            'photo' => 'mimes:png,jpg,jpeg',
            'chevaux' => 'required|numeric',
            'marque' => 'required',
            'type_climatiseur' => 'required',
          
            'photo' => 'required',
            
        ]);

       if (isset($request->photo)) {
        $filename = time().'.'. $request->photo->extension();
          // Pour enregistré un fichier depuis request
       $path =  $request->file('photo')->storeAs('image_clim',$filename,'public');
       }




       $cv = 0.7457;



        $climatiseur = new climatiseur();


        $climatiseur->user_id = auth()->user()->id;
        $climatiseur->site_id  = $request->site_id;
        $climatiseur->marque = $request->marque;
        $climatiseur->type_climatiseur = $request->type_climatiseur;
        $climatiseur->type_split = $request->type_split;
        $climatiseur->chevaux = $request->chevaux;
        $climatiseur->sommes_chevaux = $cv* $request->chevaux;
        $climatiseur->photo = $path;

        // $site = new Site();
        // $site->status = ($request->site_id) ? 1 : 0;
     
    //    dd($climatiseur);
    //    dd($site);


    $climatiseur->save();

    // dd($pivot);



      return redirect()->back()->with('clim','Climatiseur ajouté');
    }
}
