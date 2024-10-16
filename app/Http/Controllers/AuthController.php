<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRegisterRequest;
use App\Http\Requests\LoginEudiantRequest;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create(){
        return view("braine.register");
    }

    public function store(AuthRegisterRequest $request){
        $data = $request->validated();
        $image = $request->validated("image");
        if($image && !$image->getError()){
            $data["image"] = $image->store("Etudiant","public");
        } else {
            // Gestion des erreurs d'image
            return redirect()->back()->withErrors(['image' => 'Erreur lors du téléchargement de l\'image.']);
        }
        $data["password"] = \Illuminate\Support\Facades\Hash::make($data["password"]);
        // dd($data);
        $user = User::create([
            "email" => $data["email"],
            "password" => $data["password"],
        ]);
        $data = array_diff_key($data, array_flip(['email', 'password']));
        $data["user_id"] = $user->id;
        Etudiant::create($data);


        Auth::login($user);

        return redirect()->route("dashboard.dashboard"); // Redirection après connexion
        // return redirect()->route("login")->with("success","Succces de la creation du compte");
        // dd($data);
    }

    public function login(){
        return view("braine.login");
    }

    public function loginStore(LoginEudiantRequest $request){
        $credential = $request->validated();
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            // $user = Auth::user();
            return redirect()->route("dashboard.dashboard");
        }
        return redirect(route("login"))->withErrors([
            "fail" => "Email ou mot de passe invalide"
        ])->onlyInput('email');
    }
}
