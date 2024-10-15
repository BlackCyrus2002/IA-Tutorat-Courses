<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view("braine.register");
    }

    public function store(AuthRegisterRequest $resquest){
        $data = $resquest->validated();
        dd($data);
    }

    public function login(){
        return view("braine.login");
    }
}
