<?php

namespace App\Http\Controllers;

use App\Models\climatiseur;
use App\Models\Lampe;
use App\Models\pivot;
use App\Models\Site;
use App\Models\Sitelampe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard(){


        $sites = Site::where('user_id',auth()->user()->id)->get();
        $sitee = Site::all();
        // $climatiseurs = climatiseur::where('user_id',auth()->user()->id)->get();
        $climatiseurs =climatiseur::where('user_id',auth()->user()->id)->get();



        $sitelampe = Sitelampe::where('user_id',auth()->user()->id)->get();
        $sitelampe = Sitelampe::all();
        // $climatiseurs = climatiseur::where('user_id',auth()->user()->id)->get();
        $lampe =Lampe::all();


        return view('page.dashboard.all', compact('sites','climatiseurs','sitelampe','lampe'));
    }



}
