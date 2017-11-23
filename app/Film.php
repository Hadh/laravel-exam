<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'nom', 'auteur', 'date_sortie', 'disponible','genre_id'
    ];

    public function genres(){
        return $this->belongsTo('App\Genre');
    }

    public function users(){
        return $this->belongsToMany('\App\User');
    }
}
