<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Login(){

        return view('page.login');

    }



    public function LoginAction(Request $request){

        $request->validate([
            'email'=>['required'],
            'password'=>'required',
        ]);


        if (Auth()->attempt(['email' =>$request->email, 'password'=>$request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('connexion','Vous être bien connecté');

        }

        else

        return redirect()->route('login')->with('login_erreur','Identifiant incorrecte');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    public function Inscription(){


        return view('page.inscription');

    }
     public function inscriptionAction (Request $request){

        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|unique:users,email',
            'contact'=>'required',
            'password'=>['required'],
            'password_confirmation'=>'required|same:password',
            'photo' => 'required|mimes:png,jpg,jpeg|image',
        
            
        ]);

     


    //   $user = users::create([
    //         'nom'=>$request->nom,
    //         'prenom'=>$request->prenom,
    //         'contact'=>$request->contact,
    //         'photo'=>$request->photo,
    //         'email'=>$request->email,
    //         'password'=>$request->Hash::make($request->password),

    //      ]);


       //  //    Pour générer un nom d'un fichier et recuperer l'extention d'une image
      $filename = time().'.'. $request->photo->extension();

       // Pour enregistré un fichier depuis request
      $path =  $request->file('photo')->storeAs('photo_user',$filename,'public');

      $user = new User();
      $user->nom = $request->nom;
      $user->prenom = $request->prenom;
      $user->email = $request->email;
      $user->contact = $request->contact;
      $user->password = Hash::make($request->password);
      $user->photo = $path;
      $user->status = 1;

      $user->save();
    //    dd( $user);

    return redirect()->route('login')->with('login','Compte créer avec succès');

     }
}
