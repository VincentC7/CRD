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
        if(\auth()->user()->candidatures()->where('id_offre','=',$offre)->count()==0){
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

    public function editer($id) {
        $candidature = Candidature::findOrFail($id);
        if ($candidature->id_candidat==auth()->user()->id) {
            return view('candidatures.edit',['candidature'=>$candidature, 'offre'=>$candidature->offre()->first()]);
        } else {
            return redirect(URL::to('/'));
        }
    }

    public function display($id) {
        return view('vueCandidature', ['candidature' => Candidature::findOrFail($id)]);
    }

    public function displayPublic($id) {
        return view('infoCandidPublic', ['candidature' => Candidature::findOrFail($id)]);
    }

    public function traiter($candidature){
        return view('traiterCandidature', ['candidature' => Candidature::findOrFail($candidature)]);
    }

    public function accept($candidature){
        Candidature::findOrFail($candidature)->update([
            'etat' => 'retenue'
        ]);
        return back();
    }

    public function refuse($candidature){
        Candidature::findOrFail($candidature)->update([
            'etat' => 'refusée'
        ]);
        return back();
    }

    public function saveEdition($id) {
        $candidature = Candidature::findOrFail($id);
        if ($candidature->id_candidat == auth()->user()->id){
            if (request()->has('transp')) $transport=1;
            else $transport=0;
            $lieuDep = $_POST['lieuDep'];
            $typeVehicule = $_POST['typeVehicule'];
            $infos = $_POST['infoComp'];
            $candidature->transport = $transport;
            if (!is_null($lieuDep) && $lieuDep!="")
            $candidature->lieuDep = $lieuDep;
            if (!is_null($typeVehicule) && $typeVehicule!="")
            $candidature->typeVehicule = $typeVehicule;
            if (!is_null($infos) && $infos!="")
            $candidature->infos = $infos;
            $candidature->save();
            return redirect(route('afficherCandidature', ['id' => $id]));
        } else {
            return redirect(URL::to('/'));
        }

    }

    public function delete($id) {
        $candidature = Candidature::findOrFail($id);
        if ($candidature->id_candidat == auth()->user()->id){
            $candidature->delete();
            return redirect(route('user_candidatures'));
        } else {
            return redirect(URL::to('/'));
        }
    }
}
