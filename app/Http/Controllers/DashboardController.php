<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $user = Auth::user();
        $etudiant = $user->Etudiants()->get()[0];
        $CoursEtudiant = $user->Cours()->get();

        return view('dashboard.dashboard', compact(
            "user",
            "etudiant",
            "CoursEtudiant",
        ));
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