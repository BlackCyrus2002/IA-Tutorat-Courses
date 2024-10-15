<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Cours extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = "string";

    protected static function booted(){
        static::creating( function($formation){

            if(empty($formation->id)){
                $formation->id = (string) \Illuminate\Support\Str::uuid();
            }

        });
    }

    public function CategorieCours(){
        $this->belongsTo(CategorieCours::class);
    }

    public function Etudiant(){
        $this->belongsToMany(User::class);
    }

    public function Enseignant(){
        $this->belongsToMany(User::class);
    }

    public function Chapitre(){
        $this->hasMany(Chapitre::class);
    }
}
