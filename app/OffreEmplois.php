<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreEmplois extends Model {
    protected $fillable = [
        'id_employer',
        'profil',
        'durée',
        'lieu_travail',
        'id_categorie',
    ];

    public function categNom(){
        return Categorie::findOrFail($this->id_categorie)->nom;
    }
}
