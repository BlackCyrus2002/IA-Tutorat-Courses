<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = "string";

    protected static function booted(){
        static::creating( function($sous_categorie){

            if(empty($sous_categorie->id)){
                $sous_categorie->id = (string) \Illuminate\Support\Str::uuid();
            }

        });
    }

    public function imageUrl(){
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function categorie(){
        return $this->belongsTo(CategorieCours::class);
    }

    public function admin(){
        return $this->belongsTo(User::class);
    }
}
