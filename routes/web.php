<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashbordEnseignantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard',[DashboardController::class])->name('dashboard');

Route::get('/', [AccueilController::class, 'index'])->name('index');

Route::prefix('/')->name("braine.")->group(function () {
    Route::get('/inscrivez-vous', [AuthController::class, 'create'])->name('register');
    Route::post('/inscrivez-vous', [AuthController::class, 'store']);
    Route::get('/login', [AuthController::class, 'login'])->name("login");
    Route::post('/login', [AuthController::class, 'loginStore']);


    Route::get('/politique-de-confidentialité', [AccueilController::class, 'private_policy'])->name('private_policy');
});

// Route::get('/login', [AuthController::class, 'login'])->name("login");

Route::prefix('/')->name("dashboard.")->group(function () {
    Route::get('/tableau-de-bord', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/cour-suivie', [DashboardController::class, 'cour_suivie'])->name('cour_suivie');
    Route::get('/leçon-etudiant', [DashboardController::class, 'course_lesson'])->name('course_lesson');
});
Route::prefix('/')->middleware("auth")->name("dashbord_enseignant.")->group(function () {
    Route::get('/tableau-de-bord-enseignant', [DashbordEnseignantController::class, 'dashboard'])->name('dashboard');
    Route::get('/cour-enseignant', [DashbordEnseignantController::class, 'cour_suivie'])->name('cour_suivie');
    Route::get('/leçon-enseignant', [DashbordEnseignantController::class, 'course_lesson'])->name('course_lesson');
    Route::get('/ajouter-un-cour', [DashbordEnseignantController::class, 'add_cours'])->name('add_cours');
    Route::get('/Modifier-un-cour', [DashbordEnseignantController::class, 'edit_cours'])->name('edit_cours');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });