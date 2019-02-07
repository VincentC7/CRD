<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model{
    protected $fillable = [
        'id_offre',
        'id_candidat',
        'etat',
        'lieuDep',
        'transport',
        'typeVehicule',
        'infos'
    ];

    public function candidat(){
        return $this->belongsTo('App\User', 'id_candidat');
    }

    public function offre(){
        return $this->belongsTo('App\OffreEmplois', 'id_offre');
    }
}