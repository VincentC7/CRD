<?php

namespace App\Http\Controllers;

use App\Candidature;
use App\OffreEmplois;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CandidatureController extends Controller {

    public function postuler($offre){
        if (isset(Auth::user()->id)){
            return view('postuler', ['offre'=>OffreEmplois::findOrFail($offre)] );
        }
        return redirect(route('login'));
    }

    public function savePostul($offre){
        $o = OffreEmplois::findOrFail($offre);
        if(!\auth()->user()->candidatures()->where('id','=',$offre)){
            Candidature::create([
                'id_offre' => $o->id,
                'id_candidat' => Auth::user()->id,
                'lieuDep' => request('lieuDep'),
                'transport' => request()->has('transp'),
                'typeVehicule' => request(''),
            ]);
            return redirect(route('OffreEmplois.index'));
        } else {
            return redirect(URL::to('/'));
        }

    }

    public function display($id) {
        return view('vueCandidature', ['candidature' => Candidature::findOrFail($id)]);
    }
}
