<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\OffreEmplois;
use Illuminate\Support\Facades\Auth;

class OffreEmploisController extends Controller {

    public function index() {
        $offresEmploi = \App\OffreEmplois::all();
        return view('listeOffresEmploi', compact('offresEmploi'));
    }

    public function create() {
        if (isset(Auth::user()->id)){
            return view('newOffreEmplois', ['listeCate'=>Categorie::all()]);
        }
        return redirect('/login');
    }

    public function store() {
        request()->validate([
            'descriptionPoste'=> ['required', 'min:5'],
            'duree'=> ['required', 'min:5'],
            'lieu' => ['required', 'min:5'],
        ]);
        $id_cat = Categorie::where('nom','=', request('categorie'))->first()->id;

        OffreEmplois::create([
            'id_employer'=> Auth::user()->id,
            'profil' => request( 'descriptionPoste'),
            'durée' => request('duree'),
            'lieu_travail' => request('lieu'),
            'id_categorie' => $id_cat,
        ]);
        return redirect('/OffreEmplois');
    }



    public function show($offre) {
        return view('detailsOffreEmploi', ['offre'=>OffreEmplois::findOrFail($offre)]);
    }

    public function edit(OffreEmplois $offre){
        //return view('projects.edit', compact('project'));
    }

    public function update(OffreEmplois $offre) {
        /**
         * $attribut = request()->validate([
        'title'=> 'required',
        'description'=> 'required',
        ]);
        $project->update($attribut);
        return redirect('/projects');
         */

    }

    public function destroy(OffreEmplois $offre) {
        /**
         * $project->delete();
        return redirect('/projects');
         */
    }
}
