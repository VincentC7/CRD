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
        return $this->belongsTo('User::class', 'id_candidat');
    }

    public function offre(){
        return $this->belongsTo('OffreEmplois::class', 'id_offre');
    }
}