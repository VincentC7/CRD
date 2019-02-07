<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
	protected $fillable = [
        'user_id',
        'offer_id'
    ];

	public function user() {
		return $this->belongsTo('App\User', 'user_id');
	}

	public function offre() {
		return $this->belongsTo('App\OffreEmplois', 'offer_id');
	}
}
