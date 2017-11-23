<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'nom',
    ];

    public function films(){
        return $this->hasMany('App\Film');
    }
}
