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


    public function categorie(){
        return $this->belongsTo('App\Categorie', 'id_categorie');
    }

    public function employer(){
            return User::findOrFail($this->id_employer);
    }

    public function candidatures(){
        return $this->hasMany('App\Candidature', 'id_offre');
    }

    public function favoris() {
        return $this->hasMany('App\Favoris', 'offer_id');
    }

}
