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
    public function mon_test()
    {
        return view('dashboard.test');
    }
    public function verify_test(Request $request)
    {

        $correctAnswers = [
            'algo1' => "C",
            'algo2' => "B",
            'algo3' => "B",
            'algo4' => "A",
            'algo5' => "B",
            'html1' => "B",
            'html2' => "B",
            'html3' => "B",
            'html4' => "A",
            'html5' => "B",
            'js1' => "A",
            'js2' => "A",
            'js3' => "A",
            'js4' => "B",
            'js5' => "C",
            'css1' => "B",
            'css2' => "B",
            'css3' => "A",
            'css4' => "C",
            'css5' => "B",
        ];

        $score = 0;

        // Parcourir les réponses envoyées par l'utilisateur
        foreach ($correctAnswers as $question => $correctAnswer) {
            if ($request->input($question) === $correctAnswer) {
                $score++;
            }
        }

        // Retourner le score à une vue ou rediriger avec un message
        return view('quiz-result', ['score' => $score]);
    }
}