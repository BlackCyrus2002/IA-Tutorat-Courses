<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('braine.index');
    }
    public function register()
    {
        return view('braine.register');
    }
    public function private_policy()
    {
        return view('braine.private_policy');
    }
}
