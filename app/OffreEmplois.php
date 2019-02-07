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

    public function categNom($id){
        return Categorie::findOrFail($id)->nom;
    }
}
