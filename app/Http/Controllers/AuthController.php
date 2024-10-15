<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view("braine.register");
    }

    public function store(AuthRegisterRequest $resquest){
        $data = $resquest->validated();
        $image = $resquest->validated("image");
        if($image && !$image->getError()){
            $data["image"] = $image->store("user","public");
        }
        $data["password"] = \Illuminate\Support\Facades\Hash::make($data["password"]);
        // dd($data);
        $user = User::create([
            "email" => $data["email"],
            "password" => $data["password"],
        ]);

        $user->Etudiants()->attach(
            array_diff_key($data, array_flip(['email', 'password']))
        );

        return redirect()->route("login")->with("success","Succces de la creation du compte");
        // dd($data);
    }

    public function login(){
        return view("braine.login");
    }

    public function loginStore(){
        return redirect()->route("");
    }
}
