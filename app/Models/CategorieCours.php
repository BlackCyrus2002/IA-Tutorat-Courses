<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieCours extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = "string";

    protected static function booted(){
        static::creating( function($categorie){

            if(empty($categorie->id)){
                $categorie->id = (string) \Illuminate\Support\Str::uuid();
            }

        });
    }

    public function imageUrl(){
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function admin(){
        return $this->belongsTo(User::class);
    }

    // public function Cours(){
    //     $this->hasMany(Cours::class);
    // }

    public function SousCategorie(){
        return $this->hasMany(SousCategorie::class);
    }

}
