<?php

namespace App\Http\Controllers;

use App\OffreEmplois;
use Illuminate\Http\Request;

class OffreEmploisController extends Controller {

    public function index() {
        //return view('projects.index', ['projects'=>Projects::all()]);
    }

    public function create() {
        return view('newOffreEmplois');
    }

    public function store() {
        /**
         *  request()->validate([
        'title'=> ['required', 'min:5', 'max:255'],
        'description'=> ['required', 'min:5'],
        ]);
        Projects::create(request(['title','description']));
        return redirect('/projects');
         */
    }

    public function show(OffreEmplois $offfre) {
        //return view('projects.show', compact('project'));
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
