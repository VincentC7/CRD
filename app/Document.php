<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id_proprietaire',
        'src'
    ];

    public function proprietaire(){
        return $this->belongsTo('App\User', 'id_proprietaire');
    }
}
