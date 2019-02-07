<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {
    protected $fillable = [
        'nom'
    ];

    public function offres(){
        return $this->hasMany('App\OffreEmplois', 'id_categorie');
    }
}
