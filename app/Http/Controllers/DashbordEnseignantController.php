<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordEnseignantController extends Controller
{
    public function dashboard()
    {
        return view("dashboard_enseignant.dashboard");
    }
    public function cour_suivie()
    {
        return view('dashboard_enseignant.cours.course_single');
    }
    public function course_lesson()
    {
        return view('dashboard_enseignant.cours.course_lesson');
    }
    public function add_cours()
    {
        return view("dashboard_enseignant.cours.add_cours");
    }
    public function edit_cours()
    {
        return view('dashboard_enseignant.cours.edit_cours');
    }
}