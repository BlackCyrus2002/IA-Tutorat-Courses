<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentLeçon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = "string";

    protected static function booted(){
        static::creating( function($id){

            if(empty($id->id)){
                $id->id = (string) \Illuminate\Support\Str::uuid();
            }

        });
    }

    public function imageUrl(){
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }


    // Au cas ou la table document_etudiants est crée
    public function Etudiant(){
        $this->belongsToMany(User::class,"document_etudiants");
    }

    // Au cas ou la table document_enseignants est crée
    public function Enseignant(){
        $this->belongsTo(User::class);
    }
}
