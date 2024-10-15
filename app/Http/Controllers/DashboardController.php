<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    public function cour_suivie()
    {
        return view('dashboard.cours.course_single');
    }
    public function course_lesson()
    {
        return view('dashboard.cours.course_lesson');
    }
}