<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

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
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function Cours()
    {
        return $this->belongsToMany(Cours::class);
    }

    public function Chapitre()
    {
        return $this->belongsToMany(Chapitre::class);
    }

    public function Leçons()
    {
        return $this->belongsToMany(Leçon::class);
    }

    public function CategorieCours()
    {
        return $this->belongsToMany(CategorieCours::class);
    }
    public function Etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
