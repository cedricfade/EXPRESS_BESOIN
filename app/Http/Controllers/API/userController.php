<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function User(request $request){


        $user = User::all();

        return response()->json($user);

    }

    public function show(User $user){

        return response()->json($user);

    }
}
