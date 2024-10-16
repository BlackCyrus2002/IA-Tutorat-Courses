<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Enseignant extends Model
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

    public function imageUrl(){
        return Storage::url($this->image);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function Chapitre(){
        return $this->belongsToMany(Chapitre::class,"chapitre_enseignants");
    }

}
