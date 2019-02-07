<?php

namespace App\Http\Controllers;

use App\Candidature;

class TransportsController extends Controller {

    public function show(){
        $besoins = Candidature::where('transport','=','1')->where('etat','=','retenue')->get();
        return view('listeBesoinTransp', ['transports'=>$besoins]);
    }

}
