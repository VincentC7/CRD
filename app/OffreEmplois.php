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

    public function employer(){
        return User::findOrFail($this->id_employer)->name;
    }

    public function candidatures(){
        return $this->hasMany('Candidature::class', 'id_offre');
    }
}
