<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = "string";

    protected static function booted(){
        static::creating( function($chapitre){

            if(empty($chapitre->id)){
                $chapitre->id = (string) \Illuminate\Support\Str::uuid();
            }

        });
    }

    public function imageUrl(){
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function cours(){
        return $this->belongsTo(Cours::class);
    }

    public function exercice(){
        return $this->exercice();
    }

    public function etudiant(){
        return $this->belongsToMany(User::class,"chapitre_etudiants");
    }

    public function enseignant(){
        return $this->belongsToMany(User::class,"chapitre_enseigants");
    }
}
