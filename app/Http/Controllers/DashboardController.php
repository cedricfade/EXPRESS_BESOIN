<?php

namespace App\Http\Controllers;

use App\Models\climatiseur;
use App\Models\Lampe;
use App\Models\pivot;
use App\Models\Site;
use App\Models\Sitelampes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard(){


        $sites = Site::where('user_id',auth()->user()->id)->get();
      
       
        $climatiseurs =climatiseur::where('user_id',auth()->user()->id)->get();



        $sitelampe = Sitelampes::where('user_id',auth()->user()->id)->get();

        $lampe =Lampe::where('user_id',auth()->user()->id)->get();
      


        return view('page.dashboard.all', compact('sites','climatiseurs','sitelampe','lampe'));
    }


}
