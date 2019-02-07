<?php

namespace App\Http\Controllers;

use App\OffreEmplois;
use App\Favoris;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
    public function change(OffreEmplois $offre) {
    	if(auth()->user()->hasFavoris($offre)) {
    		Favoris::where([['offer_id', '=', $offre->id], ['user_id', '=', auth()->user()->id]])->first()->delete();
    	} else {
    		Favoris::create(['offer_id' => $offre->id, 'user_id' => auth()->user()->id]);
    	}
    	return back();
    }

    public function show() {
    	return view('favoris.show', ['favoris' => auth()->user()->favoris]);
    }
}
